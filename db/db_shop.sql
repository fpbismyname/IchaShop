-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 09:58 PM
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
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `kategori_id`, `nama`, `harga`, `detail`, `image`) VALUES
(80, 1, 'Baju Pria boys1', 100000, 'Baju pria boys1, nyaman dan stylish.', '../img/boys1.png'),
(81, 1, 'Baju Pria boys2', 120000, 'Baju pria boys2, terbuat dari bahan berkualitas tinggi.', '../img/boys2.png'),
(82, 1, 'Baju Pria boys3', 110000, 'Baju pria boys3, cocok untuk acara santai.', '../img/boys3.png'),
(83, 1, 'Baju Pria boys4', 130000, 'Baju pria boys4, desain modern dan trendi.', '../img/boys4.png'),
(84, 1, 'Baju Pria boys5', 115000, 'Baju pria boys5, sangat nyaman dipakai.', '../img/boys5.png'),
(85, 1, 'Baju Pria boys6', 125000, 'Baju pria boys6, pilihan tepat untuk gaya Anda.', '../img/boys6.png'),
(86, 1, 'Baju Pria boys7', 105000, 'Baju pria boys7, tahan lama dan mudah dicuci.', '../img/boys7.png'),
(87, 1, 'Baju Pria boys8', 140000, 'Baju pria boys8, bahan lembut dan tidak panas.', '../img/boys8.png'),
(88, 2, 'Kemeja Floral Cantik - Girls1', 150000, 'Kemeja wanita model loose fit dengan motif bunga berwarna pink. Cocok untuk dipakai ke kantor, hangout, atau acara lainnya.', '../img/girls1.png'),
(89, 2, 'Baju Stripes Simpel - Girls2', 180000, 'Baju wanita model stripes berwarna biru. Cocok untuk dipakai sehari-hari atau ke acara kasual.', '../img/girls2.png'),
(90, 2, 'Polka Dot Klasik - Girls3', 120000, 'Baju wanita model polka dot berwarna putih. Cocok untuk dipakai ke acara formal atau semi-formal.', '../img/girls3.png'),
(91, 2, 'Hitam Elegan - Girls4', 100000, 'Baju wanita model plain berwarna hitam. Cocok untuk dipakai ke berbagai acara.', '../img/girls4.png'),
(92, 2, 'Oversized Nyaman - Girls5', 200000, 'Baju wanita model oversized berwarna abu-abu. Cocok untuk dipakai saat santai atau bepergian.', '../img/girls5.png'),
(93, 2, 'Merah Ceria - Girls6', 130000, 'Baju wanita model casual berwarna merah. Cocok untuk dipakai ke hangout atau acara santai lainnya.', '../img/girls6.png'),
(94, 2, 'Crop Top Kekinian - Girls7', 160000, 'Baju wanita model crop top berwarna kuning. Cocok untuk dipakai ke festival musik atau acara trendi lainnya.', '../img/girls7.png'),
(95, 2, 'Long Dress Menawan - Girls8', 250000, 'Baju wanita model long dress dengan motif bunga. Cocok untuk dipakai ke acara spesial atau romantis.', '../img/girls8.png'),
(96, 2, 'T-Shirt Grafis Unik - Girls9', 100000, 'Baju wanita model t-shirt dengan desain grafis unik. Cocok untuk dipakai sehari-hari atau untuk menunjukkan gaya personal.', '../img/girls9.png'),
(97, 2, 'Hoodie Hangat - Girls10', 180000, 'Baju wanita model hoodie oversized. Cocok untuk dipakai saat cuaca dingin atau untuk gaya kasual.', '../img/girls10.png'),
(98, 2, 'Jumpsuit Denim Stylish - Girls11', 220000, 'Baju wanita model jumpsuit denim. Cocok untuk dipakai saat bepergian atau untuk gaya modis.', '../img/girls11.png'),
(99, 2, 'Mini Skirt Plaid Lucu - Girls12', 150000, 'Baju wanita model rok mini plaid. Cocok untuk dipakai ke acara casual atau untuk gaya preppy.', '../img/girls12.png'),
(100, 2, 'High Waist Pants Modis - Girls13', 120000, 'Baju wanita model celana high waist. Cocok untuk dipakai ke kantor atau untuk gaya formal.', '../img/girls13.png'),
(101, 2, 'Short Pants Denim Santai - Girls14', 100000, 'Baju wanita model celana pendek denim. Cocok untuk dipakai saat santai atau untuk gaya sporty.', '../img/girls14.png'),
(102, 2, 'Dress Maxi Anggun - Girls15', 200000, 'Baju wanita model dress maxi. Cocok untuk dipakai ke acara formal atau untuk gaya elegan.', '../img/girls15.png'),
(103, 2, 'Blazer Profesional - Girls16', 250000, 'Baju wanita model blazer. Cocok untuk dipakai ke kantor atau untuk gaya profesional.', '../img/girls16.png'),
(104, 2, 'Jaket Hangat - Girls17', 180000, 'Baju wanita model jaket. Cocok untuk dipakai saat cuaca dingin atau untuk gaya casual.', '../img/girls17.png'),
(105, 3, 'Baju Anak Lucu - Kids1', 120000, 'Baju anak model loose fit dengan motif binatang berwarna biru. Cocok untuk dipakai sehari-hari.', '../img/kids1.png'),
(106, 3, 'Celana Pendek Santai - Kids2', 80000, 'Celana pendek anak model casual berwarna merah. Cocok untuk dipakai saat bermain.', '../img/kids2.png'),
(107, 3, 'Dress Cantik - Kids3', 150000, 'Dress anak model princess berwarna pink. Cocok untuk dipakai ke acara spesial.', '../img/kids3.png'),
(108, 3, 'Kemeja Polos - Kids4', 100000, 'Kemeja anak model polos berwarna putih. Cocok untuk dipakai ke sekolah.', '../img/kids4.png'),
(109, 3, 'Overall Denim - Kids5', 130000, 'Overall denim anak model trendi. Cocok untuk dipakai saat bepergian.', '../img/kids5.png'),
(110, 3, 'Sepatu Sport Nyaman - Kids6', 180000, 'Sepatu sport anak model sneakers berwarna biru. Cocok untuk dipakai saat bermain atau berolahraga.', '../img/kids6.png'),
(111, 3, 'Topi Lucu - Kids7', 50000, 'Topi anak model baseball berwarna kuning. Cocok untuk dipakai saat cuaca panas.', '../img/kids7.png'),
(112, 3, 'Tas Sekolah Praktis - Kids8', 100000, 'Tas sekolah anak model backpack berwarna hijau. Cocok untuk dipakai ke sekolah.', '../img/kids8.png'),
(113, 3, 'Boneka Teddy Bear - Kids9', 75000, 'Boneka teddy bear anak berwarna coklat. Cocok untuk teman bermain.', '../img/kids9.png'),
(114, 3, 'Mainan Edukatif - Kids10', 150000, 'Mainan edukatif anak model puzzle. Cocok untuk melatih kemampuan anak.', '../img/kids10.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', '$2y$10$6p1DXajw6NAQkpLIzqQwhu/DC1BrkkfK0HZBIkZXT4gM/dcuJtcAK', 'admin@gmail.com'),
(95, 'user', 'icha', '$2y$10$uXN1oo14XvaFhLkv.IDS1OaRPN2DrZn.Rk4c9RO/YCIhAwRNbOVvS', 'icha@gmail.com'),
(96, 'user', 'fajar', '$2y$10$99E7MH4mbK0XK9eEbbu87ODRICswKIGRlNOptcIHm69n.NpNrP16O', 'fajarpebefajar12@gmail.com'),
(98, 'user', 'zizan', '$2y$10$46HQ/BpT.dA9GkX2avzc3OeJLDTD8pxBhgNVmFw4WgnlCqlxhD012', 'zizannurhakim@gmail.com'),
(100, 'user', 'agem', '$2y$10$x4lon0X2inIVaFaOmlkFR.XQDuut0FmV2PmHJoOl6pJCjuNmxMx66', 'agem@gmail.com'),
(101, 'user', 'dadang', '$2y$10$nq6RJO1xD/tdFG9QZ7AZFuPEQuwnHFbtCtjt.ahN7OL4ILGa0Brrm', 'fajarpebefajar12@gmail.com'),
(102, 'user', 'sutrisna', '$2y$10$21fqc8yVs1wrBllG/PCOPOCa78hmrpd6lvXduAPZHnkfm6DuEhj9C', 'sut@gmail.com'),
(103, 'user', 'akang', '$2y$10$io/9p01fAr8XKujT3BHbrOaWdqNsTpqFEm/624N4drKmakiwS2ReC', 'akang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
