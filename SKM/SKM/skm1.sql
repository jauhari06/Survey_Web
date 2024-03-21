-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 09:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skm1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','superadmin') NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(5, 'Superadmin', '$2y$12$CcUZYf8SRRlxXzfLMP3oJubeBsk1GAAIvzE0EKIurCcxCL7mHENZW', 'superadmin', '2023-12-07 22:52:06', '2023-12-07 22:55:15'),
(6, 'Admin', '$2y$12$gb.AH6.zCCx0GPQDTXxkP.jvF2uCFUhy.x.lvHHI8SPMazo1j4bmm', 'admin', '2023-12-08 02:27:18', '2023-12-08 02:27:18'),
(7, 'Admin2', '$2y$12$pQoBfTGSPBLP4zu17irWD.uPzlmSZxgWfKjKWoHkJlHTV8dWSf8/e', 'admin', '2023-12-14 06:21:08', '2023-12-14 06:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` bigint(20) UNSIGNED NOT NULL,
  `id_pertanyaan` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `Tidak_Puas` int(11) NOT NULL,
  `Kurang_Puas` int(11) NOT NULL,
  `Puas` int(11) NOT NULL,
  `Cukup_Puas` int(11) NOT NULL,
  `Sangat_Puas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_pertanyaan`, `id_pengguna`, `Tidak_Puas`, `Kurang_Puas`, `Puas`, `Cukup_Puas`, `Sangat_Puas`) VALUES
(27, 0, 40, 0, 0, 0, 0, 1),
(28, 0, 41, 0, 0, 1, 0, 0),
(29, 0, 42, 0, 0, 1, 0, 0),
(30, 0, 43, 0, 1, 0, 0, 0),
(31, 0, 44, 0, 1, 0, 0, 0),
(32, 0, 45, 1, 0, 0, 0, 0),
(33, 0, 46, 1, 0, 0, 0, 0),
(34, 0, 47, 1, 0, 0, 0, 0),
(35, 0, 48, 1, 0, 0, 0, 0),
(36, 0, 49, 1, 0, 0, 0, 0),
(37, 0, 50, 0, 0, 0, 0, 0),
(38, 0, 51, 0, 0, 0, 0, 0),
(39, 0, 52, 0, 0, 0, 0, 0),
(40, 0, 53, 0, 0, 0, 0, 0),
(41, 0, 54, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggapan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `email`, `tanggapan`) VALUES
(24, 'jjh@gmail.com', 'ssdafdgffsahd'),
(25, NULL, 'adsfs'),
(26, NULL, 'adsfs'),
(27, NULL, 'fffff'),
(28, NULL, 'ggggg'),
(29, NULL, 'fffffggg'),
(30, NULL, 'gghttttt'),
(31, 'jjh@ub.ac.id', NULL),
(32, 'jjh@ub.ac.id', NULL),
(33, 'jjh@ub.ac.id', NULL),
(34, 'jjh@ub.ac.id', NULL),
(35, 'jjh@ub.ac.id', NULL),
(36, 'jjh@ub.ac.id', NULL),
(37, 'jjh@ub.ac.id', NULL),
(38, 'jjh@ub.ac.id', NULL),
(39, 'jjh@ub.ac.id', NULL),
(40, 'jjh@ub.ac.id', NULL),
(41, 'jjh@ub.ac.id', NULL),
(42, 'jjh@ub.ac.id', NULL),
(43, 'jjh@ub.ac.id', NULL),
(44, 'jjh@ub.ac.id', 'vghj'),
(45, 'jjh@ub.ac.id', 'vghj'),
(46, 'jjh@ub.ac.id', 'vghj'),
(47, 'jjh@ub.ac.id', NULL),
(48, 'jjh@ub.ac.id', NULL),
(49, 'jjh@ub.ac.id', NULL),
(50, 'jundi@ub.ac.id', NULL),
(51, 'u@ub.ac.id', NULL),
(52, 'a@ub.ac.id', NULL),
(53, 'rimapuspitasari@ub.ac.id', NULL),
(54, 'rimapuspitasari@ub.ac.id', NULL),
(55, 'a@ub.ac.id', NULL),
(56, 'a@ub.ac.id', NULL),
(57, 'a@ub.ac.id', NULL),
(58, 'h@ub.ac.id', NULL),
(59, 'a@ub.ac.id', NULL),
(60, 'A@ub.ac.id', NULL),
(61, 'A@ub.ac.id', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen` enum('Bisnis dan Hospitality','Industri Kreatif dan Digital') NOT NULL,
  `status` enum('Dosen','Mahasiswa','Tenaga Pendidik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `departemen`, `status`) VALUES
(39, 'Kolaborasi P2KM antar Dosen di dalam satu departemen atau lintas departemen', 'Bisnis dan Hospitality', 'Dosen'),
(40, 'Perhatian pimpinan terhadap pengembangan akademik dan jenjang karir', 'Bisnis dan Hospitality', 'Dosen'),
(41, 'Kecukupan sosialisasi dan pendampingan  kenaikan jabatan fungsional', 'Bisnis dan Hospitality', 'Dosen'),
(42, 'Kecukupan pelatihan mempersiapkan masa pensiun', 'Bisnis dan Hospitality', 'Dosen'),
(43, 'Layanan Kesehatan Mental', 'Bisnis dan Hospitality', 'Dosen'),
(44, 'Fasilitas Tempat Parkir', 'Bisnis dan Hospitality', 'Dosen'),
(45, 'Fasilitas Kantin', 'Bisnis dan Hospitality', 'Dosen'),
(47, 'Kesiapan memberikan kuliah dan/atau praktek/praktikum\r\n', 'Bisnis dan Hospitality', 'Mahasiswa'),
(48, 'Kemampuan menjelaskan pokok bahasan/topik secara tepat serta mampu memberi contoh relevan dari konsep yang diajarkan', 'Bisnis dan Hospitality', 'Mahasiswa'),
(49, 'Kemampuan menjelaskan keterkaitan bidang/topik yang diajarkan dengan bidang/topik lain dan dengan konteks kehidupan', 'Bisnis dan Hospitality', 'Mahasiswa'),
(50, 'Penguasaan akan isu-isu mutakhir dalam bidang yang diajarkan', 'Bisnis dan Hospitality', 'Mahasiswa'),
(51, 'Toleransi terhadap keberagaman mahasiswa', 'Bisnis dan Hospitality', 'Mahasiswa'),
(52, 'Kejelasan penyampaian materi dan jawaban terhadap pertanyaan di kelas\r\n', 'Bisnis dan Hospitality', 'Mahasiswa'),
(53, 'Keanekaragaman cara pengukuran hasil belajar', 'Bisnis dan Hospitality', 'Mahasiswa'),
(54, 'Pemberian umpan balik terhadap tugas\r\n', 'Bisnis dan Hospitality', 'Mahasiswa'),
(55, 'Kesesuaian materi ujian dan/atau tugas dengan tujuan mata kuliah', 'Bisnis dan Hospitality', 'Mahasiswa'),
(56, 'Kesesuaian nilai yang diberikan dengan hasil belajar', 'Bisnis dan Hospitality', 'Mahasiswa'),
(57, 'Atmosfer kerja sebagai Tenaga Kependidikan di FV UB', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(58, 'Secara umum, saya puas dengan aspek berikut dalam keterlibatan saya dalam kegiatan operasional di FV UB:', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(59, 'Fasilitas kerja untuk mendukung pekerjaan sebagai Tendik', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(60, 'Kesesuaian beban kerja dibandingkan dengan standar umum', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(61, 'Beban kerja dalam komite atau panitia adhoc', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(62, 'Kesempatan mengikuti pelatihan administrasi/ keahlian dalam kegiatan operasional', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(63, 'Kecukupan sosialisasi tentang Visi, Misi, Tujuan, Strategi dan Kebijakan', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(64, 'Perhatian pimpinan terhadap pengembangan karir', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(65, 'Kecukupan pelatihan mempersiapkan masa pensiun', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(66, 'Layanan Kesehatan Mental', 'Bisnis dan Hospitality', 'Tenaga Pendidik'),
(67, 'Atmosfer akademik sebagai dosen di FV UB', 'Industri Kreatif dan Digital', 'Dosen'),
(68, 'Hubungan kerja di Prodi/Departemen/Fakultas', 'Industri Kreatif dan Digital', 'Dosen'),
(69, ' Fasilitas kerja untuk mendukung pekerjaan sebagai Pengajar', 'Industri Kreatif dan Digital', 'Dosen'),
(70, 'Kesesuaian beban mengajar terhadap standar umum kependidikan', 'Industri Kreatif dan Digital', 'Dosen'),
(71, 'umlah P2KM yang ada sesuai dengan kapasitas saya', 'Industri Kreatif dan Digital', 'Dosen'),
(72, 'Dukungan sharing fasilitas / laboratorium kerja untuk P2kM', 'Industri Kreatif dan Digital', 'Dosen'),
(73, 'Beban kerja dalam komite / panitia adhoc', 'Industri Kreatif dan Digital', 'Dosen'),
(74, 'Kesempatan mengikuti pelatihan  kompetensi', 'Industri Kreatif dan Digital', 'Dosen'),
(75, 'Perhatian pimpinan terhadap pengembangan akademik dan jenjang karir', 'Industri Kreatif dan Digital', 'Dosen'),
(76, 'Kecukupan pelatihan mempersiapkan masa pensiun', 'Industri Kreatif dan Digital', 'Dosen'),
(77, 'Kesiapan memberikan kuliah dan/atau praktek/praktikum\r\n', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(78, 'Kemampuan menjelaskan pokok bahasan/topik secara tepat serta mampu memberi contoh relevan dari konsep yang diajarkan', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(79, 'Penguasaan akan isu-isu mutakhir dalam bidang yang diajarkan\r\n', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(80, 'Pelibatan mahasiswa dalam penelitian/kajian dan atau pengembangan/rekayasa/desain yang dilakukan dosen', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(81, 'Kemampuan menggunakan beragam teknologi komunikasi dan memanfaatkan media dan teknologi pembelajaran', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(82, 'Kewibawaan sebagai pribadi dosen\r\n', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(83, 'Menjadi contoh dalam bersikap dan berperilaku\r\n', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(84, 'Adil dalam memperlakukan mahasiswa\r\n', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(85, 'Mengenal dengan baik mahasiswa yang mengikuti kuliahnya\r\n', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(86, 'Mudah bergaul di kalangan sejawat, karyawan, dan mahasiswa', 'Industri Kreatif dan Digital', 'Mahasiswa'),
(87, 'Atmosfer kerja sebagai Tenaga Kependidikan di FV UB', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(88, ' Hubungan kerja di Unit Kerja', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(89, 'Kesesuaian beban kerja dibandingkan dengan standar umum', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(90, 'Fasilitas kerja untuk mendukung pekerjaan sebagai Tendik', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(91, 'Beban kerja dalam komite atau panitia adhoc', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(92, 'Kesempatan mengikuti pelatihan administrasi/ keahlian dalam kegiatan operasional', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(93, 'Perhatian pimpinan terhadap pengembangan karir', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(94, ' Kecukupan pelatihan mempersiapkan masa pensiun', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(95, 'Layanan Kesehatan Mental', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(96, 'Fasilitas Kantin', 'Industri Kreatif dan Digital', 'Tenaga Pendidik'),
(97, 'parkir', 'Bisnis dan Hospitality', 'Tenaga Pendidik');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id_survei` bigint(20) UNSIGNED NOT NULL,
  `id_pertanyaan` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jawaban` bigint(20) UNSIGNED NOT NULL,
  `waktu_survei` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `waktu_survei`
--

CREATE TABLE `waktu_survei` (
  `id_waktu_survei` bigint(20) UNSIGNED NOT NULL,
  `id_survei` bigint(20) UNSIGNED NOT NULL,
  `waktu_mulai` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_berakhir` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`,`id_pengguna`,`id_jawaban`),
  ADD KEY `id_jawaban` (`id_jawaban`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `waktu_survei`
--
ALTER TABLE `waktu_survei`
  ADD PRIMARY KEY (`id_waktu_survei`),
  ADD KEY `id_survei` (`id_survei`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `waktu_survei`
--
ALTER TABLE `waktu_survei`
  MODIFY `id_waktu_survei` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survei`
--
ALTER TABLE `survei`
  ADD CONSTRAINT `survei_ibfk_1` FOREIGN KEY (`id_jawaban`) REFERENCES `jawaban` (`id_jawaban`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `survei_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `survei_ibfk_3` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `waktu_survei`
--
ALTER TABLE `waktu_survei`
  ADD CONSTRAINT `waktu_survei_ibfk_1` FOREIGN KEY (`id_survei`) REFERENCES `survei` (`id_survei`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
