<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php
require_once "./includes/db_class.php";
require_once "includes/productsClasss.php";
require_once "includes/categoriesClass.php";

$db = dbConnection::getInstence();
$connect = $db->getConnection();

// التحقق من الفلترة حسب السعر
if (isset($_GET['filter']) && isset($_GET['ssalry']) && isset($_GET['esalry'])) {
    $ssalry = $_GET['ssalry'];
    $esalry = $_GET['esalry'];

    // بناء الاستعلام بناءً على النطاق السعري
    $sql = "SELECT * FROM `products` WHERE product_price BETWEEN :ssalry AND :esalry";

    // التحقق من وجود فئة إذا تم تحديدها
    if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
        $categoryId = $_GET['category_id'];
        $sql .= " AND category_id = :category_id"; // إضافة شرط الفئة
    }

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':ssalry', $ssalry);
    $stmt->bindParam(':esalry', $esalry);

    if (isset($categoryId)) {
        $stmt->bindParam(':category_id', $categoryId);
    }

    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// التحقق من البحث
elseif (isset($_GET['btn-search']) && isset($_GET['search'])) {
    $search_value = "%" . $_GET['search'] . "%";
    $sql = "SELECT * FROM `products` WHERE product_id LIKE :value OR product_name LIKE :value";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':value', $search_value);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// التحقق من الفئة
elseif (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    $categoryObj = new Category();
    $products = $categoryObj->getProductsByCategoryId($categoryId);
}

// في حالة عدم وجود فلترة أو بحث
else {
    $productObj = new Product();
    $products = $productObj->getAllProducts();
}
?>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Products | GamifyTech</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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
    <br>


   
    <div class="breadcrumbs">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12 d-flex">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <!-- Search Form -->
                <div class="main-menu-search mx-auto" style="max-width: 400px;">
                    <div class="navbar-search search-style-5">
                        <div class="search-input">
                            <form method="GET" class="d-flex align-items-center">
                                <input type="text" name="search" placeholder="Search..." class="form-control me-2" style="font-size: 16px;">
                                <button class="btn btn-primary" style="background-color: #09f; " type="submit" name="btn-search">
                                    <i class="lni lni-search-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Filter Button -->
                <div class="ms-1">
                    <button class="btn btn-primary" style="background-color: #09f;" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        Filter
                    </button>
                </div>
                
                <!-- Offcanvas Filter -->
                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" style="margin-top: 50px;" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="staticBackdropLabel">Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="filter-form">
                            <form method="GET">
                                <div class="mb-3">
                                    <label>Price:</label>
                                    <div class="d-flex">
                                        <input type="number" name="ssalry" placeholder="Lowest price" class="form-control me-2">
                                        <input type="number" name="esalry" placeholder="Highest price" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Category:</label>
                                    <select name="category_id" class="form-select">
                                        <option value="">Select Category</option>
                                        <?php
                                        $categoryObj = new Category();
                                        $categories = $categoryObj->getAllCategories();
                                        foreach ($categories as $category) {
                                            echo "<option value='{$category['category_id']}'>{$category['category_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="filter" class="btn btn-primary mt-2" style="width:max-content; background-color: #09f;">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb Navigation -->
        <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-center">
            <ul class="breadcrumb-nav list-inline mb-0">
                <li class="list-inline-item"><a href="index.php"><i class="lni lni-home"></i> Home</a></li>
                <li class="list-inline-item"><a href="index.php">Shop</a></li>
                <li class="list-inline-item">Products</li>
            </ul>
        </div>
    </div>
</div>





    <!-- Start Breadcrumbs -->

    <!-- <div style="display: flex;" class="col-lg-6 col-md-6 col-12">
        <div class="breadcrumbs-content">
            <h1 class="page-title">Products</h1>
        </div>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"
            style="background-color: #0167F3; color: #fff; margin-left: 30px;">
            Filter
        </button>

        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <div id="filterForm" style="margin-left: 20px;">
                        <form method="GET" class="filter-form" style="display: inline-block;">
                            <label>Price :</label><br>
                            <input style="width: 120px;" type="number" name="ssalry" placeholder="Lowest price">
                            <input style="width: 124px;" type="number" name="esalry" placeholder="Highest price"><br><br>

                            <label>Category :</label><br>
                            <select name="category_id" style="width: 250px; margin-top: 10px; border-radius: 5px; padding: 5px;">
                                <option value="">Select Category</option>
                                <?php
                                $categoryObj = new Category();
                                $categories = $categoryObj->getAllCategories();
                                foreach ($categories as $category) {
                                    echo "<option value='{$category['category_id']}'>{$category['category_name']}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <button style="border: 0; border-radius: 5px; background-color: #0167F3; color: #fff; width: 60px; height: 30px; margin-top: 10px;"
                                type="submit" name="filter">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- End Breadcrumbs -->

    <!-- Start Products Area -->
    <!-- ....................................................................... -->


    <section id="products" class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title"><br><br>
                        <h2> Our products</h2>
                        <p>Discover our products, carefully curated to enhance your gaming experience.</p>
                    </div>
                </div>
            </div>
            <?php if (!empty($products)) : ?>
                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <?php $imagePath = "inserted_img/" . htmlspecialchars($product['product_picture']); ?>
                                    <img src="<?php echo $imagePath; ?>" alt="product_img">
                                    <?php if ($product['product_discount'] > 0) : ?>
                                        <div class="product-discount">
                                            <span>-<?= htmlspecialchars($product['product_discount']); ?>%</span>
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
                                                onclick="addToCart(<?= htmlspecialchars($product['product_id']); ?>)">
                                                <div class="default-btn">
                                                    <i class="lni lni-cart"></i>
                                                </div>
                                                <div class="hover-btn">
                                                    <span>Shop now</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="shopbtn">
                                            <button class="btn-btn"
                                                onclick="addToWishlist(<?= htmlspecialchars($product['product_id']); ?>)">
                                                <div class="default-btn"
                                                    id="heart-icon-<?= htmlspecialchars($product['product_id']); ?>">
                                                    <i class="lni lni-heart"></i>
                                                </div>
                                                <div class="hover-btn">
                                                    <span>Add to wish list</span>
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




    <!-- ......................................................................... -->
    <!-- <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-image">

                                    <img src="<?php echo htmlspecialchars($product['product_picture']); ?>">
                                    <div class="button">
                                        <a href="productDetails.php?id=<?php echo htmlspecialchars($product['product_id']); ?>"
                                            class="btn">
                                            <i class="lni lni-cart"></i>Shop now
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="title">
                                        <?= $product['product_name']; ?>
                                    </h4>

                                    <div class="price">
                                        <span><?php echo $product['product_price']; ?>JOD</span>



                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No products available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section> -->


    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/white-logo.svg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    Subscribe to our Newsletter
                                    <span>Get all the latest information, Sales and Offers.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="Email address here..." type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>Get In Touch With Us</h3>
                                <p class="phone">Phone: +1 (900) 33 169 7720</p>
                                <ul>
                                    <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                    <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="mailto:support@shopgrids.com">support@shopgrids.com</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer our-app">
                                <h3>Our Mobile App</h3>
                                <ul class="app-btn">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-apple"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">App Store</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-play-store"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">Google Play</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">Downloads</a></li>
                                    <li><a href="javascript:void(0)">Sitemap</a></li>
                                    <li><a href="javascript:void(0)">FAQs Page</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Shop Departments</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Computers & Accessories</a></li>
                                    <li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
                                    <li><a href="javascript:void(0)">TV, Video & Audio</a></li>
                                    <li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
                                    <li><a href="javascript:void(0)">Headphones</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>We Accept:</span>
                                <img src="assets/images/footer/credit-cards-footer.png" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow"
                                        target="_blank">GrayGrids</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> <!-- bootstrap link -->
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
    <!-- add to wish list -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function addToWishlist(productId) {
            const button = document.getElementById('heart-icon-' + productId); // احصل على الزر
            button.disabled = true; // تعطيل الزر

            fetch('wishlist.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'add_to_wishlist=true&product_id=' + productId
                })
                .then(response => response.json())
            // .then(data => {
            //     if (data.success) {
            //         Swal.fire({
            //             icon: 'success',
            //             title: 'Success',
            //             text: data.message,
            //             confirmButtonText: 'OK'
            //         });

            //         // تغيير اللون إلى الأحمر
            //         button.classList.add('added-to-wishlist');
            //     } else {
            //         Swal.fire({
            //             icon: 'info',
            //             title: 'Already Added',
            //             text: data.message,
            //             confirmButtonText: 'OK'
            //         });
            //     }
            // })
            // .catch(error => {
            //     console.error('Error:', error);
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Error',
            //         text: 'An error occurred while adding to wishlist.',
            //         confirmButtonText: 'OK'
            //     });
            // });
        }


        // add to cart
        function addToCart(productId) {
            fetch('cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'add_to_cart=true&product_id=' + productId
            })

        }

        function toggleFilterForm() {
            const filterForm = document.getElementById('filterForm');
            filterForm.style.display = filterForm.style.display === 'none' ? 'inline-block' : 'none';
        }
    </script>
</body>

</html>