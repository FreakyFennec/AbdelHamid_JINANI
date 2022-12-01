-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour dev_tools
CREATE DATABASE IF NOT EXISTS `dev_tools` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dev_tools`;

-- Listage de la structure de table dev_tools. dev_abbreviations
CREATE TABLE IF NOT EXISTS `dev_abbreviations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `abbreviation` char(50) NOT NULL DEFAULT '0',
  `signification` varchar(50) NOT NULL DEFAULT '0',
  `defAbbrev` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `typeAbbrev` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Some abbreviations for dev.';

-- Listage des données de la table dev_tools.dev_abbreviations : ~10 rows (environ)
INSERT INTO `dev_abbreviations` (`id`, `abbreviation`, `signification`, `defAbbrev`, `typeAbbrev`) VALUES
	(1, 'DNS', 'Domaine Name System', 'Répertoire qui contient les noms des domaines avec leurs identifiants (adresses IP).', 'Sigle'),
	(2, 'IP', 'Internet Protocol', 'Identifiant numérique attribué à un périphrique relié à un réseau informatique.', 'Sigle'),
	(3, 'VPN', 'Virtual Private Network', 'Système qui cache l\'adresse IP d\'un client.', 'Sigle'),
	(4, 'UX', 'User eXperience', 'On parle d\'UX design, il sert à rendre le site plus agréable et plus intuitif. Mots clés : comppréhension, optimisation, satisfaction.', 'Sigle'),
	(5, 'WEP', 'Wired Equivalent Privacy', 'Protocole pour sécuriser les réseaux sans fil.', 'Acronyme'),
	(6, 'UI', 'User Interface', 'L\'UI design, fait partie de UX, il sert à améliorer l\'interaction de l\'utilisateur avec le produit. Plus centré sur le visuel pour garder l\'utilisateur sur la page.', 'Sigle'),
	(7, 'BOM', 'Byte Order Mark', 'Série d\'octets au début d\'un fichier texte, pour définir l\'encodage du contenu. Si encodage UTF-8 alors sans BOM', 'Acronyme'),
	(8, 'PHP', 'Hypertext Preprocessor', 'Langage informatique (de script). Principalement utilisé pour concevoir des sites dynamiques.', 'Sigle'),
	(9, 'MOOC', 'Massive Open Online Course', 'Formation en ligne ouverte à tous.', 'Acronyme'),
	(10, 'API', 'Application Programming Interface', 'C\'est une interface logicielle qui permet de « connecter » un logiciel ou un service à un autre logiciel ou service afin d’échanger des données et des fonctionnalités.', 'Acronyme'),
	(11, 'MCD', 'Modèle Conceptuel Données', 'Représentation graphique permetant de comprendre comment les différents éléments sont liés entre eux. (base de données).', 'Sigle');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
