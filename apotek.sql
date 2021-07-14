-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 05:49 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
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
  `deskripsi` text DEFAULT NULL,
  `komposisi` text DEFAULT NULL,
  `manfaat` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `komposisi`, `manfaat`, `gambar`, `berat`) VALUES
(1, 'Paracetamol 500mg', 1, 5000, 'Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk meredakan sakit kepala dan nyeri ringan, serta demam. Obat digunakan sebagian besar sebagai obat resep untuk analgesik dan flu.', 'Setiap tablet mengandung Paracetamol 500 mg', 'Obat ini digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, sakit gigi, nyeri otot, serta menurunkan demam.\r\n', 'paracetamol1.png', 500),
(2, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(3, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(4, 'Paracetamol 500mg', 1, 5000, 'Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk meredakan sakit kepala dan nyeri ringan, serta demam. Obat digunakan sebagian besar sebagai obat resep untuk analgesik dan flu.', 'Setiap tablet mengandung Paracetamol 500 mg', 'Obat ini digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, sakit gigi, nyeri otot, serta menurunkan demam.\r\n', 'paracetamol1.png', NULL),
(5, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(6, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(7, 'Paracetamol 500mg', 1, 5000, 'Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk meredakan sakit kepala dan nyeri ringan, serta demam. Obat digunakan sebagian besar sebagai obat resep untuk analgesik dan flu.', 'Setiap tablet mengandung Paracetamol 500 mg', 'Obat ini digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, sakit gigi, nyeri otot, serta menurunkan demam.\r\n', 'paracetamol1.png', NULL),
(8, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(9, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(10, 'Paracetamol 500mg', 2, 5000, 'Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk meredakan sakit kepala dan nyeri ringan, serta demam. Obat digunakan sebagian besar sebagai obat resep untuk analgesik dan flu.', 'Setiap tablet mengandung Paracetamol 500 mg', 'Obat ini digunakan untuk meredakan nyeri ringan hingga sedang seperti sakit kepala, sakit gigi, nyeri otot, serta menurunkan demam.\r\n', 'paracetamol1.png', NULL),
(11, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(12, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(13, 'Viks VapoRub', 1, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL),
(14, 'Viks VapoRub', 2, 7000, 'Vicks VapoRub adalah salep oles mentol, yang merupakan bagian dari merek obat bebas Vicks yang dimiliki oleh perusahaan barang konsumen Amerika, Procter & Gamble. VapoRub dimaksudkan untuk digunakan pada dada, punggung, dan tenggorokan untuk menekan batuk atau pada otot dan persendian untuk sakit dan nyeri ringan.', 'Camphor 1315 mg, menthol 705 mg, eucalyptus oil 332.5 mg.', 'Membantu meringankan gejala flu untuk dewasa dan anak diatas 2 tahun. Dewasa dan anak di atas usia 2 tahun digunakan sesuai dengan kebutuhan.', 'viks1.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sedang'),
(2, 'Berat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `name`, `email`, `password`, `foto`, `date_created`, `is_active`) VALUES
(6, 'Wisnu', 'wisnusullivan7@gmail.com', '$2y$10$4dnKjxB.AyG/YjsJlV8pZ.KMhNiiCNT4YRSI7w2j5BK1fJpSie/UG', 'default.jpg', 1626159658, 0),
(7, 'Wisnu', 'valentinowisnu46@gmail.com', '$2y$10$GAdxi64UONPq/0N8iItOZOfjFNzBmE7AptFAuPeJ8C40eH.SqBAsa', 'default.png', 1626159748, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `id_resep` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `resep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resep`
--

INSERT INTO `tbl_resep` (`id_resep`, `email`, `resep`) VALUES
(1, 'valentinowisnu46@gmail.com', 'Screenshot_2020-11-30_190417.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rinci_transaksi`
--

CREATE TABLE `tbl_rinci_transaksi` (
  `no_order` varchar(255) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rinci_transaksi`
--

INSERT INTO `tbl_rinci_transaksi` (`no_order`, `id_barang`, `qty`) VALUES
('20210713VAPUT5BK', 1, 2),
('20210713VAPUT5BK', 2, 1),
('20210713OHGBWIY1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_toko` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telpon`) VALUES
(1, 'ssdfsfs', 152, 'fwewfwfw', '14243413523532');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(255) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `hp_penerima` varchar(15) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `expedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `atas_nama` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `no_rek` varchar(255) DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `no_resi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `provinsi`, `kota`, `alamat`, `kode_pos`, `expedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_resi`) VALUES
(1, 3, '20210713VAPUT5BK', '2021-07-13', 'Jermain', '12453467587', 'Bali', '17', 'sfsfs', '131313', 'jne', 'OKE', '3-6 Hari', 27000, 1000, 17000, 44000, 1, 'foto.jpg', 'Jerman', 'BRI', '1234567', 3, '202106296UM7QOJG'),
(2, NULL, '20210713OHGBWIY1', '2021-07-13', 'Jermain', '12453467587', 'Bali', '17', 'sfsfs', '131313', 'jne', 'OKE', '3-6 Hari', 27000, 500, 5000, 32000, 1, 'fallen1.png', 'Wisnu', 'BRI', '1234567', 3, '213465787fgdge');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'wisnusullivan7@gmail.com', '2d31caf3aef05bc77b805bb7c2b68227958147c0a36df801c00af21ce8d69e25', 1626159497),
(2, 'wisnusullivan7@gmail.com', 'c91193a89f269c347cfb88753d9980b70a691f097e718ee3c020105c269f11d2', 1626159658),
(4, 'valentinowisnu46@gmail.com', '2FKT6FyHv/2NwpG4+xT5KnlNSWpmpSsmT+OICfM/vh4=', 1626222486),
(5, 'valentinowisnu46@gmail.com', 'X3lDLBk+sZHFkWwAx8o6wkDWQ+z83BRIeVJeHV6tssQ=', 1626222670),
(6, 'valentinowisnu46@gmail.com', 'vHBY7UDNBe1X7THhH6n6DQhy5QAPTPRS9QCPh6p/f4E=', 1626222688);

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
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`id_resep`);

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
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
