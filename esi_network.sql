-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2014 at 09:56 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esi_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation_reference`
--

CREATE TABLE IF NOT EXISTS `activation_reference` (
  `ID` int(11) NOT NULL,
  `DIGIT` double unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activation_reference`
--

INSERT INTO `activation_reference` (`ID`, `DIGIT`) VALUES
(1, 131);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `IDACTIVITIES` double NOT NULL AUTO_INCREMENT,
  `CONTENT` text NOT NULL,
  `DATE_CREATED` datetime NOT NULL,
  `CREATED_BY` double NOT NULL,
  PRIMARY KEY (`IDACTIVITIES`),
  KEY `FK_activities_1` (`CREATED_BY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `IDANNOUNCEMENTS` double NOT NULL AUTO_INCREMENT,
  `ANNOUNCEMENT_TITLE` text NOT NULL,
  `CONTENT` text NOT NULL,
  `DATE_CREATED` datetime NOT NULL,
  `CREATED_BY` double NOT NULL,
  PRIMARY KEY (`IDANNOUNCEMENTS`),
  KEY `FK_announcements_1` (`CREATED_BY`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`IDANNOUNCEMENTS`, `ANNOUNCEMENT_TITLE`, `CONTENT`, `DATE_CREATED`, `CREATED_BY`) VALUES
(46, 'On the Insert tab', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\n', '2014-07-27 00:00:00', 1),
(47, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n							 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n							 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n							 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n							 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n							 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', '2014-07-24 00:00:00', 2),
(48, 'On the Insert tab', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2014-07-29 00:00:00', 1),
(49, 'On the Insert tab', 'On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', '2014-07-28 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bunoses`
--

CREATE TABLE IF NOT EXISTS `bunoses` (
  `IDBUNOSES` double NOT NULL AUTO_INCREMENT,
  `BUNOS_NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`IDBUNOSES`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `income_chart`
--

CREATE TABLE IF NOT EXISTS `income_chart` (
  `IDINCOME_CHART` double NOT NULL AUTO_INCREMENT,
  `MEMBERS_ID` double NOT NULL,
  `BUNOS_ID` double NOT NULL,
  `INCOME_AMOUNT` double NOT NULL,
  PRIMARY KEY (`IDINCOME_CHART`),
  KEY `FK_income_chart_1` (`MEMBERS_ID`),
  KEY `FK_income_chart_2` (`BUNOS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `IDMEMBERS` double NOT NULL AUTO_INCREMENT,
  `ACTIVATION_CODE` varchar(45) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `MIDDLE_NAME` varchar(45) DEFAULT NULL,
  `LAST_NAME` varchar(45) NOT NULL,
  `BIRTHDAY` datetime NOT NULL,
  `CIVIL_STATUS` varchar(20) NOT NULL,
  `AGE` int(10) unsigned NOT NULL,
  `GENDER` varchar(6) NOT NULL,
  `TIN` varchar(20) DEFAULT NULL,
  `MEMBERSHIP_DATE` datetime NOT NULL,
  `CONTACT_NUMBER` varchar(40) NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `IS_ACTIVE` tinyint(3) unsigned NOT NULL,
  `IS_APPROVED` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`IDMEMBERS`,`ACTIVATION_CODE`),
  UNIQUE KEY `PRIMARY_2` (`ACTIVATION_CODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='contain records of all members' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`IDMEMBERS`, `ACTIVATION_CODE`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `BIRTHDAY`, `CIVIL_STATUS`, `AGE`, `GENDER`, `TIN`, `MEMBERSHIP_DATE`, `CONTACT_NUMBER`, `IMG`, `IS_ACTIVE`, `IS_APPROVED`) VALUES
(1, 'ABCDEFGHIJ12', 'ADMIN', 'ADMIN', 'ADMIN', '1991-02-05 00:00:00', 'SINGLE', 23, 'MALE', '2222-3330-33', '2014-07-22 00:00:00', '09489097790', '', 1, 1),
(2, 'ZXAGEASFT23', 'developer', 'dev', 'developer', '2014-07-25 00:00:00', 'single', 20, 'Female', '2222-3453-333', '2014-07-25 00:00:00', '09305146270', 'image.img', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members_img`
--

CREATE TABLE IF NOT EXISTS `members_img` (
  `IDMEMBERS` double NOT NULL,
  `IMG` varchar(45) NOT NULL,
  KEY `FK_members_img_1` (`IDMEMBERS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `IDTEAMS` double NOT NULL AUTO_INCREMENT,
  `TEAM_NAME` varchar(45) NOT NULL,
  `TEAM_IMG` varchar(45) NOT NULL,
  PRIMARY KEY (`IDTEAMS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team_leaders`
--

CREATE TABLE IF NOT EXISTS `team_leaders` (
  `IDMEMBERS` double NOT NULL,
  `IDTEAMS` double NOT NULL,
  KEY `FK_team_leaders_1` (`IDMEMBERS`),
  KEY `FK_team_leaders_2` (`IDTEAMS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE IF NOT EXISTS `team_members` (
  `TEAM_LEADER_ID` double NOT NULL,
  `MEMBERS_ID` double NOT NULL,
  KEY `FK_team_members_1` (`TEAM_LEADER_ID`),
  KEY `FK_team_members_2` (`MEMBERS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `IDUSERS` double NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(45) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USER_TYPE` varchar(45) NOT NULL,
  `IDMEMBERS` double NOT NULL,
  PRIMARY KEY (`IDUSERS`,`USER_NAME`),
  UNIQUE KEY `PRIMARY_2` (`USER_NAME`),
  KEY `FK_users_1` (`IDMEMBERS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='list of system users' AUTO_INCREMENT=104 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IDUSERS`, `USER_NAME`, `PASSWORD`, `USER_TYPE`, `IDMEMBERS`) VALUES
(102, 'dev', 'dev', 'member', 2),
(103, 'admin', 'admin', 'admin', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `FK_activities_1` FOREIGN KEY (`CREATED_BY`) REFERENCES `members` (`IDMEMBERS`) ON UPDATE CASCADE;

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `FK_announcements_1` FOREIGN KEY (`CREATED_BY`) REFERENCES `members` (`IDMEMBERS`) ON UPDATE CASCADE;

--
-- Constraints for table `income_chart`
--
ALTER TABLE `income_chart`
  ADD CONSTRAINT `FK_income_chart_1` FOREIGN KEY (`MEMBERS_ID`) REFERENCES `members` (`IDMEMBERS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_income_chart_2` FOREIGN KEY (`BUNOS_ID`) REFERENCES `bunoses` (`IDBUNOSES`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members_img`
--
ALTER TABLE `members_img`
  ADD CONSTRAINT `FK_members_img_1` FOREIGN KEY (`IDMEMBERS`) REFERENCES `members` (`IDMEMBERS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_leaders`
--
ALTER TABLE `team_leaders`
  ADD CONSTRAINT `FK_team_leaders_1` FOREIGN KEY (`IDMEMBERS`) REFERENCES `members` (`IDMEMBERS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_team_leaders_2` FOREIGN KEY (`IDTEAMS`) REFERENCES `teams` (`IDTEAMS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_members`
--
ALTER TABLE `team_members`
  ADD CONSTRAINT `FK_team_members_1` FOREIGN KEY (`TEAM_LEADER_ID`) REFERENCES `members` (`IDMEMBERS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_team_members_2` FOREIGN KEY (`MEMBERS_ID`) REFERENCES `members` (`IDMEMBERS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_1` FOREIGN KEY (`IDMEMBERS`) REFERENCES `members` (`IDMEMBERS`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
