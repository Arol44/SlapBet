-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2012 at 05:44 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_slapbet'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_awesome'
--

CREATE TABLE tbl_awesome (
  awesome_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  awesome_img varchar(100) NOT NULL,
  awesome_points int(4) NOT NULL,
  PRIMARY KEY (awesome_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_awesome'
--

INSERT INTO tbl_awesome (awesome_id, awesome_img, awesome_points) VALUES
(1, 'Kitty.png', 20),
(2, 'Puppy.png', 20),
(3, 'Ninja.png', 50),
(4, 'Princess.png', 50),
(5, 'Pirate.png', 50),
(6, 'Zombie.png', 100);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_bets'
--

CREATE TABLE tbl_bets (
  bet_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  bet_title varchar(100) NOT NULL,
  bet_description varchar(1000) NOT NULL,
  bet_status varchar(20) NOT NULL,
  wager_id smallint(4) unsigned NOT NULL,
  user_id int(4) unsigned NOT NULL,
  PRIMARY KEY (bet_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_bets'
--

INSERT INTO tbl_bets (bet_id, bet_title, bet_description, bet_status, wager_id, user_id) VALUES
(91, 'Will Laura work on Sunday', 'Corrinne thinks no, Laura thinks yes', '', 0, 26),
(90, 'betcha 01', 'that arielle will get hired by LondonLife', 'unsettled', 3, 24),
(89, 'You can''t eat 10 apples at once', 'Huzzah', 'settled', 8, 23),
(88, 'make it up', 'descriptio9n', 'settled', 7, 17),
(87, 'Pizza Bet', 'I bet I can eat a pizza right now!', 'unsettled', 8, 22),
(85, 'ggfdgfdg', 'dfgdfgdfg', 'settled', 2, 20),
(86, 'I will buy a house when im 20', 'Description', 'settled', 8, 21),
(84, 'google', 'slap city', 'settled', 3, 19),
(83, 'Fishing', 'I bet you''ve never been fishing', 'settled', 4, 17),
(82, 'test bet', 'test', 'settled', 8, 18),
(81, 'I can do more pushups than you', 'You are weak.', '', 0, 18),
(80, 'Fishing', 'I bet Ian has never been fishing', 'settled', 1, 17),
(79, 'la dee da', 'almost done :D', 'settled', 1, 1),
(92, 'Sunday betball', 'Will Laura work this Sunday?', 'unsettled', 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_friends'
--

CREATE TABLE tbl_friends (
  friend_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  user_id smallint(4) unsigned NOT NULL,
  friend_userid smallint(4) unsigned NOT NULL,
  PRIMARY KEY (friend_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_friends'
--

INSERT INTO tbl_friends (friend_id, user_id, friend_userid) VALUES
(41, 17, 18),
(40, 17, 17),
(35, 21, 20),
(34, 21, 21),
(33, 20, 16),
(32, 20, 20),
(31, 19, 19),
(39, 22, 22),
(30, 18, 18),
(29, 18, 17),
(28, 17, 17),
(27, 16, 16),
(42, 23, 23),
(43, 23, 16),
(44, 24, 24),
(45, 24, 16),
(46, 24, 22),
(47, 0, 0),
(48, 0, 0),
(49, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 26, 26),
(53, 26, 25),
(54, 25, 25),
(55, 16, 21);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_team'
--

CREATE TABLE tbl_team (
  team_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  bet_id int(4) unsigned NOT NULL,
  team_number smallint(4) unsigned NOT NULL,
  user_id int(4) unsigned NOT NULL,
  PRIMARY KEY (team_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_team'
--

INSERT INTO tbl_team (team_id, bet_id, team_number, user_id) VALUES
(125, 92, 3, 26),
(124, 92, 1, 25),
(123, 92, 2, 26),
(122, 91, 2, 26),
(121, 90, 3, 16),
(120, 90, 2, 24),
(118, 90, 1, 22),
(117, 89, 2, 16),
(116, 89, 1, 23),
(115, 89, 3, 23),
(114, 88, 3, 17),
(113, 88, 2, 18),
(112, 88, 1, 17),
(111, 87, 3, 22),
(110, 87, 2, 22),
(109, 87, 1, 22),
(108, 86, 2, 20),
(107, 86, 1, 21),
(106, 85, 3, 20),
(105, 85, 2, 20),
(104, 85, 1, 16),
(103, 84, 2, 19),
(102, 84, 1, 19),
(101, 83, 3, 17),
(100, 83, 2, 17),
(99, 83, 1, 17),
(98, 82, 3, 17),
(97, 82, 2, 18),
(96, 82, 1, 17),
(95, 80, 3, 17),
(94, 80, 2, 17),
(93, 80, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_users'
--

CREATE TABLE tbl_users (
  user_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  user_name varchar(50) NOT NULL,
  user_password varchar(25) NOT NULL,
  user_character varchar(100) NOT NULL,
  user_fullname varchar(50) NOT NULL,
  user_points smallint(9) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_users'
--

INSERT INTO tbl_users (user_id, user_name, user_password, user_character, user_fullname, user_points) VALUES
(22, 'Tygerman', 'jimmycrackcorn', 'male/ShortHair_LightBrown.png', 'Terry Bink', 0),
(21, 'yulia', '12345', 'female/ShortLength_DarkBrown.png', 'Yulia KOvaleva', 0),
(20, 'erterte', 'retere', 'female/LongLength_DirtyBlonde.png', 'trtretr reterte', 0),
(19, 'bonitaz', 'pass123', 'female/MediumLength_DirtyBlonde.png', 'bonnie herbert', 0),
(23, 'adamzwakk', '1234', 'male/ShortHair_DarkBrown.png', 'Adam Zwakenberg', 0),
(18, 'travis', 'arcane', 'male/MediumHair_Brown.png', 'travis sharrow', 0),
(16, 'arielle', 'happy', 'female/LongLength_Brown.png', 'Arielle LePage', 0),
(17, 'Ian', 'Ian', 'male/MediumHair_BrightBlonde.png', 'Ian Tremblay', 0),
(24, 'boobear', 'booby', 'female/MediumLength_BrightBlonde.png', 'Kathy LePage', 0),
(25, 'fling flang', 'Corrinne', 'female/LongLength_DarkBrown.png', 'Laura LePage', 0),
(26, 'Corpitus', 'OPagie', 'female/MediumLength_Brown.png', 'Corpitus OPagie', 0);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_wager'
--

CREATE TABLE tbl_wager (
  wager_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  wager_wager varchar(100) NOT NULL,
  wager_points int(4) NOT NULL,
  PRIMARY KEY (wager_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_wager'
--

INSERT INTO tbl_wager (wager_id, wager_wager, wager_points) VALUES
(1, '1 Slap', 1),
(2, '2 Slaps', 5),
(3, '5 Slaps', 10),
(4, '10 Slaps', 25),
(5, '15 Slaps', 50),
(6, '20 Slaps', 75),
(7, '50 Slaps', 100),
(8, '100 Slaps', 200);
