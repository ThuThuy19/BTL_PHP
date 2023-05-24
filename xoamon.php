<?php   
    $id=$_POST["id"];
    include("connectDataBase.php");
    $sql0="DELETE from hoadon_monan where maMon=$id";
    $sql="DELETE from monan where ID=$id";
    // echo $id;
    // echo($sql);
    mysqli_query($con,$sql0);
    mysqli_query($con,$sql);
    header("Location: trangchuAdmin1.php?id=1");
?>