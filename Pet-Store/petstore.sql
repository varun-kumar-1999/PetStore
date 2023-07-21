-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2019 at 01:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstore`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `sel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sel` ()  NO SQL
SELECT * FROM product ORDER BY product_name ASC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

DROP TABLE IF EXISTS `accessory`;
CREATE TABLE IF NOT EXISTS `accessory` (
  `acid` int(255) NOT NULL AUTO_INCREMENT,
  `acname` varchar(255) NOT NULL,
  `acimage` varchar(255) NOT NULL,
  `acprice` int(255) NOT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`acid`, `acname`, `acimage`, `acprice`) VALUES
(1, 'Dog Collar', 'accessory/1.png', 1000),
(2, 'Bow Tie', 'accessory/2.png', 150),
(3, 'Dog Leash', 'accessory/3.png', 190),
(4, 'Cat Scratch Post', 'accessory/4.png', 1500),
(5, 'Tuam Pet House', 'accessory/5.png', 5000),
(6, 'Two-teir Pet House', 'accessory/6.png', 4500),
(7, 'Sail Bird House', 'accessory/7.png', 2500),
(9, 'Rustic Wood Bird House', 'accessory/8.png', 3000),
(10, 'Bunny Arc Rabbit Hutch', 'accessory/9.png', 4000),
(11, 'Cat Teaser Wand', 'accessory/10.png', 435),
(12, 'Dog Chewer', 'accessory/11.png', 450);

--
-- Triggers `accessory`
--
DROP TRIGGER IF EXISTS `actrig`;
DELIMITER $$
CREATE TRIGGER `actrig` BEFORE INSERT ON `accessory` FOR EACH ROW INSERT INTO product VALUES(null,3,NEW.acname,NEW.acimage,NEW.acprice)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `acutrig`;
DELIMITER $$
CREATE TRIGGER `acutrig` AFTER UPDATE ON `accessory` FOR EACH ROW UPDATE product SET product.product_name=NEW.acname ,
product.price=NEW.acprice WHERE product.image=acimage AND product.cid=2
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(255) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) NOT NULL,
  `mailid` varchar(255) NOT NULL,
  `apassword` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `mailid`, `apassword`) VALUES
(1, 'myadmin', 'myadmin@gmail.com', 'myadmin');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `aid` int(255) NOT NULL AUTO_INCREMENT,
  `ani_name` varchar(255) NOT NULL,
  `ani_images` varchar(255) NOT NULL,
  `aprice` int(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`aid`, `ani_name`, `ani_images`, `aprice`) VALUES
(1, 'German Shephard', 'animal/1.png', 10000),
(2, 'Dobermann ', 'animal/2.png', 11000),
(3, 'Chihuahua', 'animal/3.png', 15000),
(4, 'Bulldog', 'animal/4.png', 20000),
(5, 'Labrador Retriever', 'animal/5.png', 9000),
(6, 'Golden Retiever', 'animal/6.png', 9000),
(7, 'Rottweiler', 'animal/7.png', 34000),
(8, 'Boxer', 'animal/8.png', 11000),
(9, 'Pug', 'animal/9.png', 16000),
(10, 'Shih Tzu', 'animal/10.png', 20000),
(11, 'Persian Cat', 'animal/11.png', 20000),
(12, 'Maine Coon', 'animal/12.png', 12000),
(13, 'Rag Doll', 'animal/13.png', 10000),
(14, 'Bengal Cat', 'animal/14.png', 15000),
(15, 'Siberian Cat', 'animal/15.png', 12000),
(16, 'Himalayan Cat', 'animal/16.png', 14000),
(17, 'British Longhair', 'animal/17.png', 19000),
(18, 'Gold Fish', 'animal/18.png', 30),
(19, 'Bloodfin Tetras', 'animal/19.png', 40),
(20, 'White Cloud', 'animal/20.png', 60),
(21, 'Galaxy Rasbora', 'animal/21.png', 100),
(22, 'Black Molly', 'animal/22.png', 50),
(23, 'Black Skirt Tetras', 'animal/23.png', 50),
(24, 'Kuhli Loach', 'animal/24.png', 70),
(25, 'Platies', 'animal/25.png', 60),
(26, 'Betta', 'animal/26.png', 45),
(27, 'Swordtails', 'animal/27.png', 65),
(28, 'Turtle', 'animal/28.png', 10000),
(29, 'African Grey Parrot', 'animal/29.png', 25000),
(30, 'Canary', 'animal/30.png', 700),
(31, 'Parrot', 'animal/31.png', 7000),
(32, 'Pegion', 'animal/32.png', 400),
(33, 'Lovebird', 'animal/33.png', 1200),
(34, 'Rabbit', 'animal/34.png', 2000),
(35, 'Hamster', 'animal/35.png', 800);

--
-- Triggers `animals`
--
DROP TRIGGER IF EXISTS `atrig`;
DELIMITER $$
CREATE TRIGGER `atrig` AFTER INSERT ON `animals` FOR EACH ROW INSERT INTO product VALUES(null,1,NEW.ani_name,NEW.ani_images,NEW.aprice)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `autrig`;
DELIMITER $$
CREATE TRIGGER `autrig` AFTER UPDATE ON `animals` FOR EACH ROW UPDATE product SET product.product_name=NEW.ani_name ,
product.price=NEW.aprice WHERE product.image=NEW.ani_images AND product.cid=1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `pname`, `quantity`, `price`) VALUES
(134, 'Cat Teaser Wand', 1, 435);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(4) NOT NULL AUTO_INCREMENT,
  `catname` varchar(20) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Animals'),
(2, 'Accessories'),
(3, 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `fid` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `fimage` varchar(255) NOT NULL,
  `fprice` int(255) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `fname`, `fimage`, `fprice`) VALUES
(1, 'Pedgree Small Dog Food', 'food/1.png', 1415),
(2, 'Pedigree Mixer Original ', 'food/2.png', 1354),
(3, 'Nutri Berries ', 'food/3.png', 790),
(4, 'Mixed Seed Bird Food', 'food/4.png', 900),
(5, 'Wardley Reptile Stick', 'food/5.png', 1200),
(6, 'Guppy Fish Food', 'food/6.png', 250),
(7, 'TeraBits Fish Food', 'food/7.png', 150),
(8, 'Forti-Diet Rabbit food', 'food/8.png', 300),
(9, 'Atlas Cat Food', 'food/9.png', 900);

--
-- Triggers `food`
--
DROP TRIGGER IF EXISTS `ftrig`;
DELIMITER $$
CREATE TRIGGER `ftrig` BEFORE INSERT ON `food` FOR EACH ROW INSERT INTO product VALUES(null,2,NEW.fname,NEW.fimage,NEW.fprice)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `futrig`;
DELIMITER $$
CREATE TRIGGER `futrig` AFTER UPDATE ON `food` FOR EACH ROW UPDATE product SET product.product_name=NEW.fname ,
product.price=NEW.fprice WHERE product.image=fimage AND product.cid=3
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(255) NOT NULL AUTO_INCREMENT,
  `cid` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `cid`, `product_name`, `image`, `price`) VALUES
(1, 1, 'German Shephard', 'animal/1.png', 10000),
(2, 1, 'Dobermann ', 'animal/2.png', 11000),
(3, 1, 'Chihuahua', 'animal/3.png', 15000),
(4, 1, 'Bulldog', 'animal/4.png', 20000),
(5, 1, 'Labrador Retriever', 'animal/5.png', 6000),
(6, 1, 'Golden Retreiver', 'animal/6.png', 9000),
(7, 1, 'Rottweiler', 'animal/7.png', 34000),
(8, 1, 'Boxer', 'animal/8.png', 11000),
(9, 1, 'Pug', 'animal/9.png', 16000),
(10, 1, 'Shih Tzu', 'animal/10.png', 20000),
(11, 1, 'Persian Cat', 'animal/11.png', 20000),
(12, 1, 'Maine Coon', 'animal/12.png', 12000),
(13, 1, 'Rag Doll', 'animal/13.png', 10000),
(14, 1, 'Bengal Cat', 'animal/14.png', 15000),
(15, 1, 'Siberian Cat', 'animal/15.png', 12000),
(16, 1, 'Himalayan Cat', 'animal/16.png', 14000),
(17, 1, 'British Longhair', 'animal/17.png', 19000),
(18, 1, 'Gold Fish', 'animal/18.png', 30),
(19, 1, 'Bloodfin Tetras', 'animal/19.png', 40),
(20, 1, 'White Cloud', 'animal/20.png', 60),
(21, 1, 'Galaxy Rasbora', 'animal/21.png', 100),
(22, 1, 'Black Molly', 'animal/22.png', 50),
(23, 1, 'Black Skirt Tetras', 'animal/23.png', 50),
(24, 1, 'Kuhli Loach', 'animal/24.png', 70),
(25, 1, 'Platies', 'animal/25.png', 60),
(26, 1, 'Betta', 'animal/26.png', 45),
(27, 1, 'Swordtails', 'animal/27.png', 65),
(28, 1, 'Turtle', 'animal/28.png', 10000),
(29, 1, 'African Grey Parrot', 'animal/29.png', 25000),
(30, 1, 'Canary', 'animal/30.png', 700),
(31, 1, 'Parrot', 'animal/31.png', 7000),
(32, 1, 'Pegion', 'animal/32.png', 400),
(33, 1, 'Lovebird', 'animal/33.png', 1200),
(34, 1, 'Rabbit', 'animal/34.png', 2000),
(35, 1, 'Hamster', 'animal/35.png', 800),
(36, 2, 'Pedgree Small Dog Food', 'food/1.png', 1415),
(37, 2, 'Pedigree Mixer Original', 'food/2.png', 1354),
(38, 2, 'Nutri Berries ', 'food/3.png', 780),
(39, 2, 'Mixed Seed Bird Food', 'food/4.png', 900),
(40, 2, 'Wardley Reptile Stick', 'food/5.png', 1200),
(41, 2, 'Guppy Fish Food', 'food/6.png', 250),
(42, 2, 'TeraBits Fish Food', 'food/7.png', 150),
(43, 2, 'Forti-Diet Rabbit food', 'food/8.png', 300),
(44, 2, 'Atlas Cat Food', 'food/9.png', 900),
(45, 3, 'Dog Collar', 'accessory/1.png', 200),
(46, 3, 'Bow Tie', 'accessory/2.png', 150),
(47, 3, 'Dog Leash', 'accessory/3.png', 190),
(48, 3, 'Cat Scratch Post', 'accessory/4.png', 1500),
(49, 3, 'Tuam Pet House', 'accessory/5.png', 5000),
(50, 3, 'Two-teir Pet House', 'accessory/6.png', 4500),
(51, 3, 'Sail Bird House', 'accessory/7.png', 2500),
(53, 3, 'Rustic Wood Bird House', 'accessory/8.png', 3000),
(54, 3, 'Bunny Arc Rabbit Hutch', 'accessory/9.png', 4000),
(55, 3, 'Cat Teaser Wand', 'accessory/10.png', 435),
(56, 3, 'Dog Chewer', 'accessory/11.png', 450);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `passwd`, `phone`) VALUES
(1, 'k', 'k@gmail.com', 's', 88),
(2, 'lee', 'lee@gmail.com', 'lee', 54338),
(3, 'test', 'test@gmail.com', 'test', 969696),
(4, 'nandini', 'nandini@gmail.com', 'nandini', 9999),
(5, 'ss', 'ss@gmail.com', 'ss', 1234),
(6, 'ksg', 'ksg@gmail.com', 'ksg', 233434534),
(7, 'manish', 'man@gmail.com', 'man', 111111),
(8, 'mani', 'm@gmail.com', 'mm', 111111),
(9, 'bruce', 'bruce@gmail.com', 'b', 11111);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
