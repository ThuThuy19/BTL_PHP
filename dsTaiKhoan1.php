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

<div class="container mt-3" >
<h3 class="container text-center fw-bold">Quản lý tài khoản</h3>
  <table class="table">
    <thead class="table-success">
      <tr>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Vai trò</th>
        <th colspan="2" class="text-center">Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include("connectDataBase.php");
            $sql="SELECT * from account";
            $rs=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?=$row['TDN']?></td>
            <td><?=$row['pass']?></td>
            <td><?=$row['TYPE']?></td>
            <td colspan="2" class="text-center"><button onclick="xoa('<?=$row['IDKH']?>')" class="btn btn-secondary"> Xóa tài khoản <i class="fa-solid fa-delete-left"></i></button> <a href="edittaikhoan1.php?id=<?=$row['IDKH']?>"><button class="btn btn-info">Sửa <i class="fa-regular fa-pen-to-square"></i></button></a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
  </table>
  <div class="container text-center">
      <a href="trangchuAdmin1.php"><button class="btn btn-danger"><i class="fa-solid fa-backward"></i> Trở lại</button></a>
  </div>
  <form action="deletetaikhoan.php" method="post" id="xoa">
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