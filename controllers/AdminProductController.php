<?php

/**
 * AdminProductController
 * Management of products in the admin panel
 */
class AdminProductController extends AdminBase
{

    /**
     * Action product management pages"
     */
    public function indexAction()
    {
        // Access check
        self::checkAdmin();

        // get a list of goods
        $productsList = ProductModel::getProductList();

        // connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_product/index.tpl', [
            'productsList' => $productsList]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "Add Product" page
     */
    public function createAction()
    {
        // Access check
        self::checkAdmin();

        // Get the list of categories for the dropdown list
        $categoriesList = CategoryModel::getCategoriesListAdmin();

        // Form processing
        if (isset($_POST['submit'])) {
           
            // Getting data from the form
            $options['name'] = $_POST['name'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['price'] = $_POST['price'];
            $options['brand'] = $_POST['brand'];
            $options['width'] = $_POST['width'];
            $options['height'] = $_POST['height'];
            $options['depth'] = $_POST['depth'];
            $options['weight'] = $_POST['weight'];
            $options['exclusive'] = $_POST['exclusive'];
            $options['recommend'] = $_POST['recommend'];
            $options['status'] = $_POST['status'];
            
           
            $categoryId = $_POST['category_id'];

            // Form error flag
            $errors = false;

            // If necessary, you can validate the values as needed
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Fill in the fields';
            }
            // ????????

            if ($errors == false) {
                // Add a new product
              $id = ProductModel::createProduct($options);
                
                // If an entry is added
                if ($id) {
                       Product_CategoryModel::addCategoryProduct($categoryId, $id);
                    // Check if the image was loaded through the form
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // If it was loaded, move it to the desired folder, give a new name
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    
                        // Make uploading several images in different folders
                    
                    }
                
                };

                // Redirecting the user to the product management page
               header("Location: /admin/product");
            }
        }

        // connect the view
        
        $this->view('header_admin.tpl');
        $this->view('admin_product/create.tpl', [
            'categoriesList' => $categoriesList]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "Edit Product" page
     */
    public function updateAction($id)
    {
        // Access check
        self::checkAdmin();
    
        $id = intval($id);
        
        // Get the list of categories for the dropdown list
        $categoriesList = CategoryModel::getCategoriesListAdmin();

        // We receive data about a specific order
        $product = ProductModel::getProductIds($id);
        // Getting product categories
        $categoryIds = Product_CategoryModel::getCategoryProductIds($id);
       

        // Form processing
        if (isset($_POST['submit'])) {
            // Getting data from the form
            $options['name'] = $_POST['name'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['price'] = $_POST['price'];
            $options['brand'] = $_POST['brand'];
            $options['width'] = $_POST['width'];
            $options['height'] = $_POST['height'];
            $options['depth'] = $_POST['depth'];
            $options['weight'] = $_POST['weight'];
            $options['exclusive'] = $_POST['exclusive'];
            $options['recommend'] = $_POST['recommend'];
            $options['status'] = $_POST['status'];
    
           
            if (isset($_POST['category_id'])) {
                $categoryId = $_POST['category_id'];
            } else {
                $categoryId = $categoryIds;
            }
            // Form error flag
            $errors = false;
    
            // If necessary, you can validate the values as needed
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Fill in the fields';
            }
            // ????????
    
           // Edit products
            ProductModel::updateProductById($id, $options);
            Product_CategoryModel::editCategoryProduct($categoryId, $id);
    
            // Check if the image was loaded through the form
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                // If it was loaded, move it to the desired folder, give a new name
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
        
                // Make uploading several images in different folders
        
            }
                
            

            // Redirecting the user to the product management page
           header("Location: /admin/product");
        }
        

        // connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_product/update.tpl', ['id' => $id,
            'categoriesList' => $categoriesList,
            'product' => $product,
            'categoryIds' => $categoryIds]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "Delete product" page
     */
    public function deleteAction($id)
    {
        // Access check
        self::checkAdmin();
        $id = intval($id);

        // Form processing
        if (isset($_POST['submit'])) {
            
            // Delete products
            ProductModel::deleteProductById($id);

            // Redirecting the user to the product management page
            header("Location: /admin/product");
        }

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_product/delete.tpl', ['id' => $id]);
        $this->view('footer_admin.tpl');
        return true;
    }
    
    

}
