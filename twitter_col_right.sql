-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2019 г., 04:33
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `timur_ch_16`
--

-- --------------------------------------------------------

--
-- Структура таблицы `twitter_col_right`
--

CREATE TABLE `twitter_col_right` (
  `account_name` varchar(355) NOT NULL,
  `id` int(10) NOT NULL,
  `account_logo` varchar(355) NOT NULL,
  `account_link` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twitter_col_right`
--

INSERT INTO `twitter_col_right` (`account_name`, `id`, `account_logo`, `account_link`) VALUES
('IT news', 1, 'images/post2.png', 'https://hitech.vesti.ru/'),
('habr', 2, 'images/post1.jpg', '#'),
('roscosmos', 3, 'images/post3.jpg', '#');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `twitter_col_right`
--
ALTER TABLE `twitter_col_right`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `twitter_col_right`
--
ALTER TABLE `twitter_col_right`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
