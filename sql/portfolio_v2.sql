-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2018 at 08:08 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `portfolio_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `nf2_achievement`
--

CREATE TABLE `nf2_achievement` (
  `achievement_id` int(11) NOT NULL,
  `achievement` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `datetime` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf2_achievement`
--

INSERT INTO `nf2_achievement` (`achievement_id`, `achievement`, `url`, `datetime`, `status`) VALUES
(1, '23rd rank global in CodeVita 2016, 1\r\nst round organised by TCS.', 'https://nazishfraz.co.nf/data/tcs_codevita/', '2016-08-02', 1),
(2, '1st rank (global) in CodeCrunch organized by Government Engineering college.', 'https://www.hackerrank.com/contests/code-crunch/leaderboard', '2016-02-20', 1),
(3, '3rd rank (college) in CDER2015 codechef', 'https://www.codechef.com/rankings/CDER2015?filterBy=Institution%3DWest%20Bengal%20University%20of%20Technology&order=asc&sortBy=rank', '2015-03-09', 1),
(4, '3rd rank (college) in CDQT2015 codechef', 'https://www.codechef.com/rankings/CDQT2015?filterBy=Institution%3DWest%20Bengal%20University%20of%20Technology&order=asc&sortBy=rank', '2015-04-11', 1),
(5, 'Published my name in WBUT codechef campus chapter in March-2015.', 'https://www.facebook.com/WBUTcoders/posts/1406568236319229', '2015-03-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nf2_certificate`
--

CREATE TABLE `nf2_certificate` (
  `certificate_id` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `event` varchar(500) NOT NULL,
  `website` varchar(500) NOT NULL,
  `url` varchar(1000) NOT NULL DEFAULT '#',
  `license` varchar(500) NOT NULL DEFAULT 'NA',
  `image` varchar(500) NOT NULL DEFAULT 'default.jpg',
  `datetime` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf2_certificate`
--

INSERT INTO `nf2_certificate` (`certificate_id`, `course`, `event`, `website`, `url`, `license`, `image`, `datetime`, `status`) VALUES
(1, 'Introduction to HTML5', 'University of Michigan', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/AC2CD5VW9CF7', 'AC2CD5VW9CF7', 'um_html.jpg', '2016-03-14', 1),
(2, 'Object Oriented Programming in Java', 'University of California, San Diego', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/UHFCRJ6C98T7', 'UHFCRJ6C98T7', 'ucsd_java.jpg', '2016-03-18', 1),
(3, 'Programming for Everybody, PYTHON', 'University of Michigan', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/LBR2RJKDBQWZ', 'LBR2RJKDBQWZ', 'um_python.jpg', '2016-03-11', 1),
(4, 'Python Data Structures', 'University of Michigan', 'Coursera', 'https://www.coursera.org/account/accomplishments/certificate/CWVGFPMC4G74', 'CWVGFPMC4G74', 'um_python_ds.jpg', '2016-03-12', 1),
(5, 'Introduction to Programming with Java', 'Universidad Carlos III de Madrid', 'Edx', 'https://courses.edx.org/certificates/75d4b923207b45e3afb7ad0cdeee6b72', '75d4b923207b45e3afb7ad0cdeee6b72', 'ucm_java.jpg', '2016-03-15', 1),
(6, 'Introduction to C++', 'Microsoft', 'Edx', 'https://courses.edx.org/certificates/5dfcdc2b4708439990baf2cbb2c8a1b8', '5dfcdc2b4708439990baf2cbb2c8a1b8', 'microsoft_cpp.jpg', '2016-03-16', 1),
(7, 'Introduction to Python for Data Science', 'Microsoft', 'Edx', 'https://courses.edx.org/certificates/d0da00d373ea48c4a5a78cb655584668', 'd0da00d373ea48c4a5a78cb655584668', 'microsoft_python.jpg', '2016-03-15', 1),
(8, 'Programming Basics', 'IITBombayX', 'Edx', 'https://courses.edx.org/certificates/a4d8c5ed113c4354b0b515c93dd1bcf5', 'a4d8c5ed113c4354b0b515c93dd1bcf5', 'iit_cpp.jpg', '2016-03-15', 1),
(9, 'Certification of Participation', 'CodeVita 2016', 'TCS', '#', 'NA', 'part_codevita.jpg', '2016-07-29', 1),
(10, 'Certification of Participation', 'Hackcamp', 'IBM', '#', 'NA', 'part_ibm_hackcamp.jpg', '2016-08-13', 1),
(11, 'Certification of Merit', 'Internship', 'Internshala', '#', 'NA', 'part_internshala.jpg', '2016-07-02', 1),
(12, 'Certification of Participation', 'Snackdown 2016', 'Codechef', '#', 'a3641e0ff22ee40aa0dab0e822d55b9a', 'part_snackdown16.jpg', '2016-08-12', 1),
(13, 'Certification Of Participation', 'Cryptography', 'IIT Kharagpur', '#', 'NA', 'part_crypto.jpg', '2017-01-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nf2_github`
--

CREATE TABLE `nf2_github` (
  `github_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf2_github`
--

INSERT INTO `nf2_github` (`github_id`, `name`, `detail`, `url`, `skill`, `start`, `end`, `status`) VALUES
(1, 'Unit Converter', 'Unit Converter allows you to convert any unit to any other compatible unit type. This is a php library. Just include this library in your project and you are all set. Just call a function convert() which takes some parameter and this function will convert your input. You can see all the units, add custom unit and edit the existing units. In this library lots of unit types are there like length, mass, area and so on. For detail just read the documentation of this file.', 'https://nfraz007.github.io/UnitConverter/', 'PHP', '2017-05-17 00:00:00', '2017-05-18 00:00:00', 1),
(2, 'Number To Word', 'This is a php script which basically convert a input number to word form. Add this library into your project and just call a function convert(), thats it. Read the documentation for more detail.', 'https://nfraz007.github.io/NumberToWord/', 'PHP', '2017-05-01 00:00:00', '2017-05-02 00:00:00', 1),
(3, 'Measure Attention', 'B.Tech Project in developing android application to monitor a subject attention using a set of games. This application can be used to study a subject behavior in cognitive Psychology.', 'https://github.com/deathcod/measure_Attention', 'HTML,W3css,JQuery,JSON,PHP,Mysql,Java,xml', '2017-01-01 00:00:00', '2017-06-10 00:00:00', 1),
(4, 'Blood Bank', 'A simple blood bank project asked in my internshala job assessment test', 'https://nfraz007.github.io/blood_bank/', 'HTML,CSS,JQuery,JSON,PHP,Mysql', '2017-07-15 00:00:00', '2017-07-18 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nf2_internship`
--

CREATE TABLE `nf2_internship` (
  `internship_id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf2_internship`
--

INSERT INTO `nf2_internship` (`internship_id`, `company`, `position`, `detail`, `start`, `end`, `location`, `status`) VALUES
(1, 'Goyal Softwares', 'Web Developer', 'I worked on development of a travelling website in various area such as Coupon Management System, Complete admin panel creation, andoroid application API development etc. Moreover I also developed an automated backup code (in php) that helped the company save a lot of time (1 hour each day) and fetched me many appreciations.', '2017-01-21', '2017-03-21', 'Kolkata', 1),
(2, 'CareODrive Technologies Pvt. Ltd.', 'Web App Developer', 'I worked on a startup project of CareODrive in the development of their web services. Being an expert in backend programming, I developed their complete admin panel interface. I also helped in developing user webpage and its android application. I also gave first hand ideas to the company that significantly improved the user experience.', '2016-07-02', '2016-09-02', 'Kolkata', 1),
(3, 'DoSelect', 'Freelance Problem Setter', 'Fueled by my desire for programming, I also work part-time as a freelance problem setter. Creating innovative ideas and implementing them is my passion. With my creative programming skills, I create different types of programming problems which are used for hiring and practice purposes. For example, algorithmic and tutorial type programming problems.', '2016-07-02', '0000-00-00', 'Online', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nf2_project`
--

CREATE TABLE `nf2_project` (
  `project_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL DEFAULT '#',
  `skill` varchar(1000) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf2_project`
--

INSERT INTO `nf2_project` (`project_id`, `name`, `detail`, `url`, `skill`, `start`, `end`, `status`) VALUES
(1, 'OnlineBanking', 'This was our group academic project in 3rd year where we created a model website of OnlineBanking. We developed both user and admin panel for this website to facilitate online transactions between the user and the bank. We incorporated various security measures required for a safe transaction. It was a two step verification process that involved CAPTCHA verification and admin verification.<br>With my recent exposure to operations of payment gateway systems like PayTM, PayPal, Instamojo etc, now I am well equipped to implement and handle projects on OnlineBanking services.', '#', 'HTML,CSS,Javascript,PHP,MySql', '2016-04-01', '2016-05-01', 1),
(2, 'Portfolio V1.0', 'My personal portfolio website which I have created to showcase my projects in one place.', 'https://nfraz.000webhostapp.com', 'HTML,CSS,Javascript,Bootstrap', '2016-04-01', '2016-05-01', 1),
(3, 'Mini Calculator', 'Simple android application with stylish interface and all mathematical functions.', 'https://drive.google.com/open?id=0B6kUEG-brbx1UWVBcmI3RTU1LVU', 'Java,XML', '2015-05-01', '2015-06-01', 1),
(4, 'Tic Tac Toe', 'This is a simple black and white game for android for single as well as multiplayer mode.', 'https://drive.google.com/open?id=0B6kUEG-brbx1eWRaMDlkODl2TUU', 'Java,XML', '2015-04-01', '2015-05-01', 1),
(5, 'Wryton', 'This was also a self project which I undertook after I got an idea to build a website where users can share their life experiences. Many of us go through many phases in life and gain experience over time. On this website users can share their life experience which would help and guide  others when they are going through that phase in life. In this era of technology, this website will definitely be useful for youngsters and adults to face anxiety and depression.', 'http://nazishfraz.co.nf/wryton', 'HTML,CSS,Bootstrap,W3css,Javascript,JQuery,PHP,MySql', '2017-01-01', '2017-01-15', 1),
(6, 'MoneyBags', 'It was a self made project which I completed in just one week\'s time. I made this website as I realized how difficult it can be to manage one\'s expenses like how much do I owe somebody, how much money I will get from others etc. Moreover with students and businessmen, It can be really difficult to keep track where money is coming and going. With the help of this website users can manage their expenses carefully and adopt budget measures to control money.', 'http://moneybags.co.nf', 'HTML,CSS,Materialize,Javascript,JQuery,JSON,PHP,MySql', '2017-04-03', '2017-04-10', 1),
(7, 'Portfolio V2.0', 'I have made my portfolio website myself in just 3 days. Initially I had made a portfolio but its limitations was that it was totally static. So in this updated portfolio I completely revamped the interface and made it fully dynamic.', 'http://nazishfraz.co.nf/portfolio_v2', 'HTML,CSS,Materialize,Javascript,JQuery,JSON,PHP,MySql', '2017-04-01', '2017-04-04', 1),
(9, 'List All', 'I created this website for my parents and other middle age people to help them in internet browsing. Since they would not know the names of all the important website at first, they would have had hard time working with internet. In this website I created a database of all the important and frequently visited  websites and arranged them properly using keywords. For example if they want to read news headline they just have to search using keyword "news" and links for various website will appear. Similarly they can do shopping, recharge etc using this website very easily. The interface is also very easy to understand. The user and admin panel both created by me and it is constantly being managed and updated. Hence all the user has to do is remember the name of my website and enjoy browsing.', 'http://nazishfraz.co.nf/list_all', 'HTML,CSS,Materialize,Javascript,JQuery,JSON,PHP,MySql', '2017-03-01', '2017-03-15', 1),
(10, 'Canteen', 'It is a canteen management website. There are both user and admin panel. Admin can add/remove/edit items in menu. Admin can also add some credit to the user so that they can order something. Admin can see every order , search and filter order and accept/reject the order. User can add/remove any item to their cart and buy their order at any time. User can see their order and filter it.', 'http://nazishfraz.co.nf/canteen', 'HTML,CSS,Materialize,Javascript,JQuery,JSON,PHP,MySql', '2017-02-01', '2017-02-15', 1),
(11, 'Unit Converter', 'Unit Converter allows you to convert any unit to any other compatible unit type. This is a php library. Just include this library in your project and you are all set. Just call a function convert() which takes some parameter and this function will convert your input. You can see all the units, add custom unit and edit the existing units. In this library lots of unit types are there like length, mass, area and so on. For detail just read the documentation of this file.', 'https://nfraz007.github.io/UnitConverter/', 'PHP', '2017-05-17', '2017-05-18', 1),
(12, 'Number To Word', 'This is a php script which basically convert a input number to word form. Add this library into your project and just call a function convert(), thats it. Read the documentation for more detail.', 'https://nfraz007.github.io/NumberToWord/', 'PHP', '2017-05-01', '2017-05-02', 0),
(13, 'Measure Attention', 'B.Tech Project in developing android app to monitor a subject attention using a set of games. This app can be used to study a subject behavior in cognitive Psychology.', 'https://github.com/deathcod/measure_Attention', 'HTML,W3css,JQuery,JSON,PHP,Mysql,Java,xml', '2017-01-01', '2017-06-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nf2_skill`
--

CREATE TABLE `nf2_skill` (
  `skill_id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nf2_skill`
--

INSERT INTO `nf2_skill` (`skill_id`, `skill`, `status`) VALUES
(1, 'C', 1),
(2, 'C++', 1),
(3, 'Java', 1),
(4, 'Python', 1),
(5, 'Android', 1),
(6, 'Visual Basic 4.0', 1),
(7, 'HTML', 1),
(8, 'CSS', 1),
(9, 'Bootstrap', 1),
(10, 'Materialize', 1),
(11, 'Javascript', 1),
(12, 'JQuery', 1),
(13, 'AJAX', 1),
(14, 'Angular JS', 1),
(15, 'JSON', 1),
(16, 'Matlab', 1),
(17, 'PHP', 1),
(18, 'MySql', 1),
(19, 'Oracle', 1),
(20, 'W3css', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nf2_achievement`
--
ALTER TABLE `nf2_achievement`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `nf2_certificate`
--
ALTER TABLE `nf2_certificate`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `nf2_github`
--
ALTER TABLE `nf2_github`
  ADD PRIMARY KEY (`github_id`);

--
-- Indexes for table `nf2_internship`
--
ALTER TABLE `nf2_internship`
  ADD PRIMARY KEY (`internship_id`);

--
-- Indexes for table `nf2_project`
--
ALTER TABLE `nf2_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `nf2_skill`
--
ALTER TABLE `nf2_skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nf2_achievement`
--
ALTER TABLE `nf2_achievement`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nf2_certificate`
--
ALTER TABLE `nf2_certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `nf2_github`
--
ALTER TABLE `nf2_github`
  MODIFY `github_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nf2_internship`
--
ALTER TABLE `nf2_internship`
  MODIFY `internship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nf2_project`
--
ALTER TABLE `nf2_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `nf2_skill`
--
ALTER TABLE `nf2_skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;