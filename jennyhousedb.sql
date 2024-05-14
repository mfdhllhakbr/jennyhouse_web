-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Mar 2023 pada 08.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jennyhousedb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, '2010511005', '$2y$10$e2u4NGFb5fLGL067IVDdPO347D8EvrOsP.bohotxaYhNoH7.3Cewe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `merek_produk` varchar(225) NOT NULL,
  `ukuran_produk` varchar(10) NOT NULL,
  `stock_produk` int(20) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `kategori_produk` varchar(100) NOT NULL,
  `gambar_produk` varchar(100) DEFAULT NULL,
  `deksripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`productid`, `nama_produk`, `merek_produk`, `ukuran_produk`, `stock_produk`, `harga_produk`, `kategori_produk`, `gambar_produk`, `deksripsi`) VALUES
(1, 'Hydrokeratin Essence Mist', 'Jennyhouse', '95ml', 96, 395000, 'Haircare', 'Hydrokeratin Essence Mist [95ml] (1).png', 'Essence Mist to nourishes hair, provides a protective layer and gives hair a smooth texture'),
(2, 'New Ultra Fit Serum Cushion No.21', 'Jennyhouse', '12gr', 50, 682300, 'Cosmetic', 'New Ultra Fit Serum Cushion No. 21 [12g] (1).png', 'Perfect coverage with a natural and dewy finish. Contains 64% serum and hyaluronic acid. Ultra Fit Serum Foundation contains SPF 50+ PA+++.'),
(3, 'Air Fit Lipstick', 'Jennyhouse', '5gr', 66, 355300, 'Cosmetic', 'Air Fit Lipstik (1).png', 'Lipstick with a vegan matte finish with an air-light texture that lasts all day for up to 8 hours straight. 8 colors.'),
(4, 'Air Fit Artist Shadow', 'Jennyhouse', '2gr', 0, 272800, 'Cosmetic', 'Air Fit Artist Shadow 01 Baby Peach (1).png', 'Eye shadow formulated with vegan ingredients with a light texture and elegant color and a matte finish. Consists of 6 colors.'),
(5, 'Premium Hair Color', 'Jennyhouse', '22gr', 67, 310000, 'Haircare', 'haircolor jh.PNG (2).png', 'Hair dye with selected color variants of Jennyhouse Salon Korea which is made with natural CICA ingredients to maintain healthy scalp and hair'),
(6, 'Hydrokeratin Curl Serum', 'Jennyhouse', '150ml', 43, 395500, 'Haircare', 'Hydrokeratin Curl Serum [150ml] (2).png', 'Specially formulated for the problem of hair loss, dry, damaged, split ends caused by coloring and styling'),
(7, 'New Ultra Fit Serum Cushion No.23', 'Jennyhouse', '12gr', 2, 682300, 'Cosmetic', 'New Ultra Fit Serum Cushion No. 23 [12g] 2 (1).png', 'Sepatu lari wanita yang diperbarui ini memanfaatkan teknologi bantalan canggih kami, memberi Anda pengendaraan yang lembut dan mulus dari awal hingga akhir.'),
(8, 'Jewel Fit Eye Shadow', 'Jennyhouse', '2gr', 100, 346200, 'Cosmetic', 'Jewel Fit Eye Shadow [2g] (1).png', 'Gives a glitter effect to each of his writings. This eyeshadow with 6 color choices is packaged in a square case that is practical to carry and suitable for all skin types.'),
(9, 'Color & Tinted Lip Balm', 'Jennyhouse', '24gr', 65, 335300, 'Cosmetic', 'Color _ Tinted Lip Balm 3 Types [5g] (1).png', 'Made with natural ingredients and long lasting. This lip balm also has a melting texture, and dissolves when touched gently. 3 colors.'),
(10, 'Rebak Style Repair Treatment', 'Jennyhouse', '230ml', 77, 528500, 'Haircare', 'Rebak Style Repair Treatment [230ml] (1).png', 'Treatment that functions to reduce the symptoms of hair loss by containing 98% natural ingredients'),
(11, 'Jewel Fit Blush Blooming Shine', 'Jennyhouse', '10gr', 45, 519500, 'Skincare', 'Jewel Fit Blush Blooming Shine [10g] (1).png', 'Formulated with vegan ingredients that can give a bright and natural blush effect on the face. This blusher has a light and soft texture and is easy to apply'),
(12, 'Rebak Style Repair Shampoo', 'Jennyhouse', '400ml', 100, 587200, 'Haircare', 'Rebak Style Repair Shampoo [400ml] (1).png', 'Moisturizing and caring for each strand so that your hair is healthy and shin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transactionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `buktitransfer` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Proses Verifikasi',
  `notelepon` varchar(20) NOT NULL,
  `tanggaltrans` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userid`, `nama`, `email`, `username`, `password`, `alamat`) VALUES
(1, 'Muhammad Fadhillah Akbar', 'mfadhillahakbar14@gmail.com', 'mfdhllhakbr', '$2y$10$e2u4NGFb5fLGL067IVDdPO347D8EvrOsP.bohotxaYhNoH7.3Cewe', 'Jalan Bundaran Akbar No.28, Jakarta Pusat, 10630');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
