-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Okt 2020 pada 04.57
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos_ci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `phone`, `address`, `created`, `updated`) VALUES
(1, 'Syaiful', 'L', '08788', 'Jakarta', '2020-04-29 04:58:47', '2020-04-30 21:24:14'),
(2, 'Abang', 'L', '0898989898', 'jakarta', '2020-04-29 17:46:33', NULL),
(3, 'adek', 'L', '09899099', 'bekasi', '2020-04-29 17:46:56', '2020-04-30 21:09:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`) VALUES
(2, 'Kelontong', '2020-04-29 19:40:13', '2020-04-29 15:34:46'),
(3, 'Minuman', '2020-04-29 20:50:25', NULL),
(4, 'Makanan', '2020-04-29 20:50:30', '2020-04-30 15:28:29'),
(5, 'Masakan', '2020-05-02 02:20:39', NULL),
(6, 'Cepat Saji', '2020-05-02 02:20:47', NULL),
(7, 'ATK', '2020-05-02 02:20:56', NULL),
(8, 'Fashion', '2020-05-02 02:21:07', NULL),
(9, 'Elektronik', '2020-05-02 02:21:16', NULL),
(10, 'Pecah Belah', '2020-05-02 02:21:34', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT '0',
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `image`, `created`, `updated`) VALUES
(2, 'BRCD000455454454', 'Susu Kotak', 2, 2, 125000, 99, 'item-200430-e0a8c640c4.jpg', '2020-04-29 23:48:31', '2020-04-30 16:51:00'),
(4, 'BRC000455454454', 'Mie', 2, 1, 250000, 0, 'item-200430-3b720270d6.jpg', '2020-04-30 22:28:11', '2020-04-30 16:51:30'),
(6, 'BRC00046', 'Power Amplifier', 2, 2, 5000000, 2, 'item-200430-2bff6b4a8f.jpg', '2020-04-30 23:20:02', NULL),
(7, 'BRC0004522', 'Product 1', 3, 2, 1900, 10, 'item-200501-c5eb96592d.jpg', '2020-05-01 16:11:36', NULL),
(8, 'BRCD000455454453', 'Product 2', 3, 1, 30000, 90, 'item-200501-14df54b32a.jpg', '2020-05-01 16:12:07', NULL),
(9, 'BRCD000455454451', 'Product 3', 2, 2, 24544, 12, 'item-200501-0b937c491a.jpg', '2020-05-01 16:12:31', NULL),
(10, 'BRCD000455454450', 'Product 4', 3, 2, 10000, 80, 'item-200501-ab57c79a9c.jpg', '2020-05-01 16:12:56', NULL),
(11, 'BRCD000455451', 'Product 5', 3, 2, 100000, 11, 'item-200501-81c6821983.jpg', '2020-05-01 16:13:54', NULL),
(12, 'BRC000455454455', 'Product 6', 2, 1, 50000, 0, 'item-200501-24a27daf0f.jpg', '2020-05-01 16:14:34', NULL),
(13, 'BRC0004554544533', 'Product 7', 4, 2, 40000, 109, 'item-200501-fac2e5b9c2.jpg', '2020-05-01 16:15:04', NULL),
(14, 'BRC0004554544511', 'Product 7', 4, 1, 67000, 10, 'item-200501-67f6463c46.png', '2020-05-01 16:15:34', NULL),
(15, 'BRC000455454456', 'Product 8', 3, 2, 45000, 0, 'item-200501-639fe80d10.png', '2020-05-01 16:16:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(1, 'Lusin', '2020-04-29 21:13:38', '2020-04-29 14:33:11'),
(2, 'Buah', '2020-04-29 21:13:59', '2020-04-29 14:33:19'),
(3, 'Bungkus', '2020-05-02 02:21:48', NULL),
(4, 'Sachet', '2020-05-02 02:22:04', NULL),
(5, 'Batang', '2020-05-02 02:22:12', NULL),
(6, 'Slop', '2020-05-02 02:22:22', NULL),
(7, 'Meter', '2020-05-02 02:22:40', NULL),
(8, 'Kilogram', '2020-05-02 02:22:49', NULL),
(9, 'Kubik', '2020-05-02 02:23:04', NULL),
(10, 'Liter', '2020-05-02 02:23:10', NULL),
(11, 'Pcs', '2020-05-02 02:23:28', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(1, 'Toko Sinar Terang', '0219995399', 'Jakarta', 'Toko Elektronik', '2020-04-27 23:10:30', '2020-05-01 19:24:36'),
(3, 'Toko Buah', '90900909', 'Jakarta', 'Toko Buah Segar', '2020-04-27 23:30:07', '2020-05-01 19:24:49'),
(4, 'Toko Serba Ada', '08568183606', 'Jakarta', 'Toko Klontong', '2020-04-28 00:18:20', '2020-05-01 19:25:06'),
(8, 'Toko Pada Suka', '987987080', 'Bekasi', 'Toko Emas', '2020-04-29 20:50:09', '2020-05-01 19:25:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `customer_id`, `total_price`, `discount`, `final_price`, `cash`, `remaining`, `note`, `date`, `user_id`, `created`) VALUES
(1, 'MP2005030001', 1, 500000, 50000, 450000, 1000000, 40000, '', '2020-05-03', 1, '2020-05-03 11:53:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(255) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(11, 9, 'in', 'kulakan', 3, 12, '2020-05-01', '2020-05-02 02:19:04', 1),
(18, 13, 'in', 'tambahan', NULL, 100, '2020-05-03', '2020-05-03 13:36:23', 1),
(19, 11, 'in', 'tambahan', 3, 10, '2020-05-03', '2020-05-03 13:42:23', 1),
(20, 7, 'in', 'tambahan', 1, 10, '2020-05-03', '2020-05-03 15:04:55', 1),
(21, 14, 'in', 'tambahan', 3, 10, '2020-05-03', '2020-05-03 15:05:10', 1),
(22, 2, 'in', 'tambahan', 8, 99, '2020-05-03', '2020-05-03 15:05:32', 1),
(23, 8, 'in', 'tambahan', 4, 90, '2020-05-03', '2020-05-03 15:05:50', 1),
(24, 10, 'in', 'kulakan', 4, 80, '2020-05-03', '2020-05-03 15:06:07', 1),
(25, 6, 'in', 'kulakan', 1, 2, '2020-05-03', '2020-05-03 15:06:30', 1),
(26, 13, 'in', 'tambahan', 1, 9, '2020-05-24', '2020-05-25 06:43:19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin,2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Syaiful Kiara', 'Bekasi', 1),
(2, 'kasir1', '874c0ac75f323057fe3b7fb3f5a8a41df2b94b1d', 'syaifulkiara', 'Jakarta', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indeks untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indeks untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indeks untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`);

--
-- Ketidakleluasaan untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`),
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
