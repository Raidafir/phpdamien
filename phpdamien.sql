-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 13 jan. 2024 à 13:34
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpdamien`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `role`, `bio`) VALUES
(1, 'Arai', 'Chercheur', 'Arai est un expert en réseaux, spécialisé dans Kali Linux NetHunter. Il a été le premier à installer et à personnaliser ce système pour d\'autres personnes. Sa maîtrise de Kali Linux NetHunter, une version de Kali L'),
(2, 'NESPO', 'MANAGER et Scammer', 'Nespo endosse le rôle de manager avec une longue expérience dans le monde du crime. Aujourd\'hui, il s\'est reconverti dans le domaine de l\'informatique, se spécialisant particulièrement dans l\'utilisation de Telegram et les activités de scam (escroque'),
(3, 'RAID', 'Développeur/Support', 'Raid est l\'expert en développement ... Sa connaissance approfondie et sa compétence technique sont essentielles pour assurer que l\'équipe reste en avance sur les développements technologiques et peut répondre efficacement à tout défi informatique.');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `Premium` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users` (`users`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `users`, `password`, `profile_picture`, `Premium`) VALUES
(1, 'raid', '$2y$10$oBmBn8D0MdG8uosP2hsqg.6l26XKXpXY/PD/Q2x8Arn6Ca8aM53oK', 'uploads/depositphotos_383107086-stock-illustration-crown-logo-template-vector-icon - Copie - Copie', 1),
(2, 'julien', '$2y$10$ouBYKhZV7h52hdEtL54auuGU7NBd4b89hDrKV53SsCobZekSSrivm', 'uploads/shema site.png', 0),
(3, 'louis', '$2y$10$5p2AthlTBqu8Fp5B/1PPvuI62d/lKKIAjN4k0sQxth2kARiz6muZW', 'uploads/images.jpeg', 0),
(4, 'nespo', '$2y$10$gIjc5yMz5apBIPAauMJieux9mLTFXSZY1ZxOL2n.BAeUDY7CvqDue', 'uploads/depositphotos_383107086-stock-illustration-crown-logo-template-vector-icon.jpg', 1),
(5, 'arai', '$2y$10$ekBKHEWW.BDNx5w.VM7hpOFEU0UCNTF2Df5oeqy0wJmDWumdZwjwS', 'uploads/depositphotos_383107086-stock-illustration-crown-logo-template-vector-icon - Copie.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
