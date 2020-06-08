-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2020 г., 22:34
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `landing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `guarantee` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `price`, `guarantee`, `image`) VALUES
(1, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(2, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(3, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(4, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(5, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(6, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(7, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(8, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(9, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(10, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(11, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(12, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(13, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(14, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(15, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg'),
(16, 'Смартфон Apple iPhone 11 Pro Max 256GB Midnight Green', '58 700', '2 года гарантии!', 'phone.svg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
