-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 02:37 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'SD Bunulrejo 4', 6),
(2, 'SD Tunjungsekar 3', 6),
(3, 'SD Bandulan 2', 6),
(4, 'SD Blimbing 1', 6);

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
(1, 'Pondasi', 'Benefit', 10),
(2, 'Sloof', 'Benefit', 7),
(3, 'Kolom, Balok, ring balok', 'Benefit', 20),
(4, 'Plesteran', 'Benefit', 2),
(5, 'Rangka atap', 'Benefit', 8),
(6, 'Penutup Atap', 'Benefit', 2),
(7, 'Rangka Plafond', 'Benefit', 3.5),
(8, 'Penutup plafond', 'Benefit', 4.5),
(9, 'Batu bata/partisi', 'Benefit', 4.5),
(10, 'Plesteran dan Acian', 'Benefit', 1.75),
(11, 'Jendela(termasuk Kaca)', 'Benefit', 1.25),
(12, 'Pintu', 'Benefit', 1),
(13, 'Kusen', 'Benefit', 1.5),
(14, 'Penutup Lantai(termasuk urugan pasir)', 'Benefit', 10),
(15, 'Instalasi Listrik', 'Benefit', 5),
(16, 'instalasi_air', 'Benefit', 1.5),
(17, 'Drainase, Limbah (termasuk septictank)', 'benefit', 1.5),
(18, 'Finishing dinding\r\n', 'Benefit', 1),
(19, 'Finishing Plafon\r\n', 'Benefit', 4),
(20, 'Finishing Struktur\r\n', 'Benefit', 6),
(21, 'Finishing Kusen\r\n', 'Benefit', 4);

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
(526, 1, 1, 10, 6),
(527, 1, 2, 1, 6),
(528, 1, 3, 20, 6),
(529, 1, 4, 2, 6),
(530, 1, 5, 1, 6),
(531, 1, 6, 1, 6),
(532, 1, 7, 1, 6),
(533, 1, 8, 1, 6),
(534, 1, 9, 1, 6),
(535, 1, 10, 1, 6),
(536, 1, 11, 1, 6),
(537, 1, 12, 1, 6),
(538, 1, 13, 1, 6),
(539, 1, 14, 1, 6),
(540, 1, 15, 5, 6),
(541, 1, 16, 1, 6),
(542, 1, 17, 1, 6),
(543, 1, 18, 6, 6),
(544, 1, 19, 4, 6),
(545, 1, 20, 1, 6),
(546, 1, 21, 6, 6),
(547, 2, 1, 1, 6),
(548, 2, 2, 1, 6),
(549, 2, 3, 20, 6),
(550, 2, 4, 2, 6),
(551, 2, 5, 8, 6),
(552, 2, 6, 2, 6),
(553, 2, 7, 1, 6),
(554, 2, 8, 3.5, 6),
(555, 2, 9, 1, 6),
(556, 2, 10, 1, 6),
(557, 2, 11, 1, 6),
(558, 2, 12, 1, 6),
(559, 2, 13, 1, 6),
(560, 2, 14, 1, 6),
(561, 2, 15, 1, 6),
(562, 2, 16, 1.5, 6),
(563, 2, 17, 1, 6),
(564, 2, 18, 6, 6),
(565, 2, 19, 4, 6),
(566, 2, 20, 1, 6),
(567, 2, 21, 6, 6),
(568, 3, 1, 10, 6),
(569, 3, 2, 10, 6),
(570, 3, 3, 20, 6),
(571, 3, 4, 2, 6),
(572, 3, 5, 8, 6),
(573, 3, 6, 2, 6),
(574, 3, 7, 4.5, 6),
(575, 3, 8, 3.5, 6),
(576, 3, 9, 4.5, 6),
(577, 3, 10, 1.75, 6),
(578, 3, 11, 1.25, 6),
(579, 3, 12, 1, 6),
(580, 3, 13, 1.5, 6),
(581, 3, 14, 10, 6),
(582, 3, 15, 5, 6),
(583, 3, 16, 1.5, 6),
(584, 3, 17, 1, 6),
(585, 3, 18, 6, 6),
(586, 3, 19, 4, 6),
(587, 3, 20, 1, 6),
(588, 3, 21, 6, 6),
(589, 4, 1, 10, 6),
(590, 4, 2, 7, 6),
(591, 4, 3, 20, 6),
(592, 4, 4, 2, 6),
(593, 4, 5, 8, 6),
(594, 4, 6, 2, 6),
(595, 4, 7, 3.5, 6),
(596, 4, 8, 4.5, 6),
(597, 4, 9, 4.5, 6),
(598, 4, 10, 1.75, 6),
(599, 4, 11, 1.25, 6),
(600, 4, 12, 1, 6),
(601, 4, 13, 1.5, 6),
(602, 4, 14, 10, 6),
(603, 4, 15, 5, 6),
(604, 4, 16, 1.5, 6),
(605, 4, 17, 1.5, 6),
(606, 4, 18, 1, 6),
(607, 4, 19, 4, 6),
(608, 4, 20, 6, 6),
(609, 4, 21, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `password`, `level`) VALUES
(5, '1541180080', 'Ainia', 'b2253e730211d08992bac2706a836021', 'admin'),
(6, 'admin', 'Ani', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(7, '196504101989101003', 'Totok Kasianto', '0109f7d79f0bc7024ddcf662e6a84359', 'pegawai');

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
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=610;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
