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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
