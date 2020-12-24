
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from ncc";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from ncc where maNcc ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_ncc";
				</script>
				 <?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma ncc</td>
		 		<td>ten ncc</td>
		 		<td>so luong sp</td>
		 		<td>email</td>
		 		<td>sdt ncc</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maNcc"].'</td>
		 				<td>'.$data["diachiNcc"].'</td>
		 				<td>'.$data["soluongSp"].'</td>
		 				<td>'.$data["emailNcc"].'</td>
		 				<td>'.$data["sdtNcc"].'</td>
		 		
		 				<td><a href="index.php?sua=edit_ncc&id='.$data["maNcc"].'">Edit</a> | <a href="index.php?quanly=ql_ncc&id_delete='.$data["maNcc"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_ncc"><button>Thêm ncc</button></a>
	</div>
</div>