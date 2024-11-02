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

<div class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-heading mb-10">My Wishlist</div>
                <div class="table-wishlist">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <thead>
                            <tr>
                                <th width="15%">Product Name</th>
                                <th width="15%">Product Price</th>
                                <th width="15%">Stock Status</th>
                                <th width="30%">Product Image</th>
                                <th width="15%"></th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($wishlistItems)) : ?>
                                <?php foreach ($wishlistItems as $product) : ?>
                                    <tr>
                                        <td><?= htmlspecialchars($product['product_name']); ?></td>
                                        <td class="price"><?= htmlspecialchars($product['product_price']); ?> JOD</td>
                                        <td><span class="in-stock-box <?= htmlspecialchars($product['product_state']) === 'in stock' ? 'bg-green' : 'bg-red'; ?>">
                                            <?= htmlspecialchars($product['product_state']); ?>
                                            </span>
                                        </td>
                                        <?php $imagePath = "inserted_img/" . htmlspecialchars($product['product_picture'] ?? 'default.png'); ?>
                                        <td><img src="<?= $imagePath; ?>" alt="Product Image"  class="category-image"></td>
                                        <td><button class="round-black-btn small-btn">Add to Cart</button></td>
                                        <td class="text-center">
                                            <a href="#" class="trash-icon" onclick="deleteItem(<?= $product['wishlist_id']; ?>)">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center">No items in your wishlist</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
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