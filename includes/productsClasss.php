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

    //fetch trending products based on rating
    public function fetchTrendingProducts() {av
        $stmt = $this->pdo->prepare("
            SELECT products.*, category.category_name
            FROM products
            JOIN category ON products.category_id = category.category_id
            ORDER BY products.product_rate DESC
            LIMIT 8
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


        public function fetchHighestDiscountProducts() {
        $stmt = $this->pdo->prepare("
            SELECT products.*, category.category_name
            FROM products
            JOIN category ON products.category_id = category.category_id
            ORDER BY products.product_discount DESC
            LIMIT 3
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function lastProduct() {
        $stmt = $this->pdo->prepare("SELECT * FROM products ORDER BY product_id DESC LIMIT 1");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }


    public function fetchHighestDiscountProduct() {
        $stmt = $this->pdo->prepare("SELECT * FROM products ORDER BY product_discount DESC LIMIT 1");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }


    public function fetchRandomProducts($limit = 2) {
        $stmt = $this->pdo->prepare("SELECT * FROM products ORDER BY RAND() LIMIT :limit");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    


    

}