-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 12:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompotensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompotensi_keahlian`) VALUES
(1, '12 RPL 2', 'Rekayasa Perangkat Lunak'),
(2, '12 RPL 1', 'Rekayasa Perangkat Lunak'),
(3, '12 RPL 3', 'Rekayasa Perangkat Lunak'),
(4, '12 MM', 'Multi Media'),
(5, '12 TKJ', 'Teknik Komputer Jaringan'),
(6, '12 toi', 'teknik otomasi industri'),
(7, '12 titl', 'teknik instalasi tenaga listrik'),
(8, '12 av', 'audio video');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `nis` varchar(15) NOT NULL,
  `tgl_bayar` varchar(11) DEFAULT NULL,
  `bulan_dibayar` varchar(10) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id`, `nis`, `tgl_bayar`, `bulan_dibayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`, `status`) VALUES
(13, 1, '1718117175', '2020-04-01', 'juli', '2020', 1, 300000, 'sudah dibayar'),
(14, 2, '1718117175', '2020-04-14', 'agustus', '2020', 1, 300000, 'sudah dibayar'),
(15, 2, '1718117175', '00', 'september', '2020', 1, 300000, 'belum dibayar'),
(16, 2, '1718117175', '00', 'oktober', '2020', 1, 300000, 'belum dibayar'),
(17, 2, '1718117175', '00', 'november', '2020', 1, 300000, 'belum dibayar'),
(18, 2, '1718117175', '00', 'desember', '2020', 1, 300000, 'belum dibayar'),
(19, 2, '1718117175', '00', 'januari', '2021', 1, 300000, 'belum dibayar'),
(20, 2, '1718117175', '00', 'februari', '2021', 1, 300000, 'belum dibayar'),
(21, 2, '1718117175', '00', 'maret', '2021', 1, 300000, 'belum dibayar'),
(22, 2, '1718117175', '00', 'April', '2021', 1, 300000, 'belum dibayar'),
(23, 2, '1718117175', '00', 'mei', '2021', 1, 300000, 'belum dibayar'),
(24, 2, '1718117175', '00', 'juni', '2021', 1, 300000, 'belum dibayar'),
(25, 1, '1718117270', '2020-04-01', 'juli', '2020', 1, 300000, 'sudah dibayar'),
(26, 1, '1718117270', '2020-04-01', 'agustus', '2020', 1, 300000, 'sudah dibayar'),
(27, 2, '1718117270', '00', 'september', '2020', 1, 300000, 'belum dibayar'),
(28, 2, '1718117270', '00', 'oktober', '2020', 1, 300000, 'belum dibayar'),
(29, 2, '1718117270', '00', 'november', '2020', 1, 300000, 'belum dibayar'),
(30, 2, '1718117270', '00', 'desember', '2020', 1, 300000, 'belum dibayar'),
(31, 2, '1718117270', '00', 'januari', '2021', 1, 300000, 'belum dibayar'),
(32, 2, '1718117270', '00', 'februari', '2021', 1, 300000, 'belum dibayar'),
(33, 2, '1718117270', '00', 'maret', '2021', 1, 300000, 'belum dibayar'),
(34, 2, '1718117270', '00', 'April', '2021', 1, 300000, 'belum dibayar'),
(35, 2, '1718117270', '00', 'mei', '2021', 1, 300000, 'belum dibayar'),
(36, 2, '1718117270', '00', 'juni', '2021', 1, 300000, 'belum dibayar'),
(37, 1, '1718117170', '2020-04-14', 'juli', '2020', 1, 300000, 'sudah dibayar'),
(38, 2, '1718117170', '00', 'agustus', '2020', 1, 300000, 'belum dibayar'),
(39, 2, '1718117170', '00', 'september', '2020', 1, 300000, 'belum dibayar'),
(40, 2, '1718117170', '00', 'oktober', '2020', 1, 300000, 'belum dibayar'),
(41, 2, '1718117170', '00', 'november', '2020', 1, 300000, 'belum dibayar'),
(42, 2, '1718117170', '00', 'desember', '2020', 1, 300000, 'belum dibayar'),
(43, 2, '1718117170', '00', 'januari', '2021', 1, 300000, 'belum dibayar'),
(44, 2, '1718117170', '00', 'februari', '2021', 1, 300000, 'belum dibayar'),
(45, 2, '1718117170', '00', 'maret', '2021', 1, 300000, 'belum dibayar'),
(46, 2, '1718117170', '00', 'April', '2021', 1, 300000, 'belum dibayar'),
(47, 2, '1718117170', '00', 'mei', '2021', 1, 300000, 'belum dibayar'),
(48, 2, '1718117170', '00', 'juni', '2021', 1, 300000, 'belum dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('1718117170', '0011402192', 'muhammad rizky muttaqien', 1, 'jl.kopo gg.lapang no.40 Bandung', '081572689372', 1),
('1718117175', '0011402193', 'rudy sarifudin', 1, 'jl.ciwastra no.20 Bandung', '087839703971', 1),
('1718117270', '0011402292', 'Didan Ramadhan Irmansyah', 5, 'jl.kopo permai no.21 Bandung', '08971403367', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, '2020', 3600000),
(3, '2021', 3650000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@mail.id', NULL, '$2y$10$zcWIMO9pWX3QrF18OKUZdefW77l.zZRMLQh5GP2s/NreWDsNP.uV2', NULL, '2020-04-01 06:32:48', '2020-04-01 06:32:48'),
(2, 'petugas', 'petugas', 'petugas@mail.id', NULL, '$2y$10$7ckEXGRrRzjBYNd9fXNQMO.fmk1KVfKqPoZ4O1FJ2FRLFWmSftz1m', NULL, '2020-04-01 06:33:26', '2020-04-01 06:33:26'),
(3, 'muhammad rizky muttaqien', 'siswa', 'rizky@gmail.com', NULL, '$2y$10$i0eXHVdqIMOkoVgURrAQBeDoMGH5MrNn5o80xnCqJHjR/6u.erEMC', NULL, '2020-04-01 06:34:30', '2020-04-01 06:34:30'),
(4, 'petugas1', 'petugas', 'petugas1@mail.id', NULL, '$2y$10$Pu7QmvhGcCZMw/DAxbBOa.0UVhoKI6K1Rf.wt6XXJE42hyR//lJZm', NULL, '2020-04-01 06:35:06', '2020-04-01 06:35:06'),
(5, 'rudy sarifudin', 'siswa', 'rudy1@gmail.com', NULL, '$2y$10$Dm7qXX4RJIeAuoEePt6JIOUaP6zLQRI2KzkFUhF.MIFcwPUopbJsO', NULL, '2020-04-13 06:15:49', '2020-04-13 06:15:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nis` (`nisn`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `pembayaran_ibfk_5` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
