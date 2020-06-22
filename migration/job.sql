-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2020 г., 20:17
-- Версия сервера: 5.6.38
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
-- База данных: `job`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `stat` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `q_id`, `answer`, `stat`, `date`) VALUES
(1, 2, 'кислород', 1, '2020-06-20 14:29:22'),
(2, 2, 'угле-кислый газ', 0, '2020-06-20 14:29:22'),
(3, 2, 'азот', 0, '2020-06-20 14:30:08'),
(4, 2, 'водород', 0, '2020-06-20 14:30:08'),
(5, 1, 'киев', 1, '2020-06-20 14:34:49'),
(6, 1, 'харьков', 0, '2020-06-20 14:34:49'),
(7, 1, 'львов', 0, '2020-06-20 14:36:06'),
(8, 1, 'одесса', 0, '2020-06-20 14:36:06'),
(9, 3, '0', 1, '2020-06-20 14:38:52'),
(10, 3, '1000', 0, '2020-06-20 14:38:52'),
(11, 3, '10 000', 0, '2020-06-20 14:39:25'),
(12, 3, '100 000', 0, '2020-06-20 14:39:25'),
(13, 4, 'ЮАР', 1, '2020-06-20 14:42:09'),
(14, 4, 'алжир', 0, '2020-06-20 14:42:09'),
(15, 4, 'тунис', 0, '2020-06-20 14:43:10'),
(16, 4, 'украина', 0, '2020-06-20 14:43:10'),
(17, 5, 'нет', 1, '2020-06-20 14:45:20'),
(18, 5, 'да', 0, '2020-06-20 14:45:20');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `name`, `date`) VALUES
(1, 'Столица Украины', '2020-06-20 13:56:29'),
(2, 'Какого газа в атмосфере Земли больше всего?', '2020-06-20 13:57:23'),
(3, 'Какой римской цифры не существует?', '2020-06-20 13:57:48'),
(4, 'В какой стране более одной столицы?', '2020-06-20 13:58:18'),
(5, 'Мозг используется только на 10%. Правда или ложь?', '2020-06-20 13:58:37');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `sure_name` varchar(32) NOT NULL,
  `lust_name` varchar(32) NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `game_time` int(11) NOT NULL,
  `time_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_finish` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `sure_name`, `lust_name`, `session_id`, `game_time`, `time_start`, `time_finish`, `status`) VALUES
(4, 'daniel', 'nikola', 'hfjsdkfsdfl', '9365ea12b2d910e1aceaac190fbc97a5', 0, '2020-06-20 12:01:11', 0, ''),
(5, 'Дан', 'Мак', 'Трек', '5c4d43c4c34a4b336935781fd371fde1', 0, '2020-06-20 13:09:18', 0, ''),
(6, 'Tomas', 'Snijers', 'NICK', 'fbd3a800f90793e51bfb905301de354d', 0, '2020-06-20 13:13:55', 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
