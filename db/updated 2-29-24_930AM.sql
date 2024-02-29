-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 02:40 AM
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
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `subject` varchar(30) NOT NULL,
  `company` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `requestor` varchar(50) NOT NULL,
  `concern` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `comment` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `to_dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `user_id`, `date`, `subject`, `company`, `branch`, `department`, `requestor`, `concern`, `status`, `comment`, `date_created`, `to_dept`) VALUES
(7, 0, '2024-02-20 06:47:29.737215', 'change subject', 'Cornersteel Systems Corporation', '', 'Management Info', 'aaa', 'Hello', 'Resolved', 'oks naa', '2024-02-22 07:10:06', ''),
(8, 0, '2024-02-21 02:56:51.396396', 'change document', 'Comfac Global Group', 'Makati daw nye', 'MIS-Department', 'Kyang', 'Hi please comply', 'Pending', 'I get to you', '2024-02-22 06:30:05', ''),
(9, 0, '2024-02-21 03:05:13.355363', 'Acceptance Letter', 'Comfac Global Group', 'Makati daw nye', 'Management Info', 'Mharg', 'Please edit the document ', 'Resolved', 'I already fill it', '2024-02-23 00:58:21', ''),
(10, 0, '2024-02-21 03:07:36.182944', 'fix bugs', 'Cornersteel Systems Corporation', '', 'System Installation', 'Kyandra', 'Do the document', 'Cancelled', 'aaa', '2024-02-22 07:10:42', ''),
(11, 0, '2024-02-21 03:28:45.730754', 'concernnnn', 'Comfac Technology Options (CTO)', 'Makati', 'Accounting', 'Carlo', 'need updated', 'Unresolved', 'aaa', '2024-02-22 06:06:57', ''),
(12, 0, '2024-02-21 03:30:59.497076', 'ello', 'Cornersteel Systems Corporation', '', 'Accounting', 'Darwin', 'aaaa', 'Unresolved', '', '2024-02-22 06:04:02', ''),
(13, 0, '2024-02-22 01:37:08.971713', 'Kikyang', 'Comfac Global Group', 'Makati daw nye', 'MIS-Department', 'Kim', 'Happy Birthday Kyang!!!!!!!!!!!!!!!!!', 'Pending', '', '2024-02-22 01:37:08', ''),
(14, 0, '2024-02-22 01:38:07.218465', 'Kikyang', 'Comfac Global Group', 'sadsadsadsad', 'MIS-Department', 'Ngarag Fam', 'Happy Birthday Kikyang!!!!!!!!!', 'Resolved', 'sardsfdf', '2024-02-22 06:37:14', ''),
(15, 0, '2024-02-22 02:38:49.282823', 'Hiiii', 'Comfac Global Group', 'Makati daw nye', 'MIS-Department', 'Kim', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Unresolved', '', '2024-02-23 05:22:07', ''),
(16, 0, '2024-02-22 02:40:13.379268', 'Hiiii', 'Comfac Global Group', 'sadsadsadsad', 'MIS-Department', 'Kim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin accumsan velit, et aliquam mi mollis vitae. Vivamus pellentesque placerat vehicula. Pellentesque vulputate diam nisi, bibendum pharetra lectus ultrices vel. Ut in ipsum tristique, iaculis velit id, convallis justo. Donec aliquam justo quis purus consequat rutrum. Sed sed velit at ante tincidunt dictum id eget ipsum. Proin a tellus felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis sagittis urna nec lorem pharetra, quis commodo libero efficitur. Ut odio lectus, blandit nec dapibus nec, scelerisque a lectus. In hac habitasse platea dictumst.', 'Pending', '', '2024-02-22 08:44:01', ''),
(17, 0, '2024-02-22 06:46:28.161534', 'Kikyang', 'Comfac Global Group', 'Makati daw nye', 'HR', 'Kyang', 'adsads', 'Cancelled', '', '2024-02-23 05:21:15', ''),
(18, 0, '2024-02-22 06:47:36.916145', 'Follow up MOA', 'Comfac Global Group', 'Makati daw nye', 'MIS-Department', 'Kyang', 'please make it fasterrr!!!!', 'Pending', '', '2024-02-22 06:47:36', ''),
(19, 0, '2024-02-27 02:04:08.551969', 'change subject', 'Comfac Technology Options (CTO)', 'Libertad Branch', 'MIS-Department', 'kim', 'abc', 'Pending', '', '2024-02-27 02:04:08', ''),
(20, 0, '2024-02-28 00:44:18.238676', 'change subject', 'Comfac Global Group', 'Makati', 'MIS-Department', 'Kim', 'aaa', 'Pending', '', '2024-02-28 00:44:18', ''),
(31, 0, '2024-02-28 01:29:58.498678', 'sdfsdfs', 'Comfac Global Group', 'Makati', 'Accounting', 's', 'ss', 'Pending', '', '2024-02-28 01:29:58', ''),
(32, 0, '2024-02-28 02:49:46.278083', 'OO nga no', 'Comfac Global Group', 'Makati', 'MIS-Department', 'Try Natin rito', 'Reply Concerns', 'Pending', '', '2024-02-28 02:49:46', ''),
(33, 0, '2024-02-28 03:51:15.894244', '1423564', 'Comfac Global Group', 'Makati', 'MIS-Department', 'Try Natin rito', '64586', 'Pending', '', '2024-02-28 03:51:15', ''),
(34, 0, '2024-02-28 04:01:40.983215', 'change subject', 'Comfac Technology Options (CTO)', 'Makati', 'HR', 'Carlokaloykoy', 'Hello World', 'Pending', '', '2024-02-28 04:01:40', ''),
(35, 0, '2024-02-28 04:23:03.887279', 'change subject', 'Comfac Global Group', 'Makati', 'MIS-Department', 'kim', 'aaaa', 'Pending', '', '2024-02-28 04:23:03', ''),
(36, 0, '2024-02-28 04:24:48.220386', 'eyyy', 'Comfac Global Group', 'Makati', 'HR', 'kim', 'aaa', 'Pending', '', '2024-02-28 04:24:48', ''),
(37, 0, '2024-02-28 05:39:49.048609', 'change subject', 'Comfac Global Group', 'Makati', 'HR', 'kim', 'Check DB', 'Pending', '', '2024-02-28 05:39:49', ''),
(38, 2, '2024-02-28 05:43:31.175916', 'change subject', 'Comfac Technology Options (CTO)', 'Libertad Branch', 'Accounting', 'Try', 'Try DB3', 'Pending', '', '2024-02-28 05:43:31', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
