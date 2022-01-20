-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2022 pada 10.05
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
(301, '', 30, 23, 23),
(302, '', 1, 10, 10),
(303, '', 1, 1, 2),
(304, '', 2, 100, 200),
(305, '', 1, 200, 300),
(306, '', 1, 1, 2),
(307, '', 6, 10, 25),
(308, '', 8, 100, 200),
(309, '', 3, 4, 15),
(310, '', 1, 1000, 3333),
(311, '', 4, 333, 333),
(312, '', 1, 0, 0),
(313, '', 2, 1, 1),
(314, '', 3, 1, 1),
(315, '', 4, 1, 1),
(316, '', 1, 1, 1),
(317, '', 2, 1, 1),
(318, '', 3, 1, 1),
(319, '', 4, 1, 1),
(320, '', 5, 1, 1),
(321, '', 6, 1, 1),
(322, '', 7, 1, 1),
(323, '', 8, 1, 1),
(324, '', 9, 2, 2),
(325, '', 10, 3, 3),
(326, '', 11, 4, 4),
(327, '', 12, 5, 5),
(328, '', 13, 6, 6),
(329, '', 14, 7, 7),
(330, '', 15, 8, 8),
(331, '', 16, 9, 9),
(332, '', 17, 10, 10),
(333, '', 18, 11, 11),
(334, '', 19, 12, 12),
(335, '', 20, 13, 13),
(336, '', 21, 14, 14),
(337, '', 22, 15, 15),
(338, '', 23, 16, 16),
(339, '', 24, 17, 17),
(340, '', 25, 18, 18),
(341, '', 26, 19, 19),
(342, '', 27, 20, 20),
(343, '', 28, 21, 21),
(344, '', 29, 22, 22),
(345, '', 30, 23, 23),
(346, '', 1, 0, 0),
(347, '', 2, 1, 1),
(348, '', 3, 1, 1),
(349, '', 4, 1, 1),
(350, '', 1, 1, 1),
(351, '', 2, 1, 1),
(352, '', 3, 1, 1),
(353, '', 4, 1, 1),
(354, '', 5, 1, 1),
(355, '', 6, 1, 1),
(356, '', 7, 1, 1),
(357, '', 8, 1, 1),
(358, '', 9, 2, 2),
(359, '', 10, 3, 3),
(360, '', 11, 4, 4),
(361, '', 12, 5, 5),
(362, '', 13, 6, 6),
(363, '', 14, 7, 7),
(364, '', 15, 8, 8),
(365, '', 16, 9, 9),
(366, '', 17, 10, 10),
(367, '', 18, 11, 11),
(368, '', 19, 12, 12),
(369, '', 20, 13, 13),
(370, '', 21, 14, 14),
(371, '', 22, 15, 15),
(372, '', 23, 16, 16),
(373, '', 24, 17, 17),
(374, '', 25, 18, 18),
(375, '', 26, 19, 19),
(376, '', 27, 20, 20),
(377, '', 28, 21, 21),
(378, '', 29, 22, 22),
(379, '', 30, 23, 23),
(380, '', 30, 1000, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id_antrian` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `jumlah_pengunjung` int(11) NOT NULL,
  `created_at_antrian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id_antrian`, `id_loket`, `day`, `jumlah_pengunjung`, `created_at_antrian`) VALUES
(1, 1, 1, 10, '2022-01-20 07:22:27'),
(2, 4, 3, 20, '2022-01-20 08:59:22'),
(3, 1, 1, 0, '2022-01-20 09:04:48'),
(4, 3, 2, 1, '2022-01-20 09:04:48'),
(5, 4, 3, 1, '2022-01-20 09:04:48'),
(6, 1, 4, 1, '2022-01-20 09:04:48'),
(7, 3, 1, 1, '2022-01-20 09:04:48'),
(8, 4, 2, 1, '2022-01-20 09:04:48'),
(9, 1, 3, 1, '2022-01-20 09:04:48'),
(10, 3, 4, 1, '2022-01-20 09:04:48'),
(11, 4, 5, 1, '2022-01-20 09:04:48'),
(12, 1, 6, 1, '2022-01-20 09:04:48'),
(13, 3, 7, 1, '2022-01-20 09:04:48'),
(14, 4, 8, 1, '2022-01-20 09:04:48'),
(15, 1, 9, 2, '2022-01-20 09:04:48'),
(16, 3, 10, 3, '2022-01-20 09:04:48'),
(17, 4, 11, 4, '2022-01-20 09:04:48'),
(18, 1, 12, 5, '2022-01-20 09:04:48'),
(19, 3, 13, 6, '2022-01-20 09:04:48'),
(20, 4, 14, 7, '2022-01-20 09:04:48'),
(21, 1, 15, 8, '2022-01-20 09:04:48'),
(22, 3, 16, 9, '2022-01-20 09:04:48'),
(23, 4, 17, 10, '2022-01-20 09:04:48'),
(24, 1, 18, 11, '2022-01-20 09:04:48'),
(25, 3, 19, 12, '2022-01-20 09:04:48'),
(26, 4, 20, 13, '2022-01-20 09:04:48'),
(27, 1, 21, 14, '2022-01-20 09:04:48'),
(28, 3, 22, 15, '2022-01-20 09:04:48'),
(29, 4, 23, 16, '2022-01-20 09:04:48'),
(30, 1, 24, 17, '2022-01-20 09:04:48'),
(31, 3, 25, 18, '2022-01-20 09:04:48'),
(32, 4, 26, 19, '2022-01-20 09:04:48'),
(33, 1, 27, 20, '2022-01-20 09:04:48'),
(34, 3, 28, 21, '2022-01-20 09:04:48'),
(35, 4, 29, 22, '2022-01-20 09:04:48'),
(36, 4, 30, 23, '2022-01-20 09:04:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_loket`
--

CREATE TABLE `tbl_loket` (
  `id_loket` int(11) NOT NULL,
  `loket` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_loket`
--

INSERT INTO `tbl_loket` (`id_loket`, `loket`, `created_at`) VALUES
(1, 'Loket 1', '2022-01-20 07:20:02'),
(3, 'Loket 2', '2022-01-20 08:15:11'),
(4, 'Loket 3', '2022-01-20 08:23:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `id_loket` (`id_loket`);

--
-- Indeks untuk tabel `tbl_loket`
--
ALTER TABLE `tbl_loket`
  ADD PRIMARY KEY (`id_loket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_loket`
--
ALTER TABLE `tbl_loket`
  MODIFY `id_loket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD CONSTRAINT `tbl_antrian_ibfk_1` FOREIGN KEY (`id_loket`) REFERENCES `tbl_loket` (`id_loket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
