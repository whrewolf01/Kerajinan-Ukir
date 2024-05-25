-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 12:44 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerajinan_ukir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`, `email`, `no_hp`) VALUES
('11', 'Yoga', 'yogaswara11', 'agoy11', 'yogaswara11@gmail.com', 2131313131);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pesanan`
--

CREATE TABLE `tb_detail_pesanan` (
  `id_detailpesanan` varchar(50) NOT NULL,
  `id_produk` varchar(50) NOT NULL,
  `id_pesanan` varchar(50) NOT NULL,
  `id_sales` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `harga_satuan` varchar(50) NOT NULL,
  `subtotal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_detailpesanan`, `id_produk`, `id_pesanan`, `id_sales`, `quantity`, `harga_satuan`, `subtotal`) VALUES
('1', '1102', '1', '1110', '1', '1000000', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_distributor`
--

CREATE TABLE `tb_distributor` (
  `id_distributor` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_distributor`
--

INSERT INTO `tb_distributor` (`id_distributor`, `nama`, `username`, `password`, `email`, `no_hp`) VALUES
('1', 'anza', 'anzazidan', 'zidan12345', 'anzazidan@gmail.com', '08523244129');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `kota`, `provinsi`, `email`, `no_hp`) VALUES
('1111', 'fahri', 'mekar jaya', 'batu', 'jatim', 'fahri@gmail.com', '8523244129');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` varchar(50) NOT NULL,
  `id_pesanan` varchar(50) NOT NULL,
  `id_distributor` varchar(50) NOT NULL,
  `tanggal_pengiriman` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `status_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`id_pengiriman`, `id_pesanan`, `id_distributor`, `tanggal_pengiriman`, `metode_pembayaran`, `no_resi`, `status_pengiriman`) VALUES
('1', '1', '1', '12/12/2024', 'Cash', '88776432345678', 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` varchar(50) NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `tanggal_pemesanan` varchar(50) NOT NULL,
  `status_pesanan` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `alamat_pengiriman` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_pelanggan`, `tanggal_pemesanan`, `status_pesanan`, `total_harga`, `alamat_pengiriman`, `metode_pembayaran`, `created_at`, `updated_at`) VALUES
('1', '1111', '12/11/2023', 'selesai', '500000', 'Batu', 'Cash', NULL, NULL),
('1222', '1111', '12/11/2022', 'sedang dalam perjalanan', '150000000', 'Malang', 'Cash', '2024-05-25 04:56:13', '2024-05-25 04:56:13'),
('1332', '1111', '12/11/2022', 'otw', '120000', 'Malang', 'COD', '2024-05-25 05:08:05', '2024-05-25 05:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `stok`, `kategori`, `created_at`, `updated_at`) VALUES
('1011', 'Ukiran Bantengan', 'full ukir dan tanduk asli', '1500000', '10', 'kesenian', NULL, '2024-05-25 03:24:58'),
('1102', 'Naga', 'Bentuk Naga', '1000000', '10', 'ukiran', NULL, NULL),
('1332', 'Meja', 'Furnitur', '100000', '10', 'Ukiran', '2024-05-25 05:10:28', '2024-05-25 05:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales`
--

CREATE TABLE `tb_sales` (
  `id_sales` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_sales`
--

INSERT INTO `tb_sales` (`id_sales`, `nama`, `username`, `password`, `email`, `no_hp`) VALUES
('1110', 'fahri', 'fahri11', 'irhaf11', 'fahri11@gmail.com', '234567123432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indexes for table `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD PRIMARY KEY (`id_detailpesanan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_sales` (`id_sales`);

--
-- Indexes for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  ADD PRIMARY KEY (`id_distributor`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_distributor` (`id_distributor`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD CONSTRAINT `tb_detail_pesanan_ibfk_1` FOREIGN KEY (`id_sales`) REFERENCES `tb_sales` (`id_sales`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  ADD CONSTRAINT `tb_distributor_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `tb_pengiriman` (`id_distributor`);

--
-- Constraints for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD CONSTRAINT `tb_pengiriman_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `tb_pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
