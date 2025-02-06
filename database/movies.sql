-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Generation Time: Feb 06, 2025 at 09:23 AM
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
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(55) NOT NULL,
  `genre` enum('horror','comedy','science fiction','adventure','thriller','documentary') NOT NULL,
  `year` year(4) NOT NULL,
  `runtime` smallint(6) NOT NULL,
  `watched` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `year`, `runtime`, `watched`) VALUES
(1, 'The Wizard of Oz', 'thriller', '1939', 101, 'no'),
(2, 'Citizen Kane', 'documentary', '1941', 119, 'no'),
(3, 'Psycho', 'horror', '1960', 109, 'no'),
(4, 'The Godfather', 'adventure', '1972', 177, 'no'),
(5, '2001: A Space Odyssey', 'science fiction', '1968', 142, 'no'),
(6, 'Jaws', 'thriller', '1975', 124, 'no'),
(7, 'The Sound of Music', 'adventure', '1965', 174, 'no'),
(8, 'Back to the Future', 'adventure', '1985', 116, 'no'),
(9, 'Ghostbusters', 'comedy', '1984', 105, 'no'),
(10, 'The Lost World: Jurassic Park', 'adventure', '1997', 129, 'yes'),
(11, 'Superbad', 'comedy', '2007', 114, 'yes'),
(12, 'Inception', 'thriller', '2010', 148, 'yes'),
(13, 'Shutter Island', 'thriller', '2010', 138, 'yes');

--
-- Indexes for dumped tables
--
--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
