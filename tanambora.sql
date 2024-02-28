-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2024 pada 14.05
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanambora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_mendaki` date NOT NULL,
  `jalur_pendakian` varchar(30) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `kebangsaan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `tlp_keluarga` varchar(20) NOT NULL,
  `ktp` text NOT NULL,
  `kts` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `nik`, `nama`, `jk`, `alamat`, `tanggal_mendaki`, `jalur_pendakian`, `pekerjaan`, `kebangsaan`, `email`, `no_tlpn`, `tlp_keluarga`, `ktp`, `kts`, `created_at`) VALUES
(1, '25009230953123', 'Faisal', 'Laki-laki', 'Kelurahan Kandai 2 Ginte, Kec. Woja, Kab. Dompu', '2020-10-12', 'Jalur Pendakian Pancasila', 'Balai Taman Nasional Tambora', 'Indonesia', '', '081293456324', '123456789', '', '', '2023-12-18 16:31:51'),
(3, '125410043', 'Putri Rahayu ', 'Perempuan', 'Kampung Sumbawa Bima', '2022-04-23', 'Sanctuary Rusa', 'swasta ', 'Indonesian ', 'putrirahayu@gmail.com', '081237125468', '085237654891', '', '', '2023-12-18 16:31:51'),
(4, '250500260693', 'Firdaus', 'Laki-laki', 'Bali Bunga', '2022-04-22', 'Pendakian Pancasila', 'mahasiswa ', 'WNI ', 'firdausank@yahoo.co.id', '085695324157', '08569754618', '', '', '2023-12-18 16:31:51'),
(5, '250509635629008', 'akun salah', 'Laki-laki', 'Jakarta ', '2022-07-29', 'Pendakian Pancasila', 'swasta ', 'Indonesian ', 'faisalsevgi@gmail.com', '085236124578', '085612346758', '', '', '2023-12-18 16:31:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
