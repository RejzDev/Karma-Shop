<?php
    /**
     * Class Db
     */
    
    class Db
    {
        /**
         * DB Connection
         * @return PDO
         */
        public static function getConnection()
        {
            $paramsPath = ROOT . '/config/db_params.php';
            $params = include($paramsPath);
        
            $dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
            
            try{
                $db = new PDO($dsn, $params['user'], $params['password'], array(
                    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8",
                    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
                    PDO::ATTR_ERRMODE=>TRUE
                ));
            }catch(PDOException $e){
    
                echo 'Connection failed: ' . $e->getMessage();
    
            }
    
            return $db;
        }
        
    }