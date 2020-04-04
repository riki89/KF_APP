-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 05 avr. 2020 à 01:12
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kf`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `idactivite` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `dateA` varchar(25) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `idCompteRendu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`idactivite`, `nom`, `dateA`, `lieu`, `objet`, `idCompteRendu`) VALUES
(53, 'SOW ER', '2020-03-28', 'kkk', 'kkk', 0),
(54, 'Sané', '2020-03-21', 'kkk', 'kkk', 0);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `numero` varchar(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telepnone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idP` int(11) NOT NULL,
  `nomP` varchar(100) NOT NULL,
  `prenomP` varchar(100) NOT NULL,
  `telephoneP` varchar(100) NOT NULL,
  `mailP` varchar(100) NOT NULL,
  `adresseP` varchar(100) NOT NULL,
  `fonctionP` varchar(100) NOT NULL,
  `loginP` varchar(100) NOT NULL,
  `mdpP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idP`, `nomP`, `prenomP`, `telephoneP`, `mailP`, `adresseP`, `fonctionP`, `loginP`, `mdpP`) VALUES
(43, 'Diallo    ', 'Mamadou  Boussouriou   ', '775999513   ', 'diallo99bouss@gmail.com       ', 'Medina     45   ', 'president', 'admin       ', 'admin       '),
(55, 'diallo', 'yaya', '78555556', 'yaya12@gmail.com', 'gniary', 'Informaticien', 'yaya', 'yaya'),
(58, 'diallo', 'mamadou boussouriou', ' 8888888', 'diallo99bouss@gmail.com', 'med', 'Relation interne', 'diallo', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`idactivite`),
  ADD KEY `idCompteRendu` (`idCompteRendu`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idP`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `idactivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
