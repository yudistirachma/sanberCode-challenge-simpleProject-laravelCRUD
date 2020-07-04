-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2020 pada 05.56
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larahub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) NOT NULL,
  `pertanyaan_id` bigint(20) NOT NULL,
  `isi` varchar(191) NOT NULL,
  `tanggalBuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `taggalEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `pertanyaan_id`, `isi`, `tanggalBuat`, `taggalEdit`) VALUES
(1, 3, 'nob', '2020-07-03 06:48:30', '2020-07-03 06:48:30'),
(2, 1, 'sunda', '2020-07-03 06:48:30', '2020-07-03 06:48:30'),
(3, 2, 'ngaur', '2020-07-03 06:48:30', '2020-07-03 06:48:30'),
(4, 1, 'sas', '2020-07-03 12:28:25', '2020-07-03 12:28:25'),
(5, 1, 'haaay', '2020-07-03 13:53:01', '2020-07-03 13:53:01'),
(6, 1, 'kuuuy', '2020-07-03 13:57:32', '2020-07-03 13:57:32'),
(7, 1, 'kuuuy', '2020-07-03 14:00:06', '2020-07-03 14:00:06'),
(8, 1, 'sasasa', '2020-07-03 14:01:15', '2020-07-03 14:01:15'),
(9, 2, 'haaay', '2020-07-03 14:07:40', '2020-07-03 14:07:40'),
(10, 2, 'haaay', '2020-07-03 14:09:03', '2020-07-03 14:09:03'),
(11, 2, 'haaay', '2020-07-03 14:10:20', '2020-07-03 14:10:20'),
(12, 2, 'haaay', '2020-07-03 14:11:06', '2020-07-03 14:11:06'),
(13, 2, 'haaay', '2020-07-03 14:12:01', '2020-07-03 14:12:01'),
(14, 1, 'weeey', '2020-07-03 14:12:31', '2020-07-03 14:12:31'),
(15, 1, 'astagaaaa', '2020-07-03 14:13:59', '2020-07-03 14:13:59'),
(16, 1, 'astagaaaa', '2020-07-03 14:14:12', '2020-07-03 14:14:12'),
(17, 3, 'bismillah', '2020-07-03 14:31:57', '2020-07-03 14:31:57'),
(18, 3, 'hirrohman', '2020-07-03 14:32:36', '2020-07-03 14:32:36'),
(19, 3, 'berhasil juga akhirnya', '2020-07-03 14:34:38', '2020-07-03 14:34:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `isi` varchar(191) NOT NULL,
  `tanggalBuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggalEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `judul`, `isi`, `tanggalBuat`, `tanggalEdit`) VALUES
(1, 'aing', 'codeigniter 4', '2020-07-03 04:30:50', '2020-07-03 20:23:00'),
(2, 'asda', 'dsd', '2020-07-03 04:30:50', '2020-07-03 04:30:50'),
(3, 'laravel', 'hay', '2020-07-03 06:17:16', '2020-07-03 06:17:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komen` (`pertanyaan_id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `komen` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
