-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 12:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outfit_gen`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `A_ID` varchar(10) NOT NULL,
  `A_NAME` varchar(255) DEFAULT NULL,
  `A_COLOR` varchar(20) DEFAULT NULL,
  `A_IMG` varchar(255) NOT NULL,
  `A_OCCASION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`A_ID`, `A_NAME`, `A_COLOR`, `A_IMG`, `A_OCCASION`) VALUES
('301', 'NECKLACE', 'GOLD', 'img/729b6db7a8f1d17f7c478a174e167cc3.jpg', 'PARTYWEAR'),
('302', 'BRACELET', 'SILVER', 'https://etchcraftemporium.in/cdn/shop/files/silverbrmodel_1200x1200.png?v=1707120042', 'CASUAL'),
('303', 'EARRING', 'PEARL', 'img/1680017075_a5d4ca8feba0d3f130e6.jpg', 'FORMAL'),
('304', 'WATCH', 'BLACK', 'img/38074AP01_1.jpg', 'CASUAL'),
('305', 'SCARF', 'BEIGE', 'img/91eMoVkikbL._AC_UY350_.jpg', 'CASUAL');

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `occasion` varchar(20) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `material` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `weather` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`id`, `image_url`, `color`, `style`, `occasion`, `material`, `size`, `weather`) VALUES
(201, 'img/cloth_img01.jpeg.jpg', 'BLACK', 'HOODIE', 'CASUAL', 'WOOL', 'L', 'Rainy'),
(202, 'img/cloth_img02.jpeg.jpg', 'BLACK', 'SKIRT', 'PARTYWEAR', 'COTTON', 'S', 'Sunny'),
(203, 'img/cloth_img03.jpeg.jpg', 'PURPLE', 'DRESS', 'CASUAL', 'COTTON', 'M', 'Sunny'),
(204, 'img/cloth_img04.jpeg.jpg', 'WHITE', 'BLAZER', 'FORMAL', 'RAYON', 'L', 'Cloudy'),
(205, 'img/cloth_img05.jpeg.jpg', 'GREEN', 'SHIRT', 'CASUAL', 'LINEN', 'M', 'Sunny');

-- --------------------------------------------------------

--
-- Table structure for table `footwear`
--

CREATE TABLE `footwear` (
  `f_id` varchar(2) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `f_color` varchar(20) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `f_type` varchar(20) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `f_img` varchar(255) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footwear`
--

INSERT INTO `footwear` (`f_id`, `f_color`, `f_type`, `f_img`) VALUES
('10', 'WHITE', 'HEELS', 'img/shoe_img01.jpeg.jpg'),
('10', 'BLACK', 'SHOES', 'img/shoe_img02.jpeg.jpg'),
('10', 'BROWN', 'BOOTS', 'img/shoe_img03.jpeg.jpg'),
('10', 'BEIGE', 'FLATS', 'img/shoe_img04.jpeg.jpg'),
('10', 'BLUE', 'STILETTOS', 'img/shoe_img05.jpeg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_pwd` varchar(12) NOT NULL,
  `gender` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_name`, `email`, `user_pwd`, `gender`) VALUES
(1, 'JOHN', 'JOHN1@GMAIL.COM', 'john1', 'M'),
(2, 'ABBY', 'ABBY2@GMAIL.COM', 'abby2', 'F'),
(3, 'FARHAD', 'FARHA3@GMAIL.COM', 'faha', 'M'),
(4, 'CLAIRE', 'CLAIRE4@GMAIL.COM', '', 'F'),
(5, 'MADDY', 'MADDY5@GMAIL.COM', '', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
