-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2019 pada 11.00
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
-- Database: `db_lbbci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `ID` varchar(11) NOT NULL,
  `ROLE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`ID`, `ROLE`) VALUES
('1', 'Administrator'),
('2', 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NO` int(11) DEFAULT NULL,
  `ID_JK` varchar(10) DEFAULT NULL,
  `NAMA_ADMIN` varchar(200) DEFAULT NULL,
  `ALAMAT_ADMIN` varchar(200) DEFAULT NULL,
  `NOHP_ADMIN` varchar(12) DEFAULT NULL,
  `PASSWORD_ADMIN` varchar(100) DEFAULT NULL,
  `EMAIL_ADMIN` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID_ADMIN`, `NO`, `ID_JK`, `NAMA_ADMIN`, `ALAMAT_ADMIN`, `NOHP_ADMIN`, `PASSWORD_ADMIN`, `EMAIL_ADMIN`) VALUES
(1, 1, 'PR', 'Sitti suwaibah', 'pamekasan', '08888', '827ccb0eea8a706c4c34a16891f84e7b', 'sitisuwaibah45@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenjang`
--

CREATE TABLE `tbl_jenjang` (
  `ID_JENJANG` varchar(10) NOT NULL,
  `JENJANG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenjang`
--

INSERT INTO `tbl_jenjang` (`ID_JENJANG`, `JENJANG`) VALUES
('J01', 'TK'),
('J02', 'SD'),
('J03', 'SMP'),
('J04', 'SMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jk`
--

CREATE TABLE `tbl_jk` (
  `ID_JK` varchar(10) NOT NULL,
  `JK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jk`
--

INSERT INTO `tbl_jk` (`ID_JK`, `JK`) VALUES
('LK', 'Laki-Laki'),
('PR', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_les`
--

CREATE TABLE `tbl_les` (
  `ID_PAKET` varchar(10) NOT NULL,
  `JENIS_PAKET` varchar(100) DEFAULT NULL,
  `HARGA_PAKET` float(100,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_les`
--

INSERT INTO `tbl_les` (`ID_PAKET`, `JENIS_PAKET`, `HARGA_PAKET`) VALUES
('Prv01', 'Private TK', 30000),
('Prv02', 'Private SD', 35000),
('Prv03', 'Private SMP', 40000),
('Prv04', 'Private SMA', 45000),
('Rgl01', 'Reguler TK', 50000),
('Rgl02', 'Reguler SD', 60000),
('Rgl03', 'Reguler SMP', 70000),
('Rgl04', 'Reguler SMA', 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `NO` int(11) NOT NULL,
  `ID` varchar(11) DEFAULT NULL,
  `EMAIL` varchar(128) DEFAULT NULL,
  `NAME` varchar(128) DEFAULT NULL,
  `PASSWORD` varchar(128) DEFAULT NULL,
  `IMAGE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`NO`, `ID`, `EMAIL`, `NAME`, `PASSWORD`, `IMAGE`) VALUES
(1, '1', 'sitisuwaibah@gmail.com', 'sitti suwaibah', '827ccb0eea8a706c4c34a16891f84e7b', 'default.png'),
(2, '2', 'helmi@gmail.com', 'helmi', '827ccb0eea8a706c4c34a16891f84e7b', 'default.png'),
(3, '2', 'ninda@gmail.com', 'Sasri ninda', '827ccb0eea8a706c4c34a16891f84e7b', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `ID_PEMBAYARAN` varchar(10) NOT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `ID_DAFTAR` int(10) DEFAULT NULL,
  `TOTAL_PEMBAYARAN` varchar(100) DEFAULT NULL,
  `STATUS_MEMBER` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `ID_DAFTAR` int(10) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `UMUR` varchar(50) NOT NULL,
  `NAMA_BAPAK` varchar(200) NOT NULL,
  `NAMA_IBU` varchar(200) NOT NULL,
  `NO_HP` varchar(12) NOT NULL,
  `ID_JK` varchar(10) NOT NULL,
  `ID_JENJANG` varchar(10) NOT NULL,
  `ID_PAKET` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`ID_DAFTAR`, `NAMA`, `ALAMAT`, `UMUR`, `NAMA_BAPAK`, `NAMA_IBU`, `NO_HP`, `ID_JK`, `ID_JENJANG`, `ID_PAKET`) VALUES
(1, 'ana', 'pamekasan', '9 tahun', 'andi', 'sulaiha', '08523333', 'PR', 'J02', 'Prv02'),
(2, 'helmi', 'bangkalan', '17', 'andi', 'ani', '09111', 'LK', 'J04', 'Prv03'),
(3, 'alan', 'pamekasan', '17', 'andi', 'maymunah', '111111', 'LK', 'J04', 'Prv04'),
(4, 'ririk', 'pamekasan', '7', 'aam', 'iim', '111111', 'PR', 'J02', 'Prv02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_JK`),
  ADD KEY `NO` (`NO`);

--
-- Indeks untuk tabel `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
  ADD PRIMARY KEY (`ID_JENJANG`);

--
-- Indeks untuk tabel `tbl_jk`
--
ALTER TABLE `tbl_jk`
  ADD PRIMARY KEY (`ID_JK`);

--
-- Indeks untuk tabel `tbl_les`
--
ALTER TABLE `tbl_les`
  ADD PRIMARY KEY (`ID_PAKET`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`NO`),
  ADD KEY `ID` (`ID`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_ADMIN`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_DAFTAR`);

--
-- Indeks untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`ID_DAFTAR`),
  ADD KEY `ID_JENJANG` (`ID_JENJANG`),
  ADD KEY `ID_JK` (`ID_JK`),
  ADD KEY `ID_PAKET` (`ID_PAKET`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `ID_DAFTAR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_JK`) REFERENCES `tbl_jk` (`ID_JK`),
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`NO`) REFERENCES `tbl_login` (`NO`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `role_id` (`ID`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `tbl_admin` (`ID_ADMIN`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD CONSTRAINT `tbl_pendaftaran_ibfk_1` FOREIGN KEY (`ID_JENJANG`) REFERENCES `tbl_jenjang` (`ID_JENJANG`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pendaftaran_ibfk_2` FOREIGN KEY (`ID_JK`) REFERENCES `tbl_jk` (`ID_JK`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pendaftaran_ibfk_3` FOREIGN KEY (`ID_PAKET`) REFERENCES `tbl_les` (`ID_PAKET`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
