-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 03 2020 г., 18:24
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pubdata` datetime NOT NULL DEFAULT current_timestamp(),
  `text` text DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `pubdata`, `text`, `views`, `likes`) VALUES
(1, 'День 1', '2020-08-22 19:00:00', 'Решил начать учебу заново после долгого перерыва!!!!!\r\n                зашел на сайт <a href=\"https://htmlacademy.ru/\">https://htmlacademy.ru/</a>\r\n                 на котором начинал когда то учится\r\n                там появились новые курсы бесплатные, решил начать с них\r\n                в блоке - Знакомство с Веб-разработкой\r\n                прошел:<br>-Глава 1:Основы HTML и CSS\r\n	               <br>-Глава 2:Основы JavaScript\r\n                 <br>ии это все на что меня хватило)</', 0, 0),
(2, 'День 2 ', '2020-08-23 19:00:00', 'Продолжил прохождение бесплатных курсов в том же блоке:\r\n                  -Глава 3:Основы PHP\r\n                  <br>И начал проходить следующий блок Знакомство с HTML и CSS\r\n                  так как тот закончился\r\n                  прошел:  <br>Глава 1:Структура HTML-документа', 0, 0),
(3, 'День 3', '2020-08-24 19:00:00', 'Прошел в том же блоке еще два курса:\r\n                  <br>-Глава 2:Разметка текста\r\n                  <br>-Глава 3:Ссылки и изображения\r\n                  <br>А под вечер решил немного попрактиковаться и дал задание совей девушке, придумать мне сайт и нарисовать его на листке\r\n                  в итоге мы всю ночь с ней не спали так как я делал сайт и уточнял у нее все, чтобы было так как она задумала\r\n                  в общем в этот день, просидел я рекордные 11 часов за учебой!\r\n                  вот кстати что получилось:D <a href=\"#\">(ссылка)</a>', 0, 0),
(8, 'День 4', '2020-10-01 20:48:01', 'В блоке Знакомство с HTML и CSS оставались еще 2 курса:\r\n                  <br>-Глава 4:Основы CSS\r\n                  <br>-Глава 5:Оформление текста\r\n                  Но так как всю предыдущую ночь делал сайт то по пути прогуглил все ньюансы которые и описывают в этом курсе,\r\n                  по этому прошел чисто испытания которые были в этих курсах (а остальные задания потом пройду чисто для очивки)\r\n                  потом решил оформить платную подписку на месяц так как бесплатные задания кончились,\r\n                  так как я ранее проходил обучение на этом сайте то практически все курсы я прошел, ноо они добавили новые курсы про JavaScript\r\n                  по этому думаю это не деньги на ветер)\r\n                  прошел еще некоторые платные испытания, которые проходил ранее, что бы вспомнить хоть что то полезное\r\n                  а вечером пришла мысль вести этот самый \"Дневник-Прогресс обучения\" так сказать,\r\n                  и сделать для него страницу в интернете что бы было интереснее развиватся!', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`, `pubdate`, `article_id`) VALUES
(1, 'Максим Литвинов', 'Бла бла бла ЛАЛАЛА бла бла!!!!!!!!!!!', '2020-09-30 20:22:28', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
