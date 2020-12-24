<div class="row">
	<div class="col-12">
		<?php
			$sql = "select * from nhanvien";// Chọn tất cả thuộc tính trong nhanvien/ nhân viên
			$query = mysqli_query($con, $sql);//Kết nối database với lệnh sql

			
			if(isset($_GET['id_delete']))//Kiểm tra id nhân viên cần xóa
			{
				if($_GET['id_delete']==$_SESSION["nhanvien"]["manv"])
				{
					echo "Không thể xóa tài khoản admin đang đăng nhập";
				}
				else
				{
				$sql = "delete from nhanvien where manv =".$_GET['id_delete'];//Xóa nhân viên có mã nhân viên bằng vs id cần xóa
				$query = mysqli_query($con, $sql);//Kết nối database với lệnh sql
				header("location:index.php?quanly=ql_nhanvien");//trả về trang đang ở sau khi thực thi lệnh
				}
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>maNhanVien</td>
		 		<td>tenNhanVien</td>
		 		<td>mat khau</td>
		 		<td>Quyen</td>
		 		
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query))//Vòng lặp hiện dữ liệu có trong db
		 		{
		 			echo '<tr>
		 				<td>'.$data["manv"].'</td>
		 				<td>'.$data["tennv"].'</td>
		 				<td>'.$data["matkhau"].'</td>
		 				<td>'.$data["quyen"].'</td>
		 				
		 			
		 				<td><a href="index.php?sua=edit_nhanvien&id='.$data["manv"].'">Edit</a> | <a href="index.php?quanly=ql_nhanvien&id_delete='.$data["manv"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_nhanvien"><button>Thêm nhân viên</button></a>
	</div>
</div>