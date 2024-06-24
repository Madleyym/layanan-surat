-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 09:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanansurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `role_id` int(2) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `email`, `jekel`, `role_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Laki-laki', 1, '$2y$10$w2DuKVlBywrNVScPoQ.gf.eaCBJjSt/KR0cL3Iok.HUCDjAkaIl2.', '2022-03-17 13:47:13', '0000-00-00 00:00:00'),
(2, 'Kepala Desa', 'kades@gmail.com', 'Laki-laki', 2, '$2y$10$UuU00rEEf0bvVEpHq40saeBNwnxlCRchdYUOyHSdRmM2RS26I6qH2', '2022-03-17 13:47:51', '2024-06-12 15:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(40) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `no_kk` int(16) NOT NULL,
  `nama_bayi` varchar(30) NOT NULL,
  `jekel_b` varchar(10) NOT NULL,
  `tempat_lahir_b` varchar(20) NOT NULL,
  `tanggal_lahir_b` date NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `agama_b` varchar(10) NOT NULL,
  `kewarganegaraan_b` varchar(10) NOT NULL,
  `alamat_b` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text,
  `notifikasi` int(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_alm` varchar(50) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `nik_a` varchar(30) NOT NULL,
  `jekel_a` varchar(15) NOT NULL,
  `tempat_lahir_a` varchar(20) NOT NULL,
  `tanggal_lahir_a` varchar(20) NOT NULL,
  `kewarganegaraan_a` varchar(5) NOT NULL,
  `status_perkawinan_a` varchar(10) NOT NULL,
  `pekerjaan_a` varchar(225) NOT NULL,
  `alamat_a` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal_meninggal` varchar(20) NOT NULL,
  `jam_meninggal` varchar(10) NOT NULL,
  `tempat_meninggal` varchar(225) NOT NULL,
  `sebab_meninggal` varchar(225) NOT NULL,
  `tempat_pemakaman` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan_pengantar`
--

CREATE TABLE `surat_keterangan_pengantar` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_keterangan_pengantar`
--

INSERT INTO `surat_keterangan_pengantar` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `keperluan`, `file_kk`, `file_ktp`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(3, 3, 'SURAT KETERANGAN PENGANTAR', '001/SKP/06/2024', '12/06/2024', '12/07/2024', 'SEKOLAH', 'skp-id-3-tgl20240612-3932-488.jpg', 'skp-id-3-tgl20240612-3932-698.png', 'Ditolak', NULL, 0, '2024-06-12 10:39:32', '0000-00-00 00:00:00'),
(4, 3, 'SURAT KETERANGAN PENGANTAR', '001/SKP/06/2024', '12/06/2024', '12/07/2024', 'pepe', 'skp-id-3-tgl20240612-4411-794.png', 'skp-id-3-tgl20240612-4411-896.jpg', 'Diterima', NULL, 1, '2024-06-12 10:44:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tidak_mampu`
--

CREATE TABLE `surat_tidak_mampu` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `tanggungan` varchar(10) NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_rumah` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notifikasi` int(2) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `tgl_mulai` varchar(20) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` varchar(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='f';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `id_warga`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(3, 3, 'tryandaasu@gmail.com', '$2y$10$9zwc6a003L65qLDKRHbxAePta3xJN/iSZPASmSGoRbtA7Wvs7.ffi', 3, '2024-06-12 09:37:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `golongan_darah` varchar(4) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `jekel`, `agama`, `golongan_darah`, `pendidikan`, `status_pernikahan`, `pekerjaan`, `tempat_lahir`, `tgl_lahir`, `rt`, `rw`, `alamat`, `created_at`, `updated_at`) VALUES
(3, '3279043105020001', 'Tryanda Anggita Suwito', 'Laki-laki', 'Islam', 'B', 'Tamat SMA/Sederajat', 'Belum Menikah', 'Mahasiswa', 'Ciamis', '2002-05-31', 2, 1, 'Dusun Citangkolo RT02 RW01 Desa Kujangsari, KEC. Langensari Kota Banjar, Jawabarat', '2024-06-12 14:36:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wr` (`id_warga`);

--
-- Indexes for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `warga_rel` (`id_warga`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD CONSTRAINT `surat_domisili_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD CONSTRAINT `surat_kelahiran_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD CONSTRAINT `surat_kematian_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD CONSTRAINT `surat_keterangan_pengantar_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD CONSTRAINT `wr` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD CONSTRAINT `surat_usaha_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `warga_rel` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
