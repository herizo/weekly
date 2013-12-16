-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.5.34-0ubuntu0.12.04.1 - (Ubuntu)
-- Serveur OS:                   debian-linux-gnu
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour weekly
DROP DATABASE IF EXISTS `weekly`;
CREATE DATABASE IF NOT EXISTS `weekly` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `weekly`;


-- Export de la structure de table weekly. task
DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `week` date DEFAULT NULL,
  `project` varchar(100) DEFAULT '0',
  `task` text,
  `day` date DEFAULT NULL,
  `hours` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Export de données de la table weekly.task: ~5 rows (environ)
DELETE FROM `task`;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` (`id`, `user_id`, `week`, `project`, `task`, `day`, `hours`) VALUES
	(1, 1, '2013-12-16', 'Project A', 'project_A updates for edit page', NULL, 0.5),
	(2, 1, '2013-12-16', 'candle', 'Some elements blabla', NULL, 1),
	(3, 1, '2013-12-09', 'New Dreams', 'Desig,', NULL, 1),
	(4, 1, '2013-12-09', 'Project A', 'edit page creation', NULL, 1.5),
	(6, 1, '2013-12-16', 'Project A', 'blablabla ', '2013-12-17', 2);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;


-- Export de la structure de table weekly. todo
DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `project` varchar(100) NOT NULL,
  `task` text NOT NULL,
  `priority` varchar(50) NOT NULL,
  `done` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table weekly.todo: ~2 rows (environ)
DELETE FROM `todo`;
/*!40000 ALTER TABLE `todo` DISABLE KEYS */;
INSERT INTO `todo` (`id`, `user_id`, `project`, `task`, `priority`, `done`) VALUES
	(1, 1, 'Project A', 'need CMS system ', 'HIGHT', 0),
	(2, 2, 'All', 'manage', 'MEDIUM', 1);
/*!40000 ALTER TABLE `todo` ENABLE KEYS */;


-- Export de la structure de table weekly. user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '0',
  `level` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table weekly.user: ~2 rows (environ)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `password`, `title`, `level`) VALUES
	(1, 'user', 'user', 'Developper', 'Worker'),
	(2, 'admin', 'admin', 'manager', 'Manager');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
