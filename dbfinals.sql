-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 12:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfinals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` char(25) DEFAULT NULL,
  `password` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 1, 'AMD RYZEN 7 5800X 3.8GHZ UNLOCKED', '27000.00', 'ryzen7.jpg'),
(2, 1, 'AMD Ryzen 5 3400G with Radeon RX Vega 11 Graphics', '10200.00', 'ryzen5.jpg'),
(3, 1, 'Intel Core i5 8400 Processor 9M Cache 2.8Ghz', '7500.00', 'i5.jpg'),
(4, 1, 'Tecware Forge M TWCA-FORGEM-WHAR TG M-ATX Chassis White', '2600.00', 'forge.jpg'),
(5, 1, 'Sharkoon RGB LIT 200 ATX Mid Tower with Tempered Glass', '2550.00', 'sharkoon.jpg'),
(6, 2, 'Cooler Master Blizzard T2 Mini CPU Cooler', '850.00', 'cooler.jpg'),
(7, 2, 'Samsung 1TB 860 EVO MZ-76E1T0BW Solid State Drive', '6400.00', 'samsung.jpg'),
(8, 2, 'MSI MPG Z490 Gaming Edge Wifi Motherboard', '10600.00', 'msi.jpg'),
(9, 2, 'MSI B350M PRO-VD PLUS Motherboard', '2600.00', 'msi2.jpg'),
(10, 2, 'SilverStone Essentials 650W 80 Bronze Power Supply', '2900.00', 'silver.png'),
(11, 3, 'FSP Hyper K 600W 80 APFC Power Supply', '2700.00', 'fsp.jpg'),
(12, 3, 'Logitech G502 HERO High Performance RGB Gaming Mouse', '2500.00', 'logitech.jpg'),
(13, 3, 'HyperX Alloy Elite 2 Mechanical Gaming Keyboard', '7700.00', 'hyperx.jpg'),
(14, 3, 'LENOVO LEGION H300 STEREO GXD0T69863 GAMING HEADSET', '2550.00', 'lenovo.jpg'),
(15, 3, 'APC LSW2000-IND LINE-R 2000VA 3Socket AVR', '1800.00', 'apc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `fname` char(25) DEFAULT NULL,
  `mname` char(25) DEFAULT NULL,
  `lname` char(25) DEFAULT NULL,
  `uname` char(25) DEFAULT NULL,
  `pass` char(25) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `contact_num` int(15) DEFAULT NULL,
  `profile_pic` char(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `code` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `uname`, `pass`, `birthday`, `email`, `contact_num`, `profile_pic`, `active`, `code`) VALUES
(2, 'John', 'Jane', 'Doe', 'johnjanedoe', '987654321', '1999-08-20', 'rosonly.rosonly@gmail.com', 2147483647, 'profPic2.jpg', 1, 'f5VrALhKePdz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
