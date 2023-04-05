-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2023 at 07:06 PM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-65+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrixmedia_db_aliporemuseum`
--

-- --------------------------------------------------------

--
-- Table structure for table `audiofile`
--

CREATE TABLE `audiofile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `bengliName` varchar(255) DEFAULT NULL,
  `bengaliFile` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audiofile`
--

INSERT INTO `audiofile` (`id`, `name`, `fileName`, `bengliName`, `bengaliFile`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Netaji Speech', '1667831041.mp3', NULL, NULL, '1', '1', '2022-11-07 08:54:01', '2022-11-10 13:17:38'),
(2, 'Drum Sound', '1667831803.mp3', NULL, NULL, '1', '1', '2022-11-07 09:06:43', '2022-11-10 13:18:09'),
(3, 'Test', '1667831874.mp3', NULL, NULL, '1', '1', '2022-11-07 09:07:54', '2022-11-10 13:18:12'),
(4, 'TTT', '1667832037.mp3', NULL, NULL, '1', '1', '2022-11-07 09:10:37', '2022-11-07 09:17:43'),
(5, 'Ariyan Test Update', '1667833162.mp3', NULL, NULL, '1', '1', '2022-11-07 09:11:22', '2022-11-10 13:18:15'),
(6, 'Tanmoy Speech New', '1667979162.mp3', NULL, NULL, '1', '1', '2022-11-09 01:59:02', '2022-11-10 13:18:18'),
(7, 'Test Hello Update', '1667980910.mp3', NULL, NULL, '1', '1', '2022-11-09 02:31:50', '2022-11-10 13:18:22'),
(8, 'Live Link Update', '1668000406.mp3', NULL, NULL, '1', '1', '2022-11-09 13:26:03', '2022-11-10 13:18:24'),
(9, 'NETAJI SURAVI', '1668062095.mp3', NULL, NULL, '1', '1', '2022-11-10 06:34:55', '2022-11-10 13:18:27'),
(10, 'NETAJI MADHURA', '1668062138.mp3', NULL, NULL, '1', '1', '2022-11-10 06:35:38', '2022-11-10 13:18:55'),
(11, 'NETAJI KAKSHHO', '1668062243.mpeg', NULL, NULL, '1', '1', '2022-11-10 06:37:23', '2022-11-10 13:18:58'),
(12, 'Gallows (ফাঁসিকাঠ)', '1668090371.mp3', 'ফাঁসিকাঠ', NULL, '1', '1', '2022-11-10 14:22:12', '2022-11-29 09:54:12'),
(13, 'Deshapriya Jatindramohan Sengupta Cell (দেশপ্রিয় যতীন্দ্র মোহন সেনগুপ্ত কক্ষ)', '1668090927.mp3', NULL, NULL, '1', '1', '2022-11-10 14:29:14', '2022-11-10 14:43:15'),
(14, 'Deshapriya Jatindramohan Sengupta Cell (দেশপ্রিয় যতীন্দ্র মোহন সেনগুপ্ত কক্ষ)', '1668090998.mp3', NULL, NULL, '1', '1', '2022-11-10 14:36:38', '2022-11-29 09:54:16'),
(15, 'Netaji Cell (নেতাজি কক্ষ)', '1668164141.mp3', NULL, NULL, '1', '1', '2022-11-11 10:55:41', '2022-11-29 09:54:19'),
(16, 'Dr. Bidhanchandra Roy Cell (ডা. বিধানচন্দ্র রায় কক্ষ)', '1668164427.mp3', NULL, NULL, '1', '1', '2022-11-11 11:00:27', '2022-11-29 09:54:22'),
(17, 'Deshbandhu Chittaranjan Das Cell (দেশবন্ধু চিত্তরঞ্জন দাশ কক্ষ)', '1668164479.mp3', NULL, NULL, '1', '1', '2022-11-11 11:01:19', '2022-11-29 09:54:25'),
(18, 'Nehru Cell (নেহরু কক্ষ)', '1668164524.mp3', NULL, NULL, '1', '1', '2022-11-11 11:02:04', '2022-11-29 09:54:28'),
(19, 'Historic Prison Ward (ঐতিহাসিক কারাকক্ষ)', '1668164575.mp3', NULL, NULL, '1', '1', '2022-11-11 11:02:55', '2022-11-29 09:54:30'),
(20, 'Echoes from Alipur Jail (আলিপুর জেল থেকে ইতিহাসের প্রতিধ্বনি)', '1668164714.mp3', NULL, NULL, '1', '1', '2022-11-11 11:05:14', '2022-11-29 09:54:33'),
(21, 'Our tribute to women freedom fighers of Bengal (বাংলার নারী মুক্তিযোদ্ধাদের প্রতি আমাদের শ্রদ্ধাঞ্জলি)', '1668164922.mp3', NULL, NULL, '1', '1', '2022-11-11 11:08:42', '2022-11-29 09:54:36'),
(22, 'Bengal in freedom movement of India (ভারতের স্বাধীনতা আন্দোলনে বাংলার অবদান)', '1668165009.mp3', NULL, NULL, '1', '1', '2022-11-11 11:10:09', '2022-11-29 09:54:39'),
(23, 'Behind the bars (কারার ঐ লৌহকপাট)', '1668165063.mp3', 'কারার ঐ লৌহকপাট', NULL, '1', '1', '2022-11-11 11:11:03', '2022-11-29 09:54:42'),
(24, 'Tribute to Sri Aurobindo Ghosh (শ্রী অরবিন্দ ঘোষের প্রতি শ্রদ্ধাঞ্জলী)', '1668165097.mp3', NULL, NULL, '1', '1', '2022-11-11 11:11:37', '2022-11-29 09:54:46'),
(25, 'Story of Martyrs (বিপ্লবী শহীদদের কাহিনী)', '1668165198.mp3', NULL, NULL, '1', '1', '2022-11-11 11:13:18', '2022-11-29 09:54:53'),
(26, 'Weaving room (তাঁতকল)', '1668165249.mp3', NULL, NULL, '1', '1', '2022-11-11 11:14:09', '2022-11-29 09:54:56'),
(27, 'sharmistha banik', NULL, 'begrr', 'beng1669718132.mp3', '1', '1', '2022-11-29 10:35:21', '2022-11-29 10:39:16'),
(28, NULL, '', 'ফাঁসিকাঠ', 'beng1669718342.mp3', '1', '1', '2022-11-29 10:39:02', '2022-12-06 07:56:07'),
(29, 'Gallows', 'hindi1669718414.mp3', NULL, '', '1', '1', '2022-11-29 10:40:14', '2022-11-30 12:34:02'),
(30, 'Netaji Cell', 'hindi1669813077.mp3', NULL, '', '1', '1', '2022-11-30 12:57:57', '2022-12-06 07:56:10'),
(31, 'Entrance Building', 'hindi1670313418.mp3', NULL, '', '1', '0', '2022-12-06 07:56:58', '2022-12-06 07:56:58'),
(32, 'Library & Seminar Room', 'hindi1670313474.mp3', NULL, '', '1', '0', '2022-12-06 07:57:54', '2022-12-06 07:57:54'),
(33, 'Nehru Cell', 'hindi1670313501.mp3', NULL, '', '1', '0', '2022-12-06 07:58:21', '2022-12-06 07:58:21'),
(34, 'Netaji Cell', 'hindi1670313523.mp3', NULL, '', '1', '0', '2022-12-06 07:58:43', '2022-12-06 07:58:43'),
(35, 'The Gallows', 'hindi1670313566.mp3', NULL, '', '1', '0', '2022-12-06 07:59:26', '2022-12-06 07:59:26'),
(36, 'Segregation Ward', 'hindi1670313588.mp3', NULL, '', '1', '0', '2022-12-06 07:59:48', '2022-12-06 07:59:48'),
(37, 'Undertrial Cells and Female Ward', 'hindi1670313616.mp3', NULL, '', '1', '0', '2022-12-06 08:00:16', '2022-12-06 08:00:16'),
(38, 'The Jail Hospital Building', 'hindi1670313644.mp3', NULL, '', '1', '0', '2022-12-06 08:00:44', '2022-12-06 08:00:44'),
(39, 'Cell No 5 Exhibition Hall', 'hindi1670313669.mp3', NULL, '', '1', '0', '2022-12-06 08:01:09', '2022-12-06 08:01:09'),
(40, 'Jahaz Bari', 'hindi1670313692.mp3', NULL, '', '1', '0', '2022-12-06 08:01:32', '2022-12-06 08:01:32'),
(41, 'The Watch Tower and Chapel', 'hindi1670313720.mp3', NULL, '', '1', '0', '2022-12-06 08:02:00', '2022-12-06 08:02:00'),
(42, NULL, '', 'কারার ঐ লৌহকপাট', 'beng1670313766.mp3', '1', '0', '2022-12-06 08:02:46', '2022-12-06 08:02:46'),
(43, NULL, '', 'ভারতের স্বাধীনতা আন্দোলনে বাংলার অবদান', 'beng1670313847.mp3', '1', '0', '2022-12-06 08:04:07', '2022-12-06 08:04:07'),
(44, NULL, '', 'আলিপুর জেল থেকে ইতিহাসের প্রতিধ্বনি', 'beng1670313895.mp3', '1', '0', '2022-12-06 08:04:55', '2022-12-06 08:04:55'),
(45, NULL, '', 'ঐতিহাসিক কারাকক্ষ', 'beng1670313920.mp3', '1', '0', '2022-12-06 08:05:20', '2022-12-06 08:05:20'),
(46, NULL, '', 'ডা. বিধানচন্দ্র রায় কক্ষ', 'beng1670313956.mp3', '1', '0', '2022-12-06 08:05:56', '2022-12-06 08:05:56'),
(47, NULL, '', 'তাঁতকল', 'beng1670313999.mp3', '1', '0', '2022-12-06 08:06:39', '2022-12-06 08:06:39'),
(48, NULL, '', 'দেশপ্রিয় যতীন্দ্র মোহন সেনগুপ্ত কক্ষ', 'beng1670314021.mp3', '1', '0', '2022-12-06 08:07:01', '2022-12-06 08:07:01'),
(49, NULL, '', 'দেশবন্ধু চিত্তরঞ্জন দাশ কক্ষ', 'beng1670314050.mp3', '1', '0', '2022-12-06 08:07:30', '2022-12-06 08:07:30'),
(50, NULL, '', 'নেতাজি কক্ষ', 'beng1670314070.mp3', '1', '0', '2022-12-06 08:07:50', '2022-12-06 08:07:50'),
(51, NULL, '', 'নেহরু কক্ষ', 'beng1670314094.mp3', '1', '0', '2022-12-06 08:08:14', '2022-12-06 08:08:14'),
(52, NULL, '', 'ফাঁসিকাঠ', 'beng1670314116.mp3', '1', '0', '2022-12-06 08:08:36', '2022-12-06 08:08:36'),
(53, NULL, '', 'বাংলার নারী মুক্তিযোদ্ধাদের প্রতি আমাদের শ্রদ্ধাঞ্জলি', 'beng1670314139.mp3', '1', '0', '2022-12-06 08:08:59', '2022-12-06 08:08:59'),
(54, NULL, '', 'বিপ্লবী শহীদদের কাহিনী', 'beng1670314164.mp3', '1', '0', '2022-12-06 08:09:24', '2022-12-06 08:09:24'),
(55, NULL, '', 'শ্রী অরবিন্দ ঘোষের প্রতি শ্রদ্ধাঞ্জলী', 'beng1670314184.mp3', '1', '0', '2022-12-06 08:09:44', '2022-12-06 08:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `bkpemployee`
--

CREATE TABLE `bkpemployee` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bkpemployee`
--

INSERT INTO `bkpemployee` (`id`, `emp_id`, `name`, `password`, `grade`, `phone`, `branch`, `post`, `status`, `is_deleted`, `deteted_by`, `created_at`, `updated_at`) VALUES
(1, 115, 'Amit sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096017, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(2, 170, 'Amit Kumar Chatterjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096205, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(3, 196, 'Arnab Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096201, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(4, 154, 'Abhijit Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8900077770, 'HEAD OFFICE', 'JUNIOR OFFICER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(5, 191, 'Avijit Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096024, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(6, 238, 'Avik Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096216, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(7, 134, 'Kishor Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096236, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(8, 198, 'Kartick Baidya', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8250522163, 'HEAD OFFICE', 'JUNIOR OFFICER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(9, 131, 'Prantik Banerjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096202, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(10, 132, 'Samiran Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096241, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(11, 167, 'Sandip Karmakar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096224, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(12, 204, 'Soumalya Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096254, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(13, 236, 'Tapas Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-I(B)', 8373888398, 'HEAD OFFICE', 'DGM', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(14, 251, 'Anuvab Maity', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8420821220, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(15, 157, 'Mahadeb majumdar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8250785874, 'MOHANBATI', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(16, 211, 'Moumita Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096008, 'MOHANBATI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(17, 166, 'Sagar Banerjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096226, 'MOHANBATI', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(18, 206, 'Sushovan Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096220, 'MOHANBATI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(19, 249, 'Monalisa Paul', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8170965374, 'MOHANBATI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(20, 189, 'Kalipada Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096246, 'UKILPARA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(21, 135, 'Kuntal Chakraborty', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096233, 'UKILPARA', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(22, 172, 'Mamoni Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096025, 'UKILPARA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(23, 120, 'Kshitish Chandra Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096190, 'MAIN BRANCH', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(24, 209, 'Kanika Soren', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7872281063, 'MAIN BRANCH', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(25, 201, 'SHAHANSHA SAJAHAN KABIR', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096210, 'MAIN BRANCH', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(26, 182, 'Tathagata Deb', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096006, 'MAIN BRANCH', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(27, 122, 'Kripa Bala', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096231, 'MAIN BRANCH', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(28, 179, 'Avijit Dutta', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9749019251, 'MAIN BRANCH', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(29, 147, 'Dilip Kumar Mandal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096191, 'HEMTABAD', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(30, 183, 'Dipika Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9932897399, 'HEMTABAD', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(31, 239, 'Nirmalendu Nath', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096406, 'HEMTABAD', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(32, 207, 'Pintu Kumar Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7029789177, 'KUNORE', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(33, 141, 'Siddhartha Sekhar Pattadar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096238, 'KUNORE', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(34, 113, 'Chiranjib jana', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096203, 'DALKHOLA', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(35, 111, 'Subrata Mallick', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9083092077, 'DALKHOLA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(36, 250, 'Palash Pahari', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8167525804, 'DALKHOLA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(37, 140, 'Biswanath Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096192, 'TUNGIDIGHI', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(38, 153, 'Raghu Nath Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096014, 'TUNGIDIGHI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(39, 247, 'Nipun Kr. Khan', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8910737624, 'TUNGIDIGHI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(40, 190, 'Prasenjit Mallick', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096090, 'TUNGIDIGHI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(41, 186, 'Gopal Soren', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7318977083, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(42, 203, 'Gouranga Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096089, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(43, 139, 'Prasenjit Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096207, 'KUSHMANDI', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(44, 152, 'Shibu Gupta', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8509128068, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(45, 244, 'Umme Salma', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9064032315, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(46, 200, 'Bhaskar Tirkey', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096212, 'BUNIADPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(47, 187, 'Chinmoy Roy', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8617618846, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(48, 208, 'Debabrata Hansda', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096013, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(49, 151, 'Rajali Murmu', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-IV', 0, 'BUNIADPUR', 'SUBORDINATE', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(50, 169, 'Sanjoy Chakraborty', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096222, 'BUNIADPUR', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(51, 192, 'Swarup Ratan Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096026, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(52, 245, 'Aniruddha Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7501341907, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(53, 149, 'Bijay Kumar Mahato', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096230, 'HARIRAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(54, 168, 'Bharat Chandra Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096228, 'HARIRAMPUR', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(55, 136, 'Kartick Chandra Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096206, 'HARIRAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(56, 112, 'Ranjit Kumar Barman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9775926998, 'HARIRAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(57, 176, 'Amit Kumar Chowdhury', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7908013075, 'KALIYAGANJ', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:20', '2023-04-05 10:02:37'),
(58, 110, 'Biswajit Talukdar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001737267, 'KALIYAGANJ', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(59, 150, 'Najrul Islam', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096243, 'KALIYAGANJ', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(60, 145, 'Rabindra Nath Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096208, 'KALIYAGANJ', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(61, 194, 'Sandip Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096020, 'KALIYAGANJ', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(62, 185, 'Dipak Kumar Singha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9933853162, 'KANKI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(63, 210, 'Mohaimenur Rahman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001606852, 'KANKI', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(64, 163, 'Pranab Sengupta', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 9836903126, 'KANKI', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(65, 143, 'Idris Naster', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096218, 'PANJIPARA', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(66, 174, 'Koushik Roy', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8918758012, 'PANJIPARA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(67, 180, 'Sohrab Alam', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096244, 'PANJIPARA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(68, 243, 'Joy Paul', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001738573, 'PANJIPARA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(69, 137, 'Brojo Mohan Bag', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096221, 'ITAHAR', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(70, 188, 'Nurul Islam', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 6294411283, 'ITAHAR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(71, 181, 'Sujit Kumar Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9832551403, 'ITAHAR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(72, 156, 'Sujit Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 9641363126, 'ITAHAR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(73, 195, 'Swapan Kumar Modak', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8918759571, 'ITAHAR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(74, 177, 'Bikash Chandra Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8918397385, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(75, 205, 'Bikash Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096034, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(76, 155, 'Bazlar Rahman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 9375888406, 'ISLAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(77, 175, 'Pabitra Kumar Ojha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096215, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(78, 199, 'Prasun Mukherjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096211, 'ISLAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(79, 246, 'Bhaskar Barman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9563252479, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(80, 197, 'Koushik Roy', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096219, 'CHOPRA', 'ACCOUNTANT', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(81, 184, 'Sohail Ahmed', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001598529, 'CHOPRA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(82, 240, 'Tuhin Subhra Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096405, 'CHOPRA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37'),
(83, 248, 'Aakash Chatterjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 6290216865, 'CHOPRA', 'CLERICAL', '1', '0', NULL, '2022-08-09 05:45:21', '2023-04-05 10:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `branchmaster`
--

CREATE TABLE `branchmaster` (
  `id` int(11) NOT NULL,
  `branchName` varchar(255) NOT NULL,
  `empId` int(11) NOT NULL,
  `is_manager` int(11) NOT NULL DEFAULT '1',
  `branchHead` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branchmaster`
--

INSERT INTO `branchmaster` (`id`, `branchName`, `empId`, `is_manager`, `branchHead`, `email`, `created_at`, `updated_at`) VALUES
(2, 'MOHANBATI', 166, 1, 'Sagar Banerjee', 'mohanbatirccbltd@gmail.com', '2022-09-12 12:46:29', '2022-09-12 12:46:29'),
(3, 'UKILPARA', 135, 1, 'Kuntal Chakraborty', 'ukilpararccbltd1@gmail.com', '2022-09-12 12:47:19', '2022-09-12 12:47:19'),
(4, 'MAIN BRANCH', 122, 1, 'Kripa Bala', 'rccbraiganjbranch@gmail.com', '2022-09-12 12:48:03', '2022-09-12 12:48:03'),
(5, 'HEMTABAD', 147, 1, 'Dilip Kumar Mandal', 'rccb.hemtabad@gmail.com', '2022-09-12 12:48:48', '2022-09-12 12:48:48'),
(6, 'KUNORE', 141, 1, 'Siddhartha Sekhar Pattadar', 'kunorerccbltd@gmail.com', '2022-09-12 12:49:27', '2022-09-12 12:49:27'),
(7, 'DALKHOLA', 113, 1, 'Chiranjib jana', 'rccbltd.dalkhola@gmail.com', '2022-09-12 12:50:10', '2022-09-12 12:50:10'),
(8, 'TUNGIDIGHI', 140, 1, 'Biswanath Biswas', 'rccbtungidighi@gmail.com', '2022-09-12 12:50:44', '2022-09-12 12:50:44'),
(9, 'KUSHMANDI', 139, 1, 'Prasenjit Ghosh', 'kushmandirccbltd@gmail.com', '2022-09-12 12:51:33', '2022-09-12 12:51:33'),
(10, 'BUNIADPUR', 169, 1, 'Sanjoy Chakraborty', 'buniadpur.rccbltd@gmail.com', '2022-09-12 12:52:18', '2022-09-12 12:52:18'),
(11, 'HARIRAMPUR', 168, 1, 'Bharat Chandra Sarkar', 'rccbltd.harirampur@gmail.com', '2022-09-12 12:52:54', '2022-09-12 12:52:54'),
(12, 'KALIYAGANJ', 150, 1, 'Najrul Islam', 'rccb.kaliyaganj@gmail.com', '2022-09-12 12:53:34', '2022-09-12 12:53:34'),
(13, 'KANKI', 163, 1, 'Pranab Sengupta', 'kanki.rccbltd@gmail.com', '2022-09-12 12:54:17', '2022-09-12 12:54:17'),
(14, 'PANJIPARA', 143, 1, 'Idris Naster', 'rccbpanjipara16@gmail.com', '2022-09-12 12:54:49', '2022-09-12 12:54:49'),
(15, 'ITAHAR', 137, 1, 'Brojo Mohan Bag', 'rccb.itahar@gmail.com', '2022-09-12 12:55:27', '2022-09-12 12:55:27'),
(16, 'ISLAMPUR', 155, 1, 'Bazlar Rahman', 'rccb03islampur@gmail.com', '2022-09-12 12:55:59', '2022-09-12 12:55:59'),
(17, 'CHOPRA', 197, 1, 'Koushik Roy', 'rccbchopra005@gmail.com', '2022-09-12 12:56:52', '2022-09-12 12:56:52'),
(19, 'CEO', 1001, 2, 'Mingma Bhutia', 'ceorccbltd@gmail.com', '2022-09-15 10:46:28', '2022-09-15 10:46:28'),
(20, 'Establishment Manager', 167, 2, 'Sandip Karmakar', 'san2005_karmakar@yahoo.co.in', '2022-09-15 10:47:01', '2022-09-15 10:47:01'),
(21, 'DGM', 236, 2, 'Tapas Biswas', 'dgmitrccbltd@gmail.com', '2022-09-15 10:47:27', '2022-09-15 10:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `branch_details`
--

CREATE TABLE `branch_details` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL COMMENT 'id of district_block table',
  `block` varchar(255) NOT NULL,
  `gram_panchayat` varchar(255) NOT NULL,
  `name_of_the_bank` varchar(255) NOT NULL,
  `name_of_the_branch` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` enum('1','0') NOT NULL,
  `atm_id` varchar(255) DEFAULT NULL,
  `atm_available` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_details`
--

INSERT INTO `branch_details` (`id`, `district`, `block`, `gram_panchayat`, `name_of_the_bank`, `name_of_the_branch`, `ifsc_code`, `branch_code`, `latitude`, `longitude`, `status`, `atm_id`, `atm_available`, `created_by`, `is_deleted`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, '1', 'islampur', 'ISLAMPUR MUNICIPALITY', 'RCCB LTD', 'ISLAMPUR BRANCH', 'WBSC0RCCB15', '003', 26.257421, 88.1823528, '1', 'WRB00011', '1', 20, '0', NULL, '2022-07-25 19:16:21', '2023-04-05 10:02:38'),
(2, '2', 'banshihari', 'BUNIADPUR MUNICIPALITY', 'RCCB LTD', 'BUNIADPUR BRANCH', 'WBSC0RCCB04', '004', 25.390795, 88.396789, '1', 'WRB00002', '1', 20, '0', 20, '2022-07-25 19:20:04', '2023-04-05 10:02:38'),
(3, '1', 'chopra', 'CHOPRA GP', 'RCCB LTD', 'CHOPRA BRANCH', 'WBSC0RCCB16', '005', 26.366339, 88.30863, '1', 'WRB00010', '1', 20, '0', NULL, '2022-07-25 20:47:36', '2023-04-05 10:02:38'),
(4, '1', 'itahar', 'ITAHAR GP', 'RCCB LTD', 'ITAHAR BRANCH', 'WBSC0RCCB10', '006', 25.454135, 88.1707945, '1', 'WRB00012', '1', 20, '0', NULL, '2022-07-25 20:48:51', '2023-04-05 10:02:38'),
(5, '1', 'kaliyaganj', 'KALIYAGANJ MUNICIPALITY', 'RCCB LTD', 'KALIYAGANJ BRANCH', 'WBSC0RCCB07', '007', 25.640069, 88.327829, '1', 'WRB00003', '1', 20, '0', NULL, '2022-07-25 20:50:06', '2023-04-05 10:02:38'),
(6, '2', 'kushmandi', 'KUSHMANDI GP', 'RCCB LTD', 'KUSHMANDI BRANCH', 'WBSC0RCCB06', '008', 25.528011, 88.3641033, '1', 'WRB00006', '1', 20, '0', NULL, '2022-07-25 20:51:08', '2023-04-05 10:02:38'),
(7, '1', 'kaliyaganj', 'MUSTAFA NAGAR GP', 'RCCB LTD', 'KUNORE BRANCH', 'WBSC0RCCB09', '009', 25.578216, 88.2725263, '1', 'WRB00009', '1', 20, '0', NULL, '2022-07-25 20:52:15', '2023-04-05 10:02:38'),
(8, '1', 'dalkhola', 'DALKHOLA MUNICIPALITY', 'RCCB LTD', 'DALKHOLA BRANCH', 'WBSC0RCCB12', '010', 25.875447, 87.843589, '1', 'WRB00017', '1', 20, '0', NULL, '2022-07-25 20:53:38', '2023-04-05 10:02:38'),
(9, '1', 'hemtabad', 'HEMTABAD GP', 'RCCB LTD', 'HEMTABAD BRANCH', 'WBSC0RCCB08', '011', 25.676918, 88.2147288, '1', NULL, '0', 20, '0', NULL, '2022-07-25 20:54:55', '2023-04-05 10:02:38'),
(10, '1', 'raiganj', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'MOHANBATI BRANCH', 'WBSC0RCCB02', '012', 25.62488, 88.129172, '1', 'WRB00015', '1', 20, '0', NULL, '2022-07-25 20:55:59', '2023-04-05 10:02:38'),
(11, '1', 'karandighi', 'ALTAPUR-II GP', 'RCCB LTD', 'TUNGIDIGHI BRANCH', 'WBSC0RCCB11', '013', 25.759643, 87.959461, '1', 'WRB00004', '1', 20, '0', NULL, '2022-07-25 20:57:11', '2023-04-05 10:02:38'),
(12, '1', 'goalpokher-ii', 'KANKI GP', 'RCCB LTD', 'KANKI BRANCH', 'WBSC0RCCB13', '014', 26.005257, 87.861759, '1', 'WRB00007', '1', 20, '0', NULL, '2022-07-25 20:58:20', '2023-04-05 10:02:38'),
(13, '2', 'harirampur', 'HARIRAMPUR GP', 'RCCB LTD', 'HARIRAMPUR BRANCH', 'WBSC0RCCB05', '015', 25.376293, 88.2659197, '1', 'WRB00005', '1', 20, '0', NULL, '2022-07-25 20:59:20', '2023-04-05 10:02:38'),
(14, '1', 'goalpokher-i', 'PANJIPARA GP', 'RCCB LTD', 'PANJIPARA BRANCH', 'WBSC0RCCB14', '016', 26.145998, 88.0288204, '1', 'WRB00008', '1', 20, '0', NULL, '2022-07-25 21:00:18', '2023-04-05 10:02:38'),
(15, '1', 'raiganj', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'UKILPARA BRANCH', 'WBSC0RCCB03', '017', 25.61485, 88.129539, '1', 'WRB00001', '1', 20, '0', NULL, '2022-07-25 21:01:09', '2023-04-05 10:02:38'),
(16, '1', 'raiganj', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'RAIGANJ MAIN BRANCH', 'WBSC0RCCB01', '002', 25.614944, 88.1272906, '1', 'WRB00013', '1', 1, '0', NULL, '2022-08-30 01:45:42', '2023-04-05 10:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `branch_details_bkp02aug2022`
--

CREATE TABLE `branch_details_bkp02aug2022` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL COMMENT 'id of district_block table',
  `block` varchar(255) NOT NULL,
  `gram_panchayat` varchar(255) NOT NULL,
  `name_of_the_bank` varchar(255) NOT NULL,
  `name_of_the_branch` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_details_bkp02aug2022`
--

INSERT INTO `branch_details_bkp02aug2022` (`id`, `district`, `block`, `gram_panchayat`, `name_of_the_bank`, `name_of_the_branch`, `ifsc_code`, `branch_code`, `latitude`, `longitude`, `status`, `created_by`, `is_deleted`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, '1', 'ISLAMPUR BLOCK', 'ISLAMPUR MUNICIPALITY', 'RCCB LTD', 'ISLAMPUR BRANCH', 'WBSC0RCCB15', '003', 26.257421, 88.1823528, '1', 20, '0', NULL, '2022-07-25 19:16:21', '2023-04-05 10:02:38'),
(2, '2', 'BANSHIHARI BLOCK', 'BUNIADPUR MUNICIPALITY', 'RCCB LTD', 'BUNIADPUR BRANCH', 'WBSC0RCCB04', '004', 25.390795, 88.396789, '1', 20, '0', 20, '2022-07-25 19:20:04', '2023-04-05 10:02:38'),
(3, '1', 'CHOPRA BLOCK', 'CHOPRA GP', 'RCCB LTD', 'CHOPRA BRANCH', 'WBSC0RCCB16', '005', 26.366339, 88.30863, '1', 20, '0', NULL, '2022-07-25 20:47:36', '2023-04-05 10:02:38'),
(4, '1', 'ITAHAR BLOCK', 'ITAHAR GP', 'RCCB LTD', 'ITAHAR BRANCH', 'WBSC0RCCB10', '006', 25.454135, 88.1707945, '1', 20, '0', NULL, '2022-07-25 20:48:51', '2023-04-05 10:02:38'),
(5, '1', 'KALIYAGANJ BLOCK', 'KALIYAGANJ MUNICIPALITY', 'RCCB LTD', 'KALIYAGANJ BRANCH', 'WBSC0RCCB07', '007', 25.640069, 88.327829, '1', 20, '0', NULL, '2022-07-25 20:50:06', '2023-04-05 10:02:38'),
(6, '2', 'KUSHMANDI BLOCK', 'KUSHMANDI GP', 'RCCB LTD', 'KUSHMANDI BRANCH', 'WBSC0RCCB06', '008', 25.528011, 88.3641033, '1', 20, '0', NULL, '2022-07-25 20:51:08', '2023-04-05 10:02:38'),
(7, '1', 'KALIYAGANJ BLOCK', 'MUSTAFA NAGAR GP', 'RCCB LTD', 'KUNORE BRANCH', 'WBSC0RCCB09', '009', 25.578216, 88.2725263, '1', 20, '0', NULL, '2022-07-25 20:52:15', '2023-04-05 10:02:38'),
(8, '1', 'DALKHOLA BLOCK', 'DALKHOLA MUNICIPALITY', 'RCCB LTD', 'DALKHOLA BRANCH', 'WBSC0RCCB12', '010', 25.875447, 87.843589, '1', 20, '0', NULL, '2022-07-25 20:53:38', '2023-04-05 10:02:38'),
(9, '1', 'HEMTABAD BLOCK', 'HEMTABAD GP', 'RCCB LTD', 'HEMTABAD BRANCH', 'WBSC0RCCB08', '011', 25.676918, 88.2147288, '1', 20, '0', NULL, '2022-07-25 20:54:55', '2023-04-05 10:02:38'),
(10, '1', 'RAIGANJ BLOCK', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'MOHANBATI BRANCH', 'WBSC0RCCB02', '012', 25.62488, 88.129172, '1', 20, '0', NULL, '2022-07-25 20:55:59', '2023-04-05 10:02:38'),
(11, '1', 'KARANDIGHI BLOCK', 'ALTAPUR-II GP', 'RCCB LTD', 'TUNGIDIGHI BRANCH', 'WBSC0RCCB11', '013', 25.759643, 87.959461, '1', 20, '0', NULL, '2022-07-25 20:57:11', '2023-04-05 10:02:38'),
(12, '1', 'GOALPOKHER-II BLOCK', 'KANKI GP', 'RCCB LTD', 'KANKI BRANCH', 'WBSC0RCCB13', '014', 26.005257, 87.861759, '1', 20, '0', NULL, '2022-07-25 20:58:20', '2023-04-05 10:02:38'),
(13, '2', 'HARIRAMPUR BLOCK', 'HARIRAMPUR GP', 'RCCB LTD', 'HARIRAMPUR BRANCH', 'WBSC0RCCB05', '015', 25.376293, 88.2659197, '1', 20, '0', NULL, '2022-07-25 20:59:20', '2023-04-05 10:02:38'),
(14, '1', 'GOALPOKHER-I BLOCK', 'PANJIPARA GP', 'RCCB LTD', 'PANJIPARA BRANCH', 'WBSC0RCCB14', '016', 26.145998, 88.0288204, '1', 20, '0', NULL, '2022-07-25 21:00:18', '2023-04-05 10:02:38'),
(15, '1', 'RAIGANJ BLOCK', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'UKILPARA BRANCH', 'WBSC0RCCB03', '017', 25.61485, 88.129539, '1', 20, '0', NULL, '2022-07-25 21:01:09', '2023-04-05 10:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `branch_details_bkp30aug2022`
--

CREATE TABLE `branch_details_bkp30aug2022` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL COMMENT 'id of district_block table',
  `block` varchar(255) NOT NULL,
  `gram_panchayat` varchar(255) NOT NULL,
  `name_of_the_bank` varchar(255) NOT NULL,
  `name_of_the_branch` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_details_bkp30aug2022`
--

INSERT INTO `branch_details_bkp30aug2022` (`id`, `district`, `block`, `gram_panchayat`, `name_of_the_bank`, `name_of_the_branch`, `ifsc_code`, `branch_code`, `latitude`, `longitude`, `status`, `created_by`, `is_deleted`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, '1', 'islampur', 'ISLAMPUR MUNICIPALITY', 'RCCB LTD', 'ISLAMPUR BRANCH', 'WBSC0RCCB15', '003', 26.257421, 88.1823528, '1', 20, '0', NULL, '2022-07-25 19:16:21', '2023-04-05 10:02:38'),
(2, '2', 'banshihari', 'BUNIADPUR MUNICIPALITY', 'RCCB LTD', 'BUNIADPUR BRANCH', 'WBSC0RCCB04', '004', 25.390795, 88.396789, '1', 20, '0', 20, '2022-07-25 19:20:04', '2023-04-05 10:02:38'),
(3, '1', 'chopra', 'CHOPRA GP', 'RCCB LTD', 'CHOPRA BRANCH', 'WBSC0RCCB16', '005', 26.366339, 88.30863, '1', 20, '0', NULL, '2022-07-25 20:47:36', '2023-04-05 10:02:38'),
(4, '1', 'itahar', 'ITAHAR GP', 'RCCB LTD', 'ITAHAR BRANCH', 'WBSC0RCCB10', '006', 25.454135, 88.1707945, '1', 20, '0', NULL, '2022-07-25 20:48:51', '2023-04-05 10:02:38'),
(5, '1', 'kaliyaganj', 'KALIYAGANJ MUNICIPALITY', 'RCCB LTD', 'KALIYAGANJ BRANCH', 'WBSC0RCCB07', '007', 25.640069, 88.327829, '1', 20, '0', NULL, '2022-07-25 20:50:06', '2023-04-05 10:02:38'),
(6, '2', 'kushmandi', 'KUSHMANDI GP', 'RCCB LTD', 'KUSHMANDI BRANCH', 'WBSC0RCCB06', '008', 25.528011, 88.3641033, '1', 20, '0', NULL, '2022-07-25 20:51:08', '2023-04-05 10:02:38'),
(7, '1', 'kaliyaganj', 'MUSTAFA NAGAR GP', 'RCCB LTD', 'KUNORE BRANCH', 'WBSC0RCCB09', '009', 25.578216, 88.2725263, '1', 20, '0', NULL, '2022-07-25 20:52:15', '2023-04-05 10:02:38'),
(8, '1', 'dalkhola', 'DALKHOLA MUNICIPALITY', 'RCCB LTD', 'DALKHOLA BRANCH', 'WBSC0RCCB12', '010', 25.875447, 87.843589, '1', 20, '0', NULL, '2022-07-25 20:53:38', '2023-04-05 10:02:38'),
(9, '1', 'hemtabad', 'HEMTABAD GP', 'RCCB LTD', 'HEMTABAD BRANCH', 'WBSC0RCCB08', '011', 25.676918, 88.2147288, '1', 20, '0', NULL, '2022-07-25 20:54:55', '2023-04-05 10:02:38'),
(10, '1', 'raiganj', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'MOHANBATI BRANCH', 'WBSC0RCCB02', '012', 25.62488, 88.129172, '1', 20, '0', NULL, '2022-07-25 20:55:59', '2023-04-05 10:02:38'),
(11, '1', 'karandighi', 'ALTAPUR-II GP', 'RCCB LTD', 'TUNGIDIGHI BRANCH', 'WBSC0RCCB11', '013', 25.759643, 87.959461, '1', 20, '0', NULL, '2022-07-25 20:57:11', '2023-04-05 10:02:38'),
(12, '1', 'goalpokher-II', 'KANKI GP', 'RCCB LTD', 'KANKI BRANCH', 'WBSC0RCCB13', '014', 26.005257, 87.861759, '1', 20, '0', NULL, '2022-07-25 20:58:20', '2023-04-05 10:02:38'),
(13, '2', 'harirampur', 'HARIRAMPUR GP', 'RCCB LTD', 'HARIRAMPUR BRANCH', 'WBSC0RCCB05', '015', 25.376293, 88.2659197, '1', 20, '0', NULL, '2022-07-25 20:59:20', '2023-04-05 10:02:38'),
(14, '1', 'goalpokher-I', 'PANJIPARA GP', 'RCCB LTD', 'PANJIPARA BRANCH', 'WBSC0RCCB14', '016', 26.145998, 88.0288204, '1', 20, '0', NULL, '2022-07-25 21:00:18', '2023-04-05 10:02:38'),
(15, '1', 'raiganj', 'RAIGANJ MUNICIPALITY', 'RCCB LTD', 'UKILPARA BRANCH', 'WBSC0RCCB03', '017', 25.61485, 88.129539, '1', 20, '0', NULL, '2022-07-25 21:01:09', '2023-04-05 10:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `navbar_status` enum('1','0') NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_by`, `is_deleted`, `deteted_by`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test', 'Lorem Ipsum', '1658496533.jpg', 'Test 1', 'test', NULL, '0', '0', 20, '0', NULL, '2022-07-20 07:02:42', '2023-04-05 10:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `navbar_status` enum('1','0') NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_by`, `is_deleted`, `deteted_by`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<p>testing going on</p>', '1658496871.jpg', 'meta title', 'meta description', 'meta description', '1', '1', 20, '0', NULL, '2022-07-22 08:04:31', '2023-04-05 10:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `status`, `created_by`, `is_deleted`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'UTTAR DINAJPUR', '1', 1, '0', NULL, '2023-04-05 10:02:40', '2023-04-05 10:02:40'),
(2, 'DAKSHIN DINAJPUR', '1', 1, '0', NULL, '2023-04-05 10:02:40', '2023-04-05 10:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `branch` varchar(255) NOT NULL,
  `post` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `employee_type` enum('Permanent','Contractual') NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `name`, `password`, `grade`, `phone`, `branch`, `post`, `role`, `employee_type`, `email`, `status`, `is_deleted`, `deteted_by`, `created_at`, `updated_at`) VALUES
(1, '115', 'Amit sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096017, 'HEAD OFFICE', 'CLERICAL', '', 'Permanent', 'rccbamit@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(2, '170', 'Amit Kumar Chatterjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096205, 'HEAD OFFICE', 'AGM', '', 'Permanent', 'chatterjeerccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(3, '196', 'Arnab Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096201, 'HEAD OFFICE', 'AGM', '', 'Permanent', 'agmitrccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(4, '154', 'Abhijit Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8900077770, 'HEAD OFFICE', 'JUNIOR OFFICER', '', 'Permanent', 'abhijitsaha.rccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(5, '191', 'Avijit Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096024, 'HEAD OFFICE', 'CLERICAL', '', 'Permanent', 'avijitghosh.rccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(6, '238', 'Avik Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096216, 'HEAD OFFICE', 'AGM', '', 'Permanent', 'avikghosh04@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(7, '134', 'Kishor Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096236, 'HEAD OFFICE', 'AGM', '', 'Permanent', 'agm.m&bo@rccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:50', '2023-04-05 10:02:40'),
(8, '198', 'Kartick Baidya', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8250522163, 'HEAD OFFICE', 'JUNIOR OFFICER', '', 'Permanent', 'kartickbaidya2011@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(9, '131', 'Prantik Banerjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096202, 'HEAD OFFICE', 'AGM', '', 'Permanent', 'prantikbanerjee.rccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(10, '132', 'Samiran Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096241, 'HEAD OFFICE', 'AGM', '', 'Permanent', 'samiran.saha180@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(11, '167', 'Sandip Karmakar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096224, 'HEAD OFFICE', 'AGM', 'ESTABLISHMENT SECTION', 'Permanent', 'san2005_karmakar@yahoo.co.in', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(12, '204', 'Soumalya Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096254, 'HEAD OFFICE', 'CLERICAL', '', 'Permanent', 'dassoumalyarccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(13, '1001', 'Mingma Bhutia', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', '', 8145834006, 'HEAD OFFICE', 'NA', 'CEO', 'Permanent', 'ceorccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(14, '236', 'Tapas Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-I(B)', 8373888398, 'HEAD OFFICE', 'DGM', 'DGM(Information Technology)', 'Permanent', 'dgmitrccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(15, '251', 'Anuvab Maity', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8420821220, 'HEAD OFFICE', 'CLERICAL', '', 'Permanent', 'anuvab.maity@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(16, '157', 'Mahadeb Majumdar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8250785874, 'MOHANBATI', 'ACCOUNTANT', '', 'Permanent', 'mahadebmajumdar.rccbltd@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(17, '211', 'Moumita Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096008, 'MOHANBATI', 'CLERICAL', '', 'Permanent', 'moumitampara@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(18, '166', 'Sagar Banerjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096226, 'MOHANBATI', 'AGM', 'BRANCH MANAGER', 'Permanent', 'bmkushmandi@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(19, '206', 'Sushovan Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096220, 'MOHANBATI', 'CLERICAL', '', 'Permanent', 'sushovon988@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(20, '249', 'Monalisa Paul', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8170965374, 'MOHANBATI', 'CLERICAL', '', 'Permanent', 'iamsurovi1997@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(21, '189', 'Kalipada Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096246, 'UKILPARA', 'CLERICAL', '', 'Permanent', 'kalipadasarkar2018@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(22, '135', 'Kuntal Chakraborty', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096233, 'UKILPARA', 'AGM', 'BRANCH MANAGER', 'Permanent', 'chakrabortykuntal43@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(23, '172', 'Mamoni Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096025, 'UKILPARA', 'CLERICAL', '', 'Permanent', 'mamonimondal.rccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(24, '120', 'Kshitish Chandra Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096190, 'MAIN BRANCH', 'ACCOUNTANT', '', 'Permanent', 'kshitisrccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(25, '209', 'Kanika Soren', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7872281063, 'MAIN BRANCH', 'CLERICAL', '', 'Permanent', 'sarenkanika11@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(26, '201', 'SHAHANSHA SAJAHAN KABIR', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096210, 'MAIN BRANCH', 'ACCOUNTANT', '', 'Permanent', 'sajahankabir@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(27, '182', 'Tathagata Deb', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096006, 'MAIN BRANCH', 'CLERICAL', '', 'Permanent', 'tathagatarccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(28, '122', 'Kripa Bala', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096231, 'MAIN BRANCH', 'AGM', 'BRANCH MANAGER', 'Permanent', 'balakrip123@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(29, '179', 'Avijit Dutta', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9749019251, 'MAIN BRANCH', 'CLERICAL', '', 'Permanent', 'avijitdatta.1234@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(30, '147', 'Dilip Kumar Mandal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096191, 'HEMTABAD', 'ACCOUNTANT', 'BRANCH MANAGER( In Charge )', 'Permanent', 'mondaldilip4248@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(31, '183', 'Dipika Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9932897399, 'HEMTABAD', 'CLERICAL', '', 'Permanent', 'dipikamondal1973@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(32, '239', 'Nirmalendu Nath', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096406, 'HEMTABAD', 'CLERICAL', '', 'Permanent', 'nirmalendunath1@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(33, '207', 'Pintu Kumar Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7029789177, 'KUNORE', 'CLERICAL', '', 'Permanent', 'pintu.biswas11@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(34, '141', 'Siddhartha Sekhar Pattadar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096238, 'KUNORE', 'ACCOUNTANT', 'BRANCH MANAGER( In Charge )', 'Permanent', 'siddharthasekharpattadarpattad@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(35, '113', 'Chiranjib jana', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096203, 'DALKHOLA', 'AGM', 'Branch Manager', 'Permanent', 'chiranjib.jana75@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(36, '111', 'Subrata Mallick', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9083092077, 'DALKHOLA', 'CLERICAL', '', 'Permanent', 'subr800@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(37, '250', 'Palash Pahari', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8167525804, 'DALKHOLA', 'CLERICAL', '', 'Permanent', 'palashpahari99@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(38, '140', 'Biswanath Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096192, 'TUNGIDIGHI', 'AGM', 'BRANCH MANAGER', 'Permanent', 'bbiswanath179@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(39, '153', 'Raghu Nath Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096014, 'TUNGIDIGHI', 'CLERICAL', '', 'Permanent', 'raghudas791@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(40, '247', 'Nipun Kr. Khan', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8910737624, 'TUNGIDIGHI', 'CLERICAL', '', 'Permanent', 'nipunkhan38@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(41, '190', 'Prasenjit Mallick', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096090, 'TUNGIDIGHI', 'CLERICAL', '', 'Permanent', 'prosenjitmallick0187@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(42, '186', 'Gopal Soren', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7318977083, 'KUSHMANDI', 'CLERICAL', '', 'Permanent', 'gopalrccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(43, '203', 'Gouranga Mondal', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096089, 'KUSHMANDI', 'CLERICAL', '', 'Permanent', 'gourangamandal203@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(44, '139', 'Prasenjit Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096207, 'KUSHMANDI', 'AGM', 'BRANCH MANAGER( In Charge )', 'Permanent', 'ghoshprosenjit2016@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(45, '152', 'Shibu Gupta', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8509128068, 'KUSHMANDI', 'CLERICAL', '', 'Permanent', 'shibugupta2016@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(46, '244', 'Umme Salma', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9064032315, 'KUSHMANDI', 'CLERICAL', '', 'Permanent', 'ummeahid786@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(47, '200', 'Bhaskar Tirkey', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096212, 'BUNIADPUR', 'ACCOUNTANT', '', 'Permanent', 'bhaskartirkey@yahoo.co.in', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(48, '187', 'Chinmoy Roy', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8617618846, 'BUNIADPUR', 'CLERICAL', '', 'Permanent', 'chinmoyrccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(49, '208', 'Debabrata Hansda', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096013, 'BUNIADPUR', 'CLERICAL', '', 'Permanent', 'debabratahansda@yahoo.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(50, '151', 'Rajali Murmu', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-IV', 0, 'BUNIADPUR', 'SUBORDINATE', '', 'Permanent', NULL, '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(51, '169', 'Sanjoy Chakraborty', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096222, 'BUNIADPUR', 'AGM', 'BRANCH MANAGER', 'Permanent', 'sanjaybappa2009@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(52, '192', 'Swarup Ratan Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096026, 'BUNIADPUR', 'CLERICAL', '', 'Permanent', 'swarupratandas1987@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(53, '245', 'Aniruddha Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7501341907, 'BUNIADPUR', 'CLERICAL', '', 'Permanent', 'aniruddhasaha3@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(54, '149', 'Bijay Kumar Mahato', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096230, 'HARIRAMPUR', 'ACCOUNTANT', '', 'Permanent', 'bkmahatorccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(55, '168', 'Bharat Chandra Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096228, 'HARIRAMPUR', 'AGM', 'BRANCH MANAGER', 'Permanent', 'bharatchandrasarkar785@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(56, '136', 'Kartick Chandra Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096206, 'HARIRAMPUR', 'ACCOUNTANT', '', 'Permanent', 'kartick1170@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(57, '112', 'Ranjit Kumar Barman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9775926998, 'HARIRAMPUR', 'CLERICAL', '', 'Permanent', 'ranjitbarman1994@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(58, '176', 'Amit Kumar Chowdhury', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7908013075, 'KALIYAGANJ', 'CLERICAL', '', 'Permanent', 'amit.kumarchowdhury@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(59, '110', 'Biswajit Talukdar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001737267, 'KALIYAGANJ', 'CLERICAL', '', 'Permanent', 'biswajittalukder228@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(60, '150', 'Najrul Islam', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096243, 'KALIYAGANJ', 'AGM', 'BRANCH MANAGER', 'Permanent', 'manager.nazrulislam@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(61, '145', 'Rabindra Nath Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096208, 'KALIYAGANJ', 'ACCOUNTANT', '', 'Permanent', 'rabindranathsarkarrccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(62, '194', 'Sandip Ghosh', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096020, 'KALIYAGANJ', 'CLERICAL', '', 'Permanent', 'sandipghosh3@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(63, '185', 'Dipak Kumar Singha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9933853162, 'KANKI', 'CLERICAL', '', 'Permanent', 'dipakkumarsinha498@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(64, '210', 'Mohaimenur Rahman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001606852, 'KANKI', 'CLERICAL', '', 'Permanent', 'mohaimenurr@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(65, '163', 'Pranab Sengupta', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 9836903126, 'KANKI', 'ACCOUNTANT', 'BRANCH MANAGER( In Charge )', 'Permanent', 'psg.rccb1974@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(66, '143', 'Idris Naster', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096218, 'PANJIPARA', 'ACCOUNTANT', 'BRANCH MANAGER( In Charge )', 'Permanent', 'mdidrisnashter@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(67, '174', 'Koushik Roy', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8918758012, 'PANJIPARA', 'CLERICAL', '', 'Permanent', 'tuturoy007@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(68, '180', 'Sohrab Alam', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096244, 'PANJIPARA', 'CLERICAL', '', 'Permanent', 'alamraj1979@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(69, '243', 'Joy Paul', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001738573, 'PANJIPARA', 'CLERICAL', '', 'Permanent', 'pauljoy344@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(70, '137', 'Brojo Mohan Bag', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(A)', 8373096221, 'ITAHAR', 'AGM', 'BRANCH MANAGER', 'Permanent', 'brajamohanbag111@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(71, '188', 'Nurul Islam', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 6294411283, 'ITAHAR', 'CLERICAL', '', 'Permanent', 'nurulislam.rccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(72, '181', 'Sujit Kumar Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9832551403, 'ITAHAR', 'CLERICAL', '', 'Permanent', 'sujit.itahar.98@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(73, '156', 'Sujit Biswas', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 9641363126, 'ITAHAR', 'ACCOUNTANT', '', 'Permanent', 'sujitbiswas.rccb@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(74, '195', 'Swapan Kumar Modak', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8918759571, 'ITAHAR', 'CLERICAL', '', 'Permanent', 'swapankrmodak@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(75, '177', 'Bikash Chandra Das', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8918397385, 'ISLAMPUR', 'CLERICAL', '', 'Permanent', 'mrbcdas2@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(76, '205', 'Bikash Sarkar', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096034, 'ISLAMPUR', 'CLERICAL', '', 'Permanent', 'sarkarbikash600@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(77, '155', 'Bazlar Rahman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 9375888406, 'ISLAMPUR', 'ACCOUNTANT', 'BRANCH MANAGER( In Charge )', 'Permanent', 'bazlar123@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(78, '175', 'Pabitra Kumar Ojha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096215, 'ISLAMPUR', 'CLERICAL', '', 'Permanent', 'kumarpabitra5005@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(79, '199', 'Prasun Mukherjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096211, 'ISLAMPUR', 'ACCOUNTANT', '', 'Permanent', 'prasunbud@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(80, '246', 'Bhaskar Barman', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 9563252479, 'ISLAMPUR', 'CLERICAL', '', 'Permanent', 'bhaskar.barman197@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(81, '197', 'Koushik Roy', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-II(B)', 8373096219, 'CHOPRA', 'ACCOUNTANT', 'BRANCH MANAGER( In Charge )', 'Permanent', 'koushik0606@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(82, '184', 'Sohail Ahmed', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 7001598529, 'CHOPRA', 'CLERICAL', '', 'Permanent', 'shiza1235@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(83, '240', 'Tuhin Subhra Saha', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8373096405, 'CHOPRA', 'CLERICAL', '', 'Permanent', 'tukansaha432@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(84, '248', 'Aakash Chatterjee', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 6290216865, 'CHOPRA', 'CLERICAL', '', 'Permanent', 'caakash18@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(85, '252', 'Kush Tudu', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', 'Gr-III', 8442879119, 'KUSHMANDI', 'CLERICAL', '', 'Permanent', 'kushtudu1995@gmail.com', '1', '0', NULL, '2022-09-08 14:54:51', '2023-04-05 10:02:40'),
(86, '213', 'SANAKR PAUL', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8373096001, 'HEAD OFFICE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(87, '214', 'Mr. TANMOY  DUTTA', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9475105248, 'HEAD OFFICE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(88, '212', 'Mr. AVISHAK KUMAR NAG', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8116917353, 'HEAD OFFICE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(89, '217', 'DASARAT  SINGH', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8373096003, 'HEAD OFFICE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(90, '216', 'Mr. BINOD  BISWAS', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9593308672, 'HEAD OFFICE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(91, '218', 'Mrs. TULTULI  SAHA', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9474074902, 'HEAD OFFICE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(92, 'C001\n', 'Mr. NIKHIL  DAS ', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9547815482, 'HEAD OFFICE ( DRIVER ) ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(93, 'C002\n', 'Mr. NANDU  BARMAN', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8373096009, 'HEAD OFFICE ( DRIVER ) ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:48', '2023-04-05 10:02:40'),
(94, '221', 'DEBPRAKASH SARKAR', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9474437252, 'RAIGANJ MAIN ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(95, '215', 'Mr. SUPRIYA  ROY', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9474441121, 'RAIGANJ MAIN', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(96, '231', ' TAPAN  PAUL', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 7908970178, 'ISLAMPUR', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(97, '233', 'Mr. UJJAL  SARKAR', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8373096021, 'BUNIADPUR', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(98, '235', 'Mr. BAPPA  DAS', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9933999491, 'CHOPRA', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(99, '234', 'Mr. TULU  DAS', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 7719147193, 'ITAHAR', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(100, '228', 'Mr. SANJIT  BARAI', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8918710934, 'KUSHMUNDI ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(101, '227', 'Mr. UTTAM  MAHATO', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9933627080, 'KUNORE', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(102, '230', 'Mr. ASHOK KUMAR GHOSH', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9933463942, 'DALKHOLA ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(103, '222', 'Miss. MINA  PAL ', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9733493957, 'HAMEABAD ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(104, '219', 'BARNA  SENGUPTA', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9434207159, 'MOHANBATI ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(105, '220', 'Mr. ASHOK  SAHANI', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9733092847, 'MOHANBATI ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(106, '223', 'Mr. ACHINTA  CHAKRABORTY', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8373096015, 'MOHANBATI ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(107, '226', 'Mr. SHYAMAL  CHOKROBORTY', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9614224101, 'KANKI ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(108, '229', ' MD TARAQUE ALAM  ', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9641021174, 'KANKI ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(109, '225', ' DIPALI  MANDAL', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 9907931941, 'PANJIPARA', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40'),
(110, '224', 'Mrs. KAKOLI CHAKRABORT NAG', '$2y$10$nTY4f9zm.yX44XOgWjwe/Ox7i4F.WJ8ddtEcaZY9F79LCYZNssvlG', NULL, 8101245951, 'UKILPARA ', NULL, NULL, 'Contractual', NULL, '1', '0', NULL, '2022-09-08 15:14:49', '2023-04-05 10:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `employee_apply_leave`
--

CREATE TABLE `employee_apply_leave` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `daysCount` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `note` text NOT NULL,
  `supportingDoc` varchar(255) DEFAULT NULL,
  `status` enum('pending','partially approve','approve','rejected','cancel') NOT NULL,
  `bManagerId` int(11) DEFAULT NULL,
  `pApprovedBy` int(11) DEFAULT NULL,
  `fApprovedBy` int(11) DEFAULT NULL,
  `rejectBy` int(11) DEFAULT NULL,
  `empType` varchar(255) DEFAULT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_apply_leave`
--

INSERT INTO `employee_apply_leave` (`id`, `emp_id`, `start_date`, `end_date`, `daysCount`, `leave_type`, `note`, `supportingDoc`, `status`, `bManagerId`, `pApprovedBy`, `fApprovedBy`, `rejectBy`, `empType`, `is_deleted`, `deteted_by`, `created_at`, `updated_at`) VALUES
(34, 179, '2022-09-22', '2022-09-23', 2, 1, 'Family Program', '', 'approve', 122, 122, 1001, NULL, NULL, '0', NULL, '2022-09-21 05:24:37', '2023-04-05 10:02:41'),
(35, 196, '2022-09-21', '2022-09-24', 4, 2, 'Fever', '1663758485.jpg', 'rejected', NULL, NULL, NULL, 1001, NULL, '0', NULL, '2022-09-21 05:38:05', '2023-04-05 10:02:41'),
(36, 157, '2022-10-13', '2022-10-14', 2, 1, 'Reject or Approved Email to Employee Test', '', 'rejected', 166, NULL, NULL, 166, NULL, '0', NULL, '2022-10-12 01:34:04', '2023-04-05 10:02:41'),
(37, 157, '2022-10-14', '2022-10-14', 1, 1, 'Email check for leave reject or approve', '', 'rejected', 166, NULL, NULL, 166, NULL, '0', NULL, '2022-10-12 02:04:34', '2023-04-05 10:02:41'),
(38, 157, '2022-10-13', '2022-10-15', 3, 7, 'Test for reject/approved by name', '', 'rejected', 166, NULL, NULL, 166, NULL, '0', NULL, '2022-10-12 02:12:45', '2023-04-05 10:02:41'),
(39, 157, '2022-10-26', '2022-10-26', 1, 3, 'Hire level approved email test', '', 'cancel', 166, 166, 1001, NULL, NULL, '0', NULL, '2022-10-12 03:42:05', '2023-04-05 10:02:41'),
(40, 157, '2022-10-27', '2022-10-29', 3, 8, 'Hire level reject email test', '', 'rejected', 166, 166, NULL, 167, NULL, '0', NULL, '2022-10-12 04:18:37', '2023-04-05 10:02:41'),
(41, 157, '2022-11-09', '2022-11-10', 2, 2, 'Leave modify Test, Check leave modify table without supporting document', '1666164347.jpg', 'cancel', 166, 166, 1001, NULL, NULL, '0', NULL, '2022-10-17 04:00:51', '2023-04-05 10:02:41'),
(42, 166, '2022-10-28', '2022-10-28', 1, 1, 'Leave apply as a Branch Manager', '', 'pending', 166, NULL, NULL, NULL, NULL, '0', NULL, '2022-10-19 05:42:59', '2023-04-05 10:02:41'),
(43, 157, '2022-10-27', '2022-10-27', 1, 1, 'Modify leave test pending state..modify==>State Partialyy Approved...modify==>Removed from Hire level leave table\r\nFully approved, again leave modified by employee', NULL, 'pending', 166, 166, 1001, NULL, NULL, '0', NULL, '2022-10-21 02:45:49', '2023-04-05 10:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `employee_bkp02sep2022`
--

CREATE TABLE `employee_bkp02sep2022` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_bkp02sep2022`
--

INSERT INTO `employee_bkp02sep2022` (`id`, `emp_id`, `name`, `grade`, `phone`, `branch`, `post`, `status`, `is_deleted`, `deteted_by`, `created_at`, `updated_at`) VALUES
(1, 115, 'Amit sarkar', 'Gr-III', 8373096017, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(2, 170, 'Amit Kumar Chatterjee', 'Gr-II(A)', 8373096205, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(3, 196, 'Arnab Sarkar', 'Gr-II(A)', 8373096201, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(4, 154, 'Abhijit Saha', 'Gr-II(B)', 8900077770, 'HEAD OFFICE', 'JUNIOR OFFICER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(5, 191, 'Avijit Ghosh', 'Gr-III', 8373096024, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(6, 238, 'Avik Ghosh', 'Gr-II(A)', 8373096216, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(7, 134, 'Kishor Biswas', 'Gr-II(A)', 8373096236, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(8, 198, 'Kartick Baidya', 'Gr-II(B)', 8250522163, 'HEAD OFFICE', 'JUNIOR OFFICER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(9, 131, 'Prantik Banerjee', 'Gr-II(A)', 8373096202, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(10, 132, 'Samiran Saha', 'Gr-II(A)', 8373096241, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(11, 167, 'Sandip Karmakar', 'Gr-II(A)', 8373096224, 'HEAD OFFICE', 'AGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(12, 204, 'Soumalya Das', 'Gr-III', 8373096254, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(13, 236, 'Tapas Biswas', 'Gr-I(B)', 8373888398, 'HEAD OFFICE', 'DGM', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(14, 251, 'Anuvab Maity', 'Gr-III', 8420821220, 'HEAD OFFICE', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(15, 157, 'Mahadeb majumdar', 'Gr-II(B)', 8250785874, 'MOHANBATI', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(16, 211, 'Moumita Das', 'Gr-III', 8373096008, 'MOHANBATI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(17, 166, 'Sagar Banerjee', 'Gr-II(A)', 8373096226, 'MOHANBATI', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(18, 206, 'Sushovan Sarkar', 'Gr-III', 8373096220, 'MOHANBATI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(19, 249, 'Monalisa Paul', 'Gr-III', 8170965374, 'MOHANBATI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(20, 189, 'Kalipada Sarkar', 'Gr-III', 8373096246, 'UKILPARA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(21, 135, 'Kuntal Chakraborty', 'Gr-II(A)', 8373096233, 'UKILPARA', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(22, 172, 'Mamoni Mondal', 'Gr-III', 8373096025, 'UKILPARA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(23, 120, 'Kshitish Chandra Mondal', 'Gr-II(B)', 8373096190, 'MAIN BRANCH', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(24, 209, 'Kanika Soren', 'Gr-III', 7872281063, 'MAIN BRANCH', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(25, 201, 'SHAHANSHA SAJAHAN KABIR', 'Gr-II(B)', 8373096210, 'MAIN BRANCH', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(26, 182, 'Tathagata Deb', 'Gr-III', 8373096006, 'MAIN BRANCH', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(27, 122, 'Kripa Bala', 'Gr-II(A)', 8373096231, 'MAIN BRANCH', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(28, 179, 'Avijit Dutta', 'Gr-III', 9749019251, 'MAIN BRANCH', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(29, 147, 'Dilip Kumar Mandal', 'Gr-II(B)', 8373096191, 'HEMTABAD', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(30, 183, 'Dipika Mondal', 'Gr-III', 9932897399, 'HEMTABAD', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(31, 239, 'Nirmalendu Nath', 'Gr-III', 8373096406, 'HEMTABAD', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(32, 207, 'Pintu Kumar Biswas', 'Gr-III', 7029789177, 'KUNORE', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(33, 141, 'Siddhartha Sekhar Pattadar', 'Gr-II(B)', 8373096238, 'KUNORE', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(34, 113, 'Chiranjib jana', 'Gr-II(A)', 8373096203, 'DALKHOLA', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(35, 111, 'Subrata Mallick', 'Gr-III', 9083092077, 'DALKHOLA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(36, 250, 'Palash Pahari', 'Gr-III', 8167525804, 'DALKHOLA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(37, 140, 'Biswanath Biswas', 'Gr-II(A)', 8373096192, 'TUNGIDIGHI', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(38, 153, 'Raghu Nath Das', 'Gr-III', 8373096014, 'TUNGIDIGHI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(39, 247, 'Nipun Kr. Khan', 'Gr-III', 8910737624, 'TUNGIDIGHI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(40, 190, 'Prasenjit Mallick', 'Gr-III', 8373096090, 'TUNGIDIGHI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(41, 186, 'Gopal Soren', 'Gr-III', 7318977083, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(42, 203, 'Gouranga Mondal', 'Gr-III', 8373096089, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(43, 139, 'Prasenjit Ghosh', 'Gr-II(A)', 8373096207, 'KUSHMANDI', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(44, 152, 'Shibu Gupta', 'Gr-III', 8509128068, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(45, 244, 'Umme Salma', 'Gr-III', 9064032315, 'KUSHMANDI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(46, 200, 'Bhaskar Tirkey', 'Gr-II(B)', 8373096212, 'BUNIADPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(47, 187, 'Chinmoy Roy', 'Gr-III', 8617618846, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(48, 208, 'Debabrata Hansda', 'Gr-III', 8373096013, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(49, 151, 'Rajali Murmu', 'Gr-IV', 0, 'BUNIADPUR', 'SUBORDINATE', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(50, 169, 'Sanjoy Chakraborty', 'Gr-II(A)', 8373096222, 'BUNIADPUR', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(51, 192, 'Swarup Ratan Das', 'Gr-III', 8373096026, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(52, 245, 'Aniruddha Saha', 'Gr-III', 7501341907, 'BUNIADPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(53, 149, 'Bijay Kumar Mahato', 'Gr-II(B)', 8373096230, 'HARIRAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(54, 168, 'Bharat Chandra Sarkar', 'Gr-II(A)', 8373096228, 'HARIRAMPUR', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(55, 136, 'Kartick Chandra Sarkar', 'Gr-II(B)', 8373096206, 'HARIRAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(56, 112, 'Ranjit Kumar Barman', 'Gr-III', 9775926998, 'HARIRAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(57, 176, 'Amit Kumar Chowdhury', 'Gr-III', 7908013075, 'KALIYAGANJ', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(58, 110, 'Biswajit Talukdar', 'Gr-III', 7001737267, 'KALIYAGANJ', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(59, 150, 'Najrul Islam', 'Gr-II(A)', 8373096243, 'KALIYAGANJ', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(60, 145, 'Rabindra Nath Sarkar', 'Gr-II(B)', 8373096208, 'KALIYAGANJ', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(61, 194, 'Sandip Ghosh', 'Gr-III', 8373096020, 'KALIYAGANJ', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(62, 185, 'Dipak Kumar Singha', 'Gr-III', 9933853162, 'KANKI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(63, 210, 'Mohaimenur Rahman', 'Gr-III', 7001606852, 'KANKI', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(64, 163, 'Pranab Sengupta', 'Gr-II(B)', 9836903126, 'KANKI', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(65, 143, 'Idris Naster', 'Gr-II(B)', 8373096218, 'PANJIPARA', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(66, 174, 'Koushik Roy', 'Gr-III', 8918758012, 'PANJIPARA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(67, 180, 'Sohrab Alam', 'Gr-III', 8373096244, 'PANJIPARA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(68, 243, 'Joy Paul', 'Gr-III', 7001738573, 'PANJIPARA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(69, 137, 'Brojo Mohan Bag', 'Gr-II(A)', 8373096221, 'ITAHAR', 'BRANCH MANAGER', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(70, 188, 'Nurul Islam', 'Gr-III', 6294411283, 'ITAHAR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(71, 181, 'Sujit Kumar Das', 'Gr-III', 9832551403, 'ITAHAR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(72, 156, 'Sujit Biswas', 'Gr-II(B)', 9641363126, 'ITAHAR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(73, 195, 'Swapan Kumar Modak', 'Gr-III', 8918759571, 'ITAHAR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(74, 177, 'Bikash Chandra Das', 'Gr-III', 8918397385, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(75, 205, 'Bikash Sarkar', 'Gr-III', 8373096034, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(76, 155, 'Bazlar Rahman', 'Gr-II(B)', 9375888406, 'ISLAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(77, 175, 'Pabitra Kumar Ojha', 'Gr-III', 8373096215, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(78, 199, 'Prasun Mukherjee', 'Gr-II(B)', 8373096211, 'ISLAMPUR', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(79, 246, 'Bhaskar Barman', 'Gr-III', 9563252479, 'ISLAMPUR', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(80, 197, 'Koushik Roy', 'Gr-II(B)', 8373096219, 'CHOPRA', 'ACCOUNTANT', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(81, 184, 'Sohail Ahmed', 'Gr-III', 7001598529, 'CHOPRA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(82, 240, 'Tuhin Subhra Saha', 'Gr-III', 8373096405, 'CHOPRA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41'),
(83, 248, 'Aakash Chatterjee', 'Gr-III', 6290216865, 'CHOPRA', 'CLERICAL', '1', '0', NULL, '2022-08-12 07:48:31', '2023-04-05 10:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `casual_leave` int(11) NOT NULL,
  `sick_leave` int(11) NOT NULL,
  `privilege_leave` int(11) NOT NULL,
  `maternity_leave` int(11) NOT NULL,
  `bereavement_leave` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_modify_leave`
--

CREATE TABLE `employee_modify_leave` (
  `id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `daysCount` int(11) DEFAULT NULL,
  `note` text,
  `status` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_modify_leave`
--

INSERT INTO `employee_modify_leave` (`id`, `leave_id`, `emp_id`, `leave_type`, `start_date`, `end_date`, `daysCount`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 41, 157, 1, '2022-11-08', '2022-11-09', 2, 'Leave modify Test, Tanmoy', 'pending', '2022-10-19 01:32:56', '2022-10-19 01:32:56'),
(2, 41, 157, 1, '2022-11-08', '2022-11-09', 2, 'Leave modify Test, Tanmoy', 'pending', '2022-10-19 01:55:47', '2022-10-19 01:55:47'),
(3, 41, 157, 2, '2022-11-09', '2022-11-10', 2, 'Leave modify Test, Check leave modify table', 'pending', '2022-10-19 02:12:33', '2022-10-19 02:12:33'),
(4, 41, 157, 2, '2022-11-09', '2022-11-10', 2, 'Leave modify Test, Check leave modify table without supporting document', 'approve', '2022-10-21 02:13:58', '2022-10-21 02:13:58'),
(5, 43, 157, 1, '2022-10-27', '2022-10-27', 1, 'Modify leave test', 'pending', '2022-10-21 02:47:22', '2022-10-21 02:47:22'),
(6, 43, 157, 1, '2022-10-27', '2022-10-27', 1, 'Modify leave test pending state..modify', 'partially approve', '2022-10-21 02:48:20', '2022-10-21 02:48:20'),
(7, 43, 157, 1, '2022-10-27', '2022-10-27', 1, 'Modify leave test pending state..modify==>State Partialyy Approved...modify', 'pending', '2022-10-21 03:06:48', '2022-10-21 03:06:48'),
(8, 43, 157, 1, '2022-10-27', '2022-10-27', 1, 'Modify leave test pending state..modify==>State Partialyy Approved...modify==>Removed from Hire level leave table', 'approve', '2022-10-21 05:20:06', '2022-10-21 05:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `event_calendar`
--

CREATE TABLE `event_calendar` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_calendar`
--

INSERT INTO `event_calendar` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p><p><br></p><h2>Where does it come from?</h2><p>\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, "Lorem ipsum dolor sit amet..", comes from a line in section \r\n1.10.32.</p></div>', '2022-07-28 00:23:29', '2023-04-05 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_id`, `fullname`, `phone`, `email`, `branch`, `messages`, `attachment`, `created_at`, `updated_at`) VALUES
(1, '2022/KALIYAGANJ BRANCH/0001', 'Sudip Das', 8974562216, 'sudip@gmail.com', 'KALIYAGANJ BRANCH', 'Test Message..', '1661778445.jpg', '2022-08-29 07:37:25', '2023-04-05 10:02:43'),
(2, '2022/MOHANBATI BRANCH/0002', 'Somnath Sen', 8974562218, 'somnath@gmail.com', 'MOHANBATI BRANCH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1661926207.jpg', '2022-08-31 00:40:07', '2023-04-05 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `name`) VALUES
(1, 'Home Page Banner'),
(2, 'Home Page Sidebar Gallery'),
(3, 'Home Page Middle Banner'),
(4, 'Home Page Small Slide');

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `id` int(11) NOT NULL,
  `complain_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievance`
--

INSERT INTO `grievance` (`id`, `complain_id`, `fullname`, `phone`, `email`, `branch`, `messages`, `attachment`, `created_at`, `updated_at`) VALUES
(1, '2022/BUNIADPUR BRANCH/0001', 'Sudip Das', 8974562216, 'sudip@gmail.com', 'BUNIADPUR BRANCH', 'Test Message..', '', '2022-08-29 08:24:41', '2023-04-05 10:02:44'),
(2, '2022/MOHANBATI BRANCH/0002', 'Bankim Ghosh', 8974562216, 'bankim@gmail.com', 'MOHANBATI BRANCH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', '2022-08-31 00:42:08', '2023-04-05 10:02:44'),
(3, '2022/TUNGIDIGHI BRANCH/0003', 'Sudipta Chatterjee', 8974562218, 'sudipta@gmail.com', 'TUNGIDIGHI BRANCH', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1661926620.jpg', '2022-08-31 00:47:00', '2023-04-05 10:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `hire_lebel_leave_action`
--

CREATE TABLE `hire_lebel_leave_action` (
  `id` int(11) NOT NULL,
  `leaveId` int(11) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `daysCount` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `note` text NOT NULL,
  `supportingDoc` varchar(255) DEFAULT NULL,
  `status` enum('pending','partially approve','approve','rejected','cancel') NOT NULL,
  `bManagerId` int(11) DEFAULT NULL,
  `pApprovedBy` int(11) DEFAULT NULL,
  `fApprovedBy` int(11) DEFAULT NULL,
  `rejectBy` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hire_lebel_leave_action`
--

INSERT INTO `hire_lebel_leave_action` (`id`, `leaveId`, `emp_id`, `start_date`, `end_date`, `daysCount`, `leave_type`, `note`, `supportingDoc`, `status`, `bManagerId`, `pApprovedBy`, `fApprovedBy`, `rejectBy`, `created_at`, `updated_at`) VALUES
(16, 34, 179, '2022-09-22', '2022-09-23', 2, 1, 'Family Program', NULL, 'approve', 122, 122, 1001, NULL, '2022-09-21 05:27:46', '2022-09-21 05:27:46'),
(17, 35, 196, '2022-09-21', '2022-09-24', 4, 2, 'Fever', '1663758485.jpg', 'rejected', NULL, NULL, NULL, 1001, '2022-09-21 05:38:05', '2022-09-21 05:38:05'),
(18, 39, 157, '2022-10-26', '2022-10-26', 1, 3, 'Hire level approved email test', NULL, 'partially approve', 166, 166, NULL, NULL, '2022-10-12 03:42:26', '2022-10-12 03:42:26'),
(19, 39, 157, '2022-10-26', '2022-10-26', 1, 3, 'Hire level approved email test', NULL, 'approve', 166, 166, 1001, NULL, '2022-10-12 03:48:49', '2022-10-12 03:48:49'),
(20, 40, 157, '2022-10-27', '2022-10-29', 3, 8, 'Hire level reject email test', NULL, 'rejected', 166, 166, NULL, 167, '2022-10-12 04:19:23', '2022-10-12 04:19:23'),
(21, 42, 166, '2022-10-28', '2022-10-28', 1, 1, 'Leave apply as a Branch Manager', '', 'pending', NULL, NULL, NULL, NULL, '2022-10-19 05:42:59', '2022-10-19 05:42:59'),
(25, 41, 157, '2022-11-09', '2022-11-10', 2, 2, 'Leave modify Test, Check leave modify table without supporting document', '1666164347.jpg', 'cancel', 166, 166, 1001, NULL, '2022-10-21 00:40:15', '2022-10-21 02:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_corner`
--

CREATE TABLE `knowledge_corner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knowledge_corner`
--

INSERT INTO `knowledge_corner` (`id`, `name`, `file`, `status`, `created_by`, `is_deleted`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Knowledge corner sample pdf 4', '1658929291.pdf', '1', 20, '0', NULL, '2023-04-05 10:02:45', '2022-07-27 02:41:31'),
(2, 'Knowledge corner sample pdf 3', '1658929282.pdf', '1', 20, '0', NULL, '2023-04-05 10:02:45', '2022-07-27 02:41:22'),
(3, 'Knowledge corner sample pdf 2', '1658929273.pdf', '1', 20, '0', 20, '2023-04-05 10:02:45', '2022-07-27 02:41:13'),
(4, 'Knowledge corner sample pdf 1', '1658929237.pdf', '1', 20, '0', 20, '2023-04-05 10:02:45', '2022-07-27 02:40:37'),
(5, 'Knowledge corner sample pdf 5', '1658929321.pdf', '1', 20, '0', NULL, '2023-04-05 10:02:45', '2022-07-27 02:42:01'),
(6, 'Knowledge corner sample pdf 6', '1658929330.pdf', '1', 20, '0', NULL, '2023-04-05 10:02:45', '2022-07-27 02:42:10'),
(7, 'Knowledge corner sample pdf 7', '1658929341.pdf', '1', 20, '0', NULL, '2023-04-05 10:02:45', '2022-07-27 02:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `leavetype`
--

CREATE TABLE `leavetype` (
  `id` int(11) NOT NULL,
  `leaveName` varchar(255) NOT NULL,
  `Permanent` int(11) NOT NULL,
  `Contractual` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leavetype`
--

INSERT INTO `leavetype` (`id`, `leaveName`, `Permanent`, `Contractual`, `created_at`, `updated_at`) VALUES
(1, 'Casual Leave', 14, 0, '2022-09-08 06:20:52', '2022-09-08 06:20:52'),
(2, 'Sick Leave', 0, 0, '2022-09-08 06:21:14', '2022-09-08 06:21:14'),
(3, 'Privilege Leave', 30, 18, '2022-09-08 06:21:52', '2022-09-08 06:21:52'),
(4, 'Maternity Leave', 0, 0, '2022-09-08 06:22:35', '2022-09-08 06:22:35'),
(5, 'Bereavement Leave', 0, 0, '2022-09-08 06:22:57', '2022-09-08 06:22:57'),
(6, 'Compensatory Leave', 7, 0, '2022-09-13 09:59:50', '2022-09-13 09:59:50'),
(7, 'Special Leave', 20, 0, '2022-09-13 10:01:06', '2022-09-13 10:01:06'),
(8, 'Paternity Leave', 15, 0, '2022-09-13 10:01:46', '2022-09-13 10:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameBengali` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `is_favourite` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `nameBengali`, `latitude`, `longitude`, `type`, `is_favourite`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Kolkata Debnidhi', NULL, '22.4259758', '87.2991505', NULL, '0', '1', '1', '2022-11-07 06:33:48', '2022-11-30 12:34:11'),
(2, 'Bangalore', NULL, '22.6170686', '91.6809283', NULL, '1', '1', '1', '2022-11-07 06:34:48', '2022-11-30 12:34:15'),
(3, 'Chennai', NULL, '22.4259758', '87.2991505', NULL, '0', '1', '1', '2022-11-07 06:52:53', '2022-11-07 06:53:44'),
(4, 'Ticket Counter', NULL, '22.5241365', '88.3386490', NULL, '0', '1', '1', '2022-11-07 08:22:54', '2022-11-30 12:34:18'),
(5, 'Coffee House Entrance 1', NULL, '22.4259758', '87.2991505', NULL, '0', '1', '1', '2022-11-15 07:19:25', '2022-11-30 12:34:34'),
(6, 'Patha Bhawan', NULL, '22.6170686', '87.2991505', 2, '0', '1', '1', '2022-11-15 07:19:56', '2022-11-30 12:34:32'),
(7, 'Detention Cell', NULL, '22.5241297', '88.3386490', 5, '1', '1', '1', '2022-11-15 07:22:39', '2022-11-30 12:34:36'),
(8, 'Curator Room', NULL, '22.6170686', '91.6809283', 1, '1', '1', '1', '2022-11-15 07:23:03', '2022-11-30 12:34:39'),
(9, 'Souvenir & Coffee Shop', 'স্যুভেনির এবং কফি শপ', '22.6170686', '91.6809283', 2, '1', '1', '1', '2022-11-15 07:49:20', '2022-11-30 12:34:42'),
(10, 'First Aid Point 2', 'নিকটতম টয়লেট', '22.6170686', '88.3386477', 3, '1', '1', '1', '2022-11-15 07:57:35', '2022-11-30 12:34:44'),
(11, 'fdgdgdb', 'tyrt', '22.4259758', '88.3386490', NULL, '0', '1', '1', '2022-11-15 14:29:38', '2022-11-30 12:34:28'),
(12, 'Alipore Museum Entrance Gate', NULL, '22.5240122', '88.3385224', 1, '0', '1', '0', '2022-11-30 12:41:23', '2022-11-30 12:45:04'),
(13, 'Coffee House Entrance 1', NULL, '22.5241473', '88.3384023', 2, '0', '1', '0', '2022-11-30 12:44:48', '2022-11-30 12:44:48'),
(14, 'Ticket Counter', NULL, '22.5241365', '88.3386490', NULL, '0', '1', '0', '2022-11-30 12:46:01', '2022-11-30 12:46:01'),
(15, 'Museum Office', NULL, '22.5241297', '88.3386477', NULL, '0', '1', '0', '2022-11-30 12:47:18', '2022-11-30 12:47:18'),
(16, 'First Aid Point 1', NULL, '22.5241297', '88.3386477', 3, '0', '1', '0', '2022-11-30 12:48:05', '2022-11-30 12:48:05'),
(17, 'Information Center', NULL, '22.5241631', '88.3386752', NULL, '0', '1', '0', '2022-11-30 12:49:53', '2022-11-30 12:49:53'),
(18, 'Curator Room', NULL, '22.5240900', '88.3386853', NULL, '0', '1', '0', '2022-11-30 12:50:30', '2022-11-30 12:50:30'),
(19, 'Coffee House Entrance 2', NULL, '22.5242881', '88.3387860', 2, '0', '1', '0', '2022-11-30 13:01:24', '2022-11-30 13:01:24'),
(20, 'Patha Bhawan', NULL, '22.5247925', '88.3388824', NULL, '0', '1', '0', '2022-11-30 13:01:59', '2022-11-30 13:01:59'),
(21, 'Entrance of Gallows', 'ফাঁসিকাঠ', '22.5251127', '88.3388867', NULL, '1', '1', '0', '2022-11-30 13:10:18', '2022-11-30 13:10:18'),
(22, 'Detention Cell', NULL, '22.5250966', '88.3388612', NULL, '0', '1', '0', '2022-11-30 13:11:10', '2022-11-30 13:11:10'),
(23, 'Gallows', NULL, '22.5251411', '88.3388095', NULL, '0', '1', '0', '2022-11-30 13:12:09', '2022-11-30 13:12:09'),
(24, 'Netaji Cell Building Entrance', 'নেতাজি কক্ষ ভবন প্রবেশদ্বার', '22.5251341', '88.3388384', NULL, '1', '1', '0', '2022-11-30 13:14:49', '2022-11-30 13:14:49'),
(25, 'Dr Bidhan Chandra Roy Cell (Ground Floor)', NULL, '22.5250623', '88.3389163', NULL, '0', '1', '0', '2022-11-30 13:15:53', '2022-11-30 13:15:53'),
(26, 'Nataji Cell (1st Floor)', NULL, '22.5250623', '88.3389163', NULL, '0', '1', '0', '2022-11-30 13:16:37', '2022-11-30 13:16:37'),
(27, 'Deshbandhu Chittaranjan Das Cell (1st Floor)', NULL, '22.5250623', '88.3389163', NULL, '0', '1', '0', '2022-11-30 13:17:24', '2022-11-30 13:17:24'),
(28, 'Deshapriya Jatindra Mohan Sengupta Cell (1st Floor)', NULL, '22.5250623', '88.3389163', NULL, '0', '1', '0', '2022-11-30 13:25:04', '2022-11-30 13:58:00'),
(29, 'Martyrs Monument', NULL, '22.5244839', '88.3390536', NULL, '0', '1', '0', '2022-11-30 13:27:00', '2022-11-30 13:27:00'),
(30, 'Nehru Cell', 'নেহরু কক্ষ', '22.5249232', '88.3393116', NULL, '1', '1', '0', '2022-11-30 13:29:18', '2022-11-30 13:29:18'),
(31, 'Library & Seminar Hall', NULL, '22.5249521', '88.3393231', NULL, '0', '1', '0', '2022-11-30 13:30:20', '2022-11-30 13:30:20'),
(32, 'General Cell (1 & 2)', NULL, '22.5252412', '88.3395065', NULL, '0', '1', '0', '2022-11-30 13:30:46', '2022-11-30 13:30:46'),
(33, 'General Cell (3)', NULL, '22.5252171', '88.3394872', NULL, '0', '1', '0', '2022-11-30 13:31:36', '2022-11-30 13:31:36'),
(34, 'General Cell (4)', NULL, '22.5253185', '88.3395276', NULL, '0', '1', '0', '2022-11-30 13:32:41', '2022-11-30 13:32:41'),
(35, 'Historic Prison Cell', NULL, '22.5260709', '88.3398482', NULL, '0', '1', '0', '2022-11-30 13:33:23', '2022-11-30 13:33:23'),
(36, 'Food Zone', NULL, '22.5269349', '88.3396459', 2, '0', '1', '0', '2022-11-30 13:34:07', '2022-11-30 13:34:07'),
(37, 'Jail Hospital Building Exhibition', 'জেল হাসপাতাল ভবন প্রদর্শনী', '22.5267369', '88.3396632', NULL, '1', '1', '0', '2022-11-30 13:42:15', '2022-11-30 13:42:15'),
(38, 'First Aid Point 2', NULL, '22.5267511', '88.3396966', 3, '0', '1', '0', '2022-11-30 13:43:02', '2022-11-30 13:43:02'),
(39, 'Souvenir & Coffee Shop', NULL, '22.5267511', '88.3396966', 2, '0', '1', '0', '2022-11-30 13:43:51', '2022-11-30 13:43:51'),
(40, 'Cafe Ekante Kitchen', NULL, '22.5267511', '88.3396966', 2, '0', '1', '0', '2022-11-30 13:44:29', '2022-11-30 13:44:29'),
(41, 'Light & Sound Show Gallery', 'আলো এবং ধ্বনি প্রদর্শনী স্থান', '22.5268284', '88.3403093', NULL, '1', '1', '0', '2022-11-30 13:46:38', '2022-11-30 13:46:38'),
(42, 'Exhibition Hall Entrance (Cell No 5)', NULL, '22.5264088', '88.3400560', NULL, '0', '1', '0', '2022-11-30 13:47:03', '2022-11-30 13:47:03'),
(43, 'Public Drinking Water', NULL, '22.5253779', '88.3398218', 4, '0', '1', '0', '2022-11-30 13:48:16', '2022-11-30 13:48:16'),
(44, 'Watch Tower', NULL, '22.5252541', '88.3397300', NULL, '0', '1', '0', '2022-11-30 13:48:56', '2022-11-30 13:48:56'),
(45, 'Tantkal-Weaving Room', NULL, '22.5246580', '88.3396938', NULL, '0', '1', '0', '2022-11-30 13:49:47', '2022-11-30 13:49:47'),
(46, 'Public Toilet', NULL, '22.5247251', '88.3393476', 5, '0', '1', '0', '2022-11-30 13:50:30', '2022-11-30 13:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_20_143732_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(13, 'App\\Models\\User', 1),
(14, 'App\\Models\\User', 2),
(13, 'App\\Models\\User', 20),
(14, 'App\\Models\\User', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(22, 'manage-settings', 'web', '2022-07-21 04:56:29', '2022-07-21 04:56:29'),
(23, 'manage-category', 'web', '2022-07-21 04:57:28', '2022-07-21 04:57:28'),
(24, 'manage-cms', 'web', '2022-07-21 04:57:44', '2022-07-21 04:57:44'),
(25, 'manage-photo-gallery', 'web', '2022-07-21 04:58:10', '2022-07-21 04:58:10'),
(26, 'manage-permission', 'web', '2022-07-21 04:58:46', '2022-07-21 04:58:46'),
(27, 'manage-role', 'web', '2022-07-21 04:59:02', '2022-07-21 04:59:02'),
(28, 'manage-subadmin', 'web', '2022-07-21 04:59:22', '2022-07-21 05:48:31'),
(30, 'manage-branch', 'web', '2022-07-26 00:09:54', '2022-07-26 00:09:54'),
(31, 'manage-eventcalendar', 'web', '2022-07-27 23:31:26', '2022-07-27 23:31:26'),
(32, 'manage-knowledge-corner', 'web', '2022-07-28 01:58:32', '2022-07-28 01:59:58'),
(33, 'manage-tender', 'web', '2022-08-04 05:29:21', '2022-08-04 05:29:21'),
(34, 'manage-organisation', 'web', '2022-08-04 05:34:52', '2022-08-04 05:34:52'),
(35, 'manage-notice', 'web', '2022-08-08 10:41:59', '2022-08-08 10:41:59'),
(36, 'manage-employee', 'web', '2022-08-12 01:17:24', '2022-08-12 01:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `display_title` varchar(255) NOT NULL,
  `position` int(11) NOT NULL COMMENT 'id of categories table',
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deteted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery_image`
--

CREATE TABLE `photo_gallery_image` (
  `id` int(11) NOT NULL,
  `gallery_category_id` int(11) DEFAULT NULL COMMENT 'id of gallery_category table\r\n',
  `image` varchar(255) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `short_desc` text,
  `long_desc` text,
  `status` enum('1','0') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo_gallery_image`
--

INSERT INTO `photo_gallery_image` (`id`, `gallery_category_id`, `image`, `title`, `short_desc`, `long_desc`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, '1658814981-0.jpg', 'Easy Agricultural Loan', 'India is predominantly an agricultural economy and the nation thrives on the basis of this sector. Farming is a set of many activities that are', NULL, '1', '0', '2022-07-26 00:26:21', '2023-04-05 10:02:49'),
(2, 1, '1658814981-1.jpg', 'Cash Credit Loans', 'India is predominantly an agricultural economy and the nation thrives on the basis of this sector. Farming is a set of many activities that are', NULL, '1', '0', '2022-07-26 00:26:21', '2023-04-05 10:02:49'),
(3, 2, '1658990815-0.jpg', NULL, NULL, NULL, '1', '0', '2022-07-28 01:16:55', '2023-04-05 10:02:49'),
(4, 2, '1658990815-1.jpg', NULL, NULL, NULL, '1', '0', '2022-07-28 01:16:55', '2023-04-05 10:02:49'),
(5, 2, '1658990815-2.jpg', NULL, NULL, NULL, '1', '0', '2022-07-28 01:16:55', '2023-04-05 10:02:49'),
(6, 2, '1658990815-3.jpg', NULL, NULL, NULL, '1', '0', '2022-07-28 01:16:55', '2023-04-05 10:02:49'),
(7, 3, '1662532757.jpg', 'Message from CEO\'s Desk:', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><br>\r\n            \r\n            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\r\n              industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and\r\n              scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap\r\n              into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the\r\n              release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing\r\n              software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, '1', '0', '2022-07-28 01:47:36', '2023-04-05 10:02:49'),
(8, 4, '1659001844-0.jpg', 'April 17, 2017', '<div style="line-height: 19px;"><font color="#ffffff">Tender for Development -Filing Portal through New Website</font></div>', NULL, '1', '0', '2022-07-28 04:20:44', '2023-04-05 10:02:49'),
(9, 4, '1659001844-1.jpg', 'January 1, 2016', '<div style="font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><span style="font-family: Arial;"><font color="#ffffff" style="">Easy Agricultural Loan</font></span></div>', NULL, '1', '0', '2022-07-28 04:20:44', '2023-04-05 10:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(13, 'Super Admin', 'web', '2022-07-21 05:05:11', '2022-07-21 05:05:11'),
(14, 'Sub Admin', 'web', '2022-07-21 05:05:23', '2022-07-21 05:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(22, 13),
(23, 13),
(24, 13),
(25, 13),
(26, 13),
(27, 13),
(28, 13),
(30, 13),
(31, 13),
(32, 13),
(33, 13),
(34, 13),
(35, 13),
(36, 13),
(22, 14),
(23, 14),
(24, 14),
(25, 14);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `address` text,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `footer_title` varchar(200) DEFAULT NULL,
  `footer_description` text,
  `header_logo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `footer_logo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `address`, `email`, `phone`, `fax`, `footer_title`, `footer_description`, `header_logo`, `facebook`, `youtube`, `linkedin`, `instagram`, `twitter`, `footer_logo`, `created_at`, `updated_at`) VALUES
(1, 'Audio..', 'audio@gmail.com', '03523-242667', '03523-242460', 'About Us', '<p><span style="background-color: transparent; font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Audio...</span><br></p>', '1666676957_header.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 22:30:06', '2022-10-25 00:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `tender_no` varchar(200) DEFAULT NULL,
  `tender_subject` text,
  `tender_type` varchar(255) DEFAULT NULL,
  `tender_date` datetime DEFAULT NULL,
  `last_date_of_application` datetime DEFAULT NULL,
  `tender_notice` varchar(250) DEFAULT NULL,
  `related_notification` varchar(200) DEFAULT NULL,
  `status` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `tender_no`, `tender_subject`, `tender_type`, `tender_date`, `last_date_of_application`, `tender_notice`, `related_notification`, `status`, `created_by`, `is_deleted`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'Paper Tender', '2022-10-12 00:00:00', '2022-10-15 00:00:00', '1659074942.pdf', '1659074942_related_notification.pdf', '1', 1, '0', NULL, '2023-04-05 10:02:51', '2022-08-23 07:19:26'),
(2, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'E-Tender', '2022-08-02 00:00:00', '2022-08-10 00:00:00', '1659426390.pdf', '1659426390_related_notification.pdf', '1', 1, '0', NULL, '2023-04-05 10:02:51', '2022-08-23 04:08:48'),
(3, 'test2255', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Paper Tender', '2022-08-23 00:00:00', '2022-08-31 00:00:00', '1661247644.pdf', '1661247644_related_notification.pdf', '1', 1, '0', NULL, '2023-04-05 10:02:51', '2022-08-23 07:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameBengali` varchar(255) DEFAULT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `nameBengali`, `fileName`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Nearest Entry/Exit Gate', 'নিকটতম প্রবেশ/প্রস্থান গেট', '1669628133.png', '0', '2022-11-15 13:02:07', '2022-11-28 09:35:33'),
(2, 'Nearest Food Stall/Restaurant', 'নিকটতম ফুড স্টল/রেস্তোরাঁ', '1669628158.png', '0', '2022-11-15 13:02:34', '2022-11-28 09:35:58'),
(3, 'Nearest First Aid', 'নিকটতম প্রাথমিক চিকিৎসা', '1669628175.png', '0', '2022-11-15 13:03:01', '2022-11-28 09:36:15'),
(4, 'Nearest Drinking Water', 'নিকটতম পানীয় জল', '1669628194.png', '0', '2022-11-15 13:03:33', '2022-11-28 09:36:34'),
(5, 'Nearest Toilet', 'নিকটতম টয়লেট', '1669816585.png', '0', '2022-11-15 13:03:55', '2022-11-30 13:56:25'),
(6, 'Nearest ticket counter', 'নিকটতম টিকিট কাউন্টার', '1668754496.png', '1', '2022-11-18 06:18:08', '2022-11-30 13:55:37'),
(7, 'System test', 'নিকটতম টয়লেট', '', '1', '2022-11-18 06:21:10', '2022-11-18 06:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` enum('S','SA','FU') COLLATE utf8_unicode_ci NOT NULL COMMENT 'S=Superadmin,SA=SubAdmin FU=Frontend User',
  `status` enum('A','I','D') COLLATE utf8_unicode_ci NOT NULL COMMENT 'A-active, I-Inactive, D-Delete',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RCCB', 'admin@admin.com', NULL, '$2y$10$CCAN67JDtTmGgkBlwUdn2.s9LeAoyEcnDtaT6miIiYPmJOuh70esO', 'S', 'A', NULL, '2022-06-30 08:16:50', '2023-02-08 07:53:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audiofile`
--
ALTER TABLE `audiofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_details`
--
ALTER TABLE `branch_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery_image`
--
ALTER TABLE `photo_gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
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
-- AUTO_INCREMENT for table `audiofile`
--
ALTER TABLE `audiofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `branch_details`
--
ALTER TABLE `branch_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_gallery_image`
--
ALTER TABLE `photo_gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
