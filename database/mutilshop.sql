-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2023 lúc 05:12 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mutilshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthdn`
--

CREATE TABLE `cthdn` (
  `MaCTHDN` int(11) NOT NULL,
  `MaHDN` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaSP` float NOT NULL,
  `GiaTT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthdx`
--

CREATE TABLE `cthdx` (
  `MaCTHDX` int(11) NOT NULL,
  `MaHDX` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaSP` float NOT NULL,
  `GiaTT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkm`
--

CREATE TABLE `ctkm` (
  `MaCTKM` int(11) NOT NULL,
  `MaKM` int(11) NOT NULL,
  `TTKM` text NOT NULL,
  `MaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctpdh`
--

CREATE TABLE `ctpdh` (
  `MaCTPDH` int(11) NOT NULL,
  `MaPDH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaSP` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctpdh`
--

INSERT INTO `ctpdh` (`MaCTPDH`, `MaPDH`, `MaSP`, `SoLuong`, `GiaSP`) VALUES
(15, 22, 35, 1, 13190000),
(16, 22, 51, 2, 4490000),
(17, 23, 35, 1, 13190000),
(18, 23, 51, 2, 4490000),
(19, 27, 43, 1, 33490000),
(20, 27, 49, 1, 9290000),
(21, 28, 46, 1, 16490000),
(22, 28, 35, 1, 13190000),
(23, 29, 43, 1, 33490000),
(24, 29, 52, 1, 18990000),
(25, 30, 49, 1, 9290000),
(26, 30, 47, 1, 40990000),
(27, 31, 49, 4, 9290000),
(28, 31, 43, 1, 33490000),
(29, 31, 44, 3, 25790000),
(30, 31, 48, 1, 25990000),
(31, 31, 35, 1, 13190000),
(32, 31, 50, 1, 22990000),
(33, 31, 45, 1, 27490000),
(34, 31, 46, 1, 16490000),
(35, 31, 47, 1, 40990000),
(36, 32, 43, 1, 33490000),
(37, 33, 44, 1, 25790000),
(38, 33, 43, 1, 33490000),
(39, 33, 47, 1, 40990000),
(40, 33, 35, 1, 13190000),
(41, 34, 44, 1, 25790000),
(42, 34, 43, 1, 33490000),
(43, 34, 47, 1, 40990000),
(44, 34, 35, 1, 13190000),
(45, 34, 49, 1, 9290000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmtt`
--

CREATE TABLE `dmtt` (
  `MaDMTT` int(11) NOT NULL,
  `TenDM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongia`
--

CREATE TABLE `dongia` (
  `MaDG` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `GiaNhap` decimal(10,0) NOT NULL,
  `GiaXuat` decimal(10,0) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dongia`
--

INSERT INTO `dongia` (`MaDG`, `MaSP`, `GiaNhap`, `GiaXuat`, `NgayBD`, `GhiChu`, `MaNV`) VALUES
(28, 35, '10000000', '13190000', '2023-12-30 01:00:00', '', 0),
(29, 43, '30000000', '33490000', '2023-12-30 01:00:00', '', 0),
(30, 44, '20000000', '25790000', '2023-12-30 01:00:00', '', 0),
(31, 45, '25000000', '27490000', '2023-12-30 01:00:00', '', 0),
(32, 46, '12000000', '16490000', '2023-12-30 01:10:00', '', 0),
(33, 47, '30000000', '40990000', '2023-12-30 01:00:00', '', 0),
(34, 48, '20000000', '25990000', '2023-12-30 01:00:00', '', 0),
(35, 49, '5000000', '9290000', '2023-12-30 01:00:00', '', 0),
(36, 50, '22000000', '22990000', '2023-12-30 01:00:00', '', 0),
(37, 51, '2000000', '4490000', '2023-12-30 01:00:00', '', 0),
(38, 52, '15000000', '18990000', '2023-12-30 01:00:00', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdn`
--

CREATE TABLE `hdn` (
  `MaHDN` int(11) NOT NULL,
  `MaNCC` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `TongGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdx`
--

CREATE TABLE `hdx` (
  `MaHDX` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `TongGia` float NOT NULL,
  `TTThanhToan` varchar(20) NOT NULL,
  `TTGiaoHang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MaAnh` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TenHinhAnh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`MaAnh`, `MaSP`, `TenHinhAnh`) VALUES
(36, 35, 'iphone-12-1-2.jpg'),
(37, 35, 'iphone-12-den-1-1-org.jpg'),
(38, 35, 'iphone-12-xanh-duong-1-1-org.jpg'),
(39, 35, 'iphone-12-do-1-1-org.jpg'),
(40, 35, 'iphone-12-xanh-la-1-1-org.jpg'),
(41, 35, 'iphone-12-trang-1-1-org.jpg'),
(62, 43, 'iphone-15-pro-max-blue-1-1.jpg'),
(63, 43, 'iphone-15-pro-max-tu-nhien-1-1.jpg'),
(64, 43, 'iphone-15-pro-max-white-1-3.jpg'),
(65, 43, 'iphone-15-pro-max-black-1-1.jpg'),
(66, 44, 'iphone-15-plus-128gb-hong-1.jpg'),
(67, 44, 'iphone-15-plus-128gb-hong-3.jpg'),
(68, 44, 'iphone-15-plus-2.jpg'),
(69, 45, 'iphone-14-pro-max-purple-1.jpg'),
(70, 45, 'iphone-14-pro-den-1-1.jpg'),
(71, 45, 'iphone-14-pro-max-vang-1.jpg'),
(72, 46, 'iphone-13-1-3.jpg'),
(73, 46, 'iphone-13-xanh-1.jpg'),
(74, 46, 'iphone-13-1-4.jpg'),
(75, 46, 'iphone-13-xanh-glr-1.jpg'),
(76, 46, 'iphone-13-1-2.jpg'),
(77, 47, 'samsung-galaxy-zfold5-kem-256gb-1-1.jpg'),
(78, 47, 'samsung-galaxy-zfold5-xanh-256gb-1-1.jpg'),
(79, 47, 'samsung-galaxy-zfold5-den-256gb-1.jpg'),
(80, 48, 'samsung-galaxy-s23-ultra-xanh-1.jpg'),
(81, 48, 'samsung-galaxy-s-ultra-tim-1.jpg'),
(82, 48, 'samsung-galaxy-s23-ultra-kem-1-1.jpg'),
(85, 48, 'samsung-galaxy-s23-ultra-1-2.jpg'),
(86, 49, 'samsung-galaxy-a54-tim-glr-1.jpg'),
(87, 49, 'samsung-galaxy-a54-tim-glr-2.jpg'),
(88, 49, 'samsung-galaxy-a54-tim-glr-3.jpg'),
(89, 49, 'samsung-galaxy-a54-5g-den-1-1.jpg'),
(90, 49, 'samsung-galaxy-a54-xanh-1.jpg'),
(91, 50, 'oppo-find-n3-flip-pink-1.jpg'),
(92, 50, 'oppo-find-n3-flip-pink-2.jpg'),
(93, 50, 'oppo-find-n3-flip-pink-5.jpg'),
(94, 51, 'oppo-a38-vang-1-2.jpg'),
(95, 51, 'oppo-a38-den-1-1.jpg'),
(96, 51, 'vi-vn-oppo-a38-slider-2.jpg'),
(97, 52, 'oppo-reno8-pro-black-1.jpg'),
(98, 52, 'oppo-reno8-pro-xanh-1.jpg'),
(101, 52, 'oppo-reno8-pro-xanh-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `MatKhau` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SDT`, `Email`, `DiaChi`, `MatKhau`) VALUES
(2, 'Chi Hưng', '0987654321', 'test1@gmail.com', 'Hồ Chí Minh, Quận 7', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(255) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `NgayKT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `NgayBD`, `NgayKT`) VALUES
(2, 'Mừng Noel', '2023-12-07 15:59:47', '2023-12-27 15:59:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ncc`
--

CREATE TABLE `ncc` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ncc`
--

INSERT INTO `ncc` (`MaNCC`, `TenNCC`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'ShopDunk', '0822688668', 'lienhe@shopdunk.com', 'Số 76 Thái Hà, phường Trung Liệt, quận Đống Đa, thành phố Hà Nội, Việt Nam'),
(2, 'Samsung Electronics Việt Nam', '+84-2839157310', 'samsung@gmail.com', 'Số 2, đường Hải Triều, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh'),
(3, 'Oppo Brand Store', '+842862711815', 'Oppo@gmail.com', 'Tầng 4, số 11 Sư Vạn Hạnh, P.12 Q.10, TPHCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `GioiTinh` varchar(5) NOT NULL,
  `NgaySinh` date NOT NULL,
  `TaiKhoan` varchar(20) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `NHOM` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `DiaChi`, `GioiTinh`, `NgaySinh`, `TaiKhoan`, `MatKhau`, `SDT`, `NHOM`) VALUES
(1, 'admin', '', 'nam', '2023-12-06', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pdh`
--

CREATE TABLE `pdh` (
  `MaPDH` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pdh`
--

INSERT INTO `pdh` (`MaPDH`, `MaKH`, `TongTien`) VALUES
(22, 2, 22190000),
(23, 2, 22190000),
(24, 2, 0),
(25, 2, 0),
(26, 2, 0),
(27, 2, 42800000),
(28, 2, 29700000),
(29, 2, 52500000),
(30, 2, 50300000),
(31, 2, 295250000),
(32, 2, 33500000),
(33, 2, 113500000),
(34, 2, 122800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `MaNCC` int(11) NOT NULL,
  `TGBH` varchar(50) NOT NULL,
  `TTBH` varchar(255) NOT NULL,
  `MaTH` int(11) NOT NULL,
  `MauSac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MoTa`, `MaNCC`, `TGBH`, `TTBH`, `MaTH`, `MauSac`) VALUES
(35, 'Điện thoại iPhone 12 64GB', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 1, '1 năm', 'Bảo hành chính hãng điện thoại tại các trung tâm bảo hành hãng', 1, 'Tím, Đen, Xanh dương, Đỏ, Xanh lá, Trắng'),
(43, 'Điện thoại iPhone 15 Pro Max 256GB', 'iPhone 15 Pro Max mẫu điện thoại mới nhất của Apple cuối cùng cũng đã chính thức được ra mắt vào tháng 09/2023. Mẫu điện thoại này sở hữu một con chip với hiệu năng mạnh mẽ Apple A17 Pro, màn hình đẹp mắt và cụm camera vô cùng chất lượng.', 1, '1 năm', 'Bảo hành chính hãng điện thoại tại các trung tâm bảo hành hãng', 1, 'Titan xanh, Titan tự nhiên, Titan trắng, Titan xanh'),
(44, 'Điện thoại iPhone 15 Plus 128GB', 'iPhone 15 Plus thu hút mọi ánh nhìn ngay khi ra mắt nhờ có vẻ ngoài cao cấp, trang bị bộ xử lý mạnh mẽ, cụm camera kép đặc trưng cho khả năng chụp ảnh cực nét cùng màn hình chất lượng cao, để bạn tận hưởng trải nghiệm sử dụng tuyệt vời. ', 1, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 1, 'Xanh dương nhạt, Đen, Hồng nhạt, Xanh lá nhạt, Hồng nhạt'),
(45, 'Điện thoại iPhone 14 Pro Max 128GB', 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.', 1, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 1, 'Tím, Đen, Vàng'),
(46, 'Điện thoại iPhone 13 128GB', 'Trong khi sức hút đến từ bộ 4 phiên bản iPhone 12 vẫn chưa nguội đi, thì hãng điện thoại Apple đã mang đến cho người dùng một siêu phẩm mới iPhone 13 với nhiều cải tiến thú vị sẽ mang lại những trải nghiệm hấp dẫn nhất cho người dùng.', 1, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 1, 'Hồng, Xanh dương, Trắng, Xanh lá, Đen'),
(47, 'Điện thoại Samsung Galaxy Z Fold5 5G 256GB', 'Samsung Galaxy Z Fold5 là mẫu điện thoại cao cấp được ra mắt vào tháng 07/2023 với nhiều điểm đáng chú ý như thiết kế gập độc đáo, hiệu năng mạnh mẽ nhờ chip Snapdragon 8 Gen 2 for Galaxy cùng camera quay chụp sắc nét.', 2, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 2, 'Kem, Xanh da trời nhạt, Đen'),
(48, 'Điện thoại Samsung Galaxy S23 Ultra 5G 256GB', 'Samsung Galaxy S23 Ultra 5G 256GB là chiếc smartphone cao cấp nhất của nhà Samsung, sở hữu cấu hình không tưởng với con chip khủng được Qualcomm tối ưu riêng cho dòng Galaxy và camera lên đến 200 MP, xứng danh là chiếc flagship Android được mong đợi nhất trong năm 2023.', 2, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 2, 'Xanh rêu, Tím nhạt, Kem, Đen'),
(49, 'Điện thoại Samsung Galaxy A54 5G 128GB', 'Samsung Galaxy A54 5G 128GB là mẫu điện thoại tầm trung hiện đang làm mưa làm gió tại thị trường Việt Nam khi sở hữu những thông số ấn tượng với chip hiệu năng cao, màn hình chất lượng đi cùng hệ thống camera xịn sò trong phân khúc.', 2, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 2, 'Tím, Đen, Xanh lá mạ'),
(50, 'Điện thoại OPPO Find N3 Flip 5G Hồng', 'OPPO Find N3 Flip 5G Hồng được OPPO cho ra mắt chính thức tại thị trường Việt Nam vào tháng 10/2023. Sản phẩm được hãng đầu tư mạnh mẽ về camera với độ phân giải lên đến 50 MP, cấu hình sử dụng chip Dimensity 9200 5G và thiết kế được thay đổi với bản lề gập mở tốt hơn cùng màu hồng sang trọng và nữ tính.', 3, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 3, 'Hồng, Đen + Vàng đồng'),
(51, 'Điện thoại OPPO A38', 'OPPO A38 mẫu điện thoại tầm trung mới nhất được OPPO mang đến cho người tiêu dùng vào nửa cuối năm 2023. Máy sở hữu lối thiết kế quen thuộc của dòng điện thoại OPPO A, đồng thời có một hiệu năng ổn định cùng màn hình hiển thị sắc nét chắc chắn sẽ không làm bạn thất vọng.', 3, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 3, 'Vàng đồng, Đen'),
(52, 'Điện thoại OPPO Reno8 Pro 5G', 'OPPO Reno8 Pro 5G là chiếc điện thoại cao cấp được nhà OPPO ra mắt vào thời điểm 09/2022, máy hướng đến sự hoàn thiện cao cấp ở phần thiết kế cùng khả năng quay chụp chuyên nghiệp nhờ trang bị vi xử lý hình ảnh MariSilicon X chuyên dụng.', 3, '1 năm', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng', 3, 'Đen, Xanh ngọc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaTH` int(11) NOT NULL,
  `TenTH` varchar(50) NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaTH`, `TenTH`, `GhiChu`) VALUES
(1, 'Iphone', NULL),
(2, 'SamSung', NULL),
(3, 'Oppo', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTT` int(11) NOT NULL,
  `MaDMTT` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL,
  `TacGia` varchar(50) NOT NULL,
  `NgayDang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tskt`
--

CREATE TABLE `tskt` (
  `MaTS` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TenTS` varchar(100) NOT NULL,
  `GiaTri` varchar(100) NOT NULL,
  `DonVi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tskt`
--

INSERT INTO `tskt` (`MaTS`, `MaSP`, `TenTS`, `GiaTri`, `DonVi`) VALUES
(1, 35, 'Công nghệ màn hình:', 'OLED', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttdn`
--

CREATE TABLE `ttdn` (
  `MaDN` int(11) NOT NULL,
  `TenDN` varchar(100) NOT NULL,
  `TTDN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthdn`
--
ALTER TABLE `cthdn`
  ADD PRIMARY KEY (`MaCTHDN`);

--
-- Chỉ mục cho bảng `cthdx`
--
ALTER TABLE `cthdx`
  ADD PRIMARY KEY (`MaCTHDX`);

--
-- Chỉ mục cho bảng `ctkm`
--
ALTER TABLE `ctkm`
  ADD PRIMARY KEY (`MaCTKM`),
  ADD KEY `FK_KM_CT` (`MaKM`),
  ADD KEY `FK_CTKM_SP` (`MaSP`);

--
-- Chỉ mục cho bảng `ctpdh`
--
ALTER TABLE `ctpdh`
  ADD PRIMARY KEY (`MaCTPDH`),
  ADD KEY `FK_CTPDH_SP` (`MaSP`),
  ADD KEY `FK_CTPDH_PDH` (`MaPDH`);

--
-- Chỉ mục cho bảng `dmtt`
--
ALTER TABLE `dmtt`
  ADD PRIMARY KEY (`MaDMTT`);

--
-- Chỉ mục cho bảng `dongia`
--
ALTER TABLE `dongia`
  ADD PRIMARY KEY (`MaDG`),
  ADD KEY `FK_DG_SP` (`MaSP`);

--
-- Chỉ mục cho bảng `hdn`
--
ALTER TABLE `hdn`
  ADD PRIMARY KEY (`MaHDN`);

--
-- Chỉ mục cho bảng `hdx`
--
ALTER TABLE `hdx`
  ADD PRIMARY KEY (`MaHDX`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `FK_IMG_SP` (`MaSP`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Chỉ mục cho bảng `ncc`
--
ALTER TABLE `ncc`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `pdh`
--
ALTER TABLE `pdh`
  ADD PRIMARY KEY (`MaPDH`),
  ADD KEY `FK_PDH_KH` (`MaKH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `FK_SP_NCC` (`MaNCC`),
  ADD KEY `FK_SP_TH` (`MaTH`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaTH`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTT`);

--
-- Chỉ mục cho bảng `tskt`
--
ALTER TABLE `tskt`
  ADD PRIMARY KEY (`MaTS`),
  ADD KEY `FK_TSKT_SP` (`MaSP`);

--
-- Chỉ mục cho bảng `ttdn`
--
ALTER TABLE `ttdn`
  ADD PRIMARY KEY (`MaDN`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cthdn`
--
ALTER TABLE `cthdn`
  MODIFY `MaCTHDN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cthdx`
--
ALTER TABLE `cthdx`
  MODIFY `MaCTHDX` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ctkm`
--
ALTER TABLE `ctkm`
  MODIFY `MaCTKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ctpdh`
--
ALTER TABLE `ctpdh`
  MODIFY `MaCTPDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `dmtt`
--
ALTER TABLE `dmtt`
  MODIFY `MaDMTT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dongia`
--
ALTER TABLE `dongia`
  MODIFY `MaDG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `hdn`
--
ALTER TABLE `hdn`
  MODIFY `MaHDN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hdx`
--
ALTER TABLE `hdx`
  MODIFY `MaHDX` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ncc`
--
ALTER TABLE `ncc`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `pdh`
--
ALTER TABLE `pdh`
  MODIFY `MaPDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `MaTH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tskt`
--
ALTER TABLE `tskt`
  MODIFY `MaTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ttdn`
--
ALTER TABLE `ttdn`
  MODIFY `MaDN` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctkm`
--
ALTER TABLE `ctkm`
  ADD CONSTRAINT `FK_CTKM_SP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KM_CT` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`);

--
-- Các ràng buộc cho bảng `ctpdh`
--
ALTER TABLE `ctpdh`
  ADD CONSTRAINT `FK_CTPDH_PDH` FOREIGN KEY (`MaPDH`) REFERENCES `pdh` (`MaPDH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTPDH_SP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dongia`
--
ALTER TABLE `dongia`
  ADD CONSTRAINT `FK_DG_SP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `FK_IMG_SP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `pdh`
--
ALTER TABLE `pdh`
  ADD CONSTRAINT `FK_PDH_KH` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SP_NCC` FOREIGN KEY (`MaNCC`) REFERENCES `ncc` (`MaNCC`),
  ADD CONSTRAINT `FK_SP_TH` FOREIGN KEY (`MaTH`) REFERENCES `thuonghieu` (`MaTH`);

--
-- Các ràng buộc cho bảng `tskt`
--
ALTER TABLE `tskt`
  ADD CONSTRAINT `FK_TSKT_SP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
