<?php 
session_start();
include "includes/header.php";
require_once 'model/Product.php';
require_once 'model/Category.php';
$productModel = new Product();
$products = $productModel->getAllProducts();
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
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
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
        <h2 class="h2">Products Dashboard</h2>
        <button class="add-btn" onclick="openAddModal()">Add product <i class="bi bi-plus-circle"></i></button>
        <div class="row">
            <table class="table tb table-hover">
                <thead class="t-head">
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Image</th>
                        <th>Product Category</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Product State</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td data-label="Product Id"><?= htmlspecialchars($product['product_id']) ?></td>
                        <td data-label="Product Name"><?= htmlspecialchars($product['product_name']) ?></td>
                        <td data-label="Description"><?= htmlspecialchars($product['product_description']) ?></td>
                        <td data-label="Image">
                            <img src="../inserted_img/<?= $product['product_picture'] ?>" alt="Product Image" width="50" style="border-radius:10%;">
                        </td>
                        <td data-label="Category"><?= htmlspecialchars($product['product_category']) ?></td>
                        <td data-label="Quantity"><?= htmlspecialchars($product['product_quantity']) ?></td>
                        <td data-label="Price"><?= htmlspecialchars($product['product_price']) ?></td>
                        <td data-label="Status"><?= $product['product_state'] ?></td>
                        <td data-label="Actions">
                            <div class="action-buttons">
                                <button class="edit-btn" onclick="document.getElementById('editModal<?= $product['product_id'] ?>').style.display='flex'"><i class="bi bi-pencil-square"></i></button>
                                <form action="process/process_product.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['product_id']); ?>">
                                    <input type="hidden" name="action" value="delete">
                                    <button type="button" class="delete-btn" onclick="confirmDelete(this)"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Edit Modal for each product -->
<div id="editModal<?= $product['product_id'] ?>" class="modal">
    <div class="modal-content">
        <button class="close-btn delete-btn" onclick="hideModal('editModal<?= $product['product_id'] ?>')">X</button>
        <h3>Edit Product</h3>
        <form id="editForm" enctype="multipart/form-data" method="POST" action="process/process_product.php">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
            <input type="hidden" name="oldImage" value="<?= $product['product_picture'] ?>">

            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" name="newProductName" value="<?= htmlspecialchars($product['product_name']) ?>" required>
            </div>

            <div class="form-group">
                <label for="productDescription">Product Description:</label>
                <input type="text" name="newProductDescription" value="<?= htmlspecialchars($product['product_description']) ?>" required>
            </div>

            <div class="form-group">
                <label for="productImage">Old Product Image:</label><br>
                <img src="../inserted_img/<?= $product['product_picture'] ?>" alt="Old Product Image" class="old-product-image">
            </div>

            <div class="form-group">
                <label for="productImage">New Product Image:</label><br>
                <input type="file" name="newProductImage" accept="image/*">
            </div>

            <div class="form-group">
                <label for="productCategory">Product Category:</label>
                <select name="newProductCategory" required>
                    <?php
                        $categoryModel = new Category();
                        $categories = $categoryModel->getAllCategories();
                        foreach ($categories as $category) {
                            $selected = ($category['category_id'] == $product['category_id']) ? 'selected' : '';
                            echo "<option value=\"{$category['category_id']}\" $selected>{$category['category_name']}</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="productQuantity">Product Quantity:</label>
                <input type="number" name="newProductQuantity" value="<?= htmlspecialchars($product['product_quantity']) ?>" required>
            </div>

            <div class="form-group">
                <label for="productPrice">Product Price:</label>
                <input type="number" name="newProductPrice" value="<?= htmlspecialchars($product['product_price']) ?>" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="productStatus">Product Status:</label>
                <select name="newProductStatus" required>
                    <option value="inStock" <?= ($product['product_state'] ) ? 'selected' : ''; ?>>In Stock</option>
                    <option value="outOfStock" <?= ($product['product_state']) ?>>Out of Stock</option>
                </select>
            </div>

            <button class="save-btn" type="submit">Save</button>
        </form>
    </div>
</div>

<!-- Add Modal -->
<div id="addModal" class="modal">
    <div class="modal-content">
        <button class="close-btn delete-btn" onclick="closeAddModal()">X</button>
        <h3>Add Product</h3>
        <form id="addForm" enctype="multipart/form-data" method="POST" action="process/process_product.php">
            <input type="hidden" name="action" value="create">

            <div class="form-group">
                <label for="newProductName">Product Name:</label>
                <input type="text" id="newProductName" name="newProductName" required>
            </div>

            <div class="form-group">
                <label for="newProductDescription">Product Description:</label>
                <input type="text" id="newProductDescription" name="newProductDescription" required>
            </div>

            <div class="form-group">
                <label for="newProductImage">Product Image:</label>
                <input type="file" id="newProductImage" name="newProductImage" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="newProductCategory">Product Category:</label>
                <select id="newProductCategory" name="newProductCategory" required>
                    <?php
                        $categoryModel = new Category();
                        $categories = $categoryModel->getAllCategories();
                        foreach ($categories as $category) {
                            echo "<option value=\"{$category['category_id']}\">{$category['category_name']}</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="newProductQuantity">Product Quantity:</label>
                <input type="number" id="newProductQuantity" name="newProductQuantity" required>
            </div>

            <div class="form-group">
                <label for="newProductPrice">Product Price:</label>
                <input type="number" id="newProductPrice" name="newProductPrice" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="newProductStatus">Product Status:</label>
                <select id="newProductStatus" name="newProductStatus" required>
                    <option value="1">In Stock</option>
                    <option value="0">Out of Stock</option>
                </select>
            </div>

            <button class="save-btn" type="submit">Add Product</button>
        </form>
    </div>
</div>

</div>
<!-- End of container-fluid and page-wrapper divs -->


<?php 
include "includes/footer.php"; 
?>
