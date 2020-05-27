-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Maj 2020, 00:13
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `id_autor` int(20) NOT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`id_autor`, `imie`, `nazwisko`) VALUES
(1, 'Adam', 'Mickiewicz'),
(2, 'Juliusz', 'S?owacki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `id`
--

CREATE TABLE `id` (
  `id` int(20) NOT NULL,
  `id_autor` int(20) DEFAULT NULL,
  `id_tyt` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `id`
--

INSERT INTO `id` (`id`, `id_autor`, `id_tyt`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tytuly`
--

CREATE TABLE `tytuly` (
  `id_tyt` int(20) NOT NULL,
  `tytul` varchar(255) DEFAULT NULL,
  `ISBN` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `tytuly`
--

INSERT INTO `tytuly` (`id_tyt`, `tytul`, `ISBN`) VALUES
(1, 'Dziady', 194),
(2, 'Kordian', 987);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indeksy dla tabeli `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor` (`id_autor`),
  ADD KEY `tytuł` (`id_tyt`);

--
-- Indeksy dla tabeli `tytuly`
--
ALTER TABLE `tytuly`
  ADD PRIMARY KEY (`id_tyt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  MODIFY `id_autor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `id`
--
ALTER TABLE `id`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `tytuly`
--
ALTER TABLE `tytuly`
  MODIFY `id_tyt` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `id`
--
ALTER TABLE `id`
  ADD CONSTRAINT `autorzy` FOREIGN KEY (`id_autor`) REFERENCES `autorzy` (`id_autor`),
  ADD CONSTRAINT `tytuły` FOREIGN KEY (`id_tyt`) REFERENCES `tytuly` (`id_tyt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
