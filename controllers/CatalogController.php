<?php
    
    /**
     * CatalogController
     */
    class CatalogController extends Controller
    {
        /**
         * Action page catalog
         * @param int $page
         * @return bool
         */
        public function indexAction($page = 1)
        {
            // Get page number
            $page = str_replace("page-", "", $page);
            
            // We get categories
            $categoriesList = CategoryModel::getCategoriesList();
            
            // We get products on the page
            $product = ProductModel::getProductsList($page);
    
            // We get the number of goods
            $total = ProductModel::getTotalProducts();
    
            // On-page pagination
            $pagination = new Pagination($total, $page, ProductModel::SHOW_BY_DEFAULT, 'page-');
    
            // Connect view
            $this->view('header.tpl');
            $this->view('catalog.tpl', ['product' => $product,
                'categoriesList' => $categoriesList,
                'pagination' => $pagination]);
            $this->view('footer.tpl');
            
            return true;
        }
    
        /**
         * Action Categories page
         * @param $categoryId
         * @param int $page
         * @return bool
         */
        public function categoryAction($categoryId, $page = 1)
        {
            // Get page number
            $page = str_replace("page-", "", $page);
    
            // We get categories
            $categoryId = intval($categoryId);
            $categoriesList = CategoryModel::getCategoriesList();
            
          // We get a friend of the category
            $product = ProductModel::getProductsCategoryList($categoryId, $page);
    
            // We get the number of goods
            $total = ProductModel::getTotalProductsInCategory($categoryId);
    
            // On-page pagination
            $pagination = new Pagination($total, $page, ProductModel::SHOW_BY_DEFAULT, 'page-');
    
            // Connect view
            $this->view('header.tpl');
            $this->view('category.tpl', ['product' => $product,
                'categoriesList' => $categoriesList,
                'pagination' => $pagination,
                'categoryId' => $categoryId]);
            $this->view('footer.tpl');
            
            return true;
        }
    }