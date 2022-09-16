-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 03:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `mata_pelajaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `mata_pelajaran`) VALUES
(4, 'Ervi Rahmawati, S.T', 'Rekayasa Perangkat Lunak'),
(5, 'Wahyu Tri Wulansari, S.Pd', 'Rekayasa Perangkat Lunak'),
(6, 'Estri Handayani, S.Pd', 'Rekayasa Perangkat Lunak'),
(7, 'Fikrotu Dwi, S.Pd', 'Rekayasa Perangkat Lunak'),
(8, 'Novi Dyah Puspitasari, S.Pd', 'Rekayasa Perangkat Lunak'),
(9, 'Ivans Zuwanta, S.Kom', 'Rekayasa Perangkat Lunak'),
(10, 'Safira Maya Shofie, S.Pd', 'Rekayasa Perangkat Lunak'),
(11, 'Labib Fayumi', 'Rekayasa Perangkat Lunak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
