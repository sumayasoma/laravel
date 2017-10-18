-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 04:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrmlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'mp4', NULL, NULL),
(5, 'Audio', NULL, NULL),
(6, 'Video', NULL, NULL),
(7, 'MP3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_16_101032_create_project_models_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_10_14_203058_create_product_table', 2),
('2017_10_15_201307_create_categories_table', 3),
('2017_10_16_201559_create_partners_table', 4),
('2016_11_17_123957_create_developers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `updated_at`) VALUES
(1, 'ddd', NULL),
(3, 'Spondon', NULL),
(4, 'Kheya Ltd', NULL),
(5, 'Nagordol', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `file` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `cat_id`, `partner_id`, `description`, `status`, `feature`, `price`, `discount`, `file`, `image`) VALUES
(18, 'Rasuler Payer Chinho', 6, 3, 'dgfgf', '<i class=''fa fa-check'' style=''color:blue;''></i>', '<i class=''fa fa-times'' style=''color:red;''></i>', 230, 0, 'D:\\xampp\\tmp\\php60F7.tmp', 'D:\\xampp\\tmp\\php60F8.tmp'),
(19, 'Shesh Kanna', 6, 3, 'dfdgfdg', '<i class=''fa fa-check'' style=''color:blue;''></i>', '<i class=''fa fa-times'' style=''color:red;''></i>', 230, 0, 'D:\\xampp\\tmp\\phpFD18.tmp', 'D:\\xampp\\tmp\\phpFD19.tmp'),
(20, 'Shesh Dekha', 4, 4, 'dfgfdg', '<i class=''fa fa-check'' style=''color:blue;''></i>', '<i class=''fa fa-check'' style=''color:blue;''></i>', 230, 0, 'D:\\xampp\\tmp\\phpECE5.tmp', 'D:\\xampp\\tmp\\phpECE6.tmp'),
(21, 'Chokher Bali', 7, 5, 'It is a mp3 file', '<i class=''fa fa-check'' style=''color:blue;''></i>', '<i class=''fa fa-times'' style=''color:red;''></i>', 230, 0, 'D:\\xampp\\tmp\\phpEF30.tmp', 'D:\\xampp\\tmp\\phpEF31.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jahid', 'jahid@yahoo.com', '$2y$10$Z1Ex.Sod7ekbUbZAL0JrfeJ5C6jG7wKLWNC7w9WW2BRKMVcyVnE16', 'jLz6AT5v8fsEWzr3111cxZDscNHXFadiWcbVUL20utLtLxwCiS6RyYySTl69', '2016-11-17 05:25:47', '2016-11-17 05:25:49'),
(2, 'Munia', 'mun@gmail.com', '$2y$10$m/ESXm0XCmnfIhB.4Ikq.e9EF0sC2chOaQHTyf2zfTLOdmgjWADi2', '6ChomTxeexIW9iURhI7txht0B8El8q9PnUYrz6JzXHFpWYCg8ePgRExC2vpt', '2017-04-05 00:05:29', '2017-04-05 00:57:59'),
(3, 'Sumaya Yasmin', 'sumayasoma1990@gmail.com', '$2y$10$EeQn/dufObaCzBy1Z5pZnuCiZB9OvjfMWGVbCW/37/oadrGwcK6ou', NULL, '2017-10-18 06:25:55', '2017-10-18 06:25:55'),
(4, 'Soma', 'yasmin.sumaya@yahoo.com', '$2y$10$RyDWcjovTFURRTd21sQjBe3bGeNTvkqowi/rR1RF7WtVcPt6KcG7u', NULL, '2017-10-18 08:31:34', '2017-10-18 08:31:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
