<!DOCTYPE html>
<html lang="en">
<head>
<title>BayBay - Đặt vé và bay ngay"</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BayBay - Đặt vé và bay ngay" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->

<link href="css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->

<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- pop-up css --> 

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- banner css -->
<link rel="stylesheet" href="css/poposlides.css" type="text/css" media="all" />
<!-- //banner css -->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome-icons -->
<link rel="stylesheet" href="css/searchresult.css" />
<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->

</head>
	
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!--/main-header-->
<div class="demo-inner-content" id="home">
	<div class="main_agileits">
	<!--/banner-info-->
	<!-- header -->
		<div> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top"> 
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Tourist</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">BayBay</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="index.php#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Trang chủ</a></li>
							<li><a class="page-scroll scroll" href="#about">Giới thiệu</a></li>
							<li><a class="page-scroll scroll" href="#packages">Hình ảnh</a></li>
							<?php 
								session_start();
								if(isset($_SESSION['taikhoan'])) {
									echo "<li><a href=\"#\">Tài khoản</a></li>
										<li><a href=\"logout.php\">Đăng xuất</a></li>" ;
									$tk = $_SESSION['taikhoan'];
									if ($tk['IsAdministrator']){
										echo "<li><a href=\"admincp\">AdminCP</a></li>" ;
									}
								}
							?>
							<li><a class="page-scroll scroll" href="#contact">Liên hệ</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->

		<!-- banner info-->
		<div class="w3-banner-head-info">
				<div class="container">
				   <div class="banner-text">
				   <span class="fa fa-plane" aria-hidden="true"></span>
						<h2 class="editContent">Open your eyes</h2>
						<p>Cùng BayBay khám phá thế giới. Hãy đặt vé ngay hôm nay để được hưởng nhiều ưu đãi nhất!</p>
						<div class="book-form">
						   <form action="timkiem.php" method="GET">
								<div class="col-md-4">
									<label class="editContent"><span class="fa fa-fighter-jet" aria-hidden="true"></span> Điểm xuất phát</label>
									<select class="form-control" name ="di">
										<option value=0 selected>Chọn điểm khởi hành</option>
										<?php 
											include 'modules/mysqlcon.php';
											$query = "SELECT * FROM sanbay";
											$result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
											while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
										?>
										<option value="<?php echo $elem['IDSanBay']; ?>"><?php echo $elem['TenSanBay']; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-4">
										<label class="editContent"><span class="fa fa-map-marker" aria-hidden="true"></span> Điểm đến</label>
										<select class="form-control" name="den">
											<option value=0 selected>Chọn điểm đến</option>
											<?php 										
												$query = "SELECT * FROM sanbay";
												$result = mysqli_query($con, $query) or die("Mysql error: " . mysqli_error($con));
												while($elem = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
											?>
											<option value="<?php echo $elem['IDSanBay']; ?>"><?php echo $elem['TenSanBay']; ?></option>
											<?php } ?>
										</select>
								</div>
								<div class="col-md-2">
										<label class="editContent"><span class="fa fa-calendar" aria-hidden="true"></span> Ngày bay </label>
									<div>
										<input class="date has Datepicker" id="daNgayBay" name="ngay" name="Text" type="text" value="Start Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '21/11/2017';}" required="">
									</div>
								</div>
								<!-- <div class="col-md-2 dropdown">
										<label class="editContent"><span class="fa fa-user" aria-hidden="true"></span> Số người</label>
									<div class="agileits_w3layouts_main_gridl">
										<input class="text" id="txtSoLuong" name="songuoi" type="text" required="">
									</div>
									<div class="dropdown-content">
										
									</div>
								</div> -->
								<div class="col-md-2">
									  <input type="submit" value="Tìm kiếm">
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
		</div>
		<!-- //banner-info-->
		<div class="slides-box">
			<ul class="slides">
				<li style="background: url(images/s1.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/s2.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/s3.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/s4.jpg) no-repeat;background-size:cover;"></li>
				<li style="background: url(images/s5.jpg) no-repeat;background-size:cover;"></li>
			</ul>
		</div>
		<!-- //banner  -->
	</div>
</div>
 <!--/banner-section-->