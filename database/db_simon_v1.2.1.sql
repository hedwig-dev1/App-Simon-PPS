-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 12:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simon_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id_dokumenDO` varchar(255) NOT NULL,
  `pkj_namaDO` varchar(255) NOT NULL,
  `ud_pprDO` varchar(100) NOT NULL,
  `IN13DO` varchar(100) NOT NULL,
  `IN2DO` varchar(100) NOT NULL,
  `IN14DO` varchar(100) NOT NULL,
  `jns_dokDO` varchar(50) NOT NULL,
  `ket_dokDO` varchar(50) NOT NULL,
  `updateDateDO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `sendTo` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `statusSend` double NOT NULL,
  `dateLog` date NOT NULL,
  `keteranganLog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `id_pemohonPE` varchar(255) NOT NULL,
  `status_idPE` varchar(255) NOT NULL,
  `dokumen_idPE` varchar(255) NOT NULL,
  `asal_satkerPE` varchar(100) NOT NULL,
  `nama_pkjPE` varchar(255) NOT NULL,
  `sumber_pbyPE` varchar(255) NOT NULL,
  `pagu_aggPE` varchar(255) NOT NULL,
  `nil_kontrakPE` varchar(255) NOT NULL,
  `jw_StartpelaksanaanPE` date NOT NULL,
  `jw_EndpelaksanaanPE` date NOT NULL,
  `lokasi_pkjPE` varchar(255) NOT NULL,
  `timtah_pelakPE` varchar(100) NOT NULL,
  `t_berjalanPE` varchar(255) NOT NULL,
  `skp_straPE` varchar(100) NOT NULL,
  `pp_keberPE` varchar(255) NOT NULL,
  `s_permohonanPE` varchar(100) NOT NULL,
  `updateDatePE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_satker` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `usermail` varchar(100) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `level` varchar(50) NOT NULL,
  `is_activate` tinyint(2) NOT NULL,
  `terdaftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_satker`, `user`, `usermail`, `pass`, `level`, `is_activate`, `terdaftar`) VALUES
(1, 'admin', 'admin', '', '$2y$10$wWbNWXFkpqC50CCRxUkpV.eAtm/4bl55QyJKMVFYSdcaxL6GiuouC', 'admin', 1, '2023-08-27 00:00:00'),
(2, 'guest', 'guest', 'ziaulkamal1109@gmail.com', '$2y$10$8Bn/hJU7QySLn9if8tQwnuHnliJZvP54qzgfI0a2MY.cT5Ug54X86', 'guest', 1, '2023-08-27 00:00:00'),
(3, 'seksipps', 'seksi', 'ziaulkamal1109@gmail.com', '$2y$10$uVEnKuYs7fD0W1FHY8uH..oPjiXJB7d9YPEFrLJuOcfSnrwR.9V4O', 'seksi-pps', 1, '2023-08-27 00:00:00'),
(4, 'kejati', 'seksipps', 'zia.private.acc@gmail.com', '$2y$10$ze1685oWLLt0eBpmKYqnDu.CTE//c0/OtPyhnOnPO5en4e3icb1ey', 'seksi-pps', 1, '2023-08-28 00:00:00'),
(5, 'dinas pu', 'human', '', '$2y$10$3xpAfn3ghDTx8UN4GP3wyeSjvZFiFtZL5xymwpups.2hdgdX0oJCy', 'guest', 1, '2023-08-28 07:09:02'),
(6, 'rijal', 'rijal', '', '$2y$10$GBj/ct/nux8MXyfd1C372eKGLA9IoONZ8gN4hBuAhlMJ4FpCYK/Cm', 'seksi-pps', 1, '2023-08-28 00:00:00'),
(7, 'master', 'master', '', '$2y$10$L/svENeqT7ab0D0dTnyBR.ThvCn7KGEQwBiuIgxhzwy2Qu19UDRHW', 'admin', 1, '2023-08-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress_pekerjaan`
--

CREATE TABLE `tb_progress_pekerjaan` (
  `id_progPR` int(11) NOT NULL,
  `pemohon_idPR` varchar(255) NOT NULL,
  `pkj_namaPR` varchar(100) NOT NULL,
  `rcn_progPR` double NOT NULL,
  `rl_progPR` double NOT NULL,
  `deviasiPR` double NOT NULL,
  `rl_keuanPR` float NOT NULL,
  `lp_bulanPR` varchar(100) NOT NULL,
  `it_pkjPR` varchar(100) NOT NULL,
  `waktuPR` date NOT NULL,
  `updateDatePR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_statusST` varchar(255) NOT NULL,
  `IN17ST` varchar(255) NOT NULL,
  `IN2ST` varchar(255) NOT NULL,
  `IN16ST` varchar(255) NOT NULL,
  `pes_pebST` varchar(50) NOT NULL,
  `updateDateST` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `track_progress`
--

CREATE TABLE `track_progress` (
  `trackId` int(11) NOT NULL,
  `idProgress` int(11) NOT NULL,
  `rcnProgress` double NOT NULL,
  `rlProgress` double NOT NULL,
  `deviasiProgress` double NOT NULL,
  `lpBulanan` text NOT NULL,
  `fotoPekerjaan` text NOT NULL,
  `timeDateTrack` varchar(20) NOT NULL,
  `updateDateTrack` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id_dokumenDO`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`id_pemohonPE`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_progress_pekerjaan`
--
ALTER TABLE `tb_progress_pekerjaan`
  ADD PRIMARY KEY (`id_progPR`);

--
-- Indexes for table `track_progress`
--
ALTER TABLE `track_progress`
  ADD PRIMARY KEY (`trackId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_progress_pekerjaan`
--
ALTER TABLE `tb_progress_pekerjaan`
  MODIFY `id_progPR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `track_progress`
--
ALTER TABLE `track_progress`
  MODIFY `trackId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
