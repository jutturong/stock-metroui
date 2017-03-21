-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2017 at 03:59 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.28

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `us`, `ps`, `name`, `lastname`, `level`, `authentic`, `id_department`, `point`) VALUES
(1, 'admin', '57229f658a1070d6b48086392fd24764', 'jutturong', 'charoenrit', 1, 1, 1, 9000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
