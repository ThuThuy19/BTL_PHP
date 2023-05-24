<?php
    include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
    $ID=$_REQUEST['id'];       
    $tenMon=$_REQUEST['tenMon'];
    $gia=$_REQUEST['gia'];   
    session_start();
    //$cart=array($rs['ID'],$rs['maMon'],$rs['tenMon'],$rs['gia']) ;
    if(isset($_SESSION['cart'])){
        $cart=$_SESSION['cart'];
        echo "true";
    }
    else{
        $cart=[];
        //echo "taoj mang ow day";
    }

    if(isset($cart)){
        if(array_key_exists($ID,$cart)){
            $cart[$ID]['soLuong']++;
        }
        else{
            $cart[$ID]=array("ID"=>$ID,"tenMon"=>$tenMon,"giaMon"=>$gia,"soLuong"=>1);
        }
    }

    



    $_SESSION['cart']=$cart;
    //$sql="UPDATE  monan set gioHang=(gioHang+1) where ID=$ID";
    //mysqli_query($con,$sql);
    //echo $cart[$ID]['maMon'];
    header("Location: trangchu.php");
?>