<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>E-Commerce | Single Blog</title>
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
                        <i class="bi bi-list"></i>
                    </div>
                    <div class="header-left">
                        <a href="/" class="logo">LOGO</a>
                    </div>
                    <div class="header-center">
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
                                    <a href="shop.php" class="menu-link">Shop
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
                                    <a href="blog.php" class="menu-link active">Blog
                                    </a>
                                </li>
                                <li class="menu-list-item">
                                    <a href="contact.php" class="menu-link">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <i class="bi-x-circle"></i>
                    </div>
                    <div class="header-right">
                        <div class="header-right-links">
                            <a href="account.php">
                                <i class="bi bi-person"></i>
                            </a>
                            <button class="toggle-button">
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
            <form class="search-form">
                <input type="text" placeholder="Search a product" />
                <button><i class="bi bi-search"></i></button>
            </form>
            <div class="search-result">
                <div class="search-heading">
                    <h3>RESULT FROM PRODUCT</h3>
                </div>
                <div class="results">
                    <a href="#" class="result-item">
                        <img src="img/products/product1/1.png" class="search-thumb" alt="" />
                        <div class="search-info">
                            <h4>Analogue Resin Strap</h4>
                            <span class="search-sku">SKU : PD0016</span>
                            <span class="search-price">$108.00</span>
                        </div>
                    </a>
                    <a href="#" class="result-item">
                        <img src="img/products/product2/1.png" class="search-thumb" alt="" />
                        <div class="search-info">
                            <h4>Analogue Resin Strap</h4>
                            <span class="search-sku">SKU : PD0016</span>
                            <span class="search-price">$108.00</span>
                        </div>
                    </a>
                </div>
            </div>
            <i class="bi bi-x-circle"></i>
        </div>
    </div>
    <!-- ! modal search end -->

    <!-- ! single blog start -->
    <section class="single-blog">
        <div class="container">
            <article>
                <figure>
                    <a href="#">
                        <img src="img/blogs/blog1.jpg" alt="">
                    </a>
                </figure>
                <div class="blog-wrapper">
                    <div class="blog-meta">
                        <div class="blog-category">
                            <a href="#">
                                COLLECTION
                            </a>
                        </div>
                        <div class="blog-date">
                            <a href="#">
                                April 25, 2022
                            </a>
                        </div>
                        <div class="blog-tags">
                            <a href="#">products</a>,
                            <a href="#">coats</a>
                        </div>
                    </div>
                    <h1 class="blog-title">
                        The Best Products That Shape Fashion
                    </h1>
                    <div class="blog-content">
                        <p>
                            Donec rhoncus quis diam sit amet faucibus. Vivamus pellentesque, sem sed convallis
                            ultricies, ante eros laoreet libero, vitae suscipit lorem turpis sit amet lectus. Quisque
                            egestas lorem ut mauris ultrices, vitae sollicitudin quam facilisis. Vivamus rutrum urna non
                            ligula tempor aliquet. Fusce tincidunt est magna, id malesuada massa imperdiet ut. Nunc non
                            nisi urna. Nam consequat est nec turpis eleifend ornare. Vestibulum eu justo lobortis mauris
                            commodo efficitur. Nunc pulvinar pulvinar cursus.
                        </p>
                        <p>
                            Nulla id nibh ligula. Etiam finibus elit nec nisl faucibus, vel auctor tortor iaculis.
                            Vivamus aliquet ipsum purus, vel auctor felis interdum at. Praesent quis fringilla justo. Ut
                            non dui at mi laoreet gravida vitae eu elit. Aliquam in elit eget purus scelerisque
                            efficitur vel ac sem. Etiam ante magna, vehicula et vulputate in, aliquam sit amet metus.
                            Donec mauris eros, aliquet in nibh quis, semper suscipit nunc. Phasellus ornare nibh vitae
                            dapibus tempor.
                        </p>
                        <blockquote>
                            <p>
                                Aliquam purus enim, fringilla vel nunc imperdiet, consequat ultricies massa. Praesent
                                sed turpis sollicitudin, dignissim justo vel, fringilla mi.
                            </p>
                        </blockquote>
                        <p>
                            Vivamus libero leo, tincidunt eget lectus rhoncus, finibus interdum neque. Curabitur aliquet
                            dolor purus, id molestie purus elementum vitae. Sed quis aliquet eros. Morbi condimentum
                            ornare nibh, et tincidunt ante interdum facilisis. Praesent sagittis tortor et felis finibus
                            vestibulum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus dapibus
                            turpis sit amet turpis tincidunt, sit amet mollis turpis suscipit. Proin arcu diam, pretium
                            nec tempus eu, feugiat non ex.
                        </p>
                        <p>
                            Donec feugiat tincidunt eros, ac aliquam purus egestas condimentum. Curabitur imperdiet at
                            leo pellentesque mattis. Fusce a dignissim est. In enim nisi, hendrerit placerat nunc quis,
                            porttitor lobortis neque. Donec nec nulla arcu. Proin felis augue, volutpat ac nunc a,
                            semper egestas dolor. Sed varius magna non lacus viverra, at dapibus sem interdum. Proin
                            urna nibh, maximus nec interdum ut, hendrerit et arcu. Nunc venenatis eget nulla at tempor.
                            Duis sed tellus placerat, bibendum felis quis, efficitur nisi. Morbi porta placerat urna et
                            pharetra. Proin condimentum, libero ac feugiat efficitur, est orci consectetur sapien, a
                            pretium leo leo in elit. Quisque fringilla finibus arcu, pretium posuere urna posuere sit
                            amet. Nullam quis sapien a augue aliquet accumsan eget eu risus. Ut at mi sed velit
                            condimentum porta. Proin vestibulum congue ullamcorper.
                        </p>
                        <p>
                            Nunc blandit ligula mi, quis commodo dolor fermentum sit amet. Nam vehicula pharetra lacus a
                            vulputate. Duis pulvinar vestibulum dolor, vel commodo arcu laoreet ac. Vestibulum sed
                            consequat purus, vitae auctor metus. Duis ut aliquet odio, at tincidunt nunc. Vestibulum
                            dignissim aliquet orci, rutrum malesuada ipsum facilisis vel. Morbi tempor dignissim nisi.
                            Maecenas scelerisque maximus justo eget sodales. Sed finibus consectetur vulputate.
                            Pellentesque id pellentesque nulla. Sed ut viverra eros. Vestibulum ut ligula quam.
                        </p>
                    </div>
                </div>
            </article>
            <div class="tab-panel-reviews">
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
                            <textarea cols="50" rows="10" id="form-review">

                            </textarea>
                        </div>
                        <div class="comment-form-author form-comment">
                            <label for="name">Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" id="name">
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
    </section>
    <!-- ! single blog end -->

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
</body>

</html>