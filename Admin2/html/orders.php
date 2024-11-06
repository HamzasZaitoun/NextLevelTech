<?php
include("includes/header.php");
include "model/Orders.php";
$orders = new Order();
$allOrders = $orders->getAllOrders();

$orderDetails = []; // Initialize the orderDetails array
$orderDetailsError = ""; // Initialize error message
// Check if an order ID is provided for fetching details
if (isset($_GET['order_id']) && !empty($_GET['order_id'])) {
    $orderId = intval($_GET['order_id']); // Ensure the order ID is an integer
    $orderDetails = $orders->viewOrderDetails($orderId); // Fetch order details
}
    if ($orderDetails === false || empty($orderDetails)) {
        $orderDetailsError = "Error retrieving order details.";
    }
?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <h2 class="h2">Orders Dashboard</h2>
        <div class="row">
            <table class="table tb table-hover">
                <thead class="t-head">
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
                                   <i class="bi bi-eye"></i>
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
<!-- View Modal -->
<div class="modal" id="viewModal">
    <div class="modal-content">
        <button class="close-btn" onclick="closeEditModal()">X</button>
        <h3>Order Details</h3>
        <div id="orderDetailsContainer">
            <?php if ($orderDetailsError): ?>
                <p><?php echo htmlspecialchars($orderDetailsError); ?></p>
            <?php elseif (!empty($orderDetails)): 
                $grandTotal = 0; // Initialize grand total for the order
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
                                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                                        <td><?php echo htmlspecialchars($item['product_quantity']); ?></td>
                                        <td>$<?php echo number_format($item['price'], 2); ?></td>
                                        <td>$<?php echo number_format($itemTotal, 2); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="3" class="text-right"><strong>Grand Total</strong></td>
                                        <td>$<?php echo number_format($grandTotal, 2); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <p>No order details available.</p>
            <?php endif; ?>
        </div>
        <button class="close-btn" onclick="closeEditModal()">Close</button>
    </div>
</div>
<script>
    function fetchOrderDetails(orderId) {
        fetch('fetch_order_details.php?order_id=' + orderId)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('orderDetailsContainer');
                container.innerHTML = ''; // Clear previous content

                if (data.success) {
                    let tableHTML = `
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
                                <tbody>`;
                    
                    let grandTotal = 0;

                    data.orderDetails.forEach(item => {
                        const itemTotal = item.price * item.product_quantity;
                        grandTotal += itemTotal;

                        tableHTML += `
                            <tr>
                                <td>${item.product_name}</td>
                                <td>${item.product_quantity}</td>
                                <td>$${item.price.toFixed(2)}</td>
                                <td>$${itemTotal.toFixed(2)}</td>
                            </tr>`;
                    });

                    tableHTML += `
                        <tr>
                            <td colspan="3" class="text-right"><strong>Grand Total</strong></td>
                            <td>$${grandTotal.toFixed(2)}</td>
                        </tr>
                    </tbody>
                    </table>
                    </div>`;

                    container.innerHTML = tableHTML;
                } else {
                    container.innerHTML = `<p>${data.message}</p>`;
                }
            })
            .catch(error => {
                const container = document.getElementById('orderDetailsContainer');
                container.innerHTML = `<p>Error fetching order details.</p>`;
            });
    }
    function openOrderModal(orderId, userName, orderDate, orderTotal, orderStatus, orderDiscount) {
    // Show the modal
    showModal("viewModal");

    // Populate modal fields with order details
    document.getElementById("modalOrderId").textContent = orderId;
    document.getElementById("modalUserName").textContent = userName;
    document.getElementById("modalOrderDate").textContent = orderDate;
    document.getElementById("modalOrderTotal").textContent = orderTotal;
    document.getElementById("modalOrderStatus").textContent = orderStatus;
    document.getElementById("modalOrderDiscount").textContent = orderDiscount;
}

</script>
<?php
include("includes/footer.php");
?>