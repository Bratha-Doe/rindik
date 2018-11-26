-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Sep 2017 pada 05.54
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rindik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `dess` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `foto`, `dess`) VALUES
(7, 'musikrindik2.jpg', '<p>Rindik adalah alat musik tradisional masyarakat Bali yang terbuat dari potongan-potongan bambu. Bambu yang digunakan untuk membuat Rindik ini biasanya merupakan bambu pilihan, sehingga tidak mudah pecah dan menghasilkan suara yang baik. Alat musik ini dimainkan dengan cara dipukul menggunakan alat tabuh secara bergantian sehingga menghasilkan suara yang merdu.<br /><br />Dalam perkembangannya, musik Rindik menjadi salah satu alat musik yang lebih fleksibel dan memiliki fungsi yang lebih banyak. Selain bisa digunakan sebagai pengiring pertunjukan tari, musik Rindik juga bisa ditampilkan sebagai pertunjukan musik seperti pengiring pernikahan dan resepsi. Selain itu juga bisa ditampilkan di acara festival budaya, penyambutan tamu besar dan acara budaya lainnya. (ggwp ez)</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tgl` text NOT NULL,
  `bln` text NOT NULL,
  `thn` text NOT NULL,
  `dess` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tgl`, `bln`, `thn`, `dess`) VALUES
(4, 'Lorem ipsum dolor sit amet', '20', '09', '2017', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(5, 'Excepteur sint occaecat cupidatat non proident bla bla bla', '30', '09', '2017', '<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>'),
(6, 'Duis aute irure dolor in reprehenderit in', '14', '10', '2017', '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `tgl` text NOT NULL,
  `dess` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `foto`, `judul`, `tgl`, `dess`) VALUES
(7, 'rindik-music.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '16 August, 2017', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</p>'),
(8, 'rindik1-500x375.jpg', 'Sed eget turpis a pede tempor malesuada.', '31 August, 2017', '<p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.<br />&nbsp;</p>'),
(9, 'akurat_20170607_336NE3.jpg', 'Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum.', '4 September, 2017', '<p>Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</p>'),
(10, 'hqdefault.jpg', 'Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus.', '10 September, 2017', '<p>Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</p>'),
(12, '2-500x500.jpg', 'Duis aute irure dolor in reprehenderit in voluptate', '18 September, 2017', '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `judul`) VALUES
(3, 'e2.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'),
(4, 'e33.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore'),
(7, 'e552.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'),
(8, 'e912.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore'),
(9, 'e2.jpg', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia'),
(10, 'e33.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore'),
(11, 'e233.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco'),
(12, 'e234.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat'),
(14, 'e912.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore w');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `foto` varchar(10000) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `foto`, `judul`) VALUES
(8, 'lnd_rindik.jpg', 'rindik slider 1'),
(10, 'DSCF1553.JPG', 'rindik slider 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(11) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `video`, `judul`) VALUES
(36, 'as.mp4', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui'),
(37, 'assd.mp4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore'),
(38, 'hello.mp4', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui;;'),
(39, 'videoplayback.mp4', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco gg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
