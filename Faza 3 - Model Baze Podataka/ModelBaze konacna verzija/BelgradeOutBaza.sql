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
  `Slika` mediumblob,
  `NazivIzvodjaca` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`IdDogadjaj`),
  KEY `R_7` (`IdObjekta`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogadjaj`
--

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
  `Slika` mediumblob,
  PRIMARY KEY (`IdKorisnika`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--


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


-- --------------------------------------------------------

--
-- Table structure for table `objekat`
--

CREATE TABLE IF NOT EXISTS `objekat` (
  `IdObjekta` int(11) NOT NULL AUTO_INCREMENT,
  `IdAutor` int(11) NOT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  `Adresa` varchar(400) DEFAULT NULL,
  `Kapacitet` int(11) DEFAULT NULL,
  `TipObjekta` varchar(40) DEFAULT NULL,
  `radnoVreme` varchar(50) DEFAULT NULL,
  `opis` text,
  `Slika` mediumblob,
  PRIMARY KEY (`IdObjekta`),
  KEY `R_5` (`IdAutor`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objekat`
--


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
--


-- --------------------------------------------------------

--
-- Table structure for table `omiljeniparametri`
--

CREATE TABLE IF NOT EXISTS `omiljeniparametri` (
  `IdKorisnika` int(11) NOT NULL,
  `TipProstora` varchar(20) DEFAULT NULL,
  `TipDogadjaja` varchar(20) DEFAULT NULL,
  `Zanr` varchar(20) DEFAULT NULL,
  `trenutnaAdresa` varchar(400) DEFAULT NULL,
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
