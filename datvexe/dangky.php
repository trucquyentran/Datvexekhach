<?php
   

    include "connect.php";
    include "duyettrangthaive.php";
    if(isset($_POST['dk'])){
        $id = "";
        $name=$_POST['name'];
      
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $img= 'unnamed.png';
        $pass = md5($_POST['pass']);
        $repass = md5($_POST['repass']);
        $error = [];

       
       

        //$sql = "INSERT INTO khachhang (KH_Ma,KH_Ten,KH_Gioitinh,KH_Ngaysinh,KH_sdt,KH_email,KH_Diachi,password,repassword) VALUES ('$id','$name',' $gioitinh','$ngaysinh',' $sdt','$email','$diachi','$pass',' $repass')";
		$sql = "SELECT * FROM khachhang WHERE KH_Email='$email'";
        $result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) == 1)
            {
                $error[] ='Tài khoản đã tồn tại! ';       
            }
        
        // else if($row['KH_Sdt'] == $sdt)
        // {
        //     $error[] ='Số điện thoại đã tồn tại! ';       
        // }
        $sl = "SELECT * FROM khachhang WHERE KH_Sdt='$sdt'";
        $re = mysqli_query($conn,$sl);
        $ro = mysqli_fetch_assoc($re);
        if(mysqli_num_rows($re)==1){
            $error[] = 'Số điện thoại đã tồn tại! ';
        }
        else{ 
            if($pass != $repass){
            $error[] = 'Mật khẩu không khớp! ';
            }
            else if($sdt == $row['KH_Sdt']){
                $error[] = 'Số điện thoại đã tồn tại! ';
                }
            else{
            $sql = "INSERT INTO khachhang (KH_Ma,KH_Ten,KH_sdt,KH_email,password,repassword,KH_Hinh,KH_NgayDK,KH_PhanQuyen) VALUES ('$id','$name','$sdt','$email','$pass','$repass','$img',NOW(),0)";
			mysqli_query($conn,$sql);
            
			echo "<script>alert('Đăng ký thành công!! Hãy đăng nhập ngay để đặt vé');</script>"; 
			header('Refresh: 0;url=dangnhap.php');
            }
        }               
    }

   
  ?> 


<!doctype html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="img/Xe/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

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
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i
                                            class="fa fa-search"></i></span></button></span>
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
                    <a href="index.html" class="list-group-item active" data-parent="#main-menu"><span><i
                                class="fa fa-home link-icon"></i></span>TRANG CHỦ</a>
                   

                    <a href="tuyen.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-car link-icon"></i></span>CHUYẾN</a>
                  

                    <a href="lichtrinh.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-calendar link-icon"></i></span>LỊCH TRÌNH</a>
                

                    <a href="tintuc.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-globe link-icon"></i></span>TIN TỨC</a>
                  

                    <a href="gioithieu.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-info-circle link-icon"></i></span>GIỚI THIỆU</a>
                   

                    <a href="lienhe.php" class="list-group-item" data-parent="#main-menu"><span><i
                                class="fa fa-phone link-icon"></i></span>LIÊN HỆ</a>
                   

                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div>
    <!-- end sidenav-content -->
        
        
    <section class="page-cover" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/6.jpg);
	background-size:cover;
	">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">ĐĂNG KÝ THÀNH VIÊN MỚI</h1>
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
       
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3 class="text-center"><b>ĐĂNG KÝ</b></h3>
                                    <p class="text-center" style="color: red; font-size: 15px;	">
                                      
                                        <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                               
                                                echo '<span class="error-msg">'.$error.'</span> <br>';

                                            } 
                                        }	?>
                                      
                                    </p>
                               
                                    <form method="post">
                                            
                                        <div class="form-group">
                                             <input name="name" type="text" class="form-control" placeholder="Họ tên"   required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input name="sdt" type="tell" class="form-control" placeholder="Số điện thoại"  pattern="(\+84|0)\d{9,10}"  title="Số điện thoại phải bắt đầu từ số 0 và có độ dài từ 10 đến 11 số"  required/>
                                             <span><i class="fa fa-phone"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input name="email" type="email" class="form-control" placeholder="Email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input name="pass" type="password" class="form-control" placeholder="Mật khẩu" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Mật khẩu phải là chử hoặc số và có độ dài 8 ký tự" required>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input  name="repass" type="password" class="form-control" placeholder="Nhập lại mật khẩu"  pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"  title="Mật khẩu phải là chử hoặc số và có độ dài 8 ký tự"    required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        
                                        <button name="dk" class="btn btn-orange btn-block">ĐĂNG KÝ</button>
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p class="link-line">Bạn đã có tài khoản ? <a href="dangnhap.php">Đăng nhập ngay!</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="img/Xe/9.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
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
        <section id="newsletter-1" class="section-padding back-size newsletter"  style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/Xe/7.jpg);
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
                                    <input type="email" class="form-control input-lg" placeholder="Nhập địa chỉ email của bạn" required/>
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
                            	<li><a href="#">chuyến</a></li>
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
