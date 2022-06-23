<?php
session_start();
require_once('./common/header_parts.php');
//1.  DB接続します
require_once("./dbconnect.php");
// try {
//   $db = new PDO('mysql:dbname=ec_db;charset=utf8;host=localhost','root','root');
// } catch (PDOException $e) {
//   exit('DbConnectError:'.$e->getMessage());
// }


//２．データ抽出SQL作成
$stmt = $db->prepare("SELECT * FROM ec_table");
$status = $stmt->execute();


//３．データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<li class="products-item">';
    $view .= '<a href="item.php?id='.$result["id"].'">';
    $view .= '<p class="products-thumb"><img src="./img/'.$result["fname"].'" width="200"></p>';
    $view .= '<h3 class="products-title">'.$result["item"].'</h3>';
    $view .= '<p class="products-price">'.$result["value"].'</p>';
    $view .= '</a>';
    $view .= '</li>';
  }
}
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
    <!-- <header class="header1"> <a href="logout.php" class="btn-logout">ログアウト</a></header>
    <header class="header2">
        <h1 class="site-title"><a href="index.php"><img src="img/LOGO_Founder_or.png" alt="Founder" height="60"></a>
        </h1>
        <a href="cart.php" class="btn-cart"><img src="images/common/icon-cart.png" alt="Founder"></a>

        <a href="#" class="btn-menu"><img src="images/common/icon-menu.png" alt=""></a>
    </header> -->


    <div class="main-video">
        <video class="movie" loop autoplay playsinline //動画ファイルが埋め込まれた表示領域で再生 controls //コントロールボタンloop
            src="video/メイン（ベビーカー）.mp4"></video>
    </div>

    <div class="outer">
        <!-- メインカテゴリー-->
        <div class="list-outer">
            <ul class="list">
                <li class="list-item"><a href="#">振動</a></li>
                <li class="list-item"><a href="#">価格</a></li>
                <li class="list-item"><a href="#">軽さ</a></li>
                <li class="list-item"><a href="#">操作性</a></li>
                <li class="list-item"><a href="#">車輪数</a></li>
            </ul>
        </div>
        <!--end メインカテゴリー -->

        <div class="wrapper wrapper-main flex-parent">

            <aside class="sidebar">
                <!--form-->
                <div class="widget">
                    <form action="" method="get" class="search-form">
                        <div>
                            <input type="text" placeholder="アイテムを探す" class="search-box">
                            <input type="submit" value="送信" class="search-submit">
                        </div>
                    </form>
                </div>
                <!--end form-->

                <!--category-->
                <div class="widget">
                    <h3 class="widget-title">ベビー用品</h3>
                    <ul class="category-list">
                        <li class="category-item"><a href="#">ベビーカー</a></li>
                        <li class="category-item"><a href="#">オムツ</a></li>
                        <li class="category-item"><a href="#">抱っこ紐</a></li>
                        <li class="category-item"><a href="#">チャイルドシート</a></li>
                        <li class="category-item"><a href="#">浴用洗剤</a></li>
                    </ul>
                </div>
                <!--end category-->
            </aside>

            <main class="wrapper-main">
                <!--並び替えボタン-->
                <div class="sort-area">
                    <a href="#" class="sort-all">全てを見る</a>

                    <div class="sort-detail">
                        <p class="sort-text">並べ替え:</p>
                        <ul class="sort-list flex-parent">
                            <li class="sort-item"><a href="#">名前順</a></li>
                            <li class="sort-item"><a href="#">価格の安い順</a></li>
                        </ul>
                    </div>
                </div>
                <!--end 並び替えボタン-->

                <!--商品リスト-->
                <div>
                    <ul class="products-list">
                        <?php echo $view; ?>
                    </ul>]

                </div>
                <!--end 商品リスト-->

                <!--ページャー-->
                <ul class="pager clearfix">
                    <li class="pager-item"><a href="#">1</a></li>
                    <li class="pager-item"><a href="#">2</a></li>
                    <li class="pager-item"><a href="#">3</a></li>
                    <li class="pager-item"><a href="#">4</a></li>
                    <li class="pager-item"><a href="#">5</a></li>
                    <li class="pager-item"><a href="#">最後へ</a></li>
                </ul>
                <!--end ページャー-->
            </main>
        </div>
    </div>

    <!--footer-->
    <!-- ↓↓↓↓ヒアドキュメントが機能しない。。↓↓↓ -->
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