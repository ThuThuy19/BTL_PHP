<?php
include("connectDataBase.php");
    $id=$_POST['id'];
    $ten=$_POST['tencombo'];
    $path="user/image/";
    $tenfile=basename($_FILES["anhmh"]["name"]);//lấy tên file
    $file = $path.$tenfile;
    $gomMon=" ";
    $gia=0;
    $sql="SELECT * from monan";
    $rs=mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($rs)){
        $idmon=$row['ID'];
        if(isset($_POST[$idmon])){
            $gomMon.=$row['ID']." ";
            $gia+=$row["giaMon"];
        }
    }
    $sql="UPDATE  combo set tenCombo='$ten',gomMon='$gomMon',GiaCB=$gia where maCombo=$id";
    if(!file_exists($file)){
        $sql="UPDATE  combo set tenCombo='$ten',gomMon='$gomMon',GiaCB=$gia, anh='$tenfile' where maCombo=$id";
        echo $tenfile;
    }
    move_uploaded_file($_FILES["anhmh"]["tmp_name"],$file);
    $check=mysqli_query($con,$sql);
    header("Location: trangchuAdmin1.php?id=4");
?>