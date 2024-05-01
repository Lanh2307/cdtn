
<?php


$conn = mysqli_connect('localhost', 'root', '', 'cdtn');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Giả sử bạn đã có kết nối cơ sở dữ liệu ở đây ($conn)

// Kiểm tra xem có dữ liệu được gửi đến script qua phương thức POST không
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $maLop = $_POST['MaLop'];
    $loaiLop = $_POST['LoaiLop'];
    $ngayBD = $_POST['NgayBD'];
    $ngayKT = $_POST['NgayKT'];
    $siso = $_POST['SiSo'];
    $tinhtrang = $_POST['TinhTrang'];
    $maCH = $_POST['MaCH'];
    $maGV = $_POST['MaGV'];
    $maCN = $_POST['MaCN'];

    // Tạo và thực thi truy vấn SQL sử dụng prepared statement để tránh SQL injection
    $stmt = $conn->prepare("UPDATE lop_hoc SET LoaiLop=?, NgayBD=?, NgayKT=?, SiSo=?, TinhTrang=?, MaCH=?, MaGV=?, MaCN=? WHERE MaLop=?");
    $stmt->bind_param("ssisssisi", $loaiLop, $ngayBD, $ngayKT, $siso, $tinhtrang, $maCH, $maGV, $maCN);

    // Kiểm tra xem truy vấn có thành công không
    if ($stmt->execute()) {
        echo "Cập nhật thông tin lớp học thành công.";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    $stmt->close();
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();

// Chuyển hướng người dùng trở lại trang trước đó hoặc hiển thị thông báo
header("Location: lophoc.php"); // Thay đổi đường dẫn phù hợp
exit();
?>