-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 11:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectura`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `releaseYear` year(4) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `listenedDate` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `pictureLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumId`, `title`, `artist`, `releaseYear`, `genre`, `listenedDate`, `rating`, `comment`, `userId`, `pictureLink`) VALUES
(1, 'Amala', 'Doja Cat', 2018, 'indie pop', '2019-02-02', 5, 'Loved it!', 4, 'https://images.genius.com/6468664551b69cf598c154ecc5411597.575x371x1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `publicationDate` text DEFAULT NULL,
  `topic` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `readDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleId`, `title`, `link`, `publicationDate`, `topic`, `comment`, `userId`, `readDate`) VALUES
(1, 'How wine makes you age better', 'link', '2020-02-02', 'health', 'Very informative', 4, '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `releaseDate` date NOT NULL,
  `genre` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `readDate` date DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `pictureLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `title`, `author`, `releaseDate`, `genre`, `rating`, `readDate`, `comment`, `userId`, `pictureLink`) VALUES
(1, 'Witcher: Blood of Elves', 'Andrzej Sapkowski', '0000-00-00', 'Fantasy', 5, '2020-05-05', 'Loved it!', 4, 'https://www.grimdarkmagazine.com/wp-content/uploads/2019/12/bj95-square-orig.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `releaseYear` year(4) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `watchedDate` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `pictureLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieID`, `title`, `director`, `releaseYear`, `genre`, `watchedDate`, `rating`, `comment`, `userId`, `pictureLink`) VALUES
(1, 'Salems Lot', 'Tobe Hooper', 1979, 'horror', '2022-01-01', 4, 'Enjoyed it a lot!', 4, 'https://bloody-disgusting.com/wp-content/uploads/2017/09/salems-lot.jpg'),
(2, 'The Wailing', 'Na Hong-jin', 2016, 'horror', NULL, NULL, NULL, 4, 'https://cdn.vox-cdn.com/thumbor/5JlHt_lNwRN1m1d-o7A1c86fRRg=/40x0:851x608/1200x800/filters:focal(40x0:851x608)/cdn.vox-cdn.com/uploads/chorus_image/image/49827207/Screen_20Shot_202016-06-10_20at_203.03.33_20PM.0.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`) VALUES
(1, 'denni', 'deni@yahoo.com', '*A4B6157319038724E3560894F7F932C8886EBFCF'),
(2, 'dmtdenisa', 'dumi@gmail.com', '*A4B6157319038724E3560894F7F932C8886EBFCF'),
(4, 'test', 'test@test.com', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumId`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
