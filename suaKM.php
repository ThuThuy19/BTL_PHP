<?php
    $id=$_POST["makm"];
    $tenkm=$_POST["tenkm"];
    $ngaybd=date('Y/m/d',strtotime($_POST["ngaybd"]));
    $ngaykt=date('Y/m/d',strtotime($_POST["ngaykt"]));
    $ptkm=$_POST["ptkm"];
    include("connectDataBase.php");
    $sql="UPDATE khuyenmai set  tenKM='$tenkm',ngayBD='$ngaybd',ngayKT='$ngaykt',phanTramKM=($ptkm) where maKM = $id";
    //$count="SELECT count(maKM) from where maKM=$maKM";
    mysqli_query($con,$sql);
    header("Location: trangchuAdmin1.php?id=2");
?>