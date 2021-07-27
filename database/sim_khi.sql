-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 10:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_khi`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_activity`
--

CREATE TABLE `daily_activity` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `wfo_wfh` varchar(10) NOT NULL,
  `fungsional` varchar(50) NOT NULL,
  `butir_kegiatan` varchar(50) NOT NULL,
  `kegiatan` text NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `kuantitas` varchar(3) NOT NULL,
  `is_internet` varchar(1) NOT NULL,
  `kualitas` varchar(3) NOT NULL,
  `is_done` varchar(1) NOT NULL,
  `tgl` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `created_by` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_activity`
--
ALTER TABLE `daily_activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_activity`
--
ALTER TABLE `daily_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
