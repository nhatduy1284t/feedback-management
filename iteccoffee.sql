-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteccoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `post_message` text DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `category`, `user_id`, `status`, `post_message`, `created_date`) VALUES
(26, 'Good post', 'Post test here!!!!!!!!!!!!!!', 'drink', 28, 0, NULL, '2022-07-09 15:34:08'),
(27, 'Complaint about service', 'We need to be cared more', 'service', 28, 0, NULL, '2022-07-09 15:35:22'),
(28, 'posttttttttttttttttttt', 'postttttttttttttttttttttttttttttttttt', 'drink', 28, 0, NULL, '2022-07-09 15:38:20'),
(29, 'Post from normal user', 'Hello, i want to say that the service is so good :&gt;', 'service', 29, 0, NULL, '2022-07-09 15:39:22'),
(30, 'sadsadassadsadassadsadas', 'sadsadassadsadassadsadas', 'drink', 30, 1, 'hahahaa', '2022-07-11 11:57:53'),
(31, 'Good drink', 'I lovee your coffee, it tastes very good!', 'drink', 30, 1, 'Thank you very much', '2022-07-11 12:08:28'),
(32, 'Attitude of manager', 'I dont like his behaviour when he yells at his employee.', 'attitude', 30, 0, NULL, '2022-07-11 13:41:37'),
(33, 'Need more light', 'I think the place need to be brighter, it\'s way too dark', 'others', 30, 0, NULL, '2022-07-11 13:42:25'),
(34, 'Should open sooner', 'I want this coffee shop to open at around 6am. I work pretty early', 'service', 30, 1, 'Sorry, what we can do is to open at 7AM because we have to open till 11PM, which is very tired for the staff working here. Thank for your feedback contribution', '2022-07-11 13:43:31'),
(35, 'Worst cappuchino', 'I think there is a problem with the cappuchino. It\'s too bitter. It should be sweet, right?', 'drink', 30, 0, NULL, '2022-07-11 13:44:42'),
(36, 'Good attitude', 'I am very satisfied with the staff\'s attitude, they are so professional.', 'attitude', 30, 0, NULL, '2022-07-11 13:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`) VALUES
(28, 'admin', '$2y$10$GvXzEDQVrX1.kBVyluQqEOGRRk.8M0gVyfHgXYeanP.0dtIw/QtYy', 'admin@gmail.com', 1),
(29, 'normaluser', '$2y$10$7JVrgTUEceZBoSEEYHc3pOShoR0WvUuCpCuqMg7PB67AEqG0Wn8aO', 'user@gmail.itec', 0),
(30, 'nhatduy', '$2y$10$Luiwjxd9w4rWvWS.ffH38eHT.sJNmvHOq.WOALf/u6efBaXRrlxjO', 'nhatduy1284t@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
