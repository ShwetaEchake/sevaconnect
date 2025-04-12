-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2025 at 10:52 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kart_sevaconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `id` bigint UNSIGNED NOT NULL,
  `charity_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charity_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charity_details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`id`, `charity_name`, `charity_image`, `charity_details`, `created_at`, `updated_at`) VALUES
(1, 'test-g', '1741238073.jfif', 'non-profit organization dedicated to uplifting underprivileged communities', '2025-03-05 23:43:58', '2025-03-05 23:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `connectstories`
--

CREATE TABLE `connectstories` (
  `id` bigint UNSIGNED NOT NULL,
  `story_date` date NOT NULL,
  `story_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connectstories`
--

INSERT INTO `connectstories` (`id`, `story_date`, `story_image`, `story_video`, `story_summary`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '2025-03-17', '1742303626.jpeg', 'https://www.youtube.com/watch?v=kBSSg6JMoQI', 'The Unity Of Commity', NULL, NULL, NULL, '2025-03-18 07:43:46', '2025-03-18 07:44:43', NULL),
(4, '2025-03-15', '1742303717.jpeg', 'https://www.youtube.com/watch?v=7IFJb-uLEaI', 'The Unity of commity', NULL, NULL, NULL, '2025-03-18 07:45:17', '2025-03-18 07:45:17', NULL),
(5, '2025-03-16', '1742303793.jpeg', 'https://www.youtube.com/watch?v=-rlv4MXg2Nk', 'The Unity Of community', NULL, NULL, NULL, '2025-03-18 07:46:34', '2025-03-18 07:46:34', NULL),
(6, '2025-03-11', '1742303843.jpeg', 'https://www.youtube.com/watch?v=CAuTD57dGuE&list=PLjDn1j2xenDDZFcxBV4vdIofpFvlLk_ET', 'The seve Connectivity', NULL, NULL, NULL, '2025-03-18 07:47:23', '2025-03-18 07:47:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `raised` decimal(10,2) NOT NULL DEFAULT '0.00',
  `type` decimal(8,2) NOT NULL DEFAULT '1.00' COMMENT '1 = Food',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `help_name` text COLLATE utf8mb4_unicode_ci,
  `need_name` text COLLATE utf8mb4_unicode_ci,
  `skill` text COLLATE utf8mb4_unicode_ci,
  `space` text COLLATE utf8mb4_unicode_ci,
  `other` text COLLATE utf8mb4_unicode_ci,
  `to_date` date DEFAULT NULL,
  `multiple_image` text COLLATE utf8mb4_unicode_ci,
  `recurrent` text COLLATE utf8mb4_unicode_ci,
  `from_date` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `material_type` text COLLATE utf8mb4_unicode_ci,
  `amount` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `help_name`, `need_name`, `skill`, `space`, `other`, `to_date`, `multiple_image`, `recurrent`, `from_date`, `address`, `summary`, `material_type`, `amount`, `image`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Event', NULL, NULL, NULL, NULL, '2025-03-05', '1742993268_67e3f774e95fd.jpeg,1742993268_67e3f774e96db.jpeg', 'Time', '2025-03-04', 'Thane Mumbai', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742993268.jpeg', NULL, NULL, NULL, '2025-03-26 07:17:48', '2025-03-26 07:17:48', NULL),
(11, 'Event', NULL, NULL, NULL, NULL, '2025-03-18', '1742993315_67e3f7a396a7a.jpeg,1742993315_67e3f7a396c09.jpeg', 'Time', '2025-03-17', 'Navi Mumbai', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742993315.jpeg', NULL, NULL, NULL, '2025-03-26 07:18:35', '2025-03-26 07:18:35', NULL),
(12, 'Event', NULL, NULL, NULL, NULL, '2025-03-07', '1742993368_67e3f7d833427.jpeg,1742993368_67e3f7d83354b.jpeg,1742993368_67e3f7d83370a.jpeg', 'Time', '2025-03-06', 'Nashik West', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742993368.jpeg', NULL, NULL, NULL, '2025-03-26 07:19:28', '2025-03-26 07:19:28', NULL),
(13, 'Event', NULL, NULL, NULL, NULL, '2025-03-12', '1742993435_67e3f81b5c0be.jpeg,1742993435_67e3f81b5c1a1.jpeg,1742993435_67e3f81b5c2ca.jpeg,1742993435_67e3f81b5c49c.jpeg', 'Time', '2025-03-11', 'Thane', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742993435.jpeg', NULL, NULL, NULL, '2025-03-26 07:20:35', '2025-03-26 07:20:35', NULL),
(14, 'Event', NULL, NULL, NULL, NULL, '2025-03-12', '1742993490_67e3f8526564e.jpeg,1742993490_67e3f85265761.jpeg', 'Time', '2025-03-11', 'Pune', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742993490.jpg', NULL, NULL, NULL, '2025-03-26 07:21:30', '2025-03-26 07:21:30', NULL),
(15, 'Need', 'Financial', NULL, NULL, NULL, '2025-03-19', '1742993530_67e3f87a19674.jpeg', 'Time', NULL, 'thane', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 300, '1742993530.jfif', NULL, NULL, NULL, '2025-03-26 07:22:10', '2025-03-26 07:22:10', NULL),
(16, 'Need', 'Financial', NULL, NULL, NULL, '2025-03-12', '1742993613_67e3f8cd7e4cc.jpeg', 'recurrent', NULL, 'pune', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 40, '1742993628.jpeg', NULL, NULL, NULL, '2025-03-26 07:23:33', '2025-03-26 07:23:48', NULL),
(17, 'Need', 'Financial', NULL, NULL, NULL, '2025-03-08', '1742993931_67e3fa0b07fcc.jpeg', 'Time', NULL, 'thane West', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 4560, '1742993931.jpeg', NULL, NULL, NULL, '2025-03-26 07:28:51', '2025-03-26 07:28:51', NULL),
(18, 'Need', 'Financial', NULL, NULL, NULL, '2025-03-11', '1742993979_67e3fa3b4e17a.jpeg', 'Time', NULL, 'pune', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 340, '1742993979.jfif', NULL, NULL, NULL, '2025-03-26 07:29:39', '2025-03-26 07:29:39', NULL),
(19, 'Need', 'Financial', NULL, NULL, NULL, '2025-03-14', '1742994029_67e3fa6d20761.jpeg', 'recurrent', NULL, 'thane west', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 345, '1742994028.jpeg', NULL, NULL, NULL, '2025-03-26 07:30:29', '2025-03-26 07:30:29', NULL),
(20, 'Job opportunity', NULL, NULL, NULL, NULL, '2025-03-13', '1742994143_67e3fadf257fc.jpeg', NULL, '2025-03-12', 'Thane west', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742994143.jpeg', NULL, NULL, NULL, '2025-03-26 07:32:23', '2025-03-26 07:32:23', NULL),
(21, 'Job opportunity', NULL, NULL, NULL, NULL, '2025-03-14', '1742994226_67e3fb321a776.jpeg', NULL, '2025-03-13', 'nashik west', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742994226.jpeg', NULL, NULL, NULL, '2025-03-26 07:33:46', '2025-03-26 07:33:46', NULL),
(22, 'Job opportunity', NULL, NULL, NULL, NULL, '2025-03-26', '1742994266_67e3fb5a6e29c.jpeg', NULL, '2025-03-25', 'thane West', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742994266.jpeg', NULL, NULL, NULL, '2025-03-26 07:34:26', '2025-03-26 07:34:26', NULL),
(23, 'Job opportunity', NULL, NULL, NULL, NULL, '2025-03-22', '1742994372_67e3fbc46c7b2.jpeg', NULL, '2025-03-11', 'Kalmboli , mumbai', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742994372.jpeg', NULL, NULL, NULL, '2025-03-26 07:36:12', '2025-03-26 07:36:12', NULL),
(24, 'Job opportunity', NULL, NULL, NULL, NULL, '2025-03-25', '1742994438_67e3fc066739b.jpeg', NULL, '2025-03-24', 'Sangli', 'Digital Seva Connect is a secure authentication system designed to connect users to the services', NULL, 0, '1742994438.jpeg', NULL, NULL, NULL, '2025-03-26 07:37:18', '2025-03-26 07:37:18', NULL),
(25, 'Event', NULL, NULL, NULL, NULL, '2025-03-07', '1743398783_67ea277fcef38.png,1743398783_67ea277fcef8d.jfif,1743398783_67ea277fcefe5.png', 'time', '2025-03-06', 'sss', 'dsd fdfdfd', NULL, 0, '1743398783.jpeg', NULL, NULL, NULL, '2025-03-30 23:56:23', '2025-03-30 23:56:23', NULL),
(26, 'Need', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2025-04-10 10:22:27', '2025-04-10 10:22:27', NULL),
(27, 'Need', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2025-04-10 10:22:37', '2025-04-10 10:22:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_10_28_131717_create_personal_access_tokens_table', 1),
(4, '2025_02_20_054009_create_users_table', 1),
(5, '2025_02_25_071705_create_donations_table', 1),
(6, '2025_02_25_095433_create_volunteer_table', 1),
(7, '2025_02_25_111839_create_charity_table', 1),
(8, '2025_02_26_085719_create_sectors_table', 1),
(9, '2025_02_27_051453_create_subsectors_table', 1),
(10, '2025_02_27_154417_create_recommendations_table', 1),
(11, '2025_02_27_232527_create_soevaluations_table', 1),
(12, '2025_03_03_115813_add_status_to_soevaluations_table', 1),
(13, '2025_03_03_123857_change_status_column_type', 1),
(14, '2025_03_03_131307_add_default_status_to_soevaluations', 1),
(15, '2025_03_04_100739_create_organization_types_table', 1),
(16, '2025_03_05_050900_create_recommendation_sectors_table', 1),
(17, '2025_03_05_154453_create_soevaluation_sectors_table', 2),
(18, '2025_03_05_184335_create_soevaluation_documents_table', 2),
(19, '2025_03_05_200541_create_soevaluation_doc_lists_table', 2),
(20, '2025_03_07_100033_add_remark_to_soevaluations_table', 3),
(21, '2025_03_12_050746_create_onboard_documents_table', 4),
(22, '2025_03_12_053756_create_onboards_table', 4),
(23, '2025_03_12_062253_create_onboard_documents_details_table', 4),
(24, '2025_03_12_063526_create_onboard_sectors_subsectos_table', 4),
(25, '2025_03_12_070542_add_column_to_onboard_sectors_subsectos_table', 4),
(26, '2025_03_12_082022_rename_organization_type_id_to_onboard_org_type_in_onboards_table', 4),
(27, '2025_03_12_082742_rename_sector_columns_in_onboards_table', 4),
(28, '2025_03_12_230228_update_onboard_org_type_defaultone', 5),
(29, '2025_03_17_140546_create_events_table', 6),
(30, '2025_03_17_155803_create_connectstories_table', 7),
(31, '2025_03_25_074839_drop_unwanted_column_to_events_table', 8),
(32, '2025_03_25_085141_add_proper_column_to_events_table', 9),
(33, '2025_03_24_064841_drop_event_columns_from_events_table', 10),
(34, '2025_03_28_051414_create_ngo_types_table', 11),
(35, '2025_03_28_091938_rename_sub_sectors_table', 12),
(36, '2025_03_28_074525_add_proper_column_to_recommendations_table', 13),
(37, '2025_03_28_085751_add_proper_remaining_column_to_recommendations_table', 14),
(38, '2025_03_28_095629_nullable_ngo_type_id_to_recommendations_table', 15),
(39, '2025_03_28_104736_nullable_is_connected_to_recommendations_table', 16),
(40, '2025_03_29_051629_add_mobile_no_proper_column_to_recommendations_table', 17),
(42, '2025_03_29_053258_add_isconnected_nullable_column_to_recommendations_table', 18),
(43, '2025_03_29_063144_add_recomm_sub_sector_column_to_recommendation_sectors_table', 19),
(44, '2025_03_29_064544_add_isconnected_default_nullable_column_to_recommendations_table', 20),
(45, '2025_03_29_072314_null_sub_sector_id_from_recommendation_sectors_table', 21),
(46, '2025_03_29_080355_fix_null_address_org_name_from_recommendations_table', 22),
(47, '2025_03_29_082100_fix_null_org_type_id_recommendations_table', 23),
(48, '2025_03_31_053937_add_image_column_to_sectors_table', 24),
(49, '2025_04_02_184404_add_name_col_recommendations_table', 25),
(50, '2025_04_04_164022_add_status_column_recommendations_table', 26),
(51, '2025_04_07_151118_add_new_col_recommendations_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_types`
--

CREATE TABLE `ngo_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngo_types`
--

INSERT INTO `ngo_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trust', '2025-03-28 07:43:00', '2025-03-28 07:43:00'),
(2, 'Foundation', '2025-03-28 07:43:00', '2025-03-28 07:43:00'),
(3, 'Societies', '2025-03-28 07:43:00', '2025-03-28 07:43:00'),
(4, 'Other', '2025-03-28 07:43:00', '2025-03-28 07:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `onboards`
--

CREATE TABLE `onboards` (
  `id` bigint UNSIGNED NOT NULL,
  `onboard_seva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_org_type` bigint UNSIGNED NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_trustee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_sector` bigint UNSIGNED NOT NULL,
  `onboard_subsector` bigint UNSIGNED NOT NULL,
  `vision_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_benf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sevakarar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_achiev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_future` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_specific` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onboard_documents_details_id` bigint UNSIGNED NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onboard_documents`
--

CREATE TABLE `onboard_documents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onboard_documents`
--

INSERT INTO `onboard_documents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Registration', '2025-03-13 06:57:32', '2025-03-13 06:57:32'),
(2, 'CSR', '2025-03-13 06:57:32', '2025-03-13 06:57:32'),
(3, 'PAN', '2025-03-13 06:57:32', '2025-03-13 06:57:32'),
(4, '80G', '2025-03-13 06:57:32', '2025-03-13 06:57:32'),
(5, '12A', '2025-03-13 06:57:32', '2025-03-13 06:57:32'),
(6, 'FCRA', '2025-03-13 06:57:33', '2025-03-13 06:57:33'),
(7, 'Applied in process', '2025-03-13 06:57:33', '2025-03-13 06:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `onboard_documents_details`
--

CREATE TABLE `onboard_documents_details` (
  `id` bigint UNSIGNED NOT NULL,
  `onboard_id` bigint UNSIGNED NOT NULL,
  `onboard_document_id` bigint UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onboard_sectors_subsectos`
--

CREATE TABLE `onboard_sectors_subsectos` (
  `id` bigint UNSIGNED NOT NULL,
  `sector_id` bigint UNSIGNED NOT NULL,
  `onboardids_id` bigint UNSIGNED NOT NULL,
  `subsector_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_types`
--

CREATE TABLE `organization_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organization_types`
--

INSERT INTO `organization_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NGO', '2025-03-05 23:39:38', '2025-03-05 23:39:38'),
(2, 'Trust', '2025-03-05 23:39:38', '2025-03-05 23:39:38'),
(3, 'Foundations', '2025-03-05 23:39:38', '2025-03-05 23:39:38'),
(4, 'Volunteer Group', '2025-03-05 23:39:38', '2025-03-05 23:39:38'),
(5, 'Community based organization', '2025-03-27 07:56:31', '2025-03-27 07:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `id` bigint UNSIGNED NOT NULL,
  `seva_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_type_id` tinyint UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `work_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_contact_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_contact_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_connected` tinyint UNSIGNED DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visited` tinyint UNSIGNED DEFAULT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ngo_type_id` bigint UNSIGNED DEFAULT NULL,
  `managing` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci,
  `contact_pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_interest` text COLLATE utf8mb4_unicode_ci,
  `induction_cause` tinyint(1) DEFAULT NULL,
  `area_cause` tinyint(1) DEFAULT NULL,
  `social_org` tinyint(1) DEFAULT NULL,
  `off_address` text COLLATE utf8mb4_unicode_ci,
  `off_pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comfortable_call` tinyint(1) DEFAULT NULL,
  `time_date` datetime DEFAULT NULL,
  `area` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_sector_id` bigint UNSIGNED DEFAULT NULL,
  `vision_induction` text COLLATE utf8mb4_unicode_ci,
  `current` text COLLATE utf8mb4_unicode_ci,
  `mobile_no` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = Pending, 1 = Approved, 2 = Rejected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`id`, `seva_id`, `org_name`, `organization_type_id`, `address`, `work_place`, `phone_no`, `org_contact_name`, `org_contact_no`, `is_connected`, `contact_no`, `is_visited`, `user_type`, `opinion`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`, `ngo_type_id`, `managing`, `contact_address`, `contact_pincode`, `area_interest`, `induction_cause`, `area_cause`, `social_org`, `off_address`, `off_pincode`, `comfortable_call`, `time_date`, `area`, `email`, `year`, `sub_sector_id`, `vision_induction`, `current`, `mobile_no`, `name`, `status`) VALUES
(1, 'SEVA0001', 'tesing', 1, 'yes', 'pune', '9465656576', 'thane', '9456656555', 1, '9454655545', 1, NULL, 'yes-m', NULL, NULL, NULL, '2025-03-05 23:41:14', '2025-03-05 23:45:47', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(2, 'SEVA0002', 'suraj nanaware', 2, 'thane', 'thane', '9976135912', 'sahil', '9960135912', 1, '9960135912', 1, NULL, 'testing', NULL, NULL, NULL, '2025-03-06 22:51:55', '2025-03-06 22:51:55', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(3, 'SEVA0003', 'Testing', 3, 'test', 'thane', '7758913585', 'test', '7758913585', 1, '9887766554', 1, NULL, 'test', NULL, NULL, NULL, '2025-03-07 01:31:56', '2025-03-07 01:31:56', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(4, 'SEVA0004', 'testingkishori', 3, 'test', 'test', '9878787887', 'test', '9475656566', 1, '9454555444', 0, NULL, 'yes', NULL, NULL, NULL, '2025-03-07 01:40:32', '2025-03-07 01:40:32', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(5, 'SEVA0005', 'testing', 3, 'pune', 'tt', '9465656565', 't', '9344343434', 0, '9878787777', 0, NULL, 'yes', NULL, NULL, NULL, '2025-03-07 04:05:25', '2025-03-07 04:05:25', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(6, 'SEVA0006', 'neha', 2, 'pune', 'pune', '9455656565', 'test', '9453636366', 1, '9466565665', 1, NULL, 'yes', NULL, NULL, NULL, '2025-03-10 07:04:40', '2025-03-10 07:04:40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(7, 'SEVA0007', 'suraj Nanawareee', 3, 'Thaneee', 'Thane', '7758913585', 'Sahil Talkar', '7758913585', 1, '7758913585', 0, NULL, 'testing purpose', NULL, NULL, NULL, '2025-03-10 23:16:51', '2025-03-10 23:24:30', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(8, 'SEVA0008', 'testingkishori', 2, 'thane', 'pune', '9465656566', 'nita', '9465656565', 1, '9867767666', 1, NULL, 'ggg', NULL, NULL, NULL, '2025-03-11 00:14:24', '2025-03-11 00:14:24', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(9, 'SEVA0009', 'ganesh', 2, 'pune', 'pune', '9465656565', 'f', '9454554444', 1, '9487890987', 1, NULL, 'yes', NULL, NULL, NULL, '2025-03-11 00:22:31', '2025-03-11 00:22:31', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(10, 'SEVA0010', 'testkishori', 4, 'd', 'd', '9465665665', 'd', '9487888787', 1, '9457767686', 0, NULL, 'yes', NULL, NULL, NULL, '2025-03-11 08:26:15', '2025-03-11 08:26:15', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(11, 'SEVA0011', 'test', 2, 's', 'dd', '9787886868', 'dd', '9453553533', 1, '9455665655', 1, NULL, 'fdfd', NULL, NULL, NULL, '2025-03-13 06:45:35', '2025-03-13 06:45:35', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(12, 'SEVA0012', 'thane', 1, 'sdsdsd', 'sdsd', NULL, 'sddf', '9456765434', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-03-29 00:30:21', '2025-03-29 00:30:21', NULL, NULL, 'ss', 'pune', '234543', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdsd', 'kishori@gmail.com', '2', NULL, 'dsds', 'fdfd', NULL, NULL, 0),
(13, 'SEVA0013', 'ngo org', 2, NULL, 'pune', '9867546534', 'ganesh', '9423434232', 1, NULL, 1, 'Individual volunteer(Sevameet)', 'ffdfd', NULL, NULL, NULL, '2025-03-29 00:31:43', '2025-03-29 00:31:43', NULL, NULL, NULL, 'pune', '123432', NULL, NULL, 1, 1, 'pune', '453654', 1, '2025-03-29 11:31:00', NULL, 'marysarig@mailinator.com', NULL, NULL, NULL, NULL, '9423453423', NULL, 0),
(14, 'SEVA0014', NULL, NULL, NULL, 'pune', NULL, 'kishori', '9856435465', NULL, NULL, NULL, 'Independent organization/Company(Sevadaan)', 'dfdfd', NULL, NULL, NULL, '2025-03-29 00:32:31', '2025-03-29 00:32:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thane', '765453', 1, '2025-03-29 11:32:00', NULL, 'kishroi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(15, 'SEVA0015', 'test', 2, 'pune', 'pune', NULL, 'testtwo', '9456765465', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-03-29 04:22:22', '2025-03-29 04:22:22', NULL, NULL, 'testone', 'thane', '654987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pune', 'hizudedaw@mailinator.com', '2', NULL, 'Maharashtra', 'testcode', NULL, NULL, 0),
(16, 'SEVA0016', 'pune', 3, NULL, 'thane', '9877654534', 'ganesh', '9456543423', 1, NULL, 1, 'Individual volunteer(Sevameet)', 'yes', NULL, NULL, NULL, '2025-03-29 04:24:00', '2025-03-29 04:24:00', NULL, NULL, NULL, 'pune', '657980', NULL, NULL, 1, 1, 'pune', '768456', 1, '2025-03-29 15:23:00', NULL, 'kiqume@mailinator.com', NULL, NULL, NULL, NULL, '9867897656', NULL, 0),
(17, 'SEVA0017', 'dddd', NULL, 'ddd', 'pune', '9645653454', 'pavan', '9867546545', 1, '9456765423', NULL, 'Independent organization/Company(Sevadaan)', 'sssd-llll', NULL, NULL, NULL, '2025-03-29 04:25:35', '2025-03-29 04:28:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thane', '123987', 1, '2025-03-29 15:25:00', NULL, 'kishorisohani4@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, 'SEVA0018', 'test', 1, 'pune', 'thane', NULL, 'testtt', '9456765654', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-04-04 07:42:13', '2025-04-04 07:42:13', NULL, 2, 'testt', 'thane', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pune', 'kishori@gmail.com', '2', NULL, 'test', 'pune', NULL, NULL, 0),
(19, 'SEVA0019', 'test', NULL, NULL, 'ppune', NULL, 'sahil', '9898987678', 1, NULL, 1, 'Individual', 'dfdfdfd', NULL, NULL, NULL, '2025-04-04 07:44:41', '2025-04-04 07:44:41', NULL, NULL, NULL, 'pune', NULL, NULL, NULL, NULL, 1, 'pune', NULL, 1, '2025-04-05 18:44:00', NULL, 'kishori@gmail.com', NULL, NULL, NULL, NULL, '9850300897', 'testeight', 0),
(20, 'SEVA0020', NULL, NULL, NULL, 'pune', NULL, 'jay', '9876876545', NULL, NULL, NULL, 'Independent organization', NULL, NULL, NULL, NULL, '2025-04-04 07:46:26', '2025-04-04 07:46:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pune', NULL, 1, '2025-04-03 18:46:00', NULL, 'bhagyashri@gmail.com', NULL, NULL, NULL, NULL, NULL, 'test', 0),
(21, 'SEVA0021', 'test', 1, 'pune', 'pune', NULL, 'test', '9867876565', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-04-05 03:23:30', '2025-04-05 03:24:35', NULL, 3, 'testone', 'thane', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thane', 'kishori@gmail.com', '8', NULL, 'dd', 'dd', NULL, NULL, 1),
(22, 'SEVA0022', 'test', NULL, NULL, 'test', NULL, 'test', '9867874565', 1, NULL, 1, 'Individual', 'dsds', NULL, NULL, NULL, '2025-04-05 03:26:02', '2025-04-05 03:26:02', NULL, NULL, NULL, 'pune', NULL, NULL, NULL, NULL, 1, 'pune', NULL, 1, '2025-04-03 23:25:00', NULL, 'pradnya@gmail.com', NULL, NULL, NULL, NULL, '9867879867', 'nilam', 0),
(23, 'SEVA0023', 'test', NULL, NULL, NULL, NULL, 'test', '9454234354', 1, NULL, 1, 'Individual', 'dssds', NULL, NULL, NULL, '2025-04-05 03:27:43', '2025-04-07 05:52:03', NULL, NULL, NULL, 'pune', NULL, NULL, NULL, NULL, 1, 'test', NULL, 1, '2025-04-05 23:27:00', NULL, 'kish@gmail.com', NULL, NULL, NULL, NULL, '9867564565', 'kishori', 0),
(24, 'SEVA0024', 'thane', 5, 'test', 'test', NULL, 'test', '9867876545', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-04-05 03:29:03', '2025-04-05 03:29:03', NULL, NULL, 'yes', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test', 'marysarig@mailinator.com', '4', NULL, 'Maharashtra', 'test', NULL, NULL, 0),
(25, 'SEVA0025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Individual', NULL, NULL, NULL, NULL, '2025-04-05 05:27:49', '2025-04-05 05:27:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 'SEVA0026', 'Jeevan Samvardhan Foundation', 2, NULL, 'Thane District', NULL, 'Sadashiv Chavhan', '7506927704', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-04-07 03:30:51', '2025-04-07 03:30:51', NULL, NULL, 'Sadashiv Chavhan', 'B-101, Chandrabhaga Phase II, Kolivali Road, Kalyan West-421301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jeevansamvardhan@gmail.com', NULL, NULL, 'Rehabilitation of Homeless Children.', 'Rehabilitation of Homeless Children.', NULL, NULL, 0),
(27, 'SEVA0027', 'Samarth Bharat Vyaspeeth', 3, NULL, 'Thane city, Navi mumbai', NULL, 'Ulhas Karle', '9082591755', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-04-07 06:30:49', '2025-04-07 06:30:49', NULL, NULL, 'Mr. Ulhas Karle', '901, Nakshatra Residency, Uday Nagar, Pachpakhadi, Thane (W) 400602', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'samarthbharat@gmail.com', NULL, NULL, '\"Samarth Bharat Vyaspeeth To empower the last element of the last line in India and to establish a platform to strengthen the country by 2047, to achieve this without conflict with the administration and by fostering coordination, to conserve, promote, and qualitatively enhance water, forests, land, animals, and people with their involvement.\"', 'Samarth Bharat Vyaspeeth is a NGO registered under Indian companies act, in 2017 The organization has been conducting various social and environmental activities continuously in a very effective way. In our endeavor to make Thane city free from pollution, created due to dry waste, SBV has tied up with Thane Municipal Corporation (TMC) and initiated a project for eco-friendly disposal. SBV has set up a unit at Kopari, Thane for disposal and recycle of waste material. The flower waste is converted into compost in an eco- friendly manner. Samarth Bharat has also successfully implemented project of converting garden waste into fuel and Dry Waste Management.  Further to pursue their vision they have taken up project of Signal Shala at Teen Hath Naka, Thane. This school is in affiliation with Thane Municipal School. Children from the families that are surviving on the income from business at signal, are taught in this school.', NULL, NULL, 0),
(28, 'SEVA0028', 'test', NULL, NULL, NULL, NULL, 'dinesh', '9867456545', 1, NULL, 1, 'Individual', 'test', NULL, NULL, NULL, '2025-04-08 07:57:08', '2025-04-08 07:58:04', NULL, NULL, NULL, 'pune', NULL, NULL, NULL, NULL, 1, 'pune', NULL, 1, '2025-04-07 04:04:00', NULL, 'dd@gmail.com', NULL, NULL, NULL, NULL, '9845234324', 'testonetwo', 0),
(29, 'SEVA0029', 'test', NULL, NULL, 'test', NULL, 'test', '9823456789', 1, NULL, 1, 'Individual', 'sdd', NULL, NULL, NULL, '2025-04-09 05:22:47', '2025-04-09 05:23:31', NULL, NULL, NULL, 'pune', NULL, NULL, NULL, NULL, 1, 'test', NULL, 1, '2025-04-07 10:37:00', NULL, 'monday@gmail.com', NULL, NULL, NULL, NULL, '9423345676', 'neha', 0),
(30, 'SEVA0030', 'test', 2, NULL, 'test', NULL, 'test', '9456345465', NULL, NULL, NULL, 'Social Organization', NULL, NULL, NULL, NULL, '2025-04-09 05:25:16', '2025-04-09 05:25:16', NULL, NULL, 'test', 'pune', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hizudedaw@mailinator.com', NULL, NULL, 'test', 'test', NULL, NULL, 0),
(31, 'SEVA0031', NULL, NULL, NULL, 'test', NULL, 'piyush', '9423453454', NULL, NULL, NULL, 'Independent organization', NULL, NULL, NULL, NULL, '2025-04-09 05:26:24', '2025-04-09 05:26:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pune', NULL, 1, '2025-04-07 10:41:00', NULL, 'pk@gmail.com', NULL, NULL, NULL, NULL, NULL, 'test', 0),
(32, 'SEVA0032', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Individual', NULL, NULL, NULL, NULL, '2025-04-10 10:12:39', '2025-04-10 10:12:39', NULL, NULL, NULL, 'royce', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'khushbu.taori28@gmail.com', NULL, NULL, NULL, NULL, '9422141971', 'kishori sohoni', 0),
(33, 'SEVA0033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Individual', NULL, NULL, NULL, NULL, '2025-04-11 00:08:40', '2025-04-11 00:08:40', NULL, NULL, NULL, 'Thane', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'surajnanaware555@gmail.com', NULL, NULL, NULL, NULL, '7758913585', 'suraj nanaware', 0),
(34, 'SEVA0034', 'pune', NULL, NULL, 'ddfdf', NULL, 'test', '9845673454', 1, NULL, 1, 'Individual', 'yes', NULL, NULL, NULL, '2025-04-11 08:15:44', '2025-04-11 08:15:44', NULL, NULL, NULL, 'pune', NULL, NULL, NULL, NULL, 1, 'thabe', NULL, 1, '2025-04-12 07:15:00', NULL, 'kishori@gmail.com', NULL, NULL, NULL, NULL, '9423456534', 'neha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recommendation_sectors`
--

CREATE TABLE `recommendation_sectors` (
  `id` bigint UNSIGNED NOT NULL,
  `recommendation_id` bigint UNSIGNED NOT NULL,
  `sector_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_sector_id` tinyint UNSIGNED DEFAULT NULL,
  `is_area_interest` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommendation_sectors`
--

INSERT INTO `recommendation_sectors` (`id`, `recommendation_id`, `sector_id`, `created_at`, `updated_at`, `sub_sector_id`, `is_area_interest`) VALUES
(1, 1, 2, '2025-03-05 23:41:16', '2025-03-05 23:41:16', 0, 0),
(2, 2, 13, '2025-03-06 22:51:55', '2025-03-06 22:51:55', 0, 0),
(3, 2, 15, '2025-03-06 22:51:56', '2025-03-06 22:51:56', 0, 0),
(4, 2, 16, '2025-03-06 22:51:56', '2025-03-06 22:51:56', 0, 0),
(5, 2, 17, '2025-03-06 22:51:56', '2025-03-06 22:51:56', 0, 0),
(6, 3, 3, '2025-03-07 01:31:56', '2025-03-07 01:31:56', 0, 0),
(7, 3, 4, '2025-03-07 01:31:56', '2025-03-07 01:31:56', 0, 0),
(8, 3, 16, '2025-03-07 01:31:57', '2025-03-07 01:31:57', 0, 0),
(9, 4, 1, '2025-03-07 01:40:33', '2025-03-07 01:40:33', 0, 0),
(10, 4, 2, '2025-03-07 01:40:34', '2025-03-07 01:40:34', 0, 0),
(11, 4, 3, '2025-03-07 01:40:36', '2025-03-07 01:40:36', 0, 0),
(12, 4, 4, '2025-03-07 01:40:36', '2025-03-07 01:40:36', 0, 0),
(13, 5, 2, '2025-03-07 04:05:25', '2025-03-07 04:05:25', 0, 0),
(14, 5, 4, '2025-03-07 04:05:25', '2025-03-07 04:05:25', 0, 0),
(15, 5, 5, '2025-03-07 04:05:25', '2025-03-07 04:05:25', 0, 0),
(16, 5, 6, '2025-03-07 04:05:26', '2025-03-07 04:05:26', 0, 0),
(17, 6, 2, '2025-03-10 07:04:40', '2025-03-10 07:04:40', 0, 0),
(18, 6, 3, '2025-03-10 07:04:41', '2025-03-10 07:04:41', 0, 0),
(19, 6, 4, '2025-03-10 07:04:41', '2025-03-10 07:04:41', 0, 0),
(20, 7, 2, '2025-03-10 23:16:51', '2025-03-10 23:16:51', 0, 0),
(21, 7, 3, '2025-03-10 23:16:52', '2025-03-10 23:16:52', 0, 0),
(22, 7, 4, '2025-03-10 23:16:52', '2025-03-10 23:16:52', 0, 0),
(23, 8, 2, '2025-03-11 00:14:24', '2025-03-11 00:14:24', 0, 0),
(24, 8, 3, '2025-03-11 00:14:24', '2025-03-11 00:14:24', 0, 0),
(25, 9, 1, '2025-03-11 00:22:31', '2025-03-11 00:22:31', 0, 0),
(26, 9, 2, '2025-03-11 00:22:32', '2025-03-11 00:22:32', 0, 0),
(27, 9, 3, '2025-03-11 00:22:32', '2025-03-11 00:22:32', 0, 0),
(28, 10, 1, '2025-03-11 08:26:15', '2025-03-11 08:26:15', 0, 0),
(29, 10, 2, '2025-03-11 08:26:16', '2025-03-11 08:26:16', 0, 0),
(30, 11, 2, '2025-03-13 06:45:35', '2025-03-13 06:45:35', 0, 0),
(31, 11, 4, '2025-03-13 06:45:36', '2025-03-13 06:45:36', 0, 0),
(32, 12, 17, '2025-03-29 00:30:22', '2025-03-29 00:30:22', 0, 0),
(33, 13, 11, '2025-03-29 00:31:43', '2025-03-29 00:31:43', 0, 0),
(34, 14, 10, '2025-03-29 00:32:31', '2025-03-29 00:32:31', 0, 0),
(35, 15, 15, '2025-03-29 04:22:23', '2025-03-29 04:22:23', 78, 0),
(36, 16, 15, '2025-03-29 04:24:00', '2025-03-29 04:24:00', 78, 0),
(37, 17, 5, '2025-03-29 04:25:35', '2025-03-29 04:25:35', 40, 0),
(38, 18, 1, '2025-04-04 07:42:13', '2025-04-04 07:42:13', 1, 0),
(39, 18, 1, '2025-04-04 07:42:14', '2025-04-04 07:42:14', 8, 0),
(40, 18, 2, '2025-04-04 07:42:14', '2025-04-04 07:42:14', 16, 0),
(41, 18, 2, '2025-04-04 07:42:14', '2025-04-04 07:42:14', 18, 0),
(42, 19, 2, '2025-04-04 07:44:41', '2025-04-04 07:44:41', NULL, 0),
(43, 19, 3, '2025-04-04 07:44:42', '2025-04-04 07:44:42', NULL, 0),
(44, 19, 4, '2025-04-04 07:44:42', '2025-04-04 07:44:42', NULL, 0),
(45, 18, 1, '2025-04-05 01:33:53', '2025-04-05 01:33:53', 1, 0),
(46, 18, 1, '2025-04-05 01:33:53', '2025-04-05 01:33:53', 8, 0),
(47, 18, 2, '2025-04-05 01:33:53', '2025-04-05 01:33:53', 16, 0),
(48, 21, 3, '2025-04-05 03:23:30', '2025-04-05 03:23:30', 9, 0),
(49, 21, 3, '2025-04-05 03:23:30', '2025-04-05 03:23:30', 30, 0),
(50, 22, 2, '2025-04-05 03:26:02', '2025-04-05 03:26:02', NULL, 0),
(51, 22, 5, '2025-04-05 03:26:02', '2025-04-05 03:26:02', NULL, 0),
(52, 22, 6, '2025-04-05 03:26:02', '2025-04-05 03:26:02', NULL, 0),
(55, 24, 7, '2025-04-05 03:29:03', '2025-04-05 03:29:03', 50, 0),
(56, 24, 17, '2025-04-05 03:29:03', '2025-04-05 03:29:03', 88, 0),
(60, 26, 1, '2025-04-07 05:51:28', '2025-04-07 05:51:28', 1, 0),
(62, 23, 13, '2025-04-07 05:52:03', '2025-04-07 05:52:03', NULL, 0),
(63, 23, 14, '2025-04-07 05:52:03', '2025-04-07 05:52:03', NULL, 0),
(64, 27, 1, '2025-04-07 06:30:49', '2025-04-07 06:30:49', 2, 0),
(65, 27, 2, '2025-04-07 06:30:49', '2025-04-07 06:30:49', 10, 0),
(155, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 1, 1),
(156, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 2, 1),
(157, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 3, 1),
(158, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 4, 1),
(159, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 5, 1),
(160, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 6, 1),
(161, 28, 1, '2025-04-08 07:58:05', '2025-04-08 07:58:05', 7, 1),
(162, 28, 1, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 8, 1),
(163, 28, 3, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 9, 1),
(164, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 10, 1),
(165, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 11, 1),
(166, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 12, 1),
(167, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 13, 1),
(168, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 14, 1),
(169, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 15, 1),
(170, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 16, 1),
(171, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 17, 1),
(172, 28, 2, '2025-04-08 07:58:06', '2025-04-08 07:58:06', 18, 1),
(173, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 19, 1),
(174, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 20, 1),
(175, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 21, 1),
(176, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 22, 1),
(177, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 23, 1),
(178, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 24, 1),
(179, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 25, 1),
(180, 28, 3, '2025-04-08 07:58:07', '2025-04-08 07:58:07', 26, 1),
(181, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 27, 1),
(182, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 28, 1),
(183, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 29, 1),
(184, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 30, 1),
(185, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 31, 1),
(186, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 32, 1),
(187, 28, 3, '2025-04-08 07:58:08', '2025-04-08 07:58:08', 33, 1),
(188, 28, 3, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 34, 1),
(189, 28, 4, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 35, 1),
(190, 28, 4, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 36, 1),
(191, 28, 4, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 37, 1),
(192, 28, 4, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 38, 1),
(193, 28, 4, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 39, 1),
(194, 28, 5, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 40, 1),
(195, 28, 5, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 41, 1),
(196, 28, 5, '2025-04-08 07:58:09', '2025-04-08 07:58:09', 42, 1),
(197, 28, 5, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 43, 1),
(198, 28, 5, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 44, 1),
(199, 28, 6, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 45, 1),
(200, 28, 6, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 46, 1),
(201, 28, 6, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 47, 1),
(202, 28, 6, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 48, 1),
(203, 28, 6, '2025-04-08 07:58:10', '2025-04-08 07:58:10', 49, 1),
(204, 28, 13, '2025-04-08 07:58:10', '2025-04-08 07:58:10', NULL, 0),
(205, 28, 14, '2025-04-08 07:58:10', '2025-04-08 07:58:10', NULL, 0),
(206, 28, 15, '2025-04-08 07:58:11', '2025-04-08 07:58:11', NULL, 0),
(212, 29, 7, '2025-04-09 05:23:31', '2025-04-09 05:23:31', 50, 1),
(213, 29, 7, '2025-04-09 05:23:31', '2025-04-09 05:23:31', 51, 1),
(214, 29, 7, '2025-04-09 05:23:31', '2025-04-09 05:23:31', 52, 1),
(215, 29, 8, '2025-04-09 05:23:31', '2025-04-09 05:23:31', 53, 1),
(216, 29, 8, '2025-04-09 05:23:31', '2025-04-09 05:23:31', 54, 1),
(217, 29, 8, '2025-04-09 05:23:32', '2025-04-09 05:23:32', 55, 1),
(218, 29, 1, '2025-04-09 05:23:32', '2025-04-09 05:23:32', NULL, 0),
(219, 29, 3, '2025-04-09 05:23:32', '2025-04-09 05:23:32', NULL, 0),
(230, 31, 1, '2025-04-09 05:26:24', '2025-04-09 05:26:24', 1, 1),
(231, 31, 1, '2025-04-09 05:26:24', '2025-04-09 05:26:24', 2, 1),
(232, 31, 1, '2025-04-09 05:26:24', '2025-04-09 05:26:24', 3, 1),
(233, 31, 1, '2025-04-09 05:26:24', '2025-04-09 05:26:24', 4, 1),
(234, 31, 1, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 5, 1),
(235, 31, 1, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 6, 1),
(236, 31, 1, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 7, 1),
(237, 31, 1, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 8, 1),
(238, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 9, 1),
(239, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 10, 1),
(240, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 11, 1),
(241, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 12, 1),
(242, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 13, 1),
(243, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 14, 1),
(244, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 15, 1),
(245, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 16, 1),
(246, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 17, 1),
(247, 31, 2, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 18, 1),
(248, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 19, 1),
(249, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 20, 1),
(250, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 21, 1),
(251, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 22, 1),
(252, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 23, 1),
(253, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 24, 1),
(254, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 25, 1),
(255, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 26, 1),
(256, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 27, 1),
(257, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 28, 1),
(258, 31, 3, '2025-04-09 05:26:25', '2025-04-09 05:26:25', 29, 1),
(259, 31, 3, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 30, 1),
(260, 31, 3, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 31, 1),
(261, 31, 3, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 32, 1),
(262, 31, 3, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 33, 1),
(263, 31, 3, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 34, 1),
(264, 31, 4, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 35, 1),
(265, 31, 4, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 36, 1),
(266, 31, 4, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 37, 1),
(267, 31, 4, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 38, 1),
(268, 31, 4, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 39, 1),
(269, 31, 5, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 40, 1),
(270, 31, 5, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 41, 1),
(271, 31, 5, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 42, 1),
(272, 31, 5, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 43, 1),
(273, 31, 5, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 44, 1),
(274, 31, 6, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 45, 1),
(275, 31, 6, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 46, 1),
(276, 31, 6, '2025-04-09 05:26:26', '2025-04-09 05:26:26', 47, 1),
(277, 31, 6, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 48, 1),
(278, 31, 6, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 49, 1),
(279, 31, 7, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 50, 1),
(280, 31, 7, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 51, 1),
(281, 31, 7, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 52, 1),
(282, 31, 8, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 53, 1),
(283, 31, 8, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 54, 1),
(284, 31, 8, '2025-04-09 05:26:27', '2025-04-09 05:26:27', 55, 1),
(285, 32, 2, '2025-04-10 10:12:40', '2025-04-10 10:12:40', 10, 1),
(286, 32, 2, '2025-04-10 10:12:40', '2025-04-10 10:12:40', 11, 1),
(287, 32, 2, '2025-04-10 10:12:40', '2025-04-10 10:12:40', 12, 1),
(288, 32, 2, '2025-04-10 10:12:40', '2025-04-10 10:12:40', 13, 1),
(289, 32, 2, '2025-04-10 10:12:40', '2025-04-10 10:12:40', 14, 1),
(290, 32, 2, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 15, 1),
(291, 32, 2, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 16, 1),
(292, 32, 2, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 17, 1),
(293, 32, 2, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 18, 1),
(294, 32, 8, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 53, 1),
(295, 32, 8, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 54, 1),
(296, 32, 14, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 74, 1),
(297, 32, 14, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 75, 1),
(298, 32, 14, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 76, 1),
(299, 32, 14, '2025-04-10 10:12:41', '2025-04-10 10:12:41', 77, 1),
(300, 32, 18, '2025-04-10 10:12:42', '2025-04-10 10:12:42', 89, 1),
(301, 32, 18, '2025-04-10 10:12:42', '2025-04-10 10:12:42', 90, 1),
(302, 32, 18, '2025-04-10 10:12:42', '2025-04-10 10:12:42', 91, 1),
(303, 33, 7, '2025-04-11 00:08:40', '2025-04-11 00:08:40', 50, 1),
(304, 33, 7, '2025-04-11 00:08:40', '2025-04-11 00:08:40', 51, 1),
(305, 33, 7, '2025-04-11 00:08:40', '2025-04-11 00:08:40', 52, 1),
(306, 33, 18, '2025-04-11 00:08:40', '2025-04-11 00:08:40', 89, 1),
(307, 33, 18, '2025-04-11 00:08:40', '2025-04-11 00:08:40', 90, 1),
(308, 33, 18, '2025-04-11 00:08:40', '2025-04-11 00:08:40', 91, 1),
(309, 33, 22, '2025-04-11 00:08:40', '2025-04-11 00:08:40', NULL, 1),
(310, 33, 21, '2025-04-11 00:08:40', '2025-04-11 00:08:40', NULL, 1),
(311, 33, 20, '2025-04-11 00:08:40', '2025-04-11 00:08:40', NULL, 1),
(312, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 1, 1),
(313, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 2, 1),
(314, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 3, 1),
(315, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 4, 1),
(316, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 5, 1),
(317, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 6, 1),
(318, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 7, 1),
(319, 34, 1, '2025-04-11 08:15:44', '2025-04-11 08:15:44', 8, 1),
(320, 34, 3, '2025-04-11 08:15:44', '2025-04-11 08:15:44', NULL, 0),
(321, 34, 2, '2025-04-11 08:15:44', '2025-04-11 08:15:44', NULL, 0),
(322, 34, 1, '2025-04-11 08:15:45', '2025-04-11 08:15:45', NULL, 0),
(323, 30, 1, '2025-04-11 08:17:39', '2025-04-11 08:17:39', 2, 0),
(324, 30, 1, '2025-04-11 08:17:40', '2025-04-11 08:17:40', 3, 0),
(325, 30, 5, '2025-04-11 08:17:40', '2025-04-11 08:17:40', 40, 0),
(326, 30, 1, '2025-04-11 08:17:42', '2025-04-11 08:17:42', NULL, 0),
(327, 30, 3, '2025-04-11 08:17:42', '2025-04-11 08:17:42', NULL, 0),
(328, 30, 5, '2025-04-11 08:17:42', '2025-04-11 08:17:42', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sector_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `initial`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`, `sector_image`) VALUES
(1, 'Education', 'EDU', NULL, NULL, NULL, '2025-03-05 23:28:01', '2025-03-31 06:39:39', NULL, 'edu.png'),
(2, 'Enviornment', 'ENV', NULL, NULL, NULL, '2025-03-05 23:28:01', '2025-03-31 06:39:39', NULL, 'env.png'),
(3, 'Health', 'HEA', NULL, NULL, NULL, '2025-03-05 23:28:02', '2025-03-31 06:39:39', NULL, 'health.png'),
(4, 'Specially abled', 'SPL', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:39', NULL, 'specially.png'),
(5, 'Women', 'WO', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:39', NULL, 'womens.png'),
(6, 'Children', 'CHI', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:40', NULL, 'chi.png'),
(7, 'Human rights', 'HU', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:40', NULL, 'rights.png'),
(8, 'Civic responsibilities', 'CR', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:40', NULL, 'civi.png'),
(9, 'Senior citizens', 'SC', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:40', NULL, 'sie.png'),
(10, 'Art and culture', 'AC', NULL, NULL, NULL, '2025-03-05 23:28:03', '2025-03-31 06:39:40', NULL, 'art.png'),
(11, 'Food and nutrition', 'FN', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:40', NULL, 'fish.png'),
(12, 'Tribals/rural', 'TR', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:40', NULL, 'tribal.png'),
(13, 'Animals', 'AN', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:40', NULL, 'animals.png'),
(14, 'Prisons', 'PE', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:40', NULL, 'prisons.png'),
(15, 'Sports', 'SP', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:40', NULL, 'sportss.png'),
(16, 'Employment/Skill development', 'EM', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:40', NULL, 'emp.png'),
(17, 'Transgenders', 'TRANS', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:41', NULL, 'transgenders.png'),
(18, 'Advocacy', 'ADV', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:41', NULL, 'add.png'),
(19, 'Miscellaneous', 'MIS', NULL, NULL, NULL, '2025-03-05 23:28:04', '2025-03-31 06:39:41', NULL, 'misssd.png'),
(20, 'Others', 'Other', NULL, NULL, NULL, '2025-04-07 07:51:09', '2025-04-07 07:51:09', NULL, 'other.png'),
(21, 'Donation', 'Don', NULL, NULL, NULL, '2025-04-07 07:51:09', '2025-04-07 07:51:09', NULL, 'donation.png'),
(22, 'No Specific Interest', 'Don', NULL, NULL, NULL, '2025-04-07 07:51:10', '2025-04-07 07:51:10', NULL, 'nospecific.png');

-- --------------------------------------------------------

--
-- Table structure for table `soevaluations`
--

CREATE TABLE `soevaluations` (
  `id` bigint UNSIGNED NOT NULL,
  `eva_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_seva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eva_org` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_type` bigint UNSIGNED DEFAULT NULL,
  `eval_sector` bigint UNSIGNED DEFAULT NULL,
  `eva_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eva_incharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eva_in_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eva_year` year NOT NULL,
  `eva_letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eva_documents` text COLLATE utf8mb4_unicode_ci,
  `eva_gap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eva_existing` text COLLATE utf8mb4_unicode_ci,
  `eva_up` text COLLATE utf8mb4_unicode_ci,
  `eva_benefeed` text COLLATE utf8mb4_unicode_ci,
  `eve_comments` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `remark` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soevaluations`
--

INSERT INTO `soevaluations` (`id`, `eva_name`, `mem_name`, `mem_seva`, `eva_org`, `org_type`, `eval_sector`, `eva_address`, `eva_incharge`, `eva_in_no`, `eva_year`, `eva_letter`, `eva_documents`, `eva_gap`, `eva_existing`, `eva_up`, `eva_benefeed`, `eve_comments`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `status`, `remark`) VALUES
(1, 'Core team member', 'test', 'SEVA0001', 'tesing', 1, 2, 'yes', 's', '3', '2003', 'A', 'Trust Deed/MOA', 'test', 'test', 'test', 'test', 'test', '2025-03-05 23:46:30', '2025-03-05 23:46:51', NULL, NULL, NULL, NULL, 1, NULL),
(2, 'Core team member', 'sahil', 'SEVA0002', 'suraj nanaware', 2, 17, 'thane', 'sahil', '996013512', '2023', 'A', 'Expense Sheet (Annual)', 'test', 'test', 'test', 'test', 'tesy', '2025-03-06 22:53:31', '2025-03-06 22:55:24', NULL, NULL, NULL, NULL, 2, NULL),
(3, 'Core team member', 'testkishori', 'SEVA0004', 'testingkishori', 2, 6, 'test', 'test', '4', '2004', 'A', '5', 'd', 'd', 'd', 'd', 'd', '2025-03-07 01:42:10', '2025-03-10 23:30:21', NULL, NULL, NULL, NULL, 2, NULL),
(4, 'Core team member', 's', 'SEVA0005', 'testing', 3, NULL, 'pune', 'd', '5', '2005', 'A', NULL, 'y', 'y', 'y', 'y', 'y', '2025-03-07 04:09:12', '2025-03-10 10:03:19', NULL, NULL, NULL, NULL, 1, NULL),
(5, 'Core team member', 'test', 'SEVA0006', 'neha', 2, NULL, 'pune', 'test', '3', '2003', 'A', NULL, 'test', 'test', 'test', 'test', 'test', '2025-03-10 09:59:48', '2025-03-10 10:03:01', NULL, NULL, NULL, NULL, 2, NULL),
(6, 'Core team member', 'sachine pandey', 'SEVA0007', 'suraj Nanawareee', 3, NULL, 'Thaneee', 'test', '996013512', '2021', 'A', NULL, 'test', 'tets', 'test', 'test', 'test', '2025-03-10 23:26:31', '2025-03-10 23:29:30', NULL, NULL, NULL, NULL, 1, NULL),
(7, 'Core team member', 'd', 'SEVA0008', 'testingkishori', 2, NULL, 'thane', 'd', '5', '2005', 'A', NULL, 'd', 'd', 'd', 'd', 'd', '2025-03-11 00:15:39', '2025-03-11 02:35:42', NULL, NULL, NULL, NULL, 2, 'TEST'),
(8, 'Core team member', 'f', 'SEVA0009', 'ganesh', 2, NULL, 'pune', 'f', '4', '2004', 'A', NULL, 'r', 'rr', 'r', 'r', 'r', '2025-03-11 04:10:30', '2025-03-11 04:13:21', NULL, NULL, NULL, NULL, 1, NULL),
(9, 'Core team member', 's', 'SEVA0011', 'test', 2, NULL, 's', 's', '6', '2005', 'A', NULL, 'df', 'ggf', 'fgf', 'ffgf', 'gfgf', '2025-03-13 06:47:12', '2025-03-13 06:47:32', NULL, NULL, NULL, NULL, 2, 'yes'),
(10, 'Core team member', 'd', 'SEVA0011', 'test', 1, 4, 's', 'ff', '6', '2006', 'A', '3', '7hhhhh', '77', '7', '7', '7', '2025-03-18 00:38:28', '2025-03-27 04:49:52', NULL, NULL, NULL, NULL, 1, NULL),
(11, 'Core team member', 'test', 'SEVA0024', 'thane', 5, NULL, 'test', 'pune', '3445', '2004', 'A', NULL, 'test', 'test', 'test', 'test', 'test', '2025-04-05 03:59:40', '2025-04-05 03:59:40', NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soevaluation_documents`
--

CREATE TABLE `soevaluation_documents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soevaluation_documents`
--

INSERT INTO `soevaluation_documents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '12 A', '2025-03-07 01:25:44', '2025-03-07 01:25:44'),
(2, '80 G', '2025-03-07 01:25:44', '2025-03-07 01:25:44'),
(3, 'FCRA', '2025-03-07 01:25:44', '2025-03-07 01:25:44'),
(4, 'Trust deed/MOA', '2025-03-07 01:25:44', '2025-03-07 01:25:44'),
(5, 'Audit report(last year)', '2025-03-07 01:25:45', '2025-03-07 01:25:45'),
(6, 'Brochure', '2025-03-07 01:25:45', '2025-03-07 01:25:45'),
(7, 'PAN card number', '2025-03-07 01:25:45', '2025-03-07 01:25:45'),
(8, 'Short profile', '2025-03-07 01:25:45', '2025-03-07 01:25:45'),
(9, 'Salary sheet last year', '2025-03-07 01:25:45', '2025-03-07 01:25:45'),
(10, 'Introductory letter', '2025-03-07 01:25:45', '2025-03-07 01:25:45'),
(11, 'Expense sheet annual', '2025-03-07 01:25:45', '2025-03-07 01:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `soevaluation_doc_lists`
--

CREATE TABLE `soevaluation_doc_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `soevaluation_id` bigint UNSIGNED NOT NULL,
  `soevaluation_documents_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soevaluation_doc_lists`
--

INSERT INTO `soevaluation_doc_lists` (`id`, `soevaluation_id`, `soevaluation_documents_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2025-03-07 01:42:11', '2025-03-07 01:42:11'),
(2, 2, 3, '2025-03-07 01:42:12', '2025-03-07 01:42:12'),
(3, 3, 3, '2025-03-07 01:42:12', '2025-03-07 01:42:12'),
(4, 4, 3, '2025-03-07 01:42:13', '2025-03-07 01:42:13'),
(5, 5, 3, '2025-03-07 01:42:13', '2025-03-07 01:42:13'),
(6, 1, 4, '2025-03-07 04:09:13', '2025-03-07 04:09:13'),
(7, 3, 4, '2025-03-07 04:09:13', '2025-03-07 04:09:13'),
(8, 3, 5, '2025-03-10 09:59:48', '2025-03-10 09:59:48'),
(9, 4, 5, '2025-03-10 09:59:49', '2025-03-10 09:59:49'),
(10, 1, 6, '2025-03-10 23:26:31', '2025-03-10 23:26:31'),
(11, 2, 6, '2025-03-10 23:26:32', '2025-03-10 23:26:32'),
(12, 4, 6, '2025-03-10 23:26:32', '2025-03-10 23:26:32'),
(13, 6, 6, '2025-03-10 23:26:32', '2025-03-10 23:26:32'),
(14, 9, 6, '2025-03-10 23:26:32', '2025-03-10 23:26:32'),
(15, 2, 7, '2025-03-11 00:15:39', '2025-03-11 00:15:39'),
(16, 3, 7, '2025-03-11 00:15:39', '2025-03-11 00:15:39'),
(17, 5, 8, '2025-03-11 04:10:31', '2025-03-11 04:10:31'),
(18, 10, 8, '2025-03-11 04:10:31', '2025-03-11 04:10:31'),
(19, 1, 9, '2025-03-13 06:47:13', '2025-03-13 06:47:13'),
(20, 2, 9, '2025-03-13 06:47:13', '2025-03-13 06:47:13'),
(21, 3, 10, '2025-03-18 00:38:29', '2025-03-18 00:38:29'),
(22, 2, 11, '2025-04-05 03:59:40', '2025-04-05 03:59:40'),
(23, 3, 11, '2025-04-05 03:59:40', '2025-04-05 03:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `soevaluation_sectors`
--

CREATE TABLE `soevaluation_sectors` (
  `id` bigint UNSIGNED NOT NULL,
  `soevaluation_id` bigint UNSIGNED NOT NULL,
  `sector_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soevaluation_sectors`
--

INSERT INTO `soevaluation_sectors` (`id`, `soevaluation_id`, `sector_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2025-03-07 01:42:10', '2025-03-07 01:42:10'),
(2, 3, 2, '2025-03-07 01:42:10', '2025-03-07 01:42:10'),
(3, 3, 3, '2025-03-07 01:42:11', '2025-03-07 01:42:11'),
(4, 3, 4, '2025-03-07 01:42:11', '2025-03-07 01:42:11'),
(5, 4, 2, '2025-03-07 04:09:13', '2025-03-07 04:09:13'),
(6, 4, 4, '2025-03-07 04:09:13', '2025-03-07 04:09:13'),
(7, 4, 5, '2025-03-07 04:09:13', '2025-03-07 04:09:13'),
(8, 4, 6, '2025-03-07 04:09:13', '2025-03-07 04:09:13'),
(9, 5, 2, '2025-03-10 09:59:48', '2025-03-10 09:59:48'),
(10, 5, 3, '2025-03-10 09:59:48', '2025-03-10 09:59:48'),
(11, 5, 4, '2025-03-10 09:59:48', '2025-03-10 09:59:48'),
(12, 6, 2, '2025-03-10 23:26:31', '2025-03-10 23:26:31'),
(13, 6, 3, '2025-03-10 23:26:31', '2025-03-10 23:26:31'),
(14, 6, 4, '2025-03-10 23:26:31', '2025-03-10 23:26:31'),
(15, 7, 2, '2025-03-11 00:15:39', '2025-03-11 00:15:39'),
(16, 7, 3, '2025-03-11 00:15:39', '2025-03-11 00:15:39'),
(17, 8, 1, '2025-03-11 04:10:30', '2025-03-11 04:10:30'),
(18, 8, 2, '2025-03-11 04:10:30', '2025-03-11 04:10:30'),
(19, 8, 3, '2025-03-11 04:10:30', '2025-03-11 04:10:30'),
(20, 9, 2, '2025-03-13 06:47:12', '2025-03-13 06:47:12'),
(21, 9, 4, '2025-03-13 06:47:12', '2025-03-13 06:47:12'),
(22, 10, 2, '2025-03-18 00:38:28', '2025-03-18 00:38:28'),
(23, 10, 4, '2025-03-18 00:38:29', '2025-03-18 00:38:29'),
(24, 11, 7, '2025-04-05 03:59:40', '2025-04-05 03:59:40'),
(25, 11, 17, '2025-04-05 03:59:40', '2025-04-05 03:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sectors`
--

CREATE TABLE `sub_sectors` (
  `id` bigint UNSIGNED NOT NULL,
  `sector_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sectors`
--

INSERT INTO `sub_sectors` (`id`, `sector_id`, `name`, `initial`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Scholarship', 'Sch', NULL, NULL, NULL, '2025-03-05 23:39:24', '2025-03-28 08:19:28', NULL),
(2, 1, 'study center', 'Sty', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:28', NULL),
(3, 1, 'Labs', 'Lab', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:28', NULL),
(4, 1, 'camps', 'Cam', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:28', NULL),
(5, 1, 'exhibitions', 'exh', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:28', NULL),
(6, 1, 'Guest talks', 'Gue', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:28', NULL),
(7, 1, 'value education', 'val', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:29', NULL),
(8, 1, 'Book Bank', 'book', NULL, NULL, NULL, '2025-03-05 23:39:25', '2025-03-28 08:19:29', NULL),
(9, 3, 'ayurvedic', 'ayu', NULL, NULL, NULL, '2025-03-05 23:39:26', '2025-03-13 06:52:01', NULL),
(10, 2, 'waste management and awareness', 'wst', NULL, NULL, NULL, '2025-03-05 23:39:27', '2025-03-28 08:19:29', NULL),
(11, 2, 'water conservation', 'wat', NULL, NULL, NULL, '2025-03-05 23:39:28', '2025-03-28 08:19:29', NULL),
(12, 2, 'plantation', 'Plan', NULL, NULL, NULL, '2025-03-05 23:39:28', '2025-03-28 08:19:29', NULL),
(13, 2, 'air pollution', 'air', NULL, NULL, NULL, '2025-03-05 23:39:28', '2025-03-28 08:19:30', NULL),
(14, 2, 'cleaning water bodies', 'clean', NULL, NULL, NULL, '2025-03-05 23:39:28', '2025-03-28 08:19:30', NULL),
(15, 2, 'Teaching composting and other such wet waste solutions', 'teach', NULL, NULL, NULL, '2025-03-05 23:39:28', '2025-03-28 08:19:30', NULL),
(16, 2, 'Dry waste solutions', 'Dry', NULL, NULL, NULL, '2025-03-05 23:39:28', '2025-03-28 08:19:30', NULL),
(17, 2, 'Domestic hazardous waste solutions', 'Doma', NULL, NULL, NULL, '2025-03-28 08:19:30', '2025-03-28 08:19:30', NULL),
(18, 2, 'Solar installation', 'Sola', NULL, NULL, NULL, '2025-03-11 04:15:50', '2025-03-28 08:19:30', NULL),
(19, 3, 'Mental', 'Men', NULL, NULL, NULL, '2025-03-11 04:16:07', '2025-03-28 08:19:30', NULL),
(20, 3, 'diagnostic', 'dia', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(21, 3, 'OPD', 'opd', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(22, 3, 'cancer', 'can', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(23, 3, 'Hygiene', 'Hyg', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(24, 3, 'Blood banks', 'Blod', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(25, 3, 'Blood disorder', 'Bld', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(26, 3, 'Financial aids', 'Fin', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(27, 3, 'ayurvedic', 'ayu', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(28, 3, 'Medical camps', 'Med', NULL, NULL, NULL, '2025-03-28 08:19:31', '2025-03-28 08:19:31', NULL),
(29, 3, 'Eye', 'Ey', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(30, 3, 'children', 'chi', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(31, 3, 'women', 'wo', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(32, 3, 'Awareness on organ donation, blood donation specific diseases etc', 'aw', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(33, 3, 'Medical services at home (emergency/ warboy, nursing staff etc)', 'med', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(34, 3, 'Deaddiction', 'dea', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(35, 4, 'Blindness', 'Men', NULL, NULL, NULL, '2025-03-28 08:19:32', '2025-03-28 08:19:32', NULL),
(36, 4, 'Deaf and mute', 'dia', NULL, NULL, NULL, '2025-03-28 08:19:33', '2025-03-28 08:19:33', NULL),
(37, 4, 'Limbs', 'Limbs', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-03-28 08:19:34', NULL),
(38, 4, 'Intellectually challenged', 'opd', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-03-28 08:19:34', NULL),
(39, 4, 'Spinal cord injury', 'can', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-03-28 08:19:34', NULL),
(40, 5, 'Empowerment', 'emp', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-04-02 05:53:55', NULL),
(41, 5, 'Domestic Abuse', 'dom', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-04-02 05:53:55', NULL),
(42, 5, 'Gender Equality', 'gen', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-04-02 05:53:55', NULL),
(43, 5, 'Hostel', 'hos', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-04-02 05:53:55', NULL),
(44, 5, 'Legal aid', 'leg', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-04-02 05:53:55', NULL),
(45, 6, 'Orphanage', 'orp', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-03-28 08:19:34', NULL),
(46, 6, 'daycare', 'day', NULL, NULL, NULL, '2025-03-28 08:19:34', '2025-03-28 08:19:34', NULL),
(47, 6, 'Support', 'supp', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(48, 6, 'Child abuse', 'chi', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(49, 6, 'Adoption', 'ado', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(50, 7, 'govt schemes', 'gov', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(51, 7, 'legal aid', 'legal', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(52, 7, 'Right to Information', 'Rig', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(53, 8, 'Road safety', 'roa', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(54, 8, 'Voting', 'vot', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(55, 8, 'Right to Information', 'righ', NULL, NULL, NULL, '2025-03-28 08:19:35', '2025-03-28 08:19:35', NULL),
(56, 9, 'Old age homes', 'old', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(57, 9, 'Communities', 'com', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(58, 10, 'Language', 'lan', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(59, 10, 'singing', 'sin', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(60, 10, 'dancing', 'dan', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(61, 10, 'Monuments', 'monu', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(62, 10, 'Indian art forms', 'ind', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(63, 11, 'Malnourishment', 'mal', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(64, 11, 'Free meals', 'free', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(65, 11, 'Nutritional suppliments', 'nutri', NULL, NULL, NULL, '2025-03-28 08:19:36', '2025-03-28 08:19:36', NULL),
(66, 12, 'Education', 'edu', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(67, 12, 'Health', 'heal', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(68, 12, 'Food and nutrition', 'food', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(69, 12, 'water', 'wate', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(70, 13, 'Shelter', 'shl', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(71, 13, 'ambulance', 'amb', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(72, 13, 'Wild life', 'wil', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(73, 13, 'Gaushalas', 'gau', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(74, 14, 'Education', 'edu', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(75, 14, 'Rehabilitation', 'reh', NULL, NULL, NULL, '2025-03-28 08:19:37', '2025-03-28 08:19:37', NULL),
(76, 14, 'food and nutrition', 'fo', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(77, 14, 'Meditation', 'med', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(78, 15, 'Academy', 'aca', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(79, 15, 'competitions', 'com', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(81, 15, 'monetary help', 'mon', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(82, 16, 'Computer courses', 'com', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(83, 16, 'Beauty', 'bea', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(84, 16, 'Banking', 'ban', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-03-28 08:19:38', NULL),
(85, 16, 'academy', 'ac', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(86, 17, 'Job', 'jb', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(87, 17, 'Govt schemes', 'Gov', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(88, 17, 'Medical aid', 'med', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(89, 18, 'Data analysis', 'da', NULL, NULL, NULL, '2025-03-28 08:19:38', '2025-04-02 05:53:56', NULL),
(90, 18, 'policy suggestion', 'pol', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(91, 18, 'Legal guidance', 'leg', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(92, 19, 'Old stuff like clothes, bicycles etc collection', 'old', NULL, NULL, NULL, '2025-03-28 08:19:39', '2025-03-28 08:19:39', NULL),
(93, 19, 'Old furniture', 'ofur', NULL, NULL, NULL, '2025-03-28 08:19:40', '2025-03-28 08:19:40', NULL),
(94, 19, 'Medicines and equipments', 'med', NULL, NULL, NULL, '2025-03-28 08:19:40', '2025-03-28 08:19:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `confirm_password`, `user_name`, `first_name`, `middle_name`, `last_name`, `mobile`, `dob`, `role`, `created_at`, `updated_at`) VALUES
(1, 'adminsevaconnect@gmail.com', '$2y$12$Pi6cxbT4/ko4T1o0OIGwPeVKaLhJukXBNMiFAwrCxNudnfpR4pyP2', '$2y$12$oRw312Nj06vVDw56yUgDk.n2mGDnyw.qa1A1mFL1ehOqpxf71Up0K', 'admin_user', 'Admin', 'Seva', 'Connect', '9876543210', '1990-01-01', 'admin', '2025-03-05 23:28:01', '2025-03-05 23:28:01'),
(2, 'adminsevaconnect@gmail.com', '$2y$12$PuLYi7ZRXdemGpPjAFt0mODJgJIcYw9.4.X/5EqkslX.v2f3ZT2oG', '$2y$12$u6r6YpZkN5CPoLHhg3ybdO2c3mrxXh98hF1PzI2p9N7Rz/z.aDXWu', 'admin_user', 'Admin', 'Seva', 'Connect', '9876543210', '1990-01-01', 'admin', '2025-03-05 23:39:24', '2025-03-05 23:39:24'),
(3, 'adminsevaconnect@gmail.com', '$2y$12$BL4xMaKWVKmX6ctTx7wefOgo7fiMcO3mxBAnm2/q1aRZZNzVRMMY6', '$2y$12$Z4A/ASHI.Vy4D9SHOdnZoO3vXflkIGikRH04dK.pg8CY6Y6HhGysm', 'admin_user', 'Admin', 'Seva', 'Connect', '9876543210', '1990-01-01', 'admin', '2025-03-07 01:25:34', '2025-03-07 01:25:34'),
(4, 'adminsevaconnect@gmail.com', '$2y$12$pN/y9lJ5d7SYd7q/..eLb.jqWMhh3lwSTlh2AJHvl/QoVas5CcBhi', '$2y$12$Mc3eht4DcCD2yNLwMSpSGe1a1MWzh3LQlngMywa9Bg2KwJd6BhvKm', 'admin_user', 'Admin', 'Seva', 'Connect', '9876543210', '1990-01-01', 'admin', '2025-03-09 00:58:22', '2025-03-09 00:58:22'),
(5, 'adminsevaconnect@gmail.com', '$2y$12$sM1sDsFJypllrkyVfKvm/O9avBdZVZ55oMQQ3jFAXeloAjGtsXOuK', '$2y$12$kR8vGiqfc8eBW/F4m1OT6O7b9mH.ijZGfAM64wHOF.9HP1suIacoi', 'admin_user', 'Admin', 'Seva', 'Connect', '9876543210', '1990-01-01', 'admin', '2025-03-11 00:21:16', '2025-03-11 00:21:16'),
(6, 'adminsevaconnect@gmail.com', '$2y$12$B5zk5/iE5bv8Jxg.1mPh2uhlVT6iI79La3Oe6/UFjOecir6o7FrGO', '$2y$12$DSCcP3pLjMgfCqQ4x9HF8OQ0GD9qWuWaCe88qZhw58faXmPTHvTCy', 'admin_user', 'Admin', 'Seva', 'Connect', '9876543210', '1990-01-01', 'admin', '2025-03-13 06:51:59', '2025-03-13 06:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `image`, `details`, `created_at`, `updated_at`) VALUES
(1, 'test', '1741238023.jfif', 'testopreat', '2025-03-05 23:43:33', '2025-03-05 23:43:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connectstories`
--
ALTER TABLE `connectstories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_types`
--
ALTER TABLE `ngo_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboards`
--
ALTER TABLE `onboards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `onboards_onboard_seva_unique` (`onboard_seva`),
  ADD KEY `onboards_organization_type_id_foreign` (`onboard_org_type`),
  ADD KEY `onboards_onboard_sector_foreign` (`onboard_sector`),
  ADD KEY `onboards_onboard_subsector_foreign` (`onboard_subsector`);

--
-- Indexes for table `onboard_documents`
--
ALTER TABLE `onboard_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboard_documents_details`
--
ALTER TABLE `onboard_documents_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboard_sectors_subsectos`
--
ALTER TABLE `onboard_sectors_subsectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `onboard_sectors_subsectos_sector_id_foreign` (`sector_id`),
  ADD KEY `onboard_sectors_subsectos_subsector_id_foreign` (`subsector_id`),
  ADD KEY `onboard_sectors_subsectos_onboardids_id_foreign` (`onboardids_id`);

--
-- Indexes for table `organization_types`
--
ALTER TABLE `organization_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recommendations_seva_id_unique` (`seva_id`);

--
-- Indexes for table `recommendation_sectors`
--
ALTER TABLE `recommendation_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soevaluations`
--
ALTER TABLE `soevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soevaluation_documents`
--
ALTER TABLE `soevaluation_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soevaluation_doc_lists`
--
ALTER TABLE `soevaluation_doc_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soevaluation_sectors`
--
ALTER TABLE `soevaluation_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sectors`
--
ALTER TABLE `sub_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `connectstories`
--
ALTER TABLE `connectstories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ngo_types`
--
ALTER TABLE `ngo_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `onboards`
--
ALTER TABLE `onboards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onboard_documents`
--
ALTER TABLE `onboard_documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `onboard_documents_details`
--
ALTER TABLE `onboard_documents_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onboard_sectors_subsectos`
--
ALTER TABLE `onboard_sectors_subsectos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_types`
--
ALTER TABLE `organization_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `recommendation_sectors`
--
ALTER TABLE `recommendation_sectors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `soevaluations`
--
ALTER TABLE `soevaluations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `soevaluation_documents`
--
ALTER TABLE `soevaluation_documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `soevaluation_doc_lists`
--
ALTER TABLE `soevaluation_doc_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `soevaluation_sectors`
--
ALTER TABLE `soevaluation_sectors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub_sectors`
--
ALTER TABLE `sub_sectors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `onboards`
--
ALTER TABLE `onboards`
  ADD CONSTRAINT `onboards_onboard_sector_foreign` FOREIGN KEY (`onboard_sector`) REFERENCES `sectors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `onboards_onboard_subsector_foreign` FOREIGN KEY (`onboard_subsector`) REFERENCES `sub_sectors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `onboards_organization_type_id_foreign` FOREIGN KEY (`onboard_org_type`) REFERENCES `organization_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `onboard_sectors_subsectos`
--
ALTER TABLE `onboard_sectors_subsectos`
  ADD CONSTRAINT `onboard_sectors_subsectos_onboardids_id_foreign` FOREIGN KEY (`onboardids_id`) REFERENCES `onboards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `onboard_sectors_subsectos_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `onboard_sectors_subsectos_subsector_id_foreign` FOREIGN KEY (`subsector_id`) REFERENCES `sub_sectors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
