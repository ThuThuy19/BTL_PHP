<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <?php
        include("connectDataBase.php");
    ?>
    <div>

<div class="col-10 container text-center" style="margin-top: 10px;" >
    <h3 class="contaire fw-bold text-center">Thông tin sản phẩm</h3>
  <table class="table mt-1">
    <thead>
      <tr>
        <td><a href="themsanpham.html"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Thêm sản phẩm</button></a></td>
      </tr>
      <tr class="table-success">
            <th>STT</th>
         
            <th>Tên sản phẩm</th>
            <th class="text-center">Hình ảnh</th>
            <th class="text-center">Giá</th>
            <th colspan="2" class="text-center">Chưc năng</th>
      </tr>
      </thead>
      <tbody>
      <?php 
            $sql="SELECT * from monan ";
            $rs = mysqli_query($con,$sql);
            $count=0;
            while($row=mysqli_fetch_assoc($rs)){
            $count++;
        ?>
        <tr>
            <td><?=$count?></td>
          
            <td><?=$row['tenMon']?></td>
            <td style="width: 450px;" align="center"><img src="user/image/<?=$row['hinhAnh']?>" width="300px"></td>
            <td class="text-center"><?=$row['giaMon']?></td>
            <td colspan="2" class="text-center">
              <a href="editmonaniterface1.php?id=<?=$row['ID']?>&tenMon=<?=$row['tenMon']?>&hinhAnh=<?=$row['hinhAnh']?>&gia=<?=$row['giaMon']?>&mota=<?=$row['mota']?>" ><button type="button" class="btn btn-info">Sửa <i class="fa-solid fa-pen-to-square"></i></button></a> 
              <button class="btn btn-secondary" type="button" onclick="xoa('<?=$row['ID']?>')">Xóa <i class="fa-solid fa-delete-left"></i></button></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
  </table>
  <a href="trangchuAdmin1.php"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
    <form action="xoamon.php" method="post" id="xoa">
		<input type="hidden" name="id" id="id" >
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