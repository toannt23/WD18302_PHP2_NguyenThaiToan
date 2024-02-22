-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th2 22, 2024 lúc 03:31 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_2_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `assignments`
--

CREATE TABLE `assignments` (
  `id` int NOT NULL,
  `creatd_at` date NOT NULL,
  `tasks_id` int NOT NULL,
  `users_id` int NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '0',
  `hidden` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `assignments`
--

INSERT INTO `assignments` (`id`, `creatd_at`, `tasks_id`, `users_id`, `status`, `hidden`) VALUES
(1, '2024-02-07', 1, 2, 1, 1),
(2, '2024-02-10', 1, 1, 0, 0),
(3, '2024-02-10', 1, 3, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasks`
--

CREATE TABLE `tasks` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dealine` date NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `hidden` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `dealine`, `status`, `hidden`) VALUES
(1, 'Xây dựng API cho quản lý người dùng', '  Phát triển các endpoint RESTful để thêm, sửa, xóa người dùng', '2024-02-09', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `fullname`, `phone`, `status`) VALUES
(1, '123456', 'nguyentoan23@gmail.com', 'Nguyễn Thái Toàn', '0912345678', 1),
(2, '987654', 'vanan12@gmail.com', 'Trần Văn An', '0987654321', 1),
(3, '456789', 'huongnguyen34@gmail.com', 'Nguyễn Thị Hương', '0845678901', 1),
(4, '789123', 'hungdinh89@gmail.com', 'Lê Đình Hùng', '0976543210', 1),
(5, '270312', 'huongquynh23@gmail.com', 'Lục Quỳnh Hương', '0394232422', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`users_id`),
  ADD KEY `fk_tasks_id` (`tasks_id`);

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `fk_tasks_id` FOREIGN KEY (`tasks_id`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
