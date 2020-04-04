-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 25, 2020 at 09:02 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `kf`
--

-- --------------------------------------------------------

--
-- Table structure for table `activite`
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
-- Dumping data for table `activite`
--

INSERT INTO `activite` (`idactivite`, `nom`, `dateA`, `lieu`, `objet`, `idCompteRendu`) VALUES
(53, 'SOW ER', '2020-03-28', 'kkk', 'kkk', 0),
(54, 'Sané', '2020-03-21', 'kkk', 'kkk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `numero` varchar(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telepnone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`idactivite`),
  ADD KEY `idCompteRendu` (`idCompteRendu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activite`
--
ALTER TABLE `activite`
  MODIFY `idactivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
