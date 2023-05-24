<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra đơn hàng</title>
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
    <h1 class="container text-center" style="padding: 24px 0 12px 0;">Danh sách đơn hàng của bạn</h1>
    <div class="container text-center col-8">
    <table width="100%" border="2px" class="table">
        <thead class="table-danger" style="font-weight: bold;">
        <tr>
            <td>Mã hóa đơn</td>
            <td>Trạng thái</td>
            
            <td>Tổng tiền</td>            
        </tr>
        </thead>
        <?php
            
            //include("/xampp/htdocs/myproject/connectDataBase.php");
            $IDKH=$_SESSION['IDKH'];
            
            $sql="SELECT maHD, trangthai, sum(gia) as tong, phanTramKM from hoadon inner join khuyenmai on hoadon.maKM = khuyenmai.maKM where IDKH=$IDKH  GROUP BY maHD, trangthai";
            $rs=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($rs)){
                $trangthai=null;
                if($row['trangthai']==0){
                    $trangthai="Đang chờ xử lý!";
                }
                elseif($row['trangthai']==1){
                    $trangthai="Đơn hàng đã được đặt";
                }
                else{
                    $trangthai ="Đơn hàng đã bị hủy";
                }
                $tientra= ($row['tong'] - ($row['tong']*($row['phanTramKM']/100)));
        ?>
        <tbody>
        <tr>
            <td><?=$row['maHD']?></td>
            <td><?=$trangthai?></td>
            <td><p style="text-decoration: line-through;"><?=$row['tong']?> VND</p><?=$tientra?> VND</td>               
        </tr>    
        <?php
            }
        ?>
        </tbody>
        
    </table>
    </div>
    <div class="container text-center py-2">
    <a href="trangchu.php" ><button class="btn btn-dark me-3 p-2"><i class="fa-solid fa-backward me-2"></i> Trở lại</button></a>
    </div>
    </div>
</body>
</html>