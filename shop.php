
  <title>E-Commerce | Home</title>
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



  <!-- ! category start -->
  <section class="categories">
    <div class="container">
      <div class="section-title">
        <h2>All Categories</h2>
        <p>Summer Collection New Modern Design</p>
      </div>

      <ul class="category-list">
        <li class="category-item">
          <a href="#">
            <img src="img/categories/categories1.png" alt="" class="category-image" />
            <span class="category-title">Smartphone</span>
          </a>
        </li>
        <li class="category-item">
          <a href="#">
            <img src="img/categories/categories2.png" alt="" class="category-image" />
            <span class="category-title">Watches</span>
          </a>
        </li>
        <li class="category-item">
          <a href="#">
            <img src="img/categories/categories3.png" alt="" class="category-image" />
            <span class="category-title">Electronics</span>
          </a>
        </li>
        <li class="category-item">
          <a href="#">
            <img src="img/categories/categories4.png" alt="" class="category-image" />
            <span class="category-title">Furnitures</span>
          </a>
        </li>
        <li class="category-item">
          <a href="#">
            <img src="img/categories/categories5.png" alt="" class="category-image" />
            <span class="category-title">Collections</span>
          </a>
        </li>
        <li class="category-item">
          <a href="#">
            <img src="img/categories/categories6.png" alt="" class="category-image" />
            <span class="category-title">Fashion</span>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- ! category end-->

  <!-- ! product start -->
  <section class="products">
    <div class="container">
      <div class="section-title">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
      </div>
      <div class="product-wrapper product-carousel">
        <div class="glide__track" data-glide-el="track">
          <ul class="product-list glide__slides" id="product-list">
            <li class="product-item glide__slide">
              <div class="product-image">
                <a href="#">
                  <img src="img/products/product1/1.png" alt="" class="img1" />
                  <img src="img/products/product1/2.png" alt="" class="img2" />
                </a>
              </div>
              <div class="product-info">
                <a href="#" class="product-title"> Analogue Resin Strap </a>
                <ul class="product-star">
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
                <div class="product-prices">
                  <strong class="new-price">$108.00</strong>
                  <span class="old-price">$165</span>
                </div>
                <span class="product-discount"> -17% </span>
                <div class="product-links">
                  <button>
                    <i class="bi bi-basket-fill"></i>
                  </button>
                  <button>
                    <i class="bi bi-heart-fill"></i>
                  </button>
                  <a href="#">
                    <i class="bi bi-eye-fill"></i>
                  </a>
                  <a href="#">
                    <i class="bi bi-share-fill"></i>
                  </a>
                </div>
              </div>
            </li>
          </ul>
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
  </section>
  <!-- ! product end -->

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


  <!-- ! product start -->
  <section class="products">
    <div class="container">
      <div class="section-title">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
      </div>
      <div class="product-wrapper product-carousel2">
        <div class="glide__track" data-glide-el="track">
          <ul class="product-list glide__slides" id="product-list-2">
            <li class="product-item glide__slide">
              <div class="product-image">
                <a href="#">
                  <img src="img/products/product1/1.png" alt="" class="img1" />
                  <img src="img/products/product1/2.png" alt="" class="img2" />
                </a>
              </div>
              <div class="product-info">
                <a href="#" class="product-title"> Analogue Resin Strap </a>
                <ul class="product-star">
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
                <div class="product-prices">
                  <strong class="new-price">$108.00</strong>
                  <span class="old-price">$165</span>
                </div>
                <span class="product-discount"> -17% </span>
                <div class="product-links">
                  <button>
                    <i class="bi bi-basket-fill"></i>
                  </button>
                  <button>
                    <i class="bi bi-heart-fill"></i>
                  </button>
                  <a href="#">
                    <i class="bi bi-eye-fill"></i>
                  </a>
                  <a href="#">
                    <i class="bi bi-share-fill"></i>
                  </a>
                </div>
              </div>
            </li>
          </ul>
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
  </section>
  <!-- ! product end -->


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

  <!-- scripts start -->
  <script src="js/main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="js/glide.js" type="module"></script>
  <!-- scripts end -->
</body>

</html>