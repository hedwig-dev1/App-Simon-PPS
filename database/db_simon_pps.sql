-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 04:41 PM
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
-- Database: `db_simon_pps`
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
  `ket_dokDO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id_dokumenDO`, `pkj_namaDO`, `ud_pprDO`, `IN13DO`, `IN2DO`, `IN14DO`, `jns_dokDO`, `ket_dokDO`) VALUES
('dok-16926244392023', 'Pembangunan Rel Kereta Api', 'default.pdf', '', '', '', 'Ditindak lanjuti', 'permohonan anda telah kami tindak lanjuti silahkan'),
('dok-16926248582023', 'Pembangunan Sekolah Darurat', 'default.pdf', 'sample.pdf', 'sample.pdf', '', 'Diterima', 'permohonan anda kami terima, silahkan lanjut ke pr'),
('dok-16926815872023', 'Pembangunan FlyOver simpang surabaya', 'default.pdf', 'sample.pdf', 'sample.pdf', '', 'Diterima', 'permohonan anda kami terima'),
('dok-16927635672023', 'Proyek Pembangunan Waduk', 'default.pdf', '', '', 'cancel.pdf', 'Ditolak', 'maaf kami tidak bisa menerima permintaan anda'),
('dok-16927751632023', 'Proyek Penanaman Fiber Optic', 'default.pdf', '', '', 'cancel.pdf', 'Ditolak', 'di tolak '),
('dok-16927877382023', 'Pembangunan Jalan', 'default.pdf', 'sample.pdf', 'sample.pdf', '', 'Diterima', 'permohonan di terima'),
('dok-16927885332023', 'Pemasangan CCTV ', '', '', '', '', '', '');

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
  `jw_pelaksanaanPE` varchar(255) NOT NULL,
  `lokasi_pkjPE` varchar(255) NOT NULL,
  `timtah_pelakPE` varchar(100) NOT NULL,
  `t_berjalanPE` varchar(255) NOT NULL,
  `skp_straPE` varchar(100) NOT NULL,
  `pp_keberPE` varchar(255) NOT NULL,
  `s_permohonanPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`id_pemohonPE`, `status_idPE`, `dokumen_idPE`, `asal_satkerPE`, `nama_pkjPE`, `sumber_pbyPE`, `pagu_aggPE`, `nil_kontrakPE`, `jw_pelaksanaanPE`, `lokasi_pkjPE`, `timtah_pelakPE`, `t_berjalanPE`, `skp_straPE`, `pp_keberPE`, `s_permohonanPE`) VALUES
('pem-16926244392023', '', 'dok-16926244392023', '', 'Pembangunan Rel Kereta Api', 'Dinas B', 'Rp.800.000.000', 'Rp.600.000.000', '3 bulan', 'Jantho', 'berkas01.pdf', 'hello world', 'berkas01.pdf', 'testing lagi', 'berkas01.pdf'),
('pem-16926248582023', '', 'dok-16926248582023', '', 'Pembangunan Sekolah Darurat', 'Dinas B', 'Rp.20.000.000', 'Rp.10.000.000', '1 tahun', 'Blang Bintang', 'berkas01.pdf', 'membeli bahan baku', 'berkas01.pdf', 'hehkfaoda', 'berkas01.pdf'),
('pem-16926815872023', '', 'dok-16926815872023', '', 'Pembangunan FlyOver simpang surabaya', 'Dinas A', 'Rp.500.000.000', 'Rp.500.000.000', '2 tahun', 'Batoh, banda aceh', 'berkas01.pdf', 'Pemasangan Besi', 'berkas01.pdf', 'codeigniter 3', 'berkas01.pdf'),
('pem-16927635672023', '', 'dok-16927635672023', '', 'Proyek Pembangunan Waduk', 'Dinas C', 'Rp.700.000.000', 'Rp.400.000.000', '3 tahun', 'Blang Bintang', 'berkas01.pdf', 'Membeli Bahan Baku & Persiapan Alat', 'berkas01.pdf', 'melakukan testing', 'berkas01.pdf'),
('pem-16927751632023', '', 'dok-16927751632023', '', 'Proyek Penanaman Fiber Optic', 'Dinas D', 'Rp 500.000.000,00', 'Rp 500.000.000,00', '2 bulan', 'Beurawe', 'berkas01.pdf', 'membeli bahan baku', 'berkas01.pdf', 'melakukan testing pada angka', 'berkas01.pdf'),
('pem-16927877382023', '', 'dok-16927877382023', '', 'Pembangunan Jalan', 'Dinas D', 'Rp 1.000.000,00', 'Rp 1.000.000,00', '1 tahun', 'Bireuen', '.pdf', 'membeli bahan baku', '.pdf', 'testing untuk download dan angka', 'Surat_permohonan16927877382023.pdf'),
('pem-16927885332023', '', 'dok-16927885332023', '', 'Pemasangan CCTV ', 'Dinas G', 'Rp 2.000.000,00', 'Rp 2.000.000,00', '2 bulan', 'Batoh, banda aceh', 'Ttp132023.pdf', 'Memblok jalan', 'Surat_kps132023.pdf', 'testing nama file dan rupiah angka', 'Surat_permohonan132023.pdf');

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
(2, 'Admin', 'akhri', '$2y$10$CC8qA0GV98vLzLwH0LUPQusq5Li75vYf3rYVXpG79PBJSXwyMzywq', 'admin', 1, '2023-08-16 00:00:00'),
(3, 'Dinas Pu', 'kamal', '$2y$10$Prpatiq1uVDotSMBHrxP5eJ2gNAK.z05O/11LLo8oUXGaA0kHrTs6', 'guest', 1, '2023-08-16 00:00:00'),
(4, 'Dinas Kesehatan', 'tiara', '$2y$10$kNSttg7CbK3/iAy6l9bPMevUJKFenIkuQGCr7oiiMkPAe0QDABQbu', 'guest', 1, '2023-08-17 05:56:19'),
(8, 'kejati', 'salwa', '$2y$10$4oePl2/RSQ8NwgaYdKATpePqbpF6KDeQx9JC6ind5CSjl/iEzs8YO', 'seksi-pps', 1, '2023-08-17 00:00:00'),
(9, 'kejati', 'hetty', '$2y$10$m5JsFeob9voZ6hffbi3tqezClRsS3w17Yo3XA5ZJD5z2V/nrufasm', 'admin', 1, '2023-08-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress_pekerjaan`
--

CREATE TABLE `tb_progress_pekerjaan` (
  `id_progPR` int(11) NOT NULL,
  `pemohon_idPR` varchar(255) NOT NULL,
  `pkj_namaPR` varchar(100) NOT NULL,
  `rcn_progPR` varchar(100) NOT NULL,
  `rl_progPR` varchar(100) NOT NULL,
  `deviasiPR` varchar(100) NOT NULL,
  `rl_keuanPR` varchar(100) NOT NULL,
  `lp_bulanPR` varchar(100) NOT NULL,
  `it_pkjPR` varchar(100) NOT NULL,
  `waktuPR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_progress_pekerjaan`
--

INSERT INTO `tb_progress_pekerjaan` (`id_progPR`, `pemohon_idPR`, `pkj_namaPR`, `rcn_progPR`, `rl_progPR`, `deviasiPR`, `rl_keuanPR`, `lp_bulanPR`, `it_pkjPR`, `waktuPR`) VALUES
(1, 'pem-16926244392023', 'Pembangunan Rel Kereta Api', '', '10%', '50%', 'Rp.100.000.000', '1 dokumen', 'default_2023-08-21', '2023-08-21'),
(2, 'pem-16926248582023', 'Pembangunan Sekolah Darurat', '10%', '20%', '40%', 'Rp.100.000.000', '4 dokumen', 'default_2023-08-21.jpg', '2023-08-27'),
(3, 'pem-16926815872023', 'Pembangunan FlyOver simpang surabaya', '', '', '', '', '', '', '0000-00-00'),
(4, 'pem-16927635672023', 'Proyek Pembangunan Waduk', '', '', '', '', '', '', '0000-00-00'),
(5, 'pem-16927751632023', 'Proyek Penanaman Fiber Optic', '', '', '', '', '', '', '0000-00-00'),
(6, 'pem-16927877382023', 'Pembangunan Jalan', '', '', '', '', '', '', '0000-00-00'),
(7, 'pem-16927885332023', 'Pemasangan CCTV ', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_statusST` varchar(255) NOT NULL,
  `IN17ST` varchar(255) NOT NULL,
  `IN2ST` varchar(255) NOT NULL,
  `IN16ST` varchar(255) NOT NULL,
  `pes_pebST` varchar(50) NOT NULL
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
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_progress_pekerjaan`
--
ALTER TABLE `tb_progress_pekerjaan`
  MODIFY `id_progPR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
