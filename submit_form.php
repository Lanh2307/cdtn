<?php
session_start(); // Khởi động session để sử dụng biến $_SESSION

// Lấy dữ liệu từ form
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$current_date = date('Y-m-d'); // Lấy ngày tháng năm hiện tại

$conn = mysqli_connect('localhost', 'root', 'root', 'cdtn');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Chuyển đổi giới tính từ text sang mã số tương ứng
$gender_code = ($gender === 'male') ? 1 : (($gender === 'female') ? 0 : 2);

// Truy vấn SQL để chèn dữ liệu
$sql = "INSERT INTO hoc_vien (TenHV, NgaySinh, GioiTinh, DiaChi, SdtHV, EmailHV, NgayTiepNhan) 
        VALUES (?, ?, ?, ?, ?, ?, ?)"; // Thêm trường NgayTiepNhan vào câu lệnh

// Chuẩn bị truy vấn và thực hiện chèn dữ liệu
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissss", $name, $dob, $gender_code, $address, $phone, $email, $current_date); // Thêm biến $current_date vào tham số

if ($stmt->execute()) {
    $_SESSION['success_message'] = "Đăng ký học viên thành công";
    header('Location: index.php'); // Chuyển hướng đến trang chủ
    exit();
} else {
    echo "Lỗi: " . $stmt->error;
}

$stmt->close();
$conn->close();
