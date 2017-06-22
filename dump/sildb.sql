-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: Jun 20, 2017 at 06:32 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sildb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cm_name` varchar(30) NOT NULL,
  `cm_email` varchar(80) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cm_name`, `cm_email`, `comment`, `comment_id`) VALUES
('Rihards', 'rihardslodzins@gmail.com', 'I like it alot', 3),
('Laura', 'lauragravite95@gmail.com', 'Yes, I will join', 3),
('Laum', 'laumalaube@inbox.lv', 'I will join ya', 3),
('Rihards Lodzins', 'rihardslodzins@gmail.com', 'Super!', 3),
('sdf', 'adfg', 'afg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comment_ev`
--

CREATE TABLE IF NOT EXISTS `comment_ev` (
  `cm_name` varchar(30) NOT NULL,
  `cm_email` varchar(80) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_ev`
--

INSERT INTO `comment_ev` (`cm_name`, `cm_email`, `comment`, `comment_id`) VALUES
('Rihards', 'rihardslodzins@gmail.com', 'I will join, what about you?', 1),
('Rihards', 'rihardslodzins@gmail.com', 'I will join, what about you?', 1),
('Rihards', 'rihardslodzins@gmail.com', 'I will join, what about you?', 1),
('Rihards', 'rihardslodzins@gmail.com', 'I will join, what about you?', 1),
('Rihards', 'rihardslodzins@gmail.com', 'I will join, what about you?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_message`) VALUES
('Rihards', 'rihardslodzins@gmail.com', 'Can I book a meeting with the mainainer?');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event_location` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event_picture` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_description` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_location`, `event_picture`, `event_date`, `event_description`) VALUES
(1, 'Ezisa festival', 'Domu laukums 1', '\\images\\universities.c.jpg', '2017-06-13', ' did try that and came up with the same error. Also tried enclosing the entire host/dbname in that line in double quotes, then the dbname in single quotes since that was how one version of it online was formatted.'),
(2, 'Piena ielas festival', 'Miera iela 41', '\\images\\transport.c.jpg', '2017-06-14', ' did try that and came up with the same error. Also tried enclosing the entire host/dbname in that line in double quotes, then the dbname in single quotes since that was how one version of it online was formatted.'),
(3, 'Pardaugavas svetki', 'Maras dika parks', '\\images\\event.c.jpg', '2017-06-07', ' did try that and came up with the same error. Also tried enclosing the entire host/dbname in that line in double quotes, then the dbname in single quotes since that was how one version of it online was formatted.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_picture` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_author` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_article` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cm_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_picture`, `news_author`, `news_date`, `news_article`, `cm_id`) VALUES
(1, 'Loans for students', '\\images\\universities.c.jpg', 'Rihards Lodzins', '2017-06-01', 'A student or pupil is a learner or someone who attends an educational institution. In Britain those attending university are termed "students". In the United States, and more recently also in Britain, the term "student" is applied to both categories. In its widest use, student is used for anyone who is learning, including mid-career adults who are taking vocational education or returning to university. When speaking about learning outside an institution, "student" is also used to refer to someone who is learning a topic or who is "a student of" a certain topic or person.', 1),
(2, 'Discount for books', '\\images\\transport.c.jpg', 'Laura Gravite', '2017-06-03', 'A university (Latin: universitas, "a whole", "a corporation"[1]) is an institution of higher (or tertiary) education and research which grants academic degrees in various academic disciplines. Universities typically provide undergraduate education and postgraduate education.\r\nThe word "university" is derived from the Latin universitas magistrorum et scholarium, which roughly means "community of teachers and scholars."[2] Universities were created in Italy and evolved from Cathedral schools for the clergy during the High Middle Ages.[3]', 2),
(3, 'Libraries closed after 9pm', '\\images\\event.c.jpg', 'Lauma Laube', '2017-06-04', 'A library is a collection of sources of information and similar resources, made accessible to a defined community for reference or borrowing.[1] It provides physical or digital access to material, and may be a physical building or room, or a virtual space, or both.[2] A library''s collection can include books, periodicals, newspapers, manuscripts, films, maps, prints, documents, microform, CDs, cassettes, videotapes, DVDs, Blu-ray Discs, e-books, audiobooks, databases, and other formats. Libraries range in size from a few shelves of books to several million items. In Latin and Greek, the idea of a bookcase is represented by Bibliotheca and Bibliothēkē (Greek: βιβλιοθήκη): derivatives of these mean library in many modern languages, e.g. French bibliothèque.\r\nThe first libraries consisted of archives of the earliest form of writing—the clay tablets in cuneiform script discovered in Sumer, some dating back to 2600 BC. Private or personal libraries made up of written books appeared in classical Greece in the 5th century BC. In the 6th century, at the very close of the Classical period, the great libraries of the Mediterranean world remained those of Constantinople and Alexandria.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uni`
--

CREATE TABLE IF NOT EXISTS `uni` (
  `uni_id` int(11) NOT NULL,
  `uni_name` varchar(80) NOT NULL,
  `uni_location` varchar(80) NOT NULL,
  `uni_picture` varchar(100) NOT NULL,
  `uni_description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni`
--

INSERT INTO `uni` (`uni_id`, `uni_name`, `uni_location`, `uni_picture`, `uni_description`) VALUES
(1, 'Stradinu University', 'Jaunspils iela 3', '\\images\\universities.c.jpg', 'Having grown out of R?ga Medical Institute, R?ga Stradi?š University offers medicine and health care studies and dynamic social science studies steeped in historic traditions, but incorporating the latest world trends.\r\n\r\nRSU''s teaching staff are professionals in their areas of expertise and are opinion leaders in society. Our diplomas open the way to interesting professions in both Latvia and in the wider world. Former students of the University''s medicine and healthcare programmes treat patients in Latvia’s largest hospitals and outpatient clinics. The former president of the Republic of Latvia Valdis Zatlers (pictured below), who previously had a successful career in the fields of traumatology and orthopaedics, is an alumnus of RSU.\r\n\r\nThe study system at RSU is based not only on memorising, but also on the development of analytical and critical thinking. The social sciences study programmes use the module system, where a maximum of three subjects are studied at one time and tests are taken at the conclusion of studies in each respective subject.\r\n\r\nYou can start creating your academic career during your time at the University: among many other societies, there is also the Student Scientific Society. Our students produce more than 200 scientific research papers each year.'),
(2, 'RTU', 'Strelnieku laukums', '\\images\\transport.c.jpg', 'RTU is the largest science-based university in the Baltic States established in 1862. \r\nLocation\r\nWe are in the heart of Riga, the capital city of Latvia. Latvia borders the Baltic Sea along with Germany, Sweden and other countries.\r\nTradition\r\nRTU has over 150 years of history as a centre of scientific excellence and has Nobel Prize winners, Presidents and Prime Ministers as former professors and students.\r\nOpportunity\r\nWe provide an extensive range of engineering, business study and architecture related courses. Local and visiting professors deliver study programmes to local and overseas students in English. \r\nAccreditation\r\nLatvia has long been recognised as a country of high educational standards. RTU Bachelor, Master and Doctoral degrees are recognised across the globe. RTU has been awarded European University Quality Mark and EU Diploma Supplement Label.\r\nValue\r\nLatvian education is accessible to international students due to its affordable tuition fees and moderate living costs. The tuition fees and other expenses for those who study in Latvia are low compared to most other European countries.\r\nWelcome\r\nLatvia is a country noted for its safety and religious/cultural tolerance. Open arms welcome all RTU students, be they from across the world or from a neighbouring country. Support is provided throughout the whole enrolment and study period.\r\nMore information for foreign students'),
(3, 'Turiba', 'Zemgales priekšpils?ta, R?ga, LV-1058', '\\images\\event.c.jpg', 'Turiba University provides the possibility of studying together with students from all over the world or to go abroad for exchange of experience! Turiba University students represent 26 countries globally and they have applied for studies at all study levels delivered by the University by gaining expertise under the Bachelor, Master and Doctoral Degree study programmes.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD UNIQUE KEY `news_id` (`news_id`),
  ADD UNIQUE KEY `cm_id` (`cm_id`);

--
-- Indexes for table `uni`
--
ALTER TABLE `uni`
  ADD PRIMARY KEY (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uni`
--
ALTER TABLE `uni`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
