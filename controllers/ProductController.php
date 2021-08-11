<?php
    /**
     * Class ProductController
     */
    
    class ProductController extends Controller
    {
        /**
         * Action product page
         * @param $id
         * @return bool
         */
        public function viewAction($id)
        {
            $product = ProductModel::getProductIds($id);
            
            $this->view('header.tpl');
            $this->view('product.tpl', ['product' => $product]);
            $this->view('footer.tpl');
            return true;
        }
        
    }