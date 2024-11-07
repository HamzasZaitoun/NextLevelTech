<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
require_once "includes/db_class.php";
require_once "includes/productsClasss.php";
require_once "includes/categoriesClass.php";
include 'includes/header.php'; 

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
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $productsPerPage = 8;
    
    // Get the total number of products
    $totalProducts = $productObj->getTotalProducts();
    
    // Calculate total number of pages
    $totalPages = ceil($totalProducts / $productsPerPage);
    
    // Get the products for the current page
    $products = $productObj->getAllProducts($page, $productsPerPage);
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
  
    <div style="margin-left: 450px; width:400px;" class="col-lg-5 col-md-7 d-xs-none">
        <div class="main-menu-search">
            <div class="navbar-search search-style-5">
                <div class="search-input">
                    <form method="GET" style="display: flex; align-items: center;">
                        <input type="text" name="search" placeholder="Search..."
                            style="flex: 1; padding: 8px; font-size: 16px;">
                        <button class="search-button" type="submit" name="btn-search"
                            style="font-size: 18px; border: 0; border-radius: 0 4px 4px 0; border: 0; background-color: #0167F3; color: #fff; width: 45px; height: 45px; ">
                            <i class="lni lni-search-alt"></i>
                        </button>
                    </form>
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
                <div class="section-title">
                    <h2>Products</h2>
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
                                <h6 class="title"><?= htmlspecialchars($product['product_name']); ?></h6>
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

        <!-- Pagination -->
        <div class="pagination">
            <?php if ($totalPages > 1) : ?>
                <ul class = "pagination_cont">
                    <?php if ($page > 1) : ?>
                        <li><a href="?page=<?= $page - 1; ?>">Previous</a></li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <li class="<?= ($i == $page) ? 'active' : ''; ?>"><a href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages) : ?>
                        <li><a href="?page=<?= $page + 1; ?>">Next</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

    <!-- Start Footer Area -->
     <?php
     include('includes/footer.php');
     ?>
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