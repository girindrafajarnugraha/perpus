-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 07:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_anggota` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_anggota` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_anggota` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin_anggota` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_anggota` date DEFAULT NULL,
  `email_anggota` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telpon_anggota` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_anggota` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pinjam` enum('Bebas','Tertanggung') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `kode_anggota`, `nama_anggota`, `kelas_anggota`, `jenis_kelamin_anggota`, `tanggal_lahir_anggota`, `email_anggota`, `no_telpon_anggota`, `alamat_anggota`, `status_pinjam`, `created_at`, `updated_at`) VALUES
(1, '1941', 'Hisam', 'X-IPA 2', 'Laki-laki', '2005-06-15', 'hisamsu@gmail.com', '087344241412', 'Dsn. Ploso, Desa Ploso, Kecamatan Ploso', 'Bebas', '2023-03-15 09:35:38', '2023-03-15 09:35:38'),
(2, 'DF1', 'Putri', 'XI-IPA 3', 'Perempuan', '2005-10-03', 'adad@gmai.com', '08721124217', 'Desa Pacarpeluk, Kecamatan Megaluh', 'Bebas', '2023-03-16 04:46:12', '2023-03-20 06:08:05'),
(3, '1942', 'Reza', 'XI-IPS 2', 'Laki-laki', '2005-10-19', 'hisamsu@gmail.com', '082414217142', 'Dsn. Ploso, Desa Ploso, Kecamatan Ploso', 'Bebas', '2023-03-19 05:36:36', '2023-03-19 05:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_buku` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_buku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengarang_buku` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerbit_buku` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_buku` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_buku` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_eksemplar_buku` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_buku` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_peminjaman_detail` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `kode_buku`, `kategori_buku`, `judul_buku`, `pengarang_buku`, `penerbit_buku`, `tahun_buku`, `jumlah_buku`, `jumlah_eksemplar_buku`, `status_buku`, `id_peminjaman_detail`, `created_at`, `updated_at`) VALUES
(1, 'NVL021', 'Novel', 'Si kancil', 'Boron', 'Boronron', '2019', '3', '23', 'Tersedia', 1, '2023-03-15 05:43:50', '2023-03-15 05:43:50'),
(2, 'MTK01', 'Matematika', 'Matematika Kelas XII', 'Deddy', 'Erlangga', '2020', '20', '30', 'Dipinjam', 0, NULL, '2023-04-03 19:54:11'),
(3, 'BHS01', 'Bahasa', 'Bahasa Indonesia', 'Adul', 'Erlangga', '2019', '10', '40', 'Dipinjam', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bukus`
--

CREATE TABLE `kategori_bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kategori_buku` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kategori` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(111, '2014_10_12_000000_create_users_table', 1),
(112, '2014_10_12_100000_create_password_resets_table', 1),
(113, '2019_08_19_000000_create_failed_jobs_table', 1),
(114, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(115, '2023_03_03_024959_create_bukus_table', 1),
(116, '2023_03_04_005202_create_petugas_table', 1),
(117, '2023_03_04_011244_create_anggotas_table', 1),
(118, '2023_03_04_012016_create_peminjaman_table', 1),
(120, '2023_03_04_013212_create_kategori_bukus_table', 1),
(122, '2023_03_08_151156_relasi_peminjaman', 1),
(124, '2023_03_08_150806_relasi_pengembalian', 3),
(125, '2023_03_04_012509_create_pengembalians_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `tanggal_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_kembali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buku_pinjam` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`buku_pinjam`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `id_bukus` int(10) UNSIGNED DEFAULT NULL,
  `id_anggotas` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_pinjam`, `lama_pinjam`, `tanggal_pinjam`, `tanggal_kembali`, `buku_pinjam`, `created_at`, `updated_at`, `id_petugas`, `id_bukus`, `id_anggotas`) VALUES
(8, 'PJM01', 2, '2023-04-06', '2023-04-13', '[\"NVL021\",\"BHS01\"]', '2023-04-08 00:17:21', '2023-04-08 00:17:21', 2, NULL, 2),
(9, 'PJM02', 3, '2023-04-09', '2023-04-17', '[\"MTK01\",\"BHS01\"]', '2023-04-08 00:37:22', '2023-04-08 00:37:22', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_detail`
--

CREATE TABLE `peminjaman_detail` (
  `id` int(10) NOT NULL,
  `id_peminjaman` int(10) UNSIGNED NOT NULL,
  `id_bukus` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalians`
--

CREATE TABLE `pengembalians` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_peminjaman` int(10) UNSIGNED NOT NULL,
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('Lengkap','Kurang','Terlambat') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_petugas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_petugas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telpon_petugas` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_petugas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kode_petugas`, `nama_petugas`, `no_telpon_petugas`, `email_petugas`, `created_at`, `updated_at`) VALUES
(1, 'PT01', 'Labirin Palupi', '08631332754', 'labirinpal@mda.com', '2023-03-13 09:52:48', '2023-03-17 05:32:12'),
(2, 'PT02', 'Cici', '08231374181', 'cici@gmail.com', '2023-03-19 06:05:06', '2023-03-19 06:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_bukus`
--
ALTER TABLE `kategori_bukus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_id_petugas_foreign` (`id_petugas`),
  ADD KEY `peminjaman_id_bukus_foreign` (`id_bukus`),
  ADD KEY `peminjaman_id_anggotas_foreign` (`id_anggotas`);

--
-- Indexes for table `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peminjaman_foreign` (`id_peminjaman`),
  ADD KEY `id_bukus_foreign` (`id_bukus`);

--
-- Indexes for table `pengembalians`
--
ALTER TABLE `pengembalians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengembalians_id_peminjaman_foreign` (`id_peminjaman`),
  ADD KEY `pengembalians_id_petugas_foreign` (`id_petugas`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_bukus`
--
ALTER TABLE `kategori_bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengembalians`
--
ALTER TABLE `pengembalians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_id_anggotas_foreign` FOREIGN KEY (`id_anggotas`) REFERENCES `anggotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_id_bukus_foreign` FOREIGN KEY (`id_bukus`) REFERENCES `bukus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman_detail`
--
ALTER TABLE `peminjaman_detail`
  ADD CONSTRAINT `id_bukus_foreign` FOREIGN KEY (`id_bukus`) REFERENCES `bukus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_peminjaman_foreign` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengembalians`
--
ALTER TABLE `pengembalians`
  ADD CONSTRAINT `pengembalians_id_peminjaman_foreign` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengembalians_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
