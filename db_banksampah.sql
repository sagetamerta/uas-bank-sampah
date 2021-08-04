-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2021 pada 10.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banksampah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `telepon_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`, `telepon_admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Amerta Saget', '082145148515');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nasabah`
--

CREATE TABLE `tbl_nasabah` (
  `id_nasabah` int(11) NOT NULL,
  `nama_nasabah` varchar(50) NOT NULL,
  `telepon_nasabah` varchar(25) NOT NULL,
  `alamat_nasabah` varchar(80) NOT NULL,
  `nomor_rekening_nasabah` varchar(10) NOT NULL,
  `saldo_nasabah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nasabah`
--

INSERT INTO `tbl_nasabah` (`id_nasabah`, `nama_nasabah`, `telepon_nasabah`, `alamat_nasabah`, `nomor_rekening_nasabah`, `saldo_nasabah`) VALUES
(11, 'Ketut Gede Amerta Saget', '082145148515', 'Denpasar', '067', 28000),
(12, 'I Made Toni Tanaya Sugisna', '081456378129', 'Denpasar', '028', 30000),
(13, 'Samuel Bagus Saputra', '089465713345', 'Tabanan', '001', 36000),
(14, 'I Kadek Teja Purnama Saputra', '087642972134', 'Badung', '094', 0),
(15, 'Ketut Ngurah Ananda Kusuma', '083112545766', 'Badung', '037', 0),
(16, 'A P G Hare Krisna Putra', '085243167942', 'Tabanan', '091', 60000),
(17, 'Mochamad Aries Cahyoputra', '081664234478', 'Denpasar', '076', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nomor_rekening_nasabah` varchar(12) NOT NULL,
  `jenis_sampah` varchar(15) NOT NULL,
  `berat_sampah` int(11) NOT NULL,
  `tanggal_transaksi` varchar(35) NOT NULL,
  `total_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `nomor_rekening_nasabah`, `jenis_sampah`, `berat_sampah`, `tanggal_transaksi`, `total_transaksi`) VALUES
(47, '067', 'Kaca', 8, '09-07-2020 20:43:19', 28000),
(48, '091', 'Kertas', 15, '09-07-2020 20:43:29', 60000),
(49, '001', 'Kertas', 9, '09-07-2020 23:09:51', 36000),
(50, '028', 'Plastik', 10, '09-07-2020 23:10:29', 30000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
