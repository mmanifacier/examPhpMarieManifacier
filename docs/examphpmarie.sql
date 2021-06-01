-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 juin 2021 à 13:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examphpmarie`
--
CREATE DATABASE IF NOT EXISTS `examphpmarie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `examphpmarie`;

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `id_position` int(2) NOT NULL,
  `jersey_number` int(2) NOT NULL,
  PRIMARY KEY (`id_player`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`id_player`, `first_name`, `last_name`, `age`, `id_position`, `jersey_number`) VALUES
(1, 'Kylian', 'Mbappé', 22, 4, 7),
(2, 'Presnel', 'Kimpembe', 25, 2, 3),
(3, 'Raphaël', 'Varane', 28, 2, 5),
(4, 'Lucas', 'Digne', 27, 2, 18),
(5, 'Corentin', 'Tolisso', 26, 3, 12),
(6, 'Moussa', 'Sissoko', 31, 3, 17),
(7, 'Ousmane', 'Dembélé', 24, 4, 11),
(8, 'N\'Golo', 'Kanté', 30, 1, 13),
(9, 'Samuel', 'Umtiti', 27, 1, 23);

-- --------------------------------------------------------

--
-- Structure de la table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id_position` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_position`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `position`
--

INSERT INTO `position` (`id_position`, `name`) VALUES
(1, 'Gardien'),
(2, 'Défenseur'),
(3, 'Millieu'),
(4, 'Attaquant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
