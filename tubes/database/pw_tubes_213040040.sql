-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 07:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_213040040`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `merek`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Nvidia RTX 3060', 'Gigabyte', 10000000, 'NVIDIA Ampere Streaming Multiprocessors\r\n2nd Generation RT Cores\r\n3rd Generation Tensor Cores\r\nPowered by GeForce RTX™ 3060\r\nIntegrated with 12GB GDDR6 192-bit memory interface\r\nWINDFORCE 3X Cooling System with alternate spinning fans\r\nRGB Fusion 2.0\r\nProtection metal back plate', 'gigartx3060.jpg'),
(2, 'Nvidia RTX 3070', 'MSI', 13000000, 'NVIDIA Ampere Streaming Multiprocessors\r\n2nd Generation RT Cores\r\n3rd Generation Tensor Cores\r\nPowered by GeForce RTX™ 3070\r\nIntegrated with 14GB GDDR6 256-bit memory interface\r\nProtection metal back plate', '6295c0459ab39.jpg'),
(3, 'Nvidia RTX 3080', 'Asus', 20000000, 'ROG Strix GeForce RTX™ 3080 buffed-up design with chart-topping thermal performance.', '62a080045f240.jpg'),
(6, 'AMD RX 480', 'MSI', 4000000, 'Radeon™ RX 480 8G\r\nRadeon™ RX 480\r\nPCI Express x16 3.0\r\nup to 1266 MHz / up to 1120 MHz\r\n2304 Units\r\n8000 MHz\r\n8GB GDDR5 (256-bit)\r\nDisplayPort x 3 (version 1.4 Ready) / HDMI 2.0b\r\nY\r\n150 W\r\n6-pin x 1\r\n500 W', '629f1d1faa1ca.jpg'),
(7, 'AMD RX 580', 'Asus', 4800000, 'Radeon™ RX 580 ARMOR 8G OC\r\nRadeon™ RX 580\r\nPCI Express x16\r\nup to 1366 MHz\r\n2304 Units\r\n8000 MHz\r\n8GB GDDR5\r\n256-bit\r\nDisplayPort x 2 / HDMI x 2 / DL-DVI-D\r\n185 W\r\n8-pin x 1', '629f1edcb7161.jpg'),
(8, 'Ryzen 9 5950x', 'AMD', 8789000, 'SPECIFCATION:\r\n# of CPU Cores\r\n16\r\n# of Threads\r\n32\r\nBase Clock\r\n3.4GHz\r\nMax Boost Clock\r\n\r\nUp to 4.9GHz\r\nTotal L2 Cache\r\n8MB\r\nTotal L3 Cache\r\n64MB\r\nUnlocked\r\n\r\nYes\r\nCMOS\r\nTSMC 7nm FinFET\r\nPackage\r\nAM4\r\nPCI Express® Version\r\nPCIe 4.0\r\nThermal Solution (PIB)\r\nNot included\r\nDefault TDP / TDP\r\n105W\r\nSy', '62a0871359cf5.jpg'),
(9, 'Ryzen 7 5800x', 'AMD', 7990000, 'Specifications\r\n# of CPU Cores\r\n8\r\n# of Threads\r\n16\r\nBase Clock\r\n3.8GHz\r\nMax Boost Clock\r\nUp to 4.7GHz\r\nTotal L2 Cache\r\n4MB\r\nTotal L3 Cache\r\n32MB\r\nUnlocked\r\nYes\r\nCMOS\r\nTSMC 7nm FinFET\r\nPackage\r\nAM4\r\nPCI Express® Version\r\nPCIe 4.0\r\nThermal Solution (PIB)\r\nNot included\r\nDefault TDP / TDP\r\n105W', '62a088027a463.jpg'),
(10, 'Ryzen 5 5600x', 'AMD', 5500000, 'Specifications\r\n# of CPU Cores : 6\r\n# of Threads : 12\r\nBase Clock : 3.7GHz\r\nMax Boost Clock : Up to 4.6GHz\r\nTotal L2 Cache : 3MB\r\nTotal L3 Cache : 32MB\r\nUnlocked : Yes\r\nCMOS : TSMC 7nm FinFET\r\nPackage : AM4\r\nPCI Express® Version : PCIe 4.0\r\nThermal Solution (PIB) : Wraith Stealth\r\nDefault TDP / TDP ', '62a08867c3781.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'admin', '$2y$10$EPgrmR5h4iTp/F33kOIIoOKjnKwTiMZCtJi5UiKr5yAfs1KeE7dTG'),
(8, 'dede', '$2y$10$TIVNS9ZBoRMX4Izozl92H.HK/rNZPpaeCdsAgPVtJfIxLXcZug8OO'),
(9, 'acep', '$2y$10$93reDG1XR55rg4tGrxkW.e3aYLWrXe2UcXvcfuCDFmuK24YfmRSYG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
