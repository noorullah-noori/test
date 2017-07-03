-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 09:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `time` varchar(10) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `agenda` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `time`, `date`, `agenda`) VALUES
(3, '12:57', '2017-06-22', 'Agenda definition, a list, plan, outline, or the like, of things to be done, matters to be acted or voted upon, etc.: The chairman says we have a lengthy agenda this ...');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `fb` varchar(45) NOT NULL,
  `twitter` varchar(45) NOT NULL,
  `g_plus` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `fb`, `twitter`, `g_plus`, `phone`, `fax`) VALUES
(1, 'changed', 'sdjg', 'kddjg', 'dgj', 'kdfgj', 'kgj');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(120) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `type` enum('event','seminar') DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `type`, `image`) VALUES
(5, 'first seminar', 'something', 'seminar', '5.png'),
(6, 'First Event', 'From the PowerPoint FAQ: Make animated text appear line by line (build slides) ... PPT2HTML exports HTML even from PowerPoint 2010 and 2013, gives you full ... Click the text box to select it; Choose Slide Show, Custom Animation to bring up ... Set \"Group by\" to either the number of outline levels in your paragraphs or ...', 'event', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `title` varchar(45) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `expiry_date` varchar(10) NOT NULL,
  `description` varchar(2084) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `responsibilities` varchar(2084) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `expiry_date`, `description`, `responsibilities`) VALUES
(3, 'Web Developer', '2016-01-01', 'Something', '1. Bachelors’ degree or diploma in Computer Science, Education or related field; \r\n2. Excellent coordination and oral communication skills;\r\n3. Experience in organizing workshops;\r\n4. Experience in providing presentation, any kind of training or teaching;\r\n5. Experience in report writing;\r\n6. Experience in M&E;\r\n7. Excellent written communication skills in English, Pashto / Dari;\r\n8. Good computer skills (Typing, Word, Excel and Internet);\r\n9. Ability to learn quickly the usage of educational application through smart TV, mobile;\r\n10. Strong interpersonal and facilitation skills;\r\n11. Excellent interpersonal relationship skills and ability to work with schools;\r\n12. Ability and willingness to work under pressure as part of a professional team; and\r\n13. Must be willing to travel to different schools in the same province without Maharam.'),
(4, 'Project Manager', '2018-10-30', 'I know this isn\'t a version problem, but could not tell you what it actually is. I just ran across the same issue on my localhost. It worked in one app, not the other, running php5.59.\r\n\r\nInspect the code, it is probably something like this:', 'Semantic is designed completely with em making responsive sizing a breeze. Design variations built into elements allow you to make the choice how content adjusts for tablet and mobile.');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `time` varchar(10) DEFAULT NULL,
  `date` varchar(16) NOT NULL,
  `meeting_title` varchar(80) DEFAULT NULL,
  `agenda` varchar(250) DEFAULT NULL,
  `type` enum('meeting_minutes','session') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `time`, `date`, `meeting_title`, `agenda`, `type`) VALUES
(4, '10:20', '2015-02-02', 'something', 'abcd\r\n', 'session');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'shaheer', 'shaheer@gmail.com', 'my first message', 'this is a sample message\r\n						');

-- --------------------------------------------------------

--
-- Table structure for table `national_participants`
--

CREATE TABLE `national_participants` (
  `id` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `member_since` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `details` varchar(1024) DEFAULT NULL,
  `image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `national_participants`
--

INSERT INTO `national_participants` (`id`, `name`, `member_since`, `email`, `details`, `image`) VALUES
(4, 'ahmad', '2014-10-28', 'shaheer@gmail.com', 'something about us', '4.png'),
(5, 'ahmad', '2017-11-30', 'ahmad@gmail.com', 'something else', '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(750) NOT NULL,
  `short_desc` varchar(1024) NOT NULL,
  `description` varchar(2084) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `short_desc`, `description`, `created_date`, `image`) VALUES
(8, 'Venezuelan dad makes plea to president', 'A man whose son was killed during an opposition protest in Venezuela\'s capital Caracas has made a personal plea to President Nicolás Maduro.', 'David Vallenilla\'s 22-year-old son, also called David, was shot by military police on Thursday.\r\nMr Vallenilla says he once worked with the president on Caracas\' transport system, and called on his \"former colleague\" to clear his son\'s name.\r\nThe president has said firearms must not be used on protesters.\r\n\"I want to speak to my former colleague of the Caracas Metro,\" Mr Vallenilla told a group of reporters outside the morgue.\r\n\"Nicolás Maduro, you know that we worked together, I\'m Supervisor Vallenilla.\"\r\nHe said he used to be Mr Maduro\'s boss, although the past working relationship between them has not yet been confirmed.', '2017-06-24', '8.jpg'),
(9, 'another newsq', 'something else', 'what is this', '2017-06-20', '9.png'),
(10, 'The Senate health care bill is proof: Trumpism isn\'t populism', 'Caracas, June 27, 2017 (venezuelanalysis.com) – Venezuelan President Nicolas Maduro has denounced a “terrorist attack” on the offices of the Supreme Court and Justice Ministry in downtown Caracas late Tuesday afternoon.\r\n\r\nAccording to the head of state, the attack was perpetrated by a member of the Venezuelan forensic police (CICPC) piloting a stolen police helicopter.', 'The assailants reportedly circled the Supreme Court, opening fire and dropping at least four hand grenades, one of which did not explode. The president indicated that the attack coincided with a “social function” in the Supreme Court, which he said could have resulted in “dozens of dead or injured”. \r\n\r\nThe helicopter also opened fire on the nearby offices of the Justice Ministry. No injures have been reported in either facility. Authorities have yet to capture the helicopter, identified as a Airbus Bolkow 105, which was allegedly stolen from the La Carlota Air Force base in eastern Caracas.\r\n\r\nPhotos of the incident show the helicopter with a banner that', '2017-06-13', '10.png'),
(11, 'Venezuela: Soldier Killed, Three More Burned Alive', 'Photos of the incident show the helicopter with a banner that reads “350 Liberty”, in reference', 'Liberty”, in reference to the article of the Venezuelan constitution enshrining the right to resist any regime that infringes on democratic values or human rights. The Venezuelan opposition has repeatedly invoked Article 350 in the course of its twelve weeks of violent anti-government protests that have resulted in over 85 deaths to date. \r\n\r\nThe alleged perpetrator has been identified as CICPC officer Oscar Alberto Perez, who previously served as head of areal operations of the police body’s aerial division. Perez is also an actor who starred in the b-rate Venezuelan movie “Muerte Suspendida” in 2015.', '2017-06-18', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(2084) DEFAULT NULL,
  `pdf` varchar(20) DEFAULT NULL,
  `type` enum('irm','cp','nap','sar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `title`, `description`, `pdf`, `type`) VALUES
(13, 'Webinar with Civil Society Candidates Shortlisted for the OGP Steering Committee ', 'Semantic has integrations with React, Angular, Meteor, Ember and many other frameworks to help organize your UI layer alongside your application logic.', '13.pdf', 'sar');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `title` varchar(600) DEFAULT NULL,
  `description` varchar(2084) DEFAULT NULL,
  `author` varchar(32) DEFAULT NULL,
  `date` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `description`, `author`, `date`) VALUES
(3, 'Webinar with Civil Society Candidates Shortlisted for the OGP Steering Committee ', 'The Open Government Partnership webinars to meet the candidates shortlisted for the two civil society seats on the OGP Steering Committee are now over. You can watch of recording of the April 13 event here.  The Selection Committee selected 9 finalists from a long list of 29 nominations received by the OGP Support Unit.\r\n                                            ', 'Shaheer', '2015-11-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `national_participants`
--
ALTER TABLE `national_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `national_participants`
--
ALTER TABLE `national_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
