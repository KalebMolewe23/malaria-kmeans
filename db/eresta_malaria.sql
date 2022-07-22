-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jul 2022 pada 13.55
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eresta_malaria`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_awal_k2_1`
--

CREATE TABLE `centroid_awal_k2_1` (
  `id_k1` int(11) NOT NULL,
  `nilaik` int(11) NOT NULL,
  `data1` float NOT NULL,
  `data2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_awal_k2_1`
--

INSERT INTO `centroid_awal_k2_1` (`id_k1`, `nilaik`, `data1`, `data2`) VALUES
(1, 2, 523, 523);

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_awal_k2_2`
--

CREATE TABLE `centroid_awal_k2_2` (
  `data_k2` int(11) NOT NULL,
  `nilaik` int(11) NOT NULL,
  `data1` float NOT NULL,
  `data2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_awal_k2_2`
--

INSERT INTO `centroid_awal_k2_2` (`data_k2`, `nilaik`, `data1`, `data2`) VALUES
(1, 2, 1968, 1967);

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_awal_k3_1`
--

CREATE TABLE `centroid_awal_k3_1` (
  `idcentroid_awal_k3_1` int(11) NOT NULL,
  `nilaik` int(11) NOT NULL,
  `data1` float NOT NULL,
  `data2` float NOT NULL,
  `data3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_awal_k3_1`
--

INSERT INTO `centroid_awal_k3_1` (`idcentroid_awal_k3_1`, `nilaik`, `data1`, `data2`, `data3`) VALUES
(1, 3, 523, 523, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_awal_k3_2`
--

CREATE TABLE `centroid_awal_k3_2` (
  `idcentroid_awal_k3_2` int(11) NOT NULL,
  `nilaik` int(11) NOT NULL,
  `data1` float NOT NULL,
  `data2` float NOT NULL,
  `data3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_awal_k3_2`
--

INSERT INTO `centroid_awal_k3_2` (`idcentroid_awal_k3_2`, `nilaik`, `data1`, `data2`, `data3`) VALUES
(1, 3, 226, 226, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_awal_k3_3`
--

CREATE TABLE `centroid_awal_k3_3` (
  `idcentroid_awal_k3_3` int(11) NOT NULL,
  `nilaik` int(11) NOT NULL,
  `data1` float NOT NULL,
  `data2` float NOT NULL,
  `data3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_awal_k3_3`
--

INSERT INTO `centroid_awal_k3_3` (`idcentroid_awal_k3_3`, `nilaik`, `data1`, `data2`, `data3`) VALUES
(1, 3, 1968, 1967, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp_k2`
--

CREATE TABLE `centroid_temp_k2` (
  `idcentroid_temp_k2` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `iddata_malaria` int(11) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_temp_k2`
--

INSERT INTO `centroid_temp_k2` (`idcentroid_temp_k2`, `iterasi`, `iddata_malaria`, `c1`, `c2`) VALUES
(1, 1, 3, '1', '0'),
(2, 1, 4, '1', '0'),
(3, 1, 5, '1', '0'),
(4, 1, 6, '0', '1'),
(5, 1, 7, '0', '1'),
(6, 1, 8, '1', '0'),
(7, 1, 9, '1', '0'),
(8, 1, 10, '1', '0'),
(9, 1, 11, '1', '0'),
(10, 1, 12, '1', '0'),
(11, 1, 13, '1', '0'),
(12, 1, 14, '1', '0'),
(13, 1, 15, '1', '0'),
(14, 1, 16, '0', '1'),
(15, 1, 17, '1', '0'),
(16, 1, 18, '1', '0'),
(17, 1, 19, '1', '0'),
(18, 1, 20, '1', '0'),
(19, 1, 21, '1', '0'),
(20, 1, 22, '1', '0'),
(21, 1, 23, '1', '0'),
(22, 1, 27, '1', '0'),
(23, 2, 3, '1', '0'),
(24, 2, 4, '1', '0'),
(25, 2, 5, '1', '0'),
(26, 2, 6, '0', '1'),
(27, 2, 7, '0', '1'),
(28, 2, 8, '1', '0'),
(29, 2, 9, '1', '0'),
(30, 2, 10, '1', '0'),
(31, 2, 11, '1', '0'),
(32, 2, 12, '1', '0'),
(33, 2, 13, '1', '0'),
(34, 2, 14, '1', '0'),
(35, 2, 15, '1', '0'),
(36, 2, 16, '0', '1'),
(37, 2, 17, '1', '0'),
(38, 2, 18, '1', '0'),
(39, 2, 19, '1', '0'),
(40, 2, 20, '1', '0'),
(41, 2, 21, '1', '0'),
(42, 2, 22, '1', '0'),
(43, 2, 23, '1', '0'),
(44, 2, 27, '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroid_temp_k3`
--

CREATE TABLE `centroid_temp_k3` (
  `idcentroid_temp_k3` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centroid_temp_k3`
--

INSERT INTO `centroid_temp_k3` (`idcentroid_temp_k3`, `iterasi`, `id_malaria`, `c1`, `c2`, `c3`) VALUES
(1, 1, 3, '0', '1', '0'),
(2, 1, 4, '1', '0', '0'),
(3, 1, 5, '0', '1', '0'),
(4, 1, 6, '0', '0', '1'),
(5, 1, 7, '0', '0', '1'),
(6, 1, 8, '1', '0', '0'),
(7, 1, 9, '1', '0', '0'),
(8, 1, 10, '1', '0', '0'),
(9, 1, 11, '1', '0', '0'),
(10, 1, 12, '0', '1', '0'),
(11, 1, 13, '1', '0', '0'),
(12, 1, 14, '0', '1', '0'),
(13, 1, 15, '0', '1', '0'),
(14, 1, 16, '0', '0', '1'),
(15, 1, 17, '0', '1', '0'),
(16, 1, 18, '0', '1', '0'),
(17, 1, 19, '0', '1', '0'),
(18, 1, 20, '1', '0', '0'),
(19, 1, 21, '0', '1', '0'),
(20, 1, 22, '0', '1', '0'),
(21, 1, 23, '0', '1', '0'),
(22, 1, 27, '0', '1', '0'),
(23, 2, 3, '0', '1', '0'),
(24, 2, 4, '1', '0', '0'),
(25, 2, 5, '0', '1', '0'),
(26, 2, 6, '0', '0', '1'),
(27, 2, 7, '1', '0', '0'),
(28, 2, 8, '1', '0', '0'),
(29, 2, 9, '1', '0', '0'),
(30, 2, 10, '1', '0', '0'),
(31, 2, 11, '1', '0', '0'),
(32, 2, 12, '0', '1', '0'),
(33, 2, 13, '1', '0', '0'),
(34, 2, 14, '0', '1', '0'),
(35, 2, 15, '0', '1', '0'),
(36, 2, 16, '0', '0', '1'),
(37, 2, 17, '0', '1', '0'),
(38, 2, 18, '0', '1', '0'),
(39, 2, 19, '0', '1', '0'),
(40, 2, 20, '1', '0', '0'),
(41, 2, 21, '0', '1', '0'),
(42, 2, 22, '0', '1', '0'),
(43, 2, 23, '0', '1', '0'),
(44, 2, 27, '0', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacluster_distance_k2_1`
--

CREATE TABLE `datacluster_distance_k2_1` (
  `iddatacluster_distance` int(11) NOT NULL,
  `iddata_malaria` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacluster_distance_k2_1`
--

INSERT INTO `datacluster_distance_k2_1` (`iddatacluster_distance`, `iddata_malaria`, `distance`) VALUES
(1, 3, 183.853),
(2, 4, 916.415),
(3, 5, 110.318),
(4, 8, 345.776),
(5, 9, 236.178),
(6, 10, 193.041),
(7, 11, 309.716),
(8, 12, 321.03),
(9, 13, 782.768),
(10, 14, 354.97),
(11, 15, 61.5224),
(12, 17, 224.181),
(13, 18, 317.492),
(14, 19, 99.0051),
(15, 20, 376.191),
(16, 21, 403.053),
(17, 22, 401.639),
(18, 23, 185.267),
(19, 27, 496.391);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacluster_distance_k2_2`
--

CREATE TABLE `datacluster_distance_k2_2` (
  `iddatacluster_distance_2` int(11) NOT NULL,
  `iddata_malaria` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacluster_distance_k2_2`
--

INSERT INTO `datacluster_distance_k2_2` (`iddatacluster_distance_2`, `iddata_malaria`, `distance`) VALUES
(1, 6, 1271.81),
(2, 7, 1131.9),
(3, 16, 140.25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacluster_distance_k3_1`
--

CREATE TABLE `datacluster_distance_k3_1` (
  `iddatacluster_distance_k3_1` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacluster_distance_k3_1`
--

INSERT INTO `datacluster_distance_k3_1` (`iddatacluster_distance_k3_1`, `id_malaria`, `distance`) VALUES
(1, 4, 814.134),
(2, 7, 1067.39),
(3, 8, 682.515),
(4, 9, 693.541),
(5, 10, 714.638),
(6, 11, 678.26),
(7, 13, 752.191),
(8, 20, 678.478);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacluster_distance_k3_2`
--

CREATE TABLE `datacluster_distance_k3_2` (
  `iddatacluster_distance_k3_2` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacluster_distance_k3_2`
--

INSERT INTO `datacluster_distance_k3_2` (`iddatacluster_distance_k3_2`, `id_malaria`, `distance`) VALUES
(1, 3, 79.4251),
(2, 5, 152.917),
(3, 12, 57.8144),
(4, 14, 91.7924),
(5, 15, 201.706),
(6, 17, 39.3172),
(7, 18, 54.2771),
(8, 19, 164.231),
(9, 21, 139.836),
(10, 22, 138.417),
(11, 23, 77.9691),
(12, 27, 233.172);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacluster_distance_k3_3`
--

CREATE TABLE `datacluster_distance_k3_3` (
  `iddatacluster_distance_k3_3` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacluster_distance_k3_3`
--

INSERT INTO `datacluster_distance_k3_3` (`iddatacluster_distance_k3_3`, `id_malaria`, `distance`) VALUES
(1, 6, 705.899),
(2, 16, 705.899);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datassw_k2`
--

CREATE TABLE `datassw_k2` (
  `iddatassw_k2` int(11) NOT NULL,
  `nilair2_1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datassw_k2`
--

INSERT INTO `datassw_k2` (`iddatassw_k2`, `nilair2_1`) VALUES
(1, 2418.8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datassw_k3`
--

CREATE TABLE `datassw_k3` (
  `iddatassw_k3` int(11) NOT NULL,
  `nilair1_1` float NOT NULL,
  `nilair1_2` float NOT NULL,
  `nilair1_3` float NOT NULL,
  `nilair2_1` float NOT NULL,
  `nilair2_2` float NOT NULL,
  `nilair2_3` float NOT NULL,
  `nilair3_1` float NOT NULL,
  `nilair3_2` float NOT NULL,
  `nilair3_3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datassw_k3`
--

INSERT INTO `datassw_k3` (`iddatassw_k3`, `nilair1_1`, `nilair1_2`, `nilair1_3`, `nilair2_1`, `nilair2_2`, `nilair2_3`, `nilair3_1`, `nilair3_2`, `nilair3_3`) VALUES
(1, 0, 714.687, 2533.34, 714.687, 0, 3248.01, 2533.34, 3248.01, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_centroid_k2_1`
--

CREATE TABLE `data_centroid_k2_1` (
  `idata_centroid_k2_1` int(11) NOT NULL,
  `centroid` int(11) NOT NULL,
  `Y` int(11) NOT NULL,
  `X` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_centroid_k2_1`
--

INSERT INTO `data_centroid_k2_1` (`idata_centroid_k2_1`, `centroid`, `Y`, `X`) VALUES
(1, 1, 357, 355);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_centroid_k2_2`
--

CREATE TABLE `data_centroid_k2_2` (
  `iddata_centroid_k2_2` int(11) NOT NULL,
  `centroid` int(11) NOT NULL,
  `Y` float NOT NULL,
  `X` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_centroid_k2_2`
--

INSERT INTO `data_centroid_k2_2` (`iddata_centroid_k2_2`, `centroid`, `Y`, `X`) VALUES
(1, 2, 2075, 2057.67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_centroid_k3_1`
--

CREATE TABLE `data_centroid_k3_1` (
  `iddata_centroid_k3_1` int(11) NOT NULL,
  `centroid` int(11) NOT NULL,
  `Y` float NOT NULL,
  `X` float NOT NULL,
  `Z` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_centroid_k3_1`
--

INSERT INTO `data_centroid_k3_1` (`iddata_centroid_k3_1`, `centroid`, `Y`, `X`, `Z`) VALUES
(1, 1, 676.286, 674.143, 7.57143);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_centroid_k3_2`
--

CREATE TABLE `data_centroid_k3_2` (
  `iddata_centroid_k3_2` int(11) NOT NULL,
  `centroid` int(11) NOT NULL,
  `Y` float NOT NULL,
  `X` float NOT NULL,
  `Z` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_centroid_k3_2`
--

INSERT INTO `data_centroid_k3_2` (`iddata_centroid_k3_2`, `centroid`, `Y`, `X`, `Z`) VALUES
(1, 2, 170.25, 169.5, 1.16667);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_centroid_k3_3`
--

CREATE TABLE `data_centroid_k3_3` (
  `iddata_centroid_k3_3` int(11) NOT NULL,
  `centroid` int(11) NOT NULL,
  `Y` float NOT NULL,
  `X` float NOT NULL,
  `Z` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_centroid_k3_3`
--

INSERT INTO `data_centroid_k3_3` (`iddata_centroid_k3_3`, `centroid`, `Y`, `X`, `Z`) VALUES
(1, 3, 2479, 2454, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kmeans_k2`
--

CREATE TABLE `data_kmeans_k2` (
  `iddata_kmeans` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `nama_puskesmas` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `konfirmasi_lab` int(11) NOT NULL,
  `total_positif` int(11) NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kmeans_k2`
--

INSERT INTO `data_kmeans_k2` (`iddata_kmeans`, `id_malaria`, `nama_puskesmas`, `jumlah_penduduk`, `konfirmasi_lab`, `total_positif`, `persentase`) VALUES
(1, 3, 'Puskesmas Warmare', 10252, 226, 226, 4.44791),
(2, 4, 'Puskesmas SP IV Prafi', 15781, 1007, 1001, 12.7749),
(3, 5, 'Puskesmas Wosi', 19710, 278, 278, 2.8209),
(4, 6, 'Puskesmas Sanggeng', 59067, 2990, 2941, 10.0699),
(5, 7, 'Puskesmas Amban', 12388, 1267, 1265, 20.536),
(6, 8, 'Puskesmas Pasir Putih', 16276, 601, 600, 7.39125),
(7, 9, 'Puskesmas Pulau Mansinam', 1022, 523, 523, 104.012),
(8, 10, 'Puskesmas Nuni', 3480, 493, 492, 28.592),
(9, 11, 'Puskesmas Maripi', 7564, 575, 575, 15.3755),
(10, 12, 'Puskesmas Tanah Rubuh', 3275, 129, 129, 7.93893),
(11, 13, 'Puskesmas Masni', 15470, 910, 909, 11.7647),
(12, 14, 'Puskesmas Mobja', 4961, 105, 105, 4.31365),
(13, 15, 'Puskesmas Sidey', 5269, 313, 312, 11.8618),
(14, 16, 'RSU Manokwari', 0, 1968, 1967, 0),
(15, 17, 'Rumkitban Manokwari', 0, 201, 194, 0),
(16, 18, 'RS AL dr. Azhar Zahir Monokwari', 3803, 132, 131, 6.96818),
(17, 19, 'RS Umum Pratama Warmare', 0, 286, 286, 0),
(18, 20, 'BP St. Maria Prafi Manokwari', 0, 625, 619, 0),
(19, 21, 'Puskesmas Sowi', 0, 71, 71, 0),
(20, 22, 'RS Bhayangkara POLDA Papua Barat', 0, 72, 72, 0),
(21, 23, 'BP St Monika', 0, 225, 225, 0),
(22, 27, 'Kantor KKP Manokwari', 0, 5, 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kmeans_k3`
--

CREATE TABLE `data_kmeans_k3` (
  `iddata_kmeans_k3` int(11) NOT NULL,
  `id_malaria` int(11) NOT NULL,
  `nama_puskesmas` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `konfirmasi_lab` float NOT NULL,
  `total_positif` float NOT NULL,
  `ibu_hamil` float NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kmeans_k3`
--

INSERT INTO `data_kmeans_k3` (`iddata_kmeans_k3`, `id_malaria`, `nama_puskesmas`, `jumlah_penduduk`, `konfirmasi_lab`, `total_positif`, `ibu_hamil`, `persentase`) VALUES
(1, 3, 'Puskesmas Warmare', 10252, 226, 226, 4, 4.44791),
(2, 4, 'Puskesmas SP IV Prafi', 15781, 1007, 1001, 8, 12.7749),
(3, 5, 'Puskesmas Wosi', 19710, 278, 278, 0, 2.8209),
(4, 6, 'Puskesmas Sanggeng', 59067, 2990, 2941, 17, 10.0699),
(5, 7, 'Puskesmas Amban', 12388, 1267, 1265, 12, 20.536),
(6, 8, 'Puskesmas Pasir Putih', 16276, 601, 600, 2, 7.39125),
(7, 9, 'Puskesmas Pulau Mansinam', 1022, 523, 523, 17, 104.012),
(8, 10, 'Puskesmas Nuni', 3480, 493, 492, 10, 28.592),
(9, 11, 'Puskesmas Maripi', 7564, 575, 575, 13, 15.3755),
(10, 12, 'Puskesmas Tanah Rubuh', 3275, 129, 129, 2, 7.93893),
(11, 13, 'Puskesmas Masni', 15470, 910, 909, 1, 11.7647),
(12, 14, 'Puskesmas Mobja', 4961, 105, 105, 4, 4.31365),
(13, 15, 'Puskesmas Sidey', 5269, 313, 312, 0, 11.8618),
(14, 16, 'RSU Manokwari', 0, 1968, 1967, 21, 0),
(15, 17, 'Rumkitban Manokwari', 0, 201, 194, 1, 0),
(16, 18, 'RS AL dr. Azhar Zahir Monokwari', 3803, 132, 131, 2, 6.96818),
(17, 19, 'RS Umum Pratama Warmare', 0, 286, 286, 0, 0),
(18, 20, 'BP St. Maria Prafi Manokwari', 0, 625, 619, 2, 0),
(19, 21, 'Puskesmas Sowi', 0, 71, 71, 0, 0),
(20, 22, 'RS Bhayangkara POLDA Papua Barat', 0, 72, 72, 1, 0),
(21, 23, 'BP St Monika', 0, 225, 225, 0, 0),
(22, 27, 'Kantor KKP Manokwari', 0, 5, 5, 0, 0);

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
-- Struktur dari tabel `hasil_centroid_k2`
--

CREATE TABLE `hasil_centroid_k2` (
  `idhasil_centroid_k2` int(11) NOT NULL,
  `c1a` varchar(50) NOT NULL,
  `c1b` varchar(50) NOT NULL,
  `c2a` varchar(50) NOT NULL,
  `c2b` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_centroid_k2`
--

INSERT INTO `hasil_centroid_k2` (`idhasil_centroid_k2`, `c1a`, `c1b`, `c2a`, `c2b`) VALUES
(1, '356.68421052632', '355.42105263158', '2075', '2057.6666666667'),
(2, '356.68421052632', '355.42105263158', '2075', '2057.6666666667');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_centroid_k3`
--

CREATE TABLE `hasil_centroid_k3` (
  `idhasil_centroid_k3` int(11) NOT NULL,
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
-- Dumping data untuk tabel `hasil_centroid_k3`
--

INSERT INTO `hasil_centroid_k3` (`idhasil_centroid_k3`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, '676.28571428571', '674.14285714286', '7.5714285714286', '170.25', '169.5', '1.1666666666667', '2075', '2057.6666666667', '16.666666666667'),
(2, '750.125', '748', '8.125', '170.25', '169.5', '1.1666666666667', '2479', '2454', '19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_dbi_k2`
--

CREATE TABLE `hasil_dbi_k2` (
  `idhasil_dbi_k2` int(11) NOT NULL,
  `dbi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_dbi_k2`
--

INSERT INTO `hasil_dbi_k2` (`idhasil_dbi_k2`, `dbi`) VALUES
(1, 0.488074);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_dbi_k3`
--

CREATE TABLE `hasil_dbi_k3` (
  `idhasil_dbi_k3` int(11) NOT NULL,
  `dbi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_dbi_k3`
--

INSERT INTO `hasil_dbi_k3` (`idhasil_dbi_k3`, `dbi`) VALUES
(1, 1.89858);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_ssw`
--

CREATE TABLE `hasil_ssw` (
  `idhasil_ssw` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `hasil1` float NOT NULL,
  `c2` int(11) NOT NULL,
  `hasil2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_ssw_k3`
--

CREATE TABLE `hasil_ssw_k3` (
  `idhasil_ssw_k3` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `hasil1` float NOT NULL,
  `c2` int(11) NOT NULL,
  `hasil2` float NOT NULL,
  `c3` int(11) NOT NULL,
  `hasil3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_ssw_k3`
--

INSERT INTO `hasil_ssw_k3` (`idhasil_ssw_k3`, `c1`, `hasil1`, `c2`, `hasil2`, `c3`, `hasil3`) VALUES
(1, 1, 760.144, 2, 119.24, 3, 705.899);

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
-- Struktur dari tabel `rasio_k3`
--

CREATE TABLE `rasio_k3` (
  `idrasio_k3` int(11) NOT NULL,
  `r1` float NOT NULL,
  `r2` float NOT NULL,
  `r3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `centroid_awal_k2_1`
--
ALTER TABLE `centroid_awal_k2_1`
  ADD PRIMARY KEY (`id_k1`);

--
-- Indexes for table `centroid_awal_k2_2`
--
ALTER TABLE `centroid_awal_k2_2`
  ADD PRIMARY KEY (`data_k2`);

--
-- Indexes for table `centroid_awal_k3_1`
--
ALTER TABLE `centroid_awal_k3_1`
  ADD PRIMARY KEY (`idcentroid_awal_k3_1`);

--
-- Indexes for table `centroid_awal_k3_2`
--
ALTER TABLE `centroid_awal_k3_2`
  ADD PRIMARY KEY (`idcentroid_awal_k3_2`);

--
-- Indexes for table `centroid_awal_k3_3`
--
ALTER TABLE `centroid_awal_k3_3`
  ADD PRIMARY KEY (`idcentroid_awal_k3_3`);

--
-- Indexes for table `centroid_temp_k2`
--
ALTER TABLE `centroid_temp_k2`
  ADD PRIMARY KEY (`idcentroid_temp_k2`);

--
-- Indexes for table `centroid_temp_k3`
--
ALTER TABLE `centroid_temp_k3`
  ADD PRIMARY KEY (`idcentroid_temp_k3`);

--
-- Indexes for table `datacluster_distance_k2_1`
--
ALTER TABLE `datacluster_distance_k2_1`
  ADD PRIMARY KEY (`iddatacluster_distance`);

--
-- Indexes for table `datacluster_distance_k2_2`
--
ALTER TABLE `datacluster_distance_k2_2`
  ADD PRIMARY KEY (`iddatacluster_distance_2`);

--
-- Indexes for table `datacluster_distance_k3_1`
--
ALTER TABLE `datacluster_distance_k3_1`
  ADD PRIMARY KEY (`iddatacluster_distance_k3_1`);

--
-- Indexes for table `datacluster_distance_k3_2`
--
ALTER TABLE `datacluster_distance_k3_2`
  ADD PRIMARY KEY (`iddatacluster_distance_k3_2`);

--
-- Indexes for table `datacluster_distance_k3_3`
--
ALTER TABLE `datacluster_distance_k3_3`
  ADD PRIMARY KEY (`iddatacluster_distance_k3_3`);

--
-- Indexes for table `datassw_k2`
--
ALTER TABLE `datassw_k2`
  ADD PRIMARY KEY (`iddatassw_k2`);

--
-- Indexes for table `datassw_k3`
--
ALTER TABLE `datassw_k3`
  ADD PRIMARY KEY (`iddatassw_k3`);

--
-- Indexes for table `data_centroid_k2_1`
--
ALTER TABLE `data_centroid_k2_1`
  ADD PRIMARY KEY (`idata_centroid_k2_1`);

--
-- Indexes for table `data_centroid_k2_2`
--
ALTER TABLE `data_centroid_k2_2`
  ADD PRIMARY KEY (`iddata_centroid_k2_2`);

--
-- Indexes for table `data_centroid_k3_1`
--
ALTER TABLE `data_centroid_k3_1`
  ADD PRIMARY KEY (`iddata_centroid_k3_1`);

--
-- Indexes for table `data_centroid_k3_2`
--
ALTER TABLE `data_centroid_k3_2`
  ADD PRIMARY KEY (`iddata_centroid_k3_2`);

--
-- Indexes for table `data_centroid_k3_3`
--
ALTER TABLE `data_centroid_k3_3`
  ADD PRIMARY KEY (`iddata_centroid_k3_3`);

--
-- Indexes for table `data_kmeans_k2`
--
ALTER TABLE `data_kmeans_k2`
  ADD PRIMARY KEY (`iddata_kmeans`);

--
-- Indexes for table `data_kmeans_k3`
--
ALTER TABLE `data_kmeans_k3`
  ADD PRIMARY KEY (`iddata_kmeans_k3`);

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
-- Indexes for table `hasil_centroid_k2`
--
ALTER TABLE `hasil_centroid_k2`
  ADD PRIMARY KEY (`idhasil_centroid_k2`);

--
-- Indexes for table `hasil_centroid_k3`
--
ALTER TABLE `hasil_centroid_k3`
  ADD PRIMARY KEY (`idhasil_centroid_k3`);

--
-- Indexes for table `hasil_dbi_k2`
--
ALTER TABLE `hasil_dbi_k2`
  ADD PRIMARY KEY (`idhasil_dbi_k2`);

--
-- Indexes for table `hasil_dbi_k3`
--
ALTER TABLE `hasil_dbi_k3`
  ADD PRIMARY KEY (`idhasil_dbi_k3`);

--
-- Indexes for table `hasil_ssw`
--
ALTER TABLE `hasil_ssw`
  ADD PRIMARY KEY (`idhasil_ssw`);

--
-- Indexes for table `hasil_ssw_k3`
--
ALTER TABLE `hasil_ssw_k3`
  ADD PRIMARY KEY (`idhasil_ssw_k3`);

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
-- Indexes for table `rasio_k3`
--
ALTER TABLE `rasio_k3`
  ADD PRIMARY KEY (`idrasio_k3`);

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
-- AUTO_INCREMENT for table `centroid_awal_k2_1`
--
ALTER TABLE `centroid_awal_k2_1`
  MODIFY `id_k1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_awal_k2_2`
--
ALTER TABLE `centroid_awal_k2_2`
  MODIFY `data_k2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_awal_k3_1`
--
ALTER TABLE `centroid_awal_k3_1`
  MODIFY `idcentroid_awal_k3_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_awal_k3_2`
--
ALTER TABLE `centroid_awal_k3_2`
  MODIFY `idcentroid_awal_k3_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_awal_k3_3`
--
ALTER TABLE `centroid_awal_k3_3`
  MODIFY `idcentroid_awal_k3_3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centroid_temp_k2`
--
ALTER TABLE `centroid_temp_k2`
  MODIFY `idcentroid_temp_k2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `centroid_temp_k3`
--
ALTER TABLE `centroid_temp_k3`
  MODIFY `idcentroid_temp_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `datacluster_distance_k2_1`
--
ALTER TABLE `datacluster_distance_k2_1`
  MODIFY `iddatacluster_distance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `datacluster_distance_k2_2`
--
ALTER TABLE `datacluster_distance_k2_2`
  MODIFY `iddatacluster_distance_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `datacluster_distance_k3_1`
--
ALTER TABLE `datacluster_distance_k3_1`
  MODIFY `iddatacluster_distance_k3_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `datacluster_distance_k3_2`
--
ALTER TABLE `datacluster_distance_k3_2`
  MODIFY `iddatacluster_distance_k3_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `datacluster_distance_k3_3`
--
ALTER TABLE `datacluster_distance_k3_3`
  MODIFY `iddatacluster_distance_k3_3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datassw_k2`
--
ALTER TABLE `datassw_k2`
  MODIFY `iddatassw_k2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datassw_k3`
--
ALTER TABLE `datassw_k3`
  MODIFY `iddatassw_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_centroid_k2_1`
--
ALTER TABLE `data_centroid_k2_1`
  MODIFY `idata_centroid_k2_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_centroid_k2_2`
--
ALTER TABLE `data_centroid_k2_2`
  MODIFY `iddata_centroid_k2_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_centroid_k3_1`
--
ALTER TABLE `data_centroid_k3_1`
  MODIFY `iddata_centroid_k3_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_centroid_k3_2`
--
ALTER TABLE `data_centroid_k3_2`
  MODIFY `iddata_centroid_k3_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_centroid_k3_3`
--
ALTER TABLE `data_centroid_k3_3`
  MODIFY `iddata_centroid_k3_3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_kmeans_k2`
--
ALTER TABLE `data_kmeans_k2`
  MODIFY `iddata_kmeans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `data_kmeans_k3`
--
ALTER TABLE `data_kmeans_k3`
  MODIFY `iddata_kmeans_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
-- AUTO_INCREMENT for table `hasil_centroid_k2`
--
ALTER TABLE `hasil_centroid_k2`
  MODIFY `idhasil_centroid_k2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hasil_centroid_k3`
--
ALTER TABLE `hasil_centroid_k3`
  MODIFY `idhasil_centroid_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hasil_dbi_k2`
--
ALTER TABLE `hasil_dbi_k2`
  MODIFY `idhasil_dbi_k2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil_dbi_k3`
--
ALTER TABLE `hasil_dbi_k3`
  MODIFY `idhasil_dbi_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil_ssw`
--
ALTER TABLE `hasil_ssw`
  MODIFY `idhasil_ssw` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil_ssw_k3`
--
ALTER TABLE `hasil_ssw_k3`
  MODIFY `idhasil_ssw_k3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `rasio_k3`
--
ALTER TABLE `rasio_k3`
  MODIFY `idrasio_k3` int(11) NOT NULL AUTO_INCREMENT;
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
