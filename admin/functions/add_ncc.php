<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      
            $maNcc = $_POST["maNcc"];
            $diachiNcc = $_POST["diachiNcc"];
            $soluongsp = $_POST["soluongsp"];
            $emailNcc = $_POST["emailncc"];
            $sdt = $_POST["sdtncc"];
      
      	
      	if( $maNcc=="" || $diachiNcc==""|| $soluongsp==""||$emailNcc==""||$sdt=="" )
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO ncc(maNcc, diachiNcc,soluongSp,emailNcc,sdtNcc) values ('$maNcc','$diachiNcc','$soluongsp','$emailNcc','$sdt')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
<form method="POSt" action="index.php?them=add_ncc">
            Ma ncc:
            <input type="text" name="maNcc"/>
            <br/> <br/>
    Địa chỉ ncc:
     <input type="text" name="diachiNcc" />
    <br/> <br/>
            Số luojng sp:
             <input type="number" name="soluongsp" />
            <br/> <br/>
            email ncc:
             <input type="email" name="emailncc"  />
            <br/> <br/>
            sdt ncc:
             <input type="number" name="sdtncc" />
            <br/> <br/>
     <button  type="submit" name="btnThem">Thêm</button>
      
  </form>
