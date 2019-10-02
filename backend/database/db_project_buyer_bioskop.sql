-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 04:46 AM
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
-- Database: `db_project_buyer_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `idCinema` int(11) NOT NULL,
  `namaCinema` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `idStudio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`idCinema`, `namaCinema`, `lokasi`, `idStudio`) VALUES
(1, 'CIWALK XXI', 'Jl. Cihampelas No 16 Cipaganti Bandung', 0),
(2, 'EMPIRE XXI', 'Jl Merdeka No 56 Citarum Bandung', 0),
(3, 'TIKO XXI', 'Jl Kopo Cirangrang No 599', 0);

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

--
-- Dumping data for table `jadwaltayang`
--

INSERT INTO `jadwaltayang` (`idJadwalTayang`, `tanggalTayang`, `startTime`, `endTime`, `idMovie`, `idCinema`) VALUES
(3, '2019-09-04', '14:45:00', '16:47:00', 1, 1),
(4, '2019-10-16', '11:00:00', '14:01:00', 2, 3),
(5, '2019-11-19', '18:45:00', '20:28:00', 3, 2);

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
  `sinopsis` varchar(500) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idMovie`, `judul`, `tanggal_rilis`, `durasi`, `genre`, `kategori`, `rating`, `pemain`, `sutradara`, `language`, `subtitle`, `sinopsis`, `image`) VALUES
(1, 'Letter to Juliet', '2010-05-14', 140, 'Romantic Comedy', '13+', 9, 'Amanda Syfried, Christopher Egan', 'Gary Winick', 'English', 'Bahasa Indonesia', 'Megkisahkan seorang wanita bertemu dengan seorang pria yang tidak percaya akan cinta sejati', 'letter.jpg'),
(2, 'Doraemon :Great Adventure in the Antartic Kachi Kochi', '2018-10-20', 190, 'Fiction', 'SU', 8.9, 'wasabi mizuta, megumi oohara, yo oizumi', 'tsutomu shibayama', 'Jepang', 'Bahasa Indonesia', 'petualangan doraemon dan teman-temannya kali ini akan menuju antartika setelah menemukan sebuah cinc', 'doraemon.jpg'),
(3, 'Ada Apa Dengan Cinta?', '2002-02-08', 150, 'Drama Romance', '17+', 8.8, 'nicholas saputra, dian sastrowardoyo', 'rudy soedjarwo', 'Bahasa Indonesia', 'Bahasa Indonesia', 'seorang gadis SMA populer harus memilih apakah ia ingin menjadi bagian dari gengnya atau jatuh cinta', 'aadc.jpg'),
(5, 'The Curse Of The Weeping Woman', '2019-04-17', 93, 'Supernatural horror/Misteri', '13+', 8.1, 'Linda Cardellini, Patricia Velásquez, Marisol Ramirez, Sean Patrick Thomas, Jaynee?Lynne Kinchen', 'Michael Chaves', 'English, Spanyol', 'Bahasa Indonesia', 'Tak lama setelah mengabaikan peringatan mengenai seorang ibu yang dicurigai punya kecenderungan menyakiti anak-anak, seorang pekerja sosial dan anak-anaknya yang masih kecil terjebak dalam alam supranatural yang mengerikan. Untuk lolos dari murka sang La Llorona, satu-satunya harapan mereka adalah', 'default.jpg'),
(6, 'Avengers Endgame', '2019-04-24', 185, 'Fantasi/Fiksi Ilmiah', '13+', 9.6, 'Scarlett Johansson, Chris Evans, Robert Downey Jr., Chris Hemsworth, Mark Ruffalo', 'Russo Bersaudara, Joe Russo', 'English', 'Bahasa Indonesia', 'Setelah peristiwa yang memusnahkan setengah dari populasi Bumi di Avengers: Infinity War (2018) kisah akan berlanjut saat Avengers yang tersisa berkumpul sekali lagi untuk melawan Thanos dan memulihkan tatanan alam semesta.', ''),
(8, 'Sunyi', '2019-04-11', 91, 'Horror', '13+', 8.9, 'Amanda Rawles, Angga Yunanda', 'Awi Suryadi', 'Bahasa Indonesia', 'Bahasa Indonesia', 'Diterima di SMA ungggulan \"Abdi Bangsa\" merupakan impian setiap siswa. Namun bagi ALEX (Angga Aldi), diterima masuk SMA tersebut bukanlah sebuah karunia, melainkan petaka. Budaya senioritas, tindakan kekerasan pada fisik dan mental – Bullying, telah menjadi \"menu\" harian Alex di sekolah ternama itu.', ''),
(9, 'Rumput Tetangga', '2019-04-18', 104, 'Drama/Komedi', '13+', 9.2, 'Titi Kamal, Donita, Tora Sudiro, Raffi Ahmad, Gading Marten', 'Guntur Soehardjanto', 'Bahasa Indonesia', 'Bahasa Indonesia', 'Menjelang reuni SMA, Kirana (Titi Kamal) yang dulu adalah murid paling populer dan berprestasi di sekolah khawatir akan pendapat teman-temannya terhadap kehidupannya yang anti-klimaks dan hanya menjadi Ibu Rumah Tangga dengan 2 anak (Aqila dan Daffa). Bagaimana kehidupannya bila semua yang diidamkan', '');

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
  `nomorSeat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`idSeat`, `nomorSeat`) VALUES
(1, 'A1'),
(2, 'B2'),
(3, 'A11');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `idStudio` int(11) NOT NULL,
  `nomorStudio` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `idSeat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`idStudio`, `nomorStudio`, `kelas`, `harga`, `idSeat`) VALUES
(1, 2, 'Reguler', 40000, 1),
(2, 1, 'Gold', 70000, 2),
(3, 3, 'Premium', 100000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`idCinema`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

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
  ADD PRIMARY KEY (`idStudio`),
  ADD KEY `studio_fk` (`idSeat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `idCinema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  MODIFY `idJadwalTayang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `idMovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `idSeat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `idStudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  ADD CONSTRAINT `jadwaltayang_fk1` FOREIGN KEY (`idMovie`) REFERENCES `movie` (`idMovie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwaltayang_fk2` FOREIGN KEY (`idCinema`) REFERENCES `cinema` (`idCinema`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `studio_fk` FOREIGN KEY (`idSeat`) REFERENCES `seat` (`idSeat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
