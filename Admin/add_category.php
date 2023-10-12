<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add Category</h6>

                <form action="" method="post">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Category Name" name="c_name" required pattern="[a-zA-Z0-9\s-]+">

                    <button type="submit" name="btnCategory" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>


    </div>
</div>
<!-- Form End -->

<!-- category insert in to mysql table  -->
<?php

include 'connection_dashboard.php';

if (isset($_POST['btnCategory'])) {

    $categoryName = $_POST['c_name'];

    $category_insert =  mysqli_query($conn, " INSERT INTO `categories`(c_name) VALUES ('$categoryName')");

    if ($category_insert) {
?>
        <script>
            alert("Category insert")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Category not insert")
        </script>
<?php
    }
}
?>