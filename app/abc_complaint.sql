-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 10:58 AM
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
-- Database: `abc_complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` varchar(2500) NOT NULL,
  `action` varchar(2500) NOT NULL,
  `priority` int(11) NOT NULL,
  `statusID` int(11) NOT NULL,
  `date` date NOT NULL,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `userID`, `serviceID`, `locationID`, `subject`, `description`, `action`, `priority`, `statusID`, `date`, `adminID`) VALUES
(4, 1, 3, 1, 'Cable isn\'t receiving ', 'Cable isn\'t working normally bad service and bad customer support. ', 'Please fix the cable and work on your employees attitude. ', 3, 1, '2021-03-07', 1),
(5, 2, 2, 2, 'Satellite not working', 'Satalite not woking', 'fix Satalite not woking', 1, 1, '2021-03-10', 1),
(6, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 2, '2021-03-11', 1),
(7, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1),
(8, 1, 3, 1, 'Cable isn\'t receiving ', 'Cable isn\'t working normally bad service and bad customer support. ', 'Please fix the cable and work on your employees attitude. ', 3, 1, '2021-03-07', 1),
(9, 2, 2, 2, 'Satellite not working', 'Satalite not woking', 'fix Satalite not woking', 1, 1, '2021-03-10', 1),
(10, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1),
(11, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1),
(12, 1, 3, 1, 'Cable isn\'t receiving ', 'Cable isn\'t working normally bad service and bad customer support. ', 'Please fix the cable and work on your employees attitude. ', 3, 3, '2021-03-07', 1),
(13, 2, 2, 2, 'Satellite not working', 'Satalite not woking', 'fix Satalite not woking', 1, 2, '2021-03-10', 1),
(14, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1),
(15, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1),
(16, 1, 3, 1, 'Cable isn\'t receiving ', 'Cable isn\'t working normally bad service and bad customer support. ', 'Please fix the cable and work on your employees attitude. ', 3, 1, '2021-03-07', 1),
(17, 2, 2, 2, 'Satellite not working', 'Satalite not woking', 'fix Satalite not woking', 1, 1, '2021-03-10', 1),
(18, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1),
(19, 2, 2, 3, 'Satellite not working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, 1, '2021-03-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'Jordan'),
(2, 'United Arab of Emirates'),
(3, 'United Kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `service_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `service_description`) VALUES
(1, 'Digital Terrestrial Broadcast', 'Digital terrestrial television (DTTV or DTT, or DTTB with \"broadcasting\") is a technology for terrestrial television in which land-based (terrestrial) television stations broadcast television content by radio waves to televisions in consumers\' residences in a digital format.'),
(2, 'Satellite Broadcast', 'Over 6600 TV channels, 1700 HDTV channels and 1100 radio stations now broadcast via the extensive capacity of our 39 satellites, both to homes equipped for DTH reception and to those connected via cable, IP and DTT networks.'),
(3, 'Cable Television Broadcasting', 'With five new flexible packages and your pick of monthly add-ons, BT TV lets you put together your perfect TV line-up. And here’s the best bit – you can change your package every month, so you only pay for the things you actually want. Football season finished? Turn off. New show starting? Turn on.');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'pending'),
(2, 'resolved'),
(3, 'dismissed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `roleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `roleID`) VALUES
(1, 'ahmad', 'Ahmad', 'Jaber', 'ahmadjaber1998@gmail.com', '$2y$10$.gmYtpePTRfvSMiI/kIj4eWvm0WQxP4Orn7oZo.4IhnF85m03xBaa', '0795388795', 2),
(2, 'salahjaber', 'Salah', 'Jaber', 'ahmadjaber.work@gmail.com', '$2y$10$0JFnk5EQ3R1ASvGgrGodR.aSQy4J0lMYr2kf69.WurJuujRri46oO', '+962776496260', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `user_ID` (`userID`),
  ADD KEY `service_ID` (`serviceID`),
  ADD KEY `location_ID` (`locationID`),
  ADD KEY `status_ID` (`statusID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_ID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `location_ID` FOREIGN KEY (`locationID`) REFERENCES `location` (`id`),
  ADD CONSTRAINT `service_ID` FOREIGN KEY (`serviceID`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `status_ID` FOREIGN KEY (`statusID`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_ID` FOREIGN KEY (`roleID`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
