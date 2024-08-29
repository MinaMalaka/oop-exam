<?php include 'inc/header.php'; ?>



<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form action="handlers/handleAdd.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image:</label>
                    <input type="file" id="formFile" name="file">
                </div>

                <center><button on type="submit" class="btn btn-primary" name="submit">Add</button></center>
            </form>
        </div>
    </div>
</div>