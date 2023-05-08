-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 09:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_pemrograman`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_nasabah`
--

CREATE TABLE `data_nasabah` (
  `AccountId` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nasabah`
--

INSERT INTO `data_nasabah` (`AccountId`, `Name`) VALUES
(1, 'Customer1'),
(2, 'Customer2');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id` int(11) NOT NULL,
  `AccountId` int(11) NOT NULL,
  `TransactionDate` datetime NOT NULL,
  `Description` text NOT NULL,
  `DebitCreditStatus` varchar(2) NOT NULL,
  `Amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id`, `AccountId`, `TransactionDate`, `Description`, `DebitCreditStatus`, `Amount`) VALUES
(1, 1, '2017-01-01 00:00:00', 'Setor Tunai', 'C', '200000'),
(2, 1, '2017-01-05 00:00:00', 'Beli Pulsa', 'D', '10000'),
(3, 1, '2017-01-06 00:00:00', 'Bayar Listrik', 'D', '70000'),
(4, 1, '2017-01-07 00:00:00', 'Tarik Tunai', 'D', '100000'),
(5, 1, '2017-02-01 00:00:00', 'Setor Tunai', 'C', '300000'),
(6, 1, '2017-02-05 00:00:00', 'Bayar Listrik', 'D', '50000'),
(7, 1, '2017-02-05 00:00:00', 'Bayar Listrik', 'D', '50000'),
(8, 1, '2017-02-20 00:00:00', 'Beli Pulsa', 'D', '40000'),
(9, 1, '2017-02-28 00:00:00', 'Tarik Tunai', 'D', '50000'),
(10, 1, '2017-03-01 00:00:00', 'Setor Tunai', 'C', '50000'),
(11, 1, '2017-03-07 00:00:00', 'Bayar Listrik', 'D', '1250000'),
(12, 1, '2017-03-15 00:00:00', 'Beli Pulsa', 'D', '20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  ADD PRIMARY KEY (`AccountId`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  MODIFY `AccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
