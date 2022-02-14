-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 14. úno 2022, 18:36
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 8.0.13

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
  `Uid` int(11) NOT NULL,
  `descrip` varchar(148) NOT NULL,
  `img` varchar(225) NOT NULL,
  `sold` tinyint(1) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `expiration_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `offers`
--

INSERT INTO `offers` (`Uid`, `descrip`, `img`, `sold`, `id`, `price`, `expiration_date`, `created_at`) VALUES
(1, 'users/iveta/iveta-descrip/WwJM51.txt', 'users/iveta/iveta-img/superman.jpg', NULL, 1, 0, NULL, '2022-02-14 09:42:24'),
(1, 'users/iveta/iveta-descrip/3XLyjN.txt', 'users/iveta/iveta-img/svíčková.jpg', NULL, 2, 0, NULL, '2022-02-14 09:42:24'),
(1, 'users/iveta/iveta-descrip/rXaSnV.txt', 'users/iveta/iveta-img/spring rolls.jpg', NULL, 3, 0, NULL, '2022-02-14 09:42:24'),
(1, 'users/iveta/iveta-descrip/WwJM51.txt', 'users/iveta/iveta-img/superman.jpg', NULL, 4, 0, NULL, '2022-02-14 09:42:24'),
(1, 'users/iveta/iveta-descrip/3XLyjN.txt', 'users/iveta/iveta-img/svíčková.jpg', NULL, 5, 0, NULL, '2022-02-14 09:42:24'),
(1, 'users/iveta/iveta-descrip/rXaSnV.txt', 'users/iveta/iveta-img/spring rolls.jpg', NULL, 6, 0, NULL, '2022-02-14 09:42:24'),
(3, 'users/filip/filip-descrip/ufS6Ax.txt', 'users/filip/filip-img/fuckof.jpg', NULL, 7, 0, NULL, '2022-02-14 09:42:24'),
(3, 'users/filip/filip-descrip/GkMKxT.txt', 'users/filip/filip-img/muj_baracek.png', NULL, 8, 0, NULL, '2022-02-14 09:42:24'),
(3, 'users/filip/filip-descrip/ETr0kz.txt', 'users/filip/filip-img/coloseum.jpg', NULL, 9, 123, '2022-02-12', '2022-02-14 09:42:24'),
(3, 'users/filip/filip-descrip/z2OQAW.txt', 'users/filip/filip-img/fuckof.jpg', NULL, 10, 45000, '2022-02-25', '2022-02-14 09:44:41'),
(3, 'users/filip/filip-descrip/qfB68B.txt', 'users/filip/filip-img/hamina.jpg', NULL, 11, 900, '2022-02-28', '2022-02-14 13:28:29');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `offers`
--
ALTER TABLE `offers`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
