-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 07:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleInitial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `companyId`, `firstName`, `middleInitial`, `lastName`, `email`, `password`, `activeStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'TestF', 'K', 'TestL', 'test@gmail.com', '', '1', NULL, NULL),
(6, 1, 'Agent1', 'P', 'Last', 'testagent@gmail.com', '$2y$10$W4rg.jXYYkoUTv5UJR4pXeaMGOj3YdRtu7pNhLrXgk8O1P3VFM9xW', '1', '2017-05-10 08:37:50', '2017-05-10 08:38:16'),
(7, 1, 'Agent Test one', '', 'Agaent Last', 'agent1@gmail.com', '$2y$10$7/ZBSLcG.pb7lhof.zqvjeP4eQ3Sl89S2oomB1UA41dBQ1MJNhaU2', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agentsCustomers`
--

CREATE TABLE IF NOT EXISTS `agentsCustomers` (
`id` int(10) unsigned NOT NULL,
  `agentId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agentsCustomers`
--

INSERT INTO `agentsCustomers` (`id`, `agentId`, `customerId`, `created_at`, `updated_at`) VALUES
(1, 3, 13, NULL, NULL),
(2, 12, 15, '2017-05-24 07:15:21', '2017-05-24 07:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `agentId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `storageLocationId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `width` float NOT NULL DEFAULT '0',
  `height` float NOT NULL DEFAULT '0',
  `depth` float NOT NULL DEFAULT '0',
  `weight` float NOT NULL DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `companyId`, `agentId`, `customerId`, `status`, `images`, `storageLocationId`, `created_at`, `updated_at`, `width`, `height`, `depth`, `weight`, `type`) VALUES
(4, 1, 12, 15, 1, NULL, 3, '2017-06-03 05:45:19', '2017-06-03 05:46:49', 8, 9, 11, 12, 'vehicle'),
(5, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:29:26', '2017-06-05 04:29:26', 3, 3, 7, 9, 'other'),
(6, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:30:45', '2017-06-05 04:30:45', 1, 1, 1, 1, 'other'),
(7, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:31:45', '2017-06-05 04:31:45', 1, 1, 1, 1, 'other'),
(8, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:32:24', '2017-06-05 04:32:24', 5, 5, 5, 5, 'vehicle'),
(9, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:33:09', '2017-06-05 04:33:09', 7, 7, 7, 7, 'other'),
(10, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:34:07', '2017-06-05 04:34:07', 4, 4, 4, 4, 'other'),
(11, 1, 12, 15, 1, NULL, 3, '2017-06-05 04:51:10', '2017-06-05 04:51:10', 3, 3, 4, 6, 'other'),
(12, 1, 12, 15, 1, NULL, 3, '2017-06-05 05:21:37', '2017-06-05 05:21:37', 4, 4, 4, 4, 'other'),
(13, 1, 12, 15, 1, NULL, 3, '2017-06-05 05:21:52', '2017-06-05 05:21:52', 4, 4, 4, 4, 'other'),
(14, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:00:36', '2017-06-05 06:00:36', 4, 4, 4, 4, 'other'),
(15, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:03:12', '2017-06-05 06:03:12', 4, 4, 4, 4, 'other'),
(16, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:03:35', '2017-06-05 06:03:35', 4, 4, 4, 4, 'other'),
(17, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:03:51', '2017-06-05 06:03:51', 4, 4, 4, 4, 'other'),
(18, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:04:38', '2017-06-05 06:04:38', 4, 4, 4, 4, 'other'),
(19, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:04:42', '2017-06-05 06:04:42', 4, 4, 4, 4, 'other'),
(20, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:04:54', '2017-06-05 06:04:54', 4, 4, 4, 4, 'other'),
(21, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:05:57', '2017-06-05 06:05:57', 4, 4, 4, 4, 'other'),
(22, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:06:08', '2017-06-05 06:06:08', 4, 4, 4, 4, 'other'),
(23, 1, 12, 15, 1, NULL, 3, '2017-06-05 06:06:59', '2017-06-05 08:20:44', 4, 4, 4, 4, 'other'),
(24, 1, 12, 15, 1, NULL, 3, '2017-06-06 00:01:17', '2017-06-06 00:01:57', 7, 7, 7, 7, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `cargoTag`
--

CREATE TABLE IF NOT EXISTS `cargoTag` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `groupName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupOrder` int(11) NOT NULL,
  `textTagId` int(11) NOT NULL,
  `textTagLabel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textTagDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textTagRequired` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textTagValueId` int(11) NOT NULL,
  `textTagValuesValue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textTagValuesCargoeId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cargoTagGroup`
--

CREATE TABLE IF NOT EXISTS `cargoTagGroup` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargoTagGroup`
--

INSERT INTO `cargoTagGroup` (`id`, `companyId`, `name`, `description`, `order`, `created_at`, `updated_at`) VALUES
(2, 1, 'TagGroup new', 'test description testdfdfdfdf', 3, '2017-05-11 04:06:22', '2017-05-12 04:01:02'),
(3, 1, 'Test Tag Group1', 'Test description', 1, '2017-05-12 04:00:45', '2017-05-12 04:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `cargoTagValue`
--

CREATE TABLE IF NOT EXISTS `cargoTagValue` (
`id` int(10) unsigned NOT NULL,
  `cargoTextTagId` int(11) NOT NULL,
  `cargoId` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargoTagValue`
--

INSERT INTO `cargoTagValue` (`id`, `cargoTextTagId`, `cargoId`, `value`, `created_at`, `updated_at`) VALUES
(3, 4, 8, 'one value test', '2017-05-12 04:03:16', '2017-05-12 04:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `cargoTextTag`
--

CREATE TABLE IF NOT EXISTS `cargoTextTag` (
`id` int(10) unsigned NOT NULL,
  `cargoTagGroupId` int(11) NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargoTextTag`
--

INSERT INTO `cargoTextTag` (`id`, `cargoTagGroupId`, `label`, `description`, `required`, `created_at`, `updated_at`) VALUES
(4, 2, 'Test Cargo Text Tag edit test', 'descrioptionddd', 0, '2017-05-12 04:02:04', '2017-05-12 04:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `companiesUsers`
--

CREATE TABLE IF NOT EXISTS `companiesUsers` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companiesUsers`
--

INSERT INTO `companiesUsers` (`id`, `companyId`, `userId`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'agent', NULL, NULL),
(2, 1, 4, 'customer', NULL, NULL),
(3, 1, 9, 'agent', '2017-05-24 04:16:53', '2017-05-24 04:16:53'),
(4, 1, 10, 'agent', '2017-05-24 05:34:13', '2017-05-24 05:34:13'),
(5, 1, 11, 'agent', '2017-05-24 05:37:48', '2017-05-24 05:37:48'),
(6, 1, 12, 'agent', '2017-05-24 05:41:07', '2017-05-24 05:41:07'),
(7, 1, 13, 'customer', NULL, NULL),
(8, 1, 15, 'customer', '2017-05-24 07:15:21', '2017-05-24 07:15:21'),
(9, 1, 16, 'agent', '2017-05-26 04:07:46', '2017-05-26 04:07:46'),
(10, 1, 17, 'agent', '2017-05-29 04:08:58', '2017-05-29 04:08:58'),
(11, 1, 18, 'agent', '2017-05-29 04:12:42', '2017-05-29 04:12:42'),
(12, 1, 19, 'agent', '2017-05-29 04:35:26', '2017-05-29 04:35:26'),
(13, 1, 20, 'agent', '2017-05-29 04:35:45', '2017-05-29 04:35:45'),
(14, 1, 21, 'agent', '2017-05-29 04:35:50', '2017-05-29 04:35:50'),
(15, 1, 22, 'agent', '2017-05-29 04:35:53', '2017-05-29 04:35:53'),
(16, 1, 23, 'agent', '2017-05-29 04:36:16', '2017-05-29 04:36:16'),
(17, 1, 24, 'agent', '2017-05-29 04:38:07', '2017-05-29 04:38:07'),
(18, 1, 25, 'agent', '2017-05-29 04:40:18', '2017-05-29 04:40:18'),
(19, 1, 26, 'agent', '2017-05-29 04:41:41', '2017-05-29 04:41:41'),
(20, 1, 27, 'agent', '2017-05-29 04:41:45', '2017-05-29 04:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superUserId` int(11) NOT NULL,
  `ftpFolder` int(11) NOT NULL,
  `allowedAgents` int(11) NOT NULL,
  `allowedCustomerPerAgent` int(11) NOT NULL,
  `allowedCustomMessages` int(11) NOT NULL,
  `allowedStorageSpace` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `description`, `logo`, `address1`, `address2`, `city`, `state`, `zipCode`, `country`, `superUserId`, `ftpFolder`, `allowedAgents`, `allowedCustomerPerAgent`, `allowedCustomMessages`, `allowedStorageSpace`, `created_at`, `updated_at`) VALUES
(1, 'Test Company kkkk jjjj', 'test dfdfdf kkk', 'uploads/company_logo/1494598330.png', 'tere kkkk', 'dfdfkkkkkkkk', 'dfdfdfkkkkkkkkkkk', 'dfdkkkkkkkkkk', '43434kkkkkk', 'dfdffkkkkkkkkkk', 0, 0, 0, 0, 0, 0, NULL, '2017-05-12 08:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `corgoDocument`
--

CREATE TABLE IF NOT EXISTS `corgoDocument` (
`id` int(10) unsigned NOT NULL,
  `cargoId` int(11) NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corgoDocument`
--

INSERT INTO `corgoDocument` (`id`, `cargoId`, `label`, `fileName`, `type`, `description`, `created_at`, `updated_at`) VALUES
(3, 9, 'label222rr', 'uploads/cargos/1494423692.png', 'test222', 'ddddd222', '2017-05-09 08:38:07', '2017-05-10 08:11:37'),
(4, 8, 'test', 'uploads/cargos/1494422012.png', 'test222', 'tedfdfd', '2017-05-10 07:43:32', '2017-05-10 07:43:32'),
(5, 9, 'Label test', 'uploads/cargos/1494425015.png', 'test type', 'Description', '2017-05-10 08:33:11', '2017-05-10 08:33:35'),
(6, 23, NULL, 'uploads/cargos/1496662619.png', NULL, NULL, '2017-06-05 06:06:59', '2017-06-05 06:06:59'),
(7, 23, NULL, 'uploads/cargos/1496670235.png', NULL, NULL, '2017-06-05 08:13:55', '2017-06-05 08:13:55'),
(8, 23, NULL, 'uploads/cargos/1496670644.png', NULL, NULL, '2017-06-05 08:20:44', '2017-06-05 08:20:44'),
(9, 24, NULL, 'uploads/cargos/1496727077.png', NULL, NULL, '2017-06-06 00:01:17', '2017-06-06 00:01:17'),
(10, 24, NULL, 'uploads/cargos/1496727117.png', NULL, NULL, '2017-06-06 00:01:57', '2017-06-06 00:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(10) unsigned NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'United Kingdom', 'gb', NULL, NULL),
(2, 'Afghanistan', 'af', NULL, NULL),
(3, 'Albania', 'al', NULL, NULL),
(4, 'Algeria', 'dz', NULL, NULL),
(5, 'American Samoa', 'as', NULL, NULL),
(6, 'Andorra', 'ad', NULL, NULL),
(7, 'Angola', 'ad', NULL, NULL),
(8, 'Anguilla', 'ai', NULL, NULL),
(9, 'Antarctica', 'aq', NULL, NULL),
(10, 'Antigua and Barbuda', 'ag', NULL, NULL),
(11, 'Argentina', 'ar', NULL, NULL),
(12, 'Armenia', 'am', NULL, NULL),
(13, 'Aruba', 'aw', NULL, NULL),
(14, 'Australia', 'au', NULL, NULL),
(15, 'Austria', 'at', NULL, NULL),
(16, 'Azerbaijan', 'az', NULL, NULL),
(17, 'Bahamas', 'bs', NULL, NULL),
(18, 'Bahrain', 'bh', NULL, NULL),
(19, 'Bangladesh', 'bd', NULL, NULL),
(20, 'Barbados', 'bb', NULL, NULL),
(21, 'Belarus', 'by', NULL, NULL),
(22, 'Belgium', 'be', NULL, NULL),
(23, 'Belize', 'bz', NULL, NULL),
(24, 'Benin', 'bj', NULL, NULL),
(25, 'Bermuda', 'bm', NULL, NULL),
(26, 'Bhutan', 'bt', NULL, NULL),
(27, 'Bolivia', 'bo', NULL, NULL),
(28, 'Bosnia and Herzegowina', 'ba', NULL, NULL),
(29, 'Botswana', 'bw', NULL, NULL),
(30, 'Bouvet Island', 'bv', NULL, NULL),
(31, 'Brazil', 'br', NULL, NULL),
(32, 'British Indian Ocean Territory', 'io', NULL, NULL),
(33, 'Brunei Darussalam', 'bn', NULL, NULL),
(34, 'Bulgaria', 'bg', NULL, NULL),
(35, 'Burkina Faso', 'bf', NULL, NULL),
(36, 'Burundi', 'bi', NULL, NULL),
(37, 'Cambodia', 'kh', NULL, NULL),
(38, 'Cameroon', 'cm', NULL, NULL),
(39, 'Canada', 'ca', NULL, NULL),
(40, 'Cabo Verde', 'cv', NULL, NULL),
(41, 'Cayman Islands', 'ky', NULL, NULL),
(42, 'Central African Republic', 'cf', NULL, NULL),
(43, 'Chad', 'td', NULL, NULL),
(44, 'Chile', 'cl', NULL, NULL),
(45, 'China', 'cn', NULL, NULL),
(46, 'Christmas Island', 'cx', NULL, NULL),
(47, 'Cocos (Keeling) Islands', 'cc', NULL, NULL),
(48, 'Colombia', 'co', NULL, NULL),
(49, 'Comoros', 'km', NULL, NULL),
(50, 'Congo', 'cg', NULL, NULL),
(51, 'Congothe Democratic Republic of the', 'cd', NULL, NULL),
(52, 'Cook Islands', 'ck', NULL, NULL),
(53, 'Costa Rica', 'cr', NULL, NULL),
(54, 'Cote d''Ivoire', 'ci', NULL, NULL),
(55, 'Croatia (Hrvatska)', 'hr', NULL, NULL),
(56, 'Cuba', 'cu', NULL, NULL),
(57, 'Cyprus', 'cy', NULL, NULL),
(58, 'Czech Republic', 'cz', NULL, NULL),
(59, 'Denmark', 'dk', NULL, NULL),
(60, 'Djibouti', 'dj', NULL, NULL),
(61, 'Dominica', 'dm', NULL, NULL),
(62, 'Dominican Republic', 'do', NULL, NULL),
(63, 'East Timor', 'tl', NULL, NULL),
(64, 'Ecuador', 'ec', NULL, NULL),
(65, 'Egypt', 'eg', NULL, NULL),
(66, 'El Salvador', 'sv', NULL, NULL),
(67, 'Equatorial Guinea', 'gq', NULL, NULL),
(68, 'Eritrea', 'er', NULL, NULL),
(69, 'Estonia', 'ee', NULL, NULL),
(70, 'Ethiopia', 'et', NULL, NULL),
(71, 'Falkland Islands (Malvinas)', 'fk', NULL, NULL),
(72, 'Faroe Islands', 'fo', NULL, NULL),
(73, 'Fiji', 'fj', NULL, NULL),
(74, 'Finland', 'fi', NULL, NULL),
(75, 'France', 'fr', NULL, NULL),
(76, 'French Guiana', 'gf', NULL, NULL),
(77, 'French Polynesia', 'pf', NULL, NULL),
(78, 'French Southern Territories', 'tf', NULL, NULL),
(79, 'Gabon', 'ga', NULL, NULL),
(80, 'Gambia', 'gm', NULL, NULL),
(81, 'Georgia', 'ge', NULL, NULL),
(82, 'Germany', 'de', NULL, NULL),
(83, 'Ghana', 'gh', NULL, NULL),
(84, 'Gibraltar', 'gi', NULL, NULL),
(85, 'Greece', 'gr', NULL, NULL),
(86, 'Greenland', 'gl', NULL, NULL),
(87, 'Grenada', 'gd', NULL, NULL),
(88, 'Guadeloupe', 'gp', NULL, NULL),
(89, 'Guam', 'gu', NULL, NULL),
(90, 'Guatemala', 'gt', NULL, NULL),
(91, 'Guinea', 'gn', NULL, NULL),
(92, 'Guinea-Bissau', 'gw', NULL, NULL),
(93, 'Guyana', 'gy', NULL, NULL),
(94, 'Haiti', 'ht', NULL, NULL),
(95, 'Heard and Mc Donald Islands', 'hm', NULL, NULL),
(96, 'Holy See (Vatican City State)', 'va', NULL, NULL),
(97, 'Honduras', 'hn', NULL, NULL),
(98, 'Hong Kong', 'hk', NULL, NULL),
(99, 'Hungary', 'hu', NULL, NULL),
(100, 'Iceland', 'is', NULL, NULL),
(101, 'India', 'in', NULL, NULL),
(102, 'Indonesia', 'id', NULL, NULL),
(103, 'Iran (Islamic Republic of)', 'ir', NULL, NULL),
(104, 'Iraq', 'iq', NULL, NULL),
(105, 'Ireland', 'ie', NULL, NULL),
(106, 'Israel', 'il', NULL, NULL),
(107, 'Italy', 'it', NULL, NULL),
(108, 'Jamaica', 'jm', NULL, NULL),
(109, 'Japan', 'jp', NULL, NULL),
(110, 'Jordan', 'jo', NULL, NULL),
(111, 'Kazakhstan', 'kz', NULL, NULL),
(112, 'Kenya', 'ke', NULL, NULL),
(113, 'Kiribati', 'ki', NULL, NULL),
(114, 'Korea Democratic People''s Republic of', 'kp', NULL, NULL),
(115, 'Korea Republic of', 'kr', NULL, NULL),
(116, 'Kuwait', 'kw', NULL, NULL),
(117, 'Kyrgyzstan', 'kg', NULL, NULL),
(118, 'LaoPeople''s Democratic Republic', 'la', NULL, NULL),
(119, 'Latvia', 'lv', NULL, NULL),
(120, 'Lebanon', 'lb', NULL, NULL),
(121, 'Lesotho', 'ls', NULL, NULL),
(122, 'Liberia', 'lr', NULL, NULL),
(123, 'Libyan Arab Jamahiriya', 'ly', NULL, NULL),
(124, 'Liechtenstein', 'li', NULL, NULL),
(125, 'Lithuania', 'lt', NULL, NULL),
(126, 'Luxembourg', 'lu', NULL, NULL),
(127, 'Macao', 'mo', NULL, NULL),
(128, 'Macedonia', 'mk', NULL, NULL),
(129, 'Madagascar', 'mg', NULL, NULL),
(130, 'Malawi', 'mw', NULL, NULL),
(131, 'Malaysia', 'my', NULL, NULL),
(132, 'Maldives', 'mv', NULL, NULL),
(133, 'Mali', 'ml', NULL, NULL),
(134, 'Malta', 'mt', NULL, NULL),
(135, 'Marshall Islands', 'mh', NULL, NULL),
(136, 'Martinique', 'mq', NULL, NULL),
(137, 'Mauritania', 'mr', NULL, NULL),
(138, 'Mauritius', 'mu', NULL, NULL),
(139, 'Mayotte', 'yt', NULL, NULL),
(140, 'Mexico', 'mx', NULL, NULL),
(141, 'Micronesia Federated States of', 'fm', NULL, NULL),
(142, 'Moldova Republic of', 'md', NULL, NULL),
(143, 'Monaco', 'mc', NULL, NULL),
(144, 'Mongolia', 'mn', NULL, NULL),
(145, 'Montserrat', 'ms', NULL, NULL),
(146, 'Morocco', 'ma', NULL, NULL),
(147, 'Mozambique', 'mz', NULL, NULL),
(148, 'Myanmar', 'mm', NULL, NULL),
(149, 'Namibia', 'na', NULL, NULL),
(150, 'Nauru', 'nr', NULL, NULL),
(151, 'Nepal', 'np', NULL, NULL),
(152, 'Netherlands', 'nl', NULL, NULL),
(153, 'Netherlands Antilles', 'an', NULL, NULL),
(154, 'New Caledonia', 'nc', NULL, NULL),
(155, 'New Zealand', 'nz', NULL, NULL),
(156, 'Nicaragua', 'ni', NULL, NULL),
(157, 'Niger', 'ne', NULL, NULL),
(158, 'Nigeria', 'ng', NULL, NULL),
(159, 'Niue', 'nu', NULL, NULL),
(160, 'Norfolk Island', 'nf', NULL, NULL),
(161, 'Northern Mariana Islands', 'mp', NULL, NULL),
(162, 'Norway', 'no', NULL, NULL),
(163, 'Oman', 'om', NULL, NULL),
(164, 'Pakistan', 'pk', NULL, NULL),
(165, 'Palau', 'pw', NULL, NULL),
(166, 'Panama', 'pa', NULL, NULL),
(167, 'Papua New Guinea', 'pg', NULL, NULL),
(168, 'Paraguay', 'py', NULL, NULL),
(169, 'Peru', 'pe', NULL, NULL),
(170, 'Philippines', 'ph', NULL, NULL),
(171, 'Pitcairn', 'pn', NULL, NULL),
(172, 'Poland', 'pl', NULL, NULL),
(173, 'Portugal', 'pt', NULL, NULL),
(174, 'Puerto Rico', 'pr', NULL, NULL),
(175, 'Qatar', 'qa', NULL, NULL),
(176, 'Reunion', 're', NULL, NULL),
(177, 'Romania', 'ro', NULL, NULL),
(178, 'Russian Federation', 'ru', NULL, NULL),
(179, 'Rwanda', 'rw', NULL, NULL),
(180, 'Saint Kitts and Nevis', 'kn', NULL, NULL),
(181, 'Saint Lucia', 'lc', NULL, NULL),
(182, 'Saint Vincent and the Grenadines', 'vc', NULL, NULL),
(183, 'Samoa', 'ws', NULL, NULL),
(184, 'San Marino', 'sm', NULL, NULL),
(185, 'Sao Tome and Principe', 'st', NULL, NULL),
(186, 'Saudi Arabia', 'sa', NULL, NULL),
(187, 'Senegal', 'sn', NULL, NULL),
(188, 'Seychelles', 'sc', NULL, NULL),
(189, 'Sierra Leone', 'sl', NULL, NULL),
(190, 'Singapore', 'sg', NULL, NULL),
(191, 'Slovakia (Slovak Republic)', 'sk', NULL, NULL),
(192, 'Slovenia', 'si', NULL, NULL),
(193, 'Solomon Islands', 'sb', NULL, NULL),
(194, 'Somalia', 'so', NULL, NULL),
(195, 'South Africa', 'za', NULL, NULL),
(196, 'South Georgia and the South Sandwich', 'gs', NULL, NULL),
(197, 'Spain', 'es', NULL, NULL),
(198, 'Sri Lanka', 'lk', NULL, NULL),
(199, 'St. Helena', 'sh', NULL, NULL),
(200, 'St. Pierre and Miquelon', 'pm', NULL, NULL),
(201, 'Sudan', 'sd', NULL, NULL),
(202, 'Suriname', 'sr', NULL, NULL),
(203, 'Svalbard and Jan Mayen Islands', 'sj', NULL, NULL),
(204, 'Swaziland', 'sz', NULL, NULL),
(205, 'Sweden', 'se', NULL, NULL),
(206, 'Switzerland', 'ch', NULL, NULL),
(207, 'Syrian Arab Republic', 'sy', NULL, NULL),
(208, 'Taiwan', 'tw', NULL, NULL),
(209, 'Tajikistan', 'tj', NULL, NULL),
(210, 'Tanzania United Republic of', 'tz', NULL, NULL),
(211, 'Thailand', 'th', NULL, NULL),
(212, 'Togo', 'tg', NULL, NULL),
(213, 'Tokelau', 'tk', NULL, NULL),
(214, 'Tonga', 'to', NULL, NULL),
(215, 'Trinidad and Tobago', 'tt', NULL, NULL),
(216, 'Tunisia', 'tn', NULL, NULL),
(217, 'Turkey', 'tr', NULL, NULL),
(218, 'Turkmenistan', 'tm', NULL, NULL),
(219, 'Turks and Caicos Islands', 'tc', NULL, NULL),
(220, 'Tuvalu', 'tv', NULL, NULL),
(221, 'Uganda', 'ug', NULL, NULL),
(222, 'Ukraine', 'ua', NULL, NULL),
(223, 'United Arab Emirates', 'ae', NULL, NULL),
(224, 'United Kingdom', 'gb', NULL, NULL),
(225, 'United States', 'us', NULL, NULL),
(226, 'United States Minor Outlying Islands', 'um', NULL, NULL),
(227, 'Uruguay', 'uy', NULL, NULL),
(228, 'Uzbekistan', 'uz', NULL, NULL),
(229, 'Vanuatu', 'vu', NULL, NULL),
(230, 'Venezuela', 've', NULL, NULL),
(231, 'Vietnam', 'vn', NULL, NULL),
(232, 'Virgin Islands (British)', 'vg', NULL, NULL),
(233, 'Virgin Islands (U.S.)', 'vi', NULL, NULL),
(234, 'Wallis and Futuna Islands', 'wf', NULL, NULL),
(235, 'Western Sahara', 'eh', NULL, NULL),
(236, 'Yemen', 'ye', NULL, NULL),
(237, 'Serbia', 'yu', NULL, NULL),
(238, 'Zambia', 'zm', NULL, NULL),
(239, 'Zimbabwe', 'zw', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(10) unsigned NOT NULL,
  `agentId` int(11) NOT NULL DEFAULT '0',
  `companyId` int(11) NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleInitial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `agentId`, `companyId`, `firstName`, `middleInitial`, `lastName`, `email`, `password`, `activeStatus`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'Customer4444', 'u', 'Last', 'testcustomer@gmail.com', '$2y$10$ur/PiutZ2k/zjXzHIBKp8e5UAdBLKFJIYmuPLydeOgknXXHJRCeYS', '1', '2017-05-10 08:39:08', '2017-05-10 08:39:36'),
(8, 0, 1, 'cus', '', 'Last', 'customer1@gmail.com', '$2y$10$7/ZBSLcG.pb7lhof.zqvjeP4eQ3Sl89S2oomB1UA41dBQ1MJNhaU2', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `periodFrom` datetime NOT NULL,
  `periodTo` datetime NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invoiceNumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paidOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `companyId`, `periodFrom`, `periodTo`, `status`, `created_at`, `updated_at`, `invoiceNumber`, `paidOn`, `total`) VALUES
(1, 1, '2017-12-12 00:00:00', '2017-12-15 00:00:00', '0', '2017-05-16 04:28:12', '2017-05-16 04:58:28', 'Invoice145', '2017-12-11 18:30:00', 500),
(4, 1, '2017-12-16 00:00:00', '2017-12-18 00:00:00', '1', '2017-05-16 07:36:42', '2017-05-16 07:37:08', 'invoice78', '2017-12-16 18:30:00', 700);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceItem`
--

CREATE TABLE IF NOT EXISTS `invoiceItem` (
`id` int(10) unsigned NOT NULL,
  `invoiceId` int(11) NOT NULL,
  `subscriptionId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoiceItem`
--

INSERT INTO `invoiceItem` (`id`, `invoiceId`, `subscriptionId`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(4, 1, 4, 5, 1000, '2017-05-16 07:40:04', '2017-05-16 07:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
`id` int(10) unsigned NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_04_061402_create_cargoTag_table', 2),
(4, '2017_05_04_062640_create_cargo_table', 3),
(5, '2017_05_04_063143_create_storageLocation_table', 4),
(6, '2017_05_04_063528_create_service_table', 5),
(7, '2017_05_04_064023_create_mail_table', 6),
(8, '2017_05_04_064252_create_company_table', 7),
(9, '2017_05_04_064846_create_invoice_table', 8),
(10, '2017_05_04_065621_create_subscription_table', 9),
(11, '2017_05_04_065946_create_agent_table', 10),
(12, '2017_05_04_070807_create_customer_table', 11),
(13, '2017_05_04_072754_remove_name_to_users_table', 12),
(14, '2017_05_04_072948_add_fields_to_users_table', 13),
(15, '2017_05_08_135306_create_country_table', 14),
(16, '2017_05_09_110155_create_corgoDocument_table', 15),
(17, '2017_05_11_081305_create_cargoTagGrop_table', 16),
(18, '2017_05_11_095835_create_cargoTextTag_table', 17),
(19, '2017_05_12_060909_create_cargoeTagValues_table', 18),
(20, '2017_05_12_064258_change_table_name_of_cargoeTagValue__table', 19),
(21, '2017_05_12_101458_drop_company_table', 20),
(22, '2017_05_12_102453_create_company_new_table', 21),
(23, '2017_05_16_075941_add_fields_to_invoice_table', 22),
(24, '2017_05_16_080752_remove_subscriptionid_fields_from_invoice_table', 23),
(25, '2017_05_16_104129_create_invoiceItem_table', 24),
(26, '2017_05_24_064111_add_new_fields_to_users_table', 25),
(27, '2017_05_24_064910_create_coompanies_users_table', 26),
(28, '2017_05_24_065325_create_agentCustomers_table', 26),
(29, '2017_05_31_104658_add_fields_to_cargo_table', 27),
(30, '2017_05_31_110220_create_vehicle_cargo_table', 28),
(31, '2017_05_31_114803_create_other_cargo_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE IF NOT EXISTS `other` (
`id` int(10) unsigned NOT NULL,
  `cargoId` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `cargoId`, `title`, `specification`, `created_at`, `updated_at`) VALUES
(1, 32, 'fdf', 'dfdfd', '2017-06-02 07:46:37', '2017-06-02 07:46:37'),
(2, 5, 'test one', 'sefdfd', '2017-06-05 04:29:27', '2017-06-05 04:29:27'),
(3, 6, 'dfdfd', 'dfd', '2017-06-05 04:30:45', '2017-06-05 04:30:45'),
(4, 7, 'dfdfd', 'dfd', '2017-06-05 04:31:45', '2017-06-05 04:31:45'),
(5, 9, 'dfdf', 'dfdf', '2017-06-05 04:33:09', '2017-06-05 04:33:09'),
(6, 10, 'jjj', 'jj', '2017-06-05 04:34:07', '2017-06-05 04:34:07'),
(7, 14, 'dfdfdf', 'dfdfd', '2017-06-05 06:00:37', '2017-06-05 06:00:37'),
(8, 15, 'dfdfdf', 'dfdfd', '2017-06-05 06:03:12', '2017-06-05 06:03:12'),
(9, 23, 'dfdfdf', 'dfdfd', '2017-06-05 06:06:59', '2017-06-05 08:20:44'),
(10, 24, 'test', 'sfddf', '2017-06-06 00:01:17', '2017-06-06 00:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servicesIds` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `storageLocation`
--

CREATE TABLE IF NOT EXISTS `storageLocation` (
`id` int(10) unsigned NOT NULL,
  `companyId` int(11) NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storageLocation`
--

INSERT INTO `storageLocation` (`id`, `companyId`, `label`, `address1`, `address2`, `city`, `zipCode`, `state`, `country`, `created_at`, `updated_at`) VALUES
(3, 1, 'rtrtr', 'trtrt', 'rtrtr', 'trtrtr', '4343434', 'rtr', 'trtrt', '2017-05-08 05:57:16', '2017-05-08 05:57:16'),
(5, 1, 'Officeonenew101', 'Rajwada chok', 'Bombay hospital , indore', 'indore', '454007', 'Madhya paradesh', 'India', '2017-05-08 07:19:43', '2017-05-08 07:34:11'),
(7, 1, 'labewwwwwwwwwwwwwww', 'address1', 'address2', 'indore', '454008', 'MP', 'India', '2017-05-30 06:23:23', '2017-05-30 07:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(4, 'Plan new', 'test description testt', 700.00, '2017-05-16 07:38:57', '2017-05-16 07:39:17'),
(5, 'test 45454', 'fggfg', 23.00, '2017-05-16 08:29:50', '2017-05-16 08:29:50'),
(6, 'fdfdfd', 'fdfdfd', 22.00, '2017-05-16 08:29:56', '2017-05-16 08:29:56'),
(7, 'jkkjkj', 'hjhjhj', 23.00, '2017-05-16 08:30:05', '2017-05-16 08:30:05'),
(8, 'test two', 'test one', 45.00, '2017-05-16 08:30:21', '2017-05-16 08:30:21'),
(9, 'plan 6', 'test', 125.00, '2017-05-16 08:34:40', '2017-05-16 08:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `companyId` int(11) NOT NULL DEFAULT '0',
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleInitial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `emailVerificationCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailVerified` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwordResetCode` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `companyId`, `firstName`, `middleInitial`, `lastName`, `activeStatus`, `emailVerificationCode`, `emailVerified`, `passwordResetCode`) VALUES
(1, 'vijay@gmail.com', '$2y$10$G42Hf7hQXspJFxU3cOBtuujiRrfQIjXdofn3.MlRmBGZYEgxhb9gi', 'VFeA9a3WXFfm9LBpjTUIZ5b2PYtJKlYANCwRFqVNVDTdhgBlhb0o9EqW4a1Z', '2017-05-04 02:15:23', '2017-05-04 02:15:23', 1, 'First', 'Mid', 'Las', '1', '', '', ''),
(2, 'vijayyuvasoft183@gmail.com', '$2y$10$sMTE8cr19jo/Sn9qyMYFrO9EcBn3mXw0kDzMzszMaLmBiEUat6tjK', '14MOEDnZ1OPu9qSm6wVGFUIFCye9xeh1OlOq3fxPvLvZcYIogBN954Quhw4Z', '2017-05-08 02:16:00', '2017-05-08 02:16:00', 1, 'Vijay', 'K', 'Verma', '1', '', '', ''),
(12, 'agenthussain@gmail.com', '$2y$10$4nqsPMOx2T01e1UKQ3U8R.RIO8UCHS8P3L2x3Jph9wQGEdhXSEaMC', NULL, '2017-05-24 05:41:07', '2017-05-29 04:39:58', 1, 'agent1', 'Y', 'sharma', '1', NULL, NULL, NULL),
(15, 'customer55888@gmail.com', '$2y$10$Xx0IEGv28zDi3VwyPNdzve0m7.tHMXSC.sVhjGpiZegjQAFdTIOHu', NULL, '2017-05-24 07:15:21', '2017-05-24 07:47:22', 1, 'customer8000000', 't88', 'g888', '1', NULL, NULL, NULL),
(19, 'dfdfd@gmail.com', '$2y$10$95YAfoszl.ZPszEPT.7cke9Zl.Uds79kanrdeRW02kIY5DDg74GHa', NULL, '2017-05-29 04:35:26', '2017-05-29 04:35:26', 1, 'dfdfd', 'fdfd', 'lssfd', '1', NULL, NULL, NULL),
(24, 'testdfdfdfdfdf@gmail.com', '$2y$10$kF8qEJsX40wQj608XfRV7u8FUucxkibS6r2Q3xCAl8ub8IUl9XB9i', NULL, '2017-05-29 04:38:06', '2017-05-29 04:38:06', 1, 'ddfd', 'd', 'dfdf', '1', NULL, NULL, NULL),
(25, 'mmm@hh.com', '$2y$10$grBJllswZiDStHv8RNp80OntNbnW71Q9Nhz6qnzT26eZLxpKPHp.6', NULL, '2017-05-29 04:40:18', '2017-05-29 04:40:18', 1, 'fdfdf', 'dfdf', 'dfdf', '1', NULL, NULL, NULL),
(26, 'test185@gmail.com', '$2y$10$e9xpiin2vMDhsH2vNiqQluQprmWWwRfMu/ANrUGcQ9O3mzPrGFDFe', NULL, '2017-05-29 04:41:41', '2017-05-29 04:41:41', 1, 'fdfdf', 'dfdf', 'dfdfd', '1', NULL, NULL, NULL),
(27, 'test1855@gmail.com', '$2y$10$cR5KgXCecciWqI9DVcSszeBD1cdra5HuH4A1DDhJZDudE7Dxyyjle', NULL, '2017-05-29 04:41:45', '2017-05-29 04:41:45', 1, 'fdfdf', 'dfdf', 'dfdfd', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
`id` int(10) unsigned NOT NULL,
  `cargoId` int(11) NOT NULL,
  `vin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` date NOT NULL,
  `key` int(11) NOT NULL,
  `title_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dismantled_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `cargoId`, `vin`, `make`, `model`, `type`, `year`, `key`, `title_status`, `title_number`, `state`, `color`, `operation_status`, `dismantled_status`, `created_at`, `updated_at`) VALUES
(3, 3, 'vjiay', 'dfdf', 'dffdfd', 'fdfd', '2018-10-20', 4, 'dfd', '43', 'dfdfd', 'bnbn', 'dfdf', 'dfnb', '2017-06-03 04:50:52', '2017-06-03 05:34:11'),
(4, 4, 'ererererfdfd', 'ereree', 'rererdfdf', 'erere', '2015-12-12', 55, 'fdfdfd', 'fdfdf', 'fdfdfdf', 'fdfd222', 'dfdfd', 'dfdfd', '2017-06-03 05:45:20', '2017-06-03 05:46:49'),
(5, 8, 'vcvcv', 'cvc', 'vcv', 'cvcv', '2017-05-22', 22, 'fdfd', 'dfd', 'fdfdf', 'dfdf', 'dfdfdf', 'fdf', '2017-06-05 04:32:25', '2017-06-05 04:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentsCustomers`
--
ALTER TABLE `agentsCustomers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargoTag`
--
ALTER TABLE `cargoTag`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargoTagGroup`
--
ALTER TABLE `cargoTagGroup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargoTagValue`
--
ALTER TABLE `cargoTagValue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargoTextTag`
--
ALTER TABLE `cargoTextTag`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companiesUsers`
--
ALTER TABLE `companiesUsers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corgoDocument`
--
ALTER TABLE `corgoDocument`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoiceItem`
--
ALTER TABLE `invoiceItem`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storageLocation`
--
ALTER TABLE `storageLocation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `agentsCustomers`
--
ALTER TABLE `agentsCustomers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cargoTag`
--
ALTER TABLE `cargoTag`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cargoTagGroup`
--
ALTER TABLE `cargoTagGroup`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cargoTagValue`
--
ALTER TABLE `cargoTagValue`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cargoTextTag`
--
ALTER TABLE `cargoTextTag`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `companiesUsers`
--
ALTER TABLE `companiesUsers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `corgoDocument`
--
ALTER TABLE `corgoDocument`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `invoiceItem`
--
ALTER TABLE `invoiceItem`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `storageLocation`
--
ALTER TABLE `storageLocation`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
