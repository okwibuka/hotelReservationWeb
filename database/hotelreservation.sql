-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 09:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `category` varchar(181) NOT NULL,
  `image` varchar(181) NOT NULL,
  `description` varchar(181) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`, `description`, `created_at`) VALUES
(2, 'fruit', '63c71b1345c654.25936798.jpg', 'this is our first category of our special and delicious food!!', '2023-01-18 11:20:59'),
(5, 'food', '63c8149d582ec8.15311916.jpg', 'this is where you can find many kind of food you needs            ', '2023-01-18 15:47:41'),
(8, 'beer', '63caeefc6ec542.86221487.jpg', '    this is where you can demand the beer you neeed to drink', '2023-01-20 19:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` varchar(191) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `image`, `price`, `description`, `category`, `created_at`) VALUES
(10, 'rice', '63c818deee5828.66890870.jpg', '$110.00', '                                                                        this is delicious rice which is so delicious for you                                                                   ', 'food', '2023-01-18 16:05:50'),
(11, 'mitzig', '63c7d9756c8c74.00986467.jpg', '$ 1.500', 'here you can find beer at a low price.. we also offers you better services', 'beer', '2023-01-18 11:35:17'),
(13, 'banana', '63caef82b064d7.35733430.jpg', '$10.00', ' this is banana fruit that is so delicious for eating with more vitamins             ', 'fruit', '2023-01-20 19:46:10'),
(14, 'chicken', '63cb82002994e1.61815323.jpg', '$140.00', 'this is the meat of chicken that is available at a low price', 'meat', '2023-01-21 06:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `description`, `phone`, `image`) VALUES
(4, 'tresor', '    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptate, quisquam modi nesciunt totam sint laudantium, at porro quam, quas consector', 780186477, '63caac3a95fa04.02830952.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
