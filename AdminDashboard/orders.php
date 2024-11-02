<?php
include("includes/header.php");
include "model/Orders.php";
$orders = new Order();
$allOrders = $orders->getAllOrders();
?>
<style>
    html {
        overflow: hidden !important;
    }

    .cart-wrap {
        padding: 40px 0;
        font-family: 'Open Sans', sans-serif;
    }

    .main-heading {
        font-size: 19px;
        margin-bottom: 20px;
    }

    .table-wishlist table {
        width: 100%;
    }

    .table-wishlist thead {
        border-bottom: 1px solid #e5e5e5;
        margin-bottom: 5px;
    }

    .table-wishlist thead tr th {
        padding: 8px 0 18px;
        color: #484848;
        font-size: 15px;
        font-weight: 400;
    }

    .table-wishlist tr td {
        padding: 25px 0;
        vertical-align: middle;
    }

    .table-wishlist tr td .img-product {
        width: 72px;
        float: left;
        margin-left: 8px;
        margin-right: 31px;
        line-height: 63px;
    }

    .table-wishlist tr td .img-product img {
        width: 100%;
    }

    .table-wishlist tr td .name-product {
        font-size: 15px;
        color: #484848;
        padding-top: 8px;
        line-height: 24px;
        width: 50%;
    }

    .table-wishlist tr td.price {
        font-weight: 600;
    }

    .table-wishlist tr td .quanlity {
        position: relative;
    }

    .total {
        font-size: 24px;
        font-weight: 600;
        color: #8660e9;
    }

    .display-flex {
        display: flex;
    }

    .align-center {
        align-items: center;
    }

    .round-black-btn {
        border-radius: 25px;
        background: #212529;
        color: #fff;
        padding: 5px 20px;
        display: inline-block;
        border: solid 2px #212529;
        transition: all 0.5s ease-in-out 0s;
        cursor: pointer;
        font-size: 14px;
    }

    .round-black-btn:hover,
    .round-black-btn:focus {
        background: transparent;
        color: #212529;
        text-decoration: none;
    }

    .mb-10 {
        margin-bottom: 10px !important;
    }

    .mt-30 {
        margin-top: 30px !important;
    }

    .d-block {
        display: block;
    }

    .custom-form label {
        font-size: 14px;
        line-height: 14px;
    }

    .pretty.p-default {
        margin-bottom: 15px;
    }

    .pretty input:checked~.state.p-primary-o label:before,
    .pretty.p-toggle .state.p-primary-o label:before {
        border-color: #8660e9;
    }

    .pretty.p-default:not(.p-fill) input:checked~.state.p-primary-o label:after {
        background-color: #8660e9 !important;
    }

    .main-heading.border-b {
        border-bottom: solid 1px #ededed;
        padding-bottom: 15px;
        margin-bottom: 20px !important;
    }

    .custom-form .pretty .state label {
        padding-left: 6px;
    }

    .custom-form .pretty .state label:before {
        top: 1px;
    }

    .custom-form .pretty .state label:after {
        top: 1px;
    }

    .custom-form .form-control {
        font-size: 14px;
        height: 38px;
    }

    .custom-form .form-control:focus {
        box-shadow: none;
    }

    .custom-form textarea.form-control {
        height: auto;
    }

    .mt-40 {
        margin-top: 40px !important;
    }

    .in-stock-box {
        background: #ff0000;
        font-size: 12px;
        text-align: center;
        border-radius: 25px;
        padding: 4px 15px;
        display: inline-block;
        color: #fff;
    }

    .trash-icon {
        font-size: 20px;
        color: #212529;
    }

    /* Modal Styles */
    .modal {
        display: none;
        justify-content: center;
        align-items: center;
        overflow: scroll;
    }

    .modal-content {
        text-align: center;
        margin: auto;
    }

    .close-btn {
        background: #db4f4f;
    }
</style>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Orders dashboard</h1>

    <div class="table-container">
        <table class="responsive-table col-12" id="myTable">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Order Date</th>
                    <th>Order Total</th>
                    <th>Order Coupon</th>
                    <th>Discount</th>
                    <th>Order Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($allOrders)): ?>
                    <?php foreach ($allOrders as $order): ?>
                        <tr id="order-row-<?php echo htmlspecialchars($order['order_id']); ?>">
                            <td data-label="Order ID"><?php echo htmlspecialchars($order['order_id']); ?></td>
                            <td data-label="User Name"><?php echo htmlspecialchars($order['user_name']); ?></td>
                            <td data-label="Order Date"><?php echo htmlspecialchars($order['order_date']); ?></td>
                            <td data-label="Order Total"><?php echo htmlspecialchars($order['order_total']); ?></td>
                            <td data-label="Order Coupon"><?php echo htmlspecialchars($order['order_coupon']); ?></td>
                            <td data-label="Discount"><?php echo htmlspecialchars($order['order_discount']); ?>%</td>
                            <td data-label="Order Status"><?php echo htmlspecialchars($order['order_status']); ?></td>
                            <td>
                                <button class="edit-btn" 
                                        onclick="openOrderModal(
                                            '<?php echo htmlspecialchars($order['order_id']); ?>',
                                            '<?php echo htmlspecialchars($order['user_name']); ?>',
                                            '<?php echo htmlspecialchars($order['order_date']); ?>',
                                            '<?php echo htmlspecialchars($order['order_total']); ?>',
                                            '<?php echo htmlspecialchars($order['order_status']); ?>',
                                            '<?php echo htmlspecialchars($order['order_discount']); ?>'
                                        )">
                                    View Order
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No orders found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

   <!-- View Modal -->
<div class="modal" id="viewModal">
    <div class="modal-content">
        <button class="close-btn" onclick="closeEditModal()">X</button>
        <h3>Order Details</h3>
        <?php
        if (isset($orderDetails) && $orderDetails !== false && count($orderDetails) > 0) {
            $grandTotal = 0;  // Initialize grand total for the order
        ?>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Items from Order</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orderDetails as $item): 
                                    $itemTotal = $item['price'] * $item['product_quantity'];
                                    $grandTotal += $itemTotal;
                                ?>
                                <tr>
                                    <td><?php echo $item['product_name']; ?></td>
                                    <td><?php echo $item['product_quantity']; ?></td>
                                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                                    <td>$<?php echo number_format($itemTotal, 2); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h4 class="header-title mb-3">Order Summary</h4>

            <div class="table-responsive">
                <table class="table mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Total</th>
                            <th>Discount</th>
                            <th>Final Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$<?php echo number_format($grandTotal, 2); ?></td>
                            <td><?php echo $order['order_discount']; ?> %</td>
                            <td>
                                <?php
                                $finalTotal = $grandTotal - ($grandTotal * ($order['order_discount'] / 100));
                                echo "$" . number_format($finalTotal, 2);
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } else {
            echo "<p>No order details found.</p>";
        } ?>
    </div>
</div>
<script>
    // Modal functionality
    function openOrderModal(orderId, userName, orderDate, orderTotal, orderStatus, orderDiscount) {
        // Open modal and populate with order data
        document.getElementById('viewModal').style.display = 'flex';
        // Add logic to populate modal fields if needed
    }

    function closeEditModal() {
        document.getElementById('viewModal').style.display = 'none';
    }
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
       
       <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
       <script>
       let table = new DataTable('#myTable', {
// options
});
</script>
