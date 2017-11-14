-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb3.biz.nf
-- Generation Time: Nov 14, 2017 at 10:18 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2160870_sharedproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `Projekta_ID` int(10) NOT NULL,
  `projekta_autors` varchar(500) NOT NULL,
  `nosaukums` varchar(600) NOT NULL,
  `Apraksts` text NOT NULL,
  `Izveidosanas_datums` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `item_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`Projekta_ID`, `projekta_autors`, `nosaukums`, `Apraksts`, `Izveidosanas_datums`, `status`, `item_order`) VALUES
(3, 'Jancuks', 'Kanbana delis', 'Sis ir mans projekts', '2017-11-14', '0', 1),
(4, 'Peteritis', 'Smeketaju biedeklis', 'Sis cista bus smeketaju biedeklis', '2017-11-14', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`Projekta_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `Projekta_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
