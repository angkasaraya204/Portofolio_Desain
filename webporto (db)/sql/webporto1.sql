-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2021 pada 14.53
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webporto1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `nmalngkp` varchar(250) DEFAULT NULL,
  `jenisklmn` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tempatlhr` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tlpn` varchar(20) DEFAULT NULL,
  `pkrjaanibu` varchar(50) DEFAULT NULL,
  `pkrjaanbapa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `gambar`, `nmalngkp`, `jenisklmn`, `kota`, `tempatlhr`, `agama`, `alamat`, `tlpn`, `pkrjaanibu`, `pkrjaanbapa`) VALUES
(1, 'https://img.icons8.com/ios-filled/70/000000/user-male-circle.png', 'Angkasa Raya', 'Laki-Laki', 'Depok', '2004-04-30', 'Islam', 'Jl. Swasembada No.34', '09834873835', 'IRT', 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `emailadd` varchar(100) DEFAULT NULL,
  `komen` text DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `emailadd`, `komen`, `waktu`) VALUES
(8, 'angkasa@gmail.com', 'drydryteu', '2021-03-26 13:36:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `gambar`, `deskripsi`) VALUES
(1, 'https://koinworks.com/wp-content/uploads/2017/11/keterampilan-sederhana-skill-meraih-kesuksesan.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta libero alias nisi, dolor nesciunt sequi aut delectus atque dolorem facilis molestias corporis incidunt.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuanpro`
--

CREATE TABLE `tujuanpro` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tujuanpro`
--

INSERT INTO `tujuanpro` (`id`, `gambar`, `deskripsi`) VALUES
(1, 'https://rumahkeadilan.co.id/wp-content/uploads/2019/09/Tujuan-BUMD.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta libero alias nisi, dolor nesciunt sequi aut delectus atque dolorem facilis molestias corporis incidunt.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tujuanpro`
--
ALTER TABLE `tujuanpro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tujuanpro`
--
ALTER TABLE `tujuanpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
