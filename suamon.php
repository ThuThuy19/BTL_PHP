<?php
    //$maMon=$_POST["maMon"];
    $tenMon=$_POST["tenMon"];
    
    $gia=$_POST["gia"];
    $mota=$_POST['mota'];
    $id=$_POST['id'];
    $path="user/image/";
    $tenfile=basename($_FILES["image"]['name']);
    $file=$path.$tenfile;
 
    include("connectDataBase.php");
    $sql="UPDATE monan set tenMon='$tenMon', giaMon=$gia, mota='$mota' where ID= $id ";
    if(!file_exists($file)){
        $sql="UPDATE monan set tenMon='$tenMon', giaMon=$gia, mota='$mota', hinhAnh='$tenfile' where ID= $id ";
        //echo $tenfile;
    }
    move_uploaded_file($_FILES['image']['tmp_name'],$file);
    $rs=mysqli_query($con,$sql); 
    if ($rs){
        header("Location: trangchuAdmin1.php?id=1");
    } 
    else{
        echo "false";
    }
    
?>