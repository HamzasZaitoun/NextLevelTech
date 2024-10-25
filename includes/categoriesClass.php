<?php
require_once ("db_class.php");

class Category {
    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
    }

    // Fetch all categories
    public function getAllCategories() {
        $stmt = $this->pdo->prepare("SELECT * FROM category");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
     // Fetch products of category by category ID
     public function getProductById($productId) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}