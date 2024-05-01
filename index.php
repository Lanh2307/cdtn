<?php
//require("header.php");
require("./Config/Connectdb.php");
session_start();
if (isset($_SESSION['success_message'])) {
  echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
  // Xóa thông báo sau khi đã hiển thị
  unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Zenlish</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pngegg.png" rel="icon">

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

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="">Zenlish</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li class="dropdown has-dropdown"><a href="courses.php"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="course-details C.php">Camp Bomb Toeic</a></li>
              <li><a href="course-details S.php">Submarine Toeic</a></li>

          </ul>

          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="register.php">Tư vấn</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/zenlish-bg.png" alt="" data-aos="fade-in" class="img-styles">

      <!-- <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">Learning Today,<br>Leading Tomorrow</h2>
        <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
        
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="register.php" class="btn-get-started">Get Started</a>
        </div>
      </div> -->

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Giới thiệu</h3>
            <p class="fst-italic">
              Zenlish là trung tâm duy nhất tại Hà Nội có lộ trình đào tạo TOEIC Học 1 Lần Là Đạt,
              tạo ra sự tiến bộ từng ngày cho những học viên đã từng sợ, học đi học lại nhiều lần nhưng không đạt,
              những người mong muốn học TOEICc ra trường hay đạt trên 800 TOEIC từ lần đầu học để sử dụng thành thạo Tiếng Anh,
              tạo ra lợi thế khác biệt trong môi trường cạnh tranh việc làm khốc liệt.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Trở thành trung tâm đào tạo Toeic chất lượng nhất.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Đồng hành và dẫn dắt thế hệ trẻ học Toeic hiệu quả.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Liên tục học hỏi - Tận tâm - Bền bỉ - Hợp lực - Hướng tới sự xuất sắc.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="237" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Our Products?</h3>
              <p>
                Zenlish là trung tâm duy nhất tại Hà Nội có lộ trình đào tạo TOEIC Học 1 Lần Là Đạt
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Tầm nhìn</h4>
                  <p>Trở thành trung tâm đào tạo TOEIC chất lượng nhất
                  </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Sứ mệnh</h4>
                  <p>Đồng hành & dẫn dắt thế hệ trẻ học tiếng Anh (TOEIC) hiệu quả.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Giá trị cốt lõi</h4>
                  <p>Liên tục học hỏi - Tận tâm - Bền bỉ - Hợp lực - Hướng tới sự xuất sắc</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-eye" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-infinity" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-mortarboard" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-nut" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-shuffle" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Nemo Enim</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-star" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Eiusmod Tempor</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Midela Teren</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-camera-video" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Pira Neve</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-command" style="color: #b2904f;"></i>
              <h3><a href="" class="stretched-link">Dirada Pack</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-dribbble" style="color: #b20969;"></i>
              <h3><a href="" class="stretched-link">Moton Ideal</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-activity" style="color: #ff5828;"></i>
              <h3><a href="" class="stretched-link">Verdo Park</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
              <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
            </div>
          </div><!-- End Feature Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Courses</h2>
        <p class="">Popular Courses</p>
      </div><!-- End Section Title -->

      <section id="courses-list" class="section courses-list">

<div class="container">

  <div class="row">

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
      <div class="course-item">
        <img src="assets/img/course2.jpg" class="img-fluid" alt="...">
        <div class="course-content">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="category">Toeic 550+</p>
            <p class="price"></p>
          </div>

          <h3><a href="course-details C.php">Camp Bomb Toeic</a></h3>
          <p class="description">Giải pháp tối ưu nâng tầm trình độ Listening & Reading.</p>
          <div class="trainer d-flex justify-content-between align-items-center">
            <div class="trainer-profile d-flex align-items-center">
              <img src="assets/img/thành.jpg" class="img-fluid" alt="">
              <a href="" class="trainer-link">Trần Quốc Thành</a>
            </div>
            <div class="trainer-rank d-flex align-items-center">
              <i class="bi bi-person user-icon"></i>&nbsp;50
              &nbsp;&nbsp;
              <i class="bi bi-heart heart-icon"></i>&nbsp;65
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Course Item-->

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="course-item">
        <img src="assets/img/course1.jpg" class="img-fluid" alt="...">
        <div class="course-content">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="category">Toeic 700+</p>
            <p class="price"></p>
          </div>

          <h3><a href="course-details S.php">Submarine Toeic</a></h3>
          <p class="description">Chinh phục đỉnh cao Toeic Listening & Reading.</p>
          <div class="trainer d-flex justify-content-between align-items-center">
            <div class="trainer-profile d-flex align-items-center">
              <img src="assets/img/minhnguyet.jpg" class="img-fluid" alt="">
              <a href="" class="trainer-link">Nguyễn Minh Nguyệt</a>
            </div>
            <div class="trainer-rank d-flex align-items-center">
              <i class="bi bi-person user-icon"></i>&nbsp;35
              &nbsp;&nbsp;
              <i class="bi bi-heart heart-icon"></i>&nbsp;42
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Course Item-->

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
      <div class="course-item">
        <img src="assets/img/course3.jpg" class="img-fluid" alt="...">
        <div class="course-content">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="category">Toeic Training</p>
            <p class="price"></p>
          </div>

          <h3><a href="course-details.html">Training</a></h3>
          <p class="description">Đào tạo đội ngũ giảng viên chuyên nghiệp, chất lượng.</p>
          <div class="trainer d-flex justify-content-between align-items-center">
            <div class="trainer-profile d-flex align-items-center">
              <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
              <a href="" class="trainer-link">Brandon</a>
            </div>
            <div class="trainer-rank d-flex align-items-center">
              <i class="bi bi-person user-icon"></i>&nbsp;20
              &nbsp;&nbsp;
              <i class="bi bi-heart heart-icon"></i>&nbsp;85
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Course Item-->

  </div>

</div>

</section><!-- /Courses List Section -->

    </section><!-- /Courses Section -->

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/thành.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Trần Quốc Thành</h4>
                <span>Camp Bomb Toeic</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/minhnguyet.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Nguyễn Minh Nguyệt</h4>
                <span>Submarine Toeic</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/trang.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Phan Thu Trang</h4>
                <span>Submarine Toeic</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Trainers Index Section -->

  </main>

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