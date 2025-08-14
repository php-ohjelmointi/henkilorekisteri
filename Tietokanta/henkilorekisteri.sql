-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 14, 2025 at 01:07 PM
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
  `sposti` varchar(150) NOT NULL,
  `puhelin` varchar(25) NOT NULL,
  `osoite` varchar(100) NOT NULL,
  `postinumero` varchar(6) DEFAULT NULL,
  `kansallisuus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `henkilot`
--

INSERT INTO `henkilot` (`id`, `etunimi`, `sukunimi`, `sposti`, `puhelin`, `osoite`, `postinumero`, `kansallisuus`) VALUES
(1, 'Syble', 'Monahan', 'Eudora_Willms@hotmail.com', '050 7654321', '08175 Comanche Center', '91035', 'NO'),
(2, 'Flavie', 'Terry', 'Beverly_Hermann@gmail.com', '044 265477', 'Katukuja 1 C 12', '00990', 'GE'),
(3, 'Chet', 'Kertzmann', 'Chet.Kertzmann@gmail.com', '044 44989675', 'Ruusukuja  102 C 12', '10347', 'US'),
(5, 'Marysa', 'Alwen', 'malwen0@independent.co.uk', '565 699 4929', '59 Vahlen Parkway', '664048', 'CO'),
(7, 'Jeanine', 'Ellingford', 'jellingford1@yahoo.com', '475 848 4594', '08175 Comanche Center', '88861', 'ID'),
(8, 'Adlai', 'Trace', 'atrace2@hao123.com', '218 824 6418', '4 Mariners Cove Street', '9103', 'NL'),
(9, 'Henryetta', 'Lorent', 'hlorent3@desdev.cn', '771 230 3320', '08 Huxley Plaza', '12354', 'CN'),
(10, 'Donnie', 'Rainon', 'drainon4@fda.gov', '311 166 3892', '8 Becker Place', '09930', 'CA'),
(11, 'Livia', 'Corr', 'lcorr5@istockphoto.com', '352 330 2552', '62 Heffernan Place', '94269', 'FR'),
(12, 'Chanda', 'Pibsworth', 'cpibsworth6@yolasite.com', '224 958 3601', '890 Washington Court', '52720', 'CN'),
(13, 'Cully', 'Langsdon', 'clangsdon7@biblegateway.com', '382 245 2962', '03650 Lyons Point', ' 52980', 'CN'),
(14, 'Janis', 'O\'Henery', 'johenery8@shareasale.com', '668 613 3156', '8024 Kings Drive', '903 33', 'SE'),
(15, 'Felix', 'Blazewicz', 'fblazewicz9@biblegateway.com', '983 286 0214', '2 Spohn Drive', '11910', 'FI'),
(16, 'Gabriellia', 'Guille', 'gguille0@photobucket.com', '270 937 4866', '18719 Clarendon Road', '07955', 'ID'),
(17, 'Nerita', 'Neachell', 'nneachell1@hhs.gov', '776 321 9445', '9 Mifflin Point', '249028', 'RU'),
(18, 'Phillipe', 'Wistance', 'pwistance2@csmonitor.com', '946 797 8789', '2830 Mockingbird Way', '67897', 'MZ'),
(19, 'Ambrosi', 'Baumford', 'abaumford3@theglobeandmail.com', '459 354 0661', '12161 Heffernan Street', '64820', 'CN'),
(20, 'Jens', 'Struthers', 'jstruthers4@shop-pro.jp', '315 543 5830', '61678 Tennessee Court', '00099', 'CN'),
(21, 'Jock', 'de Quincey', 'jdequincey5@macromedia.com', '735 425 4783', '210 Bayside Circle', '02401', 'BW'),
(22, 'Craggie', 'Brixham', 'cbrixham6@blog.com', '197 819 8835', '7 Stoughton Pass', '88861', 'MY'),
(23, 'Aryn', 'Elstub', 'aelstub7@forbes.com', '521 424 3114', '4418 Stuart Trail', '49023 ', 'FR'),
(24, 'Denys', 'Mauro', 'dmauro8@ucla.edu', '628 350 0074', '072 Eggendart Pass', '62100', 'CN'),
(25, 'Gillian', 'Dionisetti', 'gdionisetti9@fema.gov', '385 762 5317', '487 Vahlen Drive', '88900', 'CU');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
