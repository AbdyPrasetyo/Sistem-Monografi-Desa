-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2024 pada 00.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `batas_wilayah`
--

CREATE TABLE `batas_wilayah` (
  `id_batas_wilayah` int(11) NOT NULL,
  `utara` varchar(255) DEFAULT NULL,
  `selatan` varchar(255) DEFAULT NULL,
  `barat` varchar(255) DEFAULT NULL,
  `timur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `batas_wilayah`
--

INSERT INTO `batas_wilayah` (`id_batas_wilayah`, `utara`, `selatan`, `barat`, `timur`) VALUES
(4, 'sda', 'dsa', 'dsa', 'dsadd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `tahun_pembentukan` int(11) DEFAULT NULL,
  `dasar_hukum_pembentukan` varchar(255) DEFAULT NULL,
  `nomor_kota_wilayah` int(11) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten_kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `tingkat_perkembangan_desa` varchar(255) NOT NULL,
  `luas_wilayah` varchar(255) NOT NULL,
  `umr_kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `kelurahan`, `tahun_pembentukan`, `dasar_hukum_pembentukan`, `nomor_kota_wilayah`, `kode_pos`, `kecamatan`, `kabupaten_kota`, `provinsi`, `tingkat_perkembangan_desa`, `luas_wilayah`, `umr_kabupaten`) VALUES
(6, 'sanggamn', 'Tanjung Redeb', 19500, 'Keraton Sambaliung', 22932040, 773110, 'Tanjung Redeb', 'Berau', 'Kalimantan Timur', 'Swadayas', '75000', '340000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jarak_pemerintahan`
--

CREATE TABLE `jarak_pemerintahan` (
  `id_jarak_pemerintahan` int(11) NOT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jarak_pemerintahan`
--

INSERT INTO `jarak_pemerintahan` (`id_jarak_pemerintahan`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(5, '12.008', '10.113', '123.4535');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sarana_prasarana` int(11) NOT NULL,
  `sarana_desa` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id_sarana_prasarana`, `sarana_desa`, `jumlah`) VALUES
(1, 'PAUD Bhayangkara', '5'),
(2, 'SDN NEGERI POTA', '1'),
(3, 'Posyandu', '3'),
(5, 'Rumah Sakit Medical Center', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(15) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `ket_foto`, `foto`) VALUES
(1, 'Penerimaan KKN Universitas Janabadra                    ', '980568208_428228082_IMG_4406.png'),
(2, 'Kerja Bakti                    ', '939119710_326249133_IMG_4560.png'),
(3, 'Pengambilan Data Monografi                    ', '292439107_1676753648_IMG_5053.png'),
(11, 'fvgyfy                    ', '1514869936_455097756_1394801946_IMG_4406.png'),
(12, 'huh                    ', '1831576668_292439107_1676753648_IMG_5053.png'),
(13, 'ujhjk                    ', '1486213837_939119710_326249133_IMG_4560.png'),
(14, '                         makan makan\"\r\n                    \"\r\n                    \"\r\n                    \"\r\n                    \"\r\n                    ', '684230390_BingWallpaper.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `level`) VALUES
(1, 'DUKUH'),
(2, 'RT01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `jk` enum('PRIA','WANITA') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(30) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','S1','S2') NOT NULL,
  `pekerjaan` enum('Buruh','PNS','Wirausaha','Swasta','BUMN') NOT NULL,
  `status` enum('Menikah','Belum Menikah','Cerai Mati','Cerai Hidup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nama`, `no_kk`, `nik`, `alamat`, `rt`, `jk`, `tempat_lahir`, `tanggal_lahir`, `usia`, `agama`, `pendidikan`, `pekerjaan`, `status`) VALUES
(56, 'Reza Abdy Prasetyo', '1111111221212121', '1121111111111111', 'jl Sa maulana', 'RT21', 'PRIA', 'Berau', '2024-03-16', '16-19 tahun', 'Islam', 'SMA/SMK', 'Buruh', 'Menikah'),
(57, 'kdskandkan', '3232323232323232', '2323232323232323', 'jalasnsdads a', 'RT09', 'PRIA', 'Berau', '2024-03-16', '', 'Islam', 'SD', 'Buruh', 'Menikah'),
(58, 'konotasi', '2321313232432423', '4324322222222222', '-', 'RT3444', 'PRIA', '4324', '2024-03-16', '66-100 tahun', 'Islam', 'SD', 'Buruh', 'Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(15) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul`, `isi`, `tgl_post`) VALUES
(2, 'Gotongroyong', 'Diharap Kehadiran Bapak Ibu Padukuhan Combongan Pada Hari Minggu                    	                    ', '2023-12-04'),
(3, 'Kumpulan Rutin malam senin', 'Di rumah Pak Parno                                        ', '2023-09-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `email`, `subject`, `pesan`) VALUES
(6, 'laras', '09larasati@gmail.com', 'Kritikan', 'pak lebih baik tidak terlalu banyak iyuran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id_struktur` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `nama`, `level`, `foto`) VALUES
(2, 'Sugianto, S.Pd', 'DUKUH', '1415799011_dokter.jpg'),
(4, 'Reza Abdy Prasetyo', 'dsd', '712151023_BingWallpaper.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'user', 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topologi_desa`
--

CREATE TABLE `topologi_desa` (
  `id_topologi` int(11) NOT NULL,
  `jenis_topologi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `topologi_desa`
--

INSERT INTO `topologi_desa` (`id_topologi`, `jenis_topologi`, `jumlah`) VALUES
(1, 'Persawahan', 15),
(2, 'Perkebunan', 0),
(3, 'Pertambangan/Galian', 0),
(4, 'Peternakan', 0),
(5, 'Perladangan', 0),
(6, 'Kerajinan dan Industri Kecil', 0),
(7, 'Jasa dan Perdagangan', 0),
(8, 'Industri sedang dan besar', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `batas_wilayah`
--
ALTER TABLE `batas_wilayah`
  ADD PRIMARY KEY (`id_batas_wilayah`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `jarak_pemerintahan`
--
ALTER TABLE `jarak_pemerintahan`
  ADD PRIMARY KEY (`id_jarak_pemerintahan`);

--
-- Indeks untuk tabel `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sarana_prasarana`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `topologi_desa`
--
ALTER TABLE `topologi_desa`
  ADD PRIMARY KEY (`id_topologi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `batas_wilayah`
--
ALTER TABLE `batas_wilayah`
  MODIFY `id_batas_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jarak_pemerintahan`
--
ALTER TABLE `jarak_pemerintahan`
  MODIFY `id_jarak_pemerintahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarana_prasarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `topologi_desa`
--
ALTER TABLE `topologi_desa`
  MODIFY `id_topologi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
