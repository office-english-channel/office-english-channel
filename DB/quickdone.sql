-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 11:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickdone`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'buWlntYa8BX8EuRqcjiQHSnH43v0D6Iy', 1, '2018-03-13 18:30:00', '2018-03-12 18:30:00', '2018-03-13 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Martin', 'Wangor', 'martin.wangor@gmail.com', '$2y$10$zJyESc8agrziXhtNvLF6J.7c7ewmkFYJi2nFzZ6X2QERTplUiA93i', 1, NULL, '2018-03-20 23:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `category_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cover_id`, `category_name`, `slug`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 'Home Cleaning & Repairs', 'home-cleaning-repairs', NULL, 1, '2018-03-20 06:08:16', '2018-04-04 06:43:25'),
(2, 9, 'Beauty & Spa', 'beauty-spa', NULL, 1, '2018-03-20 06:12:11', '2018-04-04 06:44:09'),
(3, 17, 'Weddings & Events', 'weddings-events', NULL, 1, '2018-03-21 06:49:15', '2018-04-04 06:44:27'),
(4, NULL, 'Business Services', 'business-services', 'Business Services', 1, '2018-04-04 06:44:46', '2018-04-04 06:44:46'),
(5, NULL, 'Personal &  More', 'personal-more', 'Personal &  More', 1, '2018-04-04 06:45:07', '2018-04-04 06:45:07'),
(6, NULL, 'Lessons & Hobbies', 'lessons-hobbies', 'Lessons & Hobbies', 1, '2018-04-04 06:45:21', '2018-04-04 06:45:21'),
(7, 31, 'test', 'test', 'wqeqweqwe', 1, '2018-04-19 01:01:27', '2018-04-19 01:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `first_name`, `last_name`, `email`, `subject`, `comments`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '12@gmail.com', 'test', 'demo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `post_category_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` smallint(6) NOT NULL DEFAULT '0',
  `status` smallint(6) NOT NULL DEFAULT '1',
  `sequence_number` int(11) NOT NULL DEFAULT '0',
  `column_number` smallint(6) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_by` int(10) DEFAULT NULL,
  `update_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `page_id`, `post_category_id`, `name`, `slug`, `menu_type`, `status`, `sequence_number`, `column_number`, `deleted_at`, `created_at`, `updated_at`, `create_by`, `update_by`) VALUES
(2, 1, NULL, 'About Us', 'about-us', 1, 1, 1, 1, NULL, '2018-05-31 01:48:06', '2018-10-05 23:38:14', NULL, 1),
(3, 2, NULL, 'FAQ', 'faq', 1, 1, 1, 2, NULL, '2018-05-31 01:48:06', '2018-10-05 23:38:38', NULL, 1),
(4, 2, NULL, 'Privacy Policy', 'privacy-policy', 1, 1, 1, 1, NULL, '2018-10-05 23:33:33', '2018-10-05 23:37:54', 1, 1),
(5, 6, NULL, 'test foooter', 'test-foooter', 1, 1, 1, 1, '2018-10-12 03:10:58', '2018-10-12 03:10:11', '2018-10-12 03:10:58', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_forms`
--

CREATE TABLE `inquiry_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry_forms`
--

INSERT INTO `inquiry_forms` (`id`, `first_name`, `last_name`, `email`, `subject`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'first', 'name', 'email', 'subject', 'comments', '2018-04-16 05:47:31', '2018-04-16 05:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `mail_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE MAIL TYPE',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE SUBJECT',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT 'STORE BODY OF MAIL',
  `mail_tags` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE MAIL TAGS',
  `send_to_cc` smallint(6) NOT NULL DEFAULT '0' COMMENT '1 - YES, 0 - NO',
  `cc_list` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE CC MAIL ID',
  `send_to_bcc` smallint(6) NOT NULL DEFAULT '0' COMMENT '1 - YES, 0 - NO',
  `bcc_list` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE BCC MAIL ID',
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `send_to_admin` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-YES,0-NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `mail_type`, `subject`, `description`, `mail_tags`, `send_to_cc`, `cc_list`, `send_to_bcc`, `bcc_list`, `status`, `send_to_admin`, `created_at`, `updated_at`) VALUES
(2, 'vender_inquiry_mail_template', 'Inquiry on Completes!!', 'Dear {first_name} {last_name},<br><br>\r\n\r\nYou are successfully inquiry with our site.<br><br>\r\nVendor Name         : {vendor}<br><br>\r\nCategory Name       : {category}<br><br>\r\nSub-category Name   : {sub_category}<br><br>\r\nName                : {first_name} {last_name}<br><br>\r\nEmail               : {email}<br><br>\r\nMobile              : {mobile_no}<br><br>\r\nAddress             : {address_1}<br><br>\r\nComments            : {comments}<br><br>\r\n\r\nThank you for inquiry. We hope you enjoy these product. If you need anything, please let us know.<br><br>\r\n\r\nThanks.', '{first_name},{last_name},{email}', 0, NULL, 0, NULL, 1, 0, NULL, NULL),
(3, 'client_replay_inquiry_mail_template', 'Inquiry replay on Completes!!', '{first_name} {last_name},<br><br>\r\n\r\nThank you for inquiry. We hope you enjoy these product. If you need anything, please let us know.<br><br>\r\n\r\nThanks.', '', 0, NULL, 0, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `source`, `created_at`, `updated_at`) VALUES
(9, 'uploads/images/categories/7/0/3/9/d/2018-03-20_12-34-09-550ba1dcf0688b10f2e6e5a635e37dfa.jpg', '2018-03-20 07:04:09', '2018-03-20 07:04:09'),
(10, 'uploads/images/categories/a/6/b/3/e/2018-03-20_12-37-48-5159833ba9b86c65e81aeaad1dad76f7.jpg', '2018-03-20 07:07:48', '2018-03-20 07:07:48'),
(15, 'uploads/images/subcategories/8/6/2/4/d/2018-03-20_13-42-42-3bdf16900b86d5e5e4b9890401f507c9.jpg', '2018-03-20 08:12:42', '2018-03-20 08:12:42'),
(16, 'uploads/images/vendors/a/e/9/d/a/2018-03-21_06-29-03-550ba1dcf0688b10f2e6e5a635e37dfa.jpg', '2018-03-21 00:59:04', '2018-03-21 00:59:04'),
(17, 'uploads/images/categories/d/b/2/d/1/2018-03-21_12-19-15-1867baa9d738c56dd7346d3b387fe7be.jpg', '2018-03-21 06:49:15', '2018-03-21 06:49:15'),
(18, 'uploads/images/vendors/6/f/1/9/7/2018-03-22_08-13-22-5159833ba9b86c65e81aeaad1dad76f7.jpg', '2018-03-22 02:43:22', '2018-03-22 02:43:22'),
(19, 'uploads/images/vendors/1/6/1/b/3/2018-04-04_12-55-22-64aa12df62039a9b24dc783023bf12b8.jpg', '2018-04-04 07:25:23', '2018-04-04 07:25:23'),
(20, 'uploads/images/subcategories/e/3/d/a/3/2018-04-05_11-23-21-8772a3217bd0b3b9d5e4443d9646064e.jpg', '2018-04-05 05:53:21', '2018-04-05 05:53:21'),
(21, 'uploads/images/subcategories/d/b/e/3/a/2018-04-05_11-28-04-c4b9e9b2167a230d9d391294a47e9d63.jpg', '2018-04-05 05:58:04', '2018-04-05 05:58:04'),
(22, 'uploads/images/subcategories/e/8/b/a/a/2018-04-05_11-28-15-c3e9f175662f3bf5b65d5e81bde7661b.jpg', '2018-04-05 05:58:15', '2018-04-05 05:58:15'),
(23, 'uploads/images/subcategories/a/6/5/d/d/2018-04-05_11-28-22-3b14f5aa6707bab98c5782aa273469d3.jpg', '2018-04-05 05:58:22', '2018-04-05 05:58:22'),
(24, 'uploads/images/subcategories/2/a/f/5/0/2018-04-05_11-28-28-83cc7752d770f49bef4a7e44ab644989.jpg', '2018-04-05 05:58:28', '2018-04-05 05:58:28'),
(25, 'uploads/images/subcategories/6/f/5/d/0/2018-04-05_11-28-34-42a51bf4db13135dfbb6ebb2d72c415a.jpg', '2018-04-05 05:58:34', '2018-04-05 05:58:34'),
(26, 'uploads/images/subcategories/4/1/f/a/e/2018-04-05_11-28-42-f7f404b3527928ab36464d3fb3369dbd.jpg', '2018-04-05 05:58:42', '2018-04-05 05:58:42'),
(27, 'uploads/images/subcategories/f/7/0/a/e/2018-04-05_11-28-54-2fb0b8b0f9304c91c5810c26d3434ada.jpg', '2018-04-05 05:58:54', '2018-04-05 05:58:54'),
(28, 'uploads/images/subcategories/3/5/1/7/2/2018-04-05_11-29-01-c3e9f175662f3bf5b65d5e81bde7661b.jpg', '2018-04-05 05:59:01', '2018-04-05 05:59:01'),
(29, 'uploads/images/subcategories/4/6/c/2/9/2018-04-05_11-29-07-64aa12df62039a9b24dc783023bf12b8.jpg', '2018-04-05 05:59:07', '2018-04-05 05:59:07'),
(30, 'uploads/images/categories/8/a/3/9/1/2018-04-19_06-31-25-8772a3217bd0b3b9d5e4443d9646064e.jpg', '2018-04-19 01:01:27', '2018-04-19 01:01:27'),
(31, 'uploads/images/categories/0/8/6/8/6/2018-04-19_06-51-22-64aa12df62039a9b24dc783023bf12b8.jpg', '2018-04-19 01:21:23', '2018-04-19 01:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_menu_id` int(10) UNSIGNED DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `post_category_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Related Category Id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-MAINMENU,2-PAGE,3-POSTLIST,4-PRODUCTCATEGORY',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `sequence_number` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_menu_id`, `page_id`, `post_category_id`, `category_id`, `name`, `slug`, `menu_type`, `status`, `sequence_number`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'Activity', 'activity', 1, 1, 1, NULL, '2018-10-10 07:13:42', '2018-10-10 07:46:11'),
(2, 1, 2, NULL, NULL, 'About Us 1', 'about-us-1', 2, 1, 2, NULL, '2018-10-10 07:14:50', '2018-10-10 07:19:47'),
(3, NULL, 4, NULL, NULL, 'Discover', 'discover', 2, 1, 3, NULL, '2018-10-10 07:19:02', '2018-10-10 07:46:29'),
(4, NULL, 5, NULL, NULL, 'My Portfolio', 'my-portfolio', 2, 1, 4, NULL, '2018-10-10 07:47:10', '2018-10-10 07:48:00'),
(5, NULL, NULL, NULL, NULL, 'perent', 'perent', 1, 1, 5, NULL, '2018-10-10 09:05:55', '2018-10-10 09:05:55'),
(6, 5, 3, NULL, NULL, 'chield 1', 'chield-1', 2, 1, 6, NULL, '2018-10-10 09:06:31', '2018-10-10 09:06:31'),
(7, NULL, NULL, NULL, NULL, 'perent 11111111', 'perent-11111111', 1, 1, 7, '2018-10-12 03:14:16', '2018-10-12 03:12:14', '2018-10-12 03:14:16'),
(8, 7, 4, NULL, NULL, 'chield 1111111111111111111', 'chield-1111111111111111111', 2, 1, 8, '2018-10-12 03:14:12', '2018-10-12 03:13:48', '2018-10-12 03:14:12');

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
(1, '2018_03_11_122927_create_administrators_table', 1),
(2, '2018_03_11_122933_create_settings_table', 1),
(3, '2018_03_11_122940_create_categories_table', 1),
(4, '2018_03_11_122946_create_sub_categories_table', 1),
(5, '2018_03_11_122952_create_vendors_table', 1),
(6, '2018_03_11_122958_create_contact_forms_table', 1),
(7, '2018_03_11_123005_create_inquiry_forms_table', 1),
(8, '2018_03_11_123012_create_service_requests_table', 1),
(9, '2018_03_11_123018_create_subscribers_table', 1),
(10, '2018_03_11_140535_create_medias_table', 1),
(11, '2018_03_11_141009_add_fk_in_administrators_table', 1),
(12, '2018_03_11_141016_add_fk_in_settings_table', 1),
(13, '2018_03_11_141022_add_fk_in_categories_table', 1),
(14, '2018_03_11_141030_add_fk_in_sub_categories_table', 1),
(15, '2018_03_11_141036_add_fk_in_vendors_table', 1),
(16, '2018_03_11_141042_add_fk_in_contact_forms_table', 1),
(17, '2018_03_11_141049_add_fk_in_inquiry_forms_table', 1),
(18, '2018_03_11_141055_add_fk_in_service_requests_table', 1),
(19, '2018_03_11_141102_add_fk_in_subscribers_table', 1),
(20, '2018_03_11_141108_add_fk_in_medias_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM USERS',
  `update_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM USERS',
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `post_category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM POST CATEGORY',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE TITLE',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE SLUG',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT 'STORE BODY OF PAGE',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE META TITLE',
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE META TAGS OF PAGE',
  `meta_description` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE META DESCRIPTION OF PAGE',
  `newsletter_status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `register_status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `contact_status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `create_by`, `update_by`, `cover_id`, `post_category_id`, `title`, `slug`, `description`, `meta_title`, `meta_tags`, `meta_description`, `newsletter_status`, `register_status`, `contact_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 2, 'About Us', 'about-us', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'qwe qwe were 123123', 'qwe qwe', 'qweqweqwe \r\n qwe \r\n\r\n123', 0, 0, 0, 1, '2018-03-23 07:36:00', '2018-10-12 03:05:15', NULL),
(2, 1, 1, NULL, 2, 'Privacy Policy', 'privacy-policy', '<p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p>', 'test setse', 'tsetet setsetse', 'test s tset set', 1, 1, 1, 1, '2018-05-01 04:19:56', '2018-10-05 23:36:11', NULL),
(3, 1, NULL, NULL, 1, 'Activity', 'activity', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Activity', NULL, NULL, 0, 0, 0, 1, '2018-10-10 07:44:11', '2018-10-10 07:44:11', NULL),
(4, 1, NULL, NULL, 1, 'Discover', 'discover', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Discover', NULL, NULL, 0, 0, 0, 1, '2018-10-10 07:44:47', '2018-10-10 07:44:47', NULL),
(5, 1, NULL, NULL, 2, 'My Portfolio', 'my-portfolio', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'My Portfolio', NULL, NULL, 0, 0, 0, 1, '2018-10-10 07:45:30', '2018-10-10 07:45:30', NULL),
(6, 1, NULL, NULL, NULL, 'test etst', 'test-etst', '<p>setsetset</p>', 'setsetset', NULL, NULL, 1, 1, 1, 1, '2018-10-12 03:05:29', '2018-10-12 03:14:35', '2018-10-12 03:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'oeHoe3Qnrnq7i6pLhhgibFDQWVwdbkvH', '2018-03-26 01:40:57', '2018-03-26 01:40:57'),
(2, 1, 'MtJWF9nioHHPYz9tiCWV4MaLJqW3c8kG', '2018-03-26 01:41:42', '2018-03-26 01:41:42'),
(3, 1, 'fRt27vjDjJPCAih75bWmKLuRodYazptM', '2018-03-26 06:30:07', '2018-03-26 06:30:07'),
(4, 1, 'b4XVH96D49jrtMf77lqEjGsZLBwPuuAu', '2018-05-01 03:13:45', '2018-05-01 03:13:45'),
(5, 1, 'IEJq8sH1AFhbLOyFhKzyuS67KBfc1myj', '2018-05-02 02:37:17', '2018-05-02 02:37:17'),
(6, 1, 'II2EmamlM4NLVtnNe0M5egP5DtAz92mI', '2018-05-02 02:54:19', '2018-05-02 02:54:19'),
(7, 1, 'RmnDJgRNknHN3bRySocXIUCv2cfU5jPZ', '2018-05-02 02:55:19', '2018-05-02 02:55:19'),
(8, 1, 'RK0uVn8SVBuVwHxyiIgkNNTeV26luzYJ', '2018-05-06 23:15:01', '2018-05-06 23:15:01'),
(9, 1, '4MhWp20Yavqu4hyZg8htt5KR7iuGgP8o', '2018-05-07 02:46:17', '2018-05-07 02:46:17'),
(10, 1, 'j9XQXFQaxqAFQrbBqTe3PHMHFUwuu3H7', '2018-05-08 00:58:37', '2018-05-08 00:58:37'),
(11, 1, 'P8HTGRuBepMt6pm2ZMNtl4cpDBFIXmT7', '2018-05-08 01:55:17', '2018-05-08 01:55:17'),
(12, 1, 'Ij8FPlQbGwn9YbfnTIRa5xYPTVT0FG73', '2018-05-21 00:42:13', '2018-05-21 00:42:13'),
(13, 1, 'Ou15LdmHmfxn1Oz6mZM7hJ6rgov45WRK', '2018-05-24 06:47:23', '2018-05-24 06:47:23'),
(14, 1, '1ad27WJDmaVws708l6RYkqbiqgtQugdB', '2018-05-24 07:12:48', '2018-05-24 07:12:48'),
(15, 1, 'jWmqLH7pu5cqi8AY69V6Cl9WWG9y2cnl', '2018-05-27 23:37:58', '2018-05-27 23:37:58'),
(16, 1, 'zrLcm90USF3mW9gmGieuedxCjTuHuGeH', '2018-08-30 04:43:35', '2018-08-30 04:43:35'),
(17, 1, 'QrBKWjAHIllECvuwpe8xfe0QsIrTDtj1', '2018-09-27 01:16:35', '2018-09-27 01:16:35'),
(18, 1, 'rPdqeIVw8xuD7qxQRP2CHTWwFoSSFfaN', '2018-09-27 01:16:40', '2018-09-27 01:16:40'),
(19, 1, '8zKoQj9b5jytCmGjGoLkKzz59NUFGAXv', '2018-09-27 01:16:55', '2018-09-27 01:16:55'),
(20, 1, 'Pd19th6SDLc0AnvMhIf5GmDqsynMmegi', '2018-09-27 01:17:17', '2018-09-27 01:17:17'),
(21, 1, 'xh1DhvAaJNJcEzBSo5hhHRDpT2RjpcaF', '2018-09-27 01:18:17', '2018-09-27 01:18:17'),
(22, 1, 'aRxTFKS0hLcTkdZ0uABmZqing1hCgeFl', '2018-10-11 00:09:56', '2018-10-11 00:09:56'),
(23, 1, 'OxkwyQvjd2EAxIC3dQw5PbgkKAoT5Wec', '2018-10-11 00:59:55', '2018-10-11 00:59:55'),
(24, 1, '0bsgKHHNXLYNAJjsTHyWzZwYxuqsh4hk', '2018-10-12 02:35:56', '2018-10-12 02:35:56'),
(25, 1, 'g6aRt3nSGekF93AJwc1pIkhvErvpzOOV', '2018-10-16 06:12:29', '2018-10-16 06:12:29'),
(26, 1, 'F2tcItMDh4MAb6HeFdw9RE1Vo8IPvpRJ', '2018-10-17 00:06:18', '2018-10-17 00:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM USERS',
  `update_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM USERS',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE POST CATEGORY NAME',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE SLUG',
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `create_by`, `update_by`, `name`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'About Us', 'about-us', 1, '2018-03-23 04:52:51', '2018-10-05 23:36:36', NULL),
(2, 1, 1, 'Privacy Policy', 'privacy-policy', 1, '2018-03-23 04:52:51', '2018-10-05 23:36:26', NULL),
(3, 1, 1, 'testset est set w234234234', 'testset-est-set-w234234234', 1, '2018-05-01 04:20:29', '2018-05-01 04:20:37', '2018-05-01 04:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM CATEGORIES',
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM SUB-CATEGORIES',
  `vendor_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM VENDORS',
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`id`, `category_id`, `sub_category_id`, `vendor_id`, `first_name`, `last_name`, `email`, `mobile_no`, `phone_no`, `address_1`, `address_2`, `city_name`, `zip_code`, `state_name`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '1', '2', '12@gmail.com', '111111111111', '444444444444444', 'ahm', 'kargil', 'AHM', '320014', 'Gujrat', 'test demo', 1, NULL, NULL),
(186, 6, 1, 11, 'Bhavin', 'Codefarm', 'bhavin.codefarm@outlook.com', '123456789', NULL, 'Ahmdabad', NULL, NULL, NULL, NULL, 'test msg...', 1, '2018-04-18 05:13:21', '2018-04-18 05:13:21'),
(187, 6, 1, 11, '123', '123', 'bhavin.codefarm@gmail.com', '123123123123', NULL, '1231231', NULL, NULL, NULL, NULL, '123123123', 1, '2018-04-18 05:15:25', '2018-04-18 05:15:25'),
(188, 6, 1, 11, '12313', '123123', 'bhavin.codefarm@outlook.com', '123123123', NULL, '123123', NULL, NULL, NULL, NULL, '1231231231', 1, '2018-04-18 05:47:03', '2018-04-18 05:47:03'),
(189, 6, 1, 11, '123123', '123123', 'bhavin.codefarm@outlook.com', '123123123123', NULL, '123123', NULL, NULL, NULL, NULL, '1231233', 1, '2018-04-18 05:48:30', '2018-04-18 05:48:30'),
(190, 1, 1, NULL, 'test final cat', 'admin', 'bhavin.codefarm@outlook.com', '123123', NULL, '123123', NULL, NULL, NULL, NULL, '123123123', 1, '2018-04-18 06:09:12', '2018-04-18 06:09:12'),
(192, 1, 1, NULL, 'qweqwe', '123123', 'bhavin.codefark@outlook.com', '123123123', NULL, '123123123', NULL, NULL, NULL, NULL, '123123123', 1, '2018-04-18 06:10:36', '2018-04-18 06:10:36'),
(196, 6, 1, 11, '123123', '123123', 'bhavin.codefarm@outlook.com', '123123123', NULL, '12312312', NULL, NULL, NULL, NULL, '123123123123', 1, '2018-04-18 07:29:22', '2018-04-18 07:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribble_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `admin_email`, `contact_address`, `contact_phone`, `contact_text`, `facebook_url`, `twitter_url`, `linkedin_url`, `instagram_url`, `youtube_url`, `dribble_url`, `google_plus_url`, `created_at`, `updated_at`) VALUES
(1, 'laravelbhavin@gmail.com', '888 South Avenue Street, New York City.', '00+123-456-789', 'Find out how to prepare your book for an editor with these 4 writing tips! The editing process can be a wonderful opportunity for writers.', 'https://www.fb.com/', 'https://www.tw.com/', 'https://www.lk.com/', 'https://www.in.com/', 'https://www.yu.com/', 'https://www.dr.com/', 'https://www.gp.com/', NULL, '2018-05-01 13:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM CATEGORIES',
  `sub_category_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cover_id`, `category_id`, `sub_category_name`, `slug`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 1, 'The Spa Book', 'the-spa-book', 'The Spa Book', 1, '2018-03-20 08:12:42', '2018-04-05 05:59:13'),
(2, 20, 1, 'Practical Radiance', 'practical-radiance', 'Practical Radiance', 1, '2018-03-20 08:12:42', '2018-04-05 05:53:21'),
(3, 22, 1, 'Thyroid & Menopause', 'thyroid-menopause', 'Thyroid & Menopause', 0, '2018-03-20 08:12:42', '2018-04-05 05:58:15'),
(4, 23, 1, 'It\'s Not Just', 'its-not-just', 'It\'s Not Just', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:22'),
(5, 24, 2, 'A Practical Wedding', 'a-practical-wedding', 'A Practical Wedding', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:28'),
(6, 25, 5, 'Summer Festival', 'summer-festival', 'Summer Festival', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:34'),
(7, 26, 6, 'The Wedding Planner', 'the-wedding-planner', 'The Wedding Planner', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:42'),
(8, 27, 4, 'The Wedding Planner', 'the-wedding-planner', 'The Wedding Planner', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:54'),
(9, 28, 3, 'A Practical Wedding', 'a-practical-wedding', 'A Practical Wedding', 1, '2018-03-20 08:12:42', '2018-04-05 05:59:02'),
(10, 29, 2, 'Be Our Guest', 'be-our-guest', 'Be Our Guest', 1, '2018-03-20 08:12:42', '2018-04-05 05:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-05-17 05:22:48', '2018-05-17 05:22:48'),
(2, NULL, 'ip', '::1', '2018-05-17 05:22:48', '2018-05-17 05:22:48'),
(3, NULL, 'global', NULL, '2018-05-17 05:32:16', '2018-05-17 05:32:16'),
(4, NULL, 'ip', '::1', '2018-05-17 05:32:16', '2018-05-17 05:32:16'),
(5, NULL, 'global', NULL, '2018-05-17 06:01:47', '2018-05-17 06:01:47'),
(6, NULL, 'ip', '::1', '2018-05-17 06:01:47', '2018-05-17 06:01:47'),
(7, 7, 'user', NULL, '2018-05-17 06:01:47', '2018-05-17 06:01:47'),
(8, NULL, 'global', NULL, '2018-05-17 06:02:06', '2018-05-17 06:02:06'),
(9, NULL, 'ip', '::1', '2018-05-17 06:02:06', '2018-05-17 06:02:06'),
(10, 2, 'user', NULL, '2018-05-17 06:02:07', '2018-05-17 06:02:07'),
(11, NULL, 'global', NULL, '2018-05-17 06:02:16', '2018-05-17 06:02:16'),
(12, NULL, 'ip', '::1', '2018-05-17 06:02:16', '2018-05-17 06:02:16'),
(13, 2, 'user', NULL, '2018-05-17 06:02:16', '2018-05-17 06:02:16'),
(14, NULL, 'global', NULL, '2018-05-17 06:02:56', '2018-05-17 06:02:56'),
(15, NULL, 'ip', '::1', '2018-05-17 06:02:56', '2018-05-17 06:02:56'),
(16, 7, 'user', NULL, '2018-05-17 06:02:56', '2018-05-17 06:02:56'),
(17, NULL, 'global', NULL, '2018-05-17 06:11:35', '2018-05-17 06:11:35'),
(18, NULL, 'ip', '::1', '2018-05-17 06:11:35', '2018-05-17 06:11:35'),
(19, 7, 'user', NULL, '2018-05-17 06:11:35', '2018-05-17 06:11:35'),
(20, NULL, 'global', NULL, '2018-05-17 06:11:42', '2018-05-17 06:11:42'),
(21, NULL, 'ip', '::1', '2018-05-17 06:11:42', '2018-05-17 06:11:42'),
(22, 7, 'user', NULL, '2018-05-17 06:11:42', '2018-05-17 06:11:42'),
(23, NULL, 'global', NULL, '2018-05-17 23:28:28', '2018-05-17 23:28:28'),
(24, NULL, 'ip', '::1', '2018-05-17 23:28:28', '2018-05-17 23:28:28'),
(25, 8, 'user', NULL, '2018-05-17 23:28:28', '2018-05-17 23:28:28'),
(26, NULL, 'global', NULL, '2018-05-21 00:42:06', '2018-05-21 00:42:06'),
(27, NULL, 'ip', '::1', '2018-05-21 00:42:06', '2018-05-21 00:42:06'),
(28, 8, 'user', NULL, '2018-05-21 00:42:07', '2018-05-21 00:42:07'),
(29, NULL, 'global', NULL, '2018-05-24 06:47:18', '2018-05-24 06:47:18'),
(30, NULL, 'ip', '::1', '2018-05-24 06:47:18', '2018-05-24 06:47:18'),
(31, 2, 'user', NULL, '2018-05-24 06:47:18', '2018-05-24 06:47:18'),
(32, NULL, 'global', NULL, '2018-05-27 23:37:54', '2018-05-27 23:37:54'),
(33, NULL, 'ip', '::1', '2018-05-27 23:37:54', '2018-05-27 23:37:54'),
(34, 2, 'user', NULL, '2018-05-27 23:37:54', '2018-05-27 23:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_id` int(11) DEFAULT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci,
  `my_values` text COLLATE utf8mb4_unicode_ci,
  `my_skills` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `cover_id`, `about_me`, `my_values`, `my_skills`, `status`, `created_at`, `updated_at`) VALUES
(1, 'martin.wangor@gmail.com', '$2y$10$zJyESc8agrziXhtNvLF6J.7c7ewmkFYJi2nFzZ6X2QERTplUiA93i', '1', '2018-10-17 00:06:18', 'Martin', 'Wangor', NULL, 'Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at\r\n                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis\r\n                                facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa\r\n                                vitae lectus placerat ullamcorper pellentesque vel nisl.', 'Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.\r\n                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales,\r\n                                nulla libero ornare dolor.', 'Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.', 1, NULL, '2018-10-17 00:06:18'),
(2, 'admin@codefarm.com', 'a3b4f96ca617223d6b2e8df4fb4e8db5', NULL, NULL, 'Admin', 'Codefarm', NULL, 'Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at\r\n                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis\r\n                                facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa\r\n                                vitae lectus placerat ullamcorper pellentesque vel nisl.', 'Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.\r\n                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales,\r\n                                nulla libero ornare dolor.', 'Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.', 1, NULL, NULL),
(8, '123@gmail.com', 'a3b4f96ca617223d6b2e8df4fb4e8db5', NULL, NULL, 'Taylor 1', 'Leight', 57, 'Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at\r\n                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis\r\n                                facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa\r\n                                vitae lectus placerat ullamcorper pellentesque vel nisl.', 'Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.\r\n                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales,\r\n                                nulla libero ornare dolor.', 'Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.', 1, '2018-05-17 07:03:50', '2018-09-27 01:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM CATEGORIES',
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM SUB-CATEGORIES',
  `vendor_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `is_slider` smallint(6) DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `cover_id`, `category_id`, `sub_category_id`, `vendor_name`, `slug`, `address_1`, `address_2`, `city_name`, `zip_code`, `state_name`, `email`, `mobile_no`, `phone_no`, `summary`, `status`, `is_slider`, `created_at`, `updated_at`) VALUES
(1, 19, 1, 1, 'Home Maintenance For Dummies', 'home-maintenance-for-dummies', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-21 00:59:04', '2018-04-05 02:19:50'),
(2, 19, 1, 1, 'Home Comforts', 'home-comforts', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-21 00:59:04', '2018-04-19 00:21:44'),
(3, 19, 1, 1, 'Homeowner\'s Record Keeper', 'homeowners-record-keeper', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-21 00:59:04', '2018-04-05 02:50:23'),
(4, 19, 1, 1, 'Martha Stewart\'s Homekeeping Handbook', 'martha-stewarts-homekeeping-handbook', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-21 00:59:04', '2018-04-05 02:50:44'),
(5, 19, 1, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-21 00:59:04', '2018-04-05 01:19:45'),
(6, 19, 2, 1, 'Home Maintenance For Dummies 1', 'home-maintenance-for-dummies-1', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-21 00:59:04', '2018-04-05 02:51:09'),
(7, 19, 3, 1, 'Home Maintenance For Dummies 2', 'home-maintenance-for-dummies-2', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-21 00:59:04', '2018-04-05 02:51:09'),
(8, 19, 3, 1, 'Home Maintenance For Dummies 1', 'home-maintenance-for-dummies-1', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-21 00:59:04', '2018-04-05 02:51:09'),
(9, 19, 4, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-21 00:59:04', '2018-04-05 01:19:45'),
(10, 19, 5, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-21 00:59:04', '2018-04-05 01:19:45'),
(11, 19, 6, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-21 00:59:04', '2018-04-05 01:19:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_cover_id_index` (`cover_id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_links_page_id_index` (`page_id`),
  ADD KEY `footer_links_post_category_id_index` (`post_category_id`);

--
-- Indexes for table `inquiry_forms`
--
ALTER TABLE `inquiry_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_menu_id_index` (`parent_menu_id`),
  ADD KEY `menus_page_id_index` (`page_id`),
  ADD KEY `menus_post_category_id_index` (`post_category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_create_by_index` (`create_by`),
  ADD KEY `pages_update_by_index` (`update_by`),
  ADD KEY `pages_cover_id_index` (`cover_id`),
  ADD KEY `pages_post_category_id_index` (`post_category_id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_categories_create_by_index` (`create_by`),
  ADD KEY `post_categories_update_by_index` (`update_by`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_requests_category_id_index` (`category_id`),
  ADD KEY `service_requests_sub_category_id_index` (`sub_category_id`),
  ADD KEY `service_requests_vendor_id_index` (`vendor_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cover_id_index` (`cover_id`),
  ADD KEY `sub_categories_category_id_index` (`category_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendors_cover_id_index` (`cover_id`),
  ADD KEY `vendors_category_id_index` (`category_id`),
  ADD KEY `vendors_sub_category_id_index` (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inquiry_forms`
--
ALTER TABLE `inquiry_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_requests`
--
ALTER TABLE `service_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `post_categories_create_by_foreign` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `post_categories_update_by_foreign` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD CONSTRAINT `service_requests_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `service_requests_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `service_requests_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_categories_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `vendors_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `vendors_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
