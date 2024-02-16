-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2024 at 01:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eb2a_34115323_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `about_name` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_name`, `about_desc`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 'عملاؤنا', 'عملاؤنا هم قلب عملنا ورؤيتنا. نسعد بخدمتكم وتقديم أفضل الحلول لتحقيق النجاح.', '2024-01-24 01:08:57', '2024-01-24 01:59:45', '2024-01-24 01:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `clients_comments`
--

CREATE TABLE `clients_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `commentor_name` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentor_job` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients_comments`
--

INSERT INTO `clients_comments` (`id`, `commentor_name`, `commentor_job`, `comment`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(3, 'عن الموقع', 'خدمة إلكترونية تقدمها الموقع من خلال حصولك على تأشيرات بطرق ميسرة ودون تعقيدات', 'خدمة إلكترونية يقدمها الموقع والتى تمكن المستفيد من طلب زيارة أقارب المواطنين والمقيمين من الدرجة الأولى (الوالدين، الزوجة، الأبناء). املأ النموذج الإلكتروني عبر موقع خدمات التأشيرات الإلكترونية لوزارة الخارجية. اختم الطلب وصادقه إلكترونياً من الغرفة التجارية أو من جهة العمل', '1683119691.jpg', '2023-05-03 13:14:51', '2023-05-03 10:14:51', '2023-05-03 10:14:51'),
(4, 'محمود محمد', 'مدير', 'أنصح بهذه الموقع', '1706056880.png', '2024-01-24 00:41:20', '2024-01-24 01:41:20', '2024-01-24 01:41:20'),
(5, 'محمود محمد', 'مدير', 'موقع ماجنا من المواقع المتميزة', '1706056969.png', '2024-01-24 01:19:28', '2024-01-24 01:42:49', '2024-01-24 01:42:49'),
(6, 'محمود محمد', 'مدير', 'أوصى بشده بالتعامل مع الموقع فهو يتم ادراته بحرفية', '1706056998.png', '2024-01-24 01:20:02', '2024-01-24 01:43:18', '2024-01-24 01:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mail`, `phone_no`, `message`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'mohamed khairy', 'aeea@gmail.com', NULL, 'hvhhvhgv', '2023-05-03 01:58:45', '2023-05-02 22:58:45', '2023-05-02 22:58:45'),
(2, 'محمد احمد ابراهيم', 'dwarf@gmil.com', NULL, 'jkhfdkshfk dshfsudh isdhf sdf', '2023-05-03 12:59:46', '2023-05-03 09:59:46', '2023-05-03 09:59:46'),
(3, 'محمد خيرى', 'aeea@gmail.com', NULL, 'lsdkfjlksdjflsfj', '2024-01-23 23:14:13', '2024-01-24 00:14:13', '2024-01-24 00:14:13'),
(4, 'ahmed hamed', 'dwarf@gmil.com', '0123238568', 'uewryiwue', '2024-01-23 23:17:09', '2024-01-24 00:17:09', '2024-01-24 00:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `feature_h` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_p` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_phone` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_fax` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_h`, `feature_p`, `feature_phone`, `feature_fax`, `feature_address`, `feature_image`, `published_at`, `created_at`, `updated_at`) VALUES
(5, 'تواصل معنا', 'نحن هنا لسماعك و مساعتدتك,تواصل معنا الأن !', '+966563084444', 'kamal@magna-strategy.com', 'المملكة العربية السعودية , جدة', 'no-image.png', '2024-01-23 23:36:47', '2023-05-04 17:10:17', '2024-01-24 00:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `footer_span` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer_span`, `published_at`, `created_at`, `updated_at`) VALUES
(3, 'Portifo', '2022-08-24 22:45:35', '2022-02-22 18:50:25', '2022-08-24 22:45:35'),
(5, 'جميع الخقوق محفوظة  لشركة المسار الإلكترونى @ 2023', '2023-05-04 11:07:09', '2023-05-03 08:27:49', '2023-05-04 15:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` bigint UNSIGNED NOT NULL,
  `landing_h` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'title',
  `landing_p` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `landing_image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landings`
--

INSERT INTO `landings` (`id`, `landing_h`, `landing_p`, `landing_image`, `published_at`, `created_at`, `updated_at`) VALUES
(6, NULL, '-يرجى مراعاة ادخال البيانات بشكل صحيح\r\n-يرجى ادخال الاسم ورقم جواز السفر او رقم الباقة\r\n-فى حال وجود شكاوى تواصل معنا من خلال ارقامنا\r\n-فى حالة الشكوى يرجى الاحتفاظ بالطلب وارفاقه مع الشكوى', 'none', '2023-05-05 21:23:46', '2023-05-06 01:25:20', '2023-05-06 01:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `logo_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_name`, `logo_image`, `published_at`, `created_at`, `updated_at`) VALUES
(8, 'المسار الإلكترونى', '1683114383.png', '2023-05-04 09:02:44', '2023-05-03 08:46:23', '2023-05-04 13:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_22_081421_create_posts_table', 1),
(6, '2021_11_24_073223_add_image_to_posts_table', 2),
(7, '2021_11_24_074412_add_image_to_posts_table', 3),
(8, '2022_02_12_112008_create_services_table', 4),
(9, '2022_02_12_112009_create_portifolios_table', 4),
(10, '2022_02_12_112010_create_abouts_table', 4),
(11, '2022_02_19_091152_create_logos_table', 5),
(12, '2022_02_19_091153_create_landings_table', 5),
(13, '2022_02_19_091154_create_features_table', 5),
(14, '2022_02_19_091155_create_footers_table', 5),
(15, '2022_02_19_091156_create_sociallinks_table', 5),
(16, '2022_02_20_163157_create_contacts_table', 6),
(17, '2022_02_20_200939_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('3309ece9-2238-4206-9f11-1dad233a4ac9', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 1, '{\"id\":4,\"name\":\"ahmed hamed\",\"mail\":\"dwarf@gmil.com\",\"message\":\"uewryiwue\"}', NULL, '2024-01-24 00:17:09', '2024-01-24 00:17:09'),
('6ac5d18e-3e5c-4694-8237-f84aa7dbd544', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 3, '{\"id\":4,\"name\":\"ahmed hamed\",\"mail\":\"dwarf@gmil.com\",\"message\":\"uewryiwue\"}', NULL, '2024-01-24 00:17:09', '2024-01-24 00:17:09'),
('7103e676-71a0-43d1-bc20-163d518f2ff5', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 2, '{\"id\":2,\"name\":\"\\u0645\\u062d\\u0645\\u062f \\u0627\\u062d\\u0645\\u062f \\u0627\\u0628\\u0631\\u0627\\u0647\\u064a\\u0645\",\"mail\":\"dwarf@gmil.com\",\"message\":\"jkhfdkshfk dshfsudh isdhf sdf\"}', NULL, '2023-05-03 09:59:47', '2023-05-03 09:59:47'),
('82b05746-dee9-46b8-95f1-3b9cf24fa945', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 2, '{\"id\":3,\"name\":\"\\u0645\\u062d\\u0645\\u062f \\u062e\\u064a\\u0631\\u0649\",\"mail\":\"aeea@gmail.com\",\"message\":\"lsdkfjlksdjflsfj\"}', NULL, '2024-01-24 00:14:13', '2024-01-24 00:14:13'),
('845b2390-fdef-4369-bba9-f5fbf9cf5964', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 1, '{\"id\":3,\"name\":\"\\u0645\\u062d\\u0645\\u062f \\u062e\\u064a\\u0631\\u0649\",\"mail\":\"aeea@gmail.com\",\"message\":\"lsdkfjlksdjflsfj\"}', NULL, '2024-01-24 00:14:13', '2024-01-24 00:14:13'),
('91c1fc72-9b7c-4d0c-b481-f575b77a3afe', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 2, '{\"id\":1,\"name\":\"mohamed khairy\",\"mail\":\"aeea@gmail.com\",\"message\":\"hvhhvhgv\"}', NULL, '2023-05-02 22:58:46', '2023-05-02 22:58:46'),
('b4ee9215-db3f-476d-94fe-6ba5c8c9e9ed', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 2, '{\"id\":4,\"name\":\"ahmed hamed\",\"mail\":\"dwarf@gmil.com\",\"message\":\"uewryiwue\"}', NULL, '2024-01-24 00:17:09', '2024-01-24 00:17:09'),
('b7d276bb-9c3d-4783-a59f-e91ff96debd5', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 1, '{\"id\":1,\"name\":\"mohamed khairy\",\"mail\":\"aeea@gmail.com\",\"message\":\"hvhhvhgv\"}', NULL, '2023-05-02 22:58:46', '2023-05-02 22:58:46'),
('ba916b21-953d-42cb-8089-9efb9dbfceb4', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 3, '{\"id\":3,\"name\":\"\\u0645\\u062d\\u0645\\u062f \\u062e\\u064a\\u0631\\u0649\",\"mail\":\"aeea@gmail.com\",\"message\":\"lsdkfjlksdjflsfj\"}', NULL, '2024-01-24 00:14:13', '2024-01-24 00:14:13'),
('d544795b-a6bc-4232-b8e3-199c635f6b7a', 'App\\Notification\\EmailNotification', 'App\\Models\\User', 1, '{\"id\":2,\"name\":\"\\u0645\\u062d\\u0645\\u062f \\u0627\\u062d\\u0645\\u062f \\u0627\\u0628\\u0631\\u0627\\u0647\\u064a\\u0645\",\"mail\":\"dwarf@gmil.com\",\"message\":\"jkhfdkshfk dshfsudh isdhf sdf\"}', NULL, '2023-05-03 09:59:47', '2023-05-03 09:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('awriter460@gmail.com', '$2y$10$DlM7xDVOKvnw5ZB0TkL9VugBXHdiL2n1M8Q0iajQl1RXOjTEY1VTG', '2022-02-22 19:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portifolios`
--

CREATE TABLE `portifolios` (
  `id` bigint UNSIGNED NOT NULL,
  `year` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portifolios`
--

INSERT INTO `portifolios` (`id`, `year`, `published_at`, `created_at`, `updated_at`) VALUES
(1, '2024', '2023-05-06 10:38:00', '2023-05-06 14:39:24', '2023-05-06 14:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `published_at`, `created_at`, `updated_at`, `image`) VALUES
(1, 'المسار الإلكترونى', 'شركة خدمات', NULL, '2023-05-06 19:22:00', '2023-05-06 19:22:00', NULL),
(2, 'المهندس محمد خيري', 'محمد علي', NULL, '2023-05-06 20:08:53', '2023-05-06 20:08:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `nationality` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date DEFAULT NULL,
  `service_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_license_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'none',
  `servi_ces` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_desc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_attachment` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_descc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `passport`, `phone_number`, `expiry_date`, `nationality`, `birth_date`, `service_type`, `service_code`, `barcode`, `service_license_no`, `service_no`, `servi_ces`, `service_image`, `attachment_desc`, `service_attachment`, `attachment_descc`, `status`, `created_at`, `published_at`, `updated_at`) VALUES
(1, 'محمد حسن ابراهيمtt', '6666', '0123423425', '2023-05-18', 'مصرى', '2023-05-03', 'تأشيرةuu', '555555', '1683450569.png', '4444444', '0', 'fghfgh', 'img.png', NULL, 'img.png', NULL, 2, '2023-05-07 13:09:29', NULL, '2023-05-07 13:32:03'),
(2, 'عادل قابيل محمد', '4564', '01000234234', '2023-05-10', 'مصرى', '2023-05-17', 'تأشيرة حج', '324', '1683452153.png', '333', NULL, 'اساسى', 'img.png', NULL, 'img.png', NULL, 1, '2023-05-07 13:35:53', NULL, '2023-05-07 13:35:53'),
(3, 'محمود جميل احمد', '34534', '01984759834', '2023-05-09', 'مصرىyy', '2023-05-02', 'dfgd', '4645', '1683452680.png', '5555', NULL, 'بدون', '1683452680.png', 'يبليبسل', '1683452680.png', 'يبليبليسبل', 1, '2023-05-07 13:44:40', NULL, '2023-05-07 13:44:40'),
(4, 'محمد احمد ابراهيم', '324324', '0122312324', '2023-05-10', 'عراقى', '2023-05-25', 'اضافى', '2346234', '1683468839.png', '098089', NULL, 'اضافى', '1683468839.png', 'ojjl', '1683468839.pdf', 'lljljk', 1, '2023-05-07 18:13:59', NULL, '2023-05-07 18:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint UNSIGNED NOT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `facebook`, `twitter`, `youtube`, `published_at`, `created_at`, `updated_at`) VALUES
(4, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.youtube.com', '2022-03-02 11:11:50', '2022-03-02 11:10:28', '2022-03-02 11:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed khairy', 'awriter460@gmail.com', NULL, '$2y$10$DnsmP2JASgWGqCf2Pe70NOwdGyd32I19cZcqNMRWYyqex0A5Rb/Z6', '333JVz7ocp4TTs6dEdVHmNJ9K23AcJyrV80VVpvEcQFBhRqpwUrkVIa1gofX', '2022-02-15 09:31:55', '2022-02-15 09:31:55'),
(2, 'admin', 'wpg5kj@gmail.com', NULL, '$2y$10$Okms6Wio4QfqCOk0O22zx.ad6sFCFSQcUEcUln73p687wFP5PRw4i', NULL, '2022-02-26 19:21:04', '2022-02-26 19:21:04'),
(3, 'خالد حسن', 'haj.permits@gmail.com', NULL, '$2y$10$u1JKAn8GJ/9sA1GlpWFViOWYSYqv5r5I6GLo6e/fUBLtPYoqdkuWu', NULL, '2023-05-04 13:12:50', '2023-05-04 13:12:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_comments`
--
ALTER TABLE `clients_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `portifolios`
--
ALTER TABLE `portifolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients_comments`
--
ALTER TABLE `clients_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portifolios`
--
ALTER TABLE `portifolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
