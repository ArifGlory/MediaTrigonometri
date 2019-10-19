-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 03:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mediabelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `url_materi` varchar(100) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `judul`, `url_materi`, `kategori`) VALUES
(8, 'Pengertian Trigonometri', 'Materi/pengertianTrigonometri', 'materi'),
(9, 'Pengukuran sudut dengan satuan Derajat dan radian', 'Materi/derajatDanRadian', 'materi'),
(10, 'Jam Analog', 'Materi/jamAnalog', 'materi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text,
  `jawaban_a` varchar(50) DEFAULT NULL,
  `jawaban_b` varchar(50) DEFAULT NULL,
  `jawaban_c` varchar(50) DEFAULT NULL,
  `jawaban_d` varchar(50) DEFAULT NULL,
  `jawaban_benar` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_benar`) VALUES
(2, 'Trigonometri adalah ilmu yang mempelajari tentang ?', 'Sisi dan sudut suatu segitiga ', 'Lingkaran', 'Bangun ruang persegi', 'Prisma', 'A'),
(3, 'Perbandingan antara sisi tegak dan sisi miring disebut ? ', 'Kosinus', 'Sinus', 'Tangen', 'Sekan', 'B'),
(4, 'Perbandingan antara sisi datar  dan sisi tegak disebut dengan nama ? ', 'Sinus', 'Cosinus', 'Tangen', 'CoTangen', 'C'),
(5, 'Diketahui sin a = 3/5, nilai dari tan a adalah…', '3/5', '5/4', '3/4', '4/3', 'C'),
(6, 'Dibawah ini yang bukan termasuk sudut istimewa dalam trigonometri adalah (dalam derajat) ?', '30', '45', '60', '100', 'D'),
(7, 'Nyatakan sudut 0,75 Radian dalam satuan derajat', '42,98', '42,52', '42,89', '42,50', 'D'),
(8, 'Nyatakan sudut 270° dalam phi radian !', '2/3 phi radian', '1/3 phi radian', '3/2 phi radian', '1/2 phi radian', 'C'),
(9, 'Nyatakan sudut 330° dalam phi radian !', '11/6 phi radian', '6/11 phi radian', '6/7 phi radian', '7/6 phi radian', 'A'),
(10, 'Nyatakan sudut radian dalam satuan derajat !', '20,10', '21,05', '10,20', '19,07', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
