<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa món ăn</title>
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
<?php
        include("connectDataBase.php");
        $id=$_REQUEST['id'];
        $sql="SELECT * from khuyenmai where maKM=$id";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($rs);
    ?>
    <?php
        $screen = 2; 
    ?>
<h3 class="contarner fw-bold " style="margin-left: 35%; margin-top:3% ">Sửa thông tin khuyến mãi</h3>
    <div class="py-5">
    
        <table width="80%" class="text-bg-light text-center container col-8 ">
        <form action ="suaKM.php" method="post" enctype="multipart/form-data" class="container text-center ">
        <input type="hidden" name="makm" value="<?=$row['maKM']?>">
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4" >Tên chương trình khuyến mãi</td>
                <td class="px-3 py-1"><input class="form-control" type="text" id="tenkm" name="tenkm" value="<?=$row['tenKM']?>"></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Ngày bắt đầu</td>
                <td class="px-3 py-1"><input class="form-control" type="date" id="ngaybd" name="ngaybd" value="<?=$row['ngayBD']?>"></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Ngày kết thúc</td>
                <td class="px-3 py-1"><input class="form-control" type="date" id="ngaykt" name="ngaykt" value="<?=$row['ngayKT']?>"></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Phần trăm khuyến mãi (%)</td>
                <td class="px-3 py-1"><input class="form-control" type="text" name="ptkm" value="<?=$row['phanTramKM']?>"></td>
            </tr>
            <tr>
                <td colspan="2"><a href="trangchuAdmin1.php?id=2"><button type="submit" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Sửa </button></a></td>
            </tr>
            </form>
        </table>   
    <div class="container text-center pt-3">
    <a href="trangchuAdmin1.php?id=<?=$screen?>"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>

</div>
</body>
</html>