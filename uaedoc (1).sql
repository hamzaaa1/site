-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 07:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaedoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `e-mail`, `password`) VALUES
(1, 'admin', 'c4f0c13870999501d2ca939d58a51fff');

-- --------------------------------------------------------

--
-- Table structure for table `doctorants`
--

CREATE TABLE `doctorants` (
  `id_doc` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `CIN` varchar(50) NOT NULL,
  `CNE` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `lieu_de_naissance` varchar(50) NOT NULL,
  `directeur_these` varchar(50) NOT NULL,
  `sujet_these` varchar(100) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `adresse_mail` varchar(100) NOT NULL,
  `tlf` int(25) NOT NULL,
  `formation_doctorale` enum('SMPNT','BCG','IPDS','SI') NOT NULL,
  `etablissemant` enum('FS','ENSA','ENS','ENA') NOT NULL,
  `date_inscription` datetime NOT NULL,
  `observation` text DEFAULT NULL,
  `soutenance` enum('Non soutenu','Soutenu') NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorants`
--

INSERT INTO `doctorants` (`id_doc`, `Nom`, `Prenom`, `CIN`, `CNE`, `date_de_naissance`, `lieu_de_naissance`, `directeur_these`, `sujet_these`, `niveau`, `adresse`, `adresse_mail`, `tlf`, `formation_doctorale`, `etablissemant`, `date_inscription`, `observation`, `soutenance`, `id_admin`) VALUES
(22, 'bellaou', 'moussa', 'SB125483', 'D45568812', '2001-11-24', 'laayoun', 'Redouane', 'Inflation dollar', '2A', 'Taza hay madanii', 'azza.mohamed@gmail.com', 777111106, 'SI', 'ENS', '2022-06-24 03:01:44', '', 'Non soutenu', 1),
(23, 'Redouane', 'Amghnouss', 'SH209253', 'B12354257', '2001-06-16', 'Laayoune', 'Rachid Almorid', 'rorbotic', '1A', 'av 84 laayoune', 'redooox.gam@gmail.com', 606060606, 'BCG', 'FS', '2022-06-24 16:26:40', '', 'Soutenu', 1),
(25, 'Abdourabihi', 'Mohamed', 'SB125483', 'D45568812', '2022-06-03', 'Guelmim', 'kdkdkkd', 'mcmcjj', '2A', 'Hay hassani av la marine bloc o nr43', 'abdourabihi10@gmail.com', 777111106, 'BCG', 'ENS', '2022-06-27 19:30:37', 'MMMMMMMMMMMMM', 'Soutenu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `id_professeur` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `structure_de_recherche` varchar(100) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id_professeur`, `Nom`, `Prenom`, `departement`, `structure_de_recherche`, `specialite`, `id`) VALUES
(6, 'rachid', 'Mohamed', 'Informatique', 'Abdtt', 'VOIP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `id_structure` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `responsable` varchar(25) NOT NULL,
  `membres` varchar(1000) NOT NULL,
  `axes` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id_structure`, `nom`, `responsable`, `membres`, `axes`, `id_admin`) VALUES
(5, 'Abdtt', 'hamza', '182', '222', 1),
(6, 'Abdourabihi', 'hamza', '182', '222', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mail` (`e-mail`);

--
-- Indexes for table `doctorants`
--
ALTER TABLE `doctorants`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `FK_doctorants` (`id_admin`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id_professeur`),
  ADD KEY `FK_professeur` (`id`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id_structure`),
  ADD KEY `FK_structure` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctorants`
--
ALTER TABLE `doctorants`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id_professeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `id_structure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctorants`
--
ALTER TABLE `doctorants`
  ADD CONSTRAINT `FK_doctorants` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `FK_professeur` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `structure`
--
ALTER TABLE `structure`
  ADD CONSTRAINT `FK_structure` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
