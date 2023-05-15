-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 05:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathlor`
--
CREATE DATABASE IF NOT EXISTS `pathlor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pathlor`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `profile_id`, `street_address`, `postal_code`, `city`, `province`, `country`) VALUES
(1, 5, '4750 Avenue Saint-Kevin', 'H4L 3X9', 'Montreal', 'Qc', 'Canada'),
(2, 7, '8830 Rue jeanne Mance', 'H2N1X4', 'Montreal', 'Quebec', 'Canada'),
(3, 8, '8022 Avenue Champagneur', 'h3k2k5', 'Montreal', 'Quebec', 'Canada'),
(4, 9, 'Disney Land St.', 'H7T 1K2', 'ForeEverland City', 'Province of Fantasy', 'Country of imaginations'),
(5, 10, '1234 Avenue Van horne', 'H3NX5', 'Montreal', 'Quebec', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `info_id` int(11) NOT NULL,
  `about_text` text NOT NULL,
  `contact_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `about_text`, `contact_text`) VALUES
(1, 'Welcome to Pathlor Tech', '@instagram | example@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `total_price` decimal(6,2) NOT NULL,
  `order_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `profile_id`, `address_id`, `status`, `total_price`, `order_date`) VALUES
(1, 5, 1, 'Completed', '4199.77', '2023-05-10'),
(9, 5, 1, 'In progress', '576.14', '2023-05-10'),
(10, 5, 1, 'In cart', '0.00', '2023-05-10'),
(11, 7, 2, 'Completed', '3107.28', '2023-05-15'),
(12, 9, 4, 'In progress', '3107.28', '2023-05-15'),
(13, 8, 3, 'In progress', '1438.64', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(1, 1, 12, 1, '1250.99'),
(2, 1, 11, 1, '200.99'),
(3, 2, 10, 1, '1250.99'),
(4, 1, 9, 1, '199.99'),
(11, 8, 10, 1, '500.99'),
(12, 8, 10, 1, '500.99'),
(13, 9, 10, 1, '500.99'),
(14, 10, 9, 1, '199.99'),
(15, 11, 11, 1, '2200.99'),
(16, 11, 10, 1, '500.99'),
(17, 12, 11, 1, '2200.99'),
(18, 12, 10, 1, '500.99'),
(19, 13, 13, 1, '1250.99');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `method` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `unit_price` decimal(6,2) NOT NULL,
  `discount_price` decimal(6,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `type`, `description`, `image`, `unit_price`, `discount_price`, `quantity`) VALUES
(9, 'Gaming laptop', 'Laptop', 'this is a gaming laptop', NULL, '199.99', '0.00', 5),
(10, 'Home Laptop', 'Laptop', 'This is a home laptop', '-64505bcd40bc7.jpg', '500.99', '0.00', 2),
(11, 'Home Desktop', 'Desktop', 'This is a home desktop', '-64506057e4a5e.jpg', '2200.99', '0.00', 1),
(12, 'Gaming PC', 'Desktop', 'This is a gaming PC', '-6450609a19a48.jpg', '1250.99', '0.00', 4),
(13, 'Gaming Laptop', 'Laptop', 'This is a gaming laptop', '-645b209ebee5d.jpg', '1250.99', '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone_number`) VALUES
(5, 'Maxym', '', 'Galenko', 'maxym@gmail.com', '(514) 294-2667'),
(7, 'Ali', '', 'Raza', 'Aliraza@gmail.com', '4382258570'),
(8, 'Maxym', 'Ma', 'Galenko', 'Maxym@hotmail.com', '1234556789'),
(9, 'Mert', '', 'banana', 'Mert@gmail.com', '1234567891'),
(10, 'Test', '', 'Test family', 'random@gmail.com', '4383348670');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(72) NOT NULL,
  `role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password_hash`, `role`) VALUES
(4, 'A', '$2y$10$o36BXwd.ArZYo.P.Js9dIeF3PArTIHpDXvYnohn5C/QB8tx3nCKM6', 'admin'),
(5, 'C', '$2y$10$W9oy1hsP42vjZi1AO67KmuaXMAmTNToFPRXyZBx5/4QstYHsEs0Lm', 'customer'),
(7, 'Ali', '$2y$10$VWzOi2k6InvJhU87dO5nbe5FTBHYal0V9ctFxfkmSMvJbD5QEslze', 'customer'),
(8, 'Maxym', '$2y$10$AWECUi6yNB5YKyiYuSRNeOKaE1j3bgCYVRhXtYVQgx4Yhr5DuYZj6', 'customer'),
(9, 'Mert', '$2y$10$rQUIrqptUSBOeix0WnrD.OrOvzRY9bxfzlEsC4BV5j417InakwQoa', 'customer'),
(10, 'Test', '$2y$10$akxMDQGdznTjzfoztXoQ.uCS29mvGfS7iroPLojOr7PSkgbj5a72W', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `address_to_profile` (`profile_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_to_profile` (`profile_id`),
  ADD KEY `orders_to_address` (`address_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_details_to_orders` (`order_id`),
  ADD KEY `order_details_to_product` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_to_orders` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_to_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_to_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `orders_to_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_to_user` FOREIGN KEY (`profile_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
