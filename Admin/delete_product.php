<?php

include 'connection_dashboard.php';

if (isset($_GET['DELETEproduct'])) {
    $productId = $_GET['DELETEproduct'];

    // First, fetch the product information before deleting (optional but helpful)
    $selectProductQuery = mysqli_query($conn, "SELECT * FROM `products` WHERE p_id = $productId");
    $product = mysqli_fetch_assoc($selectProductQuery);

    // Delete the product from the database
    $deleteQuery = mysqli_query($conn, "DELETE FROM `products` WHERE p_id = $productId");

    if ($deleteQuery) {
?>
        <script>
            alert("product Removed SuccessFully");
            location.replace("index_dashboard.php");
        </script>
    <?php
    } else {
        // Error handling
        echo 'Error deleting the product: ' . mysqli_error($conn);
    ?>
        <script>
            location.replace("index_dashboard.php");
        </script>
<?php
    }
}
