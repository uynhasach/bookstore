<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from loai where maLoai = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maLoai = $_POST["maLoai"];
      	$tenLoai = $_POST["tenLoai"];
      	
      	
      	
      		$sql = "UPDATE loai set tenLoai='$tenLoai'  where maLoai = '$maLoai'";
      		$query = mysqli_query($con, $sql);
      		?>
                        <script>
                              window.location="index.php?quanly=ql_loai";
                        </script>
                         <?php
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_loai">
            Ma loai:
             <input type="text" readonly name="maLoai" value="<?php echo $data["maLoai"] ?>" />
            <br/> <br/>
		Tên loai:
		 <input type="text" name="tenLoai" value="<?php echo $data["tenLoai"] ?>" />
		<br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
