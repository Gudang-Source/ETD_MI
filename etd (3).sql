-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 11:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_minat`
--

CREATE TABLE `bidang_minat` (
  `id_bidang_minat` int(10) NOT NULL,
  `nama_bidang_minat` varchar(20) NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_minat`
--

INSERT INTO `bidang_minat` (`id_bidang_minat`, `nama_bidang_minat`, `id_prodi`) VALUES
(1, 'Databases', 2),
(2, 'Jaringan', 2),
(3, 'jaringan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bimbing`
--

CREATE TABLE `bimbing` (
  `id_bimbing` int(255) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pembimbing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbing`
--

INSERT INTO `bimbing` (`id_bimbing`, `npm`, `nip`, `pembimbing`) VALUES
(2, '1308001010011', '1234567', 1),
(3, '1308001010011', '1234567', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`) VALUES
('1234567', 'rasuddin');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_bidang_minat` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `alamat`, `email`, `nama`, `id_prodi`, `no_hp`, `id_bidang_minat`) VALUES
('1308001010011', 'Jalan. T. Hamzah Bendahara No 31, Kuta Alam, Banda Aceh', 'hariririski@gmail.com', 'HARIRIRISKI', 2, '082237653720', 1),
('1308001010012', 'Jalan. T. Hamzah Bendahara No 31, Kuta Alam, Banda Aceh', 'hariririski@gmailu.com', 'HARIRIRISKI', 2, '0822376537209', 1),
('1308001010013', 'Jalan. T. Hamzah Bendahara No 31, Kuta Alam, Banda Aceh', 'hariririski@gmailu.com3', 'HARIRIRISKI', 1, '08223765372093', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `logo`) VALUES
(1, 'Informatika', ''),
(2, 'Manajemen Informatika', '');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id_tugas_akhir` int(255) NOT NULL,
  `judul` text NOT NULL,
  `Abstrak` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verifikasi` int(2) NOT NULL,
  `publikasi` int(2) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id_tugas_akhir`, `judul`, `Abstrak`, `tgl_upload`, `verifikasi`, `publikasi`, `npm`, `pdf`) VALUES
(1, 'MANAJEMEN PENGGEMUKAN SAPI POTONG DENGAN PEMBERIAN PAKAN TEKNOLOGI FERMENTASI HI-FER+ PADA UNIT PENGGEMUKAN SAPI POTONG SMK PP NEGERI SAREE KABUPATEN ACEH BESAR', 'aaaaaaaaaaaaaaaa', '2017-09-18 08:26:17', 1, 0, '1308001010011', 'Jakarta  20170906_Pengumuman_Bekraf Jakarta.pdF'),
(2, 'MANAJEMEN PENGGEMUKAN SAPI POTONG DENGAN PEMBERIAN PAKAN TEKNOLOGI FERMENTASI HI-FER+ PADA UNIT PENGGEMUKAN SAPI POTONG SMK PP NEGERI SAREE KABUPATEN ACEH BESAR', 'aaaaaaaaaaaaaaaa', '2017-09-18 03:13:13', 0, 0, '1308001010012', 'aaaaaaaaaaaaaaaaaa'),
(3, 'PENGARUH DUE PROFESSIONAL CARE, PENGALAMAN AUDIT, PENDIDIKAN DAN PELATIHAN BERKELANJUTAN TERHADAP KUALITAS AUDIT INTERNAL DENGAN KOMITMEN ORGANISASI SEBAGAI PEMODERASI (STUDI PADA APARAT PENGAWASAN INTERNAL PEMERINTAH INSPEKTORAT PEMERINTAH KOTA LHOKSEUMAWE)  ', 'PENGARUH DUE PROFESSIONAL CARE, PENGALAMAN AUDIT, PENDIDIKAN DAN PELATIHAN BERKELANJUTAN TERHADAP KUALITAS AUDIT INTERNAL DENGAN KOMITMEN ORGANISASI SEBAGAI PEMODERASI (STUDI PADA APARAT PENGAWASAN INTERNAL PEMERINTAH INSPEKTORAT PEMERINTAH KOTA LHOKSEUMAWE)  PENGARUH DUE PROFESSIONAL CARE, PENGALAMAN AUDIT, PENDIDIKAN DAN PELATIHAN BERKELANJUTAN TERHADAP KUALITAS AUDIT INTERNAL DENGAN KOMITMEN ORGANISASI SEBAGAI PEMODERASI (STUDI PADA APARAT PENGAWASAN INTERNAL PEMERINTAH INSPEKTORAT PEMERINTAH KOTA LHOKSEUMAWE)  PENGARUH DUE PROFESSIONAL CARE, PENGALAMAN AUDIT, PENDIDIKAN DAN PELATIHAN BERKELANJUTAN TERHADAP KUALITAS AUDIT INTERNAL DENGAN KOMITMEN ORGANISASI SEBAGAI PEMODERASI (STUDI PADA APARAT PENGAWASAN INTERNAL PEMERINTAH INSPEKTORAT PEMERINTAH KOTA LHOKSEUMAWE)  PENGARUH DUE PROFESSIONAL CARE, PENGALAMAN AUDIT, PENDIDIKAN DAN PELATIHAN BERKELANJUTAN TERHADAP KUALITAS AUDIT INTERNAL DENGAN KOMITMEN ORGANISASI SEBAGAI PEMODERASI (STUDI PADA APARAT PENGAWASAN INTERNAL PEMERINTAH INSPEKTORAT PEMERINTAH KOTA LHOKSEUMAWE)  ', '2017-09-18 08:26:22', 1, 0, '1308001010013', 'Jakarta  20170906_Pengumuman_Bekraf Jakarta.pdF');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` int(4) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_lengkap`, `level`, `password`) VALUES
('1308001010011', 'HARIRIRISKI', 0, '156e9a32ecc3102d5ce35d6298d362c9'),
('admin', 'admin', 3, '21232f297a57a5a743894a0e4a801fc3'),
('hariririski', 'hariririski', 3, '156e9a32ecc3102d5ce35d6298d362c9'),
('inf', 'inf', 1, '21232f297a57a5a743894a0e4a801fc3'),
('mhs', 'mahasiswa', 0, '21232f297a57a5a743894a0e4a801fc3'),
('mi', 'mi', 2, '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_minat`
--
ALTER TABLE `bidang_minat`
  ADD PRIMARY KEY (`id_bidang_minat`);

--
-- Indexes for table `bimbing`
--
ALTER TABLE `bimbing`
  ADD PRIMARY KEY (`id_bimbing`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `nama_prodi` (`nama_prodi`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_tugas_akhir`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_minat`
--
ALTER TABLE `bidang_minat`
  MODIFY `id_bidang_minat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bimbing`
--
ALTER TABLE `bimbing`
  MODIFY `id_bimbing` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_tugas_akhir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
