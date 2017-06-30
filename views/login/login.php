<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/logincss.css">
    <link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <div class="logo">
            <div>
                <div><b>E-SHOP</b></div>
            </div>
        </div>
        <form method="post">
            <h2>LOGIN</h2>
            <div class="login-input">
                <label><i class="fa fa-user fa-lg" aria-hidden="true"></i></label><input type="text" name="user_name" placeholder="User Name" value="<?=$data["user_name"]?>">
            </div>
            <div class="login-input">
                <label><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></label><input type="password" name="password" placeholder="password">
            </div>
            <button type="submit" name="login_new">ĐĂNG NHẬP</button>
        </form>
        <button onclick="location.href='?page=dang-ky'">ĐĂNG KÝ</button>
    </div>
</body>
</html>