-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour sitesondages
CREATE DATABASE IF NOT EXISTS `sitesondages` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sitesondages`;

-- Listage de la structure de la table sitesondages. amis
CREATE TABLE IF NOT EXISTS `amis` (
  `Id_relation` int(11) NOT NULL AUTO_INCREMENT,
  `user_id1` int(11) DEFAULT NULL,
  `user_id2` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_relation`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.amis : ~5 rows (environ)
/*!40000 ALTER TABLE `amis` DISABLE KEYS */;
INSERT INTO `amis` (`Id_relation`, `user_id1`, `user_id2`) VALUES
	(2, 2, 5),
	(9, 2, 1),
	(19, 1, 5),
	(20, 1, 7),
	(21, 1, 14);
/*!40000 ALTER TABLE `amis` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. creation
CREATE TABLE IF NOT EXISTS `creation` (
  `id_sond` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `choixUn` varchar(50) NOT NULL,
  `choixDeux` varchar(50) NOT NULL,
  `dateDebut` datetime DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sond`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.creation : ~13 rows (environ)
/*!40000 ALTER TABLE `creation` DISABLE KEYS */;
INSERT INTO `creation` (`id_sond`, `question`, `choixUn`, `choixDeux`, `dateDebut`, `dateFin`) VALUES
	(162, 'Vous en pensez quoi ?', 'oui', 'non', '2020-11-03 00:00:00', NULL),
	(164, 'Ouais Les anges', 'Vanessa', 'Julien', '2020-12-04 00:00:00', NULL),
	(165, 'test', 'lala', 'lolo', '2020-12-01 08:34:39', '2020-12-01 23:34:00'),
	(167, 'test 2', 'oui', 'non', '2020-12-01 08:36:55', '2020-12-01 10:02:00'),
	(168, 'TEst 2', 'haha', 'hehe', '2020-12-01 09:16:06', '2020-12-01 23:16:00'),
	(169, 'yo', 'azerty', 'querty', '2020-12-02 02:28:54', '2020-12-02 20:28:00'),
	(181, 'ca va ?', 'oui', 'non', '2020-12-01 06:16:42', '2020-12-01 19:18:00'),
	(182, 'servg', 'je', 'tu', '2020-12-01 06:31:57', '2020-12-01 19:32:00'),
	(183, 'servg', 'je', 'tu', '2020-12-01 06:32:14', '2020-12-01 19:33:00'),
	(184, 'dgg', 'vs', 'bd', '2020-12-01 06:36:58', '2020-12-01 19:40:00'),
	(185, 'ca va ?', 'OUAIS', 'NON', '2020-12-01 06:45:35', '2020-12-01 19:47:00'),
	(186, 'test colors', 'yes', 'no', '2020-12-20 07:08:35', '2020-12-20 20:09:00'),
	(187, 'ca va ?', 'oui', 'non', '2020-12-20 07:22:05', '2020-12-20 20:24:00');
/*!40000 ALTER TABLE `creation` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. membre
CREATE TABLE IF NOT EXISTS `membre` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `statut` int(3) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.membre : ~7 rows (environ)
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` (`id_user`, `pseudo`, `mdp`, `mail`, `statut`) VALUES
	(1, 'art', 'azer', 'arthur@yuyu.com', 2),
	(2, 'Son', 'Goku', 'sgoku@yaya.com', 1),
	(5, 'Bonjour', 'bonjour', 'bonjour@yoyo.com', 2),
	(7, 'pablo', 'pabo', '0', 2),
	(8, 'admin', 'soleil', '0', 1),
	(14, 'benjamin', 'capent', '0', 1),
	(18, 'test', 'rrr', 'eric.rimbaud@sfr.fr', 1);
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. messages
CREATE TABLE IF NOT EXISTS `messages` (
  `sendAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(50) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sendAt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.messages : ~14 rows (environ)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`sendAt`, `content`, `user`) VALUES
	('2020-11-30 22:02:02', 'Salut, je trouve ce sondage trÃ¨s interressent', 'Son'),
	('2020-11-30 22:02:43', 'Hello,oui je suis d\'accord', 'arthur'),
	('2020-11-30 22:02:53', 'Tu as quel age ?', 'arthur'),
	('2020-11-30 22:03:46', 'EH ARRETEZ', 'pablo'),
	('2020-11-30 22:04:31', 'tais toi', 'arthur'),
	('2020-11-30 22:05:27', 'dacc', 'pablo'),
	('2020-11-30 22:39:11', 'Je crois que le problÃ¨me est rÃ©glÃ© ;)', 'Son'),
	('2020-11-30 23:03:44', 'Super', 'Son'),
	('2020-11-30 23:19:14', 'Re test', 'Son'),
	('2020-12-01 11:47:47', 'Message', 'Son'),
	('2020-12-01 11:49:10', 'trop bien', 'pablo'),
	('2020-12-01 11:59:51', 'azertyu', 'pablo'),
	('2020-12-01 22:12:16', 'azert', 'pablo'),
	('2020-12-02 15:28:05', 'mlkjh', 'admin');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Listage de la structure de la table sitesondages. reponses
CREATE TABLE IF NOT EXISTS `reponses` (
  `id_sondage` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `reponse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table sitesondages.reponses : ~20 rows (environ)
/*!40000 ALTER TABLE `reponses` DISABLE KEYS */;
INSERT INTO `reponses` (`id_sondage`, `id_user`, `reponse`) VALUES
	(165, 10, 'A'),
	(165, 2, 'B'),
	(165, 13, 'A'),
	(165, 1, 'A'),
	(164, 48, 'B'),
	(165, 10, 'A'),
	(165, 2, 'B'),
	(165, 13, 'A'),
	(165, 1, 'A'),
	(164, 48, 'B'),
	(165, 10, 'A'),
	(165, 2, 'B'),
	(165, 13, 'A'),
	(165, 1, 'A'),
	(164, 48, 'B'),
	(165, 10, 'A'),
	(165, 2, 'B'),
	(165, 13, 'A'),
	(165, 1, 'A'),
	(164, 48, 'B');
/*!40000 ALTER TABLE `reponses` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
