-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasya_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `prodi` int(11) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `ipk` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendapatan_ortu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `nama`, `nim`, `jk`, `prodi`, `tempat_lahir`, `tgl_lahir`, `ipk`, `alamat`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendapatan_ortu`) VALUES
(2, 'Tasya Amanda Chitra', '2255301183', 'Perempuan', 1, 'Pekanbaru', '2004-02-19', 4, 'Jl.Pramuka Ujung', 'Sawir', 'Montir', 'Elmita', 'Ibu Rumah Tangga', 'Rp. 5.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `email`, `prodi`, `asal_sekolah`, `no_hp`, `alamat`) VALUES
(4, 'Tasya Amanda Chitra', '2255301183', 'Perempuan', 'tasya22ti@mahasiswa.pcr.ac.id', 1, 'SMKN 7 Pekanbaru', '0812345678', 'Umban Sari'),
(5, 'Ardiyanto', '1657301049', 'Laki-laki', 'ardiyanto@alumni.pcr.ac.id', 3, 'MAN 1 ROKAN HILIR', '12312131', 'Umban Sari'),
(6, 'Naufal Azra M.', '2255301137', 'Laki-laki', 'naufal22ti@mahasiswa.pcr.ac.id', 1, 'SMKS Muhammadiyah 2 Pekanbaru', '081298765432', 'Jl. Gotong Royong');

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `genre_buku` varchar(100) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `nomor_anggota` int(20) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `nama_buku`, `genre_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `nomor_anggota`, `nama_peminjam`) VALUES
(2, 'Sapiens', 'Fiksi', '2023-10-14', '2023-10-27', 1183, 'Vina'),
(3, 'Bumi Manusia', 'Fiksi', '2023-10-12', '2023-10-19', 1137, 'Nono'),
(4, 'Halo', 'Fiksi', '2023-10-13', '2023-10-20', 1125, 'Asya');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `akreditasi` varchar(15) NOT NULL,
  `nama_kaprodi` varchar(225) NOT NULL,
  `tahun_berdiri` int(10) NOT NULL,
  `output_lulusan` varchar(225) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`, `ruangan`, `jurusan`, `akreditasi`, `nama_kaprodi`, `tahun_berdiri`, `output_lulusan`, `gambar`) VALUES
(1, 'Teknik Informatika', '328', 'JTI', 'A', 'Kartina Diah Kesuma Wardhani, S.T., M.T.', 2008, 'Multimedia', 'default.jpg'),
(2, 'Sistem Informasi', '310', 'JTI', 'A', 'Indah Lestari, S.S.T., M.T.', 2008, 'Bussiness', 'default.jpg'),
(3, 'Akuntansi dan Perpajakan', '314', 'AKB', 'A', 'Hamdani Arifulsyah, S.E., M.Ak.', 2001, 'Akuntan', 'full-screen-image-3.jpg'),
(6, 'Teknik Mesin', '214', 'JTM', 'A', 'Agus', 2015, 'Oil and Gas Engineer', 'full-screen-image-33.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$Rmv7jVjMjDBRk8549cJOPeo1r5Sc5OSFLAb2LjC5ino1ArzICYgeG', 'default.jpg', 'Admin', 1697942758),
(4, 'Ardiyanto', 'ardiyanto@alumni.pcr.ac.id', '$2y$10$cBexUDfldX9tAANLRB46/elPHp/R2q4/pNOIiXo/KWuxqsLzA0kiq', 'default.jpg', 'User', 1697942792);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `beasiswa_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
