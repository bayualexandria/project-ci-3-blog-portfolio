-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2021 at 09:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `judul`, `slug`, `isi`, `image`, `id_kategori`, `is_active`, `created_at`) VALUES
(3, 'Code Igniter', 'Instalasi CodeIgniter 3 pada PC', 'instalasi-codeigniter-3-pada-pc', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ipsa veniam fuga reiciendis, consequuntur commodi quasi amet alias et vel earum? Aut veniam quidem explicabo adipisci labore ipsam, eos libero, similique temporibus nihil quos quisquam fuga perferendis voluptate cumque, saepe ratione! Ullam fuga dolores quis ipsam a impedit sapiente optio totam iusto obcaecati, debitis ex beatae dolorum, repudiandae earum corporis consectetur, sed nihil quam repellendus quos quasi doloremque! Magnam quas architecto, omnis iure neque quis itaque. Provident sequi possimus quis accusantium reprehenderit consequuntur tempore temporibus! Recusandae alias architecto incidunt molestiae tempore dolore<img alt=\"\" src=\"/ckfinder/userfiles/images/IMG_20190206_153826.jpg\" xss=removed>m, et quibusdam laudantium, provident vero laborum nobis temporibus!</p>\r\n', 'WELxuLdUVuK58b1sn8FgvRBRBZfziu8T4dvzzTnACI.jpg', 2, 1, 1609641081),
(4, 'Laravel', 'Instalasi Laravel 8', 'instalasi-laravel-8', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ipsa veniam fuga reiciendis, consequuntur commodi quasi amet alias et vel earum? Aut veniam quidem explicabo adipisci labore ipsam, eos libero, similique temporibus nihil quos quisquam fuga perferendis voluptate cumque, saepe ratione! Ullam fuga dolores quis ipsam a impedit sapiente optio totam iusto obcaecati, debitis ex beatae dolorum, repudiandae earum corporis consectetur, sed nihil quam repellendus quos quasi doloremque! Magnam quas architecto, omnis iure neque quis itaque. Provident sequi possimus quis accusantium reprehenderit consequuntur tempore temporibus! Recusandae alias architecto incidunt molestiae tempore dolorem, et quibusdam laudantium, provident vero laborum nobis temporibus!</p>\r\n\r\n<pre>\r\n<code class=\"language-sql\">SELECT * FROM `kategori`;</code></pre>\r\n\r\n<pre>\r\n<code class=\"language-php\">$nama=\"Bayu Wardana\";</code></pre>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n', 'RW8EZf7iIP59hZKpnwEgXBLZ26xd1IjqO83y85skTwc.jpg', 1, 1, 1609641738),
(5, 'Puisi', 'Kesendirian', 'kesendirian', '<p>hskhadjsdhaksdhkasd</p>\r\n\r\n<p>adkjashdkjashdk</p>\r\n\r\n<p>dadkasjd</p>\r\n\r\n<p>sdaakdjs</p>\r\n\r\n<p>asdhoiasdh</p>\r\n\r\n<p>odasoidh</p>\r\n', NULL, 0, 1, 1609635166),
(6, 'Code Igniter', 'Insert Data Mahasiswa Pada CodeIgniter 3', 'insert-data-mahasiswa-pada-codeigniter-3', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ipsa veniam fuga reiciendis, consequuntur commodi quasi amet alias et vel earum? Aut veniam quidem explicabo adipisci labore ipsam, eos libero, similique temporibus nihil quos quisquam fuga perferendis voluptate cumque, saepe ratione! Ullam fuga dolores quis ipsam a impedit sapiente optio totam iusto obcaecati, debitis ex beatae dolorum, repudiandae earum corporis consectetur, sed nihil quam repellendus quos quasi doloremque! Magnam quas architecto, omnis iure neque quis itaque. Provident sequi possimus quis accusantium reprehenderit consequuntur tempore temporibus! Recusandae alias architecto incidunt molestiae tempore dolorem, et quibusdam laudantium, provident vero laborum nobis temporibus!</p>\r\n', 'tT5eSldqODGaA6JBrVbMw1zTOAGwhI9Pl9dcDZUEUQQ.jpg', 2, 1, 1609636127);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9775940d671a0b32c9c0e1a953b58b921d26f30b', '::1', 1609598997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630393539383736303b636172697c733a343a22636f6465223b656d61696c7c733a32343a2277617264616e616261797534353540676d61696c2e636f6d223b69735f6163746976657c733a313a2231223b),
('06e5ab7a087d3603f89f1abec0538ca45aaf28e8', '::1', 1609599899, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630393539393837373b636172697c4e3b),
('52caaec1b7aa66087b6e142b9a89795ad735df86', '::1', 1609651540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630393635313532343b636172697c4e3b656d61696c7c733a32343a2277617264616e616261797534353540676d61696c2e636f6d223b69735f6163746976657c733a313a2231223b);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `icon`, `is_active`, `created_at`) VALUES
(1, 'Laravel', 'fab fa-laravel text-danger', 1, 1609509159),
(2, 'CodeIgniter', 'fa fa-fire text-warning', 1, 1609509166);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `is_active`, `created_at`) VALUES
(1, 'Bayu Wardana', 'wardanabayu455@gmail.com', '$2y$10$T6nbgeQ6Z15RgXBEHKSzd.GGFrggDYJ5ATL4cTZRH26ho8vzxJw7G', 'coding.png', 1, 1609633824);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
