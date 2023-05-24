<?php
    $id = $_REQUEST['id'];
    include("connectDataBase.php");
    $sql="DELETE from khuyenmai where maKM=$id";

    $truyvan=mysqli_query($con,$sql);
    if($truyvan){
        header("Location: trangchuAdmin1.php?id=2");
    }
    
?>