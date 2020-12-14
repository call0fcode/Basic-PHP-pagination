-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 06:47 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paginacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `ID` int(11) NOT NULL,
  `articulo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`ID`, `articulo`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur'),
(2, 'Adipisicing elit. Aperiam harum nihil'),
(3, 'Aperiam harum nihil repellat'),
(4, 'Architecto recusandae inventore consequuntur'),
(5, 'Nostrum ipsa aliquam sapiente dignissimos'),
(6, 'Porro, cum, nemo excepturi deserunt'),
(7, 'Vitae quos, maxime possimus.'),
(8, 'Aperiam harum nihil repellat architecto re'),
(9, 'Sit amet consectetur adipisicing elit'),
(10, 'Harum nihil repellat architecto'),
(11, 'Nostrum ipsa aliquam sapiente'),
(12, 'Aliquam sapiente dignissimos porro, cum'),
(13, 'Nihil repellat architecto recusandae '),
(14, 'Consectetur adipisicing elit'),
(15, 'Lorem ipsum dolor sit amet'),
(16, 'Sapiente dignissimos porro'),
(17, 'Quos, maxime possimus'),
(18, 'Cum, nemo excepturi'),
(19, 'Consequuntur nostrum ipsa aliquam'),
(20, 'Repellat architecto recusandae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
