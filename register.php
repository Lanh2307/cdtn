
<?php

include 'config.php';

$err = [];
if(isset($_POST['TenHV'])){
    $name= $_POST['TenHV'];
   // $sex= $_POST['GioiTinh'];   
    $bday= $_POST['NgaySinh'];
    $diachi= $_POST['DiaChi'];
    $phone= $_POST['SdtHV'];
    $email= $_POST['EmailHV'];
    if(empty($name))
        $err['name'] = 'Chưa nhập tên';
   //if(empty($sex))
     //   $err['sex'] = 'Chưa chọn giới tính';
    if(empty($bday))
        $err['bday'] = 'Chưa nhập ngày sinh';
    if(empty($diachi))
        $err['diachi'] = 'Chưa nhập địa chỉ';
    if(empty($phone))
        $err['phone'] = 'Chưa nhập số điện thoại';
    if(empty($email))
        $err['email'] = 'Chưa nhập email';
  
    }
    

    //var_dump(!empty($err));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Zenlish</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Mar 19 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="login.php" class="d-none d-lg-inline-flex page-item text"style="text-decoration: none">
		Đăng Nhập 
		<span>&#160;<i class="fa-solid fa-right-to-bracket"></i>&ensp;</span> </a>
		<a href="register.php" class="nd-none d-lg-inline-flex page-item text"style="text-decoration: none">
		Đăng Ký
		<span>&#160;<i class="fa-regular fa-registered"></i></span> 
    </a>	

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>

          <li><a href="register.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="register.php">Get Started</a>

    </div>
  </header>



    <!-- Topbar Start -->


    <!-- Contact Start -->
    <div class="d-flex justify-content-center mt-5">
        <div class="text-center mb-4">
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="" method="post" role="form">
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Tên học viên">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?><?php echo (isset($warning))?$warning:''?></span>
                            </div>
                        </div>
                       
                        <div class="control-group mb-3">
                            <input type="date" class="form-control" name="bday" placeholder="Ngày Sinh">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>

                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="diachi" placeholder="Địa Chỉ">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Số Điện Thoại">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                                
                            </div>
                        </div>
                       

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Đăng Ký</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
<?php
require("footer.php");
?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>