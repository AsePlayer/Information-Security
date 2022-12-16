-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 28, 2022 at 12:37 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `jokes_table`
--

CREATE TABLE `jokes_table` (
  `JokeID` int(11) NOT NULL,
  `Joke_question` varchar(500) NOT NULL,
  `Joke_answer` varchar(500) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jokes_table`
--

INSERT INTO `jokes_table` (`JokeID`, `Joke_question`, `Joke_answer`, `users_id`) VALUES
(1, 'What is black and white and red all over?', 'A penguin in a blender!', 1),
(2, 'What do you call a fish with no eyes?', 'fsh', 1),
(3, 'Why didn\'t the chicken cross the road?', 'Because he was disabled.', 1),
(4, 'Who you better call?', 'Saul!', 1),
(5, 'Guess what?', 'Chicken butt!', 1),
(6, 'Guess who?', 'Chicken poo!', 1),
(7, 'Yo mama so fat...', 'No one was laughing... but the ground was cracking up!', 4),
(8, 'Yo mama so ugly...', 'At the strip club, people pay her to keep her clothes on!', 4),
(9, 'Yo mama so stupid...', 'She tried to fill her car with Vin Diesel!', 4),
(13, 'Did you hear about the kidnapping today?', 'It\'s ok... he woke up!', 1),
(14, '999', 'zzz', 1),
(21, 'Knock knock', 'Who\'s there?', 1),
(23, 'Knock knock 2', 'Electric boogaloo', 1),
(24, 'This is a crewel joke', ' <script>alert(1);</script>', 10),
(25, 'Knock knock 3', 'What\'s next', 10),
(26, 'Knock knock 3', 'What\'s next', 10),
(27, 'Knock knock 3', 'What\'s next', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `secret` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `secret`) VALUES
(1, 'ase', 'ase', ''),
(2, 'username', 'password', ''),
(3, 'aaaaaaa', 'aa', ''),
(4, 'YoMama', 'yomamasofat', ''),
(5, 'ase2', 'ase', ''),
(6, '123', '123!', ''),
(7, 'aa2222aaaaa', '$1$D7/.Qr..$PcfzdQCQR0YighUdXc2ac/', ''),
(8, 'goonginga gaming', '$1$Zv/.uq/.$oVZ866NK5i9TQTumC4hE61', ''),
(9, 'username2', '$2a$09$mynamejeff$$$$$$$$$$$.8iQ0jysW2upnZg6hdbmto0edYXq/ph.', ''),
(10, 'hashbrowns', '$2a$09$mynamejeff$$$$$$$$$$$.Q69kL7OrmEjVXL3KNwAfdhEhtAz6Dq6', ''),
(11, 'b', '$2a$09$mynamejeff$$$$$$$$$$$.LpmZNNZwjycBgDCO.r/JRDyvT1XRQrS', ''),
(12, 'hashbrowns333', '$2a$09$mynamejeff$', NULL),
(13, 'hashyellow333', '$2a$09$mynamejeff$', NULL),
(14, 'hashyellow332', '$2a$09$mynamejeff$', NULL),
(15, 'orange', '$2a$09$mynamejeff$', NULL),
(16, 'orange2', '$2a$09$mynamejeff$', '();'),
(17, 'orange3', '$2a$09$mynamejeff$', '();'),
(18, 'hashbrowns3334', '$2a$09$mynamejeff$', NULL),
(19, 'hashbrowns3335', '$2a$09$mynamejeff$', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jokes_table`
--
ALTER TABLE `jokes_table`
  ADD PRIMARY KEY (`JokeID`),
  ADD KEY `fk_jokes_table_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jokes_table`
--
ALTER TABLE `jokes_table`
  MODIFY `JokeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jokes_table`
--
ALTER TABLE `jokes_table`
  ADD CONSTRAINT `fk_jokes_table_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
