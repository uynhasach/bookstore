<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))//Thực thi lệnh khi bấm nút có name="btnThem"
      {
      	$tenNV = $_POST["tenNV"];
      	$pass = $_POST["pass"];
      	$per = $_POST["per"];
      	
      	if( $tenNV=="" || $pass=="" || $per=="")//Xét k dc để rỗng
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO nhanvien(manv,tennv,matkhau,quyen) values (null,'$tenNV', '$pass', '$per')";
                  //Lệnh thêm/ insert trng sql
      		$query = mysqli_query($con, $sql);//kết nối db vs lệnh $sql
      		echo "Thêm thành công";//Thông báo thêm thành công
      	}
      }
 ?>
<br/>
	<form method="POSt" action="index.php?them=add_nhanvien">
		Tên nhan vien:
		 <input type="text" name="tenNV"/>
		<br/> <br/>
            mat khau:
             <input type="text" name="pass"/>
            <br/> <br/>
	Quyen:
	<input type="number" name="per" /><br/><br/>
		<br/><br/>
		
		 <button  type="submit" name="btnThem">Thêm</button>
	    
	</form>
