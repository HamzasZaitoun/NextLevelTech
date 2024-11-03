<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php
require_once "./includes/db_class.php";
require_once "includes/productsClasss.php";
require_once "includes/categoriesClass.php";

$db = dbConnection::getInstence();
$connect = $db->getConnection();

if (isset($_GET['filter'])) {
    $ssalry = $_GET['ssalry'];
    $esalry = $_GET['esalry'];

    $sql = "SELECT * FROM `products` WHERE product_price BETWEEN :ssalry AND :esalry";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':ssalry', $ssalry);
    $stmt->bindParam(':esalry', $esalry);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET['btn-search'])) {
    $search_value = "%" . $_GET['search'] . "%";
    $sql = "SELECT * FROM `products` WHERE product_id LIKE :value OR product_name LIKE :value ";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':value', $search_value);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    $categoryObj = new Category();
    $products = $categoryObj->getProductsByCategoryId($categoryId);
} else {
    $productObj = new Product();
    $products = $productObj->getAllProducts();
}
?>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Game Shop | Products</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
    <link rel="stylesheet" href="trendingProducts.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  -->


</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <!-- End Header Area -->
<?php include 'includes/header.php'; ?>
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div style="display: flex;" class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Products</h1>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="toggleFilterForm()" style="background-color: #0167F3; color: #fff; margin-left: 30px;">
                        Filter
                    </button>

                    <div id="filterForm" style="display: none; margin-left: 20px;">
                        <form method="GET" class="filter-form" style="display: inline-block;">
                            <!-- <label for="range">Determine the price</label><br><br> -->
                            <input style="width: 110px;" type="number" name="ssalry" placeholder="Lowest price">
                            <input style="width: 112px;" type="number" name="esalry" placeholder="Highest price">
                            <button style="border: 0; border-radius: 5px; background-color: #0167F3; color: #fff; width: 45px; height: 30px;" type="submit" name="filter">Go</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.php">Shop</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Products Area -->
<!-- ....................................................................... -->


<section id="products" class="trending-product section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Products</h2>
                            <p>Discover our products, carefully curated to enhance your gaming experience.
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                $trendingProductObj = new Product();
                $trendingProducts = $trendingProductObj->getAllProducts();

                if (!empty($trendingProducts)) : ?>
                        <div class="row">
                            <?php foreach ($trendingProducts as $product) : ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-image">
                                        <?php $imagePath="inserted_img/".($product['product_picture']);?>
                                        <img src="<?php echo htmlspecialchars($imagePath); ?>" alt="product_img">
                                        <?php if ($product['product_discount'] > 0) : ?>
                                        <div class="product-discount">
                                            <span>-<?= htmlspecialchars($product['product_discount']);?>%</span>
                                        </div>
                                        <?php endif; ?>
                                        <div class="btn-div">
                                            <div class="shopbtn">
                                                <button class="btn-btn"
                                                    onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                                    <div class="default-btn">
                                                        <i class="lni lni-eye"></i>
                                                    </div>
                                                    <div class="hover-btn">
                                                        <span>Quick View</span>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="shopbtn">
                                                <button class="btn-btn"
                                                    onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                                    <div class="default-btn">
                                                        <i class="lni lni-cart"></i>
                                                    </div>
                                                    <div class="hover-btn">
                                                        <span>Shop now</span>
                                                    </div>
                                                </button>
                                            </div>
                                            <!-- add to wish list button -->
                                            <div class="shopbtn">
                                                <button class="btn-btn"
                                                    onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                                    <div class="default-btn">
                                                        <i class="lni lni-heart"></i>
                                                    </div>
                                                    <div class="hover-btn">
                                                        <span>add to wish list</span>
                                                    </div>
                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title">
                                            <?= htmlspecialchars($product['product_name']); ?>
                                        </h6>
                                        <div class="price">
                                            <span><?php echo htmlspecialchars($product['product_price']); ?> JOD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php else : ?>
                        <p>No products available.</p>
                        <?php endif; ?>
                    </div>
        </section>
<?php 
include ("includes/footer.php");
?>
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> <!-- bootstrap link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });

        function toggleFilterForm() {
            const filterForm = document.getElementById('filterForm');
            filterForm.style.display = filterForm.style.display === 'none' ? 'inline-block' : 'none';
        }
    </script>
</body>

</html>