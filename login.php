<?php
    $ID=$_POST["tdn"];
    $PASS=$_POST["mk"];
    session_start();
    $_SESSION["islogin"]=false;
    include("connectDataBase.php");
    $sql="SELECT * from account where TDN='$ID' and PASS='$PASS'";
    $rs=mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)>0){
        $row=mysqli_fetch_assoc($rs);
        $_SESSION["IDKH"]=$row["IDKH"];
        $_SESSION["PASS"]=$row["PASS"];
        $_SESSION["islogin"]=true;
        $_SESSION["type"]=$row["TYPE"];
        header("location: checklogin.php ");
    }
    else{
        
        header("Location: login1.html");

    }
?>