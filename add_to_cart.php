<?php
// require_once 'includes/cartClass.php';
// session_start();

// تأكد من وجود 'id' في المصفوفة $_GET
// if (isset($_GET['id'])) {
//     $productId = $_GET['id'];
//     $quantity = 1;



//     $cart = new Cart();


//     var_dump("productId:".$productId, "quantity:".$quantity);

//     $cart->addToCart($productId, $quantity);
//     if ($cart->addToCart($productId, $quantity)) {
//         header('Location: cart.php');
//         exit();
//     } else {
//         echo "فشل في إضافة المنتج إلى السلة.";
//     }
// } else {
//     echo "معرف المنتج غير موجود.";
// }


    // يمكنك هنا جلب تفاصيل المنتج من قاعدة البيانات إذا كنت بحاجة لذلك
    // على سبيل المثال:
    // $productObj = new Product();
    // $product = $productObj->getProductById($productId);

    // إنشاء مصفوفة للمنتجات إذا لم تكن موجودة
    // if (!isset($_SESSION['cart'])) {
    //     $_SESSION['cart'] = [];
    // }

    // إضافة المنتج إلى عربة التسوق
    // يمكنك استخدام $productId كمعرّف المنتج، أو تخزين تفاصيل أخرى مثل السعر
//     $_SESSION['cart'][$productId] = [
//         'id' => $productId,
//         // 'name' => $product['product_name'], // إذا كنت قد جلبت تفاصيل المنتج
//         // 'price' => $product['product_price'], // إذا كنت قد جلبت تفاصيل المنتج
//         'quantity' => 1 // يمكنك تغيير الكمية حسب الحاجة
//     ];

//     // إعادة توجيه المستخدم إلى صفحة الكارت
//     header('Location: cart.php');
//     exit();
// } else {
//     echo "Product ID not specified!";
//     exit();

?>