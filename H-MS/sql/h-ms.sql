-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 08:18 AM
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
(2, 'Gynécologue'),
(3, 'Médecin généraliste'),
(4, 'Dermatologue'),
(5, 'Spécialiste oreille-nez-gorge'),
(6, 'Dentiste'),
(7, 'Psychiatre'),
(8, 'ophtalmologue'),
(9, 'cardiology'),
(10, 'chirugien'),
(11, 'uuu'),
(12, 'reza');

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
(1, 'meryem filali', 'Tanger', '24', 'Femme', '0613665477', '1993-07-09', 'cardio', 'Oxymag, Biofar', '6581'),
(2, 'leyla ben', 'casablanca', '35', 'Femme', '0725661011', '04 - 04 - 1979', 'asthme ', 'CH3+ACM', '1110'),
(3, 'mira deniz', 'casablanca', '38', 'Femme', '0713345678', '01 - 01 - 1985', 'No', 'dfgh', '1234'),
(4, 'hazar rim', 'casablanca', '25', 'Femme', '0725667841', '04 - 11 - 1994', 'diabetes', 'rteu', '4066'),
(9, 'hhggk', 'TREIU', '56', 'Femme', '45345777', '2020-08-06', 'rty', 'ytr', '1627'),
(10, 'selma jaouhari', 'rabat', '25', 'Femme', '0678964322', '1995-06-07', 'animya', 'fumafer', '3148');

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` int(11) NOT NULL,
  `doctor Spécialisation` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `patientId` int(11) DEFAULT NULL,
  `frais de consultation` int(11) DEFAULT NULL,
  `rendez-vous Date` varchar(255) DEFAULT NULL,
  `rendez-vous Heure` varchar(255) DEFAULT NULL,
  `date d'affichage` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`, `doctor Spécialisation`, `doctorId`, `patientId`, `frais de consultation`, `rendez-vous Date`, `rendez-vous Heure`, `date d'affichage`) VALUES
(1, 'Dentiste', 7, 3, 600, '2020-06-29', '9:15 AM', '2020-06-23 16:31:28'),
(2, 'ophtalmologue', 6, 2, 8050, '2020-11-08', '1:00 PM', '2020-11-05 08:28:54'),
(3, 'Dermatologue', 5, 4, 500, '2020-11-30', '5:30 PM', '2020-11-10 16:41:34'),
(4, 'Médecin généraliste', 3, 0, NULL, '2020-10-03', '03:20', '2020-09-01 22:16:21'),
(5, 'ophtalmologue', 6, 0, NULL, '2020-09-19', '02:18', '2020-09-01 22:18:50');

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
(1, 'azdad', 'farahe', 'azdad@gmail.com', '654321', 677894321, 'doctor', 'Dermatologue'),
(2, 'sara', 'slaoui', 'admin@gmail.com', 'programming', 712345678, 'admin', 'NULL'),
(3, 'ahmed', 'benchakroun', 'benchakroun@gmail.com', '12345', 712345672, 'doctor', 'Médecin généraliste'),
(4, 'safia', 'elyoussfi', 'elyoussfi@gmail.com', 'wxyz', 712348942, 'doctor', 'Psychiatre'),
(5, 'karima', 'eljawhari', 'eljahwari@gmail.com', 'hospital', 725667841, 'doctor', 'Dermatologue'),
(6, 'youssra', 'berrada', 'berrada@gmail.com', 'abcd', 767848942, 'doctor', 'ophtalmologue'),
(7, 'Hassan', 'slimani', 'slimani@gmail.com', 'efgh', 725667867, 'doctor', 'Dentiste'),
(9, 'selawi', 'ihssane', 'slawi@gmail.com', '09876', 620627145, 'doctor', 'Gynécologue'),
(10, 'hhggg', 'yyturrt', 'ggghh@gmail.com', 'rety', 615627132, 'doctor', 'Psychiatre'),
(11, 'hhggg', 'yyturrt', 'ggghh@gmail.com', 'rety', 615627132, 'doctor', 'Psychiatre');

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
-- Indexes for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
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
-- AUTO_INCREMENT for table `doctorspécialisation`
--
ALTER TABLE `doctorspécialisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
