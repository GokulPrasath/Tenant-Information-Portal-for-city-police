-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 08:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenant1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badgeid` int(11) NOT NULL,
  `avatar` blob NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `badgeid`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Jagadhish', 12121, 0x313439303933313739382e6a7067, 'jaga@gmail.com', '$2y$10$w1KuXPGPRQqd5hde7mnjl.joFP/sCqBw.LwJL3zXJOIL3uZ5cQrCS', 'h2z4CWhyt6yFqGDXk28sq558Z51isznIdZ96ucbKyOygXOKJDWpRKdMs3tmf', '2017-03-24 01:16:32', '2017-03-30 22:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `agreements`
--

CREATE TABLE `agreements` (
  `id` int(10) NOT NULL,
  `oname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omobno` bigint(10) NOT NULL,
  `oemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oauthority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oidproof` blob NOT NULL,
  `oagreementno` int(11) NOT NULL,
  `oagreementdocs` blob NOT NULL,
  `ostationarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmobno` bigint(10) NOT NULL,
  `temail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpic` blob NOT NULL,
  `tidproof` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agreements`
--

INSERT INTO `agreements` (`id`, `oname`, `oaddress`, `omobno`, `oemail`, `oauthority`, `oidproof`, `oagreementno`, `oagreementdocs`, `ostationarea`, `tname`, `taddress`, `tmobno`, `temail`, `tpic`, `tidproof`, `created_at`, `updated_at`) VALUES
(4, 'Raja', '2nd street,brindavan colony,podanur', 8939589374, 'rajubhai@gmail.com', 'Raja', 0x6f776e65722e73716c, 11123, 0x7469707364622e73716c, 'Podanur', 'Gowtham', 'thavamani street,podanur', 9087467382, 'gowtha@gmail.com', 0x494d475f32303136313232305f3039353435332e6a7067, 0x494d475f32303136313232305f3039353432302e6a7067, '2017-03-10 03:54:25', '2017-03-10 03:54:25'),
(2, 'Sarvann', '2/20b,ponnakaniroad, periyakuili', 8012283352, 'sarvann005@nfflnsa.com', 'Gokul', 0x494d475f32303136313232305f3039353435332e6a7067, 12345, 0x62672e6a7067, 'Chettipalayam', 'raj', 'raja street', 8012283352, 'raj@gmail.com', 0x436170747572652e504e47, 0x61626f75742e706870, '2017-03-09 09:42:07', '2017-03-09 09:42:07'),
(7, 'harish', '32b,sakthi road,annur', 8972104275, 'harish008@iuvhg.com', 'Harish', 0x3033202831292e6a7067, 23567, 0x30706f6b6b6972693037202831292e6a7067, 'Coimbatore', 'prasath', '2/206,papampatti,tirupur', 7893672568, 'prasath174@outlook.in', 0x2356696a61792e6a7067, 0x2856494a4159292e6a7067, '2017-03-14 03:49:47', '2017-03-14 03:49:47'),
(3, 'bdfjkbdaf', 'kdbfkjdabfkjda', 63489749, 'bfkasbfk@sngnj.com', 'kdjfkldnf', 0x6f776e65722e73716c, 111111, 0x494d475f32303136313232305f3039353433392e6a7067, 'Ukkadam', 'jfbkjafk', 'nafljnaf', 39462194, 'bcjx@jfa.com', 0x7469707364622e73716c, 0x6f776e65722e73716c, '2017-03-10 03:19:55', '2017-03-10 03:19:55'),
(5, 'hdbfdbkfj', 'jbdfkjbdf', 76498164891, 'dbfjk@sjbg.com', 'fgbdkb', 0x6e65772020312e747874, 134567, 0x6e65772020312e747874, 'Ukkadam', 'rabdjdfbd', 'ghkjashgf', 647416593, 'saagfdgs@dhdgf.com', 0x6e65772020312e747874, 0x6e65772020312e747874, '2017-03-13 03:16:12', '2017-03-13 03:16:12'),
(8, 'dfghjk', 'fhgjhkj', 3465677, 'df@dfg.com', 'gbn', 0x392e4a5047, 234567, 0x31305f62696c6c61352e6a7067, 'Ukkadam', 'sdfgh', 'dfgh', 23456, 'dfg@d.com', 0x372d313032342e4a5047, 0x31305f62696c6c61352e6a7067, '2017-03-14 03:37:49', '2017-03-14 03:37:49'),
(10, 'Gokul', 'west coast street,ukkadam', 9843584225, 'gokkk@gmail.com', 'Gokul', 0x31312e4a5047, 512235, 0x31342e6a7067, 'Ukkadam', 'ElangoRaj', 'kuppuswamy street,ukkadam', 8709313149, 'rajshake@gmail.com', 0x31342e6a7067, 0x31332e6a7067, '2017-03-27 23:55:09', '2017-03-27 23:55:09'),
(11, 'Fabian ', '26,raja street,saravanampatti', 9037489236, 'fabildurai@gmail.com', 'Durai', 0x3733333837315f313431333337343530323232343436345f3237393533393734315f6e2e6a7067, 578934, 0x392e4a5047, 'Saravanampatti', 'Boopathy', '28A,gandhi street,puliampatti', 9580384678, 'boopath4567@gmail.com', 0x31305f62696c6c61352e6a7067, 0x314153414c2d30355f30312e6a7067, '2017-04-02 23:25:32', '2017-04-02 23:25:32'),
(9, 'Deepika', 'hdbvkjdbvkjd', 8012283352, 'deepi@gmail.com', 'dbkjfk', 0x6368696c642e6a7067, 782642, 0x372e6a7067, 'Coimbatore', 'Saradee', 'sbkjdbvjkbzckjv', 7835121881, 'saradee@gmail.com', 0x6368696c6420332e6a7067, 0x31312e4a5047, '2017-03-20 01:19:07', '2017-03-20 01:19:07'),
(6, 'irgkjrsf', 'naddgfkdbf', 324638, 'kjfg@sdgf.com', 'dgfhdgbkjf', 0x7363726e362e706e67, 12345654, 0x7363726e362e706e67, 'Ukkadam', 'skdgfs', 'hhgdfkjshdf', 645184, 'jhsdfjh@kjjh.com', 0x7363726e362e706e67, 0x7363726e322e504e47, '2017-03-13 05:09:55', '2017-03-13 05:09:55');

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
(1, '2017_03_07_064517_create_agreements_table', 1),
(2, '2017_03_09_064053_create_admins_table', 2),
(3, '2017_03_09_134419_create_tenfams_controller', 3),
(4, '2017_03_19_085023_create_uses_table', 4),
(5, '2017_03_21_090704_create_stations_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rajkumar@gmail.com', '$2y$10$ZP.PclvDvkH6SMLlOm9wTucT5Qj0zyKIebAs2jSwyYATUdb5kYx5a', '2017-03-28 00:00:14'),
('damo@outlook.in', '$2y$10$BQLznf7Cpm4SY/YcN1ea9ebn3l9IVA.hTEcpcm3r68jXn8hRGzEgC', '2017-03-28 00:29:52'),
('sarvanngokul@gmail.com', '$2y$10$HjPPc6/p3jgIgycLV9puCuOVao2ntC4o0z/WRynNyqZty0ycfUzJW', '2017-03-30 22:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(10) NOT NULL,
  `stationarea` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `stationarea`, `created_at`, `updated_at`) VALUES
(1, 'Ukkadam', '2017-03-26 03:34:57', '2017-03-26 03:34:57'),
(2, 'Ramanathapuram', '2017-03-26 03:35:01', '2017-03-26 03:35:01'),
(3, 'Kinathukadavu', '2017-03-26 03:35:07', '2017-03-26 03:35:07'),
(4, 'Singanallur', '2017-03-26 03:35:14', '2017-03-26 03:35:14'),
(5, 'Podanur', '2017-03-26 03:35:26', '2017-03-26 03:35:26'),
(6, 'Coimbatore', '2017-03-27 22:52:29', '2017-03-27 22:52:29'),
(8, 'Vadakovai', '2017-03-28 00:54:54', '2017-03-28 00:54:54'),
(9, 'Mettupalayam', '2017-03-28 00:55:05', '2017-03-28 00:55:05'),
(12, 'Chettipalayam', '2017-03-28 22:15:35', '2017-03-28 22:35:15'),
(13, 'Saravanampatti', '2017-03-30 22:10:02', '2017-03-30 22:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `tenfams`
--

CREATE TABLE `tenfams` (
  `agreementno` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenfams`
--

INSERT INTO `tenfams` (`agreementno`, `name`, `gender`, `age`, `relation`, `created_at`, `updated_at`) VALUES
(11123, 'ffgh', 'male', 45, 'son', '2017-03-10 04:05:53', '2017-03-10 04:05:53'),
(23567, 'gokul', 'male', 21, 'son', '2017-03-14 03:50:08', '2017-03-14 03:50:08'),
(23567, 'sss', 'male', 23, 'son', '2017-03-14 03:50:08', '2017-03-14 03:50:08'),
(234567, 'anu', 'female', 24, 'daughter', '2017-03-15 03:38:24', '2017-03-15 03:38:24'),
(234567, 'raghav', 'male', 21, 'son', '2017-03-15 03:38:24', '2017-03-15 03:38:24'),
(782642, 'ammu', 'female', 20, 'daughter', '2017-03-20 01:20:14', '2017-03-20 01:20:14'),
(782642, 'rohit', 'male', 15, 'son', '2017-03-20 01:20:15', '2017-03-20 01:20:15'),
(512235, 'Govind', 'male', 55, 'Father', '2017-03-27 23:56:39', '2017-03-27 23:56:39'),
(512235, 'Poongodi', 'female', 43, 'Daughter', '2017-03-27 23:56:40', '2017-03-27 23:56:40'),
(512235, 'Gowtham', 'male', 25, 'Brother', '2017-03-27 23:56:40', '2017-03-27 23:56:40'),
(578934, 'raj', 'male', 23, 'Son', '2017-04-02 23:26:32', '2017-04-02 23:26:32'),
(578934, 'raji', 'female', 16, 'Daughter', '2017-04-02 23:26:32', '2017-04-02 23:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badgeid` bigint(8) NOT NULL,
  `stationarea` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stationname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` blob NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `badgeid`, `stationarea`, `stationname`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'Gokul', 12345, 'Coimbatore', 'R2', 0x313438393939323639312e4a5047, 'sarvanngokul@gmail.com', '$2y$10$3CVnR1dV/uqRrlC9uErk6.T/FmfovTa3PcSuEOnxU3RoszfbFbY7O', 'NNanqh06hErigEXVeBpgcc7mXrLmVIDAPStjb6B9qatAF4xK7N80iDfcDawz', '2017-03-08 08:08:45', '2017-03-20 01:21:32'),
(24, 'Prasath', 11111, 'Ukkadam', 'S1', 0x313439303738303236362e6a7067, 'prasath@gmail.com', '$2y$10$K90ZxWE0aktmmLbiYuiUxOknhqv0rdBjXV4f717LUKZvQJQH73Kcq', 'sYMxgCzR6Yy4ASO3OFzsZgNK0QggYNniHIlZpfpgrMYFe4uzfVBrnXjBNAtI', '2017-03-09 08:46:42', '2017-03-29 04:07:47'),
(25, 'Raj', 73758, 'Ukkadam', 'S2', 0x313438393536343838392e6a7067, 'rajkumar@gmail.com', '$2y$10$T3o9Ynmr.jZ7CMxNIUEWCefBICQzP0h5exiXD4SkSI/UpWduMm4fe', 'nwNcwcnXKTtgFZnVJyJdWiIuIYfOVLaTaCS3FZqLVCCZsKUoGtf6W71mmwkb', '2017-03-15 02:28:11', '2017-03-15 02:31:29'),
(26, 'Saradee', 34567, 'Podanur', 'S2', 0x313438393536373039362e6a7067, 'sarakumar@gmail.com', '$2y$10$WJw36ZuhlGHRjTb8gwigVecOOtgOwAzDZTGorUWMNcytTkekT2aum', '8RswV4UUl0vQwaFOVasmPgQWB9ful9m5SzqbYgVqIpHgAL9Q5Gn5OdZY2yj0', '2017-03-15 03:01:27', '2017-03-15 03:08:16'),
(27, 'Damo', 600028, 'Ramanathapuram', 'B12', 0x4d79206f6c642062696b652e6a7067, 'damo@outlook.in', '$2y$10$gdN6VExRHTVj3UHgAr72m.WT.Q8F8FPkYUy1RD4jJ0au6kbF7UmAa', NULL, '2017-03-27 23:45:44', '2017-03-27 23:45:44'),
(28, 'Elango', 27547, 'Coimbatore', 'f5', 0x313439303933313336382e6a7067, 'elango@gmail.com', '$2y$10$qEY.V9RvlN5fYVWrtuGi3uXAmhOUn40b5VK9AA4A8XU.FH99sGwLe', 'vk0dky8PxUSUoX7XKKjtz3mpAt9GKzdkHRlVOHBGWrAvrX1z211KUw4zeDcJ', '2017-03-30 22:05:07', '2017-03-30 22:06:09'),
(29, 'Saravanan', 678901, 'Saravanampatti', 'B12', 0x313439313139363031362e6a7067, 'sarvann1046@gmail.com', '$2y$10$74g0V7p9yesHe49zZ1XK1OpzumMOjiGyJMajTriTKBcM.CD1/L7Sa', '6cs223D3ropBJSo47VUKsiaUj0spv2igU0iKfAhYFCf2JuNGplTtFGpK78d5', '2017-04-02 23:34:18', '2017-04-02 23:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agreements`
--
ALTER TABLE `agreements`
  ADD PRIMARY KEY (`oagreementno`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `oagreementno` (`oagreementno`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD UNIQUE KEY `sno` (`id`),
  ADD UNIQUE KEY `stationarea` (`stationarea`);

--
-- Indexes for table `tenfams`
--
ALTER TABLE `tenfams`
  ADD KEY `tenfams_agreementno_foreign` (`agreementno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `badgeid` (`badgeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agreements`
--
ALTER TABLE `agreements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tenfams`
--
ALTER TABLE `tenfams`
  ADD CONSTRAINT `tenfams_agreementno_foreign` FOREIGN KEY (`agreementno`) REFERENCES `agreements` (`oagreementno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
