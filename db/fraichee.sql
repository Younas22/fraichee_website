-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 06:29 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `post_desc` text DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `post_meta_keywords` text DEFAULT NULL,
  `post_meta_desc` text DEFAULT NULL,
  `post_order` int(11) NOT NULL,
  `post_related` varchar(200) DEFAULT NULL,
  `post_img` varchar(255) DEFAULT NULL,
  `post_status` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `post_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`post_id`, `post_title`, `post_slug`, `post_desc`, `cat_id`, `destination_id`, `post_meta_keywords`, `post_meta_desc`, `post_order`, `post_related`, `post_img`, `post_status`, `post_created_at`, `post_updated_at`) VALUES
(17, 'Where to Eat in Rome During Holidays', 'Where-to-Eat-in-Rome-During-Holidays', '<p>UPDATED FOR 2014! There is a widely held misconception that during the Christmas and New Year&rsquo;s holidays, Rome&rsquo;s restaurants shut down and people who don&rsquo;t have the luxury of eating at home are left to scavenge for food wherever they can get it. While one should expect some venues to be closed and many to embrace limited hours and prix fixe menus, visitors to Rome can eat very well during the holidays. It just requires a bit of planning.</p>\r\n\r\n<p>To partake in the traditional Christmas Eve fish feast, head to Il Sanlorenzo, the best place in central Rome to find fresh, local and relatively sustainable fish. Il Sanlorenzo is open at lunch and dinner on Christmas Eve and New Year&rsquo;s Eve.</p>\r\n\r\n<p>A short stroll away on via dei Giubbonari, Roscioli will be open for lunch only on Christmas Eve and on New Year&rsquo;s Eve.</p>\r\n\r\n<p>For fine dining options, try Metamorfosi, which will be open at dinner on New Year&rsquo;s Eve and on New Year&rsquo;s Day, Pipero al Rex, which will be open at lunch and dinner on December 24, 25, 31, and at lunch only on January 1, or All&rsquo;Oro, which will be open throughout the holidays.</p>\r\n\r\n<p>For Roman fare, Cesare al Casaletto will be open for lunch only on December 25th, 26th and January 1st. Near the Vatican, Romeo will be open for lunch only on December 24 and for lunch and dinner on December 31. Flavio al Velavevodetto will be open for lunch on December 24, 25 and 31. Also in Testaccio, La Torricella is open for lunch on December 24. It is open December 24 for lunch, December 25 at lunch and dinner, and for lunch and dinner on New Year&rsquo;s Eve and New Year&rsquo;s Day.</p>\r\n\r\n<p>For international cusine, try Mesob, which will be open throughout the holidays</p>\r\n\r\n<p>A special event will take place at Vino Roma on December 25th at 6:00pm; Hande Leimer is offering a Christmas edition of her new tasting type Wine &amp; Cheese Dinner, with an even more interesting wine selection. For booking and details, visit the Vino Roma site.</p>\r\n\r\n<p>For craft beer check out Birra + in Pigneto, which will always be open, but will close at 8:30pm on Christmas Eve and on New Year&rsquo;s Eve, and Ma Che Siete Venuti a Fa&rsquo; in Trastevere, which will be open from the late afternoon every day this holiday season. These two watering holes are the only places on the list where reservations are not accepted and no food is served.</p>\r\n\r\n<p>It is also worth noting that most Kosher restaurants in the Ghetto will be open on Christmas Eve and Christmas Day.</p>\r\n\r\n<p>You can get the portable version of this list by purchasing my app &ldquo;Katie Parla&rsquo;s Rome&rdquo;, details here and be sure to call all venues in advance before turing up. While the aforementioned openings have been confirmed multiple times, non si sa mai (you never know what can happen!). Buone feste!</p>\r\n', 15, NULL, 'Where to Eat in Rome During Holidays', 'For Roman fare, Cesare al Casaletto will be open for lunch only on December 25th, 26th and January 1st. Near the Vatican, Romeo will be open for lunch only on', 1, '21,25,30,33', 'Screenshot-10.png', 'Yes', '2022-02-09 05:00:00', '2022-02-10 05:00:00'),
(18, 'Flavio Al Velavevodetto in Testaccio', 'Flavio-Al-Velavevodetto-in-Testaccio', '<p>Waaaay back in December 2012, I wrote&nbsp;<a href=\"http://www.parlafood.com/5-places-in-rome-that-need-to-step-up-their-game-in-2013/\" target=\"_blank\">a post</a>&nbsp;in which I put&nbsp;<a href=\"http://www.ristorantevelavevodetto.it/\" target=\"_blank\">Flavio al Velavevodetto</a>(and few other places) on notice. That year, Flavio, a Testaccio-based restaurant specializing in traditional Roman fare, had gone from being&nbsp;completely satisfying to wildly inconsistent, a change that was likely linked to opening a second restaurant, Velavevodetto ai Quiriti in Prati. Service glitches and food failures became increasingly common, which isn&rsquo;t unusual for a restaurant to suffer following expansion. Many readers and app users reported negative experiences&ndash;so I was concerned&ndash;but I remained optimistic that things would turn around.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fast forward to December 2014 and Flavio al Velavevodetto has more than just rebounded. It has surpassed its earlier reputation and is one of the few places in Rome that manages to maintain an extremely high level of quality, both in its raw ingredients and its final dishes. Meat comes from the restaurant&rsquo;s own herds and flocks, while seasonal vegetables are cultivated on their land in northern Lazio. Ingredients are transformed into superb Roman classics like&nbsp;<em>polpette di bollito</em>&nbsp;(fried disks of shredded beef),&nbsp;<em>tonnarelli cacio e pepe</em>&nbsp;(fresh pasta with Pecorino Romano cheese and black pepper),&nbsp;<em>rigatoni alla carbonara, rigatoni alla gricia</em>&nbsp;(pasta with guanciale, Pecorino Romano cheese and black pepper),&nbsp;<em>fettucine con rigaglie di pollo</em>(fettucine with chicken innards),&nbsp;<em>coda alla vaccinara</em>&nbsp;(oxtail braised with tomato and celery),&nbsp;<em>coratella di manzetta maremanna</em>&nbsp;(veal heart, lungs and liver), and&nbsp;<em>trippa alla romana</em>&nbsp;(tripe cooked with tomato, Roman mint and Pecorino Romano), just to name a few of the menu&rsquo;s many highlights. The wine selection is wonderful, with a healthy number of quality organic wines from Lazio, plus some interesting natural wines from other Italian regions, which are well-suited to the cucina romana.</p>\r\n\r\n<p>Throw in a historic setting (the restaurant is based inside the&nbsp;<a href=\"http://www.turismoroma.it/cosa-fare/monte-dei-cocci?lang=en\" target=\"_blank\">Monte dei Cocci</a>, an ancient Roman archeological site) and Flavio al Velavevodetto is pretty close to perfect. There&nbsp;<em>are</em>&nbsp;still occasional missteps, especially regarding the service. As a regular, I don&rsquo;t experience many of the shortcomings app users and readers have cited in recent emails to me, but last week, a &euro;6 vegetable side dish, which was aggressively over-salted, appeared on the final bill after we reported it was inedible. Regardless of these occasional service glitches, the food and atmosphere are stellar and Flavio and his team are doing some of the finest&nbsp;<em>cucina romana</em>&nbsp;anywhere. Bump it to the top of your Rome dining list, if it&rsquo;s not already there.</p>\r\n\r\n<p><a href=\"http://www.ristorantevelavevodetto.it/\" target=\"_blank\">Flavio al Velavevodetto</a><br />\r\nVia Monte di Testaccio 97<br />\r\n+3906 574 4194<br />\r\nOpen: Daily, including holidays</p>\r\n', 15, NULL, 'Flavio Al Velavevodetto in Testaccio', 'Waaaay back in December 2012, I wrote a post in which I put Flavio al Velavevodetto(and few other places) on notice. That year, Flavio, a Testaccio-basedTestaccio میں فلاویو امام Velavevodetto', 2, '17,25,30,35', 'Screenshot-10-efa85.png', 'Yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'The Tiber River’s Last Eel Fishermen', 'The-Tiber-River-s-Last-Eel-Fishermen', '<p>Cesare and Alfredo Bergamini have been fishing for eels in the Tiber since 1947. Now 74 and 77, respectively, the brothers learned the profession from their grandfather. In post-war Rome, they shared the water with other eel fishermen&ndash;and a great deal more eels. But falling eel stock caused by pollution coupled with spiraling profitability due to collapsed demand has driven others away from the trade.</p>\r\n\r\n<p>On a recent visit to the Bergamini brothers&rsquo; dock in Mezzocamino in southwestern Rome, Cesare recounted his daily routine while repairing his handmade nets. He goes out in his dinghy (water conditions permitting) at 7:00 each morning to check his eel traps, around 300 hand-crafted funnel-like nets. He said the quantity of eels they catch depends on the river level. Last week, the Tiber had risen more than 4 meters due to heavy rains, which meant Cesare couldn&rsquo;t lay his nets and it was impossible to catch anything.</p>\r\n\r\n<p>Decades ago, his haul on a good day would have been several hundred kilos, while today the catch is severely diminished. Cesare explained that the eels he catches are healthy and adapt to the Tiber&rsquo;s conditions. But the use of acidic compounds to purify the water upriver have decimated the eel&rsquo;s food stock, dramatically decreasing their number. He ponders this ecological crime while darning a net with a homemade needle. It&rsquo;s just one offense of many against the river, he explains. He gestures to a collapsed embankment downriver, cursing the expensive public work that was doomed to fail due to its location and currents. Local authorities mismanage the Tiber and make decisions about its maintenance that affect the river&rsquo;s ecosystem without consulting the very people who know the river best. It&rsquo;s an often told tale of the city&rsquo;s exploitation of its resources and people. The balance of the river is constantly threatened, but the Bergamini brothers and their eels bear witness to this harsh reality and survive.</p>\r\n', 16, NULL, 'The Tiber River’s Last Eel Fishermen', 'Cesare and Alfredo Bergamini have been fishing for eels in the Tiber since 1947. Now 74 and 77, respectively, the brothers learned the profession from their', 3, '17,18,32,33', 'Screenshot-10-9def7.png', 'Yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Hotel Review: DOM Hotel In Rome', 'Hotel-Review-DOM-Hotel-In-Rome', '<p><small>A very pricey cocktail in progress on the roof of the new-ish DOM Hotel.</small></p>\r\n\r\n<p>The DOM Hotel, a five-star luxury retreat, opened on Via Giulia in central Rome a little less than a year ago. The place is a good value, in relation to its category, and the location is hard to beat. I weigh DOM&rsquo;s pros and cons in this Sunday&rsquo;s NYT Travel section (or read online&nbsp;<a href=\"http://www.nytimes.com/2014/11/30/travel/hotel-review-dom-hotel-in-rome.html?ref=travel\" target=\"_blank\">here</a>).</p>\r\n', 15, NULL, 'Hotel Review: DOM Hotel In Rome', 'A very pricey cocktail in progress on the roof of the new-ish DOM Hotel.', 4, '17,18,19,33', 'Screenshot-10-dd122.png', 'Yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `cat_slug` varchar(250) DEFAULT NULL,
  `cat_status` enum('Yes','No') NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`cat_id`, `cat_name`, `cat_slug`, `cat_status`) VALUES
(15, 'Travel and Foods', 'Travel-and-Foods', 'Yes'),
(16, 'Adventure', 'Adventure', 'Yes'),
(17, 'Shopping and Fashion', 'Shopping-and-Fashion', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `cart_order`
--

CREATE TABLE `cart_order` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` bigint(20) DEFAULT NULL,
  `price` double NOT NULL,
  `quantity` int(255) DEFAULT NULL,
  `status` enum('pending','approved','cancelled') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_order`
--

INSERT INTO `cart_order` (`cart_id`, `order_id`, `item_id`, `price`, `quantity`, `status`) VALUES
(1, 1, 65, 4.69, 1, 'pending'),
(2, 1, 103, 7.69, 1, 'pending'),
(3, 1, 15, 6.69, 1, 'pending'),
(4, 2, 65, 4.69, 2, 'pending'),
(5, 3, 65, 4.69, 2, 'pending'),
(6, 3, 104, 3.69, 2, 'pending'),
(7, 4, 115, 14.69, 1, 'pending');

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
  `order_type` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `note_box` text DEFAULT NULL,
  `other_address` text DEFAULT NULL,
  `pickup_date` varchar(255) DEFAULT NULL,
  `delivery_date` varchar(255) DEFAULT NULL,
  `first_day` varchar(255) DEFAULT NULL,
  `second_day` varchar(255) DEFAULT NULL,
  `therd_day` varchar(255) DEFAULT NULL,
  `fourth_day` varchar(255) DEFAULT NULL,
  `invoice_id` varbinary(255) DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `card_holder_name` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_type`, `order_date`, `note_box`, `other_address`, `pickup_date`, `delivery_date`, `first_day`, `second_day`, `therd_day`, `fourth_day`, `invoice_id`, `amount`, `card_holder_name`, `card_type`, `status`) VALUES
(1, 53, 'laundry', '2022-03-21 05:10:48', 'abc', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', '2022-03-21', '2022-03-29', NULL, NULL, NULL, NULL, 0x4635373534, '23.06', 'Younas', 'visa', '0'),
(2, 53, 'laundry', '2022-03-21 19:07:23', NULL, 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', '2022-03-22', '2022-03-30', NULL, NULL, NULL, NULL, 0x4631373934, '13.37', 'Younas', 'visa', '1'),
(3, 54, 'laundry', '2022-03-23 17:29:04', 'abc', 'Phptravels software house Commercial Area Cavalry Ground, 65, Lahore, Punjab 54000', '2022-03-23', '2022-03-31', NULL, NULL, NULL, NULL, 0x4634363732, '20.75', 'Younas', 'visa', '1'),
(4, 54, 'laundry', '2022-03-23 17:33:53', 'abc', 'chak 22-10-R kacha khuh', '2022-03-23', '2022-04-08', NULL, NULL, NULL, NULL, 0x4635333334, '18.68', 'Younas', 'visa', '1');

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
  `name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `image` varchar(5000) DEFAULT NULL,
  `role` enum('admin','subscriber','partner','customer') NOT NULL DEFAULT 'customer',
  `status` tinyint(1) DEFAULT 1,
  `join_date` datetime NOT NULL DEFAULT current_timestamp(),
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
(44, 'Reagan Tumushabe', 'tumushabereagan@gmail.com', 'dacquq-zarSaz-8tutgo', '154 Brierley, New Addington, Croydon, CR0 9DS', '07540061409', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(51, 'Kelvin Ansah', 'kelvinoseiansah@gmail.com', 'eld009', 'Address Not Found!', '0543696916', '', 'customer', NULL, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(52, 'Test 123', 'ansahkelvin0@gmail.com', 'eld009', 'Select Address', '08745414778', '', 'customer', 1, '0000-00-00 00:00:00', NULL, NULL, 0, 'd-none'),
(53, 'amjid khan', 'abc@admin.com', '$2y$10$Zb4i6aB4F1yy2hfjaOLWj.gRftarhr95WepE9JUowO51eV7RPEM1m', '141 Brierley, New Addington, Croydon, CR0 9DS', '3047222723', 'photo-1553095066-5014bc7b7f2d.jpg', 'customer', 1, '2022-03-21 10:06:37', NULL, NULL, 0, 'd-none'),
(54, 'Younas', 'hm.younas22@gmail.com1', '$2y$10$CP9s6hzb4o2JsamVQVtSD.UxlZx6YwaicxRW79qzxSRNCr0vBI/SK', NULL, '3047222723', NULL, 'customer', 1, '2022-03-23 22:28:16', NULL, NULL, 0, 'd-none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cart_order`
--
ALTER TABLE `cart_order`
  ADD PRIMARY KEY (`cart_id`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cart_order`
--
ALTER TABLE `cart_order`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
