-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2015 at 06:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `next-k`
--

-- --------------------------------------------------------

--
-- Table structure for table `likepost`
--

CREATE TABLE IF NOT EXISTS `likepost` (
  `likeId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  PRIMARY KEY (`likeId`),
  KEY `userId` (`userId`),
  KEY `postId` (`postId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `likepost`
--

INSERT INTO `likepost` (`likeId`, `userId`, `postId`) VALUES
(1, 1, 22),
(4, 1, 22),
(5, 1, 22),
(6, 1, 17),
(7, 1, 22),
(8, 1, 23),
(9, 1, 17),
(10, 1, 23),
(11, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `postTitle` varchar(40) NOT NULL,
  `postContent` text NOT NULL,
  `postDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`postId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `userId`, `postTitle`, `postContent`, `postDate`) VALUES
(1, 1, 'test', 'etest', '2015-05-04 17:33:08'),
(4, 1, 'res', 'test', '2015-05-04 17:35:39'),
(5, 1, 'test', 'test', '2015-05-04 17:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `name`, `email`, `photo`, `date joined`) VALUES
(1, 'janka', '204ba15c73c616a3a26ab1e367acfeb70540ccb8', 'tim', '', '2.jpg', '2015-04-28 16:56:53'),
(4, 'finga', '204ba15c73c616a3a26ab1e367acfeb70540ccb8', 'dina', 'dina.finga@gmail.ca', 'photo.png', '2015-04-30 13:37:08'),
(5, 'finga', '204ba15c73c616a3a26ab1e367acfeb70540ccb8', 'dina', 'dina.finga@gmail.ca', '', '2015-04-30 13:40:46'),
(9, 'hanka1', '204ba15c73c616a3a26ab1e367acfeb70540ccb8', 'hanka', 'hanka@hanka.com', 'photo.png', '2015-06-09 19:30:39'),
(10, 'dubie1', '204ba15c73c616a3a26ab1e367acfeb70540ccb8', 'du', 'dubie@hotmail.com', '2.jpg', '2015-06-09 20:19:13');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likepost`
--
ALTER TABLE `likepost`
  ADD CONSTRAINT `user_contriant` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_contraint` FOREIGN KEY (`userId`) REFERENCES `posts` (`postId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
