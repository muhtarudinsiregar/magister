-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2015 at 02:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siamb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `id` int(1) NOT NULL,
  `agama` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Konghucu'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi`
--

CREATE TABLE IF NOT EXISTS `akreditasi` (
  `id` varchar(1) NOT NULL,
  `akreditasi` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id`, `akreditasi`) VALUES
('A', 'A'),
('B', 'B'),
('C', 'C'),
('X', 'Tidak terakreditasi');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id` int(2) NOT NULL,
  `beasiswa` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `beasiswa`) VALUES
(1, 'Alumni'),
(2, 'Pascasarjana'),
(3, 'Sponsor lain');

-- --------------------------------------------------------

--
-- Table structure for table `hubungan`
--

CREATE TABLE IF NOT EXISTS `hubungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hubungan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hubungan`
--

INSERT INTO `hubungan` (`id`, `hubungan`) VALUES
(1, 'Orang Tua'),
(2, 'Suami/Istri'),
(3, 'Saudara'),
(4, 'Atasan/Rekan Kerja'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi`
--

CREATE TABLE IF NOT EXISTS `konsentrasi` (
  `id` varchar(4) NOT NULL,
  `id_prodi` int(3) NOT NULL,
  `konsentrasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsentrasi`
--

INSERT INTO `konsentrasi` (`id`, `id_prodi`, `konsentrasi`) VALUES
('EK3', 916, 'Ergonomi dan K3'),
('FD', 917, 'Forensika Digital'),
('IM', 917, 'Informatika Medis'),
('MI', 916, 'Manajemen Industri'),
('SIE', 917, 'Sistem Informasi Enterprise'),
('TI', 916, 'Teknik Industri');

-- --------------------------------------------------------

--
-- Table structure for table `kontakdarurat`
--

CREATE TABLE IF NOT EXISTS `kontakdarurat` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hubungan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kontakdarurat`
--

INSERT INTO `kontakdarurat` (`id`, `id_pendaftar`, `nama`, `hubungan`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 4, 'gab', 'Atasan/rekan kerja', 'sleman', 'sleman', 'sleman', 'Indonesia', '08122954698', 'redcar.studious@gmail.com', '2015-09-14 23:57:39', '2015-09-14 23:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `kontakdaruratok`
--

CREATE TABLE IF NOT EXISTS `kontakdaruratok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hubungan` int(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kontakdaruratok`
--

INSERT INTO `kontakdaruratok` (`id`, `id_pendaftar`, `nama`, `hubungan`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `email`) VALUES
(1, 4, 'gab', 0, 'sleman', 'sleman', 'sleman', 'Indonesia', '08122954698', 'redcar.studious@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `noFaximile` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahunMulai` int(4) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `id_pendaftar`, `posisi`, `institusi`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `noFaximile`, `email`, `tahunMulai`, `created_at`, `updated_at`) VALUES
(1, 4, 'mantan programer', 'kaskus', 'sleman', 'sleman', 'sumsel', 'Indonesia', '081', '081', 'raiden@gmail.com', 100, '2015-09-14 23:56:50', '2015-09-14 23:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaanok`
--

CREATE TABLE IF NOT EXISTS `pekerjaanok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `noFaximile` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahunMulai` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pekerjaanok`
--

INSERT INTO `pekerjaanok` (`id`, `id_pendaftar`, `posisi`, `institusi`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `noFaximile`, `email`, `tahunMulai`) VALUES
(1, 4, 'mantan programer', 'kaskus', 'sleman', 'sleman', 'sumsel', 'Indonesia', '081', '081', 'raiden@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `id_agama` int(1) NOT NULL,
  `noHP` varchar(25) NOT NULL,
  `alamatYK` varchar(200) NOT NULL,
  `kotakabYK` varchar(100) NOT NULL,
  `noTelpYK` varchar(25) NOT NULL,
  `tinggalYK` tinyint(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `danaBeasiswa` tinyint(1) NOT NULL,
  `id_beasiswa` int(2) NOT NULL,
  `statusBeasiswa` varchar(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `email`, `password`, `nama`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `id_agama`, `noHP`, `alamatYK`, `kotakabYK`, `noTelpYK`, `tinggalYK`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `danaBeasiswa`, `id_beasiswa`, `statusBeasiswa`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'ardin@gmail.com', '1234', 'ardin', 'sleman', '2015-09-15', 'P', 1, '08122954698', 'sleman km 13', 'sleman', '08122954598', 1, 'sleman km 13', 'sleman', 'sumsel', 'Indonesia', '08122954698', 1, 1, '1', '2015-09-14 19:49:51', '2015-09-14 19:38:21', ''),
(2, 'ra@gmail.com', '1234', 'ardin', 'sleman', '2015-09-15', 'P', 1, '08122954698', 'sleman km 13', 'sleman', '08122954598', 0, 'sleman km 13', 'sleman', 'sumsel', 'Indonesia', '08122954698', 0, 0, '', '2015-09-14 23:04:15', '2015-09-14 23:04:15', ''),
(3, 'rai@gmail.com', '1234', 'ardin', 'sleman', '1976-09-02', 'P', 7, '08122954698', 'sleman km 13', 'sleman', '08122954598', 0, 'sleman km 13', 'sleman', 'sumsel', 'Indonesia', '08122954698', 0, 0, '', '2015-09-14 23:10:49', '2015-09-14 23:06:44', ''),
(4, 'avicii', '1234', 'avicii', 'aceh', '2015-09-16', 'P', 1, '08122954698', 'sleman km 13', 'sleman', '08122954598', 1, 'sleman km 13', 'sleman', 'sumsel', 'Indonesia', '08122954698', 1, 3, '1', '2015-09-14 23:57:22', '2015-09-14 23:54:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no` int(7) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `gelombang` int(1) NOT NULL,
  `id_pendaftar` varchar(100) NOT NULL,
  `id_pendaftarOK` varchar(100) NOT NULL,
  `id_prodi` int(3) NOT NULL,
  `id_konsentrasi` varchar(4) NOT NULL,
  `tanggalTes` date NOT NULL,
  `sesiTes` int(1) NOT NULL,
  `tanggalTesOK` date NOT NULL,
  `sesiTesOK` int(1) NOT NULL,
  `konfirm` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no`, `tahun`, `semester`, `gelombang`, `id_pendaftar`, `id_pendaftarOK`, `id_prodi`, `id_konsentrasi`, `tanggalTes`, `sesiTes`, `tanggalTesOK`, `sesiTesOK`, `konfirm`, `updated_at`, `created_at`) VALUES
(1, 2015, 0, 1, '1', '1', 917, 'IM', '2015-09-16', 1, '0000-00-00', 0, 1, '2015-09-14 19:52:34', '2015-09-14 19:38:21'),
(2, 2015, 1, 1, '3', '1', 917, 'SIE', '2015-09-30', 2, '0000-00-00', 0, 0, '2015-09-14 23:22:53', '2015-09-14 23:06:44'),
(3, 2015, 1, 2, '4', '1', 917, 'SIE', '2015-09-24', 2, '0000-00-00', 0, 0, '2015-09-14 23:57:46', '2015-09-14 23:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarok`
--

CREATE TABLE IF NOT EXISTS `pendaftarok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `id_agama` int(1) NOT NULL,
  `noHP` varchar(25) NOT NULL,
  `alamatYK` varchar(200) NOT NULL,
  `kotakabYK` varchar(100) NOT NULL,
  `noTelpYK` varchar(25) NOT NULL,
  `tinggalYK` tinyint(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `danaBeasiswa` tinyint(1) NOT NULL,
  `id_beasiswa` int(2) NOT NULL,
  `statusBeasiswa` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pendaftarok`
--

INSERT INTO `pendaftarok` (`id`, `email`, `password`, `nama`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `id_agama`, `noHP`, `alamatYK`, `kotakabYK`, `noTelpYK`, `tinggalYK`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `danaBeasiswa`, `id_beasiswa`, `statusBeasiswa`) VALUES
(1, 'avicii', '1234', 'avicii', 'aceh', '2015-09-16', 'P', 1, '08122954698', 'sleman km 13', 'sleman', '08122954598', 1, 'sleman km 13', 'sleman', 'sumsel', 'Indonesia', '08122954698', 1, 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `jenjang` varchar(2) NOT NULL,
  `programStudi` varchar(100) NOT NULL,
  `akreditasi` varchar(1) NOT NULL,
  `PT` varchar(100) NOT NULL,
  `tahunMasuk` int(4) NOT NULL,
  `tahunLulus` int(4) NOT NULL,
  `noIjazah` varchar(25) NOT NULL,
  `IPK` float NOT NULL,
  `skala` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_pendaftar`, `jenjang`, `programStudi`, `akreditasi`, `PT`, `tahunMasuk`, `tahunLulus`, `noIjazah`, `IPK`, `skala`, `updated_at`, `created_at`) VALUES
(1, 1, 'S1', 't.informatika', 'A', 'UII', 2011, 2015, '12345', 4, 4, '2015-09-14 19:48:04', '2015-09-14 19:48:04'),
(2, 3, 'D4', 'Ekonomi Islam', 'A', 'UII', 2014, 2015, '123', 4, 4, '2015-09-14 23:08:01', '2015-09-14 23:08:01'),
(3, 4, 'S1', 'T.Industri', 'A', 'UGM', 2011, 2015, '01234', 4, 4, '2015-09-14 23:55:51', '2015-09-14 23:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikanok`
--

CREATE TABLE IF NOT EXISTS `pendidikanok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `jenjang` varchar(2) NOT NULL,
  `programStudi` varchar(100) NOT NULL,
  `akreditasi` varchar(1) NOT NULL,
  `PT` varchar(100) NOT NULL,
  `tahunMasuk` int(4) NOT NULL,
  `tahunLulus` int(4) NOT NULL,
  `noIjazah` varchar(25) NOT NULL,
  `IPK` float NOT NULL,
  `skala` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pendidikanok`
--

INSERT INTO `pendidikanok` (`id`, `id_pendaftar`, `jenjang`, `programStudi`, `akreditasi`, `PT`, `tahunMasuk`, `tahunLulus`, `noIjazah`, `IPK`, `skala`) VALUES
(1, 4, 'S1', 'T.Industri', 'A', 'UGM', 2011, 2015, '01234', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `profesi`
--

CREATE TABLE IF NOT EXISTS `profesi` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `asosiasi` varchar(200) NOT NULL,
  `noAnggota` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profesi`
--

INSERT INTO `profesi` (`id`, `id_pendaftar`, `asosiasi`, `noAnggota`) VALUES
(1, 1, 'kaskuser programmer', '1234'),
(2, 1, 'kaskus geek', '1234'),
(3, 3, 'UII EKIS', '1234'),
(4, 4, 'programer uii', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `profesiok`
--

CREATE TABLE IF NOT EXISTS `profesiok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `asosiasi` varchar(200) NOT NULL,
  `noAnggota` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profesiok`
--

INSERT INTO `profesiok` (`id`, `id_pendaftar`, `asosiasi`, `noAnggota`) VALUES
(1, 4, 'programer uii', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `programstudi`
--

CREATE TABLE IF NOT EXISTS `programstudi` (
  `id` int(3) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programstudi`
--

INSERT INTO `programstudi` (`id`, `prodi`) VALUES
(916, 'Magister Teknik Industri'),
(917, 'Magister Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatpekerjaan`
--

CREATE TABLE IF NOT EXISTS `riwayatpekerjaan` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `masaKerja` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `riwayatpekerjaan`
--

INSERT INTO `riwayatpekerjaan` (`id`, `id_pendaftar`, `posisi`, `institusi`, `masaKerja`) VALUES
(1, 4, 'gm', 'tokopelet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `riwayatpekerjaanok`
--

CREATE TABLE IF NOT EXISTS `riwayatpekerjaanok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `masaKerja` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sesites`
--

CREATE TABLE IF NOT EXISTS `sesites` (
  `id` int(1) NOT NULL,
  `sesi` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesites`
--

INSERT INTO `sesites` (`id`, `sesi`) VALUES
(1, 'Pagi: 09.00 - 11.00'),
(2, 'Siang: 13.00 - 15.00');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `sponsor` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `noFaksimili` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `id_pendaftar`, `sponsor`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `noFaksimili`, `email`, `updated_at`, `created_at`) VALUES
(1, 4, 'der', 'sleman', 'sleman', 'sumsel', 'Indonesia', '081', '081', 'raiden@gmail.com', '2015-09-14 23:57:22', '2015-09-14 23:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorok`
--

CREATE TABLE IF NOT EXISTS `sponsorok` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_pendaftar` int(8) NOT NULL,
  `sponsor` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `noFaksimili` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sponsorok`
--

INSERT INTO `sponsorok` (`id`, `id_pendaftar`, `sponsor`, `alamat`, `kotakab`, `propinsi`, `negara`, `noTelepon`, `noFaksimili`, `email`) VALUES
(1, 4, 'der', 'sleman', 'sleman', 'sumsel', 'Indonesia', '081', '081', 'raiden@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tahungelombang`
--

CREATE TABLE IF NOT EXISTS `tahungelombang` (
  `tahun` varchar(9) NOT NULL,
  `semester` int(1) NOT NULL,
  `gelombang` int(1) NOT NULL,
  `biaya` int(6) NOT NULL,
  `tanggalTutup` date NOT NULL,
  PRIMARY KEY (`tahun`,`semester`,`gelombang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahungelombang`
--

INSERT INTO `tahungelombang` (`tahun`, `semester`, `gelombang`, `biaya`, `tanggalTutup`) VALUES
('2015/2016', 1, 1, 15000000, '2015-09-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
