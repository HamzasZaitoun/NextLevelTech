<?php
// عرض جميع الأخطاء للمساعدة في معرفة مصدر المشكلة
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once("db_class.php");

class Category {
    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
        
    }
    // get all categories and details of each one
    public function getAllCategories() {
        $stmt = $this->pdo->prepare("SELECT * FROM category");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // get details for certain category
    public function getCategoryById($categoryId) {
        $stmt = $this->pdo->prepare("SELECT * FROM category WHERE category_id = ?");
        $stmt->execute([$categoryId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getProductsByCategoryId($categoryId) {
        $stmt = $this->pdo->prepare("SELECT products.*, category.category_id
            FROM products 
            JOIN category ON products.category_id = category.category_id 
            WHERE category.category_id = ?");
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


$category = new Category();


?>
