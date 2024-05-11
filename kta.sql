-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2024 at 11:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bientheimg`
--

CREATE TABLE `bientheimg` (
  `id_img` int NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idsanpham` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bientheimg`
--

INSERT INTO `bientheimg` (`id_img`, `hinhanh`, `idsanpham`) VALUES
(7, 'sp_nhanvang_01.png', 94),
(8, 'bt_nhanvang_01_01.png', 94),
(9, 'bt_nhanvang_01_02.png', 94),
(10, 'sp_nhanvang_02.png', 93),
(11, 'bt_nhanvang_02_01.png', 93),
(12, 'bt_nhanvang_02_02.png', 93),
(13, 'sp_nhanvang_03.png', 95),
(14, 'bt_nhanvang_03_01.png', 95),
(15, 'bt_nhanvang_03_02.png', 95),
(16, 'sp_nhanvang_04.png', 96),
(17, 'bt_nhanvang_04_01.png', 96),
(18, 'bt_nhanvang_04_02.png', 96),
(19, 'sp_nhanvang_05.png', 97),
(20, 'bt_nhanvang_05_01.png', 97),
(21, 'bt_nhanvang_05_02.png', 97),
(22, 'sp_nhanvang_06.png', 98),
(23, 'bt_nhanvang_06_01.png', 98),
(24, 'bt_nhanvang_06_02.png', 98),
(25, 'sp_nhanvang_07.png', 100),
(26, 'bt_nhanvang_07_01.png', 100),
(27, 'bt_nhanvang_07_02.png', 100),
(28, 'sp_nhanvang_08.png', 99),
(29, 'bt_nhanvang_08_01.png', 99),
(30, 'bt_nhanvang_08_02.png', 99),
(54, 'sp_daychuyen_01.png', 101),
(55, 'bt_daychuyen_01_01.png', 101),
(56, 'bt_daychuyen_01_02.png', 101),
(57, 'sp_daychuyen_02.png', 102),
(58, 'bt_daychuyen_02_01.png', 102),
(59, 'bt_daychuyen_02_02.png', 102),
(60, 'sp_daychuyen_03.png', 103),
(61, 'bt_daychuyen_03_01.png', 103),
(62, 'bt_daychuyen_03_02.png', 103),
(63, 'sp_daychuyen_04.png', 104),
(64, 'bt_daychuyen_04_01.png', 104),
(65, 'bt_daychuyen_04_02.png', 104),
(66, 'sp_daychuyen_05.png', 105),
(67, 'bt_daychuyen_05_01.png', 105),
(68, 'bt_daychuyen_05_02.png', 105),
(69, 'sp_daychuyen_06.png', 106),
(70, 'bt_daychuyen_06_01.png', 106),
(71, 'bt_daychuyen_06_02.png', 106),
(72, 'sp_daychuyen_07.png', 107),
(73, 'bt_daychuyen_07_01.png', 107),
(74, 'bt_daychuyen_07_02.png', 107),
(75, 'sp_daychuyen_08.png', 108),
(76, 'bt_daychuyen_08_01.png', 108),
(77, 'sp_bongtai_01.png', 109),
(78, 'bt_bongtai_01_01.png', 109),
(79, 'sp_bongtai_02.png', 110),
(80, 'bt_bongtai_02_01.png', 110),
(81, 'sp_bongtai_03.png', 111),
(82, 'bt_bongtai_03_01.png', 111),
(83, 'sp_bongtai_04.png', 112),
(84, 'bt_bongtai_04_01.png', 112),
(85, 'sp_bongtai_05.png', 113),
(86, 'bt_bongtai_05_01.png', 113),
(87, 'sp_bongtai_06.png', 114),
(88, 'bt_bongtai_06_01.png', 114),
(89, 'sp_bongtai_07.png', 115),
(90, 'bt_bongtai_07_01.png', 115),
(91, 'sp_bongtai_08.png', 116),
(92, 'bt_bongtai_08_01.png', 116),
(93, 'bt_bongtai_08_02.png', 116),
(94, 'sp_trangsucbac_01.png', 117),
(95, 'bt_trangsucbac_01_01.png', 117),
(96, 'bt_trangsucbac_01_02.png', 117),
(97, 'sp_trangsucbac_02.png', 118),
(98, 'bt_trangsucbac_02_01.png', 118),
(99, 'bt_trangsucbac_02_02.png', 118),
(100, 'sp_trangsucbac_03.png', 119),
(101, 'bt_trangsucbac_03_01.png', 119),
(102, 'bt_trangsucbac_03_02.png', 119),
(103, 'bt_trangsucbac_03_03.png', 119),
(104, 'sp_trangsucbac_04.png', 120),
(105, 'bt_trangsucbac_04_01.png', 120),
(106, 'sp_trangsucbac_05.png', 121),
(107, 'bt_trangsucbac_05_01.png', 121),
(138, 'sp_atsvang_01.png', 122),
(139, 'bt_atsvang_01_01.png', 122),
(140, 'sp_atsvang_02.png', 123),
(141, 'bt_atsvang_02_01.png', 123),
(142, 'bt_atsvang_02_02.png', 123),
(143, 'sp_atsvang_03.png', 124),
(144, 'bt_atsvang_03_01.png', 124),
(145, 'bt_atsvang_03_02.png', 124),
(146, 'sp_atsvang_04.png', 125),
(147, 'bt_atsvang_04_01.png', 125),
(148, 'bt_atsvang_04_02.png', 125),
(149, 'bt_atsvang_04_03.png', 125),
(150, 'sp_atsvang_05.png', 126),
(151, 'bt_atsvang_05_01.png', 126);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int NOT NULL,
  `SanPham_id` int NOT NULL,
  `NguoiDung_id` int NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TinhTrang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngoisao` tinyint(1) NOT NULL DEFAULT '5',
  `soluonglike` int DEFAULT '0',
  `soluongdislike` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `SanPham_id`, `NguoiDung_id`, `NoiDung`, `TinhTrang`, `time`, `ngoisao`, `soluonglike`, `soluongdislike`) VALUES
(85, 109, 3, 'này ok nha', NULL, '2024-04-04 02:55:55', 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int NOT NULL,
  `BlogTitle` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `BlogContent` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `BlogImage` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `BlogTitle`, `BlogContent`, `BlogImage`) VALUES
(8, 'Bộ sưu tập hình ảnh nhẫn cưới đẹp nhất', 'Nhẫn cưới là biểu tượng thiêng liêng không thể thiếu trong lễ cưới. Dù được chế tác từ nhiều chất liệu khác nhau như vàng, vàng trắng, platinum, kim cương... nhưng ý nghĩa cao quý của chiếc nhẫn cưới vẫn luôn được giữ nguyên. Khám phá ngay bộ sưu tập hình ảnh nhẫn cưới tuyệt đẹp dưới đây.<br>\r\nNhẫn cưới, vòng tròn không đầu không đuôi, là biểu tượng của tình yêu vĩnh cửu. Đeo nhẫn cưới là cách thể hiện ý thức về tình yêu và trách nhiệm với đối phương đã được chọn. Một minh chứng cho sự cam kết với mối quan hệ.<br>\r\nHình ảnh đẹp của đôi nhẫn cưới', 'blog1.jpg'),
(9, 'mặt dây chuyền nữ đẹp xinh cao cấp tinh tế', 'Việc lựa chọn trang sức luôn là yếu tố quan trọng giúp bạn thể hiện một phần nào tính cách của bản thân. Cùng tìm hiểu tất tần tật các tiêu chí để lựa chọn một sợi dây chuyền nữ sao cho phù hợp với bạn nhất ngay sau đây.<br>\r\nChọn chiều dài sợi dây chuyền phù hợp cũng có thể tôn vinh lên chiều cao của bạn.<br>\r\nNếu chiều cao của bạn dưới 1m60 mách nhỏ bạn nên chọn chiều dài dây chuyền ở giữa ngực ngay phần cổ chữ V sẽ hack bạn thêm cao hơn.<br>\r\nVới chiều cao trên 1m60 bạn có thể thoải mái lựa chọn dây chuyền theo kiểu dáng bạn muốn.', 'blog2.jpg'),
(10, 'mẫu khuyên tai đẹp dành cho bé gái', 'Làm đẹp cho bé yêu bằng những chiếc khuyên tai xinh từ lâu đã trở thành niềm yêu thích của các mẹ. Bởi vậy mà từ khi còn bé, nhiều ba mẹ đã cho bé đi bấm khuyên tai và lựa chọn các mẫu bông thật xinh cho bé.<br>\r\nThông thường hầu hết ba mẹ đều chọn bạc hoặc vàng để làm khuyên tai cho bé bởi tính kháng khuẩn cao, dễ đeo và tránh cho vết thương của bé bị nhiễm trùng. <br>\r\nTrong bài viết ngày hôm nay, Bạc Nhỏ sẽ giới thiệu đến ba mẹ các mẫu khuyên tai cho bé bằng bạc ta nguyên chất, ba mẹ hãy theo dõi đến cuối bài nhé!', 'blog3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int NOT NULL,
  `TenDanhMuc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `HinhAnh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `MaDanhMuc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `MoTa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `TenDanhMuc`, `HinhAnh`, `MaDanhMuc`, `MoTa`) VALUES
(1, 'Nhẫn Vàng', 'danhmuc1.png', '01', ''),
(2, 'Dây Chuyền', 'loai12.png', '02', ''),
(3, 'Bông Tai', 'loai14.png', '03', ''),
(4, 'Trang Sức Bạc', 'danhmuc4.png', '04', ''),
(5, 'Trang Sức Vàng', 'danhmuc5.png', '05', ''),
(76, '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int NOT NULL,
  `ma_donhang` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `thongtin_cacsanpham` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tong_tien` int NOT NULL,
  `trang_thai` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'đã lên đơn',
  `ghi_chu_donhang` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `yeu_cau_huy_donhang` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `manguoidung` int DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `number_phone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dia_chi` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phuong_thuc_thanh_toan` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `ma_donhang`, `thongtin_cacsanpham`, `tong_tien`, `trang_thai`, `ghi_chu_donhang`, `yeu_cau_huy_donhang`, `manguoidung`, `ngay_tao`, `email`, `number_phone`, `ho_ten`, `dia_chi`, `phuong_thuc_thanh_toan`) VALUES
(189, '5631279', '\"95 - sp_nhanvang_03.png - Nhẫn Vàng 18K đính đá CZ PNJ XMXMY005215 - inox - 12 - 1 - 7675000\" ', 7675000, 'đã lên đơn', '', '', NULL, '2024-04-09 23:04:40', 'nguyenphuocvinh051204@gmail.com', '2154846', 'vinh', 'lan nua nha', 'Ví Momo');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int NOT NULL,
  `SanPham_id` int NOT NULL,
  `NguoiDung_id` int NOT NULL,
  `SoLuong` int NOT NULL,
  `kichthuoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chatlieu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Tong` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `StatusBuy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `SanPham_id`, `NguoiDung_id`, `SoLuong`, `kichthuoc`, `chatlieu`, `Tong`, `StatusBuy`, `Ngay`) VALUES
(112, 93, 36, 2, '12', 'inox', '26586000', '0', '2024-04-10'),
(113, 100, 36, 1, '14', 'thao', '13791000', '0', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id_ma_giam_gia` int NOT NULL,
  `ten_ma_giam` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `loai_ma` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `gia_tri` int NOT NULL,
  `so_luong` int DEFAULT NULL,
  `trang_thai` tinyint NOT NULL DEFAULT '0',
  `ngay_bat_dau` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ngay_ket_thuc` timestamp NULL DEFAULT NULL,
  `codegiamgia` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`id_ma_giam_gia`, `ten_ma_giam`, `loai_ma`, `gia_tri`, `so_luong`, `trang_thai`, `ngay_bat_dau`, `ngay_ket_thuc`, `codegiamgia`) VALUES
(1, 'Giảm 7%, giảm tối đa 20k', 'Trực tiếp', 700000, 1, 0, '2024-04-09 18:28:58', NULL, 'giam20k'),
(2, 'Giảm 15%, giảm tối đa 100k cho đơn hàng trên 1000k', ' online', 100, 1, 0, '2024-03-23 12:29:11', NULL, ''),
(3, 'Giảm 20%, giảm tối đa 500k cho đơn hàng trên 5000k', 'online', 500, 1, 0, '2024-03-23 11:55:50', NULL, ''),
(4, 'Giảm 100k, kh đơn hàng từ 1500k', ' Trực tiếp', 100, 1, 0, '2024-03-23 12:29:21', NULL, ''),
(5, 'Giảm 200k cho đơn hàng từ 2500k', ' online', 200, NULL, 0, '2024-03-23 11:55:50', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nguoidung` int NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `MatKhau` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `VaiTro` tinyint(1) NOT NULL DEFAULT '0',
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `HinhAnh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `MobileNumber` int DEFAULT NULL,
  `NgayTao` date NOT NULL,
  `token` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id_nguoidung`, `HoTen`, `FirstName`, `LastName`, `Email`, `UserName`, `MatKhau`, `VaiTro`, `Status`, `HinhAnh`, `MobileNumber`, `NgayTao`, `token`) VALUES
(1, 'Phương Thái', 'Phương', 'Thái', 'thaip@gmail.com', 'thaiphuong123', '12345', 0, 0, NULL, NULL, '0000-00-00', NULL),
(2, 'Phước Vinh', 'Phước', 'Vinh', 'VinhNguyen@gmail.com', 'VinhNguyen123', '12345', 0, 0, NULL, NULL, '0000-00-00', NULL),
(3, 'Đức Phú', 'Đức ', 'Phú', 'PuuuGo@gmail.com', 'PuuGo123', '12345', 1, 0, NULL, NULL, '0000-00-00', NULL),
(4, 'Anh Thư', 'Anh ', 'Thư', 'anhthu@gmail.com', 'anhthu123', '12345', 0, 0, NULL, NULL, '0000-00-00', NULL),
(36, NULL, 'individual', 'anh mai', 'nguyenphuocvinh051204@gmail.com', 'vinh', '1', 0, 0, NULL, 2154846, '2024-03-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int NOT NULL,
  `TenSanPham` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `MoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `HinhAnh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Gia` int NOT NULL,
  `LoaiGiamGia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SubCategory` int NOT NULL,
  `thue` int DEFAULT NULL,
  `MinQty` int NOT NULL,
  `Qty` int NOT NULL,
  `Status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NoiBat` tinyint(1) NOT NULL DEFAULT '0',
  `NgayThem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MaDanhMuc` int NOT NULL,
  `Unit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `luot_xem` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `TenSanPham`, `MoTa`, `HinhAnh`, `Gia`, `LoaiGiamGia`, `SubCategory`, `thue`, `MinQty`, `Qty`, `Status`, `NoiBat`, `NgayThem`, `MaDanhMuc`, `Unit`, `luot_xem`) VALUES
(93, 'Nhẫn Vàng 18K đính đá Ruby PNJ RBXMY001022', 'Được chế tác từ vàng 18K cùng vẻ đẹp huyền bí của viên đá Ruby, PNJ mang đến sản phẩm nhẫn sang trọng và quyến rũ dành cho phái nữ. Đá Ruby sở hữu vẻ quyến rũ, khi được cộng hưởng ánh sắc của dãy đá trắng lấp lánh.', 'sp_nhanvang_02.png', 13293000, NULL, 1, NULL, 1, 5, 'còn hàng', 0, '2024-04-09 21:51:16', 1, NULL, 49),
(94, 'Nhẫn Vàng 18K đính đá Citrine PNJ CTXMY000460', 'Nổi bật với sắc vàng cam nóng bỏng, đá Citrine luôn mang vẻ đẹp rạng rỡ và tỏa sáng khi đeo trên người. Chiếc nhẫn được chế tác từ vàng 18K cùng đá Citrine, mang đến món trang sức sang trọng và quý phái cho quý cô.', 'sp_nhanvang_01.png', 13411000, NULL, 1, NULL, 1, 10, 'còn hàng', 1, '2024-04-09 21:46:56', 1, NULL, 24),
(95, 'Nhẫn Vàng 18K đính đá CZ PNJ XMXMY005215', 'Dù ở lứa tuổi nào, theo phong cách cổ điển hay hiện đại thì sắc màu của những viên đá CZ màu trắng vẫn luôn biết \"chiều lòng\" các tín đồ thời trang. Mô phỏng nét kiêu sa của nàng, chiếc nhẫn vàng mới của PNJ nhẹ nhàng kết đính những viên đá trắng tròn trịa trên chất vàng 18K.', 'sp_nhanvang_03.png', 7675000, NULL, 1, NULL, 1, 10, 'còn hàng', 0, '2024-04-09 23:04:25', 1, NULL, 17),
(96, 'Nhẫn Vàng 18k đính đá Ruby PNJ RBXMY000994', 'Được chế tác từ vàng 18K cùng vẻ đẹp huyền bí của viên đá Ruby, PNJ mang đến sản phẩm nhẫn sang trọng và quyến rũ dành cho phái nữ. Đá Ruby sở hữu vẻ quyến rũ, khi được cộng hưởng ánh sắc của dãy đá trắng lấp lánh, hài hòa theo từng đường nét thiết kế đã tạo nên một món trang sức đẹp mê hồn.', 'sp_nhanvang_04.png', 14253000, NULL, 1, NULL, 1, 10, 'còn hàng', 0, '2024-04-09 21:05:34', 1, NULL, 3),
(97, 'Nhẫn Vàng 18K đính đá Citrine PNJ CTXMY000430', 'Nổi bật với sắc vàng cam nóng bỏng, đá Citrine luôn mang vẻ đẹp rạng rỡ và tỏa sáng khi đeo trên người. Chiếc nhẫn được chế tác từ vàng 18K cùng đá Citrine, mang đến món trang sức sang trọng và quý phái cho quý cô.', 'sp_nhanvang_05.png', 10467000, NULL, 1, NULL, 1, 10, 'còn hàng', 0, '2024-04-09 21:06:00', 1, NULL, 10),
(98, 'Nhẫn Vàng 10K STYLE By PNJ 0000Y001408', 'Không sở hữu các chi tiết đính đá rực rỡ nhưng lại khoác lên mình thiết kế độc đáo với những đường nét sáng tạo, chiếc nhẫn STYLE By PNJ sẽ cùng nàng biến hóa đầy cá tính cùng chất riêng của mình.', 'sp_nhanvang_06.png', 5330000, NULL, 1, NULL, 1, 10, 'còn hàng', 0, '2024-04-09 21:02:39', 1, NULL, 17),
(99, 'Nhẫn Vàng 18K đính đá Citrine PNJ CTXMY000192', 'Nổi bật với sắc vàng cam nóng bỏng, đá Citrine luôn mang vẻ đẹp rạng rỡ và tỏa sáng khi đeo trên người. Chiếc nhẫn được chế tác từ vàng 18K cùng đá Citrine, mang đến món trang sức sang trọng và quý phái cho quý cô.', 'sp_nhanvang_08.png', 7559000, NULL, 1, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 22:52:21', 1, NULL, 0),
(100, 'Nhẫn Vàng 18K đính đá Citrine PNJ CTXMY000425', 'Nổi bật với sắc vàng cam nóng bỏng, đá Citrine luôn mang vẻ đẹp rạng rỡ và tỏa sáng khi đeo trên người. Chiếc nhẫn được chế tác từ vàng 18K cùng đá Citrine, mang đến món trang sức sang trọng và quý phái cho quý cô.', 'sp_nhanvang_07.png', 13791000, NULL, 1, NULL, 1, 10, 'còn hàng', 0, '2024-04-09 21:57:14', 1, NULL, 2),
(101, 'Mặt dây chuyền Vàng 18K đính đá Citrine PNJ CTXMY000300', 'Từ sự kết hợp hoàn hảo giữa ánh kim rực rỡ của vàng 18K cùng sắc vàng cam của đá Citrine được đội ngũ thợ kim hoàn đính một cách tinh tế, PNJ tự hào mang đến chiếc mặt dây chuyền sang trọng đầy nóng bỏng.', 'sp_daychuyen_01.png', 7734000, NULL, 2, NULL, 1, 10, 'còn hàng', 1, '2024-04-05 16:55:28', 2, NULL, 0),
(102, 'Mặt dây chuyền vàng 18K đính đá CZ PNJ XMXMY001906', 'Vẻ đẹp nàng tựa đóa hoa, có khi thuần khiết, có khi quyến rũ nhưng lại chẳng thể nào quên giống như thiết kế mặt dây chuyền CZ từ PNJ. Chất liệu vàng 18K chuẩn mực, đá CZ trắng hiện đại kết hợp với những đường cong duyên dáng tạo nên một tổng thể sắc sảo mà mềm mại, tựa như những đoá hoa xuân.', 'sp_daychuyen_02.png', 4480000, NULL, 2, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 23:36:42', 2, NULL, 2),
(103, 'Mặt dây chuyền Vàng 18K đính đá CZ PNJ XMXMY000392', 'Vẻ đẹp nàng tựa đóa hoa, có khi thuần khiết, có khi quyến rũ nhưng lại chẳng thể nào quên giống như thiết kế mặt dây chuyền CZ từ PNJ. Chất liệu vàng 18K chuẩn mực, đá CZ trắng hiện đại kết hợp với những đường cong duyên dáng tạo nên một tổng thể sắc sảo mà mềm mại, tựa như những đoá hoa xuân.', 'sp_daychuyen_03.png', 4152000, NULL, 2, NULL, 1, 10, 'còn hàng', 0, '2024-04-05 21:09:16', 2, NULL, 2),
(104, 'Mặt dây chuyền Vàng 18K đính đá CZ PNJ XMXMY005537', 'Vẻ đẹp nàng tựa đóa hoa, có khi thuần khiết, có khi quyến rũ nhưng lại chẳng thể nào quên giống như thiết kế mặt dây chuyền vàng CZ từ PNJ. Chất liệu vàng 18K chuẩn mực, đá CZ trắng hiện đại kết hợp với những đường cong duyên dáng tạo nên một tổng thể sắc sảo mà mềm mại, tựa như những đoá hoa xuân.', 'sp_daychuyen_04.png', 10927000, NULL, 2, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 23:15:25', 2, NULL, 0),
(105, 'Mặt dây chuyền Kim cương Vàng trắng 14K PNJ DDDDW001102', 'PNJ xin giới thiệu một món trang sức đặc biệt, giúp nàng thu hút mọi sự chú ý xung quanh với chiếc mặt dây chuyền sở hữu chi tiết Kim cương đính một cách tỉ mỉ trên chất liệu vàng 14K.', 'sp_daychuyen_05.png', 9112000, NULL, 2, NULL, 1, 10, 'còn hàng', 1, '2024-04-06 18:13:47', 2, NULL, 1),
(106, 'Mặt dây chuyền Vàng 18K đính đá CZ PNJ hình thoi XMXMY000339', 'Vẻ đẹp nàng tựa đóa hoa, có khi thuần khiết, có khi quyến rũ nhưng lại chẳng thể nào quên giống như thiết kế mặt dây chuyền vàng CZ từ PNJ. Chất liệu vàng 18K chuẩn mực, đá CZ trắng hiện đại kết hợp với những đường cong duyên dáng tạo nên một tổng thể sắc sảo mà mềm mại, tựa như những đoá hoa xuân.', 'sp_daychuyen_06.png', 4996000, NULL, 2, NULL, 1, 10, 'còn hàng', 0, '2024-04-05 21:09:39', 2, NULL, 2),
(107, 'Mặt dây chuyền Vàng 24K PNJ 0000Y000757', 'Chiếc mặt dây chuyền PNJ sở hữu sự cứng cáp của vàng 24K được chế tác tinh xảo, tạo nên sự độc đáo và sang trọng. Từng đường viền mềm mại được chế tác sinh động, kết hợp chất liệu vàng 24K, tất cả đã mang đến mặt dây chuyền nổi bật với vẻ đẹp tinh tế.', 'sp_daychuyen_07.png', 3536000, NULL, 2, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 23:36:59', 2, NULL, 2),
(108, 'Mặt dây chuyền Vàng 18K đính đá CZ PNJ XMXMY000395', 'Vẻ đẹp nàng tựa đóa hoa, có khi thuần khiết, có khi quyến rũ nhưng lại chẳng thể nào quên giống như thiết kế mặt dây chuyền vàng CZ từ PNJ. Chất liệu vàng 18K chuẩn mực, đá CZ trắng hiện đại kết hợp với những đường cong duyên dáng tạo nên một tổng thể sắc sảo mà mềm mại, tựa như những đoá hoa xuân.', 'sp_daychuyen_08.png', 6369000, NULL, 2, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 23:35:08', 2, NULL, 1),
(109, 'Bông tai Vàng 18K đính đá CZ PNJ XMXMY000143', 'Long lanh, kiêu sa tựa như những đóa hoa ban nở giữa rừng, thiết kế bông tai của PNJ được tạo nên giữa sự kết hợp của vàng 18K cùng đá CZ lấp lánh. Từng đường viền mềm mại được chế tác sinh động, kết hợp những viên đá CZ tròn nhỏ, tất cả đã mang đến đôi bông tai nổi bật với vẻ đẹp tinh tế.', 'sp_bongtai_01.png', 6940000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-06 18:25:43', 3, NULL, 14),
(110, 'Bông tai vàng 18K đính đá CZ PNJ XMXMY000150', 'Long lanh, kiêu sa tựa như những đóa hoa ban nở giữa rừng, thiết kế bông tai của PNJ được tạo nên giữa sự kết hợp của vàng 18K cùng đá CZ lấp lánh. Từng đường viền mềm mại được chế tác sinh động, kết hợp những viên đá CZ tròn nhỏ, tất cả đã mang đến đôi bông tai nổi bật với vẻ đẹp tinh tế.', 'sp_bongtai_02.png', 7104000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-05 16:28:31', 3, NULL, 3),
(111, 'Bông tai Kim cương Vàng trắng 14K PNJ DDDDW001704', 'Đôi bông tai được chế tác từ vàng 14K và sở hữu kiểu dáng nhỏ xinh, phù hợp với những quý cô ưa chuộng phong cách sang trọng. Đặc biệt hơn nữa, đôi bông tai sở hữu điểm nhấn Kim cương tạo nên vẻ đẹp tinh tế, tôn lên vẻ đẹp dịu dàng, quý phái cho người đeo.', 'sp_bongtai_03.png', 17635000, NULL, 3, NULL, 1, 10, 'còn hàng', 1, '2024-04-06 18:25:34', 3, NULL, 2),
(112, 'Bông tai Kim cương Vàng Trắng 14K Disney|PNJ Rapunzel DD00W001672', 'Đôi bông tai được chế tác từ vàng 14K và sở hữu kiểu dáng nhỏ xinh, phù hợp với những quý cô ưa chuộng phong cách sang trọng. Đặc biệt hơn nữa, đôi bông tai sở hữu điểm nhấn Kim cương tạo nên vẻ đẹp tinh tế, tôn lên vẻ đẹp dịu dàng, quý phái cho người đeo.', 'sp_bongtai_04.png', 12709000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-05 16:28:45', 3, NULL, 1),
(113, 'Bông tai bạc đính đá PNJSilver XMXMW060039', 'Sở hữu thiết kế thời thượng cùng các sắc đá kiêu sa, PNJSilver tự hào mang đến đôi bông tai với vẻ đẹp dịu dàng nhưng không kém phần cá tính. Bên cạnh đó, sản phẩm còn được chế tác từ chất liệu bạc cao cấp nên đôi bông tai luôn sở hữu độ bền đẹp theo thời gian.', 'sp_bongtai_05.png', 795000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 23:51:59', 3, NULL, 0),
(114, 'Bông tai Vàng 14K đính ngọc trai Akoya PNJ PAXMH000006', 'Sở hữu sắc óng ánh xà cừ toát ra của viên ngọc trai Akoya đến từ biển cả cùng sắc trắng lấp lánh của những viên đá nhỏ xinh, đôi bông tai mang vẻ đẹp mặn mà và kiêu sa. Thiết kế nữ tính với kiểu dáng mềm mại, điểm xuyết ngọc trai tinh khôi, đôi bông tai PNJ xứng đáng là “trợ thủ” nhân đôi sự thanh lịch cho nhan sắc của nàng giữa những ngày thu thơ mộng!', 'sp_bongtai_06.png', 10878000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-05 16:28:38', 3, NULL, 2),
(115, 'Bông tai Vàng 18K PNJ Trịnh Collection 0000Y002375', 'Mô phỏng nét hoàn mỹ đậm chất Á đông của người phụ nữ, PNJ đặt trọn tâm huyết và tình cảm vào từng chi tiết trên đôi bông tai mới. PNJ cho ra đời thiết kế đôi bông tai tinh tế, là sự phối trộn hài hoà giữa kiểu dáng và chất liệu vàng 18K chuẩn mực.', 'sp_bongtai_07.png', 4388000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-05 16:30:53', 3, NULL, 2),
(116, 'Bông tai Vàng 18K đính đá Sapphire PNJ SPMXY000003', 'Dù ở lứa tuổi nào, theo phong cách cổ điển hay hiện đại thì sắc màu của trang sức sapphire vẫn luôn biết \"chiều lòng\" các tín đồ thời trang. Đôi bông tai sở hữu sức hút riêng, được kết tạo duyên dáng từ vàng 18K cùng điểm nhấn sapphire cắt mài tỉ mỉ, tạo nên vẻ đẹp quý phái độc đáo, lấp lánh chinh phục mọi ánh nhìn.', 'sp_bongtai_08.png', 12711000, NULL, 3, NULL, 1, 10, 'còn hàng', 0, '2024-04-02 23:57:23', 3, NULL, 1),
(117, 'Bông tai bạc PNJSilver Boho Dream 0000K000088', 'Bông tai là trang sức không thể thiếu đối với phái đẹp, đặc biệt là những cô nàng yêu thời trang. Với bông tai bạc PNJSilver lấy cảm hứng từ phong cách Boho - thể hiện sự tự do, phóng khoáng, được thỏa sức ước vọng và được khẳng định phong cách của chính mình, bạn sẽ càng có thêm nhiều ý tưởng trong cách mix&match trang phục và giúp cho BST trang sức nàng thêm phong phú.', 'sp_trangsucbac_01.png', 385000, NULL, 4, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:18:20', 4, NULL, 2),
(118, 'Nhẫn bạc PNJSilver Boho Dream 0000K000068', 'Sự phóng khoáng có phần \"hoang dã\", yêu tự do và không thích sự ràng buộc nào chính là nét đặc trưng của Bohemian, hay còn gọi là Boho.Trái ngược với những định kiến về màu sắc rực rỡ lòe loẹt, kiểu dáng hoang dã… của xu hướng Bohemian. Thương hiệu trang sức PNJSilver thật sự đã có một sự đột phá thành công, những phụ kiện trang sức Bohemian sẽ giảm thiểu tính hoang dại, cầu kỳ nhưng lại cường độ lãng mạn bay bổng. Mang lại những thiết kế tinh tế và duyên dáng cho phái đẹp.', 'sp_trangsucbac_02.png', 347000, NULL, 4, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:15:31', 4, NULL, 1),
(119, 'Bộ trang sức bạc PNJSilver Boho Dream 00088-00049', 'Nhắc đến Boho là nhắc đến ngẫu hứng trong cách kết hợp thời trang trang sức, sự kết hợp ăn ý giữa xu hướng cổ điển và hiện đại.', 'sp_trangsucbac_03.png', 1427000, NULL, 4, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:06:57', 4, NULL, 0),
(120, 'Lắc tay trẻ em Bạc đính đá PNJSilver PFXMW060000', 'Sở hữu kiểu dáng không quá xa lạ nhưng lại cực kỳ độc đáo, chiếc lắc tay PNJSilver được chế tác từ chất liệu bạc 92.5 khoác lên mình vẻ ngoài trẻ trung, phá cách và “high fashion”.', 'sp_trangsucbac_04.png', 595000, NULL, 4, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:08:15', 4, NULL, 0),
(121, 'Lắc tay bạc trẻ em PNJSilver 0000W060096', 'Sở hữu kiểu dáng không quá xa lạ nhưng lại cực kỳ độc đáo, chiếc lắc tay PNJSilver được chế tác từ chất liệu bạc 92.5 khoác lên mình vẻ ngoài trẻ trung, phá cách và “high fashion”.', 'sp_trangsucbac_05.png', 545000, NULL, 4, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:15:37', 4, NULL, 1),
(122, 'Bông tai Vàng Trắng 14K Đính đá Topaz PNJ TPXMW000248', 'Khí chất của quý cô toát lên khi nàng tự tin vào vẻ đẹp của mình, như những nụ hoa đang bung nở. Đôi bông tai sở hữu thiết kế nhỏ xinh với điểm nhấn đá Topaz cùng những viên đá trắng xung quanh.', 'sp_atsvang_01.png', 8715000, NULL, 5, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:19:37', 5, NULL, 0),
(123, 'Mặt dây chuyền Vàng trắng 14K đính đá Topaz PNJ TPXMW000420', 'Là một bức tranh ẩn chứa trong mình vẻ lung linh, huyền dịu, thiên nhiên luôn mang lại những món quà độc đáo và đặc biệt dành riêng cho chúng ta - những viên đá quý tự nhiên. Sự lôi cuốn, mê hoặc của viên đá đã khiến không ít người say đắm bởi vẻ đẹp độc tôn, khác lạ của nó. Với chiếc mặt dây chuyền Vàng 14K đính đá Topaz, các bạn nữ có thể tạo nên nét cá tính riêng của mình và tự tin tỏa sáng rạng ngời.', 'sp_atsvang_02.png', 5679000, NULL, 5, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:21:31', 5, NULL, 0),
(124, 'Nhẫn Vàng 18K Đính đá ECZ PNJ XMXMY010579', 'Dù ở lứa tuổi nào, theo phong cách cổ điển hay hiện đại thì sắc màu của những viên đá ECZ màu trắng vẫn luôn biết chiều lòng các tín đồ thời trang. Mô phỏng nét kiêu sa của nàng, chiếc nhẫn vàng mới của PNJ nhẹ nhàng kết đính những viên đá trắng tròn trịa trên chất vàng 18K, mang đến sản phẩm đầy tinh tế, tôn lên nhan sắc của phái đẹp.', 'sp_atsvang_03.png', 8974000, NULL, 5, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:24:19', 5, NULL, 0),
(125, 'Nhẫn Vàng trắng 10K đính đá ECZ PNJ XM00W000056', 'Mỗi màu sắc, mỗi kiểu dáng của một món trang sức đều thể hiện ý nghĩa và nét đẹp riêng. Từng sản phẩm mà PNJ chế tác ra đều là sự tâm huyết và tận tâm để mang đến những trang sức “chất” nhất cho chị em phụ nữ. Trong đó không thể không kể đến vẻ đẹp sang trọng của nhẫn PNJ vàng trắng 10K đính đá ECZ bởi sự tinh tế của chất liệu mang lại.', 'sp_atsvang_04.png', 2257000, NULL, 5, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:26:08', 5, NULL, 0),
(126, 'Nhẫn Vàng 14K Đính đá synthetic Disney|PNJ Beauty & The Beast ZTXMX000011', 'Dù ở lứa tuổi nào, theo phong cách cổ điển hay hiện đại thì sắc màu của những viên đá Synthetic vẫn luôn biết chiều lòng các tín đồ thời trang. Mô phỏng nét kiêu sa của nàng, chiếc nhẫn vàng mới của Disney|PNJ nhẹ nhàng kết đính những viên đá tròn trịa trên chất vàng 14K, mang đến sản phẩm đầy tinh tế, tôn lên nhan sắc của phái đẹp.', 'sp_atsvang_05.png', 5387000, NULL, 5, NULL, 1, 10, 'còn hàng', 0, '2024-04-03 00:27:40', 5, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id_danhmucnho` int NOT NULL,
  `MaDanhMuc` int NOT NULL,
  `TenDanhMuc` varchar(50) NOT NULL,
  `SubCategoryCode` int NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id_danhmucnho`, `MaDanhMuc`, `TenDanhMuc`, `SubCategoryCode`, `Description`) VALUES
(1, 1, 'Vang nhan', 1, ''),
(2, 2, 'Trang suc', 2, ''),
(3, 3, 'Kim cuong', 3, ''),
(4, 4, 'Vang trang', 4, ''),
(5, 5, 'Da quy', 5, ''),
(7, 1, 'obanay', 1, 'khong co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bientheimg`
--
ALTER TABLE `bientheimg`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `SanPham_id` (`SanPham_id`,`NguoiDung_id`),
  ADD KEY `NguoiDung_id` (`NguoiDung_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `manguoidung` (`manguoidung`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `SanPham_id` (`SanPham_id`,`NguoiDung_id`),
  ADD KEY `NguoiDung_id` (`NguoiDung_id`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id_ma_giam_gia`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`),
  ADD KEY `SubCategory` (`SubCategory`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id_danhmucnho`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bientheimg`
--
ALTER TABLE `bientheimg`
  MODIFY `id_img` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id_ma_giam_gia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nguoidung` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id_danhmucnho` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bientheimg`
--
ALTER TABLE `bientheimg`
  ADD CONSTRAINT `bientheimg_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`NguoiDung_id`) REFERENCES `nguoidung` (`id_nguoidung`) ON DELETE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`SanPham_id`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`id_nguoidung`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`NguoiDung_id`) REFERENCES `nguoidung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_4` FOREIGN KEY (`SanPham_id`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`id_danhmuc`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`SubCategory`) REFERENCES `subcategory` (`id_danhmucnho`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
