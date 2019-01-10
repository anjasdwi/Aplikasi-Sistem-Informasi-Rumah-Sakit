-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Februari 2014 jam 16:22
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kd_dokter` varchar(10) NOT NULL,
  `kd_poli` varchar(10) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `SIP` varchar(10) NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `kd_poli`, `tgl_kunjungan`, `kd_user`, `nm_dokter`, `SIP`, `tmpt_lahir`, `no_telp`, `alamat`) VALUES
('dkt01', 'Plk01', '2014-02-01', 'User01', 'Anjas Dwi', 'Malam', 'Karawang', '085697981319', 'Tunggakjati'),
('dkt01', 'plk02', '2014-01-12', 'User01', 'Anjas Dwi', 'Malam', 'Karawang', '085697981319', 'Tunggakjati'),
('dkt01', 'Plk01', '2014-02-18', 'User01', 'Anjas Dwi', 'Malam', 'Karawang', '085697981319', 'Tunggakjati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` varchar(10) NOT NULL,
  `kd_poli` varchar(10) NOT NULL,
  `jam_kunjungan` time NOT NULL,
  PRIMARY KEY (`tgl_kunjungan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`tgl_kunjungan`, `no_pasien`, `kd_poli`, `jam_kunjungan`) VALUES
('2014-02-18', '3', 'Plk01', '12:00:00'),
('2014-01-12', '3', 'plk02', '23:57:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE IF NOT EXISTS `laboratorium` (
  `kd_lab` varchar(10) NOT NULL,
  `no_RM` varchar(10) NOT NULL,
  `hasil_lab` varchar(15) NOT NULL,
  `ket_lab` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_lab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`kd_lab`, `no_RM`, `hasil_lab`, `ket_lab`) VALUES
('lab01', '1', 'Positif', 'No Comment'),
('Lab03', '4', 'Positif', 'keterangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
('User01', 'dwi', 'abc123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kd_obat` varchar(10) NOT NULL,
  `nm_obat` varchar(30) NOT NULL,
  `jml_obat` varchar(5) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `harga` varchar(15) NOT NULL,
  PRIMARY KEY (`kd_obat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`, `harga`) VALUES
('Obt01', 'Parasetamol', '10', 'tablet', '12000'),
('Obt03', 'Kalpanax', '1', 'Pak', '16000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `no_pasien` varchar(10) NOT NULL,
  `nm_pasien` varchar(30) NOT NULL,
  `j_kel` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` varchar(3) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `nm_kk` varchar(30) NOT NULL,
  `hub_kel` varchar(15) NOT NULL,
  PRIMARY KEY (`no_pasien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_telp`, `nm_kk`, `hub_kel`) VALUES
('1', 'Adi Prayitno', 'L', 'Islam', 'Tunggakjati Karawang', '1996-02-12', '18', '085697981319', 'Abdullah', 'Kandung'),
('2', 'Setyo Pamungkas', 'L', 'Islam', 'Kaceot 2 Karawang', '1996-01-08', '18', '085714743779', 'Karmin', 'Kandung'),
('3', 'Dede Zakaria', 'L', 'Islam', 'Poponcol', '1995-08-23', '18', '0216735354', 'Karya', 'Kandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kd_poli` varchar(10) NOT NULL,
  `nm_poli` varchar(30) NOT NULL,
  `lantai` int(3) NOT NULL,
  PRIMARY KEY (`kd_poli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
('Plk01', 'Umum', 1),
('plk02', 'Jantung', 2),
('plk03', 'Tulang Kaki', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `no_RM` varchar(10) NOT NULL,
  `kd_tindakan` varchar(10) NOT NULL,
  `kd_obat` varchar(10) NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `no_pasien` varchar(10) NOT NULL,
  `diagnosa` varchar(30) NOT NULL,
  `resep` varchar(30) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket_rm` varchar(50) NOT NULL,
  PRIMARY KEY (`no_RM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_RM`, `kd_tindakan`, `kd_obat`, `kd_user`, `no_pasien`, `diagnosa`, `resep`, `keluhan`, `tgl_pemeriksaan`, `ket_rm`) VALUES
('1', 'tnd01', 'Obt01', 'User01', '1', 'Demam berdarah', '3 x 1 hari', 'Demam berkepanjangan selama 1 minggu', '2014-02-01', 'No Comment'),
('4', 'tnd01', 'Obt01', 'User01', '3', 'Demam Berdarah', '3 x 1', 'Demam', '2014-02-18', 'Blablabla');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
  `kd_tindakan` varchar(10) NOT NULL,
  `nm_tindakan` varchar(30) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_tindakan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
('tnd01', 'Rawat Inap', 'No Comment'),
('tnd02', 'Rawat Jalan', 'No Comment');
