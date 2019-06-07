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
-- Структура таблицы `twitter_col_left`
--

CREATE TABLE `twitter_col_left` (
  `account_name` varchar(355) NOT NULL,
  `account_id` int(10) NOT NULL,
  `account_link` varchar(355) NOT NULL,
  `account_tweets_num` int(10) NOT NULL,
  `account_logo` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twitter_col_left`
--

INSERT INTO `twitter_col_left` (`account_name`, `account_id`, `account_link`, `account_tweets_num`, `account_logo`) VALUES
('Huawei', 1, 'www.huawei.com/ru', 3599, 'images/habr.jpg'),
('Meizu', 2, 'www.mymeizu.ru', 2100, 'images/roscosmos.jpg'),
('Apple', 3, 'www.apple.com/ru', 99999, 'images/vesti_hi_tech.jpg'),
('Microsoft', 4, '#', 56564, ''),
('Sony', 5, '#', 12324, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `twitter_col_left`
--
ALTER TABLE `twitter_col_left`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `twitter_col_left`
--
ALTER TABLE `twitter_col_left`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
