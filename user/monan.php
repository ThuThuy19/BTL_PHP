<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="monan.css">
    <title>Danh sách món ăn</title>
</head>
<body>
    <header>
        dfsdfsdcsdcdscsd
        <a href="giohanginterface.php">Xem giỏ hàng</a>
    </header>
    <?php
        include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
    ?>
    <nav>
        <ul type="none">
            <a href="trangchu.php"><li>Trang chủ</li></a>
            <a href=""><li>Món ăn</li></a>
            <a href=""><li>Giỏ hàng</li></a>
            <a href=""><li>Khuyến mãi</li></a>
            <a href=""><li>Commbo</li></a>
        </ul>
    </nav>
    
    <table style="width: 1200px;" >
    
        <tr>
            <td colspan="4"><h2>DANH SÁCH MÓN ĂN</h2></td>
        </tr>
    <?php
        $sql="SELECT * from monan ";
        $rs=mysqli_query($con,$sql);
        $count=mysqli_num_rows($rs);//lấy ra số sản phẩm
        $k=0;//số hàng hiện ra
        $hang=($count/4)+1;//tổng số hàng được hiện
        while($k<$hang){ 
                 
    ?>
    
        <tr id ="Monan">
            <?php
                if($count>4){//nếu số sản phẩm lớn hơn 4 thì xuất hẳn ra 1 dòng
                    for($i=0;$i<4;$i++){
                        $row=mysqli_fetch_assoc($rs);
            ?>
                        <td>
                            <img src="" style="width:300px;height:300px" ><br>
                            <a><b>Tên món ăn: </b><?=$row['tenMon']?></a><br>
                            <a><b>Giá: </b><?=$row['gia']?> VND</a><br>
                            <a href="giohang.php?id=<?=$row['ID']?>&maMon=<?=$row['maMon']?>&tenMon=<?=$row['tenMon']?>&gia=<?=$row['gia']?>"><button type="button" style="width: 100px;">Thêm hàng vào giỏ</button></a>
                        </td>
            <?php      }//end for
                }//end if
                else{//nếu số sane phẩm còn lại nhỏ hơn 4 thì chỉ xuất ra số sản phẩm còn lại
                    for($i=0;$i<$count;$i++){
                        $row=mysqli_fetch_assoc($rs);
            ?>
                    <td>
                        <img src="" style="width:300px;height:300px" ><br>
                        <a><b>Tên món ăn: </b><?=$row['tenMon']?></a><br>
                        <a><b>Giá: </b><?=$row['gia']?> VND</a><br>                       
                        <a href="giohang.php?id=<?=$row['ID']?>&maMon=<?=$row['maMon']?>&tenMon=<?=$row['tenMon']?>&gia=<?=$row['gia']?>"><button type="button" style="width: 100px;">Thêm hàng vào giỏ</button></a>
                    </td>
            <?php
                    }//end for
                }//end else
                
            ?>
            
            
        </tr>
    <?php
            $count=$count-4;//tính ra số sản phẩm
            $k++;//hàng tiếp theo
        }
    ?>
    </table>
</body>
</html>