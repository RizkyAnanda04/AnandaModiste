-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2023 pada 17.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `username`, `password`, `admin_foto`) VALUES
(1, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Baju '),
(2, 'Celana'),
(3, 'Rok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `model_kategori` varchar(255) NOT NULL,
  `model_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`model_id`, `model_kategori`, `model_nama`) VALUES
(1, '1', 'Kebaya'),
(2, '1', 'Gamis'),
(3, '1', 'Blouse'),
(4, '1', 'Gaun'),
(5, '1', 'Blazer'),
(6, '2', 'Kulot'),
(7, '2', 'Celana Pensil'),
(8, '2', 'Celana Jubrai'),
(9, '3', 'Rok A'),
(10, '3', 'Rok Duyung'),
(11, '3', 'Rok Circle'),
(12, '3', 'Rok Rimple'),
(13, '3', 'Rok Kain'),
(14, '3', 'Rok Span'),
(15, '3', 'Rok Sarung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_username` varchar(255) NOT NULL,
  `pelanggan_password` varchar(255) NOT NULL,
  `pelanggan_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_username`, `pelanggan_password`, `pelanggan_foto`) VALUES
(1, 'Dita', 'Dita12', '46556ba2c6ab64fbf361ab25669d6246', ''),
(2, 'Dina', 'Dina', '62d3b762908030fe1162249fd4091458', ''),
(3, 'Sinta', 'Sinta', '1e8ec5f4aa47d4407c8574fd9e2cb421', ''),
(4, 'Shella Anggia', 'Shella Anggia', '7e961622f7bb588356f55ce5b6e8c5c1', ''),
(6, 'Jesika', 'Jesika', 'ab487cfbadecfde886631f496db47489', ''),
(7, 'Intan', 'Intan12', 'ffae75b9f641b58edc3f226581eb3dfe', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `an` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `metode`, `no_rek`, `an`) VALUES
(1, 'BNI', '14162527527', 'Rizky Ananda'),
(2, 'BRI', '142624725276', 'Sripahmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemberitahuan`
--

CREATE TABLE `pemberitahuan` (
  `pemberitahuan_id` int(11) NOT NULL,
  `pemberitahuan_isi` varchar(255) NOT NULL,
  `level_user` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `judul_pesan` varchar(255) NOT NULL,
  `isi_pesan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_kirim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran_baju`
--

CREATE TABLE `ukuran_baju` (
  `ukuran_baju_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `ukuran_baju_lp` int(11) NOT NULL,
  `ukuran_baju_lm` int(11) NOT NULL,
  `ukuran_baju_pm` int(11) NOT NULL,
  `ukuran_baju_bb` int(11) NOT NULL,
  `ukuran_baju_lpg` int(11) NOT NULL,
  `ukuran_baju_pp` int(11) NOT NULL,
  `ukuran_baju_lkrpu` int(11) NOT NULL,
  `ukuran_baju_lkrpi` int(11) NOT NULL,
  `ukuran_baju_pt` int(11) NOT NULL,
  `ukuran_baju_lt` int(11) NOT NULL,
  `ukuran_baju_pb` int(11) NOT NULL,
  `ukuran_baju_kl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran_baju`
--

INSERT INTO `ukuran_baju` (`ukuran_baju_id`, `pelanggan_nama`, `ukuran_baju_lp`, `ukuran_baju_lm`, `ukuran_baju_pm`, `ukuran_baju_bb`, `ukuran_baju_lpg`, `ukuran_baju_pp`, `ukuran_baju_lkrpu`, `ukuran_baju_lkrpi`, `ukuran_baju_pt`, `ukuran_baju_lt`, `ukuran_baju_pb`, `ukuran_baju_kl`) VALUES
(1, 'Dita', 20, 15, 20, 50, 20, 20, 30, 30, 20, 15, 30, 12),
(2, 'Dina', 20, 15, 12, 15, 18, 15, 15, 15, 18, 18, 30, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran_celana`
--

CREATE TABLE `ukuran_celana` (
  `ukuran_celana_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `ukuran_celana_lp` int(11) NOT NULL,
  `ukuran_celana_lpg` int(11) NOT NULL,
  `ukuran_celana_p` int(11) NOT NULL,
  `ukuran_celana_lph` int(11) NOT NULL,
  `ukuran_celana_ll` int(11) NOT NULL,
  `ukuran_celana_lk` int(11) NOT NULL,
  `ukuran_celana_pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran_celana`
--

INSERT INTO `ukuran_celana` (`ukuran_celana_id`, `pelanggan_nama`, `ukuran_celana_lp`, `ukuran_celana_lpg`, `ukuran_celana_p`, `ukuran_celana_lph`, `ukuran_celana_ll`, `ukuran_celana_lk`, `ukuran_celana_pc`) VALUES
(1, 'Sinta', 22, 22, 15, 20, 15, 15, 30),
(2, 'Dita', 20, 20, 15, 25, 12, 12, 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran_rok`
--

CREATE TABLE `ukuran_rok` (
  `ukuran_rok_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `ukuran_rok_lp` int(11) NOT NULL,
  `ukuran_rok_lpg` int(11) NOT NULL,
  `ukuran_rok_pr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran_rok`
--

INSERT INTO `ukuran_rok` (`ukuran_rok_id`, `pelanggan_nama`, `ukuran_rok_lp`, `ukuran_rok_lpg`, `ukuran_rok_pr`) VALUES
(1, '<br /><b>Notice</b>:  Undefined index: username in <b>C:xamphtdocsReferensiAdmindata_ukuran_rok_edit.php</b> on line <b>56</b><br />', 22, 24, 35),
(2, 'Dita', 21, 25, 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `address`, `no_hp`, `password`) VALUES
(2, 'Dina', 'dina@gmail.com', '', '0', '7f3f50f5fda824900ef8b87e1b3b0a6f'),
(3, 'Shella', 'shella@gmail.com', '', '0', '7e961622f7bb588356f55ce5b6e8c5c1'),
(4, 'Sinta', 'sinta@gmail.com', 'Jalan Kenanga', '0', '1e8ec5f4aa47d4407c8574fd9e2cb421'),
(5, 'Dita', 'dita@gmail.com', 'Jalan Kenanga', '0', '46556ba2c6ab64fbf361ab25669d6246'),
(6, 'Fika', 'fika@gmail.com', 'Jalan Kenanga', '0', 'e912354b13af89aa9e481479afbecccf'),
(7, 'Dani', 'dani@gmail.com', 'Jalan Kenanga', '0', '0b2cc82e6a177b18faefd88581b8597d'),
(8, 'Dani', 'dani12@gmail.com', 'Jalan Kenanga', '0', 'afa58b233b2bf0301c2f65b276577bee'),
(9, 'Rani', 'rani@gmail.com', 'Jalan Kenanga', '0', '289c2ae9e899f7f3e0339e8ad3864080'),
(10, 'Ratih', 'ratih@gmail.com', 'Jalan Kenanga', '081397366572', '0cab33c78347a74ffb2d4df6e2251037'),
(11, 'Rika', 'rika@gmail.com', 'Jalan Kenanga', '', '4959fba5af95611fa88e2b7c6622e486'),
(12, 'Rina', 'rina@gmail.com', 'Jalan Kenanga', '', '0ca52b8ce692226686ed5e16b5540b4a'),
(13, 'Vania', 'vania@gmail.com', 'Jalan Kenanga', '', 'b4ea46bbd6b7c4936ba7987342f392fb'),
(14, 'Risa', 'risa@gmail.com', 'Jalan Kenanga', '', '9b3ad1e2c9c5dc4b6c51bc74751c7218'),
(15, 'Rita', 'rita@gmail.com', 'Jalan Kenanga', '', 'be1ae2eeeca8fb8302aed56fb0a6019d'),
(16, 'Tika', 'tika@gmail.com', 'Jalan Setia Budi', '', 'bcc697351469fc7be0c70fad4988f673');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indeks untuk tabel `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`pemberitahuan_id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `ukuran_baju`
--
ALTER TABLE `ukuran_baju`
  ADD PRIMARY KEY (`ukuran_baju_id`);

--
-- Indeks untuk tabel `ukuran_celana`
--
ALTER TABLE `ukuran_celana`
  ADD PRIMARY KEY (`ukuran_celana_id`);

--
-- Indeks untuk tabel `ukuran_rok`
--
ALTER TABLE `ukuran_rok`
  ADD PRIMARY KEY (`ukuran_rok_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  MODIFY `pemberitahuan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ukuran_baju`
--
ALTER TABLE `ukuran_baju`
  MODIFY `ukuran_baju_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ukuran_celana`
--
ALTER TABLE `ukuran_celana`
  MODIFY `ukuran_celana_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ukuran_rok`
--
ALTER TABLE `ukuran_rok`
  MODIFY `ukuran_rok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
