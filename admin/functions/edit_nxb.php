<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from nxb where maNxb = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maNxb = $_POST["maNxb"];
      	$tenNxb = $_POST["tenNxb"];
            $namXb = $_POST["namXb"];
      	
      	
      	
      		$sql = "UPDATE nxb set tenNxb='$tenNxb', namXb='$namXb'  where maNxb = '$maNxb'";
      		$query = mysqli_query($con, $sql);
      		?>
                        <script>
                              window.location="index.php?quanly=ql_nxb";
                        </script>
                         <?php
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_nxb">
            Ma nxb:
             <input type="text" readonly name="maNxb" value="<?php echo $data["maNxb"] ?>" />
            <br/> <br/>
		Tên nxb:
		 <input type="text" name="tenNxb" value="<?php echo $data["tenNxb"] ?>" />
		<br/> <br/>
            Năm xb:
             <input type="number" name="namXb" value="<?php echo $data["namXb"] ?>" />
            <br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
