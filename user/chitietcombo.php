<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Combo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png" />
    <link href="css/all.min.css" rel="stylesheet">
		<!--CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--css của mình tự viết-->
		<link href="css/main.css" rel="stylesheet">
		<!-- js -->
		<script language ="javascript" src = ""></script>

        <style>
            .product-icon {
                
                border-radius:8px;

            }

            .product-icon:hover {
                opacity: 1;
                color: #fff;
                box-shadow: 0 0 12px rgba(255, 255, 255, 0.6);
            }
        </style>
</head>
<body>
    <div class="container" style="margin-top:20px">
    <?php
        include("/xampp/htdocs/myproject/connectDataBase.php");
        $id=$_GET['id'];
        $sql="SELECT * from combo where maCombo=$id";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($rs);
        $ds_id_mon=explode(" ",$row['gomMon']);
                //echo $ds_id_mon[1];
        $ds_ten_mon="";
        for($i=1;$i<count($ds_id_mon);$i++){                   
            //echo $x;
            if($ds_id_mon[$i]==" "){
                continue;
            }
            else{
                $x=$ds_id_mon[$i];//lấy id món trong combo
                if($x){
                $sql_tenmon="SELECT tenMon from monan where ID=$x";
                $rs_mon=mysqli_query($con,$sql_tenmon);
                if($rs_mon){
                    $row_mon=mysqli_fetch_assoc($rs_mon);
                    $ds_ten_mon.=($row_mon['tenMon'].", ");
                }
            }
                //echo $row_mon['tenMon'] ."<br>";
                
            }
            
        }  
    ?>
    <table class="table">
        <thead class="table-danger">
        <tr class="text-center">
            <th colspan="2" style="font-size: 32px; font-weight: 600;">Thông tin chi tiết combo</th>
        </tr>
        </thead>
        <tbody>
        <tr rowspan="2">
            <td width="40%"><img style="width:100%" src="image/<?=$row['anh']?>"></td>
            <td>
                <p style="margin-top: 64px; font-size: 24px; font-weight: 600;">Tên combo : <?=$row['tenCombo']?></p>
                <p style="font-size: 18px; font-weight: 500; opacity: 0.7">Giá : <?=$row['GiaCB']?> VND</p>
                <p style="font-size: 18px; font-weight: 500;">Danh sách món: <?=$ds_ten_mon?></p>
                <a href="datcombo.php?maCB=<?=$row['maCombo']?>" class="product-icon btn btn-info">
                    Thêm vào giỏ hàng <i class="fa fa-shopping-cart mt-2" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        </tbody>
        </table>
        <div style="text-align: center;"><a href="trangchu.php" ><button class="btn btn-dark"><i class="fa-solid fa-backward me-2"></i> Trở lại</button></a></div></div>
        </div>
</body>
</html>