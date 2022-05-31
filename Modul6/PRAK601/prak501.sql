-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2022 pada 03.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak501`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Akuntansi Pengantar 1', 'Supardi', 'Gava Media', 2009),
(2, 'Cedera Kepala', 'M. Z. Arifin', 'Sagung Seto', 2013),
(3, 'Dasar Dasar Uroginekologi', 'Pribakti B', 'Sagung Seto', 2011),
(4, 'Kesehjateraan Sosial', 'Isbandi Rukminto Adi', 'Rajagrafindo Persada', 2015),
(5, 'Kolaborasi PHP 5 dan Mysql untuk pengembangan website', 'Eko Priyo Utomo', '	Andi Offset', 2014);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`, `password`) VALUES
(1010, 'Muhammad Ruwandi', '123456', 'Simpang Adhyaksa, Banjarmasin Utara', '2022-05-10 14:11:05', '2022-05-17', '$2a$12$rGfuZzN4l27baHezj18d1OkxlUzwev.fGZ4U5bbuq9SNNFn0bbZjK'),
(1011, 'Muhammad Febri Ilhamsyah', '360732', 'Jl Bumi Mas Raya Komplek Bumi Ayu, Banjarmasin Selatan', '2022-05-11 11:37:49', '2022-05-18', '$2a$12$rGfuZzN4l27baHezj18d1OkxlUzwev.fGZ4U5bbuq9SNNFn0bbZjK'),
(1012, 'Nadya Putri', '360733', 'Jl Sebrang Masjid (Kampung Sasirangan), Banjarmasin Barat', '2022-05-12 15:47:01', '2022-05-19', '$2a$12$rGfuZzN4l27baHezj18d1OkxlUzwev.fGZ4U5bbuq9SNNFn0bbZjK'),
(1013, 'Angelly Aguillera', '360734', 'Km 5 Banjarmasin Kota, Banjarmasin Timur', '2022-05-13 16:43:00', '2022-05-20', '$2a$12$rGfuZzN4l27baHezj18d1OkxlUzwev.fGZ4U5bbuq9SNNFn0bbZjK'),
(1014, 'Syarwani Abdan', '360735', 'Jln Flamboyan 2, Banjarmasi Utara', '2022-06-01 10:05:19', '2022-06-08', '$2a$12$rGfuZzN4l27baHezj18d1OkxlUzwev.fGZ4U5bbuq9SNNFn0bbZjK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1010, '2022-05-10', '2022-05-17'),
(1011, '2022-05-11', '2022-05-18'),
(1012, '2022-05-12', '2022-05-19'),
(1013, '2022-05-13', '2022-05-20'),
(1014, '2022-06-01', '2022-06-08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
