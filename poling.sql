-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6159
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for poling
CREATE DATABASE IF NOT EXISTS `poling` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `poling`;

-- Dumping structure for table poling.candidate_pres
CREATE TABLE IF NOT EXISTS `candidate_pres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capres` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table poling.candidate_pres: ~8 rows (approximately)
DELETE FROM `candidate_pres`;
/*!40000 ALTER TABLE `candidate_pres` DISABLE KEYS */;
INSERT INTO `candidate_pres` (`id`, `capres`) VALUES
	(1, 'Sandiaga Uno'),
	(2, 'Airlangga Hartarto'),
	(3, 'Ganjar Pranowo'),
	(4, 'Ridwan Kamil'),
	(5, 'AHY'),
	(6, 'Prabowo Subianto'),
	(7, 'Muhaimin Iskandar'),
	(8, 'Puan Maharani'),
	(9, 'Anies Baswedan'),
	(10, 'Mahfud MD');
/*!40000 ALTER TABLE `candidate_pres` ENABLE KEYS */;

-- Dumping structure for table poling.candidate_wapres
CREATE TABLE IF NOT EXISTS `candidate_wapres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cawapres` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table poling.candidate_wapres: ~9 rows (approximately)
DELETE FROM `candidate_wapres`;
/*!40000 ALTER TABLE `candidate_wapres` DISABLE KEYS */;
INSERT INTO `candidate_wapres` (`id`, `cawapres`) VALUES
	(1, 'Khofifah Indar Parawansa'),
	(2, 'Gibran Rakabuming'),
	(3, 'AHY'),
	(4, 'Erick Tohir'),
	(5, 'Mahfud MD'),
	(6, 'Sandiaga Uno'),
	(7, 'Ridwan Kamil'),
	(8, 'Muhaimin Iskandar'),
	(9, 'Andika Perkasa'),
	(10, 'Airlangga Hartarto');
/*!40000 ALTER TABLE `candidate_wapres` ENABLE KEYS */;

-- Dumping structure for table poling.poll_results
CREATE TABLE IF NOT EXISTS `poll_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_capres` int(11) DEFAULT NULL,
  `id_cawapres` int(11) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table poling.poll_results: ~1 rows (approximately)
DELETE FROM `poll_results`;
/*!40000 ALTER TABLE `poll_results` DISABLE KEYS */;
INSERT INTO `poll_results` (`id`, `id_capres`, `id_cawapres`, `created`) VALUES
	(1, 6, 7, '2023-08-18 11:52:46');
/*!40000 ALTER TABLE `poll_results` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
