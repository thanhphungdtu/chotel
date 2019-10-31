-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 03:10 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `preview_text` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `preview_text`, `detail_text`, `picture`, `active`) VALUES
(3, '<p>\r\n	VinaTAB thiết kế website theo chuẩn W3C, th&ocirc;ng minh v&agrave; tối ưu h&oacute;a google: Gi&uacute;p cho Google t&igrave;m thấy những nội dung trang web của bạn dễ hơn, nhanh hơn với thứ hạng cao. Website tải NHANH, giao diện ĐẸP, quản trị DỄ D&Agrave;NG, TH&Acirc;N THIỆN với người d&ugrave;ng. T&iacute;ch hợp cung cụ th&ocirc;ng minh, nhận biết kh&aacute;ch h&agrave;ng đang muốn g&igrave;, để đưa ra chiến lược b&aacute;n h&agrave;ng ph&ugrave; hợp. Giải ph&aacute;p quảng b&aacute; thương hiệu, marketing online tăng lượng truy cập, đưa kh&aacute;ch h&agrave;ng tiềm năng tới website. Kh&aacute;m bệnh website, đẩy h&agrave;ng loạt từ kh&oacute;a tiềm năng l&ecirc;n TOP GOOGLE, tăng nhanh doanh số b&aacute;n h&agrave;ng!</p>', '<p>\r\n	VinaTAB thiết kế website theo chuẩn W3C, th&ocirc;ng minh v&agrave; tối ưu h&oacute;a google: Gi&uacute;p cho Google t&igrave;m thấy những nội dung trang web của bạn dễ hơn, nhanh hơn với thứ hạng cao. Website tải NHANH, giao diện ĐẸP, quản trị DỄ D&Agrave;NG, TH&Acirc;N THIỆN với người d&ugrave;ng. T&iacute;ch hợp cung cụ th&ocirc;ng minh, nhận biết kh&aacute;ch h&agrave;ng đang muốn g&igrave;, để đưa ra chiến lược b&aacute;n h&agrave;ng ph&ugrave; hợp. Giải ph&aacute;p quảng b&aacute; thương hiệu, marketing online tăng lượng truy cập, đưa kh&aacute;ch h&agrave;ng tiềm năng tới website. Kh&aacute;m bệnh website, đẩy h&agrave;ng loạt từ kh&oacute;a tiềm năng l&ecirc;n TOP GOOGLE, tăng nhanh doanh số b&aacute;n h&agrave;ng!</p>', '2019-09-04__hihi.png', 1),
(4, '<p>\r\n	dddddddddddd</p>', '<p>\r\n	dddddddddddđ</p>', '2019-09-04__img-0545.jpg', 0),
(8, '<p>\r\n	đ&acirc;sdasdasdas</p>', '<p>\r\n	đ&acirc;sdasdasds</p>', '2019-09-04__img-0559.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(255) NOT NULL,
  `rname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type_id` int(255) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `r_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `rname`, `description`, `created_at`, `type_id`, `picture`, `uid`, `updated_at`, `r_price`) VALUES
(2, 'Suite 001', '<p>\r\n	Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</p>', '2019-09-11 14:15:47', 1, '2019-09-05__hinh1.jpeg', 4, '2019-09-04 20:59:03', '400000'),
(4, 'Suite 002', '<p>\r\n	Ph&ograve;ng Suite 003 - Gi&aacute; ph&ograve;ng bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. - C&oacute; view nh&igrave;n ra biển - C&oacute; c&aacute;c loại h&igrave;nh nh&agrave; h&agrave;ng, bar, ph&ograve;ng gym - Miễn ph&iacute; tiền ph&ograve;ng cho tối đa 02 b&eacute; dưới 10 tuổi ngủ chung với bố mẹ (kh&ocirc;ng bố tr&iacute; th&ecirc;m giường, kh&ocirc;ng miễn ph&iacute; ăn s&aacute;ng). - Kh&aacute;ch sạn sẽ giữ ph&ograve;ng đ&atilde; đăng k&yacute; trước theo ng&agrave;y đến chậm nhất l&agrave; 18h00, ngoại trừ những trường hợp được th&ocirc;ng b&aacute;o trước hoặc đặt ph&ograve;ng c&oacute; bảo đảm. - Giờ nhận ph&ograve;ng : 14h00 - Giờ trả ph&ograve;ng : 12h00 trưa - Trả ph&ograve;ng trễ : + Trước 18h00 : t&iacute;nh th&ecirc;m 50% + Sau 18h00 : t&iacute;nh th&agrave;nh 100% - Gi&aacute; ph&ograve;ng tr&ecirc;n c&oacute; thể thay đổi m&agrave; kh&ocirc;ng phải b&aacute;o trước. - Giảm gi&aacute; đặc biệt cho kh&aacute;ch đi theo đo&agrave;n v&agrave; kh&aacute;ch ở d&agrave;i hạn. - Thanh to&aacute;n c&aacute;c loại thẻ : MASTER, VISA -L&agrave; loại ph&ograve;ng cao cấp nhất trong một kh&aacute;ch sạn, thường ở tầng cao nhất với c&aacute;c trang bị v&agrave; dịch vụ đặc biệt. Th&ocirc;ng thường mỗi ph&ograve;ng Suite gồm 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch, 2 ph&ograve;ng vệ sinh v&agrave; nhiều ban c&ocirc;ng hướng đẹp nhất.</p>\r\n<p>\r\n	&nbsp;</p>', '2019-09-11 14:15:57', 1, '2019-09-05__h2.jpeg', 4, '2019-09-04 21:01:27', '400000'),
(5, 'Suite 003', '<p>\r\n	Ph&ograve;ng Suite 003 - Gi&aacute; ph&ograve;ng bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. - C&oacute; view nh&igrave;n ra biển - C&oacute; c&aacute;c loại h&igrave;nh nh&agrave; h&agrave;ng, bar, ph&ograve;ng gym - Miễn ph&iacute; tiền ph&ograve;ng cho tối đa 02 b&eacute; dưới 10 tuổi ngủ chung với bố mẹ (kh&ocirc;ng bố tr&iacute; th&ecirc;m giường, kh&ocirc;ng miễn ph&iacute; ăn s&aacute;ng). - Kh&aacute;ch sạn sẽ giữ ph&ograve;ng đ&atilde; đăng k&yacute; trước theo ng&agrave;y đến chậm nhất l&agrave; 18h00, ngoại trừ những trường hợp được th&ocirc;ng b&aacute;o trước hoặc đặt ph&ograve;ng c&oacute; bảo đảm. - Giờ nhận ph&ograve;ng : 14h00 - Giờ trả ph&ograve;ng : 12h00 trưa - Trả ph&ograve;ng trễ : + Trước 18h00 : t&iacute;nh th&ecirc;m 50% + Sau 18h00 : t&iacute;nh th&agrave;nh 100% - Gi&aacute; ph&ograve;ng tr&ecirc;n c&oacute; thể thay đổi m&agrave; kh&ocirc;ng phải b&aacute;o trước. - Giảm gi&aacute; đặc biệt cho kh&aacute;ch đi theo đo&agrave;n v&agrave; kh&aacute;ch ở d&agrave;i hạn. - Thanh to&aacute;n c&aacute;c loại thẻ : MASTER, VISA -L&agrave; loại ph&ograve;ng cao cấp nhất trong một kh&aacute;ch sạn, thường ở tầng cao nhất với c&aacute;c trang bị v&agrave; dịch vụ đặc biệt. Th&ocirc;ng thường mỗi ph&ograve;ng Suite gồm 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch, 2 ph&ograve;ng <strong>vệ sinh v&agrave; nhiều ban c&ocirc;ng hướng đẹp nhất.</strong></p>', '2019-09-11 14:15:59', 1, '2019-09-05__h3.jpeg', 5, '2019-09-04 21:01:44', '400000'),
(6, 'Suite 004', '<p>\r\n	Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. ) - Miễn ph&iacute; tiền ph&ograve;ng cho tối đa 02 b&eacute; dưới 10 tuổi ngủ chung với bố mẹ (kh&ocirc;ng bố tr&iacute; th&ecirc;m giường, kh&ocirc;ng miễn ph&iacute; ăn s&aacute;ng). - Kh&aacute;ch sạn sẽ giữ ph&ograve;ng đ&atilde; đăng k&yacute; trước theo ng&agrave;y đến chậm nhất l&agrave; 18h00, ngoại trừ những trường hợp được th&ocirc;ng b&aacute;o trước hoặc đặt ph&ograve;ng c&oacute; bảo đảm. - Giờ nhận ph&ograve;ng : 14h00 - Giờ trả ph&ograve;ng : 12h00 trưa - Trả ph&ograve;ng trễ : + Trước 18h00 : t&iacute;nh th&ecirc;m 50% + Sau 18h00 : t&iacute;nh th&agrave;nh 100% - Gi&aacute; ph&ograve;ng tr&ecirc;n c&oacute; thể thay đổi m&agrave; kh&ocirc;ng phải b&aacute;o trước. - Giảm gi&aacute; đặc biệt cho kh&aacute;ch đi theo đo&agrave;n v&agrave; kh&aacute;ch ở d&agrave;i hạn. - Thanh to&aacute;n c&aacute;c loại thẻ : MASTER, VISA -L&agrave; loại ph&ograve;ng cao cấp nhất trong một kh&aacute;ch sạn, thường ở tầng cao nhất với c&aacute;c trang bị v&agrave; dịch vụ đặc biệt. Th&ocirc;ng thường mỗi ph&ograve;ng Suite gồm 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch, 2 ph&ograve;ng vệ sinh v&agrave; nhiều ban c&ocirc;ng hướng đẹp nhất.</p>', '2019-09-11 14:16:01', 1, '2019-09-05__h4.jpeg', 4, '2019-09-04 21:02:15', '400000'),
(7, 'Suite 005', '<p>\r\n	Gi&aacute; : 699.99$/day Ph&ograve;ng nằm từ tầng thứ 3 đến tầng 10 của Hotel - ph&ograve;ng Deluxe mang đến một kh&ocirc;ng gian nhẹ nh&agrave;ng v&agrave; thanh lịch. Ph&ograve;ng tắm bằng đ&aacute; cẩm thạch đầy đủ bao gồm một bồn tắm với v&ograve;i sen, đồ d&ugrave;ng vệ sinh với ph&ograve;ng tắm đầy đủ v&agrave; tiện nghi C&aacute;c ph&ograve;ng c&oacute; m&aacute;y lạnh, TV m&agrave;n h&igrave;nh phẳng, k&eacute;t an to&agrave;n v&agrave; minibar. Ph&ograve;ng tắm ri&ecirc;ng bằng đ&aacute; cẩm thạch c&oacute; bồn tắm ng&acirc;m s&acirc;u, v&ograve;i sen v&agrave; đồ d&ugrave;ng vệ sinh miễn ph&iacute;.</p>', '2019-09-11 14:16:04', 1, '2019-09-05__h5.jpeg', 5, '2019-09-05 01:40:31', '400000'),
(8, 'Suite 006', '<p>\r\n	Gi&aacute; : 599.99$/day Ph&ograve;ng nằm từ tầng thứ 3 đến tầng 10 của Hotel - ph&ograve;ng Deluxe mang đến một kh&ocirc;ng gian nhẹ nh&agrave;ng v&agrave; thanh lịch. Ph&ograve;ng tắm bằng đ&aacute; cẩm thạch đầy đủ bao gồm một bồn tắm với v&ograve;i sen, đồ d&ugrave;ng vệ sinh với ph&ograve;ng tắm đầy đủ v&agrave; tiện nghi C&aacute;c ph&ograve;ng c&oacute; m&aacute;y lạnh, TV m&agrave;n h&igrave;nh phẳng, k&eacute;t an to&agrave;n v&agrave; minibar. Ph&ograve;ng tắm ri&ecirc;ng bằng đ&aacute; cẩm thạch c&oacute; bồn tắm ng&acirc;m s&acirc;u, v&ograve;i sen v&agrave; đồ d&ugrave;ng vệ sinh miễn ph&iacute;.</p>', '2019-09-11 14:16:07', 1, '2019-09-05__h6.jpeg', 3, '2019-09-05 01:40:39', '400000'),
(16, 'Suite 007', '<p>\r\n	Gi&aacute; : 699.99$/day Ph&ograve;ng nằm từ tầng thứ 3 đến tầng 10 của Hotel - ph&ograve;ng Deluxe mang đến một kh&ocirc;ng gian nhẹ nh&agrave;ng v&agrave; thanh lịch. Ph&ograve;ng tắm bằng đ&aacute; cẩm thạch đầy đủ bao gồm một bồn tắm với v&ograve;i sen, đồ d&ugrave;ng vệ sinh với ph&ograve;ng tắm đầy đủ v&agrave; tiện nghi C&aacute;c ph&ograve;ng c&oacute; m&aacute;y lạnh, TV m&agrave;n h&igrave;nh phẳng, k&eacute;t an to&agrave;n v&agrave; minibar. Ph&ograve;ng tắm ri&ecirc;ng bằng đ&aacute; cẩm thạch c&oacute; bồn tắm ng&acirc;m s&acirc;u, v&ograve;i sen v&agrave; đồ d&ugrave;ng vệ sinh miễn ph&iacute;.</p>', '2019-09-11 14:16:10', 1, '2019-09-09__h7.jpeg', 2, '2019-09-09 08:31:44', '400000'),
(18, 'Deluxe 001', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:14', 2, '2019-09-10__h2.jpeg', 1, '2019-09-10 02:56:14', '400000'),
(19, 'Deluxe 002', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:18', 2, '2019-09-10__h3.jpeg', 2, '2019-09-10 02:56:53', '400000'),
(20, 'Deluxe 003', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:22', 2, '2019-09-10__h4.jpeg', 3, '2019-09-10 02:57:19', '400000'),
(21, 'Deluxe 004', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:27', 2, '2019-09-10__h5.jpeg', 2, '2019-09-10 02:57:53', '400000'),
(22, 'Deluxe 005', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:31', 2, '2019-09-10__h6.jpeg', 5, '2019-09-10 02:58:34', '400000'),
(23, 'Deluxe 006', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:35', 2, '2019-09-10__h7.jpeg', 3, '2019-09-10 02:58:58', '400000'),
(24, 'Superior 001', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:39', 3, '2019-09-10__h7.jpeg', 8, '2019-09-10 03:00:31', '400000'),
(25, 'Superior 002', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:43', 3, '2019-09-10__h6.jpeg', 5, '2019-09-10 03:00:51', '400000'),
(26, 'Superior 003', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:48', 3, '2019-09-10__h4.jpeg', 1, '2019-09-10 03:01:12', '400000'),
(27, 'Standard 001', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:51', 4, '2019-09-10__h3.jpeg', 6, '2019-09-10 03:02:19', '400000'),
(28, 'Standard 002', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:53', 4, '2019-09-10__h4.jpeg', 8, '2019-09-10 03:02:39', '400000'),
(29, 'Standard 003', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:55', 4, '2019-09-10__h6.jpeg', 3, '2019-09-10 03:03:03', '400000'),
(30, 'Standard 004', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng Suite 001 - Gi&aacute; ph&ograve;ng: 999.99$/day (bao gồm ăn s&aacute;ng tự chọn, VAT &amp; ph&iacute; phục vụ. )&nbsp;</span></p>', '2019-09-11 14:16:57', 4, '2019-09-10__h7.jpeg', 5, '2019-09-10 03:03:24', '400000'),
(31, 'Standard 005', '<p>\r\n	<span style=\"color: rgb(65, 98, 119); font-family: pt_serif_captionregular;\">Ph&ograve;ng ti&ecirc;u chuẩn 01 giường đ&ocirc;i hoặc 02 giường đơn. Tất cả c&aacute;c ph&ograve;ng c&oacute; cửa sổ , với tầm nh&igrave;n hướng biển đ&oacute;n &aacute;nh s&aacute;ng tự nhi&ecirc;n.</span></p>', '2019-09-11 14:16:59', 4, '2019-09-10__h5.jpeg', 4, '2019-09-10 03:10:41', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(255) NOT NULL,
  `tname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `tname`) VALUES
(1, 'Phòng Suite (SUT)'),
(2, 'Phòng Deluxe (DLX)'),
(3, 'Phòng Superior (SUP)'),
(4, 'Phòng standard (STD)'),
(5, 'phòng bình thường'),
(6, 'phòng hạng sang'),
(13, 'vila 01');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `t_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_adress` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_phone` int(11) NOT NULL,
  `t_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_name_room` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_date_checkin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_date_checkout` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_big` int(11) NOT NULL,
  `t_mall` int(11) NOT NULL,
  `t_total` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `room_id`, `t_name`, `t_adress`, `t_phone`, `t_email`, `t_note`, `t_name_room`, `t_date_checkin`, `t_date_checkout`, `t_big`, `t_mall`, `t_total`, `t_active`) VALUES
(1, 2, 'truong ngoc tan', '85 Phung Hung street, Eale commune, Eale commune, Eale commune', 905819501, 'parksaming@gmail.com', 'adddddddddddd', 'Suite 001', '2019-09-06T13:01', '2019-09-07T13:00', 1, 1, '400000', 0),
(2, 5, 'truong ngoc tan', '85 Phung Hung street, Eale commune, Eale commune, Eale commune', 905819501, 'parksaming@gmail.com', 'tôi muốn đặt phòng', 'Suite 003', '2019-09-11T01:00', '2019-09-18T01:00', 1, 1, '400000', 1),
(3, 6, 'truong ngoc tan', '85 Phung Hung street, Eale commune, Eale commune, Eale commune', 905819501, 'parksaming@gmail.com', 'tôi muốn đặt phòng này', 'Suite 004', '2019-09-13T01:00', '2019-09-04T13:01', 1, 1, '400000', 1),
(4, 2, 'truong ngoc tan', '85 Phung Hung street, Eale commune, Eale commune, Eale commune', 905819501, 'parksaming@gmail.com', 'tôi muốn đặt phòng tại đây', 'Suite 001', '2019-09-13T01:00', '2019-09-20T14:01', 1, 1, '400000', 0),
(5, 16, 'truong ngoc tan', '85 Phung Hung street, Eale commune, Eale commune, Eale commune', 905819501, 'parksaming@gmail.com', 'tôi muốn đặt phòng', 'Suite 007', '2019-09-26T02:01', '2019-09-20T14:01', 1, 1, '700000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `remember_token`, `role`) VALUES
(1, 'admin', '$2y$10$PCmBQ2JfvrQ/JO41J8mmx.M6Nphe9Xd4BNCHZSnfRL5/At2ZxWBi2', 'Nguyễn Văn A', 'zstguAOcYcJYYD3TS2tKBM6rsd69rOEIZX0v58ksqsX41vE5BKZfoq1iqdu8', 1),
(3, 'mod', '$2y$10$MyAmznm7PDhfGPedngJenu55fYZGEOMPh85UZBy1kOVfdodx4QMbm', 'Mod hệ thống', '', 1),
(5, 'tan', '$2y$10$SqFwUGl7Eft/9Q7PxGVnCOcutuSfBmVn0BQM2oYFfQvJ3Gj9CcgtS', 'truong ngoc tan', '', 1),
(6, 'user', '$2y$10$o3a8C6fnnbfPu88lCAJbwe1wU0rtM5ucKait02Bq/UU0xG0Dp4Bni', 'Jayson Michel', 't1nsFvxhrxB3qjwHbLX6ZLnP0qSdYukEWRukK1eS3cGjUJnhEzCpRjaoNp8v', 2),
(8, 'tan1', '$2y$10$qvStplBtejIHiCweAMZBj.hUQienjeVvsR4yBy.3tAkKRRPTyaFQS', 'Nguyen Minh312xxxx', 'xt1li9PjZBiVOqirIOrqAIVuBcK601MHiB49VMhR', 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `id` int(255) NOT NULL,
  `uname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`id`, `uname`) VALUES
(1, 'tivi'),
(2, 'Tủ lạnh'),
(3, 'Bàn làm việc'),
(4, 'Đa dạng'),
(5, 'TiVI 4K, Tủ lạnh. v..v..'),
(6, 'quạt hơi nướcxxxx'),
(8, 'bếp ga'),
(9, 'tủ lạnh'),
(10, 'tủ lạnhxxx'),
(11, 'tủ lạnhxxx111');

-- --------------------------------------------------------

--
-- Table structure for table `vnecontact`
--

CREATE TABLE `vnecontact` (
  `id` int(255) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vnecontact`
--

INSERT INTO `vnecontact` (`id`, `fullname`, `email`, `subject`, `c_content`) VALUES
(1, 'Trương Ngọc Tân', 'parksaming@gmail.com', 'add', 'Tôi cần liên hệ với admin'),
(2, 'truong ngoc tan', 'parksaming@gmail.com', 'TEST TWO', 'dddddddddddd'),
(3, 'Nguyen Minh', 'minhnh6fpt@gmail.com', 'TEST TWO', 'dasssssssssssssss'),
(4, 'truong ngoc tan', 'parksaming@gmail.com', 'TEST TWO', 'đâsdsadsa'),
(5, 'truong ngoc tan', 'parksaming@gmail.com', 'đsađá', 'đâsd'),
(6, 'Nguyen Minh', 'minhnh6fpt@gmail.com', 'TEST TWO', 'đâsdasdsa'),
(7, 'truong ngoc tan', 'parksaming@gmail.com', 'TEST TWO', 'ahihi'),
(8, 'Nguyen Minh', 'minhnh6fpt@gmail.com', 'TEST TWO', 'tân cần liên hệ với admin'),
(9, 'truong ngoc tan', 'parksaming@gmail.com', 'TEST TWO', 'dddddddddd'),
(10, 'Nguyen Minh', 'minhnh6fpt@gmail.com', 'TEST TWO', 'toi can lien he vs bạn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vnecontact`
--
ALTER TABLE `vnecontact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vnecontact`
--
ALTER TABLE `vnecontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
