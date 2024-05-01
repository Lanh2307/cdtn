<?php
$conn = mysqli_connect('localhost', 'root', '', 'cdtn'); // Kết nối tới database

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['MaLop'])) {
    $maHV = $_POST['MaLop'];

    // Câu lệnh SQL để xóa học viên
    $sql = "DELETE FROM lop_hoc WHERE MaLop = ?";

    // Chuẩn bị câu lệnh và thực thi
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $maLop);
        if ($stmt->execute()) {
            echo "Lớp học đã được xóa thành công.";
        } else {
            echo "Lỗi: không thể xóa lớp học.";
        }
        $stmt->close();
    } else {
        echo "Lỗi: không thể chuẩn bị câu lệnh SQL.";
    }

    $conn->close();
}
