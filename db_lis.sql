-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Des 2017 pada 08.21
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `departemen`) VALUES
  ('g64150043', 'faiz muchazmi', 'serang', '1996-12-31', 'Laki-laki', 'arsitektur lanskap'),
  ('g64150052', 'fauki rijatul', 'bandung', '1997-06-01', 'Laki-laki', 'agronomi dan holtikultura'),
  ('g64150098', 'muhammad hazim', 'bogor', '1997-08-17', 'Laki-laki', 'proteksi tanaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` varchar(4) DEFAULT NULL,
  `isbn` varchar(25) DEFAULT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
  (1, 'belajar php', 'parman  ', 'elekmedia  ', '2013', '14343dfd  ', 1, 'rak1  ', '2017-11-02'),
  (2, 'belajar codeigniter ', 'parman ', 'elekmedia ', '2012', 'hjhjhjhj ', 1, 'rak2 ', '2017-11-01'),
  (7, 'sistem informasi ', 'fauqi ', 'erlangga ', '', ' ', 1, 'rak5 ', '2017-11-16'),
  (8, 'sistem operasi', 'faiz', 'yudhistira', '2016', 'abcdef', 0, 'rak8', '2017-07-07'),
  (9, 'komputasi numerik', 'hazim', '', '2006', 'xyz', 9999, 'rak11', '2017-11-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('pinjam','kembali') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
  (1, 'belajar php', 'g64150002', 'saeful ramadhan', '2017-11-01', '2017-11-20', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`) USING HASH COMMENT 'pake_h';

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
