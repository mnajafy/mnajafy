-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 juil. 2020 à 17:16
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `mnajafy`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'All categories', 'ipsum dolor sit amet consectetur adipisicing elit', '2020-07-10 12:08:06'),
(2, 'Site Templates', 'ipsum dolor sit amet consectetur adipisicing elit', '2020-07-10 12:08:06'),
(3, 'eCommerce', 'ipsum dolor sit amet consectetur adipisicing elit', '2020-07-10 12:08:06'),
(4, 'Marketing', 'psum dolor sit amet consectetur adipisicing elit', '2020-07-10 12:08:06');

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `template`
--

INSERT INTO `template` (`id`, `title`, `content`, `img`, `category_id`, `created_at`) VALUES
(1, 'ecommerce', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iure dolor aliquam obcaecati maiores repudiandae, dicta rem delectus a ipsam?', 'template_1.jpg', 2, '2020-07-10 12:05:00'),
(2, 'portfolio', 'adipisicing elit. Qui iure dolor aliquam obcaecati maiores repudiandae, dicta rem ', 'template_3.jpg', 4, '2020-07-10 12:05:00'),
(3, 'resturant', 'adipisicing elit. Qui iure dolor aliquam obcaecati maiores repudiandae, ', 'template_6.jpg', 4, '2020-07-11 18:00:00'),
(4, 'portfolio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iure dolor aliquam obcaecati maiores repudiandae', 'template_9.jpg', 2, '2020-07-11 19:00:00'),
(5, 'delta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iure dolor aliquam obcaecati maiores repudiandae', 'template_2.jpg', 3, '2020-07-11 19:00:00'),
(6, 'coifure', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iure dolor aliquam obcaecati maiores repudiandae', 'template_4.jpg', 4, '2020-07-11 19:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
