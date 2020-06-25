-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-06-25 16:39:56
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `commit`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `travel`
--

CREATE TABLE `travel` (
  `name` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `commit` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `travel`
--

INSERT INTO `travel` (`name`, `email`, `Q1`, `commit`, `created_at`, `updated_at`) VALUES
('陳明瑄', '0', '0', '123', '2020-06-25 18:07:42', '2020-06-25 18:07:42'),
('陳明瑄', '0', '0', '123', '2020-06-25 18:08:54', '2020-06-25 18:08:54'),
('陳明瑄', '0', '0', '123', '2020-06-25 18:32:02', '2020-06-25 18:32:02'),
('チンミンセン', '0', '1', '123', '2020-06-25 18:32:13', '2020-06-25 18:32:13'),
('陳明瑄', '0', '0', '123', '2020-06-25 21:08:30', '2020-06-25 21:08:30'),
('陳明瑄', '0', '0', '0', '2020-06-25 21:08:43', '2020-06-25 21:08:43'),
('チンミンセン', '0', '1', '0', '2020-06-25 21:08:54', '2020-06-25 21:08:54'),
('陳明瑄', '0', '0', '你好', '2020-06-25 21:35:43', '2020-06-25 21:35:43'),
('陳明瑄', 'muro331@gmail.com', '0', '拉拉', '2020-06-25 21:38:02', '2020-06-25 21:38:02'),
('陳明瑄', 'muro331@gmail.com', '1', '綺麗', '2020-06-25 23:17:39', '2020-06-25 23:17:39'),
('陳', 'murooo331@outlook.com', '1', 'おしゃれ', '2020-06-25 23:18:47', '2020-06-25 23:18:47'),
('陳', 'murooo331@outlook.com', '1', '美味しい物多い', '2020-06-25 23:21:16', '2020-06-25 23:21:16'),
('陳明瑄', 'muro331@gmail.com', '0', '明太子', '2020-06-25 23:37:34', '2020-06-25 23:37:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
