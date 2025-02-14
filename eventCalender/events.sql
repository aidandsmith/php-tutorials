-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2025 at 09:30 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asmith_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `venue` varchar(100) NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `start`, `end`, `venue`, `cost`, `description`) VALUES
(1, 'New Year Fireworks', '2025-12-31', '23:00:00', '01:00:00', 'Downtown Park', 0, 'Ring in the new year with a dazzling fireworks display!'),
(2, 'Spring Music Festival', '2025-04-15', '12:00:00', '22:00:00', 'Central Stadium', 50, 'A full day of live music featuring top artists!'),
(3, 'Summer Beach Party', '2025-07-20', '14:00:00', '20:00:00', 'Sunny Beach', 20, 'Enjoy a day of sun, sand, and live DJs!'),
(4, 'Halloween Horror Night', '2025-10-31', '18:00:00', '00:00:00', 'Haunted Mansion', 30, 'Spooky fun with haunted attractions and costume contests!'),
(5, 'Winter Wonderland Market', '2025-12-10', '10:00:00', '20:00:00', 'City Square', 5, 'Shop festive treats and gifts in a magical setting!'),
(6, 'Food Truck Festival', '2026-06-05', '11:00:00', '21:00:00', 'Riverside Park', 10, 'Sample delicious food from the best food trucks in town!'),
(7, 'Comic Con', '2026-09-18', '09:00:00', '18:00:00', 'Convention Center', 40, 'Meet your favorite artists, actors, and cosplayers!'),
(8, 'Oktoberfest Celebration', '2026-10-05', '12:00:00', '23:00:00', 'Bavarian Beer Hall', 25, 'Enjoy authentic German beer, food, and music!'),
(9, 'City Marathon', '2026-03-12', '06:00:00', '12:00:00', 'Main Street', 0, 'Run through the city and test your endurance!'),
(10, 'Jazz & Wine Night', '2026-05-22', '19:00:00', '23:00:00', 'Skyline Lounge', 35, 'Relax with smooth jazz and fine wine!'),
(11, 'Fireworks Extravaganza', '2026-07-04', '21:00:00', '23:00:00', 'Harbor Bay', 0, 'Celebrate Independence Day with a spectacular show!'),
(12, 'Lantern Festival', '2026-02-15', '18:00:00', '22:00:00', 'Lakeview Park', 10, 'Light up the night with beautiful lanterns and performances!'),
(15, 'Vidcon Anaheim', '2025-06-19', '09:00:00', '21:00:00', 'Anaheim Convention Center', 100, 'A event for Influencers and Content Creators.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
