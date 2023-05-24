<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem combo</title><link href="css/all.min.css" rel="stylesheet">
    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--css của mình tự viết-->
    <link href="css/main.css" rel="stylesheet">
    <!-- js -->
    <script language="javascript" src=""></script>
</head>
<body>
    <h1 class="container text-center " style="margin-top:50px">Danh sách chương trình khuyến mãi</h1>
    <div class="col-11 container text-center">
        
    <table border="1" cellspacing="" class="table">
       
        <thead class="table-dark">
        <tr>
            <td>STT</td>
            <td>Tên combo</td>
            <td>Các món trong combo</td>
            <td>Ảnh minh họa</td>
            <td>Giá</td>
            <td>Tùy chọn</td>
        </tr>
        </thead>
        <?php
        $count=1;
            include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
            $sql="SELECT * from combo";
            $rs=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($rs)){
                $ds_id_mon=explode(" ",$row['gomMon']);
                //echo $ds_id_mon[1];
                $ds_ten_mon="";
                for($i=1;$i<count($ds_id_mon);$i++){                   
                    //echo $x;
                    if($ds_id_mon[$i]==" "){
                        continue;
                    }
                    else{
                        // $x=$ds_id_mon[$i];//lấy id món trong combo
                        $sql_tenmon="SELECT tenMon from monan";
                        $rs_mon=mysqli_query($con,$sql_tenmon);
                        if($rs_mon){
                            $row_mon=mysqli_fetch_assoc($rs_mon);
                            $ds_ten_mon.=($row_mon['tenMon'].", ");
                        }
                        //echo $row_mon['tenMon'] ."<br>";
                        
                    }
                    
                }           
        ?>
        <tbody>
            <tr>
                <td><?=$count?></td>
                <td><?=$row['tenCombo']?></td>
                <td><?=$ds_ten_mon?></td>
                <td><img src="image/<?=$row['anh']?>" width="300px" height="270px" style="object-fit: contain; border-radius: 8px" /></td>
                <td><?=$row['GiaCB']?> VND</td>
                <td><a href="datcombo.php?maCB=<?=$row['maCombo']?>"><button>Thêm hàng vào giỏ</button></a></td>
            </tr>
        </tbody>
        <?php
                $count++;
            }
        ?>
    </table>
    </div>
</body>
</html>