-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 06:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tibet`
--

-- --------------------------------------------------------

--
-- Table structure for table `associates`
--

CREATE TABLE `associates` (
  `id` int(10) UNSIGNED NOT NULL,
  `cname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associates`
--

INSERT INTO `associates` (`id`, `cname`, `address`, `phone`, `email`, `website`, `created_at`, `updated_at`, `phone2`) VALUES
(1, 'Samten Memorial Education Academy', 'Mhepi, Kathmandu', 4354796, 'nischal@gmail.com', 'www.grafias.com', '2018-04-10 18:15:00', '2018-04-11 05:44:48', '9849581872');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `proname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Mobile', '2018-05-11 03:25:08', '2018-05-11 03:25:08', 'mobile'),
(2, 'Laptop', '2018-05-11 03:27:20', '2018-05-11 03:27:20', 'laptop'),
(3, 'Printer', '2018-05-11 03:27:42', '2018-05-11 03:27:42', 'printer'),
(4, 'Handicraft Papers', '2018-05-11 04:32:02', '2018-05-11 04:32:02', 'handicraft-papers'),
(5, 'Tools', '2018-05-11 04:37:53', '2018-05-11 06:34:56', 'Tools');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'not mention',
  `product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'not mention',
  `inquiry` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `subscribe` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `Subject`, `company`, `category`, `product`, `inquiry`, `created_at`, `updated_at`, `seen`, `subscribe`, `order`) VALUES
(1, 'Dahoud', 9849581872, 'dahoud@gmail.com', 'meet you', 'alert overseas', 'not mention', 'not mention', 'aaa', '2018-05-11 05:17:40', '2018-05-11 05:17:45', '1', 1, 1),
(2, 'Rose', 9849581872, 'rose@yahoo.com', 'hello', 'hello', 'not mention', 'not mention', 'hello', '2018-05-11 05:34:47', '2018-05-11 05:34:57', '1', 1, 1),
(3, NULL, NULL, 'nischal@gmail.com', NULL, NULL, 'not mention', 'not mention', NULL, '2018-05-11 05:37:40', '2018-05-11 05:37:50', '1', 1, 0),
(4, 'Justin', 9849581872, 'julian@outlook.com', 'jusitn', 'jsdklfj', 'not mention', 'not mention', 'dsjfklsd', '2018-05-11 06:38:20', '2018-05-11 06:38:26', '1', 1, 1),
(5, 'Jason Marz', 9849581872, 'marz@yahoo.com', 'helo', 'helo', 'not mention', 'not mention', 'helo', '2018-05-12 23:06:16', '2018-05-12 23:06:45', '1', 1, 1),
(6, 'Iris Butler', 1234567890, 'voxuruf@mailinator.com', 'Autem laborum Consequatur quis sint sed aut praesentium', 'Travis Montoya Inc', '2', 'dell-i3', 'Quod cupidatat incididunt veniam consequat Doloremque aute quae ut illo doloremque perspiciatis', '2018-05-13 05:34:20', '2018-05-13 05:34:43', '1', 0, 0),
(7, 'Christian Riddle', 1234567890, 'jazuzizyw@mailinator.com', 'Voluptate in laudantium in in aut rerum est eu nesciunt est rerum cum sapiente dolor esse quaerat', 'Whitley and Tate Traders', '2', 'dell-i3', 'Ut ab veniam voluptatem animi sint sequi reprehenderit ullam excepturi nisi minima beatae et do aut nemo', '2018-05-13 05:35:18', '2018-05-13 05:35:26', '1', 0, 0),
(8, 'Nischal', 9849581872, 'dahoud@gmail.com', 'meet you', 'alert overseas', '5', 'tool-v1', 'fsdfs', '2018-05-13 06:15:45', '2018-05-13 06:15:53', '1', 0, 0),
(9, 'Lenovo', 9849581872, 'nischal@gmail.com', 'meet you', 'alert overseas', 'not mention', 'not mention', 'sdfsd', '2018-05-13 06:16:41', '2018-05-13 06:16:49', '1', 1, 1),
(10, NULL, NULL, 'support@grafiastech.com', NULL, NULL, 'not mention', 'not mention', NULL, '2018-05-13 06:17:07', '2018-05-13 06:17:30', '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `slug`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Terms  Conditions', 'Terms-Conditions', '<p>Terms and Condition:&nbsp;sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\nipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>', '2018-04-08 05:46:38', '2018-04-08 23:25:39'),
(2, 'Privacy Policy', 'Privacy-Policy', '<p>Privacy Policy : sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\nipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>', '2018-04-08 23:14:52', '2018-04-08 23:14:52'),
(3, 'Delivery Information', 'Delivery-Information', '<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\nipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>', '2018-04-08 23:26:17', '2018-04-08 23:26:17'),
(4, 'Management system', 'Management-system', '<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur.&nbsp;ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur.&nbsp;</p>', '2018-04-18 04:37:29', '2018-04-18 04:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1538870191.jpg', '2018-04-08 02:52:58', '2018-10-07 06:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Christian-Pulisic-1920x1080.jpg', 'https://bitbucket.org/aaaaa', '2018-04-11 03:53:17', '2018-04-11 03:53:17'),
(2, 'IMG_20160314_202918.png', 'https://www.youtube.com/watch?v=cQ0wwkSJ3uI', '2018-04-11 03:57:25', '2018-04-11 03:57:25'),
(6, 'borussia-dortmund-4k-bundesliga-bvb-logo-besthqwallpapers.com-1920x1440.jpg', 'https://bitbucket.org/aaaaa', '2018-04-15 21:29:43', '2018-04-15 21:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `social` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `About` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customproduct` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `social`, `About`, `created_at`, `updated_at`, `customproduct`) VALUES
(1, '<p><ins><strong>Social:</strong></ins></p>\r\n\r\n<p>Our Social Contributions Demonstrating a well-developed sense of corporate social responsibility, Tibetan Handicraft and Paper Pvt. Ltd. has taken up the following initiatives: We educate the children of our Tibetan Handicraft factory workers for free at Samten Memorial Educational Academy. We also provide scholarship opportunities for other students in need. There are currently 410 students at the school and 24 staff employed full time In 2010 we donated Rs. 475,000 for the construction of a road to Barahibise Thingsang, Bigu, and Chilangkha Dolakha Districts, and in 2015 we donated again, Rs. 232,155, to maintain the road. Over 30,000 people from several villages including Bigu, Alamphu, Chilangkha, and Khopa Chaggu benefit from the increased access to markets and other infrastructure that the road provides. The new road supports marketing of stone slates from Alamphu and organic potatoes and vegetables from Bigu After the earthquake that shook Nepal in 2015, Tibetan Handicraft &amp; Paper employees lost homes and resources. With the help of one German Client and associated NGO Himalayan Region Welfare, we provided Rs. 33,000 to each of our 91 employees in Kathmandu to get roofs over their heads, buy food and take care of their families A variety of top-quality lokta paper products A Broad Base Tibetan Handicraft &amp; Paper supports community-based development: it has purchased shares in local enterprises including community forest users&rsquo; groups Dolkha Sindhu Multipurpose Pvt. Ltd. and Everest Gateway Pvt. Ltd.. We sign annual purchase agreements with each organization. Currently over 1000 members around Nepal benefit directly from the purchasing of paper from communities where it is produced as do our nearly 100 employees at the Kathmandu factory. We provide fair living wages, and working conditions are excellent for all employees. We hire people who are drawn from a cross-section of Nepal&rsquo;s many ethnic groups, giving special consideration to the poorest. As the founders of the company are Sherpa, we do our best to highlight Sherpa/Tibetan culture by selling products like prayer flags, incense, singing bowls, and thingsa (miniature cymbals). We print paper with typical icons like the bodhi leaf of the peepul tree (Prince Siddhartha Gautama, the Buddha was enlightened under a peepul tree), the lotus, mandalas, and the all-seeing eyes of Lord Buddha. We also promote papermaking by conducting training programmes in Nepal and as far abroad as America and orphanages in Tibet. To attain environmentally sound practices, we use vegetable dyes and dip-dye processes that absorb all chemical dyes, which are ozone and chlorine-free. Each lokta plant, whose bark is the base for our products, has the astonishing ability to send up many new stems after being harvested for production. A few years after harvest, what was one lokta plant will be five or six new plants. In addition, waste is minimal since all rejected products are recycled. The company is now doing research into the use of agricultural waste, including banana leaves, cardamom stalks and rice husks for paper production. We are also exploring the possibility of using other plants like hemp and mitsumata (Japanese for Edgeworthia chrysantha) to make our paper.</p>', '<p><ins><strong>About Us:</strong></ins></p>\r\n\r\n<p><cite>&nbsp;Contributions Demonstrating a well-developed sense of corporate social responsibility, Tibetan Handicraft and Paper Pvt. Ltd. has taken up the following initiatives: We educate the children of our Tibetan Handicraft factory workers for free at Samten Memorial Educational Academy. We also provide scholarship opportunities for other students in need. There are currently 410 students at the school and 24 staff employed full time In 2010 we donated Rs. 475,000 for the construction of a road to Barahibise Thingsang, Bigu, and Chilangkha Dolakha Districts, and in 2015 we donated again, Rs. 232,155, to maintain the road. Over 30,000 people from several villages including Bigu, Alamphu, Chilangkha, and Khopa Chaggu benefit from the increased access to markets and other infrastructure that the road provides. The new road supports marketing of stone slates from Alamphu and organic potatoes and vegetables from Bigu After the earthquake that shook Nepal in 2015, Tibetan Handicraft &amp; Paper employees lost homes and resources. With the help of one German Client and associated NGO Himalayan Region Welfare, we provided Rs. 33,000 to each of our 91 employees in Kathmandu to get roofs over their heads, buy food and take care of their families A variety of top-quality lokta paper products A Broad Base Tibetan Handicraft &amp; Paper supports community-based development: it has purchased shares in local enterprises including community forest users&rsquo; groups Dolkha Sindhu Multipurpose Pvt. Ltd. and Everest Gateway Pvt. Ltd.. We sign annual purchase agreements with each organization. Currently over 1000 members around Nepal benefit directly from the purchasing of paper from communities where it is produced as do our nearly 100 employees at the Kathmandu factory. We provide fair living wages, and working conditions are excellent for all employees. We hire people who are drawn from a cross-section of Nepal&rsquo;s many ethnic groups, giving special consideration to the poorest. As the founders of the company are Sherpa, we do our best to highlight Sherpa/Tibetan culture by selling products like prayer flags, incense, singing bowls, and thingsa (miniature cymbals). We print paper with typical icons like the bodhi leaf of the peepul tree (Prince Siddhartha Gautama, the Buddha was enlightened under a peepul tree), the lotus, mandalas, and the all-seeing eyes of Lord Buddha. We also promote papermaking by conducting training programmes in Nepal and as far abroad as America and orphanages in Tibet. To attain environmentally sound practices, we use vegetable dyes and dip-dye processes that absorb all chemical dyes, which are ozone and chlorine-free. Each lokta plant, whose bark is the base for our products, has the astonishing ability to send up many new stems after being harvested for production. A few years after harvest, what was one lokta plant will be five or six new plants. In addition, waste is minimal since all rejected products are recycled. The company is now doing research into the use of agricultural waste, including banana leaves, cardamom stalks and rice husks for paper production. We are also exploring the possibility of using other plants like hemp and mitsumata (Japanese for Edgeworthia chrysantha) to make our paper.</cite></p>', NULL, '2018-04-25 03:36:53', '<p><ins><strong>Custom-Product:</strong></ins></p>\r\n\r\n<p>Our Social Contributions Demonstrating a well-developed sense of corporate social responsibility, Tibetan Handicraft and Paper Pvt. Ltd. has taken up the following initiatives: We educate the children of our Tibetan Handicraft factory workers for free at Samten Memorial Educational Academy. We also provide scholarship opportunities for other students in need. There are currently 410 students at the school and 24 staff employed full time In 2010 we donated Rs. 475,000 for the construction of a road to Barahibise Thingsang, Bigu, and Chilangkha Dolakha Districts, and in 2015 we donated again, Rs. 232,155, to maintain the road. Over 30,000 people from several villages including Bigu, Alamphu, Chilangkha, and Khopa Chaggu benefit from the increased access to markets and other infrastructure that the road provides.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `metatags`
--

CREATE TABLE `metatags` (
  `id` int(10) UNSIGNED NOT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metatags`
--

INSERT INTO `metatags` (`id`, `keywords`, `description`, `author`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Tibetan Handicraft Industry is a manufacturer and exporter of handmade Lokta paper and its products.', 'Tibetan Handicraft Industry is a manufacturer and exporter of handmade Lokta paper and its products.', 'Tibetan Handicraft, Tibetan Handmade Products, Tibetan, Papers, Handicraft Paper, Paper Products, Handmade, Handicraft Tibet, Tibetan Handicraft', 'Tibetan Handicraft Industry : The Manufacturer and Exporter of Handicraft', NULL, '2018-04-26 01:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_02_082739_Alter_users_tablename', 1),
(4, '2018_04_02_093705_Alter_userstable_tablename', 1),
(5, '2018_04_08_063726_create_siteconfigs_table', 2),
(6, '2018_04_08_081022_create_logos_table', 3),
(7, '2018_04_08_092736_create_sliders_table', 4),
(8, '2018_04_08_103904_create_information_table', 5),
(9, '2018_04_08_104450_Alter_information_tablename', 6),
(10, '2018_04_09_060132_create_categories_table', 7),
(11, '2018_04_09_084607_create_products_table', 8),
(12, '2018_04_09_115817_Alter_product_tablename', 9),
(13, '2018_04_09_121039_Alter_productsis_tablename', 10),
(14, '2018_04_10_052503_create_pimages_table', 11),
(15, '2018_04_10_063817_Alter_products_price_tablename', 12),
(16, '2018_04_11_081029_create_memberships_table', 13),
(17, '2018_04_11_105618_create_associates_table', 14),
(18, '2018_04_11_112111_Alter_associate_new_tablename', 15),
(19, '2018_04_12_054039_create_browser_controllers_table', 16),
(20, '2018_04_12_054625_create_browsers_table', 17),
(21, '2018_04_13_091116_create_menus_table', 18),
(22, '2018_04_13_110910_Alter_menu_tablename', 19),
(23, '2018_04_16_040806_create_specials_table', 20),
(24, '2018_04_18_065825_create_contacts_table', 21),
(25, '2018_04_18_072932_Alter_contact_you_tablename', 22),
(26, '2018_04_18_073158_Alter_contact_yousir_tablename', 23),
(27, '2018_04_19_102334_Alter_category_tablename', 24),
(28, '2018_04_19_104143_Alter_product_tablename', 25),
(29, '2018_04_20_082622_Alter_contact_tablename', 26),
(30, '2018_04_21_072146_Alter_products_tablename', 27),
(31, '2018_04_23_111950_Alter_contact_you_tablename', 28),
(32, '2018_04_23_112437_create_carts_table', 29),
(33, '2018_04_23_113616_create_orders_table', 30),
(34, '2018_04_24_061256_Alter_products_you_tablename', 31),
(35, '2018_04_24_092612_create_subscribes_table', 32),
(36, '2018_04_25_091406_Alter_siteconfig_you_tablename', 33),
(37, '2018_04_26_064221_create_metatags_table', 34),
(38, '2018_05_11_061555_Alter_products_three_tablename', 35),
(39, '2018_05_11_062557_create_pmenus_table', 36),
(40, '2018_05_11_071319_Alter_products_four_tablename', 37),
(41, '2018_05_11_105904_Alter_orders_tablename', 38);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `proname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `contact_id`, `proname`, `quantity`, `created_at`, `updated_at`, `product_id`) VALUES
(1, 1, 'samsung j7', 2, '2018-05-11 05:17:40', '2018-05-11 05:17:40', '3'),
(2, 2, 'lenovo 5 series', 2, '2018-05-11 05:34:47', '2018-05-11 05:34:47', '6'),
(3, 2, 'paper', 3, '2018-05-11 05:34:47', '2018-05-11 05:34:47', '4'),
(4, 2, 'tool-v1', 4, '2018-05-11 05:34:47', '2018-05-11 05:34:47', '5'),
(5, 4, 'lenovo 5 series', 1, '2018-05-11 06:38:20', '2018-05-11 06:38:20', '6'),
(6, 5, 'dell-i3', 2, '2018-05-12 23:06:16', '2018-05-12 23:06:16', '1'),
(7, 9, 'lenovo 5 series', 2, '2018-05-13 06:16:41', '2018-05-13 06:16:41', '6'),
(8, 9, 'paper', 3, '2018-05-13 06:16:41', '2018-05-13 06:16:41', '4');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pimages`
--

CREATE TABLE `pimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proextra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pimages`
--

INSERT INTO `pimages` (`id`, `product_id`, `proextra`, `created_at`, `updated_at`) VALUES
(1, '1', 'wallpaper.wiki-Octopus-Image-1-PIC-WPD001508.jpg', '2018-05-11 04:13:03', '2018-05-11 04:13:03'),
(2, '2', 'Minimalist-Wallpaper-Desktop-Background-127.jpg', '2018-05-11 04:19:03', '2018-05-11 04:19:03'),
(3, '2', 'kitty_12-wallpaper-1680x1050.jpg', '2018-05-11 04:21:41', '2018-05-11 04:21:41'),
(4, '3', '957363-artwork-batman-draw-grapghic-graphic-design-minimal-paint-superhero.jpg', '2018-05-11 04:29:04', '2018-05-11 04:29:04'),
(5, '4', '27057784-simple-wallpapers.jpg', '2018-05-11 04:33:07', '2018-05-11 04:33:07'),
(6, '4', 'minimal_green_lantern_wallpaper_by_cheetashock-d7ez532.png', '2018-05-11 04:33:07', '2018-05-11 04:33:07'),
(7, '5', '432931.jpg', '2018-05-11 04:39:01', '2018-05-11 04:39:01'),
(8, '6', '69319951-simple-design-wallpapers.jpg', '2018-05-11 04:56:05', '2018-05-11 04:56:05'),
(9, '6', 'maxresdefault.jpg', '2018-05-11 04:56:05', '2018-05-11 04:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `pmenus`
--

CREATE TABLE `pmenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `pmenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmenus`
--

INSERT INTO `pmenus` (`id`, `category_id`, `pmenu`, `slug`, `created_at`, `updated_at`) VALUES
(3, 1, 'samsung', 'samsung', '2018-05-11 03:27:11', '2018-05-11 03:27:11'),
(4, 2, 'dell', 'dell', '2018-05-11 03:27:28', '2018-05-11 06:31:49'),
(5, 2, 'lenovo', 'lenovo', '2018-05-11 03:27:36', '2018-05-11 06:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `pmenu_id` bigint(191) UNSIGNED DEFAULT '0',
  `proname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) DEFAULT '0',
  `procode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proav` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `count` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `pmenu_id`, `proname`, `price`, `procode`, `protype`, `promain`, `proav`, `slug`, `video`, `description`, `count`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'dell-i3', 0, 'dell-i3-2001', 'laptop', 'wallpaper.wiki-Octopus-Image-HD-PIC-WPD001511.jpg', 'In stock', 'dell-i3', 'https://www.youtube.com/watch?v=uxUATkpMQ8A', 'hello', 2, 5, '2018-05-11 04:13:02', '2018-05-13 04:59:12'),
(2, 3, 0, 'xerox-v6', 0, 'printer100', 'printer generation', 'Minimalist-Wallpaper-Desktop-Background-120.jpg', 'Finished', 'xerox-v6', 'https://www.youtube.com/watch?v=uxUATkpMQ8A', 'hello printer how are u', 1, 3, '2018-05-11 04:19:03', '2018-05-13 03:09:24'),
(3, 1, 3, 'samsung j7', 0, 'samsun-j7-200', 'mobile', 'Minimalist-Wallpaper-Desktop-Background-92.jpg', 'In stock', 'samsung-j7', 'https://www.youtube.com/embed/IumYMCllMsM', 'hello samsung', 7, 3, '2018-05-11 04:29:04', '2018-05-13 04:58:46'),
(4, 4, 0, 'paper', 0, 'paper306', 'paper', '27057784-simple-wallpapers.jpg', 'In stock', 'paper', 'https://www.youtube.com/embed/1vrEljMfXYo', 'hello paper', 1, 1, '2018-05-11 04:33:07', '2018-05-13 03:10:06'),
(5, 5, 0, 'tool-v1', 0, 'tools06', 'tools', '69398160-simple-design-wallpapers.jpg', 'Finished', 'tool-v1', 'https://www.youtube.com/embed/1vrEljMfXYo', 'hello tools', 1, 2, '2018-05-11 04:39:01', '2018-05-13 03:10:11'),
(6, 2, 5, 'lenovo 5 series', 0, 'lenovo 5series - 600', 'laptop', 'Minimalist-Wallpaper-Desktop-Background-18.jpg', 'Finished', 'lenovo-5-series', 'https://www.youtube.com/embed/1vrEljMfXYo', 'hello there', 8, 3, '2018-05-11 04:56:05', '2018-05-13 04:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

CREATE TABLE `siteconfigs` (
  `id` int(10) UNSIGNED NOT NULL,
  `cname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailtwo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `fblink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterlink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlelink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instalink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utubelink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slogan` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `cname`, `address`, `emailone`, `emailtwo`, `phone`, `fblink`, `twitterlink`, `googlelink`, `instalink`, `utubelink`, `created_at`, `updated_at`, `slogan`) VALUES
(1, 'Tibetan Handicraf & Paper Pvt. Ltd.', 'Budhanilakantha, Kathmandu,Nepal', 'thi@wlink.com.np', 'info@tibetanhandicraftpaper.com', 9849487874, 'https://www.facebook.com/nischal.nisci', 'https://twitter.com/NischalRana19', 'https://www.facebook.com/nischal.nisci', 'https://www.youtube.com/watch?v=ck1SSHeHmAo', 'https://www.youtube.com/embed/klcrWS3Kees?rel=0', '2018-04-08 02:08:15', '2018-04-26 03:12:21', 'Tibetan Handicraft & Paper Pvt. Ltd. was established first in 1995 by three cousins from Dolkha District east of Kathmandu,Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(14, '030516-UFC-Nate-Diaz-reacts-to-his-victory-over-Conor-McGregor-PI-.jpg', '2018-10-07 06:56:59', '2018-10-07 06:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` int(10) UNSIGNED NOT NULL,
  `url1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `url1`, `title1`, `url2`, `title2`, `url3`, `title3`, `url4`, `title4`, `created_at`, `updated_at`) VALUES
(1, 'https://bitbucket.org/', 'a.jpg', 'https://www.youtube.com/watch?v=cQ0wwkSJ3uI', 'unnamed.png', 'https://www.youtube.com/watch?v=cQ0wwkSJ3uI', 'lp.jpg', 'https://www.youtube.com/watch?v=cQ0wwkSJ3uI', 'batman-logo-wallpaper-for-desktop-1080p-125.jpg', '2018-04-16 00:15:53', '2018-04-16 01:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'nischal@gmail.com', '2018-05-11 05:37:40', '2018-05-11 05:37:40'),
(2, 'support@grafiastech.com', '2018-05-13 06:17:07', '2018-05-13 06:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `utype` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `utype`, `image`) VALUES
(1, 'Grafias', '', 'support@grafiastech.com', '$2y$10$et/O9Fdn8Xlyo8O7hgGbOeJXobZ3.h2zRrSjOxYCs6eWskYcFTUYO', 'UZ8qh4Hvsq4nb1aKK37CIcqjH5xpA6YR64BI1GGvfwcZmuLo9x7FRtKTsYR8', '2018-04-07 11:59:23', '2018-04-20 01:55:57', 'admin', 'Christian-Pulisic-1920x1080.jpg'),
(4, 'THP', '', 'info@tibetanhandicraftpaper.com', '$2y$10$RwLBbQaz2C22FBV8q9XEP.WxoQ39gkr3TxhB39GmZEMljnUTcj7aG', NULL, '2018-05-13 05:29:00', '2018-05-13 05:29:42', 'user', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associates`
--
ALTER TABLE `associates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pimages`
--
ALTER TABLE `pimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmenus`
--
ALTER TABLE `pmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associates`
--
ALTER TABLE `associates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metatags`
--
ALTER TABLE `metatags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pimages`
--
ALTER TABLE `pimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pmenus`
--
ALTER TABLE `pmenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
