<?php

require_once 'inc/app.php';
if ($request->check($request->get('id'))) {
    $id = $request->get('id');
    $run = $conn->prepare("delete from product where id=:id");
    $run->bindParam(":id", $id);
    $run->execute();
    $request->redirect("index.php");
} else {
    echo "error";
}
