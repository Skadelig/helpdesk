-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 08 2015 г., 03:01
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `Users_id` int(11) NOT NULL COMMENT 'КОД пользователя',
  `Access_ID` int(11) DEFAULT NULL,
  `Users_login` varchar(256) NOT NULL COMMENT 'Логин',
  `Users_pass` varchar(256) NOT NULL COMMENT 'Пароль',
  `Users_access` int(11) DEFAULT NULL COMMENT 'Users_access',
  `Users_auth_key` varchar(32) DEFAULT NULL COMMENT 'ключ авторизации',
  `Users_email_confirm_token` varchar(32) DEFAULT NULL,
  `Users_status` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`Users_id`, `Access_ID`, `Users_login`, `Users_pass`, `Users_access`, `Users_auth_key`, `Users_email_confirm_token`, `Users_status`) VALUES
(2, 1, 'admin', 'admin', 1, '', '0', 0),
(3, 1, 'test', 'test', 1, '', '0', 0),
(4, NULL, 'login', '$2y$13$em6puc/.Id13oR./qdqWu.quzgb70THFwJVlombVaeNk3X6Y/FSDy', NULL, 'abR0-e6A491mP4GNII7VxiYXL-uPTaig', NULL, 1),
(5, NULL, 'login1', '$2y$13$NXo7Opt4GRwaeiPXxMfArOLHmQFhZAYdH/hiXvWxJI1dicHdRlH6i', NULL, 'NuMSkDuACckuhF6KACDMBdKv6Jybg9p0', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Users_id`),
  ADD KEY `FK_accessrule2users` (`Access_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `Users_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД пользователя',AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `FK_accessrule2users` FOREIGN KEY (`Access_ID`) REFERENCES `Access` (`Access_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
