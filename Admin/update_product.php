<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products Update Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Form Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">

                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Update Products</h6>

                        <form action="" method="post" enctype="multipart/form-data">

                            <?php
                            include 'connection_dashboard.php';

                            $product_id_get = $_GET['UPDATEproduct'];

                            $select_product_data = mysqli_query($conn, " SELECT * FROM `products` WHERE p_id = '$product_id_get' ");

                            $data_save = mysqli_fetch_assoc($select_product_data);

                            if (isset($_POST['btnProductUPDATE'])) {
                                $product_id = $_GET['UPDATEproduct'];
                                $productName = $_POST['p_name'];
                                $productPrice = $_POST['p_price'];
                                $productDescription = $_POST['p_des'];
                                $p_category = $_POST['product_category'];

                                // Check if a new image is uploaded
                                if ($_FILES['p_image']['name']) {
                                    $productImage = $_FILES['p_image']['name'];
                                    // Process and move the uploaded image to the desired location
                                } else {
                                    // Image was not updated, use the existing image path
                                    $productImage = $product['p_image'];
                                }

                                // Update the product data in the database
                                $updateProductQuery = mysqli_query($conn, "UPDATE products SET p_name='$productName', p_price='$productPrice', p_des='$productDescription', p_image='$productImage', p_category='$p_category' WHERE p_id=$product_id");

                                if ($updateProductQuery) {
                            ?>

                                    <script>
                                        alert("Product Updated SuccessFully Done")

                                        location.replace('index_dashboard.php');
                                    </script>

                                <?php
                                    exit;
                                } else {
                                ?>

                                    <script>
                                        alert("Product Not Updated ")

                                        location.replace('update_product.php');
                                    </script>

                            <?php
                                }
                            }
                            ?>

                            <input class="form-control form-control-lg mb-3" value="<?php echo $data_save['p_name'] ?>" type="text" placeholder="Product Name" name="p_name" required pattern="[a-zA-Z0-9\s-]+">

                            <input class="form-control form-control-lg mb-3" value="<?php echo $data_save['p_price'] ?>" type="text" placeholder="Product Price" name="p_price" required pattern="\d+(\.\,\d{2})?">

                            <input class="form-control form-control-lg mb-3" value="<?php echo $data_save['p_des'] ?>" type="text" placeholder="Product Description" name="p_des" pattern="[\s\S]*" required>

                            <input class="form-control form-control-lg mb-3" type="file" name="p_image" value="<?php echo $data_save['p_image'] ?>" accept="image/*" required>

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

                            <button type="submit" name="btnProductUPDATE" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>


            </div>
        </div>
        <!-- Form End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>