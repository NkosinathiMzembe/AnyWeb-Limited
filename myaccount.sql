-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 10:08 PM
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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `myaccount`
--

CREATE TABLE `myaccount` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `countryname` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `studId` int(11) NOT NULL,
  `creditcard` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myaccount`
--

INSERT INTO `myaccount` (`firstname`, `lastname`, `countryname`, `amount`, `studId`, `creditcard`) VALUES
('Jones', 'Jones', 'Ghana', 0, 123333, 12345),
('Jones', 'Jones', 'Ghana', 0, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('Jones', 'Jones', 'Ghana', 24, 123333, 12345),
('mylName', 'mylName', 'myCountry', 0, 0, 0),
('none', 'none', 'none', 0, 0, 0),
('', '', '', 0, 0, 0),
('KAMARA', 'KAMARA', 'Ghana', 111, 111, 111),
('Excel', 'Excel', 'Nigeria', 456, 22882021, 2147483647),
('Jones', 'Excel', 'Nigeria', 456, 22882021, 2147483647),
('Jones', 'kamara', 'Ghana', 111, 111, 11),
('Excel', 'nadzik', 'Togo', 2333, 3333, 23456),
('44', 'KAMARA', 'Ghana', 33, 33, 33),
('2', 'Dari', 'Ghana', 22, 22, 22),
('Jones', 'Dari', '22', 222, 22, 222),
('Jones', 'Dari', 'Togo', 222, 22, 222),
('lang', 'Land', 'Malawi', 333, 22, 123),
('Jones', 'Dari', 'Ghana', 222, 2222, 222),
('Kessie', 'Tess', 'Malawi', 222, 222, 222),
('22', 'Dari', '22', 222, 222, 2222),
('', '', '', 0, 0, 0),
('Jones', 'Tess', 'Malawi', 777, 777, 77),
('Jones', 'Tess', 'Malawi', 777, 777, 77),
('Tess', 'Dari', 'Malawi', 111, 111, 111),
('22', 'Tess', 'ghana', 111, 111, 111),
('Tess', 'Dari', 'Malawi', 222, 222, 222),
('Jones', 'Tess', 'ghana', 11, 11, 11),
('Tess', 'Tess', 'ghana', 67, 22882021, 67),
('Dari', 'Jones', 'ghana', 45, 22882021, 45),
('excel', 'Chukwu', 'Nigeria', 88686, 9999, 787878),
('Aweenagua', 'Francis', 'Guinea', 222, 22882021, 2147483647),
('', '', '', 0, 0, 0),
('KAMARA', 'Dari', 'Ghana', 33, 33, 33),
('KAMARA', 'Dari', 'Ghana', 33, 33, 33),
('', '', '', 0, 0, 0),
('KAMARA', 'Dari', 'Ghana', 33, 33, 33),
('', '', '', 0, 0, 0),
('', '', '', 0, 0, 0),
('', '', '', 0, 0, 0),
('KAMARA', 'Dari', 'Ghana', 33, 33, 33),
('', '', '', 0, 0, 0),
('Jones', 'KAMARA', 'Ghana', 222, 22, 222),
('Jones', 'KAMARA', 'Ghana', 222, 22, 222),
('Jones', 'Dari', 'Malawi', 11, 11, 11),
('Jones', 'Dari', 'Malawi', 33, 33, 33),
('Jones', 'Dari', 'Malawi', 33, 33, 33),
('', '', '', 0, 0, 0),
('Jones', 'Dari', 'Ghana', 111, 111, 111),
('', '', '', 0, 0, 0),
('GOOD', 'GOOD', 'ghana', 111, 1111, 111),
('', '', '', 0, 0, 0),
('GOOD', 'GOOD', 'ghana', 111, 1111, 111),
('GOOD', 'GOOD', 'ghana', 111, 1111, 111),
('GOOD', 'GOOD', 'ghana', 33, 33, 33),
('GOOD', 'GOOD', 'ghana', 584, 222, 548),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('10', '10', '10', 10, 10, 10),
('Jones', 'Dari', 'Ghana', 222, 222, 222),
('10', '10', '19', 222, 222, 222),
('10', '10', '1o', 11, 11, 11),
('Birigumah', 'Yaw', 'Benin', 60, 11552021, 2147483647),
('Birigumah', 'Yaw', 'Benin', 60, 11552021, 2147483647),
('Jones', 'Dari', 'Ghana', 22, 22, 22),
('22', 'Dari', 'Ghana', 22, 22, 22),
('22', '22', 'Ghana', 22, 22, 22),
('Jones', '22', 'Ghana', 22, 22, 22),
('Jones', '22', 'Ghana', 22, 22, 22),
('Jones', 'success', 'Ghana', 22, 22, 22),
('Jones', '3', 'Ghana', 22, 22, 22),
('Jones', '3', 'Ghana', 22, 22, 22),
('Jones', '3', 'Ghana', 11, 11, 11),
('Jones', 'Dari', '22', 22, 22, 22),
('Jones', 'Dari', '22', 22, 22, 22),
('Jones', '11', 'Ghana', 33, 33, 33),
('11', 'Dari', 'Ghana', 33, 33, 33),
('Jones', 'Dari', '11', 33, 33, 33),
('Jones', '10', 'Ghana', 88, 88, 88),
('Jones', '10', 'Ghana', 11, 11, 11),
('Jones', '10', 'Ghana', 11, 11, 11),
('Jones', '10', 'Ghana', 11, 11, 11),
('10', 'Dari', 'Ghana', 11, 11, 11),
('KAMARA', 'Dari', '11', 11, 11, 11),
('KAMARA', 'Dari', '11', 11, 11, 11),
('Jones', 'Dari', 'Ghana', 11, 0, 111),
('Jones', 'Dari', 'Ghana', 11, 0, 111),
('KAMARA', 'Dari', '11', 11, 11, 11),
('KAMARA', 'Dari', 'Ghana', 11, 11, 11),
('KAMARA', 'Dari', 'Ghana', 11, 0, 111),
('KAMARA', 'Dari', 'Ghana', 11, 0, 111),
('Jones', 'Dari', 'Ghana', 222, 222, 222),
('Jones', 'KAMARA', 'Ghana', 222, 222, 22),
('KAMARA', 'Dari', 'Ghana', 22, 22, 22),
('Jones', 'kamara', 'Ghana', 222, 222, 222),
('KAMARA', 'KAMARA', '222', 222, 222, 222),
('KAMARA', 'Dari', '11', 11, 11, 11),
('Jones', 'Dari', '11', 11, 11, 11),
('Jones', 'Dari', 'Ghana', 11, 11, 11),
('Jones', 'Dari', 'Ghana', 11, 11, 11),
('Jones', 'Dari', 'Ghana', 44, 444, 44);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
