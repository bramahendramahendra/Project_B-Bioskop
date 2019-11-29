-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 05:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-project_bayar-01-bioskop_aca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Testing0', 'Testing0', 'testing0@gmail.com', 'Testing0'),
(2, 'Testing1', 'Testing1', 'testing1@gmail.com', 'Testing1'),
(3, 'Testing2', 'Testing2', 'testing2@gmail.com', 'd64c2df2c18061e78b51a9f6d3e542aa'),
(4, 'testing3', 'testing3', 'testing3@gmail.com', '5fe43373c2db4deb851f3290080621f5');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `id` int(11) NOT NULL,
  `namaCinema` varchar(200) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `idCinema` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `namaCinema`, `lokasi`, `idCinema`) VALUES
(1, 'CIWALK XXI', 'Jl. Cihampelas No 16 Cipaganti Bandung', '1'),
(2, 'EMPIRE XXI', 'Jl Merdeka No 56 Citarum Bandung', '3'),
(5, 'testing0', 'testing0', 'C-5');

-- --------------------------------------------------------

--
-- Table structure for table `cinema-studio`
--

CREATE TABLE `cinema-studio` (
  `id` int(11) NOT NULL,
  `idCinema` varchar(11) DEFAULT NULL,
  `idStudio` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema-studio`
--

INSERT INTO `cinema-studio` (`id`, `idCinema`, `idStudio`) VALUES
(5, 'C-5', 'S-2'),
(6, 'C-5', 'S-3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `saldo_account` int(11) NOT NULL,
  `no_hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email`, `username`, `password`, `saldo_account`, `no_hp`) VALUES
(1, 'Clarisa Hasya', 'clarisa.hasya@gmail.com', 'clarisahasya', 'kepodeh', 25000, 818075261),
(2, 'Nurhai Bakah', 'barkah@gmail.com', 'bucinterozz', 'burhan33', 0, 897579981),
(3, 'Miftah Falah', 'miftah@gmail.com', 'amif123', 'lovebird12', 100000, 896362838),
(4, 'tazari Orma', 'taza@gmail.com', 'tazaor', 'taza123', 25000, 857263818),
(5, 'testing0', 'testing0@gmail.com', 'testing0', '123456', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(2) NOT NULL,
  `genre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(2, 'testing1'),
(4, 'testing3'),
(5, 'testing2'),
(6, 'adventure');

-- --------------------------------------------------------

--
-- Table structure for table `jadwaltayang`
--

CREATE TABLE `jadwaltayang` (
  `idJadwalTayang` int(11) NOT NULL,
  `tanggalTayang` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `idMovie` int(11) NOT NULL,
  `idCinema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `idMovie` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `rating` float NOT NULL,
  `pemain` varchar(500) NOT NULL,
  `sutradara` varchar(500) NOT NULL,
  `language` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idMovie`, `judul`, `tanggal_rilis`, `durasi`, `genre`, `kategori`, `rating`, `pemain`, `sutradara`, `language`, `subtitle`, `sinopsis`, `image`) VALUES
(17, 'Pretty Boys', '2019-09-19', 100, 'Comedy', '13+', 9.7, 'Vincent Rompies, Deddy Mahendra Desta, Onadio Leonardo, Danilla Riyadi', 'Tompi', 'Bahasa Indonesia', 'None', 'SAAT PERTELEVISIAN HANCUR MATI KARENA \"BERBEDA\", kita yang menodai TV apa TV yang\r\nmenodai kita. Ini kisah Anugerah (Vincent Rompies) dan Rahmat (Deddy Mahendra Desta) yang pengen ngetop malah ngedrop! Asty (Danilla Riyadi), Roni (Onadio Leonardo), dan Mas Bayu (Imam Darto) mewarnai perjalanan hidup mereka.', 'prettyboys.jpg'),
(18, 'Weathering With You', '2019-08-21', 112, 'Animation', '13+', 9.6, 'Kotaro Daigo, Nana Mori, Chieko Baishô', 'Makoto Shinkai', 'Japan', 'Bahasa Indonesia', 'Seorang anak muda dari desa terpencil di Shikoku, yang meninggalkan rumah dan memutuskan untuk tinggal di Tokyo. Dalam perjalanannya, dia bertemu dengan Keisuke, seorang pria aneh yang menawarkan bantuan kepadanya. Merasa aneh dengan orang tersebut, Hodoka memutuskan untuk mencoba mencari peruntungan yang lain. Namun dia menghadapi kesulitan yang datang silih berganti dalam perjalannya. Setelah beberapa kali tidur di jalanan karena tidak ada orang lain yang bias dihubungi, Hodoka memutuskan untuk menghubungi Keisuke. Hodoka mendapatkan tawaran bekerja sebagai penulis majalah lokal milik Keisuke yang membahas supernatural dan hal hal aneh. Selama di Tokyo, Hodoka selalu diikuti cuaca aneh dimana hujan turun tiada henti. Saat menulis sebuah cerita, dia mendengar kisah pengendalian cuaca. Dia berusaha mencari kebenaran dari legenda urban di mana ada seorang gadis muda yang memiliki kekuatan\r\nuntuk menghentikan hujan dan membuat langit menjadi cerah kembali. Pencariannya ini membuatnya bertemu dengan Hina Amano, seorang gadis yang memiliki kekuatan luar biasa yang dapat mengendalikan cuaca.', 'weathering.jpg'),
(19, 'Midsommar', '2019-09-07', 138, 'Thriller', '21+', 6.6, 'Florence Pugh, Jack Reynor, Vilhelm Blomgren', 'Ari Aster', 'English', 'Bahasa Indonesia', 'Saat hubungan keduanya tengah bermasalah, sepasang kekasih muda dari Amerika Serikat melancong ke sebuah festival tengah musim panas Swedia, di mana tempat yang tampak seperti surga permai berubah menjadi mimpi buruk yang mengerikan, seiring warga setempat mulai menunjukkan niat bengis mereka.', 'midsommar.jpg'),
(20, 'Good Boys', '2019-09-21', 90, 'Comedy', '17+', 8.7, 'Jacob Tremblay, Keith L. Williams, Brady Noon, Molly Gordon', 'Gene Stupnitsky', 'English', 'Bahasa Indonesia', 'Tiga anak laki-laki kelas 6 Pergi dari sekolah dan memulai petualangan seru mereka membawa obat-obatan yang dicuri secara tidak sengaja, diburu oleh gadis-gadis remaja, dan mereka mencoba pulang ke rumah tepat waktu untuk pesta yang sudah lama dinanti-nantikan.\r\n', 'goodboys.jpg'),
(21, 'Boboiboy 2', '2019-08-08', 110, 'Animation', 'SU', 9.6, 'Nur Fathiah Diaz, Fadzli Mohd Rawi, Dzubir Mohammed Zakaria', 'Nizam Abdul Razak', 'Malaysian', 'Bahasa Indonesia', 'BoBoiBoy dan teman-temannya diserang oleh penjahat kuno bernama Retak\'ka, pemilik asli kekuatan Elemental BoBoiBoy. Retak\'ka berupaya memulihkan kekuatan lamanya dan menjadi makhluk paling menakutkan untuk menguasai seluruh galaksi. BoboiBoy harus mencari cara menghentikan Retak\'ka dan menyelamatkan galaksi.', 'boboiboy2.jpg'),
(33, 'testing0', '0000-00-00', 0, 'G-33', '', 0, '', '', '', '', '', 'testing0.jpg'),
(34, 'testing1', '2019-11-30', 1, 'G-34', 'testing1', 5, 'testing1', 'testing1', 'testing1', 'testing1', 'testing1', 'M-34.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie-genre`
--

CREATE TABLE `movie-genre` (
  `id` int(5) NOT NULL,
  `movie` varchar(10) DEFAULT NULL,
  `genre` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie-genre`
--

INSERT INTO `movie-genre` (`id`, `movie`, `genre`) VALUES
(1, NULL, NULL),
(6, 'G-33', 4),
(12, 'G-34', 2),
(13, 'G-34', 5),
(14, 'G-34', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idPemesanan` int(11) NOT NULL,
  `transactionCode` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `numberOfTickets` int(11) NOT NULL,
  `tanggalPemesanan` date NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `idJadwalTayang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `transactionCode`, `status`, `numberOfTickets`, `tanggalPemesanan`, `totalHarga`, `idCustomer`, `idJadwalTayang`) VALUES
(1, 'A1001', 'Lunas', 2, '2019-09-06', 140000, 1, 4),
(2, 'A1002', 'Lunas', 1, '2019-08-09', 40000, 3, 4),
(3, 'A1003', 'Lunas', 2, '2019-02-08', 200000, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `idSeat` int(11) NOT NULL,
  `nomorSeat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`idSeat`, `nomorSeat`) VALUES
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'A11'),
(12, 'A12'),
(13, 'A13'),
(14, 'A14'),
(15, 'A15'),
(16, 'A16'),
(17, 'A17'),
(18, 'A18'),
(19, 'A19'),
(20, 'A20'),
(21, 'A21'),
(22, 'A22'),
(23, 'B1'),
(24, 'B2'),
(25, 'B3'),
(26, 'B4'),
(27, 'B5'),
(28, 'B6'),
(29, 'B7'),
(30, 'B8'),
(31, 'B9'),
(32, 'B10'),
(33, 'B11'),
(34, 'B12'),
(35, 'B13'),
(36, 'B14'),
(37, 'B15'),
(38, 'B16'),
(39, 'B17'),
(40, 'B18'),
(41, 'B19'),
(42, 'B20'),
(43, 'B21'),
(44, 'B22'),
(66, 'C1'),
(67, 'C2'),
(68, 'C3'),
(69, 'C4'),
(70, 'C5'),
(71, 'A1'),
(72, 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `idStudio` varchar(11) DEFAULT NULL,
  `nomorStudio` int(11) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `idStudio`, `nomorStudio`, `kelas`, `harga`) VALUES
(2, 'S-2', 2, 'testing2', 3),
(3, 'S-3', 3, 'testing3', 500);

-- --------------------------------------------------------

--
-- Table structure for table `studio-seat`
--

CREATE TABLE `studio-seat` (
  `id` int(5) NOT NULL,
  `idStudio` varchar(11) DEFAULT NULL,
  `idSeat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio-seat`
--

INSERT INTO `studio-seat` (`id`, `idStudio`, `idSeat`) VALUES
(66, 'S-2', 3),
(67, 'S-2', 4),
(68, 'S-2', 5),
(69, 'S-2', 6),
(70, 'S-2', 7),
(71, 'S-2', 8),
(72, 'S-2', 9),
(73, 'S-2', 10),
(74, 'S-2', 11),
(75, 'S-2', 12),
(76, 'S-2', 13),
(77, 'S-2', 14),
(78, 'S-2', 15),
(79, 'S-2', 16),
(80, 'S-2', 17),
(81, 'S-2', 18),
(82, 'S-2', 19),
(83, 'S-2', 20),
(84, 'S-2', 23),
(85, 'S-2', 24),
(86, 'S-2', 25),
(87, 'S-2', 26),
(88, 'S-2', 27),
(89, 'S-2', 28),
(90, 'S-2', 29),
(91, 'S-2', 30),
(92, 'S-2', 31),
(93, 'S-2', 32),
(94, 'S-2', 33),
(95, 'S-2', 34),
(96, 'S-2', 35),
(97, 'S-2', 36),
(98, 'S-2', 37),
(99, 'S-2', 38),
(100, 'S-2', 39),
(101, 'S-2', 40),
(102, 'S-2', 41),
(103, 'S-2', 42),
(136, 'S-3', 3),
(137, 'S-3', 4),
(138, 'S-3', 5),
(139, 'S-3', 6),
(140, 'S-3', 8),
(141, 'S-3', 9),
(142, 'S-3', 10),
(143, 'S-3', 11),
(144, 'S-3', 12),
(145, 'S-3', 13),
(146, 'S-3', 14),
(147, 'S-3', 15),
(148, 'S-3', 16),
(149, 'S-3', 17),
(150, 'S-3', 18),
(151, 'S-3', 19),
(152, 'S-3', 20),
(153, 'S-3', 21),
(154, 'S-3', 23),
(155, 'S-3', 24),
(156, 'S-3', 25),
(157, 'S-3', 26),
(158, 'S-3', 27),
(159, 'S-3', 28),
(160, 'S-3', 29),
(161, 'S-3', 30),
(162, 'S-3', 31),
(163, 'S-3', 66),
(164, 'S-3', 67),
(165, 'S-3', 68),
(166, 'S-3', 69);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema-studio`
--
ALTER TABLE `cinema-studio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  ADD PRIMARY KEY (`idJadwalTayang`),
  ADD KEY `jadwaltayang_fk1` (`idMovie`),
  ADD KEY `jadwaltayang_fk2` (`idCinema`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idMovie`);

--
-- Indexes for table `movie-genre`
--
ALTER TABLE `movie-genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `pemesanan_fk2` (`idCustomer`),
  ADD KEY `pemesanan_fk3` (`idJadwalTayang`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`idSeat`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio-seat`
--
ALTER TABLE `studio-seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cinema-studio`
--
ALTER TABLE `cinema-studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  MODIFY `idJadwalTayang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `idMovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `movie-genre`
--
ALTER TABLE `movie-genre`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `idSeat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studio-seat`
--
ALTER TABLE `studio-seat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  ADD CONSTRAINT `jadwaltayang_fk1` FOREIGN KEY (`idMovie`) REFERENCES `movie` (`idMovie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwaltayang_fk2` FOREIGN KEY (`idCinema`) REFERENCES `cinema` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
