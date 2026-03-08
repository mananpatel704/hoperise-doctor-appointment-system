-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 07:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoperise`
--

-- --------------------------------------------------------

--
-- Table structure for table `hs_admin`
--

CREATE TABLE `hs_admin` (
  `admin_id` int(20) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `admin_thumb` varchar(50) NOT NULL,
  `role_id` int(10) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1,
  `created_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_admin`
--

INSERT INTO `hs_admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_thumb`, `role_id`, `status`, `created_data`, `update_data`) VALUES
(9, 'sapna singh', 'sapnnna988@gmail.com', 'sapna17@gmail.com', '8.jpg', 1, 1, '2024-08-03 06:31:44', '2024-08-03 06:31:44'),
(10, 'admin', 'admin@gmail.com', 'swati12', 'bitnami.ico', 1, 1, '2024-09-27 11:49:56', '2024-09-27 11:49:56'),
(11, 'swati', 'swati28singh11@gmail', 'swati123', 'bitnami.ico', 1, 1, '2024-09-25 10:58:29', '2024-09-25 10:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `hs_appointment`
--

CREATE TABLE `hs_appointment` (
  `appointment_id` int(10) NOT NULL,
  `patient_id` int(20) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_id` int(20) NOT NULL,
  `service_id` int(10) NOT NULL,
  `doctor_id` int(20) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time(5) NOT NULL,
  `appointment_description` varchar(100) NOT NULL,
  `appointment_status` varchar(10) NOT NULL DEFAULT 'pending',
  `appointment_payment_status` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_appointment`
--

INSERT INTO `hs_appointment` (`appointment_id`, `patient_id`, `category_id`, `sub_category_id`, `service_id`, `doctor_id`, `appointment_date`, `appointment_time`, `appointment_description`, `appointment_status`, `appointment_payment_status`, `status`, `created_date`, `update_date`) VALUES
(10, 3, 2, 25, 2, 1, '2025-07-04', '09:44:00.00000', 'aeofr[of', 'Accept', 0, 1, '2025-07-03 11:15:03', '2025-07-03 11:15:03'),
(11, 8, 14, 28, 2, 5, '2025-07-10', '16:35:00.00000', 'eigepf', 'Accept', 1, 1, '2025-07-03 11:15:21', '2025-07-03 11:15:21'),
(12, 3, 1, 11, 1, 1, '2024-11-05', '19:45:00.00000', 'dfgfggb', 'pending', 0, 1, '2024-11-25 16:46:06', '2024-11-25 16:46:06'),
(13, 3, 1, 11, 1, 1, '2024-11-08', '16:52:00.00000', 'uijkml,', 'Reject', 0, 1, '2025-07-03 10:59:20', '2025-07-03 10:59:20'),
(14, 9, 1, 11, 1, 1, '2024-11-14', '16:54:00.00000', 'giuhiuhi', 'pending', 0, 1, '2024-11-25 16:55:33', '2024-11-25 16:55:33'),
(15, 9, 1, 11, 1, 1, '2024-11-14', '16:54:00.00000', 'giuhiuhi', 'Accept', 1, 1, '2024-11-25 17:15:28', '2024-11-25 17:15:28'),
(16, 9, 2, 13, 2, 6, '2024-10-31', '19:58:00.00000', 'jhbnhkjl', 'Accept', 0, 1, '2024-11-25 17:16:07', '2024-11-25 17:16:07'),
(17, 9, 1, 11, 1, 1, '2024-11-10', '20:01:00.00000', 'foivjsdpfo', 'pending', 0, 1, '2024-11-29 17:01:56', '2024-11-29 17:01:56'),
(18, 8, 2, 15, 2, 5, '2025-03-13', '19:34:00.00000', 'dgfhfh', 'pending', 0, 1, '2025-03-05 18:35:02', '2025-03-05 18:35:02'),
(19, 8, 2, 13, 2, 5, '2025-03-05', '20:03:00.00000', 'fjglnkgml', 'Accept', 0, 1, '2025-03-05 19:06:19', '2025-03-05 19:06:19'),
(20, 7, 1, 13, 1, 1, '2025-03-05', '13:32:00.00000', 'aa\r\n', 'pending', 0, 1, '2025-03-06 13:32:14', '2025-03-06 13:32:14'),
(21, 10, 2, 15, 2, 5, '2025-07-06', '11:58:00.00000', 'hello', 'pending', 0, 1, '2025-07-03 10:58:31', '2025-07-03 10:58:31'),
(22, 8, 2, 29, 3, 5, '2025-07-03', '11:34:00.00000', 'fever', 'pending', 0, 1, '2025-07-03 11:32:44', '2025-07-03 11:32:44'),
(23, 8, 2, 13, 3, 5, '2025-07-04', '11:34:00.00000', 'fever', 'Accept', 0, 1, '2025-07-03 11:35:23', '2025-07-03 11:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `hs_category`
--

CREATE TABLE `hs_category` (
  `category_id` int(10) NOT NULL,
  `category_title` varchar(40) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  `category_thumb` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_category`
--

INSERT INTO `hs_category` (`category_id`, `category_title`, `category_description`, `category_thumb`, `status`, `created_date`, `update_date`) VALUES
(1, ' Pediatrics', 'fever', '', 1, '2024-10-18 11:13:59', '2024-10-18 11:13:59'),
(2, 'Orthopedic Surgeon ', 'FELLOWSHIP TRAINED SPECIALIST OF JOINT PROBLEMS', '', 1, '2024-10-07 11:44:41', '2024-10-07 11:44:41'),
(14, 'doctor88', 'fever', 'test2.jpg', 1, '2024-12-04 11:13:23', '2024-12-04 11:13:23'),
(16, 'orthopedic doctors', 'test', 'tfujygik.png', 1, '2024-12-03 13:05:47', '2024-12-03 13:05:47'),
(17, 'orthopedic doctors111', 'fever', 'tfujygik.png', 1, '2024-12-04 11:12:10', '2024-12-04 11:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `hs_contact`
--

CREATE TABLE `hs_contact` (
  `hs_id` int(10) NOT NULL,
  `hs_name` varchar(20) NOT NULL,
  `hs_phone` int(10) NOT NULL,
  `hs_email` varchar(20) NOT NULL,
  `hs_message` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_data` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_data` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_contact`
--

INSERT INTO `hs_contact` (`hs_id`, `hs_name`, `hs_phone`, `hs_email`, `hs_message`, `status`, `created_data`, `updated_data`) VALUES
(26, 'sapna', 2147483647, 'bittusingh9931@gmail', 'hellol', 1, '2024-10-14 16:36:33', '2024-10-14 16:36:33'),
(27, 'sapna', 2147483647, 'bittusingh9931@gmail', 'hello', 1, '2024-10-15 08:47:15', '2024-10-15 08:47:15'),
(28, 'sapna', 2147483647, 'bittusingh9931@gmail', 'hello', 1, '2024-10-15 08:49:04', '2024-10-15 08:49:04'),
(29, 'sapna', 2147483647, 'bittusingh9931@gmail', 'hello', 1, '2024-10-15 08:49:16', '2024-10-15 08:49:16'),
(30, 'sapna', 2147483647, 'bittusingh9931@gmail', 'hello', 1, '2024-10-15 08:49:27', '2024-10-15 08:49:27'),
(33, 'swati', 2147483647, 'bittusingh9931@gmail', 'hello', 1, '2024-10-15 08:55:37', '2024-10-15 08:55:37'),
(34, 'swati', 2147483647, 'bittusingh9931@gmail', 'hello', 1, '2024-10-15 08:57:04', '2024-10-15 08:57:04'),
(35, 'sapna', 2147483647, 'bittusingh9931@gmail', 'sdfgv', 1, '2024-10-15 08:59:12', '2024-10-15 08:59:12'),
(36, 'sapna', 2147483647, 'bittusingh9931@gmail', 'sdfgv', 1, '2024-10-15 08:59:49', '2024-10-15 08:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `hs_doctor`
--

CREATE TABLE `hs_doctor` (
  `doctor_id` int(10) NOT NULL,
  `role_id` int(20) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_id` int(20) NOT NULL,
  `service_id` int(10) NOT NULL,
  `doctor_fname` varchar(40) NOT NULL,
  `doctor_mname` varchar(30) NOT NULL,
  `doctor_lname` varchar(30) NOT NULL,
  `doctor_email` varchar(20) NOT NULL,
  `doctor_password` varchar(10) NOT NULL,
  `doctor_phone` int(10) NOT NULL,
  `doctor_address` varchar(50) NOT NULL,
  `doctor_dob` varchar(20) NOT NULL,
  `doctor_doj` varchar(20) NOT NULL,
  `doctor_gender` varchar(10) NOT NULL,
  `doctor_thumb` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_doctor`
--

INSERT INTO `hs_doctor` (`doctor_id`, `role_id`, `category_id`, `sub_category_id`, `service_id`, `doctor_fname`, `doctor_mname`, `doctor_lname`, `doctor_email`, `doctor_password`, `doctor_phone`, `doctor_address`, `doctor_dob`, `doctor_doj`, `doctor_gender`, `doctor_thumb`, `status`, `created_date`, `updated_date`) VALUES
(1, 1, 1, 13, 1, 'swati', 'kumari', 'singh', 'swati@123gmail.com', '1234', 1234555555, 'kalol', '2005-11-28', '2024-02-08', 'female', 'ganesh-5998483.jpg', 1, '2024-12-03 13:25:41', '2024-12-03 13:25:41'),
(5, 1, 1, 13, 1, 'Dr. Krunal', 'kumar', 'singh', 'sapna@gmail.com', '555', 2147483647, 'kaol', '2000-09-12', '1999-10-11', 'male', 'images.jpg', 1, '2024-12-03 13:35:28', '2024-12-03 13:35:28'),
(6, 1, 1, 11, 1, 'Dr.Bittu', 'kumar', 'singh', 'bittu@gmail.com', '33333', 2147483647, 'kalol', '2000-02-02', '2022-02-01', 'male', '$ peter-vanosdall-ktpyjH2h9xs-unsplash.jpg', 1, '2024-10-17 14:31:54', '2024-10-17 14:31:54'),
(21, 1, 1, 13, 1, 'joikl', 'oijo', 'iuhji', 'jyoti@gmail.com', '4864', 1234555555, 'ygihuj', '2024-10-05', '2024-11-09', 'male', '$ hotel-heevan-pahalgam.jpg', 1, '2024-12-03 13:18:46', '2024-12-03 13:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `hs_feedback`
--

CREATE TABLE `hs_feedback` (
  `feedback_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `fd_message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_feedback`
--

INSERT INTO `hs_feedback` (`feedback_id`, `patient_id`, `fd_message`, `status`, `created_date`, `updated_date`) VALUES
(14, 4, 'asdfgh', 1, '2024-10-16 13:10:28', '2024-10-16 13:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `hs_patient`
--

CREATE TABLE `hs_patient` (
  `patient_id` int(10) NOT NULL,
  `patient_fname` varchar(20) NOT NULL,
  `patient_lname` varchar(20) NOT NULL,
  `patient_mname` varchar(30) NOT NULL,
  `patient_email` varchar(30) NOT NULL,
  `patient_password` int(20) NOT NULL,
  `patient_gender` varchar(10) NOT NULL,
  `patient_address` varchar(50) NOT NULL,
  `patient_phone` int(10) NOT NULL,
  `patient_dob` int(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_patient`
--

INSERT INTO `hs_patient` (`patient_id`, `patient_fname`, `patient_lname`, `patient_mname`, `patient_email`, `patient_password`, `patient_gender`, `patient_address`, `patient_phone`, `patient_dob`, `status`, `created_date`, `update_date`) VALUES
(3, 'sapna', 'kumari', 'singh', 'sapna@gmail.com', 555, 'male', 'kalol', 2147483647, 2000, 1, '2025-07-03 11:12:14', '2025-07-03 11:12:14'),
(4, 'bittu', 'singh', 'kumar', 'bittu@gmail.com', 555, 'male', 'kalol', 2147483647, 2000, 1, '2024-09-11 12:18:55', '2024-09-11 12:18:55'),
(7, 'jiya', 'singh', 'kumari', 'jiya@gmail.com', 1234, 'female', 'kalol', 1236547895, 2024, 1, '2024-10-07 16:56:04', '2024-10-07 16:56:04'),
(8, 'jiya', 'singh', 'singh', 'swati28singh11@gmail.com', 555, 'female', 'kalol', 1236547895, 2024, 1, '2024-10-07 16:57:06', '2024-10-07 16:57:06'),
(9, 'sapna', 'singh', 'kumari', 'jjj@hh.kkk', 555, 'female', 'kalol', 2147483647, 222, 1, '2024-10-07 17:00:17', '2024-10-07 17:00:17'),
(10, 'sapna', 'singh', 'kumari', 'sapnnna988@gmail.com', 555, 'female', 'kalol', 2147483647, 2025, 1, '2025-07-03 11:14:23', '2025-07-03 11:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `hs_role`
--

CREATE TABLE `hs_role` (
  `role_id` int(3) NOT NULL,
  `role_title` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_role`
--

INSERT INTO `hs_role` (`role_id`, `role_title`, `status`, `created_date`, `updated_date`) VALUES
(1, 'admin', 1, '2024-08-02 11:22:37', '2024-09-20 10:57:36'),
(9, 'doctor', 1, '2024-09-20 11:01:39', '2024-09-20 11:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `hs_service`
--

CREATE TABLE `hs_service` (
  `service_id` int(10) NOT NULL,
  `category_id` int(20) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_description` text NOT NULL,
  `service_thumb` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_service`
--

INSERT INTO `hs_service` (`service_id`, `category_id`, `sub_category_id`, `service_title`, `service_description`, `service_thumb`, `status`, `created_data`, `updated_data`) VALUES
(1, 1, 13, ' recommended vaccines', 'Recommended for adults 50 and older, and two doses are given two to six months apart', 'download (1).jpg', 1, '2024-12-03 13:32:46', '2024-12-03 13:32:46'),
(2, 2, 13, 'knee Arthritis', 'knee ligament injury is one of the most common knee injuries.', 'Alpine-Valley-Pahalgam-Jammu-and-Kashmir-India.jpg', 1, '2024-12-03 13:32:15', '2024-12-03 13:32:15'),
(3, 1, 13, ' general ', 'A healthcare provider examines your general health, including your skin, eyes, ears, nose, mouth, heart, lungs, abdomen, feet, nervous system, and mental health.', 'download.jpg', 1, '2024-12-03 13:33:32', '2024-12-03 13:33:32'),
(20, 1, 29, 'Whitening is among the most popular dental Teeth cleaning is part of oral hygiene and involves Teeth cleaning is part of oral hygiene and involves', 'The elements such as red and white cell,and platelets,helps detect diseases such as leukemia.', 'images.jpg', 1, '2024-12-03 13:31:51', '2024-12-03 13:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `hs_sub_category`
--

CREATE TABLE `hs_sub_category` (
  `sub_category_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_title` varchar(20) NOT NULL,
  `sub_category_description` varchar(100) NOT NULL,
  `sub_category_thumb` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hs_sub_category`
--

INSERT INTO `hs_sub_category` (`sub_category_id`, `category_id`, `sub_category_title`, `sub_category_description`, `sub_category_thumb`, `status`, `created_date`, `update_date`) VALUES
(13, 1, 'General', 'testtt', 'tfujygik.png', 1, '2024-12-03 13:11:45', '2024-12-03 13:11:45'),
(15, 1, 'test56', 'test', '', 1, '2024-12-03 11:02:03', '2024-12-03 11:02:03'),
(16, 1, 'tyhuj', 'uuu', '', 1, '2024-12-02 11:54:58', '2024-12-02 11:54:58'),
(29, 1, 'docter', 'testtt', '', 1, '2024-12-02 13:31:35', '2024-12-02 13:31:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hs_admin`
--
ALTER TABLE `hs_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `hs_appointment`
--
ALTER TABLE `hs_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `hs_category`
--
ALTER TABLE `hs_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `hs_contact`
--
ALTER TABLE `hs_contact`
  ADD PRIMARY KEY (`hs_id`);

--
-- Indexes for table `hs_doctor`
--
ALTER TABLE `hs_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `hs_feedback`
--
ALTER TABLE `hs_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `hs_patient`
--
ALTER TABLE `hs_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `hs_role`
--
ALTER TABLE `hs_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `hs_service`
--
ALTER TABLE `hs_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `hs_sub_category`
--
ALTER TABLE `hs_sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hs_admin`
--
ALTER TABLE `hs_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hs_appointment`
--
ALTER TABLE `hs_appointment`
  MODIFY `appointment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hs_category`
--
ALTER TABLE `hs_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hs_contact`
--
ALTER TABLE `hs_contact`
  MODIFY `hs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hs_doctor`
--
ALTER TABLE `hs_doctor`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hs_feedback`
--
ALTER TABLE `hs_feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hs_patient`
--
ALTER TABLE `hs_patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hs_role`
--
ALTER TABLE `hs_role`
  MODIFY `role_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hs_service`
--
ALTER TABLE `hs_service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hs_sub_category`
--
ALTER TABLE `hs_sub_category`
  MODIFY `sub_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
