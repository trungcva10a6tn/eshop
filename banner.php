<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BANNER</title>
    <script type="text/javascript" src="demo.js" async></script>
    <style>
    .img01{
        width: 500px;
        height: 200px;
        overflow: hidden;
        opacity: 0;
        position: absolute;
        transition: all 1s ease-in;
        -moz-transition: all 1s ease-in;
        -webkit-transition: all 1s ease-in;
    }
    .banner{
        overflow: auto;
        margin: 10px 20%;
    }
    img{
        width: 500px;
        height: auto;
    }
    </style>
</head>
<body>
<div class="banner">
    <div class="img01">
        <img src="1.jpg" alt="">
    </div>
    <div class="img01">
        <img src="2.jpg" alt="">
    </div>
    <div class="img01">
        <img src="doremon.jpg" alt="">
    </div>
</div>
</body>
</html>