-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 07:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datvexe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Ma` int(11) NOT NULL,
  `A_Ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `A_GioiTinh` varchar(4) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `A_Email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `A_NgaySinh` date NOT NULL,
  `A_SDT` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `A_DiaChi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `A_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `A_MatKhau` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Ma`, `A_Ten`, `A_GioiTinh`, `A_Email`, `A_NgaySinh`, `A_SDT`, `A_DiaChi`, `A_Hinh`, `A_MatKhau`) VALUES
(1, 'Trần Thị Trúc Quyên', 'Nữ', 'quyen@gmail.com', '2001-03-30', '0582544082', 'Đồng Tháp', 'meo.jpg', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `benxe`
--

CREATE TABLE `benxe` (
  `BX_Ma` int(11) NOT NULL,
  `H_Ma` int(11) NOT NULL,
  `BX_Ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `BX_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `benxe`
--

INSERT INTO `benxe` (`BX_Ma`, `H_Ma`, `BX_Ten`, `BX_Hinh`) VALUES
(1, 625, 'Bến xe Sa Đéc', '0'),
(2, 628, 'Bến xe Hồng Ngự', '0'),
(3, 624, 'Bến xe Cao Lãnh', ''),
(4, 662, 'Bên xe Cần Thơ', ''),
(5, 665, 'Bến xe mới Cần Thơ', ''),
(6, 668, 'Bến xe Cờ Đỏ', ''),
(7, 587, 'Bến xe Tiền Giang', ''),
(8, 592, 'Bến xe Cai Lậy', ''),
(9, 595, 'Bến xe Gò Công Tây', ''),
(10, 591, 'Bến xe Cái Bè', ''),
(12, 662, 'trúc quyên trần', '');

-- --------------------------------------------------------

--
-- Table structure for table `benxeden`
--

CREATE TABLE `benxeden` (
  `C_Ma` int(11) DEFAULT NULL,
  `NV_Ma` int(11) DEFAULT NULL,
  `TC_Ma` int(11) DEFAULT NULL,
  `X_Ma` int(11) DEFAULT NULL,
  `C_ThoiGianXP` datetime DEFAULT NULL,
  `C_ThoiGianDen` datetime DEFAULT NULL,
  `BXKH_Ma` int(11) DEFAULT NULL,
  `C_DonGia` float DEFAULT NULL,
  `C_Hinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TX_Ma` int(11) DEFAULT NULL,
  `BXD_Ma` int(11) DEFAULT NULL,
  `BX_Ma` int(11) DEFAULT NULL,
  `H_Ma` int(11) DEFAULT NULL,
  `BX_Ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BX_Hinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietghe`
--

CREATE TABLE `chitietghe` (
  `G_Ma` int(11) NOT NULL,
  `CTG_TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietghe`
--

INSERT INTO `chitietghe` (`G_Ma`, `CTG_TrangThai`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieudat`
--

CREATE TABLE `chitietphieudat` (
  `PD_Ma` int(11) NOT NULL,
  `CT_TenKH` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CT_EmailKH` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CT_SdtKH` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `G_Ma` int(11) NOT NULL,
  `CT_GiaGhe` float NOT NULL,
  `CT_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietphieudat`
--

INSERT INTO `chitietphieudat` (`PD_Ma`, `CT_TenKH`, `CT_EmailKH`, `CT_SdtKH`, `G_Ma`, `CT_GiaGhe`, `CT_Ma`) VALUES
(4663, 'quyen', 'truc@gmail.com', '0123456579', 22, 100000, 73),
(4663, 'quyen', 'truc@gmail.com', '0123456579', 23, 100000, 74),
(4664, 'quyen', 'truc@gmail.com', '0123456579', 5, 300000, 75),
(4664, 'quyen', 'truc@gmail.com', '0123456579', 10, 300000, 76),
(4665, 'quyen', 'truc@gmail.com', '0123456579', 49, 100000, 77),
(4665, 'quyen', 'truc@gmail.com', '0123456579', 50, 100000, 78),
(4666, 'quyen', 'truc@gmail.com', '0123456579', 9, 300000, 79),
(4666, 'quyen', 'truc@gmail.com', '0123456579', 10, 300000, 80),
(4667, 'quyen', 'truc@gmail.com', '0123456579', 50, 100000, 81),
(4667, 'quyen', 'truc@gmail.com', '0123456579', 51, 100000, 82),
(4668, 'quyen', 'truc@gmail.com', '0123456579', 13, 300000, 83),
(4669, 'quyen', 'truc@gmail.com', '0123456579', 49, 100000, 84),
(4669, 'quyen', 'truc@gmail.com', '0123456579', 50, 100000, 85),
(4670, 'quyen', 'truc@gmail.com', '0123456579', 6, 300000, 86),
(4670, 'quyen', 'truc@gmail.com', '0123456579', 14, 300000, 87),
(4671, 'quyen', 'truc@gmail.com', '0123456579', 54, 250000, 88),
(4671, 'quyen', 'truc@gmail.com', '0123456579', 55, 250000, 89),
(4672, 'quyen', 'truc@gmail.com', '0123456579', 10, 300000, 90),
(4672, 'quyen', 'truc@gmail.com', '0123456579', 15, 300000, 91),
(4673, 'quyen', 'truc@gmail.com', '0123456579', 1, 300000, 92),
(4673, 'quyen', 'truc@gmail.com', '0123456579', 2, 300000, 93),
(4674, 'quyen', 'truc@gmail.com', '0123456579', 70, 100000, 94),
(4674, 'quyen', 'truc@gmail.com', '0123456579', 73, 100000, 95);

-- --------------------------------------------------------

--
-- Table structure for table `chuyen`
--

CREATE TABLE `chuyen` (
  `C_Ma` int(11) NOT NULL,
  `NV_Ma` int(11) NOT NULL,
  `TC_Ma` int(11) NOT NULL,
  `X_Ma` int(11) NOT NULL,
  `C_ThoiGianXP` datetime NOT NULL,
  `C_ThoiGianDen` datetime NOT NULL,
  `BXKH_Ma` int(11) NOT NULL,
  `C_DonGia` float NOT NULL,
  `C_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_Ma` int(11) NOT NULL,
  `BXD_Ma` int(11) NOT NULL,
  `C_ThoiGianTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chuyen`
--

INSERT INTO `chuyen` (`C_Ma`, `NV_Ma`, `TC_Ma`, `X_Ma`, `C_ThoiGianXP`, `C_ThoiGianDen`, `BXKH_Ma`, `C_DonGia`, `C_Hinh`, `TX_Ma`, `BXD_Ma`, `C_ThoiGianTao`) VALUES
(5, 1, 2, 2, '2023-05-30 12:58:42', '2023-05-30 12:58:42', 2, 100000, 'Do-ghe-limousine-SUV-con-ngua-640x427.jpg', 2, 1, '2022-02-08 14:36:56'),
(6, 1, 2, 1, '2023-06-10 19:07:00', '2023-06-10 19:09:00', 1, 300000, 'ford-tourneo-limousine-8.jpg', 2, 2, '2022-02-09 14:36:56'),
(7, 1, 2, 2, '2022-11-20 23:59:00', '2022-11-20 13:59:00', 2, 150000, 'meo.jpg', 1, 1, '2023-01-09 14:36:56'),
(8, 1, 5, 2, '2022-11-12 13:53:00', '2022-11-20 23:56:00', 1, 200000, 'do-ghe-limousine-o-to.jpg', 1, 2, '2023-01-01 14:36:56'),
(9, 2, 10, 2, '2023-02-18 11:07:00', '2023-02-20 11:07:00', 2, 400000, '23424.jpg', 2, 1, '2023-01-11 14:36:56'),
(45, 1, 2, 1, '2023-09-27 13:00:00', '2023-09-27 15:00:00', 1, 400000, '', 1, 2, '2023-02-26 22:48:53'),
(54, 1, 5, 1, '2023-09-27 17:00:00', '2023-09-27 18:00:00', 1, 400000, '', 2, 2, '2023-02-26 23:23:13'),
(55, 1, 1, 2, '2023-10-26 14:45:00', '2023-10-26 16:45:00', 2, 200000, 'ghe.png', 1, 1, '2023-03-25 14:46:13'),
(56, 2, 1, 1, '2023-11-27 15:37:00', '2023-11-27 18:38:00', 2, 250000, 'ghe.png', 2, 5, '2023-03-25 15:38:38'),
(57, 1, 5, 1, '2023-10-24 16:05:00', '2023-10-24 18:05:00', 1, 200000, 'ghe.png', 2, 2, '2023-03-25 16:06:21'),
(61, 1, 1, 1, '2023-04-01 01:28:00', '2023-04-01 03:28:00', 2, 150000, 'ghe.png', 1, 6, '2023-03-26 01:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `DG_Ma` int(11) NOT NULL,
  `DG_NoiDung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PD_Ma` int(11) NOT NULL,
  `DG_Diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`DG_Ma`, `DG_NoiDung`, `PD_Ma`, `DG_Diem`) VALUES
(24, '', 4670, 5),
(25, '', 4671, 3);

-- --------------------------------------------------------

--
-- Table structure for table `danhthudon`
--

CREATE TABLE `danhthudon` (
  `tongtien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

CREATE TABLE `ghe` (
  `G_Ma` int(11) NOT NULL,
  `G_MaSoGhe` varchar(5) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `X_Ma` int(11) NOT NULL,
  `G_TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `ghe`
--

INSERT INTO `ghe` (`G_Ma`, `G_MaSoGhe`, `X_Ma`, `G_TrangThai`) VALUES
(1, 'A1', 1, 0),
(2, 'A2', 1, 0),
(3, 'A3', 1, 0),
(4, 'A4', 1, 0),
(5, 'A5', 1, 0),
(6, 'A6', 1, 0),
(7, 'A7', 1, 0),
(8, 'A8', 1, 0),
(9, 'A9', 1, 0),
(10, 'A10', 1, 0),
(11, 'A11', 1, 0),
(12, 'A12', 1, 0),
(13, 'A13', 1, 0),
(14, 'A14', 1, 0),
(15, 'A15', 1, 0),
(16, 'A16', 1, 0),
(17, 'A1', 2, 0),
(18, 'A2', 2, 0),
(19, 'A3', 2, 0),
(20, 'A4', 2, 0),
(21, 'A5', 2, 0),
(22, 'A6', 2, 0),
(23, 'A7', 2, 0),
(24, 'A8', 2, 0),
(41, 'A1', 3, 0),
(42, 'A2', 3, 0),
(44, 'A9', 2, 0),
(45, 'A10', 2, 0),
(47, 'A11', 2, 0),
(48, 'A12', 2, 0),
(49, 'A13', 2, 0),
(50, 'A14', 2, 0),
(51, 'A15', 2, 0),
(52, 'A16', 2, 0),
(53, 'A4', 3, 0),
(54, 'A17', 1, 0),
(55, 'A18', 1, 0),
(56, 'A19', 1, 0),
(57, 'A20', 1, 0),
(58, 'A21', 1, 0),
(59, 'A22', 1, 0),
(60, 'A23', 1, 0),
(61, 'A24', 1, 0),
(62, 'A25', 1, 0),
(63, 'A26', 1, 0),
(64, 'A27', 1, 0),
(65, 'A28', 1, 0),
(66, 'A29', 1, 0),
(67, 'A30', 1, 0),
(68, 'A17', 2, 0),
(69, 'A18', 2, 0),
(70, 'A19', 2, 0),
(71, '20', 2, 0),
(72, 'A21', 2, 0),
(73, 'A22', 2, 0),
(74, 'A23', 2, 0),
(75, 'A24', 2, 0),
(76, 'A25', 2, 0),
(77, 'A26', 2, 0),
(78, 'A27', 2, 0),
(79, 'A28', 2, 0),
(80, 'A29', 2, 0),
(81, 'A30', 2, 0),
(82, 'A31', 2, 0),
(83, 'A32', 2, 0),
(84, 'A33', 2, 0),
(85, 'A34', 2, 0),
(86, 'A35', 2, 0),
(87, 'A36', 2, 0),
(88, 'A37', 2, 0),
(89, 'A38', 2, 0),
(90, 'A39', 2, 0),
(91, 'A40', 2, 0),
(92, 'A41', 2, 0),
(93, 'A42', 2, 0),
(94, 'A43', 2, 0),
(95, 'A44', 2, 0),
(96, 'A45', 2, 0),
(98, 'A16', 3, 0),
(99, 'A17', 3, 0),
(100, 'A18', 3, 0),
(101, 'A19', 3, 0),
(102, 'A20', 3, 0),
(103, 'A21', 3, 0),
(104, 'A22', 3, 0),
(105, 'A23', 3, 0),
(106, 'A24', 3, 0),
(107, 'A25', 3, 0),
(108, 'A26', 3, 0),
(109, 'A27', 3, 0),
(110, 'A28', 3, 0),
(111, 'A29', 3, 0),
(112, 'A30', 3, 0),
(113, 'A5', 3, 0),
(114, 'A6', 3, 0),
(115, 'A7', 3, 0),
(116, 'A8', 3, 0),
(117, 'A9', 3, 0),
(118, 'A10', 3, 0),
(119, 'A11', 3, 0),
(120, 'A12', 3, 0),
(121, 'A13', 3, 0),
(122, 'A14', 3, 0),
(123, 'A15', 3, 0),
(124, 'A3', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `HD_Ma` int(11) NOT NULL,
  `PD_Ma` int(11) NOT NULL,
  `HD_NgayLap` datetime NOT NULL,
  `HD_TongTien` float NOT NULL,
  `HD_MST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `KH_Ma` int(11) NOT NULL,
  `KH_Ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KH_Sdt` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KH_GioiTinh` varchar(4) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KH_DiaChi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KH_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KH_Email` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `repassword` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KH_NgaySinh` date NOT NULL,
  `KH_TrangThai` tinyint(1) NOT NULL,
  `KH_PhanQuyen` tinyint(1) NOT NULL,
  `KH_NgayDK` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`KH_Ma`, `KH_Ten`, `KH_Sdt`, `KH_GioiTinh`, `KH_DiaChi`, `password`, `KH_Hinh`, `KH_Email`, `repassword`, `KH_NgaySinh`, `KH_TrangThai`, `KH_PhanQuyen`, `KH_NgayDK`) VALUES
(7, 'Huỳnh Hoa', '0123123456', 'Nữ', 'Cần Thơ', '2ee4746a6292524cf7e33319d27c2fd6', 'Bo-suu-tap-hinh-nen-win-10-cuc-dep-full-scaled.jpg', 'ngaa@gmail.com', '2ee4746a6292524cf7e33319d27c2fd6', '2023-02-17', 1, 0, '2022-02-14 14:22:38'),
(20, 'Trúc Quyên', '0525844022', '', '', 'bb31b3fc8e1527308407342b30bdd232', 'unnamed.png', 'tran@gmail.com', 'bb31b3fc8e1527308407342b30bdd232', '0000-00-00', 1, 0, '2023-02-08 14:22:20'),
(25, 'quyen', '0123456579', '', '', 'c12bf2d6d64c1d2178bdc4c806fe1d48', 'unnamed.png', 'truc@gmail.com', 'c12bf2d6d64c1d2178bdc4c806fe1d48', '2001-04-17', 1, 0, '2023-02-26 14:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `KM_Ma` int(11) NOT NULL,
  `KM_Ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `KM_NgayBD` datetime NOT NULL DEFAULT current_timestamp(),
  `KM_NgayKT` datetime NOT NULL DEFAULT current_timestamp(),
  `KM_TyLeGG` float NOT NULL,
  `KM_NoiDung` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TC_Ma` int(11) NOT NULL,
  `KM_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`KM_Ma`, `KM_Ten`, `KM_NgayBD`, `KM_NgayKT`, `KM_TyLeGG`, `KM_NoiDung`, `TC_Ma`, `KM_Hinh`) VALUES
(1, 'Chào năm học mới', '2022-11-23 00:00:00', '2022-11-09 00:00:00', 20, '<p>Khuyến m&atilde;i 20% cho c&aacute;c tuyến&nbsp;Khuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c&nbsp;</p>\r\n', 2, 'solati.jpg'),
(2, 'Tri ân khách hàng', '2022-11-25 00:00:00', '2022-11-10 00:00:00', 20, '<p>Khuyến m&atilde;i 20% cho c&aacute;c tuyến&nbsp;Khuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c&nbsp;</p>\r\n\r\n<p>Khuyến m&atilde;i 20% cho c&aacute;c tuyến&nbsp;Khuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c&nbsp;</p>\r\n\r\n<p>Khuyến m&atilde;i 20% cho c&aacute;c tuyến&nbsp;Khuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c&nbsp;</p>\r\n', 4, '63079bf47dffc1983aa0c96936cfaf6b_tn.jpg'),
(3, 'Tết đoàn viên', '2022-11-21 04:15:00', '2022-11-30 04:15:00', 20, '<p>Khuyến m&atilde;i 20% cho c&aacute;c tuyến&nbsp;Khuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c tuyếnKhuyến m&atilde;i 20% cho c&aacute;c&nbsp;</p>\r\n', 5, 'tet_landing_page_1920x690_op.jpg'),
(5, 'Chào mừng đại lễ', '2022-11-27 05:10:00', '2022-12-03 17:13:00', 30, 'Khuyến m&atilde;i 30% cho chuyếnKhuyến m&atilde;i 30% cho chuyếnKhuyến m&atilde;i 30% cho chuyến\n\n<p>Khuyến m&atilde;i 30% cho chuyếnKhuyến m&atilde;i 30% cho chuyếnKhuyến m&atilde;i 30% cho chuyến</p>\n', 4, '7281203220e2d42c5c01d932dce74372.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loaixe`
--

CREATE TABLE `loaixe` (
  `LX_Ma` int(11) NOT NULL,
  `LX_Ten` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LX_SLGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `loaixe`
--

INSERT INTO `loaixe` (`LX_Ma`, `LX_Ten`, `LX_SLGhe`) VALUES
(1, 'Giường nằm', 30),
(2, 'Giường nằm ', 45);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `NV_Ma` int(11) NOT NULL,
  `VT_Ma` int(11) NOT NULL,
  `NV_Ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NV_Sdt` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NV_DiaChi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NV_GioiTinh` varchar(4) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NV_Email` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NV_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `repassword` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NV_NgaySinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`NV_Ma`, `VT_Ma`, `NV_Ten`, `NV_Sdt`, `NV_DiaChi`, `NV_GioiTinh`, `NV_Email`, `password`, `NV_Hinh`, `repassword`, `NV_NgaySinh`) VALUES
(1, 1, 'Nguyễn Thị Hoa', '0123456789', 'Đồng Tháp', 'Nữ', 'hoa@gmail.com', '123456', 'Bo-suu-tap-hinh-nen-win-10-cuc-dep-full-scaled.jpg', '', '2022-11-09'),
(2, 1, 'Nguyễn Văn An', '0321456987', 'Tiền Giang', 'Nam', 'an@gmail.com', '123456', '23424.jpg', '', '2022-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `phieudatve`
--

CREATE TABLE `phieudatve` (
  `PD_Ma` int(11) NOT NULL,
  `KH_Ma` int(11) NOT NULL,
  `PD_NgayDat` datetime NOT NULL,
  `PD_TrangThai` tinyint(1) NOT NULL,
  `C_Ma` int(11) NOT NULL,
  `PD_DiemDon` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `PD_TongTien` float NOT NULL,
  `PD_NgayHuy` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `phieudatve`
--

INSERT INTO `phieudatve` (`PD_Ma`, `KH_Ma`, `PD_NgayDat`, `PD_TrangThai`, `C_Ma`, `PD_DiemDon`, `PD_TongTien`, `PD_NgayHuy`) VALUES
(4663, 25, '2023-05-01 00:44:04', 2, 5, 'Đồng Tháp', 200000, '2023-05-01 00:45:24'),
(4664, 25, '2023-05-01 00:44:18', 4, 6, 'Cần Thơ', 600000, '2023-05-01 01:00:35'),
(4665, 25, '2023-05-01 00:44:37', 2, 5, 'Cần Thơ', 200000, '2023-05-01 00:45:24'),
(4666, 25, '2023-05-01 03:00:11', 2, 6, 'Cần Thơ', 600000, '2023-05-01 01:01:00'),
(4667, 25, '2023-05-01 00:50:26', 2, 5, 'Cần Thơ', 200000, '0000-00-00 00:00:00'),
(4668, 25, '2023-05-01 00:50:43', 4, 6, 'Đồng Tháp', 300000, '2023-05-01 01:02:04'),
(4669, 25, '2023-05-01 02:59:30', 4, 5, 'Đồng Tháp', 200000, '2023-05-01 01:04:02'),
(4670, 25, '2023-05-01 01:03:51', 0, 6, 'Cần Thơ', 600000, '0000-00-00 00:00:00'),
(4671, 25, '2023-05-01 02:04:42', 3, 56, 'Cần Thơ', 500000, '0000-00-00 00:00:00'),
(4672, 25, '2023-05-01 20:47:59', 4, 6, 'Đồng Tháp', 600000, '0000-00-00 00:00:00'),
(4673, 25, '2023-05-01 19:11:45', 4, 6, 'Cần Thơ', 600000, '0000-00-00 00:00:00'),
(4674, 25, '2023-05-01 23:18:46', 4, 5, 'Đồng Tháp', 200000, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `H_Ma` int(11) NOT NULL,
  `H_Ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `T_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`H_Ma`, `H_Ten`, `T_Ma`) VALUES
(1, 'Quận Ba Đình', 24),
(2, 'Quận Hoàn Kiếm', 24),
(3, 'Quận Tây Hồ', 24),
(4, 'Quận Long Biên', 24),
(5, 'Quận Cầu Giấy', 24),
(6, 'Quận Đống Đa', 24),
(7, 'Quận Hai Bà Trưng', 24),
(8, 'Quận Hoàng Mai', 24),
(9, 'Quận Thanh Xuân', 24),
(10, 'Huyện Sóc Sơn', 24),
(11, 'Huyện Đông Anh', 24),
(12, 'Huyện Gia Lâm', 24),
(13, 'Quận Nam Từ Liêm', 24),
(14, 'Huyện Thanh Trì', 24),
(15, 'Quận Bắc Từ Liêm', 24),
(16, 'Huyện Mê Linh', 24),
(17, 'Quận Hà Đông', 24),
(18, 'Thị xã Sơn Tây', 24),
(19, 'Huyện Ba Vì', 24),
(20, 'Huyện Phúc Thọ', 24),
(21, 'Huyện Đan Phượng', 24),
(22, 'Huyện Hoài Đức', 24),
(23, 'Huyện Quốc Oai', 24),
(24, 'Huyện Thạch Thất', 24),
(25, 'Huyện Chương Mỹ', 24),
(26, 'Huyện Thanh Oai', 24),
(27, 'Huyện Thường Tín', 24),
(28, 'Huyện Phú Xuyên', 24),
(29, 'Huyện Ứng Hòa', 24),
(30, 'Huyện Mỹ Đức', 24),
(31, 'Thành phố Hà Giang', 22),
(32, 'Huyện Đồng Văn', 22),
(33, 'Huyện Mèo Vạc', 22),
(34, 'Huyện Yên Minh', 22),
(35, 'Huyện Quản Bạ', 22),
(36, 'Huyện Vị Xuyên', 22),
(37, 'Huyện Bắc Mê', 22),
(38, 'Huyện Hoàng Su Phì', 22),
(39, 'Huyện Xín Mần', 22),
(40, 'Huyện Bắc Quang', 22),
(41, 'Huyện Quang Bình', 22),
(42, 'Thành phố Cao Bằng', 14),
(43, 'Huyện Bảo Lâm', 14),
(44, 'Huyện Bảo Lạc', 14),
(45, 'Huyện Hà Quảng', 14),
(46, 'Huyện Trùng Khánh', 14),
(47, 'Huyện Hạ Lang', 14),
(48, 'Huyện Quảng Hòa', 14),
(49, 'Huyện Hoà An', 14),
(50, 'Huyện Nguyên Bình', 14),
(51, 'Huyện Thạch An', 14),
(52, 'Thành phố Bắc Kạn', 4),
(53, 'Huyện Pác Nặm', 4),
(54, 'Huyện Ba Bể', 4),
(55, 'Huyện Ngân Sơn', 4),
(56, 'Huyện Bạch Thông', 4),
(57, 'Huyện Chợ Đồn', 4),
(58, 'Huyện Chợ Mới', 4),
(59, 'Huyện Na Rì', 4),
(60, 'Thành phố Tuyên Quang', 60),
(61, 'Huyện Lâm Bình', 60),
(62, 'Huyện Na Hang', 60),
(63, 'Huyện Chiêm Hóa', 60),
(64, 'Huyện Hàm Yên', 60),
(65, 'Huyện Yên Sơn', 60),
(66, 'Huyện Sơn Dương', 60),
(67, 'Thành phố Lào Cai', 37),
(68, 'Huyện Bát Xát', 37),
(69, 'Huyện Mường Khương', 37),
(70, 'Huyện Si Ma Cai', 37),
(71, 'Huyện Bắc Hà', 37),
(72, 'Huyện Bảo Thắng', 37),
(73, 'Huyện Bảo Yên', 37),
(74, 'Thị xã Sa Pa', 37),
(75, 'Huyện Văn Bàn', 37),
(76, 'Thành phố Điện Biên Phủ', 18),
(77, 'Thị Xã Mường Lay', 18),
(78, 'Huyện Mường Nhé', 18),
(79, 'Huyện Mường Chà', 18),
(80, 'Huyện Tủa Chùa', 18),
(81, 'Huyện Tuần Giáo', 18),
(82, 'Huyện Điện Biên', 18),
(83, 'Huyện Điện Biên Đông', 18),
(84, 'Huyện Mường Ảng', 18),
(85, 'Huyện Nậm Pồ', 18),
(86, 'Thành phố Lai Châu', 34),
(87, 'Huyện Tam Đường', 34),
(88, 'Huyện Mường Tè', 34),
(89, 'Huyện Sìn Hồ', 34),
(90, 'Huyện Phong Thổ', 34),
(91, 'Huyện Than Uyên', 34),
(92, 'Huyện Tân Uyên', 34),
(93, 'Huyện Nậm Nhùn', 34),
(94, 'Thành phố Sơn La', 51),
(95, 'Huyện Quỳnh Nhai', 51),
(96, 'Huyện Thuận Châu', 51),
(97, 'Huyện Mường La', 51),
(98, 'Huyện Bắc Yên', 51),
(99, 'Huyện Phù Yên', 51),
(100, 'Huyện Mộc Châu', 51),
(101, 'Huyện Yên Châu', 51),
(102, 'Huyện Mai Sơn', 51),
(103, 'Huyện Sông Mã', 51),
(104, 'Huyện Sốp Cộp', 51),
(105, 'Huyện Vân Hồ', 51),
(106, 'Thành phố Yên Bái', 63),
(107, 'Thị xã Nghĩa Lộ', 63),
(108, 'Huyện Lục Yên', 63),
(109, 'Huyện Văn Yên', 63),
(110, 'Huyện Mù Căng Chải', 63),
(111, 'Huyện Trấn Yên', 63),
(112, 'Trạm Tấu', 63),
(113, 'Huyện Văn Chấn', 63),
(114, 'Huyện Yên Bình', 63),
(115, 'Thành phố Hòa Bình', 29),
(116, 'Huyện Đà Bắc', 29),
(117, 'Huyện Lương Sơn', 29),
(118, 'Huyện Kim Bôi', 29),
(119, 'Huyện Cao Phong', 29),
(120, 'Huyện Tân Lạc', 29),
(121, 'Huyện Mai Châu', 29),
(122, 'Huyện Lạc Sơn', 29),
(123, 'Huyện Yên Thủy', 29),
(124, 'Huyện Lạc Thủy', 29),
(125, 'Thành phố Thái Nguyên', 54),
(126, 'Thành phố Sông Công', 54),
(127, 'Huyện Định Hóa', 54),
(128, 'Huyện Phú Lương', 54),
(129, 'Huyện Đồng Hỷ', 54),
(130, 'Huyện Võ Nhai', 54),
(131, 'Huyện Đại Từ', 54),
(132, 'Thành phố Phổ Yên', 54),
(133, 'Huyện Phú Bình', 54),
(134, 'Huyện Lạng Sơn', 36),
(135, 'Huyện Tràng Định', 36),
(136, 'Huyện Bình Gia', 36),
(137, 'Huyện Văn Lãng', 36),
(138, 'Huyện Cao Lộc', 36),
(139, 'Huyện Văn Quan', 36),
(140, 'Huyện Bắc Sơn', 36),
(141, 'Huyện Hữu Lũng', 36),
(142, 'Huyện Chi Lăng', 36),
(143, 'Huyện Lộc Bình', 36),
(144, 'Huyện Đình Lập', 36),
(145, 'Thành phố Hạ Long', 48),
(146, 'Thành phố Móng Cái', 48),
(147, 'Thành phố Cẩm Phả', 48),
(148, 'Thành phố Uông Bí', 48),
(149, 'Huyện Bình Liêu', 48),
(150, 'Huyện Tiên Yên', 48),
(151, 'Huyện Đầm Hà', 48),
(152, 'Huyện Hải Hà', 48),
(153, 'Huyện Ba Chẽ', 48),
(154, 'Huyện Vân Đồn', 48),
(155, 'Thị xã Đông Triều', 48),
(156, 'Thị xã Quảng Yên', 48),
(157, 'Huyện Cô Tô', 48),
(158, 'Huyện Yên Thế', 3),
(159, 'Huyện Tân Yên', 3),
(160, 'Huyện Lạng Giang', 3),
(161, 'Huyện Lục Nam', 3),
(162, 'Huyện Lục Ngạn', 3),
(163, 'Huyện Sơn Động', 3),
(164, 'Huyện Yên Dũng', 3),
(165, 'Huyện Việt Yên', 3),
(166, 'Huyện Hiệp Hòa', 3),
(167, 'Thành phố Việt Trì', 43),
(168, 'Thị xã Phú Thọ', 43),
(169, 'Huyện Đoan Hùng', 43),
(170, 'Huyện Hạ Hoà', 43),
(171, 'Huyện Thanh Ba', 43),
(172, 'Huyện Phù Ninh', 43),
(173, 'Huyện Yên Lập', 43),
(174, 'Huyện Cẩm Khê', 43),
(175, 'Huyện Tam Nông', 43),
(176, 'Huyện Lâm Thao', 43),
(177, 'Huyện Thanh Sơn', 43),
(178, 'Huyện Thanh Thuỷ', 43),
(179, 'Huyện Tân Sơn', 43),
(180, 'Thành phố Vĩnh Yên', 62),
(181, 'Thành phố Phúc Yên', 62),
(182, 'Huyện Lập Thạch', 62),
(183, 'Huyện Tam Dương', 62),
(184, 'Huyện Tam Đảo', 62),
(185, 'Huyện Bình Xuyên', 62),
(186, 'Huyện Yên Lạc', 62),
(187, 'Huyện Vĩnh Tường', 62),
(188, 'Huyện Sông Lô', 62),
(189, 'Thành phố Bắc Ninh', 6),
(190, 'Huyện Yên Phong', 6),
(191, 'Huyện Quế Võ', 6),
(192, 'Huyện Tiên Du', 6),
(193, 'Thành phố Từ Sơn', 6),
(194, 'Huyện Thuận Thành', 6),
(195, 'Huyện Gia Bình', 6),
(196, 'Huyện Lương Tài', 6),
(197, 'Thành phố Hải Dương', 26),
(198, 'Thành phố Chí Linh', 26),
(199, 'Huyện Nam Sách', 26),
(200, 'Thị xã Kinh Môn', 26),
(201, 'Huyện Kim Thành', 26),
(202, 'Huyện Thanh Hà', 26),
(203, 'Huyện Cẩm Giàng', 26),
(204, 'Huyện Bình Giang', 26),
(205, 'Huyện Gia Lộc', 26),
(206, 'Huyện Tứ Kỳ', 26),
(207, 'Huyện Ninh Giang', 26),
(208, 'Huyện Thanh Miện', 26),
(209, 'Thành phố Bắc Giang', 3),
(210, 'Quận Hồng Bàng', 27),
(211, 'Quận Ngô Quyền', 27),
(212, 'Quận Lê Chân', 27),
(213, 'Quận Hải An', 27),
(214, 'Quận Kiến An', 27),
(215, 'Quận Đồ Sơn', 27),
(216, 'Quận Dương Kinh', 27),
(217, 'Huyện Thuỷ Nguyên', 27),
(218, 'Huyện An Dương', 27),
(219, 'Huyện An Lão', 27),
(220, 'Huyện Kiến Thuỵ', 27),
(221, 'Huyện Tiên Lãng', 27),
(222, 'Huyện Vĩnh Bảo', 27),
(223, 'Huyện Cát Hải', 27),
(224, 'Huyện Bạch Long Vĩ', 27),
(225, 'Thành phố Hưng Yên', 30),
(226, 'Huyện Văn Lâm', 30),
(227, 'Huyện Văn Giang', 30),
(228, 'Huyện Yên Mỹ', 30),
(229, 'Thị xã Mỹ Hào', 30),
(230, 'Huyện Ân Thi', 30),
(231, 'Huyện Khoái Châu', 30),
(232, 'Huyện Kim Động', 30),
(233, 'Huyện Tiên Lữ', 30),
(234, 'Huyện Phù Cừ', 30),
(235, 'Thành phố Thái Bình', 53),
(236, 'Huyện Quỳnh Phụ', 53),
(237, 'Huyện Hưng Hà', 53),
(238, 'Huyện Đông Hưng', 53),
(239, 'Huyện Thái Thụy', 53),
(240, 'Huyện Tiền Hải', 53),
(241, 'Huyện Kiến Xương', 53),
(242, 'Huyện Vũ Thư', 53),
(243, 'Thành phố Phủ Lý', 23),
(244, 'Thị xã Duy Tiên', 23),
(245, 'Huyện Kim Bảng', 23),
(246, 'Huyện Thanh Liêm', 23),
(247, 'Huyện Bình Lục', 23),
(248, 'Huyện Lý Nhân', 23),
(249, 'Thành phố Nam Định', 39),
(250, 'Huyện Mỹ Lộc', 39),
(251, 'Huyện Vụ Bản', 39),
(252, 'Huyện Ý Yên', 39),
(253, 'Huyện Nghĩa Hưng', 39),
(254, 'Huyện Nam Trực', 39),
(255, 'Huyện Trực Ninh', 39),
(256, 'Huyện Xuân Trường', 39),
(257, 'Huyện Giao Thủy', 39),
(258, 'Huyện Hải Hậu', 39),
(259, 'Thành phố Ninh Bình', 41),
(260, 'Thành phố Tam Điệp', 41),
(261, 'Huyện Nho Quan', 41),
(262, 'Huyện Gia Viễn', 41),
(263, 'Huyện Hoa Lư', 41),
(264, 'Huyện Yên Khánh', 41),
(265, 'Huyện Kim Sơn', 41),
(266, 'Huyện Yên Mô', 41),
(267, 'Thành phố Thanh Hóa', 55),
(268, 'Thị xã Bỉm Sơn', 55),
(269, 'Thành phố Sầm Sơn', 55),
(270, 'Huyện Mường Lát', 55),
(271, 'Huyện Quan Hóa', 55),
(272, 'Huyện Bá Thước', 55),
(273, 'Huyện Quan Sơn', 55),
(274, 'Huyện Lang Chánh', 55),
(275, 'Huyện Ngọc Lặc', 55),
(276, 'Huyện Cẩm Thủy', 55),
(277, 'Huyện Thạch Thành', 55),
(278, 'Huyện Hà Trung', 55),
(279, 'Huyện Vĩnh Lộc', 55),
(280, 'Huyện Yên Định', 55),
(281, 'Huyện Thọ Xuân', 55),
(282, 'Huyện Thường Xuân', 55),
(283, 'Huyện Triệu Sơn', 55),
(284, 'Huyện Thiệu Hóa', 55),
(285, 'Huyện Hoằng Hóa', 55),
(286, 'Huyện Hậu Lộc', 55),
(287, 'Huyện Nga Sơn', 55),
(288, 'Huyện Như Xuân', 55),
(289, 'Huyện Như Thanh', 55),
(290, 'Huyện Nông Cống', 55),
(291, 'Huyện Đông Sơn', 55),
(292, 'Huyện Quảng Xương', 55),
(293, 'Thị xã Nghi Sơn', 55),
(294, 'Thành phố Vinh', 40),
(295, 'Thị xã Cửa Lò', 40),
(296, 'Thị xã Thái Hoà', 40),
(297, 'Huyện Quế Phong', 40),
(298, 'Huyện Quỳ Châu', 40),
(299, 'Huyện Kỳ Sơn', 40),
(300, 'Huyện Tương Dương', 40),
(301, 'Huyện Nghĩa Đàn', 40),
(302, 'Huyện Quỳ Hợp', 40),
(303, 'Huyện Quỳnh Lưu', 40),
(304, 'Huyện Con Cuông', 40),
(305, 'Huyện Tân Kỳ', 40),
(306, 'Huyện Anh Sơn', 40),
(307, 'Huyện Diễn Châu', 40),
(308, 'Huyện Yên Thành', 40),
(309, 'Huyện Đô Lương', 40),
(310, 'Huyện Thanh Chương', 40),
(311, 'Huyện Nghi Lộc', 40),
(312, 'Huyện Nam Đàn', 40),
(313, 'Huyện Hưng Nguyên', 40),
(314, 'Thị xã Hoàng Mai', 40),
(315, 'Thành phố Hà Tĩnh', 25),
(316, 'Thị xã Hồng Lĩnh', 25),
(317, 'Huyện Hương Sơn', 25),
(318, 'Huyện Đức Thọ', 25),
(319, 'Huyện Vũ Quang', 25),
(320, 'Huyện Nghi Xuân', 25),
(321, 'Huyện Can Lộc', 25),
(322, 'Huyện Hương Khê', 25),
(323, 'Huyện Thạch Hà', 25),
(324, 'Huyện Cẩm Xuyên', 25),
(325, 'Huyện Kỳ Anh', 25),
(326, 'Huyện Lộc Hà', 25),
(327, 'Thị xã Kỳ Anh', 25),
(328, 'Thành Phố Đồng Hới', 45),
(329, 'Huyện Minh Hóa', 45),
(330, 'Huyện Tuyên Hóa', 45),
(331, 'Huyện Quảng Trạch', 45),
(332, 'Huyện Bố Trạch', 45),
(333, 'Huyện Quảng Ninh', 45),
(334, 'Huyện Lệ Thủy', 45),
(335, 'Thị xã Ba Đồn', 45),
(336, 'Thành phố Đông Hà', 49),
(337, 'Thị xã Quảng Trị', 49),
(338, 'Huyện Vĩnh Linh', 49),
(339, 'Huyện Hướng Hóa', 49),
(340, 'Huyện Gio Linh', 49),
(341, 'Huyện Đa Krông', 49),
(342, 'Huyện Cam Lộ', 49),
(343, 'Huyện Triệu Phong', 49),
(344, 'Huyện Hải Lăng', 49),
(345, 'Huyện Cồn Cỏ', 49),
(346, 'Thành phố Huế', 56),
(347, 'Huyện Phong Điền', 56),
(348, 'Huyện Quảng Điền', 56),
(349, 'Huyện Phú Vang', 56),
(350, 'Thị xã Hương Thủy', 56),
(351, 'Thị xã Hương Trà', 56),
(352, 'Huyện A Lưới', 56),
(353, 'Huyện Phú Lộc', 56),
(354, 'Huyện Nam Đông', 56),
(355, 'Quận Liên Chiểu', 15),
(356, 'Quận Thanh Khê', 15),
(357, 'Quận Hải Châu', 15),
(358, 'Quận Sơn Trà', 15),
(359, 'Quận Ngũ Hành Sơn', 15),
(360, 'Quận Cẩm Lệ', 15),
(361, 'Huyện Hòa Vang', 15),
(362, 'Huyện Hoàng Sa', 15),
(363, 'Thành phố Tam Kỳ', 46),
(364, 'Thành phố Hội An', 46),
(365, 'Huyện Tây Giang', 46),
(366, 'Huyện Đông Giang', 46),
(367, 'Huyện Đại Lộc', 46),
(368, 'Thị xã Điện Bàn', 46),
(369, 'Huyện Duy Xuyên', 46),
(370, 'Huyện Quế Sơn', 46),
(371, 'Huyện Nam Giang', 46),
(372, 'Huyện Phước Sơn', 46),
(373, 'Huyện Hiệp Đức', 46),
(374, 'Huyện Thăng Bình', 46),
(375, 'Huyện Tiên Phước', 46),
(376, 'Huyện Bắc Trà My', 46),
(377, 'Huyện Nam Trà My', 46),
(378, 'Huyện Núi Thành', 46),
(379, 'Huyện Phú Ninh', 46),
(380, 'Huyện Nông Sơn', 46),
(381, 'Thành phố Quảng Ngãi', 47),
(382, 'Huyện Bình Sơn', 47),
(383, 'Huyện Trà Bồng', 47),
(384, 'Huyện Sơn Tịnh', 47),
(385, 'Huyện Tư Nghĩa', 47),
(386, 'Huyện Sơn Hà', 47),
(387, 'Huyện Sơn Tây', 47),
(388, 'Huyện Minh Long', 47),
(389, 'Huyện Nghĩa Hành', 47),
(390, 'Huyện Mộ Đức', 47),
(391, 'Thị xã Đức Phổ', 47),
(392, 'Huyện Ba Tơ', 47),
(393, 'Huyện Lý Sơn', 47),
(394, 'Thành phố Quy Nhơn', 8),
(395, 'Huyện An Lão', 8),
(396, 'Thị xã Hoài Nhơn', 8),
(397, 'Huyện Hoài Ân', 8),
(398, 'Huyện Phù Mỹ', 8),
(399, 'Huyện Vĩnh Thạnh', 8),
(400, 'Huyện Tây Sơn', 8),
(401, 'Huyện Phù Cát', 8),
(402, 'Thị xã An Nhơn', 8),
(403, 'Huyện Tuy Phước', 8),
(404, 'Huyện Vân Canh', 8),
(405, 'Thành phố Tuy Hoà', 44),
(406, 'Thị xã Sông Cầu', 44),
(407, 'Huyện Đồng Xuân', 44),
(408, 'Huyện Tuy An', 44),
(409, 'Huyện Sơn Hòa', 44),
(410, 'Huyện Sông Hinh', 44),
(411, 'Huyện Tây Hoà', 44),
(412, 'Huyện Phú Hoà', 44),
(413, 'Thị xã Đông Hòa', 44),
(414, 'Thành phố Nha Trang', 31),
(415, 'Thành phố Cam Ranh', 31),
(416, 'Huyện Cam Lâm', 31),
(417, 'Huyện Vạn Ninh', 31),
(418, 'Thị xã Ninh Hòa', 31),
(419, 'Huyện Khánh Vĩnh', 31),
(420, 'Huyện Diên Khánh', 31),
(421, 'Huyện Khánh Sơn', 31),
(422, 'Huyện Trường Sa', 31),
(423, 'Thành phố Phan Rang-Tháp Chàm', 42),
(424, 'Huyện Bác Ái', 42),
(425, 'Huyện Ninh Sơn', 42),
(426, 'Huyện Ninh Hải', 42),
(427, 'Huyện Ninh Phước', 42),
(428, 'Huyện Thuận Bắc', 42),
(429, 'Huyện Thuận Nam', 42),
(430, 'Thành phố Phan Thiết', 11),
(431, 'Thị xã La Gi', 11),
(432, 'Huyện Tuy Phong', 11),
(433, 'Huyện Bắc Bình', 11),
(434, 'Huyện Hàm Thuận Bắc', 11),
(435, 'Huyện Hàm Thuận Nam', 11),
(436, 'Huyện Tánh Linh', 11),
(437, 'Huyện Đức Linh', 11),
(438, 'Huyện Hàm Tân', 11),
(439, 'Huyện Phú Quí', 11),
(440, 'Thành phố Kon Tum', 33),
(441, 'Huyện Đắk Glei', 33),
(442, 'Huyện Ngọc Hồi', 33),
(443, 'Huyện Đắk Tô', 33),
(444, 'Huyện Kon Plông', 33),
(445, 'Huyện Kon Rẫy', 33),
(446, 'Huyện Đắk Hà', 33),
(447, 'Huyện Sa Thầy', 33),
(448, 'Huyện Tu Mơ Rông', 33),
(449, 'Huyện Ia H\'Drai', 33),
(450, 'Thành phố Pleiku', 21),
(451, 'Thị xã An Khê', 21),
(452, 'Thị xã Ayun Pa', 21),
(453, 'Huyện KBang', 21),
(454, 'Huyện Đăk Đoa', 21),
(455, 'Huyện Chư Păh', 21),
(456, 'Huyện Ia Grai', 21),
(457, 'Huyện Mang Yang', 21),
(458, 'Huyện Kông Chro', 21),
(459, 'Huyện Đức Cơ', 21),
(460, 'Huyện Chư Prông', 21),
(461, 'Huyện Chư Sê', 21),
(462, 'Huyện Đăk Pơ', 21),
(463, 'Huyện Ia Pa', 21),
(464, 'Huyện Krông Pa', 21),
(465, 'Huyện Phú Thiện', 21),
(466, 'Huyện Chư Pưh', 21),
(467, 'Thành phố Buôn Ma Thuột', 16),
(468, 'Thị Xã Buôn Hồ', 16),
(469, 'Huyện Ea H\'leo', 16),
(470, 'Huyện Ea Súp', 16),
(471, 'Huyện Buôn Đôn', 16),
(472, 'Huyện Cư M\'gar', 16),
(473, 'Huyện Krông Búk', 16),
(474, 'Huyện Krông Năng', 16),
(475, 'Huyện Ea Kar', 16),
(476, 'Huyện M\'Đrắ', 16),
(477, 'Huyện Krông Bông', 16),
(478, 'Huyện Krông Pắc', 16),
(479, 'Huyện Krông A Na', 16),
(480, 'Huyện Lắk', 16),
(481, 'Huyện Cư Kuin', 16),
(482, 'Thành phố Gia Nghĩa', 17),
(483, 'Huyện Đăk Glong', 17),
(484, 'Huyện Cư Jút', 17),
(485, 'Huyện Đắk Mil', 17),
(486, 'Huyện Krông Nô', 17),
(487, 'Huyện Đắk Song', 17),
(488, 'Huyện Đắk R\'Lấp', 17),
(489, 'Huyện Tuy Đức', 17),
(490, 'Thành phố Đà Lạt', 35),
(491, 'Thành phố Bảo Lộc', 35),
(492, 'Huyện Đam Rông', 35),
(493, 'Huyện Lạc Dương', 35),
(494, 'Huyện Lâm Hà', 35),
(495, 'Huyện Đơn Dương', 35),
(496, 'Huyện Đức Trọng', 35),
(497, 'Huyện Di Linh', 35),
(498, 'Huyện Bảo Lâm', 35),
(499, 'Huyện Đạ Huoai', 35),
(500, 'Huyện Đạ Tẻh', 35),
(501, 'Huyện Cát Tiên', 35),
(502, 'Thị xã Phước Long', 10),
(503, 'Thành phố Đồng Xoài', 10),
(504, 'Thị xã Bình Long', 10),
(505, 'Huyện Bù Gia Mập', 10),
(506, 'Huyện Lộc Ninh', 10),
(507, 'Huyện Bù Đốp', 10),
(508, 'Huyện Hớn Quản', 10),
(509, 'Huyện Đồng Phú', 10),
(510, 'Huyện Bù Đăng', 10),
(511, 'Thị xã Chơn Thành', 10),
(512, 'Huyện Phú Riềng', 10),
(513, 'Thành phố Tây Ninh', 52),
(514, 'Huyện Tân Biên', 52),
(515, 'Huyện Tân Châu', 52),
(516, 'Huyện Dương Minh Châu', 52),
(517, 'Huyện Châu Thành', 52),
(518, 'Thị xã Hòa Thành', 52),
(519, 'Huyện Gò Dầu', 52),
(520, 'Huyện Bến Cầu', 52),
(521, 'Thị xã Trảng Bàng', 52),
(522, 'Thành phố Thủ Dầu Một', 9),
(523, 'Huyện Bàu Bàng', 9),
(524, 'Huyện Dầu Tiếng', 9),
(525, 'Thị xã Bến Cát', 9),
(526, 'Huyện Phú Giáo', 9),
(527, 'Thị xã Tân Uyên', 9),
(528, 'Thành phố Dĩ An', 9),
(529, 'Thành phố Thuận An', 9),
(530, 'Huyện Bắc Tân Uyên', 9),
(531, 'Thành phố Biên Hòa', 19),
(532, 'Thành phố Long Khánh', 19),
(533, 'Huyện Tân Phú', 19),
(534, 'Huyện Vĩnh Cửu', 19),
(535, 'Huyện Định Quán', 19),
(536, 'Huyện Trảng Bom', 19),
(537, 'Huyện Thống Nhất', 19),
(538, 'Huyện Cẩm Mỹ', 19),
(539, 'Huyện Long Thành', 19),
(540, 'Huyện Xuân Lộc', 19),
(541, 'Huyện Nhơn Trạch', 19),
(542, 'Thành phố Vũng Tàu', 2),
(543, 'Thành phố Bà Rịa', 2),
(544, 'Huyện Châu Đức', 2),
(545, 'Huyện Xuyên Mộc', 2),
(546, 'Huyện Long Điền', 2),
(547, 'Huyện Đất Đỏ', 2),
(548, 'Thị xã Phú Mỹ', 2),
(549, 'Huyện Côn Đảo', 2),
(550, 'Quận 1', 58),
(551, 'Quận 53', 58),
(552, 'Quận Gò Vấp', 58),
(553, 'Quận Bình Thạnh', 58),
(554, 'Quận Tân Bình', 58),
(555, 'Quận Tân Phú', 58),
(556, 'Quận Phú Nhuận', 58),
(557, 'Thành phố Thủ Đức', 58),
(558, 'Quận 3', 58),
(559, 'Quận 41', 58),
(560, 'Quận 18', 58),
(561, 'Quận 4', 58),
(562, 'Quận 5', 58),
(563, 'Quận 6', 58),
(564, 'Quận 8', 58),
(565, 'Quận Bình Tân', 58),
(566, 'Quận 7', 58),
(567, 'Huyện Củ Chi', 58),
(568, 'Huyện Hóc Môn', 58),
(569, 'Huyện Bình Chánh', 58),
(570, 'Huyện Nhà Bè', 58),
(571, 'Huyện Cần Giờ', 58),
(572, 'Thành phố Tân An', 38),
(573, 'Thị xã Kiến Tường', 38),
(574, 'Huyện Tân Hưng', 38),
(575, 'Huyện Vĩnh Hưng', 38),
(576, 'Huyện Mộc Hóa', 38),
(577, 'Huyện Tân Thạnh', 38),
(578, 'Huyện Thạnh Hóa', 38),
(579, 'Huyện Đức Huệ', 38),
(580, 'Huyện Đức Hòa', 38),
(581, 'Huyện Bến Lức', 38),
(582, 'Huyện Thủ Thừa', 38),
(583, 'Huyện Tân Trụ', 38),
(584, 'Huyện Cần Đước', 38),
(585, 'Huyện Cần Giuộc', 38),
(586, 'Huyện Châu Thành', 38),
(587, 'Thành phố Mỹ Tho', 57),
(588, 'Thị xã Gò Công', 57),
(589, 'Thị xã Cai Lậy', 57),
(590, 'Huyện Tân Phước', 57),
(591, 'Huyện Cái Bè', 57),
(592, 'Huyện Cai Lậy', 57),
(593, 'Huyện Châu Thành', 57),
(594, 'Huyện Chợ Gạo', 57),
(595, 'Huyện Gò Công Tây', 57),
(596, 'Huyện Gò Công Đông', 57),
(597, 'Huyện Tân Phú Đông', 57),
(598, 'Thành phố Bến Tre', 7),
(599, 'Huyện Châu Thành', 7),
(600, 'Huyện Chợ Lách', 7),
(601, 'Huyện Mỏ Cày Nam', 7),
(602, 'Huyện Giồng Trôm', 7),
(603, 'Huyện Bình Đại', 7),
(604, 'Huyện Ba Tri', 7),
(605, 'Huyện Thạnh Phú', 7),
(606, 'Huyện Mỏ Cày Bắc', 7),
(607, 'Thành phố Trà Vinh', 59),
(608, 'Huyện Càng Long', 59),
(609, 'Huyện Cầu Kè', 59),
(610, 'Huyện Tiểu Cần', 59),
(611, 'Huyện Châu Thành', 59),
(612, 'Huyện Cầu Ngang', 59),
(613, 'Huyện Trà Cú', 59),
(614, 'Huyện Duyên Hải', 59),
(615, 'Thị xã Duyên Hải', 59),
(616, 'Thành phố Vĩnh Long', 61),
(617, 'Huyện Long Hồ', 61),
(618, 'Huyện Mang Thít', 61),
(619, 'Huyện Vũng Liêm', 61),
(620, 'Huyện Tam Bình', 61),
(621, 'Thị xã Bình Minh', 61),
(622, 'Huyện Trà Ôn', 61),
(623, 'Huyện Bình Tân', 61),
(624, 'Thành phố Cao Lãnh', 20),
(625, 'Thành phố Sa Đéc', 20),
(626, 'Thành phố Hồng Ngự', 20),
(627, 'Huyện Tân Hồng', 20),
(628, 'Huyện Hồng Ngự', 20),
(629, 'Huyện Tam Nông', 20),
(630, 'Huyện Tháp Mười', 20),
(631, 'Huyện Cao Lãnh', 20),
(632, 'Huyện Thanh Bình', 20),
(633, 'Huyện Lấp Vò', 20),
(634, 'Huyện Lai Vung', 20),
(635, 'Huyện Châu Thành', 20),
(636, 'Thành phố Long Xuyên', 1),
(637, 'Thành phố Châu Đốc', 1),
(638, 'Huyện An Phú', 1),
(639, 'Thị xã Tân Châu', 1),
(640, 'Huyện Phú Tân', 1),
(641, 'Huyện Châu Phú', 1),
(642, 'Huyện Tịnh Biên', 1),
(643, 'Huyện Tri Tôn', 1),
(644, 'Huyện Châu Thành', 1),
(645, 'Huyện Chợ Mới', 1),
(646, 'Huyện Thoại Sơn', 1),
(647, 'Thành phố Rạch Giá', 32),
(648, 'Thành phố Hà Tiên', 32),
(649, 'Huyện Kiên Lương', 32),
(650, 'Huyện Hòn Đất', 32),
(651, 'Huyện Tân Hiệp', 32),
(652, 'Huyện Châu Thành', 32),
(653, 'Huyện Giồng Riềng', 32),
(654, 'Huyện Gò Quao', 32),
(655, 'Huyện An Biên', 32),
(656, 'Huyện An Minh', 32),
(657, 'Huyện Vĩnh Thuận', 32),
(658, 'Thành phố Phú Quốc', 32),
(659, 'Huyện Kiên Hải', 32),
(660, 'Huyện U Minh Thượng', 32),
(661, 'Huyện Giang Thành', 32),
(662, 'Quận Ninh Kiều', 13),
(663, 'Quận Ô Môn', 13),
(664, 'Quận Bình Thuỷ', 13),
(665, 'Quận Cái Răng', 13),
(666, 'Quận Thốt Nốt', 13),
(667, 'Huyện Vĩnh Thạnh', 13),
(668, 'Huyện Cờ Đỏ', 13),
(669, 'Huyện Phong Điền', 13),
(670, 'Huyện Thới Lai', 13),
(671, 'Thành phố Vị Thanh', 28),
(672, 'Thành phố Ngã Bảy', 28),
(673, 'Huyện Châu Thành A', 28),
(674, 'Huyện Châu Thành', 28),
(675, 'Huyện Phụng Hiệp', 28),
(676, 'Huyện Vị Thuỷ', 28),
(677, 'Huyện Long Mỹ', 28),
(678, 'Thị xã Long Mỹ', 28),
(679, 'Thành phố Sóc Trăng', 50),
(680, 'Huyện Châu Thành', 50),
(681, 'Huyện Kế Sách', 50),
(682, 'Huyện Mỹ Tú', 50),
(683, 'Huyện Cù Lao Dung', 50),
(684, 'Huyện Long Phú', 50),
(685, 'Huyện Mỹ Xuyên', 50),
(686, 'Thị xã Ngã Năm', 50),
(687, 'Huyện Thạnh Trị', 50),
(688, 'Thị xã Vĩnh Châu', 50),
(689, 'Huyện Trần Đề', 50),
(690, 'Thành phố Bạc Liêu', 5),
(691, 'Huyện Hồng Dân', 5),
(692, 'Huyện Phước Long', 5),
(693, 'Huyện Vĩnh Lợi', 5),
(694, 'Thị xã Giá Rai', 5),
(695, 'Huyện Đông Hải', 5),
(696, 'Huyện Hoà Bình', 5),
(697, 'Thành phố Cà Mau', 12),
(698, 'Huyện U Minh', 12),
(699, 'Huyện Thới Bình', 12),
(700, 'Huyện Trần Văn Thời', 12),
(701, 'Huyện Cái Nước', 12),
(702, 'Huyện Đầm Dơi', 12),
(703, 'Huyện Năm Căn', 12),
(704, 'Huyện Phú Tân', 12),
(705, 'Huyện Ngọc Hiển', 12);

-- --------------------------------------------------------

--
-- Table structure for table `slvedat`
--

CREATE TABLE `slvedat` (
  `PD_Ma` int(11) DEFAULT NULL,
  `KH_Ma` int(11) DEFAULT NULL,
  `G_Ma` int(11) DEFAULT NULL,
  `PD_NgayDat` datetime DEFAULT NULL,
  `PD_TrangThai` tinyint(1) DEFAULT NULL,
  `C_Ma` int(11) DEFAULT NULL,
  `PD_DiemDon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PD_TenKH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PD_EmailKH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PD_SdtKH` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PD_TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taixe`
--

CREATE TABLE `taixe` (
  `TX_Ma` int(11) NOT NULL,
  `TX_Ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_Sdt` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_GPLX` int(11) NOT NULL,
  `TX_MatKhau` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_GioiTinh` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_NgaySinh` date NOT NULL,
  `TX_DiaChi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_Password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TX_Repass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `taixe`
--

INSERT INTO `taixe` (`TX_Ma`, `TX_Ten`, `TX_Sdt`, `TX_GPLX`, `TX_MatKhau`, `TX_Hinh`, `TX_GioiTinh`, `TX_NgaySinh`, `TX_DiaChi`, `TX_Password`, `TX_Repass`) VALUES
(1, 'Trần Văn Nga', '0123654987', 12345678, '123456', 'giphy.gif', 'Nam', '2001-05-03', 'Đồng Tháp', '', 0),
(2, 'Trần Văn Mạnh', '0789456321', 14785236, '123456', 'ca loc.jpg', 'Nam', '1996-03-09', 'Cần Thơ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `TT_Ma` int(11) NOT NULL,
  `TT_PhuongThuc` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `PD_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`TT_Ma`, `TT_PhuongThuc`, `PD_Ma`) VALUES
(79, 'Thanh toán bằng tiền mặt', 4663),
(80, 'Thanh toán bằng tiền mặt', 4664),
(81, 'Thanh toán bằng tiền mặt', 4665),
(82, 'Thanh toán bằng tiền mặt', 4666),
(83, 'Thanh toán bằng tiền mặt', 4667),
(84, 'Thanh toán bằng tiền mặt', 4668),
(85, 'Thanh toán bằng tiền mặt', 4669),
(86, 'Thanh toán bằng tiền mặt', 4670),
(87, 'Thanh toán bằng tiền mặt', 4671),
(88, 'Thanh toán bằng tiền mặt', 4672),
(89, 'Thanh toán bằng tiền mặt', 4673),
(90, 'Thanh toán bằng tiền mặt', 4674);

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `T_Ma` int(11) NOT NULL,
  `T_Ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`T_Ma`, `T_Ten`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa - Vũng Tàu'),
(3, 'Bắc Giang'),
(4, 'Bắc Kạn'),
(5, 'Bạc Liêu'),
(6, 'Bắc Ninh'),
(7, 'Bến Tre'),
(8, 'Bình Định'),
(9, 'Bình Dương'),
(10, 'Bình Phước'),
(11, 'Bình Thuận'),
(12, 'Cà Mau'),
(13, 'Cần Thơ'),
(14, 'Cao Bằng'),
(15, 'Đà Nẵng'),
(16, 'Đắk Lắk'),
(17, 'Đắk Nông'),
(18, 'Điện Biên'),
(19, 'Đồng Nai'),
(20, 'Đồng Tháp'),
(21, 'Gia Lai'),
(22, 'Hà Giang'),
(23, 'Hà Nam'),
(24, 'Hà Nội'),
(25, 'Hà Tĩnh'),
(26, 'Hải Dương'),
(27, 'Hải Phòng'),
(28, 'Hậu Giang'),
(29, 'Hòa Bình'),
(30, 'Hưng Yên'),
(31, 'Khánh Hòa'),
(32, 'Kiên Giang'),
(33, 'Kon Tum'),
(34, 'Lai Châu'),
(35, 'Lâm Đồng'),
(36, 'Lạng Sơn'),
(37, 'Lào Cai'),
(38, 'Long An'),
(39, 'Nam Định'),
(40, 'Nghệ An'),
(41, 'Ninh Bình'),
(42, 'Ninh Thuận'),
(43, 'Phú Thọ'),
(44, 'Phú Yên'),
(45, 'Quảng Bình'),
(46, 'Quảng Nam'),
(47, 'Quảng Ngãi'),
(48, 'Quảng Ninh'),
(49, 'Quảng Trị'),
(50, 'Sóc Trăng'),
(51, 'Sơn La'),
(52, 'Tây Ninh'),
(53, 'Thái Bình'),
(54, 'Thái Nguyên'),
(55, 'Thanh Hóa'),
(56, 'Thừa Thiên Huế'),
(57, 'Tiền Giang'),
(58, 'Thành phố Hồ Chí Minh'),
(59, 'Trà Vinh'),
(60, 'Tuyên Quang'),
(61, 'Vĩnh Long'),
(62, 'Vĩnh Phúc'),
(63, 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `tuyenchay`
--

CREATE TABLE `tuyenchay` (
  `TC_Ma` int(11) NOT NULL,
  `TC_Ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `TC_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TC_ThoiGianTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tuyenchay`
--

INSERT INTO `tuyenchay` (`TC_Ma`, `TC_Ten`, `TC_Hinh`, `TC_ThoiGianTao`) VALUES
(1, 'Đồng Tháp - Cần Thơ', 'Do-ghe-limousine-proauto.vn_.jpg', '2022-02-01 14:44:24'),
(2, 'Cần Thơ - Bạc Liêu', 'noi-that-ford-tourneo-limousine.jpg', '2023-01-01 14:44:24'),
(4, 'Bạc Liêu - Đà Nẵng', 'ok5ok.jpg', '2021-01-03 14:44:24'),
(5, 'Lâm Đồng - Hồ Chí Minh', 'xe-limousine-sai-gon-tay-ninh-hue-nghia-1.jpg', '2020-02-02 14:44:24'),
(10, 'Cà Mau - Hồ Chí Minh', 'ga.jpg', '2023-01-09 14:44:24'),
(11, 'Sóc Trăng - Đồng Tháp', 'Do-ghe-limousine-SUV-con-ngua-640x427.jpg', '2023-02-06 14:44:24'),
(12, 'Cần Thơ - Châu Đốc', 'ghe.png', '2023-02-26 14:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `VT_Ma` int(11) NOT NULL,
  `VT_Ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`VT_Ma`, `VT_Ten`) VALUES
(1, 'Bán vé'),
(2, 'CSKH');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `LX_Ma` int(11) NOT NULL,
  `X_Hieu` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `X_MauSac` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `X_NamSX` date NOT NULL DEFAULT current_timestamp(),
  `X_Ma` int(11) NOT NULL,
  `X_BienSo` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `X_Hinh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`LX_Ma`, `X_Hieu`, `X_MauSac`, `X_NamSX`, `X_Ma`, `X_BienSo`, `X_Hinh`) VALUES
(1, 'THACO', 'Đỏ', '2017-11-15', 1, '66A-4567.87', 'xe-di-Nghe-An-2.jpg'),
(2, 'Toyota', 'Đen', '2017-12-21', 2, '66L-1234.56', 'xe-35-cho-nha-trang-1.jpg'),
(1, 'Audi', 'Trắng', '2022-11-16', 3, '67A-1234.58', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Ma`);

--
-- Indexes for table `benxe`
--
ALTER TABLE `benxe`
  ADD PRIMARY KEY (`BX_Ma`),
  ADD KEY `H_Ma` (`H_Ma`);

--
-- Indexes for table `chitietghe`
--
ALTER TABLE `chitietghe`
  ADD KEY `G_Ma` (`G_Ma`);

--
-- Indexes for table `chitietphieudat`
--
ALTER TABLE `chitietphieudat`
  ADD PRIMARY KEY (`CT_Ma`),
  ADD KEY `PD_Ma` (`PD_Ma`),
  ADD KEY `G_Ma` (`G_Ma`);

--
-- Indexes for table `chuyen`
--
ALTER TABLE `chuyen`
  ADD PRIMARY KEY (`C_Ma`),
  ADD KEY `NV_Ma` (`NV_Ma`),
  ADD KEY `TC_Ma` (`TC_Ma`),
  ADD KEY `X_Ma` (`X_Ma`),
  ADD KEY `chuyen_ibfk_10` (`TX_Ma`),
  ADD KEY `chuyen_ibfk_5` (`BXD_Ma`),
  ADD KEY `chuyen_ibfk_12` (`BXKH_Ma`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`DG_Ma`);

--
-- Indexes for table `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`G_Ma`),
  ADD KEY `X_Ma` (`X_Ma`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`HD_Ma`),
  ADD KEY `PD_Ma` (`PD_Ma`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`KH_Ma`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`KM_Ma`),
  ADD KEY `TC_Ma` (`TC_Ma`);

--
-- Indexes for table `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`LX_Ma`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`NV_Ma`),
  ADD KEY `VT_Ma` (`VT_Ma`);

--
-- Indexes for table `phieudatve`
--
ALTER TABLE `phieudatve`
  ADD PRIMARY KEY (`PD_Ma`),
  ADD KEY `KH_Ma` (`KH_Ma`),
  ADD KEY `C_Ma` (`C_Ma`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`H_Ma`),
  ADD KEY `T_Ma` (`T_Ma`);

--
-- Indexes for table `taixe`
--
ALTER TABLE `taixe`
  ADD PRIMARY KEY (`TX_Ma`,`TX_GPLX`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`TT_Ma`),
  ADD KEY `PD_Ma` (`PD_Ma`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`T_Ma`);

--
-- Indexes for table `tuyenchay`
--
ALTER TABLE `tuyenchay`
  ADD PRIMARY KEY (`TC_Ma`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`VT_Ma`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`X_Ma`),
  ADD KEY `LX_Ma` (`LX_Ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benxe`
--
ALTER TABLE `benxe`
  MODIFY `BX_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chitietphieudat`
--
ALTER TABLE `chitietphieudat`
  MODIFY `CT_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `chuyen`
--
ALTER TABLE `chuyen`
  MODIFY `C_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `DG_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ghe`
--
ALTER TABLE `ghe`
  MODIFY `G_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `HD_Ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `KH_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `KM_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `LX_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `NV_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `phieudatve`
--
ALTER TABLE `phieudatve`
  MODIFY `PD_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4675;

--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `H_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `taixe`
--
ALTER TABLE `taixe`
  MODIFY `TX_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `TT_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `T_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tuyenchay`
--
ALTER TABLE `tuyenchay`
  MODIFY `TC_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `VT_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `X_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `benxe`
--
ALTER TABLE `benxe`
  ADD CONSTRAINT `benxe_ibfk_1` FOREIGN KEY (`H_Ma`) REFERENCES `quanhuyen` (`H_Ma`);

--
-- Constraints for table `chitietghe`
--
ALTER TABLE `chitietghe`
  ADD CONSTRAINT `chitietghe_ibfk_1` FOREIGN KEY (`G_Ma`) REFERENCES `ghe` (`G_Ma`),
  ADD CONSTRAINT `chitietghe_ibfk_2` FOREIGN KEY (`G_Ma`) REFERENCES `ghe` (`G_Ma`),
  ADD CONSTRAINT `chitietghe_ibfk_3` FOREIGN KEY (`G_Ma`) REFERENCES `ghe` (`G_Ma`);

--
-- Constraints for table `chitietphieudat`
--
ALTER TABLE `chitietphieudat`
  ADD CONSTRAINT `chitietphieudat_ibfk_1` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`),
  ADD CONSTRAINT `chitietphieudat_ibfk_2` FOREIGN KEY (`G_Ma`) REFERENCES `ghe` (`G_Ma`);

--
-- Constraints for table `chuyen`
--
ALTER TABLE `chuyen`
  ADD CONSTRAINT `chuyen_ibfk_1` FOREIGN KEY (`NV_Ma`) REFERENCES `nhanvien` (`NV_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_10` FOREIGN KEY (`TX_Ma`) REFERENCES `taixe` (`TX_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_12` FOREIGN KEY (`BXKH_Ma`) REFERENCES `benxe` (`BX_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_2` FOREIGN KEY (`TC_Ma`) REFERENCES `tuyenchay` (`TC_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_3` FOREIGN KEY (`NV_Ma`) REFERENCES `nhanvien` (`NV_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_4` FOREIGN KEY (`TC_Ma`) REFERENCES `tuyenchay` (`TC_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_5` FOREIGN KEY (`BXD_Ma`) REFERENCES `benxe` (`BX_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_6` FOREIGN KEY (`NV_Ma`) REFERENCES `nhanvien` (`NV_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_7` FOREIGN KEY (`TC_Ma`) REFERENCES `tuyenchay` (`TC_Ma`),
  ADD CONSTRAINT `chuyen_ibfk_9` FOREIGN KEY (`X_Ma`) REFERENCES `xe` (`X_Ma`);

--
-- Constraints for table `ghe`
--
ALTER TABLE `ghe`
  ADD CONSTRAINT `ghe_ibfk_1` FOREIGN KEY (`X_Ma`) REFERENCES `xe` (`X_Ma`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`),
  ADD CONSTRAINT `hoadon_ibfk_3` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`);

--
-- Constraints for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`TC_Ma`) REFERENCES `tuyenchay` (`TC_Ma`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`VT_Ma`) REFERENCES `vaitro` (`VT_Ma`),
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`VT_Ma`) REFERENCES `vaitro` (`VT_Ma`);

--
-- Constraints for table `phieudatve`
--
ALTER TABLE `phieudatve`
  ADD CONSTRAINT `phieudatve_ibfk_1` FOREIGN KEY (`KH_Ma`) REFERENCES `khachhang` (`KH_Ma`),
  ADD CONSTRAINT `phieudatve_ibfk_11` FOREIGN KEY (`C_Ma`) REFERENCES `chuyen` (`C_Ma`),
  ADD CONSTRAINT `phieudatve_ibfk_12` FOREIGN KEY (`C_Ma`) REFERENCES `chuyen` (`C_Ma`),
  ADD CONSTRAINT `phieudatve_ibfk_4` FOREIGN KEY (`KH_Ma`) REFERENCES `khachhang` (`KH_Ma`),
  ADD CONSTRAINT `phieudatve_ibfk_7` FOREIGN KEY (`KH_Ma`) REFERENCES `khachhang` (`KH_Ma`);

--
-- Constraints for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD CONSTRAINT `quanhuyen_ibfk_1` FOREIGN KEY (`T_Ma`) REFERENCES `tinhthanh` (`T_Ma`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`),
  ADD CONSTRAINT `thanhtoan_ibfk_2` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`),
  ADD CONSTRAINT `thanhtoan_ibfk_3` FOREIGN KEY (`PD_Ma`) REFERENCES `phieudatve` (`PD_Ma`);

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`LX_Ma`) REFERENCES `loaixe` (`LX_Ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
