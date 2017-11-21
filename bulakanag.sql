-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 06:10 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulakanag`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `pass_adm` varchar(50) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `hp_adm` varchar(50) NOT NULL,
  `alamat_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass_adm`, `nama_adm`, `hp_adm`, `alamat_adm`) VALUES
('admin', 'adm01', 'Ligia', '082314213212', 'Jl.Umban Sari no 99 f');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(200) NOT NULL,
  `nama_barang` varchar(300) NOT NULL,
  `warna` varchar(300) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `warna`, `stok`, `harga`, `gambar`) VALUES
(10, 'Safea Tunik', 'hitam, putih, biru', 4, 'Rp.115.000', '1511115046.jpg'),
(11, 'Celana Rok Panjang', 'abu-abu, putih', 4, 'Rp. 80.000', '1511115087.jpg'),
(12, 'Blouse Katun', 'hijau, cream, putih', 3, 'Rp. 60.000', '1511115134.jpg'),
(13, 'Annida Cullote', 'coklat, hitam, navy, salem', 6, 'Rp. 75.000', '1511115333.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id_cs` int(200) NOT NULL,
  `nama_cs` varchar(300) NOT NULL,
  `area` varchar(300) NOT NULL,
  `telp` varchar(300) NOT NULL,
  `line` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id_cs`, `nama_cs`, `area`, `telp`, `line`) VALUES
(1, 'Linda Astuti', 'Tembilahan', '085266112927', '@bulakanAG001'),
(2, 'Dona', 'Jakarta', '081322546221', '@bulakanAG002'),
(3, 'Rifal', 'Sumatera Barat', '085377678901', '@bulakanAG003'),
(4, 'Yelvi Andika', 'Pekanbaru', '081277543128', '@bulakanAG004');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(300) NOT NULL,
  `pass_cust` varchar(300) NOT NULL,
  `nama_depan` varchar(300) NOT NULL,
  `nama_belakang` varchar(300) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `pass_cust`, `nama_depan`, `nama_belakang`, `no_hp`) VALUES
('cut@gmail.com', '12cut**', 'Cut', 'Febryanti', '081234534263'),
('raja@gmail.com', 'aaa', 'Raja', 'Putri Annisa', '081355263718'),
('tam@gmail.com', '123', 'Tamara', 'Soinda Putri', '082382472330');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `id_barang` int(200) NOT NULL,
  `pilihan_warna` varchar(300) NOT NULL,
  `jumlah_beli` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `email`, `id_barang`, `pilihan_warna`, `jumlah_beli`) VALUES
(1, 'tam@gmail.com', 10, 'putih', 2),
(2, 'tam@gmail.com', 13, 'navy', 1),
(3, 'tam@gmail.com', 11, 'abu-abu', 3),
(4, 'tam@gmail.com', 11, 'biru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `id_cs` int(200) NOT NULL,
  `area_cust` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `email`, `id_cs`, `area_cust`) VALUES
(1, 'tam@gmail.com', 3, '2'),
(2, 'tam@gmail.com', 3, '2'),
(3, 'tam@gmail.com', 4, '3');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(100) NOT NULL,
  `nama_toko` varchar(300) NOT NULL,
  `alamat_toko` varchar(300) NOT NULL,
  `kota` varchar(300) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_toko`, `alamat_toko`, `kota`, `no_hp`) VALUES
(1, 'Minang Jaya', 'Jl. Ahmad Yani blok B', 'Bukit Tinggi', '092354637282'),
(2, 'Ladyfame', 'jl. Anggrek 2', 'Lampung', '081265748392'),
(3, 'AdorableProjects', 'jl. Soekarno Hatta', 'Jakarta', '081234251787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `email` (`email`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `email` (`email`),
  ADD KEY `id_cs` (`id_cs`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `id_cs` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`email`) REFERENCES `customer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_cs`) REFERENCES `cs` (`id_cs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`email`) REFERENCES `customer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
