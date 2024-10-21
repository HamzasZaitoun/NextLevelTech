
  <title>E-Commerce | Account</title>
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


  <!-- ! account start -->
  <section class="account-page">
    <div class="container">
      <div class="account-wrapper">
        <div class="account-column">
          <h2>Login</h2>
          <form>
            <div>
              <label>
                <span>Username or email address <span class="required">*</span></span>
                <input type="text">
              </label>
            </div>
            <div>
              <label>
                <span>Password <span class="required">*</span></span>
                <input type="password">
              </label>
            </div>
            <p class="remember">
              <label>
                <input type="checkbox">
                <span>Remember Me</span>
              </label>
              <button class="btn btn-sm">Login</button>
            </p>
            <a href="#" class="form-link">Lost your password?</a>
          </form>
        </div>
        <div class="account-column">
          <h2>Register</h2>
          <form>
            <div>
              <label>
                <span>Username <span class="required">*</span></span>
                <input type="text">
              </label>
            </div>
            <div>
              <label>
                <span>Email Address <span class="required">*</span></span>
                <input type="email">
              </label>
            </div>
            <div>
              <label>
                <span>Password <span class="required">*</span></span>
                <input type="password">
              </label>
            </div>
            <div class="privacy-policy-text remember">
              <p>
                Your personal data will be used to support your experience throughout this website, to manage access to
                your account, and for other purposes described in our <a href="#">privacy policy</a>.
              </p>
              <button class="btn btn-sm">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ! account end -->

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
  <!-- scripts end -->
</body>

</html>