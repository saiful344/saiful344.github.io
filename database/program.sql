-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mei 2018 pada 15.04
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'saiful', '12345'),
(2, 'tyyguyyg', '$2y$10$yXhwsMjZym62Nfp3W7NiieFdxOUWUKPC.vsE/uJHYpT9EfZgOuwYq'),
(3, 'ipul', '$2y$10$5ZAQkdtCAlIU4iWQar9STOhv23phlznN6kiOsNJg7tPNjmGQp4b86'),
(4, 'qwerty', '$2y$10$oelxuyb3mIwqHK.PFvMhiukd3Ywj13SCaRhWtcyNq59Bkb1CCbrK.'),
(5, 'ssss', '$2y$10$2tPNhq2JEg74qN1tOUcs7.U7JQfgI1qE0dGkP3E6.3RdlXDy60NhW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(800) NOT NULL,
  `artikel` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `artikel`) VALUES
(3, 'sdasdasdsa', 'dgfgfhghjfsghj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `nik`, `alamat`, `ttl`) VALUES
(1, 'hahah', '352563', 'fdafad', 'adfaff'),
(2, 'hahah', '352563', 'fdafad', 'adfaff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `caption` varchar(250) NOT NULL,
  `komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kodepusat`
--

CREATE TABLE `kodepusat` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kodepusat`
--

INSERT INTO `kodepusat` (`id`, `kode`) VALUES
(1, '678'),
(2, '678'),
(3, '3344');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `pesan`) VALUES
(6, 'sadad', 'dsaad', 'asdsadadad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'saiful', '$2y$10$3Ytff2YudMFxhX7R1HY0we4uVcewHyammz1ku5OBdHpURYBcPjQR6'),
(2, 'ipul', '$2y$10$pN7ROe5x/u9J7Sr7wrqZcuY892RiU2lZscsxKp7ys2B7470E.xXKa'),
(3, 'jadi', '$2y$10$XMB.8kU32ceud34jWFxk9ODhxVsp5Sz8aBtHSGCAd9o32sB03U.Dy'),
(4, 'muhammad saiful', '$2y$10$8lSMigRMzKQ29trxW2I.puzD2231bm.eGJkfUPgcmkuaCeV0.SuK.'),
(6, 'ghjkjasd', '$2y$10$Zvm8GNeW857KJHhT1PXnJ.imsJCgSBtUGNWCLlcfxhd3oa71jakKe'),
(7, 'hahaha', '$2y$10$i0S.aFM6H3QO2iW2h/UyqufISxj8.4Bxl1Q3zdZvLCsXExdruo812'),
(9, 'saifulmuhammad414@gmail.com', '$2y$10$81q4DJ6No4idnHgjzLha9uZV8vZ.H/0HwccGXy3uUOABiSMl8pWgW'),
(10, 'aku', '$2y$10$qY/ZifR/q9y3rKQ0oVkSh.pwxwk8ohC00/n1WJOpyz9OLZIpAaHyO'),
(11, '', ''),
(12, 'hahahaha', '$2y$10$cmioDovMJmy1Zxp5mLDJOeZPC9LuLZKtv3ohJZrBgLLocG9U8Tt6q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `gender` varchar(55) NOT NULL,
  `setatus` varchar(55) NOT NULL,
  `pekerjaan` varchar(55) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pesan` varchar(600) NOT NULL,
  `kode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nama`, `nik`, `ttl`, `gender`, `setatus`, `pekerjaan`, `alamat`, `pesan`, `kode`) VALUES
(1, 'fghjghj', 'hgjghjg', '2018-05-10', 'Perempuan', 'Tidak Kawin', 'hgjgj', 'ghjgj', 'ghjgjhgj', 'jhgj'),
(2, 'sda', 'sdad', '2018-05-23', 'Perempuan', 'Tidak Kawin', 'dgsg', 'sdggdf', 'sfgsgxgfs', '1234'),
(3, 'uig', 'ghiighi', '2018-05-29', 'Laki-Laki', 'Tidak Kawin', 'ghjghjhg', 'jghjh', 'hjgjghjgj', '6788');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kodepusat`
--
ALTER TABLE `kodepusat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kodepusat`
--
ALTER TABLE `kodepusat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
