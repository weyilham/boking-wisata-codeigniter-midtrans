-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 04:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kategori`
--

CREATE TABLE `tb_detail_kategori` (
  `id_detail_kategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(120) NOT NULL,
  `fasilitas` varchar(120) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_kategori`
--

INSERT INTO `tb_detail_kategori` (`id_detail_kategori`, `id_kategori`, `jenis_kategori`, `fasilitas`, `kapasitas`, `harga`, `gambar`) VALUES
(1, 1, 'Paket Hemat 1 Hari', 'Kolam Renang, Memberi Makan Hewan, Welcome drink, Snack 2x', 1, 60000, '22.jpg'),
(2, 1, 'Paket Dewasa', 'Flying Fox, Kolam Renang, Kelapa Muda', 1, 35000, 'fly.jpg'),
(3, 1, 'Paket Keluarga', 'Memberi Makan Hewan, Kolam renang, welcome drink, makan Besar 1x, Snack dan Tikar', 15, 250000, '24.jpg'),
(4, 2, 'Camping Ground', '1 Tenda dump, 4 Materas, 4 Sleeping bag, Snack, Makan besar 3x', 4, 275000, '21.jpg'),
(5, 2, 'Family Gathering', 'Homestay 1 Malam, Akomodasi, Flying fox, memberi Makan Hewan, Snack 3x, Makan Besar 3x, Air Mineral, Mobil Wisata', 22, 450000, 'family.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Paket 1 Hari Tetap'),
(2, 'Paket Bermalam'),
(4, 'Makanan Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gambar` varchar(120) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `no_hp`, `alamat`, `jk`, `tgl_lahir`, `gambar`, `role`) VALUES
(1, 'Aat', 'aat@gmail.com', 'aat', '0812736424', 'Petir', 'Laki-laki', '2021-07-07', 'default.jpg', 2),
(2, 'Hasbi', 'hasbi.jpg', 'hasbi', '0877771264', 'Pandeglang', 'Laki-laki', '2021-07-13', 'default.jpg', 2),
(3, 'dani Nasichin', 'dani@gmail.com', 'dani', '08777162533', 'Pandeglang', NULL, '2021-07-22', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `order_id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `jenis_pembayaran` varchar(120) NOT NULL,
  `bank` char(20) NOT NULL,
  `va_number` varchar(120) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tgl_pesan` varchar(20) NOT NULL,
  `intruksi` varchar(200) NOT NULL,
  `status_pembayaran` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`order_id`, `id_pelanggan`, `jenis_pembayaran`, `bank`, `va_number`, `total_bayar`, `tgl_pesan`, `intruksi`, `status_pembayaran`) VALUES
(151269148, 3, 'bank_transfer', 'bca', '48050618025', 95000, '2021-07-10 00:03:57', 'https://app.sandbox.midtrans.com/snap/v1/transactions/271b2d8c-3121-4b40-b7cd-03c5bb4ae486/pdf', 'settlement'),
(246002772, 3, 'bank_transfer', 'bca', '48050188752', 60000, '2021-07-21 18:47:22', 'https://app.sandbox.midtrans.com/snap/v1/transactions/f3971987-1747-4fcf-91a3-84ef254ba2a6/pdf', 'expire'),
(544388347, 3, 'bank_transfer', 'bca', '48050258431', 215000, '2021-07-08 01:40:51', 'https://app.sandbox.midtrans.com/snap/v1/transactions/18e3a783-6b88-4f91-a4c4-a730919b72ab/pdf', 'settlement'),
(797500623, 3, 'bank_transfer', 'bca', '48050039312', 155000, '2021-07-08 01:39:11', 'https://app.sandbox.midtrans.com/snap/v1/transactions/14bc0289-ecef-4a22-b00e-b3f5f2e78912/pdf', 'expire'),
(822958396, 3, 'bank_transfer', 'bca', '48050549636', 285000, '2021-07-08 03:31:32', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ac898b26-ef92-4d42-83e0-e1ab55016d33/pdf', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `gambar`, `role`) VALUES
(1, 'Ilham maulana', 'ilham@gmail.com', 'ilham', 'iam.jpg', 1),
(3, 'Ahmad', 'yani@gmail.com', 'yani', 'uing.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_kategori`
--
ALTER TABLE `tb_detail_kategori`
  ADD PRIMARY KEY (`id_detail_kategori`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_kategori`
--
ALTER TABLE `tb_detail_kategori`
  MODIFY `id_detail_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=822958397;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
