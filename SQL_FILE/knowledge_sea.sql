-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 06:52 AM
-- Server version: 5.5.29
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge_sea`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'email',
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `it` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `email`, `school`, `college`, `university`, `it`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', '1', '1', '1', '1', '2017-08-31 07:23:19', '2017-09-11 09:41:56'),
(2, 'ango@gmail.com', '1', '1', '0', '0', '2017-09-23 08:01:23', '2017-09-28 07:09:08'),
(3, 'any@gmail.com', '1', '0', '0', '0', '2017-09-28 09:49:14', '2017-09-28 09:49:14'),
(4, 'any@gmail.com', '1', '0', '0', '0', '2017-09-28 09:53:16', '2017-09-28 09:53:16'),
(5, 'any@gmail.com', '1', '0', '0', '0', '2017-09-28 09:56:42', '2017-09-28 09:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'Who r u ??', '2017-10-02 09:41:18', '2017-10-02 09:41:18'),
(2, 'mjnayem@gmail.com', 'gggg', '2017-10-02 09:50:02', '2017-10-02 09:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `exam9candidates`
--

CREATE TABLE `exam9candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam9candidates`
--

INSERT INTO `exam9candidates` (`id`, `email`, `number`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', '7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam9question_answers`
--

CREATE TABLE `exam9question_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `q_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_1` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_2` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_3` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_4` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `q_ans` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam9question_answers`
--

INSERT INTO `exam9question_answers` (`id`, `q_num`, `question`, `op_1`, `op_2`, `op_3`, `op_4`, `q_ans`, `created_at`, `updated_at`) VALUES
(1, '1', 'What is your Name?', 'Nayem', 'Adnan', 'Tonni', 'Any', 'Nayem', NULL, NULL),
(2, '2', '', '', '', '', '', '', NULL, NULL),
(3, '3', '', '', '', '', '', '', NULL, NULL),
(4, '4', '', '', '', '', '', '', NULL, NULL),
(5, '5', '', '', '', '', '', '', NULL, NULL),
(6, '6', '', '', '', '', '', '', NULL, NULL),
(7, '7', '', '', '', '', '', '', NULL, NULL),
(8, '8', '', '', '', '', '', '', NULL, NULL),
(9, '9', '', '', '', '', '', '', NULL, NULL),
(10, '10', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam10candidates`
--

CREATE TABLE `exam10candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam10question_answers`
--

CREATE TABLE `exam10question_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `q_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_1` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_2` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_3` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_4` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `q_ans` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam10question_answers`
--

INSERT INTO `exam10question_answers` (`id`, `q_num`, `question`, `op_1`, `op_2`, `op_3`, `op_4`, `q_ans`, `created_at`, `updated_at`) VALUES
(1, '1', 'nayem', '', '', '', '', '', NULL, NULL),
(2, '2', '', '', '', '', '', '', NULL, NULL),
(3, '3', '', '', '', '', '', '', NULL, NULL),
(4, '4', '', '', '', '', '', '', NULL, NULL),
(5, '5', '', '', '', '', '', '', NULL, NULL),
(6, '6', '', '', '', '', '', '', NULL, NULL),
(7, '7', '', '', '', '', '', '', NULL, NULL),
(8, '8', '', '', '', '', '', '', NULL, NULL),
(9, '9', '', '', '', '', '', '', NULL, NULL),
(10, '10', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam11candidates`
--

CREATE TABLE `exam11candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam11question_answers`
--

CREATE TABLE `exam11question_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `q_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_1` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_2` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_3` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_4` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `q_ans` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam11question_answers`
--

INSERT INTO `exam11question_answers` (`id`, `q_num`, `question`, `op_1`, `op_2`, `op_3`, `op_4`, `q_ans`, `created_at`, `updated_at`) VALUES
(1, '1', '', '', '', '', '', '', NULL, NULL),
(2, '2', '', '', '', '', '', '', NULL, NULL),
(3, '3', '', '', '', '', '', '', NULL, NULL),
(4, '4', '', '', '', '', '', '', NULL, NULL),
(5, '5', '', '', '', '', '', '', NULL, NULL),
(6, '6', '', '', '', '', '', '', NULL, NULL),
(7, '7', '', '', '', '', '', '', NULL, NULL),
(8, '8', '', '', '', '', '', '', NULL, NULL),
(9, '9', '', '', '', '', '', '', NULL, NULL),
(10, '10', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam12candidates`
--

CREATE TABLE `exam12candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam12question_answers`
--

CREATE TABLE `exam12question_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `q_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `question` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_1` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_2` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_3` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `op_4` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `q_ans` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam12question_answers`
--

INSERT INTO `exam12question_answers` (`id`, `q_num`, `question`, `op_1`, `op_2`, `op_3`, `op_4`, `q_ans`, `created_at`, `updated_at`) VALUES
(1, '1', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examlists`
--

CREATE TABLE `examlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '60',
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examlists`
--

INSERT INTO `examlists` (`id`, `title`, `email`, `duration`, `date`, `created_at`, `updated_at`) VALUES
(9, 'Black', 'mjnayem@gmail.com', '60', '2017-10-11 16:0:0', '2017-10-01 05:16:50', '2017-10-01 05:16:50'),
(10, 'Sadakalo', 'mjnayem@gmail.com', '60', '2016-10-10 16:0:0', '2017-10-01 05:18:28', '2017-10-01 05:18:28'),
(11, 'white', 'mjnayem@gmail.com', '60', '2017-11-10 13:0:0', '2017-10-01 06:37:55', '2017-10-01 06:37:55'),
(12, 'Black2', 'mjnayem@gmail.com', '60', '2017-12-10 14:0:0', '2017-10-01 06:40:18', '2017-10-01 06:40:18');

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
(5, '2017_08_29_064036_create_sign_in_ups_table', 1),
(6, '2017_08_29_153855_create_userinfos_table', 1),
(7, '2017_08_31_130655_create_catagories_table', 2),
(8, '2017_08_31_154148_create_questions_table', 3),
(9, '2017_09_28_123749_create_notifications_table', 4),
(10, '2017_10_01_071411_create_examlists_table', 5),
(11, '2017_10_02_152329_create_complains_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_not` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `email`, `check_not`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', '0', NULL, NULL),
(2, 'ango@gmail.com', '1', NULL, NULL),
(3, 'any@gmail.com', '1', '2017-09-28 09:56:42', '2017-09-28 09:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'email',
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'catagory',
  `question` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'question',
  `liked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `email`, `catagory`, `question`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(29, 'mjnayem@gmail.com', 'school', 'ffff', '2', '1', '2017-09-28 00:04:20', '2017-09-29 05:10:42'),
(30, 'ango@gmail.com', 'school', 'What is the meaning of BSMRSTU?', '1', '0', '2017-09-28 07:07:49', '2017-09-29 05:10:33'),
(31, 'ango@gmail.com', 'school', 'gggg', '1', '0', '2017-09-28 07:08:50', '2017-09-29 05:10:32'),
(32, 'ango@gmail.com', 'school', 'gggg', '0', '0', '2017-09-28 07:25:24', '2017-09-28 07:25:24'),
(33, 'ango@gmail.com', 'school', 'gg', '1', '0', '2017-09-28 07:26:54', '2017-09-29 05:10:24'),
(34, 'ango@gmail.com', 'school', 'hhjkk', '1', '0', '2017-09-28 07:36:36', '2017-09-29 05:10:22'),
(35, 'ango@gmail.com', 'school', 'ddd', '1', '0', '2017-09-28 07:38:02', '2017-09-29 05:10:20'),
(36, 'ango@gmail.com', 'school', 'ff', '1', '0', '2017-09-28 07:39:32', '2017-09-29 05:10:17'),
(37, 'ango@gmail.com', 'school', 'ddd', '1', '0', '2017-09-28 07:40:04', '2017-09-29 05:10:15'),
(38, 'ango@gmail.com', 'school', 'ddddhh', '1', '0', '2017-09-28 07:40:25', '2017-09-29 05:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `ques_29ans_table`
--

CREATE TABLE `ques_29ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_29ans_table`
--

INSERT INTO `ques_29ans_table` (`id`, `email`, `answer`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'ffff', '1', '1', '2017-09-28 06:04:36', '2017-09-28 06:05:26'),
(2, 'mjnayem@gmail.com', 'gggg', '0', '1', '2017-09-28 06:16:37', '2017-09-28 06:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `ques_29lik_dislik_table`
--

CREATE TABLE `ques_29lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_29lik_dislik_table`
--

INSERT INTO `ques_29lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'a', '1', '1', '1', '2017-09-28 06:04:56', '2017-09-28 06:05:25'),
(2, 'mjnayem@gmail.com', 'q', '0', '1', '1', '2017-09-28 06:10:58', '2017-09-29 05:10:42'),
(3, 'mjnayem@gmail.com', 'a', '2', '0', '1', '2017-09-28 06:16:43', '2017-09-28 06:16:51'),
(4, 'ango@gmail.com', 'q', '0', '1', '0', '2017-09-28 12:23:41', '2017-09-28 12:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `ques_30ans_table`
--

CREATE TABLE `ques_30ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_30lik_dislik_table`
--

CREATE TABLE `ques_30lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_30lik_dislik_table`
--

INSERT INTO `ques_30lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_31ans_table`
--

CREATE TABLE `ques_31ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_31lik_dislik_table`
--

CREATE TABLE `ques_31lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_31lik_dislik_table`
--

INSERT INTO `ques_31lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_32ans_table`
--

CREATE TABLE `ques_32ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_32lik_dislik_table`
--

CREATE TABLE `ques_32lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_33ans_table`
--

CREATE TABLE `ques_33ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_33lik_dislik_table`
--

CREATE TABLE `ques_33lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_33lik_dislik_table`
--

INSERT INTO `ques_33lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_34ans_table`
--

CREATE TABLE `ques_34ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_34lik_dislik_table`
--

CREATE TABLE `ques_34lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_34lik_dislik_table`
--

INSERT INTO `ques_34lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_35ans_table`
--

CREATE TABLE `ques_35ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_35lik_dislik_table`
--

CREATE TABLE `ques_35lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_35lik_dislik_table`
--

INSERT INTO `ques_35lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_36ans_table`
--

CREATE TABLE `ques_36ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_36lik_dislik_table`
--

CREATE TABLE `ques_36lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_36lik_dislik_table`
--

INSERT INTO `ques_36lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_37ans_table`
--

CREATE TABLE `ques_37ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_37lik_dislik_table`
--

CREATE TABLE `ques_37lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_37lik_dislik_table`
--

INSERT INTO `ques_37lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_38ans_table`
--

CREATE TABLE `ques_38ans_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_38lik_dislik_table`
--

CREATE TABLE `ques_38lik_dislik_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mail',
  `qus_or_ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `liked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `disliked` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ques_38lik_dislik_table`
--

INSERT INTO `ques_38lik_dislik_table` (`id`, `email`, `qus_or_ans`, `a_id`, `liked`, `disliked`, `created_at`, `updated_at`) VALUES
(1, 'mjnayem@gmail.com', 'q', '0', '1', '0', '2017-09-29 05:10:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in_ups`
--

CREATE TABLE `sign_in_ups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sign_in_ups`
--

INSERT INTO `sign_in_ups` (`id`, `name`, `email`, `password`, `rating`, `created_at`, `updated_at`) VALUES
(4, 'Adnan', 'adnan@gmail.com', 'adnan', '0', '2017-08-31 02:59:17', '2017-08-31 02:59:17'),
(5, 'Adnan', 'adnan@gmail.com', 'adnan', '0', '2017-08-31 03:04:36', '2017-08-31 03:04:36'),
(6, 'Adnan', 'adnan@gmail.com', 'adnan', '0', '2017-08-31 03:06:06', '2017-08-31 03:06:06'),
(8, 'Mj Nayem', 'mjnayem@gmail.com', '241316', '0.025', '2017-08-31 07:23:19', '2017-08-31 07:23:19'),
(9, 'ango', 'ango@gmail.com', 'ango', '-0.0005', '2017-09-23 08:01:22', '2017-09-23 08:01:22'),
(12, 'Any', 'any@gmail.com', 'any', '0.0003', '2017-09-28 09:56:41', '2017-09-28 09:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `userinfos`
--

CREATE TABLE `userinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'gmail',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'name',
  `aboutme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'adress',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '017',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fb',
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tw',
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gg',
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gender',
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sc',
  `collage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cl',
  `university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uni',
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dis',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bd',
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dob',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userinfos`
--

INSERT INTO `userinfos` (`id`, `email`, `name`, `aboutme`, `address`, `phone`, `facebook`, `twitter`, `google`, `gender`, `school`, `collage`, `university`, `district`, `country`, `dateofbirth`, `created_at`, `updated_at`) VALUES
(4, 'adnan@gmail.com', 'Adnan', 'I love to reading book.this is my hobby.I want to be a good man', 'Ashuganj,brahmanbaria', '01672690529', 'fb', 'tw', 'gg', 'male', 'School', 'Collage', 'RU', 'B.Baria', 'Bangladesh', '5.2.1996', '2017-08-31 03:06:07', '2017-08-31 03:08:50'),
(6, 'mjnayem@gmail.com', 'Mj Nayem', 'about', 'Ashuganj,brahmanbaria', '01720209319', 'facebook', 'twitter', 'google', 'male', 'Sohagpur school', 'Sohagpur Collage', 'BSMRSTU', 'B.Baria', 'Bangladesh', '1.1.1990', '2017-08-31 07:23:19', '2017-09-04 09:53:48'),
(7, 'ango@gmail.com', 'ango', 'about', 'adress', '017', 'fb', 'tw', 'gg', 'male', 'sc', 'cl', 'uni', 'dis', 'bd', '1.1.1990', '2017-09-23 08:01:22', '2017-09-23 08:01:52'),
(10, 'any@gmail.com', 'Any', 'about', 'adress', '017', 'fb', 'tw', 'gg', 'gender', 'sc', 'cl', 'uni', 'dis', 'bd', 'dob', '2017-09-28 09:56:41', '2017-09-28 09:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam9candidates`
--
ALTER TABLE `exam9candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam9question_answers`
--
ALTER TABLE `exam9question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam10candidates`
--
ALTER TABLE `exam10candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam10question_answers`
--
ALTER TABLE `exam10question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam11candidates`
--
ALTER TABLE `exam11candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam11question_answers`
--
ALTER TABLE `exam11question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam12candidates`
--
ALTER TABLE `exam12candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam12question_answers`
--
ALTER TABLE `exam12question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examlists`
--
ALTER TABLE `examlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_29ans_table`
--
ALTER TABLE `ques_29ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_29lik_dislik_table`
--
ALTER TABLE `ques_29lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_30ans_table`
--
ALTER TABLE `ques_30ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_30lik_dislik_table`
--
ALTER TABLE `ques_30lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_31ans_table`
--
ALTER TABLE `ques_31ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_31lik_dislik_table`
--
ALTER TABLE `ques_31lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_32ans_table`
--
ALTER TABLE `ques_32ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_32lik_dislik_table`
--
ALTER TABLE `ques_32lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_33ans_table`
--
ALTER TABLE `ques_33ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_33lik_dislik_table`
--
ALTER TABLE `ques_33lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_34ans_table`
--
ALTER TABLE `ques_34ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_34lik_dislik_table`
--
ALTER TABLE `ques_34lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_35ans_table`
--
ALTER TABLE `ques_35ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_35lik_dislik_table`
--
ALTER TABLE `ques_35lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_36ans_table`
--
ALTER TABLE `ques_36ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_36lik_dislik_table`
--
ALTER TABLE `ques_36lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_37ans_table`
--
ALTER TABLE `ques_37ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_37lik_dislik_table`
--
ALTER TABLE `ques_37lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_38ans_table`
--
ALTER TABLE `ques_38ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_38lik_dislik_table`
--
ALTER TABLE `ques_38lik_dislik_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in_ups`
--
ALTER TABLE `sign_in_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfos`
--
ALTER TABLE `userinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `exam9candidates`
--
ALTER TABLE `exam9candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam9question_answers`
--
ALTER TABLE `exam9question_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `exam10candidates`
--
ALTER TABLE `exam10candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam10question_answers`
--
ALTER TABLE `exam10question_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `exam11candidates`
--
ALTER TABLE `exam11candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam11question_answers`
--
ALTER TABLE `exam11question_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `exam12candidates`
--
ALTER TABLE `exam12candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam12question_answers`
--
ALTER TABLE `exam12question_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `examlists`
--
ALTER TABLE `examlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `ques_29ans_table`
--
ALTER TABLE `ques_29ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ques_29lik_dislik_table`
--
ALTER TABLE `ques_29lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ques_30ans_table`
--
ALTER TABLE `ques_30ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_30lik_dislik_table`
--
ALTER TABLE `ques_30lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_31ans_table`
--
ALTER TABLE `ques_31ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_31lik_dislik_table`
--
ALTER TABLE `ques_31lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_32ans_table`
--
ALTER TABLE `ques_32ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_32lik_dislik_table`
--
ALTER TABLE `ques_32lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_33ans_table`
--
ALTER TABLE `ques_33ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_33lik_dislik_table`
--
ALTER TABLE `ques_33lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_34ans_table`
--
ALTER TABLE `ques_34ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_34lik_dislik_table`
--
ALTER TABLE `ques_34lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_35ans_table`
--
ALTER TABLE `ques_35ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_35lik_dislik_table`
--
ALTER TABLE `ques_35lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_36ans_table`
--
ALTER TABLE `ques_36ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_36lik_dislik_table`
--
ALTER TABLE `ques_36lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_37ans_table`
--
ALTER TABLE `ques_37ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_37lik_dislik_table`
--
ALTER TABLE `ques_37lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_38ans_table`
--
ALTER TABLE `ques_38ans_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques_38lik_dislik_table`
--
ALTER TABLE `ques_38lik_dislik_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sign_in_ups`
--
ALTER TABLE `sign_in_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `userinfos`
--
ALTER TABLE `userinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
