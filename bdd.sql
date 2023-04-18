-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 avr. 2023 à 18:44
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeu_de_role`
--
DROP DATABASE IF EXISTS `jeu_de_role`;
CREATE DATABASE IF NOT EXISTS `jeu_de_role` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jeu_de_role`;

-- --------------------------------------------------------

--
-- Structure de la table `combat`
--

CREATE TABLE `combat` (
  `id` int(11) NOT NULL,
  `personnage1_id` int(11) NOT NULL,
  `personnage2_id` int(11) NOT NULL,
  `date_combat` timestamp NOT NULL DEFAULT current_timestamp(),
  `resultat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `race` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `niveau` int(11) NOT NULL,
  `pv` int(11) NOT NULL,
  `force_` int(11) NOT NULL,
  `dexterite` int(11) NOT NULL,
  `constitution` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `sagesse` int(11) NOT NULL,
  `charisme` int(11) NOT NULL,
  `joueur_id` int(11) DEFAULT NULL,
  `piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `combat`
--
ALTER TABLE `combat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personnage1_id` (`personnage1_id`),
  ADD KEY `personnage2_id` (`personnage2_id`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `joueur_id` (`joueur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `combat`
--
ALTER TABLE `combat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `combat`
--
ALTER TABLE `combat`
  ADD CONSTRAINT `combat_ibfk_1` FOREIGN KEY (`personnage1_id`) REFERENCES `personnage` (`id`),
  ADD CONSTRAINT `combat_ibfk_2` FOREIGN KEY (`personnage2_id`) REFERENCES `personnage` (`id`);

--
-- Contraintes pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD CONSTRAINT `personnage_ibfk_1` FOREIGN KEY (`joueur_id`) REFERENCES `joueur` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `personnage_ibfk_2` FOREIGN KEY (`joueur_id`) REFERENCES `joueur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
