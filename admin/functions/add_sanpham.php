<?php 
include("includes/connection.php");
     if(isset($_POST["btnThem"]))
      {
            $masp = $_POST["masp"];
          	$tensp = $_POST["tensp"];
            $ncc = $_POST["ncc"];
            $nxb = $_POST["nxb"];
           
            $mota=$_POST["mota"];
            $sotrang = $_POST["sotrang"];
          	$loai = $_POST["maloai"];
           
            $gia = $_POST["gia"];
            $tg = $_POST["tg"];
            $img = $_FILES["hinh"]["name"];
            $path = '../img/'.basename($_FILES["hinh"]["name"]);

            if($masp==""|| $tensp==""||$gia==""||$img=="")
            {
                  echo "không được để trống";
            }
            else
            {
            	$sql = "INSERT INTO sanpham(maSp,tenSp,maLoai,soTrang,gia,hinh,motaSp,maNxb,maTg,maNcc) values ('$masp','$tensp','$loai','$sotrang','$gia','$img','$mota','$nxb','$tg','$ncc')";
            	$query = mysqli_query($con, $sql);

                  if(move_uploaded_file($_FILES['hinh']["tmp_name"],$path ))
                   {
                         echo "Thêm thành công";
                   }
                   else{ echo "Thêm thất bại"; }
            }

 
      }
 ?>
<br/>
	<form method="POST" action="index.php?them=add_sanpham" enctype="multipart/form-data">
            Ma san pham:
             <input type="text" name="masp"/>
            <br/> <br/>
  		Tên san phamn:
  		 <input type="text" name="tensp"/>
  		<br/> <br/>
           Hinh:
             <input type="file" name="hinh"/>
            <br/> <br/>
        
	     Giá:
	     <input type="number" name="gia" />
       <br/><br/>
        Số trang:
       <input type="number" name="sotrang" />
       <br/><br/>
       
        Mô tả:
       <input type="text" name="mota" />
       <br/><br/>
            Nhà cung cấp:
		      <select name="ncc">
            <?php
                  $sql = "select * from ncc";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $data["maNcc"] ?>"><?php echo $data["maNcc"]; ?></option>
                  
            <?php } ?>   
            </select>
             <br/><br/>
            Nhà xuất bản:
          <select name="nxb">
            <?php
                  $sql = "select * from nxb";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $data["maNxb"] ?>"><?php echo $data["tenNxb"]; ?></option>
                  
            <?php } ?>   
            </select>
            <br/><br/>
            Loại:
            <select name="maloai">
            <?php
                  $sql = "select * from loai";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query))
                  { ?>
                  <option value="<?php echo $data["maLoai"] ?>"><?php echo $data["tenLoai"]; ?></option>
                 
            <?php } ?> 
            </select>  
             <br/><br/>
            Tác giả:
            <select name="tg">
            <?php
                  $sql = "select * from tacgia";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query))
                  { ?>
                  <option value="<?php echo $data["maTg"] ?>"><?php echo $data["tenTg"]; ?></option>
                 
            <?php } ?> 
            </select>  
            <br/><br/>
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
