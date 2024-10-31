<?php
require_once ("db_class.php");

class Product {
    private $pdo;
    public function __construct()

    {
        // using the existing PDO (PHP data oject) connection (singlton pattern)
        $this->pdo =  dbConnection::getInstence()->getConnection();
        // echo 'connection yes';
    }
        // Fetch all products
    public function getAllProducts() {
        $stmt = $this->pdo->prepare("
            SELECT products.*, categories.category_name
            FROM products 
            JOIN categories ON products.category_id = categories.category_id
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId) {
        $stmt = $this->pdo->prepare("
        SELECT products.*, categories.category_name
        FROM products 
        JOIN categories ON products.category_id = categories.category_id WHERE product_id =?
    ");
        $stmt->execute([$productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fetch products by categories
    public function getProductsBycategories($categoriesId) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE category_id = ?");
        $stmt->execute([$categoriesId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //fetch trending products based on rating
    public function fetchTrendingProducts() {
        $stmt = $this->pdo->prepare("
            SELECT products.*, categories.category_name
            FROM products
            JOIN categories ON products.category_id = categories.category_id
            ORDER BY products.product_rate DESC
            LIMIT 8
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


        public function fetchHighestDiscountProducts() {
        $stmt = $this->pdo->prepare("
            SELECT products.*, categories.category_name
        FROM products
        JOIN categories ON products.category_id = categories.category_id
        ORDER BY products.product_quantity 
        LIMIT 3
        ");
        $stmt->execute();
        $fetch=$stmt->fetchAll(PDO::FETCH_ASSOC);
       

        return $fetch;

    
    }

    
    public function lastProduct() {
        $stmt = $this->pdo->prepare("SELECT * FROM products ORDER BY product_id DESC LIMIT 1");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }


    public function fetchHighestDiscountProduct() {
        $stmt = $this->pdo->prepare("SELECT products.*, categories.category_name as product_category FROM products JOIN categories ON products.category_id = categories.category_id ORDER BY product_discount DESC
         ");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

    public function fetchFlashSaleProducts() {
        $stmt = $this->pdo->prepare("SELECT products.*, categories.category_name as product_category FROM products JOIN categories ON products.category_id = categories.category_id WHERE products.product_discount > 0 
 ORDER BY product_discount DESC ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function fetchRandomProducts($limit = 2) {
        $stmt = $this->pdo->prepare("SELECT * FROM products ORDER BY RAND() LIMIT :limit");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    


    

}

// $product = new Product();
// $product ->fetchHighestDiscountProducts();

?>
