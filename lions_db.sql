-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2014 at 08:10 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lions_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lions_album`
--

CREATE TABLE IF NOT EXISTS `lions_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(250) NOT NULL,
  `album_cate` varchar(250) NOT NULL,
  `album_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_album`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_dictionary`
--

CREATE TABLE IF NOT EXISTS `lions_dictionary` (
  `contact_id` int(11) NOT NULL DEFAULT '0',
  `contact_name` varchar(250) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `contact_add` varchar(250) NOT NULL,
  `contact_type` varchar(250) NOT NULL,
  PRIMARY KEY (`contact_id`),
  UNIQUE KEY `contact_name` (`contact_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lions_dictionary`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_event`
--

CREATE TABLE IF NOT EXISTS `lions_event` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `event_name` varchar(250) NOT NULL,
  `event_date` date NOT NULL,
  `event_details` text NOT NULL,
  `event_img` varchar(250) NOT NULL,
  `event_uptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lions_event`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_fix_event`
--

CREATE TABLE IF NOT EXISTS `lions_fix_event` (
  `fix_event_id` int(11) NOT NULL AUTO_INCREMENT,
  `fix_event_name` varchar(250) NOT NULL,
  `fix_event_date` date NOT NULL,
  `fix_event_details` text NOT NULL,
  `fix_event_img` varchar(250) NOT NULL,
  PRIMARY KEY (`fix_event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_fix_event`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_login`
--

CREATE TABLE IF NOT EXISTS `lions_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_username` varchar(100) NOT NULL,
  `login_password` varchar(250) NOT NULL,
  `login_type` varchar(100) NOT NULL,
  `login_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`login_id`,`login_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_login`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_member`
--

CREATE TABLE IF NOT EXISTS `lions_member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(250) NOT NULL,
  `mem_lady` varchar(250) NOT NULL,
  `mem_dob` date NOT NULL,
  `mem_dom` date NOT NULL,
  `mem_occ` varchar(250) NOT NULL,
  `mem_add_off` varchar(250) NOT NULL,
  `mem_add_res` varchar(250) NOT NULL,
  `mem_ph_off` int(11) NOT NULL,
  `mem_ph_res` int(11) NOT NULL,
  `mem_mob` int(11) NOT NULL,
  `mem_email` varchar(250) NOT NULL,
  `mem_no` int(11) NOT NULL,
  `mem_join` date NOT NULL,
  `mem_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mem_img` varchar(250) NOT NULL,
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `mem_no` (`mem_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_member`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_mess`
--

CREATE TABLE IF NOT EXISTS `lions_mess` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `mess_mess` text NOT NULL,
  `mess_name` varchar(250) NOT NULL,
  `mess_cat` varchar(250) NOT NULL,
  `mess_img` varchar(250) NOT NULL,
  `mess_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_mess`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_shops`
--

CREATE TABLE IF NOT EXISTS `lions_shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(250) NOT NULL,
  `shop_add` varchar(250) NOT NULL,
  `shop_mob` varchar(250) NOT NULL,
  ` shop_email` varchar(250) NOT NULL,
  `shop_city` varchar(250) NOT NULL,
  `shop_cate` varchar(250) NOT NULL,
  `shop_detail` text NOT NULL,
  `shop_img` varchar(250) NOT NULL,
  `shop_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shop_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_shops`
--


-- --------------------------------------------------------

--
-- Table structure for table `lions_shops_category`
--

CREATE TABLE IF NOT EXISTS `lions_shops_category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(250) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lions_shops_category`
--

