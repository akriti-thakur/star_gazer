-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 07:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_gazer`
--

-- --------------------------------------------------------

--
-- Table structure for table `constellation`
--

CREATE TABLE `constellation` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(45) NOT NULL,
  `based_on` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constellation`
--

INSERT INTO `constellation` (`c_id`, `c_name`, `based_on`, `description`) VALUES
(1, 'Orion', 'greek hunter', 'Orion is bordered by Taurus to the northwest, Eridanus to the southwest, Lepus to the south, Monoceros to the east, and Gemini to the northeast. Covering 594 square degrees, Orion ranks twenty-sixth of the 88 constellations in size. The constellation boundaries, as set by Belgian astronomer Eugène Delporte in 1930, are defined by a polygon of 26 sides. In the equatorial coordinate system, the right ascension coordinates of these borders lie between 04h 43.3m and 06h 25.5m , while the declination coordinates are between 22.87° and −10.97°.[1] The constellation\'s three-letter abbreviation, as adopted by the International Astronomical Union in 1922, is \"Ori\".[2]\r\n\r\nOrion is most visible in the evening sky from January to April,[3] winter in the Northern Hemisphere, and summer in the Southern Hemisphere. In the tropics (less than about 8° from the equator), the constellation transits at the zenith.\r\n\r\nIn the period May–July (summer in the Northern Hemisphere, winter in the Southern Hemisph');

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(45) NOT NULL,
  `p_size` int(45) NOT NULL,
  `rotation_speed` int(45) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `activity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`p_id`, `p_name`, `p_size`, `rotation_speed`, `image`, `activity`) VALUES
(1, 'mercury', 10, 17, '', 1),
(4, 'mercury', 10, 17, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `age`, `password`) VALUES
(1, 'Akriti Thakur', 'yogyukta@gmail.com', 21, '123456'),
(2, 'Akriti Thakur', 'yogyukta@gmail.com', 21, '123456'),
(3, '12', '12@12.12', 12, '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constellation`
--
ALTER TABLE `constellation`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constellation`
--
ALTER TABLE `constellation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
