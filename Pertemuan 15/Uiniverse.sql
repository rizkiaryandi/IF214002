-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2022 at 02:36 AM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yanj7356_uiniverse`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`yanj7356`@`localhost` PROCEDURE `post_click` (IN `ida` VARCHAR(12))  NO SQL
BEGIN
	SET @anb = 0;
	
    SELECT views
    FROM posts
    WHERE id = ida INTO @anb;
	
    UPDATE posts SET posts.views = (@anb + 1) WHERE posts.id = ida;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `marketplace`
--

CREATE TABLE `marketplace` (
  `id` varchar(12) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`images`)),
  `thumbnail` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace`
--

INSERT INTO `marketplace` (`id`, `user_id`, `title`, `price`, `location`, `description`, `images`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
('7Ljyvh6Coiu5', 17, 'kucing', '999.999.999', 'cod di Merauke', 'kucing imut dan lucu', '[\"091761620281491952.jpg\"]', 'thumb091761620281491952.jpg', 1, '2021-05-06 06:11:36', NULL),
('8V1y4JofuBdQ', 23, 'botol minum kesukaan mama', '50.000', 'depan gedung fakultas saintek', 'bisa menampung air sebanyak 7 galon supaya kamu kembung:))', '[\"092361654607739042.jpg\"]', 'thumb092361654607739042.jpg', 1, '2022-06-07 13:15:44', NULL),
('D3yeCajec9xd', 10, 'Laptop', '4.000.000', 'Murah meriah', 'Jalan blablabla\n\n\nasd\nasd\nasd\n', '[]', NULL, 1, '2021-03-25 14:34:27', '2021-05-04 09:01:20'),
('IZcWyk0kUM2Z', 10, 'Shockbreaker', '70.000', 'Jalan ga', 'Murah murah + pasang', '[\"091061620116784079.jpg\",\"091061621331658345.jpg\"]', 'thumb091061621331658345.jpg', 1, '2021-05-03 09:37:08', '2021-05-18 09:54:22'),
('qpPMfqrCovPm', 10, 'Macbook', '5.000.000', 'Jalan Nganu', 'Bisa dicek sepuasnya\n\n????', '[\"091061617464879973.jpg\"]', 'thumb091061617464879973.jpg', 1, '2021-04-03 15:35:15', '2021-05-04 08:27:15'),
('R4Ho7o3JSp7B', 19, 'Tuker tambah', '2.000.000', 'Uin', 'Pengen tuker tambah.. Harga awal beli kemarin 2jt, pengen kembalian 500k', '[\"091961624588066173.jpg\",\"191961624588066174.jpg\"]', 'thumb091961624588066173.jpg', 1, '2021-06-25 02:27:48', NULL),
('UVE9zR8rK8FU', 10, 'Hand Sanitizer', '10.000', 'cod di kampus', '100ml cair', '[\"091061620202597111.jpg\"]', 'thumb091061620202597111.jpg', 1, '2021-05-05 08:16:40', NULL),
('xMUOruXiUOnA', 22, 'Kang Joki', '1.000.000', 'Bandung', 'Ayo guys mabar..', '[\"092261654608003659.jpg\"]', 'thumb092261654608003659.jpg', 1, '2022-06-07 13:20:10', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pengguna`
-- (See below for the actual view)
--
CREATE TABLE `pengguna` (
`username` varchar(30)
,`img` text
,`us_id` bigint(20)
,`name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(12) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `type` varchar(15) DEFAULT 'post',
  `text` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '\'[]\'',
  `status` int(1) DEFAULT 1,
  `views` bigint(20) DEFAULT 0,
  `comment` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `type`, `text`, `url`, `images`, `status`, `views`, `comment`, `created_at`) VALUES
('3x5v7Va3FNDu', 14, 'post', 'Girls should be smart, successfully, and classy.', 'undefined', '[]', 1, 27, 1, '2021-05-03 14:00:43'),
('e2ZScO800e3B', 10, 'post', 'Follow ya gaes aaa', 'https://instagram.com/rizkiaryand', '[]', 1, 0, 0, '2022-06-07 13:17:36'),
('roeEuyKoOAA4', 19, 'post', 'Assalamu\'alaikum', 'undefined', '[]', 1, 3, 0, '2021-06-25 02:23:44'),
('ttfHIqBwh9RV', 10, 'post', 'Assalamu\'alaikum', 'undefined', '[\"091061620097642985.jpg\",\"191061620097642985.jpg\"]', 1, 13, 1, '2021-05-04 03:07:29'),
('Vb727LGl0X1Y', 17, 'post', 'selamat menjalankan ibadah puasa????', 'undefined', '[]', 1, 19, 2, '2021-05-06 01:55:55'),
('wUvHK0kTbEnt', 10, 'post', 'ITICUP Segera Hadir', 'https://iticup.if.uinsgd.ac.id', '[\"091061620117075409.jpg\",\"191061620117075409.jpg\"]', 1, 10, 1, '2021-05-04 08:31:18'),
('ZB6pFzVGnd9k', 23, 'post', 'Sosialisasi program beasiswa IOT(Internet of Things) gratis dari Indobot x Digitalent. Didukung oleh KOMINFO. Buruan daftar sosialisasi nya supaya kalian tau apa yang harus disiapin buat dapet beasiswa ini.\n\ninfo lengkap kunjung instagram @indobot', 'https://indobot.co.id/digitalent', '[]', 1, 3, 1, '2022-06-13 18:48:57'),
('Zs0VC8webuuT', 18, 'post', 'Bismillahirrahmanirrahim', 'undefined', '[]', 1, 1, 0, '2021-06-08 09:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) NOT NULL,
  `post_id` varchar(12) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_id`, `user_id`, `text`, `created_at`, `updated_at`) VALUES
(20, '3x5v7Va3FNDu', 10, 'Good', '2021-05-04 03:43:31', NULL),
(27, 'Vb727LGl0X1Y', 19, 'good', '2021-06-25 02:24:17', NULL),
(30, 'wUvHK0kTbEnt', 10, 'ffff', '2022-05-12 10:08:45', NULL),
(32, 'ttfHIqBwh9RV', 10, 'Tes Komen', '2022-06-07 13:15:03', NULL),
(33, 'Vb727LGl0X1Y', 23, 'gas', '2022-06-21 12:26:13', NULL),
(34, 'ZB6pFzVGnd9k', 23, 'dimana sih?', '2022-06-22 03:34:42', NULL);

--
-- Triggers `post_comments`
--
DELIMITER $$
CREATE TRIGGER `comment_add` BEFORE INSERT ON `post_comments` FOR EACH ROW BEGIN
	SET @newseqno = 0;

    SELECT COUNT(id) INTO @newseqno
    FROM post_comments
    WHERE post_id = NEW.post_id;
	
    UPDATE posts SET posts.comment = (@newseqno + 1) WHERE posts.id = NEW.post_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `comment_delete` BEFORE DELETE ON `post_comments` FOR EACH ROW BEGIN
	SET @newseqno = 0;

    SELECT COUNT(id) INTO @newseqno
    FROM post_comments
    WHERE post_id = OLD.post_id;
	
    UPDATE posts SET posts.comment = (@newseqno - 1) WHERE posts.id = OLD.post_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` varchar(12) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `payment` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `description`, `location`, `payment`, `status`, `created_at`, `updated_at`) VALUES
('9SEIVEvGXe2v', 10, 'Print Makalah', 'Sayaa lagi sibuk tolong print makalah saya', 'Kosan nganu', '5000', 1, '2021-05-18 09:56:49', NULL),
('kMwxDxSQEe6g', 23, 'nemenin nonton kkn', 'butuh teman nonton biar tidak terlalu sendiri di bioskop', 'ubertos', '10000', 1, '2022-06-07 13:19:11', NULL),
('UvYAHEAFCFsG', 10, 'Nebeng ke alun²', 'Anterin ke alun².. Nanti langsung pulang ajj.. anterin jam 9.00 besok (Bayaran + bensin) ', 'Kosan anto', '20000', 1, '2021-05-04 08:29:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
('3IbVbHj8jrEY', 'rafi', '$2y$10$RYWC7f1a2S2qFWu0KDGxPeEXl.vquzyIBZe2pQIVQ1xW0htXA.BdO', 1, '2022-06-21 12:11:50'),
('4hgDwjF233aS', 'rizal', '$2y$10$qIWRPWE8SpaujPOBhfK0wOcUBsLZ5cMrt47NP68fn0yNfxQyu/tiy', 1, '2022-06-10 07:33:26'),
('BCOKieuHFWhU', 'rizkiaryandi', '$2y$10$ubdDfs5QaFI/4143TkoT6umj929JgaKLHK1Oww4OxDXOlYkX5jZGK', 1, '2021-02-25 16:40:46'),
('dntBLMft7Wo5', 'nugrahaas', '$2y$10$JZ8uaxQ4xnuqk8XC5hyatuB.M6YOkmw6yo8rzc6S4Bw7bunuy2uBm', 1, '2022-06-07 09:38:35'),
('DssG3bunYv43', 'cowodey', '$2y$10$ZHS4TivIGFYZ5kzo3Yakl.UGrz6fxZntoKhPCfifI.mr7Uuomk0d2', 1, '2021-11-12 02:22:23'),
('F4A1zqS6HPMl', 'rizki', '$2y$10$caIstAapHrkLPMifapSAN.ug96beik4e/DaO4bzHR05ELhXkBDAWu', 1, '2021-06-25 02:21:01'),
('GUvjIAwo6CtQ', 'nugrahaatyo', '$2y$10$ZfowiyxnuOEjvVIMS30byu5R0iWKkzKn3qXpFZx89KEmyG/giHAj.', 1, '2022-06-22 03:32:55'),
('KdSZgTCt8VRB', 'kholis', '$2y$10$DI0XoxL1/TNJRY3c2SRrley9ofbibpZJhUPt2d93.pMuTTkasD01S', 1, '2022-06-13 16:54:33'),
('kzMgY1znPZEp', 'normalika', '$2y$10$JjgDE6gXSEtH5BgiKTz1ReROsyXp2V7gekkNpsO5wnYo1g4NVqDpO', 1, '2021-05-06 01:52:37'),
('LCk8TQ3tpqaC', 'rsg gh', '$2y$10$iSa3.YALeRLF5NwUe1XcBO7qH0JP33138AvEahkfShN8p/Z/8cn7a', 1, '2022-06-20 13:47:15'),
('Obz29MjcDCqv', 'user_1', '$2y$10$NP/BcoQmbOg0Sy0JBUxRQesYN8GfhzO/Uk/QIyZtpqXtfbMl1H/gi', 1, '2021-06-08 09:40:06'),
('s656sna9WmXT', 'nurk', '$2y$10$sdxIgcvIZHOF584XGG47OOaSmP/MoSKM9SpwFWjfQisxD8xMa7oim', 1, '2022-06-07 09:34:21'),
('UI7ZlRsDkUkb', 'indahsll_', '$2y$10$YVKx88M2BE4qSWwcFdDZBeSNyr1vcBNu7HJIn8ZJzOSxdA.dyyLUm', 1, '2021-05-03 13:51:44'),
('YdWMZYjpMX31', 'dicky', '$2y$10$sJNQonSTq/sLiquyxvPX4uXKW3eLaH3w.S/jmekqo2OOsG/tvCFoa', 1, '2022-02-24 08:12:48'),
('zVngGE0biVy2', 'nurkles', '$2y$10$GN8/epawGnerIYYHcdQI3u3u5jBqd.BrMSDX04Vrwn8p1saTBdksu', 1, '2022-06-18 03:29:30');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `add_users` AFTER INSERT ON `users` FOR EACH ROW BEGIN
	INSERT INTO users_profile (users_profile.user_id) VALUES (NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `img` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `ig` varchar(30) DEFAULT NULL,
  `em` varchar(50) DEFAULT NULL,
  `information` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`information`)),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `user_id`, `name`, `img`, `address`, `bio`, `tel`, `ig`, `em`, `information`, `created_at`, `updated_at`) VALUES
(10, 'BCOKieuHFWhU', 'Arya', '11061655375945759.jpeg', 'asaas', 'Haha Hihiiii', '626262626288218321350', 'aaaa', 's@a', NULL, '2021-02-25 16:40:46', '2022-06-16 10:39:07'),
(14, 'UI7ZlRsDkUkb', 'Indah Sri Lestari', '11461620050643332.jpeg', 'Bandung', 'just a living creatures in the world', '0895422683275', 'indahsll_', 'indahsril129@gmail.com', NULL, '2021-05-03 13:51:44', '2021-05-03 14:05:16'),
(17, 'kzMgY1znPZEp', 'Normalika Shandi', '11761620266237185.jpeg', 'Planet Bekasi', 'aku seorang kapiten', '626289502333650', '@normalikaa', 'nor.malika.sh@gmail.com', NULL, '2021-05-06 01:52:37', '2021-05-06 01:58:32'),
(18, 'Obz29MjcDCqv', 'Pengguna', '11861623145390850.jpeg', 'Jl Cangkuang Kulon', 'Not Else', '6289610945248', 'aryandirizk', 'rizkiaryandi123@gmail.com', NULL, '2021-06-08 09:40:06', '2021-06-08 09:43:18'),
(19, 'F4A1zqS6HPMl', 'Kucing', '11961624587702490.jpeg', NULL, NULL, '6262896026048399', 'aryandirizk', NULL, NULL, '2021-06-25 02:21:01', '2021-06-25 02:22:15'),
(20, 'DssG3bunYv43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-12 02:22:23', NULL),
(21, 'YdWMZYjpMX31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-24 08:12:48', NULL),
(22, 's656sna9WmXT', 'Nurk', '12261654607579761.jpeg', 'Cipadung Bandung', 'Ganbate', '6283112950344', 'Nur Kholis', 'kholisulis@gmail.com', NULL, '2022-06-07 09:34:21', '2022-06-07 13:18:53'),
(23, 'dntBLMft7Wo5', 'Nugraha Adi Sulistyo', '12361655145516130.jpeg', 'Bandung', 'Los azza mazzeh', '6285659804479', 'nugrahaatyo', 'tyoku1792@gmail.com', NULL, '2022-06-07 09:38:35', '2022-06-13 18:39:06'),
(24, '4hgDwjF233aS', 'RizalH', NULL, NULL, NULL, '620', NULL, NULL, NULL, '2022-06-10 07:33:26', '2022-06-10 07:33:42'),
(25, 'KdSZgTCt8VRB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-13 16:54:33', NULL),
(26, 'zVngGE0biVy2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-18 03:29:30', NULL),
(27, 'LCk8TQ3tpqaC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 13:47:15', NULL),
(28, '3IbVbHj8jrEY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 12:11:50', NULL),
(29, 'GUvjIAwo6CtQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 03:32:55', NULL);

-- --------------------------------------------------------

--
-- Structure for view `pengguna`
--
DROP TABLE IF EXISTS `pengguna`;

CREATE ALGORITHM=UNDEFINED DEFINER=`yanj7356`@`localhost` SQL SECURITY DEFINER VIEW `pengguna`  AS SELECT `users`.`username` AS `username`, `users_profile`.`img` AS `img`, `users_profile`.`id` AS `us_id`, `users_profile`.`name` AS `name` FROM (`users_profile` join `users` on(`users_profile`.`user_id` = `users`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_MARKETPLACE` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_POSTS` (`user_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_POST_COMMENTS` (`post_id`),
  ADD KEY `FK_USER_COMMENTS` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_SERVICES` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_PROFILE` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marketplace`
--
ALTER TABLE `marketplace`
  ADD CONSTRAINT `FK_USER_MARKETPLACE` FOREIGN KEY (`user_id`) REFERENCES `users_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_USER_POSTS` FOREIGN KEY (`user_id`) REFERENCES `users_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `FK_POST_COMMENTS` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER_COMMENTS` FOREIGN KEY (`user_id`) REFERENCES `users_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `FK_USER_SERVICES` FOREIGN KEY (`user_id`) REFERENCES `users_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD CONSTRAINT `FK_USER_PROFILE` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
