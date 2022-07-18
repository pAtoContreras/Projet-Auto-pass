-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2022 at 03:38 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `prenom`, `nom`, `mail`, `mot_de_passe`, `role`) VALUES
(1, NULL, NULL, 'admin1@mail.fr', 'admin1', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `car_pass`
--

CREATE TABLE `car_pass` (
  `carpass_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'Client',
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL,
  `code_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `role`, `prenom`, `nom`, `telephone`, `adresse`, `mail`, `mot_de_passe`, `code_id`) VALUES
(3, 'Client', 'Prenom3', 'Nom3', NULL, NULL, 'mail@mail3.fr', 'Mdp3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `code_id` int(11) NOT NULL,
  `code_utilisateur` varchar(50) DEFAULT NULL,
  `code_activation` varchar(50) DEFAULT NULL,
  `partenaire_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donnees`
--

CREATE TABLE `donnees` (
  `donnees_id` int(11) NOT NULL,
  `fins_commerciales` varchar(50) DEFAULT NULL,
  `statistiques` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ecrire`
--

CREATE TABLE `ecrire` (
  `admin_id` int(11) NOT NULL,
  `Nouvelles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nouvelles`
--

CREATE TABLE `nouvelles` (
  `Nouvelles_id` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `contenu` varchar(50) DEFAULT NULL,
  `date_nouvelles` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partenaire`
--

CREATE TABLE `partenaire` (
  `partenaire_id` int(11) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'Partenaire'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partenaire`
--

INSERT INTO `partenaire` (`partenaire_id`, `prenom`, `nom`, `telephone`, `adresse`, `mail`, `mot_de_passe`, `role`) VALUES
(1, NULL, NULL, NULL, NULL, 'partenaire1@mail.fr', 'part1', 'Partenaire');

-- --------------------------------------------------------

--
-- Table structure for table `recuperer`
--

CREATE TABLE `recuperer` (
  `donnees_id` int(11) NOT NULL,
  `partenaire_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `vehicule_id` int(11) NOT NULL,
  `numero_de_plaque` varchar(50) DEFAULT NULL,
  `numero_chassis` varchar(50) DEFAULT NULL,
  `kilometrage` varchar(50) DEFAULT NULL,
  `carburant` varchar(50) DEFAULT NULL,
  `date_circulation_debut` varchar(50) DEFAULT NULL,
  `maitenance_vehicule` varchar(50) DEFAULT NULL,
  `partenaire_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`vehicule_id`, `numero_de_plaque`, `numero_chassis`, `kilometrage`, `carburant`, `date_circulation_debut`, `maitenance_vehicule`, `partenaire_id`, `client_id`) VALUES
(1, 'AA333AA', NULL, NULL, NULL, NULL, NULL, NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car_pass`
--
ALTER TABLE `car_pass`
  ADD PRIMARY KEY (`carpass_id`),
  ADD KEY `vehicule_id` (`vehicule_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `code_id` (`code_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`code_id`),
  ADD KEY `partenaire_id` (`partenaire_id`);

--
-- Indexes for table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`donnees_id`);

--
-- Indexes for table `ecrire`
--
ALTER TABLE `ecrire`
  ADD PRIMARY KEY (`admin_id`,`Nouvelles_id`),
  ADD KEY `Nouvelles_id` (`Nouvelles_id`);

--
-- Indexes for table `nouvelles`
--
ALTER TABLE `nouvelles`
  ADD PRIMARY KEY (`Nouvelles_id`);

--
-- Indexes for table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`partenaire_id`);

--
-- Indexes for table `recuperer`
--
ALTER TABLE `recuperer`
  ADD PRIMARY KEY (`donnees_id`,`partenaire_id`),
  ADD KEY `partenaire_id` (`partenaire_id`);

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`vehicule_id`),
  ADD KEY `partenaire_id` (`partenaire_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_pass`
--
ALTER TABLE `car_pass`
  MODIFY `carpass_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donnees`
--
ALTER TABLE `donnees`
  MODIFY `donnees_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nouvelles`
--
ALTER TABLE `nouvelles`
  MODIFY `Nouvelles_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `partenaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `vehicule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_pass`
--
ALTER TABLE `car_pass`
  ADD CONSTRAINT `car_pass_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`code_id`) REFERENCES `code` (`code_id`);

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `code_ibfk_1` FOREIGN KEY (`partenaire_id`) REFERENCES `partenaire` (`partenaire_id`);

--
-- Constraints for table `ecrire`
--
ALTER TABLE `ecrire`
  ADD CONSTRAINT `ecrire_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `ecrire_ibfk_2` FOREIGN KEY (`Nouvelles_id`) REFERENCES `nouvelles` (`Nouvelles_id`);

--
-- Constraints for table `recuperer`
--
ALTER TABLE `recuperer`
  ADD CONSTRAINT `recuperer_ibfk_1` FOREIGN KEY (`donnees_id`) REFERENCES `donnees` (`donnees_id`),
  ADD CONSTRAINT `recuperer_ibfk_2` FOREIGN KEY (`partenaire_id`) REFERENCES `partenaire` (`partenaire_id`);

--
-- Constraints for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`partenaire_id`) REFERENCES `partenaire` (`partenaire_id`),
  ADD CONSTRAINT `vehicule_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
