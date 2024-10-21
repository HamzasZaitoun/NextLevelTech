<?php
include("includes/db_connection.php"); 
include("includes/header.php");

class Wishlist {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getProducts() {
        // $stmt = $this->pdo->prepare("SELECT product_name, unit_price, stock_status, image_url FROM products");
        // $stmt->execute();
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function displayProducts() {
        $products = $this->getProducts();

        // foreach ($products as $product) {
        //     echo '<tr>';
        //     echo '<td width="45%">' . $this->displayProductDetails($product) . '</td>';
        //     echo '<td width="15%" class="price">$' . $product['unit_price'] . '</td>';
        //     echo '<td width="15%"><span class="in-stock-box">' . $product['stock_status'] . '</span></td>';
        //     echo '<td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>';
        //     echo '<td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>';
        //     echo '</tr>';
        // }
    }

    private function displayProductDetails($product) {
        return '
            <div class="display-flex align-center">
                <div class="img-product">
                    <img src="' . $product['image_url'] . '" alt="Product Image">
                </div>
                <div class="name-product">' . $product['product_name'] . '</div>
            </div>';
    }
}

$wishlist = new Wishlist($pdo);
?>

<style>
    .cart-wrap {
        padding: 40px 0;
        font-family: 'Open Sans', sans-serif;
        background-color: #f9f9f9;
    }
    .main-heading {
        font-size: 22px;
        margin-bottom: 30px;
        color: #333;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
    }
    .table-wishlist table {
        width: 100%;
        background-color: #fff;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .table-wishlist thead {
        background-color: #8660e9;
        color: white;
    }
    .table-wishlist thead tr th {
        padding: 12px 0;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .table-wishlist tr td {
        padding: 20px 10px;
        vertical-align: middle;
        font-size: 14px;
        color: #333;
    }
    .table-wishlist tr {
        transition: all 0.3s ease;
    }
    /* .table-wishlist tr:hover {
        background-color: #f1f1f1;
    } */
    .img-product {
        width: 80px;
        margin-right: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        overflow: hidden;
    }
    .img-product img {
        width: 100%;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }
    .img-product img:hover {
        transform: scale(1.1);
    }
    .name-product {
        font-size: 16px;
        font-weight: 600;
        color: #444;
        width: 60%;
    }
    .price {
        font-weight: 700;
        color: #8660e9;
        font-size: 18px;
    }
    .in-stock-box {
        background-color: #28a745;
        font-size: 12px;
        text-align: center;
        border-radius: 25px;
        padding: 6px 15px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }
    .round-black-btn {
        border-radius: 25px;
        background-color: #212529;
        color: #fff;
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        transition: background 0.3s ease;
    }
    .round-black-btn:hover {
        background-color: #8660e9;
        color: #fff;
    }
    .trash-icon {
        font-size: 20px;
        color: #dc3545;
        transition: color 0.3s ease;
    }
    .trash-icon:hover {
        color: #bd2130;
    }
    .text-center {
        text-align: center;
    }
    .align-center {
        align-items: center;
    }
    .display-flex {
        display: flex;
    }
</style>

<div class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-heading mb-10">My wishlist</div>
                <div class="table-wishlist">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <thead>
                            <tr>
                                <th width="45%">Product Name</th>
                                <th width="15%">Unit Price</th>
                                <th width="15%">Stock Status</th>
                                <th width="15%"></th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $wishlist->displayProducts();
                            ?>
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
