<?php 
session_start();
require_once "includes/db_class.php"; 
require_once "includes/cartClass.php";
require_once "includes/productsClasss.php";

$user_id = $_SESSION['user_id'] ?? null;

$cart = new Cart();
$cartItems = $cart->getCart($user_id);

// Initialize total quantity and total price
$totalPrice = 0; 
$discountAmount = 0;
$taxAmount = 0;
$finalTotal = 0; 

// Check if the form to add to the cart was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    try {
        if ($cart->addToCart($user_id, $product_id, $quantity)){
          echo "<script>alert('Product added to cart successfully!');</script>";
          $cartItems = $cart->getCart($user_id);
          header ("Location: cart.php?message=item added ");

        }
    } catch (Exception $e) {
        echo "<script>alert('Error adding product to cart: " . $e->getMessage() . "');</script>";
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_from_cart'])) {
  $product_id = $_POST['product_id'];

  try {
      $cart->removeFromCart($user_id, $product_id);
      // echo "<script>alert('Item removed from cart successfully!');</script>";
  } catch (Exception $e) {
      echo "<script>alert('Error removing item from cart: " . $e->getMessage() . "');</script>";
  }

  $cartItems = $cart->getCart($user_id);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_quantity'])) {
  $product_id = $_POST['product_id'];
  $new_quantity = (int)$_POST['quantity'];

  try {
      $cart->updateCartQuantity($user_id, $product_id, $new_quantity);
      // echo "<script>alert('Quantity updated successfully!');</script>";
  } catch (Exception $e) {
      echo "<script>alert('Error updating quantity: " . $e->getMessage() . "');</script>";
  }

  $cartItems = $cart->getCart($user_id);
}



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['apply_coupon'])) {
  $couponCode = $_POST['coupon_code'];
  $userId = $_SESSION['user_id']; 

  $discountAmount = 0;
  $result = $cart->applyCoupon($couponCode, $userId);

  // Check the result
  if ($result['success']) {
      echo "<div class='alert alert-success'>Coupon applied! New total: $" . number_format($result['new_total'], 2) . " (Discount: $" . number_format($result['discount'], 2) . ")</div>";
      $discountAmount = $result['discount'];
  } else {
      echo "<div class='alert alert-danger'>" . $result['message'] . "</div>";
  }
}

// Calculate total price from cart items
$totalPrice = 0;
foreach ($cartItems as $item) {
  $totalPrice += $item['product_price'] * $item['quantity']; 
}


$finalTotal = $totalPrice - $discountAmount ;
$_SESSION['final_total'] = $finalTotal;






?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->

    <!-- Custom styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <link rel = "stylesheet" href = "trendingProducts.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <div class="card border shadow-sm">
        <div style="min-height: 390px;" class="card-body">
            <h4 class="card-title mb-4">Your Shopping Cart</h4>
            <?php if (!empty($cartItems)): ?>
                <?php foreach ($cartItems as $item): ?>
                    <div class="row align-items-center gy-3 mb-4 p-3 border-bottom">
                        <!-- Product Image and Name -->
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="d-flex align-items-center">
                              <?php
                            $imagePath="inserted_img/".($item['product_picture']);?>

                            <img src="<?php echo $imagePath; ?>" alt="category_pic" class="category-image">
                            <div>
                                    <h6 class="mb-1"><?= htmlspecialchars($item['product_name']); ?></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Quantity and Update Button -->
                        <div class="col-lg-3 col-md-3 col-6 d-flex align-items-center">
                            <form method="POST" action="cart.php" class="w-100 d-flex align-items-center" onsubmit="return confirmUpdate(this)">
                                <input type="hidden" name="product_id" value="<?= $item['product_id']; ?>">
                                <input type="hidden" name="update_quantity" value="1">
                                <input type="number" name="quantity" value="<?= $item['quantity']; ?>" required min="1" class="form-control text-center me-2" style="max-width: 80px;">
                                <button type="submit" class="btn btn-outline-primary btn-sm w-100 mt-2 mt-md-0">Update</button>
                            </form>
                        </div>

                        <script>
                          function confirmUpdate(form){
                            event.preventDefault(form);
                          Swal.fire({
                          position: "center",
                          icon: "success",
                          title: "Quantity Updated Successfully",
                          showConfirmButton: false,
                          timer: 1500
                        });
                      }
                        </script>

                        <!-- Item Price -->
                        <div class="col-lg-2 col-md-3 col-6 text-end text-md-center">
                            <span class="h6"><?= htmlspecialchars($item['product_price']); ?> JD</span>
                            <small class="text-muted d-block">per item</small>
                        </div>


                        <!-- Remove Button -->
                        <div class="col-lg-2 col-md-12 text-end text-md-center mt-2 mt-md-0">
                            <form method="POST" action="cart.php" onsubmit="return false;">
                                <input type="hidden" name="product_id" value="<?= $item['product_id']; ?>">
                                <input type="hidden" name="remove_from_cart" value="1">
                                <button type="submit" class="btn btn-danger btn-sm w-100" onclick="confirmDeletion(this.form)">Remove</button>
                            </form>
                        </div>

                        <script>
                         function confirmDeletion(form) {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "This will remove the item from your cart.",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    form.submit();  // Only submit the form if the user confirms
                                }
                            });
                           }
                        </script>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center p-4">No items in your Cart</div>
            <?php endif; ?>
        </div>

        <!-- Delivery Information -->
        <div class="card-footer text-center">
            <p class="mb-0"><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
        </div>
    </div>
</div>





        <!-- cart -->
        <!-- summary -->
       <div class="col-lg-3">
          <div class="card mb-3 border shadow-0"> 
        <div class="card-body">
            <form method="POST" action="cart.php">
                <div class="form-group">
                    <label class="form-label">Have a coupon?</label>
                    <div class="input-group mb-3">
                        <input type="text" name="coupon_code" class="form-control" placeholder=" coupon " required>
                        <button class="btn btn-primary" type="submit" name="apply_coupon">Apply Coupon</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-0 border">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2"><?php echo number_format($totalPrice, 2) . " JD"; ?></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="mb-2">Discount:</p>
                <p class="mb-2 text-success">- <?php echo number_format($discountAmount, 2) . " JD"; ?></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="mb-2">TAX:</p>
                <p class="mb-2"><?php echo number_format($taxAmount, 2) . " JD"; ?></p>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2 fw-bold"><?php echo number_format($finalTotal, 2) . " JD"; ?></p>
            </div>

            <div class="mt-3">
                <a href="checkout.php" class="btn btn-success w-100 shadow-0 mb-2">Make Purchase</a>
                <a href="#" class="btn btn-light w-100 border mt-2">Back to shop</a>
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
        <h3>Recommended products</h3>
      </header>
     

      <?php
      $cartProductIds = array_column($cartItems, 'product_id'); 


      if (!empty($cartProductIds)) {
          $cartObj = new Cart(); 
          $currentCategoryId = $cartObj->getCartCategoryId($cartProductIds); 

       
          if ($currentCategoryId) {
              $recomendedProductsObj = new Product();
              $recommendedProducts = $recomendedProductsObj->getRecommendedProducts($currentCategoryId, $cartProductIds); 

              if (!empty($recommendedProducts)) : ?>
                  <div class="row">
                      <?php foreach ($recommendedProducts as $product) : ?>
                          <div class="col-lg-3 col-md-6 col-12">
                              <div class="single-product">
                                  <div class="product-image">
                                      <?php $imagePath = "inserted_img/" . htmlspecialchars($product['product_picture']); ?>
                                      <img src="<?php echo $imagePath; ?>" alt="product_img">
                                      <?php if ($product['product_discount'] > 0) : ?>
                                          <div class="product-discount">
                                              <span>-<?= htmlspecialchars($product['product_discount']); ?>%</span>
                                          </div>
                                      <?php endif; ?>
                                      <div class="btn-div">
                                          <div class="shopbtn">
                                              <button class="btn-btn" onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                                  <div class="default-btn">
                                                      <i class="lni lni-eye"></i>
                                                  </div>
                                                  <div class="hover-btn">
                                                      <span>Quick View</span>
                                                  </div>
                                              </button>
                                          </div>
                                          <div class="shopbtn">
                                              <button class="btn-btn" onclick="window.location.href='productDetails.php?id=<?= htmlspecialchars($product['product_id']); ?>'">
                                                  <div class="default-btn">
                                                      <i class="lni lni-cart"></i>
                                                  </div>
                                                  <div class="hover-btn">
                                                      <span>Shop now</span>
                                                  </div>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-info">
                                      <h6 class="title">
                                          <?= htmlspecialchars($product['product_name']); ?>
                                      </h6>
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
              <?php endif;
          } else {
              echo "<p>No category found for the products in the cart.</p>";
          }
      } else {
          echo "<p>No products in your cart.</p>";
      }
      ?>
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

      


