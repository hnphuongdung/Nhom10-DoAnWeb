-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 11, 2020 lúc 08:11 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_29_034948_create_tbl_admin_table', 1),
(4, '2020_06_29_145602_create_tbl_category', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, '18520004@gm.uit.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 'Quỳnh Anh', '0773951706', NULL, NULL),
(2, '18520023@gm.uit.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 'Phương Dung', '0948347908', NULL, NULL),
(3, '18520355@gm.uit.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 'Văn Thắng', '0396778509', NULL, NULL),
(4, '18520640@gm.uit.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 'Thùy Dung', '000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_blog`
--

DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

DROP TABLE IF EXISTS `tbl_category_product`;
CREATE TABLE IF NOT EXISTS `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `meta_keywords`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Bữa sáng', 'sáng, bữa sáng, món sáng', 'bữa sáng ngon miệng', 1, NULL, NULL),
(2, 'Bữa trưa', 'trưa, bữa trưa, món trưa', 'bữa trưa ngon miệng', 1, NULL, NULL),
(3, 'Combo', 'combo, combo món ăn', 'Combo ngon và rẻ', 1, NULL, NULL),
(4, 'Snack', 'snack, thơm', 'snack thơm ngon', 1, NULL, NULL),
(5, 'Thức uống', 'đồ uống, nước uống, thức uống', 'Đồ uống mát lạnh', 1, NULL, NULL),
(7, 'test', 'j', 'v', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

DROP TABLE IF EXISTS `tbl_coupon`;
CREATE TABLE IF NOT EXISTS `tbl_coupon` (
  `coupon_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coupon_times` int(50) NOT NULL,
  `coupon_numbers` int(11) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_times`, `coupon_numbers`, `coupon_condition`) VALUES
(1, 'test', 'test123', 4, 10, 1),
(4, 'test1', '1111', 6, 10000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

DROP TABLE IF EXISTS `tbl_customers`;
CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(6, 'Dung Thùy', '18520640@gm.uit.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', '0216516516', NULL, NULL),
(5, 'Thắng Lê', '18520355@gm.uit.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', '0396778509', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_fedback`
--

DROP TABLE IF EXISTS `tbl_fedback`;
CREATE TABLE IF NOT EXISTS `tbl_fedback` (
  `fedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mess` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`fedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `order_total` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(28, 5, '40,000.00', 'Đang chờ xử lý', NULL, NULL),
(29, 6, '7,000.00', 'Đang chờ xử lý', NULL, NULL),
(30, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(31, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(32, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(33, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(34, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(35, 6, '7,000.00', 'Đang chờ xử lý', NULL, NULL),
(36, 6, '45,000.00', 'Đang chờ xử lý', NULL, NULL),
(37, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(38, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(39, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(40, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(41, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(42, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(43, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(44, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(45, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(46, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(47, 6, '0.00', 'Đang chờ xử lý', NULL, NULL),
(48, 6, '35,000.00', 'Đang chờ xử lý', NULL, NULL),
(49, 6, '0.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(36, 28, 1, 'Bún bò', '20000', 1, NULL, NULL),
(37, 28, 10, 'Phở gà', '20000', 1, NULL, NULL),
(38, 29, 43, '7 up lon', '7000', 1, NULL, NULL),
(39, 35, 49, 'Fanta vị việt quốc', '7000', 1, NULL, NULL),
(40, 36, 51, 'Cà phê Highland', '10000', 1, NULL, NULL),
(41, 36, 31, 'Bánh O\'Star', '5000', 1, NULL, NULL),
(42, 36, 26, 'Ếch xào sả ớt + Canh tôm nấu rau cải', '30000', 1, NULL, NULL),
(43, 48, 33, 'Bánh Snack bí đỏ', '5000', 3, NULL, NULL),
(44, 48, 13, 'Bò xào rau muống', '20000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_promotion_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_quantity`, `product_desc`, `product_price`, `product_promotion_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Bún riêu', '10', 'Bún riêu được làm từ những nguyên liệu tươi mới, hòa cùng nước lèo riêng biệt của cửa tiệm.', '20000', NULL, 'bun_rieu47.png', 1, NULL, NULL),
(1, 1, 'Bún bò', '20', 'Bún bò với những thớ thịt bò mềm, tan ngay trong miệng, kết hợp với nước dùng được làm từ công thức gia truyền của tiệm.', '20000', NULL, 'bun_bo2.jpg', 1, NULL, NULL),
(3, 1, 'Bánh ướt thịt nướng', '23', 'Bánh ướt dẻo, cùng với nhân thịt nướng đầy ắp hòa quyện với nước dùng đặc trưng của cửa tiệm.', '10000', NULL, 'banh_uot_thit_nuong58.jpg', 1, NULL, NULL),
(4, 1, 'Bánh bèo', '10', 'Dĩa bánh bèo mềm, thơm, nóng hổi kết hợp với nước chấm lạ miệng được pha theo công thức đặc trưng của tiệm.', '10000', NULL, 'banh_beo42.jpg', 1, NULL, NULL),
(5, 1, 'Bánh bột lọc', '50', 'Vị thanh mát, mặn mặn của lớp bánh trong suốt, dai dai cùng với nhân thịt tôm mặn, cùng với nước chấm đặc trưng của tiệm.', '10000', NULL, 'banh_bot_loc68.jpg', 1, NULL, NULL),
(6, 1, 'Bánh mì', '50', 'Ổ bánh mì nóng giòn, cùng với nhân thịt, chả hoặc trứng đầy ắp.', '10000', NULL, 'banh_mi61.png', 1, NULL, NULL),
(7, 1, 'Bún giò', '30', 'Tô bún giò heo to bự, thịt mềm và dai dai ngập trong nước dùng đặc trưng của cửa tiệm.', '20000', NULL, 'bun_gio14.png', 1, NULL, NULL),
(8, 1, 'Bún mắm', '40', 'Tô bún to, đầy ắp nguyên liệu, hòa cùng nước dùng đậm đà, đặc trưng.', '20000', NULL, 'bun_mam51.jpg', 1, NULL, NULL),
(9, 1, 'Phở bò', '45', 'Tô phở to bự, nhiều thịt hòa quyện với nước dùng được chế biến riêng của cửa tiệm.', '20000', NULL, 'pho_bo16.jpg', 1, NULL, NULL),
(10, 1, 'Phở gà', '10', 'Tô phở to bự, thịt gà béo ngậy, hòa quyện với nước dùng trong veo, thanh ngọt.', '20000', NULL, 'pho_ga55.jpg', 1, NULL, NULL),
(11, 2, 'Bò xào giá đỗ', '20', 'Bò xào giá đỗ với vị thơm mềm từ thịt bò tươi và giòn giòn từ giá đỗ.', '20000', NULL, 'bo_xao_gia54.jpg', 1, NULL, NULL),
(12, 2, 'Bò xào hành tây', '30', 'Bò xào hành tây là sự hòa quyện của những thớ thịt bò đậm đà gia vị cùng hành tây giòn giòn.', '20000', NULL, 'bo_xao_hanh_tay44.jpg', 1, NULL, NULL),
(13, 2, 'Bò xào rau muống', '25', 'Bò xào rau muống mềm từ thịt, giòn từ rau với vị ngọt thơm từ thịt, rau và tỏi.', '20000', NULL, 'bo_xao_rau_muong36.jpg', 1, NULL, NULL),
(14, 2, 'Bò xào ớt chuông', '49', 'Bò xào ớt chuông có vị đậm đà, ngọt thơm từ thịt bò và ớt chuông.', '20000', NULL, 'bo_xao_ot_chuong67.jpg', 1, NULL, NULL),
(15, 2, 'Canh chua cá diêu hồng', '90', 'Nguyên liệu: cá diêu hồng, thơm, đậu bắp, rau thơm.', '20000', NULL, 'canh_chua_ca_dieu_hong5.jpg', 1, NULL, NULL),
(16, 2, 'Canh khổ qua nhồi thịt', '80', 'Nguyên liệu: khổ qua nhồi thịt.', '20000', NULL, 'kho_qua_nhoi_thit53.jpg', 1, NULL, NULL),
(17, 2, 'Canh tôm nấu rau cải', '12', 'Nguyên liệu: tôm, rau cải.', '20000', NULL, 'canh_tom_rau_cai88.jpg', 1, NULL, NULL),
(18, 2, 'Chả cá', '34', 'Chả cá thơm ngon, tươi mới.', '17000', NULL, 'cha_ca74.JPG', 1, NULL, NULL),
(19, 2, 'Gà kho xả ớt', '55', 'Nguyên liệu: thịt gà, xả, ớt.', '20000', NULL, 'ga_kho_xa_ot73.jpg', 1, NULL, NULL),
(20, 2, 'Thịt heo kho mắm ruốc xả', '65', 'Nguyên liệu: thịt ba chỉ thái nhỏ, xả, ớt, mắm ruốc.', '20000', NULL, 'thit_heo_kho_mam_ruot_xa43.jpg', 1, NULL, NULL),
(21, 2, 'Thịt kho trứng', '55', 'Thịt kho trứng với những miếng thịt mềm cùng với trứng được ướp đậm đà, thơm ngon.', '20000', NULL, 'thit_kho_trung57.jpg', 1, NULL, NULL),
(22, 2, 'Trứng chiên', '15', 'Nguyên liệu: trứng gà.', '15000', NULL, 'trung_chien61.jpg', 1, NULL, NULL),
(23, 3, 'Bánh mì + Cà phê Highland', '10', 'Combo gồm có bánh mì nhân thịt hoặc trứng hoặc chả (tùy chọn) và 1 lon cà phê Highland.', '18000', NULL, 'combo147.jpg', 1, NULL, NULL),
(24, 3, 'Bún bò + Bò cụng', '5', 'Combo gồm 1 tô bún bò to bự và 1 lon Redbull.', '28000', NULL, 'combo297.jpg', 1, NULL, NULL),
(25, 3, 'Phở bò + Trà sữa Nhật Kirin', '5', 'Combo gồm 1 tô phở bò và 1 ly trà sữa Kirin.', '35000', NULL, 'combo360.jpg', 1, NULL, NULL),
(26, 3, 'Ếch xào sả ớt + Canh tôm nấu rau cải', '5', 'Combo gồm có 1 phần cơm ếch xào sả ớt và canh tôm nấu rau cải. Thích hợp dùng cho bữa trưa.', '30000', NULL, 'combo444.jpg', 1, NULL, NULL),
(27, 3, 'Gà kho sả ớt + Canh khổ qua nhồi thịt', '5', 'Combo gồm 1 phần cơm gà kho sả ớt và canh khổ qua nhồi thịt. Thích hợp dùng cho bữa trưa.', '30000', NULL, 'combo597.jpg', 1, NULL, NULL),
(28, 3, 'Bò xào giá đỗ + Canh chua cá diêu hồng', '5', 'Combo gồm có 1 phần cơm bò xào giá đỗ và canh chua cá diêu hồng. Thích hợp dùng cho bữa trưa', '30000', NULL, 'combo677.jpg', 1, NULL, NULL),
(29, 3, 'Thịt kho trứng + Canh tôm nấu rau cải', '5', 'Combo bữa trưa gồm 1 phần cơm thịt kho trứng và canh tôm nấu rau cải.', '30000', NULL, 'combo713.jpg', 1, NULL, NULL),
(30, 3, 'Chả cá + Canh tôm nấu rau cải + Coca lon', '5', 'Combo bữa trưa gồm 1 phần cơm chả cá và canh tôm nấu rau cải. Đi kèm còn có 1 lon Coca.', '35000', NULL, 'combo895.jpg', 1, NULL, NULL),
(31, 4, 'Bánh O\'Star', '20', '1 bịch bánh khoai tây O\'Star.', '5000', NULL, 'ostar59.jpg', 1, NULL, NULL),
(32, 4, 'Bánh Snack Oishi cay', '20', '1 bịch bánh snack Oishi cay', '5000', NULL, 'oishi_cay97.jpg', 1, NULL, NULL),
(33, 4, 'Bánh Snack bí đỏ', '20', '1 bịch bánh Snack bí đỏ', '5000', NULL, 'snack_bi_do43.jpg', 1, NULL, NULL),
(34, 4, 'Bánh Snack phô mai', '20', '1 bịch bánh snack Oishi phô mai.', '5000', NULL, 'snack_pho_mai12.jpg', 1, NULL, NULL),
(35, 4, 'Bánh Snack cua', '20', '1 bịch bánh snack KINHDO cua.', '5000', NULL, 'snack_vi_cua21.jpg', 1, NULL, NULL),
(36, 4, 'Bánh Snack vị hành', '20', '1 bịch bánh snack Oshi hành.', '5000', NULL, 'snack_vi_hanh9.jpg', 1, NULL, NULL),
(37, 4, 'Sữa chua nếp cẩm', '20', '1 hộp sữa chua nếp cẩm nhà làm.', '10000', NULL, 'sua_chua_nep_cam69.jpg', 1, NULL, NULL),
(38, 4, 'Sữa chua Vinamilk', '20', '1 hộp sữa chua Vinamilk.', '5000', NULL, 'sua_chua_vinamilk99.jpg', 1, NULL, NULL),
(39, 4, 'Sữa chua Vinamilk vị dâu', '20', '1 hộp sữa chua Vinamilk vị dâu.', '5000', NULL, 'sua_chua_vinamilk_huong_dau45.jpg', 1, NULL, NULL),
(40, 4, 'Sữa chua Vinamilk nha đam', '20', '1 hộp sữa chua Vinamilk vị nha đam.', '5000', NULL, 'sua_chua_vinamilk_nha_dam0.jpg', 1, NULL, NULL),
(41, 4, 'Sữa chua Vinamilk hạt óc chó', '20', '1 hộp sữa chua Vinamilk hạt óc chó.', '5000', NULL, 'sua_chua_vinamilk_oc_cho81.jpg', 1, NULL, NULL),
(42, 5, '7 up chai', '20', '1 chai nước giải khát 7up.', '7000', NULL, '7_up_chai15.jpg', 1, NULL, NULL),
(43, 5, '7 up lon', '20', '1 lon nước giải khát 7up.', '7000', NULL, '7_up_lon86.jpg', 1, NULL, NULL),
(44, 5, 'Redbull', '20', '1 lon nước tăng lực Redbull.', '10000', NULL, 'bo_cung61.jpg', 1, NULL, NULL),
(45, 5, 'Coca chai', '20', '1 chai nước giải khát Coca.', '7000', NULL, 'coca_chai89.jpg', 1, NULL, NULL),
(46, 5, 'Coca lon', '20', '1 lon nước giải khát Coca.', '7000', NULL, 'coca_lon9.jpg', 1, NULL, NULL),
(47, 5, 'Fanta cam', '20', '1 lon nước giải khát Fanta cam.', '7000', NULL, 'fanta_cam37.jpg', 1, NULL, NULL),
(48, 5, 'Fanta hương trái cây', '45', '1 lon nước giải khát Fanta hương trái cây.', '7000', NULL, 'fanta_huong_trai_cay8.jpg', 1, NULL, NULL),
(49, 5, 'Fanta vị việt quốc', '55', '1 lon nước giải khát Fanta vị việt quốc.', '7000', NULL, 'fanta_viet_quoc48.jpg', 1, NULL, NULL),
(50, 5, 'Fanta xá xị', '65', '1 lon nước giải khát Fanta xá xị.', '7000', NULL, 'fanta_xa_xi32.jpg', 1, NULL, NULL),
(51, 5, 'Cà phê Highland', '45', '1 lon cà phê sữa Highland.', '10000', NULL, 'highland_coffee4.jpg', 1, NULL, NULL),
(52, 5, 'Cà phê đen Highland', '45', '1 lon cà phê đen Highland.', '10000', NULL, 'highlands_coffee_cafe_den9.jpg', 1, NULL, NULL),
(53, 5, 'Cà phê đen Nescafe', '45', '1 lon cà phê đen Nescafe.', '9000', NULL, 'nescafe_den97.jpg', 1, NULL, NULL),
(54, 5, 'Number 1 chai', '48', '1 chai nước tăng lực Number1.', '7000', NULL, 'number_177.jpg', 1, NULL, NULL),
(55, 5, 'Pepsi lon', '48', '1 lon nước giải khát Pepsi.', '7000', NULL, 'pepsi15.jpg', 1, NULL, NULL),
(56, 5, 'Nước giải khát Revive', '48', '1 chai nước giải khát Revive.', '7000', NULL, 'revive87.jpg', 1, NULL, NULL),
(57, 5, 'Nước giải khát Revive chanh muối', '24', '1 chai nước giải khát Revive chanh muối.', '7000', NULL, 'revive_chanh_muoi75.jpg', 1, NULL, NULL),
(58, 5, 'Sting', '24', '1 chai nước Sting.', '7000', NULL, 'sting77.jpg', 1, NULL, NULL),
(59, 5, 'Trà sữa Machiato', '24', '1 chai trà sữa Machiato.', '10000', NULL, 'tra_sua_machiato21.jpg', 1, NULL, NULL),
(60, 5, 'Trà sữa Nhật Kirin', '24', '1 chai trà sữa Nhật Kirin.', '20000', NULL, 'tra_sua_nhat_kirin87.jpg', 1, NULL, NULL),
(61, 5, 'Trà xanh không độ', '48', '1 chai trà xanh không độ.', '7000', NULL, 'tra_xanh_khong_do23.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

DROP TABLE IF EXISTS `tbl_shipping`;
CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
