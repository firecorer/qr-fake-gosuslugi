-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2022 г., 14:13
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `covid-certs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `certs`
--

CREATE TABLE `certs` (
  `id` varchar(32) NOT NULL,
  `valid_date` varchar(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `dob` varchar(16) NOT NULL,
  `passport` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `certs`
--

INSERT INTO `certs` (`id`, `valid_date`, `name`, `dob`, `passport`) VALUES
('0000 0000 0000 0000', '00.00.00', 'Локопотус Локопот Локопотович', '30.01.1394', '00** ***000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
