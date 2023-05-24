<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--icon-->
  <link href="css/all.min.css" rel="stylesheet">
		<!--CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--css của mình tự viết-->
		<link href="css/main.css" rel="stylesheet">
		<!-- js -->
		<script language ="javascript" src = ""></script>
</head>
<body>
<div style="margin-top: 30px;">
<div class="container mt-3">
    <h3 class="text-center fw-bold">Danh sách hóa đơn</h3>
  <table class="table">
    <thead class="table-success">
      <tr>
            <th>Mã hóa đơn</th>
            <th>Trang thái</th>
            <th>Thời gian đặt</th>
            <th>Mã Khuyến mãi</th>
            <th>Tổng tiền</th>
            <th>Chi tiết</th>
            <th class="text-center">Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include("/xampp/htdocs/myproject/connectDataBase.php");
            $sql="SELECT maHD, trangthai,tgdat, sum(gia) as tong, phanTramKM, hoadon.maKM from hoadon, khuyenmai where hoadon.maKM = khuyenmai.maKM  GROUP BY maHD";
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
            <tr>
                <td><?=$row['maHD']?></td>
        
                <td><?=$trangthai?></td>
                <td><?=$row['tgdat']?></td>
                <td><?=$row['maKM']?></td>
                <td><p style="text-decoration: line-through;"><?=$row['tong']?> VND</p><br><?=$tientra?> VND</td>
                <td><a class="text-decoration-none" href="chitiethoadon.php?ma=<?=$row['maHD']?>">Chi tiết</a></td>
                <td class="text-center"><a href="edithoadon.php?ma=<?=$row['maHD']?>"><button class="btn btn-info">Sửa <i class="fa-regular fa-pen-to-square"></i></button></a></td>
            </tr>
        <?php
            }
        ?>
    </tbody>
  </table>
  <div class="container text-center">
  <a href="trangchuAdmin1.php"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Back</button></a>
  </div>
</div>
</div>
</body>
</html>