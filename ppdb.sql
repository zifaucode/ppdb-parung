-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2021 pada 18.37
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_unbk`
--

CREATE TABLE `tbl_nilai_unbk` (
  `id_nilai_unbk` int(11) NOT NULL,
  `mapel_unbk` varchar(100) DEFAULT NULL,
  `nilai_unbk` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_usbn`
--

CREATE TABLE `tbl_nilai_usbn` (
  `id_nilai_usbn` int(10) NOT NULL,
  `mapel_usbn` varchar(100) DEFAULT NULL,
  `nilai_usbn` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'Tdk Sekolah'),
(2, 'SD/MI'),
(3, 'SMP/MTs'),
(4, 'SMA/SMK/MA'),
(5, 'DIPLOMA'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `ket_pekerjaan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `ket_pekerjaan`) VALUES
(1, 'Buruh', 'ayah'),
(2, 'Tani', 'ayah'),
(3, 'Wiraswasta', 'ayah'),
(4, 'PNS', 'ayah'),
(5, 'TNI/POLRI', 'ayah'),
(6, 'Perangkat Desa', 'ayah'),
(7, 'Nelayan', 'ayah'),
(8, 'Lain-lain ', 'ayah'),
(9, 'Ibu Rumah Tangga\r\n', 'ibu'),
(10, 'Buruh', 'ibu'),
(11, 'Tani', 'ibu'),
(12, 'Wiraswasta', 'ibu'),
(13, 'PNS', 'ibu'),
(14, 'TNI/POLRI', 'ibu'),
(15, 'Perangkat Desa', 'ibu'),
(16, 'Nelayan', 'ibu'),
(17, 'Lain-lain', 'ibu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id_penghasilan` int(10) NOT NULL,
  `nama_penghasilan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id_penghasilan`, `nama_penghasilan`) VALUES
(1, '< 500rb'),
(2, '500-1jt'),
(3, '1jt-3jt'),
(4, '3jt-5jt'),
(5, '5jt-10jt'),
(6, '>10jt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Keterangan :</u></strong></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp;<strong>*</strong>&nbsp;cetak&nbsp;Surat Pengumuman ini sebagai bukti&nbsp; lulus seleksi Jalur Prestasi dan Masukan&nbsp;Pada Map Daftar Ulang</span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span></span></span></p>\r\n</body>\r\n</html>\r\n', '2018-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` int(10) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `semester1` int(10) DEFAULT NULL,
  `semester2` int(10) DEFAULT NULL,
  `semester3` int(10) DEFAULT NULL,
  `semester4` int(10) DEFAULT NULL,
  `semester5` int(10) DEFAULT NULL,
  `rata_rata_nilai` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `mapel`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `rata_rata_nilai`, `no_pendaftaran`) VALUES
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 70, 80, 80, 80, 78, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(14, 'Bahasa Indonesia', 60, 80, 80, 80, 80, 76, 'PSB18004001'),
(13, 'Matematika', 60, 80, 60, 80, 80, 72, 'PSB18004001'),
(12, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(17, 'Ilmu Pengetahuan Sosial (IPS)', 80, 70, 80, 70, 80, 76, 'PSB18004002'),
(18, 'Matematika', 80, 80, 80, 80, 90, 82, 'PSB18004002'),
(19, 'Bahasa Indonesia', 80, 80, 80, 80, 50, 74, 'PSB18004002'),
(20, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004002'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 60, 50, 78, 68, 80, 67, 'PSB18004003'),
(22, 'Ilmu Pengetahuan Sosial (IPS)', 59, 80, 81, 67, 66, 71, 'PSB18004003'),
(23, 'Matematika', 80, 83, 54, 55, 78, 70, 'PSB18004003'),
(24, 'Bahasa Indonesia', 78, 98, 78, 88, 86, 86, 'PSB18004003'),
(25, 'Bahasa Inggris', 89, 89, 88, 80, 80, 85, 'PSB18004003'),
(26, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(27, 'Ilmu Pengetahuan Sosial (IPS)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(28, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(29, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(30, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(31, 'Ilmu Pengetahuan Alam (IPA)', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(32, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(33, 'Matematika', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(34, 'Bahasa Indonesia', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(35, 'Bahasa Inggris', 100, 100, 100, 100, 75, 95, 'PSB18004005'),
(36, 'Ilmu Pengetahuan Alam (IPA)', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(37, 'Ilmu Pengetahuan Sosial (IPS)', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(38, 'Matematika', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(39, 'Bahasa Indonesia', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(40, 'Bahasa Inggris', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(41, 'Ilmu Pengetahuan Alam (IPA)', 75, 75, 75, 75, 75, 75, 'PSB18004007'),
(42, 'Ilmu Pengetahuan Sosial (IPS)', 75, 80, 80, 80, 80, 79, 'PSB18004007'),
(43, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(44, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(45, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(46, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(47, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(48, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(49, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(50, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(51, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(52, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(53, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(54, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(55, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(56, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(57, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(58, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(59, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(60, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(61, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(62, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(63, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(64, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(65, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(66, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004012'),
(67, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004012'),
(68, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004012'),
(69, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004012'),
(70, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004012'),
(71, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PPDB-NEVAR18004013'),
(72, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PPDB-NEVAR18004013'),
(73, 'Matematika', 100, 100, 100, 100, 100, 100, 'PPDB-NEVAR18004013'),
(74, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PPDB-NEVAR18004013'),
(75, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PPDB-NEVAR18004013'),
(76, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PPDB-NVR0020210607-XAR2'),
(77, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PPDB-NVR0020210607-XAR2'),
(78, 'Matematika', 100, 100, 100, 100, 100, 100, 'PPDB-NVR0020210607-XAR2'),
(79, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PPDB-NVR0020210607-XAR2'),
(80, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PPDB-NVR0020210607-XAR2'),
(81, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PPDB-NVR202106X00003'),
(82, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PPDB-NVR202106X00003'),
(83, 'Matematika', 100, 100, 100, 100, 100, 100, 'PPDB-NVR202106X00003'),
(84, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PPDB-NVR202106X00003'),
(85, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PPDB-NVR202106X00003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text,
  `nis` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `alamat_siswa` text,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `no_hp_ayah` varchar(14) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `no_hp_ibu` varchar(14) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_wali` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `model_un` varchar(100) DEFAULT NULL,
  `alamat_sekolah` text,
  `thn_lulus` year(4) DEFAULT NULL,
  `rayonisasi` varchar(100) DEFAULT NULL,
  `foto` text,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL,
  `desk_capaian` text NOT NULL,
  `jenis_prestasi` varchar(255) DEFAULT NULL,
  `nama_prestasi` text,
  `tingkat_prestasi` varchar(255) DEFAULT NULL,
  `linkvid_prestasi` text,
  `linksert_prestasi` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `tgl_daftar`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin', '2018-04-12 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text,
  `ket` text,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Materi Tes Potensi Akdemik :</u></strong></span></span><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u> </u></strong></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Bahasa Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal </span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; 2.&nbsp;Bahasa Inggris&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal </span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; 3.&nbsp;Matematika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal&nbsp;&nbsp; </span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; 4. IPA </span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fisika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 12 soal</span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Biologi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: 13 soal </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Hari Tanggal tes : </u></strong></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;tanggal 3 s.d 5 Juli 2018</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Waktu Tes potensi Akademik :</u></strong></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 1&nbsp; : 07.00 - 09.00</span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 2&nbsp; : 09.30 - 11.30<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sesi 3&nbsp; : 12.00 - 14.00</span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 4&nbsp; : 14.30 - 16.30</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*<em>catatan : </em></span></span></strong><br />\r\n<strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em>jadwal ujian bisa berubah sewaktu - waktu&nbsp; Update infomasi di web PPDB </em></span></span><em><span style=\"font-size:11.0pt\">peserta ujian datang 15&nbsp; menit sebelun tes dimulai.</span></em></strong></p>\r\n</body>\r\n</html>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2021-05-29 09:38:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_nilai_unbk`
--
ALTER TABLE `tbl_nilai_unbk`
  ADD PRIMARY KEY (`id_nilai_unbk`);

--
-- Indeks untuk tabel `tbl_nilai_usbn`
--
ALTER TABLE `tbl_nilai_usbn`
  ADD PRIMARY KEY (`id_nilai_usbn`);

--
-- Indeks untuk tabel `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id_pdd`);

--
-- Indeks untuk tabel `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- Indeks untuk tabel `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_unbk`
--
ALTER TABLE `tbl_nilai_unbk`
  MODIFY `id_nilai_unbk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_usbn`
--
ALTER TABLE `tbl_nilai_usbn`
  MODIFY `id_nilai_usbn` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id_pdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  MODIFY `id_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  MODIFY `id_rapor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  MODIFY `id_verifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
