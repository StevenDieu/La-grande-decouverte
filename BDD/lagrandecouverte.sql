-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 17 Juin 2015 à 14:10
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `description`, `date`, `time`, `image_1`, `image_2`, `image_3`) VALUES
(21, 'Vacances, Voyages & Loisirs, Genève 2015', 'La Grande Découverte sera présente sur le salon "Vacances, Voyages & Loisirs, Genève 2015" en Novembre prochain', '2015-05-27', '09:44:05', 'actu1_1.jpg', 'actu1_2.jpg', 'actu1_3.jpg'),
(22, 'Zambie : bientôt disponible', 'Nous sommes en train  de vous préparer un voyage en Zambie. \nPréparez-vous à un voyage mélangeant Safari et découverte d''un peuple attachant.', '2015-05-27', '09:58:33', 'actu2_1.jpg', 'actu2_2.jpg', 'actu2_3.jpg'),
(23, '18 jours, 18 tribus à Madagascar', 'Préparez-vous ! Prochainement vous pourrez vous inscrire pour un voyage inoubliable, 18 jours sur l''île de Madagascar dans les 18 tribus qui peuple l''île.', '2015-05-27', '10:15:25', 'actu3_1.jpg', 'actu3_2.jpg', 'actu3_3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `increment_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

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
(38, 'qsd', 'qsd', 'Votre Société', 'Votre Email', 'qsd', 'Complément de votre Adresse', 0, 'qsd', '62', 'FR', 0, 0, 1, 1000038),
(39, 'Dieu', 'Steven', '', 'groover.dieu@gmail.com', '5 bis rue du 4eme RIC', '', 60310, 'Gury', 'Oise', 'France', 671698516, 0, 11, 1000039),
(40, 'alex', 'alex', '', 'alexb@gmail.com', '92 rue de bretagne', '', 62300, 'lens', 'Aube', 'France', 2147483647, 0, 12, 1000040);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `carnetvoyage`
--

INSERT INTO `carnetvoyage` (`id`, `id_utilisateur`, `id_voyage`, `titre`, `prive`, `date_creation`) VALUES
(4, 1, 64, 'Le grand départ', 1, '2015-05-23 19:04:00'),
(22, 1, 75, 'Le voyage inoubliable', 0, '2015-05-23 19:44:19'),
(23, 1, 65, 'Voyage que j&#146;ai écris', 0, '2015-05-23 19:44:19'),
(24, 1, 64, 'Le nouveau départ - Carnet de voyage', 0, '2015-05-23 19:44:19'),
(25, 11, 76, 'Mon carnet de voyage', 0, '2015-05-27 09:59:50');

-- --------------------------------------------------------

--
-- Structure de la table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Structure de la table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL,
  `label` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Contenu de la table `departements`
--

INSERT INTO `departements` (`id`, `code`, `label`) VALUES
(1, '1', 'Ain'),
(2, '2', 'Aisne'),
(3, '3', 'Allier'),
(4, '4', 'Alpes de haute provence'),
(5, '5', 'Hautes alpes'),
(6, '6', 'Alpes maritimes'),
(7, '7', 'Ardèche'),
(8, '8', 'Ardennes'),
(9, '9', 'Ariège'),
(10, '10', 'Aube'),
(11, '11', 'Aude'),
(12, '12', 'Aveyron'),
(13, '13', 'Bouches du rhône'),
(14, '14', 'Calvados'),
(15, '15', 'Cantal'),
(16, '16', 'Charente'),
(17, '17', 'Charente maritime'),
(18, '18', 'Cher'),
(19, '19', 'Corrèze'),
(20, '21', 'Côte d''or'),
(21, '22', 'Côtes d''Armor'),
(22, '23', 'Creuse'),
(23, '24', 'Dordogne'),
(24, '25', 'Doubs'),
(25, '26', 'Drôme'),
(26, '27', 'Eure'),
(27, '28', 'Eure et Loir'),
(28, '29', 'Finistère'),
(29, '30', 'Gard'),
(30, '31', 'Haute garonne'),
(31, '32', 'Gers'),
(32, '33', 'Gironde'),
(33, '34', 'Hérault'),
(34, '35', 'Ile et Vilaine'),
(35, '36', 'Indre'),
(36, '37', 'Indre et Loire'),
(37, '38', 'Isère'),
(38, '39', 'Jura'),
(39, '40', 'Landes'),
(40, '41', 'Loir et Cher'),
(41, '42', 'Loire'),
(42, '43', 'Haute Loire'),
(43, '44', 'Loire Atlantique'),
(44, '45', 'Loiret'),
(45, '46', 'Lot'),
(46, '47', 'Lot et Garonne'),
(47, '48', 'Lozère'),
(48, '49', 'Maine et Loire'),
(49, '50', 'Manche'),
(50, '51', 'Marne'),
(51, '52', 'Haute Marne'),
(52, '53', 'Mayenne'),
(53, '54', 'Meurthe et Moselle'),
(54, '55', 'Meuse'),
(55, '56', 'Morbihan'),
(56, '57', 'Moselle'),
(57, '58', 'Nièvre'),
(58, '59', 'Nord'),
(59, '60', 'Oise'),
(60, '61', 'Orne'),
(61, '62', 'Pas de Calais'),
(62, '63', 'Puy de Dôme'),
(63, '64', 'Pyrénées Atlantiques'),
(64, '65', 'Hautes Pyrénées'),
(65, '66', 'Pyrénées Orientales'),
(66, '67', 'Bas Rhin'),
(67, '68', 'Haut Rhin'),
(68, '69', 'Rhône'),
(69, '70', 'Haute Saône'),
(70, '71', 'Saône et Loire'),
(71, '72', 'Sarthe'),
(72, '73', 'Savoie'),
(73, '74', 'Haute Savoie'),
(74, '75', 'Paris'),
(75, '76', 'Seine Maritime'),
(76, '77', 'Seine et Marne'),
(77, '78', 'Yvelines'),
(78, '79', 'Deux Sèvres'),
(79, '80', 'Somme'),
(80, '81', 'Tarn'),
(81, '82', 'Tarn et Garonne'),
(82, '83', 'Var'),
(83, '84', 'Vaucluse'),
(84, '85', 'Vendée'),
(85, '86', 'Vienne'),
(86, '87', 'Haute Vienne'),
(87, '88', 'Vosges'),
(88, '89', 'Yonne'),
(89, '90', 'Territoire de Belfort'),
(90, '91', 'Essonne'),
(91, '92', 'Hauts de Seine'),
(92, '93', 'Seine Saint Denis'),
(93, '94', 'Val de Marne'),
(94, '95', 'Val d''Oise'),
(95, '2A', 'Corse du Sud'),
(96, '2B', 'Haute Corse');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `deroulement_voyage`
--

INSERT INTO `deroulement_voyage` (`id`, `titre`, `texte`, `photo`, `jour`, `idVoyage`) VALUES
(3, '', ' ', 'aze', 0, 70),
(4, '', ' ', 'aze', 0, 71),
(5, '', ' ', 'aze', 0, 72),
(6, '', ' ', 'aze', 0, 73),
(7, '', ' ', 'aze', 0, 74),
(8, '', ' ', 'aze', 0, 75),
(9, '', ' ', 'aze', 0, 76);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(1024) NOT NULL,
  `reponse` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  UNIQUE KEY `id` (`id`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `fichevoyage`
--

INSERT INTO `fichevoyage` (`id`, `visible`, `id_carnetvoyage`, `titre`, `contenu`, `id_utilisateur`, `date_creation`) VALUES
(1, 0, 4, 'Jour 1 : Arrivée à Santiago 2', '<p><br></p><p><br><br><img alt="" class="fr-image-dropped fr-fil fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/fe90d0ea2ff3f74763b2319345329d49df1fdd27.jpg" width="370">                                Arrivée à Santiago après 14 heures de vol. Accueil à l''aéroport par votre accompagnateur et transfert à votre hôtel dans le centre de Santiago. Après un premier briefing du guide, <br>                                temps libre pour découverte individuelle...<br><br><br><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br>                                La capitale chilienne est une immense mégalopole regroupant à elle seule près d''un tiers de la population du pays. <br>                                Pourtant, à s''y balader, on ne croirait pas que tant de gens se pressent dans cet espace verdoyant aux innombrables parcs, <br>                                aux trottoirs fleuris et aux rues longées d''arbres. Ici, tout est vert. <br></p><p><br></p><p><br></p><p><br></p><p><br><br><img alt="" class="fr-fir fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/b603605e0fd609e802e0598a50c34bc042f20133.jpg" width="321">                                Chaque matin, des employés de la ville arrosent consciencieusement les nombreuses parcelles d''herbes que l''on trouve un peu partout. <br>                                Il semble vraiment faire bon vivre à Santiago, à 100km de la mer et moitié moins des stations de ski. Nous avons vraiment beaucoup aimé cette ville, <br>                                notre seul regret sera de ne pas nous y être un peu plus promenées à pied ; sa taille et la proximité du métro nous ont découragées, mais elle mérite d''être parcourue plus longuement. <br>                                Nous avons particulièrement aimé les quartiers de Providencia, où nous logions, et de Bellavista avec ses petites maisons de toutes les couleurs.<br><br><br><br>                                        Suggestion de visites : La Chascona, l''une des trois maisons du célèbre poète et écrivain chilien Pablo Neruda ; <br>                                        l''un des cerros (collines) de la ville, par exemple Santa Lucia pour son charme ; le marché central ; la Place d''Armes et la Cathédrale ; <br>                                        le Palais de la Moneda.</p><p><br></p>', 1, '2015-05-23 19:04:41'),
(3, 1, 4, 'Jour 1 : Arrivée à Santiago', '<p><br></p><p><br><br><img alt="" class="fr-image-dropped fr-fil fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/fe90d0ea2ff3f74763b2319345329d49df1fdd27.jpg" width="370">                                Arrivée à Santiago après 14 heures de vol. Accueil à l''aéroport par votre accompagnateur et transfert à votre hôtel dans le centre de Santiago. Après un premier briefing du guide, <br>                                temps libre pour découverte individuelle...<br><br><br><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br>                                La capitale chilienne est une immense mégalopole regroupant à elle seule près d''un tiers de la population du pays. <br>                                Pourtant, à s''y balader, on ne croirait pas que tant de gens se pressent dans cet espace verdoyant aux innombrables parcs, <br>                                aux trottoirs fleuris et aux rues longées d''arbres. Ici, tout est vert. <br></p><p><br></p><p><br></p><p><br></p><p><br><br><img alt="" class="fr-fir fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/b603605e0fd609e802e0598a50c34bc042f20133.jpg" width="321">                                Chaque matin, des employés de la ville arrosent consciencieusement les nombreuses parcelles d''herbes que l''on trouve un peu partout. <br>                                Il semble vraiment faire bon vivre à Santiago, à 100km de la mer et moitié moins des stations de ski. Nous avons vraiment beaucoup aimé cette ville, <br>                                notre seul regret sera de ne pas nous y être un peu plus promenées à pied ; sa taille et la proximité du métro nous ont découragées, mais elle mérite d''être parcourue plus longuement. <br>                                Nous avons particulièrement aimé les quartiers de Providencia, où nous logions, et de Bellavista avec ses petites maisons de toutes les couleurs.<br><br><br><br>                                        Suggestion de visites : La Chascona, l''une des trois maisons du célèbre poète et écrivain chilien Pablo Neruda ; <br>                                        l''un des cerros (collines) de la ville, par exemple Santa Lucia pour son charme ; le marché central ; la Place d''Armes et la Cathédrale ; <br>                                        le Palais de la Moneda.</p><p><br></p>', 1, '2015-05-23 19:04:41'),
(4, 1, 4, 'Jour 1 : Arrivée à Santiago', '<p><br></p><p><br><br><img alt="" class="fr-image-dropped fr-fil fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/fe90d0ea2ff3f74763b2319345329d49df1fdd27.jpg" width="370">                                Arrivée à Santiago après 14 heures de vol. Accueil à l''aéroport par votre accompagnateur et transfert à votre hôtel dans le centre de Santiago. Après un premier briefing du guide, <br>                                temps libre pour découverte individuelle...<br><br><br><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br>                                La capitale chilienne est une immense mégalopole regroupant à elle seule près d''un tiers de la population du pays. <br>                                Pourtant, à s''y balader, on ne croirait pas que tant de gens se pressent dans cet espace verdoyant aux innombrables parcs, <br>                                aux trottoirs fleuris et aux rues longées d''arbres. Ici, tout est vert. <br></p><p><br></p><p><br></p><p><br></p><p><br><br><img alt="" class="fr-fir fr-dii" src="http://localhost/TVAFS-1.0/media/carnet/article/b603605e0fd609e802e0598a50c34bc042f20133.jpg" width="321">                                Chaque matin, des employés de la ville arrosent consciencieusement les nombreuses parcelles d''herbes que l''on trouve un peu partout. <br>                                Il semble vraiment faire bon vivre à Santiago, à 100km de la mer et moitié moins des stations de ski. Nous avons vraiment beaucoup aimé cette ville, <br>                                notre seul regret sera de ne pas nous y être un peu plus promenées à pied ; sa taille et la proximité du métro nous ont découragées, mais elle mérite d''être parcourue plus longuement. <br>                                Nous avons particulièrement aimé les quartiers de Providencia, où nous logions, et de Bellavista avec ses petites maisons de toutes les couleurs.<br><br><br><br>                                        Suggestion de visites : La Chascona, l''une des trois maisons du célèbre poète et écrivain chilien Pablo Neruda ; <br>                                        l''un des cerros (collines) de la ville, par exemple Santa Lucia pour son charme ; le marché central ; la Place d''Armes et la Cathédrale ; <br>                                        le Palais de la Moneda.</p><p><br></p>', 1, '2015-05-23 19:04:41'),
(6, 0, 25, 'test', '<p>test<img class="fr-fin fr-dib" alt="Image title" src="http://localhost/TVAFS-1.0/media/carnet/article/65d1aee891366a78748520dfe27aa688744da58c.png" width="300"></p>', 11, '2015-05-27 10:15:24'),
(7, 0, 25, 'test', '<p>test<img class="fr-fin fr-dib" alt="Image title" src="http://localhost/TVAFS-1.0/media/carnet/article/8ad666dc2f8467b25fb895e0ddbc0ab5631a9d5e.png" width="300"></p>', 11, '2015-05-27 10:15:51');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` text,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `lien`, `nom`) VALUES
(13, 'C:/Users/steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/TVAFS-1.0/assets/images/utilisateur/photoProfil/46492c817efd3f3635ffd490d9aad9ab.jpg', '46492c817efd3f3635ffd490d9aad9ab.jpg'),
(14, 'C:/Users/steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/TVAFS-1.0/assets/images/utilisateur/photoProfil/2caa96fb7255d55fe4f90c0652fa0755.jpg', '2caa96fb7255d55fe4f90c0652fa0755.jpg'),
(15, 'C:/Users/steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/TVAFS-1.0/assets/images/utilisateur/photoProfil/648624cb4747c8d22e848d06a7d9a011.jpg', '648624cb4747c8d22e848d06a7d9a011.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

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
(64, '2015-05-28', '2015-05-31', 'Paris', '', 'formalité', 'à savoir', 'comprenant', 0, 0, 0, 0, 64),
(65, '2015-04-28', '2015-05-13', 'Paris', 'qsd', 'formalité', 'à savoir', 'comprenant', 0, 0, 0, 0, 65),
(67, '2016-07-10', '2016-07-27', 'Paris', 'Oulan-Bator', 'formalité', 'à savoir', 'comprenant', 12, 2430, 0, 20, 75),
(68, '0000-00-00', '0000-00-00', 'Paris', 'Athene', ' formalité', ' à savoir', 'comprenant', 12, 2430, 0, 20, 76);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(1024) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `mail`) VALUES
(1, 'groover.dieu@gmail.com'),
(2, 'groover.dieu@gmail.com'),
(3, 'steven.dieu1@gmail.com'),
(4, 'groover.dieu@gmail.com'),
(5, 'groover.dieu@gmail.com'),
(6, 'groover.dieu@gmail.com'),
(7, 'groover.dieu@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `id_info_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000041 ;

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
(1000038, '2015-05-26 09:04:52', 1, 38, 2, 'CHECKMO', '258,18', '::1', '2 581,80', '2 323,62', '2 065,44', '516,36', 64, 63),
(1000039, '2015-05-27 08:10:44', 11, 39, 2, 'CB', '486,00', '127.0.0.1', '4 860,00', '4 374,00', '3 888,00', '972,00', 75, 67),
(1000040, '2015-05-27 11:54:05', 12, 40, 2, 'PAYPAL', '258,18', '127.0.0.1', '2 581,80', '2 323,62', '2 065,44', '516,36', 64, 63);

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `dob` date NOT NULL,
  `id_order` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

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
(36, 'qsd', 'qsd', '', '2015-05-08', 1000038),
(37, 'Dieu', 'Steven', '', '1992-10-26', 1000039),
(38, 'Dieu', 'Angélique', '', '1988-10-10', 1000039),
(39, 'alex', 'alex', '', '2015-05-13', 1000040),
(40, 'alex2', 'alrx2', '', '2015-05-12', 1000040);

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
  `prenom` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `banni` tinyint(1) NOT NULL,
  `security` int(1) NOT NULL,
  `token` varchar(45) NOT NULL,
  `lien_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `password`, `mail`, `description`, `ip`, `banni`, `security`, `token`, `lien_image`) VALUES
(1, 'Doe', 'John', '0a5b3913cbc9a9092311630e869b4442', 'aze', 'Je m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ...Je m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ... Je m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ... $user[0]->descriptionJe m''appelle John Doe, je suis étudiant sur Lille. Les sujets qui m''intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ... $user[0]->description', '0', 0, 0, '', ''),
(2, 'boussemart', 'alexandre', 'Aze123aze', '0', '', '0', 0, 2, '', ''),
(3, 'azeaze', 'azeaze', 'Azerty1az', '0', '', '0', 0, 2, '', ''),
(4, 'boussemart', 'alexandre', 'Azerty123', '0', '', '0', 1, 2, '', ''),
(5, 'boussemart', 'alexandre', 'Azerty123', '0', '', '0', 0, 2, '', ''),
(6, 'boussemart', 'alexandre', 'e719bb7909ccbf63ec2103c92dfffc0c', '0', '', '0', 0, 2, '', ''),
(7, 'boussemart', 'alexandre', '4c3b6c7517e9f780744f6582f2d36fb6', '0', '', '0', 1, 2, '', ''),
(8, 'boussemart', 'alexandre', '6584a0cdbc0a409009c798fca3d94688', 'alexandre.boussemart94@gmail.com', '', '0', 1, 2, '', ''),
(9, 'boussemart', 'alexandre', '757d4a9b28c16197f457ae6844074831', 'alexandre.boussemart94@gmail.com', '', '0', 0, 2, '', ''),
(10, 'Dieu', 'Steven', 'f11b2ce0790dc2546d11ce496e9762d0', 'groover.dieu@gmail.com', '', '1270', 0, 2, '', ''),
(11, 'Dieu', 'Steven', '81afaad334faba456a0871c6e24e04ae', 'steven.dieu@gmail.com', 'Bonjour je m''appelle Steven Dieu', '1270', 0, 2, '', ''),
(12, 'alex', 'boussemart', '2e0cdc7e96b710f55e2075916f6c1955', 'alexb@gmail.com', 'bonjour', '1270', 0, 2, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `image_slider_1`, `image_slider_2`, `image_slider_3`, `titre`, `phrase_accroche`, `duree`, `image_sous_slider`, `description_first_bloc`, `description_second_bloc`, `description_third_bloc`, `drapeau`, `capital`, `continent`, `meteo_image`, `meteo_temperature`, `picto_1`, `picto_2`, `picto_3`, `picto_4`, `picto_5`, `picto_6`, `villes_principales`, `religion`, `nombre_habitant`, `monnaie`, `fete`, `langue_officielle`, `image_baniere_1`, `image_baniere_2`, `image_baniere_3`, `image_baniere_4`, `image_description_1`, `image_description_2`, `image_description_3`, `image_description_4`, `image_description_5`, `image_description_6`, `lattitude`, `longitude`) VALUES
(64, '8merof6u1.jpg', 'o8u46nfq2.jpg', '8h93mj8l3.jpg', 'Au coeur du Chili', 'Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l''île de Pâques promettent au voyageur une merveilleuse découverte.', 10, 'qfuzeyv5paysage.jpg', 'Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.', '<p>Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.</p>\n<p>La deuxième partie de votre voyage nous transporte à l''autre bout de la cordillère des Andes. Nous quitterons l''Altiplano et les paysages lunaires de l''Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>\n<p>Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe!</p>', 'Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d''exception pour une découverte des multiples facettes d''un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie... 12', 'q9zz35828sqmep5hchili.png', 'SANTIAGO DU CHILI', '13', '', 16, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Concep ción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas', 'Au Chili, la religion catholique est majoritaire.', 'Le Chili compte 16 60 000 habitants', 'Le Peso chi lien (CLP) est utilisé au Chili', 'Indépendance d u Chili, 18 Septembre (1810)', '''e spagnol est la langue officielle du Chili', '2btjwet31.jpg', 'f51r4ddm2.jpg', 'j5ynpvzj3.jpg', '6hfj56k44.jpg', '4d4a2sgodescription1.jpg', 'uv33d9otdescription2.jpg', 'zqmy98x6description3.jpg', 'h31s4zdndescription4.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', -33.4691, -70.642),
(65, '8merof6u1.jpg', 'o8u46nfq2.jpg', '8h93mj8l3.jpg', 'Au coeur du Chili', 'Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l''île de Pâques promettent au voyageur une merveilleuse découverte.', 10, 'qfuzeyv5paysage.jpg', 'Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.', '<p>Nous débuterons ce voyage sous les tropiques, dans le désert d''Atacama, dans un paysage couronné de volcans, ponctué de lagunes multicolores, de salars, et de surprenants geysers. Une petite incursion en territoire bolivien vers la laguna Verde nous permettra d''appréhender les merveilles du Sud Lipez. Cette première partie du voyage sera l''occasion d''observer les constellations australes et de profiter de la limpidité exceptionnelle du ciel lors d''une soirée en compagnie d''un astronome.</p>\n<p>La deuxième partie de votre voyage nous transporte à l''autre bout de la cordillère des Andes. Nous quitterons l''Altiplano et les paysages lunaires de l''Atacama pour rejoindre la Patagonie et ses terres polaires, parsemées de lacs, de glaciers et entrecoupées de sommets déchiquetés. Ici tout est vert, bleu et blanc.</p>\n<p>Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe!</p>', 'Après un court passage par le mythique port de Valparaiso, l''une des villes les plus singulières d''Amérique du Sud avec ses collines, son funiculaire et son air de bohème, nous rechausserons nos bottes de sept lieues pour terminer notre périple près de 4000 km plus à l''Ouest en plein Océan Pacifique. La mystérieuse et prodigieuse île de Pâques nous enchantera par une combinaison unique entre nature et culture sur l''une des terres les plus isolées du globe! Bref, nous vous proposons ici un voyage d''exception pour une découverte des multiples facettes d''un pays atypique avec la tête sous les tropiques, les pieds en Antarctique et les mains tendues vers la Polynésie... 12', 'q9zz35828sqmep5hchili.png', 'SANTIAGO DU CHILI', '13', '', 16, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Concep ción, Valparaíso, Viña del Mar, Talcahuano, Antofagasta, Temuco, Punta Arenas', 'Au Chili, la religion catholique est majoritaire.', 'Le Chili compte 16 60 000 habitants', 'Le Peso chi lien (CLP) est utilisé au Chili', 'Indépendance d u Chili, 18 Septembre (1810)', '''e spagnol est la langue officielle du Chili', '2btjwet31.jpg', 'f51r4ddm2.jpg', 'j5ynpvzj3.jpg', '6hfj56k44.jpg', '4d4a2sgodescription1.jpg', 'uv33d9otdescription2.jpg', 'zqmy98x6description3.jpg', 'h31s4zdndescription4.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', -33.4691, -70.642),
(75, '9bdcmix8Travel Mongolia Naadam.jpg', '35ap1qbbslider2.JPG', 'v4ct3yrjnadam_20.jpg', 'Le Naadam en folie', 'Durant deux jours entiers, vous vivrez au rythme du Naadam, fête nationale Mongole qui attire tous les cavaliers de la steppe. Vous poursuivrez ensuite, plein Nord croisant campements et yourtes, entre lacs et montagnes à la conquête du pays Tsaatan. Et, tant sur les rives de l’immense lac Khovsgöl que dans le Khangaï, vous partagerez le quotidien des descendants de Gensis Khan. ', 15, 'y7evvizcmongolie17bis.jpg', '15 jours, balades et visites. Groupe : 4 à 15 participants. Étapes : 5 à 7h en 4x4. Nuits en hôtel, sous tente et yourte. Portage par véhicule. Guide local francophone.\n\nFormalités : passeport valide 6 mois après la date de retour + visa. Vols réguliers : Aeroflot, Korean Air, Turkish, Hunnu Air.\n\nPrix base 4 pers. mini. de Paris tout compris sauf les repas à Oulan-Bator, les boissons, les entrées dans les musées et sites à Oulan-Bator, les spectacles,les assurances.', 'Le déroulement du programme est donné à titre indicatif. Les étapes peuvent être modifiées sur place pour des raisons météorologiques, de sécurité, d’organisation, d’horaires d’avion ou tout évènement inattendu. Dans ces moments difficiles, le guide local fera le maximum pour atténuer les effets de ces évènements indépendants de notre volonté.', '15 jours, balades et visites. Groupe : 4 à 15 participants. Étapes : 5 à 7h en 4x4. Nuits en hôtel, sous tente et yourte. Portage par véhicule. Guide local francophone.\n\nFormalités : passeport valide 6 mois après la date de retour + visa. Vols réguliers : Aeroflot, Korean Air, Turkish, Hunnu Air.\n\nPrix base 4 pers. mini. de Paris tout compris sauf les repas à Oulan-Bator, les boissons, les entrées dans les musées et sites à Oulan-Bator, les spectacles,les assurances.', 'r35dc812téléchargement.png', 'Oulan-Bator', '15', '', 30, '1hugk5kp2owetp3qsunblock.png', 'inzruzta3solz6kvgoogle.png', '34vhqb5hc5rxkvphexcursion.png', 'bdtxx7gzn8srisxqt-shirt.png', 'd1r7zj9fc934uq9ocar.png', 'x5lutszyrzgwonuwswimming.png', 'Oulan-Bator, Erdenet, Darhan, Choybalsan, Ölgiy, Saynshand, Ulaangom, Hovd, Mörön, Uliastay', 'En Mongolie, la religion Bouddhisme est majoritaire.', '2 754 685', 'Le tugrik (MNT?) est utilisé en Mongolie', 'Le Naadam en Mongolie, Du 11 au 13 juillet', '''e spagnol est la langue officielle du Chili', 'ybve6j8vmontage.jpg', 'c86vtublmorinii_uraldaan_1.jpg', 'cupcn5wkMongolieYourte_MichelSetboun.jpg', 'ibns67k511.jpg', 'Archeries000.jpg', 'mongolie_cavalier_hunta_fotolia_1.jpg', 'morinii_uraldaan_1000.jpg', 'MarcMellet970.jpg', 'ceremonie.jpg', 'the_nadaam_festival_dreamstime.jpg', 47.9077, 106.883),
(76, '2t3a3gt8F064-parthenon-a-f.jpg', '6ndhpd4r1.jpg', 'aszfypbmplaka-area-and-the-acropolis-on-an-autumn-day.jpg', 'A la decouverte de la grece !', 'La Grèce est un pays rempli d’histoire, chaque visite est passionnante et nous replonge dans la naissance de notre civilisation.', 9, 'qfuzeyv5paysage.jpg', 'Nous avons décidé de découper notre voyage en Grèce en deux parties, la première sera la découverte d’Athènes et la visite de certains sites sur le continent, puis la seconde sera la visite de l’une des nombreuses îles de la Grèce : Rhodes.\r\nVoici le détail de  l’aventure qui vous attend.', 'Visiter le berceau de la civilisation moderne, une ville chargée d’histoire très ancienne.\r\nNotre découverte d’Athènes a été remplie d’émotion et de surprise, la ville est sublime et nous plonge dans l’histoire de l’Homme.\r\nL’omniprésence de la mythologie, des dieux et des philosophes demande au moins 3 jours pour faire le tour de cette ville unique au monde.\r\n\r\nIl faudra faire très attention lors des visites de ruines, car les sites ferment très tôt (14:00 ou 15:00), il faut donc s’organiser correctement pour être certain de ne pas rater de visites.\r\n\r\nL’Acropole\r\n\r\nLe Parthénon\r\n\r\nMagnifique sanctuaire à la gloire de la déesse Athéna (déesse de la guerre et de la sagesse) sur les hauteurs d’Athènes, le Parthénon peut être considéré comme le symbole de la ville, voir même de toute la Grèce.\r\nCette visite est obligatoire et peut se faire à toute saison, toutefois pour éviter le flux de touriste, je recommande de faire la visite le matin de bonne heure afin de pouvoir profiter du lieu en toute tranquillité.\r\nLe monument étant très vieux (-449 avant JC), il peut arriver qu’il subisse des travaux de restauration.\r\nÉrechthéion\r\n\r\nTemple dédié à la déesse Athéna, il surplombe la ville d’Athènes et est très connu, notamment grâce aux six statues de jeune femme (les Caryatides).\r\nEncore un monument incontournable de la visite d’Athènes, qui lui aussi peut parfois être en cours de restauration.L’Agora romaine et la Tour des Vents\r\n\r\nAncienne place publique, les ruines de l’Agora Romaine d’Athènes présente un intérêt dans la découverte de la ville et de son histoire.\r\nJe recommande de s’attarder sur la Tour des Vents, qui est une ancienne horloge hydraulique, remarquable avec ces sculptures en haut de chacune des faces.Théâtre de Dionysos\r\n\r\nLes ruines du Théâtres de Dionysos (dieu du vin) sont situées au sud de l’Acropole et sont accessibles en métro (ligne 2), on peut s’assoir  sur les anciennes places du théâtre.', 'La Vieille Ville de Rhodes (Old Town)\r\n\r\nLa vielle ville est entourée de remparts datant du XIVème siècle, se balader dans la ville (entrer par la porte de St-Antoine) est un moment un peu magique, car l’architecture est d’époque (surtout sur la rue Chevaliers) et les monuments ne manquent pas.\r\nEntre la tour de l’horloge et la mosquée de Soliman et en passant par le palais du Grand Maître, la balade est des plus intéressante.\r\nLindos\r\n\r\nLindos se situe sur la côte Est de l’île de Rhodes, il est possible de louer un petite voiture ou un scooter, mais nous avions préféré un quad pour explorer un peu les côtes.\r\nElle possède une sublime acropole dont les vestiges peuvent être visités tous les jours.Si on a pas envie de monter à pieds, on peut toujours utiliser un âne pour aller plus vite et sans se fatiguer (d’ailleurs cette « attraction » a complétement polluer la petite ville).\r\nLa ville est très animée, on y a passé une superbe soirée en prenant un repas sur une des nombreuses terrasses sur les toits de la v', 'k7lz32ondrapeau_grece.png', 'Athènes', '13', '', 20, 'c934uq9ocar.png', 'c5rxkvphexcursion.png', '3solz6kvgoogle.png', '2owetp3qsunblock.png', 'rzgwonuwswimming.png', 'n8srisxqt-shirt.png', 'Athènes, Thessaloniki, Le Pirée, Patras, Iraklio, Peristeria, Larissa, Khallithéa, Nikéa', 'Église orthodoxe', '11,03 millions', 'euros', 'Fête nationale (Annonciation) 25 Mars', 'Le grecqye', 'qtiemdwueye_view.jpg', 'c86vtublmorinii_uraldaan_1.jpg', 'xck8e2yzville_rhodes_-_ville_medievale_003_(place_hippocrate).jpg', '5zj2xp6slindos-by-night.jpg', 'hf6j9smpville_rhodes_-_ville_medievale_003_(place_hippocrate).jpg', 'uv33d9otdescription2.jpg', 'jpl3z8qteye_view.jpg', 'vxmyrd9aRhodes_01_1534003a.jpg', '5ukfjwgjdescription5.jpg', 'zijcvr6bdescription6.jpg', 37, 23);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `voyageutilisateur`
--

INSERT INTO `voyageutilisateur` (`id`, `nbPersonnes`, `utilisateur_id`, `voyage_id`, `prix_total`, `assurance`) VALUES
(1, 2, 11, 76, 4000, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
