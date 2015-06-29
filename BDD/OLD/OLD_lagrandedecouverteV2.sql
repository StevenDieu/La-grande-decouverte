-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Juin 2015 à 09:30
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lagrandedecouverte`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `actualite_copy1`
--

CREATE TABLE IF NOT EXISTS `actualite_copy1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `actualite_copy2`
--

CREATE TABLE IF NOT EXISTS `actualite_copy2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `societe` varchar(255) DEFAULT NULL,
  `email` varchar(1024) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `complement_adresse` varchar(255) DEFAULT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `fax` int(11) DEFAULT NULL,
  `id_departements` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_billing_user1_idx` (`id_utilisateur`),
  KEY `fk_billing_departements1_idx` (`id_departements`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `carnetvoyage`
--

CREATE TABLE IF NOT EXISTS `carnetvoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `prive` tinyint(1) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_utilisateur` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carnetvoyage_utilisateur1_idx` (`id_utilisateur`),
  KEY `fk_carnetvoyage_voyage1_idx` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `value` text,
  `acrive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) DEFAULT NULL,
  `tag` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `continent`
--

INSERT INTO `continent` (`id`, `name`, `tag`) VALUES
(1, 'Afrique', 'AFRIQUE'),
(2, 'Amérique du nord', 'AMERIQUE_DU_NORD'),
(3, 'Amérique du sud', 'AMERIQUE_DU_SUD'),
(4, 'Asie', 'ASIE'),
(5, 'Europe', 'EUROPE'),
(6, 'Océanie', 'OCEANIE'),
(7, 'Antarctique', 'ANTARTICQUE');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `deroulement_voyage`
--

CREATE TABLE IF NOT EXISTS `deroulement_voyage` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) NOT NULL,
  `texte` text NOT NULL,
  `jour` int(11) DEFAULT NULL,
  `id_voyage` int(11) NOT NULL,
  `id_images` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_deroulement_voyage_voyage1_idx` (`id_voyage`),
  KEY `fk_deroulement_voyage_images1_idx` (`id_images`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1024) DEFAULT NULL,
  `reponse` varchar(45) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fichevoyage`
--

CREATE TABLE IF NOT EXISTS `fichevoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visible` tinyint(1) DEFAULT NULL,
  `titre` char(90) DEFAULT NULL,
  `contenu` longtext,
  `date_creation` timestamp NULL DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_carnetvoyage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fichevoyage_utilisateur1_idx` (`id_utilisateur`),
  KEY `fk_fichevoyage_carnetvoyage1_idx` (`id_carnetvoyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` text NOT NULL,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `images_actualite`
--

CREATE TABLE IF NOT EXISTS `images_actualite` (
  `id_actualite` int(11) NOT NULL,
  `lien` text,
  `nom` text,
  PRIMARY KEY (`id_actualite`),
  KEY `fk_actualite_has_images_actualite1_idx` (`id_actualite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image_baniere`
--

CREATE TABLE IF NOT EXISTS `image_baniere` (
  `id_voyage` int(11) NOT NULL,
  `lien` text,
  `nom` text,
  `image_banierecol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_voyage`),
  KEY `fk_voyage_has_images_voyage2_idx` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image_description`
--

CREATE TABLE IF NOT EXISTS `image_description` (
  `id_voyage` int(11) NOT NULL,
  `lien` text,
  `nom` text,
  PRIMARY KEY (`id_voyage`),
  KEY `fk_voyage_has_images_voyage3_idx` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image_picto`
--

CREATE TABLE IF NOT EXISTS `image_picto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `image_picto`
--

INSERT INTO `image_picto` (`id`, `lien`) VALUES
(52, 'produit/picto/f148cca38686919dd35acdf3452c48f0.png'),
(53, 'produit/picto/f87dae1a1d043cb493658c669c035980.png'),
(54, 'produit/picto/79dd25a98b264813dbcbb9beb08ed12d.png'),
(56, 'produit/picto/c775f1de20f43498275716c5315eaf53.png'),
(57, 'produit/picto/17ec81b4b372b720bc2ee7a18e2eecf1.png'),
(58, 'produit/picto/9ba2b5ef10714d3db7ae7f2ee2466c89.png');

-- --------------------------------------------------------

--
-- Structure de la table `image_slider`
--

CREATE TABLE IF NOT EXISTS `image_slider` (
  `id_voyage` int(11) NOT NULL,
  `lien` text,
  `nom` text,
  PRIMARY KEY (`id_voyage`),
  KEY `fk_voyage_has_images_voyage1_idx` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image_sous_slider`
--

CREATE TABLE IF NOT EXISTS `image_sous_slider` (
  `id_voyage` int(11) NOT NULL,
  `lien` text,
  `nom` text,
  PRIMARY KEY (`id_voyage`),
  KEY `fk_voyage_has_images_voyage3_idx` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `info_voyage`
--

CREATE TABLE IF NOT EXISTS `info_voyage` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `formalite` text,
  `asavoir` text,
  `comprenant` text,
  `place_dispo` int(11) NOT NULL,
  `prix` float NOT NULL,
  `special_price` int(11) DEFAULT NULL,
  `tva` float NOT NULL,
  `id_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_info_voyage_travel1_idx` (`id_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_voyage` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_billing` bigint(20) NOT NULL,
  `id_info_voyage` bigint(20) NOT NULL,
  `nb_participant` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `acompte` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `prix_total` varchar(255) NOT NULL,
  `reste_a_payer` varchar(255) NOT NULL,
  `sous_total` varchar(255) NOT NULL,
  `taxe` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`id_voyage`,`id_utilisateur`),
  KEY `fk_voyage_has_utilisateur_utilisateur2_idx` (`id_utilisateur`),
  KEY `fk_voyage_has_utilisateur_voyage2_idx` (`id_voyage`),
  KEY `fk_order_billing1_idx` (`id_billing`),
  KEY `fk_order_info_voyage1_idx` (`id_info_voyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `info` text,
  `dob` date NOT NULL,
  `id_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_participants_order1_idx` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capital` varchar(1024) DEFAULT NULL,
  `villes_principales` text,
  `religion` text,
  `nombre_habitant` text,
  `monnaie` text,
  `fete` text,
  `langue_officielle` varchar(45) DEFAULT NULL,
  `meteo_temperature` varchar(45) DEFAULT NULL,
  `id_meteo_image` int(11) NOT NULL,
  `id_drapeau_image` int(11) NOT NULL,
  `id_continent` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pays_continent1_idx` (`id_continent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `picto`
--

CREATE TABLE IF NOT EXISTS `picto` (
  `id_picto` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id_picto`,`id_voyage`),
  KEY `fk_picto_has_voyage_voyage1_idx` (`id_voyage`),
  KEY `fk_picto_has_voyage_picto1_idx` (`id_picto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `privilege` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `login`, `password`, `privilege`, `ip`) VALUES
(1, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(1024) NOT NULL,
  `description` mediumtext,
  `id_image` int(11) DEFAULT NULL,
  `ip` int(11) NOT NULL,
  `banni` tinyint(1) NOT NULL,
  `token` varchar(45) DEFAULT NULL,
  `id_images` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_utilisateur_images1_idx` (`id_images`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) DEFAULT NULL,
  `phrase_accroche` varchar(1024) DEFAULT NULL,
  `phrase_accroche_slider` varchar(255) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `description_first_bloc` varchar(1024) DEFAULT NULL,
  `description_second_bloc` varchar(1024) DEFAULT NULL,
  `description_third_bloc` varchar(1024) DEFAULT NULL,
  `lattitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `id_pays` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_voyage_pays1_idx` (`id_pays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `fk_billing_departements1` FOREIGN KEY (`id_departements`) REFERENCES `departements` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_billing_user1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `carnetvoyage`
--
ALTER TABLE `carnetvoyage`
  ADD CONSTRAINT `fk_carnetvoyage_utilisateur1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_carnetvoyage_voyage1` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `deroulement_voyage`
--
ALTER TABLE `deroulement_voyage`
  ADD CONSTRAINT `fk_deroulement_voyage_images1` FOREIGN KEY (`id_images`) REFERENCES `images` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_deroulement_voyage_voyage1` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `fichevoyage`
--
ALTER TABLE `fichevoyage`
  ADD CONSTRAINT `fk_fichevoyage_carnetvoyage1` FOREIGN KEY (`id_carnetvoyage`) REFERENCES `carnetvoyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fichevoyage_utilisateur1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `images_actualite`
--
ALTER TABLE `images_actualite`
  ADD CONSTRAINT `fk_actualite_has_images_actualite1` FOREIGN KEY (`id_actualite`) REFERENCES `actualite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image_baniere`
--
ALTER TABLE `image_baniere`
  ADD CONSTRAINT `fk_voyage_has_images_voyage2` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image_description`
--
ALTER TABLE `image_description`
  ADD CONSTRAINT `fk_voyage_has_images_voyage3` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image_slider`
--
ALTER TABLE `image_slider`
  ADD CONSTRAINT `fk_voyage_has_images_voyage1` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image_sous_slider`
--
ALTER TABLE `image_sous_slider`
  ADD CONSTRAINT `fk_voyage_has_images_voyage30` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `info_voyage`
--
ALTER TABLE `info_voyage`
  ADD CONSTRAINT `fk_info_voyage_travel1` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_billing1` FOREIGN KEY (`id_billing`) REFERENCES `billing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_info_voyage1` FOREIGN KEY (`id_info_voyage`) REFERENCES `info_voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voyage_has_utilisateur_utilisateur2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voyage_has_utilisateur_voyage2` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `fk_participants_order1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `fk_pays_continent1` FOREIGN KEY (`id_continent`) REFERENCES `continent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `picto`
--
ALTER TABLE `picto`
  ADD CONSTRAINT `fk_picto_has_voyage_picto1` FOREIGN KEY (`id_picto`) REFERENCES `image_picto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_picto_has_voyage_voyage1` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_images1` FOREIGN KEY (`id_images`) REFERENCES `images` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD CONSTRAINT `fk_voyage_pays1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
