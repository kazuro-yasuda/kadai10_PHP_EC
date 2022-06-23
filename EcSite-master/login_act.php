<?php
session_start();
require_once("./dbconnect.php");
// $db = db_conn();

//POST値を受け取る
$email = $_POST['email'];
$password = $_POST['password'];
//  echo $password;
//

//データ登録SQL作成
 //mailアドレスがあるか確認
$stmt = $db->prepare("SELECT * FROM members WHERE email = :email");
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$status = $stmt->execute();

// echo $stmt['password'];
// exit();

//抽出データ数を取得
$member = $stmt->fetch();
// exit();
// echo"<pre>";
// var_dump($member);
// echo"</pre>";

// exit();
// echo $member['password'];
// exit();


//指定したハッシュがパスワードに一致しているかチェック
if (password_verify($password, $member['password'])
) {
    //DBのユーザー情報をセッションに保存
    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    // $msg = 'ログインしました。';
    // $link = '<a href="index.php">TOPページへ</a>';
    header('Location: index.php');
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php">戻る</a>';
}
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>