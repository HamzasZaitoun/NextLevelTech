<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="GameTech is your ultimate destination for gaming enthusiasts, providing high-quality gaming devices to enhance your gaming experience. Learn more about our mission and meet our team." />
  <!-- Bootstrap CSS for easy styling -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
  <title>About Us - Gaming E-commerce</title>

  <style>
    /* Style for the About Us section */
    .about-us-section {
      background: #f8f9fa;
      padding: 60px 0;
    }

    .about-us-section .section-title h2 {
      font-size: 2.5rem;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    .about-us-section p {
      text-align: center;
      color: #666;
      font-size: 1.1rem;
      margin-bottom: 40px;
    }

    /* Equal height for all columns using Flexbox */
    .row-equal-height {
      display: flex;
      flex-wrap: wrap;
    }

    .col-md-4 {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background: #fff;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      transition: transform 0.3s;
    }

    .col-md-4:hover {
      transform: translateY(-10px);
    }

    /* Consistent text styling for all card headers and paragraphs */
    .col-md-4 h5,
    .team-card h5 {
      text-align: center;
      font-size: 1.2rem;
      font-weight: bold;
      margin: 15px 0 10px;
      color: #333;
    }

    .col-md-4 p,
    .team-card p {
      text-align: center;
      font-size: 1rem;
      color: #555;
      margin: 0 0 15px;
    }

    /* Team card styling */
    .team-section {
      padding: 50px 0;
    }

    .team-card {
      border: none;
      background: #fff;
      overflow: hidden;
      border-radius: 10px;
    }

    .team-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .team-card .social-icons i {
      font-size: 18px;
      margin: 0 10px;
      color: #007bff;
      transition: color 0.3s;
    }

    .team-card .social-icons i:hover {
      color: #0056b3;
    }

    .smaller-card {
      width: 80%; /* Reduce card size */
      margin: 0 auto; /* Center the card */
    }

    .smaller-card img {
      height: 250px; /* Reduce image height */
      object-fit: cover;
    }

    .smaller-card .card-body {
      padding: 10px; /* Adjust padding for a more compact look */
    }

    .smaller-card h5 {
      font-size: 1rem; /* Smaller font size for the heading */
    }

    .smaller-card p {
      font-size: 0.9rem; /* Smaller font size for the text */
    }

    .smaller-card .social-icons i {
      font-size: 16px; /* Smaller icons */
      margin: 0 5px;
    }
  </style>
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
                  <a href="/" class="menu-link active">Home
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

  <!-- About Us Section -->
  <section class="about-us-section">
    <div class="container">
      <div class="section-title">
        <h2>About Us</h2>
        <p>Welcome to GameTech, your ultimate destination for gaming enthusiasts! We provide high-quality gaming devices designed to take your gaming experience to the next level.</p>
      </div>
      <div class="row row-equal-height">
        <div class="col-md-4">
          <div class="card team-card">
            <img src="img/test2.jpg" alt="Gaming Devices" />
            <div class="card-body">
              <h5>Level Up Your Game with GameTech</h5>
              <p>Explore our wide range of gaming devices, from headsets to consoles, all built to help you stay ahead of the competition.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card team-card">
            <img src="img/blogs/blog2.jpg" alt="Our Mission" />
            <div class="card-body">
              <h5>Our Mission</h5>
              <p>To empower gamers with the best tools to enhance their gaming journey. We offer the latest and most innovative gaming devices at unbeatable prices.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card team-card">
            <img src="img/blogs/blog4.jpg" alt="Customer Satisfaction" />
            <div class="card-body">
              <h5>Customer Satisfaction</h5>
              <p>We’re here to ensure that every product meets your expectations. Our dedicated customer support team is always ready to assist you.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Members Section -->
  <section class="team-section text-center">
    <div class="container">
      <div class="section-title">
        <h2>Meet Our Team</h2>
        <p>Feel free to contact with us</p>
      </div>
      <div class="row row-equal-height">
        <div class="col-md-4">
          <div class="card team-card smaller-card">
            <img src="img/esraa.jpg" alt="Esra'a Eid" />
            <div class="card-body">
              <h5>Esra'a Eid</h5>
              <p>Full-Stack Developer</p>
              <div class="social-icons">
                <a href="https://www.linkedin.com/in/esra-a-eid-a489b3280/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/EsraaEid2" target="_blank"><i class="bi bi-github"></i></a>
                <a href="mailto:esraa.eidd2@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card team-card smaller-card">
            <img src="img/hamza.jpg" alt="Hamza Zaitoun" />
            <div class="card-body">
              <h5>Hamza Zaitoun</h5>
              <p>Full Stack Developer</p>
              <div class="social-icons">
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-twitter"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card team-card smaller-card">
            <img src="img/team/member2.jpg" alt="Mays Alkhalil" />
            <div class="card-body">
              <h5>Mays Alkhalil</h5>
              <p>Full Stack Developer</p>
              <div class="social-icons">
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-twitter"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card team-card smaller-card">
            <img src="img/motasem.jpg" alt="Motasem" />
            <div class="card-body">
              <h5>Motasem</h5>
              <p>Full Stack Developer</p>
              <div class="social-icons">
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-twitter"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card team-card smaller-card">
            <img src="img/test.jpg" alt="Moawyiah" />
            <div class="card-body">
              <h5>Moawyiah</h5>
              <p>Full Stack Developer</p>
              <div class="social-icons">
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-twitter"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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

    <!-- scripts start -->
    <script src="js/main.js" type="module"></script>
    <!-- scripts end -->
</body>

</html>
