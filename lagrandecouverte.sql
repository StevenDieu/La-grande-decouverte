-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 25 Mai 2015 à 01:39
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lagrandecouverte`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image_1` varchar(1024) NOT NULL,
  `image_2` varchar(1024) NOT NULL,
  `image_3` varchar(1024) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `description`, `date`, `time`, `image_1`, `image_2`, `image_3`) VALUES
(21, 'test d''une actualitÃ© bn', 'test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©', '2015-04-22', '14:04:50', 'zpkel8hr2990269540.jpg', 'ohv1ooxgchili.jpg', 'hggrp9sbimaage1.png');

-- --------------------------------------------------------

--
-- Structure de la table `carnetvoyage`
--

CREATE TABLE IF NOT EXISTS `carnetvoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  `titre` text NOT NULL,
  `prive` tinyint(1) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`id_utilisateur`,`id_voyage`),
  KEY `fk_carnetvoyage_utilisateur1_idx` (`id_utilisateur`),
  KEY `fk_carnetvoyage_voyage1_idx` (`id_voyage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `carnetvoyage`
--

INSERT INTO `carnetvoyage` (`id`, `id_utilisateur`, `id_voyage`, `titre`, `prive`, `date_creation`) VALUES
(4, 1, 64, 'aze', 0, '2015-05-23 19:04:00'),
(22, 1, 65, 'test', 0, '2015-05-23 19:44:19');

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `continent`
--

INSERT INTO `continent` (`id`, `name`) VALUES
(13, 'europe'),
(14, 'afrique'),
(15, 'Asie');

-- --------------------------------------------------------

--
-- Structure de la table `deroulement_voyage`
--

CREATE TABLE IF NOT EXISTS `deroulement_voyage` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) NOT NULL,
  `texte` text NOT NULL,
  `photo` varchar(1024) NOT NULL,
  `jour` int(11) NOT NULL,
  `idVoyage` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `deroulement_voyage`
--

INSERT INTO `deroulement_voyage` (`id`, `titre`, `texte`, `photo`, `jour`, `idVoyage`) VALUES
(3, '', ' ', 'aze', 0, 70),
(4, '', ' ', 'aze', 0, 71),
(5, '', ' ', 'aze', 0, 72),
(6, '', ' ', 'aze', 0, 73),
(7, '', ' ', 'aze', 0, 74),
(8, '', ' ', 'aze', 0, 75);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `complementAdresse` varchar(100) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `codePostal` int(11) NOT NULL,
  `Pays` varchar(50) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`utilisateur_id`),
  KEY `fk_facture_utilisateur1_idx` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fichevoyage`
--

CREATE TABLE IF NOT EXISTS `fichevoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visible` tinyint(1) NOT NULL,
  `id_carnetvoyage` int(11) NOT NULL,
  `titre` char(90) NOT NULL,
  `contenu` longtext NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`id_carnetvoyage`),
  KEY `fk_fichevoyage_carnetvoyage1_idx` (`id_carnetvoyage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `fichevoyage`
--

INSERT INTO `fichevoyage` (`id`, `visible`, `id_carnetvoyage`, `titre`, `contenu`, `id_utilisateur`, `date_creation`) VALUES
(1, 0, 4, 'Jour 1 : Arrivée à Santiago', '<p><br></p><p><br><br><img alt="" class="fr-image-dropped fr-fil fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/fe90d0ea2ff3f74763b2319345329d49df1fdd27.jpg" width="370">                                Arrivée à Santiago après 14 heures de vol. Accueil à l''aéroport par votre accompagnateur et transfert à votre hôtel dans le centre de Santiago. Après un premier briefing du guide, <br>                                temps libre pour découverte individuelle...<br><br><br><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br>                                La capitale chilienne est une immense mégalopole regroupant à elle seule près d''un tiers de la population du pays. <br>                                Pourtant, à s''y balader, on ne croirait pas que tant de gens se pressent dans cet espace verdoyant aux innombrables parcs, <br>                                aux trottoirs fleuris et aux rues longées d''arbres. Ici, tout est vert. <br></p><p><br></p><p><br></p><p><br></p><p><br><br><img alt="" class="fr-fir fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/b603605e0fd609e802e0598a50c34bc042f20133.jpg" width="321">                                Chaque matin, des employés de la ville arrosent consciencieusement les nombreuses parcelles d''herbes que l''on trouve un peu partout. <br>                                Il semble vraiment faire bon vivre à Santiago, à 100km de la mer et moitié moins des stations de ski. Nous avons vraiment beaucoup aimé cette ville, <br>                                notre seul regret sera de ne pas nous y être un peu plus promenées à pied ; sa taille et la proximité du métro nous ont découragées, mais elle mérite d''être parcourue plus longuement. <br>                                Nous avons particulièrement aimé les quartiers de Providencia, où nous logions, et de Bellavista avec ses petites maisons de toutes les couleurs.<br><br><br><br>                                        Suggestion de visites : La Chascona, l''une des trois maisons du célèbre poète et écrivain chilien Pablo Neruda ; <br>                                        l''un des cerros (collines) de la ville, par exemple Santa Lucia pour son charme ; le marché central ; la Place d''Armes et la Cathédrale ; <br>                                        le Palais de la Moneda.</p><p><br></p>', 1, '2015-05-23 19:04:41'),
(3, 1, 4, 'Jour 1 : Arrivée à Santiago', '<p><br></p><p><br><br><img alt="" class="fr-image-dropped fr-fil fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/fe90d0ea2ff3f74763b2319345329d49df1fdd27.jpg" width="370">                                Arrivée à Santiago après 14 heures de vol. Accueil à l''aéroport par votre accompagnateur et transfert à votre hôtel dans le centre de Santiago. Après un premier briefing du guide, <br>                                temps libre pour découverte individuelle...<br><br><br><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br>                                La capitale chilienne est une immense mégalopole regroupant à elle seule près d''un tiers de la population du pays. <br>                                Pourtant, à s''y balader, on ne croirait pas que tant de gens se pressent dans cet espace verdoyant aux innombrables parcs, <br>                                aux trottoirs fleuris et aux rues longées d''arbres. Ici, tout est vert. <br></p><p><br></p><p><br></p><p><br></p><p><br><br><img alt="" class="fr-fir fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/b603605e0fd609e802e0598a50c34bc042f20133.jpg" width="321">                                Chaque matin, des employés de la ville arrosent consciencieusement les nombreuses parcelles d''herbes que l''on trouve un peu partout. <br>                                Il semble vraiment faire bon vivre à Santiago, à 100km de la mer et moitié moins des stations de ski. Nous avons vraiment beaucoup aimé cette ville, <br>                                notre seul regret sera de ne pas nous y être un peu plus promenées à pied ; sa taille et la proximité du métro nous ont découragées, mais elle mérite d''être parcourue plus longuement. <br>                                Nous avons particulièrement aimé les quartiers de Providencia, où nous logions, et de Bellavista avec ses petites maisons de toutes les couleurs.<br><br><br><br>                                        Suggestion de visites : La Chascona, l''une des trois maisons du célèbre poète et écrivain chilien Pablo Neruda ; <br>                                        l''un des cerros (collines) de la ville, par exemple Santa Lucia pour son charme ; le marché central ; la Place d''Armes et la Cathédrale ; <br>                                        le Palais de la Moneda.</p><p><br></p>', 1, '2015-05-23 19:04:41'),
(4, 1, 4, 'Jour 1 : Arrivée à Santiago', '<p><br></p><p><br><br><img alt="" class="fr-image-dropped fr-fil fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/fe90d0ea2ff3f74763b2319345329d49df1fdd27.jpg" width="370">                                Arrivée à Santiago après 14 heures de vol. Accueil à l''aéroport par votre accompagnateur et transfert à votre hôtel dans le centre de Santiago. Après un premier briefing du guide, <br>                                temps libre pour découverte individuelle...<br><br><br><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br>                                La capitale chilienne est une immense mégalopole regroupant à elle seule près d''un tiers de la population du pays. <br>                                Pourtant, à s''y balader, on ne croirait pas que tant de gens se pressent dans cet espace verdoyant aux innombrables parcs, <br>                                aux trottoirs fleuris et aux rues longées d''arbres. Ici, tout est vert. <br></p><p><br></p><p><br></p><p><br></p><p><br><br><img alt="" class="fr-fir fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/b603605e0fd609e802e0598a50c34bc042f20133.jpg" width="321">                                Chaque matin, des employés de la ville arrosent consciencieusement les nombreuses parcelles d''herbes que l''on trouve un peu partout. <br>                                Il semble vraiment faire bon vivre à Santiago, à 100km de la mer et moitié moins des stations de ski. Nous avons vraiment beaucoup aimé cette ville, <br>                                notre seul regret sera de ne pas nous y être un peu plus promenées à pied ; sa taille et la proximité du métro nous ont découragées, mais elle mérite d''être parcourue plus longuement. <br>                                Nous avons particulièrement aimé les quartiers de Providencia, où nous logions, et de Bellavista avec ses petites maisons de toutes les couleurs.<br><br><br><br>                                        Suggestion de visites : La Chascona, l''une des trois maisons du célèbre poète et écrivain chilien Pablo Neruda ; <br>                                        l''un des cerros (collines) de la ville, par exemple Santa Lucia pour son charme ; le marché central ; la Place d''Armes et la Cathédrale ; <br>                                        le Palais de la Moneda.</p><p><br></p>', 1, '2015-05-23 19:04:41');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` text,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `lien`, `nom`) VALUES
(13, 'C:/Users/Steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/TVAFS-1.0/assets/images/utilisateur/photoProfil/799d12e6492b599ca94500a4992bc2a4.jpg', '799d12e6492b599ca94500a4992bc2a4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `image_fiche`
--

CREATE TABLE IF NOT EXISTS `image_fiche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fichevoyage` int(11) NOT NULL,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`,`id_fichevoyage`),
  KEY `fk_image_fiche_fichevoyage1_idx` (`id_fichevoyage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `image_voyage`
--

CREATE TABLE IF NOT EXISTS `image_voyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voyage_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`voyage_id`),
  KEY `fk_image_voyage1_idx` (`voyage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `info_voyage`
--

CREATE TABLE IF NOT EXISTS `info_voyage` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `formalite` text NOT NULL,
  `asavoir` text NOT NULL,
  `comprenant` text NOT NULL,
  `place_dispo` int(11) NOT NULL,
  `prix` float NOT NULL,
  `special_price` int(11) NOT NULL,
  `tva` float NOT NULL,
  `idVoyage` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `info_voyage`
--

INSERT INTO `info_voyage` (`id`, `date_depart`, `date_arrivee`, `depart`, `arrivee`, `formalite`, `asavoir`, `comprenant`, `place_dispo`, `prix`, `special_price`, `tva`, `idVoyage`) VALUES
(40, '2015-05-06', '2015-05-14', 'paris', 'bruxelles', 'formalité', 'à savoir', 'comprenant', 12, 1290, 0, 20, 64),
(41, '2015-05-28', '2015-05-31', '', '', ' sdf', 'azz123', '12', 0, 0, 0, 0, 64),
(42, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', ' formalité', ' à savoir', ' comprenant', 12, 2430, 0, 20, 66),
(43, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', ' formalité', ' à savoir', ' comprenant', 12, 2430, 0, 20, 67),
(46, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 68),
(47, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 69),
(48, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 70),
(49, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 71),
(50, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 72),
(51, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 73),
(52, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 74),
(60, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 75);

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE IF NOT EXISTS `jours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` int(11) DEFAULT NULL,
  `fichevoyage_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`fichevoyage_id`),
  KEY `fk_jours_fichevoyage1_idx` (`fichevoyage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(1024) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateDepart` datetime NOT NULL,
  `dateArrivee` datetime NOT NULL,
  `villeDepart` varchar(25) NOT NULL,
  `villeArrivee` varchar(25) NOT NULL,
  `Compagnie` varchar(25) NOT NULL,
  `nbPlaces` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `periodevoyage`
--

CREATE TABLE IF NOT EXISTS `periodevoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voyage_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`voyage_id`,`periode_id`),
  KEY `fk_periodevoyage_voyage1_idx` (`voyage_id`),
  KEY `fk_periodevoyage_periode1_idx` (`periode_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `picto`
--

CREATE TABLE IF NOT EXISTS `picto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(25) NOT NULL,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pictovoyage`
--

CREATE TABLE IF NOT EXISTS `pictovoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voyage_id` int(11) NOT NULL,
  `picto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`voyage_id`,`picto_id`),
  KEY `fk_pictovoyage_voyage1_idx` (`voyage_id`),
  KEY `fk_pictovoyage_picto1_idx` (`picto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `temperature`
--

CREATE TABLE IF NOT EXISTS `temperature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `temperature` varchar(45) DEFAULT NULL,
  `picto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`picto_id`),
  KEY `fk_temperature_picto1_idx` (`picto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `login`, `password`, `privilege`, `ip`) VALUES
(3, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `id_image` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `banni` tinyint(1) NOT NULL,
  `security` int(1) NOT NULL,
  `token` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `password`, `mail`, `description`, `id_image`, `ip`, `banni`, `security`, `token`) VALUES
(1, 'Dieu', 'Steven', 'aze', '0a5b3913cbc9a9092311630e869b4442', 'aze', 'Je m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ...Je m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ... Je m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ... $user[0]->descriptionJe m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ... $user[0]->description', 13, 0, 0, 0, ''),
(2, 'boussemart', 'alexandre', 'alexandre', 'Aze123aze', '0', '', 0, 0, 0, 2, ''),
(3, 'azeaze', 'azeaze', 'azeaze', 'Azerty1az', '0', '', 0, 0, 0, 2, ''),
(4, 'boussemart', 'alexandre', 'alexandre123', 'Azerty123', '0', '', 0, 0, 1, 2, ''),
(5, 'boussemart', 'alexandre', 'alexandre1233', 'Azerty123', '0', '', 0, 0, 0, 2, ''),
(6, 'boussemart', 'alexandre', 'alexandrempmp', 'e719bb7909ccbf63ec2103c92dfffc0c', '0', '', 0, 0, 0, 2, ''),
(7, 'boussemart', 'alexandre', 'alexandrejknj', '4c3b6c7517e9f780744f6582f2d36fb6', '0', '', 0, 0, 1, 2, ''),
(8, 'boussemart', 'alexandre', 'alexandrefgfg', '6584a0cdbc0a409009c798fca3d94688', 'alexandre.boussemart94@gmail.com', '', 0, 0, 1, 2, ''),
(9, 'boussemart', 'alexandre', 'alexandre2', '757d4a9b28c16197f457ae6844074831', 'alexandre.boussemart94@gmail.com', '', 0, 0, 0, 2, ''),
(10, 'Dieu', 'Steven', 'sstteeeevv', 'f11b2ce0790dc2546d11ce496e9762d0', 'groover.dieu@gmail.com', '', 0, 1270, 0, 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_slider_1` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_slider_2` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_slider_3` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `titre` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `phrase_accroche` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `duree` int(11) NOT NULL,
  `image_sous_slider` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `description_first_bloc` text CHARACTER SET latin1 NOT NULL,
  `description_second_bloc` text CHARACTER SET latin1 NOT NULL,
  `description_third_bloc` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `drapeau` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `capital` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `continent` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `meteo_image` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `meteo_temperature` int(11) NOT NULL,
  `picto_1` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `picto_2` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `picto_3` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `picto_4` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `picto_5` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `picto_6` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `villes_principales` text CHARACTER SET latin1 NOT NULL,
  `religion` text CHARACTER SET latin1 NOT NULL,
  `nombre_habitant` text CHARACTER SET latin1 NOT NULL,
  `monnaie` text CHARACTER SET latin1 NOT NULL,
  `fete` text CHARACTER SET latin1 NOT NULL,
  `langue_officielle` text CHARACTER SET latin1 NOT NULL,
  `image_baniere_1` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_baniere_2` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_baniere_3` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_baniere_4` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_description_1` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_description_2` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_description_3` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_description_4` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_description_5` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `image_description_6` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `lattitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `image_slider_1`, `image_slider_2`, `image_slider_3`, `titre`, `phrase_accroche`, `duree`, `image_sous_slider`, `description_first_bloc`, `description_second_bloc`, `description_third_bloc`, `drapeau`, `capital`, `continent`, `meteo_image`, `meteo_temperature`, `picto_1`, `picto_2`, `picto_3`, `picto_4`, `picto_5`, `picto_6`, `villes_principales`, `religion`, `nombre_habitant`, `monnaie`, `fete`, `langue_officielle`, `image_baniere_1`, `image_baniere_2`, `image_baniere_3`, `image_baniere_4`, `image_description_1`, `image_description_2`, `image_description_3`, `image_description_4`, `image_description_5`, `image_description_6`, `lattitude`, `longitude`) VALUES
(64, '8merof6u1.jpg', 'o8u46nfq2.jpg', '8h93mj8l3.jpg', 'Au coeur du Chili', 'Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l''île de Pâques promettent au voyageur une merveilleuse découverte.', 10, 'qfuzeyv5paysage.jpg', 'Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.', '<p>Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.</p>\n<p>La deuxième partie de votre voyage nous transporte à l''autre bout de la cordillère des Andes. Nous quitterons l''Altiplano et les paysages lunaires de l''Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>\n<p>Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe!</p>', 'Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d''exception pour une découverte des multiples facettes d''un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie... 12', 'q9zz35828sqmep5hchili.png', 'SANTIAGO DU CHILI', '13', '', 16, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Concep ción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas', 'Au Chili, la religion catholique est majoritaire.', 'Le Chili compte 16 60 000 habitants', 'Le Peso chi lien (CLP) est utilisé au Chili', 'Indépendance d u Chili, 18 Septembre (1810)', '''e spagnol est la langue officielle du Chili', '2btjwet31.jpg', 'f51r4ddm2.jpg', 'j5ynpvzj3.jpg', '6hfj56k44.jpg', '4d4a2sgodescription1.jpg', 'uv33d9otdescription2.jpg', 'zqmy98x6description3.jpg', 'h31s4zdndescription4.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', -33.4691, -70.642),
(65, '8merof6u1.jpg', 'o8u46nfq2.jpg', '8h93mj8l3.jpg', 'Au coeur du Chili', 'Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l''île de Pâques promettent au voyageur une merveilleuse découverte.', 10, 'qfuzeyv5paysage.jpg', 'Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.', '<p>Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.</p>\r\n<p>La deuxième partie de votre voyage nous transporte à l''autre bout de la cordillère des Andes. Nous quitterons l''Altiplano et les paysages lunaires de l''Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>\r\n<p>Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe!</p>', 'Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d''exception pour une découverte des multiples facettes d''un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie... 12', 'q9zz35828sqmep5hchili.png', 'SANTIAGO DU CHILI', '13', '', 16, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Concep ción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas', 'Au Chili, la religion catholique est majoritaire.', 'Le Chili compte 16 60 000 habitants', 'Le Peso chi lien (CLP) est utilisé au Chili', 'Indépendance d u Chili, 18 Septembre (1810)', '''e spagnol est la langue officielle du Chili', '2btjwet31.jpg', 'f51r4ddm2.jpg', 'j5ynpvzj3.jpg', '6hfj56k44.jpg', '4d4a2sgodescription1.jpg', 'uv33d9otdescription2.jpg', 'zqmy98x6description3.jpg', 'h31s4zdndescription4.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', -33.4691, -70.642),
(75, '9bdcmix8Travel Mongolia Naadam.jpg', '35ap1qbbslider2.JPG', 'v4ct3yrjnadam_20.jpg', 'Le Naadam en folie', 'Festival du Nadaam et découverte du nord de la Mongolie avec le lac Khovsgol', 15, 'y7evvizcmongolie17bis.jpg', 'Durant deux jours entiers, vous vivrez au rythme du Naadam, fête nationale Mongole qui attire tous les cavaliers de la steppe. Vous poursuivrez ensuite, plein Nord croisant campements et yourtes, entre lacs et montagnes à la conquête du pays Tsaatan. Et, tant sur les rives de l’immense lac Khovsgöl que dans le Khangaï, vous partagerez le quotidien des descendants de Gensis Khan. \r\nLe coté initiatique de ce voyage et l’hospitalité des nomades vous laisserons de vifs souvenirs', '15 jours, balades et visites. Groupe : 4 à 15 participants. Étapes : 5 à 7h en 4x4. Nuits en hôtel, sous tente et yourte. Portage par véhicule. Guide local francophone.\r\n\r\nFormalités : passeport valide 6 mois après la date de retour + visa. Vols réguliers : Aeroflot, Korean Air, Turkish, Hunnu Air.\r\n\r\nPrix base 4 pers. mini. de Paris tout compris sauf les repas à Oulan-Bator, les boissons, les entrées dans les musées et sites à Oulan-Bator, les spectacles,les assurances.', 'Le déroulement du programme est donné à titre indicatif. Les étapes peuvent être modifiées sur place pour des raisons météorologiques, de sécurité, d’organisation, d’horaires d’avion ou tout évènement inattendu. Dans ces moments difficiles, le guide local fera le maximum pour atténuer les effets de ces évènements indépendants de notre volonté.', 'r35dc812téléchargement.png', 'Oulan-Bator', '15', '', 30, '1hugk5kp2owetp3qsunblock.png', 'inzruzta3solz6kvgoogle.png', '34vhqb5hc5rxkvphexcursion.png', 'bdtxx7gzn8srisxqt-shirt.png', 'd1r7zj9fc934uq9ocar.png', 'x5lutszyrzgwonuwswimming.png', 'Oulan-Bator, Erdenet, Darhan, Choybalsan, Ölgiy, Saynshand, Ulaangom, Hovd, Mörön, Uliastay', 'En Mongolie, la religion Bouddhisme est majoritaire.', '2 754 685', 'Le tugrik (MNT?) est utilisé en Mongolie', 'Le Naadam en Mongolie, Du 11 au 13 juillet', '''e spagnol est la langue officielle du Chili', '5rf454zcnaadam3_1662515c.jpg', '253rc3eyelevage-de-chevaux-en-mongolie.jpg', '0', '', 'ht3h12luimg-1-small580.jpg', '9qbbnp9umongolie19bis.jpg', 'c9tngfndnaadam3_1662515c.jpg', '3yjsvhw1nadam_20.jpg', '', 'oilh7scxasia-focus-inedits-produits-mongolie-camp-khgno-khan-1.jpg', 47.9077, 106.883);

-- --------------------------------------------------------

--
-- Structure de la table `voyageutilisateur`
--

CREATE TABLE IF NOT EXISTS `voyageutilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nbPersonnes` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `assurance` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`,`utilisateur_id`,`voyage_id`),
  KEY `fk_voyageutilisateur_utilisateur_idx` (`utilisateur_id`),
  KEY `fk_voyageutilisateur_voyage1_idx` (`voyage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
