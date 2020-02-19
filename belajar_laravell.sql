-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2020 pada 07.49
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravell`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_11_153532_create_pegawais_table', 1);

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
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(4, 'Estiono Wibisono S.Sos', 'Dk. Surapati No. 617, Tangerang Selatan 35014, KalSel', NULL, NULL),
(5, 'Tari Mulyani S.Pt', 'Jr. BKR No. 421, Pematangsiantar 15487, Banten', NULL, NULL),
(6, 'Hesti Sudiati', 'Gg. Baranang No. 575, Denpasar 77380, SumSel', NULL, NULL),
(7, 'Ajimin Utama Winarno', 'Psr. M.T. Haryono No. 266, Madiun 55234, Gorontalo', NULL, NULL),
(8, 'Devi Yolanda', 'Dk. Umalas No. 615, Balikpapan 34883, KalSel', NULL, NULL),
(9, 'Kairav Ardianto S.Sos', 'Dk. Sugiono No. 551, Banjarmasin 90356, KalTeng', NULL, NULL),
(10, 'Eja Budi Saragih S.E.I', 'Gg. Merdeka No. 845, Bengkulu 86914, Bengkulu', NULL, NULL),
(11, 'Elma Oktaviani S.Ked', 'Ds. Flora No. 351, Tomohon 62726, NTB', NULL, NULL),
(12, 'Prakosa Mumpuni Lazuardi', 'Ki. Bayan No. 747, Makassar 17115, Aceh', NULL, NULL),
(13, 'Bakianto Januar', 'Kpg. Jend. A. Yani No. 671, Denpasar 57994, SumUt', NULL, NULL),
(14, 'Novi Farida', 'Jln. Pasirkoja No. 496, Payakumbuh 97887, KepR', NULL, NULL),
(15, 'Hafshah Restu Novitasari', 'Psr. Sukabumi No. 509, Kendari 68070, Maluku', NULL, NULL),
(16, 'Jaeman Firmansyah S.Kom', 'Dk. Basoka Raya No. 5, Pontianak 79994, NTB', NULL, NULL),
(17, 'Yunita Usada', 'Gg. Wahid Hasyim No. 136, Mataram 23010, MalUt', NULL, NULL),
(18, 'Kariman Wijaya', 'Ds. Bahagia No. 699, Pematangsiantar 72398, Aceh', NULL, NULL),
(19, 'Bahuraksa Pranowo', 'Jr. Baranang No. 25, Bau-Bau 65556, KalTeng', NULL, NULL),
(20, 'Alambana Umar Ardianto S.E.I', 'Kpg. Pahlawan No. 290, Pekalongan 81595, KalTim', NULL, NULL),
(21, 'Lala Pudjiastuti', 'Gg. Abdul Rahmat No. 284, Bogor 33540, KalTim', NULL, NULL),
(22, 'Ratih Utami', 'Ki. Ahmad Dahlan No. 353, Salatiga 79972, SumUt', NULL, NULL),
(23, 'Salwa Safitri S.E.I', 'Ki. Yogyakarta No. 117, Sawahlunto 44871, Aceh', NULL, NULL),
(24, 'Lidya Clara Mardhiyah S.I.Kom', 'Psr. Sutami No. 572, Bengkulu 14004, SulTeng', NULL, NULL),
(25, 'Hani Halimah', 'Gg. Pacuan Kuda No. 10, Pagar Alam 98896, SumUt', NULL, NULL),
(26, 'Ganda Cakrabuana Irawan', 'Jr. Bakit  No. 370, Sorong 32584, DKI', NULL, NULL),
(27, 'Gina Jane Nurdiyanti', 'Jln. Yohanes No. 603, Tomohon 77271, Jambi', NULL, NULL),
(28, 'Lala Zulaika S.T.', 'Jr. Basuki Rahmat  No. 413, Gunungsitoli 23565, SumBar', NULL, NULL),
(29, 'Samiah Mulyani', 'Psr. Jaksa No. 735, Metro 84901, SumBar', NULL, NULL),
(30, 'Heryanto Damanik', 'Jln. Raya Setiabudhi No. 199, Subulussalam 90139, KalBar', NULL, NULL),
(31, 'Prabawa Galak Halim', 'Jln. Bawal No. 227, Makassar 17604, Jambi', NULL, NULL),
(32, 'Sidiq Maryanto Siregar S.E.I', 'Ds. Jend. A. Yani No. 108, Palopo 36591, Maluku', NULL, NULL),
(33, 'Endah Halimah M.TI.', 'Dk. Abdul Rahmat No. 985, Bandung 50044, SumBar', NULL, NULL),
(34, 'Elon Napitupulu', 'Jln. Babah No. 358, Tangerang 35172, DKI', NULL, NULL),
(35, 'Amalia Raina Nasyiah S.Psi', 'Kpg. Supono No. 46, Subulussalam 21651, SumBar', NULL, NULL),
(36, 'Warji Siregar M.Pd', 'Ds. Ciwastra No. 145, Malang 18105, NTB', NULL, NULL),
(37, 'Heru Laksana Hutapea S.H.', 'Dk. Kebangkitan Nasional No. 604, Pagar Alam 21799, KepR', NULL, NULL),
(38, 'Kayla Suartini', 'Gg. Lumban Tobing No. 688, Makassar 69046, NTT', NULL, NULL),
(39, 'Uli Jane Permata', 'Ki. Camar No. 505, Samarinda 12340, SulUt', NULL, NULL),
(40, 'Raden Permadi', 'Jln. Rajawali Barat No. 344, Sabang 24461, Bali', NULL, NULL),
(41, 'Farah Vera Puspasari S.Ked', 'Dk. Jend. A. Yani No. 508, Surabaya 46516, Banten', NULL, NULL),
(42, 'Kambali Prasetyo', 'Gg. Sampangan No. 384, Langsa 39726, KalTeng', NULL, NULL),
(43, 'Rini Cici Hartati', 'Ki. Yos No. 519, Tidore Kepulauan 94094, Banten', NULL, NULL),
(44, 'Garda Hutagalung', 'Jr. Batako No. 605, Madiun 67629, Bengkulu', NULL, NULL),
(45, 'Unggul Sinaga', 'Dk. Baranang Siang Indah No. 856, Banjarmasin 76466, DKI', NULL, NULL),
(46, 'Martaka Sihotang', 'Jln. Madiun No. 466, Samarinda 93825, MalUt', NULL, NULL),
(47, 'Cahyono Wardaya Zulkarnain S.H.', 'Gg. Samanhudi No. 520, Lhokseumawe 21636, DIY', NULL, NULL),
(48, 'Lukita Sitompul', 'Ki. Wora Wari No. 124, Lubuklinggau 11852, SumUt', NULL, NULL),
(49, 'Jessica Padmi Mulyani', 'Jln. Sentot Alibasa No. 931, Tomohon 98376, KalSel', NULL, NULL),
(50, 'Nadia Fujiati S.Sos', 'Psr. Gajah Mada No. 955, Jambi 10370, SumBar', NULL, NULL),
(51, 'Sabrina Nurdiyanti', 'Gg. Basoka No. 344, Bima 42471, SulBar', NULL, NULL),
(52, 'Taufik Damar Hutagalung S.Pt', 'Dk. Yohanes No. 577, Pekalongan 55844, Lampung', NULL, NULL),
(53, 'Hilda Mila Hariyah', 'Psr. Tambun No. 192, Gunungsitoli 30626, Lampung', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'juananthoniosalas@gmail.com', NULL, '$2y$10$FUiNPcxooeaBGi2O7DrEaebusLFgBGstF/ZyhP9teN0xSOb/7PTca', NULL, '2020-02-18 20:55:12', '2020-02-18 20:55:12');

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
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
