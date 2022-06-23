<?php
// function db_conn(){
    try {
        $db = new PDO('mysql:dbname=ec_db;host=127.0.0.1;charset=utf8mb4', 'root', 'root');
        //return $db;
    }   catch (PDOException $e) {
        echo "データベース接続エラー　：".$e->getMessage();
    }
// }
?>
