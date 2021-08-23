-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 23, 2021 lúc 01:02 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_danhba`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_canbo`
--

CREATE TABLE `tbl_canbo` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `didong` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_donvi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_canbo`
--

INSERT INTO `tbl_canbo` (`id`, `full_name`, `chucvu`, `didong`, `email`, `id_donvi`) VALUES
(4, 'Nguyen Van A', 'Truong phong', 252, 'kimtuan179@yahoo.com.vn', 0),
(12, 'Nguyen Van A', 'Truong phong', 252, 'kimtuan179@yahoo.com.vn', 0),
(13, 'Nguyen Van B', 'Giang vien', 26942, 'nvb@gmail.com', 3),
(14, 'Nguyen Van C', 'Giang vien', 26974, 'nvc@gmail.com', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coquan`
--

CREATE TABLE `tbl_coquan` (
  `id` int(11) NOT NULL,
  `tenDV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coquan`
--

INSERT INTO `tbl_coquan` (`id`, `tenDV`, `DiaChi`, `SDT`, `Email`, `website`, `id_cha`) VALUES
(0, 'Ban giám hiệu', 'Nhà C', 1236, 'embi@gmail.com', 'onga.com', NULL),
(1, 'Hội đồng trường', 'Nhà B', 2589, 'elnf@gmail.com', 'onkl.com', NULL),
(2, 'Ban giám khảo', 'Nhà E', 1478, 'ahbg@gmail.com', 'qvds.ewqewq', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `passwd`) VALUES
(1, 'user', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cha` (`id_cha`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD CONSTRAINT `tbl_canbo_ibfk_1` FOREIGN KEY (`id_donvi`) REFERENCES `tbl_coquan` (`id`);

--
-- Các ràng buộc cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  ADD CONSTRAINT `tbl_coquan_ibfk_1` FOREIGN KEY (`id_cha`) REFERENCES `tbl_coquan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
