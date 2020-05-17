-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 06:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkmoora`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `id_user`) VALUES
(1, 'dummy', 6),
(2, 'Sahrir', 6),
(3, 'Parlindungan S', 6),
(4, 'Asriadi.,SH', 6),
(5, 'I Nyoman Sudana', 6),
(6, 'Sugeng Trinanto', 6),
(7, 'Fx. Eko Januarinta', 6),
(8, 'Bambang Eko R.R., SH', 6),
(9, 'Satria Yudha W.R', 6),
(10, 'Nurhadi', 6),
(11, 'Subeki', 6),
(12, 'Suyamto', 6),
(13, 'Suparno', 6),
(14, 'Suparmin', 6),
(15, 'Irianto', 6),
(16, 'Iskandar', 6),
(17, 'Alan Firdaus., S.Sos., MH', 6),
(18, 'Herianto', 6),
(19, 'Budi Dwi P', 6),
(20, 'Ali Mustofa', 6),
(21, 'Damianus Jelatu', 6),
(22, 'M. Rakib Rais', 6),
(23, 'Taat A.M', 6),
(24, 'Puji Sutrisno', 6),
(25, 'Puji Widodo', 6),
(26, 'Suparno', 6),
(27, 'Jaelani', 6),
(28, 'Erwin., SH', 6),
(29, 'Sudarko', 6),
(30, 'Puji Santoso', 6),
(31, 'Sri Wahono', 6),
(32, 'Gulden Saragih', 6),
(33, 'Zamruddin', 6),
(34, 'Anak Agung Gede A.P', 6),
(35, 'Ponimin', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe`, `bobot`) VALUES
(1, 'Jenjang Pendidikan', 'Benefit', 0.09),
(2, 'Masa Dinas Dalam Perwira', 'Benefit', 0.16),
(3, 'Kesehatan Fisik Dan Mental', 'Benefit', 0.18),
(4, 'Perwira Berpangkat IPDA dan IPTU', 'Benefit', 0.17),
(5, 'Usia', 'Cost', 0.08),
(6, 'Prestasi', 'Benefit', 0.07),
(7, 'Melayani, Mengayomi, Teladan Masyarakat', 'Cost', 0.13),
(8, 'Penegakan Hukum', 'Cost', 0.12);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`, `id_user`) VALUES
(682, 1, 1, 0.1, 6),
(683, 1, 2, 0.1, 6),
(684, 1, 3, 0.1, 6),
(685, 1, 4, 0.1, 6),
(686, 1, 5, 0.1, 6),
(687, 1, 6, 0.1, 6),
(688, 1, 7, 0.1, 6),
(689, 1, 8, 0.1, 6),
(690, 2, 1, 60, 6),
(691, 2, 2, 5, 6),
(692, 2, 3, 80, 6),
(693, 2, 4, 100, 6),
(694, 2, 5, 54, 6),
(695, 2, 6, 1, 6),
(696, 2, 7, 0, 6),
(697, 2, 8, 0, 6),
(698, 3, 1, 60, 6),
(699, 3, 2, 7, 6),
(700, 3, 3, 80, 6),
(701, 3, 4, 100, 6),
(702, 3, 5, 54, 6),
(703, 3, 6, 0, 6),
(704, 3, 7, 0, 6),
(705, 3, 8, 0, 6),
(706, 4, 1, 80, 6),
(707, 4, 2, 6, 6),
(708, 4, 3, 80, 6),
(709, 4, 4, 100, 6),
(710, 4, 5, 43, 6),
(711, 4, 6, 1, 6),
(712, 4, 7, 0, 6),
(713, 4, 8, 0, 6),
(714, 5, 1, 60, 6),
(715, 5, 2, 7, 6),
(716, 5, 3, 80, 6),
(717, 5, 4, 100, 6),
(718, 5, 5, 56, 6),
(719, 5, 6, 0, 6),
(720, 5, 7, 0, 6),
(721, 5, 8, 0, 6),
(722, 6, 1, 60, 6),
(723, 6, 2, 7, 6),
(724, 6, 3, 80, 6),
(725, 6, 4, 100, 6),
(726, 6, 5, 56, 6),
(727, 6, 6, 1, 6),
(728, 6, 7, 0, 6),
(729, 6, 8, 0, 6),
(730, 7, 1, 60, 6),
(731, 7, 2, 7, 6),
(732, 7, 3, 80, 6),
(733, 7, 4, 100, 6),
(734, 7, 5, 54, 6),
(735, 7, 6, 0, 6),
(736, 7, 7, 0, 6),
(737, 7, 8, 0, 6),
(738, 8, 1, 80, 6),
(739, 8, 2, 1, 6),
(740, 8, 3, 80, 6),
(741, 8, 4, 80, 6),
(742, 8, 5, 36, 6),
(743, 8, 6, 1, 6),
(744, 8, 7, 0, 6),
(745, 8, 8, 0, 6),
(746, 9, 1, 60, 6),
(747, 9, 2, 3, 6),
(748, 9, 3, 80, 6),
(749, 9, 4, 80, 6),
(750, 9, 5, 40, 6),
(751, 9, 6, 1, 6),
(752, 9, 7, 0, 6),
(753, 9, 8, 0, 6),
(754, 10, 1, 60, 6),
(755, 10, 2, 3, 6),
(756, 10, 3, 80, 6),
(757, 10, 4, 80, 6),
(758, 10, 5, 50, 6),
(759, 10, 6, 1, 6),
(760, 10, 7, 0, 6),
(761, 10, 8, 0, 6),
(762, 11, 1, 60, 6),
(763, 11, 2, 3, 6),
(764, 11, 3, 80, 6),
(765, 11, 4, 80, 6),
(766, 11, 5, 50, 6),
(767, 11, 6, 1, 6),
(768, 11, 7, 0, 6),
(769, 11, 8, 0, 6),
(770, 12, 1, 60, 6),
(771, 12, 2, 1, 6),
(772, 12, 3, 80, 6),
(773, 12, 4, 80, 6),
(774, 12, 5, 47, 6),
(775, 12, 6, 2, 6),
(776, 12, 7, 0, 6),
(777, 12, 8, 0, 6),
(778, 13, 1, 60, 6),
(779, 13, 2, 1, 6),
(780, 13, 3, 80, 6),
(781, 13, 4, 80, 6),
(782, 13, 5, 48, 6),
(783, 13, 6, 1, 6),
(784, 13, 7, 0, 6),
(785, 13, 8, 0, 6),
(786, 14, 1, 60, 6),
(787, 14, 2, 2, 6),
(788, 14, 3, 80, 6),
(789, 14, 4, 100, 6),
(790, 14, 5, 53, 6),
(791, 14, 6, 0, 6),
(792, 14, 7, 0, 6),
(793, 14, 8, 0, 6),
(794, 15, 1, 60, 6),
(795, 15, 2, 2, 6),
(796, 15, 3, 40, 6),
(797, 15, 4, 100, 6),
(798, 15, 5, 56, 6),
(799, 15, 6, 1, 6),
(800, 15, 7, 0, 6),
(801, 15, 8, 0, 6),
(802, 16, 1, 60, 6),
(803, 16, 2, 3, 6),
(804, 16, 3, 40, 6),
(805, 16, 4, 100, 6),
(806, 16, 5, 56, 6),
(807, 16, 6, 0, 6),
(808, 16, 7, 0, 6),
(809, 16, 8, 0, 6),
(810, 17, 1, 100, 6),
(811, 17, 2, 1, 6),
(812, 17, 3, 60, 6),
(813, 17, 4, 80, 6),
(814, 17, 5, 35, 6),
(815, 17, 6, 0, 6),
(816, 17, 7, 0, 6),
(817, 17, 8, 0, 6),
(818, 18, 1, 60, 6),
(819, 18, 2, 1, 6),
(820, 18, 3, 80, 6),
(821, 18, 4, 80, 6),
(822, 18, 5, 35, 6),
(823, 18, 6, 0, 6),
(824, 18, 7, 0, 6),
(825, 18, 8, 0, 6),
(826, 19, 1, 60, 6),
(827, 19, 2, 2, 6),
(828, 19, 3, 60, 6),
(829, 19, 4, 80, 6),
(830, 19, 5, 53, 6),
(831, 19, 6, 1, 6),
(832, 19, 7, 0, 6),
(833, 19, 8, 0, 6),
(834, 20, 1, 60, 6),
(835, 20, 2, 3, 6),
(836, 20, 3, 60, 6),
(837, 20, 4, 100, 6),
(838, 20, 5, 50, 6),
(839, 20, 6, 0, 6),
(840, 20, 7, 0, 6),
(841, 20, 8, 0, 6),
(842, 21, 1, 60, 6),
(843, 21, 2, 3, 6),
(844, 21, 3, 80, 6),
(845, 21, 4, 100, 6),
(846, 21, 5, 50, 6),
(847, 21, 6, 0, 6),
(848, 21, 7, 0, 6),
(849, 21, 8, 0, 6),
(850, 22, 1, 60, 6),
(851, 22, 2, 1, 6),
(852, 22, 3, 80, 6),
(853, 22, 4, 80, 6),
(854, 22, 5, 45, 6),
(855, 22, 6, 1, 6),
(856, 22, 7, 0, 6),
(857, 22, 8, 0, 6),
(858, 23, 1, 60, 6),
(859, 23, 2, 4, 6),
(860, 23, 3, 40, 6),
(861, 23, 4, 100, 6),
(862, 23, 5, 56, 6),
(863, 23, 6, 0, 6),
(864, 23, 7, 0, 6),
(865, 23, 8, 0, 6),
(866, 24, 1, 60, 6),
(867, 24, 2, 3, 6),
(868, 24, 3, 80, 6),
(869, 24, 4, 80, 6),
(870, 24, 5, 45, 6),
(871, 24, 6, 1, 6),
(872, 24, 7, 0, 6),
(873, 24, 8, 0, 6),
(874, 25, 1, 60, 6),
(875, 25, 2, 2, 6),
(876, 25, 3, 60, 6),
(877, 25, 4, 80, 6),
(878, 25, 5, 50, 6),
(879, 25, 6, 1, 6),
(880, 25, 7, 0, 6),
(881, 25, 8, 0, 6),
(882, 26, 1, 60, 6),
(883, 26, 2, 5, 6),
(884, 26, 3, 40, 6),
(885, 26, 4, 100, 6),
(886, 26, 5, 56, 6),
(887, 26, 6, 0, 6),
(888, 26, 7, 0, 6),
(889, 26, 8, 0, 6),
(890, 27, 1, 60, 6),
(891, 27, 2, 3, 6),
(892, 27, 3, 80, 6),
(893, 27, 4, 80, 6),
(894, 27, 5, 46, 6),
(895, 27, 6, 1, 6),
(896, 27, 7, 0, 6),
(897, 27, 8, 0, 6),
(898, 28, 1, 80, 6),
(899, 28, 2, 3, 6),
(900, 28, 3, 80, 6),
(901, 28, 4, 80, 6),
(902, 28, 5, 46, 6),
(903, 28, 6, 1, 6),
(904, 28, 7, 0, 6),
(905, 28, 8, 0, 6),
(906, 29, 1, 60, 6),
(907, 29, 2, 4, 6),
(908, 29, 3, 60, 6),
(909, 29, 4, 100, 6),
(910, 29, 5, 53, 6),
(911, 29, 6, 1, 6),
(912, 29, 7, 0, 6),
(913, 29, 8, 0, 6),
(914, 30, 1, 60, 6),
(915, 30, 2, 4, 6),
(916, 30, 3, 60, 6),
(917, 30, 4, 100, 6),
(918, 30, 5, 53, 6),
(919, 30, 6, 0, 6),
(920, 30, 7, 0, 6),
(921, 30, 8, 0, 6),
(922, 30, 1, 60, 6),
(923, 30, 2, 4, 6),
(924, 30, 3, 60, 6),
(925, 30, 4, 100, 6),
(926, 30, 5, 53, 6),
(927, 30, 6, 0, 6),
(928, 30, 7, 0, 6),
(929, 30, 8, 0, 6),
(930, 31, 1, 60, 6),
(931, 31, 2, 5, 6),
(932, 31, 3, 40, 6),
(933, 31, 4, 80, 6),
(934, 31, 5, 53, 6),
(935, 31, 6, 0, 6),
(936, 31, 7, 0, 6),
(937, 31, 8, 0, 6),
(938, 32, 1, 60, 6),
(939, 32, 2, 4, 6),
(940, 32, 3, 40, 6),
(941, 32, 4, 80, 6),
(942, 32, 5, 53, 6),
(943, 32, 6, 0, 6),
(944, 32, 7, 0, 6),
(945, 32, 8, 0, 6),
(946, 33, 1, 60, 6),
(947, 33, 2, 3, 6),
(948, 33, 3, 60, 6),
(949, 33, 4, 80, 6),
(950, 33, 5, 53, 6),
(951, 33, 6, 0, 6),
(952, 33, 7, 0, 6),
(953, 33, 8, 0, 6),
(954, 34, 1, 60, 6),
(955, 34, 2, 7, 6),
(956, 34, 3, 40, 6),
(957, 34, 4, 100, 6),
(958, 34, 5, 56, 6),
(959, 34, 6, 0, 6),
(960, 34, 7, 0, 6),
(961, 34, 8, 0, 6),
(962, 35, 1, 60, 6),
(963, 35, 2, 2, 6),
(964, 35, 3, 80, 6),
(965, 35, 4, 100, 6),
(966, 35, 5, 53, 6),
(967, 35, 6, 1, 6),
(968, 35, 7, 0, 6),
(969, 35, 8, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `level`) VALUES
(6, 'admin', 'Andry', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(19, 'andreadmin', 'andreadmin', '5c6eb33c0b5d91d5bfec9106022dd1f1', 'admin'),
(20, 'andrepegawai', 'andrepegawai2', 'f5f55d0f9159cc54fab1240de84db4a6', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `user_id` (`id_user`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=970;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `alternatif_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
