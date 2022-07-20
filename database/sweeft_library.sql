-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 03:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweeft_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `relDate` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `relDate`, `status`, `author`) VALUES
(1, 'სამოსელი პირველი', 1930, 'თავისუფალი', 'გურამ დოჩანაშვილი'),
(4, 'თავისქალა არტისტული ყვავილებით', 1920, 'დაკავებული', 'გალაკტიონ ტაბიძე'),
(6, 'კაცია ადამიანი?!', 1961, 'თავისუფალი', 'ილია ჭავჭავაძე'),
(7, 'ვეფხისტყაოსანი', 1955, 'თავისუფალი', 'შოთა რუსთაველი'),
(36, 'ჯაყოს ხიზნები', 1924, 'თავისუფალი', 'მიხეილ ჯავახიშვილი'),
(41, 'ლექსები', 2000, 'თავისუფალი', 'გალაკტიონ ტაბიძე'),
(42, 'ლიტერატურა', 1999, 'თავისუფალი', 'გალაკტიონ ტაბიძე, გურამ დოჩანაშვილი'),
(44, 'წიგნები', 1999, 'დაკავებული', 'შოთა რუსთაველი, ვაჟა-ფშაველა'),
(45, 'ლექსები და პოემები', 2000, 'თავისუფალი', 'ვაჟა-ფშაველა, ილია ჭავჭავაძე, აკაკი წერეთელი, ვილიამ შექსპირი'),
(46, 'ტომ სოიერი', 1800, 'თავისუფალი', 'მარკ ტვენი'),
(47, 'კაცი რომელსაც ლიტერატურა ძლიერ უყვარდა', 1978, 'თავისუფალი', 'გურამ დოჩანაშვილი'),
(48, 'ლექსები', 2010, 'დაკავებული', 'ვაჟა-ფშაველა');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
