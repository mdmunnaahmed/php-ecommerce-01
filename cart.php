<?php
session_start();
include_once "admin/class/adminBack.php";
$obj = new adminBack();
$display_pdt = $obj->publishedDisplayCategory();
$ctg_datas = array();
while ($data = mysqli_fetch_assoc($display_pdt)) {
    $ctg_datas[] = $data;
}

if (isset($_POST['add-to-cart'])) {
    if (isset($_SESSION['cart'])) {
        $products_name = array_column($_SESSION['cart'], 'product_name');
        if (in_array($_POST['product_name'], $products_name)) {
            echo "<script>
            alert('This product has already been add');
            </script>";
        } else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array(
                'product_name' => $_POST['product_name'],
                'product_img' => $_POST['product_img'],
                'product_price' => $_POST['product_price'],
                'qty' => 1,
            );
        }
    } else {
        $_SESSION['cart'][0] = array(
            'product_name' => $_POST['product_name'],
            'product_img' => $_POST['product_img'],
            'product_price' => $_POST['product_price'],
            'qty' => 1,
        );
    }
}

?>

<?php include_once 'includes/head.php' ?>


<body class="biolife-body">
    <?php include_once "includes/header.php" ?>
    <?php include_once "includes/preloader.php" ?>

    <div class="hero-section hero-background">
        <h1 class="page-title">""</h1>
    </div>

    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link"><?php ?></a></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!--Cart Table-->
            <div class="shopping-cart-container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="box-title">Your cart items</h3>
                        <form class="shopping-cart-form" action="#" method="post">
                            <table class="shop_table cart-form">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                                        <tr class="cart_item">
                                            <td class="product-thumbnail" data-title="Product Name">
                                                <a class="prd-thumb" href="#">
                                                    <figure><img width="113" height="113" src="admin/upload/<?php echo $value['product_img'] ?>" alt="shipping cart"></figure>
                                                </a>
                                                <a class="prd-name" href="#"><?php echo $value['product_name'] ?></a>
                                                <div class="action">
                                                    <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span><?php echo $value['product_price'] ?></span></ins>
                                                </div>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity-box type1">
                                                    <div class="qty-input">
                                                        <input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
                                                        <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                        <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span><?php echo $value['product_price'] ?></span></ins>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    <tr class="cart_item wrap-buttons">
                                        <td class="wrap-btn-control" colspan="4">
                                            <a class="btn back-to-shop">Back to Shop</a>
                                            <button class="btn btn-update" type="submit" disabled>update</button>
                                            <button class="btn btn-clear" type="reset">clear all</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="shpcart-subtotal-block">
                            <div class="subtotal-line">
                                <b class="stt-name">Subtotal <span class="sub">(2ittems)</span></b>
                                <span class="stt-price">£170.00</span>
                            </div>
                            <div class="subtotal-line">
                                <b class="stt-name">Shipping</b>
                                <span class="stt-price">£0.00</span>
                            </div>
                            <div class="tax-fee">
                                <p class="title">Est. Taxes & Fees</p>
                                <p class="desc">Based on 56789</p>
                            </div>
                            <div class="btn-checkout">
                                <a href="#" class="btn checkout">Check out</a>
                            </div>
                            <div class="biolife-progress-bar">
                                <table>
                                    <tr>
                                        <td class="first-position">
                                            <span class="index">$0</span>
                                        </td>
                                        <td class="mid-position">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="last-position">
                                            <span class="index">$99</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping and pickup</p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>



    <?php include_once "includes/footer.php" ?>

    <?php include_once "includes/mobile_global_block.php" ?>


    <?php include_once "includes/quick_overview_popup.php" ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>


    <?php include_once "includes/scripts.php" ?>

</body>

</html>