<?php
    session_start();
    if(!$_SESSION['islogin']){
        header("Location: login.php");
    }
    else{
        if($_SESSION['type']==1){
            header("Location: trangchuAdmin1.php");
        }
        else{
            header("Location: user//trangchu.php");
        }
        
    }
?>