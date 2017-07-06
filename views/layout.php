<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop bán hàng điện thoại</title>
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/layout/style.css"/>
    <link rel="stylesheet" href="css/flip.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/jquery.flip.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="jquery.bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="jquery.bxslider/jquery.bxslider.min.css" rel="stylesheet" />
    <script>
        $(document).ready(function() {
            $(function(){
                $(".flip").flip({
                    trigger: 'hover'
                });
            });
            $('.bxslider').bxSlider();
            $(window).scroll(function () {
                console.log($(window).scrollTop())
                if ($(window).scrollTop() > 80) {
                    $('#header').addClass('navbar-fixed');
                }
                if ($(window).scrollTop() < 80) {
                    $('#header').removeClass('navbar-fixed');
                }
            });
        });
    </script>

</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="banner">
            <div class="col-lg-2">
                <img id="logo-img" src="img/eshop.png">
            </div>
            <div class="nav">
                <ul class="nav nav-tabs nav-menu">
                    <li role="presentation" class="dropdown item-menu ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">ĐIỆN THOẠI<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-submenu" role="menu">
                            <li class="item-sub-menu" ><a href="#"></a></li>
                            <li class="item-sub-menu"><a href="#"></a></li>
                            <li class="item-sub-menu"><a href="#"></a></li>
                            <li class="item-sub-menu"><a href="#"></a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown item-menu ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">HÃNG<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-submenu" role="menu">
                            <li class="item-sub-menu"><a href="#">IPHONE</a></li>
                            <li class="item-sub-menu"><a href="#">SAMSUNG</a> </li>
                            <li class="item-sub-menu"><a href="#">OPPO</a></li>
                            <li class="item-sub-menu"><a href="#">SONY</a></li>
                            <li class="item-sub-menu"><a href="#">NOKIA</a></li>
                        </ul>
                    </li>
                    <li class="item-menu"><a href="#">PHỤ KIỆN</a></li>
                    <li class="item-menu"><a href="#">KHUYỄN MÃI</a></li>
                    <li class="item-menu has-dropdown"><a href="#">SUPPORT</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class = "container">
        <div class="row">
            <div class="col-md-8">
                <ul class="bxslider">
                    <li><img src="img/1.png" /></li>
                    <li><img src="img/2.gif" /></li>
                    <li><img src="img/3.png" /></li>
                    <li><img src="img/4.png" /></li>
                    <li><img src="img/5.png" /></li>
                </ul>
            </div>
            <div class="col-md-4 tech_news">
                <h3>TIN CÔNG NGHỆ</h3><hr/>
                <ul>
                    <li>
                        <a href="http://techgu.com/cong-nghe/mat-kinh-bao-ve-cua-galaxy-note-8-tiep-tuc-xuat-hien-thuc-te_techgu1337841.html">
                            <img width="100" height="70" src="img/fa_801x450-100x100.jpg">
                            Mặt kính bảo vệ của Galaxy Note 8 tiếp tục xuất hiện thực tế
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="https://trangcongnghe.com/tin-tuc-cong-nghe/dien-thoai/69493-asus-zenfone-ar-cau-h236nh-si234u-khung-voi-ram-8-gb-camera-23-mp-sap-b225n-ra.html">
                            <img width="100" height="70" src="img/304_800x450-100x100.jpg">
                            Asus ZenFone AR cấu hình siêu khủng với RAM 8 GB, camera 23 MP sắp bán ra
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="https://trangcongnghe.com/tin-tuc-cong-nghe/dien-thoai/69484-h224ng-loat-smartphone-nokia-moi-sap-tr236nh-l224ng-c243-ca-nokia-9.html">
                            <img width="100" height="70" src="img/nokia-8-image-leak_800x450-100x100.jpg">
                            Hàng loạt smartphone Nokia mới sắp trình làng, có cả Nokia 9
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="row">
        <?php
        foreach ($data as $row){
            ?>
        <div class="col-md-4">
            <div class="flip">
                <div class="front">
                    <img src="img/oppo.jpg" alt="" />
                </div>
                <div class="back">
                    <h3><?= $row["name_product"] ?></h3>
                    <strong>6.990.000₫</strong>
                    <p>Phiếu mua hàng OPPO trị giá 300.000đ.<br/>
                        Tặng gậy chụp ảnh (sefie) khi mua Online ( từ 4/7 - 31/7)</p><br/>

                    <span><?= $row["screen"] ?></span><br/>
                    <span><?= $row["operating_system"] ?></span><br/>
                    <span><?= $row["CPU"] ?></span><br/>
                    <span>><?= $row["pin"] ?></span><br/>
                </div>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
        <div class="row">
            <h3>PHỤ KIỆN</h3><hr/>
            <div class="col-md-2">
                <div class="iconacc-pinsac"></div>
                <h5>Pin sạc dự phòng</h5>
                <img width="80" height="80" src="img/pin-sac.jpg">
            </div>
            <div class="col-md-2">
                <div class="iconacc-sacday"></div>
                <h5>Cáp sạc</h5>
                <img width="80" height="80" src="img/day_sac.jpg">
            </div>
            <div class="col-md-2">
                <div class="iconacc-tainghe"></div>
                <h5>Tai nghe</h5>
                <img width="85" height="85" src="img/tai_nghe.jpg">
            </div>
            <div class="col-md-2">
                <div class="iconacc-chuot"></div>
                <h5>Chuột</h5><br/>
                <img width="80" height="80" src="img/chuot.jpg">
            </div>
            <div class="col-md-2">
                <div class="iconacc-oplung"></div>
                <h5>Ốp lưng điện thoại</h5>
                <img width="80" height="80" src="img/op_lung.jpg">
            </div>
            <div class="col-md-2">
                <div class="iconacc-pkkhac"></div>
                <h5>Gậy tự sướng</h5>
                <img width="80" height="80" src="img/gay_chupanh.jpg">
            </div>
        </div>
        <div class="footer"><hr/>
            <div class="row">
                <div class="col-md-4 footer-left">
                    <a href="#">Tìm hiểu về mua trả góp</a>
                    <a href="#">Tìm trung tâm bảo hàng hãng</a>
                    <a href="#">Chính sách đổi trả</a>
                    <a href="#">Giao hàng & Thanh toán</a>
                </div>
                <div class="col-md-4 footer-center">
                    <a href="#">Giới thiệu</a>
                    <a href="#">Tuyển dụng</a>
                    <a href="#">Gửi góp ý, khiếu nại</a>
                    <a href="#">Tìm siêu thị</a>
                </div>
                <div class=" col-md-4 icon">
                    <img src="img/icon/facebook.png"  width="30px" height="30px">
                    <img src="img/icon/twitter.png" width="30px" height="30px">
                    <img src="img/icon/linkedin.png" width="30px" height="30px">
                    <img src="img/icon/youtube.png" width="30px" height="30px">
                </div>
            </div>
    </div>
</div>
</body>
</html>
