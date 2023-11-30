-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 07.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(6) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES
(6, 'PG001', 'Ary Kurnia', 'Bulukumba', '2001-06-03', 'Laki-laki', 'Kota Makassar, Kecamatan Panakkukang, Paropo, Jl. Maranti 1A No 17 ', '085242242367', 'aryk880@gmail.com'),
(8, 'PG002', 'Co\'na', 'Bantaeng', '2023-11-13', 'Laki-laki', 'DUSUN BUHUN BATUA', '085242242367', 'cona@gmail.com'),
(9, 'PG003', 'Pegawai 3', 'Makassar', '2023-11-13', 'Laki-laki', 'Jl. Veteran', '085634632', 'pg3@gmail.com'),
(10, 'PG004', 'Pung Loho', 'Bulukumba', '1984-02-21', 'Laki-laki', 'Jl. Saweregading', '085242242000', 'loho@gmail.com'),
(11, 'PG005', 'Puang Nanna', 'Bulukumba', '1987-05-07', 'Perempuan', 'Bijawang', '085242444000', 'nanna@gmail.com'),
(12, 'PG006', 'Deng Acce', 'Bantaeng', '1988-08-09', 'Perempuan', 'Na\'na', '085242242000', 'acce@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
