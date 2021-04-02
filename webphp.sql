-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2020 lúc 01:39 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `performance` varchar(50) DEFAULT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `input` varchar(50) DEFAULT NULL,
  `output` varchar(50) DEFAULT NULL,
  `slot` varchar(100) DEFAULT NULL,
  `longs` varchar(100) DEFAULT NULL,
  `speed` varchar(100) DEFAULT NULL,
  `rs` varchar(100) DEFAULT NULL,
  `ws` varchar(100) DEFAULT NULL,
  `compatible` varchar(100) DEFAULT NULL,
  `core` varchar(50) DEFAULT NULL,
  `extensions` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `made` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accessories`
--

INSERT INTO `accessories` (`id`, `id2`, `performance`, `capacity`, `input`, `output`, `slot`, `longs`, `speed`, `rs`, `ws`, `compatible`, `core`, `extensions`, `size`, `weight`, `made`) VALUES
(33, 1, '65%', '10.000 mAh', 'Micro USB: 5V - 2A, 9V - 2AType C: 5V - 3A, 9V - 2', 'Type-C PD: 5V - 3A, 9V - 2A, 12V - 1.5A, USB QC: 5', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', '', '230g', 'Trung Quốc'),
(36, 4, '', '', '', 'Type-C PD: 5V - 3A, 9V - 2A, 12V - 1.5A, USB QC: 5', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(46, 5, '', '', '', '', 'Type-C', '', '', '', '', 'Android, iOS (iPhone, iPad), Windows', '', '', '', '', 'Trung quốc'),
(47, 6, '', '64 GB', '', '', '', '', 'Class 10', '80 MB/s', '10 MB/s', '', '', '', '', '', 'Hàn Quốc/Đài Loan(tùy lô hàng)'),
(48, 7, '', '', '', 'Lightning: 5V - 2.4A', '', '90 cm', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(121, 8, '65%', '15.000 mAh', 'Type-C: 5V - 2A', 'USB: 5V - 2.4AType C: 5V- 2.4A', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', '', '303g', 'Trung Quốc'),
(122, 9, '65%', '10.000 mAh', 'Micro USB: 5V - 2A', 'Micro USB: 5V - 2A', '', '', '', '', '', '', 'Pin Li-Ion', '', '', '240g', 'Trung Quốc'),
(123, 10, '65%', '10.000 mAh', 'Micro USB: 5V - 2A, 9V - 2AType-C: 5V - 2A, 9V - 2', 'Type-C: 5V - 3A, 9V - 2A, 12V - 1.5AUSB: 5V - 3A, ', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', '', '275g', 'Trung Quốc'),
(124, 11, '62.5%', '10.000 mAh', '', 'USB: 5V - 2AType-C: 5V - 2A', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', 'Dài 14 cm - Ngang 7.2 cm - Dày 1.4 cm', '254.6 g', 'Trung Quốc'),
(125, 12, '65%', '10.000 mAh', 'Micro USB: 5V - 2A, 9V - 2A', 'USB: 5V - 3A, 9V - 2A, 12V - 1.5A', '', '', '', '', '', '', 'Pin Li-Ion', '', 'Dày 2 cm - Rộng 6 cm - Dài 9.5 cm', '211g', 'Trung Quốc'),
(126, 13, '55%', '10.000 mAh', 'Micro USB/ Type C: 5V - 2.6A, 9V - 2.1A, 12V - 1.5', 'USB: 5V - 2.6A, 9V - 2.1A, 12V - 1.5A USB: 5V - 2.', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', 'Dài 14.8cm - Rộng 7.4cm - Dày 1.5cm', '343g', 'Trung Quốc'),
(128, 14, '65%', '10.000 mAh', 'Micro USB/Type-C: 5V - 2A', 'USB: 5V - 2.4AType C: 5V- 2.4A', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', 'Dài 11.2cm - Rộng 6.7cm - Dài 1.6cm', '217g', 'Trung Quốc'),
(129, 15, '65%', '10.000 mAh', 'Micro USB/Type-C: 5V - 2A', 'Sạc không dây: 10W (Android), 5W/7W (iOS)Type-C: 5', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', '', '~210g', 'Trung Quốc'),
(130, 16, '65%', '10.000 mAh', 'Type-C: 5V - 3A, Micro USB: 5V - 2A', 'Type-C: 5V - 3A, USB: 5V - 2.4A', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', '', '200.8g', 'Trung Quốc'),
(131, 17, '65%', '20.000 mAh', 'Micro USB/Type-C: 5V - 2A', 'USB: 5V - 3A', '', '', '', '', '', '', 'Pin Polymer (Li-Po)', '', '', '342.5 g', 'Trung Quốc'),
(133, 18, '', '', '', 'USB: 5V - 2.4A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(134, 19, '', '', '', 'Type C: 87W', '', '', '', '', '', '', '', '', '', '', 'Việt Nam/Trung Quốc (tùy lô hàng)'),
(135, 20, '', '', '', 'USB: 3.6-6.5V - 3A, 6.5-9V - 2A, 9-12V - 1.5A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(136, 21, '', '', '', 'Type C: 5V - 3A, 9V - 2A, 12V - 1.5AUSB: 5V - 3A, ', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(137, 22, '', '', '', 'USB: 5V - 2A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(138, 23, '', '', '', 'Cổng 1: 2.4A, USB 2: 5V - 2.4A, Cổng USB 1 + 2: 5V', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(139, 24, '', '', '', 'USB: 5V - 2.4A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(140, 25, '', '', '', 'Type-C: 5V - 3A', '', '', '', '', '', '', '', '', '', '', 'Việt Nam'),
(141, 26, '', '', '', 'Type C: 5V - 3A, 9V - 2A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(142, 27, '', '', '', 'Type C: 5V - 3A, USB: 5V - 2.4A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(143, 28, '', '', '', 'USB: 5V - 1A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(144, 29, '', '', '', 'USB: 5V - 2.4A', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(145, 30, '', '', '', 'USB: 5V - 2.4A, Type C PD: 5V - 3A , 9V - 3A, 15V ', '', '', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(146, 31, '', '', '', 'Lightning: 5V - 3A', '', '90 cm', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(147, 32, '', '', '', 'Lightning: 5V - 2.1A', '', '1 m', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(148, 33, '', '', '', '', '', '1 m', '', '', '', '', '', '', '', '', 'Việt Nam/Trung Quốc (tùy lô hàng)'),
(149, 34, '', '', '', 'Type C: 5V - 2A', '', '1 m', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(150, 35, '', '', '', 'Type C: 5V - 3A', '', '90 cm', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(151, 36, '', '', '', 'Type-C: 5V - 3A', '', '2 m', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(152, 37, '', '', '', 'Micro USB: 5V - 2A', '', '1 m', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(153, 38, '', '', '', 'Micro USB: 5V - 2.4A', '', '1.2 m', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(154, 39, '', '', '', 'Micro USB: 5V - 2A', '', '20 cm', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(155, 40, '', '', '', 'Type C: 5V - 2.4A', '', '1.5 m', '', '', '', '', '', '', '', '', 'Trung Quốc'),
(156, 41, '', '', '', '', 'jack cắm 3.5 mm', '', '', '', '', 'Android, Windows, iOS (iPhone), Windows Phone', '', '', '', '', 'Trung Quốc'),
(157, 42, '', '', '', '', 'jack cắm 3.5 mm', '', '', '', '', 'Android, Windows, iOS (iPhone), Windows Phone', '', '', '', '', 'Trung Quốc'),
(158, 43, '', '', '', '', 'jack cắm 3.5 mm', '', '', '', '', 'Android, Windows, iOS (iPhone), Windows Phone', '', '', '', '', 'Trung Quốc'),
(159, 44, '', '', '', '', 'Cổng sạc Type-C', '', '', '', '', 'Android, MacOS (Macbook, iMac), Windows, iOS (iPhone)', '', '', '', '', 'Trung Quốc'),
(160, 45, '', '', '', '', 'Cổng sạc Micro USB', '', '', '', '', 'Android, iOS (iPhone, iPad), Windows', '', '', '', '', 'Trung Quốc'),
(161, 46, '', '128 GB', '', '', '', '', 'Class 10', '95 MB/s', '45 MB/s', '', '', '', '', '', 'Hàn Quốc/Đài Loan(tùy lô hàng)'),
(162, 47, '', '32 GB', '', '', '', '', 'Class 10', '30 MB/s', '10 MB/s', '', '', '', '', '', 'Hàn Quốc/Đài Loan(tùy lô hàng)'),
(163, 48, '', '16 GB', '', '', '', '', 'Class 10', '30 MB/s', '10 MB/s', '', '', '', '', '', 'Hàn Quốc/Đài Loan(tùy lô hàng)'),
(164, 49, '', '8 GB', '', '', '', '', 'Class 10', '30 MB/s', '4 MB/s', '', '', '', '', '', 'Hàn Quốc/Đài Loan(tùy lô hàng)'),
(165, 50, '', '', '', '', '123', '', '', '', '', '123', '', '', '', '', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `level` tinyint(4) DEFAULT 1,
  `avatar` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `create_at`, `update_at`) VALUES
(6, 'Võ Thị Mỹ Loan', '05 YYY, Hòa Khánh Nam, Liên Chiểu, Đà Nẵng', 'myloan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 1, 2, NULL, '2020-11-20 13:53:17', '2020-11-20 13:53:17'),
(7, 'Nguyễn Văn B', 'Nơi nào đó trên Trái Đất', 'abcd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0987612345', 1, 1, NULL, '2020-12-23 05:16:48', '2020-12-23 05:16:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) NOT NULL,
  `home` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `level` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `level`, `created_at`, `updated_at`) VALUES
(12, 'Iphone', 'iphone', 'Apple.jpg', '', 1, 1, 0, '2020-06-25 02:39:11', '2020-12-23 10:32:24'),
(13, 'Samsung', 'samsung', 'Samsung.jpg', '', 1, 1, 0, '2020-06-25 02:39:32', '2020-07-27 16:41:47'),
(14, 'Oppo', 'oppo', 'Oppo.jpg', '', 1, 1, 0, '2020-06-25 02:39:53', '2020-06-27 06:30:39'),
(15, 'Xiaomi', 'xiaomi', 'Xiaomi.png', '', 1, 1, 0, '2020-06-25 02:40:01', '2020-06-27 06:30:40'),
(16, 'Vivo', 'vivo', 'Vivo.jpg', '', 1, 1, 0, '2020-06-25 02:40:22', '2020-06-27 06:30:41'),
(17, 'Coolpad', 'coolpad', 'Coolpad.png', '', 1, 1, 0, '2020-06-25 02:40:52', '2020-06-27 06:30:42'),
(18, 'Vsmart', 'vsmart', 'Vsmart.png', '', 1, 1, 0, '2020-06-25 02:41:17', '2020-07-27 09:39:41'),
(19, 'Nokia', 'nokia', 'Nokia.jpg', '', 1, 1, 0, '2020-06-25 02:41:33', '2020-06-27 06:30:45'),
(20, 'Itel', 'itel', 'Itel.jpg', '', 1, 1, 0, '2020-06-25 21:53:41', '2020-07-27 16:27:55'),
(21, 'Sạc dự phòng', 'sac-du-phong', 'Pin-sac-du-phong.png', '', 1, 1, 1, '2020-07-26 10:22:04', '2020-07-26 12:34:35'),
(22, 'Adapter sạc', 'adapter-sac', 'adapter-sac.png', '', 1, 1, 1, '2020-07-26 11:58:08', '2020-07-26 12:45:14'),
(23, 'Cáp sạc', 'cap-sac', 'day-sac.jpg', '', 1, 1, 1, '2020-07-26 11:58:26', '2020-07-26 12:35:00'),
(24, 'Tai nghe', 'tai-nghe', 'tai-nghe-co-day.jpg', '', 1, 1, 1, '2020-07-26 12:00:12', '2020-07-26 12:35:08'),
(25, 'Thẻ nhớ', 'the-nho', 'The-nho.png', '', 1, 1, 1, '2020-07-26 12:00:30', '2020-07-26 12:35:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` tinyint(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(7, 4, 87, 1, 7432000, '2020-11-21 02:20:53', '2020-11-21 02:20:53'),
(8, 5, 87, 1, 7432000, '2020-12-12 01:57:03', '2020-12-12 01:57:03'),
(9, 5, 119, 1, 41990000, '2020-12-12 01:57:03', '2020-12-12 01:57:03'),
(10, 6, 87, 3, 7432000, '2020-12-23 04:24:47', '2020-12-23 04:24:47'),
(11, 6, 119, 1, 41990000, '2020-12-23 04:24:47', '2020-12-23 04:24:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `ManHinh` varchar(50) DEFAULT NULL,
  `HDH` varchar(50) DEFAULT NULL,
  `Camtruoc` varchar(50) DEFAULT NULL,
  `Camsau` varchar(50) DEFAULT NULL,
  `CPU` varchar(50) DEFAULT NULL,
  `RAM` varchar(50) DEFAULT NULL,
  `ROM` varchar(50) DEFAULT NULL,
  `SDCar` varchar(50) DEFAULT NULL,
  `Pin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phone`
--

INSERT INTO `phone` (`id`, `id2`, `ManHinh`, `HDH`, `Camtruoc`, `Camsau`, `CPU`, `RAM`, `ROM`, `SDCar`, `Pin`) VALUES
(30, 1, 'IPS LCD, 4.7\", Retina', 'IOS 13', '7MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A13 Bionic 6 nhân', '3 GB', '256 GB', 'không', 'chuẩn Li-Ion 1821 mAh'),
(37, 2, 'LED-backlit IPS LCD, 4.7', 'IOS 13', '7MP', '12MP', 'Apple A10 Fusion 4 nhân', '2 GB', '32 GB', 'không', '1960 mAh'),
(38, 3, 'IPS LCD, 6.5\", HD+', 'Android 9.0 (Pie)', '8 MP', 'Chính 13 MP & Phụ 8 MP, 5 MP', 'Snapdragon 450 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh, có sạc nhanh'),
(39, 4, 'TFT LCD, 6.5\", HD+', 'Android 10', '13 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Exynos 850 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5000 mAh, có sạc nhanh'),
(40, 5, 'IPS LCD, 6.22\", HD+', 'ColorOS 6.1 (Android 9.0)', '5 MP', 'Chính 13 MP & Phụ 2 MP', 'MediaTek Helio P35 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4230 mAh'),
(41, 6, 'IPS LCD, 6.22\", HD+', 'ColorOS 6.1 (Android 9.0)', '5 MP', 'Chính 13 MP & Phụ 2 MP', 'MediaTek Helio P35 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4230 mAh'),
(42, 7, 'IPS LCD, 6.22\", HD+', 'Android 9.0 (Pie)', '8 MP', 'Chính 12 MP & Phụ 2 MP', 'Snapdragon 439 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5000 mAh, có sạc nhanh'),
(43, 8, 'IPS LCD, 6.3\", Full HD+', 'Android 9.0 (Pie)', '13 MP', '	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 665 8 nhân', '4 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4000 mAh, có sạc nhanh'),
(44, 9, 'IPS LCD, 6.22\", HD+', 'Android 10', '5 MP', '13 MP', 'MediaTek Helio P35 8 nhân', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4030 mAh'),
(45, 10, 'IPS LCD, 6.53\", Full HD+', 'Android 9.0 (Pie)', '16 MP', 'Chính 16 MP & Phụ 8 MP, 2 MP', 'MediaTek MT6768 8 nhân (Helio P65)', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5000 mAh, có sạc nhanh'),
(49, 11, 'TFT, 2.8\", 65.536 màu', '', '', '2 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1200 mAh'),
(50, 12, 'TFT, 2.4\", 65.536 màu', '', '', 'VGA (480 x 640 pixels)', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1020 mAh'),
(51, 13, 'TFT, 2.4\"', '', '', 'VGA (480 x 640 pixels)', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1200 mAh'),
(52, 14, 'IPS LCD, 5.7\", HD+', 'Android 9 Pie (Go Edition)', '5 MP', '5 MP', 'Spreadtrum SC9832E 4 nhân', '1 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '2800 mAh'),
(53, 15, 'TFT, 6.2\", HD+', 'Android 10 (Android One)', '5 MP', 'Chính 13 MP & Phụ 2 MP', 'Mediatek MT6761 4 nhân (Helio A22)', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh'),
(54, 16, 'IPS LCD, 6.55\", HD+', 'Android 10', '', 'Chính 13 MP & Phụ 5 MP, 2 MP, 2 MP', 'Snapdragon 665 8 nhân', '3 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh'),
(55, 17, 'TN, 2.4\", 65.536 màu', '', '', '0.08 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '3000 mAh'),
(56, 18, 'TFT, 2.4\", 65.536 màu', '', '', '0.3 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1200 mAh'),
(57, 19, 'TFT, 2.2\", 65.536 màu', '', '', '0.3 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1900 mAh'),
(58, 20, 'TFT, 5\", FWVGA', 'Android 8.1 (Oreo)', '2 MP', '5 MP', 'Spreadtrum SC7731E 4 nhân', '1 GB', '8 GB', 'MicroSD, hỗ trợ tối đa 128 GB', '2050 mAh'),
(59, 21, 'IPS LCD, 6.0\", HD+', 'Android 8 Oreo (Go Edition)', '13 MP', 'Chính 8 MP & Phụ VGA', 'MediaTek MT6580 4 nhân', '1 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '3000 mAh'),
(60, 22, 'IPS LCD, 5\", FWVGA', 'Android 9.0 (Go Edition)', '5 MP', 'Chính 5 MP & Phụ VGA', 'Spreadtrum SC7731E 4 nhân', '2 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '4000 mAh'),
(61, 23, 'IPS LCD, 6.1\", HD+', 'Android 9.0 (Pie)', '16 MP', 'Chính 8 MP & Phụ VGA, VGA', 'Spreadtrum SC9863A 8 nhân', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 128 GB', '3000 mAh'),
(62, 24, 'IPS LCD, 6.09\", HD+', 'Android 10', '8 MP', 'Chính 8 MP & Phụ 5 MP', 'MediaTek Helio P35 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '3500 mAh'),
(63, 25, 'IPS LCD, 6.5\", HD+', 'Android 9.0 (Pie)', '8 MP', 'Chính 13 MP & Phụ 8 MP, 2 MP', 'Snapdragon 665 8 nhân', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '5000 mAh, có sạc nhanh'),
(64, 26, 'IPS LCD, 6.09', 'Android 10', '8 MP', 'Chính 8 MP & Phụ 5 MP', 'MediaTek Helio P35 8 nhân', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '3500 mAh'),
(65, 27, 'TFT, 2.4\", 256.000 màu', '', '', '0.08 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '2700 mAh'),
(66, 28, 'TFT, 1.77\", 256.000 màu', '', '', '', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '800 mAh'),
(67, 29, 'LCD, 1.77\", 256.000 màu', '', '', '0.08 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1700 mAh'),
(68, 30, 'TFT, 2.4\", 256.000 màu', '', '', '0.08 MP', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '1700 mAh'),
(69, 31, 'TFT, 1.77', '', '', '', '', '', '', 'MicroSD, hỗ trợ tối đa 32 GB', '800 mAh'),
(70, 32, 'IPS LCD, 6.47\", HD+', 'Android 10', '8 MP', 'Chính 13 MP & Phụ 8 MP, 2 MP, 2 MP', 'MediaTek Helio P35 8 nhân', '4 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5000 mAh'),
(71, 33, 'IPS LCD, 6.35\", HD+', 'Android 9.0 (Pie)', '', 'Chính 13 MP & Phụ 8 MP, 2 MP', 'Snapdragon 665 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5000 mAh, có sạc nhanh'),
(72, 34, 'AMOLED, 6.47\", Full HD+', 'Android 9.0 (Pie)', '32 MP', 'Chính 108 MP & Phụ 20 MP, 12 MP, 5 MP, 2 MP', 'Snapdragon 730G 8 nhân', '8GB', '256 GB', 'không', '5260 mAh, có sạc nhanh'),
(73, 35, 'IPS LCD, 6.53\", Full HD+', 'Android 9.0 (Pie)', '20 MP', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', 'MediaTek Helio G90T 8 nhân', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4500 mAh, có sạc nhanh'),
(74, 36, 'IPS LCD, 6.67\", Full HD+', 'Android 10', '16 MP', 'Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP', 'Snapdragon 720G 8 nhân', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5020 mAh, có sạc nhanh'),
(75, 37, 'AMOLED, 6.47\", Full HD+', 'Android 10', '16 MP', 'Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP', 'Snapdragon 730G 8 nhân', '8GB', '128 GB', 'không', '5260 mAh, có sạc nhanh'),
(76, 38, 'IPS LCD, 6.67\", Full HD+', 'Android 10', '16 MP', 'Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP', 'Snapdragon 720G 8 nhân', '6 G', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5020 mAh, có sạc nhanh'),
(77, 39, 'IPS LCD, 6.53\", Full HD+', 'Android 10', '13 MP', '	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'MediaTek Helio G85 8 nhân', '4 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5020 mAh, có sạc nhanh'),
(78, 40, 'IPS LCD, 6.67\", Full HD+', 'Android 10', '16 MP', 'Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP', 'Snapdragon 720G 8 nhân', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5020 mAh, có sạc nhanh'),
(79, 41, 'IPS LCD, 6.53\", HD+', 'Android 10', '5 MP', 'Chính 13 MP & Phụ 2 MP, 2 MP', 'MediaTek Helio G35 8 nhân', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5000 mAh'),
(80, 42, 'AMOLED, 6.4\", Full HD+', 'ColorOS 6.1 (Android 9.0)', '16 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'MediaTek Helio P70 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', 'có sạc nhanh'),
(81, 43, 'TFT, 6.5\", HD+', 'Android 9.0 (Pie)', '16 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 665 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5000 mAh'),
(82, 44, 'IPS LCD, 6.5\", HD+', 'ColorOS 6.1 (Android 9.0)', '8 MP', 'Chính 12 MP & Phụ 2 MP, 2 MP', 'MediaTek Helio P35 8 nhân', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4230 mAh'),
(83, 45, 'IPS LCD, 6.5\", HD+', 'ColorOS 6.1 (Android 9.0)', '8 MP', 'Chính 12 MP & Phụ 2 MP, 2 MP', 'MediaTek Helio P35 8 nhân', '4 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4230 mAh'),
(84, 46, 'AMOLED, 6.5\", Full HD+', 'Android 9.0 (Pie)', '16 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'MediaTek Helio P70 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4000 mAh, có sạc nhanh'),
(85, 47, 'AMOLED, 6.4\", Full HD+', 'Android 10', '44 MP', 'Chính 48 MP & Phụ 13 MP, 8 MP, 2 MP', 'MediaTek Helio P90 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4025 mAh, có sạc nhanh'),
(86, 48, 'IPS TFT, 6.2\", HD+', 'Android 9.0 (Pie)', '8 MP', 'Chính 13 MP & Phụ 2 MP', 'MediaTek MT6762 8 nhân (Helio P22)', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh'),
(87, 49, 'Super AMOLED, 6.7\", Full HD+', 'Android 9.0 (Pie)', '32 MP', 'Chính 32 MP & Phụ 8 MP, 5 MP', 'Snapdragon 675 8 nhân', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4500 mAh, có sạc nhanh'),
(88, 50, 'Super AMOLED, 6.5\", Full HD+', 'Android 10', '32 MP', 'Chính 48 MP & Phụ 12 MP, 5 MP, 5 MP', 'Exynos 9611 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh, có sạc nhanh'),
(89, 51, 'Super AMOLED, 6.5\", Full HD+', 'Android 10', '32 MP', 'Chính 48 MP & Phụ 12 MP, 5 MP, 5 MP', 'Exynos 9611 8 nhân', '6 G', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh, có sạc nhanh'),
(90, 52, 'Super AMOLED, 6.4\", Full HD+', 'Android 9.0 (Pie)', '32 MP', 'Chính 48 MP & Phụ 8 MP, 5 MP', 'Exynos 9610 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4000 mAh, có sạc nhanh'),
(91, 53, 'Super AMOLED, 6.7\", Full HD+', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, TOF 3D', 'Chính 48 MP & Phụ 8 MP, TOF 3D', 'Snapdragon 730 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '3700 mAh, có sạc nhanh'),
(92, 54, 'Super AMOLED, 6.7\", Full HD+', 'Android 10', '32 MP', 'Chính 48 MP & Phụ 12 MP, 5 MP', 'Snapdragon 855 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '4500 mAh, có sạc nhanh'),
(93, 55, 'Super AMOLED, 6.7\", Full HD+', 'Android 10', '32 MP', 'Chính 12 MP & Phụ 12 MP, 12 MP', 'Exynos 9810 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4500 mAh, có sạc nhanh'),
(94, 56, 'Super AMOLED, 6.7\", Full HD+', 'Android 10', '32 MP', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', 'Snapdragon 730 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '4500 mAh, có sạc nhanh'),
(95, 57, 'Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)', 'Android 10', '10 MP', 'Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D', 'Exynos 990 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '4500 mAh, có sạc nhanh'),
(96, 58, 'Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)', 'Android 10', '10 MP', 'Chính 12 MP & Phụ 64 MP, 12 MP', 'Exynos 990 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '4000 mAh, có sạc nhanh'),
(97, 59, 'IPS LCD, 6.1\", Liquid Retina', 'IOS 13', '12MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '64 GB', 'không', '3110 mAh, có sạc nhanh'),
(98, 60, 'OLED, 5.8\", Super Retina', 'IOS 12', '7MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A12 Bionic 6 nhân', '4 GB', '64 GB', 'không', '2658 mAh, có sạc nhanh'),
(99, 61, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'IOS 13', '7MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A11 Fusion 4 nhân', '3 GB', '128 GB', 'không', '2691 mAh, có sạc nhanh'),
(100, 62, 'OLED, 6.5\", Super Retina XDR', 'IOS 13', '12MP', '3 camera 12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '64 GB', 'không', '3969 mAh, có sạc nhanh'),
(101, 63, 'OLED, 6.5\", Super Retina', 'IOS 13', '7MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A12 Bionic 6 nhân', '4 GB', '256 GB', 'không', '3174 mAh, có sạc nhanh'),
(102, 64, 'IPS LCD, 6.1\", Liquid Retina', 'IOS 13', '12MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', 'không', '3110 mAh, có sạc nhanh'),
(103, 65, 'IPS LCD, 6.1\", Liquid Retina', 'IOS 13', '12MP', 'Chính 12 MP & Phụ 12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '128 GB', 'không', '3110 mAh, có sạc nhanh'),
(104, 66, 'IPS LCD, 6.5\", HD+', 'Android 9.0 (Pie)', '8 MP', 'Chính 13 MP & Phụ 8 MP, 2 MP', 'Snapdragon 632 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '5000 mAh, có sạc nhanh'),
(105, 67, 'IPS LCD, 6.5\", HD+', 'Android 9.0 (Pie)', '8 MP', 'Chính 13 MP & Phụ 8 MP, 2 MP', 'Snapdragon 632 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '5000 mAh, có sạc nhanh'),
(106, 68, 'AMOLED, 6.39\", Full HD+', 'Android 9.0 (Pie)', '16 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'MediaTek Helio P60 8 nhân', '6 G', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4020 mAh, có sạc nhanh'),
(107, 69, 'Super AMOLED, 6.44\", Full HD+', 'Android 10', 'Chính 32 MP & Phụ 8 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 712 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4500 mAh, có sạc nhanh'),
(108, 70, 'Super AMOLED, 6.44\", Full HD+', 'Android 10', '32 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 675 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4500 mAh, có sạc nhanh'),
(109, 71, 'Super AMOLED, 6.38\", Full HD+', 'Android 9.0 (Pie)', '32 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 665 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4500 mAh, có sạc nhanh'),
(110, 72, 'IPS LCD, 6.53\", Full HD+', 'Android 10', '8 MP', 'Chính 13 MP & Phụ 8 MP, 5 MP, 2 MP', 'MediaTek Helio G80 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5020 mAh, có sạc nhanh'),
(111, 73, 'IPS LCD, 6.3\", Full HD+', 'Android 9.0 (Pie)', '13 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 665 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4000 mAh, có sạc nhanh'),
(112, 74, 'IPS LCD, 6.53\", Full HD+', 'Android 10', '8 MP', 'Chính 13 MP & Phụ 8 MP, 5 MP, 2 MP', 'MediaTek Helio G80 8 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5020 mAh, có sạc nhanh'),
(113, 75, 'IPS LCD, 6.53\", HD+', 'Android 10', '5 MP', 'Chính 13 MP & Phụ 2 MP, 2 MP', 'MediaTek Helio G35 8 nhân', '3 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5000 mAh'),
(114, 76, 'IPS LCD, 6.3\", Full HD+', 'Android 9.0 (Pie)', '13 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4000 mAh, có sạc nhanh'),
(115, 77, 'OPPO A92', 'Android 10', '16 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 665 8 nhân', '8GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5000 mAh, có sạc nhanh'),
(116, 78, 'Sunlight Super AMOLED, 6.4\", Full HD+', 'Android 10', 'Chính 44 MP & Phụ 2 MP', 'Chính 64 MP & Phụ 13 MP, 8 MP, 2 MP', 'MediaTek Helio P95 8 nhân', '8GB', '256 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4025 mAh, có sạc nhanh'),
(117, 79, 'AMOLED, 6.78\", Quad HD+ (2K+)', 'Android 10', '32 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Snapdragon 865 8 nhân', '12 GB', '256 GB', 'không', '4200 mAh, có sạc nhanh'),
(118, 80, 'TFT LCD, 6.5\", HD+', 'Android 10', '13 MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Exynos 850 8 nhân', '6 G', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '5000 mAh, có sạc nhanh'),
(119, 81, 'OLED, 6.5', 'IOS 13', '12MP', '3 cam 12MP', 'Apple A13 Bionic 6 nhân', '4 GB', '512 GB', 'không', '3969 mAh, có sạc nhanh'),
(120, 82, 'OLED, 6.5', 'IOS 13', '12MP', '3 cam 12MP', 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', 'không', '3969 mAh, có sạc nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT 0,
  `thundar` varchar(200) DEFAULT NULL,
  `rated` int(11) NOT NULL DEFAULT 0,
  `comment` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `head` int(11) DEFAULT 0,
  `view` int(11) DEFAULT 0,
  `hot` tinyint(4) DEFAULT 0,
  `number` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thundar`, `rated`, `comment`, `category_id`, `content`, `head`, `view`, `hot`, `number`, `create_at`, `update_at`) VALUES
(30, 'Iphone SE 256GB', 'iphone-se-256gb', 12990000, 10, 'iphone-se-256gb.png', 0, 0, 12, 'se', 0, 0, 0, 100, '2020-07-26 02:44:39', '2020-07-26 02:44:39'),
(33, 'Pin sạc dự phòng Polymer 10.000mAh Type C PD QC3.0 Xmobile P68D', 'pin-sac-du-phong-polymer-10000mah-type-c-pd-qc30-xmobile-p68d', 700000, 0, 'samsung-galaxy-j4-plus-pink-400x400.jpg', 0, 0, 21, 'sdp', 0, 0, 0, 100, '2020-07-26 12:22:39', '2020-07-26 12:22:39'),
(36, 'Adapter sạc 2 cổng USB Type C PD 60W Anker PowerPort Atom III A2322 Trắng', 'adapter-sac-2-cong-usb-type-c-pd-60w-anker-powerport-atom-iii-a2322-trang', 1000000, 0, 'adapter-2-cong-60w-anker-powerport-atom-iii-a2322-600x600 (1).jpg', 0, 0, 22, 'adt', 0, 0, 0, 100, '2020-07-26 13:10:32', '2020-07-26 13:10:32'),
(37, 'Iphone 7 32GB', 'iphone-7-32gb', 8500000, 0, 'iphone-7-gold-400x460.png', 0, 0, 12, 'ip7', 0, 0, 0, 100, '2020-07-27 09:07:33', '2020-07-27 09:07:33'),
(38, 'Samsung Galaxy A20s 32GB', 'samsung-galaxy-a20s-32gb', 4390000, 5, 'samsung-galaxy-a20s-32gb-055420-045420-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-27 09:12:22', '2020-07-27 09:12:22'),
(39, 'Samsung Galaxy A21s (3GB/32GB)', 'samsung-galaxy-a21s-3gb32gb', 4690000, 5, 'samsung-galaxy-a21s-3gb-055520-045516-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-27 09:16:42', '2020-07-27 09:16:42'),
(40, 'OPPO A12 (3GB/32GB)', 'oppo-a12-3gb32gb', 2990000, 0, 'oppo-a12-xanh-400x460-400x460.png', 0, 0, 14, 'op', 0, 0, 0, 100, '2020-07-27 09:20:58', '2020-07-27 09:20:58'),
(41, 'OPPO A12 (4GB/64GB)', 'oppo-a12-4gb64gb', 3690000, 10, 'oppo-a12-4gb-den-400x460-400x460.png', 0, 0, 14, 'op', 0, 0, 0, 100, '2020-07-27 09:23:50', '2020-07-27 09:23:50'),
(42, 'Xiaomi Redmi 8 (3GB/32GB)', 'xiaomi-redmi-8-3gb32gb', 2690000, 0, 'xiaomi-redmi-8-blue-400x460.png', 0, 0, 15, 'xm', 0, 0, 0, 100, '2020-07-27 09:27:01', '2020-07-27 09:27:01'),
(43, 'Xiaomi Redmi Note 8 (4GB/128GB)', 'xiaomi-redmi-note-8-4gb128gb', 4990000, 5, 'xiaomi-redmi-note-8-128gb-black-400x460.png', 0, 0, 15, 'xm', 0, 0, 0, 100, '2020-07-27 09:30:06', '2020-07-27 09:30:06'),
(44, 'Vivo Y1s', 'vivo-y1s', 2690000, 0, 'vivo-y1s-154520-014531-400x460.png', 0, 0, 16, 'vv', 0, 0, 0, 100, '2020-07-27 09:34:08', '2020-07-27 09:34:08'),
(45, 'Vivo Y19', 'vivo-y19', 4990000, 5, 'vivo-y19-white-400x460.png', 0, 0, 16, 'vv', 0, 0, 0, 100, '2020-07-27 09:38:00', '2020-07-27 09:38:00'),
(46, 'Tai nghe Bluetooth True Wireless JBL LIVE 300TWS', 'tai-nghe-bluetooth-true-wireless-jbl-live-300tws', 3990000, 0, 'tai-nghe-bluetooth-true-wireless-jbl-live-300tws-ava-600x600.jpg', 0, 0, 24, 'tg', 0, 0, 0, 100, '2020-07-27 10:06:10', '2020-07-27 10:06:10'),
(47, 'Android, iOS (iPhone, iPad), Windows', 'android-ios-iphone-ipad-windows', 550000, 0, 'the-nho-microsd-64gb-class-10u1-1-600x600.png', 0, 0, 25, 'tn', 0, 0, 0, 100, '2020-07-27 10:08:42', '2020-07-27 10:08:42'),
(48, 'Cáp Lightning MFI 0.9m Anker PowerLine+ II A8452', 'cap-lightning-mfi-09m-anker-powerline-ii-a8452', 430000, 0, 'cap-lightning-mfi-09m-anker-powerline-ii-a8452-den-1-600x600.jpg', 0, 0, 23, 'cap', 0, 0, 0, 100, '2020-07-27 10:12:05', '2020-07-27 10:12:05'),
(49, 'Nokia 230', 'nokia-230', 1250000, 0, 'nokia-230-khong-the-xam-400x460-400x460.png', 0, 0, 19, 'nokia', 0, 0, 0, 100, '2020-07-28 09:53:13', '2020-07-28 09:53:13'),
(50, 'Nokia 150', 'nokia-150', 660000, 0, 'nokia-150-2020-den-400x460-400x460.png', 3, 1, 19, 'nokia', 0, 0, 0, 100, '2020-07-29 03:32:27', '2020-07-29 03:32:27'),
(51, 'Nokia 5310 (2020)', 'nokia-5310-2020', 1000000, 0, 'nokia-5310-2020-den-do-400x460-400x460.png', 0, 0, 19, 'n', 0, 0, 0, 100, '2020-07-29 03:34:40', '2020-07-29 03:34:40'),
(52, 'Nokia C2', 'nokia-c2', 16900000, 5, 'nokia-c2-xanh-400x460-400x460.png', 0, 0, 19, 'n', 0, 0, 0, 100, '2020-07-29 03:37:05', '2020-07-29 03:37:05'),
(53, 'Nokia 2.3', 'nokia-23', 1990000, 5, 'nokia-23-gray-400x460.png', 0, 0, 19, 'n', 0, 0, 0, 100, '2020-07-29 03:39:35', '2020-07-29 03:39:35'),
(54, 'Nokia 5.3', 'nokia-53', 3990000, 5, 'nokia-53-den-400x460-400x460.png', 0, 0, 19, 'n', 0, 0, 0, 100, '2020-07-29 03:41:21', '2020-07-29 03:41:21'),
(55, 'Itel it5092', 'itel-it5092', 390000, 0, 'itel-it5092-gold-400x460.png', 0, 0, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:47:53', '2020-07-29 03:47:53'),
(56, 'Itel it6120', 'itel-it6120', 300000, 0, 'itel-it6120-400x460.png', 0, 0, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:49:08', '2020-07-29 03:49:08'),
(57, 'Itel it2590', 'itel-it2590', 390000, 0, 'itel-it2590-chi-tiet-400x460.png', 0, 0, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:50:31', '2020-07-29 03:50:31'),
(58, 'Itel Alpha Lite', 'itel-alpha-lite', 990000, 0, 'itel-alpha-lite-black-400x460.png', 0, 0, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:52:59', '2020-07-29 03:52:59'),
(59, 'Itel S33', 'itel-s33', 1390000, 5, 'itel-s33-gold-400x460.png', 0, 0, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:56:29', '2020-07-29 03:56:29'),
(60, 'Itel P15', 'itel-p15', 1550000, 5, 'itel-p15-gold-400x460.png', 0, 0, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:58:19', '2020-07-29 03:58:19'),
(61, 'Itel S15 Pro', 'itel-s15-pro', 1990000, 5, 'itel-s15-pro-purple-400x460.png', 4, 1, 20, 'i', 0, 0, 0, 100, '2020-07-29 03:59:49', '2020-07-29 03:59:49'),
(62, 'Vsmart Star 4', 'vsmart-star-4', 2290000, 0, 'vsmart-star-4-3gb-062420-112452-400x460.png', 0, 0, 18, 'v', 0, 0, 0, 100, '2020-07-29 04:02:10', '2020-07-29 04:02:10'),
(63, 'Vsmart Joy 3', 'vsmart-joy-3', 2290000, 0, 'vsmart-joy-3-2gb-tim-400x460-400x460.png', 0, 0, 18, 'v', 0, 0, 0, 100, '2020-07-29 04:03:56', '2020-07-29 04:03:56'),
(64, 'Vsmart Star 4 (2GB/32GB)', 'vsmart-star-4-2gb32gb', 2090000, 0, 'vsmart-star-4-den-400x460-2-400x460.png', 0, 0, 18, 'v', 0, 0, 0, 100, '2020-07-29 04:06:17', '2020-07-29 04:06:17'),
(65, 'Coolpad F129', 'coolpad-f129', 270000, 0, 'coolpad-f129-black-400x460.png', 0, 0, 17, 'c', 0, 0, 0, 100, '2020-07-29 04:08:04', '2020-07-29 04:08:04'),
(66, 'Coolpad F110', 'coolpad-f110', 190000, 0, 'coolpad-f110-blue-1-400x460.png', 3, 1, 17, 'c', 0, 0, 0, 100, '2020-07-29 04:10:22', '2020-07-29 04:10:22'),
(67, 'Coolpad F116', 'coolpad-f116', 200000, 0, 'coolpad-f116-400x460.png', 0, 0, 17, 'c', 0, 0, 0, 100, '2020-07-29 04:11:46', '2020-07-29 04:11:46'),
(68, 'Coolpad F126', 'coolpad-f126', 200000, 0, 'coolpad-f126-black-400x460.png', 0, 0, 17, 'c', 0, 0, 0, 100, '2020-07-29 04:12:57', '2020-07-29 04:12:57'),
(69, 'Coolpad F210', 'coolpad-f210', 250000, 0, 'coolpad-f210-blue-2-400x460.png', 0, 0, 17, 'c', 0, 0, 0, 100, '2020-07-29 04:14:43', '2020-07-29 04:14:43'),
(70, 'Vivo Y30', 'vivo-y30', 4990000, 0, 'vivo-y30-xanh-400x460-400x460.png', 0, 0, 16, 'vv', 0, 0, 0, 100, '2020-07-29 04:16:26', '2020-07-29 04:16:26'),
(71, 'Vivo U10', 'vivo-u10', 3990000, 0, 'vivo-u10-400x460.png', 0, 0, 16, 'vv', 0, 0, 0, 100, '2020-07-29 04:23:13', '2020-07-29 04:23:13'),
(72, 'Xiaomi Mi Note 10 Pro', 'xiaomi-mi-note-10-pro', 14990000, 10, 'xiaomi-mi-note-10-pro-black-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:26:58', '2020-07-29 04:26:58'),
(73, 'Xiaomi Redmi Note 8 Pro (6GB/128GB)', 'xiaomi-redmi-note-8-pro-6gb128gb', 5990000, 0, 'xiaomi-redmi-note-8-pro-6gb-128gb-white-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:28:49', '2020-07-29 04:28:49'),
(74, 'Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s', 5990000, 0, 'xiaomi-redmi-note-9s-400x460-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:30:31', '2020-07-29 04:30:31'),
(75, 'Xiaomi Mi Note 10 Lite', 'xiaomi-mi-note-10-lite', 9990000, 0, 'xiaomi-mi-note-10-lite-400x460-trang-1-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:33:04', '2020-07-29 04:33:04'),
(76, 'Xiaomi Redmi Note 9 Pro (6GB/64GB)', 'xiaomi-redmi-note-9-pro-6gb64gb', 6490000, 0, 'xiaomi-redmi-note-9-pro-128gb-xam-400x460-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:35:16', '2020-07-29 04:35:16'),
(77, 'Xiaomi Redmi Note 9', 'xiaomi-redmi-note-9', 4990000, 0, 'xiaomi-redmi-note-9-xanh-dam-400x460-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:46:01', '2020-07-29 04:46:01'),
(78, 'Xiaomi Redmi Note 9 Pro (6GB/128GB)', 'xiaomi-redmi-note-9-pro-6gb128gb', 6990000, 0, 'xiaomi-redmi-note-9-pro-128gb-trang-400x460-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:47:39', '2020-07-29 04:47:39'),
(79, 'Xiaomi Redmi 9C', 'xiaomi-redmi-9c', 2490000, 0, 'xiaomi-redmi-9c-230920-040923-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 04:49:03', '2020-07-29 04:49:03'),
(80, 'OPPO A91', 'oppo-a91', 6990000, 5, 'oppo-a91-trang-400x460-1-400x460.png', 0, 0, 14, 'o', 0, 0, 0, 100, '2020-07-29 04:51:10', '2020-07-29 04:51:10'),
(81, 'OPPO A9 (2020)', 'oppo-a9-2020', 5990000, 5, 'oppo-a9-400x460-1-400x460.png', 0, 0, 14, 'o', 0, 0, 0, 100, '2020-07-29 04:53:02', '2020-07-29 04:53:02'),
(82, 'OPPO A31 (6GB/128GB)', 'oppo-a31-6gb128gb', 5290000, 5, 'oppo-a31-2020-128gb-den-400x460-2-400x460.png', 0, 0, 14, 'o', 0, 0, 0, 100, '2020-07-29 04:54:49', '2020-07-29 04:54:49'),
(83, 'OPPO A31 (4GB/128GB)', 'oppo-a31-4gb128gb', 4490000, 5, 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 0, 0, 14, 'x', 0, 0, 0, 100, '2020-07-29 04:56:12', '2020-07-29 04:56:12'),
(84, 'OPPO Reno2 F', 'oppo-reno2-f', 8990000, 20, 'oppo-reno2-f-white-400x460-400x460.png', 0, 0, 14, 'x', 0, 0, 0, 100, '2020-07-29 04:58:37', '2020-07-29 04:58:37'),
(85, 'OPPO Reno3', 'oppo-reno3', 8990000, 15, 'oppo-reno3-trang-400x460-400x460.png', 0, 0, 14, 'x', 0, 0, 0, 100, '2020-07-29 05:00:15', '2020-07-29 05:00:15'),
(86, 'Samsung Galaxy A10s', 'samsung-galaxy-a10s', 3690000, 5, 'samsung-galaxy-a10s-xanh-400x460-400x460.png', 0, 0, 13, 's', 0, 0, 0, 100, '2020-07-29 05:02:32', '2020-07-29 05:02:32'),
(87, 'Samsung Galaxy A70', 'samsung-galaxy-a70', 9290000, 20, 'samsung-galaxy-a70-052920-062956-400x460.png', 5, 1, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:04:08', '2020-07-29 05:04:08'),
(88, 'Samsung Galaxy A51 (8GB/128GB)', 'samsung-galaxy-a51-8gb128gb', 8390000, 0, 'samsung-galaxy-a51-8gb-blue-400x460-1-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:05:25', '2020-07-29 05:05:25'),
(89, 'Samsung Galaxy A51 (6GB/128GB)', 'samsung-galaxy-a51-6gb128gb', 7990000, 16, 'samsung-galaxy-a51-400x460-new-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:06:57', '2020-07-29 05:06:57'),
(90, 'Samsung Galaxy A50s', 'samsung-galaxy-a50s', 6990000, 10, 'samsung-galaxy-a50s-050720-070703-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:08:56', '2020-07-29 05:08:56'),
(91, 'Samsung Galaxy A80', 'samsung-galaxy-a80', 14990000, 50, 'samsung-galaxy-a80-050220-050225-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:12:06', '2020-07-29 05:12:06'),
(92, 'Samsung Galaxy S10 Lite', 'samsung-galaxy-s10-lite', 14990000, 10, 'samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:14:05', '2020-07-29 05:14:05'),
(93, 'Samsung Galaxy Note 10 Lite', 'samsung-galaxy-note-10-lite', 11490000, 0, 'samsung-galaxy-note-10-lite-chi-tiet-1-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:15:31', '2020-07-29 05:15:31'),
(94, 'Samsung Galaxy A71', 'samsung-galaxy-a71', 10490000, 20, 'samsung-galaxy-a71-195320-105352-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:17:00', '2020-07-29 05:17:00'),
(95, 'Samsung Galaxy S20+', 'samsung-galaxy-s20', 16990000, 0, 'samsung-galaxy-s20-plus-400x460-fix-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:19:39', '2020-07-29 05:19:39'),
(96, 'Galaxy S20', 'galaxy-s20', 18490000, 0, 'samsung-galaxy-s20-400x460-hong-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 05:21:39', '2020-07-29 05:21:39'),
(97, 'Iphone 11 64GB', 'iphone-11-64gb', 21990000, 0, 'iphone-11-red-2.png', 4, 1, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:27:20', '2020-07-29 05:27:20'),
(98, 'iPhone Xs 64GB', 'iphone-xs-64gb', 19990000, 10, 'iphone-xs-gold-400x460-1-400x460.png', 0, 0, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:29:47', '2020-07-29 05:29:47'),
(99, 'iPhone 8 Plus 128GB', 'iphone-8-plus-128gb', 16990000, 0, 'iphone-8-plus-128gb-082720-052722-400x460.png', 0, 0, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:32:22', '2020-07-29 05:32:22'),
(100, 'iPhone 11 Pro Max 64GB', 'iphone-11-pro-max-64gb', 33990000, 10, 'iphone-11-pro-max-black.png', 0, 0, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:34:08', '2020-07-29 05:34:08'),
(101, 'iPhone Xs Max 256GB', 'iphone-xs-max-256gb', 30990000, 20, 'iphone-xs-max-256gb-white-400x460.png', 0, 0, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:35:29', '2020-07-29 05:35:29'),
(102, 'iPhone 11 256GB', 'iphone-11-256gb', 25990000, 5, 'iphone-11-256gb-black-400x460.png', 0, 0, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:37:15', '2020-07-29 05:37:15'),
(103, 'iPhone 11 128GB', 'iphone-11-128gb', 23990000, 5, 'iphone-11-128gb-green-400x460.png', 0, 0, 12, 'i', 0, 0, 0, 100, '2020-07-29 05:38:36', '2020-07-29 05:38:36'),
(104, 'Vsmart Joy 3 (3GB/32GB)', 'vsmart-joy-3-3gb32gb', 2690000, 0, 'vsmart-joy-3-tim-400x460-400x460.png', 0, 0, 18, 'vs', 0, 0, 0, 100, '2020-07-29 05:44:04', '2020-07-29 05:44:04'),
(105, 'Vsmart Joy 3 (4GB/64GB)', 'vsmart-joy-3-4gb64gb', 3290000, 5, 'vsmart-joy-3-4gb-den-400x460-400x460.png', 0, 0, 18, 'v', 0, 0, 0, 100, '2020-07-29 05:45:44', '2020-07-29 05:45:44'),
(106, 'Vsmart Active 3 (6GB/64GB)', 'vsmart-active-3-6gb64gb', 3990000, 0, 'vsmart-active-3-6gb-purple-ruby-400x460-1-400x460.png', 4, 1, 18, 'v', 0, 0, 0, 100, '2020-07-29 05:47:11', '2020-07-29 05:47:11'),
(107, 'Vivo V19', 'vivo-v19', 8590000, 0, 'vivo-v19-xanh-400x460-400x460.png', 0, 0, 16, 'vv', 0, 0, 0, 100, '2020-07-29 05:51:46', '2020-07-29 05:51:46'),
(108, 'Vivo V19 Neo', 'vivo-v19-neo', 7390000, 0, 'vivo-v19-neo-den-400x460-1-400x460.png', 4, 1, 16, 'vv', 0, 0, 0, 100, '2020-07-29 05:53:24', '2020-07-29 05:53:24'),
(109, 'Vivo S1 Pro', 'vivo-s1-pro', 5990000, 0, 'vivo-s1-pro-white-400x460.png', 0, 0, 16, 'vv', 0, 0, 0, 100, '2020-07-29 05:55:17', '2020-07-29 05:55:17'),
(110, 'Xiaomi Redmi 9 (4GB/64GB)', 'xiaomi-redmi-9-4gb64gb', 3990000, 0, 'xiaomi-redmi-9-114620-094649-400x460.png', 5, 1, 15, 'x', 0, 0, 0, 100, '2020-07-29 05:59:45', '2020-07-29 05:59:45'),
(111, 'Xiaomi Redmi Note 8 (3GB/32GB)', 'xiaomi-redmi-note-8-3gb32gb', 3790000, 0, 'xiaomi-redmi-note-8-32gb-white-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 06:01:10', '2020-07-29 06:01:10'),
(112, 'Xiaomi Redmi 9 (3GB/32GB)', 'xiaomi-redmi-9-3gb32gb', 3590000, 0, 'xiaomi-redmi-9-3gb-114620-094625-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 06:02:48', '2020-07-29 06:02:48'),
(113, 'Xiaomi Redmi 9C (3GB/64GB)', 'xiaomi-redmi-9c-3gb64gb', 2990000, 0, 'xiaomi-redmi-9c-3gb-234920-034925-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 06:04:13', '2020-07-29 06:04:13'),
(114, 'Xiaomi Redmi Note 7 (4GB/64GB)', 'xiaomi-redmi-note-7-4gb64gb', 4990000, 10, 'xiaomi-redmi-note-7-400x460.png', 0, 0, 15, 'x', 0, 0, 0, 100, '2020-07-29 06:06:03', '2020-07-29 06:06:03'),
(115, 'OPPO A92', 'oppo-a92', 6490000, 0, 'oppo-a92-tim-400x460-400x460.png', 4, 1, 14, 'o', 0, 0, 0, 100, '2020-07-29 06:07:53', '2020-07-29 06:07:53'),
(116, 'OPPO Reno3 Pro', 'oppo-reno3-pro', 14990000, 0, 'oppo-reno3-pro-den-400x460-400x460.png', 0, 0, 14, 'o', 0, 0, 0, 100, '2020-07-29 06:09:15', '2020-07-29 06:09:15'),
(117, 'OPPO Find X2', 'oppo-find-x2', 21990000, 0, 'oppo-find-x2-xanh-400x460-1-400x460.png', 0, 0, 14, 'o', 0, 0, 0, 100, '2020-07-29 06:11:49', '2020-07-29 06:11:49'),
(118, 'Samsung Galaxy A21s (6GB/64GB)', 'samsung-galaxy-a21s-6gb64gb', 5690000, 5, 'samsung-galaxy-a21s-055620-045627-400x460.png', 0, 0, 13, 'ss', 0, 0, 0, 100, '2020-07-29 06:14:43', '2020-07-29 06:14:43'),
(119, 'iPhone 11 Pro Max 512GB', 'iphone-11-pro-max-512gb', 41990000, 0, 'iphone-11-pro-max-512gb-gold-400x460.png', 4, 1, 12, 'i', 0, 0, 0, 100, '2020-07-29 06:17:27', '2020-07-29 06:17:27'),
(120, 'Iphone 11 Pro Max 256GB', 'iphone-11-pro-max-256gb', 37990000, 0, 'iphone-11-pro-max-256gb-black-400x460.png', 5, 1, 12, 'i', 0, 0, 0, 100, '2020-07-29 06:18:59', '2020-07-29 06:18:59'),
(121, 'Pin sạc dự phòng Polymer 15.000mAh Type C Xmobile PJ JP200 Xám', 'pin-sac-du-phong-polymer-15000mah-type-c-xmobile-pj-jp200-xam', 850000, 0, 'sac-du-phong-15000mah-type-c-xmobile-pj-jp200-xam-1-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:35:54', '2020-07-29 06:35:54'),
(122, 'Pin sạc dự phòng 10.000mAh AVA DS008-WB Xám', 'pin-sac-du-phong-10000mah-ava-ds008-wb-xam', 400000, 0, 'pin-sac-du-phong-10000mah-ava-ds008-wb-xam-ava-1-600x600.jpg', 4, 1, 21, 'p', 0, 0, 0, 100, '2020-07-29 06:37:10', '2020-07-29 06:37:10'),
(123, 'Pin sạc dự phòng Polymer 10.000mAh Type C PD QC3.0 Energizer UE10047PQ Đen', 'pin-sac-du-phong-polymer-10000mah-type-c-pd-qc30-energizer-ue10047pq-den', 850000, 0, 'sac-du-phong-10000mah-type-c-energizer-ue10047pq-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:38:39', '2020-07-29 06:38:39'),
(124, 'Pin sạc dự phòng Polymer 10.000 mAh Type C eSaver PJ JP106S', 'pin-sac-du-phong-polymer-10000-mah-type-c-esaver-pj-jp106s', 650000, 5, 'polymer-10000-mah-type-c-esaver-pj-jp106s-avatar-1-600x600.jpg', 0, 0, 21, 'p', 0, 0, 0, 100, '2020-07-29 06:40:08', '2020-07-29 06:40:08'),
(125, 'Pin sạc dự phòng 10.000mAh PowerIQ 2.0 Anker PowerCore II A1230 Đen', 'pin-sac-du-phong-10000mah-poweriq-20-anker-powercore-ii-a1230-den', 950000, 0, 'sac-du-phong-10000mah-anker-powercore-ii-a1230-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:41:29', '2020-07-29 06:41:29'),
(126, 'Pin sạc dự phòng Polymer 10.000mAh Xiaomi Mi 18W Fast Charge Power Bank 3', 'pin-sac-du-phong-polymer-10000mah-xiaomi-mi-18w-fast-charge-power-bank-3', 499000, 10, 'sac-du-phong-polymer-10000mah-xiaomi-mi-18w-den-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:43:00', '2020-07-29 06:43:00'),
(127, 'Pin sạc dự phòng 7.500mAh AVA LJ JP195', 'pin-sac-du-phong-7500mah-ava-lj-jp195', 1990000, 0, 'pin-sac-du-phong-7500mah-ava-lj-jp195-add-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:44:25', '2020-07-29 06:44:25'),
(128, 'Pin sạc dự phòng Polymer 10.000mAh Type C Xmobile PJ JP190ST Xanh', 'pin-sac-du-phong-polymer-10000mah-type-c-xmobile-pj-jp190st-xanh', 700000, 0, 'sac-du-phong-10000mah-type-c-xmobile-pj-jp190st-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:46:16', '2020-07-29 06:46:16'),
(129, 'Pin sạc dự phòng không dây Polymer 10.000mAh Type C PD QC3.0 Energizer QE10007PQ Xám', 'pin-sac-du-phong-khong-day-polymer-10000mah-type-c-pd-qc30-energizer-qe10007pq-xam', 1000000, 0, 'pin-sac-khong-day-10000mah-type-c-pd-qc3-qe10007pq-xam-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:47:19', '2020-07-29 06:47:19'),
(130, 'Pin sạc dự phòng Polymer 10.000mAh Type C Aukey PB-XN10 Đen', 'pin-sac-du-phong-polymer-10000mah-type-c-aukey-pb-xn10-den', 490000, 0, 'sac-du-phong-polymer-10000mah-type-c-aukey-pb-xn10-1-1-600x600.jpg', 0, 0, 21, 's', 0, 0, 0, 100, '2020-07-29 06:49:12', '2020-07-29 06:49:12'),
(131, 'Pin sạc dự phòng Polymer 20.000mAh Type C Anker PowerCore Metro Essential A1268 Đen', 'pin-sac-du-phong-polymer-20000mah-type-c-anker-powercore-metro-essential-a1268-den', 1200000, 0, 'pin-du-phong-20000mah-type-c-anker-powercore-a1268-1-600x600.jpg', 5, 1, 21, 's', 0, 0, 0, 100, '2020-07-29 06:50:29', '2020-07-29 06:50:29'),
(133, 'Adapter sạc 2.4A Dual Anker PowerPort Mini - A2620 Trắng', 'adapter-sac-24a-dual-anker-powerport-mini---a2620-trang', 225000, 0, 'adapter-sac-2a-dual-anker-a2620-trang-add-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:40:08', '2020-07-29 07:40:08'),
(134, 'Adapter Sạc Type-C 87W Apple MNF82 Trắng', 'adapter-sac-type-c-87w-apple-mnf82-trang', 2790000, 0, 'adapter-type-c-87w-cho-ipad-macbook-apple-trang-avatar-1-600x600.jpg', 0, 0, 22, 'a', 0, 0, 0, 100, '2020-07-29 07:42:10', '2020-07-29 07:42:10'),
(135, 'Adapter sạc 2 cổng 3A Anker Powerport Speed 2 - A2025 Đen', 'adapter-sac-2-cong-3a-anker-powerport-speed-2---a2025-den', 730000, 0, 'adapter-2-cong-60w-anker-powerport-atom-iii-a2322-600x600 (1).jpg', 0, 0, 22, 'a', 0, 0, 0, 100, '2020-07-29 07:43:32', '2020-07-29 07:43:32'),
(136, 'Adapter sạc 2 cổng Type C PD QC3.0 18W Xmobile QP-1EU Trắng', 'adapter-sac-2-cong-type-c-pd-qc30-18w-xmobile-qp-1eu-trang', 350000, 0, 'adapter-sac-2-cong-type-c-pd-xmobile-qp-1eu-trang-1-600x600.jpg', 0, 0, 22, 'a', 0, 0, 0, 100, '2020-07-29 07:44:51', '2020-07-29 07:44:51'),
(137, 'Adapter sạc 2A AVA DS498-TB Trắng', 'adapter-sac-2a-ava-ds498-tb-trang', 120000, 0, 'adapter-sac-2a-ava-ds498-tb-trang-1-600x600.jpg', 0, 0, 22, 'â', 0, 0, 0, 100, '2020-07-29 07:46:02', '2020-07-29 07:46:02'),
(138, 'Adapter sạc 3.4A Dual Xmobile DS702 Trắng', 'adapter-sac-34a-dual-xmobile-ds702-trang', 250000, 0, 'adapter-sac-24a-dual-xmobile-ds702-trang-1-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:48:01', '2020-07-29 07:48:01'),
(139, 'Adapter sạc 2.4A Dual AVA JC78 Trắng', 'adapter-sac-24a-dual-ava-jc78-trang', 150000, 0, 'adapter-sac-24a-dual-ava-jc78-trang-add-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:49:27', '2020-07-29 07:49:27'),
(140, 'Bộ Adapter sạc kèm cáp Type C - Type C PD 25W Samsung EP-TA8000 Trắng', 'bo-adapter-sac-kem-cap-type-c---type-c-pd-25w-samsung-ep-ta8000-trang', 600000, 0, 'adapter-kem-cap-type-c-pd-25w-samsung-ep-ta8000-ava-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:50:34', '2020-07-29 07:50:34'),
(141, 'Adapter sạc Type C PD 18W Anker PowerPort PD Nano - A2716 Trắng', 'adapter-sac-type-c-pd-18w-anker-powerport-pd-nano---a2716-trang', 500000, 0, 'adapter-sac-type-c-pd-18w-anker-a2716-trang-1-600x600.jpg', 0, 0, 22, 'a', 0, 0, 0, 100, '2020-07-29 07:51:54', '2020-07-29 07:51:54'),
(142, 'Adapter sạc 4 cổng USB Type C 4.8A Xmobile DS931-WB Trắng', 'adapter-sac-4-cong-usb-type-c-48a-xmobile-ds931-wb-trang', 450000, 0, 'adapter-sac-4-cong-usb-type-c-48a-xmobile-ds931-wb-add-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:53:24', '2020-07-29 07:53:24'),
(143, 'Adapter Sạc 1A AVA JC62A Trắng', 'adapter-sac-1a-ava-jc62a-trang', 90000, 0, 'adapter-sac-1a-ava-jc62a-trang-1-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:54:16', '2020-07-29 07:54:16'),
(144, 'Adapter Sạc 2.4A Dual AVA ACL168A Trắng', 'adapter-sac-24a-dual-ava-acl168a-trang', 170000, 0, 'adapter-sac-24a-dual-ava-acl168a-trang-1-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:55:16', '2020-07-29 07:55:16'),
(145, 'Adapter sạc 4 cổng USB Type C PD 100W Anker PowerPort Atom A2041 Trắng', 'adapter-sac-4-cong-usb-type-c-pd-100w-anker-powerport-atom-a2041-trang', 2600000, 0, 'adapter-4-cong-type-c-pd-100w-anker-powerport-atom-1-1-600x600.jpg', 0, 0, 22, 'aa', 0, 0, 0, 100, '2020-07-29 07:56:17', '2020-07-29 07:56:17'),
(146, 'Cáp Lightning MFI 0.9m Anker Powerline II A8432', 'cap-lightning-mfi-09m-anker-powerline-ii-a8432', 330000, 0, 'cap-lightning-mfi-09m-anker-powerline-ii-a8432-den-1-1-600x600.jpg', 0, 0, 23, 'ca', 0, 0, 0, 100, '2020-07-29 07:57:58', '2020-07-29 07:57:58'),
(147, 'Cáp Lightning 1m Xmobile AL31-1000 Trắng', 'cap-lightning-1m-xmobile-al31-1000-trang', 170000, 0, 'cap-lightning-1m-xmobile-al31-1000-trang-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 07:59:11', '2020-07-29 07:59:11'),
(148, 'Cáp Lightning 1m Apple MXLY2 Trắng', 'cap-lightning-1m-apple-mxly2-trang', 550000, 0, 'cap-lightning-1m-apple-mxly2-ava-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:00:12', '2020-07-29 08:00:12'),
(149, 'Cáp Type C 1m Xmobile TC27-1000 Trắng', 'cap-type-c-1m-xmobile-tc27-1000-trang', 170000, 0, 'cap-type-c-1m-xmobile-tc27-1000-trang-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:01:26', '2020-07-29 08:01:26'),
(150, 'Cáp Type C 0.9m Anker A8168 Xám', 'cap-type-c-09m-anker-a8168-xam', 350000, 0, 'cap-type-c-09m-anker-a8168-xam-1-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:02:32', '2020-07-29 08:02:32'),
(151, 'Cáp Type-C 2 m AVA DS460-TB Đen', 'cap-type-c-2-m-ava-ds460-tb-den', 90000, 0, 'cap-type-c-2m-ava-ds460-tb-den-1-fixx1-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:03:36', '2020-07-29 08:03:36'),
(152, 'Cáp Micro 1m AVA Speed II X', 'cap-micro-1m-ava-speed-ii-x', 70000, 0, 'cap-micro-1m-ava-speed-ii-x-ava--600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:04:56', '2020-07-29 08:04:56'),
(153, 'Cáp Micro USB 1.2m Aukey CB-AM1 Đen Trắng', 'cap-micro-usb-12m-aukey-cb-am1-den-trang', 119000, 0, 'cap-micro-usb-12m-aukey-cb-am1-den-trang-1-600x600.jpg', 0, 0, 23, 'aaa', 0, 0, 0, 100, '2020-07-29 08:05:57', '2020-07-29 08:05:57'),
(154, 'Cáp Micro 20cm AVA Speed II', 'cap-micro-20cm-ava-speed-ii', 35000, 0, 'cap-micro-20cm-ava-speed-ii-trang-1-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:07:03', '2020-07-29 08:07:03'),
(155, 'Dây cáp Micro USB 1.5 m Sony CP-ABP150 Dây Nilon', 'day-cap-micro-usb-15-m-sony-cp-abp150-day-nilon', 290000, 10, 'cap-micro-15m-sony-cp-abp150-12-600x600.jpg', 0, 0, 23, 'aa', 0, 0, 0, 100, '2020-07-29 08:08:12', '2020-07-29 08:08:12'),
(156, 'Tai nghe EP JBL C150SIUBLK Đen', 'tai-nghe-ep-jbl-c150siublk-den', 250000, 0, 'tai-nghe-ep-jbl-c150siublk-den-add-600x600.jpg', 0, 0, 24, 'aa', 0, 0, 0, 100, '2020-07-29 08:10:08', '2020-07-29 08:10:08'),
(157, 'Tai nghe EP Kanen IP-225', 'tai-nghe-ep-kanen-ip-225', 150000, 0, 'tai-nghe-ep-kanen-ip-225-add-600x600.jpg', 0, 0, 24, 'aa', 0, 0, 0, 100, '2020-07-29 08:11:41', '2020-07-29 08:11:41'),
(158, 'Tai nghe EP Awei Q50Hi Bạc', 'tai-nghe-ep-awei-q50hi-bac', 150000, 0, 'tai-nghe-ep-awei-q50hi-bac-1-600x600.jpg', 0, 0, 24, 'aa', 0, 0, 0, 100, '2020-07-29 08:12:33', '2020-07-29 08:12:33'),
(159, 'Tai nghe Bluetooth True Wireless Harman/Kardon FLYTWS Đen', 'tai-nghe-bluetooth-true-wireless-harmankardon-flytws-den', 4490000, 0, 'tai-nghe-bluetooth-tws-harman-kardon-fly-den-ava-600x600.jpg', 0, 0, 24, 'aa', 0, 0, 0, 100, '2020-07-29 08:14:00', '2020-07-29 08:14:00'),
(160, 'Tai nghe Bluetooth True Wireless Mozard AT15 Trắng', 'tai-nghe-bluetooth-true-wireless-mozard-at15-trang', 800000, 25, 'tai-nghe-bluetooth-true-wireless-mozard-at15-trang-1-600x600-1-600x600.jpg', 0, 0, 24, 'aa', 0, 0, 0, 100, '2020-07-29 08:16:07', '2020-07-29 08:16:07'),
(161, 'Thẻ nhớ MicroSD 128 GB Lexar class 10 UHS-I kèm Adapter SD', 'the-nho-microsd-128-gb-lexar-class-10-uhs-i-kem-adapter-sd', 1090000, 40, 'the-microsd-128gb-lexar-class-10-uhs-i-kem-adapter-304420-094416-600x600.jpg', 2, 1, 25, 'aa', 0, 0, 0, 100, '2020-07-29 08:18:06', '2020-07-29 08:18:06'),
(162, 'Thẻ nhớ MicroSD 32 GB Class 10', 'the-nho-microsd-32-gb-class-10', 300000, 20, 'the-nho-microsd-32gb-class-10-305520-105555-600x600.jpg', 0, 0, 25, 't', 0, 0, 0, 100, '2020-07-29 08:20:38', '2020-07-29 08:20:38'),
(163, 'Thẻ nhớ MicroSD 16 GB Class 10', 'the-nho-microsd-16-gb-class-10', 220000, 20, 'the-nho-microsd-16gb-class-10-fix-600x600.jpg', 0, 0, 25, 't', 0, 0, 0, 100, '2020-07-29 08:21:47', '2020-07-29 08:21:47'),
(164, 'Thẻ nhớ MicroSD 8 GB Class 4', 'the-nho-microsd-8-gb-class-4', 150000, 20, 'the-nho-microsd-8gb-class-4-fix-600x600.jpg', 0, 0, 25, 't', 0, 0, 0, 100, '2020-07-29 08:22:54', '2020-07-29 08:22:54'),
(165, 'Anh Loan Duyên', 'anh-loan-duyen', 123000, 0, 'adapter-kem-cap-type-c-pd-25w-samsung-ep-ta8000-ava-600x600.jpg', 0, 0, 24, 'sm', 0, 0, 0, 100, '2020-11-28 07:15:29', '2020-11-28 07:15:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rated`
--

CREATE TABLE `rated` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `rated` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rated`
--

INSERT INTO `rated` (`id`, `id_product`, `id_users`, `comment`, `rated`, `created_at`, `updated_at`) VALUES
(22, 119, 11, 'Cũng được.', 4, '2020-12-23 05:29:49', '2020-12-23 05:29:49'),
(23, 50, 11, 'Trọng lực trái đất luôn thử thách Nokia', 3, '2020-12-23 05:31:41', '2020-12-23 05:31:41'),
(24, 120, 11, 'Đen sang chảnh', 5, '2020-12-23 05:32:25', '2020-12-23 05:32:25'),
(25, 131, 11, 'Pin tràn trề', 5, '2020-12-23 05:36:22', '2020-12-23 05:36:22'),
(26, 87, 11, 'Ok', 5, '2020-12-23 05:41:11', '2020-12-23 05:41:11'),
(27, 97, 11, 'Đỏ đẹp đó', 4, '2020-12-23 05:41:55', '2020-12-23 05:41:55'),
(28, 115, 11, 'Ổn', 4, '2020-12-23 05:42:33', '2020-12-23 05:42:33'),
(29, 110, 11, 'giá cả phải chăng', 5, '2020-12-23 05:42:52', '2020-12-23 05:42:52'),
(30, 108, 11, 'So easy!', 4, '2020-12-23 05:43:58', '2020-12-23 05:43:58'),
(31, 66, 11, 'Rẻ đó', 3, '2020-12-23 05:44:21', '2020-12-23 05:44:21'),
(32, 106, 11, 'Tím rù quyến', 4, '2020-12-23 05:44:40', '2020-12-23 05:44:40'),
(33, 61, 11, 'Ổn', 4, '2020-12-23 05:45:29', '2020-12-23 05:45:29'),
(34, 122, 11, 'giá rẻ', 4, '2020-12-23 05:46:37', '2020-12-23 05:46:37'),
(35, 161, 11, 'ít dùng', 2, '2020-12-23 05:47:02', '2020-12-23 05:47:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `users_id`, `name`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(4, 7432000, 10, 'Võ Thị Mỹ Loan', '0123456789', '5 YYY, Hòa Khánh Nam', 0, '2020-11-21 02:20:53', '2020-11-21 02:20:53'),
(5, 49422000, 10, 'Võ Thị Mỹ Loan', '0123456789', '5 YYY, Hòa Khánh Nam', 0, '2020-12-12 01:57:03', '2020-12-12 01:57:03'),
(6, 64286000, 10, 'Võ Thị Mỹ Loan', '0123456789', '5 YYY, Hòa Khánh Nam', 0, '2020-12-23 04:24:47', '2020-12-23 04:24:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avatar`, `status`, `created_at`, `update_at`) VALUES
(10, 'Võ Thị Mỹ Loan', 'myloan@gmail.com', '0123456789', '5 YYY, Hòa Khánh Nam', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, '2020-11-20 13:55:00', '2020-11-20 13:55:00'),
(11, 'Nguyễn Văn A', '12345@gmail.com', '0123459876', '12345 đường xx thành phố yy', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, '2020-12-23 05:15:05', '2020-12-23 05:15:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id2`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id2`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `rated`
--
ALTER TABLE `rated`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_users` (`id_users`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `phone`
--
ALTER TABLE `phone`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT cho bảng `rated`
--
ALTER TABLE `rated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`id`);

--
-- Các ràng buộc cho bảng `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `rated`
--
ALTER TABLE `rated`
  ADD CONSTRAINT `rated_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `rated_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
