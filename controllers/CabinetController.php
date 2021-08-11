<?php
    
    /**
     * CabinetController
     *
     */
    class CabinetController extends Controller
    {
        /**
         * Action for the "Cabinet" page
         * @return bool
         */
        public function indexAction()
        {
            
            // Check logged
            $userId = UserModel::checkLogged();
            
            //We get user data
            $user = UserModel::getUserById($userId);
    
            // Connect the view
            $this->view('header.tpl');
            $this->view('cabinet.tpl', [
                    'user' => $user]
            );
            $this->view('footer.tpl');
    
            return true;
        }
    
        /**
         * Action for the "Edit user date" page
         * @return bool
         */
        public function editAction()
        {
            // Check logged
            $userId = UserModel::checkLogged();
    
            //We get user data
            $user = UserModel::getUserById($userId);
            
            
            $name = $user['name'];
    
            
            $result = false;
            
            // Form processing
            if (isset($_POST['submit'])) {
                
                // Getting data from the form
                $name = $_POST['name'];
                $password = $_POST['password'];
    
    
                // Form error flag
                $errors = false;
    
                // If necessary, you can validate the values as needed
                if (!UserModel::checkName($name)) {
                    $errors[] = 'The name must not be shorter than 2 characters';
                }
               
                if (!UserModel::checkPassword($password)) {
                    $errors[] = 'Password must not be shorter than 6 characters';
                }
                
                if ($errors == false) {
                    $result = UserModel::edit($userId, $name, $password);
                }
            }
    
            // Connect the view
            $this->view('header.tpl');
            $this->view('view.tpl', ['user' => $user,
                    'result' => $result]
            );
            $this->view('footer.tpl');
    
            return true;
        }
    }