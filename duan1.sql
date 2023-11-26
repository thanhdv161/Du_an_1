-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 07:17 AM
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
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(10) NOT NULL,
  `noiDung` varchar(255) NOT NULL,
  `maTK` int(10) NOT NULL,
  `maHH` int(10) NOT NULL,
  `ngayBL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluantintuc`
--

CREATE TABLE `binhluantintuc` (
  `maBLTT` int(10) NOT NULL,
  `noiDung` varchar(255) NOT NULL,
  `maTK` int(10) NOT NULL,
  `maTT` int(10) NOT NULL,
  `ngayBL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `maCT` int(10) NOT NULL,
  `maDH` int(10) NOT NULL,
  `maHH` int(10) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `tongTien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `maLoai` int(10) NOT NULL,
  `tenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`maLoai`, `tenLoai`) VALUES
(1, 'iPhone'),
(2, 'Xiaomi'),
(3, 'Realme');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(10) NOT NULL,
  `tenKH` varchar(255) NOT NULL,
  `ngayDatHang` date NOT NULL,
  `tongTien` double NOT NULL,
  `ghiChu` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `maTrangThai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `maHH` int(10) NOT NULL,
  `tenHH` varchar(255) NOT NULL,
  `gia` double NOT NULL,
  `giamGia` double NOT NULL,
  `giagoc` double NOT NULL DEFAULT 0,
  `anh` varchar(255) NOT NULL,
  `maLoai` int(10) NOT NULL,
  `soLuotXem` int(10) NOT NULL,
  `moTa` varchar(255) NOT NULL,
  `luotxem` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`maHH`, `tenHH`, `gia`, `giamGia`, `giagoc`, `anh`, `maLoai`, `soLuotXem`, `moTa`, `luotxem`) VALUES
(3, 'iPhone 14 Pro Max', 24590000, 3400000, 27990000, 'ip1.1.jpeg', 1, 1, 'Description for iPhone 14 Pro Max', 0),
(4, 'iPhone 15 Pro Max', 33690000, 4000000, 37690000, 'ip2.1.jpeg\r\n', 1, 0, 'Description for iPhone 15 Pro Max', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `maLoaiTT` int(10) NOT NULL,
  `tenLoaiTT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` int(10) NOT NULL,
  `tenTK` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `maVaiTro` int(10) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `tenTK`, `matKhau`, `email`, `diaChi`, `maVaiTro`, `anh`, `sdt`) VALUES
(11, 'thanh', '123456', 'kh1@gmail.com', 'ha nam', 2, 'Acer_Wallpaper_03_5000x2814.jpg', 0),
(12, 'admin', '123456', 'ad1@gmail.com', 'ha nam', 4, 'Acer_Wallpaper_01_5000x2814.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `maTT` int(10) NOT NULL,
  `ngayVietTin` date NOT NULL,
  `maTK` int(11) NOT NULL,
  `maLoaiTT` int(10) NOT NULL,
  `tieuDeTT` varchar(255) NOT NULL,
  `noiDungTT` varchar(255) NOT NULL,
  `anhTT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `maTrangThai` int(10) NOT NULL,
  `tenTrangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `maVaitro` int(10) NOT NULL,
  `tenVaiTro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`maVaitro`, `tenVaiTro`) VALUES
(1, 'khách hàng văng lai'),
(2, 'khách hàng'),
(3, 'nhân viên'),
(4, 'quản trị viên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `fk_hanghoa` (`maHH`),
  ADD KEY `fk_taikhoan` (`maTK`);

--
-- Indexes for table `binhluantintuc`
--
ALTER TABLE `binhluantintuc`
  ADD PRIMARY KEY (`maBLTT`),
  ADD KEY `fk_mataikhoan` (`maTK`),
  ADD KEY `fk_matintuc` (`maTT`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`maCT`),
  ADD KEY `fk_maHH` (`maHH`),
  ADD KEY `fk_maDH` (`maDH`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`maLoai`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`),
  ADD KEY `fk_matt` (`maTrangThai`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`maHH`),
  ADD KEY `fk_maloai` (`maLoai`);

--
-- Indexes for table `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`maLoaiTT`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`),
  ADD KEY `fk_vaitro` (`maVaiTro`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`maTT`),
  ADD KEY `fk_maloaitt` (`maLoaiTT`);

--
-- Indexes for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`maTrangThai`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`maVaitro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `binhluantintuc`
--
ALTER TABLE `binhluantintuc`
  MODIFY `maBLTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `maCT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `maLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `maHH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loaitintuc`
--
ALTER TABLE `loaitintuc`
  MODIFY `maLoaiTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `maTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `maTrangThai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `maVaitro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_hanghoa` FOREIGN KEY (`maHH`) REFERENCES `hanghoa` (`maHH`),
  ADD CONSTRAINT `fk_taikhoan` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);

--
-- Constraints for table `binhluantintuc`
--
ALTER TABLE `binhluantintuc`
  ADD CONSTRAINT `fk_mataikhoan` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`),
  ADD CONSTRAINT `fk_matintuc` FOREIGN KEY (`maTT`) REFERENCES `tintuc` (`maTT`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_maDH` FOREIGN KEY (`maDH`) REFERENCES `donhang` (`maDH`),
  ADD CONSTRAINT `fk_maHH` FOREIGN KEY (`maHH`) REFERENCES `hanghoa` (`maHH`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_matt` FOREIGN KEY (`maTrangThai`) REFERENCES `trangthaidonhang` (`maTrangThai`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_maloai` FOREIGN KEY (`maLoai`) REFERENCES `danhmuc` (`maLoai`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_vaitro` FOREIGN KEY (`maVaiTro`) REFERENCES `vaitro` (`maVaitro`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_maloaitt` FOREIGN KEY (`maLoaiTT`) REFERENCES `loaitintuc` (`maLoaiTT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
