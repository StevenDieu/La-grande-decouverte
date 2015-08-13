-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 13 Août 2015 à 14:01
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
-- Base de données :  `lagrandedecouverte`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
`id` int(11) NOT NULL,
  `titre` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `img1` varchar(1024) NOT NULL,
  `img2` varchar(1024) NOT NULL,
  `img3` varchar(1024) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `description`, `date`, `img1`, `img2`, `img3`, `active`) VALUES
(7, 'test d''une actualité', 'test d une actualité test d une actualité test d  ne actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une actualité test d une ac\nactualité test d une actualité test d une actualité test d une ac\n', '2015-06-29 12:55:49', 'dadaa-ad3a2700577bf946dba4ee25736bde74.jpg', 'ec4b9-5742b37d6738f0bbfb03b11e9cc64e7c.jpg', 'df074-lk-68df41af51c64aebcd3a95202ea4a0a3.jpg', 1),
(8, 'test d''une actualité 2', 'test d''une actualité 2 test d''une actualité 2 test d''une actualité 2 test d''une actus sdf gdfdg', '2015-07-19 16:47:19', 'cadfb-aze-3eff07ec4175292248ab94dbcf2b6a02.jpg', '93c50-aze-27cf2b241c1fbcae7aecae35a62bf504.jpg', '38d5d-aze-bc81ecb3b485c6ad4174a75713022678.jpg', 1),
(9, 'test d''une actualité 4', 'test d''une actualité 4 test d''une actualité 4 test d''une actualité 4 test d''une actualité 4 test d''une actualité 4', '2015-07-19 16:48:12', '22d69-aze-3eff07ec4175292248ab94dbcf2b6a02.jpg', '57aec-aze-27cf2b241c1fbcae7aecae35a62bf504.jpg', '46261-rionuit-685b6b155231e1f799ddc712019d9976.jpg', 1),
(10, 'test d''une actualité 4', 'test d''une actualité 4 test d''une actualité 4 test d''une actualité 4 test d''une actualité 4test d''une actualité 4 test d''une actualité 4 test d''une actualité 4 test d''une actualité 4', '2015-07-19 16:49:20', '8c135-aze-8f2fb7cb68b6ed71b33d73de41379722.jpg', '2be73-aze-3eff07ec4175292248ab94dbcf2b6a02.jpg', 'dbfc2-mk-1e1fa70b8faa213a13e565a24c573ce1.jpg', 1),
(11, 'Au coeur du Chili', 'Au coeur du Chili Au coeur du Chili Au coeur du Chili Au coeur du Chili Au coeur du Chili Au coeur du Chili Au coeur du Chili\n', '2015-07-24 11:02:14', '7cb5a-aze-bc81ecb3b485c6ad4174a75713022678.jpg', '', '', 1),
(12, 'test d''une actualité', 'Au coeur du Chili Au coeur du Chili Au coeur du Chili Au coeur du Chili\n', '2015-07-24 11:02:29', 'dd1b1-rionuit-685b6b155231e1f799ddc712019d9976.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `billing`
--

CREATE TABLE `billing` (
`id` bigint(20) NOT NULL,
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
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `billing`
--

INSERT INTO `billing` (`id`, `nom`, `prenom`, `societe`, `email`, `adresse`, `complement_adresse`, `code_postal`, `ville`, `pays`, `telephone`, `fax`, `id_departements`, `id_utilisateur`) VALUES
(5, 'k,', 'sqd', 'qsd', 'dss', 'qd', 'qds', 0, 'lens', 'France', 0, 0, 61, 1);

-- --------------------------------------------------------

--
-- Structure de la table `carnetvoyage`
--

CREATE TABLE `carnetvoyage` (
`id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `prive` tinyint(1) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_utilisateur` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `carnetvoyage`
--

INSERT INTO `carnetvoyage` (`id`, `titre`, `prive`, `date_creation`, `id_utilisateur`, `id_voyage`) VALUES
(1, 'premier carnet', 0, '2015-07-25 13:02:42', 1, 25),
(2, 'qsdqsd', 0, '2015-07-25 15:35:53', 1, 26),
(3, 'test du 3emem', 0, '2015-07-25 15:37:54', 1, 25);

-- --------------------------------------------------------

--
-- Structure de la table `cms`
--

CREATE TABLE `cms` (
`id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `value` text,
  `active` tinyint(1) DEFAULT NULL,
  `image` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cms`
--

INSERT INTO `cms` (`id`, `code`, `label`, `value`, `active`, `image`) VALUES
(2, 'info_tunnel', 'Informations première étape tunnel de commande', '<p>\n	info tunnel</p>\n', 1, '');
INSERT INTO `cms` (`id`, `code`, `label`, `value`, `active`, `image`) VALUES
(3, 'cgv_tunnel', 'cgv tunel', '\n<h1>Conditions générales de ventes</h1>\n<h2>Préambule—<h2>\n<p>Les prestations figurant sur le site internet http://www.lagrandecouverte.com, sont proposées par la société LGD, qui édite ce site sous la direction de publication de Georges Doe en sa qualité de président de la société LGD. Vous pouvez entrer en contact avec une personne physique au numéro d’appel suivant (0892 426 425) Le nom, la raison sociale, l’adresse et le numéro de téléphone de l’hébergeur du site sont indiqués sur le site.</p>\n<p><br></p>\n<p>Sur l’ensemble du site susvisé qu’elle édite, la société LGD propose à la vente les prestations suivantes :</p>\n<p>Voyages unique chez l’habitant</p>\n<p>les vols secs,</p>\n<p>les assurances voyage et responsabilité civile et dommages applicables aux prestations ci-dessus,</p>\n<p><br></p>\n<p><br></p>\n<p>LGD est une SAS au capital de 988 038 Euros, dont le siège social se situe Le Patio - Entrée B Etage 2, 684 avenue du club hippique, 13090 AIX EN PROVENCE, immatriculée au RCS d’AIX EN PROVENCE sous le numéro B 479 345 043, immatriculée au registre des opérateurs de voyages et de séjours sous le numéro IM013100142 ainsi que de la garantie APS, dont le numéro de TVA intracommunautaire est FR53479345043.</p>\n<p><br></p>\n<p>LGD a souscrit, dans les conditions prévues par le code du Tourisme , auprès de la compagnie HISCOX France, SARL au capital social de 1 524 490,17 €, sise 19, rue Louis Legrand 75002 Paris , une assurance de Responsabilité Civile Professionnelle qui couvre notamment les conséquences pécuniaires pouvant incomber à l''assuré en raison des dommages corporels, matériels et immatériels causés à des clients, à des prestataires de service ou à des tiers par suite de fautes, erreurs de fait ou de droit, omissions ou négligences commises à l''occasion de son activité d''organisme de voyage et ce, à concurrence d''un montant de 10 000 000 Euros par sinistre et par année d''assurance pour tous les dommages confondus. LGD est titulaire du contrat d''assurance n° HARCP0082915.</p>\n<p><br></p>\n<p>Afin de sécuriser nos relations sur le plan juridique, nous vous invitons à prendre connaissance des présentes conditions générales de vente en les lisant attentivement et les dispositions légales visées à la loi n° 92-645 du 13 juillet 1992 fixant les conditions d''exercice des activités relatives à l''organisation et à la vente de voyages ou de séjours et au décret n° 94-490 du 15 juin 1994 pris en application de l''article 31 de cette loi, notamment codifiés sous les articles L 211-1 et suivants du code du tourisme et les articles R 211-1 et suivants du même code.</p>\n<p><br></p>\n<h2>ARTICLE 1 - DEFINITIONS—</h2>\n<p>« SITE » désigne le site internet http://wwwlagrandecouverte.com, édité par la société LGD.</p>\n<p><br></p>\n<p>« PRESTATION » désigne une prestation de fourniture de service telle que la fourniture de billets d’avions, d’hébergement, de forfaits touristiques ou d’assurance etc.…</p>\n<p><br></p>\n<p>« COMMANDE » désigne toute réservation effectuée par l’utilisateur directement sur les sites internet ou encore par téléphone.</p>\n<p><br></p>\n<p>« VOUCHER » ou « BON D’ECHANGE » : document émis par LGD permettant d''obtenir des prestations dans les hôtels, les restaurants et plus généralement chez les prestataires de LGD.</p>\n<p><br></p>\n<p>« PRESTATAIRE » désigne tout prestataire ou fournisseur de LGD et comprend notamment les compagnies aériennes, les hôtels, résidences hôtelières, les tour-opérateurs, les parcs d’attraction, les restaurants, les compagnies d’assurances, les agences de voyage, les agences immobilières, les gestionnaires de locations saisonnière (y compris les propriétaires indépendants)</p>\n<p><br></p>\n<p>« VOUS » ou « L’UTILISATEUR » désigne toute personne utilisant le site ou les centres d’appels dont les coordonnées figurent ci-après afin de réserver, commander et/ou acheter toutes prestations proposées par LGD</p>\n<p><br></p>\n<p>« DESCRIPTIF » Les fiches descriptives figurant sur le site constitue une offre et engagent les parties. A cet effet, lors de la passation de commande, la fiche descriptive de la prestation commandée est disponible sur le compte membre de l’utilisateur.</p>\n<p><br></p>\n<p>LGD fait ses meilleurs efforts pour fournir des photos et des illustrations donnant un aperçu des prestations proposées par l’établissement sélectionné. Cependant des variations minimes peuvent apparaître entre les photos figurant sur les fiches descriptives et les produits fournis.</p>\n<p><br></p>\n<p>« VOL SEC » : prestation de transport aérien qui n’entre pas dans le cadre d’un forfait touristique.</p>\n<p><br></p>\n<p>« VOL SPECIAL » : vol charter qui par définition ne figure pas parmi les vols réguliers d’une des compagnies aériennes, affrété par un Tour-opérateur.</p>\n<p><br></p>\n<p>« VOL LOW COST » : Prestation de transport aérien vendu à tarif préférentiel.</p>\n<p><br></p>\n<p>« VENTE FLASH » appellation d’un espace de vente présent sur le site au sein duquel sont proposées des prestations à prix barrés pendant une durée moyenne de cinq à sept jours, par opposition aux ventes permanentes qui figurent également sur le site.</p>\n<p><br></p>\n<p>« PACKAGE DYNAMIQUE » il s’agit d’un séjour pour lequel l’Utilisateur aura sous sa seule responsabilité, lui-même choisi d’assembler au moins deux prestations en vente séparément sur le site, ex : achat d’un vol sec   achat d’une prestation d’hébergement.</p>\n<p><br></p>\n<p>« PRODUIT LOCATIF / LOCATION SAISONNIERE » désigne tout produit de location de logement meublé saisonnier (par exemple villas, maisons, chalets, appartements…), hors résidence de tourisme, conclue pour une durée maximale et non renouvelable de quatre-vingt-dix jours consécutifs.</p>\n<p><br></p>\n<p>  " HOTEL MYSTERE" désigne un hôtel sélectionné par notre équipe dont le nom ne vous sera dévoilé qu''à réception de vos documents de voyage.</p>\n<h2>ARTICLE 2 – CHAMP D’APPLICATION—</h2>\n<p>Les conditions générales de vente LGD sont valables à compter du 2 juillet 2014. Cette édition annule et remplace les versions précédentes.</p>\n<p><br></p>\n<p>Les présentes conditions générales de vente s’appliquent à toute utilisation du site, notamment à la commercialisation par internet et par téléphone de toutes les prestations proposées sur le site par la société LGD.</p>\n<p><br></p>\n<p>Il est donc impératif que l''Utilisateur lise attentivement les Conditions Générales de vente qui sont référencées par lien hypertexte sur chaque page du site. Il lui est notamment conseillé de les télécharger et/ou de les imprimer afin d’en conserver une copie au jour de sa commande dès lors de surcroît que celles-ci sont susceptibles d’être modifiées, sachant que de telles modifications seront inapplicables aux commandes de Prestations effectuées antérieurement.</p>\n<p><br></p>\n<p>Les Conditions Générales de vente de LGD peuvent être complétées par des conditions de vente particulières figurant sur le descriptif de la prestation et par les conditions de vente des prestataires, accessibles soit sur leur site internet, soit sur place.</p>\n<h2>ARTICLE 3 - DECLARATIONS DE L’UTILISATEUR—</h2>\n<p>Tout utilisateur déclare avoir la capacité juridique de contracter avec la société LGD, c''est à dire être âgé d''au moins 18 ans, être capable juridiquement de contracter et ne pas être sous tutelle ou curatelle.</p>\n<p><br></p>\n<p>Tout utilisateur déclare également utiliser le site conformément aux présentes conditions générales de vente, en son nom et au nom et pour le compte de tous les bénéficiaires des prestations commandées par ses soins sur le site dont il reconnaît être le mandataire (ci-après les Bénéficiaires) et auxquels les présentes conditions générales de vente seront opposables.</p>\n<p><br></p>\n<p>L’utilisateur est responsable financièrement de l’utilisation du site faite tant en son nom que pour le compte des Bénéficiaires, sauf à démontrer une utilisation frauduleuse ne résultant d’aucune faute ou négligence de sa part.</p>\n<p><br></p>\n<p>L’utilisateur garantit la véracité et l’exactitude des informations fournies par lui en son nom et au nom et pour le compte de tous les Bénéficiaires utilisant ses données sur les sites.</p>\n<p><br></p>\n<p>LGD se réserve le droit à tout moment de ne pas contracter avec un utilisateur qui ferait une utilisation frauduleuse du site ou qui contreviendrait aux présentes conditions générales de vente.</p>\n<p><br></p>\n<p>La société entend ici rappeler les termes de l''article 313-1 du Code Pénal français :</p>\n<p>" L''escroquerie est le fait, soit par l''usage d''un faux nom ou d''une fausse qualité, soit par l''abus d''une qualité vraie, soit par l''emploi de manœuvres frauduleuses de tromper une personne physique ou morale et de la déterminer ainsi, à son préjudice ou au préjudice d''un tiers, à remettre des fonds, des valeurs ou un bien quelconque, à fournir un service ou à consentir un acte opérant obligation ou décharge. L''escroquerie est punie de cinq ans d''emprisonnement et de 375000 € d''amende ".</p>\n<h2>ARTICLE 4 - FORMATION DU CONTRAT : PASSATION D’UNE COMMANDE—</h2>\n<p>L’utilisateur peut commander les prestations proposées sur le site directement en ligne ou par téléphone au 0892 426 425 (0,34€/mn) après avoir validé les présentes conditions générales de vente.</p>\n<p><br></p>\n<p>L’utilisateur effectue une recherche qui donnera lieu à la communication d’une ou plusieurs offres de prestations correspondant à sa requête et/ou l’utilisateur consulte les offres proposées dans le cadre des ventes flash qui peuvent être proposées sur le site</p>\n<p>L’utilisateur clique sur la prestation de son choix pour accéder à son descriptif</p>\n<p>L’utilisateur renseigne les informations demandées et accède alors à un récapitulatif reprenant l’ensemble des prestations choisies et le prix total de la ou des prestations, lui permettant ainsi de vérifier le détail de sa commande. L’utilisateur doit alors s’assurer que toutes les informations affichées sont conformes à celles qu’il a fournies car elles ne pourront plus être modifiées après validation de la commande</p>\n<p>L’utilisateur peut ensuite valider sa commande, sous réserve d’avoir accepté les conditions générales de vente, soit lorsqu’il est sur le site en cochant la case « J’ai pris connaissance et j’accepte les conditions générales de vente de lagrandecouverte.com pour les passagers listés ci-dessus », soit en cas de réservation par téléphone en retournant par télécopie le contrat signé ou en répondant par courrier électronique au courrier électronique récapitulatif adressé par LGD en portant la mention [« bon pour accord »], LGD rappelle à l’Utilisateur qu’à défaut d’avoir accepté les conditions générales de vente, toute commande est impossible.</p>\n<p>L’Utilisateur paye sa commande, le cas échéant en ligne, dans les conditions prévues à l’article 9 ci-dessous.</p>\n<p>LGD transmet par courrier électronique une confirmation de commande reprenant les éléments essentiels du contrat tel que l’identification de la prestation, le nom et les coordonnées de l’utilisateur, le nom des bénéficiaires de la ou des prestations achetées, la quantité et le prix. Toutes les informations figurant dans ce courrier électronique de confirmation seront réputées constituer l’accord entre l’utilisateur et la société LGD.</p>\n<p>LGD adresse dans les meilleurs délais une facture à l’Utilisateur.</p>\n<p><br></p>\n<h2>ARTICLE 5 - TRANSPORT AERIEN—</h2>\n<p>LGD propose des prestations de transport aérien, dites "réguliers", "spéciaux" ou "low cost" au nom des compagnies aériennes.</p>\n<p><br></p>\n<p>Les conditions d’exécution des transports aériens sont régies par les conditions de vente des compagnies aériennes.</p>\n<p><br></p>\n<p>Par conséquent, la responsabilité de LGD ne saurait être engagée qu’en cas de faute prouvée de sa part dans la délivrance du titre de transport.</p>\n<p><br></p>\n<p>LGD souhaite toutefois, dans un souci d’information de l’utilisateur, attirer son attention sur les points suivants :</p>\n<p><br></p>\n<h3>5.1 - CONDITIONS DE VOYAGE</h3>\n<p><br></p>\n<h4>5.1.1 Identité du transporteur</h4>\n<p><br></p>\n<p>Conformément aux articles R-211-15 et suivants du Code du tourisme français, l’utilisateur est informé de l''identité du ou des transporteurs contractuels ou de fait, susceptibles de réaliser le vol acheté. LGD informera l’utilisateur de l''identité de la compagnie aérienne effective qui assurera le ou les vol(s). En cas de changement de transporteur, l’utilisateur en sera informé par le transporteur contractuel ou par LGD par tout moyen approprié, dès lors qu''il en aura connaissance et au plus tard lors de l''enregistrement ou de l''embarquement pour les vols en correspondance. La liste noire des compagnies aériennes interdites d’exploitation dans la communauté européenne peut être consultée en cliquant sur le lien suivant : http://ec.europa.eu/transport/air-ban/list_fr.htm</p>\n<p><br></p>\n<p>5.1.2 Horaires, itinéraire et aéroport</p>\n<p><br></p>\n<p>Lorsque nous en sommes informés, nous vous communiquons les horaires de vols charters sur la fiche descriptive, et ce, à titre indicatif. Ces informations vous sont transmises afin de vous aider à vous organiser au mieux avant votre départ, mais peuvent être susceptibles d''être modifiées. En effet, les horaires définitifs de vols nous seront confirmés par l’aviation civile entre 5 jours et la veille de votre départ et feront l’objet d’une convocation aéroport qui vous sera envoyée par email dans ces mêmes délais. Vous aurez à consulter votre boite email avant votre départ afin de prendre connaissance de ces horaires définitifs, et imprimer votre convocation.</p>\n<p><br></p>\n<p>Les modifications d''horaires ou d''itinéraires, escales, changements d''aéroport, retards, correspondances manquées, annulations de vols, font partie des contraintes spécifiques au transport aérien et peuvent être imposés par les compagnies aériennes.</p>\n<p><br></p>\n<p>Elles sont, la plupart du temps, liées à l''encombrement de l''espace aérien à certaines périodes, au respect des règles de la navigation aérienne, au délai de traitement des appareils sur les aéroports, et ceci, dans un souci de garantir la sécurité des passagers.</p>\n<p><br></p>\n<p>S’agissant des retards d''avions, si vous avez souscrit le contrat d''assurance n°340.022 (option Assistance) ou n° 340.033 (option Multirisque) tel visé à l’article 16 des présentes, LGD vous rappelle que vous devez faire votre déclaration exclusivement auprès de la compagnie d''assurances Mondial Assistance dans les conditions prévues au contrat. Il n''incombe pas à la société LGD de faire quelque démarche que ce soit concernant ce point.</p>\n<p><br></p>\n<p>Enfin, LGD souhaite rappeler à l’utilisateur que les vols directs peuvent être " non stop " ou comporter une ou plusieurs escales (il s''agit alors du même vol selon les compagnies aériennes car le numéro de vol est identique) avec changement ou non d''appareil.</p>\n<p><br></p>\n<p>Il en est de même pour les vols en connexion qui peuvent faire l''objet de changements d''appareils. Ainsi lorsque vous réservez un vol (régulier ou spécial) comportant une escale dans une ville et que le deuxième vol est au départ d''un autre aéroport de cette ville que celui d''arrivée, assurez-vous que vous aurez le temps de rejoindre ce deuxième aéroport. En effet, le trajet pour rejoindre cet aéroport reste à votre charge.</p>\n<p><br></p>\n<p>Sur certaines compagnies, le trajet Province/Paris ou Paris/Bruxelles peut être assuré en train. Cette information vous est mentionnée dans "Afficher les infos de vol" lors de votre sélection.</p>\n<p><br></p>\n<p>5.1.3 Le vol retour</p>\n<p><br></p>\n<p>Quel que soit le type de vol, régulier, spécial ou low cost le retour doit impérativement être re-confirmé sur place, dans les 72 heures avant la date de départ prévu auprès de la compagnie aérienne. Pour les voyages à forfait, cette formalité est généralement remplie par le correspondant local. Nous attirons votre attention sur le fait que cette procédure est obligatoire et, qu''à défaut, votre place ne pourra être assurée par la compagnie qui peut l''attribuer à une autre. Par ailleurs, cette procédure permet aussi, à cette occasion, de vous faire confirmer les horaires de votre vol retour qui peuvent avoir subi quelques modifications.</p>\n<p><br></p>\n<p>La société LGD ne saurait être tenue pour responsable d''un défaut de confirmation par vos soins.</p>\n<p><br></p>\n<h3>5.1.4 Correspondances</h3>\n<p><br></p>\n<p>Conformément aux conventions internationales, les correspondances ne sont pas garanties. Il est donc conseillé de ne prévoir aucun engagement, le jour ou le lendemain de l''aller ou du retour du voyage.</p>\n<p><br></p>\n<h3>5.1.5 Non présentation au départ</h3>\n<p><br></p>\n<p>L''absence de présentation à l''embarquement sur le vol aller (spécial ou régulier) entraîne automatiquement l''annulation du vol retour par la compagnie aérienne.</p>\n<p><br></p>\n<p>Tout voyage interrompu, abrégé, ou toute prestation non consommée de votre fait ne donnera droit à aucun remboursement, à l''exception des taxes d''aéroport.</p>\n<p><br></p>\n<p>S’agissant d’un vol manqué, si vous avez souscrit le contrat d’assurance 340.033 (option Multirisque), tel que visé à l’article 16 des présentes, vous devrez faire votre déclaration auprès de la compagnie d''assurances Mondial Assistance dans les conditions prévues au contrat.</p>\n<p><br></p>\n<p>S’agissant de l’interruption de séjour, si vous avez souscrit le contrat d’assurance 340.022 (option Assistance) ou 340.033 (option Multirisque) tel visé à l’article 16 des présentes, vous devrez vous conformer aux modalités d''annulation figurant dans les conditions de votre contrat d’assurance Mondial Assistance.</p>\n<p><br></p>\n<h3>5.1.6 Pré et post acheminement</H3>\n<p><br></p>\n<p>Si le vol spécial prévu pour effectuer le pré-acheminement ou post-acheminement venait à être annulé ou retardé, les compagnies se réservent la possibilité d''assurer en ce cas le transport, par tout autre mode (autocar, train, etc.).</p>\n<p><br></p>\n<h3>5.1.7 Vols spéciaux – charters</h3>\n<p><br></p>\n<p>Les titres de transport sur vols spéciaux sont remis à l''aéroport sur présentation de la convocation.</p>\n<p><br></p>\n<p>Par ailleurs, les vols spéciaux obéissent le plus souvent aux conditions spécifiques décrites ci-après. Toute place sur vol spécial non utilisée de votre fait à l''aller et/ou au retour ne pourra pas faire l''objet d''un remboursement, même dans le cas d''un report de date. L''abandon d''un vol spécial au bénéfice d''un vol régulier, par choix délibéré de votre part, entraîne le paiement intégral du prix du voyage au tarif en vigueur.</p>\n<p><br></p>\n<p>Enfin, dans le cadre d''un vol spécial, vos horaires de vols sont susceptibles d''être modifiés. Aussi, nous vous recommandons de consulter régulièrement votre boîte de messagerie électronique et votre messagerie téléphonique jusqu''au moment de votre départ, et ce même si vous avez déjà réceptionné vos documents de voyage.</p>\n<p><br></p>\n<h3>5.1.8 Vols low cost</h3>\n<p><br></p>\n<p>Les vols low cost obéissent aux conditions décrites ci-après. La convocation fait office de carte d’embarquement. Toute perte ou oubli de celle-ci le jour de votre départ pourra entraîner des frais à régler directement auprès de certaines compagnies. Vos bagages seront à selectionner en option sur notre site le jour de votre réservation. Les services à bord sont payants (collation/boisson).Les titres de transport sont le plus souvent non modifiables et non remboursables. Toute place sur vol low cost non utilisée de votre fait à l''aller et/ou au retour ne pourra pas faire l''objet d''un remboursement, même dans le cas d''un report de date. L''abandon d''un vol low cost au bénéfice d''un vol régulier, par choix délibéré de votre part, entraîne le paiement intégral du prix du voyage au tarif en vigueur.</p>\n<p><br></p>\n<h3>5.1.9 Consignes et sécurité</h3>\n<p><br></p>\n<p>Il est de votre responsabilité de respecter les consignes de sécurité édictées par les compagnies aériennes ou encore les autorités compétentes, dont notamment :</p>\n<p><br></p>\n<p>les délais de présentation à l’aéroport pour tout enregistrement. LGD vous conseille donc de vous présenter à l’enregistrement au moins trois heures avant l’heure de départ de l’avion pour les vols internationaux et au moins une heure et demi à l’avance pour les vols intérieurs.</p>\n<p><br></p>\n<p>Attention : les personnes handicapées, les enfants non accompagnés (UM), les passagers ayant des bagages hors format ou avec des excédents de bagages, ou voyageant avec des animaux placés en soute doivent contacter préalablement la compagnie aérienne afin de vérifier l''heure limite d''enregistrement.</p>\n<p><br></p>\n<p>Les objets autorisés à bord des avions. LGD vous conseille de vérifier que les objets ou les produits que vous souhaitez conserver en bagages à main et/ou en cabine sont autorisés. Nous vous rappelons que sont interdits dans les bagages les articles concernés par la réglementation internationale IATA sur les matières dangereuses et notamment les articles explosifs, inflammables, corrosifs, oxydants, irritants, toxiques ou radioactifs, les gaz comprimés et les objets non autorisés par les Etats.</p>\n<p><br></p>\n<p>Nous vous invitons également à visiter à cette fin le site http://www.developpement-durable.gouv.fr/Mesures-de-restriction-sur-les.html.LGD ne saurait être tenue responsable de tous refus d''embarquement ou confiscation d''objet jugé dangereux par la compagnie ou les autorités aéroportuaires. Il est de la responsabilité du passager de se renseigner des objets interdits en soute ou en cabine.</p>\n<p><br></p>\n<h3>5.1.10 Bébés, Enfants</h3>\n<p><br></p>\n<p>Les bébés (- de 2 ans) ne disposent pas de siège dans l''avion, par conséquent un seul bébé est accepté par passager adulte. Le prix de leurs billets est généralement de 10 % du tarif adulte. Les enfants (de 2 à 11 ans) sur certains vols peuvent bénéficier de réduction allant jusqu''à 50 % mais les stocks peuvent être limités.</p>\n<p>Les UM (enfants non accompagnés) ne sont pas toujours autorisés à bénéficier de ces bases tarifaires. Les enfants de moins de 15 ans non accompagnés par un majeur ne voyageant pas en UM sont refusés.</p>\n<p>Les bébés et enfants sont considérés comme tel si ils n''ont pas atteint respectivement l''âge de 2 ans et 12 ans avant l''utilisation de leur billet retour.</p>\n<p><br></p>\n<h3>5.1.11 Femmes enceintes</h3>\n<p><br></p>\n<p>Les compagnies aériennes peuvent parfois refuser l''embarquement à une femme enceinte lorsqu''elles estiment, en raison du terme de la grossesse, qu''un risque d''accouchement prématuré pendant le transport est possible. Il appartient donc à l’utilisateur de prendre conseil auprès de son médecin avant de commander un billet d’avion sur le site.</p>\n<p><br></p>\n<h3>5.1.12 Bagages</h3>\n<p><br></p>\n<p>LGD entend également attirer votre attention sur le fait que certaines compagnies aériennes imposent un nombre et/ou un poids maximum de bagages. En cas de dépassement, s’il est autorisé, il appartiendra donc à l’utilisateur de s’acquitter directement du supplément de prix auprès de la compagnie à l''aéroport. LGD ne saurait supporter le prix supplémentaire inhérent à un tel dépassement.</p>\n<p><br></p>\n<p>En cas de perte ou de détérioration ou retard de vos bagages au cours du transport aérien, préalablement à toute autre démarche, vous devez vous adresser à la compagnie aérienne :</p>\n<p><br></p>\n<p>en lui faisant constater la perte ou détérioration de vos bagages avant votre sortie de l''aéroport,</p>\n<p>puis en lui adressant une déclaration à laquelle vous joindrez les originaux des pièces suivantes : titre de transport, déclaration de perte, coupon d''enregistrement de bagage.</p>\n<p><br></p>\n<p>La compagnie aérienne n''est responsable à votre égard, pour les bagages que vous lui avez confiés, qu''à hauteur des indemnités prévues par les conventions internationales</p>\n<p><br></p>\n<p>Il vous est donc recommandé de souscrire une police d''assurance garantissant la valeur de ces objets :</p>\n<p><br></p>\n<p>si vous avez souscrit le contrat d''assurance Mondial Assistance n°340.022 (option Assistance) ou n° 340.033 (option Multirisque)- tel visé à l’article 16 des présentes, LGD vous rappelle que vous devez faire votre déclaration exclusivement auprès de la compagnie d''assurances Mondial Assistance dans les conditions prévues au contrat. Il n''incombe pas à la société LGD de faire quelque démarche que ce soit concernant ce point.</p>\n<p><br></p>\n<h3>5.1.13 Perte ou vol de billets d''avion</3>\n<p><br></p>\n<p>En cas de perte de votre billet d''avion ou de vol de celui-ci, vous devez effectuer une déclaration spécifique auprès de la police et de la compagnie aérienne et assurer à vos frais votre retour en achetant un autre billet auprès de la compagnie émettrice. Toutes les conséquences découlant de la perte ou du vol d''un billet restent à votre charge. Toutefois, un remboursement, restant à la discrétion de la compagnie pourra éventuellement être demandé, accompagné de tous les originaux (souche de billet racheté, carte d''embarquement …).</p>\n<p><br></p>\n<p>5.2 - BILLET - BILLET ELECTRONIQUE</p>\n<p><br></p>\n<p>Les billets d’avion, sauf pour certains vols spéciaux et low cost tel que mentionné au paragraphe 5.1.7 et 5.1.8 ci-dessus, sont désormais des billets dématérialisés appelés « billet électronique ». Vous ne recevez donc aucun billet « papier » suite à votre commande.</p>\n<p><br></p>\n<p>Pour utiliser votre billet électronique et obtenir votre carte d’embarquement, vous devez vous présenter à l’aéroport au comptoir d’enregistrement de la compagnie aérienne concernée, muni d’un document de confirmation de réservation (courrier électronique, etc.) ainsi que du document d’identification (passeport, carte d’identité, carte de séjour etc.) dont vous avez communiqué le numéro lors de la passation de commande.</p>\n<p><br></p>\n<p>Vous devez donc respecter les délais de présentation à l’aéroport qui vous sont communiqués afin d’être en mesure d’effectuer ces formalités.</p>\n<p><br></p>\n<p>La remise des documents de transport s’effectue conformément aux stipulations de l’article 10.1 des présentes.</p>\n<p><br></p>\n<p>5.3 - Limitation de responsabilité des transporteurs aériens</p>\n<p><br></p>\n<p>LGD attire votre attention sur le fait que la responsabilité des transporteurs aériens est les plus souvent limitée par le droit national ou international qui leur est applicable, ou par leurs propres conditions de vente que vous aurez acceptées préalablement à toute commande.</p>\n<p><br></p>\n<p>5.4 - DISPOSITIONS PARTICULIERES RELATIVES AU PRIX</p>\n<p><br></p>\n<p>Le prix des prestations de vols sec est régi par les modalités des articles 9-1.1, 9.1.3, 9.2 et 9.3 des présentes.</p>\n<p><br></p>\n<p>5.5 - MODIFICATION OU D’ANNULATION</p>\n<p><br></p>\n<p>Les modalités de modification ou d’annulation de prestations de vols secs et les frais inhérents sont régies par les dispositions des articles 14.1, 14.2.1, 14.3.1 et 15.1 des présentes.</p>\n<p><br></p>\n<h2>ARTICLE 6 - CONDITIONS APPLICABLES AUX PRESTATIONS HOTELIERES SEULES ET RESIDENCES DE TOURISME—</h3>\n<p>Lesdites prestations d’hébergement sont proposées par LGD au nom de ses prestataires.</p>\n<p><br></p>\n<h3>6.1 - CLASSIFICATION</h3>\n<p><br></p>\n<p>Le nombre d''étoiles attribuées à l''établissement hôtelier figurant dans le descriptif correspond à une classification établie en référence à des normes locales dans la majorité des pays d''accueil. Il se peut toutefois que dans certains pays il n’existe aucun organisme officiel de tourisme pour établir et valider cette classification. Dans cette dernière hypothèse, les informations figurant dans notre descriptif sont fonction de l’appréciation du fournisseur. En tout état de cause, elles peuvent donc différer des normes françaises et européennes. LGD s’efforce de vous informer le plus précisément possible sur les conditions de votre hébergement. Les appréciations que nous portons sur nos descriptifs découlent notamment de notre connaissance des établissements et des appréciations qui nous sont adressées par nos clients. Nous nous réservons la faculté pour des raisons techniques, de sécurité, dans des cas de force majeure ou du fait d''un tiers, de substituer à l''hôtel prévu un établissement de même catégorie proposant des prestations équivalentes. Il ne peut s''agir que d''un événement exceptionnel et dans un tel cas nous nous efforçons de vous en informer pour vous proposer l’échange dès que nous en avons connaissance.</p>\n<p><br></p>\n<h3>6.2 - TYPE DE CHAMBRE</h3>\n<p><br></p>\n<h4>6.2.1 Chambres individuelles </h4>\n<p><br></p>\n<p>Elles disposent d''un lit d''une personne. Elles font l''objet d''un supplément, sont proposées en quantité limitée et sont souvent moins spacieuses, moins confortables, et moins bien situées que les autres chambres.</p>\n<p><br></p>\n<h4>6.2.2 Chambres doubles </p>\n<p><br></p>\n<p>Elles disposent de deux lits simples ou plus rarement d''un lit double.</p>\n<p><br></p>\n<h4>6.2.3 Chambres triples </h4>\n<p><br></p>\n<p>Elles se présentent, dans la plupart des cas, comme une chambre double à laquelle est ajouté un lit d''appoint (attention : ce lit peut être inférieur à la taille standard).</p>\n<p><br></p>\n<h4>6.2.4 Chambres quadruples :</h4>\n<p><br></p>\n<p>Elles se présentent, dans la plupart des cas, comme une chambre double à laquelle sont ajoutés deux lits d''appoints (attention : ces lits peuvent être inférieurs à la taille standard). Dans le cas de 2 adultes et de 2 enfants, si la superficie des chambres ne permet pas de loger plus de trois personnes dans la même chambre, il sera alors demandé 2 chambres doubles côte à côte ou communicantes (dans la mesure du possible) et le tarif adulte sera alors appliqué (sauf mention spéciale).</p>\n<p><br></p>\n<h4>6.2.5 Chambres familiales :</h4>\n<p><br></p>\n<p>Certaines chambres triples ou quadruples comportent 3 ou 4 vrais lits de taille standard et ne donnent donc pas lieu à réduction</p>\n<p><br></p>\n<h4>6.2.5 Chambres communicantes :</h4>\n<p><br></p>\n<p>Les demandes de chambres communicantes seront prises en compte et satisfaites sous réserves de disponibilité de l’hôtelier, ce dont LGD vous informera.</p>\n<p><br></p>\n<h3>6.3 - POSSESSION ET LIBERATION DES CHAMBRES</h3>\n<p><br></p>\n<>6.3.1 Nous vous informons que les règles applicables en matière d''hôtellerie internationale imposent généralement que les clients prennent possession des chambres à partir de 14 heures quelle que soit l''heure d''arrivée du vol et les libèrent avant 10 heures au plus tôt quel que soit l''horaire du vol de retour. Il ne vous sera malheureusement pas possible de déroger à cette règle.</p>\n<p><br></p>\n<p>6.3.2 Pour toute réservation d’un hôtel en FRANCE sans transport, votre arrivée sur place est prévue en début d''après-midi (à partir de 14h30) sauf mention contraire présente sur vos futurs documents de voyage. La chambre devra être libérée avant 10h00 au plus tôt, le jour de votre départ.</p>\n<p><br></p>\n<p>6.3.3 Pour toute réservation d’une résidence en FRANCE sans transport, votre arrivée sur place est prévue en milieu d''après-midi (à partir de 16h30) sauf mention contraire présente sur vos futurs documents de voyage. La chambre devra être libérée avant 10h00 au plus tôt, le jour de votre départ.</p>\n<p><br></p>\n<p>De ce fait, si vous décidiez d’entrer en possession de votre chambre ou la rendre en dehors des horaires stipulés ci-dessus, une nuitée supplémentaire pourra vous être facturée, sans qu''aucun remboursement ne puisse avoir lieu.</p>\n<p><br></p>\n<h3>6.4 - BEBE</h3>\n<p><br></p>\n<p>LGD conseille aux parents de bébés d’emporter avec eux la nourriture adaptée à leur enfant qu''ils ne trouveront pas toujours sur place. Une participation à régler sur place peut vous être demandée, par exemple pour chauffer les plats ou biberons et/ou l''installation d''un lit bébé qui doit être demandé lors de la réservation, sous réserve toutefois des disponibilités de l’hôtel ou de la résidence.</p>\n<p><br></p>\n<h3>6.5 - REPAS</h3>\n<p><br></p>\n<p>Ils dépendent de la formule choisie.</p>\n<p><br></p>\n<p>6.5.1 : All inclusive : comprend outre l''hébergement, les petits déjeuners, déjeuners, dîners et les boissons usuelles (eau minérale, jus de fruits, sodas, vins, alcool locaux) généralement de 10h à 22h. Certains alcools peuvent ne pas être compris dans la formule et faire l''objet d''une facturation par l''hôtelier.</p>\n<p><br></p>\n<p>6.5.2 : Pension complète : comprend outre l''hébergement, les petits déjeuners, déjeuners et dîners, sans les boissons.</p>\n<p><br></p>\n<p>6.5.3 Demi-pension : comprend outre l''hébergement, les petits déjeuners et dîners ou déjeuners selon le cas, sans les boissons.</p>\n<p><br></p>\n<p>6.5.4 Dans le cadre de la pension complète ou de la demi-pension, les boissons ne sont pas comprises, sauf exception dûment mentionnée dans le descriptif. Dans certains pays, les prestataires n''ont pas toujours d''eau potable, l''achat de bouteilles d''eau potable est alors à la charge du client.</p>\n<p><br></p>\n<p>Toutes les consommations supplémentaires non comprises dans la formule sont à régler sur place auprès de l''hôtelier.</p>\n<p>Sur place, le règlement de l''hôtel doit être respecté, notamment les horaires d''ouverture du ou des restaurant(s) ou bar(s), les lieux indiqués pour consommer les repas, ou les consommations.</p>\n<p><br></p>\n<p>LGD entend, également, attirer l’attention de l’utilisateur sur les points suivants :</p>\n<p>Il se peut, notamment en haute saison, que le nombre de parasols, chaises longues, matériel sportif, etc., soit insuffisant.</p>\n<p><br></p>\n<p>Les horaires et ouvertures des bars, restaurants, et discothèques, etc., peuvent être irréguliers et dépendent en tout état de cause de la direction de l''établissement.</p>\n<p><br></p>\n<h3>6.6 - FEMMES ENCEINTES – SANTE</h3>\n<p><br></p>\n<p>Pour toute réservation de thalassothérapie, balnéothérapie ou spa, LGD conseille aux femmes enceintes de consulter leur médecin avant d''effectuer toute réservation, pour confirmer leur aptitude à effectuer une cure de thalassothérapie, ou autres soins proposés dans le cadre du forfait.</p>\n<p><br></p>\n<p>Nous vous informons que toutes les cures ne sont pas adaptées aux femmes enceintes, et qu''il se peut que la cure ne soit pas possible dans certains cas. Merci de nous spécifier lors de votre réservation le stade de votre grossesse afin que nous puissions en informer nos prestataires.</p>\n<p><br></p>\n<p>D’une manière générale, LGD ne saurait en aucun cas être tenue pour responsables en cas de mauvaise exécution de votre cure ou impossibilité d''effectuer cette dernière du fait de votre état de santé, et aucun remboursement ne pourra avoir lieu de ce fait.</p>\n<p><br></p>\n<h3>6.7 - PRIX</h3>\n<p><br></p>\n<p>Le prix de la prestation de l’hébergement seule est régi par les stipulations de l’article 9.1.1, 9.2 et 9.3 des présentes.</p>\n<p><br></p>\n<h4>6.8 - MODIFICATION OU D’ANNULATION</h4>\n<p><br></p>\n<p>Les modalités de modification ou d’annulation de prestations d’hébergement seules et les frais inhérents sont régis par les dispositions des articles 14.1, 14.2.2, 14.3.2 des présentes.</p>\n<h2>ARTICLE 7 - FORFAITS TOURISTIQUES—</h2>\n<p>Constitue un forfait touristique la prestation :</p>\n<p><br></p>\n<p>- résultant de la combinaison préalable d’au moins deux opérations portant respectivement sur le transport, le logement ou d’autres services touristiques non accessoires au transport ou au logement représentant une part significative dans le forfait ; dépassant vingt quatre heures ou incluant une nuitée ; vendue ou offerte à la vente à un prix tout compris.</p>\n<p><br></p>\n<h3>7.1 - TRANSPORT</h3>\n<p><br></p>\n<p>Les prestations de transport comprises dans le forfait touristiques sont régies par les stipulations des articles 5.1.1 à 5.4 des présentes.</p>\n<p><br></p>\n<h3>7.2 - HEBERGEMENT</h3>\n<p><br></p>\n<p>Les prestations d’hébergement et de séjour comprises dans un Forfait touristique sont régies par les stipulations des articles 6.1 à 6.8 des présentes.</p>\n<p><br></p>\n<p>Sont inclus dans la durée des voyages :</p>\n<p>Le jour du départ à partir de l''heure de convocation à l''aéroport,</p>\n<p>Le jour du voyage retour jusqu''à l''heure d''arrivée à l''aéroport.</p>\n<p>La première et la dernière journée sont généralement consacrées au transport. De ce fait, s''il advenait qu''en raison des horaires imposés par les compagnies aériennes, la première et/ou la dernière journée et/ou nuit se trouvent écourtées, par une arrivée tardive ou un départ matinal, aucun remboursement ne pourrait avoir lieu. Il en est de même si la durée du séjour se trouvait allongée. Il convient lorsqu''il s''agit de transport sur vols charters d''envisager cette éventualité et de prendre les dispositions nécessaires à votre organisation tant personnelle que professionnelle.</p>\n<p><br></p>\n<h3>7.3 - PRIX</h3>\n<p><br></p>\n<p>Le prix des forfaits touristiques est régi par les stipulations de l’article 9 des présentes.</p>\n<p><br></p>\n<h3>7.4 – CESSION DE LA PRESTATION</h3>\n<p><br></p>\n<p>Conformément au code du tourisme, le client pourra céder son contrat (hors les contrats d''assurance) à un tiers, à condition d''en informer la société LGD par lettre recommandée avec demande d’avis de réception au plus tard 7 jours avant le début du séjour, en indiquant précisément les noms et adresse du ou des cessionnaires et du ou des participants au voyage et en justifiant que ceux-ci remplissent les mêmes conditions que lui pour effectuer le voyage ou le séjour (en particulier pour les enfants qui doivent se situer dans les mêmes tranches d''âge).</p>\n<p><br></p>\n<p>Préalablement le cédant ou le cessionnaire seront tenus d''acquitter des frais tels que prévu à l’article 14.3.2 ci-dessous, c''est-à-dire dans des conditions identiques à celles relative à la modification apportée aux prestations de forfaits touristiques.</p>\n<p><br></p>\n<p>Le cédant et le cessionnaire seront solidairement responsables du paiement d''un éventuel solde du prix ainsi que des frais supplémentaires occasionnés par cette cession.</p>\n<p><br></p>\n<p>Dans tous les cas, si les frais étaient supérieurs aux montants susmentionnés (vol à réservation non modifiable ou autre), il serait dû à LGD le montant exact, qui sera facturé au client sur présentation de justificatifs. Les assurances complémentaires ne sont en aucun cas remboursables ou transférables.</p>\n<p><br></p>\n<h3>7.5 - ANNULATION ET MODIFICATION</h3>\n<p><br></p>\n<p>Les modalités d’annulation, de modification et des frais qui leur sont inhérents sont régies par les dispositions des articles 14.1, 14.2.4, 14.3.3 et 15.2 des présentes.</p>\n<p><br></p>\n<h3>7.6 - CURES - LOISIRS SPORTIFS</h3>\n<p><br></p>\n<p>S’agissant des cures et soins dispensés dans les centres de spa, balnéothérapie ou thalassothérapie ou encore des prestations de loisirs sportifs, LGD attire l’attention de l’utilisateur sur la nécessité de s’enquérir avant la commande et au jour de la consommation de la prestation de l’aptitude de tous les bénéficiaires à en bénéficier en prenant toutes les précautions que leur état de santé impose, de sorte que la responsabilité de la société LGD ne saurait être engagée en cas d''incident ou d''accident imputable à un manquement de vigilance de votre part.</p>\n<p><br></p>\n<p>Dans certains cas, une visite médicale sera imposée par les prestataires de LGD aux Bénéficiaires pour s’assurer de ce que leur état de santé est compatible avec les prestations commandées. La société LGD ne pourra pas en être tenue responsable d’une décision de refus de les voir y participer en cas de refus à l’issue de la visite médicale.</p>\n<p><br></p>\n<h3>7.7 - ACTIVITES PROPOSEES</h3>\n<p><br></p>\n<p>Il est expressément convenu que certaines activités ou installations indiquées ne sont pas nécessairement disponibles hors saison touristiques.</p>\n<p><br></p>\n<p>Il est expressément convenu également que certaines activités ou installations peuvent être supprimées par notre prestataire notamment pour des raisons climatiques, en cas de force majeure ou encore en raison d’un nombre minimum de participants requis pour la réalisation de l''activité qui ne serait pas atteint (exemples : sport collectif, club enfant).</p>\n<p><br></p>\n<p>La plupart des plages, même les plages dites " privées ", sont ouvertes au public. Il se peut qu''elles ne soient pas nettoyées régulièrement.</p>\n<p><br></p>\n<p>Tous ces risques font partie intégrante du contrat que vous concluez et ne saurait relever de la responsabilité de LGD.</p>\n<p><br></p>\n<p>Par ailleurs, des activités sportives proposées avec participation sont souvent organisées par des prestataires extérieurs à l''hôtel. Ces activités qui ne figurent pas au descriptif de la prestation et ne sont pas contractuelles. Par conséquent, tout déplacement qui s’avérerait alors nécessaire resterait à la charge du client. De même toute suppression de ces activités au bon vouloir de l''organisateur faute de demandes suffisantes, ne saurait entraîner un quelconque dédommagement.</p>\n<p><br></p>\n<p>LGD entend enfin attirer l’attention de l’Utilisateur sur le fait que certaines activités proposées peuvent présenter des risques notamment pour les jeunes enfants. La responsabilité de la société LGD ne saurait être engagée en cas d''incident ou d''accident imputable à un manquement de vigilance de votre part.</p>\n<h2>ARTICLE 8 - CONDITIONS SPECIFIQUES A LA LOCATION SAISONNIERE DE LOGEMENTS MEUBLES—</h2>\n<h3>8.1 PREAMBULE</h3>\n<p><br></p>\n<p>LGD tient à attirer l’attention de l’utilisateur sur le fait qu’elle ne se présente pas comme fournisseur de logements de vacances, mais publie sur ses sites internet des offres locatives saisonnières meublées mises à sa disposition au nom et pour le compte des prestataires. Par conséquent, la responsabilité de LGD ne saurait être engagée qu’en cas de faute prouvée de sa part au moment de la réservation.</p>\n<p><br></p>\n<p>En sa qualité d’intermédiaire, LGD adresse une confirmation de réservation, ainsi qu’un voucher reprenant le descriptif du bien loué et les conditions de location du prestataire tels que figurant dans le descriptif de l’offre.. Le prestataire facture directement LGD. Par conséquent, LGD, en sa qualité d’intermédiaire, adresse elle-même une facture à l’utilisateur.</p>\n<p><br></p>\n<p>La réservation auprès de LGD entraine l’entière adhésion de l’utilisateur aux conditions générales de vente de cette dernière, ainsi qu’aux conditions spécifiques du prestataire telles que figurant dans le descriptif de l’offre et dans le voucher, et l’acceptation sans réserve de l’intégralité de leurs dispositions.</p>\n<p><br></p>\n<p>8.2 CLASSIFICATION</p>\n<p><br></p>\n<p>Il n’existe pas de classification officielle pour les locations de villas, chalets, appartements ou tout logement meublé saisonnier.</p>\n<p><br></p>\n<p>8.3 UTILISATION DES BIENS ET EQUIPEMENTS</p>\n<p><br></p>\n<p>L’utilisation des biens et des équipements est sous l’entière responsabilité de l’utilisateur.</p>\n<p>Si des conditions spécifiques de possession et de libération des lieux existent, elles seront détaillées dans le descriptif de l’offre et rappelées dans le voucher envoyé à l’utilisateur. A défaut, les clients prennent possession du logement à partir de 14 heures et le libèrent avant 12 heures.</p>\n<p><br></p>\n<p>8.4 DEPOT DE GARANTIE</p>\n<p><br></p>\n<p>A la remise des clés, lors de l’arrivée, l’utilisateur est tenu de verser un dépôt de garantie, dont le montant peut varier suivant l’importance et la valeur du bien. Ce montant est précisé dans le descriptif et rappelé dans le voucher envoyé au client. Selon les modalités de remise des clefs, la caution peut être demandée en chèque ou carte bancaire. En cas de refus de paiement, l’entrée de la location sera refusée à l’utilisateur.</p>\n<p>En tout état de cause, ce dépôt de garantie sera restitué dans un délai maximum d’un mois à compter du départ, déduction faite d’une provision correspondant aux éventuels dégradations, objets manquants, dommages, ou frais de ménage à retenir.</p>\n<p><br></p>\n<p>8.5 FOURNITURES - ETAT DES LIEUX - REGLEMENT INTERIEUR :</p>\n<p><br></p>\n<p>Le prestataire est responsable de la qualité et de la quantité de l''équipement intérieur, qui doit être en rapport avec le nombre de personnes prévues dans le descriptif.</p>\n<p>A cet effet, un état des lieux est établi dès l’arrivée avec ce dernier et un règlement intérieur est éventuellement communiqué.</p>\n<p>De la même manière un état des lieux de sortie sera établi le jour du départ.</p>\n<p>Ces documents constituent les seules références en cas de litige inhérent à la fourniture des lieux.</p>\n<p>En cas de constat d''objets manquants ou défectueux ou de problèmes particuliers, le client doit les signaler au prestataire sur place au plus tard 48 h après l’arrivée.</p>\n<p><br></p>\n<p>8.6 NUISANCES :</p>\n<p><br></p>\n<p>Ni LGD, ni le prestataire, ni le propriétaire ne pourront être tenus pour responsable des irrégularités et/ou troubles de jouissance pouvant provenir du disfonctionnement sur les réseaux d’eau, électricité, téléphone.</p>\n<p><br></p>\n<p>8.7 OBLIGATIONS DE L’UTILISATEUR :</p>\n<p><br></p>\n<p>L’utilisateur doit se comporter en bon père de famille et veiller au bon entretien des locaux .</p>\n<p>Le bien loué ne devra pas être habité, même pour quelques jours, par un nombre supérieur à celui prévu par le descriptif. A défaut le prestataire sera en droit de réclamer un supplément de loyer ou d''exiger le départ des personnes en surnombre.</p>\n<p>De même, il est interdit de monter des tentes dans le jardin, ou d''y faire stationner des caravanes.</p>\n<p>Les événements exceptionnels (mariages, réception) restent soumis à l’accord préalable du prestataire.</p>\n<p>L’utilisateur devra s''abstenir de façon absolue, de jeter dans les lavabos, baignoires, bidets, éviers, lavoirs, W-C, etc., des objets de nature à obstruer les canalisations, faute de quoi, il sera redevable des frais occasionnés pour la remise en service de ces appareils.</p>\n<p>A ce sujet, en raison des difficultés éprouvées en saison, LGD et le prestataire déclinent toute responsabilité inhérentes au délai d’intervention pour toutes les réparations qui s’avèreraient nécessaires au cours du séjour. Le prestataire s’engage à faire ses meilleurs efforts pour une intervention rapide et efficace.</p>\n<p><br></p>\n<p>L’utilisateur ne pourra réclamer aucune réduction de loyer, en raison de réparations urgentes et non prévisibles qui s’avéreraient nécessaires pendant le séjour.</p>\n<p>L’accès à la piscine, bains à remous, est interdit aux enfants non accompagnés d’un adulte.</p>\n<p>L’accès aux hammam et sauna, sont interdits aux enfants .Quant aux femmes enceintes, l’accès à l’ensemble des équipements susvisés est laissé à leur entière et seule responsabilité.</p>\n<p><br></p>\n<p>Les utilisateurs sont tenus de souscrire une assurance responsabilité civile pour la durée de leur séjour. (Voir Article 16 ASSURANCES).</p>\n<p>ARTICLE 9 - CONDITIONS FINANCIERES—</p>\n<p>9.1 - PRIX ET TAXES</p>\n<p><br></p>\n<p>9.1.1 - Dispositions générales</p>\n<p><br></p>\n<p>Les descriptifs des prestations présentées sur le site précisent pour chaque prestation les éléments inclus dans le prix et les éventuelles conditions particulières. Les prix indiqués sont ceux en vigueur à la date de la réservation.</p>\n<p><br></p>\n<p>Tous les prix sont affichés en Euros, toutes taxes comprises hors frais de dossier et/ou de livraison. Conformément au régime de TVA sur la marge des agents de voyages, les factures émises par LGD ne mentionnent pas la TVA collectée sur les prestations vendues.</p>\n<p><br></p>\n<p>En sus de ce prix, la société LGD facturera à l’utilisateur une somme forfaitaire, intitulée « frais de dossier », non comprise dans le prix, liée aux coûts et frais nécessaires au traitement des commandes, fixée comme suit :</p>\n<p><br></p>\n<p>pour toute commande sur nos offres restauration : 6 Euros TTC par dossier,</p>\n<p><br></p>\n<p>pour toute commande sur nos offres France, Europe et Bassin Méditerranéen : 15 Euros TTC par dossier,</p>\n<p><br></p>\n<p>pour toute commande sur nos offres Destinations Lointaines : 25 Euros TTC par dossier,</p>\n<p><br></p>\n<p>Il convient, par ailleurs, de préciser que certaines taxes ou frais supplémentaires (taxe de séjour, taxe touristique, frais de visa et/ou de carte de tourisme…) peuvent être imposés par les autorités de certains états. Ces taxes supplémentaires ne sont pas comprises dans le prix des prestations et lorsqu’elles existent, sont à la charge de l’utilisateur et peuvent devoir être réglées sur place.</p>\n<p><br></p>\n<p>En outre de manière générale, et sauf mention expresse contraire, ne sont pas compris dans les prix, l’ensemble des dépenses à caractère personnel ou accessoires à la prestation, telles que les assurances, les frais de livraison des titres de transport et carnets de voyages, les frais d’excédent de bagages, les frais de parking aéroport, les frais de vaccination, de blanchissage, de téléphone, de boissons, de room-service, les pourboires et même les excursions et l’utilisation des installations sportives, et plus généralement de toute prestation non expressément incluse dans le récapitulatif de la commande.</p>\n<p><br></p>\n<p>Enfin, lorsque la commande comprend une prestation d’hébergement, les prix sont calculés en fonction du nombre de nuitées et non du nombre de journées entières.</p>\n<p><br></p>\n<p>9.1.2 - Dispositions particulières aux forfaits touristiques</p>\n<p><br></p>\n<p>• Le prix des prestations de forfaits touristiques peut, à la demande des prestataires, être modifié jusqu''à 31 jours avant la date de votre départ en fonction des variations, notamment à la hausse, affectant le prix du carburant, des taxes légales ou règlementaires ou du taux de change.</p>\n<p><br></p>\n<p>Ces modifications ne seront répercutées dans le prix de la prestation qu’à proportion de leur part dans le calcul du prix de la prestation.</p>\n<p><br></p>\n<p>En cas de modification à la hausse inférieure ou égale à 40 euros par passager sur un vol moyen courrier (entre 1h et 5h de vol) et de 60 € par passager sur un vol long courrier (plus de 5h de vol), le débit sera prélevé automatiquement sur votre carte bleue et un message d''information vous sera adressé.</p>\n<p><br></p>\n<p>En cas de modification à la hausse supérieure à 41 euros par passager sur un vol moyen courrier et de 61 € par passager sur un vol long courrier, nous vous en informerons et il vous sera alors possible d''accepter ou d''annuler sans frais votre commande, dans les conditions de forme prévues aux stipulations de l’article 14.1 des présentes. Sans réponse de votre part, après relance, le montant sera automatiquement débité.</p>\n<p><br></p>\n<p>• Par ailleurs, les prix sont calculés en fonction du nombre de nuitées, et non du nombre de journées entières. Par nuitée, il convient d''entendre la période de mise à disposition de la chambre, soit entre 14 heures et 10 heures au plus tôt le lendemain.</p>\n<p><br></p>\n<p>9.1.3 - Dispositions particulières aux vols secs</p>\n<p><br></p>\n<p>En cas de variation du montant des taxes, redevances passagers et/ou surcharges carburant appliquées par les autorités et/ou compagnies aériennes, celles-ci seront intégralement et immédiatement répercutées sur le prix de tous les produits à compter de sa date d''application, y compris pour les clients déjà inscrits et ayant déjà réglé la prestation correspondante.</p>\n<p><br></p>\n<p>9.1.4 Dispositions particulières aux packages dynamiques </p>\n<p><br></p>\n<p>Vous avez choisi d’assembler deux prestations en vente séparément sur le site et comprenant un vol. Le tarif et la disponibilité des vols peuvent évoluer très rapidement pendant le pocessus d’achat, qu’il soit réalisé par téléphone ou sur notre site. Nous ne pouvons donc pas vous garantir le tarif avant la fin de la transaction.</p>\n<p><br></p>\n<p>9.2 - PAIEMENT</p>\n<p><br></p>\n<p>Toutes les commandes sont payables en Euros</p>\n<p><br></p>\n<p>• Le paiement de toute commande peut être effectué au moyen des cartes bancaires ou du paiement suivants :</p>\n<p>La carte bleue nationale,</p>\n<p>Les cartes VISA qui portent à droite le bandeau à trois couleurs VISA (bleu, blanc, ocre) et la colombe en hologramme,</p>\n<p>Les cartes EuroCard/MasterCard reconnaissables à leur hologramme MC</p>\n<p><br></p>\n<p><br></p>\n<p>Règlement par carte bancaire</p>\n<p><br></p>\n<p>L’utilisateur garantit qu''il est pleinement habilité à utiliser la carte de paiement qu''il utilisera et que cette dernière donne accès à des fonds suffisants pour couvrir tous les coûts nécessaires au règlement de la commande. L’engagement de payer donné au moyen d’une carte de paiement est irrévocable. Il ne peut être fait opposition au paiement qu’en cas de perte, de vol ou d’utilisation frauduleuse de la carte. En dehors de ces cas limitativement admis par le législateur, le porteur de la carte se rend coupable de fraude à la carte bancaire. Le droit d’opposition au paiement ne saurait notamment être utilisé pour pallier l’absence de droit de rétractation (cf. article 13 ci-après).</p>\n<p><br></p>\n<p>A chaque paiement par carte de crédit, l’utilisateur a le choix de mémoriser ou non ses informations bancaires afin de faciliter ses prochains paiements. L’utilisateur devra ensuite confirmer la date d’expiration de sa carte de crédit pour valider ses futurs paiements. Après 2 tentatives échouées de confirmation de la date d’expiration, les informations bancaires de l’utilisateur seront automatiquement supprimées. Si l’utilisateur souhaite supprimer ses informations bancaires une fois qu’elles ont été mémorisées, il peut le faire à tout moment depuis la rubrique « Mon Compte ». </p>\n<p><br></p>\n<p>Pour certaines prestations, l''utilisateur a la possibilité de ne payer qu''un acompte de 30% au moment de la réservation. Dans le cas du paiement de l''acompte de 30% par carte bancaire, le solde de la commande équivalent à 70% de sa valeur sera automatiquement prélevé sur les coordonnées bancaires utilisées lors de la commande 32 jours avant le départ. L''utilisateur peut également procéder à tout moment au règlement anticipé du solde par téléphone au 0892 426 425 (0,34 €/min). L''ensemble des informations relatives à l''acompte de 30% et au règlement du solde sont reprises dans la confirmation de la commande.</p>\n<p><br></p>\n<p>Règlement par chèques vacances</p>\n<p><br></p>\n<p>• LGD permet également au client de régler une partie de sa commande par chèques vacances (ANCV) uniquement lors de la réservation en ligne ou par téléphone et ce, à plus de 10 jours de la date de départ. Le mode opératoire est le suivant :</p>\n<p>- sur la page des modes de paiement, l’utilisateur choisit « ANCV » en mode de paiement, accepte les conditions générales de vente et clique sur « Continuer »,</p>\n<p>- l’utilisateur saisit ensuite les chèques vacances qu’il souhaite utiliser pour le règlement de sa commande et valide la saisie</p>\n<p>- il règle le montant restant de sa commande par carte bancaire et valide la totalité de ses paiements (chèques vacances et carte bancaire)</p>\n<p>- il est informé de la réussite de sa transaction sur une page récapitulative sur laquelle un N° de commande La Grande Decouverte est précisé.</p>\n<p>- il télécharge le bordereau de remise des chèques vacances à imprimer et à joindre impérativement avec les chèques vacances qui devront être envoyés sous 48h à l’adresse mentionnée sur le bordereau. Les chèques vacances devront être adressés par courrier recommandé avec AR et restent sous la responsabilité de l’utilisateur tant qu’ils ne sont pas réceptionnés à l’adresse indiquée sur le bordereau.</p>\n<p><br></p>\n<p>Si les chèques vacances ne sont pas réceptionnés sous 4 jours, le montant réglé par ANCV pour la commande sera prélevé sur la carte bancaire utilisée pour la commande. A réception des chèques vacances, la carte bancaire de l’utilisateur sera recrédité sous 72h maximum. Aucun chèque vacances ne sera pris en compte passé un délai de 30j après la commande.</p>\n<p><br></p>\n<p>En cas de réception partielle de chèques vacances, La Grande Decouverte procédera automatiquement au débit du montant non réceptionné.</p>\n<p><br></p>\n<p>En cas d’annulation de la commande, si le montant à rembourser à l’utilisateur est supérieur au montant réglé par carte bancaire pour la commande, le différentiel sera remboursé sous forme de crédit sur le compte membre.</p>\n<p>Exemple : </p>\n<p>une commande de 1 000€ réglée 600€ par CB et 400€ par chèques vacances.</p>\n<p>frais d’annulation : 300€ donc 700€ à rembourser à l’utilisateur</p>\n<p>remboursement : 600€ de remboursement sur la carte bancaire et 100€ de crédit sur le compte membre</p>\n<p><br></p>\n<p>Règlement par chèque</p>\n<p><br></p>\n<p>• LGD accepte également que tout ou partie de la commande soit réglée par chèques après avoir passé une commande en ligne ou par téléphone. Il convient, toutefois, de rappeler que la société LGD est elle-même engagée financièrement dès la commande envers son prestataire. Dès lors et afin d’éviter tout défaut de paiement, l’Utilisateur s’engage à respecter la procédure suivante :</p>\n<p>•   l’Utilisateur effectue sa commande en ligne ou par téléphone à l''aide de sa carte bancaire.</p>\n<p>•   Une fois la commande confirmée, l’utilisateur peut transmettre son chèque par courrier recommandé avec demande d’avis de réception accompagné des noms, prénoms et numéro de commande à l''adresse suivante : LGD, Le Patio – Entrée-B Etage 2, 684 avenue du Club Hippique, 13090 AIX EN PROVENCE au plus tard 40 jours avant la date de départ. </p>\n<p>•   Dès réception du règlement et si le solde de la commande est créditeur, LGD remboursera le montant par re-crédit de la carte bancaire.</p>\n<p><br></p>\n<p><br></p>\n<p>9.3 - TAUX DE CHANGE</p>\n<p><br></p>\n<p>Les taux de change pouvant figurer sur les sites sont uniquement mentionnés à titre indicatif. La société LGD ne garantit en aucun cas leur exactitude et ne saurait être responsable de leur actualisation en temps réel.</p>\n<p>ARTICLE 10 - REMISE DES DOCUMENTS DE VOYAGE—</p>\n<p>10.1 - DISPOSITIONS GENERALES</p>\n<p><br></p>\n<p>La remise des documents des prestations (bon d’échange, voucher, convocation aéroport et/ou titre de transport …) s’effectue par courrier électronique.</p>\n<p><br></p>\n<p>L''utilisateur devra donc communiquer à LGD une adresse " électronique " ou un numéro de télécopie permettant à LGD de lui adresser certains documents relatifs à son voyage, du lundi au samedi de 09h00 à 22h00.</p>\n<p><br></p>\n<p>Par précaution, dans le cas où cinq jours avant le départ (à condition d’avoir effectivement passé votre commande plus de cinq jours avant le départ) vous n''aviez pas reçu, pour quelque raison que ce soit, vos documents de voyage, LGD vous invite à le lui signaler.</p>\n<p><br></p>\n<p>Dans le cas où vous en feriez la demande expresse, ces documents de voyage pourraient vous être adressés sur support papier et par d’autre modes de livraison, sous réserve toutefois de la faisabilité de ces démarches eu égard à votre date de commande, votre date de départ ainsi que le cas échéant votre ville de départ. LGD vous facturerait alors, la somme forfaitaire de 50 Euros TTC par commande, les frais de livraison forfaitaires suivants.</p>\n<p><br></p>\n<p>En tout état de cause, en cas de transmission erronée par l’utilisateur de ses coordonnées, LGD décline toute responsabilité en cas de non exécution ou de mauvaise exécution du voyage due à la non réception des documents de voyage.</p>\n<p>ARTICLE 11 - Formalités administratives et sanitaires—</p>\n<p>Seuls une carte nationale d''identité ou un passeport en cours de validité permet de voyager. Aucun autre document ne peut servir à voyager, aussi bien pour un adulte, qu’un enfant ou un bébé</p>\n<p><br></p>\n<p>En règle générale, un passeport en cours de validité est indispensable pour les destinations étrangères hors Union Européenne que nous proposons. Certains pays exigent que la validité du passeport soit supérieure à six mois après la date de retour et également que vous soyez en possession d''un billet aller-retour ou d''un billet de sortie et de fonds suffisants.</p>\n<p><br></p>\n<p>Les enfants mineurs doivent être en possession de papier d''identité à leur nom. Les inscriptions de mineurs sur les passeports des parents, y compris les passeports "ancien modèle" dits passeports Delphine, sont désormais impossibles. Les mineurs doivent être titulaires d''un passeport individuel. Pour les mineurs accompagnés d''un seul parent de ou vers l''étranger et les DOM TOM en plus des formalités ordinaires, le parent accompagnant devra se munir du livret de famille ainsi que d''une autorisation de sortie du territoire donnée par le parent ne voyageant pas. Il en va de même pour les mineurs accompagnés d''un tiers.</p>\n<p><br></p>\n<p>LGD ne saurait en aucun cas accepter l''inscription d''un mineur non accompagné. En conséquence, LGD ne saurait être tenue pour responsable dans le cas où, malgré cet interdit, un mineur non accompagné serait inscrit, à son insu, sur un voyage.</p>\n<p><br></p>\n<p>De même LGD signale aux utilisateurs que certains pays exigent que le passager justifie d''une souscription à une assurance assistance/rapatriement pour délivrer le visa.</p>\n<p><br></p>\n<p>Les formalités administratives et/ou sanitaires nécessaires à l''exécution du voyage vous sont communiquées, à titre d’information, avant votre commande, dans le descriptif de nos prestations</p>\n<p><br></p>\n<p>LGD entend attirer l’attention de l’utilisateur sur le fait qu’il lui incombe obligatoirement de prendre connaissance des formalités à accomplir éventuellement pour se rendre dans le pays de destination et le cas échéant de transit.</p>\n<p><br></p>\n<p>LGD attire également l’attention de l’Utilisateur sur la nécessité de prendre connaissance des informations relatives aux risques sanitaires constatés par les autorités sanitaires dans les lieux de destination et de transit ainsi que des recommandations et des mesures sanitaires mises en place contre ces risques, avant le départ des Bénéficiaires et lors de leur séjour. Pour ce faire, L’utilisateur et les Bénéficiaires devront consulter le lien hypertexte figurant à cet effet sur http://www.diplomatie.gouv.fr/fr/conseils-aux-voyageurs_909/index.html.</p>\n<p><br></p>\n<p>En sus des informations communiquées par LGD et afin d’aider l’utilisateur autant que possible dans l’accomplissement de ses démarches et/ou formalités, LGD a fait le choix qualitatif de s’appuyer sur la compétence et le savoir faire d’un partenaire extérieur spécialisé, en incluant le contenu du site de la société Servinco/action-visas.com dans la rubriques formalités, qui vous rappellera gracieusement une nouvelle fois toutes les informations requises en la matière pour le pays de votre choix, c''est-à-dire celui de destination et/ou de transit. Cette société vous proposera, par ailleurs, si vous le souhaitez, des prestations payantes, afin de vous accompagner aux fins d’effectuer au nom et pour votre compte certaines formalités, telles que par exemple celles nécessaires à l’obtention de visas et ce, dans le respect de ses propres conditions de vente.</p>\n<p><br></p>\n<p>En ', 1, '');
INSERT INTO `cms` (`id`, `code`, `label`, `value`, `active`, `image`) VALUES
(4, 'bloc_image_cms _home_page', 'Explorez le monde', '<p>\n	D&eacute;couvrez o&ugrave; voyagent les gens, &agrave; travers le monde entier</p>\n', 1, '9d5e0-mk-1e1fa70b8faa213a13e565a24c573ce1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE `continent` (
`id` int(11) NOT NULL,
  `name` varchar(1024) DEFAULT NULL,
  `tag` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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

CREATE TABLE `departements` (
`id` int(11) NOT NULL,
  `code` varchar(2) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

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

CREATE TABLE `deroulement_voyage` (
`id` bigint(20) NOT NULL,
  `titrederoulement` varchar(1024) NOT NULL,
  `texte` text NOT NULL,
  `jour` int(11) DEFAULT NULL,
  `img_deroulement_voyage` text,
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `deroulement_voyage`
--

INSERT INTO `deroulement_voyage` (`id`, `titrederoulement`, `texte`, `jour`, `img_deroulement_voyage`, `id_voyage`) VALUES
(78, 'aze', 'aze', 10, NULL, 25),
(79, 'deroule', 'deroule', 1, NULL, 26);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
`id` int(11) NOT NULL,
  `question` varchar(1024) DEFAULT NULL,
  `reponse` varchar(45) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fichevoyage`
--

CREATE TABLE `fichevoyage` (
`id` int(11) NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `titre` char(90) DEFAULT NULL,
  `contenu` longtext,
  `date_creation` timestamp NULL DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_carnetvoyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fichevoyage`
--

INSERT INTO `fichevoyage` (`id`, `visible`, `titre`, `contenu`, `date_creation`, `id_utilisateur`, `id_carnetvoyage`) VALUES
(1, 1, 'permier article', '<p>test d''un premier article</p>', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `grid_order`
--

CREATE TABLE `grid_order` (
`id` bigint(20) unsigned NOT NULL,
  `numCommande` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `prix_total` varchar(255) NOT NULL,
  `reste_a_payer` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `grid_order`
--

INSERT INTO `grid_order` (`id`, `numCommande`, `date`, `nom`, `prenom`, `prix_total`, `reste_a_payer`, `payment`, `statut`) VALUES
(14, 1, '2015-07-25 15:02:18', 'boussemart', 'alexandre', '10,02 €', '9,02 €', 'Paypal', 'Annulée'),
(15, 2, '2015-07-25 17:34:32', 'boussemart', 'alexandre', '122,00 €', '109,80 €', 'Chèque', 'Accompte versé'),
(16, 3, '2015-08-03 19:34:43', 'boussemart', 'alexandre', '122,00 €', '109,80 €', 'Paypal', 'Facturée');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
`id` int(11) NOT NULL,
  `lien` text NOT NULL,
  `nom` text NOT NULL,
  `emplacement` varchar(255) NOT NULL,
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=416 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `lien`, `nom`, `emplacement`, `id_voyage`) VALUES
(402, 'produit/image_slider/P~~~~98b99b20ca0fa0ee05544365f420ce14.jpg', 'P', 'image_slider', 25),
(403, 'produit/image_slider/kl~~~~a31a9cdc0562af083e6663739e39a54b.jpg', 'kl', 'image_slider', 25),
(404, 'produit/banniere/lk~~~~68df41af51c64aebcd3a95202ea4a0a3.jpg', 'lk', 'banniere', 25),
(405, 'produit/banniere/mk~~~~1e1fa70b8faa213a13e565a24c573ce1.jpg', 'mk', 'banniere', 25),
(406, 'produit/banniere/kl~~~~4011f6aa5005334d495116a17e6c417b.jpg', 'kl', 'banniere', 25),
(407, 'produit/banniere/lk~~~~7b2a019070e98da58160c28a96ca4e64.jpg', 'lk', 'banniere', 25),
(408, 'produit/image_description/lk~~~~714aae75e6827654f4b04b1fe85bda90.jpg', 'lk', 'image_description', 25),
(409, 'produit/image_description/k~~~~be52ccbd9d169cc017b61d948d5a12d5.jpg', 'k', 'image_description', 25),
(410, 'produit/image_slider/titre~~~~ab81ff527fc83e2b0939fc845dc32a21.jpg', 'titre', 'image_slider', 26),
(411, 'produit/banniere/qd~~~~8a08478cbe1a242d059e01c329b1ddc9.jpg', 'qd', 'banniere', 26),
(412, 'produit/banniere/qs~~~~6771e9718f6dbc545cb6fba19562b042.jpg', 'qs', 'banniere', 26),
(413, 'produit/banniere/qsd~~~~d7adb51bb339d63644ab5845e1611c38.jpg', 'qsd', 'banniere', 26),
(414, 'produit/banniere/qsd~~~~5e8c1cce8325bc5c261a0b7f5ebf6b17.jpg', 'qsd', 'banniere', 26),
(415, 'produit/image_description/qs~~~~752da19659f5ca6a00a71ee0422839b3.jpg', 'qs', 'image_description', 26);

-- --------------------------------------------------------

--
-- Structure de la table `image_picto`
--

CREATE TABLE `image_picto` (
`id` int(11) NOT NULL,
  `lien` text NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image_picto`
--

INSERT INTO `image_picto` (`id`, `lien`, `nom`) VALUES
(1, 'produit/picto/c2f2b53c6b6d9c42967c2bf7966a26c6.png', ''),
(2, 'produit/picto/760ac822dfadcaa1034ab0185b8f9401.png', ''),
(3, 'produit/picto/8c63f7a379d077634de0c292bf4db66c.png', ''),
(4, 'produit/picto/dc26fc7a826b0334a2207b084b0160e7.png', ''),
(5, 'produit/picto/ae3068805aa5cf4720c111333846e372.png', ''),
(6, 'produit/picto/1c4889d06b77069675d1af9659eac664.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `info_voyage`
--

CREATE TABLE `info_voyage` (
`id` bigint(20) NOT NULL,
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
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `info_voyage`
--

INSERT INTO `info_voyage` (`id`, `date_depart`, `date_arrivee`, `depart`, `arrivee`, `formalite`, `asavoir`, `comprenant`, `place_dispo`, `prix`, `special_price`, `tva`, `id_voyage`) VALUES
(58, '2015-06-01', '2015-06-30', 'aze', 'aze', 'ici sont les formalité ici sont les formalitéici sont les formalitéici sont les formalitéici sont les formalitéici sont les formalitéici sont les formalitéici sont les formalitéici sont les formalité', 'ici sont les à savoir ici sont les à savoir ici sont les à savoir ici sont les à savoir ici sont les à savoir ici sont les à savoir ici sont les à savoir ici sont les à savoir ici sont les à savoir ', 'ici c''est comprenant ici c''est comprenant ici c''est comprenant ici c''est comprenant ici c''est comprenant ici c''est comprenant ici c''est comprenant ', 11, 10.02, 0, 10.02, 25),
(59, '2015-07-09', '2015-07-25', 'paris', 'bruxelles', 'FORMALITÉ', 'A SAVOIR', 'COMPRENANT', 12, 1200, 0, 20, 25),
(60, '2015-07-12', '2015-07-22', 'deroule', 'deroule', '', '', '', 10, 122, 0, 1, 26);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
`id` int(11) NOT NULL,
  `mail` varchar(1024) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
`id` int(11) NOT NULL,
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
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`id`, `id_voyage`, `id_utilisateur`, `id_billing`, `id_info_voyage`, `nb_participant`, `payment`, `acompte`, `ip`, `prix_total`, `reste_a_payer`, `sous_total`, `taxe`, `date`, `statut`) VALUES
(1, 25, 1, 5, 58, 1, 'PAYPAL', '1,00', '::1', '10,02', '9,02', '8,02', '2,00', '2015-07-25 15:02:18', 'Annulée'),
(2, 26, 1, 5, 60, 1, 'CHECKMO', '12,20', '::1', '122,00', '109,80', '97,60', '24,40', '2015-07-25 17:34:32', 'Accompte versé'),
(3, 26, 1, 5, 60, 1, 'PAYPAL', '12,20', '::1', '122,00', '109,80', '97,60', '24,40', '2015-08-03 19:34:43', 'Facturée');

-- --------------------------------------------------------

--
-- Structure de la table `page_cms`
--

CREATE TABLE `page_cms` (
`id` bigint(20) unsigned NOT NULL,
  `code` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `info` text,
  `dob` date NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `participants`
--

INSERT INTO `participants` (`id`, `nom`, `prenom`, `info`, `dob`, `id_order`) VALUES
(1, 'xwc', 'qsd', '', '2015-07-18', 1),
(2, 'ze', 'aze', '', '2015-07-03', 2),
(3, 'qsd', 'xcw', '', '2015-08-07', 3);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
`id` int(11) NOT NULL,
  `capital` varchar(1024) DEFAULT NULL,
  `villes_principales` text,
  `religion` text,
  `nombre_habitant` text,
  `monnaie` text,
  `fete` text,
  `langue_officielle` varchar(45) DEFAULT NULL,
  `meteo_temperature` varchar(45) DEFAULT NULL,
  `meteo_image` varchar(255) DEFAULT NULL,
  `drapeau` varchar(255) DEFAULT NULL,
  `id_continent` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `capital`, `villes_principales`, `religion`, `nombre_habitant`, `monnaie`, `fete`, `langue_officielle`, `meteo_temperature`, `meteo_image`, `drapeau`, `id_continent`, `id_voyage`) VALUES
(35, '', 'villes principales', 'religion', '', '', '', '', '', 'null', 'null', 1, 25),
(61, '', '', '', '', '', '', '', '', NULL, NULL, 1, 48),
(62, '', '', '', '', '', '', '', '', 'null', 'null', 1, 26);

-- --------------------------------------------------------

--
-- Structure de la table `picto_voyage`
--

CREATE TABLE `picto_voyage` (
  `id_picto` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `picto_voyage`
--

INSERT INTO `picto_voyage` (`id_picto`, `id_voyage`) VALUES
(1, 25),
(2, 25),
(3, 25),
(3, 26);

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE `user_admin` (
`id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `privilege` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `login`, `password`, `privilege`, `ip`) VALUES
(1, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(1024) NOT NULL,
  `description` mediumtext,
  `ip` varchar(255) NOT NULL,
  `banni` tinyint(1) NOT NULL,
  `token` varchar(45) DEFAULT NULL,
  `lien_image` text,
  `date_inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `password`, `mail`, `description`, `ip`, `banni`, `token`, `lien_image`, `date_inscription`) VALUES
(1, 'boussemart', 'alexandre', '0a5b3913cbc9a9092311630e869b4442', 'alexandre.boussemart94@gmail.com', 'des,', '::1', 0, '', NULL, '2015-07-20 22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
`id` int(11) NOT NULL,
  `titre` varchar(1024) NOT NULL,
  `phrase_accroche` longtext NOT NULL,
  `phrase_accroche_slider` varchar(255) DEFAULT NULL,
  `duree` varchar(255) NOT NULL,
  `description_first_bloc` longtext NOT NULL,
  `description_second_bloc` longtext NOT NULL,
  `description_third_bloc` longtext NOT NULL,
  `image_sous_slider` varchar(255) NOT NULL,
  `lattitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `titre`, `phrase_accroche`, `phrase_accroche_slider`, `duree`, `description_first_bloc`, `description_second_bloc`, `description_third_bloc`, `image_sous_slider`, `lattitude`, `longitude`) VALUES
(25, 'We go to Efficom We go to Efficom', 'Festival du Nadaam et découverte du nord de la Mongolie avec le lac Khovsgol', 'aze', '10', 'texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description', 'texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description', 'texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description texte de description', 'produit/image_sous_slider/5742b37d6738f0bbfb03b11e9cc64e7c.jpg', 47.9077, 106.883),
(26, 'test d''un voyage', 'phrase d''acroche de test d''un voyage home page', 'acroche slider', '12', 'Description premier bloc', 'Description premier bloc', 'Description premier bloc', 'produit/image_sous_slider/3316ef3b90abedbabf885d92ea102675.jpg', 1111, 111);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `billing`
--
ALTER TABLE `billing`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_billing_user1_idx` (`id_utilisateur`), ADD KEY `fk_billing_departements1_idx` (`id_departements`);

--
-- Index pour la table `carnetvoyage`
--
ALTER TABLE `carnetvoyage`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_carnetvoyage_utilisateur1_idx` (`id_utilisateur`), ADD KEY `fk_carnetvoyage_voyage1_idx` (`id_voyage`);

--
-- Index pour la table `cms`
--
ALTER TABLE `cms`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `continent`
--
ALTER TABLE `continent`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deroulement_voyage`
--
ALTER TABLE `deroulement_voyage`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_deroulement_voyage_voyage1_idx` (`id_voyage`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fichevoyage`
--
ALTER TABLE `fichevoyage`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_fichevoyage_utilisateur1_idx` (`id_utilisateur`), ADD KEY `fk_fichevoyage_carnetvoyage1_idx` (`id_carnetvoyage`);

--
-- Index pour la table `grid_order`
--
ALTER TABLE `grid_order`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_images_voyage1_idx` (`id_voyage`);

--
-- Index pour la table `image_picto`
--
ALTER TABLE `image_picto`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `info_voyage`
--
ALTER TABLE `info_voyage`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_info_voyage_travel1_idx` (`id_voyage`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`,`id_voyage`,`id_utilisateur`), ADD KEY `fk_voyage_has_utilisateur_utilisateur2_idx` (`id_utilisateur`), ADD KEY `fk_voyage_has_utilisateur_voyage2_idx` (`id_voyage`), ADD KEY `fk_order_billing1_idx` (`id_billing`), ADD KEY `fk_order_info_voyage1_idx` (`id_info_voyage`);

--
-- Index pour la table `page_cms`
--
ALTER TABLE `page_cms`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_participants_order1_idx` (`id_order`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_pays_continent1_idx` (`id_continent`), ADD KEY `fk_pays_voyage1_idx` (`id_voyage`);

--
-- Index pour la table `picto_voyage`
--
ALTER TABLE `picto_voyage`
 ADD PRIMARY KEY (`id_picto`,`id_voyage`), ADD KEY `fk_picto_has_voyage_voyage1_idx` (`id_voyage`), ADD KEY `fk_picto_has_voyage_picto1_idx` (`id_picto`);

--
-- Index pour la table `user_admin`
--
ALTER TABLE `user_admin`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `billing`
--
ALTER TABLE `billing`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `carnetvoyage`
--
ALTER TABLE `carnetvoyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `cms`
--
ALTER TABLE `cms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `continent`
--
ALTER TABLE `continent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT pour la table `deroulement_voyage`
--
ALTER TABLE `deroulement_voyage`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fichevoyage`
--
ALTER TABLE `fichevoyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `grid_order`
--
ALTER TABLE `grid_order`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=416;
--
-- AUTO_INCREMENT pour la table `image_picto`
--
ALTER TABLE `image_picto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `info_voyage`
--
ALTER TABLE `info_voyage`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `page_cms`
--
ALTER TABLE `page_cms`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pour la table `user_admin`
--
ALTER TABLE `user_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `billing`
--
ALTER TABLE `billing`
ADD CONSTRAINT `fk_billing_user1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `carnetvoyage`
--
ALTER TABLE `carnetvoyage`
ADD CONSTRAINT `fk_carnetvoyage_utilisateur1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_carnetvoyage_voyage1` FOREIGN KEY (`id_voyage`) REFERENCES `voyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `fichevoyage`
--
ALTER TABLE `fichevoyage`
ADD CONSTRAINT `fk_fichevoyage_carnetvoyage1` FOREIGN KEY (`id_carnetvoyage`) REFERENCES `carnetvoyage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_fichevoyage_utilisateur1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
