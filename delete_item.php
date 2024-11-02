<?php
require_once("includes/wishlistClass.php");

if (isset($_POST['wishlist_id'])) {
    $wishlist_id = $_POST['wishlist_id'];
    $wishlist = new Wishlist();

    if ($wishlist->softDeleteItem($wishlist_id)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

?>