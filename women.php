<!DOCTYPE html>
<html lang="en">

<head>
  <title>Women's Products</title>
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


  <!-- Additional styling for pagination -->

  <style>
    /* Pagination Container */
    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    /* Pagination Links */
    .page-link {
      display: inline-block;
      padding: 5px 10px;
      margin: 5px;
      border: 1px solid #ccc;
      background-color: #f0f0f0;
      color: #333;
      text-decoration: none;
    }

    /* Active Page Link */
    .page-link.active {
      background-color: #333;
      color: #fff;
      border: 1px solid #333;
    }

    /* Hover Effect for Links */
    .page-link:hover {
      background-color: #ddd;
    }

    /* Next and Previous Links */
    .page-link.prev,
    .page-link.next {
      font-weight: bold;
    }

    /* Disabled Links */
    .page-link.disabled {
      pointer-events: none;
      color: #ccc;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
      .pagination {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>

</head>

<body class="animsition">

  <!-- header & navbar  -->
  <?php
  include 'navbar_header.php';
  ?>
  <!-- header & navbar  -->

  <!-- Product -->
  <div class="bg0 m-t-23 p-b-140" style="border-top: 1px solid lightgray;">
    <div class="container" style="margin-top: 25px;">
      <div class="flex-w flex-sb-m p-b-52">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">

          <!-- breadcrumb -->
          <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
              <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
              </a>

              <a href="" class="stext-109 cl8 hov-cl1 trans-04">
                Women's
                <!-- <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i> -->
              </a>

              <!-- <span class="stext-109 cl4"> <?php echo $fetch_product_detail['sp_name'] ?> </span> -->
            </div>
          </div>

          <!-- 
          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
            All Products
          </button> -->

          <!-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
            Women
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
            Men
          </button>

          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Accessories">
            Accessories
          </button> -->
        </div>

        <div class="flex-w flex-c-m m-tb-10">
          <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            Filter
          </div>

        </div>

        <!-- Filter -->
        <div class="dis-none panel-filter w-full p-t-10">
          <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
            <div class="filter-col1 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">Sort By</div>

              <ul>
                <!-- <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Default
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Popularity
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Average rating
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                    Newness
                  </a>
                </li> -->

                <li class="p-b-6">
                  <a href="women.php?sort=low_to_high" class="filter-link stext-106 trans-04">
                    Price: Low to High
                  </a>
                </li>
                <li class="p-b-6">
                  <a href="women.php?sort=high_to_low" class="filter-link stext-106 trans-04">
                    Price: High to Low
                  </a>
                </li>
                <li class="p-b-6">
                  <a href="women.php?sort=all" class="filter-link stext-106 trans-04">
                    Show All
                  </a>
                </li>

              </ul>
            </div>

            <!-- <div class="filter-col2 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">Price</div>

              <ul>
                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                    All
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $0.00 - $50.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $50.00 - $100.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $100.00 - $150.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $150.00 - $200.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $200.00+
                  </a>
                </li>
              </ul>
            </div>

            <div class="filter-col3 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">Color</div>

              <ul>
                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #222">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Black
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #4272d7">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                    Blue
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Grey
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Green
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #fa4251">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04"> Red </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #aaa">
                    <i class="zmdi zmdi-circle-o"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    White
                  </a>
                </li>
              </ul>
            </div>

            <div class="filter-col4 p-b-27">
              <div class="mtext-102 cl2 p-b-15">Tags</div>

              <div class="flex-w p-t-4 m-r--5">
                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Fashion
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Lifestyle
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Denim
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Streetstyle
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Crafts
                </a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <form action="add_to_cart_code.php" method="post">

        <div class="row isotope-grid justify-content-between">

          <!-- product #1  -->
          <?php
          include 'connection.php';

          // Default sorting option
          $sortOption = "all";  // Default to showing all products

          if (isset($_GET['sort'])) {
            $sortOption = $_GET['sort'];
          }

          // Define how many products to display per page
          $resultsPerPage = 12;

          // Determine the current page number
          if (!isset($_GET['page'])) {
            $currentPage = 1;
          } else {
            $currentPage = $_GET['page'];
          }

          // Calculate the starting point for fetching products
          $startingPoint = ($currentPage - 1) * $resultsPerPage;

          // Modify your SQL query based on the sorting option
          $query = "SELECT * FROM shop_product WHERE sp_category = 1";

          if ($sortOption === "low_to_high") {
            $query .= " ORDER BY CAST(sp_price AS DECIMAL) ASC";
          } elseif ($sortOption === "high_to_low") {
            $query .= " ORDER BY CAST(sp_price AS DECIMAL) DESC";
          }

          // Add LIMIT to the query for pagination
          $query .= " LIMIT $startingPoint, $resultsPerPage";

          $result = mysqli_query($conn, $query);

          while ($fetch_products = mysqli_fetch_assoc($result)) {

          ?>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item mens" data-price="<?php echo $fetch_products['sp_price']; ?>">
              <!-- Block2 -->
              <div class="block2">
                <div class="block2-pic hov-img0" style="border: 1px solid whitesmoke;">
                  <img src="Content/product_images/<?php echo $fetch_products['sp_image'] ?>" alt="IMG-PRODUCT" />

                  <a href="shop_products_detail.php?PRODUCTidSHOPDetail=<?php echo $fetch_products['sp_id'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                    Quick View
                  </a>

                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                  <div class="block2-txt-child1 flex-col-l">
                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                      <?php echo $fetch_products['sp_name'] ?>
                    </a>

                    <span class="stext-105 cl3"> RS:
                      <?php echo $fetch_products['sp_price'] ?>
                    </span>
                  </div>

                  <div class="block2-txt-child2 flex-r p-t-3">
                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                      <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON" />
                      <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON" />
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <input type="hidden" value="<?php echo $fetch_product_detail['sp_id'] ?>" name="cart_id" id="">
            <input type="hidden" name="cart_name" value="<?php echo $fetch_product_detail['sp_name'] ?>" id="">
            <input type="hidden" name="cart_price" value="<?php echo $fetch_product_detail['sp_price'] ?>" id="">
            <input type="hidden" name="cart_image" value="<?php echo $fetch_product_detail['sp_image'] ?>" id="">
            <input type="hidden" name="cart_quantity" value="" min="1">

            <input type="hidden" value="<?php echo $fetch_product_detail['sp_id'] ?>" name="cart_ID" id="">

          <?php
          }
          ?>

        </div>

      </form>

      <!-- Pagination -->
      <div class="pagination">
        <?php

        // Calculate the total number of pages
        // $totalProductsQuery = "SELECT COUNT(*) FROM shop_product";
        // $totalProductsResult = mysqli_query($conn, $totalProductsQuery);
        // $totalProducts = mysqli_fetch_row($totalProductsResult)[0];
        // $totalPages = ceil($totalProducts / $resultsPerPage);

        // Loop through and display pagination links
        // for ($i = 1; $i <= $totalPages; $i++) {
        //     $isActive = ($i == $currentPage) ? 'active' : '';
        //     echo '<a class="page-link ' . $isActive . '" href="product.php?page=' . $i . '">' . $i . '</a>';
        // }
        ?>
      </div>

    </div>
  </div>

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

</body>

</html>