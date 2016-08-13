-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2016 at 09:18 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `select_units`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `admin_id` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `present_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `present_id` (`present_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `admin_id`, `present_id`) VALUES
('رمضانی', '1', 'r', 1);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `being_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `present_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`college_id`,`being_id`),
  KEY `present_id` (`present_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`name`, `being_id`, `college_id`, `present_id`) VALUES
('ریاضی و علوم کامپیوتر', 1, 1, 1),
(' مهندسی کامپیوتر و فنآوری اطلاعات', 2, 2, 2),
('گروه معارف و علوم انسانی', 3, 3, 3),
('گروه آموزشی زبان خارجی', 4, 4, 4),
('گروه آموزشی تربیت بدنی', 5, 5, 5),
('دانشکده مهندسی انرژی و فیزیک', 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

DROP TABLE IF EXISTS `lesson`;
CREATE TABLE IF NOT EXISTS `lesson` (
  `name` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `unit_number` int(11) DEFAULT NULL,
  `lesson_id` int(11) NOT NULL,
  `les_id` int(11) NOT NULL,
  `selu_id` int(11) DEFAULT NULL,
  `teach_id` int(11) DEFAULT NULL,
  `present_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`les_id`),
  KEY `selu_id` (`selu_id`),
  KEY `teach_id` (`teach_id`),
  KEY `present_id` (`present_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`name`, `unit_number`, `lesson_id`, `les_id`, `selu_id`, `teach_id`, `present_id`) VALUES
('ریاضی 1', 3, 1011053, 1, 1, 1, 1),
('ریاضی 1', 3, 1011053, 4, 4, 4, 4),
('ریاضی 3', 3, 1218143, 3, 3, 3, 3),
('ریاضی 2', 3, 1011103, 2, 2, 2, 2),
('ریاضی 1', 3, 1011053, 5, 5, 5, NULL),
('معادلات دیفرانسیل', 3, 1011253, 6, 6, 6, 5),
('معادلات دیفرانسیل', 3, 1011253, 7, 7, 7, 6),
('فیزیک', 3, 1021303, 8, 8, 8, 7),
('فیزیک', 3, 1021303, 9, 9, 9, 8),
('آنالیز ریاضی', 3, 1218123, 10, 10, 10, 9),
('ماتریس و جبر خطی', 3, 1218103, 11, 11, 11, 10),
('ماتریس و جبر خطی', 3, 1218103, 12, 12, 12, 11),
('علوم ریاضی', 3, 1236303, 13, 13, 13, 12),
('علوم ریاضی', 3, 1236303, 14, 14, 14, 13),
('آنالیز عددی', 3, 1218133, 15, 15, 15, 14),
('احتمال', 3, 1319153, 16, 16, 16, NULL),
('احتمال', 3, 1319153, 17, 17, 17, 15),
('مبانی کامپیوتر و برنامه سازی', 3, 1236313, 18, 18, 18, 16),
('برنامه سازی پیشرفته', 3, 1319143, 19, 19, 19, 17),
('برنامه سازی پیشرفته', 3, 3115064, 20, 20, 20, 18),
('ساختمان داده ها و الگوریتم ها', 4, 1235184, 21, 21, 21, 19),
('انديشه اسلامي 1', 2, 1051122, 22, 22, 22, 20),
('انديشه اسلامي 1', 2, 1051122, 23, 23, 23, 21),
('انديشه اسلامي 2', 2, 1051132, 24, 24, 24, 22),
('انديشه اسلامي 2', 2, 1051132, 25, 25, 25, 23),
('تاريخ تحليلي صدر اسلام', 2, 1051012, 26, 26, 26, 24),
('انقلاب اسلامي ايران', 2, 1051412, 27, 27, 27, 25),
(' اخلاق اسلامي', 2, 1051332, 28, 28, 28, 26),
('زبان', 3, 1218603, 29, 29, 29, 27),
('زبان', 3, 1218603, 30, 30, 30, 28);

-- --------------------------------------------------------

--
-- Table structure for table `present`
--

DROP TABLE IF EXISTS `present`;
CREATE TABLE IF NOT EXISTS `present` (
  `present_id` int(11) NOT NULL,
  `exam_date` date DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `les_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`present_id`),
  KEY `college_id` (`college_id`),
  KEY `les_id` (`les_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `present`
--

INSERT INTO `present` (`present_id`, `exam_date`, `college_id`, `les_id`) VALUES
(1, '2016-08-12', 1, 1),
(2, '2016-08-13', 1, 2),
(3, '2016-08-14', 1, 3),
(4, '2016-08-12', 1, 4),
(5, '2016-08-15', 1, 6),
(6, '2016-08-15', 1, 7),
(7, '2016-08-16', 6, 8),
(8, '2016-08-16', 6, 9),
(9, '2016-08-17', 1, 10),
(10, '2016-08-18', 1, 11),
(11, '2016-08-18', 1, 12),
(12, '2016-08-19', 1, 13),
(13, '2016-08-19', 1, 14),
(14, '2016-08-20', 1, 15),
(15, '2016-08-21', 1, 17),
(16, '2016-08-22', 1, 18),
(17, '2016-08-22', 1, 19),
(18, '2016-08-22', 2, 20),
(19, '2016-08-23', 1, 21),
(20, '2016-08-17', 3, 22),
(21, '2016-08-17', 3, 23),
(22, '2016-08-19', 3, 24),
(23, '2016-08-19', 3, 25),
(24, '2016-08-15', 3, 26),
(25, '2016-08-16', 3, 27),
(26, '2016-08-17', 3, 28),
(27, '2016-08-18', 4, 29),
(28, '2016-08-18', 4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pre_lesson`
--

DROP TABLE IF EXISTS `pre_lesson`;
CREATE TABLE IF NOT EXISTS `pre_lesson` (
  `pre_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`pre_id`,`id`),
  KEY `id_b` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pre_lesson`
--

INSERT INTO `pre_lesson` (`pre_id`, `id`) VALUES
(1011053, 1011103),
(1011053, 1236303),
(1011053, 1319153),
(1011103, 1011253),
(1011103, 1218123),
(1011103, 1218133),
(1011103, 1218143),
(1236303, 1218103);

-- --------------------------------------------------------

--
-- Table structure for table `select_unit`
--

DROP TABLE IF EXISTS `select_unit`;
CREATE TABLE IF NOT EXISTS `select_unit` (
  `selu_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `les_id` int(11) NOT NULL,
  PRIMARY KEY (`selu_id`),
  KEY `les_id` (`les_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `select_unit`
--

INSERT INTO `select_unit` (`selu_id`, `std_id`, `les_id`) VALUES
(1, 9212026, 1),
(2, 9212026, 2),
(3, 9212026, 3),
(4, 9212026, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `field` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `gender` varchar(128) COLLATE utf8_persian_ci NOT NULL DEFAULT 'مرد',
  `std_id` int(11) NOT NULL,
  `selu_id` int(11) DEFAULT NULL,
  `average` int(11) DEFAULT NULL,
  `being_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`std_id`),
  KEY `selu_id` (`selu_id`),
  KEY `being_id` (`being_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `field`, `password`, `counter`, `gender`, `std_id`, `selu_id`, `average`, `being_id`) VALUES
('مینا شایگان', 'رياضيات و كاربردها', 'mina', 1, 'زن', 9212026, 1, 19, 1),
('ساحل بلوکات', 'علوم کامپیوتر', 'sahel', 0, 'زن', 9213017, 3, 17, 1),
('پریسا وقفی ', 'رياضيات و كاربردها', 'parisa', 0, 'زن', 9212051, 4, 20, 1),
('رویا صادقی', 'رياضيات و كاربردها', 'roya', 0, 'زن', 9212025, 5, 20, 1),
('مرضیه حیدری', 'علوم کامپیوتر', '111111', 0, 'زن', 9213011, NULL, NULL, 1),
('مهسا گشوادی', 'مهندسی کامپیوتر', '2222222', 0, 'زن', 9215029, NULL, NULL, 2),
('محدثه بهمن آبادی', 'ریاضیات و کاربردها', '131415', 0, 'زن', 9212010, NULL, NULL, 1),
('ثمین جمشیدی', 'علوم کامپیوتر', '1151617', 0, 'زن', 9213007, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  `teach_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `teach_id` (`teach_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `teacher_id`, `teach_id`) VALUES
('کیانی\r\n', 1, 1),
('خسروی', 2, 2),
('ميرمحمدرضائي', 3, 3),
('تفضلیان', 4, 4),
('بنی فاطمی', 5, 5),
('نور حسینی', 6, 6),
('صبا', 7, 7),
('طالبی', 8, 8),
('مفیدی', 9, 9),
('توانا', 10, 10),
('رحمتی', 11, 11),
('اخلاقی', 12, 12),
('رستمی', 13, 13),
('شاکری', 14, 14),
('غفاری', 15, 15),
('نقشینه', 16, 16),
('علی آبادی', 17, 17),
('مکرمی', 18, 18),
('زارع', 19, 19),
('شیری', 20, 20),
('شهر رضا', 21, 21),
('قطعی', 22, 22),
('خداوردیان', 23, 23),
('غفوریان', 24, 24),
('کرمی', 25, 25),
('اسلامی', 26, 26),
('کرابی', 27, 27),
('پروندی', 28, 28),
('رحیمی', 29, 29);

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

DROP TABLE IF EXISTS `teaching`;
CREATE TABLE IF NOT EXISTS `teaching` (
  `teach_id` int(11) NOT NULL,
  `les_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`teach_id`),
  KEY `les_id` (`les_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`teach_id`, `les_id`, `teacher_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 3),
(4, 4, 2),
(5, 5, 5),
(6, 6, 4),
(7, 7, 5),
(8, 8, 7),
(9, 9, 8),
(10, 10, 13),
(11, 11, 11),
(12, 12, 12),
(13, 13, 9),
(14, 14, 10),
(15, 15, 14),
(16, 16, 16),
(17, 17, 15),
(18, 18, 17),
(19, 19, 17),
(20, 20, 6),
(21, 21, 18),
(22, 22, 23),
(23, 23, 24),
(24, 24, 23),
(25, 25, 24),
(26, 26, 28),
(27, 27, 29),
(28, 28, 27),
(29, 29, 26),
(30, 30, 27);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
