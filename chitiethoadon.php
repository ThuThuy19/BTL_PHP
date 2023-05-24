<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>
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
    <div class="row">
        <h3 class="container fw-bold text-center " style="margin-top:3% ">Thông tin chi tiết hóa đơn</h3>
        <div class="col-3"></div>
        <div class="col-6 " style="margin-top:30px;">
            <?php
                include("connectDataBase.php");
                $mahd=$_GET['ma'];
                //$sql="SELECT tenMon, hinhAnh,soluong, monan.gia as giamon, hoadon.gia as tong  from hoadon inner join monan on monan.ID=hoadon.ID where maHD=$mahd";
                $sql ="SELECT * from monan inner join hoadon_monan on monan.ID = hoadon_monan.maMon inner join hoadon on hoaDon.maHD=hoadon_monan.maHD where hoadon.maHD=$mahd";
                $rs=mysqli_query($con,$sql);
                
            ?>
            <table class="table" >
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th colspan="2" class="text-center">Giá</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $count=1;
                    $sum=0;
                    while($row=mysqli_fetch_assoc($rs)){                
                ?>
                
                    <tr>
                        <td><?=$count?></td>
                        <td><?=$row['tenMon']?></td>
                        <td><img src="user/image/<?=$row['hinhAnh']?>" style="width: 300; height: 200px;"/></td>
                        <td><?=$row['sl']?></td>
                        <td><?=$row['giaMon']?> VND</td>
                        
                    </tr>
                
                <?php
                    $sum+= $row['giaMon']; $count++; 
                    }
                    $screen=5;
                ?>
                </tbody>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Thành tiền</td>
                        <td><?=$sum?> VND</td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
    <div class="text-center">
        <a href="trangchuAdmin1.php?id=<?=$screen?>"><button class="btn btn-danger "><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>
</body>
</html>