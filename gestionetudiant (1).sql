-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 mars 2021 à 12:58
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionetudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `controle`
--

CREATE TABLE `controle` (
  `idcontrole` int(11) NOT NULL,
  `numcont` int(11) NOT NULL,
  `datecont` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `controle`
--

INSERT INTO `controle` (`idcontrole`, `numcont`, `datecont`) VALUES
(1, 3, '2021-10-05');

-- --------------------------------------------------------

--
-- Structure de la table `cycle`
--

CREATE TABLE `cycle` (
  `idcycle` int(11) NOT NULL,
  `codecycle` varchar(50) NOT NULL,
  `nomcycle` varchar(100) NOT NULL,
  `filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cycle`
--

INSERT INTO `cycle` (`idcycle`, `codecycle`, `nomcycle`, `filiere`) VALUES
(3, 'C1', 'Cycle1', 4),
(4, 'C2', 'Cycle2', 4);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `cycle` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `datenais` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `matricule`, `noms`, `cycle`, `niveau`, `datenais`) VALUES
(2, 'M123', 'RAKOTO', 3, 2, '2003-03-05'),
(3, 'M124', 'RABE Jean', 3, 2, '2001-07-02');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `idfiliere` int(11) NOT NULL,
  `codefiliere` varchar(50) NOT NULL,
  `nomfiliere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `codefiliere`, `nomfiliere`) VALUES
(4, 'FIL11', 'Filiere2'),
(5, 'FIL12', 'Filiere2');

-- --------------------------------------------------------

--
-- Structure de la table `gestionetudiant_uggroups`
--

CREATE TABLE `gestionetudiant_uggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gestionetudiant_ugmembers`
--

CREATE TABLE `gestionetudiant_ugmembers` (
  `UserName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionetudiant_ugmembers`
--

INSERT INTO `gestionetudiant_ugmembers` (`UserName`, `GroupID`) VALUES
('admin', -1);

-- --------------------------------------------------------

--
-- Structure de la table `gestionetudiant_ugrights`
--

CREATE TABLE `gestionetudiant_ugrights` (
  `TableName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionetudiant_ugrights`
--

INSERT INTO `gestionetudiant_ugrights` (`TableName`, `GroupID`, `AccessMask`) VALUES
('controle', -1, 'ADESPIM'),
('cycle', -1, 'ADESPIM'),
('Dashboard', -1, 'ADESPIM'),
('etudiant', -1, 'ADESPIM'),
('filiere', -1, 'ADESPIM'),
('filiere Chart', -1, 'ADESPIM'),
('gestionetudiant_users', -1, 'ADESPIM'),
('matiere', -1, 'ADESPIM'),
('niveau', -1, 'ADESPIM'),
('note', -1, 'ADESPIM'),
('note Chart', -1, 'ADESPIM');

-- --------------------------------------------------------

--
-- Structure de la table `gestionetudiant_users`
--

CREATE TABLE `gestionetudiant_users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionetudiant_users`
--

INSERT INTO `gestionetudiant_users` (`ID`, `username`, `password`, `email`, `fullname`, `groupid`, `active`) VALUES
(1, 'admin', 'admin', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `idmatriere` int(11) NOT NULL,
  `codematiere` varchar(50) NOT NULL,
  `nommatiere` varchar(100) NOT NULL,
  `coeff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idmatriere`, `codematiere`, `nommatiere`, `coeff`) VALUES
(1, 'M1', 'Matiere1', 5);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `idniveau` int(11) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `annee` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`idniveau`, `niveau`, `annee`) VALUES
(2, 'M1', '2016');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `idnote` int(11) NOT NULL,
  `idetudiant` int(11) NOT NULL,
  `idmatiere` int(11) NOT NULL,
  `idcontrole` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`idnote`, `idetudiant`, `idmatiere`, `idcontrole`, `note`) VALUES
(1, 2, 1, 1, 20),
(2, 3, 1, 1, 3),
(3, 2, 1, 1, 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `controle`
--
ALTER TABLE `controle`
  ADD PRIMARY KEY (`idcontrole`);

--
-- Index pour la table `cycle`
--
ALTER TABLE `cycle`
  ADD PRIMARY KEY (`idcycle`),
  ADD KEY `filiere` (`filiere`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idetudiant`),
  ADD KEY `cycle` (`cycle`),
  ADD KEY `niveau` (`niveau`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idfiliere`);

--
-- Index pour la table `gestionetudiant_uggroups`
--
ALTER TABLE `gestionetudiant_uggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Index pour la table `gestionetudiant_ugmembers`
--
ALTER TABLE `gestionetudiant_ugmembers`
  ADD PRIMARY KEY (`UserName`(50),`GroupID`);

--
-- Index pour la table `gestionetudiant_ugrights`
--
ALTER TABLE `gestionetudiant_ugrights`
  ADD PRIMARY KEY (`TableName`(50),`GroupID`);

--
-- Index pour la table `gestionetudiant_users`
--
ALTER TABLE `gestionetudiant_users`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idmatriere`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`idniveau`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`idnote`),
  ADD KEY `noteetudiant` (`idetudiant`),
  ADD KEY `notecontrole` (`idcontrole`),
  ADD KEY `notematiere` (`idmatiere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `controle`
--
ALTER TABLE `controle`
  MODIFY `idcontrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `idcycle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idfiliere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `gestionetudiant_uggroups`
--
ALTER TABLE `gestionetudiant_uggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestionetudiant_users`
--
ALTER TABLE `gestionetudiant_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idmatriere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `idniveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `idnote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cycle`
--
ALTER TABLE `cycle`
  ADD CONSTRAINT `filiere` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`idfiliere`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `cycle` FOREIGN KEY (`cycle`) REFERENCES `cycle` (`idcycle`),
  ADD CONSTRAINT `niveau` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`idniveau`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `notecontrole` FOREIGN KEY (`idcontrole`) REFERENCES `controle` (`idcontrole`),
  ADD CONSTRAINT `noteetudiant` FOREIGN KEY (`idetudiant`) REFERENCES `etudiant` (`idetudiant`),
  ADD CONSTRAINT `notematiere` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatriere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
