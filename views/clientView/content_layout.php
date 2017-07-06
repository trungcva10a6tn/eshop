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
<div class="container">
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
</div>
</body>
</html>
