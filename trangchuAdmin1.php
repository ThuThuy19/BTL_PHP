
<!doctype html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login v2</title>
    
		<!-- css -->
		<!--icon-->
		<link href="css/all.min.css" rel="stylesheet">
		<!--CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--css của mình tự viết-->
		<link href="css/main.css" rel="stylesheet">
		<!-- js -->
		<script language ="javascript" src = ""></script>
    <style>
         .header{
             width: 100%;
             height: 100px;
             background:linear-gradient(-90deg,#336692,#fff);
             text-align: center;
             color: #fff;
         }
    </style>
  </head>
  <body>
    <?php
        $sk=[1,2,3,4,5,6,7];
        include("connectDataBase.php");
    ?>
    <div>
    <div>
          <div class="banner">
          <div class="header text-center">
            <a href="trangchuAdmin1.php"><img src="denuituquen.jpg" style="border-radius: 15px;" alt="ảnh logo" height="100px" width="120px" align="left"></a>

            <h1 style ="line-height:100px">QUẢN LÝ NHÀ HÀNG</h1>
          </div> 
      </div>
    <div>
        <nav class="navbar bg-light" >
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU QUẢN LÝ</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="trangchuAdmin1.php?id=<?=$sk[0]?>">Quản lý sản phầm</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trangchuAdmin1.php?id=<?=$sk[1]?>">Quản lý chương trình khuyến mãi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trangchuAdmin1.php?id=<?=$sk[2]?>">Quản lý tài khoản</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trangchuAdmin1.php?id=<?=$sk[3]?>">Quản lý combo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trangchuAdmin1.php?id=<?=$sk[4]?>">Quản lý hóa đơn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trangchuAdmin1.php?id=<?=$sk[5]?>">Quản lý bình luận</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trangchuAdmin1.php?id=<?=$sk[6]?>">Thống kê doanh thu</a>
                </li>
              </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div><img src="hinh-anh-con-de.jpg" alt="" style="width: 100%; margin-top: 20px;"></div>
        </div>
        </div>
        <div class="btn-group dropstart">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              ADMIN
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Cài đặt</a></li>
              <li><a class="dropdown-item" href="#">Chi tiết thông tin</a></li>
              <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
            </ul>
          </div>
        </div>
      </nav>
      </div>
      </div>
      <?php
        if(!isset($_GET['id'])){
            $sd=0;
        }else{
            $sd=$_GET['id'];
        }
        if($sd==1){
            include("admin1.php");
            $sd=null;
        }
        elseif($sd==2){
            include("dsKhuyenMai1.php");
            $sd=null;
        }
        elseif($sd==3){
            include("dsTaiKhoan1.php");
            $sd=null;
        }
        elseif($sd==4){
            include("dsCombo1.php");
            $sd=null;
        }
        elseif($sd==5){
            include("dshoadon1.php");
            $sd=null;
        }
        elseif($sd==6){
          include("dsbinhluan.php");
          $sd=null;
        }
        elseif($sd==7){
          include("thongkedoanhthu.php");
          $sd=null;
        }
    ?>
          <script src="js/bootstrap.bundle.min.js" ></script>
          </div>
  </body>
</html>
