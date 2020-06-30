-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 30 juin 2020 à 10:54
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `abby`
--
CREATE DATABASE IF NOT EXISTS `abby` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `abby`;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `partie` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `description`, `categorie`, `partie`, `prix`, `image`) VALUES
(1, 'Monaco Spring', '', 'Manteau', 'haut', 69.99, 'manteau_homme.jpg'),
(2, 'Pull&Bear', '', 'Sweatshirt', 'haut', 19.99, 'sweat_p&b2.jpg'),
(3, 'London', '', 'Pull', 'haut', 10, 'pull_london.jpg'),
(4, 'Levi\'s', '', 'Jeans', 'pantalon', 25.99, 'pantalon_p&b.jpg'),
(5, 'Bershka', '', 'Jeans', 'pantalon', 20.95, 'pantalon_p&b2.jpg'),
(6, 'Adidas', '', 'Bas Survêtement', 'pantalon', 25.99, 'pantalon_p&b3.jpg'),
(7, 'Adidas', '', 'Sneakers', 'chaussure', 45.99, 'chaussure_adidas.jpg'),
(8, 'Vans', '', 'Old school', 'chaussure', 65.99, 'chaussure_vans.jpg'),
(9, 'Nike', '', 'Training', 'chaussure', 69.99, 'chaussure_nike.jpg');
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
