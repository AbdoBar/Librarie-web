-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2024 at 09:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarie`
--

-- --------------------------------------------------------

--
-- Table structure for table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `code_client` varchar(30) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `rue` varchar(100) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `addresse_mail` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(150) DEFAULT NULL,
  `statut` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CLIENT`
--

INSERT INTO `CLIENT` (`code_client`, `nom`, `rue`, `ville`, `code_postal`, `telephone`, `addresse_mail`, `mot_de_passe`, `statut`) VALUES
('012', 'abdo', '25', 'benabbas', '08047', '0667682806', 'abdomail', '2001', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `numero` int(10) NOT NULL,
  `code_client` varchar(30) NOT NULL,
  `code_livre` int(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `quantite` int(6) DEFAULT NULL,
  `statut` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `COMMANDE`
--

INSERT INTO `COMMANDE` (`numero`, `code_client`, `code_livre`, `date`, `quantite`, `statut`) VALUES
(1, '12', 1, '2024-01-01 11:47:08', 1, 'v'),
(2, '12', 123, '2024-01-01 11:52:25', 20, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `LIVRE`
--

CREATE TABLE `LIVRE` (
  `code_livre` int(10) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `LIVRE`
--

INSERT INTO `LIVRE` (`code_livre`, `titre`, `auteur`, `genre`, `date_publication`, `prix`) VALUES
(1, 'poo', 'dih', 'k', '2024-01-10', 10.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`code_client`);

--
-- Indexes for table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`numero`);

--
-- Indexes for table `LIVRE`
--
ALTER TABLE `LIVRE`
  ADD PRIMARY KEY (`code_livre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  MODIFY `numero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `LIVRE`
--
ALTER TABLE `LIVRE`
  MODIFY `code_livre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
