-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 02 dec 2015 om 09:24
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `sqltrainer`
--
CREATE DATABASE IF NOT EXISTS `sqltrainer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sqltrainer`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opdrachten`
--

CREATE TABLE IF NOT EXISTS `opdrachten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beschrijving` text NOT NULL,
  `antwoord` text NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `opdrachten`
--

INSERT INTO `opdrachten` (`id`, `beschrijving`, `antwoord`, `created`) VALUES
(1, 'Voer een SELECT * uit op de database', 'todo', '2015-11-24 23:00:00'),
(2, 'Voer een UPDATE user statement uit', 'Antwoord 2', '2015-11-24 23:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sqltestdata`
--

CREATE TABLE IF NOT EXISTS `sqltestdata` (
  `voornaam` text NOT NULL,
  `achternaam` text NOT NULL,
  `woonplaats` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `sqltestdata`
--

INSERT INTO `sqltestdata` (`voornaam`, `achternaam`, `woonplaats`) VALUES
('David', 'Leeuw', 'Goes'),
('Adriano', 'Kooiman', 'Vlissingen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_mail` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `user_mail`, `first_name`, `last_name`, `password`) VALUES
(1, 'jans0130@hz.nl', 'Bonno', 'Jansen', 'hoi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
