-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 06:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iopracticum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdmEid` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Name` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdmEid`, `email`, `Name`) VALUES
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FacEid` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'Aegion'),
(2, 'Ameren'),
(3, 'Beatty'),
(4, 'Beckwood'),
(5, 'Bi-State Development'),
(6, 'City of Saint Louis'),
(7, 'Cogent'),
(8, 'Colarelli, Meyerm ans Association'),
(9, 'Dale Carnigie'),
(10, 'FelishmanHillard'),
(11, 'Functional Fitness STL'),
(12, 'GrayBar'),
(13, 'GrowOptimism'),
(14, 'Hollywood Heights Fire Department'),
(15, 'Hortica'),
(16, 'Hoyleton Ministries'),
(17, 'Hussman'),
(18, 'laclede'),
(19, 'Leadership Alliance'),
(20, 'Leadership Effect'),
(21, 'Madison City Probation Office'),
(22, 'National Archives'),
(23, 'Nestle Purina'),
(24, 'One Space'),
(25, 'Psychological Associates'),
(26, 'Rabo AgriFinance'),
(27, 'RGA'),
(28, 'Saint Louis ODN'),
(29, 'Sigma-Aldrich'),
(30, 'Spectrum'),
(31, 'SunEdison'),
(32, 'United Way'),
(33, 'XTRA Lease');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `filepath` varchar(100) DEFAULT NULL,
  `final` bit(1) DEFAULT NULL,
  `company` varchar(1024) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `filepath`, `final`, `company`, `year`) VALUES
(1, '../reports/Ameren_preston_2018.pdf', b'1111111111111111111111111111111', 'Ameren', 2018),
(2, '../reports/Beckwood_matt_2016.pdf', b'1111111111111111111111111111111', 'Beckwood', 2016),
(3, '../reports/Ameren_bill_2018.pdf', b'1111111111111111111111111111111', 'Ameren', 2018),
(4, '../reports/Ameren_scott_2016.pdf', b'1111111111111111111111111111111', 'Ameren', 2016),
(5, '../reports/RGA_jim_2019.pdf', b'1111111111111111111111111111111', 'RGA', 2019),
(6, '../reports/Beckwood_jim_2019.pdf', b'1111111111111111111111111111111', 'Beckwood', 2019),
(7, '../reports/Ameran_Matthew Morton_2019.pdf', NULL, 'Ameran', 2019),
(8, '../reports/Ameran_Matthew Morton_2019.pdf', NULL, 'Ameran', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `stdsubmitsreport`
--

CREATE TABLE `stdsubmitsreport` (
  `StdID` varchar(10) NOT NULL,
  `RepID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StuEid` varchar(10) NOT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supassignedstd`
--

CREATE TABLE `supassignedstd` (
  `SupID` int(11) NOT NULL,
  `StdID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suphaslocation`
--

CREATE TABLE `suphaslocation` (
  `SupID` int(11) NOT NULL,
  `LocID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supsubmitssurvey`
--

CREATE TABLE `supsubmitssurvey` (
  `SupID` int(11) NOT NULL,
  `StdID` varchar(10) NOT NULL,
  `SurvID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `ID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `answerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `surveyanswers`
--

CREATE TABLE `surveyanswers` (
  `id` int(11) NOT NULL,
  `answer1` mediumtext,
  `answer2` mediumtext,
  `answer3` mediumtext,
  `answer4` mediumtext,
  `answer5` mediumtext,
  `answer6` mediumtext,
  `answer7` mediumtext,
  `answer8` mediumtext,
  `answer9` mediumtext,
  `answer10` mediumtext,
  `rc1` char(1) DEFAULT NULL,
  `rc2` char(1) DEFAULT NULL,
  `rc3` char(1) DEFAULT NULL,
  `rc4` char(1) DEFAULT NULL,
  `rc5` char(1) DEFAULT NULL,
  `rc6` char(1) DEFAULT NULL,
  `rc7` char(1) DEFAULT NULL,
  `rc8` char(1) DEFAULT NULL,
  `rc9` char(1) DEFAULT NULL,
  `rc10` char(1) DEFAULT NULL,
  `rc11` char(1) DEFAULT NULL,
  `rc12` char(1) DEFAULT NULL,
  `rc13` char(1) DEFAULT NULL,
  `rc14` char(1) DEFAULT NULL,
  `rc15` char(1) DEFAULT NULL,
  `rc16` char(1) DEFAULT NULL,
  `rc17` char(1) DEFAULT NULL,
  `rc18` char(1) DEFAULT NULL,
  `rc19` char(1) DEFAULT NULL,
  `rc20` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestions`
--

CREATE TABLE `surveyquestions` (
  `id` int(11) NOT NULL,
  `question1` mediumtext,
  `question2` mediumtext,
  `question3` mediumtext,
  `question4` mediumtext,
  `question5` mediumtext,
  `question6` mediumtext,
  `question7` mediumtext,
  `question8` mediumtext,
  `question9` mediumtext,
  `question10` mediumtext,
  `rc1` mediumtext,
  `rc2` mediumtext,
  `rc3` mediumtext,
  `rc4` mediumtext,
  `rc5` mediumtext,
  `rc6` mediumtext,
  `rc7` mediumtext,
  `rc8` mediumtext,
  `rc9` mediumtext,
  `rc10` mediumtext,
  `rc11` mediumtext,
  `rc12` mediumtext,
  `rc13` mediumtext,
  `rc14` mediumtext,
  `rc15` mediumtext,
  `rc16` mediumtext,
  `rc17` mediumtext,
  `rc18` mediumtext,
  `rc19` mediumtext,
  `rc20` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surveyquestions`
--

INSERT INTO `surveyquestions` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `rc1`, `rc2`, `rc3`, `rc4`, `rc5`, `rc6`, `rc7`, `rc8`, `rc9`, `rc10`, `rc11`, `rc12`, `rc13`, `rc14`, `rc15`, `rc16`, `rc17`, `rc18`, `rc19`, `rc20`) VALUES
(1, 'Long Question 1', 'Long Question 2', 'Long Question 3', 'Long Question 4', 'Long Question 5', 'Long Question 6', 'Long Question 7', 'Long Question 8', 'Long Question 9', 'Long Question 10', 'Radio Choice 1', 'Radio Choice 2', 'Radio Choice 3', 'Radio Choice 4', 'Radio Choice 5', 'Radio Choice 6', 'Radio Choice 7', 'Radio Choice 8', 'Radio Choice 9', 'Radio Choice 10', 'Radio Choice 11', 'Radio Choice 12 ', 'Radio Choice 13', 'Radio Choice 14 ', 'Radio Choice 15', 'Radio Choice 16', 'Radio Choice 17', 'Radio Choice 18', 'Radio Choice 19', 'Radio Choice 20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `eid` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`eid`, `name`) VALUES
('', ''),
('jnadler', 'Joel Nadler'),
('mmorton', 'Matthew Morton');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdmEid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FacEid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdsubmitsreport`
--
ALTER TABLE `stdsubmitsreport`
  ADD PRIMARY KEY (`StdID`,`RepID`),
  ADD KEY `FK_Sub_Rep_ID` (`RepID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StuEid`);

--
-- Indexes for table `supassignedstd`
--
ALTER TABLE `supassignedstd`
  ADD PRIMARY KEY (`SupID`,`StdID`),
  ADD KEY `FK_Assign_Stu_Eid` (`StdID`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suphaslocation`
--
ALTER TABLE `suphaslocation`
  ADD PRIMARY KEY (`SupID`,`LocID`),
  ADD KEY `FK_Has_Loc_Loc_ID` (`LocID`);

--
-- Indexes for table `supsubmitssurvey`
--
ALTER TABLE `supsubmitssurvey`
  ADD PRIMARY KEY (`SupID`,`StdID`,`SurvID`),
  ADD KEY `FK_Surv_Sub_Stu_Eid` (`StdID`),
  ADD KEY `FK_Surv_Sub_Surv_ID` (`SurvID`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Surv_Ans_ID` (`answerID`),
  ADD KEY `FK_Surv_Quest_ID` (`questionID`);

--
-- Indexes for table `surveyanswers`
--
ALTER TABLE `surveyanswers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyquestions`
--
ALTER TABLE `surveyquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`eid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_Adm_User_Eid` FOREIGN KEY (`AdmEid`) REFERENCES `user` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `FK_Fac_User_Eid` FOREIGN KEY (`FacEid`) REFERENCES `user` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stdsubmitsreport`
--
ALTER TABLE `stdsubmitsreport`
  ADD CONSTRAINT `FK_Sub_Rep_ID` FOREIGN KEY (`RepID`) REFERENCES `report` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Sub_Stu_Eid` FOREIGN KEY (`StdID`) REFERENCES `student` (`StuEid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_Stu_User_Eid` FOREIGN KEY (`StuEid`) REFERENCES `user` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supassignedstd`
--
ALTER TABLE `supassignedstd`
  ADD CONSTRAINT `FK_Assign_Stu_Eid` FOREIGN KEY (`StdID`) REFERENCES `student` (`StuEid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Assign_Sup_ID` FOREIGN KEY (`SupID`) REFERENCES `supervisor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suphaslocation`
--
ALTER TABLE `suphaslocation`
  ADD CONSTRAINT `FK_Has_Loc_Loc_ID` FOREIGN KEY (`LocID`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Has_Loc_Sup_ID` FOREIGN KEY (`SupID`) REFERENCES `supervisor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supsubmitssurvey`
--
ALTER TABLE `supsubmitssurvey`
  ADD CONSTRAINT `FK_Surv_Sub_Stu_Eid` FOREIGN KEY (`StdID`) REFERENCES `student` (`StuEid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Surv_Sub_Sup_ID` FOREIGN KEY (`SupID`) REFERENCES `supervisor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Surv_Sub_Surv_ID` FOREIGN KEY (`SurvID`) REFERENCES `survey` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `FK_Surv_Ans_ID` FOREIGN KEY (`answerID`) REFERENCES `surveyanswers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Surv_Quest_ID` FOREIGN KEY (`questionID`) REFERENCES `surveyquestions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
