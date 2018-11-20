-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 08:22 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@gmail.com', 'administrator', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bk_id` int(11) NOT NULL,
  `src_name` varchar(100) NOT NULL,
  `src_address` varchar(255) NOT NULL,
  `src_state` varchar(100) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `dest_address` varchar(255) NOT NULL,
  `dest_state` varchar(100) NOT NULL,
  `trip_type` varchar(50) NOT NULL,
  `trip_date` varchar(50) NOT NULL,
  `trip_time` varchar(50) DEFAULT NULL,
  `vehicle_want` varchar(50) NOT NULL,
  `trip_form` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bk_id`, `src_name`, `src_address`, `src_state`, `dest_name`, `dest_address`, `dest_state`, `trip_type`, `trip_date`, `trip_time`, `vehicle_want`, `trip_form`, `client_id`, `status`, `amount`) VALUES
(3, 'Offa', 'uhuihuihnuhuh  ', 'Kwara', 'Akure', ' jnljnjnkjn nkjnkj ', 'Ondo', 'Round Trip', 'jbhjbkhbhkbk', 'bkhbhjkbhjb', 'Bus', 'Group', 4, 1, 3400),
(4, 'Ojota', ' Lagos area  ', 'Lagos', 'Ilesa', '   Osun north', 'Osun', 'One Time Trip', '10-March-2018', NULL, 'Car', 'Personal', 6, 1, 6429),
(5, 'Ojota', ' Lagos area  ', 'Lagos', 'Ilesa', '   Osun north', 'Osun', 'One Time Trip', '10-March-2018', NULL, 'Car', 'Personal', 6, 1, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `othername` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nok_surname` varchar(255) NOT NULL,
  `nok_othername` varchar(255) NOT NULL,
  `nok_email` varchar(100) NOT NULL,
  `nok_phone_num` varchar(20) NOT NULL,
  `nok_reln` varchar(100) NOT NULL,
  `nok_address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `surname`, `othername`, `email`, `password`, `phone_num`, `address`, `nok_surname`, `nok_othername`, `nok_email`, `nok_phone_num`, `nok_reln`, `nok_address`) VALUES
(1, 'jrgrjgirihj', 'hihihuihuihui', 'hghb@gmail.com', 'jhghhfgfkgkfgf', '098978686', 'ghghkghghfhfgfgfgfkgf bhjfghg ghgg', 'next of kin', 'jbjkbhjbhjbbhjbhjb', 'jbjbhjbhj@gmail.com', '0897867567565', 'Niece', 'hjghgh edgehfegfhef fgefhgef'),
(2, 'ijihihuihuh', 'hiuhuihulih', 'uu@gmail.com', 'adminpassword', '090080808', 'jkhjkhjgbhjgb', 'uhgugkug', 'ghjghjgkhj', 'jghjg@gmail.com', '09080809', 'Cousin', 'hjhjvbhjvbhj'),
(3, 'jfjfjhfjfrjjb', 'jjbjhbhjbh', 'bhbhbh@gmail.com', 'hhjjjbkjbkjb', '0908808088', ' jbjhbhjb hbhjkbjhbkjhb ', 'bhjbhjbhbhbhb', 'bhjbkhhjb', 'bjbhjbjhb@gmail.com', '098989907979', '-- Your relationship with next of kin --', '   hjkbb bkkkkk kbbhj '),
(4, 'knjknkjn', 'jnjnjn', 'tayo@gmail.com', 'adetayo', '9989889', 'njjlknjnjlbnjn   ', 'njblj', 'jbjlbjbjk', 'jbjb@gmail.com', '908979797', 'Cousin', '  bhbhbh    '),
(5, 'Afonja', 'Adeoti', 'jjnjnhjjn@gmail.com', 'jbnjbjbjkbj', '9989889', 'njjlknjnjlbnjn      ', 'njblj', 'jbjlbjbjk', 'jbjb@gmail.com', '908979797', 'Friend', '     bhbhbh       '),
(6, 'Olayiwola', 'Sanusi', 'sanzi@gmail.com', 'sanusi', '09032210999', ' No 11, Akano estate, Ibadan', 'Ogunsola', 'Mathew', 'mathew@gmail.com', '08042713246', 'Friend', 'Ajibode zone  ');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `e_id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`e_id`, `topic`, `message`, `client_id`, `status`) VALUES
(2, 'The receipt in my mail is not what i booked', 'client_id edjenjef efjenfjrf rfkrfnrf rfkrnfkrf rfrfnrkf rfrfnrkfr frfnrkfrn frfnrf rfrnfjrf rfrnfjrf rfrfn', 4, 1),
(3, 'The receipt in my mail is not what i booked', 'client_id edjenjef efjenfjrf rfkrfnrf rfkrnfkrf rfrfnrkf rfrfnrkfr frfnrkfrn frfnrf rfrnfjrf rfrnfjrf rfrfn', 4, 1),
(4, 'The total amount of fee in my receipt is incorrect', 'client_id edjenjef efjenfjrf rfkrfnrf rfkrnfkrf rfrfnrkf rfrfnrkfr frfnrkfrn frfnrf rfrnfjrf rfrnfjrf rfrfn', 4, 1),
(5, 'I couldn''t get any receipt in my mail box', 'Fix this pls', 4, 1),
(6, 'I didn''t receive any payment notification on my bookings', 'Please, i need to be notified ASAP', 4, 1),
(7, 'The receipt in my mail is not what i booked', 'Dont worry', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `n_id` int(11) NOT NULL,
  `topic` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `read_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_id`, `topic`, `message`, `client_id`, `read_by`) VALUES
(1, 'The receipt in my mail is not what i booked', 'Okay,we''ll get back to you', 4, 1),
(2, 'The receipt in my mail is not what i booked', 'Okay, Very soon, it will be rectified.', 4, 1),
(3, 'The total amount of fee in my receipt is incorrect', 'Weldone sir', 4, 0),
(4, 'I couldn''t get any receipt in my mail box', 'Alright', 4, 1),
(5, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)<br>\r\n                      We received your transport booking with the following details:<br><br>\r\n                      From: Offa (Kwara)<br>\r\n                      To: Akure (Ondo)<br><br>\r\n                      The total amount of your transaction is  5000<br><br>\r\n                      TAKSI TRANSPORT', 4, 1),
(6, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)<br>\r\n                      We received your transport booking with the following details:<br><br>\r\n                      From: Offa (Kwara)<br>\r\n                      To: Akure (Ondo)<br><br>\r\n                      The total amount of your transaction is  5000<br><br>\r\n                      TAKSI TRANSPORT', 4, 1),
(7, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)<br>\r\n                      We received your transport booking with the following details:<br><br>\r\n                      From: Offa (Kwara)<br>\r\n                      To: Akure (Ondo)<br><br>\r\n                      The total amount of your transaction is  4500<br><br>\r\n                      TAKSI TRANSPORT', 4, 1),
(8, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)\r\n                            We received your transport booking with the following details:\r\n                            From: Offa (Kwara)\r\n                            To: Akure (Ondo)\r\n                            The total amount of your transaction is  7500\r\n                            TAKSI TRANSPORT', 4, 1),
(9, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)\r\n                            We received your transport booking with the following details:\r\n                            From: Offa (Kwara)\r\n                            To: Akure (Ondo)\r\n                            The total amount of your transaction is  6700\r\n\r\n\r\n                            Regards...\r\n                            TAKSI TRANSPORT', 4, 1),
(10, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)\r\n\r\n                            We received your transport booking with the following details:\r\n                            \r\n                            From: Offa (Kwara)\r\n                            To: Akure (Ondo)\r\n                            The total amount of your transaction is  7800\r\n\r\n\r\n                            Regards...\r\n                            TAKSI TRANSPORT', 4, 1),
(11, 'Payment update on your journey Offa (Kwara) - Akure (Ondo)', 'Dear knjknkjn jnjnjn (tayo@gmail.com, 9989889)\r\n\r\n                            We received your transport booking with the following details:\r\n\r\n                            From: Offa (Kwara)\r\n                            To: Akure (Ondo)\r\n                            The total amount of your transaction is  3400\r\n\r\n\r\n                            Regards...\r\n                            TAKSI TRANSPORT', 4, 1),
(12, 'The receipt in my mail is not what i booked', 'We will rectify it\r\n\r\nWe very sorry for that\r\n\r\nRegards.\r\nTAKSI TRANPORT', 4, 0),
(13, 'I didn''t receive any payment notification on my bookings', 'We apologize for this\r\n\r\nYou''ll soon be sent the notification on your payment\r\n\r\nRegards ', 4, 1),
(14, 'Payment update on your journey Ojota (Lagos) - Ilesa (Osun)', 'Dear Olayiwola Sanusi (sanzi@gmail.com, 09032210999)\r\n\r\n                            We received your transport booking with the following details:\r\n\r\n                            From: Ojota (Lagos)\r\n                            To: Ilesa (Osun)\r\n                            The total amount of your transaction is  6429\r\n\r\n\r\n                            Regards...\r\n                            TAKSI TRANSPORT', 6, 1),
(15, 'Payment update on your journey Ojota (Lagos) - Ilesa (Osun)', 'Dear Olayiwola Sanusi (sanzi@gmail.com, 09032210999)\r\n\r\n                            We received your transport booking with the following details:\r\n\r\n                            From: Ojota (Lagos)\r\n                            To: Ilesa (Osun)\r\n                            The total amount of your transaction is  3500\r\n\r\n\r\n                            Regards...\r\n                            TAKSI TRANSPORT', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_enq`
--

CREATE TABLE IF NOT EXISTS `subject_enq` (
  `sub_id` int(11) NOT NULL,
  `body` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_enq`
--

INSERT INTO `subject_enq` (`sub_id`, `body`) VALUES
(3, 'I couldn''t get any receipt in my mail box'),
(4, 'The receipt in my mail is not what i booked'),
(5, 'The total amount of fee in my receipt is incorrect'),
(6, 'I didn''t receive any payment notification on my bookings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `subject_enq`
--
ALTER TABLE `subject_enq`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `subject_enq`
--
ALTER TABLE `subject_enq`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
