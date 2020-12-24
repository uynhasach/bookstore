
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from nxb";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from nxb where maNxb ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_nxb";
				</script>
				 <?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma nxb</td>
		 		<td>ten nxb</td>
		 		<td>nam nxb</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maNxb"].'</td>
		 				<td>'.$data["tenNxb"].'</td>
		 				<td>'.$data["namXb"].'</td>
		 				<td><a href="index.php?sua=edit_nxb&id='.$data["maNxb"].'">Edit</a> | <a href="index.php?quanly=ql_nxb&id_delete='.$data["maNxb"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_nxb"><button>Thêm nxb</button></a>
	</div>
</div>