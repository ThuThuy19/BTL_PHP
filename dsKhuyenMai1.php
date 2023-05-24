<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chương trình khuyến mãi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <style>
        </style>
</head>
<body>
    <div class="container" style="margin-top: 10px;">
    <?php
        include("connectdataBase.php");  
    ?>
    <h3 class="container text-center fw-bold">Danh sách chương trình khuyến mãi</h3>
    <a href="KHUYENMAI1.HTML"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Thêm khuyến mãi</button></a>
        <table class="table" style="margin-top: 10px;">
            <thead class="table-success">
        
                <tr>
                    <th>STT</th>
                    <th>Tên chương trình khuyễn mãi</th>
                    <th>Ngày bắt đầu khuyễn mãi</th>
                    <th>Ngày kết thúc khuyễn mãi</th>
                    <th>Phần trăm khuyễn mãi</th>
                    <th colspan="2">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * from khuyenmai ";
                        $rs = mysqli_query($con,$sql);
                        $count=0;
                        while($row=mysqli_fetch_assoc($rs)){
                            $count++;
                        ?>
                        <tr>                   
                            <td><?=$count?></td>                   
                            <td><?=$row['tenKM']?></td>
                            <td><?=$row['ngayBD']?></td>
                            <td><?=$row['ngayKT']?></td>
                            <td><?=$row['phanTramKM']?> %</td>
                            <td><a class="a1" href="editkhuyenmai1.php?id=<?=$row['maKM']?>"><button class="btn btn-info">Sửa <i class="fa-regular fa-pen-to-square"></i></button></a></td>
                            <td><button class="btn btn-secondary" onclick="xoa('<?=$row['maKM']?>')">Xóa <i class="fa-solid fa-delete-left"></i></button></td>
                        </tr>   
                        <?php          
                        }
                    ?>
                </tbody>
        </table>
    <div class="container text-center">
        <a class="text-bg-warning a2" href="trangchuAdmin1.php"><button class="btn btn-danger"> <i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>
  <form action="deletekhuyenmai.php" method="post" id="xoa">
		<input type="hidden" name="id" id="id">
	</form>
    <script type="text/javascript">
		function xoa(id){
			let tl = confirm("Bạn có muốn xóa thật không?");
			if(tl){
				//gửi form xoa lên server
				document.getElementById("id").value = id;
				document.getElementById("xoa").submit();
				//xóa thật. Gửi request đến server
			}
		}
    </script>
</div>

</body>
</html>
