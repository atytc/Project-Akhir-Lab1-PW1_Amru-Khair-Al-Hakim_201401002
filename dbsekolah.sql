-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 09.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmda`
--

CREATE TABLE `dbmda` (
  `id` int(200) NOT NULL,
  `nis` varchar(333) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `kelas` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbmda`
--

INSERT INTO `dbmda` (`id`, `nis`, `nama`, `alamat`, `kelas`) VALUES
(3, '210501001', 'Ahmad', 'Sakar', 'I'),
(4, '210502013', 'Drax Aulia', 'Gg. Midgard', 'II'),
(5, '210503004', 'Siti Gamora', 'Vormir', 'III'),
(6, '210504001', 'Rizky Akbar Al-Khair', 'Jl. T.S.M Syech Dusun VI Kurnia Pantai Gemi', 'IV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmts`
--

CREATE TABLE `dbmts` (
  `id` int(200) NOT NULL,
  `nis` varchar(333) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `kelas` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbmts`
--

INSERT INTO `dbmts` (`id`, `nis`, `nama`, `alamat`, `kelas`) VALUES
(4, '210301001', 'Muhammad F. Maximoff', 'Sokovia', 'VII'),
(5, '210301002', 'Muhammad G. Maximoff', 'Sokovia', 'VII'),
(6, '210302006', 'Poniman', 'Sakar', 'VIII'),
(7, '210303001', 'Mike Ahmad', 'Queen', 'IX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbra`
--

CREATE TABLE `dbra` (
  `id` int(200) NOT NULL,
  `nis` varchar(333) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `kelas` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbra`
--

INSERT INTO `dbra` (`id`, `nis`, `nama`, `alamat`, `kelas`) VALUES
(7, '210101001', 'Abdan Syakura', 'Stabat Kab. Langkat', 'Abu Bakar Ash-Shiddiq'),
(9, '210101002', 'Althea F. Rumaisa', 'Wampu Kab. Langkat', 'Abu Bakar Ash-Shiddiq'),
(10, '210101003', 'W. Geora', 'Binjai Kab. Langkat', 'Abu Bakar Ash-Shiddiq'),
(11, '210201001', 'Amru Khair Al Hakim', 'Pantai Gemi Kec. Stabat', 'Umar bin Khattab'),
(12, '210201002', 'Yuni Ayunda', 'Gumir', 'Umar bin Khattab'),
(13, '210201003', 'Devi Citra Lestari', 'VORMIR', 'Umar bin Khattab'),
(14, '210201004', 'Rizky', 'Gulmira', 'Umar bin Khattab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbrqa`
--

CREATE TABLE `dbrqa` (
  `id` int(200) NOT NULL,
  `nis` varchar(333) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `kelas` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbrqa`
--

INSERT INTO `dbrqa` (`id`, `nis`, `nama`, `alamat`, `kelas`) VALUES
(3, '210601033', 'Zidan Ahmad', 'Galungan', 'Abu Bakar Ash Shiddiq'),
(4, '210602001', 'Anisa', 'Pantai Gemi', 'Umar bin Khattab'),
(5, '210603002', 'Loki', 'Time Variance Authority', 'Ali bin Abi Thallib'),
(6, '210604013', 'Mobius Ahmad', 'Time Variance Authority', 'Utsman bin Affan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbsiswa`
--

CREATE TABLE `dbsiswa` (
  `id` int(200) NOT NULL,
  `nis` varchar(333) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `kelas` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbsiswa`
--

INSERT INTO `dbsiswa` (`id`, `nis`, `nama`, `alamat`, `kelas`) VALUES
(16, '210201001', 'Anisya Listya', 'Gg. Midgard', 'I'),
(17, '210201002', 'Reno Wijaya', 'Sakar', 'I'),
(18, '210201003', 'Warsih', 'Titan', 'I'),
(19, '210202001', 'Abbas Lathifah', 'Asgard', 'II'),
(20, '210202002', 'Mila Laufeyson', 'Jl. Vanaheim', 'II'),
(21, '210202003', 'Tukimin', 'West View', 'II'),
(22, '210203001', 'Althea F. Rumaisa', 'Sokovia', 'III'),
(23, '210203002', 'Shuri', 'Wakanda', 'III'),
(24, '210204099', 'Ahmad Yinsen', 'Gulmira', 'IV'),
(25, '210205008', 'Morgan Salsabila', 'Nidavellir', 'V'),
(26, '210206006', 'Cassie Al Farizi', 'Gg. Midgard', 'VI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbtendik`
--

CREATE TABLE `dbtendik` (
  `id` int(11) NOT NULL,
  `username` varchar(333) NOT NULL,
  `email` varchar(333) NOT NULL,
  `password` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbtendik`
--

INSERT INTO `dbtendik` (`id`, `username`, `email`, `password`) VALUES
(1, 'Kamu', 'amrukeren@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbtpq`
--

CREATE TABLE `dbtpq` (
  `id` int(200) NOT NULL,
  `nis` varchar(333) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `kelas` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbtpq`
--

INSERT INTO `dbtpq` (`id`, `nis`, `nama`, `alamat`, `kelas`) VALUES
(3, '210401015', 'Putra Jaya', 'Selemak', 'I'),
(4, '210402015', 'Akbar Jaya', 'Selemak', 'II');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(333) NOT NULL,
  `email` varchar(333) NOT NULL,
  `password` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Amru', 'althea@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dbmda`
--
ALTER TABLE `dbmda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `dbmts`
--
ALTER TABLE `dbmts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `dbra`
--
ALTER TABLE `dbra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `dbrqa`
--
ALTER TABLE `dbrqa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `dbsiswa`
--
ALTER TABLE `dbsiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `dbtendik`
--
ALTER TABLE `dbtendik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dbtpq`
--
ALTER TABLE `dbtpq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dbmda`
--
ALTER TABLE `dbmda`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dbmts`
--
ALTER TABLE `dbmts`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dbra`
--
ALTER TABLE `dbra`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `dbrqa`
--
ALTER TABLE `dbrqa`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dbsiswa`
--
ALTER TABLE `dbsiswa`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `dbtendik`
--
ALTER TABLE `dbtendik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dbtpq`
--
ALTER TABLE `dbtpq`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
