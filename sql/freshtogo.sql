-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 06:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshtogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `parent_id`) VALUES
(1, 'Grains', 0),
(2, 'Canned', 0),
(3, 'Dairy', 0),
(4, 'Eggs', 0),
(5, 'Fruits', 0),
(6, 'Seafood', 0),
(7, 'Meat', 0),
(8, 'Poultry', 0),
(9, 'Vegetables', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(16) NOT NULL,
  `invoice_id` int(16) NOT NULL,
  `product_id` int(16) NOT NULL,
  `product_type` varchar(60) NOT NULL,
  `product_desc` varchar(60) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL,
  `sold_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int(11) NOT NULL,
  `supply_name` varchar(255) NOT NULL,
  `supply_description` varchar(255) NOT NULL,
  `supply_category` varchar(255) NOT NULL,
  `supply_price` int(11) NOT NULL,
  `supply_stock` int(11) NOT NULL,
  `supply_sale` int(11) NOT NULL,
  `supply_owner_id` int(11) NOT NULL,
  `supply_owner_name` varchar(255) NOT NULL,
  `supply_start_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `supply_name`, `supply_description`, `supply_category`, `supply_price`, `supply_stock`, `supply_sale`, `supply_owner_id`, `supply_owner_name`, `supply_start_date`) VALUES
(1, 'Hoy', 'Buloy', 'Fruits', 100, 200, 0, 2, 'Mau Mau', '1970-01-01 01:00:00'),
(2, 'sdasd', 'ads', 'Canned', 123, 121, 0, 2, 'Mau Mau', '0000-00-00 00:00:00'),
(3, 'hoy', 'hoh', 'Canned', 23, 10, 0, 2, 'Mau Mau', '0000-00-00 00:00:00'),
(4, 'pota', 'pota', 'Canned', 111111, 11, 0, 2, 'Mau Mau', '1970-01-01 01:00:00'),
(5, 'sdf', 'ssad', 'Canned', 23, 23, 0, 2, 'Mau Mau', '2017-08-09 23:35:05'),
(6, 'fdf', 'sfdf', 'Canned', 123, 232, 0, 2, 'Mau Mau', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `fname`, `lname`, `email`, `password`) VALUES
(1, '2', 'Angel', 'Angel', 'angel@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, '1', 'Mau', 'Mau', 'mau@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, '1', 'John', 'Doe', 'john@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, '1', 'jaime', 'reidus', 'jayewolfer@gmail.com', '1c63129ae9db9c60c3e8aa94d3e00495');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
