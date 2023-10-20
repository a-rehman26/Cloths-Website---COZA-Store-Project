<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shoping Cart</title>
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


  <!-- breadcrumb -->
  <div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
      <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
        Home
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4"> Shoping Cart </span>
    </div>
  </div>

  <!-- Shoping Cart -->
  <form class="bg0 p-t-75 p-b-85">
    <div class="container">


      <?php
      include 'connection.php';


      if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        $subTotal = 0; // Initialize total cart value

      ?>

        <div class="row">
          <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
            <div class="m-l-25 m-r--38 m-lr-0-xl">
              <div class="wrap-table-shopping-cart">
                <table class="table-shopping-cart">
                  <tr class="table_head">
                    <th class="column-1">Product</th>
                    <th class="column-2"></th>
                    <th class="column-3">Price</th>
                    <th class="column-4">Quantity</th>
                    <th class="column-5">Total</th>
                  </tr>

                  <?php

                  // Fetch cart items for the logged-in user
                  $select_cart_items = mysqli_query($conn, "SELECT * FROM `cart_product` WHERE user_id = $user_id");

                  while ($row = mysqli_fetch_assoc($select_cart_items)) {

                    $price = $row['product_price']; // Replace this with the actual price from your database query

                    // Format the price with commas as a thousand separator
                    $formattedPrice = number_format($price, 0);

                    $productTotal = $row['product_price'] * $row['quantity'];
                    $subTotal += $productTotal;

                  ?>

                    <tr class="table_row">
                      <td class="column-1">
                        <div class="how-itemcart1">
                          <img src="Content/product_images/<?php echo $row['product_image'] ?>" alt="IMG" />
                        </div>
                      </td>
                      <td class="column-2"><?php echo $row['product_name'] ?></td>
                      <td class="column-3">RS: <?php echo $formattedPrice ?></td>
                      <input type="hidden" class="cart_price" name="" value="<?php echo $row['product_price'] ?>" id="">
                      <td class="column-4">

                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                          <input type="number" class="form-control cart_quantity" value="<?php echo $row['quantity'] ?>" min="1" max="4" name="new_quantity" onchange="cart_quantity()">
                        </div>

                      </td>
                      <td class="column-5 cart_total_price">RS: 0</td>
                    </tr>

                  <?php
                  }
                  ?>

                </table>
              </div>

              <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                <div class="flex-w flex-m m-r-20 m-tb-5">
                  <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code" />

                  <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5" onclick="coupon()">
                    Apply coupon
                  </div>
                </div>

                <button type="submit" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                  Update Cart
                </button>

              </div>
            </div>
          </div>

          <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
            <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
              <h4 class="mtext-109 cl2 p-b-30">Cart Totals</h4>

              <div class="flex-w flex-t bor12 p-b-13">
                <div class="size-208">
                  <span class="stext-110 cl2"> Subtotal: </span>
                </div>

                <div class="size-209">
                  <span class="mtext-110 cl2" id="cart_total"> RS: 0 </span>
                </div>
              </div>

              <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                <div class="size-208 w-full-ssm">
                  <span class="stext-110 cl2"> Shipping: </span>
                </div>

                <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                  <p class="stext-111 cl6 p-t-2">
                    There are no shipping methods available,
                    or contact us if you need any help.
                  </p>

                  <div class="p-t-15">

                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                      <select class="js-select2" name="time">
                        <option selected>PAKISTAN</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>

              <a href="checkout.php" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                Proceed to Checkout
              </a>

            </div>
          </div>
        </div>

      <?php
      }
      ?>

    </div>
  </form>

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
  <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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

  <!-- js price cart -->
  <script>
    let cartPrice = document.getElementsByClassName('cart_price');
    let cartQuantity = document.getElementsByClassName('cart_quantity');
    let cartTotal = document.getElementsByClassName('cart_total_price');
    let cartSubTotal = document.getElementById('cart_total');
    gTotal = 0;

    function cart_quantity() {
      gTotal = 0;

      for (i = 0; i < cartPrice.length; i++) {
        const price = parseFloat(cartPrice[i].value);
        const quantity = parseFloat(cartQuantity[i].value);
        const total = price * quantity;

        // Format the total price with "RS" currency symbol
        cartTotal[i].innerText = `RS: ${total.toLocaleString('en-IN')}`;

        gTotal += total;
      }

      // Format the subtotal with "RS" currency symbol
      cartSubTotal.innerText = `RS: ${gTotal.toLocaleString('en-IN')}`;
    }

    cart_quantity();

    function coupon() {
      alert("Not Available right Now")
    }
  </script>

</body>

</html>