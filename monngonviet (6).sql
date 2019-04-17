-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2019 lúc 09:42 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `monngonviet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `HinhLoGo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LinkFB` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `HinhLoGo`, `NoiDung`, `created_at`, `updated_at`, `LinkFB`) VALUES
(1, 'H8GT_logo-mon-ngon-viet (1).png', '<p>Giấy ph&eacute;p số 43/GP-BTTTT do Bộ Th&ocirc;ng Tin Truyền Th&ocirc;ng Cấp Ng&agrave;y xx/xx/20xx</p>\r\n\r\n<p>&nbsp;Chịu tr&aacute;ch nhiệm</p>\r\n\r\n<p>&nbsp;Hotline:</p>\r\n\r\n<p>C&ocirc;ng ty TNHH Truyền Th&ocirc;ng</p>\r\n\r\n<p>&nbsp;Địa chỉ: Tp.HCM</p>\r\n\r\n<p>&nbsp;Email: @gmail.com</p>\r\n\r\n<p>Webiste: <a href=\"https://monngonviet.com.vn/\">https://monngonviet.com.vn/</a></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2019-03-29 16:13:43', '2019-04-07 09:57:55', 'https://www.facebook.com/SmartPhone-Thanh-Phong-520022775180436/?modal=admin_todo_tour');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fax` int(20) DEFAULT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `header`
--

INSERT INTO `header` (`id`, `Hinh`, `Link`, `sdt`, `email`, `Fax`, `DiaChi`, `created_at`, `updated_at`) VALUES
(1, 'banner.png', '2', '0832210125', 'thanhphong9718@gmail.com', 113, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1203351307186!2d106.71240001380006!3d10.802094592304085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIdXRlY2g!5e0!3m2!1svi!2s!4v1554626907443!5m2!1svi!2s\" width=\"852\" height=\"650\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-03-30 05:16:03', '2019-04-07 10:36:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `LoiNhan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `Ten`, `Email`, `SoDienThoai`, `LoiNhan`, `created_at`, `updated_at`) VALUES
(1, 'phong', 'thanhphong9718@gmail.com', '0832210125', 'phong', '2019-03-29 13:34:39', '0000-00-00 00:00:00'),
(2, 'Phong', 'thanhphong9718@gmail.com', '0832210125', 'ss', '2019-04-07 09:29:51', '2019-04-07 09:29:51'),
(3, 'Phong', 'thanhphong9718@gmail.com', '0832210125', 'ádasd', '2019-04-07 09:30:21', '2019-04-07 09:30:21'),
(4, 'Phong', 'thanhphong9718@gmail.com', '0832210125', 'nhớ liên hê', '2019-04-07 09:38:28', '2019-04-07 09:38:28'),
(5, 'Phong', 'thanhphong9718@gmail.com', '0832210125', 'ád', '2019-04-08 13:40:24', '2019-04-08 13:40:24'),
(6, 'Phong', 'thanhphong9718@gmail.com', '0832210125', 'e', '2019-04-08 14:01:04', '2019-04-08 14:01:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `idTheLoai` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SEOTitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `idTheLoai`, `Ten`, `TenKhongDau`, `SEOTitle`, `NgayTao`, `Status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Giới thiệu', 'gioi-thieu', 'Giới thiệu', '2019-03-27 00:00:00', 1, '2019-03-27 17:07:00', '2019-03-31 05:30:00'),
(2, 1, 'Tầm nhìn và sứ mệnh', 'tam-nhin-va-su-menh', 'Tầm nhìn và sứ mệnh', '2019-03-27 00:00:00', 1, '2019-03-27 17:07:00', '2019-03-31 05:30:15'),
(3, 1, 'Nghiên cứu', 'nghien-cuu', 'Nghiên cứu', NULL, 1, '2019-03-27 17:09:59', '2019-03-31 05:31:07'),
(4, 1, 'Bảo tồn', 'bao-ton', 'Bảo tồn', NULL, 1, '2019-03-29 11:09:50', '2019-04-08 04:34:57'),
(5, 1, 'Phát triền', 'phat-trien', 'Phát triền', NULL, 1, '2019-03-31 05:31:21', '2019-03-31 05:35:14'),
(6, 1, 'Truyền thông', 'truyen-thong', 'Truyền thông', NULL, 1, '2019-03-31 05:31:53', '2019-03-31 05:35:19'),
(7, 1, 'Đào tạo', 'dao-tao', 'Đào tạo', NULL, 1, '2019-03-31 05:32:02', '2019-03-31 05:35:25'),
(8, 3, 'Không gian bảo tồn ẩm thực việt', 'khong-gian-bao-ton-am-thuc-viet', 'Không gian bảo tồn ẩm thực việt', NULL, 1, '2019-03-31 05:32:25', '2019-03-31 05:35:28'),
(9, 3, 'Giao thoa văn hóa ẩm thực thế giới', 'giao-thoa-van-hoa-am-thuc-the-gioi', 'Giao thoa văn hóa ẩm thực thế giới', NULL, 1, '2019-03-31 05:33:25', '2019-03-31 05:35:32'),
(10, 3, 'Ẩm thực Pháp', 'am-thuc-phap', 'Ẩm thực Pháp', NULL, 1, '2019-03-31 05:33:54', '2019-03-31 05:35:36'),
(11, 3, 'Ẩm thực Hoa', 'am-thuc-hoa', 'Ẩm thực Hoa', NULL, 1, '2019-03-31 05:34:17', '2019-03-31 05:35:44'),
(12, 3, 'Ẩm thực Úc', 'am-thuc-uc', 'Ẩm thực Úc', NULL, 1, '2019-03-31 05:34:29', '2019-03-31 05:35:54'),
(13, 3, 'Ẩm thực Ý', 'am-thuc-y', 'Ẩm thực Ý', NULL, 1, '2019-03-31 05:34:43', '2019-03-31 05:36:00'),
(14, 3, 'Ẩm thực Nhật', 'am-thuc-nhat', 'Ẩm thực Nhật', NULL, 1, '2019-03-31 05:34:50', '2019-03-31 05:36:06'),
(15, 4, 'Miền Bắc', 'mien-bac', 'Miền Bắc', NULL, 1, '2019-03-31 05:39:16', '2019-03-31 05:39:24'),
(16, 4, 'Miền Nam', 'mien-nam', 'Miền Nam', NULL, 1, '2019-03-31 05:39:34', '2019-03-31 05:39:34'),
(17, 4, 'Miền Trung', 'mien-trung', 'Miền Trung', NULL, 1, '2019-03-31 05:39:43', '2019-03-31 05:39:43'),
(18, 4, 'Ẩm thực dân tộc', 'am-thuc-dan-toc', 'Ẩm thực dân tộc', NULL, 1, '2019-03-31 05:40:04', '2019-03-31 06:33:11'),
(19, 4, 'Ẩm thực thế giới', 'am-thuc-the-gioi', 'Ẩm thực thế giới', NULL, 1, '2019-03-31 05:40:15', '2019-03-31 05:40:15'),
(20, 4, 'Địa chỉ gia vị Việt', 'dia-chi-gia-vi-viet', 'Địa chỉ gia vị Việt', NULL, 1, '2019-03-31 05:40:33', '2019-03-31 05:40:33'),
(21, 5, 'Chân dung nghệ nhân', 'chan-dung-nghe-nhan', 'Chân dung nghệ nhân', NULL, 1, '2019-03-31 05:40:58', '2019-03-31 05:40:58'),
(22, 5, 'Bí quyết & thành công', 'bi-quyet-thanh-cong', 'Bí quyết & thành công', NULL, 1, '2019-03-31 05:41:16', '2019-03-31 05:41:16'),
(23, 5, 'Chân dung bếp trẻ', 'chan-dung-bep-tre', 'Chân dung bếp trẻ', NULL, 1, '2019-03-31 05:41:28', '2019-03-31 05:41:28'),
(24, 6, 'Giới thiệu các làng nghề', 'gioi-thieu-cac-lang-nghe', 'Giới thiệu các làng nghề', NULL, 1, '2019-03-31 05:41:49', '2019-03-31 05:42:38'),
(25, 6, 'Câu chuyện lịch sử', 'cau-chuyen-lich-su', 'Câu chuyện lịch sử', NULL, 1, '2019-03-31 05:42:01', '2019-03-31 05:42:01'),
(26, 6, 'Sự phát triển', 'su-phat-trien', 'Sự phát triển', NULL, 1, '2019-03-31 05:42:12', '2019-03-31 05:42:12'),
(27, 7, 'Các đề tài khoa học', 'cac-de-tai-khoa-hoc', 'Các đề tài khoa học', NULL, 1, '2019-03-31 05:43:01', '2019-03-31 05:43:01'),
(28, 7, 'Khóa học', 'khoa-hoc', 'Khóa học', NULL, 1, '2019-03-31 05:43:14', '2019-03-31 05:43:14'),
(29, 7, 'Liên kết đào tạo', 'lien-ket-dao-tao', 'Liên kết đào tạo', NULL, 1, '2019-03-31 05:43:23', '2019-03-31 05:43:23'),
(30, 7, 'Tổ chức sự kiện', 'to-chuc-su-kien', 'Tổ chức sự kiện', NULL, 1, '2019-03-31 05:43:36', '2019-03-31 05:43:36'),
(31, 7, 'Giải thưởng', 'giai-thuong', 'Giải thưởng', NULL, 1, '2019-03-31 05:43:51', '2019-03-31 05:43:51'),
(32, 8, 'Ẩm thực dưỡng sinh', 'am-thuc-duong-sinh', 'Ẩm thực dưỡng sinh', NULL, 1, '2019-03-31 06:27:30', '2019-03-31 06:27:43'),
(33, 8, 'Cuộc sống khỏe đẹp', 'cuoc-song-khoe-dep', 'Cuộc sống khỏe đẹp', NULL, 1, '2019-03-31 06:28:07', '2019-03-31 06:28:07'),
(34, 9, 'Tin tức- sự kiện', 'tin-tuc-su-kien', 'Tin tức- sự kiện', NULL, 1, '2019-03-31 06:51:07', '2019-03-31 06:51:17'),
(35, 3, 'Món ngon vùng miền', 'mon-ngon-vung-mien', 'Món ngon vùng miền', NULL, 1, '2019-04-12 16:39:48', '2019-04-12 16:39:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HienThi` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`id`, `Ten`, `Hinh`, `link`, `HienThi`, `created_at`, `updated_at`) VALUES
(4, 'Quảng Cáo 1', 'q9l2_qc1.jpg', 'https://www.facebook.com/', 1, '2019-04-08 09:13:35', '2019-04-10 17:05:58'),
(5, 'Quảng Cáo 2', 'bjGJ_qc2.jpg', 'https://www.facebook.com/', 1, '2019-04-08 09:14:00', '2019-04-08 09:14:00'),
(6, 'Quảng Cáo 3', 'HLDU_qc3.jpg', 'https://www.facebook.com/', 1, '2019-04-08 09:14:21', '2019-04-08 09:14:21'),
(7, 'Quảng Cáo 4', 'WuiJ_qc4.jpg', 'https://www.facebook.com/', 1, '2019-04-08 09:14:42', '2019-04-08 09:14:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `Ten` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KeyWord` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEONoiDung` text COLLATE utf8_unicode_ci,
  `NgayTao` date NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `Ten`, `TenKhongDau`, `Hinh`, `link`, `KeyWord`, `SEONoiDung`, `NgayTao`, `TomTat`, `NoiDung`, `SoLuotXem`, `Status`, `created_at`, `updated_at`) VALUES
(27, 'Mùa Chay Sắp đến..Tận hưởng thực đơn dưỡng sinh lành ngon của KFC nhé anh em', 'mua-chay-sap-den-tan-huong-thuc-don-duong-sinh-lanh-ngon-cua-kfc-nhe-anh-em', 'cFk0_1-556x385.png', NULL, 'mùa chay sắp đến..tận hưởng thực đơn dưỡng sinh lành ngon của kfc nhé', NULL, '2019-04-08', NULL, '<p>V&agrave;o th&aacute;ng 7 &acirc;m lịch n&agrave;y, KFC lần đầu ti&ecirc;n cho ra mắt thực đơn chay ho&agrave;n to&agrave;n mới, lấy cảm hứng từ c&aacute;c m&oacute;n ăn quen thuộc nhưng nguy&ecirc;n vật liệu thay ho&agrave;n to&agrave;n bằng rau, củ, quả mang hương vị thanh m&aacute;t, nhẹ nh&agrave;ng. Cực kỳ th&iacute;ch hợp cho những t&iacute;n đồ ăn chay.</p>\r\n\r\n<p><img alt=\"\" src=\"https://monngonviet.com.vn/wp-content/uploads/2018/08/poster-chay.jpg\" style=\"height:800px; width:560px\" /></p>\r\n\r\n<ul>\r\n	<li><strong>Burger &ldquo;G&agrave;&rdquo; chay</strong>, được kết hợp h&agrave;i h&ograve;a từ c&aacute;c th&agrave;nh phần c&oacute; nguồn gốc từ thi&ecirc;n nhi&ecirc;n, với nh&acirc;n g&agrave; chay nướng đậm vị được kẹp giữa hai lớp burger phủ m&egrave;, hai l&aacute;t c&agrave; chua mọng nước v&agrave; rau x&agrave; l&aacute;ch tươi xanh h&ograve;a quyện c&ugrave;ng lớp sốt ti&ecirc;u đen s&oacute;ng s&aacute;nh &amp; mayonnaise đậm đ&agrave; tạo n&ecirc;n m&oacute;n burger mới với hương vị mới mẻ, tươi ngon v&agrave; bổ dưỡng. Gi&aacute; chỉ 39.000 đồng/phần</li>\r\n	<li><strong>Cơm trộn rong biển ch&agrave; b&ocirc;ng &ldquo;G&agrave;&rdquo; chay</strong>, l&agrave; sự kết hợp thanh đạm giữa cơm trắng n&oacute;ng hổi trộn đều với rong biển m&egrave; rang H&agrave;n Quốc c&ugrave;ng ch&agrave; b&ocirc;ng G&agrave; chay v&agrave; rau x&agrave; l&aacute;ch tươi xanh l&agrave;m n&ecirc;n m&oacute;n cơm vừa thơm ngon vừa đầy đủ dưỡng chất. Gi&aacute; b&aacute;n cực mềm chỉ 39.000 đồng/phần.</li>\r\n	<li>B&ecirc;n cạnh c&aacute;c m&oacute;n ch&iacute;nh, m&oacute;n&nbsp;<strong>X&agrave; l&aacute;ch dầu giấm chay</strong>&nbsp;với đầy ắp c&aacute;c loại rau xanh, dưa leo &amp; c&agrave; chua bi, trở th&agrave;nh m&oacute;n ăn k&egrave;m tuyệt vời gi&uacute;p giải &ldquo;ng&aacute;n&rdquo; v&agrave; đồng thời k&iacute;ch th&iacute;ch vị gi&aacute;c gi&uacute;p ăn ngon miệng hơn. Gi&aacute; si&ecirc;u &ldquo;iu&rdquo; chỉ 15.000 đồng/phần.</li>\r\n	<li><img alt=\"\" src=\"https://monngonviet.com.vn/wp-content/uploads/2018/08/2.png\" style=\"height:448px; width:556px\" /></li>\r\n	<li>C&aacute;c sản phẩm KFC Chay mới sẽ được b&aacute;n tại tất cả nh&agrave; h&agrave;ng KFC tr&ecirc;n to&agrave;n quốc từ ng&agrave;y&nbsp;<strong>26/7/2018 (nhằm ng&agrave;y 14 th&aacute;ng 6 &acirc;m lịch)</strong>&nbsp;cho đến hết th&aacute;ng 7 &acirc;m lịch.</li>\r\n</ul>\r\n\r\n<p>H&atilde;y đến v&agrave; cảm nhận hương vị thật thanh đạm rất ri&ecirc;ng từ thực đơn Chay mới của KFC!</p>', 7, 1, '2019-04-08 08:25:22', '2019-04-16 01:36:20'),
(28, 'Báo Mỹ khen cặp vợ chồng Việt bán món bánh bao ngon nhất ở Orlando', 'bao-my-khen-cap-vo-chong-viet-ban-mon-banh-bao-ngon-nhat-o-orlando', 'lMHe_36677479_1846460158750883_6183637103801270272_n-600x385.jpg', NULL, 'báo mỹ khen cặp vợ chồng việt bán món bánh bao ngon nhất ở orlando', NULL, '2019-04-08', NULL, '<p><img alt=\"\" src=\"https://monngonviet.com.vn/wp-content/uploads/2018/07/36677479_1846460158750883_6183637103801270272_n.jpg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p>Anh Jimmy Nguyễn v&agrave; c&ocirc; V&otilde; Ch&acirc;u l&agrave; một cặp vợ chồng vui vẻ, l&aacute;i một chiếc xe b&aacute;n thức ăn, được nhiều người ưa th&iacute;ch nhất v&agrave; được đặt t&ecirc;n kh&aacute; hấp dẫn tại th&agrave;nh phố Orlando. Đ&acirc;y l&agrave; lời mở đầu của một b&agrave;i viết về thực phẩm trong th&agrave;nh phố của tuần b&aacute;o Orlando Weekly mới đ&acirc;y.</p>\r\n\r\n<p>B&agrave;i viết cho biết xe b&aacute;n thức ăn c&oacute; c&aacute;i t&ecirc;n hấp dẫn l&agrave; Hot Asian Buns (B&aacute;nh Bao &Aacute; Ch&acirc;u N&oacute;ng Ngon). Ngo&agrave;i nghĩa đen l&agrave; b&aacute;nh bao, chữ &ldquo;buns&rdquo; ở&nbsp;đ&acirc;y c&ograve;n c&oacute; nghĩa b&oacute;ng l&agrave; &ldquo;m&ocirc;ng.&rdquo; V&igrave; vậy t&aacute;c giả n&oacute;i l&agrave; xe được nhiều người ưa th&iacute;ch. V&agrave; đ&uacute;ng như c&aacute;i t&ecirc;n gợi &yacute;, xe chuy&ecirc;n b&aacute;n b&aacute;nh bao được l&agrave;m bằng tay ngay tại chỗ, d&ugrave;ng những th&agrave;nh phần vật liệu thi&ecirc;n nhi&ecirc;n, kh&ocirc;ng chứa c&aacute;c chất bảo quản.</p>\r\n\r\n<p>Thời gian l&agrave;m b&aacute;nh bao k&eacute;o d&agrave;i năm tiếng đồng hồ từ khi bắt đầu cho tới l&uacute;c kết th&uacute;c. L&ograve;ng tận tụy chế biến m&oacute;n b&aacute;nh bao đ&atilde; đến một c&aacute;ch tự nhi&ecirc;n với anh Jimmy Nguyễn, một học vi&ecirc;n tốt nghiệp trường nấu ăn Le Cordon Bleu Orlando. Sau khi trau dồi năng khiếu dưới sự hướng dẫn của b&agrave; Kathleen Blake tại nh&agrave; h&agrave;ng Rusty Spoon, v&agrave; của &ocirc;ng Henry Moso tại Kabooki Sushi, anh Jimmy Nguyễn ra l&agrave;m ăn ri&ecirc;ng c&ugrave;ng với vợ.</p>\r\n\r\n<p>C&ocirc; Ch&acirc;u đ&atilde; rời bỏ thế giới c&ocirc;ng ty để sống cuộc đời l&aacute;i xe truck b&aacute;n thực phẩm. Cả hai người đều kh&ocirc;ng thể vui sướng hơn hoặc tận t&igrave;nh hơn.</p>\r\n\r\n<p>Jimmy Nguyễn n&oacute;i với Orlando Weekly, &ldquo;Ch&uacute;ng t&ocirc;i đang t&igrave;m c&aacute;ch mang trở lại một cảm gi&aacute;c về thức ăn b&aacute;n từ xe dạo. Ch&uacute;ng t&ocirc;i cảm thấy bản chất đ&iacute;ch thực của thức ăn b&aacute;n rong n&agrave;y đ&atilde; bị mất đi một ch&uacute;t, trong khung cảnh xe truck b&aacute;n thực phẩm của th&agrave;nh phố trong những năm qua. Ch&uacute;ng t&ocirc;i biết b&aacute;nh bao l&agrave; loại thức ăn m&agrave; bạn kh&ocirc;ng thể n&agrave;o t&igrave;m thấy ở hầu hết c&aacute;c nh&agrave; h&agrave;ng. N&oacute; được b&aacute;n ri&ecirc;ng biệt, gi&aacute; cả phải chăng, v&agrave; hương vị thơm ngon tr&ecirc;n đường phố. &rdquo;</p>\r\n\r\n<p>B&agrave;i b&aacute;o n&oacute;i rằng nếu bạn đ&atilde; cắn v&agrave;o b&aacute;nh bao KFC của họ, với c&aacute;c hương vị gochujang, nori, h&agrave;nh l&aacute; v&agrave; salad kem, bạn biết rằng c&aacute;c m&oacute;n b&aacute;nh bao của Jimmy v&agrave; Ch&acirc;u c&oacute; hương vị thơm ngon khi ăn tr&ecirc;n đường phố, hoặc ăn bất cứ nơi n&agrave;o kh&aacute;c.</p>\r\n\r\n<p>Tay nghề v&agrave; c&aacute;ch thức tiếp thị độc đ&aacute;o của cặp vợ chồng l&agrave; điều kh&ocirc;ng thể phủ nhận.<br />\r\nAnh Jimmy Nguyễn ca ngợi một người đ&atilde; tạo ảnh hưởng đến phong c&aacute;ch v&agrave; đạo đức nấu ăn của anh. Đ&oacute; l&agrave; b&agrave; trưởng bếp Kathleen Blake ở nh&agrave; h&agrave;ng Rusty Spoon, người từng thắng giải thưởng 2018 BITE.<br />\r\nAnh n&oacute;i, &ldquo;B&agrave; ấy thực sự định hướng cho t&ocirc;i l&agrave; ai ng&agrave;y nay với cương vị một đầu bếp. T&ocirc;i bắt đầu l&agrave; một đầu bếp phụ kh&ocirc;ng chuy&ecirc;n nghiệp, vừa mới tốt nghiệp từ trường dạy nấu ăn, v&agrave; dần dần ngoi l&ecirc;n chức phụ t&aacute; đầu bếp ch&iacute;nh, trong ba năm t&ocirc;i ở đ&oacute;. B&agrave; dạy t&ocirc;i c&aacute;ch thức t&ocirc;n trọng c&aacute;c th&agrave;nh phần vật liệu, c&aacute;c n&ocirc;ng d&acirc;n cung cấp nguy&ecirc;n liệu, c&aacute;c kỹ thuật, v&agrave; l&agrave;m cho t&ocirc;i thấm nhuần về kỷ luật v&agrave; khả năng l&atilde;nh đạo.&rdquo;</p>\r\n\r\n<p>Kh&ocirc;ng ngạc nhi&ecirc;n khi b&agrave; Blake được xem l&agrave; một trong những đầu bếp kh&eacute;o nhất ở Orlando, v&agrave; c&oacute; thể n&oacute;i Jimmy Nguyễn đang tiến cấp bậc của b&agrave;.</p>\r\n\r\n<p>Hinh:Jimmy Nguyễn đ&atilde; tốt nghiệp trường nấu ăn Le Cordon Bleu Orlando. Sau mấy năm l&agrave;m việc ở nh&agrave; h&agrave;ng cao cấp, anh c&ugrave;ng vợ l&agrave; c&ocirc; V&otilde; Ch&acirc;u mở qu&aacute;n b&aacute;n b&aacute;nh bao tr&ecirc;n xe.</p>\r\n\r\n<p>Theo tuần b&aacute;o Orlando- người dịch Ly Le</p>', 1, 1, '2019-04-08 08:27:18', '2019-04-16 01:37:20'),
(29, 'Đến Singapore, trải nghiệm Lễ hội ẩm thực', 'den-singapore-trai-nghiem-le-hoi-am-thuc', '1RLu_Hinh-4-1sing-696x457.jpg', NULL, 'đến singapore, trải nghiệm lễ hội ẩm thực', NULL, '2019-04-08', NULL, '<p>Với c&aacute;c du kh&aacute;ch Việt, Đảo quốc Singapore lu&ocirc;n được y&ecirc;u th&iacute;ch bởi đ&acirc;y l&agrave; địa chỉ du lịch xanh sạch đẹp , hội tụ c&aacute;c ti&ecirc;u ch&iacute; hiện đại với tinh thần phục vụ ho&agrave;n hảo khiến c&ocirc;ng ch&uacute;ng đều m&ecirc; đắm.&nbsp; Tuy nhi&ecirc;n , Đảo quốc n&agrave;y c&ograve;n nổi tiếng với những m&oacute;n ăn độc đ&aacute;o ..ch&iacute;nh v&igrave; vậy, trong th&aacute;ng 7 n&agrave;y. H&atilde;y c&ugrave;ng Fiditour đến Singgapore vui chơi lễ hội ẩm thực để khơi dậy c&aacute;c cảm x&uacute;c gi&aacute;c quan nh&eacute;.<img alt=\"\" src=\"https://monngonviet.com.vn/wp-content/uploads/2018/07/Hinh-2-1-sing.jpg\" style=\"height:1067px; width:1600px\" />Được tổ chức lần đầu ti&ecirc;n v&agrave;o năm 1994, Lễ hội Ẩm thực Singapore ch&iacute;nh l&agrave; dịp tuyệt vời nhất để du kh&aacute;ch thưởng thức c&aacute;c m&oacute;n ngon như một người d&acirc;n địa phương ch&iacute;nh hiệu, nơi văn h&oacute;a bản địa, truyền thống đầy tự h&agrave;o v&agrave; nền ẩm thực đương đại h&ograve;a quyện trong c&ugrave;ng một m&oacute;n ăn.&nbsp;<img alt=\"\" src=\"https://monngonviet.com.vn/wp-content/uploads/2018/07/Hinh-3-1-sing.jpg\" style=\"height:1532px; width:2295px\" />Bạn c&oacute; thể nhấm nh&aacute;p những m&oacute;n ăn địa phương đậm chất Trung Hoa, Ấn Độ hay M&atilde; Lai được chế biến theo phong c&aacute;ch độc đ&aacute;o bởi những đầu bếp t&agrave;i hoa v&agrave; lắng nghe nhiều c&acirc;u chuyện th&uacute; vị ẩn sau c&aacute;c m&oacute;n ăn truyền thống. Nếu bạn thuộc tu&yacute;p người th&iacute;ch t&igrave;m t&ograve;i, h&atilde;y tham gia v&agrave;o c&aacute;c lớp dạy nấu ăn kh&aacute;c nhau để c&oacute; thể t&iacute;ch lũy cho m&igrave;nh những c&ocirc;ng thức nấu ăn đ&atilde; trường tồn c&ugrave;ng năm th&aacute;ng từ nhiều nền văn h&oacute;a của Singapore, để n&acirc;ng cao khả năng nấu nướng trong ch&iacute;nh căn bếp nh&agrave; m&igrave;nh. Tất cả những điều n&agrave;y gi&uacute;p bạn kh&aacute;m ph&aacute; một c&aacute;ch s&acirc;u sắc về văn h&oacute;a đa dạng của &ldquo;đảo quốc Sư tử&rdquo; n&agrave;y. H&atilde;y chiều chuộng c&aacute;c gi&aacute;c quan của bạn trong những trải nghiệm độc đ&aacute;o tại lễ hội ẩm thực Singapore (từ ng&agrave;y 13/7 &ndash; 29/7/2018) qua c&aacute;c h&agrave;nh tr&igrave;nh du ngoạn từ Fiditour.<img alt=\"\" src=\"https://monngonviet.com.vn/wp-content/uploads/2018/07/Hinh-4-1sing.jpg\" style=\"height:1077px; width:1639px\" /><em>Tour Singapore 4N3Đ, KH: 14, 19/7/2018 gi&aacute; từ: 9.990.000 đồng; Malaysia &ndash; Singapore 6N5Đ, KH: 13, 18, 20/7 gi&aacute; từ: 10.990.000 đồng.</em></p>\r\n\r\n<p><em>B&ecirc;n cạnh đ&oacute;, với mong muốn đem lại một kỳ nghỉ h&egrave; thực sự d&agrave;nh cho du kh&aacute;ch, nhất l&agrave; những du kh&aacute;ch nhỏ tuổi, bắt đầu từ ng&agrave;y 1/6/2018, Fiditour đồng loạt triển khai chương tr&igrave;nh khuyến mại &ldquo;C&ugrave;ng Fiditour l&atilde;ng du khắp 5 ch&acirc;u&rdquo; k&eacute;o d&agrave;i đến hết ng&agrave;y 28/8/2018. Chương tr&igrave;nh d&agrave;nh cho tất cả c&aacute;c kh&aacute;ch h&agrave;ng mua tour trong v&agrave; ngo&agrave;i nước tại c&aacute;c văn ph&ograve;ng, chi nh&aacute;nh Fiditour tr&ecirc;n to&agrave;n quốc.</em></p>', 3, 1, '2019-04-08 08:28:32', '2019-04-16 15:49:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SEOTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Ten`, `TenKhongDau`, `SEOTitle`, `created_at`, `updated_at`, `Status`) VALUES
(1, 'Trang chủ', 'trang-chu', 'Trang chủ', '2019-03-31 05:59:28', '2019-03-31 05:59:28', 1),
(3, 'Văn hóa ẩm thực', 'van-hoa-am-thuc', 'Văn hóa ẩm thực', '2019-03-31 05:26:04', '2019-03-31 05:26:04', 1),
(4, 'Địa chỉ ẩm thực', 'dia-chi-am-thuc', 'Địa chỉ ẩm thực', '2019-03-31 05:26:17', '2019-03-31 05:26:17', 1),
(5, 'Nghề bếp xưa & nay', 'nghe-bep-xua-nay', 'Nghề bếp xưa & nay', '2019-03-31 05:26:37', '2019-03-31 05:26:37', 1),
(6, 'Làng nghề', 'lang-nghe', 'Làng nghề', '2019-03-31 05:26:52', '2019-03-31 05:26:52', 1),
(7, 'Hoạt động&cộng đồng', 'hoat-dong-cong-dong', 'Hoạt động&cộng đồng', '2019-03-31 08:29:21', '2019-03-31 08:29:21', 1),
(8, 'Ngon lành ẩm thực Việt', 'ngon-lanh-am-thuc-viet', 'Ngon lành ẩm thực Việt', '2019-03-31 06:10:12', '2019-03-31 06:10:12', 1),
(9, 'Tin tức - sự kiện', 'tin-tuc-su-kien', 'Tin tức - sự kiện', '2019-04-12 17:06:20', '2019-04-12 17:06:20', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `idLoaiTin` int(11) NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SEOTitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HienThi` tinyint(1) NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci,
  `NoiBat` tinyint(1) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `NgayTao` date DEFAULT NULL,
  `NgaySua` date DEFAULT NULL,
  `SEONoiDung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEOTomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `idLoaiTin`, `TieuDe`, `TieuDeKhongDau`, `SEOTitle`, `NoiDung`, `Hinh`, `HienThi`, `TomTat`, `NoiBat`, `SoLuotXem`, `NgayTao`, `NgaySua`, `SEONoiDung`, `SEOTomTat`, `created_at`, `updated_at`) VALUES
(19, 16, 'Cơm tấm', 'com-tam', 'Cơm tấm', '<p>Cơm tấm Cali l&agrave; một địa điểm đ&aacute;ng tin cậy trong hằng h&agrave; sa số những nh&agrave; h&agrave;ng hay qu&aacute;n ăn phục vụ cơm tấm tại S&agrave;i G&ograve;n. Kh&ocirc;ng chỉ v&igrave; kh&ocirc;ng gian v&ocirc; c&ugrave;ng sạch sẽ, hiện đại v&agrave; tho&aacute;ng m&aacute;t, đảm bảo an to&agrave;n vệ sinh thực phẩm &ndash; vấn đề đ&aacute;ng b&aacute;o động trong x&atilde; hội hiện nay, m&agrave; c&ograve;n bởi v&igrave; tại Cali c&oacute; m&oacute;n cơm tấm ch&aacute;y gi&ograve;n ăn cực ghiền.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://images.foody.vn/res/g1/134/s/foody-com-tam-cali-1-462-635829305941143453.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://images.foody.vn/res/g1/2592/s/foody-com-tam-cali-5-718-635851022682884735.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://images.foody.vn/res/g1/134/s/foody-com-tam-cali-1-856-635559879815054292.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://images.foody.vn/res/g1/134/s/foody-com-tam-cali-1-285-636261686426508223.jpg\" /></p>', '4clM_com-tam-vietnam-food.jpg', 1, '<p>Cơm tấm l&agrave; m&oacute;n đặc sản của miền Nam Việt Nam, n&oacute; l&agrave; một trong những m&oacute;n ăn s&aacute;ng được ưa chuộng nhất của người miền Nam, nhất l&agrave; S&agrave;i G&ograve;n. Hiện nay loại cơm l&agrave;m từ hột gạo bể n&agrave;y đ&atilde; c&oacute; mặt ở một số nơi thuộc miền Trung, miền Bắc v&agrave; hải ngoại</p>', 1, 0, '2019-03-31', '2019-04-08', NULL, '<p>Cơm tấm l&agrave; m&oacute;n đặc sản của miền Nam Việt Nam, n&oacute; l&agrave; một trong những m&oacute;n ăn s&aacute;ng được ưa chuộng nhất của người miền Nam, nhất l&agrave; S&agrave;i G&ograve;n. Hiện nay loại cơm l&agrave;m từ hột gạo bể n&agrave;y đ&atilde; c&oacute; mặt ở một số nơi thuộc miền Trung, miền Bắc v&agrave; hải ngoại</p>', '2019-03-31 15:36:29', '2019-04-08 12:49:55'),
(22, 16, 'Bánh tráng nướng Đà Lạt', 'banh-trang-nuong-da-lat', 's', '<p>D&ugrave; hiện nay, c&oacute; thể gọi b&aacute;nh tr&aacute;ng nướng l&agrave; m&oacute;n ăn đường phố đặc trưng của Đ&agrave; Lạt nhưng thực tế m&oacute;n b&aacute;nh n&agrave;y mới chỉ xuất hiện ở th&agrave;nh phố trong sương v&agrave;i ba năm trở lại đ&acirc;y. Ban đầu chỉ l&agrave; chiếc b&aacute;nh tr&aacute;ng nướng mỡ h&agrave;nh đơn giản, sau đ&oacute; v&igrave; sở th&iacute;ch của người ăn cũng như sức s&aacute;ng tạo của người b&aacute;n m&agrave; m&oacute;n b&aacute;nh tr&aacute;ng nướng trở n&ecirc;n phong ph&uacute; về chủng loại cũng như hấp dẫn như b&acirc;y giờ.</p>\r\n\r\n<p><a href=\"https://www.ivivu.com/blog/banh-trang-nuong-mon-ngon-goi-nho-da-lat/banh-trang-nuong-da-lat-ivivu1/\"><img alt=\"banh-trang-nuong-da-lat-ivivu1\" src=\"https://cdn3.ivivu.com/2014/03/banh-trang-nuong-da-lat-ivivu1.jpg\" /></a></p>\r\n\r\n<p>Thật sự, để n&oacute;i b&aacute;nh tr&aacute;ng nướng Đ&agrave; Lạt ngon độc nhất c&oacute; lẽ hơi khi&ecirc;n cưỡng bởi c&ugrave;ng l&agrave; m&oacute;n ăn đ&oacute;, tại S&agrave;i G&ograve;n, người ta c&oacute; thể thưởng thức một m&oacute;n ăn phong ph&uacute; cả về hương, vị, sắc nhiều hơn thế rất nhiều. Nhưng trong tiết trời &ocirc;n h&ograve;a quanh năm của phố n&uacute;i, m&oacute;n ăn giản dị ấy lại trở n&ecirc;n lưu luyến một c&aacute;ch đặc biệt. Gọi b&aacute;nh tr&aacute;ng nướng l&agrave; pizza Việt Nam hay pizza phố n&uacute;i cũng kh&ocirc;ng qu&aacute; lời bởi từ h&igrave;nh thức cũng nhưng c&aacute;c nguy&ecirc;n liệu b&aacute;nh tr&aacute;ng nướng đều c&oacute; vẻ giống m&oacute;n pizza bạn đ&atilde; từng biết.</p>\r\n\r\n<p><a href=\"https://www.ivivu.com/blog/banh-trang-nuong-mon-ngon-goi-nho-da-lat/banh-trang-nuong-da-lat-ivivu2/\"><img alt=\"banh-trang-nuong-da-lat-ivivu2\" src=\"https://cdn3.ivivu.com/2014/03/banh-trang-nuong-da-lat-ivivu2.jpg\" /></a></p>\r\n\r\n<p>Sự kh&aacute;c biệt độc đ&aacute;o nằm ở phần đế b&aacute;nh, chiếc pizza Việt Nam c&oacute; đế b&aacute;nh l&agrave;m từ nguy&ecirc;n liệu rất Việt ấy l&agrave; chiếc b&aacute;nh tr&aacute;ng. Những chiếc b&aacute;nh tr&aacute;ng Đ&agrave; Lạt ch&iacute;nh hiệu mỏng tang, đặt tr&ecirc;n vỉ than nướng gi&ograve;n, th&ecirc;m ch&uacute;t h&agrave;nh l&aacute; x&agrave;o nhuyễn, mỡ h&agrave;nh thơm nức, ruốc thịt đậm đ&agrave;. Kế đến l&agrave; lớp trứng g&agrave; tr&aacute;ng mỏng v&agrave;ng ươm c&ugrave;ng c&aacute;c phụ liệu độc đ&aacute;o kh&aacute;c.</p>\r\n\r\n<p><a href=\"https://www.ivivu.com/blog/banh-trang-nuong-mon-ngon-goi-nho-da-lat/banh-trang-nuong-da-lat-ivivu3/\"><img alt=\"banh-trang-nuong-da-lat-ivivu3\" src=\"https://cdn3.ivivu.com/2014/03/banh-trang-nuong-da-lat-ivivu3.jpg\" /></a></p>\r\n\r\n<p>C&oacute; rất nhiều thứ c&oacute; thể cho v&agrave;o b&aacute;nh tr&aacute;ng nướng, t&ugrave;y theo sở th&iacute;ch m&agrave; c&oacute; thể chọn b&aacute;nh tr&aacute;ng nướng b&ograve; kh&ocirc;, hay pa t&ecirc;, ph&ocirc; mai, thịt g&agrave;, x&uacute;c x&iacute;ch, sốt maiyonaise&hellip; Người b</p>', '3gWH_NUARL.jpg', 1, '<p>D&ugrave; hiện nay, c&oacute; thể gọi b&aacute;nh tr&aacute;ng nướng l&agrave; m&oacute;n ăn đường phố đặc trưng của Đ&agrave; Lạt nhưng thực tế m&oacute;n b&aacute;nh n&agrave;y mới chỉ xuất hiện ở th&agrave;nh phố trong sương v&agrave;i ba năm trở lại đ&acirc;y. Ban đầu chỉ l&agrave; chiếc b&aacute;nh tr&aacute;ng nướng mỡ h&agrave;nh đơn giản, sau đ&oacute; v&igrave; sở th&iacute;ch của người ăn cũng như sức s&aacute;ng tạo của người b&aacute;n m&agrave; m&oacute;n b&aacute;nh tr&aacute;ng nướng trở n&ecirc;n phong ph&uacute; về chủng loại cũng như hấp dẫn như b&acirc;y giờ.</p>', 1, 6, '2019-03-31', '2019-03-31', NULL, '<p>D&ugrave; hiện nay, c&oacute; thể gọi b&aacute;nh tr&aacute;ng nướng l&agrave; m&oacute;n ăn đường phố đặc trưng của Đ&agrave; Lạt nhưng thực tế m&oacute;n b&aacute;nh n&agrave;y mới chỉ xuất hiện ở th&agrave;nh phố trong sương v&agrave;i ba năm trở lại đ&acirc;y. Ban đầu chỉ l&agrave; chiếc b&aacute;nh tr&aacute;ng nướng mỡ h&agrave;nh đơn giản, sau đ&oacute; v&igrave; sở th&iacute;ch của người ăn cũng như sức s&aacute;ng tạo của người b&aacute;n m&agrave; m&oacute;n b&aacute;nh tr&aacute;ng nướng trở n&ecirc;n phong ph&uacute; về chủng loại cũng như hấp dẫn như b&acirc;y giờ.</p>', '2019-03-31 16:44:21', '2019-04-04 07:25:43'),
(23, 16, 'Bánh xèo Miền Nam', 'banh-xeo-mien-nam', 'Bánh xeo', '<p>Nếu như b&aacute;nh x&egrave;o <strong><a href=\"https://bloganchoi.com/viet-nam-noi-la-lam-phan-anh-mang-8-ty-dong-quyen-gop-den-voi-dong-bao-mien-trung/\" target=\"_blank\">miền Trung</a></strong> c&oacute; k&iacute;ch thước b&eacute; b&eacute; xinh xinh vừa ăn th&igrave; b&aacute;nh x&egrave;o <strong><a href=\"https://bloganchoi.com/ve-mien-tay-thuong-thuc-voi-ca-loc-nuong-trui-dan-da/\" target=\"_blank\">miền T&acirc;y</a></strong> lại thuộc h&agrave;ng&hellip; ngoại cỡ. Kh&ocirc;ng đổ trong khu&ocirc;n nhỏ như ở miền Trung, người miền T&acirc;y đổ b&aacute;nh trong chảo lớn. Khi ra th&agrave;nh phẩm, c&aacute;i b&aacute;nh to gần bằng chiếc m&acirc;m, v&igrave; vậy m&agrave; người ta hay gấp đ&ocirc;i lại khi đem ra khỏi chảo. Chỉ cần ăn một hai c&aacute;i l&agrave; đ&atilde; cảm thấy no n&ecirc; rồi.<a href=\"https://bloganchoi.com/banh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi/\" target=\"_blank\"><img alt=\"Bánh xèo miền Tây - món quà quê đậm đà hương vị  - BlogAnChoi\" src=\"https://bloganchoi.com/wp-content/images/bac/others/transparent-1x1.gif?utm_source=dmca&amp;utm_medium=copy&amp;utm_term=B%C3%A1nh%20x%C3%A8o%20mi%E1%BB%81n%20T%C3%A2y%20-%20m%C3%B3n%20qu%C3%A0%20qu%C3%AA%20%C4%91%E1%BA%ADm%20%C4%91%C3%A0%20h%C6%B0%C6%A1ng%20v%E1%BB%8B%26nbsp%3B%20-%20BlogAnChoi&amp;utm_content=https%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F&amp;tags=https%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F&amp;dmcacpp=1\" style=\"height:1px; width:1px\" /></a></p>\r\n\r\n<p>B&aacute;nh x&egrave;o &ndash; nh&igrave;n l&agrave; muốn ăn. Ảnh: internet</p>\r\n\r\n<p>C&aacute;i đặc sắc của m&oacute;n ăn n&agrave;y nằm ở những nguy&ecirc;n liệu chế biến. Hầu như nguy&ecirc;n liệu đều l&agrave; &ldquo;c&acirc;y nh&agrave; l&aacute; vườn&rdquo;, kh&ocirc;ng cần phải mua hay t&igrave;m ở đ&acirc;u xa. &nbsp;Bột b&aacute;nh x&egrave;o được pha từ bột gạo xay, trộn với bột nghệ để khi chi&ecirc;n b&aacute;nh c&oacute; m&agrave;u v&agrave;ng tươi đẹp mắt. Để tăng hương vị cho chiếc b&aacute;nh, người ta thường pha th&ecirc;m nước cốt dừa v&agrave; h&agrave;nh l&aacute; th&aacute;i nhuyễn v&agrave;o bột. V&igrave; vậy m&agrave; chiếc b&aacute;nh chi&ecirc;n l&ecirc;n vừa c&oacute; vị beo b&eacute;o của cốt dừa, vừa c&oacute; m&ugrave;i thơm của h&agrave;nh l&aacute;, khiến người ăn nhớ m&atilde;i kh&ocirc;ng qu&ecirc;n.</p>\r\n\r\n<p>Pha bột chi&ecirc;n b&aacute;nh. Ảnh: internet</p>\r\n\r\n<p>Nh&acirc;n b&aacute;nh x&egrave;o miền T&acirc;y v&ocirc; c&ugrave;ng đa dạng, t&ugrave;y v&agrave;o sở th&iacute;ch v&agrave; nguy&ecirc;n liệu sẵn c&oacute; m&agrave; người chi&ecirc;n b&aacute;nh c&oacute; thể biến tấu một c&aacute;ch linh hoạt. Thường th&igrave; mỗi tỉnh sẽ c&oacute; nguy&ecirc;n liệu l&agrave;m nh&acirc;n kh&aacute;c nhau. Ở Bến Tre, người ta c&oacute; thể l&agrave;m nh&acirc;n bằng củ hũ dừa, nấm mối, ở một số chỗ người ta c&ograve;n d&ugrave;ng l&otilde;i của đầu tr&aacute;i dứa để chi&ecirc;n b&aacute;nh. Tuy nhi&ecirc;n, quen thuộc v&agrave; thường được sử dụng nhiều nhất l&agrave; gi&aacute;, t&ocirc;m đất, thịt heo.</p>\r\n\r\n<p>Nguồn : <strong><em><a href=\"https://bloganchoi.com/banh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi/\" target=\"_blank\">B&aacute;nh x&egrave;o miền T&acirc;y - m&oacute;n qu&agrave; qu&ecirc; đậm đ&agrave; hương vị&nbsp; - BlogAnChoi</a></em></strong></p>', 'B6F8_banh-xeo.jpg', 1, '<p>Nếu như b&aacute;nh x&egrave;o <strong><a href=\"https://bloganchoi.com/viet-nam-noi-la-lam-phan-anh-mang-8-ty-dong-quyen-gop-den-voi-dong-bao-mien-trung/\" target=\"_blank\">miền Trung</a><a href=\"https://bloganchoi.com/banh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi/\" target=\"_blank\"><img alt=\"Bánh xèo miền Tây - món quà quê đậm đà hương vị  - BlogAnChoi\" src=\"https://bloganchoi.com/wp-content/images/bac/others/transparent-1x1.gif?utm_source=dmca&amp;utm_medium=copy&amp;utm_term=B%C3%A1nh%20x%C3%A8o%20mi%E1%BB%81n%20T%C3%A2y%20-%20m%C3%B3n%20qu%C3%A0%20qu%C3%AA%20%C4%91%E1%BA%ADm%20%C4%91%C3%A0%20h%C6%B0%C6%A1ng%20v%E1%BB%8B%26nbsp%3B%20-%20BlogAnChoi&amp;utm_content=https%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F&amp;tags=https%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F&amp;dmcacpp=1\" style=\"height:1px; width:1px\" /></a></strong> c&oacute; k&iacute;ch thước b&eacute; b&eacute; xinh xinh vừa ăn th&igrave; b&aacute;nh x&egrave;o <strong><a href=\"https://bloganchoi.com/ve-mien-tay-thuong-thuc-voi-ca-loc-nuong-trui-dan-da/\" target=\"_blank\">miền T&acirc;y</a></strong> lại thuộc h&agrave;ng&hellip; ngoại cỡ. Kh&ocirc;ng đổ trong khu&ocirc;n nhỏ như ở miền Trung, người miền T&acirc;y đổ b&aacute;nh trong chảo lớn. Khi ra th&agrave;nh phẩm, c&aacute;i b&aacute;nh to gần bằng chiếc m&acirc;m, v&igrave; vậy m&agrave; người ta hay gấp đ&ocirc;i lại khi đem ra khỏi chảo. Chỉ cần ăn một hai c&aacute;i l&agrave; đ&atilde; cảm thấy no n&ecirc; rồi.</p>\r\n\r\n<p>&nbsp;</p>', 0, 2, '2019-04-01', '2019-04-01', NULL, '<p>Nếu như b&aacute;nh x&egrave;o <strong><a href=\"https://bloganchoi.com/viet-nam-noi-la-lam-phan-anh-mang-8-ty-dong-quyen-gop-den-voi-dong-bao-mien-trung/\" target=\"_blank\">miền Trung</a><a href=\"https://bloganchoi.com/banh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi/\" target=\"_blank\"><img alt=\"Bánh xèo miền Tây - món quà quê đậm đà hương vị  - BlogAnChoi\" src=\"https://bloganchoi.com/wp-content/images/bac/others/transparent-1x1.gif?utm_source=dmca&amp;utm_medium=copy&amp;utm_term=B%C3%A1nh%20x%C3%A8o%20mi%E1%BB%81n%20T%C3%A2y%20-%20m%C3%B3n%20qu%C3%A0%20qu%C3%AA%20%C4%91%E1%BA%ADm%20%C4%91%C3%A0%20h%C6%B0%C6%A1ng%20v%E1%BB%8B%26nbsp%3B%20-%20BlogAnChoi&amp;utm_content=https%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F&amp;tags=https%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fbanh-xeo-mien-tay-mon-qua-que-dam-da-huong-vi%2F&amp;dmcacpp=1\" style=\"height:1px; width:1px\" /></a></strong> c&oacute; k&iacute;ch thước b&eacute; b&eacute; xinh xinh vừa ăn th&igrave; b&aacute;nh x&egrave;o <strong><a href=\"https://bloganchoi.com/ve-mien-tay-thuong-thuc-voi-ca-loc-nuong-trui-dan-da/\" target=\"_blank\">miền T&acirc;y</a></strong> lại thuộc h&agrave;ng&hellip; ngoại cỡ. Kh&ocirc;ng đổ trong khu&ocirc;n nhỏ như ở miền Trung, người miền T&acirc;y đổ b&aacute;nh trong chảo lớn. Khi ra th&agrave;nh phẩm, c&aacute;i b&aacute;nh to gần bằng chiếc m&acirc;m, v&igrave; vậy m&agrave; người ta hay gấp đ&ocirc;i lại khi đem ra khỏi chảo. Chỉ cần ăn một hai c&aacute;i l&agrave; đ&atilde; cảm thấy no n&ecirc; rồi.</p>\r\n\r\n<p>&nbsp;</p>', '2019-04-01 03:49:24', '2019-04-04 06:53:23'),
(24, 24, 'Làng nghề chuối khô Cà Mau', 'lang-nghe-chuoi-kho-ca-mau', 'Làng nghề chuối khô Cà Mau', '<p><strong>L&agrave;ng nghề chuối kh&ocirc; C&agrave; Mau</strong>&nbsp;l&agrave; nghề truyền thống c&oacute; từ l&acirc;u đời, l&agrave; nghề cha truyền con nối qua bao đời.<em>&nbsp;</em>Để c&oacute; miếng chuối kh&ocirc;, ngon, dẻo v&agrave; dai ngon&nbsp;phải chọn cho được loại chuối xi&ecirc;m thật gi&agrave;, ch&iacute;n đều. C&aacute;c c&ocirc;ng đoạn l&agrave;m chuối kh&ocirc; tuy dễ, nhưng kh&ocirc;ng phải ai muốn l&agrave;m cũng được. Đầu ti&ecirc;n, chuối được lột hết vỏ mang phơi sau đ&oacute; được cho v&agrave;o khu&ocirc;n &eacute;p mỏng ra, xong mang đi xếp đều l&ecirc;n c&aacute;c vỉ được l&agrave;m bằng tre hoặc sậy để phơi đến khi c&oacute; m&agrave;u v&agrave;ng sậm, thơm, dẻo.&nbsp;<br />\r\n&nbsp;<br />\r\nKh&aacute;c với&nbsp;chuối kh&ocirc; miền Bắc, chuối ở đ&acirc;y được &eacute;p bằng khu&ocirc;n. Khu&ocirc;n &eacute;p được thiết kế h&igrave;nh tr&ograve;n với đường k&iacute;nh từ 20 đến 30 cm, mỗi lần &eacute;p từ 3 đến 5 tr&aacute;i chuối t&ugrave;y theo loại lớn hoặc nhỏ tạo ra những miếng chuối &eacute;p mỏng tr&ograve;n.&nbsp;Chuối kh&ocirc; th&agrave;nh phẩm được ph&acirc;n phối cho c&aacute;c l&ograve; b&aacute;nh kẹo từ c&aacute;c tỉnh An Giang, Vĩnh Long, Đồng Th&aacute;p,&hellip; để chế biến kẹo chuối, chuối kh&ocirc; kh&egrave;o, chuối gừng, nước cốt chuối, rượu chuối&hellip; cung cấp nhu cầu cho người ti&ecirc;u d&ugrave;ng.<br />\r\n<br />\r\nĐến với&nbsp;<strong>l&agrave;ng nghề chuối kh&ocirc; C&agrave; Mau</strong>, c&aacute;c bạn sẽ được h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng kh&iacute; nhộn nhịp nơi đ&acirc;y, được giới thiệu v&agrave; tham gia v&agrave;o c&aacute;c c&ocirc;ng đoạn từ lột vỏ chuối, &eacute;p chuối, phơi chuối, được thưởng thức những miếng chuối kh&ocirc; thơm ngon, dẻo ngọt. V&agrave; thưởng ngoạn khung cảnh phơi chuối tuyệt đẹp tr&ecirc;n mọi nẻo đường m&agrave; kh&ocirc;ng nơi n&agrave;o c&oacute; được.&nbsp;<br />\r\n<br />\r\n<br />\r\n<strong>Địa chỉ:&nbsp;</strong>x&atilde; Trần Hợi huyện Trần Văn Thời, tỉnh&nbsp;C&agrave; Mau</p>\r\n\r\n<p><img alt=\"chuối khô thành phẩm\" src=\"https://toplist8.sgp1.cdn.digitaloceanspaces.com/images/800px/lang-nghe-chuoi-kho-ca-mau-190783.jpg\" /></p>\r\n\r\n<p><em>chuối kh&ocirc; th&agrave;nh phẩm</em></p>\r\n\r\n<p><img alt=\"chuối sau khi ép được mang ra phơi ngoài nắng trên các vỉ tre\" src=\"https://toplist8.sgp1.cdn.digitaloceanspaces.com/images/800px/lang-nghe-chuoi-kho-ca-mau-190785.jpg\" /></p>\r\n\r\n<p><em>chuối sau khi &eacute;p được mang ra phơi ngo&agrave;i nắng tr&ecirc;n c&aacute;c vỉ tre</em></p>', 'h2Z4_lang-nghe-chuoi-kho-ca-mau-190785.jpg', 1, '<p><strong>L&agrave;ng nghề chuối kh&ocirc; C&agrave; Mau</strong>&nbsp;l&agrave; nghề truyền thống c&oacute; từ l&acirc;u đời, l&agrave; nghề cha truyền con nối qua bao đời.<em>&nbsp;</em>Để c&oacute; miếng chuối kh&ocirc;, ngon, dẻo v&agrave; dai ngon&nbsp;phải chọn cho được loại chuối xi&ecirc;m thật gi&agrave;, ch&iacute;n đều. C&aacute;c c&ocirc;ng đoạn l&agrave;m chuối kh&ocirc; tuy dễ, nhưng kh&ocirc;ng phải ai muốn l&agrave;m cũng được. Đầu ti&ecirc;n, chuối được lột hết vỏ mang phơi sau đ&oacute; được cho v&agrave;o khu&ocirc;n &eacute;p mỏng ra, xong mang đi xếp đều l&ecirc;n c&aacute;c vỉ được l&agrave;m bằng tre hoặc sậy để phơi đến khi c&oacute; m&agrave;u v&agrave;ng sậm, thơm, dẻo.&nbsp;</p>', 1, 7, '2019-04-01', '2019-04-01', NULL, '<p><strong>L&agrave;ng nghề chuối kh&ocirc; C&agrave; Mau</strong>&nbsp;l&agrave; nghề truyền thống c&oacute; từ l&acirc;u đời, l&agrave; nghề cha truyền con nối qua bao đời.<em>&nbsp;</em>Để c&oacute; miếng chuối kh&ocirc;, ngon, dẻo v&agrave; dai ngon&nbsp;phải chọn cho được loại chuối xi&ecirc;m thật gi&agrave;, ch&iacute;n đều. C&aacute;c c&ocirc;ng đoạn l&agrave;m chuối kh&ocirc; tuy dễ, nhưng kh&ocirc;ng phải ai muốn l&agrave;m cũng được. Đầu ti&ecirc;n, chuối được lột hết vỏ mang phơi sau đ&oacute; được cho v&agrave;o khu&ocirc;n &eacute;p mỏng ra, xong mang đi xếp đều l&ecirc;n c&aacute;c vỉ được l&agrave;m bằng tre hoặc sậy để phơi đến khi c&oacute; m&agrave;u v&agrave;ng sậm, thơm, dẻo.&nbsp;</p>', '2019-04-01 05:01:40', '2019-04-08 08:45:48'),
(25, 24, 'Làng nghề Bánh phồng Phú Mỹ An Giang', 'lang-nghe-banh-phong-phu-my-an-giang', 'Làng nghề Bánh phồng Phú Mỹ An Giang', '<p>&nbsp;</p>\r\n\r\n<p>V&ugrave;ng đất&nbsp;&nbsp;An Giang từ l&acirc;u nổi tiếng với c&aacute;c đặc sản như mắm Ch&acirc;u Đốc, đường Thốt Nốt, lụa v&agrave; thổ cẩm... Ngo&agrave;i ra khi đến An Giang c&aacute;c bạn c&ograve;n được tham quan l&agrave;ng nghề b&aacute;nh phồng Ph&uacute; Mỹ. L&agrave; l&agrave;ng nghề&nbsp;h&igrave;nh th&agrave;nh, tồn tại v&agrave; ph&aacute;t triển gần 70 năm nay, với hơn&nbsp;50 cơ sở sản xuất. sản phẩm b&aacute;nh phồng nơi đ&acirc;y&nbsp;l&agrave; đặc sản của địa phương, từ l&acirc;u đ&atilde; được nhiều du kh&aacute;ch biết đến v&agrave; thương hiệu &ldquo;<strong>B&aacute;nh phồng Ph&uacute; Mỹ</strong>&rdquo; đang lan tỏa dần ở c&aacute;c tỉnh Đồng bằng s&ocirc;ng Cửu Long.<br />\r\n&nbsp;&nbsp;<br />\r\n<strong>B&aacute;nh phồng Ph&uacute; Mỹ</strong>&nbsp;được l&agrave;m từ loại nếp đặc sản Ph&uacute; T&acirc;n. Nhờ nguồn nguy&ecirc;n liệu nếp đặc sản ri&ecirc;ng biệt n&ecirc;n&nbsp;<strong>b&aacute;nh phồng Ph&uacute; Mỹ</strong>&nbsp;c&oacute; hương vị ri&ecirc;ng, độ thơm, b&eacute;o, ngọt rất kh&aacute;c biệt so với b&aacute;nh phồng những nơi kh&aacute;c. Ch&iacute;nh yếu tố đ&oacute; gi&uacute;p l&agrave;ng nghề tồn tại v&agrave; ph&aacute;t triển cho đến ng&agrave;y nay.&nbsp;<strong>B&aacute;nh phồng Ph&uacute; Mỹ</strong>&nbsp;c&oacute; nhiều loại, trong đ&oacute; hai loại ngon nhất l&agrave; b&aacute;nh phồng sữa v&agrave; b&aacute;nh phồng m&egrave; trắng lu&ocirc;n thu h&uacute;t nhiều kh&aacute;ch h&agrave;ng đặt mua.&nbsp;<br />\r\n<br />\r\nĐến tham quan l&agrave;ng nghề, du kh&aacute;ch sẽ được giới thiệu c&aacute;c c&ocirc;ng đoạn l&agrave;m b&aacute;nh rất c&ocirc;ng phu. Từ kh&acirc;u chọn nếp, đ&atilde;i nếp,&nbsp;x&ocirc;i&nbsp;l&ecirc;n rồi bỏ v&agrave;o cối quết đến khi&nbsp;nhuyễn, đem ra c&aacute;n th&agrave;nh b&aacute;nh, phơi nắng rồi đem v&agrave;o nh&uacute;ng nước đường v&agrave; phơi lại lần nữa cho kh&ocirc; mới đ&oacute;ng g&oacute;i. C&aacute;c phụ gia như đậu, m&egrave;, sữa&hellip; được đưa lần lượt v&agrave;o b&aacute;nh theo từng c&ocirc;ng đoạn với tỷ lệ th&iacute;ch hợp.<br />\r\n<br />\r\n<strong>B&aacute;nh phồng Ph&uacute; Mỹ</strong>&nbsp;nhỏ bằng c&aacute;i dĩa nhưng sau khi nướng ch&iacute;n th&igrave;&nbsp;phồng to hơn c&aacute;i quạt nan. B&aacute;nh vừa xốp, vừa mềm, cắn v&agrave;o nghe &ldquo;phao&rdquo; miệng bởi vị b&eacute;o của nếp, vị ngọt của đường, m&ugrave;i thơm của sữa, m&egrave;, đậu n&agrave;nh, đậu phộng&hellip; tạo n&ecirc;n hương vị đặc trưng v&agrave; kh&ocirc;ng thể thiếu trong bữa ăn ng&agrave;y Tết hay c&aacute;c dịp đ&aacute;m tiệc, cưới hỏi. Đến thăm l&agrave;ng nghề v&agrave;o những ng&agrave;y gi&aacute;p tết Nguy&ecirc;n Đ&aacute;n, du kh&aacute;ch sẽ cảm nhận hết kh&ocirc;ng kh&iacute; nhộn nhịp của một l&agrave;ng nghề truyền thống.&nbsp;&nbsp;<br />\r\n<br />\r\n<strong>Địa chỉ:</strong>&nbsp;thị trấn&nbsp;Ph&uacute; Mỹ, huyện Ph&uacute; T&acirc;n, tỉnh An Giang.</p>\r\n\r\n<p><img alt=\"Bánh phồng sau khi cán, được xếp lên các nan tre và đem phơi nắng\" src=\"https://toplist8.sgp1.cdn.digitaloceanspaces.com/images/800px/lang-nghe-banh-phong-phu-my-an-giang-190888.jpg\" /></p>\r\n\r\n<p><em>B&aacute;nh phồng sau khi c&aacute;n, được xếp l&ecirc;n c&aacute;c nan tre v&agrave; đem phơi nắng</em></p>\r\n\r\n<p><img alt=\"sản phẩm bánh phồng Phú Mỹ đã được nướng chín căng phồng hấp dẫn\" src=\"https://toplist8.sgp1.cdn.digitaloceanspaces.com/images/800px/lang-nghe-banh-phong-phu-my-an-giang-190786.jpg\" /></p>', 'A55z_lang-nghe-banh-phong-phu-my-an-giang-190786.jpg', 1, '<p>V&ugrave;ng đất&nbsp;&nbsp;An Giang từ l&acirc;u nổi tiếng với c&aacute;c đặc sản như mắm Ch&acirc;u Đốc, đường Thốt Nốt, lụa v&agrave; thổ cẩm... Ngo&agrave;i ra khi đến An Giang c&aacute;c bạn c&ograve;n được tham quan l&agrave;ng nghề b&aacute;nh phồng Ph&uacute; Mỹ. L&agrave; l&agrave;ng nghề&nbsp;h&igrave;nh th&agrave;nh, tồn tại v&agrave; ph&aacute;t triển gần 70 năm nay, với hơn&nbsp;50 cơ sở sản xuất. sản phẩm b&aacute;nh phồng nơi đ&acirc;y&nbsp;l&agrave; đặc sản của địa phương, từ l&acirc;u đ&atilde; được nhiều du kh&aacute;ch biết đến v&agrave; thương hiệu &ldquo;<strong>B&aacute;nh phồng Ph&uacute; Mỹ</strong>&rdquo; đang lan tỏa dần ở c&aacute;c tỉnh Đồng bằng s&ocirc;ng Cửu Long.</p>', 1, 3, '2019-04-01', '2019-04-01', NULL, '<p>V&ugrave;ng đất&nbsp;&nbsp;An Giang từ l&acirc;u nổi tiếng với c&aacute;c đặc sản như mắm Ch&acirc;u Đốc, đường Thốt Nốt, lụa v&agrave; thổ cẩm... Ngo&agrave;i ra khi đến An Giang c&aacute;c bạn c&ograve;n được tham quan l&agrave;ng nghề b&aacute;nh phồng Ph&uacute; Mỹ. L&agrave; l&agrave;ng nghề&nbsp;h&igrave;nh th&agrave;nh, tồn tại v&agrave; ph&aacute;t triển gần 70 năm nay, với hơn&nbsp;50 cơ sở sản xuất. sản phẩm b&aacute;nh phồng nơi đ&acirc;y&nbsp;l&agrave; đặc sản của địa phương, từ l&acirc;u đ&atilde; được nhiều du kh&aacute;ch biết đến v&agrave; thương hiệu &ldquo;<strong>B&aacute;nh phồng Ph&uacute; Mỹ</strong>&rdquo; đang lan tỏa dần ở c&aacute;c tỉnh Đồng bằng s&ocirc;ng Cửu Long.</p>', '2019-04-01 05:23:57', '2019-04-10 17:14:43'),
(27, 24, '8 quán bánh khọt ngon ở Sài Gòn bạn không nên bỏ qua', '8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-qua', '8 quán bánh khọt ngon ở Sài Gòn bạn không nên bỏ qua', '<p><strong>1.&nbsp;B&aacute;nh Khọt C&ocirc; Ba Vũng T&agrave;u</strong></p>\r\n\r\n<p>Qu&aacute;n b&aacute;nh khọt C&ocirc; Ba Vũng T&agrave;u g&acirc;y ấn tượng s&acirc;u sắc về hương vị trong l&ograve;ng thực kh&aacute;ch khi một lần gh&eacute; đến.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-qua4a453837635845650690101087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-qua72a5bd85635845650929093087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quad27bc5b0635845651031741087.jpg\" /></p>\r\n\r\n<p>B&aacute;nh khọt ở đ&acirc;y c&oacute; độ gi&ograve;n thơm, nh&acirc;n c&oacute; vị b&eacute;o của nước cốt dừa, b&ugrave;i từ bột gạo, &nbsp;ăn c&ugrave;ng với rau xanh v&agrave; nước mắm chua ngọt th&igrave; c&ograve;n g&igrave; bằng.</p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-qua67786725635845651241561087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quad8f80644635845652057285087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quaca5d4952635845651565729087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quaa2231777635845651733897087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quaac625240635845651938257087.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i nh&acirc;n t&ocirc;m, bạn c&ograve;n được thưởng thức b&aacute;nh khọt với nh&acirc;n đa dạng &nbsp;như: &nbsp;S&ograve; điệp, thịt bằm, chả c&aacute;, t&ocirc;m&hellip;&nbsp;</p>\r\n\r\n<p><strong><em>+++Địa chỉ: 102 Cao Thắng, P.4, Q.3, TP.HCM</em></strong></p>\r\n\r\n<p><em><strong><a href=\"http://forum.diadiemanuong.com/home/f43/banh-khot-co-ba-vung-tau-67078/\">*** Tham khảo th&ecirc;m địa chỉ v&agrave; review***</a></strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Tiệm b&aacute;nh khọt Khanh</strong></p>\r\n\r\n<p>Nằm tr&ecirc;n con đường Đồng Nai tấp nập c&ugrave;ng với nhiều h&agrave;ng qu&aacute;n nhỏ lớn đan xen nhưng b&aacute;nh khọt Khanh vẫn được rất nhiều người biết tới l&agrave; nhờ hương vị đặc biệt của b&aacute;nh khọt gốc ở Vũng T&agrave;u.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-qua6b2a3fe8635845652960993087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quaea85f255635845653083297087.jpg\" /></p>\r\n\r\n<p><img src=\"http://cdn01.diadiemanuong.com/ddau/640x/diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-quaefbe37dc635845653260825087.jpg\" /></p>', 'XI45_diadiemanuong-com-8-quan-banh-khot-ngon-o-sai-gon-ban-khong-nen-bo-qua4a453837635845650690101087.jpg', 1, 'Nếu thèm bánh khọt  bạn không cần phải ra tận Vũng tàu để thưởng thức. Ở Sài Gòn cũng có nhiều quán làm bánh khọt ngon không kém, bạn có thể tham khảo một số địa chỉ bên dưới nhé!', 1, 4, '2019-04-02', '2019-04-08', NULL, 'Nếu thèm bánh khọt  bạn không cần phải ra tận Vũng tàu để thưởng thức. Ở Sài Gòn cũng có nhiều quán làm bánh khọt ngon không kém, bạn có thể tham khảo một số địa chỉ bên dưới nhé!', '2019-04-02 06:01:00', '2019-04-11 04:15:16'),
(28, 34, 'Bí kíp cho những món ăn phải có trong ngày Tết', 'bi-kip-cho-nhung-mon-an-phai-co-trong-ngay-tet', 'Bí kíp cho những món ăn phải có trong ngày Tết', '<p><strong>1. Mẹo luộc thịt g&agrave;:</strong></p>\r\n\r\n<p>M&acirc;m cỗ c&uacute;ng kh&ocirc;ng thể n&agrave;o thiếu m&oacute;n g&agrave; luộc. Thịt g&agrave; luộc v&agrave;ng ươm, để nguy&ecirc;n con hoặc chặt ra từng miếng cũng đều l&agrave;m cho m&acirc;m th&ecirc;m đầy đặn, sum vầy. C&aacute;ch luộc g&agrave; cho thật ngon kh&ocirc;ng kh&oacute;, nhưng bạn sẽ lu&ocirc;n cần th&ecirc;m v&agrave;i mẹo gi&uacute;p m&oacute;n g&agrave; kh&ocirc;ng chỉ ngon m&agrave; c&ograve;n bắt mắt để được l&ograve;ng cả nh&agrave;.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2016/a1-1452873091958.png\" target=\"_blank\"><img alt=\"Bí kíp cho những món ăn phải có trong ngày Tết - Ảnh 1.\" src=\"https://kenh14cdn.com/2016/a1-1452873091958.png\" style=\"width:580px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://kenh14.vn/made-by-me/bi-kip-luoc-ga-ngon-lanh-ai-cung-co-the-lam-20130208094758305.chn\"><img alt=\"Bí kíp cho những món ăn phải có trong ngày Tết - Ảnh 2.\" src=\"https://kenh14cdn.com/2015/banner-1451485160526.png\" style=\"width:580px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><strong>2. G&agrave; x&eacute; phay:</strong></p>\r\n\r\n<p>B&ecirc;n cạnh g&agrave; luộc, một m&oacute;n thịt kh&ocirc;ng thể thiếu trong m&acirc;m c&uacute;ng ng&agrave;y Tết l&agrave; g&agrave; x&eacute; phay. G&agrave; x&eacute; phay ngon ở phần xử l&yacute; nguy&ecirc;n liệu, khiến m&oacute;n ăn rất h&agrave;i ho&agrave; về hương vị. G&agrave; x&eacute; phay cũng rất dễ ăn, l&agrave; m&oacute;n &quot;gắp v&agrave;o gắp ra&quot; trong m&acirc;m cỗ, cho bữa cơm sum vầy đ&atilde; vui lại c&ograve;n vui hơn.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2016/a2-1452873092143.png\" target=\"_blank\"><img alt=\"Bí kíp cho những món ăn phải có trong ngày Tết - Ảnh 4.\" src=\"https://kenh14cdn.com/2016/a2-1452873092143.png\" style=\"width:580px\" /></a></p>', 'yrc1_banner-1452873091863-0-0-300-681-crop-1452874204165.png', 1, '<p>M&aacute;ch bạn l&agrave;m m&oacute;n ăn ng&agrave;y tết</p>', 1, 16, '2019-04-04', '2019-04-04', NULL, '<p>M&aacute;ch bạn l&agrave;m m&oacute;n ăn ng&agrave;y tết</p>', '2019-04-04 07:57:38', '2019-04-11 04:08:05'),
(29, 8, 'Văn hoá ẩm thực truyền thống của người Việt Nam', 'van-hoa-am-thuc-truyen-thong-cua-nguoi-viet-nam', 'văn hoá ẩm thực truyền thống của người việt nam', '<p>với những đạo l&yacute;, ph&eacute;p tắc cũng như phong tục trong c&aacute;ch ăn uống ở nước ta&hellip;</p>\r\n\r\n<p><strong>Ẩm thực truyền thống Việt Nam</strong>&nbsp;l&agrave; một n&eacute;t đẹp kh&ocirc;ng thể thiếu. V&agrave; cần được ph&aacute;t triển để bạn b&egrave; Thế giới c&oacute; thể biết đến v&agrave; đ&oacute;n nhận. Dưới đ&acirc;y&nbsp;<em><a href=\"https://tapdoanlavong.net/\">tập đo&agrave;n L&atilde; Vọng</a></em>&nbsp;với gần 20 năm trong ng&agrave;nh ẩm thực, ch&uacute;ng t&ocirc;i xin được chia sẻ với mọi người những n&eacute;t đẹp&nbsp;<strong>văn ho&aacute; ẩm thực truyền thống của người Việt</strong>.</p>\r\n\r\n<p><a href=\"https://tapdoanlavong.net/wp-content/uploads/2018/03/am-th%E1%BB%B1c-vn.bmp\"><img alt=\"Văn hóa ẩm thực truyền thống\" src=\"https://tapdoanlavong.net/wp-content/uploads/2018/03/am-th%E1%BB%B1c-vn.bmp\" style=\"height:347px; width:451px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>N&eacute;t văn h&oacute;a ẩm thực truyền thống người Việt</strong></h2>\r\n\r\n<p>Ẩm thực truyền thống người Việt được biết đến với nhiều n&eacute;t đặc trưng như: T&iacute;nh h&ograve;a đồng, độ đa dạng, &iacute;t mỡ; đậm đ&agrave; hương vị với nhiều loại gia giảm kết hợp để tăng m&ugrave;i vị, sức hấp dẫn trong từng m&oacute;n ăn. Việc ăn th&agrave;nh m&acirc;m hay sử dụng đũa v&agrave; đặc biệt trong bữa ăn kh&ocirc;ng thể thiếu cơm trắng ch&iacute;nh l&agrave; tập qu&aacute;n chung của cả d&acirc;n tộc Việt Nam ta.</p>\r\n\r\n<p>B&ecirc;n cạnh những n&eacute;t chung về ẩm thực th&igrave; mỗi một v&ugrave;ng miền lại n&eacute;t đặc trưng ẩm thực v&ugrave;ng miền ri&ecirc;ng:</p>\r\n\r\n<p><em>Ẩm thực miền Bắc:</em></p>\r\n\r\n<p><img alt=\"Ẩm thực miền Bắc\" src=\"https://tapdoanlavong.net/wp-content/uploads/2018/03/amthucbac3.jpg\" style=\"height:600px; width:800px\" /></p>\r\n\r\n<p>M&oacute;n ăn miền Bắc thường c&oacute; vị vừa phải, kh&ocirc;ng qu&aacute; nồng nhưng lại c&oacute; m&agrave;u sắc kh&aacute; sặc sỡ, thường kh&ocirc;ng đậm vị cay, b&eacute;o, ngọt, chủ yếu sử dụng nước mắm hơi lo&atilde;ng hay mắm t&ocirc;m. H&agrave; Nội được xem như tinh hoa ẩm thực của miền Bắc với nhiều m&oacute;n ăn ngon như phở, b&uacute;n thang, b&uacute;n chả, b&uacute;n ốc, cốm l&agrave;ng V&ograve;ng hay b&aacute;nh cuốn Thanh tr&igrave; hoặc gia vị đặc sắc như tinh dầu c&agrave; cuống, rau h&uacute;ng L&aacute;ng.</p>\r\n\r\n<p>Ẩm thực miền Trung:</p>\r\n\r\n<p><img alt=\"Ẩm thực miền Trung\" src=\"https://tapdoanlavong.net/wp-content/uploads/2018/03/am-thuc-mien-trung-3.jpg\" style=\"height:530px; width:900px\" /></p>\r\n\r\n<p>Về với miền Trung, người ta lại ưa d&ugrave;ng c&aacute;c m&oacute;n ăn c&oacute; vị đậm đ&agrave; hơn, nồng độ mạnh. T&iacute;nh đặc sắc c&oacute; thể thể hiện qua những hương vị đặc biệt, nhiều m&oacute;n cay hơn ẩm thực miền Bắc v&agrave; miền Nam. M&agrave;u sắc được phối trộn kh&aacute; phong ph&uacute;, rực rỡ, thi&ecirc;n về m&agrave;u đỏ hay n&acirc;u sậm. Ẩm thực miền Trung thường nổi tiếng với mắm t&ocirc;m chua hoặc c&aacute;c loại mắm ruốc. Ẩm thực cung đ&igrave;nh Huế c&oacute; rất nhiều điểm đặc biệt, với phong c&aacute;ch ẩm thực ho&agrave;ng gia kh&ocirc;ng chỉ c&oacute; vị rất cay, rất nhiều m&agrave;u sắc m&agrave; c&ograve;n ch&uacute; trọng v&agrave;o số lượng đa dạng c&aacute;c m&oacute;n ăn, c&aacute;ch b&agrave;y tr&iacute; c&aacute;c m&oacute;n.</p>\r\n\r\n<p>Ẩm thực miền Nam:</p>\r\n\r\n<p><img alt=\"Ẩm thực miền Nam\" src=\"https://tapdoanlavong.net/wp-content/uploads/2018/03/dac-trung-am-thuc-3-mien-dat-nuoc-33.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Do chịu nhiều ảnh hưởng từ ẩm thực Trung Hoa, Campuchia hay Th&aacute;i Lan n&ecirc;n c&aacute;c m&oacute;n ăn của người miền Nam thường c&oacute; độ ngọt, độ cay. Phổ biến với c&aacute;c loại mắm như: mắm c&aacute; sặc, mắm b&ograve; h&oacute;c, mắm ba kh&iacute;a&hellip; C&oacute; nhiều m&oacute;n ăn d&acirc;n d&atilde;, đặc th&ugrave; như: chuột đồng kh&igrave;a nước dừa, dơi quạ hấp chao, rắn hổ đất nấu ch&aacute;o đậu xanh, đu&ocirc;ng đất, đu&ocirc;ng ch&agrave; l&agrave;, vọp chong, hay đu&ocirc;ng dừa, c&aacute; l&oacute;c nướng trui&hellip;</p>', '9Ypx_bua-com-viet.jpg', 1, 'Văn hóa ẩm thực truyền thống là nét văn hóa tự nhiên trong cuộc sống đời thường. Đối với người Việt Nam, ẩm thực không những là nét văn hóa về vật chất mà còn là văn hóa truyền thống về tinh thần. Qua những nét đẹp từ ẩm thực người ta có thể hiểu biết thêm về văn hóa Việt Nam thể hiện rõ nét phẩm giá con người,', 0, 13, '2019-04-04', '2019-04-04', NULL, 'Văn hóa ẩm thực truyền thống là nét văn hóa tự nhiên trong cuộc sống đời thường. Đối với người Việt Nam, ẩm thực không những là nét văn hóa về vật chất mà còn là văn hóa truyền thống về tinh thần. Qua những nét đẹp từ ẩm thực người ta có thể hiểu biết thêm về văn hóa Việt Nam thể hiện rõ nét phẩm giá con người,', '2019-04-04 08:29:49', '2019-04-11 04:08:08'),
(30, 22, 'Sự thay đổi thần thánh giữa căn bếp xưa và nay', 'su-thay-doi-than-thanh-giua-can-bep-xua-va-nay', 'sự thay đổi thần thánh giữa căn bếp xưa và nay', '<p><strong>Gian bếp xưa mộc mạc, giản dị</strong></p>\r\n\r\n<p>Trở về gian bếp xưa của người d&acirc;n Việt Nam với d&aacute;ng vẻ mộc mạc, đơn sơ song v&ocirc; c&ugrave;ng gần gũi, căn bếp thường chia l&agrave;m hai gian, một b&ecirc;n để tủ chạn, c&aacute;c vật dụng đơn giản để sơ chế lương thực, v&agrave; nong, nia, dần, s&agrave;ng; gian c&ograve;n lại để bếp lửa v&agrave; chứa c&aacute;c chất đốt như rơm rạ, củi kh&ocirc;.</p>\r\n\r\n<p>Xưa nay, h&igrave;nh ảnh người phụ nữ lu&ocirc;n gắn liền với gian bếp lửa. Bởi đặc t&iacute;nh kh&eacute;o l&eacute;o, cần mẫn vốn c&oacute;, họ lu&ocirc;n đảm nhiệm vai tr&ograve; bếp n&uacute;c của mỗi gia đ&igrave;nh. Do đ&oacute;, khi xem x&eacute;t, đ&aacute;nh gi&aacute; c&aacute;i nết của một người phụ nữ, &ocirc;ng b&agrave; ta c&oacute; c&acirc;u &quot;Xem trong bếp, biết nết đ&agrave;n b&agrave;&quot;. C&aacute;c vật dụng của gian bếp xưa đơn sơ, &iacute;t ỏi nhưng được sắp xếp ngay ngắn, gọn g&agrave;ng dưới b&agrave;n tay của người b&agrave;, người mẹ.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng nhớ lại chiếc chạn &quot;thần th&aacute;nh&quot; - một vật dụng kh&ocirc;ng thể thiếu của mỗi gian bếp ng&agrave;y xưa. Chạn thường c&oacute; nhiều ngăn, ngăn dưới để b&aacute;t đũa, xoong nồi, ngăn tr&ecirc;n l&agrave; nơi cất giữ, bảo quản thức ăn cho cả gia đ&igrave;nh. H&igrave;nh ảnh những chiếc chạn bọc lưới cũ kỹ n&agrave;y gợi nhớ đến thời khi thức ăn chỉ được bảo quản một c&aacute;ch đơn giản, sơ s&agrave;i.</p>\r\n\r\n<p><img alt=\"Ở gian bếp ngày xưa, thức ăn được bảo quản, cất giữ trong các ngăn chạn có nắp, do đó mà mùi thức ăn luôn lưu lại trong bếp\" src=\"https://image.thanhnien.vn/660/uploaded/dieutrang.qc/2018_03_08/lg/2_nqhk.jpg\" /></p>\r\n\r\n<p>Ở gian bếp ng&agrave;y xưa, thức ăn được bảo quản, cất giữ trong c&aacute;c ngăn chạn c&oacute; nắp, do đ&oacute; m&agrave; m&ugrave;i thức ăn lu&ocirc;n lưu lại trong bếp</p>\r\n\r\n<p><strong>Căn bếp ng&agrave;y nay - hiện đại v&agrave; tiện nghi</strong></p>\r\n\r\n<p>Qua c&aacute;c thời kỳ, đi c&ugrave;ng với sự ph&aacute;t triển của kinh tế - x&atilde; hội, gian bếp Việt dần đổi mới v&agrave; được trang bị th&ecirc;m nhiều tiện nghi. Đ&atilde; kh&ocirc;ng c&ograve;n quan niệm bếp l&agrave; nơi để những thứ lỉnh kỉnh, linh tinh m&agrave; thay v&agrave;o đ&oacute; bếp l&agrave; kh&ocirc;ng gian s&aacute;ng tạo, t&ocirc;n vinh khả năng của c&aacute;c b&agrave; nội trợ.</p>\r\n\r\n<p>Sự &ldquo;n&acirc;ng cấp&rdquo; của gian bếp k&eacute;o theo sự thay đổi vai tr&ograve; của người phụ nữ. Nếu như ng&agrave;y xưa, người phụ nữ c&oacute; thể mất h&agrave;ng giờ đồng hồ cặm cụi việc bếp n&uacute;c th&igrave; ng&agrave;y nay, với sự hỗ trợ của c&aacute;c thiết bị nh&agrave; bếp hiện đại, thời gian cho c&ocirc;ng việc nội trợ được r&uacute;t ngắn hơn rất nhiều.</p>\r\n\r\n<h3>TIN LI&Ecirc;N QUAN</h3>\r\n\r\n<ul>\r\n	<li><a href=\"https://thanhnien.vn/cong-nghe/nhung-xu-huong-dien-tu-gia-dung-dep-va-thong-minh-len-ngoi-nam-2018-932667.html\">Những xu hướng điện tử gia dụng đẹp v&agrave; th&ocirc;ng minh l&ecirc;n ng&ocirc;i năm 2018</a></li>\r\n</ul>\r\n\r\n<p><img alt=\"Ngày nay, với sự đồng hành của các sản phẩm gia dụng hiện đại thì việc bếp núc không cong là nhiệm vụ nữa mà là niềm vui đối với mỗi người phụ nữ\" src=\"https://image.thanhnien.vn/660/uploaded/dieutrang.qc/2018_03_08/lg/3_ehxb.png\" /></p>\r\n\r\n<p>Ng&agrave;y nay, với sự đồng h&agrave;nh của c&aacute;c sản phẩm gia dụng hiện đại th&igrave; việc bếp n&uacute;c kh&ocirc;ng c&ograve;n l&agrave; nhiệm vụ m&agrave; l&agrave; niềm vui đối với mỗi người phụ nữ</p>\r\n\r\n<p>Thay v&igrave; trước đ&acirc;y c&aacute;c b&agrave; nội trợ phải đi chợ hằng ng&agrave;y để chuẩn bị bữa ăn cho cả gia đ&igrave;nh th&igrave; giờ đ&acirc;y với những chiếc tủ lạnh hiện đại, họ chỉ cần đi chợ 1-2 lần/tuần m&agrave; vẫn c&oacute; thể lưu trữ v&agrave; lu&ocirc;n bảo đảm thực phẩm tươi ngon. Chiếc tủ lạnh gần như đ&atilde; trở th&agrave;nh một &ldquo;cộng sự&rdquo; đắc lực cho chị em trong gian bếp ng&agrave;y nay, trong đ&oacute; kh&ocirc;ng thể kh&ocirc;ng nhắc đến c&aacute;c d&ograve;ng tủ lạnh cao cấp của LG.</p>\r\n\r\n<p><img alt=\"Với chức năng căn bản không chỉ thay thế chiếc chạn ngày xưa, các dòng tủ lạnh cao cấp của LG còn tích hợp nhiều tính năng hiện đại giúp lưu trữ thức ăn tươi ngon hơn nhờ công nghệ kiểm soát nhiệt độ và độ ẩm tối ưu\" src=\"https://image.thanhnien.vn/660/uploaded/dieutrang.qc/2018_03_08/lg/3_emni.jpg\" /></p>\r\n\r\n<p>Với chức năng căn bản kh&ocirc;ng chỉ thay thế chiếc chạn ng&agrave;y xưa, c&aacute;c d&ograve;ng tủ lạnh cao cấp của LG c&ograve;n t&iacute;ch hợp nhiều t&iacute;nh năng hiện đại gi&uacute;p lưu trữ thức ăn tươi ngon hơn nhờ c&ocirc;ng nghệ kiểm so&aacute;t nhiệt độ v&agrave; độ ẩm tối ưu</p>\r\n\r\n<p>Ngo&agrave;i trợ thủ đắc lực l&agrave; chiếc tủ lạnh gi&uacute;p lưu trữ thức ăn lu&ocirc;n tươi ngon, LG c&ograve;n trang bị cho gian bếp của phụ nữ ng&agrave;y nay những thiết bị gia dụng cao cấp như l&ograve; vi s&oacute;ng, l&ograve; nướng, m&aacute;y rửa b&aacute;t&hellip; với nhiều t&iacute;nh năng v&agrave; c&ocirc;ng nghệ hiện đại, đem lại một căn bếp thực sự th&ocirc;ng minh, cho chị em những trải nghiệm mới mẻ v&agrave; n&acirc;ng cao chất lượng cuộc sống mỗi ng&agrave;y.</p>', '2tNU_1_vpoc.jpg', 1, 'Đối với người Việt Nam, gian bếp không chỉ là nơi chế biến, thưởng thức các món ăn ngon mà còn là nơi đoàn tụ, chia sẻ tình cảm của các thành viên trong gia đình sau những ngày làm việc và học tập vất vả.', 0, 11, '2019-04-04', '2019-04-04', NULL, 'Đối với người Việt Nam, gian bếp không chỉ là nơi chế biến, thưởng thức các món ăn ngon mà còn là nơi đoàn tụ, chia sẻ tình cảm của các thành viên trong gia đình sau những ngày làm việc và học tập vất vả.', '2019-04-04 08:45:34', '2019-04-08 08:45:41'),
(31, 30, 'Tưng bừng các hoạt động văn hóa tại Lạng Sơn', 'tung-bung-cac-hoat-dong-van-hoa-tai-lang-son', 'tưng bừng các hoạt động văn hóa tại lạng sơn', '<p>Điểm nhấn l&agrave; m&agrave;n rước kiệu độc đ&aacute;o của Lễ hội Tả Phủ - Kỳ C&ugrave;ng v&agrave; Lễ hội đầu ph&aacute;o Tả Phủ - Kỳ Lừa.</p>\r\n\r\n<p>C&ugrave;ng với đ&oacute;, tr&ecirc;n địa b&agrave;n th&agrave;nh phố&nbsp;<a href=\"https://vtv.vn/lang-son.html\" target=\"_blank\">Lạng Sơn</a>&nbsp;đồng loạt diễn ra c&aacute;c hoạt động văn h&oacute;a, nghệ thuật, thể thao đặc sắc, hấp dẫn như: Hội chợ giới thiệu c&aacute;c sản phẩm đặc trưng của địa phương; hội thi ẩm thực với c&aacute;c m&oacute;n ăn truyền thống như lợn quay, vịt quay; biểu diễn v&otilde; thuật; đua xe đạp từ th&agrave;nh phố Lạng Sơn đến cửa khẩu Hữu Nghị; hội thảo đ&aacute;nh thức tiềm năng du lịch th&agrave;nh phố Lạng Sơn&hellip;</p>', 'h8k4_ls2-15516750053691964952303.jpg', 1, 'Cùng với đó, trên địa bàn thành phố Lạng Sơn đồng loạt diễn ra các hoạt động văn hóa, nghệ thuật, thể thao đặc sắc, hấp dẫn như: Hội chợ giới thiệu các sản phẩm đặc trưng của địa phương; hội thi ẩm thực với các món ăn truyền thống như lợn quay, vịt quay; biểu diễn võ thuật; đua xe đạp từ thành phố Lạng Sơn đến cửa khẩu Hữu Nghị; hội thảo đánh thức tiềm năng du lịch thành phố Lạng Sơn…', 0, 14, '2019-04-04', '2019-04-04', NULL, 'Cùng với đó, trên địa bàn thành phố Lạng Sơn đồng loạt diễn ra các hoạt động văn hóa, nghệ thuật, thể thao đặc sắc, hấp dẫn như: Hội chợ giới thiệu các sản phẩm đặc trưng của địa phương; hội thi ẩm thực với các món ăn truyền thống như lợn quay, vịt quay; biểu diễn võ thuật; đua xe đạp từ thành phố Lạng Sơn đến cửa khẩu Hữu Nghị; hội thảo đánh thức tiềm năng du lịch thành phố Lạng Sơn…', '2019-04-04 09:04:04', '2019-04-09 13:03:10'),
(32, 2, 'TẦM NHÌN VÀ SỨ MỆNH NGHỀ BẾP', 'tam-nhin-va-su-menh-nghe-bep', 'tầm nhìn và sứ mệnh nghề bếp', '<p>Hiện nay,&nbsp;<a href=\"https://daotaobeptruong.vn/nghe-bep\">nghề đầu bếp</a>&nbsp;ph&aacute;t triển mạnh cả về số lượng lẫn chất lượng do tốc độ ph&aacute;t triển của c&aacute;c kh&aacute;ch sạn, nh&agrave; h&agrave;ng ng&agrave;y một tăng cao. Tuy nhi&ecirc;n, điểm qua c&aacute;c trường đ&agrave;o tạo bếp chuy&ecirc;n nghiệp tại TPHCM chỉ đếm tr&ecirc;n đầu ng&oacute;n tay.</p>\r\n\r\n<p>Nguồn đầu bếp tại c&aacute;c nh&agrave; h&agrave;ng, kh&aacute;ch sạn hầu hết đều kh&ocirc;ng qua trường lớp đ&agrave;o tạo b&agrave;i bản m&agrave; chủ yếu l&agrave; &ldquo;tự học l&agrave; ch&iacute;nh&rdquo; hoặc th&ocirc;ng qua c&aacute;c lớp bếp gia đ&igrave;nh, trong khi đ&oacute; c&aacute;c nh&agrave; h&agrave;ng, kh&aacute;ch sạn th&igrave; đ&ograve;i hỏi đội ngũ nh&acirc;n lực đầu bếp &ldquo;chất lượng cao&rdquo;; họ thường xuy&ecirc;n t&igrave;m kiếm những đầu bếp chuy&ecirc;n nghiệp. Do đ&oacute; b&ecirc;n cạnh sứ mệnh của nghề bếp l&agrave; đ&agrave;o tạo những thế hệ đầu bếp chuy&ecirc;n nghiệp giỏi chuy&ecirc;n m&ocirc;n cũng như c&oacute; đạo đức nghề nghiệp th&igrave; tầm nh&igrave;n của nghề bếp l&agrave; đ&agrave;o tạo ra một đội ngũ nh&acirc;n lực dồi d&agrave;o.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><em><img alt=\"Tầm nhìn và sứ mệnh của nghề bếp\" src=\"https://daotaobeptruong.vn/images/daotaobeptruong/tam-nhin-va-su-menh-nghe-bep.jpg\" style=\"width:600px\" /></em></p>\r\n\r\n<p><em>Cần đ&agrave;o tạo một đội ngũ đầu bếp chuy&ecirc;n nghiệp để đ&aacute;p ứng nhu cầu của x&atilde; hội&nbsp;</em></p>\r\n\r\n<p>Để đ&agrave;o tạo nghiệp vụ nghề bếp chuy&ecirc;n nghiệp, phải đ&agrave;o tạo cho học vi&ecirc;n từ những kiến thức ẩm thực nền tảng trước, sau đ&oacute; l&agrave; th&agrave;nh thạo c&aacute;c kỹ năng, phương ph&aacute;p chế biến m&oacute;n ăn. B&ecirc;n cạnh đ&oacute;, người đầu bếp cũng c&oacute; vai tr&ograve; như một b&aacute;c sĩ dinh dưỡng, n&ecirc;n cần phải học th&ecirc;m những kiến thức cơ bản về ẩm thực, biết c&aacute;ch phối hợp nguy&ecirc;n liệu, c&aacute;c phương ph&aacute;p chế biến để m&oacute;n ăn gi&agrave;u dinh dưỡng v&agrave; an to&agrave;n vệ sinh thực phẩm. Ngo&agrave;i ra, người đầu bếp phải lu&ocirc;n thay đổi c&aacute;ch chế biến để mang đến sự mới mẻ cho thực kh&aacute;ch. Cuối c&ugrave;ng, nghiệp vụ cao nhất của nghề bếp l&agrave; nghiệp vụ bếp trưởng, đ&acirc;y cũng l&agrave; một nấc thang m&agrave; những người l&agrave;m c&ocirc;ng t&aacute;c đ&agrave;o tạo trong nghề bếp phải hướng tới. Tuy nhi&ecirc;n, đ&agrave;o tạo được những đầu bếp giỏi chuy&ecirc;n m&ocirc;n chỉ l&agrave; ho&agrave;n th&agrave;nh một nửa sứ mệnh nghề bếp. Đ&agrave;o tạo được người đầu bếp vừa giỏi vừa c&oacute; t&acirc;m với nghề mới l&agrave; c&aacute;i đ&iacute;ch m&agrave; nghề bếp cần hướng tới.</p>\r\n\r\n<p>Thấy được tầm nh&igrave;n v&agrave; hiểu r&otilde; &yacute; nghĩa sứ mệnh của nghề bếp, Hướng Nghiệp &Aacute; &Acirc;u l&agrave; một trong những đơn vị ti&ecirc;n phong đ&agrave;o tạo đầu bếp chuy&ecirc;n nghiệp h&agrave;ng đầu hiện nay lu&ocirc;n hướng đến việc đ&agrave;o tạo những đầu bếp vừa c&oacute; chuy&ecirc;n m&ocirc;n vừa c&oacute; đạo đức nghề nghiệp. Để l&agrave;m được điều đ&oacute;, Hướng Nghiệp &Aacute; &Acirc;u đ&atilde; đầu tư v&agrave;o đội ngũ giảng vi&ecirc;n, mời những bếp trưởng nh&agrave; h&agrave;ng kh&aacute;ch sạn lớn tại Việt Nam, c&aacute;c si&ecirc;u đầu bếp, c&aacute;c chuy&ecirc;n gia ẩm thực về đ&agrave;o tạo cho học vi&ecirc;n. Cũng như gi&uacute;p học vi&ecirc;n của m&igrave;nh cam kết những điều t&acirc;m niệm của người đầu bếp. Một trong những điều đ&oacute; l&agrave; &ldquo;l&agrave;m bếp với tất cả t&igrave;nh y&ecirc;u v&agrave; niềm đam m&ecirc; cao độ v&agrave; xem kh&aacute;ch h&agrave;ng như những người th&acirc;n y&ecirc;u trong gia đ&igrave;nh&rdquo;. Những điều n&agrave;y tưởng chừng rất nhỏ, nhưng n&oacute; ch&iacute;nh l&agrave; nền tảng cho một thế hệ đầu bếp c&oacute; t&agrave;i v&agrave; c&oacute; t&acirc;m.</p>', 'BhWe_tam-nhin-va-su-menh-nghe-bep.jpg', 1, 'Hiện nay, nghề đầu bếp phát triển mạnh cả về số lượng lẫn chất lượng do tốc độ phát triển của các khách sạn, nhà hàng ngày một tăng cao. Tuy nhiên, điểm qua các trường đào tạo bếp chuyên nghiệp tại TPHCM chỉ đếm trên đầu ngón tay', 0, 22, '2019-04-05', '2019-04-05', NULL, 'Hiện nay, nghề đầu bếp phát triển mạnh cả về số lượng lẫn chất lượng do tốc độ phát triển của các khách sạn, nhà hàng ngày một tăng cao. Tuy nhiên, điểm qua các trường đào tạo bếp chuyên nghiệp tại TPHCM chỉ đếm trên đầu ngón tay', '2019-04-05 03:19:18', '2019-04-10 15:00:28');
INSERT INTO `tintuc` (`id`, `idLoaiTin`, `TieuDe`, `TieuDeKhongDau`, `SEOTitle`, `NoiDung`, `Hinh`, `HienThi`, `TomTat`, `NoiBat`, `SoLuotXem`, `NgayTao`, `NgaySua`, `SEONoiDung`, `SEOTomTat`, `created_at`, `updated_at`) VALUES
(33, 24, 'LÀNG NGHỀ GỐM PHƯỚC TÍCH', 'lang-nghe-gom-phuoc-tich', 'làng nghề gốm phước tích', '<p>T&ecirc;n x&atilde; Phong H&ograve;a xưa l&agrave; x&atilde; Phong L&acirc;u (do ở b&ecirc;n bờ s&ocirc;ng &Ocirc; L&acirc;u). L&agrave;ng Phước T&iacute;ch tiện cho việc th&ocirc;ng thương bằng đường thủy để khai th&aacute;c nguy&ecirc;n liệu v&agrave; chở sản phẩm gốm đi b&aacute;n. Quanh l&agrave;ng kh&ocirc;ng c&oacute; đất s&eacute;t v&agrave; rất hiếm củi, nhưng theo c&aacute;c gia phả v&agrave; k&yacute; ức người gi&agrave; th&igrave; suốt từ đời Minh Mạng đến đời Khải Định, h&agrave;ng th&aacute;ng l&agrave;ng phải d&acirc;ng nộp triều đ&igrave;nh Huế 30 chiếc &ldquo;om ngự&rdquo; l&agrave;m nồi nấu cơm cho vua, ăn xong vứt bỏ. Do đ&oacute; l&agrave;ng được đặc &acirc;n đi c&aacute;c nơi khai th&aacute;c những g&igrave; cần cho nghề: v&agrave;o rừng ở tru&ocirc;ng Đ&ocirc;ộc (Đ&ocirc;ộc: gốm) (nay thuộc Mỹ Xuy&ecirc;n c&ugrave;ng x&atilde;) lấy củi, sang cồn Gi&oacute;ng (nay x&atilde; Hải Ch&aacute;nh) sau sang Dương Kh&aacute;nh (nay x&atilde; Hải Dương) huyện Hải Lăng, Quảng Trị lấy đất s&eacute;t. Sản phẩm truyền thống &ldquo;độc Phước T&iacute;ch&rdquo; c&oacute; lu (chum), gh&egrave;, thạp, thống, om (ni&ecirc;u), b&ugrave;ng binh (ống tiết kiệm), tu hu&yacute;t (c&ograve;i) v&agrave; &ocirc;ng t&aacute;o nung ch&iacute;n th&agrave;nh s&agrave;nh, kh&ocirc;ng c&oacute; thấm nước. Những sản phẩm tr&ecirc;n được chở b&aacute;n từ Nghệ An v&agrave;o đến Nam Bộ. C&aacute;c sản phẩm gốm kh&ocirc;ng tr&aacute;ng men như lọ hoa...cũng đ&atilde; được b&aacute;n sang Nhật Bản v&agrave; được sử dụng tr&acirc;n trọng trong c&aacute;c buổi tiệc tr&agrave; của Nhật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://thuathienhue.gov.vn/Portals/0/NhanNT/Nam2017/2017phuoctich1.jpg\" /></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Ng&agrave;y nay, tuy c&oacute; thời kỳ đ&atilde; vắng dần h&igrave;nh ảnh th&acirc;n quen của mặt h&agrave;ng độc Phước T&iacute;ch, nhưng khả năng kế tục truyền thống l&agrave;m gốm vẫn l&agrave; một quyết t&acirc;m cao. Phước T&iacute;ch vẫn l&agrave; ng&ocirc;i l&agrave;ng được nhiều người biết đến, bởi sản phẩm thủ c&ocirc;ng của họ vẫn l&agrave; vật gần gũi, th&acirc;n quen với mọi người.</p>', 'un7b_phuoctich.jpg', 1, 'Tên xã Phong Hòa xưa là xã Phong Lâu (do ở bên bờ sông Ô Lâu). Làng Phước Tích tiện cho việc thông thương bằng đường thủy để khai thác nguyên liệu và chở sản phẩm gốm đi bán. Quanh làng không có đất sét và rất hiếm củi, nhưng theo các gia phả và ký ức người già thì suốt từ đời Minh Mạng đến đời Khải Định, hàng tháng làng phải dâng nộp triều đình Huế 30 chiếc “om ngự” làm nồi nấu cơm cho vua, ăn xong vứt bỏ. Do đó làng được đặc ân đi các nơi khai thác những gì cần cho nghề: vào rừng ở truông Đôộc (Đôộc: gốm)', 1, 27, '2019-04-08', '2019-04-08', NULL, 'Tên xã Phong Hòa xưa là xã Phong Lâu (do ở bên bờ sông Ô Lâu). Làng Phước Tích tiện cho việc thông thương bằng đường thủy để khai thác nguyên liệu và chở sản phẩm gốm đi bán. Quanh làng không có đất sét và rất hiếm củi, nhưng theo các gia phả và ký ức người già thì suốt từ đời Minh Mạng đến đời Khải Định, hàng tháng làng phải dâng nộp triều đình Huế 30 chiếc “om ngự” làm nồi nấu cơm cho vua, ăn xong vứt bỏ. Do đó làng được đặc ân đi các nơi khai thác những gì cần cho nghề: vào rừng ở truông Đôộc (Đôộc: gốm)', '2019-04-08 07:07:22', '2019-04-10 16:50:20'),
(34, 24, 'LÀNG TÂN AN LÀNG NGHỀ BÁNH TRÁNG TRĂM TUỔI', 'lang-tan-an-lang-nghe-banh-trang-tram-tuoi', 'làng tân an làng nghề bánh tráng trăm tuổi', '<p>L&agrave;ng T&acirc;n An xưa kia c&ograve;n gọi l&agrave; Ba Phường, cũng c&oacute; người gọi l&agrave; Lộc Điền hay l&agrave; phường b&uacute;n b&aacute;nh, đến nay vẫn mang những n&eacute;t độc đ&aacute;o của một l&agrave;ng qu&ecirc; truyền thống Việt Nam gắn liền với nghề l&agrave;m b&aacute;nh tr&aacute;ng. L&agrave;ng T&acirc;n An&nbsp;nằm n&eacute;p m&igrave;nh b&ecirc;n d&ograve;ng s&ocirc;ng Gianh thơ mộng,&nbsp;phong cảnh rất thanh b&igrave;nh, đ&acirc;y ch&iacute;nh l&agrave;&nbsp;tiềm năng&nbsp;v&agrave; thế mạnh&nbsp;rất&nbsp;lớn để&nbsp;ph&aacute;t triển du lịch l&agrave;ng nghề Quảng B&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://phongnhaexplorer.com/wp-content/uploads/lang-tan-an-1.jpg\" style=\"height:1111px; width:1666px\" /></p>\r\n\r\n<p>L&agrave;ng T&acirc;n An b&ecirc;n d&ograve;ng s&ocirc;ng Gianh thơ mộng</p>\r\n\r\n<p>L&agrave;ng T&acirc;n An thuộc x&atilde; Quảng Thanh, c&aacute;ch thị x&atilde; Ba Đồn khoảng 4 km về ph&iacute;a T&acirc;y. Bạn c&oacute; thể sử dụng dịch vụ&nbsp;<a href=\"https://phongnhaexplorer.com/cho-thue-xe-quang-binh/dich-vu-cho-thue-xe-tai-quang-binh.html\" target=\"_self\">thu&ecirc; xe tại Quảng B&igrave;nh</a>&nbsp;một chiếc xe m&aacute;y hoặc &ocirc; t&ocirc; để di chuyển. Từ trung t&acirc;m th&agrave;nh phố Đồng Hới, đi theo QL1A hướng Bắc đến thị x&atilde; Ba Đồn, tiếp tục theo QL12A&nbsp;rẻ hướng qua cầu Quảng Hải. L&agrave;ng T&acirc;n An nằm ngay dưới ch&acirc;n cầu, tổng quảng đường khoảng 50 km.</p>\r\n\r\n<p><img alt=\"\" src=\"https://phongnhaexplorer.com/wp-content/uploads/lang-bang-trang-tan-an.jpg\" style=\"height:540px; width:960px\" /></p>\r\n\r\n<p>L&agrave;ng T&acirc;n An với truyền thống l&agrave;m b&aacute;nh tr&aacute;ng</p>\r\n\r\n<p>Nếu c&oacute; dịp&nbsp;<a href=\"https://phongnhaexplorer.com/cam-nang-du-lich-mien-trung/du-lich-quang-binh.html\" target=\"_top\">du lịch Quảng B&igrave;nh</a>, bạn h&atilde;y đến x&atilde; Quảng Thanh để t&igrave;m hiểu c&aacute;ch l&agrave;m b&aacute;nh của người d&acirc;n địa phương v&agrave; nếm thử m&oacute;n b&aacute;nh tr&aacute;ng thương hiệu T&acirc;n An, gi&ograve;n tan, thơm nồng đặc trưng c&aacute;i nắng c&aacute;i gi&oacute; của v&ugrave;ng đất Quảng B&igrave;nh. Đừng qu&ecirc;n mua b&aacute;nh tr&aacute;ng T&acirc;n An l&agrave;m qu&agrave; cho gia đ&igrave;nh, người th&acirc;n v&agrave; bạn b&egrave;.&nbsp;B&aacute;nh tr&aacute;ng T&acirc;n An kh&ocirc;ng chỉ mang hương vị đậm đ&agrave;, d&acirc;n d&atilde; của gạo, của vừng, m&agrave; kết tinh trong đ&oacute; l&agrave; cả t&igrave;nh y&ecirc;u v&agrave; niềm tự h&agrave;o của một miền qu&ecirc;.</p>\r\n\r\n<p>Trước đ&acirc;y trong l&agrave;ng vừa l&agrave;m&nbsp;b&aacute;nh tr&aacute;ng, b&aacute;nh ướt, b&uacute;n v&agrave; cả b&aacute;nh chưng. Nhưng sau thời gian d&agrave;i đ&atilde; chuyển hẳn sang l&agrave;m b&aacute;nh tr&aacute;ng v&agrave; sản phẩm đặc biệt nhất của l&agrave;ng l&agrave; b&aacute;nh tr&aacute;ng m&egrave; x&aacute;t. Kh&ocirc;ng ai biết nghề l&agrave;m b&aacute;nh ở T&acirc;n An c&oacute; từ bao giờ, ngay cả những người l&agrave;m b&aacute;nh cao tuổi ở trong l&agrave;ng, chỉ biết rằng nghề đ&atilde; gắn chặt với t&ecirc;n l&agrave;ng từ h&agrave;ng trăm năm nay.</p>\r\n\r\n<p>Hơn 100 năm qua, nghề l&agrave;m b&aacute;nh đa đ&atilde; nu&ocirc;i sống biết bao người d&acirc;n ở l&agrave;ng qu&ecirc; ven d&ograve;ng s&ocirc;ng Gianh. Một ng&ocirc;i l&agrave;ng vốn rất &iacute;t đất để sản xuất n&ocirc;ng nghiệp n&ecirc;n nghề b&aacute;nh được xem l&agrave; nghề tạo thu nhập ch&iacute;nh cho người d&acirc;n nơi đ&acirc;y. Kh&ocirc;ng v&igrave; miếng cơm manh &aacute;o v&agrave; c&ograve;n v&igrave; cả thương hiệu của l&agrave;ng b&aacute;nh T&acirc;n An của c&aacute;c thế hệ cha &ocirc;ng truyền lại, những người con nơi đ&acirc;y vẫn ng&agrave;y đ&ecirc;m giữ lửa l&agrave;m nghề truyền thống. Qua bao thăng trầm của thời gian, để tạo n&ecirc;n vị mặn m&agrave; đặc trưng của chiếc b&aacute;nh đa m&egrave; x&aacute;t.</p>\r\n\r\n<p><img alt=\"\" src=\"https://phongnhaexplorer.com/wp-content/uploads/lang-tan-an.jpg\" style=\"height:1356px; width:2048px\" /></p>\r\n\r\n<p>B&aacute;nh tr&aacute;ng T&acirc;n An gi&ograve;n tan, thơm nồng đặc trưng c&aacute;i nắng c&aacute;i gi&oacute; của v&ugrave;ng đất Quảng B&igrave;nh.</p>\r\n\r\n<p>Để l&agrave;m ra những chiếc b&aacute;nh đậm đ&agrave; hương vị qu&ecirc; hương, thoạt nh&igrave;n rất giản đơn nhưng c&aacute;c nghệ nh&acirc;n l&agrave;m b&aacute;nh đ&atilde; phải trải qua kh&aacute; nhiều c&ocirc;ng đoạn phức tạp v&agrave; đ&ograve;i hỏi c&oacute; sự kh&eacute;o l&eacute;o, c&ocirc;ng phu, tỉ mỉ. Nguy&ecirc;n liệu ch&iacute;nh để l&agrave;m b&aacute;nh l&agrave; loại gạo ngon, được ng&acirc;m trong nước v&agrave; s&agrave;ng lọc, vo kỹ trước khi đem xay nhuyễn th&agrave;nh bột. Chất lượng v&agrave; vẻ ngo&agrave;i hấp dẫn của mỗi chiếc b&aacute;nh m&egrave; x&aacute;t phụ thuộc rất nhiều v&agrave;o lớp m&egrave; đ&atilde; x&aacute;t vỏ. Nếu trộn m&egrave; v&agrave;o bột nước đậm qu&aacute; th&igrave; chiếc b&aacute;nh l&agrave;m ra sẽ kh&ocirc;ng kết hợp h&agrave;i h&ograve;a được giữa m&ugrave;i thơm ng&agrave;o ngạt của l&uacute;a gạo v&agrave; vị b&ugrave;i ngậy của hạt m&egrave;. C&ograve;n tỉ lệ m&egrave; trong b&aacute;nh qu&aacute; nhạt th&igrave; cho ra vẻ ngo&agrave;i kh&ocirc;ng bắt mắt v&agrave; c&ograve;n ảnh hưởng đến mức độ h&agrave;i h&ograve;a của b&aacute;nh. Tỉ lệ tương đối m&agrave; những người l&agrave;m b&aacute;nh T&acirc;n An lấy l&agrave;m quy chuẩn l&agrave; 10 lon gạo đi c&ugrave;ng khoảng 1,5 đến 2 lon m&egrave;.</p>\r\n\r\n<p>Trong quy tr&igrave;nh l&agrave;m b&aacute;nh, mỗi chiếc b&aacute;nh được tr&aacute;ng l&ecirc;n nguy&ecirc;n vẹn chỉ mới th&agrave;nh c&ocirc;ng được ph&acirc;n nửa. C&ocirc;ng đoạn phơi b&aacute;nh mới thực sự c&ocirc;ng phu. B&aacute;nh đủ nắng l&agrave; loại b&aacute;nh vừa kh&ocirc; vừa dai, dậy m&ugrave;i thơm của gạo, của vừng. B&aacute;nh qu&aacute; nắng sẽ bị kh&ocirc; gi&ograve;n, dễ vỡ. Ngược lại, b&aacute;nh thiếu nắng sẽ kh&ocirc;ng c&oacute; m&ugrave;i thơm, ỉu v&agrave; dễ bị hỏng khi bảo quản. V&agrave;o những ng&agrave;y nắng, khắp đường l&agrave;ng, ng&otilde; x&oacute;m, s&acirc;n nh&agrave; tr&agrave;n ngập những ph&ecirc;n b&aacute;nh tr&aacute;ng cong tr&ograve;n khoe dưới nắng<strong>.&nbsp;</strong>D&ugrave; c&ocirc;ng đoạn chế biến hơi l&acirc;u, nhưng b&aacute;nh tr&aacute;ng T&acirc;n An d&ugrave; được phơi kh&ocirc; vẫn giữ được độ dai, d&ograve;n vừa phải chứ kh&ocirc;ng dẻo d&ugrave; để h&agrave;ng th&aacute;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://phongnhaexplorer.com/wp-content/uploads/lang-nghe-banh-trang-tan-an.jpg\" style=\"height:499px; width:665px\" /></p>\r\n\r\n<p>Những người d&acirc;n nơi đ&acirc;y vẫn ng&agrave;y đ&ecirc;m giữ lửa l&agrave;m nghề truyền thống</p>\r\n\r\n<p>C&ugrave;ng c&oacute; t&ecirc;n gọi l&agrave; b&aacute;nh m&egrave; x&aacute;t nhưng người T&acirc;n An đ&atilde; s&aacute;ng tạo ra tới 3 thứ b&aacute;nh c&oacute; m&ugrave;i vị v&agrave; h&igrave;nh thức kh&aacute;c nhau. Đầu ti&ecirc;n l&agrave; b&aacute;nh m&egrave; x&aacute;t mỏng c&oacute; đường k&iacute;nh khoảng 20cm. Người ta gi&atilde; mịn hạt m&egrave; trộn với bột gạo rồi đem tr&aacute;ng ra thật mỏng d&ugrave;ng để l&agrave;m ram cuốn hay b&aacute;nh cuốn với rau, thịt, c&aacute;, ăn cũng hết sức hấp dẫn. Tiếp đến l&agrave; b&aacute;nh m&egrave; x&aacute;t d&agrave;y l&agrave; loại b&aacute;nh tr&aacute;ng theo kiểu truyền thống. B&aacute;nh n&agrave;y khi nướng l&ecirc;n c&oacute; một lớp m&egrave; c&oacute; m&agrave;u n&acirc;u nhạt, tr&ocirc;ng rất bắt mắt. Cuối c&ugrave;ng l&agrave; b&aacute;nh m&egrave; x&aacute;t đường, c&oacute; vị ngọt thanh đặc trưng, th&iacute;ch hợp nhất cho việc ăn vặt, nhấm nh&aacute;p l&uacute;c thảnh thơi&hellip;</p>\r\n\r\n<p><img alt=\"\" src=\"https://phongnhaexplorer.com/wp-content/uploads/banh-trang-tan-an.jpg\" style=\"height:960px; width:960px\" /></p>\r\n\r\n<p>Đừng qu&ecirc;n mua b&aacute;nh tr&aacute;ng T&acirc;n An l&agrave;m qu&agrave; cho gia đ&igrave;nh, người th&acirc;n v&agrave; bạn b&egrave;</p>\r\n\r\n<p>L&agrave;ng T&acirc;n An c&oacute; hơn 200 hộ l&agrave;m b&aacute;nh, trước đ&acirc;y cả l&agrave;ng đều l&agrave;m b&aacute;nh thủ c&ocirc;ng v&agrave; đều tr&ocirc;ng chờ v&agrave;o thời tiết. Sản lượng b&aacute;nh l&agrave;m ra nhỏ lẻ v&agrave; thường bị thương l&aacute;i &eacute;p gi&aacute;, người l&agrave;m b&aacute;nh phải chạy đ&ocirc;n chạy đ&aacute;o để t&igrave;m mối giao b&aacute;nh, gi&aacute; th&agrave;nh kh&ocirc;ng ổn định, thị trường chỉ b&oacute; hẹp trong v&ugrave;ng. &nbsp;</p>\r\n\r\n<p>Nhưng nay người d&acirc;n l&agrave;ng nghề đ&atilde; nắm bắt được thị trường từng bước chuy&ecirc;n m&ocirc;n h&oacute;a, cơ giới h&oacute;a nhằm n&acirc;ng cao năng suất, chất lượng v&agrave; t&iacute;nh thẩm mỹ của sản phẩm để giới thiệu ra thị trường. Th&aacute;ng 10-2010, hợp t&aacute;c x&atilde; b&aacute;nh m&egrave; x&aacute;t được th&agrave;nh lập, thương hiệu b&aacute;nh m&egrave; x&aacute;t T&acirc;n An từ đ&oacute; được mở rộng kh&ocirc;ng chỉ ở trong tỉnh m&agrave; hiện tại b&aacute;nh tr&aacute;ng T&acirc;n An đ&atilde; c&oacute; mặt khắp thị trường c&aacute;c tỉnh miền Trung v&agrave; cả nước bạn L&agrave;o, Th&aacute;i Lan.&nbsp;</p>', 'wsjE_lang-bang-trang-tan-an.jpg', 1, 'Làng Tân An xưa kia còn gọi là Ba Phường, cũng có người gọi là Lộc Điền hay là phường bún bánh, đến nay vẫn mang những nét độc đáo của một làng quê truyền thống Việt Nam gắn liền với nghề làm bánh tráng. Làng Tân An nằm nép mình bên dòng sông Gianh thơ mộng, phong cảnh rất thanh bình, đây chính là tiềm năng và thế mạnh rất lớn để phát triển du lịch làng nghề Quảng Bình.', 0, 8, '2019-04-08', '2019-04-08', NULL, 'Làng Tân An xưa kia còn gọi là Ba Phường, cũng có người gọi là Lộc Điền hay là phường bún bánh, đến nay vẫn mang những nét độc đáo của một làng quê truyền thống Việt Nam gắn liền với nghề làm bánh tráng. Làng Tân An nằm nép mình bên dòng sông Gianh thơ mộng, phong cảnh rất thanh bình, đây chính là tiềm năng và thế mạnh rất lớn để phát triển du lịch làng nghề Quảng Bình.', '2019-04-08 08:04:11', '2019-04-10 17:14:56'),
(35, 21, 'test', 'test', 'test', '<p>ok</p>', 'chnp_1_vpoc.jpg', 1, 'ok', 1, 0, '2019-04-12', '2019-04-12', NULL, 'ok', '2019-04-12 16:29:06', '2019-04-12 16:29:06'),
(36, 21, 'test 1', 'test-1', 'test 1', '<p>s</p>', 'jCp7_1_vpoc.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:29:33', '2019-04-12 16:29:33'),
(37, 21, 'test 2', 'test-2', 'test 2', '<p>s</p>', 'HGjM_1_vpoc.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:29:48', '2019-04-12 16:29:48'),
(38, 8, 'Văn hoá ẩm thực truyền thống của người Việt Nam 1', 'van-hoa-am-thuc-truyen-thong-cua-nguoi-viet-nam-1', 'văn hoá ẩm thực truyền thống của người việt nam 1', '<p>s</p>', 'GZY3_bua-com-viet.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:31:17', '2019-04-12 16:31:17'),
(39, 8, 'Văn hoá ẩm thực truyền thống của người Việt Nam 2', 'van-hoa-am-thuc-truyen-thong-cua-nguoi-viet-nam-2', 'văn hoá ẩm thực truyền thống của người việt nam 2', '<p>s</p>', 'ez4G_bua-com-viet.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:31:38', '2019-04-12 16:31:38'),
(40, 27, 'Hoạt động 1', 'hoat-dong-1', 'hoạt động 1', '<p>s</p>', '0ytN_ls2-15516750053691964952303.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:32:04', '2019-04-12 16:32:04'),
(41, 27, 'Hoạt động 2', 'hoat-dong-2', 'hoạt động 2', '<p>s</p>', 'Ihsx_tam-nhin-va-su-menh-nghe-bep.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:32:36', '2019-04-12 16:32:36'),
(42, 34, 'tin tuc', 'tin-tuc', 'tin tuc', '<p>sd</p>', 'oObh_lang-nghe-banh-phong-phu-my-an-giang-190888.jpg', 1, 'sds', 0, 0, '2019-04-12', '2019-04-12', NULL, 'sds', '2019-04-12 16:33:10', '2019-04-12 16:33:10'),
(43, 34, 'tin tuc 1', 'tin-tuc-1', 'tin tuc 1', '<p>s</p>', 'pcwr_tam-nhin-va-su-menh-nghe-bep.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 16:33:29', '2019-04-12 16:33:29'),
(44, 35, 'món ngon vùng miền 1', 'mon-ngon-vung-mien-1', 'món ngon vùng miền 1', '<p>1</p>', 'Pr0X_banh-xeo.jpg', 1, '1', 0, 1, '2019-04-12', '2019-04-12', NULL, '1', '2019-04-12 17:03:56', '2019-04-12 17:04:47'),
(45, 35, 'món ngon vùng miền 2', 'mon-ngon-vung-mien-2', 'món ngon vùng miền 2', '<p>s</p>', 'Rfo4_lang-nghe-banh-phong-phu-my-an-giang-190888.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 17:04:23', '2019-04-12 17:04:23'),
(46, 35, 'món ngon vùng miền 3', 'mon-ngon-vung-mien-3', 'món ngon vùng miền 3', '<p>s</p>', 'ciJi_banh-xeo.jpg', 1, 's', 0, 0, '2019-04-12', '2019-04-12', NULL, 's', '2019-04-12 17:04:41', '2019-04-12 17:04:41'),
(47, 1, 'Cầu đất Farm có gì vui??', 'cau-dat-farm-co-gi-vui-', 'cầu đất farm có gì vui??', '<p>&aacute;das</p>', '41uB_IMG_3627.JPG', 0, 'ádad', 0, 1, '2019-04-17', '2019-04-17', NULL, 'ádad', '2019-04-17 06:46:37', '2019-04-17 07:29:40'),
(48, 1, 'Phong', 'phong', 'Phong', '<p>&aacute;dasd</p>', '3jdR_IMG_0159.JPG', 1, 'ád', 0, 1, '2019-04-17', '2019-04-17', NULL, 'ád', '2019-04-17 06:48:38', '2019-04-17 07:24:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucnoibat`
--

CREATE TABLE `tintucnoibat` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SEOTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HienThi` tinyint(1) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `NgayTao` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintucnoibat`
--

INSERT INTO `tintucnoibat` (`id`, `TieuDe`, `TieuDeKhongDau`, `SEOTitle`, `NoiDung`, `Hinh`, `HienThi`, `SoLuotXem`, `NgayTao`, `created_at`, `updated_at`) VALUES
(3, 'My Top 5', 'my-top-5', 'my top 5', '<p>ok</p>', 'ymo5_bannertop5.jpg', 1, 2, '2019-04-10', '2019-04-10 17:02:25', '2019-04-10 17:13:42'),
(4, 'Bánh mì', 'banh-mi', 'bánh mì', '<p>B&aacute;nh m&igrave;</p>', 'R3EP_Bahn-Mi-Banner.jpg', 1, 2, '2019-04-10', '2019-04-10 17:02:55', '2019-04-12 15:49:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` tinyint(1) NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `sdt`, `quyen`, `remember_token`, `updated_at`, `created_at`) VALUES
(7, 'Phong', 'thanhphong9718@gmail.com', '$2y$10$EJsRUamg4UD/KUjKdcK7dOidjcxmQG7aghprhQa.7GHD1OziKj/CG', '0832210125', 0, NULL, '2019-04-12 16:16:09', '2019-04-12 16:16:09'),
(8, 'Món Ngon Việt', 'monngonviet2019@gmail.com', '$2y$10$HuOoYg1SI8FkzXcATZdwBOvFFBfUw87JUUGXArbdw/pwkWLmgi2ae', '0000', 1, NULL, '2019-04-17 03:56:42', '2019-04-17 03:56:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LinkYoutube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEOTitle` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `NgayTao` date DEFAULT NULL,
  `NgaySua` date DEFAULT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `HienThi` tinyint(1) NOT NULL,
  `NoiBat` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `TieuDe`, `TieuDeKhongDau`, `Video`, `LinkYoutube`, `SEOTitle`, `NoiDung`, `NgayTao`, `NgaySua`, `SoLuotXem`, `HienThi`, `NoiBat`, `created_at`, `updated_at`) VALUES
(15, '15 Món Ăn Việt Nam Được Thế Giới Công Nhận Là Ngon Nhất', '15-mon-an-viet-nam-duoc-the-gioi-cong-nhan-la-ngon-nhat', NULL, 'o6U6o0QjB3E', '15 món ăn việt nam được thế giới công nhận là ngon nhất', '<p>15 M&oacute;n Ăn Việt Nam Được Thế Giới C&ocirc;ng Nhận L&agrave; Ngon Nhất 1- B&aacute;nh mỳ thịt nướng 2- B&aacute;nh x&egrave;o 3- B&aacute;nh khọt 4- Chuối nếp nướng 5- Phở b&ograve; 6- Nem vu&ocirc;ng 7- Chả c&aacute; 8- Nem r&aacute;n 9- B&uacute;n ri&ecirc;u cua 10- B&uacute;n chả 11. Gỏi cuốn 12. Cao lầu 13. M&igrave; Quảng 14. Nộm hoa chuối 15. Cơm tấm</p>', '2019-04-08', '2019-04-08', 2, 1, 1, '2019-04-08 04:08:38', '2019-04-08 13:28:43'),
(16, 'Những món ăn ngon lạ trên đường phố Việt Nam - vietnamese street food', 'nhung-mon-an-ngon-la-tren-duong-pho-viet-nam-vietnamese-street-food', NULL, 'fNGFliNNofM', 'những món ăn ngon lạ trên đường phố việt nam - vietnamese street food', '<h3>Những m&oacute;n ăn ngon lạ tr&ecirc;n đường phố Việt Nam - vietnamese street food Du lịch bụi - k&ecirc;nh ẩm thực du lịch v&agrave; kh&aacute;m ph&aacute; C&aacute;c bạn nhớ like v&agrave; subscribe để theo d&otilde;i những video mới nhất nh&eacute;!</h3>', '2019-04-08', '2019-04-08', 1, 1, 1, '2019-04-08 04:25:59', '2019-04-08 10:46:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtheloai` (`idTheLoai`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idloaitin` (`idLoaiTin`);

--
-- Chỉ mục cho bảng `tintucnoibat`
--
ALTER TABLE `tintucnoibat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `tintucnoibat`
--
ALTER TABLE `tintucnoibat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD CONSTRAINT `loaitin_ibfk_1` FOREIGN KEY (`idtheloai`) REFERENCES `theloai` (`id`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`idloaitin`) REFERENCES `loaitin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
