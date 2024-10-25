<?php
require_once 'dbConnectionClass.php';

class category
{

    private $pdo;
    public function __construct()

    {
        // using the existing PDO (PHP data oject) connection (singlton pattern)
        $this->pdo =  dbConnection::getInstence()->getConnection();  
    }

    public function getAllCategories()
    {
        $stmt = $this->pdo->query("SELECT * from categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNewCategory($name,$description,$picture)
    {
        $stmt =$this->pdo->prepare("INSERT INTO categories(category_name, category_description, category_picture)VALUES(?,?,?)");
        return $stmt->execute([$name,$description,$picture]);
    }

    public function getCategoryById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM categories WHERE category_id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateCategory($id, $name,$description,$picture)
    {
        $stmt= $this->pdo->prepare("UPDATE categories SET category_name=?, category_description=?,category_picture=? WHERE category_id=?");
        return $stmt->execute([$name,$description,$picture,$id]);
    }

    public function SoftDeleteCategory($id)
    {
        return true;
    }

    
    
}


?>