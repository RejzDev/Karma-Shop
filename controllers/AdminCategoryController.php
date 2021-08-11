<?php

/**
 *  AdminCategoryController
 * Managing product categories in the admin panel
 */
class AdminCategoryController extends AdminBase
{

    /**
     * Action for the "Category Management" page
     */
    public function indexAction()
    {
        // Access check
        self::checkAdmin();

        // We get a list of categories
        $categoriesList = CategoryModel::getCategoriesListAdmin();

        
        //Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_category/index.tpl', ['categoriesList' => $categoriesList]);
        $this->view('footer_admin.tpl');
    
        return true;
    }

    /**
     * Action for the "Add Category" page
     */
    public function createAction()
    {
        // Access check
        self::checkAdmin();
    
        // We get a list of categories
        $categoriesList = CategoryModel::getCategoriesListAdmin();
    
        $errors = false;

        // Form processing
        if (isset($_POST['submit'])) {
            
            // Getting data from the form
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $category_id = $_POST['category_id'];
            $status = $_POST['status'];

            

            // If necessary, you can validate the values as needed
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }


            if ($errors == false) {
                
                // Add a new category
                CategoryModel::createCategory($name, $sortOrder, $category_id, $status);

                // Redirecting the user to the category management page
                header("Location: /admin/category");
            }
        }
    
        // We connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_category/create.tpl', [
            'errors' => $errors,
            'categoriesList' => $categoriesList,
        ]);
        $this->view('footer_admin.tpl');
        return true;
    }

    /**
     * Action for the "Edit Category" page
     */
    public function updateAction($id)
    {
        // Access check
        self::checkAdmin();

        // We get data about a specific category
        $category = CategoryModel::getCategoryById($id);

        // Form processing
        if (isset($_POST['submit'])) {
            
            // Getting data from the form
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            // Save changes
            CategoryModel::updateCategoryById($id, $name, $sortOrder, $status);

            // Redirecting the user to the category management page
            header("Location: /admin/category");
        }

        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_category/update.tpl', ['category' => $category]);
        $this->view('footer_admin.tpl');
        return true;
    }
    
    

    /**
     * Action for the "Delete category" page
     */
    public function deleteAction($id)
    {
        // Access check
        self::checkAdmin();
        $id = intval($id);

        // Form processing
        if (isset($_POST['submit'])) {
           
            // Delete category
            CategoryModel::deleteCategoryById($id);

            // Redirecting the user to the product management page
            header("Location: /admin/category");
        }
    
        // Connect the view
        $this->view('header_admin.tpl');
        $this->view('admin_category/delete.tpl', ['id' => $id]);
        $this->view('footer_admin.tpl');
        return true;
    }

}
