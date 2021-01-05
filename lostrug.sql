-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 20.02
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
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Andri Rahmanto', 'rahmanto660@gmail.com', 'andriboss', NULL, NULL, NULL, NULL),
(3, 'Khulaifi Alkatsiri', 'leffi29@gmail.com', 'leffi1234', NULL, NULL, '2021-01-01', NULL),
(4, 'Resa Fajar Sukma', 'resa31@gmail.com', 'resa12345', NULL, NULL, '2021-01-01', NULL),
(8, 'Lazuardy', 'lazu08@gmail.com', 'lazu1234', NULL, '2021-01-01', '2021-01-01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_email` varchar(50) DEFAULT NULL,
  `log_role` varchar(50) DEFAULT NULL,
  `log_activity` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`log_id`, `log_email`, `log_role`, `log_activity`, `created_at`) VALUES
(1, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-01'),
(2, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-01'),
(3, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-01'),
(4, 'rahmanto660@gmail.com', 'admin', 'edit admin #4', '2021-01-01'),
(5, 'rahmanto660@gmail.com', 'admin', 'create admin #8', '2021-01-01'),
(6, 'rahmanto660@gmail.com', 'admin', 'delete user zaidan13@gmail.com', '2021-01-01'),
(7, 'rahmanto660@gmail.com', 'admin', 'delete user zaidan13@gmail.com', '2021-01-01'),
(8, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-01'),
(9, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-01'),
(10, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-01'),
(11, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-01'),
(12, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-01'),
(13, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-01'),
(14, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-02'),
(15, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-02'),
(16, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-02'),
(17, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-02'),
(18, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-02'),
(19, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-03'),
(20, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-03'),
(21, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-03'),
(22, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-03'),
(23, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-04'),
(24, 'rahmanto660@gmail.com', 'admin', 'edit order #31', '2021-01-04'),
(25, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-04'),
(26, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-04'),
(27, 'rahmanto660@gmail.com', 'admin', 'edit order #31', '2021-01-04'),
(28, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-04'),
(29, 'rahmanto660@gmail.com', 'user', 'Login', '2021-01-05'),
(30, 'rahmanto660@gmail.com', 'user', 'Login', '2021-01-05'),
(31, 'rahmanto660@gmail.com', 'user', 'Logout', '2021-01-05'),
(32, 'rolexindo.no1@gmail.com', 'user', 'Create Account', '2021-01-05'),
(33, 'rolexindo.no1@gmail.com', 'user', 'Order #6162992445', '2021-01-05'),
(34, 'rolexindo.no1@gmail.com', 'user', 'Payment and upload a proof #6162992445', '2021-01-05'),
(35, 'rolexindo.no1@gmail.com', 'user', 'Cancel Order #6162992445', '2021-01-05'),
(36, 'rolexindo.no1@gmail.com', 'user', 'Logout', '2021-01-05'),
(37, 'rahmanto660@gmail.com', 'admin', 'login', '2021-01-05'),
(38, 'rahmanto660@gmail.com', 'admin', 'edit order #35', '2021-01-05'),
(39, 'rahmanto660@gmail.com', 'admin', 'delete product #26', '2021-01-05'),
(40, 'rahmanto660@gmail.com', 'admin', 'logout', '2021-01-05');

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
  `order_size` varchar(11) DEFAULT NULL,
  `order_amount` int(11) NOT NULL,
  `order_ongkir` int(11) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `order_payment` int(11) DEFAULT NULL,
  `order_total_price` int(11) DEFAULT NULL,
  `order_payment_method` varchar(50) DEFAULT NULL,
  `order_payment_image` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `product_id`, `order_key`, `order_numberphone`, `order_address`, `order_size`, `order_amount`, `order_ongkir`, `status_id`, `order_payment`, `order_total_price`, `order_payment_method`, `order_payment_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(30, 9, 11, '7103130307', '08127346512', 'jalan sumur batu jakarta pusat, kecamatan kemayoran', 'S', 2, 20000, 4, 1, 469124, 'OVO', 'bukti.jpeg', '2021-01-01', NULL, NULL),
(31, 9, 10, '6131760626', '081234596254', 'Jl kramat sentiong Gg1', 'L', 11, 20000, 1, 0, 244489, NULL, NULL, '2021-01-01', '2021-01-04', NULL),
(32, 9, 12, '6131760342', '08127346512', 'Jl kramat sentiong Gg1', 'XL', 2, 10000, 1, 0, 388000, NULL, NULL, '2021-01-01', NULL, NULL),
(34, 9, 10, '4009626571', '082112728338', 'Jl.kramat sentiong Gg1 no.H75B Kel.Kramat Kec.Senen ', 'S', 1, 15000, 1, 0, 204000, NULL, NULL, '2021-01-05', '2021-01-05', NULL);

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
  `product_price` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_info`, `product_image`, `product_description`, `product_stock`, `product_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, '\'You are under my control\'', 'T-shirt (black)', '1604991040283.jpg', NULL, 19, 189000, NULL, NULL, NULL),
(11, '\'Miracle of Struggle\'', 'T-shirt (white)', '1604991085067.jpg', NULL, 23, 189000, NULL, NULL, NULL),
(12, '\'Lost Struggle\'', 'T-shirt (black)', '1604991081160.jpg', NULL, 27, 189000, NULL, NULL, NULL);

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
(1, 'waiting for payment'),
(2, 'processed'),
(3, 'in shipping'),
(4, 'finished'),
(5, 'canceled');

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
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_image`, `user_numberphone`, `user_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'Andri Rahmanto', 'rahmanto660@gmail.com', NULL, NULL, NULL, NULL, '2020-10-25', '2020-10-25', NULL),
(10, 'Lazuardy Katulistiwa', 'lazu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Andri R', 'andrirahmanto777@gmail.com', NULL, NULL, NULL, NULL, '2021-01-03', '2021-01-03', NULL),
(15, 'IR No1', 'rolexindo.no1@gmail.com', NULL, NULL, NULL, NULL, '2021-01-05', '2021-01-05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
