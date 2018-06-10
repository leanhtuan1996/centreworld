-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2018 lúc 02:07 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qltttm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_b` int(10) NOT NULL,
  `recruitment` int(1) NOT NULL,
  `position` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(10) NOT NULL,
  `ID_k` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `price` int(10) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_b`, `recruitment`, `position`, `salary`, `ID_k`, `status`, `price`, `date_time`) VALUES
(15, 0, 'baÌn haÌ€ng', 1000000000, 6, 0, 1, '2018-06-04'),
(16, 1, 'baÌn haÌ€ng', 1000000, 6, 0, 3, '2018-06-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contract`
--

CREATE TABLE `contract` (
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name_k` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `citizenship_card` int(10) DEFAULT NULL,
  `phone_number` int(20) DEFAULT NULL,
  `ID_CT` int(10) NOT NULL,
  `ID_k` int(11) NOT NULL,
  `date_time` date DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contract`
--

INSERT INTO `contract` (`email`, `name_k`, `address`, `citizenship_card`, `phone_number`, `ID_CT`, `ID_k`, `date_time`, `name`) VALUES
('waxi.2207@gmail.com ', '', 'super street', 123456789, 907597257, 19, 7, '2018-06-07', 'tran cao cuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `floor`
--

CREATE TABLE `floor` (
  `id_floor` int(10) NOT NULL,
  `name_floor` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `floor`
--

INSERT INTO `floor` (`id_floor`, `name_floor`) VALUES
(1, 'shopping area'),
(2, 'food court'),
(3, 'play area');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hire`
--

CREATE TABLE `hire` (
  `ID_h` int(10) NOT NULL,
  `recruitment` int(1) NOT NULL DEFAULT '1',
  `position` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(10) NOT NULL,
  `ID_k` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hire`
--

INSERT INTO `hire` (`ID_h`, `recruitment`, `position`, `salary`, `ID_k`, `status`, `date_time`) VALUES
(35, 1, 'Ä‘Ã¢Ì€u bÃªÌp', 1000000, 7, 1, '2018-06-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kiot`
--

CREATE TABLE `kiot` (
  `ID_k` int(10) NOT NULL,
  `name_k` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `id_floor` int(10) NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kiot`
--

INSERT INTO `kiot` (`ID_k`, `name_k`, `description`, `price`, `status`, `id_floor`, `image`) VALUES
(7, '01(tÃ¢Ì€ng 3)', 'tiny word', 1000000, 1, 3, 'customer/my kingdom.jpg'),
(10, '01(tÃ¢Ì€ng 1)', 'nike', 1000000, 0, 1, 'customer/nike.jpg'),
(11, '01(tÃ¢Ì€ng 2)', 'king BBQ', 1000000, 0, 2, 'customer/King-BBQ.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` int(20) DEFAULT NULL,
  `lever` tinyint(1) NOT NULL DEFAULT '0',
  `position` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `address`, `city`, `phone_number`, `lever`, `position`, `image`) VALUES
(33, 'admin@gmail.com', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'super city ', 907597257, 1, '', ''),
(36, 'waxi.2207@gmail.com', 'tran cao cuong', '202cb962ac59075b964b07152d234b70', 'super street', NULL, 907597257, 0, 'Customer', ''),
(37, 'huyhoang@gmail.com', 'buÌ€i huy hoaÌ€ng', '81dc9bdb52d04dc20036dbd8313ed055', '123 Ä‘iÌ£a chiÌ‰ giÌ€ Ä‘oÌ', NULL, 909090909, 0, 'Customer', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_b`);

--
-- Chỉ mục cho bảng `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`ID_CT`);

--
-- Chỉ mục cho bảng `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id_floor`);

--
-- Chỉ mục cho bảng `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`ID_h`);

--
-- Chỉ mục cho bảng `kiot`
--
ALTER TABLE `kiot`
  ADD PRIMARY KEY (`ID_k`),
  ADD KEY `id_floor` (`id_floor`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_b` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `contract`
--
ALTER TABLE `contract`
  MODIFY `ID_CT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `floor`
--
ALTER TABLE `floor`
  MODIFY `id_floor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hire`
--
ALTER TABLE `hire`
  MODIFY `ID_h` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `kiot`
--
ALTER TABLE `kiot`
  MODIFY `ID_k` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
