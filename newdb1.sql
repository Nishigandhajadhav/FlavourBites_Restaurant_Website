-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 06:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `guest` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `radio1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booktable`
--

--
-- Triggers `booktable`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable_delete_log`
--

CREATE TABLE `booktable_delete_log` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `guest` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `radio1` varchar(50) NOT NULL,
  `action` enum('DELETE') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booktable_delete_log`
--



-- --------------------------------------------------------

--
-- Table structure for table `booktable_update_log`
--

CREATE TABLE `booktable_update_log` (
  `id` int(11) NOT NULL,
  `old_fname` varchar(500) NOT NULL,
  `old_lname` varchar(500) NOT NULL,
  `old_guest` int(10) NOT NULL,
  `old_date` date NOT NULL,
  `old_time` time NOT NULL,
  `old_radio1` varchar(50) NOT NULL,
  `new_fname` varchar(500) NOT NULL,
  `new_lname` varchar(500) NOT NULL,
  `new_guest` int(10) NOT NULL,
  `new_date` date NOT NULL,
  `new_time` time NOT NULL,
  `new_radio1` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booktable_update_log`
--


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `cardholder_name` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `oprise` text NOT NULL,
  `discount` text NOT NULL,
  `description` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `oprise`, `discount`, `description`, `quantity`) VALUES
(1, 'Special Chicken', '1.png', '300', '20', ' chicken pieces that have been coated with seasoned flour or batter and pan-fried, deep fried, pressure fried, or air fried. ', '1'),
(2, 'Chicken Kabab', '2.png', '1000', '25', 'flavorful ground meat croquettes, seasoned with warm Indian spices, then grilled in an air fryer or oven.', '1'),
(3, 'Chicken Harabhara', '3.png', '250', '3', 'Hara bhara chicken tikka is a mouth-watering appetizer to serve. It is an exotic dish with spices & tanginess of coriander, mint & lemon.', '1'),
(4, 'Curry', '4.png', '250', '2', ' a lovely thai curry with a medley of vegetables made with a medley of vegetables ', '1'),
(7, 'Capsicum Pizza', 'capsicumpizza.png', '80', '2', 'A scrumptious pizza with crunchy capsicum!\n', '1'),
(8, 'Mashroom Pizza', 'mashroompizza.png', '90', '2', 'A quick sauteed mushrooms pizza!\n', '1'),
(10, 'Tomatoo Pizza', 'tomatoopizza.png', '80', '2', 'A classic thin crust pizza with abundance of tomato sauce \n\n', '1'),
(11, 'Veg Biryani', 'vegbiryani.png', '200', '2', 'Special veg biryani!', '1'),
(12, 'Mutton Biryani', 'muttonbiryani.png', '250', '2', 'Special mutton biryani!', '1'),
(13, 'Chicken Biryani', 'chickenbiryani.png', '230', '2', 'Tandoori chicken biryani!', '1');

CREATE TABLE IF NOT EXISTS `booktable_delete_log` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `guest` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `radio1` varchar(50) NOT NULL,
  `action` ENUM('DELETE') NOT NULL,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TRIGGER booktable_delete_trigger
        AFTER DELETE ON `booktable`
        FOR EACH ROW
        INSERT INTO booktable_delete_log (fname, lname, guest, date, time, radio1, action)
        VALUES (OLD.fname, OLD.lname, OLD.guest, OLD.date, OLD.time, OLD.radio1, 'DELETE');




CREATE TABLE IF NOT EXISTS `booktable_update_log` (
  `id` int(11) NOT NULL ,
  `old_fname` varchar(500) NOT NULL,
  `old_lname` varchar(500) NOT NULL,
  `old_guest` int(10) NOT NULL,
  `old_date` date NOT NULL,
  `old_time` time NOT NULL,
  `old_radio1` varchar(50) NOT NULL,
  `new_fname` varchar(500) NOT NULL,
  `new_lname` varchar(500) NOT NULL,
  `new_guest` int(10) NOT NULL,
  `new_date` date NOT NULL,
  `new_time` time NOT NULL,
  `new_radio1` varchar(50) NOT NULL,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TRIGGER booktable_update_trigger
AFTER UPDATE ON `booktable`
FOR EACH ROW
    INSERT INTO `booktable_update_log` (old_fname, old_lname, old_guest, old_date, old_time, old_radio1, new_fname, new_lname, new_guest, new_date, new_time, new_radio1)
    VALUES (OLD.fname, OLD.lname, OLD.guest, OLD.date, OLD.time, OLD.radio1, NEW.fname, NEW.lname, NEW.guest, NEW.date, NEW.time, NEW.radio1);




--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktable_delete_log`
--
ALTER TABLE `booktable_delete_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktable_update_log`
--
ALTER TABLE `booktable_update_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `booktable_delete_log`
--
ALTER TABLE `booktable_delete_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `booktable_update_log`
--
ALTER TABLE `booktable_update_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
