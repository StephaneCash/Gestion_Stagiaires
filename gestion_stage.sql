-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 26 sep. 2021 à 18:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `idE` int(11) NOT NULL AUTO_INCREMENT,
  `nomE` varchar(255) NOT NULL,
  `adresseE` varchar(255) NOT NULL,
  `typeE` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`idE`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`idE`, `nomE`, `adresseE`, `typeE`, `ville`, `password`, `role`) VALUES
(3, 'Vodacom Congo Kin', 'Boulevard 30 juin', 'tÃ©lÃ©com', 'Kinshasa', '', ''),
(4, 'Airtel', 'Boulevard 30 juin', 'tÃ©lÃ©com', 'Kinshasa', '', ''),
(5, 'ONATRA', 'kk', 'zeze', '', '1212', 'entreprise'),
(6, 'CREAS MIT', 'AV LODJA GOMBE', 'BOITE CODES', 'KIN', '', ''),
(7, 'OGEFREM', 'AV de la SCIENCE 5 GOMBE', 'EXPORT ET IMPORT', 'Kinshasa', '', ''),
(8, 'Africell', 'AV de la SCIENCE 5 GOMBE', 'Opera Tel', 'Kinshasa', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `idF` int(11) NOT NULL AUTO_INCREMENT,
  `nomF` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  PRIMARY KEY (`idF`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idF`, `nomF`, `section`, `niveau`) VALUES
(3, 'MÃ©canique Agricole et Automobile', 'MÃ©canique', 'LMD'),
(5, 'Informatique Industrielle et RÃ©seaux', 'MÃ©canique', 'Licence'),
(6, 'Informatique de Gestion', 'MÃ©canique', 'Graduat'),
(8, 'Maintenance', 'MÃ©canique', 'Licence'),
(9, 'Construction mÃ©ta et navale', 'Informatique', 'LMD'),
(10, 'MÃ©canique Agricole et Automobile', 'MÃ©canique', 'Graduat');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `entreprise` varchar(45) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  `filiere` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `entreprise`, `result`, `filiere`) VALUES
(11, 'KIKONI', 'zed', 'zedze', 'M', '', '', ''),
(12, 'ze', 'zed', 'Drieds', 'M', '', '', ''),
(9, 'ze', 'Prof', 'Drieds', 'M', '', '', ''),
(10, 'KIKONI', 'Prof', 'StÃ©phane', 'M', '', '', ''),
(15, 'BulaBula', 'Prof', 'Drieds', 'M', 'zejkdhjke', '', 'zdjnkekd'),
(8, 'ze', 'Prof', 'Drieds', 'M', '', '', ''),
(6, 'ETYH', 'TRDYRY', 'YRR', 'F', 'OGEFRE', 'WhatsApp Image 2021-05-09 at 22.03.58.jpeg', 'Informatique industrielle'),
(16, 'BulaBula', 'Prof', 'StÃ©phane', 'M', 'zejkdhjke', '', 'zdjnkekd'),
(17, ' 70 ', 'Prof', 'StÃ©phane', 'F', 'OGEFRE', '51U25Lxb3HL._AC_.jpg', 'Informatique industrielle'),
(18, ' KIKONI ', 'Dosa', 'StÃ©phane', 'M', 'Onatra', 'maxresdefault.jpg', 'Informatique industrielle');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

DROP TABLE IF EXISTS `stagiaire`;
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `nomS` varchar(255) NOT NULL,
  `postnomS` varchar(255) NOT NULL,
  `prenomS` varchar(255) NOT NULL,
  `sexeS` varchar(12) NOT NULL,
  `idF` int(11) NOT NULL,
  `idE` int(11) NOT NULL,
  `fiche` varchar(255) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idS`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`idS`, `nomS`, `postnomS`, `prenomS`, `sexeS`, `idF`, `idE`, `fiche`, `status`) VALUES
(2, 'CASH', 'kklj', 'zed', 'M', 9, 3, 'YY', '2'),
(60, 'BulaBula', 'Prof', 'StÃ©phane', 'M', 5, 3, '', '2'),
(68, 'ze', 'zed', 'Drieds', 'M', 8, 5, '', '2'),
(70, 'KIKONI', 'Dosa', 'StÃ©phane', 'M', 9, 7, 'TP_ECOLOGIE_KIKONI_StÃ©phane_L2 II_ISPT-Kin.rar', '2'),
(71, 'Jean Moulin', 'FrÃ©deric', 'Rigobert', 'M', 6, 8, '', '1'),
(72, 'KIKONI', 'Dosa', 'Drieds', 'M', 5, 4, '', '0'),
(73, 'BulaBula', 'Dosa', 'StÃ©phane', 'M', 8, 4, '', '0');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `etat` varchar(1) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idU`, `username`, `email`, `password`, `etat`, `role`) VALUES
(1, 'Bula-Bula', 'EmmanuelSixMille@gmail.com', '12345', '1', 'ADMIN'),
(2, 'Entreprise', 'kk', '11111', '1', 'entreprise');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
