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


-- Listage de la structure de la base pour cinema_hamid
CREATE DATABASE IF NOT EXISTS `cinema_hamid` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cinema_hamid`;

-- Listage de la structure de table cinema_hamid. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acteur`),
  KEY `FK_acteur_personne` (`id_personne`),
  CONSTRAINT `FK_acteur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.acteur : ~28 rows (environ)
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 2),
	(2, 3),
	(3, 4),

	(4, 6),
	(5, 7),
	(6, 8),

	(7, 10),
	(8, 11),
	(9, 12),

	(10, 14),
	(11, 15),
	(12, 16),

	(13, 17),	 
	(14, 18),		
	(15, 19),		
	(16, 20),
	(17, 21),

	(18, 23),		
	(19, 24),		
	(20, 25),		
	(21, 26),

	(22, 27),		
	(23, 28),		
	(24, 29),		
	(25, 30),

	(26, 31),		
	(27, 32),		
	(28, 33),		  
	(29, 34),
	(30, 35);

-- Listage de la structure de table cinema_hamid. appartenir
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id_film` int NOT NULL,
  `id_genre_film` int NOT NULL,
  KEY `FK_appartenir_film_2` (`id_film`),
  KEY `FK_appartenir_genre` (`id_genre_film`),
  CONSTRAINT `FK_appartenir_film_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_appartenir_genre` FOREIGN KEY (`id_genre_film`) REFERENCES `genre` (`id_genre_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.appartenir : ~7 rows (environ)
INSERT INTO `appartenir` (`id_film`, `id_genre_film`) VALUES
	(1, 1),
	(2, 2),
	(3, 1),
	(4, 4),
	(5, 1),
	(6, 5),
	(7, 4),
	(8, 4);

-- Listage de la structure de table cinema_hamid. casting
CREATE TABLE IF NOT EXISTS `casting` (
  `id_film` int DEFAULT NULL,
  `id_acteur` int DEFAULT NULL,
  `id_role` int DEFAULT NULL,
  KEY `FK_casting_film` (`id_film`),
  KEY `FK_casting_role` (`id_role`),
  KEY `FK_casting_acteur_2` (`id_acteur`),
  CONSTRAINT `FK_casting_acteur_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK_casting_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_casting_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.casting : ~32 rows (environ)
INSERT INTO `casting` (`id_film`, `id_acteur`, `id_role`) VALUES
	(1, 1, 1),
	(1, 2, 2),
	(1, 3, 3),

	(2, 4, 4),
	(2, 5, 5),
	(2, 6, 6),

	(3, 7, 7),
	(3, 8, 8),
	(3, 9, 9),

	(4, 7, 10),
	(4, 10, 11),
	(4, 15, 13),
	(4, 16, 12),

	(5, 13, 14),
	(5, 14, 15),
	(5, 15, 16),
	(5, 16, 17),
	(5, 17, 18),

	(6, 18, 20),
	(6, 19, 21),
	(6, 20, 22),
	(6, 21, 23),

	(7, 22, 24),
	(7, 23, 25),
	(7, 24, 26),
	(7, 25, 27),
	(7, 26, 28),

	(8, 27, 29),
	(8, 28, 30),
	(8, 29, 21),
	(8, 30, 32),
	(8, 31, 33);

-- Listage de la structure de table cinema_hamid. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(250) NOT NULL,
  `date_sortie_fr` date NOT NULL,
  `duree_film` int NOT NULL,
  `synopsis_film` text NOT NULL,
  `affiche_film` varchar(50) NOT NULL,
  `note_film` int NOT NULL,
  `id_realisateur` int NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_realilsateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.film : ~8 rows (environ)
INSERT INTO `film` (`id_film`, `titre_film`, `date_sortie_fr`, `duree_film`, `synopsis_film`, `affiche_film`, `note_film`, `id_realisateur`) VALUES
	(1, 'L\'Homme qui défiait l\'infini', '2017-01-01', 108, 'Srinivasa Ramanujan est l\'un des plus grands mathématiciens de notre temps. Élevé à Madras en Inde, il intègre la prestigieuse université de Cambridge en Angleterre pendant la Première Guerre mondiale et y développe de nombreuses théories mathématiques sous l\'égide de son professeur G.H. Hardy. ', 'assets/img/L-homme-qui-defiait-l-infini.jpg', 5, 1),
	(2, 'Jagame Thandhiram', '2021-06-21', 158, 'Quand un gangster habile et insouciant est recruté par un baron de la pègre étranger pour éliminer un rival, les dilemmes moraux qui s\'ensuivent le prennent au dépourvu.', 'assets/img/jagame-thandhiram.jpg', 2, 2),
	(3, 'K-19 - Le Piège des profondeurs', '2002-09-18', 138, 'En juin 1961, en pleine Guerre froide, dans les eaux de l\'Atlantique nord, Alexei Vostrikov, le capitaine du premier sous-marin nucléaire de l\'arsenal soviétique, le K-19, découvre que le système de refroidissement du réacteur principal est défaillant. A son bord, des ogives et un moteur à propulsion atomique menacent d\'exploser si la température au coeur du réacteur ne baisse pas rapidement. ', 'assets/img/k_19_le_piege_des_profondeurs.jpg', 3, 3),
	(4, 'Blade Runner', '1982-09-15', 111, 'En novembre 2019, dans un Los Angeles pluvieux et crépusculaire, perpétuellement couvert de smog. La planète a vu disparaitre la quasi-totalité de la faune, à la suite de la surexploitation, de la pollution, des guerres (nucléaires) et du dérèglement climatique d\'origine anthropique. La population est encouragée à émigrer vers les colonies situées sur d\'autres planètes. Pour les besoins des humains ont été créés des animaux artificiels, ainsi que des androïdes, non pas des robots mécaniques mais des êtres vivants dont les organes, fabriqués indépendamment, et par manipulation génétique, sont assemblés pour leur donner apparence humaine.', 'assets/img/Blade-Runner.jpg', 5, 4),
	(5, 'Prometheus', '2012-04-11', 124, 'En 2093, des scientifiques cherchent à dépasser leurs limites mentales et physiques et tentent d\'explorer ce qu\'il y a au-delà du possible. Ils vont être amenés à découvrir un indice sur l\'origine de l\'humanité sur Terre. Cette découverte les entraîne dans un voyage fascinant jusqu\'aux recoins les plus sombres de l\'univers.', 'assets/img/prometheus.jpg', 4, 4),
	(6, 'Lolita', '1962-01-01', 153, 'Humbert Humbert, professeur de littérature française, cherche à louer une chambre pour l\'été dans le New Hampshire. À cette occasion, il se présente chez Charlotte Haze, une veuve en mal d\'amour qui, jouant les enjôleuses et les érudites, lui fait visiter sa maison et lui vante tous les avantages de la chambre à louer. C\'est uniquement parce qu\'il découvre l\'existence de la jeune fille de Charlotte, Dolorès (surnommée « Lolita »), dont il tombe amoureux et pour rester auprès d\'elle qu\'Humbert loue la chambre puis épouse la mère.', 'assets/img/Lolita.jpg', 4, 5),
	(7, 'Docteur Folamour', '1964-01-01', 95, 'En pleine guerre froide, le général de l\'Armée de l\'air américaine Jack D. Ripper, frappé de folie paranoïaque, décide, seul et alors qu\'aucune menace ne le justifiait, d’envoyer ses quarante-deux bombardiers B-52 munis de bombes atomiques frapper l’URSS. Puis il coupe sa base de l\'extérieur, et le Pentagone n\'a aucun moyen de rappeler ces avions, une procédure prévue pour garantir la destruction mutuelle assurée dans l\'hypothèse que les USA étaient déjà touchés. Le président des États-Unis (interprété par Peter Sellers), à la demande de son chef d\'état-major, le général Turgidson, commande une réunion d\'urgence dans la salle souterraine de commandement stratégique pour tenter d\'éviter une guerre nucléaire.', 'assets/img/dr-folamour-fr.jpg', 3, 5),
	(8, '2001, l\'Odyssée de l\'espace', '1968-01-01', 156, 'Le film est divisé en quatre actes distincts : dans le premier acte, qui se déroule « à l\'aube de l\'humanité », on suit des hominidés bipèdes qui découvrent l\'usage de l\'outil, après que ceux-ci ont touché un monolithe noir mystérieux. Dans le second acte, qui se déroule en 2001, on suit le docteur Heywood R. Floyd lors de son voyage sur la Lune quand un monolithe identique y est découvert. Dans le troisième acte, deux astronautes, le Dr David Bowman et Frank Poole entreprennent un voyage vers la planète Jupiter à bord du vaisseau spatial Discovery One, à la suite du signal radio émis par le monolithe de la Lune vers Jupiter.', 'assets/img/2001-l-odyssee-de-l-espacek.jpg', 4, 5);

-- Listage de la structure de table cinema_hamid. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre_film` int NOT NULL AUTO_INCREMENT,
  `type_genre_film` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_genre_film`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.genre : ~5 rows (environ)
INSERT INTO `genre` (`id_genre_film`, `type_genre_film`) VALUES
	(1, 'Drame'),
	(2, 'Action'),
	(3, 'Thriller'),
	(4, 'Sci-Fi'),
	(5, 'Comédie noire');

-- Listage de la structure de table cinema_hamid. personne
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `prenom_personne` varchar(50) NOT NULL,
  `date_naiss_personne` date NOT NULL,
  `lieu_naiss_personne` varchar(50) NOT NULL,
  `genre_personne` varchar(50) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.personne : ~36 rows (environ)
INSERT INTO `personne` (`id_personne`, `nom_personne`, `prenom_personne`, `date_naiss_personne`, `lieu_naiss_personne`, `genre_personne`) VALUES
	(1, 'Brown', 'Matt', '1980-01-01', 'Canada', 'H'),
	(2, 'Patel', 'Dev', '1990-04-23', 'Grande-Bretagne', 'H'),
	(3, 'Irons', 'Jeremy', '1948-09-19', 'Grande-Bretagne', 'H'),
	(4, 'Jones', 'Tobias', '1966-09-07', 'Grande-Bretagne', 'H'),

	(5, 'Subbaraj', 'Karthik', '1983-03-19', 'Indes', 'H'),
	(6, 'Dhanush', 'V', '1983-02-25', 'Indes', 'H'),
	(7, 'Lekshmi', 'Aishwarya', '1990-09-06', 'Indes', 'F'),
	(8, 'Cosmo', 'James', '1948-05-24', 'Grande-Bretagne', 'H'),

	(9, 'Biglow', 'Kathryn', '1951-11-17', 'États-Unis', 'F'),
	(10, 'Ford', 'Harrison', '1942-07-13', 'États-Unis', 'H'),
	(11, 'Neeson', 'Liam', '1952-06-07', 'Grande-Bretagne', 'H'),
	(12, 'Sarsgaard', 'Peter', '1971-03-07', 'États-Unis', 'H'),

	(13, 'Scott', 'Ridley', '1937-11-30', 'Grande-Bretagne', 'H'),
	(14, 'Hauer', 'Rutger', '1944-01-23', 'Pays-Bas', 'H'),
	(15, 'Hannah', 'Daryl', '1960-12-03', 'États-Unis', 'F'),
	(16, 'Young', 'Sean', '1959-11-20', 'États-Unis', 'F'),

	(17, 'Rapace', 'Noomi', '1979-12-28', 'Suède', 'F'),
	(18, 'Fassebender', 'Michael', '1977-04-02', 'Allemagne', 'H'),
	(19, 'Theron', 'Charlize', '1975-08-07', 'Afrique du Sud', 'F'),
	(20, 'Elba', 'Idris', '1972-09-06', 'États-Unis', 'H'),
	(21, 'Pearce', 'Guy', '1967-10-05', 'Australie', 'H'),

	(22, 'Kubrick', 'Stanley', '1928-07-26', 'États-Unis', 'H'),
	(23, 'Masson', 'James', '1909-05-15', 'Grande-Bretagne', 'H'),
	(24, 'Winters', 'Shelley', '1920-08-18', 'États-Unis', 'F'),
	(25, 'Lyon', 'Sue', '1946-07-10', 'États-Unis', 'F'),
	(26, 'Sellers', 'Peter', '1925-07-08', 'Grande-Bretagne', 'H'),

	(27, 'Scott', 'George C.', '1927-10-18', 'États-Unis', 'H'),
	(28, 'Hayden', 'Sterling', '1916-03-26', 'États-Unis', 'H'),
	(29, 'Wynn', 'Keenan', '1916-07-27', 'États-Unis', 'H'),
	(30, 'Pickens', 'Slim', '1919-06-29', 'États-Unis', 'H'),

	(31, 'Dullea', 'Keir', '1936-05-30', 'États-Unis', 'H'),
	(32, 'Lockwood', 'Gary', '1937-02-21', 'États-Unis', 'H'),
	(33, 'Sylvester', 'William', '1922-01-31', 'États-Unis', 'H'),
	(34, 'Richter', 'Daniel', '1939-01-01', 'États-Unis', 'H'),
	(35, 'Rossiter', 'Leonard', '1926-10-21', 'Grande-Bretagne', 'H'); 

-- Listage de la structure de table cinema_hamid. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  KEY `FK_realilsateur_cinema_hamid.personne` (`id_personne`),
  CONSTRAINT `FK_realilsateur_cinema_hamid.personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.realisateur : ~5 rows (environ)
INSERT INTO `realisateur` (`id_realisateur`, `id_personne`) VALUES
	(1, 1),
	(2, 5),
	(3, 9),
	(4, 13),
	(5, 22);

-- Listage de la structure de table cinema_hamid. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.role : ~31 rows (environ)
INSERT INTO `role` (`id_role`, `nom_role`) VALUES
	(1, 'Srinivasa Ramanujan'),
	(2, 'G.H. Hardy'),
	(3, 'John Edensor Littlewood'),

	(4, 'Suruli '),
	(5, 'Attila '),
	(6, 'Peter Sprott '),

	(7, 'Capitaine Alexei Vostrikov'),
	(8, 'Capitaine Mikhail Polenin'),
	(9, 'Lieutenant Vadim Ratchenko'),

	(10, 'Rick Deckard'),
	(11, 'Roy Batty'),
	(12, 'Rachel'),
	(13, 'Pris'),

	(14, 'Elisabeth Shaw'),
	(15, 'David'),
	(16, 'Meredith Vickers'),
	(17, 'Capitaine Janek'),
	(18, 'Charlie Holloway'),
	(19, 'Peter Weyland')

	(20, 'Humbert Humbert'),
	(21, 'Charlotte Haze'),
	(22, 'Dolores « Lolita » Haze'),
	(23, 'Clare Quilty / Dr Zempf'),

	(24, 'Président Merkin Muffley'),
	(25, 'Général « Buck » Turgidson'),
	(26, 'Général Jack D. Ripper'),
	(27, 'Colonel « Bat » Guano'),
	(28, 'Commandant T.J. « King » Kong'),

	(29, 'Dr David Bowman'),
	(30, 'Dr Frank Poole'),
	(31, 'Dr Heywood R. Floyd'),
	(32, 'Moonwatcher (« Guetteur de Lune »)'),
	(33, 'Dr Andrei Smyslov');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
