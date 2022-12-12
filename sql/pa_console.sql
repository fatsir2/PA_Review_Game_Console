-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa_console`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_contactus`
--

CREATE TABLE `data_contactus` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_contactus`
--

INSERT INTO `data_contactus` (`nama`, `email`, `pesan`) VALUES
('Faris Atsir Izzudin El Wahyu', 'fatsir2@gmail.com', 'test'),
('test', 'test@gmail.com', 'testest213123123123');

-- --------------------------------------------------------

--
-- Table structure for table `data_register`
--

CREATE TABLE `data_register` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) CHARACTER SET macce COLLATE macce_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_register`
--

INSERT INTO `data_register` (`username`, `email`, `password`) VALUES
(':username', ':email', ':password'),
(':username', ':email', ':password'),
('Faris Atsir Izzudin El Wahyu', '123123@gmail.com', '$2y$10$Gu.XPGeVRu/Krh9tOXgPAeXVu01bY2X3Qvy/auceRYSGSBQEmaqLC'),
('faris', '123@gmail.com', '$2y$10$E6Zdjm6Qdmcp/raR6JX0/OCzwuVgYrK5M952KiyW4CnWjYKBNmrPu'),
('Far', 'far@gmail.com', '$2y$10$wLlMB9cn5XYqPUp/TkdTauSldsEtaw2Qj4PcUDDlRBT4ZdP7BV.iS'),
('faris', 'fatsir2@gmail.com', '$2y$10$khlglTkUVAPgQVOFuoOKmuiEe9/tletidCN8Kbr.B/tLOjphOKyna'),
('git', 'git@gmail.com', '$2y$10$nkzwSOSvG/.SGCr2IOS.heO4U0ufxpMVOkzJoTgLZ0NnRwzLF1.8i');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
