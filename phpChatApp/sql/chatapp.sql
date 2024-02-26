-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 06:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 603901229, 1090358446, 'hello bro!'),
(2, 1090358446, 603901229, 'yes'),
(3, 1090358446, 603901229, 'how are you !'),
(4, 1090358446, 603901229, '?'),
(5, 603901229, 1090358446, 'hlo'),
(6, 1090358446, 1090358446, 'jk'),
(7, 1090358446, 1090358446, 'kya hua'),
(8, 603901229, 1090358446, 'hjl;\''),
(9, 1090358446, 603901229, 'hello'),
(10, 603901229, 1090358446, 'yes'),
(11, 1090358446, 603901229, 'hlo'),
(12, 1313073828, 716080795, 'hlo'),
(13, 530495884, 1107032501, 'hii'),
(14, 1313073828, 1090358446, 'hlo'),
(15, 716080795, 1090358446, 'hlo'),
(16, 1107032501, 1090358446, 'hello'),
(17, 1107032501, 1090358446, 'hlo'),
(18, 530495884, 1090358446, 'hello'),
(19, 196074286, 308002203, 'hello dear !');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(2, 435214800, 'Rahul', 'Verma', 'Rahul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708721251IMG_20240101_130404_350.jpg', 'Active now'),
(3, 1090358446, 'sandeep', 'kumar', 'sand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708712860IMG_20240101_121707_702.jpg', 'Offline now'),
(5, 435214800, 'Rahul', 'Verma', 'Rahul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708721251IMG_20240101_130404_350.jpg', 'Active now'),
(6, 530495884, 'aurov', 'singh', 'aurov@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708748323IMG_20240101_130404_350.jpg', 'Offline now'),
(9, 1107032501, 'new', 'person', 'new@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708865367IMG_20240101_130900_278.jpg', 'Active now'),
(10, 770768352, 'aman', 'khan', 'aman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708924494IMG_20240101_132927_799.jpg', 'Offline now'),
(11, 868735462, 'New', 'Person', 'new2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708924571IMG20240101123842.jpg', 'Offline now'),
(12, 1576614904, 'Ramesh', 'yadav', 'ramesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708924820alex-suprun-ZHvM3XIOHoE-unsplash.jpg', 'Offline now'),
(13, 769626721, 'martin', 'luthar', 'martin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708924861edward-cisneros-_H6wpor9mjs-unsplash.jpg', 'Offline now'),
(14, 308002203, 'john', 'ebrahim', 'john@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708924904linkedin-sales-solutions-pAtA8xe_iVM-unsplash.jpg', 'Active now'),
(15, 508785400, 'cute girl', 'girl', 'cute@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708924955christina-wocintechchat-com-SJvDxw0azqw-unsplash.jpg', 'Offline now'),
(16, 877535196, 'deepak', 'kumar', 'deepak@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708925002christian-buehner-DItYlc26zVI-unsplash.jpg', 'Offline now'),
(17, 196074286, 'comedy ', 'boy', 'boy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1708925034warren-VVEwJJRRHgk-unsplash.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
