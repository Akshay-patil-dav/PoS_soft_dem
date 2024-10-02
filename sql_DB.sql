-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2024 at 12:33 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

DROP TABLE IF EXISTS `addcard`;
CREATE TABLE IF NOT EXISTS `addcard` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `cgst` int NOT NULL,
  `sgst` int NOT NULL,
  `igst` int NOT NULL,
  `cess` int NOT NULL,
  `cgst_amount` int NOT NULL,
  `sgst_amount` int NOT NULL,
  `igst_amout` int NOT NULL,
  `cess_amount` int NOT NULL,
  `net_unit` double DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addcard_raw`
--

DROP TABLE IF EXISTS `addcard_raw`;
CREATE TABLE IF NOT EXISTS `addcard_raw` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `cgst` int NOT NULL,
  `sgst` int NOT NULL,
  `igst` int NOT NULL,
  `cess` int NOT NULL,
  `cgst_amount` int NOT NULL,
  `sgst_amount` int NOT NULL,
  `igst_amout` int NOT NULL,
  `cess_amount` int NOT NULL,
  `net_unit` double DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addcard_raw`
--

INSERT INTO `addcard_raw` (`id`, `product_name`, `cgst`, `sgst`, `igst`, `cess`, `cgst_amount`, `sgst_amount`, `igst_amout`, `cess_amount`, `net_unit`, `quantity`, `product_code`) VALUES
(14, 'Pipe', 0, 0, 0, 0, 0, 0, 0, 0, 56454768, 5, '5asdf56'),
(15, 'Pipe', 0, 0, 0, 0, 0, 0, 0, 0, 56454768, 5, '5asdf56'),
(16, 'Pipe', 0, 0, 0, 0, 0, 0, 0, 0, 56454768, 5, '5asdf56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `akki`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `akki`;
CREATE TABLE IF NOT EXISTS `akki` (
`gstin` int
,`payment` varchar(255)
,`date` varchar(255)
,`company_name` varchar(255)
,`email_id` varchar(255)
,`phone_no` varchar(255)
,`city` varchar(255)
,`state` varchar(255)
,`postal_code` varchar(255)
,`country` varchar(255)
,`name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

DROP TABLE IF EXISTS `client_info`;
CREATE TABLE IF NOT EXISTS `client_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `f1` varchar(255) NOT NULL,
  `f2` varchar(255) NOT NULL,
  `f3` varchar(255) NOT NULL,
  `f4` varchar(255) NOT NULL,
  `f5` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addr_comp` varchar(255) NOT NULL,
  `gstin_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `company_name`, `email_id`, `phone_no`, `city`, `state`, `postal_code`, `country`, `f1`, `f2`, `f3`, `f4`, `f5`, `name`, `addr_comp`, `gstin_no`) VALUES
(1, 'AUE', 'akshaypatil22082002@gmail.com', '09580112795', 'Pune City', 'Maharashtra', '411001', 'India', '', '', '', '', '', 'Akshay Santosh Patil', 'Pune', 'SSD6565656SW65'),
(2, 'Mahalaxmi Bazar', 'mz@gmail.com', '+91-558974545', 'Sangli', 'Maharashtra', '411001', 'India', '', '', '', '', '', 'Susant Patil', 'Sangli', 'SD552F5'),
(3, 'Local Client', 'local@gmail.com', '+91-00000000000', 'Local Client', 'Local Client', 'Local Client', 'Local Client', '', '', '', '', '', 'Local Client', 'Local Client', 'Local Client');

-- --------------------------------------------------------

--
-- Table structure for table `company_create`
--

DROP TABLE IF EXISTS `company_create`;
CREATE TABLE IF NOT EXISTS `company_create` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `1p` varchar(255) NOT NULL,
  `2p` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `gstin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company_create`
--

INSERT INTO `company_create` (`id`, `name`, `city`, `state`, `category`, `location`, `country`, `pin_code`, `img`, `gst`, `1p`, `2p`, `bio`, `email`, `user`, `gstin`) VALUES
(1, 'Akshay Digital ', 'Sangli', 'Maharashtra', 'Software', 'Sangli', 'India', '416312', 'BILL ME.png', 'edsf52', '9580112795', '9580112795', '', '[value-14]', 'Akshay', '[value-16]');

-- --------------------------------------------------------

--
-- Stand-in structure for view `d1`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `d1`;
CREATE TABLE IF NOT EXISTS `d1` (
`users` varchar(255)
,`pro_id` varchar(255)
,`qui` varchar(255)
,`price` double
,`GST` int
,`gst_ret` double
);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, 'IMG20231128184411.jpg'),
(2, 'IMG20231128184411.jpg'),
(3, 'IMG_20240628_124211.jpg'),
(4, 'IMG_20240628_124211.jpg'),
(5, 'IMG20231128184411.jpg'),
(6, ''),
(7, ''),
(8, ''),
(9, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `marze`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `marze`;
CREATE TABLE IF NOT EXISTS `marze` (
`id` int
,`product_name` varchar(255)
,`product_type` varchar(255)
,`product_category` varchar(255)
,`gstret` int
,`kg` int
,`img` varchar(255)
,`product_info` varchar(255)
,`cess` int
,`igst` int
,`purchese_price` double
,`product_price` double
,`MRP` varchar(255)
,`quentity` int
,`product_code` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pp1`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `pp1`;
CREATE TABLE IF NOT EXISTS `pp1` (
`pro_code` varchar(255)
,`qt` varchar(255)
,`users` varchar(255)
,`date` datetime
,`pos_no` varchar(255)
,`product_name` varchar(255)
,`product_code` varchar(255)
,`gstret` int
,`cess` int
,`product_price` double
,`MRP` varchar(255)
,`igst` int
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `gstret` int NOT NULL,
  `kg` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `product_info` varchar(255) NOT NULL,
  `cess` int DEFAULT NULL,
  `igst` int DEFAULT NULL,
  `purchese_price` double DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `MRP` varchar(255) DEFAULT NULL,
  `quentity` int NOT NULL,
  `product_code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_type`, `product_category`, `gstret`, `kg`, `img`, `product_info`, `cess`, `igst`, `purchese_price`, `product_price`, `MRP`, `quentity`, `product_code`) VALUES
(17, 'Digital Marketing', 'Service', 'packing food', 5, 0, '', '', 2, 0, 5, 10, '30', 489, 'S24'),
(18, 'Software', 'selling', 'Software', 0, 0, '', '', 5, 5, 5, 10, '20', 91, '12AA'),
(16, 'Pipe', 'Raw', 'Raw', 0, 0, '', '', 0, 5, 50, 50, '50', 0, 'AS55454');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

DROP TABLE IF EXISTS `purchase_orders`;
CREATE TABLE IF NOT EXISTS `purchase_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchese_info`
--

DROP TABLE IF EXISTS `purchese_info`;
CREATE TABLE IF NOT EXISTS `purchese_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gstin_no` varchar(255) NOT NULL,
  `product_code` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `net_unit` int NOT NULL,
  `quantity` int NOT NULL,
  `cgst` int NOT NULL,
  `sgst` int NOT NULL,
  `igst` int NOT NULL,
  `cess` int NOT NULL,
  `pur_date` varchar(255) DEFAULT NULL,
  `inv_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `purchese_info`
--

INSERT INTO `purchese_info` (`id`, `gstin_no`, `product_code`, `product_name`, `net_unit`, `quantity`, `cgst`, `sgst`, `igst`, `cess`, `pur_date`, `inv_no`) VALUES
(1, '585874', 2147483647, 'Software ', 0, 5, 3, 3, 0, 0, '2024 - September - 02 ', '87587578'),
(2, '2001', 2147483647, 'Software ', 0, 100, 3, 3, 0, 0, '2024 - September - 05 ', '52'),
(3, '2001', 5175554, 'Software ', 4772, 5, 0, 0, 5, 0, '2024 - September - 05 ', '353s5dfxc'),
(4, '2001', 546545, 'klkjkj', 20, 1000, 0, 0, 0, 0, '2024 - September - 08 ', '522dsd'),
(5, '2001', 5175554, 'Software ', 4772, 555, 0, 0, 5, 0, '', 'sd525425'),
(6, '2001', 546545, 'klkjkj', 20, 54352, 0, 0, 0, 0, '2024-09-04', 'asd53352'),
(7, '2001', 5175554, 'Software ', 4772, 52435, 0, 0, 5, 0, '2024-08-01', 'asd36.263'),
(8, '2001', 546545, 'klkjkj', 20, 542, 0, 0, 0, 0, '2024-06-06', '4re52'),
(9, '2001', 546545, 'klkjkj', 20, 35435, 0, 0, 0, 0, '2024-09-05', '3652ss'),
(10, '2001', 546545, 'klkjkj', 20, 44, 0, 0, 0, 0, '2024-09-11', '53ss'),
(11, '585874', 5175554, 'Software ', 4772, 40, 0, 0, 5, 0, '2024-09-08', 'S5435'),
(12, '2001', 5175554, 'Software ', 4772, 5, 0, 0, 5, 0, '2024-09-09', 'AKKI420'),
(13, '2001', 2147483647, 'Digital', 5, 5, 0, 0, 5, 0, '2024-09-09', '2525d'),
(14, '585874', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-10', 'wds252'),
(15, '2004', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-09', 'AAA535'),
(16, '2001', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-09', 'd55'),
(17, '2001', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-09', 'DF353'),
(18, '585874', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-09', 'S563'),
(19, '2001', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-09', 'S555'),
(20, '2001', 5, 'Pipe', 56454768, 5, 0, 0, 0, 0, '2024-09-09', 'S452'),
(21, '585874', 34, 'parle', 2, 5, 0, 0, 0, 0, '2024-09-09', 'AS555'),
(22, '2001', 0, 'Software', 50, 55, 0, 0, 0, 0, '2024-09-10', 'SSS552D');

-- --------------------------------------------------------

--
-- Table structure for table `raw_product`
--

DROP TABLE IF EXISTS `raw_product`;
CREATE TABLE IF NOT EXISTS `raw_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `gstret` int NOT NULL,
  `kg` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `product_info` varchar(255) NOT NULL,
  `cess` int DEFAULT NULL,
  `igst` int DEFAULT NULL,
  `purchese_price` double DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `MRP` varchar(255) DEFAULT NULL,
  `quentity` int NOT NULL,
  `product_code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `raw_product`
--

INSERT INTO `raw_product` (`id`, `product_name`, `product_type`, `product_category`, `gstret`, `kg`, `img`, `product_info`, `cess`, `igst`, `purchese_price`, `product_price`, `MRP`, `quentity`, `product_code`) VALUES
(10, 'Akki', 'Raw', 'Raw', 0, 0, '', '', 0, 0, 5, 10, '20', 0, '54555S'),
(9, 'Pipe', 'Raw', 'Service', 0, 0, '', '', 0, 0, 56454768, 254654658, '524325', 0, '5asdf56');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sale_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `users` varchar(255) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_date`, `users`, `quantity`, `product_id`) VALUES
(1123, '2024-09-29 09:06:55', 'akshaychavan07695@gmail.com', '1', 'S24'),
(1121, '2024-09-29 09:06:46', 'akshaychavan07695@gmail.com', '1', '12AA'),
(1120, '2024-09-29 09:06:42', 'akshaychavan07695@gmail.com', '1', 'S24');

-- --------------------------------------------------------

--
-- Table structure for table `sells_information_pos`
--

DROP TABLE IF EXISTS `sells_information_pos`;
CREATE TABLE IF NOT EXISTS `sells_information_pos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pro_code` varchar(255) NOT NULL,
  `qt` varchar(255) NOT NULL,
  `users` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pos_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sells_information_pos`
--

INSERT INTO `sells_information_pos` (`id`, `pro_code`, `qt`, `users`, `date`, `pos_no`) VALUES
(1, '2147483647', '2', 'akshaychavan07695@gmail.com', '2024-09-02 19:19:28', '944'),
(2, '2147483647', '1', 'akshaychavan07695@gmail.com', '2024-09-02 19:20:42', '945'),
(3, '2147483647', '1', 'akshaychavan07695@gmail.com', '2024-09-02 19:24:10', '946'),
(4, '2147483647', '1', 'akshaychavan07695@gmail.com', '2024-09-05 08:56:31', '947'),
(5, '5175554', '2', 'akshaychavan07695@gmail.com', '2024-09-05 23:13:38', '949'),
(6, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-05 23:19:45', '950'),
(7, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-06 20:00:31', '951'),
(8, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:30:11', '952'),
(9, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:31:45', '953'),
(10, '546545', '2', 'akshaychavan07695@gmail.com', '2024-09-08 17:31:45', '953'),
(11, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:32:04', '957'),
(12, '546545', '2', 'akshaychavan07695@gmail.com', '2024-09-08 17:32:04', '957'),
(13, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:39:18', '959'),
(14, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:39:38', '960'),
(15, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:41:45', '962'),
(16, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:41:45', '962'),
(17, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:42:15', '964'),
(18, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:42:15', '964'),
(19, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:47:27', '965'),
(20, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:47:27', '965'),
(21, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:48:46', '968'),
(22, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 17:48:46', '968'),
(23, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:05:50', '970'),
(24, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:05:50', '970'),
(25, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:27:52', '972'),
(26, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:27:52', '972'),
(27, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:29:55', '974'),
(28, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:29:55', '974'),
(29, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:31:56', '976'),
(30, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 18:31:56', '976'),
(31, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:01:39', '978'),
(32, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:01:39', '978'),
(33, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:04:13', '980'),
(34, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:04:13', '980'),
(35, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:05:37', '982'),
(36, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:05:37', '982'),
(37, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:21:30', '984'),
(38, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:21:30', '984'),
(39, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:24:37', '986'),
(40, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:24:37', '986'),
(41, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:26:54', '987'),
(42, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:26:54', '987'),
(43, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 19:44:13', '989'),
(44, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:11:49', '990'),
(45, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:15:02', '992'),
(46, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:15:02', '992'),
(47, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:15:54', '994'),
(48, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:15:54', '994'),
(49, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:16:51', '995'),
(50, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:16:51', '995'),
(51, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:17:17', '998'),
(52, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:17:17', '998'),
(53, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:20:29', '999'),
(54, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 20:20:29', '999'),
(55, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:14:06', '1002'),
(56, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:14:06', '1002'),
(57, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:15:43', '1004'),
(58, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:15:43', '1004'),
(59, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:18:58', '1006'),
(60, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:18:58', '1006'),
(61, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:19:33', '1008'),
(62, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 21:19:33', '1008'),
(63, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-08 22:21:28', '1010'),
(64, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 22:21:28', '1010'),
(65, '546545', '1', 'akshaychavan07695@gmail.com', '2024-09-08 22:40:32', '1011'),
(66, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-09 09:09:01', '1012'),
(67, '5175554', '1', 'akshaychavan07695@gmail.com', '2024-09-09 09:09:37', '1013'),
(68, '5175554', '2', 'akshaychavan07695@gmail.com', '2024-09-09 18:27:58', '1014'),
(69, '0', '2', 'akshaychavan07695@gmail.com', '2024-09-10 09:44:29', '1016'),
(70, '0', '14', 'akshaychavan07695@gmail.com', '2024-09-11 20:47:28', '1030'),
(71, 'AD4524D', '1', 'akshaychavan07695@gmail.com', '2024-09-16 08:55:14', '1067'),
(72, 'AD4524D', '1', 'akshaychavan07695@gmail.com', '2024-09-16 09:15:33', '1068'),
(73, 'AD4524D', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 09:36:32', '1069'),
(74, 'S24', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 10:17:51', '1095'),
(75, '12AA', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 10:17:51', '1095'),
(76, 'S24', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 10:18:28', '1097'),
(77, '12AA', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 10:18:28', '1097'),
(78, 'S24', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 10:26:28', '1099'),
(79, '12AA', '0.5', 'akshaychavan07695@gmail.com', '2024-09-16 10:26:28', '1099'),
(80, 'S24', '1', 'akshaychavan07695@gmail.com', '2024-09-17 16:01:09', '1101'),
(81, 'S24', '1', 'akki@gmail.com', '2024-09-18 07:52:41', '1102'),
(82, 'S24', '1', 'akki@gmail.com', '2024-09-18 07:53:39', '1103'),
(83, 'S24', '2', 'akki@gmail.com', '2024-09-18 08:00:45', '1105'),
(84, '12AA', '3', 'akki@gmail.com', '2024-09-18 08:00:45', '1105'),
(85, '12AA', '1', 'akshaychavan07695@gmail.com', '2024-09-18 19:54:03', '1109'),
(86, 'S24', '2', 'akshaychavan07695@gmail.com', '2024-09-25 16:15:30', '1111'),
(87, '12AA', '2', 'akshaychavan07695@gmail.com', '2024-09-25 16:15:30', '1111'),
(88, 'S24', '1', 'akshaychavan07695@gmail.com', '2024-09-29 14:30:35', '1114'),
(89, '12AA', '1', 'akshaychavan07695@gmail.com', '2024-09-29 14:30:35', '1114'),
(90, 'S24', '1', 'ak@gmail.com', '2024-09-29 14:42:47', '1125'),
(91, '12AA', '1', 'ak@gmail.com', '2024-09-29 14:42:47', '1125');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sell_cal`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sell_cal`;
CREATE TABLE IF NOT EXISTS `sell_cal` (
`users` varchar(255)
,`pro_id` varchar(255)
,`qui` varchar(255)
,`price` double
,`GST` int
,`price_GS` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sell_d1`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sell_d1`;
CREATE TABLE IF NOT EXISTS `sell_d1` (
`id` int
,`pro_id` varchar(255)
,`sale_date` timestamp
,`users` varchar(255)
,`qui` varchar(255)
,`product_name` varchar(255)
,`product_code` varchar(255)
,`GST` int
,`cess` int
,`igst` int
,`purchese_price` double
,`price_GS` double
,`MRP` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sell_demo`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sell_demo`;
CREATE TABLE IF NOT EXISTS `sell_demo` (
`id` int
,`users` varchar(255)
,`pro_id` varchar(255)
,`qui` double
,`price` double
,`GST` int
,`price_GS` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sell_fach_info`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sell_fach_info`;
CREATE TABLE IF NOT EXISTS `sell_fach_info` (
`pro_code` varchar(255)
,`qt` varchar(255)
,`users` varchar(255)
,`date` datetime
,`pos_no` varchar(255)
,`product_name` varchar(255)
,`product_code` varchar(255)
,`gstret` int
,`cess` int
,`product_price` double
,`MRP` varchar(255)
,`igst` int
);

-- --------------------------------------------------------

--
-- Table structure for table `sell_info`
--

DROP TABLE IF EXISTS `sell_info`;
CREATE TABLE IF NOT EXISTS `sell_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `given_rs` varchar(255) DEFAULT NULL,
  `pos_no` varchar(255) DEFAULT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `chan` varchar(255) DEFAULT NULL,
  `ph_no` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `users` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sell_info`
--

INSERT INTO `sell_info` (`id`, `full_name`, `total_price`, `given_rs`, `pos_no`, `pay`, `chan`, `ph_no`, `gst_no`, `users`, `date`, `time`) VALUES
(1, NULL, '5', '5879955', '1012', 'Cash', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-09', '09:09:01'),
(2, NULL, '5', '578888', '1013', 'Pending', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-09', '09:09:37'),
(3, NULL, '5', '2002333', '1014', 'Cash', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-09', '18:27:58'),
(4, NULL, '1000', '2000', '1016', 'checka', NULL, '00-000-000', 'SD552F5', 'akshaychavan07695@gmail.com', '2024-09-10', '09:44:29'),
(5, NULL, '7000', '80000', '1030', 'Cash', NULL, '00-000-000', 'SD552F5', 'akshaychavan07695@gmail.com', '2024-09-11', '20:47:28'),
(6, NULL, '500', '600', '1067', 'Online', NULL, '00-000-000', 'SD552F5', 'akshaychavan07695@gmail.com', '2024-09-16', '08:55:14'),
(7, NULL, '500', '600', '1068', 'check', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-16', '09:15:33'),
(8, NULL, '500', '600', '1069', 'Pending', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-16', '09:36:32'),
(9, NULL, '21', '55', '1095', 'Online', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-16', '10:17:51'),
(10, NULL, '21', '20', '1097', 'Online', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-16', '10:18:28'),
(11, NULL, '21', '11', '1099', 'Online', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-16', '10:26:28'),
(12, NULL, '11', '11', '1101', 'Cash', NULL, '00-000-000', 'Local Client', 'akshaychavan07695@gmail.com', '2024-09-17', '16:01:09'),
(13, NULL, '11', '11', '1102', 'Cash', NULL, '00-000-000', 'Local Client', 'akki@gmail.com', '2024-09-18', '07:52:41'),
(14, NULL, '11', '1000', '1103', 'Cash', NULL, '00-000-000', 'Local Client', 'akki@gmail.com', '2024-09-18', '07:53:39'),
(15, NULL, '54', '60', '1105', 'Online', NULL, '00-000-000', 'Local Client', 'akki@gmail.com', '2024-09-18', '08:00:45'),
(16, NULL, '11', '500', '1109', 'Cash', NULL, '00-000-000', 'SD552F5', 'akshaychavan07695@gmail.com', '2024-09-18', '19:54:03'),
(17, NULL, '43', '364598', '1111', 'Cash', NULL, '00-000-000', 'SD552F5', 'akshaychavan07695@gmail.com', '2024-09-25', '16:15:30'),
(18, NULL, '22', '555', '1114', 'Online', NULL, '00-000-000', 'SD552F5', 'akshaychavan07695@gmail.com', '2024-09-29', '14:30:35'),
(19, NULL, '22', '22', '1125', 'Cash', NULL, '00-000-000', 'Local Client', 'ak@gmail.com', '2024-09-29', '14:42:47');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sell_pos_info_list`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sell_pos_info_list`;
CREATE TABLE IF NOT EXISTS `sell_pos_info_list` (
`total_price` varchar(255)
,`given_rs` varchar(255)
,`pos_no` varchar(255)
,`pay` varchar(255)
,`ph_no` varchar(255)
,`gst_no` varchar(255)
,`users` varchar(255)
,`gstin_no` varchar(255)
,`date` varchar(255)
,`time` varchar(255)
,`name` varchar(255)
,`company_name` varchar(255)
,`addr_comp` varchar(255)
,`email_id` varchar(255)
,`phone_no` varchar(255)
,`city` varchar(255)
,`state` varchar(255)
,`postal_code` varchar(255)
,`country` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `start_now_value`
--

DROP TABLE IF EXISTS `start_now_value`;
CREATE TABLE IF NOT EXISTS `start_now_value` (
  `d1_start` varchar(255) NOT NULL,
  `d2_stop` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `start_now_value`
--

INSERT INTO `start_now_value` (`d1_start`, `d2_stop`) VALUES
('2024-09-09', '2025-05-3');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

DROP TABLE IF EXISTS `supplier_info`;
CREATE TABLE IF NOT EXISTS `supplier_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `gstin_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `f1` varchar(255) NOT NULL,
  `f2` varchar(255) NOT NULL,
  `f3` varchar(255) NOT NULL,
  `f4` varchar(255) NOT NULL,
  `f5` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addr_comp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`id`, `company_name`, `gstin_no`, `email_id`, `phone_no`, `city`, `state`, `postal_code`, `country`, `f1`, `f2`, `f3`, `f4`, `f5`, `name`, `addr_comp`) VALUES
(4, 'sham', '2004', 'av@gmail.com', '+91-9580112754', 'sangli', 'Maharashtra', '415478', 'India', '', '', '', '', '', 'arun', 'Sangli'),
(3, 'AUE', '2001', 'au@gmail.com', '+91-4512478595', 'Sangli', 'Maharashtra', '416312', 'India', '', '', '', '', '', 'AUE_Akki', 'Tasgaon , Sangli'),
(5, 'Ramm', '585874', 'ra@gmail.com', '+91-78454151265', 'Thane', 'Maharashtra', '45785', 'India', '', '', '', '', '', 'RAmmm', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `suppro_purchese`
--

DROP TABLE IF EXISTS `suppro_purchese`;
CREATE TABLE IF NOT EXISTS `suppro_purchese` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gstin` int NOT NULL,
  `payment` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `users` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suppro_purchese`
--

INSERT INTO `suppro_purchese` (`id`, `gstin`, `payment`, `date`, `code`, `users`) VALUES
(1, 585874, 'Pay', '2024 - September - 02 ', '87587578', ''),
(2, 2001, 'Pay', '2024 - September - 05 ', '52', ''),
(3, 2001, 'Pay', '2024 - September - 05 ', '353s5dfxc', ''),
(4, 2001, 'Pay', '2024 - September - 08 ', '522dsd', ''),
(5, 2001, 'Pending', '', 'sd525425', ''),
(6, 2001, 'Pay', '2024-09-04', 'asd53352', ''),
(7, 2001, 'Pay', '2024-08-01', 'asd36.263', ''),
(8, 2001, 'Pay', '2024-06-06', '4re52', ''),
(9, 2001, 'Pay', '2024-09-05', '3652ss', ''),
(10, 2001, 'Pay', '2024-09-11', '53ss', ''),
(11, 585874, 'Pay', '2024-09-08', 'S5435', ''),
(14, 2001, 'Pending', '2024-09-09', 'AKKI420', ''),
(15, 2001, 'Pay', '', 'dafs52452', ''),
(16, 2001, 'Pay', '', 'dafs52452', ''),
(17, 2001, 'Pay', '', 'dafs52452', ''),
(18, 2001, 'Pending', '', 'weds542', ''),
(19, 2001, 'Pending', '', 'weds542', ''),
(20, 2001, 'Pay', '2024-09-09', '2525d', ''),
(21, 585874, 'Pay', '2024-09-10', 'wds252', ''),
(22, 2004, 'Pending', '2024-09-09', 'AAA535', ''),
(23, 2001, 'Pay', '2024-09-09', 'd55', ''),
(24, 2001, 'Pending', '2024-09-09', 'DF353', ''),
(25, 585874, 'Pay', '2024-09-09', 'S563', ''),
(26, 585874, 'Pay', '2024-09-09', 'S563', ''),
(27, 2001, 'Pay', '2024-09-09', 'S555', ''),
(28, 2001, 'Pay', '2024-09-09', 'S452', ''),
(29, 2001, 'Pay', '2024-09-09', 'S452', ''),
(30, 585874, 'Pending', '2024-09-09', 'AS555', ''),
(31, 2001, 'Pending', '2024-09-10', 'SSS552D', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sup_in`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sup_in`;
CREATE TABLE IF NOT EXISTS `sup_in` (
`gstin` int
,`payment` varchar(255)
,`date` varchar(255)
,`refercode` varchar(255)
,`company_name` varchar(255)
,`email_id` varchar(255)
,`phone_no` varchar(255)
,`city` varchar(255)
,`state` varchar(255)
,`country` varchar(255)
,`postal_code` varchar(255)
,`sup_name` varchar(255)
,`addr_comp` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `namuser` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roll`, `code`, `namuser`, `img`, `phone`) VALUES
(1, 'akshaychavan07695@gmail.com', '$2y$10$LGLZunu/7wsLtJyGimLuvuLK3ceWwHc3wkT1/12Bm4d4/S.wTiYL6', 'Admin', 'Ap2002', 'Akshay', NULL, NULL),
(2, 'akki@gmail.com', '$2y$10$wiDIWTI21F7vl5SjyJXHw.5bidAKN9uGaPSZ63bAXYaN6WOI.rc5W', 'Admin', NULL, 'AKKI', NULL, NULL),
(6, 'ak@gmail.com', '$2y$10$LddGe3rpF3.ffGSnQCzUOupRGA3oGl0RQ5WOXRrLLClHxA5riGPfK', 'Admin', NULL, 'Akshata Patil', NULL, '9584578458');

-- --------------------------------------------------------

--
-- Structure for view `akki`
--
DROP TABLE IF EXISTS `akki`;

DROP VIEW IF EXISTS `akki`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `akki`  AS SELECT `i`.`gstin` AS `gstin`, `i`.`payment` AS `payment`, `i`.`date` AS `date`, `s`.`company_name` AS `company_name`, `s`.`email_id` AS `email_id`, `s`.`phone_no` AS `phone_no`, `s`.`city` AS `city`, `s`.`state` AS `state`, `s`.`postal_code` AS `postal_code`, `s`.`country` AS `country`, `s`.`name` AS `name` FROM (`suppro_purchese` `i` join `supplier_info` `s`) WHERE (`i`.`gstin` = `s`.`gstin_no`) ;

-- --------------------------------------------------------

--
-- Structure for view `d1`
--
DROP TABLE IF EXISTS `d1`;

DROP VIEW IF EXISTS `d1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `d1`  AS SELECT `s`.`users` AS `users`, `s`.`product_id` AS `pro_id`, `s`.`quantity` AS `qui`, `p`.`product_price` AS `price`, `p`.`gstret` AS `GST`, ((`p`.`product_price` * `p`.`gstret`) / 100) AS `gst_ret` FROM (`sales` `s` join `product` `p` on((`s`.`product_id` = `p`.`product_code`))) ;

-- --------------------------------------------------------

--
-- Structure for view `marze`
--
DROP TABLE IF EXISTS `marze`;

DROP VIEW IF EXISTS `marze`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `marze`  AS SELECT `product`.`id` AS `id`, `product`.`product_name` AS `product_name`, `product`.`product_type` AS `product_type`, `product`.`product_category` AS `product_category`, `product`.`gstret` AS `gstret`, `product`.`kg` AS `kg`, `product`.`img` AS `img`, `product`.`product_info` AS `product_info`, `product`.`cess` AS `cess`, `product`.`igst` AS `igst`, `product`.`purchese_price` AS `purchese_price`, `product`.`product_price` AS `product_price`, `product`.`MRP` AS `MRP`, `product`.`quentity` AS `quentity`, `product`.`product_code` AS `product_code` FROM `product`union select `raw_product`.`id` AS `id`,`raw_product`.`product_name` AS `product_name`,`raw_product`.`product_type` AS `product_type`,`raw_product`.`product_category` AS `product_category`,`raw_product`.`gstret` AS `gstret`,`raw_product`.`kg` AS `kg`,`raw_product`.`img` AS `img`,`raw_product`.`product_info` AS `product_info`,`raw_product`.`cess` AS `cess`,`raw_product`.`igst` AS `igst`,`raw_product`.`purchese_price` AS `purchese_price`,`raw_product`.`product_price` AS `product_price`,`raw_product`.`MRP` AS `MRP`,`raw_product`.`quentity` AS `quentity`,`raw_product`.`product_code` AS `product_code` from `raw_product`  ;

-- --------------------------------------------------------

--
-- Structure for view `pp1`
--
DROP TABLE IF EXISTS `pp1`;

DROP VIEW IF EXISTS `pp1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pp1`  AS SELECT `sell`.`pro_code` AS `pro_code`, `sell`.`qt` AS `qt`, `sell`.`users` AS `users`, `sell`.`date` AS `date`, `sell`.`pos_no` AS `pos_no`, `p`.`product_name` AS `product_name`, `p`.`product_code` AS `product_code`, `p`.`gstret` AS `gstret`, `p`.`cess` AS `cess`, `p`.`product_price` AS `product_price`, `p`.`MRP` AS `MRP`, `p`.`igst` AS `igst` FROM (`sells_information_pos` `sell` join `product` `p` on((`sell`.`pro_code` = `p`.`product_code`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sell_cal`
--
DROP TABLE IF EXISTS `sell_cal`;

DROP VIEW IF EXISTS `sell_cal`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sell_cal`  AS SELECT `s`.`users` AS `users`, `s`.`product_id` AS `pro_id`, `s`.`quantity` AS `qui`, `p`.`product_price` AS `price`, `p`.`gstret` AS `GST`, (((`p`.`product_price` * `p`.`gstret`) / 100) + `p`.`product_price`) AS `price_GS` FROM (`sales` `s` join `product` `p` on((`s`.`product_id` = `p`.`product_code`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sell_d1`
--
DROP TABLE IF EXISTS `sell_d1`;

DROP VIEW IF EXISTS `sell_d1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sell_d1`  AS SELECT `sell`.`id` AS `id`, `sell`.`product_id` AS `pro_id`, `sell`.`sale_date` AS `sale_date`, `sell`.`users` AS `users`, `sell`.`quantity` AS `qui`, `p`.`product_name` AS `product_name`, `p`.`product_code` AS `product_code`, `p`.`gstret` AS `GST`, `p`.`cess` AS `cess`, `p`.`igst` AS `igst`, `p`.`purchese_price` AS `purchese_price`, `p`.`product_price` AS `price_GS`, `p`.`MRP` AS `MRP` FROM (`sales` `sell` join `product` `p` on((`sell`.`product_id` = `p`.`product_code`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sell_demo`
--
DROP TABLE IF EXISTS `sell_demo`;

DROP VIEW IF EXISTS `sell_demo`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sell_demo`  AS SELECT `s`.`id` AS `id`, `s`.`users` AS `users`, `s`.`product_id` AS `pro_id`, sum(`s`.`quantity`) AS `qui`, `p`.`product_price` AS `price`, `p`.`gstret` AS `GST`, sum((((`p`.`product_price` * `p`.`gstret`) / 100) + `p`.`product_price`)) AS `price_GS` FROM (`sales` `s` join `product` `p` on((`s`.`product_id` = `p`.`product_code`))) GROUP BY `s`.`product_id`, `s`.`users` ;

-- --------------------------------------------------------

--
-- Structure for view `sell_fach_info`
--
DROP TABLE IF EXISTS `sell_fach_info`;

DROP VIEW IF EXISTS `sell_fach_info`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sell_fach_info`  AS SELECT `sell`.`pro_code` AS `pro_code`, `sell`.`qt` AS `qt`, `sell`.`users` AS `users`, `sell`.`date` AS `date`, `sell`.`pos_no` AS `pos_no`, `p`.`product_name` AS `product_name`, `p`.`product_code` AS `product_code`, `p`.`gstret` AS `gstret`, `p`.`cess` AS `cess`, `p`.`product_price` AS `product_price`, `p`.`MRP` AS `MRP`, `p`.`igst` AS `igst` FROM (`sells_information_pos` `sell` join `product` `p` on((`sell`.`pro_code` = `p`.`product_code`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sell_pos_info_list`
--
DROP TABLE IF EXISTS `sell_pos_info_list`;

DROP VIEW IF EXISTS `sell_pos_info_list`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sell_pos_info_list`  AS SELECT `s`.`total_price` AS `total_price`, `s`.`given_rs` AS `given_rs`, `s`.`pos_no` AS `pos_no`, `s`.`pay` AS `pay`, `s`.`ph_no` AS `ph_no`, `s`.`gst_no` AS `gst_no`, `s`.`users` AS `users`, `c`.`gstin_no` AS `gstin_no`, `s`.`date` AS `date`, `s`.`time` AS `time`, `c`.`name` AS `name`, `c`.`company_name` AS `company_name`, `c`.`addr_comp` AS `addr_comp`, `c`.`email_id` AS `email_id`, `c`.`phone_no` AS `phone_no`, `c`.`city` AS `city`, `c`.`state` AS `state`, `c`.`postal_code` AS `postal_code`, `c`.`country` AS `country` FROM (`sell_info` `s` join `client_info` `c` on((`s`.`gst_no` = `c`.`gstin_no`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sup_in`
--
DROP TABLE IF EXISTS `sup_in`;

DROP VIEW IF EXISTS `sup_in`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sup_in`  AS SELECT `s`.`gstin` AS `gstin`, `s`.`payment` AS `payment`, `s`.`date` AS `date`, `s`.`code` AS `refercode`, `i`.`company_name` AS `company_name`, `i`.`email_id` AS `email_id`, `i`.`phone_no` AS `phone_no`, `i`.`city` AS `city`, `i`.`state` AS `state`, `i`.`country` AS `country`, `i`.`postal_code` AS `postal_code`, `i`.`name` AS `sup_name`, `i`.`addr_comp` AS `addr_comp` FROM (`suppro_purchese` `s` join `supplier_info` `i`) WHERE (`s`.`gstin` = `i`.`gstin_no`) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
