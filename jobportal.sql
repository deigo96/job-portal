-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 12:38 PM
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
  `aPassword` varchar(255) NOT NULL,
  `aImage` varchar(255) NOT NULL DEFAULT 'admin.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aId`, `aName`, `aDate`, `aEmail`, `aPassword`, `aImage`) VALUES
(1, 'Deigo Siahaan', '2020-11-26 20:17:24', 'deigosiahaan@gmail.com', 'admin96', 'deigo.jpg');

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
(35, 'Design', 1, '2021-05-27 09:44:46', 'staff.png', 1),
(36, 'Marketing', 1, '2021-06-09 05:19:04', 'staff1.png', 1),
(37, 'Operator', 1, '2021-06-09 05:19:51', 'staff2.png', 1),
(38, 'IT', 1, '2021-06-09 05:20:12', 'staff3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `modelId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `mId` int(11) NOT NULL,
  `mName` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `location` varchar(255) DEFAULT NULL,
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

INSERT INTO `models` (`mId`, `mName`, `price`, `location`, `mDate`, `mStatus`, `productId`, `adminId`, `mDp`, `mDescription`) VALUES
(24, 'PT.Lazada Indonesia', 9750000, 'Karawang', '2021-06-09 05:04:27', 1, 24, 1, 'lazada2.png', '-Mahir Desaign\r\n-Cakap dalam bekerja'),
(25, 'PT.Lazada Indonesia', 12000000, 'Jakarta', '2021-06-09 05:44:10', 1, 27, 1, 'lazada4.png', '-Paham Mobile Progamming'),
(26, 'PT.Construction Persada', 5400000, 'Lippo Cikarang', '2021-06-10 06:19:06', 1, 29, 1, 'construction.png', '-Minimal lulusan SMA/SMK\r\n-Sehat jasmani'),
(27, 'PT.Writerbay', 9480000, 'MM2100 Bekasi', '2021-06-10 06:28:30', 1, 26, 1, 'writerbay.png', '-Mahir menulis\r\n-S1 Sastra Bahasa'),
(28, 'PT.Telkom', 14500000, 'Lippo Cikarang', '2021-06-10 06:31:35', 1, 27, 1, 'telkom.png', '-S1 Sistem Informasi\r\n-Minimal  2 tahun pengalaman\r\n-Mahir Kotlin'),
(29, 'PT.Logmind', 15900000, 'EJIP', '2021-06-10 06:35:00', 1, 30, 1, 'logmind.png', '-S1 Sistem Informasi\r\n-Minimal pengalaman 5 tahun'),
(30, 'PT.New Haus', 12000000, 'Kawasan Hyundai Cikarang', '2021-06-10 06:36:12', 1, 31, 1, 'newhaus.png', '-S1 Marketing'),
(31, 'PT.CSC', 8500000, 'GIIC Deltamas', '2021-06-10 06:38:03', 1, 28, 1, 'csc.png', '-S1 marketing\r\n-Berpenampilan Menarik'),
(32, 'PT.Shopee', 12000000, 'Jakarta', '2021-06-11 09:44:18', 1, 27, 1, 'shopee.png', '-Minimal S1 Sistem Infomasi'),
(33, 'PT.Mattel', 8500000, 'Cikarang', '2021-06-25 11:30:38', 1, 25, 1, 'mattel-_200210103552-333.png', 'Designer');

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
  `pDp` varchar(200) DEFAULT NULL,
  `pCompany` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `pName`, `pStatus`, `pDate`, `categoryId`, `adminId`, `pDp`, `pCompany`) VALUES
(24, 'Desaign & Creative', 1, '2021-06-09 04:51:43', 35, 1, 'female1.png', NULL),
(25, 'Desaign & Development', 1, '2021-06-09 05:05:24', 35, 1, 'staff.png', NULL),
(26, 'Content Writer', 1, '2021-06-09 05:20:39', 35, 1, 'staff1.png', NULL),
(27, 'Mobile Application', 1, '2021-06-09 05:21:03', 38, 1, 'staff2.png', NULL),
(28, 'Sales & Marketing', 1, '2021-06-09 05:21:32', 36, 1, 'staff3.png', NULL),
(29, 'Construction', 1, '2021-06-09 05:21:53', 37, 1, 'staff4.png', NULL),
(30, 'Data Science', 1, '2021-06-09 05:22:41', 38, 1, 'staff5.png', NULL),
(31, 'Real Estate', 1, '2021-06-09 05:23:00', 36, 1, 'staff6.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT '-',
  `education` varchar(200) DEFAULT '-',
  `skills` varchar(255) DEFAULT '-',
  `password` varchar(100) NOT NULL,
  `images` varchar(200) DEFAULT 'user.png',
  `cv` varchar(200) NOT NULL DEFAULT '-',
  `date` date NOT NULL,
  `aId` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `name`, `email`, `address`, `education`, `skills`, `password`, `images`, `cv`, `date`, `aId`) VALUES
(3, 'deigo', 'deigosiahaan@gmail.com', 'Cikarang', 'd3 sistem informasi', 'php,js,html,css', '827ccb0eea8a706c4c34a16891f84e7b', 'deigo2.jpg', 'CV.docx', '2021-05-24', 1),
(4, 'voker', 'voker@gmail.com', 'cikarang', 'S1 Ilmu Hukum', 'pp', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV.docx', '2021-06-01', 1),
(5, 'anti', 'antimage@gmail.com', 'Beijing', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV.docx', '2021-06-06', 1),
(6, 'tinker', 'tinker@gmail.com', 'TOKYO', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV.docx', '2021-06-03', 1),
(7, 'pudge', 'pudge@gmail.com', 'Medan', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV.docx', '2021-06-01', 1),
(8, 'pudge', 'pudgehook@gmail.com', 'Los Angels', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV.docx', '2021-06-02', 1),
(9, 'medusa', 'medusa@gmail.com', 'Texas', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'female1.png', 'CV.docx', '2021-06-04', 1),
(10, 'wind', 'wr@gmail.com', 'Busan', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV.docx', '2021-06-07', 1),
(12, 'fasd', 'fasdsa@gmail.com', 'Makasar', '-', '-', '0cc175b9c0f1b6a831c399e269772661', 'user.png', 'CV.docx', '2021-06-08', 1),
(18, 'John F Kennedy', 'john@gmail.com', 'USA', '-', '-', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', '-', '2021-06-07', 1),
(19, 'John Lennon', 'lennon@gmail.com', 'London', 'S1 Ilmu Hukum', 'Mampu bekerja dalam tim', '827ccb0eea8a706c4c34a16891f84e7b', 'user.png', 'CV1.docx', '2021-06-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specs_admin_aId_fk` (`adminId`),
  ADD KEY `specs_models_mId_fk` (`modelId`),
  ADD KEY `specs_users_uId_fk` (`userId`),
  ADD KEY `specs_products_pId_fk` (`productId`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spec_values_specs_aId_fk` (`hits`),
  ADD KEY `adminId_2` (`adminId`);

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
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `specs_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_models_mId_fk` FOREIGN KEY (`modelId`) REFERENCES `models` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_products_pId_fk` FOREIGN KEY (`productId`) REFERENCES `products` (`pId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_users_uId_fk` FOREIGN KEY (`userId`) REFERENCES `users` (`uId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `spec_values_admin_aId_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spec_values_specs_aId_fk` FOREIGN KEY (`hits`) REFERENCES `invoices` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
