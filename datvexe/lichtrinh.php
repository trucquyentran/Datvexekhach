<?php
include "connect.php";
session_start();
//   if (!isset($_SESSION['mySession'])){

//       echo "<script>alert('Bạn chưa đăng nhập');</script>"; 
//       header('Refresh:0;url=dangnhap.php');
//   }
include "duyettrangthaive.php"
?>

<!doctype html>
<html lang="en">

<head>
    <title>Lịch trình</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="img/Xe/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script type="text/javascript"> 
    function tb(){
        Swal.fire({
   title: 'Chưa đăng nhập',
  text: "Bạn cần đăng nhập để có thể thực hiện thao tác này!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Huỷ ',
  confirmButtonText: 'Đăng nhập'
}).then((result) => {
  if (result.isConfirmed) {
    window.location="dangnhap.php";
  }
})
    }</script>
<body id="main-homepage">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>
            </div><!-- end form-center -->
        </div><!-- end overlay-content -->
    </div><!-- end overlay -->




    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="index.php" class="navbar-brand"><span><i class="fa fa-car"></i>TRUC</span> QUYEN</a>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li><a href="index.php">TRANG CHỦ</a>

                    </li>
                    <li><a href="tuyen.php">CHUYẾN</a>

                    </li>
                    <li><a href="lichtrinh.php">LỊCH TRÌNH</a>

                    </li>
                    <li><a href="tintuc.php">TIN TỨC</a>

                    </li>
                    <li><a href="gioithieu.php">GIỚI THIỆU</a>

                    </li>
                    <li><a href="lienhe.php">LIÊN HỆ</a>

                    </li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact-us.html"> <?php
                                                                                                                    if (isset($_SESSION['mySession'])) { ?><i class="fa fa-user "></i> <?php
                                                                                                                                                                                        echo '' . $_SESSION['mySession']; ?>
                                <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="taikhoan.php">Hồ sơ</a></li>
                            <li><a href="lichsu.php">Lịch sử đặt vé</a></li>
                            <li><a href="dangxuat.php">Đăng xuất</a></li>

                        </ul>
                    <?php
                                                                                                                    } else { ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user "></i><span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="dangnhap.php"><span><i class="fa fa-lock"></i> Đăng nhập</span></a></li>
                            <li><a href="dangky.php"><span><i class="fa fa-plus"></i> Đăng Ký</span> </a></li>

                        </ul>

                    </li> <?php

                                                                                                                    }
                            ?>
                </li>
                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </li>
                </ul>
            </div><!-- end navbar collapse -->
        </div><!-- end container -->
    </nav><!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-car"></i></span>TRUC QUYEN</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->

                <div class="list-group panel">
                    <!-- <a href="index.html" class="list-group-item "  data-parent="#main-menu"><span><i class="fa fa-user link-icon"></i></span></a> -->
                    <a href="index.html" class="list-group-item active" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>TRANG CHỦ</a>


                    <a href="tuyen.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>CHUYẾN</a>


                    <a href="lichtrinh.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-calendar link-icon"></i></span>LỊCH TRÌNH</a>


                    <a href="tintuc.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>TIN TỨC</a>


                    <a href="gioithieu.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-info-circle link-icon"></i></span>GIỚI THIỆU</a>


                    <a href="lienhe.php" class="list-group-item" data-parent="#main-menu"><span><i class="fa fa-phone link-icon"></i></span>LIÊN HỆ</a>


                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->


    <!--================= PAGE-COVER =================-->
    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <h1 class="page-title">DANH SÁCH CHUYẾN</h1> -->

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--==== INNERPAGE-WRAPPER =====-->
    <!-- <section class="innerpage-wrapper">
        <div id="car-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                <h2 style="padding-top: 1rem;margin-bottom:2rem" class="text-center">LỊCH TRÌNH</h2>
                <div class="list-block main-block cr-list-block">

                    <div class="list-content; ">
                    
                    <div style="padding: 5rem;margin-left:35%">
                        <?php
                            // $sql="SELECT * FROM tuyenchay";
                            // $query = mysqli_query($conn, $sql);

                            // $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
                            // $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                            // $offset = ($current_page - 1) * $item_per_page;
                            // $products = mysqli_query($conn, "SELECT * FROM tuyenchay ORDER BY `TC_Ma` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
                            // $totalRecords = mysqli_query($conn, "SELECT * FROM tuyenchay ");
                            // $totalRecords = $totalRecords->num_rows;
                            // $totalPages = ceil($totalRecords / $item_per_page);


                            // while ($row = mysqli_fetch_array($products)) { ?>
                                <h4 style="color:blue">Tuyến: <?php //echo $row['TC_Ten'] ?> </h4>
                        
                            <?php 
                            
                            // $sl="SELECT * FROM tuyenchay a, chuyen b where a.TC_Ma=b.TC_Ma and b.TC_Ma= '".$row['TC_Ma']."' ";
                            // $que = mysqli_query($conn, $sl);
                            // $i=0;
                            
                            // if(mysqli_num_rows($que) == false){ ?>
                            <span style="color: red;">(Chưa có chuyến)</span>

                                <?php
                            // }
                            // while ($ro = mysqli_fetch_array($que)) {
                            // $i++;
                        ?> 
                                <label><a class="btn" href="chitiet.php?this_id=<?php // echo $ro['C_Ma'] ?>"><span>Chuyến </span><?php echo $i ?></a> <a>Xem</a> <button>Đặt ngay</button></label>
                                <ul>
                            
                                <li><span>Thời gian khởi hành: </span><?php //$date=date_create($ro["C_ThoiGianXP"]); echo date_format( $date, " d-m-Y (H:i:s)");   ?></li>
                                <li> <span>Thời gian đến: </span><?php //$date=date_create($ro["C_ThoiGianDen"]); echo date_format( $date, " d-m-Y (H:i:s)");   ?></li>
                                <?php
                                    //  $s = "SELECT * FROM chuyen a, benxe b where a.BXKH_Ma=b.BX_Ma and C_Ma = '".$ro['C_Ma']."'";
                                    //  $q = mysqli_query($conn, $s);
                                    //  $r = mysqli_fetch_assoc($q);
                                     ?>
                                <li> <span>Bến xe: </span><?php //echo $r['BX_Ten'] ?></li>
                                </ul> 
                                  
                        <?php 
                        //} 
                        ?> <hr width="3rem"> <?php
                    //}
                     ?>
                            
                    
                    </div>
                    </div>
                    
                </div>
                <?php
                            // include './phantrang.php';
                        ?> 
                  -->

                <!-- </div>
            </div>
        </div>
        
    </section> -->


     <!--==== INNERPAGE-WRAPPER =====-->
     <section class="innerpage-wrapper">
        <div id="car-listing" class="innerpage-section-padding">
            <div class="container" >
                <div class="row">
                <h2 style="padding-top: none;margin-bottom:2rem" class="text-center">LỊCH TRÌNH</h2>
                <!-- <div class="list-block main-block cr-list-block"> -->
                    <div>

                    <div class="list-content; " >
                    <div style="font-size:20px;">
                    <?php
                            // $sql="SELECT * FROM tuyenchay";
                            // $query = mysqli_query($conn, $sql);

                            $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
                            $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                            $offset = ($current_page - 1) * $item_per_page;
                            $products = mysqli_query($conn, "SELECT * FROM tuyenchay  ORDER BY `TC_Ma` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
                            $totalRecords = mysqli_query($conn, "SELECT * FROM tuyenchay ");
                            $totalRecords = $totalRecords->num_rows;
                            $totalPages = ceil($totalRecords / $item_per_page);


                            while ($row = mysqli_fetch_array($products)) { ?>
                                <!-- <h4  style="color:blue;padding-top: 4rem;">Tuyến: <?php //echo $row['TC_Ten'] ?> </h4> -->
                        
                            <?php 
                            
                            $sl="SELECT * FROM tuyenchay a, chuyen b where a.TC_Ma=b.TC_Ma and C_ThoiGianDen > NOW() and b.TC_Ma= '".$row['TC_Ma']."' ";
                            $que = mysqli_query($conn, $sl);
                            $i=0;
                            
                            if(mysqli_num_rows($que) == false){ ?>
                            <h4  style="color:blue;padding-top: 3rem;margin-left:6rem"><i class="fa fa-car" aria-hidden="true"></i> Tuyến: <?php echo $row['TC_Ten'] ?><span style="color: red;margin:2rem;">(Chưa có chuyến)</span> </h4>
                            
                           

                                <?php
                            }else{
                                

                                ?>
                                <h4  style="color:blue;padding-top: 3rem;margin-left:6rem"><i class="fa fa-car" aria-hidden="true"></i> Tuyến: <?php echo $row['TC_Ten'] ?> </h4>
                                <style>
                                 
                                        th, td {
                                        padding: 8px;                           
                                        border-bottom: 1px solid #DDD;
                                        }
                                        tr:hover {background-color: #e7eff6;}

                                        /************* */
                                        .my-btn {
                                           
                                            color: white;
                                            border: none;
                                            padding: 5px;
                                            cursor: pointer;

                                            border-radius:60px; 
                                            font-size:16px;
                                            background-color:#65c3ba;
                                           
                                        }
                                        
                                        .my-btn:hover {
                                            color: #fffef9;
                                            background-color: #009688;
                                        }
                                </style>
                                <table style="background-color: #fffef9; margin-bottom:2rem; margin-left: auto; margin-right: auto;border-color:white" border="2" border-color="white" border-style="solid" >
                                <tr>
                        <td style="border:none; text-align:center;background-color: #009688;font-size:25px;color:white" colspan="8"><b><?php echo $row['TC_Ten'] ?></b></td>   
                            </tr>
                           <tr style="background-color: #65c3ba;color:white;text-align:center;" >
                           <!-- <th  style="width: 15%;text-align:center;">Tuyến</th> -->

                           <th style="width: 5%;text-align:center;padding:20px;">Chuyến</th>
                            <th style="width: 14%;text-align:center;">Thời gian khởi hành</th>
                            <th style="width: 13%;text-align:center;">Thời gian đến</th>
                            <th style="width: 20%;text-align:center;">Bến xe</th>
                            <th style="width: 15%;text-align:center;">Giá vé (VND/Ghế)</th>
                            <th colspan="2" style="width: 20%;text-align:center;">Hành động</th>
                            
                           

                            </tr>
                           

                          
                            <?php
                            while ($ro = mysqli_fetch_array($que)) {
                            $i++;
                        ?> 
                         <tr style="text-align:center;">
                        <td > <a class="btn" href="chitiet.php?this_id=<?php echo $ro['C_Ma'] ?>"><span>Chuyến </span><?php echo $i ?></a></td>
                        <td> <?php $date=date_create($ro["C_ThoiGianXP"]); echo date_format( $date, " d-m-Y (H:i:s)");   ?></td>
                        <td> <?php $date=date_create($ro["C_ThoiGianDen"]); echo date_format( $date, " d-m-Y (H:i:s)");   ?></td>
                        
                        <?php
                                     $s = "SELECT * FROM chuyen a, benxe b where a.BXKH_Ma=b.BX_Ma and C_Ma = '".$ro['C_Ma']."'";
                                     $q = mysqli_query($conn, $s);
                                     $r = mysqli_fetch_assoc($q);
                                     ?>
                        <td> <?php echo $r['BX_Ten'] ?></td>
                        <td>  <?php echo number_format($ro['C_DonGia']) ?></td>
                        <td ><a href="chitiet.php?this_id=<?php echo $ro['C_Ma'] ?>" style="text-decoration: none; cursor:pointer">Chi tiết</a> </td>
                        <?php
                            if (isset($_SESSION['mySession'])) { ?>
                                 <td ><a style="text-decoration: none" class="my-btn" href="d.php?this_id=<?php echo $ro['C_Ma'] ?>"><b>Đặt ngay</b></a></td>
                            <?php
                            } else {?>
                                <td><button onclick="tb()" style="text-decoration: none" class="my-btn">Đặt vé ngay</button></td>
                            <?php
                            } ?>
                       
                            </tr>

                        

                   

                   
                               
                               
                                  
                        <?php } 
                        ?> </table> <?php

                            } 
                    } ?>
                   
                    </div>
                    </div>
                  
                </div><!-- end row -->
                <?php
                            include './phantrang.php';
                        ?> 
            </div><!-- end container -->
        </div><!-- end car-listing -->
        
    </section><!-- end innerpage-wrapper -->



     

    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Đảm bảo giá tốt nhất</h3>

                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-4">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>An toàn và bảo mật</h3>

                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-4">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Đại lý đặt vé tốt nhất</h3>

                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/7.jpg);
	background-size:cover;
	">>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Tham gia bản tin của chúng tôi ngay bây giờ</h2>
                    <p>SUBSCIBE ĐỂ NHẬN THÔNG TIN CẬP NHẬT MỚI NHẤT CỦA CHÚNG TÔI.</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Nhập địa chỉ email của bạn" required />
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end newsletter-1 -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-contact">
                        <h3 class="footer-heading">LIÊN HỆ</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>NINH KIỀU, CẦN THƠ</li>
                            <li><span><i class="fa fa-phone"></i></span>+0123 456 789</li>
                            <li><span><i class="fa fa-envelope"></i></span>trucquyen@gmail.com</li>
                        </ul>
                    </div><!-- end columns -->

                    <!-- <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                            	<li><a href="#">Home</a></li>
                            	<li><a href="#">Flight</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Cars</a></li>
                            </ul>
                        </div>end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">TRUY CẬP NHANH</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Tuyến chạy</a></li>
                            <li><a href="#">Lịch trình</a></li>
                            <li><a href="#">Đăng nhập</a></li>
                            <li><a href="#">Đăng ký</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">VỀ CHÚNG TÔI</h3>
                        <p>Những trải nghiệm thoải mái của bạn là động lực phát triển của chúng tôi.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->



    </section><!-- end footer -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-price-slider.js"></script>
    <!-- Page Scripts Ends -->
</body>

</html>