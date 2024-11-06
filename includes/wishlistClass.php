<?php
require_once("db_class.php");

class Wishlist 
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = dbConnection::getInstence()->getConnection();
    }

    // استرجاع جميع المنتجات من قائمة الرغبات للمستخدم
    public function getAllProductsFromWishlist($user_id) {
        $stmt = $this->pdo->prepare("SELECT wishlist.*, products.*, users.*
                                      FROM wishlist
                                      JOIN products ON wishlist.product_id = products.product_id
                                      JOIN users ON wishlist.user_id = users.user_id
                                      WHERE wishlist.user_id = ? AND wishlist.is_deleted = 0");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function softDeleteItem($wishlist_id) {
        $stmt = $this->pdo->prepare("UPDATE wishlist SET is_deleted = 1 WHERE wishlist_id = ?");
        return $stmt->execute([$wishlist_id]); 
    }

    public function addToWishlist($user_id, $product_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM wishlist WHERE user_id = ? AND product_id = ? AND is_deleted = 0");
        $stmt->execute([$user_id, $product_id]);
        
        if ($stmt->rowCount() > 0) {
            return [
                'success' => false,
                'message' => 'Item already in wishlist.' 
            ];
        }
    
        $stmt = $this->pdo->prepare("INSERT INTO wishlist (user_id, product_id) VALUES (?, ?)");
        
        if ($stmt->execute([$user_id, $product_id])) {
            return [
                'success' => true,
                'message' => 'Item added to wishlist!'
            ];
        } else {
           
            return [
                'success' => false,
                'message' => 'Failed to add item to wishlist.' 
            ];
        }
    }
    
    
    }




 


