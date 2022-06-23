<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <style>
    div {
        padding: 10px;
        font-size: 16px;
    }
    </style>
    <title>ログイン</title>
</head>

<body>
    <div class="content">
        <h1>ログイン</h1>

        <form action="login_act.php" method="post">
            <div>
                <label>メールアドレス：<label>
                        <input type="text" name="email">
            </div>
            <div>
                <label>パスワード：<label>
                        <input type="password" name="password">
            </div>
            <button type="submit" class="btn next-btn">ログイン</button>
    </div>

    </form>

    </div>

    <div class="content">
        <h2>新規登録の方は<a href="entry.php">こちら</a></h2>

</body>

</html>