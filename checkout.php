<?php
session_start();
require_once "includes/db_class.php"; // Include your database class
require_once "includes/cartClass.php"; // Include your Cart class

$user_id = $_SESSION['user_id'] ?? null; // Retrieve user ID from session
$cart = new Cart();
$cartItems = $cart->getCart($user_id); // Get cart items for the user

// Calculate total amount
$totalAmount = 0;
foreach ($cartItems as $item) {
    $totalAmount += $item['quantity'] * $item['product_price'];
}

// Handle checkout form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    if ($cart->checkout($user_id)) {
        // echo "<script>alert('Order has been successfully checked out and marked as delivered.');</script>";
        // header("Location: confirmation.php"); // Redirect to confirmation page
        exit();
    } else {
        echo "<script>alert('No pending orders found.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="products.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                        <p class="mb-0">You have <?= count($cartItems); ?> items in your cart</p>
                                    </div>
                                </div>

                                <?php foreach ($cartItems as $item): ?>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="<?= htmlspecialchars($item['product_picture']); ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5><?= htmlspecialchars($item['product_name']); ?></h5>
                                                        <p class="small mb-0"><?= htmlspecialchars($item['quantity']); ?> x <?= htmlspecialchars($item['product_price']); ?> JD</p>
                                                    </div>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0"><?= htmlspecialchars($item['quantity'] * $item['product_price']); ?> JD</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <h5 class="mb-0">Card details</h5>
                                        <form method="POST">
                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="text" id="typeName" class="form-control form-control-lg" placeholder="Cardholder's Name" required />
                                                <label class="form-label" for="typeName">Cardholder's Name</label>
                                            </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <input type="text" id="typeText" class="form-control form-control-lg" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" required />
                                                <label class="form-label" for="typeText">Card Number</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div data-mdb-input-init class="form-outline form-white">
                                                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" minlength="7" maxlength="7" required />
                                                        <label class="form-label" for="typeExp">Expiration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div data-mdb-input-init class="form-outline form-white">
                                                        <input type="password" id="typeCvv" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3" required />
                                                        <label class="form-label" for="typeCvv">Cvv</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Total:</p>
                                                <p class="mb-2"><?= htmlspecialchars($totalAmount); ?> JD</p>
                                            </div>

                                            <button type="submit" name="checkout" class="btn btn-info btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                                    <span>Checkout</span>
                                                    <span><i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
