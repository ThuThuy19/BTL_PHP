<?php
    include("connectDataBase.php");
    $mahd=$_POST['ma'];
    $trangthai=$_POST['trangthai'];
    $sql="UPDATE hoadon set trangthai = $trangthai where maHD=$mahd";
    $rs=mysqli_query($con,$sql);
    header("Location: dshoadon1.php");
?>