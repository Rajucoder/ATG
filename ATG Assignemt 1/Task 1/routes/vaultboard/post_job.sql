-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 03:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ans_id` int(255) NOT NULL,
  `answername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ans_id`, `answername`) VALUES
(1, 'upload/+myaudio.webm'),
(2, 'upload/1+myaudio.webm'),
(3, 'upload/2+myaudio.webm'),
(4, 'upload/3+myaudio.webm');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `job_id` int(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `comapnyid` int(255) DEFAULT NULL,
  `name` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `minexp` varchar(500) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `salary` varchar(500) NOT NULL,
  `industry` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL,
  `place` varchar(15) DEFAULT NULL,
  `question` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`job_id`, `date`, `comapnyid`, `name`, `category`, `minexp`, `desc`, `salary`, `industry`, `role`, `place`, `question`) VALUES
(1, '2019-04-14 18:59:23', NULL, 'Rajeshwari', 'Accounting Jobs', '1-2', 'djhSD:irhoi;fiod', '20000', 'Accounting , Finance', 'Designer', 'Gurgaon', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `screeningquestion`
--

CREATE TABLE `screeningquestion` (
  `Jobid` int(255) DEFAULT NULL,
  `Comapnyid` int(255) DEFAULT NULL,
  `Question_id` int(255) NOT NULL,
  `question_type` varchar(20) NOT NULL,
  `question` varchar(20000) NOT NULL,
  `timeduration` int(11) DEFAULT NULL,
  `answer` varchar(20000) DEFAULT NULL,
  `media_answer` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screeningquestion`
--

INSERT INTO `screeningquestion` (`Jobid`, `Comapnyid`, `Question_id`, `question_type`, `question`, `timeduration`, `answer`, `media_answer`) VALUES
(1, NULL, 1, 'Video', 'This is a video question', 30, NULL, NULL),
(1, NULL, 2, 'Audio', 'This my 1st audio question', 100, NULL, NULL),
(1, NULL, 3, 'Text', 'This a  text question', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `screeningquestion`
--
ALTER TABLE `screeningquestion`
  ADD PRIMARY KEY (`Question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ans_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `screeningquestion`
--
ALTER TABLE `screeningquestion`
  MODIFY `Question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
