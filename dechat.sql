-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 07:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(999) DEFAULT NULL,
  `postid` varchar(999) DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL,
  `message` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `postid`, `time`, `message`) VALUES
(8, '3', '30', '1663341688', 'booss'),
(9, '3', '30', '1663343098', 'booss'),
(10, '3', '30', '1663343794', 'booss vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(11, '3', '30', '1663344037', 'booss vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(12, '3', '30', '1663344090', 'booss vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(13, '3', '30', '1663345914', 'booss vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(14, '4', '30', '1663429534', 'nothing oooooo bro i just day find money'),
(15, '4', '30', '1663429602', 'nothing oooooo bro i just day find money');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `email` varchar(999) DEFAULT NULL,
  `postid` varchar(999) DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `email`, `postid`, `time`) VALUES
(8, '3', '30', '1663343108'),
(9, '4', '30', '1663429618');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `email` varchar(999) DEFAULT NULL,
  `message` varchar(999) DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL,
  `seen` varchar(999) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `email`, `message`, `time`, `seen`) VALUES
(12, '3', 'you updated your profile', '05:46:pm', 'yes'),
(15, '3', 'comment on your photo', '06:01:pm', 'yes'),
(16, '3', 'comment on your photo', '06:31:pm', 'yes'),
(17, '3', 'comment on your photo', '05:45:pm', 'no'),
(18, '3', 'comment on your photo', '05:46:pm', 'no'),
(19, '4', 'likes your photo', '05:46:pm', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `email` varchar(999) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `email`, `message`, `time`) VALUES
(30, '3', 'heee', '1663341665');

-- --------------------------------------------------------

--
-- Table structure for table `postimage`
--

CREATE TABLE `postimage` (
  `id` int(11) NOT NULL,
  `filename` varchar(999) DEFAULT NULL,
  `postid` varchar(999) DEFAULT NULL,
  `filetype` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postimage`
--

INSERT INTO `postimage` (`id`, `filename`, `postid`, `filetype`) VALUES
(17, '160785208315325006801674641520imga.jpg', '30', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `replycomment`
--

CREATE TABLE `replycomment` (
  `id` int(11) NOT NULL,
  `commentid` varchar(999) DEFAULT NULL,
  `comment` varchar(999) DEFAULT NULL,
  `email` varchar(999) DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `firstname` varchar(999) DEFAULT NULL,
  `lastname` varchar(999) DEFAULT NULL,
  `email` varchar(999) DEFAULT NULL,
  `country` varchar(999) DEFAULT NULL,
  `dob` varchar(999) DEFAULT NULL,
  `gender` varchar(999) DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `file` varchar(999) NOT NULL DEFAULT 'nopic.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `country`, `dob`, `gender`, `password`, `file`) VALUES
(1, '50', 'mathew', '', 'usa', '2022-09-01', 'Female', '11', '73915487614930085142022_07_03_09_42_IMG_2607.PNG'),
(2, 'gideon', 'mathew', 'vvv', 'usa', '2022-09-02', 'Male', '11', '50902556217400554062022_07_03_09_42_IMG_2607.PNG'),
(3, 'joyy', 'mathew', 'donnei@gmqail.comeaa', 'usa', '2022-09-07', 'Female', '11', '11809951161971807631ff.jpg'),
(4, 'joyy', 'mathew', 'donneyboi112@gmail.com', 'usa', '2022-08-31', 'Male', '11', '92442767839659308ff.jpg'),
(5, 'joy', 'john', 'donnei@gmqail.come', 'NIgeria', '2022-09-02', 'Female', '11', '9409350421108595484imga.jpg'),
(6, 'liz', 'donney', 'donneyboi1@gmail', 'usa', '2022-08-14', 'Male', 'w', '19194589341670469972IMG_2062.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postimage`
--
ALTER TABLE `postimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replycomment`
--
ALTER TABLE `replycomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `postimage`
--
ALTER TABLE `postimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `replycomment`
--
ALTER TABLE `replycomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
