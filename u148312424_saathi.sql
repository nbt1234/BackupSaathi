-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 07:05 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u148312424_saathi`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `id` int(11) NOT NULL,
  `airlines_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `airlines_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IndiGo', '1680255464.jpg', '1', '', '2023-03-31 09:37:44'),
(2, 'Air India', '1680255441.jpg', '1', '', '2023-04-04 10:31:12'),
(3, 'SpiceJet', '1680255418.jpg', '1', '', '2023-03-31 09:36:58'),
(4, 'Go First', '1680255394.jpg', '1', '', '2023-03-31 09:36:34'),
(5, 'AirAsia India', '1680255372.jpg', '1', '', '2023-03-31 09:36:12'),
(6, 'Vistara', '1680255351.jpg', '1', '', '2023-03-31 09:35:51'),
(7, 'Alliance Air', '1680255324.jpg', '1', '', '2023-03-31 09:35:24'),
(8, 'TruJet', '1680255301.jpg', '1', '', '2023-03-31 09:35:01'),
(9, 'Emirates Airline', '1680255256.jpg', '1', '', '2023-03-31 09:34:16'),
(10, 'Qatar Airways', '1680255230.jpg', '1', '', '2023-03-31 09:33:50'),
(11, 'Air China', '1680255211.jpg', '0', '', '2023-04-04 11:17:58'),
(12, 'Asiana Airlines', '1680255191.jpg', '1', '', '2023-03-31 09:33:11'),
(13, 'Garuda Indonesia', '1680255100.jpg', '1', '', '2023-03-31 09:31:40'),
(14, 'Hainan Group', '1680255051.jpg', '1', '', '2023-04-04 10:17:19'),
(15, 'Jetstar', '1680255031.jpg', '1', '', '2023-03-31 09:30:31'),
(16, 'Lion Air', '1680254995.jpg', '1', '', '2023-04-04 10:31:02'),
(17, 'Malaysia Airlines', '1680254977.jpg', '1', '', '2023-03-31 09:29:37'),
(18, 'Alitalia', '1679917870.jpg', '1', '', '2023-04-18 13:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `username`, `email`, `password`, `mobile`, `pro_img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$yIj3EgE92ji1d0mvocMNreYJp4I62hNZLfq6U3mcMiK99lFXYfuXW', '7898653214', 'user_1.png', NULL, '2023-02-10 07:04:52', '2023-04-01 04:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `block_user`
--

CREATE TABLE `block_user` (
  `id` int(11) NOT NULL,
  `block_user_id` int(11) NOT NULL,
  `block_to` int(11) NOT NULL,
  `block_status` int(11) NOT NULL DEFAULT 1,
  `tour_id` int(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `block_user`
--

INSERT INTO `block_user` (`id`, `block_user_id`, `block_to`, `block_status`, `tour_id`, `updated_at`, `created_at`) VALUES
(48, 36, 37, 1, 983736, '2023-05-09 06:02:57', '2023-05-09 06:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_models`
--

CREATE TABLE `blogs_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs_models`
--

INSERT INTO `blogs_models` (`id`, `title`, `content`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nigro', 'she is african indian woman to reach in book fair in jaipur.', 'nigro', 'nigro.jpg', 'active', '2023-02-10 12:56:22', '2023-02-10 12:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `child_category_models`
--

CREATE TABLE `child_category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `child_slug` varchar(255) NOT NULL,
  `parent_cat` varchar(255) NOT NULL,
  `child_icon` varchar(255) NOT NULL,
  `child_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_category_models`
--

INSERT INTO `child_category_models` (`id`, `child_name`, `child_slug`, `parent_cat`, `child_icon`, `child_status`, `created_at`, `updated_at`) VALUES
(1, 'girls', 'girls', '1', 'girls.jpg', 'inactive', '2023-02-10 12:53:03', '2023-02-10 12:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `city_list_models`
--

CREATE TABLE `city_list_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_list_models`
--

INSERT INTO `city_list_models` (`id`, `image`, `city_name`, `status`, `created_at`, `updated_at`) VALUES
(37, '1680266620.jpg', 'Goa', '1', '2023-03-31 12:43:40', '2023-03-31 12:43:40'),
(38, '1680266640.jpg', 'tokiyo', '1', '2023-03-31 12:44:00', '2023-04-04 09:22:01'),
(40, '1680266670.jpg', 'sydeny', '1', '2023-03-31 12:44:30', '2023-03-31 12:44:30'),
(41, '1680266687.jpg', 'mexico', '1', '2023-03-31 12:44:47', '2023-03-31 12:44:47'),
(42, '1680266701.jpg', 'new york', '0', '2023-03-31 12:45:01', '2023-04-04 04:37:46'),
(43, '1680266716.jpg', 'jaipur', '1', '2023-03-31 12:45:16', '2023-04-04 04:38:44'),
(45, '1680266880.jpg', 'mumbai', '1', '2023-03-31 12:46:03', '2023-04-04 04:37:57'),
(46, '1680266916.jpg', 'delhi', '1', '2023-03-31 12:48:36', '2023-04-04 10:19:19'),
(51, '1680587816.jpg', 'Vishakhapatnam', '1', '2023-04-04 05:56:56', '2023-04-04 05:56:56'),
(52, '1680587883.jpg', 'Warangal', '1', '2023-04-04 05:58:03', '2023-04-04 05:58:03'),
(53, '1680587956.jpg', 'Chennai', '1', '2023-04-04 05:59:16', '2023-04-04 05:59:16'),
(54, '1680588012.jpg', 'Coimbatore', '1', '2023-04-04 06:00:12', '2023-04-04 06:00:12'),
(55, '1680588100.jpg', 'Kamalapuram', '1', '2023-04-04 06:01:40', '2023-04-04 06:01:40'),
(56, '1680588183.jpg', 'Tiruchirappalli', '1', '2023-04-04 06:03:03', '2023-04-04 06:03:03'),
(57, '1680588272.jpg', 'Puducherry', '1', '2023-04-04 06:04:32', '2023-04-04 06:04:32'),
(58, '1680588334.jpg', 'Donakonda', '1', '2023-04-04 06:05:34', '2023-04-04 06:05:34'),
(59, '1680588467.jpg', 'Hyderabad', '1', '2023-04-04 06:07:47', '2023-04-04 06:07:47'),
(60, '1680588620.jpg', 'Kadapa', '1', '2023-04-04 06:10:20', '2023-04-04 06:10:20'),
(61, '1680588667.jpg', 'Kurnool', '1', '2023-04-04 06:11:07', '2023-04-04 06:11:07'),
(62, '1680588709.jpg', 'Nellore', '1', '2023-04-04 06:11:49', '2023-04-04 06:11:49'),
(63, '1680589113.jpg', 'Rajahmundry', '1', '2023-04-04 06:18:33', '2023-04-04 06:18:33'),
(64, '1680589193.jpg', 'Aalo', '1', '2023-04-04 06:19:53', '2023-04-04 06:19:53'),
(65, '1680589230.jpg', 'Itanagar', '1', '2023-04-04 06:20:30', '2023-04-04 06:20:30'),
(66, '1680589292.jpg', 'Mechuka', '1', '2023-04-04 06:21:32', '2023-04-04 06:21:32'),
(67, '1680589353.jpg', 'Tuting', '1', '2023-04-04 06:22:33', '2023-04-04 06:22:33'),
(68, '1680589408.jpg', 'Walong', '1', '2023-04-04 06:23:28', '2023-04-04 06:23:28'),
(69, '1680589459.jpg', 'Guwahati', '1', '2023-04-04 06:24:19', '2023-04-04 06:24:19'),
(70, '1680589531.jpg', 'Patna', '1', '2023-04-04 06:25:31', '2023-04-04 06:25:31'),
(71, '1680589586.jpg', 'Raipur', '1', '2023-04-04 06:26:26', '2023-04-04 06:26:26'),
(72, '1680589636.jpg', 'Dabolim', '1', '2023-04-04 06:27:16', '2023-04-04 06:27:16'),
(73, '1680589707.jpg', 'Mopa', '1', '2023-04-04 06:28:27', '2023-04-04 06:28:27'),
(74, '1680589765.jpg', 'Ahmedabad', '1', '2023-04-04 06:29:25', '2023-04-04 06:29:25'),
(75, '1680589800.jpg', 'Bhuj', '1', '2023-04-04 06:30:00', '2023-04-04 06:30:00'),
(76, '1680589827.jpg', 'Jamnagar', '1', '2023-04-04 06:30:27', '2023-04-04 06:30:27'),
(77, '1680589926.jpg', 'Surat', '1', '2023-04-04 06:32:06', '2023-04-04 06:32:06'),
(78, '1680589981.jpg', 'Ranchi', '1', '2023-04-04 06:33:01', '2023-04-04 06:33:01'),
(79, '1680590052.jpg', 'Shimla', '1', '2023-04-04 06:34:12', '2023-04-04 06:34:12'),
(80, '1680590120.jpg', 'Bengaluru', '1', '2023-04-04 06:35:20', '2023-04-04 06:35:20'),
(81, '1680590169.jpg', 'Ballari', '1', '2023-04-04 06:36:09', '2023-04-04 06:36:09'),
(82, '1680590210.jpg', 'Chitradurga', '1', '2023-04-04 06:36:50', '2023-04-04 06:36:50'),
(83, '1680590270.jpg', 'Mangaluru', '1', '2023-04-04 06:37:50', '2023-04-04 06:37:50'),
(84, '1680590317.jpg', 'Idukki', '1', '2023-04-04 06:38:37', '2023-04-04 06:38:37'),
(85, '1680590379.jpg', 'Kannur', '1', '2023-04-04 06:39:39', '2023-04-04 06:39:39'),
(86, '1680590422.jpg', 'Kochi', '1', '2023-04-04 06:40:22', '2023-04-04 06:40:22'),
(87, '1680590454.jpg', 'Thiruvambady', '1', '2023-04-04 06:40:54', '2023-04-04 06:40:54'),
(88, '1680590497.jpg', 'Bhopal', '1', '2023-04-04 06:41:37', '2023-04-04 06:41:37'),
(89, '1680590539.jpg', 'Indore', '1', '2023-04-04 06:42:19', '2023-04-04 06:42:19'),
(90, '1680590595.jpg', 'Amravati', '1', '2023-04-04 06:43:15', '2023-04-04 06:43:15'),
(91, '1680590718.jpg', 'Nagpur', '1', '2023-04-04 06:45:18', '2023-04-04 06:45:18'),
(92, '1680590764.jpg', 'Nashik', '1', '2023-04-04 06:46:04', '2023-04-04 06:46:04'),
(93, '1680590854.jpg', 'Navi Mumbai', '1', '2023-04-04 06:47:34', '2023-04-04 06:47:34'),
(94, '1680590934.jpg', 'Pune', '1', '2023-04-04 06:48:54', '2023-04-04 06:48:54'),
(95, '1680591058.jpg', 'Imphal', '1', '2023-04-04 06:50:58', '2023-04-04 09:44:37'),
(96, '1680591185.jpg', 'Shillong', '1', '2023-04-04 06:53:05', '2023-04-04 06:53:05'),
(97, '1680591230.jpg', 'Bhubaneswar', '1', '2023-04-04 06:53:50', '2023-04-04 11:17:28'),
(98, '1680591282.jpg', 'Vellore', '1', '2023-04-04 06:54:42', '2023-04-05 09:05:34'),
(99, '1680874056.jpg', 'Kerala', '1', '2023-04-07 13:27:36', '2023-04-18 11:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `language_code` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language_code`) VALUES
(1, 'English', 'en'),
(2, 'Afar', 'aa'),
(3, 'Abkhazian', 'ab'),
(4, 'Afrikaans', 'af'),
(5, 'Amharic', 'am'),
(6, 'Arabic', 'ar'),
(7, 'Assamese', 'as'),
(8, 'Aymara', 'ay'),
(9, 'Azerbaijani', 'az'),
(10, 'Bashkir', 'ba'),
(11, 'Belarusian', 'be'),
(12, 'Bulgarian', 'bg'),
(13, 'Bihari', 'bh'),
(14, 'Bislama', 'bi'),
(15, 'Bengali/Bangla', 'bn'),
(16, 'Tibetan', 'bo'),
(17, 'Breton', 'br'),
(18, 'Catalan', 'ca'),
(19, 'Corsican', 'co'),
(20, 'Czech', 'cs'),
(21, 'Welsh', 'cy'),
(22, 'Danish', 'da'),
(23, 'German', 'de'),
(24, 'Bhutani', 'dz'),
(25, 'Greek', 'el'),
(26, 'Esperanto', 'eo'),
(27, 'Spanish', 'es'),
(28, 'Estonian', 'et'),
(29, 'Basque', 'eu'),
(30, 'Persian', 'fa'),
(31, 'Finnish', 'fi'),
(32, 'Fiji', 'fj'),
(33, 'Faeroese', 'fo'),
(34, 'French', 'fr'),
(35, 'Frisian', 'fy'),
(36, 'Irish', 'ga'),
(37, 'Scots/Gaelic', 'gd'),
(38, 'Galician', 'gl'),
(39, 'Guarani', 'gn'),
(40, 'Gujarati', 'gu'),
(41, 'Hausa', 'ha'),
(42, 'Hindi', 'hi'),
(43, 'Croatian', 'hr'),
(44, 'Hungarian', 'hu'),
(45, 'Armenian', 'hy'),
(46, 'Interlingua', 'ia'),
(47, 'Interlingue', 'ie'),
(48, 'Inupiak', 'ik'),
(49, 'Indonesian', 'in'),
(50, 'Icelandic', 'is'),
(51, 'Italian', 'it'),
(52, 'Hebrew', 'iw'),
(53, 'Japanese', 'ja'),
(54, 'Yiddish', 'ji'),
(55, 'Javanese', 'jw'),
(56, 'Georgian', 'ka'),
(57, 'Kazakh', 'kk'),
(58, 'Greenlandic', 'kl'),
(59, 'Cambodian', 'km'),
(60, 'Kannada', 'kn'),
(61, 'Korean', 'ko'),
(62, 'Kashmiri', 'ks'),
(63, 'Kurdish', 'ku'),
(64, 'Kirghiz', 'ky'),
(65, 'Latin', 'la'),
(66, 'Lingala', 'ln'),
(67, 'Laothian', 'lo'),
(68, 'Lithuanian', 'lt'),
(69, 'Latvian/Lettish', 'lv'),
(70, 'Malagasy', 'mg'),
(71, 'Maori', 'mi'),
(72, 'Macedonian', 'mk'),
(73, 'Malayalam', 'ml'),
(74, 'Mongolian', 'mn'),
(75, 'Moldavian', 'mo'),
(76, 'Marathi', 'mr'),
(77, 'Malay', 'ms'),
(78, 'Maltese', 'mt'),
(79, 'Burmese', 'my'),
(80, 'Nauru', 'na'),
(81, 'Nepali', 'ne'),
(82, 'Dutch', 'nl'),
(83, 'Norwegian', 'no'),
(84, 'Occitan', 'oc'),
(85, '(Afan)/Oromoor/Oriya', 'om'),
(86, 'Punjabi', 'pa'),
(87, 'Polish', 'pl'),
(88, 'Pashto/Pushto', 'ps'),
(89, 'Portuguese', 'pt'),
(90, 'Quechua', 'qu'),
(91, 'Rhaeto-Romance', 'rm'),
(92, 'Kirundi', 'rn'),
(93, 'Romanian', 'ro'),
(94, 'Russian', 'ru'),
(95, 'Kinyarwanda', 'rw'),
(96, 'Sanskrit', 'sa'),
(97, 'Sindhi', 'sd'),
(98, 'Sangro', 'sg'),
(99, 'Serbo-Croatian', 'sh'),
(100, 'Singhalese', 'si'),
(101, 'Slovak', 'sk'),
(102, 'Slovenian', 'sl'),
(103, 'Samoan', 'sm'),
(104, 'Shona', 'sn'),
(105, 'Somali', 'so'),
(106, 'Albanian', 'sq'),
(107, 'Serbian', 'sr'),
(108, 'Siswati', 'ss'),
(109, 'Sesotho', 'st'),
(110, 'Sundanese', 'su'),
(111, 'Swedish', 'sv'),
(112, 'Swahili', 'sw'),
(113, 'Tamil', 'ta'),
(114, 'Telugu', 'te'),
(115, 'Tajik', 'tg'),
(116, 'Thai', 'th'),
(117, 'Tigrinya', 'ti'),
(118, 'Turkmen', 'tk'),
(119, 'Tagalog', 'tl'),
(120, 'Setswana', 'tn'),
(121, 'Tonga', 'to'),
(122, 'Turkish', 'tr'),
(123, 'Tsonga', 'ts'),
(124, 'Tatar', 'tt'),
(125, 'Twi', 'tw'),
(126, 'Ukrainian', 'uk'),
(127, 'Urdu', 'ur'),
(128, 'Uzbek', 'uz'),
(129, 'Vietnamese', 'vi'),
(130, 'Volapuk', 'vo'),
(131, 'Wolof', 'wo'),
(132, 'Xhosa', 'xh'),
(133, 'Yoruba', 'yo'),
(134, 'Chinese', 'zh'),
(135, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `grp_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=unblock, 0=block',
  `message` longtext NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0 COMMENT '0=not seen, 1= seen',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `grp_id`, `tour_id`, `sender_id`, `receiver_id`, `status`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(6, 903226, 90, 26, 32, 1, 'hello ram', 0, '2023-04-11 12:29:38', '2023-04-11 12:29:38'),
(7, 913230, 91, 30, 32, 1, 'Hello', 0, '2023-04-11 12:36:42', '2023-04-11 12:36:42'),
(8, 913230, 91, 32, 30, 1, 'hey', 0, '2023-04-11 12:36:59', '2023-04-11 12:36:59'),
(9, 913230, 91, 32, 30, 1, 'hey', 0, '2023-04-11 12:36:59', '2023-04-11 12:36:59'),
(10, 913230, 91, 30, 32, 1, 'hyyi', 0, '2023-04-11 12:37:13', '2023-04-11 12:37:13'),
(11, 913230, 91, 30, 32, 1, 'Hey', 0, '2023-04-11 12:37:25', '2023-04-11 12:37:25'),
(12, 913230, 91, 30, 32, 1, 'Hey', 0, '2023-04-11 12:37:25', '2023-04-11 12:37:25'),
(13, 913230, 91, 30, 32, 1, 'Hello', 0, '2023-04-11 12:37:46', '2023-04-11 12:37:46'),
(14, 913230, 91, 30, 32, 1, 'Hello', 0, '2023-04-11 12:37:47', '2023-04-11 12:37:47'),
(15, 913230, 91, 30, 32, 1, 'hhgs', 0, '2023-04-11 12:37:53', '2023-04-11 12:37:53'),
(16, 913230, 91, 30, 32, 1, 'hshhdh', 0, '2023-04-11 12:38:08', '2023-04-11 12:38:08'),
(17, 913230, 91, 30, 32, 1, 'hshhdh', 0, '2023-04-11 12:38:09', '2023-04-11 12:38:09'),
(18, 913230, 91, 30, 32, 1, 'fftgggg', 0, '2023-04-11 12:38:36', '2023-04-11 12:38:36'),
(19, 913230, 91, 30, 32, 1, 'fftgggg', 0, '2023-04-11 12:38:36', '2023-04-11 12:38:36'),
(20, 913230, 91, 30, 32, 1, 'fftgggg', 0, '2023-04-11 12:38:37', '2023-04-11 12:38:37'),
(21, 913230, 91, 30, 32, 1, 'fftgggg', 0, '2023-04-11 12:38:37', '2023-04-11 12:38:37'),
(22, 913230, 91, 30, 32, 1, 'fftgggg', 0, '2023-04-11 12:38:37', '2023-04-11 12:38:37'),
(23, 913230, 91, 30, 32, 1, 'fftgggg', 0, '2023-04-11 12:38:37', '2023-04-11 12:38:37'),
(24, 913230, 91, 32, 30, 1, 'gud evening', 0, '2023-04-11 12:38:43', '2023-04-11 12:38:43'),
(25, 913230, 91, 32, 30, 1, 'gud evening', 1, '2023-04-11 12:38:43', '2023-04-13 12:40:46'),
(26, 903226, 90, 32, 26, 1, 'fhfhfhf', 0, '2023-04-11 12:39:39', '2023-04-11 12:39:39'),
(27, 573330, 57, 30, 33, 1, 'Hello', 1, '2023-04-11 12:39:53', '2023-04-17 01:53:37'),
(39, 903226, 90, 26, 32, 1, 'jjj', 1, '2023-04-11 12:46:36', '2023-04-12 08:35:49'),
(41, 903230, 90, 30, 32, 1, 'Hello', 0, '2023-04-11 12:47:40', '2023-04-12 07:06:20'),
(42, 903230, 90, 30, 32, 1, 'haha', 0, '2023-04-11 12:47:47', '2023-04-12 07:06:20'),
(43, 873230, 87, 30, 32, 1, 'Hello', 0, '2023-04-11 12:48:32', '2023-04-11 12:48:32'),
(44, 873230, 87, 32, 30, 1, 'hello gud evening', 0, '2023-04-11 12:48:49', '2023-04-11 12:48:49'),
(45, 873230, 87, 30, 32, 1, 'How r you', 0, '2023-04-11 12:48:57', '2023-04-11 12:48:57'),
(46, 903230, 90, 32, 30, 1, 'hello sir', 0, '2023-04-11 12:49:01', '2023-04-12 07:06:20'),
(47, 873230, 87, 32, 30, 1, 'fine', 1, '2023-04-11 12:49:13', '2023-04-13 12:40:18'),
(48, 903230, 90, 30, 32, 1, 'Fine', 0, '2023-04-11 12:49:26', '2023-04-12 07:06:20'),
(49, 903230, 90, 32, 30, 1, 'hello', 0, '2023-04-11 12:49:37', '2023-04-12 07:06:20'),
(50, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:54', '2023-04-12 07:06:20'),
(51, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:55', '2023-04-12 07:06:20'),
(52, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:55', '2023-04-12 07:06:20'),
(53, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:55', '2023-04-12 07:06:20'),
(54, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:55', '2023-04-12 07:06:20'),
(55, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:55', '2023-04-12 07:06:20'),
(56, 903230, 90, 30, 32, 1, 'fgggg', 0, '2023-04-11 12:50:55', '2023-04-12 07:06:20'),
(57, 903230, 90, 30, 32, 1, 'cfggg', 0, '2023-04-11 12:51:47', '2023-04-12 07:06:20'),
(58, 903230, 90, 32, 30, 1, 'hello', 0, '2023-04-11 12:53:22', '2023-04-12 07:06:20'),
(59, 903230, 90, 30, 32, 1, 'ghd', 0, '2023-04-11 12:53:29', '2023-04-12 07:06:20'),
(60, 903230, 90, 30, 32, 1, 'rtyu', 0, '2023-04-11 12:54:51', '2023-04-12 07:06:20'),
(61, 903230, 90, 32, 30, 1, 'vdhdbd', 0, '2023-04-11 13:02:32', '2023-04-12 07:06:20'),
(62, 903230, 90, 32, 30, 1, 'gsgsgsgdgs', 0, '2023-04-11 13:02:46', '2023-04-12 07:06:20'),
(63, 903230, 90, 32, 30, 1, 'gsgsg', 0, '2023-04-11 13:03:56', '2023-04-12 07:06:20'),
(64, 903230, 90, 32, 30, 1, 'ghhhhh', 1, '2023-04-11 13:04:47', '2023-04-13 12:40:32'),
(65, 913227, 91, 27, 32, 1, 'vvvvv', 0, '2023-04-12 04:30:13', '2023-04-12 04:30:13'),
(66, 913227, 91, 27, 32, 1, 'thjdfhhg', 0, '2023-04-12 04:55:04', '2023-04-12 04:55:04'),
(67, 913227, 91, 27, 32, 1, 'ghhh', 0, '2023-04-12 04:59:08', '2023-04-12 05:42:51'),
(73, 913227, 91, 32, 27, 1, 'hhhh', 0, '2023-04-12 06:58:42', '2023-04-12 06:58:42'),
(74, 913227, 91, 32, 27, 1, 'bbn', 0, '2023-04-12 06:59:42', '2023-04-12 06:59:42'),
(75, 913227, 91, 32, 27, 1, 'jjjj', 1, '2023-04-12 07:02:13', '2023-04-18 06:50:59'),
(285, 873230, 87, 30, 32, 1, 'Hello', 1, '2023-04-13 12:40:25', '2023-04-13 12:41:12'),
(286, 903230, 90, 30, 32, 1, 'Hello', 1, '2023-04-13 12:40:38', '2023-04-13 12:41:07'),
(287, 913230, 91, 30, 32, 1, 'Hello', 1, '2023-04-13 12:40:52', '2023-04-13 12:43:08'),
(288, 873230, 87, 32, 30, 1, 'fhd', 1, '2023-04-13 12:41:16', '2023-04-13 12:42:14'),
(292, 913230, 91, 32, 30, 1, 'hey', 1, '2023-04-13 12:43:12', '2023-04-18 06:59:36'),
(301, 573331, 57, 31, 33, 1, 'hello srini', 1, '2023-04-17 01:50:41', '2023-04-17 01:53:21'),
(302, 573331, 57, 33, 31, 1, 'hello how r u', 0, '2023-04-17 01:53:25', '2023-04-17 01:53:25'),
(303, 573331, 57, 33, 31, 1, 'when arw u planning to travel', 1, '2023-04-17 01:53:34', '2023-04-30 16:42:29'),
(304, 573330, 57, 33, 30, 1, 'hello', 1, '2023-04-17 01:53:40', '2023-04-27 06:39:59'),
(305, 533133, 53, 33, 31, 1, 'hello', 1, '2023-04-17 01:53:57', '2023-04-30 16:42:27'),
(318, 913227, 91, 27, 32, 1, 'ucufcyc', 0, '2023-04-18 06:51:03', '2023-04-18 06:51:03'),
(319, 953227, 95, 27, 32, 1, 'fgghhhhg', 0, '2023-04-18 06:53:04', '2023-04-18 06:53:04'),
(320, 953227, 95, 27, 32, 1, 'fcc cc', 0, '2023-04-18 06:53:23', '2023-04-18 06:53:23'),
(321, 953230, 95, 30, 32, 1, 'Hello', 0, '2023-04-18 06:58:32', '2023-04-18 06:58:32'),
(384, 903231, 90, 31, 32, 1, 'hi', 0, '2023-04-29 01:40:47', '2023-04-29 01:40:47'),
(385, 972631, 97, 31, 26, 1, 'hi', 0, '2023-04-29 01:44:23', '2023-04-29 01:44:23'),
(386, 972631, 97, 31, 26, 1, 'hey', 0, '2023-04-29 01:44:36', '2023-04-29 01:44:36'),
(387, 973130, 97, 30, 31, 1, 'hello', 0, '2023-05-03 07:18:42', '2023-05-03 07:18:42'),
(390, 983736, 98, 36, 37, 1, 'hhhgg', 1, '2023-05-05 11:05:40', '2023-05-05 11:54:07'),
(391, 983736, 98, 37, 36, 1, 'hsbd', 1, '2023-05-05 11:54:10', '2023-05-05 12:02:30'),
(392, 993839, 99, 39, 38, 1, 'hello', 0, '2023-05-09 02:19:10', '2023-05-09 02:19:10'),
(393, 993839, 99, 39, 38, 1, 'i am also looking for chicago delhi', 1, '2023-05-09 02:19:21', '2023-05-09 02:20:55'),
(394, 993839, 99, 38, 39, 1, 'okay', 0, '2023-05-09 02:21:01', '2023-05-09 02:21:01'),
(395, 993839, 99, 38, 39, 1, 'what datea u prefer', 0, '2023-05-09 02:21:06', '2023-05-09 02:21:06'),
(396, 993839, 99, 38, 39, 1, '15th sep', 1, '2023-05-09 02:29:55', '2023-05-09 02:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_17_101833_all_users', 1),
(6, '2022_06_09_113839_create_parent_category_models_table', 1),
(7, '2022_06_13_093223_create_child_category_models_table', 1),
(8, '2022_06_14_051917_create_sub_child_category_models_table', 1),
(9, '2022_06_14_122941_create_subadmin_models_table', 1),
(10, '2022_11_28_102337_create_pages_models_table', 1),
(11, '2022_12_06_082713_create_blogs_models_table', 1),
(12, '2023_02_10_120015_create_user_models_table', 1),
(13, '2023_02_11_062028_create__user_registers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages_models`
--

CREATE TABLE `pages_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_category_models`
--

CREATE TABLE `parent_category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_slug` varchar(255) NOT NULL,
  `parent_icon` varchar(255) NOT NULL,
  `parent_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_category_models`
--

INSERT INTO `parent_category_models` (`id`, `parent_name`, `parent_slug`, `parent_icon`, `parent_status`, `created_at`, `updated_at`) VALUES
(1, 'mom', 'mom', 'mom.jpg', 'active', '2023-02-10 12:52:24', '2023-02-10 12:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Api\\UserRegisterModel', 15, '1234567890', '81bc0b828b96657e58dfa7eb5277c91981203aeea8225523f0cef212070721a0', '[\"*\"]', '2023-02-15 10:12:13', '2023-02-14 10:42:05', '2023-02-15 10:12:13'),
(2, 'App\\Models\\Api\\UserRegisterModel', 22, '8888888888', '903c1013a2d05fed2aeb2f017d4abb32d7ab6b602198a26a8c4185f521822f01', '[\"*\"]', NULL, '2023-02-14 11:44:04', '2023-02-14 11:44:04'),
(3, 'App\\Models\\Api\\UserRegisterModel', 22, '8888888888', '0d7f2ae4b9f45381b6af2dc3449900dd3fc5ac099c5a9882b05c479fb1fbaf91', '[\"*\"]', NULL, '2023-02-14 11:58:02', '2023-02-14 11:58:02'),
(4, 'App\\Models\\Api\\UserRegisterModel', 22, '8888888888', 'f479f38b02a1b221fe49cb2a71a62231396c785438507e8b9dd85e4126b6eee4', '[\"*\"]', NULL, '2023-02-14 12:07:48', '2023-02-14 12:07:48'),
(5, 'App\\Models\\Api\\UserRegisterModel', 22, '8888888888', '149205b65922926deebd551a33fa8c06c4cc44f08597d1d9c0068a8c0e480461', '[\"*\"]', NULL, '2023-02-14 12:08:03', '2023-02-14 12:08:03'),
(6, 'App\\Models\\Api\\UserRegisterModel', 22, '8888888888', '52fbb6547719e0ebda873d683bcbd4309a8f3900548ed31c39ae73a2671b4438', '[\"*\"]', NULL, '2023-02-15 04:15:53', '2023-02-15 04:15:53'),
(7, 'App\\Models\\Api\\UserRegisterModel', 12, '9610454545', 'd77ef6c2abe6e8c756d6e6b52247b49c3d0f0067f2d9c6c75eefc1f87d7574fc', '[\"*\"]', NULL, '2023-02-15 08:54:07', '2023-02-15 08:54:07'),
(8, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '20b6e2f40d7818f105cc552c7cb05214d67d397a17815d944a4b23e9444b98b0', '[\"*\"]', NULL, '2023-02-15 09:21:47', '2023-02-15 09:21:47'),
(9, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'f70f7b1e1561492545c69ff491cbc029cf8c78ec1ec20b0002cc35691e9e4ef0', '[\"*\"]', NULL, '2023-02-15 09:22:06', '2023-02-15 09:22:06'),
(10, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'a232b4e713f24922fc67970ed51d59a781c93d30983abb9cf2a808fbb2963ff7', '[\"*\"]', NULL, '2023-02-15 09:31:01', '2023-02-15 09:31:01'),
(11, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '664554e85f7a6e09048fa89730378c828576fd0ba95872bbcdcc75d6acc76d42', '[\"*\"]', NULL, '2023-02-15 09:44:29', '2023-02-15 09:44:29'),
(12, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'c3ddc8a2137fef2be0aeff85833dfa63ccf76b366456401e65475e1ad9256bf1', '[\"*\"]', NULL, '2023-02-15 09:47:13', '2023-02-15 09:47:13'),
(13, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '4da90d9dc0546a2af83bbe9e4b5e78ebba13fa33132fa3816c7277fc85a5ae2b', '[\"*\"]', NULL, '2023-02-15 09:48:00', '2023-02-15 09:48:00'),
(14, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '2f03b6ee4eeb91b5d4c4e0840d1981c78eb3d42654eca4984833840a11faf793', '[\"*\"]', NULL, '2023-02-15 09:51:53', '2023-02-15 09:51:53'),
(15, 'App\\Models\\Api\\UserRegisterModel', 12, '9610454545', 'c472e21dc68c8f705d7fd114753c86e953d1f5a279352342b8f1f0519a950cc0', '[\"*\"]', NULL, '2023-02-15 09:53:41', '2023-02-15 09:53:41'),
(16, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '25e2a1948d1147082c98a121d7f453e51aec5fe6057cd77a951296d0b1b55b24', '[\"*\"]', NULL, '2023-02-15 09:55:58', '2023-02-15 09:55:58'),
(17, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '3784f6d7da15befad55e0e147b459c40cffc9c201708a49b9c85c7d75821053f', '[\"*\"]', NULL, '2023-02-15 09:57:09', '2023-02-15 09:57:09'),
(18, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '3590b9f097b4131d21177fbfd37799306ef1354942a317937f10f5f766eb26ce', '[\"*\"]', NULL, '2023-02-15 10:03:04', '2023-02-15 10:03:04'),
(19, 'App\\Models\\Api\\UserRegisterModel', 12, '9610454545', '8d6aad3c163e7ce9ff6caeddcfbf31e506fac3abe43a068955b1eceac20bd51f', '[\"*\"]', NULL, '2023-02-15 10:12:39', '2023-02-15 10:12:39'),
(20, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '5be896f728c7336099db02d603206c399bf6e2231fabd64cd58ffa7574f308c4', '[\"*\"]', NULL, '2023-02-15 10:13:27', '2023-02-15 10:13:27'),
(21, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '68343507756d9403f5680dba1961ac747ac0275ce4908700a94bab629b003b81', '[\"*\"]', NULL, '2023-02-15 11:34:21', '2023-02-15 11:34:21'),
(22, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '8050cb474c83f9639844069c52b0948e788446e67a3a1623405025981f158f33', '[\"*\"]', NULL, '2023-02-15 11:59:55', '2023-02-15 11:59:55'),
(23, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '92b0659b53d48526299cefa6b29b9fb7a56dbd146aa34686984f46a08870a86d', '[\"*\"]', NULL, '2023-02-15 12:01:46', '2023-02-15 12:01:46'),
(24, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '12b828da78689f5319666f17530e4e91932d3d6a3da6497bf32f530d7743a0b2', '[\"*\"]', NULL, '2023-02-15 12:03:58', '2023-02-15 12:03:58'),
(25, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '4fece346d7253184b11f278ad1ed8bceda0b44ae758b56fce880c0c671ccd132', '[\"*\"]', NULL, '2023-02-15 12:19:44', '2023-02-15 12:19:44'),
(26, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '0aafcb3a629c0afbffb4e6d4eb78d8fb35f4c86dd83f6b9d808c8606d4281165', '[\"*\"]', NULL, '2023-02-15 12:25:19', '2023-02-15 12:25:19'),
(27, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '3a597231a2411f78a31a5b08a159a1ee7c132b04a4382dbd6963ea999c284915', '[\"*\"]', NULL, '2023-02-15 12:27:29', '2023-02-15 12:27:29'),
(28, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '443ade3d853b18eec26a86b3fba7fafd613408a7fd12187f71b19299a74d40b2', '[\"*\"]', NULL, '2023-02-15 12:28:52', '2023-02-15 12:28:52'),
(29, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'c9a7d3496aa3b932b3c60a13119698b1adf95328dd3789abf24dad896b7af6f6', '[\"*\"]', NULL, '2023-02-15 12:29:53', '2023-02-15 12:29:53'),
(30, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'ec193fe726cb73269ed6ec0c661125d2e9051afd1c6b9e342412459c9d33d092', '[\"*\"]', NULL, '2023-02-15 12:32:09', '2023-02-15 12:32:09'),
(31, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '8e920229fe3de90ba70f73bfaa9f58b6d3df90aa18b96c041386c2f123775756', '[\"*\"]', NULL, '2023-02-15 12:36:55', '2023-02-15 12:36:55'),
(32, 'App\\Models\\Api\\UserRegisterModel', 12, '9610454545', '90d37e8e4bc66572a4a2821f6ce4b2db97746725f2e42776d1fdb5f421bc5b54', '[\"*\"]', '2023-02-15 13:07:36', '2023-02-15 12:43:01', '2023-02-15 13:07:36'),
(33, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'b7c9e8b548a3f39aff0ab1ccd15552b6e6f5e8c373b793a40a524ac4474693ef', '[\"*\"]', NULL, '2023-02-16 05:06:24', '2023-02-16 05:06:24'),
(34, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '21a78eeb162a787cfd4d202441256b2e79f44399ff3e702b946853c5659829c3', '[\"*\"]', NULL, '2023-02-16 05:07:30', '2023-02-16 05:07:30'),
(35, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '2d75fc85fcf4e11f566f314515edf3cf4f12ccd14a63c5bd5c67aab6834c70c3', '[\"*\"]', NULL, '2023-02-16 05:07:42', '2023-02-16 05:07:42'),
(36, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '48d3b07d0070b76d3dc005a7f8fa2d1ad7c53c71a0358efd4947e208d44cd362', '[\"*\"]', NULL, '2023-02-16 05:08:26', '2023-02-16 05:08:26'),
(37, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '0449675573bc70e181d85eb295054d263feb7b8edf81d7c85544dd42c6b79543', '[\"*\"]', NULL, '2023-02-16 05:08:47', '2023-02-16 05:08:47'),
(38, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'a111a178db76814d5a8c5ce6ba004d3622c2770302ec68eb6a290d004e2063c1', '[\"*\"]', NULL, '2023-02-16 05:09:00', '2023-02-16 05:09:00'),
(39, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'faba328a0b8cc6138d843d740ccc53212341f10c6116ef8115dcb9f3d17f5ea9', '[\"*\"]', NULL, '2023-02-16 05:10:22', '2023-02-16 05:10:22'),
(40, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '4f5eb80e3ce9a45e0aeee1bbee224bce47063dcdea5d256564dc352461d5f551', '[\"*\"]', NULL, '2023-02-16 05:35:31', '2023-02-16 05:35:31'),
(41, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '0bd765d94f773a248aa4f89c7f3824c25b65b46654ff0ce1aaf7da729c3fabec', '[\"*\"]', NULL, '2023-02-16 06:24:50', '2023-02-16 06:24:50'),
(42, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '45a8217b230227fb2ba00768872a12b2c35e78080e6d7b7170a00da43222805e', '[\"*\"]', NULL, '2023-02-16 06:31:52', '2023-02-16 06:31:52'),
(43, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '52de8ac33f54faa696c645a4b14c0ab580a6c642a3c4e9948d416bcb04c71469', '[\"*\"]', NULL, '2023-02-16 06:33:51', '2023-02-16 06:33:51'),
(44, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '6dea21e6d2dcf716117bc3d7a2a65a0b333d57698f82f350c83e58ea15a34e16', '[\"*\"]', NULL, '2023-02-16 06:37:51', '2023-02-16 06:37:51'),
(45, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '08188228648d4f73de84a8b887fc9ff042a6ad83ee01541e745036c457280c1a', '[\"*\"]', NULL, '2023-02-16 06:44:44', '2023-02-16 06:44:44'),
(46, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '44223cacfda28eb723460380efccfcf1061b6e995f1f5d281c7ee7cc92a2d95a', '[\"*\"]', NULL, '2023-02-16 06:49:07', '2023-02-16 06:49:07'),
(47, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '17f92b70cec57bb5eee6a65ccec7491f5c934ba2987d8c04057a3ae5d2668e5c', '[\"*\"]', NULL, '2023-02-16 07:15:55', '2023-02-16 07:15:55'),
(48, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '1751487503833624633f4b6cbbf6504184c954146ac6750fa0d35385596cc0f1', '[\"*\"]', NULL, '2023-02-21 06:21:48', '2023-02-21 06:21:48'),
(49, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '9514834b1abea5a4bc20fba7d065fac3ed910980557ea75da9dad3e52585bc8a', '[\"*\"]', NULL, '2023-02-21 11:08:19', '2023-02-21 11:08:19'),
(50, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '73e179e60e71425f78d6c66c51afa1bcf2ceb40ec070d79a2b4140f17e415366', '[\"*\"]', NULL, '2023-02-22 11:57:03', '2023-02-22 11:57:03'),
(51, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'c451aa892b8014ac5eebb1eae01a2c56dc36c0acf9e2f23d501f9e15338ebec5', '[\"*\"]', NULL, '2023-02-24 05:02:40', '2023-02-24 05:02:40'),
(52, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '4b6fac4c0d85f5462550ac1cf03e2a1eea7d10443cae38902d45c372687407b0', '[\"*\"]', NULL, '2023-02-25 07:13:11', '2023-02-25 07:13:11'),
(53, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '0dde27cdf12281a55aa38b586853be39a62d50fb2083fb1441718f315937792f', '[\"*\"]', NULL, '2023-02-25 08:21:24', '2023-02-25 08:21:24'),
(54, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', 'dd272a521c404ff851f9bdc920d5f805f504367a616a7c106750ecf431aa5afb', '[\"*\"]', NULL, '2023-02-25 08:25:24', '2023-02-25 08:25:24'),
(55, 'App\\Models\\Api\\UserRegisterModel', 30, '8890888123', '61b1fd89b0c4ede3607e9b9df8f806ececbe69ad3771e20b47d911b5dc05f681', '[\"*\"]', NULL, '2023-02-25 10:03:45', '2023-02-25 10:03:45'),
(56, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'fa6680f3df9fd33080595f4557d1f11285fc894dcd438e8ca4c3f181a56476bf', '[\"*\"]', NULL, '2023-02-27 04:04:51', '2023-02-27 04:04:51'),
(57, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'd5f1b2ede4c8f70a0d6d77844d97ac830beca38841f0f2141263d7f7317400d7', '[\"*\"]', NULL, '2023-02-27 04:14:15', '2023-02-27 04:14:15'),
(58, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '3bac70d4a65523d882eae37efe065c82888ef6d9d6df3598a07be04cbe366ca1', '[\"*\"]', NULL, '2023-02-27 05:24:28', '2023-02-27 05:24:28'),
(59, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'd6ba3a213026b7124246715927270dd8768bb3e134c11000c4e6e043e2260c23', '[\"*\"]', NULL, '2023-02-27 05:24:55', '2023-02-27 05:24:55'),
(60, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '7581cba67db27e55e335e5bde06604bcbdf1f8c0ac63ded4dfc0529535dfd280', '[\"*\"]', NULL, '2023-02-27 05:25:43', '2023-02-27 05:25:43'),
(61, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '487c6b111293941287a11e052ebf4cf8a1b22e9e1d9fed4eaea74c44404986c7', '[\"*\"]', NULL, '2023-02-27 05:34:59', '2023-02-27 05:34:59'),
(62, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '25a887d4459637db27561631c067d1c1ffa0eb2960301183c363d3dd3e28b46b', '[\"*\"]', NULL, '2023-02-27 05:37:15', '2023-02-27 05:37:15'),
(63, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '427d4ee781d7f0d24fcadf0db8782416aa388b938954cd00152b36197386d1cc', '[\"*\"]', NULL, '2023-02-27 05:47:14', '2023-02-27 05:47:14'),
(64, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '820f970029495f9af51eb370c6cbdb821e49ac82fb8ad75e0497c79256dbed87', '[\"*\"]', NULL, '2023-02-27 06:34:30', '2023-02-27 06:34:30'),
(65, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'b1cdeb425b7653540a323e24d581bc8795ca93043baac6fb152212d914d6c3a9', '[\"*\"]', NULL, '2023-02-27 07:01:23', '2023-02-27 07:01:23'),
(66, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'e1b577abdb4b8bc486870c180fea546a91672ca2a7be6a706e2555f81f5245d7', '[\"*\"]', NULL, '2023-02-27 07:18:54', '2023-02-27 07:18:54'),
(67, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '0139a2379651167ff13858ee62fe9692a87b4bb511930d877fef0ef0186abe48', '[\"*\"]', NULL, '2023-02-27 08:33:45', '2023-02-27 08:33:45'),
(68, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '7e3d83f8e00c84a9574c7ec10b680fd688b4c9f837479b35a1b191fd86977e44', '[\"*\"]', NULL, '2023-02-27 08:34:01', '2023-02-27 08:34:01'),
(69, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '85e0e10efb242268b3306d699894415c9dcca7d551fb2444fd0f80346c83e2c4', '[\"*\"]', NULL, '2023-02-27 08:38:32', '2023-02-27 08:38:32'),
(70, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'caf75284f5920d6c4ea9249fb5bf0e8bc0bf672347ec773d079d758f8af7d81c', '[\"*\"]', NULL, '2023-02-27 08:38:59', '2023-02-27 08:38:59'),
(71, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '8ba263df7d6f853a4e5deff33dd09fb197286b1e6bae52cc54077ea1a93bb398', '[\"*\"]', NULL, '2023-02-27 09:48:32', '2023-02-27 09:48:32'),
(72, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '46836e8377434592e8ce07accaec7357c203e7c0bd3659cf176ebeee6bfd7881', '[\"*\"]', NULL, '2023-02-27 13:23:50', '2023-02-27 13:23:50'),
(73, 'App\\Models\\Api\\UserRegisterModel', 54, '9978222262', '9d9bbeae1d42ad994c032c85b795b584d9e67ec1d984301c9cfccd9185b4b35e', '[\"*\"]', NULL, '2023-02-27 13:43:37', '2023-02-27 13:43:37'),
(74, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '53b40a10b37cc1fb1a772e390ad9c37ede22d12ee63eeeee3953808a8920468e', '[\"*\"]', NULL, '2023-03-01 08:56:29', '2023-03-01 08:56:29'),
(75, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '227e989ef8740b7badbf09d961d8521c89ddc01dc4254386448d1b8fa46d430c', '[\"*\"]', NULL, '2023-03-02 06:19:43', '2023-03-02 06:19:43'),
(76, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '2c7f81ac828c1d84624621182acaf74e29e456a35f81a548d47ffbe0b8375620', '[\"*\"]', NULL, '2023-03-02 12:16:52', '2023-03-02 12:16:52'),
(77, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '44c1f6b7fd5ab85a2085732a7dac6dd6749f8ce9b1704d6abf6e8d318e540165', '[\"*\"]', NULL, '2023-03-03 05:32:17', '2023-03-03 05:32:17'),
(78, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '8693eb921d5632470d0004c185110a6092fa115e57ef89df9a1ac7089bc66b46', '[\"*\"]', NULL, '2023-03-03 11:26:25', '2023-03-03 11:26:25'),
(79, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '38f79fc083b7db06e05965fa8ca8fbce65857eecff476e3fab9a9b94365307fd', '[\"*\"]', NULL, '2023-03-03 13:35:58', '2023-03-03 13:35:58'),
(80, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '86c46f5b3506ae026d24c999adb235bad2b257111320a3524dc9969454872f1d', '[\"*\"]', NULL, '2023-03-04 04:08:24', '2023-03-04 04:08:24'),
(81, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '9ef19da1283d80de884b06209d252e0130c5e4ad278ea494a0f1df1dedd79451', '[\"*\"]', NULL, '2023-03-04 04:35:36', '2023-03-04 04:35:36'),
(82, 'App\\Models\\Api\\UserRegisterModel', 55, '9874563203', 'cc2f4be8e80ca5bc08cb6ae8ab61bb977136c5830a3d9574e8c95deeb4fe51b1', '[\"*\"]', NULL, '2023-03-04 04:36:56', '2023-03-04 04:36:56'),
(83, 'App\\Models\\Api\\UserRegisterModel', 55, '9874563203', '25c0e6b220c8de057e14dbbace43725d0f0c4d934a8c47154a6162607168b038', '[\"*\"]', NULL, '2023-03-04 04:42:04', '2023-03-04 04:42:04'),
(84, 'App\\Models\\Api\\UserRegisterModel', 55, '9874563203', '2d87b6178d718404d85c88098d493cf7c9adc06e7473e5f671f44ef75c5bc063', '[\"*\"]', NULL, '2023-03-04 04:46:14', '2023-03-04 04:46:14'),
(85, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', 'e3856d69de35ccd78336d66a647d02e6d9d919f55d0536962c804f169df0eb0e', '[\"*\"]', NULL, '2023-03-04 05:05:53', '2023-03-04 05:05:53'),
(86, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '1d066964e3e7ce141cf711c795055669729996bd896f421c0842259e350280f7', '[\"*\"]', NULL, '2023-03-04 05:06:26', '2023-03-04 05:06:26'),
(87, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '61110aaf7d7214a2a711ea61b7b2797eb4debe2687c43ded5e39f0a0cca4a770', '[\"*\"]', NULL, '2023-03-04 05:14:31', '2023-03-04 05:14:31'),
(88, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '0640d085bbfc95826cba58b6363ccf0522b9616e0bd44f7de1cec386f957b01b', '[\"*\"]', NULL, '2023-03-04 05:14:57', '2023-03-04 05:14:57'),
(89, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '74c2f839b86e02c1c58cd539dfc2d9b6de7b2e8075b8fdad9ea1d2c50654f4b3', '[\"*\"]', NULL, '2023-03-04 05:16:20', '2023-03-04 05:16:20'),
(90, 'App\\Models\\Api\\UserRegisterModel', 47, '9874563210', '045903a4c4922f1bd48d5492bfb14c86e1b26b2d064545b7e9e1a5e6e53efcbf', '[\"*\"]', NULL, '2023-03-04 05:17:21', '2023-03-04 05:17:21'),
(91, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', '501ddf1adc1d86106e08bd482332a56dc20f4dda6cf830e038fcc8ca247a6790', '[\"*\"]', NULL, '2023-03-04 05:23:00', '2023-03-04 05:23:00'),
(92, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', 'a1172bec252dc37e6fd803467f1594b512c8b329c78673475247f67127e4dca6', '[\"*\"]', NULL, '2023-03-04 05:41:09', '2023-03-04 05:41:09'),
(93, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', '611d18f6f8aff6ef64e40e4d2860470a8fe81abd2201cbfb3af5872298842921', '[\"*\"]', NULL, '2023-03-04 05:42:46', '2023-03-04 05:42:46'),
(94, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', 'c57fba1e22e8a40afa692b9630db846368956458c47293b321fa35cb3ba89c5e', '[\"*\"]', NULL, '2023-03-04 05:43:24', '2023-03-04 05:43:24'),
(95, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', '1703d02d7be210006d6e0b57ed1d30644cb9dda9ebf44a020c0d96b1f46ea10f', '[\"*\"]', NULL, '2023-03-04 05:44:52', '2023-03-04 05:44:52'),
(96, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', '7add4251e494470c044d576e10782a98296bee04b72fea320f77592cbe9e9498', '[\"*\"]', NULL, '2023-03-04 05:45:39', '2023-03-04 05:45:39'),
(97, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', 'c9d9af522770afd929af8bdaa99c81ccefb9584428997cc111d882a0ebf1c7e4', '[\"*\"]', NULL, '2023-03-04 05:45:42', '2023-03-04 05:45:42'),
(98, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', '844a892075eb4cd0b245eef915140f420082073c39ae8811ccea386a6572e583', '[\"*\"]', NULL, '2023-03-04 05:46:11', '2023-03-04 05:46:11'),
(99, 'App\\Models\\Api\\UserRegisterModel', 39, '6363636365', 'b8a888273875b98e90d0e7d8629abcbb08b4c293c2373718c97f4632ba883172', '[\"*\"]', NULL, '2023-03-04 05:48:41', '2023-03-04 05:48:41'),
(100, 'App\\Models\\Api\\UserRegisterModel', 89, '89', '53d1ff701f10a56ca920eb995ec6b3de5c6f1e95d45959a0d98051d4788918e4', '[\"*\"]', NULL, '2023-03-22 12:38:43', '2023-03-22 12:38:43'),
(101, 'App\\Models\\Api\\UserRegisterModel', 90, 'pkffdgdsd@gmail.com', 'dd22480197ece725ffc8a43a1e344426a95a9f4591eb76ec66104fa8ceaacc83', '[\"*\"]', NULL, '2023-03-22 12:40:16', '2023-03-22 12:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `policy` longtext DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `policy`, `updated_at`, `created_at`) VALUES
(1, '<p><strong>Privacy Policy</strong></p>\r\n\r\n<p>Shaishav Singh built the Saathi app as a Free app. This SERVICE is provided by Shaishav Singh at no cost and is intended for use as is.</p>\r\n\r\n<p>This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.</p>\r\n\r\n<p>If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.</p>\r\n\r\n<p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which are accessible at Saathi unless otherwise defined in this Privacy Policy.</p>\r\n\r\n<p><strong>Information Collection and Use</strong></p>\r\n\r\n<p>For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information. The information that I request will be retained on your device and is not collected by me in any way.</p>\r\n\r\n<p><strong>Log Data</strong></p>\r\n\r\n<p>I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third-party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (&ldquo;IP&rdquo;) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device&#39;s internal memory.</p>\r\n\r\n<p>This Service does not use these &ldquo;cookies&rdquo; explicitly. However, the app may use third-party code and libraries that use &ldquo;cookies&rdquo; to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>\r\n\r\n<p><strong>Service Providers</strong></p>\r\n\r\n<p>I may employ third-party companies and individuals due to the following reasons:</p>\r\n\r\n<ul>\r\n	<li>To facilitate our Service;</li>\r\n	<li>To provide the Service on our behalf;</li>\r\n	<li>To perform Service-related services; or</li>\r\n	<li>To assist us in analyzing how our Service is used.</li>\r\n</ul>\r\n\r\n<p>I want to inform users of this Service that these third parties have access to their Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>\r\n\r\n<p><strong>Security</strong></p>\r\n\r\n<p>I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.</p>\r\n\r\n<p><strong>Links to Other Sites</strong></p>\r\n\r\n<p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>\r\n\r\n<p><strong>Children&rsquo;s Privacy</strong></p>\r\n\r\n<p>I do not knowingly collect personally identifiable information from children. I encourage all children to never submit any personally identifiable information through the Application and/or Services. I encourage parents and legal guardians to monitor their children&#39;s Internet usage and to help enforce this Policy by instructing their children never to provide personally identifiable information through the Application and/or Services without their permission. If you have reason to believe that a child has provided personally identifiable information to us through the Application and/or Services, please contact us. You must also be at least 16 years of age to consent to the processing of your personally identifiable information in your country (in some countries we may allow your parent or guardian to do so on your behalf).</p>\r\n\r\n<p><strong>Changes to This Privacy Policy</strong></p>\r\n\r\n<p>I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>This policy is effective as of 2023-04-21</p>\r\n\r\n<p><strong>Contact Us</strong></p>\r\n\r\n<p>If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me at travelsathi2023@gmail.com.</p>', '2023-04-21 10:23:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_models`
--

CREATE TABLE `subadmin_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `pro_img` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_category_models`
--

CREATE TABLE `sub_child_category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subchild_name` varchar(255) NOT NULL,
  `subchild_slug` varchar(255) NOT NULL,
  `subchild_child_id` varchar(255) NOT NULL,
  `subchild_parent_id` varchar(255) NOT NULL,
  `subchild_icon` varchar(255) NOT NULL,
  `subchild_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_child_category_models`
--

INSERT INTO `sub_child_category_models` (`id`, `subchild_name`, `subchild_slug`, `subchild_child_id`, `subchild_parent_id`, `subchild_icon`, `subchild_status`, `created_at`, `updated_at`) VALUES
(1, 'nati', 'nati', '1', '1', 'nati.jpg', 'active', '2023-02-10 12:53:38', '2023-02-10 12:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `text_editor`
--

CREATE TABLE `text_editor` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `text_editor`
--

INSERT INTO `text_editor` (`id`, `message`, `created_at`, `updated_at`) VALUES
(1, 'for help or feedback please reach out to travelsathi2023@gmail.com', '0000-00-00 00:00:00', '2023-04-18 11:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `traveller` text DEFAULT NULL,
  `departure_city` varchar(255) DEFAULT NULL,
  `layover_city` varchar(255) DEFAULT NULL,
  `arrival_city` varchar(255) DEFAULT NULL,
  `airline_name` varchar(255) DEFAULT NULL,
  `departure_date` varchar(255) DEFAULT NULL,
  `departure_time` varchar(255) DEFAULT NULL,
  `flexible_time` varchar(255) DEFAULT NULL,
  `departure_start_date` varchar(255) DEFAULT NULL,
  `departure_end_date` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `user_id`, `traveller`, `departure_city`, `layover_city`, `arrival_city`, `airline_name`, `departure_date`, `departure_time`, `flexible_time`, `departure_start_date`, `departure_end_date`, `created_at`, `updated_at`) VALUES
(4, 2, '{\"0\":{\"first_name\":\"martin\",\"last_name\":\"joe\",\"age\":\"88\",\"gender\":\"Male\",\"language_spoken\":\"Azerbaijani,Belarusian,Bulgarian\",\"special_needs\":null,\"relationship\":\"Cousin\",\"profile_image\":\"58BBE2.png\"},\"1\":{\"first_name\":\"marteen\",\"last_name\":\"hello\",\"age\":\"66\",\"gender\":\"Male\",\"language_spoken\":\"Azerbaijani,Belarusian\",\"special_needs\":null,\"relationship\":\"Brother\",\"profile_image\":\"58BBE2.png\"},\"2\":{\"first_name\":\"marteen\",\"last_name\":\"hello\",\"age\":\"66\",\"gender\":\"Male\",\"language_spoken\":\"Azerbaijani,Belarusian\",\"special_needs\":null,\"relationship\":\"Brother\",\"profile_image\":\"58BBE2.png\"},\"3\":{\"first_name\":\"hareen\",\"last_name\":\"goe\",\"age\":\"53\",\"gender\":\"Female\",\"language_spoken\":\"Afrikaans,Amharic,Arabic\",\"special_needs\":null,\"relationship\":\"Cousin\",\"profile_image\":\"58BBE2.png\"}}', 'Mumbai, Maharashtra, India', 'Delhi, India', 'New Jersey, USA', NULL, NULL, '15:57', '1', '2023-04-01', '2023-04-15', '2023-03-29 10:28:02', '2023-03-29 10:28:02'),
(5, 3, '{\"0\":{\"first_name\":\"sonu\",\"last_name\":\"sarkar\",\"age\":\"35\",\"gender\":\"Male\",\"language_spoken\":\"Arabic,Belarusian\",\"special_needs\":\"diabetic\",\"relationship\":\"Brother\",\"profile_image\":\"6424154b89234.png\"},\"1\":{\"first_name\":\"sonu\",\"last_name\":\"sarkar 2\",\"age\":\"28\",\"gender\":\"Male\",\"language_spoken\":\"Armenian,Indonesian\",\"special_needs\":\"diabetic\",\"relationship\":\"Cousin\",\"profile_image\":\"6424154b8e15a.png\"},\"2\":{\"first_name\":\"sonu\",\"last_name\":\"sarkar 3\",\"age\":\"25\",\"gender\":\"Male\",\"language_spoken\":\"Panjabi ,Oriya\",\"special_needs\":null,\"relationship\":\"Sister\",\"profile_image\":\"6424154b928db.png\"},\"3\":{\"first_name\":\"sonu\",\"last_name\":\"sarkar 4\",\"age\":\"22\",\"gender\":\"Male\",\"language_spoken\":\"Dutch Flemish,Malayalam,Mongolian\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"6424154b97dc4.png\"},\"4\":{\"first_name\":\"sonu\",\"last_name\":\"sarkar 5\",\"age\":\"26\",\"gender\":\"Male\",\"language_spoken\":\"English,French\",\"special_needs\":null,\"relationship\":\"Cousin\",\"profile_image\":\"6424154b9b8d5.png\"},\"5\":{\"first_name\":\"sonu\",\"last_name\":\"sarkar pro\",\"age\":\"28\",\"gender\":\"Male\",\"language_spoken\":\"Arabic,Assamese\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"6424154ba4a5e.png\"}}', 'Delhi, India', NULL, 'Jaipur, Rajasthan, India', 'Air India', '2023-04-11', '16:07', '0', NULL, NULL, '2023-03-29 10:39:07', '2023-04-06 11:06:33'),
(6, 4, '{\"0\":{\"first_name\":\"cristiann\",\"last_name\":\"jennifer\",\"age\":\"26\",\"gender\":\"Male\",\"language_spoken\":\"Arabic,Assamese,Hindi\",\"special_needs\":null,\"relationship\":\"Sister\",\"profile_image\":\"6424161746b03.png\"},\"1\":{\"first_name\":\"jennifer\",\"last_name\":\"loranz\",\"age\":\"26\",\"gender\":\"Female\",\"language_spoken\":\"English,Bengali Bangla\",\"special_needs\":null,\"relationship\":\"Cousin\",\"profile_image\":\"642416174752b.png\"},\"2\":{\"first_name\":\"donald\",\"last_name\":\"trump\",\"age\":\"45\",\"gender\":\"Male\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Father\",\"profile_image\":null}}', 'Tokyo, Japan', 'Malaysia', 'Thailand', NULL, NULL, '16:45', '1', '2023-03-29', '2023-03-31', '2023-03-29 10:42:31', '2023-03-30 05:02:04'),
(7, 4, '{\"0\":{\"first_name\":\"nora\",\"last_name\":\"fathai\",\"age\":\"36\",\"gender\":\"Female\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Cousin\",\"profile_image\":\"642438cce522e.png\"}}', 'Sydney NSW, Australia', 'Australia', 'New Zealand', NULL, '2023-03-31', '18:39', '0', NULL, NULL, '2023-03-29 13:10:36', '2023-03-29 13:10:36'),
(12, 4, '{\"0\":{\"first_name\":\"jennifie\",\"last_name\":\"loranz\",\"age\":\"25\",\"gender\":\"Female\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Sister\",\"profile_image\":\"58BBE2.png\"}}', 'Tokyo, Japan', 'Thailand', 'Malaysia', NULL, NULL, '16:05', '1', '2023-04-01', '2023-04-30', '2023-04-01 10:35:40', '2023-04-01 10:35:40'),
(62, 30, '{\"0\":{\"first_name\":\"Jai\",\"last_name\":\"Shah\",\"age\":\"58\",\"gender\":\"Male\",\"language_spoken\":\"Hindi\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Delhi, India', NULL, 'Singapore', 'Air India', '2023-04-14', '15:23', '0', NULL, NULL, '2023-04-05 09:54:26', '2023-04-07 12:11:15'),
(63, 3, '{\"0\":{\"first_name\":\"Ms\",\"last_name\":\"Rahu\",\"age\":\"36\",\"gender\":\"Male\",\"language_spoken\":\"English\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Delhi, India', NULL, 'Singapore', 'Air India', '2023-04-14', '15:22', '0', NULL, NULL, '2023-04-05 09:54:29', '2023-04-06 11:05:11'),
(83, 30, '{\"0\":{\"first_name\":\"jaye\",\"last_name\":\"ch\",\"age\":\"36\",\"gender\":\"Male\",\"language_spoken\":\"Assamese\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Jaipur, Rajasthan, India', 'New York, NY, USA', 'Dubai - United Arab Emirates', 'Vistara', '2023-04-09', '19:22', '0', NULL, NULL, '2023-04-07 13:53:14', '2023-04-07 13:53:14'),
(84, 30, '{\"0\":{\"first_name\":\"Shin\",\"last_name\":\"Chain\",\"age\":\"18\",\"gender\":\"Male\",\"language_spoken\":\"Japanese\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Japan', NULL, 'Singapore', 'Vistara', '2023-04-12', '12:00', '0', NULL, NULL, '2023-04-10 06:31:22', '2023-04-10 06:31:22'),
(85, 30, '{\"0\":{\"first_name\":\"Chagan\",\"last_name\":\"Chain\",\"age\":\"47\",\"gender\":\"Male\",\"language_spoken\":\"Arabic\",\"special_needs\":\"na\",\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Kerala, India', NULL, 'Dubai - United Arab Emirates', 'Air India', '2023-04-13', '12:02', '0', NULL, NULL, '2023-04-10 06:32:57', '2023-04-10 08:41:23'),
(86, 26, '{\"0\":{\"first_name\":\"jack\",\"last_name\":\"deniel\",\"age\":\"25\",\"gender\":\"Male\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Mother\",\"profile_image\":\"58BBE2.png\"}}', 'Kerala, India', 'Kochi, Kerala, India', 'Bhuntar, Himachal Pradesh, India', NULL, '2023-04-19', '16:39', '0', NULL, NULL, '2023-04-11 11:09:50', '2023-04-11 11:09:50'),
(88, 26, '{\"0\":{\"first_name\":\"jack\",\"last_name\":\"reacher\",\"age\":\"36\",\"gender\":\"Male\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Trivandrum, Kerala, India', 'Kanayannur, Kerala, India', 'Jaipur, Rajasthan, India', NULL, NULL, '16:40', '1', '2023-04-11', '2023-04-26', '2023-04-11 11:11:00', '2023-04-11 11:11:00'),
(89, 26, '{\"0\":{\"first_name\":\"jackie\",\"last_name\":\"chan\",\"age\":\"45\",\"gender\":\"Male\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Brother\",\"profile_image\":\"58BBE2.png\"}}', 'Munnar, Kerala, India', NULL, 'Delhi, India', NULL, '2023-04-25', '16:41', '0', NULL, NULL, '2023-04-11 11:11:59', '2023-04-11 11:11:59'),
(92, 30, '{\"0\":{\"first_name\":\"Tom\",\"last_name\":\"Jerry\",\"age\":\"18\",\"gender\":\"Male\",\"language_spoken\":\"Azerbaijani\",\"special_needs\":\"no\",\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Vellore, Tamil Nadu, India', NULL, 'Jodhpur, Rajasthan, India', 'Emirates Airline', '2023-04-22', '17:20', '0', NULL, NULL, '2023-04-13 11:51:02', '2023-04-18 07:00:48'),
(93, 30, '{\"0\":{\"first_name\":\"Habibi\",\"last_name\":\"Habibi\",\"age\":\"35\",\"gender\":\"Male\",\"language_spoken\":\"Arabic\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"},\"1\":{\"first_name\":\"text\",\"last_name\":\"text\",\"age\":\"text\",\"gender\":\"Female\",\"language_spoken\":\"Belarusian,Amharic,Assamese\",\"special_needs\":\"text\",\"relationship\":\"Mother\",\"profile_image\":\"58BBE2.png\"}}', 'Jaipur, Rajasthan, India', NULL, 'Delhi, India', 'Vistara', '2023-04-14', '17:58', '0', NULL, NULL, '2023-04-13 12:29:04', '2023-04-29 05:52:36'),
(96, 30, '{\"0\":{\"first_name\":\"Johny\",\"last_name\":\"Doe\",\"age\":\"30\",\"gender\":\"Male\",\"language_spoken\":\"Arabic\",\"special_needs\":null,\"relationship\":\"Other\",\"profile_image\":\"58BBE2.png\"}}', 'Chennai, Tamil Nadu, India', NULL, 'Dubai - United Arab Emirates', 'TruJet', '2023-04-20', '18:24', '0', NULL, NULL, '2023-04-18 12:55:09', '2023-04-18 12:55:09'),
(97, 26, '{\"0\":{\"first_name\":\"manish\",\"last_name\":\"malhotraa\",\"age\":\"26\",\"gender\":\"Male\",\"language_spoken\":\"Afrikaans,Amharic,Arabic\",\"special_needs\":\"no\",\"relationship\":\"Brother\",\"profile_image\":\"58BBE2.png\"},\"1\":{\"first_name\":\"manisha\",\"last_name\":\"jass\",\"age\":\"29\",\"gender\":\"Female\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Mother\",\"profile_image\":\"58BBE2.png\"}}', 'Keralapura, Karnataka, India', 'Ooty, Tamil Nadu, India', 'Kanyakumari, Tamil Nadu, India', 'Go First', NULL, '10:03', '1', '2023-04-21', '2023-05-25', '2023-04-21 04:34:48', '2023-05-04 04:34:14'),
(98, 37, '{\"0\":{\"first_name\":\"cydy\",\"last_name\":\"gxgx\",\"age\":\"25\",\"gender\":\"Male\",\"language_spoken\":null,\"special_needs\":null,\"relationship\":\"Mother\",\"profile_image\":\"58BBE2.png\"}}', 'Jaipur, Rajasthan, India', 'Jodhpur, Rajasthan, India', 'Jaisalmer, Rajasthan, India', NULL, '2023-05-31', '11:41', '0', NULL, NULL, '2023-05-04 06:12:03', '2023-05-04 06:12:03'),
(99, 38, '{\"0\":{\"first_name\":\"anjna\",\"last_name\":\"singg\",\"age\":\"65\",\"gender\":\"Female\",\"language_spoken\":\"Hindi\",\"special_needs\":\"low bp\",\"relationship\":\"Mother\",\"profile_image\":\"58BBE2.png\"}}', 'Delhi, India', NULL, 'Chicago, IL, USA', NULL, NULL, '21:12', '1', '2023-05-08', '2023-10-31', '2023-05-09 02:13:23', '2023-05-09 02:13:23'),
(100, 39, '{\"0\":{\"first_name\":\"aruna\",\"last_name\":\"mohanty\",\"age\":\"66\",\"gender\":\"Female\",\"language_spoken\":\"Oriya,Hindi\",\"special_needs\":null,\"relationship\":\"Mother\",\"profile_image\":\"58BBE2.png\"}}', 'Bhubaneswar, Odisha, India', NULL, 'Delhi, India', NULL, NULL, '21:20', '1', '2023-05-08', '2023-12-31', '2023-05-09 02:20:31', '2023-05-09 02:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

CREATE TABLE `user_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT '''''',
  `phone` varchar(255) DEFAULT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `plain_password` varchar(255) DEFAULT NULL,
  `terms` varchar(255) NOT NULL DEFAULT '''''',
  `status` varchar(255) DEFAULT NULL,
  `device_token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_models`
--

INSERT INTO `user_models` (`id`, `first_name`, `last_name`, `email`, `country`, `phone`, `user_avatar`, `password`, `plain_password`, `terms`, `status`, `device_token`, `created_at`, `updated_at`) VALUES
(2, 'john', 'doe', 'testdemo199000@gmail.com', '\'\'', '9928824622', '1680086589.jpg', '$2y$10$iy.doNM3JSP.SfDbRDFm1ueLbgemiEM/vV7XLtWqmj35LSRBWEc8S', 'Admin@1234', '\'\'', '1', NULL, '2023-03-29 10:22:41', '2023-04-05 04:39:49'),
(3, 'king', 'kong', 'krishnarao1114@gmail.com', '\'\'', '8949156861', '1680085937.jpg', '$2y$10$7PR67ohX7eGkV3QIMNa8XOmoZAC.KdoL6CwAMatWi3E5Xp1lesMIi', 'Krishna123', '\'\'', '1', 'fnmRAav7SZyBLnfe8LWwvd:APA91bGExAqztibxgoXaohcu93i6vSwFwUab40RtOhW2HlqcBUxWUvjKdfS1RQHPwMyoQ1lCLOj8ScyLCOwhWwEWq5YZUWoDVqYnZAkaPfe0DsVmgFCzx6JsHuH43hAz3NFQI6Rpqe3z', '2023-03-29 10:31:20', '2023-04-07 13:29:18'),
(4, 'john', 'wick', 'john@gmail.com', '\'\'', '6375252655', '58BBE2.png', '$2y$10$LdnqNR8F4muxYCz.PB5GH.t3QUAuKE.af3MHVODKOv7cmR9HJo4.q', '123456', '\'\'', '1', 'dmhhr3lur0mfh4JpCkUUoa:APA91bGM_Nq7ZhSKGyiUem8M194Wz3FPXBv81OY_9FW8A0eW5KEYnkV2uLpUx1aoj0FoEp1gmjYqdJRyTtpyHHfjGf2XqlO_RYMGF9-IfuPQJ2-imBPD72bGX17L_ZhqOFzrn1rrB4ov', '2023-03-29 10:39:30', '2023-04-01 12:59:05'),
(26, 'bear', 'geill', 'bear@gmail.com', '\'\'', '8209525255', '1681550259.jpg', '$2y$10$8HuKhIDfePrMvjlBA0XWF.zbIlkFwpZ0NOXxUoVLzAdPAVIbMt55.', '123456', '\'\'', '1', NULL, '2023-04-01 10:39:41', '2023-05-04 04:52:40'),
(30, 'Jayesh', 'Chauhan', 'jayeshchouhan639@gmail.com', '\'\'', '9636949444', '58BBE2.png', '$2y$10$hCkqEqwpLP9AuBjfSXzU4.dv3xTiVq0RtSiXsnshLoI8v/zX/wHK6', 'Jayesh639@', '\'\'', '1', 'csekZj4bSOqn2ZMHxEOPdp:APA91bHa2iAO27GrXndDghu5NNevkKQ0NrayHfO-8dsBh-IYyxuB-90rqtmY_DEV_Ng8J5WWR1W2wYncwkio9B6003g0kW9JMjON8v181iLKCU6802uhcWh1TYChcpz_xIUpcVgP5ukO', '2023-04-04 04:43:45', '2023-05-08 06:18:19'),
(36, 'test', 'test', 'test2@gmail.com', '\'\'', '9874563212', '58BBE2.png', '$2y$10$3ttMRumxs01SA61ZimAL.eTiWKmEVNSvcqq4m9b4GOQu7dmSSxF9W', '123456', '\'\'', '1', 'f6I3rsNzSGOEofroGoJlUf:APA91bHbCvY7K0XXXxftHGrd0AfbFiRWuT2TMKEvtKCISUOZ56s4GcdO-AG3ZxDBI544-0BYZjNN1FSwYjXdnJRHJErQlWxQWK4afkALBoP5Wt0_x_6GzCWkxqCDgELrmNy0vNRSuHNo', '2023-05-04 06:10:17', '2023-05-09 06:55:05'),
(37, 'demo', 'demo', 'demo2@gmail.com', '\'\'', '9874563211', '58BBE2.png', '$2y$10$1lLXwBqHa2DojJgcsZV3UOhwPqmQUu1Qw1kMazerNVIoty8uR.bSa', '123456', '\'\'', '1', 'dyr3b5rSS1mmVxYjdeespA:APA91bGQxMaVNRWueencFCzZ7PtN7cgl-G3EOPM_UxG2ZIfYUEWW1uomN2EQHW8AHveIPEGyuUGfwnbdAbF5uTaf393xsxGujVUPgydWahvBG0A8qY7lSwzyhY0geT_8q5FuR-RoHNRm', '2023-05-04 06:10:34', '2023-05-09 06:53:04'),
(38, 'shaishav', 'singh', 'singh.shaishav@gmail.com', '\'\'', '6086285986', '58BBE2.png', '$2y$10$Gi.WBXF3FA1DTQMHzeh2cOwg3nOVZnNVZ/VQd1q.n.XV43eVNM7LS', 'test123', '\'\'', '1', NULL, '2023-05-09 02:11:04', '2023-05-09 02:34:35'),
(39, 'aerina', 'mohapatra', 'aerina01@gmail.com', '\'\'', '6088868463', '58BBE2.png', '$2y$10$0pVaktQJxe3ANri5vV9JDuRrng9JD2Vj3HVB6tHkkTgIfJXCaNNyG', 'test123', '\'\'', '1', 'dTuILPcEQo-J1QbadlkHYS:APA91bEdp4uPyX1YOHtoY9DRW7JIBHTLeA9t60K_WpM2JzwHantdSxXcv76c4Cx73tDFUfEEmdWagZ88yds_SD1y2Vb2ySLR6fpfnc44PKxdIzawOQ0AWonC9Q-sB2tMO4PQwDOKc6Z0', '2023-05-09 02:18:24', '2023-05-09 02:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_report`
--

CREATE TABLE `user_report` (
  `id` int(11) NOT NULL,
  `current_user_id` int(11) NOT NULL,
  `grp_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `report_msg` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_report`
--

INSERT INTO `user_report` (`id`, `current_user_id`, `grp_id`, `sender_id`, `receiver_id`, `report_msg`, `updated_at`, `created_at`) VALUES
(28, 27, 892627, 26, 27, 'please this user to blockdfgdfgdfg', '2023-05-04 11:45:39', '2023-05-04 11:45:39'),
(29, 27, 892627, 26, 27, 'please this user to fghfg  fdgdfg  ttdftdrdg blockdfgdfgdfg', '2023-05-04 11:47:26', '2023-05-04 11:47:26'),
(30, 37, 983736, 36, 37, '37 ne report ki 36 ki', '2023-05-04 12:05:42', '2023-05-04 12:05:42'),
(31, 37, 983736, 36, 37, 'hvvuchcyc', '2023-05-04 12:23:47', '2023-05-04 12:23:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `all_users_email_unique` (`email`);

--
-- Indexes for table `block_user`
--
ALTER TABLE `block_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_models`
--
ALTER TABLE `blogs_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_category_models`
--
ALTER TABLE `child_category_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_list_models`
--
ALTER TABLE `city_list_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_models`
--
ALTER TABLE `pages_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_category_models`
--
ALTER TABLE `parent_category_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subadmin_models`
--
ALTER TABLE `subadmin_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subadmin_models_email_unique` (`email`);

--
-- Indexes for table `sub_child_category_models`
--
ALTER TABLE `sub_child_category_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_editor`
--
ALTER TABLE `text_editor`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_report`
--
ALTER TABLE `user_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `block_user`
--
ALTER TABLE `block_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `blogs_models`
--
ALTER TABLE `blogs_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child_category_models`
--
ALTER TABLE `child_category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city_list_models`
--
ALTER TABLE `city_list_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages_models`
--
ALTER TABLE `pages_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_category_models`
--
ALTER TABLE `parent_category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_models`
--
ALTER TABLE `subadmin_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_child_category_models`
--
ALTER TABLE `sub_child_category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `text_editor`
--
ALTER TABLE `text_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user_models`
--
ALTER TABLE `user_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_report`
--
ALTER TABLE `user_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
