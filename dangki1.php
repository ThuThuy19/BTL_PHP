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
  </head>
  <body>
		<div class = "container-xl">
			<div class = "row">
				<!--<div class = "col-3"></div>-->
				<div class = "col-xl-6 offset-xl-3">
					<div class = "login-title text-bg-primary py-3 mt-5">
						<h3 class ="text-center fw-bold textt-uppercase"><i class="fa-solid fa-user-tie"></i>&nbsp;Đăng ký</h3>
					</div>
				</div>
				<!--<div class = "col-3"></div>-->
			</div>
			
			<div class ="row">
				<div class = "col-xl-6 offset-xl-3">
					<div class = "login-form text-bg-light py-2">
						<form class = "px-3" action="dangki.php" method="post">
							<div class = "row py-2 ">
								<div class = "col-sm-4 text-end fs-5">Usename</div>
								<div class = "col-sm-6">
									<input type = "text" class= "form-control" name = "tentk" id = ""/>
								</div>
							</div>
							<div class ="row py-2">
								<div class = "col-sm-4 text-end fs-5">Password</div>
								<div class = "col-sm-6">
									<input type = "text" class= "form-control" name = "xao" id = ""/>
								</div>
							</div>
							<div class ="row py-2">
								<div class = "col-sm-8 offset-sm-2 fs-5">
									<input type ="checkbox" class="form-check-input" id= "chkSave"/>
									<label for ="chkSave" class = "form-check-lable">
										Save information on this PC?
									</label>
								</div>
							</div>
							<div class ="row py-2">
								<div class ="col-sm-12 text-center fs-5">
									<a href ="#" class="text-decoration-none"><i class="fa-solid fa-key"></i> Forget password?</a>
									&nbsp;&nbsp;|&nbsp;&nbsp
									<a href ="#" class="text-decoration-none"><i class="fa-solid fa-circle-question"></i> Help!</a>
								</div>
							</div>
							
							<div class ="row py-3">
								<div class ="col-sm-12 text-center fs-5">
									<a href="login1.html" class = "btn btn-primary fw-semibold"><i class="fa-solid fa-xmark"></i> Exit</a>
									<button type = "submit" class = "btn btn-secondary fw-semibold" ><i class="fa-solid fa-right-to-bracket"></i> Đăng ký</button>
								</div>
							</div>
							
							<div class ="row py-3">
								<div class ="col-sm-11 text-end fs-5">
									<a href="#" class ="text-decoration-none"><i class="fa-solid fa-language"></i> Vietnamese</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>