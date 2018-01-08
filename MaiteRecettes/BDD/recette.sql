-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 04 Décembre 2017 à 20:54
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `tj_cat_rct`
--

CREATE TABLE `tj_cat_rct` (
  `CAT_ID` bigint(20) UNSIGNED NOT NULL,
  `RCT_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tj_cat_rct`
--

INSERT INTO `tj_cat_rct` (`CAT_ID`, `RCT_ID`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 9),
(3, 8);

-- --------------------------------------------------------

--
-- Structure de la table `tj_igd_rct_uni`
--

CREATE TABLE `tj_igd_rct_uni` (
  `RCT_ID` bigint(20) UNSIGNED NOT NULL,
  `IGD_LABEL` varchar(255) NOT NULL,
  `UNI_LABEL` varchar(30) NOT NULL,
  `IGD_RCT_UNI_QUANTITE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_cat`
--

CREATE TABLE `t_categorie_cat` (
  `CAT_ID` bigint(20) UNSIGNED NOT NULL,
  `CAT_LABEL` varchar(255) NOT NULL,
  `CAT_DESCRIPTION` mediumtext NOT NULL,
  `CAT_ILLUSTRATION` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_categorie_cat`
--

INSERT INTO `t_categorie_cat` (`CAT_ID`, `CAT_LABEL`, `CAT_DESCRIPTION`, `CAT_ILLUSTRATION`) VALUES
(1, 'Entrées', 'Des entrées de fdp', 'benzai1.png'),
(2, 'Plats', 'Des plats de fdp', 'benzai2.png'),
(3, 'Desserts', 'Des desserts de fdp', 'benzai3.png');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire_com`
--

CREATE TABLE `t_commentaire_com` (
  `COM_ID` bigint(20) UNSIGNED NOT NULL,
  `COM_TEXTE` mediumtext NOT NULL,
  `COM_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UTI_ID` bigint(20) UNSIGNED DEFAULT NULL,
  `RCT_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_ingredient_igd`
--

CREATE TABLE `t_ingredient_igd` (
  `IGD_LABEL` varchar(255) NOT NULL,
  `IGD_DESCRIPTION` mediumtext NOT NULL,
  `IGD_ILLUSTRATION` varchar(80) DEFAULT NULL,
  `IGD_VALIDE` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_ID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_recette_rct`
--

CREATE TABLE `t_recette_rct` (
  `RCT_ID` bigint(20) UNSIGNED NOT NULL,
  `RCT_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `RCT_TITRE` varchar(80) NOT NULL,
  `RCT_DESCRIPTION` longtext NOT NULL,
  `RCT_TEMPS_PREPARATION` time NOT NULL,
  `RCT_TEMPS_CUISSON` time DEFAULT '00:00:00',
  `RCT_TEMPS_REPOS` time DEFAULT '00:00:00',
  `RCT_DIFFICULTE` enum('facile','moyen','difficile') NOT NULL DEFAULT 'facile',
  `RCT_COUT` enum('faible','moyen','eleve') NOT NULL DEFAULT 'faible',
  `RCT_STATUT` enum('brouillon','soumise','finale') NOT NULL DEFAULT 'brouillon',
  `RCT_ILLUSTRATION` varchar(80) NOT NULL,
  `UTI_ID` bigint(20) UNSIGNED NOT NULL,
  `RCT_NBPERSONNE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_recette_rct`
--

INSERT INTO `t_recette_rct` (`RCT_ID`, `RCT_DATE`, `RCT_TITRE`, `RCT_DESCRIPTION`, `RCT_TEMPS_PREPARATION`, `RCT_TEMPS_CUISSON`, `RCT_TEMPS_REPOS`, `RCT_DIFFICULTE`, `RCT_COUT`, `RCT_STATUT`, `RCT_ILLUSTRATION`, `UTI_ID`, `RCT_NBPERSONNE`) VALUES
(1, '2017-11-29 10:29:14', 'Jambonneau à la française', 'Trop bon !', '00:05:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'jambonneau.png', 1, 6),
(2, '2017-11-29 10:32:30', 'Plat de charcuterie', 'Trop bon !', '00:05:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'charcuterie.png', 1, 6),
(3, '2017-11-29 10:34:02', 'Jambon grillé', 'Trop bon !', '00:20:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'jambon_grille.png', 1, 3),
(4, '2017-11-29 10:35:42', 'Pâtes au beurre', 'Trop bon !', '00:15:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'beurre.png', 2, 2),
(5, '2017-11-29 10:36:36', 'Pâtes bolognaise', 'Trop bon !', '00:20:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'bolognaise.png', 2, 2),
(6, '2017-11-29 10:38:03', 'Pâtes carbonara', 'Trop bon !', '00:20:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'carbonara.png', 2, 6),
(7, '2017-11-29 10:39:09', 'Chili con carne', 'Trop bon !', '01:30:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'chili.png', 3, 6),
(8, '2017-11-29 10:40:10', 'Litchis', 'Trop bon !', '00:02:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'lichi.png', 3, 1),
(9, '2017-11-29 10:41:31', 'Porc au caramel', 'Trop bon !', '00:30:00', '00:00:00', '00:00:00', 'facile', 'faible', 'brouillon', 'porc_caramel.png', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_unite_uni`
--

CREATE TABLE `t_unite_uni` (
  `UNI_LABEL` varchar(30) NOT NULL,
  `UNI_SHORT_LABEL` varchar(15) NOT NULL,
  `UNI_DESCRIPTION` mediumtext NOT NULL,
  `UNI_VALIDE` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur_uti`
--

CREATE TABLE `t_utilisateur_uti` (
  `UTI_ID` bigint(20) UNSIGNED NOT NULL,
  `UTI_LOGIN` varchar(255) NOT NULL,
  `UTI_MAIL` varchar(255) NOT NULL,
  `UTI_NOM` varchar(255) NOT NULL,
  `UTI_PRENOM` varchar(255) NOT NULL,
  `UTI_PASS` varchar(40) NOT NULL,
  `UTI_ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_AVATAR` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_utilisateur_uti`
--

INSERT INTO `t_utilisateur_uti` (`UTI_ID`, `UTI_LOGIN`, `UTI_MAIL`, `UTI_NOM`, `UTI_PRENOM`, `UTI_PASS`, `UTI_ADMIN`, `UTI_AVATAR`) VALUES
(1, 'JeanBono', 'Jean.bono@gmail.com', 'Bono', 'Jean', '$JeanBono', 0, NULL),
(2, 'PatObeur', 'Pat.obeur@gmail.com', 'Obeur', 'Pat', '$PatObeur', 0, NULL),
(3, 'ChiLi', 'Chi.li@gmail.com', 'Li', 'Chi', '$ChiLi', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tj_cat_rct`
--
ALTER TABLE `tj_cat_rct`
  ADD PRIMARY KEY (`CAT_ID`,`RCT_ID`),
  ADD KEY `CAT_ID` (`CAT_ID`),
  ADD KEY `RCT_ID` (`RCT_ID`);

--
-- Index pour la table `tj_igd_rct_uni`
--
ALTER TABLE `tj_igd_rct_uni`
  ADD PRIMARY KEY (`RCT_ID`,`IGD_LABEL`,`UNI_LABEL`),
  ADD KEY `C_FK_IGD_IGD_RCT_UNI` (`IGD_LABEL`),
  ADD KEY `C_FK_UNI_IGD_RCT_UNI` (`UNI_LABEL`);

--
-- Index pour la table `t_categorie_cat`
--
ALTER TABLE `t_categorie_cat`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Index pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `RCT_ID` (`RCT_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_ingredient_igd`
--
ALTER TABLE `t_ingredient_igd`
  ADD PRIMARY KEY (`IGD_LABEL`),
  ADD KEY `IGD_LABEL` (`IGD_LABEL`),
  ADD KEY `C_FK_UTI_IGD` (`UTI_ID`);

--
-- Index pour la table `t_recette_rct`
--
ALTER TABLE `t_recette_rct`
  ADD PRIMARY KEY (`RCT_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  ADD PRIMARY KEY (`UNI_LABEL`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
  ADD PRIMARY KEY (`UTI_ID`),
  ADD UNIQUE KEY `UTI_LOGIN` (`UTI_LOGIN`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_categorie_cat`
--
ALTER TABLE `t_categorie_cat`
  MODIFY `CAT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  MODIFY `COM_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_recette_rct`
--
ALTER TABLE `t_recette_rct`
  MODIFY `RCT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
  MODIFY `UTI_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tj_cat_rct`
--
ALTER TABLE `tj_cat_rct`
  ADD CONSTRAINT `C_FK_CAT_CAT_RCT` FOREIGN KEY (`CAT_ID`) REFERENCES `t_categorie_cat` (`CAT_ID`),
  ADD CONSTRAINT `C_FK_RCT_CAT_RCT` FOREIGN KEY (`RCT_ID`) REFERENCES `t_recette_rct` (`RCT_ID`);

--
-- Contraintes pour la table `tj_igd_rct_uni`
--
ALTER TABLE `tj_igd_rct_uni`
  ADD CONSTRAINT `C_FK_IGD_IGD_RCT_UNI` FOREIGN KEY (`IGD_LABEL`) REFERENCES `t_ingredient_igd` (`IGD_LABEL`),
  ADD CONSTRAINT `C_FK_RCT_IGD_RCT_UNI` FOREIGN KEY (`RCT_ID`) REFERENCES `t_recette_rct` (`RCT_ID`),
  ADD CONSTRAINT `C_FK_UNI_IGD_RCT_UNI` FOREIGN KEY (`UNI_LABEL`) REFERENCES `t_unite_uni` (`UNI_LABEL`);

--
-- Contraintes pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD CONSTRAINT `C_FK_RCT_COM` FOREIGN KEY (`RCT_ID`) REFERENCES `t_recette_rct` (`RCT_ID`),
  ADD CONSTRAINT `C_FK_UTI_COM` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_ingredient_igd`
--
ALTER TABLE `t_ingredient_igd`
  ADD CONSTRAINT `C_FK_UTI_IGD` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_recette_rct`
--
ALTER TABLE `t_recette_rct`
  ADD CONSTRAINT `C_FK_UTI_RCT` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  ADD CONSTRAINT `C_FK_UNI_UTI` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
