-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql213.byetcluster.com
-- Generation Time: Jan 14, 2023 at 06:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strona`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(255) NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `haslo` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE `produkty` (
  `id` int(3) NOT NULL,
  `nazwa` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `ilosc` int(3) NOT NULL,
  `cena` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `ilosc`, `cena`) VALUES
(1, 'Skalar', 10, 15),
(2, 'Mieczyk', 9, 9),
(3, 'Gupik', 24, 4),
(4, 'Tetra', 12, 12),
(5, 'Krewetka niebieska', 5, 22),
(6, 'Glonojad pospolity', 45, 7),
(7, 'Filtr Juwel BIOFLOW L', 4, 450),
(8, 'Grzalka AQUA HEAT 50', 10, 70),
(9, 'Pokrywa Juwel PRIMOLUX 60', 3, 180),
(10, 'Pokrywa Aquel leddy 40', 4, 140),
(11, 'Pokrywa Aquel leddy 60', 5, 160),
(13, 'Pokrywa Aquel Classic 120', 2, 145),
(12, 'Pokrywa Aquel Classic 100', 5, 130),
(14, 'Szkło 60l', 3, 150),
(15, 'Szkło 80l', 3, 180),
(16, 'Szkło 20l', 10, 100),
(17, 'Szkło 130l', 3, 230),
(18, 'Szkło 150l', 2, 250),
(19, 'Szkło 200l', 4, 280),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
