<?php
    /**
     * Class CategoryModel
     */
    
    class CategoryModel
    {
        /**
         * Returns an array of categories
         * @return array
         */
        public static function getCategoriesList()
        {
            $db = Db::getConnection();
            
            $categoriesList = array();
            
            $sql = "SELECT id, name FROM category ORDER BY sort_order ASC";
            
            $result = $db->query($sql);
            
            $i = 0;
            while ($row = $result->fetch()){
                $categoriesList[$i]['id'] = $row->id;
                $categoriesList[$i]['name'] = $row->name;
                $i++;
            }
            
            return $categoriesList;
            
        }
    
        /**
         * Returns an array of categories for the list in the admin panel <br/>
         * (in this case, both enabled and disabled categories are included in the result)
         * @return array <p> Category array </p>
         */
        public static function getCategoriesListAdmin()
        {
            // DB connection
            $db = Db::getConnection();
        
            // Database query
            $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');
        
            // Getting and returning results
            $categoryList = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $categoryList[$i]['id'] = $row->id;
                $categoryList[$i]['name'] = $row->name;
                $categoryList[$i]['sort_order'] = $row->sort_order;
                $categoryList[$i]['status'] = $row->status;
                $i++;
            }
            return $categoryList;
        }
    
    
        /**
         * Returns the category given by ID
         * @param $id
         * @return mixed
         */
        public static function getCategoryById($id)
        {
            // Getting and returning results
            $db = Db::getConnection();
        
            // DB query text
            $sql = 'SELECT * FROM category WHERE id = :id';
        
            // Prepared query is used
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
        
            // We indicate that we want to receive data in the form of an array
            $result->setFetchMode(PDO::FETCH_ASSOC);
        
            // We execute the request
            $result->execute();
        
            // Returning data
            return $result->fetch();
        }
    
        /**
         * Create a category
         * @param $name
         * @param $sortOrder
         * @param $category_id
         * @param $status
         * @return bool
         */
        public static function createCategory($name, $sortOrder, $category_id, $status)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = 'INSERT INTO category (parent_id, name, sort_order, status) '
                . 'VALUES (:parentId, :name, :sort_order, :status)';
        
            // Receiving and returning results. Prepared query is used
            $result = $db->prepare($sql);
           $result->execute(array(
               ':parentId' => $category_id,
               ':name' => $name,
               ':sort_order' => $sortOrder,
               ':status' => $status,
           ));
           
           return $result;
         
        }
    
    
        /**
         * Editing a category with a given id
         * @param integer $id
         * @param string $name
         * @param integer $sortOrder
         * @param integer $status
         * @return boolean
         */
        public static function updateCategoryById($id, $name, $sortOrder, $status)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = "UPDATE category
            SET
                name = :name,
                sort_order = :sort_order,
                status = :status
            WHERE id = :id";
        
            // Receiving and returning results. Prepared query is used
            $result = $db->prepare($sql);
            $result->execute(array(
                ':id' => $id,
            ':name' => $name,
            ':sort_order' => $sortOrder,
            ':status' => $status
            ));
            return $result;
        }
    
        /**
         * Removes the category with the given id
         * @param integer $id
         * @return boolean
         */
        public static function deleteCategoryById($id)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = 'DELETE FROM category WHERE id = :id';
        
            // Receiving and returning results. Prepared query is used
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }
        
        
    }