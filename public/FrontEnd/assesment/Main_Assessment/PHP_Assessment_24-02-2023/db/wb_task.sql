-- --------------------------------------------------------
-- Host:                         127.0.0.1
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

-- Dumping structure for table wb_task.wb_comments
CREATE TABLE IF NOT EXISTS `wb_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comments` longtext,
  `user_id` int(10) DEFAULT NULL,
  `is_aprove` int(10) DEFAULT '0',
  `word_id` int(10) DEFAULT NULL,
  `c_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_wb_comments_wb_users` (`user_id`),
  KEY `FK_wb_comments_wb_words` (`word_id`),
  CONSTRAINT `FK_wb_comments_wb_users` FOREIGN KEY (`user_id`) REFERENCES `wb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_wb_comments_wb_words` FOREIGN KEY (`word_id`) REFERENCES `wb_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table wb_task.wb_comments: ~15 rows (approximately)
/*!40000 ALTER TABLE `wb_comments` DISABLE KEYS */;
INSERT INTO `wb_comments` (`id`, `comments`, `user_id`, `is_aprove`, `word_id`, `c_time`) VALUES
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

-- Dumping structure for table wb_task.wb_users
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table wb_task.wb_users: ~9 rows (approximately)
/*!40000 ALTER TABLE `wb_users` DISABLE KEYS */;
INSERT INTO `wb_users` (`id`, `username`, `email`, `password`, `e_path`, `r_path`, `is_admin`, `u_time`) VALUES
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

-- Dumping structure for table wb_task.wb_words
CREATE TABLE IF NOT EXISTS `wb_words` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) DEFAULT NULL,
  `image` longtext,
  `is_approve` varchar(50) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `w_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wb_bind` (`user_id`),
  CONSTRAINT `wb_bind` FOREIGN KEY (`user_id`) REFERENCES `wb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table wb_task.wb_words: ~27 rows (approximately)
/*!40000 ALTER TABLE `wb_words` DISABLE KEYS */;
INSERT INTO `wb_words` (`id`, `word`, `image`, `is_approve`, `user_id`, `w_time`) VALUES
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

-- Dumping structure for table wb_task.wb_words_data
CREATE TABLE IF NOT EXISTS `wb_words_data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `word_id` int(11) DEFAULT NULL,
  `is_synonym` int(10) DEFAULT '0',
  `is_antonym` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wb-bind2` (`word_id`),
  KEY `FK_wb_words_data_wb_words` (`parent_id`),
  CONSTRAINT `FK_wb_words_data_wb_words` FOREIGN KEY (`parent_id`) REFERENCES `wb_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wb-bind2` FOREIGN KEY (`word_id`) REFERENCES `wb_words` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table wb_task.wb_words_data: ~14 rows (approximately)
/*!40000 ALTER TABLE `wb_words_data` DISABLE KEYS */;
INSERT INTO `wb_words_data` (`id`, `parent_id`, `word_id`, `is_synonym`, `is_antonym`) VALUES
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
