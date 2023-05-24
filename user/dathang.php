<?php
    session_start();
    include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
    $counthd="SELECT * from hoadon";
    $rs=mysqli_query($con,$counthd);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $tgdat=date("y/m/d/h/i/s");
    
    
     

    if(isset($_SESSION['cart'])){
        $cart=$_SESSION['cart'];
        $sumHD=0;
        $IDKH=$_SESSION['IDKH'];
        foreach($cart as $k => $v){
            $sumHD+=($v['soLuong']*$v['giaMon']);   // lấy ra tổng giá tiền của đơn hàng    
        } 
        

        //tìm mã khuyến mãi
        $ptkm=0;
        $sqlkm="SELECT * from khuyenmai";
        $rskm=mysqli_query($con,$sqlkm);// lấy thời gian khuyến mãi
        $sqlhd="SELECT * from hoadon";
        $rshd=mysqli_query($con,$sqlhd);
        //MAX(phanTramKM) as max_ma_KM
        $sql_sum="SELECT * from khuyenmai " ;
        $rs_sum=mysqli_query($con,$sql_sum);
        $tgdat1=date("y/m/d");
        while($row_sum=mysqli_fetch_assoc($rs_sum)){
            $ngaybd=$row_sum['ngayBD'];
            $ngaykt=$row_sum['ngayKT'];
            
            $tgdat2=("20".$tgdat1);// đặt lại ngày tháng đúng format
            if((strtotime($ngaykt) > strtotime($tgdat2)) and (strtotime($tgdat2)<strtotime($ngaykt)) ){//kiểm tra ngày tháng
                if($ptkm<$row_sum['phanTramKM']){// lấy phần trăm khuyến mãi cao hơn khi có 2 chương trình khuyến mãi cùng lúc
                    $ptkm=$row_sum['phanTramKM'];
                    $maKM=$row_sum['maKM'];
                }
            }            
        }
        

        
        $sqlhd="INSERT into hoadon(gia,tgdat,maKM,IDKH) VALUES($sumHD,'$tgdat',$maKM,$IDKH)";
        mysqli_query($con,$sqlhd);//insert vào bảng hoadon

        foreach($cart as $k => $v){
            $vn=$v['ID'];
            $sln=$v['soLuong']; 
            $hd="SELECT MAX(maHD) as max from hoadon";
            $rshd=mysqli_query($con,$hd);
            $sohd= mysqli_fetch_assoc($rshd);
            $mahd=$sohd['max'];
            $sqlhd_ma="INSERT into hoadon_monan(maHD,maMon,sl) VALUES($mahd, $vn,$sln)";
            mysqli_query($con, $sqlhd_ma);
            
        }    
    }

    



    unset($_SESSION['cart']);
    //echo '<script>alert("Đơn hàng của ban đang được xủ lý")</script>';
    header("Location: trangchu.php");
?>
