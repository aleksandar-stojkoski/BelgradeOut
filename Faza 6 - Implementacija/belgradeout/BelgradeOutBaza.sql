-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 07:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belgradeoutbaza`
--
CREATE DATABASE IF NOT EXISTS `belgradeoutbaza` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `belgradeoutbaza`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `IdAdmin` int(11) NOT NULL,
  PRIMARY KEY (`IdAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IdAdmin`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `IdAutor` int(11) NOT NULL,
  `Telefon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdAutor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`IdAutor`, `Telefon`) VALUES
(4, '000111222');

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaj`
--

CREATE TABLE IF NOT EXISTS `dogadjaj` (
  `IdObjekta` int(11) NOT NULL,
  `IdDogadjaj` int(11) NOT NULL AUTO_INCREMENT,
  `Datum` varchar(50) DEFAULT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  `TipDogadjaja` varchar(40) DEFAULT NULL,
  `Muzicki_Zanr` varchar(40) DEFAULT NULL,
  `trajanje` varchar(50) DEFAULT NULL,
  `Opis` text,
  `Slika` varchar(40) DEFAULT NULL,
  `NazivIzvodjaca` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdDogadjaj`),
  KEY `R_7` (`IdObjekta`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogadjaj`
--

INSERT INTO `dogadjaj` (`IdObjekta`, `IdDogadjaj`, `Datum`, `Naziv`, `TipDogadjaja`, `Muzicki_Zanr`, `trajanje`, `Opis`, `Slika`, `NazivIzvodjaca`) VALUES
(1, 1,'20.06.2017.', 'Zurka za kraj roka', 'žurka', 'pop', '21:00 - 05:00', 'Zurka povodom kraja junskog ispitnog roka', 'klub.jpg', 'iznenadjenje');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `IdObjekta` int(11) NOT NULL,
  `Tekst` varchar(500) DEFAULT NULL,
  `IdKorisnika` int(11) NOT NULL,
  PRIMARY KEY (`IdKorisnika`,`IdObjekta`),
  KEY `R_9` (`IdObjekta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`IdObjekta`, `Tekst`, `IdKorisnika`) VALUES
(1, 'Veoma dobro mesto', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `IdKorisnika` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(40) NOT NULL,
  `ImePrezime` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Lozinka` varchar(40) NOT NULL,
  `Slika` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdKorisnika`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IdKorisnika`, `UserName`, `ImePrezime`, `email`, `Lozinka`, `Slika`) VALUES
(1, 'milica', 'Milica Tanaskovic', 'milica@gmail.com', 'milica', 'slika.jpg'),
(2, 'sale', 'Aleksandar Stojkoski', 'sale@gmail.com', 'sale', 'slika2.jpg'),
(3, 'strahinja', 'Strahinja Milovanovic', 'strahinja@gmail.com', 'strahinja', 'slika2.jpg'),
(4, 'djole', 'Djordje Percobic', 'djole@gmail.com', 'djole', 'slika.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE IF NOT EXISTS `moderator` (
  `IdModeratora` int(11) NOT NULL,
  `JMBG` varchar(20) DEFAULT NULL,
  `Adresa` varchar(400) DEFAULT NULL,
  `Telefon` int(11) DEFAULT NULL,
  `Pol` varchar(20) DEFAULT NULL,
  `CV` varchar(40) DEFAULT NULL,
  `MotPismo` mediumtext,
  PRIMARY KEY (`IdModeratora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`IdModeratora`, `JMBG`, `Adresa`, `Telefon`, `Pol`, `CV`, `MotPismo`) VALUES
(3, '1231231231231', 'Bulevar Kralja Aleksandra 73', 222111, 'm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `objekat`
--

CREATE TABLE IF NOT EXISTS `objekat` (
  `IdObjekta` int(11) NOT NULL AUTO_INCREMENT,
  `IdAutor` int(11) NOT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  `Adresa` varchar(40) DEFAULT NULL,
  `Kapacitet` int(11) DEFAULT NULL,
  `TipObjekta` varchar(40) DEFAULT NULL,
  `radnoVreme` varchar(50) DEFAULT NULL,
  `opis` text,
  `Slika` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdObjekta`),
  KEY `R_5` (`IdAutor`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objekat`
--

INSERT INTO `objekat` (`IdObjekta`, `IdAutor`, `Naziv`, `Adresa`, `Kapacitet`, `TipObjekta`, `radnoVreme`, `opis`, `Slika`) VALUES
(1, 4, 'EtfKlub', 'Bulevar Kralja Aleksandra 73', 400, 'Klub', '00-24', 'Jedan od najnovijih klubova u Beogradu koji radi non stop, kapacitet 400 ljudi', 'klub.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ocena`
--

CREATE TABLE IF NOT EXISTS `ocena` (
  `IdObjekta` int(11) NOT NULL,
  `BrGlasova` int(11) DEFAULT NULL,
  `Ocena` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`IdObjekta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocena`
--

INSERT INTO `ocena` (`IdObjekta`, `BrGlasova`, `Ocena`) VALUES
(1, 1, '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `odobrenjedogadjaja`
--

CREATE TABLE IF NOT EXISTS `odobrenjedogadjaja` (
  `IdAutor` int(11) NOT NULL,
  `IdDogadjaj` int(11) NOT NULL,
  `IdModeratora` int(11) NOT NULL,
  PRIMARY KEY (`IdDogadjaj`),
  KEY `R_18` (`IdAutor`),
  KEY `R_17` (`IdModeratora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odobrenjedogadjaja`
--

INSERT INTO `odobrenjedogadjaja` (`IdAutor`, `IdDogadjaj`, `IdModeratora`) VALUES
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `omiljeniparametri`
--

CREATE TABLE IF NOT EXISTS `omiljeniparametri` (
  `IdKorisnika` int(11) NOT NULL,
  `TipProstora` varchar(20) DEFAULT NULL,
  `TipDogadjaja` varchar(20) DEFAULT NULL,
  `Zanr` varchar(20) DEFAULT NULL,
  `trenutnaAdresa` varchar(50) DEFAULT NULL,
  `maxUdaljenost` decimal(5,2) DEFAULT NULL,
  `prosecnaOcena` decimal(5,2) DEFAULT NULL,
  `NazivListe` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdKorisnika`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postanimoderator`
--

CREATE TABLE IF NOT EXISTS `postanimoderator` (
  `IdAdmin` int(11) NOT NULL,
  `Status_odobreno_nije_` tinyint(1) DEFAULT NULL,
  `IdKorisnika` int(11) NOT NULL,
  PRIMARY KEY (`IdAdmin`,`IdKorisnika`),
  KEY `R_35` (`IdKorisnika`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regkorisnik`
--

CREATE TABLE IF NOT EXISTS `regkorisnik` (
  `IdKorisnika` int(11) NOT NULL,
  `ZeliVesti` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IdKorisnika`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regkorisnik`
--

INSERT INTO `regkorisnik` (`IdKorisnika`, `ZeliVesti`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `zahtevzadogadjaj`
--

CREATE TABLE IF NOT EXISTS `zahtevzadogadjaj` (
  `IdDogadjaj` int(11) NOT NULL,
  `IdAutor` int(11) NOT NULL,
  PRIMARY KEY (`IdDogadjaj`,`IdAutor`),
  KEY `R_16` (`IdAutor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
