-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 11:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id_laporan` varchar(64) NOT NULL,
  `lokasi` varchar(64) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `jenis_kerusakan` varchar(64) NOT NULL,
  `komponen_rusak` varchar(64) NOT NULL,
  `status` enum('sudah','belum') NOT NULL,
  `biaya` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `lokasi`, `tgl_pelaksanaan`, `jenis_kerusakan`, `komponen_rusak`, `status`, `biaya`) VALUES
('f0fc204c-b2c4-11ea-9cb3-a81e84da79d8', 'Juwana', '2020-06-02', 'Rusak Fisik', 'Tembok Retak', 'belum', '200000'),
('5eedb811937b0', 'Pati', '2020-06-23', 'Bahaya gak yadada', 'Gedung Ambruk gak ydada', 'belum', '33332323333');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teknisi`
--

CREATE TABLE `tbl_teknisi` (
  `id_teknisi` varchar(64) NOT NULL,
  `nama_teknisi` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat_teknisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teknisi`
--

INSERT INTO `tbl_teknisi` (`id_teknisi`, `nama_teknisi`, `no_hp`, `alamat_teknisi`) VALUES
('5eec846e2ea9c', 'Paijo 2 ', '08312345678 2', 'Growong 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(64) NOT NULL,
  `nama_user` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `role`) VALUES
('5eec7ec8b220c', 'Dede', 'dede@gmail.com', 'b4be1c568a6dc02dcaf2849852bdb13e', 'admin'),
('5eec7edd203d8', 'Dodo', 'dodo@gmail.com', '721c6ff80a6d3e4ad4ffa52a04c60085', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_teknisi`
--
ALTER TABLE `tbl_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
