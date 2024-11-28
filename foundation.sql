-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:47 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `college`, `img`, `gender`, `no`, `ordered`, `active`, `cA`, `created_at`, `updated_at`) VALUES
(3, 'Jeloven Galvez', 'CAS', 'MR TCU CANDIDATE 01 CAS.jpg', 'Mr', '1', '1', '1', 'CAS', NULL, NULL),
(4, 'Nicole Napay', 'CAS', 'MS TCU CANDIDATE 01 CAS.jpg', 'Ms', '1', '2', '1', '', NULL, NULL),
(5, 'Rayan Apostol', 'CICT', 'MR TCU CANDIDATE 02 CICT.jpg', 'Mr', '2', '3', '1', '', NULL, NULL),
(6, 'Patricia Nicole Amando', 'CICT', 'MS TCU CANDIDATE 02 CICT.jpg', 'Ms', '2', '4', '1', '', NULL, NULL),
(7, 'Jezriel Osia', 'TCU SHS', 'MR TCU CANDIDATE 03 SHS.jpg', 'Mr', '3', '5', '1', '', NULL, NULL),
(8, 'Stephanie Aglubat', 'TCU SHS', 'MS TCU CANDIDATE 03 SHS.jpg', 'Ms', '3', '6', '1', '', NULL, NULL),
(9, 'Raven Russel Sedano', 'CBM', 'MR TCU CANDIDATE 04 CBM.jpg', 'Mr', '4', '7', '1', '', NULL, '2022-11-23 21:41:05'),
(10, 'Alexandra Fabian', 'CBM', 'MS TCU CANDIDATE 04 CBM.jpg', 'Ms', '4', '8', '1', '', NULL, NULL),
(11, 'Johny Conde', 'CCJ', 'MR TCU CANDIDATE 05 CCJ.jpg', 'Mr', '5', '9', '1', '', NULL, '2022-11-23 21:44:57'),
(12, 'Alexandra Nobleza', 'CCJ', 'MS TCU CANDIDATE 05 CCJ.jpg', 'Ms', '5', '10', '1', '', NULL, NULL),
(13, 'John Michael Rimpola', 'CHTM', 'MR TCU CANDIDATE 06 CHTM.jpg', 'Mr', '6', '11', '1', '', NULL, NULL),
(14, 'Dannielle Haillie Breganza', 'CHTM', 'MS TCU CANDIDATE 06 CHTM.jpg', 'Ms', '6', '12', '1', '', NULL, '2022-11-23 21:44:57'),
(15, 'Sheldon Abello', 'CET', 'MR TCU CANDIDATE 07 CET.jpg', 'Mr', '7', '13', '1', '', NULL, '2022-11-23 21:44:57'),
(16, 'Trixue Anne Benitez', 'CET', 'MS TCU CANDIDATE 07 CET.jpg', 'Ms', '7', '14', '1', '', NULL, '2022-11-23 21:44:57'),
(17, 'Lorenz Orquia', 'CED', 'MR TCU CANDIDATE 08 CED.jpg', 'Mr', '8', '15', '1', '', NULL, '2022-11-23 21:44:57'),
(18, 'Bailanie Bansawan', 'CED', 'MS TCU CANDIDATE 08 CED.jpg', 'Ms', '8', '16', '1', '', NULL, '2022-11-23 21:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criteria1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pts1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criteria2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pts2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `criteria1`, `pts1`, `criteria2`, `pts2`, `type`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Swim Wear', 'Beauty and Complexion', '10', 'Body Figure/Masculity', '10', 1, '20', NULL, NULL),
(2, 'Thematic Wear', 'Stage presence, poise and bearing', '15', 'Relevance of the costume', '5', 1, '20', NULL, NULL),
(3, 'Evening Wear/Formal Wear', 'Beauty and Elegance', '15', 'Stage Precense', '5', 1, '20', NULL, NULL),
(4, 'Beauty of Face, Poise, Bearing and Personality', 'Beauty of face', '10', 'Poise, Bearing and personality', '10', 1, '20', NULL, NULL),
(5, 'Talent', '', '', '', '', 0, '', NULL, NULL),
(6, 'Beauty of face, poise Grace and Over-all Impression', '', '', '', '', 2, '60', NULL, NULL),
(7, 'Intelligence (Ability to answer the question)', '', '', '', '', 2, '40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_11_22_094140_create_categories_table', 2),
(6, '2022_11_22_101358_create_candidates_table', 3),
(7, '2022_11_23_014532_create_scores_table', 4),
(8, '2022_11_23_063644_create_rounds_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rounds`
--

CREATE TABLE `rounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rounds`
--

INSERT INTO `rounds` (`id`, `round`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '2022-11-23 21:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `score` int(255) NOT NULL,
  `judge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `score`, `judge`, `category`, `candidate`, `created_at`, `updated_at`) VALUES
(15, 12, '2', '1', '3', NULL, NULL),
(16, 6, '2', '1', '4', NULL, NULL),
(17, 3, '2', '1', '5', NULL, NULL),
(18, 4, '2', '1', '6', NULL, NULL),
(19, 7, '2', '1', '7', NULL, NULL),
(20, 10, '2', '1', '8', NULL, NULL),
(22, 6, '2', '1', '11', NULL, NULL),
(23, 7, '2', '1', '12', NULL, NULL),
(24, 11, '2', '1', '13', NULL, NULL),
(25, 13, '2', '1', '14', NULL, NULL),
(26, 18, '2', '1', '15', NULL, NULL),
(27, 9, '2', '1', '16', NULL, NULL),
(28, 17, '2', '1', '17', NULL, NULL),
(29, 7, '2', '1', '18', NULL, NULL),
(30, 8, '2', '1', '9', NULL, NULL),
(31, 10, '2', '1', '10', NULL, NULL),
(32, 8, '3', '1', '3', NULL, NULL),
(33, 19, '3', '1', '4', NULL, NULL),
(34, 16, '3', '1', '5', NULL, NULL),
(35, 20, '3', '1', '6', NULL, NULL),
(36, 5, '3', '1', '7', NULL, NULL),
(37, 20, '3', '1', '8', NULL, NULL),
(38, 5, '3', '1', '9', NULL, NULL),
(39, 9, '3', '1', '10', NULL, NULL),
(40, 20, '3', '1', '11', NULL, NULL),
(41, 9, '3', '1', '12', NULL, NULL),
(42, 3, '3', '1', '13', NULL, NULL),
(43, 9, '3', '1', '14', NULL, NULL),
(44, 4, '3', '1', '15', NULL, NULL),
(45, 15, '3', '1', '16', NULL, NULL),
(46, 1, '3', '1', '17', NULL, NULL),
(47, 20, '3', '1', '18', NULL, NULL),
(48, 17, '3', '2', '3', NULL, NULL),
(49, 9, '3', '2', '4', NULL, NULL),
(50, 6, '3', '2', '5', NULL, NULL),
(51, 11, '3', '2', '6', NULL, NULL),
(52, 5, '3', '2', '7', NULL, NULL),
(53, 20, '3', '2', '8', NULL, NULL),
(54, 10, '3', '2', '9', NULL, NULL),
(55, 11, '3', '2', '10', NULL, NULL),
(56, 13, '3', '2', '11', NULL, NULL),
(57, 8, '3', '2', '12', NULL, NULL),
(58, 16, '3', '2', '13', NULL, NULL),
(59, 9, '3', '2', '14', NULL, NULL),
(60, 13, '3', '2', '15', NULL, NULL),
(61, 9, '3', '2', '16', NULL, NULL),
(62, 12, '3', '2', '17', NULL, NULL),
(63, 19, '3', '2', '18', NULL, NULL),
(64, 5, '7', '4', '3', NULL, NULL),
(65, 5, '7', '3', '3', NULL, NULL),
(66, 5, '7', '2', '3', NULL, NULL),
(67, 5, '7', '1', '3', NULL, NULL),
(68, 7, '7', '4', '4', NULL, NULL),
(69, 7, '7', '3', '4', NULL, NULL),
(70, 7, '7', '2', '4', NULL, NULL),
(71, 7, '7', '1', '4', NULL, NULL),
(72, 1, '7', '4', '5', NULL, NULL),
(73, 1, '7', '3', '5', NULL, NULL),
(74, 1, '7', '2', '5', NULL, NULL),
(75, 1, '7', '1', '5', NULL, NULL),
(76, 1, '7', '4', '6', NULL, NULL),
(77, 1, '7', '3', '6', NULL, NULL),
(78, 1, '7', '2', '6', NULL, NULL),
(79, 1, '7', '1', '6', NULL, NULL),
(80, 2, '7', '1', '7', NULL, NULL),
(81, 2, '7', '2', '7', NULL, NULL),
(82, 2, '7', '3', '7', NULL, NULL),
(83, 2, '7', '4', '7', NULL, NULL),
(84, 3, '7', '4', '8', NULL, NULL),
(85, 3, '7', '3', '8', NULL, NULL),
(86, 3, '7', '2', '8', NULL, NULL),
(87, 3, '7', '1', '8', NULL, NULL),
(88, 4, '7', '4', '9', NULL, NULL),
(89, 4, '7', '3', '9', NULL, NULL),
(90, 4, '7', '2', '9', NULL, NULL),
(91, 4, '7', '1', '9', NULL, NULL),
(92, 6, '7', '4', '10', NULL, NULL),
(93, 6, '7', '3', '10', NULL, NULL),
(94, 6, '7', '2', '10', NULL, NULL),
(95, 6, '7', '1', '10', NULL, NULL),
(96, 8, '7', '4', '11', NULL, NULL),
(97, 8, '7', '3', '11', NULL, NULL),
(98, 8, '7', '2', '11', NULL, NULL),
(99, 8, '7', '1', '11', NULL, NULL),
(100, 9, '7', '4', '12', NULL, NULL),
(101, 9, '7', '3', '12', NULL, NULL),
(102, 9, '7', '2', '12', NULL, NULL),
(103, 9, '7', '1', '12', NULL, NULL),
(104, 9, '7', '4', '13', NULL, NULL),
(105, 9, '7', '3', '13', NULL, NULL),
(106, 9, '7', '2', '13', NULL, NULL),
(107, 9, '7', '1', '13', NULL, NULL),
(108, 10, '7', '4', '14', NULL, NULL),
(109, 10, '7', '3', '14', NULL, NULL),
(110, 10, '7', '2', '14', NULL, NULL),
(111, 10, '7', '1', '14', NULL, NULL),
(112, 11, '7', '4', '15', NULL, NULL),
(113, 11, '7', '3', '15', NULL, NULL),
(114, 11, '7', '2', '15', NULL, NULL),
(115, 11, '7', '1', '15', NULL, NULL),
(116, 12, '7', '4', '16', NULL, NULL),
(117, 12, '7', '3', '16', NULL, NULL),
(118, 12, '7', '2', '16', NULL, NULL),
(119, 12, '7', '1', '16', NULL, NULL),
(120, 13, '7', '4', '17', NULL, NULL),
(121, 13, '7', '3', '17', NULL, NULL),
(122, 13, '7', '2', '17', NULL, NULL),
(123, 13, '7', '1', '17', NULL, NULL),
(124, 14, '7', '4', '18', NULL, NULL),
(125, 14, '7', '3', '18', NULL, NULL),
(126, 14, '7', '2', '18', NULL, NULL),
(127, 14, '7', '1', '18', NULL, NULL),
(128, 8, '4', '1', '3', NULL, NULL),
(129, 7, '4', '2', '3', NULL, NULL),
(130, 10, '4', '3', '3', NULL, NULL),
(131, 12, '4', '4', '3', NULL, NULL),
(132, 13, '4', '1', '4', NULL, NULL),
(133, 14, '4', '2', '4', NULL, NULL),
(134, 17, '4', '3', '4', NULL, NULL),
(135, 17, '4', '4', '4', NULL, NULL),
(136, 15, '4', '1', '6', NULL, NULL),
(137, 17, '4', '2', '6', NULL, NULL),
(138, 18, '4', '3', '6', NULL, NULL),
(139, 18, '4', '4', '6', NULL, NULL),
(140, 11, '4', '2', '7', NULL, NULL),
(141, 17, '4', '1', '7', NULL, NULL),
(142, 16, '4', '3', '7', NULL, NULL),
(143, 20, '4', '4', '7', NULL, NULL),
(144, 17, '4', '1', '8', NULL, NULL),
(145, 16, '4', '2', '8', NULL, NULL),
(146, 18, '4', '3', '8', NULL, NULL),
(147, 19, '4', '4', '8', NULL, NULL),
(148, 16, '4', '1', '9', NULL, NULL),
(149, 18, '4', '2', '9', NULL, NULL),
(150, 13, '4', '3', '9', NULL, NULL),
(151, 15, '4', '4', '9', NULL, NULL),
(152, 14, '4', '1', '10', NULL, NULL),
(153, 18, '4', '2', '10', NULL, NULL),
(154, 15, '4', '3', '10', NULL, NULL),
(155, 15, '4', '4', '10', NULL, NULL),
(156, 19, '4', '1', '11', NULL, NULL),
(157, 18, '4', '2', '11', NULL, NULL),
(158, 15, '4', '3', '11', NULL, NULL),
(159, 20, '4', '4', '11', NULL, NULL),
(160, 18, '4', '1', '12', NULL, NULL),
(161, 17, '4', '2', '12', NULL, NULL),
(162, 17, '4', '3', '12', NULL, NULL),
(163, 20, '4', '4', '12', NULL, NULL),
(164, 12, '4', '1', '13', NULL, NULL),
(165, 14, '4', '2', '13', NULL, NULL),
(166, 10, '4', '3', '13', NULL, NULL),
(167, 17, '4', '4', '13', NULL, NULL),
(168, 18, '4', '1', '14', NULL, NULL),
(169, 19, '4', '2', '14', NULL, NULL),
(170, 19, '4', '3', '14', NULL, NULL),
(171, 15, '4', '4', '14', NULL, NULL),
(172, 14, '4', '1', '15', NULL, NULL),
(173, 16, '4', '2', '15', NULL, NULL),
(174, 19, '4', '3', '15', NULL, NULL),
(175, 18, '4', '4', '15', NULL, NULL),
(176, 16, '4', '1', '16', NULL, NULL),
(177, 19, '4', '2', '16', NULL, NULL),
(178, 20, '4', '3', '16', NULL, NULL),
(179, 20, '4', '4', '16', NULL, NULL),
(180, 16, '4', '1', '17', NULL, NULL),
(181, 15, '4', '2', '17', NULL, NULL),
(182, 17, '4', '3', '17', NULL, NULL),
(183, 19, '4', '4', '17', NULL, NULL),
(184, 18, '4', '1', '18', NULL, NULL),
(185, 18, '4', '2', '18', NULL, NULL),
(186, 16, '4', '3', '18', NULL, NULL),
(187, 18, '4', '4', '18', NULL, NULL),
(188, 20, '2', '2', '3', NULL, NULL),
(189, 19, '2', '3', '3', NULL, NULL),
(190, 20, '2', '4', '3', NULL, NULL),
(191, 11, '2', '2', '4', NULL, NULL),
(192, 19, '2', '3', '4', NULL, NULL),
(193, 20, '2', '4', '4', NULL, NULL),
(194, 18, '2', '2', '5', NULL, NULL),
(195, 18, '2', '3', '5', NULL, NULL),
(196, 20, '2', '4', '5', NULL, NULL),
(197, 15, '2', '2', '6', NULL, NULL),
(198, 16, '2', '3', '6', NULL, NULL),
(199, 18, '2', '4', '6', NULL, NULL),
(200, 18, '2', '2', '7', NULL, NULL),
(201, 18, '2', '3', '7', NULL, NULL),
(202, 20, '2', '4', '7', NULL, NULL),
(203, 18, '2', '2', '8', NULL, NULL),
(204, 18, '2', '3', '8', NULL, NULL),
(205, 20, '2', '4', '8', NULL, NULL),
(206, 17, '2', '2', '9', NULL, NULL),
(207, 20, '2', '3', '9', NULL, NULL),
(208, 19, '2', '4', '9', NULL, NULL),
(209, 17, '2', '2', '10', NULL, NULL),
(210, 19, '2', '3', '10', NULL, NULL),
(211, 18, '2', '4', '10', NULL, NULL),
(212, 17, '2', '2', '11', NULL, NULL),
(213, 20, '2', '3', '11', NULL, NULL),
(214, 19, '2', '4', '11', NULL, NULL),
(215, 18, '2', '2', '12', NULL, NULL),
(216, 20, '2', '3', '12', NULL, NULL),
(217, 20, '2', '4', '12', NULL, NULL),
(218, 18, '2', '2', '13', NULL, NULL),
(219, 20, '2', '3', '13', NULL, NULL),
(220, 20, '2', '4', '13', NULL, NULL),
(221, 20, '2', '2', '14', NULL, NULL),
(222, 20, '2', '3', '14', NULL, NULL),
(223, 20, '2', '4', '14', NULL, NULL),
(224, 20, '2', '2', '15', NULL, NULL),
(225, 20, '2', '3', '15', NULL, NULL),
(226, 20, '2', '4', '15', NULL, NULL),
(227, 18, '2', '2', '16', NULL, NULL),
(228, 20, '2', '3', '16', NULL, NULL),
(229, 20, '2', '4', '16', NULL, NULL),
(230, 19, '2', '2', '17', NULL, NULL),
(231, 18, '2', '3', '17', NULL, NULL),
(232, 19, '2', '4', '17', NULL, NULL),
(233, 17, '2', '2', '18', NULL, NULL),
(234, 19, '2', '3', '18', NULL, NULL),
(235, 19, '2', '4', '18', NULL, NULL),
(236, 15, '3', '3', '3', NULL, NULL),
(237, 20, '3', '4', '3', NULL, NULL),
(238, 18, '3', '3', '4', NULL, NULL),
(239, 20, '3', '4', '4', NULL, NULL),
(240, 18, '3', '3', '5', NULL, NULL),
(241, 19, '3', '4', '5', NULL, NULL),
(242, 19, '3', '3', '6', NULL, NULL),
(243, 20, '3', '4', '6', NULL, NULL),
(244, 20, '3', '3', '7', NULL, NULL),
(245, 19, '3', '4', '7', NULL, NULL),
(246, 20, '3', '3', '8', NULL, NULL),
(247, 20, '3', '4', '8', NULL, NULL),
(248, 20, '3', '3', '9', NULL, NULL),
(249, 20, '3', '4', '9', NULL, NULL),
(250, 20, '3', '3', '10', NULL, NULL),
(251, 19, '3', '4', '10', NULL, NULL),
(252, 20, '3', '3', '11', NULL, NULL),
(253, 20, '3', '4', '11', NULL, NULL),
(254, 19, '3', '3', '12', NULL, NULL),
(255, 19, '3', '4', '12', NULL, NULL),
(256, 20, '3', '3', '13', NULL, NULL),
(257, 19, '3', '4', '13', NULL, NULL),
(258, 17, '3', '3', '14', NULL, NULL),
(259, 20, '3', '4', '14', NULL, NULL),
(260, 20, '3', '3', '15', NULL, NULL),
(261, 20, '3', '4', '15', NULL, NULL),
(262, 20, '3', '3', '16', NULL, NULL),
(263, 20, '3', '4', '16', NULL, NULL),
(264, 17, '3', '3', '17', NULL, NULL),
(265, 19, '3', '4', '17', NULL, NULL),
(266, 19, '3', '3', '18', NULL, NULL),
(267, 20, '3', '4', '18', NULL, NULL),
(268, 18, '5', '1', '3', NULL, NULL),
(269, 20, '5', '2', '3', NULL, NULL),
(270, 20, '5', '3', '3', NULL, NULL),
(271, 19, '5', '4', '3', NULL, NULL),
(272, 20, '5', '1', '4', NULL, NULL),
(273, 20, '5', '2', '4', NULL, NULL),
(274, 20, '5', '3', '4', NULL, NULL),
(275, 20, '5', '4', '4', NULL, NULL),
(276, 20, '5', '1', '5', NULL, NULL),
(277, 20, '5', '2', '5', NULL, NULL),
(278, 20, '5', '3', '5', NULL, NULL),
(279, 20, '5', '4', '5', NULL, NULL),
(280, 20, '5', '1', '6', NULL, NULL),
(281, 20, '5', '2', '6', NULL, NULL),
(282, 19, '5', '3', '6', NULL, NULL),
(283, 20, '5', '4', '6', NULL, NULL),
(284, 20, '5', '1', '7', NULL, NULL),
(285, 20, '5', '2', '7', NULL, NULL),
(286, 20, '5', '3', '7', NULL, NULL),
(287, 20, '5', '4', '7', NULL, NULL),
(288, 20, '5', '3', '8', NULL, NULL),
(289, 20, '5', '2', '8', NULL, NULL),
(290, 20, '5', '1', '8', NULL, NULL),
(291, 20, '5', '4', '8', NULL, NULL),
(292, 20, '5', '4', '9', NULL, NULL),
(293, 20, '5', '3', '9', NULL, NULL),
(294, 20, '5', '2', '9', NULL, NULL),
(295, 20, '5', '1', '9', NULL, NULL),
(296, 20, '5', '4', '10', NULL, NULL),
(297, 20, '5', '3', '10', NULL, NULL),
(298, 19, '5', '2', '10', NULL, NULL),
(299, 20, '5', '1', '10', NULL, NULL),
(300, 20, '5', '4', '11', NULL, NULL),
(301, 20, '5', '3', '11', NULL, NULL),
(302, 20, '5', '2', '11', NULL, NULL),
(303, 20, '5', '1', '11', NULL, NULL),
(304, 20, '5', '4', '12', NULL, NULL),
(305, 20, '5', '3', '12', NULL, NULL),
(306, 20, '5', '2', '12', NULL, NULL),
(307, 20, '5', '1', '12', NULL, NULL),
(308, 20, '5', '4', '13', NULL, NULL),
(309, 20, '5', '3', '13', NULL, NULL),
(310, 20, '5', '2', '13', NULL, NULL),
(311, 17, '5', '1', '13', NULL, NULL),
(312, 20, '5', '4', '14', NULL, NULL),
(313, 20, '5', '3', '14', NULL, NULL),
(314, 20, '5', '2', '14', NULL, NULL),
(315, 20, '5', '1', '14', NULL, NULL),
(316, 20, '5', '1', '15', NULL, NULL),
(317, 0, '5', '2', '15', NULL, NULL),
(318, 20, '5', '3', '15', NULL, NULL),
(319, 18, '5', '4', '15', NULL, NULL),
(320, 16, '5', '1', '16', NULL, NULL),
(321, 20, '5', '2', '16', NULL, NULL),
(322, 20, '5', '3', '16', NULL, NULL),
(323, 20, '5', '4', '16', NULL, NULL),
(324, 20, '5', '4', '17', NULL, NULL),
(325, 20, '5', '3', '17', NULL, NULL),
(326, 20, '5', '2', '17', NULL, NULL),
(327, 20, '5', '1', '17', NULL, NULL),
(328, 19, '5', '4', '18', NULL, NULL),
(329, 19, '5', '3', '18', NULL, NULL),
(330, 19, '5', '2', '18', NULL, NULL),
(331, 20, '5', '1', '18', NULL, NULL),
(332, 17, '6', '1', '3', NULL, NULL),
(333, 20, '6', '2', '3', NULL, NULL),
(334, 18, '6', '3', '3', NULL, NULL),
(335, 19, '6', '1', '4', NULL, NULL),
(336, 20, '6', '2', '4', NULL, NULL),
(337, 20, '6', '3', '4', NULL, NULL),
(338, 20, '6', '4', '4', NULL, NULL),
(339, 19, '6', '4', '5', NULL, NULL),
(340, 20, '6', '3', '5', NULL, NULL),
(341, 20, '6', '2', '5', NULL, NULL),
(342, 20, '6', '1', '5', NULL, NULL),
(343, 20, '6', '4', '6', NULL, NULL),
(344, 20, '6', '3', '6', NULL, NULL),
(345, 20, '6', '2', '6', NULL, NULL),
(346, 20, '6', '1', '6', NULL, NULL),
(347, 19, '6', '4', '7', NULL, NULL),
(348, 19, '6', '3', '7', NULL, NULL),
(349, 20, '6', '2', '7', NULL, NULL),
(350, 20, '6', '1', '7', NULL, NULL),
(351, 20, '6', '4', '8', NULL, NULL),
(352, 20, '6', '3', '8', NULL, NULL),
(353, 20, '6', '2', '8', NULL, NULL),
(354, 20, '6', '1', '8', NULL, NULL),
(355, 20, '6', '4', '9', NULL, NULL),
(356, 20, '6', '3', '9', NULL, NULL),
(357, 20, '6', '2', '9', NULL, NULL),
(358, 20, '6', '1', '9', NULL, NULL),
(359, 19, '6', '4', '10', NULL, NULL),
(360, 20, '6', '3', '10', NULL, NULL),
(361, 18, '6', '2', '10', NULL, NULL),
(362, 20, '6', '1', '10', NULL, NULL),
(363, 20, '6', '4', '11', NULL, NULL),
(364, 20, '6', '3', '11', NULL, NULL),
(365, 20, '6', '2', '11', NULL, NULL),
(366, 20, '6', '1', '11', NULL, NULL),
(367, 20, '6', '4', '12', NULL, NULL),
(368, 20, '6', '3', '12', NULL, NULL),
(369, 20, '6', '2', '12', NULL, NULL),
(370, 19, '6', '1', '12', NULL, NULL),
(371, 20, '6', '4', '13', NULL, NULL),
(372, 19, '6', '3', '13', NULL, NULL),
(373, 19, '6', '2', '13', NULL, NULL),
(374, 18, '6', '1', '13', NULL, NULL),
(375, 19, '6', '4', '14', NULL, NULL),
(376, 19, '6', '3', '14', NULL, NULL),
(377, 20, '6', '2', '14', NULL, NULL),
(378, 20, '6', '1', '14', NULL, NULL),
(379, 20, '6', '4', '15', NULL, NULL),
(380, 19, '6', '3', '15', NULL, NULL),
(381, 19, '6', '2', '15', NULL, NULL),
(382, 20, '6', '1', '15', NULL, NULL),
(383, 20, '6', '4', '16', NULL, NULL),
(384, 19, '6', '2', '16', NULL, NULL),
(385, 20, '6', '3', '16', NULL, NULL),
(386, 20, '6', '1', '16', NULL, NULL),
(387, 20, '6', '4', '17', NULL, NULL),
(388, 20, '6', '3', '17', NULL, NULL),
(389, 20, '6', '2', '17', NULL, NULL),
(390, 20, '6', '1', '17', NULL, NULL),
(391, 20, '6', '4', '18', NULL, NULL),
(392, 20, '6', '3', '18', NULL, NULL),
(393, 20, '6', '2', '18', NULL, NULL),
(394, 20, '6', '1', '18', NULL, NULL),
(395, 20, '8', '4', '3', NULL, NULL),
(396, 20, '8', '3', '3', NULL, NULL),
(397, 20, '8', '2', '3', NULL, NULL),
(398, 18, '8', '1', '3', NULL, NULL),
(399, 20, '8', '4', '4', NULL, NULL),
(400, 20, '8', '3', '4', NULL, NULL),
(401, 20, '8', '2', '4', NULL, NULL),
(402, 20, '8', '1', '4', NULL, NULL),
(403, 20, '8', '4', '5', NULL, NULL),
(404, 20, '8', '3', '5', NULL, NULL),
(405, 20, '8', '2', '5', NULL, NULL),
(406, 20, '8', '1', '5', NULL, NULL),
(407, 20, '8', '4', '6', NULL, NULL),
(408, 20, '8', '3', '6', NULL, NULL),
(409, 20, '8', '2', '6', NULL, NULL),
(410, 20, '8', '1', '6', NULL, NULL),
(411, 20, '8', '4', '7', NULL, NULL),
(412, 20, '8', '3', '7', NULL, NULL),
(413, 20, '8', '2', '7', NULL, NULL),
(414, 20, '8', '1', '7', NULL, NULL),
(415, 20, '8', '4', '8', NULL, NULL),
(416, 20, '8', '3', '8', NULL, NULL),
(417, 19, '8', '2', '8', NULL, NULL),
(418, 20, '8', '1', '8', NULL, NULL),
(419, 20, '8', '4', '9', NULL, NULL),
(420, 19, '8', '3', '9', NULL, NULL),
(421, 20, '8', '2', '9', NULL, NULL),
(422, 20, '8', '1', '9', NULL, NULL),
(423, 20, '8', '4', '10', NULL, NULL),
(424, 19, '8', '3', '10', NULL, NULL),
(425, 19, '8', '2', '10', NULL, NULL),
(426, 20, '8', '1', '10', NULL, NULL),
(427, 20, '8', '4', '11', NULL, NULL),
(428, 20, '8', '3', '11', NULL, NULL),
(429, 19, '8', '2', '11', NULL, NULL),
(430, 20, '8', '1', '11', NULL, NULL),
(431, 20, '8', '4', '12', NULL, NULL),
(432, 20, '8', '3', '12', NULL, NULL),
(433, 20, '8', '2', '12', NULL, NULL),
(434, 19, '8', '1', '12', NULL, NULL),
(435, 20, '8', '4', '13', NULL, NULL),
(436, 19, '8', '3', '13', NULL, NULL),
(437, 20, '8', '2', '13', NULL, NULL),
(438, 19, '8', '1', '13', NULL, NULL),
(439, 20, '8', '4', '14', NULL, NULL),
(440, 19, '8', '3', '14', NULL, NULL),
(441, 20, '8', '2', '14', NULL, NULL),
(442, 20, '8', '1', '14', NULL, NULL),
(443, 19, '8', '4', '15', NULL, NULL),
(444, 19, '8', '3', '15', NULL, NULL),
(445, 16, '8', '2', '15', NULL, NULL),
(446, 20, '8', '1', '15', NULL, NULL),
(447, 20, '8', '4', '16', NULL, NULL),
(448, 19, '8', '3', '16', NULL, NULL),
(449, 19, '8', '2', '16', NULL, NULL),
(450, 20, '8', '1', '16', NULL, NULL),
(451, 20, '8', '4', '17', NULL, NULL),
(452, 20, '8', '3', '17', NULL, NULL),
(453, 20, '8', '2', '17', NULL, NULL),
(454, 20, '8', '1', '17', NULL, NULL),
(455, 20, '8', '4', '18', NULL, NULL),
(456, 20, '8', '3', '18', NULL, NULL),
(457, 20, '8', '2', '18', NULL, NULL),
(458, 20, '8', '1', '18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin', '2022-11-21 21:32:21', '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 0, NULL, '2022-11-21 21:32:21', '2022-11-21 21:32:21'),
(2, 'judge1', 'judge1', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, '2022-11-21 22:32:57', '2022-11-21 22:32:57'),
(3, 'judge2', 'judge2', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, '2022-11-23 00:17:42', '2022-11-23 00:17:42'),
(4, 'judge3', 'judge3', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, NULL, NULL),
(5, 'judge4', 'judge4', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, NULL, NULL),
(6, 'judge5', 'judge5', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, NULL, NULL),
(7, 'judge6', 'judge6', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, NULL, NULL),
(8, 'judge7', 'judge7', NULL, '$2y$10$zHRZNM49kdA8Amd3BeMEkenTjXY8bwv04rw/.dTOzqEvZhsFMH3c.', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
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
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rounds`
--
ALTER TABLE `rounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
