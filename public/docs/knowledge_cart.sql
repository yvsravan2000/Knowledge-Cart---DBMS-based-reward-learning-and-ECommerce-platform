-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 05:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(4) NOT NULL,
  `aemail` varchar(30) DEFAULT NULL,
  `aname` varchar(30) DEFAULT NULL,
  `apwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aemail`, `aname`, `apwd`) VALUES
(1, 'yvsravan2000@gmail.com', 'Y V SRAVAN KUMAR REDDY', '7674015867'),
(2, 'prem999@gmail.com', 'T V PREMCHAND', '99999'),
(3, 'akhil2000@gmail.com', 'V AKHIL', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(4) NOT NULL,
  `sno` int(4) NOT NULL,
  `pno` int(4) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `sno`, `pno`, `quantity`) VALUES
(37, 74, 16, 1),
(38, 74, 15, 1),
(39, 74, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `ono` int(4) NOT NULL,
  `pno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`ono`, `pno`) VALUES
(13, 17),
(14, 15),
(14, 16),
(15, 15),
(15, 16),
(15, 17),
(16, 15),
(16, 17),
(17, 15),
(17, 16);

-- --------------------------------------------------------

--
-- Table structure for table `order_student`
--

CREATE TABLE `order_student` (
  `ono` int(4) NOT NULL,
  `ocost` int(5) DEFAULT NULL,
  `sno` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_student`
--

INSERT INTO `order_student` (`ono`, `ocost`, `sno`) VALUES
(13, 10, 74),
(14, 20, 74),
(15, 70, 74),
(16, 25, 77),
(17, 20, 58);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pno` int(4) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcat` varchar(20) NOT NULL,
  `pspec` varchar(20) NOT NULL,
  `pbrnd` varchar(20) NOT NULL,
  `pcost` int(5) NOT NULL,
  `pqty` int(5) NOT NULL,
  `mno` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pno`, `pname`, `pcat`, `pspec`, `pbrnd`, `pcost`, `pqty`, `mno`) VALUES
(15, 'Classmate Blue Pen', 'Pen', 'Blue', 'Classmate', 10, 20, 14),
(16, 'Classmate Black Pen', 'Pen', 'Black', 'Classmate', 10, 30, 14),
(17, 'Classmate 15 CM Scale', 'Scale', '15cm', 'Classmate', 5, 15, 15),
(18, 'Classmate notebook', 'Notebook', 'Ruled', 'Classmate', 30, 40, 15);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qsno` int(10) NOT NULL,
  `qno` int(10) NOT NULL,
  `qsn` varchar(500) NOT NULL,
  `qcrtans` varchar(100) NOT NULL,
  `oone` varchar(100) NOT NULL,
  `otwo` varchar(100) NOT NULL,
  `qpos` int(4) DEFAULT NULL,
  `qneg` int(4) DEFAULT NULL,
  `qspwd` varchar(30) DEFAULT NULL,
  `aid` int(4) DEFAULT NULL,
  `sans` varchar(100) DEFAULT 'oone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qsno`, `qno`, `qsn`, `qcrtans`, `oone`, `otwo`, `qpos`, `qneg`, `qspwd`, `aid`, `sans`) VALUES
(1, 1, '1+2+3+4', 'oone', '10', '11', 2, 1, '1234', 2, 'otwo'),
(1, 2, '1-3+4+7', 'otwo', '10', '9', 2, 1, '1234', 2, 'oone'),
(1, 3, '7x8x9', 'oone', '504', '404', 2, 1, '1234', 2, 'otwo'),
(1, 4, '7-7-7x7', 'oone', '-49', '49', 2, 1, '1234', 2, 'otwo'),
(1, 5, '8/8/8x1000', 'otwo', '1250', '125', 2, 1, '1234', 2, 'otwo'),
(1, 6, '1+2-3+3-2', 'oone', '1', '2', 2, 1, '1234', 2, 'otwo'),
(1, 7, '1-2+3-4+5', 'otwo', '2', '3', 2, 1, '1234', 2, 'otwo'),
(1, 8, '1+2+3+4+5+6+7+8+9', 'oone', '45', '55', 2, 1, '1234', 2, 'otwo'),
(1, 9, '1+2+3+4-5+6+7+8+9', 'otwo', '40', '35', 2, 1, '1234', 2, 'otwo'),
(1, 10, '1x2x3x4x5x9', 'otwo', '1090', '1080', 2, 1, '1234', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `mno` int(4) NOT NULL,
  `mpwd` varchar(20) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `mloc` varchar(20) NOT NULL,
  `memail` varchar(30) NOT NULL,
  `mdno` varchar(10) NOT NULL,
  `mcolony` varchar(20) NOT NULL,
  `mcity` varchar(20) NOT NULL,
  `mzip` int(6) NOT NULL,
  `mbname` varchar(20) NOT NULL,
  `maccno` int(50) NOT NULL,
  `macntname` varchar(30) NOT NULL,
  `mifsc` varchar(20) NOT NULL,
  `mcredits` int(5) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`mno`, `mpwd`, `mname`, `mloc`, `memail`, `mdno`, `mcolony`, `mcity`, `mzip`, `mbname`, `maccno`, `macntname`, `mifsc`, `mcredits`) VALUES
(12, '5867', 'All India Traders', 'Bengaluru', 'sravanineone@gmail.com', '503', 'Central Jail Road', 'Bengaluru', 560035, 'PPB', 12345678, 'sravan', 'PYTM0123456', 100),
(14, '1234', 'Amrita Store', 'Bengaluru', 'amrita@gmail.com', '331', 'Revenue Colony', 'Bengaluru', 560035, 'SBI', 12344556, 'Amrita', '1234', 100),
(15, '1234', 'Ravi General Stores', 'Khammam', 'ravi@gmail.com', '2134', 'Hamsa Street', 'Khammam', 507003, 'AXIS Bank', 12312332, 'Ravi', 'AXS12345', 100),
(17, '', '', '', '', '', '', '', 0, '', 0, '', '', 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(4) NOT NULL,
  `spwd` varchar(20) NOT NULL,
  `sfn` text NOT NULL,
  `smn` text NOT NULL,
  `sln` text NOT NULL,
  `semail` varchar(30) NOT NULL,
  `sdob` date NOT NULL,
  `sgender` varchar(6) NOT NULL,
  `sdno` varchar(10) NOT NULL,
  `scolony` varchar(20) NOT NULL,
  `scity` varchar(20) NOT NULL,
  `szip` int(6) NOT NULL,
  `scredits` int(5) NOT NULL DEFAULT 500,
  `scprice` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `spwd`, `sfn`, `smn`, `sln`, `semail`, `sdob`, `sgender`, `sdno`, `scolony`, `scity`, `szip`, `scredits`, `scprice`) VALUES
(58, '7674015867', 'Y V SRAVAN', 'KUMAR', 'REDDY', 'sravan.reddy.99999@gmail.com', '2000-07-18', 'male', '1-808-1A', 'Revenue Colony', 'Kadiri', 515591, 482, 0),
(74, '99999', 'T V', 'PREM', 'CHAND', 'prem999@gmail.com', '1999-10-10', 'male', '525', 'Central Jail Road', 'Bengaluru', 560035, 412, 0),
(75, '123', 'Akhil', 'Kumar', 'Varma', 'akhil123@gmail.com', '2003-08-19', 'male', '075-e', 'Post colony', 'Ongole', 523242, 510, 0),
(77, '9876', 'ravi', 'chandru', 'reddy', 'ravi9876@gmail.com', '1999-09-11', 'male', '1-098-SA', 'Central Colony', 'Bengaluru', 560035, 483, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aemail` (`aemail`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`,`sno`,`pno`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`ono`,`pno`);

--
-- Indexes for table `order_student`
--
ALTER TABLE `order_student`
  ADD PRIMARY KEY (`ono`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pno`),
  ADD KEY `mno` (`mno`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qsno`,`qno`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`mno`),
  ADD UNIQUE KEY `UNIQUE` (`memail`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `UNIQUE` (`semail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_student`
--
ALTER TABLE `order_student`
  MODIFY `ono` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `mno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`ono`) REFERENCES `order_student` (`ono`);

--
-- Constraints for table `order_student`
--
ALTER TABLE `order_student`
  ADD CONSTRAINT `order_student_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `student` (`sno`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`mno`) REFERENCES `seller` (`mno`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
