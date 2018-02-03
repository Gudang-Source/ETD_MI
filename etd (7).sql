-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 09:37 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_minat`
--

CREATE TABLE `bidang_minat` (
  `id_bidang_minat` int(10) NOT NULL,
  `nama_bidang_minat` varchar(20) NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_minat`
--

INSERT INTO `bidang_minat` (`id_bidang_minat`, `nama_bidang_minat`, `id_prodi`) VALUES
(1, 'Databases', 2),
(2, 'Jaringan', 2),
(4, 'Multimedia', 2),
(5, 'Pemograman', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bimbing`
--

CREATE TABLE `bimbing` (
  `id_bimbing` int(255) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pembimbing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbing`
--

INSERT INTO `bimbing` (`id_bimbing`, `npm`, `nip`, `pembimbing`) VALUES
(22, '1308001010012', '1234567', 1),
(23, '1308001010012', '1234567', 2),
(24, '1308001010012', '1234567', 1),
(25, '1308001010012', '1234567', 2),
(26, '1308001010012', '1234567', 1),
(27, '1308001010012', '1234567', 2),
(44, '1308001010012', '1234567', 1),
(45, '1308001010012', '1234567', 2),
(46, '1408001010010', '1234567', 1),
(47, '1408001010010', '1234567', 2),
(48, '1408001010009', '197410011999031001', 1),
(49, '1408001010009', '198103152003121003', 2),
(50, '1408001010009', '197410011999031001', 1),
(51, '1408001010009', '198103152003121003', 2),
(52, '1408001010013', '198103152003121003', 1),
(53, '1408001010013', '197410011999031001', 2),
(54, '1408001010012', '197410011999031001', 1),
(55, '1408001010012', '198103152003121003', 2),
(56, '1408001010014', '197410011999031001', 1),
(57, '1408001010014', '198103152003121003', 2),
(58, '1408001010015', '197410011999031001', 1),
(59, '1408001010015', '198103152003121003', 2),
(60, '1408001010016', '197410011999031001', 1),
(61, '1408001010016', '198103152003121003', 2),
(62, '1408001010023', '197410011999031001', 1),
(63, '1408001010023', '198103152003121003', 2),
(64, '1408001010017', '197410011999031001', 1),
(65, '1408001010017', '198103152003121003', 2),
(66, '1408001010017', '197410011999031001', 1),
(67, '1408001010017', '198103152003121003', 2),
(68, '1408001010022', '197410011999031001', 1),
(69, '1408001010022', '198103152003121003', 2),
(70, '1408001010021', '197410011999031001', 1),
(71, '1408001010021', '198103152003121003', 2),
(72, '1408001010020', '197410011999031001', 1),
(73, '1408001010020', '198103152003121003', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`) VALUES
('197410011999031001', 'Rasudin,S.Si.,M.InfoTech'),
('198103152003121003', 'Irvanizam,S.Si., M.Sc');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_prodi` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_bidang_minat` int(10) DEFAULT NULL,
  `level` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `password`, `alamat`, `email`, `nama`, `id_prodi`, `no_hp`, `id_bidang_minat`, `level`) VALUES
('1308001010011', '21232f297a57a5a743894a0e4a801fc3', 'ouygfvbn', 'aaa@gmail.com', 'a', '2', '09876543', 1, 0),
('1408001010009', '21232f297a57a5a743894a0e4a801fc3', 'Lamreung, Banda Aceh', 'umaryadi@gmail.com', 'Umaryadi', '2', '085260114355', 1, 0),
('1408001010012', '21232f297a57a5a743894a0e4a801fc3', 'Ule Kareng, Banda Aceh', 'rahmad.multazam@gmail.com', 'Rahmad Multazam', '2', '085266174352', 1, 0),
('1408001010013', '21232f297a57a5a743894a0e4a801fc3', 'Ie Masen, Banda Aceh', 'wanaragusma@gmail.com', 'Wanar Gusma', '2', '085358664571', 4, 0),
('1408001010014', '21232f297a57a5a743894a0e4a801fc3', 'Lhoknga, Aceh Besar', 'busralhadi@gmail.com', 'Busralhadi', '2', '085243665412', 1, 0),
('1408001010015', '21232f297a57a5a743894a0e4a801fc3', 'Lamtemen', 'elsaclara@gmail.com', 'Elsa Clara Pasaribu', '2', '085345271891', 4, 0),
('1408001010016', '21232f297a57a5a743894a0e4a801fc3', 'Batoh, Banda Aceh', 'khaidirjasmi@gmail.com', 'Khaidir Jasmi', '2', '082145336728', 4, 0),
('1408001010017', '21232f297a57a5a743894a0e4a801fc3', 'Aceh Besar', 'zahlulqiram@gmail.com', 'Zahlul Qiram', '2', '085359214434', 1, 0),
('1408001010020', '21232f297a57a5a743894a0e4a801fc3', 'Lhoknga, Aceh Besar', 'azzumar@gmail.com', 'Azzumar', '2', '082271443562', 4, 0),
('1408001010021', '21232f297a57a5a743894a0e4a801fc3', 'Lhoknga, Aceh Besar', 'alfiarahmi@gmail.com', 'Alfia Rahmi', '2', '085260730323', 1, 0),
('1408001010022', '21232f297a57a5a743894a0e4a801fc3', 'Aceh Besar', 'mitaumra@gmail.com', 'Mita Umra', '2', '085357928822', 1, 0),
('1408001010023', '21232f297a57a5a743894a0e4a801fc3', 'Ulee Lheu, Banda Aceh', 'habiburrahman@gmail.com', 'Habiburrahman', '2', '085358276651', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `css1` varchar(50) NOT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `logo`, `css1`, `status`) VALUES
(1, 'Informatika', 'inf.jpg', 'avatar avatar-online', NULL),
(2, 'Manajemen Informatika', 'mi.jpg', 'avatar avatar-away', NULL),
(3, 'Fakutas', '-', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id_tugas_akhir` int(255) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verifikasi` int(2) DEFAULT '0',
  `publikasi` int(2) NOT NULL,
  `sampai` date DEFAULT NULL,
  `npm` varchar(20) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `tgl_sidang` date NOT NULL,
  `pdf_full` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id_tugas_akhir`, `judul`, `abstrak`, `tgl_upload`, `verifikasi`, `publikasi`, `sampai`, `npm`, `pdf`, `tgl_sidang`, `pdf_full`) VALUES
(18, 'PEMBUATAN SISTEM INFORMASI PENDUGAAN MASA SIMPAN PRODUK MAKANAN RINGAN BERDASARKAN KANDUNGAN LEMAK MENGGUNAKAN PHP DAN MYSQL', 'Teknologi informasi berkembang sangat pesat saat ini. Kemajuan teknologi tersebut, sangat membantu manusia dalam menyelesaikan pekerjaan. Salah satu jenis teknologi informasi yang sering digunakan adalah jaringan internet. Jaringan internet terdiri dari kumpulan website. Perkembangan website dari awal kemunculannya sampai sekarang sudah sangat pesat dan cepat. Kemampuan website sebagai pengolah data dan database sebagai media penyimpanan data tidak dapat ditawar lagi. Kombinasi website dan database memberikan banyak keuntungan dalam menyajikan informasi, sehingga banyak instansi baik pemerintah maupun swasta telah menggunakannya. Proyek akhir ini memandang perlu untuk mengembangkan suatu sistem yang memudahkan para laboran dalam menyimpan dan mencari data hasil riset, dari penentuan umur simpan produk makanan sebagai jaminan keamanan pangan dengan memanfaatkan database dan website. Selama ini para laboran masih menggunakan cara manual dalam menyimpan dan mencari data hasil riset tersebut, sehingga kurang efektif dan efisien. Sistem informasi ini menggunakan metode Arrhenius, karena metode ini paling banyak digunakan dalam mencari pendugaan umur simpan produk makanan ringan. Output yang dihasilkan dari sistem ini berupa data lemak (TBA) yang dilengkapi dengan grafik dihasilkan dari perbandingan antara 3 suhu berbeda dengan 3 hasil yang berbeda dan dapat menyimpulkan hari terbaik untuk disimpan berdasarkan suhunya. Kata kunci : Sistem Informasi, Metode arrhenius, Sistem Pendugaan Umur Simpan Produk Makanan.', '2018-01-16 11:19:07', 1, 1, NULL, '1408001010009', '1408001010009.pdf', '0000-00-00', ''),
(19, 'ANALISA VIDEO ANIMASI MEKANISME SOSIALISASI PENCOBLOSAN PILKADA ( STUDI KASUS: KUESIONER )', 'Pilkada adalah sarana demokrasi untuk membentuk sistem kekuasaan negara yang berkedaulatan rakyat dan permusyawaratan perwakilan yang digariskan oleh Undang-Undang Dasar. Pilkada merupakan sarana untuk rakyat menyalurkan hak daulatnya dalam dipilih dan memilih. Ada beberapa faktor yang menyebabkan sebagian dari masyarakat tidak menggunakan hak pilihnya, dikarenakan kurangnya pemahaman masyarakat mengenai tata cara melakukan pemilihan umum PEMILU di TPS. Karena itu dilakukan survey supaya diketahui berapa besar masyarakat yang memahami cara mencoblos mengenai pilkada, dengan animasi 3D dapat memudahkan masyarakat untuk memahami cara melakukan pemilihan. Video animasi ini sebagai simulasi bagi masyarakat untuk melakukan pemilihan umum di (TPS).', '2018-01-16 11:21:38', 1, 2, NULL, '1408001010013', '1408001010013.pdf', '0000-00-00', ''),
(20, 'PEMBUATAN SISTEM INFORMASI PENDUGAAN MASA SIMPAN PRODUK MAKANAN BERDASARKAN KADAR AIR MENGGUNAKAN PHP DAN MYSQL', 'Perkembangan teknologi tidak terlepas dari semakin majunya teknologi komputer. Kebutuhan akan teknologi komputer pun semakin diminati oleh perusahaan-perusahaan di segala bidang, baik perusahaan swasta maupun instansi-instansi pemerintah. Apabila dilakukan dengan sistem komputerisasi maka pekerjaan-pekerjaan yang selalu dilakukan dengan cara manual oleh manusia akan lebih cepat dan efisien. Laboratorium Teknologi Hasil Pertanian Universitas Syiah Kuala masih menggunakan cara manual dalam memproses data yang sudah diriset dalam pendugaan umur simpan produk baik itu menggunakan kertas maupun excel, jadi prosesnya memakan waktu lebih lama. Proyek akhir ini memandang perlu untuk mengembangkan suatu sistem yang dapat menyimpan dan mencari data yang sudah diriset, dari penentuan umur simpan produk makanan yang dilakukan oleh para laboran. Melalui sistem tersebut pendugaan umur simpan produk akan lebih efisien waktu, dan hasilnya akurat. Sistem ini menggunakan metode arrhenius, karena metode tersebut sering digunakan untuk pendugaan umur simpan produk makanan yang mudah rusak oleh akibat reaksi kimia, seperti oksidasi lemak, kadar air, vitamin C, dan sebagainya. Sistem informasi tersebut telah menghasilkan output berupa data kadar air dilengkapi dengan grafik yang dihasilkan dari perbandingan antara 3 suhu berbeda dengan 3 hasil yang berbeda dan lama waktu simpan terbaik untuk suatu produk makanan. Kata kunci :Sistem Informasi, Kadar Air, Metode Arrhenius, Umur Simpan Produk Makanan.', '2018-01-16 11:23:49', 1, 2, NULL, '1408001010012', '1408001010012.pdf', '0000-00-00', ''),
(21, 'PERANCANGAN ALPIKASI LOKASI PUSKESMAS DAN KLINIK BERBASIS ANDROID DI KOTA BANDA ACEH', 'Perkembangan teknologi mobile juga diiringi dengan perkembangan internet salah satunya yaitu perkembangan situs jejaring sosial. Sebagian besar layanan situs sosial adalah berdasarkan web (web based) dan menyediakan fasilitas bagi pengguna untuk berinteraksi dengan pengguna lain. Peranan smartphone (telepon pintar) pada saat ini semakin penting dan telah menjadi suatu bagian dalam kehidupan sehari-hari masyarakat. Telepon pintar memberikan fasilitas dasar yang dimiliki oleh sebuah telepon genggam pada umumnya, dan didukung dengan beberapa fasilitas dari sebuah personal computer. Perancangan desain aplikasi android adalah salah satu upaya untuk mewujudkan suatu peranan penting bagi masyarakat dan memudahkan masyarakat dalam mengakses tempat kesehatan seperti puskesmas dan klinik yang ada di Kota Banda Aceh. Salah satunya aplikasi android yang bisa membatu masyarakat untuk memudahkan mencari lokasi puskesmas dan klinik yang ada di Kota Banda Aceh dengan mudah. Terdapat beberapa tempat puskesmas dan klinik di Kota Banda Aceh beserta lokasi yang masih belum di ketahui oleh pasien. Terutama pasien yang baru pertama kali ke Kota Banda Aceh pasti belum mengetahui daerah sekitaran Kota Banda Aceh., sehingga akan kesulitan untuk dalam mencari lokasi Puskesmas dan klinik di sekitarnya. Kata kunci : Sistem Operasi, Telepon Pintar, Mobile, Puskesmas dan Klinik.', '2018-01-16 11:33:14', 1, 1, NULL, '1408001010014', '1408001010014.pdf', '0000-00-00', ''),
(22, 'IMPLEMENTASI GERAK DARI GAMBAR DALAM VIDEO 3D DAMPAK PEMANASAN GLOBAL PADA BURUNG DI HUTAN MENGGUNAKAN APLIKASI BLENDER V2.66.1', 'Pada projek ini menciptakan karakter animasi untuk digabungkan menjadi sebuah video dan digabungkan dengan video animasi 3D. Animasi merupakan salah satu bentuk visual bergerak yang dapat dimanfaatkan untuk menjelaskan sesuatu hal yang sulit disampaikan. Ada beberapa tahap dalam pembuatan animasi, pemodelan awal atau disebut dengan teknik gambar, pembuatan tulang saat proses gambar sudah jadi dan tahap akhir adalah menggerakkan atau menganimasikan gambar atau karakter yang dibuat. Kelebihan menggunakan karakter animasi dari pada karakter nyata adalah: posisi dan pergerakkan karakter animasi bisa diatur langsung oleh pembuat. Sedangkan untuk merekam posisi dan pergerakkan karakter nyata membutuhkan waktu yang lama. Projek animasi ini dibuat dengan menggunakan Software Blender V2.66.1. Kata kunci : Blender v2.66.1, Animasi 3D.', '2018-01-16 11:45:47', 1, 1, NULL, '1408001010015', '1408001010015.pdf', '0000-00-00', ''),
(23, 'PEMBUATAN VIDEO EDITING ANIMASI LINGKUNGAN HIDUP ( GLOBAL WARMING ) MENGGUNAKAN ADOBE PREMIERE PRO', 'Merancang dan menghasilkan sebuah Video Animasi tentang Pemanasan Global ( Global Warming ). Pada dasarnya merupakan fenomena peningkatan temperatur global dari tahun ketahun. Pemanasan Global dapat disebabkan oleh prilaku manusia yang tidak bertanggung jawab seperti menebang hutan secara liar dan pembakaran hutan. Untuk meningkatkan kesadaran masyarakat tentang pelestarian hutan, maka sosialisasi kepada masyarakat perlu dilakukan.Video Animasi dapat digunakan sebagai salah satu media sosialisasi. Untuk membuat projek ini mengumpulkan data mengenai Pemanasan Global. Merancang dan m endesain video yang akan dibuat. Menyusun pengambilan video agar lebih terkonsep untuk mengambil videonya dan Footage untuk memperkaya video. Tahap – tahap dalam pembuatan video editing tentang Pemanasan Global menggunakan Adobe Premiere Pro. Kemudian didalam video editing yang akan di proses dimasukan Media Teks, Audio, Video, Animasi, Gambar dan Spesial Efek agar kesan lebih menarik. Kata kunci : Multimedia, Adobe Premiere Pro, Video', '2018-01-16 11:57:43', 1, 2, NULL, '1408001010016', '1408001010016.pdf', '0000-00-00', ''),
(24, 'PENENTUAN TITIK KOORDINAT TERDEKAT TEMPAT LAYANAN KESEHATAN DI KOTA BANDA ACEH BERBASIS ANDROID PENENTUAN TITIK KOORDINAT TERDEKAT TEMPAT LAYANAN KESEHATAN DI KOTA BANDA ACEH BERBASIS ANDROID PENENTUAN TITIK KOORDINAT TERDEKAT TEMPAT LAYANAN KESEHATAN DI KOTA BANDA ACEH BERBASIS ANDROID', 'Teknologi komputer berkembang sangat pesat saat ini. Kemajuan teknologi tersebut, sangat membantu manusia dalam menyelesaikan pekerjaan. Salah satu teknologi yang paling dibutuhkan adalah google map. Google maps adalah layanan pemetaan web yang dikembangkan oleh google. Dengan adanya google maps tersebut dapat memudahkan semua orang dalam menentukan tempat yang ingin dituju sehingga tidak tersesat. Aplikasi ini merupakan aplikasi Android yang berbasis mobile dengan teknologi Location-Based service (LBS) yang dibangun diatas platform android. Aplikasi ini memanfaatkan global positioning system (GPS) dalam pencarian posisi pengguna. Fasilitas utama yang terdapat dalam aplikasi ini adalah adanya fitur maps dan rute jalan yang terdapat mempermudah pengguna dalam menemukan lokasi titik terdekat yang dituju. Metodelogi yang dipakai untuk membangun aplikasi tersebut adalah menganalisa kasus tersebut lalu mendesain aplikasi, membuat aplikasi, dan yang terakhir menguji aplikasi yang telah dibuat. Aplikasi yang dihasilkan dalam pembuatan program ini adalah aplikasi Location-Based service pencarian lokasi Rumah Sakit terdekat, Puskesmas terdekat, Klinik terdekat, UGD terdekat, Bidan terdekat di wilayah Kota Banda Aceh. Kata kunci : Aplikasi Android, Google map, Global Positioning System (GPS).', '2018-01-16 13:32:25', 1, 2, NULL, '1408001010023', '1408001010023.pdf', '0000-00-00', ''),
(26, 'PEMBUATAN SISTEM INFORMASI LOKASI KLINIK BERSALIN KLINIK BERSALIN DI KOTA BANDA ACEH BERBASIS ANDROID', 'Kemajuan teknologi yang sangat pesat membuat pengaruh pada budaya masyarakat yang sekarang, salah satunya adalah Smartphone (ponsel pintar). Peranan ponsel pintar sekarang sangat memudahkan pengguna dalam melakukan berbagai aktivitas mulai dari browsing, email, chatting, dan lainnya. Dan salah satu sistem operasi yang digunakan oleh ponsel pintar adalah android, Android adalah sebuah sistem operasi yang terdapat di dalam sebuah ponsel pintar yang berbasis linux. Contoh aplikasi yang terdapat pada android adalah googlemaps API yang dapat memberikan sejumlah informasi bagi masyarakat dalam mengetahui lokasi dari berbagai tempat salah satunya tempat layanan kesehatan khususnya pada tempat bersalin (Bidan). Lokasi dari tempat layanan kesehatan sekarang sangat dibutuhkan, karena banyak dari masyarakat terutama bagi pendatang suatu wilayah tidak mengetahui keberadaan dari tempat layanan kesehatan tersebut. Kata kunci : Teknologi, Ponsel Pintar, Android, tempat layanan kesehatan.', '2018-01-17 03:19:52', 1, 2, NULL, '1408001010017', '1408001010017.pdf', '0000-00-00', ''),
(27, 'PEMBUATAN SISTEM INFORMASI PENJADWALAN SEMINAR DAN SIDANG DI PROGRAM STUDI MATEMATIKA FMIPA UNIVERSITAS SYIAH KUALA NOTIFIKASI MELALUI EMAIL', 'Kemajuan teknologi yang semakin pesat membuat kebutuhan teknologi komputer pun semakin diminati oleh instansi-instansi pemerintah. Hal ini berkaitan dengan pekerjaan-pekerjaan yang biasanya selalu dilakukan dengan cara manual oleh manusia akan semakin cepat dan efisien apabila dilakukan dengan sistem komputerisasi. Bahkan dengan kecanggihan teknologi komputer yang semakin berkembang dengan pesat dapat memudahkan instansi-instansi pemerintah untuk meningkatkan efisiensi kerja, karena pekerjaan yang dilakukan dengan teknologi komputer dapat menghemat baik dari segi waktu, ruang, tenaga, biaya dan lain sebagainya. Database adalah kumpulan data yang disimpan secara sistematis di dalam komputer yang dapat diolah atau dimanipulasi menggunakan perangkat lunak (program aplikasi) untuk menghasilkan informasi. Hasil database nantinya akan menjadi sebuah sistem informasi. Pada Prodi Matematika dibutuhkan sebuah sistem informasi penjadwalan seminar dan sidang dengan notifikasi melalui email. Pada Sistem informasi tersebut nantinya menghasilkan output berupa data penjadwalan yang akan dikirimkan melalui email ke dosen dan mahasiswa yang bersangkutan langsung dari sistem. Dengan adanya sistem informasi ini, dapat memudahkan pihak Prodi Matematika dalam penyampaian penjadwalan seminar dan sidang. Kata kunci : Sistem Informasi, database, email dan Program Studi Matematika FMIPA Universitas Syiah Kuala.', '2018-01-17 17:36:17', 0, 2, NULL, '1408001010022', '1408001010022.pdf', '0000-00-00', ''),
(28, 'PEMBUATAN SISTEM INFORMASI PENJAWALAN SEMINAR DAN SIDANG DI PROGRAM STUDI MATEMATIKA FMIPA UNIVERSITAS SYIAH KUALA NOTIFIKASI MELALUI SMS GATEWAY', 'Kemajuan teknologi yang semakin pesat membuat kebutuhan teknologi komputer pun semakin diminati oleh instansi-instansi pemerintah. Hal ini berkaitan dengan sistem-sistem yang masih dikerjakan secara manual pada sistem penjadwalan seminar dan sidang, sehingga dibutuhkan sebuah sistem informasi penjadwalan yang membantu kinerja di Prodi Matematika baik dari segi waktu, ruang, tenaga, biaya dan lain sebagainya. Didalam sistem informasi yang dirancang, dapat menghasilkan output data mahasiswa, dosen, penjadwalan seminar dan sidang, dan juga menghasilkan notifikasi melalui SMS Gateway terhadap dosen dan mahasiswa yang bersangkutan langsung terhadap penjadwalan. Kata kunci : Sistem Informasi, Database, Dan Program Studi Matematika FMIPA Universitas Syiah Kuala.', '2018-02-03 08:15:38', 1, 2, NULL, '1408001010021', '1408001010021.pdf', '2017-12-19', ''),
(29, 'PEMBUATAN FONT BERBASIS MEDIEVAL MENGGUNAKAN SOFTWARE ADOBE ILLUSTRATOR CC 2017 DAN FONTLAB STUDIO5', '\r\nTipografi adalah salah satu bidang keilmuan di Desain Komunikasi Visual yang menggunakan pengaturan huruf sebagai elemen utama. Dalam merancang atau menata aksara kaitanya untuk menyusun publikasi visual yang siap dicetak. Font berkarakter medieval yang masih sedikit untuk di unduh juga kurangnya pengetahuan tentang jenis font berkarakter medieval. Dengan membuat alternatif jenis font medievalakan memecah kebuntuan disaat seorang desainer memilih jenis medieval yang pas untuk kebutuhan publikasi visual dengan konsep gothic. Kata kunci :Font medieval, Font, Komunikasi Visual, Tipografi, medieval', '2018-01-17 17:42:20', 0, 1, NULL, '1408001010020', '1408001010020.pdf', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` int(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_lengkap`, `level`, `password`, `id_prodi`) VALUES
('admin', 'admin', 2, '21232f297a57a5a743894a0e4a801fc3', '3'),
('fakultas', 'fakultas', 2, '21232f297a57a5a743894a0e4a801fc3', '3'),
('inf', 'inf', 1, '21232f297a57a5a743894a0e4a801fc3', '1'),
('mi', 'mi', 1, '21232f297a57a5a743894a0e4a801fc3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_minat`
--
ALTER TABLE `bidang_minat`
  ADD PRIMARY KEY (`id_bidang_minat`);

--
-- Indexes for table `bimbing`
--
ALTER TABLE `bimbing`
  ADD PRIMARY KEY (`id_bimbing`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `nama_prodi` (`nama_prodi`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_tugas_akhir`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_minat`
--
ALTER TABLE `bidang_minat`
  MODIFY `id_bidang_minat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bimbing`
--
ALTER TABLE `bimbing`
  MODIFY `id_bimbing` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;
--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_tugas_akhir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
