-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2019 pada 16.09
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_askfm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `email` varchar(30) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `day` varchar(2) DEFAULT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `language` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`email`, `fullname`, `username`, `password`, `day`, `month`, `year`, `gender`, `language`) VALUES
('asd@gmail.com', '123', '111', '111', '18', 'October', '1997', 'Female', 'English'),
('as@yahid.kom', '1234', '123', '123', '17', 'October', '2001', 'Female', 'Indonesia'),
('ashiap@yahuud.kom', 'attapetir', 'ahha', 'ahha321', '19', 'De', '2000', 'Male', 'Indonesia'),
('ahha@gmail.com', 'attagledek', 'ashiap', 'ashiap123', '', '', '1999', 'Male', 'en'),
('jamal@jmel.com', 'jamalsemlekom', 'jamalsml', 'jamalganteg', '28', 'October', '1999', 'Female', 'English');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ask`
--

CREATE TABLE `ask` (
  `id_ask` int(5) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ask`
--

INSERT INTO `ask` (`id_ask`, `question`, `answer`) VALUES
(1, 'Sudahkah kamu tersenyum hari ini?', ''),
(2, 'Gua liat-liat muka lu udah kayak kresek alfamart', ''),
(5, '', 'adadad'),
(6, '', 'asasdads');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `bio` varchar(300) NOT NULL,
  `web` varchar(50) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `e-mail` varchar(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `background` varchar(200) NOT NULL,
  `mood` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `anon_quest` tinyint(1) NOT NULL,
  `shout_quest` tinyint(1) NOT NULL,
  `other_share_post` tinyint(1) NOT NULL,
  `other_sub_act` tinyint(1) NOT NULL,
  `show_ans_feed` tinyint(1) NOT NULL,
  `show_stat` tinyint(1) NOT NULL,
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`name`, `location`, `bio`, `web`, `interest`, `e-mail`, `birthday`, `gender`, `photo`, `background`, `mood`, `color`, `anon_quest`, `shout_quest`, `other_share_post`, `other_sub_act`, `show_ans_feed`, `show_stat`, `id`, `username`) VALUES
('irfan', 'Jalan', 'saya cowo', 'www.google.com', '#toy', 'w.gmail.com', '10 maret 1999', 'L', 'https://d1muxuiltlupn6.cloudfront.net/assets/noAvatar-c233d6098087425dfeea8f690fd936de6b3cb2dc9fda991b0a5051169d334399.png', 'https://d1muxuiltlupn6.cloudfront.net/assets/profile-bg-853324ad1cb1a0bbc62244f1854403cfe21ddb5bd45fd2595d018734c80daac7.png', '3', '4', 1, 1, 0, 0, 0, 1, 1, 'irfan_69'),
('irfan', 'Jalan', 'saya cowo', 'www.google.com', '#toy', 'w.gmail.com', '10 maret 1999', 'L', 'https://d1muxuiltlupn6.cloudfront.net/assets/profile-bg-853324ad1cb1a0bbc62244f1854403cfe21ddb5bd45fd2595d018734c80daac7.png', 'https://d1muxuiltlupn6.cloudfront.net/assets/noAvatar-c233d6098087425dfeea8f690fd936de6b3cb2dc9fda991b0a5051169d334399.png', '3', '2', 1, 1, 0, 0, 0, 1, 2, 'irfan_69');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id_ask`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ask`
--
ALTER TABLE `ask`
  MODIFY `id_ask` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
