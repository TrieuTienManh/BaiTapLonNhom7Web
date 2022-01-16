-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2022 lúc 02:13 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlreddit`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_baiviet`
--

CREATE TABLE `tb_baiviet` (
  `MaBaiViet` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `TieuDe` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoiDung` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AnhBaiViet` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_baiviet`
--

INSERT INTO `tb_baiviet` (`MaBaiViet`, `MaNguoiDung`, `TieuDe`, `NoiDung`, `AnhBaiViet`) VALUES
(1, 1, 'This stop sign I found in a rural part of Ireland from fed up locals', 'If it\\\'s the same as the UK where this sort of thing is also common in rural areas', 'https://preview.redd.it/dnjoakslgnb81.jpg?width=640&crop=smart&auto=webp&s=8f2de475c1a312f386f30180f752b83fe9b19057'),
(2, 3, 'Emma Stone and Andrew Garfield hiding from the Paparazzi like pros', NULL, 'https://preview.redd.it/plh5q7hzwrb81.png?width=524&format=png&auto=webp&s=474282a581c2fc29a07a4744a6c19594f6ec107d'),
(3, 2, 'nazi funeral in Rome om on 10 January 2022 (source in comments)\', \'Hello friends!\\r\\n\\r\\nLots of comments in this thread have been reported for either It threatens violence or physical harm at someone', NULL, 'https://i.redd.it/usmyuf3r4pb81.png'),
(4, 4, 'My partner asked me to cook dinner and didn’t tell me what he wanted. So he got a Dino nuggies\\r\\n', NULL, 'https://i.redd.it/ah0jbbxiirb81.jpg'),
(5, 5, 'Russian soldiers in Ukraine, 2014. Russia denied they were Russian. But they were.\\r\\n', NULL, 'https://i.redd.it/iduel1pu9pb81.jpg'),
(6, 1, 'A passage from “The Rise and Fall of the Third Reich” that feels disturbingly relatable\', \'From the same book:\\r\\n\\r\\n“Without screaming or weeping these people undressed, stood around in family group', NULL, 'https://preview.redd.it/p2i6c2av2rb81.jpg?width=640&crop=smart&auto=webp&s=d57ff9aada51b396090f8275850d2e6cbbedb667'),
(7, 2, 'Chicago public schools walkout', NULL, 'https://preview.redd.it/9i4gxx7mypb81.jpg?width=960&crop=smart&auto=webp&s=1b4ae0a635d48538ec354c06c683cb914a37aab3'),
(8, 3, 'I just did this portrait in a tiny sketchbook. Hope you like it!', NULL, 'https://preview.redd.it/8yddaue5qnb81.jpg?width=640&crop=smart&auto=webp&s=e7dc3fda9288526c68701f90a1a8a3efde71bdf8'),
(9, 5, '100 Boris Johnson clones dancing and “attending a work event” outside No10', NULL, 'https://preview.redd.it/51qrbgtfjob81.jpg?width=640&crop=smart&auto=webp&s=7b27a07edabc8e8957c52f54b9bbbf365adacfe9'),
(10, 4, 'One of her best looks.', NULL, 'https://preview.redd.it/zhf9chrk3nb81.png?width=640&crop=smart&auto=webp&s=892d292e721df04ef7df11ece6b6a293300f2b2d'),
(11, 4, 'International Women’s Day Q&A at Facebook', 'Beautyful girl', 'https://preview.redd.it/ey3c884ijnb81.jpg?width=640&crop=smart&auto=webp&s=29c59e13fc916f4dc364e5914f7467a9f5ae662c'),
(12, 1, 'A meteor that fell in the state of Minas Gerais, Brazil, last night.', NULL, 'https://preview.redd.it/2k0wykc28ub81.jpg?width=960&crop=smart&auto=webp&s=ce48389347bd55749364332ede212c5a617038c4'),
(13, 2, 'Thought I would share my latest painting, 120x110cm acrylic on canvas.', 'em sai roi', 'https://preview.redd.it/oktzpnoy3vb81.jpg?width=960&crop=smart&auto=webp&s=5ee2b3fe7a5a0fc351c8491dac4e9cd93a88eabb'),
(14, 5, 'Sign outside a cafe in New Zealand. Day after Trump was elected president (2016).', NULL, 'https://preview.redd.it/iddbyvpaotb81.jpg?width=640&crop=smart&auto=webp&s=02099f0770c3673dbdb09f452d5f9e6df8af4339'),
(15, 1, 'A pic from my walk this morning, Ireland.', 'Relax!!!!!!!!Love', 'https://preview.redd.it/x0o7l6s2qtb81.jpg?width=960&crop=smart&auto=webp&s=98248c449eeb4ae876fd5d466abd9c7950e96825'),
(100, 2, 'em xin loi', 'CAi Cgi Cai', 'https://cellphones.com.vn/sforum/wp-content/uploads/2018/11/2-9.png'),
(103, 2, 'a', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `MaBaiViet` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `NoiDung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_binhluan`
--

INSERT INTO `tb_binhluan` (`MaBaiViet`, `MaNguoiDung`, `NoiDung`) VALUES
(1, 1, 'Good good'),
(6, 1, 'What, y\\\'all can\\\'t read printed font from a picture?'),
(1, 1, 'What, y\\\'all can\\\'t read printed font from a picture?'),
(12, 1, 'Along similar lines:\\r\\n\\r\\n“In September 1930, the National Socialists Party’s share of the vote jumped from 2.5 per'),
(3, 2, 'Love .....'),
(7, 2, 'fatttttt'),
(13, 2, 'First they came for the socialists, and I did not speak out — Because I was not a socialist.\\r\\n\\r\\nThen they came for the trade unionists'),
(2, 3, 'Both sides will upvote this while nodding eagerly thinking of the other side.'),
(8, 3, 'Jesus christ. It\\\'s like you didn\\\'t even read the post.\\r\\nI suppose both sides were \\\"the same\\\" in 1939 too huh?\\r\\nThe Nazis were just looking for a place to park their tanks and accidentally killed all those jews right?\\r\\nThe Allies littered a beach with lead,'),
(4, 4, 'Beauty fullll'),
(10, 4, 'woaaaaaaa,,,,,'),
(11, 4, 'Oh the irony of this sentence...'),
(5, 5, 'One side can point to facts, while the other side has Fox News.'),
(9, 5, 'he did not mention the nazis with a word. you can litterally apply this to almost anything'),
(14, 5, 'good idell');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_taikhoan`
--

CREATE TABLE `tb_taikhoan` (
  `TenDangNhap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNguoiDung` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`TenDangNhap`, `Email`, `MatKhau`, `MaNguoiDung`) VALUES
('DuongHong', 'duonghong@gmail.com', 'hong123', 1),
('DuyKien', 'duykien@gmail.com', 'kien123', 3),
('Emaa', 'emaa@gmail.com', 'emaa123', 4),
('Maria', 'maria@gmail.com', 'maria1234', 5),
('TrieuManh', 'trieumanh@gmail.com', 'manh123', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_thich`
--

CREATE TABLE `tb_thich` (
  `MaBaiViet` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `Thich` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_thich`
--

INSERT INTO `tb_thich` (`MaBaiViet`, `MaNguoiDung`, `Thich`) VALUES
(12, 1, 1),
(3, 2, 1),
(7, 2, 1),
(13, 2, 1),
(2, 3, 1),
(8, 3, 1),
(4, 4, 1),
(11, 4, 1),
(5, 5, 1),
(14, 5, 1),
(12, 3, 1),
(12, 5, -1),
(12, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_ttnguoidung`
--

CREATE TABLE `tb_ttnguoidung` (
  `MaNguoiDung` int(10) NOT NULL,
  `TenNguoiDung` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `QuocTich` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_ttnguoidung`
--

INSERT INTO `tb_ttnguoidung` (`MaNguoiDung`, `TenNguoiDung`, `NgaySinh`, `QuocTich`, `Anh`) VALUES
(1, 'Duong Hong', '2001-08-22', 'Việt Nam', 'https://i.pinimg.com/564x/62/ed/6e/62ed6ea71018a57a3ab0c8c959d78cb0.jpg'),
(2, 'TrieuManh', '2001-02-01', 'Lào', 'https://ss-images.saostar.vn/pc/1597055413265/all-19-iron-man-suit-versions-tony-stark-wore-in-the-mcu.jpg'),
(3, 'DuyKien', '2001-05-04', 'Thái Lan', 'https://scontent.fpnh22-4.fna.fbcdn.net/v/t1.6435-9/135741534_1133482567112956_3409565693850936597_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=-VX00lvQZoIAX-MJC1W&_nc_ht=scontent.fpnh22-4.fna&oh='),
(4, 'Emaa', '2001-08-01', 'Anh', 'https://preview.redd.it/kacb527vaub81.png?width=640&crop=smart&auto=webp&s=9308444d549b94d767ea4efb6e14a0f62930ec4f'),
(5, 'Maria', '1998-08-09', 'Philippin', 'https://icdn.dantri.com.vn/thumb_w/660/2021/12/08/marian-riverainstagram16-1638950199935.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  ADD PRIMARY KEY (`MaBaiViet`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD KEY `MaBaiViet` (`MaBaiViet`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`),
  ADD UNIQUE KEY `Emai` (`Email`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `tb_thich`
--
ALTER TABLE `tb_thich`
  ADD KEY `MaBaiViet` (`MaBaiViet`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `tb_ttnguoidung`
--
ALTER TABLE `tb_ttnguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  MODIFY `MaBaiViet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `tb_ttnguoidung`
--
ALTER TABLE `tb_ttnguoidung`
  MODIFY `MaNguoiDung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  ADD CONSTRAINT `tb_baiviet_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tb_ttnguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD CONSTRAINT `tb_binhluan_ibfk_1` FOREIGN KEY (`MaBaiViet`) REFERENCES `tb_baiviet` (`MaBaiViet`),
  ADD CONSTRAINT `tb_binhluan_ibfk_2` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tb_ttnguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD CONSTRAINT `tb_taikhoan_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tb_ttnguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `tb_thich`
--
ALTER TABLE `tb_thich`
  ADD CONSTRAINT `tb_thich_ibfk_1` FOREIGN KEY (`MaBaiViet`) REFERENCES `tb_baiviet` (`MaBaiViet`),
  ADD CONSTRAINT `tb_thich_ibfk_2` FOREIGN KEY (`MaNguoiDung`) REFERENCES `tb_ttnguoidung` (`MaNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
