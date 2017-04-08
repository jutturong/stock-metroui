-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2017 at 03:35 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `category`) VALUES
(1, 'วัสดุโครงสร้าง'),
(2, 'ปูน'),
(3, 'เหล็ก'),
(4, 'หลังคา'),
(5, 'ไม้'),
(6, 'ท่อ'),
(7, 'กระเบื้องหลังคา'),
(8, 'ของตกแต่ง'),
(9, 'ตัวทำละลาย'),
(10, 'น้ำยา'),
(11, 'ของตกแต่ง');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `id_member` int(11) NOT NULL,
  `us` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ps` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `level` int(1) NOT NULL,
  `authentic` int(1) NOT NULL,
  `id_department` int(5) NOT NULL,
  `point` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `us`, `ps`, `name`, `lastname`, `level`, `authentic`, `id_department`, `point`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'jutturong', 'charoenrit', 1, 1, 1, 9000),
(2, 'client1', '81dc9bdb52d04dc20036dbd8313ed055', 'kanda', 'laster', 2, 1, 2, 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
