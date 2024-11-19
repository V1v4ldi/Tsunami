-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2024 pada 22.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
('Adm-0001', 'Rikza', 'rikza12345@gmail.com', '123123123');

--
-- Trigger `admin`
--
DELIMITER $$
CREATE TRIGGER `id_admin` BEFORE INSERT ON `admin` FOR EACH ROW BEGIN
    DECLARE max_id INT;
    DECLARE new_id VARCHAR(50);

    -- Ambil nilai maksimum dari angka di ID yang ada
    SELECT IFNULL(MAX(CAST(SUBSTRING(id, 5) AS UNSIGNED)), 0) INTO max_id FROM admin;

    -- Tambahkan 1 ke nilai maksimum untuk ID baru
    SET new_id = CONCAT('Adm-', LPAD(max_id + 1, 4, '0'));

    -- Set ID baru ke kolom id
    SET NEW.id = new_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hilang`
--

CREATE TABLE `hilang` (
  `id_hilang` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hubungi` varchar(15) NOT NULL,
  `lok-hilang` varchar(100) NOT NULL,
  `status` enum('Hilang','Ditemukan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `hilang`
--

INSERT INTO `hilang` (`id_hilang`, `nama`, `img_path`, `jk`, `alamat`, `hubungi`, `lok-hilang`, `status`) VALUES
('Krb-0001', 'Henry Alfred Kissinger', 'PrvImg/kissinger.jpg', 'Laki - Laki', 'Kentucky', '08123212', 'Garut', 'Hilang'),
('Krb-0002', 'Minatozaki Sana', 'PrvImg/Sana.jpg', 'Perempuan', 'Osaka', '9102124', 'Miami', 'Ditemukan');

--
-- Trigger `hilang`
--
DELIMITER $$
CREATE TRIGGER `idhilang` BEFORE INSERT ON `hilang` FOR EACH ROW BEGIN
    DECLARE max_id INT;
    DECLARE new_id VARCHAR(50);

    -- Ambil nilai maksimum dari angka di ID yang ada
    SELECT IFNULL(MAX(CAST(SUBSTRING(id_hilang, 5) AS UNSIGNED)), 0) INTO max_id FROM hilang;

    -- Tambahkan 1 ke nilai maksimum untuk ID baru
    SET new_id = CONCAT('Krb-', LPAD(max_id + 1, 4, '0'));

    -- Set ID baru ke kolom id_hilang
    SET NEW.id_hilang = new_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `Sumber` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `waktu` time DEFAULT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `magnitudo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `Sumber`, `Tanggal`, `waktu`, `latitude`, `longitude`, `magnitudo`) VALUES
(1, 'Banggai, Sulawesi', '2000-05-04', '03:21:00', '-1.105', '123.573', 7.6),
(2, 'Mindanao, Filipina', '2002-03-05', '00:00:00', '6.07', '126.340', 7.2),
(3, 'Irian Jaya', '2002-10-10', '10:50:00', '-1.757', '134.297', 7.6),
(4, 'P. Seram', '2001-01-28', '22:15:00', '-3.120', '127.400', 6.7),
(5, 'Kepulauan Alor', '2004-11-11', '21:26:00', '-8.152', '124.868', 7.5),
(6, 'Barat Daya Banda Aceh, Meghatrust Sumate', '2004-12-26', '07:58:00', '3.295', '95.982', 9),
(7, 'Utara P. Nias, Megathrust Sumatera', '2005-03-28', '16:09:00', '2.085', '97.108', 8.7),
(8, 'Kepulauan Mentawai', '2005-04-10', '10:10:00', '-1.644', '99.607', 6.7),
(9, 'Kepulauan Nikobar', '2005-07-24', '00:00:00', '7.9', '92.1', 7.2),
(10, 'P. Seram', '2006-03-14', '06:57:00', '-3.595', '127.214', 6.7),
(11, 'Pengandaran Jawa', '2006-07-17', '08:19:00', '-9.254', '107.411', 7.7),
(12, 'Bengkulu, Sumatera', '2007-09-12', '11:10:00', '-4.438', '101.367', 8.4),
(13, 'Painan, Sumatera Barat', '2008-02-25', '08:08:00', '-2.486', '99.972', 6.5),
(14, 'Sulawesi Utara', '2008-11-16', '17:02:00', '1.271', '122.091', 7.3),
(15, 'Manokrawi, Irian Jaya', '2009-01-03', '00:00:00', '-0.3', '132.8', 0),
(16, 'Mentawai, Sumatera', '2009-08-16', '07:38:00', '-1.525', '99.378', 6.8),
(17, 'Sendai, Jepang', '2011-03-11', '05:46:00', '38.32', '142.37', 9),
(18, '500 km barat daya Aceh', '2012-04-11', '08:38:00', '2.34', '93.04', 8.4),
(19, '500 km barat daya Aceh', '2012-04-11', '10:43:00', '0.82', '92.42', 8.2),
(20, 'Laut Maluku', '2014-11-15', '02:31:00', '1.95', '126.49', 7.3),
(21, 'Barat Daya Sumatera', '2016-03-02', '12:49:00', '-4.96', '94.36', 7.8),
(22, 'Tasikmalaya, Selatan Jawa Barat', '2009-09-02', '00:00:00', '-8.240', '107.320', 7.6),
(23, 'Padang Sumatera Barat', '2009-09-30', '10:16:00', '-0.778', '99.719', 7.7),
(24, 'Sumatera, Indonesia', '2010-04-07', '22:15:00', '2.33', '97.02', 7.2),
(25, 'Meulaboh, NAD', '2010-05-09', '05:59:00', '3.61', '95.84', 7.2),
(26, 'Mentawai, Sumatera Barat', '2010-10-25', '14:42:00', '-3.57', '99.93', 7.7),
(27, 'Lombok Utara, NTB', '2018-08-05', '10:46:00', '-8.37', '116.48', 7),
(28, 'Donggala, Sulawesi Tengah', '2018-09-26', '10:02:00', '-0.177', '119.821', 7.4),
(35, 'Kec. Sinden', '2024-11-08', '12:54:00', '-7.995', '110.23', 8.4),
(36, 'Laut Bali', '2024-11-15', '09:15:00', '-8.46', '114.94', 8.1),
(37, 'Rekasan', '2024-11-15', '01:54:00', '-8.2865', '113.1134', 7.5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hilang`
--
ALTER TABLE `hilang`
  ADD PRIMARY KEY (`id_hilang`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
