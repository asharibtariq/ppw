/*
Navicat MySQL Data Transfer

Source Server         : Talha
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : ppw

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2022-06-20 09:52:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2022_06_14_033503_add_username', '2');
INSERT INTO `migrations` VALUES ('6', '2022_06_14_054909_create_news_table', '3');
INSERT INTO `migrations` VALUES ('7', '2022_06_14_091157_create_events_table', '4');
INSERT INTO `migrations` VALUES ('8', '2022_06_14_104242_create_contacts_table', '5');
INSERT INTO `migrations` VALUES ('9', '2022_06_15_081835_create_teams_table', '6');
INSERT INTO `migrations` VALUES ('10', '2022_06_17_061436_create_publications_table', '7');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_contact
-- ----------------------------
DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_contact
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_event
-- ----------------------------
DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE `tbl_event` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_event
-- ----------------------------
INSERT INTO `tbl_event` VALUES ('1', 'Lure Irure', 'Council of Islamic Ideology arranged an Ulema Conference', 'The conference was attended by a score of renowned religious scholars.\r\n                            The Minister of National Health Services was the Chief Guest at the Conference.', 'event1.jpg', '2736 Hinkle Deegan Lake Road', '06-Mar-1976', 'Y', '1', '1', '2022-06-14 10:08:14', '2022-06-14 10:08:14');
INSERT INTO `tbl_event` VALUES ('2', 'Lure Irure', 'Population Wing arranged a Training session', 'opulation Wing arranged a Training session for Public Private partnership of Doctors and Nurses on Post Partum Contraceptive use in ICT. DG met all participants and a healthy discussion on way forward.', 'event2.jpg', '2736 Hinkle Deegan Lake Road', '06-Mar-1976', 'Y', '1', '1', '2022-06-14 10:08:14', '2022-06-14 10:08:14');
INSERT INTO `tbl_event` VALUES ('3', 'Lure Irure', 'MPDSR National Meeting', 'The event was graced by Iftikhar Shallwani Special Secretary M/o MHSRC@Shallwani DG Sabina Durrani PPW, Dr Mohamed Afifi Regional Director, and health professionals from all provinces. Maternal mortality and ways to curtail its occurance was discussed.', 'event3.jpg', '2736 Hinkle Deegan Lake Road', '06-Mar-1976', 'Y', '1', '1', '2022-06-14 10:08:14', '2022-06-14 10:08:14');
INSERT INTO `tbl_event` VALUES ('4', 'Lure Irure', 'Health Services Academy & Accountability Group meeting', 'Health Services Academy arranged a Technical Advisory & Accountability Group meeting On #MNCH and #FP. It was attended by DG PPW and other health Officials including Dr Jamil.', 'event4.jpg', '2736 Hinkle Deegan Lake Road', '06-Mar-1976', 'Y', '1', '1', '2022-06-14 10:08:14', '2022-06-14 10:08:14');

-- ----------------------------
-- Table structure for tbl_news
-- ----------------------------
DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE `tbl_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_news
-- ----------------------------
INSERT INTO `tbl_news` VALUES ('1', 'Special Secretary Iftikhar Ali Shallwani\r\n                                called a meeting at the PPW Resource Centre', 'Meeting was held to discuss the current work done on Population. He called on the wing to get to the ground level of\r\n                            efforts by all stakeholders and gave some recommendations for a way forward @UNFPA.', 'Velit Nazu', 'news4.jpg', 'Y', '1', '1', '2022-06-14 07:26:14', '2022-06-14 07:26:14');
INSERT INTO `tbl_news` VALUES ('2', 'Tahir Mehmood Ashrafi ( All Pakistan Ulema Council of Pakistan) met with DG PPW', 'In the Population Program Wing of MNHSRC. Matters pertaining to the State and its policies regarding Family Planning were discussed. Tahir Mehmood Ashrafi said that Behbud-eAbadi important.', 'Velit Nazu', 'news7.jpg', 'Y', '1', '1', '2022-06-14 07:26:14', '2022-06-14 07:26:14');
INSERT INTO `tbl_news` VALUES ('3', 'Ministry of NHSRC planned a meeting under the chairmanship of DG', 'With the stakeholders of the Medical Tourism Initiative, to discuss a way forward. Focal persons from the\r\n                            Ministry of Interior and Foreign Affairs along with the PTDC Director gave reports on the initiative.', 'Velit Nazu', 'news3.jpg', 'Y', '1', '1', '2022-06-14 07:26:14', '2022-06-14 07:26:14');
INSERT INTO `tbl_news` VALUES ('4', 'DG PPW met with Dr Mohammed Afifi', 'Regional Advisor on Women Health. Ms Ellen Thom, Team Lead for Healthier Population through the Life Course and\r\n                            Dr Qudsia Uzma, Technical Officer', 'Velit Nazu', 'news1.jpg', 'Y', '1', '1', '2022-06-14 07:26:14', '2022-06-14 07:26:14');
INSERT INTO `tbl_news` VALUES ('5', 'Meeting with Dr. Qibla Ayaz (CII)', 'DG Population Program Wing and team met with Dr. Qibla Ayaz (CII) for guidance and cooperation on holding Ulema conference.', 'Velit Nazu', 'news5.jpg', 'Y', '1', '1', '2022-06-14 07:26:14', '2022-06-14 07:26:14');
INSERT INTO `tbl_news` VALUES ('6', 'A meeting with PPW partners from HSA UNFPA', 'Where a presentation was given on Midwifery in Pakistan and its plans of way forward. DG Dr. Sabina Durrani gave her suggestions and concerns.', 'Velit Nazu', 'news6.jpg', 'Y', '1', '1', '2022-06-14 07:26:14', '2022-06-14 07:26:14');

-- ----------------------------
-- Table structure for tbl_publication
-- ----------------------------
DROP TABLE IF EXISTS `tbl_publication`;
CREATE TABLE `tbl_publication` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_publication
-- ----------------------------
INSERT INTO `tbl_publication` VALUES ('1', 'Comparison of need and supply of syringes for therapeutic injections in Pakistan', 'Adnan Ahmad Khan, Momina Saleem, Huma Qureshi, Rashid Jooma, Ayesha Khan To determine the extent of shortfall in syringes by measuring the need from nationally validated sources and comparing it with position on the supply side. This was done in order to contribute to the ongoing national discussions that have focused on increasing syringe supply to curtail syringe reuse.', 'Abc', 'TEMP-PDF-Document.pdf', 'Y', '1', '1', '2022-06-17 06:40:43', '2022-06-17 09:02:15');
INSERT INTO `tbl_publication` VALUES ('2', 'Costs and Utilization of Public Sector Family Planning Services in Pakistan', 'Khadija Abbas, M.Sc., Adnan Ahmad Khan, MBBS, MS, Ayesha Khan, MBBS, MPH The public sector provides a third of family planning (FP) services in Pakistan. However, these services are viewed as being underutilized and expensive. We explored the utilization patterns and costs of FP services in the public sector.', 'someone', 'TEMP-PDF-Document.pdf', 'Y', '1', '1', '2022-06-17 06:45:52', '2022-06-17 07:15:05');
INSERT INTO `tbl_publication` VALUES ('3', 'Costs and Utilization of Public Sector Family Planning Services in Pakistan', 'Khadija Abbas, M.Sc., Adnan Ahmad Khan, MBBS, MS, Ayesha Khan, MBBS, MPH The public sector provides a third of family planning (FP) services in Pakistan. However, these services are viewed as being underutilized and expensive. We explored the utilization patterns and costs of FP services in the public sector.', 'aaa', 'TEMP-PDF-Document.pdf', 'Y', '1', '1', '2022-06-17 09:05:07', '2022-06-17 09:05:07');

-- ----------------------------
-- Table structure for tbl_team
-- ----------------------------
DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE `tbl_team` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tbl_team
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin', 'admin@mail.com', null, '$2y$10$.NoEgKW2G3nAu6lZ4UiXNuIpV2VtBJhu99r6gTT/l8t4PUX2xAV1q', null, '2022-06-13 07:34:45', '2022-06-13 07:34:45');
