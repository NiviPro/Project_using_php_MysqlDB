-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dictionary_db
CREATE DATABASE IF NOT EXISTS `dictionary_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dictionary_db`;

-- Dumping structure for table dictionary_db.cmt_tbl
CREATE TABLE IF NOT EXISTS `cmt_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table dictionary_db.cmt_tbl: ~9 rows (approximately)
/*!40000 ALTER TABLE `cmt_tbl` DISABLE KEYS */;
INSERT INTO `cmt_tbl` (`id`, `parent_id`, `comments`) VALUES
	(1, 1, 'Love is Passion'),
	(2, 1, 'Passion is Drunkenness of the mind'),
	(3, 2, 'Words have Power'),
	(4, 2, 'Knowledge is Power'),
	(5, 3, 'Pretty have good vides'),
	(6, 3, 'The word Pretty is Pretty'),
	(7, 4, 'Know Your Perfect Slang'),
	(8, 4, 'Slangs around the world'),
	(19, 3, 'leave');
/*!40000 ALTER TABLE `cmt_tbl` ENABLE KEYS */;

-- Dumping structure for table dictionary_db.ent_tbl
CREATE TABLE IF NOT EXISTS `ent_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `entry` varchar(50) DEFAULT NULL,
  `register` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table dictionary_db.ent_tbl: ~4 rows (approximately)
/*!40000 ALTER TABLE `ent_tbl` DISABLE KEYS */;
INSERT INTO `ent_tbl` (`id`, `username`, `entry`, `register`) VALUES
	(6, 'nivethitha.s@netaxis.io', 'redirect', 'redirect/register'),
	(9, 'nivethitha', 'pretty', 'pretty/register'),
	(13, 'nivethitha', 'pretty', '/pretty/register'),
	(14, 'nivethitha', 'power', '/power/register');
/*!40000 ALTER TABLE `ent_tbl` ENABLE KEYS */;

-- Dumping structure for table dictionary_db.pivot_tbl
CREATE TABLE IF NOT EXISTS `pivot_tbl` (
  `id` int(11) DEFAULT NULL,
  `word_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dictionary_db.pivot_tbl: ~15 rows (approximately)
/*!40000 ALTER TABLE `pivot_tbl` DISABLE KEYS */;
INSERT INTO `pivot_tbl` (`id`, `word_id`, `parent_id`, `type`) VALUES
	(1, 5, 1, 'syn'),
	(2, 6, 1, 'syn'),
	(3, 9, 2, 'syn'),
	(4, 10, 2, 'syn'),
	(5, 13, 3, 'syn'),
	(6, 14, 3, 'syn'),
	(7, 17, 4, 'syn'),
	(8, 18, 4, 'syn'),
	(9, 7, 1, 'atn'),
	(10, 8, 1, 'atn'),
	(11, 11, 2, 'atn'),
	(12, 12, 2, 'atn'),
	(13, 15, 3, 'atn'),
	(14, 16, 3, 'atn'),
	(15, 19, 4, 'atn');
/*!40000 ALTER TABLE `pivot_tbl` ENABLE KEYS */;

-- Dumping structure for table dictionary_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dictionary_db.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
	(9, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
	(10, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
	(17, 'nivethitha', 'nivethitha@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
	(34, 'nivethitha', 'nivethithanivi@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
	(37, 'nivethitha', 'nivethitha12345@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
	(40, 'nivethitha', 'nivethitha123@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
	(41, 'nivethitha', 'nivibae123@gmail.com', '202cb962ac59075b964b07152d234b70', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table dictionary_db.word_tbl
CREATE TABLE IF NOT EXISTS `word_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foods` varchar(255) NOT NULL,
  `image` blob,
  `is_approved` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dictionary_db.word_tbl: ~21 rows (approximately)
/*!40000 ALTER TABLE `word_tbl` DISABLE KEYS */;
INSERT INTO `word_tbl` (`id`, `foods`, `image`, `is_approved`) VALUES
	(1, 'passion', _binary 0x70617373696F6E2E6A7067, 1),
	(2, 'power', _binary 0x706F7765722E6A7067, 1),
	(3, 'pretty', _binary 0x7072657474792E6A7067, 1),
	(4, 'slang', _binary 0x736C616E672E6A7067, 1),
	(5, 'love', NULL, 0),
	(6, 'desire', NULL, 0),
	(7, 'hate', NULL, 0),
	(8, 'unconcern', NULL, 0),
	(9, 'potential', NULL, 0),
	(10, 'skill', NULL, 0),
	(11, 'lack', NULL, 0),
	(12, 'infirmty', NULL, 0),
	(13, 'cute', NULL, 0),
	(14, 'neat', NULL, 0),
	(15, 'ugly', NULL, 0),
	(16, 'repulsive', NULL, 0),
	(17, 'argot', NULL, 0),
	(18, 'patois', NULL, 0),
	(19, 'standard', NULL, 0),
	(44, 'book', _binary 0x626F6F6B2E6A7067, 0),
	(48, 'book', _binary 0x626F6F6B2E6A7067, 0);
/*!40000 ALTER TABLE `word_tbl` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
