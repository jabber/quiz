-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2014 at 04:03 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_lib`
--

CREATE TABLE IF NOT EXISTS `question_lib` (
  `qid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer_A` varchar(200) NOT NULL,
  `answer_B` varchar(200) NOT NULL,
  `answer_C` varchar(200) NOT NULL,
  `answer_D` varchar(200) NOT NULL,
  `correct_answer` varchar(5) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `question_lib`
--

INSERT INTO `question_lib` (`qid`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `correct_answer`) VALUES
(1, 'For many patients, institutional care is the most ______ and beneficial form of care. ', 'pertinent', 'appropriate', 'acute', 'persistent', 'B'),
(2, 'Among all the changes resulting from the ______ entry of women into the work force, the transformation that has occurred in the women themselves is not the least important.', 'massive', 'quantitative', 'surplus', 'formidable', 'A'),
(3, 'Mr. Smith became very ______ when it was suggested that he had made a mistake.', 'ingenious', 'empirical', 'objective', 'indignant', 'A'),
(4, 'Rumours are everywhere, spreading fear, damaging reputations, and turning calm situations into ______ ones. ', 'turbulent', 'tragic', 'vulnerable', 'suspicious', 'A'),
(5, 'The ______ cycle of life and death is a subject of interest to scientists and philosophers alike.', 'incompatible', 'exceeding', 'instantaneous', 'eternal', 'D'),
(6, 'She remains confident and ______ untroubled by our present problems. ', 'indefinitely', 'infinitely', 'optimistically', 'seemingly', 'B'),
(7, 'Fiber-optic cables can carry hundreds of telephone conversations ______. ', 'simultaneously', 'spontaneously', 'homogeneously', 'contemporarily', 'A'),
(8, 'The police were alerted that the escaped criminal might be in the ______.', 'vain', 'vicinity', 'court', 'jail', 'B'),
(9, 'Whether you live to eat or eat to live, food is a major ______ in every family''s budget.', 'nutrition', 'expenditure', 'routine', 'provision', 'B'),
(10, 'Now a paper in Science argues that organic chemicals in the rock come mostly from ______ on earth rather than bacteria on Mars.', 'configuration', 'constitution', 'condemnation', 'contamination', 'D'),
(11, 'There is much I enjoy about the changing seasons, but my favorite time is the ______ from fall to winter. ', 'transmission', 'transformation', 'transition', 'transfer', 'C'),
(12, 'I think we need to see an investment ______ before we make an expensive mistake.', 'guide', 'entrepreneur', 'consultant', 'assessor', 'C'),
(13, 'The ______ on this apartment expires in a year''s time. ', 'pensions', 'earnings', 'salaries', 'donations', 'A'),
(14, 'There is supposed to be a safety ______ which makes it impossible for trains to collide.', 'appliance', 'accessory', 'machine', 'mechanism', 'A'),
(15, 'After four years in the same job his enthusiasm finally ______.', 'deteriorated', 'dispersed', 'dissipated', 'drained', 'D'),
(16, 'No one can function properly if they are _______ of adequate sleep.', 'deprived', 'ripped', 'stripped', 'contrived', 'A'),
(17, 'For years now, the people of that faraway country have been cruelly ______  by a dictator.', 'depressed', 'immersed', 'oppressed', 'cursed', 'C'),
(18, 'Ever since the rise of industrialism, education has been ______ towards producing workers.', 'harnessed', 'hatched', 'motivated', 'geared', 'D'),
(19, 'The prospect of increased prices has already ______ worries. ', 'provoked', 'irritated', 'inspired', 'hoisted', 'A'),
(20, 'The suspect ______ that he had not been in the neighbourhood at the time of the crime. ', 'advocated', 'alleged', 'addressed', 'announced', 'B'),
(21, 'Although the colonists ______ to some extent with the native Americans , the Indians'' influence on American culture and language was not extensive.', 'migrated', 'matched', 'mingled', 'melted', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_lib`
--

CREATE TABLE IF NOT EXISTS `quiz_lib` (
  `quizid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_1` int(10) NOT NULL,
  `question_2` int(10) NOT NULL,
  `question_3` int(10) NOT NULL,
  `question_4` int(10) NOT NULL,
  `question_5` int(10) NOT NULL,
  `question_6` int(10) NOT NULL,
  `question_7` int(10) NOT NULL,
  `question_8` int(10) NOT NULL,
  `question_9` int(10) NOT NULL,
  `question_10` int(10) NOT NULL,
  PRIMARY KEY (`quizid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `quiz_lib`
--

INSERT INTO `quiz_lib` (`quizid`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`) VALUES
(1, 8, 18, 14, 4, 15, 6, 19, 11, 2, 16),
(2, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
(3, 12, 3, 20, 18, 14, 7, 8, 2, 9, 13),
(4, 3, 19, 18, 2, 11, 4, 5, 1, 13, 9),
(5, 9, 16, 20, 10, 2, 7, 11, 17, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `has_score` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `has_score`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '10bd3f40a4ebb18c8e7165019d352680f5f34bc7', 1268889823, 1399816834, 1, 'Admin', 'istrator', 'ADMIN', '0', 0),
(2, '192.168.33.230', 'luchuan sun', '$2y$08$gcCw4W05Ps1eqG3N6I5atufb1g0jheeMu4a64R9RrfookWHUYKjVi', NULL, '21237728@qq.com', NULL, NULL, NULL, 'f4ea3856702948ef5d1ffd261cf24814f5bfab2d', 1395239577, 1399816184, 1, 'Luchuan', 'Sun', 'UESTC', '13590289979', 1),
(3, '192.168.33.231', 'huan huang', '$2y$08$OC9G1aWdahX7t4dsqBF8vuf49QA8r8F0eTJFomkBpNHuwpT50efV6', NULL, 'huanghuan@poi.com', NULL, NULL, NULL, NULL, 1395339920, 1395339920, 1, 'Huan', 'Huang', 'POI', '11111', 0),
(4, '172.16.241.208', 'test test', '$2y$08$vxNLinMzEegqKXvUzwEgN.Y0szPZAkgMKYss4WyDQZvEKxlb39au6', NULL, 'test@test.com', NULL, NULL, NULL, 'ceca9eb2599c8a6c7facff1d3ac3376e2bcc79ed', 1399812875, 1399816210, 1, 'test', 'test', 'test', '1234567890', 0),
(5, '172.16.241.209', 'test1 test1', '$2y$08$EqtA8teQxlISOzKEQ/EkAegxqIkH98fy1ROkOQDXKD3VjFXg/9LZO', NULL, 'test1@test.com', NULL, NULL, NULL, 'a109e41c8a38a203ff2faddd596e3804026a44aa', 1399816786, 1399816792, 1, 'test1', 'test1', 'test1', '1234567890', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userscore_lib`
--

CREATE TABLE IF NOT EXISTS `userscore_lib` (
  `uid` int(11) unsigned NOT NULL,
  `score` int(11) unsigned NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userscore_lib`
--

INSERT INTO `userscore_lib` (`uid`, `score`, `time`) VALUES
(2, 10, '2014-04-02 07:55:19'),
(2, 3, '2014-04-05 06:21:55'),
(2, 3, '2014-04-05 06:22:05'),
(2, 1, '2014-04-05 06:26:34'),
(2, 5, '2014-04-05 06:31:02'),
(2, 4, '2014-04-05 07:45:09'),
(2, 4, '2014-04-05 07:45:24'),
(2, 4, '2014-04-05 07:54:20'),
(2, 5, '2014-04-05 07:55:05'),
(2, 5, '2014-04-05 07:56:29'),
(2, 5, '2014-04-05 07:56:59'),
(2, 5, '2014-04-05 07:57:21'),
(2, 5, '2014-04-05 07:57:43'),
(2, 4, '2014-04-05 07:58:13'),
(2, 5, '2014-04-06 03:46:48'),
(2, 4, '2014-04-06 10:32:36'),
(2, 5, '2014-04-06 10:33:16'),
(2, 2, '2014-04-11 15:56:48'),
(2, 1, '2014-04-27 14:21:56'),
(2, 5, '2014-04-27 14:22:19'),
(2, 5, '2014-04-27 14:37:27'),
(2, 4, '2014-04-27 14:38:06'),
(2, 4, '2014-05-11 14:56:58'),
(2, 5, '2014-05-11 15:02:35'),
(4, 5, '2014-05-11 15:35:32'),
(4, 2, '2014-05-11 15:58:11'),
(5, 2, '2014-05-11 16:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
