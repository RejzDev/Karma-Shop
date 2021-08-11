<?php
    
    /**
     * CartController
     */
    
    class CartController extends Controller
    {
        /**
         * Ajax function add product to cart
         * @param $itemId
         * @return bool
         */
       public function addtocartAction($itemId) {
            $itemId = isset($itemId) ? intval($itemId) : null;
            if (! $itemId) return false;
        
            $resData = array();
        
            // Add product in Session cart
            if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
                $_SESSION['cart'][] = $itemId;
                $resData['cntItems'] = count($_SESSION['cart']);
                $resData['success'] = 1;
            } else {
                $resData = 0;
            }
            echo json_encode($resData);
            
        return true;
        }
    
        /**
         * Action Cart page
         */
        public function indexAction()
        {
            $categories = array();
            $categories = CategoryModel::getCategoriesList();
        
            $productsIdInCart = array();
            $products = array();
            $totalPrice = 0;
        
            $productsIdInCart = CartModel::getProducts();
        
        
            if ($productsIdInCart) {
                $products = ProductModel::getProductItemsByIds($productsIdInCart);
                $totalPrice = CartModel::getTotalPrice($products);
            } else {
                $products = false;
            }
    
            // Connect view
            $this->view('header.tpl');
            $this->view('cart.tpl', ['products' => $products,
                'totalPrice' => $totalPrice]);
            $this->view('footer.tpl');
            
            return true;
        }
    
        /**
         * Action checkout page
         * @return bool|void
         */
        public function checkoutAction()
        {
            
            // We get the product id
            $productsIdInCart = array();
            $productsIdInCart = CartModel::getProducts();
        
            if (! $productsIdInCart){
                header('Location: /cart');
                return;
            }
           
         // We get product data by Id
            $productsInCart = ProductModel::getProductItemsByIds($productsIdInCart);
            
            // We get the number of products
            $amountProduct = array();
            foreach ($productsIdInCart as $product) {
                $postVar = 'sst_' . $product;
                
                $amountProduct[$product] =  isset($_POST[$postVar]) ? intval($_POST[$postVar]) : null;
            }
        
            // We receive an array of purchased goods
            $i = 0;
            foreach ($productsInCart as &$product) {
                $product['cnt'] = isset($amountProduct[$product['id']]) ? $amountProduct[$product['id']] : 0;
                if ($product['cnt']) {
                    $product['realPrice'] = $product['cnt'] * $product['price'];
                } else {
                    unset($productsInCart[$i]);
                }
                $i++;
            }
        
            // receiving an array of purchased goods, we will interfere with the session change
            
            $_SESSION['saleCart'][] = $productsInCart;
            
            
            
            $userName = false;
            $userPhone = false;
            $userComment = false;
    
            // Check Logout
            if (UserModel::isGuest()) {
            
            
            } else {
                // Get date user
                $userId = UserModel::checkLogged();
                $user = UserModel::getUserById($userId);
                
                $userName = $user['name'];
            }
    
            // Connect the view
            $this->view('header.tpl');
            $this->view('checkout.tpl', ['productsInCart' => $productsInCart]
               );
            $this->view('footer.tpl');
    
            return true;
        }
    
    
        /**
         * Order save function
         *
         * @param array #_SESSION['saleCart'] array of purchased goods
         * @return json result information
         */
        public function saveorderAction(){
            
            // we get an array of purchased goods
            $cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'][0] : null;
    
            // if the basket is empty, then we form an answer with an error, send it in the format
            // json and exit from the function
            
            if (! $cart){
                $resData['success'] = 0;
                $resData['message'] = 'There are no items to order.';
            
                redirect ("/cart");
            
                return;
            }
        
            // Getting data from the form
            $name = $_POST['userName'];
            $phone = $_POST['userPhone'];
            $adress = $_POST['adress'];
            $comment = $_POST['userComment'];
        
        
        
            // We create a new order and receive an evo id
            $orderId = OrderModel::makeNewOrder($name, $phone, $adress, $comment);
        
            // if the order is not created, then we see an error and terminate the function
            if (! $orderId){
                $resData['success'] = 0;
                $resData['message'] = 'Ошибка создания заказа';
                return;
            }
            
            // We save the order for the created order
            $res = PurchaseModel::setPurchaseForOrder($orderId, $cart);
        
            // if successful, then we form a response and delete the change of the basket
            if ($res){
                $resData['success'] = 1;
                $resData['message'] = 'Order save';
                unset($_SESSION['saleCart']);
                unset($_SESSION['cart']);
            }  else{
                $resData['success'] = 0;
                $resData['message'] = 'Entering tribute for order No ' . $orderId;
            }
            
        
            return true;
        }
    
        /**
         * Action removing items from the cart
         * @param $productId
         * @return bool
         */
        public function removeCartAction($productId){
            if(isset($productId)) {
                $resData = CartModel::removeProduct($productId);
            }
       
            echo json_encode($resData);
        
            return true;
        }
    
    
    }