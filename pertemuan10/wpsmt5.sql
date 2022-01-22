-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 08.15
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Herni Irma Wati', 'Tangerang', 'Perempuan', 'Islam', 'Madrasah Aliyah', 'png1.png'),
(2, 'Kim Taehyung', 'Tangerang', 'Laki-laki', 'Kristen', 'SHS', 'png2.png'),
(3, 'Jeon Jungkook', 'Busan', 'Laki-laki', 'Kristen', 'SOPA', 'png2.png'),
(5, 'Wanda Fitria', 'Tangerang', 'Perempuan', 'Islam', 'SMA BBS', 'png1.png'),
(6, 'Ningrum Febia', 'Tangerang', 'Perempuan', 'Islam', 'SMA 01', 'png1.png'),
(7, 'Mikasa', 'Jakarta', 'Perempuan', 'Kristen', 'SMA 08', 'png1.png'),
(8, 'Eirlys Freezia', 'Tangerang', 'Perempuan', 'Protestan', 'SMK 07', 'png1.png'),
(9, 'Nain', 'Jakarta', 'Laki-laki', 'Kristen', 'SMA JKT', 'png2.png'),
(10, 'Faza', 'Tangerang', 'Perempuan', 'Islam', 'SMK 07', 'png1.png'),
(12, 'Kinan', 'Jakarta', 'Perempuan', 'Hindu', 'SMA JKT', 'png1.png'),
(13, 'Rama', 'Jakarta', 'Laki-laki', 'Islam', 'SMA JKT', 'png2.png'),
(14, 'Rachel', 'Tangerang', 'Perempuan', 'Kristen', 'SMK 07', 'png1.png'),
(16, 'Theresa', '&lt;h1&gt;Jakarta&lt;/h1&gt;', 'Perempuan', 'Protestan', 'SMA JKT', 'png1.png'),
(17, 'thv vante', 'Tangerang', 'Laki-laki', 'Kristen', 'SMA 31 Tangerang', 'png2.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
