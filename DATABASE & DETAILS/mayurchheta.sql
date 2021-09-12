-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 06:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mayurchheta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `business_category`
--

CREATE TABLE `business_category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_category`
--

INSERT INTO `business_category` (`id`, `category_name`, `category_image`, `status`) VALUES
(1, 'demo2', 'Untitled.png', 'publish'),
(4, 'demo', 'vikram.jpg', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `business_category_images`
--

CREATE TABLE `business_category_images` (
  `id` int(100) NOT NULL,
  `category_name` text NOT NULL,
  `post_name` text NOT NULL,
  `image_thumb` varchar(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_category_images`
--

INSERT INTO `business_category_images` (`id`, `category_name`, `post_name`, `image_thumb`, `status`) VALUES
(7, 'demo', 'Koladara vijay', 'vikram.jpg', 'drafts'),
(8, 'demo', 'Vijay Koladara', 'DSC_0378.jpg', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `general_category`
--

CREATE TABLE `general_category` (
  `id` int(100) NOT NULL,
  `category_name` text NOT NULL,
  `category_image` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_category`
--

INSERT INTO `general_category` (`id`, `category_name`, `category_image`, `status`) VALUES
(1, 'demo', 'Untitled.png', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `general_category_images`
--

CREATE TABLE `general_category_images` (
  `id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `image_thumb` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_category_images`
--

INSERT INTO `general_category_images` (`id`, `category_name`, `post_name`, `image_thumb`, `status`) VALUES
(4, 'demo', 'Vijay Koladara', 'DSC_0378.jpg', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `app_version` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privacy_policy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_version`, `email`, `privacy_policy`) VALUES
(4, '1.5', 'abc.vijaykoladara212@gmail.com', 'https://getbootstrap.com/docs/5.0/components/alerts/');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(100) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `slide_image` varchar(100) NOT NULL,
  `slide_url_type` varchar(100) NOT NULL,
  `slide_url` varchar(100) NOT NULL,
  `slide_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_name`, `slide_image`, `slide_url_type`, `slide_url`, `slide_status`) VALUES
(1, 'Vijay koladara', 'vikram.jpg', 'inbound', 'http://localhost/mayurchhetatask/', 'publish'),
(4, 'Demo Slide', 'DSC_0378.jpg', 'inbound', 'http://localhost/mayurchhetatask/index.php?dashboard', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_category`
--

CREATE TABLE `upcoming_category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_category`
--

INSERT INTO `upcoming_category` (`id`, `category_name`, `category_image`, `date`, `status`) VALUES
(1, 'demo', 'vikram.jpg', '2021-09-10', 'draft'),
(4, 'vijay koladara', 'Untitled.png', '2021-09-13', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_category_images`
--

CREATE TABLE `upcoming_category_images` (
  `id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `image_thumb` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_category_images`
--

INSERT INTO `upcoming_category_images` (`id`, `category_name`, `post_name`, `image_thumb`, `status`) VALUES
(3, 'demo', 'Koladara vijay', 'IMG_7664.JPG', 'drafts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_category`
--
ALTER TABLE `business_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_category_images`
--
ALTER TABLE `business_category_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_category`
--
ALTER TABLE `general_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_category_images`
--
ALTER TABLE `general_category_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_category`
--
ALTER TABLE `upcoming_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_category_images`
--
ALTER TABLE `upcoming_category_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_category`
--
ALTER TABLE `business_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_category_images`
--
ALTER TABLE `business_category_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `general_category`
--
ALTER TABLE `general_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general_category_images`
--
ALTER TABLE `general_category_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upcoming_category`
--
ALTER TABLE `upcoming_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upcoming_category_images`
--
ALTER TABLE `upcoming_category_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
