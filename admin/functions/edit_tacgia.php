<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from tacgia where maTg = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maTg = $_POST["maTg"];
      	$tenTg = $_POST["tenTg"];
      	
      	
      	
      		$sql = "UPDATE tacgia set tenTg='$tenTg'  where maTg = '$maTg'";
      		$query = mysqli_query($con, $sql);
      		?>
                        <script>
                              window.location="index.php?quanly=ql_tacgia";
                        </script>
                         <?php
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_tacgia">
            Ma tacgia:
             <input type="text" readonly name="maTg" value="<?php echo $data["maTg"] ?>" />
            <br/> <br/>
		Tên tacgia:
		 <input type="text" name="tenTg" value="<?php echo $data["tenTg"] ?>" />
		<br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
