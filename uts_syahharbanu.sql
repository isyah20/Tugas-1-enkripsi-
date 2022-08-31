-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2022 pada 19.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_syahharbanu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donatur` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kategori_donasi` varchar(50) NOT NULL,
  `nilai_donasi` varchar(100) DEFAULT NULL,
  `jenis_barang` varchar(100) DEFAULT NULL,
  `jumlah_barang` varchar(50) DEFAULT NULL,
  `penyaluran` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `pesan` varchar(100) DEFAULT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id_donatur`, `nama`, `no_telp`, `email`, `alamat`, `kategori_donasi`, `nilai_donasi`, `jenis_barang`, `jumlah_barang`, `penyaluran`, `tanggal`, `pesan`, `foto`) VALUES
(3, 'andin', '081234561234', 'donut@gmail.com', 'Batu Ngampel', 'Donasi Uang', 'Rp. 1.000.000', '', '', 'pengiriman', '2022-04-07', 'pesan', 'Screenshot (50).png'),
(4, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Uang', 'Rp. 3.250.000', '', '', 'pengiriman', '2022-04-11', 'pesan', 'Screenshot (52).png'),
(5, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Uang', 'Rp. 3.250.000', '', '', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(6, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', 'Rp. 3.250.000', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(7, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', 'Rp. 3.250.000', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(8, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', 'Rp. 3.250.000', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(9, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', 'Rp. 3.250.000', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(10, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', 'Rp. 3.250.000', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(11, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', '', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(12, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', '', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(13, 'ade', '081234561234', 'aragula@gmail.com', 'madiun', 'Donasi Barang', '', 'beras', '10kg', NULL, '2022-04-11', '', 'Screenshot (52).png'),
(14, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', '', 'Screenshot (57).png'),
(15, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', '', 'Screenshot (57).png'),
(16, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', '', 'Screenshot (57).png'),
(17, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', '', 'Screenshot (57).png'),
(18, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', '', 'Screenshot (57).png'),
(19, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', '', 'Screenshot (57).png'),
(20, 'dewi', '082572639172', 'bombom@gmail.com', 'medan', 'Donasi Uang', 'Rp. 4.000.000', '', '', NULL, '2022-04-13', 'pesan', 'Screenshot (57).png'),
(21, 'sukma', '082572639172', 'sukma@gmail.com', 'medan', 'Donasi Barang', 'Rp. 4.000.000', 'minyak goreng', '12L', NULL, '2022-04-13', '', 'Screenshot (54).png'),
(22, 'sukma', '082572639172', 'sukma@gmail.com', 'medan', 'Donasi Barang', 'Rp. 4.000.000', 'minyak goreng', '12L', NULL, '2022-04-13', '', 'Screenshot (54).png'),
(23, 'sukma', '082572639172', 'sukma@gmail.com', 'medan', 'Donasi Barang', 'Rp. 4.000.000', 'minyak goreng', '12L', NULL, '2022-04-13', '', 'Screenshot (54).png'),
(24, 'sukma', '082572639172', 'sukma@gmail.com', 'medan', 'Donasi Barang', 'Rp. 4.000.000', 'minyak goreng', '12L', NULL, '2022-04-13', '', 'Screenshot (54).png'),
(25, 'sukma', '082572639172', 'sukma@gmail.com', 'medan', 'Donasi Barang', 'Rp. 4.000.000', 'minyak goreng', '12L', NULL, '2022-04-13', '', 'Screenshot (54).png'),
(26, 'sukma', '082572639172', 'sukma@gmail.com', 'medan', 'Donasi Barang', 'Rp. 4.000.000', 'minyak goreng', '12L', NULL, '2022-04-13', '', 'Screenshot (54).png'),
(27, 'sari', '088167129371', 'sari@gmail.com', 'surabaya', 'Donasi Barang', 'Rp. 1.250.000', 'mie goreng', '2 box', 'pengiriman', '2022-04-06', 'pesan', 'Screenshot (55).png'),
(28, 'ar', '085612317865', 'arrr123@gmail.com', 'mejayan', 'Donasi Barang', 'Rp. 500.000', 'pakaian', '2 karung', '2022-04-20', '0000-00-00', 'semangat', 'Screenshot (1).png'),
(29, 'ar', '085612317865', 'arrr123@gmail.com', 'mejayan', 'Donasi Uang', 'Rp. 500.000', 'pakaian', '2 karung', '2022-04-20', '0000-00-00', 'semangat', 'Screenshot (1).png'),
(30, 'ar', '085612317865', 'arrr123@gmail.com', 'mejayan', '', 'Rp. 500.000', 'pakaian', '2 karung', '2022-04-20', '0000-00-00', 'semangat', 'Screenshot (1).png'),
(31, 'dori', '081253092354', 'dori@gmail.com', 'blitar', '', 'Rp. 200.000', '', '', '2022-04-19', '0000-00-00', '', 'Screenshot (3).png'),
(32, 'dori', '081253092354', 'dori@gmail.com', 'blitar', '', 'Rp. 200.000', '', '', '2022-04-19', '0000-00-00', '', 'Screenshot (3).png'),
(33, 'dori', '089183260182', 'dori@gmail.com', 'blitar', 'Donasi Barang', '', 'pakaian', '3 karung', 'langsung', '0000-00-00', 'pesan', 'Screenshot (3).png'),
(34, 'dori', '081253092354', 'dori@gmail.com', 'blitar', 'Donasi Uang', 'Rp. 200.000', '', '', 'langsung', '0000-00-00', 'pesan', 'Screenshot (3).png'),
(35, 'dori', '081253092354', 'dori@gmail.com', 'blitar', 'Donasi Uang', 'Rp. 200.000', '', '', 'langsung', '0000-00-00', 'pesan', 'Screenshot (3).png'),
(36, 'dori', '081253092354', 'dori@gmail.com', 'blitar', 'Donasi Uang', 'Rp. 200.000', '', '', 'langsung', '2022-04-20', 'pesan', 'Screenshot (3).png'),
(37, 'rona', '085612917283', 'ronaa@gmail.com', 'magetan', 'Donasi Barang', 'Rp. 500.000', 'mie goreng, beras, minyak goreng', '2 box, 5kg, 5L', 'pengiriman', '2022-04-20', 'sehat selalu', 'Screenshot (10).png'),
(38, 'resti', '082139174193', 'ress@gmail.com', 'madiun', 'Donasi Barang', 'Rp. ', 'mie goreng', '3 box', '2022-04-18', '0000-00-00', 'halo', 'Screenshot (4).png'),
(39, 'arin', '082164282479', 'arin@gmail.com', 'pacitan', 'Donasi Barang', 'Rp. 500.000', 'pakaian ', '1 box', 'langsung', '0000-00-00', 'pesan', 'Screenshot (11).png'),
(41, 'Isyah', '082164282479', 'arrr123@gmail.com', 'madiun', 'Donasi Uang', 'Rp. 500.000,00', 'pakaian', '1 box', '2022-05-27', '0000-00-00', '', 'Screenshot (4).png'),
(42, 'ama', '082512659078', 'amaaa@gmail.com', 'yogyakarta', 'Donasi Uang Dan Barang', 'Rp. 10.000.000', 'mie goreng, beras, minyak goreng', '2 box, 5kg, 5L', '2022-05-25', '0000-00-00', '', 'Screenshot (10).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(9, 'bambam', '$2y$10$IBVRq/2hjfrC6eie9dUcWeBkxJUH.FDvdMIE5UpfQu3Egq.sXdwb.'),
(15, 'admin', '$2y$10$I0.KJ1B0hLopCigb2wjRy.u/W8ijJsAUHhzmpbzISarnVKxvijdb6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donatur` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
