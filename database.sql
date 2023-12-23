-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2023 at 09:43 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbnhac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `matkhau` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `hoten`, `matkhau`, `email`) VALUES
('Hào', 'Lê Nhật', '202cb962ac59075b964b07152d234b70', 'lenhathao280302@gmail.com'),
('Phúc', 'Huỳnh Thành', '202cb962ac59075b964b07152d234b70', 'huynhphucvlm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_hd` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_dianhac` varchar(50) NOT NULL,
  `soluong` tinyint(3) UNSIGNED NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_hd`, `id_dianhac`, `soluong`, `gia`) VALUES
('hd151', 'DN66', 1, 12345),
('hd167', 'DN76', 1, 300000),
('hd195', 'DN99', 1, 12345),
('hd262', 'DN10', 1, 500000),
('hd262', 'DN76', 1, 300000),
('hd262', 'DN99', 1, 12345),
('hd359', 'DN76', 1, 300000),
('hd359', 'DN99', 2, 12345),
('hd386', 'DN10', 1, 500000),
('hd438', 'DN76', 1, 300000),
('hd438', 'DN99', 1, 12345),
('hd45', 'DN66', 1, 12345),
('hd46', 'DN99', 1, 12345),
('hd477', 'DN99', 1, 12345),
('hd495', 'DN10', 1, 500000),
('hd565', 'DN99', 1, 12345),
('hd605', 'DN10', 1, 500000),
('hd767', 'DN10', 1, 500000),
('hd801', 'DN76', 2, 300000),
('hd801', 'DN99', 2, 12345),
('hd844', 'SN88', 1, 10000),
('hd848', 'DN10', 1, 500000),
('hd848', 'DN99', 1, 12345),
('hd942', 'DN66', 1, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `dianhac`
--

CREATE TABLE `dianhac` (
  `id_dianhac` varchar(50) NOT NULL,
  `tendianhac` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(10) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `id_theloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dianhac`
--

INSERT INTO `dianhac` (`id_dianhac`, `tendianhac`, `mota`, `gia`, `hinh`, `id_theloai`) VALUES
('DN10', 'Gửi xa anh nhớ', '<p>nhạc Mlem do Min s&aacute;ng t&aacute;c</p>\r\n', 500000, '1641696104-Dia6.jpg', 'jp'),
('DN66', 'Magic Love', '<p>Nhạc của min gi&uacute;p cho mọi người thoải m&aacute;i hơn</p>\r\n', 12345, '1641696136-Dia17.jpg', 'tq'),
('DN76', 'Muộn rồi mà sao còn', '<p>Sơn t&ugrave;ng MTP</p>\r\n', 300000, '1641696159-3.jpg', '2'),
('DN99', 'Arigatou sayonara', '<p>Sơn T&ugrave;ng -MTP (SKY)</p>\r\n', 12345, '1641696207-art213125455.jpg', 'jp'),
('SN88', 'Đánh đổi', '', 10000, '1702848384-Danhdoi-obito.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ngaybd` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tennguoinhan` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `ngaynhan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dienthoainguoinhan` varchar(10) NOT NULL,
  `tongtien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `email`, `ngaybd`, `tennguoinhan`, `diachi`, `ngaynhan`, `dienthoainguoinhan`, `tongtien`) VALUES
('hd151', 'trollwanwan@gmail.com', '2022-01-08 14:18:24', 'khoa', 'quận 12', '2022-01-08 14:18:24', '0938349588', 12345),
('hd167', 'anhprochienthan@gmail.com', '2023-12-17 22:02:03', 'Nhâhsh', 'aaa', '2023-12-17 22:02:03', '0384867195', 300000),
('hd195', 'trollwanwan@gmail.com', '2022-01-08 14:50:55', 'khoa', 'quận 12', '2022-01-08 14:50:55', '0938349588', 12345),
('hd262', 'trollwanwan@gmail.com', '2022-01-08 15:06:14', 'khoa', 'quận 12', '2022-01-08 15:06:14', '0938349588', 812345),
('hd359', 'trollwanwan@gmail.com', '2022-01-08 14:14:50', 'khoa', 'quận 12', '2022-01-08 14:14:50', '0938349588', 324690),
('hd386', 'trollwanwan@gmail.com', '2022-01-08 14:55:04', 'khoa', 'quận 12', '2022-01-08 14:55:04', '0938349588', 500000),
('hd438', 'trollwanwan@gmail.com', '2022-01-08 14:52:45', 'khoa', 'quận 12', '2022-01-08 14:52:45', '0938349588', 312345),
('hd45', 'trollwanwan@gmail.com', '2022-01-08 14:28:04', 'khoa', 'quận 12', '2022-01-08 14:28:04', '0938349588', 12345),
('hd46', 'trollwanwan@gmail.com', '2022-01-08 14:48:01', 'khoa', 'quận 12', '2022-01-08 14:48:01', '0938349588', 12345),
('hd477', 'trollwanwan@gmail.com', '2022-01-08 14:46:22', 'khoa', 'quận 12', '2022-01-08 14:46:22', '0938349588', 12345),
('hd495', 'trollwanwan@gmail.com', '2022-01-08 14:59:10', 'khoa', 'quận 12', '2022-01-08 14:59:10', '0938349588', 500000),
('hd565', 'trollwanwan@gmail.com', '2022-01-08 14:33:03', 'khoa', 'quận 12', '2022-01-08 14:33:03', '0938349588', 12345),
('hd605', 'trollwanwan@gmail.com', '2022-01-08 14:56:06', 'khoa', 'quận 12', '2022-01-08 14:56:06', '0938349588', 500000),
('hd767', 'trollwanwan@gmail.com', '2022-01-08 14:56:38', 'khoa', 'quận 12', '2022-01-08 14:56:38', '0938349588', 500000),
('hd801', 'dh51801934@student.stu.edu.vn', '2022-01-02 20:42:42', 'kim', 'quận 12', '2022-01-02 20:42:42', '0938349588', 624690),
('hd81', 'trollwanwan@gmail.com', '2022-01-08 14:59:42', 'khoa', 'quận 12', '2022-01-08 14:59:42', '0938349588', 0),
('hd844', 'anhprochienthan@gmail.com', '2023-12-18 04:39:52', 'Nhâhsh', 'aaa', '2023-12-18 04:39:52', '0384867195', 10000),
('hd848', 'trollwanwan@gmail.com', '2022-01-08 15:00:05', 'khoa', 'quận 12', '2022-01-08 15:00:05', '0938349588', 512345),
('hd942', 'trollwanwan@gmail.com', '2022-01-08 14:39:23', 'khoa', 'quận 12', '2022-01-08 14:39:23', '0938349588', 12345),
('hd977', 'trollwanwan@gmail.com', '2022-01-08 14:16:37', 'khoa', 'quận 12', '2022-01-08 14:16:37', '0938349588', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `matkhau` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`email`, `tenkh`, `matkhau`, `sodienthoai`, `diachi`) VALUES
('anhprochienthan@gmail.com', 'Nhâhsh', '827ccb0eea8a706c4c34a16891f84e7b', '0384867195', 'aaa'),
('dh51801934@student.stu.edu.vn', 'kim', '25f9e794323b453885f5181f1b624d0b', '0938349588', 'quận 12'),
('lenhathao280202@gmail.com', 'hihi', '6fc892dd763658e6b8d92339ec53bf20', '0384867195', 'aaa'),
('nghiazero99@gmail.com', 'aa', '0cc175b9c0f1b6a831c399e269772661', '0358466737', 'aa'),
('trollwanwan@gmail.com', 'khoa', '25f9e794323b453885f5181f1b624d0b', '0938349588', 'quận 12');

-- --------------------------------------------------------

--
-- Table structure for table `nhac`
--

CREATE TABLE `nhac` (
  `id_nhac` varchar(50) NOT NULL,
  `tennhac` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `tentacgia` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhac`
--

INSERT INTO `nhac` (`id_nhac`, `tennhac`, `video`, `tentacgia`) VALUES
('NH6', 'DAN DAN KOKORO HIKARETEKU', '1640867761-Hard ship của mình -....mp4', 'FIELD OF VIEW'),
('NH3', 'Truyền thái y', '1640867660-Truyền Thái Y - Ngô Kiến Huy x Masew x Đinh Hà Uyên Thư - Official Music Video.mp4', 'Ngô kiến huy'),
('NH4', 'Enkidu', '1640867695-【手描きFGO】Those who fight with the monster named Destiny.mp4', 'Gil'),
('NH5', 'Trên tình bạn', '1640867719-MIN - ‘TRÊN TÌNH BẠN, DƯỚI TÌNH YÊU’ LỄ HỘI GIAO LƯU VĂN HOÁ VIỆT HÀN 08112020.mp4', 'Min'),
('NH1', 'Nơi này có anh', '1640948274-Hard ship của mình -....mp4', 'MTP'),
('NH2', 'Có chắc yêu là đây', '1640867636-SƠN TÙNG M-TP - CÓ CHẮC YÊU LÀ ĐÂY - OFFICIAL MUSIC VIDEO.mp4', 'MTP');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id_theloai` varchar(50) NOT NULL,
  `tentheloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `tentheloai`) VALUES
('2', 'Nhạc Việt'),
('33', 'HipHop'),
('jp', 'Nhạc Japan'),
('tq', 'Trung Quốc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hd`,`id_dianhac`),
  ADD KEY `id_dianhac` (`id_dianhac`);

--
-- Indexes for table `dianhac`
--
ALTER TABLE `dianhac`
  ADD PRIMARY KEY (`id_dianhac`),
  ADD KEY `id_theloai` (`id_theloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `nhac`
--
ALTER TABLE `nhac`
  ADD PRIMARY KEY (`id_nhac`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_dianhac`) REFERENCES `dianhac` (`id_dianhac`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dianhac`
--
ALTER TABLE `dianhac`
  ADD CONSTRAINT `dianhac_ibfk_1` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id_theloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`);
