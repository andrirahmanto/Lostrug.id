-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 07.23
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logikalsupply`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL,
  `admin_image` varchar(50) DEFAULT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`, `active`) VALUES
(1, 'Andri Rahmanto', 'rahmanto660@gmail.com', 'andriboss', NULL, 0),
(3, 'Khulaifi Alkatsiri', 'leffi29@gmail.com', 'leffi123', NULL, 0),
(4, 'Resa Fajar Sukma', 'Resa31@gmail.com', 'resa123', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_numberphone` varchar(50) NOT NULL,
  `order_address` varchar(100) NOT NULL,
  `order_status` int(11) DEFAULT NULL,
  `order_payment` int(11) DEFAULT NULL,
  `order_total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `order_numberphone`, `order_address`, `order_status`, `order_payment`, `order_total_price`) VALUES
(1, 1, '08127346512', 'jalan buaran no 6 jakarta timur kecamatan buaran', 0, 0, 450000),
(2, 2, '081237654', 'jalan sumur batu jakarta pusat, kecamatan kemayoran', 0, 0, 465000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_product`
--

CREATE TABLE `order_product` (
  `op_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `op_size` int(50) NOT NULL,
  `op_amount` int(50) NOT NULL,
  `op_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_product`
--

INSERT INTO `order_product` (`op_id`, `order_id`, `product_id`, `op_size`, `op_amount`, `op_price`) VALUES
(1, 1, 1, 42, 1, 225000),
(2, 1, 2, 42, 1, 225000),
(3, 2, 2, 45, 1, 225000),
(4, 2, 3, 45, 1, 240000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pesanan_key` varchar(50) DEFAULT NULL,
  `pesanan_numberphone` varchar(50) NOT NULL,
  `pesanan_address` varchar(100) NOT NULL,
  `pesanan_size` int(11) DEFAULT NULL,
  `pesanan_amount` int(11) NOT NULL,
  `pesanan_ongkir` int(11) NOT NULL,
  `pesanan_status` int(11) DEFAULT NULL,
  `pesanan_payment` int(11) DEFAULT NULL,
  `pesanan_total_price` int(11) DEFAULT NULL,
  `pesanan_payment_method` varchar(50) DEFAULT NULL,
  `pesanan_payment_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `user_id`, `product_id`, `pesanan_key`, `pesanan_numberphone`, `pesanan_address`, `pesanan_size`, `pesanan_amount`, `pesanan_ongkir`, `pesanan_status`, `pesanan_payment`, `pesanan_total_price`, `pesanan_payment_method`, `pesanan_payment_image`) VALUES
(30, 9, 1, '7103130307', '08127346512', 'jalan sumur batu jakarta pusat, kecamatan kemayoran', 43, 2, 20000, 4, 1, 469124, 'OVO', 'bukti.jpeg'),
(31, 9, 1, '6131760626', '081234596254', 'Jl kramat sentiong Gg1', 40, 1, 20000, 1, 0, 244489, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_image` varchar(50) DEFAULT NULL,
  `product_description` varchar(100) DEFAULT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`) VALUES
(1, 'Ventela Public Low black', 'black.png', NULL, 225000),
(3, 'Ventela Public Low Dark Green', 'green.png', NULL, 240000),
(4, 'Ventela Public Low Maroon', 'maroon.png', NULL, 245000),
(6, 'Ventela Public Low Navy', 'navy.png', NULL, 240000),
(7, 'Ventela BTS 70\'s High Natural Black', 'hi_black-natural.png', NULL, 245000),
(8, 'Ventela BTS 70\'s High Dark Navy', 'hi_navy.png', NULL, 245000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `status_keterangan`) VALUES
(1, 'Menunggu Konfirmasi'),
(2, 'Pesanan Diproses'),
(3, 'Pesanan Dikirim'),
(4, 'Pesanan Selesai'),
(5, 'Pesanan Dibatalkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_image` varchar(50) DEFAULT NULL,
  `user_numberphone` varchar(50) DEFAULT NULL,
  `user_address` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modifed` date DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_image`, `user_numberphone`, `user_address`, `created`, `modifed`, `active`) VALUES
(9, 'Andri Rahmanto', 'rahmanto660@gmail.com', NULL, NULL, NULL, NULL, '2020-10-25', '2020-10-25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`op_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `order_product`
--
ALTER TABLE `order_product`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
