<?php
session_start();
include("includes/header.php");
include("includes/wishlistClass.php");

$wishlist = new Wishlist();
$user_id = $_SESSION['user_id'];

// Handle AJAX request to add product to wishlist
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_wishlist']) && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    if ($wishlist->addToWishlist($user_id, $product_id)) {
        echo json_encode(['success' => true, 'message' => 'Item added to wishlist!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Item already in wishlist.']);
    }
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
                            <div class="stock-status <?= htmlspecialchars($product['product_state']) === 'in stock' ? 'bg-green' : 'bg-red'; ?>">
                                <?= htmlspecialchars($product['product_state']); ?>
                            </div>
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

<script>
function deleteItem(wishlist_id) {
    if (confirm("Are you sure you want to delete this item?")) {
        fetch('delete_item.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'wishlist_id=' + wishlist_id
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Item deleted successfully.");
                location.reload();
            } else {
                alert("Failed to delete the item.");
            }
        })
        .catch(error => console.error('Error:', error));
    }
}
</script>
