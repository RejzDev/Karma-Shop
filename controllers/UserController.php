<?php
    /**
     * Class UserController
     */
    
    class UserController extends Controller
    {
        /**
         * Registration page action
         * @return bool
         */
        public function registerAction()
        {
    
            if ($_SESSION['user']) {
                header("Location: /cabinet/");
            }
            
            $name = '';
            $email = '';
            $password = '';
    
            $errors = false;
            $result = false;
            
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                
    
                if (!UserModel::checkName($name)) {
                    $errors[] = 'The name must not be shorter than 2 characters';
                }
                if (!UserModel::checkEmail($email)) {
                    $errors[] = 'Incorrect email';
                }
                if (!UserModel::checkPassword($password)) {
                    $errors[] = 'Password must not be shorter than 6 characters';
                }
                
                if (UserModel::checkEmailExists($email)) {
                    $errors[] = 'This email is already in use';
                }
                
                if ($errors == false) {
                    $result = UserModel::register($name, $email, $password);
                    
                }
            }
            
            
            $this->view('header.tpl');
            $this->view('register.tpl', ['errors' => $errors,
                'result' => $result]);
            $this->view('footer.tpl');
                
                return true;
            }
    
        /**
         * User login page action
         */
            public function loginAction()
            {
    
                if ($_SESSION['user']) {
                    header("Location: /cabinet/");
                }
                
                $email = '';
                $password = '';
    
                $errors = false;
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    
                  
    
                    if (!UserModel::checkEmail($email)) {
                        $errors[] = 'Incorrect email';
                    }
                    if (!UserModel::checkPassword($password)) {
                        $errors[] = 'Password must not be shorter than 6 characters';
                    }
                    
                    $userId = UserModel::checkUserData($email, $password);
                    
                    if ($userId == false) {
                        $errors[] = 'Invalid denomination for entering the site';
                    } else {
                        UserModel::auth($userId);
                        
                        header("Location: /cabinet/");
                    }
                    
                }
                
    
                $this->view('header.tpl');
                $this->view('login.tpl', ['errors' => $errors]);
                $this->view('footer.tpl');
    
                return true;
            }
    
        /**
         * Action to remove a user from a session
         */
            public function logoutAction()
            {
                
                unset($_SESSION['user']);
                header("Location: /");
            }
            
    }