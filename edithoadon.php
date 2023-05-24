<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa hóa đơn</title>
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
<body style="background-color: #f1f1f1;">
    <div class=" container  col-8 offed-2">
    <?php
        include("connectDataBase.php");
        $mahd=$_GET['ma'];
        $sql="SELECT maHD, trangthai, sum(gia) as tong from hoadon where maHD=$mahd";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($rs);
        if($row['trangthai']==0){
            $cho="selected";
            $da="";
            $huy="";
        }elseif($row['trangthai']==1){
            $da="selected";
            $huy="";
            $cho="";
        }
        else{
            $cho="";
            $da="";
            $huy="selected";
        }
    ?>
    <?php
        $screen = 5; 
    ?>
    
    <form action="suahoadon.php" method="post">
    <h3 class="contarner fw-bold " style="margin-left: 35%; margin-top:3% ">Chỉnh sửa trạng thái hóa đơn</h3>
        <input type="hidden" name="ma" value="<?=$row['maHD']?>"/>
    <table class="table">
    <form action="suahoadon.php" method="post">
        <thead class="table-dark">
            <tr>
                <td>Mã hóa đơn</td>
                <td>Trang thái</td>
                <td>Tổng tiền</td>
                <td>Chi tiết</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$row['maHD']?></td>
                <td>
                    <select name="trangthai" value="<?=$row['trangthai']?>">
                        <option value="0" <?=$cho?>>Đang chờ xử lý !</option>
                        <option value="1" <?=$da?>>Đã xác nhận</option>
                        <option value="2" <?=$huy?>>Đã hủy</option>
                    </select>
                </td>
                <td><?=$row['tong']?></td>
                <td><a style="text-decoration: none;" href="chitiethoadon.php?ma=<?=$row['maHD']?>">Chi tiết</a></td>
            </tr>
        </tbody>
        <tr class="text-center">
            <td colspan="4"><a href="trangchuAdmin1.php?id=<?=$screen?>"><button type="submit" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Sửa </button></td></a>
        </tr>
        </form>
    </table>
    <div class="container text-center">
        <a class="btn btn-danger" href="trangchuAdmin1.php?id=<?=$screen?>"><i class="fa-solid fa-backward"></i> Trở lại</a>
    </div>
    </div>
</body>
</html>