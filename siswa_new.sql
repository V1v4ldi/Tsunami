-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 07:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`) VALUES
(1, 'admin@upnyk.ac.id', 'gatausayajuga', 'Rikza');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_pelajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nuptk`, `nama`, `email`, `password`, `id_pelajaran`) VALUES
(1, 123, 'skalfj', 'aksdk@gmail.com', '1234', 3),
(2, 12321, 'rikza', 'rikza@gmail.com', '12345', 2),
(3, 1234123, 'Rikza H', 'rikzahasan0@gmail.com', '12345', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_mapel`, `id_kelas`, `id_jam`, `hari`) VALUES
(1, 1, 1, 1, 'Senin'),
(2, 2, 1, 2, 'Senin'),
(3, 8, 1, 3, 'Senin'),
(4, 8, 1, 4, 'Senin'),
(5, 3, 1, 1, 'Selasa'),
(6, 4, 1, 2, 'Selasa'),
(7, 10, 1, 3, 'Selasa'),
(8, 10, 1, 4, 'Selasa'),
(9, 5, 1, 1, 'Rabu'),
(10, 6, 1, 2, 'Rabu'),
(11, 9, 1, 3, 'Rabu'),
(12, 9, 1, 4, 'Rabu'),
(13, 7, 1, 1, 'Kamis'),
(14, 7, 1, 2, 'Kamis'),
(15, 11, 1, 3, 'Kamis'),
(16, 11, 1, 4, 'Kamis'),
(17, 2, 2, 1, 'Senin'),
(18, 1, 2, 2, 'Senin'),
(19, 10, 2, 3, 'Senin'),
(20, 10, 2, 4, 'Senin'),
(21, 4, 2, 1, 'Selasa'),
(22, 3, 2, 2, 'Selasa'),
(23, 9, 2, 3, 'Selasa'),
(24, 9, 2, 4, 'Selasa'),
(25, 6, 2, 1, 'Rabu'),
(26, 5, 2, 2, 'Rabu'),
(27, 11, 2, 3, 'Rabu'),
(28, 11, 2, 4, 'Rabu'),
(29, 7, 2, 1, 'Kamis'),
(30, 7, 2, 2, 'Kamis'),
(31, 8, 2, 3, 'Kamis'),
(32, 8, 2, 4, 'Kamis'),
(33, 1, 3, 1, 'Senin'),
(34, 2, 3, 2, 'Senin'),
(35, 8, 3, 3, 'Senin'),
(36, 8, 3, 4, 'Senin'),
(37, 3, 3, 1, 'Selasa'),
(38, 4, 3, 2, 'Selasa'),
(39, 10, 3, 3, 'Selasa'),
(40, 10, 3, 4, 'Selasa'),
(41, 7, 3, 1, 'Rabu'),
(42, 7, 3, 2, 'Rabu'),
(43, 9, 3, 3, 'Rabu'),
(44, 9, 3, 4, 'Rabu'),
(45, 5, 3, 1, 'Kamis'),
(46, 6, 3, 2, 'Kamis'),
(47, 11, 3, 3, 'Kamis'),
(48, 11, 3, 4, 'Kamis'),
(49, 2, 4, 1, 'Senin'),
(50, 1, 4, 2, 'Senin'),
(51, 10, 4, 3, 'Senin'),
(52, 10, 4, 4, 'Senin'),
(53, 4, 4, 1, 'Selasa'),
(54, 3, 4, 2, 'Selasa'),
(55, 9, 4, 3, 'Selasa'),
(56, 9, 4, 4, 'Selasa'),
(57, 7, 4, 1, 'Rabu'),
(58, 7, 4, 2, 'Rabu'),
(59, 11, 4, 3, 'Rabu'),
(60, 11, 4, 4, 'Rabu'),
(61, 6, 4, 1, 'Kamis'),
(62, 5, 4, 2, 'Kamis'),
(63, 8, 4, 3, 'Kamis'),
(64, 8, 4, 4, 'Kamis'),
(65, 1, 5, 1, 'Senin'),
(66, 2, 5, 2, 'Senin'),
(67, 8, 5, 3, 'Senin'),
(68, 8, 5, 4, 'Senin'),
(69, 7, 5, 1, 'Selasa'),
(70, 7, 5, 2, 'Selasa'),
(71, 10, 5, 3, 'Selasa'),
(72, 10, 5, 4, 'Selasa'),
(73, 5, 5, 1, 'Rabu'),
(74, 6, 5, 2, 'Rabu'),
(75, 9, 5, 3, 'Rabu'),
(76, 9, 5, 4, 'Rabu'),
(77, 3, 5, 1, 'Kamis'),
(78, 4, 5, 2, 'Kamis'),
(79, 11, 5, 3, 'Kamis'),
(80, 11, 5, 4, 'Kamis'),
(81, 2, 6, 1, 'Senin'),
(82, 1, 6, 2, 'Senin'),
(83, 10, 6, 3, 'Senin'),
(84, 10, 6, 4, 'Senin'),
(85, 7, 6, 1, 'Selasa'),
(86, 7, 6, 2, 'Selasa'),
(87, 9, 6, 3, 'Selasa'),
(88, 9, 6, 4, 'Selasa'),
(89, 6, 6, 1, 'Rabu'),
(90, 5, 6, 2, 'Rabu'),
(91, 11, 6, 3, 'Rabu'),
(92, 11, 6, 4, 'Rabu'),
(93, 4, 6, 1, 'Kamis'),
(94, 3, 6, 2, 'Kamis'),
(95, 8, 6, 3, 'Kamis'),
(96, 8, 6, 4, 'Kamis'),
(97, 7, 7, 1, 'Senin'),
(98, 7, 7, 2, 'Senin'),
(99, 12, 7, 3, 'Senin'),
(100, 12, 7, 4, 'Senin'),
(101, 3, 7, 1, 'Selasa'),
(102, 4, 7, 2, 'Selasa'),
(103, 13, 7, 3, 'Selasa'),
(104, 13, 7, 4, 'Selasa'),
(105, 5, 7, 1, 'Rabu'),
(106, 6, 7, 2, 'Rabu'),
(107, 14, 7, 3, 'Rabu'),
(108, 14, 7, 4, 'Rabu'),
(109, 1, 7, 1, 'Kamis'),
(110, 2, 7, 2, 'Kamis'),
(111, 15, 7, 3, 'Kamis'),
(112, 15, 7, 4, 'Kamis'),
(113, 7, 8, 1, 'Senin'),
(114, 7, 8, 2, 'Senin'),
(115, 13, 8, 3, 'Senin'),
(116, 13, 8, 4, 'Senin'),
(117, 4, 8, 1, 'Selasa'),
(118, 3, 8, 2, 'Selasa'),
(119, 12, 8, 3, 'Selasa'),
(120, 12, 8, 4, 'Selasa'),
(121, 6, 8, 1, 'Rabu'),
(122, 5, 8, 2, 'Rabu'),
(123, 15, 8, 3, 'Rabu'),
(124, 15, 8, 4, 'Rabu'),
(125, 2, 8, 1, 'Kamis'),
(126, 1, 8, 2, 'Kamis'),
(127, 14, 8, 3, 'Kamis'),
(128, 14, 8, 4, 'Kamis'),
(129, 1, 9, 1, 'Senin'),
(130, 2, 9, 2, 'Senin'),
(131, 12, 9, 3, 'Senin'),
(132, 12, 9, 4, 'Senin'),
(133, 3, 9, 1, 'Selasa'),
(134, 4, 9, 2, 'Selasa'),
(135, 13, 9, 3, 'Selasa'),
(136, 13, 9, 4, 'Selasa'),
(137, 7, 9, 1, 'Rabu'),
(138, 7, 9, 2, 'Rabu'),
(139, 14, 9, 3, 'Rabu'),
(140, 14, 9, 4, 'Rabu'),
(141, 5, 9, 1, 'Kamis'),
(142, 6, 9, 2, 'Kamis'),
(143, 15, 9, 3, 'Kamis'),
(144, 15, 9, 4, 'Kamis'),
(145, 2, 10, 1, 'Senin'),
(146, 1, 10, 2, 'Senin'),
(147, 13, 10, 3, 'Senin'),
(148, 13, 10, 4, 'Senin'),
(149, 4, 10, 1, 'Selasa'),
(150, 3, 10, 2, 'Selasa'),
(151, 12, 10, 3, 'Selasa'),
(152, 12, 10, 4, 'Selasa'),
(153, 7, 10, 1, 'Rabu'),
(154, 7, 10, 2, 'Rabu'),
(155, 15, 10, 3, 'Rabu'),
(156, 15, 10, 4, 'Rabu'),
(157, 6, 10, 1, 'Kamis'),
(158, 5, 10, 2, 'Kamis'),
(159, 14, 10, 3, 'Kamis'),
(160, 14, 10, 4, 'Rabu'),
(161, 1, 11, 1, 'Senin'),
(162, 2, 11, 2, 'Senin'),
(163, 12, 11, 3, 'Senin'),
(164, 12, 11, 4, 'Senin'),
(165, 3, 11, 1, 'Selasa'),
(166, 4, 11, 2, 'Selasa'),
(167, 13, 11, 3, 'Selasa'),
(168, 13, 11, 4, 'Selasa'),
(169, 5, 11, 1, 'Rabu'),
(170, 6, 11, 2, 'Rabu'),
(171, 14, 11, 3, 'Rabu'),
(172, 14, 11, 4, 'Rabu'),
(173, 7, 11, 1, 'Kamis'),
(174, 7, 11, 2, 'Kamis'),
(175, 15, 11, 3, 'Kamis'),
(176, 15, 11, 4, 'Kamis'),
(177, 2, 12, 1, 'Senin'),
(178, 1, 12, 2, 'Senin'),
(179, 13, 12, 3, 'Senin'),
(180, 13, 12, 4, 'Senin'),
(181, 4, 12, 1, 'Selasa'),
(182, 3, 12, 2, 'Selasa'),
(183, 12, 12, 3, 'Selasa'),
(184, 12, 12, 4, 'Selasa'),
(185, 6, 12, 1, 'Rabu'),
(186, 5, 12, 2, 'Rabu'),
(187, 15, 12, 3, 'Rabu'),
(188, 15, 12, 4, 'Rabu'),
(189, 7, 12, 1, 'Kamis'),
(190, 7, 12, 2, 'Kamis'),
(191, 14, 12, 3, 'Kamis'),
(192, 14, 12, 4, 'Kamis');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int(11) NOT NULL,
  `nama_periode` varchar(50) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `nama_periode`, `mulai`, `selesai`) VALUES
(1, 'Mapel 1', '07:00:00', '07:40:00'),
(2, 'Mapel 2', '07:45:00', '08:25:00'),
(3, 'Mapel 3', '08:30:00', '09:10:00'),
(4, 'Mapel 4', '09:15:00', '09:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`) VALUES
(1, 'X-IPA-1'),
(2, 'X-IPA-2'),
(3, 'XI-IPA-1'),
(4, 'XI-IPA-2'),
(5, 'XII-IPA-1'),
(6, 'XII-IPA-2'),
(7, 'X-IPS-1'),
(8, 'X-IPS-2'),
(9, 'XI-IPS-1'),
(10, 'XI-IPS-2'),
(11, 'XII-IPS-1'),
(12, 'XII-IPS-2');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `tipe` enum('Umum','Ilmu Pengetahuan Alam','Ilmu Pengetahuan Sosial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `tipe`) VALUES
(1, 'Pendidikan Agama', 'Umum'),
(2, 'Pendidikan Kewarganegaraan', 'Umum'),
(3, 'Bahasa Indonesia', 'Umum'),
(4, 'Matematika (Wajib)', 'Umum'),
(5, 'Bahasa Inggris', 'Umum'),
(6, 'Seni dan Prakarya', 'Umum'),
(7, 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'Umum'),
(8, 'Fisika', 'Ilmu Pengetahuan Alam'),
(9, 'Kimia', 'Ilmu Pengetahuan Alam'),
(10, 'Matematika (Minat)', 'Ilmu Pengetahuan Alam'),
(11, 'Biologi', 'Ilmu Pengetahuan Alam'),
(12, 'Sosiologi', 'Ilmu Pengetahuan Sosial'),
(13, 'Geografi', 'Ilmu Pengetahuan Sosial'),
(14, 'Ekonomi', 'Ilmu Pengetahuan Sosial'),
(15, 'Sejarah', 'Ilmu Pengetahuan Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` enum('Ilmu Pengetahuan Alam','Ilmu Pengetahuan Sosial') NOT NULL,
  `kelas` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nisn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama`, `jurusan`, `kelas`, `email`, `password`, `nisn`) VALUES
(9, 'dian', 'Ilmu Pengetahuan Sosial', 12, 'dian@gmail.com', '123123', 12312331),
(10, 'hasan', 'Ilmu Pengetahuan Alam', 2, 'hasan@gmail.id', '12345', 12312311);

--
-- Triggers `murid`
--
DELIMITER $$
CREATE TRIGGER `murid_trigger` AFTER INSERT ON `murid` FOR EACH ROW BEGIN

    DECLARE done INT DEFAULT 0;
    DECLARE mapel_id INT;
    DECLARE tipe_mapel ENUM('Umum', 'Ilmu Pengetahuan Alam', 'Ilmu Pengetahuan Sosial');
    DECLARE cur CURSOR FOR SELECT id, tipe FROM mapel;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

    OPEN cur;

    read_loop: LOOP

        FETCH cur INTO mapel_id, tipe_mapel;
        IF done THEN
            LEAVE read_loop;
        END IF;

        IF NEW.jurusan = 'Ilmu Pengetahuan Sosial' AND tipe_mapel IN ('Umum', 'Ilmu Pengetahuan Sosial') THEN
            INSERT INTO nilai (id_murid, id_mapel, Tugas_1, Tugas_2, Tugas_3, Tugas_4, Tugas_5, UTS, UAS) VALUES (NEW.id, mapel_id, 0, 0, 0, 0, 0, 0, 0);
        ELSEIF NEW.jurusan = 'Ilmu Pengetahuan Alam' AND tipe_mapel IN ('Umum', 'Ilmu Pengetahuan Alam') THEN
            INSERT INTO nilai (id_murid, id_mapel, Tugas_1, Tugas_2, Tugas_3, Tugas_4, Tugas_5, UTS, UAS) VALUES (NEW.id, mapel_id, 0, 0, 0, 0, 0, 0, 0);
        END IF;
    END LOOP;

    CLOSE cur;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_mapel` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `Tugas_1` int(11) NOT NULL,
  `Tugas_2` int(11) NOT NULL,
  `Tugas_3` int(11) NOT NULL,
  `Tugas_4` int(11) NOT NULL,
  `Tugas_5` int(11) NOT NULL,
  `UTS` int(11) NOT NULL,
  `UAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_mapel`, `id_murid`, `Tugas_1`, `Tugas_2`, `Tugas_3`, `Tugas_4`, `Tugas_5`, `UTS`, `UAS`) VALUES
(1, 9, 0, 0, 0, 0, 0, 0, 0),
(2, 9, 0, 0, 0, 0, 0, 0, 0),
(3, 9, 0, 0, 0, 0, 0, 0, 0),
(4, 9, 0, 0, 0, 0, 0, 0, 0),
(5, 9, 0, 0, 0, 0, 0, 0, 0),
(6, 9, 0, 0, 0, 0, 0, 0, 0),
(7, 9, 0, 0, 0, 0, 0, 0, 0),
(12, 9, 0, 0, 0, 0, 0, 0, 0),
(13, 9, 0, 0, 0, 0, 0, 0, 0),
(14, 9, 0, 0, 0, 0, 0, 0, 0),
(15, 9, 0, 0, 0, 0, 0, 0, 0),
(1, 10, 0, 0, 0, 0, 0, 0, 0),
(2, 10, 0, 0, 0, 0, 0, 0, 0),
(3, 10, 0, 0, 0, 0, 0, 0, 0),
(4, 10, 0, 0, 0, 0, 0, 0, 0),
(5, 10, 0, 0, 0, 0, 0, 0, 0),
(6, 10, 0, 0, 0, 0, 0, 0, 0),
(7, 10, 0, 0, 0, 0, 0, 0, 0),
(8, 10, 0, 0, 0, 0, 0, 0, 0),
(9, 10, 0, 0, 0, 0, 0, 0, 0),
(10, 10, 0, 0, 0, 0, 0, 0, 0),
(11, 10, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengampu` (`id_pelajaran`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `murid_kelas` (`kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_murid` (`id_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `pengampu` FOREIGN KEY (`id_pelajaran`) REFERENCES `mapel` (`id`);

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_kelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `id_murid` FOREIGN KEY (`id_murid`) REFERENCES `murid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
