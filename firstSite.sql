-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2015 г., 17:02
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `firstSite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mytable`
--

CREATE TABLE IF NOT EXISTS `mytable` (
  `id` int(10) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `lang` enum('en','ru') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL
) ENGINE=CSV DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` int(10) NOT NULL DEFAULT '0' COMMENT '1-муж, 2-жен',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`, `gender`) VALUES
(1, 'Ярик', 1),
(2, 'Саша', 2),
(3, 'Вася', 0),
(4, 'Вася - 2', 0),
(5, 'Вася <b>Говножуй</b>', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
