<?php

include("includes/header.php");
    include("includes/productsClasss.php");
    include("includes/categoriesClass.php");
   

 ?>


<section id="trend_product" class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Flash Sale Products</h2>
                    </div>
                </div>
            </div>
            <?php
                    $product = new Product();
                    $flashSaleProducts=$product -> fetchFlashSaleProducts();

        if (!empty($flashSaleProducts)) : ?>
            <div class="row">
                <?php foreach ($flashSaleProducts as $product) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-product">
                        <div class="product-image">
                            <img src="<?php echo htmlspecialchars($product['product_picture']); ?>" alt="product_img">
                            <div class="button">
                                <a href="productDetails.php?id=<?php echo htmlspecialchars($product['product_id']); ?>"
                                    class="btn">
                                    <i class="lni lni-cart"></i>Shop now
                                </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category"><?php echo htmlspecialchars($product['product_category']); ?></span>
                            <h4 class="title">
                                <?= htmlspecialchars($product['product_name']); ?>
                            </h4>
                            <ul class="review">
                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                <li>
                                    <i
                                        class="lni <?= $i < $product['product_rate'] ? 'lni-star-filled' : 'lni-star'; ?>"></i>
                                </li>
                                <?php endfor; ?>
                                <li><span><?= $product['product_rate']; ?> Review(s)</span></li>
                            </ul>
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
<<<<<<< HEAD
    </section>
=======
    </section>
>>>>>>> 82aeafe1f99e8a948b8a3953ee4ede409105bba3
