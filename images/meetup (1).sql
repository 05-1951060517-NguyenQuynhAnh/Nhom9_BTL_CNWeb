-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2022 lúc 11:02 AM
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
  `atten` int(11) NOT NULL,
  `img_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_event`
--

INSERT INTO `tb_event` (`id`, `name`, `thoigian`, `content`, `atten`, `img_name`) VALUES
(2, 'NYC Young Professionals Book Club', 'Fri, Jan 14 @ 7:00 AM 2022', 'First Ever NYC Young Professionals Book Club Meeting ', 0, 'event1.webp'),
(3, 'USA Startup Meetup and Q&A', 'Fri, Jan 21 @ 5:00 AM 2022', 'Startup Meetup', 0, 'event2.webp'),
(4, 'Angel Investors Meetup Group', 'Fri, Jan 14 @ 6:00 AM 2022', 'Investors Meetup', 0, 'event3.webp'),
(5, 'New York City Apache Pulsar™ Meetup', 'Fri, Jan 14 @ 7:00 AM 2022', 'Build an Event-Driven Architecture With Apache Pulsar™  ', 0, 'event4.webp'),
(6, 'New York Area Group for Informatics and Modeling (NYAGIM)', 'Fri, Jan 21 @ 6:00 AM 2022', 'NYAGIM Event: Dr. Maximilien Levesque ', 0, 'event5.webp'),
(7, 'Startup Meetup', 'Fri, Jan 21 @ 5:00 AM 2022', 'USA Startup Meetup and Q&A • New York, NY ', 129, 'e1.webp'),
(8, 'Code with Clever Programmer - New York City **IN-PERSON**', 'SUN, JAN 16 @ 3:00 AM 2022', 'Code with Clever Programmer - New York • New York, NY ', 83, 'e2.webp'),
(9, 'Angel Investors Meetup Group', 'Fri, Jan 14 @ 6:00 AM 2022', 'Investors Meetup', 12, 'e3.webp'),
(10, 'New York City Apache Pulsar™ Meetup', 'Fri, Jan 14 @ 7:00 AM 2022', 'Build an Event-Driven Architecture With Apache Pulsar™  ', 129, 'e4.webp'),
(11, 'New York Area Group for Informatics and Modeling (NYAGIM)', 'Fri, Jan 21 @ 6:00 AM 2022', 'NYAGIM Event: Dr. Maximilien Levesque ', 129, 'e5.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_group`
--

CREATE TABLE `tb_group` (
  `id_gr` int(11) NOT NULL,
  `name_gr` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_gr` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_gr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_group`
--

INSERT INTO `tb_group` (`id_gr`, `name_gr`, `time`, `content_gr`, `img_gr`) VALUES
(1, 'New York History and Culture ', 'Sat, Jan 15 @ 3:00 AM 2022', 'National Gallery, London - Impressionism Livestream Tour (Jan. 14)', '1.jpg'),
(2, 'Zoom meeting and coffee with other citizens ', 'Sun, Jan 16 @ 3:00 AM 2022', 'Zoom meeting and coffee with other citizens of the world ', '2.jpg'),
(3, 'Singles Speed Dating', 'Fri, Jan 14 @ 6:00 PM 2022', 'Yokohama Date Night | Video Speed Dating', '3.jpg'),
(4, 'World Virtual Travelers: Archeology, Art ', 'Sat, Jan 15 @ 3:30 AM 2022', 'FREE - Queens of Egypt. The Women that ruled the Ancient World', '4.jpg'),
(5, 'Leap - Conversations for Curious Minds', 'Fri, Jan 14 @ 9:00 PM 2022', 'Pistachio! - A chat to consider one of life challenges together', '5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `img`) VALUES
(2, '1.webp'),
(2, '2.webp'),
(3, '3.webp'),
(3, '4.webp'),
(3, '5.webp');

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
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`img`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `id_gr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_event` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
