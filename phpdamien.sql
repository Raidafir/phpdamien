-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 jan. 2024 à 20:54
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

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
  `bio` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `role`, `bio`) VALUES
(1, 'Arai', 'Chercheur', 'Arai est un virtuose des réseaux, spécialisé dans Kali Linux NetHunter, et joue un rôle crucial dans La Mafir en tant qu\'expert en systèmes de sécurité. Il est le premier à personnaliser ce système pour des utilisations spécifiques au cybercrime. Sa maîtrise de Kali Linux NetHunter lui permet de réaliser des attaques complexes, visant des systèmes de sécurité avancés et des infrastructures critiques. Outre sa compétence technique, Arai développe des outils de piratage de pointe, renforçant l\'arsenal du groupe. Malgré ses activités notoires, son identité reste un mystère, ce qui renforce son statut de légende parmi les cybercriminels.'),
(2, 'NESPO', 'MANAGER et Scammer', 'Nespo, avec son expérience de manager dans le crime organisé, est devenu un stratège clé dans le domaine du cybercrime. Il est spécialisé dans l\'utilisation de Telegram pour orchestrer des opérations d\'escroquerie à grande échelle. Sous sa direction, La Mafir a développé des réseaux de bots pour automatiser et maximiser l\'impact de leurs arnaques. En outre, Nespo joue un rôle essentiel dans le recrutement et la formation des nouveaux membres, en apportant son expertise du crime organisé. Il est également un maître du blanchiment d\'argent, utilisant des crypto-monnaies pour sécuriser les revenus du groupe.'),
(3, 'RAID', 'Développeur/Support', 'Raid, le maître du développement au sein de La Mafir, est essentiel pour maintenir le groupe à la pointe de la technologie. Il crée des outils de piratage personnalisés et des logiciels malveillants qui permettent au groupe de rester en avance sur les avancées technologiques. Ses compétences en programmation sont inégalées, et il assure également la sécurité et l\'efficacité de l\'infrastructure numérique du groupe. Raid est un personnage mystérieux et respecté, dont la connaissance approfondie et les compétences techniques sont essentielles pour La Mafir.');

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
