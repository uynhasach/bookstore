<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TanTruBookStore</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
       <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top" style="background-color: #9ACD32" >
            <div class="container">
                <div class="row" >
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> thanhphuongnhasach@yahoo.com.vn</li>
                                
                                 <?php
                                if(isset($_SESSION["kh"]["tenKh"]))
                                {
                                   echo'<li>Xin chào!!!&emsp;'.$_SESSION["kh"]["tenKh"].'</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6"  style="text-align: right">
                        <div class="header__top__right__auth">
                            <br>
                            <?php
                                if(!isset($_SESSION["kh"]["tenKh"]))
                                {
                                    echo'<a href="login.php"><i class="fa fa-user"></i> Login</a>';
                                }
                                else
                                {
                                    echo'<a><i class="fa fa-user"></i>'.$_SESSION["kh"]["tenKh"].'</a>';
                                 echo'<a href="logout.php"><i class="fa fa-close"></i>Logout</a>';

                                }
                             ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"> <br>
                    <div class="header__logo">
                        <a href="./index.php"  ><img src="img/logo1.png" alt="" width="90px"></a>
                    </div><br>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">TRANG CHỦ</a></li>
                           <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                            <li><a href="./contact.php">GIỚI THIỆU</a></li>
                        </div></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
</header>
    <!-- Header Section End -->
    
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            <li><a href="qua.php?show=show_book1">Sách tô màu</a></li>
                            <li><a href="qua.php?show=show_book2">Truyện tranh</a></li>
                            <li><a href="qua.php?show=show_book3">Tiểu thuyết</a></li>
                            <li><a href="qua.php?show=show_book4">EnglishBook</a></li>
                            <li><a href="qua.php?show=show_book5">Sách khoa học</a></li>
                          
                        </ul>

                    </div>

                </div>

                <div class="col-lg-9">
                    <div class="hero__search">
                        
                        
                    </div>