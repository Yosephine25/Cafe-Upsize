-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2023 at 12:31 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upsize`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `meja_id` bigint(20) UNSIGNED NOT NULL,
  `book_date` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kritiksaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mejas`
--

CREATE TABLE `mejas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('available','unavailable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mejas`
--

INSERT INTO `mejas` (`id`, `cover`, `meja`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'meja1.jpg', '1', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(2, 'meja2.jpg', '2', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(3, 'meja3.jpg', '3', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(4, 'meja4.jpg', '4', 'Meja untuk muatan 6 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(5, 'meja5.jpg', '5', 'Meja untuk muatan 6 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(6, 'meja6.jpg', '6', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(7, 'meja1.jpg', '7', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(8, 'meja2.jpg', '8', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(9, 'meja3.jpg', '9', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(10, 'meja4.jpg', '10', 'Meja untuk muatan 6 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(11, 'meja5.jpg', '11', 'Meja untuk muatan 6 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(12, 'meja6.jpg', '12', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(13, 'meja1.jpg', '13', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(14, 'meja2.jpg', '14', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(15, 'meja3.jpg', '15', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(16, 'meja4.jpg', '16', 'Meja untuk muatan 6 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(17, 'meja5.jpg', '17', 'Meja untuk muatan 6 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(18, 'meja6.jpg', '18', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(19, 'meja1.jpg', '19', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(20, 'meja2.jpg', '20', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL),
(21, 'meja3.jpg', '21', 'Meja untuk muatan 4 orang', 'available', '2023-06-19 05:14:33', '2023-06-19 05:14:33', NULL);

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
(1, '1_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_03_31_061734_create_product_table', 1),
(4, '2023_04_09_172752_create_kritiksaran_table', 1),
(5, '2023_04_11_131217_create_meja_table', 1),
(6, '2023_05_10_130646_create_bookings_table', 1),
(7, '2023_05_18_170709_create_order_table', 1),
(8, '2023_05_18_175412_create_cart_table', 1),
(9, '2023_06_14_102354_create_pengaduans_table', 1),
(10, '2023_06_14_144834_create_pengumuman_table', 1),
(11, '2023_06_14_165941_create_ratings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','accepted','rejected','finished') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `pemberitahuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namamenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengaduan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('available','unavailable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `cover`, `price`, `stock`, `description`, `status`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Espresso', 'Espresso.jpg', '2000', '20', 'Kopi yang dihasilkan dari proses penyeduhan kopi dengan tekanan dan suhu tinggi', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(2, 'Americano', 'Americano.jpeg', '20000', '20', 'Kopi espreso yang dicampur dengan air panas', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(3, 'Coffe Milk', 'CoffeMilk.jpg', '20000', '20', 'Kopi yang manis dibuat dengan kopi dan susu yang dicampur', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(4, 'Cofffe Latte', 'CoffeLatte.jpg', '20000', '20', 'Kopi yang manis dibuat dengan kopi dan susu yang dicampur', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(5, 'Cappucino', 'Cappucino.jpeg', '20000', '20', 'Cappuccino merupakan kopi yang populer dari Italia karena lebih sering dan lebih banyak dikonsumsi', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(6, 'Palm Sugar Latte', 'PalmSugarLatte.jpg', '20000', '20', 'Kopi susu biasa namun ditambah dengan gula aren yang sudah menjadi sirup', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(7, 'Caramel Machiato', 'Caramel.jpg', '22000', '20', 'Kopi yang dibuat dengan campuran espresso, susu dan pemanis dari sirup vanilla', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(8, 'Coffe Mocha', 'CoffeMocha.jpeg', '22000', '20', 'Kopi yang dibuat dengan campuran espresso, cokelat, dan susu', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(9, 'Flavour Cafe Latte', 'CoffeLatte.jpg', '22000', '20', 'Kopi yang manis dibuat dengan kopi dan susu yang dicampur', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(10, 'Kopi Tubruk', 'KopiTubruk.jpg', '8000', '20', 'Kopi yang proses pembuatannya dengan menghancurkan biji kopi', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(11, 'Kopi Jahe', 'KopiJahe.jpg', '10000', '20', 'Kopi yang direbus dengan aneka rempah seperti cengkih, kayumanis, dan jahe', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(12, 'Kopi Sanger', 'Sanger.jpeg', '10000', '20', 'Kopi hitam yang dibuat dengan campuran susu, dan gula', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(13, 'Susu Jahe', 'SusuJahe.jpg', '10000', '20', 'Minuman yang dibuat dengan campuran susu dan jahe yang bisa memberikan kehangatan pada tubuh', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(14, 'Jahe Original', 'Jahe.jpg', '8000', '20', 'Minuman jahe yang mampu meningkatkan daya tubuh ', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(15, 'Taro Latte', 'tarolatte.png', '20000', '20', 'Minuman berupa campuran susu dengan bubuk taro', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(16, 'Red Velvet Latte', 'redvelvet.jpg', '20000', '20', 'Minuman berupa campuran susu murni dan cokelat yang dicampur dengan bubuk red velvet', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(17, 'GreenTea Latte', 'greentea.jpg', '20000', '20', 'Minuman berupa campuran susu yang dicampur dengan teh hijau', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(18, 'Chocolate', 'chocolate.jpg', '20000', '20', 'Minuman yang dibuat dengan campuran cokelat', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(19, 'Brewed Black Tea', 'brewed.jpg', '10000', '20', 'Minuman yang dibuat dengan campuran black tea', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(20, 'Milk Tea', 'milktea.jpeg', '10000', '20', 'Minuman yang dibuat dengan campuran milk tea', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(21, 'Thai Tea', 'thaitea.jpg', '10000', '20', 'Minuman yang dibuat dengan campuran thai tea', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(22, 'Lemon Tea', 'lemontea.jpg', '10000', '20', 'Minuman yang dibuat dengan campuran Lemon', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(23, 'Lychee Tea', 'lychee.jpg', '10000', '20', 'Minuman yang dibuat dengan campuran lychee', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(24, 'Peach Tea', 'peach.jpg', '10000', '20', 'Minuman yang dibuat dengan campuran peach', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(25, 'Earlgrey Tea', 'earlgrey.jpg', '15000', '20', 'Minuman yang dibuat dengan campuran earlgrey', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(26, 'Caramel Crunch', 'caramelcrunch.jpeg', '25000', '20', 'Minuman yang dibuat dengan campuran caramel', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(27, 'Avocado Coffe', 'avocado.jpeg', '25000', '20', 'Minuman yang dibuat dengan campuran kopi dan alpukat', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(28, 'Cookies & Cream', 'cookies.jpg', '22000', '20', 'Minuman yang dibuat dengan campuran cookies dan cream', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(29, 'Matcha Freeze', 'matcha.jpg', '22000', '20', 'Minuman yang dibuat dengan campuran matcha', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(30, 'Choco Freeze', 'choco.jpg', '22000', '20', 'Minuman yang dibuat dengan campuran cokelat', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(31, 'Taro Freeze', 'tarolatte.png', '22000', '20', 'Minuman yang dibuat dengan campuran taro', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(32, 'Red Velvet Freeze', 'redvelvet.jpg', '22000', '20', 'Minuman yang dibuat dengan campuran red velvet', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(33, 'V60', 'v60.jpg', '20000', '20', 'Minuman yang dibuat untuk pecinta kopi', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(34, 'Vietnam Drip', 'vietnamdrip.jpg', '20000', '20', 'Minuman yang dibuat untuk pecinta kopi', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(35, 'Cold Drip', 'colddrip.jpeg', '20000', '20', 'Minuman yang dibuat untuk pecinta kopi', 'available', 'Minuman', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(36, 'French Fries & Sausage', 'french.jpg', '10000', '20', 'Kentang yang gurih dan ditemani sambal', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(37, 'Tahu Lada Garam', 'TahuLada.jpg', '10000', '20', 'Makanan yang dibuat untuk ngemil sambil minum kopi', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(38, 'Spaghetti', 'spaghetti.jpg', '20000', '20', 'Makanan yang dibuat untuk menambah selera', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(39, 'Tahu Isi', 'Tahuisi.jpeg', '20000', '20', 'Makanan yang dibuat dengan campuran cokelat', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(40, 'Indomie Telur Rebus', 'indomietelorrebus.jpg', '15000', '20', 'Makanan yang dibuat untuk menemani nongkrong', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(41, 'Indomie Telur Goreng', 'indomietelorgoreng.jpg', '15000', '20', 'Makanan yang dibuat untuk menemani nongkrong', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL),
(42, 'Roti Bakar', 'rotibakar.jpg', '10000', '20', 'Makanan yang dibuat untuk menemani nongkrong', 'available', 'Makanan', '2023-06-19 05:14:32', '2023-06-19 05:14:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '0', '2023-06-19 05:17:27', '2023-06-19 05:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorhp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user','staff') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `username`, `nomorhp`, `email`, `address`, `city`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '085267816542', 'admin@gmail.com', NULL, NULL, '$2y$10$a8L2/1HNSDN6zMqXh90f3ecEWNe2VD9XPUzX/xIOKeBifna/8.z1y', 'admin', '2023-06-19 05:14:33', '2023-06-19 05:14:33'),
(2, 'staff', 'staff', '085267816542', 'staffupsize@gmail.com', NULL, NULL, '$2y$10$iI835gFzn/BqE64/xgsFyuy/VslRVHlyK9MNQ7mwWT6X3Xa5M3BSe', 'staff', '2023-06-19 05:14:33', '2023-06-19 05:14:33'),
(3, 'Fritz Marpaung', 'triamm', '081263632874', 'fritzmarpaung19@gmail.com', NULL, NULL, '$2y$10$ZfnkBRa9v3i2PYJBqDPdaOamR6CntBQquoDNlzk/RCxLoQuWPcB2e', 'user', '2023-06-19 05:17:09', '2023-06-19 05:17:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_meja_id_foreign` (`meja_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kritiksaran_user_id_foreign` (`user_id`);

--
-- Indexes for table `mejas`
--
ALTER TABLE `mejas`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaduans_user_id_foreign` (`user_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mejas`
--
ALTER TABLE `mejas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_meja_id_foreign` FOREIGN KEY (`meja_id`) REFERENCES `mejas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD CONSTRAINT `kritiksaran_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD CONSTRAINT `pengaduans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
