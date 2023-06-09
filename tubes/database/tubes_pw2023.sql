-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 01:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `console_content`
--

CREATE TABLE `console_content` (
  `id` int NOT NULL,
  `id_console_content` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sub_judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `console_content`
--

INSERT INTO `console_content` (`id`, `id_console_content`, `judul`, `sub_judul`, `isi`) VALUES
(27, 9, 'Nintendo Switch', '', 'Sebuah console yang dimana berbeda dari console-console yang lain, jadi nintendo switch ini bisa dimainkan di TV dengan menggunakan dock yang istilahnya memonitoring ke TV, lalu console ini memiliki ukuran yang compact.'),
(34, 9, 'Nintendo Switch V1 (old)', '', 'Nintendo Switch juga adalah konsol video game hybrid yang dikembangkan oleh Nintendo dan dirilis di seluruh dunia di sebagian besar wilayah pada tanggal 3 Maret 2017. Konsol itu sendiri adalah tablet yang dapat dipasang ke konsol rumah atau digunakan sebagai perangkat portabel, menjadikannya konsol hybrid yang sangat menghibur.'),
(35, 9, 'Best game on Nintendo Switch', 'The legend of zelda : Breath of the wild', 'The Legend of Zelda: Breath of the Wild. Let’s face it, the Zelda series was long overdue for a major change, and The Legend of Zelda: Breath of the Wild offers an unparalleled sense of freedom and scale in the palm of your hand. Now widely considered one of the best games of all time, Breath of the Wild tells an epic story, as you glide, cook, and battle your way across a beautifully ruined version of Hyrule. It helped reinvigorate The Legend of Zelda in a way that fans had only dreamt of, easily propelling it to the number one spot on our list and in our hearts.\r\n'),
(36, 2, 'Microsoft', '', 'Microsoft Corporation is an American multinational technology corporation headquartered in Redmond, Washington. Microsoft&#039;s best-known software products are the Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. Microsoft ranked No. 14 in the 2022 Fortune 500 rankings of the largest United States corporations by total revenue;[2] it was the world&#039;s largest software maker by revenue as of 2022. It is considered as one of the Big Five American information technology companies, alongside Alphabet (parent company of Google), Amazon, Apple, and Meta (formerly Facebook).'),
(37, 2, 'Xbox', '', 'Xbox is a video gaming brand created and owned by Microsoft. The brand consists of five video game consoles, as well as applications (games), streaming service Xbox Cloud Gaming, online services such as the Xbox network and Xbox Game Pass, and the development arm Xbox Game Studios.'),
(38, 2, 'Xbox one X', '', 'When hooked up to a decent 4K HDR screen, the console plays games at an astoundingly high level of detail. Throw on a 4K Blu-ray with Dolby Atmos sound, and you&#039;ll be treated to the best cinematic experience this side of movie theater. For its time, the Xbox One X was the pinnacle of console gaming'),
(39, 2, 'Xbox one S', '', 'While both the Xbox One and Xbox One S play games natively at 1080p, the Xbox One S can upscale games to 4K resolution if you have a 4K TV. That makes for a better picture than 1080p or 720p, although it&#039;s not as good as native 4K, and the price is lower than xbox one x'),
(43, 2, 'Best game on Xbox', 'Sea of Thives', 'Possibly the biggest boon for Xbox One owners is the fact that Sea of Thieves is all theirs. Rare&#039;s emergent pirate adventure sees players sailing across the big blue, finding treasure where the X marks the spot, defeating hordes of skeletons and undead sea captains, and even collecting chickens and other items to sell to travelling merchants. Of course, you&#039;re doing all that in between swigging grog, singing sea shanties and having a laugh with your mates. Because, if you know nothing about Sea of Thieves, all you need to know is that&#039;s it&#039;s the best game to play with your friends');

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `teast_detail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `gambar`, `judul`, `teast_detail`) VALUES
(2, 'microsoft-logo.png', 'Microsoft', 'Menjelaskan lebih detail untuk console XBOX'),
(9, 'switch-console.jpg', 'Nintendo Switch', 'Menjelaskan lebih detail tentang Nintendo Switch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console_content`
--
ALTER TABLE `console_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_console_content` (`id_console_content`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console_content`
--
ALTER TABLE `console_content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
