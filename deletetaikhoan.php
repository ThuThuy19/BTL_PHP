<?php
    include("connectDataBase.php");
    $id=$_REQUEST["id"];
    $sql0="DELETE from hoadon where IDKH=$id";
    $sql="DELETE from account where IDKH=$id";
    mysqli_query($con,$sql0);
    mysqli_query($con,$sql);
    header("Location: trangchuAdmin1.php?id=3");
?>