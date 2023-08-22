-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Jul 2023 pada 15.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistempakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `gejala_id` int(11) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `flag_erase` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`gejala_id`, `kode_gejala`, `nama_gejala`, `keterangan`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'G1', 'Poliuria (banyak kencing)', 'Poliuria (banyak kencing) merupakan penyakit yang membuat kita sering membuang air kecil/kencing', 1, '2023-07-09 22:21:45', '2023-07-09 22:21:45'),
(2, 'G2', 'Polidipsia (banyak minum)', 'Polidipsia (banyak minum)', 1, '2023-07-09 22:21:59', '2023-07-09 22:21:59'),
(3, 'G3', 'Polifagia (banyak makan)', 'Polifagia (banyak makan)', 1, '2023-07-09 22:22:14', '2023-07-09 22:22:14'),
(4, 'G4', 'kram (sering terjadi kram pada otot)', 'kram (sering terjadi kram pada otot)', 1, '2023-07-09 22:22:23', '2023-07-09 22:22:23'),
(5, 'G5', 'Semutan (rasa kesemutan)', 'Semutan (rasa kesemutan)', 1, '2023-07-09 22:22:32', '2023-07-09 22:22:32'),
(6, 'G6', 'Rasa tebal (pada wjung kaki tangan ato kaki)', 'Rasa tebal (pada wjung kaki tangan ato kaki)', 1, '2023-07-09 22:22:41', '2023-07-09 22:22:41'),
(7, 'G7', 'Lapar (cepat lapar)', 'Lapar (cepat lapar)', 1, '2023-07-09 22:22:49', '2023-07-09 22:22:49'),
(8, 'G8', 'turun BB tiba-tiba tanpa alasan jelas', 'turun BB tiba-tiba tanpa alasan jelas', 1, '2023-07-09 22:26:55', '2023-07-09 22:26:55'),
(9, 'G9', 'kulit (kelainan pada kulit menjadi kering)', 'kulit (kelainan pada kulit menjadi kering)', 1, '2023-07-09 22:27:17', '2023-07-09 22:27:17'),
(10, 'G10', 'Gatal (gatal sekitaran kemaluan)', 'Gatal (gatal sekitaran kemaluan)', 1, '2023-07-09 22:27:36', '2023-07-09 22:27:36'),
(11, 'G11', 'Luka (luka yang sukar sembuh)', 'Luka (luka yang sukar sembuh)', 1, '2023-07-09 22:27:51', '2023-07-09 22:27:51'),
(12, 'G12', 'Keputihan (keputihan karena kelainan pada ginjal kalogi)', 'Keputihan (keputihan karena kelainan pada ginjal kalogi)', 1, '2023-07-09 22:28:03', '2023-07-09 22:28:03'),
(13, 'G13', 'Bisul (sering muncul bisul ditubuh)', 'Bisul (sering muncul bisul ditubuh)', 1, '2023-07-09 22:28:33', '2023-07-09 22:28:33'),
(14, 'G14', 'Lemah (cubuh cepat terasa lemah)', 'Lemah (cubuh cepat terasa lemah)', 1, '2023-07-09 22:28:43', '2023-07-09 22:28:43'),
(15, 'G15', 'Konsentrasi (konsentrasi mudah terganggu/kurang fokus)', 'Konsentrasi (konsentrasi mudah terganggu/kurang fokus)', 1, '2023-07-09 22:28:52', '2023-07-09 22:28:52'),
(16, 'G16', 'Berat badan turn drastis', 'Berat badan turn drastis', 1, '2023-07-09 22:29:04', '2023-07-09 22:29:04'),
(17, 'G17', 'Infeksi (mudah terkena infeksi)', 'Infeksi (mudah terkena infeksi)', 1, '2023-07-09 22:29:22', '2023-07-09 22:29:22'),
(18, 'G18', 'Gemetar (gemetar karena kelebihan lapar)', 'Gemetar (gemetar karena kelebihan lapar)', 1, '2023-07-09 22:29:32', '2023-07-09 22:29:32'),
(19, 'G19', 'sering pingsan', 'sering pingsan', 1, '2023-07-09 22:29:40', '2023-07-09 22:29:40'),
(20, 'G20', 'Keringat (banyak keringat, terutama keringat dingin)', 'Keringat (banyak keringat, terutama keringat dingin)', 1, '2023-07-09 22:29:52', '2023-07-09 22:29:52'),
(21, 'G21', 'Berdebar (detakan jantung tidak normal)', 'Berdebar (detakan jantung tidak normal)', 1, '2023-07-09 22:30:00', '2023-07-09 22:30:00'),
(22, 'G22', 'Pusing (sering pusing)', 'Pusing (sering pusing)', 1, '2023-07-09 22:30:08', '2023-07-09 22:30:08'),
(23, 'G23', 'Gelisah (suka gelisah)', 'Gelisah (suka gelisah)', 1, '2023-07-09 22:30:17', '2023-07-09 22:30:17'),
(24, 'G24', 'Koma (hilang kesadaran)', 'Koma (hilang kesadaran)', 1, '2023-07-09 22:30:25', '2023-07-09 22:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `penyakit_id` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `solusi` longtext NOT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`penyakit_id`, `nama_penyakit`, `kode_penyakit`, `keterangan`, `solusi`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'diabetes tipe 1', 'P1', 'Pasien dinyatakan masuk dalam diabetes tahap 1', 'perbanyak istirahat dan banyak mengkosumsi buah yang mengandung vitamin c', 1, '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(2, 'diabetes tipe 2', 'P2', 'pasien masuk dalam diabetes tahap 2', 'perbanyak makan makanan yang mengandung protein seperti telur dan daging', 1, '2023-07-10 00:01:54', '2023-07-10 00:01:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_detail`
--

CREATE TABLE `penyakit_detail` (
  `detail_id` int(11) NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyakit_detail`
--

INSERT INTO `penyakit_detail` (`detail_id`, `kode_penyakit`, `kode_gejala`, `created_at`, `updated_at`) VALUES
(1, 'P1', 'G4', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(2, 'P1', 'G15', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(3, 'P1', 'G6', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(4, 'P1', 'G2', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(5, 'P1', 'G5', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(6, 'P1', 'G1', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(7, 'P1', 'G19', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(8, 'P1', 'G20', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(9, 'P1', 'G3', '2023-07-09 23:58:56', '2023-07-09 23:58:56'),
(10, 'P2', 'G16', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(11, 'P2', 'G10', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(12, 'P2', 'G8', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(13, 'P2', 'G13', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(14, 'P2', 'G17', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(15, 'P2', 'G12', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(16, 'P2', 'G11', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(17, 'P2', 'G7', '2023-07-10 00:01:54', '2023-07-10 00:01:54'),
(18, 'P2', 'G18', '2023-07-10 00:01:54', '2023-07-10 00:01:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `rule_id` int(11) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `kode_pentakit` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$/br1aPLLx1cfUHPyQKN.HONzXMWmUjItyvRBy/rcTc/fSiA2/VLYe', NULL, '2023-07-10 11:56:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`gejala_id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`penyakit_id`);

--
-- Indeks untuk tabel `penyakit_detail`
--
ALTER TABLE `penyakit_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indeks untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `gejala_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `penyakit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penyakit_detail`
--
ALTER TABLE `penyakit_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `rule`
--
ALTER TABLE `rule`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
