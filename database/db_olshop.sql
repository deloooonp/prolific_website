-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 06:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
(10, 'T-Shirt 1', 5, 200000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '1_1_T-shirt_001.png', 200),
(11, 'Hoodie Boxy Fit', 2, 400000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '2_1_Hoodie_Boxy_Fit_001.png', 200),
(12, 'Crop Hoodie', 2, 500000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '3_1_Crop_Hoodie_Black_001.png', 400),
(13, 'Boxy Oversized Hoodie', 2, 400000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '5_1_Boxy_Oversized_Hoodie_001.png', 300),
(14, 'Varsity', 4, 450000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '6_1_Varsity_001.png', 300),
(15, 'Varsity 2', 4, 550000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '7_1_Varsity_002.png', 300),
(16, 'T-Shirt 2', 5, 350000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', '8_1_T-Shirt_002.png', 200),
(17, 'Oversized Shirt', 10, 400000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', 'OVERSIZED_SHIRT_MOCKUP_FRONT_(1).png', 200),
(18, 'Oversized Tee', 10, 350000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', 'OVERSIZED_TEE_MOCKUP_FRONT.png', 200),
(19, 'Sweater Knit', 8, 450000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem blanditiis ab debitis dolorem a dolores doloribus nesciunt deserunt, veniam sequi aut soluta illo quod repudiandae perferendis ipsam assumenda laudantium neque! Quibusdam repudiandae et quaerat asperiores nesciunt dolorum, porro, nisi magni sequi, quas quos doloribus quae molestiae fugit rerum repellendus deserunt.', 'SWEATER_KNIT_Front.png', 400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
(1, 1, 'gambar 1', 'sepatu1.png'),
(4, 1, 'gambar 2', 'sepatuputih.png'),
(5, 10, 'T-shirt-2', '1_2_T-Shirt_001.png'),
(6, 11, 'hoodie-boxy-2', '2_2_Hoodie_Boxy_Fit_001.png'),
(7, 12, 'crop-hoodie-2', '3_2_Crop_Hoodie_White_001.png'),
(8, 12, 'crop-hoodie-3', '4__Crop_Hoodie_002.png'),
(9, 12, 'crop-hoodie-4', '9__Crop_Hoodie_003.png'),
(10, 13, 'boxy-oversized-2', '5_2_Boxy_Oversized_Hoodie_001.png'),
(12, 14, 'varsity1-2', '6_2_Varsity_001.png'),
(13, 15, 'varsity2-2', '7_2_Varsity_002.png'),
(14, 16, 'tshirt2-2', '8_2_T-Shirt_002.png'),
(15, 19, 'sweater-knit-back', 'SWEATER_KNIT_Back.png'),
(16, 18, 'oversiezd-tee-back', 'OVERSIZED_TEE_MOCKUP_BACK.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Hoodie'),
(4, 'Varsity'),
(5, 'T-Shirt'),
(8, 'Sweater'),
(10, 'Oversized Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `foto`) VALUES
(1, 'Delon', 'delon@gmail.com', 'delon123', 'foto_user.png'),
(2, 'pelanggan', 'pelanggan@gmail.com', '123', NULL),
(3, 'ww', 'ww@gmai', 'wwww', NULL),
(4, 'qq', 'qq@gmail.com', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '5738-3842-1238-4983', 'Prolific Store'),
(2, 'BCA', '3848-2828-1823', 'Delon Pratama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rinci_transaksi`
--

CREATE TABLE `tbl_rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(25) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rinci_transaksi`
--

INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `no_order`, `id_barang`, `qty`) VALUES
(16, '20241202OVBUVYIX', 1, 1),
(17, '202412067KLBXQH4', 18, 1),
(18, '202412067KLBXQH4', 17, 1),
(19, '202412067KLBXQH4', 19, 1),
(20, '20241206FQDBMCAU', 18, 1),
(21, '20241206FQDBMCAU', 11, 1),
(22, '20241206PJL7PFMU', 17, 1),
(23, '20241206TD5HNZUN', 18, 1),
(24, '20241207BN28RYCI', 19, 1),
(25, '202412100DYXBJYP', 19, 1),
(26, '202412188J4UIP15', 18, 1),
(27, '202412188J4UIP15', 16, 1),
(28, '20241218BZOABM2W', 19, 1),
(29, '20241219PIQD1YRZ', 18, 1),
(30, '20241220JS0BC5FX', 18, 1),
(31, '20241220JS0BC5FX', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telpon`) VALUES
(1, 'Prolific', 54, 'Jl. Kali Abang Tengah No.8, Perwira, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17122', '0895333689022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(25) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `hp_penerima` varchar(15) DEFAULT NULL,
  `provinsi` varchar(25) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(8) DEFAULT NULL,
  `expedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `status_order` int(1) DEFAULT NULL,
  `no_resi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `provinsi`, `kota`, `alamat`, `kode_pos`, `expedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_resi`) VALUES
(8, 1, '202412067KLBXQH4', '2024-12-06', 'ucup', '089593837223', 'Jawa Tengah', 'Kebumen', 'jalan jalan', '11132', 'jne', 'JTR', '4-5 Hari', 65000, 800, 1200000, 1265000, 1, 'contoh-bukti5.png', 'ucup', 'BRI', '8383-9922-3881', 3, 'TESTRESI1292929'),
(9, 1, '20241206FQDBMCAU', '2024-12-06', 'www', '059859593', 'Jawa Barat', 'Cianjur', 'www', '12121', 'jne', 'JTR', '4-5 Hari', 55000, 400, 750000, 805000, 1, 'contoh-bukti6.png', 'ww', 'BRI', '8383-9922-3881', 3, 'TESTRESI1292929'),
(16, 1, '20241219PIQD1YRZ', '2024-12-19', 'ucup3', '0895895895', 'DI Yogyakarta', 'Gunung Kidul', 'mm', '46788', 'jne', 'REG', '2-3 Hari', 22000, 200, 350000, 372000, 1, 'contoh-bukti10.png', 'ucupwwww', 'BNI', '2893-2928-3333', 3, 'TESTRESI1292929'),
(17, 1, '20241220JS0BC5FX', '2024-12-20', 'Delon', '121212121212', 'DKI Jakarta', 'Jakarta Barat', 'ww', '12121', 'jne', 'REG', '1-2 Hari', 10000, 500, 750000, 760000, 1, 'contoh-bukti11.png', 'ucup2', 'BRI', '8383-9922-3881', 3, 'TESTRESI1292929');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'delon', 'admin', 'admin', 1),
(2, 'budi', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
