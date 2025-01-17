-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 17 jan. 2025 à 11:04
-- Version du serveur : 11.3.2-MariaDB
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `btm`
--

-- --------------------------------------------------------

--
-- Structure de la table `signalement`
--

DROP TABLE IF EXISTS `signalement`;
CREATE TABLE IF NOT EXISTS `signalement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `note` float NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `pos_long` double DEFAULT NULL,
  `pos_lat` double DEFAULT NULL,
  `date` date NOT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `signalement`
--

INSERT INTO `signalement` (`id`, `nom`, `prenom`, `note`, `img`, `pos_long`, `pos_lat`, `date`, `categorie`) VALUES
(94, '', 'Yann', 1.4, 'public/specimenpics/yann.jpg', 2.3683749, 48.7932843, '2025-01-17', 'malformation'),
(93, '', 'Sylvain', 7.59, 'public/specimenpics/sylvain.jpg', 2.3683749, 48.7932843, '2025-01-17', 'dents'),
(92, 'Le démon Togolais', 'Ryan', 0.01, 'public/specimenpics/ryan.jpg', 1.215829, 6.130419, '2025-01-17', 'pied'),
(91, 'Le GOAT', 'Robin', 9.97, 'public/specimenpics/robin.jpg', 2.3683749, 48.7932843, '2025-01-17', 'cheveux'),
(90, '', 'Ricardo', 2.19, 'public/specimenpics/ricardo.jpg', -8.776336224206336, 37.625167630361624, '2025-01-17', 'malformation'),
(89, '', 'Nathan', 7.42, 'public/specimenpics/nathan.jpg', 2.3683749, 48.7932843, '2025-01-17', 'corp'),
(88, '', 'Mathis', 3.01, 'public/specimenpics/mathis.jpg', -1.2041861698008693, 44.997928877095106, '2025-01-17', 'global'),
(87, '', 'Loan', 2.69, 'public/specimenpics/loan.jpg', 2.3683749, 48.7932843, '2025-01-17', 'pied'),
(86, '', 'Kevin', 7.46, 'public/specimenpics/kevin.jpg', 2.3683749, 48.7932843, '2025-01-17', 'visage'),
(85, '', 'Esteban', 7.69, 'public/specimenpics/esteban.jpg', 2.3683749, 48.7932843, '2025-01-17', 'corp'),
(84, '', 'Ellie', 9.75, 'public/specimenpics/ellie.jpg', 2.3683749, 48.7932843, '2025-01-17', 'cheveux'),
(83, '', 'Ahu', 2.48, 'public/specimenpics/ahu.jpg', -149.61149274821418, -17.55661380290457, '2025-01-17', 'visage'),
(96, '', '', 8.84, 'public/specimenpics/ricardo.jpg', 2.3683749, 48.7932843, '2025-01-17', 'Esthétique Générale');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
