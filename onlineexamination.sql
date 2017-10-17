-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 07:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexamination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('mangalamgupta@onlineexamination.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('59e453d29c596', '59e453d2b1112'),
('59e453d2ef5e1', '59e453d3033a0'),
('59e453d321324', '59e453d336c4e'),
('59e453d357746', '59e453d35cc17'),
('59e453d378021', '59e453d37d543'),
('59e49b043009a', '59e49b044a6e6'),
('59e49b04888bd', '59e49b049161a'),
('59e49b04b9642', '59e49b04bef26'),
('59e49b04e81e2', '59e49b0503cc4'),
('59e49b053ca0c', '59e49b0542311'),
('59e49eced1a9b', '59e49eceeda43'),
('59e49ecf1ece4', '59e49ecf31ec0'),
('59e49ecf62a43', '59e49ecf6ace3'),
('59e49ecfbcd39', '59e49ecfc1818'),
('59e49ecfeaf0c', '59e49ecfefa19'),
('59e4a564969d1', '59e4a564b5359'),
('59e4a564f39b4', '59e4a5652a0e8'),
('59e4a56581ab9', '59e4a56593dfd'),
('59e4a5661271b', '59e4a56617369'),
('59e4a5665e6ca', '59e4a5666bfd8'),
('59e4a8181d311', '59e4a81832028'),
('59e4a81864845', '59e4a81869d40'),
('59e4a8188a805', '59e4a8188fd2c'),
('59e4a818b3331', '59e4a818b8859'),
('59e4a818e135f', '59e4a818e6840'),
('59e4b5be7d74c', '59e4b5be925d4'),
('59e4b5beb4a45', '59e4b5beba307'),
('59e4b5bed7ed8', '59e4b5bee850e'),
('59e4b5bf2503b', '59e4b5bf2a547'),
('59e4b5bf5dfd2', '59e4b5bf634d1'),
('59e4b8628cc36', '59e4b862ac17d'),
('59e4b862d1157', '59e4b862d6a26'),
('59e4b86313350', '59e4b86323999'),
('59e4b8633e9f3', '59e4b863442f7'),
('59e4b863836b8', '59e4b863940b7');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Abc', 'abc@gmail.com', 'Great Work..!!');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('59e4d8d27c4a7', 'Mangalam Gupta', 'b150073ee@nitsikkim.ac.in', 'site', 'good site..!', '2017-10-16', '06:05:38pm'),
('59e4d92c5bf46', 'xyz', 'x@gmail.com', 'x', 'abc\r\n', '2017-10-16', '06:07:08pm'),
('59e4d95d143e5', 'qwe', 'q@nitsikkim.ac.in', 'q', 'qwe', '2017-10-16', '06:07:57pm'),
('59e4daf3610e8', 'pqr', 'p@gmail.com', 'p', 'pqr', '2017-10-16', '06:14:43pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('test@nitsikkim.ac.in', '59e4a6102715a', 11, 5, 4, 1, '2017-10-16 16:32:42'),
('test@nitsikkim.ac.in', '59e4a44f95223', 7, 5, 3, 2, '2017-10-16 16:36:28'),
('test@nitsikkim.ac.in', '59e49d60bf7e8', 15, 5, 5, 0, '2017-10-16 16:39:31'),
('test@nitsikkim.ac.in', '59e452bec7f89', 7, 5, 3, 2, '2017-10-16 16:40:28'),
('test@nitsikkim.ac.in', '59e49a05de245', 3, 5, 2, 3, '2017-10-16 16:41:43'),
('test1@nitsikkim.ac.in', '59e4a44f95223', 11, 5, 4, 1, '2017-10-16 16:43:42'),
('test1@nitsikkim.ac.in', '59e4a6102715a', 11, 5, 4, 1, '2017-10-16 16:47:08'),
('test1@nitsikkim.ac.in', '59e49d60bf7e8', 15, 5, 5, 0, '2017-10-16 16:49:52'),
('test1@nitsikkim.ac.in', '59e4b77e7414b', -1, 5, 1, 4, '2017-10-16 16:50:18'),
('test1@nitsikkim.ac.in', '59e4b4862b77e', 3, 5, 2, 3, '2017-10-16 16:51:04'),
('b150073ee@nitsikkim.ac.in', '59e4a6102715a', 7, 5, 3, 2, '2017-10-16 16:53:10'),
('b150073ee@nitsikkim.ac.in', '59e4a44f95223', 11, 5, 4, 1, '2017-10-16 16:56:31'),
('b150073ee@nitsikkim.ac.in', '59e49d60bf7e8', 15, 5, 5, 0, '2017-10-16 16:56:57'),
('b150073ee@nitsikkim.ac.in', '59e452bec7f89', 7, 5, 3, 2, '2017-10-16 16:57:26'),
('b150073ee@nitsikkim.ac.in', '59e49a05de245', 7, 5, 3, 2, '2017-10-16 16:58:01'),
('mangalamgupta@onlineexamination.com', '59e4b77e7414b', 3, 5, 2, 3, '2017-10-16 17:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('59e453d29c596', '0', '59e453d2b10ec'),
('59e453d29c596', '1', '59e453d2b10ff'),
('59e453d29c596', '10', '59e453d2b1109'),
('59e453d29c596', '19', '59e453d2b1112'),
('59e453d2ef5e1', 'xy/d', '59e453d30338c'),
('59e453d2ef5e1', 'yd/x', '59e453d3033a0'),
('59e453d2ef5e1', 'xd', '59e453d3033aa'),
('59e453d2ef5e1', 'yd', '59e453d3033b4'),
('59e453d321324', '50', '59e453d336c4e'),
('59e453d321324', '56', '59e453d336c5c'),
('59e453d321324', '70', '59e453d336c61'),
('59e453d321324', '80', '59e453d336c67'),
('59e453d357746', '1/13', '59e453d35cc0a'),
('59e453d357746', '3/13', '59e453d35cc17'),
('59e453d357746', '1/4', '59e453d35cc1e'),
('59e453d357746', '9/52', '59e453d35cc24'),
('59e453d378021', '10', '59e453d37d530'),
('59e453d378021', '45', '59e453d37d53d'),
('59e453d378021', '54', '59e453d37d543'),
('59e453d378021', '75', '59e453d37d548'),
('59e49b043009a', '15', '59e49b044a6d6'),
('59e49b043009a', '16', '59e49b044a6e6'),
('59e49b043009a', '18', '59e49b044a6ed'),
('59e49b043009a', '25', '59e49b044a6f2'),
('59e49b04888bd', '200', '59e49b0491600'),
('59e49b04888bd', '225', '59e49b0491613'),
('59e49b04888bd', '245', '59e49b049161a'),
('59e49b04888bd', '250', '59e49b0491620'),
('59e49b04b9642', '10', '59e49b04bef17'),
('59e49b04b9642', '13', '59e49b04bef26'),
('59e49b04b9642', '14', '59e49b04bef2c'),
('59e49b04b9642', '15', '59e49b04bef32'),
('59e49b04e81e2', '1/2', '59e49b0503c85'),
('59e49b04e81e2', '2/5', '59e49b0503cae'),
('59e49b04e81e2', '8/15', '59e49b0503cba'),
('59e49b04e81e2', '9/20', '59e49b0503cc4'),
('59e49b053ca0c', '27', '59e49b05422fe'),
('59e49b053ca0c', '100', '59e49b0542311'),
('59e49b053ca0c', '125', '59e49b0542318'),
('59e49b053ca0c', '343', '59e49b054231e'),
('59e49eced1a9b', 'Numbers', '59e49eceeda2e'),
('59e49eced1a9b', 'String', '59e49eceeda3a'),
('59e49eced1a9b', 'List', '59e49eceeda3f'),
('59e49eced1a9b', 'Slice', '59e49eceeda43'),
('59e49ecf1ece4', 'repr(x)', '59e49ecf31eb8'),
('59e49ecf1ece4', 'eval(str)', '59e49ecf31ec0'),
('59e49ecf1ece4', 'tuple(s)', '59e49ecf31ec2'),
('59e49ecf1ece4', 'list(s)', '59e49ecf31ec4'),
('59e49ecf62a43', 'lower()', '59e49ecf6acd0'),
('59e49ecf62a43', 'istrip()', '59e49ecf6acdb'),
('59e49ecf62a43', 'max(str)', '59e49ecf6acdf'),
('59e49ecf62a43', 'min(str)', '59e49ecf6ace3'),
('59e49ecfbcd39', 'set(x)', '59e49ecfc180e'),
('59e49ecfbcd39', 'dict(d)', '59e49ecfc1818'),
('59e49ecfbcd39', 'frozenset(s)', '59e49ecfc181b'),
('59e49ecfbcd39', 'chr(x)', '59e49ecfc181e'),
('59e49ecfeaf0c', 'cmp(list1, list2)', '59e49ecfefa19'),
('59e49ecfeaf0c', 'len(list1, list2)', '59e49ecfefa27'),
('59e49ecfeaf0c', 'min(list1, list2)', '59e49ecfefa2c'),
('59e49ecfeaf0c', 'max(list1, list2)', '59e49ecfefa30'),
('59e4a564969d1', 'section', '59e4a564b5359'),
('59e4a564969d1', 'article ', '59e4a564b5363'),
('59e4a564969d1', 'aside', '59e4a564b5366'),
('59e4a564969d1', 'header', '59e4a564b5368'),
('59e4a564f39b4', 'footer', '59e4a5652a0de'),
('59e4a564f39b4', 'nav', '59e4a5652a0e6'),
('59e4a564f39b4', 'dialog', '59e4a5652a0e8'),
('59e4a564f39b4', 'figure', '59e4a5652a0ea'),
('59e4a56581ab9', 'output', '59e4a56593dfd'),
('59e4a56581ab9', 'placeholder', '59e4a56593e06'),
('59e4a56581ab9', 'autofocus', '59e4a56593e11'),
('59e4a56581ab9', 'required', '59e4a56593e17'),
('59e4a5661271b', 'accesskey', '59e4a56617369'),
('59e4a5661271b', 'key', '59e4a56617373'),
('59e4a5661271b', 'contextkey', '59e4a56617376'),
('59e4a5661271b', 'contextmenu', '59e4a5661737a'),
('59e4a5665e6ca', 'ondragleave', '59e4a5666bfcd'),
('59e4a5665e6ca', 'ondrag', '59e4a5666bfd8'),
('59e4a5665e6ca', 'ondragend', '59e4a5666bfdc'),
('59e4a5665e6ca', 'ondgarenter', '59e4a5666bfe0'),
('59e4a8181d311', '__LINE__', '59e4a8183201f'),
('59e4a8181d311', '__FILE__', '59e4a81832028'),
('59e4a8181d311', '__FUNCTION__', '59e4a8183202b'),
('59e4a8181d311', '__CLASS__', '59e4a8183202d'),
('59e4a81864845', 'search()', '59e4a81869d31'),
('59e4a81864845', 'locate()', '59e4a81869d3a'),
('59e4a81864845', 'strpos()', '59e4a81869d40'),
('59e4a81864845', 'None of these', '59e4a81869d42'),
('59e4a8188a805', 'fopen()', '59e4a8188fd1f'),
('59e4a8188a805', 'fread()', '59e4a8188fd29'),
('59e4a8188a805', 'filesize()', '59e4a8188fd2c'),
('59e4a8188a805', 'file_exist()', '59e4a8188fd2f'),
('59e4a818b3331', 'session_start()', '59e4a818b8846'),
('59e4a818b3331', '$_SESSION[]', '59e4a818b8852'),
('59e4a818b3331', 'isset()', '59e4a818b8856'),
('59e4a818b3331', 'session_destroy()', '59e4a818b8859'),
('59e4a818e135f', 'getMessage()', '59e4a818e6831'),
('59e4a818e135f', 'getCode()', '59e4a818e6839'),
('59e4a818e135f', 'getFile()', '59e4a818e683d'),
('59e4a818e135f', 'getLine()', '59e4a818e6840'),
('59e4b5be7d74c', '7', '59e4b5be925b0'),
('59e4b5be7d74c', '8', '59e4b5be925c3'),
('59e4b5be7d74c', '9', '59e4b5be925cb'),
('59e4b5be7d74c', '10', '59e4b5be925d4'),
('59e4b5beb4a45', '35', '59e4b5beba2fb'),
('59e4b5beb4a45', '40', '59e4b5beba307'),
('59e4b5beb4a45', '45', '59e4b5beba30d'),
('59e4b5beb4a45', 'None of these', '59e4b5beba312'),
('59e4b5bed7ed8', '3500', '59e4b5bee84f6'),
('59e4b5bed7ed8', '3750', '59e4b5bee8502'),
('59e4b5bed7ed8', '3840', '59e4b5bee8508'),
('59e4b5bed7ed8', '3900', '59e4b5bee850e'),
('59e4b5bf2503b', '19', '59e4b5bf2a513'),
('59e4b5bf2503b', '17', '59e4b5bf2a525'),
('59e4b5bf2503b', '5', '59e4b5bf2a53d'),
('59e4b5bf2503b', '12', '59e4b5bf2a547'),
('59e4b5bf5dfd2', '266', '59e4b5bf634bf'),
('59e4b5bf5dfd2', '5040', '59e4b5bf634cc'),
('59e4b5bf5dfd2', '11760', '59e4b5bf634d1'),
('59e4b5bf5dfd2', '86400', '59e4b5bf634d6'),
('59e4b8628cc36', '564', '59e4b862ac164'),
('59e4b8628cc36', '645', '59e4b862ac171'),
('59e4b8628cc36', '745', '59e4b862ac177'),
('59e4b8628cc36', '756', '59e4b862ac17d'),
('59e4b862d1157', '6.25', '59e4b862d6a26'),
('59e4b862d1157', '6.50', '59e4b862d6a3b'),
('59e4b862d1157', '6.75', '59e4b862d6a46'),
('59e4b862d1157', '7', '59e4b862d6a4e'),
('59e4b86313350', '120', '59e4b86323986'),
('59e4b86313350', '150', '59e4b86323993'),
('59e4b86313350', '180', '59e4b86323999'),
('59e4b86313350', '324', '59e4b8632399d'),
('59e4b8633e9f3', '2 : 5', '59e4b863442d7'),
('59e4b8633e9f3', '3 : 5', '59e4b863442ec'),
('59e4b8633e9f3', '4 : 5', '59e4b863442f7'),
('59e4b8633e9f3', '6 : 7', '59e4b86344300'),
('59e4b863836b8', '210', '59e4b8639409c'),
('59e4b863836b8', '1050', '59e4b863940ae'),
('59e4b863836b8', '25200', '59e4b863940b7'),
('59e4b863836b8', '21400', '59e4b863940c1');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('59e452bec7f89', '59e453d29c596', 'The average of 20 numbers is zero. Of them, at the most, how many may be greater than zero?', 4, 1),
('59e452bec7f89', '59e453d2ef5e1', 'If the cost of x metres of wire is d rupees, then what is the cost of y metres of wire at the same rate?', 4, 2),
('59e452bec7f89', '59e453d321324', 'If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:', 4, 3),
('59e452bec7f89', '59e453d357746', 'One card is drawn at random from a pack of 52 cards. What is the probability that the card drawn is a face card (Jack, Queen and King only)?', 4, 4),
('59e452bec7f89', '59e453d378021', '10, 25, 45, 54, 60, 75, 80', 4, 5),
('59e49a05de245', '59e49b043009a', 'The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:', 4, 1),
('59e49a05de245', '59e49b04888bd', 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', 4, 2),
('59e49a05de245', '59e49b04b9642', '39 persons can repair a road in 12 days, working 5 hours a day. In how many days will 30 persons, working 6 hours a day, complete the work?', 4, 3),
('59e49a05de245', '59e49b04e81e2', 'Tickets numbered 1 to 20 are mixed up and then a ticket is drawn at random. What is the probability that the ticket drawn has a number which is a multiple of 3 or 5?', 4, 4),
('59e49a05de245', '59e49b053ca0c', 'Find the odd man out:\r\n8, 27, 64, 100, 125, 216, 343', 4, 5),
('59e49d60bf7e8', '59e49eced1a9b', 'Which of the following data types is not supported in python?', 4, 1),
('59e49d60bf7e8', '59e49ecf1ece4', 'Which of the following function convert a String to an object in python?', 4, 2),
('59e49d60bf7e8', '59e49ecf62a43', 'Which of the following function returns the min alphabetical character from the string str?', 4, 3),
('59e49d60bf7e8', '59e49ecfbcd39', 'Which of the following function convert a sequence of tuples to dictionary in python?', 4, 4),
('59e49d60bf7e8', '59e49ecfeaf0c', 'What is the following function compares elements of both lists?', 4, 5),
('59e4a44f95223', '59e4a564969d1', 'Which of the following tag represents a generic document or application section in HTML5?', 4, 1),
('59e4a44f95223', '59e4a564f39b4', 'Which of the following tag can be used to mark up a conversation in HTML5?\r\n\r\n', 4, 2),
('59e4a44f95223', '59e4a56581ab9', 'Which of the following tag is used to represent the result of different types of output in HTML5?', 4, 3),
('59e4a44f95223', '59e4a5661271b', 'Which of the following attribute specifies a keyboard shortcut to access an element in HTML5?', 4, 4),
('59e4a44f95223', '59e4a5665e6ca', 'Which of the following attribute triggers event when an element is dragged?', 4, 5),
('59e4a6102715a', '59e4a8181d311', 'Which of the following magic constant of PHP returns function name?', 4, 1),
('59e4a6102715a', '59e4a81864845', 'Which of the following function is used to locate a string within a string?', 4, 2),
('59e4a6102715a', '59e4a8188a805', 'Which of the following function is used to get the size of a file?', 4, 3),
('59e4a6102715a', '59e4a818b3331', 'Which of the following is used to destroy the session?', 4, 4),
('59e4a6102715a', '59e4a818e135f', 'Which of the following is used to destroy the session?', 4, 5),
('59e4b4862b77e', '59e4b5be7d74c', 'A is two years older than B who is twice as old as C. If the total of the ages of A, B and C be 27, the how old is B?', 4, 1),
('59e4b4862b77e', '59e4b5beb4a45', 'The average age of husband, wife and their child 3 years ago was 27 years and that of wife and the child 5 years ago was 20 years. The present age of the husband is:', 4, 2),
('59e4b4862b77e', '59e4b5bed7ed8', 'The price of 10 chairs is equal to that of 4 tables. The price of 15 chairs and 2 tables together is Rs. 4000. The total price of 12 chairs and 3 tables is:', 4, 3),
('59e4b4862b77e', '59e4b5bf2503b', 'Find the odd man out:\r\n	\r\n3, 5, 7, 12, 17, 19', 4, 4),
('59e4b4862b77e', '59e4b5bf5dfd2', 'In how many ways a committee, consisting of 5 men and 6 women can be formed from 8 men and 10 women?', 4, 5),
('59e4b77e7414b', '59e4b8628cc36', 'From a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done?', 4, 1),
('59e4b77e7414b', '59e4b862d1157', 'In the first 10 overs of a cricket game, the run rate was only 3.2. What should be the run rate in the remaining 40 overs to reach the target of 282 runs?', 4, 2),
('59e4b77e7414b', '59e4b86313350', 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', 4, 3),
('59e4b77e7414b', '59e4b8633e9f3', 'Two numbers are respectively 20% and 50% more than a third number. The ratio of the two numbers is:', 4, 4),
('59e4b77e7414b', '59e4b863836b8', 'Out of 7 consonants and 4 vowels, how many words of 3 consonants and 2 vowels can be formed?', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('59e452bec7f89', 'Aptitude 1', 3, 1, 5, 5, 'Aptitude quiz', 'Aptitude 1', '2017-10-16 06:33:34'),
('59e49a05de245', 'Aptitude 2', 3, 1, 5, 5, 'Aptitude quiz', 'Aptitude 2', '2017-10-16 11:37:41'),
('59e49d60bf7e8', 'Python', 3, 1, 5, 5, 'python quiz', 'python', '2017-10-16 11:52:00'),
('59e4a44f95223', 'Html', 3, 1, 5, 5, 'html quiz', 'html', '2017-10-16 12:21:35'),
('59e4a6102715a', 'Php', 3, 1, 5, 5, 'php quiz', 'php', '2017-10-16 12:29:04'),
('59e4b4862b77e', 'Aptitude 3', 3, 1, 5, 5, 'Aptitude quiz', 'Aptitude 3', '2017-10-16 13:30:46'),
('59e4b77e7414b', 'Aptitude 4', 3, 1, 5, 5, 'Aptitude quiz', 'Aptitude 4', '2017-10-16 13:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('test@nitsikkim.ac.in', 43, '2017-10-16 16:41:43'),
('test1@nitsikkim.ac.in', 39, '2017-10-16 16:51:04'),
('b150073ee@nitsikkim.ac.in', 47, '2017-10-16 16:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `phone`, `password`) VALUES
('Mangalam Gupta', 'M', 'NIT Sikkim', 'b150073ee@nitsikkim.ac.in', 7550851438, 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
('Annu', 'M', 'NIT Sikkim', 'mangalamgupta01@gmail.com', 7052878284, 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
('Test1', 'M', 'NIT Sikkim', 'test1@nitsikkim.ac.in', 7550851438, 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
('Test2', 'F', 'NIT Sikkim', 'test2@nitsikkim.ac.in', 7550851438, 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
('Test3', 'M', 'NIT Sikkim', 'test3@nitsikkim.ac.in', 7550851438, 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
('Test', 'M', 'NIT Sikkim', 'test@nitsikkim.ac.in', 7550851438, 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
