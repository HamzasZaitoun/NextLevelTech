<link rel="stylesheet" href="trendingProducts.css" >
<?php

include("includes/header.php");
    include("includes/productsClasss.php");
    include("includes/categoriesClass.php");
   

 ?>


<section id="flashSale" class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Flash Sale Products</h2>
                    <p>Discover our best-rated products, carefully curated to enhance your gaming experience.</p>
                </div>
            </div>
        </div>
        <?php
        $trendingProductObj = new Product();
        $trendingProducts = $trendingProductObj->fetchFlashSaleProducts();

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
                                    <button class="btn-btn" onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                        <div class="default-btn">
                                            <i class="lni lni-eye"></i>
                                        </div>
                                        <div class="hover-btn">
                                            <span>Quick View</span>
                                        </div>
                                    </button>
                                </div>
                                <div class="shopbtn">
                                    <button class="btn-btn" onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                        <div class="default-btn">
                                            <i class="lni lni-cart"></i>
                                        </div>
                                        <div class="hover-btn">
                                            <span>Shop now</span>
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
        include("includes/footer.php");
    ?>