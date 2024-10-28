-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Lun 15 Avril 2024 à 17:36
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bdbenghorbelomar`
--
CREATE DATABASE `bdbenghorbelomar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdbenghorbelomar`;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `Mat` varchar(4) NOT NULL,
  `DateCons` datetime NOT NULL,
  `DateRDV` date NOT NULL,
  `DetailCons` varchar(50) NOT NULL,
  `Honoraire` decimal(7,3) NOT NULL,
  PRIMARY KEY (`Mat`,`DateCons`),
  KEY `Mat` (`Mat`),
  KEY `Mat_2` (`Mat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `consultation`
--

INSERT INTO `consultation` (`Mat`, `DateCons`, `DateRDV`, `DetailCons`, `Honoraire`) VALUES
('0502', '2023-04-24 12:30:00', '2023-06-02', 'Arythmie cardiaque', '95.000'),
('0721', '2023-04-24 10:00:00', '2023-05-22', 'Hypertension', '70.000');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `Mat` varchar(4) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  PRIMARY KEY (`Mat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`Mat`, `Nom`, `Prenom`) VALUES
('0502', 'Radhoueni', 'Saber'),
('0721', 'Ben salem', 'Tarek');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`Mat`) REFERENCES `patient` (`Mat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
