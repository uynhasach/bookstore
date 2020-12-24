
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from sanpham";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from sanpham where masp ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_sanpham";
				</script>
				 <?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma Sp</td>
		 		<td>ten sp</td>
		 		<td>Hinh</td>
		 		<td>Gia</td>
		 		<td>ma ncc</td>
		 		<td>ma loai</td>
		 		<td>ma nxb</td>
		 		<td>so trang</td>
		 		<td>ma tacgia</td>
		 		
		 		
		 		<td>mo ta</td>
		 		
		 		
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maSp"].'</td>
		 				<td>'.$data["tenSp"].'</td>
		 				<td><img src="../img/'.$data["hinh"].'" width="150" height="120"/></td>
		 				<td>'.$data["gia"].'</td>
		 				<td>'.$data["maNcc"].'</td>
		 				<td>'.$data["maLoai"].'</td>
		 				<td>'.$data["maNxb"].'</td>
		 				<td>'.$data["soTrang"].'</td>
		 				<td>'.$data["maTg"].'</td>
		 				
		 				
		 				<td>'.$data["motaSp"].'</td>
		 				<td><a href="index.php?sua=edit_sanpham&id='.$data["maSp"].'">Edit</a> | <a href="index.php?quanly=ql_sanpham&id_delete='.$data["maSp"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		  <br/><br/>
		 <a href="index.php?them=add_sanpham"><button>Them san pham</button></a>
	</div>
</div>