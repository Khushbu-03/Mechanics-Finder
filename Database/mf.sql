-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 09:14 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `passowrd` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin_login`
--


-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `auto_name` varchar(20) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto`
--


-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE IF NOT EXISTS `bike` (
  `bike_name` varchar(20) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--


-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `bus_name` varchar(20) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--


-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `car_name` varchar(20) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES
('Khushbu Nakum', 'khushbu@gmail.com', 'hey there!'),


-- --------------------------------------------------------

--
-- Table structure for table `emergency_search_mechanic`
--

CREATE TABLE IF NOT EXISTS `emergency_search_mechanic` (
  `vehicle_name` varchar(20) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_search_mechanic`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `qos` varchar(15) NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`first_name`, `last_name`, `qos`, `suggestion`, `contact_no`, `email`) VALUES
('pili', 'koyani', 'average', 'no', '8866226901', 'koyanipriyanka@gmail.com'),
('bhumi', 'patel', 'good', 'no', '9033750846', 'bhumi@gmail.com'),
('khyati', 'parmar', 'very_good', 'no', '123456789', 'khyati@gmail.com'),
('priya', 'patel', 'excellent', 'no', '9428033079', 'priya@gmail.com'),
('parag', 'parmar', 'poor', 'no', '9428033079', 'parag@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL DEFAULT 'password',
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE IF NOT EXISTS `mechanic` (
  `mechanic_id` int(10) NOT NULL,
  `mechanic_name` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mechanic_image` varchar(10) NOT NULL,
  `service` varchar(10) NOT NULL,
  `time_hour` int(3) NOT NULL,
  PRIMARY KEY (`mechanic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanic`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `addr` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`first_name`, `last_name`, `mobile`, `email`, `password`, `username`, `age`, `dob`, `gender`, `addr`) VALUES
('khushbu', 'Nakum', '345290000', 'khushbu@gmail.com', '1234', 'nakumk', 20, '1998', 'f',  'Mckay Ave');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE IF NOT EXISTS `truck` (
  `truck_name` varchar(20) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

