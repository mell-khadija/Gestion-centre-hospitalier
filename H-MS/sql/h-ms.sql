-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 01:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h-ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorspécialisation`
--

CREATE TABLE `doctorspécialisation` (
  `id` int(11) NOT NULL,
  `spécialisation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspécialisation`
--

INSERT INTO `doctorspécialisation` (`id`, `spécialisation`) VALUES
(1, 'Gynécologue'),
(2, 'Médecin généraliste'),
(3, 'Dermatologue'),
(4, 'Spécialiste oreille-nez-gorge'),
(5, 'Dentiste'),
(6, 'Psychiatre'),
(7, 'ophtalmologue');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nomPatient` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `agePatient` varchar(255) NOT NULL,
  `sexePatient` varchar(255) NOT NULL,
  `telPatient` varchar(255) NOT NULL,
  `date de naissance` varchar(255) NOT NULL,
  `diagnostic` text NOT NULL,
  `ordonnance` text NOT NULL,
  `numéro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `nomPatient`, `localisation`, `agePatient`, `sexePatient`, `telPatient`, `date de naissance`, `diagnostic`, `ordonnance`, `numéro`) VALUES
(2, 'leyla ben', 'casablanca', '40', 'Femme', '0725667841', '04 - 04 - 1979', 'asthme ', 'CH3+ACM', '4066'),
(3, 'mira deniz', 'casablanca', '38', 'Femme', '0713345678', '01 - 01 - 1985', 'No', 'dfgh', '1234'),
(4, 'hazar rim', 'casablanca', '25', 'Femme', '0725667841', '04 - 11 - 1994', 'diabetes', 'rteu', '4066');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` tinytext NOT NULL,
  `tel` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Spécialisation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `prenom`, `email`, `password`, `tel`, `status`, `Spécialisation`) VALUES
(1, 'azdad', 'farah', 'azdad@gmail.com', '654321', 677894321, 'doctor', 'Dermatologue'),
(2, 'sara', 'slaoui', 'slaoui@gmail.com', 'programming', 712345678, 'admin', 'NULL'),
(3, 'ahmed', 'benchakroun', 'benchakroun@gmail.com', '12345', 712345672, 'doctor', 'Médecin généraliste'),
(4, 'safia', 'elyoussfi', 'elyoussfi@gmail.com', 'wxyz', 712348942, 'doctor', 'Psychiatre'),
(5, 'karima', 'eljawhari', 'eljahwari@gmail.com', 'hospital', 725667841, 'doctor', 'Dermatologue'),
(6, 'youssra', 'berrada', 'berrada@gmail.com', 'abcd', 767848942, 'doctor', 'ophtalmologue'),
(7, 'Hassan', 'slimani', 'slimani@gmail.com', 'efgh', 725667867, 'doctor', 'Dentiste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorspécialisation`
--
ALTER TABLE `doctorspécialisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
