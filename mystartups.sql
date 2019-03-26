-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2017 at 09:10 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystartups`
--
CREATE DATABASE IF NOT EXISTS `mystartups` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mystartups`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `name` varchar(15) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `color`) VALUES
('Art', 'lightblue'),
('Clothing', 'Purple'),
('Food', 'red'),
('Jewellery', 'darkyellow'),
('Other', 'Gray'),
('Photography', 'darkBlue');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `ID` int(8) NOT NULL COMMENT 'Startup ID',
  `itemID` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `category` varchar(10) NOT NULL DEFAULT 'Other',
  `Price` int(5) NOT NULL,
  `Discount` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`,`itemID`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `itemID`, `Name`, `Description`, `category`, `Price`, `Discount`) VALUES
(1, 1, 'Beef Burger', 'Burger with perfectly cooked beef patty and cheese slice.', 'Other', 500, NULL),
(1, 2, 'Chicken Noodles', 'Noodles served with spicy chicken filled with flavors', 'Other', 600, NULL),
(1, 3, 'Fried Chicken', 'Chicken Fried with crispy coating and served with ranch sauce.', 'Other', 300, NULL),
(2, 1, 'Farewell Shoot', 'Saying fare well to your friends or family? Book as for 5000 per hour.', 'Other', 5000, NULL),
(2, 2, 'Mehendi Photography', 'Get your fun and exciting mehndi moments covered by us', 'Other', 9000, NULL),
(2, 3, 'Birthday Photography', 'Get your birthday memories covered in cheapest rates.', 'Other', 8000, NULL),
(2, 4, 'Bridal Shower Photography', 'Lock your prewedding memories away with us.', 'Other', 6000, NULL),
(2, 5, 'Wedding Photography', 'We will make sure to capture your wedding moments in the perfect way.', 'Other', 20000, NULL),
(3, 1, 'Wedding Photography', 'Make your wedding day special with us.', 'Other', 30000, NULL),
(3, 2, 'Birthday Photography', 'Birthdays are even more memorable with us.', 'Other', 5000, NULL),
(3, 3, 'Solo Shoots', 'Get yourself photographed by us with style!', 'Other', 3000, NULL),
(3, 4, 'Food Photography', 'Do you sell food items? If yes, help yourself market your food by getting it captured by us.', 'Other', 1500, NULL),
(4, 1, 'Diamante Glasses', 'Available in two designs.', 'Other', 500, NULL),
(4, 2, 'SixSun', 'Set of 6 sunglasses.', 'Other', 1200, NULL),
(4, 3, 'Dior Glasses', 'Stunning Glasses for your not so Stunning Eyes.', 'Other', 2000, NULL),
(5, 1, 'Earings', 'Beautiful handmade earrings.', 'Other', 300, NULL),
(5, 2, 'Bangles', 'Handmade colorful Bangles', 'Other', 200, NULL),
(5, 3, 'Floral Bands', 'Hair Bands and tiaras made out of your favorite flowers.', 'Other', 400, NULL),
(6, 1, 'Quorma', 'Qourma made with hygienic ingredients to satisfy your health needs as well as your taste buds.', 'Other', 200, NULL),
(6, 2, 'Biryani', 'Biryani with meat of your choice and spices and taste of ours.', 'Other', 150, NULL),
(6, 3, 'Macaroni', 'Made with your choice of vegetables and meat.', 'Other', 400, NULL),
(7, 1, 'KitKat Cake', 'KitKat MnM\'s cake available in 2 pounds or more!', 'Other', 1200, NULL),
(7, 2, 'Drum Cake', 'Drum like cake which can be customized in design and colors for you.', 'Other', 1200, NULL),
(7, 3, 'Edible Image Cake', 'Send us pictures you would like on your cake.', 'Other', 1500, NULL),
(7, 4, 'Barbie Doll Cake', 'For your little ones!', 'Other', 1500, NULL),
(8, 1, 'Kids Wear 1', 'Can be customized for your favorite colors!', 'Other', 2000, NULL),
(8, 2, 'Kids Wear 2', 'Can be customized according to your choice!', 'Other', 1500, NULL),
(8, 3, 'Lehanga Choli', 'Price vary with customization.', 'Other', 6000, NULL),
(8, 4, 'Lehanga', 'Price vary according to customization.', 'Other', 5000, NULL),
(9, 1, 'Chicken Bread', 'Chicken filled fish shaped bread.', 'Other', 200, NULL),
(9, 2, 'Rosette Cake', 'Cake with rosette topping and inside of your choice!', 'Other', 500, NULL),
(9, 3, 'Fondant Cupcakes', '6 cupcakes with fondant topping of your choice!', 'Other', 300, NULL),
(9, 4, 'Cupcake Bouquet', '6 cupcakes of your choice designed to look like a bouquet for your loved ones!', 'Other', 350, NULL),
(9, 5, 'Fondant Cake', 'Fondant Cake with design of your choice!', 'Other', 700, NULL),
(9, 6, 'KitKat Cake', 'For a two pound kitkat cake topped with ganache and chocolate chips or mNms.', 'Other', 999, NULL),
(10, 1, 'Travel Pouch', 'Sephora Transparent Travel Pouches', 'Other', 750, NULL),
(10, 2, 'False Lashes', 'Pack of 5 pairs.', 'Other', 500, NULL),
(10, 3, 'Purse Package', 'Pack of four.', 'Other', 2000, NULL),
(10, 4, 'Clutch', 'Available in 5 different colors!', 'Other', 1100, NULL),
(11, 1, 'Fried Rice', 'Rice that can be customized according to your taste.', 'Other', 200, NULL),
(11, 2, 'Malai Boti', 'Mouth Watering Creamy Malai Boti', 'Other', 500, NULL),
(11, 3, 'Biryani', 'Hyderabadi Biryani to satisfy your taste buds.', 'Other', 100, NULL),
(11, 4, 'Nihari', 'Spicy Lucknow Nihari.', 'Other', 150, NULL),
(11, 5, 'Chicken Karahi', 'Chicken Karahi with lots of taste and spices.', 'Other', 200, NULL),
(11, 6, 'Mutton Karahi', 'Karahi with the choice of Rotis (Tandoor, Sheermaal, Taaftaan) you want.', 'Other', 400, NULL),
(12, 1, 'Gold/Silver Nikah Pen', 'Nikah Pens for your most special occasion.', 'Other', 200, NULL),
(12, 2, 'Peacock Nikah Pen', 'Designed with Peacock fur for your special occasion.', 'Other', 250, NULL),
(12, 3, 'Explosion Box', 'Explosion Box with pictures and wishes for birthdays and anniversaries.', 'Other', 500, NULL),
(12, 4, 'Baby Shower Props', 'Props for your special occasion.', 'Other', 500, NULL),
(12, 5, 'Birthday Package', 'Birthday package comprising of flowers, props, tags and more.', 'Other', 2000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `startupID` int(8) NOT NULL,
  `itemID` int(8) NOT NULL,
  `price` int(10) NOT NULL,
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` varchar(32) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'processing',
  `dateCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateModified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`orderID`),
  KEY `startupID` (`startupID`,`itemID`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`startupID`, `itemID`, `price`, `orderID`, `customerID`, `Address`, `status`, `dateCreated`, `dateModified`) VALUES
(2, 1, 0, 5, '1', '0', 'processing', '2017-12-06 19:59:04', '2017-12-06 20:00:30'),
(2, 1, 0, 6, '1', '0', 'processing', '2017-12-06 19:59:45', '2017-12-06 20:00:30'),
(2, 3, 0, 10, '100', '0', 'processing', '2017-12-06 20:04:48', '2017-12-06 20:04:48'),
(1, 1, 0, 11, '1', '0', 'processing', '2017-12-06 21:05:13', '2017-12-06 21:05:13'),
(1, 1, 0, 12, '1', '0', 'processing', '2017-12-06 21:05:33', '2017-12-06 21:05:33'),
(3, 1, 0, 13, '2', '0', 'processing', '2017-12-06 21:06:09', '2017-12-06 21:06:09'),
(3, 1, 0, 14, '2', '0', 'processing', '2017-12-06 21:06:30', '2017-12-06 21:06:30'),
(3, 1, 0, 15, '2', '0', 'processing', '2017-12-06 21:06:51', '2017-12-06 21:06:51'),
(2, 2, 0, 16, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:08:37', '2017-12-06 21:08:37'),
(2, 2, 0, 17, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:10:48', '2017-12-06 21:10:48'),
(2, 2, 0, 18, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:11:20', '2017-12-06 21:11:20'),
(2, 2, 0, 19, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:11:27', '2017-12-06 21:11:27'),
(2, 2, 0, 20, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:11:40', '2017-12-06 21:11:40'),
(2, 2, 0, 21, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:12:34', '2017-12-06 21:12:34'),
(2, 2, 0, 22, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:13:09', '2017-12-06 21:13:09'),
(2, 2, 0, 24, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:13:25', '2017-12-06 21:13:25'),
(2, 2, 0, 25, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:15:29', '2017-12-06 21:15:29'),
(2, 2, 0, 26, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:17:01', '2017-12-06 21:17:01'),
(2, 2, 0, 27, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:18:19', '2017-12-06 21:18:19'),
(2, 2, 0, 29, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:30:01', '2017-12-06 21:30:01'),
(2, 2, 0, 30, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:30:46', '2017-12-06 21:30:46'),
(2, 2, 0, 32, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 21:58:06', '2017-12-06 21:58:06'),
(2, 2, 0, 33, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:08:49', '2017-12-06 22:08:49'),
(2, 2, 0, 34, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:09:26', '2017-12-06 22:09:26'),
(2, 2, 0, 35, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:10:35', '2017-12-06 22:10:35'),
(2, 2, 0, 36, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:10:52', '2017-12-06 22:10:52'),
(2, 2, 0, 37, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:13:36', '2017-12-06 22:13:36'),
(2, 2, 0, 38, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:15:12', '2017-12-06 22:15:12'),
(2, 2, 0, 39, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:15:24', '2017-12-06 22:15:24'),
(2, 2, 0, 40, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:16:35', '2017-12-06 22:16:35'),
(2, 2, 0, 41, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:19:02', '2017-12-06 22:19:02'),
(2, 2, 0, 42, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:19:18', '2017-12-06 22:19:18'),
(2, 2, 0, 43, 'rehan@hotmail.com', '0', 'processing', '2017-12-06 22:19:42', '2017-12-06 22:19:42'),
(1, 1, 0, 45, '1', '0', 'processing', '2017-12-06 23:52:08', '2017-12-06 23:52:08'),
(3, 3, 0, 49, '3', '0', 'processing', '2017-12-06 23:55:30', '2017-12-06 23:55:30'),
(3, 3, 0, 51, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:01:41', '2017-12-07 00:01:41'),
(3, 3, 0, 52, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:02:54', '2017-12-07 00:02:54'),
(3, 3, 3, 53, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:04:22', '2017-12-07 00:04:22'),
(1, 1, 200, 54, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:07:08', '2017-12-07 00:07:08'),
(1, 1, 200, 56, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:11:27', '2017-12-07 00:11:27'),
(2, 1, 200, 57, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:11:33', '2017-12-07 00:11:33'),
(1, 2, 1000, 58, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:11:42', '2017-12-07 00:11:42'),
(3, 2, 1000, 59, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:11:48', '2017-12-07 00:11:48'),
(2, 3, 1500, 61, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:12:26', '2017-12-07 00:12:26'),
(3, 3, 1500, 63, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:12:41', '2017-12-07 00:12:41'),
(3, 1, 1500, 67, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:18:58', '2017-12-07 00:18:58'),
(3, 1, 1500, 68, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:19:46', '2017-12-07 00:19:46'),
(1, 2, 200, 69, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:42:43', '2017-12-07 00:42:43'),
(3, 4, 1500, 70, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:43:25', '2017-12-07 00:43:25'),
(1, 1, 200, 71, 'rehan@hotmail.com', '0', 'processing', '2017-12-07 00:46:05', '2017-12-07 00:46:05'),
(1, 1, 200, 72, 'azka@hotmail.com', '0', 'processing', '2017-12-10 17:29:19', '2017-12-10 17:29:19'),
(1, 1, 200, 73, 'azka@gmail.com', '0', 'processing', '2017-12-10 17:39:48', '2017-12-10 17:39:48'),
(1, 2, 200, 74, 'azka@gmail.com', '0', 'processing', '2017-12-10 17:40:19', '2017-12-10 17:40:19'),
(2, 3, 1000, 75, 'azka@hotmail.com', '0', 'processing', '2017-12-10 17:41:16', '2017-12-10 17:41:16'),
(3, 1, 1500, 76, 'azka@hotmail.com', '0', 'processing', '2017-12-10 17:41:35', '2017-12-10 17:41:35'),
(2, 1, 1000, 77, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:07:39', '2017-12-10 18:07:39'),
(2, 1, 1000, 78, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:12:38', '2017-12-10 18:12:38'),
(2, 1, 1000, 79, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:12:47', '2017-12-10 18:12:47'),
(2, 1, 1000, 80, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:13:06', '2017-12-10 18:13:06'),
(2, 1, 1000, 81, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:15:01', '2017-12-10 18:15:01'),
(1, 1, 200, 82, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:15:23', '2017-12-10 18:15:23'),
(1, 1, 200, 83, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:15:30', '2017-12-10 18:15:30'),
(1, 1, 200, 84, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:16:51', '2017-12-10 18:16:51'),
(2, 1, 1000, 85, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:18:06', '2017-12-10 18:18:06'),
(2, 1, 1000, 86, 'azka@hotmail.com', '0', 'processing', '2017-12-10 18:18:12', '2017-12-10 18:18:12'),
(2, 1, 1000, 87, 'azka@hotmail.com', '0', 'fail', '2017-12-10 18:18:23', '2017-12-10 20:50:25'),
(2, 1, 1000, 88, '', '0', 'processing', '2017-12-10 18:19:25', '2017-12-10 18:19:25'),
(2, 1, 1000, 89, 'azka@hotmail.com', '0', 'success', '2017-12-10 18:20:07', '2017-12-10 20:50:00'),
(1, 1, 200, 90, 'azka@hotmail.com', 'F-48', 'processing', '2017-12-11 00:45:50', '2017-12-11 00:45:50'),
(3, 4, 1500, 91, 'azka@hotmail.com', 'F-48', 'processing', '2017-12-11 00:46:18', '2017-12-11 00:46:18'),
(1, 2, 200, 92, 'azka@hotmail.com', 'F-48', 'processing', '2017-12-11 01:14:37', '2017-12-11 01:14:37'),
(1, 1, 200, 93, 'azka@hotmail.com', 'F-48', 'processing', '2017-12-11 19:04:48', '2017-12-11 19:04:48'),
(1, 1, 200, 94, 'me@gmail.com', 'F-48', 'fail', '2017-12-11 21:46:06', '2017-12-11 21:47:46'),
(2, 1, 1000, 95, 'me@gmail.com', '', 'processing', '2017-12-11 22:42:21', '2017-12-11 22:42:21'),
(1, 1, 200, 96, 'me@gmail.com', 'abc house', 'processing', '2017-12-11 22:43:12', '2017-12-11 22:43:12'),
(1, 1, 200, 97, 'has@hotmail.com', 'No address specified', 'processing', '2017-12-11 22:44:31', '2017-12-11 22:44:31'),
(7, 1, 1200, 98, 'rehan@hotmail.com', '123', 'processing', '2017-12-12 01:33:10', '2017-12-12 01:33:10'),
(3, 1, 30000, 99, 'rehan@hotmail.com', '123', 'processing', '2017-12-12 01:58:11', '2017-12-12 01:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

DROP TABLE IF EXISTS `orderstatus`;
CREATE TABLE IF NOT EXISTS `orderstatus` (
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`status`) VALUES
('fail'),
('processing'),
('success');

-- --------------------------------------------------------

--
-- Table structure for table `startups`
--

DROP TABLE IF EXISTS `startups`;
CREATE TABLE IF NOT EXISTS `startups` (
  `name` varchar(32) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'Other',
  `Tagline` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `sales` int(5) DEFAULT NULL,
  `id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startups`
--

INSERT INTO `startups` (`name`, `category`, `Tagline`, `description`, `sales`, `id`) VALUES
('Pink Fork', 'Food', 'Good food means good mood.', 'Are you ready for some delicious mouthwatering food? Now offering one of the most Taste fulfilling foods in Karachi brought to your footsteps\r\n\r\nOrder NOW!\r\n', NULL, 1),
('Sahrish Zakia Photography', 'Photography', 'Every picture has a story to tell.', 'ARE you ready for some delicious mouthwatering food? Now offering one of the most Taste fulfilling foods in Karachi brought to your footsteps\r\n\r\nOrder NOW!\r\n', NULL, 2),
('Rabbiah Paracha', 'Photography', 'Every picture has a story to tell.', 'Rabbiah Paracha - Photography aims to capture your moments perfectly in the most reasonable rates!', NULL, 3),
('Eyewatch', 'Other', 'We sell stuff.', 'We sell accessories for your eyes', NULL, 4),
('Ancilla Glossarium', 'Jewellery', 'Every piece of jewelry tells a story.', 'Ancilla glossarium is an online jewellery, accessories & dresses shop from where you can purchase handmade jewellery and stylish dresses.', NULL, 5),
('K\'\'s Salt and Spices', 'Food', 'Good food means good mood.', 'We strive to provide you the yummiest food with thought of Total Quality Management (TQM) to satisfy your never ending cravings.', NULL, 6),
('Cake your Memories!', 'Food', 'Good food means good mood.', 'At Syra Anwer - Bakers & Event Planner we thrive for perfectness. Try our services and get amazed!', NULL, 7),
('Apparel by Hafsa Aslam', 'Clothing', 'Life isn\'t perfect but your outfit can be.', 'Apparel By Hafsa is an upscale clothing boutique. We provide you stitched dresses in line with the latest fashion trend', NULL, 8),
('BonBon Bakery', 'Food', 'Good food means good mood.', 'Satisfy your taste buds with home made delicious cakes.', 0, 9),
('Make a Wish', 'Clothing', 'Life isn\'t perfect but your outfit can be.', 'Kids Clothing, Makeup, Bags, Home Decor or Kitchen Essentials? \r\nEverything is one click away.', NULL, 10),
('Frozen Deals', 'Food', 'Good food means good mood.', 'Home made ready to eat deals in reasonable rates.', NULL, 11),
('Art Gallery', 'Art', 'The earth without art is just eh.', 'Customized, handmade gifts for your loved ones.', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` varchar(32) DEFAULT NULL,
  `address` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='A Table for all users.';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `contact`, `address`) VALUES
('Azka', 'azka@gmail.com', '123456', NULL, NULL),
('Not Azka', 'azka@hotmail.com', 'abc', '000', 'fjbdj'),
('Hassaan', 'has@hotmail.com', '2', NULL, NULL),
('2323', 'hassaan@hotmail.com', 'abcd', NULL, NULL),
('Me Me', 'me@gmail.com', '123', '222', 'abc house'),
('rehan ahmed', 'rehan@hotmail.com', '123', '222', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `startups` (`id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`name`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status`) REFERENCES `orderstatus` (`status`);

--
-- Constraints for table `startups`
--
ALTER TABLE `startups`
  ADD CONSTRAINT `startups_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
