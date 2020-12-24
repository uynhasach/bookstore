<?php
session_start();
?>

<head>
	<title>Đăng Nhập</title>
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
	<?php   include("includes/connection.php"); ?>
	<?php 
		if(isset($_POST['btnThem']))
		{
			$accad = $_POST['username'];
			$password = $_POST['password']; 

			if($accad =="" && $password =="")
			{
				echo "Thiếu thống tin";
			}
			else
			{
				$sql = "select * from nhanvien where tennv ='$accad' and matkhau ='$password' ";
				$query = mysqli_query($con, $sql);
				$num=mysqli_num_rows($query);
				if($num == 0)
				{
					echo "Tài khoản hoặc mật khẩu không chính xác";
				}
				else
				{
					while( $data["nhanvien"] = mysqli_fetch_array($query))
					{
						$_SESSION["nhanvien"]['manv'] = $data["nhanvien"]['manv'];
						$_SESSION["nhanvien"]['tennv'] = $data["nhanvien"]['tennv'];
						$_SESSION["nhanvien"]['quyen']	= $data["nhanvien"]['quyen'];			
					} 
					?>
					<script>
						window.location="index.php";
					</script>
					<?php
				}
			}
		}

	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="loginnv.php">
					<span class="login100-form-title">
						ĐĂNG NHẬP
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa thực hiện!">
						<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Bạn chưa thực hiện!">
						<input class="input100" type="password" name="password" placeholder="Mật Khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="btnThem">
							Đăng Nhập
						</button>
					</div>
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