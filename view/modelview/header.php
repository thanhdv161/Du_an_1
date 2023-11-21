<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dự án 1 - Nhóm 3</title>

        <!-- Icon css link -->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="../vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <!-- Rev slider css -->
        <link href="../vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="../vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="../vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="../vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="../vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/style2.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <script src="../js/slide.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Top Header Area =================-->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top_header_left">
                            <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                  <option value='yt' data-image="../img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="../img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                  <option value='yt' data-image="../img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="../img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                </select>
                            </div>
                            <select class="selectpicker usd_select">
                                <option>USD</option>
                                <option>$</option>
                                <option>$</option>
                            </select>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top_header_middle">
                            <a href="#"><i class="fa fa-phone"></i> SĐT: <span>1900.636.099</span></a>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span>nhom3duan1@gmail.com</span></a>
                            <img src="../img/image-removebg-preview (1).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_right_header">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <ul class="top_right">
                                <?php 
                                if (empty($_SESSION['user'])) {
                                    echo'<li class="user"><a href="./index.php?act=login"><i class="icon-user icons"></i></a></li>
                                    
                                    <li class="h_price">
                                    </li>';
                                }else {
                                    echo '<a href="../view/login/dangxuat.php">
                                    <span class="logout">
                                    <svg  fill="none"  stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                </span>
                                <h7 style = "font-size: 20px" >Đăng Xuất</h7>
                                
                                
                            </a>';
                                }
                               
                               
                                ?>
                                <li class="cart"><a href="./index.php?act=giohang"><i class="icon-handbag icons"></i></a></li>
                            </ul> 
                            <style>
                                .w-5.h-5.inline{
                                    width: 20px;
                                    margin-top: 20px;
                                    height: 21.4px;
                                }
                                h7{
                                    color: black;
                                }
                                .logout{
                                    color: black;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="../img/logo_saleshop.jpg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="#" class="dropdown-item">Tất cả sản phẩm</a></li>
                            <li><a href="#" class="dropdown-item">iPhone</a></li>
                            <li><a href="#" class="dropdown-item">Samsung</a></li>
                            <li><a href="#" class="dropdown-item">Xiaomi</a></li>
                            <li><a href="#" class="dropdown-item">Realme</a></li>
                        </ul>
                    </div>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="./index.php?act=home">Trang chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="./index.php?act=gioithieu">Giới thiệu</a></li>
                            <li class="nav-item"><a class="nav-link" href="./index.php?act=tintuc">Tin tức</a></li>
                            <li class="nav-item"><a class="nav-link" href="./index.php?act=lienhe">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================End Menu Area =================-->
        