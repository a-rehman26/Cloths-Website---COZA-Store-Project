<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table" style="text-align: center; vertical-align: middle;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Description</th>
                                <th scope="col">Product image</th>
                                <th scope="col">Product Category</th>
                                <th scope="col" colspan="2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include 'connection_dashboard.php';

                            $select_product_view = mysqli_query($conn, " SELECT * FROM `products` ");

                            while ($fetch_products_view = mysqli_fetch_assoc($select_product_view)) {

                            ?>

                                <tr>
                                    <th scope="row"><?php echo $fetch_products_view['p_id'] ?></th>
                                    <td><?php echo $fetch_products_view['p_name'] ?></td>
                                    <td><?php echo $fetch_products_view['p_price'] ?></td>
                                    <td style="width: 155px;"><?php echo $fetch_products_view['p_des'] ?></td>
                                    <td style="text-align: center;"><img style="width: 85px;border-radius: 10px;" src="../Content/product_images/<?php echo $fetch_products_view['p_image'] ?>" alt=""></td>
                                    <td><?php echo $fetch_products_view['p_category'] ?></td>

                                    <td style="cursor: pointer;"> <a href="update_product.php?UPDATEproduct=<?php echo $fetch_products_view['p_id'] ?>"> <i class="fa-regular fa-pen-to-square"></i> </a> </td>
                                    <td style="cursor: pointer;"> <a href="delete_product.php?DELETEproduct=<?php echo $fetch_products_view['p_id'] ?>"> <i class="fa-solid fa-trash"></i> </a> </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>