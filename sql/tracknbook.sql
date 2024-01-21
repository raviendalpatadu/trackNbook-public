-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 06:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `compartment_class` varchar(11) NOT NULL DEFAULT '3',
  `compartment_class_type` int(11) NOT NULL,
  `compartment_seat_layout` varchar(15) NOT NULL,
  `compartment_total_seats` int(100) NOT NULL,
  `compartment_total_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_compartment`
--

INSERT INTO `tbl_compartment` (`compartment_id`, `compartment_train_id`, `compartment_class`, `compartment_class_type`, `compartment_seat_layout`, `compartment_total_seats`, `compartment_total_number`) VALUES
(3, 18, '1', 1, '2x2', 48, 2),
(4, 18, '2', 4, '2x2', 48, 2),
(5, 18, '3', 3, '2x2', 48, 2),
(6, 5, '1', 1, '2x2', 48, 1),
(7, 5, '2', 4, '2x2', 48, 1),
(8, 5, '3', 3, '2x2', 48, 1),
(9, 3, '1', 3, '2x2', 20, 1),
(10, 3, '2', 1, '2x2', 30, 1),
(11, 38, '1', 1, '2x2', 48, 1),
(12, 38, '2', 1, '2x2', 48, 1),
(13, 39, '1', 1, '2x2', 48, 1),
(14, 39, '2', 1, '2x2', 48, 1),
(15, 43, '1', 1, '2x2', 48, 1),
(16, 43, '2', 1, '2x2', 48, 1),
(17, 47, '1', 1, 'fd', 48, 2),
(18, 48, '1', 1, '123', 32, 2),
(19, 51, '1', 1, '2x2', 212, 2),
(20, 52, '1', 1, '2x2', 212, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compartment_class_type`
--

CREATE TABLE `tbl_compartment_class_type` (
  `compartment_class_type_id` int(11) NOT NULL,
  `compartment_class_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_compartment_class_type`
--

INSERT INTO `tbl_compartment_class_type` (`compartment_class_type_id`, `compartment_class_type`) VALUES
(1, 'AFC'),
(2, '1st class Reservation'),
(3, '3rd class Reservation'),
(4, '2nd class Reservation'),
(5, '1st class with OFV & AFC'),
(6, 'Sleeplets');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fare`
--

CREATE TABLE `tbl_fare` (
  `fare_id` int(11) NOT NULL,
  `fare_train_type_id` int(11) NOT NULL,
  `fare_compartment_id` int(11) NOT NULL,
  `fare_route_id` int(11) NOT NULL,
  `fare_start_station` int(11) NOT NULL,
  `fare_end_station` int(11) NOT NULL,
  `fare_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_fare`
--

INSERT INTO `tbl_fare` (`fare_id`, `fare_train_type_id`, `fare_compartment_id`, `fare_route_id`, `fare_start_station`, `fare_end_station`, `fare_price`) VALUES
(1, 1, 1, 2, 1, 6, 200),
(2, 1, 1, 2, 6, 1, 200),
(3, 1, 2, 4, 1, 2, 1500),
(4, 1, 2, 4, 2, 1, 1500),
(5, 1, 2, 1, 1, 2, 2000),
(6, 1, 2, 1, 1, 12, 2800),
(7, 1, 2, 1, 1, 14, 3000),
(8, 1, 2, 1, 2, 1, 2000),
(9, 1, 2, 1, 2, 12, 2500),
(10, 1, 2, 1, 2, 14, 3000),
(11, 1, 2, 1, 12, 1, 2800),
(12, 1, 2, 1, 12, 2, 2500),
(13, 1, 2, 1, 12, 14, 2000),
(14, 1, 2, 1, 14, 1, 3000),
(15, 1, 2, 1, 14, 2, 3000),
(16, 1, 2, 1, 14, 12, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(60) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_username`, `login_password`, `user_id`) VALUES
(1, 'rav', '123', 1),
(3, 'menu', 'me', 3),
(5, 'bolee', 'chty', 5),
(6, 'weq', '2', 6),
(7, 'some', 'some', 7),
(8, 'shika', '77ec8952be7c961a1b975a00de15a630', 8),
(9, 'gon', 'c6fac1b43c0b97c1a80e11267cca23e9', 9),
(10, 'raviee', 'db26ee047a4c86fbd2fba73503feccb6', 10),
(11, 'silu', 'ac5585d98646d255299c359140537783', 11),
(12, 'asd', '7815696ecbf1c96e6894b779456d330e', 12),
(14, 'shi', 'cefd573c75ef3e8eee5ae1ffe4243497', 14),
(15, 'st', '627fcdb6cc9a5e16d657ca6cdef0a6bb', 15),
(16, 'sg', '5dae429688af1c521ad87ac394192c6d', 16),
(17, 'driver', 'e2d45d57c7e2941b65c6ccd64af4223e', 17),
(18, 'dri', '7a2ccce9642fe8539673002dd6660ba2', 18),
(19, 'pa', 'e529a9cea4a728eb9c5828b13b22844c', 19),
(20, 'admin', '21232f297a57a5a743894a0e4a801fc3', 20),
(24, 'sm', 'ed79acb0cd3d7f8320c53c7798335ef0', 24),
(25, 'sm2', 'f2d5cf2f8e2b43553b80eae44d694df2', 25),
(26, 'tc', '5c4fefda27cfe84c3999be13e6b8608a', 26),
(27, 'td', '626726e60bd1215f36719a308a25b798', 27),
(28, 'st1', 'e2b136987034c1b57b7ccd643f9191ed', 28),
(29, 'ravien', '14536d5a97addbdda10fc27311172096', 29),
(30, 'kavisha', 'b9afde99fab2932ef86e67e52536fba0', 30),
(32, 'staff_general', 'e5e07577c1c9967935069521c5a61db3', 32),
(33, 'ticket_checker', '7536f681b3a4e610d70ff179e4da5890', 33),
(34, 'train_driver', '66be9d74dd52fa2806d6871bdeba50df', 34),
(35, 'station_master', '73d3fa8e4a923b2a6e2ef9e4f8ccc85b', 35),
(36, 'pas', 'cd0acfe085eeb0f874391fb9b8009bed', 36),
(37, 'pass', '1a1dc91c907325c69271ddf0c944bc72', 37),
(38, 'staff_ticketing', '792aee01c1f023fa484da5e7680ff539', 38),
(39, 'ravi', '63dd3e154ca6d948fc380fa576343ba6', 39),
(40, 'passenger', '4e85eddf886882ca7cb893ddd3f07051', 40),
(41, 'ravieem', '6f8f57715090da2632453988d9a1501b', 41),
(42, 'qqqqqqqqqqq', 'f1290186a5d0b1ceab27f4e77c0c5d68', 42),
(43, 'sil', '7694f4a66316e53c8cdd9d9954bd611d', 43),
(44, 'sw', '43b36d42e7f8e60be58ba4356b6af40c', 44);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_passengers`
--

CREATE TABLE `tbl_passengers` (
  `passenger_id` int(11) NOT NULL,
  `passenger_email` varchar(50) NOT NULL,
  `passenger_nic` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(14, 'sanath_dalpatadu@yahoo.com', '200123602078'),
(15, 'sanath_dalpatadu@yahoo.com', '200123602078'),
(19, 'sanath_dalpatadu@yahoo.com', '200123602078'),
(20, 'adi@gm.com', '2367136128'),
(21, 'staffTicketing@yahoo.com', '200123602078'),
(22, 'sanath_dalpatadu@yahoo.com', '200123602078'),
(29, 'dalpatadu@yahoo.com', '200123601000'),
(30, 'kavisha@yahoo.com', '200123602073'),
(36, 'pas@gm.com', '200123602071'),
(37, 'sanath_dalpatadu@yahoo.com', '200123602072'),
(39, 'dal@gmail.com', '200123602079'),
(40, 'dalpataduravien@gmail.com', '200123602078'),
(41, 'daien@gmail.com', '200123602078'),
(42, 'dalqien@gmail.com', '200123602023'),
(43, 'dalpataduravien@gmail.com', '200123602078'),
(44, 'dalpataduravien@gmail.com', '200123602078');

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
  `reservation_compartment_id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_class` int(20) NOT NULL,
  `reservation_seat` int(20) NOT NULL,
  `reservation_passenger_title` varchar(5) NOT NULL,
  `reservation_passenger_first_name` varchar(50) NOT NULL,
  `reservation_passenger_last_name` varchar(50) NOT NULL,
  `reservation_passenger_nic` bigint(12) NOT NULL,
  `reservation_passenger_phone_number` varchar(13) NOT NULL,
  `reservation_passenger_email` varchar(50) NOT NULL,
  `reservation_passenger_gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`reservation_id`, `reservation_passenger_id`, `reservation_start_station`, `reservation_end_station`, `reservation_train_id`, `reservation_compartment_id`, `reservation_date`, `reservation_class`, `reservation_seat`, `reservation_passenger_title`, `reservation_passenger_first_name`, `reservation_passenger_last_name`, `reservation_passenger_nic`, `reservation_passenger_phone_number`, `reservation_passenger_email`, `reservation_passenger_gender`) VALUES
(14, 11, 14, 1, 3, 3, '2023-11-04', 3, 1, 'Mr.', 'dad', 'ds', 132453534543, '0798784656', 'abc@gm.com', 'female'),
(15, 11, 14, 1, 3, 3, '2023-11-04', 3, 2, 'Miss.', 'ewqeq', 'ewq', 213344346345, '0715898444', 'sdad@yahoo.com', 'male'),
(19, 11, 14, 1, 3, 3, '2023-11-04', 1, 27, 'Mr.', 'menura', 'wije', 214748364743, '0718118923', 'menu@yahoo.com', 'male'),
(22, 11, 14, 1, 3, 3, '2023-11-14', 1, 22, 'Mr.', 'namalie', 'liyanage', 200123688878, '0718045940', 'namali_69@yahoo.com', 'female'),
(28, 11, 14, 1, 5, 8, '2023-12-31', 1, 14, 'Miss.', 'ghjk', 'fghjk', 200123628078, '0718115656', 'huhu@yahoo.com', 'female'),
(31, 11, 14, 1, 3, 3, '2023-11-04', 1, 31, 'Mr.', 'yashmika', 'kriyanjalee', 214748364734, '0718118932', 'yah@yahoo.com', 'female'),
(35, 19, 14, 1, 5, 8, '2023-12-31', 1, 30, 'Mr.', 'ravien', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male'),
(41, 19, 14, 1, 3, 3, '2023-11-04', 1, 47, 'Mr.', 'ravien', 'dsff', 200123602078, '0718118969', 'da@gm.com', 'male'),
(42, 19, 14, 1, 5, 6, '2023-12-31', 1, 1, 'Mr.', 'menura', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male'),
(43, 29, 14, 1, 5, 7, '2023-12-31', 1, 7, 'Mr.', 'ravien', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male'),
(44, 30, 14, 1, 3, 3, '2023-12-29', 1, 21, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0718118969', 'dalpatadu@yahoo.com', 'male'),
(45, 36, 14, 1, 18, 5, '2023-12-31', 1, 19, 'Mr.', 'pas', 'pas', 200123602078, '0718118969', 'pas@gm.com', 'male'),
(46, 37, 14, 1, 18, 4, '2023-12-31', 1, 39, 'Mr.', 'pass', 'pass', 200123602088, '0718118964', 'sanath@yahoo.com', 'male'),
(47, 39, 14, 1, 18, 5, '2023-12-30', 1, 4, 'Mr.', 'ra', 'thenuka', 200123602079, '0718118969', 'sanatu@yahoo.com', 'male'),
(48, 40, 1, 2, 18, 4, '2023-12-31', 1, 17, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'female'),
(49, 40, 1, 18, 18, 3, '2023-12-31', 1, 25, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male'),
(52, 40, 1, 2, 5, 7, '2023-12-20', 7, 1, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'female'),
(53, 40, 1, 2, 5, 7, '2023-12-20', 7, 41, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'female'),
(54, 40, 1, 12, 5, 6, '2024-01-24', 6, 1, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male'),
(55, 40, 1, 12, 5, 7, '2024-01-24', 7, 1, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male'),
(56, 40, 1, 12, 5, 7, '2024-01-24', 7, 2, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male'),
(57, 40, 1, 12, 5, 7, '2024-01-24', 7, 5, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male'),
(58, 40, 1, 12, 5, 7, '2024-01-24', 7, 6, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male'),
(59, 40, 1, 12, 5, 7, '2024-01-24', 7, 13, 'Mr.', 'ravien', 'dalpatadu', 200123602078, '0701949400', 'dalpataduravien@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE `tbl_route` (
  `route_no` int(11) NOT NULL,
  `route_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_route`
--

INSERT INTO `tbl_route` (`route_no`, `route_name`) VALUES
(1, 'Main line'),
(2, 'colombo-jaffna'),
(4, 'colombo-kandy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route_station`
--

CREATE TABLE `tbl_route_station` (
  `route_no` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `route_station_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_route_station`
--

INSERT INTO `tbl_route_station` (`route_no`, `station_id`, `route_station_order`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 12, 3),
(1, 14, 4),
(2, 1, 1),
(2, 6, 2),
(4, 1, 1),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seat`
--

CREATE TABLE `tbl_seat` (
  `seat_no` int(11) NOT NULL,
  `seat_compartment_id` int(11) NOT NULL,
  `seat_availablity` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_station`
--

CREATE TABLE `tbl_station` (
  `station_id` int(11) NOT NULL,
  `station_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(16, 'Haputhale'),
(17, 'ragama'),
(18, 'polgahawela'),
(19, 'Jaffna'),
(20, 'Kilinochchi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_train`
--

CREATE TABLE `tbl_train` (
  `train_id` int(11) NOT NULL,
  `train_name` varchar(200) NOT NULL,
  `train_type` int(5) NOT NULL,
  `train_start_time` time NOT NULL,
  `train_end_time` time NOT NULL,
  `train_start_station` int(11) NOT NULL,
  `train_end_station` int(11) NOT NULL,
  `train_route` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_train`
--

INSERT INTO `tbl_train` (`train_id`, `train_name`, `train_type`, `train_start_time`, `train_end_time`, `train_start_station`, `train_end_station`, `train_route`) VALUES
(3, 'udaratamenike', 1, '05:00:00', '18:00:02', 14, 1, 2),
(5, 'podimenike 1', 1, '10:30:00', '22:30:00', 1, 12, 1),
(6, 'podi 2menike', 1, '10:30:00', '22:30:00', 12, 1, 1),
(11, 'yaldewi', 1, '02:00:00', '02:01:00', 1, 16, 4),
(18, 'cmb-kan', 1, '13:00:00', '16:00:02', 1, 2, 4),
(30, 'ella odesy', 1, '09:01:00', '21:01:00', 1, 14, 1),
(31, 'ella odesy', 1, '09:07:00', '21:07:00', 1, 14, 1),
(32, 'ella odesy', 1, '09:07:00', '21:07:00', 1, 14, 1),
(33, 'ella odesy', 1, '09:07:00', '21:07:00', 1, 14, 1),
(34, 'ella odesy', 1, '09:25:00', '21:21:00', 1, 2, 4),
(35, 'ella cmb', 1, '21:28:00', '09:28:00', 13, 1, 1),
(36, 'yal dee', 1, '18:29:00', '18:31:00', 1, 9, 2),
(37, 'yal dee', 1, '18:29:00', '18:31:00', 1, 9, 2),
(38, 'yal dee', 1, '18:29:00', '18:31:00', 1, 9, 2),
(39, 'yal dee', 1, '18:29:00', '18:31:00', 1, 9, 2),
(43, 'yal dee', 1, '18:29:00', '18:31:00', 1, 9, 2),
(47, 'nmnm', 1, '02:17:00', '02:18:00', 1, 2, 1),
(48, 'yal dee', 1, '02:33:00', '14:17:00', 1, 6, 2),
(51, 'rwrewrwer', 1, '23:29:00', '11:29:00', 1, 2, 1),
(52, 'rwrewrwer', 1, '23:29:00', '11:29:00', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_train_stop_station`
--

CREATE TABLE `tbl_train_stop_station` (
  `train_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `stop_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_train_stop_station`
--

INSERT INTO `tbl_train_stop_station` (`train_id`, `station_id`, `stop_no`) VALUES
(5, 1, 1),
(5, 2, 4),
(5, 12, 5),
(5, 14, 6),
(5, 17, 2),
(5, 18, 3),
(6, 1, 3),
(6, 2, 2),
(6, 12, 1),
(18, 1, 1),
(18, 2, 4),
(18, 17, 2),
(18, 18, 3),
(51, 1, 1),
(51, 2, 2),
(52, 1, 1),
(52, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_train_type`
--

CREATE TABLE `tbl_train_type` (
  `train_type_id` int(11) NOT NULL,
  `train_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_train_type`
--

INSERT INTO `tbl_train_type` (`train_type_id`, `train_type`) VALUES
(1, 'Express'),
(2, 'Intercity'),
(3, 'Night Mail'),
(4, 'Normal'),
(5, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_title` varchar(10) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_phone_number` varchar(13) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_nic` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_title`, `user_first_name`, `user_last_name`, `user_phone_number`, `user_type`, `user_gender`, `user_email`, `user_nic`) VALUES
(19, 'Mr.', 'moushika', 'sasss', '0718118969', 'staff_general', 'male', 'ew@gm.com', 200123602678),
(20, 'Mr.', 'admin', 'ad', '0231232121', 'admin', 'male', 'ew@gm.com', 200453602078),
(22, 'Miss.', 'stafff', 'trainingg', '0718118469', 'staff_general', 'male', 'dalpatadu@yahoo.com', 200123602073),
(25, 'Mr.', 'staff', 'master', '0718118969', 'station_master', 'male', 'sanath_dalpatadu@yahoo.com', 123123602078),
(26, 'Mr.', 'tc', 'tc', '0718008969', 'ticket_checker', 'female', 'sanathdalpatadu@yahoo.com', 122123602078),
(27, 'Mr.', 'td', 'td', '0718118969', 'train_driver', 'male', 'sanath_dalpatadu@yaho.com', 200123602250),
(28, 'Mr.', 'staff', 'dfs', '0718118969', 'staff_ticketing', 'male', 'sanath_dalpatadu@yahoo.com', 200123602078),
(32, 'Mr.', 'achchu', 'kala', '0718118968', 'staff_general', 'male', 'ach@gmail.com', 9920008567),
(33, 'Mr.', 'Nisal', 'Perera', '0718118960', 'ticket_checker', 'male', 'sanath@yahoo.com', 200123602075),
(34, 'Mr.', 'Iflal', 'Imassan', '0718118045', 'train_driver', 'male', 'alpatadu@yahoo.com', 200123602789),
(35, 'Mr.', 'Kusal', 'Mendis', '0718118000', 'station_master', 'male', 'kusal@yahoo.com', 9920008557),
(37, 'Mr.', 'passs', 'aasd', '0718118989', 'passenger', 'male', 'sanath_dalpatadu@yahoo.com', 200123602072),
(38, 'Mr.', 'mous', 'm', '0718118969', 'staff_ticketing', 'female', 'sanat@yahoo.com', 200123602078),
(39, 'Mr.', 'ravi', 'dalpatadu', '0701949400', 'passenger', 'male', 'dal@gmail.com', 200123602079),
(40, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'male', 'dalpataduravien@gmail.com', 200123602078),
(41, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'male', 'daien@gmail.com', 200123602078),
(42, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'female', 'dalqien@gmail.com', 200123602023),
(43, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'female', 'dalpataduravien@gmail.com', 200123602078),
(44, 'Mr.', 'sil', 'dalpatadu', '0701949400', 'passenger', 'male', 'dalpataduravien@gmail.com', 200123602078);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warrant_reservation`
--

CREATE TABLE `tbl_warrant_reservation` (
  `warrant_id` int(11) NOT NULL,
  `warrant_status` varchar(20) NOT NULL,
  `warrent_reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_warrant_reservation`
--

INSERT INTO `tbl_warrant_reservation` (`warrant_id`, `warrant_status`, `warrent_reservation_id`) VALUES
(3, 'verified', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_compartment`
--
ALTER TABLE `tbl_compartment`
  ADD PRIMARY KEY (`compartment_id`),
  ADD KEY `compfk` (`compartment_train_id`),
  ADD KEY `comtypefk` (`compartment_class_type`);

--
-- Indexes for table `tbl_compartment_class_type`
--
ALTER TABLE `tbl_compartment_class_type`
  ADD PRIMARY KEY (`compartment_class_type_id`);

--
-- Indexes for table `tbl_fare`
--
ALTER TABLE `tbl_fare`
  ADD PRIMARY KEY (`fare_id`),
  ADD KEY `compartment_fk1` (`fare_compartment_id`),
  ADD KEY `end_station1` (`fare_end_station`),
  ADD KEY `start_station1` (`fare_start_station`),
  ADD KEY `route_fk1` (`fare_route_id`),
  ADD KEY `train_type_fkk` (`fare_train_type_id`);

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
  ADD KEY `train_fk` (`reservation_train_id`),
  ADD KEY `reservation_compartment_id` (`reservation_compartment_id`);

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
  ADD KEY `route_fk` (`train_route`),
  ADD KEY `train_type_fk1` (`train_type`);

--
-- Indexes for table `tbl_train_stop_station`
--
ALTER TABLE `tbl_train_stop_station`
  ADD PRIMARY KEY (`train_id`,`station_id`,`stop_no`),
  ADD KEY `station_fk` (`station_id`);

--
-- Indexes for table `tbl_train_type`
--
ALTER TABLE `tbl_train_type`
  ADD PRIMARY KEY (`train_type_id`);

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
  MODIFY `compartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_compartment_class_type`
--
ALTER TABLE `tbl_compartment_class_type`
  MODIFY `compartment_class_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fare`
--
ALTER TABLE `tbl_fare`
  MODIFY `fare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_route`
--
ALTER TABLE `tbl_route`
  MODIFY `route_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_station`
--
ALTER TABLE `tbl_station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_train`
--
ALTER TABLE `tbl_train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_train_type`
--
ALTER TABLE `tbl_train_type`
  MODIFY `train_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_warrant_reservation`
--
ALTER TABLE `tbl_warrant_reservation`
  MODIFY `warrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_compartment`
--
ALTER TABLE `tbl_compartment`
  ADD CONSTRAINT `compfk` FOREIGN KEY (`compartment_train_id`) REFERENCES `tbl_train` (`train_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comtypefk` FOREIGN KEY (`compartment_class_type`) REFERENCES `tbl_compartment_class_type` (`compartment_class_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_fare`
--
ALTER TABLE `tbl_fare`
  ADD CONSTRAINT `compartment_fk1` FOREIGN KEY (`fare_compartment_id`) REFERENCES `tbl_compartment_class_type` (`compartment_class_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `end_station1` FOREIGN KEY (`fare_end_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `route_fk1` FOREIGN KEY (`fare_route_id`) REFERENCES `tbl_route` (`route_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `start_station1` FOREIGN KEY (`fare_start_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `train_type_fkk` FOREIGN KEY (`fare_train_type_id`) REFERENCES `tbl_train_type` (`train_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD CONSTRAINT `commpartment_fk` FOREIGN KEY (`reservation_compartment_id`) REFERENCES `tbl_compartment` (`compartment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `starstation_fk` FOREIGN KEY (`train_start_station`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `train_type_fk1` FOREIGN KEY (`train_type`) REFERENCES `tbl_train_type` (`train_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_train_stop_station`
--
ALTER TABLE `tbl_train_stop_station`
  ADD CONSTRAINT `station_fk` FOREIGN KEY (`station_id`) REFERENCES `tbl_station` (`station_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `train_stop_fk` FOREIGN KEY (`train_id`) REFERENCES `tbl_train` (`train_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_warrant_reservation`
--
ALTER TABLE `tbl_warrant_reservation`
  ADD CONSTRAINT `reservation_fk` FOREIGN KEY (`warrent_reservation_id`) REFERENCES `tbl_reservation` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
