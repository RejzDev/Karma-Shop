<?php
    /**
     * Class OrderController
     */
    
    class OrderController extends  Controller
    {
        /**
         * Action for the "Manage orders" page
         */
        public function indexAction()
        {
            // Access check
            $userId = UserModel::checkLogged();
        
            // We get a list of orders
            $ordersList = OrderModel::getUserOrdersList($userId);
        
            // Connect view
            $this->view('header.tpl');
            $this->view('orders.tpl', ['ordersList' => $ordersList]);
            $this->view('footer.tpl');
            return true;
        }
    
        /**
         * Action for the "View order" page
         */
        public function viewAction($id)
        {
    
            $userId = UserModel::checkLogged();
            
            // We receive data about a specific order
            $order = OrderModel::getOrderById($id);
        
            $purchase = PurchaseModel::getPurchaseForOrder($id);
        
            // We receive an array with identifiers and the number of products
            $productsQuantity = array();
            foreach ($purchase as $item) {
                $productsQuantity = array(
                    $item['product_id'] => $item['amount'],
                );
            }
        
        
        
            // We receive an array with product identifiers
            $productsIds = array_keys($productsQuantity);
            
        
            // We get a list of goods in the order
            $products = ProductModel::getProductItemsByIds($productsIds);
        
            // Connect view
            $this->view('header.tpl');
            $this->view('view.tpl', [
                'purchase' => $purchase,
                'order' => $order,
                'products' => $products,
                'productsQuantity' => $productsQuantity,
            ]);
            $this->view('footer.tpl');
            return true;
        }
    }