<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản</title>
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
        $sql="SELECT * from account where IDKH=$id";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($rs);
        $ad=" ";
        $user=" ";
        if($row['TYPE']==1){
            $ad="selected";
            $user=null;
        }
        else{
            $user="selected";
            $ad=null;
        }
    ?>
    <?php
        $screen = 3; 
    ?>
<h3 class="contarner fw-bold " style="margin-left: 35%; margin-top:3% ">Sửa thông tin tài khoản</h3>
    <div class="py-5 container text-center">
    <form action ="suaaccount.php" method="post" style="margin-left: 200px;">
    <input type="hidden" name="id" value='<?=$row['IDKH']?>'>  
        <table width="80%" class="text-bg-light">
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold text-start">Tên tài khoản :</td>
                <td class="px-4 py-3 text-left text-start"><?=$row['TDN']?></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold text-start">Vai trò :</td>
                <td class="px-4 py-3 text-left text-start">
                    <select name="vaitro">
                        <option value=1 <?=$ad?>>Admin</option>
                        <option value=0 <?=$user?>>User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:20px;" class="fw-bold col-xl-4">Mật khẩu:</td>
                <td class="px-3 py-1"><input class="form-control" type="text" id="mk" name="mk" value="<?=$row['pass']?>"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Sửa</button></td>
            </tr>
        </table>
    </form>
    </div>
    <div class="container text-center">
        <a href="trangChuAdmin1.php?id=<?=$screen?>"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>

</body>
</html>