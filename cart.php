<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>E-Commerce | Cart</title>
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

 

    <!-- ! cart start -->
    <section class="cart-page">
        <div class="container">
            <div class="cart-page-wrapper">
                <form class="cart-form">
                    <div class="free-progress-bar">
                        <p class="progress-bar-title">
                            Add <strong>$161.00</strong> to cart and get free shipping!
                        </p>
                        <div class="progress-bar">
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="shop-table-wrapper">
                        <table class="shop-table">
                            <thead>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </thead>
                            <tbody class="cart-wrapper" id="cart-product">

                            </tbody>
                        </table>
                        <div class="action-wrapper">
                            <div class="coupon">
                                <input type="text" class="input-text" placeholder="Coupon Code">
                                <button class="btn btn-black btn-md">Apply Coupon</button>
                            </div>
                            <div class="update-coupon">
                                <button class="btn btn-red btn-md">Update Cart</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="cart-collaterals">
                    <div class="cart-totals">
                        <h2>Cart Totals</h2>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td>
                                        <span id="subtotal">
                                            $316.00
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <label>
                                                    Fast Cargo :$15.00
                                                    <input type="checkbox" id="fast-cargo">
                                                </label>
                                            </li>
                                            <li>
                                                <a href="#">Change Address</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>
                                        <strong id="cart-total">$316.00</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="checkout">
                            <button class="btn btn-lg btn-red">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ! cart end -->

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
    <script src="js/cart.js"></script>
    <!-- scripts end -->

</body>

</html>