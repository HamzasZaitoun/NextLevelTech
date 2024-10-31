<?php
include("includes/categoriesClass.php");
$categoryObj = new Category();

// Check if category_id is in the URL
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    // Fetch products for the category
    $products = $categoryObj->getProductsByCategoryId($categoryId);

    // Fetch category details if you want to display category info
    $categoryDetails = $categoryObj->getCategoryById($categoryId);
} else {
    echo "Category ID is missing or invalid.";
    exit;
}
?>
<link rel = "stylesheet" href = "assets/css/test.css"> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category Products</title>
</head>
<body>
<section class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <h1>Products in Category: <?= htmlspecialchars($categoryDetails['category_name'] ?? 'Unknown'); ?></h1>
        <div class="row">
            <?php if (!empty($products)) : ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-image">
                                <img src="<?php echo htmlspecialchars($product['product_picture']); ?>" alt="product_picture">
                                <div class="button">
                                    <a href="productDetails.php?id=<?php echo htmlspecialchars($product['product_id']); ?>" class="btn">
                                        <i class="lni lni-cart"></i>Shop now
                                    </a>
                                </div> 
                            </div>
                            <div class="product-info">
                                <h4 class="title"><?= htmlspecialchars($product['product_name']); ?></h4>
                                <ul class="review">
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <li>
                                            <i class="lni <?= $i < $product['product_rate'] ? 'lni-star-filled' : 'lni-star'; ?>"></i>
                                        </li>
                                    <?php endfor; ?>
                                    <li><span><?= htmlspecialchars($product['product_rate']); ?> Review(s)</span></li>
                                </ul>
                                <div class="price">
                                    <span><?php echo htmlspecialchars($product['product_price']); ?> JOD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products found in this category.</p>
            <?php endif; ?>
        </div>
    </div>
</section>


</body>
</html>