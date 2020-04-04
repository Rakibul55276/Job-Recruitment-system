-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 10:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `update`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `photo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `email`, `photo`) VALUES
(1, 'admin', '1111111', 'irakibul55', 'profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `comment`, `post_time`) VALUES
(1, 'Nex55', 'Tutoring students on part time basis.\nTo work near BDC area.\nNeed own transport.\nHouse to house sometimes.\nSTPM or fresh graduates are encouraged to apply ï¿½ ï¿½ï¿½', '2019-11-22 14:22:40'),
(2, 'Nex55', 'Please whats app me: +60128485987', '2019-11-22 14:23:06'),
(3, 'rakib21', 'Hello, Sir.', '2019-11-22 14:23:27'),
(4, 'rakib21', 'I am available.', '2019-11-22 14:23:37'),
(5, 'rakib21', 'I already whats app you.', '2019-11-22 14:23:51'),
(6, 'rakib21', 'please check.', '2019-11-22 14:23:59'),
(7, 'rakib21', 'Hello', '2019-12-12 18:30:25'),
(8, 'Nex55', 'I am looking for someone who can work in the BCCK event in 21 DEC. If anyone available ping me. ', '2019-12-17 16:34:50'),
(9, 'rakib21', 'Hi sir, I am available. ', '2019-12-17 16:35:29'),
(10, 'Nex55', 'please ping me +60128485987', '2019-12-17 16:35:42'),
(11, 'rakib21', 'Okay.', '2019-12-17 16:35:49'),
(12, 'rakib21', 'vvf', '2019-12-18 07:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `chat_user`
--

CREATE TABLE `chat_user` (
  `id` int(11) NOT NULL,
  `regfullname` varchar(200) NOT NULL,
  `regusername` varchar(200) NOT NULL,
  `regpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_user`
--

INSERT INTO `chat_user` (`id`, `regfullname`, `regusername`, `regpassword`) VALUES
(1, 'Rakibul Islam', 'rakib21', '111111'),
(2, 'Habibur', 'Nex55', '111111'),
(3, 'Neoun AI', 'neoun21', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(1) NOT NULL,
  `post_id_c` int(10) NOT NULL,
  `user_id_c` int(10) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id_c`, `user_id_c`, `comment`, `comment_time`) VALUES
(1, 7, 24, 'I already applied.', '2019-11-22 14:00:50'),
(2, 2, 24, 'I Liked this Job.', '2019-11-22 14:02:39'),
(4, 1, 24, 'Applyed. ', '2019-12-13 19:45:51'),
(5, 13, 26, 'Please check your email.', '2019-12-17 15:37:10'),
(6, 13, 24, 'Hi Sir, Please check your email.', '2019-12-18 05:45:37'),
(7, 9, 24, 'fEEDBACCK', '2019-12-18 07:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `defaults`
--

CREATE TABLE `defaults` (
  `post_id` int(1) NOT NULL,
  `usr_id_p` int(10) NOT NULL,
  `status_title` varchar(200) NOT NULL,
  `status` varchar(2000) NOT NULL,
  `status_image` varchar(200) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defaults`
--

INSERT INTO `defaults` (`post_id`, `usr_id_p`, `status_title`, `status`, `status_image`, `status_time`) VALUES
(1, 1, 'Content review Analyst - Process Executive', 'Company Name:Cognizant Technology Solutions Asia Pacific Pte. Ltd.\r\nEmail:irakibul550@gmail.com\r\nWe are hiring for Content review analyst - process executive professionals for Cognizant Malaysia. Acco', '', '2019-11-22 12:52:56'),
(2, 1, 'Trainee Software Engineer (Malaysian Only)', 'Fresh Graduates\r\nEmail:irakibul550@gmail.com\r\nSkills: Fresh Graduate, Object-Oriented Programming.', '', '2019-11-22 12:55:50'),
(3, 1, 'PHP Developer', 'Email: irakibul550@gmail.com\r\n\r\nJob Description\r\n\r\nWe are looking for a Senior PHP Developer responsible for implementing back-end solutions. Your primary focus will be the development of all server-s', '', '2019-11-22 13:00:38'),
(4, 1, 'Web Development', 'Email:(irakibul550@gmail.com)\r\n\r\n\r\n\r\nJob Description\r\n\r\nWe are looking for a Senior PHP Developer responsible for implementing back-end solutions. Your primary focus will be the development of all server-side logic, definition and maintenance of the central information system, and ensuring high performance and responsiveness to requests from the front-end. You will also be responsible for integrating the front-end elements built by your co-workers into the application. Therefore, a basic understanding of front-end technologies is necessary as well.\r\nResponsibilities\r\nÂ·         Integration of user-facing elements developed by front-end developers\r\nÂ·         Build efficient, testable, and reusable PHP modules\r\nÂ·         Solve complex performance problems and architectural challenges\r\nÂ·         Integration of data storage solutions \r\nSkills And Qualifications\r\nÂ·         Strong knowledge of Symfony PHP web framework.\r\nÂ·         Understanding the fully synchronous behavior of PHP\r\nÂ·         Understanding of MVC design patterns\r\nÂ·         Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3\r\nÂ·         Knowledge of object oriented PHP programming\r\nÂ·         Understanding accessibility and security compliance \r\nÂ·         Strong knowledge of the common PHP or web server exploits and their solutions\r\nÂ·         Understanding fundamental design principles behind a scalable application\r\nÂ·         User authentication and authorization between multiple systems, servers, and environments\r\nÂ·         Integration of multiple data sources and databases into one system\r\nÂ·         Familiarity with limitations of PHP as a platform and its workarounds\r\nÂ·         Creating database schema that represent and support business processes\r\nÂ·         Familiarity with SQL/NoSQL databases and their declarative query languages\r\nÂ·         Proficient understanding of code versioning tools, preferably Git\r\nÂ·         Familiarity with Oracle Database is a p', '', '2019-11-22 13:07:21'),
(5, 1, 'Marketing Specialist', 'Establishing goals and objectives in order to reach customers in the Hospitality sector through appropriate marketing channels (socialâ€¦Establishing goals and objectives in order to reach customers in the Hospitality sector through appropriate marketing channels (social media, digital and traditional). Developing and implementing.', '', '2019-11-22 13:13:47'),
(6, 2, 'Marketing Assistant (Advanced Power Point User)', 'Job Description\r\nKEY RESULTS AREAS\r\n \r\nÂ· To coordinate with the sales & group marketing team on various marketing activities viz., collate information relating to product technical data, product reference to design corporate/product brochures; develop and execute the marketing plan, coordinate with external agencies for advertising, promotional items, PR events, brief agents and proof read the final product /outlook; manage social media (website content, articles, etc.,).', '', '2019-11-22 13:36:32'),
(7, 2, 'Java Developer(front-end/ Backend)', 'Skills\r\nEducation\r\nUG :Any Graduate in Any Specialization, Graduation Not Required\r\nPG :Any Postgraduate in Any Specialization, Post Graduation Not Required\r\nDoctorate :Any Doctorate in Any Specialization, Doctorate Not Required.', '', '2019-11-22 13:48:50'),
(8, 1, 'Content review Analyst - Process Executive', 'ext matter of a document or publication in any form. Content is both information and communication: the sum total of the freshness, readability, relevancy, and usefulness of the information presented, and the manner in which it is presented.\r\n\r\nRead more: http://www.businessdictionary.com/definition/content.html', '', '2019-12-12 10:34:37'),
(9, 6, 'Software Programmer', 'I looking for a software developer.', '', '2019-12-17 15:22:53'),
(10, 6, 'Software Programmer', 'VACANCY KUCHING, SARAWAK AREA.\r\n\r\nInterested candidate are encouraged to apply.\r\n\r\nKindly email complete resume.\r\n', '', '2019-12-17 15:23:09'),
(11, 6, 'Business Development Executive', 'Able to create new website using CPanel\r\nAble to create ecommerce website.\r\n', '', '2019-12-17 15:23:13'),
(12, 6, 'Business Development Executive', 'dhfkjdhgjkhffkjhgjkfhg\r\nfkjghjfkhgjkhfgjkhfgjkfhjkg\r\ndfhjkdhfjkhdjkfhjkhdjkhfkhd.\r\n>fdjkhfkjdhfjhdfjkdshfkj\r\nfmbdfbdbf>dkfjkdhkjfh\r\n.fdfhkdhfhds', '', '2019-12-17 15:23:16'),
(13, 6, 'Accounting Clerk', 'Job Duties\r\n\r\nPerform any combination of the following task:-\r\n- Compiles, sorts and files documents substantiating business transactions.\r\n- Post business transactions, such as income and payments, to an accounting software\r\n- Verify recorded transactions to supporting records\r\n- Issue and verify invoices, payment vouchers, cheque and account statements\r\n- Reconcile bank statements, debtorsâ€™ statement and creditorsâ€™ statement\r\n- Other administrative task as assigned.\r\n', '', '2019-12-17 15:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `usr_id` int(10) NOT NULL,
  `company` varchar(100) NOT NULL,
  `c_type` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `language` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`usr_id`, `company`, `c_type`, `username`, `email`, `image`, `website`, `password`, `language`, `about`) VALUES
(1, 'NEOUN AI', 'IT Company', 'NEOUN21', 'tipu.luc.my@gmail.com', 'download (2).jpg', 'www.neuon.ai.com', 'tipu123', 'English, Malay.', 'This is an IT based Company Located in Kuching.'),
(2, 'Byparts sdn. Bhd.', 'Parts Company.', 'Byparts', 'raton052800@gmail.com', 'download (2).jpg', 'www.byparts.com', 'byparts123', 'English, Malay.', 'This is car parts Company,\r\nEmployee 1-50,\r\nLocation Kuching.'),
(3, 'Google ', 'Search engine', 'google', 'mortuzaminhaz@gmail.com', 'images.jpg', 'www.google.com', 'google123', 'English, Malay.', 'This is one of the branch of Google,\r\nLocated in Kuching.'),
(4, 'E-Marketting', 'Online Marketting', 'EMRK', 'ewalidkhan@gmail.com', 'download (1).jpg', 'www.emarketting.com', 'marketting123', 'English, Malay.', 'This is a Marketting Company,\r\nLocated in Kuching.'),
(5, 'RHB bank sdn bhd', 'Bank', 'RHBBNK', 'arafinrafe90@gmail.com', 'download.jpg', 'www.rhbgroup.com', 'rhbbank@12', 'English, Malay.', 'This is RHB branch,\r\nLocated unisqure, Kota samaahan.'),
(6, 'Convep Mobilogy Sdn Bhd.', 'AI ', 'convep', 'fattt11000@gmail.com', '2NNDTLVKBCNOLM26OYRTCUQLQI.jpg', 'www.conveb.com', 'conveb', 'English, Malay.', 'Our desire is to see Malaysia, especially our homeland, Sarawak thrive with the help of AI. The adoption of AI allows us to perform more than we are capable of and it creates opportunities for us to improve our quality of life.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(1) NOT NULL,
  `usr_id_p` int(10) NOT NULL,
  `status_title` varchar(200) NOT NULL,
  `status` varchar(2000) NOT NULL,
  `status_image` varchar(200) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `usr_id_p`, `status_title`, `status`, `status_image`, `status_time`) VALUES
(1, 1, 'Content review Analyst - Process Executive', 'Company Name:Cognizant Technology Solutions Asia Pacific Pte. Ltd.\r\nEmail:irakibul550@gmail.com\r\nWe are hiring for Content review analyst - process executive professionals for Cognizant Malaysia. ', '', '2019-11-22 13:33:08'),
(2, 1, 'Trainee Software Engineer (Malaysian Only)', 'Fresh Graduates\r\n\r\nSkills: Fresh Graduate, Object-Oriented Programming.', '', '2019-11-22 13:34:10'),
(3, 1, 'PHP Developer', '\r\n\r\nJob Description\r\n\r\nWe are looking for a Senior PHP Developer responsible for implementing back-end solutions. Your primary focus will be the development.', '', '2019-11-22 13:33:48'),
(5, 1, 'Marketing Specialist', 'Establishing goals and objectives in order to reach customers in the Hospitality sector through appropriate marketing channels (socialâ€¦Establishing goals and objectives in order to reach customers in the Hospitality sector through appropriate marketing channels (social media, digital and traditional). Developing and implementing.', '', '2019-11-22 13:13:47'),
(6, 2, 'Marketing Assistant (Advanced Power Point User)', 'Job Description:\r\nKEY RESULTS AREAS\r\n \r\nÂ· To coordinate with the sales & group marketing team on various marketing activities viz., collate information relating to product technical data, product reference to design corporate/product brochures; develop and execute the marketing plan, coordinate with external agencies for advertising, promotional items, PR events, brief agents and proof read the final product /outlook; manage social media (website content, articles, etc.,).', '', '2019-11-22 13:39:05'),
(7, 2, 'Java Developer(front-end/ Backend)', 'Skills:\r\nEducation\r\nUG :Any Graduate in Any Specialization, Graduation Not Required\r\nPG :Any Postgraduate in Any Specialization, Post Graduation Not Required\r\nDoctorate :Any Doctorate in Any Specialization, Doctorate Not Required.', '', '2019-11-22 13:49:31'),
(9, 6, 'Software Programmer', 'I looking for a software developer.', '', '2019-12-17 15:22:52'),
(10, 6, 'Software Programmer', 'VACANCY KUCHING, SARAWAK AREA.\r\n\r\nInterested candidate are encouraged to apply.\r\n\r\nKindly email complete resume.\r\n', '', '2019-12-17 15:23:08'),
(11, 6, 'Business Development Executive', 'Able to create new website using CPanel\r\nAble to create ecommerce website.\r\n', '', '2019-12-17 15:23:12'),
(13, 6, 'Accounting Clerk', 'Job Duties\r\n\r\nPerform any combination of the following task:-\r\n- Compiles, sorts and files documents substantiating business transactions.\r\n- Post business transactions, such as income and payments, to an accounting software\r\n- Verify recorded transactions to supporting records\r\n- Issue and verify invoices, payment vouchers, cheque and account statements\r\n- Reconcile bank statements, debtorsâ€™ statement and creditorsâ€™ statement\r\n- Other administrative task as assigned.\r\n', '', '2019-12-17 15:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `image`, `details`) VALUES
(28, 'goods', 'bilik_sewa_murah_di_kota_samarahan_dekat_uitm_unimas_farley_intan_everwin_1543475648_a6f55ff20.jpg', 'aaaaa'),
(37, 'Book', 'im2.jpg', '25'),
(40, 'Book', 'c_sharp_6.jpg', '35 RM'),
(41, 'Book', 'python.jpg', '25 RM'),
(42, 'Book', 'BFDJSBFB.png', '30 RM'),
(43, 'Book', '79880963_821696018303703_4048691749533515776_n.png', '25 rm'),
(44, 'Book', '79309158_2497601780513502_5960196597072527360_n.png', '30 rm'),
(45, 'Book', '79368754_2231927923766244_7727471443469926400_n.png', '30 RM');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `post_id` int(1) NOT NULL,
  `usr_id_p` int(10) NOT NULL,
  `status_title` varchar(200) NOT NULL,
  `status` varchar(2000) NOT NULL,
  `status_image` varchar(200) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`post_id`, `usr_id_p`, `status_title`, `status`, `status_image`, `status_time`) VALUES
(1, 6, 'Web Developer', 'Dear job seeker, Currently our company is looking for a Developer. If you have enough experience in PHP and MySql. Please send your updated resume to our company email.\r\nThank you.ff', '', '2019-12-18 07:16:31'),
(2, 1, 'Business Development Executive', 'Lokkokfjgkl', '', '2019-12-18 07:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `location` varchar(2000) NOT NULL,
  `website` varchar(200) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `profile` varchar(2000) NOT NULL,
  `skill` varchar(2000) NOT NULL,
  `work` varchar(2000) NOT NULL,
  `award` varchar(2000) NOT NULL,
  `language` varchar(2000) NOT NULL,
  `interest` varchar(2000) NOT NULL,
  `reference` varchar(2000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `email`, `phone`, `location`, `website`, `about`, `profile`, `skill`, `work`, `award`, `language`, `interest`, `reference`, `image`, `username`) VALUES
(1, 'Rakibul Islam', 'irakibul550@gmail.com', '60128485987', 'AddressKota-Samarahan Postal Code94300 CityKuching RegionSarawak,Malaysia', 'https://self.org.my', 'To contribute to superior project, gain experience and to pursue a challenging career and be a part of progressive organization that gives a scope to enhance my knowledge and utilizing my skills towar', ' Profiles\r\ntwitter\r\ninstagram', 'Web Development\r\nMaster\r\nHTML,CSS JavaScript,', 'December 2013 - Present\r\nSelf-employment sdn.bhd\r\n https://self.org.my\r\nSenior Web Developer\r\nSelf provides contacted web Development for rescue ops and protection services for high-profile people.\r\n\r', 'November 2014\r\nFriskies World Championship\r\n Fast Problem solving\r\nBeat 50 other programmer for the world champion holder of the loudest', 'English\r\nNative speaker', 'Wildlife\r\nProgramming Listening Music', 'References\r\n-The Three reputed employer', '55276.jpg', 'rakib123'),
(3, 'Rakibul Islam', 'irakibul550@gmail.com', '60128485987', 'AddressKota-Samarahan Postal Code94300 CityKuching RegionSarawak,Malaysia', 'www.emarketting.com', 'To contribute to superior project, gain experience and to pursue a challenging career and be a part of progressive organization that gives a scope to enhance my knowledge and utilizing my skills towards the growth of the organization.', 'To contribute to superior project, gain experience and to pursue a challenging career and be a part of progressive organization that gives a scope to enhance my knowledge and utilizing my skills towards the growth of the organization.', 'â€¢	Skilled in Full Stack Website Development with core languages (HTML, CSS, Bootstrap, JAVASCRIPT, PHP AND SQL).\r\nâ€¢	Skilled in WordPress Web Development and Design.\r\nâ€¢	Basic Software Development.\r\nâ€¢	Basics in Digital Marketing. \r\nâ€¢	Skilled in Programming Language (C, C++, JAVA, PHP, BASIC JavaScript, SQL, PROLOG)\r\nâ€¢	Basic Android App Development.\r\nâ€¢	Project Management, SRS, IT Management.\r\n', 'No work experience. ', 'Degree Title	Concentration/\r\nMajor	Institute Name	Result\r\nBachelor of Computer Science	Software Engineering	University of Malaysia Sarawak	CGPA 2.99/4.0\r\n(onward)\r\nHigher Secondary Certificate	Science	Kushtia Government College 	GPA 4.5/5.0\r\nSecondary School Certificate	Science	Tamirul Millat Kamil Madrasah	GPA 5.0/5.0\r\n', 'English, Arabic, Malay, Hindi, Bangla', 'I believe that I am a very passionate and hard-working. I am pretty much interested in learning new things\r\n by facing challenges which will make me find the inner thought of the work. I personally did some work to build \r\nmyself skilled in IT and Development. I have some experience in front-end development and some basic\r\nback-end development so far.\r\n', 'Name	: Dr. Halikul Lenando\r\nOrganization	: FCSIT, University of Malaysia Sarawak\r\nDesignation	: Deputy Dean (Student Affairs & Alumni)\r\nPhone	: +6082 58 3639\r\nEmail	: cool@unimas.my\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '48412395_1337126663095586_5065276320557039616_o.jpg', 'Minhaz');

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

CREATE TABLE `seekers` (
  `usr_id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(2500) NOT NULL,
  `birthdate` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `skills` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`usr_id`, `fname`, `username`, `email`, `image`, `password`, `address`, `birthdate`, `contact`, `gender`, `skills`) VALUES
(24, 'Rakibul Islam', 'rakib123', 'irakibul550@gmail.com', '12342488_972180569505762_8457260252229487072_n.jpg', '12345678', 'UNIMAS', '20/4/1997', '+60128485987', 'Male', 'Programming,\r\nSoftware Tester,\r\nPHP,\r\nMYSQL,\r\nHTML,\r\nCSS,\r\nBootstrap.'),
(25, 'Mortuza Minhaz', 'Minhaz', 'rakibunimas@gmail.com', '48412395_1337126663095586_5065276320557039616_o.jpg', 'minhaz123', 'UNIMAS', '20/4/1997', '+6012448822', 'Male', 'Programming,\r\nPython,\r\nData science,\r\nBig Data,\r\nCloud computing.'),
(26, 'Md Abu Shama', 'shama@12', 'shama01112608407@gmail.com', '36026536_445593435912638_604073754179403776_n.jpg', 'shama123', 'Kota-Samarahan.', '10/5/1997', '+60124488228', 'Male', 'Enterprenier,\r\nRecruter,\r\nMarketting Expert.'),
(27, 'Md Adnan', 'Adnan', 'adnankst@gmail.com', '34985170_991840877651857_8519062091108188160_o.jpg', 'adnan12', 'Kota-Samarahan.', '20/4/1997', '+60124488228', 'Male', 'getting a bit better,\r\nphysical operations,\r\nconfident ,\r\nexpert behaviors.'),
(28, 'Loknath', 'loknath', 'loknath@gmail.com', '14333610_1074924682597437_575793035627264518_n.jpg', 'loknath123', 'Kota-Samarahan.', '10/5/1997', '+60124488228', 'Male', 'Edexcel, \r\nand LCCI qualifications.'),
(29, 'Md Naim Hossain', 'Naim', '59414@siswa.unimas.my', '50314717_1193083994187370_482342015799918592_n (1).jpg', 'naim123', 'Kota-Samarahan.', '10/5/1997', '+60124488228', 'Male', 'Competence,\r\nElement,\r\nCS Engineer.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_user`
--
ALTER TABLE `chat_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `defaults`
--
ALTER TABLE `defaults`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seekers`
--
ALTER TABLE `seekers`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat_user`
--
ALTER TABLE `chat_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `defaults`
--
ALTER TABLE `defaults`
  MODIFY `post_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `usr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `post_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seekers`
--
ALTER TABLE `seekers`
  MODIFY `usr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
