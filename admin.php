<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional: Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* CSS tùy chỉnh */
        .navbar-custom {
            background-color: #e3f2fd;
            /* Màu nền của navbar */
        }

        /* Thêm các style tùy chỉnh khác nếu cần */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">
            #DASHMIN
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Admin <span class="sr-only">(current)</span></a>
                </li>
                <!-- Thêm các nav-item khác nếu cần -->
            </ul>
        </div>
        <!-- Phần thông tin doanh thu và các thông tin khác nằm ở phía bên phải navbar có thể được thêm vào đây -->
        <div class="navbar-text ml-auto">
            <span><i class="fas fa-user"></i> 8 Người dùng</span>
            <!-- Thêm các thông tin khác tương tự -->
        </div>
    </nav>

    <!-- Optional: Bootstrap JS và jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>