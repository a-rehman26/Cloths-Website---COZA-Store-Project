-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 09:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloths_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(1, 'Women'),
(2, 'Men'),
(3, 'Accessories'),
(4, 'Cap'),
(5, 'Perfume');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_id` int(255) NOT NULL,
  `c_email` varchar(25) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `u_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_c_pass` varchar(255) NOT NULL,
  `u_image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`u_id`, `u_name`, `u_email`, `u_pass`, `u_c_pass`, `u_image`, `role`) VALUES
(1, 'Abdul Rehman', 'abdul123@gmail.com', '1234', '', 'format my pic formal-fotor-20230923124354.png', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_des` varchar(255) NOT NULL,
  `p_image` varchar(300) NOT NULL,
  `p_category` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_price`, `p_des`, `p_image`, `p_category`) VALUES
(15, 'BROWN COTTON KAMEEZ SHALWAR', '4,300.00', 'Color: Brown |  Wear Type: Plain |  Product Category:	Casual Kameez Shalwar', 'men kameez shalwar image 01.webp', 2),
(16, 'BLACK KURTI', '1,792.00', 'Collection: Printed Lawn Shirt |  Wear Type: Casual |  Fabric Type: Lawn', 'women kurti image 01.webp', 1),
(18, 'GREEN COTTON KAMEEZ SHALWAR', '4,620.00', 'Color:  Green  |  Wear Type:  Semi-Formal  |   Product Category:  Semi-Formal Kameez Shalwar', 'men kameez shalwar image 02.webp', 2),
(27, 'NAVY BLUE BLENDED CAP', '1,743.00', 'Color : Navy Blue |  Product Category:  Men Caps  | Fabric	:  Blended', 'men cap image 01.webp', 4),
(28, 'BROWN BLENDED MEN CAP', '1,700.00', 'Color : Brown |  Product Category:  Men Caps  | Fabric :  Blended', 'men cap image 02.webp', 4),
(29, 'GREEN JACQUARD 3PC STITCHED', '9,500.00', 'Wear Type: Semi Formal Fabric Type: Jacquard Neckline: Round Shirt Front: Embroidered Shirt Back: Plain Trouser: Shalwar Sleeves:  Full Sleeves Style Cut: Straight  Length: Long', 'women striched suit image 01.webp', 1),
(30, 'MARINE', '8,925.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 05.webp', 5),
(31, 'ALL-ROUNDER | SHOAIB MALIK', '5,950.00', 'All-Rounder; a distinctive fragrance that encapsulates the spirit of today\'s man. The fragrance opens with the top notes of Apple, Lavender, Pepper, Grapefruit and further transforms into a perfect blend of Woody notes at the heart; the woodsy scent of Ce', 'men perfume image 01.webp', 5),
(32, 'JANAN GOLD', '4,300.00', 'To prolong this fragrance, Spray JANAN PLATINUM by J. fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 03.webp', 5),
(33, 'WARRIOR POUR HOMME', '15,300.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 04.webp', 5),
(34, 'RULER', '10,500.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 02.webp', 5),
(35, 'JANAN PLATINUM', '6,300.00', 'Introducing Janan Platinum, a fragrance that ignites the essence of visionary wisdom, confidence, and self-reliance with the fusion of citrusy notes perfectly blended with invigorating spicy notes unveiling a pragmatics foundation beyond the skies.', 'men janan platlium perfume image 06.webp', 5),
(36, 'SPARK', '3,200.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume spark image 06.webp', 5),
(37, 'KHUMAR', '2,500.00', 'Size	100ml Fragrance Category	Fresh, Woody Care Instructions	 Proper storage of perfume is essential to maintain its quality and ensure a longer shelf life. Here are some tips on how to store perfume:', 'men perfume khumar image 08.webp', 5),
(38, 'WHITE BLENDED CAP', '1,500.00', 'Color :  White |  Product Category:	Men Caps | Fabric :  Blended', 'men white cap image 03.webp', 4),
(39, 'BROWN BLENDED CAP', '2,000.00', 'Color : Brown |  Product Category:  Men Caps  | Fabric :  Blended', 'men brown second cap image 04.webp', 4),
(40, 'BLACK BLENDED CAP', '2,400.00', 'Color : Black |  Product Category:  Men Caps  | Fabric :  Blended', 'men black cap image 05.webp', 4),
(41, 'NAVY BLUE CAP', '1,400.00', 'Color : Navy Blue |  Product Category:  Men Caps  | Fabric	:  Blended', 'men simple blue cap image 06.webp', 4),
(42, 'BLUE LAWN KURTI', '2,000.00', 'Color	Blue Product Category	Ladies Kurti Season	Spring Summer Collection Fabric	Lawn', 'women kurti image 02.webp', 1),
(43, 'GREEN LAWN 3PC STITCHED', '6,500.00', 'Color	Green Product Category	3 Piece Stitched Season	Festive Collection Fabric	Lawn', 'women striched suit image 02.webp', 1),
(44, 'BLACK RAW SILK 3PC STITCHED', '9,500.00', 'More Information Color	Black Product Category	3 Piece Stitched Season	Winter Collection Fabric	Raw Silk', 'women formal dress image 01.webp', 1),
(45, 'MAROON BLENDED KAMEEZ SHALWAR', '4,500.00', 'Color	Maroon Wear Type	Semi-Formal Product Category	Semi-Formal Kameez Shalwar Season	Festive Collection Fabric	Blended Fit Type	Regular Fit', 'men kameez shalwar image 03.webp', 2),
(46, 'BLACK BLENDED KAMEEZ SHALWAR', '5,000.00', 'Color	Black Wear Type	Casual Product Category	Casual Kameez Shalwar Season	Festive Collection Fabric	Blended Fit Type	Regular Fit', 'men kameez shalwar image 04.webp', 2),
(47, 'VIOLET COTTON KAMEEZ SHALWAR', '6,000.00', 'Color	Violet Wear Type	Exclusive Product Category	Exclusive Kameez Shalwar Season	Festive Collection Fabric	Cotton Fit Type	Regular Fit', 'men kameez shalwar image 05.webp', 2),
(48, 'GREEN BLENDED KURTA', '2,000.00', 'Color	Green Edition	Online Edition Wear Type	Casual Product Category	Casual Kurta Season	Special Edition Fabric	Blended Fit Type	Smart Fit', 'men kurta image 01.webp', 2),
(49, 'BLACK SHERWANI', '28,000.00', 'Size	Make To Order Color	Black', 'men shenwari image 01.webp', 2),
(50, 'MAROON  WAISTCOAT', '8,500.00', 'Color	Maroon Product Category	Waist Coat Season	Festive Collection Fabric	Polyester', 'men waiscoat image 01.webp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop_product`
--

CREATE TABLE `shop_product` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(255) DEFAULT NULL,
  `sp_price` varchar(255) DEFAULT NULL,
  `sp_des` varchar(255) DEFAULT NULL,
  `sp_image` varchar(255) DEFAULT NULL,
  `sp_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_product`
--

INSERT INTO `shop_product` (`sp_id`, `sp_name`, `sp_price`, `sp_des`, `sp_image`, `sp_category`) VALUES
(1, 'BROWN COTTON KAMEEZ SHALWAR', '4,300.00', 'Color: Brown |  Wear Type: Plain |  Product Category:	Casual Kameez Shalwar', 'men kameez shalwar image 01.webp', 2),
(2, 'BLACK KURTI', '1,792.00', 'Collection: Printed Lawn Shirt |  Wear Type: Casual |  Fabric Type: Lawn', 'women kurti image 01.webp', 1),
(3, 'GREEN COTTON KAMEEZ SHALWAR', '4,620.00', 'Color:  Green  |  Wear Type:  Semi-Formal  |   Product Category:  Semi-Formal Kameez Shalwar', 'men kameez shalwar image 02.webp', 2),
(4, 'NAVY BLUE BLENDED CAP', '1,743.00', 'Color : Navy Blue |  Product Category:  Men Caps  | Fabric	:  Blended', 'men cap image 01.webp', 4),
(5, 'BROWN BLENDED MEN CAP', '1,700.00', 'Color : Brown |  Product Category:  Men Caps  | Fabric :  Blended', 'men cap image 02.webp', 4),
(6, 'GREEN JACQUARD 3PC STITCHED', '9,500.00', 'Wear Type: Semi Formal Fabric Type: Jacquard Neckline: Round Shirt Front: Embroidered Shirt Back: Plain Trouser: Shalwar Sleeves:  Full Sleeves Style Cut: Straight  Length: Long', 'women striched suit image 01.webp', 1),
(7, 'MARINE', '8,925.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 05.webp', 5),
(8, 'ALL-ROUNDER | SHOAIB MALIK', '5,950.00', 'All-Rounder; a distinctive fragrance that encapsulates the spirit of today\'s man. The fragrance opens with the top notes of Apple, Lavender, Pepper, Grapefruit and further transforms into a perfect blend of Woody notes at the heart; the woodsy scent of Ce', 'men perfume image 01.webp', 5),
(9, 'JANAN GOLD', '4,300.00', 'To prolong this fragrance, Spray JANAN PLATINUM by J. fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 03.webp', 5),
(10, 'WARRIOR POUR HOMME', '15,300.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 04.webp', 5),
(11, 'RULER', '10,500.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume image 02.webp', 5),
(12, 'JANAN PLATINUM', '6,300.00', 'Introducing Janan Platinum, a fragrance that ignites the essence of visionary wisdom, confidence, and self-reliance with the fusion of citrusy notes perfectly blended with invigorating spicy notes unveiling a pragmatics foundation beyond the skies.', 'men janan platlium perfume image 06.webp', 5),
(13, 'SPARK', '3,200.00', 'To prolong this fragrance, Spray MARINE (NAVY) by J.Fragrances onto pulse points (on wrists, behind ears, and on the neck).', 'men perfume spark image 06.webp', 5),
(14, 'KHUMAR', '2,500.00', 'Size	100ml Fragrance Category	Fresh, Woody Care Instructions	 Proper storage of perfume is essential to maintain its quality and ensure a longer shelf life. Here are some tips on how to store perfume:', 'men perfume khumar image 08.webp', 5),
(15, 'WHITE BLENDED CAP', '1,500.00', 'Color :  White |  Product Category:	Men Caps | Fabric :  Blended', 'men white cap image 03.webp', 4),
(16, 'BROWN BLENDED CAP', '2,000.00', 'Color : Brown |  Product Category:  Men Caps  | Fabric :  Blended', 'men brown second cap image 04.webp', 4),
(17, 'BLACK BLENDED CAP', '2,400.00', 'Color : Black |  Product Category:  Men Caps  | Fabric :  Blended', 'men black cap image 05.webp', 4),
(18, 'NAVY BLUE CAP', '1,400.00', 'Color : Navy Blue |  Product Category:  Men Caps  | Fabric	:  Blended', 'men simple blue cap image 06.webp', 4),
(19, 'BLUE LAWN KURTI', '2,000.00', 'Color	Blue Product Category	Ladies Kurti Season	Spring Summer Collection Fabric	Lawn', 'women kurti image 02.webp', 1),
(20, 'GREEN LAWN 3PC STITCHED', '6,500.00', 'Color	Green Product Category	3 Piece Stitched Season	Festive Collection Fabric	Lawn', 'women striched suit image 02.webp', 1),
(21, 'BLACK RAW SILK 3PC STITCHED', '9,500.00', 'More Information Color	Black Product Category	3 Piece Stitched Season	Winter Collection Fabric	Raw Silk', 'women formal dress image 01.webp', 1),
(22, 'MAROON BLENDED KAMEEZ SHALWAR', '4,500.00', 'Color	Maroon Wear Type	Semi-Formal Product Category	Semi-Formal Kameez Shalwar Season	Festive Collection Fabric	Blended Fit Type	Regular Fit', 'men kameez shalwar image 03.webp', 2),
(23, 'BLACK BLENDED KAMEEZ SHALWAR', '5,000.00', 'Color	Black Wear Type	Casual Product Category	Casual Kameez Shalwar Season	Festive Collection Fabric	Blended Fit Type	Regular Fit', 'men kameez shalwar image 04.webp', 2),
(24, 'VIOLET COTTON KAMEEZ SHALWAR', '6,000.00', 'Color	Violet Wear Type	Exclusive Product Category	Exclusive Kameez Shalwar Season	Festive Collection Fabric	Cotton Fit Type	Regular Fit', 'men kameez shalwar image 05.webp', 2),
(25, 'GREEN BLENDED KURTA', '2,000.00', 'Color	Green Edition	Online Edition Wear Type	Casual Product Category	Casual Kurta Season	Special Edition Fabric	Blended Fit Type	Smart Fit', 'men kurta image 01.webp', 2),
(26, 'BLACK SHERWANI', '28,500.00', 'Size	Make To Order Color	Black', 'men shenwari image 01.webp', 2),
(27, 'MAROON  WAISTCOAT', '8,500.00', 'Color	Maroon Product Category	Waist Coat Season	Festive Collection Fabric	Polyester', 'men waiscoat image 01.webp', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_category` (`p_category`);

--
-- Indexes for table `shop_product`
--
ALTER TABLE `shop_product`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `sp_category` (`sp_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `shop_product`
--
ALTER TABLE `shop_product`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`p_category`) REFERENCES `categories` (`c_id`);

--
-- Constraints for table `shop_product`
--
ALTER TABLE `shop_product`
  ADD CONSTRAINT `shop_product_ibfk_1` FOREIGN KEY (`sp_category`) REFERENCES `categories` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
