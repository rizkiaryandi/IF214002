-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2022 at 04:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aleran`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `administrator_id` varchar(6) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `administrator_name` varchar(100) NOT NULL,
  `administrator_phone` varchar(20) NOT NULL,
  `administrator_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `prov_id`) VALUES
(1, 'PIDIE JAYA', 1),
(2, 'SIMEULUE', 1),
(3, 'BIREUEN', 1),
(4, 'ACEH TIMUR', 1),
(5, 'ACEH UTARA', 1),
(6, 'PIDIE', 1),
(7, 'ACEH BARAT DAYA', 1),
(8, 'GAYO LUES', 1),
(9, 'ACEH SELATAN', 1),
(10, 'ACEH TAMIANG', 1),
(11, 'ACEH BESAR', 1),
(12, 'ACEH TENGGARA', 1),
(13, 'BENER MERIAH', 1),
(14, 'ACEH JAYA', 1),
(15, 'LHOKSEUMAWE', 1),
(16, 'ACEH BARAT', 1),
(17, 'NAGAN RAYA', 1),
(18, 'LANGSA', 1),
(19, 'BANDA ACEH', 1),
(20, 'ACEH SINGKIL', 1),
(21, 'SABANG', 1),
(22, 'ACEH TENGAH', 1),
(23, 'SUBULUSSALAM', 1),
(24, 'NIAS SELATAN', 2),
(25, 'MANDAILING NATAL', 2),
(26, 'DAIRI', 2),
(27, 'LABUHAN BATU UTARA', 2),
(28, 'TAPANULI UTARA', 2),
(29, 'SIMALUNGUN', 2),
(30, 'LANGKAT', 2),
(31, 'SERDANG BEDAGAI', 2),
(32, 'TAPANULI SELATAN', 2),
(33, 'ASAHAN', 2),
(34, 'PADANG LAWAS UTARA', 2),
(35, 'PADANG LAWAS', 2),
(36, 'LABUHAN BATU SELATAN', 2),
(37, 'PADANG SIDEMPUAN', 2),
(38, 'TOBA SAMOSIR', 2),
(39, 'TAPANULI TENGAH', 2),
(40, 'HUMBANG HASUNDUTAN', 2),
(41, 'SIBOLGA', 2),
(42, 'BATU BARA', 2),
(43, 'SAMOSIR', 2),
(44, 'PEMATANG SIANTAR', 2),
(45, 'LABUHAN BATU', 2),
(46, 'DELI SERDANG', 2),
(47, 'GUNUNGSITOLI', 2),
(48, 'NIAS UTARA', 2),
(49, 'NIAS', 2),
(50, 'KARO', 2),
(51, 'NIAS BARAT', 2),
(52, 'MEDAN', 2),
(53, 'PAKPAK BHARAT', 2),
(54, 'TEBING TINGGI', 2),
(55, 'BINJAI', 2),
(56, 'TANJUNG BALAI', 2),
(57, 'DHARMASRAYA', 3),
(58, 'SOLOK SELATAN', 3),
(59, 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)', 3),
(60, 'PASAMAN BARAT', 3),
(61, 'SOLOK', 3),
(62, 'PASAMAN', 3),
(63, 'PARIAMAN', 3),
(64, 'TANAH DATAR', 3),
(65, 'PADANG PARIAMAN', 3),
(66, 'PESISIR SELATAN', 3),
(67, 'PADANG', 3),
(68, 'SAWAH LUNTO', 3),
(69, 'LIMA PULUH KOTO / KOTA', 3),
(70, 'AGAM', 3),
(71, 'PAYAKUMBUH', 3),
(72, 'BUKITTINGGI', 3),
(73, 'PADANG PANJANG', 3),
(74, 'KEPULAUAN MENTAWAI', 3),
(75, 'INDRAGIRI HILIR', 4),
(76, 'KUANTAN SINGINGI', 4),
(77, 'PELALAWAN', 4),
(78, 'PEKANBARU', 4),
(79, 'ROKAN HILIR', 4),
(80, 'BENGKALIS', 4),
(81, 'INDRAGIRI HULU', 4),
(82, 'ROKAN HULU', 4),
(83, 'KAMPAR', 4),
(84, 'KEPULAUAN MERANTI', 4),
(85, 'DUMAI', 4),
(86, 'SIAK', 4),
(87, 'TEBO', 5),
(88, 'TANJUNG JABUNG BARAT', 5),
(89, 'MUARO JAMBI', 5),
(90, 'KERINCI', 5),
(91, 'MERANGIN', 5),
(92, 'BUNGO', 5),
(93, 'TANJUNG JABUNG TIMUR', 5),
(94, 'SUNGAIPENUH', 5),
(95, 'BATANG HARI', 5),
(96, 'JAMBI', 5),
(97, 'SAROLANGUN', 5),
(98, 'PALEMBANG', 6),
(99, 'LAHAT', 6),
(100, 'OGAN KOMERING ULU TIMUR', 6),
(101, 'MUSI BANYUASIN', 6),
(102, 'PAGAR ALAM', 6),
(103, 'OGAN KOMERING ULU SELATAN', 6),
(104, 'BANYUASIN', 6),
(105, 'MUSI RAWAS', 6),
(106, 'MUARA ENIM', 6),
(107, 'OGAN KOMERING ULU', 6),
(108, 'OGAN KOMERING ILIR', 6),
(109, 'EMPAT LAWANG', 6),
(110, 'LUBUK LINGGAU', 6),
(111, 'PRABUMULIH', 6),
(112, 'OGAN ILIR', 6),
(113, 'BENGKULU TENGAH', 7),
(114, 'REJANG LEBONG', 7),
(115, 'MUKO MUKO', 7),
(116, 'KAUR', 7),
(117, 'BENGKULU UTARA', 7),
(118, 'LEBONG', 7),
(119, 'KEPAHIANG', 7),
(120, 'BENGKULU SELATAN', 7),
(121, 'SELUMA', 7),
(122, 'BENGKULU', 7),
(123, 'LAMPUNG UTARA', 8),
(124, 'WAY KANAN', 8),
(125, 'LAMPUNG TENGAH', 8),
(126, 'MESUJI', 8),
(127, 'PRINGSEWU', 8),
(128, 'LAMPUNG TIMUR', 8),
(129, 'LAMPUNG SELATAN', 8),
(130, 'TULANG BAWANG', 8),
(131, 'TULANG BAWANG BARAT', 8),
(132, 'TANGGAMUS', 8),
(133, 'LAMPUNG BARAT', 8),
(134, 'PESISIR BARAT', 8),
(135, 'PESAWARAN', 8),
(136, 'BANDAR LAMPUNG', 8),
(137, 'METRO', 8),
(138, 'BELITUNG', 9),
(139, 'BELITUNG TIMUR', 9),
(140, 'BANGKA', 9),
(141, 'BANGKA SELATAN', 9),
(142, 'BANGKA BARAT', 9),
(143, 'PANGKAL PINANG', 9),
(144, 'BANGKA TENGAH', 9),
(145, 'KEPULAUAN ANAMBAS', 10),
(146, 'BINTAN', 10),
(147, 'NATUNA', 10),
(148, 'BATAM', 10),
(149, 'TANJUNG PINANG', 10),
(150, 'KARIMUN', 10),
(151, 'LINGGA', 10),
(152, 'JAKARTA UTARA', 11),
(153, 'JAKARTA BARAT', 11),
(154, 'JAKARTA TIMUR', 11),
(155, 'JAKARTA SELATAN', 11),
(156, 'JAKARTA PUSAT', 11),
(157, 'KEPULAUAN SERIBU', 11),
(158, 'DEPOK', 12),
(159, 'KARAWANG', 12),
(160, 'CIREBON', 12),
(161, 'BANDUNG', 12),
(162, 'SUKABUMI', 12),
(163, 'SUMEDANG', 12),
(164, 'INDRAMAYU', 12),
(165, 'MAJALENGKA', 12),
(166, 'KUNINGAN', 12),
(167, 'TASIKMALAYA', 12),
(168, 'CIAMIS', 12),
(169, 'SUBANG', 12),
(170, 'PURWAKARTA', 12),
(171, 'BOGOR', 12),
(172, 'BEKASI', 12),
(173, 'GARUT', 12),
(174, 'PANGANDARAN', 12),
(175, 'CIANJUR', 12),
(176, 'BANJAR', 12),
(177, 'BANDUNG BARAT', 12),
(178, 'CIMAHI', 12),
(179, 'PURBALINGGA', 13),
(180, 'KEBUMEN', 13),
(181, 'MAGELANG', 13),
(182, 'CILACAP', 13),
(183, 'BATANG', 13),
(184, 'BANJARNEGARA', 13),
(185, 'BLORA', 13),
(186, 'BREBES', 13),
(187, 'BANYUMAS', 13),
(188, 'WONOSOBO', 13),
(189, 'TEGAL', 13),
(190, 'PURWOREJO', 13),
(191, 'PATI', 13),
(192, 'SUKOHARJO', 13),
(193, 'KARANGANYAR', 13),
(194, 'PEKALONGAN', 13),
(195, 'PEMALANG', 13),
(196, 'BOYOLALI', 13),
(197, 'GROBOGAN', 13),
(198, 'SEMARANG', 13),
(199, 'DEMAK', 13),
(200, 'REMBANG', 13),
(201, 'KLATEN', 13),
(202, 'KUDUS', 13),
(203, 'TEMANGGUNG', 13),
(204, 'SRAGEN', 13),
(205, 'JEPARA', 13),
(206, 'WONOGIRI', 13),
(207, 'KENDAL', 13),
(208, 'SURAKARTA (SOLO)', 13),
(209, 'SALATIGA', 13),
(210, 'SLEMAN', 14),
(211, 'BANTUL', 14),
(212, 'YOGYAKARTA', 14),
(213, 'GUNUNG KIDUL', 14),
(214, 'KULON PROGO', 14),
(215, 'GRESIK', 15),
(216, 'KEDIRI', 15),
(217, 'SAMPANG', 15),
(218, 'BANGKALAN', 15),
(219, 'SUMENEP', 15),
(220, 'SITUBONDO', 15),
(221, 'SURABAYA', 15),
(222, 'JEMBER', 15),
(223, 'PAMEKASAN', 15),
(224, 'JOMBANG', 15),
(225, 'PROBOLINGGO', 15),
(226, 'BANYUWANGI', 15),
(227, 'PASURUAN', 15),
(228, 'BOJONEGORO', 15),
(229, 'BONDOWOSO', 15),
(230, 'MAGETAN', 15),
(231, 'LUMAJANG', 15),
(232, 'MALANG', 15),
(233, 'BLITAR', 15),
(234, 'SIDOARJO', 15),
(235, 'LAMONGAN', 15),
(236, 'PACITAN', 15),
(237, 'TULUNGAGUNG', 15),
(238, 'MOJOKERTO', 15),
(239, 'MADIUN', 15),
(240, 'PONOROGO', 15),
(241, 'NGAWI', 15),
(242, 'NGANJUK', 15),
(243, 'TUBAN', 15),
(244, 'TRENGGALEK', 15),
(245, 'BATU', 15),
(246, 'TANGERANG', 16),
(247, 'SERANG', 16),
(248, 'PANDEGLANG', 16),
(249, 'LEBAK', 16),
(250, 'TANGERANG SELATAN', 16),
(251, 'CILEGON', 16),
(252, 'KLUNGKUNG', 17),
(253, 'KARANGASEM', 17),
(254, 'BANGLI', 17),
(255, 'TABANAN', 17),
(256, 'GIANYAR', 17),
(257, 'BADUNG', 17),
(258, 'JEMBRANA', 17),
(259, 'BULELENG', 17),
(260, 'DENPASAR', 17),
(261, 'MATARAM', 18),
(262, 'DOMPU', 18),
(263, 'SUMBAWA BARAT', 18),
(264, 'SUMBAWA', 18),
(265, 'LOMBOK TENGAH', 18),
(266, 'LOMBOK TIMUR', 18),
(267, 'LOMBOK UTARA', 18),
(268, 'LOMBOK BARAT', 18),
(269, 'BIMA', 18),
(270, 'TIMOR TENGAH SELATAN', 19),
(271, 'FLORES TIMUR', 19),
(272, 'ALOR', 19),
(273, 'ENDE', 19),
(274, 'NAGEKEO', 19),
(275, 'KUPANG', 19),
(276, 'SIKKA', 19),
(277, 'NGADA', 19),
(278, 'TIMOR TENGAH UTARA', 19),
(279, 'BELU', 19),
(280, 'LEMBATA', 19),
(281, 'SUMBA BARAT DAYA', 19),
(282, 'SUMBA BARAT', 19),
(283, 'SUMBA TENGAH', 19),
(284, 'SUMBA TIMUR', 19),
(285, 'ROTE NDAO', 19),
(286, 'MANGGARAI TIMUR', 19),
(287, 'MANGGARAI', 19),
(288, 'SABU RAIJUA', 19),
(289, 'MANGGARAI BARAT', 19),
(290, 'LANDAK', 20),
(291, 'KETAPANG', 20),
(292, 'SINTANG', 20),
(293, 'KUBU RAYA', 20),
(294, 'PONTIANAK', 20),
(295, 'KAYONG UTARA', 20),
(296, 'BENGKAYANG', 20),
(297, 'KAPUAS HULU', 20),
(298, 'SAMBAS', 20),
(299, 'SINGKAWANG', 20),
(300, 'SANGGAU', 20),
(301, 'MELAWI', 20),
(302, 'SEKADAU', 20),
(303, 'KOTAWARINGIN TIMUR', 21),
(304, 'SUKAMARA', 21),
(305, 'KOTAWARINGIN BARAT', 21),
(306, 'BARITO TIMUR', 21),
(307, 'KAPUAS', 21),
(308, 'PULANG PISAU', 21),
(309, 'LAMANDAU', 21),
(310, 'SERUYAN', 21),
(311, 'KATINGAN', 21),
(312, 'BARITO SELATAN', 21),
(313, 'MURUNG RAYA', 21),
(314, 'BARITO UTARA', 21),
(315, 'GUNUNG MAS', 21),
(316, 'PALANGKA RAYA', 21),
(317, 'TAPIN', 22),
(318, 'BANJAR', 22),
(319, 'HULU SUNGAI TENGAH', 22),
(320, 'TABALONG', 22),
(321, 'HULU SUNGAI UTARA', 22),
(322, 'BALANGAN', 22),
(323, 'TANAH BUMBU', 22),
(324, 'BANJARMASIN', 22),
(325, 'KOTABARU', 22),
(326, 'TANAH LAUT', 22),
(327, 'HULU SUNGAI SELATAN', 22),
(328, 'BARITO KUALA', 22),
(329, 'BANJARBARU', 22),
(330, 'KUTAI BARAT', 23),
(331, 'SAMARINDA', 23),
(332, 'PASER', 23),
(333, 'KUTAI KARTANEGARA', 23),
(334, 'BERAU', 23),
(335, 'PENAJAM PASER UTARA', 23),
(336, 'BONTANG', 23),
(337, 'KUTAI TIMUR', 23),
(338, 'BALIKPAPAN', 23),
(339, 'MALINAU', 24),
(340, 'NUNUKAN', 24),
(341, 'BULUNGAN (BULONGAN)', 24),
(342, 'TANA TIDUNG', 24),
(343, 'TARAKAN', 24),
(344, 'BOLAANG MONGONDOW (BOLMONG)', 25),
(345, 'BOLAANG MONGONDOW SELATAN', 25),
(346, 'MINAHASA SELATAN', 25),
(347, 'BITUNG', 25),
(348, 'MINAHASA', 25),
(349, 'KEPULAUAN SANGIHE', 25),
(350, 'MINAHASA UTARA', 25),
(351, 'KEPULAUAN TALAUD', 25),
(352, 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)', 25),
(353, 'MANADO', 25),
(354, 'BOLAANG MONGONDOW UTARA', 25),
(355, 'BOLAANG MONGONDOW TIMUR', 25),
(356, 'MINAHASA TENGGARA', 25),
(357, 'KOTAMOBAGU', 25),
(358, 'TOMOHON', 25),
(359, 'BANGGAI KEPULAUAN', 26),
(360, 'TOLI-TOLI', 26),
(361, 'PARIGI MOUTONG', 26),
(362, 'BUOL', 26),
(363, 'DONGGALA', 26),
(364, 'POSO', 26),
(365, 'MOROWALI', 26),
(366, 'TOJO UNA-UNA', 26),
(367, 'BANGGAI', 26),
(368, 'SIGI', 26),
(369, 'PALU', 26),
(370, 'MAROS', 27),
(371, 'WAJO', 27),
(372, 'BONE', 27),
(373, 'SOPPENG', 27),
(374, 'SIDENRENG RAPPANG / RAPANG', 27),
(375, 'TAKALAR', 27),
(376, 'BARRU', 27),
(377, 'LUWU TIMUR', 27),
(378, 'SINJAI', 27),
(379, 'PANGKAJENE KEPULAUAN', 27),
(380, 'PINRANG', 27),
(381, 'JENEPONTO', 27),
(382, 'PALOPO', 27),
(383, 'TORAJA UTARA', 27),
(384, 'LUWU', 27),
(385, 'BULUKUMBA', 27),
(386, 'MAKASSAR', 27),
(387, 'SELAYAR (KEPULAUAN SELAYAR)', 27),
(388, 'TANA TORAJA', 27),
(389, 'LUWU UTARA', 27),
(390, 'BANTAENG', 27),
(391, 'GOWA', 27),
(392, 'ENREKANG', 27),
(393, 'PAREPARE', 27),
(394, 'KOLAKA', 28),
(395, 'MUNA', 28),
(396, 'KONAWE SELATAN', 28),
(397, 'KENDARI', 28),
(398, 'KONAWE', 28),
(399, 'KONAWE UTARA', 28),
(400, 'KOLAKA UTARA', 28),
(401, 'BUTON', 28),
(402, 'BOMBANA', 28),
(403, 'WAKATOBI', 28),
(404, 'BAU-BAU', 28),
(405, 'BUTON UTARA', 28),
(406, 'GORONTALO UTARA', 29),
(407, 'BONE BOLANGO', 29),
(408, 'GORONTALO', 29),
(409, 'BOALEMO', 29),
(410, 'POHUWATO', 29),
(411, 'MAJENE', 30),
(412, 'MAMUJU', 30),
(413, 'MAMUJU UTARA', 30),
(414, 'POLEWALI MANDAR', 30),
(415, 'MAMASA', 30),
(416, 'MALUKU TENGGARA BARAT', 31),
(417, 'MALUKU TENGGARA', 31),
(418, 'SERAM BAGIAN BARAT', 31),
(419, 'MALUKU TENGAH', 31),
(420, 'SERAM BAGIAN TIMUR', 31),
(421, 'MALUKU BARAT DAYA', 31),
(422, 'AMBON', 31),
(423, 'BURU', 31),
(424, 'BURU SELATAN', 31),
(425, 'KEPULAUAN ARU', 31),
(426, 'TUAL', 31),
(427, 'HALMAHERA BARAT', 32),
(428, 'TIDORE KEPULAUAN', 32),
(429, 'TERNATE', 32),
(430, 'PULAU MOROTAI', 32),
(431, 'KEPULAUAN SULA', 32),
(432, 'HALMAHERA SELATAN', 32),
(433, 'HALMAHERA TENGAH', 32),
(434, 'HALMAHERA TIMUR', 32),
(435, 'HALMAHERA UTARA', 32),
(436, 'YALIMO', 33),
(437, 'DOGIYAI', 33),
(438, 'ASMAT', 33),
(439, 'JAYAPURA', 33),
(440, 'PANIAI', 33),
(441, 'MAPPI', 33),
(442, 'TOLIKARA', 33),
(443, 'PUNCAK JAYA', 33),
(444, 'PEGUNUNGAN BINTANG', 33),
(445, 'JAYAWIJAYA', 33),
(446, 'LANNY JAYA', 33),
(447, 'NDUGA', 33),
(448, 'BIAK NUMFOR', 33),
(449, 'KEPULAUAN YAPEN (YAPEN WAROPEN)', 33),
(450, 'PUNCAK', 33),
(451, 'INTAN JAYA', 33),
(452, 'WAROPEN', 33),
(453, 'NABIRE', 33),
(454, 'MIMIKA', 33),
(455, 'BOVEN DIGOEL', 33),
(456, 'YAHUKIMO', 33),
(457, 'SARMI', 33),
(458, 'MERAUKE', 33),
(459, 'DEIYAI (DELIYAI)', 33),
(460, 'KEEROM', 33),
(461, 'SUPIORI', 33),
(462, 'MAMBERAMO RAYA', 33),
(463, 'MAMBERAMO TENGAH', 33),
(464, 'RAJA AMPAT', 34),
(465, 'MANOKWARI SELATAN', 34),
(466, 'MANOKWARI', 34),
(467, 'KAIMANA', 34),
(468, 'MAYBRAT', 34),
(469, 'SORONG SELATAN', 34),
(470, 'FAKFAK', 34),
(471, 'PEGUNUNGAN ARFAK', 34),
(472, 'TAMBRAUW', 34),
(473, 'SORONG', 34),
(474, 'TELUK WONDAMA', 34),
(475, 'TELUK BINTUNI', 34);

-- --------------------------------------------------------

--
-- Table structure for table `creeks`
--

CREATE TABLE `creeks` (
  `creek_id` varchar(6) NOT NULL,
  `river_id` varchar(6) NOT NULL,
  `creek_name` varchar(50) NOT NULL,
  `creek_geojson` varchar(100) NOT NULL,
  `creek_longitude` varchar(100) NOT NULL,
  `creek_lattitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `creek_conditions`
--

CREATE TABLE `creek_conditions` (
  `creek_condition_id` varchar(6) NOT NULL,
  `observer_id` varchar(6) NOT NULL,
  `creek_id` varchar(6) NOT NULL,
  `creek_condition_description` text NOT NULL,
  `creek_condition_longitude` varchar(100) NOT NULL,
  `creek_condition_lattitude` varchar(100) NOT NULL,
  `creek_condition_status` enum('safe','small_polluted','polluted','very_polluted') NOT NULL,
  `creek_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled','') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dikes`
--

CREATE TABLE `dikes` (
  `dike_id` varchar(6) NOT NULL,
  `river_id` varchar(6) NOT NULL,
  `regional_unit_id` varchar(6) NOT NULL,
  `dike_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dike_conditions`
--

CREATE TABLE `dike_conditions` (
  `observer_id` varchar(6) NOT NULL,
  `dike_id` varchar(6) NOT NULL,
  `dike_condition_description` text NOT NULL,
  `dike_condition_longitude` varchar(100) NOT NULL,
  `dike_condition_lattitude` varchar(100) NOT NULL,
  `dike_condition_status` enum('safe','standby','alert','damaged') NOT NULL,
  `drain_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drains`
--

CREATE TABLE `drains` (
  `drain_id` varchar(6) NOT NULL,
  `drain_name` varchar(50) NOT NULL,
  `drain_geojson` varchar(100) NOT NULL,
  `drain_longitude` varchar(100) NOT NULL,
  `drain_lattitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drain_conditions`
--

CREATE TABLE `drain_conditions` (
  `drain_condition_id` varchar(6) NOT NULL,
  `observer_id` varchar(6) NOT NULL,
  `drain_id` varchar(6) NOT NULL,
  `drain_condition_description` text NOT NULL,
  `drain_condition_longitude` varchar(100) NOT NULL,
  `drain_condition_lattitude` varchar(100) NOT NULL,
  `drain_condition_status` enum('safe','small_polluted','polluted','very_polluted') NOT NULL,
  `drain_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `industry_pollutions`
--

CREATE TABLE `industry_pollutions` (
  `industry_pollution_id` varchar(6) NOT NULL,
  `observer_id` varchar(6) NOT NULL,
  `industry_pollution_title` varchar(70) NOT NULL,
  `industry_pollution_description` text NOT NULL,
  `industry_pollution_longitude` varchar(100) NOT NULL,
  `industry_pollution_lattitude` varchar(100) NOT NULL,
  `industry_pollution_type` enum('non_hazardous_waste','light_waste','hazardous_waste','very_dangerous_waste') NOT NULL,
  `industry_pollution_img` varchar(255) NOT NULL,
  `industry_pollution_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `industry_pollution_action` text NOT NULL,
  `industry_pollution_action_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `observers`
--

CREATE TABLE `observers` (
  `observer_id` varchar(6) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `regional_unit_id` varchar(6) NOT NULL,
  `observer_name` varchar(50) NOT NULL,
  `observer_phone` varchar(20) NOT NULL,
  `observer_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `prov_id` int(11) NOT NULL,
  `prov_name` varchar(255) DEFAULT NULL,
  `locationid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`prov_id`, `prov_name`, `locationid`, `status`) VALUES
(1, 'ACEH', 1, 1),
(2, 'SUMATERA UTARA', 1, 1),
(3, 'SUMATERA BARAT', 1, 1),
(4, 'RIAU', 1, 1),
(5, 'JAMBI', 1, 1),
(6, 'SUMATERA SELATAN', 1, 1),
(7, 'BENGKULU', 1, 1),
(8, 'LAMPUNG', 1, 1),
(9, 'KEPULAUAN BANGKA BELITUNG', 1, 1),
(10, 'KEPULAUAN RIAU', 1, 1),
(11, 'DKI JAKARTA', 1, 1),
(12, 'JAWA BARAT', 1, 1),
(13, 'JAWA TENGAH', 1, 1),
(14, 'DI YOGYAKARTA', 1, 1),
(15, 'JAWA TIMUR', 1, 1),
(16, 'BANTEN', 1, 1),
(17, 'BALI', 1, 1),
(18, 'NUSA TENGGARA BARAT', 1, 1),
(19, 'NUSA TENGGARA TIMUR', 1, 1),
(20, 'KALIMANTAN BARAT', 1, 1),
(21, 'KALIMANTAN TENGAH', 1, 1),
(22, 'KALIMANTAN SELATAN', 1, 1),
(23, 'KALIMANTAN TIMUR', 1, 1),
(24, 'KALIMANTAN UTARA', 1, 1),
(25, 'SULAWESI UTARA', 1, 1),
(26, 'SULAWESI TENGAH', 1, 1),
(27, 'SULAWESI SELATAN', 1, 1),
(28, 'SULAWESI TENGGARA', 1, 1),
(29, 'GORONTALO', 1, 1),
(30, 'SULAWESI BARAT', 1, 1),
(31, 'MALUKU', 1, 1),
(32, 'MALUKU UTARA', 1, 1),
(33, 'PAPUA', 1, 1),
(34, 'PAPUA BARAT', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `public_pollutions`
--

CREATE TABLE `public_pollutions` (
  `public_pollution_id` varchar(6) NOT NULL,
  `observer_id` varchar(6) NOT NULL,
  `public_pollution_title` varchar(70) NOT NULL,
  `public_pollution_description` text NOT NULL,
  `public_pollution_longitude` varchar(100) NOT NULL,
  `public_pollution_lattitude` varchar(100) NOT NULL,
  `public_pollution_type` enum('non_hazardous_waste','light_waste','hazardous_waste','very_dangerous_waste') NOT NULL,
  `public_pollution_img` varchar(255) NOT NULL,
  `public_pollution_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `public_pollution_action` text NOT NULL,
  `public_pollution_action_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regional_units`
--

CREATE TABLE `regional_units` (
  `regional_unit_id` varchar(6) NOT NULL,
  `main_administrator_id` varchar(6) NOT NULL,
  `city_id` int(11) NOT NULL,
  `regional_unit_name` varchar(50) NOT NULL,
  `regional_unit_address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rivers`
--

CREATE TABLE `rivers` (
  `river_id` varchar(6) NOT NULL,
  `river_name` varchar(50) NOT NULL,
  `river_geojson` varchar(100) NOT NULL,
  `river_longitude` varchar(100) NOT NULL,
  `river_lattitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `river_conditions`
--

CREATE TABLE `river_conditions` (
  `river_condition_id` varchar(6) NOT NULL,
  `observer_id` varchar(6) NOT NULL,
  `river_id` varchar(6) NOT NULL,
  `river_condition_description` text NOT NULL,
  `river_condition_longitude` varchar(100) NOT NULL,
  `river_condition_lattitude` varchar(100) NOT NULL,
  `river_condition_status` enum('safe','small_polluted','polluted','very_polluted') NOT NULL,
  `river_condition_handling_status` enum('not_handled','being_handled','already_handled','long_time_not_handled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `support_devices`
--

CREATE TABLE `support_devices` (
  `support_device_id` varchar(6) NOT NULL,
  `regional_unit_id` varchar(6) NOT NULL,
  `support_device_name` varchar(50) NOT NULL,
  `support_device_description` text NOT NULL,
  `support_device_longitude` varchar(100) NOT NULL,
  `support_device_lattitude` varchar(100) NOT NULL,
  `support_device_type` enum('cctv','ftp','camera') NOT NULL,
  `support_device_link` text NOT NULL,
  `support_device_status` enum('active','crash','repair') NOT NULL,
  `support_device_username` varchar(255) NOT NULL,
  `support_device_password` varchar(150) NOT NULL,
  `support_device_port` varchar(20) NOT NULL,
  `last_updated_condition_by` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(6) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_hint` varchar(20) NOT NULL,
  `user_status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`administrator_id`),
  ADD KEY `FK_USER_ADMINISTRATOR` (`user_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`) USING BTREE;

--
-- Indexes for table `creeks`
--
ALTER TABLE `creeks`
  ADD PRIMARY KEY (`creek_id`),
  ADD KEY `FK_CREEKS_RIVER` (`river_id`);

--
-- Indexes for table `creek_conditions`
--
ALTER TABLE `creek_conditions`
  ADD PRIMARY KEY (`creek_condition_id`),
  ADD KEY `FK_OBSERVER_CREEK_CONDITIONS` (`observer_id`),
  ADD KEY `FK_CREEK_CREEK_CONDITIONS` (`creek_id`);

--
-- Indexes for table `dikes`
--
ALTER TABLE `dikes`
  ADD PRIMARY KEY (`dike_id`),
  ADD KEY `FK_DIKE_RIVER` (`river_id`),
  ADD KEY `FK_DIKE_REGIONAL_UNIT` (`regional_unit_id`);

--
-- Indexes for table `dike_conditions`
--
ALTER TABLE `dike_conditions`
  ADD PRIMARY KEY (`observer_id`),
  ADD KEY `FK_DIKE_DIKE_CONDITION` (`dike_id`);

--
-- Indexes for table `drains`
--
ALTER TABLE `drains`
  ADD PRIMARY KEY (`drain_id`);

--
-- Indexes for table `drain_conditions`
--
ALTER TABLE `drain_conditions`
  ADD PRIMARY KEY (`drain_condition_id`),
  ADD KEY `FK_DRAIN_DRAIN_CONDITION` (`drain_id`),
  ADD KEY `FK_OBSERVER_DRAIN_CONDITION` (`observer_id`);

--
-- Indexes for table `industry_pollutions`
--
ALTER TABLE `industry_pollutions`
  ADD PRIMARY KEY (`industry_pollution_id`),
  ADD KEY `FK_OBSERVER_INDUSTRY_POLUTION` (`observer_id`);

--
-- Indexes for table `observers`
--
ALTER TABLE `observers`
  ADD PRIMARY KEY (`observer_id`),
  ADD KEY `FK_USER_OBSERVER` (`user_id`),
  ADD KEY `FK_OBSERVER_REGIONAL_UNIT` (`regional_unit_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`prov_id`) USING BTREE;

--
-- Indexes for table `public_pollutions`
--
ALTER TABLE `public_pollutions`
  ADD PRIMARY KEY (`public_pollution_id`),
  ADD KEY `FK_OBSERVER_PUBLIC_POLUTION` (`observer_id`);

--
-- Indexes for table `regional_units`
--
ALTER TABLE `regional_units`
  ADD PRIMARY KEY (`regional_unit_id`),
  ADD KEY `FK_MAIN_ADMINISTRATOR_REGIONAL_UNIT` (`main_administrator_id`);

--
-- Indexes for table `rivers`
--
ALTER TABLE `rivers`
  ADD PRIMARY KEY (`river_id`);

--
-- Indexes for table `river_conditions`
--
ALTER TABLE `river_conditions`
  ADD PRIMARY KEY (`river_condition_id`),
  ADD KEY `FK_OBSERVER_RIVER_CONDITION` (`observer_id`);

--
-- Indexes for table `support_devices`
--
ALTER TABLE `support_devices`
  ADD PRIMARY KEY (`support_device_id`),
  ADD KEY `FK_SUPPORT_DEVICE_REGIONAL_UNIT` (`regional_unit_id`),
  ADD KEY `FK_LAST_UPDATE_SUPPORT_DEVICE` (`last_updated_condition_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrators`
--
ALTER TABLE `administrators`
  ADD CONSTRAINT `FK_USER_ADMINISTRATOR` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `creeks`
--
ALTER TABLE `creeks`
  ADD CONSTRAINT `FK_CREEKS_RIVER` FOREIGN KEY (`river_id`) REFERENCES `rivers` (`river_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `creek_conditions`
--
ALTER TABLE `creek_conditions`
  ADD CONSTRAINT `FK_CREEK_CREEK_CONDITIONS` FOREIGN KEY (`creek_id`) REFERENCES `creeks` (`creek_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBSERVER_CREEK_CONDITIONS` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dikes`
--
ALTER TABLE `dikes`
  ADD CONSTRAINT `FK_DIKE_REGIONAL_UNIT` FOREIGN KEY (`regional_unit_id`) REFERENCES `regional_units` (`regional_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DIKE_RIVER` FOREIGN KEY (`river_id`) REFERENCES `rivers` (`river_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dike_conditions`
--
ALTER TABLE `dike_conditions`
  ADD CONSTRAINT `FK_DIKE_DIKE_CONDITION` FOREIGN KEY (`dike_id`) REFERENCES `dikes` (`dike_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBSERVER_DIKE_CONDITION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drain_conditions`
--
ALTER TABLE `drain_conditions`
  ADD CONSTRAINT `FK_DRAIN_DRAIN_CONDITION` FOREIGN KEY (`drain_id`) REFERENCES `drains` (`drain_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBSERVER_DRAIN_CONDITION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `industry_pollutions`
--
ALTER TABLE `industry_pollutions`
  ADD CONSTRAINT `FK_OBSERVER_INDUSTRY_POLUTION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `observers`
--
ALTER TABLE `observers`
  ADD CONSTRAINT `FK_OBSERVER_REGIONAL_UNIT` FOREIGN KEY (`regional_unit_id`) REFERENCES `regional_units` (`regional_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER_OBSERVER` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `public_pollutions`
--
ALTER TABLE `public_pollutions`
  ADD CONSTRAINT `FK_OBSERVER_PUBLIC_POLUTION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regional_units`
--
ALTER TABLE `regional_units`
  ADD CONSTRAINT `FK_MAIN_ADMINISTRATOR_REGIONAL_UNIT` FOREIGN KEY (`main_administrator_id`) REFERENCES `administrators` (`administrator_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `river_conditions`
--
ALTER TABLE `river_conditions`
  ADD CONSTRAINT `FK_OBSERVER_RIVER_CONDITION` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `support_devices`
--
ALTER TABLE `support_devices`
  ADD CONSTRAINT `FK_LAST_UPDATE_SUPPORT_DEVICE` FOREIGN KEY (`last_updated_condition_by`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SUPPORT_DEVICE_REGIONAL_UNIT` FOREIGN KEY (`regional_unit_id`) REFERENCES `regional_units` (`regional_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
