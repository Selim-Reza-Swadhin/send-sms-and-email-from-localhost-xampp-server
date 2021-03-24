-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 09:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localhost_send_mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `send_mail_from_all_database_user`
--

CREATE TABLE `send_mail_from_all_database_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_mail_from_all_database_user`
--

INSERT INTO `send_mail_from_all_database_user` (`id`, `email`, `phone`, `password`, `time`) VALUES
(1, 'selimrezaswadhim@gmail.com', '01724063642', '1234', '2021-03-22 09:56:33'),
(2, 'selimrezaswadhin89@gmail.com', '01726635436', '12345', '2021-03-22 09:56:33'),
(3, 'selimrezaswadhinm@gmail.com', '01738304107', '123456', '2021-03-22 09:57:13'),
(4, 'selim.swadhin@gmail.com', '01722072226', '1234567', '2021-03-22 09:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `send_mail_from_all_database_user`
--
ALTER TABLE `send_mail_from_all_database_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `send_mail_from_all_database_user`
--
ALTER TABLE `send_mail_from_all_database_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
