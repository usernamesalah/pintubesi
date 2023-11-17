-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 10:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pintubesi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nama`, `image`, `lokasi`, `jenis`, `detail`) VALUES
(2, 'Santuy dlu gak sih', 'client/690507963.jpg', '', '', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `home_image`
--

CREATE TABLE `home_image` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_image`
--

INSERT INTO `home_image` (`id`, `title`, `url`) VALUES
(1, '', '/assets/upload/home/678041.jpg'),
(2, '', '/assets/upload/home/cropped-5120-2880-678041.jpg'),
(3, '', '/assets/upload/home/678041(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `tebal_daun_pintu` float NOT NULL,
  `tebal_plat_daun_pintu` float NOT NULL,
  `tebal_plat_kusen_pintu` float NOT NULL,
  `insulation` varchar(255) NOT NULL,
  `engsel` varchar(255) NOT NULL,
  `fire_rated` int(11) NOT NULL,
  `overlap_bibir_pintu` float DEFAULT NULL,
  `aksesoris` text NOT NULL,
  `tebal_frame_kisi` float DEFAULT NULL,
  `tebal_rangka_pintu` float DEFAULT NULL,
  `sliding_gear` varchar(255) DEFAULT NULL,
  `foto` text NOT NULL,
  `galery` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `kategori`, `ukuran`, `tebal_daun_pintu`, `tebal_plat_daun_pintu`, `tebal_plat_kusen_pintu`, `insulation`, `engsel`, `fire_rated`, `overlap_bibir_pintu`, `aksesoris`, `tebal_frame_kisi`, `tebal_rangka_pintu`, `sliding_gear`, `foto`, `galery`, `deskripsi`) VALUES
(6, 'Test', 'asas', 'Custom', 1, 1, 1, 'GLASSWOL', 'SIWON', 1, 1, 'CUSTOM', 1, 1, 'CUSTOM', '/assets/upload/product/1384104019.jpg', '[\"\\/assets\\/upload\\/product\\/626751.png\",\"\\/assets\\/upload\\/product\\/678041.jpg\"]', 'Lorem ipsum gorem');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `index` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `index`, `value`) VALUES
(1, 'whatsapp', '6289887162511'),
(2, 'tentang', '<p>i<strong>ni tentang sssasasasasa</strong><br />&nbsp;</p><ul><li><strong>1</strong></li><li><strong>2</strong></li><li><strong>3</strong></li><li><strong>4</strong></li></ul>'),
(3, 'alamat', 'jalan jalan dibukit subang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2a$10$3VUsZ4d9Qz7//BcNDRRdtOmZ4Mw2/di3DPG0rUzaJk4kLasujkg3m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `home_image`
--
ALTER TABLE `home_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index` (`index`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_image`
--
ALTER TABLE `home_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
