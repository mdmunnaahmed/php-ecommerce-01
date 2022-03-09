<?php

include_once "admin/class/adminBack.php";
$obj = new adminBack();
$display_ctg = $obj->publishedDisplayCategory();
$ctg_datas = array();
while ($data = mysqli_fetch_assoc($display_ctg)) {
    $ctg_datas[] = $data;
}

?>

<?php include_once 'includes/head.php' ?>

<body class="biolife-body">
    <?php include_once "includes/header.php" ?>
    <?php include_once "includes/preloader.php" ?>


    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <?php include_once "includes/slider_main.php" ?>

            <?php include_once "includes/banner_slider.php" ?>

            <?php include_once "includes/home_related_products.php" ?>



            <!--Block 06: Products-->
            <div class="Product-box sm-margin-top-96px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">

                            <?php include_once "includes/deals_oftheday.php" ?>

                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6">

                            <?php include_once "includes/top_rated_products.php" ?>

                        </div>
                    </div>
                </div>
            </div>

            <?php include_once "includes/brands.php" ?>

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