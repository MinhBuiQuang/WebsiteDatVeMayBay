-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 06:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banvemaybay`
--

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `IDHang` int(11) NOT NULL,
  `TenHang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`IDHang`, `TenHang`, `Logo`) VALUES
(2, 'Jetstar', 'jetstar_20180330141055.png'),
(3, 'VietnamAirlines', 'VNA_logo_vn_20180330180214.png'),
(11, 'Vietjet Air', '1501066573vietjet air_20180330183435.png');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `SoLuong` double NOT NULL,
  `TongTien` double NOT NULL,
  `IDHoaDon` int(11) NOT NULL,
  `IDTaiKhoan` int(11) NOT NULL,
  `IDVe` int(11) NOT NULL,
  `CanNangMuaThem` float NOT NULL,
  `NguoiLon` int(11) DEFAULT NULL,
  `TreEm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`SoLuong`, `TongTien`, `IDHoaDon`, `IDTaiKhoan`, `IDVe`, `CanNangMuaThem`, `NguoiLon`, `TreEm`) VALUES
(3, 9000000, 7, 1, 5, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaive`
--

CREATE TABLE `loaive` (
  `IDLoaiVe` int(11) NOT NULL,
  `TenLoaiVe` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaive`
--

INSERT INTO `loaive` (`IDLoaiVe`, `TenLoaiVe`, `GhiChu`) VALUES
(1, 'ThÆ°á»ng', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanbay`
--

CREATE TABLE `sanbay` (
  `IDSanBay` int(11) NOT NULL,
  `TenSanBay` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoDuongBang` int(11) NOT NULL,
  `NamXayDung` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanbay`
--

INSERT INTO `sanbay` (`IDSanBay`, `TenSanBay`, `DiaChi`, `SoDuongBang`, `NamXayDung`) VALUES
(2, 'SÃ¢n bay quá»‘c táº¿ TÃ¢n SÆ¡n Nháº¥t', 'ThÃ nh phá»‘ Há»“ ChÃ­ Minh', 2, '1930'),
(3, 'SÃ¢n bay quá»‘c táº¿ ÄÃ  Náºµng', 'ÄÃ  Náºµng', 2, '1940'),
(5, 'SÃ¢n bay quá»‘c táº¿ Ná»™i BÃ i', 'HÃ  Ná»™i', 2, '1977');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDTaiKhoan` int(11) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IsAdministrator` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`IDTaiKhoan`, `Username`, `Password`, `Email`, `DiaChi`, `HoTen`, `SoDienThoai`, `IsAdministrator`) VALUES
(1, 'minhbq', 'e10adc3949ba59abbe56e057f20f883e', 'minhbq52@wru.vn', 'Viet Nam', 'Minh Bui', '0986483423', b'1111111111111111111111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `IDVe` int(11) NOT NULL,
  `IDHang` int(11) NOT NULL,
  `IDDiemKhoiHanh` int(11) NOT NULL,
  `IDDiemToi` int(11) NOT NULL,
  `NguoiLon` int(11) NOT NULL,
  `IDLoaiVe` int(11) DEFAULT NULL,
  `CanNangHanhLy` float NOT NULL,
  `DonGiaCanNang` float NOT NULL,
  `ThoiGianKhoiHanh` datetime NOT NULL,
  `ThoiGianToi` datetime NOT NULL,
  `GiaTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`IDVe`, `IDHang`, `IDDiemKhoiHanh`, `IDDiemToi`, `NguoiLon`, `IDLoaiVe`, `CanNangHanhLy`, `DonGiaCanNang`, `ThoiGianKhoiHanh`, `ThoiGianToi`, `GiaTien`) VALUES
(5, 3, 5, 2, 0, NULL, 0, 0, '2018-03-31 06:00:18', '2018-03-31 08:00:20', 3000000),
(6, 2, 5, 2, 0, NULL, 0, 0, '2018-03-31 15:00:28', '2018-03-31 17:00:30', 2200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`IDHang`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IDHoaDon`),
  ADD KEY `IDTaiKhoan` (`IDTaiKhoan`),
  ADD KEY `IDVe` (`IDVe`);

--
-- Indexes for table `loaive`
--
ALTER TABLE `loaive`
  ADD PRIMARY KEY (`IDLoaiVe`);

--
-- Indexes for table `sanbay`
--
ALTER TABLE `sanbay`
  ADD PRIMARY KEY (`IDSanBay`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDTaiKhoan`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`IDVe`),
  ADD KEY `IDLoaiVe` (`IDLoaiVe`),
  ADD KEY `IDHang` (`IDHang`),
  ADD KEY `fk_diemkhoihanh` (`IDDiemKhoiHanh`),
  ADD KEY `fk_diemtoi` (`IDDiemToi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `IDHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `IDHoaDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loaive`
--
ALTER TABLE `loaive`
  MODIFY `IDLoaiVe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanbay`
--
ALTER TABLE `sanbay`
  MODIFY `IDSanBay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `IDVe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`IDTaiKhoan`) REFERENCES `taikhoan` (`IDTaiKhoan`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`IDVe`) REFERENCES `ve` (`IDVe`);

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `fk_diemkhoihanh` FOREIGN KEY (`IDDiemKhoiHanh`) REFERENCES `sanbay` (`IDSanBay`),
  ADD CONSTRAINT `fk_diemtoi` FOREIGN KEY (`IDDiemToi`) REFERENCES `sanbay` (`IDSanBay`),
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`IDLoaiVe`) REFERENCES `loaive` (`IDLoaiVe`),
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`IDHang`) REFERENCES `hang` (`IDHang`),
  ADD CONSTRAINT `ve_ibfk_3` FOREIGN KEY (`IDLoaiVe`) REFERENCES `loaive` (`IDLoaiVe`),
  ADD CONSTRAINT `ve_ibfk_4` FOREIGN KEY (`IDHang`) REFERENCES `hang` (`IDHang`),
  ADD CONSTRAINT `ve_ibfk_5` FOREIGN KEY (`IDLoaiVe`) REFERENCES `loaive` (`IDLoaiVe`),
  ADD CONSTRAINT `ve_ibfk_6` FOREIGN KEY (`IDHang`) REFERENCES `hang` (`IDHang`),
  ADD CONSTRAINT `ve_ibfk_7` FOREIGN KEY (`IDLoaiVe`) REFERENCES `loaive` (`IDLoaiVe`),
  ADD CONSTRAINT `ve_ibfk_8` FOREIGN KEY (`IDHang`) REFERENCES `hang` (`IDHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
