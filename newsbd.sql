-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 05:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catname_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catname_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_bn_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_en_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname_bn`, `catname_en`, `cat_bn_slug`, `cat_en_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশ', 'Bangladesh', 'banglades', 'bangladesh', 1, '2022-07-23 16:05:19', '2022-07-23 16:05:19'),
(2, 'রাজনীতি', 'Politics', 'rajneeti', 'politics', 1, '2022-07-23 16:05:33', '2022-07-23 16:05:33'),
(3, 'খেলার খবর', 'Sports', 'khelar-khbr', 'sports', 1, '2022-07-23 16:05:45', '2022-07-23 16:05:45'),
(4, 'বিনোদন', 'Entertainment', 'binodn', 'entertainment', 1, '2022-07-23 16:05:56', '2022-07-23 16:05:56'),
(5, 'আন্তর্জাতিক', 'International', 'antrjatik', 'international', 1, '2022-07-23 16:10:49', '2022-07-23 16:10:49'),
(6, 'মতামত', 'Opinion', 'mtamt', 'opinion', 1, '2022-07-23 16:11:42', '2022-07-23 16:11:42'),
(9, 'খবর', 'news', 'khbr', 'news', 1, '2022-07-30 04:57:46', '2022-07-30 05:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_bn_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_en_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_bn`, `district_en`, `dis_bn_slug`, `dis_en_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'সিরাজগঞ্জ', 'Sirajgonj', 'sirajgnj', 'sirajgonj', 1, '2022-07-23 16:22:17', '2022-07-23 16:22:17'),
(2, 'বগুড়া', 'Bogura', 'bgura', 'bogura', 1, '2022-07-23 16:22:28', '2022-07-23 16:22:28'),
(3, 'ঢাকা', 'Dhaka', 'dhaka', 'dhaka', 1, '2022-07-23 16:22:41', '2022-07-23 16:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `live_tvs`
--

CREATE TABLE `live_tvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_tvs`
--

INSERT INTO `live_tvs` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7H24rdLGD8A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, NULL, '2022-07-28 13:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_01_141348_create_categories_table', 1),
(6, '2022_07_01_141852_create_sub_categories_table', 1),
(7, '2022_07_01_141959_create_districts_table', 1),
(8, '2022_07_01_142047_create_sub_districts_table', 1),
(9, '2022_07_02_031226_create_posts_table', 1),
(10, '2022_07_06_174839_create_socials_table', 1),
(11, '2022_07_06_175154_create_seos_table', 1),
(12, '2022_07_09_063156_create_namajs_table', 1),
(13, '2022_07_09_105035_create_live_tvs_table', 1),
(14, '2022_07_16_043429_create_notices_table', 1),
(15, '2022_07_16_115514_create_websites_table', 1),
(16, '2022_07_16_121859_create_photo_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `namajs`
--

CREATE TABLE `namajs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fojor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `johor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magrib` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Esha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jummah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `namajs`
--

INSERT INTO `namajs` (`id`, `fojor`, `johor`, `asor`, `magrib`, `Esha`, `jummah`, `created_at`, `updated_at`) VALUES
(1, '4.45 am', '1.30 pm', '5.00 pm', '7.05 pm', '8.45 pm', '1.15 pm', NULL, '2022-07-23 17:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_en`, `notice_bn`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Bangladesh Railway is a state-owned and state-operated railway transport company of Bangladesh. Its headquarters is located in Dhaka.', 'বাংলাদেশ রেলওয়ে হচ্ছে বাংলাদেশের একটি রাষ্ট্র-মালিকানাধীন ও রাষ্ট্র-পরিচালিত রেল পরিবহন সংস্থা। এর সদর দপ্তর ঢাকায় অবস্থিত।', 1, '2022-07-27 16:35:41', '2022-07-27 16:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `photo`, `title_en`, `title_bn`, `type`, `created_at`, `updated_at`) VALUES
(1, 'storage/images/gallery\\82778.jpg', 'Doctor', 'ডাক্তার', 1, '2022-07-24 03:10:02', '2022-07-24 03:10:02'),
(2, 'storage/images/gallery\\14660.webp', 'brother and sister love', 'ভাই বোন ভালবাসা', 1, '2022-07-24 03:15:11', '2022-07-24 03:15:11'),
(3, 'storage/images/gallery\\84411.webp', 'Bangladesh cricket team', 'বাংলাদেশ ক্রিকেট দল', NULL, '2022-07-24 03:19:02', '2022-07-24 03:19:02'),
(4, 'storage/images/gallery\\30247.jpg', 'Covid-19: Booster dose', 'কোভিড-১৯: বুস্টার ডোজ', NULL, '2022-07-24 03:19:51', '2022-07-24 03:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `subdistrict_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_section_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `district_id`, `subdistrict_id`, `user_id`, `title_bn`, `title_en`, `image`, `image_title`, `details_bn`, `details_en`, `tags_bn`, `tags_en`, `headline`, `first_section`, `first_section_thumbnail`, `big_thumbnail`, `post_date`, `post_month`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 3, 1, 1, 'বিএনপি আমার কার্যালয় দখল করতে এলে চা দেবে: প্রধানমন্ত্রী শেখ হাসিনা', 'Will offer tea if BNP comes to seize my office: PM Hasina', 'storage/images/postimages\\49490.jpg', NULL, 'Prime minister Sheikh Hasina on Saturday said she will offer tea to the BNP leaders and give them a patient hearing even if they come to seize her office (prime minister\'s office) as she believes in democracy, UNB reports.\r\n\r\n\"I will offer them tea, I will give them a place to sit. I will listen to them whatever they want to say. Look, I believe in democracy,\" Sheikh Hasina said.\r\n\r\nShe made this remark while speaking at a meeting of her Awami League\'s Dhaka North and South units.', 'বিএনপি আমার কার্যালয় দখল করতে এলে চা দেবে: প্রধানমন্ত্রী শেখ হাসিনাবিএনপি আমার কার্যালয় দখল করতে এলে চা দেবে: প্রধানমন্ত্রী শেখ হাসিনাবিএনপি আমার কার্যালয় দখল করতে এলে চা দেবে: প্রধানমন্ত্রী শেখ হাসিনাবিএনপি আমার কার্যালয় দখল করতে এলে চা দেবে: প্রধানমন্ত্রী শেখ হাসিনাবিএনপি আমার কার্যালয় দখল করতে এলে চা দেবে: প্রধানমন্ত্রী শেখ হাসিনা', 'রাজনীতি', 'politric', '1', NULL, '1', NULL, '23-07-2022', 'July', 1, '2022-07-23 16:31:09', '2022-07-23 16:31:09'),
(2, 1, 8, 3, 1, 1, 'জন্মদিনে স্মরণ করলেন তাজউদ্দীন আহমদ কে', 'Tajuddin Ahmad remembered on his birthday', 'storage/images/postimages\\40680.jpg', NULL, 'ক্ষমতাসীন রাজনৈতিক দল বাংলাদেশ আওয়ামী লীগ (আ.লীগ) শনিবার দেশের প্রথম প্রধানমন্ত্রী ও মুক্তিযুদ্ধের সময় আওয়ামী লীগের সাধারণ সম্পাদক তাজউদ্দীন আহমদের ৯৭তম জন্মদিনে স্মরণ করেছে।\r\nআওয়ামী লীগ দলের ভেরিফাইড ফেসবুক পেজে একটি পোস্টের মাধ্যমে প্রয়াত নেতাকে শ্রদ্ধা জানায়, যেখানে লেখা ছিল, “২৩ জুলাই বাংলাদেশের প্রথম প্রধানমন্ত্রী, জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের ঘনিষ্ঠ সহযোগী এবং বাংলাদেশের সাধারণ সম্পাদকের জন্মদিন। মুক্তিযুদ্ধের সময় আওয়ামী লীগ ড. বঙ্গতাজকে (বাংলার তাজউদ্দীন) জন্মদিনে আমরা গভীর শ্রদ্ধা জানাই।', 'Bangladesh Awami League (AL), the ruling political party, remembered Tajuddin Ahmad, the country’s first prime minister and AL’s general secretary during the liberation war, on the latter’s 97th birthday on Saturday.\r\nAL paid respects to the late leader through a post on the party’s verified Facebook page, which read, “23 July is the birthday of Bangladesh’s first prime minister, a close aide of Father of The Nation Bangabandhu Sheikh Mujibur Rahman, and general secretary of Bangladesh Awami League during the liberation war. We pay deep respects to Bangataj (Tajuddin of Bengal) on his birthday.”', 'তাজউদ্দীন', 'Tajuddin', '1', '1', NULL, NULL, '24-07-2022', 'July', 1, '2022-07-24 03:32:30', '2022-07-24 03:32:30'),
(3, 5, 6, 3, 1, 1, ' রাশিয়া-ইউক্রেন শস্য চুক্তি হুমকির মুখে পড়েছে', 'Russia-Ukraine grain deal faces threat after missiles hit Odessa', 'storage/images/postimages\\77466.webp', NULL, 'শনিবার দক্ষিণ ইউক্রেনের ওডেসা প্রধান বন্দরে রাশিয়ার ক্ষেপণাস্ত্র আঘাত হেনেছে, ইউক্রেনের সামরিক বাহিনী বলেছে, কালো সাগর বন্দর থেকে শস্য রপ্তানি বন্ধ করার জন্য শুক্রবার স্বাক্ষরিত একটি চুক্তিতে আঘাত করেছে।\r\n\r\nশুক্রবার মস্কো এবং কিয়েভের দ্বারা স্বাক্ষরিত যুগান্তকারী চুক্তিটিকে বিশ্বব্যাপী খাদ্যের ক্রমবর্ধমান দাম রোধ করার জন্য গুরুত্বপূর্ণ হিসাবে দেখা হয়, ওডেসা সহ কৃষ্ণ সাগরের বন্দরগুলি থেকে নির্দিষ্ট রপ্তানি পাঠানোর অনুমতি দিয়ে সরবরাহের সংকট কমিয়ে দেয়।\r\n\r\nজাতিসংঘের কর্মকর্তারা শুক্রবার বলেছিলেন যে তারা আশা করেছিলেন যে চুক্তিটি কয়েক সপ্তাহের মধ্যে কার্যকর হবে তবে শনিবারের ধর্মঘটের কারণে এটি এখনও সম্ভব হবে কিনা তা এখনও স্পষ্ট নয়।', 'Russian missiles hit the major port of Odesa in southern Ukraine on Saturday, the Ukrainian military said, dealing a blow to a deal signed on Friday to unblock grain exports from Black Sea ports.\r\n\r\nThe landmark deal signed by Moscow and Kyiv on Friday is seen as crucial to curbing soaring global food prices, easing a supply crunch by allowing certain exports to be shipped from Black Sea ports including Odesa.\r\nU.N. officials had said on Friday they hoped the agreement would be operational in a few weeks but it was not yet clear if that would still be possible given Saturday\'s strikes.', 'রাশিয়া', 'Russia', NULL, '1', NULL, NULL, '24-07-2022', 'July', 1, '2022-07-24 03:36:59', '2022-07-24 03:36:59'),
(4, 5, 5, 3, 1, 1, 'খাশোগি হত্যাকাণ্ড নিয়ে সৌদি মুখোমুখি ', 'Biden confronts Saudi crown prince over Khashoggi murder', 'storage/images/postimages\\96948.webp', NULL, 'মার্কিন প্রেসিডেন্ট জো বাইডেন শুক্রবার বলেছেন যে তিনি সৌদি আরবের ক্রাউন প্রিন্স মোহাম্মদ বিন সালমানকে বলেছিলেন যে তিনি ওয়াশিংটন পোস্টের সাংবাদিক জামাল খাশোগি হত্যার জন্য তাকে দায়ী করেছেন, রাজ্যের ডি ফ্যাক্টো শাসকের সাথে মুষ্টিবদ্ধ ধাক্কা বিনিময়ের পরই।\r\n\r\n2018 সালে খাশোগির হত্যাকাণ্ডের পর একটি দেশের সাথে সম্পর্ক পুনঃস্থাপনের জন্য একটি সফরে, বিডেন বলেছিলেন যে ক্রাউন প্রিন্স, এমবিএস নামে পরিচিত, হত্যায় জড়িত থাকার কথা অস্বীকার করেছেন এবং বলেছেন যে তিনি দায়ীদেরকে দায়ী করেছেন।\r\n\r\nবিডেন সাংবাদিকদের বলেন, \"খাশোগির হত্যাকাণ্ডের প্রতি শ্রদ্ধা রেখে, আমি বৈঠকের শীর্ষে এটিকে উত্থাপন করেছি, এটা স্পষ্ট করে দিয়েছি যে আমি তখন এটি সম্পর্কে কী ভেবেছিলাম এবং এখন আমি এটি সম্পর্কে কী ভাবছি\"।', 'US President Joe Biden said on Friday he told Saudi Arabia\'s Crown Prince Mohammed bin Salman he held him responsible for the murder of Washington Post journalist Jamal Khashoggi, shortly after exchanging a fist bump with the kingdom\'s de facto ruler.\r\n\r\nOn a trip to reset relations with a country he had called a pariah after Khashoggi\'s killing in 2018, Biden said the crown prince, known as MbS, denied involvement in the murder and said he had held those responsible to account.\r\n\r\n\"With respect to the murder of Khashoggi, I raised it at the top of the meeting, making it clear what I thought of it at the time and what I think about it now,\" Biden told reporters.', 'সৌদি', 'Soidi Arob', NULL, '1', NULL, '1', '24-07-2022', 'July', 1, '2022-07-24 03:41:26', '2022-07-24 03:41:26'),
(5, 3, 3, 3, 1, 1, '  মুখ ফিরিয়ে নেওয়ায় রোনালদো অচলাবস্থায়', 'Ronaldo in limbo as Europe’s elite turn their backs on Man Utd star', 'storage/images/postimages\\84970.webp', NULL, 'ম্যানচেস্টার ইউনাইটেড স্ট্রাইকারের ওল্ড ট্র্যাফোর্ড থেকে বেরিয়ে আসার প্রচেষ্টা তার স্বাক্ষরের জন্য প্রত্যাশিত ভিড় তৈরি করতে ব্যর্থ হওয়ার পরে ক্রিশ্চিয়ানো রোনালদো একটি অনিশ্চিত ভবিষ্যতের মুখোমুখি।\r\n\r\nপর্তুগাল সুপারস্টার চ্যাম্পিয়ন্স লিগের যোগ্যতা অর্জনে দলের ব্যর্থতার পরে তার বোমাশেল প্রস্থান অনুরোধের সাথে এই মাসের শুরুতে ইউনাইটেডকে চমকে দিয়েছিলেন।\r\n\r\nরোনালদোর প্রত্যাশা ছিল অনেক শীর্ষস্থানীয় ক্লাব তাকে সই করার জন্য ঝাঁকুনি দেবে।\r\n\r\nকিন্তু তার উজ্জ্বল ক্যারিয়ারে প্রথমবারের মতো তিনি ইউরোপের ধনী অভিজাতদের জন্য আর একটি অপরিহার্য আইটেম নন কারণ চেলসি, বায়ার্ন মিউনিখ, বার্সেলোনা এবং প্যারিস সেন্ট-জার্মেইন সবাই এই ফরোয়ার্ডের দিকে মুখ ফিরিয়ে নিয়েছে।', 'Cristiano Ronaldo faces an uncertain future after the Manchester United striker’s attempt to force his way out of Old Trafford failed to spark the expected rush for his signature.\r\n\r\nThe Portugal superstar shocked United earlier this month with his bombshell exit request after the team’s failure to qualify for the Champions League.\r\n\r\nRonaldo would have anticipated a host of top clubs jostling to sign him.\r\n\r\nBut for the first time in his glittering career he is no longer a must-have item for Europe’s wealthy elite as Chelsea, Bayern Munich, Barcelona and Paris Saint-Germain all appear to have turned their backs on the forward.', 'রোনালদো', 'Ronaldo', NULL, '1', NULL, 'NULL', '24-07-2022', 'July', 1, '2022-07-24 03:44:33', '2022-07-24 03:44:33'),
(6, 3, 4, 3, 1, 1, 'নুরুল হাসান টি-টোয়েন্টি অধিনায়ক', 'Nurul Hasan  T20I captain', 'storage/images/postimages\\77177.webp', NULL, 'নুরুল হাসান তার ক্যারিয়ারের বেশিরভাগ সময়ই ‘সঠিক জায়গায়, ভুল সময়ে’ ছিলেন।\r\n\r\nএই উইকেটরক্ষক-ব্যাটসম্যানকে ব্যাপকভাবে বাংলাদেশের সেরা রক্ষক হিসাবে গণ্য করা হয় এবং আন্তর্জাতিক পর্যায়ে নির্ভরযোগ্য ব্যাটসম্যান হওয়ার ক্ষমতাও রয়েছে।\r\n\r\nতারপরও, 2016 সালে আন্তর্জাতিক ক্রিকেটে অভিষেকের পর থেকে, নুরুল বাংলাদেশের জন্য একজন প্রান্তিক খেলোয়াড় হিসেবে রয়ে গেছে, যখন একজন নিয়মিত সদস্য আহত হয় বা অনুপলব্ধ হয় এবং উল্লিখিত খেলোয়াড় প্রত্যাবর্তনের জন্য প্রস্তুত হয় তখন তাকে দল থেকে বাদ দেওয়া হয়। .', 'For most of his career, Nurul Hasan has been ‘At the right place, at the wrong time’.\r\n\r\nThe wicketkeeper-batsman is widely regarded as the best keeper in Bangladesh while also possessing the ability to become a dependable batsman at the international level.\r\n\r\nStill, since his debut in international cricket in 2016, Nurul has remained a fringe player for Bangladesh, getting drafted into the team when a regular member is either is injured or unavailable and promptly dumped out of the team when the said player is ready to comeback.', 'টি-টোয়েন্টি', 'T-20', NULL, '1', '0', '1', '24-07-2022', 'July', 1, '2022-07-24 03:49:18', '2022-07-24 03:49:18'),
(7, 1, 10, 1, 2, 1, 'বিয়ে করছেন চলচ্চিত্র নায়িকা  পূর্ণিমা', 'Purnima gets married', 'storage/images/postimages\\65774.webp', NULL, 'পূর্ণিমার স্বামী আশফাকুর রহমান রবিন ঢাকায় একটি বেসরকারি প্রতিষ্ঠানে চাকরি করেন।', 'Popular Bangladeshi actress Dilara Hanif Purnima has got married for the second time.', 'পূর্ণিমা....', 'Purnima begum', NULL, NULL, '1', NULL, '29-07-2022', 'July', 1, '2022-07-24 03:54:44', '2022-07-29 14:30:00'),
(8, 6, 12, 3, 1, 1, 'শ্রীলঙ্কার শিক্ষা নেওয়া উচিত ছিল', 'Sri Lanka should have learnt from Bangladesh', 'storage/images/postimages\\62984.jpg', NULL, 'শ্রীলঙ্কার সংকট থেকে আমাদের কিছু শেখার নেই, বরং দ্বীপরাষ্ট্রটির উচিত ছিল বাংলাদেশের সামষ্টিক অর্থনৈতিক ব্যবস্থাপনা শেখা। গত দেড় দশকে সামষ্টিক অর্থনৈতিক ব্যবস্থাপনায় আমাদের কোনো ব্যর্থতা নেই।\r\n\r\nএই সময়ের মধ্যে, আমরা কোনো উল্লেখযোগ্য ত্রুটি করিনি এবং ঋণ পরিশোধের দায় তৈরি করতে পারে এমন কোনো প্রকল্প গ্রহণ করিনি।\r\n\r\nকিন্তু শ্রীলঙ্কা এমন অনেক ভুল করেছে এবং কোনো অধ্যয়ন ছাড়াই অনেক অতিরিক্ত প্রকল্প হাতে নিয়েছে। এ কারণে দেশ এখন সংকটে পড়েছে।\r\n\r\nশিক্ষা, স্বাস্থ্য, নারীর ক্ষমতায়নসহ বিভিন্ন ক্ষেত্রে জাতি অগ্রদূত ছিল।', 'We have nothing to learn from the crisis in Sri Lanka, rather the island nation should have learnt macroeconomic management from Bangladesh. We have not had any failure in macroeconomic management in the last one and a half decades.\r\n\r\nDuring the period, we did not make any remarkable error and undertake any project that may create debt repayment liability.\r\n\r\nBut Sri Lanka has made many such mistakes and taken up many superfluous projects without any study. This is why the country has now fallen into crisis.\r\n\r\nThe nation was a forerunner in various sectors, including education, health, and women empowerment.', 'শ্রীলঙ্কার', 'Sri Lanka', NULL, '1', '0', NULL, '24-07-2022', 'July', 1, '2022-07-24 04:01:14', '2022-07-24 04:01:14'),
(9, 2, 2, 3, 1, 1, 'পদ্মা সেতু ট্যুর প্যাকেজ -৯৯৯ টাকায় !!', 'Dhaka-Padma Bridge-Dhaka for Tk 999', 'storage/images/postimages\\48090.webp', NULL, 'পদ্মা সেতুতে অর্ধদিনের সফরে ঢাকাবাসীদের জন্য ট্যুর প্যাকেজ চালু করেছে বাংলাদেশ পার্সন কর্পোরেশন। আজ (শুক্রবার) থেকে এ উদ্যোগ শুরু হবে।\r\n\r\nজনপ্রতি ৯৯৯ টাকায় পর্যটন করপোরেশন পর্যটকদের ঢাকা থেকে পদ্মা সেতু এবং ছয় ঘণ্টার মধ্যে রাজধানীতে নিয়ে যাবে। প্যাকেজটি সপ্তাহে দুই দিন চলবে - শুক্র ও শনিবার।\r\n\r\nদুটি শীতাতপ নিয়ন্ত্রিত পর্যটন কোস্টার, যার প্রতিটিতে ২৯টি আসন রয়েছে, বিকেল ৪টায় আগারগাঁওয়ের পারজাতন ভবন থেকে যাত্রা শুরু করবে এবং রাত ১০টার মধ্যে ঢাকায় ফিরে আসবে।', 'Bangladesh Parjatan Corporation has launched a tour package for the people in Dhaka to go on a half-day-long tour to the Padma Bridge. The initiative will begin today (Friday).\r\n\r\nFor Tk 999 per person, the Parjatan Corporation will take tourists from Dhaka to the Padma Bridge and back to the capital in six hours. The package will run two days a week – Friday and Saturday.\r\n\r\nTwo air conditioned tourist coasters, with 29 seats each, will start the journey from the Parjatan Bhaban in Agargaon at 4:00pm and will return to Dhaka by 10:00pm.', 'পদ্মা সেতু', 'Padma Bridge-', NULL, '0', NULL, 'NULL', '24-07-2022', 'July', 1, '2022-07-24 04:10:53', '2022-07-24 04:10:53'),
(10, 3, 3, 3, 1, 1, 'সাফ অনূর্ধ্ব-২০ চ্যাম্পিয়নশিপে বাংলাদেশের জয়ের সূচনা', 'Winning start for Bangladesh in SAFF U-20 Championship', 'storage/images/postimages\\17125.webp', NULL, 'বাংলাদেশ অনূর্ধ্ব-২০ জাতীয় ফুটবল দল আজ (সোমবার) ভারতের ভুবনেশ্বরের কলিঙ্গা স্টেডিয়ামে অনুষ্ঠিত সাফ অনূর্ধ্ব-২০ চ্যাম্পিয়নশিপের উদ্বোধনী ম্যাচে শ্রীলঙ্কাকে ১-০ গোলে হারিয়ে জয়ী সূচনা করেছে, বাসস রিপোর্ট।\r\n\r\nঅনুর্বর প্রথমার্ধের পর ম্যাচের ৭১তম মিনিটে বাংলাদেশের হয়ে সবচেয়ে গুরুত্বপূর্ণ গোলটি করেন মিরাজুল ইসলাম।\r\n\r\nবাংলাদেশ তাদের দ্বিতীয় ম্যাচ খেলবে ২৭ জুলাই স্বাগতিক ভারতের বিপক্ষে, ২৯ জুলাই মালদ্বীপের বিপক্ষে এবং ২ আগস্ট নেপালের বিপক্ষে প্রতিদ্বন্দ্বিতা করবে। সবগুলো ম্যাচই হবে ভুবনেশ্বরের কলিঙ্গা স্টেডিয়ামে।', 'Bangladesh U-20 national football team got off to a winning start as they beat Sri Lanka by 1–0 goal in their opening match of the SAFF U-20 Championship held today (Monday) at Kalinga Stadium in Bhubaneswar, India, BSS reports.\r\n\r\nAfter the barren first half, Mirazul Islam scored the all-important goal for Bangladesh in the 71st minute of the match.\r\n\r\nBangladesh will play their second match against host India on 27 July, meet the Maldives on 29 July and compete against Nepal on 2 August. All the matches will be held at Kalinga Stadium in Bhubaneswar.', 'ফুটবল', 'Football', '1', '1', NULL, NULL, '26-07-2022', 'July', 1, '2022-07-26 13:36:08', '2022-07-26 13:36:08'),
(11, 3, 3, 3, 1, 1, 'করোনাভাইরাস যুদ্ধে মেসি,', 'Messi, Guardiola donate €1m', 'storage/images/postimages\\68057.jpg', NULL, 'বার্সেলোনার ফরোয়ার্ড লিওনেল মেসি এবং ম্যানচেস্টার সিটির ম্যানেজার পেপ গার্দিওলা প্রত্যেকে করোনাভাইরাসের বিরুদ্ধে লড়াইয়ের জন্য এক মিলিয়ন ইউরো ($1.08 মিলিয়ন) দান করেছেন।রে লিখেছেন, \"করোনাভাইরাসের বিরুদ্ধে লড়াই করার জন্য ক্লিনিকে দান করেছেন লিও মেসি। \"আপনাকে অনেক ধন্যবাদ, লিও, আপনার প্রতিশ্রুতি এবং আপনার সমর্থনের জন্য।\"\r\n\r\nবার্সেলোনার প্রাক্তন খেলোয়াড় এবং ম্যানেজার গার্দিওলা অ্যাঞ্জেল সোলার ড্যানিয়েল ফাউন্ডেশন এবং মেডিক্যাল কলেজ অফ বার্সেলোনার দ্বারা শুরু করা একটি প্রচারে তার অবদান রেখেছিলেন।', 'Barcelona forward Lionel Messi and Manchester City manager Pep Guardiola have each donated one million euros ($1.08 million) towards the fight against coronavirus.', 'মেসি', 'mesi', '1', NULL, NULL, NULL, '29-07-2022', 'July', 1, '2022-07-26 13:40:39', '2022-07-29 14:29:20'),
(12, 3, 3, 3, 1, 1, 'জুভেন্টাসের দিবালা  ইতিবাচক পরীক্ষা করেছেন', 'Juventus\'s Dybala  coronavirus', 'storage/images/postimages\\49989.jpg', NULL, 'সকার ফুটবল - সেরি এ - স্প্যাল ​​বনাম জুভেন্টাস - পাওলো মাজ্জা, ফেরার, ইতালি - 22 ফেব্রুয়ারী, 2020 জুভেন্টাসের পাওলো দিবালা ম্যাচের আগে ওয়ার্ম আপ চলাকালীন REUTERS/ফাইল ফটো\r\nজুভেন্টাস এবং আর্জেন্টিনার সকার ফরোয়ার্ড পাওলো দিবালা করোনভাইরাসটির জন্য ইতিবাচক পরীক্ষা করেছেন তবে তার কোনও লক্ষণ নেই, শনিবার ইতালিয়ান সেরি এ ক্লাব বলেছে, তাকে এখন পর্যন্ত সংক্রামিত হওয়া সবচেয়ে হাই-প্রোফাইল খেলোয়াড়দের একজন করে তুলেছে।\r\n\r\nতুরিন ক্লাব এক বিবৃতিতে বলেছে, 11 মার্চ থেকে স্বেচ্ছায় হোম আইসোলেশনে থাকা খেলোয়াড়কে পর্যবেক্ষণ করা হবে। \"তিনি ভাল এবং উপসর্গহীন।\"\r\n\r\n2018 সালে ফ্রান্সের সাথে বিশ্বকাপ জয়ী মিডফিল্ডার ব্লেইস মাতুইদি এবং ডিফেন্ডার ড্যানিয়েল রুগানির পরে তিনি ক্লাবের তৃতীয় খেলোয়াড়, ইউরোপের বৃহত্তম এবং ইতালির ঘরোয়া পরিপ্রেক্ষিতে সবচেয়ে সফল একজন খেলোয়াড়।', 'Soccer Football - Serie A - SPAL v Juventus - Paolo Mazza, Ferrara, Italy - Feb 22, 2020 Juventus` Paulo Dybala during the warm up before the match REUTERS/FILE PHOTO\r\nJuventus and Argentina soccer forward Paulo Dybala has tested positive for coronavirus but has no symptoms, the Italian Serie A club said on Saturday, making him one of the most high-profile players to be infected so far.\r\n\r\n\"The player, in voluntary home isolation since March 11, will continue to be monitored,\" the Turin club said in a statement. \"He is well and asymptomatic.\"\r\n\r\nHe is the third player at the club, one of the biggest in Europa and Italy\'s most successful in domestic terms, to test positive after midfielder Blaise Matuidi, a World Cup winner with France in 2018, and defender Daniele Rugani.', 'দিবালা', 'Dybala', NULL, '1', NULL, NULL, '26-07-2022', 'July', 1, '2022-07-26 13:43:29', '2022-07-26 13:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_verification`, `alexa_analytics`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'newsbd', 'newsbd', 'newsbd', 'This newsbd is a online news portal', 'newsbd', 'newsbd', 'newsbd', 'storage/images/logo\\41891.png', NULL, '2022-07-27 17:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `youtube`, `github`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/sorkars', 'https://www.twitter.com/sorkars', 'https://www.youtube.com/sorkars', 'https://www.github.com/sorkars', 'https://www.linkedin.com/sorkars', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcatname_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcatname_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_bn_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcat_en_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcatname_bn`, `subcatname_en`, `subcat_bn_slug`, `subcat_en_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'বিএনপি', 'BNP', 'bienpi', 'bnp', 1, '2022-07-23 16:12:29', '2022-07-23 16:12:29'),
(2, '2', 'আওয়ামী লীগ', 'Awami League', 'aoozamee-leeg', 'awami-league', 1, '2022-07-23 16:12:53', '2022-07-23 16:12:53'),
(3, '3', 'ফুটবল', 'FootBoll', 'futbl', 'footboll', 1, '2022-07-23 16:13:07', '2022-07-23 16:13:07'),
(4, '3', 'ক্রিকেট', 'Cricket', 'kriket', 'cricket', 1, '2022-07-23 16:13:21', '2022-07-23 16:13:21'),
(5, '5', 'Asia', 'এশিয়া', 'asia', 'esiza', 1, '2022-07-23 16:14:43', '2022-07-23 16:14:43'),
(6, '5', 'Europe', 'ইউরোপ', 'europe', 'iurop', 1, '2022-07-23 16:15:42', '2022-07-23 16:15:42'),
(8, '1', 'সরকার', 'Government', 'srkar', 'government', 1, '2022-07-23 16:17:14', '2022-07-23 16:17:14'),
(9, '1', 'স্থানীয় সংবাদ', 'Local News', 'sthaneez-sngbad', 'local-news', 1, '2022-07-23 16:18:01', '2022-07-23 16:18:01'),
(10, '1', 'অপরাধ', 'Crime', 'opradh', 'crime', 1, '2022-07-23 16:18:50', '2022-07-23 16:18:50'),
(11, '4', 'সিনেমা', 'Movies', 'sinema', 'movies', 1, '2022-07-24 03:52:37', '2022-07-24 03:52:37'),
(12, '6', 'সম্পাদকীয়', 'Editorial', 'smpadkeez', 'editorial', 1, '2022-07-24 03:56:13', '2022-07-24 03:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `sub_districts`
--

CREATE TABLE `sub_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdisname_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdisname_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdis_bn_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdis_en_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_districts`
--

INSERT INTO `sub_districts` (`id`, `district_id`, `subdisname_bn`, `subdisname_en`, `subdis_bn_slug`, `subdis_en_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'ঢাকা', 'Dhaka', 'dhaka', 'dhaka', 1, '2022-07-23 16:28:50', '2022-07-23 16:28:50'),
(2, '1', 'রায়গঞ্জ', 'Raigonj', 'razgnj', 'raigonj', 1, '2022-07-23 17:30:00', '2022-07-23 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_no`, `image`, `address`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mr.admin', 'admin@gmail.com', NULL, '$2y$10$7Q4WtqNtwekfmC6lJ3jCLufrqd6lVAs3Gf6qPeoFIZaQs6HY1dHK.', NULL, NULL, NULL, 1, NULL, '2022-07-23 16:02:48', '2022-07-23 16:02:48'),
(2, 'mr.user', 'user@gmail.com', NULL, '$2y$10$IcE0hD2dtu.zc.0mnV7qTevGSOeYxqSEb9b3hh1qdbotVwhe/EV2K', NULL, NULL, NULL, NULL, NULL, '2022-07-23 16:03:25', '2022-07-23 16:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name_en`, `website_name_bn`, `website_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'prothom alo', 'প্রথম আলো', 'https://en.prothomalo.com/', 0, '2022-07-23 17:49:12', '2022-07-27 16:26:44'),
(3, 'Learn Hunter', 'লার্ণহান্টার', 'https://learnhunter.xyz/', 1, '2022-07-25 16:12:45', '2022-07-25 16:12:45'),
(4, 'Rabbil Hasan Rupom', 'রাব্বিল হাসান রুপম', 'https://lumen.rabbil.com/', 1, '2022-07-25 16:14:18', '2022-07-25 16:14:18'),
(5, 'jugantor', 'যুগান্তর', 'https://www.jugantor.com/', 1, '2022-07-25 16:15:20', '2022-07-25 16:15:20'),
(6, 'Bangladesh Railway', 'বাংলাদেশ রেলওয়ে', 'https://railway.gov.bd/', 1, '2022-07-25 16:16:54', '2022-07-25 16:16:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `live_tvs`
--
ALTER TABLE `live_tvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namajs`
--
ALTER TABLE `namajs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `posts_district_id_foreign` (`district_id`),
  ADD KEY `posts_subdistrict_id_foreign` (`subdistrict_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_districts`
--
ALTER TABLE `sub_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_tvs`
--
ALTER TABLE `live_tvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `namajs`
--
ALTER TABLE `namajs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_districts`
--
ALTER TABLE `sub_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_subdistrict_id_foreign` FOREIGN KEY (`subdistrict_id`) REFERENCES `sub_districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
