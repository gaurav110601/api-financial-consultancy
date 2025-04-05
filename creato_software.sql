-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 05:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creato_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(100) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `title`, `description`) VALUES
(1, '100', 'Projects'),
(2, '300', 'Reviews'),
(3, '755', 'Clients'),
(5, '120', 'Awards');

-- --------------------------------------------------------

--
-- Table structure for table `about_hide`
--

CREATE TABLE `about_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(10) NOT NULL,
  `checkbox` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_hide`
--

INSERT INTO `about_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_Number` bigint(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Email`, `Mobile_Number`, `City`, `Password`) VALUES
(1, 'Gaurav Sharma', 'gaurav110601@gmail.com', 7014274820, 'Balotra', 'gaurav'),
(2, 'Aman Tiwari', 'aman@gmail.com', 1234567890, 'bihar', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Message`, `image`) VALUES
(32, 'GAURAV SHARMA', 'gaurav110601@gmail.com', 'qwertyuiop[', ''),
(33, 'GAURAV SHARMA', 'gaurav110601@gmail.com', 'aSDFGHJK', ''),
(34, 'student', 'gaurav.20jics018@jietjodhpur.a', 'zxcvbnm,', ''),
(35, 'GAURAV SHARMA', 'gaurav.20jics018@jietjodhpur.a', 'wazrfchn ', '');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `Id` int(100) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`Id`, `title`, `description`) VALUES
(1, 'ISO 9001 : 2008', 'We are ISO 9001 : 2008 Certified Company'),
(2, 'ARAI TESTED', 'Our all Products & Services are ARAI Tested'),
(3, 'Security Protection', 'We provide all type of security'),
(4, 'NICE COMMUNICATION', 'Nice Communication'),
(5, 'DIGITAL STRATEGY', 'Digital Strategy'),
(6, 'INTERNAL CONSULTANCY', 'Internal Consultancy');

-- --------------------------------------------------------

--
-- Table structure for table `features_hide`
--

CREATE TABLE `features_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(10) NOT NULL,
  `checkbox` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features_hide`
--

INSERT INTO `features_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `Id` int(11) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `tweet` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`Id`, `fb`, `tweet`, `insta`) VALUES
(1, 'fb.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `Id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`Id`, `image`, `contact_no`) VALUES
(1, '1115944432.png', 823770184);

-- --------------------------------------------------------

--
-- Table structure for table `header_hide`
--

CREATE TABLE `header_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(10) NOT NULL,
  `checkbox` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_hide`
--

INSERT INTO `header_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `headline`
--

CREATE TABLE `headline` (
  `Id` int(11) NOT NULL,
  `headline` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headline`
--

INSERT INTO `headline` (`Id`, `headline`) VALUES
(6, 'CA Website - API Financial Consultancy - This is HEADLINE Section.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `image`, `title`, `description`) VALUES
(1, '1274033725.jpg', 'Top cryptocurrency prices today: Bitcoin, Dogecoin', 'New Delhi: Major crypto tokens were trading lower on Monday after muted action during the weekend. H'),
(2, '1936174924.jpg', 'Majority of India’s 900 million workforce stop loo', '“The large share of discouraged workers suggests that India is unlikely to reap the dividend that it'),
(3, '1096034338.jpg', 'Russian consumer companies turn to India as wester', 'Russian consumer companies turn to India as western brands');

-- --------------------------------------------------------

--
-- Table structure for table `news_hide`
--

CREATE TABLE `news_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(10) NOT NULL,
  `checkbox` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_hide`
--

INSERT INTO `news_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_Number` bigint(10) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Email`, `Mobile_Number`, `City`, `Password`, `Confirm_Password`) VALUES
(1, 'GAURAV SHARMA', 'gaurav110601@gmail.com', 9999999, 'Balotra', '1234567890', '1234567890'),
(6, 'vijay singh chouhan', 'vijay@gmail.com', 12345667890, 'bhilwara', '311001221', '311001221'),
(7, 'virendra singh chouhan', 'viru@gmail.com', 123456789, 'jodhpur', '12341234', '12341234'),
(8, 'garvit sharma', 'garvit@gmail.com', 4444444444, 'jodhpur', '11111111', '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Id` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Id`, `title`, `description`, `image`) VALUES
(1, 'End to End Accounting', 'For Start ups and SMEs who can not afford full time inhouse accountant.', '439003123.png'),
(2, 'Virtual CFO Service', 'SMEs who need review services for their inhouse junior accountant.', '217077348.png'),
(3, 'Statutory Registrations', 'PAN, TAN, MSME, IEC, Shop Act, Incorporation of the company', '433860530.png'),
(4, 'Tax Return Filing', 'GST return filing, TDS return filing, Income tax return for individuals, PT return filing', '811745473.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_hide`
--

CREATE TABLE `services_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(10) NOT NULL,
  `checkbox` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_hide`
--

INSERT INTO `services_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Id` int(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Id`, `image`) VALUES
(18, '1576768016.jpg'),
(19, '1666864824.jpg'),
(21, '1398267525.png'),
(22, '101054034.jpg'),
(25, '340453035.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--
-- Error reading structure for table creato_software.student: #1932 - Table &#039;creato_software.student&#039; doesn&#039;t exist in engine
-- Error reading data for table creato_software.student: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `creato_software`.`student`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Id` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Id`, `title`, `description`, `image`) VALUES
(1, 'Member 1', 'Post 1', '1239773104.jpg'),
(2, 'Member 2', 'Post2', '1338644038.jpg'),
(3, 'Member 3', 'Post 3', '44620665.jpg'),
(6, 'gaurav sharma', 'web developer', '1614737449.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_hide`
--

CREATE TABLE `team_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(11) NOT NULL,
  `checkbox` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_hide`
--

INSERT INTO `team_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `Id` int(10) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`Id`, `image`, `title`, `description`) VALUES
(45, '2084901434.jpg', 'QUICK RESPONSE', 'Our most service is quick responsive'),
(46, 'who_we_are_2.jpg', '100% SATISFACTION', 'We provide 100% satisfaction with smart or creative work'),
(54, '1219337719.jpg', 'WE ARE BEST WITH CREATIVE SERVICE', 'Service is first');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_hide`
--

CREATE TABLE `why_choose_us_hide` (
  `Id` int(11) NOT NULL,
  `display` varchar(25) NOT NULL,
  `checkbox` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_choose_us_hide`
--

INSERT INTO `why_choose_us_hide` (`Id`, `display`, `checkbox`) VALUES
(1, 'block', 'checked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `about_hide`
--
ALTER TABLE `about_hide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `features_hide`
--
ALTER TABLE `features_hide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `header_hide`
--
ALTER TABLE `header_hide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `headline`
--
ALTER TABLE `headline`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news_hide`
--
ALTER TABLE `news_hide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `services_hide`
--
ALTER TABLE `services_hide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `team_hide`
--
ALTER TABLE `team_hide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `why_choose_us_hide`
--
ALTER TABLE `why_choose_us_hide`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `about_hide`
--
ALTER TABLE `about_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `features_hide`
--
ALTER TABLE `features_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_hide`
--
ALTER TABLE `header_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headline`
--
ALTER TABLE `headline`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_hide`
--
ALTER TABLE `news_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services_hide`
--
ALTER TABLE `services_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_hide`
--
ALTER TABLE `team_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `why_choose_us_hide`
--
ALTER TABLE `why_choose_us_hide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
