<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="basic.css">
    <link rel="stylesheet" href="hi.css">
    <link rel="stylesheet" href="reponsive.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="section.css">
    <link rel="icon" type="image/png" href="logo.png" />

    <title>Dê Núi Cúi Đầu</title>
</head>

<body></body>
    <div id="swap">
        <!-- Begin: header -->
        <div id="page-header">
            <div class="header">
                <div class="container">
                    <div class="header__top">
                        <form class="header__search" action="timkiem.php" method="post">
                            <input type="search" name="search"/>
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <div class="header__icon">
                            <a href="giohanginterface.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            <a href="donhang.php"><i class="fa-solid fa-truck-fast"></i></a>
                        </div>
                    </div>

                    <div class="header-inner">
                        <a href="trangchu.php" class="header__logo">
                            <span  class="shop-logo"></span>
                            <span class="shop-name">DÊ NÚI TÚ QUYÊN</span>
                        </a>
                        <div class="header__menu">
                            <div class="menu d-flex align-items-center">
                                <span class="respon-menu"><i class="fas fa-bars"></i>MENU
                            </div>
                        </div>
                        <div class="header__nav">
                            <ul class="nav-bar">
                                <li><a class="nav-item active" href="trangchu.php">Trang chủ</a></li>
                                <li><a class="nav-item" href="#monAn">Món Ăn</a></li>
                                <li><a class="nav-item" href="#lienHe">Liên Hệ</a></li>
                                <li><a class="nav-item" href="chuongtrinhKM.php">Khuyến mãi</a></li>
                                <li><a class="nav-item" href="xemcombo.php">Combo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: header -->

        <!-- Banner -->
        <div id="banner-home">
            <div class="container">
            </div>
        </div>
    </div>
    <!-- End banner -->

        <!-- Begin: feedback-->
        <div class="feedback content bg-light">
        <div class="container">
        <header class="section-header">
			<h2>Một số ý kiến về món ăn</h2>
			<!-- <p></p> -->
		</header>
        </div>
        <div class="container conten_main">
            <div class="row feedback__list" data-aos="fade-up">
                <input type="radio" name="radio-btn" id="radio1" class="radio__check"><!-- //name = id cua binh luan  -->
                <input type="radio" name="radio-btn" id="radio2" class="radio__check">
                <input type="radio" name="radio-btn" id="radio3" class="radio__check">
                <input type="radio" name="radio-btn" id="radio4" class="radio__check">
                <?php
                    include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
                    $sql_cm="SELECT * from binhluan";
                    $sql_mm="SELECT MIN(maBL) as min, MAX(maBL) as max from binhluan";// lấy maBL lớn và nhỏ nhất để có thể quay trở lại ban đầu
                    $rs_mm=mysqli_query($con,$sql_mm);
                    $row_mm=mysqli_fetch_assoc($rs_mm);

                    $rs_cm=mysqli_query($con, $sql_cm);
                    while($row_cm=mysqli_fetch_assoc($rs_cm)){
                        if($row_cm['maBL']==$row_mm['min']){
          
                ?>
                        <div class="feedback__item feedback1">
                            <div>
                                <div class="feedback__icon"><i class="fas fa-quote-left"></i></div>
                                <div class="feedback__text">
                                    <p class="feedback__desc"><?=$row_cm['noidung']?></p><!--Rất thích không gian của quán, các món ăn nhiều sự lựa chọn, các đồ ăn vặt rất ngon. Sẽ ủng hộ quán nhiều.-->
                                    <div class="feedback__client">
                                        <div class="client__img img"
                                            style="background-image:url(avartar1.jpeg)">
                                        </div>
                                        <div class="client__infor">
                                            <h5 class="name"><?=$row_cm['tenkhach']?></h5>
                                            <span class="position"><?=$row_cm['nghenghiep']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                        }
                        if($row_cm['maBL']==$row_mm['max']){
          
                ?>
                        <div class="feedback__item respon__pass">
                            <div>
                                <div class="feedback__icon respon__pass"><i class="fas fa-quote-left"></i></div>
                                <div class="feedback__text">
                                    <p class="feedback__desc"><?=$row_cm['noidung']?></p><!--Lần đầu tiên ăn ở quán tôi khá ấn tương đến cái tên của nó, Và giờ tôi đã hiểu lý do. Nhân viên quá dễ thương còn rất tinh tế nữa-->
                                    <div class="feedback__client">
                                        <div class="client__img img"
                                            style="background-image:url(avartar1.jpeg)">
                                        </div>
                                        <div class="client__infor">
                                            <h5 class="name"><?=$row_cm['tenkhach']?></h5>
                                            <span class="position"><?=$row_cm['nghenghiep']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                        }
                        
                        else{
                ?>
                            <div class="feedback__item ">
                            <div>
                                <div class="feedback__icon"><i class="fas fa-quote-left"></i></div>
                                <div class="feedback__text">
                                    <p class="feedback__desc"><?=$row_cm['noidung']?></p>
                                    <div class="feedback__client">
                                        <div class="client__img img"
                                            style="background-image:url(avartar2.jpg)">
                                        </div>
                                        <div class="client__infor">
                                            <h5 class="name"><?=$row_cm['tenkhach']?></h5>
                                            <span class="position"><?=$row_cm['nghenghiep']?></span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                <?php
                        }
                    }
                ?>
                <div class="row navigation_manual">
                    <div class="col">
                        <div class="choose__list d-flex justify-content-center">
                            <label for="radio1" class="choose__item it1"></label>
                            <label for="radio2" class="choose__item it2"></label>
                            <label for="radio3" class="choose__item it3"></label>
                            <label for="radio4" class="choose__item it4"></label>
                        </div>
                    </div>
                </div> 
            </div>
            
        </div>

    </div>
    <!-- End: feedback-->

        <!-- Begin: section  -->
        <div class="content">
        <div class="Gallery" id="monAn">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate" data-aos="fade-up">
                        <h2>DANH SÁCH SẢN PHẨM</h2>
                    </div>
                </div>
                <div class="row">
                <?php
                    
                    $search = $_POST['search'];
                    if($search){

                    
                    $sql="SELECT * from monan where tenMon LIKE '%$search%' ";
                    $data = mysqli_query($con, $sql);
                        if(mysqli_num_rows($data)>0){
                            while($row = mysqli_fetch_assoc($data)){
                    ?>
                                <div class="col-md-4">
                                    <div class="product-item mb-4 img d-flex align-items-end" data-aos="fade-up"style="background-image:url(image/<?=$row['hinhAnh']?>)">
                                        <!-- Xem chi tiết -->
                                        <a href="chitietmonan.php?id=<?=$row['ID']?>" class="ovelay"></a>
                                        <div class="product-desc w-100 px-4">
                                            <div>
                                                <p><?=$row['tenMon']?></p>
                                                <span><?=$row['giaMon']?> VNĐ</span>
                                            </div>
                                            <a href="giohang.php?id=<?=$row['ID']?>&maMon=<?=$row['maMon']?>&tenMon=<?=$row['tenMon']?>&gia=<?=$row['giaMon']?>" class="product-icon">
                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }       
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End: section -->

    <!-- Begin: section  -->
    <div class="content bg-light" id="combo">
        <div class="Gallery">
            <div class="container">
                <div class="row d-flex justify-content-center pb-5 mb-3">
                <header class="section-header">
                        <h2>Danh sách combo</h2>
                        <!-- <p></p> -->
                    </header>
                </div>
                <div class="row d-flex justify-content-center">
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
                        $x=$ds_id_mon[$i];//lấy id món trong combo
                        $sql_tenmon="SELECT tenMon from monan where ID=$x";
                        $rs_mon=mysqli_query($con,$sql_tenmon);
                        if($rs_mon){
                            $row_mon=mysqli_fetch_assoc($rs_mon);
                            $ds_ten_mon.=($row_mon['tenMon'].", ");
                        }
                        //echo $row_mon['tenMon'] ."<br>";
                        
                    }
                    
                }           
        ?>
                                <div class="col-md-4">
                                    <div class="product-item mb-4 img d-flex align-items-end" data-aos="fade-up" style="background-image:url(image/<?=$row['anh']?>">
                                        <!-- Xem chi tiết -->
                                        <a href="chitietcombo.php?id=<?=$row['maCombo']?>" class="ovelay"></a>
                                        <div class="product-desc w-100 px-4">
                                            <div>
                                                <p><?=$row['tenCombo']?></p>
                                                <span><?=$row['GiaCB']?> VNĐ</span>
                                            </div>
                                            <a href="datcombo.php?maCB=<?=$row['maCombo']?>" class="product-icon">
                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                $count++;
            }
        ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End: section -->

        <!-- ======= Event List Section ======= -->
    <!-- ======= Event List Section ======= -->
    <section id="event-list" class="event-list content">
      <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
                    <header class="section-header">
                        <h2>Danh sách khuyến mãi</h2>
                        <!-- <p></p> -->
                    </header>
                </div>
        <div class="row d-flex justify-content-center">
          
            
        <?php
            include("\\xampp\\htdocs\\myproject\\connectDataBase.php");
            $sql="SELECT * from khuyenmai";
            $rs=mysqli_query($con,$sql);
            $count=1;
            while($row=mysqli_fetch_assoc($rs)){
        ?>
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="image/khuyenmai.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?=$row['tenKM']?></h5>
                <div class="text-center d-flex justify-content-center"><p class="card-sale"><?=$row['phanTramKM']?>%</p></div>
                <div class="card-text d-flex justify-content-between">
                    <div class="start text-center">
                        <span class="card-time">Thời gian bắt đầu</span>
                        <br>
                        <?=$row['ngayBD']?>
                    </div>
                    <div class="start text-center">
                        <span class="card-time">Thời gian kết thúc</span>
                        <br>
                        <?=$row['ngayKT']?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?php
            $count++;
            }
        ?>

        </div>
      </div>
    </section><!-- End Event List Section -->

    <!-- ======= Contact Section ======= -->
    <section id="lienHe" class="contact content bg-light">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center pb-5 mb-3">
        <header class="section-header">
                        <h2>Liên hệ và phản hồi</h2>
                        <!-- <p></p> -->
                    </header>
                </div>
        <div class="row gy-4">
            <?php
                    $contact ="SELECT * from lienhe";
                    $rscontact=mysqli_query($con,$contact);
                    $row_contact=mysqli_fetch_assoc($rscontact);
                ?>
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
             <i class="fa-solid fa-location-dot"></i>
              <h3>Địa chỉ:</h3>
              <p><?=$row_contact['diachi']?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="fa-regular fa-envelope"></i>
              <h3>Email:</h3>
              <p><?=$row_contact['email']?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-phone"></i>
              <h3>Số điện thoại:</h3>
              <p>+84 <?=$row_contact['sdt']?></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4737883168486!2d105.73291811462315!3d21.05373098598487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1673030265126!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="binhluan.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Nghề nghiệp" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Bình luận" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Gửi đánh giá</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- Begin: footer -->
    <footer class="footer" id="lienHe">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Petsitting</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <ul class="ftco-footer-social p-0" data-aos="fade-up">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><span><i class="fab fa-facebook-f"></i></a></span>
                        </li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><span><i class="fab fa-twitter"></i></a></span>
                        </li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><span><i class="fab fa-instagram"></i></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Latest News</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded"
                            style="background-image: url('assets/imgs/ximage_1.jpg.pagespeed.ic.w2Is-SAor5.webp');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="blog-single.html">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded"
                            style="background-image: url('assets/imgs/xabout-2.jpg.pagespeed.ic.wVnPtzvHjW.webp');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="blog-single.html">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="home.html" class="py-2 d-block">Home</a></li>
                        <li><a href="about.html" class="py-2 d-block">About</a></li>
                        <li><a href="services.html" class="py-2 d-block">Services</a></li>
                        <li><a href="veterinarian.html" class="py-2 d-block">Works</a></li>
                        <li><a href="blog.html" class="py-2 d-block">Blog</a></li>
                        <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="contact.html#map_located" class="footer-heading-link"><span class="icon fa fa-map"></span><span class="text"><?=$row_contact['diachi']?></span></a></li>
                            <li><a href="tel:+23923929210" class="footer-heading-link"><span class="icon fa fa-phone"></span><span class="text"><?=$row_contact['sdt']?></span></a></li>
                            <li><a href="mailto:info@yourdomain.com" class="footer-heading-link"><span class="icon fa fa-paper-plane"></span><span class="text"><span
                                            class="__cf_email__"
                                            data-cfemail="01686f676e41786e7473656e6c60686f2f626e6c"><?=$row_contact['email']?></span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- End: footer /-->
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="basic.js"></script>
</body>

</html>
<!--  -->