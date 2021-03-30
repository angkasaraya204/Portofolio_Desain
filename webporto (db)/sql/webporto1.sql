-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2021 pada 08.56
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
(1, 'https://img.icons8.com/ios-filled/70/000000/user-male-circle.png', 'Angkasa Raya', 'Laki-Laki', 'Depok', '2003-09-11', 'Islam', 'Jl. Swasembada No.34', '09834873835', 'IRT', 'Karyawan');

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
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `emailadd` varchar(60) DEFAULT NULL,
  `katasandi` char(60) DEFAULT NULL,
  `namalngkp` varchar(60) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `quotes` varchar(250) DEFAULT NULL,
  `lastupdate` date NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `emailadd`, `katasandi`, `namalngkp`, `gambar`, `quotes`, `lastupdate`, `status`) VALUES
(1, 'angkasa', 'username@gmail.com', '714b7771e5a001d74efe95808e7be19e', 'angkasaraya', 'https://i.ibb.co/Mc9tpJq/tb1.png', 'isiapaanbae', '2021-03-30', 'Active');

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
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
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
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
