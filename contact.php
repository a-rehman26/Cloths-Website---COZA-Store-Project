<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact</title>
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
</head>

<body class="animsition">

  <!-- header and navbar  -->
  <?php
  include 'navbar_header.php';
  ?>
  <!-- header and navbar  -->

  <!-- Title page -->
  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-color: #444;">
    <h2 class="ltext-105 cl0 txt-center">Contact</h2>
  </section>

  <!-- Content page -->
  <section class="bg0 p-t-104 p-b-116">
    <div class="container">
      <div class="flex-w flex-tr">
        <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
          <form method="post">
            <h4 class="mtext-105 cl2 txt-center p-b-30">Send Us A Message</h4>

            <div class="bor8 m-b-20 how-pos4-parent">
              <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email_contact" placeholder="Your Email Address" />
              <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON" />
            </div>

            <div class="bor8 m-b-30">
              <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg_contact" placeholder="How Can We Help?"></textarea>
            </div>

            <button type="submit" name="btn_contact" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
              Submit
            </button>
          </form>

          <?php
          include 'connection.php';

          if (isset($_POST['btn_contact'])) {

            // $user_id = $_SESSION['user_id'];

            $email_input_contact = $_POST['email_contact'];
            $msg_input_contact = $_POST['msg_contact'];

            $insert_query = mysqli_query($conn, " INSERT INTO `contact_form`( `email`, `msg`) VALUES ('$email_input_contact','$msg_input_contact') ");

            if ($insert_query) {
          ?>
              <script>
                alert("Contact Data Send");
              </script>
            <?php
            } else {
            ?>
              <script>
                alert("Contact Data Not Send");
              </script>
          <?php
            }
          }
          ?>

        </div>

        <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
          <div class="flex-w w-full p-b-42">
            <span class="fs-18 cl5 txt-center size-211">
              <span class="lnr lnr-map-marker"></span>
            </span>

            <div class="size-212 p-t-2">
              <span class="mtext-110 cl2"> Address </span>

              <p class="stext-115 cl6 size-213 p-t-18">
                Second Floor, Dolmen Mall, Tariq Road, Karachi
              </p>
            </div>
          </div>

          <div class="flex-w w-full p-b-42">
            <span class="fs-18 cl5 txt-center size-211">
              <span class="lnr lnr-phone-handset"></span>
            </span>

            <div class="size-212 p-t-2">
              <span class="mtext-110 cl2"> Lets Talk </span>

              <p class="stext-115 cl1 size-213 p-t-18">
                <a href="tel:+92 3158538681"> +92 3158538681</a>
              </p>
            </div>
          </div>

          <div class="flex-w w-full">
            <span class="fs-18 cl5 txt-center size-211">
              <span class="lnr lnr-envelope"></span>
            </span>

            <div class="size-212 p-t-2">
              <span class="mtext-110 cl2"> Sale Support </span>

              <p class="stext-115 cl1 size-213 p-t-18"><a href="mailto:a9889817@gmail.com">a9889817@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map -->
  <div class="map">
    <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
  <script src="js/map-custom.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>

</html>