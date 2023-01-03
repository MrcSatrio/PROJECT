-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 08.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto_brg` varchar(100) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `deskripsi`, `foto_brg`, `harga_brg`, `kategori`) VALUES
(14, 'sepatu anak', 'icikiwir', '1749981389_anak3.jpg', 120000, 'pria'),
(17, 'aselole1212', '', '276667378_cewe2.jpg', 123322, 'wanita'),
(18, 'sadasda', '', '1009674422_pria1.jpg', 10000, 'anak'),
(21, '123ghghghg', '', '961667085_anak3.jpg', 1110000, 'pria'),
(27, 'BAJU DEWASA', '', '1197899010_download.jpg', 150000, 'pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `invoice` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(15) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(30) NOT NULL,
  `waktu` date NOT NULL,
  `metode` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kodepos` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `invoice`, `username`, `nama_barang`, `harga_barang`, `foto_barang`, `jumlah`, `total`, `waktu`, `metode`, `nama`, `alamat`, `negara`, `provinsi`, `kodepos`) VALUES
(30, 'j9c3v10w4a7f6p9j8q8y7', 'marcel', 'sepatu anak', 120000, '', 5, 610000, '2022-12-10', 'Debit', 'Dita Asprillia', 'Jln Pulau Timor 9 No 11 RT:3 R', 'indonesia', 'Yogyakarta', 1711),
(31, 'k3c6g1u10l4h5w2l1s1j8', 'marcel', 'sepatu anak', 120000, '', 5, 610000, '2022-12-10', 'Debit', 'Dita Asprillia', 'Jln Pulau Timor 9 No 11 RT:3 R', 'indonesia', 'Jawa Timur', 1711),
(32, 'ba53c61632df78eb3e6b', 'dika', '123ghghghg', 1110000, '961667085_anak3.jpg', 2, 2230000, '2022-12-25', 'Debit', 'Marc satrio', 'blok G3 No 15, Jalan Bekasi Ti', 'indonesia', 'Jawa Barat', 17154),
(33, '5f3a67dadf5eb5ecbf67', '<br />\r\n<b>Warning</b>:  Undef', 'sadasda', 10000, '', 1, 20000, '2022-12-25', 'COD', 'Dita Asprillia', 'Jln Pulau Timor 9 No 11 RT:3 R', 'indonesia', 'Jawa Barat', 1711),
(34, '7c4ce9ba97b4b456ed17', 'dika', '123ghghghg', 1110000, '', 1, 1120000, '2022-12-25', 'Paylater', 'Marc satrio', 'bekasi timur regensi 5 blok G3', 'indonesia', 'Jawa Barat', 171154),
(35, 'b5d0a6a659d12a6b44b4', 'dika', '123ghghghg', 1110000, '', 10, 11110000, '2022-12-26', 'Paylater', 'Marc satrio', 'JALAN BEKASI RAYA UTARA RAYA R', 'indonesia', 'Jawa Tengah', 171154),
(36, 'd17b0d5793f379fafa45', 'dika', 'sadasda', 10000, '', 100, 1010000, '2022-12-26', 'COD', 'Marc satrio', 'bekasi timur regensi 5 blok G3/15 DFDSFDSFSDFSDFFDSFSDFSDFDSFSD', 'indonesia', 'Jawa Barat', 171154),
(37, '420847b67a3e1f4d3b98', 'dika', 'sadasda', 10000, '', 1, 20000, '2022-12-28', 'Debit', 'ICIKIIWIR', 'Jln Pulau Timor 9 No 11 RT:3 RW:9 Perumnas 3', 'indonesia', 'Kalimantan Barat', 1711),
(38, 'a7d0948b4b103aac63ad', '', '', 0, '', 0, 0, '2022-12-28', '', '', '', '', '', 0),
(39, '7481ce4fc95e010b1049', 'dika', '123ghghghg', 1110000, '', 1, 1120000, '2022-12-28', 'Debit', 'Marc satrio', 'bekasi timur regensi 5 blok G3/15', 'indonesia', 'Jawa Barat', 171154),
(40, '226b71173ddc212ac542', '', '', 0, '', 0, 0, '2022-12-28', '', '', '', '', '', 0),
(41, 'f8f7bc46c5b9dfa65f0e', '', '', 0, '', 0, 0, '2022-12-28', '', '', '', '', '', 0),
(42, '7501ab8d3bb8195aeafa', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 40000, 2147483647, '2022-12-28', 'COD', 'UUS AJA', 'Jl sentosa', 'indonesia', 'Jawa Timur', 17213),
(43, 'd1ec3a8be13990bed316', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 40000, 0, '2022-12-28', 'COD', 'UUS AJA', 'Jl sentosa', 'indonesia', 'Jawa Timur', 17213),
(44, '561829e5c2067cbacabb', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 40000, 2147483647, '2022-12-28', 'COD', 'UUS AJA', 'Jl sentosa', 'indonesia', 'Jawa Timur', 17213),
(45, '304785d8a2f5a57bdc5e', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 1, 160000, '2022-12-28', 'Paylater', 'Marc satrio', 'bekasi timur regensi 5 blok G3/15', 'indonesia', 'Jawa Barat', 171154),
(46, '0c32dcfa4223cad87b26', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 1, 160000, '2022-12-28', 'Paylater', 'Marc satrio', 'bekasi timur regensi 5 blok G3/15', 'indonesia', 'Jawa Barat', 171154),
(47, '3739ff9a026b5dead3bd', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 1, 160000, '2022-12-28', 'Paylater', 'Marc satrio', 'bekasi timur regensi 5 blok G3/15', 'indonesia', 'Jawa Barat', 171154),
(48, '4931a04fb003784ab781', 'dika', 'BAJU DEWASA', 150000, '1197899010_download.jpg', 2, 310000, '2022-12-28', 'Paylater', 'Marc satrio', 'bekasi timur regensi 5 blok G3/15', 'indonesia', 'Jawa Barat', 171154);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(25) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `email`, `username`, `password`, `level`, `waktu`) VALUES
('Andika kurnia rahmani', 'dika@gmail.com', 'dika', '123', 'user', '2022-12-06'),
('Marcellino Satrio Putro M', 'marcsatrioff@gmail.com', 'marcel', '123', 'admin', '2022-12-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
