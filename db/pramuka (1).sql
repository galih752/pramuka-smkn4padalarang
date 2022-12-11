-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pramuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(10) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kehadiran` set('Hadir','Alfa','Izin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `tanggal_absen`, `nama`, `kehadiran`) VALUES
(1, '2022-10-31', '', 'Hadir'),
(2, '2022-10-31', '', 'Hadir'),
(3, '2022-10-31', '', 'Hadir'),
(4, '2022-10-31', '', 'Hadir'),
(5, '2022-10-31', '', ''),
(6, '2022-10-31', '', ''),
(7, '2022-10-31', '', ''),
(8, '2022-10-31', '', ''),
(9, '2022-10-31', '', ''),
(10, '2022-10-31', '', ''),
(11, '2022-10-31', '', ''),
(12, '2022-10-31', '', ''),
(13, '2022-10-31', '', ''),
(14, '2022-10-31', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'pradana', 'pradana', 'Pramuka SMKN 4 Padalarang');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `sangga` varchar(15) NOT NULL,
  `ambalan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `kelas`, `sangga`, `ambalan`) VALUES
(1, 'Difka Muhamad Awalun Aksan ', 'XII KI A', 'Pendobrak', 'Otto Iskandardinata'),
(2, 'Elsya Putri Ayu Lestari', 'XII KI A', 'Pendobrak', 'Inggit Garnasih'),
(3, 'Hamka Salman A', 'XII ATPH', 'Pendobrak', 'Otto Iskandardinata'),
(4, 'Tessa Aprilyani', 'XII TEI A', 'Pendobrak', 'Inggit Garnasih'),
(5, 'Azmi', 'XII RPL', 'Pendobrak', 'Otto Iskandardinata'),
(6, 'Risma Neta Lestari', 'XII BDP', 'Pendobrak', 'Inggit Garnasih'),
(7, 'Sahrul Hadiana', 'XI KI A', 'Pendobrak', 'Otto Iskandardinata'),
(8, 'Nurul Febriyanti', 'XII KI B', 'Pendobrak', 'Inggit Garnasih'),
(9, 'RD.Galih Rakasiwi', 'XI RPL', 'Pendobrak', 'Otto Iskandardinata');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dewan`
-- (See below for the actual view)
--
CREATE TABLE `dewan` (
`id` int(10)
,`nama` varchar(30)
,`kelas` varchar(10)
,`jabatan` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `dewan_ambalan`
--

CREATE TABLE `dewan_ambalan` (
  `id` int(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dewan_ambalan`
--

INSERT INTO `dewan_ambalan` (`id`, `jabatan`) VALUES
(1, 'Pradana Putra'),
(2, 'Pradana Putri'),
(3, 'Judat Putra'),
(4, 'Judat Putri'),
(5, 'Kerani Putra'),
(6, 'Kerani Putri'),
(7, 'Hartaka Putra'),
(8, 'Hartaka Putri'),
(9, 'Humas');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `file`, `tanggal`) VALUES
(4, 'Untitled.png', '2022-11-04'),
(5, 'M2.png', '2022-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `pengumpulan`
--

CREATE TABLE `pengumpulan` (
  `id_pengumpulan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `file_tugas` varchar(225) NOT NULL,
  `tanggal_pengumpulan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `rekap`
-- (See below for the actual view)
--
CREATE TABLE `rekap` (
`id` int(10)
,`nama_siswa` varchar(50)
,`subject` varchar(225)
,`file_tugas` varchar(225)
,`tanggal_pengumpulan` date
);

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(10) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `tugas` varchar(225) NOT NULL,
  `tanggal_tugas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `subject`, `soal`, `tugas`, `tanggal_tugas`) VALUES
(1, 'P3K', '', 'Surat Izin RW.docx', '2022-11-09'),
(2, 'PIONERING', '', 'aturan.txt', '2022-11-09'),
(8, 'SEJARAH', 'Tuliskan Sejarah Pramuka!!', '', '2022-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'difka', 'difka'),
(2, 'elsya', 'elsya'),
(3, 'hamka', 'hamka'),
(4, 'tesa', 'tesa'),
(5, 'azmi', 'azmi'),
(6, 'risma', 'risma'),
(7, 'sahrul', 'sahrul'),
(8, 'nurul', 'nurul'),
(9, 'galih', 'galih');

-- --------------------------------------------------------

--
-- Structure for view `dewan`
--
DROP TABLE IF EXISTS `dewan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dewan`  AS SELECT `anggota`.`id` AS `id`, `anggota`.`nama` AS `nama`, `anggota`.`kelas` AS `kelas`, `dewan_ambalan`.`jabatan` AS `jabatan` FROM (`dewan_ambalan` left join `anggota` on(`anggota`.`id` = `dewan_ambalan`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `rekap`
--
DROP TABLE IF EXISTS `rekap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rekap`  AS SELECT `tugas`.`id` AS `id`, `pengumpulan`.`nama_siswa` AS `nama_siswa`, `tugas`.`subject` AS `subject`, `pengumpulan`.`file_tugas` AS `file_tugas`, `pengumpulan`.`tanggal_pengumpulan` AS `tanggal_pengumpulan` FROM (`pengumpulan` left join `tugas` on(`tugas`.`id` = `pengumpulan`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dewan_ambalan`
--
ALTER TABLE `dewan_ambalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumpulan`
--
ALTER TABLE `pengumpulan`
  ADD PRIMARY KEY (`id_pengumpulan`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
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
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dewan_ambalan`
--
ALTER TABLE `dewan_ambalan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengumpulan`
--
ALTER TABLE `pengumpulan`
  MODIFY `id_pengumpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
