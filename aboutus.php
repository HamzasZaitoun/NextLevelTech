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
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
  <link rel="stylesheet" href="css/main.css" />
  <title>About Us - Gaming E-commerce</title>

  <style>
    /* Style for the About Us section */
.about-us-section {
  background: #f8f9fa;
  padding: 60px 0;
  border-bottom: 2px solid #e0e0e0;
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

.row-equal-height {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

/* Fade-in animation */
@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
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

.team-card {
  border: none;
  background: #fff;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s;
  margin: 15px;
  height: 300px; /* Set a consistent height */
  animation: fadeInLeft 0.5s ease forwards;
  opacity: 0; 
}

.team-card:nth-child(1) {
  animation-delay: 0.1s;
}

.team-card:nth-child(2) {
  animation-delay: 0.2s;
}

.team-card:nth-child(3) {
  animation-delay: 0.3s;
}

.card-body {
  padding: 20px;
  height: 100%; /* Allow body to take full height */
  display: flex;
  flex-direction: column;
  justify-content: center; /* Center content vertically */
}

.card-body h5 {
  font-weight: 700;
  margin: 15px 0;
  color: #4A55A2;
  text-align: center;
}

.card-body p {
  font-size: 1rem;
  color: #555;
  margin-bottom: 15px;
  text-align: center;
}

/* Team Section */
.team-section {
  padding: 50px 0;
}

.box {
  padding: 20px;
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(74, 84, 161, 0.5);
  transition: transform 0.3s;
  margin: 15px;
}

.box:hover {
  transform: translateY(-5px);
}

.box img {
  width: 100%;
  height: auto;
  max-height: 200px;
  object-fit: cover;
  border-radius: 5px;
}

.title {
  font-weight: 700;
  margin: 15px 0 10px;
  color: #4A55A2;
  text-align: center;
}

.description {
  font-size: 1rem;
  color: #555;
  margin-bottom: 15px;
  text-align: center;
}

.social-icons {
  text-align: center;
}

.social-icons i {
  font-size: 18px;
  margin: 0 10px;
  color: #007bff;
  transition: color 0.3s;
}

.social-icons i:hover {
  color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
  .about-us-section {
    padding: 40px 0;
  }

  .team-card,
  .box {
    margin: 10px 0;
  }
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

  <!-- About Us Section --> 
<section class="about-us-section">
  <div class="container">
    <div class="section-title">
      <h2>About Us</h2>
      <p>Your ultimate destination for gaming enthusiasts! At GameTech, we are dedicated to providing high-quality gaming devices that elevate your gaming experience to the next level.</p>
    </div>
    <div class="row row-equal-height">
      <div class="col-md-4">
        <div class="card team-card">
          <div class="card-body">
            <h5>Explore Our Range</h5>
            <p>Dive into our extensive selection of gaming devices, from immersive headsets to high-performance consoles. Our products are designed to keep you ahead of the competition and fully engaged in your gaming adventures.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card team-card">
          <div class="card-body">
            <h5>Our Mission</h5>
            <p>At GameTech, we empower gamers by offering the best tools to enhance their gaming journey. Our commitment is to deliver the latest and most innovative gaming devices at unbeatable prices, ensuring you have everything you need to succeed in your gaming endeavors.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card team-card">
          <div class="card-body">
            <h5>Our Commitment</h5>
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
      <p>Our talented team is passionate about gaming and technology. Connect with us to see our latest projects and updates!</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="box" data-aos="fade-right">
          <img src="img/esraa.jpg" alt="Esraa" class="box-image" />
          <h4 class="title">Esra'a Eid</h4>
          <p class="description">Full Stack Developer</p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/esra-a-eid-a489b3280/" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/EsraaEid2" target="_blank"><i class="bi bi-github"></i></a>
            <a href="mailto:esraa.eidd2@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box" data-aos="fade-left">
          <img src="img/hamza.jpg" alt="Esraa" class="box-image" />
          <h4 class="title">Hamza Zaitoun</h4>
          <p class="description">Full Stack Developer</p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/hamza-zaitoun-9ab8512b1/" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/HamzasZaitoun" target="_blank"><i class="bi bi-github"></i></a>
            <a href="mailto:hamzasaadzaitoun@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box" data-aos="fade-right">
          <img src="img/mays.jpg" alt="Esraa" class="box-image" />
          <h4 class="title">Mays Al-Khalil</h4>
          <p class="description">Full Stack Developer</p>
          <div class="social-icons">
            <a href="www.linkedin.com/in/mays-al-khalil-94723b220" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/mays-alkhalil" target="_blank"><i class="bi bi-github"></i></a>
            <a href="mailto:maysalkhalil02@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box" data-aos="fade-left">
          <img src="img/motasem.jpg" alt="Esraa" class="box-image" />
          <h4 class="title">Motasem Baseet</h4>
          <p class="description">Full Stack Developer</p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/motasem-baseet" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Motasem-Baseet" target="_blank"><i class="bi bi-github"></i></a>
            <a href="mailto:mmotasem.baseet@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box" data-aos="fade-right">
          <img src="img/moawiah.jpg" alt="moawiah" class="box-image" />
          <h4 class="title">Moawiah Eqailan</h4>
          <p class="description">Full Stack Developer</p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/moawiah-eqailan-2ba635178/" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Moawiah-Eqailan" target="_blank"><i class="bi bi-github"></i></a>
            <a href="mailto:moawiah.eqailan@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
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
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- scripts end -->
</body>

</html>
