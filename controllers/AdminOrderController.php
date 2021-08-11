<?php

/**
 * AdminOrderController
 * Managing orders in the admin panel
 */
class AdminOrderController extends AdminBase
{

    /**
     * Action for the "Manage orders" page
     */
    public function indexAction()
    {
        // Access check
        self::checkAdmin();

        // We get a list of orders
        $ordersList = OrderModel::getOrdersList();

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_order/index.tpl', ['ordersList' => $ordersList]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "Edit order" page
     */
    public function updateAction($id)
    {
        // Access check
        self::checkAdmin();

        // We receive data about a specific order
        $order = OrderModel::getOrderById($id);

        // Form processing
        if (isset($_POST['submit'])) {
            
            // Getting data from the form
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $date = $_POST['date'];
            $status = $_POST['status'];

            // Save changes
            OrderModel::updateOrderById($id, $userName, $userPhone, $userComment, $date, $status);

            // Redirecting the user to the order management page
            header("Location: /admin/order/view/$id");
        }

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_order/update.tpl', [
            'order' => $order,
            'id' => $id
        ]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "View order" page
     */
    public function viewAction($id)
    {
        // Access check
        self::checkAdmin();

        // Получаем данные о конкретном заказе
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

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_order/view.tpl', [
            'purchase' => $purchase,
            'order' => $order,
            'products' => $products,
            'productsQuantity' => $productsQuantity,
            ]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "Delete order" page
     */
    public function deleteAction($id)
    {
        // Access check
        self::checkAdmin();

        // Form processing
        if (isset($_POST['submit'])) {
            
            // Delete order
            OrderModel::deleteOrderById($id);

            // Redirecting the user to the product management page
            header("Location: /admin/order");
        }

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_order/delete.tpl');
        $this->view('footer_admin.tpl');
        return true;
    }

}
