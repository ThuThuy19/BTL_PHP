<?php
    $id=$_POST['id'];
    $mk=$_POST['mk'];
    $type=$_POST['vaitro'];
    include("connectDataBase.php");
    $sql="UPDATE account set pass='$mk', TYPE=$type where IDKH=$id";
    mysqli_query($con,$sql);
    header("Location: trangChuAdmin1.php?id=3");
?>