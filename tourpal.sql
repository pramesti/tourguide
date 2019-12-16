-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2019 at 04:37 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'user', 'tour@gmail.com', 'qweasdzxc');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_tempat` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_tempat`, `id_kota`, `id_paket`, `nama_wisata`, `deskripsi`, `lokasi`, `cover`) VALUES
(5, 4, 4, 'Borobudur', 'Candi buddha terbesar di dunia.', 'Yogyakarta', 'borobudur.jpg'),
(6, 4, 4, 'Prambanan', 'Candi hindu terbesar di Indonesia.', 'Yogyakarta', 'prambanan.jpg'),
(7, 5, 5, 'Tanah Lot', 'Tanah Lot merupakan tempat wisata terkenal di Bali.', 'Bali', 'tanahlot.jpg'),
(9, 5, 5, 'Uluwatu', 'Uluwatu merupakan salah satu tempat wisata di Bali.', 'Bali', 'uluwatu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kota_tujuan`
--

CREATE TABLE `kota_tujuan` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota_tujuan`
--

INSERT INTO `kota_tujuan` (`id_kota`, `nama_kota`, `photo`) VALUES
(4, 'Yogyakarta', 'yogyakarta.jpg'),
(5, 'Bali', 'bali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `lama_hari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `lama_hari`) VALUES
(4, 'Paket Jogja A', 100000, '5 hari'),
(5, 'Paket Bali A', 900000, '5 hari');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_tourguide` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Terverifikasi'),
(2, 'Belum Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `struk`
--

CREATE TABLE `struk` (
  `id_struk` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struk`
--

INSERT INTO `struk` (`id_struk`, `file`) VALUES
(21, 'waspada-struk-transfer-atm-editan-brosis1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `id_tourguide` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kemampuan` text NOT NULL,
  `telp_guide` varchar(14) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`id_tourguide`, `nama`, `kemampuan`, `telp_guide`, `id_kota`, `id_paket`, `foto`) VALUES
(2, 'Andia', 'bahasa inggris', '0832345678', 4, 4, '10-_Bimo_Prasetyo_Anggoro2.jpg'),
(5, 'Zuama', 'Bahasa Arap', '083614546676', 5, 5, '05-Andika_Pradana_Byantara.jpg'),
(6, 'Bimo', 'Bahasa Sunda', '082546384625', 5, 5, 'wqw.jpg'),
(8, 'Dhika', 'Bahasa German', '085637485632', 5, 5, '07-Amer-Miracle-Al-Barkawi.jpg'),
(9, 'Kemal', 'Bahasa Jawa', '089645234878', 5, 5, 'dendi.jpg'),
(10, 'Atta', 'Bahasa Italy', '08922666635172', 4, 4, '730x480-img-47521-kuroky-team-liquid.jpg'),
(11, 'Haqi', 'Bahasa Inggris', '087746283666', 4, 4, 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_paket` int(11) NOT NULL,
  `id_tourguide` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_status`, `id_paket`, `id_tourguide`, `tanggal`, `file`) VALUES
(55, 11, 2, 5, 8, '0000-00-00', NULL),
(56, 11, 2, 5, 5, '0000-00-00', NULL),
(59, 11, 2, 5, 5, '0000-00-00', NULL),
(60, 11, 2, 5, 5, '2019-12-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `telp`, `alamat`, `tgl_lahir`, `password`) VALUES
(7, 'Bram', 'bram@gmail.com', '0821234562', 'Jln. Danau Tawar 8', '2019-12-19', '1234567890'),
(9, 'elang', 'elang@gmail.com', '0821234562', 'Jln. Danau Ranau 8', '2019-12-13', 'qwertyuiop'),
(11, 'asdfghj', 'qwerty@gmail.com', '0826314273', 'Jl.ReogPonorogo', '2019-12-26', 'qwertyuiop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `id_kota` (`id_kota`,`id_paket`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `kota_tujuan`
--
ALTER TABLE `kota_tujuan`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_tourguide` (`id_tourguide`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `struk`
--
ALTER TABLE `struk`
  ADD PRIMARY KEY (`id_struk`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`id_tourguide`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_checkout` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_tourguide` (`id_tourguide`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kota_tujuan`
--
ALTER TABLE `kota_tujuan`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id_struk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tourguide`
--
ALTER TABLE `tourguide`
  MODIFY `id_tourguide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD CONSTRAINT `destinasi_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `kota_tujuan` (`id_kota`),
  ADD CONSTRAINT `destinasi_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_tourguide`) REFERENCES `tourguide` (`id_tourguide`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD CONSTRAINT `tourguide_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota_tujuan` (`id_kota`),
  ADD CONSTRAINT `tourguide_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `transaksi_ibfk_8` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `transaksi_ibfk_9` FOREIGN KEY (`id_tourguide`) REFERENCES `tourguide` (`id_tourguide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
