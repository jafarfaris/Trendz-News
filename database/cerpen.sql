-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 06:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerpen`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Sport'),
(5, 'kuliner'),
(6, 'Teknologi'),
(7, 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_pengunjung` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_posting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_pengunjung`, `email`, `komentar`, `tgl_komentar`, `status`, `id_posting`) VALUES
(6, 'jack', 'jack@jack.com', 'mantap sekali artikelnya', '2017-11-28 04:44:58', 'Tampil', 6),
(7, 'rossi', 'rossi@rossi.com', 'Rossi memang juara', '2017-11-28 04:45:25', 'Tampil', 8);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `deskripsi_utama` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `judul`, `foto`, `deskripsi_singkat`, `deskripsi_utama`, `tanggal`, `id_kategori`, `id_user`) VALUES
(6, 'Sepak Bola', '3fb2db6cccf4a23383383394b28b2b31', 'permainan Sepak BolaÂ ', '<p>Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;Sepak Bola&nbsp;</p>\r\n', '2017-11-21', 3, 2),
(7, 'Dota 2 ', '3aa7c0ee81dfd8f1884622b87a6a1b5b', 'games moba Dota 2 ', '<p>Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;Dota 2&nbsp;</p>\r\n', '2017-11-21', 7, 1),
(8, 'motor', '108bbcfcb20d17a027d596ef3a959578', 'motor motor', '<p>motor motor</p>\r\n', '2017-11-21', 3, 2),
(9, 'Framework css terbaru : Foundation', '2fba12ea09423144cf2d854a90e3d065', 'Framework css terbaru : Foundation', '<p>Framework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : FoundationFramework css terbaru : Foundation</p>\r\n', '2017-11-22', 6, 1),
(11, 'PUBG', 'a4ad790f6d3051f1a5d658bd11d25ee3', 'PUBG: battle royal games', '<p>PUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal gamesPUBG: best battle royal games</p>\r\n', '2017-11-22', 7, 1),
(12, 'Redmi 5A', 'c846fb18d9f6dfbf4e184658f83c0bc7', 'Xiaomi keluaran terbaru yaitu Redmi 5A', '<p>Redmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5ARedmi 5A</p>\r\n', '2017-11-22', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'jafar', 'faris', 'Muhammad Jafar'),
(2, 'siti', 'siti', 'siti aminah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_posting` (`id_posting`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_posting`) REFERENCES `posting` (`id_posting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posting_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
