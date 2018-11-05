-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2016 at 09:42 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `code` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `code`) VALUES
('admin', 'admin', 1);
-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `uname`, `email`, `password`, `code`) VALUES
('Sanil Rodrigues', 'sanilrods30', 'rods.sanil30@gmail.com', 'sanil123', 1),
('Kenneth Fargose', 'knfargose', 'kennethfargose@gmail.com', 'kenneth123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menuchinese`
--

CREATE TABLE IF NOT EXISTS `menuchinese` (
  `code` varchar(20) NOT NULL,
  `iname` varchar(50) NOT NULL,
  `priceveg` int(11) NOT NULL,
  `pricenonveg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuchinese`
--

INSERT INTO `menuchinese` (`code`, `iname`, `priceveg`, `pricenonveg`) VALUES
('c1', 'Fried Rice', 100, 120),
('c2', 'Shezwan Rice', 120, 140),
('c3', 'Triple Shezwan Rice', 150, 180),
('c4', 'Singapore Rice', 110, 120),
('c5', 'Fried Rice Spicy', 120, 140),
('c6', 'Noodles', 100, 120),
('c7', 'Shezwan Noodles', 120, 140),
('c8', 'Triple Shezwan Noodles', 150, 180),
('c9', 'Chilly', 130, 150),
('c10', 'Fried Rice', 100, 120);

-- --------------------------------------------------------

--
-- Table structure for table `menuindian`
--

CREATE TABLE IF NOT EXISTS `menuindian` (
  `code` varchar(20) NOT NULL,
  `iname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuindian`
--

INSERT INTO `menuindian` (`code`, `iname`, `price`, `type`) VALUES
('i1', 'Murgh Musallam', 200, 'nonveg'),
('i2', 'Chicken Handi', 250, 'nonveg'),
('i3', 'Chicken Maharaja', 350, 'nonveg'),
('i4', 'Butter Chicken', 320, 'nonveg'),
('i5', 'Chicken Malwani', 250, 'nonveg'),
('i6', 'Chicken Chilly', 200, 'nonveg'),
('i7', 'Aloo Matar', 190, 'veg'),
('i8', 'Bhindi Masala', 150, 'veg'),
('i9', 'Matar Panner', 190, 'veg'),
('i10', 'Chole bhature', 140, 'veg'),
('i11', 'Daal Puri', 140, 'veg'),
('i12', 'Gobhi matar', 150, 'veg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `code` varchar(20) NOT NULL,
  `iname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`code`, `iname`, `name`, `date`, `price`, `address`) VALUES
('c3', 'Triple Shezwan Rice', 'Sanil Amon Rodrigues', '2016-04-01', 180, 'Nallsopara[w]'),
('c1', 'Fried Rice', 'Kenneth Fargose', '2016-04-01', 100, 'Bhuigaon'),
('i10', 'Chole Bhature', 'Kenneth Fargose', '2016-04-01', 140, 'Bhuigaon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
