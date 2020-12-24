 <?php error_reporting(0); require_once("includes/connection.php");

	 if(isset($_POST["btnThem"]))
      {
            $maKH = $_POST["maKH"];
      	$tenKH = $_POST["tenKH"];
      	$date = $_POST["date"];
      	$sdt     = $_POST["sdt"];
      	$email     = $_POST["email"];
      	$pass = $_POST["pass"];
      	$diachi  = $_POST["diachi"];
      	$gt = $_POST["gt"];

		
      
      
      	if($tenKH=="" || $pass=="" || $date=="" || $email=="" || $diachi==""||$sdt==""||$gt=="")
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO khachhang(maKh,tenKh,emailKh,soDienThoai,diaChi,ngaySinh,gioiTinh, matKhau) values ('$maKH', '$tenKH','$email','$sdt', '$diachi', '$date','$gt','$pass')";
      		$query = mysqli_query($con, $sql);
      		echo 'Thêm thành công';
      	
      	}
      		
      } 
?>


<br/>
<form action="index.php?them=add_khachhang" method="POST" >
      Ma khach hang:
      <input type="text" name="maKH" /><br/><br/>
	Ten khach hang:
	<input type="text" name="tenKH" /><br/><br/>
	Gioi tinh:
	<input type="radio" name="gt" value="0" />Nam &emsp;
	<input type="radio" name="gt" value="1"/>Nu
	<br/><br/>
	Ngay sinh:
	<input type="date" name="date" /><br/><br/>
	email khach hang:
	<input type="email" name="email" /><br/><br/>
	Mat khau:
	<input type="text" name="pass" /><br/><br/>
	Dia chi:
	<input type="text" name="diachi" /><br/><br/>
	So dien thoai:
	<input type="number" name="sdt" /><br/><br/>
	<input style="width:200px;height: 50px;font-size: 18px; border:0;background-color: lightgrey;" type="submit" name="btnThem" value="Add" /><br/><br/>

	
</form>