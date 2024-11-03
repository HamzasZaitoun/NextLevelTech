<?php 
include ("includes/header.php");
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
<!-- MDB -->

<!-- Custom styles -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
<!-- AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<link rel="stylesheet" href="css/main.css" />
<title>About Us | GamifyTech</title>
<link rel="stylesheet" href="assets\css\aboutus.css">

</head>

<body>
    <!-- ! header start -->
    <!-- <header>
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
    </header> -->
    <!-- ! header end -->

    <!-- About Us Section -->
    <section class="about-us-section">
        <div class="container">
            <div class="section-title">
                <h2>About Us</h2>
                <p>Your ultimate destination for gaming enthusiasts! At GameTech, we are dedicated to providing
                    high-quality gaming devices that elevate your gaming experience to the next level.</p>
            </div>
            <div class="row row-equal-height">
                <div class="col-md-4">
                    <div class="card team-card">
                        <div class="card-body">
                            <h5>Explore Our Range</h5>
                            <p>Dive into our extensive selection of gaming devices, from immersive headsets to
                                high-performance consoles. Our products are designed to keep you ahead of the
                                competition and fully engaged in your gaming adventures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card">
                        <div class="card-body">
                            <h5>Our Mission</h5>
                            <p>At GameTech, we empower gamers by offering the best tools to enhance their gaming
                                journey. Our commitment is to deliver the latest and most innovative gaming devices at
                                unbeatable prices, ensuring you have everything you need to succeed in your gaming
                                endeavors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card">
                        <div class="card-body">
                            <h5>Our Commitment</h5>
                            <p>We’re here to ensure that every product meets your expectations. Our dedicated customer
                                support team is always ready to assist you.</p>
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
                <p>Our talented team is passionate about gaming and technology. Connect with us to see our latest
                    projects and updates!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="box" data-aos="fade-right">
                        <img src="assets/images/team/esraa.jpg" alt="Esraa" class="box-image" />
                        <h4 class="title">Esra'a Eid</h4>
                        <p class="description">Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/esra-a-eid-a489b3280/" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/EsraaEid2" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="mailto:esraa.eidd2@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" data-aos="fade-left">
                        <img src="assets/images/team/hamza.jpg" alt="Esraa" class="box-image" />
                        <h4 class="title">Hamza Zaitoun</h4>
                        <p class="description">Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/hamza-zaitoun-9ab8512b1/" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/HamzasZaitoun" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="mailto:hamzasaadzaitoun@gmail.com" target="_blank"><i
                                    class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" data-aos="fade-right">
                        <img src="assets/images/team/mays.jpg" alt="Esraa" class="box-image" />
                        <h4 class="title">Mays Al-Khalil</h4>
                        <p class="description">Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="www.linkedin.com/in/maysalkhalil

                                " target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/mays-alkhalil" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="mailto:maysalkhalil02@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" data-aos="fade-left">
                        <img src="assets/images/team/motasem.jpg" alt="Esraa" class="box-image" />
                        <h4 class="title">Motasem Baseet</h4>
                        <p class="description">Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/motasem-baseet" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/Motasem-Baseet" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="mailto:mmotasem.baseet@gmail.com" target="_blank"><i
                                    class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box" data-aos="fade-right">
                        <img src="assets/images/team/moawiah.jpg" alt="moawiah" class="box-image" />
                        <h4 class="title">Moawiah Eqailan</h4>
                        <p class="description">Full Stack Developer</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/moawiah-eqailan-2ba635178/" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/Moawiah-Eqailan" target="_blank"><i
                                    class="bi bi-github"></i></a>
                            <a href="mailto:moawiah.eqailan@gmail.com" target="_blank"><i
                                    class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
  include ("includes/footer.php");
?>

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