-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 10:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `origin_user` varchar(50) NOT NULL,
  `target_user` varchar(50) NOT NULL,
  `date_of_quiz` datetime NOT NULL,
  `request_id` int(10) NOT NULL,
  `accepted` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`origin_user`, `target_user`, `date_of_quiz`, `request_id`, `accepted`, `active`) VALUES
('Vaibhav', 'Hish', '2021-05-20 03:42:00', 124, 1, 0),
('Vaibhav', 'Hish', '2021-05-28 03:42:00', 125, 1, 0),
('Vaibhav', 'Hish', '2021-05-20 02:44:00', 126, 1, 0),
('Vaibhav', 'Hish', '2021-05-20 02:46:00', 127, 1, 0),
('Vaibhav', 'Hish', '2021-05-28 02:51:00', 128, 1, 0),
('Hish', 'Vaibhav', '2021-05-20 02:52:00', 129, 1, 0),
('Hish', 'Vaibhav', '2021-05-20 02:47:00', 130, 1, 0),
('Hish', 'Vaibhav', '2021-05-20 02:37:00', 131, 1, 0),
('Vaibhav', 'Hish', '2021-05-20 07:06:00', 132, 1, 0),
('Hish', 'Vaibhav', '2021-05-20 08:02:00', 133, 1, 0),
('Hish', 'Vaibhav', '2021-05-13 08:02:00', 134, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 16:54:00', 135, 1, 0),
('Hish', 'Vaibhav', '2021-04-29 16:57:00', 136, 1, 0),
('Hish', 'Vaibhav', '2021-04-28 16:57:00', 137, 1, 0),
('Vaibhav', 'Hish', '2021-06-23 19:58:00', 138, 1, 0),
('Vaibhav', 'Hish', '2021-02-11 19:58:00', 139, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 16:59:00', 140, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 17:00:00', 141, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 17:01:00', 142, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 21:01:00', 143, 1, 0),
('Vaibhav', 'Hish', '2021-05-22 17:12:00', 144, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 17:11:00', 145, 1, 0),
('Vaibhav', 'Hish', '2021-05-22 17:22:00', 146, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 17:23:00', 147, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 17:32:00', 148, 1, 0),
('Vaibhav', 'Hish', '2021-05-22 17:45:00', 149, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 17:49:00', 150, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 17:59:00', 151, 1, 0),
('Vaibhav', 'Hish', '2021-05-22 18:04:00', 152, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 18:27:00', 153, 1, 0),
('Vaibhav', 'Hish', '2021-05-22 18:28:00', 154, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 18:39:00', 155, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 18:40:00', 156, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 18:41:00', 157, 0, 0),
('Vaibhav', 'Hish', '2021-05-22 18:43:00', 158, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 18:44:00', 159, 1, 0),
('Vaibhav', 'Hish', '2021-05-22 18:44:00', 160, 1, 0),
('Hish', 'Vaibhav', '2021-05-22 18:45:00', 161, 1, 0),
('Vaibhav', 'Hish', '2021-05-24 17:41:00', 162, 1, 0),
('Vaibhav', 'Hish', '2021-05-24 19:26:00', 163, 0, 0),
('Hish', 'Vaibhav', '2021-05-24 19:27:00', 164, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 18:28:00', 165, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 18:58:00', 166, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 19:11:00', 167, 0, 0),
('Vaibhav', 'Hish', '2021-05-25 19:39:00', 168, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 19:51:00', 169, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 19:52:00', 170, 0, 0),
('Hish', 'Vaibhav', '2021-05-25 19:53:00', 171, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 20:01:00', 172, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 20:03:00', 173, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 20:05:00', 174, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 20:09:00', 175, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 20:21:00', 176, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 20:23:00', 177, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 20:24:00', 178, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 20:34:00', 179, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 20:00:00', 180, 0, 0),
('Hish', 'Vaibhav', '2021-05-25 21:01:00', 181, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 21:04:00', 182, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 21:05:00', 183, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 21:06:00', 184, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 21:07:00', 185, 1, 0),
('Vaibhav', 'Hish', '2021-05-25 21:09:00', 186, 1, 0),
('Hish', 'Vaibhav', '2021-05-25 21:10:00', 187, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiztable`
--

CREATE TABLE `quiztable` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiztable`
--

INSERT INTO `quiztable` (`id`, `question`, `answer`) VALUES
(1, 'What is the capital of India?', 'New Delhi'),
(2, 'What is the capital of England?', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `online`) VALUES
(1, 'Hish', '12345', 1),
(2, 'Vaibhav', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `quiztable`
--
ALTER TABLE `quiztable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `quiztable`
--
ALTER TABLE `quiztable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
