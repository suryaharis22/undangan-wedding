-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2024 at 12:47 AM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nunj8451_undangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `nama`, `nama_depan`, `nama_belakang`) VALUES
(1, 'Surya', '-', '-'),
(2, 'Indra', 'NUNCORP', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `isi_pesan` varchar(160) DEFAULT NULL,
  `kehadiran` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `isi_pesan`, `kehadiran`) VALUES
(58, 'Kel. Adji Daroma', 'Selamat menempuh hidup baru semoga menjadi keluarga yang sakinah mawaddah warrohmah bahagia mengarungi bahtera rumah tangga aamiin', 'Hadir'),
(59, 'Kel. Adji Gamal', 'Ayu&amp;Ronggo\r\nBarakallahu lakuma wa baraka a&#039;laikuma wa jama&#039;a bainakuma fii khoiiir.\r\nSemoga Allah memberikan keberkahan kalian dan semoga Allah me', 'Hadir'),
(60, 'Kel. Adji Triadji (Alm)', 'Ayu &amp; Ronggo ....Semoga Alloh memberikan keberkahan dan semoga Alloh mengumpulkan kalian berdua dalam kebaikan ....', 'Hadir'),
(61, 'Kel. Besar Bapak M Sobri (Alm)', 'Selamqt Menempuh Hidup Baru Ayu dan Ronggo, Semoga menjadi Kel. SaMaWa dan Cepat memiliki momongan.. Aamiin Ya Rabb. ', 'Hadir'),
(62, 'Kel. Adji Parikesit', 'Semoga menjadi keluarga sakinah mawadah dan warohmah sampai maut memisahkanâ€¦dikaruniai putra putri sholeh sholehah ..Aamiinâ€¦', 'Hadir'),
(63, 'Kel. Adji Daroma', 'Selamat menempuh hidup baru ya ayu semoga bahagia menjadi keluarga yg samawa aamiin', 'Hadir'),
(64, 'Kel. Adji Daroma', 'Selamat menempuh hidup baru ya ayu semoga bahagia menjadi keluarga yg samawa aamiin', 'Hadir'),
(65, 'Kel. Adji Daroma', 'Selamat menempuh hidup baru ya ayu semoga bahagia menjadi keluarga yg samawa aamiin', 'Hadir'),
(66, 'Arin', 'Hi aay &amp; ronggo..\r\nMas ronggo salam kenal yaa.\r\nBuat ay-ay dan mas ronggo, arin doain supaya selalu allah kasih sehat, lancar buat niat baiknya, kelak Allah', 'Hadir'),
(67, 'Mba Eva &amp; Keluarga', 'Ayu &amp; Ronggo \r\nSelamat untuk pernikahan nya , semoga menjadi pasangan yg SaMaRa sampai akhir hayat...ðŸ¤²ðŸ’ž', 'Hadir'),
(68, 'Juleha', 'Ay&amp;Ronggo..\r\nSelamat menempuh hidup baru .semoga acaranya berjalan dgn lancar sampai hari yg ditentukan .semoga menjadi klwrga SAMAWA.Amiiin allahumma amiii', 'Hadir'),
(69, 'Mba Ditta &amp; Suami', 'Selamat utk Ayu dan Ronggo, semoga SaMaWa', 'Hadir'),
(70, 'Kel. Adji Rico', 'Happy wedding buat Ayu &amp; Ronggo.. semoga Allah SWT memberkahi niat baik kalian.. semoga lancar &amp; sukses acaranya.. mohon maaf kami kel dari Samarinda ga', 'Tidak'),
(71, 'Sari &amp; Wadi', 'Semoga menjadi keluarga Samawa,,dilancarkan segala urusanya..amin', 'Hadir'),
(72, 'Mba Lia &amp; Mas Iman', 'MasyaAllah ayu... Selamat ya sayang. Semoga semua nya di mudahkan dan di lancar kan oleh Allah SWT. Saya juga sangat terharu membaca kisah kalian. Semoga ridho ', 'Hadir'),
(73, 'Feby &amp; partner', 'Selamat yaaa kakaku &amp; mas ronggo, ikut bahagia sekali ðŸ¤ðŸ¤ semoga lancar sampai hari H yaaa.. aamiin ðŸ˜‡', 'Hadir'),
(74, 'Mba Fitri', 'Alhamdulillah ya Allah akhirnya terjawab semua doa2 Ayu, jawaban dari kesabaran Ayu, ikut bahagia banget akhirnya Ayu menemukan jodoh yg insyaAllah terbaik dr A', 'Hadir'),
(75, 'Mba Yani &amp; Mas Agus', 'Bismillah. \r\nUntuk Ronggo &amp; Ayu Barakallah ya sudah melewati tahap demi tahap, semoga Allah merahmati dan In Syaa Allah dilancarkan segalanya sampai hari H,', 'Hadir'),
(76, 'Keluarga Besar Samban', 'Waalaikumsalam warahmatullahi wabarakatuh\r\nSemoga acaranya dimudahkan dilancarkan, sejak awal sampe dg selesai, Mas Ronggo n Mbak Ayu dpt berumah tangga dg saki', 'Tidak'),
(77, 'Big Family of DC98', 'Finally. Gas Keun Om Go. Moga Semua Lancar dan Samawa Ya.', 'Hadir'),
(78, 'Tante Tatiek &amp; Keluarga', 'Untuk Ronggo &amp; Ayu....semoga lancar sampai hari H.\r\nSemoga menjadi keluarga yang sakinah, mawadah &amp; warahmah sampai Jannah.\r\nDan semoga di karuniai ketu', 'Hadir'),
(79, 'Big Family of DC98', 'Barokallah, Bang Ronggo - Mba Ayu\r\nInsyaallah hadir', 'Hadir'),
(80, 'Big Family of Galau Crew(Bungalia)', 'Selamat Ya Om Ronggo Pirlo and AYU semoga menjadi keluarga sakinah mawadah warahmah .. ', 'Hadir'),
(81, 'Indra Maulana &amp; Istri', 'Akhir nya   semoga diberikan kelancaran dan samawa', 'Hadir'),
(82, 'Tante Titiek &amp; Keluarga', 'Selamat untuk Ronggo &amp; Ayu\r\nSemoga dimudahkan segala urusan sampai hari H. Dijadikan keluarga yang samawa aamiin YRA', 'Hadir'),
(83, 'Tante Sri &amp; Om Bambang', 'Utk Ronggo &amp; Ayu, semoga acara pernikahan berjln lancar. Slmt berbahagia dan membina rmh tangga yg SaMaWa. Aamiinn...yra', 'Hadir'),
(84, 'Putri &amp; Suami', 'Selamat menempuh hidup baru Mas Ronggo dan Mbak Ayu\r\nSemoga Allah mudahkan segalanya sampai hari H. Aamiin', 'Hadir'),
(85, 'Big Family of DC98', 'Alhamdulillah mas ronggo dan mba ayu.. insyaAllah hadir mas - Okka', 'Hadir'),
(86, 'Nisa &amp; Kiki', 'Mashaallah, Mabruk Om Ronggo dan tante ayuðŸ«°ðŸ»\r\nSemoga Allah mudahkan dan lancarkan segalanya sampai hari H. AamiinðŸ¤²ðŸ»', 'Hadir'),
(87, 'Big Family of DC98', 'Semoga menjadi keluarga sakinah warohmah mawaddah. Di karuniani anak2 sholeh dan sholehah. ', 'Hadir'),
(88, 'Big Family of DC98', 'Barakallah...semoga menjadi keluarga yang bahagia selalu', 'Hadir'),
(89, 'Disa &amp; Candra', 'Masya Allah Tabarakallah selamat kakaku sayang, lancar lancar sampai hari H aamiinnâ¤ï¸â¤ï¸â¤ï¸', 'Hadir'),
(90, 'Mba Nurul', 'Semoga Niat baik Ayu &amp; Ronggo SAMAWA dan  rangkaian acaranya berjalan lancar.... Aamiin Ya Rabb ', 'Hadir'),
(91, 'Tante Nini Samad', 'Selamat Betbahagia buat ponakan manis ku AYU  dan RONGGO .. cium tante Nini Samad dan adik2 di Samarinda ..', 'Tidak'),
(92, 'Keluarga Besar PT. NUN', 'cieeeeeeeeeeeeeeeeeeeeee sampai maut memisahkan pokoknya, semoga lancar sampai hari h. -Ambon', 'Hadir'),
(93, 'Big Family of DC98', 'Semoga Menjadi Keluarga Sakinah Mawaddah Warahmah (Okisinho)', 'Hadir'),
(94, 'Keluarga Besar PT. NUN', ' Barakallahu lakuma wa baraka a&#039;laikuma wa jama&#039;a. Tetra &amp; Family', 'Hadir'),
(95, 'by surya ðŸ’»', 'Barakallah...semoga menjadi keluarga SAMAWA yang bahagia selalu  dan rangkaian acaranya berjalan lancar.... Aamiin Ya Rabb', 'Hadir'),
(97, 'Keluarga Besar PT. NUN', 'Semoga kang bur menadi keluarga yang sakinah mawaddah warohma\r\n-farhan (khaled)', 'Hadir'),
(104, 'Keluarga Besar PT. NUN', 'Semoga menjadi keluarga yang sakinah mawadah warahmah.', 'Hadir'),
(105, 'Rekan Vibicloud', 'Barakallah, selamat ya mas Ronggo, semoga lancar sampai hari H!!\r\nSemoga samawa', 'Tidak'),
(106, 'Big Family of DC98', 'Barokallah om Ronggo Pirlo 21 dan Ayu, semoga bahagia selalu menjadi pasangan yg sakinnah mawaddah warohmah serta dikaruniai keturunan saleh solehah, aamiin', 'Hadir'),
(107, 'Te Pido, Te Leni, Te Tatik, Te Erna, Pip', 'Selamat menempuh hidup baru. Semoga selalu dilimpahi kebahagiaan.', 'Tidak'),
(108, 'Tyo &amp; Istri', 'Saya dan istri mengucapkan Selamat menempuh hidup yang baru dan lembaran kisah terindah semoga mas ronggo dan istri menjadi keluarga yang sakinah ,mawaddah,waro', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tetangga`
--

CREATE TABLE `tetangga` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `no_rumah` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tetangga`
--

INSERT INTO `tetangga` (`id`, `nama`, `no_rumah`, `no_hp`) VALUES
(1, 'user', '-', '-'),
(2, 'Mba Titis & Mas Yong', '-', '-'),
(3, 'Bude Ana Tokol', '-', '-'),
(4, 'Mba Ditya & Adhit', '-', '-'),
(5, 'Mba Hanum & Ardi', '-', '-'),
(6, 'Bude Titi Harun', '-', '-'),
(7, 'Mba Anggit & Mas Ferry', '-', '-'),
(8, 'Bpk Didik & Bu Emi', '-', '-'),
(9, 'Bayu & Ayas', '-', '-'),
(10, 'Bimo & Aretta', '-', '-'),
(11, 'Ivan Baskoro', '-', '-'),
(12, 'Ibu Tuti Jogja & Keluarga', '-', '-'),
(13, 'Bpk Gama & Keluarga', '-', '-'),
(14, 'Atika & Ari', '-', '-'),
(15, 'Bpk Dono P & Bu Marlita', '-', '-'),
(16, 'Annis & Diaz', '-', '-'),
(17, 'Ibu Narni', '-', '-'),
(18, 'Ibu Mismi', '-', '-'),
(19, 'Pakde Mudji & Bude Mur', '-', '-'),
(20, 'Mas Bram & Istri', '-', '-'),
(21, 'Mba Rosi & Partner', '-', '-'),
(22, 'Tante Tatiek & Keluarga', '-', '-'),
(23, 'Nisa & Soni', '-', '-'),
(24, 'Tante Sri & Om Bambang', '-', '-'),
(25, 'Andri & Rara', '-', '-'),
(26, 'Tante Titiek & Keluarga', '-', '-'),
(27, 'Putri & Suami', '-', '-'),
(28, 'Mas Ifud & Keluarga', '-', '-'),
(29, 'Nisa & Kiki', '-', '-'),
(30, 'Mba Yani & Mas Agus', '-', '-'),
(31, 'Mba Dani & Mas Catur', '-', '-'),
(32, 'Mas Rio & Mba Fatma', '-', '-'),
(33, 'Mas Dede & Istri', '-', '-'),
(34, 'Paklik Karjo', '-', '-'),
(35, 'Mba Rina & Suami', '-', '-'),
(36, 'Mba Iput & Mas Arif', '-', '-'),
(37, 'Mas Rano & Istri', '-', '-'),
(38, 'Mas Giyanto & Istri', '-', '-'),
(39, 'Tyo & Istri', '-', '-'),
(40, 'Retno & Suami', '-', '-'),
(41, 'Jiman & Istri', '-', '-'),
(42, 'Bpk Bayu & Ibu Ambar', '-', '-'),
(43, 'Bpk Evan & Ibu Tatik', '-', '-'),
(44, 'Bpk Hamdi & Ibu May', '-', '-'),
(45, 'Mas Yogi & Mba Minar', '-', '-'),
(46, 'Gifari & Fina', '-', '-'),
(47, 'Bpk Hadi & Istri', '-', '-'),
(48, 'Mba Laila & Suami', '-', '-'),
(49, 'Ibu Azizah', '-', '-'),
(50, 'Ibu Ismail', '-', '-'),
(51, 'Ibu Lautry', '-', '-'),
(52, 'Bpk Ujang', '-', '-'),
(53, 'Ibu Ida', '-', '-'),
(54, 'Ibu Rizka (YPI)', '-', '-'),
(55, 'Ibu Irza (YPI)', '-', '-'),
(56, 'Keluarga Ibu Masna', '-', '-'),
(57, 'Bpk Wiweko & Istri', '-', '-'),
(58, 'Afied & Resty', '-', '-'),
(59, 'Pak Harun(Kenanga 2) & Istri', '-', '-'),
(60, 'Tetra & Lia', '-', '-'),
(61, 'Bpk Komar & Istri', '-', '-'),
(62, 'Indra Maulana & Istri', '-', '-'),
(63, 'Arief Hudaya & Istri', '-', '-'),
(64, 'Bpk Lili & Istri', '-', '-'),
(65, 'Mas Ari & Mba Anggi', '-', '-'),
(66, 'Keluarga Besar PT. NUN', '-', '-'),
(67, 'Bpk Ahsan & Istri', '-', '-'),
(68, 'Ust. Mustami\'in & Istri', '-', '-'),
(69, 'Big Family of DC98', '-', '-'),
(70, 'Bang Dizzy & Istri', '-', '-'),
(71, 'Mas Hadi & Melisa', '-', '-'),
(72, 'Big Family of Galau Crew(Bungalia)', '-', '-'),
(73, 'Mas Dodo & Mba Rina', '-', '-'),
(74, 'Rekan Vibicloud', '-', '-'),
(75, 'Arum & Predi', '-', '-'),
(76, 'Ojan & Nurul', '-', '-'),
(77, '-------------RONGGO-------------', '---------------------------', '---------------------------'),
(78, 'Kel. Adji Milan', '-', '-'),
(79, 'Kel. Adji Triadji (Alm)', '-', '-'),
(80, 'Kel. Adji Daroma', '-', '-'),
(81, 'Kel. Adji Parikesit', '-', '-'),
(82, 'Kel. Adji Gamal', '-', '-'),
(83, 'Kel. Kak Andre', '-', '-'),
(84, 'Kel. Besar Bapak M Sobri (Alm)', '-', '-'),
(85, 'Mba Eva & Keluarga', '-', '-'),
(86, 'Kel. Adji Maspul', '-', '-'),
(87, 'Kel. Tante Nana Samad', '-', '-'),
(88, 'Tante Nini Samad', '-', '-'),
(89, 'Mba Sela & Suami', '-', '-'),
(90, 'Bang Temmy, Kak Ria', '-', '-'),
(91, 'Kel. Adji Rico', '-', '-'),
(92, 'Te Pido, Te Leni, Te Tatik, Te Erna, Pipi', '-', '-'),
(93, 'Gina & Suami', '-', '-'),
(94, 'Kel. Mba Uti', '-', '-'),
(95, 'Kel. Mba Ming', '-', '-'),
(96, 'Te Uyun, Te Anum, Te Iyul', '-', '-'),
(97, 'Te Nani', '-', '-'),
(98, 'Mba Fitri Yani & Keluarga', '-', '-'),
(99, 'Bang Ucok & Tante Lee', '-', '-'),
(100, 'Mba Ditta & Suami', '-', '-'),
(101, 'Mba Nurul', '-', '-'),
(102, 'Feby & partner', '-', '-'),
(103, 'Mba Fitri', '-', '-'),
(104, 'Mba Arin & Suami', '-', '-'),
(105, 'Disa & Candra', '-', '-'),
(106, 'Bu Santi & Suami', '-', '-'),
(107, 'Mba Lia & Mas Iman', '-', '-'),
(108, 'Ayu Andira', '-', '-'),
(109, 'Arin', '-', '-'),
(110, 'Juleha', '-', '-'),
(111, 'Randi', '-', '-'),
(112, 'Kicul', '-', '-'),
(113, 'Ipunk', '-', '-'),
(114, 'Indah & Arif', '-', '-'),
(115, 'Mayang', '-', '-'),
(116, 'Kak Melly', '-', '-'),
(117, 'Mba Sari & Suami', '-', '-'),
(118, 'Kak Umi & Mas Deni', '-', '-'),
(119, 'Sari & Wadi', '-', '-'),
(120, 'Hilda & Andri', '-', '-'),
(121, 'Mas Eko', '-', '-'),
(122, 'Pak Wahyono', '-', '-'),
(123, 'Tias & Suami, Tante Yati', '-', '-'),
(124, 'Ningsih', '-', '-'),
(125, 'Kristin', '-', '-'),
(126, 'Eka', '-', '-'),
(127, 'Amel', '-', '-'),
(128, 'Zhiya', '-', '-'),
(129, 'Fiana', '-', '-'),
(130, 'Anggi', '-', '-'),
(131, 'Syafina', '-', '-'),
(132, 'Fitri N', '-', '-'),
(133, 'Kika & Ando', '-', '-'),
(134, 'Fitri', '-', '-'),
(135, 'Moe', '-', '-'),
(136, 'Intan', '-', '-'),
(137, 'Yuki & Suami', '-', '-'),
(138, 'Team OB & Security', '-', '-'),
(139, 'Pak Budi', '-', '-'),
(140, 'Rustam', '-', '-'),
(141, 'Pak Hamid', '-', '-'),
(142, 'Pak Sahid', '-', '-'),
(143, 'Angga', '-', '-'),
(144, 'Agung Surya', '-', '-'),
(145, 'Pak Tarmuji', '-', '-'),
(146, 'Team FFD', '-', '-'),
(147, 'Kel. Bapak Gatot (Alm)', '-', '-'),
(148, 'Sella', '-', '-'),
(149, 'Eky Pratiwi', '-', '-'),
(150, 'Fitri Eka', '-', '-'),
(151, 'Puji', '-', '-'),
(152, 'Pak Teguh', '-', '-'),
(153, 'Team Admin PHG', '-', '-'),
(154, 'Pak Daud', '-', '-'),
(155, 'Ali Zulfikar', '-', '-'),
(156, 'Dinto', '-', '-'),
(157, 'Kak Novi', '-', '-'),
(158, 'Kak Deris', '-', '-'),
(159, 'Mas Agung', '-', '-'),
(160, 'Mas Andi', '-', '-'),
(161, 'Anty & Aldo', '-', '-'),
(162, 'Kak Phat', '-', '-'),
(163, 'Mba Elisa', '-', '-'),
(164, '------------AYU------------', '-------------------------', '-------------------------'),
(165, 'Keluarga Besar Samban', '-', '-'),
(166, 'Keluarga Besar Semanu', '-', '-'),
(167, 'Mas Tatuk & Istri', '-', '-'),
(168, 'Mas Indra & Istri', '-', '-'),
(169, 'Sangaji & Istri', '-', '-'),
(170, 'Pak Agus & Istri', '-', '-'),
(171, 'Mba Wigi & Suami', '-', '-'),
(172, 'Ibu Tuti Jogja & Keluarga', '-', '-'),
(173, 'Bpk Gama & Keluarga', '-', '-'),
(174, 'Atika & Ari', '-', '-'),
(175, 'Bpk Dono P & Bu Marlita', '-', '-'),
(176, 'Annis & Diaz', '-', '-'),
(177, 'Ibu Narni', '-', '-'),
(178, 'Ibu Mismi', '-', '-'),
(179, 'Keluarga besar SBD 7 - 3 PJ', '-', '-'),
(180, 'Mba Devi & Mas Adi', '-', '-'),
(181, 'Rekan BTOZ', '-', '-'),
(182, 'Keluarga besar Pakde', '-', '-'),
(183, 'Ibu Ghita (YPI)', '-', '-'),
(184, 'Mba Nia', '-', '-'),
(185, 'Mba Astri', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetangga`
--
ALTER TABLE `tetangga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tetangga`
--
ALTER TABLE `tetangga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
