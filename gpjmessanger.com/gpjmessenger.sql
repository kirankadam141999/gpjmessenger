-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 12:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpjmessenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorised person`
--

CREATE TABLE `authorised person` (
  `id` int(255) NOT NULL,
  `firstname` text NOT NULL,
  `midelname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `emailid` varchar(90) NOT NULL,
  `username` varchar(50) NOT NULL,
  `addrass` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `passwordhint` varchar(80) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorised person`
--

INSERT INTO `authorised person` (`id`, `firstname`, `midelname`, `lastname`, `gender`, `contactnumber`, `emailid`, `username`, `addrass`, `password`, `passwordhint`, `post`) VALUES
(1, 'kiran', 'sunil', 'kadam', 'mail', 2147483647, 'hoddemo@gmail.com', 'kadamkiran', 'plot no-10 gut no-15 Jalgoan maharashtra', '72e7a6029f6c1b2ad0a767f3062fd464', 'kiiran', 'HOD'),
(2, 'kiran', 'df', 'kadam', 'mail', 1111111111, 'kadam.k.s.1999@gmail.com', 'lllll', 'lll', '3109b097457846116a3a5b9b7a903abb', 'kiran', 'staf'),
(3, 'kiran', 'df', 'kadam', 'mail', 1111111111, 'kadam.k.s.1999@gmail.com', 'lllll', 'lll', '3109b097457846116a3a5b9b7a903abb', 'kiran', 'staf');

-- --------------------------------------------------------

--
-- Table structure for table `chatings`
--

CREATE TABLE `chatings` (
  `mid` int(200) NOT NULL,
  `senderid` varchar(90) NOT NULL,
  `resiverid` varchar(90) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL,
  `show` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatings`
--

INSERT INTO `chatings` (`mid`, `senderid`, `resiverid`, `message`, `time`, `show`) VALUES
(177, 'kadamsneha', 'kadamkiran', 'hi', '2020-09-12 12:29:52', 0),
(179, 'kadamkiran', '', 'hii\r\n', '2021-07-27 16:17:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `gmid` int(200) NOT NULL,
  `gsenderid` varchar(90) NOT NULL,
  `gresiverid` varchar(90) NOT NULL,
  `gmessage` varchar(100) NOT NULL,
  `gtime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`gmid`, `gsenderid`, `gresiverid`, `gmessage`, `gtime`) VALUES
(1, 'kadamkiran', 'Group', 'hii\r\n', '2021-07-27 16:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `latast_posts`
--

CREATE TABLE `latast_posts` (
  `Uname` varchar(100) NOT NULL,
  `titel` varchar(500) NOT NULL,
  `timedate` datetime(6) NOT NULL,
  `postpdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latast_posts`
--

INSERT INTO `latast_posts` (`Uname`, `titel`, `timedate`, `postpdf`) VALUES
('kadamkiran', 'dkjgjkhdklhgljdhgjkldfhjlghdjlfhgjldshfgkjhdsflghdljkghlkjdshglhdsfjghdsfjkhgjkdshfgjkhdsfkjghdsjfkhgkjdsfhgjksdfhkgjhdsfklghkdsflhgkjldsfhgjkhdsfkjgdjfshgkjldsfhgjkldsfhjgkhdsfjkdfkg', '2020-09-15 12:58:37.000000', '../letters/kadamkiran___dkjgjkhdklhgljdhgjkldfhjlghdjlfhgjldshfgkjhdsflghdljkghlkjdshglhdsfjghdsfjkhgjkdshfgjkhdsfkjghdsjfkhgkjdsfhgjksdfhkgjhdsfklghkdsflhgkjldsfhgjkhdsfkjgdjfshgkjldsfhgjkldsfhjgkhdsfjkdfkg___Finalsemesteryeartheoryexam_100920201733.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `timedate` datetime(6) NOT NULL,
  `postpdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Uname`, `title`, `timedate`, `postpdf`) VALUES
(5, 'ItsMeJanhavi', 'this is last sample', '2020-03-16 10:52:37.000000', '../letters/ItsMeJanhaviinstructions_for_use.pdf.pdf'),
(8, 'kadamkiran', 'dhgj', '2020-09-13 11:04:23.000000', '../letters/kadamkiran___dhgj___Finalsemesteryeartheoryexam_100920201733.pdf'),
(10, 'kadamkiran', 'dfgsdfgdsfgsdfg', '2020-09-13 23:34:27.000000', '../letters/kadamkiran___dfgsdfgdsfgsdfg___Finalsemesteryeartheoryexam_100920201733.pdf'),
(11, 'kadamkiran', 'gsdfgsdfgfdsgfs', '2020-09-13 23:34:37.000000', '../letters/kadamkiran___gsdfgsdfgfdsgfs___Finalsemesteryeartheoryexam_100920201733.pdf'),
(12, 'kadamkiran', '1', '2020-09-13 23:35:02.000000', '../letters/kadamkiran___1___Finalsemesteryeartheoryexam_100920201733.pdf'),
(13, 'kadamkiran', '2', '2020-09-13 23:35:15.000000', '../letters/kadamkiran___2___Finalsemesteryeartheoryexam_100920201733.pdf'),
(14, 'kadamkiran', '3', '2020-09-13 23:35:25.000000', '../letters/kadamkiran___3___Finalsemesteryeartheoryexam_100920201733.pdf'),
(15, 'kadamkiran', '5', '2020-09-13 23:35:36.000000', '../letters/kadamkiran___5___Finalsemesteryeartheoryexam_100920201733.pdf'),
(16, 'kadamkiran', 'hi change', '2020-09-14 11:14:51.000000', '../letters/kadamkiran___hi change___Finalsemesteryeartheoryexam_100920201733.pdf'),
(17, 'kadamkiran', 'hinew100', '2020-09-14 11:52:44.000000', '../letters/kadamkiran___hinew100___Finalsemesteryeartheoryexam_100920201733.pdf'),
(19, 'kadamkiran', 'hinew200', '2020-09-14 11:56:31.000000', '../letters/kadamkiran___hinew200___Finalsemesteryeartheoryexam_100920201733.pdf'),
(20, 'kadamkiran', 'hinew300', '2020-09-14 11:56:59.000000', '../letters/kadamkiran___hinew300___Finalsemesteryeartheoryexam_100920201733.pdf'),
(21, 'kadamkiran', 'nnew2000', '2020-09-14 12:00:14.000000', '../letters/kadamkiran___nnew2000___Finalsemesteryeartheoryexam_100920201733.pdf'),
(22, 'kadamkiran', 'kiran kadam', '2020-09-15 11:43:37.000000', '../letters/kadamkiran___kiran kadam___kiran kadam document.pdf'),
(23, 'kadamkiran', 'sunilkadam', '2020-09-15 11:44:24.000000', '../letters/kadamkiran___sunilkadam___kiran kadam document.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rowlogin`
--

CREATE TABLE `rowlogin` (
  `firstname` varchar(10) NOT NULL,
  `midelname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `emailid` varchar(90) NOT NULL,
  `username` varchar(50) NOT NULL,
  `addrass` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `passwordhint` varchar(90) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shortnotice`
--

CREATE TABLE `shortnotice` (
  `id` int(11) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `timedate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shortnotice`
--

INSERT INTO `shortnotice` (`id`, `notice`, `uname`, `timedate`) VALUES
(1, 'hii', 'kadamkiran', '0000-00-00 00:00:00.000000'),
(22, 'hi news', 'kadamkiran', '2020-09-12 13:13:15.000000'),
(23, 'my name is kiran kadam', 'kadamkiran', '2021-07-11 23:34:31.000000'),
(24, 'djfklzljglkjdkgdkgkdfgklkldgskdhgjlhdsgkljhsdfgjlhsjdfghljksdfhglkjshdgjklhsdfgjkhdsfjghsjdkfhgjlkdhfgjhdsfgjklhsdlghsdlfhgsldjfghldsfkghkldfjhgldsfhgksdfhgkjlhdsfgjhdsflgkhdfskl', 'kadamkiran', '2021-07-27 16:19:39.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorised person`
--
ALTER TABLE `authorised person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatings`
--
ALTER TABLE `chatings`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`gmid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortnotice`
--
ALTER TABLE `shortnotice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorised person`
--
ALTER TABLE `authorised person`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chatings`
--
ALTER TABLE `chatings`
  MODIFY `mid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `gmid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shortnotice`
--
ALTER TABLE `shortnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
