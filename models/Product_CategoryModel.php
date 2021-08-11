<?php
    
    /**
     * Class Product_CategoryModel
     */
    
    class Product_CategoryModel
    {
        /**
         * Adding a category to a product
         * @param $categoryId
         * @param $productId
         * @return false|PDOStatement
         */
        public static function addCategoryProduct($categoryId, $productId)
        {
            $db = Db::getConnection();
        
            $id = intval($productId);
            $values = array();
            
            foreach ($categoryId as $item) {
                $values[] = "($id, " . $item . ")";
            }
            $stringValue = implode(', ', $values);
        
            $sql = "INSERT INTO product_category (product_id, category_id) VALUES " . $stringValue;
        
        
            $result = $db->query($sql);
        
        
            return $result;
        }
    
        /**
         * Editing a product category
         * @param $categoryId
         * @param $productId
         * @return false|PDOStatement
         */
        public static function editCategoryProduct($categoryId, $productId)
        {
            $db = Db::getConnection();
            $id = intval($productId);
        
            if (isset($categoryId)) {
    
              $deleteSql = "DELETE FROM `product_category` WHERE product_id = " . $productId;
    
              $delete = $db->query($deleteSql);
    
                $values = array();
                foreach ($categoryId as $item) {
                    $values[] = "($id, " . $item . ")";
                }
                $stringValue = implode(', ', $values);
    
                $sql = "INSERT INTO product_category (product_id, category_id) VALUES " . $stringValue;
    
    
                $result = $db->query($sql);
            }
        
            return $result;
        }
    
        /**
         * Returns a list of product categories
         * @param $id
         * @return array
         */
        public static function getCategoryProductIds($id)
        {
            $db = Db::getConnection();
            $id = intval($id);
            
            $sql = "SELECT * FROM product_category WHERE product_id = " . $id;
    
            $result = $db->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $categoryId = array();
    
            $i = 0;
            while ($row = $result->fetch()){
                $categoryId[$i]['id'] = $row['category_id'];
                $i++;
            }
    
            return $categoryId;
        }
    }