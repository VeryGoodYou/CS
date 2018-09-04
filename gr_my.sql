-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-08 23:33:22
-- 服务器版本： 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gr_my`
--

-- --------------------------------------------------------

--
-- 表的结构 `de_test`
--

CREATE TABLE `de_test` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `de_test`
--

INSERT INTO `de_test` (`Id`, `name`, `password`, `time`) VALUES
(1, 'Admin', '123456', '2017-11-06 07:14:36');

-- --------------------------------------------------------

--
-- 表的结构 `de_zc`
--

CREATE TABLE `de_zc` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `shouji` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `de_zc`
--

INSERT INTO `de_zc` (`Id`, `name`, `password`, `email`, `shouji`, `time`) VALUES
(1, 'admin12', '123456', '1984898516@qq.com', '17839505030', '2017-11-07 10:58:18'),
(2, 'admin14', '123456', '1984898516@qq.com', '', '2017-11-07 23:53:41'),
(3, '1984898516', '123456', '1984898516@qq.com', '17839505030', '2017-11-07 23:54:00'),
(5, 'admin119', '123456', '1984898516@qq.com', '17839505030', '2017-11-07 23:57:09'),
(6, '123456789', '123456789', '1984898516@qq.com', '17839505030', '2017-11-08 00:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `de_test`
--
ALTER TABLE `de_test`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `de_zc`
--
ALTER TABLE `de_zc`
  ADD PRIMARY KEY (`Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `de_test`
--
ALTER TABLE `de_test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `de_zc`
--
ALTER TABLE `de_zc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
