<?php


require_once "includes/db_class.php";



class Cart {
    private $pdo;
    public function __construct()

    {
        // using the existing PDO (PHP data oject) connection (singlton pattern)
        $this->pdo =  dbConnection::getInstence()->getConnection();
        // echo 'connection yes';
    }
    public function addToCart($user_id, $product_id, $quantity) {
        // Step 1: Check if there is an existing 'pending' order for the user
        $checkOrderStmt = $this->pdo->prepare("SELECT order_id FROM orders WHERE user_id = ? AND order_status = 'pending'");
        $checkOrderStmt->execute([$user_id]);
        $orderId = $checkOrderStmt->fetchColumn();

        // Step 2: If no pending order exists, create a new one
        if (!$orderId) {
            $createOrderStmt = $this->pdo->prepare("INSERT INTO orders (user_id, order_date, order_total, order_status) VALUES (?, NOW(), 0, 'pending')");
            $createOrderStmt->execute([$user_id]);
            $orderId = $this->pdo->lastInsertId(); // Get the new order_id

            // if( $createOrderStmt->execute([$user_id])){
            //     $msg="correct insert";
            //     header("location: ../product.php?message?".$msg);
            // }
        }

        // Step 3: Check if the product is already in order_items for this order
        $checkItemStmt = $this->pdo->prepare("SELECT quantity FROM order_items WHERE order_id = ? AND product_id = ?");
        $checkItemStmt->execute([$orderId, $product_id]);
        $existingQuantity = $checkItemStmt->fetchColumn();

        if ($existingQuantity) {
            // Step 4: If the item is already in the cart, update the quantity
            $updateItemStmt = $this->pdo->prepare("UPDATE order_items SET quantity = quantity + ? WHERE order_id = ? AND product_id = ?");
            $updateItemStmt->execute([$quantity, $orderId, $product_id]);
        } else {
            // Step 5: If the item is not in the cart, add it as a new item
            $insertItemStmt = $this->pdo->prepare("INSERT INTO order_items (order_id, product_id, quantity) VALUES (?, ?, ?)");
            $insertItemStmt->execute([$orderId, $product_id, $quantity]);
        }

        return true; // Indicate the operation was successful
    }
    public function getCart($user_id) {
        $stmt = $this->pdo->prepare("
            SELECT orders.order_id, order_items.product_id, order_items.quantity, 
                   products.product_name, products.product_picture, products.product_price
            FROM orders
            JOIN order_items ON orders.order_id = order_items.order_id
            JOIN products ON order_items.product_id = products.product_id
            WHERE orders.user_id = ? AND orders.order_status = 'pending'
        ");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function removeFromCart($user_id, $product_id) {
        // Step 1: Find the order ID associated with the user's pending order
        $checkOrderStmt = $this->pdo->prepare("SELECT order_id FROM orders WHERE user_id = ? AND order_status = 'pending'");
        $checkOrderStmt->execute([$user_id]);
        $orderId = $checkOrderStmt->fetchColumn();

        if ($orderId) {
            // Step 2: Delete the item from order_items
            $deleteItemStmt = $this->pdo->prepare("DELETE FROM order_items WHERE order_id = ? AND product_id = ?");
            $deleteItemStmt->execute([$orderId, $product_id]);

            // Step 3: Check if there are any remaining items in the order
            $checkRemainingItemsStmt = $this->pdo->prepare("SELECT COUNT(*) FROM order_items WHERE order_id = ?");
            $checkRemainingItemsStmt->execute([$orderId]);
            $remainingItemsCount = $checkRemainingItemsStmt->fetchColumn();

            // Step 4: If there are no remaining items, delete the order
            if ($remainingItemsCount == 0) {
                $deleteOrderStmt = $this->pdo->prepare("DELETE FROM orders WHERE order_id = ?");
                $deleteOrderStmt->execute([$orderId]);
            }
        }
    }

    public function checkout($user_id) {
        // Step 1: Check if there is an existing 'pending' order for the user
        $checkOrderStmt = $this->pdo->prepare("SELECT order_id FROM orders WHERE user_id = ? AND order_status = 'pending'");
        $checkOrderStmt->execute([$user_id]);
        $orderId = $checkOrderStmt->fetchColumn();
    
        // Step 2: If a pending order exists, update the order status to 'delivered'
        if ($orderId) {
            $updateOrderStmt = $this->pdo->prepare("UPDATE orders SET order_status = 'delivered' WHERE order_id = ?");
            $updateOrderStmt->execute([$orderId]);
            return true; // Indicate the operation was successful
        }
    
        return false; // Indicate there was no pending order
}



public function getOrderHistory($user_id) {
    $stmt = $this->pdo->prepare("SELECT o.order_id, o.order_date, o.order_total, o.order_status, oi.product_id, oi.quantity
                                FROM orders o
                                JOIN order_items oi ON o.order_id = oi.order_id
                                WHERE o.user_id = ? AND o.order_status != 'pending'");
    $stmt->execute([$user_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}





    

    




?>