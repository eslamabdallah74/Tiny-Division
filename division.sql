-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 04:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `division`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 11, 5577, NULL, NULL),
(2, 3, 4099, NULL, NULL),
(3, 7, 3111, NULL, NULL),
(4, 9, 4661, NULL, NULL),
(5, 9, 2431, NULL, NULL),
(6, 8, 520, NULL, NULL),
(7, 8, 4539, NULL, NULL),
(8, 10, 7934, NULL, NULL),
(9, 4, 5217, NULL, NULL),
(10, 11, 3854, NULL, NULL),
(13, 1, 1118, '2021-07-07 22:19:22', '2021-07-07 22:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `Qty` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_products`
--

INSERT INTO `cart_products` (`id`, `price`, `Qty`, `total`, `cart_id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, '925.00', 15, '13875.00', 1, 11, 24, NULL, NULL),
(5, '550.00', 5, '2750.00', 2, 3, 12, NULL, NULL),
(7, '189.00', 14, '2646.00', 3, 7, 60, NULL, NULL),
(8, '391.00', 9, '3519.00', 3, 7, 2, NULL, NULL),
(9, '441.00', 10, '4410.00', 3, 7, 76, NULL, NULL),
(10, '887.00', 8, '7096.00', 4, 9, 23, NULL, NULL),
(15, '194.00', 14, '2716.00', 5, 9, 67, NULL, NULL),
(18, '121.00', 7, '847.00', 6, 8, 96, NULL, NULL),
(19, '599.00', 6, '3594.00', 7, 8, 67, NULL, NULL),
(20, '168.00', 4, '672.00', 7, 8, 14, NULL, NULL),
(21, '403.00', 8, '3224.00', 7, 8, 95, NULL, NULL),
(22, '854.00', 14, '11956.00', 8, 10, 36, NULL, NULL),
(23, '891.00', 3, '2673.00', 8, 10, 21, NULL, NULL),
(24, '104.00', 15, '1560.00', 8, 10, 71, NULL, NULL),
(26, '128.00', 15, '1920.00', 9, 4, 25, NULL, NULL),
(29, '153.00', 1, '153.00', 10, 11, 69, NULL, NULL),
(30, '368.00', 4, '1472.00', 10, 11, 56, NULL, NULL),
(34, '1118.00', 1, '1118.00', 13, 1, 1, '2021-07-07 22:19:22', '2021-07-07 22:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Conroy, Langosh and Gutmann', '2021-07-07 05:33:06', '2021-07-07 05:33:06'),
(2, 'Murray LLC', '2021-07-07 05:33:06', '2021-07-07 05:33:06'),
(3, 'Ebert-Harvey', '2021-07-07 05:33:07', '2021-07-07 05:33:07'),
(4, 'Lakin Group', '2021-07-07 05:33:07', '2021-07-07 05:33:07'),
(5, 'Kihn Inc', NULL, NULL),
(6, 'Thiel, Treutel and Lehner', NULL, NULL),
(7, 'Terry, DuBuque and Howell', NULL, NULL),
(8, 'Lehner-Funk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'EslamAbdallahAbass', '201026236633', 'eslamabdallah301@gmail.com', 'dsadadada', '2021-07-07 07:18:23', '2021-07-07 07:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(73, '2014_10_12_000000_create_users_table', 1),
(74, '2014_10_12_100000_create_password_resets_table', 1),
(75, '2019_08_19_000000_create_failed_jobs_table', 1),
(76, '2021_06_07_073243_laratrust_setup_tables', 1),
(77, '2021_06_13_152445_create_categories_table', 1),
(78, '2021_06_14_015714_create_products_table', 1),
(79, '2021_06_17_135559_create_orders_table', 1),
(80, '2021_06_17_142030_create_order_product_table', 1),
(81, '2021_06_22_172054_create_carts_table', 1),
(82, '2021_06_22_173202_create_cart_products_table', 1),
(83, '2021_06_24_132641_create_contacts_table', 1),
(84, '2021_06_24_190356_create_product_rivews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 5625, 2, '2021-07-07 07:24:48', '2021-07-07 07:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `quntity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `user_id`, `price`, `quntity`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 77, 1, 1044, 1, 1044, '2021-07-07 07:24:48', '2021-07-07 07:24:48'),
(2, 1, 96, 1, 4581, 1, 4581, '2021-07-07 07:24:48', '2021-07-07 07:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_approval` tinyint(1) NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Qty` int(11) NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_approval`, `product_price`, `product_Qty`, `product_img`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Catharine Willms', 'Delectus quam dolor minus quia illo excepturi voluptas. Sit quas nostrum fugit non illum totam architecto. Vero sed sit cum.', 1, '1118', 219, '1625643630.png', 6, '2021-07-07 05:33:10', '2021-07-07 05:40:30'),
(2, 'Maudie Kutch', 'Vel vel eos repudiandae veniam ut. Consequatur nihil ut et commodi. Est aliquam voluptates saepe. Vero dolore suscipit sit magnam alias placeat perferendis omnis.', 1, '1662', 197, '1625643662.png', 4, '2021-07-07 05:33:12', '2021-07-07 05:41:02'),
(3, 'Mario Mann I', 'Delectus ut iste explicabo fugiat perspiciatis vero deleniti mollitia. Quia ut et et qui quia ea tempore. Vitae itaque provident optio aliquid odio sit inventore.', 1, '2698', 193, '1625643699.png', 4, '2021-07-07 05:33:12', '2021-07-07 05:41:39'),
(4, 'Mrs. Agustina Dickens', 'Occaecati est est quo maxime. Nostrum modi iusto est qui excepturi ipsa. Excepturi qui quidem qui eum.', 1, '2868', 69, '1625643718.png', 8, '2021-07-07 05:33:13', '2021-07-07 05:41:58'),
(5, 'Jarred Grant', 'Nobis ipsam placeat molestiae occaecati iure. Ex commodi aut earum distinctio ipsum sunt.', 1, '332', 81, 'shoes-img4.png', 1, '2021-07-07 05:33:13', '2021-07-07 05:33:13'),
(7, 'Dr. Art Bahringer Jr.', 'Itaque tempore sint sed nesciunt reprehenderit. Dolores id similique quos blanditiis qui sint in. Consequatur facilis vitae aut in ipsam.', 1, '239', 71, 'IMG-20210704-WA0162.jpg', 5, '2021-07-07 05:33:15', '2021-07-07 05:33:15'),
(9, 'Magdalen Spencer', 'Atque eius illo ut maiores perferendis harum eum. Debitis ducimus commodi corporis minus est. Minima dolor nam quas similique vel. Officiis at vero magnam voluptas.', 1, '3343', 82, 'shoes-img3.png', 7, '2021-07-07 05:33:16', '2021-07-07 05:33:16'),
(12, 'Greg Koepp', 'Enim voluptatibus enim a quibusdam incidunt et. Consequatur iusto ea ut labore est qui laboriosam. Omnis aliquam vel incidunt quae doloribus fugiat. Ut qui maiores eius velit.', 1, '3187', 269, 'IMG-20210704-WA0138.jpg', 4, '2021-07-07 05:33:17', '2021-07-07 05:33:17'),
(13, 'Ms. Yvonne Konopelski', 'Eius earum dolore inventore eaque esse. Aspernatur incidunt consequuntur praesentium adipisci soluta libero. Eaque et deleniti ex qui quidem.', 1, '1552', 170, 'IMG-20210704-WA0153.jpg', 5, '2021-07-07 05:33:18', '2021-07-07 05:33:18'),
(14, 'Rusty Stokes', 'Ut in mollitia vero repellendus omnis consequatur. Exercitationem ipsa et ea modi numquam. Harum modi autem dolore corrupti quis vero dolores. At id ut fugit at itaque atque.', 1, '695', 110, 'shoes-img9.png', 5, '2021-07-07 05:33:18', '2021-07-07 05:33:18'),
(15, 'Mr. Tony Rolfson II', 'Nulla itaque et ipsam dicta voluptatem voluptate eius. In sit aliquid sapiente. Temporibus dolor dolores adipisci libero beatae.', 1, '3622', 75, 'IMG-20210704-WA0164.jpg', 3, '2021-07-07 05:33:18', '2021-07-07 05:33:18'),
(17, 'Amy Hickle', 'Et labore assumenda voluptatibus qui. Consequatur quia quia dolore autem accusantium ad blanditiis. Exercitationem rerum adipisci nobis.', 1, '3474', 253, 'IMG-20210704-WA0129.jpg', 4, '2021-07-07 05:33:20', '2021-07-07 05:33:20'),
(19, 'Hailee Hammes V', 'Quae quo magni deleniti amet eos. Voluptas aperiam distinctio voluptas et. Et est et et animi.', 1, '1596', 142, '1625645287.jpg', 4, '2021-07-07 05:33:21', '2021-07-07 06:08:07'),
(20, 'Dr. Amir Rau V', 'Nihil sint sunt facere eum. Ut est dolorem exercitationem rerum.', 1, '1786', 61, 'IMG-20210704-WA0167.jpg', 7, '2021-07-07 05:33:21', '2021-07-07 05:33:21'),
(21, 'Madelynn Gutkowski', 'Blanditiis in officiis et expedita odit. Accusamus ullam voluptas voluptatem architecto. Optio minus saepe ducimus qui dignissimos necessitatibus.', 1, '1191', 201, 'IMG-20210704-WA0124.jpg', 6, '2021-07-07 05:33:22', '2021-07-07 05:33:22'),
(22, 'Mr. Major Beier', 'Repellendus saepe sed qui velit error sed illum. Qui magni reprehenderit accusamus qui reprehenderit. Vero aspernatur delectus qui a alias. Unde est maiores quia est voluptate.', 1, '1623', 258, 'IMG-20210704-WA0152.jpg', 7, '2021-07-07 05:33:22', '2021-07-07 05:33:22'),
(23, 'Kellie Kulas', 'Nihil autem possimus mollitia dolorem mollitia incidunt. Perferendis nesciunt ut corporis adipisci. Est dolores rem nihil et rerum illo.', 1, '1365', 121, 'IMG-20210704-WA0141.jpg', 7, '2021-07-07 05:33:23', '2021-07-07 05:33:23'),
(24, 'Olaf Conroy', 'Minima rerum repellendus unde. Voluptatem non commodi nam minus qui autem. Dolor nam dolorum molestiae unde.', 1, '2827', 116, 'IMG-20210704-WA0154.jpg', 6, '2021-07-07 05:33:25', '2021-07-07 05:33:25'),
(25, 'Maxine Carter', 'Est eveniet voluptatem cumque ut eveniet. Temporibus odit voluptatem qui veritatis exercitationem sunt labore. Molestias harum molestias doloremque atque ratione libero quae.', 1, '304', 53, 'IMG-20210704-WA0129.jpg', 4, '2021-07-07 05:33:25', '2021-07-07 05:33:25'),
(26, 'Eula Heaney', 'Consequatur voluptas atque sunt et. Et voluptatem iste vitae nisi vitae aliquam odit. Neque dolore beatae est ullam dolor.', 1, '259', 66, 'IMG-20210704-WA0152.jpg', 8, '2021-07-07 05:33:26', '2021-07-07 05:33:26'),
(27, 'Flavie Mante', 'Aliquam et quia quidem voluptas rerum et doloribus. Eos ipsa aut vel molestiae. Dolorum quia repellat expedita aut.', 1, '783', 224, 'IMG-20210704-WA0162.jpg', 7, '2021-07-07 05:33:27', '2021-07-07 05:33:27'),
(28, 'Dr. Mallory Smitham Jr.', 'Aut commodi vero rerum accusantium odit ipsum voluptas. Rerum commodi et explicabo est voluptatem perspiciatis tempore. Beatae quia autem doloremque sint repellat accusantium.', 1, '2037', 206, 'IMG-20210704-WA0151.jpg', 3, '2021-07-07 05:33:28', '2021-07-07 05:33:28'),
(29, 'Casper Borer DVM', 'Pariatur reiciendis earum qui quia non vel repellat. Voluptatem non ullam tempora rerum ad nam. Aut rerum et exercitationem placeat illo nesciunt recusandae.', 1, '408', 101, 'IMG-20210704-WA0151.jpg', 7, '2021-07-07 05:33:28', '2021-07-07 05:33:28'),
(30, 'Ezekiel Jacobson PhD', 'Aliquam praesentium adipisci non qui. Facilis occaecati voluptas quidem nam aliquam architecto officiis. Cumque asperiores illo rerum et nostrum voluptatum voluptatibus delectus.', 1, '3380', 67, 'IMG-20210704-WA0141.jpg', 7, '2021-07-07 05:33:29', '2021-07-07 05:33:29'),
(31, 'Jerel Thiel', 'Quam sint quaerat est qui dolorem tempore quidem dignissimos. Minima aut quod voluptatem ut. Aut ea officia hic a.', 1, '4162', 288, 'IMG-20210704-WA0139.jpg', 5, '2021-07-07 05:33:30', '2021-07-07 05:33:30'),
(32, 'Orrin Fisher', 'Quod possimus et labore occaecati. Consequatur quaerat qui pariatur laborum non. Enim velit cum laudantium architecto labore voluptatem repudiandae.', 1, '425', 298, 'IMG-20210704-WA0162.jpg', 6, '2021-07-07 05:33:30', '2021-07-07 05:33:30'),
(34, 'Gayle Kiehn', 'Repellat et odit rerum nihil placeat quibusdam voluptatem dolores. Ut ex cum nam non.', 1, '3191', 226, 'IMG-20210704-WA0139.jpg', 1, '2021-07-07 05:33:31', '2021-07-07 05:33:31'),
(35, 'Hortense Jaskolski', 'Perspiciatis fugit iure corporis iste incidunt eligendi tempora. Magni et est labore id vel dolor veritatis. Sed error architecto aliquid.', 1, '3435', 82, 'IMG-20210704-WA0135.jpg', 5, '2021-07-07 05:33:32', '2021-07-07 05:33:32'),
(36, 'Prof. Elfrieda Gaylord Jr.', 'Ipsam reiciendis perspiciatis voluptas sint quae. Dolorem adipisci facere unde enim. Eos quia eum autem voluptates asperiores.', 1, '3501', 106, 'IMG-20210704-WA0143.jpg', 7, '2021-07-07 05:33:33', '2021-07-07 05:33:33'),
(40, 'Luther Harber', 'Consequatur veritatis necessitatibus et tempora aliquam voluptatem et id. Quia eius eligendi et ratione quas nisi quam. Quidem hic iusto iste.', 1, '4833', 72, 'shoes-img7.png', 5, '2021-07-07 05:33:36', '2021-07-07 05:33:36'),
(41, 'Alex Skiles', 'Qui sapiente sint aut sunt ducimus. Temporibus labore nulla ut maiores provident. Optio sint laborum aut magnam. Eius aliquam in tempora minus corporis eius accusamus.', 1, '4613', 55, 'IMG-20210704-WA0159.jpg', 8, '2021-07-07 05:33:37', '2021-07-07 05:33:37'),
(44, 'Mrs. Selena Nader', 'Aut sapiente molestias voluptatem. Ratione consequuntur expedita quasi.', 1, '3938', 205, 'IMG-20210704-WA0154.jpg', 4, '2021-07-07 05:33:39', '2021-07-07 05:33:39'),
(46, 'Mr. Luigi Hackett IV', 'Fuga eveniet corrupti molestias dolorum ipsa dolores ipsam incidunt. Rerum est id cum natus. Quis saepe sapiente sunt eos ut assumenda modi vitae.', 1, '3008', 267, 'IMG-20210704-WA0164.jpg', 6, '2021-07-07 05:33:40', '2021-07-07 05:33:40'),
(48, 'Hector Sauer', 'Quia suscipit aspernatur nisi aut neque. Nam minima in ut voluptatibus ea aut. Fugit et consequatur officia necessitatibus.', 1, '1776', 160, 'IMG-20210704-WA0159.jpg', 4, '2021-07-07 05:33:42', '2021-07-07 05:33:42'),
(53, 'Mike Kuhlman Sr.', 'Laudantium aperiam labore aut dolor pariatur sit. Est blanditiis totam ratione pariatur saepe. Expedita odit rerum quis architecto mollitia et. Tenetur ut rerum molestiae non maiores in officia.', 1, '308', 117, 'IMG-20210704-WA0129.jpg', 6, '2021-07-07 05:33:45', '2021-07-07 05:33:45'),
(54, 'Antonia Stanton Sr.', 'Atque quia temporibus cum culpa non. Consequatur perspiciatis dolores est ad vero minima. Illo officia voluptatem repellat pariatur esse eum.', 1, '2604', 213, 'IMG-20210704-WA0162.jpg', 1, '2021-07-07 05:33:46', '2021-07-07 05:33:46'),
(56, 'Oceane Hackett', 'Ullam enim inventore itaque repudiandae. Qui saepe velit explicabo et necessitatibus molestiae et.', 1, '2905', 88, 'IMG-20210704-WA0125.jpg', 8, '2021-07-07 05:33:47', '2021-07-07 05:33:47'),
(57, 'Eloy Padberg MD', 'Voluptas aut distinctio excepturi laboriosam. Assumenda cum sapiente totam amet nobis. Ut vitae inventore sunt repellendus quam. Qui dolores repellat odit blanditiis illum. Aut sunt vel modi sequi.', 1, '1041', 93, 'IMG-20210704-WA0150.jpg', 1, '2021-07-07 05:33:47', '2021-07-07 05:33:47'),
(58, 'Nayeli Kreiger', 'Quam eius quaerat animi a qui. Quas rerum maxime occaecati debitis modi asperiores. Autem vel et quos ut et et.', 1, '1791', 83, 'shoes-img9.png', 1, '2021-07-07 05:33:48', '2021-07-07 05:33:48'),
(59, 'Mrs. Abbigail Bosco I', 'Cumque voluptates occaecati fugit consequuntur. Est sit nobis molestiae provident eos commodi nesciunt. Quidem id soluta exercitationem itaque et aut beatae consequatur.', 1, '1611', 258, 'IMG-20210704-WA0159.jpg', 6, '2021-07-07 05:33:48', '2021-07-07 05:33:48'),
(60, 'Aidan Mills', 'Cum vero recusandae deleniti voluptates. Quod natus harum a accusamus reprehenderit aut fugiat. Omnis asperiores nihil maxime nemo.', 1, '4886', 216, 'IMG-20210704-WA0148.jpg', 2, '2021-07-07 05:33:49', '2021-07-07 05:33:49'),
(61, 'Ludie Erdman', 'Quod facere qui doloribus quaerat consequatur voluptates. Et omnis et est odio maiores. Perspiciatis nobis quia hic cumque voluptas maiores. Quis provident commodi rerum tenetur cumque similique.', 1, '1428', 267, 'IMG-20210704-WA0158.jpg', 6, '2021-07-07 05:33:51', '2021-07-07 05:33:51'),
(62, 'Madyson Donnelly', 'Blanditiis modi molestiae est optio qui. Veritatis non itaque quisquam explicabo quasi et. Amet accusamus non optio eius quia deserunt. Quia porro ipsam eius et. Autem iste et quae ab et et velit.', 1, '4799', 144, 'IMG-20210704-WA0163.jpg', 2, '2021-07-07 05:33:52', '2021-07-07 05:33:52'),
(63, 'Russell Hills', 'Dolores rerum illo numquam impedit placeat eveniet amet. Est illum iste dolorem. Explicabo iste ea tempora.', 1, '2916', 300, 'IMG-20210704-WA0164.jpg', 6, '2021-07-07 05:33:53', '2021-07-07 05:33:53'),
(64, 'Ronny Robel', 'Sit voluptatem omnis libero. Ut non excepturi ad harum dolor ut est repudiandae. Dolorem eaque sit rerum ut. Modi omnis quibusdam nulla libero qui non doloremque pariatur.', 1, '4965', 151, 'IMG-20210704-WA0167.jpg', 1, '2021-07-07 05:33:54', '2021-07-07 05:33:54'),
(66, 'Darrin Boehm', 'Illum qui amet doloribus commodi libero. Ipsa libero commodi dolorem laboriosam recusandae cupiditate. Sed ipsa sequi ex ea expedita.', 1, '2218', 220, 'IMG-20210704-WA0160.jpg', 5, '2021-07-07 05:33:59', '2021-07-07 05:33:59'),
(67, 'Mr. Haleigh Murray II', 'Molestiae dolore provident enim non et inventore. Quia eaque architecto itaque repudiandae est laborum.', 1, '4197', 244, 'IMG-20210704-WA0167.jpg', 4, '2021-07-07 05:34:00', '2021-07-07 05:34:00'),
(69, 'Mr. Morris Stehr IV', 'Quis neque et qui. Quia blanditiis voluptatem voluptas iusto magni.', 1, '738', 112, 'IMG-20210704-WA0135.jpg', 7, '2021-07-07 05:34:05', '2021-07-07 05:34:05'),
(70, 'Khalid Legros', 'Ut accusamus et placeat modi quisquam vero. Porro quis enim magnam dolorum distinctio quod velit ab. Est neque et architecto quos soluta quae cumque. Officiis et est maxime velit.', 1, '319', 183, 'IMG-20210704-WA0141.jpg', 8, '2021-07-07 05:34:06', '2021-07-07 05:34:06'),
(71, 'Johnathan Medhurst II', 'Sunt ipsam asperiores dolore molestiae hic omnis ab impedit. Molestias libero veritatis dolorum eum consequatur culpa. Molestiae quis dolor consequatur eius sit.', 1, '378', 92, 'IMG-20210704-WA0125.jpg', 7, '2021-07-07 05:34:07', '2021-07-07 05:34:07'),
(72, 'Clyde Douglas', 'Alias consectetur aut sit est vel. Magnam fugiat ea dolor et. Dolorem sit quisquam quaerat magnam ex culpa ad et. Atque et voluptatem repudiandae corporis ipsa at.', 1, '4352', 55, 'IMG-20210704-WA0127.jpg', 2, '2021-07-07 05:34:09', '2021-07-07 05:34:09'),
(74, 'Maximillian Kertzmann', 'Voluptas impedit voluptatum placeat. Nulla et quod et similique sit nihil ut. Aut dolorum est aut inventore non.', 1, '3675', 286, 'IMG-20210704-WA0135.jpg', 2, '2021-07-07 05:34:11', '2021-07-07 05:34:11'),
(75, 'Hassie Daugherty', 'Tempore doloremque excepturi quidem quis. Voluptatibus cumque voluptatem commodi reiciendis modi voluptatum. Ut consequatur dicta itaque sapiente expedita libero quis.', 1, '3537', 216, 'IMG-20210704-WA0150.jpg', 8, '2021-07-07 05:34:12', '2021-07-07 05:34:12'),
(76, 'Dr. Madeline Dooley', 'Exercitationem voluptates perferendis numquam aut illo porro. Sunt sunt quisquam ut delectus ut natus laborum. Culpa quo nihil maiores est illo rem. A reprehenderit laborum modi.', 1, '357', 135, 'IMG-20210704-WA0159.jpg', 7, '2021-07-07 05:34:13', '2021-07-07 05:34:13'),
(77, 'Lexie Weimann', 'Nesciunt esse est recusandae. Iusto et rerum laudantium fugit est totam. Aperiam aut magnam vel commodi. Sed quasi ab rerum sapiente qui ab fuga.', 1, '1044', 140, 'IMG-20210704-WA0150.jpg', 8, '2021-07-07 05:34:14', '2021-07-07 05:34:14'),
(78, 'Zechariah Johnson', 'Et facere maxime libero ut blanditiis. Saepe maiores quo possimus hic est tempora. Ut dolor dolores corrupti magnam id ipsa.', 1, '632', 197, 'IMG-20210704-WA0143.jpg', 2, '2021-07-07 05:34:17', '2021-07-07 05:34:17'),
(82, 'Anne White', 'Ea dolores quibusdam repudiandae quibusdam. Est autem dolor eligendi aspernatur. Ipsam ratione tempore amet aut voluptas dolor officia.', 1, '832', 140, 'IMG-20210704-WA0127.jpg', 2, '2021-07-07 05:34:21', '2021-07-07 05:34:21'),
(83, 'Dr. Royal Gleichner', 'Est aperiam alias voluptas explicabo. Non magni eum aut qui qui. Qui et qui ut eius asperiores sint et. Eligendi qui quam enim consectetur quae ut.', 1, '3190', 168, 'shoes-img3.png', 8, '2021-07-07 05:34:22', '2021-07-07 05:34:22'),
(84, 'Kip Ratke', 'Enim delectus mollitia aut quis nihil. Et voluptas qui sed odit optio aut. Et natus id ut quis. Vel autem sit pariatur soluta qui ut. In temporibus et quae autem totam dolorum.', 1, '243', 118, 'IMG-20210704-WA0126.jpg', 2, '2021-07-07 05:34:23', '2021-07-07 05:34:23'),
(85, 'Mr. Brendon Jenkins I', 'Provident inventore assumenda aut ut. Eum consequatur voluptatem officiis dolor. Nesciunt vel modi nam sed necessitatibus.', 1, '4232', 79, 'shoes-img2.png', 1, '2021-07-07 05:34:24', '2021-07-07 05:34:24'),
(86, 'Vince Jones', 'Veritatis dolores tempora sed itaque. Nesciunt necessitatibus voluptatum amet necessitatibus. Sit et expedita quis est illo qui.', 1, '4068', 129, 'IMG-20210704-WA0160.jpg', 1, '2021-07-07 05:34:25', '2021-07-07 05:34:25'),
(87, 'Hans Williamson', 'Praesentium atque sed libero maxime voluptas nihil corrupti. Labore aperiam quis sed cupiditate cumque. Qui ut voluptates consequatur cumque et. Nihil deleniti accusantium et est dolor.', 1, '3115', 211, 'IMG-20210704-WA0169.jpg', 1, '2021-07-07 05:34:26', '2021-07-07 05:34:26'),
(89, 'Tianna Rowe', 'Error reiciendis nulla quae nemo et rerum dolorem. Omnis aperiam voluptatibus magnam tempora a qui. Nemo sequi et ut dolorem. Nesciunt voluptatibus rerum quis fuga recusandae consequatur dolore.', 1, '4933', 58, 'IMG-20210704-WA0142.jpg', 6, '2021-07-07 05:34:29', '2021-07-07 05:34:29'),
(92, 'Brandyn Schaefer', 'Assumenda dolores ea exercitationem. Molestias est eum rerum qui.', 1, '1173', 282, '1625644096.jpg', 3, '2021-07-07 05:34:31', '2021-07-07 05:48:16'),
(93, 'Hoyt Cassin III', 'Ipsa veniam id et quo maiores dolorum. Sint molestiae qui consequatur rerum sint sed sed. Non modi eos culpa tempore. Hic dolorem cumque natus vitae ad. Vel dolores cumque error et ut aperiam natus.', 1, '259', 167, '1625644114.png', 2, '2021-07-07 05:34:32', '2021-07-07 05:48:34'),
(94, 'Marge Abernathy', 'Odio inventore odio eveniet nemo fugiat officia. Est eaque ratione consequatur est harum qui dolorem. Odit perspiciatis sunt fugit dolor.', 1, '4513', 221, 'IMG-20210704-WA0127.jpg', 5, '2021-07-07 05:34:33', '2021-07-07 05:34:33'),
(95, 'Coralie Williamson', 'Deleniti quidem cumque quia autem. Quasi omnis voluptatem quisquam iste nesciunt. Nihil in vel minima magni voluptas. Porro nulla temporibus cupiditate dolores veritatis quam. Ea ut aut omnis.', 1, '788', 270, '1625644034.jpg', 2, '2021-07-07 05:34:33', '2021-07-07 05:47:14'),
(96, 'Enoch Kris', 'Quis voluptatibus dolorem ut velit quae. Rem praesentium reprehenderit ab sit. Dolorem rerum consequatur adipisci ratione autem.', 1, '4581', 146, 'IMG-20210704-WA0130.jpg', 7, '2021-07-07 05:34:33', '2021-07-07 05:34:33'),
(97, 'Francisca Dicki', 'Nostrum ut maxime soluta odio quam. Et consequatur rerum quidem minus corrupti dolore quia. Accusantium ratione et cum temporibus velit. Eveniet tenetur occaecati reiciendis magni.', 1, '2520', 110, 'IMG-20210704-WA0161.jpg', 7, '2021-07-07 05:34:34', '2021-07-07 05:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_rivews`
--

CREATE TABLE `product_rivews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_rivews`
--

INSERT INTO `product_rivews` (`id`, `user_id`, `product_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 77, 'Cool naruto shirt', 4, '2021-07-07 06:12:12', '2021-07-07 06:12:12'),
(2, 1, 93, 'amazing jacket , <3', 5, '2021-07-07 22:25:30', '2021-07-07 22:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eslam Abdallah', 'eslamabdallah301@gmail.com', NULL, '$2y$10$Pu.PEd/pSjrNec1qLz5G8u2GzVyjfPPVAd3UCIUzv1pPoiQAD/yaW', 0, NULL, '1991-03-05 22:00:00', NULL),
(2, 'Polly Berge', 'hmorissette@gmail.com', NULL, 'FZ?w:~SIgU6W:U%^DI', 0, NULL, '2007-03-26 22:00:00', NULL),
(3, 'Prof. Elmo Gusikowski DVM', 'tiffany.roberts@johns.biz', NULL, '^BdpFz@)*%)', 0, NULL, '1985-12-23 22:00:00', NULL),
(4, 'Freeda Orn PhD', 'mckenzie.reinhold@stamm.com', NULL, '\'s+U,~a$+hZ', 0, NULL, '1990-04-02 22:00:00', NULL),
(5, 'Jayce Weber', 'colin41@green.biz', NULL, 'Jxm{v5TntX', 0, NULL, '1970-05-29 22:00:00', NULL),
(6, 'Taylor Herzog DDS', 'isadore99@hoppe.com', NULL, 'tuewSBj]ed;5(v', 0, NULL, '2000-05-05 22:00:00', NULL),
(7, 'Tomasa Dooley', 'delores.brown@gmail.com', NULL, 'xr<i84', 0, NULL, '2013-07-31 22:00:00', NULL),
(8, 'Emmanuelle Kunze', 'xkuhic@hotmail.com', NULL, '(_@!t1}nbd{8kQB2?eo', 0, NULL, '1991-01-19 22:00:00', NULL),
(9, 'Mrs. Ines Witting', 'morgan.stanton@bogan.com', NULL, 'pb+$t/~t)N', 0, NULL, '1972-06-26 22:00:00', NULL),
(10, 'Martina Douglas', 'owisozk@hammes.biz', NULL, '%s[=k5QL8{=', 0, NULL, '1986-01-19 22:00:00', NULL),
(11, 'Karen Price', 'vrenner@flatley.org', NULL, '6Iq~O98xpW\':', 0, NULL, '1981-07-10 22:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_products_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_products_user_id_foreign` (`user_id`),
  ADD KEY `cart_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`),
  ADD KEY `order_product_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_rivews`
--
ALTER TABLE `product_rivews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_rivews_user_id_foreign` (`user_id`),
  ADD KEY `product_rivews_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `product_rivews`
--
ALTER TABLE `product_rivews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `cart_products_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_rivews`
--
ALTER TABLE `product_rivews`
  ADD CONSTRAINT `product_rivews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_rivews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
