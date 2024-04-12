-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 02:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(140) NOT NULL,
  `Image_upload` text DEFAULT NULL,
  `commenttime` datetime NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `Image_upload`, `commenttime`, `post_id`, `user_id`) VALUES
(5, 'test', NULL, '2024-04-09 01:07:20', 24, 3),
(9, 'test', NULL, '2024-04-09 11:12:30', 25, 2),
(10, '🙂🙂😄 25955', NULL, '2024-04-09 11:13:04', 25, 2),
(15, 'test435', NULL, '2024-04-09 16:54:58', 35, 3),
(16, 'go', 'commentsImages/1712674530352379517.jpg', '2024-04-09 16:55:19', 35, 1),
(17, 'uuid', NULL, '2024-04-09 19:56:23', 35, 6),
(18, 'react query', NULL, '2024-04-09 19:57:09', 35, 6),
(19, 'first comment', NULL, '2024-04-09 19:59:02', 33, 6),
(20, 'test comment', NULL, '2024-04-09 19:59:14', 34, 6),
(22, 'go', NULL, '2024-04-10 23:14:32', 38, 2),
(23, 'test85', NULL, '2024-04-11 09:24:48', 37, 2),
(24, 'vhg', NULL, '2024-04-11 09:53:04', 38, 2),
(25, 'Top 😍🍊', NULL, '2024-04-11 10:17:08', 34, 7),
(26, 'test alyeen ', NULL, '2024-04-11 10:21:24', 20, 7),
(27, 'mnf ge ', NULL, '2024-04-11 10:21:36', 41, 7),
(29, 'u ugly\r\n\r\n', NULL, '2024-04-12 09:35:00', 37, 9);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `post_id`) VALUES
(1, 2, 21),
(2, 3, 21),
(3, 3, 20),
(7, 1, 22),
(21, 2, 33),
(22, 2, 33),
(24, 1, 25),
(30, 2, 33),
(34, 3, 34),
(35, 2, 20),
(36, 1, 22),
(38, 3, 24),
(40, 3, 34),
(41, 2, 33),
(42, 1, 25),
(43, 3, 24),
(44, 1, 22),
(45, 2, 21),
(46, 2, 20),
(47, 2, 16),
(49, 3, 34),
(50, 2, 33),
(51, 1, 25),
(52, 3, 24),
(53, 1, 22),
(54, 2, 21),
(55, 2, 20),
(56, 2, 16),
(60, 3, 35),
(61, 3, 35),
(65, 6, 35),
(68, 1, 20),
(69, 1, 34),
(70, 1, 37),
(72, 6, 33),
(73, 6, 22),
(74, 6, 20),
(75, 6, 38),
(76, 6, 34),
(77, 3, 38),
(78, 1, 38),
(79, 2, 37),
(81, 2, 34),
(82, 7, 38),
(83, 2, 35),
(84, 9, 41),
(85, 9, 37);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`, `likesCount`) VALUES
(4, NULL, 'test88', '', '2024-04-08 20:18:41', NULL),
(5, NULL, 'ruba', 'uploadImages/171260777578210-14-Night-6k.jpg', '2024-04-08 20:22:55', NULL),
(6, NULL, 'test1', 'uploadImages/171260784905210-14-Night-6k.jpg', '2024-04-08 20:24:09', NULL),
(7, NULL, 'ksjdf', '', '2024-04-08 20:41:40', NULL),
(8, NULL, 'kjsf', '', '2024-04-08 20:45:14', NULL),
(9, NULL, '\r\n\r\n    [username] => test1\r\n    [Id] => 2', '', '2024-04-08 20:49:18', NULL),
(10, NULL, '\r\n\r\n    [username] => test1\r\n    [Id] => 2', '', '2024-04-08 20:52:04', NULL),
(11, NULL, 'dgdfg', '', '2024-04-08 20:57:22', NULL),
(12, NULL, 'jrkejrnf', '', '2024-04-08 20:59:17', NULL),
(13, NULL, 'test', '', '2024-04-08 21:04:31', NULL),
(14, NULL, 'iure', '', '2024-04-08 21:10:13', NULL),
(15, NULL, 'test,lk', '', '2024-04-08 21:22:14', NULL),
(16, 2, 'hello', 'uploadImages/171261169370410-14-Day-6k.jpg', '2024-04-08 21:28:13', NULL),
(17, NULL, 'kkj', '', '2024-04-08 21:30:36', NULL),
(18, NULL, 'krhf', '', '2024-04-08 21:33:17', NULL),
(19, NULL, 'kjhasas', '', '2024-04-08 21:36:42', NULL),
(20, 2, 'kjkjhkj', '', '2024-04-08 21:40:22', NULL),
(21, 2, 'jkkjn', '', '2024-04-08 21:41:12', NULL),
(22, 1, 'raghda', '', '2024-04-08 21:44:50', NULL),
(24, 3, 'test2', '', '2024-04-08 21:45:45', NULL),
(25, 1, 'test raghda 😍😍', 'uploadImages/1712613462318wp6689718.jpg', '2024-04-08 21:57:42', NULL),
(33, 2, 'ruba', 'uploadImages/1712842318656379517.jpg', '2024-04-09 09:13:43', NULL),
(34, 3, 'test bachar', 'uploadImages/171265704434810-14-Day-6k.jpg', '2024-04-09 10:04:04', NULL),
(35, 3, '450', '', '2024-04-09 10:06:29', NULL),
(37, 6, 'mario post test', '', '2024-04-09 18:08:58', NULL),
(38, 1, '🚎😍😼', 'uploadImages/17128752906172125122.jpg', '2024-04-09 19:36:21', NULL),
(41, 7, '', 'uploadImages/171282339177010-14-Day-6k.jpg', '2024-04-11 08:16:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('regular','admin') NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `Username`, `Password`) VALUES
(1, 'raghda', '$2y$10$vgbZtxJ8Oqci/Wi5hQvPF.dz3tByNzQmxKKuwgSyNMQDEKsG3bIb6'),
(2, 'test1', '$2y$10$JENLo4NM42oeWcuxoNYWguHoDU6epV8EqYrVfOv86MFHjd7lkPFhS'),
(3, 'test2', '$2y$10$fCTZ0LrUQcwgI10T96t4WOW21d4ys14vFBBY0brs7pMuB1K3toWAu'),
(4, 'test1', '$2y$10$vZyhfIZPEKl9Khu4eIPbFuWTH5pcWtG.7k4tbRO5lxzsObuOCO3B2'),
(5, 'test1', '$2y$10$NImnEkhxhZHViedCYHAwtuwPTCmVUIe1ngM01oLzhJEPriOs1MjKO'),
(6, 'mario@gmail.com', '$2y$10$uy//eOElAUHCmbVoCW58wOB1dmDN12eDPzii0nruKGb188H1/1kV.'),
(7, 'Alyeen', '$2y$10$9SlXQ2BMgGgNrjecW6OPGu1f0NX2Yn.62ar8bfF0UmCt9wBx5JJhK'),
(9, 'admin', '$2y$10$90aTsDGHx9ve6KpPkgUwFOwPmv1uoADFHTioTqIM2MvA/NNE4KHTq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`Id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`Id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
