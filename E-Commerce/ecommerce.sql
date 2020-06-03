-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 10:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Productname` varchar(255) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ProdImage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Productname`, `Price`, `Quantity`, `ProdImage`) VALUES
(4, 'Clothes : tshirt', 399, 6, '5ed5fce0272e31.37744747.jpg'),
(5, 'Mobile Phone', 9999, 6, '5ed5fd45043655.36234250.png'),
(6, 'Speaker', 2999, 0, '5ed5ff97e7c059.21819768.jpg'),
(7, 'Power Bank', 999, 2, '5ed600da162081.89736971.webp'),
(8, 'Clothes : jeans', 1199, 9, '5ed725fc2721c5.88266638.jpg'),
(9, 'Iphone', 30000, 1, '5ed72618583680.57300301.jpg'),
(10, 'Clothes : Jacket', 2999, 8, '5ed7263978ebf1.06088412.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Pwd` varchar(255) DEFAULT NULL,
  `UserAddress` varchar(255) DEFAULT NULL,
  `Mobile` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `Email`, `Pwd`, `UserAddress`, `Mobile`, `Gender`) VALUES
(1, 'Hetesh Batta', 'heteshbatta@gmail.com', 'hetesh123', '9041477131', '66 sarv mangal society zirakpur ', 'male'),
(2, 'Rahul garg', 'rahulgarg@gmail.com', 'rahul123', '9041477121', '66 sarv mangal society', 'male'),
(10, 'rohit', 'rohit@gmail.com', 'rohit123', '9041477141', '66 sarv mangal society', 'male'),
(11, 'sagar', 'sagar@gmail.com', 'sagar123', '9041477141', '66 sarv mangal society', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

CREATE TABLE `user_products` (
  `id` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `prodname` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `prodid`, `userid`, `prodname`, `quantity`) VALUES
(2, 5, 1, 'Mobile Phone', 1),
(3, 7, 1, 'Power Bank', 2),
(4, 6, 1, 'Speaker', 8),
(5, 4, 1, 'Clothes : tshirt', 1),
(6, 7, 2, 'Power Bank', 0),
(7, 6, 2, 'Speaker', 1),
(8, 4, 2, 'Clothes : tshirt', 1),
(9, 9, 1, 'Iphone', 1),
(10, 7, 10, 'Power Bank', 1),
(11, 5, 10, 'Mobile Phone', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodid` (`prodid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_products`
--
ALTER TABLE `user_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_products`
--
ALTER TABLE `user_products`
  ADD CONSTRAINT `user_products_ibfk_1` FOREIGN KEY (`prodid`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `user_products_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
