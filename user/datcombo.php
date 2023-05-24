<?php
    include("/xampp/htdocs/myproject/connectDataBase.php");
    //đặt hàng bằng combo
    session_start();
    $dsid_combo=$_GET['maCB'];
    $sql="SELECT * from combo where maCombo=$dsid_combo";
    $rs=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($rs)){
        $ds_id_mon=explode(" ",$row['gomMon']);// lấy ra danh sách id của các món trong combo
        //echo $ds_id_mon[1];
        $ds_ten_mon="";
        for($i=1;$i<count($ds_id_mon)-1;$i++){ /// -1 khong biet tai sao             
            //echo $x;
            if($ds_id_mon[$i]==" "){
                continue;
            }
            else{
                $ID=$ds_id_mon[$i];//lấy id món trong combo
                echo "ID: ".$ID."<br>";
                $sql_tenmon="SELECT * from monan where ID=$ID";
                // $rs_mon=mysqli_query($con,$sql_tenmon);
                // if($rs_mon){
                //     $row_mon=mysqli_fetch_assoc($rs_mon);
                //     $ds_ten_mon.=($row_mon['tenMon'].", ");
                // }
                $rs_combo=mysqli_query($con,$sql_tenmon);
                if($rs_combo){
                    $row_mon_combo= mysqli_fetch_array($rs_combo);
                    $tenMon=$row_mon_combo['tenMon'];
                    $gia=$row_mon_combo['giaMon'];
                }
                
                if(isset($_SESSION['cart'])){
                    $cart=$_SESSION['cart'];
                }
                else{
                    $cart=[];
                }

                if(isset($cart)){
                    if(array_key_exists($ID,$cart)){
                        $cart[$ID]['soLuong']++;
                    }
                    else{
                        $cart[$ID]=array("ID"=>$ID,"tenMon"=>$tenMon,"giaMon"=>$gia,"soLuong"=>1);
                    }
                }
                
            }   
            $_SESSION['cart']=$cart;         
        }
    }
    
    header("Location: trangchu.php");
?>