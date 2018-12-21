-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 09:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `tag` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `title`, `content`, `tag`, `user`, `name`, `date`) VALUES
(3, 'How to Reduce Overfitting in Deep Neural Networks Using Weight Constraints in Keras', 'Weight constraints provide an approach to reduce the overfitting of a deep learning neural network model on the training data and improve the performance of the model on new data, such as the holdout test set. There are multiple types of weight constraints, such as maximum and unit vector norms, and some require a hyperparameter that must be configured. In this tutorial, you will discover the Keras API for adding weight constraints to deep learning neural network models to reduce overfitting', 'Lifestyle', 'surabhi.chaitanya@st.niituniversity.in', '', '21-12-2018 10:46:57'),
(4, 'How to Grid Search Deep Learning Models for Time Series Forecasting', 'Grid searching is generally not an operation that we can perform with deep learning methods. This is because deep learning methods often require large amounts of data and large models, together resulting in models that take hours, days, or weeks to train. In those cases where the datasets are smaller, such as univariate time series, it may be possible to use a grid search to tune the hyperparameters of a deep learning model. In this tutorial, you will discover how to develop a framework to grid search hyperparameters for deep learning models.', 'Food', 'surabhi.chaitanya@st.niituniversity.in', 'Surabhi', '21-12-2018 11:08:49'),
(5, 'cyber crime', 'asdfgdsdasa', 'Sports', 'chaitanyasurabhi7@gmail.com', 'chaitanya', '21-12-2018 16:13:52'),
(6, 'as', 'Weight constraints provide an approach to reduce the overfitting of a deep learning neural network model on the training data and improve the performance of the model on new data, such as the holdout test set. There are multiple types of weight constraints, such as maximum and unit vector norms, and some require a hyperparameter that must be configured. In this tutorial, you will discover the Keras API for adding weight constraints to deep learning neural network models to reduce overfitting', 'Arts', 'surabhi.chaitanya@st.niituniversity.in', 'surabhi', '21-12-2018 16:18:53'),
(7, 'Blockchain', 'Grid searching is generally not an operation that we can perform with deep learning methods. This is because deep learning methods often require large amounts of data and large models, together resulting in models that take hours, days, or weeks to train. In those cases where the datasets are smaller, such as univariate time series, it may be possible to use a grid search to tune the hyperparameters of a deep learning model. In this tutorial, you will discover how to develop a framework to grid search hyperparameters for deep learning models.', 'Adventure', 'iamchaitanya7@gmail.com', 'arya', '21-12-2018 16:22:57'),
(8, 'Musicc', 'Arctic monkeys', 'Music', 'ak@gmail.com', 'anukriti', '21-12-2018 17:27:17'),
(9, 'Artificial Intelligence', 'DSRFGHKLK;\'\r\n;\'KHGFHJKL;\'\r\n;LLGHFHJKL;\';\r\n', 'Health', 'Ragipani@gmail.com', 'Ragipani', '21-12-2018 18:06:02'),
(10, 'Music', 'sadfghjkl;\'l;khgdgfhjk', 'Music', 'dkk@gmail.com', 'dheeraj', '21-12-2018 19:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `topic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `phone`, `bio`, `topic`) VALUES
(2, 'chaitanyasurabhi7@gmail.com', '202cb962ac59075b964b07152d234b70', 'Chaitanya', 'surabhi', '8500973619', '4', 'Sports'),
(3, 'surabhi.chaitanya@st.niituniversity.in', '283d8dd0113e0d78f5be037edc9100f8', 'chaitanya', 'surabhi', '9358429369', 'All i have to do is dream', 'Lifestyle'),
(4, 'iamchaitanya7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'arya', 'arjun', '9358429369', 'Why waste Sunshine?', 'Adventure'),
(5, 'chaitanya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Chris', 'Evans', '8500973619', 'Normal People scare me', 'Music'),
(6, 'ak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'anukriti', 'joshi', '8500973619', 'hello', 'Music'),
(7, 'Ragipani@gmail.com', '283d8dd0113e0d78f5be037edc9100f8', 'Ragipani', 'Thapan', '8500973619', 'HGFD', 'Health'),
(8, 'Dadi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Dadi', 'Srinivas', '8500973619', 'All i have to do is dream', 'Music'),
(9, 'dkk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dheeraj', 'kumar', '8500973619', 'asdfghjhgfdsa', 'Music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
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
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
