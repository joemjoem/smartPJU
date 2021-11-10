-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2021 pada 04.47
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartpju`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataakun`
--

CREATE TABLE `dataakun` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataakun`
--

INSERT INTO `dataakun` (`id`, `name`, `Email`, `password`) VALUES
(8, 'admin', 'admin@gmail.com', '$2y$10$0lJ8u5EUIL7D1HR45tjlR.wtoUPnJMZft0JTH/7vci80SddewMP.y'),
(9, 'ridhoduro', 'ridho@gmail.com', '$2y$10$FxOaekOkt3ubeALBMcXtcu3Roq4dHR2kstAt2kZQImQwyShKd2XFy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pju1`
--

CREATE TABLE `pju1` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `lokasi` varchar(200) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tegangan` int(11) DEFAULT NULL,
  `arus` int(11) DEFAULT NULL,
  `power` int(11) DEFAULT NULL,
  `energy` int(11) DEFAULT NULL,
  `frekuensi` int(11) DEFAULT NULL,
  `powerFactor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pju1`
--

INSERT INTO `pju1` (`id`, `nama`, `lokasi`, `kota`, `tegangan`, `arus`, `power`, `energy`, `frekuensi`, `powerFactor`) VALUES
(3, 'pju1', 'jl. rojomino', 'surabaya', 220, 150, 200, 120, 100, 129),
(4, 'pju2', 'jl.tebu ireng', 'jombang', 220, 220, 110, 110, 110, 200),
(5, 'pju3', 'jl. arif rahmd hakim', 'surabaya', 220, 100, 220, 110, 120, 901);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataakun`
--
ALTER TABLE `dataakun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pju1`
--
ALTER TABLE `pju1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataakun`
--
ALTER TABLE `dataakun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pju1`
--
ALTER TABLE `pju1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
