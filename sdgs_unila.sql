-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 07.59
-- Versi server: 10.1.22-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdgs_unila`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(244, '2014_10_12_000000_create_users_table', 1),
(245, '2014_10_12_100000_create_password_resets_table', 1),
(246, '2019_10_08_145744_create_goals_table', 1),
(247, '2019_10_08_150514_create_trend_table', 1),
(248, '2019_10_08_151152_create_master_indikator_table', 1),
(249, '2019_10_08_151211_create_sumberdata_table', 1),
(250, '2019_10_08_151242_create_master_subindikator_table', 1),
(251, '2019_10_08_151347_create_pencapaian_table', 1),
(252, '2019_10_09_061042_add_admin_column_to_users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_goals`
--

CREATE TABLE `t_goals` (
  `id_goal` int(10) UNSIGNED NOT NULL,
  `nama_goal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_goal` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_goals`
--

INSERT INTO `t_goals` (`id_goal`, `nama_goal`, `deskripsi_goal`, `gambar`) VALUES
(3, 'Kesehatan yang Baik dan Kesejahteraan', 'Goal 3 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan memastikan kehidupan yang sehat dan mempromosikan kesejahteraan untuk semua usia.\r\n                               SDGs dalam universitas berfokus pada penelitian yang dilakukan mengenai kesehatan dapat berupa suatu penyakit yang berdampak besar pada hasil kesehatan di seluruh dunia, dukungan bagi mereka yang memiliki profesi kesehatan, dan kesehatan bagi mahasiswa dan staf.', 'img/sdgs/3.png'),
(4, 'Pendidikan Bermutu', 'Goal 4 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan memastikan pendidikan yang inklusif dan berkualitas merata, juga mendukung kesempatan belajar seumur hidup bagi semua.\r\n                               SDGs dalam universitas berfokus pada kontribusi universitas pada awal tahun dan pembelajaran seumur hidup, penelitian pedagogi dan komitmen terhadap pendidikan inklusif.', 'img/sdgs/4.png'),
(5, 'Kesetaraan Gender', 'Goal 5 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mencapai kesetaraan gender dan memberdayakan semua perempuan dan anak perempuan.\r\n                               SDGs dalam universitas berfokus pada penelitian universitas tentang studi gender, kebijakan mereka tentang kesetaraan gender dan komitmen mereka untuk merekrut dan mempromosikan perempuan. SDG ini bukan berarti mengungkapkan secara eksplisit mendukung perempuan, namun kita tidak bisa berharap untuk mengembangkan dunia secara berkelanjutan jika kebutuhan lebih dari separuh populasinya tidak terpenuhi.', 'img/sdgs/5.png'),
(8, 'Pekerjaan Layak dan Pertumbuhan Ekonomi', 'Goal 8 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mendukung pertumbuhan ekonomi yang inklusif dan berkelanjutan, tenaga kerja penuh dan produktif dan pekerjaan yang layak bagi semua.\r\n                               SDGs dalam universitas berfokus pada peran universitas sebagai mesin untuk pertumbuhan ekonomi dan tanggung jawab mereka sebagai pemberi kerja. Ini mengeksplorasi penelitian ekonomi lembaga, praktik ketenagakerjaan mereka dan bagian dari mahasiswa yang mengambil penempatan kerja.', 'img/sdgs/8.png'),
(9, 'Infrastruktur, Industri dan Inovasi', 'Goal 9 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan membangun infrastruktur yang tangguh, mendukung industrialisasi yang inklusif dan berkelanjutan, dan membantu perkembangan inovasi.\r\n                               SDGs dalam universitas berfokus pada peran universitas dalam mendorong inovasi dan melayani kebutuhan industri. Ini mengeksplorasi penelitian institusi pada industri dan inovasi, jumlah paten mereka dan perusahaan spin-off dan pendapatan penelitian universitas dari industri.', 'img/sdgs/9.png'),
(10, 'Mengurangi Ketimpangan', 'Goal 10 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mengurangi ketimpangan didalam dan antar negara.Mengurangi ketidaksetaraan, kebijakan harus bersifat universal, memperhatikan kebutuhan populasi kurang beruntung dan terpinggirkan.\r\n                               SDGs dalam universitas berfokus pada penelitian universitas tentang kesenjangan sosial, kebijakan mereka tentang diskriminasi dan komitmen universitas untuk merekrut staf dan siswa dari kelompok yang kurang terwakili.', 'img/sdgs/10.png'),
(11, 'Kota dan Komunitas yang Berkelanjutan', 'Goal 11 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan membangun kota dan pemukiman yang inklusif, aman, tangguh dan berkelanjutan. Perlu ada masa depan di mana kota memberikan peluang bagi semua, dengan akses ke layanan dasar, energi, perumahan, transportasi, dan banyak lagi.\r\n                               SDGs dalam universitas berfokus pada pengelolaan sumber daya untuk melihat peran universitas dalam mempertahankan dan melestarikan warisan masyarakat. Ini mengeksplorasi penelitian lembaga tentang keberlanjutan, peran universitas sebagai pemelihara seni dan warisan dan pendekatan internal untuk keberlanjutan.', 'img/sdgs/11.png'),
(12, 'Konsumsi dan Produksi yang Bertanggung Jawab', 'Goal 12 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan memastikan pola konsumsi dan produksi yang berkelanjutan.\r\n                               SDGs dalam universitas berfokus pada penggunaan sumber daya yang efisien dan meminimalkan pemborosan. Universitas harus memainkan perannya dalam memastikan bahwa konsumsi diminimalkan, terutama di mana sumber daya tidak terbarukan.', 'img/sdgs/12.png'),
(13, 'Penanganan Perubahan Iklim', 'Goal 13 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mengambil aksi segera untuk memerangi perubahan iklim dan dampaknya karena perubahan iklim adalah tantangan global yang memengaruhi setiap orang.\r\n                               SDGs dalam universitas berfokus pada mengeksplorasi penelitian universitas tentang perubahan iklim, penggunaan energi dan persiapan untuk menghadapi konsekuensi dari perubahan iklim.', 'img/sdgs/13.png'),
(16, 'Perdamaian, Keadilan dan Kelembagaan yang Kuat', 'Goal 16 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mendukung masyarakat yang damai dan inklusif untuk pembangunan berkelanjutan.\r\n                               SDGs dalam universitas berfokus pada bagaimana universitas dapat mendukung institusi yang kuat di negaranya dan mempromosikan perdamaian dan keadilan. Ini mengeksplorasi penelitian universitas tentang hukum dan hubungan internasional, partisipasi universitas sebagai penasihat bagi pemerintah dan kebijakan universitas tentang kebebasan akademik.', 'img/sdgs/16.png'),
(17, 'Kemitraan Untuk Mencapai Tujuan', 'Goal 17 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan menguatkan ukuran implementasi dan merevitalisasi kemitraan global untuk pembangunan berkelanjutan.\r\n                               SDGs dalam universitas berfokus melihat cara-cara yang lebih luas di mana universitas mendukung SDGs melalui kolaborasi dengan negara-negara lain, promosi praktik-praktik terbaik dan publikasi data. Kecuali jika semua mitra bekerja bersama menuju SDG, mereka tidak dapat dicapai.', 'img/sdgs/17.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_indikator`
--

CREATE TABLE `t_m_indikator` (
  `id_indikator` int(10) UNSIGNED NOT NULL,
  `indikator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_id_goal` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_m_indikator`
--

INSERT INTO `t_m_indikator` (`id_indikator`, `indikator`, `fk_id_goal`, `created_at`, `updated_at`) VALUES
(1, 'Penelitian dibidang kesehatan dan kesejahteraan', 3, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(2, 'Jumlah lulusan dalam bidang kesehatan', 3, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(3, 'Kolaborasi dan layanan kesehatan', 3, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(4, 'Penelitian dibidang pembelajaran (pedagogy)', 4, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(5, 'Jumlah lulusan dengan kualifikasi mengajar', 4, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(6, 'Tindakan pembelajaran seumur hidup ', 4, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(7, 'Proporsi dari mahasiswa generasi pertama', 4, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(8, 'Penelitian dibidang kesetaraan gender', 5, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(9, 'Proporsi dari mahasiswa perempuan generasi pertama ', 5, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(10, 'Tindakan akses mahasiswa', 5, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(11, 'Proporsi akademisi perempuan senior', 5, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(12, 'Proporsi perempuan yang menerima gelar', 5, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(13, 'Ukuran kemajuan wanita', 5, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(14, 'Penelitian dibidang pertumbuhan ekonomi dan ketenagakerjaan', 8, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(15, 'Praktik ketenagakerjaan', 8, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(16, 'Proporsi siswa yang mengambil penempatan kerja', 8, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(17, 'Proporsi karyawan dengan kontrak aman/tetap', 8, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(18, 'Penelitian relevan dengan industri, inovasi, dan infrastruktur', 9, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(19, 'Paten yang mengutip penelitian', 9, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(20, 'University spin-off', 9, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(21, 'Pendapatan penelitian dari industri ', 9, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(22, 'Penelitian tentang pengurangan kesenjangan', 10, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(23, 'Mahasiswa generasi pertama (first generation students)', 10, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(24, 'Siswa dari negara berkembang', 10, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(25, 'Siswa dan staf penyandang cacat ', 10, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(26, 'Tindakan melawan diskriminasi ', 10, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(27, 'Penelitian tentang kota dan masyarakat yang berkelanjutan', 11, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(28, 'Dukungan seni dan warisan', 11, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(29, 'Pengeluaran untuk seni dan warisan ', 11, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(30, 'Praktek berkelanjutan', 11, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(31, 'Penelitian tentang bertanggung jawab pada konsumsi dan produksi', 12, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(32, 'Tindakan operasional ', 12, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(33, 'Proporsi limbah daur ulang', 12, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(34, 'Publikasi laporan keberlanjutan (SDGs)', 12, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(35, 'Penelitian tentang aksi iklim ', 13, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(36, 'Penggunaan energi rendah karbon ', 13, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(37, 'Tindakan pendidikan lingkungan', 13, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(38, 'Penelitian tentang perdamaian, keadilan, dan institusi yang kuat', 16, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(39, 'Tindakan tata kelola universitas', 16, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(40, 'Bekerja dengan pemerintah', 16, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(41, 'Proporsi lulusan dalam penegakan hukum dan sipi', 16, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(42, 'Penelitian yang berkolaborasi dengan peneliti negara lain ', 17, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(43, 'Hubungan/relasi untuk mendukung tujuan', 17, '2019-11-19 03:59:28', '2019-11-19 03:59:28'),
(44, 'Publikasi laporan SDGs', 17, '2019-11-19 03:59:28', '2019-11-19 03:59:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_subindikator`
--

CREATE TABLE `t_m_subindikator` (
  `id_m_subindikator` int(10) UNSIGNED NOT NULL,
  `subindikator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pengambilan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_id_indikator` int(10) UNSIGNED NOT NULL,
  `fk_id_m_sumberdata` int(10) UNSIGNED DEFAULT NULL,
  `fk_id_goal` int(10) UNSIGNED NOT NULL,
  `isian` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_m_subindikator`
--

INSERT INTO `t_m_subindikator` (`id_m_subindikator`, `subindikator`, `waktu_pengambilan`, `fk_id_indikator`, `fk_id_m_sumberdata`, `fk_id_goal`, `isian`, `created_at`, `updated_at`) VALUES
(1, 'Proporsi makalah penelitian yang dilihat atau diunduh', '', 1, 13, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(2, 'Proporsi makalah yang di sitasi dalam pedoman medis', '', 1, 13, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(3, 'Jumlah publikasi', '', 1, 13, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(4, 'Jumlah lulusan dalam bidang kesehatan', '', 2, 1, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(5, 'Kolaborasi dengan istitusi kesehatan lokal/global untuk meningkatkan kesehatan dan kesejahteraan', '', 3, 1, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(6, 'Program penjangkauan di masyarakat setempat untuk meningkatkan kesehatan dan kesejahteraan', '3', 3, 1, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(7, 'Program penjangkauan di masyarakat setempat untuk meningkatkan kesehatan dan kesejahteraan', '3', 3, 13, 3, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(8, 'Layanan gratis untuk kesehatan seksual dan reproduksi untuk mahasiswa', '', 3, 1, 3, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(9, 'Dukungan kesehatan mental gratis untuk mahasiswa dan staf', '', 3, 1, 3, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(10, 'Dukungan kesehatan mental gratis untuk mahasiswa dan staf', '', 3, 11, 3, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(11, 'Dukungan kesehatan mental gratis untuk mahasiswa dan staf', '', 3, 12, 3, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(12, 'Akses komunitas/masyarakat ke fasilitas olahraga universitas', '', 3, 11, 3, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(13, 'Proporsi makalah penelitian yang dilihat atau diunduh', '', 4, 13, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(14, 'Proporsi makalah penelitian yang termasuk dalam 10% dari jurnal yang telah didefinisikan oleh Citescore', '', 4, 13, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(15, 'Jumlah publikasi', '', 4, 13, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(16, 'Jumlah lulusan dengan kualifikasi mengajar', '', 5, 4, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(17, 'Akses ke sumber daya pendidikan bagi mereka yang tidak belajar di universitas', '', 6, 10, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(18, 'Kegiatan pendidikan yang terbuka untuk umum, seperti kuliah atau kursus pendidikan khusus', '', 6, 10, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(19, 'Acara pendidikan yang menyediakan pelatihan kejuruan bagi mereka yang tidak belajar di universitas', '', 6, 10, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(20, 'Kegiatan penjangkauan pendidikan di komunitas lokal, termasuk sekolah', '', 6, 13, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(21, 'Kebijakan untuk memastikan bahwa kegiatan ini terbuka untuk umum', '', 6, 9, 4, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(22, 'Proporsi dari mahasiswa generasi pertama', '', 7, 14, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(23, 'Proporsi dari mahasiswa generasi pertama', '', 7, 15, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(24, 'Proporsi dari mahasiswa generasi pertama', '', 7, 16, 4, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(25, 'Proporsi dari total hasil penelitian yang ditulis oleh perempuan di universitas ', '', 8, 13, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(26, 'Proporsi dari makalah tentang kesetaraan gender dalam 10% jurnal teratas yang didefinisikan oleh Citescore', '', 8, 13, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(27, 'Jumlah publikasi', '', 8, 13, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(28, 'Proporsi dari mahasiswa perempuan generasi pertama ', '', 9, 14, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(29, 'Proporsi dari mahasiswa perempuan generasi pertama ', '', 9, 15, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(30, 'Proporsi dari mahasiswa perempuan generasi pertama ', '', 9, 16, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(31, 'Tracking application,tingkat penerimaan  dan penyelesaian untuk siswa perempuan', '', 10, 26, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(32, 'Mempertimbangkan masalah regional ketika mengembangkan kebijakan tentang partisipasi perempuan', '', 10, 17, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(33, 'Penyediaan skema akses perempuan yang sesuai, seperti mentoring', '', 10, 17, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(34, 'Encouraging applications di daerah dimana perempuan under-represented', '', 10, 17, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(35, 'Proporsi akademisi perempuan senior', '', 11, 18, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(36, 'Proporsi perempuan yang menerima gelar', '', 12, 18, 5, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(37, 'Kebijakan non-diskriminasi terhadap perempuan ', '', 13, 9, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(38, 'Kebijakan non-diskriminasi terhadap waria/transgender', '', 13, 9, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(39, 'Kebijakan maternitas/maternity dan paternity yang mendukung partisipasi perempuan', '', 13, 9, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(40, 'Fasilitas pengasuhan anak yang mudah diakses mahasiswa', '', 13, 11, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(41, 'Fasilitas pengasuhan anak yang mudah diakses staff', '', 13, 11, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(42, 'Skema mentoring perempuan dengan partisipasi luas', '', 13, 17, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(43, 'Tingkat kelulusan perempuan, dengan rencana aksi yang sesuai', '', 13, 17, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(44, 'Kebijakan melindungi mereka yang melaporkan diskriminasi', '', 13, 9, 5, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(45, 'Proporsi makalah penelitian yang termasuk dalam 10% dari jurnal yang telah didefinisikan oleh Citescore', '', 14, 13, 8, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(46, 'Jumlah publikasi', '', 14, 13, 8, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(47, 'Pembayaran upah untuk staf dan pengajar', '', 15, 11, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(48, 'Pengakuan hak serikat dan pekerja', '', 15, 11, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(49, 'Kebijakan tentang diskriminasi di tempat kerja ', '', 15, 9, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(50, 'Kebijakan menentang perbudakan moderen, kerja paksa, perdagangan manusia, dan pekerja anak-anak', '', 15, 9, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(51, 'Jaminan standar yang sama untuk tenanga outsourcing', '', 15, 11, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(52, 'Kebijakan seputar pay scale equity dan gender pay gaps', '', 15, 9, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(53, 'Komitmen untuk melacak dan mengatasi masalah seputar pay scale equity dan gender pay gaps', '', 15, 9, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(54, 'Proses bagi karyawan untuk mengajukan banding atas keputusan', '', 15, 11, 8, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(55, 'Proporsi siswa yang mengambil penempatan kerja', '', 16, 19, 8, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(56, 'Proporsi karyawan dengan kontrak aman/tetap', '', 17, 20, 8, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(57, 'Penelitian relevan dengan industri, inovasi, dan infrastruktur', '', 18, 13, 9, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(58, 'Paten yang mengutip penelitian', '', 19, 21, 9, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(59, 'University spin-off', '', 22, 1, 9, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(60, 'Pendapatan penelitian dari industri', '', 21, 13, 9, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(61, 'Pendapatan penelitian dari industri', '', 21, 9, 9, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(62, 'Pendapatan penelitian dari industri', '', 21, 11, 9, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(63, 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ', '', 22, 13, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(64, 'Field-weighted citation index of papers produced by the university', '', 22, 13, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(65, 'Jumlah Publikasi', '', 22, 13, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(66, 'Mahasiswa generasi pertama (first generation students)', '', 23, 14, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(67, 'Siswa dari negara berkembang', '', 24, 14, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(68, 'Proporsi siswa penyandang cacat', '', 25, 14, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(69, 'Proporsi karyawan penyandang cacat', '', 25, 18, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(70, 'Kebijakan penerimaan non-diskriminatif', '', 26, 9, 10, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(71, 'Aplikasi pelacakan dan tingkat penerimaan kelompok yang kurang terwakili (under-represented group)', '', 26, 9, 10, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(72, 'Memberikan program untuk merekrut dari kelompok yang kurang terwakili  (under-represented group)', '', 26, 9, 10, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(73, 'Kebijakan anti-diskriminasi dan anti-pelecehan untuk staf dan siswa', '', 26, 9, 10, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(74, 'Keberadaan keanekaragaman dan kesetaraan komite atau petugas ', '', 26, 9, 10, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(75, 'Memberikan bimbingan atau program dukungan lain yang ditujukan untuk siswa dan staf dari kelompok yang kurang terwakili (under-represented group)', '', 26, 9, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(76, 'Memberikan bimbingan atau program dukungan lain yang ditujukan untuk siswa dan staf dari kelompok yang kurang terwakili (under-represented group)', '', 26, 13, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(77, 'Memberikan kesadaran lintas budaya atau kampanye pelatihan (training campaigns)', '', 26, 9, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(78, 'Memberikan kesadaran lintas budaya atau kampanye pelatihan (training campaigns)', '', 26, 13, 10, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(79, 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ', '', 27, 13, 11, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(80, 'Field-weighted citation index of papers produced by the university ', '', 27, 13, 11, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(81, 'Jumlah publikasi', '', 27, 13, 11, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(82, 'Akses publik ke gedung-gedung penting di universitas', '', 28, 9, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(83, 'Akses publik ke perpustakaan universitas ', '', 28, 23, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(84, 'Akses publik ke museum dan koleksi universitas', '', 28, 9, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(85, 'Akses publik ke ruang dan monumen yang signifikan di dalam universitas ', '', 28, 9, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(86, 'Menyediakan acara artistik untuk anggota masyarakat, seperti konser', '', 28, 9, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(87, 'Merekam dan melestarikan warisan lokal ', '', 28, 9, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(88, 'Pengeluaran untuk seni dan warisan ', '', 29, 27, 11, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(89, 'Target sekitar komuter berkelanjutan ', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(90, 'Mempromosikan Komuter Berkelanjutan ', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(91, 'Mendorong telecommuting, kerja jarak jauh atau minggu kerja padat ', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(92, 'Menyediakan perumahan yang terjangkau bagi siswa ', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(93, 'Menyediakan perumahan yang terjangkau untuk staf ', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(94, 'Memberikan prioritas kepada pejalan kaki di kampus ', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(95, 'Bekerja dengan pihak berwenang setempat dalam masalah perencanaan, termasuk penyediaan perumahan yang terjangkau bagi penduduk lokal ', '', 30, 11, 11, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(96, 'Membangun ke standar yang berkelanjutan', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(97, 'Menggunakan kembali situs brownfield(opposite lahan hijau) /(bekas2 industri)', '', 30, 11, 11, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(98, 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ', '', 31, 13, 12, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(99, 'Field-weighted citation index of papers produced by the university ', '', 31, 13, 12, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(100, 'Jumlah publikasi', '', 31, 13, 12, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(101, 'Kebijakan sumber etis barang (legal/ilegal)', '', 32, 9, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(102, 'Kebijakan sumber etis barang (legal/ilegal)', '', 32, 11, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(103, 'Kebijakan sumber etis barang (legal/ilegal)', '', 32, 24, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(104, 'Kebijakan tentang pembuangan limbah berbahaya yang tepat ', '', 32, 9, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(105, 'Kebijakan meminimalkan limbah yang dikirim ke TPA / memaksimalkan daur ulang ', '', 32, 9, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(106, 'Kebijakan meminimalkan penggunaan plastik', '', 32, 9, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(107, 'Kebijakan meminimalkan penggunaan barang sekali pakai ', '', 32, 9, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(108, 'Bukti bahwa kebijakan ini juga berlaku untuk layanan outsourcing ', '', 32, 9, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(109, 'Bukti bahwa kebijakan ini juga berlaku untuk pemasok outsourcing ', '', 32, 1, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(110, 'Proporsi limbah yang didaur ulang ', '', 33, 27, 12, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(111, 'Proporsi limbah yang tidak dikirim ke TPA ', '', 33, 27, 12, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(112, 'Publikasi laporan keberlanjutan', '', 34, 27, 12, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(113, 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ', '', 35, 13, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(114, 'Field-weighted citation index of papers produced by the university ', '', 35, 13, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(115, 'Jumlah publikasi', '', 35, 13, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(116, 'Penggunaan energi rendah karbon ', '', 36, 25, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(117, 'Memberikan pendidikan lokal tentang dampak perubahan iklim ', '', 37, 25, 13, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(118, 'Menghasilkan rencana aksi iklim universitas', '', 37, 25, 13, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(119, 'Bekerja dengan pemerintah lokal atau nasional untuk menangani perencanaan perubahan iklim ', '', 37, 25, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(120, 'Menginformasikan dan mendukung pemerintah tentang masalah yang terkait dengan perubahan iklim', '', 37, 25, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(121, 'Bekerja sama dengan LSM tentang perubahan iklim', '', 37, 25, 13, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(122, 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ', '', 38, 13, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(123, 'Field-weighted citation index of papers produced by the university ', '', 38, 13, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(124, 'Jumlah publikasi', '', 38, 13, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(125, 'Representasi yang dipilih pada badan pengelola universitas ', '', 39, 9, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(126, 'Pengakuan perhimpunan siswa', '', 39, 12, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(127, 'Kebijakan untuk melibatkan pemangku kepentingan/ stakeholderuniversitas', '', 39, 9, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(128, 'Badan partisipatif yang mencakup penduduk lokal', '', 39, 9, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(129, 'Kebijakan pada kejahatan terorganisir dan korupsi ', '', 39, 9, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(130, 'Kebijakan yang menjamin kebebasan akademik', '', 39, 10, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(131, 'Publikasi data keuangan universitas ', '', 39, 11, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(132, 'Memberikan saran ahli kepada pemerintah ', '', 40, 18, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(133, 'Memberikan saran ahli kepada pemerintah ', '', 40, 13, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(134, 'Memberikan saran ahli kepada pemerintah ', '', 40, 28, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(135, 'Memberikan penjangkauan kepada pemerintah pusat dan daerah ', '', 40, 28, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(136, 'Memberikan penjangkauan kepada pemerintah pusat dan daerah ', '', 40, 13, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(137, 'Menghasilkan penelitian atas permintaan pemerintah atau yang langsung digunakan oleh pemerintah ', '', 40, 13, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(138, 'Menyediakan platform netral untuk diskusi topik yang menantang ', '', 40, 13, 16, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(139, 'Proporsi lulusan dalam penegakan hukum dan sipil ', '', 41, 3, 16, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(140, 'Proporsi publikasi akademik dengan co-author dari negara lain', '', 42, 13, 17, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(141, 'Jumlah publikasi yang terkait dengan 11 SDG ', '', 42, 25, 17, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(142, 'Pengembangan kebijakan dengan pemerintah atau LSM', '', 43, 25, 17, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(143, 'Mempromosikan dialog lintas sektoral dengan pemerintah atau LSM', '', 43, 25, 17, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(144, 'Berkolaborasi secara internasional untuk mengambil data terkait SDG ', '', 43, 25, 17, 'Angka', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(145, 'Bekerja secara internasional untuk mempromosikan best practice di sekitar SDGs', '', 43, 25, 17, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(146, 'Mendukung pendidikan LSM sehubungan dengan SDG', '', 43, 25, 17, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(147, 'Publikasi laporan SDG', '', 44, 25, 17, 'Teks', '2019-11-19 03:59:29', '2019-11-19 03:59:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_sumberdata`
--

CREATE TABLE `t_m_sumberdata` (
  `id_m_sumberdata` int(10) UNSIGNED NOT NULL,
  `sumberdata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_m_sumberdata`
--

INSERT INTO `t_m_sumberdata` (`id_m_sumberdata`, `sumberdata`, `created_at`, `updated_at`) VALUES
(1, 'Fakultas Kedokteran', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(2, 'Fakultas Ekonomi dan Bisnis', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(3, 'Fakultas Hukum', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(4, 'Fakultas Keguruan dan Pendidikan', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(5, 'Fakultas Pertanian', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(6, 'Fakultas Teknik', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(7, 'Fakultas Ilmu Sosial dan Politik', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(8, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(9, 'Rektor', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(10, 'Wakil Rektor 1', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(11, 'Wakil Rektor 2', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(12, 'Wakil Rektor 3', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(13, 'LPPM', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(14, 'BAAK', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(15, 'PMB', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(16, 'UPT TIK', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(17, 'Puslitbang Wanita, Anak dan Pembangunan', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(18, 'Biro Kepegawaian', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(19, 'CCED Unila', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(20, 'Unila:Kepegawaian Akademik/Non-Akademik', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(21, 'Sentra HAKI', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(22, 'Sentra Inovasi dan Inkubator Bisnis', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(23, 'UPT Perpustakaan', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(24, 'SPI', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(25, 'SDGs Center', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(26, 'see', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(27, 'Universitas Lampung', '2019-11-19 03:59:29', '2019-11-19 03:59:29'),
(28, 'Wakil Rektor 4', '2019-11-19 03:59:29', '2019-11-19 03:59:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pencapaian`
--

CREATE TABLE `t_pencapaian` (
  `id_pencapaian` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `fk_id_goal` int(10) UNSIGNED NOT NULL,
  `fk_id_indikator` int(10) UNSIGNED NOT NULL,
  `fk_id_m_subindikator` int(10) UNSIGNED NOT NULL,
  `fk_id_trend` int(10) UNSIGNED NOT NULL,
  `nilai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_pencapaian`
--

INSERT INTO `t_pencapaian` (`id_pencapaian`, `tahun`, `fk_id_goal`, `fk_id_indikator`, `fk_id_m_subindikator`, `fk_id_trend`, `nilai`, `keterangan`, `berkas`, `created_at`, `updated_at`) VALUES
(1, 2017, 3, 2, 4, 1, '80', '-', NULL, '2019-11-19 04:09:40', '2019-11-19 04:10:10'),
(3, 2017, 3, 3, 12, 1, 'a', '-', NULL, '2019-11-19 04:13:52', '2019-11-19 04:27:38'),
(4, 2018, 3, 3, 12, 3, 'b', '-', NULL, '2019-11-19 04:14:13', '2019-11-19 04:35:46'),
(5, 2019, 3, 3, 12, 3, 'c', '-', NULL, '2019-11-19 04:15:04', '2019-11-19 04:35:14'),
(7, 2018, 3, 2, 4, 1, '67', '-', NULL, '2019-11-22 13:24:22', '2019-11-22 13:24:22'),
(8, 2019, 3, 2, 4, 1, '70', '-', NULL, '2019-11-22 13:25:02', '2019-11-22 13:25:02'),
(9, 2017, 3, 1, 3, 4, '40', '-', NULL, '2019-11-22 13:25:56', '2019-11-22 13:25:56'),
(10, 2018, 3, 1, 3, 1, '57', '-', NULL, '2019-11-22 13:26:58', '2019-11-22 13:26:58'),
(11, 2019, 3, 1, 3, 3, '45', '-', NULL, '2019-11-22 13:27:30', '2019-11-22 13:27:30'),
(12, 2017, 3, 1, 1, 4, '60', '-', NULL, '2019-11-22 13:28:31', '2019-11-22 13:28:31'),
(13, 2018, 3, 1, 1, 3, '50', '-', NULL, '2019-11-22 13:29:02', '2019-11-22 13:29:02'),
(14, 2019, 3, 1, 1, 1, '84', '-', NULL, '2019-11-22 13:29:27', '2019-11-22 13:29:27'),
(15, 2017, 3, 1, 2, 4, '60', '-', NULL, '2019-11-22 13:30:27', '2019-11-22 13:30:27'),
(16, 2018, 3, 1, 2, 2, '60', '-', NULL, '2019-11-22 13:30:50', '2019-11-22 13:30:50'),
(17, 2019, 3, 1, 2, 1, '69', '-', NULL, '2019-11-22 13:31:14', '2019-11-22 13:31:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_trends`
--

CREATE TABLE `t_trends` (
  `id_trend` int(10) UNSIGNED NOT NULL,
  `simbol_trend` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_trends`
--

INSERT INTO `t_trends` (`id_trend`, `simbol_trend`, `keterangan`, `poin`) VALUES
(1, '<i class=\"fas fa-arrow-circle-up\" style=\"color:#00d43f;\"></i>', 'Data Naik', 1),
(2, '<i class=\"fas fa-arrow-circle-right\" style=\"color:#ffb700;\"></i>', 'Data Konstan', 0),
(3, '<i class=\"fas fa-arrow-circle-down\" style=\"color:#ed0000;\"></i>', 'Data Turun', -1),
(4, '<i class=\"fas fa-ellipsis-h\"></i>', 'Tidak Ada Data', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip`, `nama`, `email`, `username`, `email_verified_at`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, '123456789011234567', 'Admin SDGs Center Unila', 'admin@admin.com', 'admin123', NULL, '$2y$10$RSMWTFQbY4enYudh2TJhdORTasXuOvh2/HiSMDXsjMwbAq5a2A0km', 'Pegawai', NULL, '2019-11-19 03:59:28', '2019-11-19 03:59:28', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `t_goals`
--
ALTER TABLE `t_goals`
  ADD PRIMARY KEY (`id_goal`);

--
-- Indeks untuk tabel `t_m_indikator`
--
ALTER TABLE `t_m_indikator`
  ADD PRIMARY KEY (`id_indikator`),
  ADD KEY `t_m_indikator_fk_id_goal_foreign` (`fk_id_goal`);

--
-- Indeks untuk tabel `t_m_subindikator`
--
ALTER TABLE `t_m_subindikator`
  ADD PRIMARY KEY (`id_m_subindikator`),
  ADD KEY `t_m_subindikator_fk_id_goal_foreign` (`fk_id_goal`),
  ADD KEY `t_m_subindikator_fk_id_indikator_foreign` (`fk_id_indikator`),
  ADD KEY `t_m_subindikator_fk_id_m_sumberdata_foreign` (`fk_id_m_sumberdata`);

--
-- Indeks untuk tabel `t_m_sumberdata`
--
ALTER TABLE `t_m_sumberdata`
  ADD PRIMARY KEY (`id_m_sumberdata`);

--
-- Indeks untuk tabel `t_pencapaian`
--
ALTER TABLE `t_pencapaian`
  ADD PRIMARY KEY (`id_pencapaian`),
  ADD KEY `t_pencapaian_fk_id_goal_foreign` (`fk_id_goal`),
  ADD KEY `t_pencapaian_fk_id_indikator_foreign` (`fk_id_indikator`),
  ADD KEY `t_pencapaian_fk_id_m_subindikator_foreign` (`fk_id_m_subindikator`),
  ADD KEY `t_pencapaian_fk_id_trend_foreign` (`fk_id_trend`);

--
-- Indeks untuk tabel `t_trends`
--
ALTER TABLE `t_trends`
  ADD PRIMARY KEY (`id_trend`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT untuk tabel `t_m_indikator`
--
ALTER TABLE `t_m_indikator`
  MODIFY `id_indikator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `t_m_subindikator`
--
ALTER TABLE `t_m_subindikator`
  MODIFY `id_m_subindikator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT untuk tabel `t_m_sumberdata`
--
ALTER TABLE `t_m_sumberdata`
  MODIFY `id_m_sumberdata` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `t_pencapaian`
--
ALTER TABLE `t_pencapaian`
  MODIFY `id_pencapaian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `t_trends`
--
ALTER TABLE `t_trends`
  MODIFY `id_trend` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_m_indikator`
--
ALTER TABLE `t_m_indikator`
  ADD CONSTRAINT `t_m_indikator_fk_id_goal_foreign` FOREIGN KEY (`fk_id_goal`) REFERENCES `t_goals` (`id_goal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_m_subindikator`
--
ALTER TABLE `t_m_subindikator`
  ADD CONSTRAINT `t_m_subindikator_fk_id_goal_foreign` FOREIGN KEY (`fk_id_goal`) REFERENCES `t_goals` (`id_goal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_m_subindikator_fk_id_indikator_foreign` FOREIGN KEY (`fk_id_indikator`) REFERENCES `t_m_indikator` (`id_indikator`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_m_subindikator_fk_id_m_sumberdata_foreign` FOREIGN KEY (`fk_id_m_sumberdata`) REFERENCES `t_m_sumberdata` (`id_m_sumberdata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pencapaian`
--
ALTER TABLE `t_pencapaian`
  ADD CONSTRAINT `t_pencapaian_fk_id_goal_foreign` FOREIGN KEY (`fk_id_goal`) REFERENCES `t_goals` (`id_goal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pencapaian_fk_id_indikator_foreign` FOREIGN KEY (`fk_id_indikator`) REFERENCES `t_m_indikator` (`id_indikator`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pencapaian_fk_id_m_subindikator_foreign` FOREIGN KEY (`fk_id_m_subindikator`) REFERENCES `t_m_subindikator` (`id_m_subindikator`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pencapaian_fk_id_trend_foreign` FOREIGN KEY (`fk_id_trend`) REFERENCES `t_trends` (`id_trend`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
