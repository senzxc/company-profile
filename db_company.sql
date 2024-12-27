-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2024 pada 12.27
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
-- Database: `db_company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `message`, `date`) VALUES
('1', 'harutya', 'harutya@gmail.com', 'what ford?', '2024-12-07'),
('2', 'kuro', 'k4rbit@gmail.com', 'bagaimana cara saya menghubungi ford?', '2024-12-07'),
('3', 'keqing', 'qeking@gmail.com', 'how to contact ford?', '2024-12-07'),
('4', 'suomi', 'soumay@gmail.com', 'apa itu ford?', '2024-12-07'),
('7', 'hori', 'horimi@gmail.com', 'apakah ford punya medsos untuk dihubungi?', '2024-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `added_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `img`, `date`, `description`, `added_by`) VALUES
('1', '6753f1b8b957f.jpg', '2024-12-07', 'Partisipasi Ford di COP29 Baku: Kontribusi Keberlanjutan Untuk Dukung Ketahanan Iklim Indonesia.', 'ryo'),
('3', '6753f1c85d9cf.jpg', '2024-12-07', 'Ford Dorong Pertumbuhan dan Pengembangan UMKM, IKM dan BUMDES  melalui Kolaborasi Strategis dan Pelatihan Ekspor.', 'gwen'),
('5', '6753f1f63805b.jpg', '2024-12-12', '12 Desember 2024, LAPORAN KEUANGAN KUARTAL III TAHUN 2024.', 'hutao');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT curdate(),
  `img_profile` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `date`, `img_profile`, `role`) VALUES
('1', 'gwen', '$2y$10$eCTjSAyhO3j7nOsOtA8hCeNqtWUV5ekeGrXICeoEHitrbOuFG3WLK', '2024-12-07', '6753ef670eaec.png', 'staff'),
('3', 'nokotan', '$2y$10$xsyg45h0XqxzuUBpnxJDQe/2zb7oSuxn1QA850q2xIzPkMnvZXbOK', '2024-12-07', '6753efa834033.png', 'staff'),
('5', 'ryo', '$2y$10$2Q03wYato8piAFR3Zpuc5e/Sho/RvQIYNKrZQ2G2U1PjAUy2l8Y5O', '2024-12-07', '6753efde23544.jpeg', 'admin-master'),
('6', 'nobara', '$2y$10$Ji5v0/ZyZOkLjU6mDHx.MO/cv2Btw6MIFEn7cP6Ff.NR079KzVtA2', '2024-12-07', '6753efea91773.jpeg', 'staff'),
('7', 'chizuru', '$2y$10$3UbYmkK84xNBQbqQKsFnyOhhNrBadPMyU8zZuK5yWn9tADPWSjeiy', '2024-12-07', '6753efffc1a72.jpeg', 'staff'),
('8', 'hutao', '$2y$10$ClMkTvASXFvjhw8z8NaU4ueCP62XJw8L9pFvu1EnyaSwcpScmMZiq', '2024-12-07', '6753f0fcec5fe.jpeg', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
