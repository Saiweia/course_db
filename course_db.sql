-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Aug 2016 um 09:44
-- Server-Version: 10.1.9-MariaDB
-- PHP-Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `course_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'EDV'),
(4, 'Sprachen'),
(6, 'Kultur');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `target_group` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `booked` int(11) NOT NULL,
  `available_place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `course`
--

INSERT INTO `course` (`id`, `number`, `name`, `price`, `place`, `target_group`, `categoryId`, `user_id`, `description`, `booked`, `available_place`) VALUES
(1, 34199, 'Webprogrammierung mit PHP', '12.44', 'Hannover, Hauptgebäude, Raum 244', 'für Fortgeschrittene', 2, 2, 'Hier steht die Beschreibung', 5, 24),
(25, 594949, 'Java', '800.00', 'Raum II', 'für Fortgeschrittene', 2, 3, 'Hier steht eine ausführliche Kursbeschreibung.', 0, 12);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `date__time`
--

CREATE TABLE `date__time` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `date__time`
--

INSERT INTO `date__time` (`id`, `course_id`, `date`, `start`, `end`) VALUES
(13, 1, '2016-06-14', '17:00:00', '20:00:00'),
(19, 25, '2016-12-18', '12:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_logdaten`
--

CREATE TABLE `user_logdaten` (
  `id` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anrede` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `roles` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `user_logdaten`
--

INSERT INTO `user_logdaten` (`id`, `email`, `password`, `name`, `anrede`, `vorname`, `is_active`, `username`, `roles`) VALUES
(2, 'renate@renate.com', 'granate', 'Müller', 'Frau', 'Renate', 1, 'renate', 'ROLE_ADMIN'),
(3, 'rudi.hanne@test.de', 'klopps', 'Steger', 'Herr', 'Rudolph', 1, 'rudi', 'ROLE_ADMIN');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_169E6FB996901F54` (`number`),
  ADD KEY `IDX_169E6FB99C370B71` (`categoryId`),
  ADD KEY `IDX_169E6FB9A76ED395` (`user_id`);

--
-- Indizes für die Tabelle `date__time`
--
ALTER TABLE `date__time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_884100D2591CC992` (`course_id`);

--
-- Indizes für die Tabelle `user_logdaten`
--
ALTER TABLE `user_logdaten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_64B4DFA9E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_64B4DFA9F85E0677` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT für Tabelle `date__time`
--
ALTER TABLE `date__time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT für Tabelle `user_logdaten`
--
ALTER TABLE `user_logdaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FK_169E6FB912469DE2` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_169E6FB9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user_logdaten` (`id`);

--
-- Constraints der Tabelle `date__time`
--
ALTER TABLE `date__time`
  ADD CONSTRAINT `FK_884100D2591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
