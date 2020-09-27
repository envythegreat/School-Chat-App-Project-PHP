-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 10:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `boxchat`
--

CREATE TABLE `boxchat` (
  `id` int(11) NOT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `sender` varchar(16) DEFAULT NULL,
  `receiver` varchar(16) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxchat`
--

INSERT INTO `boxchat` (`id`, `message`, `sender`, `receiver`, `date`) VALUES
(1412, 'sssss', 'envy19', 'greed19', '2019-06-15 06:19:18'),
(1413, '', 'envy19', 'greed19', '2019-06-15 06:19:18'),
(1414, '', 'envy19', 'greed19', '2019-06-15 06:19:19'),
(1415, '', 'envy19', 'greed19', '2019-06-15 06:19:19'),
(1416, '', 'envy19', 'greed19', '2019-06-15 06:19:20'),
(1417, '', 'envy19', 'greed19', '2019-06-15 06:19:20'),
(1418, 's', 'envy19', 'greed19', '2019-06-15 06:19:21'),
(1419, 'ssssssssssssssssssssssssssssssss', 'envy19', 'greed19', '2019-06-15 06:19:23'),
(1420, '', 'envy19', 'greed19', '2019-06-15 06:19:23'),
(1421, '', 'envy19', 'greed19', '2019-06-15 06:19:23'),
(1422, '', 'envy19', 'greed19', '2019-06-15 06:19:24'),
(1423, '', 'envy19', 'greed19', '2019-06-15 06:19:24'),
(1424, '', 'envy19', 'greed19', '2019-06-15 06:19:24'),
(1425, '', 'envy19', 'greed19', '2019-06-15 06:19:24'),
(1426, 'ddddddddddddddddd', 'envy19', 'envy19', '2019-06-15 06:24:43'),
(1427, 'dddddddddddddddddd', 'envy19', 'envy19', '2019-06-15 06:24:46'),
(1428, 'hello Pride', 'envy19', 'greed19', '2019-06-15 06:25:09'),
(1429, 'ddddddddddddddd', 'envy19', 'greed19', '2019-06-15 06:25:47'),
(1430, '', 'envy19', 'greed19', '2019-06-15 06:25:48'),
(1431, '', 'envy19', 'greed19', '2019-06-15 06:25:48'),
(1432, '', 'envy19', 'greed19', '2019-06-15 06:25:49'),
(1433, '', 'envy19', 'greed19', '2019-06-15 06:25:49'),
(1434, '', 'envy19', 'greed19', '2019-06-15 06:25:50'),
(1435, '', 'envy19', 'greed19', '2019-06-15 06:25:50'),
(1436, '', 'envy19', 'greed19', '2019-06-15 06:25:51'),
(1437, '', 'envy19', 'greed19', '2019-06-15 06:25:51'),
(1438, 'ddddddddd', 'envy19', 'pride19', '2019-06-15 06:27:51'),
(1439, 'ddddddddddddddddddddddddddddddddd', 'envy19', 'pride19', '2019-06-15 06:27:55'),
(1440, '', 'envy19', 'pride19', '2019-06-15 06:27:56'),
(1441, '', 'envy19', 'pride19', '2019-06-15 06:27:56'),
(1442, '', 'envy19', 'pride19', '2019-06-15 06:27:57'),
(1443, '', 'envy19', 'pride19', '2019-06-15 06:27:57'),
(1444, '', 'envy19', 'pride19', '2019-06-15 06:27:58'),
(1445, 'king', 'envy19', 'pride19', '2019-06-15 06:28:02'),
(1446, 'love', 'envy19', 'greed19', '2019-06-15 06:28:19'),
(1447, 'hate', 'envy19', 'envy19', '2019-06-15 06:30:47'),
(1448, 'dada', 'envy19', 'envy19', '2019-06-15 06:31:07'),
(1449, 'd', 'pride19', 'Envy19', '2019-06-16 03:49:33'),
(1450, 'kinf', 'pride19', 'Envy19', '2019-06-16 03:49:36'),
(1451, 'asd', 'pride19', 'Envy19', '2019-06-16 03:49:37'),
(1452, 'king envy', 'pride19', 'Envy19', '2019-06-16 03:50:55'),
(1453, 'ddddd', 'envy19', 'pride19', '2019-06-16 03:52:18'),
(1454, 'ddddd', 'envy19', 'pride19', '2019-06-16 03:52:27'),
(1455, 'dddddddddddddddddddddd', 'pride19', 'Envy19', '2019-06-16 03:52:35'),
(1456, 'sssssss', 'pride19', 'Envy19', '2019-06-16 03:54:51'),
(1457, 'sssssssss', 'pride19', 'Envy19', '2019-06-16 03:59:59'),
(1458, 'ana mohamed', 'envy19', 'pride19', '2019-06-16 04:01:34'),
(1459, 'ana king', 'pride19', 'Envy19', '2019-06-16 04:01:44'),
(1460, 'ddddd', 'pride19', 'Envy19', '2019-06-16 04:15:31'),
(1461, 'hi', 'pride19', 'Envy19', '2019-06-16 04:15:39'),
(1462, 'kinfg', 'envy19', 'pride19', '2019-06-16 04:16:09'),
(1463, 'c', 'pride19', 'Envy19', '2019-06-16 04:16:18'),
(1464, 'sssssssssssssssssssssssssP', 'pride19', 'Envy19', '2019-06-16 04:18:03'),
(1465, 'gmd', 'pride19', 'Envy19', '2019-06-16 04:19:30'),
(1466, 'd', 'pride19', 'Envy19', '2019-06-16 04:19:33'),
(1467, 'sda', 'pride19', 'Envy19', '2019-06-16 04:19:36'),
(1468, 'ddddd', 'envy19', 'pride19', '2019-06-16 04:19:44'),
(1469, 'asd', 'envy19', 'pride19', '2019-06-16 04:19:46'),
(1470, 'ko', 'envy19', 'pride19', '2019-06-16 04:20:20'),
(1471, 's', 'envy19', 'pride19', '2019-06-16 04:20:21'),
(1472, 'ssssss', 'envy19', 'pride19', '2019-06-16 04:20:23'),
(1473, 's', 'envy19', 'pride19', '2019-06-16 04:21:04'),
(1474, 's', 'envy19', 'pride19', '2019-06-16 04:21:05'),
(1475, 's', 'envy19', 'pride19', '2019-06-16 04:21:05'),
(1476, 's', 'envy19', 'pride19', '2019-06-16 04:21:06'),
(1477, 's', 'envy19', 'pride19', '2019-06-16 04:21:06'),
(1478, 's', 'envy19', 'pride19', '2019-06-16 04:21:06'),
(1479, 's', 'envy19', 'pride19', '2019-06-16 04:21:06'),
(1480, 's', 'envy19', 'pride19', '2019-06-16 04:21:06'),
(1481, 's', 'envy19', 'pride19', '2019-06-16 04:21:07'),
(1482, 's', 'envy19', 'pride19', '2019-06-16 04:22:11'),
(1483, 'hhhhh', 'envy19', 'pride19', '2019-06-16 04:22:16'),
(1484, 'kng', 'envy19', 'pride19', '2019-06-16 04:23:23'),
(1485, 'dasdasd', 'pride19', 'Envy19', '2019-06-16 11:09:41'),
(1486, 'hasdii', 'pride19', 'Envy19', '2019-06-16 11:09:44'),
(1487, 's', 'pride19', 'Envy19', '2019-06-16 12:23:01'),
(1488, 's', 'pride19', 'Envy19', '2019-06-16 12:23:03'),
(1489, 's', 'pride19', 'Envy19', '2019-06-16 12:23:04'),
(1490, 'gggg', 'pride19', 'Envy19', '2019-06-16 14:20:34'),
(1491, 'kkkkkkkk', 'pride19', 'Envy19', '2019-06-16 14:20:56'),
(1492, 'lllllll', 'pride19', 'Envy19', '2019-06-16 14:21:02'),
(1493, 'gggggggggggg', 'pride19', 'Envy19', '2019-06-16 14:34:52'),
(1494, 'king pride', 'pride19', 'Envy19', '2019-06-17 08:39:49'),
(1495, 'ho', 'envy19', 'pride19', '2019-06-17 09:11:28'),
(1496, 's', 'envy19', 'pride19', '2019-06-17 09:13:12'),
(1497, 'ssssssssssssssss', 'envy19', 'greed19', '2019-06-17 09:13:51'),
(1498, 's', 'envy19', 'greed19', '2019-06-17 09:14:31'),
(1499, 's', 'envy19', 'greed19', '2019-06-17 09:14:31'),
(1500, 's', 'envy19', 'greed19', '2019-06-17 09:14:32'),
(1501, 's', 'envy19', 'greed19', '2019-06-17 09:14:32'),
(1502, 's', 'envy19', 'greed19', '2019-06-17 09:14:32'),
(1503, 's', 'envy19', 'greed19', '2019-06-17 09:14:32'),
(1504, 's', 'envy19', 'greed19', '2019-06-17 09:14:33'),
(1505, 's', 'envy19', 'greed19', '2019-06-17 09:14:33'),
(1506, 's', 'envy19', 'greed19', '2019-06-17 09:14:33'),
(1507, 's', 'envy19', 'greed19', '2019-06-17 09:14:33'),
(1508, 's', 'envy19', 'greed19', '2019-06-17 09:14:33'),
(1509, 's', 'envy19', 'greed19', '2019-06-17 09:14:33'),
(1510, 's', 'envy19', 'greed19', '2019-06-17 09:14:34'),
(1511, 's', 'envy19', 'greed19', '2019-06-17 09:14:34'),
(1512, 's', 'envy19', 'greed19', '2019-06-17 09:14:34'),
(1513, 's', 'envy19', 'greed19', '2019-06-17 09:14:34'),
(1514, 's', 'envy19', 'greed19', '2019-06-17 09:14:34'),
(1515, 's', 'envy19', 'greed19', '2019-06-17 09:14:35'),
(1516, 'light100', 'envy19', 'greed19', '2019-06-18 07:37:24'),
(1517, 'e', 'envy19', 'greed19', '2019-06-18 09:59:00'),
(1518, 'sss', 'envy19', 'greed19', '2019-06-18 15:20:25'),
(1519, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur hic quis, nam dolor, voluptates ea, doloribus voluptatibus neque adipisci sequi sint vero repudiandae voluptatem quaerat? Natus rem quia dolor quos.', 'pride19', 'envy19', '2019-06-20 07:01:52'),
(1520, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur hic quis, nam dolor, voluptates ea, doloribus voluptatibus neque adipisci sequi sint vero repudiandae voluptatem quaerat? Natus rem quia dolor quos.', 'envy19', 'pride19', '2019-06-20 07:50:19'),
(1521, 'm', 'envy19', 'pride19', '2019-06-21 14:08:21'),
(1522, 'hello', 'pride19', 'envy19', '2019-06-27 09:39:31'),
(1523, 'hello', 'envy19', 'greed19', '2019-06-27 16:01:39'),
(1524, 'hi', 'greed19', 'envy19', '2019-06-27 16:01:46'),
(1525, 'jihan', 'envy19', 'greed19', '2019-06-27 16:01:55'),
(1526, 'hhhhhhhhhhh', 'greed19', 'envy19', '2019-06-27 16:02:01'),
(1527, 'ffff', 'envy19', 'greed19', '2019-06-27 16:04:12'),
(1528, 'jdjdjdjdjdjdjd', 'greed19', 'envy19', '2019-06-27 16:04:27'),
(1529, 'hello', 'envy19', 'envy19', '2019-06-27 21:53:07'),
(1530, 'hi', 'pride19', 'envy19', '2019-07-01 04:47:43'),
(1531, 'hi how are you', 'envy19', 'pride19', '2019-07-01 04:48:00'),
(1532, 'fine', 'pride19', 'envy19', '2019-07-01 04:48:09'),
(1533, 'ok hhhh', 'envy19', 'pride19', '2019-07-01 04:48:16'),
(1534, 'hello', 'pride19', 'envy19', '2019-07-01 07:54:09'),
(1535, 'hhhhh', 'envy19', 'pride19', '2019-07-01 07:54:20'),
(1536, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh jjj', 'envy19', 'pride19', '2019-07-01 08:23:57'),
(1537, 'fadwa', 'pride19', 'envy19', '2019-07-01 08:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `username` varchar(20) NOT NULL,
  `bgColor` varchar(200) DEFAULT NULL,
  `msgColor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`username`, `bgColor`, `msgColor`) VALUES
('envy19', 'linear-gradient(to right, #ffffff, #f1e1f9, #f3bfe6, #fa9ac2, #fb7590, #e25f72, #c84a56, #ad363b, #812a34, #561f29, #2d141a, #000000)', '#FF033E'),
('pride19', '', '#8a2be2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` varchar(10) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `class` varchar(6) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `profileImg` varchar(150) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `name`, `class`, `status`, `profileImg`, `password`, `date`) VALUES
('ECO-1', 'envy19', 'Envy Sin', 'TSDI', 'On', 'https://images.alphacoders.com/976/thumb-1920-976502.png', 'Nuraenvy99@3', '2019-07-01 08:22:54'),
('ECO-10', 'light100a', 'Mohamed Habib Alouani', 'TSDI2', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Nuraenvy99@3', '2019-06-30 10:33:24'),
('ECO-11', 'Yamimaho99', 'Hanan Molat Banan', 'TSDI2', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Yamimaho99@3', '2019-06-30 10:37:54'),
('ECO-12', 'Yamiss', 'David gosling', 'TSDI2', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Yamimaho99@3', '2019-06-30 10:40:40'),
('ECO-13', 'king12', 'Alouani Mohamed', 'TSDI', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Yamimaho99@3', '2019-06-30 10:41:31'),
('ECO-14', 'love12', 'ysf abd', 'TSDI', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Yamimaho99@3', '2019-06-30 10:41:55'),
('ECO-15', 'Envy88', 'lavida loca', 'TSGI', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Yami-maho9919', '2019-06-30 10:53:10'),
('ECO-16', 'Yami19', 'King Pride II', 'TSDI', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Yami-maho9919', '2019-06-30 10:53:58'),
('ECO-3', 'pride19', 'King Pride', 'TSDI', 'On', 'https://avatarfiles.alphacoders.com/822/82242.png', 'Lighte100', '2019-07-01 07:53:43'),
('ECO-4', 'adminOne1', 'myAdmin One', 'Admin', 'none', 'none', 'Lighte100', '2019-06-29 11:42:08'),
('ECO-6', 'envy191', 'Hanan Molat Banan', 'Admin', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'kingofarme99', '2019-06-30 07:55:31'),
('ECO-7', 'envy19a', 'David gosling', 'TSGI', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Nuraenvy99@3', '2019-06-30 10:31:58'),
('ECO-9', 'envy19c', 'Alouani Mohamed', 'TSGI2', NULL, 'https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png', 'Nuraenvy99@3', '2019-06-30 10:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `Date_Visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Ip_Visit` varchar(20) NOT NULL,
  `Browser_Visit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `Date_Visit`, `Ip_Visit`, `Browser_Visit`) VALUES
(1, '2019-06-28 20:55:24', '::1', 'Chrome'),
(2, '2019-06-29 08:25:14', '::1', 'Chrome'),
(3, '2019-06-29 12:22:50', '::1', 'Chrome'),
(4, '2019-06-29 12:23:01', '::1', 'Chrome'),
(5, '2019-06-30 17:27:13', '::1', 'Chrome'),
(6, '2019-06-30 17:27:32', '::1', 'Chrome'),
(7, '2019-07-01 04:46:06', '::1', 'Chrome'),
(8, '2019-07-01 04:46:19', '::1', 'Chrome'),
(9, '2019-07-01 04:46:25', '::1', 'Chrome'),
(10, '2019-07-01 04:46:32', '::1', 'Chrome'),
(11, '2019-07-01 04:46:41', '::1', 'Chrome'),
(12, '2019-07-01 04:46:51', '::1', 'Chrome'),
(13, '2019-07-01 04:47:03', '::1', 'Chrome'),
(14, '2019-07-01 04:47:23', '::1', 'Chrome'),
(15, '2019-07-01 05:36:34', '::1', 'Chrome'),
(16, '2019-07-01 06:29:46', '::1', 'Chrome'),
(17, '2019-07-01 07:53:31', '::1', 'Chrome'),
(18, '2019-07-01 07:53:43', '::1', 'Chrome'),
(19, '2019-07-01 08:15:34', '::1', 'Chrome'),
(20, '2019-07-01 08:15:44', '::1', 'Chrome'),
(21, '2019-07-01 08:15:47', '::1', 'Chrome'),
(22, '2019-07-01 08:22:35', '::1', 'Chrome'),
(23, '2019-07-01 08:22:54', '::1', 'Chrome'),
(24, '2019-07-01 08:23:06', '::1', 'Chrome'),
(25, '2019-07-01 08:23:26', '::1', 'Chrome'),
(26, '2019-07-01 08:30:28', '::1', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxchat`
--
ALTER TABLE `boxchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boxchat`
--
ALTER TABLE `boxchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1538;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
