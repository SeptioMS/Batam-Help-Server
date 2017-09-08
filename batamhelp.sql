-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2017 at 01:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `batamhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE IF NOT EXISTS `masyarakat` (
  `id` varchar(20) NOT NULL,
  `namamasyarakat` varchar(50) NOT NULL,
  `jenisidentitas` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` text NOT NULL,
  `email` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Tidak Aktif',
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `namamasyarakat`, `jenisidentitas`, `alamat`, `notelp`, `email`, `status`, `username`, `password`) VALUES
('13615023', 'Hariyanto', '0', 'Asrama B Politeknik Negeri Batam', '085391541482', 'hari.yanto21@yahoo.co.id', 'Aktif', 'hari21', 'yanto'),
('31521586572461', 'Afdal Suganda', 'KTP', 'Bengkong Sadai, Blok A7 No 1', '081927041203', 'afdal.suganda@hotmail.com', 'Tidak Aktif', 'afdal.suganda', 'afdalsuganda15031995'),
('3311301001', 'Prihadi', '0', 'Batu Aji', '081952656565', 'prihadi@jjj.com', 'Tidak Aktif', 'ponco', 'ponco'),
('3311301005', 'Afdal Suganda', '0', 'Bengkong Sadai', '081927041203', 'afdal.suganda@hotmail.com', 'Aktif', 'afdal', 'afdal'),
('3311301008', 'Afdal Suganda', 'Kartu Mahasiswa', 'Bengkong Sadai', '081927041203', 'afdal.suganda@polibatam.ac.id', 'Aktif', 'sugandaafdal', 'afdal12345'),
('3311301012', 'Yulyanto Sirait', '0', 'Nusa Batam', '081290002000', 'julianto.sirait@gmail.com', 'Aktif', 'antok', 'antok'),
('3311301027', 'Septio Misdia Saputra', '0', 'Nongsa', '08157245787', 'septio@email.com', 'Aktif', 'septio', 'septio'),
('3311301029', 'Budi Kurniawan', '0', 'Batu Aji, Kav. Lama', '085765858689', 'budikurniawan.if5a@gmail.com', 'Tidak Aktif', 'budi', 'budi'),
('3311301030', 'Jantri Mukti Simalango', '0', 'Batu Aji', '081299990000', 'jantri.mukti@gmail.com', 'Aktif', 'jantri', 'jan3@44509'),
('555', 'gttt', '0', 'ggg', '555', 'yyyy@nn.com', 'Tidak Aktif', 'nnnn', 'nnnn'),
('5555', 'p9nco', '0', 'hhh', '0855', 'ggg@bb.com', 'Tidak Aktif', 'hhh', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `pelaporan`
--

CREATE TABLE IF NOT EXISTS `pelaporan` (
  `idpelaporan` int(5) NOT NULL AUTO_INCREMENT,
  `judulpelaporan` varchar(300) NOT NULL,
  `namapelapor` varchar(50) NOT NULL,
  `idpelapor` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `tgl_tanggapan` date DEFAULT NULL,
  `tanggapan` varchar(200) NOT NULL DEFAULT '-',
  `status_aduan` enum('Belum ditangani','Sudah ditangani','','') NOT NULL,
  PRIMARY KEY (`idpelaporan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `pelaporan`
--

INSERT INTO `pelaporan` (`idpelaporan`, `judulpelaporan`, `namapelapor`, `idpelapor`, `deskripsi`, `jenis`, `tanggal`, `latitude`, `longitude`, `alamat`, `kecamatan`, `instansi`, `tgl_tanggapan`, `tanggapan`, `status_aduan`) VALUES
(24, 'Pencurian Helm Di Percetakan Galang', 'septio', '3311301027', 'Tolong pak maling sudah tertangkap sekarang sedang diamankan oleh pihak security, dan mahasiswa sepertinya geram dengan kondisi ini, dan ingin menghajar pelaku', 'Keamanan', '2016 - 01 - 27 03:16', '1.106085571811648', '104.08070832623679', 'Jalan Universitas Batam', 'Batam Kota', 'Polisi', NULL, '-', 'Belum ditangani'),
(28, 'Kebakaran di politeknik negeri batam', 'antok', '3311301012', 'kebakaran', 'Kebakaran', '2016 - 01 - 27 08:00', '1.1178020902994423', '104.049095273721', 'nagoya hil', 'lubuk baja', 'DAMKAR', NULL, '-', 'Belum ditangani'),
(29, 'Kebakaran di pos polisi kepri mall', 'afdal', '3311301005', 'tolong', 'Kebakaran', '2016 - 01 - 27 12:51', '1.1025981103101474', '104.03910378341156', 'nusa batam', 'batu aji', 'DAMKAR', NULL, '-', 'Belum ditangani'),
(30, 'Pelecehan Di Nusa Batam', 'afdal', '3311301005', 'tolong pak pol kesini ya', 'Pelanggaran Hukum', '2016 - 01 - 27 13:26', '1.0401363775830312', '103.9695581649896', 'Nusa Batam', 'Nusa Batam', 'Polisi', NULL, '-', 'Belum ditangani'),
(31, 'Kebakaran di Nusa Batam', 'afdal', '3311301005', 'Pak Damkar Cepat Kesini Yak', 'Kebakaran', '2016 - 01 - 27 13:29', '1.040123738926082', '103.96977166732458', 'Nusa Batam', 'Nusa Batam', 'DAMKAR', NULL, '-', 'Belum ditangani'),
(32, 'Ada Banjir Di Nusa Batam', 'afdal', '3311301005', 'Tolong Pak Sar', 'Bencana Alam', '2016 - 01 - 27 13:31', '1.0399940988494052', '103.96973650389852', 'Nusa Batam', 'Nusa Batam', 'SAR', NULL, '-', 'Belum ditangani'),
(33, 'Ada maling di Nusa Batam', 'septio', '3311301027', 'cepat pak pol', 'Keamanan', '2016 - 01 - 26 13:32', '1.040095964739415', '103.96977286745151', 'Nusa Batam', 'Batu Aji', 'Polisi', '2016-02-10', 'Pelaporan Sudah Diterima, Akan Segera Kami Tindak ', 'Sudah ditangani'),
(35, 'Banjir Di perumahan PKJ', 'afdal', '3311301005', 'tolong pak', 'Bencana Alam', '2016 - 01 - 27 11:16', '1.1516205697119868', '104.03566158876275', 'bengkong sadai', 'bengkong', 'SAR', NULL, '-', 'Belum ditangani'),
(36, 'Ada Pencurian Helm Di PKJ', 'afdal', '3311301005', 'pak pol cepat kesini', 'Pelanggaran Hukum', '2016 - 01 - 27 11:40', '1.14993281582674', '104.03489291656264', 'PKJ Bengkong Sadai', 'Bengkong', 'Polisi', NULL, '-', 'Belum ditangani'),
(37, 'Kebakaran Di PKJ Tahap 1', 'antok', '3311301012', 'cepat pak', 'Kebakaran', '2016 - 01 - 27 13:22', '1.1514416900047229', '104.03575941209688', 'PKJ Bengkong Sadai', 'Bengkong', 'DAMKAR', NULL, '-', 'Belum ditangani'),
(38, 'Kebakaran Di Bengkong Sadai', 'afdal', '3311301005', 'Tolong Pak Damkar', 'Kebakaran', '2016 - 01 - 27 12:11', '1.1514897720158768', '104.0355879444644', 'Bengkong', 'Bengkong', 'DAMKAR', '2017-05-14', 'Clear', 'Sudah ditangani'),
(39, 'Kebakaran Di Lab', 'afdal', '3311301005', 'Pak damkar segera ke kampus politeknik negeri batam', 'Kebakaran', '2016 - 01 - 27 15:13', '1.1186359137111783', '104.0485511612188', 'Parkway street', 'batam kota', 'DAMKAR', '2016-01-27', 'terima kasih atas pelaporannya', 'Sudah ditangani'),
(40, 'Banjir di Tiban', 'afdal', '3311301005', 'Tiban', 'Bencana Alam', '2016 - 02 - 01 18:14', '1.107127234823691', '103.97574083435735', 'Taman Sari', 'Sekupang', 'SAR', '2016-02-10', 'Laporan Anda Sudah Kami Tangani', 'Sudah ditangani'),
(41, 'Kebakaran', 'afdal', '3311301005', 'Kebakaran Genset Di Kantor Dinas Bersama', 'Kebakaran', '2016 - 06 - 06 10:37', '1.1510687074455725', '104.0359786980913', 'Batam Center', 'Batam Kota', 'DAMKAR', '2017-05-14', 'aaaaa', 'Sudah ditangani');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `Status` enum('Aktif','Tidak Aktif') NOT NULL,
  `jenis` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `alamat`, `email`, `password`, `no_telp`, `Status`, `jenis`) VALUES
('Admin', 'Admin', 'JL.XXXXXXXXXX', 'XXXXXXXXXXx.com', 'septio1995', 'XXXXXXX', 'Aktif', 'Admin'),
('bpbatam', 'BP Batam', 'JL.XXXXXXXXXX', 'XXXXXXXXXXx.com', 'bpbatam2015', 'XXXXXXXXXX', 'Aktif', 'Instansi'),
('damkar', 'Damkar', 'jl.dsadaas', 'dasd@das', 'damkar', '11231', 'Aktif', 'Instansi'),
('polisi', 'agus', 'asdas', 'dasd@fs.cc', 'polisi', '12412412', 'Aktif', 'Instansi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
