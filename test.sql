-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 11:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `NomCategorie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `NomCategorie`) VALUES
(5, 'Accessoires'),
(2, 'Protein'),
(3, 'Supplements'),
(4, 'Vitamines');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `PrixTotal` varchar(45) DEFAULT NULL,
  `DateCommande` timestamp NULL DEFAULT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idCommande`, `PrixTotal`, `DateCommande`, `idUser`) VALUES
(2, '45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `commande_has_produit`
--

CREATE TABLE `commande_has_produit` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `NameProduit` varchar(45) DEFAULT NULL,
  `Rate` int(11) DEFAULT '0',
  `DateAjoute` timestamp NULL DEFAULT NULL,
  `idCategorie` int(11) NOT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Quantite` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `urlImage` varchar(150) NOT NULL,
  `idSubCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `NameProduit`, `Rate`, `DateAjoute`, `idCategorie`, `Description`, `Quantite`, `Prix`, `urlImage`, `idSubCategorie`) VALUES
(7, 'GOLD STANDARD 100% ISOLATE', 0, '2018-11-26 21:19:18', 2, 'Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ', 10, 45, 'Images\\GOLDSTANDARD.jpg', 3),
(8, 'ISOLATE', 0, '2018-11-26 21:19:18', 2, 'Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ', 10, 60, 'Images\\isolate.jpg', 3),
(9, 'ON WHEY', 0, '2018-11-26 21:19:18', 2, 'Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ', 10, 40, 'Images\\OnWhey.jpg', 3),
(10, 'BCAA 1000 CAPS', 0, '2018-11-26 21:19:18', 3, 'Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ', 20, 80, 'Images\\bcaa1000caps.jpg', 6),
(11, 'GOLD STANDARD 100% CASEIN', 0, '2018-11-26 21:19:18', 2, 'Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ', 50, 150, 'Images\\goldstandardcasein.jpg', 4),
(12, 'PRO GAINER', 0, '2018-11-26 21:19:18', 2, 'Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text TextText Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ', 40, 30, 'Images\\progainer.jpg', 5),
(13, 'AMINO ENERGY RTD', 0, '2018-11-27 12:39:50', 3, 'Text Text text Text Text Text text Text  Text Text text Text  Text Text text Text  Text Text text Text  Text Text text Text  Text Text text Text  ', 10, 99, 'Images\\aminoenergy.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subcategorie`
--

CREATE TABLE `subcategorie` (
  `idSubCategorie` int(11) NOT NULL,
  `NomSubCategorie` varchar(45) DEFAULT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategorie`
--

INSERT INTO `subcategorie` (`idSubCategorie`, `NomSubCategorie`, `idCategorie`) VALUES
(3, 'Whey', 2),
(4, 'Casein', 2),
(5, 'MassGain ', 2),
(6, 'PreWorkout', 3),
(7, 'PostWorkout', 3),
(8, 'AminoAcides', 3),
(9, 'Creatine', 3),
(10, 'Vitamines', 4),
(11, 'Specials', 4),
(12, 'Tops', 5),
(13, 'Accesoires', 5),
(14, 'Bottom', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `NomUser` varchar(45) DEFAULT NULL,
  `PrenomUser` varchar(45) DEFAULT NULL,
  `Tel` varchar(12) DEFAULT NULL,
  `AdresseMail` varchar(150) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Ville` varchar(45) DEFAULT NULL,
  `Rue` varchar(45) DEFAULT NULL,
  `Mdp` varchar(70) DEFAULT NULL,
  `EtatCompte` varchar(45) DEFAULT 'Non verifier',
  `Role` varchar(45) DEFAULT 'Client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `NomUser`, `PrenomUser`, `Tel`, `AdresseMail`, `City`, `Ville`, `Rue`, `Mdp`, `EtatCompte`, `Role`) VALUES
(1, 'Khalil', 'Lahmar', '54090561', 'lhrkhalil@gmail.com', 'Teboulba', 'Soussa', 'IbnJazzar', '12345', 'Non verifier', 'Client'),
(2, 'Olfa', 'Lahmar', '54025368', 'olfa@gmail.com', 'Teboulba', 'Monastir', 'Rue Ibn jazar', '98575224', 'Non verifier', 'Client'),
(3, 'mahmoud', 'Lahmar', '71452956', 'mahmoud@gmail.com', 'Salambo', 'Tunis', 'el Saleem ', 'azazaeea', 'Non verifier', 'Client'),
(9, 'Asma', 'Lahmar', '71452956', 'Asma@gmail.com', 'Ariana', 'Tunis', 'Moustfpha', '957474', 'Non verifier', 'Client'),
(10, 'AMENI', 'Mrad', '23189456', 'Emeni99@gmail.com', 'Mahdia', 'Mahdia', 'Rue Taher sfar', '', 'Non verifier', 'Client'),
(11, 'fahmi ', 'elkamel ', '555124789', 'elkame@gmail.com', 'ksoursef', 'Mahdia', 'azzazeae', '12365789', 'Non verifier', 'Client'),
(12, 'moez', 'lahmar', '12345', 'moez@gmail.com', 'ezzeze', 'Mahdia', 'sdcze', '98765', 'Non verifier', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`),
  ADD UNIQUE KEY `idCategorie` (`idCategorie`),
  ADD UNIQUE KEY `NomCategorie` (`NomCategorie`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD UNIQUE KEY `idCommande` (`idCommande`),
  ADD KEY `fk_Commande_User` (`idUser`);

--
-- Indexes for table `commande_has_produit`
--
ALTER TABLE `commande_has_produit`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `fk_Commande_has_Produit_Produit1` (`idProduit`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD UNIQUE KEY `idProduit` (`idProduit`),
  ADD UNIQUE KEY `NameProduit` (`NameProduit`),
  ADD KEY `fk_Produit_Categorie1` (`idCategorie`),
  ADD KEY `fk_Produit_SubCategorie1` (`idSubCategorie`);

--
-- Indexes for table `subcategorie`
--
ALTER TABLE `subcategorie`
  ADD PRIMARY KEY (`idSubCategorie`),
  ADD UNIQUE KEY `idSubCategorie` (`idSubCategorie`),
  ADD KEY `fk_SubCategorie_Categorie1` (`idCategorie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser` (`idUser`),
  ADD UNIQUE KEY `AdresseMail` (`AdresseMail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategorie`
--
ALTER TABLE `subcategorie`
  MODIFY `idSubCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_Commande_User` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commande_has_produit`
--
ALTER TABLE `commande_has_produit`
  ADD CONSTRAINT `fk_Commande_has_Produit_Commande1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Commande_has_Produit_Produit1` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_Produit_Categorie1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Produit_SubCategorie1` FOREIGN KEY (`idSubCategorie`) REFERENCES `subcategorie` (`idSubCategorie`);

--
-- Constraints for table `subcategorie`
--
ALTER TABLE `subcategorie`
  ADD CONSTRAINT `fk_SubCategorie_Categorie1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
