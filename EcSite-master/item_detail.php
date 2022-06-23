<?php
require_once('./common/header_parts.php');
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
</head>

<body>
    <?= $header_parts ?>
    <!-- <header class="header">
        <h1 class="site-title"><a href="index.php"><img src="img/LOGO_Founder_or.png" alt="Founder" height="60"></a>
        </h1>
        <a href="cart.php" class="btn-cart"><img src="images/common/icon-cart.png" alt="Founder"></a>
        <a href="index.php" class="btn-menu"><img src="images/common/icon-menu.png" alt=""></a>
    </header> -->


    <div>
        <ul class="bxslider">
            <li><img src="images/index/slide.jpg" alt=""></li>
            <li><img src="images/index/slide.jpg" alt=""></li>
            <li><img src="images/index/slide.jpg" alt=""></li>
            <li><img src="images/index/slide.jpg" alt=""></li>
            <li><img src="images/index/slide.jpg" alt=""></li>
        </ul>
    </div>

    <!--footer-->
    <!-- <?= $footer_parts ?> -->
    <footer class="footer">
        <div class="wrapper wrapper-footer">

            <div class="footer-widget__long">
                <p><a href="#"><img src="img/LOGO_Founder_or.png" alt="Founder" height="60"></a></p>
            </div>


            <div class="footer-widget">
                <ul class="nav-footer">
                    <li class="nav-footer__item"><a href="#">Company</a></li>
                    <li class="nav-footer__item"><a href="#">Members</a></li>
                    <li class="nav-footer__item"><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-widget">
                <ul class="social-list">
                    <li class="social-item"><a href="#"><img src="images/common/facebook.png" alt=""></a></li>
                    <li class="social-item"><a href="#"><img src="images/common/instagram.png" alt=""></a></li>
                    <li class="social-item"><a href="#"><img src="images/common/twitter.png" alt=""></a></li>
                </ul>
            </div>

        </div>
        <p class="copyrights"><small>Copyrights kazuro yasuda.</small></p>
    </footer>
    <!--end footer-->

    <script src="http://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script>
    $(".bxslider").bxSlider({
        auto: true,
        options: 3000
    });
    </script>
</body>

</html>