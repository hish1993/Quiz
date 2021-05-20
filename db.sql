-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 04:07 AM
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
  `accepted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`origin_user`, `target_user`, `date_of_quiz`, `request_id`, `accepted`) VALUES
('Vaibhav', 'Hish', '2021-05-20 03:42:00', 124, 1),
('Vaibhav', 'Hish', '2021-05-28 03:42:00', 125, 1),
('Vaibhav', 'Hish', '2021-05-20 02:44:00', 126, 1),
('Vaibhav', 'Hish', '2021-05-20 02:46:00', 127, 1),
('Vaibhav', 'Hish', '2021-05-28 02:51:00', 128, 1),
('Hish', 'Vaibhav', '2021-05-20 02:52:00', 129, 1),
('Hish', 'Vaibhav', '2021-05-20 02:47:00', 130, 1),
('Hish', 'Vaibhav', '2021-05-20 02:37:00', 131, 1),
('Vaibhav', 'Hish', '2021-05-20 07:06:00', 132, 1),
('Hish', 'Vaibhav', '2021-05-20 08:02:00', 133, 1),
('Hish', 'Vaibhav', '2021-05-13 08:02:00', 134, 0);

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
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

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
