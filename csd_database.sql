-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for csd_database
CREATE DATABASE IF NOT EXISTS `csd_database` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `csd_database`;

-- Dumping structure for table csd_database.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` varchar(500) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `thread_FK` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `FK__users1` (`user_FK`),
  KEY `FK__threads1` (`thread_FK`),
  CONSTRAINT `FK__threads1` FOREIGN KEY (`thread_FK`) REFERENCES `threads` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__users1` FOREIGN KEY (`user_FK`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.comments: ~0 rows (approximately)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`ID`, `comment_content`, `user_FK`, `thread_FK`, `last_activity`) VALUES
	(1, 'Ja ke fut kot', 12, 5, '2017-03-06 08:57:55');
INSERT INTO `comments` (`ID`, `comment_content`, `user_FK`, `thread_FK`, `last_activity`) VALUES
	(2, 'A thua se ke fut ti plot', 11, 5, '2017-03-06 08:57:55');
INSERT INTO `comments` (`ID`, `comment_content`, `user_FK`, `thread_FK`, `last_activity`) VALUES
	(3, 'A thua se ke fut ti plot', 11, 5, '2017-03-06 08:57:55');
INSERT INTO `comments` (`ID`, `comment_content`, `user_FK`, `thread_FK`, `last_activity`) VALUES
	(4, 'A thua se ke fut ti plot', 11, 5, '2017-03-06 08:57:55');
INSERT INTO `comments` (`ID`, `comment_content`, `user_FK`, `thread_FK`, `last_activity`) VALUES
	(5, 'A thua se ke fut ti plot', 11, 5, '2017-03-06 08:57:55');
INSERT INTO `comments` (`ID`, `comment_content`, `user_FK`, `thread_FK`, `last_activity`) VALUES
	(7, 'MyComment is the bestMyComment is the bestMyComment is the bestMyComment is the bestMyComment is the bestMyComment is the bestMyComment is the bestMyComment is the best', 11, 5, '2017-03-06 10:02:45');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table csd_database.information
CREATE TABLE IF NOT EXISTS `information` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category_FK` int(11) NOT NULL,
  `infoContent` varchar(1000) NOT NULL,
  `infoTitle` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `FK_information_info_category` (`category_FK`),
  CONSTRAINT `FK_information_info_category` FOREIGN KEY (`category_FK`) REFERENCES `info_category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.information: ~27 rows (approximately)
DELETE FROM `information`;
/*!40000 ALTER TABLE `information` DISABLE KEYS */;
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Coca Cola', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Pepsi', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(3, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Blind', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(4, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(5, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(6, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(7, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(8, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(9, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(10, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(11, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(12, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(13, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(14, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(15, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(16, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(17, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(18, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(19, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(20, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(21, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(22, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(23, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(24, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(25, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(26, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
INSERT INTO `information` (`ID`, `category_FK`, `infoContent`, `infoTitle`, `timestamp`) VALUES
	(27, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Mojfaej jekaj kaejkl jaekj aeklj kaeljkl ajekl', '2017-03-05 23:11:41');
/*!40000 ALTER TABLE `information` ENABLE KEYS */;

-- Dumping structure for table csd_database.info_category
CREATE TABLE IF NOT EXISTS `info_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.info_category: ~5 rows (approximately)
DELETE FROM `info_category`;
/*!40000 ALTER TABLE `info_category` DISABLE KEYS */;
INSERT INTO `info_category` (`ID`, `category_name`) VALUES
	(3, 'Another Amazing Category of Information');
INSERT INTO `info_category` (`ID`, `category_name`) VALUES
	(4, 'Best Category');
INSERT INTO `info_category` (`ID`, `category_name`) VALUES
	(5, 'Hugh Munghus');
INSERT INTO `info_category` (`ID`, `category_name`) VALUES
	(2, 'Keep It Rocking');
INSERT INTO `info_category` (`ID`, `category_name`) VALUES
	(1, 'New Students');
/*!40000 ALTER TABLE `info_category` ENABLE KEYS */;

-- Dumping structure for table csd_database.news
CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `newsType` enum('UNICAM','ERSU') NOT NULL DEFAULT 'UNICAM',
  `newsTitle` varchar(100) NOT NULL,
  `newsContent` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.news: ~10 rows (approximately)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(1, 'UNICAM', 'First News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:37');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(2, 'UNICAM', 'Second News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:34');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(3, 'ERSU', 'Third News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:40');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(4, 'ERSU', 'Fourth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:39');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(5, 'UNICAM', 'Fiveth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:38');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(6, 'UNICAM', 'Fiveth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:38');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(7, 'UNICAM', 'Fiveth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:38');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(8, 'UNICAM', 'Fiveth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:38');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(9, 'UNICAM', 'Fiveth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:38');
INSERT INTO `news` (`ID`, `newsType`, `newsTitle`, `newsContent`, `timestamp`) VALUES
	(10, 'UNICAM', 'Fiveth News', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.', '2017-03-05 09:35:38');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table csd_database.subforum
CREATE TABLE IF NOT EXISTS `subforum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `subforum_title` varchar(100) NOT NULL,
  `last_activity` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.subforum: ~6 rows (approximately)
DELETE FROM `subforum`;
/*!40000 ALTER TABLE `subforum` DISABLE KEYS */;
INSERT INTO `subforum` (`ID`, `subforum_title`, `last_activity`) VALUES
	(1, 'Complex Systems Design', NULL);
INSERT INTO `subforum` (`ID`, `subforum_title`, `last_activity`) VALUES
	(2, 'Distributed Calculus And Coordination', NULL);
INSERT INTO `subforum` (`ID`, `subforum_title`, `last_activity`) VALUES
	(3, 'Job Opportunities', NULL);
INSERT INTO `subforum` (`ID`, `subforum_title`, `last_activity`) VALUES
	(4, 'IT Security', NULL);
INSERT INTO `subforum` (`ID`, `subforum_title`, `last_activity`) VALUES
	(5, 'Medicine', NULL);
INSERT INTO `subforum` (`ID`, `subforum_title`, `last_activity`) VALUES
	(6, 'Law Studies', NULL);
/*!40000 ALTER TABLE `subforum` ENABLE KEYS */;

-- Dumping structure for table csd_database.threads
CREATE TABLE IF NOT EXISTS `threads` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `thread_title` varchar(100) NOT NULL,
  `thread_content` varchar(1000) NOT NULL,
  `subforum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `FK__users` (`user_id`),
  KEY `FK_threads_subforum` (`subforum_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_threads_subforum` FOREIGN KEY (`subforum_id`) REFERENCES `subforum` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.threads: ~8 rows (approximately)
DELETE FROM `threads`;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(2, 'Project Deadlines', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 12, '2017-03-06 02:48:56');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(3, 'Lectures', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 11, '2017-03-06 02:48:56');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(5, 'Kot me se koti', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 11, '2017-03-06 02:51:33');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(6, 'Slides', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 11, '2017-03-06 02:52:13');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(7, 'Super Project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 11, '2017-03-06 03:11:26');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(12, 'Seminars', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 12, '2017-03-06 02:51:16');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(13, 'Seminars', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 12, '2017-03-06 02:51:16');
INSERT INTO `threads` (`ID`, `thread_title`, `thread_content`, `subforum_id`, `user_id`, `last_activity`) VALUES
	(14, 'My Thread', 'Such good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good ContentSuch good Content', 1, 11, '2017-03-06 08:52:11');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;

-- Dumping structure for table csd_database.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_posted` timestamp NULL DEFAULT NULL,
  `banned` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `admin` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table csd_database.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID`, `username`, `email`, `password`, `last_posted`, `banned`, `admin`, `created_at`) VALUES
	(11, 'Marko1693', 'joni.seraj@studenti.unicam.it', '$2a$10$swdq8QeMkjKogJRTkjJrceZMrnnwyMiDgvXDD2wguoF7ICD3WUh1.', NULL, 'NO', 'YES', '2017-03-05 14:24:23');
INSERT INTO `users` (`ID`, `username`, `email`, `password`, `last_posted`, `banned`, `admin`, `created_at`) VALUES
	(12, 'Marko1629', 'joni.seraj@studenti.uniam.it', '$2a$10$QkTNkLTY/mLKihBpUhtHbOj5aLDZ9aFkNymd88aQ04VyzMqetBmEe', NULL, 'NO', 'YES', '2017-03-05 14:24:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
