<?php
    
    /**
     * Class HomeController
     */
    
    class HomeController extends Controller
    {
        /**
         * @return bool
         */
      public  function indexAction() {
        
          // We get a products
        $product = ProductModel::getLastProducts();
          // We get exclusive products
        $exclusive = ProductModel::getExclusiveProducts();
          // We get recommend products
        $recommend = ProductModel::getRecommendProducts();
        
        // Connect view
        $this->view('header.tpl');
        $this->view('index.tpl', ['product' => $product,
            'exclusive' => $exclusive,
            'recommend' => $recommend]);
        $this->view('footer.tpl');
        
        return true;
        }
    }