-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 07:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `control_arm_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `motor_values`
--

CREATE TABLE `motor_valuess` (
  `motor_1` int(180) NOT NULL,
  `motor_2` int(180) NOT NULL,
  `motor_3` int(180) NOT NULL,
  `motor_4` int(180) NOT NULL,
  `motor_5` int(180) NOT NULL,
  `motor_6` int(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor_valuess`
--

INSERT INTO `motor_valuess` ( `motor_1`, `motor_2`, `motor_3`, `motor_4`, `motor_5`, `motor_6`) VALUES
( 1, 77, 15, 76, 50, 50),
( 1, 77, 15, 76, 50, 50),
( 50, 50, 50, 50, 50, 100),
( 50, 50, 50, 50, 50, 100),
( 50, 123, 99, 50, 115, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
