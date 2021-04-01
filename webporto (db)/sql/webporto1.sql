-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2021 pada 10.32
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
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `deskripsi`) VALUES
(1, 'Halo, Perkenalkan nama saya Angkasa Raya. Saya merupakan seorang siswa sekolah menengah kejuruan (SMK), Yang merupakan siswa dari sekolah SMK Taruna Bhakti Depok. Saya berumur 17 tahun ini, dan saya masuk jurusan Rekayasa Perangkat Lunak (RPL).');

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
(8, 'angkasa@gmail.com', 'drydryteu', '2021-03-26 13:36:19'),
(9, 'raya@gmail.com', 'Wah mantap banget!', '2021-03-30 11:05:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `judul`, `deskripsi`, `gambar`, `lastupdate`) VALUES
(23, 'Web Portofolio Individu', 'ini dibuat oleh angkasaraya', 'https://miro.medium.com/max/5188/1*F6XL5Ox6-VzBJsFl7DdFgw.png', '2021-04-01 01:22:38'),
(26, 'Uji Level 3', 'efafaef uaduya uyuieyu weuryksj kjasdkd alksjdadfi askjdfhajhfkjh', 'https://miro.medium.com/max/3840/1*O0AbyXnCoyqcug4Nuds8Hw.png', '2021-04-01 01:22:38'),
(27, 'Web Portofolio', 'asfasfasf', 'https://designmodo.com/wp-content/uploads/2017/10/01-cory-hughart-developer-portfolio.jpg', '2021-04-01 01:22:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `judul`, `gambar`, `deskripsi`, `lastupdate`) VALUES
(1, 'Biodata', 'https://img.icons8.com/ios-filled/70/000000/user-male-circle.png', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Impedit Rerum Eum Obcaecati.', '2021-04-01 03:21:44'),
(2, 'Tujuan', 'https://rumahkeadilan.co.id/wp-content/uploads/2019/09/Tujuan-BUMD.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quidem nam hic!', '2021-04-01 03:13:07'),
(3, 'Skills', 'https://www.commpro.biz/wp-content/uploads/2015/11/digital-skills2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit rerum eum obcaecati.', '2021-04-01 03:13:07');

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
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `emailadd`, `katasandi`, `namalngkp`, `gambar`, `quotes`, `status`) VALUES
(36, 'angkasa', 'username@gmail.com', '714b7771e5a001d74efe95808e7be19e', 'angkasaraya', 'https://i.ibb.co/Mc9tpJq/tb1.png', 'A well-known quote, contained in a blockquote element.', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
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
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
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
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
