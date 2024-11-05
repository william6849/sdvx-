-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: sql301.byetcluster.com
-- 生成日期: 2015 年 08 月 05 日 15:16
-- 服务器版本: 5.6.22-71.0
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `b8_15900181_chat`
--

-- --------------------------------------------------------

--
-- 表的结构 `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `a_name` text CHARACTER SET utf8 NOT NULL,
  `a_data` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `data`
--

INSERT INTO `data` (`id`, `a_name`, `a_data`, `time`) VALUES
(10, '7U', '1', '2015-02-24 08:01:46'),
(11, '測試', '噗噗噗', '2015-02-24 08:45:48'),
(9, '1', '1', '2015-02-24 05:45:40'),
(8, '測試', '這是測試', '2015-02-24 05:29:45'),
(12, '路人乙(抱怨', '準度真難練XD(打了10道、只有兩首14等3A', '2015-02-24 08:46:55'),
(13, 'fptsrepnm2', '我ABC好像都認識ㄟ', '2015-02-24 09:35:00'),
(14, '1', '1', '2015-02-24 11:32:26'),
(15, 'UJ', '我知道有個人打SDVX超強，我們都稱呼他為良爺', '2015-02-24 11:59:40'),
(16, '-', '封面沒有野增菜 差評', '2015-03-05 12:39:05'),
(17, '白毛', 'ㄅㄇ路過 ''這個''太猛啦啦啦啦', '2015-04-06 04:45:02'),
(18, '尻尻', '可不可以照顧一下14難民啊ww', '2015-04-06 05:46:02'),
(19, '幹猛', '壯哉我ななひら', '2015-04-06 06:55:50'),
(20, '魚雷', '心菜萌萌噠~~~', '2015-04-07 10:08:55'),
(21, 'RASIS預備軍', '一進來就看到版圖就想到某日向美神廚wwww', '2015-04-08 10:37:55'),
(22, '幹猛', '2', '2015-04-09 10:36:03'),
(23, '摳連納茲', '歡送良爺', '2015-04-19 08:48:39'),
(24, 'ㄏㄍ', '我是媽寶', '2015-04-19 11:21:47'),
(25, '123', '1111', '2015-04-19 11:22:45'),
(26, 'ortzalvum', 'qqRuxgExfGvekI', '2015-06-08 05:08:30'),
(27, 'ㄜ', '所以我說那個14勒', '2015-06-09 03:02:28'),
(28, 'YEE', ' 1', '2015-07-15 09:40:28'),
(29, 'PAA', '1 ', '2015-08-05 12:36:30'),
(30, 'Test', '還是不能留1', '2015-08-05 02:39:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
