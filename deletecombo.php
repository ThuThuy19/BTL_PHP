
<?php
    include("connectDataBase.php");
    $id=$_REQUEST['id'];
    $sql="DELETE from combo where maCombo=$id";
    $rs=mysqli_query($con,$sql);
    header("Location: trangchuAdmin1.php?id=4");
?>