-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 20.02
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
-- Database: `lostrug`
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
  `product_id` int(11) NOT NULL,
  `order_key` varchar(50) DEFAULT NULL,
  `order_numberphone` varchar(50) NOT NULL,
  `order_address` varchar(100) NOT NULL,
  `order_size` int(11) DEFAULT NULL,
  `order_amount` int(11) NOT NULL,
  `pesanan_ongkir` int(11) NOT NULL,
  `order_status` int(11) DEFAULT NULL,
  `order_payment` int(11) DEFAULT NULL,
  `order_total_price` int(11) DEFAULT NULL,
  `order_payment_method` varchar(50) DEFAULT NULL,
  `order_payment_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `product_id`, `order_key`, `order_numberphone`, `order_address`, `order_size`, `order_amount`, `pesanan_ongkir`, `order_status`, `order_payment`, `order_total_price`, `order_payment_method`, `order_payment_image`) VALUES
(30, 9, 1, '7103130307', '08127346512', 'jalan sumur batu jakarta pusat, kecamatan kemayoran', 43, 2, 20000, 4, 1, 469124, 'OVO', 'bukti.jpeg'),
(31, 9, 1, '6131760626', '081234596254', 'Jl kramat sentiong Gg1', 40, 1, 20000, 1, 0, 244489, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_info` varchar(50) NOT NULL,
  `product_image` varchar(50) DEFAULT NULL,
  `product_description` varchar(100) DEFAULT NULL,
  `product_stock` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_info`, `product_image`, `product_description`, `product_stock`, `product_price`) VALUES
(10, '\'You are under my control\'', 'T-shirt (black)', '1604991040283.jpg', NULL, 19, 189000),
(11, '\'Miracle of Struggle\'', 'T-shirt (white)', '1604991085067.jpg', NULL, 23, 189000),
(12, '\'Lost Struggle\'', 'T-shirt (black)', '1604991081160.jpg', NULL, 27, 189000);

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
