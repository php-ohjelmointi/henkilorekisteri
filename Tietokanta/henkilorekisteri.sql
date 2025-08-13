-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 13, 2025 at 11:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `henkilorekisteri`
--

-- --------------------------------------------------------

--
-- Table structure for table `henkilot`
--

CREATE TABLE `henkilot` (
  `id` int(11) NOT NULL,
  `etunimi` varchar(50) NOT NULL,
  `sukunimi` varchar(50) NOT NULL,
  `sposti` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `henkilot`
--

INSERT INTO `henkilot` (`id`, `etunimi`, `sukunimi`, `sposti`) VALUES
(1, 'Sakari', 'Kuppila-anttila', 'sakari.kuppila@mailway.com'),
(2, 'Antti', 'Kuppinen', 'antti.kuppinen@gmail.com'),
(3, 'James', 'Bond', 'james.bond@mi6.com'),
(4, 'Cathy', 'Lynch', 'Florida.Rowe@gmail.com'),
(5, 'Syble', 'Monahan', 'Eudora_Willms71@hotmail.com'),
(9, 'Flavie', 'Terry', 'Beverly_Hermann@gmail.com'),
(10, 'Chet', 'Kertzmann', 'Chet.Kertzmann@gmail.com'),
(14, 'test', 'test', 'test@test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `henkilot`
--
ALTER TABLE `henkilot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `henkilot`
--
ALTER TABLE `henkilot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
