
    <title>E-Commerce | Product</title>

</head>

<body>
    <!-- ! header start -->
    <?php
  include("includes/header.php")
  ?>
    <!-- ! header end -->

    <!-- ! modal search start -->
    <div class="modal-search">
        <div class="modal-wrapper">
            <h3 class="modal-title">Search for products</h3>
            <p class="modal-text">
                Start typing to see products you are looking for.
            </p>
            <div class="search">
                <input type="text" placeholder="Search a product" />
                <button><i class="bi bi-search"></i></button>
            </div>
            </form>
            <div class="search-result">
                <div class="search-heading">
                    <h3>RESULT FROM PRODUCT</h3>
                </div>
                <div class="results">

                </div>
            </div>
            <i class="bi bi-x-circle" id="close-modal-search"></i>
        </div>
    </div>
    <!-- ! modal search end -->


    <!-- ! single product start -->
    <section class="single-product">
        <div class="container">
            <div class="single-product-wrapper">
                <!-- breadcrumb start -->
                <div class="single-topbar">
                    <nav class="breadcrumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Man</a></li>
                            <li><a href="#">Pants</a></li>
                            <li>Basic Colored Sweatpants With Elastic Hems</li>
                        </ul>
                    </nav>
                </div>
                <!-- breadcrumb end -->

                <!-- site main start -->
                <div class="single-content">
                    <main class="site-main">
                        <div class="product-gallery ">
                            <div class="single-image-wrapper">
                                <img src="img/products/product2/1.png" id="single-image" alt="">
                            </div>
                            <div class="product-thumb">
                                <div class="glide__track" data-glide-el="track">
                                    <ol class="gallery-thumbs glide_slides"></ol>
                                </div>
                                <div class="glide__arrows" data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                        <i class="bi bi-chevron-left"></i>
                                    </button>
                                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h1 class="product-title">Ridley High Waist</h1>
                            <div class="product-review">
                                <ul class="product-star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>2 reviews</span>
                            </div>
                            <div class="product-price">
                                <s class="old-price">$165.00</s>
                                <strong class="new-price">$208.00</strong>
                            </div>
                            <p class="product-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste soluta quisquam
                                repellendus impedit doloribus fuga libero eius a nisi laboriosam possimus porro adipisci
                                nesciunt facere temporibus magni est, vero eligendi.
                            </p>
                            <form action="" class="variations-form">
                                <div class="variations">
                                    <div class="colors">
                                        <div class="colors-label">
                                            <span>Color</span>
                                        </div>
                                        <div class="colors-wrapper">
                                            <div class="color-wrapper">
                                                <label class="blue-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                            <div class="color-wrapper">
                                                <label class="red-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                            <div class="color-wrapper">
                                                <label class="yellow-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                            <div class="color-wrapper">
                                                <label class="green-color">
                                                    <input type="radio" name="product-color">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="values">
                                        <div class="values-labe">
                                            <span>Size</span>
                                        </div>
                                        <div class="values-list">
                                            <span>XS</span>
                                            <span>S</span>
                                            <span>L</span>
                                            <span>M</span>
                                            <span>XL</span>
                                            <span>XXL</span>
                                        </div>
                                    </div>
                                    <div class="cart-button">
                                        <input type="number" value="1" min="1" id="quantity">
                                        <button class="btn btn-lg btn-primary" id="add-to-cart" type="button">Add to
                                            cart</button>
                                    </div>
                                    <div class="product-extra-buttons">
                                        <a href="#">
                                            <i class="bi bi-globe"></i>
                                            <span>Size Guide</span>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-heart"></i>
                                            <span>Add to Wishlist</span>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-share"></i>
                                            <span>Share this Product</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="divider"></div>
                            <div class="product-meta">
                                <div class="product-sku">
                                    <span>SKU:</span>
                                    <a href="#">BE45VGRT</a>
                                </div>
                                <div class="product-categories">
                                    <span>Categories:</span>
                                    <a href="#">Pants , Women</a>
                                </div>
                                <div class="product-tags">
                                    <span>Tags:</span>
                                    <a href="#">black , white</a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <!-- site main end -->

                <!-- tabs start -->
                <div class="single-tabs">
                    <ul class="tab-list">
                        <li>
                            <a href="#" class="tab-button" data-id="desc">
                                Descripton
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-button" data-id="info">
                                Additional information
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-button" data-id="reviews">
                                Reviews
                            </a>
                        </li>
                    </ul>
                    <div class="tab-panel">
                        <div class="tab-panel-descriptions content" id="desc">
                            <p>
                                Quisque varius diam vel metus mattis, id aliquam diam rhoncus. Proin vitae magna in dui
                                finibus malesuada et at nulla. Morbi elit ex, viverra vitae ante vel, blandit feugiat
                                ligula. Fusce fermentum iaculis nibh, at sodales leo maximus a. Nullam ultricies sodales
                                nunc, in pellentesque lorem mattis quis. Cras imperdiet est in nunc tristique lacinia.
                                Nullam aliquam mauris eu accumsan tincidunt. Suspendisse velit ex, aliquet vel ornare
                                vel, dignissim a tortor.
                            </p>
                            <br>
                            <p>
                                Quisque varius diam vel metus mattis, id aliquam diam rhoncus. Proin vitae magna in dui
                                finibus malesuada et at nulla. Morbi elit ex, viverra vitae ante vel, blandit feugiat
                                ligula. Fusce fermentum iaculis nibh, at sodales leo maximus a. Nullam ultricies sodales
                                nunc, in pellentesque lorem mattis quis. Cras imperdiet est in nunc tristique lacinia.
                                Nullam aliquam mauris eu accumsan tincidunt. Suspendisse velit ex, aliquet vel ornare
                                vel, dignissim a tortor.
                            </p>
                        </div>
                        <div class="tab-panel-information content" id="info">
                            <h3> Additional information
                            </h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Color</th>
                                        <td>
                                            <p>
                                                Apple Red, Bio Blue, Sweet Orange, Blue, Green, Pink, Black, White
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Size</th>
                                        <td>
                                            <p>
                                                XXS, XS, S, M, L, XL, XXL
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-panel-reviews content" id="reviews">
                            <h3>2 reviews for Basic Colored Sweatpants With Elastic Hems
                            </h3>
                            <div class="comments">
                                <ol class="comment-list">
                                    <li class="comment-item">
                                        <div class="comment-avatar">
                                            <img src="img/avatars/avatar1.jpg" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-stars">
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-half"></i>
                                                </li>
                                            </ul>
                                            <div class="comment-meta">
                                                <strong>admin</strong>
                                                <span>-</span>
                                                <time>April 23, 2022</time>
                                            </div>
                                            <div class="comment-description">
                                                <p>
                                                    Sed perspiciatis unde omnis iste natus error sit voluptatem
                                                    accusantium doloremque laudantium.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment-item">
                                        <div class="comment-avatar">
                                            <img src="img/avatars/avatar1.jpg" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-stars">
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="bi bi-star-half"></i>
                                                </li>
                                            </ul>
                                            <div class="comment-meta">
                                                <strong>admin</strong>
                                                <span>-</span>
                                                <time>April 23, 2022</time>
                                            </div>
                                            <div class="comment-description">
                                                <p>
                                                    Sed perspiciatis unde omnis iste natus error sit voluptatem
                                                    accusantium doloremque laudantium.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <!-- review form start -->
                            <div class="review-form-wrapper">
                                <h2>Add a review
                                </h2>
                                <form action="" class="comment-form">
                                    <p class="comment-notes">
                                        Your email address will not be published. Required fields are marked with
                                        <span class="required">*</span>
                                    </p>
                                    <div class="comment-form-rating">
                                        <label>
                                            Your rating
                                            <span class="required">*</span>
                                        </label>
                                        <div class="stars">
                                            <a href="#" class="star">
                                                <i class="i bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                            </a>
                                            <a href="#" class="star">
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                                <i class="i bi-star-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="comment-form-comment form-comment">
                                        <label for="form-review">
                                            Your review
                                            <span class="required">*</span>
                                        </label>
                                        <textarea cols="50" rows="10" id="form-review" required>

                                        </textarea>
                                    </div>
                                    <div class="comment-form-author form-comment">
                                        <label for="name">Name
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" id="name" required>
                                    </div>
                                    <div class="comment-form-email form-comment">
                                        <label for="email">Email
                                            <span class="required">*</span>
                                        </label>
                                        <input type="email" id="email">
                                    </div>
                                    <div class="comment-form-cookie">
                                        <input type="checkbox" id="cookie">
                                        <label for="cookie">
                                            Save my name, email, and website in this browser for the next time I
                                            comment.
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                    <div class="form-submit">
                                        <input class="btn btn-submit" type="submit" value="Send">
                                    </div>

                                </form>

                            </div>
                            <!-- review form end -->
                        </div>
                    </div>
                </div>
                <!-- tabs end -->

            </div>
        </div>
    </section>
    <!-- ! single product end -->

    <!-- ! campaign single start -->
    <section class="campaign-single">
        <div class="container">
            <div class="campaign-wrapper">
                <h2>New Season Sale</h2>
                <strong>40% OFF</strong>
                <span></span>
                <a href="#" class="btn btn-lg">
                    SHOP NOW
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- ! campaign single end -->


    <!-- ! policy start -->
    <section class="policy">
        <div class="container">
            <ul class="policy-list">
                <li class="policy-item">
                    <i class="bi bi-truck"></i>
                    <div class="policy-texts">
                        <strong>FREE DELIVERY</strong>
                        <span>From $59.89</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-headset"></i>
                    <div class="policy-texts">
                        <strong>SUPPORT 24/7</strong>
                        <span>Online 24 hours</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-arrow-clockwise"></i>
                    <div class="policy-texts">
                        <strong>30 DAYS RETURN</strong>
                        <span>Simply return it within 30 days</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-credit-card"></i>
                    <div class="policy-texts">
                        <strong>PAYMENT METHOD</strong>
                        <span>Secure Payment</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- ! policy end -->

    <!-- ! footer start -->
    <?php
  include("includes/footer.php")
  ?>
    <!-- ! footer end -->

    <script src="js/main.js" type="module"></script>
    <script src="js/single-product.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="js/glide.js" type="module"></script>
</body>

</html>