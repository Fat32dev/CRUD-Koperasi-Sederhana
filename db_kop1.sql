-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2021 pada 09.43
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kop1`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `almtsidayu`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `almtsidayu` (
`no_anggota` int(5)
,`nama` varchar(225)
,`jeniskelamin` varchar(225)
,`alamat` varchar(225)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `no_anggota` int(5) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `jeniskelamin` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`no_anggota`, `nama`, `jeniskelamin`, `alamat`) VALUES
(1, 'Ibad', 'Laki Laki', 'Sidayu'),
(2, 'Tya', 'Perempuan', 'Sidayu'),
(3, 'Coki', 'Laki Laki', 'Dukun'),
(4, 'Irul', 'Laki Laki', 'Sidayu'),
(5, 'Riris', 'Perempuan', 'Sidayu'),
(6, 'Sanul', 'Laki Laki', 'Panceng'),
(7, 'Wasik', 'Laki Laki', 'Panceng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `no_pinjaman` int(5) NOT NULL,
  `tanggal_pinjaman` int(11) DEFAULT NULL,
  `jumlah_pinjaman` int(20) DEFAULT NULL,
  `berapakali_ansuran` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`no_pinjaman`, `tanggal_pinjaman`, `jumlah_pinjaman`, `berapakali_ansuran`) VALUES
(1, 3, 2000000, 4),
(2, 6, 1500000, 3),
(3, 21, 700000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `no_transaksi` int(5) NOT NULL,
  `saldo` int(20) DEFAULT NULL,
  `keterangan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`no_transaksi`, `saldo`, `keterangan`) VALUES
(4, 1200000, 'Tabungan'),
(5, 2000000, 'Tabungan'),
(6, 500000, 'Tabungan');

-- --------------------------------------------------------

--
-- Struktur untuk view `almtsidayu`
--
DROP TABLE IF EXISTS `almtsidayu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `almtsidayu`  AS  select `anggota`.`no_anggota` AS `no_anggota`,`anggota`.`nama` AS `nama`,`anggota`.`jeniskelamin` AS `jeniskelamin`,`anggota`.`alamat` AS `alamat` from `anggota` where `anggota`.`alamat` = 'Sidayu' ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`no_pinjaman`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`no_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
