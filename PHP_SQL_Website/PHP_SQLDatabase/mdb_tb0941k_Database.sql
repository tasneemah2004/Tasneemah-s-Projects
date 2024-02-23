-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: gm-flas-mysql.gre.ac.uk:3306
-- Generation Time: Dec 12, 2023 at 05:30 PM
-- Server version: 10.11.6-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdb_tb0941k`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `email`, `password`) VALUES
(1, 'Steve', 'steve@email.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Martyn', 'martyn@email.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(1, 'Knock knock'),
(2, 'Chicken joke'),
(3, 'Doctor joke'),
(4, 'Lightbulb joke');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DeptNo` varchar(255) NOT NULL,
  `DeptName` varchar(255) DEFAULT NULL,
  `Manager` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DeptNo`, `DeptName`, `Manager`) VALUES
('D1', 'Accounts', 'E1'),
('D2', 'Stores', 'E2'),
('D3', 'Sales', 'E5');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpNo` varchar(255) NOT NULL,
  `NINo` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `DeptNo` varchar(255) DEFAULT NULL,
  `Office` varchar(255) DEFAULT NULL,
  `Salary` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpNo`, `NINo`, `Surname`, `Firstname`, `DeptNo`, `Office`, `Salary`) VALUES
('E1', 'NB123456P', 'Smith', 'Fred', 'D1', 'R101', 12345),
('E2', 'NM23456M', 'Smith', 'Jane', 'D1', 'R102', 16456),
('E3', 'NM543234P', 'Brown', 'Jim', 'D2', 'R101', 13456),
('E5', 'NB127654P', 'Green', 'Fred', 'D3', 'R103', 45345);

-- --------------------------------------------------------

--
-- Table structure for table `joke`
--

CREATE TABLE `joke` (
  `id` int(11) NOT NULL,
  `joketext` text DEFAULT NULL,
  `jokedate` date DEFAULT NULL,
  `authorid` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `joke`
--

INSERT INTO `joke` (`id`, `joketext`, `jokedate`, `authorid`, `categoryid`) VALUES
(1, 'Why did the chicken cross the road? To get to the other side!', '2023-10-29', 1, 1),
(2, 'Knock-knock! Who\'s there? Boos! \"Boo\" who? Don\'t cry; it\'s only a joke!', '2023-10-29', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `moduleName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `moduleName`) VALUES
(2, 'Web programming'),
(3, 'Games programming'),
(4, 'Graphic design');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `questiontext` text DEFAULT NULL,
  `questiondate` date DEFAULT NULL,
  `authorid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `questiontext`, `questiondate`, `authorid`, `moduleid`) VALUES
(1, '        When is the coursework due in?        ', '2023-12-05', 1, 4),
(2, '    Where is the coursework specification??    ', '2023-09-20', 2, 2),
(5, 'What is Git?', '2023-12-09', 1, 2),
(6, 'What is version control?', '2023-12-09', 2, 3),
(7, 'How do I press a button?', '2023-12-09', 1, 4),
(10, 'What is a website?', '2023-12-09', 2, 2),
(12, 'What is CSS', '2023-12-11', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

CREATE TABLE `telephone` (
  `EmpNo` varchar(255) DEFAULT NULL,
  `Extension` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`EmpNo`, `Extension`) VALUES
('E1', 8111),
('E2', 1111),
('E3', 1231),
('E5', 1231);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DeptNo`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpNo`),
  ADD KEY `DEPARTMENTEMPLOYEE` (`DeptNo`);

--
-- Indexes for table `joke`
--
ALTER TABLE `joke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorid` (`authorid`),
  ADD KEY `authorid_2` (`authorid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorid` (`authorid`),
  ADD KEY `moduleid` (`moduleid`);

--
-- Indexes for table `telephone`
--
ALTER TABLE `telephone`
  ADD KEY `EMPLOYEETELEPHONE` (`EmpNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `joke`
--
ALTER TABLE `joke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joke`
--
ALTER TABLE `joke`
  ADD CONSTRAINT `joke_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `joke_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`moduleid`) REFERENCES `module` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
