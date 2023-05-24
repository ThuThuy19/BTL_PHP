<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa combo</title>
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
        $id=$_GET['id'];
        $sql="SELECT * from combo where maCombo=$id";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($rs);
    ?>
    <?php
        $screen = 4; 
    ?>
<h3 class="contarner fw-bold " style="margin-left: 35%; margin-top:3% ">Sửa thông danh sách combo</h3>
    <div class="py-5 container">
    <form action ="suacombo.php" method="post" enctype="multipart/form-data" class="container text-center col-xl-10 offed-1 px-3">
    <input type="hidden" value="<?=$row['maCombo']?>" name="id"/>
    <table width="80%" class="text-bg-light text-center">
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4" >Tên combo :</td>
                <td class="px-3 py-1"><input class="form-control" type="text" id="" name="tencombo" value="<?=$row['tenCombo']?>"></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Lựa chọn món:</td>
                <td class="px-3 py-1">
                <?php
                    include("connectDataBase.php");
                    $sql1="SELECT * from monan ";
                    $rmn=mysqli_query($con,$sql1);
                    while($rowmn=mysqli_fetch_assoc($rmn)){
                ?>
                    <input type="checkbox" name="<?=$rowmn['ID']?>"/> <a><?=$rowmn['tenMon']?></a>
                <?php
                    }
                ?>  
                </td>
            </tr>

            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4" >Ảnh minh họa :</td>
                <td class="px-3 py-1"><input class="form-control" type="file" id="" name="anhmh" value="<?=$row['anh']?>"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Sửa</button></td>
            </tr>
        </table>  
    </form>
    <div class="pt-4 text-center">
        <a style="padding-right: 200px;" href="trangchuAdmin1.php?id=<?=$screen?>"><button class="btn btn-danger" ><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>    
</div>
</body>
</html>