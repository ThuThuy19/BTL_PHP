-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2023 lúc 10:57 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `denuituquyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `IDKH` int(10) NOT NULL,
  `TDN` varchar(20) COLLATE utf8_bin NOT NULL,
  `pass` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `TYPE` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`IDKH`, `TDN`, `pass`, `TYPE`) VALUES
(28, 'anhhuyditu00', 'anhhuyditu', 1),
(42, '123', '1234', 0),
(45, '456', '789', 0),
(47, 'mai', '123', 0),
(48, 'asdfghjkl', 'anhhuyditu', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(10) NOT NULL,
  `tenkhach` varchar(30) COLLATE utf8_bin NOT NULL,
  `nghenghiep` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `noidung` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`maBL`, `tenkhach`, `nghenghiep`, `email`, `noidung`) VALUES
(3, 'Nguyễn Văn A', '353823924', 'dinh12@gmail.com', 'Thơm ngon mời bạn ăn nha'),
(4, 'Nguyễn Văn A', 'sinh vien', 'dinh12@gmail.com', 'sdhajdladjaslkda');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo`
--

CREATE TABLE `combo` (
  `maCombo` int(10) NOT NULL,
  `tenCombo` varchar(30) COLLATE utf8_bin NOT NULL,
  `gomMon` varchar(50) COLLATE utf8_bin NOT NULL,
  `anh` varchar(40) COLLATE utf8_bin NOT NULL,
  `GiaCB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`maCombo`, `tenCombo`, `gomMon`, `anh`, `GiaCB`) VALUES
(14, '19-8', ' 7 18 ', '2021-08-02 (5).png', 350001),
(16, 'Combo 6-8 người', ' 7 8 11 ', 'unnamed.jpg', 580001);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(10) NOT NULL,
  `gia` float NOT NULL,
  `tgdat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` int(1) NOT NULL DEFAULT 0,
  `maKM` int(10) NOT NULL,
  `IDKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `gia`, `tgdat`, `trangthai`, `maKM`, `IDKH`) VALUES
(46, 580002, '2023-01-05 18:26:30', 1, 9, 28),
(47, 0, '2023-01-03 04:33:17', 0, 9, 28),
(48, 0, '2023-01-03 04:34:31', 0, 9, 28),
(49, 200001, '2023-01-03 04:40:17', 0, 9, 28),
(50, 0, '2023-01-04 05:01:57', 0, 9, 28),
(51, 1500000, '2023-01-04 05:06:59', 0, 9, 28),
(52, 1500000, '2023-01-04 05:09:25', 0, 9, 28),
(53, 350001, '2023-01-03 23:00:47', 0, 9, 28),
(54, 580002, '2023-01-04 03:28:48', 0, 9, 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon_monan`
--

CREATE TABLE `hoadon_monan` (
  `maHD` int(10) NOT NULL,
  `maMon` int(10) NOT NULL,
  `sl` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `hoadon_monan`
--

INSERT INTO `hoadon_monan` (`maHD`, `maMon`, `sl`) VALUES
(46, 7, 2),
(46, 8, 1),
(49, 7, 1),
(51, 7, 3),
(51, 18, 2),
(52, 7, 3),
(52, 18, 3),
(53, 7, 1),
(53, 18, 1),
(54, 7, 2),
(54, 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `maKM` int(10) NOT NULL,
  `tenKM` varchar(30) COLLATE utf8_bin NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL,
  `phanTramKM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`maKM`, `tenKM`, `ngayBD`, `ngayKT`, `phanTramKM`) VALUES
(7, 'khuyến mãi 20/11', '2022-12-09', '2022-12-31', 10),
(8, 'Tết nguyên đán', '2023-01-02', '2023-01-04', 20),
(9, 'khuyến mãi 19/11', '2023-01-02', '2023-01-23', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `maLH` int(10) NOT NULL,
  `sdt` int(30) NOT NULL,
  `diachi` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`maLH`, `sdt`, `diachi`, `email`) VALUES
(2, 1234567889, '239 Quận Bắc Từ Niêm', 'denuituqyen@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `ID` int(10) NOT NULL,
  `tenMon` text COLLATE utf8_bin DEFAULT NULL,
  `hinhAnh` varchar(100) COLLATE utf8_bin NOT NULL,
  `mota` varchar(200) COLLATE utf8_bin NOT NULL,
  `giaMon` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`ID`, `tenMon`, `hinhAnh`, `mota`, `giaMon`) VALUES
(7, 'Dê nướng 1', 'de-nuong.jpg', '', 200001),
(8, 'Chân gà sốt thái', 'chan-ga-sot-thai.jpg', '', 180000),
(10, 'Dê xào', 'xao-lan.jpg', '', 250000),
(11, 'Dê hấp', 'de-hap-bia.jpg', '', 200000),
(14, 'Lẩu dê', 'de-hap-la-tia-to.jpg', '', 250000),
(16, 'Dê hầm thuốc bắc', 'de-thuoc-bac.jpg', 'thơm ngon mời bạn ăn nha, tôi đây không đợi, giờ tôi ăn liền', 180000),
(18, 'Gà rán', 'ga-ran.jpg', '', 150000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`IDKH`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDKH_2` (`IDKH`),
  ADD KEY `IDKH_3` (`IDKH`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`);

--
-- Chỉ mục cho bảng `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`maCombo`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDKH_2` (`IDKH`),
  ADD KEY `IDKH_3` (`IDKH`),
  ADD KEY `maKM` (`maKM`);

--
-- Chỉ mục cho bảng `hoadon_monan`
--
ALTER TABLE `hoadon_monan`
  ADD PRIMARY KEY (`maHD`,`maMon`),
  ADD KEY `maMon` (`maMon`),
  ADD KEY `maHD` (`maHD`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`maKM`),
  ADD KEY `maKM` (`maKM`),
  ADD KEY `maKM_2` (`maKM`),
  ADD KEY `maKM_3` (`maKM`),
  ADD KEY `maKM_4` (`maKM`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`maLH`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `IDKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `maCombo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `maKM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `maLH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`IDKH`) REFERENCES `account` (`IDKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon_monan`
--
ALTER TABLE `hoadon_monan`
  ADD CONSTRAINT `maHD` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`),
  ADD CONSTRAINT `maMon` FOREIGN KEY (`maMon`) REFERENCES `monan` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
