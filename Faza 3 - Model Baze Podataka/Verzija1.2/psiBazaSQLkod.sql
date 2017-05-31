-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 09:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psibaza`
--
CREATE DATABASE IF NOT EXISTS `psibaza` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `psibaza`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `IdAutor` int(11) NOT NULL,
  `Telefon` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaj`
--

CREATE TABLE `dogadjaj` (
  `IdObjekta` int(11) NOT NULL,
  `IdDogadjaj` int(11) NOT NULL,
  `Datum` timestamp NULL DEFAULT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  `TipDogadjaja` varchar(40) DEFAULT NULL,
  `Muzicki_Zanr` varchar(40) DEFAULT NULL,
  `VremePoc` timestamp NULL DEFAULT NULL,
  `VremeKraja` timestamp NULL DEFAULT NULL,
  `Opis` text,
  `Slika` varchar(40) DEFAULT NULL,
  `NazivIzvodjaca` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `IdObjekta` int(11) NOT NULL,
  `Tekst` varchar(500) DEFAULT NULL,
  `IdKorisnika` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `IdKorisnika` int(11) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `ImePrezime` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Lozinka` varchar(40) NOT NULL,
  `Slika` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `IdModeratora` int(11) NOT NULL,
  `JMBG` int(11) DEFAULT NULL,
  `Adresa` varchar(400) DEFAULT NULL,
  `Telefon` int(11) DEFAULT NULL,
  `Pol` varchar(20) DEFAULT NULL,
  `CV` varchar(40) DEFAULT NULL,
  `MotPismo` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `objekat`
--

CREATE TABLE `objekat` (
  `IdObjekta` int(11) NOT NULL,
  `IdAutor` int(11) NOT NULL,
  `Naziv` varchar(40) DEFAULT NULL,
  `Adresa` varchar(40) DEFAULT NULL,
  `Kapacitet` int(11) DEFAULT NULL,
  `TipObjekta` varchar(40) DEFAULT NULL,
  `VremePoc` timestamp NULL DEFAULT NULL,
  `VremeKraj` timestamp NULL DEFAULT NULL,
  `Slika` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ocena`
--

CREATE TABLE `ocena` (
  `IdObjekta` int(11) NOT NULL,
  `BrGlasova` int(11) DEFAULT NULL,
  `Ocena` decimal(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odobrenjedogađaja`
--

CREATE TABLE `odobrenjedogađaja` (
  `IdAutor` int(11) NOT NULL,
  `IdDogadjaj` int(11) NOT NULL,
  `IdModeratora` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `omiljeniparametri`
--

CREATE TABLE `omiljeniparametri` (
  `IdKorisnika` int(11) NOT NULL,
  `TipProstora` varchar(20) DEFAULT NULL,
  `TipDogadjaja` varchar(20) DEFAULT NULL,
  `Zanr` varchar(20) DEFAULT NULL,
  `maxUdaljenost` decimal(5,2) DEFAULT NULL,
  `prosecnaOcena` decimal(5,2) DEFAULT NULL,
  `NazivListe` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postanimoderator`
--

CREATE TABLE `postanimoderator` (
  `IdAdmin` int(11) NOT NULL,
  `Status_odobreno_nije_` tinyint(1) DEFAULT NULL,
  `IdKorisnika` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regkorisnik`
--

CREATE TABLE `regkorisnik` (
  `IdKorisnika` int(11) NOT NULL,
  `ZeliVesti` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zahtevzadogadjaj`
--

CREATE TABLE `zahtevzadogadjaj` (
  `IdDogadjaj` int(11) NOT NULL,
  `IdAutor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`IdAutor`);

--
-- Indexes for table `dogadjaj`
--
ALTER TABLE `dogadjaj`
  ADD PRIMARY KEY (`IdDogadjaj`),
  ADD KEY `R_7` (`IdObjekta`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`IdKorisnika`,`IdObjekta`),
  ADD KEY `R_9` (`IdObjekta`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`IdKorisnika`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`IdModeratora`);

--
-- Indexes for table `objekat`
--
ALTER TABLE `objekat`
  ADD PRIMARY KEY (`IdObjekta`),
  ADD KEY `R_5` (`IdAutor`);

--
-- Indexes for table `ocena`
--
ALTER TABLE `ocena`
  ADD PRIMARY KEY (`IdObjekta`);

--
-- Indexes for table `odobrenjedogađaja`
--
ALTER TABLE `odobrenjedogađaja`
  ADD PRIMARY KEY (`IdDogadjaj`),
  ADD KEY `R_18` (`IdAutor`),
  ADD KEY `R_17` (`IdModeratora`);

--
-- Indexes for table `omiljeniparametri`
--
ALTER TABLE `omiljeniparametri`
  ADD PRIMARY KEY (`IdKorisnika`);

--
-- Indexes for table `postanimoderator`
--
ALTER TABLE `postanimoderator`
  ADD PRIMARY KEY (`IdAdmin`,`IdKorisnika`),
  ADD KEY `R_35` (`IdKorisnika`);

--
-- Indexes for table `regkorisnik`
--
ALTER TABLE `regkorisnik`
  ADD PRIMARY KEY (`IdKorisnika`);

--
-- Indexes for table `zahtevzadogadjaj`
--
ALTER TABLE `zahtevzadogadjaj`
  ADD PRIMARY KEY (`IdDogadjaj`,`IdAutor`),
  ADD KEY `R_16` (`IdAutor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogadjaj`
--
ALTER TABLE `dogadjaj`
  MODIFY `IdDogadjaj` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `IdKorisnika` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `objekat`
--
ALTER TABLE `objekat`
  MODIFY `IdObjekta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
