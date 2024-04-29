<?php

include 'config.php';

$err = [];
if (isset($_POST['TenHV'])) {
    $name = $_POST['TenHV'];
    // $sex= $_POST['GioiTinh'];   
    $bday = $_POST['NgaySinh'];
    $diachi = $_POST['DiaChi'];
    $phone = $_POST['SdtHV'];
    $email = $_POST['EmailHV'];
    if (empty($name))
        $err['name'] = 'Chưa nhập tên';
    //if(empty($sex))
    //   $err['sex'] = 'Chưa chọn giới tính';
    if (empty($bday))
        $err['bday'] = 'Chưa nhập ngày sinh';
    if (empty($diachi))
        $err['diachi'] = 'Chưa nhập địa chỉ';
    if (empty($phone))
        $err['phone'] = 'Chưa nhập số điện thoại';
    if (empty($email))
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


    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .registration-form {
            max-width: 500px;
            margin: 0.5rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }

        .form-control {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid white;
            border-radius: 0;
            color: #495057;
            /* Color for input text */
        }

        .form-label {
            margin-left: 0.5rem;
            color: #495057;
            font-weight: bold;

        }

        .btn-primary {
            background-color: #ffc107;
            /* Customize the button color to match the design */
            border: none;
        }

        .form-check-label {
            margin-right: 1rem;
        }

        .form-check-input {
            margin-right: 0.5rem;
        }

        .registration-form {
            max-width: 40%;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }

        .img-fluid {
            max-width: 90%;
            height: 95%;
            /* Giảm kích thước ảnh nếu cần */
            margin: 0 auto;
            /* Căn ảnh giữa cột */
            border-radius: 15px;
        }
    </style>
    </style>


</head>

<body>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="login.php" class="d-none d-lg-inline-flex page-item text" style="text-decoration: none">
                Đăng Nhập
                <span>&#160;<i class="fa-solid fa-right-to-bracket"></i>&ensp;</span> </a>
            <a href="register.php" class="nd-none d-lg-inline-flex page-item text" style="text-decoration: none">
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

    <div class="container">
        <div class="row">
            <div class="registration-form">
                <h2 class="text-center">Đăng Ký Học Viên</h2>
                <form action="submit_form.php" method="POST">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên học viên</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên học viên" required>
                    </div>

                    <!-- Date of Birth -->
                    <div class="mb-3">
                        <label for="dob" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>

                    <!-- Gender -->
                    <div class="mb-3">
                        <label class="form-label me-5">Giới tính</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <label class="form-check-label" for="male">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                            <label class="form-check-label" for="female">Nữ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
                            <label class="form-check-label" for="other">Khác</label>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Đăng Ký</button>
                    </div>
                </form>
            </div>

            <!-- Column for Image -->
            <div class="col-md-6 d-flex align-items-center">
                <img src="assets/img/zenlish_lananh.jpg" alt="Education Image" class="img-fluid">
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