-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 02:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveloke`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `no_booking` int(3) NOT NULL,
  `no_hotel` int(3) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jumlah_kamar` int(2) NOT NULL,
  `lama_inap` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`no_booking`, `no_hotel`, `tgl_booking`, `jumlah_kamar`, `lama_inap`) VALUES
(1, 1, '2018-06-22', 1, 1),
(2, 1, '2018-06-22', 1, 1),
(3, 2, '2018-06-22', 1, 1),
(4, 2, '2018-06-22', 1, 1),
(5, 1, '2018-06-22', 1, 1),
(6, 3, '2018-06-23', 3, 3),
(7, 4, '2018-06-25', 1, 2),
(8, 1, '2018-06-25', 3, 3),
(9, 1, '2018-06-25', 3, 3),
(10, 1, '2018-06-25', 7, 7),
(11, 1, '2018-06-27', 7, 7),
(12, 1, '2018-06-30', 1, 1),
(13, 1, '2018-06-30', 2, 2),
(14, 2, '2018-06-26', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `no_hotel` int(3) NOT NULL,
  `nama_hotel` varchar(30) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `daerah` varchar(30) NOT NULL,
  `lokasi` enum('Jakarta','Bali','','') NOT NULL,
  `harga_h` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`no_hotel`, `nama_hotel`, `foto`, `daerah`, `lokasi`, `harga_h`) VALUES
(1, 'The Ritz-Carlton Jakarta', 'img/ritz.jpg', 'Kuningan', 'Jakarta', 4000000),
(2, 'Condominium Greenbay', 'img/condo.jpg', 'Pluit', 'Jakarta', 3500000),
(3, 'Horison Legian', 'img/horison.jpg', 'Legian', 'Bali', 1300000),
(4, 'Kuta Central Park Hotel', 'img/kuta.jpg', 'Kuta', 'Bali', 1100000),
(5, 'Mulia Resort', 'img/mulia.jpg', 'Nusa Dua', 'Bali', 4100000);

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` char(4) NOT NULL,
  `nama_k` varchar(30) NOT NULL,
  `harga_k` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nama_k`, `harga_k`) VALUES
('KR01', 'Argo Parahyangan', 10000),
('KR02', 'Argo Parahyangan Premium', 20000),
('KR03', 'Klb Argo Parahyangan Tambahan', 30000),
('KR04', 'Argo Parahyangan Priority', 100000),
('KR05', 'Argo Parahyangan Tambahan', 25000),
('KR06', 'Hapus Untuk Test', 111);

-- --------------------------------------------------------

--
-- Table structure for table `laju`
--

CREATE TABLE `laju` (
  `no_laju` int(4) NOT NULL,
  `id_kereta` char(4) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jam` varchar(6) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `no_tujuan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laju`
--

INSERT INTO `laju` (`no_laju`, `id_kereta`, `tgl_berangkat`, `jam`, `durasi`, `no_tujuan`) VALUES
(1, 'KR01', '2018-06-20', '13.00', '7 jam', 2),
(2, 'KR05', '2018-06-20', '14.30', '7jam 10mnt', 2),
(3, 'KR05', '2018-06-22', '15.00', '3jam', 4),
(6, 'KR01', '2018-06-21', '01.30', '123jam', 2),
(7, 'KR04', '2018-06-28', '04.50', '2jam', 4),
(8, 'KR05', '2018-06-25', '01.00', '4 jam', 1),
(9, 'KR04', '2018-06-23', '14.00', '5 jam', 2),
(10, 'KR02', '2018-06-27', '17.00', '4 jam', 4),
(11, 'KR03', '2018-06-27', '14.30', '4 jam', 2),
(12, 'KR03', '2018-06-30', '13.00', '3jam', 2),
(13, 'KR05', '2018-06-26', '14.30', '4 jam', 2),
(14, 'KR02', '2018-06-26', '12.00', '4 jam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no_iden` char(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no_iden`, `username`, `password`, `nama`, `no_telp`, `email`, `alamat`, `jk`, `role`) VALUES
('0123456789', 'james', '1234', 'James J', '085776312333', 'jamesjeremysijaya@gmail.com', 'Harapan Baru 2', 'pria', 'user'),
('101010101', 'budi', '1234', 'budianduk', '08121009999', 'budiiii@gmail.com', 'Jl. budi', 'pria', 'user'),
('1111111111', 'admin', '1234', 'Fidel', '08121008199', 'ffidel@gmail.com', 'bojong kenyots', 'pria', 'admin'),
('123123123', 'samsul', '123', 'samsul', '08080808', 'samsul@gmail.com', 'jl. jalan no 55', 'pria', 'user'),
('2222222', 'josef', '1233', 'Josefz', '08121', 'josef@gmail.com', 'boeew', 'pria', 'user'),
('321312321', 'bambang', '1234', 'bambang', '081', 'bambang@gmail.com', 'jl panas', 'pria', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no_pemesanan` int(4) NOT NULL,
  `no_penerbangan` int(4) DEFAULT NULL,
  `no_laju` int(4) DEFAULT NULL,
  `no_booking` int(3) DEFAULT NULL,
  `no_iden` char(10) NOT NULL,
  `jumlah_penumpang` int(2) NOT NULL,
  `no_class` int(2) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no_pemesanan`, `no_penerbangan`, `no_laju`, `no_booking`, `no_iden`, `jumlah_penumpang`, `no_class`, `tgl_pemesanan`) VALUES
(47, 2, NULL, NULL, '123123123', 3, 1, '2018-06-29'),
(69, NULL, NULL, 5, '0123456789', 1, NULL, '2018-06-22'),
(71, NULL, NULL, 5, '0123456789', 1, NULL, '2018-06-21'),
(72, NULL, NULL, 5, '0123456789', 1, NULL, '2018-06-21'),
(73, NULL, NULL, 5, '0123456789', 1, NULL, '2018-06-21'),
(74, NULL, NULL, 5, '0123456789', 1, NULL, '2018-06-21'),
(75, NULL, NULL, 6, '0123456789', 2, NULL, '2018-06-21'),
(76, 10, NULL, NULL, '0123456789', 1, 1, '2018-06-21'),
(77, NULL, 9, NULL, '123123123', 1, 4, '2018-06-22'),
(78, NULL, 10, NULL, '0123456789', 1, 6, '2018-06-22'),
(79, 11, NULL, NULL, '0123456789', 1, 1, '2018-06-22'),
(80, NULL, NULL, 7, '0123456789', 1, NULL, '2018-06-22'),
(81, 11, NULL, NULL, '0123456789', 2, 1, '2018-06-22'),
(82, 11, NULL, NULL, '0123456789', 2, 1, '2018-06-22'),
(83, NULL, 11, NULL, '0123456789', 2, 1, '2018-06-22'),
(84, NULL, 11, NULL, '0123456789', 2, 1, '2018-06-22'),
(85, NULL, 11, NULL, '0123456789', 2, 1, '2018-06-22'),
(86, NULL, 11, NULL, '0123456789', 2, 4, '2018-06-22'),
(87, NULL, 11, NULL, '0123456789', 2, 6, '2018-06-22'),
(88, NULL, 11, NULL, '0123456789', 10, 6, '2018-06-22'),
(89, 11, NULL, NULL, '0123456789', 5, 3, '2018-06-22'),
(90, NULL, NULL, 11, '0123456789', 7, NULL, '2018-06-22'),
(91, NULL, 12, NULL, '123123123', 2, 5, '2018-06-22'),
(92, 12, NULL, NULL, '123123123', 2, 2, '2018-06-22'),
(93, 12, NULL, NULL, '2222222', 1, 1, '2018-06-22'),
(94, NULL, 12, NULL, '2222222', 1, 4, '2018-06-22'),
(95, NULL, 3, NULL, '2222222', 1, 4, '2018-06-22'),
(96, NULL, 3, NULL, '101010101', 1, 4, '2018-06-22'),
(97, 9, NULL, NULL, '101010101', 2, 1, '2018-06-22'),
(98, NULL, 12, NULL, '0123456789', 1, 4, '2018-06-24'),
(99, 12, NULL, NULL, '0123456789', 1, 2, '2018-06-24'),
(100, NULL, NULL, 12, '0123456789', 1, NULL, '2018-06-24'),
(101, 12, NULL, NULL, '0123456789', 1, 3, '2018-06-25'),
(102, NULL, 12, NULL, '0123456789', 1, 5, '2018-06-25'),
(103, NULL, NULL, 13, '0123456789', 2, NULL, '2018-06-25'),
(104, NULL, NULL, 13, '0123456789', 2, NULL, '2018-06-25'),
(105, NULL, 14, NULL, '321312321', 2, 5, '2018-06-26'),
(106, NULL, 13, NULL, '321312321', 2, 5, '2018-06-26'),
(107, 13, NULL, NULL, '321312321', 1, 3, '2018-06-26'),
(108, NULL, NULL, 14, '321312321', 2, NULL, '2018-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `no_penerbangan` int(4) NOT NULL,
  `id_pesawat` char(5) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jam` varchar(6) NOT NULL,
  `durasi` varchar(20) DEFAULT NULL,
  `no_tujuan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`no_penerbangan`, `id_pesawat`, `tgl_berangkat`, `jam`, `durasi`, `no_tujuan`) VALUES
(1, 'XT752', '2018-06-18', '13.00', '2jam 10mnt', 1),
(2, 'XT752', '2018-06-18', '14.00', '1jam', 3),
(3, 'XT752', '2018-06-18', '01.00', '2jam', 9),
(4, 'GA418', '2018-06-19', '15.00', '2jam', 5),
(5, 'QG196', '2018-06-19', '12.00', '1jam 50mnt', 5),
(6, 'JT100', '2018-06-19', '07.00', '2jam 10mnt', 5),
(7, 'SJ275', '2018-06-30', '13.00', '2jam 10mnt', 7),
(9, 'SJ274', '2018-06-24', '01.00', '1jam 50mnt', 8),
(10, 'JT101', '2018-06-23', '07.00', '1 am 1mnt', 1),
(11, 'GA419', '2018-06-25', '14.30', '2jam', 8),
(12, 'GA418', '2018-06-30', '13.00', '3jam', 2),
(13, 'SJ275', '2018-06-26', '12.00', '2jam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` char(5) NOT NULL,
  `nama_maskapai` varchar(20) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `harga_p` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `nama_maskapai`, `foto`, `harga_p`) VALUES
('AD11', 'James Corp', 'aass', 2000),
('GA418', 'Garuda', 'img/garuda.png', 200000),
('GA419', 'Garuda', 'img/garuda.png', 200000),
('ID703', 'Batik', 'img/batik.png', 110000),
('ID704', 'Batik', 'img/batik.png', 110000),
('JT100', 'Lion', 'img/lion.png', 125000),
('JT101', 'Lion', 'img/lion.png', 125000),
('QG196', 'Citilink', 'img/citilink.png', 80000),
('QG197', 'Citilink', 'img/citilink.png', 80000),
('SJ274', 'Sriwijaya', 'img/sriwijaya.png', 145000),
('SJ275', 'Sriwijaya', 'img/sriwijaya.png', 145000),
('XT752', 'Air Asia', 'img/airasia.png', 100000),
('XT753', 'Air Asia', 'img/airasia.png', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `seat_class`
--

CREATE TABLE `seat_class` (
  `no_class` int(2) NOT NULL,
  `nama_class` varchar(20) NOT NULL,
  `transportasi` enum('kereta','pesawat','','') DEFAULT NULL,
  `harga_s` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_class`
--

INSERT INTO `seat_class` (`no_class`, `nama_class`, `transportasi`, `harga_s`) VALUES
(1, 'economy', 'pesawat', 50000),
(2, 'business', 'pesawat', 1000000),
(3, 'firstclass', 'pesawat', 3000000),
(4, 'economy', 'kereta', 0),
(5, 'business', 'kereta', 20000),
(6, 'executive', 'kereta', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `no_tujuan` int(3) NOT NULL,
  `tempat_awal` varchar(20) NOT NULL,
  `tempat_tujuan` varchar(20) NOT NULL,
  `harga_t` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`no_tujuan`, `tempat_awal`, `tempat_tujuan`, `harga_t`) VALUES
(1, 'jakarta', 'surabaya', 400000),
(2, 'jakarta', 'yogyakarta', 350000),
(3, 'jakarta', 'semarang', 300000),
(4, 'jakarta', 'malang', 350000),
(5, 'jakarta', 'bali', 750000),
(6, 'jakarta', 'makassar', 600000),
(7, 'jakarta', 'medan', 700000),
(8, 'jakarta', 'singapore', 900000),
(9, 'jakarta', 'kuala lumpur', 550000),
(10, 'jakarta', 'penang', 1100000),
(11, 'jakarta', 'bangkok', 1400000),
(12, 'jakarta', 'hongkong', 2200000),
(13, 'jakarta', 'manila', 1700000),
(14, 'jakarta', 'melbourne', 2200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`no_booking`),
  ADD KEY `no_hotel` (`no_hotel`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`no_hotel`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indexes for table `laju`
--
ALTER TABLE `laju`
  ADD PRIMARY KEY (`no_laju`),
  ADD KEY `id_kereta` (`id_kereta`),
  ADD KEY `no_tujuan` (`no_tujuan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no_iden`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no_pemesanan`),
  ADD KEY `no_iden` (`no_iden`),
  ADD KEY `no_class` (`no_class`),
  ADD KEY `no_penerbangan` (`no_penerbangan`),
  ADD KEY `no_laju` (`no_laju`),
  ADD KEY `no_booking` (`no_booking`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`no_penerbangan`),
  ADD KEY `no_tujuan` (`no_tujuan`),
  ADD KEY `id_pesawat` (`id_pesawat`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `seat_class`
--
ALTER TABLE `seat_class`
  ADD PRIMARY KEY (`no_class`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`no_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `no_booking` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `no_hotel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laju`
--
ALTER TABLE `laju`
  MODIFY `no_laju` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `no_pemesanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `no_penerbangan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seat_class`
--
ALTER TABLE `seat_class`
  MODIFY `no_class` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `no_tujuan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`no_hotel`) REFERENCES `hotel` (`no_hotel`);

--
-- Constraints for table `laju`
--
ALTER TABLE `laju`
  ADD CONSTRAINT `laju_ibfk_1` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`),
  ADD CONSTRAINT `laju_ibfk_2` FOREIGN KEY (`no_tujuan`) REFERENCES `tujuan` (`no_tujuan`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`no_iden`) REFERENCES `login` (`no_iden`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`no_class`) REFERENCES `seat_class` (`no_class`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`no_penerbangan`) REFERENCES `penerbangan` (`no_penerbangan`),
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`no_laju`) REFERENCES `laju` (`no_laju`),
  ADD CONSTRAINT `pemesanan_ibfk_5` FOREIGN KEY (`no_booking`) REFERENCES `booking` (`no_booking`);

--
-- Constraints for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD CONSTRAINT `penerbangan_ibfk_1` FOREIGN KEY (`no_tujuan`) REFERENCES `tujuan` (`no_tujuan`),
  ADD CONSTRAINT `penerbangan_ibfk_2` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
