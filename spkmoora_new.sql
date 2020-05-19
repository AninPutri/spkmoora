-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2020 pada 05.56
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

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
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `id_user`) VALUES
(1, 'dummy', 21),
(2, 'Sahrir', 21),
(3, 'Parlindungan S', 21),
(4, 'Asriadi.,SH', 21),
(5, 'I Nyoman Sudana', 21),
(6, 'Sugeng Trinanto', 21),
(7, 'Fx. Eko Januarinta', 21),
(8, 'Bambang Eko R.R., SH', 21),
(9, 'Satria Yudha W.R', 21),
(10, 'Nurhadi', 21),
(11, 'Subeki', 21),
(12, 'Suyamto', 21),
(13, 'Suparno', 21),
(14, 'Suparmin', 21),
(15, 'Irianto', 21),
(16, 'Iskandar', 21),
(17, 'Alan Firdaus., S.Sos., MH', 21),
(18, 'Herianto', 21),
(19, 'Budi Dwi P', 21),
(20, 'Ali Mustofa', 21),
(21, 'Damianus Jelatu', 21),
(22, 'M. Rakib Rais', 21),
(23, 'Taat A.M', 21),
(24, 'Puji Sutrisno', 21),
(25, 'Puji Widodo', 21),
(26, 'Suparno', 21),
(27, 'Jaelani', 21),
(28, 'Erwin., SH', 21),
(29, 'Sudarko', 21),
(30, 'Puji Santoso', 21),
(31, 'Sri Wahono', 21),
(32, 'Gulden Saragih', 21),
(33, 'Zamruddin', 21),
(34, 'Anak Agung Gede A.P', 21),
(35, 'Ponimin', 21),
(36, 'testu', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_user` int(11) NOT NULL,
  `log_tipe` varchar(100) NOT NULL,
  `log_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(1, '2020-05-18 16:37:36', 21, '1', 'Logout'),
(2, '2020-05-18 16:37:43', 21, '0', 'Login'),
(3, '2020-05-18 16:54:35', 21, '2', 'menambahkan user'),
(4, '2020-05-18 16:59:55', 21, '2', 'menambahkan personel baru'),
(5, '2020-05-18 17:00:21', 21, '2', 'menambahkan nilai pada personel id-36'),
(6, '2020-05-18 17:03:27', 21, '3', 'mengubah data nilai personel id-36'),
(7, '2020-05-18 17:04:12', 21, '4', 'menghapus data nilai dari personel id-36'),
(8, '2020-05-18 17:30:04', 21, '1', 'Logout'),
(9, '2020-05-18 17:30:15', 22, '0', 'Login'),
(10, '2020-05-18 17:40:44', 22, '1', 'Logout'),
(11, '2020-05-18 17:40:50', 21, '0', 'Login'),
(12, '2020-05-18 17:40:56', 21, '1', 'Logout'),
(13, '2020-05-18 17:41:03', 22, '0', 'Login'),
(14, '2020-05-18 17:44:41', 22, '1', 'Logout'),
(15, '2020-05-18 17:44:48', 22, '0', 'Login'),
(16, '2020-05-18 17:47:13', 22, '1', 'Logout'),
(17, '2020-05-18 17:47:23', 22, '0', 'Login'),
(18, '2020-05-18 17:49:18', 22, '1', 'Logout'),
(19, '2020-05-18 17:49:26', 22, '0', 'Login'),
(20, '2020-05-18 17:50:28', 22, '1', 'Logout'),
(21, '2020-05-18 17:50:34', 22, '0', 'Login'),
(22, '2020-05-18 17:51:16', 22, '1', 'Logout'),
(23, '2020-05-18 17:51:23', 22, '0', 'Login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe`, `bobot`) VALUES
(1, 'Jenjang Pendidikan', 'Benefit', 0.09),
(2, 'Masa Dinas Dalam Perwira', 'Benefit', 0.16),
(3, 'Kesehatan Fisik Dan Mental', 'Benefit', 0.18),
(4, 'Perwira Berpangkat IPDA dan IPTU', 'Benefit', 0.17),
(5, 'Usia', 'Cost', 0.08),
(6, 'Prestasi', 'Benefit', 0.07),
(7, 'Melayani, Mengayomi, Teladan Masyarakat', 'Cost', 0.13),
(8, 'Penegakan Hukum', 'Cost', 0.12),
(25, 'tet', 'Benefit', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`, `id_user`) VALUES
(682, 1, 1, 0.1, 21),
(683, 1, 2, 0.1, 21),
(684, 1, 3, 0.1, 21),
(685, 1, 4, 0.1, 21),
(686, 1, 5, 0.1, 21),
(687, 1, 6, 0.1, 21),
(688, 1, 7, 0.1, 21),
(689, 1, 8, 0.1, 21),
(690, 2, 1, 60, 21),
(691, 2, 2, 5, 21),
(692, 2, 3, 80, 21),
(693, 2, 4, 100, 21),
(694, 2, 5, 54, 21),
(695, 2, 6, 1, 21),
(696, 2, 7, 0, 21),
(697, 2, 8, 0, 21),
(698, 3, 1, 60, 21),
(699, 3, 2, 7, 21),
(700, 3, 3, 80, 21),
(701, 3, 4, 100, 21),
(702, 3, 5, 54, 21),
(703, 3, 6, 0, 21),
(704, 3, 7, 0, 21),
(705, 3, 8, 0, 21),
(706, 4, 1, 80, 21),
(707, 4, 2, 6, 21),
(708, 4, 3, 80, 21),
(709, 4, 4, 100, 21),
(710, 4, 5, 43, 21),
(711, 4, 6, 1, 21),
(712, 4, 7, 0, 21),
(713, 4, 8, 0, 21),
(714, 5, 1, 60, 21),
(715, 5, 2, 7, 21),
(716, 5, 3, 80, 21),
(717, 5, 4, 100, 21),
(718, 5, 5, 56, 21),
(719, 5, 6, 0, 21),
(720, 5, 7, 0, 21),
(721, 5, 8, 0, 21),
(722, 6, 1, 60, 21),
(723, 6, 2, 7, 21),
(724, 6, 3, 80, 21),
(725, 6, 4, 100, 21),
(726, 6, 5, 56, 21),
(727, 6, 6, 1, 21),
(728, 6, 7, 0, 21),
(729, 6, 8, 0, 21),
(730, 7, 1, 60, 21),
(731, 7, 2, 7, 21),
(732, 7, 3, 80, 21),
(733, 7, 4, 100, 21),
(734, 7, 5, 54, 21),
(735, 7, 6, 0, 21),
(736, 7, 7, 0, 21),
(737, 7, 8, 0, 21),
(738, 8, 1, 80, 21),
(739, 8, 2, 1, 21),
(740, 8, 3, 80, 21),
(741, 8, 4, 80, 21),
(742, 8, 5, 36, 21),
(743, 8, 6, 1, 21),
(744, 8, 7, 0, 21),
(745, 8, 8, 0, 21),
(746, 9, 1, 60, 21),
(747, 9, 2, 3, 21),
(748, 9, 3, 80, 21),
(749, 9, 4, 80, 21),
(750, 9, 5, 40, 21),
(751, 9, 6, 1, 21),
(752, 9, 7, 0, 21),
(753, 9, 8, 0, 21),
(754, 10, 1, 60, 21),
(755, 10, 2, 3, 21),
(756, 10, 3, 80, 21),
(757, 10, 4, 80, 21),
(758, 10, 5, 50, 21),
(759, 10, 6, 1, 21),
(760, 10, 7, 0, 21),
(761, 10, 8, 0, 21),
(762, 11, 1, 60, 21),
(763, 11, 2, 3, 21),
(764, 11, 3, 80, 21),
(765, 11, 4, 80, 21),
(766, 11, 5, 50, 21),
(767, 11, 6, 1, 21),
(768, 11, 7, 0, 21),
(769, 11, 8, 0, 21),
(770, 12, 1, 60, 21),
(771, 12, 2, 1, 21),
(772, 12, 3, 80, 21),
(773, 12, 4, 80, 21),
(774, 12, 5, 47, 21),
(775, 12, 6, 2, 21),
(776, 12, 7, 0, 21),
(777, 12, 8, 0, 21),
(778, 13, 1, 60, 21),
(779, 13, 2, 1, 21),
(780, 13, 3, 80, 21),
(781, 13, 4, 80, 21),
(782, 13, 5, 48, 21),
(783, 13, 6, 1, 21),
(784, 13, 7, 0, 21),
(785, 13, 8, 0, 21),
(786, 14, 1, 60, 21),
(787, 14, 2, 2, 21),
(788, 14, 3, 80, 21),
(789, 14, 4, 100, 21),
(790, 14, 5, 53, 21),
(791, 14, 6, 0, 21),
(792, 14, 7, 0, 21),
(793, 14, 8, 0, 21),
(794, 15, 1, 60, 21),
(795, 15, 2, 2, 21),
(796, 15, 3, 40, 21),
(797, 15, 4, 100, 21),
(798, 15, 5, 56, 21),
(799, 15, 6, 1, 21),
(800, 15, 7, 0, 21),
(801, 15, 8, 0, 21),
(802, 16, 1, 60, 21),
(803, 16, 2, 3, 21),
(804, 16, 3, 40, 21),
(805, 16, 4, 100, 21),
(806, 16, 5, 56, 21),
(807, 16, 6, 0, 21),
(808, 16, 7, 0, 21),
(809, 16, 8, 0, 21),
(810, 17, 1, 100, 21),
(811, 17, 2, 1, 21),
(812, 17, 3, 60, 21),
(813, 17, 4, 80, 21),
(814, 17, 5, 35, 21),
(815, 17, 6, 0, 21),
(816, 17, 7, 0, 21),
(817, 17, 8, 0, 21),
(818, 18, 1, 60, 21),
(819, 18, 2, 1, 21),
(820, 18, 3, 80, 21),
(821, 18, 4, 80, 21),
(822, 18, 5, 35, 21),
(823, 18, 6, 0, 21),
(824, 18, 7, 0, 21),
(825, 18, 8, 0, 21),
(826, 19, 1, 60, 21),
(827, 19, 2, 2, 21),
(828, 19, 3, 60, 21),
(829, 19, 4, 80, 21),
(830, 19, 5, 53, 21),
(831, 19, 6, 1, 21),
(832, 19, 7, 0, 21),
(833, 19, 8, 0, 21),
(834, 20, 1, 60, 21),
(835, 20, 2, 3, 21),
(836, 20, 3, 60, 21),
(837, 20, 4, 100, 21),
(838, 20, 5, 50, 21),
(839, 20, 6, 0, 21),
(840, 20, 7, 0, 21),
(841, 20, 8, 0, 21),
(842, 21, 1, 60, 21),
(843, 21, 2, 3, 21),
(844, 21, 3, 80, 21),
(845, 21, 4, 100, 21),
(846, 21, 5, 50, 21),
(847, 21, 6, 0, 21),
(848, 21, 7, 0, 21),
(849, 21, 8, 0, 21),
(850, 22, 1, 60, 21),
(851, 22, 2, 1, 21),
(852, 22, 3, 80, 21),
(853, 22, 4, 80, 21),
(854, 22, 5, 45, 21),
(855, 22, 6, 1, 21),
(856, 22, 7, 0, 21),
(857, 22, 8, 0, 21),
(858, 23, 1, 60, 21),
(859, 23, 2, 4, 21),
(860, 23, 3, 40, 21),
(861, 23, 4, 100, 21),
(862, 23, 5, 56, 21),
(863, 23, 6, 0, 21),
(864, 23, 7, 0, 21),
(865, 23, 8, 0, 21),
(866, 24, 1, 60, 21),
(867, 24, 2, 3, 21),
(868, 24, 3, 80, 21),
(869, 24, 4, 80, 21),
(870, 24, 5, 45, 21),
(871, 24, 6, 1, 21),
(872, 24, 7, 0, 21),
(873, 24, 8, 0, 21),
(874, 25, 1, 60, 21),
(875, 25, 2, 2, 21),
(876, 25, 3, 60, 21),
(877, 25, 4, 80, 21),
(878, 25, 5, 50, 21),
(879, 25, 6, 1, 21),
(880, 25, 7, 0, 21),
(881, 25, 8, 0, 21),
(882, 26, 1, 60, 21),
(883, 26, 2, 5, 21),
(884, 26, 3, 40, 21),
(885, 26, 4, 100, 21),
(886, 26, 5, 56, 21),
(887, 26, 6, 0, 21),
(888, 26, 7, 0, 21),
(889, 26, 8, 0, 21),
(890, 27, 1, 60, 21),
(891, 27, 2, 3, 21),
(892, 27, 3, 80, 21),
(893, 27, 4, 80, 21),
(894, 27, 5, 46, 21),
(895, 27, 6, 1, 21),
(896, 27, 7, 0, 21),
(897, 27, 8, 0, 21),
(898, 28, 1, 80, 21),
(899, 28, 2, 3, 21),
(900, 28, 3, 80, 21),
(901, 28, 4, 80, 21),
(902, 28, 5, 46, 21),
(903, 28, 6, 1, 21),
(904, 28, 7, 0, 21),
(905, 28, 8, 0, 21),
(906, 29, 1, 60, 21),
(907, 29, 2, 4, 21),
(908, 29, 3, 60, 21),
(909, 29, 4, 100, 21),
(910, 29, 5, 53, 21),
(911, 29, 6, 1, 21),
(912, 29, 7, 0, 21),
(913, 29, 8, 0, 21),
(914, 30, 1, 60, 21),
(915, 30, 2, 4, 21),
(916, 30, 3, 60, 21),
(917, 30, 4, 100, 21),
(918, 30, 5, 53, 21),
(919, 30, 6, 0, 21),
(920, 30, 7, 0, 21),
(921, 30, 8, 0, 21),
(922, 30, 1, 60, 21),
(923, 30, 2, 4, 21),
(924, 30, 3, 60, 21),
(925, 30, 4, 100, 21),
(926, 30, 5, 53, 21),
(927, 30, 6, 0, 21),
(928, 30, 7, 0, 21),
(929, 30, 8, 0, 21),
(930, 31, 1, 60, 21),
(931, 31, 2, 5, 21),
(932, 31, 3, 40, 21),
(933, 31, 4, 80, 21),
(934, 31, 5, 53, 21),
(935, 31, 6, 0, 21),
(936, 31, 7, 0, 21),
(937, 31, 8, 0, 21),
(938, 32, 1, 60, 21),
(939, 32, 2, 4, 21),
(940, 32, 3, 40, 21),
(941, 32, 4, 80, 21),
(942, 32, 5, 53, 21),
(943, 32, 6, 0, 21),
(944, 32, 7, 0, 21),
(945, 32, 8, 0, 21),
(946, 33, 1, 60, 21),
(947, 33, 2, 3, 21),
(948, 33, 3, 60, 21),
(949, 33, 4, 80, 21),
(950, 33, 5, 53, 21),
(951, 33, 6, 0, 21),
(952, 33, 7, 0, 21),
(953, 33, 8, 0, 21),
(954, 34, 1, 60, 21),
(955, 34, 2, 7, 21),
(956, 34, 3, 40, 21),
(957, 34, 4, 100, 21),
(958, 34, 5, 56, 21),
(959, 34, 6, 0, 21),
(960, 34, 7, 0, 21),
(961, 34, 8, 0, 21),
(962, 35, 1, 60, 21),
(963, 35, 2, 2, 21),
(964, 35, 3, 80, 21),
(965, 35, 4, 100, 21),
(966, 35, 5, 53, 21),
(967, 35, 6, 1, 21),
(968, 35, 7, 0, 21),
(969, 35, 8, 0, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_user_level`, `username`, `nama`, `password`) VALUES
(21, 1, 'admin', 'admin1', '21232f297a57a5a743894a0e4a801fc3'),
(22, 2, 'andry', 'andry darmawan', '1fd07199cca4ff81d01dca373c6e03a9'),
(24, 2, 'user2', 'polinema', '7e58d63b60197ceb55a1c487989a3720');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `user_id` (`id_user`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_user` (`log_user`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_level` (`id_user_level`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1050;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `alternatif_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD CONSTRAINT `histori_ibfk_1` FOREIGN KEY (`log_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_level`) REFERENCES `user_level` (`id_user_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
