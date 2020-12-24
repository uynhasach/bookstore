<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from ncc where maNcc = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maNcc = $_POST["maNcc"];
      	$diachiNcc = $_POST["diachiNcc"];
            $soluongsp = $_POST["soluongsp"];
            $emailNcc = $_POST["emailncc"];
            $sdt = $_POST["sdtncc"];
      	
      	
      	
      		$sql = "UPDATE ncc set  diachiNcc='$diachiNcc',soluongSp='$soluongsp', emailNcc='$emailNcc', sdtNcc='$sdt'  where maNcc = '$maNcc'";
      		$query = mysqli_query($con, $sql);
      		?>
                        <script>
                              window.location="index.php?quanly=ql_ncc";
                        </script>
                         <?php
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_ncc">
            Ma ncc:
            <input type="text" readonly name="maNcc" value="<?php echo $data["maNcc"] ?>" />
            <br/> <br/>
		Địa chỉ ncc:
		 <input type="text" name="diachiNcc" value="<?php echo $data["diachiNcc"] ?>" />
		<br/> <br/>
            Số luojng sp:
             <input type="number" name="soluongsp" value="<?php echo $data["soluongSp"] ?>" />
            <br/> <br/>
            email ncc:
             <input type="email" name="emailncc" value="<?php echo $data["emailNcc"] ?>" />
            <br/> <br/>
            sdt ncc:
             <input type="number" name="sdtncc" value="<?php echo $data["sdtNcc"] ?>" />
            <br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
