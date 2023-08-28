-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 07:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simon-app`
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

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id_dokumenDO`, `pkj_namaDO`, `ud_pprDO`, `IN13DO`, `IN2DO`, `IN14DO`, `jns_dokDO`, `ket_dokDO`, `updateDateDO`) VALUES
('dok-16931205362023', 'Proyek Pembangunan Jalan TOL', 'default.pdf', '', '', 'cancel.pdf', 'Ditolak', 'di tolak', '0000-00-00'),
('dok-16931211832023', 'Proyek Penanaman Fiber Optic', 'default.pdf', 'sample.pdf', 'sample.pdf', '', 'Diterima', '', '0000-00-00'),
('dok-16931319872023', 'Pembangunan FlyOver simpang surabaya', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `lvlAccess` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `activityProg` tinyint(4) NOT NULL,
  `dateLog` date NOT NULL,
  `sendMail` tinyint(4) NOT NULL,
  `keteranganLog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `lvlAccess`, `username`, `activityProg`, `dateLog`, `sendMail`, `keteranganLog`) VALUES
(1, 'seksi-pps', 'guest', 0, '2023-08-27', 0, 'Anda mempunyai data permohonan baru. harap tindak lanjuti dengan membuka aplikasi'),
(2, 'seksi-pps', 'guest', 0, '2023-08-28', 0, 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'),
(3, 'seksi-pps', 'guest', 0, '2023-08-28', 0, 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'),
(4, 'seksi-pps', 'guest', 0, '2023-08-28', 0, 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'),
(5, 'seksi-pps', 'guest', 0, '2023-08-28', 0, 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'),
(6, 'seksi-pps', 'guest', 0, '2023-08-28', 0, 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'),
(7, 'seksi-pps', 'guest', 0, '2023-08-28', 0, 'Anda mempunyai data progress pekerjaan baru. harap membuka aplikasi'),
(8, 'guest', 'admin', 0, '2023-08-28', 0, 'Permohonan anda telah di tindak lanjuti. buka aplikasi untuk melihat berkas yang baru masuk'),
(9, 'guest', 'admin', 0, '2023-08-28', 0, 'Permohonan anda telah di terima harap membuka aplikasi untuk melihat berkas yang kami berikan');

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

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`id_pemohonPE`, `status_idPE`, `dokumen_idPE`, `asal_satkerPE`, `nama_pkjPE`, `sumber_pbyPE`, `pagu_aggPE`, `nil_kontrakPE`, `jw_StartpelaksanaanPE`, `jw_EndpelaksanaanPE`, `lokasi_pkjPE`, `timtah_pelakPE`, `t_berjalanPE`, `skp_straPE`, `pp_keberPE`, `s_permohonanPE`, `updateDatePE`) VALUES
('pem-16931205362023', '', 'dok-16931205362023', '', 'Proyek Pembangunan Jalan TOL', 'Dinas B', '11231312412', '3123123131', '2023-08-17', '2023-09-27', 'Batoh, banda aceh', 'Ttp362023.pdf', 'hello world', 'Surat_kps362023.pdf', 'hellow rodlgda', 'Surat_permohonan362023.pdf', '0000-00-00'),
('pem-16931211832023', '', 'dok-16931211832023', 'guest', 'Proyek Penanaman Fiber Optic', 'Dinas A', '23124134142', '4124141', '2023-08-17', '2023-08-31', 'Banda Aceh', 'Ttp232023.pdf', 'hello world', 'Surat_kps232023.pdf', 'uaodwadnmwaom', 'Surat_permohonan232023.pdf', '0000-00-00'),
('pem-16931319872023', '', 'dok-16931319872023', 'guest', 'Pembangunan FlyOver simpang surabaya', 'Dinas B', '12345678', '12345678', '2023-08-01', '2023-08-31', 'Banda Aceh', 'cetak_pdf.pdf', 'hello world', 'akhri_2.pdf', 'ini testing', 'Surat_permohonan272023.pdf', '2023-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_satker` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `level` varchar(50) NOT NULL,
  `is_activate` tinyint(2) NOT NULL,
  `terdaftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_satker`, `user`, `pass`, `level`, `is_activate`, `terdaftar`) VALUES
(1, 'admin', 'admin', '$2y$10$wWbNWXFkpqC50CCRxUkpV.eAtm/4bl55QyJKMVFYSdcaxL6GiuouC', 'admin', 1, '2023-08-27 00:00:00'),
(2, 'guest', 'guest', '$2y$10$8Bn/hJU7QySLn9if8tQwnuHnliJZvP54qzgfI0a2MY.cT5Ug54X86', 'guest', 1, '2023-08-27 00:00:00'),
(3, 'seksipps', 'seksi', '$2y$10$uVEnKuYs7fD0W1FHY8uH..oPjiXJB7d9YPEFrLJuOcfSnrwR.9V4O', 'seksi-pps', 1, '2023-08-27 00:00:00'),
(4, 'kejati', 'seksipps', '$2y$10$ze1685oWLLt0eBpmKYqnDu.CTE//c0/OtPyhnOnPO5en4e3icb1ey', 'seksi-pps', 1, '2023-08-28 00:00:00'),
(5, 'dinas pu', 'human', '$2y$10$3xpAfn3ghDTx8UN4GP3wyeSjvZFiFtZL5xymwpups.2hdgdX0oJCy', 'guest', 1, '2023-08-28 07:09:02'),
(6, 'rijal', 'rijal', '$2y$10$GBj/ct/nux8MXyfd1C372eKGLA9IoONZ8gN4hBuAhlMJ4FpCYK/Cm', 'seksi-pps', 1, '2023-08-28 00:00:00'),
(7, 'master', 'master', '$2y$10$L/svENeqT7ab0D0dTnyBR.ThvCn7KGEQwBiuIgxhzwy2Qu19UDRHW', 'admin', 1, '2023-08-28 00:00:00');

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

--
-- Dumping data for table `tb_progress_pekerjaan`
--

INSERT INTO `tb_progress_pekerjaan` (`id_progPR`, `pemohon_idPR`, `pkj_namaPR`, `rcn_progPR`, `rl_progPR`, `deviasiPR`, `rl_keuanPR`, `lp_bulanPR`, `it_pkjPR`, `waktuPR`, `updateDatePR`) VALUES
(14, 'pem-16931205362023', 'Proyek Pembangunan Jalan TOL', 11, 11, 10, 100, '1 lembar', 'default_2023-08-28.png', '2023-08-31', '2023-08-28'),
(15, 'pem-16931211832023', 'Proyek Penanaman Fiber Optic', 50, 50, 50, 1, '2 lembar', 'default_2023-08-28.jpg', '2023-08-12', '2023-08-28'),
(16, 'pem-16931319872023', 'Pembangunan FlyOver simpang surabaya', 20, 25, 30, 100, '1 dokumen', 'default_2023-08-28.jpg', '2023-08-31', '2023-08-28');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
