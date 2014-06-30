-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2014 at 02:53 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(20) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryName`) VALUES
(101, 'Jerseys'),
(102, 'Shorts'),
(103, 'Socks'),
(104, 'Gloves'),
(105, 'Jackets'),
(106, 'Equipment');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `addressOne` varchar(100) NOT NULL,
  `addressTwo` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `firstName`, `surName`, `addressOne`, `addressTwo`, `state`, `city`, `postcode`, `country`) VALUES
(102, 'Riaz', 'Hasan', 'Unit 10', '26 Rowe Street,', 'NSW', 'Sydney', '2122', 'Australia'),
(103, 'Sheenu', 'Mittal', 'B-33', 'Gulshan', 'Other', 'Noida', '223', 'Azerbaijan'),
(104, 'Riaz', 'Salman', 'Unit 10', 'Gulshan', 'ACT', 'Sydney', '223', 'Argentina'),
(105, 'Mosleh', 'Udding', 'Carrington', 'Road', 'NSW', 'Sydney', '3265', 'Anguilla'),
(106, 'Riaz', 'Salman', 'Unit 10', 'Gulshan', 'NSW', 'Sydney', '2122', 'Australia'),
(107, 'Sonya', 'Khushi', 'Gulshan-e-Johar', 'Model Town', 'Other', 'Karachi', '2122', 'Afganistan');

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

CREATE TABLE IF NOT EXISTS `orderline` (
  `orderlinenumber` int(11) NOT NULL AUTO_INCREMENT,
  `productCode` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productDescription` varchar(50) NOT NULL,
  `productPrice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  PRIMARY KEY (`orderlinenumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`orderlinenumber`, `productCode`, `userid`, `productDescription`, `productPrice`, `quantity`, `subtotal`) VALUES
(2, 1007, 102, 'Arsenal Shorts', 101.2, 2, '202.4'),
(3, 1003, 103, 'Chelsea Jerseys', 99.8, 4, '399.2'),
(4, 1034, 103, 'Liverpool Equipments', 89.2, 2, '178.4'),
(5, 1012, 104, 'Manchester City Shorts', 85, 4, '340'),
(6, 1003, 105, 'Chelsea Jerseys', 99.8, 1, '99.8'),
(7, 1002, 106, 'Machester United Jerseys', 98.6, 6, '591.6'),
(8, 1009, 107, 'Chelsea Shorts', 99.8, 2, '199.6');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ordernumber` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`ordernumber`),
  KEY `fk_usrd` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordernumber`, `status`, `total`, `userid`) VALUES
(2, 'Delivered', 202.4, 102),
(3, 'Sent', 577.6, 103),
(4, 'Ordered', 340, 104),
(5, 'Ordered', 99.8, 105),
(6, 'Ordered', 591.6, 106),
(7, 'Ordered', 199.6, 107);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productCode` int(11) NOT NULL AUTO_INCREMENT,
  `productDescription` varchar(50) NOT NULL,
  `productPrice` double NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `productDescriptionTwo` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`productCode`),
  KEY `fk_catpro` (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1037 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productCode`, `productDescription`, `productPrice`, `categoryid`, `images`, `productDescriptionTwo`) VALUES
(1001, 'Arsenal Jerseys', 101.2, 101, 'images/arsenal.gif', 'Arsenal Jerseys are in demand! Arsenal are the longest residents in the top tier of English football, having been there since 1919. They have won all 27 of their major trophies in that time, including three domestic Doubles. They are also the only team since the 19th century to remain unbeaten throughout an entire top-flight league campaign.'),
(1002, 'Machester United Jerseys', 98.6, 101, 'images/manchesterunited.jpg', 'Manchester United are an English club in name and a global club in nature. They were the first English side to play in the European Cup and the first side to win it, and they are the only English side to have become world club champions.'),
(1003, 'Chelsea Jerseys', 99.8, 101, 'images/chelsea.jpg', 'Chelsea are the nouveau superpower of English football. They won 12 major trophies between 1997 and 2010, three times as many as they claimed in the 92 years before that. Most of those successes came after the club was purchased by the Russian billionaire Roman Abramovich in 2003, a move that kickstarted the wave of foreign ownership in the Premier League.'),
(1004, 'Liverpool Jerseys', 89.2, 101, 'images/liverpool.jpg', 'The story of Liverpool is a unique fusion of triumph and tragedy. They are English football''s most successful club with 40 trophies, yet towards the end of their rule of English football came two of the game''s biggest disasters at Heysel and Hillsborough. Both the good and bad have shaped the identity of a fiercely proud club.'),
(1005, 'Stoke Jerseys', 70, 101, 'images/stoke.jpg', 'Stoke are the most vintage piece of furniture at English football''s top table. They are the oldest club in the Premier League, having been founded in 1863, and the second oldest in all England after Notts County.'),
(1006, 'Manchester City Jerseys', 85, 101, 'images/manchestercity.jpg', 'Manchester City''s history can be summed up by one statistic: they are the only English champions to be relegated the following season. It is an apt reflection of a club who have lurched violently between the sublime and the ridiculous, and who have often seemed to have tragicomedy in their genes.'),
(1007, 'Arsenal Shorts', 101.2, 102, 'images/arsenal.gif', 'Arsenal Shorts are in demand! Arsenal are the longest residents in the top tier of English football, having been there since 1919. They have won all 27 of their major trophies in that time, including three domestic Doubles. They are also the only team since the 19th century to remain unbeaten throughout an entire top-flight league campaign.'),
(1008, 'Machester United Shorts', 98.6, 102, 'images/manchesterunited.jpg', 'Manchester United are an English club in name and a global club in nature. They were the first English side to play in the European Cup and the first side to win it, and they are the only English side to have become world club champions.'),
(1009, 'Chelsea Shorts', 99.8, 102, 'images/chelsea.jpg', 'Chelsea are the nouveau superpower of English football. They won 12 major trophies between 1997 and 2010, three times as many as they claimed in the 92 years before that. Most of those successes came after the club was purchased by the Russian billionaire Roman Abramovich in 2003, a move that kickstarted the wave of foreign ownership in the Premier League.'),
(1010, 'Liverpool Shorts', 89.2, 102, 'images/liverpool.jpg', 'The story of Liverpool is a unique fusion of triumph and tragedy. They are English football''s most successful club with 40 trophies, yet towards the end of their rule of English football came two of the game''s biggest disasters at Heysel and Hillsborough. Both the good and bad have shaped the identity of a fiercely proud club.'),
(1011, 'Stoke Shorts', 70, 102, 'images/stoke.jpg', 'Stoke are the most vintage piece of furniture at English football''s top table. They are the oldest club in the Premier League, having been founded in 1863, and the second oldest in all England after Notts County.'),
(1012, 'Manchester City Shorts', 85, 102, 'images/manchestercity.jpg', 'Manchester City''s history can be summed up by one statistic: they are the only English champions to be relegated the following season. It is an apt reflection of a club who have lurched violently between the sublime and the ridiculous, and who have often seemed to have tragicomedy in their genes.'),
(1013, 'Arsenal Socks', 101.2, 103, 'images/arsenal.gif', 'Arsenal Socks are in demand! Arsenal are the longest residents in the top tier of English football, having been there since 1919. They have won all 27 of their major trophies in that time, including three domestic Doubles. They are also the only team since the 19th century to remain unbeaten throughout an entire top-flight league campaign.'),
(1014, 'Machester United Socks', 98.6, 103, 'images/manchesterunited.jpg', 'Manchester United are an English club in name and a global club in nature. They were the first English side to play in the European Cup and the first side to win it, and they are the only English side to have become world club champions.'),
(1015, 'Chelsea Socks', 99.8, 103, 'images/chelsea.jpg', 'Chelsea are the nouveau superpower of English football. They won 12 major trophies between 1997 and 2010, three times as many as they claimed in the 92 years before that. Most of those successes came after the club was purchased by the Russian billionaire Roman Abramovich in 2003, a move that kickstarted the wave of foreign ownership in the Premier League.'),
(1016, 'Liverpool Socks', 89.2, 103, 'images/liverpool.jpg', 'The story of Liverpool is a unique fusion of triumph and tragedy. They are English football''s most successful club with 40 trophies, yet towards the end of their rule of English football came two of the game''s biggest disasters at Heysel and Hillsborough. Both the good and bad have shaped the identity of a fiercely proud club.'),
(1017, 'Stoke Socks', 70, 103, 'images/stoke.jpg', 'Stoke are the most vintage piece of furniture at English football''s top table. They are the oldest club in the Premier League, having been founded in 1863, and the second oldest in all England after Notts County.'),
(1018, 'Manchester City Socks', 85, 103, 'images/manchestercity.jpg', 'Manchester City''s history can be summed up by one statistic: they are the only English champions to be relegated the following season. It is an apt reflection of a club who have lurched violently between the sublime and the ridiculous, and who have often seemed to have tragicomedy in their genes.'),
(1019, 'Arsenal Gloves', 101.2, 104, 'images/arsenal.gif', 'Arsenal Gloves are in demand! Arsenal are the longest residents in the top tier of English football, having been there since 1919. They have won all 27 of their major trophies in that time, including three domestic Doubles. They are also the only team since the 19th century to remain unbeaten throughout an entire top-flight league campaign.'),
(1020, 'Machester United Gloves', 98.6, 104, 'images/manchesterunited.jpg', 'Manchester United are an English club in name and a global club in nature. They were the first English side to play in the European Cup and the first side to win it, and they are the only English side to have become world club champions.'),
(1021, 'Chelsea Gloves', 99.8, 104, 'images/chelsea.jpg', 'Chelsea are the nouveau superpower of English football. They won 12 major trophies between 1997 and 2010, three times as many as they claimed in the 92 years before that. Most of those successes came after the club was purchased by the Russian billionaire Roman Abramovich in 2003, a move that kickstarted the wave of foreign ownership in the Premier League.'),
(1022, 'Liverpool Gloves', 89.2, 104, 'images/liverpool.jpg', 'The story of Liverpool is a unique fusion of triumph and tragedy. They are English football''s most successful club with 40 trophies, yet towards the end of their rule of English football came two of the game''s biggest disasters at Heysel and Hillsborough. Both the good and bad have shaped the identity of a fiercely proud club.'),
(1023, 'Stoke Gloves', 70, 104, 'images/stoke.jpg', 'Stoke are the most vintage piece of furniture at English football''s top table. They are the oldest club in the Premier League, having been founded in 1863, and the second oldest in all England after Notts County.'),
(1024, 'Manchester City Gloves', 85, 104, 'images/manchestercity.jpg', 'Manchester City''s history can be summed up by one statistic: they are the only English champions to be relegated the following season. It is an apt reflection of a club who have lurched violently between the sublime and the ridiculous, and who have often seemed to have tragicomedy in their genes.'),
(1025, 'Arsenal Jackets', 101.2, 105, 'images/arsenal.gif', 'Arsenal Jackets are in demand! Arsenal are the longest residents in the top tier of English football, having been there since 1919. They have won all 27 of their major trophies in that time, including three domestic Doubles. They are also the only team since the 19th century to remain unbeaten throughout an entire top-flight league campaign.'),
(1026, 'Machester United Jackets', 98.6, 105, 'images/manchesterunited.jpg', 'Manchester United are an English club in name and a global club in nature. They were the first English side to play in the European Cup and the first side to win it, and they are the only English side to have become world club champions.'),
(1027, 'Chelsea Jackets', 99.8, 105, 'images/chelsea.jpg', 'Chelsea are the nouveau superpower of English football. They won 12 major trophies between 1997 and 2010, three times as many as they claimed in the 92 years before that. Most of those successes came after the club was purchased by the Russian billionaire Roman Abramovich in 2003, a move that kickstarted the wave of foreign ownership in the Premier League.'),
(1028, 'Liverpool Jackets', 89.2, 105, 'images/liverpool.jpg', 'The story of Liverpool is a unique fusion of triumph and tragedy. They are English football''s most successful club with 40 trophies, yet towards the end of their rule of English football came two of the game''s biggest disasters at Heysel and Hillsborough. Both the good and bad have shaped the identity of a fiercely proud club.'),
(1029, 'Stoke Jackets', 70, 105, 'images/stoke.jpg', 'Stoke are the most vintage piece of furniture at English football''s top table. They are the oldest club in the Premier League, having been founded in 1863, and the second oldest in all England after Notts County.'),
(1030, 'Manchester City Jackets', 85, 105, 'images/manchestercity.jpg', 'Manchester City''s history can be summed up by one statistic: they are the only English champions to be relegated the following season. It is an apt reflection of a club who have lurched violently between the sublime and the ridiculous, and who have often seemed to have tragicomedy in their genes.'),
(1031, 'Arsenal Equipments', 101.2, 106, 'images/arsenal.gif', 'Arsenal Equipments are in demand! Arsenal are the longest residents in the top tier of English football, having been there since 1919. They have won all 27 of their major trophies in that time, including three domestic Doubles. They are also the only team since the 19th century to remain unbeaten throughout an entire top-flight league campaign.'),
(1032, 'Machester United Equipments', 98.6, 106, 'images/manchesterunited.jpg', 'Manchester United are an English club in name and a global club in nature. They were the first English side to play in the European Cup and the first side to win it, and they are the only English side to have become world club champions.'),
(1033, 'Chelsea Equipments', 99.8, 106, 'images/chelsea.jpg', 'Chelsea are the nouveau superpower of English football. They won 12 major trophies between 1997 and 2010, three times as many as they claimed in the 92 years before that. Most of those successes came after the club was purchased by the Russian billionaire Roman Abramovich in 2003, a move that kickstarted the wave of foreign ownership in the Premier League.'),
(1034, 'Liverpool Equipments', 89.2, 106, 'images/liverpool.jpg', 'The story of Liverpool is a unique fusion of triumph and tragedy. They are English football''s most successful club with 40 trophies, yet towards the end of their rule of English football came two of the game''s biggest disasters at Heysel and Hillsborough. Both the good and bad have shaped the identity of a fiercely proud club.'),
(1035, 'Stoke Equipments', 70, 106, 'images/stoke.jpg', 'Stoke are the most vintage piece of furniture at English football''s top table. They are the oldest club in the Premier League, having been founded in 1863, and the second oldest in all England after Notts County.'),
(1036, 'Manchester City Equipments', 85, 106, 'images/manchestercity.jpg', 'Manchester City''s history can be summed up by one statistic: they are the only English champions to be relegated the following season. It is an apt reflection of a club who have lurched violently between the sublime and the ridiculous, and who have often seemed to have tragicomedy in their genes.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_usrd` FOREIGN KEY (`userid`) REFERENCES `customers` (`customerid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_catpro` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`categoryid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

