-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 11:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_093`
--

CREATE TABLE `tbl_093` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `gaji` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_093`
--

INSERT INTO `tbl_093` (`id`, `nama`, `email`, `posisi`, `umur`, `gaji`) VALUES
(17, 'Airi Satou', 'airisatou@gmail.com', 'Accountant', '33 Tahun', '$162,700'),
(18, 'Angelica Ramos', 'Angelica@gmail.com', 'Chief Executive Officer (CEO)', '47 Tahun', '$1,200,000'),
(19, 'Ashton Cox', 'asthon@gmail.com', 'Junior Technical Author', '66 Tahun', '$86,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_093`
--
ALTER TABLE `tbl_093`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_093`
--
ALTER TABLE `tbl_093`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
