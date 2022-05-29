-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 11:20 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `canzone`
--

CREATE TABLE `canzone` (
  `track` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `canzone`
--

INSERT INTO `canzone` (`track`, `user`, `nome`) VALUES
('0RZUN6TaQUGLOqqDfrRPQU', 'utente1', 'La guerra dei pastelli a cera'),
('0wTANFzJ9PslD7EDg55u59', 'utente1', 'Settin the Woods On Fire'),
('1EsuHeJcVUl8JF0MlU7mjj', 'utente1', 'Snooze'),
('2RAeer1ojirtcXdcagTCDg', 'utente1', 'Sayonara'),
('2YByIMqNtTb0T072UDfTo9', 'utente1', 'The Top - Extended'),
('38mQZ5tZ6IylQaJCCF90ox', 'utente1', 'The Top'),
('3Fzlg5r1IjhLk2qRw667od', 'utente1', 'Dancing in the Moonlight'),
('4AR83bEn1c1MlykwTfxcwX', 'utente1', 'Walking All Day'),
('6Agc6F2std10P7rwKOwhrg', 'utente1', 'Wake Up, Ciri'),
('6KuHjfXHkfnIjdmcIvt9r0', 'utente1', 'On Top Of The World'),
('7Ddq6LRk5FaqPHSphrV1ls', 'utente1', 'Keep On Running');

-- --------------------------------------------------------

--
-- Table structure for table `pagina`
--

CREATE TABLE `pagina` (
  `data` date NOT NULL,
  `contenuto` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagina`
--

INSERT INTO `pagina` (`data`, `contenuto`, `user`) VALUES
('2022-05-22', 'wwwwwwwww', 'utente6'),
('2022-05-28', 'Prova di pagina lalalalal', 'utente1'),
('2022-05-28', 'fffffffffffff', 'utente6'),
('2022-05-29', 'Una pagina di diario scritta da utente1 lalalala', 'utente1'),
('2022-05-29', 'prova prova prova', 'utente3'),
('2022-05-29', 'ddffdfdfd', 'utente6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('utente1', 'Secret1'),
('utente2', 'Secret2'),
('utente3', 'Secret3'),
('utente4', 'Secret4'),
('utente5', 'Secret5'),
('utente6', 'Secret5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canzone`
--
ALTER TABLE `canzone`
  ADD PRIMARY KEY (`user`,`track`);

--
-- Indexes for table `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`data`,`user`),
  ADD KEY `user_index` (`user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canzone`
--
ALTER TABLE `canzone`
  ADD CONSTRAINT `canzone_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `pagina`
--
ALTER TABLE `pagina`
  ADD CONSTRAINT `pagina_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
