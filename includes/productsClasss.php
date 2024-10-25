<?php
require_once ("db_class.php");

class Product {
    private $pdo;
    
    public function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
    }
    // Fetch all products
    public function getAllProducts() {
        $stmt = $this->pdo->prepare("
            SELECT products.*, category.category_name
            FROM products 
            JOIN category ON products.category_id = category.category_id
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId) {
        $stmt = $this->pdo->prepare("
        SELECT products.*, category.category_name
        FROM products 
        JOIN category ON products.category_id = category.category_id WHERE product_id =?
    ");
        $stmt->execute([$productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fetch products by category
    public function getProductsByCategory($categoryId) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE category_id = ?");
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}