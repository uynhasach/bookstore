<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))//Gỡ lỗi
{
      $_GET["id"] = "undefine";
}
      $sql1 = "select * from nhanvien where manv = '$_GET[id]'";//Chọn tất cả thuộc tính của nhanvien có mã id khi bấm ở ql_nhanvien
      $query1 = mysqli_query($con, $sql1);
      $data1 = mysqli_fetch_array($query1);
      if(isset($_POST["btnSua"]))//Thực thi lệnh khi bấm nút có name="btnSua"
      {
            $maad = $_POST["maad"];
      	$tenNV = $_POST["tenNV"];
      	$pass = $_POST["pass"];
      	$per = $_POST["per"];
      	
      	
      		$sql = "UPDATE nhanvien set tennv='$tenNV',matkhau='$pass', quyen='$per' where manv = '$maad'";//Lệnh cập nhật/ sửa trong sql
      		$query = mysqli_query($con, $sql);//Kết nối db với lệnh $sql
      		?>
                        <script>
                              window.location="index.php?quanly=ql_nhanvien";
                        </script>
                         <?php
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_nhanvien">
            Ma nhan vien:
             <input type="text" readonly name="maad" value="<?php echo $data1["manv"] ?>" />
            <br/> <br/>
		Tên nhan vien:
		 <input type="text" name="tenNV" value="<?php echo $data1["tennv"] ?>" />
		<br/> <br/>
            mat khau:
             <input type="text" name="pass" value="<?php echo $data1["matkhau"] ?>"/>
            <br/> <br/>
	Quyen:
	<input type="number" name="per" value="<?php echo $data1["quyen"] ?>"/><br/><br/>
		<br/><br/>
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
