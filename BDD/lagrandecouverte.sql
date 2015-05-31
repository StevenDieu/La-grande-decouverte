-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 26 Mai 2015 à 09:09
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.17

SET FOREIGN_KEY_CHECKS=0;
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

CREATE TABLE `actualite` (
`id` bigint(20) unsigned NOT NULL,
  `titre` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image_1` varchar(1024) NOT NULL,
  `image_2` varchar(1024) NOT NULL,
  `image_3` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `description`, `date`, `time`, `image_1`, `image_2`, `image_3`) VALUES
(21, 'test d''une actualitÃ© bn', 'test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©  test description d''une actualitÃ©', '2015-04-22', '14:04:50', 'zpkel8hr2990269540.jpg', 'ohv1ooxgchili.jpg', 'hggrp9sbimaage1.png');

-- --------------------------------------------------------

--
-- Structure de la table `billing`
--

CREATE TABLE `billing` (
`id` bigint(20) unsigned NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `complement_adresse` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `increment_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `billing`
--

INSERT INTO `billing` (`id`, `nom`, `prenom`, `societe`, `email`, `adresse`, `complement_adresse`, `code_postal`, `ville`, `region`, `pays`, `telephone`, `fax`, `id_user`, `increment_id`) VALUES
(7, 'qsd', 'qsd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'sqd', '62', 'FR', 0, 0, 1, 1000007),
(8, 'alexandre', 'boussemart', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'd', '62', 'FR', 0, 0, 1, 1000008),
(9, 'qsd', 'sqd', 'Votre Société', 'Votre Email', 'sqdqs', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000009),
(10, 'qsd', 'sqd', 'Votre Société', 'Votre Email', 'sqdqs', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000010),
(11, 'qsd', 'sqd', 'Votre Société', 'Votre Email', 'sqdqs', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000011),
(12, 'dqsdq', 'sd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'sqd', '62', 'FR', 0, 0, 1, 1000012),
(13, 'dsf', 'dsf', 'Votre Société', 'Votre Email', 'dsf', 'Complément de votre Adresse', 0, 'dsf', '62', 'FR', 0, 0, 1, 1000013),
(14, 'xwxc', 'wxc', 'Votre Société', 'Votre Email', 'wxc', 'Complément de votre Adresse', 0, 'xwc', '62', 'FR', 0, 0, 1, 1000014),
(15, 'dqs', 'qsd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000015),
(16, 'dsf', 'sdf', 'Votre Société', 'Votre Email', 'sdf', 'Complément de votre Adresse', 0, 'sdf', '62', 'FR', 0, 0, 1, 1000016),
(17, ',', ',k', 'Votre Société', 'Votre Email', ' k,', 'Complément de votre Adresse', 0, 'kk', '62', 'FR', 0, 0, 1, 1000017),
(18, ',', ',k', 'Votre Société', 'Votre Email', ' k,', 'Complément de votre Adresse', 0, 'kk', '62', 'FR', 0, 0, 1, 1000018),
(19, 'sd', 'sd', 'Votre Société', 'Votre Email', 'sd', 'Complément de votre Adresse', 0, 'sd', '62', 'FR', 0, 0, 1, 1000019),
(20, 'sd', 'sd', 'Votre Société', 'Votre Email', 'sd', 'Complément de votre Adresse', 0, 'sd', '62', 'FR', 0, 0, 1, 1000020),
(21, 'sd', 'sd', 'Votre Société', 'Votre Email', 'sd', 'Complément de votre Adresse', 0, 'sd', '62', 'FR', 0, 0, 1, 1000021),
(22, 'dsf', 'sdf', 'Votre Société', 'Votre Email', 'sdfd', 'Complément de votre Adresse', 0, 'sdf', '62', 'FR', 0, 0, 1, 1000022),
(23, 'xwc', 'wxc', 'Votre Société', 'Votre Email', 'wcx', 'Complément de votre Adresse', 0, 'wxc', '62', 'FR', 0, 0, 1, 1000023),
(24, 'xwc', 'wxc', 'Votre Société', 'Votre Email', 'wcx', 'Complément de votre Adresse', 0, 'wxc', '62', 'FR', 0, 0, 1, 1000024),
(25, 'xwc', 'wxc', 'Votre Société', 'Votre Email', 'wcx', 'Complément de votre Adresse', 0, 'wxc', '62', 'FR', 0, 0, 1, 1000025),
(26, 'xwc', 'wxc', 'Votre Société', 'Votre Email', 'wcx', 'Complément de votre Adresse', 0, 'wxc', '62', 'FR', 0, 0, 1, 1000026),
(27, ',kl', 'l', 'Votre Société', 'Votre Email', 'l', 'Complément de votre Adresse', 0, 'l', '62', 'FR', 0, 0, 1, 1000027),
(28, 'qsd', 'sdq', 'Votre Société', 'Votre Email', 'sqd', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000028),
(29, 'qsd', 'sd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'sd', '62', 'FR', 0, 0, 1, 1000029),
(30, 'cxv', 'xcv', 'Votre Société', 'Votre Email', 'cxv', 'Complément de votre Adresse', 0, 'cxv', '62', 'FR', 0, 0, 1, 1000030),
(31, 'ds', 'dsf', 'Votre Société', 'Votre Email', 'sdf', 'Complément de votre Adresse', 62300, 'lens', '62', 'FR', 2147483647, 0, 1, 1000031),
(32, 'ds', 'dsf', 'Votre Société', 'Votre Email', 'sdf', 'Complément de votre Adresse', 62300, 'lens', '62', 'FR', 2147483647, 0, 1, 1000032),
(33, 'v', 'xcv', 'xcv', 'Votre Email', 'cxv', 'Complément de votre Adresse', 0, 'xcv', '62', 'FR', 0, 0, 1, 1000033),
(34, 'dsf', 'dsf', 'Votre Société', 'Votre Email', 'sdf', 'Complément de votre Adresse', 0, 'sdf', '62', 'FR', 0, 0, 1, 1000034),
(35, 'aze', 'aze', 'Votre Société', 'Votre Email', 'aze', 'Complément de votre Adresse', 0, 'aze', '62', 'FR', 0, 0, 1, 1000035),
(36, 'aze', 'aze', 'Votre Société', 'Votre Email', 'aze', 'Complément de votre Adresse', 0, 'aze', '62', 'FR', 0, 0, 1, 1000036),
(37, 'qsd', 'qsd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000037),
(38, 'qsd', 'qsd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000038);

-- --------------------------------------------------------

--
-- Structure de la table `carnetvoyage`
--

CREATE TABLE `carnetvoyage` (
`id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  `titre` text NOT NULL,
  `prive` tinyint(1) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `carnetvoyage`
--

INSERT INTO `carnetvoyage` (`id`, `id_utilisateur`, `id_voyage`, `titre`, `prive`, `date_creation`) VALUES
(4, 1, 64, 'aze', 1, '2015-05-23 19:04:00'),
(22, 1, 65, 'test', 0, '2015-05-23 19:44:19');

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE `continent` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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

CREATE TABLE `deroulement_voyage` (
`id` bigint(20) unsigned NOT NULL,
  `titre` varchar(1024) NOT NULL,
  `texte` text NOT NULL,
  `photo` varchar(1024) NOT NULL,
  `jour` int(11) NOT NULL,
  `idVoyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
-- Structure de la table `fichevoyage`
--

CREATE TABLE `fichevoyage` (
`id` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `id_carnetvoyage` int(11) NOT NULL,
  `titre` char(90) NOT NULL,
  `contenu` longtext NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

CREATE TABLE `images` (
`id` int(11) NOT NULL,
  `lien` text,
  `nom` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `lien`, `nom`) VALUES
(13, 'C:/Users/Steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/TVAFS-1.0/assets/images/utilisateur/photoProfil/799d12e6492b599ca94500a4992bc2a4.jpg', '799d12e6492b599ca94500a4992bc2a4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `image_fiche`
--

CREATE TABLE `image_fiche` (
`id` int(11) NOT NULL,
  `id_fichevoyage` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image_voyage`
--

CREATE TABLE `image_voyage` (
`id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `info_voyage`
--

CREATE TABLE `info_voyage` (
`id` bigint(20) unsigned NOT NULL,
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
  `idVoyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `info_voyage`
--

INSERT INTO `info_voyage` (`id`, `date_depart`, `date_arrivee`, `depart`, `arrivee`, `formalite`, `asavoir`, `comprenant`, `place_dispo`, `prix`, `special_price`, `tva`, `idVoyage`) VALUES
(42, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', ' formalité', ' à savoir', ' comprenant', 12, 2430, 0, 20, 66),
(43, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', ' formalité', ' à savoir', ' comprenant', 12, 2430, 0, 20, 67),
(46, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 68),
(47, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 69),
(48, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 70),
(49, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 71),
(50, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 72),
(51, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 73),
(52, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 74),
(63, '2015-05-06', '2015-05-14', 'paris', 'bruxelles', 'formalité', 'à savoir', 'comprenant', 12, 1290.9, 0, 20, 64),
(64, '2015-05-28', '2015-05-31', '', '', ' sdf', 'azz123', '12', 0, 0, 0, 0, 64),
(65, '2015-04-28', '2015-05-13', 'qsd', 'qsd', ' qsd', ' qsdqs', ' d', 0, 0, 0, 0, 65),
(66, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 75);

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE `jours` (
`id` int(11) NOT NULL,
  `jour` int(11) DEFAULT NULL,
  `fichevoyage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
`id` bigint(20) unsigned NOT NULL,
  `mail` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
`id` bigint(20) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_billing` int(11) NOT NULL,
  `nb_participant` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `acompte` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `prix_total` varchar(255) NOT NULL,
  `reste_a_payer` varchar(255) NOT NULL,
  `sous_total` varchar(255) NOT NULL,
  `taxe` varchar(255) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  `id_info_voyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1000039 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`id`, `date`, `id_user`, `id_billing`, `nb_participant`, `payment`, `acompte`, `ip`, `prix_total`, `reste_a_payer`, `sous_total`, `taxe`, `id_voyage`, `id_info_voyage`) VALUES
(1000007, '2015-05-25 17:38:19', 1, 7, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000008, '2015-05-25 20:46:58', 1, 8, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000009, '2015-05-25 20:48:54', 1, 9, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000010, '2015-05-25 20:48:54', 1, 10, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000011, '2015-05-25 20:48:54', 1, 11, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000012, '2015-05-25 20:52:52', 1, 12, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000013, '2015-05-25 21:33:44', 1, 13, 1, 'CB', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000014, '2015-05-25 21:35:06', 1, 14, 1, 'CB', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000015, '2015-05-25 21:36:14', 1, 15, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000016, '2015-05-25 21:37:43', 1, 16, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000017, '2015-05-25 21:42:52', 1, 17, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000018, '2015-05-25 21:42:52', 1, 18, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000019, '2015-05-25 21:44:48', 1, 19, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000020, '2015-05-25 21:45:05', 1, 20, 1, 'CB', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000021, '2015-05-25 21:45:21', 1, 21, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000022, '2015-05-25 21:47:43', 1, 22, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000023, '2015-05-25 21:48:57', 1, 23, 1, 'CB', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000024, '2015-05-25 21:49:11', 1, 24, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000025, '2015-05-25 21:49:21', 1, 25, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000026, '2015-05-25 21:49:21', 1, 26, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000027, '2015-05-25 21:53:30', 1, 27, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000028, '2015-05-25 21:55:47', 1, 28, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000029, '2015-05-25 21:57:54', 1, 29, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000030, '2015-05-25 21:59:07', 1, 30, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000031, '2015-05-25 22:03:49', 1, 31, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000032, '2015-05-25 22:03:49', 1, 32, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000033, '2015-05-25 22:06:04', 1, 33, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000034, '2015-05-25 22:08:42', 1, 34, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000035, '2015-05-26 08:53:01', 1, 35, 1, 'PAYPAL', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000036, '2015-05-26 08:53:13', 1, 36, 1, 'CHECKMO', '129,09', '::1', '1 290,90', '1 161,81', '1 032,72', '258,18', 64, 63),
(1000037, '2015-05-26 09:04:30', 1, 37, 2, 'PAYPAL', '258,18', '::1', '2 581,80', '2 323,62', '2 065,44', '516,36', 64, 63),
(1000038, '2015-05-26 09:04:52', 1, 38, 2, 'CHECKMO', '258,18', '::1', '2 581,80', '2 323,62', '2 065,44', '516,36', 64, 63);

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
`id` bigint(20) unsigned NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `dob` date NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participants`
--

INSERT INTO `participants` (`id`, `nom`, `prenom`, `info`, `dob`, `id_order`) VALUES
(4, 'qsd', 'qsd', '', '2015-05-21', 1000008),
(5, 'qsd', 'qsd', '', '2015-05-15', 1000009),
(6, 'qsd', 'qsd', '', '2015-05-15', 1000010),
(7, 'qsd', 'qsd', '', '2015-05-15', 1000011),
(8, 'sqd', 'qsd', 'sqd', '2015-05-07', 1000012),
(9, 'dsf', 'dsfdsf', '', '2015-05-17', 1000013),
(10, 'wxc', 'wxc', '', '2015-05-08', 1000014),
(11, 'dsf', 'sdf', '', '2015-05-16', 1000015),
(12, 'dsf', 'dsf', '', '2015-05-01', 1000016),
(13, 'j', 'j', '', '2015-05-08', 1000017),
(14, 'j', 'j', '', '2015-05-08', 1000018),
(15, 'xc', 'sd', '', '2015-05-14', 1000019),
(16, 'xc', 'sd', '', '2015-05-14', 1000020),
(17, 'xc', 'sd', '', '2015-05-14', 1000021),
(18, 'k,', ',k', 'kn', '2015-05-17', 1000022),
(19, 'wx', 'xw', 'wx', '2015-05-09', 1000023),
(20, 'wx', 'xw', 'wx', '2015-05-09', 1000024),
(21, 'wx', 'xw', 'wx', '2015-05-09', 1000025),
(22, 'wx', 'xw', 'wx', '2015-05-09', 1000026),
(23, 'p', 'p', '', '2015-05-02', 1000027),
(24, 'qsd', 'sqd', '', '2015-05-07', 1000028),
(25, 'qsd', 'sqd', '', '2015-05-15', 1000029),
(26, 'cxv', 'x', '', '2015-05-17', 1000030),
(27, 'dsf', 'dsf', '', '2015-05-22', 1000031),
(28, 'dsf', 'dsf', '', '2015-05-22', 1000032),
(29, 'xcv', 'cxv', '', '2015-05-03', 1000033),
(30, 'qsd', 'sqd', '', '2015-05-09', 1000034),
(31, 'ze', 'zeaze', '', '2015-05-17', 1000035),
(32, 'ze', 'zeaze', '', '2015-05-17', 1000036),
(33, 'qsd', 'qsd', 'qsd', '2015-05-20', 1000037),
(34, 'qsd', 'qsd', '', '2015-05-08', 1000037),
(35, 'qsd', 'qsd', 'qsd', '2015-05-20', 1000038),
(36, 'qsd', 'qsd', '', '2015-05-08', 1000038);

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE `periode` (
`id` int(11) NOT NULL,
  `dateDepart` datetime NOT NULL,
  `dateArrivee` datetime NOT NULL,
  `villeDepart` varchar(25) NOT NULL,
  `villeArrivee` varchar(25) NOT NULL,
  `Compagnie` varchar(25) NOT NULL,
  `nbPlaces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `periodevoyage`
--

CREATE TABLE `periodevoyage` (
`id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `picto`
--

CREATE TABLE `picto` (
`id` int(11) NOT NULL,
  `lien` varchar(25) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pictovoyage`
--

CREATE TABLE `pictovoyage` (
`id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `picto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `temperature`
--

CREATE TABLE `temperature` (
`id` int(11) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `temperature` varchar(45) DEFAULT NULL,
  `picto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE `user_admin` (
`id` bigint(20) unsigned NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `login`, `password`, `privilege`, `ip`) VALUES
(3, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
`id` int(11) NOT NULL,
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
  `token` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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

CREATE TABLE `voyage` (
`id` int(11) NOT NULL,
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
  `longitude` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `image_slider_1`, `image_slider_2`, `image_slider_3`, `titre`, `phrase_accroche`, `duree`, `image_sous_slider`, `description_first_bloc`, `description_second_bloc`, `description_third_bloc`, `drapeau`, `capital`, `continent`, `meteo_image`, `meteo_temperature`, `picto_1`, `picto_2`, `picto_3`, `picto_4`, `picto_5`, `picto_6`, `villes_principales`, `religion`, `nombre_habitant`, `monnaie`, `fete`, `langue_officielle`, `image_baniere_1`, `image_baniere_2`, `image_baniere_3`, `image_baniere_4`, `image_description_1`, `image_description_2`, `image_description_3`, `image_description_4`, `image_description_5`, `image_description_6`, `lattitude`, `longitude`) VALUES
(64, '8merof6u1.jpg', 'o8u46nfq2.jpg', '8h93mj8l3.jpg', 'Au coeur du Chili', 'Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l''île de Pâques promettent au voyageur une merveilleuse découverte.', 10, 'qfuzeyv5paysage.jpg', 'Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.', '<p>Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.</p>\n<p>La deuxième partie de votre voyage nous transporte à l''autre bout de la cordillère des Andes. Nous quitterons l''Altiplano et les paysages lunaires de l''Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>\n<p>Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe!</p>', 'Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d''exception pour une découverte des multiples facettes d''un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie... 12', 'q9zz35828sqmep5hchili.png', 'SANTIAGO DU CHILI', '13', '', 16, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Concep ción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas', 'Au Chili, la religion catholique est majoritaire.', 'Le Chili compte 16 60 000 habitants', 'Le Peso chi lien (CLP) est utilisé au Chili', 'Indépendance d u Chili, 18 Septembre (1810)', '''e spagnol est la langue officielle du Chili', '2btjwet31.jpg', 'f51r4ddm2.jpg', 'j5ynpvzj3.jpg', '6hfj56k44.jpg', '4d4a2sgodescription1.jpg', 'uv33d9otdescription2.jpg', 'zqmy98x6description3.jpg', 'h31s4zdndescription4.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', -33.4691, -70.642),
(65, '8merof6u1.jpg', 'o8u46nfq2.jpg', '8h93mj8l3.jpg', 'Au coeur du Chili', 'Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l''île de Pâques promettent au voyageur une merveilleuse découverte.', 10, 'qfuzeyv5paysage.jpg', 'Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.', '<p>Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.</p>\n<p>La deuxième partie de votre voyage nous transporte à l''autre bout de la cordillère des Andes. Nous quitterons l''Altiplano et les paysages lunaires de l''Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>\n<p>Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe!</p>', 'Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d''exception pour une découverte des multiples facettes d''un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie... 12', 'q9zz35828sqmep5hchili.png', 'SANTIAGO DU CHILI', '13', '', 16, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Concep ción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas', 'Au Chili, la religion catholique est majoritaire.', 'Le Chili compte 16 60 000 habitants', 'Le Peso chi lien (CLP) est utilisé au Chili', 'Indépendance d u Chili, 18 Septembre (1810)', '''e spagnol est la langue officielle du Chili', '2btjwet31.jpg', 'f51r4ddm2.jpg', 'j5ynpvzj3.jpg', '6hfj56k44.jpg', '4d4a2sgodescription1.jpg', 'uv33d9otdescription2.jpg', 'zqmy98x6description3.jpg', 'h31s4zdndescription4.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', -33.4691, -70.642),
(75, '9bdcmix8Travel Mongolia Naadam.jpg', '35ap1qbbslider2.JPG', 'v4ct3yrjnadam_20.jpg', 'Le Naadam en folie', 'Festival du Nadaam et découverte du nord de la Mongolie avec le lac Khovsgol', 15, 'y7evvizcmongolie17bis.jpg', 'Durant deux jours entiers, vous vivrez au rythme du Naadam, fête nationale Mongole qui attire tous les cavaliers de la steppe. Vous poursuivrez ensuite, plein Nord croisant campements et yourtes, entre lacs et montagnes à la conquête du pays Tsaatan. Et, tant sur les rives de l’immense lac Khovsgöl que dans le Khangaï, vous partagerez le quotidien des descendants de Gensis Khan. \nLe coté initiatique de ce voyage et l’hospitalité des nomades vous laisserons de vifs souvenirs', '15 jours, balades et visites. Groupe : 4 à 15 participants. Étapes : 5 à 7h en 4x4. Nuits en hôtel, sous tente et yourte. Portage par véhicule. Guide local francophone.\n\nFormalités : passeport valide 6 mois après la date de retour + visa. Vols réguliers : Aeroflot, Korean Air, Turkish, Hunnu Air.\n\nPrix base 4 pers. mini. de Paris tout compris sauf les repas à Oulan-Bator, les boissons, les entrées dans les musées et sites à Oulan-Bator, les spectacles,les assurances.', 'Le déroulement du programme est donné à titre indicatif. Les étapes peuvent être modifiées sur place pour des raisons météorologiques, de sécurité, d’organisation, d’horaires d’avion ou tout évènement inattendu. Dans ces moments difficiles, le guide local fera le maximum pour atténuer les effets de ces évènements indépendants de notre volonté.', 'r35dc812téléchargement.png', 'Oulan-Bator', '15', '', 30, '1hugk5kp2owetp3qsunblock.png', 'inzruzta3solz6kvgoogle.png', '34vhqb5hc5rxkvphexcursion.png', 'bdtxx7gzn8srisxqt-shirt.png', 'd1r7zj9fc934uq9ocar.png', 'x5lutszyrzgwonuwswimming.png', 'Oulan-Bator, Erdenet, Darhan, Choybalsan, Ölgiy, Saynshand, Ulaangom, Hovd, Mörön, Uliastay', 'En Mongolie, la religion Bouddhisme est majoritaire.', '2 754 685', 'Le tugrik (MNT?) est utilisé en Mongolie', 'Le Naadam en Mongolie, Du 11 au 13 juillet', '''e spagnol est la langue officielle du Chili', '5rf454zcnaadam3_1662515c.jpg', '253rc3eyelevage-de-chevaux-en-mongolie.jpg', '0', '', 'ht3h12luimg-1-small580.jpg', '9qbbnp9umongolie19bis.jpg', 'c9tngfndnaadam3_1662515c.jpg', '3yjsvhw1nadam_20.jpg', '', 'oilh7scxasia-focus-inedits-produits-mongolie-camp-khgno-khan-1.jpg', 47.9077, 106.883);

-- --------------------------------------------------------

--
-- Structure de la table `voyageutilisateur`
--

CREATE TABLE `voyageutilisateur` (
`id` int(11) NOT NULL,
  `nbPersonnes` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `prix_total` int(11) NOT NULL,
  `assurance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `billing`
--
ALTER TABLE `billing`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `carnetvoyage`
--
ALTER TABLE `carnetvoyage`
 ADD PRIMARY KEY (`id`,`id_utilisateur`,`id_voyage`), ADD KEY `fk_carnetvoyage_utilisateur1_idx` (`id_utilisateur`), ADD KEY `fk_carnetvoyage_voyage1_idx` (`id_voyage`);

--
-- Index pour la table `continent`
--
ALTER TABLE `continent`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `deroulement_voyage`
--
ALTER TABLE `deroulement_voyage`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `fichevoyage`
--
ALTER TABLE `fichevoyage`
 ADD PRIMARY KEY (`id`,`id_carnetvoyage`), ADD KEY `fk_fichevoyage_carnetvoyage1_idx` (`id_carnetvoyage`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image_fiche`
--
ALTER TABLE `image_fiche`
 ADD PRIMARY KEY (`id`,`id_fichevoyage`), ADD KEY `fk_image_fiche_fichevoyage1_idx` (`id_fichevoyage`);

--
-- Index pour la table `image_voyage`
--
ALTER TABLE `image_voyage`
 ADD PRIMARY KEY (`id`,`voyage_id`), ADD KEY `fk_image_voyage1_idx` (`voyage_id`);

--
-- Index pour la table `info_voyage`
--
ALTER TABLE `info_voyage`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `jours`
--
ALTER TABLE `jours`
 ADD PRIMARY KEY (`id`,`fichevoyage_id`), ADD KEY `fk_jours_fichevoyage1_idx` (`fichevoyage_id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `periode`
--
ALTER TABLE `periode`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `periodevoyage`
--
ALTER TABLE `periodevoyage`
 ADD PRIMARY KEY (`id`,`voyage_id`,`periode_id`), ADD KEY `fk_periodevoyage_voyage1_idx` (`voyage_id`), ADD KEY `fk_periodevoyage_periode1_idx` (`periode_id`);

--
-- Index pour la table `picto`
--
ALTER TABLE `picto`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictovoyage`
--
ALTER TABLE `pictovoyage`
 ADD PRIMARY KEY (`id`,`voyage_id`,`picto_id`), ADD KEY `fk_pictovoyage_voyage1_idx` (`voyage_id`), ADD KEY `fk_pictovoyage_picto1_idx` (`picto_id`);

--
-- Index pour la table `temperature`
--
ALTER TABLE `temperature`
 ADD PRIMARY KEY (`id`,`picto_id`), ADD KEY `fk_temperature_picto1_idx` (`picto_id`);

--
-- Index pour la table `user_admin`
--
ALTER TABLE `user_admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `login` (`login`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyageutilisateur`
--
ALTER TABLE `voyageutilisateur`
 ADD PRIMARY KEY (`id`,`utilisateur_id`,`voyage_id`), ADD KEY `fk_voyageutilisateur_utilisateur_idx` (`utilisateur_id`), ADD KEY `fk_voyageutilisateur_voyage1_idx` (`voyage_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `billing`
--
ALTER TABLE `billing`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `carnetvoyage`
--
ALTER TABLE `carnetvoyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `continent`
--
ALTER TABLE `continent`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `deroulement_voyage`
--
ALTER TABLE `deroulement_voyage`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `fichevoyage`
--
ALTER TABLE `fichevoyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `image_fiche`
--
ALTER TABLE `image_fiche`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image_voyage`
--
ALTER TABLE `image_voyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `info_voyage`
--
ALTER TABLE `info_voyage`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `jours`
--
ALTER TABLE `jours`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000039;
--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `periode`
--
ALTER TABLE `periode`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `periodevoyage`
--
ALTER TABLE `periodevoyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `picto`
--
ALTER TABLE `picto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pictovoyage`
--
ALTER TABLE `pictovoyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `temperature`
--
ALTER TABLE `temperature`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user_admin`
--
ALTER TABLE `user_admin`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT pour la table `voyageutilisateur`
--
ALTER TABLE `voyageutilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
