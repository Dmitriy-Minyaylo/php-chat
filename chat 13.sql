-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2019 г., 11:53
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `user_1` int(250) NOT NULL,
  `user_2` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`user_1`, `user_2`) VALUES
(18, 1),
(18, 4),
(18, 16);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id_to` int(100) NOT NULL,
  `ot_user_id` int(100) NOT NULL,
  `messages` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id_to`, `ot_user_id`, `messages`, `time`) VALUES
(1, 3, 1, 'Привет, как жизнь?', '2019-12-06 00:00:00'),
(2, 1, 2, 'Здарова, я вроде не чего, а ты как?', '2019-12-06 00:00:00'),
(3, 1, 8, 'Приветик. Как вы тут без меня?)', '2019-12-06 00:00:00'),
(4, 1, 4, 'И вам с кисточкой', '2019-12-06 00:00:00'),
(5, 2, 5, 'В конце курса, когда пройдешь все уроки, мы выдадим тебе сертификат о прохождении курса, в котором будем также указывать сколько уроков сделано в срок из скольки уроков. Также сколько было сделано домашних заданий с одной зведочкой, с двумя и т.д. Чем больше уроков будешь делать в срок, тем лучше для тебя так как это показывает твою готовность работать, обучаться, выкладываться и уровень твоей ответственности. А это может помогать при найме на работу и при поиске заказов на Freelance. Вообще такое качество как Ответственность цениться везде как на штатной работе так и на фрилансе. Поэтому выполняй задания в установленные сроки. Это выполнимо.', '2019-12-06 00:00:00'),
(9, 3, 1, 'В конце курса', '2019-12-06 22:06:11'),
(10, 1, 4, 'Здрасте, Я Владимир и пишу Дмитрию', '2019-12-06 22:09:40'),
(11, 2, 1, 'Доброй ночи, Я Пишу Насте, я Дима', '2019-12-06 22:10:42'),
(12, 5, 1, 'Я Петрович, хочу пообщатся с Настей, а попал на Диму?', '2019-12-06 22:25:49'),
(13, 2, 1, 'Как же я подвис с этим ответ-привет!!!', '2019-12-06 22:29:20'),
(15, 1, 3, 'да что же не так???', '2019-12-07 00:54:51'),
(18, 1, 18, 'Не ужеле работает', '2019-12-07 23:09:01'),
(19, 5, 1, 'Я Дима и пишу Петровичу', '2019-12-07 23:11:00'),
(20, 6, 10, 'Я Виктор и пишу Вольдемару. ПРИВЕТ!', '2019-12-07 23:16:18'),
(21, 2, 18, 'Хочу написать Насте, я просто Тест единичка))', '2019-12-08 00:55:56'),
(23, 3, 18, 'Привет Ксюха, я вообще 18й, но пишу тебя первым)', '2019-12-08 00:59:29'),
(24, 5, 18, 'Петрович, может буханем?', '2019-12-08 01:01:21'),
(25, 4, 1, 'Я Дмитрий и шлю Привет Владимиру', '2019-12-08 16:36:20'),
(26, 7, 10, 'Привет, МЭдвэД от Виктора', '2019-12-08 21:24:10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Skype` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `Skype`, `photo`, `password`) VALUES
(1, 'Дмитрий', '050-444-555-666', 'Dima@i.ua', '', 'img/user1.png', 'Dima'),
(2, 'Настя', '066-666-666-666', '', '', 'img/user-female.png', ''),
(3, 'Ксения', '066-777777777777', '', '', 'img/user-female.png', ''),
(4, 'Владимир', '050-444-666-666', '', '', 'img/user.png', ''),
(5, 'Петрович', '050-4844-686-666', '', 'MySkype', 'img/user2.png', ''),
(6, 'Вольдемар', '099-44-686-666', '', 'MySkype', 'img/user.png', ''),
(7, 'Клавдия', '066-7778887777', '', '', 'img/user-female.png', ''),
(8, 'Влад', '050-4844-686-999', '', 'MySkype', 'img/user-white.png', ''),
(10, 'Виктор', '', 'Victor@i.ua', '', 'img/ava.png', 'Vv12345'),
(16, 'Петруха', '', 'Peter@i.ua', '', 'img/user.png', '123'),
(17, 'Макс', '', 'Max@gmail.com', '', 'img/ava.png', '321'),
(18, '1', '', '1', '', 'img/ava.png', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD UNIQUE KEY `user_1` (`user_1`,`user_2`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
