<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png" />
    <link href="css/all.min.css" rel="stylesheet">
		<!--CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--css của mình tự viết-->
		<link href="css/main.css" rel="stylesheet">
		<!-- js -->
		<script language ="javascript" src = ""></script>
</head>
<body>
    <div class="container text-center">
        <h3 class="fw-bold pt-5">Danh Sách Bình Luận</h3>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Nghề nghiệp</th>
            <th>Nội dung</th>
            <th>Chức năng</th>
        </tr>
        </thead>
        <?php
            include("connectDataBase.php");
            $sql="SELECT * from binhluan";
            $rs=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($rs)){

            
        ?>
        <tbody>
        <tr>
            <td><?=$row['tenkhach']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['nghenghiep']?></td>
            <td><?=$row['noidung']?></td>
            <td><button class="btn btn-danger" onclick="xoa('<?=$row['maBL']?>')">Xóa <i class="fa-solid fa-delete-left"></i></button></td>
        </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
    <form id="xoa" action="deleteBL.php" method="post">
            <input type="hidden" name="maBL" id="maBL">
    </form>
    <script>
        function xoa($id){
            let lt=confirm("Bạn có muốn xóa bình luận này");
            if(lt){
                document.getElementById("maBL").value=$id;
                document.getElementById("xoa").submit();
            }
        }
    </script>
    <a href="trangchuAdmin1.php" class="btn btn-warning"><i class="fa-solid fa-backward"></i> Trở Lại</a>
    </div>
</body>
</html>