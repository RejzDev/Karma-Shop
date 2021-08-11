<?php
    /**
     * Class PurchaseModel
     */
    
    class PurchaseModel
    {
        /**
         * Saves purchases to the database
         * @param $orderId
         * @param $cart
         * @return bool|PDOStatement
         */
        public static function setPurchaseForOrder($orderId, $cart)
        {
            // DB connection
            $db = Db::getConnection();
    
            // DB query text
            $sql = "INSERT INTO purchase
            (order_id, product_id, price, amount) VALUES (:orderId, :productId, :price, :amount)";
    
            // Getting and returning results
            $result = $db->prepare($sql);
    
            $i = 0;
            foreach ($cart as $item) {
                $result->execute(array(
                    ':orderId' => $orderId,
                    'productId'  => $item['id'],
                    ':price' => $item['price'],
                    ':amount' => $item['cnt'],
                ));
            }
            
            return $result;
        }
    
        /**
         * Returns a shopping list
         * @param $orderId
         * @return array
         */
        public static function getPurchaseForOrder($orderId)
        {
            // DB connection
            $db = Db::getConnection();
    
            // DB query text
            $sql = "SELECT `pe`.*, `ps`.`name`
            FROM purchase as `pe`
            JOIN products as `ps` ON `pe`.product_id = `ps`.id
            WHERE `pe`.order_id = :orderId";
    
            // Getting and returning results
            $result = $db->prepare($sql);
            $result->bindParam(':orderId', $orderId, PDO::PARAM_INT);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
    
            $purchaseList = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $purchaseList[$i]['id'] = $row['id'];
                $purchaseList[$i]['order_id'] = $row['order_id'];
                $purchaseList[$i]['product_id'] = $row['product_id'];
                $purchaseList[$i]['price'] = $row['price'];
                $purchaseList[$i]['amount'] = $row['amount'];
                $i++;
            }
            return $purchaseList;
        }
        
    }