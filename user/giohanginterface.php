<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.png" />
    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--css của mình tự viết-->
    <link href="css/main.css" rel="stylesheet">
    <!-- js -->
    <script language="javascript" src=""></script>
    <style>
        body {
            width: 100%;
    background-image: url('background.jpeg') ;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }

  .conttt {
    background-color: rgba(255, 255, 255, 0.4);
    margin-top: 64px;
  }

  table, tr, td {
    border: 1px solid black;
  }
    </style>
</head>
<body>
    <div class="container conttt" style="padding: 24px 0">
    <?php
        include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
        
        $sum=0;
        $count=0;
    ?>
    <h1 class="container text-center" style="padding: 24px 0 12px 0;">Giỏ hàng của bạn</h1>
    <div class="container text-center col-8">
    <table width="100%" border="2px" class="table">
        <thead class="table-danger" style="font-weight: bold;">
        <tr>
            <td>STT</td>
            <td>ID</td>
            
            <td>Tên sản phẩm</td>            
            <td>Số lượng</td>
            <td>Giá</td>           
            <td>Thay đổi</td>
        </tr>
        </thead>
        <?php
            $ptkm=0;
            if(isset($_SESSION['cart'])){
                $cart=$_SESSION['cart'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                
                $cart=$_SESSION['cart'];
                //tìm mã khuyến mãi
                $sqlkm="SELECT * from khuyenmai";
                $rskm=mysqli_query($con,$sqlkm);// lấy thời gian khuyến mãi
                $sqlhd="SELECT * from hoadon";
                $rshd=mysqli_query($con,$sqlhd);
                //MAX(phanTramKM) as max_ma_KM
                $sql_sum="SELECT * from khuyenmai " ;
                $rs_sum=mysqli_query($con,$sql_sum);
                $tgdat1=date("y/m/d");
                while($row_sum=mysqli_fetch_assoc($rs_sum)){
                    $ngaybd=$row_sum['ngayBD'];
                    $ngaykt=$row_sum['ngayKT'];
                    
                    $tgdat2=("20".$tgdat1);// đặt lại ngày tháng đúng format
                    if((strtotime($ngaykt) > strtotime($tgdat2)) and (strtotime($tgdat2)<strtotime($ngaykt)) ){//kiểm tra ngày tháng
                        if($ptkm<$row_sum['phanTramKM']){// lấy phần trăm khuyến mãi cao hơn khi có 2 chương trình khuyến mãi cùng lúc
                            $ptkm=$row_sum['phanTramKM'];
                            $maKM=$row_sum['maKM'];
                        }
                    }            
                }
                foreach($cart as $k => $v){
                    $count++;
        ?>
        <tbody>
        <tr>
            <td><?=$count?></td>
            <td><?=$v['ID']?></td>
            <td><?=$v['tenMon']?></td>          
            <td><?=$v['soLuong']?></td>
            <td align="right"><?=$v['giaMon']?> VND</td>  
            <td><a href="xoagiohang.php?index=<?=$k?>"><button type="button" class = "btn btn-danger">Xóa</button></a></td>         
        </tr>    
        </tbody>
        <?php
            $sum+=($v['giaMon']*$v['soLuong']);
            //$count++;
            }
        }
        $tientra=$sum-($sum*($ptkm/100));
        ?>
        <tr>
            
            <td colspan="5" align="right" class=""><b>Tổng</b></td>
            <td align="right"><p style="text-decoration: line-through;"><?=$sum?> VND</p> (-<?=$ptkm?>%) <br><?=$tientra?>  VND</td>
        </tr>
    </table>
    </div>
    <div class="container text-center py-2">
    <a href="trangchu.php" ><button class="btn btn-dark me-3 p-2"><i class="fa-solid fa-backward me-2"></i> Trở lại</button></a>
        <a href="dathang.php"><button class="btn btn-primary me-3 p-2"><i class="fa-solid fa-cart-arrow-down me-2 "></i>Đặt hàng</button></a>
        <a href="trangchu.php#monAn"><button class="btn btn-warning me-3 p-2"><i class="fa-regular fa-eye me-2 "></i>Xem món ăn</button></a>
    </div>
    </div>
</body>
</html>