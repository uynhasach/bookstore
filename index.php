
<?php 
        require_once("includes/connection.php");
         include ("header.php"); 
?>

                    <div class="hero__item set-bg" data-setbg="img/hero/nen.jpg">
                        <div class="hero__text">
                            <span>HELLO!!</span>
                            <h2>Satisfied<br />WITH YOU</h2>
                            <p>PLEASE COME WITH US</p>
                            <a href="./index.php" class="primary-btn">MUA NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row justify-content-around">
               
                          
                                <a href="search.php"><button type="submit" class="site-btn">SEARCH</button></a>
                           
                        </div>
                <!--------PHP hien thi san pham------->
                <br/><br/>
                <div class="categories__slider owl-carousel">
                     <?php 
                    $sql = "select * from sanpham";
                    $query = mysqli_query($conn, $sql);
                ?>
                <?php while($data = mysqli_fetch_array($query))
                {
                   echo '<div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/'.$data["hinh"].'">
                        </div>
                    </div>'; } ?>
                 
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM TIÊU BIỂU</h2>
                    </div>
                 
                </div>
            </div>
            <div class="row featured__filter">
                <?php 
                    $sql = "select * from sanpham limit 8";
                    $query = mysqli_query($conn, $sql);
                ?>
                <?php 
                while($data = mysqli_fetch_array($query))
                {
               echo '<div class="col-lg-3 col-md-4 col-sm-6 mix tomau">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/'.$data["hinh"].'">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">'.$data["tenSp"].'</a></h6>
                            <h5>'.$data["gia"].' vnd</h5>
                            <a href="ttsanpham.php?show=show_detail&id='.$data["maSp"].'" style="background-color:black;padding:10px 10px;">Chi tiết</a>
                            <button type="button" style="margin-top:8px; background-color:#9ACD32;width: 150px; height: 35px; color:white;"><b>MUA</b></button>
                        </div>
                    </div>
                </div>'; } ?>
               
             
              


                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <br>
<?php include "footer.php" ?>