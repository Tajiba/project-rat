-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 08:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`name`, `place`, `rating`) VALUES
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tina', 'kaptai', 3),
('tajiba', 'kaptai lake', 4),
('tajiba', 'kaptai lake', 4),
('tajiba', 'kaptai lake', 4),
('tajiba', 'kaptai lake', 4),
('tajiba', 'kaptai lake', 4),
('tajiba', 'kaptai lake', 4),
('tajiba', 'kaptai lake', 4),
('priya', 'lake', 4.5),
('priya', 'lake', 4.5),
('priya', 'lake', 4.5),
('hina', 'comilla', 3.2),
('hu', 'jnjnk', 5),
('hu', 'jnjnk', 5),
('hu', 'jnjnk', 5),
('njdfkjdnjkdf', 'nvjkfnvjdfnjkbn', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
