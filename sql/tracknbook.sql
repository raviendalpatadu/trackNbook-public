-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2023 at 01:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracknbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compartment`
--

CREATE TABLE `tbl_compartment` (
  `compartment_id` int(11) NOT NULL,
  `compartment_train_id` int(11) NOT NULL,
  `compartment_class_type` varchar(50) NOT NULL,
  `compartment _seat_layout` varchar(15) NOT NULL,
  `compartment_total_seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_compartment`
--

INSERT INTO `tbl_compartment` (`compartment_id`, `compartment_train_id`, `compartment_class_type`, `compartment _seat_layout`, `compartment_total_seats`) VALUES
(1, 1, '1st class', '3x2', 0),
(2, 1, '2nd class', '3x2', 55);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(60) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_username`, `login_password`, `user_id`) VALUES
(1, 'rav', '123', 1),
(2, 'admin@gm.com', 'admin', 2),
(3, 'menu', 'me', 3),
(4, 'stass_g@gm.com', 'staff_g', 4),
(5, 'bolee', 'chty', 5),
(6, 'weq', '2', 6),
(7, 'some', 'some', 7),
(8, 'shika', '77ec8952be7c961a1b975a00de15a630', 8),
(9, 'gon', 'c6fac1b43c0b97c1a80e11267cca23e9', 9),
(10, 'raviee', 'db26ee047a4c86fbd2fba73503feccb6', 10),
(11, 'silu', 'ac5585d98646d255299c359140537783', 11),
(12, 'asd', '7815696ecbf1c96e6894b779456d330e', 12),
(13, 'staff_ticketing', '792aee01c1f023fa484da5e7680ff539', 13),
(14, 'shi', 'cefd573c75ef3e8eee5ae1ffe4243497', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_passengers`
--

CREATE TABLE `tbl_passengers` (
  `passenger_id` int(11) NOT NULL,
  `passenger_email` varchar(50) NOT NULL,
  `passenger_nic` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_passengers`
--

INSERT INTO `tbl_passengers` (`passenger_id`, `passenger_email`, `passenger_nic`) VALUES
(1, 'dalapta@gma.cm', '200123602078'),
(3, 'meni@da.cm', '21001'),
(5, 'moushi@gm.com', '20012121'),
(6, 'sda@gm.com', '32'),
(7, 'some@gm.com', '23412'),
(8, 'sanath_dalpatadu@yahoo.com', '21312312'),
(9, 'gon@gm.com', '221'),
(10, 'dalpataduravien@gmail.com', '200123602078'),
(11, 'siluni@gm.com', '2342342'),
(12, 'sanath_dalpatadu@yahoo.com', '213123'),
(13, 'staffTicketing@yahoo.com', '200123602078'),
(14, 'sanath_dalpatadu@yahoo.com', '200123602078');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_passenger_id` int(11) NOT NULL,
  `reservation_start_station` int(11) NOT NULL,
  `reservation_end_station` int(11) NOT NULL,
  `reservation_train_id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_class` int(20) NOT NULL,
  `reservation_seat` int(20) NOT NULL,
  `reservation_passenger_title` varchar(5) NOT NULL,
  `reservation_passenger_first_name` varchar(50) NOT NULL,
  `reservation_passenger_last_name` varchar(50) NOT NULL,
  `reservation_passenger_nic` bigint(12) NOT NULL,
  `reservation_passenger_phone_number` int(15) NOT NULL,
  `reservation_passenger_email` varchar(50) NOT NULL,
  `reservation_passenger_gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`reservation_id`, `reservation_passenger_id`, `reservation_start_station`, `reservation_end_station`, `reservation_train_id`, `reservation_date`, `reservation_class`, `reservation_seat`, `reservation_passenger_title`, `reservation_passenger_first_name`, `reservation_passenger_last_name`, `reservation_passenger_nic`, `reservation_passenger_phone_number`, `reservation_passenger_email`, `reservation_passenger_gender`) VALUES
(3, 10, 14, 1, 3, '2023-11-04', 1, 1, 'Miss.', 'sdadad', 'sdada', 132123, 3112123, 'sdada@gmail.com', 'male'),
(7, 11, 14, 1, 3, '2023-11-14', 1, 1, 'Mr.', 'Kavisha', 'dalpe', 20122121, 701949400, 'dalpe@gm.com', 'male'),
(8, 11, 14, 1, 3, '2023-11-04', 1, 6, 'Mrs.', 'moushika', 'kriyanjalee', 2339392, 909933, 'moushika@gm.com', 'female'),
(10, 11, 14, 1, 3, '2023-11-04', 1, 19, 'Mr.', 'vinipua', 'thenuka', 2147483647, 2147483647, 'vinupa@gmail.com', 'male'),
(11, 11, 14, 1, 3, '2023-11-04', 1, 22, 'Miss.', 'siluni', 'Vethimi', 21321313, 23131321, 'silu@gm.com', 'female'),
(12, 11, 14, 1, 3, '2023-11-04', 2, 14, 'Mr.', 'indusara', 'udantha', 31231, 32132, '32133', 'male'),
(13, 11, 14, 1, 3, '2023-11-04', 2, 18, 'Mr.', 'madasha', 'podi', 2132131, 71, 'maddas', 'female'),
(14, 11, 14, 1, 3, '2023-11-04', 3, 1, 'Mr.', 'dad', 'ds', 132, 321, 'asda', 'female'),
(15, 11, 14, 1, 3, '2023-11-04', 3, 2, 'Miss.', 'ewqeq', 'ewq', 213, 321, 'sdad@yahoo.com', 'male'),
(16, 11, 1, 7, 2, '2023-11-03', 1, 1, 'Mr.', 'ravien', 'dalpe', 2342432, 718118969, 'sanath_dalpatadu@yahoo.com', 'male'),
(17, 11, 14, 1, 1, '2023-11-04', 1, 9, 'Mr.', 'ravien', 'dalpe', 2147483647, 718118969, 'sanath_dalpatadu@yahoo.com', 'male'),
(19, 11, 14, 1, 3, '2023-11-04', 1, 27, 'Mr.', 'menura', 'wije', 2147483647, 718118923, 'menu@yahoo.com', 'male'),
(20, 11, 1, 7, 2, '2023-11-14', 1, 5, 'Mr.', 'thanu', 'henn', 2147483647, 718118969, 'sanath_dalpatadu@yahoo.com', 'male'),
(21, 11, 1, 7, 2, '2023-11-14', 1, 6, 'Mr.', 'mihiri', 'hennayake', 2147483647, 718118969, 'sanath_dalpatadu@yahoo.com', 'female'),
(22, 11, 14, 1, 3, '2023-11-14', 1, 22, 'Mr.', 'namalie', 'liyanage', 696853444, 718045940, 'namali_69@yahoo.com', 'female'),
(28, 11, 14, 1, 3, '2023-11-27', 1, 14, 'Miss.', 'ghjk', 'fghjk', 2147483647, 718115656, 'huhu@yahoo.com', 'female'),
(29, 11, 1, 7, 2, '2023-11-28', 3, 18, 'Mr.', 'ravien', 'dalpe', 2147483647, 718118969, 'sanath_dalpatadu@yahoo.com', 'male'),
(30, 11, 1, 7, 2, '2023-11-26', 3, 19, 'Mr.', 'ravien', 'dalpe', 2147483647, 718118969, 'sanath_dalpatadu@yahoo.com', 'male'),
(31, 11, 14, 1, 3, '2023-11-04', 1, 31, 'Mr.', 'yashmika', 'kriyanjalee', 2147483647, 718118932, 'yah@yahoo.com', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE `tbl_route` (
  `route_no` int(11) NOT NULL,
  `route_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_route`
--

INSERT INTO `tbl_route` (`route_no`, `route_name`) VALUES
(1, 'colombo-badulla'),
(2, 'colombo-jaffna'),
(4, 'colombo-kandy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route_station`
--

CREATE TABLE `tbl_route_station` (
  `route_no` int(11) NOT NULL,
  `station_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_route_station`
--

INSERT INTO `tbl_route_station` (`route_no`, `station_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 6),
(4, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seat`
--

CREATE TABLE `tbl_seat` (
  `seat_no` int(11) NOT NULL,
  `seat_compartment_id` int(11) NOT NULL,
  `seat_availablity` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seat`
--

INSERT INTO `tbl_seat` (`seat_no`, `seat_compartment_id`, `seat_availablity`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_station`
--

CREATE TABLE `tbl_station` (
  `station_id` int(11) NOT NULL,
  `station_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_station`
--

INSERT INTO `tbl_station` (`station_id`, `station_name`) VALUES
(1, 'Colombo'),
(2, 'Kandy'),
(3, 'Galle'),
(4, 'Negombo'),
(5, 'Trincomalee'),
(6, 'Anuradhapura'),
(7, 'Polonnaruwa'),
(8, 'Sigiriya'),
(9, 'Dambulla'),
(10, 'Koggala'),
(11, 'Mirissa'),
(12, 'Bandarawela'),
(13, 'Ella'),
(14, 'Badulla'),
(15, 'Nanuoya'),
(16, 'Haputhale');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_train`
--

CREATE TABLE `tbl_train` (
  `train_id` int(11) NOT NULL,
  `train_name` varchar(200) NOT NULL,
  `train_type` varchar(200) NOT NULL,
  `train_start_time` time NOT NULL,
  `train_end_time` time NOT NULL,
  `train_start_station` int(11) NOT NULL,
  `train_end_station` int(11) NOT NULL,
  `train_route` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_train`
--

INSERT INTO `tbl_train` (`train_id`, `train_name`, `train_type`, `train_start_time`, `train_end_time`, `train_start_station`, `train_end_station`, `train_route`) VALUES
(1, 'Udarat menike', 'Express', '05:00:00', '16:00:02', 14, 1, 1),
(2, 'yaldewi', 'express', '05:00:00', '16:00:48', 1, 7, 2),
(3, 'udaratamenike 2', 'express', '05:00:00', '16:00:02', 14, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_title` varchar(10) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_phone_number` int(13) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_title`, `user_first_name`, `user_last_name`, `user_phone_number`, `user_type`, `user_gender`) VALUES
(1, 'Mr.', 'ravien', 'dalpatadu', 701949400, 'passenger', ''),
(2, 'Mr.', 'admin', 'as', 231, 'admin', ''),
(3, 'Mr.', 'menuwa', 'weje', 9091, 'passenger', ''),
(4, 'Mr.', 'staff', 'general', 312, 'staff_general', ''),
(5, 'Miss.', 'moushika', 'kriyanjale', 211, 'passenger', ''),
(6, 'Mrs.', 'gew', 'jkj', 23231, 'passenger', 'male'),
(7, 'Mr.', 'some', 'pala', 332, 'passenger', 'male'),
(8, 'Mrs.', 'shika', 'dalpatadu', 718118969, 'passenger', 'male'),
(9, 'Miss.', 'gonn', 'gaha', 212, 'passenger', 'female'),
(10, 'Mr.', 'ravien', 'dalpatadu', 701949400, 'passenger', 'male'),
(11, 'Mr.', 'silnui', 'ala', 342334232, 'passenger', 'female'),
(12, 'Mr.', 'dadsa', 'dfs', 718118969, 'passenger', 'male'),
(13, 'Mr.', 'staff', 'ticketing', 718118969, 'staff_ticketing', 'male'),
(14, 'Mr.', 'dadsa', 'dfs', 718118969, 'staff_ticketing', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warrant_reservation`
--

CREATE TABLE `tbl_warrant_reservation` (
  `warrant_id` int(11) NOT NULL,
  `warrant_status` varchar(20) NOT NULL,
  `warrent_reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_warrant_reservation`
--

INSERT INTO `tbl_warrant_reservation` (`warrant_id`, `warrant_status`, `warrent_reservation_id`) VALUES
(1, 'pending', 20),
(2, 'rejected', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_compartment`
--
ALTER TABLE `tbl_compartment`
  ADD PRIMARY KEY (`compartment_id`),
  ADD KEY `compfk` (`compartment_train_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_passengers`
--
ALTER TABLE `tbl_passengers`
  ADD KEY `user_fk` (`passenger_id`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD UNIQUE KEY `reservation_date` (`reservation_date`,`reservation_class`,`reservation_seat`),
  ADD KEY `passenger_fk` (`reservation_passenger_id`),
  ADD KEY `start_station_fk` (`reservation_start_station`),
  ADD KEY `end_station_fk` (`reservation_end_station`),
  ADD KEY `train_fk` (`reservation_train_id`);

--
-- Indexes for table `tbl_route`
--
ALTER TABLE `tbl_route`
  ADD PRIMARY KEY (`route_no`);

--
-- Indexes for table `tbl_route_station`
--
ALTER TABLE `tbl_route_station`
  ADD PRIMARY KEY (`route_no`,`station_id`),
  ADD KEY `station_id` (`station_id`);

--
-- Indexes for table `tbl_seat`
--
ALTER TABLE `tbl_seat`
  ADD PRIMARY KEY (`seat_no`,`seat_compartment_id`),
  ADD KEY `comp_fk` (`seat_compartment_id`);

--
-- Indexes for table `tbl_station`
--
ALTER TABLE `tbl_station`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `tbl_train`
--
ALTER TABLE `tbl_train`
  ADD PRIMARY KEY (`train_id`),
  ADD KEY `starstation_fk` (`train_start_station`),
  ADD KEY `endstation_fk` (`train_end_station`),
  ADD KEY `route_fk` (`train_route`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_warrant_reservation`
--
ALTER TABLE `tbl_warrant_reservation`
  ADD PRIMARY KEY (`warrant_id`),
  ADD KEY `reservation_fk` (`warrent_reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_compartment`
--
ALTER TABLE `tbl_compartment`
  MODIFY `compartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_route`
--
ALTER TABLE `tbl_route`
  MODIFY `route_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_station`
--
ALTER TABLE `tbl_station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_train`
--
ALTER TABLE `tbl_train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_warrant_reservation`
--
ALTER TABLE `tbl_warrant_reservation`
  MODIFY `warrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_compartment`
--
ALTER TABLE `tbl_compartment`
  ADD CONSTRAINT `compfk` FOREIGN KEY (`compartment_train_id`) REFERENCES `tbl_train` (`train_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_passengers`
--
ALTER TABLE `tbl_passengers`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`passenger_id`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD CONSTRAINT `end_station_fk` FOREIGN KEY (`reservation_end_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passenger_fk` FOREIGN KEY (`reservation_passenger_id`) REFERENCES `tbl_passengers` (`passenger_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `start_station_fk` FOREIGN KEY (`reservation_start_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `train_fk` FOREIGN KEY (`reservation_train_id`) REFERENCES `tbl_train` (`train_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_route_station`
--
ALTER TABLE `tbl_route_station`
  ADD CONSTRAINT `tbl_route_station_ibfk_1` FOREIGN KEY (`route_no`) REFERENCES `tbl_route` (`route_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_route_station_ibfk_2` FOREIGN KEY (`station_id`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_seat`
--
ALTER TABLE `tbl_seat`
  ADD CONSTRAINT `comp_fk` FOREIGN KEY (`seat_compartment_id`) REFERENCES `tbl_compartment` (`compartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_train`
--
ALTER TABLE `tbl_train`
  ADD CONSTRAINT `endstation_fk` FOREIGN KEY (`train_end_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `route_fk` FOREIGN KEY (`train_route`) REFERENCES `tbl_route` (`route_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `starstation_fk` FOREIGN KEY (`train_start_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_warrant_reservation`
--
ALTER TABLE `tbl_warrant_reservation`
  ADD CONSTRAINT `reservation_fk` FOREIGN KEY (`warrent_reservation_id`) REFERENCES `tbl_reservation` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
