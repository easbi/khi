-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 09:24 AM
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
  `fungsional` varchar(50) DEFAULT NULL,
  `butir_kegiatan` varchar(50) DEFAULT NULL,
  `kegiatan` text NOT NULL,
  `berkas` varchar(100) DEFAULT NULL,
  `satuan` varchar(100) NOT NULL,
  `kuantitas` int(3) NOT NULL,
  `is_internet` varchar(1) NOT NULL,
  `is_done` int(1) NOT NULL DEFAULT 1,
  `tgl` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_activity`
--

INSERT INTO `daily_activity` (`id`, `nip`, `wfo_wfh`, `fungsional`, `butir_kegiatan`, `kegiatan`, `berkas`, `satuan`, `kuantitas`, `is_internet`, `is_done`, `tgl`, `created_at`, `updated_at`, `created_by`) VALUES
(4, '199602182019011002', 'WFO', NULL, NULL, 'Membuat aplikasi KHI', NULL, 'Modul Program', 1, '1', 1, '2021-07-30', '2021-07-30 01:08:13', '2021-07-30 01:08:13', '199602182019011002'),
(6, '199602182019011002', 'WFO', NULL, NULL, 'Mengikuti Apel Pagi  (Host, Menyiapkan Lagu2, Pembacaan UUD)', NULL, 'Kegiatan', 1, '1', 1, '2021-08-02', '2021-08-01 22:43:31', '2021-08-01 22:43:31', '199602182019011002'),
(7, '199602182019011002', 'WFO', NULL, NULL, 'Instalasi VIMK Tahunan 2021 di Laptop Kak Chesil', NULL, 'Kegiatan', 1, '1', 1, '2021-08-02', '2021-08-01 22:44:16', '2021-08-01 22:44:16', '199602182019011002'),
(8, '199602182019011002', 'WFO', NULL, NULL, 'Menyiapkan Kelas Elearning SAKERNAS Petugas Kota Padang Panjang', NULL, 'Kegiatan', 1, '1', 1, '2021-08-02', '2021-08-01 22:45:09', '2021-08-01 22:45:09', '199602182019011002'),
(9, '199602182019011002', 'WFO', NULL, NULL, 'Memeriksa Dokumen SPTK', NULL, 'Dokumen', 2, '1', 1, '2021-08-02', '2021-08-01 22:45:34', '2021-08-01 22:45:34', '199602182019011002');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
