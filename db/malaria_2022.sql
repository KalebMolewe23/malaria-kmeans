-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2022 pada 17.01
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malaria_2022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `idabout` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `media1` varchar(100) NOT NULL,
  `media2` varchar(100) NOT NULL,
  `media3` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`idabout`, `phone`, `email`, `address`, `media1`, `media2`, `media3`, `about`) VALUES
(1, '0832938912381', 'emailanda@mailmail.com', 'Manokwari. Papua Barat test', 'media test', 'media test 2', 'media test 3', 'ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testingini about testingini about testing ini about testing\r\nini about testing ini about testing ini about testing\r\nini about testing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `background`
--

CREATE TABLE `background` (
  `idbackground` int(11) NOT NULL,
  `bg_name` varchar(100) NOT NULL,
  `bg_color` varchar(100) NOT NULL,
  `bg_color_second` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `background`
--

INSERT INTO `background` (`idbackground`, `bg_name`, `bg_color`, `bg_color_second`) VALUES
(1, 'DATA MALARIA', '#0b07ed', '#4d0017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_akhir_c1`
--

CREATE TABLE `centroid_akhir_c1` (
  `idcentroid_akhir_c1` int(11) NOT NULL,
  `c1a` varchar(100) NOT NULL,
  `c1b` varchar(100) NOT NULL,
  `c1c` varchar(100) NOT NULL,
  `c1d` varchar(100) NOT NULL,
  `c1e` varchar(100) NOT NULL,
  `c1f` varchar(100) NOT NULL,
  `c1g` varchar(100) NOT NULL,
  `c1h` varchar(100) NOT NULL,
  `c1i` varchar(100) NOT NULL,
  `c1j` varchar(100) NOT NULL,
  `c1k` varchar(100) NOT NULL,
  `c1l` varchar(100) NOT NULL,
  `c1m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_akhir_c1`
--

INSERT INTO `centroid_akhir_c1` (`idcentroid_akhir_c1`, `c1a`, `c1b`, `c1c`, `c1d`, `c1e`, `c1f`, `c1g`, `c1h`, `c1i`, `c1j`, `c1k`, `c1l`, `c1m`) VALUES
(1, '0.0082142624411765', '0.0049753615294118', '0.033773740823529', '0.044591622132353', '0.029026740411765', '0.16391136482353', '0.00313117025', '0.23529411764706', '40.134803921618', '0', '97.252450980441', '0.65036981758824', '0.69553191325');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_akhir_c2`
--

CREATE TABLE `centroid_akhir_c2` (
  `idcentroid_akhir_c3` int(11) NOT NULL,
  `c2a` varchar(100) NOT NULL,
  `c2b` varchar(100) NOT NULL,
  `c2c` varchar(100) NOT NULL,
  `c2d` varchar(100) NOT NULL,
  `c2e` varchar(100) NOT NULL,
  `c2f` varchar(100) NOT NULL,
  `c2g` varchar(100) NOT NULL,
  `c2h` varchar(100) NOT NULL,
  `c2i` varchar(100) NOT NULL,
  `c2j` varchar(100) NOT NULL,
  `c2k` varchar(100) NOT NULL,
  `c2l` varchar(100) NOT NULL,
  `c2m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_akhir_c2`
--

INSERT INTO `centroid_akhir_c2` (`idcentroid_akhir_c3`, `c2a`, `c2b`, `c2c`, `c2d`, `c2e`, `c2f`, `c2g`, `c2h`, `c2i`, `c2j`, `c2k`, `c2l`, `c2m`) VALUES
(1, '0.0041028781193416', '0.0062912537522634', '0.036668145259259', '0.041382290460905', '0.02984562254321', '0.15006356745267', '0.0032222564567901', '0.65432098765432', '46.168724279053', '0.47928767178601', '16.174573037963', '0.25288635529218', '0.43916967944444');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_akhir_c3`
--

CREATE TABLE `centroid_akhir_c3` (
  `idcentroid_akhir_k3` int(11) NOT NULL,
  `c3a` varchar(100) NOT NULL,
  `c3b` varchar(100) NOT NULL,
  `c3c` varchar(100) NOT NULL,
  `c3d` varchar(100) NOT NULL,
  `c3e` varchar(100) NOT NULL,
  `c3f` varchar(100) NOT NULL,
  `c3g` varchar(100) NOT NULL,
  `c3h` varchar(100) NOT NULL,
  `c3i` varchar(100) NOT NULL,
  `c3j` varchar(100) NOT NULL,
  `c3k` varchar(100) NOT NULL,
  `c3l` varchar(100) NOT NULL,
  `c3m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_akhir_c3`
--

INSERT INTO `centroid_akhir_c3` (`idcentroid_akhir_k3`, `c3a`, `c3b`, `c3c`, `c3d`, `c3e`, `c3f`, `c3g`, `c3h`, `c3i`, `c3j`, `c3k`, `c3l`, `c3m`) VALUES
(1, '0.0048801151296786', '0.0022586958223062', '0.032425040263138', '0.029341510523629', '0.024676277822306', '0.20183657130624', '0.0043426225897921', '0.31568998109641', '3.6129174542911', '0.45296691144008', '1.9393251494915', '0.41890138953119', '0.55060753116824');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp`
--

CREATE TABLE `centroid_temp` (
  `idcentroid_temp` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `iddata_malaria` int(11) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_temp`
--

INSERT INTO `centroid_temp` (`idcentroid_temp`, `iterasi`, `iddata_malaria`, `c1`, `c2`, `c3`) VALUES
(1, 1, 1, '0', '0', '1'),
(2, 1, 2, '0', '0', '1'),
(3, 1, 3, '0', '0', '1'),
(4, 1, 4, '0', '1', '0'),
(5, 1, 5, '0', '0', '1'),
(6, 1, 6, '0', '0', '1'),
(7, 1, 7, '0', '1', '0'),
(8, 1, 8, '0', '1', '0'),
(9, 1, 9, '0', '1', '0'),
(10, 1, 10, '1', '0', '0'),
(11, 1, 11, '0', '1', '0'),
(12, 1, 12, '0', '1', '0'),
(13, 1, 13, '0', '0', '1'),
(14, 1, 14, '1', '0', '0'),
(15, 1, 15, '0', '0', '1'),
(16, 1, 16, '1', '0', '0'),
(17, 1, 17, '0', '1', '0'),
(18, 1, 18, '0', '1', '0'),
(19, 1, 19, '0', '0', '1'),
(20, 1, 20, '0', '0', '1'),
(21, 1, 21, '0', '0', '1'),
(22, 1, 22, '0', '0', '1'),
(23, 1, 23, '0', '0', '1'),
(24, 1, 24, '1', '0', '0'),
(25, 1, 25, '0', '0', '1'),
(26, 1, 26, '0', '0', '1'),
(27, 1, 27, '0', '1', '0'),
(28, 1, 28, '0', '0', '1'),
(29, 1, 29, '0', '0', '1'),
(30, 1, 30, '0', '1', '0'),
(31, 1, 31, '0', '0', '1'),
(32, 1, 32, '0', '0', '1'),
(33, 1, 33, '0', '0', '1'),
(34, 1, 35, '1', '0', '0'),
(35, 1, 36, '0', '0', '1'),
(36, 1, 37, '0', '0', '1'),
(37, 1, 38, '0', '0', '1'),
(38, 1, 39, '0', '0', '1'),
(39, 1, 40, '0', '0', '1'),
(40, 1, 41, '0', '0', '1'),
(41, 2, 1, '0', '0', '1'),
(42, 2, 2, '0', '0', '1'),
(43, 2, 3, '0', '0', '1'),
(44, 2, 4, '0', '1', '0'),
(45, 2, 5, '0', '0', '1'),
(46, 2, 6, '0', '0', '1'),
(47, 2, 7, '0', '0', '1'),
(48, 2, 8, '0', '1', '0'),
(49, 2, 9, '0', '1', '0'),
(50, 2, 10, '1', '0', '0'),
(51, 2, 11, '0', '1', '0'),
(52, 2, 12, '0', '1', '0'),
(53, 2, 13, '0', '0', '1'),
(54, 2, 14, '0', '0', '1'),
(55, 2, 15, '0', '0', '1'),
(56, 2, 16, '0', '0', '1'),
(57, 2, 17, '0', '1', '0'),
(58, 2, 18, '1', '0', '0'),
(59, 2, 19, '0', '0', '1'),
(60, 2, 20, '0', '0', '1'),
(61, 2, 21, '0', '0', '1'),
(62, 2, 22, '0', '0', '1'),
(63, 2, 23, '0', '0', '1'),
(64, 2, 24, '0', '0', '1'),
(65, 2, 25, '0', '0', '1'),
(66, 2, 26, '0', '0', '1'),
(67, 2, 27, '0', '1', '0'),
(68, 2, 28, '0', '0', '1'),
(69, 2, 29, '0', '0', '1'),
(70, 2, 30, '0', '1', '0'),
(71, 2, 31, '0', '0', '1'),
(72, 2, 32, '0', '0', '1'),
(73, 2, 33, '0', '0', '1'),
(74, 2, 35, '0', '0', '1'),
(75, 2, 36, '0', '0', '1'),
(76, 2, 37, '0', '0', '1'),
(77, 2, 38, '0', '0', '1'),
(78, 2, 39, '0', '0', '1'),
(79, 2, 40, '0', '0', '1'),
(80, 2, 41, '0', '0', '1'),
(81, 3, 1, '0', '0', '1'),
(82, 3, 2, '0', '0', '1'),
(83, 3, 3, '0', '0', '1'),
(84, 3, 4, '0', '1', '0'),
(85, 3, 5, '0', '0', '1'),
(86, 3, 6, '0', '0', '1'),
(87, 3, 7, '0', '1', '0'),
(88, 3, 8, '0', '1', '0'),
(89, 3, 9, '0', '1', '0'),
(90, 3, 10, '1', '0', '0'),
(91, 3, 11, '0', '1', '0'),
(92, 3, 12, '0', '1', '0'),
(93, 3, 13, '0', '0', '1'),
(94, 3, 14, '0', '0', '1'),
(95, 3, 15, '0', '0', '1'),
(96, 3, 16, '0', '0', '1'),
(97, 3, 17, '0', '1', '0'),
(98, 3, 18, '0', '1', '0'),
(99, 3, 19, '0', '0', '1'),
(100, 3, 20, '0', '0', '1'),
(101, 3, 21, '0', '0', '1'),
(102, 3, 22, '0', '0', '1'),
(103, 3, 23, '0', '0', '1'),
(104, 3, 24, '0', '0', '1'),
(105, 3, 25, '0', '0', '1'),
(106, 3, 26, '0', '0', '1'),
(107, 3, 27, '0', '1', '0'),
(108, 3, 28, '0', '0', '1'),
(109, 3, 29, '0', '0', '1'),
(110, 3, 30, '0', '1', '0'),
(111, 3, 31, '0', '0', '1'),
(112, 3, 32, '0', '0', '1'),
(113, 3, 33, '0', '0', '1'),
(114, 3, 35, '0', '1', '0'),
(115, 3, 36, '0', '0', '1'),
(116, 3, 37, '0', '0', '1'),
(117, 3, 38, '0', '0', '1'),
(118, 3, 39, '0', '0', '1'),
(119, 3, 40, '0', '0', '1'),
(120, 3, 41, '0', '0', '1'),
(121, 4, 1, '0', '0', '1'),
(122, 4, 2, '0', '0', '1'),
(123, 4, 3, '0', '0', '1'),
(124, 4, 4, '0', '1', '0'),
(125, 4, 5, '0', '0', '1'),
(126, 4, 6, '0', '0', '1'),
(127, 4, 7, '0', '1', '0'),
(128, 4, 8, '1', '0', '0'),
(129, 4, 9, '0', '1', '0'),
(130, 4, 10, '1', '0', '0'),
(131, 4, 11, '0', '1', '0'),
(132, 4, 12, '0', '1', '0'),
(133, 4, 13, '0', '0', '1'),
(134, 4, 14, '0', '0', '1'),
(135, 4, 15, '0', '0', '1'),
(136, 4, 16, '0', '1', '0'),
(137, 4, 17, '0', '1', '0'),
(138, 4, 18, '0', '1', '0'),
(139, 4, 19, '0', '0', '1'),
(140, 4, 20, '0', '0', '1'),
(141, 4, 21, '0', '0', '1'),
(142, 4, 22, '0', '0', '1'),
(143, 4, 23, '0', '0', '1'),
(144, 4, 24, '0', '0', '1'),
(145, 4, 25, '0', '0', '1'),
(146, 4, 26, '0', '0', '1'),
(147, 4, 27, '0', '1', '0'),
(148, 4, 28, '0', '0', '1'),
(149, 4, 29, '0', '0', '1'),
(150, 4, 30, '1', '0', '0'),
(151, 4, 31, '0', '0', '1'),
(152, 4, 32, '0', '0', '1'),
(153, 4, 33, '0', '0', '1'),
(154, 4, 35, '0', '1', '0'),
(155, 4, 36, '0', '0', '1'),
(156, 4, 37, '0', '0', '1'),
(157, 4, 38, '0', '0', '1'),
(158, 4, 39, '0', '0', '1'),
(159, 4, 40, '0', '0', '1'),
(160, 4, 41, '0', '0', '1'),
(161, 5, 1, '0', '0', '1'),
(162, 5, 2, '0', '0', '1'),
(163, 5, 3, '0', '1', '0'),
(164, 5, 4, '0', '1', '0'),
(165, 5, 5, '0', '0', '1'),
(166, 5, 6, '0', '0', '1'),
(167, 5, 7, '0', '1', '0'),
(168, 5, 8, '1', '0', '0'),
(169, 5, 9, '0', '1', '0'),
(170, 5, 10, '1', '0', '0'),
(171, 5, 11, '0', '1', '0'),
(172, 5, 12, '0', '1', '0'),
(173, 5, 13, '0', '0', '1'),
(174, 5, 14, '0', '0', '1'),
(175, 5, 15, '0', '1', '0'),
(176, 5, 16, '0', '1', '0'),
(177, 5, 17, '0', '1', '0'),
(178, 5, 18, '1', '0', '0'),
(179, 5, 19, '0', '0', '1'),
(180, 5, 20, '0', '0', '1'),
(181, 5, 21, '0', '0', '1'),
(182, 5, 22, '0', '0', '1'),
(183, 5, 23, '0', '0', '1'),
(184, 5, 24, '0', '0', '1'),
(185, 5, 25, '0', '0', '1'),
(186, 5, 26, '0', '0', '1'),
(187, 5, 27, '0', '1', '0'),
(188, 5, 28, '0', '1', '0'),
(189, 5, 29, '0', '0', '1'),
(190, 5, 30, '1', '0', '0'),
(191, 5, 31, '0', '0', '1'),
(192, 5, 32, '0', '0', '1'),
(193, 5, 33, '0', '0', '1'),
(194, 5, 35, '0', '1', '0'),
(195, 5, 36, '0', '0', '1'),
(196, 5, 37, '0', '0', '1'),
(197, 5, 38, '0', '0', '1'),
(198, 5, 39, '0', '0', '1'),
(199, 5, 40, '0', '0', '1'),
(200, 5, 41, '0', '0', '1'),
(201, 6, 1, '0', '0', '1'),
(202, 6, 2, '0', '0', '1'),
(203, 6, 3, '0', '1', '0'),
(204, 6, 4, '0', '1', '0'),
(205, 6, 5, '0', '0', '1'),
(206, 6, 6, '0', '0', '1'),
(207, 6, 7, '0', '1', '0'),
(208, 6, 8, '1', '0', '0'),
(209, 6, 9, '0', '1', '0'),
(210, 6, 10, '1', '0', '0'),
(211, 6, 11, '0', '1', '0'),
(212, 6, 12, '0', '1', '0'),
(213, 6, 13, '0', '0', '1'),
(214, 6, 14, '0', '0', '1'),
(215, 6, 15, '0', '1', '0'),
(216, 6, 16, '0', '1', '0'),
(217, 6, 17, '0', '1', '0'),
(218, 6, 18, '1', '0', '0'),
(219, 6, 19, '0', '1', '0'),
(220, 6, 20, '0', '0', '1'),
(221, 6, 21, '0', '0', '1'),
(222, 6, 22, '0', '0', '1'),
(223, 6, 23, '0', '0', '1'),
(224, 6, 24, '0', '0', '1'),
(225, 6, 25, '0', '0', '1'),
(226, 6, 26, '0', '0', '1'),
(227, 6, 27, '0', '1', '0'),
(228, 6, 28, '0', '1', '0'),
(229, 6, 29, '0', '0', '1'),
(230, 6, 30, '1', '0', '0'),
(231, 6, 31, '0', '1', '0'),
(232, 6, 32, '0', '0', '1'),
(233, 6, 33, '0', '0', '1'),
(234, 6, 35, '0', '1', '0'),
(235, 6, 36, '0', '0', '1'),
(236, 6, 37, '0', '0', '1'),
(237, 6, 38, '0', '0', '1'),
(238, 6, 39, '0', '0', '1'),
(239, 6, 40, '0', '0', '1'),
(240, 6, 41, '0', '0', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_malaria`
--

CREATE TABLE `data_malaria` (
  `iddata_malaria` int(11) NOT NULL,
  `id_puskesmas` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `positif` double NOT NULL,
  `usia_0` double NOT NULL,
  `usia_1` double NOT NULL,
  `usia_5` double NOT NULL,
  `usia_10` double NOT NULL,
  `usia_15` double NOT NULL,
  `usia_64` double NOT NULL,
  `ibu_hamil` double NOT NULL,
  `pf` double NOT NULL,
  `pv` double NOT NULL,
  `po` double NOT NULL,
  `pm` double NOT NULL,
  `pk` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_malaria`
--

INSERT INTO `data_malaria` (`iddata_malaria`, `id_puskesmas`, `tahun`, `positif`, `usia_0`, `usia_1`, `usia_5`, `usia_10`, `usia_15`, `usia_64`, `ibu_hamil`, `pf`, `pv`, `po`, `pm`, `pk`) VALUES
(1, 2, 2019, 0.004779555, 0, 0.020408163, 0.102040816, 0.040816327, 0.816326531, 0.020408163, 3, 16.33333333, 1.324324324, 0, 0, 0),
(2, 2, 2020, 0.008193523, 0.011904762, 0.047619048, 0.095238095, 0.071428571, 0.773809524, 0, 0, 0, 0, 0, 3.111111111, 2.153846154),
(3, 3, 2019, 0.01286357, 0, 0.02955665, 0.044334975, 0.064039409, 0.84729064, 0.014778325, 3, 67.66666667, 1.344370861, 3.903846154, 0, 0),
(4, 3, 2020, 0.031430201, 0, 0.012096774, 0.024193548, 0.018145161, 0.943548387, 0.002016129, 3, 165.3333333, 0, 62, 1.516819572, 4.428571429),
(5, 4, 2019, 0.003196347, 0, 0.2222222222, 0.031746032, 0.126984127, 0.587301587, 0.031746032, 0, 0, 2.3333333333, 1.8, 0, 0),
(6, 4, 2020, 0.005936073, 0.008547009, 0.102564103, 0.145299145, 0.094017094, 0.632478632, 0.017094017, 0, 0, 0, 0, 4.5, 2.489361702),
(7, 5, 2019, 0.01171551, 0.057803468, 0.206647399, 0.205202312, 0.12716763, 0.38583815, 0.01734104, 5, 138.4, 9.105263158, 1.100158983, 0, 0),
(8, 5, 2020, 0.007635397, 0.064301552, 0.184035477, 0.141906874, 0.090909091, 0.501108647, 0.017738359, 1, 451, 0, 451, 3.221428571, 1.478688525),
(9, 6, 2019, 0.022763965, 0.007092199, 0.092198582, 0.226950355, 0.088652482, 0.570921986, 0.014184397, 2, 141, 2.104477621, 2.043478261, 0, 0),
(10, 6, 2020, 0.05093639, 0.011093502, 0.11251981, 0.199683043, 0.088748019, 0.570522979, 0.017432647, 0, 0, 0, 631, 1.93780488, 2.261648746),
(11, 7, 2019, 0.009277464, 0.0331112583, 0.17218543, 0.205298013, 0.145695364, 0.430463576, 0.013245033, 1, 151, 1.864197531, 2.359375, 0, 0),
(12, 7, 2020, 0.007127058, 0.017241379, 0.137931034, 0.172413793, 0.206896552, 0.448275862, 0.017241379, 1, 116, 0, 58, 1.589041096, 4.461538462),
(13, 8, 2019, 0.101761252, 0, 0.173076923, 0.144230769, 0.163461538, 0.471153846, 0.048076923, 4, 26, 3.586206897, 1.857142857, 0, 0),
(14, 8, 2020, 0.123287671, 0.007936508, 0.126984127, 0.158730159, 0.253968254, 0.436507937, 0.015873016, 0, 0, 0, 63, 2.680851064, 2.625),
(15, 9, 2019, 0.048563218, 0.00591716, 0.175514793, 0.147928994, 0.147928994, 0.50295858, 0.017751479, 3, 56.33333333, 3.755555556, 3.38, 0, 0),
(16, 9, 2020, 0.054885057, 0.020942408, 0.172774869, 0.178010471, 0.141361257, 0.481675393, 0.005235602, 3, 63.66666667, 0, 63.66666667, 2.938461538, 3.673076923),
(17, 10, 2019, 0.020095188, 0.039473684, 0.138157895, 0.25, 0.177631579, 0.394736842, 0, 1, 152, 2.235294118, 2.171428571, 0, 0),
(18, 10, 2020, 0.014939186, 0, 0.132743363, 0.194690265, 0.17699115, 0.495575221, 0, 1, 113, 0, 113, 2.535166667, 1.98245614),
(19, 11, 2019, 0.014045802, 0, 0.0652, 0.2391, 0.1739, 0.5217, 0, 1, 46, 3.83333, 7.66667, 0, 0),
(20, 11, 2020, 0.010381697, 0, 0.0588, 0.0588, 0.2059, 0.6765, 0, 0, 0, 0, 0, 3.4, 8.5),
(21, 12, 2019, 0.014414997, 0.0179, 0.13, 0.0942, 0.0493, 0.6816, 0.0269, 0, 0, 2.50562, 2.02727, 0, 0),
(22, 12, 2020, 0.019909502, 0, 0.0455, 0.0292, 0.0292, 0.8831, 0.013, 0, 0, 0, 0, 2.44444, 2.248175182),
(23, 13, 2019, 0.005644023, 0, 0.1429, 0, 0.0357, 0.7857, 0.0357, 1, 28, 7, 1.4, 0, 0),
(24, 13, 2020, 0.007055029, 0, 0.0286, 0.1143, 0, 0.8571, 0, 0, 0, 0, 35, 2.69231, 2.692307692),
(25, 14, 2019, 0.013475043, 0, 0.1127, 0.0986, 0.0704, 0.6761, 0.0423, 0, 0, 2.36667, 4.17647, 0, 0),
(26, 14, 2020, 0.021825773, 0.0087, 0.1043, 0.1217, 0.0783, 0.687, 0, 0, 0, 0, 0, 3.10811, 2.875),
(27, 15, 2019, 0, 0.0439, 0.243, 0.1429, 0.0652, 0.4803, 0.0247, 2, 444.5, 2.06265, 1.97556, 0, 0),
(28, 15, 2020, 0, 0.0334, 0.1572, 0.0953, 0.0681, 0.6275, 0.0186, 17, 47, 0, 28.8571, 2.01496, 2.06122449),
(29, 19, 2019, 0, 0, 0.1091, 0.0909, 0.1091, 0.6909, 0, 0, 0, 1.71875, 2.61905, 0, 0),
(30, 19, 2020, 0, 0.01666, 0.0865, 0.1198, 0.0715, 0.6988, 0.0067, 2, 300.5, 0, 300.5, 1.70739, 3.284153005),
(31, 20, 2019, 0.024980279, 0.0105, 0.2526, 0.1263, 0.1158, 0.4737, 0.0211, 2, 47.5, 7.30769, 1.17284, 0, 0),
(32, 20, 2020, 0.0184062521, 0.0143, 0.1714, 0.1143, 0.1143, 0.5429, 0.0429, 0, 0, 0, 5, 1.34615, 0),
(33, 21, 2019, 0, 0, 0.0833, 0.0556, 0.0556, 0.8056, 0, 0, 0, 2.4, 2.57143, 0, 0),
(35, 21, 2020, 0, 0, 0.0833, 0.0139, 0.0278, 0.8611, 0.0139, 1, 72, 0, 72, 1.89474, 4.5),
(36, 22, 2019, 0, 0, 0.3333, 0.3333, 0, 0.3333, 0, 0, 0, 1.5, 3, 0, 0),
(37, 22, 2020, 0, 0.0756, 0.1644, 0.1689, 0.1111, 0.4711, 0.0089, 0, 0, 0, 0, 3.16901, 2.027027027),
(38, 25, 2019, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0),
(39, 25, 2020, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1.25, 5),
(40, 18, 2019, 0, 0.004, 0.012, 0, 0.024, 0.936, 0.024, 0, 0, 0, 0, 1.4881, 3.472222222),
(41, 16, 2020, 0, 0, 0.0833, 0.0833, 0.0833, 0.75, 0, 0, 0, 0, 0, 6, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_centroid`
--

CREATE TABLE `hasil_centroid` (
  `idhasil_centroid` int(11) NOT NULL,
  `c1a` double NOT NULL,
  `c1b` double NOT NULL,
  `c1c` double NOT NULL,
  `c1d` double NOT NULL,
  `c1e` double NOT NULL,
  `c1f` double NOT NULL,
  `c1g` double NOT NULL,
  `c1h` double NOT NULL,
  `c1i` double NOT NULL,
  `c1j` double NOT NULL,
  `c1k` double NOT NULL,
  `c1l` double NOT NULL,
  `c1m` double NOT NULL,
  `c2a` double NOT NULL,
  `c2b` double NOT NULL,
  `c2c` double NOT NULL,
  `c2d` double NOT NULL,
  `c2e` double NOT NULL,
  `c2f` double NOT NULL,
  `c2g` double NOT NULL,
  `c2h` double NOT NULL,
  `c2i` double NOT NULL,
  `c2j` double NOT NULL,
  `c2k` double NOT NULL,
  `c2l` double NOT NULL,
  `c2m` double NOT NULL,
  `c3a` double NOT NULL,
  `c3b` double NOT NULL,
  `c3c` double NOT NULL,
  `c3d` double NOT NULL,
  `c3e` double NOT NULL,
  `c3f` double NOT NULL,
  `c3g` double NOT NULL,
  `c3h` double NOT NULL,
  `c3i` double NOT NULL,
  `c3j` double NOT NULL,
  `c3k` double NOT NULL,
  `c3l` double NOT NULL,
  `c3m` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_centroid`
--

INSERT INTO `hasil_centroid` (`idhasil_centroid`, `c1a`, `c1b`, `c1c`, `c1d`, `c1e`, `c1f`, `c1g`, `c1h`, `c1i`, `c1j`, `c1k`, `c1l`, `c1m`, `c2a`, `c2b`, `c2c`, `c2d`, `c2e`, `c2f`, `c2g`, `c2h`, `c2i`, `c2j`, `c2k`, `c2l`, `c2m`, `c3a`, `c3b`, `c3c`, `c3d`, `c3e`, `c3f`, `c3g`, `c3h`, `c3i`, `c3j`, `c3k`, `c3l`, `c3m`) VALUES
(1, 0.0472328294, 0.0079944836, 0.1048357612, 0.1329247346, 0.102375506, 0.6413812618, 0.010488253, 0.8, 27.133333334, 0, 172.933333334, 2.4288334964, 3.1504066722, 0.0124983969, 0.02795835403, 0.1405495954, 0.168335516, 0.1168789009, 0.5349568671, 0.0113166337, 1.9, 217.27333333, 1.7371882428, 99.4150000815, 1.0569845906, 1.5635407561, 0.013135076244, 0.00763075724, 0.111878476088, 0.09681275304, 0.0813070424, 0.6869607736, 0.01533019756, 1.36, 13.3933333332, 1.679034038852, 2.77727276044, 1.27327524444, 1.71307427108),
(2, 0.033559969222222, 0.0056739911111111, 0.085493553222222, 0.11766633122222, 0.086401855444444, 0.47477827877778, 0.007763768, 0.55555555555556, 27.62962963, 0, 178.74074074111, 1.846348781, 2.2217931385556, 0.0085889708461538, 0.019283215869231, 0.095061582538462, 0.11410837473077, 0.078208432230769, 0.37760476811538, 0.0080381397692308, 1.2307692307692, 157.46410256154, 0.98609621915385, 72.084609332577, 0.71555865942308, 1.1264753454615, 0.010043495049412, 0.0055084734823529, 0.073085061169412, 0.064832712870588, 0.054301756011765, 0.43965011952941, 0.0096336416, 0.90588235294118, 11.102745098, 1.0947878247129, 4.3956525138235, 0.86906029204706, 1.1664011549294),
(3, 0.029414676083333, 0.0051799518333333, 0.07349681575, 0.104890002, 0.072197059833333, 0.40362729066667, 0.0072755465833333, 0.41666666666667, 20.7222222225, 0, 186.63888888917, 1.54624532575, 1.85481558275, 0.005903342559322, 0.013236392422034, 0.067125374576271, 0.079052083101695, 0.054745902491525, 0.27166767189831, 0.0056958978135593, 0.88135593220339, 107.4372881339, 0.72898956145763, 49.83643802478, 0.52659510255932, 0.83769095835593, 0.0080905428538462, 0.0040702254023669, 0.055251781642604, 0.04959846183432, 0.04167843095858, 0.33325185106509, 0.0072380064674556, 0.67455621301775, 7.9422090729586, 0.79901074598757, 3.5782778068402, 0.67463685524852, 0.89326236426627),
(4, 0.017147829166667, 0.0064256031666667, 0.052709044833333, 0.071669580875, 0.0465634095, 0.27558162975, 0.0053823985416667, 0.33333333333333, 41.67361111125, 0, 150.92361111125, 1.0592319733333, 1.2200948862083, 0.0052578872727273, 0.010106177264646, 0.054054873191919, 0.063410420808081, 0.044500499212121, 0.21738210160606, 0.0044840560707071, 0.72727272727273, 79.754545453232, 0.60992188438384, 33.52188394896, 0.41962969620202, 0.69161019693939, 0.006592134831769, 0.0032006264693141, 0.044368581685199, 0.039983714927798, 0.033683390418773, 0.26998985598195, 0.0058568629891697, 0.53429602888087, 6.0543922984116, 0.63902045863971, 2.7875840013249, 0.54591577874368, 0.7187924333213),
(5, 0.011024065295455, 0.0055970347727273, 0.040473084681818, 0.054003411886364, 0.035128865636364, 0.20181740820455, 0.0038874675227273, 0.27272727272727, 42.378787878864, 0, 116.31060606068, 0.79143994268182, 0.87020962920455, 0.0046493840943396, 0.0079207113553459, 0.043849030641509, 0.050214239754717, 0.035749483333333, 0.17921658789308, 0.0037919178301887, 0.71698113207547, 59.815094338616, 0.52109481383019, 22.768076255258, 0.32388278069182, 0.55090453333962, 0.0056002875730479, 0.002634664511335, 0.037482044617128, 0.033957869146096, 0.028556360345088, 0.22991704827204, 0.0049630962191436, 0.40050377833753, 4.6370277077834, 0.53875211989295, 2.2756968292796, 0.46954345815365, 0.61760313352393),
(6, 0.0082142624411765, 0.0049753615294118, 0.033773740823529, 0.044591622132353, 0.029026740411765, 0.16391136482353, 0.00313117025, 0.23529411764706, 40.134803921618, 0, 97.252450980441, 0.65036981758824, 0.69553191325, 0.0041028781193416, 0.0062912537522634, 0.036668145259259, 0.041382290460905, 0.02984562254321, 0.15006356745267, 0.0032222564567901, 0.65432098765432, 46.168724279053, 0.47928767178601, 16.174573037963, 0.25288635529218, 0.43916967944444, 0.0048801151296786, 0.0022586958223062, 0.032425040263138, 0.029341510523629, 0.024676277822306, 0.20183657130624, 0.0043426225897921, 0.31568998109641, 3.6129174542911, 0.45296691144008, 1.9393251494915, 0.41890138953119, 0.55060753116824);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_ssw`
--

CREATE TABLE `hasil_ssw` (
  `idhasil_ssw` int(11) NOT NULL,
  `ssw1` varchar(100) NOT NULL,
  `ssw2` varchar(100) NOT NULL,
  `ssw3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_ssw`
--

INSERT INTO `hasil_ssw` (`idhasil_ssw`, `ssw1`, `ssw2`, `ssw3`) VALUES
(1, '370.5854426847545', '120.50870131857721', '11.452590749091263');

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
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `idsosmed` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`idsosmed`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ssw_cluster1`
--

CREATE TABLE `ssw_cluster1` (
  `idssw_cluster1` int(11) NOT NULL,
  `nama_puskesmas` varchar(100) NOT NULL,
  `nilai_cluster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ssw_cluster1`
--

INSERT INTO `ssw_cluster1` (`idssw_cluster1`, `nama_puskesmas`, `nilai_cluster`) VALUES
(1, 'Puskesmas Sanggeng', '542.17663132224'),
(2, 'Puskesmas Amban', '535.25845660352'),
(3, 'Puskesmas Maripi', '74.587397103208'),
(4, 'BP St. Maria Prafi Manokwari', '330.31928571005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ssw_cluster2`
--

CREATE TABLE `ssw_cluster2` (
  `idssw_cluster2` int(11) NOT NULL,
  `nama_puskesmas` varchar(100) NOT NULL,
  `nilai_cluster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ssw_cluster2`
--

INSERT INTO `ssw_cluster2` (`idssw_cluster2`, `nama_puskesmas`, `nilai_cluster`) VALUES
(1, 'Puskesmas SP IV Prafi', '95.828589442434'),
(2, 'Puskesmas SP IV Prafi', '124.36565267598'),
(3, 'Puskesmas Sanggeng', '133.5872163799'),
(4, 'Puskesmas Amban', '134.39734679406'),
(5, 'Puskesmas Pasir Putih', '141.40977566737'),
(6, 'Puskesmas Pasir Putih', '80.222340866937'),
(7, 'Puskesmas Nuni', '94.509367737554'),
(8, 'Puskesmas Nuni', '38.1804620777'),
(9, 'Puskesmas Maripi', '142.28231271564'),
(10, 'Puskesmas Tanah Rubuh', '89.651912738539'),
(11, 'RSU Manokwari', '409.57323027685'),
(12, 'RSU Manokwari', '70.370517915043'),
(13, 'Puskesmas Sowi', '96.342749766374'),
(14, 'RS Bhayangkara POLDA Papua Barat', '36.4003434057');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ssw_cluster3`
--

CREATE TABLE `ssw_cluster3` (
  `idssw_cluster3` int(11) NOT NULL,
  `nama_puskesmas` varchar(100) NOT NULL,
  `nilai_cluster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ssw_cluster3`
--

INSERT INTO `ssw_cluster3` (`idssw_cluster3`, `nama_puskesmas`, `nilai_cluster`) VALUES
(1, 'Puskesmas Warmare', '13.205882727754'),
(2, 'Puskesmas Warmare', '5.222064155564'),
(3, 'Puskesmas Wosi', '4.1692438147295'),
(4, 'Puskesmas Wosi', '6.1432328254168'),
(5, 'Puskesmas Pulau Mansinam', '22.917060383862'),
(6, 'Puskesmas Pulau Mansinam', '61.248086405232'),
(7, 'Puskesmas Tanah Rubuh', '9.4582230864714'),
(8, 'Puskesmas Masni', '4.2540019957659'),
(9, 'Puskesmas Masni', '4.9566422067885'),
(10, 'Puskesmas Mobja', '25.282151024135'),
(11, 'Puskesmas Mobja', '33.414919406935'),
(12, 'Puskesmas Sidey', '4.7472950664079'),
(13, 'Puskesmas Sidey', '5.4775779828582'),
(14, 'BP St. Maria Prafi Manokwari', '3.9937953945666'),
(15, 'Puskesmas Sowi', '4.9030096088611'),
(16, 'RS Bhayangkara POLDA Papua Barat', '4.2650086574373'),
(17, 'BP St Monika', '4.0058045594073'),
(18, 'BP St Monika', '5.1943218222579'),
(19, 'Kantor KKP Manokwari', '4.2816109572261'),
(20, 'Kantor KKP Manokwari', '6.1844399444419'),
(21, 'RS Umum Pratama Warmare', '5.2287236643444'),
(22, 'Rumkitban Manokwari', '13.403900789545');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `email` varchar(125) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nama_user`, `password`, `kontak`, `alamat`, `kode_pos`, `email`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin', '$2y$10$PuHFO.rIzLvMokmer.jJwOxkQhGcROyvP/aH9o/U/tGxdXsePSLIi', '083923892', 'jl monokwari', 12313, 'admin@gmail.com', 1, 1, 1644553195);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id_menu`, `menu`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`idabout`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`idbackground`);

--
-- Indexes for table `centroid_akhir_c1`
--
ALTER TABLE `centroid_akhir_c1`
  ADD PRIMARY KEY (`idcentroid_akhir_c1`);

--
-- Indexes for table `centroid_akhir_c2`
--
ALTER TABLE `centroid_akhir_c2`
  ADD PRIMARY KEY (`idcentroid_akhir_c3`);

--
-- Indexes for table `centroid_akhir_c3`
--
ALTER TABLE `centroid_akhir_c3`
  ADD PRIMARY KEY (`idcentroid_akhir_k3`);

--
-- Indexes for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  ADD PRIMARY KEY (`idcentroid_temp`);

--
-- Indexes for table `data_malaria`
--
ALTER TABLE `data_malaria`
  ADD PRIMARY KEY (`iddata_malaria`);

--
-- Indexes for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  ADD PRIMARY KEY (`idhasil_centroid`);

--
-- Indexes for table `hasil_ssw`
--
ALTER TABLE `hasil_ssw`
  ADD PRIMARY KEY (`idhasil_ssw`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`idsosmed`);

--
-- Indexes for table `ssw_cluster1`
--
ALTER TABLE `ssw_cluster1`
  ADD PRIMARY KEY (`idssw_cluster1`);

--
-- Indexes for table `ssw_cluster2`
--
ALTER TABLE `ssw_cluster2`
  ADD PRIMARY KEY (`idssw_cluster2`);

--
-- Indexes for table `ssw_cluster3`
--
ALTER TABLE `ssw_cluster3`
  ADD PRIMARY KEY (`idssw_cluster3`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `idabout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `idbackground` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_akhir_c1`
--
ALTER TABLE `centroid_akhir_c1`
  MODIFY `idcentroid_akhir_c1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_akhir_c2`
--
ALTER TABLE `centroid_akhir_c2`
  MODIFY `idcentroid_akhir_c3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_akhir_c3`
--
ALTER TABLE `centroid_akhir_c3`
  MODIFY `idcentroid_akhir_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  MODIFY `idcentroid_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `data_malaria`
--
ALTER TABLE `data_malaria`
  MODIFY `iddata_malaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  MODIFY `idhasil_centroid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hasil_ssw`
--
ALTER TABLE `hasil_ssw`
  MODIFY `idhasil_ssw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `idsosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ssw_cluster1`
--
ALTER TABLE `ssw_cluster1`
  MODIFY `idssw_cluster1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ssw_cluster2`
--
ALTER TABLE `ssw_cluster2`
  MODIFY `idssw_cluster2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ssw_cluster3`
--
ALTER TABLE `ssw_cluster3`
  MODIFY `idssw_cluster3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
