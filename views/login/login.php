<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/logincss.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post">
            <div>
                <label>Tên Đăng Nhập: </label><input type="text" name="user_name">
            </div>
            <div>
                <label>Mật Khẩu: </label><input type="password" name="password">
            </div>
            <div>
                <button type="submit" name="login_new">Đăng Nhập</button>
            </div>
        </form>
        <button onclick="location.href='?page=thanh-vien'">Đăng Ký</button>
    </div>
</body>
</html>