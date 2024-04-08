-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 apr 2024 om 22:20
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(140) NOT NULL,
  `Image_upload` text DEFAULT NULL,
  `commentOn` int(11) NOT NULL,
  `commentBy` int(11) NOT NULL,
  `commenttime` datetime NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `Image_upload`, `commentOn`, `commentBy`, `commenttime`, `post_id`) VALUES
(20, '💘llyngn🤗', NULL, 0, 0, '2024-03-24 23:44:40', 35),
(22, 'new comment', NULL, 0, 0, '2024-03-25 15:29:47', 15),
(25, 'fdfd', NULL, 0, 0, '2024-03-25 15:39:01', 15),
(27, 'test raghda ', NULL, 0, 0, '2024-03-25 17:07:31', 33),
(28, 'xxxxx', NULL, 0, 0, '2024-03-25 17:07:47', 38),
(29, 'hi', 'uploadImages/171138288666210-5-6k.jpg', 0, 0, '2024-03-25 17:08:06', 38),
(30, 'test uc', NULL, 0, 0, '2024-03-25 17:14:41', 40),
(31, 'yyyyyyyyy', NULL, 0, 0, '2024-03-25 21:35:52', 38),
(32, 'jh', NULL, 0, 0, '2024-03-25 21:38:05', 38),
(33, 'nnnnnnnnnnnn', NULL, 0, 0, '2024-03-25 21:39:23', 38),
(42, 'dsfsdf', NULL, 0, 0, '2024-03-25 23:07:54', 42),
(44, 'hhhhhhhfffffffffffffffffffff', 'uploadImages/171140615929610-12-6k.jpg', 0, 0, '2024-03-25 23:08:40', 42),
(45, 'qqqq', 'uploadImages/171140455325410-14-Night-6k.jpg', 0, 0, '2024-03-25 23:09:13', 42),
(53, 'test5', NULL, 0, 0, '2024-03-27 09:44:03', 44),
(54, 'testdf💓', NULL, 0, 0, '2024-03-27 10:00:02', 45),
(55, 'ujhghbj', NULL, 0, 0, '2024-03-27 13:15:05', 43),
(56, 'b', NULL, 0, 0, '2024-03-31 15:23:59', 65),
(57, '', NULL, 0, 0, '2024-03-31 15:35:59', 62),
(58, 'ij', NULL, 0, 0, '2024-03-31 15:36:05', 62),
(59, 'kj', '../uploadImages/1711892515503379517.jpg', 0, 0, '2024-03-31 15:41:55', 62),
(60, 'kjio', 'commentsImages/171189314623610-12-6k.jpg', 0, 0, '2024-03-31 15:48:42', 62),
(61, 'mn', 'commentsImages/1711929198714379517.jpg', 0, 0, '2024-04-01 01:53:18', 65),
(62, 'go test💘', 'commentsImages/17120513143562125122.jpg', 0, 0, '2024-04-02 10:42:08', 69),
(63, 'test Raghda', NULL, 0, 0, '2024-04-02 10:52:20', 69),
(64, 'test 854', NULL, 0, 0, '2024-04-02 15:44:12', 73);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `post_id`) VALUES
(2, 1, 72);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_content` varchar(255) NOT NULL,
  `upload_image` text NOT NULL,
  `post_date` timestamp NULL DEFAULT current_timestamp(),
  `likesCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`, `likesCount`) VALUES
(66, 1, 'test', '', '2024-04-01 19:54:49', NULL),
(67, 1, '💓test', 'uploadImages/171200596042010-14-Day-6k.jpg', '2024-04-01 21:12:40', NULL),
(68, 1, 'eerst test 1🍍', 'uploadImages/171204568265210-12-6k.jpg', '2024-04-02 08:14:42', NULL),
(69, 1, 'tweede test2🤗', '', '2024-04-02 08:15:02', NULL),
(70, 1, 'mjeshflwe', '', '2024-04-02 08:38:48', NULL),
(71, 1, 'tedsy', '', '2024-04-02 09:11:28', NULL),
(72, 1, 'testststststststst👍🏽', '', '2024-04-02 09:13:34', NULL),
(73, 1, 'trgjhfj', '', '2024-04-02 09:35:59', NULL);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_info`
--

CREATE TABLE `user_info` (
  `Id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `user_info` ('Id',`Username`,`Password` )VALUES(1,'test1@gmail.com','test1');
--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexen voor tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexen voor tabel `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT voor een tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`Id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
