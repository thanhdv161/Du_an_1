-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 12:36 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(10) NOT NULL,
  `noiDung` varchar(255) NOT NULL,
  `maTK` int(10) NOT NULL,
  `maHH` int(10) NOT NULL,
  `ngayBL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`maBL`, `noiDung`, `maTK`, `maHH`, `ngayBL`) VALUES
(1, 'ac', 21, 14, '2023-11-24'),
(2, 'nhu l', 21, 17, '2023-11-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluantintuc`
--

CREATE TABLE `binhluantintuc` (
  `maBLTT` int(10) NOT NULL,
  `noiDung` varchar(255) NOT NULL,
  `maTK` int(10) NOT NULL,
  `maTT` int(10) NOT NULL,
  `ngayBL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `maCT` int(10) NOT NULL,
  `maDH` int(10) NOT NULL,
  `maHH` int(10) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `tongTien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`maCT`, `maDH`, `maHH`, `soLuong`, `tongTien`) VALUES
(1, 5, 17, 1, 32990000),
(5, 7, 13, 1, 15790000),
(6, 8, 14, 1, 18990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `maLoai` int(10) NOT NULL,
  `tenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`maLoai`, `tenLoai`) VALUES
(1, 'iPhone'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Realme');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(10) NOT NULL,
  `tenKH` varchar(255) NOT NULL,
  `ngayDatHang` date NOT NULL,
  `tongTien` double NOT NULL,
  `ghiChu` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `maTrangThai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDH`, `tenKH`, `ngayDatHang`, `tongTien`, `ghiChu`, `diaChi`, `sdt`, `maTrangThai`) VALUES
(5, 'admin', '2023-11-28', 32990000, '', 'ha nam', 0, 2),
(7, 'admin', '2023-11-28', 15790000, '', 'ha nam', 0, 1),
(8, 'admin', '2023-11-28', 18990000, '', 'ha nam', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `maHH` int(10) NOT NULL,
  `tenHH` varchar(255) NOT NULL,
  `gia` double NOT NULL,
  `giaGoc` double NOT NULL,
  `mauSac` varchar(50) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `maLoai` int(10) NOT NULL,
  `luotxem` int(10) NOT NULL DEFAULT 0,
  `moTa` varchar(500) NOT NULL,
  `trangthai` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`maHH`, `tenHH`, `gia`, `giaGoc`, `mauSac`, `anh`, `maLoai`, `luotxem`, `moTa`, `trangthai`) VALUES
(13, 'iPhone 13 128GB', 15790000, 17990000, 'Đen,Trắng,Hồng', 'ip1.1.jpeg,ip1.2.jpeg,ip1.3.jpeg,ip1.4.jpeg', 1, 0, 'iPhone 13 – Siêu phẩm mới của \"nhà Táo\" sẽ đem đến trải nghiệm thú vị cho người dùng. Màu sắc mới, camera nhiều thay đổi, vi xử lý mạnh mẽ hơn, pin lâu hơn,… là những gì iPhone 13 sở hữu và chinh phục được những vị khách khó tính nhất. Cùng cập nhật thông tin, đặc điểm nổi bật về smartphone Apple này.                  ', 0),
(14, 'iPhone 14 128GB', 18990000, 20990000, 'Đen,Trắng', 'ip2.1.jpeg,ip2.2.jpeg,ip2.3.jpeg,ip2.4.jpeg', 1, 0, 'iPhone 14 128GB còn sở hữu nhiều ưu điểm như: khả năng truyền tải dữ liệu cực nhanh; bảng màu bắt mắt với màu xanh nhẹ nhàng, tím trendy; đỏ rực rỡ, thiết kế tinh tế, đẳng cấp; chuẩn chống nước IP68... Mặc dù phiên bản iPhone 14 128GB có mức dung lượng ROM thấp nhất trong các phiên bản iPhone 14 còn lại nhưng bạn có thể lưu trữ được gần 40.000 bức ảnh có độ phân giải 12MP và thoải mái tải hàng chục ứng dụng mạng xã hội như FaceBook, TikTok, Instagram, Twitter,... hay những tựa game hot như Liên ', 0),
(15, 'iPhone 15 128GB', 22490000, 23490000, 'Đen,Trắng', 'ip3.1.jpeg,ip3.2.jpeg,ip3.3.jpeg,ip3.4.jpeg', 1, 0, 'iPhone 15 128GB năm nay mang đến trải nghiệm cầm nắm cực kỳ tốt, có thể nói tốt nhất trong 4 phiên bản iPhone 15 Series bởi trọng lượng chỉ 171 gram. So với iPhone 14 Pro nặng 206 gram, iPhone 15 128 GB nhẹ hơn 35 gram. Ngoài ra, các cạnh viền iPhone 15 cũng được bo góc mềm mại hơn so với phiên bản tiền nhiệm, tạo cảm giác thoải mái khi cầm, không còn cấn tay giống như iPhone 14 Pro.                 ', 0),
(17, 'iPhone 15 Pro Max 256GB', 32990000, 34990000, 'Titan đen,Titan trắng', 'ip5.1.jpeg,ip5.2.jpeg,ip5.3.jpeg,ip5.4.jpeg', 1, 0, 'iPhone 15 Pro Max có khung viền làm từ chất liệu titan loại 5 thay thế cho khung thép không gỉ trên iPhone 14 Pro Max. Vì titan nhẹ hơn thép không gỉ đến 40% nên thay đổi này giúp trọng lượng 15 Pro Max giảm 19 grams so với phiên bản tiền nhiệm. Ngoài giảm trọng lượng, chất liệu titan còn mang lại một số ưu điểm khác như: Tăng độ bền của khung, hạn chế tình trạng mất màu theo thời gian; Bảo vệ điện thoại tốt hơn trong trường hợp va đập bất ngờ; Tăng tính thẩm mỹ cho thiết bị.            ', 0),
(18, 'Samsung Galaxy S23 Plus 8/256GB', 19990000, 25990000, 'Xanh lá,Đen', 'ss1.1.jpeg,ss1.2.jpeg,ss1.3.jpeg,ss1.4.jpeg', 2, 0, 'Samsung Galaxy S23 Plus ghi điểm với màn lột xác ấn tượng từ ngoại hình đến phần cứng bên trong. Thiết kế vì một môi trường xanh kết hợp vi xử lý 4nm siêu mạnh mẽ, camera chụp ảnh xuyên màn đêm chắc chắn sẽ đem đến những trải nghiệm tuyệt vời nhất cho người dùng.     ', 0),
(19, 'Samsung Galaxy S20 FE 256GB', 6990000, 10990000, 'Xanh,Đen', 'ss2.1.jpeg,ss2.2.jpeg,ss2.3.jpeg,ss2.4.jpeg', 2, 0, 'Samsung Galaxy S20 FE ra mắt hội tụ đầy đủ các tính năng, sức mạnh của một flagship trong mức giá vô cùng hấp dẫn. Qua đó, Samfan dễ dàng trải nghiệm khả năng nhiếp ảnh chuyên nghiệp, chơi game hạng nặng với hiệu năng và camera cực kỳ chất lượng của dòng Galaxy S. Galaxy S20 FE sở hữu ngoại hình trẻ trung với màu sắc cá tính             ', 0),
(20, 'Samsung Galaxy Z Flip4 5G 256GB', 13990000, 18990000, 'Xanh,Đen', 'ss3.1.jpeg,ss3.2.jpeg,ss3.3.jpeg,ss3.4.jpeg', 2, 0, 'Samsung Galaxy Z Flip4 – chiếc smartphone nắp gập xịn sò bậc nhất thị trường di động đánh dấu cho sự phát triển vượt bậc về công nghệ. Không chỉ đơn thuần là một chiếc smartphone cao cấp, Galaxy Z Flip4 còn là món phụ kiện thời trang tuyệt vời cho các quý cô trong dịp cuối năm nay.                         ', 0),
(21, 'Samsung Galaxy Z Flip5 5G 512GB', 18990000, 22990000, 'Xanh,Trắng', 'ss4.1.jpeg,ss4.2.jpeg,ss4.3.jpeg,ss4.4.jpeg', 2, 0, 'Galaxy Z Flip5 thu hút đông đảo người dùng với phong cách thiết kế gập độc đáo nhưng không kém phần thời trang, cá tính. Đi kèm đó là hiệu năng mạnh mẽ cùng hàng loạt tính năng công nghệ hiện đại, hứa hẹn sẽ giúp bạn nâng tầm trải nghiệm lên một đỉnh cao mới.', 0),
(22, 'Xiaomi Redmi 13C', 3290000, 3990000, 'Đen,Trắng', 'xm1.1.jpeg,xm1.2.jpeg,xm1.3.jpeg,xm1.4.jpeg', 3, 0, 'Xiaomi Redmi 13C là một trong những mẫu smartphone chất lượng có giá cả phải chăng được đông đảo người dùng yêu thích trên thị trường hiện nay. Đây là minh chứng thể hiện sự nỗ lực không ngừng của Xiaomi nhằm mang đến những sản phẩm tốt, giúp nâng cao trải nghiệm sử dụng của người dùng.           ', 0),
(23, 'Xiaomi Redmi A2', 1890000, 2190000, 'Đen', 'xm2.1.jpeg,xm2.2.jpeg,xm2.3.jpeg,xm2.4.jpeg', 3, 0, 'Dù thuộc phân khúc smartphone giá rẻ song Redmi A2 vẫn mang đến cho người dùng những trải nghiệm hấp dẫn như thiết kế đẹp mắt, màn hình to rõ, hiệu năng ổn định cùng thời lượng pin dài lâu. Có thể nói, đây sẽ là sự lựa chọn hoàn hảo dành cho những ai muốn sở hữu một chiếc điện thoại đơn giản nhưng làm việc vô cùng hiệu quả.            ', 0),
(24, 'Xiaomi Redmi Note 12', 4990000, 5790000, 'Xanh,Đen', 'xm3.1.jpeg,xm3.2.jpeg,xm3.3.jpeg,xm3.4.jpeg', 3, 0, 'Redmi Note 12 là chiếc smartphone mới được ra mắt của hãng công nghệ Xiaomi. Sản phẩm thuộc phân khúc tầm trung nhưng thu hút sự chú ý của người dùng với con chip mạnh mẽ cùng camera độ phân giải cao. Redmi Note 12 được nhà sản xuất trang bị thiết kế vuông thời thượng, các góc được làm bo tròn, mặt lưng và bộ khung được vát thẳng nên nhìn tổng thể thiết kế của máy vô cùng hiện đại và trẻ trung.                      ', 0),
(25, 'Xiaomi 13T 12/256GB', 11990000, 12990000, 'Đen,Xanh', 'xm4.1.jpeg,xm4.2.jpeg,xm4.3.jpeg,xm4.4.jpeg', 3, 0, 'Ngay khi ra mắt vào tháng 9/2023, Xiaomi 13T đã thu hút sự chú ý của đông đảo người dùng. Đặc biệt là với những người đam mê chụp ảnh nhờ sở hữu cụm camera hợp tác với thương hiệu sản xuất máy ảnh Leica danh tiếng. Bên cạnh đó, thiết bị cũng gây ấn tượng với thiết kế bắt mắt, màn hình sống động sắc nét, hiệu năng mạnh mẽ trong phân khúc cùng viên pin khủng, hứa hẹn sẽ mang đến cho người dùng những trải nghiệm đầy thú vị.          ', 0),
(26, 'Realme C55 8/256GB', 5290000, 5990000, 'Vàng,Đen', 'rm1.1.jpeg,rm1.2.jpeg,rm1.3.jpeg,rm1.4.jpeg', 4, 0, 'Realme C55 là tân binh mở màn cho những trải nghiệm mới trên điện thoại realme trong năm 2023. Thiết bị sở hữu những thông số kỹ thuật đáng chú ý như thiết kế trẻ trung, hiện đại, màn hình rộng rãi sắc nét, sạc nhanh 33W và camera kép 64MP. Đi kèm đó là mức giá bán phù hợp cho nhiều đối tượng người dùng. realme C55 hứa hẹn sẽ là sự lựa chọn đáng cân nhắc trong phân khúc giá rẻ.               ', 0),
(27, 'Realme C35 (4/128GB)', 4290000, 4990000, 'Đen,Xanh', 'rm2.1.jpeg,rm2.2.jpeg,rm2.3.jpeg,rm2.4.jpeg', 4, 0, 'Realme C35 là một trong những mẫu smartphone giá rẻ đáng chú ý nhất năm nay. Máy vừa được trình làng với ngoại hình trẻ trung, pin dung lượng khủng, camera với nhiều tính năng được nâng cấp. C35 là lựa chọn rất tuyệt vừa để liên lạc vừa để giải trí cho tất cả mọi người.', 0),
(28, 'Realme C51 (4/128GB)', 3790000, 4190000, 'Xanh,Đen', 'rm3.1.jpeg,rm3.2.jpeg,rm3.3.jpeg,rm3.4.jpeg', 4, 0, 'Realme C51 là một tân binh mới của nhà Realme với nhiều tính năng công nghệ hấp dẫn, thu hút mọi đối tượng người dùng. Nổi bật trong số đó có thể kể đến như thiết kế cao cấp, thời thượng, hiệu năng đáp ứng tốt nhu cầu sử dụng hàng ngày, camera sắc nét cùng viên pin lớn cho thời lượng sử dụng dài lâu. ', 0),
(29, 'Realme 11 Pro', 10690000, 11990000, 'Xanh,Trắng', 'rm4.1.jpeg,rm4.2.jpeg,rm4.3.jpeg,rm4.4.jpeg', 4, 0, 'Realme 11 Pro sở hữu một vẻ ngoài vô cùng cao cấp với mặt lưng da cùng màn hình cong bóng bẩy đẹp mắt, hiệu năng mạnh mẽ và cụm camera cực xịn sò. Với nhiều lợi thế lớn như vậy, Realme 11 Pro sẽ trở thành một đối thủ đáng gờm trong phân khúc cận cao cấp trong nửa cuối năm nay.', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `maLoaiTT` int(10) NOT NULL,
  `tenLoaiTT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` int(10) NOT NULL,
  `tenTK` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `maVaiTro` int(10) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `tenTK`, `matKhau`, `email`, `diaChi`, `maVaiTro`, `anh`, `sdt`) VALUES
(11, 'minh1111235', '1234567', 'kh11@gmail.com', 'bac giang', 2, 'Acer_Wallpaper_03_5000x2814.jpg', 394494851),
(12, 'admin', '123456', 'ad1@gmail.com', 'ha nam', 4, 'Acer_Wallpaper_01_5000x2814.jpg', 0),
(21, 'hoangvietminh2245', '123456', 'hminh0555@gmail.com', '1111111111', 2, '15.jpg', 394494851);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `maTT` int(10) NOT NULL,
  `ngayVietTin` date NOT NULL,
  `maTK` int(11) NOT NULL,
  `maLoaiTT` int(10) NOT NULL,
  `tieuDeTT` varchar(255) NOT NULL,
  `noiDungTT` varchar(255) NOT NULL,
  `anhTT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `id` int(10) NOT NULL,
  `tenTrangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthaidonhang`
--

INSERT INTO `trangthaidonhang` (`id`, `tenTrangThai`) VALUES
(1, 'Chưa Xác Nhận'),
(2, 'Đã Xác Nhận'),
(3, 'Đang Giao Hàng'),
(4, 'Đã Giao Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `maVaitro` int(10) NOT NULL,
  `tenVaiTro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`maVaitro`, `tenVaiTro`) VALUES
(1, 'khách hàng văng lai'),
(2, 'khách hàng'),
(3, 'nhân viên'),
(4, 'quản trị viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `fk_hanghoa` (`maHH`),
  ADD KEY `fk_taikhoan` (`maTK`);

--
-- Chỉ mục cho bảng `binhluantintuc`
--
ALTER TABLE `binhluantintuc`
  ADD PRIMARY KEY (`maBLTT`),
  ADD KEY `fk_mataikhoan` (`maTK`),
  ADD KEY `fk_matintuc` (`maTT`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`maCT`),
  ADD KEY `fk_maHH` (`maHH`),
  ADD KEY `fk_maDH` (`maDH`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`maLoai`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`),
  ADD KEY `fk_matt` (`maTrangThai`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`maHH`),
  ADD KEY `fk_maloai` (`maLoai`);

--
-- Chỉ mục cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`maLoaiTT`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`),
  ADD KEY `fk_vaitro` (`maVaiTro`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`maTT`),
  ADD KEY `fk_maloaitt` (`maLoaiTT`),
  ADD KEY `fk_matk` (`maTK`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`maVaitro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `binhluantintuc`
--
ALTER TABLE `binhluantintuc`
  MODIFY `maBLTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `maCT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `maLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `maHH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  MODIFY `maLoaiTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `maTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `maVaitro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_hanghoa` FOREIGN KEY (`maHH`) REFERENCES `hanghoa` (`maHH`),
  ADD CONSTRAINT `fk_taikhoan` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);

--
-- Các ràng buộc cho bảng `binhluantintuc`
--
ALTER TABLE `binhluantintuc`
  ADD CONSTRAINT `fk_mataikhoan` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`),
  ADD CONSTRAINT `fk_matintuc` FOREIGN KEY (`maTT`) REFERENCES `tintuc` (`maTT`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_maDH` FOREIGN KEY (`maDH`) REFERENCES `donhang` (`maDH`),
  ADD CONSTRAINT `fk_maHH` FOREIGN KEY (`maHH`) REFERENCES `hanghoa` (`maHH`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_matt` FOREIGN KEY (`maTrangThai`) REFERENCES `trangthaidonhang` (`id`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_maloai` FOREIGN KEY (`maLoai`) REFERENCES `danhmuc` (`maLoai`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_vaitro` FOREIGN KEY (`maVaiTro`) REFERENCES `vaitro` (`maVaitro`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_maloaitt` FOREIGN KEY (`maLoaiTT`) REFERENCES `loaitintuc` (`maLoaiTT`),
  ADD CONSTRAINT `fk_matk` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
