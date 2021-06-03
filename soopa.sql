-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: db5000602921.hosting-data.io
-- Generation Time: Jul 07, 2020 at 10:49 AM
-- Server version: 5.7.30-log
-- PHP Version: 7.0.33-0+deb9u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs581732`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(5) NOT NULL,
  `firstN` varchar(60) NOT NULL,
  `lastN` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL,
  `PassWord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `firstN`, `lastN`, `email`, `image`, `PassWord`) VALUES
(1, 'Pritti', 'Patel', 'pritti@patel.com', 'pritti.jpg', 'bafec3fb278d6bbdf0dc859d619c3c725a29e0c4a53a287fc72e709903cb55f6e76cb5d91a725e4891c70f2f3ae9fa3ae7b61e8c49587c47569d4f051b01c911'),
(2, 'Donald', 'Trumpet', 'donald@trumpet.com', 'donald.jpg', 'f1e4533e382740b241ce331c7c08960d3fde460e49d5e998e4712e8e5caa65491acb0f94165dc9239a922053d9f64e7555f9a273c23a74b8ed246ad1cba0a723'),
(3, 'Tim', 'Walker', 'tim@walker.com', 'find_user.png', '4f68698f985823bd17261445e07d6e37583cfb580c4fa92ba1e5202c8dc32fa1972ca9f9446c0f29b3ff5a6e35bb54fd5642c25d8e07801bf9befef71f01f527');

-- --------------------------------------------------------

--
-- Table structure for table `feelwell`
--

CREATE TABLE `soopa` (
  `id` int(4) NOT NULL,
  `track_date` date NOT NULL,
  `order_no` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `service` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `billing_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `zip` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `shipping_country` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `tracking_no` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `carton_quantity` int(10) DEFAULT NULL,
  `pick_no` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `feelwell`
--

INSERT INTO `soopa` (`id`, `track_date`, `order_no`, `service`, `billing_name`, `zip`, `shipping_country`, `weight`, `tracking_no`, `carton_quantity`, `pick_no`) VALUES
(1, '2020-07-06', 'SP0002669', 'FEDEX2', 'The Orvis Company', 'SP10 5RW', '0', 500, '105946660080', 6, 2),
(2, '2019-11-07', 'SP0002666', 'PALLET', 'The Orvis Company', 'SP10 5RW', '0', 0, '30345705068 Pallet', 0, 20),
(3, '2019-11-08', 'SP0002670', 'FEDEX', 'Muckys Munchies', 'KA10 6PW ', '0', 0, '105946658996', 1, 14),
(4, '2020-05-26', 'SP0003037', 'FEDEX', 'Stephen Walker', 'TS12 2YD', 'England', 4, '10987465423', 3, 5),
(5, '2020-07-05', 'SP0003035', 'FEDEX2', 'Decidedly Dogs', 'AB10 6BP', 'Spain', 250, '5456789', 3, 13),
(6, '2020-04-10', 'SP0003009', 'DPD', 'Pedigree House', 'NG2 6NQ', 'Canada', 70, '9672345768', 10, 8),
(7, '2020-03-29', 'SP0002903', 'FEDEX', 'Pedigree House', 'NG2 6NQ', 'China', 500, '3212345768', 18, 8),
(8, '2020-03-26', 'SP0002910', 'FEDEX', 'Bassett Pets LTD', 'CM16 6BU ', '0', 4, '12345678', 1, 5),
(9, '2020-02-19', 'SP0002908', 'FEDEX', 'Dogtor.vet', 'RG7 4PN', 'Belgium', 3, '284765733', 12, 8),
(10, '2020-02-07', 'SP0003034', 'DPD', 'Pedigree House', 'NG2 6NQ', 'France', 500, '9876542', 2, 8),
(11, '2020-02-06', 'SP0002904', 'FEDEX', 'Decidedly Dogs', 'AB10 6BP', 'Austria', 45, '21234567', 7, 13);

-- --------------------------------------------------------

--
-- Table structure for table `temp_carton_quantity`
--

CREATE TABLE `temp_carton_quantity` (
  `id` int(3) NOT NULL,
  `order_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `carton_quantity` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `temp_carton_quantity`
--

INSERT INTO `temp_carton_quantity` (`id`, `order_no`, `carton_quantity`) VALUES
(7, 'SP0003035', '3');

-- --------------------------------------------------------

--
-- Table structure for table `temp_service`
--

CREATE TABLE `temp_service` (
  `id` int(3) NOT NULL,
  `order_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `service` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `temp_service`
--

INSERT INTO `temp_service` (`id`, `order_no`, `service`) VALUES
(3, 'SP0002669', 'FEDEX2'),
(4, 'SP0003035', 'FEDEX2');

-- --------------------------------------------------------

--
-- Table structure for table `temp_track_date`
--

CREATE TABLE `temp_track_date` (
  `id` int(3) NOT NULL,
  `order_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `track_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `temp_track_date`
--

INSERT INTO `temp_track_date` (`id`, `order_no`, `track_date`) VALUES
(1, 'SP0002669', '2020-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `temp_weight`
--

CREATE TABLE `temp_weight` (
  `id` int(3) NOT NULL,
  `order_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `weight` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `temp_weight`
--

INSERT INTO `temp_weight` (`id`, `order_no`, `weight`) VALUES
(3, 'SP0002669', '500'),
(4, 'SP0003035', '250');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `firstN` varchar(60) NOT NULL,
  `lastN` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL,
  `PassWord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstN`, `lastN`, `email`, `image`, `PassWord`) VALUES
(1, 'Martin', 'Kleis', 'martin@kleis.com', 'admin_profile.png', '266e495792a4a9314e621d3b69a27c4af2cb80a274f5e849203253f0b894d6a68cdaee94d938df95d00e9b87b28f1c9912af45aef0cd8d4082ed5c707a72368b'),
(2, 'Susan', 'Smith', 'susan@smith.com', 'susan.jpg', '15f3b6e1903b827e510f5683b670253c189299b25af71bfd4fce9754b5be35e67b8d753bf88d2db1a75f080b0ab651d0754412a4b57be4c363293f33ed7807a9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feelwell`
--
ALTER TABLE `soopa`
  ADD PRIMARY KEY (`id`,`order_no`),
  ADD UNIQUE KEY `order_no` (`order_no`);

--
-- Indexes for table `temp_carton_quantity`
--
ALTER TABLE `temp_carton_quantity`
  ADD PRIMARY KEY (`id`,`order_no`),
  ADD UNIQUE KEY `order_no` (`order_no`);

--
-- Indexes for table `temp_service`
--
ALTER TABLE `temp_service`
  ADD PRIMARY KEY (`id`,`order_no`),
  ADD UNIQUE KEY `order_no` (`order_no`);

--
-- Indexes for table `temp_track_date`
--
ALTER TABLE `temp_track_date`
  ADD PRIMARY KEY (`id`,`order_no`),
  ADD UNIQUE KEY `order_no` (`order_no`);

--
-- Indexes for table `temp_weight`
--
ALTER TABLE `temp_weight`
  ADD PRIMARY KEY (`id`,`order_no`),
  ADD UNIQUE KEY `order_no` (`order_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `feelwell`
--
ALTER TABLE `soopa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `temp_carton_quantity`
--
ALTER TABLE `temp_carton_quantity`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `temp_service`
--
ALTER TABLE `temp_service`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `temp_track_date`
--
ALTER TABLE `temp_track_date`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `temp_weight`
--
ALTER TABLE `temp_weight`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
