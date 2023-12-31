<?php

session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Detail</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Content/logos_banners/web logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->

    <style>
        /* Style for the quantity input */
        input[name="quantity"] {
            width: 100%;
            /* Set the desired width */
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body class="animsition">

    <!-- header and navbar  -->
    <?php
    include 'navbar_header.php';
    ?>
    <!-- header and navbar  -->

    <?php
    if (isset($_GET['PRODUCTidSHOPDetail'])) {

        $product_id_detail = $_GET['PRODUCTidSHOPDetail'];

        $select_product_detail = mysqli_query($conn, "
        SELECT sp.*, c.c_name
        FROM shop_product sp
        LEFT JOIN categories c ON sp.sp_category = c.c_id
        WHERE sp.sp_id = '$product_id_detail'
        ");

        $fetch_product_detail = mysqli_fetch_assoc($select_product_detail);

    ?>

        <!-- breadcrumb -->
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                    Home
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                    <?php echo $fetch_product_detail['c_name'] ?>
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <span class="stext-109 cl4"> <?php echo $fetch_product_detail['sp_name'] ?> </span>
            </div>
        </div>

        <form action="add_to_cart_code.php" method="post">

            <!-- Product Detail -->
            <section class="sec-product-detail bg0 p-t-65 p-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-7 p-b-30">
                            <div class="p-l-25 p-r-30 p-lr-0-lg">
                                <div class="wrap-slick3 flex-sb flex-w">
                                    <div class="wrap-slick3-dots"></div>
                                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                    <div class="slick3 gallery-lb">
                                        <div class="item-slick3" data-thumb="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>" alt="IMG-PRODUCT" />

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item-slick3" data-thumb="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>" alt="IMG-PRODUCT" />

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item-slick3" data-thumb="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>" alt="IMG-PRODUCT" />

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="Content/product_images/<?php echo $fetch_product_detail['sp_image'] ?>">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5 p-b-30">
                            <div class="p-r-50 p-t-5 p-lr-0-lg">
                                <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                    <?php echo $fetch_product_detail['sp_name'] ?>
                                </h4>

                                <span class="mtext-106 cl2"> RS: <?php echo $fetch_product_detail['sp_price'] ?> </span>

                                <p class="stext-102 cl3 p-t-23">
                                    <?php echo $fetch_product_detail['sp_des'] ?>
                                </p>

                                <!--  -->
                                <div class="p-t-33">
                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-203 flex-c-m respon6">Size</div>

                                        <div class="size-204 respon6-next">
                                            <div class="rs1-select2 bor8 bg0">
                                                <select class="js-select2" name="time">
                                                    <option>Choose an option</option>
                                                    <option>Size S</option>
                                                    <option>Size M</option>
                                                    <option>Size L</option>
                                                    <option>Size XL</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-203 flex-c-m respon6">Color</div>

                                        <div class="size-204 respon6-next">
                                            <div class="rs1-select2 bor8 bg0">
                                                <select class="js-select2" name="time">
                                                    <option>Choose an option</option>
                                                    <option>Red</option>
                                                    <option>Blue</option>
                                                    <option>White</option>
                                                    <option>Grey</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class="size-204 flex-w flex-m respon6-next">

                                            <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                <input type="number" name="quantity" value="1" min="1" max="4" oninput="checkQuantity()">
                                            </div>

                                            <button type="submit" name="addTOcart" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                                Add to cart
                                            </button>

                                            <input type="hidden" value="<?php echo $fetch_product_detail['sp_id'] ?>" name="cart_id" id="">
                                            <input type="hidden" name="cart_name" value="<?php echo $fetch_product_detail['sp_name'] ?>" id="">
                                            <input type="hidden" name="cart_price" value="<?php echo $fetch_product_detail['sp_price'] ?>" id="">
                                            <input type="hidden" name="cart_image" value="<?php echo $fetch_product_detail['sp_image'] ?>" id="">
                                            <input type="hidden" name="cart_quantity" value="" min="1">

                                            <input type="hidden" value="<?php echo $fetch_product_detail['sp_id'] ?>" name="cart_ID" id="">


                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                    <div class="flex-m bor9 p-r-10 m-r-11">
                                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>

                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
                    <span class="stext-107 cl6 p-lr-25"> PRODUCT Code: <?php echo $fetch_product_detail['sp_id'] ?> </span>

                    <?php
                    if (isset($_GET['PRODUCTidSHOPDetail'])) {
                        $product_id = $_GET['PRODUCTidSHOPDetail'];

                        // Query to retrieve product details and category name
                        $select_product_detail = mysqli_query($conn, "
                    SELECT p.*, c.c_name 
                    FROM shop_product p
                    LEFT JOIN categories c ON p.sp_category = c.c_id
                    WHERE p.sp_id = $product_id");

                        if ($fetch_product_detail = mysqli_fetch_assoc($select_product_detail)) {
                    ?>

                            <span class="stext-107 cl6 p-lr-25"> Category: <?php echo $fetch_product_detail['c_name']; ?> </span>

                    <?php
                        }
                    }
                    ?>

                </div>
            </section>

        </form>

    <?php
    }
    ?>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- footer end -->


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next(".dropDownSelect2"),
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/parallax100/parallax100.js"></script>
    <script>
        $(".parallax100").parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $(".gallery-lb").each(function() {
            // the containers for all your galleries
            $(this).magnificPopup({
                delegate: "a", // the selector for gallery item
                type: "image",
                gallery: {
                    enabled: true,
                },
                mainClass: "mfp-fade",
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $(".js-addwish-b2, .js-addwish-detail").on("click", function(e) {
            e.preventDefault();
        });

        $(".js-addwish-b2").each(function() {
            var nameProduct = $(this).parent().parent().find(".js-name-b2").html();
            $(this).on("click", function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass("js-addedwish-b2");
                $(this).off("click");
            });
        });

        $(".js-addwish-detail").each(function() {
            var nameProduct = $(this)
                .parent()
                .parent()
                .parent()
                .find(".js-name-detail")
                .html();

            $(this).on("click", function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass("js-addedwish-detail");
                $(this).off("click");
            });
        });

        /*---------------------------------------------*/

        $(".js-addcart-detail").each(function() {
            var nameProduct = $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .find(".js-name-detail")
                .html();
            $(this).on("click", function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $(".js-pscroll").each(function() {
            $(this).css("position", "relative");
            $(this).css("overflow", "hidden");
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on("resize", function() {
                ps.update();
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script>
        function checkQuantity() {
            var quantityInput = document.querySelector('input[name="quantity"]');
            var selectedQuantity = parseInt(quantityInput.value);

            if (selectedQuantity > 4) {
                alert("You can select a maximum of 4 items.");
                quantityInput.value = 4; // Reset the quantity to 4
            }
        }
    </script>
</body>

</html>