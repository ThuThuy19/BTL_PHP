<?php
    $tenkm=$_POST["tenkm"];
    $ngaybd=date('Y/m/d',strtotime($_POST["ngaybd"]));
    $ngaykt=date('Y/m/d',strtotime($_POST["ngaykt"]));
    $ptkm=$_POST["ptkm"];
    include("connectDataBase.php");
    $sql="INSERT INTO khuyenmai(tenKM,ngayBD,ngayKT,phanTramKM) values('$tenkm','$ngaybd','$ngaykt',($ptkm))";
    //$count="SELECT count(maKM) from where maKM=$maKM";
    // if($count>0){
    //     die ("Mã khuyến mãi đã tồn tại");
    //     include("KHUYENMAI.html");
    // }
    // else{
         mysqli_query($con,$sql);
            header("Location: trangchuAdmin1.php?id=2");
    // }
    
?>