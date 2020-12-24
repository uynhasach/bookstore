<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      	$tenNxb = $_POST["tenNxb"];
      	$maNxb = $_POST["maNxb"];
        $namXb = $_POST["namXb"];
      
      	
      	if( $maNxb=="" || $tenNxb==""|| $namXb=="" )
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO nxb(maNxb, tenNxb,namXb) values ('$maNxb','$tenNxb','$namXb')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
	<form method="POSt" action="index.php?them=add_nxb">
             ma nxb:
             <input type="text" name="maNxb"/>
            <br/> <br/>
        		Tên nxb:
        		 <input type="text" name="tenNxb"/>
		<br/> <br/>
              Năm xuất bản:
                       <input type="number" name="namXb"/>
              <br/> <br/>
           
		
		 <button  type="submit" name="btnThem">Thêm</button>
	    
	</form>
