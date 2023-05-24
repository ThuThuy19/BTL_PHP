
<?php
    $tdn=$_POST["tentk"];
    $matkhau=$_POST["xao"];
    include("connectDataBase.php");
    $sql="SELECT * from account where TDN='$tdn'";
    $rs=mysqli_query($con,$sql);  
    if(mysqli_num_rows($rs)>=1){

        header("Location: dangki1.php");
    }

    else{
        $sqlinsert="INSERT INTO account(TDN,PASS,TYPE) VALUES('$tdn','$matkhau',0)";
        $rs=mysqli_query($con,$sqlinsert);
        //$matkhau;
        header("Location: login1.html");           
    }

?>
