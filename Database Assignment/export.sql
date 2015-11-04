-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 07:08 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignmenttable`
--

CREATE TABLE IF NOT EXISTS `assignmenttable` (
  `Id` int(11) NOT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `Content` varchar(45) DEFAULT NULL,
  `FormatTitle` varchar(45) DEFAULT NULL,
  `FormatContent` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignmenttable`
--

INSERT INTO `assignmenttable` (`Id`, `Title`, `Content`, `FormatTitle`, `FormatContent`) VALUES
(19, 'testing', 'testing this filessss', 'testing', 'testing this file'),
(26, 'Test', 'Test 1', 'Test 1', 'Test 1 1'),
(27, 'sd', 's', 'sdf', 'sf'),
(28, 'Title  1', 'Content 1', 'Title  12', 'Content 12'),
(29, 'iuius', 'sdsljdsd', 'iuiu', 'sdsljds'),
(30, 'sdsds', 'sdsdssdd', 'sdsd', 'sdsdssdd'),
(31, 'efs', 'df', 'efs', 'dfs'),
(32, 'asdf8787', 'Vdfkldgldkgdg', 'asdf8787', 'Vdfkldgldkgdg'),
(33, 'Tu', 's', 'sdsd', 'dddddddddddddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignmenttable`
--
ALTER TABLE `assignmenttable`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignmenttable`
--
ALTER TABLE `assignmenttable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
