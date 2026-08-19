-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2026 at 12:54 PM
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
-- Database: `smart_perlis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '123456', '2026-08-13 02:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Ahmad Ali', 'ahmad@gmail.com', 'Tourism Information', 'I would like to know more about Gua Kelam.', '2026-08-13 02:10:48'),
(2, 'Siti Nur', 'siti@gmail.com', 'Festival', 'When is the Perlis Food Festival?', '2026-08-13 02:10:48'),
(3, 'amalina', 'amalinaraihanah06@gmail.com', 'saja', 'rumahku', '2026-08-13 17:03:32'),
(4, 'amalina', 'amalinaraihanah06@gmail.com', 'saja', 'tfryh', '2026-08-13 17:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` int(11) NOT NULL,
  `destination_name` varchar(100) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`destination_id`, `destination_name`, `category`, `location`, `description`, `image`, `created_at`) VALUES
(1, 'Gua Kelam', 'Nature', 'Kaki Bukit, Perlis', 'One of the most famous limestone caves in Perlis.', 'gua_kelam.jpg', '2026-08-13 02:10:47'),
(2, 'Wang Kelian', 'Nature', 'Wang Kelian, Perlis', 'Beautiful mountain scenery and weekend market.', 'wangkelian.jpg', '2026-08-13 02:10:47'),
(3, 'Timah Tasoh Lake', 'Lake', 'Beseri, Perlis', 'A peaceful lake surrounded by hills.', 'timahtasoh.jpg', '2026-08-13 02:10:48'),
(4, 'Kuala Perlis', 'Culture', 'Kuala Perlis', 'Popular seafood destination and jetty area.', 'kualaperlis.jpg', '2026-08-13 02:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `destination_ratings`
--

CREATE TABLE `destination_ratings` (
  `rating_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination_ratings`
--

INSERT INTO `destination_ratings` (`rating_id`, `destination_id`, `name`, `rating`, `comment`, `created_at`) VALUES
(1, 1, 'Ali', 5, 'Very beautiful place and amazing cave.', '2026-08-13 14:07:12'),
(2, 1, 'Siti', 4, 'Gua Kelam is interesting and worth visiting.', '2026-08-13 14:07:12'),
(3, 1, 'Ahmad', 5, 'Beautiful scenery and a great experience.', '2026-08-13 14:07:12'),
(4, 1, 'Nurul', 4, 'Nice place for family activities.', '2026-08-13 14:07:12'),
(5, 2, 'Farah', 5, 'Timah Tasoh has beautiful scenery.', '2026-08-13 14:07:12'),
(6, 2, 'Hakim', 4, 'Very peaceful and relaxing place.', '2026-08-13 14:07:12'),
(7, 2, 'Aina', 5, 'Amazing lake view, especially during sunset.', '2026-08-13 14:07:12'),
(8, 2, 'Daniel', 3, 'Nice place but quite hot during the day.', '2026-08-13 14:07:12'),
(9, 3, 'Rizal', 5, 'Wang Kelian has an amazing mountain view.', '2026-08-13 14:07:12'),
(10, 3, 'Mira', 4, 'Beautiful scenery and interesting local area.', '2026-08-13 14:07:12'),
(11, 3, 'Hafiz', 5, 'Great place to enjoy the view of Perlis.', '2026-08-13 14:07:12'),
(12, 3, 'Sarah', 4, 'Good experience and beautiful surroundings.', '2026-08-13 14:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_end_date`, `location`, `description`, `image`) VALUES
(1, 'Tahun Melawat Perlis 2026', '2026-01-01', NULL, 'Perlis', 'Tourism campaign promoting Perlis attractions.', 'event1.jpg'),
(2, 'Perlis Food Festival', '2026-06-15', NULL, 'Arau', 'Experience traditional Perlis food.', 'event2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `image`, `caption`, `destination_id`) VALUES
(1, NULL, 'gua1.jpg', 'Beautiful Gua Kelam View', 1),
(2, NULL, 'gua2.jpg', 'Inside Gua Kelam', 1),
(3, NULL, 'tasoh1.jpg', 'Timah Tasoh Lake', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `name`, `email`, `rating`, `comment`, `created_at`) VALUES
(1, 'amalina', 'amalinaraihanah06@gmail.com', 1, 'ha btlkan', '2026-08-13 17:14:14');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tourism_report`
-- (See below for the actual view)
--
CREATE TABLE `tourism_report` (
`destination_name` varchar(100)
,`total_visitors` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','officer','user') NOT NULL DEFAULT 'user',
  `otp` varchar(255) DEFAULT NULL,
  `otp_expiry` datetime DEFAULT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` datetime DEFAULT NULL,
  `registration_otp` varchar(255) DEFAULT NULL,
  `registration_otp_expiry` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role`, `otp`, `otp_expiry`, `email_verified`, `email_verified_at`, `registration_otp`, `registration_otp_expiry`, `created_at`) VALUES
(1, 'admin', 'amalinaraihanah06@gmail.com', '12345', 'admin', NULL, NULL, 1, NULL, NULL, NULL, '2026-08-16 15:49:02'),
(2, 'officer', 'lyanacrys@gmail.com', '12345', 'officer', NULL, NULL, 1, NULL, NULL, NULL, '2026-08-16 15:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitor_id`, `visitor_name`, `country`, `visit_date`, `destination_id`) VALUES
(1, 'Ahmad', 'Malaysia', '2026-01-10', 1),
(2, 'John', 'Singapore', '2026-02-15', 2),
(3, 'Siti', 'Malaysia', '2026-03-20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_logs`
--

CREATE TABLE `visitor_logs` (
  `log_id` int(11) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_logs`
--

INSERT INTO `visitor_logs` (`log_id`, `destination_id`, `page`, `visit_date`) VALUES
(1, 1, 'Destination Details', '2026-08-13 14:03:10'),
(2, 1, 'Destination Details', '2026-08-13 14:03:10'),
(3, 2, 'Destination Details', '2026-08-13 14:03:10'),
(4, NULL, 'Home', '2026-08-13 14:03:10'),
(5, NULL, 'Home', '2026-08-13 14:25:31'),
(6, NULL, 'Home', '2026-08-13 14:26:45'),
(7, NULL, 'Home', '2026-08-13 14:27:47'),
(8, NULL, 'Home', '2026-08-13 14:27:58'),
(9, NULL, 'Home', '2026-08-13 14:30:12'),
(10, NULL, 'Home', '2026-08-13 16:54:47'),
(11, NULL, 'Home', '2026-08-13 17:02:47'),
(12, NULL, 'Home', '2026-08-16 12:22:26'),
(13, NULL, 'Home', '2026-08-16 12:27:49'),
(14, NULL, 'Home', '2026-08-16 17:32:50'),
(15, NULL, 'Home', '2026-08-16 17:33:16'),
(16, NULL, 'Home', '2026-08-16 17:33:22'),
(17, NULL, 'Home', '2026-08-16 17:40:13'),
(18, NULL, 'Home', '2026-08-16 17:40:26'),
(19, NULL, 'Home', '2026-08-17 12:06:44'),
(20, NULL, 'Home', '2026-08-17 12:08:40'),
(21, NULL, 'Home', '2026-08-17 12:08:41'),
(22, NULL, 'Home', '2026-08-17 12:10:08'),
(23, NULL, 'Home', '2026-08-17 12:10:09'),
(24, NULL, 'Home', '2026-08-17 12:12:42'),
(25, NULL, 'Home', '2026-08-17 12:12:43'),
(26, NULL, 'Home', '2026-08-17 12:21:51'),
(27, NULL, 'Home', '2026-08-17 12:25:53'),
(28, NULL, 'Home', '2026-08-17 12:28:17'),
(29, NULL, 'Home', '2026-08-17 12:31:14'),
(30, NULL, 'Home', '2026-08-17 12:33:50'),
(31, NULL, 'Home', '2026-08-17 14:33:10'),
(32, NULL, 'Home', '2026-08-17 14:41:11'),
(33, NULL, 'Home', '2026-08-17 14:42:06'),
(34, NULL, 'Home', '2026-08-17 14:42:09'),
(35, NULL, 'Home', '2026-08-17 14:42:40'),
(36, NULL, 'Home', '2026-08-17 14:48:14'),
(37, NULL, 'Home', '2026-08-17 14:48:21'),
(38, NULL, 'Home', '2026-08-17 14:49:22'),
(39, NULL, 'Home', '2026-08-17 15:17:45'),
(40, NULL, 'Home', '2026-08-17 15:32:38'),
(41, NULL, 'Home', '2026-08-17 15:32:44'),
(42, NULL, 'Home', '2026-08-17 15:32:54'),
(43, NULL, 'Home', '2026-08-17 15:38:02'),
(44, NULL, 'Home', '2026-08-17 15:40:35');

-- --------------------------------------------------------

--
-- Structure for view `tourism_report`
--
DROP TABLE IF EXISTS `tourism_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tourism_report`  AS SELECT `d`.`destination_name` AS `destination_name`, count(`v`.`visitor_id`) AS `total_visitors` FROM (`destinations` `d` left join `visitors` `v` on(`d`.`destination_id` = `v`.`destination_id`)) GROUP BY `d`.`destination_id`, `d`.`destination_name` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `destination_ratings`
--
ALTER TABLE `destination_ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitor_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination_ratings`
--
ALTER TABLE `destination_ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destination_ratings`
--
ALTER TABLE `destination_ratings`
  ADD CONSTRAINT `destination_ratings_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`) ON DELETE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`) ON DELETE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`) ON DELETE CASCADE;

--
-- Constraints for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  ADD CONSTRAINT `visitor_logs_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`destination_id`) ON DELETE SET NULL;
COMMIT;

ALTER TABLE contact_messages
ADD COLUMN reply_status ENUM('Not Replied', 'Replied')
NOT NULL DEFAULT 'Not Replied';

ALTER TABLE contact_messages
ADD COLUMN reply_message TEXT NULL,
ADD COLUMN replied_at DATETIME NULL;

ALTER TABLE contact_messages
ADD message_type VARCHAR(50) NOT NULL DEFAULT 'General Enquiry';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
