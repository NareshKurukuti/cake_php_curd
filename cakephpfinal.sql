-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 02:52 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakephpfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `id` int(11) NOT NULL,
  `Full Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mobile No` int(11) NOT NULL,
  `Date of Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `organization_name` varchar(222) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `username`, `password`, `organization_name`, `country`) VALUES
(1, 'shailaja', 'shailu.gattu26@gmail.com', '$2y$10$anyXh3qxhTHN5c1fef5QM..a13gW4NhX6YGMqvBToMMIvuZb0LeEa', 'vivenns', 1),
(2, 'shailaja', 'Shailu@gmail.com', '$2y$10$qTW4zzg9tfMkGXCjmhT2Gu.duAsyJHaMGVmOIDMqsoz4Jn/UFeITO', 'vivenns', 2);

-- --------------------------------------------------------

--
-- Table structure for table `agents_users`
--

CREATE TABLE `agents_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `qualification` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents_users`
--

INSERT INTO `agents_users` (`id`, `user_id`, `name`, `email`, `mobile`, `qualification`, `address`) VALUES
(1, 1, 'test1', 'test1@gmail.com', 'efe', 'btech', 'chirala'),
(2, 2, 'testdemo', 'testdemo@gmail.com', 'ewrf', 'btech', 'testdemo'),
(3, 1, 'test1', 'test@gmail.com', 'eewr', 'inter', 'test'),
(4, 1, 'demo', 'demo@gmail.com', 'demo', 'demo', 'demo'),
(5, 1, 'demo1', 'demo1@gmail.com', 'rrr', 'demo1', 'demo'),
(6, 1, 'test5', 'admin@gmail.com', 'rw', 't', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(14) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `fullname`, `email`, `password`, `phone`, `created`, `modified`) VALUES
(1, 'naresh kurukuti', 'naresh@gmail.com', '$2y$10$UI6K38DhqyX22xKTklFkjeSCEObc71Sv/lLjAVMBMjBZx9/sthqQq', '8979879879', '2017-10-14 06:41:22', '2017-10-23 05:33:48'),
(2, 'jskjfk12', 'n@gmail.com', '$2y$10$71SuVkZsM5B3khBKgU2AQ.Q/AvQyRy58dRfKPTXfSKwhKSiuWD8cO', '123456', '2017-10-14 06:55:24', '2017-10-18 06:00:02'),
(3, 'naresh kurukuti', 'werwe@gmail.com', '$2y$10$RZnJkjO.ynvqN3GeCwmaiud6pzJ6RDDDpSIGgfKmllf7QUSKsn55e', '34234234', '2017-10-14 06:58:16', '2017-10-14 06:58:16'),
(4, 'fullname', 'new@gmail.com', '$2y$10$YEzVoEwHr8hljTsHrkg6O.7EO7OW5BZCKUILiFn1FiGYfuWp0K1N6', '8885475213', '2017-10-14 07:16:08', '2017-10-18 06:46:29'),
(5, 'newUser', 'newuser@gmail.com', '$2y$10$e1VGkgQ2xsJym34a7WP09./tCpWmV7EfPysEVZ2L.FdY16XXfsBY.', '7412589632', '2017-10-14 07:19:54', '2017-10-14 07:19:54'),
(6, 'ertert', 'ertret@gmail.com', '$2y$10$2v8tlzBbLOfpx8QyFrIeOeZztL8N.abpmObGMQcgtjOS9tF1o8m2m', '8797898789', '2017-10-14 10:17:02', '2017-10-14 10:17:02'),
(7, 'erw234 23', 'werwer@gmail.com', '$2y$10$zJF3.HtxegR9ZddD5auWluR35ythvwSB4Fxo/TxGgSOK.HzVmtcpa', '7412312347', '2017-10-14 10:23:19', '2017-10-14 10:23:19'),
(8, 'werwe234', 'qkhwqk@gmail.com', '$2y$10$iCCAUETYrrFNli6B313N0eTtPifDVzzE3ZdfpoX4z4fmwD9torQKi', '2342233434', '2017-10-14 10:24:05', '2017-10-14 10:24:05'),
(9, 'naresh kurukuti', 'naresh1@gmail.com', '$2y$10$K.UH0BqDC/AcYhmbguXbieHbAthR7s4lVUFtlMOnp3jHwJ4ATwYLC', '9677857554', '2017-10-14 11:24:03', '2017-10-14 11:24:03'),
(10, 'regwerwer', 'rewerwe@gmail.com', '$2y$10$bftelnJqHdS.Jt5Xs8TNveACBPjtv5Dxxii6CvRxG3QTASIb4gaqi', '7897897897', '2017-10-14 11:47:54', '2017-10-14 11:47:54'),
(11, 'fullnameone', 'fullnameone@gmail.com', '$2y$10$GqSCpduejO7IxbGruB6NgeFFtAtFr/4DF.wOnJg6NSS/2dOw7Ea2i', '8885475213', '2017-10-14 11:48:37', '2017-10-14 11:48:37'),
(12, 'provider', 'provider@gmail.com', '$2y$10$pFc1J4szZxo9omaMX0eJ8OGsA8TjBeDaRoqi3uQqXVr5NVC7KL8xC', '8885475213', '2017-10-14 11:55:03', '2017-10-14 11:55:03'),
(13, 'erwerrwerwe', 'wjehrjkw@gmail.com', '$2y$10$JmmoZwuVOi0vUtZukUufbe8HbfRXgf5LzcH7kWvV/ocqsg81MnPPq', '7894561234', '2017-10-14 12:03:00', '2017-10-14 12:03:00'),
(14, 'etrwer', 'werwerwerwer@gmail.com', '$2y$10$GYYl/M6QaCu2WWkB3FWLvO1W0ItsR8p3gAVMfmGRJytD9xD6ZxGNi', '1478963253', '2017-10-14 12:04:58', '2017-10-14 12:04:58'),
(15, 'werwerwerwer', 'nareswer@gmail.com', '$2y$10$93cBevhJiWB/vFGjPtH6MONy7Psim.2UilZtaTzZYQDUbai843IJC', '1231231231', '2017-10-14 12:05:55', '2017-10-14 12:05:55'),
(16, 'weweweqweq', 'ksdjfklsjdf@gmail.com', '$2y$10$pMMfRd2LoS6G6EDQHPLhLucJoPFtXBGGQFdCLf.quFmx5/umjCny.', '1231234561', '2017-10-14 12:07:04', '2017-10-14 12:07:04'),
(17, 'wekrjwek', 'jksjdfkls@gmail.com', '$2y$10$oAnYr4HFkZWQza8zqb18/.3J9ND5E8Mn7zQdF8cNR8BYjyo5KVXgC', '7897897897', '2017-10-21 11:36:57', '2017-10-21 11:36:57'),
(18, 'new name123', 'newemail1@gmail.com', '$2y$10$oDhoFlQqW.aUSRtFeWgCP.UnUm/zq1pB602oBtJna67lZ5NgQqjoa', '7897418522', '2017-10-23 09:49:11', '2017-10-23 09:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `provider_users`
--

CREATE TABLE `provider_users` (
  `id` int(14) NOT NULL,
  `provider_id` int(14) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` char(1) NOT NULL,
  `birthdate` text,
  `qualification` char(1) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider_users`
--

INSERT INTO `provider_users` (`id`, `provider_id`, `name`, `email`, `gender`, `birthdate`, `qualification`, `phone`, `city`, `address`, `created`, `modified`) VALUES
(1, 1, 'Naresh Kurukuti', 'nkurukuti@gmail.com', 'm', '2016-06-25 00:00:00', 'b', '8885475213', 'Hyderabad', 'werwerwe', '2017-10-19 00:00:00', '2017-10-27 00:00:00'),
(2, 2, 'wmernkwj', 'kjdlkf@gmail.com', 'f', '2017-10-18 00:00:00', 'd', '456579879', 'gvdfg', 'dfgdfgfdgdfg', '2017-10-17 00:00:00', '2017-10-28 00:00:00'),
(4, 1, 'Kurukuti Naresh', 'kurukuti@gmail.com', 'm', '2017-10-30 00:00:00', 'd', '1478998741', 'hyderabad,chennai', 'wewrwerwer', '2017-10-20 10:24:45', '2017-10-20 11:36:28'),
(8, 1, 'ksdjflk', 'jlkjlk@gmail.com', 'm', '2017-10-30 00:00:00', 'b', '1478987417', 'hyderabad,banglore,chennai', 'wqeqweqweqwe', '2017-10-20 12:15:18', '2017-10-20 12:15:18'),
(9, 1, 'Nwkjerkl', 'jklsdjlksdj@gmail.com', 'm', '10/26/2017', 'b', '8979879879', 'hyderabad,banglore', 'wsdwrwrwerwer', '2017-10-21 05:19:12', '2017-10-21 05:19:12'),
(10, 1, 'ertert', 'erterterterter@gmail.com', 'm', '10/20/2017', 'b', '8885475213', 'hyderabad', 'werwerwerwer', '2017-10-21 05:21:30', '2017-10-21 05:21:30'),
(11, 1, 'dsfsdf', 'sdfsdf@gmail.com', 'f', '10/17/2017', 'd', '2323', '', 'dsfdsf', '2017-10-21 12:11:28', '2017-10-21 12:11:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents_users`
--
ALTER TABLE `agents_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_users`
--
ALTER TABLE `provider_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agents_users`
--
ALTER TABLE `agents_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `provider_users`
--
ALTER TABLE `provider_users`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
