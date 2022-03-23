-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 12:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wayshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1, '2020-09-21 15:27:47', '2020-09-21 11:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text_style` varchar(255) NOT NULL,
  `sort_order` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `text_style`, `sort_order`, `content`, `link`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To <br> Thewayshop', 'text-left', 1, 'See how your users experience your website in realtime or view\r\ntrends <br> to see any changes in performance over time', '#', 1, '74813.jpg', '2019-11-25', '2019-12-03'),
(2, 'Welcome To <br> Thewayshop', 'text-center', 2, 'See how your users experience your website in realtime or view\r\ntrends <br> to see any changes in performance over time', '#', 1, '49426.jpg', '2019-11-27', '2019-12-03'),
(3, 'Welcome To <br> Thewayshop', 'text-right', 3, 'See how your users experience your website in realtime or view\r\ntrends <br> to see any changes in performance over time.', '#', 1, '59372.jpg', '2019-11-29', '2019-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `product_color`, `size`, `price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(6, 2, 'Black T-Shirt', 'b-t-shirt', 'bts001', 'Small', '1000', 2, 'waseh@gmail.com', '6rHLMbZoDjjwXmYTm7FWMsLdjyAdkpFkM16V3FE2', NULL, NULL),
(7, 1, 'White T Shirt', 'wts001', 'White', 'Small', '500', 1, '', 'BMOIA5qpF4glTzioykLzLgNSMCNFDtR8Lg95cuCO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mens Wear', 'mens-wear', 'Mens Wear', 1, '2019-11-18', '2020-09-19'),
(2, 0, 'Womens Wear', 'womens-wear', 'Womens Wear', 1, '2019-11-18', '2019-12-30'),
(3, 0, 'Mens Shoes', 'mens-shoes', 'Mens Shoes', 1, '2019-11-18', '2019-12-30'),
(4, 0, 'Kids Wear', 'kids-wear', 'Kids Wear', 1, '2019-11-19', '2019-12-30'),
(5, 0, 'Bags', 'bags', 'Bags', 1, '2019-11-19', '2019-11-19'),
(7, 0, 'Women Shoes', 'women-shoes', 'Women Shoes', 1, '2019-11-23', '2019-11-23'),
(8, 1, 'White T-Shirt', 'white-t-shirt', 'White T-Shirt', 1, '2019-12-04', '2019-12-04'),
(9, 1, 'Black T-shirts', 'Black-t-shirts', 'Black T-shirts', 1, '2019-12-30', '2019-12-30'),
(10, 1, 'Casual Shirts', 'casual-shirts', 'Casual Shirts', 1, '2019-12-30', '2019-12-30'),
(11, 2, 'Womens Shirts', 'womens-shirts', 'Womens Shirts', 1, '2019-12-30', '2019-12-31'),
(12, 2, 'Womens Trousers', 'womens-trousers', 'Womens Trousers', 1, '2019-12-30', '2019-12-30'),
(13, 3, 'Black Mens Shoes', 'black-mens-shoes', 'Black Mens Shoes', 1, '2019-12-30', '2020-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL,
  `amount_type` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AIMY001', 250, 'Fixed', '2020-09-20', 1, '2020-02-15', '2020-05-16'),
(3, 'AIMY002', 10, 'Percentage', '2020-05-31', 1, '2020-02-17', '2020-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_addresses`
--

INSERT INTO `delivery_addresses` (`id`, `user_id`, `user_email`, `name`, `address`, `city`, `state`, `country`, `pincode`, `mobile`, `updated_at`, `created_at`) VALUES
(1, 3, 'amaan2@gmail.com', 'Amaan', 'sknsk', 'Punjab', 'Lahore', 'Pakistan', '2525', '37637637636', '2020-06-20', '2020-04-25'),
(2, 5, 'alwaz@gmail.com', 'Alwaz', 'E-417/a peer colony lahore', 'Lahore', 'Punjab', 'Pakistan', '54000', '387387378', '2020-05-06', '2020-05-06'),
(3, 6, 'jon@gmail.com', 'John', 'E-417/a peer colony lahore', 'Lahore', 'Punjab', 'Pakistan', '54000', '387387378', '2020-05-07', '2020-05-07'),
(5, 8, 'waseh@gmail.com', 'waseh', 'farooka, sahiwal, Sargodha, Punjab', 'Sargodha', 'Punjab', 'Pakistan', '123', '123541513', '2020-09-19', '2020-09-19'),
(7, 8, 'waseh@gmail.com', 'waseh', 'farooka,Sargodha,punjab', 'Sargodha', 'punjab', 'Pakistan', '4400', '03458655987', '2020-09-20', '2020-09-20'),
(8, 8, 'waseh@gmail.com', 'waseh', 'farooka,Sargodha,punjab', 'Sargodha', 'punjab', 'Pakistan', '4400', '03458655987', '2020-09-20', '2020-09-20'),
(9, 8, 'waseh@gmail.com', 'waseh', 'farooka,Sargodha,punjab', 'Sargodha', 'punjab', 'Pakistan', '4400', '03458655987', '2020-09-20', '2020-09-20'),
(10, 8, 'waseh@gmail.com', 'waseh', 'farooka,Sargodha,punjab', 'Sargodha', 'punjab', 'Pakistan', '4400', '03458655987', '2020-09-20', '2020-09-20'),
(11, 8, 'waseh@gmail.com', 'waseh', 'farooka,Sargodha,punjab', 'Sargodha', 'punjab', 'Pakistan', '4400', '03458655987', '2020-09-20', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `shipping_charges` float NOT NULL DEFAULT 0,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_amount` float NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `grand_total` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_email`, `name`, `address`, `city`, `state`, `pincode`, `country`, `mobile`, `shipping_charges`, `coupon_code`, `coupon_amount`, `order_status`, `payment_method`, `grand_total`, `created_at`, `updated_at`) VALUES
(11, 8, 'waseh@gmail.com', 'waseh', 'farooka, sahiwal, Sargodha, Punjab', 'Sargodha', 'Punjab', '123', 'Pakistan', '123541513', 0, '', 0, 'new', 'cod', 2050, '2020-09-20 00:00:00', '2020-09-20 08:54:59'),
(12, 8, 'waseh@gmail.com', 'waseh', 'farooka, sahiwal, Sargodha, Punjab', 'Sargodha', 'Punjab', '123', 'Pakistan', '123541513', 0, 'Not Used', 0, 'In Process', 'cod', 2100, '2020-09-20 09:19:00', '2020-09-20 23:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `user_id`, `product_id`, `product_code`, `product_name`, `product_color`, `product_size`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(10, 11, 8, 1, 'MCBS001', 'Mens Casual Blue Shirt', 'Blue', 'Small', 1000, 1, '2020-09-20', '2020-09-20 08:54:59'),
(11, 11, 8, 2, 'BMS001', 'Black Mens Shoes', 'Black', '8', 1050, 1, '2020-09-20', '2020-09-20 08:54:59'),
(12, 12, 8, 4, 'MCBS001', 'Mens Casual Blue Shirt', 'Blue', 'Medium', 1100, 1, '2020-09-20', '2020-09-20 09:25:18'),
(13, 12, 8, 5, 'b-t-shirt', 'Black T-Shirt', 'bts001', 'Small', 1000, 1, '2020-09-20', '2020-09-20 09:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `featured_products` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `color`, `description`, `price`, `image`, `status`, `featured_products`, `created_at`, `updated_at`) VALUES
(1, 8, 'White T Shirt', 'wts001', 'White', 'White T Shirt', 500, '94961.jpg', 1, 1, '2019-11-19', '2020-01-04'),
(2, 9, 'Black T-Shirt', 'b-t-shirt', 'bts001', 'Black T-Shirt', 1000, '56281.jpg', 1, 1, '2019-12-05', '2020-09-21'),
(3, 10, 'Mens Casual Blue Shirt', 'MCBS001', 'Blue', 'Mens Casual Blue Shirt', 1000, '55400.jpg', 1, 1, '2020-01-09', '2020-01-09'),
(4, 11, 'Womens Pink T-Shirt', 'WPS001', 'Pink', 'Womens Pink T-Shirt', 750, '38573.jpg', 1, 0, '2020-01-09', '2020-09-21'),
(5, 12, 'Women Red Trouser', 'WRT001', 'Red', 'Women Red Trouser', 850, '62571.jpg', 1, 1, '2020-01-09', '2020-01-09'),
(6, 13, 'Black Mens Shoes', 'BMS001', 'Black', 'Black Mens Shoes', 1000, '54379.jpg', 1, 1, '2020-01-09', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `sku`, `size`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'WTS001-S', 'Small', 800.00, 5, '2019-12-12', '2020-09-21'),
(3, 1, 'WTS001-L', 'Large', 1200.00, 5, '2019-12-12', '2020-09-21'),
(4, 1, 'WTS001-XL', 'Extra Large', 1500.00, 5, '2019-12-12', '2020-09-21'),
(5, 2, 'BTS001-S', 'Small', 800.00, 5, '2019-12-12', '2019-12-12'),
(6, 2, 'BTS001-M', 'Medium', 1000.00, 5, '2019-12-12', '2019-12-12'),
(7, 2, 'BTS001-L', 'Large', 1200.00, 5, '2019-12-12', '2019-12-12'),
(9, 2, 'BTS001-XL', 'Extra Large', 1500.00, 5, '2019-12-16', '2019-12-16'),
(10, 3, 'MCBS001-S', 'Small', 1000.00, 5, '2020-01-09', '2020-01-09'),
(11, 3, 'MCBS001-M', 'Medium', 1100.00, 5, '2020-01-09', '2020-01-09'),
(12, 3, 'MCBS001-L', 'Large', 1150.00, 5, '2020-01-09', '2020-01-09'),
(13, 3, 'MCBS001-XL', 'Extra Large', 1200.00, 5, '2020-01-09', '2020-01-09'),
(14, 4, 'WPS001-S', 'Small', 750.00, 5, '2020-01-09', '2020-01-09'),
(15, 4, 'WPS001-M', 'Medium', 800.00, 5, '2020-01-09', '2020-01-09'),
(16, 4, 'WPS001-L', 'Large', 900.00, 5, '2020-01-09', '2020-01-09'),
(17, 4, 'WPS001-XL', 'Extra Large', 1000.00, 5, '2020-01-09', '2020-01-09'),
(19, 5, 'WRT001-S', 'Small', 850.00, 5, '2020-01-09', '2020-01-09'),
(20, 5, 'WRT001-M', 'Medium', 900.00, 5, '2020-01-09', '2020-01-09'),
(21, 5, 'WRT001-L', 'Large', 950.00, 5, '2020-01-09', '2020-01-09'),
(22, 5, 'WRT001-XL', 'Extra Large', 1000.00, 5, '2020-01-09', '2020-01-09'),
(23, 6, 'BMS001-6', '6', 1000.00, 5, '2020-01-09', '2020-01-09'),
(24, 6, 'BMS001-7', '7', 1000.00, 5, '2020-01-09', '2020-01-09'),
(25, 6, 'BMS001-8', '8', 1050.00, 5, '2020-01-09', '2020-01-09'),
(26, 6, 'BMS001-9', '9', 1100.00, 5, '2020-01-09', '2020-01-09'),
(27, 6, 'BMS001-10', '10', 1150.00, 5, '2020-01-09', '2020-01-09'),
(28, 6, 'BMS001-11', '11', 1200.00, 5, '2020-01-09', '2020-01-09'),
(29, 6, 'BMS001-12', '12', 1200.00, 5, '2020-01-09', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 1, '6507.jpg', '2020-01-09', '2020-01-09'),
(6, 1, '5763.jpg', '2020-01-09', '2020-01-09'),
(7, 2, '6982.jpg', '2020-01-09', '2020-01-09'),
(8, 3, '1687.jpg', '2020-01-09', '2020-01-09'),
(12, 4, '136.jpg', '2020-01-09', '2020-01-09'),
(13, 5, '2101.jpg', '2020-01-09', '2020-01-09'),
(14, 6, '8058.jpg', '2020-01-09', '2020-01-09'),
(15, 2, '7900.jpg', '2020-09-21', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `state`, `city`, `country`, `pincode`, `mobile`, `email_verified_at`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amaan', 'amaan@gmail.com', '', '', '', '', '', '', '2020-05-07 14:14:16', 0, '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-11-07 13:25:42', '2020-05-07 14:14:16'),
(2, 'Amaan', 'amaan1@gmail.com', '', '', '', '', '', '', NULL, 0, '$2y$10$glAFbidXplMRHEPaXvia5OjFFjB5MAysaKstMrXi8eZ4YDy7f/Rdy', NULL, '2020-03-11 12:56:50', '2020-03-11 12:56:50'),
(3, 'Amaan', 'amaan2@gmail.com', 'sknsk', 'Lahore', 'Punjab', 'Pakistan', '2525', '37637637636', '2020-04-28 13:59:06', 0, '$2y$10$mndQWTIKH.6Cp5.hjT4mMeBZ.L2cP1q6rj4q.x8hNWuPbPFURmHE2', NULL, '2020-03-11 12:57:44', '2020-06-20 00:26:44'),
(5, 'Alwaz', 'alwaz@gmail.com', 'E-417/a peer colony lahore', 'Punjab', 'Lahore', 'Pakistan', '54000', '387387378', '2020-04-26 13:21:10', 0, '$2y$10$EqEr/NZbsMqNbxKoQPVz1u8ZCp4WCV7OeQg3Da.9gSc3cfzNIa2tK', NULL, '2020-04-26 13:20:10', '2020-05-06 13:37:54'),
(6, 'John', 'jon@gmail.com', 'E-417/a peer colony lahore', 'Punjab', 'Lahore', 'Pakistan', '54000', '387387378', '2020-04-26 13:27:06', 0, '$2y$10$mIFJ6aD7hpQEs28UOTKxU.Zdk.NA.WHYPGYa3Z8mb62X3/OofDDVO', NULL, '2020-04-26 13:23:58', '2020-05-07 14:00:30'),
(7, 'Saeed Anwar', 'saeed@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '$2y$10$1NLF4W4LbBXmdgJuVlqwJe3irWDjSvdRy9Iluvt2VkULhEP5l4pE2', NULL, '2020-09-19 09:12:25', '2020-09-19 09:12:25'),
(8, 'Abdul Waseh', 'waseh@gmail.com', 'farooka,Sargodha,punjab', 'punjab', 'Sargodha', 'Pakistan', '4400', '03458655987', NULL, 0, '$2y$10$DYSvBlgPUXpiZYnaltzA6OACmCvjGYIEOhUKqUic1LlKIV6QWeXV6', NULL, '2020-09-19 10:44:59', '2020-09-21 01:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
