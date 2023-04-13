-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220531.aadb8cc914
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 11:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanantiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `userAdmin` varchar(25) NOT NULL,
  `passAdmin` varchar(25) NOT NULL,
  `emailAdmin` varchar(25) NOT NULL,
  `level` enum('Content Writer','Admin','Front Office') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `userAdmin`, `passAdmin`, `emailAdmin`, `level`) VALUES
(13, 'admin', 'admin', 'admin@mail.com', 'Admin'),
(14, 'fo', 'fo', 'fo@mail.com', 'Front Office'),
(15, 'cw', 'cw', 'cw@mail.com', 'Content Writer');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `judulBerita` varchar(25) NOT NULL,
  `tanggalBerita` date NOT NULL,
  `isiBerita` text NOT NULL,
  `fotoBerita` varchar(225) NOT NULL,
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idBerita`, `judulBerita`, `tanggalBerita`, `isiBerita`, `fotoBerita`, `idAdmin`) VALUES
(8, 'FINAL LIGA CHAMPION', '2022-06-01', 'Liverpool VS Real Madrid', '1996100114.png', 13);

-- --------------------------------------------------------

--
-- Table structure for table `buktipembayaran`
--

CREATE TABLE `buktipembayaran` (
  `idBuktipembayaran` int(11) NOT NULL,
  `fotoBuktipembayaran` varchar(225) NOT NULL,
  `statusBuktipembayaran` enum('Pending','Diterima') NOT NULL,
  `tanggalUpload` date NOT NULL,
  `idPemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buktipembayaran`
--

INSERT INTO `buktipembayaran` (`idBuktipembayaran`, `fotoBuktipembayaran`, `statusBuktipembayaran`, `tanggalUpload`, `idPemesanan`) VALUES
(3, '1996100114.png', 'Diterima', '2022-06-01', 2022060115);

-- --------------------------------------------------------

--
-- Table structure for table `jenispertandingan`
--

CREATE TABLE `jenispertandingan` (
  `idJenispertandingan` int(11) NOT NULL,
  `namaJenispertandingan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenispertandingan`
--

INSERT INTO `jenispertandingan` (`idJenispertandingan`, `namaJenispertandingan`) VALUES
(9, 'SEPAK BOLA'),
(10, 'FUTSAL');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idPemesanan` int(12) NOT NULL,
  `qty` int(2) NOT NULL,
  `hargaTiket` varchar(25) NOT NULL,
  `totalBayar` varchar(25) NOT NULL,
  `tglPemesanan` date NOT NULL,
  `statusPemesanan` enum('Diproses','Selesai') NOT NULL,
  `statusTiket` enum('Terpakai','Belum','','') NOT NULL,
  `idUser` int(11) NOT NULL,
  `idTiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `qty`, `hargaTiket`, `totalBayar`, `tglPemesanan`, `statusPemesanan`, `statusTiket`, `idUser`, `idTiket`) VALUES
(2022060115, 1, '500000', '500000', '2022-06-01', 'Selesai', 'Belum', 21, 11);

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `idPertandingan` int(11) NOT NULL,
  `tim1` varchar(25) NOT NULL,
  `tim2` varchar(25) NOT NULL,
  `waktuTanding` time NOT NULL,
  `tanggalTanding` date NOT NULL,
  `venue` varchar(25) NOT NULL,
  `status` enum('Belum Dimulai','Selesai') NOT NULL,
  `idJenispertandingan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`idPertandingan`, `tim1`, `tim2`, `waktuTanding`, `tanggalTanding`, `venue`, `status`, `idJenispertandingan`) VALUES
(9, 'PSG', 'REAL MADRID', '17:28:00', '2022-06-01', 'SANTIAGO BERNABEU', 'Belum Dimulai', 9),
(10, 'ARSENAL', 'TOTENTHAM', '16:45:00', '2022-07-08', 'KING POWER STADIUM', 'Belum Dimulai', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` int(11) NOT NULL,
  `jenisLaga` varchar(25) NOT NULL,
  `jenisKelas` varchar(25) NOT NULL,
  `jumlahTiket` int(12) NOT NULL,
  `hargaTiket` int(12) NOT NULL,
  `idPertandingan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`idTiket`, `jenisLaga`, `jenisKelas`, `jumlahTiket`, `hargaTiket`, `idPertandingan`) VALUES
(11, 'LIGA CHAMPIONS', 'VIP UTAMA', 1499, 500000, 9),
(12, 'LIGA INGGRIS', 'VIP UTAMA', 200, 700000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `namaUser` varchar(25) NOT NULL,
  `noTelp` varchar(25) NOT NULL,
  `alamatUser` text NOT NULL,
  `emailUser` varchar(25) NOT NULL,
  `usernameUser` varchar(25) NOT NULL,
  `passUser` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `namaUser`, `noTelp`, `alamatUser`, `emailUser`, `usernameUser`, `passUser`) VALUES
(21, 'Kalingga Padel Muhamad', '082175572310', 'JL. Ki Maja No 43', 'enginerbros@gmail.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `buktipembayaran`
--
ALTER TABLE `buktipembayaran`
  ADD PRIMARY KEY (`idBuktipembayaran`),
  ADD KEY `idPemesanan` (`idPemesanan`);

--
-- Indexes for table `jenispertandingan`
--
ALTER TABLE `jenispertandingan`
  ADD PRIMARY KEY (`idJenispertandingan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idTiket` (`idTiket`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`idPertandingan`),
  ADD KEY `idJenispertandingan` (`idJenispertandingan`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`),
  ADD KEY `idPertandingan` (`idPertandingan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buktipembayaran`
--
ALTER TABLE `buktipembayaran`
  MODIFY `idBuktipembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenispertandingan`
--
ALTER TABLE `jenispertandingan`
  MODIFY `idJenispertandingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `idPertandingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `idTiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Constraints for table `buktipembayaran`
--
ALTER TABLE `buktipembayaran`
  ADD CONSTRAINT `buktipembayaran_ibfk_1` FOREIGN KEY (`idPemesanan`) REFERENCES `pemesanan` (`idPemesanan`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idTiket`) REFERENCES `tiket` (`idTiket`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `pertandingan_ibfk_1` FOREIGN KEY (`idJenispertandingan`) REFERENCES `jenispertandingan` (`idJenispertandingan`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`idPertandingan`) REFERENCES `pertandingan` (`idPertandingan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



