<?php
// Lấy dữ liệu từ form
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$conn = mysqli_connect('localhost', 'root', 'root', 'cdtn');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Chuyển đổi giới tính từ text sang mã số tương ứng
$gender_code = ($gender === 'male') ? 1 : (($gender === 'female') ? 0 : 2);

// Truy vấn SQL để chèn dữ liệu
$sql = "INSERT INTO hoc_vien (TenHV, NgaySinh, GioiTinh, DiaChi, SdtHV, EmailHV) 
        VALUES (?, ?, ?, ?, ?, ?)";

// Chuẩn bị truy vấn và thực hiện chèn dữ liệu
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissi", $name, $dob, $gender_code, $address, $phone, $email);

if ($stmt->execute()) {
    echo "Đăng ký học viên thành công";
} else {
    echo "Lỗi: " . $stmt->error;
}
