-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 05:30 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shiny_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_price` decimal(9,2) NOT NULL,
  `product_description` varchar(512) NOT NULL,
  `category` varchar(64) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_description`, `category`, `quantity`, `image_main`, `image_other`, `image_thumb`, `date_create`, `date_modify`) VALUES
(16, 'Butterfly Windchime', 18.00, 'Butterfly shaped elements, Paper product, pink color, windchime\', \'home decor', 'home decor', 15, 'windchime.jpg', 'windchime.jpg,windchime_2.jpg,windchime_3.jpg', 'windchime.jpg', '2020-11-07 22:35:07', '2020-12-15 01:56:22'),
(2, '25 anniversary theme Bottle Lamp ', 35.00, '25th Anniversary Themed bottle silver lamp with fairy lights and picture frames silver color', 'home decor', 1, 'bottlelamp.jpg', 'bottlelamp.jpg,bottlelamp_2.jpg', 'bottlelamp.jpg', '2020-11-07 22:35:42', '0000-00-00 00:00:00'),
(3, 'family book ', 47.00, 'scrap book / family album , insert customized pictures and messages ', 'photo albums', 1, 'family_book.jpg', 'family_book.jpg,family_book_2.jpg', 'family_book.jpg', '2020-11-07 22:35:38', '0000-00-00 00:00:00'),
(4, 'valentines day photo album', 45.00, 'valentines day theme photo album, insert your pictures and messages ', 'photo album', 1, 'doctortheme_book.jpg', 'doctortheme_book.jpg', 'doctortheme_book.jpg', '2020-11-07 22:35:32', '0000-00-00 00:00:00'),
(5, 'Birthday Hamper -  blue purple theme color', 60.00, 'purple blue Theme Birthday Basket Hamper with 12 products (handmade cards and accessories)', 'hampers', 1, 'hamper1.jpg', 'hamper1.jpg,hamper1_2.jpg', 'hamper1.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(6, 'Birthday Hamper - Red color theme', 60.00, 'Red Theme Birthday Basket Hamper with 12 products (handmade cards and accessories)', 'hampers', 1, 'hamper2.jpg', 'hamper2.jpg,hamper2_2.jpg', 'hamper2.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(7, 'frame - mothers day ', 25.00, 'mothers day wall frame with 11 pictures insertable, dimensions: 24inch*8inch', 'frames', 1, 'frame_mom_1.jpg', 'frame_mom_1.jpg', 'frame_mom_1.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(8, 'Frame - Motivational quote ', 25.00, 'Frames with motivational quotes, can add your own quote and message, Hardboard frame suitable for desk accessory, dimensions: 8inch*8inch', 'frames', 1, 'frame_1.jpg', 'frame_1.jpg,frame_1_2.jpg', 'frame_1.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(9, 'explosion box - rose, valentines day theme', 45.00, 'explosion box with customized pictures and messages, 3 layers', 'explosion box', 1, 'explosionbox_1.jpg', 'explosionbox_1.jpg', 'explosionbox_1.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(10, 'explosion box - red and black anniversary gift theme', 45.00, 'explosion box with customized pictures and messages, 3 layers', 'explosion box', 1, 'explosionbox_2.jpg', 'explosionbox_2.jpg', 'explosionbox_2.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(11, 'thank you card ', 8.00, 'Handmade Thank you Card', 'cards', 1, 'thankyou_card_1.jpg', 'thankyou_card_1.jpg,thankyou_card_2.jpg', 'thankyou_card_1.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(12, 'birthday card ', 8.00, 'Piano style - Handmade birthday Card ', 'cards', 1, 'pianocard_1.jpg', 'pianocard_1.jpg,pianocard_2.jpg,pianocard_3.jpg', 'pianocard_1.jpg', '2020-11-07 22:35:07', '0000-00-00 00:00:00'),
(18, 'Gold Theme Explosion Box', 50.00, 'Gold Theme explosion box with 3 layers. Insert your own images and messages. The final box opens with gold coin chocolates', 'Explosion Box', 5, '', 'explosionbox_3_1.jpg,explosionbox_3_2.jpg', 'explosionbox_3_1.jpg', '2020-12-16 16:30:48', '2020-12-16 16:30:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
