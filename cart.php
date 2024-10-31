<?php 
session_start();
require_once "includes/db_class.php"; 
require_once "includes/cartClass.php";

$user_id = $_SESSION['user_id'] ?? null;

// Create an instance of the Cart class
$cart = new Cart();
$cartItems = $cart->getCart($user_id);

// Initialize total quantity and total price
$totalQuantity = 0;
$totalPrice = 0;

// Check if the form to add to the cart was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    try {
        $cart->addToCart($user_id, $product_id, $quantity); 
        echo "<script>alert('Product added to cart successfully!');</script>";
        // Refresh cart items after adding
        $cartItems = $cart->getCart($user_id);
    } catch (Exception $e) {
        echo "<script>alert('Error adding product to cart: " . $e->getMessage() . "');</script>";
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_from_cart'])) {
  $product_id = $_POST['product_id'];

  try {
      $cart->removeFromCart($user_id, $product_id);
      echo "<script>alert('Item removed from cart successfully!');</script>";
  } catch (Exception $e) {
      echo "<script>alert('Error removing item from cart: " . $e->getMessage() . "');</script>";
  }

  // Refresh cart items after removal
  $cartItems = $cart->getCart($user_id);
}
// Retrieve cart items to display

?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->

    <!-- Custom styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

  <?php
  include("includes/header.php");
  ?>
  <style>
    html 
    {
      color:black !important;
    }
    a{color: black;}
  </style>
  <section class="bg-light my-5">
    <div class="container">
      <div class="row">


      

        <!-- cart -->


      <div class="col-lg-9">
    <div class="card border shadow-0">
        <div class="m-4">
            <h4 class="card-title mb-4">Your shopping cart</h4>
            <?php if (!empty($cartItems)): ?>
                <?php foreach ($cartItems as $item): ?>
                    <div class="row gy-3 mb-4">
                        <div class="col-lg-5">
                            <div class="me-lg-5">
                                <div class="d-flex">
                                    <img src="<?= htmlspecialchars($item['product_picture']); ?>" alt="<?= htmlspecialchars($item['product_name']); ?>" >
                                    <div>
                                        <a href="#" class="nav-link"><?= htmlspecialchars($item['product_name']); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Update quantity -->
                        <div style="width:300px;8" class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                            <form method="POST" action="cart.php?id=">
                                <input type="number" name="quantity" value="<?= $item['quantity']; ?>" required>
                                <button type="submit">Update Quantity</button>
                            </form>
                            <!-- Item price -->
                            <div class="item_price">
                                <text class="h6"><?= htmlspecialchars($item['product_price']); ?> JD</text><br />
                                <small class="text-muted text-nowrap">JD / per item</small>
                            </div>
                        </div>
                        <!-- Remove button -->
                        <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                            <div class="float-md-end">
                                <form method="POST" action="cart.php" onsubmit="return confirmDeletion();">
                                    <input type="hidden" name="product_id" value="<?= $item['product_id']; ?>">
                                    <input type="hidden" name="remove_from_cart" value="1">
                                    <button type="submit" class="btn btn-danger">Remove from Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div>No items in your Cart</div>
            <?php endif; ?>
        </div>
        <div class="border-top pt-4 mx-4 mb-4">
            <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
        </div>
    </div>
</div>

<script>
function confirmDeletion() {
    return confirm("Are you sure you want to remove this item from your cart?");
}

        <!-- cart -->
        <!-- summary -->
        <div class="col-lg-3">
          <div class="card mb-3 border shadow-0">
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label class="form-label">Have coupon?</label>
                  <div class="input-group">
                    <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                    <button class="btn btn-light border">Apply</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card shadow-0 border">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2"><?php echo $totalPrice . " JD";?></p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Discount:</p>
                <p class="mb-2 text-success">-$60.00</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">TAX:</p>
                <p class="mb-2">$14.00</p>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2 fw-bold">$283.00</p>
              </div>
  
              <div class="mt-3">
                <a href="#" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
                <a href="#" class="btn btn-light w-100 border mt-2"> Back to shop </a>
              </div>
            </div>
          </div>
        </div>
        <!-- summary -->
      </div>
    </div>
  </section>
  <!-- cart + summary -->
  <section>
    <div class="container my-5">
      <header class="mb-4">
        <h3>Recommended items</h3>
      </header>
  
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
            <div class="mask px-2" style="height: 50px;">
              <div class="d-flex justify-content-between">
                <h6><span class="badge bg-danger pt-1 mt-3 ms-2">New</span></h6>
                <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
              </div>
            </div>
            <a href="#" class="">
              <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/7.webp" class="card-img-top rounded-2" />
            </a>
            <div class="card-body d-flex flex-column pt-3 border-top">
              <a href="#" class="nav-link">Gaming Headset with Mic</a>
              <div class="price-wrap mb-2">
                <strong class="">$18.95</strong>
                <del class="">$24.99</del>
              </div>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
            <div class="mask px-2" style="height: 50px;">
              <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
            </div>
            <a href="#" class="">
              <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/5.webp" class="card-img-top rounded-2" />
            </a>
            <div class="card-body d-flex flex-column pt-3 border-top">
              <a href="#" class="nav-link">Apple Watch Series 1 Sport </a>
              <div class="price-wrap mb-2">
                <strong class="">$120.00</strong>
              </div>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card px-4 border shadow-0">
            <div class="mask px-2" style="height: 50px;">
              <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
            </div>
            <a href="#" class="">
              <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/9.webp" class="card-img-top rounded-2" />
            </a>
            <div class="card-body d-flex flex-column pt-3 border-top">
              <a href="#" class="nav-link">Men's Denim Jeans Shorts</a>
              <div class="price-wrap mb-2">
                <strong class="">$80.50</strong>
              </div>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card px-4 border shadow-0">
            <div class="mask px-2" style="height: 50px;">
              <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
            </div>
            <a href="#" class="">
              <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/10.webp" class="card-img-top rounded-2" />
            </a>
            <div class="card-body d-flex flex-column pt-3 border-top">
              <a href="#" class="nav-link">Mens T-shirt Cotton Base Layer Slim fit </a>
              <div class="price-wrap mb-2">
                <strong class="">$13.90</strong>
              </div>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
      include("includes/footer.php");
      ?>

      

