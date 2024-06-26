<?php
$conn = mysqli_connect('localhost', 'root', '', 'cdtn');

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SB Admin - Zenlish</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">Interface</div>

      <!-- Nav Item - Pages Collapse Menu
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      // Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      //Divider 
      <hr class="sidebar-divider" />

      // Heading 
      <div class="sidebar-heading">Addons</div>

      //Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="lophoc.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Quản lý lớp học</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="hocvien.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Quản lý học viên</span></a>
            </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Alerts Center</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for
                    your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Message Center</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">
                      Hi there! I am wondering if you can help me with a
                      problem I've been having.
                    </div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">
                      I have the photos that you ordered last month, how would
                      you like them sent to you?
                    </div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">
                      Last month's report looks great, I am very happy with
                      the progress so far, keep up the good work!
                    </div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">
                      Am I a good boy? The reason I ask is because someone
                      told me that people say this to all dogs, even if they
                      aren't good...
                    </div>
                    <div class="small text-gray-500">
                      Chicken the Dog · 2w
                    </div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lan Anh</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">
            DataTables is a third party plugin that is used to generate the
            demo table below. For more information about DataTables, please
            visit the
            <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
          </p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                Danh sách học viên đăng ký
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã học viên</th>
                      <th>Tên học viên</th>
                      <th>Điểm</th>
                      <th>Ngày đăng kí</th>
                      <th>Mã lớp</th>
                      <th>Quản lí</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM hoc_vien";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        $maHV = $row["MaHV"];
                        echo "<tr>";
                        echo "<td>" . $maHV . "</td>";
                        echo "<td>" . $row["TenHV"] . "</td>";
                        echo "<td>" . $row["DiemDauVao"] . "</td>";
                        echo "<td>" . $row["NgayTiepNhan"] . "</td>";
                        echo "<td>" . $row["MaLop"] . "</td>";
                        echo "<td>
                                  <button data-toggle='modal' data-target='#viewModal$maHV' class='btn btn-primary btn-sm'>Xem</button>
                                  <button data-toggle='modal' data-target='#editModal$maHV' class='btn btn-secondary btn-sm'>Sửa</button>
                                  <button data-toggle='modal' data-target='#deleteModal$maHV' class='btn btn-danger btn-sm'>Xóa</button>
                                 <!-- <button data-toggle='modal' data-target='#classifyModal$maHV' class='btn btn-info btn-sm'>Xếp lớp</button> -->
                                </td>";
                        echo "</tr>";

                        // Modal cho Xem
                        echo createModalView("viewModal$maHV", "Xem Học Viên", $row);

                        //   // Modal cho Xóa
                        echo createModalDelete("deleteModal$maHV", "Xóa Học Viên", $row);
                        // Modal cho Sửa
                        echo createModalEdit("editModal$maHV", "Sửa Thông Tin Học Viên", $row, $conn);
                        //   // Modal cho Xếp Lớp
                        //   echo createModal("classifyModal$maHV", "Xếp Lớp Học Viên", $row);
                      }
                    } else {
                      echo "<tr><td colspan='5'>0 results</td></tr>";
                    }

                    function createModalView($id, $title, $row)
                    {
                      $modalContent = "
                      <div class='modal fade' id='$id' tabindex='-1' role='dialog' aria-labelledby='{$id}Label' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                              <div class='modal-content'>
                                  <div class='modal-header'>
                                      <h5 class='modal-title' id='{$id}Label'>$title</h5>
                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                          <span aria-hidden='true'>&times;</span>
                                      </button>
                                  </div>
                                  <div class='modal-body'>";

                      // Tạo nội dung thông tin học viên
                      $modalContent .= "<div class='card'>";
                      $modalContent .= "<div class='card-body'>";
                      $modalContent .= "<h5 class='card-title'>Thông Tin Học Viên</h5>";
                      $modalContent .= "<div class='card-text'>";
                      $modalContent .= "<strong>Mã học viên:</strong> " . $row["MaHV"] . "<br>";
                      $modalContent .= "<strong>Họ tên:</strong> " . $row["TenHV"] . "<br>";
                      $modalContent .= "<strong>Ngày sinh:</strong> " . $row["NgaySinh"] . "<br>";
                      $modalContent .= "<strong>Giới tính:</strong> " . ($row["GioiTinh"] == 1 ? 'Nam' : 'Nữ') . "<br>"; // Giả sử 1 là Nam, 0 là Nữ
                      $modalContent .= "<strong>Địa chỉ:</strong> " . $row["DiaChi"] . "<br>";
                      $modalContent .= "<strong>Số điện thoại:</strong> " . $row["SdtHV"] . "<br>";
                      $modalContent .= "<strong>Email:</strong> " . $row["EmailHV"] . "<br>";
                      $modalContent .= "<strong>Ngày Tiếp Nhận:</strong> " . $row["NgayTiepNhan"] . "<br>";
                      $modalContent .= "<strong>Điểm đầu vào:</strong> " . $row["DiemDauVao"] . "<br>";
                      $modalContent .= "<strong>Mã lớp:</strong> " . $row["MaLop"] . "<br>";
                      $modalContent .= "</div>";
                      $modalContent .= "</div>";
                      $modalContent .= "</div>";

                      $modalContent .= "</div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                      ";

                      return $modalContent;
                    }

                    function fetchClasses($conn)
                    {
                      $classOptions = '';
                      $query = "SELECT MaLop FROM lop_hoc WHERE TinhTrang = 'Còn Chỗ'";
                      $result = $conn->query($query);
                      while ($row = $result->fetch_assoc()) {
                        $classOptions .= "<option value='" . $row['MaLop'] . "'>" . $row['MaLop'] . "</option>";
                      }
                      return $classOptions;
                    }

                    function createModalEdit($id, $title, $row, $conn)
                    {

                      $classOptions = fetchClasses($conn);
                      $modalEditContent = "
                      <div class='modal fade' id='{$id}' tabindex='-1' role='dialog' aria-labelledby='{$id}EditLabel' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                              <div class='modal-content'>
                                  <div class='modal-header'>
                                      <h5 class='modal-title' id='{$id}EditLabel'>$title</h5>
                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                          <span aria-hidden='true'>&times;</span>
                                      </button>
                                  </div>
                                  <div class='modal-body'>
                                      <form id='editForm{$id}' method='post' action='update_data_student.php'>
                                          <div class='form-group'>
                                              <label for='MaHV{$id}'>Mã học viên</label>
                                              <input type='text' class='form-control' id='MaHV{$id}' name='MaHV' value='" . $row["MaHV"] . "' readonly>
                                          </div>
                                          <div class='form-group'>
                                              <label for='TenHV{$id}'>Họ tên</label>
                                              <input type='text' class='form-control' id='TenHV{$id}' name='TenHV' value='" . $row["TenHV"] . "' required>
                                          </div>
                                          <div class='form-group'>
                                              <label for='NgaySinh{$id}'>Ngày sinh</label>
                                              <input type='date' class='form-control' id='NgaySinh{$id}' name='NgaySinh' value='" . $row["NgaySinh"] . "' required>
                                          </div>
                                          <div class='form-group'>
                                              <label for='GioiTinh{$id}'>Giới tính</label>
                                              <select class='form-control' id='GioiTinh{$id}' name='GioiTinh' required>
                                                  <option value='1'" . ($row["GioiTinh"] == 1 ? ' selected' : '') . ">Nam</option>
                                                  <option value='0'" . ($row["GioiTinh"] == 0 ? ' selected' : '') . ">Nữ</option>
                                              </select>
                                          </div>
                                          <div class='form-group>
                                              <label for='DiemDauVao{$id}'>Điểm đầu vào</label>
                                              <input type='text' class='form-control' id='DiemDauVao{$id}' name='DiemDauVao' value='" . $row["DiemDauVao"] . "' required>
                                          </div>

                                          <div class='form-group'>
                                              <label for='DiaChi{$id}'>Địa chỉ</label>
                                              <input type='text' class='form-control' id='DiaChi{$id}' name='DiaChi' value='" . $row["DiaChi"] . "' required>
                                          </div>
                                          <div class='form-group'>
                                              <label for='SdtHV{$id}'>Số điện thoại</label>
                                              <input type='text' class='form-control' id='SdtHV{$id}' name='SdtHV' value='" . $row["SdtHV"] . "' required>
                                          </div>
                                          <div class='form-group'>
                                              <label for='EmailHV{$id}'>Email</label>
                                              <input type='email' class='form-control' id='EmailHV{$id}' name='EmailHV' value='" . $row["EmailHV"] . "' required>
                                              <div class='form-group'>
                                              <label for='MaLop{$id}'>Mã lớp</label>
                                              <select class='form-control' id='MaLop{$id}' name='MaLop' required>
                                                  $classOptions
                                              </select>
                                          </div>
                                                  
                                              </select>
                                        </div>
                                        <!-- Có thể thêm các trường nhập liệu khác nếu cần -->
                                    </form>
                                  </div>
                                  <div class='modal-footer'>
                                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                                      <button type='submit' form='editForm{$id}' class='btn btn-primary'>Lưu Thay Đổi</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      ";

                      return $modalEditContent;
                    }

                    function createModalDelete($id, $title, $row)
                    {
                      $modalDeleteContent = "
                      <div class='modal fade' id='{$id}' tabindex='-1' role='dialog' aria-labelledby='{$id}DeleteLabel' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                              <div class='modal-content'>
                                  <div class='modal-header'>
                                      <h5 class='modal-title' id='{$id}DeleteLabel'>$title</h5>
                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                          <span aria-hidden='true'>&times;</span>
                                      </button>
                                  </div>
                                  <div class='modal-body'>
                                      Bạn có chắc chắn muốn xóa học viên này không?
                                  </div>
                                  <div class='modal-footer'>
                                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Hủy</button>
                                      <button type='button' class='btn btn-danger' onclick='deleteStudent(\"" . $row["MaHV"] . "\")'>Xóa</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      ";
                      return $modalDeleteContent;
                    }



                    ?>

                    <script>
                      function deleteStudent(maHV) {
                        $.ajax({
                          url: 'delete_student.php', // Đường dẫn tới file xử lý
                          type: 'POST',
                          data: {
                            MaHV: maHV
                          },
                          success: function(response) {
                            // Thông báo thành công hoặc cập nhật trang
                            alert('Xóa học viên thành công!');
                            window.location.reload(); // Tải lại trang để cập nhật danh sách
                          },
                          error: function() {
                            alert('Có lỗi xảy ra, vui lòng thử lại.');
                          }
                        });
                      }
                    </script>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>