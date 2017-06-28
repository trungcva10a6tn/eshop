<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/logincss.css">
    <link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <form method="post">
            <h2>LOGIN</h2>
            <div>
                <label><i class="fa fa-user fa-lg" aria-hidden="true"></i></label><input type="text" name="user_name" placeholder="User Name">
            </div>
            <div>
                <label><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></label><input type="password" name="password" placeholder="password">
            </div>
            <button type="submit" name="login_new">Đăng Nhập</button>
        </form>
        <button onclick="location.href='?page=dang-ky'">Đăng Ký</button>
    </div>
</body>
</html>