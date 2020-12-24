

<head>
	<title>Đăng Ký</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_login.css">
	<link rel="stylesheet" type="text/css" href="css/main_login.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	   include("includes/connection.php"); ?>
	<?php 
		if(isset($_POST['btnDK']))
		{
		$maKH = rand();
      	$username = $_POST["username"];
      	$date = $_POST["date"];
      	$sdt     = $_POST["sdt"];
      	$email     = $_POST["email"];
      	$password = $_POST["password"];
      	$diachi  = $_POST["diachi"];
      	$gt = $_POST["gt"];

		
      
      
      	if($username=="" || $password=="" || $date=="" || $email=="" || $diachi==""||$sdt==""||$gt=="")
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO khachhang(maKh,tenKh,emailKh,soDienThoai,diaChi,ngaySinh,gioiTinh, matKhau) values ('$maKH', '$username','$email','$sdt', '$diachi', '$date','$gt','$password')";
      		$query = mysqli_query($conn, $sql);
      		echo 'Thêm thành công';
      	
      	}
		}

	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="register.php">
					<span class="login100-form-title">
						ĐĂNG KÝ
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa thực hiện!">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Bạn chưa thực hiện!">
						<input class="input100" type="password" name="password" placeholder="Mật Khẩu">
						<span class="focus-input100"></span>
					</div>
					<br/>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa thực hiện!">
						<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
					</div>
					<div class="" data-validate="Bạn chưa thực hiện!">
						Giới tính:&nbsp;
						<input  type="radio" name="gt" value="0"/>&nbsp;Nam
						<input  type="radio" name="gt" value="1"/>&nbsp;Nữ 
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa thực hiện!">
						<input class="input100" type="number" name="sdt" placeholder="Số điện thoại">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa thực hiện!">
						<input class="input100" type="text" name="diachi" placeholder="địa chỉ">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa thực hiện!">
						<input class="input100" type="date" name="date" placeholder="Ngày sinh">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="btnDK">
							Đăng Ký
						</button>
					</div>
					<br/>
					<a href="login.php"><b>Trở về đăng nhập</b></a>
					<br/><br/>

				
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main_login.js"></script>

</body>
</html>