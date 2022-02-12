-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 04:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rarabakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namadepan` varchar(30) NOT NULL,
  `namabelakang` varchar(30) NOT NULL,
  `alamat` varchar(5000) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `namadepan`, `namabelakang`, `alamat`, `telepon`) VALUES
(1, 'qifnav', 'qifnav', 'Rivano', 'Kurniawan', 'Jl. SWK Jl. Ring Road Utara No.104, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY', '082146836953'),
(2, '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `harga` int(20) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `nama`, `kategori`, `harga`, `deskripsi`) VALUES
(1, 'Soes Ragout', 'Jajanan Pasar', 10000, 'Di daerah Jogja atau Solo, Soes Ragout terkenal dengan namanya Songgo Buwono. Disajikan dengan saus gurih berwarna kuning, kalau jaman sekarang namanya mustard sauce.\r\nDari namanya, jajanan ini memiliki makna filosofi yang dalam.\r\nSonggo artinya menyangga, Buwono artinya Bumi/Dunia.\r\nSoesnya diibaratkan bumi ini, lalu selada menggambarkan tumbuh-tumbuhan yang menyangga bumi. Manusia dan makhluk hidup penduduk bumi lainnya digambarkan dengan isian ragout daging (bisa sapi atau ayam). Telur menggambarkan gunung-gunung, dan saus yang disiramkan di atasnya menggambarkan langit, sementara acar menggambarkan bintang-bintang di langit.\r\nDi Rara Bakery, soes ragout tidak kami sajikan dengan sausnya...jadi bukan seperti Songgo Buwono yang lengkap dengan saus dan acarnya. Bukan mengurangi makna filosofinya, tapi hanya ingin memenuhi asas kepraktisan dalam pengemasan dan jangkauan harga yang lebih ekonomis. \r\nSoes Ragout tetap menjadi yang favorit di Rara Bakery Prambanan.'),
(2, 'Pudding Roti Panggang', 'Roti', 15000, 'Puding Roti Panggang dengan topping Cinnamon dan Almond.\r\nHarumnya menggoda banget, crunchy di atas, lembut di dalam.'),
(3, 'Chicken Bread', 'Roti', 18000, 'Chicken Bread roti isi ayam dengan ukuran besar, isian full ayam yang gurih manis sampai gigitan terakhir.'),
(4, 'Buttermilk Red Velvet Cake', 'Kue', 65000, 'Red Velvet Cake dengan resep asli (bukan pakai resep bolu).'),
(5, 'Chicken Mayo Bread', 'Roti', 20000, 'Chicken Mayo yang super lembut rotinya dipadu pas dengan gurih manisnya ayam dan asam manisnya saus mayo berkualitas.'),
(6, 'Chocolate Birthday Cake', 'Kue', 89000, 'Birthday Cake ini toppingnya apa saja? \r\nGanache, Toblerone, Choco Biscuit, Hershey\'s, Choco Ball, Choco Flake, Pocky, Milo Rice Ball Choco.\r\nBase cake : Chocolate Sponge Cake \r\nCover : Vanilla Buttercream'),
(7, 'Mini Pizza', 'Roti', 25000, 'Mini Pizza dari Rara Bakery Prambanan ada 2 Varian, yaitu Ayam dan Tuna.\r\nUkuran personal pas mantab dengan diameter 14 cm, isinya juga full, ada sosis berkualitas, bawang bombay, daging dan jangan lupa saus andalan buatan Rara Bakery Prambanan yang rasanya pasti bikin teman-teman ngga cukup cuma makan 1. '),
(8, 'Prol Tape Cake', 'Jajanan Pasar', 9000, 'Prol tape ini andalan banget lho di Rara Bakery. Super lembut! Full butter, tanpa margarine, dan full susu UHT.'),
(9, 'Currypuff', 'Jajanan Pasar', 5000, 'Currypuff ini favorit banget! Kulit pastry nya renyah berlayer-layer, di dalamnya isi ayam dan kentang dimasak bumbu kari. Endeeuuusss');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `kode` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  `indeks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`kode`, `nama`, `harga`, `jumlah`, `total`, `tanggal`, `status`, `indeks`) VALUES
(1, 'Soes Ragout', 10000, 3, 30000, '2021-02-09 21:40:13', 'Sudah Dibayar', 1),
(2, 'Buttermilk Red Velvet Cake', 65000, 1, 65000, '2021-02-09 21:40:13', 'Sudah Dibayar', 1),
(3, 'Mini Pizza', 25000, 20, 500000, '2021-02-09 21:40:14', 'Sudah Dibayar', 1),
(4, 'Currypuff', 5000, 1000, 5000000, '2021-02-09 21:56:18', 'Belum Dibayar', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
