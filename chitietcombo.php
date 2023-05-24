<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết com bô</title>
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
    <div  class=" container  col-xl-8 offed-2">
    <?php
        include("connectDataBase.php");
        $id=$_GET['id'];
        $sql="SELECT * from combo where maCombo=$id";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($rs);
        $ds_id_mon=explode(" ",$row['gomMon']);
        //echo $ds_id_mon[1];
        $ds_ten_mon=" ";
        for($i=1;$i<count($ds_id_mon);$i++){                   
            //echo $x;
            if($ds_id_mon[$i]==null){
                continue;
            }
            else{
                $x=$ds_id_mon[$i];//lấy id món trong combo
                $sql_tenmon="SELECT tenMon from monan where ID=$x";
                $rs_mon=mysqli_query($con,$sql_tenmon);
                if($rs_mon){
                    $row_mon=mysqli_fetch_assoc($rs_mon);
                    $ds_ten_mon.=($row_mon['tenMon'].", ");
                }
                //echo $row_mon['tenMon'] ."<br>";
                
            }
            
        }           
    ?>
    <?php
        $screen = 4;
    ?>
    <h3 class="contarner fw-bold " style="margin-left: 35%; margin-top:3% ">Thông tin chi tiết combo</h3>
    <table class="table" style="margin-top: 30px;">
        <thead class="table-dark">
            <tr>
                <td>Tên combo món ăn</td>
                <td>Các món trong combo</td>
                <td>Ảnh minh họa</td>
                <td>Giá</td>
                <td colspan="2" class="text-center">Chức năng</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$row['tenCombo']?></td>
                <td><?=$ds_ten_mon?></td>
                <td><img src="user/image/<?=$row['anh']?>" width="300px"></td>
                <td><?=$row['GiaCB']?> VND</td>
                <td colspan="2" class="text-center"><a href="editcombo1.php?id=<?=$row['maCombo']?>"><button class="btn btn-primary">Sửa <i class="fa-regular fa-pen-to-square"></i></button></a> <a href="deletecombo.php?id=<?=$row['maCombo']?>"><button class="btn btn-danger">Xóa <i class="fa-solid fa-delete-left"></i></button></a></td>   
            </tr>
        </tbody>
    </table>
    </div>
    <div class="text-center">
        <a href="trangchuAdmin1.php?id=<?=$screen?>"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>
</body> 
</html>