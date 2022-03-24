-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 24. bře 2022, 09:33
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
-- Struktura tabulky `offers`
--

CREATE TABLE `offers` (
  `id` int(100) NOT NULL,
  `Uid` int(100) NOT NULL,
  `img` varchar(225) NOT NULL,
  `descrip` varchar(225) NOT NULL,
  `price` int(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sold` tinyint(1) NOT NULL DEFAULT 0,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `offers`
--

INSERT INTO `offers` (`id`, `Uid`, `img`, `descrip`, `price`, `created_at`, `sold`, `expiration_date`) VALUES
(1, 1, 'users/panH/panH-img/muj_baracek.png', 'users/panH/panH-descrip/11cd46.txt', 12345, '2022-03-16 23:10:37', 0, '2022-03-16'),
(2, 5, 'users/debil/debil-img/mikey.jpg', 'users/debil/debil-descrip/a64c35.txt', 200, '2022-03-21 12:56:55', 0, '2022-03-27'),
(3, 5, 'users/debil/debil-img/273541236_656741535476292_6884670821452460512_n.jpg', 'users/debil/debil-descrip/6d8889.txt', 456, '2022-03-21 21:09:22', 0, '2022-03-22'),
(4, 5, 'users/debil/debil-img/spring rolls.jpg', 'users/debil/debil-descrip/79d921.txt', 290, '2022-03-21 21:17:01', 0, '2022-03-22'),
(5, 5, 'users/debil/debil-img/stažený soubor.jpg', 'users/debil/debil-descrip/05ffc1.txt', 340, '2022-03-21 21:19:09', 0, '2022-03-25'),
(6, 5, 'users/debil/debil-img/superman.jpg', 'users/debil/debil-descrip/aba5eb.txt', 345, '2022-03-22 19:08:31', 0, '2022-03-24');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offerUid_userId` (`Uid`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
