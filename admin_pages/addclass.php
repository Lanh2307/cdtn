<?php
$conn = mysqli_connect('localhost', 'root', '', 'cdtn'); // Kết nối tới database

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ POST
$maLop = $_POST['MaLop'];
$loaiLop = $_POST['LoaiLop'];
$ngayBD = $_POST['NgayBD'];
$ngayKT = $_POST['NgayKT'];
$siSo = $_POST['SiSo'];
$tinhTrang = $_POST['TinhTrang'];
$maCH = $_POST['MaCH'];
$maCN = $_POST['MaCN'];
$maGV = $_POST['MaGV'];

// Câu lệnh SQL để chèn dữ liệu mới
$sql = "INSERT INTO lop_hoc (MaLop, LoaiLop, NgayBD, NgayKT, SiSo, TinhTrang, MaCH, MaCN, MaGV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Chuẩn bị câu lệnh SQL
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Lỗi chuẩn bị câu lệnh: " . $conn->error;
    exit;
}

// Ràng buộc các biến và thực thi câu lệnh SQL
$stmt->bind_param("ssssissss", $maLop, $loaiLop, $ngayBD, $ngayKT, $siSo, $tinhTrang, $maCH, $maCN, $maGV);

if ($stmt->execute()) {
    echo "Thêm lớp học thành công!";
} else {
    echo "Lỗi khi thêm lớp học: " . $stmt->error;
}

// Đóng câu lệnh và kết nối
$stmt->close();
$conn->close();
