-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Jun 08, 2024 at 08:16 AM
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
-- Database: `tk_mutiara1`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `kategori_id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 'komedi putar', 'bebededadaedadeadea', 'fHMDCOisZtL1a1YijjTkdbwVKcTYWv5AWBey9SoJ.jpg', '2024-05-23 03:50:11', '2024-06-02 13:01:07'),
(2, 1, 'baju muek', 'eeeeeeeeeeeeeeeeeeeeeeeeee', 'rIxAP1uzfJhf7Nh4BqM75m8qqgBokzZFA5c6WtKw.jpg', '2024-05-30 02:54:20', '2024-05-30 02:55:16'),
(3, 2, 'baju muek', 'wwwwwwwwwwww', '72Y2qVIxhJDPoK8vcLU8yex6FTfsKHFaoO3y1OqV.jpg', '2024-05-30 02:54:48', '2024-05-30 02:54:48'),
(4, 1, 'Nicholas', 'wwwwwwwwwwwwwwww', 'Z3OM1KEFvqC2qQphgBMGee11vPXDtjkARN9uTQKZ.jpg', '2024-05-30 08:41:36', '2024-06-05 16:48:49'),
(5, 1, 'Nicholaswq', 'wwww', 'OJnL0th4CZbqqQq0EqySUu6wrQ8g4a1YXfC9lpsD.jpg', '2024-05-30 08:51:54', '2024-06-05 16:48:58'),
(6, 3, 'Nicholaswq', '3eeeeeeeeeeeee', 'eLgZnmQ9NA4KR7EYeMoKU4zuUBZ1dzVcALXNBmAQ.jpg', '2024-05-30 12:26:48', '2024-05-30 12:26:48'),
(7, 2, 'Nicholaswq', 'wwwwwwwwwwww', 'q5X8Tb5WFIA3X4114oJHseZskbyHqzW0E45HoKeg.jpg', '2024-05-30 12:29:06', '2024-05-30 12:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `content`, `url`, `created_at`, `updated_at`) VALUES
(2, 'AwR72oTYHpEzXsmd51DsscyYmJzI9BeQiK7aK9vw.jpg', 'trpl menang lagiidw', 'wkwkwkwkwk', 'https://www.facebook.com/share/v/5NzT8J5f6S8PcBUB/?mibextid=oFDknk', '2024-05-25 14:17:19', '2024-05-31 04:32:21'),
(3, 'oONTuXZhQiGkZrMaVDLTBXjWLkpY11j0HzUOV2mF.jpg', 'trpl menang lagiided', 'Berperan dalam Membangun Kualitas Bangsa yang Unggul dengan konsep 3M ( Martuhan, Marroha, Marbisuk)', 'https://claude.ai/chat/90cd3a94-7598-4684-9d75-1a2967dfe797', '2024-05-25 14:19:26', '2024-05-25 14:19:26'),
(4, 'e39so5akCFUTGSqUSgAJLMxvi8fSw5XInySwsdov.jpg', 'trpl menang lagiided', 'dddddddddddddddddddddddd', 'https://claude.ai/chat/90cd3a94-7598-4684-9d75-1a2967dfe797', '2024-05-25 14:25:03', '2024-05-25 14:25:03'),
(7, 'beXnJDrZnvPSlQUwVQCumQnDGi3h2f4XcCeeLYhc.jpg', 'trpl menang lagiided', 'wwwwwwwwwwwwwww', 'https://claude.ai/chat/90cd3a94-7598-4684-9d75-1a2967dfe797', '2024-06-05 08:39:27', '2024-06-05 08:39:27'),
(8, '1vvleh1QWzK7SbI4ZgSKqqLVe5wUeVUXrrrynuiO.jpg', 'trpl menang lagiided', 'wwwwwwwwwwww', 'https://claude.ai/chat/90cd3a94-7598-4684-9d75-1a2967dfe797', '2024-06-05 08:47:30', '2024-06-05 08:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `image`, `name`, `alamat`, `no_telp`, `jeniskelamin`, `created_at`, `updated_at`) VALUES
(1, 'Picture1.jpg', 'RISMA SIAHAAN, S.Pd', 'Balige', '086745678923', 'perempuan', '2024-05-23 02:42:32', '2024-06-08 04:20:05'),
(2, 'k9hhBXktlr9xu3YJECVx8Zo4JbuEEqgzFZKjRxcr.jpg', 'HERNI SIPAHUTAR, S.Pd', 'Balige', '086745678923', 'perempuan', '2024-05-23 03:10:57', '2024-05-23 03:10:57'),
(3, 'tw1euMzuMAfiliekdUKq1KD7w5KNGng1XO3Ad6vs.jpg', 'FRISKA DANIATI BAKARA, S.Pd', 'Balige', '086745678923', 'perempuan', '2024-05-23 03:22:12', '2024-05-23 03:27:14'),
(4, 'c8BNCg2OiM3GX9bcdSiKYiXRCf8dCwpX3gvjSLpH.jpg', 'DERMAWAN SIPAHUTAR, S.Pd', 'Balige', '086745678923', 'perempuan', '2024-05-23 03:22:34', '2024-05-23 03:27:22'),
(5, '2JHiAcBitbvaQXJoGkYjuwBbGprkz5BK7ZAUaq8B.jpg', 'NORITA SIRAIT', 'Balige', '086745678923', 'perempuan', '2024-05-23 03:22:54', '2024-05-23 03:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `namaTk` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_siswas`
--

CREATE TABLE `jumlah_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelasA` int(11) NOT NULL,
  `kelasB` int(11) NOT NULL,
  `kelasC` int(11) NOT NULL,
  `kelasD` int(11) NOT NULL,
  `kelasE` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_siswas`
--

INSERT INTO `jumlah_siswas` (`id`, `kelasA`, `kelasB`, `kelasC`, `kelasD`, `kelasE`, `created_at`, `updated_at`) VALUES
(18, 30, 35, 33, 38, 38, '2024-06-05 07:47:22', '2024-06-05 07:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'kelas', '2024-05-23 03:39:45', '2024-05-23 03:39:45'),
(2, 'sekolah', '2024-05-23 03:39:56', '2024-05-23 03:39:56'),
(3, 'Taman Bermain', '2024-05-23 03:40:02', '2024-05-23 03:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_31_192844_create_headers_table', 1),
(6, '2024_05_01_162136_create_gallery_table', 1),
(7, '2024_05_02_152501_create_prestasis_table', 1),
(8, '2024_05_05_155344_create_gurus_table', 1),
(9, '2024_05_05_222315_create_kategoris_table', 1),
(10, '2024_05_05_222548_create_fasilitas_table', 1),
(11, '2024_05_07_095111_create_pengumumen_table', 1),
(12, '2024_05_29_210008_create_jumlah_siswas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `title`, `content`, `file`, `created_at`, `updated_at`) VALUES
(1, 'penerimaan Murid Baru', 'Ayo Daftarkan anak anda ke Tk Mutiara Balige.Dijamin anak lancar baca tulis tanpa mengeja.\r\nAda extra kurikuler menari dan bermain musik serta bahasa inggris.\r\nHub:085275144266', 'higKQIvYe1WWp8JM0po6NQ9ANMWR8iYXMUlNFNB4.jpg', '2024-05-23 04:17:40', '2024-06-06 02:02:35'),
(5, 'Penerimaan Les Tambahan', 'Telah dibuka les tambahan calistung (Baca tulis berhitung) untuk umum.Tempat di TK Mutiara Balige\r\njadwal senin,selasa,rabu pada waktu pukul 11.30-13.00,\r\npukul 13.00-14.30\r\npukul 15.00-16.30\r\nBiaya RP.150.000,00/bullan\r\nAyo daftarkan Anak anda Sekarang juga Hubungi 085275142266', 'oZFgkCqVwDGZHA8ywwC25yTVBmu1qh4wzR0R7pcP.jpg', '2024-06-06 02:18:40', '2024-06-06 02:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` text DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `image`, `title`, `content`, `url`, `date`, `created_at`, `updated_at`) VALUES
(2, 'fdgzkUCdSURrLmLahsZdhwG6xhrfOcr0bloQjOJZ.jpg', 'juara 1  lomba Menari festival TK/Paud Toba 2023', 'juara 1  lomba Menari festival TK/Paud Toba 2023', 'https://www.facebook.com/share/r/6Ws9XMm7iALosGTg/?mibextid=oFDknk', '2023-11-10', '2024-05-28 02:15:57', '2024-06-06 02:28:41'),
(3, 'aCWOteOUmvVgxiDxurhzltk5FQ5c5gHh04dvUjFx.jpg', 'Juara 1 Lomba Fashion Show 2023', 'Juara 1 Lomba Fashion Show 2023', 'https://www.facebook.com/share/r/HnAnLZWeYouACMdb/?mibextid=oFDknk', '2023-08-20', '2024-06-01 14:04:57', '2024-06-06 02:47:10'),
(5, 'F7oMnTNOdxoprUdLumVRhQ0wGEzexre8595dgbkB.jpg', 'Juara 1 Lomba Menyanyi Tingkat TK kabupaten Toba', 'Juara 1 Lomba Menyanyi Tingkat TK kabupaten Toba', NULL, '2023-08-17', '2024-06-05 08:07:04', '2024-06-06 03:15:23'),
(6, 'aIfOkT374dThGPXil88kwKiAnrGKmZ7NRgsCv1Mo.jpg', 'Juara 1 Lomba Bernyayi', 'Dalam Rangka memeriahkn HUT RI ke -76 ,TK Mutiara mengadakan beberapa pertandingan seperti lommba bernyanyi.\r\nJuara I : RENTA NAULI SIMANJUNTAK (TK B Kelas Melati)', 'https://www.facebook.com/share/p/giBWELawBGdLGFD9/?mibextid=xfxF2i', '2021-09-27', '2024-06-06 02:08:21', '2024-06-06 02:08:21'),
(7, 'KEEocyBPKcXLJ2jmsEWdEURsMFs87SeVAlqm48rz.jpg', 'Juara 2 Lomba Bernyanyi', 'Dalam Rangka memeriahkn HUT RI ke -76 ,TK Mutiara mengadakan beberapa pertandingan seperti lommba bernyanyi.\r\nJuara II : PATIARAJA MARTOGI NAPITUPULU (TK B Kelas Melati)', 'https://www.facebook.com/share/p/giBWELawBGdLGFD9/?mibextid=xfxF2i', '2021-09-27', '2024-06-06 02:09:16', '2024-06-06 02:09:16'),
(8, 'WF0BtJIjfuhibmb9aFtZpxJfqHJXDyPZQMTqFtoE.jpg', 'Juara 3 Lomba Bernyanyi', 'Dalam Rangka memeriahkn HUT RI ke -76 ,TK Mutiara mengadakan beberapa pertandingan seperti lommba bernyanyi.\r\nJuara III : MARTIN SAN TOBIAS SIAHAAN (TK A).', 'https://claude.ai/chat/90cd3a94-7598-4684-9d75-1a2967dfe797', '2021-09-27', '2024-06-06 02:10:04', '2024-06-06 02:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `noTelepon` varchar(255) NOT NULL,
  `jenisKelamin` enum('laki-laki','perempuan') NOT NULL DEFAULT 'laki-laki',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `alamat`, `noTelepon`, `jenisKelamin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nicholas', '$2a$12$46mX8HaGS8NJXyuSdglZmOXaDYloN2UXLQGRjL9oW9IwF2IUJ57Oa', 'balige', '085260617452', 'laki-laki', NULL, NULL, NULL),
(5, 'daniel', '$2y$10$qU6UjlXbK4K6jVMepCVY0uOabPPiP7a7RhqHKC5vb3f4dxRJV74me', 'balige', '081263167246', 'laki-laki', NULL, '2024-06-08 06:15:04', '2024-06-08 06:15:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `headers_slug_unique` (`slug`);

--
-- Indexes for table `jumlah_siswas`
--
ALTER TABLE `jumlah_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_notelepon_unique` (`noTelepon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jumlah_siswas`
--
ALTER TABLE `jumlah_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
