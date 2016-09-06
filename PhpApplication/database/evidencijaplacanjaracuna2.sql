-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2015 at 05:24 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evidencijaplacanjaracuna2`
--

-- --------------------------------------------------------

--
-- Table structure for table `firma`
--

CREATE TABLE IF NOT EXISTS `firma` (
`IdFirme` int(11) NOT NULL,
  `NazivFirme` varchar(60) NOT NULL,
  `BrojRacunaFirme` decimal(30,0) NOT NULL,
  `BrojTelefonaFirme` decimal(25,0) NOT NULL,
  `AdresaFirme` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `firma`
--

INSERT INTO `firma` (`IdFirme`, `NazivFirme`, `BrojRacunaFirme`, `BrojTelefonaFirme`, `AdresaFirme`) VALUES
(1, 'Vodovod', '111224478', '381064256179', 'Narodne omladine 55, Zrenjanin'),
(2, 'Toplana', '105542647', '3810233150176', 'Rade Koncara 10, Zrenjanin'),
(3, 'SBB', '1701457245', '381023510820', 'Dr Zorana Kamenkovica 9, Zrenjanin');

-- --------------------------------------------------------

--
-- Table structure for table `korisnikusluge`
--

CREATE TABLE IF NOT EXISTS `korisnikusluge` (
`IdKorisnika` bigint(13) NOT NULL,
  `BrojRacunaKorisnika` decimal(30,0) NOT NULL,
  `ImeKorisnika` varchar(20) NOT NULL,
  `PrezimeKorisnika` varchar(20) NOT NULL,
  `BrojTelefonaKorisnika` decimal(25,0) NOT NULL,
  `KorisnickoIme` varchar(30) NOT NULL,
  `Lozinka` varchar(30) NOT NULL,
  `AdresaKorisnika` varchar(60) NOT NULL,
  `VrstaKorisnika` varchar(30) NOT NULL,
  `jePredstavnikFirme` tinyint(1) NOT NULL,
  `JMBG` bigint(13) NOT NULL,
  `IdFirme` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `korisnikusluge`
--

INSERT INTO `korisnikusluge` (`IdKorisnika`, `BrojRacunaKorisnika`, `ImeKorisnika`, `PrezimeKorisnika`, `BrojTelefonaKorisnika`, `KorisnickoIme`, `Lozinka`, `AdresaKorisnika`, `VrstaKorisnika`, `jePredstavnikFirme`, `JMBG`, `IdFirme`) VALUES
(11, '12345678', 'Jelena', 'Jelenic', '381623457813', 'Jelenic', '445566', 'Nikole Tesle 12', 'PredstavnikFirme', 1, 1203987853678, 1),
(13, '345672919', 'Petar', 'Petrovic', '381645732871', 'Petrovic', '789123', 'Jovana Popovica 9', 'ObicanKorisnik', 0, 2110994890009, NULL),
(14, '5679820183', 'Nikola', 'Nikolic', '381623457813', 'admin', 'admin', 'Petra Kocica 34', 'Administrator', 0, 2205985853298, NULL),
(15, '12345678', 'Jovan', 'Jovic', '38106573728', 'Jovic', 'jovic90', 'Avalska 25', 'ObicanKorisnik', 0, 2805990890009, NULL),
(16, '772827349', 'Jovana', 'Tasic', '381627638929', 'Tasic', 'tasic', 'Kosmajska 3', 'PredstavnikFirme', 1, 1908976853678, 2),
(17, '889283948', 'Sava', 'Bakic', '381642332551', 'Bakic', 'bakic', 'Igmanska 43', 'PredstavnikFirme', 1, 503984890009, 3),
(20, '84037372837', 'Katarina', 'Katic', '3810658943283', 'Katic', 'katic', 'Pupinova 75', 'ObicanKorisnik', 0, 1101880710800, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE IF NOT EXISTS `racun` (
`IdRacuna` int(11) NOT NULL,
  `IdUsluge` int(11) NOT NULL,
  `DatumKreiranjaRacuna` date NOT NULL,
  `IznosZaUplatu` float NOT NULL,
  `DatumRokaPlacanja` date NOT NULL,
  `DatumUplate` date NOT NULL,
  `jePlacen` tinyint(1) NOT NULL,
  `DatumPrispeca` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `racun`
--

INSERT INTO `racun` (`IdRacuna`, `IdUsluge`, `DatumKreiranjaRacuna`, `IznosZaUplatu`, `DatumRokaPlacanja`, `DatumUplate`, `jePlacen`, `DatumPrispeca`) VALUES
(5, 15, '2015-10-01', 950, '2015-12-02', '2015-10-06', 1, '2015-10-04'),
(7, 1, '2015-09-30', 700, '2015-12-01', '2015-10-07', 1, '2015-10-02'),
(8, 16, '2015-10-02', 1000, '2015-12-06', '2015-10-10', 0, '2015-10-05'),
(9, 17, '2015-09-29', 1000, '2015-11-29', '2015-10-07', 0, '2015-10-02'),
(12, 18, '2015-09-28', 1000, '2015-12-09', '2015-10-11', 0, '2015-10-09'),
(13, 21, '2015-10-02', 1000, '2015-12-02', '2015-10-06', 1, '2015-10-03'),
(14, 23, '2015-10-05', 1400, '2015-12-07', '2015-10-12', 1, '2015-10-09'),
(15, 22, '2015-10-04', 1300, '2015-12-04', '2015-10-15', 0, '2015-10-08'),
(16, 24, '2015-10-06', 1300, '2015-12-10', '2015-10-12', 1, '2015-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `ugovor`
--

CREATE TABLE IF NOT EXISTS `ugovor` (
`IdUgovora` int(11) NOT NULL,
  `IdFirme` int(11) NOT NULL,
  `DatumSklapanjaUgovora` date NOT NULL,
  `IdKorisnika` bigint(13) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ugovor`
--

INSERT INTO `ugovor` (`IdUgovora`, `IdFirme`, `DatumSklapanjaUgovora`, `IdKorisnika`) VALUES
(6, 2, '2015-09-29', 13),
(9, 1, '2015-10-02', 13),
(10, 3, '2015-10-06', 13),
(11, 1, '2015-10-10', 15),
(13, 2, '2015-09-24', 15),
(15, 3, '2015-10-01', 15),
(16, 1, '2015-09-15', 20),
(17, 2, '2015-10-01', 20),
(18, 3, '2015-10-01', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usluga`
--

CREATE TABLE IF NOT EXISTS `usluga` (
`IdUsluge` int(11) NOT NULL,
  `IdFirme` int(11) NOT NULL,
  `StanjeNaRacunu` float NOT NULL,
  `DatumPoslednjePromene` date NOT NULL,
  `IdKorisnika` bigint(13) NOT NULL,
  `IdUgovora` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `usluga`
--

INSERT INTO `usluga` (`IdUsluge`, `IdFirme`, `StanjeNaRacunu`, `DatumPoslednjePromene`, `IdKorisnika`, `IdUgovora`) VALUES
(1, 2, 5000, '2015-10-03', 13, 6),
(15, 1, 3250, '2015-09-29', 13, 9),
(16, 3, 7800, '2015-10-06', 13, 10),
(17, 1, 3000, '2015-10-10', 15, 11),
(18, 2, 2000, '2015-10-12', 15, 13),
(21, 3, 1000, '2015-10-11', 15, 15),
(22, 1, 4000, '2015-10-01', 20, 16),
(23, 2, 5370, '2015-10-01', 20, 17),
(24, 3, 3000, '2015-10-01', 20, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firma`
--
ALTER TABLE `firma`
 ADD PRIMARY KEY (`IdFirme`);

--
-- Indexes for table `korisnikusluge`
--
ALTER TABLE `korisnikusluge`
 ADD PRIMARY KEY (`IdKorisnika`), ADD KEY `FK_FIRMAKORISNIK` (`IdFirme`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
 ADD PRIMARY KEY (`IdRacuna`), ADD KEY `FK_USLUGA` (`IdUsluge`);

--
-- Indexes for table `ugovor`
--
ALTER TABLE `ugovor`
 ADD PRIMARY KEY (`IdUgovora`), ADD KEY `FK_FIRMAUGOVOR` (`IdFirme`), ADD KEY `FK_KORISNIKUGOVOR` (`IdKorisnika`);

--
-- Indexes for table `usluga`
--
ALTER TABLE `usluga`
 ADD PRIMARY KEY (`IdUsluge`), ADD KEY `FK_FIRMA` (`IdFirme`), ADD KEY `FK_KORISNIK` (`IdKorisnika`), ADD KEY `FK_UGOVORUSLUGA` (`IdUgovora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firma`
--
ALTER TABLE `firma`
MODIFY `IdFirme` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `korisnikusluge`
--
ALTER TABLE `korisnikusluge`
MODIFY `IdKorisnika` bigint(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
MODIFY `IdRacuna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ugovor`
--
ALTER TABLE `ugovor`
MODIFY `IdUgovora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `usluga`
--
ALTER TABLE `usluga`
MODIFY `IdUsluge` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnikusluge`
--
ALTER TABLE `korisnikusluge`
ADD CONSTRAINT `FK_FIRMAKORISNIK` FOREIGN KEY (`IdFirme`) REFERENCES `firma` (`IdFirme`) ON UPDATE CASCADE;

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
ADD CONSTRAINT `FK_USLUGA` FOREIGN KEY (`IdUsluge`) REFERENCES `usluga` (`IdUsluge`) ON UPDATE CASCADE;

--
-- Constraints for table `ugovor`
--
ALTER TABLE `ugovor`
ADD CONSTRAINT `FK_FIRMAUGOVOR` FOREIGN KEY (`IdFirme`) REFERENCES `firma` (`IdFirme`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_KORISNIKUGOVOR` FOREIGN KEY (`IdKorisnika`) REFERENCES `korisnikusluge` (`IdKorisnika`) ON UPDATE CASCADE;

--
-- Constraints for table `usluga`
--
ALTER TABLE `usluga`
ADD CONSTRAINT `FK_FIRMA` FOREIGN KEY (`IdFirme`) REFERENCES `firma` (`IdFirme`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_KORISNIK` FOREIGN KEY (`IdKorisnika`) REFERENCES `korisnikusluge` (`IdKorisnika`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_UGOVORUSLUGA` FOREIGN KEY (`IdUgovora`) REFERENCES `ugovor` (`IdUgovora`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
