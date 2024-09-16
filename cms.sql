-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 01:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '08-04-2023 09:10:49 AM');

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int(11) NOT NULL,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `mob`, `remark`, `remarkDate`) VALUES
(1, 1, 'in process', '8788267746', 'ok i will schedule your appointment', '2023-04-08 05:08:25'),
(2, 1, 'closed', '8788267746', 'lecture scheduled', '2023-04-08 05:11:42'),
(3, 2, 'closed', '8788267746', 'okz', '2023-04-10 02:55:44'),
(4, 4, 'in process', '8788267746', 'waittt for some times', '2023-04-22 10:20:28'),
(5, 4, 'closed', '8788267746', 'yur complints succefully sloved', '2023-04-22 10:26:05'),
(6, 5, 'in process', '8788267746', 'okkkzzz', '2023-04-22 10:36:15'),
(7, 3, 'closed', '8788267746', 'okkkzz boss', '2023-04-22 10:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaintNumber` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `user_cat` varchar(20) NOT NULL,
  `hod` varchar(255) DEFAULT NULL,
  `noc` varchar(255) DEFAULT NULL,
  `complaintDetails` mediumtext,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaintNumber`, `userId`, `category`, `user_cat`, `hod`, `noc`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `lastUpdationDate`) VALUES
(1, 1, 'HOD', 'student', 'Computer-Dipak', 'serious', 'hello Dipak Sir plz help me for exam', 'AC.jpg', '2023-04-08 05:04:31', 'closed', '2023-04-08 05:11:42'),
(2, 2, 'Admin', '', '', 'serious', 'help me for exam', '', '2023-04-10 02:54:38', 'closed', '2023-04-10 02:55:44'),
(3, 3, 'HOD', '', '', 'serious', 'heyy ', '', '2023-04-22 09:44:15', 'closed', '2023-04-22 10:36:55'),
(4, 4, 'Admin', 'student', '', 'serious', 'hello plz help me for exammmination', 'ACCC.jfif', '2023-04-22 10:17:18', 'closed', '2023-04-22 10:26:05'),
(5, 4, 'HOD', 'student', 'Computer-Dipak', 'casual', 'hello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkjhello abhsadbchjsdvjsd vsdj sdh sdh csh bch bsdhscb hc bch ch h h hsbsdhbsdsdkj', 'gg.jpg', '2023-04-22 10:32:01', 'in process', '2023-04-22 10:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `hodName` varchar(255) NOT NULL,
  `hodDept` varchar(200) NOT NULL,
  `id_num` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `hod_pass` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `hodName`, `hodDept`, `id_num`, `gender`, `hod_pass`, `postingDate`, `updationDate`) VALUES
(1, 'Dipak', 'Computer', '1001', 'Male', 'b8c37e33defde51cf91e1e03e51657da', '2023-04-08 04:28:08', '0000-00-00 00:00:00'),
(2, 'Vishal', 'Information Technology', '1002', 'Male', 'fba9d88164f3e2d9109ee770223212a0', '2023-04-08 04:34:12', '0000-00-00 00:00:00'),
(3, 'Sandip', 'Electronic and Telecommunication', '1003', 'Male', 'aa68c75c4a77c87f97fb686b2f068676', '2023-04-08 04:35:33', '0000-00-00 00:00:00'),
(4, 'ABHI', '', '1005', 'Male', '52921683791e26e4fb572e942f4817b6', '2023-04-22 10:05:35', '2023-04-22 10:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `prn_no` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  `rollNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `gender`, `dob`, `category`, `prn_no`, `department`, `userImage`, `regDate`, `updationDate`, `status`, `rollNo`) VALUES
(1, 'khushi', 'k@gmail.com', 'fa7f08233358e9b466effa1328168527', 8788267746, 'thane', 'Female', '2018-11-13', 'student', '131118', 'Computer', 'd03378838fa9443c8b58d151f4bc2376.jpg', '2023-04-08 04:58:49', '2023-04-08 05:02:14', 1, 1),
(2, 'purvi', 'p@gmail.com', 'f27f6f1c7c5cbf4e3e192e0a47b85300', 8788267746, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-10 02:54:02', '0000-00-00 00:00:00', 1, 0),
(3, 'vishal', 'v@gmail.com', '4786f3282f04de5b5c7317c490c6d922', 8788267746, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-22 09:42:47', '0000-00-00 00:00:00', 1, 0),
(4, 'anurag', 'a@gmial.com', '47bce5c74f589f4867dbd57e9ca9f808', 8788267746, 'nashik', 'Male', '2023-04-05', 'student', '1234567', 'Computer', 'd03378838fa9443c8b58d151f4bc2376.jpg', '2023-04-22 10:09:41', '2023-04-22 10:14:22', 1, 101);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 0, 'k@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-08 05:00:03', '', 0),
(2, 1, 'k@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-08 05:00:10', '08-04-2023 10:34:59 AM', 1),
(3, 1, 'k@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-08 05:09:03', '08-04-2023 10:40:42 AM', 1),
(4, 1, 'k@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-08 05:12:05', '08-04-2023 10:42:22 AM', 1),
(5, 1, 'k@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-08 05:13:45', '', 1),
(6, 0, 'k@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-10 02:52:48', '', 0),
(7, 2, 'p@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-10 02:54:16', '10-04-2023 08:25:03 AM', 1),
(8, 3, 'v@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-22 09:42:59', '22-04-2023 03:14:21 PM', 1),
(9, 0, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-22 10:11:01', '', 0),
(10, 0, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-22 10:11:13', '', 0),
(11, 4, 'a@gmial.com', 0x3a3a3100000000000000000000000000, '2023-04-22 10:11:58', '22-04-2023 03:47:40 PM', 1),
(12, 4, 'a@gmial.com', 0x3a3a3100000000000000000000000000, '2023-04-22 10:21:34', '22-04-2023 03:54:34 PM', 1),
(13, 4, 'a@gmial.com', 0x3a3a3100000000000000000000000000, '2023-04-22 10:30:15', '22-04-2023 04:02:27 PM', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
