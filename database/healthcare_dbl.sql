-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 08:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `short_description`, `date`, `slug`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, 'Health Care & Hospital Management Services', '20221129075547image-blog1.png', NULL, '<p>HIC offers comprehensive management services for hospitals and other healthcare organizations. Organization&rsquo;s operation and</p>', '2022-11-30', 'health-care-hospital-management-services', NULL, NULL, NULL, '2022-11-29 02:10:47', '2022-11-29 02:21:33'),
(3, 'Health Care & Hospital Management Services 2', '20221129075625image-blog2.png', NULL, '<p>HIC offers comprehensive management services for hospitals and other healthcare organizations. Organization&rsquo;s operation and</p>', '2022-11-30', 'health-care-hospital-management-services-2', NULL, NULL, NULL, '2022-11-29 02:11:25', '2022-11-29 02:21:28'),
(4, 'Health Care & Hospital Management Services 3', '20221129075658image-blog3.png', NULL, '<p>HIC offers comprehensive management services for hospitals and other healthcare organizations. Organization&rsquo;s operation and</p>', '2022-12-02', 'health-care-hospital-management-services-3', 'health3', 'heamth3', 'halth3', '2022-11-29 02:11:58', '2022-11-30 05:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `configures`
--

CREATE TABLE `configures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configures`
--

INSERT INTO `configures` (`id`, `email`, `phone`, `location`, `description`, `created_at`, `updated_at`) VALUES
(1, 'healthcare@gmail.com', '9800000000', 'Putalisadak, Kathmandu', '<p>L&ouml;rem ipsum od ohet dilogi. Bell trabel, samuligt, oh&ouml;bel utom diska. Jinesade bel n&auml;r feras redorade i belogi. FAR paratyp i muv&aring;ning, och pesask vyfisat. Viktiga poddradio har un mad och inde.</p>', '2022-11-28 02:37:25', '2022-11-30 04:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `location`, `description`, `short_description`, `date`, `slug`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, 'Futsal Competition', '20221129070719image-pexels-photo-12685612.webp', 'New Baneshwor', '<p>test</p>', NULL, '2022-12-20', 'futsal-competition', NULL, NULL, NULL, '2022-11-29 01:22:19', '2022-12-08 09:02:32'),
(3, 'Design Competition', '20221129070746image-pexels-photo-12685612.webp', 'Thamel, Kathmandu', '<p>sas</p>', NULL, '2022-12-19', 'design-competition', NULL, NULL, NULL, '2022-11-29 01:22:46', '2022-12-08 09:02:40'),
(4, 'Ludo Competition', '20221129070850image-pexels-photo-12685612.webp', 'Kupondole', '<p>asa</p>', NULL, '2022-12-31', 'ludo-competition', 'ludo', 'ludo', 'ludo', '2022-11-29 01:23:50', '2022-12-08 09:02:22'),
(5, 'Programming Competition', '20221129070914image-pexels-photo-12685612.webp', 'Putalisadak, Kathmandu', '<p><strong>Competition</strong></p>', NULL, '2022-12-30', 'programming-competition', NULL, NULL, NULL, '2022-11-29 01:24:14', '2022-12-22 08:29:24');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What is Healthcare', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2022-11-29 04:25:23', '2022-11-29 04:25:23'),
(2, 'How To Contact?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2022-11-29 04:28:44', '2022-11-29 04:28:44'),
(3, 'Why do I need a business consulting service?', '<p>First, note that we ask &ldquo;why&rdquo;, not &ldquo;if&rdquo;&mdash;this eliminates the chance for people to think they&nbsp;<em>don&rsquo;t</em>&nbsp;need a business consultant. Use this question to point out all the perks that come from working with a consultant and help people see what value you have to offer for their business. SMBs, especially, can stand to gain a lot of valuable insight because they may not be as familiar with the consulting industry as others in business.&nbsp;</p>', '2022-11-29 04:29:47', '2022-11-29 04:29:47'),
(4, 'How do you price your services?', '<p>Carried on from above, this is another common question and a different way of phrasing the good old &ldquo;how much does it cost&rdquo; question. Consultants have different price structures and ways of charging for services. Some charge hourly. Others offer services on a per-project basis with pre-determined hours or involvement. Still more may charge per service, per appointment, or in some other fashion.&nbsp;</p>', '2022-11-29 04:30:09', '2022-11-29 04:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `date`, `created_at`, `updated_at`) VALUES
(4, NULL, '20221201085645file-20211224112820.jpg', '2022-12-01', '2022-12-01 03:11:45', '2022-12-01 03:11:45'),
(5, NULL, '20221201085646file-20220105083712.jpg', '2022-12-01', '2022-12-01 03:11:46', '2022-12-01 03:11:46'),
(6, NULL, '20221201085646file-canada.webp', '2022-12-01', '2022-12-01 03:11:46', '2022-12-01 03:11:46'),
(7, NULL, '20221201085646file-flight-web-banner_shreeairlines.jpg', '2022-12-01', '2022-12-01 03:11:46', '2022-12-01 03:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `image_configures`
--

CREATE TABLE `image_configures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_configures`
--

INSERT INTO `image_configures` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Faq', '20221201053425image-question.png', NULL, '2022-11-30 23:42:42', '2022-11-30 23:49:25'),
(4, 'Media Coverage', '20221201053557image-mediacov.jpeg', NULL, '2022-11-30 23:45:29', '2022-11-30 23:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `full_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Durgesh', 'durgesh.upadhyaya7@gmail.com', '9843463737', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-11-30 03:26:37', '2022-11-30 03:26:37'),
(6, 'Durgesh', 'durgesh.upadhyaya7@gmail.com', '9843463737', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-11-30 03:31:23', '2022-11-30 03:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `media_coverages`
--

CREATE TABLE `media_coverages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_coverages`
--

INSERT INTO `media_coverages` (`id`, `title`, `date`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The Himalayan', '2022-11-27', 'himalayan.com/durgesh7', '<p>asas</p>', '2022-11-28 05:21:17', '2022-11-29 02:03:50'),
(2, 'Heading 1', '2022-11-29', '#', NULL, '2022-11-29 01:57:33', '2022-11-29 01:57:33'),
(3, 'Heading 2', '2022-11-30', '#', NULL, '2022-11-29 01:57:45', '2022-11-29 01:57:45'),
(4, 'Heading 3', '2022-11-30', '#', NULL, '2022-11-29 01:57:57', '2022-11-29 01:57:57'),
(5, 'Heading 4', '2022-12-01', '#', NULL, '2022-11-29 01:58:16', '2022-11-29 01:58:16'),
(6, 'Heading 5', '2022-12-03', '#', NULL, '2022-11-29 01:58:31', '2022-11-29 01:58:31'),
(7, 'Heading 6', '2022-12-05', '#', NULL, '2022-11-29 01:58:44', '2022-11-29 01:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `image`, `type`, `position`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kabiraj Bhatta', '20221128101042image-20211214080356.jpg', 'Lifetime', 'Developer', '<p>This is test</p>', 'kabiraj-bhatta', '2022-11-28 04:25:42', '2022-11-28 04:26:47'),
(2, 'Durgesh Upadhyaya', '20221130070028image-testimonial2.jpg', 'General', 'Developer', '<p>sas</p>', 'durgesh-upadhyaya', '2022-11-30 01:15:28', '2022-11-30 01:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `member_infos`
--

CREATE TABLE `member_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_infos`
--

INSERT INTO `member_infos` (`id`, `title`, `type`, `description`, `image`, `created_at`, `updated_at`, `slug`) VALUES
(3, 'General Members', 'General', '<ul>\r\n	<li>General ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n</ul>', '20221130082011image-members.jpeg', '2022-11-30 02:35:11', '2022-11-30 02:41:03', 'general-members'),
(4, 'Lifetime Members', 'Lifetime', '<ul>\r\n	<li>lifetime ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n	<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, lorem commodi ab.</li>\r\n</ul>', '20221130082040image-members.jpeg', '2022-11-30 02:35:40', '2022-11-30 02:35:40', 'lifetime-members');

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
(5, '2022_11_28_063322_create_blogs_table', 1),
(6, '2022_11_28_064310_create_events_table', 1),
(7, '2022_11_28_073218_create_configures_table', 1),
(8, '2022_11_28_073253_create_sliders_table', 1),
(9, '2022_11_28_073310_create_social_media_table', 1),
(10, '2022_11_28_073355_create_pages_table', 1),
(11, '2022_11_28_090741_create_our_teams_table', 2),
(12, '2022_11_28_093530_create_members_table', 3),
(13, '2022_11_28_101942_create_news_table', 4),
(14, '2022_11_28_104946_create_media_coverages_table', 5),
(15, '2022_11_29_045002_create_services_table', 6),
(16, '2022_11_29_100351_create_faqs_table', 7),
(17, '2022_11_30_044809_add_location_to_events_table', 8),
(18, '2022_11_30_074959_create_member_infos_table', 9),
(19, '2022_11_30_081516_add_slug_to_member_infos_table', 10),
(20, '2022_11_30_085544_create_inquiries_table', 11),
(21, '2022_12_01_045747_create_image_configures_table', 12),
(22, '2022_12_01_055502_create_galleries_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `description`, `short_description`, `date`, `slug`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Happy Day', '20221129085748image-blog2.png', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', '<p>HIC offers comprehensive management services for hospitals and other healthcare organizations. Organization&rsquo;s operation and...</p>', '2022-11-29', 'happy-day', NULL, NULL, NULL, '2022-11-28 04:49:21', '2022-11-29 03:33:31'),
(2, 'The Ronaldo 7', '20221129085841image-blog3.png', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', '<p>HIC offers comprehensive management services for hospitals and other healthcare organizations. Organization&rsquo;s operation and...</p>', '2022-11-30', 'the-ronaldo-7', NULL, NULL, NULL, '2022-11-29 03:13:41', '2022-11-29 03:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `name`, `image`, `position`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh Upadhyaya', '20221128091115image-20211214080356.jpg', 'Developer', '<p>qwqw</p>', 'durgesh-upadhyaya', '2022-11-28 03:26:15', '2022-11-28 03:26:15'),
(2, 'Kabiraj Bhatta', '20221130055142image-testimonial2.jpg', 'Developer', '<p>asas</p>', 'kabiraj-bhatta', '2022-11-30 00:06:42', '2022-11-30 00:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `image`, `description`, `short_description`, `slug`, `link`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '20221129063947image-title_img.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ellus diam eleifend adipiscing et malesuada ullamcorper. Lectus sit fermentum, tempor fames eu eget tristique arcu. Dictumst est natoque accumsan vulputate nulla non. Tellus diam eleifend adipiscing et malesuada ullamcorper. Lectus sit fermentum, tempor fames eu eget tristique arcu.Tellus diam eleifend adipiscing et malesuada ullamcorper.', NULL, 'about-us', NULL, NULL, NULL, NULL, '2022-11-29 00:54:47', '2022-12-02 00:09:22'),
(2, 'Our Mission', '20221130052811image-news.png', '<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', NULL, 'our-mission', NULL, NULL, NULL, NULL, '2022-11-29 23:43:11', '2022-11-29 23:43:11'),
(3, 'Privacy Policy', '20221130053245image-news.png', '<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', NULL, 'privacy-policy', NULL, 'privacy', 'privacy', 'privacy', '2022-11-29 23:47:45', '2022-11-30 05:15:30'),
(4, 'Terms and Conditions', '20221130053305image-news.png', '<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', NULL, 'terms-and-conditions', NULL, NULL, NULL, NULL, '2022-11-29 23:48:05', '2022-11-29 23:48:05'),
(5, 'Our Vision', '20221130095008image-news.png', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, 'our-vision', NULL, NULL, NULL, NULL, '2022-11-30 04:05:08', '2022-11-30 04:05:08');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `description`, `short_description`, `slug`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '20221129045717image-flight-web-banner_shreeairlines.jpg', '<p>sasa</p>', '<p>sas</p>', 'web-development', 'web development', 'web development', 'web development', '2022-11-28 23:12:17', '2022-11-28 23:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_main_logo', NULL, NULL, NULL),
(2, 'site_footer_logo', NULL, NULL, NULL),
(3, 'site_information', '\"L&ouml;rem ipsum od ohet dilogi. Bell trabel, samuligt, oh&ouml;bel utom diska. Jinesade bel n&auml;r feras redorade i belogi. FAR paratyp i muv&aring;ning, och pesask vyfisat. Viktiga poddradio har un mad och inde.\"', NULL, NULL),
(4, 'map', '\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3532.4648540005687!2d85.31808155073865!3d27.702930232208292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a97bc7e29b%3A0xde8c83422b6c7218!2sNepal%20Medical%20Association!5e0!3m2!1sen!2snp!4v1669718170749!5m2!1sen!2snp\"', NULL, NULL),
(5, 'site_contact', '\"9800000000\"', NULL, NULL),
(6, 'site_email', '\"admin@healthcare.com\"', NULL, NULL),
(7, 'site_location', '\"Kathmandu, Nepal\"', NULL, NULL),
(8, 'site_copyright', '\"2022 All right Reserved\"', NULL, NULL),
(9, 'homepage_seo_title', '\"Nepal Healthcare Service Association\"', NULL, NULL),
(10, 'homepage_seo_description', '\"Nepal Healthcare Service Association\"', NULL, NULL),
(11, 'homepage_seo_keywords', '\"Nepal Healthcare Service Association\"', NULL, NULL),
(12, 'homepage_external_link', '\"https:\\/\\/nhcma.com.np\\/about\"', NULL, NULL),
(13, 'fav_icon', NULL, NULL, NULL),
(14, 'contact_section_description', '\"We love to hear from you. Our friendly team is always here to chat\"', NULL, NULL),
(15, 'contact_seo_title', '\"Nepal Healthcare Service Association-Contact\"', NULL, NULL),
(16, 'contact_seo_keywords', '\"Nepal Healthcare Service Association\"', NULL, NULL),
(17, 'contact_seo_description', '\"Nepal Healthcare Service Association \"', NULL, NULL),
(18, 'faq_image', NULL, NULL, NULL),
(19, 'events_seo_title', '\"Nepal Healthcare Service Association - events\"', NULL, NULL),
(20, 'events_seo_keywords', '\"events\"', NULL, NULL),
(21, 'events_seo_description', '\"events Healthcare\"', NULL, NULL),
(22, 'blogs_seo_title', '\"Nepal Healthcare Service Association - blogs\"', NULL, NULL),
(23, 'blogs_seo_keywords', '\"blogs\"', NULL, NULL),
(24, 'blogs_seo_description', '\"blogs Healthcare\"', NULL, NULL),
(25, 'news_seo_title', '\"Nepal Healthcare Service Association - news\"', NULL, NULL),
(26, 'news_seo_keywords', '\"news\"', NULL, NULL),
(27, 'news_seo_description', '\"news Healthcare\"', NULL, NULL),
(28, 'media_coverage_image', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `description`, `order`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Nepal Healthcare Services Association', '20221129061923image-sliderimage1.png', '<p>test</p>', 1, 'test', '2022-11-29 00:34:23', '2022-11-29 00:34:23'),
(4, 'Nepal Healthcare Services Association 3', '20221129062008image-sliderimage1.png', NULL, 3, NULL, '2022-11-29 00:35:08', '2022-11-29 00:35:08'),
(5, 'Nepal Healthcare Services Association 2', '20221129062450image-sliderimage1.png', NULL, 2, NULL, '2022-11-29 00:39:50', '2022-11-29 00:39:50'),
(9, 'Test Slider', '20221201043633image-sliderimage1.png', '<p>asasas</p>', 4, 'sa', '2022-11-30 22:51:33', '2022-11-30 22:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Instagram', 'instagram.com/healthcare', 'fa fa-instagram', '2022-11-29 05:03:46', '2022-11-30 00:45:33'),
(3, 'Facebook', 'facebook.com/healthcare', 'fa fa-facebook', '2022-11-29 05:04:12', '2022-11-30 00:45:26'),
(4, 'Twitter', 'twitter.com/durgesh7', 'fa fa-twitter', '2022-11-29 05:04:40', '2022-11-30 00:45:19'),
(5, 'Linkedin', 'linkedin.com/durgesh7', 'fa fa-linkedin', '2022-11-29 05:05:10', '2022-11-30 00:45:12');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@admin.com', NULL, '$2y$10$OAt9CgAbZl6/bKaeuLVUKuEINBkuQ8kp4hv/lIZiSeRHFYYarInTC', NULL, '2022-11-28 02:37:25', '2022-12-22 09:06:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configures`
--
ALTER TABLE `configures`
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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_configures`
--
ALTER TABLE `image_configures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_coverages`
--
ALTER TABLE `media_coverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_infos`
--
ALTER TABLE `member_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `configures`
--
ALTER TABLE `configures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image_configures`
--
ALTER TABLE `image_configures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media_coverages`
--
ALTER TABLE `media_coverages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_infos`
--
ALTER TABLE `member_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
