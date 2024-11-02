<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php

require_once 'includes/productsClasss.php';

$productId = isset($_GET['id']) ? $_GET['id'] : null;

if ($productId) {

    $productObj = new Product();
    $product = $productObj->getProductById($productId);

} else {
    echo "No Product ID provided.";
}

    

?>

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Single Product - ShopGrids Bootstrap 5 eCommerce HTML Template.</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

        <!-- ========================= CSS here ========================= -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
        <link rel="stylesheet" href="assets/css/tiny-slider.css" />
        <link rel="stylesheet" href="assets/css/glightbox.min.css" />
        <link rel="stylesheet" href="assets/css/main.css" />

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
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title"><?= $product ['product_name']?></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.php">Shop</a></li>
                        <li><?= $product ['product_name']?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Item Details -->
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <!-- Product Images Section -->
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">

                                    <?php $imagePath="inserted_img/".($product['product_picture']);?>

                                    <img src="<?php echo $imagePath; ?>" alt="category_pic" id="current"
                                        class="product-image">

                                </div>
                                <!-- <div class="images">
                                    <img src="assets/images/product-details/01.jpg" class="img" alt="#">
                                    <img src="assets/images/product-details/02.jpg" class="img" alt="#">
                                    <img src="assets/images/product-details/03.jpg" class="img" alt="#">
                                    <img src="assets/images/product-details/04.jpg" class="img" alt="#">
                                    <img src="assets/images/product-details/05.jpg" class="img" alt="#">
                                </div> -->
                            </main>
                        </div>
                    </div>
                    <!-- Product Info Section -->
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title"><?= htmlspecialchars($product['product_name']); ?></h2>
                            <p class="category">
                                <?= htmlspecialchars($product['category_name']); ?></p>
                            <h3 class="price"><i class="lni lni-tag"></i><?= htmlspecialchars($product['product_price']); ?> JOD</h3>
                            <p class="info-text"><?= htmlspecialchars($product['product_description']); ?></p>

                            <!-- Options and Quantity Selection -->
                            <div class="row">
                                <!-- Color Options -->
                                <!-- <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group color-option">
                                        <label class="title-label">Choose color</label>
                                        <div class="d-flex">
                                            <div class="single-checkbox checkbox-style-1">
                                                <input type="checkbox" id="checkbox-1" checked>
                                                <label for="checkbox-1"><span></span></label>
                                            </div>
                                            <div class="single-checkbox checkbox-style-2">
                                                <input type="checkbox" id="checkbox-2">
                                                <label for="checkbox-2"><span></span></label>
                                            </div>
                                            <div class="single-checkbox checkbox-style-3">
                                                <input type="checkbox" id="checkbox-3">
                                                <label for="checkbox-3"><span></span></label>
                                            </div>
                                            <div class="single-checkbox checkbox-style-4">
                                                <input type="checkbox" id="checkbox-4">
                                                <label for="checkbox-4"><span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- Battery Capacity Dropdown -->
                                <!-- <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="battery">Battery capacity</label>
                                        <select class="form-control" id="battery" name="battery_capacity">
                                            <option>5100 mAh</option>
                                            <option>6200 mAh</option>
                                            <option>8000 mAh</option>
                                        </select>
                                    </div>
                                </div> -->

                                <!-- Quantity Dropdown -->
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <form method="POST" action="cart.php" class="d-flex align-items-center">
                                            <input type="hidden" name="product_id"
                                                value="<?= $product['product_id']; ?>">
                                            <label for="quantity-select" class="form-label me-3">Quantity:</label>
                                            <select name="quantity" id="quantity-select" class="form-select" required
                                                style="width: 100px;">
                                                <?php for ($i = 1; $i <= 20; $i++): ?>
                                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Bottom Content Section with Buttons -->
                            <!-- Add to Cart and Wishlist Section -->
                            <div class="bottom-content mt-4">
                                <div class="row align-items-end">
                                    <!-- Add to Cart Button -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <form id="add-to-cart-form">
                                            <input type="hidden" name="product_id"
                                                value="<?= $product['product_id']; ?>">
                                            <input type="hidden" name="quantity" id="quantity-hidden" value="1">
                                            <button type="button" class="btn btn-primary" id="add-to-cart-btn">Add to
                                                Cart</button>
                                        </form>
                                        <div id="cart-response" class="mt-2"></div>
                                        <!-- Display success message for cart -->
                                    </div>

                                    <!-- Add to Wishlist Button -->
                             <div class="col-lg-4 col-md-4 col-12"> 
                                        <form id="add-to-wishlist-form">
                                            <input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
                                            <button type="button" class="btn btn-secondary" id="add-to-wishlist-btn">
                                                <i class="lni lni-heart"></i> To Wishlist
                                            </button>
                                        </form>
                                        <div id="wishlist-response" class="mt-2"></div>
                                    </div> 

                                 
                                </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
$(document).ready(function() {
    // Add to Cart AJAX
    $('#add-to-cart-btn').on('click', function() {
        const product_id = $('input[name="product_id"]').val();
        const quantity = $('#quantity-select').val() || 1; // Default to 1 if no quantity is selected

        $.ajax({
            url: 'cart.php',
            type: 'POST',
            data: {
                product_id: product_id,
                quantity: quantity,
                add_to_cart: true
            },
            success: function(response) {
                $('#cart-response').html('<span class="text-success">Item added to cart!</span>');
                setTimeout(function() {
                    $('#cart-response').fadeOut('slow');
                }, 2000);
            },
            error: function() {
                $('#cart-response').html('<span class="text-danger">Failed to add item to cart. Try again.</span>');
            }
        });
    });

    // Add to Wishlist AJAX
    $('#add-to-wishlist-btn').on('click', function() {
        const product_id = $('input[name="product_id"]').val();

        $.ajax({
            url: 'wishList.php',
            type: 'POST',
            data: {
                product_id: product_id,
                add_to_wishlist: true
            },
            success: function(response) {
                $('#wishlist-response').html('<span class="text-success">Item added to wishlist!</span>');
                setTimeout(function() {
                    $('#wishlist-response').fadeOut('slow');
                }, 2000);
            },
            error: function() {
                $('#wishlist-response').html('<span class="text-danger">Failed to add item to wishlist. Try again.</span>');
            }
        });
    });
});
</script>


    </section>
    <!-- <div class="product-details-info">
        <div class="single-block">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="info-body custom-responsive-margin">
                        <h4>Details</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        <h4>Features</h4>
                        <ul class="features">
                            <li>Capture 4K30 Video and 12MP Photos</li>
                            <li>Game-Style Controller with Touchscreen</li>
                            <li>View Live Camera Feed</li>
                            <li>Full Control of HERO6 Black</li>
                            <li>Use App for Dedicated Camera Operation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="info-body">
                        <h4>Specifications</h4>
                        <ul class="normal-list">
                            <li><span>Weight:</span> 35.5oz (1006g)</li>
                            <li><span>Maximum Speed:</span> 35 mph (15 m/s)</li>
                            <li><span>Maximum Distance:</span> Up to 9,840ft (3,000m)</li>
                            <li><span>Operating Frequency:</span> 2.4GHz</li>
                            <li><span>Manufacturer:</span> GoPro, USA</li>
                        </ul>
                        <h4>Shipping Options:</h4>
                        <ul class="normal-list">
                            <li><span>Courier:</span> 2 - 4 days, $22.50</li>
                            <li><span>Local Shipping:</span> up to one week, $10.00</li>
                            <li><span>UPS Ground Shipping:</span> 4 - 6 days, $18.00</li>
                            <li><span>Unishop Global Export:</span> 3 - 4 days, $25.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </div>
    </section>
    <!-- End Item Details -->


    <footer>
        <?php include 'includes/footer.php'; ?>

    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
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
    </script>
</body>

</html>