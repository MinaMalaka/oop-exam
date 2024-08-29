<?php include 'inc/header.php';
require_once 'inc/App.php'; ?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">

            <?php
            if ($request->check($request->get('id'))) {

                $id = $request->get('id');
                $result = $conn->query("select * from product where id = $id");

                $product = $result->fetch(PDO::FETCH_ASSOC)
            ?>
                <form action="handlers/handleEdit.php?id=<?php echo $id ?> " method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?php echo intval($product['price']) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"><?php echo $product['description'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image:</label>
                        <input type="file" id="formFile" name="file">
                    </div>

                    <div class="col-lg-3">
                        <img src="images/1.jpg" class="card-img-top">
                    </div>

                    <center><button type="submit" class="btn btn-primary" name="submit">edit</button></center>
                </form>

            <?php } else {
                $request->redirect("handlers/handleEdit.php");
            } ?>
        </div>
    </div>
</div>
