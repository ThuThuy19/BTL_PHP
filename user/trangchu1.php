<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="width: 100%">
    <div  class="text-center">
        <div>
            <div class="menu">
                <ul class="nav justify-content text-bg-danger " style="height: 100px; border-radius: 10px;">
                    <li style="text-align: left;">
                        <img class="d-block rounded" src="tai_chanh.jpg" alt="denuituquen.jpg" style="mask-repeat: no-repeat; width :120px; height: 100px; margin: 0px 30px;">
                    </li>
                    <li class="nav-item ">
                        <a class=" a nav-link active text-bg-danger" style="height: 50px; margin: 30px 30px;" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class=" a nav-link text-bg-danger" style="height: 50px; margin: 30px 30px;" href="#">Món ăn</a>
                    </li>
                    <li class="nav-item">
                        <a class=" a nav-link text-bg-danger" style="height: 50px; margin: 30px 30px;" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class=" a nav-link text-bg-danger" style="height: 50px; margin: 30px 30px;" href="#">Khuyến mãi</a>
                    </li>
                    <li class="nav-item">
                        <a class=" a nav-link text-bg-danger" style="height: 50px; margin: 30px 30px;" href="#">Combo</a>
                    </li>
                    <li class="nav-item" style="display: flex;">
                        <form class="d-flex" role="search" style="width: 200px; height: 30px; margin-top: 35px;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit" style="line-height: 10px;">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-bg-danger" style="height: 50px; margin: 30px 30px;">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="banner" style="margin-top:10px ;">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="width: 100%;" height="400px" src="tai_chanh.jpg" class="d-block w-100 rounded float-start" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="width: 100%;" height="400px" src="thit_phay.jpg" class="d-block w-100 rounded float-start" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="width: 100%;" height="400px" src="thit_phay.jpg" class="d-block w-100 rounded float-start" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>