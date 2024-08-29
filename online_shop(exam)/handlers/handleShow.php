<?php
require_once '../inc/App.php';


if($request->check($request->get('id'))){

    $id=$request->get('id');
 
    $result = $conn->query("select * from todo  where id=$id");

if($result->rowCount() > 0){
    while($todo = $result->fetch(PDO::FETCH_ASSOC)){
    
    $request->redirect("../index.php?id=$id");}
    
}
    }else{
        $request->redirect("../index.php");
    }?>
    
