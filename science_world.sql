-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2014 at 02:30 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `science_world`
--
CREATE DATABASE `science_world` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `science_world`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(256) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `status`) VALUES
(1, 'shamvil', 'shamvil@ymail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', 1),
(2, 'Ishrat', 'ishrat@email.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'test', 'test@testmail.com', '098f6bcd4621d373cade4e832627b4f6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attend`
--

CREATE TABLE IF NOT EXISTS `tbl_attend` (
  `attend_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `event_id` int(5) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `join_status` tinyint(2) NOT NULL,
  PRIMARY KEY (`attend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_attend`
--

INSERT INTO `tbl_attend` (`attend_id`, `user_id`, `event_id`, `user_name`, `join_status`) VALUES
(1, 1, 1, 'shamvil', 1),
(2, 2, 1, 'sumon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `blog_id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `blog_title` varchar(256) NOT NULL,
  `blog_description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `blog_image` varchar(256) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `user_id`, `category_id`, `blog_title`, `blog_description`, `status`, `created_date_time`, `blog_image`) VALUES
(1, 1, 4, 'Pompeii facts:', '<p>\r\n First, you have to research on the topic of your essay before writing it. It is important to use some resources that helps you to gather some knowledge about that topic. You can take help from books and internet and take notes of some key points on that topic. Then you should analyze &nbsp;these points and should discuss, explain and compare between them.</p>\r\n', '1', '2013-07-28 03:07:12', ''),
(2, 1, 1, 'Grand Canyon', '<p>\r\n Use your brain to make some ideas and take a note of them. Think deeply about the topic until you become confident to write something unique and effective. Then you should perform thesis work &nbsp;to find the best key points or ideas. The quality of your essay largely depends on your thesis work.</p>\r\n', '1', '2013-07-28 04:07:26', ''),
(3, 1, 2, 'জলছবি বাতায়নের নিবন্ধন', '<p>\r\n জলছবি বাতায়নে রেজিস্ট্রেশন পদ্ধতি পরিবর্তন করা হয়েছে। উন্মুক্ত রেজিস্ট্রেশন পদ্ধতি চালু থাকায় অর্থহীন নিক ও অশালীন ইউজার নেম বেড়ে যাওয়ায় রেজিস্ট্রেশনে কড়াকড়ি আরোপ করা হয়েছে। এ পরিবর্তন যারা সত্যিকার লেখক বা লেখালেখিতে আগ্রহী তাদের জন্য সহায়ক হবে বলে মনে করি।</p>\r\n<p>\r\n <strong>নতুন পদ্ধতি : </strong>জলছবি বাতায়নে রেজিস্ট্রেশন করতে হলে একটি ইউজার নেম বাছাই করুন। ইউজার নেমটি ইংরেজীতে ছোট-বড় মিলিয়ে অথবা শুধুই ছোট বা বড় অক্ষর ব্যবহার করতে পারবেন। যেমন :sadesh অথবা Sadesh বা SADESH। এরপর যে নামে আপনি লিখতে চান অর্থাৎ সবাই যে নামে আপনার লেখা দেখতে পাবে সে নামটি যেমন &lsquo;মুজতবা ইকবাল&rsquo; অথবা &lsquo;ইকবাল&rsquo; বাংলায় লিখে, ই-মেইলে পাঠিয়ে দিন আমাদের কাছে।</p>\r\n', '1', '2013-07-30 02:07:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Technology ', ''),
(2, 'Life Science', ''),
(3, 'Mobile PC', ''),
(4, 'Sports', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `comments_id` int(3) NOT NULL AUTO_INCREMENT,
  `blog_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comments_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `blog_id`, `name`, `comments_description`, `status`) VALUES
(1, 1, 'jamal', 'very good article', 1),
(2, 1, 'limon', 'awesome!', 1),
(3, 1, 'dfh', 'dfht', 0),
(9, 3, 'hasan', 'Thats good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(5) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(100) NOT NULL,
  `event_description` text NOT NULL,
  `event_image` varchar(256) NOT NULL,
  `in_date` date NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_description`, `event_image`, `in_date`) VALUES
(1, 'Science Fair', 'Very good.', 'images/event_images/button2.gif', '0000-00-00'),
(2, 'Workshop', 'learn a lot..... Come soon...', 'images/event_images/acer2.jpg', '2013-08-03'),
(3, 'Seminar', 'Seminar on freelancing', 'images/event_images/asustablet1.jpg', '2013-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `logo_id` int(2) NOT NULL AUTO_INCREMENT,
  `logo_image` varchar(256) NOT NULL,
  `image_file_name` varchar(256) NOT NULL,
  `logo_description` varchar(50) NOT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `logo_image`, `image_file_name`, `logo_description`) VALUES
(1, 'images/logo_image/my_logo2.png', 'my_logo2.png', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `city` varchar(16) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `profile_image` varchar(256) NOT NULL,
  `in_date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `first_name`, `last_name`, `email_address`, `password`, `address`, `mobile_no`, `city`, `gender`, `country`, `zip_code`, `profile_image`, `in_date`) VALUES
(1, 'Shamvil', 'Hossain', 'shamvil@ymail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', '                                        76/B, malibag \r\n                 \r\n                ', '01723759641', 'Dhaka', 'male', 'BD', '0123', 'images/profile_images/acer.jpg', '2013-07-25'),
(2, 'Sumon', 'Ahmed', 'sumon@ymail.com', '550a141f12de6341fba65b0ad0433500', 'nangolcote', '0182642391', 'Comilla', 'male', 'BD', '0912', 'images/profile_images/IMAG0155.jpg', '2013-07-25'),
(3, 'Test', 'tester', 'test@testmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test address', '09857456', 'test', 'test', 'test', 'test', '', '2013-05-29'),
(4, 'Ishrat', 'Sharmin', 'ishrat.cste@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Dhaka', '09111122222', '', '', '', '', '', '2013-05-29');
