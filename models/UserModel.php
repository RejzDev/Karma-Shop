<?php
    
    /**
     * Class UserModel
     */
    
    class UserModel
    {
        /**
         * User registration
         * @param $name
         * @param $email
         * @param $password
         * @return bool|PDOStatement
         */
        public static function register($name, $email, $password)
        {
            // DB connection
            $db = Db::getConnection();
    
            // Password code
            $password = md5($password);
    
            // DB query text
            $sql = 'INSERT INTO users (email, password, name) VALUES (:email, :password, :name)';
            
            $result = $db->prepare($sql);
            $result->execute(array(
                ':name' => $name,
                ':email' => $email,
                ':password' => $password,
            ));
            
            return $result;
        }
    
        /**
         * Name check
         * @param $name
         * @return bool
         */
        public static function checkName($name)
        {
            if (strlen($name) >= 2) {
                return true;
            }
            return false;
        }
    
        /**
         * Password check
         * @param $password
         * @return bool
         */
        public static function checkPassword($password)
        {
            if (strlen($password) >= 6) {
                return true;
            }
            return false;
        }
    
        /**
         * Checking the correctness of the email address
         * @param $email
         * @return bool
         */
        public static function checkEmail($email)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            return false;
        }
    
        /**
         * Checking the Email address in the database
         * @param $email
         * @return bool
         */
        public static function checkEmailExists($email)
        {
            // DB connection
            $db = Db::getConnection();
            // DB query text
            $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
            
            $result = $db->prepare($sql);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->execute();
            
            if ($result->fetchColumn())
                return true;
            return false;
        }
    
        /**
         * Checking user credentials for login
         * @param $email
         * @param $password
         * @return bool
         */
        public static function checkUserData($email, $password)
        {
            // DB connection
            $db = Db::getConnection();
    
            // Password code
            $password = md5($password);
    
            // DB query text
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            
            
            $result = $db->prepare($sql);
            $result->execute(array(
                ':email' => $email,
                ':password' => $password,
            ));
            
            $user = $result->fetch();
            
            if ($user) {
                return $user->id;
            }
            return false;
        }
    
        /**
         * Phone number verification
         * @param $phone
         * @return bool
         */
        public static function checkPhone($phone)
        {
            if (strlen($phone) >= 10) {
                return true;
            }
            return false;
        }
    
        /**
         * Add user to session
         * @param $userId
         */
        public static function auth($userId)
        {
            
            $_SESSION['user'] = $userId;
        }
    
        /**
         * Check if the user is logged into the site
         * @return mixed
         */
        public static function checkLogged()
        {
            
            if (isset($_SESSION['user'])) {
                return $_SESSION['user'];
            }
            
            header("Location: /user/login");
        }
    
        /**
         * User verification
         * @return bool
         */
        public static function isGuest()
        {
            
            $userCheck = (isset($_SESSION['user'])) ? false : true;
            
            return $userCheck;
        }
    
        /**
         * Returns the username
         * @param $userId
         * @return mixed
         */
        public static function getUserById($userId)
        {
            // DB connection
            $db =Db::getConnection();
    
            // DB query text
            $sql = "SELECT * FROM users WHERE id = :userId";
            
            $result = $db->prepare($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute(array(
                'userId' => $userId,
                ));
            
            
            return $result->fetch();
        }
    
        /**
         * Changing user tributes
         * @param $userId
         * @param $name
         * @param $password
         */
        public static function edit($userId, $name, $password)
        {
            // DB connection
            $db = Db::getConnection();
    
            // Password code
            $password = md5($password);
    
            // DB query text
            $sql = "UPDATE users SET name = :name, password = :password WHERE id = :userId";
            
            $result = $db->prepare($sql);
            $result->execute(array(
               ':name' => $name,
               ':password' => $password,
               ':userId' => $userId,
            ));
            
            return $result;
        }
        
    }