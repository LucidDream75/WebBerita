-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2024 pada 10.43
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
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `name`, `image`, `deskripsi`) VALUES
(5, 'Kartel', '673aa29650ce2.jpg', 'Narkoba berbahaya'),
(7, 'Minuman Dawet', '673d3057c2ecd.jpg', 'Dawet (bahasa Jawa: ꦝꦮꦼꦠ꧀, translit. dhawêt) adalah minuman berupa campuran air gula, santan, dan cendol (biasanya dicampur es)[1] yang berasal dari desa Jabung, Ponorogo. Minuman dengan rasa manis dan gurih ini juga kerap disajikan sebagai menu upacara pernikahan adat suku Jawa.[2] Seiring perkembangan zaman, Es dawet menyebar ke seluruh kota mulai dari Kota Semarang, Solo, Banjarnegara, Banyumas, Cilacap, Purworejo Jakarta, Bandung, hingga luar negeri seperti Singapura dan Malaysia.[3]'),
(8, 'buku', '673d31512cf45.png', 'game apik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
