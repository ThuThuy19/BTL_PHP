<?php
    $maBL=$_POST['maBL'];
    include("connectDataBase.php");
    echo $maBL;
    $sql="DELETE from binhluan where maBL=$maBL";
    mysqli_query($con,$sql);
    header("Location: trangchuAdmin1.php?id=6");
?>