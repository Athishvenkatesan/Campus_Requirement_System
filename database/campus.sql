-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 03:59 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_form`
--

CREATE TABLE `company_form` (
  `companyname` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `nameofpost` varchar(500) NOT NULL,
  `requiredlanguage` varchar(500) NOT NULL,
  `placeofwork` varchar(500) NOT NULL,
  `salaryperannum` int(9) NOT NULL,
  `historyofarrear` int(9) NOT NULL,
  `standingarrear` int(9) NOT NULL,
  `lastsemper` int(9) NOT NULL,
  `twlthmarkper` int(9) NOT NULL,
  `tenthmarkper` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_form`
--

INSERT INTO `company_form` (`companyname`, `date`, `nameofpost`, `requiredlanguage`, `placeofwork`, `salaryperannum`, `historyofarrear`, `standingarrear`, `lastsemper`, `twlthmarkper`, `tenthmarkper`) VALUES
('TCS', '2023-01-22', 'Developer', 'php', 'Mumbai', 250000, 12, 2, 70, 70, 70),
('Zoho', '2023-01-26', 'Software Developer', 'php', 'Chennai', 150000, 12, 0, 67, 98, 87),
('HCL', '2023-01-30', 'Software Developer', 'net', 'Madurai', 150000, 10, 2, 67, 70, 69);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `admission` varchar(10) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`admission`, `studentname`, `department`, `year`, `filename`) VALUES
('20COS205', 'athish', 'B.sc CS', 2020, 'provisionalmarksheet.jpeg'),
('20COS254', 'Raghul Kumar', 'B.sc CS', 2020, 'AthishResume.pdf'),
('B.sc CS', 'Raghul Kumar', '89', 20, 'A1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `studentname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `historyofarrear` int(9) NOT NULL,
  `standingarrear` int(9) NOT NULL,
  `lastsemeisterper` int(11) NOT NULL,
  `tenthmark` int(9) NOT NULL,
  `twlthmark` int(9) NOT NULL,
  `department` varchar(100) NOT NULL,
  `admission` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`studentname`, `fathername`, `gender`, `dob`, `historyofarrear`, `standingarrear`, `lastsemeisterper`, `tenthmark`, `twlthmark`, `department`, `admission`, `year`, `contactno`, `email`, `address`) VALUES
('athish', 'venkatesan', 'male', '2003-04-02', 0, 0, 89, 92, 88, 'B.sc CS', '20COS205', 2020, '9585991586', 'athish@gmail.com', 'Madurai'),
('Darwin', 'Vetharaj', 'Male', '2003-02-18', 0, 0, 78, 87, 88, 'B.sc CS', '20COS207', 2020, '9597111795', 'darwin1802@gmail.com', 'Madurai'),
('Dinesh', 'Ware', 'Male', '2003-11-30', 0, 0, 87, 88, 89, 'B.sc CS', '20COS208', 2020, '1234567890', 'dinesh@gmail.com', 'Madurai'),
('Ghobhi', 'Subramiyam', 'Male', '2003-04-02', 0, 0, 87, 88, 98, 'B.sc CS', '20COS209', 2020, '1234567890', 'ghophi11@gmail.com', 'Natham'),
('Raghul', 'Thulasidoss', 'Male', '2002-07-20', 0, 0, 70, 88, 88, 'B.sc CS', '20COS230', 2020, '7708412390', 'ralfraghul@gamil.com', 'Ramanathapuram'),
('Sasi', 'Tharan', 'Male', '2003-08-12', 4, 0, 60, 78, 88, 'B.sc CS', '20COS240', 2020, '1234567890', 'sasi@gmail.com', 'Theni'),
('Vennimuthu . K', 'Kajendran . M', 'Male', '2003-03-20', 0, 0, 80, 88, 78, 'B.sc CS', '20COS251', 2023, '6385764714', 'vennimuthu251@gmail.com', 'Munichalai,Madurai'),
('Balaji', 'Jegadeeshwaran', 'Male', '2003-05-07', 15, 10, 45, 94, 69, 'B.sc CS', '20COS253', 2020, '1234567890', 'balaji@gmail.com', 'Madurai'),
('Raghul Kumar', 'Mariappan', 'Male', '2003-08-13', 0, 0, 74, 88, 89, 'B.sc CS', '20COS254', 2020, '1234567890', 'raghul@gmail.com', 'Sellur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`admission`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`admission`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
