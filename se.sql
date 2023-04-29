-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2021 at 11:03 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `link`) VALUES
(0, 'Suicide Jump', 'https://youtu.be/HJGjaCSJbDw'),
(1, 'Power Squat', 'https://youtu.be/SfBNAL4f3nM'),
(2, 'In & Outs', 'https://youtu.be/m1_yXxfFrBI'),
(3, 'C-Sit Twist', 'https://youtu.be/J_quiHOSadg'),
(4, 'Mason Twist', 'https://youtu.be/U2xN2I_Iu0w'),
(5, 'Wall Sit', 'https://youtu.be/XULOKw4E4P4'),
(6, 'Child\'s Pose', 'https://youtu.be/qYvYsFrTI0U'),
(7, 'Floor Sprints/Mountain Climbers', 'https://youtu.be/q_j1v-zRf8o'),
(8, 'Downward Dog', 'https://youtu.be/ZVtwWOpN170'),
(9, 'Elbow Plank', 'https://youtu.be/zuHZyVg3zRA'),
(10, 'Power Jump', 'https://youtu.be/6BhX7qYDBRw'),
(11, 'Burpee', 'https://youtu.be/dZgVxmf6jkA'),
(12, 'Walking Lunge', 'https://youtu.be/L8fvypPrzzs'),
(13, 'Tricep Dip', 'https://youtu.be/3ydgLFLK8e0'),
(14, 'Standing Mountain Climbers', 'https://youtu.be/UN3ox6IR_8s');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `description`, `time`) VALUES
(0, 'Going the Distance', '12-ct Bicycle Crunches/12-ct Jump Lunges/12-ct Jump Squats/12-ct Ski abs/(Repeat for 5 minutes)', 5),
(1, 'Kris Kross Will Make Ya...', 'Do 100 Suicide Jumps/(Jump Optional)', 10),
(2, 'Upper Body Circuit', '10 Push-ups/10 Floor Sprints/10-ct Downward Dog/10-ct Child\'s Pose/(5x)', 5),
(3, 'This Is Mutiny!', '40-sec Elbow Plank/20-sec Rest/(5x)', 5),
(4, 'Core Burner', '10 Mason Twists/10-ct Elbow Plank/10-ct Child\'s Pose/(10x)', 5),
(5, 'Go Sit Down', '20-sec Wall Sit/20-sec Power Squats/20-sec Rest/(5x)', 5),
(6, '10-Minute Wild Card', 'Pick from any of the 10-minute or two 5-minute workouts', 10),
(7, '5-Minute Wild Card', 'Pick from any of the 5-minute workouts', 5),
(8, 'Pay Or Play', 'Pick two 10-minute workouts, or pick one 10-minute workout and submit new workout by end of day', 0),
(9, 'House Of Pain', '10-sec Power Jumps/15-sec Rest/15-sec Suicide Jumps/15-sec Rest', 10),
(10, 'Dealbreaker', '20-sec C-Sit Twists/10-sec In & Outs/10-sec C-Sit Hold/20-sec Rest/(10x)', 10),
(11, 'Mov It Mov It', '1-min Tricep Dips/1-min Jumping Jacks/1-min Mountain Climbers/1-min Push-Ups/1-min Jog in Place/(15-sec Rest between exercises)', 5),
(12, 'Sophie\'s Choice', 'Pick any 2 workouts/any duration', 0);

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `current` int NOT NULL,
  `Monday` text NOT NULL,
  `Tuesday` text NOT NULL,
  `Wednesday` text NOT NULL,
  `Thursday` text NOT NULL,
  `Friday` text NOT NULL,
  `Saturday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`current`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(5, '2', '13', '13', '1', '13', '5');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `address`) VALUES
('2020-10-03 00:58:49', '-2528647949@mms.att.net');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`current`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
