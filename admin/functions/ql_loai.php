
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from loai";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from loai where maLoai ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_loai";
				</script>
				 <?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma loai</td>
		 		<td>ten loai</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maLoai"].'</td>
		 				<td>'.$data["tenLoai"].'</td>
		 				<td><a href="index.php?sua=edit_loai&id='.$data["maLoai"].'">Edit</a> | <a href="index.php?quanly=ql_loai&id_delete='.$data["maLoai"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_loai"><button>Thêm loại</button></a>
	</div>
</div>