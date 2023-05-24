<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh sách các món ăn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/all.min.css" rel="stylesheet">
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
    .insert{
        background-color: #3c8dbc;
        color: aliceblue;
        border-color: #367fa9;
        text-decoration: none;
        display: block;
        width: 120px;
        height: 40px;
        line-height: 40px;
        margin-bottom: 10px;
        border-radius: 5px;
    }
    .insert:hover{
        color: #fff;
    }
    .a{
        text-decoration: none;
    }
</style>

</head>
<body>
    <div style="margin-top: 100;">
<div class="container mt-3" style="margin-top: 100px;">
<?php
        include("connectDataBase.php");
        $sql="SELECT * from combo";
        $rs=mysqli_query($con,$sql);

    ?>
    
        <h3 class="text-center fw-bold"> Danh sách combo món ăn</h3>
        <a href="themcombo1.php" class="insert"><i class="fa-solid fa-plus"></i> Thêm combo</a>
        <table class="table">
            <thead>
            <tr  class="table-success">
                <th>STT</th>
                <th>Tên combo</th>               
                <th style="padding-left: 40px;">Giá</th>
                <th>Chi tiết</th>
                <th colspan="2" class="text-center">Chức năng</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count=1;
            while($row=mysqli_fetch_assoc($rs)){
            ?>   
            <tr>
                <td><?=$count?></td>
                <td><?=$row['tenCombo']?></td>                
                <td><?=$row['GiaCB']?> VND</td>
                <td><a class="text-decoration-none" href="chitietcombo.php?id=<?=$row['maCombo']?>">Chi tiết</a></td>
                <td class="text-center" colspan="2"><a class="btn btn-primary" href="editcombo1.php?id=<?=$row['maCombo']?>" class="a">Sửa <i class="fa-regular fa-pen-to-square"></i></a> <button onclick="xoa('<?=$row['maCombo']?>')" class=" btn btn-danger" >Xóa <i class="fa-solid fa-delete-left"></i></button></td>
            </tr> 
        <?php   
                $count++;
            }
        ?>
            <tbody>
        </table>
    
    <div class="text-center">
        <a href="trangchuAdmin1.php"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    </div>
    <form action="deletecombo.php" method="post" id="xoa">
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
</div>
</body>
</html>