-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2020 at 11:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `nama` char(25) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `transmisi` char(25) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `gambar` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `nama`, `tahun`, `transmisi`, `harga`, `gambar`) VALUES
(1, 'Bluevard', 1991, 'Otomatis', 'Rp. 555.000.000', 'blue.jpeg'),
(3, 'Greyota', 2020, 'Otomatis', 'Rp. 300.000.000', 'grey.jpeg'),
(4, 'Pinkyundai', 2005, 'Manual', 'Rp. 240.000.000', 'pink.jpeg'),
(5, 'Purpleogini', 2008, 'Manual', 'Rp. 1.000.000.000', 'purple.jpeg'),
(6, 'Redonda', 1945, 'Manual', 'Rp. 50.000.000', 'red.jpeg'),
(7, 'Whiterarry', 2020, 'Otomatis', 'Rp. 2.000.000.000', 'white.jpeg'),
(15, 'Redoeo', 2011, 'Otomatis', 'Rp. 200.000.000', 'red.jpeg'),
(17, 'Brownendes', 2017, 'Manual', 'Rp. 150.000.000', 'brown.jpeg'),
(18, 'Pururori', 2019, 'Otomatis', 'Rp. 55.000.000', 'purple.jpeg'),
(19, 'Bluedonky', 2019, 'Manual', 'Rp. 200.000.000', 'grey.jpeg'),
(22, 'Whitening', 2000, 'Otomatis', 'Rp. 400.000.000', 'white.jpeg'),
(23, 'Brownies', 1952, 'Otomatis', 'Rp. 50.000.000', '5f7cc5ebbbb30_brown.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$.HQ686zDUwbJ2SObg.6QK.BR5YEWwN8RGV9./MhWrOt.66rCltg0S'),
(4, 'user', '$2y$10$V.KOzajOBdmCAZhOMLM0iuCh6xLhpmuBJGxO8D0ulM3NhR0ENikp6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
