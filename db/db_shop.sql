-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 11:46 AM
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
(102, 'user', 'sutrisna', '$2y$10$21fqc8yVs1wrBllG/PCOPOCa78hmrpd6lvXduAPZHnkfm6DuEhj9C', 'sut@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
