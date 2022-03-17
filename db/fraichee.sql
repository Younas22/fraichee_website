-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 01:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fraichee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_order`
--

CREATE TABLE `cart_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `delivery_days` varchar(500) DEFAULT NULL,
  `delivery_options` varchar(255) NOT NULL,
  `cart_details` text NOT NULL,
  `total_amount` double NOT NULL,
  `first_day` varchar(255) DEFAULT NULL,
  `second_day` varchar(255) DEFAULT NULL,
  `therd_day` varchar(255) DEFAULT NULL,
  `fourth_day` varchar(255) DEFAULT NULL,
  `type` enum('laundary','subscribe') NOT NULL,
  `date` datetime NOT NULL,
  `note_box` longtext DEFAULT NULL,
  `other_address` text DEFAULT NULL,
  `status` enum('pending','approved','cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_order`
--

INSERT INTO `cart_order` (`order_id`, `user_id`, `invoice_id`, `delivery_days`, `delivery_options`, `cart_details`, `total_amount`, `first_day`, `second_day`, `therd_day`, `fourth_day`, `type`, `date`, `note_box`, `other_address`, `status`) VALUES
(61, 41, '0', '2021-09-30', '', '[{\"cart_id\":\"132\",\"user_id\":\"41\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"65\",\"cart_qty\":\"1\",\"price\":\"4.69\",\"total_price\":\"4.69\",\"date\":\"2021-09-04 11:10:38\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-30\"}]', 8.68, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'chak 22-10-R kacha khuh', 'pending'),
(62, 44, '0', '2021-09-09', '', '[{\"cart_id\":\"154\",\"user_id\":\"44\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"65\",\"cart_qty\":\"1\",\"price\":\"4.69\",\"total_price\":\"4.69\",\"date\":\"2021-09-06 08:27:12\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-09\"}]', 8.68, NULL, NULL, NULL, NULL, 'laundary', '2021-09-08 00:00:00', '', '', 'pending'),
(63, 43, '0', '2021-09-30', '', '[{\"cart_id\":\"157\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"65\",\"cart_qty\":\"1\",\"price\":\"4.69\",\"total_price\":\"4.69\",\"date\":\"2021-09-08 08:33:50\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-30\"},{\"cart_id\":\"159\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"66\",\"cart_qty\":\"1\",\"price\":\"3.69\",\"total_price\":\"3.69\",\"date\":\"2021-09-10 21:25:02\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-30\"}]', 16.36, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', 'pending'),
(74, 43, '0', '2021-09-29', '', '[{\"cart_id\":\"182\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"66\",\"cart_qty\":\"1\",\"price\":\"3.69\",\"total_price\":\"3.69\",\"date\":\"2021-09-11 07:11:46\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-29\"},{\"cart_id\":\"183\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"67\",\"cart_qty\":\"1\",\"price\":\"5.69\",\"total_price\":\"5.69\",\"date\":\"2021-09-11 07:11:50\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-29\"}]', 17.36, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', 'pending'),
(75, 43, '0', '2021-09-22', '', '[{\"cart_id\":\"184\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"66\",\"cart_qty\":\"1\",\"price\":\"3.69\",\"total_price\":\"3.69\",\"date\":\"2021-09-11 07:12:55\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-22\"}]', 7.68, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', 'pending'),
(76, 43, '0', '2021-09-22', '', '[{\"cart_id\":\"185\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"66\",\"cart_qty\":\"1\",\"price\":\"3.69\",\"total_price\":\"3.69\",\"date\":\"2021-09-11 07:16:31\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-22\"}]', 7.68, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', 'pending'),
(77, 43, '', '2021-09-29', '', '[{\"cart_id\":\"186\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"67\",\"cart_qty\":\"1\",\"price\":\"5.69\",\"total_price\":\"5.69\",\"date\":\"2021-09-11 07:19:03\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-29\"},{\"cart_id\":\"187\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"68\",\"cart_qty\":\"1\",\"price\":\"4.69\",\"total_price\":\"4.69\",\"date\":\"2021-09-11 07:19:07\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-29\"}]', 18.36, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', 'pending'),
(78, 43, 'F1643', '2021-09-23', '', '[{\"cart_id\":\"188\",\"user_id\":\"43\",\"service_id\":\"3\",\"prod_id\":\"29\",\"cp_id\":\"66\",\"cart_qty\":\"1\",\"price\":\"3.69\",\"total_price\":\"3.69\",\"date\":\"2021-09-11 07:21:05\",\"panel\":\"laundary\",\"status\":\"0\",\"delivery_days\":\"2021-09-23\"}]', 7.68, NULL, NULL, NULL, NULL, 'laundary', '2021-09-11 00:00:00', '', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `service_id` int(11) NOT NULL,
  `subsc_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `panel` enum('frontend','laundary','subscribe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`service_id`, `subsc_id`, `name`, `panel`) VALUES
(3, 0, 'Ironing Only', 'laundary'),
(10, 0, 'Dry cleaning ', 'laundary'),
(12, 0, 'Beddings', 'subscribe'),
(13, 0, 'Toweling ', 'subscribe'),
(14, 0, 'Other linen products ', 'subscribe'),
(15, 0, 'Washing and Ironing ', 'laundary');

-- --------------------------------------------------------

--
-- Table structure for table `child_products`
--

CREATE TABLE `child_products` (
  `cp_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `cp_name` varchar(255) NOT NULL,
  `cp_price` varchar(255) NOT NULL,
  `cp_desc` text NOT NULL,
  `cp_image` varchar(5000) NOT NULL,
  `status` enum('deactive','active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_products`
--

INSERT INTO `child_products` (`cp_id`, `service_id`, `prod_id`, `cp_name`, `cp_price`, `cp_desc`, `cp_image`, `status`) VALUES
(9, 5, 46, 'Cardigan', '8.69', '', 'relax - Copy-02.png', 'active'),
(10, 5, 46, 'Jumper', '8.69', '', 'relax - Copy-02.png', 'active'),
(11, 5, 46, 'Polo', '3.69', '', 'relax - Copy-03.png', 'active'),
(12, 5, 46, 'Blouse ', '6.69', '', 'relax - Copy-04.png', 'active'),
(13, 5, 46, 'T-shirt', '3.69', '', 'relax - Copy-05.png', 'active'),
(14, 5, 47, 'Shorts', '5.69', '', 'relax - Copy-07.png', 'active'),
(15, 5, 47, 'Skirts ', '6.69', '', 'relax - Copy-06.png', 'active'),
(16, 5, 47, 'Trousers', '6.69', '', 'relax - Copy-08.png', 'active'),
(22, 5, 48, 'Dress', '12.69', '', 'relax - Copy-15.png', 'active'),
(23, 5, 48, 'Dress (silk)', '18.69', '', 'relax - Copy-15.png', 'active'),
(24, 5, 48, 'Jumpsuit ', '19.69', '', 'relax - Copy-16.png', 'active'),
(26, 5, 50, 'Blazer', '8.69', '', 'relax - Copy-10.png', 'active'),
(27, 5, 50, 'Overcoat ', '16.69', '', 'relax - Copy-13.png', 'active'),
(28, 5, 50, 'Waistcost ', '6.69', '', 'relax - Copy-21.png', 'active'),
(29, 5, 50, 'Down Coat', '19.69', '', 'relax - Copy-14.png', 'active'),
(30, 5, 42, 'Suit jacket ', '8.69', '', 'relax - Copy-10.png', 'active'),
(31, 5, 52, 'Suit trousers ', '7.69', '', 'relax - Copy-09.png', 'active'),
(33, 5, 47, 'Jeans ', '6.69', '', 'relax - Copy-08.png', 'active'),
(34, 5, 52, 'Dinner jacket ', '8.69', '', 'relax - Copy-10.png', 'active'),
(35, 5, 52, 'Two piece suit ', '12.69', '', 'relax - Copy-23.png', 'active'),
(36, 5, 52, 'three piece suit ', '17.69', '', 'relax - Copy-20.png', 'active'),
(37, 5, 52, 'Waistcoat', '6.69', '', 'relax - Copy-21.png', 'active'),
(38, 5, 52, 'Two piece morning suit ', '12.69', '', 'relax - Copy-23.png', 'active'),
(39, 5, 52, 'Three piece Morning suit ', '17.69', '', 'relax - Copy-20.png', 'active'),
(40, 5, 51, 'Tie ', '4.69', '', 'relax - Copy-27.png', 'active'),
(41, 5, 51, 'Underwear ', '1.99', '', 'relax - Copy-26.png', 'active'),
(42, 5, 51, 'socks ', '1.99', '', 'relax - Copy-25.png', 'active'),
(43, 5, 51, 'scarf', '5.69', '', 'relax - Copy-24.png', 'active'),
(44, 5, 53, 'Apron', '2.69', '', 'relax - Copy-28.png', 'active'),
(45, 5, 53, 'Chef jacket', '8.69', '', 'relax - Copy-29.png', 'active'),
(46, 5, 53, 'Tea towels', '2', '', 'relax - Copy-37.png', 'active'),
(48, 5, 53, 'Hand towel', '2', '', 'relax - Copy-37.png', 'active'),
(50, 5, 53, 'chef trousers ', '7.69', '', 'relax - Copy-30.png', 'active'),
(51, 5, 54, 'Bed sheet (single)', '5.69', '', 'relax - Copy-32.png', 'active'),
(52, 5, 54, 'Bed sheet (Double) ', '7.69', '', 'relax - Copy-32.png', 'active'),
(53, 5, 54, 'Bed sheet (King)', '7.69', '', 'relax - Copy-32.png', 'active'),
(54, 5, 54, 'Bed sheet (super King)', '9.69', '', 'relax - Copy-32.png', 'active'),
(55, 5, 54, 'Blanket (single)', '12.69', '', 'relax - Copy-34.png', 'active'),
(56, 5, 54, 'Blanket (double)', '15.69', '', 'relax - Copy-34.png', 'active'),
(57, 5, 54, 'Mattress protector (single)', '6.69', '', 'relax - Copy-34.png', 'active'),
(58, 5, 54, 'Mattress protector (double)', '7.69', '', 'relax - Copy-34.png', 'active'),
(59, 5, 54, 'Mattress protector (King)', '9.69', '', 'relax - Copy-34.png', 'active'),
(60, 5, 54, 'Duvert cover (single)', '7.69', '', 'relax - Copy-34.png', 'active'),
(61, 5, 54, 'Duvet Cover (Double)', '9.69', '', 'relax - Copy-34.png', 'active'),
(62, 5, 54, 'Duvet Cover (king)', '9.69', '', 'relax - Copy-34.png', 'active'),
(63, 5, 54, 'Duvet Cover (super King) ', '12.69', '', 'relax - Copy-34.png', 'active'),
(64, 5, 54, 'Pillow case ', '2', '', 'relax - Copy-33.png', 'active'),
(65, 3, 29, 'Cardigan', '4.69', '', 'relax - Copy-02.png', 'active'),
(66, 3, 29, 'Blouse', '3.69', '', 'relax - Copy-04.png', 'active'),
(67, 3, 29, 'Blouse (Silk)', '5.69', '', 'relax - Copy-04.png', 'active'),
(68, 3, 29, 'Jumper', '4.69', '', 'relax - Copy-02.png', 'active'),
(69, 3, 29, 'Polo', '2.69', '', 'relax - Copy-03.png', 'active'),
(70, 3, 14, 'T-shirt', '2.69', '', 'relax - Copy-05.png', 'active'),
(71, 3, 30, 'Short', '3.69', '', 'relax - Copy-07.png', 'active'),
(72, 3, 30, 'Skirts', '3.69', '', 'relax - Copy-06.png', 'active'),
(73, 3, 30, 'Trousers', '4.69', '', 'relax - Copy-08.png', 'active'),
(74, 3, 30, 'Jeans', '4.69', '', 'relax - Copy-08.png', 'active'),
(76, 3, 31, 'Dress', '8.69', '', 'relax - Copy-15.png', 'active'),
(77, 3, 31, 'Dress Silk', '12.69', '', 'relax - Copy-15.png', 'active'),
(78, 3, 31, 'Jumpsuit', '8.69', '', 'relax - Copy-16.png', 'active'),
(79, 3, 32, 'Blazer', '6.69', '', 'relax - Copy-19.png', 'active'),
(81, 3, 32, 'Down coat', '7.69', '', 'relax - Copy-14.png', 'active'),
(82, 5, 32, 'Overcoat', '7.69', '', 'relax - Copy-13.png', 'active'),
(83, 3, 34, 'Apron', '2', '', 'relax - Copy-28.png', 'active'),
(84, 3, 34, 'Chef jacket', '4.69', '', 'relax - Copy-29.png', 'active'),
(85, 3, 34, 'Chef trousers', '4.69', '', 'relax - Copy-30.png', 'active'),
(86, 3, 34, 'Tea towel', '1', '', 'relax - Copy-31.png', 'active'),
(87, 3, 35, 'Bed sheet (single)', '3.69', '', 'relax - Copy-32.png', 'active'),
(88, 3, 35, 'Bed sheet (Double)', '5.69', '', 'relax - Copy-32.png', 'active'),
(89, 3, 35, 'Bed sheet (King)', '5.69', '', 'relax - Copy-32.png', 'active'),
(90, 3, 35, 'Bed sheet (Super King)', '8.69', '', 'relax - Copy-32.png', 'active'),
(91, 3, 35, 'Blanket (single)', '8.69', '', 'relax - Copy-34.png', 'active'),
(92, 3, 35, 'Blanket (double)', '12.69', '', 'relax - Copy-34.png', 'active'),
(93, 3, 35, 'Mattress protector (single)', '4.69', '', 'relax - Copy-34.png', 'active'),
(94, 3, 35, 'Mattress protector (double)', '6.69', '', 'relax - Copy-34.png', 'active'),
(95, 3, 35, 'Mattress protector (King)', '6.69', '', 'relax - Copy-34.png', 'active'),
(96, 3, 35, 'Duvet cover (single)', '5.69', '', 'relax - Copy-35.png', 'active'),
(97, 3, 35, 'Duvet cover (double)', '7.69', '', 'relax - Copy-35.png', 'active'),
(98, 3, 35, 'Duvet cover (king)', '7.69', '', 'relax - Copy-35.png', 'active'),
(99, 3, 35, 'Duvet cover (super king)', '9.69', '', 'relax - Copy-35.png', 'active'),
(100, 3, 35, 'Pillow case', '2', '', 'relax - Copy-36.png', 'active'),
(101, 7, 37, 'white Bed sheet (single)', '2', '', 'relax - Copy-35.png', 'active'),
(102, 10, 38, 'Cardigan', '7.69', '', 'relax - Copy-02.png', 'active'),
(103, 10, 38, 'Jumper', '7.69', '', 'relax - Copy-02.png', 'active'),
(104, 10, 38, 'Polo', '3.69', '', 'relax - Copy-03.png', 'active'),
(105, 10, 38, 'Blouse', '5.69', '', 'relax - Copy-04.png', 'active'),
(106, 10, 38, 'Blouse (Silk)', '7.69', '', 'relax - Copy-04.png', 'active'),
(107, 10, 38, 'T-shirt', '3.69', '', 'relax - Copy-05.png', 'active'),
(108, 10, 39, 'Shorts', '5.69', '', 'relax - Copy-07.png', 'active'),
(109, 10, 39, 'Skirts', '6.69', '', 'relax - Copy-06.png', 'active'),
(110, 10, 39, 'Skirts (silk', '9.69', '', 'relax - Copy-07.png', 'active'),
(111, 10, 39, 'Trousers', '6.69', '', 'relax - Copy-18.png', 'active'),
(112, 10, 39, 'Delicate bottoms', '9.69', '', 'relax - Copy-09.png', 'active'),
(113, 10, 40, 'Dress', '9.69', '', 'relax - Copy-15.png', 'active'),
(114, 10, 40, 'Jumpsuit', '19.69', '', 'relax - Copy-16.png', 'active'),
(115, 10, 40, 'Delicate Dresses ', '14.69', '', 'relax - Copy-15.png', 'active'),
(116, 10, 41, 'Blazer', '8.69', '', 'relax - Copy-17.png', 'active'),
(117, 10, 41, 'Jacket', '8.69', '', 'relax - Copy-12.png', 'active'),
(118, 10, 41, 'Overcoat', '16.69', '', 'relax - Copy-13.png', 'active'),
(119, 10, 41, 'Down coat', '7.69', '', 'relax - Copy-14.png', 'active'),
(120, 10, 42, 'Two piece suit', '12.69', '', 'relax - Copy-23.png', 'active'),
(121, 10, 42, 'Three piece', '17.69', '', 'relax - Copy-20.png', 'active'),
(122, 10, 42, 'Dinner suit', '17.69', '', 'relax - Copy-19.png', 'active'),
(123, 10, 42, 'Suit Jacket', '8.69', '', 'relax - Copy-10.png', 'active'),
(124, 10, 42, 'Suit trouser', '7.69', '', 'relax - Copy-09.png', 'active'),
(128, 13, 56, 'Bath sheets ', '1.50', '100% Egyptian cotton', 'Bathsheet.png', 'active'),
(129, 12, 43, 'white flat sheet (single)', '1.20', '100% Egyptian cotton', 'bedsheet2.png', 'active'),
(130, 12, 43, 'White Flat sheet (double)', '1.50', '100% Egyptian cotton', 'bedsheet2.png', 'active'),
(131, 12, 43, 'White Flat sheet (King)', '1.50', '100% Egyptian cotton', 'bedsheet2.png', 'active'),
(132, 12, 43, 'White flat sheet (Super King)', '1.69', '100% Egyptian cotton', 'bedsheet2.png', 'active'),
(133, 13, 55, 'Both Towels', '1.20', '100% Egyptian cotton', 'bath towels.png', 'active'),
(134, 12, 44, 'White Duvet Cover (Double)', '1.50', '100% Egyptian cotton', 'Duvet.png', 'active'),
(135, 12, 44, 'White Duvet Cover (King)', '1.99', '100% Egyptian cotton', 'Duvet.png', 'active'),
(136, 12, 44, 'White Duvet Cover (Super king)', '1.99', '100% Egyptian cotton', 'Duvet.png', 'active'),
(137, 12, 45, 'White pillowcase', '0.49', '100% Egyptian cotton', 'bedsheet 5.png', 'active'),
(138, 14, 57, 'Full bed set (single)', '17.69', 'The set comes with 2 single bedsheet, 1 duvet cover, 2 pillowcases, 1 bath towels.  All white All Egyptian cotton', 'Duvet.png', 'active'),
(139, 14, 57, 'Full bed set (double)', '19.69', 'The set comes with 2 double bedsheet, 1 duvet cover, 2 pillowcases, 1 bath towels.  All white All Egyptian cotton', 'Duvet.png', 'active'),
(140, 14, 57, 'Full bed set (King)', '21.69', 'The set comes with 2 King size bedsheet, 1 king size duvet cover, 2 pillowcases, 1 bath towels.  All white All Egyptian cotton', 'Duvet.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE `coupon_code` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `val` varchar(255) DEFAULT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`id`, `coupon_code`, `val`, `status`) VALUES
(1, 'firstorder', '15', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `forms_contact`
--

CREATE TABLE `forms_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms_contact`
--

INSERT INTO `forms_contact` (`id`, `name`, `email`, `subject`, `message`, `create_at`, `status`) VALUES
(1, 'amjid khan', 'asad@gmil.com', 'hm.younas22@gmail.com', 'Hello', '2021-09-05 05:42:41', '1'),
(2, 'amjid khan', 'hm.younas22@gmail.com', 'contact ', 'Hello', '2021-09-05 05:43:56', '1'),
(3, 'amjid khan', 'hm.younas22@gmail.com', 'contact ', 'Hello', '2021-09-05 05:56:51', '1'),
(4, 'amjid khan', 'hm.younas22@gmail.com', 'contact ', 'Hello', '2021-09-05 06:00:30', '1'),
(5, 'amjid khan', 'hm.younas22@gmail.com', 'contact ', 'Hello dear', '2021-09-05 06:16:58', '1'),
(6, 'amjid khan', 'hm.younas22@gmail.com', 'contact ', 'Hello ', '2021-09-05 06:18:23', '1'),
(7, 'Reagan', 'tumushabereagan@gmail.com', 'test', 'hi, just testing ', '2021-09-06 13:01:45', '1'),
(8, 'amjid khan', 'hm.younas22@gmail.com', 'contact ', 'dsds', '2021-10-07 15:07:33', '1'),
(9, 'Rudolf Sprague', '9cdali145k@pokesenak.buzz', '', 'Here\'s a cheap and dirty trick for getting more people to your website www.thefreestuffblog.xyz', '2021-10-31 19:11:43', '1'),
(10, 'Michelle Plese', 'MichaelFranculli@gmail.com', 'Reatha Eguizabal', 'Is the offer you posted on www.trafficpros.xyz still valid?', '2021-11-14 19:35:13', '1'),
(11, 'Gavin Rohrich', 'WilfordRzeczycki@hotmail.com', 'Nicolas Valerio', 'Do you need more buyers to your site? I can get people to your website who are specifically looking to buy your stuff. See www.get-customers-now.xyz', '2021-11-22 18:27:25', '1'),
(12, 'Timmy Byrum', 'timmy.byrum@outlook.com', '', 'Submit your site to over 35 advertising websites for free now: https://bit.ly/submityoursitefree', '2021-12-16 16:29:54', '1'),
(13, 'Wilmer Suleski', 'WilsonKalmen@gmail.com', 'Chery Alicuben', 'Congrats on your new site, get it listed here for free and we\'ll start sending people to your site https://1mdr.short.gy/add-your-site', '2022-01-04 15:37:14', '1'),
(14, 'Shayna Tickner', 'AngellaKillingbeck@gmail.com', 'Salina Mule', 'I was wondering if you wanted to submit your new site to our free business directory? https://1mdr.short.gy/submityourwebsite', '2022-01-13 04:08:57', '1'),
(15, 'Kina Gagen', 'RasheedaZaharek@gmail.com', 'Vicente Boenig', 'Give your new site a boost, submit your site now to our free directory and start getting more clients https://1mdr.short.gy/add-your-site', '2022-01-22 15:59:39', '1'),
(16, 'Kraig Landeros', 'MabelleLeckie82955@gmail.com', 'Jin Pentaris', 'Submit your site to over 1000 directories all with one click here> https://1mdr.short.gy/submityourwebsite', '2022-01-28 06:31:59', '1'),
(17, 'Emmanuel Pennello', 'JocelynHuft@gmail.com', 'Jacelyn Culver', 'Submit your site to over 1000 directories all with one click here> https://1mdr.short.gy/submityourwebsite', '2022-02-13 16:12:28', '1'),
(18, 'Quincy Bracker', 'bracker.quincy@gmail.com', '', 'Good job on the new site! Now go ahead and submit it to our free directory here https://bit.ly/submityourwebsite', '2022-02-16 22:10:49', '1'),
(19, 'Grady Zeigler', 'grady.zeigler61@gmail.com', '', 'Submit your site to our 30 directories all with one click here> https://bit.ly/submityourwebsite', '2022-02-23 10:12:44', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_role` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `parent_prod_id` int(11) NOT NULL,
  `child_prod_id` varchar(255) NOT NULL,
  `delivery_days` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `service_id`, `title`, `image`, `date`, `status`) VALUES
(29, 3, 'Tops_Ironin', 'relax - Copy-02.png', '2021-09-05 06:49:46', 'active'),
(30, 3, 'Bottoms', 'relax - Copy-07.png', '2021-09-01 21:18:22', 'active'),
(31, 3, 'Dresses', 'relax - Copy-15.png', '2021-09-01 22:07:29', 'active'),
(32, 3, 'Outerwears', 'photo-1553095066-5014bc7b7f2d.jpg', '2021-09-01 23:46:12', 'active'),
(34, 3, 'Kitchen', 'relax - Copy-29.png', '2021-09-02 01:12:35', 'active'),
(35, 3, 'Bedding', 'relax - Copy-32.png', '2021-09-02 01:13:30', 'active'),
(36, 3, 'Bathroom', 'relax - Copy-38.png', '2021-09-02 01:13:50', 'active'),
(38, 10, 'Tops_cleani', 'relax - Copy-12.png', '2021-09-05 06:58:38', 'active'),
(39, 10, 'Bottoms', 'relax - Copy-18.png', '2021-09-03 03:08:40', 'active'),
(40, 10, 'Dresses', 'relax - Copy-15.png', '2021-09-03 03:16:22', 'active'),
(41, 10, 'Outerwears', 'relax - Copy-12.png', '2021-09-03 03:23:51', 'active'),
(42, 10, 'Suites', 'relax - Copy-23.png', '2021-09-03 03:32:56', 'active'),
(43, 12, 'Bedsheets', 'relax - Copy-35.png', '2021-09-03 15:06:05', 'active'),
(44, 12, 'Duvet cover', 'relax - Copy-35.png', '2021-09-03 17:49:40', 'active'),
(45, 12, 'Pillowcase', 'relax - Copy-32.png', '2021-09-03 15:07:45', 'active'),
(46, 15, 'Tops_washin', 'relax - Copy-02.png', '2021-09-05 06:58:13', 'active'),
(47, 15, 'Bottoms', 'relax - Copy-09.png', '2021-09-03 15:32:30', 'active'),
(48, 15, 'Dresses', 'relax - Copy-15.png', '2021-09-03 15:33:02', 'active'),
(50, 15, 'Outerwear', 'relax - Copy-12.png', '2021-09-03 15:34:51', 'active'),
(51, 15, 'Accessories', 'relax - Copy-24.png', '2021-09-03 15:36:29', 'active'),
(52, 15, 'Suits', 'relax - Copy-23.png', '2021-09-03 15:38:37', 'active'),
(53, 15, 'Kitchen', 'relax - Copy-31.png', '2021-09-03 15:40:30', 'active'),
(54, 15, 'Beddings', 'relax - Copy-32.png', '2021-09-03 15:41:14', 'active'),
(55, 15, 'Bathroom', 'relax - Copy-38.png', '2021-09-03 15:41:47', 'active'),
(56, 13, 'Towels ', 'bath towels.png', '2021-09-04 11:11:39', 'active'),
(57, 14, 'Bed sets', 'bedsheet2.png', '2021-10-31 16:24:09', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `service_address`
--

CREATE TABLE `service_address` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_address`
--

INSERT INTO `service_address` (`id`, `address`) VALUES
(2, '28 Mozang Rd, Mozang Chungi, Lahore, Punjab 54000');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sval` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sid`, `sname`, `sval`) VALUES
(1, 'logo', '2222_10x.png'),
(2, 'partner_icons', '[\"A.png\",\"B.png\",\"C.png\",\"D.png\",\"E.png\",\"f.png\"]');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(255) NOT NULL,
  `sub_status` enum('active','deactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `sub_email`, `sub_status`) VALUES
(4, 'tumushbereagan@gmail.com', 'active'),
(10, 'hm.younas@gmail.com', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subsc_id` int(11) NOT NULL,
  `subsc_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subsc_id`, `subsc_name`) VALUES
(1, 'laundary'),
(2, 'subscription');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `role` enum('admin','subscriber','partner','customer') NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `join_date` datetime NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_val` varchar(255) DEFAULT NULL,
  `coupon_status` int(1) NOT NULL DEFAULT 0,
  `hide_class` enum('d-none') DEFAULT 'd-none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `address`, `contact`, `image`, `role`, `status`, `join_date`, `coupon_code`, `coupon_val`, `coupon_status`, `hide_class`) VALUES
(1, 'bakhtawar shah', 'admin@admin.com', '$2y$10$jtO4yxaUte4VOdla6bm5tOm34PBTpuKNXqbXFQZGmTL64fjoaPJXq', '', '+923007376286', '', 'admin', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(41, 'amjid khan', 'hm.younas22@gmail.com', '1111', 'Address Not Found!', '1111111111', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(43, 'Younas', 'phpfiverrpk@gmail.com', 'XyP3pVAr', 'Address Not Found!', '1111111111', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(44, 'Reagan Tumushabe', 'tumushabereagan@gmail.com', 'dacquq-zarSaz-8tutgo', '154 Brierley, New Addington, Croydon, CR0 9DS', '07540061409', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(45, 'Magdalene  Sakyi ', 'magdalenesakyi22@gmail.com', 'Money22', '28 Croftongate Way, , Lewisham, SE4 2DL', '07983011557', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(46, 'John  Tabor', 'jlstabor@yahoo.co.uk', '1Wrentham', 'Church Of The Transfiguration, 1 Wrentham Avenue, Brent, NW10 3HT', '07733263516', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(47, 'Godfred Junior', 'godfredjnr@gmail.com', 'Kingston3', '43 Corona Road, , Lewisham, SE12 9LS', '07539398934', '', 'customer', 1, '0000-00-00 00:00:00', 'firstorder', '15', 1, 'd-none'),
(48, 'Kellz ', 'Kellzloner1@mail.com', 'Queenmagda1', 'Flat 7, Arnold House, Southwark, SE17 3SU', '+44 7916 593180', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(49, 'Fiona Kivumbi', 'fionakivumbi@hotmail.com', 'Launduary123@', '175 Westmoreland Road, , Bromley, BR2 0TZ', '07852570404', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(50, 'Godfred Junior', 'afrosquaduk@gmail.com', 'Kingston3', '43 Corona Road, , Lewisham, SE12 9LS', '07539398934', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(51, 'Kelvin Ansah', 'kelvinoseiansah@gmail.com', 'eld009', 'Address Not Found!', '0543696916', '', 'customer', NULL, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(52, 'Test 123', 'ansahkelvin0@gmail.com', 'eld009', 'Select Address', '08745414778', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_order`
--
ALTER TABLE `cart_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `child_products`
--
ALTER TABLE `child_products`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `coupon_code`
--
ALTER TABLE `coupon_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms_contact`
--
ALTER TABLE `forms_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `service_address`
--
ALTER TABLE `service_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subsc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_order`
--
ALTER TABLE `cart_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `child_products`
--
ALTER TABLE `child_products`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `coupon_code`
--
ALTER TABLE `coupon_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forms_contact`
--
ALTER TABLE `forms_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `service_address`
--
ALTER TABLE `service_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subsc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
