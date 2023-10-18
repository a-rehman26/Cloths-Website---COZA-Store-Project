<?php

session_start();
include 'connection.php';

function generateTempCartID()
{
    return uniqid('temp_cart_id' . rand(), true);
}

if (isset($_POST['addTOcart'])) {

    $cart_p_name = mysqli_real_escape_string($conn, $_POST['cart_name']);
    $cart_p_price = mysqli_real_escape_string($conn, $_POST['cart_price']);
    $cart_p_image = mysqli_real_escape_string($conn, $_POST['cart_image']);
    $cart_p_quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $cart_p_id = mysqli_real_escape_string($conn, $_POST['cart_id']);

    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // For logged-in users, use their user ID as cart ID
        $user_id = $_SESSION['user_id'];
    } else {
        // For non-logged-in users, generate a temporary cart ID and set it in the session
        if (!isset($_SESSION['temp_cart_id'])) {
            $_SESSION['temp_cart_id'] = generateTempCartID();
        }
        $user_id = $_SESSION['temp_cart_id'];
    }

    // Check if the same product already exists in the user's cart
    $existingCartItemQuery = "SELECT * FROM cart_product WHERE user_id = '$user_id' AND product_id = '$cart_p_id'";
    $existingCartItemResult = mysqli_query($conn, $existingCartItemQuery);

    if (mysqli_num_rows($existingCartItemResult) > 0) {
?>
        <script>
            alert("This Product ALready Add in The Cart")

            location.replace('index.php');
        </script>
        <?php
    } else {

        // If it's a new product, insert it into the user's cart.
        $insertQuery = mysqli_query($conn, "INSERT INTO `cart_product`(`user_id`, `product_id`, `product_name`, `product_price`, `product_image`, `quantity`) VALUES ('$user_id','$cart_p_id','$cart_p_name','$cart_p_price','$cart_p_image','$cart_p_quantity')");

        if ($insertQuery) {
        ?>
            <script>
                alert("Product Add in The CART")

                location.replace('product.php')
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Product NOT Add in The CART")
            </script>
<?php
            echo "MySQL Error: " . mysqli_error($con);
        }
    }
}

// 

?>


<!--  -->