<?php
    include('\\xampp\\htdocs\\myproject\\connectDataBase.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $nghenghiep=$_POST['subject'];
    $comment=$_POST['message'];
     $sql="INSERT into binhluan (tenkhach, nghenghiep,email,noidung) values ('$name','$nghenghiep','$email','$comment')";
     $rs = mysqli_query($con, $sql);
     if($rs){
        header("Location: trangchu.php");
     }
?>