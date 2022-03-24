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
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `balance` int(100) NOT NULL DEFAULT 0,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `balance`, `verified`, `token`) VALUES
(1, 'Václav', 'Hašek', 'panH', 'vaclavH@gmail.com', '$2y$10$dsq7w/vD5ZTBezjdyDN4pu.C30IRvLfarGNQZXxfYp7bpCveYT9M2', 300, 0, '1'),
(2, 'Jaroslav', 'Malý', 'panM', 'jara@gmail.com', '$2y$10$B8T7HXswieoXgkyB8lfg1uH3TNrN6KB7/ReG.0Sp3EXWc2pnsdxVy', 0, 0, '0'),
(3, 'Iveta', 'Hoffmanová', 'paniHof', 'ivca123@gmail.com', '$2y$10$XsA8mis3FWjcoVBLcZGAye9IgVq7NoAZTO8lae2DsZBhUrIX8Iztq', 0, 0, '0'),
(4, 'Tereza', 'Krová', 'terka', 'krova@gmail.com', '$2y$10$5sN1SOjxoPS74u531zhFsOlzBD9vm2ly17nejd4g1bhWJzxtFW35.', 0, 0, '9'),
(5, 'Chrudoš', 'Nejezchleba', 'debil', 'debil@gmail.com', '$2y$10$.Lhax69lxD5ocfMUe.6nCe887jYy.TzElxFs6TlPYbKgEgNC4g8.O', 0, 0, 'c0942b0fded4511a0f67');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
