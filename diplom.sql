-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 07 2015 г., 19:10
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
-- Структура таблицы `Access`
--

CREATE TABLE IF NOT EXISTS `Access` (
  `Access_ID` int(11) NOT NULL COMMENT 'КОД доступа',
  `Access_nm` varchar(256) DEFAULT NULL COMMENT 'Название доступа',
  `Access_ctrl` bit(1) DEFAULT NULL COMMENT 'Управление завками',
  `Access_redirect` bit(1) DEFAULT NULL COMMENT 'Перенаправление',
  `Access_deprt` bit(1) DEFAULT NULL COMMENT 'Доступ к департаменту',
  `Access_prvt` bit(1) DEFAULT NULL COMMENT 'Просмотр личных заявок',
  `Access_otherusr` bit(1) DEFAULT NULL COMMENT 'Просмотр заявок отдела',
  `Access_othrdeprt` bit(1) DEFAULT NULL COMMENT 'Перенаправление заявок в другой отдел',
  `Access_statis` bit(1) DEFAULT NULL COMMENT 'Доступ к с татитстике',
  `Access_comnt` bit(1) DEFAULT NULL COMMENT 'Доступ к комментариям'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Access`
--

INSERT INTO `Access` (`Access_ID`, `Access_nm`, `Access_ctrl`, `Access_redirect`, `Access_deprt`, `Access_prvt`, `Access_otherusr`, `Access_othrdeprt`, `Access_statis`, `Access_comnt`) VALUES
(1, 'Полный доступ', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1');

-- --------------------------------------------------------

--
-- Структура таблицы `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `Comment_ID` int(11) NOT NULL COMMENT 'КОД комментария',
  `Request_ID` int(11) DEFAULT NULL COMMENT 'КОД заявки',
  `Users_id` int(11) DEFAULT NULL COMMENT 'Код пользователя',
  `Comment_date` datetime DEFAULT NULL COMMENT 'Дата',
  `Comment_txt` text COMMENT 'Текст комментария'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Comment`
--

INSERT INTO `Comment` (`Comment_ID`, `Request_ID`, `Users_id`, `Comment_date`, `Comment_txt`) VALUES
(1, 1, 2, NULL, 'Комментарий');

-- --------------------------------------------------------

--
-- Структура таблицы `Defects`
--

CREATE TABLE IF NOT EXISTS `Defects` (
  `Defects_ID` int(11) NOT NULL,
  `Defects_nm` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Defects`
--

INSERT INTO `Defects` (`Defects_ID`, `Defects_nm`) VALUES
(1, 'Проблемы с интернетом'),
(2, 'Неполадки оборудования'),
(3, 'Проблемы с мебелью'),
(4, 'Другая проблема');

-- --------------------------------------------------------

--
-- Структура таблицы `Department`
--

CREATE TABLE IF NOT EXISTS `Department` (
  `Department_ID` int(11) NOT NULL COMMENT 'КОД департамента',
  `Department_name` varchar(256) DEFAULT NULL COMMENT 'Название департамента',
  `Department_number` varchar(256) DEFAULT NULL COMMENT 'Номер департамента'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Department`
--

INSERT INTO `Department` (`Department_ID`, `Department_name`, `Department_number`) VALUES
(1, 'Хозяйственный отдел', '56-56-56'),
(2, 'Информационный отдел', '57-57-57');

-- --------------------------------------------------------

--
-- Структура таблицы `Employer`
--

CREATE TABLE IF NOT EXISTS `Employer` (
  `Employer_ID` int(11) NOT NULL COMMENT 'КОД работника',
  `Job_ID` int(11) DEFAULT NULL COMMENT 'КОД должности',
  `Users_id` int(11) DEFAULT NULL COMMENT ' КОД пользователя',
  `Department_ID` int(11) DEFAULT NULL COMMENT 'КОД Департамента',
  `Employer_surname` varchar(256) DEFAULT NULL COMMENT 'Фамилия',
  `Employer_name` varchar(256) DEFAULT NULL COMMENT 'Имя',
  `Employer_birthday` date DEFAULT NULL COMMENT 'День рождения'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Employer`
--

INSERT INTO `Employer` (`Employer_ID`, `Job_ID`, `Users_id`, `Department_ID`, `Employer_surname`, `Employer_name`, `Employer_birthday`) VALUES
(2, 1, 2, 1, 'Иванов', 'Иван', NULL),
(3, NULL, NULL, NULL, '', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Job`
--

CREATE TABLE IF NOT EXISTS `Job` (
  `Job_ID` int(11) NOT NULL COMMENT 'КОД должности',
  `Job_name` varchar(256) DEFAULT NULL COMMENT 'Название должности',
  `Job_responsibility` varchar(256) DEFAULT NULL COMMENT 'Job_responsibility'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Job`
--

INSERT INTO `Job` (`Job_ID`, `Job_name`, `Job_responsibility`) VALUES
(1, 'Техник', ''),
(2, 'Администратор', '');

-- --------------------------------------------------------

--
-- Структура таблицы `Priority`
--

CREATE TABLE IF NOT EXISTS `Priority` (
  `Priority_ID` int(11) NOT NULL COMMENT 'КОД приоритета',
  `Priority_nm` varchar(256) DEFAULT NULL COMMENT 'Название приоритета',
  `Priority_about` text COMMENT 'Краткое описание'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Priority`
--

INSERT INTO `Priority` (`Priority_ID`, `Priority_nm`, `Priority_about`) VALUES
(1, 'Низкий', 'Неважные задачи'),
(2, 'Средний', 'Обычная важность задач'),
(3, 'Высокий', 'Очень важные задачи');

-- --------------------------------------------------------

--
-- Структура таблицы `Request`
--

CREATE TABLE IF NOT EXISTS `Request` (
  `Request_ID` int(11) NOT NULL COMMENT 'КОД заявки',
  `Request_text` text COMMENT 'Текст заявки',
  `Executionstatus` bit(1) DEFAULT NULL COMMENT 'Заявка исполнятся',
  `Employer_ID` int(11) DEFAULT NULL COMMENT 'КОД работника создателя',
  `Priority_ID` int(11) DEFAULT NULL COMMENT 'КОД приоритета',
  `Users_id` int(11) DEFAULT NULL COMMENT 'КОД исполнителя',
  `Defects_ID` int(11) DEFAULT NULL COMMENT 'КОД дефекта',
  `Request_date` datetime DEFAULT NULL COMMENT 'Дата заявки',
  `Request_FacticalDateEnding` datetime DEFAULT NULL COMMENT 'Фактическая дата завершения',
  `Request_DataEnding` datetime DEFAULT NULL COMMENT 'Предполагаемая дата завершения'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Request`
--

INSERT INTO `Request` (`Request_ID`, `Request_text`, `Executionstatus`, `Employer_ID`, `Priority_ID`, `Users_id`, `Defects_ID`, `Request_date`, `Request_FacticalDateEnding`, `Request_DataEnding`) VALUES
(1, 'Первая заявка', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'вторая заявка', b'0', 2, 2, 2, 1, NULL, NULL, NULL),
(3, '11', b'1', NULL, NULL, NULL, NULL, '2015-06-06 00:00:00', NULL, NULL),
(4, 'Заявка', b'0', NULL, NULL, NULL, NULL, '2015-06-06 00:00:00', NULL, NULL),
(5, 'заявка', b'0', NULL, NULL, NULL, NULL, '2015-06-06 10:06:58', NULL, NULL),
(6, '', b'0', NULL, 1, NULL, NULL, '2015-06-06 10:06:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `Users_id` int(11) NOT NULL COMMENT 'КОД пользователя',
  `Access_ID` int(11) DEFAULT NULL,
  `Users_login` varchar(256) NOT NULL COMMENT 'Логин',
  `Users_pass` varchar(256) DEFAULT NULL COMMENT 'Пароль',
  `Users_access` int(11) DEFAULT NULL COMMENT 'Users_access'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`Users_id`, `Access_ID`, `Users_login`, `Users_pass`, `Users_access`) VALUES
(2, 1, 'admin', 'admin', 1),
(3, 1, 'test', 'test', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Access`
--
ALTER TABLE `Access`
  ADD PRIMARY KEY (`Access_ID`);

--
-- Индексы таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`Comment_ID`),
  ADD KEY `FK_request2comments` (`Request_ID`),
  ADD KEY `FK_user2comments` (`Users_id`);

--
-- Индексы таблицы `Defects`
--
ALTER TABLE `Defects`
  ADD PRIMARY KEY (`Defects_ID`);

--
-- Индексы таблицы `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Department_ID`);

--
-- Индексы таблицы `Employer`
--
ALTER TABLE `Employer`
  ADD PRIMARY KEY (`Employer_ID`),
  ADD KEY `FK_department2employers` (`Department_ID`),
  ADD KEY `FK_job2employers` (`Job_ID`),
  ADD KEY `FK_employer2user` (`Users_id`);

--
-- Индексы таблицы `Job`
--
ALTER TABLE `Job`
  ADD PRIMARY KEY (`Job_ID`);

--
-- Индексы таблицы `Priority`
--
ALTER TABLE `Priority`
  ADD PRIMARY KEY (`Priority_ID`);

--
-- Индексы таблицы `Request`
--
ALTER TABLE `Request`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `FK_defect2requests` (`Defects_ID`),
  ADD KEY `FK_employer2requests` (`Employer_ID`),
  ADD KEY `FK_priority2requests` (`Priority_ID`),
  ADD KEY `FK_status2requests` (`Executionstatus`),
  ADD KEY `FK_user2requests` (`Users_id`);

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
-- AUTO_INCREMENT для таблицы `Access`
--
ALTER TABLE `Access`
  MODIFY `Access_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД доступа',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Comment`
--
ALTER TABLE `Comment`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД комментария',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Defects`
--
ALTER TABLE `Defects`
  MODIFY `Defects_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Department`
--
ALTER TABLE `Department`
  MODIFY `Department_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД департамента',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Employer`
--
ALTER TABLE `Employer`
  MODIFY `Employer_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД работника',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Job`
--
ALTER TABLE `Job`
  MODIFY `Job_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД должности',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Priority`
--
ALTER TABLE `Priority`
  MODIFY `Priority_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД приоритета',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Request`
--
ALTER TABLE `Request`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД заявки',AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `Users_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'КОД пользователя',AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `FK_request2comments` FOREIGN KEY (`Request_ID`) REFERENCES `Request` (`Request_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user2comments` FOREIGN KEY (`Users_id`) REFERENCES `Users` (`Users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Employer`
--
ALTER TABLE `Employer`
  ADD CONSTRAINT `FK_department2employers` FOREIGN KEY (`Department_ID`) REFERENCES `Department` (`Department_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_employer2user` FOREIGN KEY (`Users_id`) REFERENCES `Users` (`Users_id`),
  ADD CONSTRAINT `FK_job2employers` FOREIGN KEY (`Job_ID`) REFERENCES `Job` (`Job_ID`);

--
-- Ограничения внешнего ключа таблицы `Request`
--
ALTER TABLE `Request`
  ADD CONSTRAINT `FK_defect2requests` FOREIGN KEY (`Defects_ID`) REFERENCES `Defects` (`Defects_ID`),
  ADD CONSTRAINT `FK_employer2requests` FOREIGN KEY (`Employer_ID`) REFERENCES `Employer` (`Employer_ID`),
  ADD CONSTRAINT `FK_priority2requests` FOREIGN KEY (`Priority_ID`) REFERENCES `Priority` (`Priority_ID`),
  ADD CONSTRAINT `FK_user2requests` FOREIGN KEY (`Users_id`) REFERENCES `Users` (`Users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `FK_accessrule2users` FOREIGN KEY (`Access_ID`) REFERENCES `Access` (`Access_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
