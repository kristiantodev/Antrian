-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2021 pada 15.26
-- Versi server: 5.7.21-log
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hari` int(11) NOT NULL,
  `loket` int(11) NOT NULL,
  `loket2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `nama`, `hari`, `loket`, `loket2`) VALUES
(268, '', 1, 0, 0),
(269, '', 2, 1, 1),
(270, '', 3, 1, 1),
(271, '', 4, 1, 1),
(272, '', 1, 1, 1),
(273, '', 2, 1, 1),
(274, '', 3, 1, 1),
(275, '', 4, 1, 1),
(276, '', 5, 1, 1),
(277, '', 6, 1, 1),
(278, '', 7, 1, 1),
(279, '', 8, 1, 1),
(280, '', 9, 2, 2),
(281, '', 10, 3, 3),
(282, '', 11, 4, 4),
(283, '', 12, 5, 5),
(284, '', 13, 6, 6),
(285, '', 14, 7, 7),
(286, '', 15, 8, 8),
(287, '', 16, 9, 9),
(288, '', 17, 10, 10),
(289, '', 18, 11, 11),
(290, '', 19, 12, 12),
(291, '', 20, 13, 13),
(292, '', 21, 14, 14),
(293, '', 22, 15, 15),
(294, '', 23, 16, 16),
(295, '', 24, 17, 17),
(296, '', 25, 18, 18),
(297, '', 26, 19, 19),
(298, '', 27, 20, 20),
(299, '', 28, 21, 21),
(300, '', 29, 22, 22),
(301, '', 30, 23, 23);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
