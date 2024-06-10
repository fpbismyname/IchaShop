-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 06:28 PM
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
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `kategori_id`, `nama`, `harga`, `detail`, `image`) VALUES
(1, 1, 'Baju Muslim', 75000, 'Baju muslin ini keren', ''),
(2, 1, 'mukena', 120000, 'mukena keren ini', ''),
(3, 1, 'Product 1', 10000, 'This is product 1', ''),
(4, 1, 'Product 2', 20000, 'This is product 2', ''),
(5, 1, 'Product 3', 30000, 'This is product 3', ''),
(6, 1, 'Product 4', 40000, 'This is product 4', ''),
(7, 1, 'Product 5', 50000, 'This is product 5', ''),
(8, 1, 'Product 6', 60000, 'This is product 6', ''),
(9, 1, 'Product 7', 70000, 'This is product 7', ''),
(10, 1, 'Product 8', 80000, 'This is product 8', ''),
(11, 1, 'Product 9', 90000, 'This is product 9', ''),
(12, 1, 'Product 10', 100000, 'This is product 10', '');

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
(101, 'user', 'dadang', '$2y$10$nq6RJO1xD/tdFG9QZ7AZFuPEQuwnHFbtCtjt.ahN7OL4ILGa0Brrm', 'fajarpebefajar12@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
