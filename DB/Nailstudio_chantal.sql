-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 24 feb 2023 om 20:15
-- Serverversie: 5.7.36
-- PHP-versie: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Nailstudio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Afspraak`
--

DROP TABLE IF EXISTS `Afspraak`;
CREATE TABLE IF NOT EXISTS `Afspraak` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Basiskleur1` varchar(7) NOT NULL,
  `Basiskleur2` varchar(7) NOT NULL,
  `Basiskleur3` varchar(7) NOT NULL,
  `Basiskleur4` varchar(7) NOT NULL,
  `Telefoonnummer` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Afspraakdatum` datetime NOT NULL,
  `Optie1` varchar(100) DEFAULT NULL,
  `Optie2` varchar(100) DEFAULT NULL,
  `Optie3` varchar(100) DEFAULT NULL,
  `Verzendtijd` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Afspraak`
--

INSERT INTO `Afspraak` (`Id`, `Basiskleur1`, `Basiskleur2`, `Basiskleur3`, `Basiskleur4`, `Telefoonnummer`, `Email`, `Afspraakdatum`, `Optie1`, `Optie2`, `Optie3`, `Verzendtijd`) VALUES
(2, '#ff0000', '#ff00f7', '#00ff6e', '#ffd500', '06123456789', '336472@student.mboutrecht.nl', '2023-02-17 16:08:00', 'Nagelreparatie', NULL, NULL, '23-2-2023 16:08:33'),
(3, '#b65454', '#7c5050', '#d28989', '#9d4848', '06123456789', '336472@student.mboutrecht.nl', '2023-02-18 16:09:00', 'Luxe manicure', NULL, NULL, '23-2-2023 16:09:11'),
(5, '#000000', '#000000', '#000000', '#000000', '06123456789', '336472@student.mboutrecht.nl', '2023-02-24 14:05:00', 'Nagelbijt arangement', NULL, NULL, '24-2-2023 11:05:00'),
(6, '#ba4545', '#bd4242', '#aa6e6e', '#b76666', '06123456789', '336472@student.mboutrecht.nl', '2023-03-10 14:07:00', 'Luxe manicure', NULL, NULL, '24-2-2023 11:07:16'),
(7, '#b97e7e', '#766f6f', '#c25151', '#932f2f', '06123456789', '336472@student.mboutrecht.nl', '2023-02-28 16:20:00', 'Nagelbijt arangement', NULL, 'Luxe manicure', '24-2-2023 11:20:43'),
(8, '#f40b0b', '#ff00ea', '#0033ff', '#00f01c', '06123456789', '336472@student.mboutrecht.nl', '2023-02-25 13:25:00', 'Nagelbijt arangement', 'Nagelreparatie', 'Luxe manicure', '24-2-2023 13:25:37'),
(9, '#ff7070', '#c15757', '#a74444', '#3e1e1e', '06123456789', '336472@student.mboutrecht.nl', '2023-02-26 01:11:00', 'Nagelbijt arangement', 'Nagelreparatie', 'Luxe manicure', '24-2-2023 21:10:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
