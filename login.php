<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
	<?php
		session_start();
		if(isset($_SESSION['taikhoan'])) {
			header('Location: index.php');
			exit();
		}
	?>
    <body>
		
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Đăng nhập &amp; Đăng ký</strong></h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Đăng nhập</h3>
	                            		<p>Điền tài khoản và mật khẩu của bạn:</p>
										<?php
											include 'modules/mysqlcon.php'; 
											if(isset($_POST['submitDangNhap'])) {
												$taikhoan = $_POST['form-username'];
												$matkhau = md5($_POST['form-password']);
												$checkQuery = "SELECT * FROM taikhoan
																WHERE Username = '{$taikhoan}' AND Password='{$matkhau}'";
												$result = mysqli_query($con, $checkQuery);
												if (mysqli_num_rows($result) == 0){
													echo "<p style=\"color:red\">Tên đăng nhập hoặc tài khoản không đúng!</p>";
												} else {
													$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
													
													$_SESSION['taikhoan'] = $row;		
													header('Location: index.php');	
													exit();										
												}
											}
										?>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" name="frmDangNhap" action="login.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Tài khoản</label>
				                        	<input type="text" name="form-username" placeholder="Tài khoản..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Mật khẩu</label>
				                        	<input type="password" name="form-password" placeholder="Mật khẩu..." class="form-password form-control" id="form-password">
				                        </div>
										<input type="hidden" name="submitDangNhap" id="submitDangNhap" value="1" />
				                        <button type="submit" class="btn">Đăng nhập</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Đăng ký</h3>
	                            		<p>Chưa có tài khoản?</p>
										<?php											
											if(isset($_POST['submitDangKy'])) {
												$taikhoan = $_POST['taikhoan'];
												$matkhau = md5($_POST['matkhau']);
												$hoten = $_POST['hoten'];
												$email = $_POST['email'];
												$sodienthoai = $_POST['sodienthoai'];
												$diachi = $_POST['diachi'];
												$checkQuery = "SELECT * FROM taikhoan
																WHERE Username = '{$taikhoan}'";
												if (mysqli_num_rows(mysqli_query($con, $checkQuery)) > 0){
													echo "<p style=\"color:red\">Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác</p>";
												} else {
													$insertQuery = "INSERT INTO taikhoan(username, password, hoten, email, sodienthoai, diachi)
																	VALUES('{$taikhoan}', '{$matkhau}', '{$hoten}', '{$email}','{$sodienthoai}', '{$diachi}')";
													$result = mysqli_query($con, $insertQuery) or die("Mysql error: " . mysqli_error($con));
												}
											}
										?>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" name="frmDangKy" action="login.php" method="POST" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="taikhoan">Tài khoản</label>
				                        	<input type="text" name="taikhoan" placeholder="Tài khoản..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="matkhau">Mật khẩu</label>
				                        	<input type="password" name="matkhau"  placeholder="Mật khẩu..." class="form-last-name form-control" id="form-last-name">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="hoten">Họ tên</label>
				                        	<input type="text" name="hoten" placeholder="Họ tên..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group"> 
				                        	<label class="sr-only" for="email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="sodienthoai">Email</label>
				                        	<input type="text" name="sodienthoai" placeholder="Số điện thoại..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="diachi">Địa chỉ</label>
				                        	<textarea name="diachi" placeholder="Địa chỉ..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
										<input type="hidden" name="submitDangKy" id="submitDangKy" value="1" />
				                        <button type="submit" class="btn">Đăng ký</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

       
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>