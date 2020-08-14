-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 07:49 AM
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
  `jdl_album` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`, `link`, `aktif`) VALUES
(1, 'foto', '', 'Y'),
(5, 'Program Kami', '', 'Y'),
(6, 'Struktur Organisasi Perusahaan', '', 'Y'),
(7, 'Struktur Grup Perusahaan', '', 'Y'),
(8, 'Lembar Fakta', '', 'Y'),
(9, 'Struktur Pemegang Saham', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `document` longblob NOT NULL,
  `isi_berita` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `username`, `id_kategori`, `judul_berita`, `document`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`) VALUES
(1, 'admin', 3, 'Paparan Publik MDIA', '', '<h2 style=\"font-style:italic\">ASDFGA</h2>\r\n', 'Senin', '2018-07-23', '10:56:45', 'antv_footer.png');

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
(1, 1, '', 'dino', 'admin', 'Jumat', '2018-07-20', '14:31:23'),
(2, 1, '', 'admin', 'dino', 'Jumat', '2018-07-20', '14:32:43'),
(4, 1, '', 'admin', 'gggg222', 'Jumat', '2018-07-20', '15:02:43');

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
(0, 1, 'Foto Pernikahan Arum', 'banner_corporate.jpg');

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
(3, '<ol>\r\n	<li><s>ddddddddddddddddddd</s></li>\r\n</ol>\r\n', 'semangat', '2018-07-20', 'Untitled.png'),
(4, '<p>Dalam beberapa tahun terakhir ini, MDIA telah mengalami perjalanan yang luar biasa, didukung oleh kinerja stasiun televisi Free to-Air (FTA) anak perusahaannya yaitu ANTV. Berawal dari posisi stasiun televisi FTA dengan peringkat ketujuh di tahun 2013, kami mulai bertransformasi dengan melaksanakan strategi programming yang fokus membidik segmen wanita, dan sejak itu ANTV secara konsisten memusatkan perhatian pada konten-konten keluarga, anak-anak dan hiburan yang terbukti berhasil meraih tonggak sukses baru setiap tahun. Selayaknya, kita panjatkan puji syukur kepada Allah YME atas pencapaian ini khususnya di tengah volatilitas kondisi politik dan ekonomi yang cukup bergejolak.</p>\r\n\r\n<p>Pada tahun 2016, MDIA mencatatkan pendapatan tertinggi yang pernah diraih, dengan pertumbuhan dua digit di atas rata-rata industri sebesar 26,7% yang mencapai Rp 1.756,6 miliar. Laba Usaha meningkat sebesar 38,9% menjadi sebesar Rp 536,7 miliar, dengan laba bersih sebesar Rp 645,6 miliar, meningkat sebesar 151,5% dibandingkan tahun 2015. Hasil yang baik ini tercapai ditengah iklim politik dan ekonomi yang penuh goncangan, dimana perekonomian Indonesia Indonesia tumbuh 5,0% atau hanya 0,2% dari tahun 2015 ke tahun 2016, dibayangi prospek pemilihan Kepala Daerah Tingkat 1 dan Tingkat 2 pada awal 2017 serta isu-isu amnesti pajak yang menciptakan suasana ketidakpastian. Di tengah kondisi tersebut, ANTV terus menghadirkan program-program yang segar, menghibur dan menarik yang berhasil memikat hati pemirsa wanita yang ditargetkan. Paduan konten global dengan konten domestik yang senantiasa ditingkatkan, dirancang untuk menarik penonton dan mempertahankan reputasi ANTV sebagai trendsetter dalam industri ini. Untuk mengidentifikasi dan menciptakan konten yang tepat dan menarik bagi pemirsa merupakan tantangan tersendiri, namun tim ANTV memiliki reputasi yang baik dalam hal ini dan terus membuktikan kemampuannya.</p>\r\n\r\n<p>ANTV terus menyiarkan seri domestik, dilengkapi oleh serial India yang tetap populer bagi pemirsa. Program Pesbukers dinilai sebagai program hiburan komedi TV nomor satu. Program anak-anak juga mengalami kenaikan pada akhir tahun. Terkait aspek pemasaran, ANTV masih terus meminta bintang acaranya untuk berinteraksi langsung dengan para penggemar dalam acara jumpa fans maupun melalui media sosial, sebagai strategi untuk meningkatkan interaksi dan keterikatan pemirsanya. Secara paralel, ANTV terus berinvestasi dalam pengembangan sumber daya manusia dan peningkatan infrastruktur dan fasilitas penyiarannya seperti studio dan kamera, serta Master Control Room. Investasi tersebut penting untuk menjaga kemampuan bersaing, dalam rangka memenuhi harapan pemirsa sesuai standar yang layak bagi sebuah stasiun televisi FTA Tier 1. Secara khusus, kami menyadari adanya kebutuhan mencari talent baru untuk mendukung inovasi yang berkelanjutan mengingat industri kami terus berkembang untuk menghasilkan sesuatu yang baru.</p>\r\n\r\n<p>ANTV diharapkan dapat memberikan pertumbuhan yang berkelanjutan pada tahun 2017, didukung oleh kepiawaian ANTV dalam mengidentifikasikan program yang menghibur serta strategi programing yang efektif, sehingga citra perusahaan maupun minat pemirsa semakin meningkat. Pada saat yang sama, menyambung keberhasilan ANTV sebagai stasiun televisi FTA Tier 1, MDIA mulai melangkah maju menjajaki diversifikasi lini bisnis dalam rangka memastikan pertumbuhan ke depan. Melengkapi bisnis televisi FTA ANTV, MDIA kini tengah membangun sebuah talent agency yang ditujukan untuk mendukung pertumbuhan ANTV. Selain itu, MDIA juga terus fokus untuk meningkatkan kapasitas produksi program in-house. Ketiga lini bisnis ini diharapkan dapat saling mendukung untuk menghasilkan sinergi, dan pada akhirnya diharapkan akan memiliki kemampuan untuk menyumbangkan tambahan aliran pendapatan bagi Perseroan.</p>\r\n\r\n<p>ANTV dan MDIA senantiasa menekankan penerapan prinsip-prinsip tata kelola perusahaan yang baik, termasuk kepatuhan kepada peraturan. Pada tanggal 14 Oktober 2016, ANTV berhasil mendapatkan per panjangan Ijin Penyelenggaraan Penyiaran (IPP) televisi FTA untuk 10 tahun berikutnya dari Menteri Komunikasi dan Informatika Republik Indonesia berdasarkan Surat Keputusan No. 1817 tahun 2016. Hal ini membuktikan bahwa ANTV tercatat sebagai stasiun televisi FTA yang patuh terhadap peraturan. Kami akan terus menekankan kepatuhan terhadap peraturan perundangan yang berlaku sebagai mitra pemerintah dan warga korporasi yang baik. Selain itu, MDIA melalui ANTV juga konsisten melakukan kegiatan sosial serta program yang membantu masyarakat yang kurang beruntung dan kaum dhuafa, sekaligus mempererat hubungan ANTV dengan masyarakat. Adalah tahun yang luar biasa untuk MDIA dan ANTV, dan saya bangga atas kerja keras dan pencapaian karyawan kami. Saya juga ingin mengucapkan terima kasih kepada Dewan Komisaris, pemirsa setia kami, mitra terpercaya dan para pemegang saham yang kami hargai, yang selama ini menjadi bagian dari perjalanan kami dengan tujuan mewarnai kehidupan sehari-hari. Saya optimis bahwa kami dapat mempertahankan prestasi kami dan bahkan semakin baik, dengan tujuan dapat memberikan manfaat kepada semua pemangku kepentingan.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<h3>ERICK THOHIR</h3>\r\n\r\n<p>Direktur Utama</p>\r\n', 'Sambutan Direktur Utama', '2018-07-20', 'logo2016-new.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `kategori_seo` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(1, 'Laporan Tahunan', 'laporan-tahunan', 'N'),
(2, 'Laporan Keuangan', '', 'Y'),
(3, 'Presentasi dan Siaran Pers', '', 'Y'),
(5, 'Paparan Publik', 'paparan-publik', 'Y');

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
(1, 'Ikhtisar', '', 'Y'),
(2, 'Laporan Keuangan', 'laporan-keuangan', 'Y');

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
(1, 'Halaman utama', '', 'Y', 'N', ''),
(2, 'Tentang Kami', '', 'Y', 'N', ''),
(3, 'Hubungan Investor', '', 'Y', 'N', ''),
(4, 'Tata Kelola Perusahaan', '', 'Y', 'N', ''),
(5, 'Tanggung Jawab Sosial', '', 'Y', 'N', ''),
(6, 'Kontak', '', 'Y', 'N', ''),
(7, 'Karir', 'http://www.an.tv/career', 'Y', 'N', ''),
(8, 'Manajemen User', 'administrator/manajemenuser', 'N', 'Y', 'N'),
(9, 'Setting Menu', '', 'N', 'Y', 'Y'),
(10, 'Manajemen Berita', 'administrator/dokumen', 'N', 'Y', 'Y'),
(11, 'Manajemen Dokumen', 'administrator/dokumen', 'N', 'Y', 'Y'),
(12, 'Manajemen Gambar', 'administrator/galeri', 'N', 'Y', 'Y'),
(13, 'Slider', 'administrator/slider', 'N', 'Y', 'Y');

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
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`) VALUES
(2, 'gedung.jpg'),
(3, 'logomdia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subsub_menu`
--

CREATE TABLE `subsub_menu` (
  `id_subsub` int(10) NOT NULL,
  `nama_subsub` varchar(255) NOT NULL,
  `link_subsub` varchar(255) NOT NULL,
  `id_sub` int(10) NOT NULL,
  `aktif` enum('N','Y') NOT NULL DEFAULT 'Y',
  `admin_subsubmenu` enum('N','Y') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsub_menu`
--

INSERT INTO `subsub_menu` (`id_subsub`, `nama_subsub`, `link_subsub`, `id_sub`, `aktif`, `admin_subsubmenu`) VALUES
(1, 'Sambutan Direktur Utama', '', 2, 'Y', 'N'),
(2, 'Dewan Komisaris', '', 2, 'Y', 'N'),
(3, 'Direksi', '', 2, 'Y', 'N'),
(4, 'asda2', '', 10, 'Y', 'N'),
(5, 'asda2', '', 10, 'Y', 'N'),
(8, 'Komite Audit', '', 17, 'Y', 'N'),
(9, 'Komite Nasional dan Renumerasi', '', 17, 'Y', 'N'),
(11, 'Sekretaris Perusahaan', '', 17, 'Y', 'N'),
(12, 'Unit Audit Internal', '', 17, 'Y', 'N'),
(13, 'Anggaran Dasar', '', 18, 'Y', 'N'),
(14, 'Pedoman Kerja Dewan Komisaris', '', 18, 'Y', 'N'),
(15, 'Pedoman Kerja Direksi', '', 18, 'Y', 'N'),
(16, 'Kode Etik', '', 18, 'Y', 'N'),
(17, 'Piagam Komite Audit', '', 18, 'Y', 'N'),
(18, 'Pedoman Komite Nominasi dan Renumerasi', '', 18, 'Y', 'N'),
(19, 'Piagam Unit Audit Internal', '', 18, 'Y', 'N'),
(20, 'Piagam WBS', '', 18, 'Y', 'N'),
(21, 'Kebijakan Komunikasi Pemegang Saham', '', 18, 'Y', 'N');

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
(1, 'Profil Perusahaan', '', 2, 'Y', 'N'),
(2, 'Manajemen', '', 2, 'Y', 'N'),
(3, 'Struktur Organisasi Perusahaan', '', 2, 'Y', 'N'),
(4, 'Struktur Grup Perusahaan', '', 2, 'Y', 'N'),
(5, 'Bisnis', '', 2, 'Y', 'N'),
(6, 'Penghargaan dan Sertifikasi', '', 2, 'Y', 'N'),
(7, 'Lembaga Profesi dan Penunjang Pasar Modal', '', 2, 'Y', 'N'),
(8, 'Lembar Fakta Perusahaan', '', 3, 'Y', 'N'),
(9, 'Laporan Tahunan', '', 3, 'Y', 'N'),
(10, 'Informasi Keuangan', '', 3, 'Y', 'N'),
(11, 'Presentasi dan Siaran Pers', '', 3, 'Y', 'N'),
(12, 'Prospektus', '', 3, 'Y', 'N'),
(13, 'Struktur Pemegang Saham', '', 3, 'Y', 'N'),
(14, 'Dividen', '', 3, 'Y', 'N'),
(15, 'RUPS', '', 3, 'Y', 'N'),
(16, 'Paparan Publik', '', 3, 'Y', 'N'),
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
(34, 'Dokumen', 'administrator/dokumen', 11, 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pembuat` varchar(50) NOT NULL,
  `folder` varchar(50) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `pembuat`, `folder`, `aktif`) VALUES
(1, 'template phpmu', 'Nur', 'phpmu-ciek', 'Y');

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
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `id_session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Nur', 'nur@gmail.com', '0888888888', 'admin', 'N', '21232f297a57a5a743894a0e4a801fc3'),
('arum', 'a114e01c9c249d7fe75d62afd58a3fed', 'arum p', 'arum@gmail.com', '08199833', 'user', 'N', 'b41eff24b37ec9e4fe4dcf968da2a8ba'),
('ayu', '29c65f781a1068a41f735e1b092546de', 'Ayu F', 'ayu@gmail.com', '08888888888', 'user', 'N', '29c65f781a1068a41f735e1b092546de'),
('Dev', '6de4c07739c47192df180386a6f063de', 'Muhamad Devian Ramadhan', 'devianramadhan@rocketmail.com', '081287168525', 'user', 'N', '55f37d1fd483f6a85379640fe51aafa8'),
('dino', 'b246ff693d453c3b1a3049752da2bc75', 'dino disc jockey', 'dino@gmail.com', '09999999', 'user', 'N', 'b246ff693d453c3b1a3049752da2bc75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_kategoridokumen` (`id_kategoridokumen`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  ADD PRIMARY KEY (`id_halstatis`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  ADD PRIMARY KEY (`id_kategoridokumen`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id_main`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
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
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_main` (`id_main`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_templates`);

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
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  MODIFY `id_halstatis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  MODIFY `id_kategoridokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id_main` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subsub_menu`
--
ALTER TABLE `subsub_menu`
  MODIFY `id_subsub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id_sub` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_1` FOREIGN KEY (`id_kategoridokumen`) REFERENCES `kategori_dokumen` (`id_kategoridokumen`);

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);

--
-- Constraints for table `subsub_menu`
--
ALTER TABLE `subsub_menu`
  ADD CONSTRAINT `subsub_menu_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `sub_menu` (`id_sub`);

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`id_main`) REFERENCES `main_menu` (`id_main`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
