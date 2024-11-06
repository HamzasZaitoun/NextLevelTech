<?php

session_start();
include("includes/header.php");
include("includes/wishlistClass.php");

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User is not logged in']);
    exit;
}

$user_id = $_SESSION['user_id'];
$wishlist = new Wishlist();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_wishlist']) && isset($_POST['product_id'])) {
    $product_id = (int) $_POST['product_id']; // Sanitizing input

    // Call the addToWishlist method
    $response = $wishlist->addToWishlist($user_id, $product_id);

    // Return the response as JSON
    echo json_encode($response);
    exit;
}

// Retrieve wishlist items
$wishlistItems = $wishlist->getAllProductsFromWishlist($user_id);
?>

<link rel="stylesheet" href="assets/css/wishlist.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="wishlist-wrap">
    <div class="container">
        <div class="main-heading">My Wishlist</div>
        <div class="wishlist-grid">
            <?php if (!empty($wishlistItems)) : ?>
                <?php foreach ($wishlistItems as $product) : ?>
                    <div class="wishlist-item">
                        <div class="product-image">
                            <?php $imagePath = "inserted_img/" . htmlspecialchars($product['product_picture'] ?? 'default.png'); ?>
                            <img src="<?= $imagePath; ?>" alt="Product Image" class="image">
                        </div>
                        <div class="wishlist-info">
                            <div class="product-name"><?= htmlspecialchars($product['product_name']); ?></div>
                            <div class="product-price"><?= htmlspecialchars($product['product_price']); ?> JOD</div>

                        </div>
                        <div class="wishlist-actions">
                            <button class="round-black-btn">Add to Cart</button>
                            <a href="#" class="trash-icon" onclick="deleteItem(<?= $product['wishlist_id']; ?>)">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="wishlist-empty">No items in your wishlist</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function deleteItem(wishlist_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you really want to delete this item?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('delete_item.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'wishlist_id=' + wishlist_id
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire(
                        'Deleted!',
                        'The item has been deleted.',
                        'success'
                    ).then(() => location.reload());
                } else {
                    Swal.fire('Error', 'Failed to delete the item.', 'error');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
}

</script>
