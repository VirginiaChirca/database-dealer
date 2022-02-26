-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 04:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `username`, `password`) VALUES
(1, 'Mălina', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `clientID` int(11) NOT NULL,
  `ID_admin` int(11) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `sex` enum('M','F') NOT NULL,
  `strada` varchar(20) NOT NULL,
  `numar` varchar(50) NOT NULL,
  `oras` varchar(20) NOT NULL,
  `judet` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`clientID`, `ID_admin`, `nume`, `prenume`, `sex`, `strada`, `numar`, `oras`, `judet`, `email`, `telefon`) VALUES
(4, 1, 'Noe', 'Viviana', 'F', 'Florilor', '8', 'Slobozia', 'Ialomița', 'noe_vivi@yahoo.com', '0726479854'),
(5, 1, 'Stan', 'Livi', 'M', 'Traian', '10', 'Bucuresti', 'Bucuresti', 'stan_li@yahoo.com', '0745255555'),
(8, 1, 'Alecu', 'Horia', 'M', 'Poeni', '11', 'Brăila', 'Brăila', 'alec_hor@yahoo.com', '0724587444'),
(9, 1, 'Florea', 'Cristian', 'F', 'Roua', '5', 'Slobozia', 'Ialomița', 'flor_cristi@yahoo.com', '0724578457'),
(10, 1, 'Dinu', 'Elisabeta', 'F', 'Licurici', '10', 'Iasi', 'Iasi', 'eli_dinu@yahoo.com', '0735412121');

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE `comenzi` (
  `comandaID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `data_achizitie` date NOT NULL,
  `Mod_plata` varchar(30) NOT NULL,
  `stare_comanda` varchar(30) NOT NULL,
  `pret_comanda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`comandaID`, `clientID`, `data_achizitie`, `Mod_plata`, `stare_comanda`, `pret_comanda`) VALUES
(2, 4, '2022-01-04', 'Numerar', 'Comanda plătita', 16650),
(26, 10, '2021-11-21', 'Transfer bancar', 'livrata', 13900),
(27, 4, '2022-01-10', 'Transfer bancar', 'Comanda plătita', 18990),
(28, 5, '2021-11-15', 'Transfer bancar', 'in curs de livrare', 13500),
(29, 9, '2021-11-05', 'Transfer bancar', 'in curs de livrare', 44900);

-- --------------------------------------------------------

--
-- Table structure for table `dotari`
--

CREATE TABLE `dotari` (
  `nume_dotare` varchar(40) NOT NULL,
  `descriere_dotare` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dotari`
--

INSERT INTO `dotari` (`nume_dotare`, `descriere_dotare`) VALUES
('Airbag-uri frontale', NULL),
('Controlul tractiunii (ASR)', NULL),
('Interior din piele', NULL),
('Oglinda retrovizoare interioara electroc', NULL),
('Oglinzi retrovizoare ajustabile electric', NULL),
('Scaune fata incalzite', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dotari_masini_stoc`
--

CREATE TABLE `dotari_masini_stoc` (
  `masinaID` int(11) NOT NULL,
  `nume_dotare` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dotari_masini_stoc`
--

INSERT INTO `dotari_masini_stoc` (`masinaID`, `nume_dotare`) VALUES
(6, 'Interior din piele'),
(7, 'Controlul tractiunii (ASR)'),
(7, 'Interior din piele'),
(8, 'Airbag-uri frontale'),
(9, 'Scaune fata incalzite'),
(10, 'Controlul tractiunii (ASR)'),
(11, 'Interior din piele');

-- --------------------------------------------------------

--
-- Table structure for table `masini`
--

CREATE TABLE `masini` (
  `masinaID` int(11) NOT NULL,
  `comandaID` int(11) DEFAULT NULL,
  `marca` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `versiune` varchar(10) DEFAULT NULL,
  `generatie` varchar(11) DEFAULT NULL,
  `an_fabricatie` year(4) NOT NULL,
  `combustibil` varchar(20) NOT NULL,
  `putere` int(11) NOT NULL,
  `cutie_viteza` varchar(20) NOT NULL,
  `kilometraj` int(11) NOT NULL,
  `pret_masina` int(11) NOT NULL,
  `stare_masina` enum('nou','second hand') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masini`
--

INSERT INTO `masini` (`masinaID`, `comandaID`, `marca`, `model`, `versiune`, `generatie`, `an_fabricatie`, `combustibil`, `putere`, `cutie_viteza`, `kilometraj`, `pret_masina`, `stare_masina`) VALUES
(6, 26, 'Mercedes-Benz', 'CLS', '', 'CLS350', 2012, 'Diesel', 258, 'Automata', 244, 13900, 'second hand'),
(7, 28, 'Hyundai', 'Tucson', '', '', 2015, 'Diesel', 116, 'Manuala', 198, 13500, 'second hand'),
(8, 27, 'Audiiiiiii', 'A5', 'Sportback ', '2015', 2015, 'Diesel', 190, 'Automata', 216, 18990, 'second hand'),
(9, 29, 'Porsche', 'Macan', '', '', 2017, 'Benzina', 252, 'Automata', 88, 44900, 'second hand'),
(10, 2, 'Renault', 'Koleos', '', 'II', 2018, 'Diesel', 131, 'Manuala', 208, 16650, 'second hand'),
(11, NULL, 'Kia', 'Sportage', NULL, NULL, 2015, 'Benzina', 135, 'Manuala', 179863, 11500, 'second hand');

-- --------------------------------------------------------

--
-- Table structure for table `programare`
--

CREATE TABLE `programare` (
  `programareID` int(11) NOT NULL,
  `ora` time NOT NULL,
  `data_programare` date NOT NULL,
  `locatie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programare`
--

INSERT INTO `programare` (`programareID`, `ora`, `data_programare`, `locatie`) VALUES
(1, '08:24:54', '2022-01-05', 'București'),
(2, '14:25:17', '2022-01-29', 'București');

-- --------------------------------------------------------

--
-- Table structure for table `test_drive`
--

CREATE TABLE `test_drive` (
  `testdriveID` int(11) NOT NULL,
  `programareID` int(11) NOT NULL,
  `masinaID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_drive`
--

INSERT INTO `test_drive` (`testdriveID`, `programareID`, `masinaID`, `clientID`) VALUES
(1, 1, 8, 8),
(2, 2, 6, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`clientID`),
  ADD KEY `ID_admin` (`ID_admin`);

--
-- Indexes for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`comandaID`),
  ADD KEY `clientID` (`clientID`);

--
-- Indexes for table `dotari`
--
ALTER TABLE `dotari`
  ADD PRIMARY KEY (`nume_dotare`);

--
-- Indexes for table `dotari_masini_stoc`
--
ALTER TABLE `dotari_masini_stoc`
  ADD PRIMARY KEY (`masinaID`,`nume_dotare`),
  ADD KEY `nume_dotare` (`nume_dotare`);

--
-- Indexes for table `masini`
--
ALTER TABLE `masini`
  ADD PRIMARY KEY (`masinaID`),
  ADD KEY `comandaID` (`comandaID`);

--
-- Indexes for table `programare`
--
ALTER TABLE `programare`
  ADD PRIMARY KEY (`programareID`);

--
-- Indexes for table `test_drive`
--
ALTER TABLE `test_drive`
  ADD PRIMARY KEY (`testdriveID`),
  ADD KEY `clientID` (`clientID`),
  ADD KEY `masinaID` (`masinaID`),
  ADD KEY `programareID` (`programareID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `comandaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dotari_masini_stoc`
--
ALTER TABLE `dotari_masini_stoc`
  MODIFY `masinaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `masini`
--
ALTER TABLE `masini`
  MODIFY `masinaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `programare`
--
ALTER TABLE `programare`
  MODIFY `programareID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_drive`
--
ALTER TABLE `test_drive`
  MODIFY `testdriveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clienti`
--
ALTER TABLE `clienti`
  ADD CONSTRAINT `clienti_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`);

--
-- Constraints for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD CONSTRAINT `comenzi_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `clienti` (`clientID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dotari_masini_stoc`
--
ALTER TABLE `dotari_masini_stoc`
  ADD CONSTRAINT `dotari_masini_stoc_ibfk_1` FOREIGN KEY (`masinaID`) REFERENCES `masini` (`masinaID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dotari_masini_stoc_ibfk_2` FOREIGN KEY (`nume_dotare`) REFERENCES `dotari` (`nume_dotare`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masini`
--
ALTER TABLE `masini`
  ADD CONSTRAINT `masini_ibfk_1` FOREIGN KEY (`comandaID`) REFERENCES `comenzi` (`comandaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test_drive`
--
ALTER TABLE `test_drive`
  ADD CONSTRAINT `test_drive_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `clienti` (`clientID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_drive_ibfk_2` FOREIGN KEY (`masinaID`) REFERENCES `masini` (`masinaID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_drive_ibfk_3` FOREIGN KEY (`programareID`) REFERENCES `programare` (`programareID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
