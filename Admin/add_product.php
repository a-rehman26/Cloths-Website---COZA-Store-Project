<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add Products</h6>

                <form action="" method="post" enctype="multipart/form-data">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Product Name" name="p_name" required pattern="[a-zA-Z0-9\s-]+">

                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Product Price" name="p_price" required pattern="\d+(\.\,\d{2})?">

                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Product Description" name="p_des" pattern="[\s\S]*" required>

                    <input class="form-control form-control-lg mb-3" type="file" name="p_image" accept="image/*" required>

                    <select class="form-control form-control-lg mb-3" name="product_category" required>
                        <option value="" disabled selected>Select Products Category</option>

                        <?php
                        include 'connection_dashboard.php';

                        $category_fetch =  mysqli_query($conn, " SELECT * FROM `categories` ");

                        while ($fetch_category = mysqli_fetch_assoc($category_fetch)) {
                        ?>
                            <option value="<?php echo $fetch_category['c_id'] ?>">
                                <?php echo $fetch_category['c_name'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                    <button type="submit" name="btnProduct" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>


    </div>
</div>
<!-- Form End -->

<?php

include 'connection_dashboard.php';

// Insert product data into the database

if (isset($_POST['btnProduct'])) {

    $productName = $_POST['p_name'];
    $productPrice = $_POST['p_price'];
    $productDescription = mysqli_real_escape_string($conn, $_POST['p_des']);
    // $productDescription = $_POST['p_des'];
    $p_category = $_POST['product_category'];

    $productImage = $_FILES['p_image']['name'];
    $p_Image_tem = $_FILES['p_image']['tmp_name'];

    // Define the target directory where you want to move the uploaded image
    $targetDirectory = "Content/product_images/";

    // Create the full path for the uploaded image
    $targetPath = $targetDirectory . $productImage;

    $product_same_validate = mysqli_query($conn, " SELECT * FROM `products` WHERE p_name = '$productName' ");

    if (mysqli_num_rows($product_same_validate) > 0) {
?>
        <script>
            alert("Product with the same name already exists. Please choose a different name.")
        </script>
        <?php
    } else {

        $product_insert_query  = mysqli_query($conn, "INSERT INTO `products` (p_name, p_price, p_des, p_image, p_category) VALUES
        ('$productName', '$productPrice', '$productDescription', '$productImage', '$p_category')");

        if ($product_insert_query) {
        ?>
            <script>
                alert("Product insert")
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Product not insert")
            </script>
<?php
        }
    }
}

?>