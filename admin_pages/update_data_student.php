
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
    $maHV = $_POST['MaHV'];
    $tenHV = $_POST['TenHV'];
    $ngaySinh = $_POST['NgaySinh'];
    $gioiTinh = $_POST['GioiTinh'];
    $diaChi = $_POST['DiaChi'];
    $sdtHV = $_POST['SdtHV'];
    $emailHV = $_POST['EmailHV'];
    $ngayTiepNhan = $_POST['NgayTiepNhan'];
    $diemDauVao = $_POST['DiemDauVao'];
    $maLop = $_POST['MaLop'];

    // Tạo và thực thi truy vấn SQL sử dụng prepared statement để tránh SQL injection
    $stmt = $conn->prepare("UPDATE hoc_vien SET TenHV=?, NgaySinh=?, GioiTinh=?, DiaChi=?, SdtHV=?, EmailHV=?, DiemDauVao=?, MaLop=? WHERE MaHV=?");
    $stmt->bind_param("ssisssisi", $tenHV, $ngaySinh, $gioiTinh, $diaChi, $sdtHV, $emailHV, $diemDauVao, $maLop, $maHV);

    // Kiểm tra xem truy vấn có thành công không
    if ($stmt->execute()) {
        echo "Cập nhật thông tin học viên thành công.";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    $stmt->close();
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();

// Chuyển hướng người dùng trở lại trang trước đó hoặc hiển thị thông báo
header("Location: tables.php"); // Thay đổi đường dẫn phù hợp
exit();
?>