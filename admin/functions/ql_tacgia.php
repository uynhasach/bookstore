
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from tacgia";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from tacgia where maTg ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				
				?>
				<script>
					window.location="index.php?quanly=ql_tacgia";
				</script>
				 <?php
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma tacgia</td>
		 		<td>ten tacgia</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maTg"].'</td>
		 				<td>'.$data["tenTg"].'</td>
		 				<td><a href="index.php?sua=edit_tacgia&id='.$data["maTg"].'">Edit</a> | <a href="index.php?quanly=ql_tacgia&id_delete='.$data["maTg"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_tacgia"><button>Thêm tác giả</button></a>
	</div>
</div>