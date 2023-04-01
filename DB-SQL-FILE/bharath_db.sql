-- --------------------------------------------------------
-- Host:                         192.168.7.11
-- Server version:               10.6.11-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bharathwaj_dectrdev_db
CREATE DATABASE IF NOT EXISTS `bharathwaj_dectrdev_db` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `bharathwaj_dectrdev_db`;

-- Dumping structure for table bharathwaj_dectrdev_db.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` longtext NOT NULL,
  `sub` longtext NOT NULL,
  `urmessage` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.contacts: ~7 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
REPLACE INTO `contacts` (`id`, `name`, `email`, `sub`, `urmessage`, `created_at`, `updated_at`) VALUES
	(1, 'Pavan', 'pavan@gmail.com', 'Wish to join', 'I need to join in your team.', '2023-03-13 07:37:04', '2023-03-13 07:37:04'),
	(2, 'Mokesh', 'mok@gmail.com', 'Join', 'I need to join in your team', '2023-03-13 07:38:33', '2023-03-13 07:38:33'),
	(3, 'Elwin', 'elwin@gmail.com', 'Wish to join', 'I need to join in your team for me knowledge improvement', '2023-03-13 07:40:45', '2023-03-13 07:40:45'),
	(4, 'Elwin', 'elwin@gmail.com', 'Wish to join', 'I need to join in your team for me knowledge improvement', '2023-03-13 07:41:23', '2023-03-13 07:41:23'),
	(5, 'Elwin', 'elwin@gmail.com', 'Wish to join', 'I need to join in your team for me knowledge improvement', '2023-03-13 07:41:28', '2023-03-13 07:41:28'),
	(6, 'Sangeetha', 'san@gmail.com', 'opinion', 'You doing a great job', '2023-03-13 07:43:58', '2023-03-13 07:43:58'),
	(7, 'Alan', 'alan@gmail.com', 'opinion', 'You doing a great job', '2023-03-22 11:22:29', '2023-03-22 11:22:29');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.cv_model2s
CREATE TABLE IF NOT EXISTS `cv_model2s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` longtext NOT NULL,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.cv_model2s: ~4 rows (approximately)
/*!40000 ALTER TABLE `cv_model2s` DISABLE KEYS */;
REPLACE INTO `cv_model2s` (`id`, `icon`, `title`, `body`, `created_at`, `updated_at`) VALUES
	(1, 'fa fa-laptop', 'Web design', 'Our approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience', '2023-03-11 11:20:10', '2023-03-11 11:25:51'),
	(2, 'fa fa-code', 'Web development', 'The web development process involves taking the graphical elements defined in the design process and coding them into a custom theme.', '2023-03-11 11:26:56', '2023-03-11 11:26:56'),
	(3, 'fa fa-search', 'SEO OPTIMIZATION', 'Go farther than you thought you could. With us you can go farther then ever before. Be in top results of searches.', '2023-03-11 11:29:19', '2023-03-11 11:29:19'),
	(4, 'fa fa-twitter', 'SOCIAL MEDIA', 'It\'s important to keep your brand consistent and recognizable across', '2023-03-11 17:21:23', '2023-03-11 17:21:24');
/*!40000 ALTER TABLE `cv_model2s` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.followers
CREATE TABLE IF NOT EXISTS `followers` (
  `user_id` bigint(20) unsigned NOT NULL,
  `following_user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`,`following_user_id`),
  KEY `followers_following_user_id_foreign` (`following_user_id`),
  CONSTRAINT `followers_following_user_id_foreign` FOREIGN KEY (`following_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.followers: ~9 rows (approximately)
/*!40000 ALTER TABLE `followers` DISABLE KEYS */;
REPLACE INTO `followers` (`user_id`, `following_user_id`, `created_at`, `updated_at`) VALUES
	(1, 6, '2023-03-20 14:39:54', '2023-03-20 14:39:54'),
	(1, 7, '2023-03-22 11:14:21', '2023-03-22 11:14:21'),
	(1, 9, '2023-03-21 16:28:13', '2023-03-21 16:28:13'),
	(6, 1, '2023-03-18 10:10:51', '2023-03-18 10:10:53'),
	(6, 7, '2023-03-20 11:04:32', '2023-03-18 10:11:07'),
	(7, 1, '2023-03-20 11:04:35', '2023-03-18 10:10:31'),
	(7, 6, '2023-03-20 11:04:38', '2023-03-18 10:10:07'),
	(9, 8, '2023-03-20 14:15:52', '2023-03-20 14:15:52'),
	(21, 6, '2023-03-21 10:11:50', '2023-03-21 10:11:50');
/*!40000 ALTER TABLE `followers` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.likes
CREATE TABLE IF NOT EXISTS `likes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `tweet_id` bigint(20) unsigned NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_user_id_foreign` (`user_id`),
  KEY `likes_tweet_id_foreign` (`tweet_id`),
  CONSTRAINT `likes_tweet_id_foreign` FOREIGN KEY (`tweet_id`) REFERENCES `tweets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.likes: ~18 rows (approximately)
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
REPLACE INTO `likes` (`id`, `user_id`, `tweet_id`, `liked`, `created_at`, `updated_at`) VALUES
	(2, 1, 22, 0, '2023-03-21 11:52:03', '2023-03-22 04:24:26'),
	(3, 7, 22, 0, '2023-03-21 11:57:31', '2023-03-21 11:57:32'),
	(4, 1, 23, 1, '2023-03-21 08:01:04', '2023-03-22 03:53:41'),
	(5, 1, 12, 1, '2023-03-21 08:14:04', '2023-03-21 08:14:04'),
	(6, 1, 11, 1, '2023-03-21 08:40:56', '2023-03-22 05:44:28'),
	(7, 1, 10, 1, '2023-03-21 08:41:35', '2023-03-21 08:41:35'),
	(8, 7, 11, 1, '2023-03-21 08:42:16', '2023-03-21 08:42:16'),
	(9, 9, 26, 1, '2023-03-21 10:57:56', '2023-03-21 10:57:56'),
	(10, 1, 26, 1, '2023-03-21 10:58:17', '2023-03-22 04:03:27'),
	(11, 1, 24, 0, '2023-03-21 12:10:36', '2023-03-22 04:16:49'),
	(12, 9, 24, 1, '2023-03-21 12:13:57', '2023-03-21 12:13:57'),
	(13, 1, 19, 1, '2023-03-22 04:15:43', '2023-03-22 04:15:43'),
	(14, 1, 21, 1, '2023-03-22 04:16:37', '2023-03-22 04:16:37'),
	(15, 1, 9, 1, '2023-03-22 04:39:33', '2023-03-22 04:39:33'),
	(16, 1, 4, 1, '2023-03-22 04:39:39', '2023-03-22 04:39:39'),
	(17, 1, 3, 1, '2023-03-22 04:39:43', '2023-03-22 04:39:43'),
	(18, 1, 2, 1, '2023-03-22 04:39:50', '2023-03-22 04:39:50'),
	(19, 1, 1, 1, '2023-03-22 04:39:55', '2023-03-22 04:39:55');
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(10, '2014_10_12_100000_create_password_resets_table', 1),
	(11, '2019_08_19_000000_create_failed_jobs_table', 1),
	(12, '2023_03_17_052728_create_tweets_table', 1),
	(13, '2023_03_17_085856_create_followers_table', 2),
	(14, '2023_03_18_083840_alter_table_add_onecolumn_in_users', 3),
	(15, '2023_03_18_084045_alter_table_add_twocolumn_in_users', 3),
	(16, '2014_10_12_000000_create_users_table', 4),
	(18, '2023_03_21_043537_create_likes_table', 5),
	(19, '2023_03_11_071345_create_cv_model2s_table', 6),
	(20, '2023_03_13_071911_create_contacts_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.tweets
CREATE TABLE IF NOT EXISTS `tweets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tweets_user_id_foreign` (`user_id`),
  CONSTRAINT `tweets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.tweets: ~23 rows (approximately)
/*!40000 ALTER TABLE `tweets` DISABLE KEYS */;
REPLACE INTO `tweets` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Tamil cinema has many under 35 heroes, but not  Stars ⭐, who will be the next BIG STAR according to you?!', '2023-03-17 08:30:38', '2023-03-17 08:30:38'),
	(2, 1, 'We are as excited as you are, with all your support & love we are happy to present you the title of #Thalapathy67 ❤️\r\n\r\n- Team #LEO ♥️', '2023-03-17 08:31:17', '2023-03-17 08:31:17'),
	(3, 1, 'Thank You wouldn’t be suffice, still a billion Thanx for all the hearty wishes and all the Mashups, Video edits, Fan pages. It makes me more responsible and I would put my heart and soul in entertaining people. Thank you all, Lots of Love🙏🏻❤️😘', '2023-03-17 08:31:41', '2023-03-17 08:31:41'),
	(4, 1, 'Wishing you a fantastic and blockbuster year our dearest loving Thambi \r\n@Dir_Lokesh\r\n \r\nHappy birthday to you. \r\nYou have been really bloody sweet to us by owning us like your own blood brothers! God bless you. \r\nவாழ்க நீ பல்லாண்டு!', '2023-03-17 08:31:54', '2023-03-17 08:31:54'),
	(5, 8, 'பிரேசிலில் என்ஜின் செயல் இழந்ததால்  பாராசூட் மூலம் தரை இறக்கப்பட்ட குட்டி விமானம்...! #Brazil | #Parachute | #Pilot | #Plane', '2023-03-17 08:32:44', '2023-03-17 08:32:44'),
	(6, 3, '\'\'வடகொரிய அணு ஆயுதம் 33 நிமிடங்களில் அமெரிக்காவைத் அழிக்கும்.?\'\' - சீன நிபுணர்கள் கருத்து..! #America | #NorthKorea | #China | #Nuclearweapon | #Scientist', '2023-03-17 08:32:44', '2023-03-17 08:32:44'),
	(7, 4, 'ரஷ்ய அதிபர் புதினுக்கு எதிராக கைது வாரண்ட் பிறப்பித்தது சர்வதேச நீதிமன்றம் உத்தரவு...! #Russia | #Arrest | #VladimirPutin | #InternationalCriminalCourt | #Ukraine', '2023-03-17 08:32:44', '2023-03-17 08:32:44'),
	(8, 5, 'கூட்டணியில் அதிமுக தான் என்ஜின்" எந்த பெட்டியை சேர்க்க வேண்டும், நீக்க வேண்டும் என்பது, எங்களுக்குத் தெரியும் – ஜெயக்குமார்', '2023-03-17 08:32:44', '2023-03-17 08:32:44'),
	(9, 1, '#CinemaUpdate | இந்திய படங்கள் ஆஸ்கர் வெல்ல ஏ.ஆர்.ரஹ்மான் சொல்லும் யோசனை!\r\n\r\n#SunNews | #Oscars | #ARRahman | \r\n@arrahman', '2023-03-17 09:55:48', '2023-03-17 09:55:48'),
	(10, 6, 'Discover the divinity at the ancient Matangeshwar Temple in #Khajuraho. A living symbol of Chandela dynasty\'s divine faith, this temple offers a journey through history & spirituality.', '2023-03-17 11:53:53', '2023-03-17 11:53:53'),
	(11, 7, 'We are ready🏻 and very excited to meet you all in theatres and welcome you into the world of #PonnienSelvanOnApril28 🦢', '2023-03-17 11:54:56', '2023-03-17 11:54:56'),
	(12, 1, 'We, the CITians, are happy to announce that SUN NEWS covered the Inauguration of our AICTE IDEA LAB! 🎉👏\r\n\r\nA big shout out to PROF.T.G.SITHARAM, Chairman, AICTE for making this possible! 🙌\r\n\r\nThank you for your unwavering support and commitment to prom', '2023-03-17 12:20:08', '2023-03-17 12:20:08'),
	(13, 8, ' Jealous of \r\n@Suriya_offl\r\n\'s handsome looks in #Suriya42, Vijay tried something different by using a wig but ended up looking like an old diabetic patient.', '2023-03-18 07:27:51', '2023-03-18 07:27:51'),
	(14, 8, '"Databases: Switching from relational to document models, an introduction" Meetup with Adamo Tonete - NoSQL Database expert, worked at MongoDB, Percona, PingCAP. \r\nWed, March 22, 12 PM EST. Register here -> \r\n', '2023-03-18 07:28:23', '2023-03-18 07:28:23'),
	(15, 8, 'Glad to hear former CSIS head, Richard Fadden, on CTV News calling for an investigation into dangerous disinformation spread by right wing websites such as True North, Sun News and Canada Proud boys.', '2023-03-18 07:28:45', '2023-03-18 07:28:45'),
	(16, 8, ' திருவனந்தபுரத்தில் இருந்து ஹெலிகாப்டர் மூலம் கன்னியாகுமரி வந்தடைந்தார் குடியரசுத் தலைவர் திரௌபதி முர்மு', '2023-03-18 07:29:13', '2023-03-18 07:29:13'),
	(17, 8, '● போதுமான காய்கறிகள் மற்றும் பழங்கள் உணவில் சேர்த்துக் கொள்ளாத 98.4% பேருக்கும் இருதய நோய் ஏற்படலாம் என தகவல்!', '2023-03-18 07:29:25', '2023-03-18 07:29:25'),
	(18, 6, '#WATCH | “அந்த காலத்தில் புரட்சியாளர்கள் எல்லாம் நெற்றியில் விபூதி வைத்து இருப்பார்கள்; இந்த தலைமுறைக்கு அதை எடுத்து சொல்ல வேண்டியுள்ளது”', '2023-03-18 07:30:15', '2023-03-18 07:30:15'),
	(19, 6, 'WBFF Fox45\'s newsroom mantra seems to be, .', '2023-03-18 07:30:31', '2023-03-18 07:30:31'),
	(20, 6, 'அதிமுகவுடனான கூட்டணியை முறித்துக்கொண்டு பாஜக தனித்துப் போட்டியிட வேண்டும் என அண்ணாமலை திடீரென போர்க்கொடி தூக்கியிருப்பது...', '2023-03-18 07:30:46', '2023-03-18 07:30:46'),
	(21, 6, 'மாலை 3 மணி தலைப்புச் செய்திகள்!', '2023-03-18 07:31:00', '2023-03-18 07:31:00'),
	(22, 6, 'பல்கலைக் துணைவேந்தரான சுதா சேஷையனின் பதவிக்காலம் கடந்த டிசம்பர் மாதம் 30ம் தேதியுடன் முடிவடைந்த நிலையில் புதிய துணைவேந்தரைத் தேர்வு செய்ய அறிவிப்பாணை!', '2023-03-18 07:31:23', '2023-03-18 07:31:23'),
	(23, 1, 'ஹெல்மெட் அணியாமல் வந்ததற்கு அபராத தொகையை கட்டினால் தான் வண்டியை தரமுடியும் என்று கூறிய போலீசாரிடம் வாக்குவாதத்தில் ஈடுபட்ட இளைஞர்.\r\n#Salem | #Helmet | #TrafficRules | #Fine | #Youngster | #Police', '2023-03-18 10:59:02', '2023-03-18 10:59:02'),
	(24, 9, 'hi', '2023-03-20 06:02:23', '2023-03-20 06:02:23'),
	(25, 21, 'HI this is new user', '2023-03-21 04:38:38', '2023-03-21 04:38:38'),
	(26, 9, 'லவ்தீக வாழ்க்கையால் ஜெயிலில் கம்பி எண்ணும் பாவமன்னிப்பு பாதிரியார்..! ல்தகா சைஆவால் சீரழிந்ததாக தகவல் #Kanyakumari | #SexualAbuse | #Police | #Arrested', '2023-03-21 10:57:49', '2023-03-21 10:57:49');
/*!40000 ALTER TABLE `tweets` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userpic` longtext DEFAULT NULL,
  `userbgpic` longtext DEFAULT NULL,
  `userdesc` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bharathwaj_dectrdev_db.users: ~19 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `username`, `name`, `userpic`, `userbgpic`, `userdesc`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Himalayan_Rider12', 'T P Bharath Waj', 'userpics/zQJw88VsbJRXazb0R19QPvJqHr7Nd5DGbm83J6D7.jpg', 'userbgpics/c3YmewUjIhwpXGh3c6aM8UvHQJKshBRbVYE2aHMD.jpg', 'Success? I don’t know what that word means. I’m happy. But success goes back to what in somebody’s eyes success means. For me, success is inner peace.', 'Bharathwaj9600@gmail.com', NULL, '$2y$10$lctl21dOLvaG0o6TCzuAx.rRyh17EseTpzWslzclSI/RKGYA1COA2', NULL, '2023-03-20 05:24:40', '2023-03-22 05:32:43'),
	(6, 'roseperk_07', 'Alan Rose Perk', 'userpics/LHdAeHHL5PVbEyfqmIHGScDag1HEgF1f3qhP6cBM.jpg', NULL, '', 'alan@gmail.com', NULL, '$2y$10$vjGvywXESxRg8gT3n9gYr.CZX9omnlRnAzJbzdKKoybH68tse1OJ6', NULL, '2023-03-20 05:31:02', '2023-03-20 08:33:48'),
	(7, '__.dharani.__', 'Dharani', 'userpics/ZyNQSWEKbOe3EdSFb7hUKQBkC7mYiJHtsk3elK8N.jpg', NULL, '', 'dharu@gmail.com', NULL, '$2y$10$F9xjKOkAJpQsYVhTX0/lMOyrvzV0SMz8/5sBh2meGAW4ou/XoE5vS', NULL, '2023-03-20 05:32:18', '2023-03-20 09:06:44'),
	(8, 'sam_cuteii', 'Samantha', 'userpics/oGpsGNAAngZtt4ShpAplaM7MrjZ8fLE7DJMSkHQi.jpg', NULL, '', 'sam@gmail.com', NULL, '$2y$10$vjGvywXESxRg8gT3n9gYr.CZX9omnlRnAzJbzdKKoybH68tse1OJ6', NULL, '2023-03-20 05:34:14', '2023-03-20 08:36:34'),
	(9, 'mokesh_Rockers', 'Mokesh', 'userpics/bhdTJkp0LCeM3I9mRZxuWpuyS0Ijvgx79oR2v20F.jpg', NULL, '', 'mok@gmail.com', NULL, '$2y$10$vjGvywXESxRg8gT3n9gYr.CZX9omnlRnAzJbzdKKoybH68tse1OJ6', NULL, '2023-03-20 05:53:15', '2023-03-20 08:44:48'),
	(10, 'pavan', 'Pavan Kumar', 'userpics/no_user.png', NULL, '', 'pavan@gmail.com', NULL, '$2y$10$vjGvywXESxRg8gT3n9gYr.CZX9omnlRnAzJbzdKKoybH68tse1OJ6', NULL, '2023-03-20 08:52:20', '2023-03-20 09:05:07'),
	(11, 'dandre79', 'Jevon Watsica', 'userpics/no_user.png', NULL, '', 'kaley.jenkins@example.com', '2023-03-20 09:32:43', '$2y$10$EAKeGJShNWdxMP7TJrKHju6twsnI5shzs6yPzOU3AkjgOnBAfQc0u', '8yQGam6Lbi', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(12, 'ritchie.maritza', 'Tavares Reichel', 'userpics/no_user.png', NULL, '', 'cbarrows@example.net', '2023-03-20 09:32:43', '$2y$10$dBcBDzKMyU64YNKK91HegOFO6OakWsvOYg0uau06x9ArhefnHDXQS', 'kY8Wa5r6W2', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(13, 'bettie33', 'Darron Feil I', 'userpics/no_user.png', NULL, '', 'jerel40@example.org', '2023-03-20 09:32:43', '$2y$10$iLhtCFztj931.ymKxtyg2eUjXs9hWQqorvJDnTfyPmaZu5jmelGsS', 'oQktpuufbQ', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(14, 'smitham.lucienne', 'Christa Aufderhar', 'userpics/no_user.png', NULL, '', 'sipes.columbus@example.net', '2023-03-20 09:32:43', '$2y$10$Y8kP2LhHuzr53ZzhjwFwueW8qj2LEcVve6TAfaW.d8eFATvml2PIK', 'TJsnvPYwp9', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(15, 'mercedes.conn', 'Samson Bergstrom', 'userpics/no_user.png', NULL, '', 'reymundo.tromp@example.net', '2023-03-20 09:32:43', '$2y$10$6g.t5oHq/iFB/a8bUcnoC.vGFHPBQDgEVmJLXwH9xbv5AnurLwl7i', 'x3Mqr7OpKs', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(16, 'senger.mae', 'Norma Kling I', 'userpics/no_user.png', NULL, '', 'chansen@example.org', '2023-03-20 09:32:43', '$2y$10$dY6rbM3TQy2lJuBGKH8/QOVZ2tuiHD9bTSDPPR3qdzkvbmsfN63Ri', 'Qoj6zgAOQI', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(17, 'electa.schamberger', 'Miss Rebeka Zieme V', 'userpics/no_user.png', NULL, '', 'pgreen@example.org', '2023-03-20 09:32:43', '$2y$10$5EkvjXTY.yf08QsozzbDtuSCu/hv/AbybY9BYI/PAe.4a8wtD0fiO', 's6DEBVzSLi', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(18, 'thelma.christiansen', 'Ebony Sanford', 'userpics/no_user.png', NULL, '', 'hadley58@example.org', '2023-03-20 09:32:44', '$2y$10$BqPCmQyL0yCHZWmZmuVyC.OVRsq6MQz0NP8DrdMoCLMcEGlhxD6EG', 'c4sbw9PsBw', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(19, 'eddie.miller', 'Adriel Skiles', 'userpics/no_user.png', NULL, '', 'freida26@example.com', '2023-03-20 09:32:44', '$2y$10$WLPFjMltv0qARzyadJd0Te9i8xpJyssr/5qy97n6lm3hM/7gkv0E2', 'PxMFTLzSRG', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(20, 'muhammad.farrell', 'Dr. Maryse Schroeder', 'userpics/no_user.png', NULL, '', 'mokeefe@example.com', '2023-03-20 09:32:44', '$2y$10$x/FeP2y/Se8jIMByG3PteOd3BNtf0kdT90Fg6SH0yOo9kT1pRJy5S', '3yOwCVXzRq', '2023-03-20 09:32:44', '2023-03-20 09:32:44'),
	(21, 'Ram_ride', 'Ram Kumar', 'userpics/ODLJTIEQj3GIcHuCuiYIgP21iMV0Z4Y0XUfyxRPC.jpg', NULL, '', 'ram@gmail.com', NULL, '$2y$10$IztFuaQJSOtECmF.qU41B.ySvdx7oN1cMPDAOEXHZxnUsUuq6xHH.', NULL, '2023-03-21 04:37:50', '2023-03-21 04:41:24'),
	(22, 'Giri_janu', 'Giridharan', NULL, NULL, '', 'giri@gmail.com', NULL, '$2y$10$IztFuaQJSOtECmF.qU41B.ySvdx7oN1cMPDAOEXHZxnUsUuq6xHH.', NULL, '2023-03-21 08:32:38', '2023-03-21 08:32:38'),
	(23, 'Prethi_Hr', 'Preethi', NULL, NULL, '', 'preethi@gmail.com', NULL, '$2y$10$IztFuaQJSOtECmF.qU41B.ySvdx7oN1cMPDAOEXHZxnUsUuq6xHH.', NULL, '2023-03-21 10:48:05', '2023-03-21 10:48:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.wb_comments
CREATE TABLE IF NOT EXISTS `wb_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comments` longtext DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `is_aprove` int(10) DEFAULT 0,
  `word_id` int(10) DEFAULT NULL,
  `c_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_wb_comments_wb_users` (`user_id`),
  KEY `FK_wb_comments_wb_words` (`word_id`),
  CONSTRAINT `FK_wb_comments_wb_users` FOREIGN KEY (`user_id`) REFERENCES `wb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_wb_comments_wb_words` FOREIGN KEY (`word_id`) REFERENCES `wb_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table bharathwaj_dectrdev_db.wb_comments: ~13 rows (approximately)
/*!40000 ALTER TABLE `wb_comments` DISABLE KEYS */;
REPLACE INTO `wb_comments` (`id`, `comments`, `user_id`, `is_aprove`, `word_id`, `c_time`) VALUES
	(1, 'hiiii', 8, 1, 1, '2023-03-01 10:25:29'),
	(2, 'hidfghdf', 5, 1, 1, '2023-03-01 10:25:30'),
	(8, 'dghdfgdfgd', 4, 0, 1, '2023-03-01 10:25:31'),
	(9, 'dfvgdfsgdsgds', 4, 0, 1, '2023-03-01 10:19:58'),
	(10, 'dfvgdfsgdsgds', 4, 1, 1, '2023-03-01 10:24:10'),
	(14, 'fsdgsgfsbww', 10, 0, 1, '2023-03-01 10:45:19'),
	(15, 'fsdgsgfsbww', 10, 1, 1, '2023-03-01 10:46:14'),
	(16, 'gfhdfnjrfj drmum n', 10, 0, 1, '2023-03-01 10:46:34'),
	(17, 'gfhdfnjrfj drmum n', 10, 0, 1, '2023-03-01 10:49:10'),
	(18, 'gfhdfnjrfj drmum n', 10, 1, 2, '2023-03-01 10:50:44'),
	(20, 'gfhdfnjrfj drmum n', 10, 0, 1, '2023-03-01 10:52:15'),
	(21, 'gfhdfnjrfj drmum n', 10, 0, 1, '2023-03-01 10:52:16'),
	(29, 'jk\r\n', 2, 0, 1, '2023-03-01 16:56:57');
/*!40000 ALTER TABLE `wb_comments` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.wb_users
CREATE TABLE IF NOT EXISTS `wb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `e_path` varchar(100) DEFAULT '0',
  `r_path` varchar(100) DEFAULT '0',
  `is_admin` varchar(100) DEFAULT 'NA',
  `u_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table bharathwaj_dectrdev_db.wb_users: ~12 rows (approximately)
/*!40000 ALTER TABLE `wb_users` DISABLE KEYS */;
REPLACE INTO `wb_users` (`id`, `username`, `email`, `password`, `e_path`, `r_path`, `is_admin`, `u_time`) VALUES
	(1, 'Bharath', 'admin@gmail.com', '25df35de87aa441b88f22a6c2a830a17', '0', '0', 'A', '2023-03-01 10:25:12'),
	(2, 'Mokesh', 'mokesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:14'),
	(3, 'Pavan', 'pavan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:16'),
	(4, 'Elwin', 'elwin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:16'),
	(5, 'karthi', 'karthi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:17'),
	(6, 'Sangeetha', 'san@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:18'),
	(7, 'Sathish', 'sathish@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:20'),
	(8, 'Banu Priya', 'banu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:19'),
	(9, 'Abinesh', 'abi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-01 10:25:21'),
	(10, 'Dharani', 'dharu@gmail.com', '25df35de87aa441b88f22a6c2a830a17', '0', '0', 'NA', '2023-03-01 10:24:36'),
	(11, 'Shabana', 'shabana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-02 11:19:58'),
	(12, 'Dinesh', 'dinesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '0', 'NA', '2023-03-02 11:20:48');
/*!40000 ALTER TABLE `wb_users` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.wb_words
CREATE TABLE IF NOT EXISTS `wb_words` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `is_approve` varchar(50) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `w_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wb_bind` (`user_id`),
  CONSTRAINT `wb_bind` FOREIGN KEY (`user_id`) REFERENCES `wb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table bharathwaj_dectrdev_db.wb_words: ~27 rows (approximately)
/*!40000 ALTER TABLE `wb_words` DISABLE KEYS */;
REPLACE INTO `wb_words` (`id`, `word`, `image`, `is_approve`, `user_id`, `w_time`) VALUES
	(1, 'like', 'assets/img/party.jpg', '1', 2, '2023-03-01 10:25:39'),
	(2, 'Power', 'assets/img/power.jpg', '1', 2, '2023-03-01 10:25:40'),
	(3, 'lazy', 'assets/img/download (2).jpg', '1', 10, '2023-03-01 14:07:42'),
	(4, 'Busy', 'assets/img/bc.jpg', '1', 10, '2023-03-01 14:07:54'),
	(5, 'small', 'assets/img/download.jpg', '1', 10, '2023-03-01 14:09:32'),
	(6, 'Big', 'assets/img/download (1).jpg', '1', 10, '2023-03-01 14:10:22'),
	(8, 'demo', 'assets/img/sno and anto.jpg', '0', 10, '2023-03-02 13:44:25'),
	(10, 'dssdfs', 'assets/img/images.png', '0', 10, '2023-03-02 13:46:28'),
	(11, 'strength', 'assets/img/strength.jpg', '1', 10, '2023-03-02 13:57:46'),
	(13, ' indolent', 'assets/img/lazy.jpg', '1', 10, '2023-03-02 14:03:34'),
	(16, 'Similar', 'assets/img/similar.png', '1', 10, '2023-03-03 10:03:01'),
	(17, 'dislike', 'assets/img/dislike.jpg', '1', 10, '2023-03-03 10:03:25'),
	(18, 'potential', 'assets/img/potential.jpg', '1', 10, '2023-03-03 14:17:52'),
	(19, 'weakness', 'assets/img/weakness.jpg', '1', 10, '2023-03-03 14:18:09'),
	(20, 'inattentive', 'assets/img/inattentive.jpg', '1', 10, '2023-03-03 14:20:59'),
	(21, 'energetic', 'assets/img/energetic.jpg', '1', 10, '2023-03-03 14:21:53'),
	(22, 'fully-engaged', 'assets/img/fully_engaged.jpg', '1', 10, '2023-03-03 14:25:21'),
	(23, 'quit', 'assets/img/quit.png', '1', 10, '2023-03-03 14:26:29'),
	(24, ' little', 'assets/img/little.jpg', '1', 10, '2023-03-03 14:29:30'),
	(25, 'large', 'assets/img/big.jpg', '1', 10, '2023-03-03 14:33:21'),
	(26, 'energy', 'assets/img/energy.jpg', '1', 10, '2023-03-03 14:39:34'),
	(27, 'disability', 'assets/img/disability.jpg', '1', 10, '2023-03-03 14:43:29'),
	(28, 'lack', 'assets/img/lack.jpg', '1', 10, '2023-03-03 14:45:32'),
	(29, 'force', 'assets/img/force.png', '1', 10, '2023-03-03 14:46:29'),
	(30, 'effort', 'assets/img/effort.jpg', '1', 8, '2023-03-03 15:05:25'),
	(31, 'gently', 'assets/img/gently.jpg', '1', 8, '2023-03-03 15:06:52'),
	(36, 'hat', 'assets/img/no_image.jpg', '0', 10, '2023-03-04 09:53:12');
/*!40000 ALTER TABLE `wb_words` ENABLE KEYS */;

-- Dumping structure for table bharathwaj_dectrdev_db.wb_words_data
CREATE TABLE IF NOT EXISTS `wb_words_data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `word_id` int(11) DEFAULT NULL,
  `is_synonym` int(10) DEFAULT 0,
  `is_antonym` int(10) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `wb-bind2` (`word_id`),
  KEY `FK_wb_words_data_wb_words` (`parent_id`),
  CONSTRAINT `FK_wb_words_data_wb_words` FOREIGN KEY (`parent_id`) REFERENCES `wb_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wb-bind2` FOREIGN KEY (`word_id`) REFERENCES `wb_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table bharathwaj_dectrdev_db.wb_words_data: ~16 rows (approximately)
/*!40000 ALTER TABLE `wb_words_data` DISABLE KEYS */;
REPLACE INTO `wb_words_data` (`id`, `parent_id`, `word_id`, `is_synonym`, `is_antonym`) VALUES
	(1, 1, 16, 1, 0),
	(2, 1, 17, 0, 1),
	(3, 2, 18, 1, 0),
	(4, 2, 19, 0, 1),
	(5, 3, 20, 1, 0),
	(6, 3, 21, 0, 1),
	(7, 4, 22, 1, 0),
	(8, 4, 23, 0, 1),
	(9, 5, 24, 1, 0),
	(10, 5, 25, 0, 1),
	(11, 11, 26, 1, 0),
	(12, 11, 27, 0, 1),
	(13, 26, 28, 0, 1),
	(14, 26, 29, 1, 0),
	(15, 29, 30, 1, 0),
	(16, 29, 31, 0, 1);
/*!40000 ALTER TABLE `wb_words_data` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
