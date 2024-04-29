<?php
$conn = mysqli_connect('localhost', 'root', '', 'cdtn'); // Kết nối tới database

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['MaHV'])) {
    $maHV = $_POST['MaHV'];

    // Câu lệnh SQL để xóa học viên
    $sql = "DELETE FROM hoc_vien WHERE MaHV = ?";

    // Chuẩn bị câu lệnh và thực thi
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $maHV);
        if ($stmt->execute()) {
            echo "Học viên đã được xóa thành công.";
        } else {
            echo "Lỗi: không thể xóa học viên.";
        }
        $stmt->close();
    } else {
        echo "Lỗi: không thể chuẩn bị câu lệnh SQL.";
    }

    $conn->close();
}
