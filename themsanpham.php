<?php
    $maMon=$_POST["maMon"];
    $teMon=$_POST["tenMon"];
    
    $giaMon=$_POST["giaMon"];
    $path = "user/image/";//đường dẫn lưu file
    $mmota=$_POST["mota"];
    $tenfile=basename($_FILES["hinhAnh"]["name"]);//lấy tên file
    $file = $path.$tenfile;
    include("connectDataBase.php");
    
    
        $sqlinsert="INSERT INTO monan(tenMon,giaMon,hinhAnh,mota) VALUES('$teMon',$giaMon,'$tenfile','$mota')";
        move_uploaded_file($_FILES["hinhAnh"]["tmp_name"],$file);//upload file vào đường dẫn đã chọn
        mysqli_query($con,$sqlinsert);
        header("Location: trangchuAdmin1.php?id=1");
        //array_key_exists($id,$cart);//ktra id đã có trong mảng $cảt cchuwa
   
?>
