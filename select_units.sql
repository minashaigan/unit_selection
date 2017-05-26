-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 03:15 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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

CREATE TABLE `admin` (
  `name` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `gender` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `admin_id` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `present_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `gender`, `password`, `admin_id`, `present_id`) VALUES
('رمضانی', 'زن', 'r', 'ramezani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `being_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `present_id` int(11) DEFAULT NULL
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

CREATE TABLE `lesson` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `selu_id` int(11) NOT NULL,
  `teach_id` int(11) DEFAULT NULL,
  `present_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `unit_number` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`name`, `selu_id`, `teach_id`, `present_id`, `lesson_id`, `group_id`, `unit_number`) VALUES
('ریاضی عمومی 1', 1, 1, 1, 1011053, 1, 3),
('ریاضی عمومی 1', 2, 4, 2, 1011053, 2, 3),
('ریاضی عمومی 1', 3, 5, 3, 1011053, 3, 3),
('ریاضی عمومی 3', 4, 3, 4, 1218143, 1, 3),
('ریاضی عمومی 2', 5, 2, 5, 1011103, 1, 3),
('معادلات دیفرانسیل', 6, 6, 6, 1011253, 1, 3),
('معادلات دیفرانسیل', 7, 7, 7, 1011253, 2, 3),
('فیزیک عمومی 1', 8, 8, 8, 1021303, 1, 3),
('فیزیک عمومی 1', 9, 9, 9, 1021303, 2, 3),
('مبانی آنالیز ریاضی', 10, 10, 10, 1218123, 1, 3),
('مبانی ماتریس ها و جبر خطی', 11, 11, 11, 1218103, 1, 3),
('مبانی ماتریس ها و جبر خطی', 12, 12, 12, 1218103, 2, 3),
('مبانی علوم ریاضی', 13, 13, 13, 1236303, 1, 3),
('مبانی علوم ریاضی', 14, 14, 14, 1236303, 2, 3),
('مبانی آنالیز عددی', 15, 15, 15, 1218133, 1, 3),
('مبانی احتمال', 16, 16, 16, 1319153, 1, 3),
('مبانی احتمال', 17, 17, 17, 1319153, 2, 3),
('مبانی کامپیوتر و برنامه سازی', 18, 18, 18, 1236313, 1, 3),
('برنامه سازی پیشرفته', 19, 19, 19, 1319143, 1, 3),
('برنامه سازی پیشرفته', 20, 20, 20, 3115064, 1, 3),
('ساختمان داده ها و الگوریتم ها', 21, 21, 21, 1235184, 1, 3),
('اندیشه اسلامی 1', 22, 22, 22, 1051122, 1, 3),
('اندیشه اسلامی 1', 23, 23, 23, 1051122, 2, 3),
('اندیشه اسلامی 2', 24, 24, 24, 1051132, 1, 3),
('اندیشه اسلامی 2', 25, 25, 25, 1051132, 2, 3),
('تاریخ تحلیلی صدر اسلام', 26, 26, 26, 1051012, 1, 3),
('انقلاب اسلامی ایران', 27, 27, 27, 1051412, 1, 3),
('اخلاق اسلامی', 28, 28, 28, 1051332, 1, 3),
('زبان', 29, 29, 29, 1218603, 1, 3),
('زبان', 30, 30, 30, 1218603, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_taked`
--

CREATE TABLE `lesson_taked` (
  `lesson_taked` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `term` varchar(128) COLLATE utf8_persian_ci NOT NULL DEFAULT 'اول',
  `lesson_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `std_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `lesson_taked`
--

INSERT INTO `lesson_taked` (`lesson_taked`, `year`, `term`, `lesson_id`, `group_id`, `number`, `std_id`) VALUES
(48, 1395, 'اول', 1051122, 1, 0, 9212026),
(47, 1395, 'اول', 1051132, 1, 0, 9212026),
(46, 1395, 'اول', 1021303, 2, 0, 9212026),
(45, 1395, 'اول', 1218603, 1, 0, 9212026),
(44, 1395, 'اول', 1236313, 1, 0, 9212026),
(43, 1395, 'اول', 1011053, 1, 0, 9212026),
(42, 1395, 'اول', 1011053, 1, 0, 9213017),
(41, 1395, 'اول', 1236313, 1, 0, 9213017),
(40, 1395, 'اول', 1021303, 1, 0, 9213017),
(39, 1395, 'اول', 1218603, 2, 0, 9213017),
(38, 1395, 'اول', 1051332, 1, 0, 9213017),
(1, 1396, 'اول', 1236313, 1, 12, 9212026),
(49, 1395, 'اول', 1011053, 1, 0, 9212026),
(50, 1395, 'اول', 1236313, 1, 0, 9212026),
(51, 1395, 'اول', 1218603, 1, 0, 9212026),
(52, 1395, 'اول', 1021303, 2, 0, 9212026),
(53, 1395, 'اول', 1051132, 1, 0, 9212026),
(54, 1395, 'اول', 1051122, 1, 0, 9212026);

-- --------------------------------------------------------

--
-- Table structure for table `present`
--

CREATE TABLE `present` (
  `present_id` int(11) NOT NULL,
  `selu_id` int(11) NOT NULL DEFAULT '0',
  `capacity` int(11) NOT NULL DEFAULT '30',
  `empty` int(11) NOT NULL,
  `exam_date` date DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `present`
--

INSERT INTO `present` (`present_id`, `selu_id`, `capacity`, `empty`, `exam_date`, `college_id`, `lesson_id`, `group_id`) VALUES
(1, 1, 30, 27, '2016-08-12', 1, 1011053, 1),
(2, 2, 30, 30, '2016-08-13', 1, 1011103, 1),
(3, 3, 30, 30, '2016-08-14', 1, 1218143, 1),
(4, 4, 30, 30, '2016-08-12', 1, 1011253, 2),
(5, 5, 30, 30, '2016-08-12', 1, 1011053, 3),
(6, 6, 30, 30, '2016-08-15', 1, 1011253, 1),
(7, 7, 30, 30, '2016-08-15', 1, 1011253, 2),
(8, 8, 30, 29, '2016-08-16', 6, 1021303, 1),
(9, 9, 30, 29, '2016-08-16', 6, 1021303, 2),
(10, 10, 30, 30, '2016-08-18', 1, 1218123, 1),
(11, 11, 30, 30, '2016-08-18', 1, 1218103, 2),
(12, 12, 30, 30, '2016-08-19', 1, 1218103, 1),
(13, 13, 30, 30, '2016-08-19', 1, 1236303, 1),
(14, 14, 30, 30, '2016-08-20', 1, 1236303, 1),
(15, 15, 30, 30, '2016-08-21', 1, 1218133, 1),
(16, 16, 30, 30, '2016-08-22', 1, 1319153, 1),
(17, 17, 30, 30, '2016-08-22', 1, 1319153, 1),
(18, 18, 30, 27, '2016-08-22', 1, 1236313, 1),
(19, 19, 30, 30, '2016-08-23', 1, 1319143, 1),
(20, 20, 30, 30, '2016-08-17', 2, 3115064, 2),
(21, 21, 30, 30, '2016-08-17', 1, 1235184, 1),
(22, 22, 30, 29, '2016-08-19', 3, 1051122, 1),
(23, 23, 30, 29, '2016-08-19', 3, 1051122, 1),
(24, 24, 30, 30, '2016-08-15', 3, 1051132, 3),
(25, 25, 30, 29, '2016-08-16', 3, 1051132, 1),
(26, 26, 30, 30, '2016-08-17', 3, 1051012, 2),
(27, 27, 30, 30, '2016-08-18', 3, 1051412, 1),
(28, 28, 30, 30, '2016-08-18', 3, 1051332, 2),
(29, 29, 30, 29, '2016-08-24', 4, 1218603, 1),
(30, 30, 30, 29, '2016-08-24', 4, 1218603, 2),
(57, 41, 50, 50, '2016-08-30', 1, 123456, 1),
(56, 41, 50, 50, '2016-08-30', 1, 123456, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pre_lesson`
--

CREATE TABLE `pre_lesson` (
  `pre_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pre_lesson`
--

INSERT INTO `pre_lesson` (`pre_id`, `id`) VALUES
(0, 1011053),
(0, 1021303),
(0, 1051012),
(0, 1051122),
(0, 1051132),
(0, 1051332),
(0, 1051412),
(0, 1218603),
(0, 1236313),
(1011053, 1011103),
(1011053, 1236303),
(1011053, 1319153),
(1011103, 1011253),
(1011103, 1218123),
(1011103, 1218133),
(1011103, 1218143),
(1236303, 1218103),
(1236313, 1319143),
(1319143, 1235184);

-- --------------------------------------------------------

--
-- Table structure for table `select_unit`
--

CREATE TABLE `select_unit` (
  `selection` int(11) NOT NULL,
  `selu_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `select_unit`
--

INSERT INTO `select_unit` (`selection`, `selu_id`, `std_id`, `lesson_id`, `group_id`) VALUES
(0, 28, 9213017, 1051332, 1),
(2243, 30, 9213017, 1218603, 2),
(2242, 8, 9213017, 1021303, 1),
(2241, 18, 9213017, 1236313, 1),
(2240, 1, 9213017, 1011053, 1),
(2245, 1, 9212026, 1011053, 1),
(2254, 18, 9212026, 1236313, 1),
(2247, 29, 9212026, 1218603, 1),
(2248, 9, 9212026, 1021303, 2),
(2249, 24, 9212026, 1051132, 1),
(2250, 22, 9212026, 1051122, 1),
(2251, 1, 9212046, 1011053, 1),
(2252, 18, 9212046, 1236313, 1),
(2253, 28, 9212046, 1051332, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `field` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_persian_ci NOT NULL,
  `certif` int(10) UNSIGNED ZEROFILL NOT NULL DEFAULT '0000000000',
  `email` varchar(320) COLLATE utf8_persian_ci DEFAULT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `gender` varchar(128) COLLATE utf8_persian_ci NOT NULL DEFAULT 'مرد',
  `std_id` int(11) NOT NULL,
  `selu_id` int(11) DEFAULT NULL,
  `average` int(11) DEFAULT NULL,
  `being_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `field`, `password`, `certif`, `email`, `counter`, `gender`, `std_id`, `selu_id`, `average`, `being_id`) VALUES
('ساحل دریا', 'علوم کامپیوتر', '0', 0000000000, 'sahel@gmail.com', 1, 'زن', 9213017, 3, 17, 1),
('پریسا پریاوند ', 'رياضيات و كاربردها', '123', 0000000000, 'parisa@yahoo.com', 0, 'مرد', 9212051, 4, 20, 1),
('رویا رویازاده', 'رياضيات و كاربردها', '123', 0000000000, 'roya@outlook.com', 0, 'مرد', 9212025, 5, 20, 1),
('مرضیه مرضیه پور', 'علوم کامپیوتر', '123', 0000000000, 'marzie@gmail.com', 0, 'مرد', 9213011, NULL, NULL, 1),
('مهسا مهسایی', 'مهندسی کامپیوتر', '123', 0000000000, 'mahsa@yahoo.com', 0, 'مرد', 9215029, NULL, NULL, 2),
('محدثه محدثه پور', 'ریاضیات و کاربردها', '123', 0000000000, 'mohadese@yahoo.com', 0, 'مرد', 9212010, NULL, NULL, 1),
('ثمین ثمینی', 'علوم کامپیوتر', '123', 0000000000, 'samin@gmail.com', 0, 'مرد', 9213007, NULL, NULL, 1),
('سپیده سپیده وند', 'علوم کامپیوتر', '123', 0000000000, 'sepideh@outlook.com', 1, 'مرد', 9213001, NULL, NULL, 1),
('مینا مینایی', 'ریاضیات و کاربردها کهاد علوم کامپیوتر', 'qwe', 0018106171, 'minagan@yahoo.com', 1, 'زن', 9212026, NULL, NULL, 1),
('محمد محمدی', 'علوم کامپیوتر', '123', 3310169812, 'mohammad@gmail.com', 0, 'مرد', 9310058, NULL, NULL, 1),
('مینا شایگان', 'ریاضیات و کاربردها', '111111', 0000111111, 'mina@yahoo.com', 1, 'زن', 9212046, NULL, NULL, 1),
('مرضیه حیدری', 'علوم کامپیوتر', '0000000', 0000000000, NULL, 0, 'مرد', 9212090, NULL, NULL, 1),
('حسین فقیهی', 'علوم کامپیوتر', '001654654', 0001654654, NULL, 0, 'مرد', 9113017, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  `teach_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `teacher_id`, `teach_id`) VALUES
('کیانی', 1, 1),
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

CREATE TABLE `teaching` (
  `teach_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`teach_id`, `teacher_id`, `lesson_id`, `group_id`) VALUES
(1, 1, 1011053, 1),
(2, 1, 1011103, 1),
(3, 3, 1218143, 1),
(4, 2, 1011053, 2),
(5, 5, 1011253, 2),
(6, 4, 1011253, 1),
(7, 5, 1011053, 3),
(8, 7, 1021303, 1),
(9, 8, 1021303, 2),
(10, 13, 1218123, 1),
(11, 11, 1218103, 1),
(12, 12, 1218103, 2),
(13, 9, 1236303, 1),
(14, 10, 1236303, 2),
(15, 14, 1218133, 1),
(16, 16, 1319153, 1),
(17, 15, 1319153, 2),
(18, 17, 1236313, 1),
(19, 17, 1319143, 1),
(20, 6, 3115064, 1),
(21, 18, 1235184, 1),
(22, 23, 1051122, 1),
(23, 24, 1051122, 2),
(24, 23, 1051132, 1),
(25, 24, 1051132, 2),
(26, 28, 1051012, 1),
(27, 29, 1051412, 2),
(28, 27, 1051332, 1),
(29, 26, 1218603, 1),
(30, 27, 1218603, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `present_id` (`present_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`,`being_id`),
  ADD KEY `present_id` (`present_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`,`group_id`),
  ADD KEY `teach_id` (`teach_id`),
  ADD KEY `present_id` (`present_id`),
  ADD KEY `selu_id` (`selu_id`);

--
-- Indexes for table `lesson_taked`
--
ALTER TABLE `lesson_taked`
  ADD PRIMARY KEY (`lesson_taked`),
  ADD KEY `lesson_id` (`lesson_id`,`group_id`),
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `present`
--
ALTER TABLE `present`
  ADD PRIMARY KEY (`present_id`),
  ADD KEY `college_id` (`college_id`),
  ADD KEY `lesson_id` (`lesson_id`,`group_id`),
  ADD KEY `selu_id` (`selu_id`);

--
-- Indexes for table `pre_lesson`
--
ALTER TABLE `pre_lesson`
  ADD PRIMARY KEY (`pre_id`,`id`),
  ADD KEY `id_b` (`id`);

--
-- Indexes for table `select_unit`
--
ALTER TABLE `select_unit`
  ADD PRIMARY KEY (`selection`),
  ADD KEY `lesson_id` (`lesson_id`,`group_id`),
  ADD KEY `selu_id` (`selu_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `selu_id` (`selu_id`),
  ADD KEY `being_id` (`being_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `teach_id` (`teach_id`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`teach_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `lesson_id` (`lesson_id`,`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `selu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `lesson_taked`
--
ALTER TABLE `lesson_taked`
  MODIFY `lesson_taked` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `present`
--
ALTER TABLE `present`
  MODIFY `present_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `select_unit`
--
ALTER TABLE `select_unit`
  MODIFY `selection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2255;
--
-- AUTO_INCREMENT for table `teaching`
--
ALTER TABLE `teaching`
  MODIFY `teach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
