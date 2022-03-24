-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 24. bře 2022, 09:32
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `rocnikovka_aukce`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `bidding_log`
--

CREATE TABLE `bidding_log` (
  `id` int(100) NOT NULL,
  `offer_id` int(100) NOT NULL,
  `Uid` int(100) NOT NULL,
  `bid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `bidding_log`
--
ALTER TABLE `bidding_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidOfferId_offerId` (`offer_id`),
  ADD KEY `bidUid_userId` (`Uid`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `bidding_log`
--
ALTER TABLE `bidding_log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `bidding_log`
--
ALTER TABLE `bidding_log`
  ADD CONSTRAINT `bidding_log_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bidding_log_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
