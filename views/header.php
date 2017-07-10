<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Điện Thoại</title>
    <link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/eshopcss.css">
    <link rel="stylesheet" href="css/MediaEshop.css">
</head>
<body>
<div class="header" onclick="location.href='?page=thanh-vien'">
    TRANG QUẢN LÝ
</div>
<div class="admin_info">
    <div>
        <p> <?= $_SESSION["full_name"]?></p>
        <a href="?page=logout">Log Out</a>
    </div>
</div>
<div class="control">
    <div class="menu">
        <div onclick="location.href='?page=thanh-vien'"><b>Quản Lý Thành Viên</b></div>
        <div onclick="location.href='?page=san-pham'"><b>Quản Lý Sản Phẩm</b></div>
        <div onclick="location.href='?page=hoa-don'"><b>Quản Lý Hóa Đơn</b></div>
        <div onclick="location.href='?page=hang'"><b>Quản Lý Hãng</b></div>
        <div onclick="location.href='?page=dot-giam-gia'"><b>Quản Lý Đợt Giảm Giá</b></div>
        <div onclick="location.href='?page=view-san-pham'"><b>Người dùng</b></div>
    </div>
</div>
</body>
</html>