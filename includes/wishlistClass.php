<?php
require_once("db_class.php");

class Wishlist 
{
    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
    }

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
        $stmt->execute([$wishlist_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    
}