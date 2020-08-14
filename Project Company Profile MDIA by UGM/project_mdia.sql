-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 11:08 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_mdia`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`) VALUES
(6, 'Struktur Organisasi Perusahaan'),
(7, 'Struktur Grup Perusahaan'),
(8, 'Lembar Fakta'),
(9, 'Struktur Pemegang Saham'),
(10, 'Program Kami'),
(11, 'Bisnis'),
(12, 'dummy1');

-- --------------------------------------------------------

--
-- Table structure for table `album_en`
--

CREATE TABLE `album_en` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_en`
--

INSERT INTO `album_en` (`id_album`, `jdl_album`) VALUES
(6, 'Struktur Organisasi Perusahaan'),
(7, 'Struktur Grup Perusahaan'),
(8, 'Lembar Fakta'),
(9, 'Struktur Pemegang Saham'),
(10, 'Program Kami'),
(11, 'Bisnis'),
(12, 'eng1');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `idkategori` int(5) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `username`, `idkategori`, `judul_berita`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`) VALUES
(3, 'Dev', 1, 'Laporan Tahunan 2016', '', 'Senin', '2018-08-13', '12:38:08', 'MDIA-AR-2016_A4_Preview_full-1.jpg'),
(5, 'Dev', 1, 'Laporan Tahunan 2015', '', 'Senin', '2018-08-13', '12:38:21', 'Annual-Report_MDIA_2015-1.jpg'),
(6, 'Dev', 1, 'Laporan Tahunan 2014', '', 'Senin', '2018-08-13', '12:38:34', 'Annual-Report_MDIA_2014-1.jpg'),
(7, 'Dev', 1, 'Laporan Tahunan 2013', '', 'Senin', '2018-08-13', '12:38:48', 'Annual-Report_MDIA_2013-1.jpg'),
(10, 'Dev', 3, '28 Desember 2017', '<p>Keterbukaan Informasi kepada Pemegang Saham Terkait Afiliasi yang Mengandung Unsur Benturan Kepentingan dan Transaksi Material PT Intermedia Capital Tbk.</p>\r\n', 'Senin', '2018-08-13', '12:39:15', ''),
(11, 'Dev', 3, '31 Oktober 2017', '<p>Penelaahan Terbatas (Limited Review) Laporan Keuangan Interim</p>\r\n', 'Senin', '2018-08-13', '12:39:35', ''),
(12, 'Dev', 3, '17 Oktober 2017', '<p>Keterbukaan Informasi Laporan Informasi dan Fakta Material</p>\r\n', 'Senin', '2018-08-13', '12:39:49', ''),
(15, 'Dev', 7, 'Prospektus MDIA', '', 'Senin', '2018-08-13', '12:37:48', 'Prospektus.png'),
(16, 'Dev', 5, 'Mei 2017', '<p>Paparan Publik MDIA Mei 2017</p>\r\n', 'Senin', '2018-08-13', '13:55:02', ''),
(17, 'admin', 8, ' Anindya Novyan Bakrie', '<p>Komisaris Utama</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Jakarta tahun 1974.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Komisaris Utama Perseroan sejak tahun 2013 berdasarkan Akta No. 115 tanggal 11 Desember, 2013 yang dibuat di hadapan Humberg Lie, S.H., S.E., M.Kn., notaris di Jakarta (&ldquo;Akta No. 115/2013&rdquo;). Saat ini beliau juga menjabat sebagai Presiden Direktur PT Visi Media Asia Tbk. sejak tahun 2014, CEO PT Bakrie Global Ventura sejak 2012, Komisaris PT Lativi Mediakarya sejak tahun 2017, Presiden Komisaris PT Cakrawala Andalas Televisi sejak tahun 2009, Komisaris PT Bakrie Sumatera Plantations Tbk. sejak 2012 dan Komisaris Utama PT Bakrie Telecom Tbk. sejak tahun 2013.</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Anindya Novyan Bakrie memperoleh gelar Bachelor of Science dari Northwestern University, Illinois, jurusan Industrial Engineering pada tahun 1996 dan MBA dari Stanford Graduate School of BusinessCalifornia, Amerika Serikat, pada tahun 2001.</p>\r\n', 'Kamis', '2018-08-09', '09:37:58', 'AnindyaNovyanBakrie-2.jpg'),
(18, 'admin', 8, 'Robertus Bismarka Kurniawan', '<p>Komisaris</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Jakarta tahun 1971.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Komisaris Perseroan sejak tanggal 11 Desember 2013 berdasarkan Akta No. 115/2015. Saat ini beliau juga menjabat sebagai Komisaris Utama PT Digital Media Asia sejak 2015, Komisaris PT Bakrie Global Ventura sejak 2013, Komisaris PT Visi Media Asia Tbk. sejak 2017, Komisaris PT Viva Media Baru sejak tahun 2017,Komisaris PT Cakrawala Andalas Televisi dan PT Asia Global Media sejak tahun 2009, dan Komisaris PT Lativi Mediakarya sejak tahun 2007.</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Robertus Bismarka Kurniawan memperoleh gelar Bachelor of Science di bidang Teknik Sipil dari University of Southern California, Amerika Serikat pada tahun 1993, gelar Master of Science jurusan Structural Engineering dari Cornell University, Amerika Serikat pada tahun 1994 diikuti gelar MBA jurusan Finance and Investment Banking dari University of Winconsin-Madison, Wisconsin, Amerika Serikat pada tahun 1995.</p>\r\n', 'Kamis', '2018-08-09', '09:38:37', 'RobertusBismarkaKurniawan.jpg'),
(19, 'Dev', 8, ' Anindra Ardiansyah Bakrie', '<p>Komisaris</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Jakarta tahun 1979.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Komisaris Perseroan sejak tahun 2017, dimana sebelumnya menjabat sebagai Direktur VIVA sejak tahun 2011. Saat ini juga menjabat sebagai Wakil Presiden Direktur PT Visi Media Asia Tbk., Komisaris Utama PT Lativi Mediakarya sejak tahun 2017, Komisaris PT Cakrawala Andalas Televisi sejak tahun 2017, Presiden Komisaris PT Viva Media Baru sejak 2017 dan Direktur di PT Bakrie Global Ventura. Sebelumnya pernah menjabat sebagai Presiden Direktur PT Viva Media Baru sejak 2012 hingga 2017, dan Komisaris PT Asia Global Media sejak 2009 hingga 2012.</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Anindra Ardiansyah Bakrie memperoleh gelar Bachelor of Science di bidang Finance and International Business dari Georgetown University, Washington DC, Amerika Serikat pada tahun 2001, dan gelar M.B.A. di bidang Finance dari Bentley, McCallum Graduate School of Business, Amerika Serikat pada tahun 2005.</p>\r\n', 'Kamis', '2018-08-09', '09:39:03', 'Anindra_Ardiansyah_Bakrie1.jpg'),
(20, 'Dev', 8, 'Ilham Akbar Habibie', '<p>Komisaris Independen</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Aachen tahun 1963.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Komisaris Independen Perseroan sejak tahun 2013 berdasarkan Akta No. 115/2013. Beliau juga menjabat berbagai posisi saat ini sebagai Komisaris Utama PT Industri Mineral Indonesia sejak 2012, Komisaris PT Malacca Trust Wuwungan Insurance sejak 2011, Komisaris Utama PT Ilthabi Digital Edukasi sejak 2011, Komisaris Utama PT Ilthabi Energia sejak 2009, Komisaris Utama PT Ilthabi Sentra Herbal sejak 2005, Direktur NonEksekutif Mitra Energia Ltd. sejak 2004, Komisaris PT Citra Tubindo Tbk. sejak 2004, Direktur Utama PT Ilthabi Rekatama sejak 2002, dan Komisaris PT Metinca Prima Industrial Work sejak 2000. Sebelumnya beliau pernah menjabat sebagai Asisten Kepala BPPT untuk Aeronautika dan Teknologi Lanjutan (1996&ndash;1998), Dosen Fakultas Teknik Industri Institut Teknologi Bandung (1997&ndash;1999), Direktur Komersial PT Dirgantara Indonesia (Persero) (2000&ndash;2001), Direktur Operasional dan Komersial PT Dirgantara Indonesia (Persero) (1999&ndash;2000), Wakil Presiden Direktur Eksekutif Unit Bisnis Pesawat-Manajer Program N2130 Regional Jet PT Dirgantara Indonesia (Persero) (1997&ndash;1999), Wakil Presiden Direktur-Program Manager N2130 Regional Jet (1995&ndash;1997), dan Asisten Direktur Utama untuk Program N2130 Regional Jet (1994&ndash;1995).</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Ilham A. Habibie memperoleh gelar Diplomarbeit (Strata 2) dari Technische Universit&auml;t M&uuml;nchen pada tahun 1987, gelar Dipl.,-Ing dari Technische Universit&auml;t M&uuml;nchen jurusan Teknik Aeronautika pada tahun 1987, dan gelar Dr,-Ing dari Technische Universit&auml;t M&uuml;nchen jurusan Teknik Aeronautika. Berhasil menyelesaikan Program Eksekutif Internasional di INSEAD, Perancis, dan Singapura pada tahun 1999, dan memperoleh gelar Master of Business Administration dari University of Chicago, Amerika Serikat untuk jurusan Bisnis pada tahun 2013.</p>\r\n', 'Kamis', '2018-08-09', '09:39:22', 'IlhamAHabibie.jpg'),
(21, 'Dev', 8, ' C. F. Carmelita Hardikusumo', '<p>Komisaris Independen</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Surabaya tahun 1964.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Beliau menjabat sebagai Komisaris Independen Perseroan sejak tahun 2017. Saat ini beliau juga menjabat sebagai Direktur PT Adhiraksha (1995 s/d Sekarang), Direktur Utama PT Andhini Nugraha (1998 s/Sekarang), Direktur Utama PT Andhika Lines (Oktober 2005 &ndash; Sekarang), dan Komisaris PT Andhika GAC (2005 s/d Sekarang). Beliau juga pernah menjabat sebagai Komisaris PT Andhini Nugraha (1997 s/d 1998); Komisaris PT Andhika Lines (1995 s/d 1997) dan Direktur PT Andhika Lines (1997 s/d 2005). Carmelita juga aktif dalam organisasi Kamar Dagang dan Industri (KADIN) dan Dewan Pengurus Pusat Indonesian National Shipowner&rsquo;s Association/INSA (DPP INSA). Beberapa jabatan penting pernah dijabat oleh beliau dan saat ini beliau menjabat sebagai Bendahara KADIN (Jan 2013-Sekarang) dan Wakil ketua Umum Bidang Perhubungan KADIN (November 2015-2020). Beliau menjabat sebagai ketua Umum DPP INSA untuk 2 periode yaitu 2011-2015 dan 2015-2019 sekaligus sebagai wanita pertama yang menjabat posisi tersebut.</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>C. F. Carmelita Hardikusumo, memperoleh gelar MBA Finance dari Webster University, Amerika Serikat pada tahun 1994.</p>\r\n', 'Kamis', '2018-08-09', '09:39:43', 'C__F__Carmelita_Hardikusumo.jpg'),
(22, 'Dev', 9, ' Erick Thohir', '<p>Direktur Utama</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Jakarta tahun 1970.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Presiden Direktur Perseroan sejak tahun 2013 berdasarkan Akta No. 115/2013. Menjabat pula sebagai Wakil Presiden Komisaris PT Visi Media Asia Tbk. (2014-sekarang), Presiden Direktur PT Cakrawala Andalas Televisi (2013-sekarang), Komisaris PT Asia Global Media, PT Viva Media Baru, dan PT Lativi Mediakarya (2012-sekarang), Komisaris Utama PT Redal Semesta (2012-sekarang), Komisaris PT Beyond Media (2011-sekarang), Komisaris PT Mahaka Media Tbk. (2008-sekarang), Komisaris Utama PT Entertainment Live (2008-sekarang), dan Direktur PT Trinugraha Thohir Media Partners (2011-sekarang).</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Erick Thohir memperoleh gelar AA untuk Communication dari Glendale College, California Amerika Serikat, pada tahun 1990, gelar BA jurusan Advertising dari American College, California, Amerika Serikat, pada tahun 1991, dan MBA Marketing dari National University, California, Amerika Serikat pada tahun 1993.</p>\r\n', 'Kamis', '2018-08-09', '09:51:20', 'ErickThohir.jpg'),
(23, 'Dev', 9, ' RM Harlin Erlianto Rahardjo', '<p>Direktur</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Jakarta tahun 1972.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Direktur Perseroan sejak tahun 2013 berdasarkan Akta No. 115/2013, bertanggung jawab di bidang keuangan &amp; akuntansi dan komersial.&nbsp;<br />\r\nJuga menjabat sebagai Presiden Direktur PT Transcoal Pacific sejak tahun 2009 dan Presiden Komisaris PT Renjani Maritim Transportasi sejak 2008. Sebelumnya pernah menjabat sebagai Direktur PT Visi Media Asia Tbk. sejak tahun 2011 hingga 2014 dan Direktur Operasional PT Cakrawala Andalas Televisi sejak tahun 2002 hingga 2006.</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Harlin Rahardjo meraih gelar Sarjana Teknik dari Institut Teknologi Bandung jurusan Teknik Industri pada tahun 1995 dan gelar Master of Science dari Columbia University, New York, Amerika Serikat untuk jurusan Industrial Engineering and Operation Research pada tahun 1997.</p>\r\n', 'Kamis', '2018-08-09', '09:52:11', 'RMHarlinErliantoRahardjo.jpg'),
(24, 'Dev', 9, ' Juliandus A. Lumban Tobing', '<p>Direktur Independen</p>\r\n\r\n<p>Warga Negara Indonesia, lahir di Jakarta tahun 1964.</p>\r\n\r\n<h3>Riwayat Jabatan Dan Pengalaman Kerja</h3>\r\n\r\n<p>Menjabat sebagai Direktur Independen Perseroan yang bertanggung jawab untuk bidang perencanaan strategis sejak tahun 2013 berdasarkan Akta No. 115/2013.&nbsp;<br />\r\nSaat ini beliau juga menjabat sebagai Konsultan Kantor Hukum MSA dan Penasehat Hukum Independen sejak 2012. Sebelumnya pernah menjabat sebagai Direktur PT Bakrie Telecom Tbk. (2006-2010), Direktur PT Bakrie &amp; Brothers Tbk. (2004-2008), Senior Legal Officer pada PT Bank Dai-Chi Kanyo Indonesia (1997-1999), Associate pada Kantor Hukum Kusnandar &amp; Associates (1995-1997).</p>\r\n\r\n<h3>Riwayat Pendidikan</h3>\r\n\r\n<p>Juliandus meraih gelar Sarjana Hukum dari Universitas Padjadjaran, Indonesia, pada tahun 1990.</p>\r\n', 'Kamis', '2018-08-09', '09:52:32', 'JuliandusA_LumbanTobing.jpg'),
(25, 'Dev', 10, 'Kantor Akuntan Publik', '<p>Handoko Tomo Samuel Gunawan &amp; Rekan (Moores Rowland)</p>\r\n\r\n<p>Marccus Building 3fl.</p>\r\n\r\n<p>Jl.Majapahit No. 10</p>\r\n\r\n<p>Jakarta 10160</p>\r\n', 'Kamis', '2018-08-09', '11:37:10', ''),
(26, 'Dev', 10, 'Notaris Publik', '<p>Humberg Lie, S.H., S.E., M.kn.</p>\r\n\r\n<p>Jl. Raya Pluit Selatan 103, Pluit</p>\r\n\r\n<p>Jakarta 14450</p>\r\n', 'Kamis', '2018-08-09', '11:36:56', ''),
(27, 'Dev', 10, 'Konsultan Hukum', '<p>Hadiputranto, Hadinoto &amp; Partners</p>\r\n\r\n<p>Indonesia Stock Exchange Building, Tower II</p>\r\n\r\n<p>Lantai 21 Sudirman Central Business District</p>\r\n\r\n<p>Jl. Jend. Sudirman Kav. 52-53,</p>\r\n\r\n<p>Jakarta 12190</p>\r\n', 'Kamis', '2018-08-09', '11:36:38', ''),
(28, 'Dev', 10, 'Biro Administrasi Efek', '<p>PT Sinartama Gunita</p>\r\n\r\n<p>Sinar Mas Land Plaza, Menara 1 lantai 9,</p>\r\n\r\n<p>Jl. MH. Thamrin. No. 51,</p>\r\n\r\n<p>Jakarta 10350</p>\r\n', 'Kamis', '2018-08-09', '11:36:05', ''),
(29, 'Muhamad Devian Ramadhan', 10, 'contoh1', '<p>asdf</p>\r\n', 'Rabu', '2018-08-15', '13:33:56', 'Annual-Report_MDIA_2015-15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita_deviden_en`
--

CREATE TABLE `berita_deviden_en` (
  `id_dividen` int(11) NOT NULL,
  `total_dividen` varchar(255) NOT NULL,
  `jml_dividen` varchar(255) NOT NULL,
  `payout` varchar(255) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_pembagian` date NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_deviden_en`
--

INSERT INTO `berita_deviden_en` (`id_dividen`, `total_dividen`, `jml_dividen`, `payout`, `tgl_pengumuman`, `tgl_pembagian`, `tahun`) VALUES
(2, '32,9%', '100%', '32,9%', '1919-02-13', '2312-01-20', 0),
(12, 'Rp39.215.538.400', 'Rp10,00', '100%', '2014-08-13', '2014-09-17', 0),
(45, 'Rp101.960.399.840', 'Rp26,-', '15,8%', '2018-08-31', '2018-08-24', 0),
(12334, '32,9%', '32,9%', '32,9%', '1234-03-09', '3232-02-23', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `berita_dividen`
--

CREATE TABLE `berita_dividen` (
  `id_dividen` int(11) NOT NULL,
  `total_dividen` varchar(255) NOT NULL,
  `jml_dividen` varchar(255) NOT NULL,
  `payout` varchar(255) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_pembagian` date NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_dividen`
--

INSERT INTO `berita_dividen` (`id_dividen`, `total_dividen`, `jml_dividen`, `payout`, `tgl_pengumuman`, `tgl_pembagian`, `tahun`) VALUES
(2, '32,9%', '100%', '32,9%', '1919-02-13', '2312-01-20', 2015),
(12, 'Rp39.215.538.400', 'Rp10,00', '32,9%', '2014-08-13', '2014-09-17', 2014),
(45, 'Rp101.960.399.840', 'Rp26,-', '15,8%', '2017-05-29', '2017-06-23', 2017),
(12334, '32,9%', '32,9%', '32,9%', '1234-03-09', '3232-02-23', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `berita_en`
--

CREATE TABLE `berita_en` (
  `id_berita` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `idkategori` int(5) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_en`
--

INSERT INTO `berita_en` (`id_berita`, `username`, `idkategori`, `judul_berita`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`) VALUES
(3, 'Dev', 1, 'Annual Report 2016', '', 'Senin', '2018-08-13', '12:38:08', 'MDIA-AR-2016_A4_Preview_full-1.jpg'),
(5, 'Dev', 1, 'Annual Report 2015', '', 'Senin', '2018-08-13', '12:38:21', 'Annual-Report_MDIA_2015-1.jpg'),
(6, 'Dev', 1, 'Annual Report 2014', '', 'Senin', '2018-08-13', '12:38:34', 'Annual-Report_MDIA_2014-1.jpg'),
(7, 'Dev', 1, 'Annual Report 2013', '', 'Senin', '2018-08-13', '12:38:48', 'Annual-Report_MDIA_2013-1.jpg'),
(10, 'Dev', 3, '28 Desember 2017', '<p>Disclosure of Information to the Shareholders on Affiliates which Contain Conflict of Interest and Material Transaction of PT Intermedia Capital Tbk.</p>\r\n', 'Senin', '2018-08-13', '12:39:15', ''),
(11, 'Dev', 3, '31 Oktober 2017', '<p>Limited Review of Interim Financial Statement</p>\r\n', 'Senin', '2018-08-13', '12:39:35', ''),
(12, 'Dev', 3, '17 Oktober 2017', '<p>Disclosure of Information and Material Fact Report</p>\r\n', 'Senin', '2018-08-13', '12:39:49', ''),
(15, 'Dev', 7, 'MDIA Prospectus', '', 'Senin', '2018-08-13', '12:37:48', 'Prospektus.png'),
(16, 'Dev', 5, 'Mei 2017', '<p>MDIA Public Expose May 2017</p>\r\n', 'Senin', '2018-08-13', '13:55:02', ''),
(17, 'admin', 8, ' Anindya Novyan Bakrie', '<p>PRESIDENT COMMISSIONER</p>\r\n\r\n<p>Indonesian citizen, born in Jakarta in 1974.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>He has served as President Commissioner of the Company. since 2013 based on Deed No. 115 dated December 11, 2013 drawn up by Humberg Lie, S.H., S.E., M. Kn., notary in Jakarta (&ldquo;Act No. 115/2013). He has concurrently served as President Director of PT Visi Media Asia Tbk. since 2014, CEO of PT Bakrie Global Ventura since 2012, Commissioner of PT Lativi Mediakarya since 2017, as President Commissioner of PT Cakrawala Andalas Televisi since 2009, as Commissioner of PT Bakrie Sumatera Plantations Tbk. since 2012, and as President Commissioner of PT Bakrie Telecom Tbk since 2013.</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>Anindya Novyan Bakrie received his Bachelor of Science degree majoring in Industrial Engineering from Northwestern University, Illinois, USA and earned his MBA degree from Stanford Graduate School of BusinessCalifornia, USA in 2001.</p>\r\n', 'Kamis', '2018-08-09', '09:37:58', 'AnindyaNovyanBakrie-2.jpg'),
(18, 'admin', 8, 'Robertus Bismarka Kurniawan', '<p>COMMISSIONER</p>\r\n\r\n<p>Indonesian citizen, born in Jakarta in 1971.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>He has served as a Commissioner of the Company since December 11, 2013 based on Deed No. 115/2013. He has concurrently served as President Commissioner of PT Digital Media Asia since 2015, Commissioner of PT Bakrie Global Ventura since 2013, Commissioner of PT Visi Media Asia Tbk. since 2017, Commissioner of PT Viva Media Baru since 2017, Commissioner of PT Cakrawala Andalas Televisi and PT Asia Global Media since 2009, and Commissioner of PT Lativi Mediakarya since 2007.</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>He earned a Bachelor of Science degree in Civil Engineering (Construction) from the University of Southern California, USA in 1993, Master of Engineering degree in Structural Engineering minoring in Business Administration at Cornell University, USA in 1994, and a Master of Business Administration degree in Finance, Investment and Banking from the University of Wisconsin-Madison, Wisconsin, USA in 1995.</p>\r\n', 'Kamis', '2018-08-09', '09:38:37', 'RobertusBismarkaKurniawan.jpg'),
(19, 'Dev', 8, ' Anindra Ardiansyah Bakrie', '<p>COMMISSIONER</p>\r\n\r\n<p>Indonesian citizen, born in Jakarta in 1979.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>He has served as the Commissioner of the Company since 2017. Currently he also serves as Vice President Director of PT Visi Media Asia Tbk., President Commissioner of PT Lativi Mediakarya since 2017, Commissioner of PT Cakrawala Andalas Televisi since 2017, President Commissioner of PT Viva Media Baru since 2017, and Director of PT Bakrie Global Ventura. Previously he also served as President Director of PT Viva Media Baru from 2012 to 2017, and Commissioner of PT Asia Global Media from 2009 to 2012.</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>Anindra Ardiansyah Bakrie earned his Bachelor of Science degree in Finance and International Business from Georgetown University, Washington DC, USA in 2001, and an M.B.A. in Finance from Bentley, McCallum Graduate School of Business, USA in 2005.</p>\r\n', 'Kamis', '2018-08-09', '09:39:03', 'Anindra_Ardiansyah_Bakrie1.jpg'),
(20, 'Dev', 8, 'Ilham Akbar Habibie', '<p>INDEPENDENT COMMISSIONER</p>\r\n\r\n<p>Indonesian citizen, born in Aachen in 1963.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>He has served as an Independent Commissioner of the Company since 2013 based on Deed No. 115/2013. He has concurrently served as President Commissioner PT Industri Mineral Indonesia from 2012, Commissioner of PT Malacca Trust Wuwungan Insurance from 2011, President Commissioner of PT Ilthabi Digital Edukasi from 2011, President Commissioner of PT Ilthabi Energia from 2009, President Commissioner of PT Ilthabi Sentra Herbal from 2005, Non-Executive Director of Mitra Energia Ltd. from 2004, Commissioner of PT Citra Tubindo Tbk. from 2004, President Director PT Ilthabi Rekatama from 2002, and Commissioner PT Metinca Prima Industrial Work from 2000. He previously served as Assistant Head of BPPT for Aeronotics and Advance Technology (1996&ndash;1998), Lecturer at the Faculty of Industrial Engineering-Institut Teknologi Bandung (1997&ndash; 1999), Commercial Director of PT Dirgantara Indonesia (2000&ndash;2001), Director of Operations and Commercial for PT Dirgantara Indonesia, (1999&ndash;2000), Executive Vice President Director Aircraft Business Unit-Program Manager for N2130 Regional Jet PT Dirgantara Indonesia (1997&ndash;1999), Vice President Director-Program Manager for N2130 Regional Jet (1995&ndash;1997), and Assistant President Director for Program N2130 Regional Jet (1994&ndash;1995).</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>Ilham A. Habibie obtained a Diplomarbeit (Graduate Degree) from the Technische Universit&auml;t M&uuml;nchen in 1987, a Dipl.,- Ing in Aeronautical Engineering from Technische Universit&auml;t M&uuml;nchen in 1987 and a Dr,-Ing from the Technische Universit&auml;t M&uuml;nchen in Aeronautical Engineering. He successfully completed the International Executive Program at INSEAD, France, and Singapore in 1999, and earned a Master of Business Administration degree majoring in Business from the University of Chicago, USA in 2013.</p>\r\n', 'Kamis', '2018-08-09', '09:39:22', 'IlhamAHabibie.jpg'),
(21, 'Dev', 8, ' C. F. Carmelita Hardikusumo', '<p>INDEPENDENT COMMISSIONER</p>\r\n\r\n<p>Indonesian citizen born in Surabaya in 1964.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>He has served as Independent Commissioner of the Company since 2017. Currently she serve as Director of PT Adhiraksha (1995 - present), President Director of PT Andhini Nugraha (1998 - present), President Director of PT Andhika Lines (2005 &ndash; present), dan Commssioner of PT Andhika GAC (2005- Present). Previously she also served as Commissioner of PT Andhini Nugraha (1997-1998); Commissioner of PT Andhika Lines (1995-1997) dan Director of PT Andhika Lines (1997- 2005). Carmelita is also active in Chamber of Commerce and Industry (KADIN) and Central Board of Indonesian National Shipowner&rsquo;s Association/INSA (DPP INSA). Several important positions have been held by her and currently she serves as Treasurer of KADIN (2013-Present) and Vice Chairman of Transportation of KADIN (November 2015-2020). He served as Chairman of DPP INSA for 2 periods, 2011-2015 and 2015-2019 as well as the first woman to hold the position.</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>C. F. Carmelita Hardikusumo, earned her MBA Finance degree from Webster University, USA in 1994.</p>\r\n', 'Kamis', '2018-08-09', '09:39:43', 'C__F__Carmelita_Hardikusumo.jpg'),
(22, 'Dev', 9, ' Erick Thohir', '<p>PRESIDENT DIRECTOR</p>\r\n\r\n<p>Indonesian Citizen, born in Jakarta in 1970.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>Appointed as President Director of the Company since 2013 based on Deed No. 115/2013. He has concurrently served as the President Director of PT Cakrawala Andalas Televisi and Commissioner of PT Asia Global Media (2013-present), President Commissioner of PT Redal Semesta (2012-present), Commissioner of PT Beyond Media (2011&ndash;present), Commissioner of PT Mahaka Media Tbk. (2008&ndash;present), President Commissioner of Utama PT Entertainment Live (2008&ndash;present), Director of PT Trinugraha Thohir Media Partners (2011&ndash;present), and President Commissioner of PT Mahaka Radio Integra Tbk. (2016 - present). He previously served as President Commissioner of PT Visi Media Asia Tbk. (2014-2017), Commissioner of PT VIVA Media Baru (2012-2017), and Commissioner of PT Lativi Mediakarya (2012-2017).</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>Erick Thohir received an AA degree majoring in Communication from Glendale College, California, USA in 1990, a BA degree majoring in Advertising from American College, California, USA in 1991, and an MBA degree majoring in Marketing from National University, California, USA in 1993.</p>\r\n', 'Kamis', '2018-08-09', '09:51:20', 'ErickThohir.jpg'),
(23, 'Dev', 9, ' RM Harlin Erlianto Rahardjo', '<p>DIRECTOR</p>\r\n\r\n<p>Indonesian Citizen, born in Jakarta in 1972.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>Serves as Director of the Company since 2013 based on Deed No. 115/2013, with responsibility for Finance &amp; Accounting and Commercial. He has concurrently served as President Director of PT Transcoal Pacific from 2009 and President Commissioner of PT Renjani Maritim Transportasi from 2008. He has previously served as Director of Visi Media Asia Tbk. from 2011 to 2014, and Director of Operations for PT Cakrawala Andalas Televisi from 2002 to 2006.</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>Harlin Rahardjo earned a Bachelor degree in Engineering from Institut Teknologi Bandung, Indonesia majoring in Industrial Engineering in 1995 and a Master of Science degree from Columbia University, New York, USA in Industrial Engineering and Operations Research in 1997.</p>\r\n', 'Kamis', '2018-08-09', '09:52:11', 'RMHarlinErliantoRahardjo.jpg'),
(24, 'Dev', 9, ' Juliandus A. Lumban Tobing', '<p>INDEPENDENT DIRECTOR</p>\r\n\r\n<p>Indonesian Citizen, born in Jakarta in 1964.</p>\r\n\r\n<h3>WORK EXPERIENCE</h3>\r\n\r\n<p>He has served as the Independent Director of the Company responsible for Strategic Planning since 2013 based on Deed No. 115/2013. He has concurrently served as Counsel in the MSA Law Office and Independent Legal Counsel from 2012. Previously he served as Director of PT Bakrie Telecom Tbk. (2006&ndash;2010), Director of PT Bakrie &amp; Brothers Tbk. (2004&ndash;2008), Senior Legal Officer at PT Bank Dai-Chi Kanyo Indonesia (1997&ndash;1999), and Associate at Kusnandar &amp; Associates Law Offices (1995&ndash;1997).</p>\r\n\r\n<h3>EDUCATION</h3>\r\n\r\n<p>Juliandus graduated from the University of Padjadjaran, Indonesia with a Bachelor of Law degree in 1990.</p>\r\n', 'Kamis', '2018-08-09', '09:52:32', 'JuliandusA_LumbanTobing.jpg'),
(25, 'Dev', 10, 'Public Accounting Firm', '<p>Handoko Tomo Samuel Gunawan &amp; Rekan (Moores Rowland)</p>\r\n\r\n<p>Marccus Building 3fl.</p>\r\n\r\n<p>Jl.Majapahit No. 10</p>\r\n\r\n<p>Jakarta 10160</p>\r\n', 'Kamis', '2018-08-09', '11:37:10', ''),
(26, 'Dev', 10, 'Public Notary', '<p>Humberg Lie, S.H., S.E., M.kn.</p>\r\n\r\n<p>Jl. Raya Pluit Selatan 103, Pluit</p>\r\n\r\n<p>Jakarta 14450</p>\r\n', 'Kamis', '2018-08-09', '11:36:56', ''),
(27, 'Dev', 10, 'Legal Consultant', '<p>Hadiputranto, Hadinoto &amp; Partners</p>\r\n\r\n<p>Indonesia Stock Exchange Building, Tower II</p>\r\n\r\n<p>Lantai 21 Sudirman Central Business District</p>\r\n\r\n<p>Jl. Jend. Sudirman Kav. 52-53,</p>\r\n\r\n<p>Jakarta 12190</p>\r\n', 'Kamis', '2018-08-09', '11:36:38', ''),
(28, 'Dev', 10, 'Share Registrar', '<p>PT Sinartama Gunita</p>\r\n\r\n<p>Sinar Mas Land Plaza, Menara 1 lantai 9,</p>\r\n\r\n<p>Jl. MH. Thamrin. No. 51,</p>\r\n\r\n<p>Jakarta 10350</p>\r\n', 'Kamis', '2018-08-09', '11:36:05', ''),
(29, 'Muhamad Devian Ramadhan', 10, 'exam', '<p>asdfghk</p>\r\n', 'Rabu', '2018-08-15', '13:33:56', 'Anugerah-KPI-2017---ILM---KARENA-KITA-INDONESIA-(Sertifikat)7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita_penghargaan`
--

CREATE TABLE `berita_penghargaan` (
  `id_penghargaan` int(11) NOT NULL,
  `judul_penghargaan` varchar(255) NOT NULL,
  `jenis` enum('penghargaan','sertifikasi') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tahun_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_penghargaan`
--

INSERT INTO `berita_penghargaan` (`id_penghargaan`, `judul_penghargaan`, `jenis`, `gambar`, `isi`, `hari`, `tanggal`, `jam`, `tahun_berita`) VALUES
(11, ' Makassar, 16 Desember 2017', 'penghargaan', 'piala-kpid-sulsel-20174.jpg', '<p>ANTV Mendapatkan Penghargaan dari KPID Sulawesi Selatan untuk kategori SSJ Peduli Budaya Lokal.</p>\r\n', 'Senin', '2018-08-13', '10:00:23', 2017),
(21, 'Sertifikasi 2017', 'sertifikasi', 'ANTV-ISO-9001-2015-Certificate-2017-2020-page-001.jpg', '<p>ANTV memegang sertifikasi ISO 9001:2015 dalam lingkup Television Broadcast System yang diterbitkan oleh United Registrar of Systems Certification, berlaku sampai dengan 8 Maret 2020.</p>\r\n', 'Senin', '2018-08-13', '10:04:18', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `berita_penghargaan_en`
--

CREATE TABLE `berita_penghargaan_en` (
  `id_penghargaan` int(11) NOT NULL,
  `judul_penghargaan` varchar(255) NOT NULL,
  `jenis` enum('penghargaan','sertifikasi') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tahun_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_penghargaan_en`
--

INSERT INTO `berita_penghargaan_en` (`id_penghargaan`, `judul_penghargaan`, `jenis`, `gambar`, `isi`, `hari`, `tanggal`, `jam`, `tahun_berita`) VALUES
(11, ' Makassar, 16 Desember 2017', 'penghargaan', 'piala-kpid-sulsel-20174.jpg', '<p>ANTV won 2017 KPID South Sulawesi Award in the Network Broadcast System with Local Culture Interest category.</p>\r\n', 'Senin', '2018-08-13', '10:00:23', 2017),
(21, 'Sertifikasi 2017', 'sertifikasi', 'ANTV-ISO-9001-2015-Certificate-2017-2020-page-001.jpg', '<p>ANTV hold ISO 9001:2015 in the scope of Television Broadcast System issued by United Registrar of Systems Certification, valid until March 8th, 2020.</p>\r\n', 'Senin', '2018-08-13', '10:04:18', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `berita_rups`
--

CREATE TABLE `berita_rups` (
  `id` int(11) NOT NULL,
  `id_judul` int(11) NOT NULL,
  `berita_rups` varchar(255) NOT NULL,
  `dokumen` longblob NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_rups`
--

INSERT INTO `berita_rups` (`id`, `id_judul`, `berita_rups`, `dokumen`, `hari`, `tanggal`, `jam`) VALUES
(2, 23, 'Panggilan RUPSLB', 0x4d4449412d50616e6767696c616e2d4a616e31382e706466, 'Senin', '2018-08-13', '13:53:43'),
(4, 1, 'Ringkasan Risalah RUPSLB', 0x4d4449412d50656e67756d756d616e2d52696e676b6173616e2d526973616c61682d46656231382e706466, 'Senin', '2018-08-13', '13:50:28'),
(12, 23, 'Pengumuman RUPSLB dan RUPSLB Independen', 0x50542d496e7465726d656469612d4361706974616c2d54626b5f2e706466, 'Senin', '2018-08-13', '13:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `berita_rups_en`
--

CREATE TABLE `berita_rups_en` (
  `id` int(11) NOT NULL,
  `id_judul` int(11) NOT NULL,
  `berita_rups` varchar(255) NOT NULL,
  `dokumen` longblob NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_rups_en`
--

INSERT INTO `berita_rups_en` (`id`, `id_judul`, `berita_rups`, `dokumen`, `hari`, `tanggal`, `jam`) VALUES
(2, 23, 'Notice of EGMS', 0x4e6f746963652d6f662d5f45474d532d50542d496e7465726d656469612d4361706974616c2d54626b31322d4a616e756172793230313828456e676c697368292e706466, 'Senin', '2018-08-13', '13:53:43'),
(4, 1, 'Extract of EGMS', 0x525550534c425f4d4449415f323031385f30372e706466, 'Senin', '2018-08-13', '13:50:28'),
(12, 23, 'Announcement of EGMS and Independent EGMS', 0x50656e67756d756d616e525550534c422d334a616e756172693230313828456e676c697368294d4449412e706466, 'Senin', '2018-08-13', '13:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `berita_tanggungjwb`
--

CREATE TABLE `berita_tanggungjwb` (
  `id_berita` int(11) NOT NULL,
  `id_juduljudul` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_tanggungjwb`
--

INSERT INTO `berita_tanggungjwb` (`id_berita`, `id_juduljudul`, `keterangan`, `gambar`, `hari`, `tanggal`, `jam`) VALUES
(1, 1, 'Launching VCO Srikandi Bersama Lotte dalam Pemberdayaan Koperasi Perempuan', '1.jpg', 'Senin', '2018-08-13', '14:34:19'),
(12, 2, 'dummy', 'Annual-Report_MDIA_2015-13.jpg', 'Selasa', '2018-08-14', '18:02:26'),
(21, 2, 'Demonstrasi dari Tim Cantik ANTV', '23.jpg', 'Senin', '2018-08-13', '14:33:41'),
(22, 2, 'Partisipasi dari para wanita Lampung', '3.jpg', 'Senin', '2018-08-13', '14:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `berita_tanggungjwb_en`
--

CREATE TABLE `berita_tanggungjwb_en` (
  `id_berita` int(11) NOT NULL,
  `id_juduljudul` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_tanggungjwb_en`
--

INSERT INTO `berita_tanggungjwb_en` (`id_berita`, `id_juduljudul`, `keterangan`, `gambar`, `hari`, `tanggal`, `jam`) VALUES
(1, 1, 'The Launching of VCO Srikandi', '1.jpg', 'Senin', '2018-08-13', '14:34:19'),
(12, 2, 'dummy eng', 'Anugerah-KPI-2017---ILM---KARENA-KITA-INDONESIA-(Sertifikat)6.jpg', 'Selasa', '2018-08-14', '18:02:27'),
(21, 2, 'Demonstration from the Cantik ANTV team', '23.jpg', 'Senin', '2018-08-13', '14:33:41'),
(22, 2, 'Participation from the Lampung’s Women', '3.jpg', 'Senin', '2018-08-13', '14:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(255) NOT NULL,
  `id_kategoridokumen` int(10) NOT NULL,
  `dokumen` longblob NOT NULL,
  `username` varchar(10) NOT NULL,
  `judul_dokumen` varchar(255) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_kategoridokumen`, `dokumen`, `username`, `judul_dokumen`, `hari`, `tanggal`, `jam`) VALUES
(1, 1, 0x4b495f54616d626168616e5f64616e617461755f50657275626168616e5f496e666f726d6173695f7465726b6169745f5472616e73616b73695f4d6174657269616c5f64616e5f4166696c696173695f42656e747572616e5f4b6570656e74696e67616e2d31324a756e6932303137312e706466, 'admin', 'Ikhtisar Keuangan MDIA', 'Rabu', '2018-08-15', '10:44:05'),
(2, 4, 0x416e67676172616e5f44617361725f494d435f46696e616c2d7265766973692e706466, 'Dev', 'Anggaran Dasar', 'Minggu', '2018-08-12', '10:43:39'),
(3, 5, 0x5065646f6d616e2d4b65726a612d426f435f4d4449415f323031375f46696e616c2d35617072696c2e706466, 'Dev', 'Pedoman Kerja Dewan Komisaris', 'Minggu', '2018-08-12', '10:44:02'),
(4, 6, 0x5065646f6d616e5f4b65726a615f444952454b53495f323031372e706466, 'Dev', 'Pedoman Kerja Direksi', 'Minggu', '2018-08-12', '10:45:15'),
(5, 7, 0x4b6f64655f4574696b28636f64655f6f665f636f6e64756374295f494d435f323031372e706466, 'admin', 'Kode Etik', 'Minggu', '2018-08-12', '10:45:07'),
(6, 8, 0x50696167616d2d4b6f6d6974652d41756469742d494d432e706466, 'admin', 'Piagam Komite Audit', 'Minggu', '2018-08-12', '10:45:00'),
(7, 9, 0x5065646f6d616e2d4b6f6d6974652d4e6f6d696e6173692d52656d756e65726173695f494d432e706466, 'admin', 'Pedoman Komite Nominasi dan Renumerasi', 'Minggu', '2018-08-12', '10:44:53'),
(8, 10, 0x50696167616d2d41756469742d496e7465726e616c2d494d432e706466, 'admin', 'Piagam Unit Audit Internal', 'Minggu', '2018-08-12', '10:44:46'),
(9, 11, 0x5742535f5f494d432e706466, 'Muhamad De', 'Piagam WBS', 'Rabu', '2018-08-15', '14:46:08'),
(10, 12, 0x42756b74692d696b6c616e2d496e7465726d656469612d323031372e706466, 'admin', 'Kebijakan Komunikasi Pemegang Saham', 'Selasa', '2018-08-14', '17:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_berita`
--

CREATE TABLE `dokumen_berita` (
  `id` int(255) NOT NULL,
  `idberita` int(255) NOT NULL,
  `dokumen` longblob NOT NULL,
  `id_katber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_berita`
--

INSERT INTO `dokumen_berita` (`id`, `idberita`, `dokumen`, `id_katber`) VALUES
(5, 10, 0x42756b74692d696b6c616e2d496e7465726d656469612d32303137332e706466, 3),
(6, 11, 0x50656e79616d706169616e5f4c61706f72616e5f4b6575616e67616e5f496e746572696d2d4f4a4b2e706466, 3),
(7, 12, 0x4b6574657262756b61616e5f496e666f726d6173695f50545f496e7465726d656469615f4361706974616c5f54626b5f31374f6b746f62657232303137312e706466, 3),
(11, 16, 0x5055424c49432d4558504f53452d4d4449415f2d46696e616c2d4f4b2d434554414b2e706466, 5),
(12, 5, 0x416e6e75616c5f5265706f72745f4d4449415f32303135312e706466, 1),
(13, 6, 0x416e6e75616c5f5265706f72745f4d4449415f32303134312e706466, 1),
(14, 7, 0x416e6e75616c5f5265706f72745f4d4449415f32303133312e706466, 1),
(22, 3, 0x4d4449415f41525f323031365f41345f507265766965775f66756c6c362e706466, 1),
(99, 15, 0x50726f7370656b7475735f494d432e706466, 7);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_berita_en`
--

CREATE TABLE `dokumen_berita_en` (
  `id` int(255) NOT NULL,
  `idberita` int(255) NOT NULL,
  `dokumen` longblob NOT NULL,
  `id_katber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_berita_en`
--

INSERT INTO `dokumen_berita_en` (`id`, `idberita`, `dokumen`, `id_katber`) VALUES
(5, 10, 0x42756b74692d696b6c616e2d496e7465726d656469612d32303137342e706466, 3),
(6, 11, 0x50656e79616d706169616e5f4c61706f72616e5f4b6575616e67616e5f496e746572696d2d4f4a4b312e706466, 3),
(7, 12, 0x4b6574657262756b61616e5f496e666f726d6173695f50545f496e7465726d656469615f4361706974616c5f54626b5f31374f6b746f62657232303137322e706466, 3),
(11, 16, 0x5055424c49432d4558504f53452d4d4449415f2d46696e616c2d4f4b2d434554414b312e706466, 5),
(12, 5, 0x416e6e75616c5f5265706f72745f4d4449415f32303135322e706466, 1),
(13, 6, 0x416e6e75616c5f5265706f72745f4d4449415f32303134322e706466, 1),
(14, 7, 0x416e6e75616c5f5265706f72745f4d4449415f32303133322e706466, 1),
(22, 3, 0x4d4449415f41525f323031365f41345f507265766965775f66756c6c372e706466, 1),
(99, 15, 0x50726f7370656b7475735f494d43312e706466, 7);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_en`
--

CREATE TABLE `dokumen_en` (
  `id_dokumen` int(255) NOT NULL,
  `id_kategoridokumen` int(10) NOT NULL,
  `dokumen` longblob NOT NULL,
  `username` varchar(10) NOT NULL,
  `judul_dokumen` varchar(255) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_en`
--

INSERT INTO `dokumen_en` (`id_dokumen`, `id_kategoridokumen`, `dokumen`, `username`, `judul_dokumen`, `hari`, `tanggal`, `jam`) VALUES
(1, 1, 0x46696e616e6369616c2d486967686c69676874732d4d4449412d323031362d77656273697465312e706466, 'admin', 'Financial Highlights', 'Rabu', '2018-08-15', '10:44:05'),
(2, 4, 0x41727469636c65732d6f662d4173736f63696174696f6e2d50545f496e7465726d656469612d4361706974616c2d54626b2e706466, 'Dev', 'Articles of Association', 'Minggu', '2018-08-12', '10:43:39'),
(3, 5, 0x576f726b5f47756964656c696e65735f6f665f426f435f436861727465722e706466, 'Dev', 'Board Of Commissioners Charter', 'Minggu', '2018-08-12', '10:44:02'),
(4, 6, 0x576f726b5f47756964656c696e65735f6f665f426f442e706466, 'Dev', 'Board Of Directors Charter', 'Minggu', '2018-08-12', '10:45:16'),
(5, 7, 0x434f44455f4f465f4554484943535f4d444941325f323031372e706466, 'admin', 'Code Of Ethics', 'Minggu', '2018-08-12', '10:45:07'),
(6, 8, 0x41756469742d436f6d6d69747465652d436861727465722e706466, 'admin', 'Audit Committee Charter', 'Minggu', '2018-08-12', '10:45:00'),
(7, 9, 0x4e6f6d696e6174696f6e2d416e642d52656d756e65726174696f6e2d436861727465722e706466, 'admin', 'Nomination And Remuneration Charter', 'Minggu', '2018-08-12', '10:44:53'),
(8, 10, 0x496e7465726e616c2d41756469742d436861727465722d50542d496e7465726d656469612d4361706974616c2e706466, 'admin', 'Internal Audit Charter', 'Minggu', '2018-08-12', '10:44:46'),
(9, 11, 0x42756b74692d696b6c616e2d496e7465726d656469612d323031372e706466, 'Muhamad De', 'WBS Charter', 'Rabu', '2018-08-15', '14:46:08'),
(10, 12, 0x42756b74692d696b6c616e2d496e7465726d656469612d323031372e706466, 'admin', 'Shareholders Communication Policy', 'Selasa', '2018-08-14', '17:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_lapkeu`
--

CREATE TABLE `dokumen_lapkeu` (
  `id_lapkeu` int(11) NOT NULL,
  `keterangan` int(10) NOT NULL,
  `tahun_dokumen` int(11) NOT NULL,
  `dokumen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_lapkeu`
--

INSERT INTO `dokumen_lapkeu` (`id_lapkeu`, `keterangan`, `tahun_dokumen`, `dokumen`) VALUES
(12, 11, 2014, 0x496e7465726d656469612d4361706974616c2d4465632d33312d323031362d46696e616c2e706466),
(21, 3, 2013, 0x494d432d6b692d3136617072696c3137332e706466),
(23, 12, 2013, ''),
(98, 2, 2012, 0x4b6574657262756b61616e5f496e666f726d6173695f50545f496e7465726d656469615f4361706974616c5f54626b5f31374f6b746f62657232303137322e706466),
(99, 12, 2014, 0x3136303832335f6a616d313630395f4d4449415f41525f5265766973692e706466),
(123, 9, 2013, 0x46696e616e6369616c2d486967686c69676874732d4d4449412d323031362d77656273697465312e706466),
(1213, 12, 2012, 0x494d432d6b692d3136617072696c3137322e706466),
(24214, 12, 2014, 0x4b6574657262756b61616e5f496e666f726d6173695f50545f496e7465726d656469615f4361706974616c5f54626b5f31374f6b746f626572323031372e706466),
(123342, 6, 2013, 0x46696e616e6369616c2d486967686c69676874732d4d4449412d323031362d77656273697465332e706466),
(213124, 6, 2014, 0x496e7465726d656469612d4361706974616c2d4465632d33312d323031362d46696e616c312e706466);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_lapkeu_en`
--

CREATE TABLE `dokumen_lapkeu_en` (
  `id_lapkeu` int(11) NOT NULL,
  `keterangan` int(10) NOT NULL,
  `tahun_dokumen` int(11) NOT NULL,
  `dokumen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_lapkeu_en`
--

INSERT INTO `dokumen_lapkeu_en` (`id_lapkeu`, `keterangan`, `tahun_dokumen`, `dokumen`) VALUES
(12, 11, 2014, 0x496e7465726d656469612d4361706974616c2d4465632d33312d323031362d46696e616c2e706466),
(21, 3, 2013, 0x494d432d6b692d3136617072696c3137332e706466),
(23, 12, 2013, ''),
(98, 2, 2012, 0x494d432d6b692d3136617072696c3137342e706466),
(99, 12, 2014, 0x3136303832335f6a616d313630395f4d4449415f41525f5265766973692e706466),
(123, 9, 2013, 0x46696e616e6369616c2d486967686c69676874732d4d4449412d323031362d77656273697465312e706466),
(1213, 12, 2012, 0x494d432d6b692d3136617072696c3137322e706466),
(24214, 12, 2014, 0x4b6574657262756b61616e5f496e666f726d6173695f50545f496e7465726d656469615f4361706974616c5f54626b5f31374f6b746f626572323031372e706466),
(123342, 6, 2013, 0x46696e616e6369616c2d486967686c69676874732d4d4449412d323031362d77656273697465332e706466),
(213124, 6, 2014, 0x496e7465726d656469612d4361706974616c2d4465632d33312d323031362d46696e616c312e706466);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(10) NOT NULL,
  `id_album` int(5) NOT NULL,
  `judul_gambar` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_album`, `judul_gambar`, `gambar`) VALUES
(1, 10, 'Pesbukers', 'antv_footer11.png'),
(2, 10, 'Cari Jodoh Lagi', 'banner_mdia_tmoi.jpg'),
(3, 10, 'Jodoh Wasiat Bapak', 'jwb.jpg'),
(4, 10, 'Nakusha', 'Nakusha.jpg'),
(5, 10, 'Selamat Pagi Nusantara', 'SPN2.jpg'),
(6, 10, 'Swaragini', 'swaragini.jpg'),
(10, 9, 'Pemegang Saham', 'pemegang_saham54.jpg'),
(11, 6, 'Struktur Organisasi', 'Struktur-Organisasi-Perusahaan-MDIA-20172.jpg'),
(12, 7, 'Struktur Grup', 'struktur_MDIA_rev31.jpg'),
(15, 8, 'Lembar Fakta', 'Corporate-Facht-Sheet-Revisi1.jpg'),
(25, 11, 'Transmisi Analog', 'transmisi_antv_JULI_2016_rev12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_en`
--

CREATE TABLE `gambar_en` (
  `id_gambar` int(10) NOT NULL,
  `id_album` int(5) NOT NULL,
  `judul_gambar` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_en`
--

INSERT INTO `gambar_en` (`id_gambar`, `id_album`, `judul_gambar`, `gambar`) VALUES
(1, 10, 'Pesbukers', 'antv_footer12.png'),
(2, 10, 'Cari Jodoh Lagi', 'banner_mdia_tmoi.jpg'),
(3, 10, 'Jodoh Wasiat Bapak', 'jwb.jpg'),
(4, 10, 'Nakusha', 'Nakusha.jpg'),
(5, 10, 'Selamat Pagi Nusantara', 'SPN2.jpg'),
(6, 10, 'Swaragini', 'swaragini.jpg'),
(10, 9, 'Pemegang Saham', 'pemegang_saham4.jpg'),
(11, 6, 'Struktur Organisasi', 'Struktur-Organisasi-Perusahaan-MDIA-20173.jpg'),
(12, 7, 'Struktur Grup', 'struktur_MDIA_rev32.jpg'),
(15, 8, 'Lembar Fakta', 'Company-Profile-MDIA-June-2017v1.jpg'),
(25, 11, 'Transmisi Analog', 'transmisi_antv_JULI_2016_rev12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_statis`
--

CREATE TABLE `halaman_statis` (
  `id_halstatis` int(255) NOT NULL,
  `isi_halaman` text NOT NULL,
  `judul_halaman` varchar(255) NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_statis`
--

INSERT INTO `halaman_statis` (`id_halstatis`, `isi_halaman`, `judul_halaman`, `tgl_posting`, `gambar`) VALUES
(1, '<p>Dalam beberapa tahun terakhir ini, MDIA telah mengalami perjalanan yang luar biasa, didukung oleh kinerja stasiun televisi Free to-Air (FTA) anak perusahaannya yaitu ANTV. Berawal dari posisi stasiun televisi FTA dengan peringkat ketujuh di tahun 2013, kami mulai bertransformasi dengan melaksanakan strategi programming yang fokus membidik segmen wanita, dan sejak itu ANTV secara konsisten memusatkan perhatian pada konten-konten keluarga, anak-anak dan hiburan yang terbukti berhasil meraih tonggak sukses baru setiap tahun. Selayaknya, kita panjatkan puji syukur kepada Allah YME atas pencapaian ini khususnya di tengah volatilitas kondisi politik dan ekonomi yang cukup bergejolak.</p>\r\n\r\n<p>Pada tahun 2016, MDIA mencatatkan pendapatan tertinggi yang pernah diraih, dengan pertumbuhan dua digit di atas rata-rata industri sebesar 26,7% yang mencapai Rp 1.756,6 miliar. Laba Usaha meningkat sebesar 38,9% menjadi sebesar Rp 536,7 miliar, dengan laba bersih sebesar Rp 645,6 miliar, meningkat sebesar 151,5% dibandingkan tahun 2015. Hasil yang baik ini tercapai ditengah iklim politik dan ekonomi yang penuh goncangan, dimana perekonomian Indonesia Indonesia tumbuh 5,0% atau hanya 0,2% dari tahun 2015 ke tahun 2016, dibayangi prospek pemilihan Kepala Daerah Tingkat 1 dan Tingkat 2 pada awal 2017 serta isu-isu amnesti pajak yang menciptakan suasana ketidakpastian. Di tengah kondisi tersebut, ANTV terus menghadirkan program-program yang segar, menghibur dan menarik yang berhasil memikat hati pemirsa wanita yang ditargetkan. Paduan konten global dengan konten domestik yang senantiasa ditingkatkan, dirancang untuk menarik penonton dan mempertahankan reputasi ANTV sebagai trendsetter dalam industri ini. Untuk mengidentifikasi dan menciptakan konten yang tepat dan menarik bagi pemirsa merupakan tantangan tersendiri, namun tim ANTV memiliki reputasi yang baik dalam hal ini dan terus membuktikan kemampuannya.</p>\r\n\r\n<p>ANTV terus menyiarkan seri domestik, dilengkapi oleh serial India yang tetap populer bagi pemirsa. Program Pesbukers dinilai sebagai program hiburan komedi TV nomor satu. Program anak-anak juga mengalami kenaikan pada akhir tahun. Terkait aspek pemasaran, ANTV masih terus meminta bintang acaranya untuk berinteraksi langsung dengan para penggemar dalam acara jumpa fans maupun melalui media sosial, sebagai strategi untuk meningkatkan interaksi dan keterikatan pemirsanya. Secara paralel, ANTV terus berinvestasi dalam pengembangan sumber daya manusia dan peningkatan infrastruktur dan fasilitas penyiarannya seperti studio dan kamera, serta Master Control Room. Investasi tersebut penting untuk menjaga kemampuan bersaing, dalam rangka memenuhi harapan pemirsa sesuai standar yang layak bagi sebuah stasiun televisi FTA Tier 1. Secara khusus, kami menyadari adanya kebutuhan mencari talent baru untuk mendukung inovasi yang berkelanjutan mengingat industri kami terus berkembang untuk menghasilkan sesuatu yang baru.</p>\r\n\r\n<p>ANTV diharapkan dapat memberikan pertumbuhan yang berkelanjutan pada tahun 2017, didukung oleh kepiawaian ANTV dalam mengidentifikasikan program yang menghibur serta strategi programing yang efektif, sehingga citra perusahaan maupun minat pemirsa semakin meningkat. Pada saat yang sama, menyambung keberhasilan ANTV sebagai stasiun televisi FTA Tier 1, MDIA mulai melangkah maju menjajaki diversifikasi lini bisnis dalam rangka memastikan pertumbuhan ke depan. Melengkapi bisnis televisi FTA ANTV, MDIA kini tengah membangun sebuah talent agency yang ditujukan untuk mendukung pertumbuhan ANTV. Selain itu, MDIA juga terus fokus untuk meningkatkan kapasitas produksi program in-house. Ketiga lini bisnis ini diharapkan dapat saling mendukung untuk menghasilkan sinergi, dan pada akhirnya diharapkan akan memiliki kemampuan untuk menyumbangkan tambahan aliran pendapatan bagi Perseroan.</p>\r\n\r\n<p>ANTV dan MDIA senantiasa menekankan penerapan prinsip-prinsip tata kelola perusahaan yang baik, termasuk kepatuhan kepada peraturan. Pada tanggal 14 Oktober 2016, ANTV berhasil mendapatkan per panjangan Ijin Penyelenggaraan Penyiaran (IPP) televisi FTA untuk 10 tahun berikutnya dari Menteri Komunikasi dan Informatika Republik Indonesia berdasarkan Surat Keputusan No. 1817 tahun 2016. Hal ini membuktikan bahwa ANTV tercatat sebagai stasiun televisi FTA yang patuh terhadap peraturan. Kami akan terus menekankan kepatuhan terhadap peraturan perundangan yang berlaku sebagai mitra pemerintah dan warga korporasi yang baik. Selain itu, MDIA melalui ANTV juga konsisten melakukan kegiatan sosial serta program yang membantu masyarakat yang kurang beruntung dan kaum dhuafa, sekaligus mempererat hubungan ANTV dengan masyarakat. Adalah tahun yang luar biasa untuk MDIA dan ANTV, dan saya bangga atas kerja keras dan pencapaian karyawan kami. Saya juga ingin mengucapkan terima kasih kepada Dewan Komisaris, pemirsa setia kami, mitra terpercaya dan para pemegang saham yang kami hargai, yang selama ini menjadi bagian dari perjalanan kami dengan tujuan mewarnai kehidupan sehari-hari. Saya optimis bahwa kami dapat mempertahankan prestasi kami dan bahkan semakin baik, dengan tujuan dapat memberikan manfaat kepada semua pemangku kepentingan.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<h3>ERICK THOHIR</h3>\r\n\r\n<p>Direktur Utama</p>\r\n', 'Sambutan Direktur Utama', '2018-08-08', 'foto_sambutan_direktur_utama.jpg'),
(2, '<h3>SEKILAS TENTANG PERSEROAN</h3>\r\n\r\n<p>PT Intermedia Capital Tbk. (&ldquo;Perseroan&rdquo; atau &ldquo;MDIA&rdquo;) didirikan pada tahun 2008 dengan nama PT Magazine Asia yang kemudian berubah pada tahun itu juga menjadi PT Intermedia Capital, dan mulai beroperasi secara komersial pada tahun 2009. Perseroan mencatatkan sahamnya di Bursa Efek Indonesia pada tanggal 11 April 2014 dengan kode perdagangan saham MDIA.</p>\r\n\r\n<p>MDIA merupakan induk usaha dari PT Cakrawala Andalas Televisi (ANTV), salah satu dari 10 televisi teresterial penerimaan tetap tidak berbayar (FTA) di Indonesia yang memiliki izin bersiaran secara nasional. Memasuki era digital, Perseroan dan ANTV, yang merupakan bagian dari Grup VIVA, telah menerapkan strategi konvergensi untuk pertumbuhan agar konten-konten yang ditayangkan dapat dinikmati anytime, anywhere dan with any device, dan memberikan pengalaman yang tak terlupakan bagi pemirsanya.</p>\r\n\r\n<h3>VISI</h3>\r\n\r\n<p>Menjadi perusahaan media yang kompetitif dan unggul dalam menghibur seluruh keluarga Indonesia.</p>\r\n\r\n<h3>MISI</h3>\r\n\r\n<ol>\r\n	<li>Turut serta membangun perekonomian nasional dan memperkokoh integrasi bangsa melalui penayangan program-program yang inovatif dan berkualitas bagi setiap anggota keluarga.</li>\r\n	<li>Mendukung pengembangan karakter bangsa Indonesia dengan spirit kreativitas dan inovasi.</li>\r\n	<li>Fokus dalam mendapatkan keuntungan dan pertumbuhan yang berkelanjutan dengan memberikan nilai tambah kepada para pemangku kepentingan dengan prinsip Tata Kelola Perseroan yang Baik.</li>\r\n</ol>\r\n\r\n<h3>NILAI-NILAI PERSEROAN</h3>\r\n\r\n<ol>\r\n	<li>CUSTOMER FOCUS<br />\r\n	Mengutamakan kebutuhan pelanggan untuk memberikan layanan yang terbaik dengan memperhatikan kepentingan Perseroan.</li>\r\n	<li>CREATIVITY AND INNOVATION<br />\r\n	Semangat untuk menghasilkan hal-hal yang berbeda dan terus-menerus melakukan perubahan yang bernilai ekonomis, sesuai dengan kepentingan Perseroan.</li>\r\n	<li>TEAMWORK<br />\r\n	Kekuatan kerjasama antar individu dalam suatu kelompok yang saling melengkapi, melalui komunikasi yang terbuka dan memiliki komitmen yang sama untuk mencapai tujuan Perseroan.</li>\r\n	<li>GOOD CORPORATE GOVERNANCE<br />\r\n	Praktek pengelolaan Perseroan secara aman dan penuh kehati-hatian dengan mempertimbangkan keseimbangan pemenuhan kepentingan seluruh pemangku kepentingan.</li>\r\n</ol>\r\n', 'Profil Perseroan', '2018-08-11', 'profile-boc.jpg'),
(3, '<p>PT. Intermedia Capital Tbk. (&ldquo;MDIA&rdquo; atau &ldquo;Perseroan&rdquo;) didirikan pada tahun 2008 dan berkantor pusat di Komplek Rasuna Epicentrum Lot.9 Jl. H.R. Rasuna Said Karet Kuningan Setiabudi, Jakarta-Selatan, Indonesia. MDIA bergerak dibidang penyediaan konten yang fokus pada keluarga, anak-anak, dan hiburan melalui entitas anak perusahaannya, PT. Cakrawala Andalas Televisi, yang mengelola saluran televisi free-to-air, dengan call sign ANTV. Pada Desember 2013, MDIA melakukan perubahan status perusahaan dari perseroan tertutup menjadi perseroan terbuka (Tbk.). Perseroan pertama kali mencatatkan saham pada papan utama Bursa Efek Indonesia dengan kode saham &ldquo;MDIA&rdquo; pada 11 April 2014.</p>\r\n\r\n<p>Perseroan mengakuisisi 99,99% saham ANTV setelah News Corp Group melepas seluruh kepemilikannya di ANTV. ANTV merupakan satu dari 10 Lembaga Penyiaran Swasta Jasa Penyiaran yang mendapat izin bersiaran secara nasional dari Menteri Komunikasi dan Informatika berdasarkan surat Keputusan No. 107/KEP/M.KOMINFO/10/2006 tertanggal 16 Oktober 2006. Pada tanggal 14 Oktober 2016, ANTV berhasil mendapatkan perpanjangan Ijin Penyelenggaraan Penyiaran (IPP) televisi FTA untuk 10 tahun berikutnya dari Menteri Komunikasi dan Informatika Republik Indonesia berdasarkan Surat Keputusan No. 1817 tahun 2016.</p>\r\n\r\n<p>ANTV kemudian memperoleh penetapan sistem stasiun berjaringan dari Menteri Komunikasi dan Informatika berdasarkan Surat keputusan No.461/ KEP/ M.KOMINFO/ 12/ 2010, tertanggal 23 Desember 2010. ANTV berhasil memperoleh sertifikasi Sistem Manajemen Mutu Berstandar Internasional ISO 9001:2015 untuk lingkup Television Broadcast System yang berlaku sampai dengan 8 Maret 2020. Pada tahun 2012, ANTV memperoleh lisensi Lembaga Penyiaran Swasta Penyelenggara Multiplexing FTA untuk provinsi Jawa Barat dan Jawa Timur dan untuk provinsi Aceh dan Sumatera Utara pada tahun 2013. Dalam perkembangannya, MDIA kemudian mentransformasi ANTV menjadi stasiun televisi yang fokus pada program keluarga, anak-anak, dan hiburan. Transformasi ini berhasil menempatkan ANTV dalam jajaran Tier 1 station televisi FTA Indonesia. Pada Februari 2016, ANTV mengambil inisiatif dan telah menjadi LPS televisi pertama, dan saat ini merupakan satu-satunya stasiun televisi yang menayangkan bahasa isyarat dalam program berita &ldquo;Topik Pagi&rdquo;.</p>\r\n\r\n<h3>STASIUN PEMANCAR</h3>\r\n\r\n<p>ANTV saat ini, mengoperasikan sistem stasiun jaringan dengan induk jaringan yang berada di Jakarta. Dalam sistem penyiaran ini, ANTV didukung oleh 41 stasiun transmisi yang keseluruhannya menjangkau 193 kota dan kabupaten di Indonesia dengan lebih dari 166,4 juta penduduk.</p>\r\n\r\n<h3>TRANSMISI ANALOG</h3>\r\n', 'Bisnis', '2018-08-09', 'banner_kontak1.jpg'),
(12, '', 'Direksi', '2018-08-09', 'profile-bod.jpg'),
(13, '', 'Dewan Komisaris', '2018-08-10', 'profile-boc1.jpg'),
(19, '<p>Komite Audit bertugas untuk memberikan pendapat kepada Dewan Komisaris terhadap laporan atau hal-hal yang disampaikan oleh Direksi kepada Dewan Komisaris, mengidentifikasi hal-hal yang memerlukan perhatian Dewan Komisaris, dan melaksanakan tugas-tugas lain yang berkaitan dengan tugas Dewan Komisaris, antara lain meliputi:</p>\r\n\r\n<ol>\r\n	<li>Melakukan penelaahan atas informasi keuangan yang akan dikeluarkan Perseroan seperti laporan keuangan, proyeksi, dan informasi keuangan lainnya;</li>\r\n	<li>Melakukan penelaahan atas ketaatan Perseroan terhadap peraturan perundang-undangan di bidang Pasar Modal dan peraturan perundang-undangan lainnya yang berhubungan dengan kegiatan Perseroan;</li>\r\n	<li>Melakukan penelaahan atas pelaksanaan pemeriksaanoleh auditor internal terhadap Perseroan;</li>\r\n	<li>Melaporkan kepada Dewan Komisaris berbagai risiko yang dihadapi Perseroan dan pelaksanaan manajemen risiko oleh Direksi;</li>\r\n	<li>Melakukan penelaahan dan melaporkan kepada Dewan Komisaris atas pengaduan yang berkaitan dengan Perseroan; dan</li>\r\n	<li>Menjaga kerahasiaan dokumen, data dan informasi yang dimiliki Perseroan.</li>\r\n</ol>\r\n\r\n<h3>KEANGGOTAAN KOMITE AUDIT</h3>\r\n\r\n<p>Berdasarkan Surat Keputusan Dewan Komisaris No.: SK.005/DEKOM/XII/2014 tertanggal 22 Desember 2014, Perseroan telah memiliki Komite Audit yang diketuai oleh Komisaris Independen dan 2 (dua) orang anggota dari eksternal Perseroan, yaitu:</p>\r\n\r\n<ol>\r\n	<li>Ilham Akbar Habibie sebagai ketua</li>\r\n	<li>Ridwan Amsori sebagai anggota; dan</li>\r\n	<li>Arydhian B. Djamin sebagai anggota</li>\r\n</ol>\r\n\r\n<h3>MASA JABATAN</h3>\r\n\r\n<p>Masa jabatan Ketua Komite Audit sama dengan masa jabatannya sebagai Komisaris Independen, sedangkan anggota Komite diangkat dengan masa jabatan 3 (tiga) tahun.</p>\r\n\r\n<h3>PROFIL ANGGOTA KOMITE AUDIT</h3>\r\n\r\n<h3>ILHAM AKBAR HABIBIE</h3>\r\n\r\n<p>Menjabat sebagai Ketua Komite Audit Perseroan sejak bulan Februari 2014. Profil Bapak Ilham A. Habibie dapat dilihat pada bagian Profil Dewan Komisaris.</p>\r\n\r\n<h3>RIDWAN AMSORI</h3>\r\n\r\n<p>Warga negara Indonesia, lahir di Jakarta tahun 1980, memperoleh gelar Sarjana Ekonomi dari Universitas Trisakti jurusan Akuntansi. Menjabat sebagai anggota Komite Audit Perseroan sejak bulan Februari 2014 sebelumnya beliau menjabat sebagai koordinator program Yayasan Satu Untuk Negeri tvOne (2012&ndash;Februari 2014), Manajer Yunior Auditor PT Bakrie Global Ventura (2012&ndash;Februari 2014), Auditor Senior PT Capital Manajer Asia Indonesia (2011&ndash;2012), Manager Pembiayaan Konsumen PT CIMB Niaga Tbk. (2006&ndash;2010), Pegawai Penjualan PT Bank Niaga Tbk. (2004&ndash;2006), Pegawai bagian Akuntansi PT Rumsitor Tehnik (2003&ndash;2004).</p>\r\n\r\n<h3>ARYDHIAN B. DJAMIN</h3>\r\n\r\n<p>Warga negara Indonesia lahir di Padang tahun 1975, memperoleh gelar Sarjana Ekonomi dari Universitas Indonesia dan memperoleh gelar Magister Ekonomi dari Universitas Indonesia. Menjabat sebagai anggota Komite Audit Perseroan sejak bulan Desember 2014. Saat ini beliau juga menjabat sebagai dosen di Institut Perbanas sejak tahun 2008, anggota komite audit di PT Exploitasi Energi Indonesia Tbk. sejak tahun 2013. Beliau juga pernah menjabat Manajer bagian keuangan pada Balai Pustaka (2006&ndash;2007), Junior Partner Audit di RSM AAJ Associates Public Accounting Firm (1999&ndash;2006), dosen di Universitas Indonesia (2000&ndash;2006), dan dosen di Universitas Bina Nusantara (2002).</p>\r\n', 'Komite Audit', '2018-08-14', 'banner_tata_kelola_prshaan.jpg'),
(20, '<p>Komite Nominasi dan Remunerasi ditetapkan oleh Dewan Komisaris untuk mendukung Dewan Komisaris dalam melaksanakan proses nominasi serta penetapan remunerasi bagi Direksi dan Dewan Komisaris.</p>\r\n\r\n<p>Berdasarkan SK.001/DEKOM/VII/2017, struktur keanggotaan Komite Nominasi dan Remunerasi Perseroan adalah sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Ketua: llham Akbar Habibie</li>\r\n	<li>Sekretaris: Risya Marhamila</li>\r\n	<li>Anggota: Anindya Novyan Bakrie</li>\r\n	<li>Anggota: Robertus Bismarka Kurniawan</li>\r\n	<li>Anggota: Anindra Ardiansyah Bakrie</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Profil, Pengalaman kerja dan riwayat pendidikan llham Akbar Habibie, Robertus Bismarka Kurniawan, Anindya Novyan Bakrie, dan Anindra Ardiansyah Bakrie dapat dilihat pada bagian profil Dewan Komisaris.</p>\r\n\r\n<h3>RISYA MARHAMILA</h3>\r\n\r\n<p><strong>Sekretaris</strong></p>\r\n\r\n<p>Warga negara Indonesia, lahir di Bogor tahun 1974. Beliau menjabat sebagai Sekretaris Komite Nominasi dan Remunerasi sejak Juni 2014. Saat ini beliau juga menjabat sebagai Chief Human Capital PT Cakrawala Andalas Televisi sejak Oktober 2014. Sebelumnya menjabat sebagai Human Resources General Manager PT Visi Media Asia Tbk. sejak 2011. Risya Marhamila memperoleh gelar Sarjana Administrasi Niaga dari Universitas Indonesia pada tahun 2008.</p>\r\n\r\n<h1>Komite Manajemen Risiko</h1>\r\n\r\n<p>Komite Manajemen Risiko bertugas dan bertanggung jawab untuk membantu Dewan Komisaris dalam memberikan pendapat profesional dan independen guna memastikan diterapkannya pengelolaan risko di perusahaan secara baik dan integratif oleh Direksi. Pelaksanaan tugas dan tanggung jawab Komite Manajemen Risiko mencakup pengkajian, pemantauan dan pemberian rekomendasi atas identifikasi risiko, penilaian risiko, mitigasi risiko oleh unit-unit kerja terkait. Komite Manajemen Risiko dibentuk berdasarkan Surat Keputusan Dewan Komisaris Perseroan No.: SK.004/DEKOM/VI/2014 tertanggal 16 Juni 2014. Susunan keanggotaan Komite Manajemen Risiko sebagai berikut:</p>\r\n\r\n<p>1. ROBERTUS BISMARKA KURNIAWAN</p>\r\n\r\n<p>Ketua Merangkap Anggota<br />\r\nPengalaman Kerja dan Riwayat Pendidikan Robertus Bismarka Kurniawan dapat dilihat pada bagian profil Dewan Komisaris.</p>\r\n\r\n<p>2. INDRA CAHYA UNO</p>\r\n\r\n<p>Anggota<br />\r\nWarga negara Indonesia, lahir di Jakarta tahun 1967. Beliau menjabat sebagai anggota Komite Manajemen Risiko sejak bulan Februari 2015. Saat ini beliau juga menjabat sebagai Komisaris PT Cakrawala Andalas Televisi sejak 2014 dan Komisaris PT Saratoga Investama Sedaya Tbk. sejak tahun 2006. Sebelumnya menjabat sebagai Senior Advisor pada Principia Management Group (2006&ndash;2008), Managing Director pada Matsushita Gobel Education Foundation (2004&ndash;2006), dan HR Director PT Matsushita Gobel Electric Works Manufacturing (2002&ndash;2004).<br />\r\nIndra Cahya Uno memperoleh gelar S1 jurusan Teknik Penerbangan dari University of Michigan, Amerika Serikat, pada tahun 1990. Menyelesaikan pendidikan S2 dari University of Southern California jurusan Bisnis Administrasi, Amerika Serikat, dan menyelesaikan pendidikan S3 di Universitas Indonesia jurusan Strategic Management pada tahun 2013.</p>\r\n\r\n<p>3. C. F. CARMELITA HARDIKUSUMO</p>\r\n\r\n<p>Anggota<br />\r\nPengalaman Kerja dan Riwayat Pendidikan C. F. Carmelita Hardikusumo dapat dilihat pada bagian profil Dewan Komisaris.</p>\r\n', 'Komite Nominasi Dan Remunerasi', '2018-08-13', 'banner_tata_kelola_prshaan1.jpg'),
(21, '<p>Komite Manajemen Risiko bertugas dan bertanggung jawab untuk membantu Dewan Komisaris dalam memberikan pendapat profesional dan independen guna memastikan diterapkannya pengelolaan risko di perusahaan secara baik dan integratif oleh Direksi. Pelaksanaan tugas dan tanggung jawab Komite Manajemen Risiko mencakup pengkajian, pemantauan dan pemberian rekomendasi atas identifikasi risiko, penilaian risiko, mitigasi risiko oleh unit-unit kerja terkait. Komite Manajemen Risiko dibentuk berdasarkan Surat Keputusan Dewan Komisaris Perseroan No.: SK.004/DEKOM/VI/2014 tertanggal 16 Juni 2014. Susunan keanggotaan Komite Manajemen Risiko sebagai berikut:</p>\r\n\r\n<p>1. ROBERTUS BISMARKA KURNIAWAN</p>\r\n\r\n<p>Ketua Merangkap Anggota<br />\r\nPengalaman Kerja dan Riwayat Pendidikan Robertus Bismarka Kurniawan dapat dilihat pada bagian profil Dewan Komisaris.</p>\r\n\r\n<p>2.&nbsp;INDRA CAHYA UNO</p>\r\n\r\n<p>Anggota<br />\r\nWarga negara Indonesia, lahir di Jakarta tahun 1967. Beliau menjabat sebagai anggota Komite Manajemen Risiko sejak bulan Februari 2015. Saat ini beliau juga menjabat sebagai Komisaris PT Cakrawala Andalas Televisi sejak 2014 dan Komisaris PT Saratoga Investama Sedaya Tbk. sejak tahun 2006. Sebelumnya menjabat sebagai Senior Advisor pada Principia Management Group (2006&ndash;2008), Managing Director pada Matsushita Gobel Education Foundation (2004&ndash;2006), dan HR Director PT Matsushita Gobel Electric Works Manufacturing (2002&ndash;2004).<br />\r\nIndra Cahya Uno memperoleh gelar S1 jurusan Teknik Penerbangan dari University of Michigan, Amerika Serikat, pada tahun 1990. Menyelesaikan pendidikan S2 dari University of Southern California jurusan Bisnis Administrasi, Amerika Serikat, dan menyelesaikan pendidikan S3 di Universitas Indonesia jurusan Strategic Management pada tahun 2013.</p>\r\n\r\n<p>3.&nbsp;C. F. CARMELITA HARDIKUSUMO</p>\r\n\r\n<p>Anggota<br />\r\nPengalaman Kerja dan Riwayat Pendidikan C. F. Carmelita Hardikusumo dapat dilihat pada bagian profil Dewan Komisaris</p>\r\n', 'Komite Manajemen Resiko', '2018-08-13', 'banner_tata_kelola_prshaan2.jpg'),
(22, '<p>Sekretaris Perusahaan (Corporate Secretary) memegang peranan yang penting sebagai pintu informasi bagi para pemangku kepentingan. Sekretaris Perusahaan memfasilitasi penyelenggaraan RUPS dan rapat-rapat Dewan Komisaris dan Direksi sesuai dengan ketentuan dalam Anggaran Dasar serta mempersiapkan laporan dan bahan-bahan yang diperlukan dalam rapatrapat tersebut. Sekretaris Perusahaan juga mengorganisir administrasi Rapat Umum Pemegang Saham (RUPS) termasuk pembuatan notulen dan melaporkan hasil rapat kepada Otoritas Jasa Keuangan (OJK) dan Bursa Efek Indonesia (BEI).</p>\r\n\r\n<h3>DAVID TICYNO PARDEDE</h3>\r\n\r\n<h3>Sekretaris Perusahaan</h3>\r\n\r\n<p>Warga negara Indonesia, lahir di Pekanbaru tahun 1969. Saat ini juga menjabat sebagai Ketua Bidang Hukum dan Regulasi pada Asosiasi Televisi Swasta Indonesia. Sebelum menjabat sebagai Sekretaris Perseroan pada Perseroan, yang bersangkutan pernah menjabat sebagai Senior Manajer Legal Commercial pada PT Visi Media Asia Tbk. (2012&ndash;2013), Manajer Legal Commercial pada PT Cakrawala Andalas Televisi (2010&ndash;2012), sebagai Sekretaris Perseroan pada PT Quantum Media Communications Indonesia, PT Quantum Bahana, dan PT Quantum Aksesindo Nusantara (2007&ndash;2010), sebagai Legal Manager pada PT Quantum Bahana (2003&ndash;2007). Beliau meraih gelar Sarjana Hukum dari Fakultas Hukum Universitas Atmajaya Yogyakarta pada tahun 1995.</p>\r\n\r\n<h3>Dasar Hukum Penunjukkan</h3>\r\n\r\n<p>David Ticyno Pardede diangkat menjadi Sekretaris Perusahaan berdasarkan Surat Keputusan Direksi No. SKD.001/IMC/XII/2013 tanggal 12 Desember 2013 (&ldquo;SKD.001/2013&rdquo;), Perseroan mengangkat David Ticyno Pardede sebagai Sekretaris Perusahaan.</p>\r\n', 'Sekretaris Perusahaan', '2018-08-13', 'banner_tata_kelola_prshaan3.jpg'),
(23, '<h3>SHAKTY YUDHA SANTRI</h3>\r\n\r\n<h3>Ketua Audit Internal</h3>\r\n\r\n<p>Warga negara Indonesia, lahir di Jakarta pada tahun 1965, menyelesaikan gelar S1 Ilmu Sosial Politik dari Universitas Indonesia pada tahun 1991 dan kemudian memperoleh gelar S2 Akuntansi dari Universitas Indonesia pada tahun 2002.</p>\r\n\r\n<h3>TUGAS DAN TANGGUNG JAWAB</h3>\r\n\r\n<ol>\r\n	<li>Menyusun dan melaksanakan rencana audit internal tahunan serta program untuk mengevaluasi mutu kegiatan audit internal yang dilakukan;</li>\r\n	<li>Menguji dan mengevaluasi pelaksanaan sistem pengendalian internal dan sistem manajemen risiko sesuai ketentuan/kebijakan peraturan Perseroan yang berlaku;</li>\r\n	<li>Melakukan pemeriksaan dan penilaian terhadap efisiensi dan efektivitas dibidang keuangan, akuntansi, operasional, sumber daya manusia, pemasaran, teknologi informasi dan kegiatan lainnya pada setiap unit Perseroan;</li>\r\n	<li>Melakukan evaluasi dan validasi terhadap sistem pengendalian, pengelolaan, pemantauan efektivitas serta efisiensi sistem dan prosedur pada setiap unit Perseroan, baik yang telah berjalan maupun yang baru akan diimplementasikan;</li>\r\n	<li>Melakukan monitoring dan evaluasi atas hasil-hasil temuan audit dan menyampaikan saran dan perbaikan yang diperlukan terhadap penyelenggaraan kegiatan Perseroan dan sistem/kebijakan yang sesuai dengan peraturan perundang-undangan dan regulasi yang berlaku.</li>\r\n	<li>Memantau, menganalisis dan melaporkan pelaksanaan tindak lanjut perbaikan yang telah disarankan;</li>\r\n	<li>Bekerjasama dengan Komite Audit;</li>\r\n	<li>Menyusun laporan hasil audit dan menyampaikan laporan tersebut kepada Direktur Utama dan Dewan Komisaris dengan tembusan kepada Komite Audit; dan</li>\r\n	<li>Melaksanakan tugas khusus dalam lingkup pengendalian internal apabila diperlukan.</li>\r\n</ol>\r\n', 'Unit Audit Internal', '2018-08-13', 'banner_tata_kelola_prshaan4.jpg'),
(24, '', 'Lembaga Profesi Dan Penunjang Pasar Modal', '2018-08-09', ''),
(25, '<h3>KANTOR PUSAT:</h3>\r\n\r\n<p>Komplek Rasuna Epicentrum Lot.9<br />\r\nJl. H. R. Rasuna Said, Karet Kuningan<br />\r\nSetiabudi, Jakarta 12940</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Telepon: (6221) 299 121 55<br />\r\nFaksimili: (6221) 299 417 89</p>\r\n\r\n<p>Email:&nbsp;<a href=\"mailto:corsec@imc.co.id\">corsec@imc.co.id</a><br />\r\nWebsite:&nbsp;<a href=\"http://www.imc.co.id/\">www.imc.co.id</a></p>\r\n', 'Hubungi', '2018-08-09', 'banner_kontak2.jpg'),
(90, '', 'RUPS', '2018-08-13', 'banner_mdia_rups.jpg'),
(101, '', 'Struktur Grup Perusahaan', '2018-08-12', ''),
(123, '', 'Laporan Tahunan', '2018-08-10', 'banner_hubungan_investor.jpg'),
(245, '', 'Tanggung Jawab Sosial Perusahaan', '2018-08-10', ''),
(249, '', 'Presentasi dan Siaran Pers', '2018-08-10', 'banner_hubungan_investor1.jpg'),
(256, '', 'Prospektus', '2018-08-10', 'banner_hubungan_investor2.jpg'),
(456, '', 'Laporan Keuangan', '2018-08-13', 'banner_hubungan_investor1.jpg'),
(478, '', 'Paparan Publik', '2018-08-03', 'banner_DIVIDEN_mdia1.jpg'),
(909, '', 'Struktur Organisasi Perusahaan', '2018-08-14', ''),
(2312, '', 'Struktur Pemegang Saham', '2018-08-09', 'banner_STRUktur_saham_mdia.jpg'),
(2324, '<h3>Kronologi Pencatatan Saham</h3>\r\n\r\n<p>Pada tanggal 11 April 2014, Perseroan mencatat sahamnya pada Bursa Efek Indonesia melalui Penawaran Umum Saham Perdana sebanyak 3.921.553.840 saham dengan nilai nominal Rp 100 (angka penuh) per saham.</p>\r\n\r\n<p>Pada tanggal 16 Juni 2017, Perseroan melakukan pemecahan atas nilai nominal saham MDIA (stock split) dari Nilai Nominal Lama sebesar Rp100,- per saham menjadi Nominal Baru sebesar Rp10,- per saham, atau dengan Rasio Pemecahan per Saham 1 : 10.</p>\r\n', 'Informasi Saham', '2018-08-13', 'banner_info_saham_mdia.jpg'),
(23244, '', 'Dividen', '2018-08-09', 'banner_DIVIDEN_mdia.jpg'),
(23451, '', 'Penghargaan dan Sertifikasi', '2018-08-10', 'banner_mdia_penghargaan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_statis_en`
--

CREATE TABLE `halaman_statis_en` (
  `id_halstatis` int(255) NOT NULL,
  `isi_halaman` text NOT NULL,
  `judul_halaman` varchar(255) NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_statis_en`
--

INSERT INTO `halaman_statis_en` (`id_halstatis`, `isi_halaman`, `judul_halaman`, `tgl_posting`, `gambar`) VALUES
(1, '<p>MDIA has embarked on a remarkable journey over the past few years, driven by the performance of Free-to-Air (FTA) TV subsidiary ANTV. From its position as the seventh ranked FTA TV station in 2013, we began to transform with a programming strategy that targeted female viewers and since then, ANTV has consistently focused on family, children and entertainment content, which has proven to be successful in achieving new milestones each year. We give thanks and praise to God for these achievements, especially amidst the considerable political and economic volatility.</p>\r\n\r\n<p>MDIA recorded its highest ever revenue in 2016, outperforming the industry with double digit growth of 26.7% to IDR 1,756.6 billion. Operating Income increased by 38.9% to IDR 536.7 billion, with net income amounting to IDR 645.6 billion, representing an increase of 151.5% compared with 2015. These robust results were achieved amidst a volatile political and economic climate, with the Indonesian economy growing 5.0% or or increasing by just 0.2% from 2015 to 2016 and the prospects of Level 1 and Level 2 Regional Head elections in early 2017 as well as tax amnesty issues creating an atmosphere of uncertainty. Amidst these conditions, ANTV continued to deliver exciting and engaging larger-than-life programs that successfully drew the target female audience. The combination of global programs together with rising proportions of domestic content is designed to appeal to audiences and sustain ANTV&rsquo;s reputation as a trendsetter in the industry they continued to deliver.</p>\r\n\r\n<p>ANTV continued to broadcast local series such supplemented by Indian series which remained popular with viewers. Pesbukers was rated as the number one comedy program among entertainment TV stations1. Children&rsquo;s programs also made a comeback at year end. With regard to marketing, ANTV continued its previous strategy of boosting engagement by encouraging its stars to directly interact with fans over social media to increase viewer engagement. In parallel, ANTV continuously invested in developing its human resources and upgrading its broadcasting infrastructure and equipment such as studio and cameras, as well as its Master Control Room. Such investments are important in order to keep up with the industry and deliver to the standard that viewers expect from a Tier 1 FTA TV station. In particular, we realize the need for fresh talent to support continuous innovation in an industry that thrives on novelty.</p>\r\n\r\n<p>ANTV expects to see sustainable growth in 2017, supported by its ability in identifying engaging programs as well as its effective programming strategy, thus strengthening the Company&rsquo;s brand as well as viewer interest. At the same time, having successfully established ANTV as a Tier 1 FTA brand, MDIA has taken steps to diversify its business lines in order to ensure growth in the future. Complementing ANTV&rsquo;s FTA TV business, MDIA is establishing a talent agency which is aimed to support ANTV&rsquo;s growth. In addition, MDIA is also continuously focusing on strengthening its in-house program production capability. These three lines of business will support one another for mutual synergies, and it is expected that they will ultimately generate income streams.</p>\r\n\r\n<p>ANTV and MDIA continued to emphasize implementation of good corporate governance principles, including compliance with regulations. On October 14, 2016, ANTV successfully received an extension of its FTA television Operational Broadcasting License (IPP) for the next 10 years from the Ministry of Communications and Informatics of the Republic of Indonesia based on Decree No. 1817 year 2016, demonstrating that ANTV is a station with a good record of compliance with regulations. We will continue to emphasize compliance with regulations in partnership with the government as a good corporate citizen. In addition, MDIA through ANTV also carried out social activities and programs designed to benefit the underprivileged and needy, and bring ANTV closer to its target community.</p>\r\n\r\n<p>It has been a stellar year for MDIA and ANTV and I am proud of all our people for their efforts to make this happen. I also wish to express my gratitude to the Board of Commissioners, our loyal viewers, our trusted partners and our valued shareholders for being part of our journey in bringing color to everyday life. I am optimistic that we will be able to sustain and even improve on these achievements, for the benefit of all stakeholders.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<h3>ERICK THOHIR</h3>\r\n\r\n<p>President Director</p>\r\n', 'Message from President Director', '2018-08-08', 'foto_sambutan_direktur_utama.jpg'),
(2, '<h3>THE COMPANY AT A GLANCE</h3>\r\n\r\n<p>PT Intermedia Capital Tbk. (&ldquo;the Company&rdquo; or &ldquo;MDIA&rdquo;) was established in 2008 with the name PT Magazine Asia before subsequently changing its name in that year to PT Intermedia Capital. The Company began commercial operations in 2009. The Company listed its shares on the Indonesia Stock Exchange on April 11, 2014 with the ticker MDIA. MDIA is the parent company of PT Cakrawala Andalas Televisi (ANTV), one of 10 nationally licensed terrestrial Free-to-Air (FTA) television stations in Indonesia. Entering the digital era, the Company and ANTV, which are part of VIVA Group, have implemented a strategy of convergence for growth whereby content broadcasts are accessible anytime, anywhere and with any device, in order to deliver a memorable experience for viewers.</p>\r\n\r\n<h3>VISION</h3>\r\n\r\n<p>To be a competitive and leading media company in entertaining Indonesian families.</p>\r\n\r\n<h3>MISSION</h3>\r\n\r\n<ol>\r\n	<li>Participate and develop the national economy and strengthen national integrity by broadcasting innovative and quality programs for every family member.</li>\r\n	<li>Support the development of the national character with the spirit of creativity and innovation.</li>\r\n	<li>Focus on profitability and sustainable growth by providing added value to stakeholders through Good Corporate Governance practices.</li>\r\n</ol>\r\n\r\n<h3>CORPORATE VALUES</h3>\r\n\r\n<ol>\r\n	<li>CUSTOMER FOCUS<br />\r\n	Prioritizing customer needs in giving the best services by maintaining the interest of the Company.</li>\r\n	<li>CREATIVITY AND INNOVATION<br />\r\n	Eager to produce unique products and continuously making changes that create economic value in accordance with the Company&rsquo;s interests.</li>\r\n	<li>TEAMWORK<br />\r\n	The strength of teamwork between individual that complements each other through open communication and with unified commitment to achieve the Company&rsquo;s goals.</li>\r\n	<li>GOOD CORPORATE GOVERNANCE<br />\r\n	Safe and prudent corporate governance practices by due consideration in balancing the needs of all stakeholders.</li>\r\n</ol>\r\n', 'Corporate Overview', '2018-08-11', 'profile-boc.jpg'),
(3, '<p>PT. Intermedia Capital Tbk. (&ldquo;MDIA&rdquo; or &ldquo;Company&rdquo;) was established in 2008 and headquartered at Komplek Rasuna Epicentrum Lot.9 Jl. H.R. Rasuna Said Karet Kuningan Setiabudi, South Jakarta, Indonesia. MDIA is engaged in providing content focusing on family, children and entertainment through its subsidiaries, PT. Cakrawala Andalas Televisi, who manage the free-to-air television channel, with a call sign ANTV. In December 2013, MDIA change its Company&rsquo;s status from private company to public company (Tbk.). In April 11th 2014, the Company listed its shares in Indonesia Stock Exchange with the ticker code &ldquo;MDIA&rdquo;.</p>\r\n\r\n<p>The Company acquired 99,99% of ANTV shares after of News Corp Group divested its entire shares in ANTV. ANTV is one of 10 Private Broadcasting Institutions which has been granted a license to broadcast on nationwide basis pursuant to the Decree of the Minister of Communication and Informatics No. 107/KEP/M.KOMINFO/10/2006 dated October 16th, 2006. On October 14, 2016, ANTV successfully received an extension of its FTA television Operational Broadcasting License (IPP) for the next 10 years from the Ministry of Communications and Informatics of the Republic of Indonesia based on Decree No. 1817 year 2016.</p>\r\n\r\n<p>Subsequently, ANTV obtained the approval for network station system from the Minister of Communication and Informatics pursuant to the Decree No.461/KEP/M.KOMINFO/12/2010, dated December 23, 2010. ANTV has successfully obtained International Standard Quality Management System certification of ISO 9001:2015 for the scope of Television Broadcasting System and valid until 8 March 2020. In year 2012, ANTV obtained the license of FTA Multiplexing Operation for the Private Broadcasting Institution in West Java and East Java provinces and in Aceh and North Sumatra provinces in year 2013. In its development, MDIA has transformed ANTV to become a television station focused on family, children and entertainment. The transformation has successfully placed ANTV in the Tier 1 Indonesia FTA television station. In February 2016, ANTV took initiative and became the first Private Broadcasting Institution television, and currently became the only television station that broadcasted the sign language in &ldquo;Topik Pagi&rdquo; news program.</p>\r\n\r\n<h3>RELAY STATION</h3>\r\n\r\n<p>Currently ANTV operates a network station system with its main station located in Jakarta. In this broadcasting system, ANTV is supported by 41 transmission stations which entirely cover 193 cities and regencies in Indonesia with more than 166,4 million people.</p>\r\n\r\n<h3>ANALOG TRANSMISSION</h3>\r\n', 'Our Business', '2018-08-09', 'banner_kontak1.jpg'),
(12, '', 'Directors', '2018-08-09', 'profile-bod.jpg'),
(13, '', 'Board Of Commissioners', '2018-08-10', 'profile-boc1.jpg'),
(19, '<p>The Audit Committee is responsible for providing opinions to the Board of Commissioners on reports or other items that are submitted by the Board of Directors to the Board of Commissioners, for identifying items that need the attention of the Board of Commissioners, and executing other tasks that are related to the tasks of the Board of Commissioners, among others including:</p>\r\n\r\n<ol>\r\n	<li>Reviewing the financial information that will be issued as the Company&rsquo;s financial statements, projections, and other financial information;</li>\r\n	<li>To review the Company&rsquo;s compliance with Capital Market regulations and other laws and regulations related to the Company&rsquo;s activities;</li>\r\n	<li>To review the implementation of audit by the internal auditor towards the Company;</li>\r\n	<li>To report to the Board of Commissioners on various risks faced by the Company and the implementation of risk management by the Board of Directors;</li>\r\n	<li>To review and report to the Board of Commissioners on complaints relating to the Company; and</li>\r\n	<li>To maintain the confidentiality of documents, data and information owned by the Company.</li>\r\n</ol>\r\n\r\n<h3>THE AUDIT COMMITTEE MEMBERSHIP</h3>\r\n\r\n<p>Based on the Decree of the Board of Commissioners No.SK.005 DEKOM/XII/2014 dated December 22, 2014, the Company has an Audit Committee which is chaired by an Independent Commissioner and 2 (two) members from outside of the Company, namely:</p>\r\n\r\n<ol>\r\n	<li>Ilham Akbar Habibie as Chairman</li>\r\n	<li>Ridwan Amsori as a member; and</li>\r\n	<li>Arydhian B. Djamin as member</li>\r\n</ol>\r\n\r\n<h3>TERM OF SERVICE</h3>\r\n\r\n<p>The term of service of the Head of the Audit Committee is the same as his term of service as an Independent Commissioner, whereas members of the Committee are appointed for a term of service of 3 (three) years.</p>\r\n\r\n<h3>THE MEMBERS OF AUDIT COMMITTEE PROFILE</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>ILHAM A. HABIBIE</h3>\r\n\r\n<p>He has served as Chairman of the Company&rsquo;s Audit Committee since February 2014. The profile of Mr. Ilham A. Habibie may be seen in the Profile of the Board of Commissioners section.</p>\r\n\r\n<h3>RIDWAN AMSORI</h3>\r\n\r\n<p>Indonesian citizen, born in Jakarta in 1980, earned a degree in Economics from Trisakti University majoring in Accounting. He served as a member of the Audit Committee of the Company since February 2014 up to this moment. Previously he served as program coordinator for the Yayasan Satu Untuk Negeri tvOne (2012&ndash;February 2014), Junior Manager Auditor PT Bakrie Global Ventura (2012- February 2014), Senior Auditor PT Capital Manager Asia Indonesia (2011&ndash;2012), Manager of Consumer Finance PT CIMB Niaga Tbk. (2006&ndash;2010), Sales PT Bank Niaga Tbk. (2004&ndash;2006), Accounting Officer PT Rumsitor Tehnik (2003&ndash;2004).</p>\r\n\r\n<h3>ARYDHIAN B. DJAMIN</h3>\r\n\r\n<p>Indonesian citizen born 1975 in Padang, earned a degree in Economics from the University of Indonesia and holds a Magister in Economics from the University of Indonesia. Served as a member of the Audit Committee of the Company since December 2014, Currently, he served as a Lecturer at Perbanas since 2008, a member of the audit committee of PT Exploitasi Energi Indonesia Tbk. since 2013. He also served as Finance Manager at Balai Pustaka (2006&ndash;2007), Junior Partner Audit at RSM AAJ Associates Public Accounting Firm (1999&ndash;2006), a lecturer at the University of Indonesia (2000&ndash;2006), and lecturer at the University of Bina Nusantara (2002).</p>\r\n', 'Audit Committee', '2018-08-14', 'banner_tata_kelola_prshaan.jpg'),
(20, '<p>The Nomination and Remuneration Committee was established by the Board of Commissioners to support the Board of Commissioners in implementing the nomination process and establish remuneration for the Board of Directors and Board of Commissioners.</p>\r\n\r\n<h3>MEMBERSHIP</h3>\r\n\r\n<p>Based on decree SK.001/DEKOM/VII/2017, the membership structure of the Company Nomination and Remuneration Committee are as follows:</p>\r\n\r\n<ol>\r\n	<li>Chairman: llham Akbar Habibie</li>\r\n	<li>Secretary: Risya Marhamila</li>\r\n	<li>Member: Anindya Novyan Bakrie</li>\r\n	<li>Member: Robertus Bismarka Kurniawan</li>\r\n	<li>Anggota: Anindra Ardiansyah Bakrie</li>\r\n</ol>\r\n\r\n<h3>PROFILE</h3>\r\n\r\n<p>The work experience and education of llham Akbar Habibie, Robertus Bismarka Kurniawan, Anindya Novyan Bakrie, and Anindra Ardiansyah Bakrie can be seen in the profile of Board of Commissioners and Board of Directors.</p>\r\n\r\n<h3>RISYA MARHAMILA<br />\r\n<em>Secretary</em></h3>\r\n\r\n<p>Indonesian citizen, born in Bogor in 1974. She served as the Secretary of the Nomination and Remuneration Committee since June 2014. She concurrently served as Chief Human Capital at PT Cakrawala Andalas Televisi since October 2014. Previously she served as Human Resources General Manager of PT Visi Media Asia Tbk. since 2011. Risya Marhamila earned her Bachelor of Business Administration degree from the University of Indonesia in 2008.</p>\r\n', 'The Nomination And Remuneration Committee', '2018-08-13', 'banner_tata_kelola_prshaan1.jpg'),
(21, '<p>Risk Management Committee has duties and responsibilities to assist Board of Commissioners in providing professional and independent opinion in order to ensure a good and integrated risk management by the Board of Directors. The implementation of duties and responsibilities by the Risk Management Committee encompassed assessment, monitoring and recommendation over risk identification, risk assessment, risk mitigation by the related work units.<br />\r\nThe Risk Management Committee was established by the Decree of the Board of Commissioners No. SK.004/DEKOM/VI/2014, dated June 16, 2014 (&ldquo;SK.004/2014&rdquo;). The composition of membership are as follows:</p>\r\n\r\n<h3>MEMBERSHIP</h3>\r\n\r\n<p>1.&nbsp;ROBERTUS BISMARKA KURNIAWAN</p>\r\n\r\n<p>Chairman and Member<br />\r\nThe profile of Robertus Bismarka Kurniawan can be seen in the Board of Commissioners profile.</p>\r\n\r\n<p>2.&nbsp;INDRA CAHYA UNO</p>\r\n\r\n<p>Member<br />\r\nIndonesian citizen, born in Jakarta in 1967. Served as a member of the Risk Management Committee since Feburary 2015. He has concurrently served a Commissioner of PT Cakrawala Andalas Televisi since 2014 and Commissioner of PT Saratoga Investama Sedaya Tbk. since 2006. He previously served as Senior Advisor to the Principia Management Group (2006-2008), Managing Director at Matsushita Gobel Education Foundation (2004-2006), and HR Director PT Matsushita Gobel Electric Works Manufacturing (2002-2004). Indra Cahya Uno earned a Bachelor degree in Aerospace Engineering from the University of Michigan, USA in 1990, followed by a Master degree majoring in Business Administration from the University of Southern California, USA in 2000 and completed his doctorate degree from the University of Indonesia majoring in Strategic Management in 2013.</p>\r\n\r\n<p>3. C. F. CARMELITA HARDIKUSUMO</p>\r\n\r\n<p>Member<br />\r\nThe profile of C. F. Carmelita Hardikusumo can be seen in the Board of Commissioners profile.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'The Risk Management Committee', '2018-08-13', 'banner_tata_kelola_prshaan2.jpg'),
(22, '<h3>The Corporate Secretary</h3>\r\n\r\n<p>The Corporate Secretary plays an important role as the source of information for stakeholders. The Corporate Secretary facilitates the organizing of the GMS and the meetings of the Board of Commissioners and Board of Directors in accordance with the provisions of the Articles of Association of the Company, as well as preparing reports and materials needed in the meetings above. The Corporate Secretary also organizes the administration of the GMS including producing the minutes of meetings and files the results to the Financial Services Authority (OJK) and the Indonesia Stock Exchange (IDX).</p>\r\n\r\n<h3>DAVID TICYNO PARDEDE<br />\r\n<em>Corporate Secretary</em></h3>\r\n\r\n<p>Indonesian citizen, born 1969 in Pekanbaru. He concurrently serves as the Head of Legal and Regulatory for the Private Television Association Indonesia. Prior to serving as the Corporate Secretary of the Company, he served as Senior Legal Manager Commercial at PT Visi Media Asia Tbk. (2012&ndash;2013), Legal Manager Commercial at PT Cakrawala Andalas Televisi (2010&ndash;2012), as the Corporate Secretary of PT Quantum Media Communications Indonesia, PT Quantum Bahana, and PT Quantum Aksesindo Nusantara (2007&ndash;2010), and Legal Manager at PT Quantum Bahana (2003&ndash;2007). He obtained his bachelor of Law degree from Faculty of Law Atmajaya University, Yogyakarta in 1995.</p>\r\n\r\n<h3>LEGAL BASIS FOR THE APPOINTMENT</h3>\r\n\r\n<p>David Ticyno Pardede appointed as the Corporate Secretary based on the Decree of the Board of Directors No.SKD.001/IMC/XII/2013 dated December 12, 2013.</p>\r\n', 'The Corporate Secretary', '2018-08-13', 'banner_tata_kelola_prshaan3.jpg'),
(23, '<h3>SHAKTY YUDHA SANTRI</h3>\r\n\r\n<h3><em>Head of Internal Audit Unit</em></h3>\r\n\r\n<p>Indonesian citizen, born in Jakarta in 1965. Earn a degree in Social Politics from University of Indonesia in1991 and subsequently earned his Master Degree in Accounting from University of Indonesia in 2002.</p>\r\n\r\n<h3>DUTIES AND RESPONSIBILITIES</h3>\r\n\r\n<ol>\r\n	<li>To construct and implement an annual internal audit plan and program to evaluate the quality of internal audit activities that are carried out;</li>\r\n	<li>To test and evaluate the implementation of the internal control system and risk management system in accordance with Company&rsquo;s policies / applicable regulations;</li>\r\n	<li>To examine and assess the efficiency and effectiveness of the finance, accounting, operations, human resources, marketing, information technology and other activities in each unit of the Company;</li>\r\n	<li>To evaluate and validate the control systems, management, monitoring the effectiveness and efficiency of the system and procedures in each unit of the company, both current and those that will be implemented;</li>\r\n	<li>To monitor and evaluate the results of the audit findings and submit recommendations and improvements necessary to the implementation of the company&rsquo;s activities and systems/ policies are in accordance with the applicable laws and regulations.</li>\r\n	<li>To monitor, analyze and report on the implementation of the improvements that have been suggested;</li>\r\n	<li>To cooperate with the Audit Committee;</li>\r\n	<li>To compose the audit report and submit the report to the President Director and the Board of Commissioners with a copy to the Audit Committee; and</li>\r\n	<li>To carry out specific tasks within the scope of internal control that is assigned by the President Director when deemed necessary.</li>\r\n</ol>\r\n', 'Internal Audit Unit', '2018-08-13', 'banner_tata_kelola_prshaan4.jpg'),
(24, '', 'Capital Market Supporting Agencies', '2018-08-09', ''),
(25, '<h3>HEAD OFFICE:</h3>\r\n\r\n<p>Komplek Rasuna Epicentrum Lot.9<br />\r\nJl. H. R. Rasuna Said, Karet Kuningan<br />\r\nSetiabudi, Jakarta 12940</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Phone: (6221) 299 121 55<br />\r\nFax: (6221) 299 417 89</p>\r\n\r\n<p>Email:&nbsp;<a href=\"mailto:corsec@imc.co.id\" target=\"_blank\">corsec@imc.co.id</a><br />\r\nWebsite:&nbsp;<a href=\"https://www.imc.co.id/\" target=\"_blank\">www.imc.co.id</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Contact Us', '2018-08-09', 'banner_kontak2.jpg'),
(54, '<h3>THE COMPANY AT A GLANCE</h3>\r\n\r\n<p>PT Intermedia Capital Tbk. (&ldquo;the Company&rdquo; or &ldquo;MDIA&rdquo;) was established in 2008 with the name PT Magazine Asia before subsequently changing its name in that year to PT Intermedia Capital. The Company began commercial operations in 2009. The Company listed its shares on the Indonesia Stock Exchange on April 11, 2014 with the ticker MDIA. MDIA is the parent company of PT Cakrawala Andalas Televisi (ANTV), one of 10 nationally licensed terrestrial Free-to-Air (FTA) television stations in Indonesia. Entering the digital era, the Company and ANTV, which are part of VIVA Group, have implemented a strategy of convergence for growth whereby content broadcasts are accessible anytime, anywhere and with any device, in order to deliver a memorable experience for viewers.</p>\r\n\r\n<h3>VISION</h3>\r\n\r\n<p>To be a competitive and leading media company in entertaining Indonesian families.</p>\r\n\r\n<h3>MISSION</h3>\r\n\r\n<ol>\r\n	<li>Participate and develop the national economy and strengthen national integrity by broadcasting innovative and quality programs for every family member.</li>\r\n	<li>Support the development of the national character with the spirit of creativity and innovation.</li>\r\n	<li>Focus on profitability and sustainable growth by providing added value to stakeholders through Good Corporate Governance practices.</li>\r\n</ol>\r\n\r\n<h3>CORPORATE VALUES</h3>\r\n\r\n<ol>\r\n	<li>CUSTOMER FOCUS<br />\r\n	Prioritizing customer needs in giving the best services by maintaining the interest of the Company.</li>\r\n	<li>CREATIVITY AND INNOVATION<br />\r\n	Eager to produce unique products and continuously making changes that create economic value in accordance with the Company&rsquo;s interests.</li>\r\n	<li>TEAMWORK<br />\r\n	The strength of teamwork between individual that complements each other through open communication and with unified commitment to achieve the Company&rsquo;s goals.</li>\r\n	<li>GOOD CORPORATE GOVERNANCE<br />\r\n	Safe and prudent corporate governance practices by due consideration in balancing the needs of all stakeholders.</li>\r\n</ol>\r\n', 'Corporate Overview', '2018-08-08', 'profile-boc3.jpg'),
(90, '', 'General Meeting of Shareholders', '2018-08-13', 'banner_mdia_rups.jpg'),
(101, '', 'Company Group Structure', '2018-08-12', ''),
(123, '', 'Annual Report', '2018-08-10', 'banner_hubungan_investor.jpg'),
(245, '', 'Corporate Social Responsibility', '2018-08-10', ''),
(249, '', 'Presentation And Press Release', '2018-08-10', 'banner_hubungan_investor1.jpg'),
(256, '', 'Prospectus', '2018-08-10', 'banner_hubungan_investor2.jpg'),
(456, '', 'Financial Statements', '2018-08-13', 'banner_hubungan_investor1.jpg'),
(478, '', 'Paparan Publik', '2018-08-03', 'banner_DIVIDEN_mdia1.jpg'),
(909, '', 'Corporate Structure', '2018-08-14', ''),
(2312, '', 'Shareholders Composition', '2018-08-09', 'banner_STRUktur_saham_mdia.jpg'),
(2324, '<h3>Share Listing Chronology</h3>\r\n\r\n<p>On April 11, 2014, the Company listed its shares on the Indonesia Stock Exchange through an Initial Public Offering with total of 3,921,553,840 shares with nominal value of IDR 100 (full amount) per share.</p>\r\n\r\n<p>On June 16, 2017, the Company carried out a stock split whereby the stock split ratio of the Nominal Value of MDIA Shares to the Original Nominal Value of IDR 100,- per share became IDR 10,- per share, for a Stock Split Ratio of 1:10.</p>\r\n', 'Shares Information', '2018-08-13', 'banner_info_saham_mdia.jpg'),
(23244, '', 'Dividend', '2018-08-09', 'banner_DIVIDEN_mdia.jpg'),
(23451, '', 'Awards And Certifications', '2018-08-10', 'banner_mdia_penghargaan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `judul_rups`
--

CREATE TABLE `judul_rups` (
  `id_judul` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul_rups`
--

INSERT INTO `judul_rups` (`id_judul`, `judul`) VALUES
(1, 'RUPS 2018'),
(23, 'Rapat Umum Pemegang Saham Tahunan (“RUPST”), Rapat Umum Pemegang Saham Luar Biasa (“RUPSLB”), Rapat Umum Pemegang Saham Luar Biasa Independen (“RUPSLB Independen”) Tahun 2018'),
(123456, 'Pemegang Saham');

-- --------------------------------------------------------

--
-- Table structure for table `judul_rups_en`
--

CREATE TABLE `judul_rups_en` (
  `id_judul` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul_rups_en`
--

INSERT INTO `judul_rups_en` (`id_judul`, `judul`) VALUES
(1, 'AGMS Year 2018'),
(23, 'Annual General Meeting of Shareholders (“AGMS”), Extraordinary General Meeting of Shareholders (“EGMS”), Independent Extraordinary General Meeting of Shareholders (“Independent EGMS”) Year 2018'),
(123456, 'pemegang_saham');

-- --------------------------------------------------------

--
-- Table structure for table `judul_tanggungjawab`
--

CREATE TABLE `judul_tanggungjawab` (
  `id_judul` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul_tanggungjawab`
--

INSERT INTO `judul_tanggungjawab` (`id_judul`, `judul`, `tanggal`, `tempat`) VALUES
(1, ' Launching VCO Srikandi Bersama Lotte dalam Pemberdayaan Koperasi Perempuan', 'Januari 2017', 'Jakarta'),
(2, 'CANTIK ANTV LAMPUNG', '4 Februari 2017', 'Lampung');

-- --------------------------------------------------------

--
-- Table structure for table `judul_tanggungjawab_en`
--

CREATE TABLE `judul_tanggungjawab_en` (
  `id_judul` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul_tanggungjawab_en`
--

INSERT INTO `judul_tanggungjawab_en` (`id_judul`, `judul`, `tanggal`, `tempat`) VALUES
(1, 'The Launching of VCO Srikandi with Lotte In Empowering Women\\\'s Cooperatives', 'Januari 2017', 'Jakarta'),
(2, 'CANTIK ANTV LAMPUNG', '4 Februari 2017', 'Lampung');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Laporan Tahunan'),
(3, 'Presentasi dan Siaran Pers'),
(5, 'Paparan Publik'),
(7, 'Prospektus'),
(8, 'Dewan Komisaris'),
(9, 'Direksi'),
(10, 'Lembaga Profesi Dan Penunjang Pasar Modal');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita_en`
--

CREATE TABLE `kategori_berita_en` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita_en`
--

INSERT INTO `kategori_berita_en` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Annual Report'),
(3, 'Presentation And Press Release'),
(5, 'Public Expose'),
(7, 'Prospectus'),
(8, 'Board Of Commissioners'),
(9, 'Directors'),
(10, 'Capital Market Supporting Agencies');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_dokumen`
--

CREATE TABLE `kategori_dokumen` (
  `id_kategoridokumen` int(10) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `kategori_seo` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_dokumen`
--

INSERT INTO `kategori_dokumen` (`id_kategoridokumen`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(1, 'Ikhtisar Keuangan MDIA', 'ikhtisar-keuangan-mdia', 'Y'),
(2, 'Laporan Keuangan', 'laporan-keuangan', 'Y'),
(3, 'Prospektus', 'prospektus', 'Y'),
(4, 'Anggaran Dasar', 'anggaran-dasar', 'Y'),
(5, 'Pedoman Kerja Dewan Komisaris', 'pedoman-kerja-dewan-komisaris', 'Y'),
(6, 'Pedoman Kerja Direksi', 'pedoman-kerja-direksi', 'Y'),
(7, 'Kode Etik', 'kode-etik', 'Y'),
(8, 'Piagam Komite Audit', 'piagam-komite-audit', 'Y'),
(9, 'Pedoman Komite Nominasi dan Renumerasi', 'pedoman-komite-nominasi-dan-renumerasi', 'Y'),
(10, 'Piagam Unit Audit Internal', 'piagam-unit-audit-internal', 'Y'),
(11, 'Piagam WBS', 'piagam-wbs', 'Y'),
(12, 'Kebijakan Komunikasi Pemegang Saham', 'kebijakan-komunikasi-pemegang-saham', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_dokumen_en`
--

CREATE TABLE `kategori_dokumen_en` (
  `id_kategoridokumen` int(10) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `kategori_seo` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_dokumen_en`
--

INSERT INTO `kategori_dokumen_en` (`id_kategoridokumen`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(1, 'Financial Highlights', 'ikhtisar', 'Y'),
(2, 'Financial Statements', 'laporan-keuangan', 'Y'),
(3, 'Prospectus', 'prospektus', 'Y'),
(4, 'Articles of Association', 'anggaran-dasar', 'Y'),
(5, 'Board Of Commissioners Charter', 'pedoman-kerja-dewan-komisaris', 'Y'),
(6, 'Board Of Directors Charter', 'pedoman-kerja-direksi', 'Y'),
(7, 'Code Of Ethics', 'kode-etik', 'Y'),
(8, 'Audit Committee Charter', 'piagam-komite-audit', 'Y'),
(9, 'Nomination And Remuneration Charter', 'pedoman-komite-nominasi-dan-renumerasi', 'Y'),
(10, 'Internal Audit Charter', 'piagam-unit-audit-internal', 'Y'),
(11, 'WBS Chapter', 'piagam-wbs', 'Y'),
(12, 'Shareholders Communication Policy', 'kebijakan-komunikasi-pemegang-saham', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id_main` int(5) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `admin_menu` enum('Y','N') NOT NULL,
  `user_menu` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id_main`, `nama_menu`, `link`, `aktif`, `admin_menu`, `user_menu`) VALUES
(1, 'Halaman utama', 'home', 'Y', 'N', 'Y'),
(2, 'Tentang Kami', '', 'Y', 'N', 'Y'),
(3, 'Hubungan Investor', '', 'Y', 'N', 'Y'),
(4, 'Tata Kelola Perusahaan', '', 'Y', 'N', 'Y'),
(5, 'Tanggung Jawab Sosial', 'tanggung_jawab_sosial', 'Y', 'N', 'Y'),
(6, 'Kontak', 'kontak', 'Y', 'N', 'Y'),
(7, 'Karir', 'http://www.an.tv/career', 'Y', 'N', 'Y'),
(8, 'Manajemen User', 'administrator/manajemenuser', 'N', 'Y', 'N'),
(9, 'Setting Menu', '', 'N', 'Y', 'Y'),
(10, 'Manajemen Berita', '', 'N', 'Y', 'Y'),
(11, 'Manajemen Dokumen', '', 'N', 'Y', 'Y'),
(12, 'Manajemen Gambar', '', 'N', 'Y', 'Y'),
(13, 'Slider', 'administrator/slider', 'N', 'Y', 'Y'),
(14, 'Penghargaan dan Sertifikasi', '', 'N', 'Y', 'Y'),
(15, 'Tanggung Jawab Sosial', '', 'N', 'Y', 'Y'),
(16, 'RUPS', '', 'N', 'Y', 'Y'),
(17, 'Dividen', '', 'N', 'Y', 'Y'),
(18, 'Laporan Keuangan', '', 'N', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu_en`
--

CREATE TABLE `main_menu_en` (
  `id_main` int(5) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `admin_menu` enum('Y','N') NOT NULL,
  `user_menu` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu_en`
--

INSERT INTO `main_menu_en` (`id_main`, `nama_menu`, `link`, `aktif`, `admin_menu`, `user_menu`) VALUES
(1, 'Home', 'en_home', 'Y', 'N', ''),
(2, 'About Us', '', 'Y', 'N', 'Y'),
(3, 'Investor Relations', '', 'Y', 'N', 'Y'),
(4, 'Corporate Governance', '', 'Y', 'N', 'Y'),
(5, 'Corporate Social Responsibility', 'en_csr', 'Y', 'N', ''),
(6, 'Contact Us', 'en_contact_us', 'Y', 'N', ''),
(7, 'Career', 'http://www.an.tv/career', 'Y', 'N', ''),
(8, 'Manajemen User', 'administrator/manajemenuser', 'N', 'Y', 'N'),
(9, 'Setting Menu', '', 'N', 'Y', 'Y'),
(10, 'Manajemen Berita', '', 'N', 'Y', 'Y'),
(11, 'Manajemen Dokumen', '', 'N', 'Y', 'Y'),
(12, 'Manajemen Gambar', '', 'N', 'Y', 'Y'),
(13, 'Slider', 'administrator/slider', 'N', 'Y', 'Y'),
(14, 'Penghargaan dan Sertifikasi', '', 'N', 'Y', 'Y'),
(15, 'Tanggung Jawab Sosial', '', 'N', 'Y', 'Y'),
(16, 'RUPS', '', 'N', 'Y', 'Y'),
(17, 'Dividen', 'administrator/dividen', 'N', 'Y', 'Y'),
(18, 'Laporan Keuangan', '', 'N', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', '?module=user', '', '', 'N', 'admin', 'Y', 1, ''),
(18, 'Berita', '?module=berita', '', '', 'Y', 'user', 'Y', 6, 'semua-berita.html'),
(19, 'Banner', '?module=banner', '', '', 'Y', 'admin', 'Y', 9, ''),
(37, 'Profil', '?module=profil', '', 'gedungku.jpg', 'N', 'admin', 'N', 3, 'profil-kami.html'),
(10, 'Manajemen Modul', '?module=modul', '', '', 'N', 'admin', 'Y', 2, ''),
(31, 'Kategori', '?module=kategori', '', '', 'Y', 'admin', 'Y', 5, ''),
(33, 'Poling', '?module=poling', '', '', 'Y', 'admin', 'Y', 10, ''),
(34, 'Tag (Label)', '?module=tag', '', '', 'N', 'admin', 'Y', 7, ''),
(35, 'Komentar', '?module=komentar', '', '', 'Y', 'admin', 'Y', 8, ''),
(36, 'Download', '?module=download', '', '', 'Y', 'admin', 'Y', 11, 'semua-download.html'),
(40, 'Hubungi Kami', '?module=hubungi', '', '', 'Y', 'admin', 'Y', 12, 'hubungi-kami.html'),
(41, 'Agenda', ' ?module=agenda', '', '', 'Y', 'user', 'Y', 31, 'semua-agenda.html'),
(42, 'Shoutbox', '?module=shoutbox', '', '', 'Y', 'admin', 'Y', 13, ''),
(43, 'Album', '?module=album', '', '', 'N', 'admin', 'Y', 14, ''),
(44, 'Galeri Foto', '?module=galerifoto', '', '', 'Y', 'admin', 'Y', 15, ''),
(45, 'Templates', '?module=templates', '', '', 'N', 'admin', 'Y', 16, ''),
(46, 'Kata Jelek', '?module=katajelek', '', '', 'N', 'admin', 'Y', 17, ''),
(47, 'RSS', '-', '', '', 'Y', 'admin', 'N', 18, ''),
(48, 'YM', '-', '', '', 'Y', 'admin', 'N', 19, ''),
(49, 'Indeks Berita', '-', '', '', 'Y', 'admin', 'N', 20, ''),
(50, 'Kalender', '-', '', '', 'Y', 'admin', 'N', 21, ''),
(51, 'Statistik User', '-', '', '', 'Y', 'admin', 'N', 22, ''),
(52, 'Pencarian', '-', '', '', 'Y', 'admin', 'N', 23, ''),
(53, 'Berita Teratas', '-', '', '', 'Y', 'admin', 'N', 24, ''),
(54, 'Arsip Berita', '-', '', '', 'Y', 'admin', 'N', 25, ''),
(55, 'Berita Sebelumnya', '-', '', '', 'Y', 'admin', 'N', 26, ''),
(60, 'Sekilas Info', '?module=sekilasinfo', '', '', 'Y', 'admin', 'Y', 13, ''),
(57, 'Menu Utama', '?module=menuutama', '', '', 'Y', 'admin', 'Y', 28, ''),
(58, 'Sub Menu', '?module=submenu', '', '', 'Y', 'admin', 'Y', 29, ''),
(59, 'Halaman Statis', '?module=halamanstatis', '', '', 'Y', 'admin', 'Y', 30, ''),
(61, 'Identitas Website', '?module=identitas', '', '', 'N', 'admin', 'Y', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `modul_en`
--

CREATE TABLE `modul_en` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `modul_en`
--

INSERT INTO `modul_en` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', '?module=user', '', '', 'N', 'admin', 'Y', 1, ''),
(18, 'Berita', '?module=berita', '', '', 'Y', 'user', 'Y', 6, 'semua-berita.html'),
(19, 'Banner', '?module=banner', '', '', 'Y', 'admin', 'Y', 9, ''),
(37, 'Profil', '?module=profil', '', 'gedungku.jpg', 'N', 'admin', 'N', 3, 'profil-kami.html'),
(10, 'Manajemen Modul', '?module=modul', '', '', 'N', 'admin', 'Y', 2, ''),
(31, 'Kategori', '?module=kategori', '', '', 'Y', 'admin', 'Y', 5, ''),
(33, 'Poling', '?module=poling', '', '', 'Y', 'admin', 'Y', 10, ''),
(34, 'Tag (Label)', '?module=tag', '', '', 'N', 'admin', 'Y', 7, ''),
(35, 'Komentar', '?module=komentar', '', '', 'Y', 'admin', 'Y', 8, ''),
(36, 'Download', '?module=download', '', '', 'Y', 'admin', 'Y', 11, 'semua-download.html'),
(40, 'Hubungi Kami', '?module=hubungi', '', '', 'Y', 'admin', 'Y', 12, 'hubungi-kami.html'),
(41, 'Agenda', ' ?module=agenda', '', '', 'Y', 'user', 'Y', 31, 'semua-agenda.html'),
(42, 'Shoutbox', '?module=shoutbox', '', '', 'Y', 'admin', 'Y', 13, ''),
(43, 'Album', '?module=album', '', '', 'N', 'admin', 'Y', 14, ''),
(44, 'Galeri Foto', '?module=galerifoto', '', '', 'Y', 'admin', 'Y', 15, ''),
(45, 'Templates', '?module=templates', '', '', 'N', 'admin', 'Y', 16, ''),
(46, 'Kata Jelek', '?module=katajelek', '', '', 'N', 'admin', 'Y', 17, ''),
(47, 'RSS', '-', '', '', 'Y', 'admin', 'N', 18, ''),
(48, 'YM', '-', '', '', 'Y', 'admin', 'N', 19, ''),
(49, 'Indeks Berita', '-', '', '', 'Y', 'admin', 'N', 20, ''),
(50, 'Kalender', '-', '', '', 'Y', 'admin', 'N', 21, ''),
(51, 'Statistik User', '-', '', '', 'Y', 'admin', 'N', 22, ''),
(52, 'Pencarian', '-', '', '', 'Y', 'admin', 'N', 23, ''),
(53, 'Berita Teratas', '-', '', '', 'Y', 'admin', 'N', 24, ''),
(54, 'Arsip Berita', '-', '', '', 'Y', 'admin', 'N', 25, ''),
(55, 'Berita Sebelumnya', '-', '', '', 'Y', 'admin', 'N', 26, ''),
(60, 'Sekilas Info', '?module=sekilasinfo', '', '', 'Y', 'admin', 'Y', 13, ''),
(57, 'Menu Utama', '?module=menuutama', '', '', 'Y', 'admin', 'Y', 28, ''),
(58, 'Sub Menu', '?module=submenu', '', '', 'Y', 'admin', 'Y', 29, ''),
(59, 'Halaman Statis', '?module=halamanstatis', '', '', 'Y', 'admin', 'Y', 30, ''),
(61, 'Identitas Website', '?module=identitas', '', '', 'N', 'admin', 'Y', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(20) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `keterangan`) VALUES
(1, 'banner_1-old.jpg', 'Slider 1'),
(2, 'new2.jpg', ''),
(3, 'new61.jpg', ''),
(4, 'new31.jpg', ''),
(5, 'new51.jpg', ''),
(54, 'new12.jpg', 'Slide 6');

-- --------------------------------------------------------

--
-- Table structure for table `subsub_menu`
--

CREATE TABLE `subsub_menu` (
  `id_subsub` int(10) NOT NULL,
  `nama_subsub` varchar(255) NOT NULL,
  `link_subsub` varchar(255) NOT NULL,
  `idsub` int(10) NOT NULL,
  `aktif` enum('N','Y') NOT NULL DEFAULT 'Y',
  `admin_subsubmenu` enum('N','Y') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsub_menu`
--

INSERT INTO `subsub_menu` (`id_subsub`, `nama_subsub`, `link_subsub`, `idsub`, `aktif`, `admin_subsubmenu`) VALUES
(1, 'Sambutan Direktur Utama', 'sambutan_direktur_utama', 2, 'Y', 'N'),
(2, 'Dewan Komisaris', 'dewan_komisaris', 2, 'Y', 'N'),
(3, 'Direksi', 'dewan_direksi', 2, 'Y', 'N'),
(4, 'Ikhtisar Keuangan MDIA', '', 10, 'Y', 'N'),
(5, 'Laporan Keuangan', 'laporan_keuangan', 10, 'Y', 'N'),
(8, 'Komite Audit', 'komite_audit', 17, 'Y', 'N'),
(9, 'Komite Nominasi dan Renumerasi', 'komite_nominasi', 17, 'Y', 'N'),
(11, 'Sekretaris Perusahaan', 'sekretaris_perusahaan', 17, 'Y', 'N'),
(12, 'Unit Audit Internal', 'unit_audit_internal', 17, 'Y', 'N'),
(13, 'Anggaran Dasar', '', 18, 'Y', 'N'),
(14, 'Pedoman Kerja Dewan Komisaris', '', 18, 'Y', 'N'),
(15, 'Pedoman Kerja Direksi', '', 18, 'Y', 'N'),
(16, 'Kode Etik', '', 18, 'Y', 'N'),
(17, 'Piagam Komite Audit', '', 18, 'Y', 'N'),
(18, 'Pedoman Komite Nominasi dan Renumerasi', '', 18, 'Y', 'N'),
(19, 'Piagam Unit Audit Internal', '', 18, 'Y', 'N'),
(20, 'Piagam WBS', '', 18, 'Y', 'N'),
(21, 'Kebijakan Komunikasi Pemegang Saham', '', 18, 'Y', 'N'),
(22, 'Komite Manajemen Resiko', 'komite_manajemen_resiko', 17, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `subsub_menu_en`
--

CREATE TABLE `subsub_menu_en` (
  `id_subsub` int(10) NOT NULL,
  `nama_subsub` varchar(255) NOT NULL,
  `link_subsub` varchar(255) NOT NULL,
  `idsub` int(10) NOT NULL,
  `aktif` enum('N','Y') NOT NULL DEFAULT 'Y',
  `admin_subsubmenu` enum('N','Y') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsub_menu_en`
--

INSERT INTO `subsub_menu_en` (`id_subsub`, `nama_subsub`, `link_subsub`, `idsub`, `aktif`, `admin_subsubmenu`) VALUES
(1, 'Message from Presiden Director', 'en_message_from_president_director', 2, 'Y', 'N'),
(2, 'Board Of Commissioners', 'en_board_of_commissioners', 2, 'Y', 'N'),
(3, 'Directors', 'en_board_of_directors', 2, 'Y', 'N'),
(4, 'Financial Highlights', '', 10, 'Y', 'N'),
(5, 'Financial Statements', 'en_financial_statements', 10, 'Y', 'N'),
(8, 'Audit Committee', 'en_audit_committee', 17, 'Y', 'N'),
(9, 'The Nomination And Remuneration Committee', 'en_nomination_remuneration_committee', 17, 'Y', 'N'),
(11, 'The Corporate Secretary', 'en_corporate_secretary', 17, 'Y', 'N'),
(12, 'Internal Audit Unit', 'en_internal_audit_unit', 17, 'Y', 'N'),
(13, 'Articles of Association', '', 18, 'Y', 'N'),
(14, 'Board Of Commissioners Charter', '', 18, 'Y', 'N'),
(15, 'Board Of Directors Charter', '', 18, 'Y', 'N'),
(16, 'Code Of Ethics', '', 18, 'Y', 'N'),
(17, 'Audit Committee Charter', '', 18, 'Y', 'N'),
(18, 'Nomination And Remuneration Charter', '', 18, 'Y', 'N'),
(19, 'Internal Audit Charter', '', 18, 'Y', 'N'),
(20, 'WBS Charter', '', 18, 'Y', 'N'),
(21, 'Shareholders Communication Policy', '', 18, 'Y', 'N'),
(22, 'The Risk Management Committee', 'en_risk_management_committee', 17, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id_sub` int(5) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `link_sub` varchar(100) NOT NULL,
  `id_main` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `admin_submenu` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id_sub`, `nama_sub`, `link_sub`, `id_main`, `aktif`, `admin_submenu`) VALUES
(1, 'Profil Perusahaan', 'profil_perusahaan', 2, 'Y', 'N'),
(2, 'Manajemen', '', 2, 'Y', 'N'),
(3, 'Struktur Organisasi Perusahaan', 'struktur_organisasi', 2, 'Y', 'N'),
(4, 'Struktur Grup Perusahaan', 'struktur_grup_perusahaan', 2, 'Y', 'N'),
(5, 'Bisnis', 'bisnis', 2, 'Y', 'N'),
(6, 'Penghargaan dan Sertifikasi', 'penghargaan_sertifikasi', 2, 'Y', 'N'),
(7, 'Lembaga Profesi dan Penunjang Pasar Modal', 'lembaga_profesi', 2, 'Y', 'N'),
(8, 'Lembar Fakta Perusahaan', 'lembar_fakta', 3, 'Y', 'N'),
(9, 'Laporan Tahunan', 'laporan_tahunan', 3, 'Y', 'N'),
(10, 'Informasi Keuangan', '', 3, 'Y', 'N'),
(11, 'Presentasi dan Siaran Pers', 'presentasi_siaran_pers', 3, 'Y', 'N'),
(12, 'Prospektus', 'prospektus', 3, 'Y', 'N'),
(13, 'Struktur Pemegang Saham', 'pemegang_saham', 3, 'Y', 'N'),
(14, 'Dividen', 'dividen', 3, 'Y', 'N'),
(15, 'RUPS', 'rups_page', 3, 'Y', 'N'),
(16, 'Paparan Publik', 'paparan_publik', 3, 'Y', 'N'),
(17, 'Perangkat Tata Kelola', '', 4, 'Y', 'N'),
(18, 'Dokumen Tata Kelola', '', 4, 'Y', 'N'),
(19, 'Menu Utama', 'administrator/menuutama', 9, 'N', 'Y'),
(20, 'Sub Menu', 'administrator/submenu', 9, 'N', 'Y'),
(21, 'Sub-Sub Menu', 'administrator/subsubmenu', 9, 'N', 'Y'),
(22, 'Kategori Berita', 'administrator/kategoriberita', 10, 'N', 'Y'),
(23, 'Halaman Statis', 'administrator/halamanbaru', 10, 'N', 'Y'),
(24, 'Kategori Dokumen', 'administrator/kategoridokumen', 11, 'N', 'Y'),
(26, 'Album', 'administrator/album', 12, 'N', 'Y'),
(27, 'Gambar', 'administrator/galeri', 12, 'N', 'Y'),
(28, 'Berita', 'administrator/berita', 10, 'N', 'Y'),
(34, 'Dokumen Langsung', 'administrator/dokumen', 11, 'N', 'Y'),
(36, 'Tahun', 'administrator/tahun_penghargaan', 14, 'N', 'Y'),
(37, 'Berita', 'administrator/berita_penghargaan', 14, 'N', 'Y'),
(38, 'Judul', 'administrator/jdl_tanggungjwb', 15, 'N', 'Y'),
(39, 'Berita', 'administrator/berita_tanggungjwb', 15, 'N', 'Y'),
(40, 'Judul', 'administrator/jdl_rups', 16, 'N', 'Y'),
(41, 'Isi', 'administrator/berita_rups', 16, 'N', 'Y'),
(42, 'Tahun', 'administrator/thn_dividen', 17, 'N', 'Y'),
(43, 'Isi', 'administrator/isi_dividen', 17, 'N', 'Y'),
(44, 'Tahun', 'administrator/tahun_lapkeu', 18, 'N', 'Y'),
(45, 'Dokumen', 'administrator/lapkeu', 18, 'N', 'Y'),
(46, 'Dokumen Berita', 'administrator/dokber', 11, 'N', 'Y'),
(47, 'Informasi Saham', 'informasi_saham', 3, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_en`
--

CREATE TABLE `sub_menu_en` (
  `id_sub` int(5) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `link_sub` varchar(100) NOT NULL,
  `id_main` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `admin_submenu` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu_en`
--

INSERT INTO `sub_menu_en` (`id_sub`, `nama_sub`, `link_sub`, `id_main`, `aktif`, `admin_submenu`) VALUES
(1, 'Corporate Overview', 'en_corporate_overview', 2, 'Y', 'N'),
(2, 'Management', '', 2, 'Y', 'N'),
(3, 'Corporate Structure', 'en_corporate_structure', 2, 'Y', 'N'),
(4, 'Company Group Structure', 'en_group_structure', 2, 'Y', 'N'),
(5, 'Our Business', 'en_our_business', 2, 'Y', 'N'),
(6, 'Awards And Certifications', 'en_awards', 2, 'Y', 'N'),
(7, 'Capital Market Supporting Agencies', 'en_profesional_institution', 2, 'Y', 'N'),
(8, 'Corporate Fact Sheet', 'en_corporate_fact_sheet', 3, 'Y', 'N'),
(9, 'Annual Report', 'en_annual_report', 3, 'Y', 'N'),
(10, 'Financial Information', '', 3, 'Y', 'N'),
(11, 'Presentation And Press Release', 'en_presentasi_press_release', 3, 'Y', 'N'),
(12, 'Prospectus', 'en_prospectus', 3, 'Y', 'N'),
(13, 'Shareholders Composition', 'en_shareholders_composition', 3, 'Y', 'N'),
(14, 'Dividend', 'en_dividend', 3, 'Y', 'N'),
(15, 'General Meeting of Shareholders', 'en_gsm', 3, 'Y', 'N'),
(16, 'Public Expose', 'en_publicexpose', 3, 'Y', 'N'),
(17, 'Corporate Governance Instruments', '', 4, 'Y', 'N'),
(18, 'Corporate Governance Documents', '', 4, 'Y', 'N'),
(19, 'Menu Utama', 'administrator/menuutama', 9, 'N', 'Y'),
(20, 'Sub Menu', 'administrator/submenu', 9, 'N', 'Y'),
(21, 'Sub-Sub Menu', 'administrator/subsubmenu', 9, 'N', 'Y'),
(22, 'Kategori Berita', 'administrator/kategoriberita', 10, 'N', 'Y'),
(23, 'Halaman Statis', 'administrator/halamanbaru', 10, 'N', 'Y'),
(24, 'Kategori Dokumen', 'administrator/kategoridokumen', 11, 'N', 'Y'),
(26, 'Album', 'administrator/album', 12, 'N', 'Y'),
(27, 'Gambar', 'administrator/galeri', 12, 'N', 'Y'),
(28, 'Berita', 'administrator/berita', 10, 'N', 'Y'),
(34, 'Dokumen Langsung', 'administrator/dokumen', 11, 'N', 'Y'),
(36, 'Tahun', 'administrator/tahun_penghargaan', 14, 'N', 'Y'),
(37, 'Berita', 'administrator/berita_penghargaan', 14, 'N', 'Y'),
(38, 'Judul', 'administrator/jdl_tanggungjwb', 15, 'N', 'Y'),
(39, 'Berita', 'administrator/berita_tanggungjwb', 15, 'N', 'Y'),
(40, 'Judul', 'administrator/jdl_rups', 16, 'N', 'Y'),
(41, 'Isi', 'administrator/berita_rups', 16, 'N', 'Y'),
(42, 'Tahun', 'administrator/thn_dividen', 17, 'N', 'Y'),
(43, 'Isi', 'administrator/isi_dividen', 17, 'N', 'Y'),
(44, 'Tahun', 'administrator/tahun_lapkeu', 18, 'N', 'Y'),
(45, 'Dokumen', 'administrator/lapkeu', 18, 'N', 'Y'),
(46, 'admin', 'admin', 1, 'Y', 'N'),
(47, 'Shares Information', 'en_shares_information', 3, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_dividen`
--

CREATE TABLE `tahun_dividen` (
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_dividen`
--

INSERT INTO `tahun_dividen` (`tahun`) VALUES
(1222),
(2014),
(2015),
(2016),
(2017),
(2018),
(2019);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_lapkeu`
--

CREATE TABLE `tahun_lapkeu` (
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_lapkeu`
--

INSERT INTO `tahun_lapkeu` (`tahun`) VALUES
(2012),
(2013),
(2014);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_penghargaan`
--

CREATE TABLE `tahun_penghargaan` (
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_penghargaan`
--

INSERT INTO `tahun_penghargaan` (`tahun`) VALUES
(2001),
(2008),
(2009),
(2010),
(2012),
(2013),
(2014),
(2015),
(2016),
(2017),
(2018);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'user',
  `id_session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Nur', 'nur@gmail.com', '0888888888', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('arum', 'a114e01c9c249d7fe75d62afd58a3fed', 'arum p', 'arum@gmail.com', '08199833', 'user', 'b41eff24b37ec9e4fe4dcf968da2a8ba'),
('ayu', '29c65f781a1068a41f735e1b092546de', 'Ayu F', 'ayu@gmail.com', '08888888888', 'user', '29c65f781a1068a41f735e1b092546de'),
('Dev', '6de4c07739c47192df180386a6f063de', 'Muhamad Devian Ramadhan', 'devianramadhan@rocketmail.com', '081287168525', 'admin', '55f37d1fd483f6a85379640fe51aafa8'),
('dinodj', 'b246ff693d453c3b1a3049752da2bc75', 'Dino Disc Jockey', 'dino@gmail.com', '123456789', 'user', '36d72f864ad542b266f13292de0d906c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `album_en`
--
ALTER TABLE `album_en`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `berita_deviden_en`
--
ALTER TABLE `berita_deviden_en`
  ADD PRIMARY KEY (`id_dividen`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `berita_dividen`
--
ALTER TABLE `berita_dividen`
  ADD PRIMARY KEY (`id_dividen`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `berita_en`
--
ALTER TABLE `berita_en`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `berita_penghargaan`
--
ALTER TABLE `berita_penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`),
  ADD KEY `tahun_berita` (`tahun_berita`);

--
-- Indexes for table `berita_penghargaan_en`
--
ALTER TABLE `berita_penghargaan_en`
  ADD PRIMARY KEY (`id_penghargaan`),
  ADD KEY `tahun_berita` (`tahun_berita`);

--
-- Indexes for table `berita_rups`
--
ALTER TABLE `berita_rups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_judul` (`id_judul`);

--
-- Indexes for table `berita_rups_en`
--
ALTER TABLE `berita_rups_en`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_judul` (`id_judul`);

--
-- Indexes for table `berita_tanggungjwb`
--
ALTER TABLE `berita_tanggungjwb`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_juduljudul` (`id_juduljudul`);

--
-- Indexes for table `berita_tanggungjwb_en`
--
ALTER TABLE `berita_tanggungjwb_en`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_juduljudul` (`id_juduljudul`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_kategoridokumen` (`id_kategoridokumen`);

--
-- Indexes for table `dokumen_berita`
--
ALTER TABLE `dokumen_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idberita` (`idberita`),
  ADD KEY `id_katber` (`id_katber`);

--
-- Indexes for table `dokumen_berita_en`
--
ALTER TABLE `dokumen_berita_en`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idberita` (`idberita`),
  ADD KEY `id_katber` (`id_katber`);

--
-- Indexes for table `dokumen_en`
--
ALTER TABLE `dokumen_en`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_kategoridokumen` (`id_kategoridokumen`);

--
-- Indexes for table `dokumen_lapkeu`
--
ALTER TABLE `dokumen_lapkeu`
  ADD PRIMARY KEY (`id_lapkeu`),
  ADD KEY `tahun` (`tahun_dokumen`);

--
-- Indexes for table `dokumen_lapkeu_en`
--
ALTER TABLE `dokumen_lapkeu_en`
  ADD PRIMARY KEY (`id_lapkeu`),
  ADD KEY `tahun` (`tahun_dokumen`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `gambar_en`
--
ALTER TABLE `gambar_en`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  ADD PRIMARY KEY (`id_halstatis`);

--
-- Indexes for table `halaman_statis_en`
--
ALTER TABLE `halaman_statis_en`
  ADD PRIMARY KEY (`id_halstatis`);

--
-- Indexes for table `judul_rups`
--
ALTER TABLE `judul_rups`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `judul_rups_en`
--
ALTER TABLE `judul_rups_en`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `judul_tanggungjawab`
--
ALTER TABLE `judul_tanggungjawab`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `judul_tanggungjawab_en`
--
ALTER TABLE `judul_tanggungjawab_en`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_berita_en`
--
ALTER TABLE `kategori_berita_en`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  ADD PRIMARY KEY (`id_kategoridokumen`);

--
-- Indexes for table `kategori_dokumen_en`
--
ALTER TABLE `kategori_dokumen_en`
  ADD PRIMARY KEY (`id_kategoridokumen`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id_main`);

--
-- Indexes for table `main_menu_en`
--
ALTER TABLE `main_menu_en`
  ADD PRIMARY KEY (`id_main`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `modul_en`
--
ALTER TABLE `modul_en`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `subsub_menu`
--
ALTER TABLE `subsub_menu`
  ADD PRIMARY KEY (`id_subsub`),
  ADD KEY `id_sub` (`idsub`);

--
-- Indexes for table `subsub_menu_en`
--
ALTER TABLE `subsub_menu_en`
  ADD PRIMARY KEY (`id_subsub`),
  ADD KEY `id_sub` (`idsub`) USING BTREE;

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_main` (`id_main`);

--
-- Indexes for table `sub_menu_en`
--
ALTER TABLE `sub_menu_en`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_main` (`id_main`);

--
-- Indexes for table `tahun_dividen`
--
ALTER TABLE `tahun_dividen`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `tahun_lapkeu`
--
ALTER TABLE `tahun_lapkeu`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `tahun_penghargaan`
--
ALTER TABLE `tahun_penghargaan`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `album_en`
--
ALTER TABLE `album_en`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `berita_en`
--
ALTER TABLE `berita_en`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `berita_tanggungjwb`
--
ALTER TABLE `berita_tanggungjwb`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_berita_en`
--
ALTER TABLE `kategori_berita_en`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  MODIFY `id_kategoridokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori_dokumen_en`
--
ALTER TABLE `kategori_dokumen_en`
  MODIFY `id_kategoridokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id_main` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `main_menu_en`
--
ALTER TABLE `main_menu_en`
  MODIFY `id_main` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `modul_en`
--
ALTER TABLE `modul_en`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `subsub_menu`
--
ALTER TABLE `subsub_menu`
  MODIFY `id_subsub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subsub_menu_en`
--
ALTER TABLE `subsub_menu_en`
  MODIFY `id_subsub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id_sub` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sub_menu_en`
--
ALTER TABLE `sub_menu_en`
  MODIFY `id_sub` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori_berita` (`id_kategori`);

--
-- Constraints for table `berita_dividen`
--
ALTER TABLE `berita_dividen`
  ADD CONSTRAINT `berita_dividen_ibfk_1` FOREIGN KEY (`tahun`) REFERENCES `tahun_dividen` (`tahun`);

--
-- Constraints for table `berita_en`
--
ALTER TABLE `berita_en`
  ADD CONSTRAINT `berita_en_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori_berita_en` (`id_kategori`) ON DELETE CASCADE;

--
-- Constraints for table `berita_penghargaan`
--
ALTER TABLE `berita_penghargaan`
  ADD CONSTRAINT `berita_penghargaan_ibfk_1` FOREIGN KEY (`tahun_berita`) REFERENCES `tahun_penghargaan` (`tahun`);

--
-- Constraints for table `berita_rups`
--
ALTER TABLE `berita_rups`
  ADD CONSTRAINT `berita_rups_ibfk_1` FOREIGN KEY (`id_judul`) REFERENCES `judul_rups` (`id_judul`) ON DELETE CASCADE;

--
-- Constraints for table `berita_rups_en`
--
ALTER TABLE `berita_rups_en`
  ADD CONSTRAINT `berita_rups_en_ibfk_1` FOREIGN KEY (`id_judul`) REFERENCES `judul_rups_en` (`id_judul`) ON DELETE CASCADE;

--
-- Constraints for table `berita_tanggungjwb`
--
ALTER TABLE `berita_tanggungjwb`
  ADD CONSTRAINT `berita_tanggungjwb_ibfk_1` FOREIGN KEY (`id_juduljudul`) REFERENCES `judul_tanggungjawab` (`id_judul`);

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_1` FOREIGN KEY (`id_kategoridokumen`) REFERENCES `kategori_dokumen` (`id_kategoridokumen`);

--
-- Constraints for table `dokumen_berita`
--
ALTER TABLE `dokumen_berita`
  ADD CONSTRAINT `dokumen_berita_ibfk_1` FOREIGN KEY (`idberita`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE,
  ADD CONSTRAINT `dokumen_berita_ibfk_2` FOREIGN KEY (`id_katber`) REFERENCES `kategori_berita` (`id_kategori`);

--
-- Constraints for table `dokumen_lapkeu`
--
ALTER TABLE `dokumen_lapkeu`
  ADD CONSTRAINT `dokumen_lapkeu_ibfk_1` FOREIGN KEY (`tahun_dokumen`) REFERENCES `tahun_lapkeu` (`tahun`) ON DELETE CASCADE;

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);

--
-- Constraints for table `subsub_menu`
--
ALTER TABLE `subsub_menu`
  ADD CONSTRAINT `subsub_menu_ibfk_1` FOREIGN KEY (`idsub`) REFERENCES `sub_menu` (`id_sub`);

--
-- Constraints for table `subsub_menu_en`
--
ALTER TABLE `subsub_menu_en`
  ADD CONSTRAINT `subsub_menu_en_ibfk_1` FOREIGN KEY (`idsub`) REFERENCES `sub_menu_en` (`id_sub`);

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`id_main`) REFERENCES `main_menu` (`id_main`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
