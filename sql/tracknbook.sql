-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 05:12 AM
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
(1, 1, '1', 1, '2x2', 48, 1),
(2, 1, '2', 4, '2x2', 48, 1),
(3, 1, '3', 3, '2x3', 48, 1),
(4, 2, '1', 1, '2x2', 48, 1),
(5, 2, '2', 4, '2x2', 48, 1),
(6, 2, '3', 3, '2x3', 48, 1),
(7, 3, '1', 1, '2x2', 48, 1),
(8, 3, '2', 4, '2x2', 48, 1),
(9, 3, '3', 3, '2x2', 48, 1),
(10, 4, '1', 1, '2x2', 48, 1),
(11, 4, '2', 4, '2x2', 48, 1),
(12, 4, '3', 3, '2x2', 48, 1);

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
(3, '2nd class Reservation'),
(4, '3rd class Reservation'),
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
(1, 1, 1, 1, 1, 2, 2000),
(2, 1, 1, 1, 1, 12, 2800),
(3, 1, 1, 1, 1, 14, 3000),
(4, 1, 1, 1, 2, 1, 2000),
(5, 1, 1, 1, 2, 12, 2500),
(6, 1, 1, 1, 2, 14, 3000),
(7, 1, 1, 1, 12, 1, 2800),
(8, 1, 1, 1, 12, 2, 2500),
(9, 1, 1, 1, 12, 14, 2000),
(10, 1, 1, 1, 14, 1, 3000),
(11, 1, 1, 1, 14, 2, 3000),
(12, 1, 1, 1, 14, 12, 2000),
(13, 1, 3, 1, 1, 2, 900),
(14, 1, 3, 1, 1, 12, 1800),
(15, 1, 3, 1, 1, 14, 1500),
(16, 1, 3, 1, 2, 1, 900),
(17, 1, 3, 1, 2, 12, 1700),
(18, 1, 3, 1, 2, 14, 1800),
(19, 1, 3, 1, 12, 1, 1800),
(20, 1, 3, 1, 12, 2, 1700),
(21, 1, 3, 1, 12, 14, 1200),
(22, 1, 3, 1, 14, 1, 1500),
(23, 1, 3, 1, 14, 2, 1800),
(24, 1, 3, 1, 14, 12, 1200),
(25, 1, 4, 1, 1, 2, 1200),
(26, 1, 4, 1, 1, 12, 1800),
(27, 1, 4, 1, 1, 14, 2000),
(28, 1, 4, 1, 2, 1, 1200),
(29, 1, 4, 1, 2, 12, 1700),
(30, 1, 4, 1, 2, 14, 1800),
(31, 1, 4, 1, 12, 1, 1800),
(32, 1, 4, 1, 12, 2, 1700),
(33, 1, 4, 1, 12, 14, 1200),
(34, 1, 4, 1, 14, 1, 2000),
(35, 1, 4, 1, 14, 2, 1800),
(36, 1, 4, 1, 14, 12, 1200);

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
(44, 'sw', '43b36d42e7f8e60be58ba4356b6af40c', 44),
(45, 'menura', 'f14f8bc4096b7e695c328aed85c5b86c', 45);

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
(44, 'dalpataduravien@gmail.com', '200123602078'),
(45, 'menu@gm.com', '200123602000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_ticket_id` varchar(20) NOT NULL,
  `reservation_passenger_id` int(11) NOT NULL,
  `reservation_start_station` int(11) NOT NULL,
  `reservation_end_station` int(11) NOT NULL,
  `reservation_train_id` int(11) NOT NULL,
  `reservation_compartment_id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_seat` int(20) NOT NULL,
  `reservation_passenger_title` varchar(5) NOT NULL,
  `reservation_passenger_first_name` varchar(50) NOT NULL,
  `reservation_passenger_last_name` varchar(50) NOT NULL,
  `reservation_passenger_nic` bigint(12) NOT NULL,
  `reservation_passenger_phone_number` varchar(13) NOT NULL,
  `reservation_passenger_email` varchar(50) NOT NULL,
  `reservation_passenger_gender` varchar(10) NOT NULL,
  `reservation_created_time` datetime DEFAULT NULL,
  `reservation_status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`reservation_id`, `reservation_ticket_id`, `reservation_passenger_id`, `reservation_start_station`, `reservation_end_station`, `reservation_train_id`, `reservation_compartment_id`, `reservation_date`, `reservation_seat`, `reservation_passenger_title`, `reservation_passenger_first_name`, `reservation_passenger_last_name`, `reservation_passenger_nic`, `reservation_passenger_phone_number`, `reservation_passenger_email`, `reservation_passenger_gender`, `reservation_created_time`, `reservation_status`) VALUES
(1, '20240130075000-7183', 40, 1, 2, 4, 12, '2024-01-30', 2, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(2, '20240130075728-6213', 40, 1, 2, 4, 12, '2024-01-30', 40, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(3, '20240130075740-2534', 40, 1, 14, 1, 1, '2024-01-29', 1, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(4, '20240130075750-7886', 40, 2, 1, 2, 6, '2024-01-29', 9, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(5, '20240130075820-3451', 40, 1, 2, 1, 3, '2024-01-29', 9, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(6, '20240130075840-3370', 40, 1, 2, 1, 1, '2024-01-29', 16, 'Mr.', 'siluni', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(7, '20240130075851-7159', 40, 1, 2, 1, 1, '2024-01-29', 20, 'Mr.', 'moushika', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(8, '20240130075901-3415', 40, 1, 2, 1, 1, '2024-01-23', 15, 'Mr.', 'Prabhath', 'wije', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(9, '20240130075919-1427', 40, 1, 2, 4, 12, '2024-01-30', 6, 'Mr.', 'moushika', 'kriyanjalee', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(47, '20240130082224-8415', 40, 1, 2, 4, 12, '2024-01-30', 1, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(48, '20240131181107-7090', 40, 1, 2, 1, 1, '2024-01-31', 21, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(49, '20240131182147-9317', 40, 1, 2, 1, 1, '2024-01-31', 1, 'Mr.', 'Prabhath', 'wije', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(71, '20240201203059-9626', 40, 1, 2, 1, 2, '2024-03-04', 13, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(72, '20240201203059-9626', 40, 1, 2, 1, 2, '2024-03-04', 14, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(73, '20240201203827-8464', 40, 1, 12, 1, 2, '2024-03-04', 9, 'Mr.', 'e', 'c', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(74, '20240201204354-2578', 40, 1, 12, 1, 2, '2024-03-04', 2, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(75, '20240201205250-4613', 40, 1, 2, 1, 2, '2024-03-04', 1, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(76, '20240202055139-3143', 40, 2, 1, 2, 4, '2024-03-04', 22, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(77, '20240202060301-3070', 40, 2, 1, 2, 4, '2024-03-04', 9, 'Mr.', 'Prabhath', 'wije', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(78, '20240202060301-3070', 40, 2, 1, 2, 4, '2024-03-04', 10, 'Miss.', 'Prabhath', 'kriyanjalee', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(79, '20240205043452-3653', 40, 2, 12, 1, 2, '2024-03-04', 23, 'Mr.', 'Prabhath', 'sadsad', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(80, '20240205135255-8883', 40, 1, 2, 1, 2, '2024-03-04', 19, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved '),
(81, '20240212055622-6326', 40, 1, 2, 1, 1, '2024-02-27', 1, 'Mr.', 'Prabhath', 'sadsad', 200123602067, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(82, '20240214170159-7626', 40, 1, 2, 1, 1, '2024-02-28', 35, 'Mr.', 'Prabhath', 'dalpe', 200123602078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved '),
(98, '20240217152805-6864', 40, 2, 12, 1, 2, '2024-03-04', 24, 'Mr.', 'thanuja', 'hennaaa', 200012659800, '0123456789', 'thanu@mg.cm', 'male', '2024-02-19 19:46:20', 'Reserved'),
(99, '20240217163252-8322', 45, 1, 2, 1, 2, '2024-03-04', 20, 'Mr.', 'YASHMIKA', 'KRIYANJALEE', 129856482678, '0715465236', 'yashmika@fg.lk', 'male', '2024-02-19 19:46:20', 'Reserved'),
(102, '20240217165521-7176', 45, 1, 2, 1, 2, '2024-03-04', 45, 'Mr.', 'ravien', 'dalpatadu', 129856482678, '0701949400', 'dalpataduravien@gmail.com', 'female', '2024-02-19 19:46:20', 'Reserved'),
(103, '20240217165521-7176', 45, 2, 14, 1, 2, '2024-03-04', 46, 'Mr.', 'ravien', 'dalpatadu', 129856482678, '0701949400', 'dalpataduravien@gmail.com', 'male', '2024-02-19 19:46:20', 'Reserved'),
(104, '20240217165521-7176', 45, 1, 14, 1, 2, '2024-03-04', 47, 'Mr.', 'ravien', 'dalpatadu', 129856482678, '0701949400', 'dalpataduravien@gmail.com', 'female', '2024-02-19 19:46:20', 'Reserved'),
(117, '20240219131504-8020', 40, 1, 12, 1, 2, '2024-03-05', 1, 'Mr.', 'Prabhath', 'liyanage', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved'),
(118, '20240219144218-3262', 40, 1, 2, 1, 2, '2024-03-06', 20, 'Mr.', 'Prabhath', 'liyanage', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved'),
(149, '20240220174801-5568', 40, 1, 12, 1, 1, '2024-02-29', 1, 'Mr.', 'ravein', 'ewrw', 200023568978, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved'),
(150, '20240220174801-5568', 40, 1, 12, 1, 1, '2024-02-29', 2, 'Mr.', 'thanuja', 'hennaaa', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved'),
(151, '20240220174801-5568', 40, 1, 12, 1, 1, '2024-02-29', 3, 'Mr.', 'Prabhath', 'sangeewa', 200012659800, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved');

--
-- Triggers `tbl_reservation`
--
DELIMITER $$
CREATE TRIGGER `move_to_reservation_expired` AFTER DELETE ON `tbl_reservation` FOR EACH ROW BEGIN
    INSERT INTO tbl_reservation_expired (
        reservation_expired_id,
        reservation_expired_ticket_id, 
        reservation_expired_passenger_id, 
        reservation_expired_start_station, 
        reservation_expired_end_station, 
        reservation_expired_train_id, 
        reservation_expired_compartment_id, 
        reservation_expired_date, 
        reservation_expired_seat, 
        reservation_expired_passenger_title, 
        reservation_expired_passenger_first_name, 
        reservation_expired_passenger_last_name, 
        reservation_expired_passenger_nic, 
        reservation_expired_passenger_phone_number, 
        reservation_expired_passenger_email, 
        reservation_expired_passenger_gender, 
        reservation_expired_created_time, 
        reservation_expired_status
    )
    VALUES (
        OLD.reservation_id,
        OLD.reservation_ticket_id, 
        OLD.reservation_passenger_id, 
        OLD.reservation_start_station, 
        OLD.reservation_end_station, 
        OLD.reservation_train_id, 
        OLD.reservation_compartment_id, 
        OLD.reservation_date, 
        OLD.reservation_seat, 
        OLD.reservation_passenger_title, 
        OLD.reservation_passenger_first_name, 
        OLD.reservation_passenger_last_name, 
        OLD.reservation_passenger_nic, 
        OLD.reservation_passenger_phone_number, 
        OLD.reservation_passenger_email, 
        OLD.reservation_passenger_gender, 
        OLD.reservation_created_time, 
        OLD.reservation_status
    );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation_expired`
--

CREATE TABLE `tbl_reservation_expired` (
  `reservation_expired_id` int(11) NOT NULL,
  `reservation_expired_ticket_id` varchar(20) NOT NULL,
  `reservation_expired_passenger_id` int(11) NOT NULL,
  `reservation_expired_start_station` int(11) NOT NULL,
  `reservation_expired_end_station` int(11) NOT NULL,
  `reservation_expired_train_id` int(11) NOT NULL,
  `reservation_expired_compartment_id` int(11) NOT NULL,
  `reservation_expired_date` date NOT NULL,
  `reservation_expired_seat` int(20) NOT NULL,
  `reservation_expired_passenger_title` varchar(5) NOT NULL,
  `reservation_expired_passenger_first_name` varchar(50) NOT NULL,
  `reservation_expired_passenger_last_name` varchar(50) NOT NULL,
  `reservation_expired_passenger_nic` bigint(12) NOT NULL,
  `reservation_expired_passenger_phone_number` varchar(13) NOT NULL,
  `reservation_expired_passenger_email` varchar(50) NOT NULL,
  `reservation_expired_passenger_gender` varchar(10) NOT NULL,
  `reservation_expired_created_time` datetime DEFAULT NULL,
  `reservation_expired_status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_reservation_expired`
--

INSERT INTO `tbl_reservation_expired` (`reservation_expired_id`, `reservation_expired_ticket_id`, `reservation_expired_passenger_id`, `reservation_expired_start_station`, `reservation_expired_end_station`, `reservation_expired_train_id`, `reservation_expired_compartment_id`, `reservation_expired_date`, `reservation_expired_seat`, `reservation_expired_passenger_title`, `reservation_expired_passenger_first_name`, `reservation_expired_passenger_last_name`, `reservation_expired_passenger_nic`, `reservation_expired_passenger_phone_number`, `reservation_expired_passenger_email`, `reservation_expired_passenger_gender`, `reservation_expired_created_time`, `reservation_expired_status`) VALUES
(93, '', 40, 1, 2, 1, 1, '2024-02-28', 36, 'Mr.', 'Prabhath', 'fsd', 256523651547, '0215265984', 'eq@gm.com', 'male', '2024-02-19 19:46:20', 'Pending'),
(94, '', 40, 1, 2, 1, 1, '2024-02-29', 1, 'Mr.', 'thanu', 'henn', 200012659845, '0718545629', 'fd@gm.com', 'male', '2024-02-19 19:46:20', 'Pending'),
(95, '', 40, 1, 2, 1, 1, '2024-02-29', 2, 'Miss.', 'mous', 'shik', 200123659856, '0713256986', 'mou@gm.com', 'male', '2024-02-19 19:46:20', 'Pending'),
(96, '', 40, 1, 2, 4, 10, '2024-02-28', 3, 'Mr.', 'Prabhath', 'henn', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:46:20', 'Reserved'),
(97, '', 40, 1, 2, 4, 10, '2024-02-28', 4, 'Mr.', 'Prabhath', 'llllhenn', 200223405078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '2024-02-19 19:46:20', 'Reserved'),
(100, '20240217163252-8322', 45, 1, 2, 1, 2, '2024-03-04', 28, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Reserved'),
(101, '20240217163252-8322', 45, 1, 2, 1, 2, '2024-03-04', 27, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Reserved'),
(105, '', 40, 1, 2, 1, 1, '2024-02-29', 3, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(106, '', 40, 1, 2, 1, 1, '2024-02-29', 4, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(107, '', 40, 1, 2, 1, 1, '2024-02-29', 5, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(108, '', 40, 1, 2, 1, 1, '2024-02-29', 9, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(109, '', 40, 1, 2, 1, 1, '2024-02-29', 10, '', '', '', 0, '', '', '', '2024-02-19 19:26:20', 'Pending'),
(110, '', 40, 1, 12, 1, 1, '2024-02-29', 19, '', '', '', 0, '', '', '', '2024-02-19 19:26:20', 'Pending'),
(111, '', 40, 1, 12, 1, 1, '2024-02-29', 20, '', '', '', 0, '', '', '', '2024-02-19 19:26:20', 'Pending'),
(112, '', 40, 1, 2, 1, 1, '2024-02-27', 6, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(113, '', 40, 1, 2, 1, 1, '2024-02-29', 17, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(114, '', 40, 1, 14, 1, 1, '2024-02-29', 45, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(115, '', 40, 1, 14, 1, 2, '2024-03-04', 44, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(116, '', 40, 1, 14, 1, 3, '2024-03-06', 11, '', '', '', 0, '', '', '', '2024-02-19 19:46:20', 'Pending'),
(119, '', 40, 2, 1, 3, 9, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-19 19:26:20', 'Pending'),
(120, '', 40, 2, 1, 2, 6, '2024-02-29', 26, '', '', '', 0, '', '', '', '2024-02-19 19:26:20', 'Pending'),
(121, '', 40, 1, 12, 1, 3, '2024-02-29', 1, 'Mr.', 'hasi', 'kavimi', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:51:38', 'Pending'),
(122, '', 40, 1, 12, 1, 3, '2024-02-29', 2, 'Mr.', 'kavi', 'kavi', 200012345678, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '2024-02-19 19:51:38', 'Pending'),
(123, '', 1, 12, 1, 3, 7, '2024-11-05', 1, 'mr', 'kj', 'jkjk', 20012360208, '0701949400', 'dalpe@gm.com', 'male', '2024-02-19 19:56:33', 'Pending'),
(124, '', 40, 1, 2, 1, 2, '2024-02-29', 2, '', '', '', 0, '', '', '', NULL, 'Pending'),
(125, '', 40, 1, 2, 1, 2, '2024-02-29', 13, '', '', '', 0, '', '', '', '2024-02-19 16:22:29', 'Pending'),
(126, '', 40, 1, 2, 1, 2, '2024-02-29', 25, '', '', '', 0, '', '', '', '2024-02-19 16:26:42', 'Pending'),
(127, '', 40, 1, 2, 1, 2, '2024-02-29', 41, '', '', '', 0, '', '', '', '2024-02-19 18:02:16', 'Pending'),
(130, '', 40, 1, 12, 1, 1, '2024-02-07', 1, '', '', '', 0, '', '', '', '2024-02-20 06:36:30', 'Pending'),
(131, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 06:44:49', 'Pending'),
(132, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 06:46:34', 'Pending'),
(133, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 06:49:53', 'Pending'),
(134, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 07:03:02', 'Pending'),
(135, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 07:09:59', 'Pending'),
(136, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 07:18:39', 'Pending'),
(137, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 07:22:08', 'Pending'),
(138, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '2024-02-20 06:29:25', 'Pending'),
(139, '', 40, 1, 2, 1, 1, '2024-02-29', 1, '', '', '', 0, '', '', '', '0000-00-00 00:00:00', 'Pending'),
(140, '', 40, 1, 2, 1, 1, '2024-02-29', 2, '', '', '', 0, '', '', '', '0000-00-00 00:00:00', 'Pending'),
(141, '', 40, 1, 2, 1, 1, '2024-02-29', 2, '', '', '', 0, '', '', '', '0000-00-00 00:00:00', 'Pending'),
(142, '', 40, 1, 2, 1, 1, '2024-02-29', 6, '', '', '', 0, '', '', '', '0000-00-00 00:00:00', 'Pending'),
(143, '20240220095149-3301', 40, 2, 12, 1, 1, '2024-02-29', 1, 'Miss.', 'moushika', 'kiriyanjalee', 200123589456, '0713407878', 'moushi@gmail.com', 'male', '0000-00-00 00:00:00', 'Reserved'),
(144, '20240220154920-5550', 40, 1, 2, 1, 1, '2024-02-29', 1, 'Mr.', 'Prabhath', 'sangeewa', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved'),
(145, '20240220154920-5550', 40, 1, 2, 1, 1, '2024-02-29', 2, 'Mrs.', 'Prabhath', 'fsd', 200223405078, '0718118969', 'sanath_dalpatadu@yahoo.com', 'female', '0000-00-00 00:00:00', 'Reserved'),
(146, '20240220173922-8376', 40, 1, 12, 1, 1, '2024-02-29', 1, 'Mr.', 'ravein', 'dalpe', 200012345678, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved'),
(147, '20240220173922-8376', 40, 1, 12, 1, 1, '2024-02-29', 2, 'Mr.', 'menura', 'wijesekara', 200012659845, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved'),
(148, '20240220173922-8376', 40, 1, 12, 1, 1, '2024-02-29', 3, 'Mr.', 'thnujsa', 'hennaaa', 200012345678, '0718118969', 'sanath_dalpatadu@yahoo.com', 'male', '0000-00-00 00:00:00', 'Reserved');

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
(1, 'Udarata Menike', 1, '05:00:00', '19:00:00', 1, 14, 1),
(2, 'Udarata Menike', 1, '05:00:00', '19:00:00', 14, 1, 1),
(3, 'podi menike', 1, '07:00:00', '21:00:00', 14, 1, 1),
(4, 'podi menike', 1, '07:00:00', '21:00:00', 1, 14, 1),
(5, 'bulugahagoda nawaththanne nathi eka', 1, '12:24:00', '17:28:00', 1, 2, 1);

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
(1, 1, 1),
(1, 2, 2),
(1, 12, 3),
(1, 14, 4),
(2, 1, 4),
(2, 2, 3),
(2, 12, 2),
(2, 14, 1),
(3, 1, 4),
(3, 2, 3),
(3, 12, 2),
(3, 14, 1),
(4, 1, 1),
(4, 2, 2),
(4, 12, 3),
(4, 14, 4),
(5, 1, 1),
(5, 2, 2),
(5, 14, 3);

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
(40, 'Mr.', 'ravien', 'dalpatadu ', '0701949400', 'passenger', 'male', 'dalpataduravien@gmail.com', 200123602078),
(41, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'male', 'daien@gmail.com', 200123602078),
(42, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'female', 'dalqien@gmail.com', 200123602023),
(43, 'Mr.', 'ravien', 'dalpatadu', '0701949400', 'passenger', 'female', 'dalpataduravien@gmail.com', 200123602078),
(44, 'Mr.', 'sil', 'dalpatadu', '0701949400', 'passenger', 'male', 'dalpataduravien@gmail.com', 200123602078),
(45, 'Mr.', 'menu', 'meni', '0745674942', 'passenger', 'male', 'menu@gm.com', 200123602000);

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
  ADD UNIQUE KEY `reservation_id` (`reservation_id`,`reservation_ticket_id`),
  ADD UNIQUE KEY `reservation_date` (`reservation_date`,`reservation_compartment_id`,`reservation_seat`,`reservation_train_id`) USING BTREE,
  ADD KEY `passenger_fk` (`reservation_passenger_id`),
  ADD KEY `start_station_fk` (`reservation_start_station`),
  ADD KEY `end_station_fk` (`reservation_end_station`),
  ADD KEY `train_fk` (`reservation_train_id`),
  ADD KEY `reservation_compartment_id` (`reservation_compartment_id`);

--
-- Indexes for table `tbl_reservation_expired`
--
ALTER TABLE `tbl_reservation_expired`
  ADD PRIMARY KEY (`reservation_expired_id`),
  ADD UNIQUE KEY `reservation_id` (`reservation_expired_id`,`reservation_expired_ticket_id`),
  ADD KEY `passenger_fk` (`reservation_expired_passenger_id`),
  ADD KEY `start_station_fk` (`reservation_expired_start_station`),
  ADD KEY `end_station_fk` (`reservation_expired_end_station`),
  ADD KEY `train_fk` (`reservation_expired_train_id`),
  ADD KEY `reservation_compartment_id` (`reservation_expired_compartment_id`);

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
  MODIFY `compartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_compartment_class_type`
--
ALTER TABLE `tbl_compartment_class_type`
  MODIFY `compartment_class_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fare`
--
ALTER TABLE `tbl_fare`
  MODIFY `fare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tbl_reservation_expired`
--
ALTER TABLE `tbl_reservation_expired`
  MODIFY `reservation_expired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

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
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_train_type`
--
ALTER TABLE `tbl_train_type`
  MODIFY `train_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
