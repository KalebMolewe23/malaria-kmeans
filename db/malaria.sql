-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mar 2022 pada 06.13
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malaria`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp`
--

CREATE TABLE `centroid_temp` (
  `id` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `centroid_temp`
--

INSERT INTO `centroid_temp` (`id`, `id_malaria`, `iterasi`, `c1`, `c2`, `c3`) VALUES
(1, 3, 1, '1', '0', '0'),
(2, 4, 1, '0', '1', '0'),
(3, 5, 1, '0', '1', '0'),
(4, 6, 1, '0', '0', '1'),
(5, 7, 1, '0', '1', '0'),
(6, 8, 1, '0', '1', '0'),
(7, 9, 1, '0', '1', '0'),
(8, 10, 1, '0', '1', '0'),
(9, 11, 1, '0', '1', '0'),
(10, 12, 1, '1', '0', '0'),
(11, 13, 1, '0', '1', '0'),
(12, 14, 1, '1', '0', '0'),
(13, 15, 1, '0', '1', '0'),
(14, 16, 1, '0', '0', '1'),
(15, 17, 1, '1', '0', '0'),
(16, 18, 1, '1', '0', '0'),
(17, 19, 1, '0', '1', '0'),
(18, 20, 1, '0', '1', '0'),
(19, 21, 1, '1', '0', '0'),
(20, 22, 1, '1', '0', '0'),
(21, 23, 1, '1', '0', '0'),
(22, 27, 1, '1', '0', '0'),
(23, 3, 2, '1', '0', '0'),
(24, 4, 2, '0', '1', '0'),
(25, 5, 2, '1', '0', '0'),
(26, 6, 2, '0', '0', '1'),
(27, 7, 2, '0', '1', '0'),
(28, 8, 2, '0', '1', '0'),
(29, 9, 2, '0', '1', '0'),
(30, 10, 2, '0', '1', '0'),
(31, 11, 2, '0', '1', '0'),
(32, 12, 2, '1', '0', '0'),
(33, 13, 2, '0', '1', '0'),
(34, 14, 2, '1', '0', '0'),
(35, 15, 2, '1', '0', '0'),
(36, 16, 2, '0', '0', '1'),
(37, 17, 2, '1', '0', '0'),
(38, 18, 2, '1', '0', '0'),
(39, 19, 2, '1', '0', '0'),
(40, 20, 2, '0', '1', '0'),
(41, 21, 2, '1', '0', '0'),
(42, 22, 2, '1', '0', '0'),
(43, 23, 2, '1', '0', '0'),
(44, 27, 2, '1', '0', '0'),
(45, 3, 3, '1', '0', '0'),
(46, 4, 3, '0', '1', '0'),
(47, 5, 3, '1', '0', '0'),
(48, 6, 3, '0', '0', '1'),
(49, 7, 3, '0', '1', '0'),
(50, 8, 3, '0', '1', '0'),
(51, 9, 3, '0', '1', '0'),
(52, 10, 3, '0', '1', '0'),
(53, 11, 3, '0', '1', '0'),
(54, 12, 3, '1', '0', '0'),
(55, 13, 3, '0', '1', '0'),
(56, 14, 3, '1', '0', '0'),
(57, 15, 3, '1', '0', '0'),
(58, 16, 3, '0', '0', '1'),
(59, 17, 3, '1', '0', '0'),
(60, 18, 3, '1', '0', '0'),
(61, 19, 3, '1', '0', '0'),
(62, 20, 3, '0', '1', '0'),
(63, 21, 3, '1', '0', '0'),
(64, 22, 3, '1', '0', '0'),
(65, 23, 3, '1', '0', '0'),
(66, 27, 3, '1', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp_laki`
--

CREATE TABLE `centroid_temp_laki` (
  `id` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_temp_laki`
--

INSERT INTO `centroid_temp_laki` (`id`, `id_malaria`, `iterasi`, `c1`, `c2`, `c3`) VALUES
(1, 3, 1, '1', '0', '0'),
(2, 4, 1, '0', '1', '0'),
(3, 5, 1, '1', '0', '0'),
(4, 6, 1, '0', '0', '1'),
(5, 7, 1, '0', '1', '0'),
(6, 8, 1, '0', '1', '0'),
(7, 9, 1, '0', '1', '0'),
(8, 10, 1, '0', '1', '0'),
(9, 11, 1, '0', '1', '0'),
(10, 12, 1, '1', '0', '0'),
(11, 13, 1, '0', '1', '0'),
(12, 14, 1, '1', '0', '0'),
(13, 15, 1, '0', '1', '0'),
(14, 16, 1, '0', '1', '0'),
(15, 17, 1, '1', '0', '0'),
(16, 18, 1, '1', '0', '0'),
(17, 19, 1, '0', '1', '0'),
(18, 20, 1, '0', '1', '0'),
(19, 21, 1, '1', '0', '0'),
(20, 22, 1, '1', '0', '0'),
(21, 23, 1, '1', '0', '0'),
(22, 24, 1, '1', '0', '0'),
(23, 3, 2, '1', '0', '0'),
(24, 4, 2, '0', '1', '0'),
(25, 5, 2, '1', '0', '0'),
(26, 6, 2, '0', '0', '1'),
(27, 7, 2, '0', '1', '0'),
(28, 8, 2, '0', '1', '0'),
(29, 9, 2, '0', '1', '0'),
(30, 10, 2, '1', '0', '0'),
(31, 11, 2, '0', '1', '0'),
(32, 12, 2, '1', '0', '0'),
(33, 13, 2, '0', '1', '0'),
(34, 14, 2, '1', '0', '0'),
(35, 15, 2, '1', '0', '0'),
(36, 16, 2, '0', '0', '1'),
(37, 17, 2, '1', '0', '0'),
(38, 18, 2, '1', '0', '0'),
(39, 19, 2, '1', '0', '0'),
(40, 20, 2, '0', '1', '0'),
(41, 21, 2, '1', '0', '0'),
(42, 22, 2, '1', '0', '0'),
(43, 23, 2, '1', '0', '0'),
(44, 24, 2, '1', '0', '0'),
(45, 3, 3, '1', '0', '0'),
(46, 4, 3, '0', '1', '0'),
(47, 5, 3, '1', '0', '0'),
(48, 6, 3, '0', '0', '1'),
(49, 7, 3, '0', '1', '0'),
(50, 8, 3, '0', '1', '0'),
(51, 9, 3, '0', '1', '0'),
(52, 10, 3, '1', '0', '0'),
(53, 11, 3, '0', '1', '0'),
(54, 12, 3, '1', '0', '0'),
(55, 13, 3, '0', '1', '0'),
(56, 14, 3, '1', '0', '0'),
(57, 15, 3, '1', '0', '0'),
(58, 16, 3, '0', '0', '1'),
(59, 17, 3, '1', '0', '0'),
(60, 18, 3, '1', '0', '0'),
(61, 19, 3, '1', '0', '0'),
(62, 20, 3, '0', '1', '0'),
(63, 21, 3, '1', '0', '0'),
(64, 22, 3, '1', '0', '0'),
(65, 23, 3, '1', '0', '0'),
(66, 24, 3, '1', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp_perempuan`
--

CREATE TABLE `centroid_temp_perempuan` (
  `id` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_temp_perempuan`
--

INSERT INTO `centroid_temp_perempuan` (`id`, `id_malaria`, `iterasi`, `c1`, `c2`, `c3`) VALUES
(1, 2, 1, 1, 0, 0),
(2, 3, 1, 0, 1, 0),
(3, 4, 1, 1, 0, 0),
(4, 5, 1, 0, 0, 1),
(5, 6, 1, 0, 1, 0),
(6, 7, 1, 0, 1, 0),
(7, 8, 1, 0, 1, 0),
(8, 9, 1, 0, 1, 0),
(9, 10, 1, 0, 1, 0),
(10, 11, 1, 1, 0, 0),
(11, 12, 1, 0, 1, 0),
(12, 13, 1, 1, 0, 0),
(13, 14, 1, 1, 0, 0),
(14, 15, 1, 0, 1, 0),
(15, 16, 1, 1, 0, 0),
(16, 17, 1, 1, 0, 0),
(17, 18, 1, 1, 0, 0),
(18, 19, 1, 0, 1, 0),
(19, 20, 1, 1, 0, 0),
(20, 21, 1, 1, 0, 0),
(21, 22, 1, 1, 0, 0),
(22, 23, 1, 1, 0, 0),
(23, 2, 2, 1, 0, 0),
(24, 3, 2, 0, 1, 0),
(25, 4, 2, 1, 0, 0),
(26, 5, 2, 0, 0, 1),
(27, 6, 2, 0, 1, 0),
(28, 7, 2, 0, 1, 0),
(29, 8, 2, 0, 1, 0),
(30, 9, 2, 1, 0, 0),
(31, 10, 2, 0, 1, 0),
(32, 11, 2, 1, 0, 0),
(33, 12, 2, 0, 1, 0),
(34, 13, 2, 1, 0, 0),
(35, 14, 2, 1, 0, 0),
(36, 15, 2, 0, 0, 1),
(37, 16, 2, 1, 0, 0),
(38, 17, 2, 1, 0, 0),
(39, 18, 2, 1, 0, 0),
(40, 19, 2, 0, 1, 0),
(41, 20, 2, 1, 0, 0),
(42, 21, 2, 1, 0, 0),
(43, 22, 2, 1, 0, 0),
(44, 23, 2, 1, 0, 0),
(45, 2, 3, 1, 0, 0),
(46, 3, 3, 0, 1, 0),
(47, 4, 3, 1, 0, 0),
(48, 5, 3, 0, 0, 1),
(49, 6, 3, 0, 1, 0),
(50, 7, 3, 0, 1, 0),
(51, 8, 3, 0, 1, 0),
(52, 9, 3, 0, 1, 0),
(53, 10, 3, 0, 1, 0),
(54, 11, 3, 1, 0, 0),
(55, 12, 3, 0, 1, 0),
(56, 13, 3, 1, 0, 0),
(57, 14, 3, 1, 0, 0),
(58, 15, 3, 0, 0, 1),
(59, 16, 3, 1, 0, 0),
(60, 17, 3, 1, 0, 0),
(61, 18, 3, 1, 0, 0),
(62, 19, 3, 0, 1, 0),
(63, 20, 3, 1, 0, 0),
(64, 21, 3, 1, 0, 0),
(65, 22, 3, 1, 0, 0),
(66, 23, 3, 1, 0, 0),
(67, 2, 4, 1, 0, 0),
(68, 3, 4, 0, 1, 0),
(69, 4, 4, 1, 0, 0),
(70, 5, 4, 0, 0, 1),
(71, 6, 4, 0, 1, 0),
(72, 7, 4, 0, 1, 0),
(73, 8, 4, 0, 1, 0),
(74, 9, 4, 0, 1, 0),
(75, 10, 4, 0, 1, 0),
(76, 11, 4, 1, 0, 0),
(77, 12, 4, 0, 1, 0),
(78, 13, 4, 1, 0, 0),
(79, 14, 4, 1, 0, 0),
(80, 15, 4, 0, 0, 1),
(81, 16, 4, 1, 0, 0),
(82, 17, 4, 1, 0, 0),
(83, 18, 4, 1, 0, 0),
(84, 19, 4, 0, 1, 0),
(85, 20, 4, 1, 0, 0),
(86, 21, 4, 1, 0, 0),
(87, 22, 4, 1, 0, 0),
(88, 23, 4, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_malaria`
--

CREATE TABLE `data_malaria` (
  `id_malaria` int(11) NOT NULL,
  `id_puskesmas` int(11) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `konfirmasi_lab` int(11) NOT NULL,
  `total_positif` int(11) NOT NULL,
  `ibu_hamil` int(11) NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_malaria`
--

INSERT INTO `data_malaria` (`id_malaria`, `id_puskesmas`, `jumlah_penduduk`, `konfirmasi_lab`, `total_positif`, `ibu_hamil`, `persentase`) VALUES
(3, 2, 10252, 226, 226, 4, 4.44791),
(4, 3, 15781, 1007, 1001, 8, 12.7749),
(5, 4, 19710, 278, 278, 0, 2.8209),
(6, 5, 59067, 2990, 2941, 17, 10.0699),
(7, 6, 12388, 1267, 1265, 12, 20.536),
(8, 7, 16276, 601, 600, 2, 7.39125),
(9, 8, 1022, 523, 523, 17, 104.012),
(10, 9, 3480, 493, 492, 10, 28.592),
(11, 10, 7564, 575, 575, 13, 15.3755),
(12, 11, 3275, 129, 129, 2, 7.93893),
(13, 12, 15470, 910, 909, 1, 11.7647),
(14, 13, 4961, 105, 105, 4, 4.31365),
(15, 14, 5269, 313, 312, 0, 11.8618),
(16, 15, 0, 1968, 1967, 21, 0),
(17, 16, 0, 201, 194, 1, 0),
(18, 17, 3803, 132, 131, 2, 6.96818),
(19, 18, 0, 286, 286, 0, 0),
(20, 19, 0, 625, 619, 2, 0),
(21, 20, 0, 71, 71, 0, 0),
(22, 21, 0, 72, 72, 1, 0),
(23, 22, 0, 225, 225, 0, 0),
(27, 25, 0, 5, 5, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_malarialaki`
--

CREATE TABLE `data_malarialaki` (
  `id_malarial` int(11) NOT NULL,
  `id_puskesmas` int(11) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `konfirmasi_lab` int(11) NOT NULL,
  `total_positif` int(11) NOT NULL,
  `ibu_hamil` int(11) NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_malarialaki`
--

INSERT INTO `data_malarialaki` (`id_malarial`, `id_puskesmas`, `jumlah_penduduk`, `konfirmasi_lab`, `total_positif`, `ibu_hamil`, `persentase`) VALUES
(3, 2, 10252, 226, 145, 4, 3.65782),
(4, 3, 15781, 1007, 819, 8, 11.6216),
(5, 4, 19710, 278, 189, 0, 2.36936),
(6, 5, 59067, 2990, 1605, 17, 7.80808),
(7, 6, 12388, 1267, 720, 12, 16.1366),
(8, 7, 16276, 601, 317, 2, 5.65249),
(9, 8, 1022, 523, 268, 17, 79.0607),
(10, 9, 3480, 493, 227, 10, 20.977),
(11, 10, 7564, 575, 290, 13, 11.6076),
(12, 11, 3275, 129, 68, 2, 6.07634),
(13, 12, 15470, 910, 657, 1, 10.1357),
(14, 13, 4961, 105, 77, 4, 3.74924),
(15, 14, 5269, 313, 230, 0, 10.3056),
(16, 15, 0, 1968, 1081, 21, 0),
(17, 16, 0, 201, 162, 1, 0),
(18, 17, 3803, 132, 80, 2, 5.62714),
(19, 18, 0, 286, 246, 0, 0),
(20, 19, 0, 625, 478, 2, 0),
(21, 20, 0, 71, 48, 0, 0),
(22, 21, 0, 72, 56, 1, 0),
(23, 22, 0, 225, 122, 0, 0),
(24, 25, 0, 5, 5, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_malariaperempuan`
--

CREATE TABLE `data_malariaperempuan` (
  `id_malariap` int(11) NOT NULL,
  `id_puskesmas` int(11) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `konfirmasi_lab` int(11) NOT NULL,
  `total_positif` int(11) NOT NULL,
  `ibu_hamil` int(11) NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_malariaperempuan`
--

INSERT INTO `data_malariaperempuan` (`id_malariap`, `id_puskesmas`, `jumlah_penduduk`, `konfirmasi_lab`, `total_positif`, `ibu_hamil`, `persentase`) VALUES
(2, 2, 10252, 226, 81, 4, 3.03355),
(3, 3, 15781, 1007, 182, 8, 7.58507),
(4, 4, 19710, 278, 89, 0, 1.862),
(5, 5, 59067, 2990, 1336, 17, 7.35267),
(6, 6, 12388, 1267, 545, 12, 14.7239),
(7, 7, 16276, 601, 283, 2, 5.4436),
(8, 8, 1022, 523, 255, 17, 77.7887),
(9, 9, 3480, 493, 265, 10, 22.069),
(10, 10, 7564, 575, 267, 13, 11.3035),
(11, 11, 3275, 129, 61, 2, 5.8626),
(12, 12, 15470, 910, 252, 1, 7.51778),
(13, 13, 4961, 105, 28, 4, 2.76154),
(14, 14, 5269, 313, 82, 0, 7.49668),
(15, 15, 0, 1968, 886, 21, 0),
(16, 16, 0, 201, 32, 1, 0),
(17, 17, 3803, 132, 51, 2, 4.86458),
(18, 18, 0, 286, 40, 0, 0),
(19, 19, 0, 625, 141, 2, 0),
(20, 20, 0, 71, 23, 0, 0),
(21, 21, 0, 72, 16, 1, 0),
(22, 22, 0, 225, 103, 0, 0),
(23, 25, 0, 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `predikat` varchar(50) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `id_malaria`, `predikat`, `d1`, `d2`, `d3`) VALUES
(1, 3, 'Rendah', 76, 46, 4),
(2, 4, 'Rendah', 67, 37, 13),
(3, 5, 'Rendah', 77, 47, 3),
(4, 6, 'Rendah', 70, 40, 10),
(5, 7, 'Rendah', 59, 29, 21),
(6, 8, 'Rendah', 73, 43, 7),
(7, 9, 'Tinggi', 24, 54, 104),
(8, 10, 'Sedang', 51, 21, 29),
(9, 11, 'Rendah', 65, 35, 15),
(10, 12, 'Rendah', 72, 42, 8),
(11, 13, 'Rendah', 68, 38, 12),
(12, 14, 'Rendah', 76, 46, 4),
(13, 15, 'Rendah', 68, 38, 12),
(14, 16, 'Rendah', 80, 50, 0),
(15, 17, 'Rendah', 80, 50, 0),
(16, 18, 'Rendah', 73, 43, 7),
(17, 19, 'Rendah', 80, 50, 0),
(18, 20, 'Rendah', 80, 50, 0),
(19, 21, 'Rendah', 80, 50, 0),
(20, 22, 'Rendah', 80, 50, 0),
(21, 23, 'Rendah', 80, 50, 0),
(22, 27, 'Rendah', 80, 50, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_centorid_perempuan`
--

CREATE TABLE `hasil_centorid_perempuan` (
  `nomor` int(11) NOT NULL,
  `c1a` varchar(50) NOT NULL,
  `c1b` varchar(50) NOT NULL,
  `c1c` varchar(50) NOT NULL,
  `c2a` varchar(50) NOT NULL,
  `c2b` varchar(50) NOT NULL,
  `c2c` varchar(50) NOT NULL,
  `c3a` varchar(50) NOT NULL,
  `c3b` varchar(50) NOT NULL,
  `c3c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_centorid_perempuan`
--

INSERT INTO `hasil_centorid_perempuan` (`nomor`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, '170.25', '50.5', '1.1666666666667', '885.44444444444', '341.77777777778', '9.5555555555556', '2990', '1336', '17'),
(2, '195.07692307692', '67', '1.8461538461538', '786.85714285714', '275', '7.8571428571429', '2479', '1111', '19'),
(3, '170.25', '50.5', '1.1666666666667', '750.125', '273.75', '8.125', '2479', '1111', '19'),
(4, '170.25', '50.5', '1.1666666666667', '750.125', '273.75', '8.125', '2479', '1111', '19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_centroid`
--

CREATE TABLE `hasil_centroid` (
  `nomor` int(11) NOT NULL,
  `c1a` varchar(50) NOT NULL,
  `c1b` varchar(50) NOT NULL,
  `c1c` varchar(50) NOT NULL,
  `c2a` varchar(50) NOT NULL,
  `c2b` varchar(50) NOT NULL,
  `c2c` varchar(50) NOT NULL,
  `c3a` varchar(50) NOT NULL,
  `c3b` varchar(50) NOT NULL,
  `c3c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_centroid`
--

INSERT INTO `hasil_centroid` (`nomor`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, '129.55555555556', '128.66666666667', '1.5555555555556', '625.27272727273', '623.63636363636', '5.9090909090909', '2479', '2454', '19'),
(2, '170.25', '169.5', '1.1666666666667', '750.125', '748', '8.125', '2479', '2454', '19'),
(3, '170.25', '169.5', '1.1666666666667', '750.125', '748', '8.125', '2479', '2454', '19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_centroid_laki`
--

CREATE TABLE `hasil_centroid_laki` (
  `nomor` int(11) NOT NULL,
  `c1a` varchar(50) NOT NULL,
  `c1b` varchar(50) NOT NULL,
  `c1c` varchar(50) NOT NULL,
  `c2a` varchar(50) NOT NULL,
  `c2b` varchar(50) NOT NULL,
  `c2c` varchar(50) NOT NULL,
  `c3a` varchar(50) NOT NULL,
  `c3b` varchar(50) NOT NULL,
  `c3c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_centroid_laki`
--

INSERT INTO `hasil_centroid_laki` (`nomor`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, '144.4', '95.2', '1.4', '778.90909090909', '484.81818181818', '7.8181818181818', '2990', '1605', '17'),
(2, '195.07692307692', '127.30769230769', '1.8461538461538', '786.85714285714', '507', '7.8571428571429', '2479', '1343', '19'),
(3, '195.07692307692', '127.30769230769', '1.8461538461538', '786.85714285714', '507', '7.8571428571429', '2479', '1343', '19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_laki`
--

CREATE TABLE `hasil_laki` (
  `id` int(11) NOT NULL,
  `id_malarial` int(11) NOT NULL,
  `predikat` varchar(50) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_laki`
--

INSERT INTO `hasil_laki` (`id`, `id_malarial`, `predikat`, `d1`, `d2`, `d3`) VALUES
(1, 3, 'Rendah', 76, 46, 4),
(2, 4, 'Rendah', 68, 38, 12),
(3, 5, 'Rendah', 78, 48, 2),
(4, 6, 'Rendah', 72, 42, 8),
(5, 7, 'Rendah', 64, 34, 16),
(6, 8, 'Rendah', 74, 44, 6),
(7, 9, 'Tinggi', 1, 29, 79),
(8, 10, 'Rendah', 59, 29, 21),
(9, 11, 'Rendah', 68, 38, 12),
(10, 12, 'Rendah', 74, 44, 6),
(11, 13, 'Rendah', 70, 40, 10),
(12, 14, 'Rendah', 76, 46, 4),
(13, 15, 'Rendah', 70, 40, 10),
(14, 16, 'Rendah', 80, 50, 0),
(15, 17, 'Rendah', 80, 50, 0),
(16, 18, 'Rendah', 74, 44, 6),
(17, 19, 'Rendah', 80, 50, 0),
(18, 20, 'Rendah', 80, 50, 0),
(19, 21, 'Rendah', 80, 50, 0),
(20, 22, 'Rendah', 80, 50, 0),
(21, 23, 'Rendah', 80, 50, 0),
(22, 24, 'Rendah', 80, 50, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_perempuan`
--

CREATE TABLE `hasil_perempuan` (
  `id` int(11) NOT NULL,
  `id_malariap` int(11) NOT NULL,
  `predikat` varchar(50) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_perempuan`
--

INSERT INTO `hasil_perempuan` (`id`, `id_malariap`, `predikat`, `d1`, `d2`, `d3`) VALUES
(1, 2, 'Rendah', 77, 47, 3),
(2, 3, 'Rendah', 72, 42, 8),
(3, 4, 'Rendah', 78, 48, 2),
(4, 5, 'Rendah', 73, 43, 7),
(5, 6, 'Rendah', 65, 35, 15),
(6, 7, 'Rendah', 75, 45, 5),
(7, 8, 'Tinggi', 2, 28, 78),
(8, 9, 'Rendah', 58, 28, 22),
(9, 10, 'Rendah', 69, 39, 11),
(10, 11, 'Rendah', 74, 44, 6),
(11, 12, 'Rendah', 72, 42, 8),
(12, 13, 'Rendah', 77, 47, 3),
(13, 14, 'Rendah', 73, 43, 7),
(14, 15, 'Rendah', 80, 50, 0),
(15, 16, 'Rendah', 80, 50, 0),
(16, 17, 'Rendah', 75, 45, 5),
(17, 18, 'Rendah', 80, 50, 0),
(18, 19, 'Rendah', 80, 50, 0),
(19, 20, 'Rendah', 80, 50, 0),
(20, 21, 'Rendah', 80, 50, 0),
(21, 22, 'Rendah', 80, 50, 0),
(22, 23, 'Rendah', 80, 50, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kec`) VALUES
(1, 'Warmare'),
(2, 'Prafi'),
(3, 'Manokwari Barat'),
(4, 'Manokwari Timur'),
(5, 'Manokwari Utara'),
(6, 'Manokwari Selatan'),
(7, 'Tanah Rubuh'),
(8, 'Masni'),
(9, 'Sidey');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `nama_puskesmas` varchar(100) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `lat` float(9,6) NOT NULL,
  `lng` float(9,6) NOT NULL,
  `geojson` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `nama_puskesmas`, `kecamatan`, `alamat`, `lat`, `lng`, `geojson`) VALUES
(2, 'Puskesmas Warmare', 'Warmare', '2XG4+G3J, Umcen, Warmare, Kabupaten Manokwari, Papua Bar. 98352', -0.957990, 133.884293, 'warmare.geojson'),
(3, 'Puskesmas SP IV Prafi', 'Prafi', '4RCM+W2G, Udapi Hilir, Prafi, Kabupaten Manokwari, Papua Bar. 98356', -0.877671, 133.832413, 'prafi.geojson'),
(4, 'Puskesmas Wosi', 'Manokwari Barat', '42HW+PQQ, Wosi, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312', -0.870812, 134.046890, 'barat.geojson'),
(5, 'Puskesmas Sanggeng', 'Manokwari Barat', 'Jl. Percetakan Negara, Sanggeng, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312', -0.862691, 134.062759, 'barat.geojson'),
(6, 'Puskesmas Amban', 'Manokwari Barat', 'Jl. Tembusan manunggal ke, Jl. Angkasa Mulyono, Amban, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312', -0.832198, 134.071106, 'barat.geojson'),
(7, 'Puskesmas Pasir Putih', 'Manokwari Timur', '44H2+RQ9, Pasir Putih, Manokwari Tim., Kabupaten Manokwari, Papua Bar. 98313', -0.870533, 134.102234, 'timur.geojson'),
(8, 'Puskesmas Pulau Mansinam', 'Manokwari Timur', 'Jl. Lingkar Selatan Pulau Marsinam Kec. Manokwari Timur, Kab. Manokwari, Papua Barat', -0.788504, 133.728241, 'timur.geojson'),
(9, 'Puskesmas Nuni', 'Manokwari Utara', '7X3J+CF9, Saubeba, Manokwari Utara, Kabupaten Manokwari, Papua Bar. 98315', -0.746471, 133.979034, 'utara.geojson'),
(10, 'Puskesmas Maripi', 'Manokwari Selatan', 'km 23, distrik, Jl. Trikora Sowi, Sowi, Manokwari Sel., Kabupaten Manokwari, Papua Bar. 98315', -0.946809, 134.001312, 'selatan.geojson'),
(11, 'Puskesmas Tanah Rubuh', 'Tanah Rubuh', 'jl. trans manokwari warkapi. distrik tanah rubuh, Kabupaten Manokwari, Papua Bar. 98314', -0.877233, 133.830811, 'tanah.geojson'),
(12, 'Puskesmas Masni', 'Masni', 'Jl. Protokol Kampung Sumber Boga, Manokwari 98357', -0.788351, 133.728119, 'masni.geojson'),
(13, 'Puskesmas Mobja', 'Masni', 'Bar., Mobja, Masni, Kabupaten Manokwari, Papua Bar. 98357, Indonesia', -0.856880, 133.713181, 'masni.geojson'),
(14, 'Puskesmas Sidey', 'Sidey', '6HQW+W46, Sidey Baru, Sidey, Kabupaten Manokwari, Papua Bar. 98357', -0.877349, 133.831558, 'sidey.geojson'),
(15, 'RSU Manokwari', 'Manokwari Barat', 'Jl. Siliwangi No.1, Manokwari Tim., Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312', -0.870585, 134.079178, 'barat.geojson'),
(16, 'Rumkitban Manokwari', 'Manokwari Barat', 'Jl. Brawijaya No.30, Padarni, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98311', -0.863074, 134.076767, 'barat.geojson'),
(17, 'RS AL dr. Azhar Zahir Monokwari', 'Manokwari Barat', 'Jalan Serma Suwandi No. 01, Sanggeng, Manokwari Barat, Sanggeng, Manokwari Barat, Sanggeng, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312, Indonesia', -0.871984, 134.063843, 'barat.geojson'),
(18, 'RS Umum Pratama Warmare', 'Warmare', 'Kampung Indisey, Manokwari 98352', -0.957990, 133.884293, 'warmare.geojson'),
(19, 'BP St. Maria Prafi Manokwari', 'Prafi', 'Kampung Udapi Hilir ,prafi , Manokwari Papua Barat, Masni, Papua, Indonesia 98356', -0.883056, 133.824081, 'prafi.geojson'),
(20, 'Puskesmas Sowi', 'Manokwari Selatan', 'Jl. Trikora Taman Ria, Sowi, Manokwari Sel., Kabupaten Manokwari, Papua Bar. 98315', -0.910598, 134.035553, 'selatan.geojson'),
(21, 'RS Bhayangkara POLDA Papua Barat', 'Manokwari Selatan', 'Manokwari Tim., Manokwari Bar., Kabupaten Manokwari, Papua Bar.', -0.950254, 134.000854, 'selatan.geojson'),
(22, 'BP St Monika', 'Manokwari Barat', 'Jl. Trikora Taman Ria, Wosi, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312, Indonesia', -0.867841, 134.046783, 'barat.geojson'),
(25, 'Kantor KKP Manokwari', 'Manokwari Barat', 'Jl.Brawijaya No.2Manokwari-Papua barat, Yauer-Manokwari, Papua, Indonesia', -0.865972, 134.077698, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `kabupaten`, `id_kecamatan`, `nama`, `nama_user`, `kontak`, `alamat`, `kode_pos`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'Papua Barat', 1, '', 'tania', '08524232332', '2XG4+G3J, Umcen, Warmare, Kabupaten Manokwari, Papua Bar. 98352', 65111, 'tania@gmail.com', '$2y$10$3dMj1YbV8o9LW1Cc4AJ0d.BdRpmG5MNLWijqf.zpwhONthog6f8hm', 'default.jpg', 2, 1, 1644553195),
(17, 'Papua Barat', 7, '', 'admin', '08764376437', 'Bar., Mobja, Masni, Kabupaten Manokwari, Papua Bar. 98357, Indonesia', 65645, 'admin@gmail.com', '$2y$10$DVOps63AHLc8hbT4L/ISheqIhOE5llg2P8uXI6C0iwDr6Ko9YUwYm', 'default.jpg', 1, 1, 1644553678),
(18, 'Papua Barat', 2, '', 'kaleb molewe', '0852369405333', 'jl lautan api bandung', 553241, 'kaleb@gmail.com', '$2y$10$puio4K3riXHV6Pn3e6AWzuLasi1J9M0tKARnYP4pfRs/NEMFgCRAe', 'default.jpg', 2, 1, 1644559711),
(19, 'Papua Barat', 2, '', 'rizaldi', '0852423233223', 'Jl.Brawijaya No.2Manokwari-Papua barat, Yauer-Manokwari, Papua, Indonesia', 65111, 'rizaldi@gmail.com', '$2y$10$Rs8OLl3bkjKXPskAFghdjuzwVSnaBYqBu/wjHcIiMmBZlmx/u.BCe', 'default.jpg', 2, 1, 1644824936),
(20, 'Papua Barat', 2, '', 'Rudy Salam', '087327323434', 'jl bali', 65111, 'rudysalam@gmail.com', '$2y$10$jcGQ9UdY/eE9bAnsGwdxxejN9VX8R4bPWrRVJvP9hHTbaPXsDuAZG', 'default.jpg', 2, 1, 1647919487);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id_menu`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `id_menu`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Daerah Vaksinasi', 'admin/daerah_vaksinasi', 'fas fa-fw fa-book-open', 1),
(2, 1, 'Add Data', 'admin/add_data', 'fas fa-fw fa-plus-circle', 1),
(3, 1, 'Tampilan Data', 'admin/tampilan_data', 'fab fa-fw fa-elementor', 1),
(4, 2, 'Info Vaksinasi', 'user/info_vaksinasi', 'fas fa-fw fa-map-marker-alt', 1),
(5, 2, 'Tampilan Data', 'user/tampilan_Data', 'fas fa-fw fa-database', 1),
(6, 2, 'About', 'user/about', 'fas fa-address-card', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centroid_temp_laki`
--
ALTER TABLE `centroid_temp_laki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centroid_temp_perempuan`
--
ALTER TABLE `centroid_temp_perempuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_malaria`
--
ALTER TABLE `data_malaria`
  ADD PRIMARY KEY (`id_malaria`);

--
-- Indexes for table `data_malarialaki`
--
ALTER TABLE `data_malarialaki`
  ADD PRIMARY KEY (`id_malarial`);

--
-- Indexes for table `data_malariaperempuan`
--
ALTER TABLE `data_malariaperempuan`
  ADD PRIMARY KEY (`id_malariap`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_centorid_perempuan`
--
ALTER TABLE `hasil_centorid_perempuan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `hasil_centroid_laki`
--
ALTER TABLE `hasil_centroid_laki`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `hasil_laki`
--
ALTER TABLE `hasil_laki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_perempuan`
--
ALTER TABLE `hasil_perempuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `id_kelurahan` (`id_kecamatan`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `centroid_temp_laki`
--
ALTER TABLE `centroid_temp_laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `centroid_temp_perempuan`
--
ALTER TABLE `centroid_temp_perempuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `data_malaria`
--
ALTER TABLE `data_malaria`
  MODIFY `id_malaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `data_malarialaki`
--
ALTER TABLE `data_malarialaki`
  MODIFY `id_malarial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `data_malariaperempuan`
--
ALTER TABLE `data_malariaperempuan`
  MODIFY `id_malariap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `hasil_centorid_perempuan`
--
ALTER TABLE `hasil_centorid_perempuan`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hasil_centroid_laki`
--
ALTER TABLE `hasil_centroid_laki`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hasil_laki`
--
ALTER TABLE `hasil_laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `hasil_perempuan`
--
ALTER TABLE `hasil_perempuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD CONSTRAINT `user_submenu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `user_menu` (`id_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
