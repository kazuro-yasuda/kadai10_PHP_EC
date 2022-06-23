-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 6 月 23 日 05:06
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ec_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_table`
--

CREATE TABLE `ec_table` (
  `id` int(12) NOT NULL,
  `item` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(6) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `ec_table`
--

INSERT INTO `ec_table` (`id`, `item`, `value`, `description`, `fname`, `indate`) VALUES
(4, 'Joie ベビーカー エアスキップ メッシュ', 17000, '生後1ヶ月から体重15kg（36ヶ月頃）まで\r\n\r\nW46xD84xH100cm\r\n折畳み：W46xD37xH101cm', 'Joie ベビーカー エアスキップ メッシュ（メイン）.jpg', '2022-06-05 12:51:04'),
(5, 'エアバギー　ココブレーキ', 75900, '生後0ヶ月～4歳頃まで\r\n\r\n起立時：幅53.5cm 全長96cm 高さ104.5cm\r\n折畳時：幅53.5cm 奥行40cm 高さ82cm\r\n\r\n重量：9.5kg\r\n耐荷重：27.5kgまで（シート22kg＋バスケット5kg＋ドリンクホルダー0.5kg）', 'ココブレーキEX フロムバース（メイン）.jpg', '2022-06-05 12:53:37'),
(6, 'カルーンエアー', 32000, '生後1カ月～36カ月 （体重15kg以下）\r\n\r\n開：W455×D815～985×H1000～1035(mm)\r\n閉：W455×D305×H962(mm)', 'カルーンエアー AB（メイン）.jpg', '2022-06-05 12:58:46'),
(7, 'カルフィットグラン', 19800, '1ヶ月頃～3歳頃まで\r\n\r\n開：約幅47×奥行87×高さ101cm\r\n閉：約幅48×奥行43×高さ101cm\r\n', 'カルフィットグラン（メイン）.jpg', '2022-06-05 13:00:07'),
(8, 'サイベックス', 75000, '1カ月ごろから3才ごろまで(15kgまで)\r\n\r\n\r\n走行時：W49×D82-91×H96.5-107cm 自立収納時：W49×D54×H69cm 5.8kg※付属品（新生児用インレイ、コンフォートインレイ、ヘッドクッション、バンパーバー）を除く', 'サイベックス.jpeg', '2022-06-05 13:05:30'),
(9, 'アップリカ　オプティア クッション', 64500, '生後1カ月～36カ月\r\n（体重15kg以下）\r\n\r\n開：W517×D870～940×H1010～1040(mm)\r\n閉：W517×D410×H940～1027(mm)\r\n\r\n重さ	\r\n6.9kg\r\n\r\nリクライニング角度	\r\n111°～156°\r\n', 'アップリカ.jpeg', '2022-06-05 13:07:24');

-- --------------------------------------------------------

--
-- テーブルの構造 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`) VALUES
(1, '安田和朗', 'kazuro_918@me.com', '$2y$10$PE5leHpcGyu4lKvwPmN2i.TnF.Z9y28acs6V0M0EoujUXuKIQoOWi'),
(2, 'KAZURO YASUDA', 'kazuro918@gmail.com', '$2y$10$TwWoPdbJWGA/TVnS86a/.u0xyjEVBZe1omd6ItRCN.JEKyPQDQc/i'),
(3, 'ヤスダカズロウ', 'kazu@me.com', '$2y$10$zZTCSR872LE/2f26cqNDeeAb8FiS7QLx9RFQ.Ck.0vhi6K2uedw.a'),
(4, 'やすだ', 'yasuda@gmail', '$2y$10$LdCvksuAbEzhge9eiPG9keO7E7C86PY5I35l6QwakQ.vvnxhOMMpq'),
(5, '近藤', 'kondo@gmail', '$2y$10$XLWFcZrLF4ShNvXJD0ViguTjineyENkkq7X2QS5GfE/YUfXh7guDe'),
(6, '安藤', 'ando@gmail.com', '$2y$10$ptdUkbZNtTTF1tvGr/c4.e5bNosXv.wa1vyb133B5M7TQpJNax6ne'),
(7, '後藤', 'goto@gmail', '$2y$10$dtL2Jpn8g0Co1hl/5TRvaewjPQPsLoITWNj1B6Oow7UFISGXTs4Ny'),
(8, '田町', 'tama@com', '$2y$10$8Bab9.pPQGia.9RCiz6w4eGAi81P5hIIlXbEgCrKFNtisRKaxw8m.'),
(9, '山田太郎', 'yamadataro@yahoo', '$2y$10$IC2AHJMff9H6AJd2n/BddeF0WCwItQdJ.Wk0L6RXnGCDtLj4a2hDi'),
(10, 'ando', 'ando@gmail', '$2y$10$euEDdJSx/QGOLFZYOQVXh.ou5N3MCixOGLJfqcyge9e4e4ilNBYRS');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ec_table`
--
ALTER TABLE `ec_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ec_table`
--
ALTER TABLE `ec_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
