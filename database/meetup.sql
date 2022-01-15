-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 02:59 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `meetup`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_event`
--

CREATE TABLE `tb_event` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigian` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atten` int(11) DEFAULT NULL,
  `img_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_event`
--

INSERT INTO `tb_event` (`id`, `name`, `thoigian`, `content`, `atten`, `img_name`) VALUES
(12, 'NYC Young Professionals Book Club', 'Fri, Jan 14 @ 7:00 AM 2022', 'First Ever NYC Young Professionals Book Club Meeting ', 130, 'event1.webp'),
(13, 'Angel Investors Meetup Group', 'Fri, Jan 14 @ 6:00 AM 2022', 'Investors Meetup', 26, 'event3.webp'),
(14, 'New York City Apache Pulsar™ Meetup', 'Fri, Jan 14 @ 7:00 AM 2022', 'Build an Event-Driven Architecture With Apache Pulsar™  ', 37, 'event4.webp'),
(15, 'New York Area Group for Informatics and Modeling (NYAGIM)', 'Fri, Jan 21 @ 6:00 AM 2022', 'NYAGIM Event: Dr. Maximilien Levesque ', 36, 'event5.webp'),
(16, 'Startup Meetup', 'Fri, Jan 21 @ 5:00 AM 2022', 'USA Startup Meetup and Q&A • New York, NY ', 129, 'e1.webp'),
(17, 'Code with Clever Programmer - New York City **IN-PERSON**', 'SUN, JAN 16 @ 3:00 AM 2022', 'Code with Clever Programmer - New York • New York, NY ', 83, 'e2.webp'),
(18, '1-18-2021 OffChain NYC Crypto Drinks', 'WED, JAN 19 @ 6:00 AM 2022', 'OffChain New York Crypto Drinks Group • New York, NY', 60, 'e3.webp'),
(19, 'NYAGIM Event: Dr.Maximilien Levesque', 'FRI, JAN 21 @ 6:00 AM 2022', 'New York Area Group for Informatics and Modeling (NYAGIM) • New...  ', 58, 'e4.webp'),
(20, '1st NYCrypto meeting', 'TUE, JAN 18 @ 7:00 AM 2022', 'NYCrypto Meetup Group • New York, NY', 46, 'e5.webp'),
(21, 'In-Person Speed Friending', 'FRI, JAN @ 6:30 AM 2022', 'The New York Social Group (20,000+ members!)• New York, NY', 7, 'e7.jpg'),
(22, 'Speed FRIENDING 40s & Over (New Year, New Friends)', 'MON, JAN 31 @ 8:00 AM 2022', 'The New York City Social Group (21,000+ members!) • New York, NY', 2, 'e8.jpg'),
(23, 'Speed-Friending', 'TUE, FEB 8 @ 7:00 AM 2011', 'Young Professionals & Graduate students Group • Boston, MA', 22, 'e9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_group`
--

CREATE TABLE `tb_group` (
  `id_gr` int(11) NOT NULL,
  `name_gr` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_gr` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `members` int(11) NOT NULL,
  `mode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_gr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_group`
--

INSERT INTO `tb_group` (`id_gr`, `name_gr`, `time`, `location`, `content_gr`, `members`, `mode`, `img_gr`) VALUES
(6, 'New York History and Culture - Experience NY and the World', 'Sat, Jan 15 @ 3:00 AM 2022', 'NEW YORK, NY', 'New York History & Culture - Experience New York City and the World! NY History & Culture: Art, Architecture, Books, Dance...', 1808, 'Public', '1.jpg'),
(7, 'Zoom meeting and coffee with other citizens of the world', 'Sun, Jan 16 @ 3:00 AM 2022', 'NEW YORK, NY', NULL, 149, 'Public', '2.jpg'),
(8, 'Singles Speed Dating', 'Fri, Jan 14 @ 6:00 PM 2022', 'NEW YORK, NY', 'The Speed Dating Meetup is meant for singles who are interested in meeting new people in a structured format. Whether you are', 2546, 'Public', '3.jpg'),
(9, 'World Virtual Travelers: Archeology, Art ', 'Sat, Jan 15 @ 3:30 AM 2022', 'NEW YORK, NY', 'World Virtual Tours: [https://worldvirtualtours.online/](https://worldvirtualtours.online/) We are a group of', 226, 'Public', '4.jpg'),
(10, 'Leap - Conversations for Curious Minds', 'Fri, Jan 14 @ 9:00 PM 2022', 'NEW YORK, NY', NULL, 255, 'Public', '5.jpg'),
(11, 'Academic Writing Group', NULL, 'NEW YORK, NY', NULL, 368, 'Private', '8.jpg'),
(12, 'Brooklyn Speculative Fiction Writers', NULL, 'BROOKLYN, NY', 'We are a speculative fiction writers group based in Brooklyn. Together, we help one another hone our craft to a more', 165, 'Private', '7.jpg'),
(13, 'New Jersey Divas Who Rock', NULL, 'BLOOMFIELD, NJ', NULL, 179, 'Private', '10.jpg'),
(14, 'Bright and Beautiful Ladies in NY (30’s to 50\'s)', NULL, 'NEW YORK, NY', 'Ladies! We are adventurous, imaginative, enthusiastic women in their 30’s to 50\'s who are insatiably curious about the people and...', 167, 'Public', '6.jpg'),
(15, 'Past Lives, Dreams, Soul Travel throughout New York', NULL, 'NEW YORK, NY', 'Open to all those looking to find more wisdom, love, inner peace and spiritual freedom in their lives, through better understanding', 2034, 'Public', '11.jpg'),
(16, '\r\nGenuine Friends 50-70+ Long Island Ladies Group', NULL, 'GARDEN CITY, NY', '**WE ARE CLOSED TO NEW MEMBERS UNTIL MAY 2022** **Please be vaccinated to protect us all.**  **We plan a variety of fun events...', 122, 'Private', '12.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_member`
--

CREATE TABLE `tb_member` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hometown` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_member`
--

INSERT INTO `tb_member` (`user_id`, `name`, `email`, `password`, `location`, `language`, `birthday`, `gender`, `hometown`, `avatar`) VALUES
(77, 'Nguyễn Thị Ngọc Bích', 'bichnn2802@gmail.com', '123', 'Hai Duong, VN', 'Vietnamese', '0000-00-00', 'Female', 'ZZZ', 'avatar3.jpg'),
(195106, 'Nguyễn Thùy Dương', 'ntduong.145.2001@gmail.com', '123', 'Ha Noi, VN', 'Vietnamese', '0000-00-00', 'Femail', 'AAA', 'avatar2.jpg'),
(1951060517, 'Nguyễn Quỳnh Anh', 'qanh1662001@gmail.com', '123', 'Thanh Hoa, VN', 'English', '2001-06-16', 'Female', '175, Tây Sơn', 'avatar1.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`id_gr`);

--
-- Chỉ mục cho bảng `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `id_gr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1951060524;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
