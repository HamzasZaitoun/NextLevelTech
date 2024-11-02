<?php

    include("includes/header.php");
    include("includes/productsClasss.php");
    include("includes/categoriesClass.php");
 
    
?>
<link rel="stylesheet" href="assets/css/test.css">
<link rel="stylesheet" href="cat.css">
<link rel="stylesheet" href="trendingProducts.css">
<title>Game Shop</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
.hero-slider {
    width: 100%;
    height: 500px;
    position: relative;
    overflow: hidden;
}

.single-slider {
    background-size: cover;
    background-position: center;
    height: 100%;
}

.swiper-pagination-bullet {
    background: #fff;
    /* لون النقاط */
}

.swiper-button-next,
.swiper-button-prev {
    color: #fff;
    /* لون الأزرار */
}
</style>
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->

    <!-- /End Preloader -->

    <!-- Start Hero Area -->

    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <?php  
                            $highestDiscountProductsObj = new product();
                            $highestProducts = $highestDiscountProductsObj->fetchHighestDiscountProducts();        
                            if (!empty($highestProducts)) : 
                                foreach ($highestProducts as $highestProduct) : 
                                    $imagePath="inserted_img/".($highestProduct['product_picture']);

                                    $calculateSaving = $highestProduct['product_price'] * ($highestProduct['product_discount'] / 100);
                                    $priceAfterDiscount = $highestProduct['product_price'] * (1 - $highestProduct['product_discount'] / 100);
                        ?>
                            <!-- Start Single Slider -->
                            <div class="single-slider" style="background-image:  url('<?php echo $imagePath; ?>');">
                                <div class="content">
                                    <h2><span>No restocking fee (<?= htmlspecialchars($calculateSaving); ?> JOD
                                            savings)</span>
                                        <?= htmlspecialchars($highestProduct['product_name']); ?>
                                    </h2>
                                    <p><?= htmlspecialchars($highestProduct['product_description']); ?></p>
                                    <h3><span>Now Only</span> <?= htmlspecialchars($priceAfterDiscount); ?> JOD</h3>
                                    <div class="button">
                                        <a href="productDetails.php?id=<?= htmlspecialchars($highestProduct['product_id']); ?>"
                                            class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                            <?php 
                                endforeach; 
                            endif; 
                        ?>
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            <!-- Start Small Banner -->
                            <?php
                            $lastProduct = new product();
                            $lastProductData = $lastProduct->lastProduct(); 
                            if (!empty($lastProductData)) : 
                                $imagePath="inserted_img/".($lastProductData['product_picture']);

                        ?>
                            <div class="hero-small-banner" style="background-image:  url('<?php echo $imagePath; ?>');">
                                <div class="content">
                                    <h2>
                                        <span>New line required</span>
                                        <?= htmlspecialchars($lastProductData['product_name']); ?>
                                    </h2>
                                    <h3><?= htmlspecialchars($lastProductData['product_price']); ?> JOD</h3>
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- End Small Banner -->
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner style2">
                                <?php
                                $highestDiscountProduct = new product();
                                $discountProduct = $highestDiscountProduct->fetchHighestDiscountProduct(); 

                                if (!empty($discountProduct)) : 
                                    $calculateSaving = $highestProduct['product_price'] * ($highestProduct['product_discount'] / 100);

                            ?>
                                <div class="content">
                                    <h2>Flash Sale!</h2>
                                    <h3 style="color : red"><?=$highestProduct['product_discount']?> %</h3>
                                    <p>Saving up to
                                        <?= $calculateSaving ; ?> off
                                        <?= htmlspecialchars($discountProduct['product_name']); ?></p>
                                    <h3>Now Only:
                                        <?= htmlspecialchars($discountProduct['product_price'] * (1 - $discountProduct['product_discount'] / 100)); ?>
                                        JOD
                                    </h3>
                                    <div class="button">
                                        <a class="btn"
                                            href="productDetails.php?id=<?= htmlspecialchars($discountProduct['product_id']); ?>">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="content">
                                    <h2>No Discounts Available</h2>
                                    <p>Check back later for great deals!</p>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- End Small Banner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- End Hero Area -->

    <!-- categories -->

    <section class="categories">

        <section class="categories" id="product_Categories">
            <div class="section-title">
                <h2>Product Categories</h2>

            </div>

            <?php 
        $categoryObj = new Category();
        $categories = $categoryObj->getAllCategories();        
        if (!empty($categories)) :
            ?>


            <ul class="category-list cat-container">
                <?php foreach ($categories as $category) : ?>
                <?php
                $productsOfCategory = $categoryObj->getProductsByCategoryId($category['category_id']);
                $imagePath_cat = "category_img/" . urlencode($category['category_picture']);
                ?>
                <li class="category-item">
                    <a href="productsOfCategory.php?id=<?= htmlspecialchars($category['category_id']); ?>">
                        <div class="category-image-container">
                            <img src="<?php echo $imagePath_cat; ?>" alt="category_pic" class="category-image">
                        </div>
                        <span class="category-title"><?= htmlspecialchars($category['category_name']); ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

        </section>


        <!-- Start Trending Product Area -->
        <section id="trend_product" class="trending-product section" style="margin-top: 12px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Trending Products</h2>
                            <p>Discover our best-rated products, carefully curated to enhance your gaming experience.
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                $trendingProductObj = new Product();
                $trendingProducts = $trendingProductObj->fetchTrendingProducts();

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
                                                <form id="add-to-wishlist-form">
                                                        <input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
                                                    <button id="add-to-wishlist-btn" type="button" class="btn-btn"
                                                        onclick="window.location.href='wishList.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                                        <div class="default-btn">
                                                            <i class="lni lni-heart"></i>
                                                        </div>
                                                        <div class="hover-btn">
                                                            <span>add to wish list</span>

                                                        </div>

                                                    </button>
                                                    </form>
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

        <!-- End Trending Product Area -->


        <!-- Start Banner Area -->
        <section class="banner section">
            <div class="container">
                <div class="row">
                    <?php
            $randomProductsObj = new product();
            $randomProducts = $randomProductsObj->fetchRandomProducts(); 

            if (!empty($randomProducts)):
                foreach ($randomProducts as $randomProduct):
                    $imagePath="inserted_img/".($randomProduct['product_picture']);
                    ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner" style="background-image:  url('<?php echo $imagePath; ?>');">
                            <div class="content">
                                <h2><?= htmlspecialchars($randomProduct['product_name']); ?></h2>
                                <p><?= htmlspecialchars($randomProduct['product_description']); ?></p>

                                <div class="button">
                                    <a href="productDetails.php?id=<?= htmlspecialchars($randomProduct['product_id']); ?>"
                                        class="btn-btn">
                                        <div class="default-btn">
                                            <i class="lni lni-eye"></i>

                                        </div>
                                        <div class="hover-btn">

                                            <span>View Details</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
            else: ?>
                    <div class="col-12">
                        <p>No products available at the moment.</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!-- Start Shipping Info -->
        <section class="shipping-info">
            <div class="container">
                <ul>
                    <!-- Free Shipping -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-delivery"></i>
                        </div>
                        <div class="media-body">
                            <h5>Free Shipping</h5>
                            <span>On order over 20 JOD</span>
                        </div>
                    </li>
                    <!-- Money Return -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-support"></i>
                        </div>
                        <div class="media-body">
                            <h5>24/7 Support.</h5>
                            <span>Live Chat Or Call.</span>
                        </div>
                    </li>
                    <!-- Support 24/7 -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-credit-cards"></i>
                        </div>
                        <div class="media-body">
                            <h5>Online Payment.</h5>
                            <span>Secure Payment Services.</span>
                        </div>
                    </li>
                    <!-- Safe Payment -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-reload"></i>
                        </div>
                        <div class="media-body">
                            <h5>Easy Return.</h5>
                            <span>Hassle Free Shopping.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Shipping Info -->

        <?php
        include("includes/footer.php");
    ?>

        <!-- ========================= JS here ========================= -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/tiny-slider.js"></script>
        <script src="assets/js/glightbox.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript"></script>
        <script>
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
        </script>

        <script>
        setInterval(function() {
            // إعادة تحميل القسم
            location.reload();
        }, 1800000); // 1800000 ميلي ثانية = 30 دقيقة
        </script>


        <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true, // تفعيل التكرار التلقائي للسلايدر
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000, // تأخير لمدة 3 ثواني قبل الانتقال التلقائي
                disableOnInteraction: false, // السماح للمستخدمين بالتفاعل دون إيقاف التشغيل التلقائي
            },
        });
        </script>

        <script>    // Add to Wishlist AJAX
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
</script>


</body>

</html>