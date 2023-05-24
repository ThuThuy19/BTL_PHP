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
    $csreen=1;
?>
<h3 class="contarner fw-bold " style="margin-left: 35%; margin-top:3% ">Sửa thông tin món ăn</h3>
    <div >
    <form action ="suamon.php" method="post" enctype="multipart/form-data" class="container text-center">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <table width="80%" class="text-bg-light text-center container col-8">
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4" >ID :</td>
                <td class="px-3 py-1 text-start"><?=$_GET['id']?></td>                         
            </tr>
            
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Tên món</td>
                <td class="px-3 py-1"><input class="form-control" type="text" id="tenMon" name="tenMon" value="<?=$_GET['tenMon']?>"></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Hình ảnh</td>
                <td class="px-3 py-1"><input class="form-control" type="file" name="image" ></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Giá</td>
                <td class="px-3 py-1"><input class="form-control" type="text" id="gia" name="gia" value="<?=$_GET['gia']?>"></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Mô tả</td>
                <td class="px-3 py-1"><input class="form-control" type="text" id="mota" name="mota" value="<?=$_GET['mota']?>"></td>
            </tr>
            <tr>
                <td style="padding-top: 20px; padding-left:20px;" colspan="2"><button type="submit" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Sửa</button> </td>
            </tr>
            
        </table>
        </form>
    </div>
    <div style="padding-left: 15px;">
        <a href="trangchuAdmin1.php?id=<?=$csreen?>"><button style="margin-left: 320px; margin-top:10px;" class="btn btn-danger text-center"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>
</body>
</html>