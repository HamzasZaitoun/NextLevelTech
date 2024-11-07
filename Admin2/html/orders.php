<?php
include("includes/header.php");
include "model/Orders.php";
$orders = new Order();
$allOrders = $orders->getAllOrders();
<<<<<<< HEAD

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
=======
?>
<style>
      .save-btn-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    
  }

  .modal-content {
  width: 30%;
  }
</style>
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<<<<<<< HEAD
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
=======
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
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
<<<<<<< HEAD
    <!-- ============================================================== -->
=======
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
    <div class="container-fluid">
        <!-- Start Page Content -->
        <h2 class="h2">Orders Dashboard</h2>
        <div class="row">
<<<<<<< HEAD
            <table class="table tb table-hover">
=======
            <table class="table tb table-hover" id="myTable">
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
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
<<<<<<< HEAD
                            <td data-label="Order Status"><?php echo htmlspecialchars($order['order_status']); ?></td>
=======
                            <td data-label="Order Status" id="status-<?php echo htmlspecialchars($order['order_id']); ?>">
                                <?php echo htmlspecialchars($order['order_status']); ?>
                            </td>
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
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
<<<<<<< HEAD
                                   <i class="bi bi-eye"></i>
=======
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="edit-status-btn edit-btn "
                                        onclick="openEditStatusModal(
                                            '<?php echo htmlspecialchars($order['order_id']); ?>',
                                            '<?php echo htmlspecialchars($order['order_status']); ?>'
                                        )">
                                    <i class="bi bi-pencil-square"></i>
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
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
<<<<<<< HEAD
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
=======
            <div>
                <p><strong>Order ID:</strong> <span id="modalOrderId"></span></p>
                <p><strong>User Name:</strong> <span id="modalUserName"></span></p>
                <p><strong>Order Date:</strong> <span id="modalOrderDate"></span></p>
                <p><strong>Order Total:</strong> <span id="modalOrderTotal"></span></p>
                <p><strong>Order Status:</strong> <span id="modalOrderStatus"></span></p>
                <p><strong>Order Discount:</strong> <span id="modalOrderDiscount"></span></p>
            </div>
            <div id="orderDetailsContainer">
                <!-- Order details will be populated here via JavaScript -->
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
            </div>
            <button class="close-btn" onclick="closeEditModal()">Close</button>
        </div>
    </div>
<<<<<<< HEAD
=======

    <!-- Edit Status Modal -->
    <div class="modal" id="editStatusModal">
        <div class="modal-content">
            <button class="close-btn" onclick="closeEditStatusModal()">X</button>
            <h3>Edit Order Status</h3>
            <form id="editStatusForm">
                <input type="hidden" id="editOrderId" name="order_id">
                <label for="orderStatus">Order Status:</label>
                <select id="editOrderStatus" name="order_status">
                    <option value="Pending">Pending</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="delivered">delivered</option>
                 
                </select>
                <br><br>
                <div class="save-btn-container">
                <button type="submit" class="save-btn">Save</button>    
                </div>
                
            </form>
        </div>
    </div>

>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
</div>

<script>
    function openOrderModal(orderId, userName, orderDate, orderTotal, orderStatus, orderDiscount) {
<<<<<<< HEAD
        // Show the modal
        showModal("viewModal");

        // Populate modal fields with order details
=======
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
        document.getElementById("modalOrderId").textContent = orderId;
        document.getElementById("modalUserName").textContent = userName;
        document.getElementById("modalOrderDate").textContent = orderDate;
        document.getElementById("modalOrderTotal").textContent = "$" + orderTotal;
        document.getElementById("modalOrderStatus").textContent = orderStatus;
        document.getElementById("modalOrderDiscount").textContent = orderDiscount + "%";
<<<<<<< HEAD
    }

    
=======

        showModal("viewModal", orderId);
    }

    function openEditStatusModal(orderId, currentStatus) {
    document.getElementById('editOrderId').value = orderId;
    document.getElementById('editOrderStatus').value = currentStatus;
    showModal("editStatusModal");
}


    function showModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function closeEditModal() {
        document.getElementById('viewModal').style.display = 'none';
    }

    function closeEditStatusModal() {
        document.getElementById('editStatusModal').style.display = 'none';
    }

    // Handle form submission for updating order status
    document.getElementById('editStatusForm').addEventListener('submit', function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    fetch('process/update_order_status.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const orderId = formData.get('order_id');
        const newStatus = formData.get('order_status');

        // Close the modal first
        closeEditStatusModal();

        if (data.success) {
            // Update status on the page
            document.getElementById('status-' + orderId).textContent = newStatus;

            // Show success SweetAlert
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Order status has been updated successfully.',
                confirmButtonText: 'OK'
            });
        } else {
            // Show error SweetAlert
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message || 'Failed to update order status.',
                confirmButtonText: 'Try Again'
            });
        }
    })
    .catch(error => {
        // Close the modal first
        closeEditStatusModal();

        // Show SweetAlert for fetch error
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred while updating the order status.',
            confirmButtonText: 'OK'
        });
    });
});


>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
</script>

<?php
include("includes/footer.php");
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 50f529a02c920b0beb6c96ebb0d0c3cdf02f72ac
