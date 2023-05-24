<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra đơn hàng</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th colspan="3">Danh sách đơn hàng của bạn</th>
        </tr>
        <tr>
            <td>Mã hóa đơn</td>
            <td>Trang thái</td>
            <td>Tổng tiền</td>
        </tr>
        <?php
        session_start();
            include("/xampp/htdocs/myproject/connectDataBase.php");
            $IDKH=$_SESSION['IDKH'];
            
            $sql="SELECT maHD, trangthai, sum(gia) as tong, phanTramKM from hoadon inner join khuyenmai on hoadon.maKM = khuyenmai.maKM where IDKH=$IDKH  GROUP BY maHD, trangthai";
            $rs=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($rs)){
                $trangthai=null;
                if($row['trangthai']==0){
                    $trangthai="Đang chờ xử lý!";
                }
                elseif($row['trangthai']==1){
                    $trangthai="Đơn hàng đã được đặt";
                }
                else{
                    $trangthai ="Đơn hàng đã bị hủy";
                }
                $tientra= ($row['tong'] - ($row['tong']*($row['phanTramKM']/100)));
        ?>
            <tr>
                <td><?=$row['maHD']?></td>       
                <td><?=$trangthai?></td>
                <td><p style="text-decoration: line-through;"><?=$row['tong']?> VND</p><?=$tientra?> VND</td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>