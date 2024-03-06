-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 mrt 2024 om 09:20
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
-- Tabelstructuur voor tabel `post1`
--

CREATE TABLE `post1` (
  `post_id` int(11) NOT NULL,
  `post_text` varchar(255) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `post1`
--

INSERT INTO `post1` (`post_id`, `post_text`, `post_date`) VALUES
(1, 'raghdaawata', '2024-03-02'),
(2, 'Vandaag is zondag', '2024-03-02'),
(9, 'hi iedereen', '2024-03-02'),
(10, 'Ik ben Raghda Awata.', '2024-03-03'),
(12, 'hiiii', '2024-03-03'),
(14, 'Goedemorgen', '2024-03-03'),
(15, 'بسم الله الرحمن الرحيم', '2024-03-03'),
(16, 'Ragghhah', '2024-03-04'),
(17, 'hghfndkd', '2024-03-04'),
(18, 'hiiiiiii', '2024-03-04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_content` varchar(255) NOT NULL,
  `Upload_image` text NOT NULL,
  `post_date` timestamp NULL DEFAULT current_timestamp(),
  `likesCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_content`, `Upload_image`, `post_date`, `likesCount`) VALUES
(3, 2, 'Ruba', '', '2024-03-04 21:40:51', NULL),
(4, 5, 'hyhukvf', '', '2024-03-04 21:46:54', NULL),
(9, 2, 'Alhamdullah', '', '2024-03-05 09:38:02', NULL),
(10, 2, 'Goedemorgen', '', '2024-03-05 10:17:11', NULL),
(13, 4, 'tweed test', '', '2024-03-05 21:51:47', NULL),
(15, 4, 'drie', '', '2024-03-05 22:33:20', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `Firstnaam` varchar(200) NOT NULL,
  `Lastnaam` varchar(200) NOT NULL,
  `usernaam` text DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Passwoord` varchar(100) NOT NULL,
  `Land` varchar(255) DEFAULT NULL,
  `Geslacht` varchar(100) DEFAULT NULL,
  `Geboortdatum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `Firstnaam`, `Lastnaam`, `usernaam`, `Email`, `Passwoord`, `Land`, `Geslacht`, `Geboortdatum`) VALUES
(1, 'Yasser', 'Awata', NULL, 'yasser@gmail.com', 'yasser@33', 'Syria', 'Male', '1990-02-17'),
(2, 'test', 'Awata', NULL, 'test@gmail.com', 'test12345', 'Syria', 'Male', '1992-11-01'),
(3, 'Baraha', 'Awata', NULL, 'barahaawata@gmail.com', 'barahaa@55', 'Syria', 'female', '1989-12-12'),
(4, 'Ruba', 'Awata', NULL, 'rubaawata@gmail.com', 'rubaaw@96', 'Syria', 'Female', '1996-06-26'),
(5, 'Bahaa', 'Awata', NULL, 'bahaawata@gmail.com', 'bahaaAw@9', 'Syria', 'Male', '1999-02-24'),
(6, 'Alyeen', 'Marawi', 'alyeen_marawi_458489', 'alyeenmarawi@gmail.com', 'alyeen112', 'Nederland', 'Female', '2021-11-24'),
(7, 'Bachar', 'Marawi', 'bachar_marawi_868507', 'bacharmarawi@gmail.com', 'bachar123', 'Nederland', 'Male', '2017-11-18'),
(8, 'Omeir', 'Marawi', 'omeir_marawi_291010', 'omeirmarawi@gmail.com', 'omeir1234', 'Nederland', 'Male', '2019-04-02'),
(9, 'test', '2', 'test_2_192002', 'test2@gmail.com', 'testt1234', 'Nederland', 'Male', '2019-04-02');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `post1`
--
ALTER TABLE `post1`
  ADD PRIMARY KEY (`post_id`);

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
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `post1`
--
ALTER TABLE `post1`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
