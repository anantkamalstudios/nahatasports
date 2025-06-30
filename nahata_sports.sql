-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 08:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nahata_sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `full_name`, `phone`, `username`, `email`, `password`, `type`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'priyanka shejwalkar', '9874563215', 'priyanka', 'priyanka@gmail.com', '$2y$10$RIjGS5JDAKUcHDYgF4q3h.305QYne8xfS4QWTpUx/fewu7JDwroJG', NULL, '2025-04-09 13:04:34', '2025-04-09 13:04:34'),
(2, 'nisha bagade', '987456325', 'shani', 'nisha@gmail.com', '$2y$10$VoTaSx82/r7j2ffM6DxMSuLkewHa2efK48uCLTrvye0bFOVOGZktC', NULL, '2025-04-09 13:11:16', '2025-04-09 13:11:16'),
(3, 'piyush shejwalkar', '987456325', 'piyush', 'piyush@gmail.com', '$2y$10$qd0ndH7HacU0E/Do0qUhJuPIk4vjoNP43eJ9wkSao4sFECiZ5JbvC', NULL, '2025-04-10 13:31:02', '2025-04-10 13:31:02'),
(4, 'priyanka shejwalkar', '9874563215', 'priya', 'priyanka.99@gmal.com', '$2y$10$WSBxGCKM7G.1rJDw6qYGEOIo/vtXuxS467oqCFrTGvMt1GGSEeQk2', NULL, '2025-04-23 07:05:43', '2025-04-23 07:05:43'),
(5, 'priyanka shejwalkar', '9874563215', 'priyan', 'durgesh@gmail.com', '$2y$10$Tp7UCv4VzWcI3kjrMjWQ5OpucP75ms9.iOY8sIVHSvzQoweykUin.', NULL, '2025-04-23 07:08:06', '2025-04-23 07:08:06'),
(6, 'payal dinde', '9874563215', 'payal', 'payal@gmail.com', '$2y$10$9J2nW/aqgfWxjrB24JcVyOKIaQgUZ16Tr5J/YjY6HGsKnKh.y16Pq', NULL, '2025-04-26 10:12:03', '2025-04-26 10:12:03'),
(7, 'tina pawar', '9284559823', 'tina', 'tina@gmail.com', '$2y$10$sCNGCviLnDJvOPd379.Jcelm2G02mo.3ZUGUW4Zdk.yIeGtq1.4zS', NULL, '2025-04-26 10:13:33', '2025-04-26 10:13:33'),
(8, 'ritu shejwalkar', '987456325', 'ritu', 'ritu@gmail.com', '$2y$10$krqr64aiOQi1zwXM.peIwu8ATyPERzsqZ1/oJ/kROvYVSDjb8DNou', NULL, '2025-04-28 09:56:38', '2025-04-28 09:56:38'),
(9, 'piyush shejwalkar', '9874563215', 'ri', 'piyush@gmail.com', '$2y$10$U6wh7h2ZQEB.wJa77A0CceqFpml2njlxIbL3k441yRtHf35lxWyiC', NULL, '2025-04-28 10:44:30', '2025-04-28 10:44:30'),
(10, 'poonam dhatrak', '4567891236', 'puni', 'poonam@gmail.com', '$2y$10$TRucOIwwnjfrLr8n5PCBmOTJ2QD8YtJFVzWgNYco73gyDcZRSJUAW', NULL, '2025-04-28 10:46:10', '2025-04-28 10:46:10'),
(11, 'komal mali', '5689231478', 'komal', 'komal@gmail', '$2y$10$yq2CetR.2O7Rhl7HAeoVXuQurAQvZ6VECmUAqhSqinHuH8mJXOuLu', NULL, '2025-04-28 11:15:05', '2025-04-28 11:15:05'),
(12, 'geeta kale', '9874563215', 'geeta@gmail.com', 'geeta@gmail.com', '$2y$10$iAw5ypODF.FPaIm8VuC0AOLnzMUNhFMOFuQ7Et1PcAGi0GXK058cm', NULL, '2025-04-30 06:05:55', '2025-04-30 06:05:55'),
(13, 'riya more', '9874563215', 'riya', 'riya@gmail.com', '$2y$10$6I79.lsH4Wn6wQSDfYkgUuJC6U.tjzcKWrwZHj1p6g0fxyHTAa2LG', NULL, '2025-04-30 07:08:08', '2025-04-30 07:08:08'),
(14, 'Pragya', '+1 5589 55488 55', 'pragya', 'pragya@gmail.com', '$2y$10$70/9vh0ngfbY74Xw87FYOebSV4Ntju97Dn/1g9WXILQeDgdHS.dlm', 'user', '2025-06-25 07:58:27', '2025-06-25 07:58:27'),
(15, 'Rishab12', '8484984984949', 'rishab12', 'pragya12@gmail.com', '$2y$10$DiyalUVAcIF8WkKuxNVceuEnaERBFn3i7501Pz71jq184Pz4UYtyG', NULL, '2025-06-25 09:18:04', '2025-06-25 09:18:04'),
(16, 'Prisha', '7774820475', 'Prisha', 'prisha@gmail.com', '$2y$10$EBmsL4tgfyzH7CIeFCODLeuPlEEwkL9goTxB8zZ/8A.OMYp0xuOW.', NULL, '2025-06-25 11:42:08', '2025-06-25 11:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `all_venues`
--

CREATE TABLE `all_venues` (
  `user_id` int(11) NOT NULL,
  `add_venue_name` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `details` varchar(256) NOT NULL,
  `venue_photo` varchar(256) NOT NULL,
  `map` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `select_amenity_name` varchar(256) NOT NULL,
  `select_sports_name` varchar(256) NOT NULL,
  `select_court_name` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_venues`
--

INSERT INTO `all_venues` (`user_id`, `add_venue_name`, `address`, `details`, `venue_photo`, `map`, `location`, `select_amenity_name`, `select_sports_name`, `select_court_name`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'football123', 'cidco', 'Start typing here... xyz', '1744785775.png', 'ganesh chowk', 'nashik', 'priyanka', 'basket-ball', 'foot-ball', '2025-04-16 06:42:55', '2025-04-16 06:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `user_id` int(11) NOT NULL,
  `batch_name` varchar(256) NOT NULL,
  `coaching` varchar(256) NOT NULL,
  `age_group` varchar(256) NOT NULL,
  `difficulty_level` varchar(256) NOT NULL,
  `batch_type` varchar(256) NOT NULL,
  `select_venues` varchar(256) NOT NULL,
  `fees` varchar(256) NOT NULL,
  `start_date` varchar(256) NOT NULL,
  `end_date` varchar(256) NOT NULL,
  `start_time` varchar(256) NOT NULL,
  `end_time` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`user_id`, `batch_name`, `coaching`, `age_group`, `difficulty_level`, `batch_type`, `select_venues`, `fees`, `start_date`, `end_date`, `start_time`, `end_time`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'cricket', ' Kids Fitness - For Small Kids from 2.5 Years to 5 Years ', '2', 'Intermediate', 'Group', ' Nahata Sports Complex- Sinhgad Rd ', '400', '2025-04-19', '2025-04-10', '17:27', '17:27', '2025-04-15 10:57:22', '2025-04-15 10:57:22'),
(2, 'foot-ball', ' Cricket Coaching ', '5', 'Biginner', 'Single', ' Nahata Sports Complex- Gangadham Chowk  ', '500', '2025-04-18', '2025-05-11', '14:51', '14:51', '2025-04-15 14:21:25', '2025-04-15 14:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `court_name` varchar(255) NOT NULL,
  `time_slot` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `booking_date`, `court_name`, `time_slot`, `price`, `created_at`, `updated_at`) VALUES
(1, 12, '2025-05-07', 'Synthetic Court 4', 'slot_8am', 300, '2025-04-30 00:57:10', '2025-04-30 00:57:10'),
(2, 12, '2025-05-07', 'Synthetic Court 4', 'slot_9am', 300, '2025-04-30 00:57:10', '2025-04-30 00:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `coaching`
--

CREATE TABLE `coaching` (
  `user_id` int(11) NOT NULL,
  `coaching_name` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaching`
--

INSERT INTO `coaching` (`user_id`, `coaching_name`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'cricket', '2025-04-14 10:50:38', '2025-04-14 10:50:38'),
(2, 'foot-ball', '2025-04-14 10:51:04', '2025-04-14 10:51:04'),
(3, 'basket-ball', '2025-04-14 10:51:18', '2025-04-14 10:51:18'),
(4, 'basket-ball', '2025-04-14 10:58:05', '2025-04-14 10:58:05'),
(5, 'cricket ', '2025-04-14 13:01:20', '2025-04-14 13:01:20'),
(6, 'basket-ball', '2025-04-16 09:06:49', '2025-04-16 09:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `coaching_sport`
--

CREATE TABLE `coaching_sport` (
  `user_id` int(11) NOT NULL,
  `sport_title` varchar(256) NOT NULL,
  `sport_bannar_image` varchar(256) NOT NULL,
  `about_sport` varchar(256) NOT NULL,
  `benefits_sports` varchar(256) NOT NULL,
  `future_prospects` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaching_sport`
--

INSERT INTO `coaching_sport` (`user_id`, `sport_title`, `sport_bannar_image`, `about_sport`, `benefits_sports`, `future_prospects`, `insert_timestamp`, `update_timestamp`) VALUES
(2, 'priyanka12', '1744804639.png', 'Start typing here... iuyiyiuyiy', 'Start typing here...jhiuhyiuy', 'Start typing here...uhihiyi', '2025-04-16 11:57:19', '2025-04-16 11:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `coach_bannar`
--

CREATE TABLE `coach_bannar` (
  `user_id` int(11) NOT NULL,
  `sports_bannar_image` varchar(256) NOT NULL,
  `sport_name` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach_bannar`
--

INSERT INTO `coach_bannar` (`user_id`, `sports_bannar_image`, `sport_name`, `insert_timestamp`, `update_timestamp`) VALUES
(5, '1744696108.png', 'Professional Basketball Coaching - Best in Pune', '2025-04-15 05:48:28', '2025-04-15 05:48:28'),
(6, '1744778003.png', 'Professional Badminton Coaching ', '2025-04-15 14:03:58', '2025-04-15 14:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `nahata_sports_complex`
--

CREATE TABLE `nahata_sports_complex` (
  `user_id` int(11) NOT NULL,
  `date` varchar(256) NOT NULL,
  `available_court` varchar(256) NOT NULL,
  `available_slot` varchar(256) NOT NULL,
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `inert_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `user_id` int(11) NOT NULL,
  `post_image` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `published_by` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `inert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`user_id`, `post_image`, `date`, `published_by`, `content`, `inert_timestamp`, `update_timestamp`) VALUES
(3, '1746266482.jpg', '2025-05-14', 'geeta', 'nbyjt', '2025-05-03 10:01:22', '2025-05-03 10:01:22'),
(4, '1746267919.jpg', '2025-05-29', 'solar power', 'jhiuy56', '2025-05-03 10:25:19', '2025-05-03 10:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'admin', '2025-04-26 11:59:15', '2025-04-26 11:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `summary_book`
--

CREATE TABLE `summary_book` (
  `user_id` int(11) NOT NULL,
  `slots` varchar(256) NOT NULL,
  `available_date` varchar(256) NOT NULL,
  `total_prise` varchar(256) NOT NULL,
  `booking_data` varchar(256) NOT NULL,
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `inert_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `venue_amenities`
--

CREATE TABLE `venue_amenities` (
  `user_id` int(11) NOT NULL,
  `amenity_name` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_amenities`
--

INSERT INTO `venue_amenities` (`user_id`, `amenity_name`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'Shuttles For Sale', '2025-04-22 07:51:00', '2025-04-22 07:51:00'),
(2, 'Restroom', '2025-04-22 07:51:12', '2025-04-22 07:51:12'),
(3, 'Refreshments', '2025-04-22 07:51:27', '2025-04-22 07:51:27'),
(4, 'Rackets On Rent', '2025-04-22 07:51:43', '2025-04-22 07:51:43'),
(5, 'Free WiFi', '2025-04-22 07:51:58', '2025-04-22 07:51:58'),
(6, 'Drinking Water', '2025-04-22 07:52:12', '2025-04-22 07:52:12'),
(7, 'Basketball On Rent', '2025-04-22 07:52:24', '2025-04-22 07:52:24'),
(8, 'Ample Parking ', '2025-04-22 07:52:40', '2025-04-22 07:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `venue_banner`
--

CREATE TABLE `venue_banner` (
  `user_id` int(11) NOT NULL,
  `venue_name` varchar(256) NOT NULL,
  `banner_image` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_banner`
--

INSERT INTO `venue_banner` (`user_id`, `venue_name`, `banner_image`, `insert_timestamp`, `update_timestamp`) VALUES
(4, 'Nahata Sports Complex-Sinhgad Rd', '1744617981.png', '2025-04-14 08:06:21', '2025-04-14 08:06:21'),
(5, 'Nahata Sports Complex-Sinhgad Rd5', '1744780440.png', '2025-04-16 05:14:00', '2025-04-16 05:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `venue_court`
--

CREATE TABLE `venue_court` (
  `user_id` int(11) NOT NULL,
  `court_name` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_court`
--

INSERT INTO `venue_court` (`user_id`, `court_name`, `insert_timestamp`, `update_timestamp`) VALUES
(3, 'foot-ball', '2025-04-11 11:21:55', '2025-04-11 11:21:55'),
(4, 'basket-ball', '2025-04-11 11:22:44', '2025-04-11 11:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `venue_sports`
--

CREATE TABLE `venue_sports` (
  `user_id` int(11) NOT NULL,
  `sports_title` varchar(256) NOT NULL,
  `sports_image` varchar(256) NOT NULL,
  `insert_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_sports`
--

INSERT INTO `venue_sports` (`user_id`, `sports_title`, `sports_image`, `insert_timestamp`, `update_timestamp`) VALUES
(1, 'Basketball', '1745313916.jpg', '2025-04-22 08:23:20', '2025-04-22 08:23:20'),
(2, 'Cricket', '1745313907.jpg', '2025-04-22 08:23:59', '2025-04-22 08:23:59'),
(3, 'Dance', '1745313895.png', '2025-04-22 08:24:21', '2025-04-22 08:24:21'),
(4, 'Karate', '1745313886.jpg', '2025-04-22 08:24:40', '2025-04-22 08:24:40'),
(5, 'Kids Fitness', '1745313876.jpg', '2025-04-22 08:25:01', '2025-04-22 08:25:01'),
(6, 'Skating', '1745313865.png', '2025-04-22 08:25:20', '2025-04-22 08:25:20'),
(7, 'krate123', '1749875552.jpg', '2025-06-14 04:32:32', '2025-06-14 04:32:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `all_venues`
--
ALTER TABLE `all_venues`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coaching`
--
ALTER TABLE `coaching`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `coaching_sport`
--
ALTER TABLE `coaching_sport`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `coach_bannar`
--
ALTER TABLE `coach_bannar`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `nahata_sports_complex`
--
ALTER TABLE `nahata_sports_complex`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `summary_book`
--
ALTER TABLE `summary_book`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue_amenities`
--
ALTER TABLE `venue_amenities`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue_banner`
--
ALTER TABLE `venue_banner`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue_court`
--
ALTER TABLE `venue_court`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue_sports`
--
ALTER TABLE `venue_sports`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `all_venues`
--
ALTER TABLE `all_venues`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coaching`
--
ALTER TABLE `coaching`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coaching_sport`
--
ALTER TABLE `coaching_sport`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coach_bannar`
--
ALTER TABLE `coach_bannar`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nahata_sports_complex`
--
ALTER TABLE `nahata_sports_complex`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `summary_book`
--
ALTER TABLE `summary_book`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venue_amenities`
--
ALTER TABLE `venue_amenities`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `venue_banner`
--
ALTER TABLE `venue_banner`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `venue_court`
--
ALTER TABLE `venue_court`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venue_sports`
--
ALTER TABLE `venue_sports`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
