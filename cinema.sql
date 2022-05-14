phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 10:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--


-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(120) NOT NULL,
  `movie_desc` text NOT NULL,
  `movie_image` varchar(50) NOT NULL,
  `movie_price` int(11) NOT NULL,
  `show_date` varchar(40) NOT NULL,
  `show_time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_desc`, `movie_image`, `movie_price`, `show_date`, `show_time`) VALUES
(1, 'Drive My Car', 'A renowned stage actor and director learns to cope with his wife\'s unexpected passing when he receives an offer to direct a production of Uncle Vanya in Hiroshima.', 'images/drivemycar.png', 70, '20 September', '7:00 PM'),
(2, 'A Clockwork Orange', 'In the future, a sadistic gang leader is imprisoned and volunteers for a conduct-aversion experiment, but it doesn\'t go as planned.', 'images/aclockworkorange.png', 30, '10 September', '2:00 PM'),
(3, 'The Batman', 'When the Riddler, a sadistic serial killer, begins murdering key political figures in Gotham, Batman is forced to investigate the city\'s hidden corruption and question his family\'s involvement.', 'images/batman.png', 60, '12 September', '10:00 PM'),
(4, '2001: A Space Odyssey', 'The Monoliths push humanity to reach for the stars; after their discovery in Africa generations ago, the mysterious objects lead mankind on an awesome journey to Jupiter, with the help of H.A.L. 9000: the world\'s greatest supercomputer.', 'images/2001.png', 40, '15 September', '5:00 PM'),
(5, 'Barry Lyndon', 'An Irish rogue wins the heart of a rich widow and assumes her dead husband\'s aristocratic position in 18th-century England.', 'images/barrylyndon.png', 25, '2 May', '1:00 PM'),
(6, 'Seven Samurai', 'A poor village under attack by bandits recruits seven unemployed samurai to help them defend themselves.', 'images/7samurai.png', 30, '7 May', '9:00 PM');


-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `seat_name` varchar(50) NOT NULL,
  `total_price` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `seat_name` varchar(10) NOT NULL,
  `seat_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `seat_name`, `seat_status`) VALUES
(1, 'A1', 'available'),
(2, 'A2', 'available'),
(3, 'A3', 'available'),
(4, 'A4', 'available'),
(5, 'B1', 'available'),
(6, 'B2', 'available'),
(7, 'B3', 'available'),
(8, 'B4', 'available'),
(9, 'C1', 'available'),
(10, 'C2', 'available'),
(11, 'C3', 'available'),
(12, 'C4', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(128) NOT NULL,
  `UserEmail` varchar(128) NOT NULL,
  `UserUid` varchar(128) NOT NULL,
  `UserPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `UserUid`, `UserPwd`) VALUES
(1, 'Musallam', 'musallem@gmail.com', 'musallem', '$2y$10$z4bQSt08T4qy/XbwfHwW6.17.uB2.8BcNSUkkLOTIgw5ICodTlKSG'),
(2, 'Musallem Abdullah', 'musallem1@gmail.com', 'musallemm', '$2y$10$xVAjRUNjxaWSIX.aJcBDTO1fugsU0thtao533zA7taPANpi7NMh5a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);
ALTER TABLE `bookings`
  FOREIGN KEY (`movie_id`) REFERENCES movies(`movie_id`);
--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;