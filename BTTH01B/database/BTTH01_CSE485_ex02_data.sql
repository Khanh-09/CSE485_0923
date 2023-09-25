-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 02:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btth01_cse485`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED DEFAULT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED DEFAULT NULL,
  `ngayviet` datetime NOT NULL,
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'Bai hat yeu thich', 'Seven', 2, 'tom tat 1', NULL, 1, '2023-08-15 08:09:53', 'hinh anh 1'),
(2, 'Tieu de 2', 'Anh', 3, 'tom tat 2', 'noi dung 2', 4, '2022-09-13 08:14:48', 'hinh anh 2'),
(3, 'tieu de 3', 'Yeu lai tu dau', 3, 'tom tat 3', 'noi dung 3', 5, '2019-09-09 08:14:48', 'hinh anh 3'),
(4, 'Tieu de 4', 'Bai hat 4', 4, 'Tom tat 4', NULL, 7, '2023-07-10 08:18:47', 'hinh anh 4'),
(5, 'Tieu de 5', 'Bai hat 5', 6, 'Tom tat 5', 'Noi dung 5', 2, '2023-05-01 08:18:47', 'hinh anh 5'),
(6, 'Tieu de 6', 'Gee', 2, 'Tom tat 6', NULL, 1, '2023-09-01 08:20:43', 'Hinh anh 6'),
(7, 'Tieu de 7', 'Thuong em', 1, 'Tom tat 7', NULL, 3, '2021-11-27 08:20:43', 'Hinh anh 7'),
(8, 'Tieu de 8', 'Bai hat 8', 3, 'tom tat 8', 'noi dung 8', 5, '2023-09-01 11:03:12', 'hinh anh 8');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Mai Quoc Khanh', 'avt_a.jpg'),
(2, 'Nhacvietplus', 'avt_b.jpg'),
(3, 'Bui Thi Phanh', 'avt_c.jpg'),
(4, 'Nguyen Thu Hang', 'avt_d.jpg'),
(5, 'Ho Thi Thuy', 'avt_e.jpg'),
(6, 'Nguyen Kim Chi', 'avt_f.jpg'),
(7, 'Nguyen Thu Phuong', 'avt_j.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
(1, 'Nhac tru tinh '),
(2, 'Nhac kpop '),
(3, 'Nhac ballad '),
(4, 'Nhac thieu nhi '),
(5, 'Nhac cach mang '),
(6, 'Nhac usuk ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tloai` (`ma_tloai`),
  ADD KEY `ma_tgia` (`ma_tgia`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


