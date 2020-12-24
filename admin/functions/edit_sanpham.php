<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from sanpham where masp ='$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
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
            if($img != null)
                  {
                        $tmp_img = $_FILES["hinh"]["tmp_name"];
                        $img = $_FILES['hinh']['name'];
                        move_uploaded_file($tmp_img, $path);
                        $sql = "UPDATE sanpham SET hinh ='$img' where maSp='$masp' ";
                        $query = mysqli_query($con, $sql);
                        echo "Thêm thành công";
                  }
      		$sql = "UPDATE sanpham set tenSp='$tensp',maLoai='$loai',soTrang='$sotrang',gia='$gia',motaSp='$mota',maNxb='$nxb',maTg='$tg',maNcc='$ncc' where maSp = '$masp'";
      		$query = mysqli_query($con, $sql);
             ?>
        <script>
          window.location="index.php?quanly=ql_sanpham";
        </script>
         <?php
                 
                 
      	
      }
 ?>
<br/>
	     <form method="POST" action="index.php?sua=edit_sanpham" enctype="multipart/form-data">
            Ma san pham:
             <input type="text" readonly name="masp" value="<?php echo $data["maSp"] ?>"/>
            <br/> <br/>
            Tên san phamn:
             <input type="text" name="tensp"  value="<?php echo $data["tenSp"] ?>"/>
            <br/> <br/>
           Hinh:
             <input type="file" name="hinh"  value="<?php echo $data["hinh"] ?>"/>
            <br/> <br/>
        
           Giá:
           <input type="number" name="gia"  value="<?php echo $data["gia"] ?>"/>
       <br/><br/>
        Số trang:
       <input type="number" name="sotrang"  value="<?php echo $data["soTrang"] ?>"/>
       <br/><br/>
       
        Mô tả:
       <input type="text" name="mota"  value="<?php echo $data["motaSp"] ?>" />
       <br/><br/>
            Nhà cung cấp:
                  <select name="ncc" >
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
             <button  type="submit" name="btnSua">Sửa</button>
          
      </form>
