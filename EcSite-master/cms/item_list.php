<?php
require_once('../common/header_parts.php');
//1.  DB接続します
require_once("../dbconnect.php");
// try {
//   $pdo = new PDO('mysql:dbname=ec_db;charset=utf8;host=localhost','root','root');
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
 while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){

       $view .='<li class="cart-list">';
       $view .='<p class="cart-thumb"><img src="../img/'.$res["fname"].'" width="200"></p>';
       $view .='<h2 class="cart-title">'.$res["item"].'</h2>';
       $view .='<p class="cart-price">'.$res["value"].'</p>';
       $view .='<a href="#" class="btn-delete">削除</a>';
       $view .='</li>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
</head>

<body class="cms">
    <header class="header">

        <p class="site-title"><a href="../index.php"><img src="../img/LOGO_Founder_or.png" alt="Founder"
                    height="60"></a>
        </p>
    </header>

    <!--end header  -->

    <div class="outer">
        <h1 class="page-title page-title__cms">管理画面</h1>
        <div class="wrapper wrapper-main flex-parent">
            <main class="wrapper-main">
                <ul class="cart-products">
                    <?php echo $view; ?>
            </main>
        </div>
    </div>

    <!--footer-->
    <!-- ↓↓↓↓ヒアドキュメントが機能しない。。↓↓↓ -->
    <!-- <?= $footer_parts ?> -->
    <footer class="footer">
        <div class="wrapper wrapper-footer">

            <div class="footer-widget__long">
                <p><a href="#"><img src="../img/LOGO_Founder_or.png" alt="Founder" height="60"></a></p>
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
                    <li class="social-item"><a href="#"><img src="../images/common/facebook.png" alt=""></a></li>
                    <li class="social-item"><a href="#"><img src="../images/common/instagram.png" alt=""></a></li>
                    <li class="social-item"><a href="#"><img src="../images/common/twitter.png" alt=""></a></li>
                </ul>
            </div>

        </div>
        <p class="copyrights"><small>Copyrights kazuro yasuda.</small></p>
    </footer>
    <!--end footer-->

    <script src="http://code.jquery.com/jquery-3.0.0.js"></script>
</body>

</html>