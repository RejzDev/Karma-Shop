<?php
    /**
     * Class ProductModel
     */
    
    class ProductModel
    {
        // number of products received
        const SHOW_BY_DEFAULT = 8;
    
        /**
         * Getting the latest products
         * @param int $count
         * @return array
         */
        public static function getLastProducts($count = self::SHOW_BY_DEFAULT)
        {
            $count = intval($count);
    
            // DB connection
            $db = Db::getConnection();
            
            $productList = array();
    
            // Getting and returning results
            $result = $db->query('SELECT id, name, price FROM products '
                . ' WHERE status = "1" ORDER BY id DESC LIMIT ' . $count);
            
            $i = 0;
            while ($row = $result->fetch()) {
                $productList[$i]['id'] = $row->id;
                $productList[$i]['name'] = $row->name;
                $productList[$i]['price'] = $row->price;
                $i++;
            }
            return $productList;
        }
    
        /**
         * Obtaining the number of products
         * @return mixed
         */
        public static function getTotalProducts()
        {
            // DB connection
            $db = Db::getConnection();
    
            // Getting and returning results
            $result = $db->query('SELECT count(id) AS count FROM products '
                . 'WHERE status="1"');
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            
            return $row['count'];
        }
    
    
        /**
         * Receiving products
         * @param $page
         * @return array
         */
        public static function getProductsList($page)
        {
            // Page value
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    
            // DB connection
            $db = Db::getConnection();
            
            $products = array();
    
            // Getting and returning results
            $result = $db->query("SELECT * FROM products WHERE status = 1 ORDER BY id DESC LIMIT " . self::SHOW_BY_DEFAULT . " OFFSET " . $offset);
            
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row->id;
                $products[$i]['name'] = $row->name;
                $products[$i]['price'] = $row->price;
                $i++;
            }
            return $products;
        }
    
        /**
         * Getting products from a category
         * @param $categoryId
         * @param int $page
         * @return array
         */
        public static function getProductsCategoryList($categoryId, $page = 1)
        {
            if ($categoryId) {
    
               // Page value
                $page = intval($page);
                $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    
                // DB connection
                $db = Db::getConnection();
                
                $catId = intval($categoryId);
                
                $products = array();
                
                // Getting and returning results
                $result = $db->query("SELECT `t1`.*
                FROM products as `t1`
                JOIN category as `t2`
                 JOIN product_category as `t3` ON `t1`.id = `t3`.product_id AND `t2`.id = `t3`.category_id
                 WHERE `t1`.`status` = 1 AND `t3`.category_id = '$catId' ORDER BY `t1`.id DESC LIMIT " . self::SHOW_BY_DEFAULT . " OFFSET " . $offset);
                
                $i = 0;
                while ($row = $result->fetch()) {
                    $products[$i]['id'] = $row->id;
                    $products[$i]['name'] = $row->name;
                    $products[$i]['price'] = $row->price;
                    
                    $i++;
                }
            }
            
            return $products;
        }
        
        /**
         * Returns the number of products in a category
         * @param $ categoryId Category ID
         * @return array
         */
        public static function getTotalProductsInCategory($categoryId)
        {
            // DB connection
            $db = Db::getConnection();
    
            // Getting and returning results
            $result = $db->query("SELECT COUNT(*)
                FROM products as `t1`
                JOIN category as `t2`
                 JOIN product_category as `t3` ON `t1`.id = `t3`.product_id AND `t2`.id = `t3`.category_id
                 WHERE `t1`.`status` = '1' AND `t3`.category_id = " . $categoryId);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            
            return $row['COUNT(*)'];
        }
    
        /**
         * Receiving products for id
         * @param $id
         * @return mixed
         */
        public static function getProductIds($id)
        {
            
            $id = intval($id);
            
            if ($id) {
                // DB connection
                $db = Db::getConnection();
    
                // Getting and returning results
                $result = $db->query("SELECT * FROM products WHERE id = '$id'");
                $result->setFetchMode(PDO::FETCH_ASSOC);
            }
            
            return $result->fetch();
            
            
        }
    
    
        /**
         * Returns a list of products by ID
         * @param $productsIds
         * @return array
         */
        public static function getProductItemsByIds($productsIds)
        {
        
            $products = array();
            
            // DB connection
            $db = Db::getConnection();
        
            if (count($productsIds) > 1){
                $productsId = implode(',', $productsIds);
            } else if (count($productsIds) == 1) {
                $productsId = $productsIds[0];
            }
    
            // DB query text
            $sql = "SELECT * FROM products WHERE status='1' AND id IN ($productsId)";
            
            // Getting and returning results
            $result = $db->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
        
        
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }
        
            return $products;
        }
    
        /**
         * Exclusive Products
         * @return array
         */
        public static function getExclusiveProducts()
        {
            $products = array();
            
            // DB connection
            $db = Db::getConnection();
            
            // Getting and returning results
            $result = $db->query("SELECT id, name, price FROM products WHERE status = '1' AND exclusive = '1'");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }
    
            return $products;
        
        }
    
        /**
         * Recommended products
         * @return array
         */
        public static function  getRecommendProducts()
        {
            $products = array();
            // DB connection
            $db = Db::getConnection();
            
            // Getting and returning results
            $result = $db->query("SELECT id, name, price FROM products WHERE status = '1' AND recommend = '1'");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }
        
            return $products;
        
        }
    
        /**
         * Returns a list of products
         * @return array
         */
        public static function getProductList()
        {
            // DB connection
            $db = Db::getConnection();
        
            // Getting and returning results
            $result = $db->query('SELECT id, name, price FROM products ORDER BY id ASC');
            $productsList = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $productsList[$i]['id'] = $row->id;
                $productsList[$i]['name'] = $row->name;
                $productsList[$i]['price'] = $row->price;
                $i++;
            }
            return $productsList;
        }
    
        /**
         * Adds a new product
         * @param array $options
         * @return integer
         */
        public static function createProduct($options)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = 'INSERT INTO `products` (`name`, `availibility`, `description`, `brand`, `price`, `width`, `height`, `depth`, `weight`, `status`, `exclusive`, `recommend`)
VALUES (:name, :availibility, :description, :brand, :price, :width, :height, :depth, :weight, :status, :exclusive, :recommend)';
    
            // Get and return results. Prepared query is used
            $result = $db->prepare($sql);
          $result->execute(array(':name'=> $options['name'],
              ':availibility' => $options['availability'],
              ':description' => $options['description'],
              ':price' => $options['price'],
              ':brand' => $options['brand'],
              ':width' => $options['width'],
              ':height' => $options['height'],
              ':depth' => $options['depth'],
              ':weight' => $options['weight'],
              ':exclusive' => $options['exclusive'],
              ':recommend' => $options['recommend'],
              ':status' => $options['status'],));
            if ($result) {
                // If the request is successful, return the id of the added record
                return $db->lastInsertId();
            }
            return $result = 0;
        }
    
        /**
         * Edits a product with a given id
         * @param integer $id
         * @param array $options
         * @return boolean
         */
        public static function updateProductById($id, $options)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = "UPDATE products SET name = :name,
                availibility = :availibility,
                description = :description,
                brand = :brand,
                price = :price,
                width = :width,
                height = :height,
                depth = :depth,
                weight = :weight,
                exclusive = :exclusive,
                recommend = :recommend,
                status = :status
            WHERE id = :id";
    
            // Receiving and returning results. Prepared query is used
            $result = $db->prepare($sql);
            $result->execute(array(':name'=> $options['name'],
                ':availibility' => $options['availability'],
                ':description' => $options['description'],
                ':price' => $options['price'],
                ':brand' => $options['brand'],
                ':width' => $options['width'],
                ':height' => $options['height'],
                ':depth' => $options['depth'],
                ':weight' => $options['weight'],
                ':exclusive' => $options['exclusive'],
                ':recommend' => $options['recommend'],
                ':status' => $options['status'],
                ':id' => $id,));
            if ($result) {
                  return $db->lastInsertId();
            }
            return $result = 0;
        }
    
        /**
         * Removes the product with the specified id
         * @param integer $id
         * @return boolean
         */
        public static function deleteProductById($id)
        {
            // DB connection
            $db = Db::getConnection();
        
            
            $sql = 'DELETE FROM products WHERE id = :id';
    
            // Get and return results. Prepared query is used
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }
        
    }