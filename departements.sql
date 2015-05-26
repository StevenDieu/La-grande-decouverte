-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Mai 2015 à 15:27
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

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
-- Structure de la table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Contenu de la table `departements`
--

INSERT INTO `departements` (`id`, `code`, `label`) VALUES
(1, 1, 'Ain'),
(2, 2, 'Aisne'),
(3, 3, 'Allier'),
(4, 4, 'Alpes de haute provence'),
(5, 5, 'Hautes alpes'),
(6, 6, 'Alpes maritimes'),
(7, 7, 'Ardèche'),
(8, 8, 'Ardennes'),
(9, 9, 'Ariège'),
(10, 10, 'Aube'),
(11, 11, 'Aude'),
(12, 12, 'Aveyron'),
(13, 13, 'Bouches du rhône'),
(14, 14, 'Calvados'),
(15, 15, 'Cantal'),
(16, 16, 'Charente'),
(17, 17, 'Charente maritime'),
(18, 18, 'Cher'),
(19, 19, 'Corrèze'),
(20, 21, 'Côte d''or'),
(21, 22, 'Côtes d''Armor'),
(22, 23, 'Creuse'),
(23, 24, 'Dordogne'),
(24, 25, 'Doubs'),
(25, 26, 'Drôme'),
(26, 27, 'Eure'),
(27, 28, 'Eure et Loir'),
(28, 29, 'Finistère'),
(29, 30, 'Gard'),
(30, 31, 'Haute garonne'),
(31, 32, 'Gers'),
(32, 33, 'Gironde'),
(33, 34, 'Hérault'),
(34, 35, 'Ile et Vilaine'),
(35, 36, 'Indre'),
(36, 37, 'Indre et Loire'),
(37, 38, 'Isère'),
(38, 39, 'Jura'),
(39, 40, 'Landes'),
(40, 41, 'Loir et Cher'),
(41, 42, 'Loire'),
(42, 43, 'Haute Loire'),
(43, 44, 'Loire Atlantique'),
(44, 45, 'Loiret'),
(45, 46, 'Lot'),
(46, 47, 'Lot et Garonne'),
(47, 48, 'Lozère'),
(48, 49, 'Maine et Loire'),
(49, 50, 'Manche'),
(50, 51, 'Marne'),
(51, 52, 'Haute Marne'),
(52, 53, 'Mayenne'),
(53, 54, 'Meurthe et Moselle'),
(54, 55, 'Meuse'),
(55, 56, 'Morbihan'),
(56, 57, 'Moselle'),
(57, 58, 'Nièvre'),
(58, 59, 'Nord'),
(59, 60, 'Oise'),
(60, 61, 'Orne'),
(61, 62, 'Pas de Calais'),
(62, 63, 'Puy de Dôme'),
(63, 64, 'Pyrénées Atlantiques'),
(64, 65, 'Hautes Pyrénées'),
(65, 66, 'Pyrénées Orientales'),
(66, 67, 'Bas Rhin'),
(67, 68, 'Haut Rhin'),
(68, 69, 'Rhône'),
(69, 70, 'Haute Saône'),
(70, 71, 'Saône et Loire'),
(71, 72, 'Sarthe'),
(72, 73, 'Savoie'),
(73, 74, 'Haute Savoie'),
(74, 75, 'Paris'),
(75, 76, 'Seine Maritime'),
(76, 77, 'Seine et Marne'),
(77, 78, 'Yvelines'),
(78, 79, 'Deux Sèvres'),
(79, 80, 'Somme'),
(80, 81, 'Tarn'),
(81, 82, 'Tarn et Garonne'),
(82, 83, 'Var'),
(83, 84, 'Vaucluse'),
(84, 85, 'Vendée'),
(85, 86, 'Vienne'),
(86, 87, 'Haute Vienne'),
(87, 88, 'Vosges'),
(88, 89, 'Yonne'),
(89, 90, 'Territoire de Belfort'),
(90, 91, 'Essonne'),
(91, 92, 'Hauts de Seine'),
(92, 93, 'Seine Saint Denis'),
(93, 94, 'Val de Marne'),
(94, 95, 'Val d''Oise'),
(95, 2, 'Corse du Sud'),
(96, 2, 'Haute Corse');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
