<?php

include_once "admin/class/adminBack.php";
$obj = new adminBack();
$display_ctg = $obj->publishedDisplayCategory();
$ctg_datas = array();
while ($data = mysqli_fetch_assoc($display_ctg)) {
    $ctg_datas[] = $data;
}

if (isset($_GET['status'])) {
    $catID = $_GET['id'];
    if ($_GET['status'] == 'catView') {
        $pro_data = $obj->view_product_by_ctg($catID);
        $pros =  array();
        while ($pro_datas = mysqli_fetch_assoc($pro_data)) {
            $pros[] = $pro_datas;
        }
    }
}

if (isset($_GET['status'])) {
    $catID = $_GET['id'];
    if ($_GET['status'] == 'catView') {
        $ctg_data = $obj->view_ctg($catID);
    }
}


?>

<?php include_once 'includes/head.php' ?>

<body class="biolife-body">
    <?php include_once "includes/header.php" ?>
    <?php include_once "includes/preloader.php" ?>

    <div class="hero-section hero-background">
        <h1 class="page-title">Showing Result "
            <?php
            echo $ctg_data['ctg_name'];
            ?>
            "</h1>
    </div>

    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
            </ul>
        </nav>
    </div>

    <div class="product-tab z-index-20">
        <div class="container">
            <div class="biolife-tab biolife-tab-contain">
                <div class="tab-content">
                    <div id="tab01_1st" class="tab-contain active">
                        <div class="row">

                            <?php if ($_GET['id'] == $catID) { ?>
                                <?php foreach ($pros as $pro) { ?>

                                    <div class="product-item col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="single-product.php?status=singleProduct&&id=<?php echo $pro['product_id'] ?>" class="link-to-product">
                                                    <img src="admin/upload/<?php echo $pro['product_img'] ?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories"><?php echo $pro['ctg_name'] ?></b>
                                                <h4 class="product-title"><a href="single-product.php?status=singleProduct&&id=<?php echo $pro['product_id'] ?>" class="pr-name">
                                                        <?php echo $pro['product_name'] ?>
                                                    </a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span><?php echo $pro['product_price'] ?></span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">
                                                        <?php echo $pro['product_des'] ?>
                                                    </p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php }
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
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