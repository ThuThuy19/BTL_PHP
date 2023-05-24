<?php
    $id=$_REQUEST['index'];
    session_start();
    //include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
    //echo $id;
    if(isset($id,$_SESSION['cart'])){
        array_splice($_SESSION['cart'],$id,1);
    }
    
    // $sql="UPDATE monan set giohang=0 where ID=$id";
    // mysqli_query($con,$sql);
    header("Location: giohanginterface.php");
?>