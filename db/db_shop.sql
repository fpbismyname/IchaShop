-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 08:02 PM
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
(13, 1, 'Product 1', 1000, 'This is a description of Product 1', 0x70726f64756374312e6a7067),
(14, 2, 'Product 2', 2000, 'This is a description of Product 2', 0x70726f64756374322e6a7067),
(15, 3, 'Product 3', 3000, 'This is a description of Product 3', 0x70726f64756374332e6a7067),
(16, 1, 'Product 4', 4000, 'This is a description of Product 4', 0x70726f64756374342e6a7067),
(17, 3, 'Product 5', 5000, 'This is a description of Product 5', 0x70726f64756374352e6a7067),
(18, 2, 'Product 6', 6000, 'This is a description of Product 6', 0x70726f64756374362e6a7067),
(19, 1, 'Product 7', 7000, 'This is a description of Product 7', 0x70726f64756374372e6a7067),
(20, 2, 'Product 8', 8000, 'This is a description of Product 8', 0x70726f64756374382e6a7067),
(21, 3, 'Product 9', 9000, 'This is a description of Product 9', 0x70726f64756374392e6a7067),
(22, 1, 'Product 10', 10000, 'This is a description of Product 10', 0x70726f6475637431302e6a7067),
(23, 2, 'Product 11', 11000, 'This is a description of Product 11', 0x70726f6475637431312e6a7067),
(24, 3, 'Product 12', 12000, 'This is a description of Product 12', 0x70726f6475637431322e6a7067),
(25, 1, 'Product 13', 13000, 'This is a description of Product 13', 0x70726f6475637431332e6a7067),
(26, 2, 'Product 14', 14000, 'This is a description of Product 14', 0x70726f6475637431342e6a7067),
(27, 3, 'Product 15', 15000, 'This is a description of Product 15', 0x70726f6475637431352e6a7067),
(28, 1, 'Product 16', 16000, 'This is a description of Product 16', 0x70726f6475637431362e6a7067),
(29, 2, 'Product 17', 17000, 'This is a description of Product 17', 0x70726f6475637431372e6a7067),
(30, 3, 'Product 18', 18000, 'This is a description of Product 18', 0x70726f6475637431382e6a7067),
(31, 1, 'Product 19', 19000, 'This is a description of Product 19', 0x70726f6475637431392e6a7067),
(32, 2, 'Product 20', 20000, 'This is a description of Product 20', 0x70726f6475637432302e6a7067),
(33, 3, 'Product 21', 21000, 'This is a description of Product 21', 0x70726f6475637432312e6a7067),
(34, 1, 'Product 22', 22000, 'This is a description of Product 22', 0x70726f6475637432322e6a7067),
(35, 2, 'Product 23', 23000, 'This is a description of Product 23', 0x70726f6475637432332e6a7067),
(36, 3, 'Product 24', 24000, 'This is a description of Product 24', 0x70726f6475637432342e6a7067),
(37, 1, 'Product 25', 25000, 'This is a description of Product 25', 0x70726f6475637432352e6a7067),
(38, 2, 'Product 26', 26000, 'This is a description of Product 26', 0x70726f6475637432362e6a7067),
(39, 3, 'Product 27', 27000, 'This is a description of Product 27', 0x70726f6475637432372e6a7067),
(40, 1, 'Product 28', 28000, 'This is a description of Product 28', 0x70726f6475637432382e6a7067),
(41, 2, 'Product 29', 29000, 'This is a description of Product 29', 0x70726f6475637432392e6a7067),
(42, 3, 'Product 30', 30000, 'This is a description of Product 30', 0x70726f6475637433302e6a7067);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
