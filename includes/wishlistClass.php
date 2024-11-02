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

    // حذف العنصر بشكل ناعم (تعيين is_deleted إلى 1)
    public function softDeleteItem($wishlist_id) {
        $stmt = $this->pdo->prepare("UPDATE wishlist SET is_deleted = 1 WHERE wishlist_id = ?");
        return $stmt->execute([$wishlist_id]); // تم التعديل هنا لعدم الحاجة إلى fetchAll
    }

    // إضافة منتج إلى قائمة الرغبات
    public function addToWishlist($user_id, $product_id) {
        // التحقق مما إذا كان المنتج موجودًا بالفعل في قائمة الرغبات
        $stmt = $this->pdo->prepare("SELECT * FROM wishlist WHERE user_id = ? AND product_id = ? AND is_deleted = 0");
        $stmt->execute([$user_id, $product_id]);
        
        if ($stmt->rowCount() > 0) {
            return false; // المنتج موجود بالفعل
        }
    
        // إدراج المنتج في قائمة الرغبات
        $stmt = $this->pdo->prepare("INSERT INTO wishlist (user_id, product_id) VALUES (?, ?)");
        return $stmt->execute([$user_id, $product_id]);
    }
}
