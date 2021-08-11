<?php
    /**
     * Class OrderModel
     */
    
    class OrderModel
    {
    
        /**
         * Save order
         * @param $name
         * @param $phone
         * @param $comment
         * @return bool|string
         */
        public static function makeNewOrder($name, $phone, $adress, $comment)
        {
            $db = Db::getConnection();
            $userId = $_SESSION['user'];
        
            $sql = 'INSERT INTO orders (`user_name`, `user_phone`, `adress`, `comment`, `user_id`) VALUES (:user_name, :user_phone, :adress, :comment, :user_id)';
        
            $result = $db->prepare($sql);
            $result->execute(array(
                ':user_name' => $name,
                ':user_phone' => $phone,
                ':comment' => $comment,
                ':adress' => $adress,
                ':user_id' => $userId,
            ));
        
            if ($result) {
                return $db->lastInsertId();
            }
        
            return false;
        
        }
    
        /**
         * Returns a list of orders
         * @return array
         */
        public static function getOrdersList()
        {
            // DB connection
            $db = Db::getConnection();
        
            // Getting and returning results
            $result = $db->query('SELECT id, user_name, user_phone, adress, date, status, comment FROM orders ORDER BY id DESC');
            $ordersList = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $ordersList[$i]['id'] = $row->id;
                $ordersList[$i]['user_name'] = $row->user_name;
                $ordersList[$i]['user_phone'] = $row->user_phone;
                $ordersList[$i]['adress'] = $row->adress;
                $ordersList[$i]['date'] = $row->date;
                $ordersList[$i]['status'] = $row->status;
                $ordersList[$i]['comment'] = $row->comment;
                $i++;
            }
            return $ordersList;
        }
    
        /**
         * Returns a list of orders
         * @return array
         */
        public static function getUserOrdersList($userId)
        {
            // DB connection
            $db = Db::getConnection();
        
            
            
            // Getting and returning results
            $result = $db->query('SELECT id, user_name, user_phone, adress, date, status, comment FROM orders WHERE user_id = ' . $userId);
            $ordersList = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $ordersList[$i]['id'] = $row->id;
                $ordersList[$i]['user_name'] = $row->user_name;
                $ordersList[$i]['user_phone'] = $row->user_phone;
                $ordersList[$i]['adress'] = $row->adress;
                $ordersList[$i]['date'] = $row->date;
                $ordersList[$i]['status'] = $row->status;
                $ordersList[$i]['comment'] = $row->comment;
                $i++;
            }
            return $ordersList;
        }
    
        /**
         * Returns a textual explanation of the order status
         * @param integer $status
         * @return string
         */
        public static function getStatusText($status)
        {
            switch ($status) {
                case '1':
                    return 'New order';
                    break;
                case '2':
                    return 'In processing';
                    break;
                case '3':
                    return 'Delivered';
                    break;
                case '4':
                    return 'Closed';
                    break;
            }
        }
    
        /**
         * Returns the order with the specified id
         * @param integer $id
         * @return array
         */
        public static function getOrderById($id)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = 'SELECT * FROM orders WHERE id = :id';
        
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
    
            // We indicate that we want to receive data in the form of an array
            $result->setFetchMode(PDO::FETCH_ASSOC);
        
            // Выполняем запрос
            $result->execute();
        
            // Возвращаем данные
            return $result->fetch();
        }
    
        /**
         * Deletes an order with the given id
         * @param integer $id
         * @return boolean
         */
        public static function deleteOrderById($id)
        {
            // DB connection
            $db = Db::getConnection();
        
            //DB query text
            $sql = 'DELETE FROM orders WHERE id = :id';
        
            // Receiving and returning results. Prepared query is used
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }
    
        /**
         * Edits an order with a given id
         * @param integer $id
         * @param string $userName
         * @param string $userPhone
         * @param string $userComment
         * @param string $date
         * @param integer $status
         * @return boolean
         */
        public static function updateOrderById($id, $userName, $userPhone, $userComment, $date, $status)
        {
            // DB connection
            $db = Db::getConnection();
        
            // DB query text
            $sql = "UPDATE orders
            SET user_name = :user_name,
                user_phone = :user_phone,
                user_comment = :user_comment,
                date = :date,
                status = :status
            WHERE id = :id";
        
            // Receiving and returning results. Prepared query is used
            $result = $db->prepare($sql);
           $result->execute(array(
               ':id' => $id,
               ':user_name' => $userName,
               ':user_phone' => $userPhone,
               ':user_comment' => $userComment,
               ':date' => $date,
               ':status' => $status,
           ));
            return $result;
        }
    
    }
    
    