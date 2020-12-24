<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      

      $sql = "select * from khachhang where maKh = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      $nam = "unchecked";
      $nu = "unchecked";
      if($data["gioiTinh"]==0)
      {
            $nam = "checked";
      }
      else
      {
            $nu = "checked";
      }
      if(isset($_POST["btnSua"]))
      {
             $maKH = $_POST["maKH"];
            $tenKH = $_POST["tenKH"];
            $date = $_POST["date"];
            $sdt     = $_POST["sdt"];
            $email     = $_POST["email"];
            $pass = $_POST["pass"];
            $diachi  = $_POST["diachi"];
            $gt = $_POST["gt"];
          
          
         
      	
      	$sql = "UPDATE khachhang set tenKh='$tenKH',emailKh='$email',soDienThoai='$sdt',diaChi='$diachi',ngaySinh='$date',gioiTinh='$gt',matKhau='$pass' where maKh='$maKH'";
      		$query = mysqli_query($con, $sql);
      		?>
                        <script>
                              window.location="index.php?quanly=ql_khachhang";
                        </script>
                         <?php
                 
      	
      }
 ?>
<br/>
	
      <form action="index.php?sua=edit_khachhang" method="POST" >
      Ma khach hang:
      <input type="text" readonly name="maKH" value="<?php echo $data["maKh"] ?>"/><br/><br/>
      Ten khach hang:
      <input type="text" name="tenKH"  value="<?php echo $data["tenKh"] ?>"/><br/><br/>
      Gioi tinh:
      <input type="radio" name="gt" value="0"  <?php echo $nam ?>/>Nam &emsp;
      <input type="radio" name="gt" value="1"  <?php echo $nu ?>/>Nu
      <br/><br/>
      Ngay sinh:
      <input type="date" name="date" value="<?php echo $data["ngaySinh"] ?>"/><br/><br/>
      email khach hang:
      <input type="email" name="email" value="<?php echo $data["emailKh"] ?>"/><br/><br/>
      Mat khau:
      <input type="text" name="pass" value="<?php echo $data["matKhau"] ?>"/><br/><br/>
      Dia chi:
      <input type="text" name="diachi" value="<?php echo $data["diaChi"] ?>"/><br/><br/>
      So dien thoai:
      <input type="number" name="sdt" value="<?php echo $data["soDienThoai"] ?>"/><br/><br/>
      <input style="width:200px;height: 50px;font-size: 18px; border:0;background-color: lightgrey;" type="submit" name="btnSua" value="Sửa" /><br/><br/>

      
</form>
