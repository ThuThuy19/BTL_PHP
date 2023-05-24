<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê doanh thu</title>
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
    <?php
        include("connectDataBase.php");
        $sql="SELECT year(tgdat) as nam, month(tgdat) as thang, sum(gia) as tong from hoadon group by nam , thang";
    ?>
    <div class="container text-center">
        <h3 class="fw-bold mt-4">Thống Kê Doanh Thu</h3>
    <table class="table">
        <thead class="table-warning">
        <tr>
            <th>Năm</th>
            <th>Tháng</th>
            <th>Doanh thu</th>
        </tr>
        </thead>
    <?php
        $rs=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($rs)){

        
    ?>
    <tbody>
        <tr>
            <td><?=$row['nam']?></td>
            <td><?=$row['thang']?></td>
            <td><?=$row['tong']?> VND</td>
        </tr>
    </tbody>
    <?php
        }
    ?>
    </table>
    <a href="trangchuAdmin1.php" class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</a>
    </div>
</body>
</html>