<?php
    $localhost="localhost";
    $username="root";
    $password="";
    $namedb="denuituquyen";
    $con=mysqli_connect($localhost,$username,$password,$namedb);
    if(!$con){
        die ("ket noi khong thanh cong");
    }    
?>