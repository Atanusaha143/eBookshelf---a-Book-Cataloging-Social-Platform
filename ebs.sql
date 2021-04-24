-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 09:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `regdate` date NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `phone`, `dob`, `regdate`, `photo`) VALUES
(1, 'Snigdho Dip Howlader', 'dip.howlader@gmail.com', '+8801775641903', '1996-11-05', '2020-12-03', 'snigdho123.jpeg'),
(2, 'Md. Shamil Hossain', 'alsanysamil@gmail.com', '+8801772435617', '1998-10-11', '2021-04-07', 'samil123.jpeg'),
(3, 'Atanu Saha', 'atanu.saha413@gmail.com', '+8801223456789', '1999-04-07', '2021-04-13', 'atanu123'),
(23, 'Arafat Antor', 'antor.abir@gmail.com', '+8801234567863', '2021-04-21', '2021-04-11', 'antor123.jpeg'),
(27, 'Chinmoy Mondol', 'chinmoy.mondol@gmail.com', '+8801234567863', '2021-04-23', '2021-04-12', 'chinmoy123.jpeg'),
(31, 'Zahin Masroor Bhuiyan', 'zahin.bhuiyan@gmail.com', '+8801234567863', '2021-04-28', '2021-04-15', 'zahin123.png');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, 'snigdho123', '123abc@A', 'admin', 'active'),
(2, 'samil123', '1234abc@A', 'admin', 'active'),
(3, 'atanu123', '12abcd@A', 'admin', 'active'),
(23, 'antor123', '123abc@A', 'admin', 'active'),
(27, 'chinmoy123', '123abc@A', 'admin', 'active'),
(31, 'zahin123', '123abc@A', 'admin', 'terminated');

-- --------------------------------------------------------

--
-- Table structure for table `adminmessages`
--

CREATE TABLE `adminmessages` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `to_user` int(11) DEFAULT NULL,
  `from_user` int(11) DEFAULT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminmessages`
--

INSERT INTO `adminmessages` (`id`, `content`, `to_user`, `from_user`, `time`) VALUES
(1, 'Hello! How have you been?', 1, 2, '2021-04-08 05:33:24'),
(2, 'I am well, what about you?', 2, 1, '2021-04-08 05:42:01'),
(3, 'I have been rather busy with my work. ', 1, 2, '2021-04-08 07:26:49'),
(4, 'This is a dummy message', 1, 3, '2021-04-08 07:56:07'),
(5, 'This is a response to a dummy message', 3, 1, '2021-04-08 07:56:42'),
(6, 'Attack on Titan is the best anime.', 3, 2, '2021-04-08 08:52:47'),
(7, 'Jujutsu Kaisen is the best anime.', 2, 3, '2021-04-08 08:52:47'),
(10, 'Oh, I see. I have been busy with my university projects.', 2, 1, '2021-04-11 00:08:06'),
(11, 'This is another dummy message.', 3, 1, '2021-04-11 01:40:40'),
(12, 'Hello, how are you?', 1, 23, '2021-04-11 06:27:01'),
(13, 'I am fine, how have you been?', 23, 1, '2021-04-11 06:29:42'),
(15, 'Hello', 30, 1, '2021-04-14 23:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `bpage`
--

CREATE TABLE `bpage` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `regdate` date NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpage`
--

INSERT INTO `bpage` (`id`, `name`, `email`, `phone`, `regdate`, `photo`) VALUES
(1, 'Star Books', 'starbooks@gmail.com', '+88123456789091', '2021-04-10', 'sbooks123.jpeg'),
(2, 'Tech Books', 'tbooks@gmail.com', '+8812345678909', '2021-04-10', ''),
(3, 'Dream Books', 'dbooks123@gmail.com', '+8801234567863', '2021-04-11', 'dbooks123.jpg'),
(9, 'Manga Corner', 'manga@gmail.com', '+8801234567863', '2021-04-13', 'manga123.png'),
(13, 'DC Comics HQ', 'dc@gmail.com', '+8801234567863', '2021-04-15', 'dc123.png');

-- --------------------------------------------------------

--
-- Table structure for table `bpagelogin`
--

CREATE TABLE `bpagelogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpagelogin`
--

INSERT INTO `bpagelogin` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, 'sbooks123', '123abc@A', 'bpage', 'active'),
(2, 'tbooks123', '123abc@A', 'bpage', 'active'),
(3, 'dbooks123', '123abc@A', 'bpage', 'active'),
(9, 'manga123', '123abc@A', 'bpage', 'active'),
(13, 'dc123', '123abc@A', 'bpage', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bpageposts`
--

CREATE TABLE `bpageposts` (
  `id` int(11) NOT NULL,
  `from_bpage` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `book_condition` varchar(200) NOT NULL,
  `post_text` varchar(500) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpageposts`
--

INSERT INTO `bpageposts` (`id`, `from_bpage`, `title`, `author`, `genre`, `book_condition`, `post_text`, `photo`, `price`, `date`) VALUES
(1, 9, 'Attack On Titan - Volume 1', 'Isayama Hajime', 'manga', 'new', 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.', 'aot123.jpg', '$10', '2021-03-04 14:29:36'),
(2, 9, 'Jujutsu Kaisen - Volume 3', 'Gege Akutami', 'manga', 'new', 'Jujutsu Kaisen is a Japanese manga series written and illustrated by Gege Akutami, serialized in Shueisha\'s Weekly Shōnen Jump since March 2018. The individual chapters of Jujutsu Kaisen are collected and published by Shueisha, with fifteen tankōbon volumes released as of March 2021.', 'jjk123.png', '$15', '2021-03-01 21:24:33'),
(3, 9, 'naruto', 'kishimoto', 'manga', 'old', 'naruto is good', 'manga123.png', '$12', '2021-04-24 19:39:02'),
(6, 9, 'Death Note', 'ABCD', 'ABCD', 'old', 'Light is sociopath', 'Death Note.png', '$12', '2021-04-24 21:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `regular_activities`
--

CREATE TABLE `regular_activities` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `activity_type` varchar(30) NOT NULL,
  `activity_time` datetime DEFAULT NULL,
  `activity_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_activities`
--

INSERT INTO `regular_activities` (`id`, `username`, `activity_type`, `activity_time`, `activity_details`) VALUES
(3, 'atanu', 'Create Post', '2021-04-10 02:09:01', 'Milk and Honey'),
(6, 'atanu', 'Create Review', '2021-04-10 16:46:42', 'The 7 Habits of Highly Effective People'),
(8, 'snigdho', 'Create Review', '2021-04-10 16:55:41', 'Milk and Honey'),
(11, 'atanu', 'Create Review', '2021-04-12 20:21:01', 'The 7 Habits of Highly Effective People'),
(12, 'atanu', 'Create Rating', '2021-04-12 21:44:16', 'The 7 Habits of Highly Effective People'),
(13, 'snigdho', 'Create Rating', '2021-04-12 21:55:56', 'How to Win Friends & Influence People'),
(14, 'atanu', 'Updated Review', '2021-04-13 11:36:11', 'The 7 Habits of Highly Effective People'),
(15, 'atanu', 'Updated Rating', '2021-04-13 11:52:00', 'The 7 Habits of Highly Effecti'),
(16, 'atanu', 'Updated Rating', '2021-04-13 11:52:21', 'The 7 Habits of Highly Effecti'),
(17, 'atanu', 'Deleted Rating', '2021-04-13 11:56:43', ''),
(18, 'atanu', 'Create Rating', '2021-04-13 11:58:51', 'Think and Grow Rich    '),
(19, 'atanu', 'Deleted Rating', '2021-04-13 11:59:55', 'Think and Grow Rich'),
(20, 'atanu', 'Created Sell Post', '2021-04-13 12:56:38', 'Milk and Honey'),
(21, 'atanu', 'Created Sell Post', '2021-04-13 12:57:56', 'Milk and Honey'),
(22, 'atanu', 'Created Sell Post', '2021-04-13 12:59:28', 'Milk and Honey'),
(23, 'atanu', 'Created Sell Post', '2021-04-13 12:59:42', 'Milk and Honey'),
(24, 'atanu', 'Created Sell Post', '2021-04-13 13:02:10', 'Milk and Honey'),
(25, 'atanu', 'Created Sell Post', '2021-04-13 13:04:31', 'Milk and Honey'),
(26, 'atanu', 'Created Sell Post', '2021-04-13 13:05:44', 'Milk and Honey'),
(27, 'atanu', 'Created Sell Post', '2021-04-13 13:08:12', 'Milk and Honey'),
(28, 'atanu', 'Created Sell Post', '2021-04-13 13:09:35', 'Milk and Honey'),
(29, 'atanu', 'Created Sell Post', '2021-04-13 13:10:21', 'Milk and Honey'),
(30, 'atanu', 'Created Sell Post', '2021-04-13 13:11:11', 'Milk and Honey'),
(31, 'atanu', 'Updated Selling Post', '2021-04-13 18:27:54', 'Milk and Honey'),
(32, 'atanu', 'Updated Selling Post', '2021-04-13 18:28:23', 'Milk and Honey'),
(33, 'atanu', 'Updated Review', '2021-04-13 18:30:19', 'The 7 Habits of Highly Effective People'),
(34, 'atanu', 'Updated Selling Post', '2021-04-13 18:36:27', 'Milk and Honey'),
(35, 'atanu', 'Updated Selling Post', '2021-04-13 18:38:38', 'Milk and Honey'),
(36, 'atanu', 'Updated Selling Post', '2021-04-13 18:39:10', 'Milk and Honey'),
(37, 'atanu', 'Updated Selling Post', '2021-04-13 18:39:24', 'Milk and Honey'),
(38, 'atanu', 'Updated Selling Post', '2021-04-13 18:39:39', 'Milk and Honey'),
(39, 'atanu', 'Updated Selling Post', '2021-04-13 18:44:00', 'Milk and Honey'),
(40, 'atanu', 'Deleted Selling Post', '2021-04-13 18:51:19', 'Milk and Honey'),
(41, 'atanu', 'Created Sell Post', '2021-04-13 18:55:12', 'Milk and Honey'),
(42, 'snigdho', 'Ordered book', '2021-04-13 21:40:39', 'Milk and Honey'),
(43, 'atanu', 'Create Rating', '2021-04-15 23:18:01', 'The 7 Habits of Highly Effective People'),
(44, 'atanu', 'Create Rating', '2021-04-15 23:18:17', 'The 7 Habits of Highly Effective People'),
(45, 'atanu', 'Create Rating', '2021-04-15 23:18:28', 'The 7 Habits of Highly Effective People'),
(46, 'atanu', 'Create Rating', '2021-04-15 23:19:50', 'Think and Grow Rich    '),
(47, 'atanu', 'Create Rating', '2021-04-15 23:20:16', 'Don'),
(48, 'atanu', 'Deleted Rating', '2021-04-15 23:20:44', 'Don'),
(49, 'atanu', 'Deleted Rating', '2021-04-15 23:20:46', 'Think and Grow Rich'),
(50, 'atanu', 'Deleted Rating', '2021-04-15 23:20:48', 'The 7 Habits of Highly Effective People'),
(51, 'atanu', 'Create Review', '2021-04-18 13:39:54', 'Milk and Honey'),
(52, 'atanu', 'Updated Review', '2021-04-18 13:44:30', 'Milk and Honey'),
(53, 'atanu', 'Updated Selling Post', '2021-04-20 02:29:39', 'Milk and Honey'),
(54, 'atanu', 'Updated Selling Post', '2021-04-20 02:31:10', 'Milk and Honey'),
(55, 'atanu', 'Deleted Selling Post', '2021-04-20 02:31:40', 'Milk and Honey'),
(56, 'atanu', 'Created Sell Post', '2021-04-20 02:34:02', 'Milk and Honey'),
(57, 'atanu', 'Create Rating', '2021-04-24 10:59:59', 'How to Win Friends & Influence People'),
(58, 'atanu', 'Create Rating', '2021-04-24 11:21:51', 'The Greatest Salesman in the World'),
(59, 'atanu', 'Create Rating', '2021-04-24 11:22:06', 'Don'),
(60, 'atanu', 'Create Rating', '2021-04-24 11:22:13', 'Milk and Honey');

-- --------------------------------------------------------

--
-- Table structure for table `regular_addrating`
--

CREATE TABLE `regular_addrating` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(50) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_addrating`
--

INSERT INTO `regular_addrating` (`id`, `username`, `bookname`, `authorname`, `rating`) VALUES
(5, 'snigdho', 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 2),
(7, 'atanu', 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 1),
(8, 'atanu', 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 2),
(12, 'atanu', 'How to Win Friends & Influence People', 'Dale Carnegie', 3),
(13, 'atanu', 'The Greatest Salesman in the World', 'Og Mandino', 2),
(14, 'atanu', 'Don', 'Richard Carlson', 3),
(15, 'atanu', 'Milk and Honey', 'Rupi Kaur', 3);

-- --------------------------------------------------------

--
-- Table structure for table `regular_addreview`
--

CREATE TABLE `regular_addreview` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `review_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_addreview`
--

INSERT INTO `regular_addreview` (`id`, `username`, `bookname`, `authorname`, `review_content`) VALUES
(22, 'snigdho', 'Milk and Honey', 'Rupi Kaur', 'Poetry lovers must read!'),
(24, 'atanu', 'Milk and Honey', 'Rupi Kaur', 'Poetry lovers must read!'),
(25, 'atanu', 'Milk and Honey', 'Rupi Kaur', 'Poetry lovers must read!');

-- --------------------------------------------------------

--
-- Table structure for table `regular_allbooks`
--

CREATE TABLE `regular_allbooks` (
  `id` int(6) UNSIGNED NOT NULL,
  `bookname` varchar(500) NOT NULL,
  `category` varchar(30) NOT NULL,
  `authorname` varchar(60) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `post_by` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_allbooks`
--

INSERT INTO `regular_allbooks` (`id`, `bookname`, `category`, `authorname`, `details`, `post_by`) VALUES
(1, 'The 7 Habits of Highly Effective People', 'Motivational', 'Stephen R. Covey', 'The 7 Habits of Highly Effective People, first published in 1989, is a business and self-help book written by Stephen R. Covey. Covey presents an approach to being effective in attaining goals by aligning oneself to what he calls \"true north\" principles based on a character ethic that he presents as universal and timeless.\r\n\r\nCovey defines effectiveness as the balance of obtaining desirable results with caring for that which produces those results. He illustrates this by referring to the fable of the goose that laid the golden eggs. He further claims that effectiveness can be expressed in terms of the P/PC ratio, where P refers to getting desired results and PC is caring for that which produces the results. ', 'eBookshelf'),
(2, 'How to Win Friends & Influence People', 'Motivational', 'Dale Carnegie', 'How to Win Friends and Influence People is a self-help book written by Dale Carnegie, published in 1936. Over 30 million copies have been sold worldwide, making it one of the best-selling books of all time. In 2011, it was number 19 on Time Magazine\'s list of the 100 most influential books.\r\n\r\nCarnegie had been conducting business education courses in New York since 1912. In 1934, Leon Shimkin of the publishing firm Simon & Schuster took one of Carnegie\'s 14-week courses on human relations and public speaking;[3] afterward, Shimkin persuaded Carnegie to let a stenographer take notes from the course to be revised for publication. The initial five thousand copies of the book sold exceptionally well, going through 17 editions in its first year alone. ', 'eBookshelf'),
(3, 'Think and Grow Rich    ', 'Motivational', 'Napoleon Hill', 'Think and Grow Rich was written by Napoleon Hill in 1937 and promoted as a personal development and self-improvement book. He claimed to be inspired by a suggestion from business magnate and later-philanthropist Andrew Carnegie.\r\n\r\nFirst published during the Great Depression, the book has sold more than 15 million copies.\r\n\r\nIt remains the biggest seller of Napoleon Hill\'s books. BusinessWeek magazine\'s Best-Seller List ranked it the sixth best-selling paperback business book 70 years after it was published.Think and Grow Rich is listed in John C. Maxwell\'s A Lifetime \"Must Read\" Books List.', 'eBookshelf'),
(4, 'Awaken the Giant Within', 'Motivational', 'Anthony Robbins', 'Wake up and take control of your life! From the bestselling author of Inner Strength, Unlimited Power, and MONEY Master the Game, Anthony Robbins, the nation\'s leader in the science of peak performance, shows you his most effective strategies and techniques for mastering your emotions, your body, your relationships, your finances, and your life.\r\n\r\nThe acknowledged expert in the psychology of change, Anthony Robbins provides a step-by-step program teaching the fundamental lessons of self-mastery that will enable you to discover your true purpose, take control of your life, and harness the forces that shape your destiny.', 'eBookshelf'),
(5, 'As a Man Thinketh', 'Motivational', 'James Allen', 'As a Man Thinketh is a self-help book by James Allen, published in 1903. It was described by Allen as \"... [dealing] with the power of thought, and particularly with the use and application of thought to happy and beautiful issues. I have tried to make the book simple, so that all can easily grasp and follow its teaching, and put into practice the methods which it advises. It shows how, in his own thought-world, each man holds the key to every condition, good or bad, that enters into his life, and that, by working patiently and intelligently upon his thoughts, he may remake his life, and transform his circumstances. The price of the book is only one shilling, and it can be carried in the pocket.\" It was also described by Allen as \"A book that will help you to help yourself\", \"A pocket companion for thoughtful people\", and \"A book on the power and right application of thought.\"', 'eBookshelf'),
(6, 'The Greatest Salesman in the World', 'Motivational', 'Og Mandino', 'The Greatest Salesman in the World is a book, written by Og Mandino, that serves as a guide to a philosophy of salesmanship, and success, telling the story of Hafid, a poor camel boy who achieves a life of abundance. The book was first published in 1968, and re-issued in 1983 by Bantam. A hardcover edition was published by Buccaneer Books in June, 1993. In 1970, Success Motivation Institute purchased the rights to produce the audio recording.\r\n\r\nIf Mandino\'s suggested reading structure is followed, it would take about 10 months to read the book. ', 'eBookshelf'),
(7, 'Don\'t Sweat the Small Stuff  ', 'Motivational', 'Richard Carlson', 'Don\'t Sweat the Small Stuff... and it\'s all small stuff is a book that shows you how to keep from letting the little things in life drive you crazy. In thoughtful and insightful language, author Richard Carlson reveals ways to calm down in the midst of your incredibly hurried, stress-filled life. You can learn to put things in perspective by making the small daily changes he suggests,including advice such as \"Think of your problems as potential teachers\"; \"Remember that when you die, your \'In\' box won\'t be empty\"; and \"Do one thing at a time.\" You should also try to live in the present moment, let others have the glory at times, and lower your tolerance to stress. You can write down your most stubborn positions and see if you can soften them, learn to trust your intuitions, and live each day as if it might be your last. With gentle, supportive suggestions, Dr.Carlson reveals ways to make your actions more peaceful and caring, with the added benefit of making your life more calm and stress-free.', 'eBookshelf'),
(8, 'Drive   ', 'Motivational', 'Daniel H. Pink ', 'Most people believe that the best way to motivate is with rewards like money—the carrot-and-stick approach. That\'s a mistake, says Daniel H. Pink (author of To Sell Is Human: The Surprising Truth About Motivating Others). In this provocative and persuasive new book, he asserts that the secret to high performance and satisfaction-at work, at school, and at home—is the deeply human need to direct our own lives, to learn and create new things, and to do better by ourselves and our world.\r\n\r\nDrawing on four decades of scientific research on human motivation, Pink exposes the mismatch between what science knows and what business does—and how that affects every aspect of life. He examines the three elements of true motivation—autonomy, mastery, and purpose-and offers smart and surprising techniques for putting these into action in a unique book that will change how we think and transform how we live.', 'eBookshelf'),
(9, 'The Power of Positive Thinking', 'Motivational', ' Norman Vincent Peale', 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes. You\'ll learn how to:\r\n\r\nExpect the best and get it\r\n\r\nBelieve in yourself and in everything you do\r\n\r\nDevelop the power to reach your goals\r\n\r\nBreak the worry habit and achieve a relaxed life\r\n\r\nImprove your personal and professional relationships\r\n\r\nAssume control over your circumstances\r\n\r\nBe kind to yourself ', 'eBookshelf'),
(10, 'The Magic of Thinking Big ', 'Motivational', 'David J. Schwartz', 'The Magic of Thinking Big gives you useful methods, not empty promises. Dr. Schwartz presents a carefully designed program for getting the most out of your job, your marriage and family life, and your community. He proves that you don\'t need to be an intellectual or have innate talent to attain great success and satisfaction, but you do need to learn and understand the habit of thinking and behaving in ways that will get you there. ', 'eBookshelf'),
(11, 'Milk and Honey', 'Poetry', 'Rupi Kaur', 'There’s no single poetry book that has got as much warranted praise from millennials than Milk and Honey. Chances are you’ve already read it, heard about it or been recommended it personally by a friend, so if you don’t already have yourself a copy consider this a sign to click through and purchase pronto! If there’s just one book that should be required reading through or after a hard period in your life, this is it.', 'atanu');

-- --------------------------------------------------------

--
-- Table structure for table `regular_bookshelf`
--

CREATE TABLE `regular_bookshelf` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_bookshelf`
--

INSERT INTO `regular_bookshelf` (`id`, `username`, `bookname`) VALUES
(41, 'snigdho', 'The Magic of Thinking Big '),
(42, 'snigdho', 'As a Man Thinketh'),
(70, 'atanu', 'The 7 Habits of Highly Effective People'),
(71, 'atanu', 'How to Win Friends & Influence People');

-- --------------------------------------------------------

--
-- Table structure for table `regular_buy`
--

CREATE TABLE `regular_buy` (
  `id` int(6) UNSIGNED NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `book_condition` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `buyername` varchar(100) NOT NULL,
  `buyeremail` varchar(100) NOT NULL,
  `buyerphone` varchar(100) NOT NULL,
  `trxId` varchar(100) NOT NULL,
  `shippingaddress` varchar(100) NOT NULL,
  `sellername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_buy`
--

INSERT INTO `regular_buy` (`id`, `bookname`, `authorname`, `category`, `book_condition`, `price`, `buyername`, `buyeremail`, `buyerphone`, `trxId`, `shippingaddress`, `sellername`) VALUES
(7, 'Milk and Honey', 'Rupi Kaur', 'Poetry', 'Old', '2', 'Snigdho Dip Howlader', 'snigdho@gmail.com', '01777777777', '255955687', 'Gournadi, Barisal', 'atanu');

-- --------------------------------------------------------

--
-- Table structure for table `regular_contact`
--

CREATE TABLE `regular_contact` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL,
  `message_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_contact`
--

INSERT INTO `regular_contact` (`id`, `username`, `message`, `message_time`) VALUES
(1, 'atanu', 'Login Problem', '2021-04-10 03:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `regular_post`
--

CREATE TABLE `regular_post` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `category` varchar(60) NOT NULL,
  `post_content` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_post`
--

INSERT INTO `regular_post` (`id`, `username`, `bookname`, `authorname`, `category`, `post_content`) VALUES
(3, 'atanu', 'Milk and Honey', 'Rupi Kaur', 'Poetry', 'There’s no single poetry book that has got as much warranted praise from millennials than Milk and Honey. Chances are you’ve already read it, heard about it or been recommended it personally by a friend, so if you don’t already have yourself a copy consider this a sign to click through and purchase pronto! If there’s just one book that should be required reading through or after a hard period in your life, this is it..'),
(4, 'eBookshelf', 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 'Motivational', 'The 7 Habits of Highly Effective People, first published in 1989, is a business and self-help book written by Stephen R. Covey. Covey presents an approach to being effective in attaining goals by aligning oneself to what he calls \"true north\" principles based on a character ethic that he presents as universal and timeless. Covey defines effectiveness as the balance of obtaining desirable results with caring for that which produces those results. He illustrates this by referring to the fable of the goose that laid the golden eggs. He further claims that effectiveness can be expressed in terms of the P/PC ratio, where P refers to getting desired results and PC is caring for that which produces the results. '),
(5, 'eBookshelf', 'How to Win Friends & Influence People', 'Dale Carnegie', 'Motivational', 'How to Win Friends and Influence People is a self-help book written by Dale Carnegie, published in 1936. Over 30 million copies have been sold worldwide, making it one of the best-selling books of all time. In 2011, it was number 19 on Time Magazine\'s list of the 100 most influential books. Carnegie had been conducting business education courses in New York since 1912. In 1934, Leon Shimkin of the publishing firm Simon & Schuster took one of Carnegie\'s 14-week courses on human relations and public speaking;[3] afterward, Shimkin persuaded Carnegie to let a stenographer take notes from the course to be revised for publication. The initial five thousand copies of the book sold exceptionally well, going through 17 editions in its first year alone. '),
(6, 'eBookshelf', 'Think and Grow Rich ', 'Napoleon Hill', 'Motivational', 'Think and Grow Rich was written by Napoleon Hill in 1937 and promoted as a personal development and self-improvement book. He claimed to be inspired by a suggestion from business magnate and later-philanthropist Andrew Carnegie. First published during the Great Depression, the book has sold more than 15 million copies. It remains the biggest seller of Napoleon Hill\'s books. BusinessWeek magazine\'s Best-Seller List ranked it the sixth best-selling paperback business book 70 years after it was published.Think and Grow Rich is listed in John C. Maxwell\'s A Lifetime \"Must Read\" Books List.\r\n'),
(7, 'eBookshelf', 'Awaken the Giant Within', 'Anthony Robbins', 'Motivational', 'Wake up and take control of your life! From the bestselling author of Inner Strength, Unlimited Power, and MONEY Master the Game, Anthony Robbins, the nation\'s leader in the science of peak performance, shows you his most effective strategies and techniques for mastering your emotions, your body, your relationships, your finances, and your life. The acknowledged expert in the psychology of change, Anthony Robbins provides a step-by-step program teaching the fundamental lessons of self-mastery that will enable you to discover your true purpose, take control of your life, and harness the forces that shape your destiny.'),
(8, 'eBookshelf', 'As a Man Thinketh', 'James Allen', 'Motivational', 'As a Man Thinketh is a self-help book by James Allen, published in 1903. It was described by Allen as \"... [dealing] with the power of thought, and particularly with the use and application of thought to happy and beautiful issues. I have tried to make the book simple, so that all can easily grasp and follow its teaching, and put into practice the methods which it advises. It shows how, in his own thought-world, each man holds the key to every condition, good or bad, that enters into his life, and that, by working patiently and intelligently upon his thoughts, he may remake his life, and transform his circumstances. The price of the book is only one shilling, and it can be carried in the pocket.\" It was also described by Allen as \"A book that will help you to help yourself\", \"A pocket companion for thoughtful people\", and \"A book on the power and right application of thought.\"'),
(9, 'eBookshelf', 'The Greatest Salesman in the World', 'Og Mandino', 'Motivational', 'The Greatest Salesman in the World is a book, written by Og Mandino, that serves as a guide to a philosophy of salesmanship, and success, telling the story of Hafid, a poor camel boy who achieves a life of abundance. The book was first published in 1968, and re-issued in 1983 by Bantam. A hardcover edition was published by Buccaneer Books in June, 1993. In 1970, Success Motivation Institute purchased the rights to produce the audio recording. If Mandino\'s suggested reading structure is followed, it would take about 10 months to read the book. '),
(10, 'eBookshelf', 'Don\'t Sweat the Small Stuff ', 'Richard Carlson', 'Motivational', 'Don\'t Sweat the Small Stuff... and it\'s all small stuff is a book that shows you how to keep from letting the little things in life drive you crazy. In thoughtful and insightful language, author Richard Carlson reveals ways to calm down in the midst of your incredibly hurried, stress-filled life. You can learn to put things in perspective by making the small daily changes he suggests,including advice such as \"Think of your problems as potential teachers\"; \"Remember that when you die, your \'In\' box won\'t be empty\"; and \"Do one thing at a time.\" You should also try to live in the present moment, let others have the glory at times, and lower your tolerance to stress. You can write down your most stubborn positions and see if you can soften them, learn to trust your intuitions, and live each day as if it might be your last. With gentle, supportive suggestions, Dr.Carlson reveals ways to make your actions more peaceful and caring, with the added benefit of making your life more calm and str'),
(11, 'eBookshelf', 'Drive', 'Daniel H. Pink ', 'Motivational', 'Most people believe that the best way to motivate is with rewards like money—the carrot-and-stick approach. That\'s a mistake, says Daniel H. Pink (author of To Sell Is Human: The Surprising Truth About Motivating Others). In this provocative and persuasive new book, he asserts that the secret to high performance and satisfaction-at work, at school, and at home—is the deeply human need to direct our own lives, to learn and create new things, and to do better by ourselves and our world. Drawing on four decades of scientific research on human motivation, Pink exposes the mismatch between what science knows and what business does—and how that affects every aspect of life. He examines the three elements of true motivation—autonomy, mastery, and purpose-and offers smart and surprising techniques for putting these into action in a unique book that will change how we think and transform how we live.'),
(12, 'eBookshelf', 'The Power of Positive Thinking', ' Norman Vincent Peale', 'Motivational', 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes. You\'ll learn how to: Expect the best and get it Believe in yourself and in everything you do Develop the power to reach your goals Break the worry habit and achieve a relaxed life Improve your personal and professional relationships Assume control over your circumstances Be kind to yourself '),
(13, 'eBookshelf', 'The Magic of Thinking Big ', 'David J. Schwartz', 'Motivational', 'The Magic of Thinking Big gives you useful methods, not empty promises. Dr. Schwartz presents a carefully designed program for getting the most out of your job, your marriage and family life, and your community. He proves that you don\'t need to be an intellectual or have innate talent to attain great success and satisfaction, but you do need to learn and understand the habit of thinking and behaving in ways that will get you there. '),
(27, 'atanu', 'The Da Vinci Code', 'Dan Brown', 'Mystery', 'Must Read!');

-- --------------------------------------------------------

--
-- Table structure for table `regular_receivemessage`
--

CREATE TABLE `regular_receivemessage` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `sendername` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_receivemessage`
--

INSERT INTO `regular_receivemessage` (`id`, `username`, `sendername`, `message`) VALUES
(1, 'Snigdho Dip Howlader', 'atanu', 'h'),
(2, 'Snigdho Dip Howlader', 'atanu', 'Hey!!');

-- --------------------------------------------------------

--
-- Table structure for table `regular_sell`
--

CREATE TABLE `regular_sell` (
  `id` int(6) UNSIGNED NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `book_condition` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `username` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_sell`
--

INSERT INTO `regular_sell` (`id`, `bookname`, `authorname`, `category`, `book_condition`, `price`, `username`, `photo`) VALUES
(13, 'Milk and Honey', 'Rupi Kaur', 'Poetry', 'Old', 750, 'atanu', 'milk_and_honey.jpg'),
(14, 'Death Note', 'ABCD', 'ABCD', 'old', 12, '', 'Death Note.png');

-- --------------------------------------------------------

--
-- Table structure for table `regular_sentmessage`
--

CREATE TABLE `regular_sentmessage` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `receivername` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_sentmessage`
--

INSERT INTO `regular_sentmessage` (`id`, `username`, `receivername`, `message`) VALUES
(1, 'atanu', 'Snigdho Dip Howlader', 'h'),
(2, 'atanu', 'Snigdho Dip Howlader', 'Hey!!');

-- --------------------------------------------------------

--
-- Table structure for table `regular_userlist`
--

CREATE TABLE `regular_userlist` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `profile_photo` varchar(60) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regular_userlist`
--

INSERT INTO `regular_userlist` (`id`, `name`, `email`, `username`, `password`, `phone_number`, `gender`, `profile_photo`, `status`) VALUES
(4, 'Atanu Saha', 'atanu.saha415@gmail.com', 'atanu', '12345678@', '01828675754', 'Male', 'SAHA, ATANU.JPG', 'active'),
(6, 'Snigdho Dip Howlader', 'snigdho@gmail.com', 'snigdho', '12345678@', '01777777777', 'Male', 'user.png', 'active'),
(9, 'abc', 'abc@gmail.com', 'abc123', '12345678@', '01999999999', 'Male', '', 'active'),
(10, 'asdadsas', 'asdad@asdas.com', 'atanuu', '12345678@', '01234567890', 'Male', '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `adminmessages`
--
ALTER TABLE `adminmessages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `to_user` (`to_user`),
  ADD KEY `fk_user_from_id` (`from_user`);

--
-- Indexes for table `bpage`
--
ALTER TABLE `bpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpagelogin`
--
ALTER TABLE `bpagelogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpageposts`
--
ALTER TABLE `bpageposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_bpage` (`from_bpage`);

--
-- Indexes for table `regular_activities`
--
ALTER TABLE `regular_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_addrating`
--
ALTER TABLE `regular_addrating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_addreview`
--
ALTER TABLE `regular_addreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_allbooks`
--
ALTER TABLE `regular_allbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_bookshelf`
--
ALTER TABLE `regular_bookshelf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_buy`
--
ALTER TABLE `regular_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_contact`
--
ALTER TABLE `regular_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_post`
--
ALTER TABLE `regular_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_receivemessage`
--
ALTER TABLE `regular_receivemessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_sell`
--
ALTER TABLE `regular_sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_sentmessage`
--
ALTER TABLE `regular_sentmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_userlist`
--
ALTER TABLE `regular_userlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `adminmessages`
--
ALTER TABLE `adminmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bpage`
--
ALTER TABLE `bpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bpageposts`
--
ALTER TABLE `bpageposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `regular_activities`
--
ALTER TABLE `regular_activities`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `regular_addrating`
--
ALTER TABLE `regular_addrating`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `regular_addreview`
--
ALTER TABLE `regular_addreview`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `regular_allbooks`
--
ALTER TABLE `regular_allbooks`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `regular_bookshelf`
--
ALTER TABLE `regular_bookshelf`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `regular_buy`
--
ALTER TABLE `regular_buy`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `regular_contact`
--
ALTER TABLE `regular_contact`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regular_post`
--
ALTER TABLE `regular_post`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `regular_receivemessage`
--
ALTER TABLE `regular_receivemessage`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regular_sell`
--
ALTER TABLE `regular_sell`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `regular_sentmessage`
--
ALTER TABLE `regular_sentmessage`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regular_userlist`
--
ALTER TABLE `regular_userlist`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD CONSTRAINT `fk_login_admin` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `bpagelogin`
--
ALTER TABLE `bpagelogin`
  ADD CONSTRAINT `fk_login_bpage` FOREIGN KEY (`id`) REFERENCES `bpage` (`id`);

--
-- Constraints for table `bpageposts`
--
ALTER TABLE `bpageposts`
  ADD CONSTRAINT `fk_sell_bpage` FOREIGN KEY (`from_bpage`) REFERENCES `bpage` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
