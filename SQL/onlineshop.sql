-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 07:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `weblink` text NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `weblink`, `logo`) VALUES
(1, 'Adidas', 'https://www.adidas.com/us', 'img/logo/adidas.png'),
(2, 'Nike', 'https://www.nike.com/us/en_us/?ref=https%253A%252F%252Fwww.google.com%252F', 'img/logo/nike.png'),
(3, 'Apple', 'https://www.apple.com/lae/', 'img/logo/apple.png'),
(4, 'HP', 'https://www8.hp.com/us/en/home.html', 'img/logo/hp.png'),
(5, 'Dell', 'https://www.dell.com/', 'img/logo/dell.png'),
(6, 'HTC', 'https://www.htc.com/us/', 'img/logo/htc.png'),
(8, 'Sony', 'https://www.sony-asia.com/', 'img/logo/sony.png'),
(9, 'Nokia', 'https://www.nokia.com/en_int', 'img/logo/nokia.png'),
(10, 'Intel', 'https://www.intel.com/content/www/us/en/homepage.html', 'img/logo/intel.png'),
(11, 'Samsung', 'https://www.samsung.com/africa_en/', 'img/logo/samsung.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `category_name`, `total_amount`) VALUES
(1, 'T-shirt', 200000),
(2, 'Sports T-Shirt', 200000),
(3, 'Sports', 500000),
(4, 'boot', 500000),
(5, 'Mobile', 10000000),
(6, 'Laptop', 500000),
(7, 'Ladies T-shirt', 500000),
(8, 'Drinks', 500000),
(9, 'School Bag', 300000),
(11, 'ring', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `password`, `email`, `phone_no`, `address`) VALUES
(10, 'saikat', 'saikat', 'saikathossen3@gmail.com', '01515698332', 'Dhaka'),
(11, 'arik', '12345', 'amarik468@gmail.com', '01775727156', 'rampura'),
(12, 'fuad', '1234', 'fuaduddinador@gmail.com', '01681996801', 'uttara, Dhaka'),
(13, 'zakir', 'zakir', 'zakir@gmail.com', '01675026895', 'banassree'),
(14, 'raiyan', '12345', 'raiyan@gmail.com', '123456', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `total_amount`, `date`) VALUES
(56, 10, 1, 1200, '2019-02-14 17:29:46'),
(57, 10, 1, 1200, '2019-02-14 17:29:46'),
(58, 10, 4, 1200, '2019-02-14 17:29:46'),
(59, 10, 4, 1200, '2019-02-14 17:30:08'),
(60, 12, 11, 14000, '2019-02-22 19:06:37'),
(61, 12, 14, 40000, '2019-02-22 19:06:37'),
(62, 13, 1, 1200, '2019-02-23 18:48:48'),
(63, 13, 4, 1200, '2019-02-23 18:48:48'),
(64, 10, 17, 40000, '2019-04-01 19:40:21'),
(65, 14, 1, 1200, '2019-04-02 09:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `amount`, `date`, `quantity`) VALUES
(22, 10, 3600, '2019-02-14 17:29:47', 3),
(23, 10, 1200, '2019-02-14 17:30:08', 1),
(24, 12, 54000, '2019-02-22 19:06:37', 2),
(25, 13, 2400, '2019-02-23 18:48:48', 2),
(26, 10, 40000, '2019-04-01 19:40:21', 1),
(27, 14, 1200, '2019-04-02 09:02:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `model`, `brand_id`, `category_id`, `img`, `product_description`) VALUES
(1, 'ADIDAS T-SHIRT I', 1200, 'ADIDASTSHIRT1', 1, 2, 'img/adidas_tshirt1.jpg', 'This iconic 3-Stripes tee became an instant classic when it debuted in 1973. adidas went deep into the archives to find and remake it for today\'s streets. This men\'s slim-fitting cotton t-shirt features contrast 3-Stripes down the sporty raglan sleeves and an embroidered Trefoil logo on the chest.'),
(2, 'ADIDAS T-SHIRT II', 1200, 'ADIDASTSHIRT2', 1, 2, 'img/adidas_tshirt2.jpg', 'This iconic 3-Stripes tee became an instant classic when it debuted in 1973. adidas went deep into the archives to find and remake it for today\'s streets. This men\'s slim-fitting cotton t-shirt features contrast 3-Stripes down the sporty raglan sleeves and an embroidered Trefoil logo on the chest.'),
(3, 'ADIDAS T-SHIRT III', 1200, 'ADIDASTSHIRT3', 1, 2, 'img/adidas_tshirt3.jpg', 'This iconic 3-Stripes tee became an instant classic when it debuted in 1973. adidas went deep into the archives to find and remake it for today\'s streets. This men\'s slim-fitting cotton t-shirt features contrast 3-Stripes down the sporty raglan sleeves and an embroidered Trefoil logo on the chest.'),
(4, 'ADIDAS T-SHIRT IV', 1200, 'ADIDASTSHIRT4', 1, 2, 'img/adidas_tshirt4.jpg', 'This iconic 3-Stripes tee became an instant classic when it debuted in 1973. adidas went deep into the archives to find and remake it for today\'s streets. This men\'s slim-fitting cotton t-shirt features contrast 3-Stripes down the sporty raglan sleeves and an embroidered Trefoil logo on the chest.'),
(5, 'ADIDAS FOOTBALL I', 10000, 'ADIDASFOOTBALL', 1, 3, 'img/adidas_football1.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(6, 'NIKE T-SHIRT I', 1400, 'NIVAFOOTBALL1', 2, 2, 'img/nike_tshirt1.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(7, 'NIKE T-SHIRT II', 1400, 'NIKETSHIRT2', 2, 2, 'img/nike_tshirt2.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(8, 'NIKE T-SHIRT III', 1400, 'NIKETSHIRT3', 2, 2, 'img/nike_tshirt3.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(9, 'NIKE T-SHIRT IV', 1400, 'NIKETSHIRT4', 2, 2, 'img/nike_tshirt4.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(10, 'NIKE T-SHIRT V', 1400, 'NIKETSHIRT5', 2, 2, 'img/nike_tshirt5.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(11, 'NIKE BOOT I', 14000, 'NIKEBOOT1', 2, 3, 'img/nike_boot1.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(12, 'iPHONE 8', 70000, 'iphone8', 3, 5, 'img/iphone8.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(13, 'iPHONE 8 PLUS', 70000, 'iphone8plus', 3, 5, 'img/iphone8plus.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(14, 'LUMIA 900', 40000, 'LUMIA900', 9, 5, 'img/lumia900.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(15, 'LUMIA 920', 45000, 'LUMIA920', 9, 5, 'img/lumia920.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(16, 'LUMIA 1320', 40000, 'LUMIA1320', 9, 5, 'img/lumia1320.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(17, 'LUMIA 1520', 40000, 'LUMIA1520', 9, 5, 'img/lumia1520.jpg', 'Sunset is the time of day when our sky meets the outer space solar winds. There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. The sun moves slowly to hide behind the line of horizon, while the moon races to take its place in prominence atop the night sky. People slow to a crawl, entranced, fully forgetting the deeds that still must be done. There is a coolness, a calmness, when the sun does set.'),
(18, 'X PERIA I', 40000, 'XPERIA1', 8, 5, 'img/xperia.jpg', 'The old adage says that beauty is in the journey, not necessarily the destination — but sometimes beauty can be found in both places, especially if your mode of travel provides you with the opportunity to sightsee.\r\n\r\nTraveling the globe by rail has always been one of the easiest and most romantic ways to indulge in wanderlust. GOBankingRates decided to look at some beautiful train rides so that you know which excursions are worth making a reality.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `registration`
-- (See below for the actual view)
--
CREATE TABLE `registration` (
`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `registration`
--
DROP TABLE IF EXISTS `registration`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `registration`  AS  select `customer`.`email` AS `email` from `customer` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
