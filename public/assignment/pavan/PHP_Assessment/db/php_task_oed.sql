-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table php_task.oed_comments
CREATE TABLE IF NOT EXISTS `oed_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_approved` tinyint(4) NOT NULL DEFAULT '0',
  `word_id` int(11) NOT NULL,
  `updated_time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- Dumping data for table php_task.oed_comments: ~14 rows (approximately)
/*!40000 ALTER TABLE `oed_comments` DISABLE KEYS */;
INSERT INTO `oed_comments` (`id`, `comments`, `user_id`, `is_approved`, `word_id`, `updated_time`) VALUES
	(28, 'hello', 16, 1, 90, '2023-03-03 05:46:32'),
	(29, 'Hi', 16, 0, 90, '2023-03-03 05:46:35'),
	(30, 'Yeah', 15, 1, 92, '2023-03-03 05:46:51'),
	(31, 'Great', 15, 0, 92, '2023-03-03 05:46:55'),
	(32, 'Good', 15, 0, 92, '2023-03-03 05:47:02'),
	(33, 'Nice', 17, 0, 96, '2023-03-03 05:47:18'),
	(34, 'Wow', 17, 0, 96, '2023-03-03 05:47:22'),
	(35, 'Well infomative', 17, 0, 96, '2023-03-03 05:47:34'),
	(37, 'nice', 15, 1, 90, '2023-03-03 06:14:04'),
	(40, 'hello', 16, 0, 90, '2023-03-03 07:53:28'),
	(41, 'hello', 16, 0, 90, '2023-03-03 07:54:02'),
	(42, 'hello', 16, 1, 90, '2023-03-03 07:54:14'),
	(43, 'hi', 15, 0, 90, '2023-03-03 09:21:11'),
	(44, 'okay\r\n\r\n', 15, 0, 90, '2023-03-04 04:20:28'),
	(46, 'hello', 15, 0, 105, '2023-03-04 05:09:31'),
	(47, 'hello', 15, 0, 109, '2023-03-04 05:18:46'),
	(48, 'hello', 15, 0, 109, '2023-03-04 05:19:37'),
	(49, 'hello', 15, 0, 109, '2023-03-04 05:19:38'),
	(50, 'hello', 15, 0, 109, '2023-03-04 05:19:38'),
	(51, 'hello', 15, 0, 109, '2023-03-04 05:20:24'),
	(52, 'hello', 15, 0, 109, '2023-03-04 05:20:24'),
	(53, 'hello', 15, 0, 109, '2023-03-04 05:20:24'),
	(54, 'hello', 15, 0, 109, '2023-03-04 05:20:24');
/*!40000 ALTER TABLE `oed_comments` ENABLE KEYS */;

-- Dumping structure for table php_task.oed_users
CREATE TABLE IF NOT EXISTS `oed_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entrypath` varchar(255) DEFAULT NULL,
  `registerpath` varchar(255) DEFAULT NULL,
  `is_admin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table php_task.oed_users: ~3 rows (approximately)
/*!40000 ALTER TABLE `oed_users` DISABLE KEYS */;
INSERT INTO `oed_users` (`id`, `username`, `email`, `password`, `entrypath`, `registerpath`, `is_admin`) VALUES
	(1, 'pavan', 'pavan@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, '1'),
	(15, 'mokesh', 'mokesh@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, '0'),
	(16, 'bharath', 'bharath@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, '0'),
	(19, 'elwin', 'elwin@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, '0');
/*!40000 ALTER TABLE `oed_users` ENABLE KEYS */;

-- Dumping structure for table php_task.oed_words
CREATE TABLE IF NOT EXISTS `oed_words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `is_approved` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `word` (`word`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `oed_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

-- Dumping data for table php_task.oed_words: ~5 rows (approximately)
/*!40000 ALTER TABLE `oed_words` DISABLE KEYS */;
INSERT INTO `oed_words` (`id`, `word`, `image`, `is_approved`, `user_id`) VALUES
	(90, 'Power', _binary 0x706F7765722E6A7067, '1', 15),
	(92, 'strong', _binary 0x7374726F6E672E6A7067, '1', 15),
	(105, 'weak', _binary 0x7765616B2E6A7067, '1', 15),
	(109, 'Tough', _binary 0x746F7567682E6A7067, '0', 15),
	(110, 'Light', _binary 0x6C696768742E706E67, '0', 19);
/*!40000 ALTER TABLE `oed_words` ENABLE KEYS */;

-- Dumping structure for table php_task.oed_words_data
CREATE TABLE IF NOT EXISTS `oed_words_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `word_id` int(11) NOT NULL,
  `is_synonym` varchar(255) NOT NULL,
  `is_antonym` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `word_id` (`word_id`),
  CONSTRAINT `word_id` FOREIGN KEY (`word_id`) REFERENCES `oed_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

-- Dumping data for table php_task.oed_words_data: ~4 rows (approximately)
/*!40000 ALTER TABLE `oed_words_data` DISABLE KEYS */;
INSERT INTO `oed_words_data` (`id`, `parent_id`, `word_id`, `is_synonym`, `is_antonym`) VALUES
	(62, 90, 92, '1', '0'),
	(66, 90, 105, '0', '1'),
	(67, 92, 109, '1', '0'),
	(68, 90, 110, '0', '1');
/*!40000 ALTER TABLE `oed_words_data` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
