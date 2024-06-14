-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Jun 14, 2024 at 04:53 AM
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
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade` varchar(255) NOT NULL,
  `pihak` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `nilai_isi` int(11) NOT NULL,
  `nilai_kelulusan` int(11) NOT NULL,
  `nilai_proses` int(11) NOT NULL,
  `nilai_pendidikan` int(11) NOT NULL,
  `nilai_prasarana` int(11) NOT NULL,
  `nilai_pengelola` int(11) NOT NULL,
  `nilai_pembiayaan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id`, `grade`, `pihak`, `date`, `nilai_isi`, `nilai_kelulusan`, `nilai_proses`, `nilai_pendidikan`, `nilai_prasarana`, `nilai_pengelola`, `nilai_pembiayaan`, `total`, `created_at`, `updated_at`) VALUES
(1, 'B', 'BAN-S/M (Badan Akreditasi Nasional) Sekolah Nasional', '2018-01-01', 121, 100, 81, 48, 96, 113, 40, 599, '2024-06-12 07:33:21', '2024-06-12 07:33:21');

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
(1, 1, 'Papan Absensi', 'Papan absensi di ruang kelas memiliki berbagai kegunaan penting. Alat ini memudahkan guru untuk memantau kehadiran siswa setiap hari, memastikan semua siswa hadir dan mengetahui siapa yang tidak hadir. Selain itu, papan absensi membantu dalam mengelola kelas dengan lebih baik, memungkinkan guru menyesuaikan kegiatan belajar mengajar berdasarkan jumlah siswa yang hadir. Papan ini juga menyediakan data kehadiran yang diperlukan untuk laporan administratif dan evaluasi, membantu dalam melacak pola kehadiran siswa serta memberikan informasi yang relevan untuk intervensi jika diperlukan. Secara keseluruhan, papan absensi berkontribusi pada efisiensi dan efektivitas pengelolaan kelas.', 'papan absen.jpg', '2024-06-12 07:22:46', '2024-06-12 07:22:46'),
(2, 1, 'Papan Tulis', 'Fasilitas papan tulis memiliki peran yang sangat penting dalam berbagai konteks, terutama dalam pembelajaran dan komunikasi. Dalam kelas, guru menggunakan papan tulis untuk menjelaskan konsep-konsep, memvisualisasikan ide, dan berinteraksi langsung dengan murid. Sementara itu, peserta rapat atau presentasi bisnis menggunakan papan tulis untuk mencatat informasi penting, memvisualisasikan data, dan berkolaborasi dalam menyelesaikan masalah atau merencanakan proyek. Dengan kemampuannya dalam menyediakan platform untuk kolaborasi, visualisasi, dan evaluasi langsung, fasilitas papan tulis menjadi alat yang tak tergantikan dalam mendukung proses pembelajaran dan komunikasi efektif.', 'papan tulis.jpg', '2024-06-12 07:23:10', '2024-06-12 07:23:10'),
(3, 1, 'Lemari Penyimpanan', 'Lemari dalam ruangan kelas memiliki peran yang sangat penting dalam menjaga kerapihan dan keteraturan ruangan, serta menyediakan tempat untuk penyimpanan berbagai barang yang diperlukan dalam proses pembelajaran. Dengan lemari, guru dapat dengan mudah menyimpan dan mengatur buku teks, materi pembelajaran, alat tulis, dan perlengkapan lainnya sehingga dapat diakses dengan cepat saat diperlukan. Selain itu, lemari juga berfungsi sebagai tempat aman untuk menyimpan barang-barang berharga seperti perangkat elektronik dan perlengkapan sekolah yang harus dijaga keamanannya. Dengan demikian, keberadaan lemari tidak hanya membantu menciptakan lingkungan belajar yang teratur dan nyaman, tetapi juga membantu dalam menjaga keamanan dan kebersihan ruangan kelas.', 'WhatsApp Image 2024-06-08 at 20.09.10_7913e709.jpg', '2024-06-12 07:23:39', '2024-06-12 07:23:39'),
(4, 1, 'Pengeras Suara', 'Pengeras suara merupakan salah satu fasilitas penting dalam ruang kelas yang membantu guru untuk berkomunikasi dengan murid secara efektif. Dengan bantuan pengeras suara, guru dapat memastikan bahwa suara mereka terdengar dengan jelas oleh semua murid di ruangan tanpa harus berteriak. Hal ini sangat membantu terutama dalam situasi di mana ruangan kelas besar atau ketika anak-anak sedang bermain dengan antusias. Selain itu, pengeras suara juga digunakan untuk memutar lagu-lagu atau cerita-cerita yang mendukung aktivitas belajar, membantu menciptakan atmosfer yang menyenangkan dan merangsang minat anak-anak. Dengan demikian, pengeras suara tidak hanya memfasilitasi komunikasi yang efektif antara guru dan murid, tetapi juga dapat meningkatkan pengalaman belajar anak-anak di TK dengan cara yang menyenangkan.', 'WhatsApp Image 2024-06-08 at 20.09.08_a84a44e1.jpg', '2024-06-12 07:24:09', '2024-06-12 07:24:09'),
(5, 1, 'Loker Penyimpanan', 'Loker penyimpanan adalah tempat yang penting dalam ruang kelas karena membantu anak-anak TK untuk mengatur dan menyimpan barang-barang mereka dengan rapi dan aman. Di dalam loker, anak-anak dapat menyimpan tas sekolah, jas hujan, dan perlengkapan lainnya agar tidak berserakan di sekitar ruangan. Ini membantu menciptakan lingkungan yang teratur dan nyaman, sehingga anak-anak dapat dengan mudah menemukan barang-barang mereka saat dibutuhkan. Selain itu, loker juga mengajarkan anak-anak tentang tanggung jawab dalam merawat barang pribadi mereka sendiri. Melalui penggunaan loker, anak-anak belajar untuk mandiri dan merasa bangga atas kemampuan mereka untuk merawat dan mengatur barang-barang mereka sendiri. Ini adalah bagian penting dari pembelajaran pengembangan keterampilan hidup yang dilakukan di TK. Dengan demikian, loker penyimpanan tidak hanya membantu menjaga kebersihan dan kerapihan ruangan kelas, tetapi juga memfasilitasi pembelajaran tanggung jawab dan kemandirian anak-anak sejak usia dini.', 'loker2.jpg', '2024-06-12 07:24:43', '2024-06-12 07:25:26'),
(6, 1, 'Meja dan Bangku', 'Meja dan bangku fasilitas kelas merupakan perabotan utama yang digunakan dalam lingkungan pendidikan, seperti sekolah dan universitas. Meja kelas umumnya memiliki desain sederhana dan fungsional dengan permukaan datar yang luas untuk menulis serta ukuran yang cukup untuk satu atau dua siswa. Meja biasanya terbuat dari kayu atau papan partikel dengan kerangka logam untuk kekuatan dan stabilitas, dan kadang-kadang dilengkapi dengan laci atau kompartemen penyimpanan. Bangku kelas dirancang dengan ergonomis untuk memberikan kenyamanan saat duduk dalam waktu yang lama, seringkali memiliki sandaran dan kadang dilengkapi bantalan. Bahan yang digunakan biasanya kayu atau plastik untuk dudukan dan sandaran, serta logam untuk kaki dan kerangka. Desain yang baik dari meja dan bangku ini membantu siswa tetap nyaman dan fokus selama pelajaran, serta memastikan durabilitas untuk penggunaan jangka panjang dalam lingkungan kelas.', 'WhatsApp Image 2024-06-08 at 20.10.10_4f2b6805.jpg', '2024-06-12 07:31:06', '2024-06-12 07:31:06'),
(7, 2, 'Ayunan', 'Fasilitas ayunan merupakan salah satu elemen yang sangat dinanti oleh anak-anak TK di lingkungan sekolah mereka. Dalam lingkungan yang penuh warna dan riang, ayunan menjadi salah satu tempat favorit bagi mereka untuk bermain dan bersosialisasi. Ayunan memberikan pengalaman menyenangkan yang tidak hanya menghibur, tetapi juga membangun keterampilan motorik dan koordinasi anak-anak. Dengan suasana yang terbuka dan menyenangkan, ayunan menjadi tempat di mana anak-anak dapat berekspresi secara bebas dan merasakan kebebasan gerak yang membantu dalam perkembangan fisik mereka. Lebih dari itu, ayunan juga menciptakan kesempatan untuk belajar berbagi dan berinteraksi dengan teman sebaya, memperkuat hubungan sosial di antara mereka. Dengan demikian, fasilitas ayunan tidak hanya menjadi tempat untuk bermain, tetapi juga menjadi salah satu aspek penting dalam pengalaman belajar dan pertumbuhan anak-anak di TK.', 'ayunan.jpg', '2024-06-12 07:31:43', '2024-06-12 07:31:43'),
(8, 2, 'Menara Bergulir', 'Menara bergulir adalah salah satu fasilitas yang sangat menarik dan bermanfaat dalam ruang kelas TK. Biasanya terbuat dari bahan kayu atau plastik yang aman bagi anak-anak, menara bergulir memiliki berbagai warna cerah dan gambar-gambar menarik yang menarik perhatian anak-anak. Menara ini dirancang dengan bentuk yang memungkinkan anak-anak untuk meletakkan berbagai macam mainan, buku kecil, atau benda-benda lainnya di dalamnya. Dengan cara yang menyenangkan, anak-anak dapat menggulirkan menara ini di sekitar ruang kelas, memilih mainan atau buku yang ingin mereka gunakan. Selain itu, menara bergulir juga bisa menjadi alat yang efektif dalam mengajarkan konsep-konsep seperti pengurutan, klasifikasi, dan pengembangan keterampilan motorik halus. Dengan kemampuannya untuk menggabungkan unsur permainan dan pembelajaran, menara bergulir menjadi salah satu fasilitas yang sangat berharga dalam membantu anak-anak TK untuk belajar dan tumbuh secara aktif dan kreatif.', 'bermain2.jpg', '2024-06-12 08:30:58', '2024-06-12 08:30:58'),
(9, 2, 'Ayunan Bergulir', 'Fasilitas ayunan bergulir merupakan salah satu permainan yang sangat populer di lingkungan TK, yang memberikan pengalaman belajar dan bermain yang menyenangkan bagi anak-anak. Ayunan bergulir terdiri dari bangku atau kursi yang terhubung dengan rantai atau tali yang memungkinkan mereka untuk bergoyang maju-mundur atau dari samping ke samping. Fasilitas ini tidak hanya memberikan kesempatan bagi anak-anak untuk bermain dan bersenang-senang, tetapi juga membantu dalam pengembangan keterampilan motorik kasar mereka. Melalui ayunan bergulir, anak-anak belajar untuk mengatur keseimbangan tubuh mereka sambil menikmati sensasi berayun yang menyenangkan. Selain itu, fasilitas ini juga memfasilitasi interaksi sosial antara anak-anak, karena mereka dapat berbagi pengalaman bermain dan bekerja sama dalam menikmati permainan. Dengan demikian, ayunan bergulir tidak hanya menjadi bagian dari lingkungan bermain yang menyenangkan di TK, tetapi juga menyediakan kesempatan bagi anak-anak untuk belajar dan berkembang secara fisik, emosional, dan sosial.', 'bermain3.jpg', '2024-06-12 08:31:23', '2024-06-12 08:31:23'),
(10, 2, 'Panjatan Bergulir', 'Fasilitas panjatan bergulir dalam taman kanak-kanak (TK) adalah area bermain yang dirancang khusus untuk merangsang aktivitas fisik dan pengembangan motorik kasar anak-anak usia dini. Dalam fasilitas ini, terdapat berbagai jenis struktur yang memungkinkan anak-anak untuk merayap, naik, dan meluncur dengan aman. Biasanya, terdapat tangga-tangga rendah, jembatan gantung, dan terowongan yang dirancang sesuai dengan tingkat keamanan dan keterampilan motorik anak-anak. Fasilitas ini tidak hanya menyediakan kesempatan bagi anak-anak untuk bergerak secara bebas dan bereksplorasi, tetapi juga mendorong mereka untuk berkolaborasi dan berinteraksi dengan teman sebaya. Dengan adanya panjatan bergulir, anak-anak dapat mengembangkan kepercayaan diri, keterampilan koordinasi, dan kekuatan fisik mereka sambil memiliki waktu yang menyenangkan di luar ruangan. Selain itu, fasilitas ini juga mendukung perkembangan sosial-emosional anak-anak dengan memberikan kesempatan untuk belajar berbagi, berkomunikasi, dan bekerja sama dalam situasi bermain yang terstruktur. Dengan demikian, fasilitas panjatan bergulir tidak hanya menjadi sarana bermain, tetapi juga alat penting dalam mendukung perkembangan holistik anak-anak di TK.', 'bermain4.jpg', '2024-06-12 08:31:58', '2024-06-12 08:31:58'),
(11, 2, 'Panjatan', 'Fasilitas panjat kubus dalam TK adalah sebuah struktur yang menarik, terdiri dari rangka berbentuk kubus besar yang terbuat dari pipa-pipa berwarna cerah seperti merah, biru, kuning, dan hijau. Anak-anak dapat merasakan kegembiraan dan tantangan saat mereka memanjat, menggelayut, atau merayap di antara pipa-pipa tersebut. Aktivitas ini tidak hanya menyenangkan, tetapi juga membantu dalam pengembangan kekuatan fisik, koordinasi, dan keterampilan motorik mereka. Dengan bermain di fasilitas ini, anak-anak belajar untuk mengatur gerakan tubuh mereka dengan baik sambil menjelajahi ruang secara aman. Permainan ini membangun kepercayaan diri anak-anak ketika mereka berhasil mengatasi rintangan dan mencapai tujuan mereka. Dengan warna-warna cerah dan desain yang menarik, panjatan kubus menjadi salah satu permainan favorit anak-anak di TK, memberikan pengalaman bermain yang menyenangkan dan mendidik.', 'bermain5.jpg', '2024-06-12 08:32:26', '2024-06-12 08:32:26'),
(12, 2, 'Ayunan Piknik', 'Ayunan Piknik memiliki desain unik yang memungkinkan beberapa anak duduk bersama dalam formasi panjang menghadap satu sama lain, mirip dengan konsep tempat duduk piknik. Diletakkan di atas permukaan berubin, ayunan ini menawarkan tempat bermain yang aman dan menyenangkan di lingkungan terbuka, dikelilingi oleh pagar pelindung. Di latar belakang, terlihat beberapa kendaraan dan bangunan, menunjukkan bahwa area bermain ini mungkin terletak di halaman sekolah atau taman komunitas. Ayunan seperti ini tidak hanya berfungsi sebagai sarana hiburan, tetapi juga mendorong interaksi sosial dan kebersamaan di antara anak-anak.', 'bermain6.jpg', '2024-06-12 08:33:10', '2024-06-12 08:33:10'),
(13, 2, 'Ayunan Keranjang', 'Ini adalah ayunan keranjang yang seru banget! Bentuknya seperti keranjang atau sangkar yang besar, jadi kita bisa duduk di dalamnya dengan nyaman. Warna-warni cerah seperti biru, merah, hijau, dan kuning membuatnya terlihat menarik. Ayunan ini bisa bergerak maju mundur dengan lembut, jadi kita bisa merasakan sensasi ayunan yang menyenangkan. Ayunan keranjang ini sering ada di taman bermain atau sekolah, tempat kita bisa bermain bersama teman-teman. Yuk, main ayunan keranjang dan rasakan keseruannya!', 'bermain7.jpg', '2024-06-12 08:33:34', '2024-06-12 08:33:34'),
(14, 2, 'Perosotan', 'Perosotan lurus adalah mainan yang seru di taman bermain atau sekolah. Bentuknya panjang dan lurus, jadi kita bisa meluncur cepat dari atas sampai bawah. Untuk naik ke atas, ada tangga dengan pegangan supaya kita aman dan tidak jatuh. Setelah sampai di atas, kita bisa duduk dan meluncur turun dengan cepat, rasanya seperti terbang! Biasanya perosotan ini berwarna-warni dan cerah, jadi kelihatan menarik dan menyenangkan. Semua anak suka main di perosotan lurus karena gampang dipakai dan sangat menyenangkan!', 'WhatsApp Image 2024-06-08 at 11.55.58_bde1a9bc.jpg', '2024-06-12 08:34:09', '2024-06-12 08:34:09'),
(15, 2, 'Perosotan Putar', 'Perosotan putar adalah mainan yang sangat menyenangkan di taman bermain atau sekolah. Bentuknya seperti spiral, jadi kita bisa meluncur sambil berputar-putar dari atas sampai bawah. Untuk naik ke atas, ada tangga dengan pegangan tangan supaya kita aman dan tidak jatuh. Saat kita meluncur turun, rasanya seperti berputar di dalam terowongan yang seru! Biasanya, perosotan putar ini berwarna-warni dan cerah, membuatnya terlihat menarik dan menyenangkan. Anak-anak suka main di perosotan putar karena sensasi meluncur yang berbeda dan sangat mengasyikkan!', 'bermain8.jpg', '2024-06-12 08:34:54', '2024-06-12 08:34:54'),
(16, 2, 'Mainan panjat-panjatan Pelangi', 'Ini adalah mainan panjat-panjatan yang seru banget! Bentuknya seperti jembatan melengkung dan berwarna-warni, jadi kita bisa memanjat dari satu sisi ke sisi lainnya. Mainan ini membantu kita jadi kuat dan seimbang sambil bermain. Kita bisa berimajinasi seolah-olah sedang mendaki gunung atau menyeberangi jembatan ajaib. Mainan panjat-panjatan ini sering ada di taman bermain atau sekolah, tempat kita bisa bermain dan berpetualang bersama teman-teman. Yuk, kita panjat dan rasakan keseruannya!', 'panjatan pelangi.jpg', '2024-06-12 08:36:26', '2024-06-12 08:36:26');

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
(1, 'foto1.jpg', 'Pelaksanaan Pentas Seni TK Mutiara', 'Pentas Seni dalam Melatih bakat dan minat.', 'https://www.facebook.com/share/p/8zsuwsc27Grz4yNz/?mibextid=xfxF2i', '2024-06-12 08:23:14', '2024-06-12 08:23:14'),
(2, 'WhatsApp Image 2024-06-12 at 08.35.16_5d5aacc8.jpg', 'Perayaan Natal Tk Mutiara', 'Perayaan Natal melatih keberanian untuk tampil.', 'https://www.facebook.com/share/p/yWYWub1ooF3T7pzE/?mibextid=xfxF2i', '2024-06-12 08:23:44', '2024-06-12 08:23:44'),
(3, 'WhatsApp Image 2024-06-12 at 08.39.03_2b3de1b2.jpg', 'Senam Pagi Dengan Siswa Siswi TK Mutiara', 'Senam pagi untuk mengawali hari dengan energi positif.', 'https://www.facebook.com/share/v/8zBBuusGPro6qtgT/?mibextid=xfxF2i', '2024-06-12 08:24:13', '2024-06-12 08:24:13'),
(4, 'WhatsApp Image 2024-06-10 at 08.40.15_1d270020.jpg', 'Perayaan Ulang Tahun', 'Merayakan Ulang tahun salah satu siswa Tk Mutiara.', 'https://www.facebook.com/share/r/czBNtupQoeP9q2Hx/?mibextid=qi2Omg', '2024-06-12 08:24:42', '2024-06-12 08:24:42'),
(5, 'WhatsApp Image 2024-06-10 at 08.40.16_89787e4b.jpg', 'Perayaan HUT RI-78', 'Melakukan Pawai secara langsung didepan Bupati.', 'https://www.facebook.com/share/v/Ds28xxEakQeYEsJa/?mibextid=qi2Omg', '2024-06-12 08:25:11', '2024-06-12 08:25:11'),
(6, 'foto10.jpg', 'Lomba Menari', 'Memenangkan Juara dalam Lomba Menari', 'https://www.facebook.com/share/v/BC3ygNBkV9vCNA4y/?mibextid=oFDknk', '2024-06-12 08:25:54', '2024-06-12 08:25:54');

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
  `status` enum('aktif','tidak aktif') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `image`, `name`, `alamat`, `no_telp`, `jeniskelamin`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Picture2.jpg', 'HERNI SIPAHUTAR, S.Pd', 'balige', '081264762123', 'perempuan', 'aktif', '2024-06-12 08:26:57', '2024-06-12 08:26:57'),
(6, 'Picture3.jpg', 'FRISKA DANIATI BAKARA, S.Pd', 'balige', '082174784591', 'perempuan', 'aktif', '2024-06-12 08:27:34', '2024-06-12 08:27:34'),
(7, 'Picture4.jpg', 'DERMAWAN SIPAHUTAR, S.Pd', 'balige', '082274178862', 'perempuan', 'aktif', '2024-06-12 08:28:01', '2024-06-12 08:28:01'),
(8, 'default.png', 'RINA, S.Pd', 'balige', '082163515425', 'perempuan', 'aktif', '2024-06-12 08:28:23', '2024-06-12 08:28:23'),
(9, 'Picture1.jpg', 'RISMA SIAHAAN, S.Pd', 'Balige', '086745678923', 'perempuan', 'aktif', '2024-06-12 08:28:53', '2024-06-12 08:28:53');

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
(1, 30, 35, 33, 38, 38, '2024-06-12 07:33:52', '2024-06-12 07:33:52');

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
(1, 'kelas', '2024-06-12 07:22:11', '2024-06-12 07:22:11'),
(2, 'taman bermain', '2024-06-12 07:22:22', '2024-06-12 07:22:22');

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
(12, '2024_05_29_210008_create_jumlah_siswas_table', 1),
(13, '2024_06_11_155525_create_akreditasi_table', 1);

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
(1, 'Penerimaan Murid Baru T.A 2024/2025', 'Ayo Daftarkan anak anda ke Tk Mutiara Balige.Dijamin anak lancar baca tulis tanpa mengeja.\r\nAda extra kurikuler menari dan bermain musik serta bahasa inggris.\r\nHub:085275144266', 'penerimaan.jpg', '2024-06-12 07:46:51', '2024-06-12 07:46:51'),
(2, 'Penerimaan Les Tambahan', 'Telah dibuka les tambahan calistu(baca tulis berhitung) untuk umum.tempat TK Mutiara Balige.Jadwal senin,selasa,Rabu,Pukul 11.30-13.00,pukul 13.00-14.30,pukul 15.00-16.30.\r\nbiaya Rp.150.000/bulan.ayo dafarkan anak anda sekarang juga hubungi 085275142266', 'pengumuna.jpg', '2024-06-12 07:47:13', '2024-06-12 07:47:13'),
(3, 'penerimaan Loker', 'Dibutuhkan Tenaga kebersihan Di Tk Mutiara Balige masuk jam 07.00 wib - 14.00 wib. Bagi yang berminat dapat menghubungi 085275144266', 'WhatsApp Image 2024-06-12 at 09.19.53_f8446e0d.jpg', '2024-06-12 07:52:25', '2024-06-12 07:52:25');

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
(1, 'foto10.jpg', 'Juara 1  lomba Menari festival TK/Paud Toba 2023', 'Juara 1 lomba menari pada Festival TK/PAUD Toba 2023 diraih oleh kelompok atau individu yang menampilkan tarian dengan koreografi kreatif, menggabungkan gerakan tradisional dan modern dengan semangat dan ketepatan yang tinggi. Kostum yang mereka gunakan sangat menarik, dengan warna-warna cerah dan desain yang detail, serta properti tambahan yang memperkuat tema tarian mereka. Persiapan yang matang terlihat dari latihan rutin yang dilakukan di bawah bimbingan guru atau pelatih berpengalaman, mencakup latihan gerakan, pemilihan musik, dan penataan panggung. Para juri menilai penampilan berdasarkan keindahan dan keakuratan gerakan, kekompakan tim, ekspresi dan interpretasi tarian, serta kreativitas dalam koreografi, dan juara 1 menonjol di semua aspek ini. Prestasi ini tidak hanya meningkatkan rasa percaya diri dan motivasi anak-anak untuk terus mengembangkan bakat seni mereka, tetapi juga membawa kebanggaan bagi sekolah, guru, dan orang tua mereka.', 'https://www.facebook.com/share/r/6Ws9XMm7iALosGTg/?mibextid=oFDknk', '2023-11-10', '2024-06-12 07:11:32', '2024-06-12 07:11:32'),
(2, 'fashionshow.jpg', 'Juara 1 Lomba Fashion Show 2023', 'Juara 1 Lomba Fashion Show 2023 diraih oleh peserta yang menampilkan kombinasi sempurna antara busana yang memukau dan kepercayaan diri yang tinggi di atas panggung. Peserta ini memamerkan pakaian yang dirancang dengan kreatif, memperlihatkan detail dan kualitas bahan yang luar biasa, serta kesesuaian tema yang ditentukan oleh penyelenggara lomba. Setiap langkah dan pose yang dilakukan di atas panggung menunjukkan kemahiran dalam membawa diri dan menampilkan busana dengan elegan. Persiapan yang matang terlihat dari pemilihan aksesoris yang tepat dan riasan yang mendukung keseluruhan penampilan. Para juri menilai berdasarkan kriteria seperti kesesuaian tema, kreativitas, kepercayaan diri, dan presentasi keseluruhan, di mana juara 1 unggul dalam semua aspek ini. Kemenangan ini memberikan pengakuan atas bakat dan usaha peserta, serta menjadi inspirasi bagi peserta lainnya dalam dunia fashion.', 'https://www.facebook.com/share/r/HnAnLZWeYouACMdb/?mibextid=oFDknk', '2023-08-20', '2024-06-12 07:13:02', '2024-06-12 07:13:02'),
(3, 'WhatsApp Image 2024-06-12 at 14.19.25_f569ed54.jpg', 'Juara 1 Lomba Menyanyi Tingkat TK kabupaten Toba', 'Juara 1 Lomba Menyanyi Tingkat TK Kabupaten Toba diraih oleh seorang anak yang menunjukkan bakat luar biasa dan teknik vokal yang mengesankan di usianya yang masih dini. Penampilannya memukau para juri dan penonton dengan pilihan lagu yang tepat, intonasi yang jelas, serta penguasaan panggung yang sangat baik. Anak ini menyanyi dengan penuh percaya diri, mengekspresikan emosi yang sesuai dengan lirik lagu, dan mampu mempertahankan pitch yang stabil sepanjang penampilannya. Persiapan yang matang terlihat dari kemampuan bernyanyi yang terlatih dan dukungan kostum yang sesuai dengan tema lagu. Para juri menilai berdasarkan aspek teknik vokal, ekspresi, penampilan panggung, dan keselarasan dengan musik, di mana juara 1 unggul di semua kategori ini. Kemenangan ini tidak hanya membanggakan bagi anak tersebut dan keluarganya, tetapi juga menjadi motivasi bagi anak-anak lain untuk terus mengembangkan bakat mereka di bidang seni.', NULL, '2023-08-17', '2024-06-12 07:18:25', '2024-06-12 07:21:47'),
(4, 'prestasi 3.jpg', 'Juara 1 Lomba Menyanyi', 'Juara 1 Lomba Menyanyi HUT RI ke-78 diraih oleh seorang peserta yang memukau para juri dan penonton dengan suara yang merdu dan teknik vokal yang luar biasa. Penampilan peserta ini benar-benar istimewa, menampilkan lagu-lagu bertema kebangsaan dengan penuh semangat dan penghayatan yang mendalam. Setiap nada yang dilantunkan menunjukkan keakuratan pitch dan kontrol vokal yang sangat baik, sementara ekspresi wajah dan gerak tubuhnya menambah kekuatan emosional pada penampilan tersebut. Pilihan kostum yang patriotik serta kepercayaan diri yang tinggi semakin memperkuat kesan positif dari penampilannya. Para juri menilai berdasarkan kriteria seperti teknik vokal, ekspresi, kesesuaian tema, dan penampilan panggung, di mana juara 1 berhasil unggul di semua aspek ini. Kemenangan ini tidak hanya menjadi kebanggaan pribadi bagi peserta, tetapi juga menjadi simbol semangat dan cinta terhadap tanah air, menginspirasi banyak orang untuk lebih menghargai seni dan budaya Indonesia.\r\nJuara 1 :Renta Nauli Simanjuntak (TK B Kelas Melati).', 'https://www.facebook.com/share/p/8smGCEFbJtHFj8CY/?mibextid=xfxF2i', '2021-09-27', '2024-06-12 07:19:24', '2024-06-12 07:19:24'),
(5, 'prestasi2.jpg', 'Juara II Lomba Menyanyi', 'Juara 2 Lomba Menyanyi HUT RI ke-78 diraih oleh peserta yang menampilkan bakat vokal yang luar biasa dan kemampuan interpretasi lagu yang mengesankan. Penampilannya berhasil memikat hati juri dan penonton dengan pilihan lagu bertema kebangsaan yang dibawakan dengan penuh semangat dan penghayatan. Peserta ini menunjukkan kontrol vokal yang baik, pengaturan napas yang tepat, serta kemampuan untuk mencapai nada-nada tinggi dengan stabilitas yang mengagumkan. Meskipun tidak meraih posisi pertama, penampilan juara 2 ini tetap luar biasa dengan penampilan panggung yang percaya diri dan kostum yang mendukung tema kemerdekaan. Persiapan yang matang terlihat dari latihan yang intensif dan dukungan penuh dari pelatih serta keluarga. Para juri memberikan penilaian berdasarkan aspek teknik vokal, interpretasi lagu, ekspresi, dan kesesuaian dengan tema, di mana peserta ini menunjukkan keunggulan yang signifikan. Kemenangan sebagai juara 2 ini memberikan kebanggaan tersendiri dan menjadi dorongan untuk terus mengembangkan bakat dalam bidang menyanyi.\r\nDijuarai oleh:Patiaraja Martogi Napitupulu (TK B Kelas Melati).', 'https://www.facebook.com/share/p/8smGCEFbJtHFj8CY/?mibextid=xfxF2i', '2021-09-27', '2024-06-12 07:20:12', '2024-06-12 07:20:12'),
(6, 'prestasi.jpg', 'Juara III Lomba Menyanyi', 'Juara 3 dalam Lomba Menyanyi untuk memperingati HUT RI ke-78 adalah pencapaian yang membanggakan bagi peserta yang berhasil meraihnya. Penampilan mereka di atas panggung memancarkan semangat nasionalisme dan kebanggaan akan negara, dengan interpretasi yang menggugah dan penuh emosi terhadap lagu-lagu patriotik. Meskipun meraih peringkat ketiga, peserta ini tetap berhasil menarik perhatian para penonton dengan vokal yang kuat, serta kemampuan untuk menyampaikan pesan dan makna lagu dengan jelas dan mendalam. Persiapan yang matang terlihat dari penekanan pada interpretasi yang kuat, serta penguasaan panggung yang menunjukkan kepercayaan diri yang tinggi. Para juri menilai berdasarkan aspek teknik vokal, interpretasi lagu, emosi yang disampaikan, serta keselarasan dengan tema peringatan HUT RI, di mana peserta ini berhasil menonjol meskipun bersaing dengan peserta lain yang juga berbakat. Meskipun hanya meraih peringkat ketiga, prestasi ini tetap merupakan suatu penghargaan atas dedikasi dan kerja keras peserta dalam menyampaikan pesan patriotik kepada masyarakat.\r\nDijuarai Oleh :Martin San Tobias siahaan (TK A).', 'https://www.facebook.com/share/p/8smGCEFbJtHFj8CY/?mibextid=xfxF2i', '2021-09-27', '2024-06-12 07:20:55', '2024-06-12 07:20:55');

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
(1, 'admin', '$2a$12$1W4ln3BTqdfyN3N8YN9bUOPLa7yQY3kyXgkZ2tgwlI0uqzbmGH0Ge', 'balige', '085260617452', 'laki-laki', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `fasilitas_name_unique` (`name`),
  ADD KEY `fasilitas_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gallery_title_unique` (`title`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_no_telp_unique` (`no_telp`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prestasis_title_unique` (`title`);

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
-- AUTO_INCREMENT for table `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
