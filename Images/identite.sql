-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 12 oct. 2021 à 12:32
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
-- Base de données :  `identite`
--

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) DEFAULT NULL,
  `postnom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `nom`, `postnom`, `prenom`, `age`) VALUES
(12, 'MANDOMBE ', 'MANDOMBE ', 'GRADI', 12),
(13, 'Kabila', 'Kabange', 'Joseph', 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
