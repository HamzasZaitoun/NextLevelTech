<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce | Product</title>
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- !Glide.js Css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" />
    <link rel="stylesheet" href="css/main.css" />

</head>

<body>
    <!-- ! header start -->
    <header>
        <div class="global-notification">
            <div class="container">
                <p>
                    SUMMER SALE FOR ALL SWIM SUITS AND FREE EXPRESS INTERNATIONAL
                    DELIVERY - OFF 50%! <a href="shop.php">SHOP NOW</a>
                </p>
            </div>
        </div>
        <div class="header-row">
            <div class="container">
                <div class="header-wrapper">
                    <div class="header-mobile">
                        <i class="bi bi-list" id="btn-menu"></i>
                    </div>
                    <div class="header-left">
                        <a href="/" class="logo">LOGO</a>
                    </div>
                    <div class="header-center" id="sidebar">
                        <nav class="navigation">
                            <ul class="menu-list">
                                <li class="menu-list-item">
                                    <a href="/" class="menu-link">Home
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                    <div class="menu-dropdown-wrapper">
                                        <ul class="menu-dropdown-content">
                                            <li><a href="#">Home Clean</a></li>
                                            <li><a href="#">Home Collection</a></li>
                                            <li><a href="#">Home Minimal</a></li>
                                            <li><a href="#">Home Modern</a></li>
                                            <li><a href="#">Home Parallax</a></li>
                                            <li><a href="#">Home Strong</a></li>
                                            <li><a href="#">Home Style</a></li>
                                            <li><a href="#">Home Unique</a></li>
                                            <li><a href="#">Home RTL</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-list-item megamenu-wrapper">
                                    <a href="shop.php" class="menu-link active">Shop
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                    <div class="menu-dropdown-wrapper">
                                        <div class="menu-dropdown-megamenu">
                                            <div class="megamenu-links">
                                                <div class="megamenu-products">
                                                    <h3 class="megamenu-product-title">Shop Style</h3>
                                                    <ul class="megamenu-menu-list">
                                                        <li><a href="#">Shop Standart</a></li>
                                                        <li><a href="#">Shop Full</a></li>
                                                        <li><a href="#">Shop Only Categories</a></li>
                                                        <li><a href="#">Shop Image Categories</a></li>
                                                        <li><a href="#">Shop Sub Categories</a></li>
                                                        <li><a href="#">Shop List</a></li>
                                                        <li><a href="#">Hover Style 1</a></li>
                                                        <li><a href="#">Hover Style 2</a></li>
                                                        <li><a href="#">Hover Style 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="megamenu-products">
                                                    <h3 class="megamenu-product-title">
                                                        Filter Layout
                                                    </h3>
                                                    <ul class="megamenu-menu-list">
                                                        <li><a href="#">Sidebar</a></li>
                                                        <li><a href="#">Filter Side Out</a></li>
                                                        <li><a href="#">Filter Dropdown</a></li>
                                                        <li><a href="#">Filter Drawer</a></li>
                                                    </ul>
                                                </div>
                                                <div class="megamenu-products">
                                                    <h3 class="megamenu-product-title">Shop Loader</h3>
                                                    <ul class="megamenu-menu-list">
                                                        <li><a href="#">Shop Pagination</a></li>
                                                        <li><a href="#">Shop Infinity</a></li>
                                                        <li><a href="#">Shop Load More</a></li>
                                                        <li><a href="#">Cart Modal</a></li>
                                                        <li><a href="#">Cart Drawer</a></li>
                                                        <li><a href="#">Cart Page</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="megamenu-single">
                                                <a href="#">
                                                    <img src="img/mega-menu.jpg" alt="" />
                                                </a>
                                                <h3 class="megamenu-single-title">
                                                    JOIN THE LAYERING GANG
                                                </h3>
                                                <h4 class="megamenu-single-subtitle">
                                                    Suspendisse faucibus nunc et pellentesque
                                                </h4>
                                                <a href="#" class="megamenu-single-button btn btn-sm">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-list-item">
                                    <a href="blog.php" class="menu-link">Blog
                                    </a>
                                </li>
                                <li class="menu-list-item">
                                    <a href="contact.php" class="menu-link">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <i class="bi-x-circle" id="close-sidebar"></i>
                    </div>
                    <div class="header-right">
                        <div class="header-right-links">
                            <a href="account.php">
                                <i class="bi bi-person"></i>
                            </a>
                            <button class="search-button">
                                <i class="bi bi-search"></i>
                            </button>
                            <a href="#">
                                <i class="bi bi-heart"></i>
                            </a>
                            <div class="header-cart">
                                <a href="cart.php" class="header-cart-link">
                                    <i class="bi bi-bag"></i>
                                    <span class="header-cart-count">0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
    <section class="footer">
        <div class="subscribe-contact-row">
            <div class="container">
                <div class="subscribe-contact-wrapper">
                    <div class="subscribe-wrapper">
                        <div class="footer-subscribe">
                            <div class="footer-subscribe-top">
                                <h3 class="subscribe-title">
                                    Get our emails for info on new items, sales and more.
                                </h3>
                                <p class="subscribe-desc">
                                    We'll email you a voucher worth $10 off your first order
                                    over $50.
                                </p>
                            </div>
                            <div class="footer-subscribe-bottom">
                                <form>
                                    <input type="text" placeholder="enter your email addres" />
                                    <button class="btn">Subscribe</button>
                                </form>
                                <p class="privacy-text">
                                    By subscribing you agree to our
                                    <a href="#">Terms & Conditions and Privacy & Cookies Policy.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-wrapper">
                        <div class="footer-contact-top">
                            <h3 class="contact-title">Need help? <br>
                                (+90) 123 456 78 90
                            </h3>
                            <p class="contact-desc">We are available 8:00am – 7:00pm
                            </p>
                        </div>
                        <div class="footer-contact-bottom">
                            <div class="download-app">
                                <a href="#">
                                    <img src="img/footer/app-store.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="img/footer/google-play.png" alt="">
                                </a>
                            </div>
                            <p class="privacy-text">
                                <strong>Shopping App:</strong> Try our View in Your Room feature, manage registries and
                                save payment
                                info.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widgets-row">
            <div class="container">
                <div class="footer-widgets">
                    <div class="brand-info">
                        <div class="footer-logo">
                            <a href="/" class="logo">LOGO</a>
                        </div>
                        <div class="footer-desc">
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis in
                            termapol.
                        </div>
                        <div class="footer-contact">
                            <p>
                                <a href="tel:123456789">(+800) 1234 5678 90</a> -
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>Information</h4>
                        <ul class="menu-list">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Returns Policy</a>
                            </li>
                            <li>
                                <a href="#">Shipping Policy</a>
                            </li>
                            <li>
                                <a href="#">Dropshipping</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>Account</h4>
                        <ul class="menu-list">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">My Orders</a>
                            </li>
                            <li>
                                <a href="#">My Wishlist</a>
                            </li>
                            <li>
                                <a href="#">Account details</a>
                            </li>
                            <li>
                                <a href="#">Track My Orders</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>Shop</h4>
                        <ul class="menu-list">
                            <li>
                                <a href="#">Affiliate</a>
                            </li>
                            <li>
                                <a href="#">Bestsellers</a>
                            </li>
                            <li>
                                <a href="#">Discount</a>
                            </li>
                            <li>
                                <a href="#">Latest Products</a>
                            </li>
                            <li>
                                <a href="#">Sale Products</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-nav-menu">
                        <h4>Categories</h4>
                        <ul class="menu-list">
                            <li>
                                <a href="#">Women</a>
                            </li>
                            <li>
                                <a href="#">Men</a>
                            </li>
                            <li>
                                <a href="#">Bags</a>
                            </li>
                            <li>
                                <a href="#">Outerwear</a>
                            </li>
                            <li>
                                <a href="#">Shoes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-row">
            <div class="copyright-row">
                <div class="container">
                    <div class="footer-copyright">
                        <div class="site-copyright">
                            <p>
                                Copyright 2022 © E-Commerce Theme. All right reserved.
                                Powered By Sinan Sarıçayır.
                            </p>
                        </div>
                        <a href="#">
                            <img src="img/footer/cards.png" alt="">
                        </a>
                        <div class="footer-menu">
                            <ul class="footer-menu-list">
                                <li class="list-item">
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li class="list-item">
                                    <a href="#">Terms and Conditions</a>
                                </li>
                                <li class="list-item">
                                    <a href="#">Returns Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ! footer end -->

    <script src="js/main.js" type="module"></script>
    <script src="js/single-product.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="js/glide.js" type="module"></script>
</body>

</html>