-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 05:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aId` int(11) NOT NULL,
  `aName` varchar(255) NOT NULL,
  `aDate` datetime NOT NULL,
  `aEmail` varchar(255) NOT NULL,
  `aPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aId`, `aName`, `aDate`, `aEmail`, `aPassword`) VALUES
(1, 'deigo', '2020-11-26 20:17:24', 'deigosiahaan@gmail.com', 'admin'),
(2, 'ell', '2020-12-04 16:50:04', 'sitilestari@gmail.com', 'admin'),
(3, 'agus', '2020-12-04 16:50:19', 'agusprayitno@gmail.com', 'admin'),
(4, 'rizky', '2020-12-04 16:50:19', 'rizkymasta@gmail.com', 'admin'),
(5, 'christin', '2020-12-04 16:51:47', 'christin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cId` int(11) NOT NULL,
  `cName` varchar(200) NOT NULL,
  `cStatus` int(11) NOT NULL,
  `cDate` datetime NOT NULL,
  `cDp` varchar(200) NOT NULL,
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cId`, `cName`, `cStatus`, `cDate`, `cDp`, `adminId`) VALUES
(27, 'Samsung', 1, '2020-12-12 04:56:54', 'samsunglogo.png', 1),
(28, 'Apple', 1, '2020-12-12 04:57:16', 'iphonelogo.png', 1),
(29, 'Vivo', 1, '2020-12-12 04:57:35', 'vivologo.png', 1),
(30, 'Asus', 1, '2020-12-12 04:58:02', 'asuslogo.png', 1),
(31, 'Xiaomi', 1, '2020-12-12 04:58:25', 'xiamilogo.png', 1),
(32, 'Huawei', 1, '2020-12-12 04:58:34', 'huaweilogo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `mId` int(11) NOT NULL,
  `mName` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `mDate` datetime NOT NULL,
  `mStatus` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `mDp` varchar(200) NOT NULL,
  `mDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`mId`, `mName`, `price`, `mDate`, `mStatus`, `productId`, `adminId`, `mDp`, `mDescription`) VALUES
(14, '8 RAM', 1099.99, '2020-12-12 05:10:20', 1, 8, 1, 'sgalaxy_x1.jpg', 'Samsung Galaxy X (RAM 8 GB)'),
(15, '32 GB', 1299.99, '2020-12-12 05:12:23', 1, 14, 1, 'iphone121.jpg', 'Iphone 12 (RAM 32 GB)'),
(16, '32 GB', 1289.99, '2020-12-12 05:13:08', 1, 13, 1, 'iphone_X.jpg', 'Iphone X (RAM 32 GB)'),
(17, '16 GB', 1890.99, '2020-12-12 05:13:46', 1, 9, 1, 'sfold1.jpg', 'Samsung Fold (RAM 16 GB)'),
(18, '8 RAM', 1099.99, '2020-12-12 05:10:20', 1, 8, 1, 'sgalaxy_x1.jpg', 'Samsung Galaxy X (RAM 8 GB)'),
(19, '32 GB', 1289.99, '2020-12-12 05:13:08', 1, 13, 1, 'iphone_X.jpg', 'Iphone X (RAM 32 GB)'),
(20, '32 GB', 1299.99, '2020-12-12 05:12:23', 1, 14, 1, 'iphone121.jpg', 'Iphone 12 (RAM 32 GB)'),
(21, '16 GB', 1890.99, '2020-12-12 05:13:46', 1, 9, 1, 'sfold1.jpg', 'Samsung Fold (RAM 16 GB)');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `pName` varchar(200) NOT NULL,
  `pStatus` int(11) NOT NULL,
  `pDate` datetime NOT NULL,
  `categoryId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `pDp` varchar(200) NOT NULL,
  `pCompany` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `pName`, `pStatus`, `pDate`, `categoryId`, `adminId`, `pDp`, `pCompany`) VALUES
(8, 'Samsung Galaxy x', 1, '2020-12-12 05:00:50', 27, 1, 'sgalaxy_x.jpg', 'samsung'),
(9, 'Samsung Galaxy Fold', 1, '2020-12-12 05:01:57', 27, 1, 'sfold.jpg', 'samsung'),
(10, 'Iphone Xr', 1, '2020-12-12 05:03:09', 28, 1, 'iphone_xr.jpg', 'apple'),
(11, 'Samsung Galaxy A8', 1, '2020-12-12 05:04:17', 27, 1, 'sa8.jpg', 'samsung'),
(12, 'Samsung Galaxy S20', 1, '2020-12-12 05:04:40', 27, 1, 'sa201.jpg', 'samsung'),
(13, 'Iphone X', 1, '2020-12-12 05:06:06', 28, 1, 'iphone_X.jpg', 'apple'),
(14, 'Iphone 12', 1, '2020-12-12 05:06:21', 28, 1, 'iphone12.jpg', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `spId` int(11) NOT NULL,
  `spName` varchar(200) NOT NULL,
  `spDate` datetime NOT NULL,
  `spStatus` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `modelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spec_values`
--

CREATE TABLE `spec_values` (
  `spvId` int(11) NOT NULL,
  `spvName` varchar(100) NOT NULL,
  `specId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `spvStatus` int(11) NOT NULL,
  `spvDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `first_name`, `last_name`, `email`, `password`, `link`, `date`, `status`) VALUES
(1, 'jonathan', 'siahaan', 'deigosiahaan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'asdasdasdasd', '2020-12-08 17:19:20', 0),
(2, 'deigo', 'siahaan', 'brengsek975@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'asdasda', '2020-12-07 17:19:20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cId`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`mId`),
  ADD KEY `adminId` (`adminId`),
  ADD KEY `models_products_pId_fk` (`productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`),
  ADD KEY `adminId` (`adminId`),
  ADD KEY `adminId_2` (`adminId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`spId`),
  ADD KEY `specs_admin_aId_fk` (`adminId`),
  ADD KEY `specs_models_mId_fk` (`modelId`);

--
-- Indexes for table `spec_values`
--
ALTER TABLE `spec_values`
  ADD PRIMARY KEY (`spvId`),
  ADD KEY `adminId` (`adminId`),
  ADD KEY `spec_values_specs_aId_fk` (`specId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `spec_values`
--
ALTER TABLE `spec_values`
  MODIFY `spvId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`),
  ADD CONSTRAINT `models_products_pId_fk` FOREIGN KEY (`productId`) REFERENCES `products` (`pId`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_categories_cId_fk` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`cId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specs`
--
ALTER TABLE `specs`
  ADD CONSTRAINT `specs_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_models_mId_fk` FOREIGN KEY (`modelId`) REFERENCES `models` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spec_values`
--
ALTER TABLE `spec_values`
  ADD CONSTRAINT `spec_values_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spec_values_specs_aId_fk` FOREIGN KEY (`specId`) REFERENCES `specs` (`spId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
