<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      	$tenTg = $_POST["tenTg"];
      	$maTg = $_POST["maTg"];
      
      	
      	if( $maTg=="" || $tenTg=="" )
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO tacgia(maTg, tenTg) values ('$maTg','$tenTg')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
	<form method="POSt" action="index.php?them=add_tacgia">
             ma tacgia:
             <input type="text" name="maTg"/>
            <br/> <br/>
		Tên tacgia:
		 <input type="text" name="tenTg"/>
		<br/> <br/>
           
		
		 <button  type="submit" name="btnThem">Thêm</button>
	    
	</form>
