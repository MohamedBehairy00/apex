-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2024 at 02:36 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u111417349_apex`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('khalid.a.isaacs@icloud.com|2a00:23c5:e0a7:8701:14a0:1922:7c26:aaa3', 'i:2;', 1716744660),
('khalid.a.isaacs@icloud.com|2a00:23c5:e0a7:8701:14a0:1922:7c26:aaa3:timer', 'i:1716744660;', 1716744660),
('khalid.a.isaacs@icloud.com|2a09:bac3:3811:ebe::178:120', 'i:2;', 1715854458),
('khalid.a.isaacs@icloud.com|2a09:bac3:3811:ebe::178:120:timer', 'i:1715854458;', 1715854458),
('khalid.a.isaacs@icloud.com|86.136.234.222', 'i:2;', 1716801428),
('khalid.a.isaacs@icloud.com|86.136.234.222:timer', 'i:1716801428;', 1716801428);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', 1, '2024-04-28 09:48:19', '2024-05-01 05:13:19'),
(2, 'Coffee', 1, '2024-04-28 09:48:19', '2024-05-01 05:13:19'),
(3, 'test', 1, '2024-05-01 10:53:29', '2024-05-01 10:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `full_name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Fadil', 'el.fadil@mail.com', 'Enquiry', 'Hi', '2024-07-05 01:41:47', '2024-07-05 01:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2023_10_18_123343_create_info_table', 1),
(5, '2024_04_25_115747_create_categories_table', 1),
(6, '2024_04_25_120616_create_products_table', 1),
(7, '2024_04_25_120616_create_team_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `sub_title2` varchar(255) DEFAULT NULL,
  `sub_image2` varchar(255) DEFAULT NULL,
  `sub_desc2` text DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `sub_image` varchar(255) DEFAULT NULL,
  `sub_desc` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `sub_title2`, `sub_image2`, `sub_desc2`, `sub_title`, `sub_image`, `sub_desc`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Green Coffee Beans', 'web/assets/img/17172085023.jpeg', 'Robusta', 'web/assets/img/17170635522.png', 'Robusta coffee beans are known for their strong flavors, higher caffeine content, and are typically grown at lower altitudes. They are often used in blends and instant coffee', 'Arabica', 'web/assets/img/17170635521.png', 'Arabica coffee beans are prized for their delicate flavour, grown at higher altitudes, and represent the majority of global coffee production.', 'We proudly partner with farmers in Ethiopia, Uganda, and Cameroon to source exceptional coffee beans. As we continue to grow our network of farmers in Africa and around the world, we are committed to providing you with the finest quality beans sourced from a variety of distinct and exceptional regions.', '2024-05-21 07:03:38', '2024-06-01 02:21:42'),
(2, 'Sesame Oil (Nameer)', '', NULL, NULL, '', NULL, NULL, '', 'Nameer sesame oil is made from premium natural and organic Sudanese sesame seeds, ensuring a high-quality and pure oil known for its rich flavor and potential health benefits. It enhances the taste of dishes, supports heart and bone health, and may possess anti-inflammatory and anxiety-reducing properties. Overall, Nameer sesame oil is a versatile culinary ingredient prized for its quality and nutritional value.<br /><br />\r\n<br />\r\n\"Nameer\" (نمير) in Arabic symbolises purity, clarity, and abundance, reflecting positive attributes. Sesame oil, renowned for its quality and health benefits, is prized for its rich flavour and aroma, making it a popular choice in cooking. <br /><br /><br /><br /><br /><br />\r\nNameer sesame oil offers various potential benefits:<br /><br /><br /><br /><br />\r\n1. Rich Flavour: <br /><br /><br /><br /><br />\r\n    Enhances dishes with its distinct, rich flavour, adding depth to various cuisines.<br /><br /><br /><br /><br />\r\n2. Nutritional Value: <br /><br /><br /><br /><br />\r\n    Contains antioxidants like sesamol and sesaminol, fighting free radicals and reducing oxidative stress.<br /><br /><br /><br /><br />\r\n3. Heart Health: <br /><br /><br /><br /><br />\r\n    Consuming sesame oil may lower blood pressure levels, reducing the risk of cardiovascular diseases.<br /><br /><br /><br /><br />\r\n4. Bone Health: <br /><br /><br /><br /><br />\r\n    With calcium content supporting healthy bones, it may help prevent conditions like osteoporosis.', '2024-05-21 07:04:56', '2024-05-30 19:57:05'),
(3, 'Vegan Rebelicious (Coming Soon)', '', NULL, NULL, '', NULL, NULL, '', 'Revolutionising Veganism with Bold, Delicious, and Ethical Plant-Based <br /><br />\r\n<br />\r\n“Vegan Rebelicious” is a brand that celebrates the rebellious spirit of veganism while offering a diverse range of delicious plant-based products.<br /><br /><br /><br />\r\n• Product Range: <br /><br /><br />\r\n  Vegan Rebelicious offers an array of vegan products, from plant-based meats to pulses, snacks, fitness foods, and convenient options. Explore our     range for delicious vegan options that cater to your lifestyle and taste preferences.\"<br /><br /><br /><br />\r\n• Ethical Commitment: <br /><br /><br />\r\n  The brand is committed to ethical and sustainable practices, such as sourcing ingredients from natural/organic and cruelty-free suppliers and using       eco-friendly packaging.<br /><br /><br /><br />\r\n• Flavourful Innovation: <br /><br /><br />\r\n  Vegan Rebelicious focuses on creating innovative and flavourful vegan alternatives that rival traditional animal-based products, appealing to both   vegans and non-vegans alike.', '2024-05-21 07:04:56', '2024-05-30 19:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `products_details`
--

CREATE TABLE `products_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `sub_section_id` tinyint(4) NOT NULL,
  `sections_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `products_details`
--

INSERT INTO `products_details` (`id`, `title`, `image`, `desc`, `sub_section_id`, `sections_id`, `created_at`, `updated_at`) VALUES
(1, 'Ethiopia', 'web/assets/img/17170638001.jpg', 'Ethiopia, the birthplace of coffee, continues to impress the specialty coffee sector with its rich flavours. The exceptional quality of Ethiopian coffee is attributed to its genetic diversity and varied processing methods, rooted in longstanding producing traditions.', 1, 1, '2024-05-21 07:30:13', '2024-05-30 10:10:00'),
(2, 'Cameroon', 'web/assets/img/17170638002.png', 'Coffee farming in Cameroon is a significant agricultural activity,particularly in the western highlands of the country. The industry is characterised by smallholder farmers who cultivate coffee on small plots of land. The beans are typically grown under shade trees, which helps to maintain soil fertility and biodiversity.<br /><br />\r\nOnce harvested, thecoffee cherries are processed through either the wet or dry method, depending on the preference of the farmers. Despite facing challenges such as fluctuating prices and aging trees, coffee farming remains an important source of income for many rural communities in Cameroon.<br /><br />\r\nWe are instrumental in supporting coffee farmers in Cameroon by offering essential resources and expertise. Our commitment to sustainable farming practices ensures environmental responsibility, while facilitating access to fair markets ensures farmers receive better prices for their coffee produce.', 1, 2, '2024-05-21 07:37:55', '2024-06-04 00:14:49'),
(3, 'Uganda', 'web/assets/img/17170639963.png', 'Ugandan Robusta is esteemed for its bold flavour and robust characteristics. Cultivated in the fertile lands of Uganda, this coffee variety offers a distinct profile cherished by coffee enthusiasts worldwide.<br /><br />\r\nKnown for its high caffeine content and strong flavour, Ugandan Robusta provides a rich and intense coffee experience. It is often favoured for its versatility, making it suitable for various brewing methods, from espresso to French press.<br /><br />\r\nOur Ugandan Robusta beans are carefully selected and graded between 13 to 18, ensuring consistency and quality in every cup.', 2, 3, '2024-05-21 07:53:04', '2024-05-30 10:32:52'),
(4, 'Cameroon', 'web/assets/img/17170639964.png', 'Cameroon Robusta epitomizes boldness and intensity in flavour.<br />\r\nSourced from the fertile regions of Cameroon, this coffee variety delivers a distinct taste revered by coffee enthusiasts globally.', 2, 4, '2024-05-21 07:53:29', '2024-05-30 10:32:52'),
(7, 'Green Arabica Coffee Beans', '', 'Cameroon Arabica coffee is cultivated in various regions across Cameroon, known for their fertile soils and favourable climate conditions for coffee cultivation.<br /><br />\r\nThese regions include the western highlands, particularly around the Bafoussam area, as well as the northwest region around the Bamenda area.<br /><br />\r\nThe diverse microclimates and altitudes in these regions contribute to the unique flavour profiles found in Cameroon Arabica coffee.', 1, 2, '2024-05-21 07:37:55', '2024-06-04 00:14:49'),
(8, 'Flavour Profile', 'web/assets/img/17170639968.png', 'Ugandan Robusta boasts a bold flavour profile characterized by rich,deep notes and a robust body. Expect a distinctive taste that is earthy and full-bodied, with hints of cocoa and nutty undertones.<br />\r\nThis coffee variety often exhibits a pronounced bitterness and a lingering finish, making it an excellent choice for those who enjoy a strong and intense cup of coffee.', 2, 3, '2024-05-21 07:53:29', '2024-05-30 10:32:52'),
(9, 'Flavour Profile', 'web/assets/img/17170639969.png', 'Cameroonian Robusta beans are balanced, chocolatey, earthy, and have a distinct nutty taste.', 2, 4, '2024-05-21 07:37:55', '2024-05-30 10:32:52'),
(10, 'Flavour Profile', 'web/assets/img/171706380010.png', 'Cameroon Arabica offers a nuanced flavour profile characterised by floral and fruity notes, accompanied by a smooth and balanced acidity. <br /><br />\r\nExpect delightful hints of citrus, berries, and sometimes cocoa or nutty undertones, creating a complex and rewarding coffee experience.', 1, 2, '2024-05-21 07:37:55', '2024-06-04 00:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `products_details_shows`
--

CREATE TABLE `products_details_shows` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `sub_section_id` tinyint(4) NOT NULL,
  `section_photo_id` tinyint(4) NOT NULL,
  `country_id` tinyint(4) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `products_details_shows`
--

INSERT INTO `products_details_shows` (`id`, `title`, `image`, `desc`, `sub_section_id`, `section_photo_id`, `country_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Sidamo (Organic)', 'web/assets/img/17171007901.jpg', 'Our organic Sidamo coffee beans are grown in the Sidamo region of Ethiopia, utilizing sustainable and organic farming practices. This ensures that the coffee is cultivated without synthetic pesticides, herbicides, or fertilizers, adhering to stringent organic certification standards.', 1, 1, 0, 0, '2024-05-21 08:51:54', '2024-05-30 20:26:30'),
(2, 'Natural Kaffa Forrest Coffee beans Grades 1 to 4', 'web/assets/img/17170963242.jpg', 'Kaffa coffee beans from Ethiopia are sourced from the Kaffa region, which is considered the birthplace of coffee. <br /><br /><br /><br />\r\nThe Kaffa region boasts ideal conditions for coffee cultivation, including high altitudes, ample rainfall, and nutrient-rich soil. As a result, Kaffa coffee beans are known for their exceptional quality and distinctive flavour profile.', 2, 1, 0, 0, '2024-05-21 08:57:29', '2024-05-30 19:16:08'),
(3, 'Elevated Growth Environment', 'web/assets/img/17170639633.png', 'Cultivated amidst the lush Kaffa forest at elevations ranging from 1,400 to 2,200 meters above sea level, our beans thrive in the unique conditions of high altitudes, resulting in a more intricate flavor profile.', 2, 2, 0, 2, '2024-05-21 09:06:51', '2024-05-30 10:23:43'),
(4, 'Flavour Profile', 'web/assets/img/17170639634.png', 'Kaffa coffee is celebrated for its diverse and robust taste, often boasting hints of wild berries, chocolate, and spices, complemented by a balanced acidity and a velvety texture.', 2, 2, 0, 2, '2024-05-21 09:06:51', '2024-05-30 19:13:52'),
(5, 'Processing Method', 'web/assets/img/17170639635.jpg', '• Natural/Sun-Dried Process: <br /><br />\r\nOur primary method involves sun-drying coffee cherries with the fruit still intact, enhancing the fruity and complex flavor profile, evoking notes of chocolate, floral tones, berries, apricots, and green apples.<br /><br /><br />\r\n• Honey Processed: <br /><br />\r\nThis method yields beans with flavours of chocolate, caramel, honey, plum, and raspberry.<br /><br /><br />\r\n• Anaerobic Processed: <br /><br />\r\nSimilar to the Honey Process, beans processed anaerobically offer a delightful blend of chocolate, caramel, honey, plum, and raspberry notes.', 2, 2, 0, 2, '2024-05-21 09:10:05', '2024-05-30 19:16:08'),
(7, 'Cupping Score', 'web/assets/img/17170639637.png', 'Our Natural Kaffa Forest coffee beans have earned an impressive cupping score of 85+, indicative of their exceptional quality and well-balanced complexity, appealing to discerning specialty coffee enthusiasts.', 2, 2, 0, 2, '2024-05-21 09:10:05', '2024-05-30 10:20:21'),
(10, 'High-Altitude Growth', 'web/assets/img/171706386010.png', 'Grown at elevations ranging from 1,600 to 2,200 meters above sea level, the high altitude allows the beans to develop more complex and nuanced flavours.', 1, 2, 0, 1, '2024-05-21 09:06:51', '2024-05-30 10:11:00'),
(11, 'Flavour Profile', 'web/assets/img/171706386011.png', 'Sidamo coffee is renowned for its distinct flavour, often exhibiting a floral aroma with notes of citrus, berries, and occasionally chocolate. The beans typically have a bright acidity and a smooth, clean finish.', 1, 2, 0, 1, '2024-05-21 09:06:51', '2024-05-30 10:11:00'),
(12, 'Processing Method', 'web/assets/img/171706386012.jpg', '•	Natural Process: <br /><br /><br />\r\nOur primary method, where coffee cherries are dried with the fruit still intact. This enhances the fruity and complex flavour profile, resulting in a richer, fuller body.<br /><br /><br /><br />\r\n<br /><br /><br /><br />\r\n•	Washed Process: <br /><br /><br />\r\nWe also offer some washed varieties, where the cherry pulp is removed before drying. This method produces a cleaner cup with pronounced acidity and a refined taste.', 1, 2, 0, 1, '2024-05-21 09:10:05', '2024-05-31 23:11:55'),
(13, 'Specific Varieties', 'web/assets/img/171706386013.png', 'Sidamo Arbegona: <br /><br /><br /><br />\r\nKnown for its unique flavour profile, Sidamo Arbegona coffee offers floral and citrus notes, often with a hint of berries and chocolate. The high-altitude farming in Arbegona contributes to the development of these complex flavours.<br /><br /><br /><br />\r\nSidamo Bensa:<br /><br /><br /><br />\r\nThis variety is celebrated for its vibrant and intricate flavour profile, featuring citrus fruits, floral hints, and a touch of spice. The beans from Bensa are often processed meticulously to maintain their distinct characteristics.', 1, 2, 0, 1, '2024-05-21 09:10:05', '2024-05-31 23:11:55'),
(14, 'Cupping Score', 'web/assets/img/171706386014.png', 'Our organic Sidamo coffee beans have achieved a cupping score of 87.5, reflecting their high quality and exceptional flavour profile. This score indicates a well-balanced, complex coffee with desirable attributes that appeal to specialty coffee enthusiasts.', 1, 2, 0, 1, '2024-05-21 09:10:05', '2024-05-30 10:11:00'),
(15, 'Certification and Quality', 'web/assets/img/171706386015.png', 'Our Sidamo beans are certified organic, ensuring they meet rigorous standards for environmental sustainability and health. They are processed naturally, preserving the inherent qualities and flavours of the beans.', 1, 2, 0, 1, '2024-05-21 09:10:05', '2024-05-30 10:11:00'),
(16, 'Empowering Women Farmers', 'web/assets/img/171710438816.png', 'Our coffee is sourced from farms that are committed to empowering women. These farms provide opportunities for women to engage in sustainable agriculture, fostering economic empowerment and social responsibility.<br /><br />\r\nBy supporting these farms, we help promote gender equality and improve the livelihoods of women farmers in the Sidamo region.', 1, 2, 0, 1, '2024-05-21 09:10:05', '2024-05-31 23:11:55'),
(17, 'Djimmah Coffee Beans', NULL, 'Djimmah coffee beans from the Djimmah region of Ethiopia boast a rich coffee heritage. Cultivated using organic farming practices, these beans offer a distinct flavour profile with notes of earthiness, spice, and sometimes fruity undertones. Grown at altitudes ranging from 1650 to 2000 meters above sea level, they benefit from the region\'s ideal climate and soil conditions, resulting in high-quality beans. Harvested from November to January and processed using traditional methods like natural sun-drying, these beans preserve their natural flavours and aromas.', 2, 1, 0, 0, '2024-05-21 09:43:12', '2024-05-26 10:01:44'),
(18, 'Country', 'web/assets/img/171706396318.png', 'Ethiopia', 2, 2, 0, 3, '2024-05-21 09:44:20', '2024-05-30 10:12:43'),
(19, 'Region', 'web/assets/img/171706396319.png', 'Djimmah', 2, 2, 0, 3, '2024-05-21 09:44:54', '2024-05-30 10:12:43'),
(20, 'Altitude', 'web/assets/img/171706396320.png', '1650-2000 meters above sea level', 2, 2, 0, 3, '2024-05-21 09:46:03', '2024-05-30 10:12:43'),
(21, 'Variety', 'web/assets/img/171706396321.png', 'Heirloom Ethiopian Varieties', 2, 2, 0, 3, '2024-05-21 09:46:46', '2024-05-30 10:12:43'),
(22, 'Harvest Period', 'web/assets/img/171706396322.png', 'November - January', 2, 2, 0, 3, '2024-05-21 09:46:46', '2024-05-30 10:12:43'),
(23, 'Processing Method', 'web/assets/img/171706396323.jpg', 'Natural, Sun-dried', 2, 2, 0, 3, '2024-05-21 09:47:23', '2024-05-30 10:12:43'),
(24, 'Flavour Profile', 'web/assets/img/171706396324.png', 'Berry fruit, Cinnamon, Lemon citrus<br />\r\nAroma: Hay, Berry fruit<br />\r\nBody: Smooth, Creamy<br />\r\nAcidity: Bright', 2, 2, 0, 3, '2024-05-21 09:48:04', '2024-05-30 19:16:08'),
(25, 'Cameroon', 'web/assets/img/171672850425.png', 'Coffee farming in Cameroon is a significant agricultural activity,particularly in the western highlands of the country. The industry is characterised by smallholder farmers who cultivate coffee on small plots of land. The beans are typically grown under shade trees, which helps to maintain soil fertility and biodiversity. Once harvested, the coffee cherries are processed through either the wet or dry method, depending on the preference of the farmers. Despite facing challenges such as fluctuating prices and aging trees, coffee farming remains an important source of income for many rural communities in Cameroon.<br />\nWe are instrumental in supporting coffee farmers in Cameroon by offering essential resources and expertise. Our commitment to sustainable farming practices ensures environmental responsibility, while facilitating access to fair markets ensures farmers receive better prices for their coffee produce.', 0, 1, 2, 0, '2024-05-21 14:00:13', '2024-05-26 10:01:44'),
(26, 'Green Arabica Coffee Beans', NULL, 'Cameroon Arabica coffee is cultivated in various regions across\nCameroon, known for their fertile soils and favourable climate\nconditions for coffee cultivation. These regions include the western\nhighlands, particularly around the Bafoussam area, as well as the\nnorthwest region around the Bamenda area. The diverse\nmicroclimates and altitudes in these regions contribute to the unique\nflavour profiles found in Cameroon Arabica coffee.', 0, 1, 2, 0, '2024-05-21 14:07:29', '2024-05-26 10:01:44'),
(27, 'Flavour Profile', 'web/assets/img/171672850427.png', 'Cameroon Arabica offers a nuanced flavour profile characterised by floral and fruity notes, accompanied by a smooth and balanced acidity. Expect delightful hints of citrus, berries, and sometimes cocoa or nutty undertones, creating a complex and rewarding coffee experience.', 0, 1, 2, 0, '2024-05-21 14:11:28', '2024-05-26 10:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `relations` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `relations`, `created_at`, `updated_at`) VALUES
(1, 0, '2024-05-28 12:28:10', '2024-05-28 12:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `desc1` text DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `desc3` text DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `desc4` text DEFAULT NULL,
  `title5` varchar(255) DEFAULT NULL,
  `desc5` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `desc`, `title1`, `desc1`, `title2`, `desc2`, `title3`, `desc3`, `title4`, `desc4`, `title5`, `desc5`, `created_at`, `updated_at`) VALUES
(1, 'web/assets/img/ser.png', 'Comprehensive Procurement Solutions<br /><br /><br />\r\nAt Apex Globus, we\'re committed to delivering procurement solutions that add value, enabling organisations, charities, and NGOs to fulfil their missions efficiently. With our proficiency in tender bidding, supplier negotiation, product procurement, quality assurance, and timely delivery, we aim to be the trusted partner for our clients. We provide peace of mind and confidence in every aspect of their procurement activities, ensuring they can focus on what matters most.<br /><br /><br /><br /><br /><br />\r\n<br /><br /><br /><br /><br />\r\nOur services include:', 'Tender Bidding', 'We actively participate in tender bidding processes on behalf of charities and organisations, leveraging our expertise to secure contracts that align with their needs and objectives. Our strategic approach focuses on maximising value while adhering to strict procurement guidelines and requirements.', 'Supplier Sourcing & Negotiation', 'Once a tender is successfully secured, we utilise our extensive network of suppliers to source the required products at the best possible prices. Our team has the expertise to work closely with suppliers to negotiate favourable terms, ensuring cost-effectiveness without compromising on quality.', 'Product Procurement', 'We handle all aspects of product procurement, from sourcing and ordering to logistics and delivery. Our team ensures that the products meet the specified quality standards and are delivered to our clients within the agreed-upon time frame, allowing charities and organisations to focus on their core missions.', 'Quality Assurance', 'We place a strong emphasis on quality assurance throughout the procurement process. Our team conducts rigorous inspections and quality checks to ensure that the products meet or exceed our clients\' expectations, thereby enhancing their trust and confidence in our services.', 'Timely Delivery', 'We understand the importance of timely delivery, especially for charities and organisations with time-sensitive projects or programs. Our efficient logistics and supply chain management processes ensure that the products are delivered to our clients\' locations on time, every time.', '2024-05-26 10:26:42', '2024-06-01 02:19:46'),
(2, 'web/assets/img/talent.png', '', 'Stellar Talent Network STN', 'STN, the Stellar Talent Network, is an up-and-coming talent matching platform poised to revolutionise how businesses and individuals connect with freelance experts. With innovative technology and a commitment to quality, STN simplifies hiring by matching clients with top-tier talent tailored to their needs. Our platform offers intelligent matching, robust project management tools, and a diverse pool of skilled freelancers ready to tackle any project. Join STN today and experience the future of freelance hiring.', NULL, '', NULL, '', NULL, '', NULL, '', '2024-05-26 10:28:47', '2024-05-30 10:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('88zkUEhCerr9VPLasjVDSDkfT0vJTQy7hvG1Jenn', NULL, '156.200.3.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2x4bEtzQjQ5NFNyQTZQS1E2ZHJZT0lsTlh5QjRONThNYlNHRnA4RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vYXBleGdsb2J1cy5jby51ay9zZXJ2aWNlcy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721658900),
('8WS7uIkBCumNqnBdjzfOO7gULdq4lYylik7hpb67', NULL, '156.200.3.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFRDM3lQNDVoZ3NWU2VMVThtTkNiRVdnZUU0U2Q1OFRuZXV0N2hBdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vYXBleGdsb2J1cy5jby51ay90ZWFtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721658781),
('B7yUyabcl3rBRUDsblGmQLAoL0U7Lgs26MvSvxrE', NULL, '35.89.223.81', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjZ3cnVRUk1WNlJITEVpZTVEV2Q3dHlvSHp5TWNWZWZBZDNhYkVlaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vYXBleGdsb2J1cy5jby51ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721639202),
('gX7yf7qUEQp6uQeioya5S3s555PXc1d2NOK8uFol', NULL, '102.46.148.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTdZMFVJT2lpUjNnQ1lqa3RZTlN3bUpwREZRbWFqN0hQOEo4dFExUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vYXBleGdsb2J1cy5jby51ay9zZXJ2aWNlcy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721658897),
('nU52oU2I2im0Ekke5V7vz5ma2puJiYzKSs1LyDrw', NULL, '34.218.51.212', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmRCSUJVMFUyVFlWMk1aT0JvV1RlN3E0WHZ1OWJ3anhSOGk5SFhheCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vYXBleGdsb2J1cy5jby51ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721639209),
('qFv5R9zsEeCiLDnGCaJN9xDp3frwJPR7ijzHlEFE', NULL, '2001:bc8:1201:2b:ba2a:72ff:fed9:efeb', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmoxS29jNFpUWk9GbHdyVDY3d3R4WHhyRE40bGtzWHFmdXJLMmdBayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vYXBleGdsb2J1cy5jby51ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721642686),
('YZ8zyiHXnUbcotmHcXqFvf6XTekMxvDroivmqwff', NULL, '66.249.66.36', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.6478.126 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTlvUmlsMWI0N3MwVTdQQWt6UmltTHZldFlIWjZUVnNkeTZCc2ZQWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vd3d3LmFwZXhnbG9idXMuY28udWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721644705);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Khalid', 'CO-FOUNDER/DIRECTOR', 'Khalid, co-founder of APEX GLOBUS, holds a BEng (Hons) in Telecommunication Engineering from King’s College London and an MSc in Project Management. He brings extensive expertise in procurement from his roles at WorleyParsons and QAPCO, excelling in acquisition and contract negotiations. At APEX GLOBUS, Khalid leads project management and procurement, ensuring successful, innovative, and profitable operations. His commitment to innovation and teamwork drives the company’s success. Outside work, Khalid enjoys fitness, travel, fashion, and supporting Arsenal FC.', '2024-05-01 07:29:48', '2024-05-30 19:37:51'),
(2, 'Abbas', 'CO-FOUNDER/DIRECTOR', 'Abbas graduated with honours from the University of Sudan with a Bachelor\'s in Computer Science. He transitioned into a directorial role within his family’s business, amassing over two decades of experience in the dairy and foodstuffs industry. His career spans regions like Dubai, Cairo, Kenya, and Rwanda, managing multi-sector businesses including mining and power generation. As a co-founder of APEX GLOBUS, Abbas’s leadership, enriched by his vast portfolio of clients and suppliers, forms the foundation of the company\'s success. His extensive expertise drives APEX GLOBUS forward.', '2024-05-01 07:37:16', '2024-05-30 19:30:05'),
(3, 'Joshua', 'DIRECTOR', 'Joshua is a seasoned import-export professional with 15+ years of success in navigating complex business landscapes. He excels in turning challenges into profitable ventures, demonstrating a talent for devising growth-oriented solutions. Joshua\'s expertise is crucial to APEX GLOBUS, particularly in client acquisition and negotiation. Outside of work, he enjoys playing basketball, highlighting his passion for sports and maintaining a balanced lifestyle.', '2024-05-01 07:37:21', '2024-05-30 19:33:15'),
(4, 'Hassan', 'DIRECTOR', 'Hassan, an accomplished Electrical Engineer, brings over 15 years of experience in the mining sector. His track record and insights promise significant benefits to APEX GLOBUS. With a deep understanding of mining intricacies, he navigates challenges adeptly and spearheads strategic initiatives for company growth. Hassan\'s background and strategic insight shape APEX GLOBUS\'s mission to revolutionise endeavours while upholding quality and sustainability standards.', '2024-05-01 07:37:28', '2024-05-30 19:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(3) UNSIGNED NOT NULL,
  `status` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `email_verified_at`, `password`, `is_admin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdelrahman', 'srour', '01146443634', 'abdo.abdo1479@gmail.com', NULL, '$2y$12$0.8CVlTHymTeh6YgdfHi1.FH3sjEUiS8WuA3b8.nXmvpahUKBFTie', 1, NULL, NULL, '2024-04-28 09:37:17', '2024-04-28 09:37:17'),
(2, 'khalid', 'isaacs', '447507508437', 'khalid.a.isaacs@icloud.com', NULL, '$2y$12$WjiY4oo321XNWf9HE3kvB.jg1is7FDHnQyiAAy82m4sW6o9Z4p55W', 1, NULL, NULL, '2024-05-27 10:05:37', '2024-05-27 10:05:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_details`
--
ALTER TABLE `products_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_details_shows`
--
ALTER TABLE `products_details_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_details`
--
ALTER TABLE `products_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_details_shows`
--
ALTER TABLE `products_details_shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
