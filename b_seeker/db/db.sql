CREATE TABLE IF NOT EXISTS `seekers` (
  `usr_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,

  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `seekers` (`usr_id`, `fname`, `username`, `email`, `image`, `password`) VALUES
(1, 'rahul','rahuls', 'rahul@gmail.com', 'New Doc 2017-02-26_2.jpg', '123456'),
(2, 'shafik','rahuld', 'shafik@gmail.com', '1888448_898409750258226_6887486239911226423_n.jpg', '123456');


-- --------------------------------------------------------

-- 
-- Table structure for table `employers`
-- 
CREATE TABLE IF NOT EXISTS `employers` (
  `usr_id` int(10) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,

  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `employers` (`usr_id`, `company`, `username`, `email`, `image`, `password`) VALUES
(1, 'rahul','rahuls', 'rahul@gmail.com', 'New Doc 2017-02-26_2.jpg', '123456'),
(2, 'shafik','rahuld', 'shafik@gmail.com', '1888448_898409750258226_6887486239911226423_n.jpg', '123456');

CREATE TABLE `admin` (
  `id` int(4) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,

 PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

  INSERT INTO `admin` (`id`, `username`,`pass`) VALUES 
(1, 'admin', '1111111');


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendingrequestsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id_p` int(10) NOT NULL,
  `status_title` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `status_image` varchar(200) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
  
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
--
-- Dumping data for table `accounts`
--

INSERT INTO `posts` (`post_id`,`usr_id_p` , `status_title`, `status`, `status_image`,`status_time`) VALUES
(1,1, 'joe', 'joe@joe.com','joe@joe.jpg',  'joe'),
(4,4, 'Jeremy', 'jeremyruta@isda.com','joe@joe.jpg',  'jeremy');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_id_p` int(10) NOT NULL,
  `status_title` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `status_image` varchar(200) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
  
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;




--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--


--
-- Indexes for table `requests`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;














--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id_c` int(10) NOT NULL,
  `user_id_c` int(10) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id_c`, `user_id_c`, `comment`, `comment_time`) VALUES
(2, 0, 0, 'DSKJAHFIUADS', '2017-06-10 20:46:12'),
(3, 3, 1, 'ASUDYFU', '2017-06-10 20:46:46'),
(4, 2, 1, 'DSKAYFUI', '2017-06-10 20:46:54'),
(6, 3, 1, 'dskjfhasdk', '2017-06-10 20:50:11'),
(8, 3, 1, 'xzkcvhkz', '2017-06-10 20:52:11'),
(10, 3, 1, 'vccbcxvb', '2017-06-10 20:59:25'),
(11, 25, 13, 'CVDVS', '2017-06-11 08:39:49'),
(13, 3, 13, 'shkjcdsh', '2017-06-11 08:41:59'),
(14, 3, 2, 'kjashka', '2017-06-11 08:43:18'),
(15, 2, 2, 'jahk', '2017-06-11 08:43:39'),
(17, 5, 1, 'oidfugioudsi', '2017-06-11 22:21:58'),
(18, 5, 2, 'kjchvuds', '2017-06-11 22:23:11'),
(19, 7, 2, 'lfjgkldflsg kjdhgkjhk kjfdshgkjjf', '2017-06-12 02:03:51'),
(20, 8, 2, 'fdhgkfjds', '2017-06-12 02:04:49'),
(21, 8, 2, 'kjkghtrkjh jrhtgkjtrk', '2017-06-12 02:05:34'),
(22, 8, 2, 'ksjfdgkjhs', '2017-06-12 02:07:17'),
(23, 2, 2, 'kcxzhkjbhv zxciuvhui kjzxchiuv', '2017-06-12 02:08:07'),
(24, 10, 1, 'kjdsahfkj kjhdfs dgafa jdahsfj ', '2017-06-12 02:08:59'),
(25, 10, 1, 'ksdhgkjf fdhgui kjfdh', '2017-06-12 02:09:07'),
(26, 9, 1, 'kdfhgkj jfdhg fgds', '2017-06-12 02:09:13'),
(27, 10, 1, 'kjdhvkjsdh', '2017-06-12 02:24:22'),
(28, 10, 1, 'dskjhfdkj', '2017-06-12 02:29:12'),
(29, 0, 2, 'dskjhvfkjds', '2017-06-12 03:37:25'),
(30, 0, 2, 'dskjhfkjdah', '2017-06-12 03:47:28'),
(31, 10, 6, 'hhhhhhhhhhhhhhhhhhhhhhhhh', '2017-06-12 09:58:04'),
(32, 10, 6, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-06-12 09:58:17'),
(33, 7, 6, 'luliuououoiuo', '2017-06-12 09:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `noti_id` int(10) NOT NULL AUTO_INCREMENT,
  `pos_id` int(10) NOT NULL,
  `post_usr` int(10) NOT NULL,
  `comm_user` int(10) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  PRIMARY KEY (`noti_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`noti_id`, `pos_id`, `post_usr`, `comm_user`, `comment`, `status`, `time`, `project`, `experience`, `skill`) VALUES
(3, 10, 2, 1, 'kjdsahfkj kjhdfs dgafa jdahsfj ', 0, '2017-06-12 02:18:29', '', '', ''),
(4, 10, 2, 1, 'ksdhgkjf fdhgui kjfdh', 0, '2017-06-12 02:18:29', '', '', ''),
(5, 9, 2, 1, 'kdfhgkj jfdhg fgds', 0, '2017-06-12 02:18:29', '', '', ''),
(7, 10, 2, 1, 'dskjhfdkj', 0, '2017-06-12 02:29:12', '', '', ''),
(8, 0, 0, 2, 'dskjhvfkjds', 0, '2017-06-12 03:37:25', '', '', ''),
(9, 10, 2, 6, 'hhhhhhhhhhhhhhhhhhhhhhhhh', 0, '2017-06-12 09:58:04', '', '', ''),
(10, 10, 2, 6, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 0, '2017-06-12 09:58:17', '', '', ''),
(11, 7, 1, 6, 'luliuououoiuo', 0, '2017-06-12 09:59:35', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--


-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `Project_name` varchar(100) NOT NULL,
  `Proejct_lang` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `Project_name`, `Proejct_lang`, `user`) VALUES
(1, 'Social network', 'PHP', 'gurtej');

-- --------------------------------------------------------
