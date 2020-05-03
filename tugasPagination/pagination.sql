-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 05:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`) VALUES
(1, 'A Cup Of Tea', 'Gita Savitri Devi', 'Gramedia'),
(2, 'Hujan', 'Tere Liye', 'Gramedia'),
(3, 'Pulang', 'Tere Liye', 'Gramedia'),
(4, 'Rindu', 'Tere Liye', 'Gramedia'),
(5, 'Negeri Para Bedebah', 'Tere Liye', 'Gramedia'),
(6, 'Bidadari Bidadari Surga', 'Tere Liye', 'Gramedia'),
(7, 'Hafalan  Shalat Delisa', 'Tere Liye', 'Gramedia'),
(8, 'Rembulan Tenggelam di Wajahmu', 'Tere Liye', 'Gramedia'),
(9, 'Tentang Kamu', 'Tere Liye', 'Gramedia'),
(10, 'Harga Sebuah', 'Tere Liye', 'Gramedia'),
(11, 'Matahari', 'Tere Liye', 'Gramedia'),
(12, 'Bumi', 'Tere Liye', 'Gramedia'),
(13, 'Bulan', 'Tere Liye', 'Gramedia'),
(14, 'Selena', 'Tere Liye', 'Gramedia'),
(15, 'Si Anak Badai', 'Tere Liye', 'Gramedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
