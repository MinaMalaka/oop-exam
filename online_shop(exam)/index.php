<?php


require_once 'inc/header.php';
require_once 'inc/App.php';


?>

<div class="container my-5">

    <div class="row">

        <?php
        $result = $conn->query("select * from product");
        if ($result->rowCount() > 0) {
            while ($product = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $product['image'] ?>" class="card-img-top">

                        <div class="card-body">

                            <h5 class="card-title"><?php echo $product['name'] ?></h5>
                            <p class="text-muted"><?php echo $product['price'] . " " . "EGY" ?></p>

                            <p class="card-text"><?php echo $product['description'] ?></p>
                            <a href="show.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">Show</a>

                            <a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-info" name="edit">Edit</a>
                            <a href="del.php?id=<?php echo $product['id'] ?>" alert="sdf" class="btn btn-danger" onclick="alert('product will be deleted permanently')">Delete</a>
                        </div>
                    </div>
                </div><?php

                    }
                }


                        ?>
    </div>

</div>