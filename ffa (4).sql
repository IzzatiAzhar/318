-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 12:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(10) NOT NULL,
  `adminpassword` varchar(10) NOT NULL,
  `admintelno` int(15) NOT NULL,
  `adminemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminpassword`, `admintelno`, `adminemail`) VALUES
('admin00', '1234', 342633599, 'ffa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donateid` int(10) NOT NULL,
  `partid` int(10) NOT NULL,
  `eventid` varchar(10) NOT NULL,
  `amtdonation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donateid`, `partid`, `eventid`, `amtdonation`) VALUES
(100, 101, 'E001', 500),
(2021130, 101, 'E004', 350),
(2021139, 101, 'E003', 1),
(2021141, 101, 'E003', 350),
(2021157, 101, 'E007', 1),
(2021168, 101, 'E001', 300),
(2021191, 101, 'E001', 800),
(2021198, 101, 'E007', 300),
(2021204, 101, 'E003', 10000),
(2021208, 101, 'E001', 500),
(2021273, 101, 'E005', 300),
(2021278, 101, 'E001', 350),
(2021315, 101, 'E003', 1),
(2021331, 101, 'E002', 300),
(2021354, 103, 'E001', 1000),
(2021379, 101, 'E001', 10000),
(2021408, 101, 'E006', 1),
(2021431, 101, 'E008', 10000),
(2021454, 101, 'E001', 10000),
(2021477, 101, 'E008', 800),
(2021482, 101, 'E002', 300),
(2021485, 101, 'E002', 1),
(2021533, 103, 'E002', 800),
(2021541, 102, 'E007', 350),
(2021547, 101, 'E004', 1),
(2021548, 101, 'E007', 300),
(2021561, 101, 'E005', 10000),
(2021603, 101, 'E001', 10000),
(2021630, 101, 'E004', 1),
(2021636, 103, 'E006', 2000),
(2021673, 101, 'E006', 300),
(2021718, 101, 'E005', 350),
(2021728, 101, 'E004', 1000),
(2021756, 101, 'E001', 10000),
(2021760, 101, 'E007', 1),
(2021835, 101, 'E005', 1),
(2021840, 101, 'E001', 1),
(2021847, 103, 'E001', 300),
(2021853, 103, 'E001', 350),
(2021889, 101, 'E004', 1),
(2021890, 101, 'E001', 100),
(2021922, 101, 'E007', 1),
(2021961, 101, 'E008', 1),
(2021971, 101, 'E001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` varchar(10) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `eventstate` varchar(255) NOT NULL,
  `eventlocation` varchar(255) NOT NULL,
  `eventnumofpart` int(255) NOT NULL,
  `eventdate` date NOT NULL,
  `orgid` int(10) NOT NULL,
  `eventpic` varchar(255) NOT NULL,
  `eventtotaldonation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `eventstate`, `eventlocation`, `eventnumofpart`, `eventdate`, `orgid`, `eventpic`, `eventtotaldonation`) VALUES
('E001', '#KitaBantuKita', 'Selangor', 'Sungai Buloh', 2, '2020-06-24', 2000, 'Amin Bin Ali', 44202),
('E002', 'Share You Love Selangor', 'Selangor', 'Shah Alam', 2, '2018-06-20', 2000, 'Farah Binti Ahmad', 1401),
('E003', 'Share You Love Johor', 'Johor', 'Segamat', 2, '2019-03-30', 2000, 'Mark Tuan', 10352),
('E004', 'Share You Love Melaka', 'Melaka', 'Jasin', 2, '2017-05-20', 2000, 'Amin Bin Ali', 1353),
('E005', 'Share You Love KL', 'Kuala Lumpur', 'Ampang', 2, '2020-04-24', 2000, 'Farah Binti Ahmad', 10651),
('E006', 'Pit Stop Community Cafe', 'Selangor', 'Selayang', 2, '2020-08-24', 2000, 'Amin Bin Ali', 2301),
('E007', 'The Lost Food Project', 'Selangor', 'Shah Alam', 2, '2019-12-24', 2000, 'Fatin Bin Aqil', 953),
('E008', 'Free Meals Kuala Lumpur', 'Kuala Lumpur', 'Bukit Bintang', 2, '2019-06-07', 2000, 'Jackson Wang', 10801);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `orgid` varchar(10) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `orgtelno` int(15) NOT NULL,
  `orgemail` varchar(255) NOT NULL,
  `orgaddress` varchar(255) NOT NULL,
  `orgpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`orgid`, `orgname`, `orgtelno`, `orgemail`, `orgaddress`, `orgpassword`) VALUES
('2000', 'Sayang Malaysia Team', 360344986, 'sayangmalaysiateam@gmail.com', 'No. 78, Jalan 1/27 Taman Melor, Shah Alam Selangor', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `partid` varchar(10) NOT NULL,
  `partname` varchar(255) NOT NULL,
  `partage` int(10) NOT NULL,
  `partstate` varchar(255) NOT NULL,
  `partoccupation` varchar(255) NOT NULL,
  `partpassword` varchar(10) NOT NULL,
  `parttelno` int(15) NOT NULL,
  `partemail` varchar(255) NOT NULL,
  `partaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`partid`, `partname`, `partage`, `partstate`, `partoccupation`, `partpassword`, `parttelno`, `partemail`, `partaddress`) VALUES
('101', 'Nur Izzati Bt Mohd Azhar', 20, 'Selangor', 'Student', '1234', 1110734264, 'izzati@gmail.com', 'No. 51 Jalan 1/17 KJ, Kundang Jaya, Rawang Selangor'),
('102', 'Siti Nurezzaty Bt Mohd Rafek', 21, 'Johor', 'Student', '1234', 129764786, 'ezzaty@gmail.com', 'No 12 Jalan Jaya Putra, Taman JP Perdana, 81100 Johor Bahru'),
('103', 'Nur Syahirah Amirah Bt Ariffin', 20, 'Melaka', 'Student', '1234', 198562134, 'syahirah@gmail.com', 'Lot 400 Lorong Bunga, Jasin ,Melaka'),
('104', 'Nasuha Bt Asri', 20, 'Melaka', 'Student', '1234', 164555434, 'nasuha@gmail.com', 'No. 51 JaLan Cempaka, Ayer Keroh Melaka');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(6) NOT NULL,
  `partid` varchar(10) NOT NULL,
  `eventid` varchar(10) NOT NULL,
  `datejoin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `partid`, `eventid`, `datejoin`) VALUES
(20211185, '104', 'E005', '2021-01-20'),
(20211670, '104', 'E008', '2020-12-17'),
(20212139, '103', 'E002', '2021-01-20'),
(20214912, '101', 'E003', '2021-01-20'),
(20215648, '101', 'E004', '2021-01-20'),
(20215704, '101', 'E007', '2021-01-17'),
(20215752, '101', 'E008', '2021-01-17'),
(20216068, '103', 'E001', '2021-01-15'),
(20216143, '103', 'E003', '2021-01-16'),
(20216333, '101', 'E002', '2021-01-17'),
(20216723, '102', 'E006', '2021-01-20'),
(20217270, '102', 'E004', '2020-12-12'),
(20217320, '103', 'E005', '2021-01-20'),
(20217619, '102', 'E001', '2020-12-01'),
(20218183, '104', 'E007', '2020-12-01'),
(20219468, '103', 'E006', '2021-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donateid`),
  ADD KEY `partid` (`partid`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`),
  ADD KEY `orgid` (`orgid`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`orgid`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `partid` (`partid`),
  ADD KEY `eventid` (`eventid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
