<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách chương trình khuyến mãi</title>
    <link href="css/all.min.css" rel="stylesheet">
    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.png" />
    <!--css của mình tự viết-->
    <link href="css/main.css" rel="stylesheet">
    <!-- js -->
    <script language="javascript" src=""></script>
    <style>
        body{ position: relative;}
        .hih {
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;

    background: url(banner1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
    position: relative;
        }
    </style>
</head>
<body>
    <h1 class="text-center container" style="margin-top:50px">Danh sách chương trình khuyến mãi</h1>
    <div class="col-8 container text-center">
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>STT</th>
            <th>Tên chương trình khuyến mãi</th>
            <th>Ngày bắt đầu khuyến mãi</th>
            <th>Ngày kết thúc khuyến mãi</th>
            <th>Phần trăm khuyến mãi</th>
        </tr>
        </thead>
        <?php
            include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
            $sql="SELECT * from khuyenmai";
            $rs=mysqli_query($con,$sql);
            $count=1;
            while($row=mysqli_fetch_assoc($rs)){
        ?>
        <tbody>
        <tr>
            <td><?=$count?></td>
            <td><?=$row['tenKM']?></td>
            <td><?=$row['ngayBD']?></td>
            <td><?=$row['ngayKT']?></td>
            <td><?=$row['phanTramKM']?> %</td>
        </tr>
        </tbody>
        <?php
            $count++;
            }
        ?>
    </table>
    </div>
    <div class="container text-center">
    <a href="trangchu.php" ><button class="btn btn-dark"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    <!-- <div class="hih"></div> -->
    </div>
</body>
</html>