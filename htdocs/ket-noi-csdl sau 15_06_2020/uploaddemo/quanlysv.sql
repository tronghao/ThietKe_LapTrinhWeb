-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 03:19 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysinhvien`
--
CREATE DATABASE IF NOT EXISTS `quanlysinhvien` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `quanlysinhvien`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lop`
--

CREATE TABLE `tbl_lop` (
  `malop` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenlop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manganh` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lop`
--

INSERT INTO `tbl_lop` (`malop`, `tenlop`, `manganh`) VALUES
('DA18KTA', 'Äáº¡i há»c Káº¿ toÃ¡n 2018', '102');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monhoc`
--

CREATE TABLE `tbl_monhoc` (
  `mamon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenmon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tinchi_lt` int(11) NOT NULL,
  `tinhchi_th` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nganh`
--

CREATE TABLE `tbl_nganh` (
  `manganh` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tennganh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nganh`
--

INSERT INTO `tbl_nganh` (`manganh`, `tennganh`) VALUES
('101', 'CÃ´ng nghá»‡ thÃ´ng tin'),
('102', 'Káº¿ toÃ¡n'),
('103', 'CÆ¡ khÃ­ cháº¿ táº¡o mÃ¡y'),
('104', 'Ká»¹ thuáº­t xÃ¢y dá»±ng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `masv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tensv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `malop` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinhvien_monhoc`
--

CREATE TABLE `tbl_sinhvien_monhoc` (
  `diem` float NOT NULL,
  `hocky_nienkhoa` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mamon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `masv` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh` text COLLATE utf8_unicode_ci,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lop`
--
ALTER TABLE `tbl_lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `manganh` (`manganh`);

--
-- Indexes for table `tbl_monhoc`
--
ALTER TABLE `tbl_monhoc`
  ADD PRIMARY KEY (`mamon`);

--
-- Indexes for table `tbl_nganh`
--
ALTER TABLE `tbl_nganh`
  ADD PRIMARY KEY (`manganh`);

--
-- Indexes for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `malop` (`malop`);

--
-- Indexes for table `tbl_sinhvien_monhoc`
--
ALTER TABLE `tbl_sinhvien_monhoc`
  ADD UNIQUE KEY `hocky_nienkhoa` (`hocky_nienkhoa`),
  ADD KEY `mamon` (`mamon`),
  ADD KEY `masv` (`masv`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_lop`
--
ALTER TABLE `tbl_lop`
  ADD CONSTRAINT `tbl_lop_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `tbl_nganh` (`manganh`);

--
-- Constraints for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD CONSTRAINT `tbl_sinhvien_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `tbl_lop` (`malop`);

--
-- Constraints for table `tbl_sinhvien_monhoc`
--
ALTER TABLE `tbl_sinhvien_monhoc`
  ADD CONSTRAINT `tbl_sinhvien_monhoc_ibfk_1` FOREIGN KEY (`mamon`) REFERENCES `tbl_monhoc` (`mamon`),
  ADD CONSTRAINT `tbl_sinhvien_monhoc_ibfk_2` FOREIGN KEY (`masv`) REFERENCES `tbl_sinhvien` (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
