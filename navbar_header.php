<?php
include 'link.php';
?>

<div class="custoM" style="margin: 0 0 85px 0;">
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar" style="z-index: 999;position: relative;">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="right-top-bar flex-w h-full">

                        <?php
                        if (isset($_SESSION['user_name'])) {
                        ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa-solid fa-user mr-2"></i>
                                    <?php echo $_SESSION['user_name']; ?>
                                </a>
                                <div class="dropdown-menu mt-0">
                                    <a href="my_profile.php" style="cursor: pointer; color: black;" class="dropdown-item">My Profile</a>
                                    <a href="logout.php" style="cursor: pointer; color: black;" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <a href="" class="flex-c-m trans-04 p-lr-25 js-show-modal1">
                                <i class="fa-solid fa-user mr-2"></i>
                                My Account
                            </a>
                        <?php
                        }
                        ?>

                        <a href="" class="flex-c-m trans-04 p-lr-25"> Help & FAQs </a>

                        <a href="" class="flex-c-m trans-04 p-lr-25"> EN </a>

                        <a href="" class="flex-c-m trans-04 p-lr-25"> PKR </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop" style="z-index: 1;">
                <nav class="limiter-menu-desktop container">
                    <!-- Logo desktop -->
                    <a href="index.php" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO" />
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="">
                                <a href="index.php">Home</a>
                            </li>

                            <li>
                                <a href="product.php">Shop</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="">Features</a>
                                <ul class="sub-menu">
                                    <li><a href="women.php">Women's</a></li>
                                    <li><a href="men.php">Men's</a></li>
                                    <li><a href="cap.php">Cap's</a></li>
                                    <li><a href="perfume.php">Fragrance's</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="blog.php">Blog</a>
                            </li>

                            <li>
                                <a href="about.php">About</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="
                        
                        
                    <?php
                    include 'connection.php';

                    // Check if the user is logged in
                    if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];

                        // Fetch the cart item count for the logged-in user
                        $select_data_products = mysqli_query($conn, "SELECT * FROM `cart_product` WHERE user_id = $user_id");
                        $cartItemCount = mysqli_num_rows($select_data_products);

                        echo $cartItemCount;
                    } else {

                        if (isset($_SESSION['temp_cart_id'])) {

                            $temp_cart_id = $_SESSION['temp_cart_id'];

                            $select_temp_cart_items = mysqli_query($conn, " SELECT * FROM `cart_product` WHERE user_id = '$temp_cart_id' ");

                            $cart_rows_nav_tem = mysqli_num_rows($select_temp_cart_items);

                            echo $cart_rows_nav_tem;
                        } else {
                            echo "0";
                        }
                    }

                    ?>

                        ">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>

                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO" /></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="0">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="" class="flex-c-m p-lr-10 trans-04"> Help & FAQs </a>

                        <a href="" class="flex-c-m p-lr-10 trans-04"> My Account </a>

                        <a href="" class="flex-c-m p-lr-10 trans-04"> EN </a>

                        <a href="" class="flex-c-m p-lr-10 trans-04"> USD </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.php">Home</a>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="product.php">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.php">Blog</a>
                </li>

                <li>
                    <a href="about.php">About</a>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="images/icons/icon-close2.png" alt="CLOSE" />
                </button>

                <form class="wrap-search-header flex-w p-l-15" action="search_product.php" method="get">
                    <button class="flex-c-m trans-04" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search_input" placeholder="Search Products..." />
                </form>

            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2"> Your Cart </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <?php
            include 'connection.php';

            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                $subTotal = 0; // Initialize total cart value

                // Fetch cart items for the logged-in user
                $select_cart_items = mysqli_query($conn, "SELECT * FROM `cart_product` WHERE user_id = $user_id");

                while ($row = mysqli_fetch_assoc($select_cart_items)) {

                    $price = $row['product_price']; // Replace this with the actual price from your database query

                    // Format the price with commas as a thousand separator
                    $formattedPrice = number_format($price, 0);

                    $productTotal = $row['product_price'] * $row['quantity'];
                    $subTotal += $productTotal;

            ?>

                    <div class="header-cart-content flex-w js-pscroll">
                        <ul class="header-cart-wrapitem w-full">

                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">
                                    <img src="Content/product_images/<?php echo $row['product_image'] ?>" alt="IMG" />
                                </div>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        <?php echo $row['product_name'] ?>
                                    </a>

                                    <span class="header-cart-item-info"> [ <?php echo $row['quantity'] ?> ] RS:
                                        <!-- echo 'RS: ' .  -->
                                        <?php echo $formattedPrice; ?> </span>
                                </div>
                            </li>

                        </ul>

                    </div>

            <?php
                }
            }

            ?>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">Total: <?php echo 'RS: ' . number_format($subTotal, 0); ?></div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="js/main.js"></script>

<!-- modal sign & login form  -->

<div class="centerForm">
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>

        <div class="container" style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;">

            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent" style=" 
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid gray;
        width: 500px;
        border-radius: 15px;
        padding: 10px 15px;
        ">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE" />
                </button>

                <div class="wrapper">
                    <div class="title-text">
                        <div class="title login">Login Form</div>
                        <div class="title signup">Signup Form</div>
                    </div>
                    <div class="form-container">
                        <div class="slide-controls">
                            <input type="radio" name="slide" id="login" checked>
                            <input type="radio" name="slide" id="signup">
                            <label for="login" class="slide login">Login</label>
                            <label for="signup" class="slide signup">Signup</label>
                            <div class="slider-tab"></div>
                        </div>
                        <div class="form-inner">

                            <form action="" name="loginForm" class="login" method="post">

                                <div class="field">
                                    <input type="text" placeholder="Email Address" name="email_input_login" required>
                                </div>

                                <div class="field">
                                    <input type="password" placeholder="Password" id="PASSWORDinput" name="pass_input_login" required>
                                    <div class="eyePassword" style="
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    align-items: center;
                                    height: 100%;
                                    margin: 0 15px;
                                    cursor: pointer;" onclick="showPassword()">
                                        <i class="fa-solid fa-eye" id="openEye"></i>
                                        <i class="fa-solid fa-eye-slash" id="closeEye" style="display: none;"></i>
                                    </div>
                                </div>

                                <div class="pass-link"><a href="">Forgot password?</a></div>

                                <div class="field btn">
                                    <div class="btn-layer"></div>
                                    <input type="submit" value="Login" name="btnLogin">
                                </div>

                                <div class="signup-link">Not a member? <a href="">Signup now</a></div>

                            </form>

                            <!-- user login php  start -->
                            <?php
                            include 'connection.php';

                            if (isset($_POST['btnLogin'])) {

                                $email_input_LOGIN = $_POST['email_input_login'];
                                $pass_input_LOGIN = $_POST['pass_input_login'];

                                $checkUserQuery = mysqli_query($conn, "SELECT * FROM employee WHERE u_email = '$email_input_LOGIN' ");

                                if (mysqli_num_rows($checkUserQuery)) {

                                    $row = mysqli_fetch_assoc($checkUserQuery);

                                    $stored_user_name = $row['u_name'];
                                    $_SESSION['user_name'] = $stored_user_name;

                                    $stored_user_email = $row['u_email'];
                                    $stored_pass = $row['u_pass'];

                                    if ($stored_user_email == $email_input_LOGIN && $stored_pass == $pass_input_LOGIN) {

                                        $_SESSION['user_id'] = $row['u_id'];
                                        $_SESSION['user_name'] = $row['u_name'];

                                        $email_fetch = $row['u_email'];
                                        $username_fetch = $row['u_name'];
                                        $role_fetch = $row['role'];

                                        $_SESSION['loginRole'] = $role_fetch;
                                        $_SESSION['loginUserName'] = $username_fetch;

                            ?>
                                        <script>
                                            alert("Login successful")
                                            location.replace("index.php");
                                        </script>
                                    <?php
                                    } else {
                                    ?>
                                        <script>
                                            alert("Incorrect password")
                                        </script>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <script>
                                        alert("Email incorrect (user not found) ")
                                    </script>
                            <?php
                                }
                            }

                            ?>

                            <!-- user login php  end -->

                            <form action="" name="signupForm" class="signup" method="post">

                                <div class="field">
                                    <input type="text" placeholder="UserName" name="username_input" pattern="^[a-zA-Z0-9 ]+" required autocomplete="on" />
                                </div>

                                <div class="field">
                                    <input type="text" placeholder="Email Address" name="email_input" required autocomplete="on" />
                                </div>

                                <div class="field">
                                    <input type="password" placeholder="Password" name="pass_input" required autocomplete="on" />
                                </div>

                                <div class="field">
                                    <input type="password" placeholder="Confirm password" name="cPass_input" required autocomplete="on" />
                                </div>

                                <div class="field btn">
                                    <div class="btn-layer"></div>
                                    <input type="submit" value="Signup" name="btnSIGNUP" />
                                </div>

                            </form>


                            <!-- user registration start php -->

                            <?php
                            include 'connection.php';

                            if (isset($_POST['btnSIGNUP'])) {

                                $user_input = mysqli_real_escape_string($conn, $_POST['username_input']);
                                $email_input = $_POST['email_input'];
                                $pass_input = $_POST['pass_input'];
                                $cPass_input = $_POST['cPass_input'];

                                // Validation checks
                                $errors = [];

                                // Check if the email is already registered
                                $checkEmailQuery = mysqli_query($conn, "SELECT * FROM employee WHERE u_email = '$email_input' ");

                                if (mysqli_num_rows($checkEmailQuery) > 0) {
                            ?>
                                    <script>
                                        alert("Email is already registered ... ");
                                    </script>
                                    <?php
                                } else {

                                    if ($pass_input === $cPass_input) {

                                        // Hash the password before storing it in the database
                                        // $hashedPassword = password_hash($pass_input, PASSWORD_DEFAULT);
                                        // $hashed_c_Password = password_hash($cPass_input, PASSWORD_DEFAULT);

                                        // Insert user data into the database
                                        $insertQuery = mysqli_query($conn, "INSERT INTO employee (u_name, u_email, u_pass, u_c_pass) VALUES ('$user_input', '$email_input', '$pass_input', '$cPass_input')");

                                        if ($insertQuery) {
                                    ?>
                                            <script>
                                                alert("Registration successful..!");
                                            </script>
                                        <?php
                                        } else {
                                        ?>
                                            <script>
                                                alert("Error: <?php echo mysqli_error($conn); ?>");
                                            </script>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <script>
                                            alert("Passwords & Confirm Password do not match.")
                                        </script>
                            <?php
                                    }
                                }
                            }

                            ?>

                            <!-- user registration end php -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });

    // eye password validate 

    function showPassword() {
        let pass_input = document.getElementById("PASSWORDinput");

        let close_eye = document.getElementById("closeEye");
        let open_eye = document.getElementById("openEye");

        if (pass_input.type === "password") {
            pass_input.type = "type";
            open_eye.style.display = "none";
            close_eye.style.display = "block";
            close_eye.style.color = "red";

        } else {
            pass_input.type = "password";
            open_eye.style.display = "block";
            close_eye.style.display = "none";
            close_eye.style.color = "red";
        }
    }
</script>