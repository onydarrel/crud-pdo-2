-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2020 pada 19.49
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo-crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `alamat`) VALUES
(1, 'Garangan', 'Jl. Garangan'),
(2, 'Garanganwati', 'Jl. Garanganwati'),
(3, 'Merry', 'Gellett'),
(4, 'Dietrich', 'Drummond'),
(5, 'Tann', 'Yerill'),
(6, 'Jessalin', 'Trewhitt'),
(7, 'Celestyn', 'Heisham'),
(8, 'Bruce', 'Gauford'),
(9, 'Tabby', 'Pizer'),
(10, 'Heindrick', 'Darrach'),
(11, 'Salvidor', 'Booley'),
(12, 'Hansiain', 'Leve'),
(13, 'Jacinda', 'Badgers'),
(14, 'Anette', 'Holliar'),
(15, 'Bronnie', 'Kyffin'),
(16, 'Humberto', 'Letty'),
(17, 'Teddi', 'McEnteggart'),
(18, 'Druci', 'Parnaby'),
(19, 'Margeaux', 'Becom'),
(20, 'Glori', 'Hamblin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
