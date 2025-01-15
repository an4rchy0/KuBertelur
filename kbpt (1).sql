-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 03:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idm_kbt` varchar(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comty`
--

CREATE TABLE `comty` (
  `idcmt` varchar(9) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `descript` varchar(1000) NOT NULL,
  `hastag` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comty`
--

INSERT INTO `comty` (`idcmt`, `name`, `title`, `descript`, `hastag`, `created_at`, `updated_at`) VALUES
('CMT-001', 'Lobster Gang Community Notice Jabodetabek', 'Halo, Lobster Gang! 🦞', 'Selamat datang di komunitas Lobster Gang. Di sini, kita semua adalah keluarga besar pecinta lobster! Bergabunglah untuk berbagi cerita, foto, tips, dan pengalaman terkait lobster. Jangan ragu untuk mengunggah postingan atau meninggalkan komentar. Pastikan untuk selalu mematuhi peraturan komunitas agar suasana tetap harmonis!', '#lobster #seafood', NULL, NULL),
('CMT-002', 'Manchester Lele Cikarang 😛', 'Komunitas Resmi Ternak Lele Cabang Manchester😎', 'Deskripsi Komunitas: Komunitas Manchester Lele Cikarang adalah perkumpulan para pecinta dan peternak lele di kawasan Cikarang yang memiliki visi dan misi untuk mengembangkan usaha budidaya lele dengan teknik dan inovasi terkini. Komunitas ini berdiri untuk memfasilitasi para anggotanya dalam berbagi pengetahuan, pengalaman, serta solusi terhadap berbagai tantangan yang dihadapi dalam budidaya lele.', '#leleMania #kisahLele #bersamaLele #hariHariLele', NULL, NULL),
('CMT-003', 'Komunitas Ternak Nila Banyumas😊', 'Bersama Kembangkan Nila Banyumas☝😊', 'Komunitas Ternak Nila Banyumas adalah wadah bagi para peternak ikan nila di wilayah Banyumas yang memiliki tujuan untuk memajukan usaha budidaya ikan nila melalui kolaborasi, edukasi, dan inovasi. Kami berkomitmen untuk meningkatkan produktivitas dan kualitas hasil ternak melalui berbagai kegiatan yang mendukung peternak dalam menghadapi tantangan serta mengeksplorasi peluang di industri perikanan.', '#nila #Banyumas #nilaBanyumas', NULL, NULL),
('CMT-004', 'Komunitas Perikanan Air Tawar', 'Komunitas Pengembangan Perikanan Air Tawar 🐟', 'Deskripsi Komunitas: Komunitas Perikanan Air Tawar adalah tempat berkumpulnya para pecinta dan pelaku usaha perikanan air tawar yang memiliki visi untuk memajukan industri perikanan melalui kolaborasi, edukasi, dan inovasi. Komunitas ini berfokus pada pengembangan budidaya ikan air tawar seperti lele, nila, gurame, dan berbagai jenis ikan lainnya, dengan tujuan untuk meningkatkan produktivitas dan kesejahteraan anggotanya.', '#ikanTawar #pakanTawar #ternakTawar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(69, '2014_10_12_000000_create_users_table', 1),
(70, '2014_10_12_100000_create_password_resets_table', 1),
(71, '2019_08_19_000000_create_failed_jobs_table', 1),
(72, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(73, '2024_10_06_100318_product', 1),
(74, '2024_10_16_154238_usr_kbt', 1),
(75, '2024_10_16_154306_community', 1),
(76, '2024_10_16_163200_content', 1),
(77, '2024_10_16_163835_admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mycontent`
--

CREATE TABLE `mycontent` (
  `idpct` varchar(9) NOT NULL,
  `title` varchar(100) NOT NULL,
  `prevdesc` varchar(200) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `like` int(10) UNSIGNED NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `idusr_kbt` varchar(18) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mycontent`
--

INSERT INTO `mycontent` (`idpct`, `title`, `prevdesc`, `content`, `like`, `comment`, `idusr_kbt`, `created_at`, `updated_at`) VALUES
('CT-1D022', 'LELE BERGIZI', '-', 'blelelelelele', 100, 'keren', 'USPT-TD023', NULL, NULL),
('CT-1D050', 'Ternak Lele Jadi Trend Daerah Cikikir', '-', 'Ternak lele bisa menjadi usaha yang menjanjikan dengan perencanaan yang tepat. Salah satu tips penting adalah memastikan kualitas air di kolam tetap optimal. Lele membutuhkan air yang bersih dan kaya oksigen untuk tumbuh dengan baik, jadi penting untuk memasang sistem aerasi yang memadai dan rutin mengganti air kolam. Pemberian pakan yang tepat juga sangat krusial; gunakan pakan berkualitas tinggi yang kaya protein untuk mempercepat pertumbuhan lele. Jangan lupa untuk mengontrol jumlah pakan agar tidak berlebihan karena dapat mencemari air kolam. Selain itu, monitoring kesehatan lele secara rutin untuk mendeteksi adanya penyakit sejak dini sangat penting agar bisa segera dilakukan tindakan pencegahan atau pengobatan. Dengan perhatian yang baik terhadap faktor-faktor tersebut, usaha ternak lele Anda dapat berkembang dengan optimal.', 100, 'keren', 'USPT-0001', NULL, NULL),
('CT-1D052', 'Tips Ternak Lele 2024 (Ala - Ala)', '-', 'Ternak lele bisa menjadi usaha yang menjanjikan dengan perencanaan yang tepat. Salah satu tips penting adalah memastikan kualitas air di kolam tetap optimal. Lele membutuhkan air yang bersih dan kaya oksigen untuk tumbuh dengan baik, jadi penting untuk memasang sistem aerasi yang memadai dan rutin mengganti air kolam. Pemberian pakan yang tepat juga sangat krusial; gunakan pakan berkualitas tinggi yang kaya protein untuk mempercepat pertumbuhan lele. Jangan lupa untuk mengontrol jumlah pakan agar tidak berlebihan karena dapat mencemari air kolam. Selain itu, monitoring kesehatan lele secara rutin untuk mendeteksi adanya penyakit sejak dini sangat penting agar bisa segera dilakukan tindakan pencegahan atau pengobatan. Dengan perhatian yang baik terhadap faktor-faktor tersebut, usaha ternak lele Anda dapat berkembang dengan optimal.', 100, 'keren', 'USPT-0001', NULL, NULL),
('CT-1N002', 'Tau ga sih tentang ikan jangka yang terbilang langka nan unik???', '-', 'Ikan Jangka adalah salah satu spesies ikan air tawar yang cukup langka dan unik. Berasal dari perairan sungai dan danau di Asia Tenggara, ikan ini memiliki ciri khas bentuk tubuh yang langsing dan sirip yang panjang dan mencolok. Warna tubuhnya bisa bervariasi, mulai dari keperakan hingga keemasan, tergantung pada habitat dan makanannya. Keunikan lain dari ikan jangka adalah perilakunya yang cenderung soliter dan aktif pada malam hari, menjadikannya tidak mudah ditemukan di alam liar. Ikan ini juga dikenal memiliki kemampuan adaptasi yang baik terhadap perubahan kondisi lingkungan, namun tetap memerlukan perawatan khusus bila dipelihara dalam akuarium.', 100, 'keren', 'USPT-0001', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` varchar(20) NOT NULL,
  `prdname` varchar(60) NOT NULL,
  `prdprice` int(10) UNSIGNED NOT NULL,
  `prddescript` varchar(1000) NOT NULL,
  `prdqty` int(10) UNSIGNED NOT NULL,
  `prdpht` varchar(30) NOT NULL,
  `idusr_kbt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `prdname`, `prdprice`, `prddescript`, `prdqty`, `prdpht`, `idusr_kbt`, `created_at`, `updated_at`) VALUES
('PC-1O024', 'Nila Kuning (Bibit) 1 Kg', 25000, 'Nila Kuning, atau dikenal juga sebagai Tilapia, adalah salah satu jenis ikan budidaya yang sangat populer di Indonesia. Bibit Nila Kuning ini memiliki beberapa keunggulan yang membuatnya menjadi pilihan yang tepat untuk budidaya ikan:\r\n\r\nPertumbuhan Cepat: Nila Kuning dikenal dengan kemampuan pertumbuhannya yang cepat, sehingga Anda dapat mendapatkan hasil dalam waktu yang relatif singkat.\r\n\r\nTahan Penyakit: Ikan ini memiliki resistansi yang baik terhadap penyakit, sehingga memudahkan dalam pemeliharaan.\r\n\r\nMudah Di Pemeliharaan: Nila Kuning tidak memerlukan perawatan yang rumit dan dapat hidup dengan baik di berbagai jenis perairan.\r\n\r\nKandungan Gizi: Daging Nila Kuning kaya akan protein dan gizi lainnya, menjadikannya pilihan makanan yang sehat.\r\n\r\nDengan bibit Nila Kuning ukuran 1 Kg, Anda dapat memulai usaha budidaya ikan yang potensial untuk memberikan keuntungan yang stabil. Ideal untuk para petani atau penggemar budidaya ikan yang ingin mencoba usaha baru.', 63, '67152119b7ae0.png', 'USPT-0001', NULL, NULL),
('PC-FD000', 'Cumi Cumi Casablanca (1 kg)', 80000, 'Cumi-cumi Australia dikenal karena dagingnya yang lembut dan rasa yang segar, sehingga sangat cocok untuk berbagai masakan. Produk ini berasal dari perairan Australia yang bersih, menjamin kualitas dan keamanan. Dapatkan pengalaman kuliner yang istimewa dengan cumi-cumi Australia, yang dapat diolah menjadi hidangan lezat seperti calamari goreng, sushi, atau pasta seafood. Cocok untuk Anda yang menginginkan cita rasa laut yang autentik.', 14, '675c5be725659.jpg', 'USPT-TD054', NULL, NULL),
('PC-MD033', 'Gurame', 30000, 'apa ajalah', 15, '6772a220badb7.jpg', 'USPT-MD110', NULL, NULL),
('PC-MD034', 'kepiting', 40000, 'kepitng adalah', 24, '675f9ffebd449.jpg', 'USPT-MD020', NULL, NULL),
('PC-SD030', 'Bibit Lele Cilelep 1Kg', 40000, 'Bibit Lele Cilelep adalah pilihan ideal bagi Anda yang ingin memulai budidaya lele dengan hasil optimal. Dikenal karena pertumbuhan yang cepat dan ketahanan terhadap kondisi lingkungan yang beragam, bibit Lele Cilelep memastikan produksi yang konsisten dan berkualitas tinggi.', 44, '6755e84a98c0b.jpg', 'USPT-0001', NULL, NULL),
('PC-SD031', 'Bibit Nila Cianjur 1Kg', 45000, 'Bibit Nila Cianjur adalah pilihan terbaik untuk Anda yang menginginkan hasil budidaya ikan yang optimal. Dikenal dengan pertumbuhan yang cepat dan kualitas daging yang unggul, bibit Nila Cianjur ini sangat cocok untuk berbagai jenis kolam budidaya, baik itu kolam tanah, kolam terpal, maupun kolam beton.', 14, '6755f60f50131.jpg', 'USPT-0001', NULL, NULL),
('PC-SD040', 'Cakalang Fresh 1kg', 55000, 'Daging Cakalang Fresh adalah pilihan sempurna untuk Anda yang menginginkan sajian ikan laut segar dan berkualitas. Dikenal dengan rasa yang lezat dan kandungan gizi yang tinggi, daging cakalang ini sangat cocok untuk berbagai masakan, baik itu hidangan tradisional maupun modern.', 1, '6755e9d983710.jpg', 'USPT-0001', NULL, NULL),
('PC-SD041', 'Bibit Kepiting Cilembu 1Kg', 28000, 'Bibit Kepiting Cilembu adalah pilihan unggul bagi Anda yang ingin mengembangkan usaha budidaya kepiting dengan hasil maksimal. Dikenal karena kualitasnya yang tinggi dan kemampuannya beradaptasi dengan berbagai lingkungan, bibit Kepiting Cilembu siap menjawab kebutuhan pasar yang terus meningkat.', 29, '6755e91023263.jpg', 'USPT-0001', NULL, NULL),
('PC-SD044', 'Bibit Gurame Cikukur 1Kg', 20000, 'ibit Gurame Cikukur adalah pilihan unggulan bagi Anda yang ingin memulai atau mengembangkan usaha budidaya ikan gurame. Dikenal dengan kualitas dagingnya yang lezat dan ketahanannya terhadap berbagai kondisi lingkungan, bibit Gurame Cikukur siap memberikan hasil panen yang memuaskan', 12, '6755ea4a7be42.jpg', 'USPT-0001', NULL, NULL),
('PC-TJ050', 'Ikan Koi', 5000, 'Dijual Murah', 12, '677cc2d3457ee.jpg', 'USPT-TJ043', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trs_kpt`
--

CREATE TABLE `trs_kpt` (
  `TRSIDs` varchar(20) NOT NULL,
  `pdcID` varchar(20) NOT NULL,
  `usID` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trs_kpt`
--

INSERT INTO `trs_kpt` (`TRSIDs`, `pdcID`, `usID`, `qty`, `alamat`, `total`) VALUES
('TR-MD012', 'PC-1O024', 'USPT-0001', 2, 'Jakarta Raya', 65981),
('TR-MD025', 'PC-SD040', 'USPT-MD110', 3, 'Jakarta', 181387),
('TR-SD050', 'PC-FD000', 'USPT-TD054', 4, 'bekasi', 336532),
('TR-TD031', 'PC-SD031', 'USPT-TD023', 2, 'Jakrta Raya', 104155),
('TR-TD100', 'PC-SD030', 'USPT-TD054', 4, 'jakarta', 176162),
('TR-TD120', 'PC-1O024', 'USPT-TD054', 4, 'jakarta', 114051),
('TR-TJ024', 'PC-1O024', 'USPT-TJ043', 12, 'bekasi', 312707);

--
-- Triggers `trs_kpt`
--
DELIMITER $$
CREATE TRIGGER `upSP` AFTER INSERT ON `trs_kpt` FOR EACH ROW UPDATE product
     SET product.prdqty = product.prdqty - NEW.qty
   WHERE product.idproduct = NEW.pdcID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `usr_kpt`
--

CREATE TABLE `usr_kpt` (
  `idusr_kbt` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `call` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usr_kpt`
--

INSERT INTO `usr_kpt` (`idusr_kbt`, `name`, `username`, `call`, `email`, `password`, `created_at`, `updated_at`) VALUES
('USPT-0001', 'Ethan Watson', 'Ethan', '0826156215', 'ethan@gmail.com', 'ethanethan', NULL, NULL),
('USPT-MD020', 'nurti ananda', 'nurti', '+62895026811', 'Nurti04', 'Nurti04', NULL, NULL),
('USPT-MD042', 'Nurti Ananda', 'Nurti', '089502682811', 'Nurti', 'nurti', NULL, NULL),
('USPT-MD110', 'nurti', 'nurti', '+622718721887', 'nurti@gmail.com', '@Nurti12345', NULL, NULL),
('USPT-MD122', 'Nurti', 'nurti', '+622155617621', 'nurti@gmail.com', '@Nurti12345', NULL, NULL),
('USPT-MN111', 'Emy Watson', 'Emy', '08271651', 'emy@mail', 'emyemy', NULL, NULL),
('USPT-TD023', 'Genta', 'Genta', '+628123456789', 'muhgenta@gmail.com', '@Genta12345', NULL, NULL),
('USPT-TD050', 'Pengguna', 'Pengguna', '+6285198910678', 'nopal123@gmail.com', '@nopal12345', NULL, NULL),
('USPT-TD054', 'a', 'aaaaaa', '+621234567', 'aaaaaa', 'aaaaaa', NULL, NULL),
('USPT-TJ030', 'Sasii', 'SasiAsyifa', '+6281234567890', 'sasiasyifa@gmail.com', '@Sasiasyifa12345', NULL, NULL),
('USPT-TJ043', 'netanel', 'netanel', '+6281234567890', 'netaneld@gmail.com', '@Netanel1234', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idm_kbt`);

--
-- Indexes for table `comty`
--
ALTER TABLE `comty`
  ADD PRIMARY KEY (`idcmt`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycontent`
--
ALTER TABLE `mycontent`
  ADD PRIMARY KEY (`idpct`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indexes for table `trs_kpt`
--
ALTER TABLE `trs_kpt`
  ADD PRIMARY KEY (`TRSIDs`),
  ADD KEY `pdcID` (`pdcID`);

--
-- Indexes for table `usr_kpt`
--
ALTER TABLE `usr_kpt`
  ADD PRIMARY KEY (`idusr_kbt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trs_kpt`
--
ALTER TABLE `trs_kpt`
  ADD CONSTRAINT `trs_kpt_ibfk_1` FOREIGN KEY (`pdcID`) REFERENCES `product` (`idproduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
