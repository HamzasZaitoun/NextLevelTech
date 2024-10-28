<?php


require_once "includes/db_class.php";



class Cart {
    private $cart = []; 
    

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->connect(); 
    }

    

    public function getCart($user_id) {
        $stmt = $this->pdo->prepare("SELECT orders .*,users.* ,products.*
                                    FROM orders 
                                    JOIN users ON orders.user_id = users.user_id
                                    JOIN products ON orders.product_id = products.product_id
                                    WHERE orders.user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);


        }

        public function addToCart($order_id){
            $stmt = $this->pdo->prepare("UPDATE orders SET order_status = 'pending' WHERE order_id = ? ");
            $stmt->execute([$order_id]);
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }


}



?>