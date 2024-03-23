-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 01:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamers hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(5) NOT NULL,
  `admin_UserName` varchar(100) NOT NULL,
  `admin_Password` varchar(16) NOT NULL,
  `admin_Mail` varchar(100) NOT NULL,
  `admin_Phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_UserName`, `admin_Password`, `admin_Mail`, `admin_Phone`) VALUES
(1, 'admin1', 'TD#h3!]Q8^bcEU3', 'admin1@gmail.com', '11'),
(2, 'admin1', 'TD#h3!]Q8^bcEU3', 'admin1@gmail.com', '11'),
(3, 'admin2', 'TD#h3!]Q8^bcEU31', 'admin@gmail.com', '222'),
(4, 'admin22323', 'TD#h3!]Q8^bcEU3', 'admin13123@gmail.com', '222'),
(5, 'admin22323new', 'TD#h3!]Q8^bcEU3', 'admin13123sdfa@gmail.com', '230'),
(6, 'adminmansour', '123456789+', 'admin.mansour@csfv.com', '230');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(5) NOT NULL,
  `Customer_UserName` varchar(100) NOT NULL,
  `Customer_Password` varchar(16) NOT NULL,
  `Customer_Mail` varchar(100) NOT NULL,
  `Customer_Phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Customer_UserName`, `Customer_Password`, `Customer_Mail`, `Customer_Phone`) VALUES
(7, 'root4324234234234', 'admin123456', 'mohamedabdulrahim4work@gmail.com2343425345', '22'),
(8, 'mansour', 'admin123456', 'mansouryou@gmail.c', '33'),
(9, 'mansourبل', 'TD#h3!]Q8^bcEU3', 'mansouryou@gmail.c', '33');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Game_id` int(11) NOT NULL,
  `Game_name` varchar(100) NOT NULL,
  `Game_image` text NOT NULL,
  `Game_genre` varchar(100) NOT NULL,
  `Game_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Game_id`, `Game_name`, `Game_image`, `Game_genre`, `Game_price`) VALUES
(1, 'ELDEN RING', 'img/elden-ring-battlefield-of-the-fallen-i121753.jpg', 'ACTION ', 50),
(2, 'HOGWARTS LEGACY', 'img\\Hogwarts.jpg', 'FANTASY', 70),
(3, 'MARVEL SPIDER MAN 2', 'img\\SpiderMan2.jpg', 'ACTION', 90),
(4, 'GOD OF WAR RAGNAROK', 'img\\God-of-War-Ragnarok.jpg', 'ACTION', 75),
(5, 'LORDS OF THE FALLEN WA', 'img/lords-of-the-fallen-warrior.jpg', 'ADVANTURE', 60),
(6, 'THE WITCHER 3', 'img/Witcher_3.jpg', 'ADVANTURE', 40),
(7, 'GTA 5', 'img/gta-5.jpg', 'OPEN WORLD', 30),
(8, 'DIAPLO 4', 'img/Diablo.jpg', 'ADVANTURE', 75);

-- --------------------------------------------------------

--
-- Table structure for table `game_details`
--

CREATE TABLE `game_details` (
  `Game_id` int(11) NOT NULL,
  `Game_price` int(11) NOT NULL,
  `Game_screen1` text NOT NULL,
  `Game_screen2` text NOT NULL,
  `Game_screen3` text NOT NULL,
  `Game_vid` text NOT NULL,
  `Game_name` varchar(100) NOT NULL,
  `Game_screen4` text NOT NULL,
  `Game_background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_details`
--

INSERT INTO `game_details` (`Game_id`, `Game_price`, `Game_screen1`, `Game_screen2`, `Game_screen3`, `Game_vid`, `Game_name`, `Game_screen4`, `Game_background`) VALUES
(0, 50, 'img/Elden-Ring.jpg', 'img/Elden-Ring-2022.02.16-21.00.15.21.mp4_001033644-1024x576.jpg', 'img/Elden-Ring-Screenshot-2.jpg', 'vid/videoplayback.mp4', 'ELDEN RING', 'img/eldenring_12_4k-15314260c26db292d294.19097828_wide-161dfc66bc811e88068d50172fabcdd854b56778-s1400-c100.jpg', 'img/Elden-Ring-Stats-Article-Thumbnail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE `tb` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb`
--

INSERT INTO `tb` (`id`, `user_name`, `email`, `age`, `password`) VALUES
(2, 'aaaaaa', 'sdaadsdas@gmail.com', 33, 112233),
(3, 'klhjgtdg', 'fdfgsefhg@gmail.com', 21, 13579);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`Game_id`);

--
-- Indexes for table `tb`
--
ALTER TABLE `tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `Game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb`
--
ALTER TABLE `tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
