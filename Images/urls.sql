-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 12 oct. 2021 à 12:33
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
-- Base de données :  `urls`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2021_08_04_044135_create_urls_table', 1),
(3, '2021_08_04_065251_add_unique_constraint_on_raccourci_in_urls_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `urls`
--

DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raccourci` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urls_raccourci_unique` (`raccourci`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `urls`
--

INSERT INTO `urls` (`id`, `url`, `raccourci`) VALUES
(1, 'http://google.com', 'azert'),
(2, 'http://facebook.com', '75cGP'),
(3, 'http://google.com', 'OoySg'),
(4, 'http://facebook.com', 'N9ikh'),
(5, 'zadzadaz', 'gHLxU'),
(6, 'azsdz', 'EPeGA'),
(7, 'zadzadaz', 'sibOe'),
(8, 'zadzadaz', 'AudZJ'),
(9, 'zadzadaz', 'MVc4g'),
(10, 'zadzadaz', 'A3bIX'),
(11, 'http://google.com', 'HgLTs'),
(12, 'http://google.com', 'graf1'),
(13, 'http://google.com', 'R3Asc'),
(14, 'http://google.com', 'bMgbO'),
(15, 'http://google.com', 'FJexQ'),
(16, 'http://google.com', 'lkpI8'),
(17, 'http://google.com', '8Bt2C'),
(18, 'http://google.com', 'M0MJ5'),
(19, 'http://google.com', 'K3b4i'),
(20, 'http://google.com', 'S0r9h'),
(21, 'http://google.', 'ZMJKX'),
(22, 'http://google.', 'Z9UjU'),
(23, 'http://google.com', 'KQhn0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
