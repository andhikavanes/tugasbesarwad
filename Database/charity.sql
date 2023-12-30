-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2023 pada 15.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `advertisers`
--

CREATE TABLE `advertisers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(299) NOT NULL DEFAULT 'home',
  `type` varchar(191) NOT NULL DEFAULT 'image',
  `name` varchar(191) DEFAULT NULL,
  `displayname` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `code` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `color` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `title`, `slug`, `color`, `created_at`, `updated_at`) VALUES
(2, 0, 2, 'Categores', 'Categores', 'primary', '2019-04-20 16:12:28', '2019-04-20 16:12:28'),
(3, 0, 2, 'Categores2', 'Categores2', 'warning', '2019-04-20 16:12:55', '2019-04-20 16:12:55'),
(4, 0, 5, 'Categores', 'Cause2', 'success', '2019-04-20 16:13:06', '2019-04-20 16:13:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `causes`
--

CREATE TABLE `causes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_gr` longtext DEFAULT NULL,
  `slug` longtext DEFAULT NULL,
  `Content_en` longtext DEFAULT NULL,
  `Content_ar` longtext DEFAULT NULL,
  `Content_gr` longtext DEFAULT NULL,
  `category_id` longtext DEFAULT NULL,
  `Raised` longtext DEFAULT NULL,
  `Goal` longtext DEFAULT NULL,
  `Donors` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `causes`
--

INSERT INTO `causes` (`id`, `Title_en`, `Title_ar`, `Title_gr`, `slug`, `Content_en`, `Content_ar`, `Content_gr`, `category_id`, `Raised`, `Goal`, `Donors`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Help the Victims of Aggression in Palestine', NULL, NULL, 'Help the Victims of Aggression in Palestine', 'The attacks launched by Israel on Palestine, especially in the Gaza Strip, caused many casualties and damaged public facilities. \r\nBecause of this aggression, life that was previously difficult has become more complicated. The need for medical assistance and facilities has increased.\r\nThe resulting impact also causes Palestinians to recover, repair damaged buildings, and reorganize their lives.\r\nHopefully, this Emergency Palestine program can alleviate the lives of Palestinians affected by the Israeli aggression some time ago and can restore their lives.\r\nLet\'s lighten the lives of our brothers and sisters there through the Emergency Palestine program, friends.', NULL, NULL, '1', '$1000', '$100000', '18', 'images/r210_85_2526_1629_w2736_h1824_fmax.jpg', '2023-12-27 02:34:21', '2023-12-27 02:34:21'),
(9, 'Prevent Malnutrition in Africa', NULL, NULL, 'Prevent Malnutrition in Africa', 'Stunting is a condition where children have a lower height than the average child of their age. This is caused by nutritional deficiencies that occur while the child is still growing.\r\nStunting can result in long-term impacts such as reduced intelligence, decreased endurance, and even increased risk of death.\r\nLet\'s join hands to help children in Africa who are stunted and malnourished. Every donation we make will bring hope and happiness to them.', NULL, NULL, '1', '$800', '$10000', '17', 'images/49e2c1b3-6eb4-4f37-8727-62039a9067a1.jpg', '2023-12-27 02:35:25', '2023-12-27 02:35:25'),
(10, 'help Indian eductation', NULL, NULL, 'help Indian eductation', 'Poverty is one of the main reasons behind lack of proper education in India. For the underprivileged, earning for themselves and their family members becomes much more necessary than obtaining proper education. Hence, free of cost education and flexibility in learning hours can be a huge help for them to manage their learning along with their work. But how can one, as a donor, help them with this?', NULL, NULL, '1', '$500', '$5000', '18', 'images/9631073921b6f5d797ebac9a303d457b.jpg', '2023-12-27 02:36:39', '2023-12-27 02:36:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Post_id` int(11) NOT NULL DEFAULT 1,
  `User_id` int(11) NOT NULL DEFAULT 1,
  `Comment` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_en` longtext DEFAULT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_gr` longtext DEFAULT NULL,
  `slug` longtext DEFAULT NULL,
  `Content_en` longtext DEFAULT NULL,
  `Content_ar` longtext DEFAULT NULL,
  `Content_gr` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `Days` varchar(191) DEFAULT NULL,
  `Hours` varchar(191) DEFAULT NULL,
  `Minutes` varchar(191) DEFAULT NULL,
  `Address` varchar(191) DEFAULT NULL,
  `FinishTime` varchar(191) DEFAULT NULL,
  `StartTime` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `Title_en`, `Title_ar`, `Title_gr`, `slug`, `Content_en`, `Content_ar`, `Content_gr`, `image`, `Days`, `Hours`, `Minutes`, `Address`, `FinishTime`, `StartTime`, `created_at`, `updated_at`) VALUES
(9, 'World Water Day', NULL, NULL, 'World Water Day', 'World Water Day is held every year on March 22nd to raise awareness of the 2.2 billion people living without access to safe water.\r\n\r\nAligning with this important event, Planet Water Foundation has developed “Project 24” a key activation to make a focused impact during this period, where together with our supporters, we provide life-changing access to clean, safe drinking water to impoverished communities around the world.\r\n\r\nClean, safe drinking water\r\nAs party of our Project 24 activities, all recipient communities receive clean, safe drinking water through the installation of Planet Water’s AquaTower water filtration system, which can provide enough water to meet the daily drinking water requirements of up to 1,800 people.\r\n\r\nCapability to sanitize to WHO standards\r\nThe AquaSan surface disinfection system is included in all Project 24 projects and provides recipient communities with the capability to sanitize the school environment to WHO standards.', NULL, NULL, 'images/337247438_1532908330573664_507695202365493193_n.jpg', '10', '10', '10', 'Bagara Babati TC, Tanzania', '07:30 am - 14:00 pm', '07:30 am - 14:00 pm', '2023-12-27 03:03:52', '2023-12-27 03:03:52'),
(10, 'Global Handwashing Day', NULL, NULL, 'Global Handwashing Day', 'All Hands Together For Handwashing Day​\r\n\r\nWith handwashing taking on more importance than ever before, each year Planet Water Foundation and our donor partners transform the lives of rural communities through our activation around Global Handwashing Day in October.\r\n\r\nTransform Lives\r\nEach project will support school children and members of the surrounding community with:\r\n\r\n\r\nHandwashing Facilities\r\nEach AquaTower system includes a handwashing station, with six handwashing points and integrated liquid soap dispeners. In addition, one year’s supply of hand soap is provided with each project.\r\n\r\nSchool-based and Community-based Hygiene Education\r\nPlanet Water’s Water-Health & Hygiene education program creates a change in behavior, beliefs, and knowledge on life-saving hygiene practices. With a focus on handwashing, the program is reinforced with messaging on the AquaTower itself.', NULL, NULL, 'images/413834397_765020162327901_5138402027329751351_n.jpg', '15', '15', '15', '115 P. Nguyễn Trường Tộ, Quán Thánh, Ba Đình, Hà Nội, Vietnam', '08:00 am - 12:00 pm', '08:00 am - 12:00 pm', '2023-12-27 03:08:19', '2023-12-27 03:08:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(32, 'images/410368846_758941716269079_1485830538207061629_n.jpg', '2023-12-27 03:10:39', '2023-12-27 03:10:39'),
(33, 'images/411230317_759675092862408_2903936366780163755_n.jpg', '2023-12-27 03:10:48', '2023-12-27 03:10:48'),
(34, 'images/413857943_765020305661220_1653244006941247711_n.jpg', '2023-12-27 03:10:58', '2023-12-27 03:10:58'),
(35, 'images/413820246_766827155480535_918187085099395893_n.jpg', '2023-12-27 03:11:06', '2023-12-27 03:11:06'),
(36, 'images/413834397_765020162327901_5138402027329751351_n.jpg', '2023-12-27 03:11:18', '2023-12-27 03:11:18'),
(37, 'images/337247438_1532908330573664_507695202365493193_n.jpg', '2023-12-27 03:11:27', '2023-12-27 03:11:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'main-menu', '2019-04-13 14:55:31', '2019-04-13 14:55:31'),
(2, 'main-menu-gr', '2019-04-17 14:38:56', '2019-04-17 14:38:56'),
(3, 'main-menu-ar', '2019-04-24 08:25:22', '2019-04-24 08:25:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(191) DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `target` varchar(191) NOT NULL DEFAULT '_self',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `order`, `title`, `url`, `target`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Home', '', '_self', '2019-04-17 13:22:26', '2019-04-17 13:22:26'),
(2, 1, 2, 'about', 'about', '_self', '2019-04-21 08:32:05', '2019-04-21 08:32:05'),
(3, 1, 3, 'Causes', 'Causes', '_self', '2019-04-17 13:23:02', '2019-04-17 13:23:02'),
(4, 1, 4, 'Event', 'Events', '_self', '2019-04-17 13:23:18', '2019-04-17 13:23:18'),
(5, 1, 5, 'Posts', 'Posts', '_self', '2019-04-17 13:24:03', '2019-04-17 13:24:03'),
(8, 1, 6, 'Contact Us', 'Contact', '_self', '2019-04-17 14:40:54', '2019-04-17 14:40:54'),
(9, 2, 1, 'ZUHAUSE', '', '_self', '2019-04-24 08:26:45', '2019-04-24 08:26:45'),
(10, 2, 2, 'Über', 'about', '_self', '2019-04-24 08:27:14', '2019-04-24 08:27:14'),
(11, 2, 3, 'Ursachen', 'Causes', '_self', '2019-04-24 08:30:34', '2019-04-24 08:30:34'),
(12, 2, 4, 'Veranstaltungen', 'Events', '_self', '2019-04-24 08:31:26', '2019-04-24 08:31:26'),
(13, 2, 5, 'Beiträge', 'Posts', '_self', '2019-04-24 08:32:01', '2019-04-24 08:32:01'),
(14, 2, 6, 'Kontaktiere uns', 'Contact', '_self', '2019-04-24 08:33:37', '2019-04-24 08:33:37'),
(15, 3, 1, 'الرئيسيه', '', '_self', '2019-04-24 08:34:28', '2019-04-24 08:34:28'),
(16, 3, 2, 'معلومات عنا', 'about', '_self', '2019-04-24 10:55:49', '2019-04-24 10:55:49'),
(17, 3, 3, 'الأسباب', 'Causes', '_self', '2019-04-24 10:56:19', '2019-04-24 10:56:19'),
(18, 3, 4, 'أحداث', 'Events', '_self', '2019-04-24 10:56:41', '2019-04-24 10:56:41'),
(19, 3, 5, 'المشاركات', 'Posts', '_self', '2019-04-24 10:57:07', '2019-04-24 10:57:07'),
(21, 3, 6, 'اتصل بنا', 'Contact', '_self', '2019-04-24 10:57:54', '2019-04-24 10:57:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Content` longtext DEFAULT NULL,
  `name` longtext DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `subject` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_06_221802_create_roles_table', 2),
(4, '2014_10_12_000000_create_users_table', 3),
(5, '2019_04_08_124117_create_posts_table', 4),
(6, '2019_04_08_130832_create_categories_table', 5),
(7, '2019_04_08_131509_create_posts_table', 5),
(8, '2019_04_08_132134_create_menus_table', 6),
(9, '2019_04_08_132745_create_menu_items_table', 7),
(10, '2019_04_08_140014_create_advertisers_table', 8),
(11, '2019_04_08_141156_create_advertisers_table', 9),
(12, '2019_04_08_144316_create_settings_table', 10),
(13, '2019_04_08_180227_create_settings_table', 11),
(14, '2019_04_18_124656_create_settings_table', 12),
(15, '2019_04_20_110544_create_causes_table', 13),
(16, '2019_04_20_111522_create_events_table', 13),
(17, '2019_04_20_112859_create_galleries_table', 13),
(18, '2019_04_20_113049_create_messages_table', 13),
(19, '2019_04_20_120030_create_posts_table', 14),
(20, '2019_04_23_103420_create_comments_table', 15),
(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 16),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 16),
(23, '2021_01_23_103953_create_sessions_table', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL DEFAULT 1,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `Title_en` longtext DEFAULT NULL,
  `Title_ar` longtext DEFAULT NULL,
  `Title_gr` longtext DEFAULT NULL,
  `body_en` longtext DEFAULT NULL,
  `body_ar` longtext DEFAULT NULL,
  `body_gr` longtext DEFAULT NULL,
  `slug` longtext DEFAULT NULL,
  `seo_title` longtext DEFAULT NULL,
  `excerpt` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `featured` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `Title_en`, `Title_ar`, `Title_gr`, `body_en`, `body_ar`, `body_gr`, `slug`, `seo_title`, `excerpt`, `image`, `meta_description`, `meta_keywords`, `featured`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'WAYS TO HELP POOR PEOPLE GET EDUCATION', NULL, NULL, '<p>With the Right to Education Act, 2009, India has become one of the 135 countries that recognises quality education as a fundamental right of every child in the nation. For this purpose, the Indian government has put forth some commendable efforts and schemes to promote and provide the right to education to every household in the country.&nbsp;</p><p>Apart from the government, there are several charities and education NGOs in the country too that work towards the noble cause of benefiting many underprivileged people with education. However, despite that, more than 30 million children in the country are still unable to receive primary education.&nbsp;</p><p>The National Survey of India reports that India has a literacy rate of 77.7% which indicates that at least one out of four Indians lacks the opportunity of acquiring basic education.&nbsp;</p><p>Ways in which one can help a poor people to get education</p><p>Poverty is one of the main reasons behind lack of proper education in India. For the underprivileged, earning for themselves and their family members becomes much more necessary than obtaining proper education. Hence, free of cost education and flexibility in learning hours can be a huge help for them to manage their learning along with their work. But how can one, as a donor, help them with this?&nbsp;</p><p>Here are some of the ways in which one can help poor people get education-</p><p>Money donations</p><p>There are many government trusts and education NGOs in India that accept charitable donations to provide quality education to underprivileged people (especially children) for free of cost.&nbsp;</p><p>One of the benefits that these monetary donations hold is that these kinds of donations can be subjected to tax deductions under section 80G of Income tax Act, provided the donor donates to a 80G certified trust or organisation.&nbsp;</p><p>Donating resources</p><p>Monetary donations are not the only way to donate for child education. Donations of resources like books, stationery and other such materials can be very helpful too. One can either personally donate this to a poor child or to an NGO working for education.&nbsp;</p><p>Volunteering&nbsp;</p><p>If not donations, one can spend their time educating underprivileged children and people. There are many NGOs working for education in India that accept volunteers who would like to share their knowledge with these people.&nbsp;</p><p>Providing tuitions at their homes</p><p>For a person who is willing to give their time for teaching underprivileged children on a daily or regular basis can consider tutoring them at their home or any other such space.</p>', NULL, NULL, 'WAYS TO HELP POOR PEOPLE GET EDUCATION', 'WAYS TO HELP POOR PEOPLE GET EDUCATION', NULL, 'images/326770662_2823496514449949_5948948955599670218_n.jpg', NULL, NULL, NULL, '2023-12-27 02:12:19', '2023-12-27 02:12:19'),
(8, 1, 1, 'Young Americans are more pro-Palestinian than their elders.', NULL, NULL, '<p>Across more than two months of war between Israel and Hamas, public opinion on the conflict has continuously shifted. But there has been a constant: a divide between the views of older and younger Americans that has shown up both during the war and in the years leading up to it.</p><p>A late October YouGov poll is illustrative. It found that more people ages 18-29 sympathized with Palestinians than with Israelis in the current conflict &mdash; the only age bracket with that view (28 percent expressed more sympathy with Palestinians vs. 20 percent for Israelis &mdash; though even more sympathized with both peoples equally, 31 percent). Older groups were more likely to sympathize with Israelis than Palestinians or both groups equally, particularly those 65 and older. Fourteen percent of 18- to 29-year-olds thought it was &ldquo;very important&rdquo; for the United States to protect Israel compared with two-thirds of those 65 or older.</p><p>Experts say there are multiple explanations behind why age could be a factor in Americans&rsquo; opinions on Israel and its relationship with Palestinians.</p><p>Two generations, two narratives</p><p>Each age group has a different &ldquo;generational memory&rdquo; of Israel, Dov Waxman, director of the UCLA Younes and Soraya Nazarian Center for Israel Studies, said. Beliefs about the world tend to form in our late teens and early 20s and often don&rsquo;t change, he said.</p><p>Older generations, with a more visceral sense of the Holocaust, tend to see Israel as a vital refuge for the Jews, he said, and see its story as one of a people returning to safety in their homeland after living for 2,000 years as a scattered diaspora facing persistent persecution.</p><p>In the decades after its founding, Israel was a relatively lower-income and vulnerable country. Its military victories against its neighbors, in 1948, 1967 and 1973, were generally admired in the West. (An estimated 700,000 Palestinians fled or were forced from their homes during the months before and after the 1948 war that created Israel.)</p><p>But by the time millennials began forming their understanding of global events, the violence of the second Intifada had concluded in the mid-2000s with enhanced walls and barriers constructed between Israel and the West Bank, and then Gaza. This generation formed its idea of Israel from reports of Palestinians denied access to water, freedom of movement and fair trials, under the military control of what was by then a relatively rich, nuclear-armed power.</p><p>&ldquo;When I was in college it was the Oslo peace process, and I still remember that Israel &mdash; pursuing peace with the Palestinians and the hopes that came along with that,&rdquo; Waxman said, of the &rsquo;90s. &ldquo;Younger Americans have no memory of that.&rdquo;</p>', NULL, NULL, 'Young Americans are more pro-Palestinian than their elders.', 'Young Americans are more pro-Palestinian than their elders.', NULL, 'images/download.jpeg', NULL, NULL, NULL, '2023-12-27 02:26:11', '2023-12-27 02:27:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adminstartor', '2019-04-20 15:45:42', '2019-04-20 15:45:42'),
(4, 'User', 'Normal User', '2019-04-20 15:57:08', '2019-04-20 15:57:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EzL2IvOjxU5OTx29bYdUmrOcMA5iMczSsQ51EKGJ', 20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRDdKbTExOW5QSnhFTFBYdDhqRGRkZ09SZmlsb0ZTSGxxVkE0WGJuRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvZGFzaGJvYXJkU2V0dGluZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMDtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MDM5NDUxNzc7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZk5CczUucHY5UTlBYUpHZTFMSHZYZVVDRm40TWVCekpRSjBNdTF2SU9yNWtYbTUzQWR4bXUiO30=', 1703945503);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Language` varchar(191) NOT NULL DEFAULT 'english',
  `SiteTitle` longtext DEFAULT NULL,
  `Name` longtext DEFAULT NULL,
  `Location` varchar(191) DEFAULT NULL,
  `Googlemap` longtext DEFAULT NULL,
  `video` longtext DEFAULT NULL,
  `PhoneNumber` varchar(191) DEFAULT NULL,
  `Email` varchar(191) DEFAULT NULL,
  `LogoPicture` varchar(191) DEFAULT NULL,
  `HomePicture` varchar(191) DEFAULT NULL,
  `AboutPicture` varchar(191) DEFAULT NULL,
  `MetaDescription` longtext DEFAULT NULL,
  `MetaKeyWords` longtext DEFAULT NULL,
  `Facebook` varchar(191) DEFAULT NULL,
  `Twitter` varchar(191) DEFAULT NULL,
  `GitHub` varchar(191) DEFAULT NULL,
  `Slack` varchar(191) DEFAULT NULL,
  `Dribbble` varchar(191) DEFAULT NULL,
  `LinkedIn` varchar(191) DEFAULT NULL,
  `Behance` varchar(191) DEFAULT NULL,
  `Digg` varchar(191) DEFAULT NULL,
  `Flickr` varchar(191) DEFAULT NULL,
  `Vimeo` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `url_App` varchar(191) DEFAULT NULL,
  `FaviconOne` varchar(191) DEFAULT NULL,
  `FaviconTwo` varchar(191) DEFAULT NULL,
  `FaviconThree` varchar(191) DEFAULT NULL,
  `about_en` longtext DEFAULT NULL,
  `about_gr` longtext DEFAULT NULL,
  `about_ar` longtext DEFAULT NULL,
  `title_home_en` longtext DEFAULT NULL,
  `title_home_gr` longtext DEFAULT NULL,
  `title_home_ar` longtext DEFAULT NULL,
  `sub_title_home_en` longtext DEFAULT NULL,
  `sub_title_home_gr` longtext DEFAULT NULL,
  `sub_title_home_ar` longtext DEFAULT NULL,
  `title_about_en` longtext DEFAULT NULL,
  `title_about_gr` longtext DEFAULT NULL,
  `title_about_ar` longtext DEFAULT NULL,
  `content_about_en` longtext DEFAULT NULL,
  `content_about_gr` longtext DEFAULT NULL,
  `content_about_ar` longtext DEFAULT NULL,
  `content_blog_en` longtext DEFAULT NULL,
  `content_blog_gr` longtext DEFAULT NULL,
  `content_blog_ar` longtext DEFAULT NULL,
  `content_feature_en` longtext DEFAULT NULL,
  `content_feature_gr` longtext DEFAULT NULL,
  `content_feature_ar` longtext DEFAULT NULL,
  `content_feature_two_en` longtext DEFAULT NULL,
  `content_feature_two_gr` longtext DEFAULT NULL,
  `content_feature_two_ar` longtext DEFAULT NULL,
  `content_feature_three_en` longtext DEFAULT NULL,
  `content_feature_three_gr` longtext DEFAULT NULL,
  `content_feature_three_ar` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `Language`, `SiteTitle`, `Name`, `Location`, `Googlemap`, `video`, `PhoneNumber`, `Email`, `LogoPicture`, `HomePicture`, `AboutPicture`, `MetaDescription`, `MetaKeyWords`, `Facebook`, `Twitter`, `GitHub`, `Slack`, `Dribbble`, `LinkedIn`, `Behance`, `Digg`, `Flickr`, `Vimeo`, `youtube`, `url_App`, `FaviconOne`, `FaviconTwo`, `FaviconThree`, `about_en`, `about_gr`, `about_ar`, `title_home_en`, `title_home_gr`, `title_home_ar`, `sub_title_home_en`, `sub_title_home_gr`, `sub_title_home_ar`, `title_about_en`, `title_about_gr`, `title_about_ar`, `content_about_en`, `content_about_gr`, `content_about_ar`, `content_blog_en`, `content_blog_gr`, `content_blog_ar`, `content_feature_en`, `content_feature_gr`, `content_feature_ar`, `content_feature_two_en`, `content_feature_two_gr`, `content_feature_two_ar`, `content_feature_three_en`, `content_feature_three_gr`, `content_feature_three_ar`, `created_at`, `updated_at`) VALUES
(1, 'English', 'Tel-U Charity', 'Tel-U Charity', 'Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257', 'https://www.google.com/maps/place/Universitas+Telkom/@-6.973007,107.6316854,15z/data=!4m6!3m5!1s0x2e68e9adf177bf8d:0x437398556f9fa03!8m2!3d-6.973007!4d107.6316854!16s%2Fm%2F0y6lbq_?entry=ttu', 'https://www.youtube.com/@TelkomUniversityOfficial', 'Indonesia: (022) 7564108', 'contact@telkomuniversity.ac.id', 'images/LOGO WEBSITE WAD2.png', 'images/charity-donation-australia-scaled.jpg', 'images/charity-donation-australia-scaled.jpg', 'Every day we have plenty of opportunities to get angry, stressed or offended. But what you\'re doing when you indulge these negative emotions is giving something outside yourself power over your happiness. You can choose to not let little things upset you.', 'settings', 'https://www.facebook.com/Meteorsa/', 'settings', 'settings', 'setting', 'settings', 'settings', 'settings', 'settings', 'settings', 'settings', 'settings', 'settings', 'images/Champagne and Orange Illustrated Charity Foundation Logo 32.png', 'images/Champagne and Orange Illustrated Charity Foundation Logo  96.png', 'images/Champagne and Orange Illustrated Charity Foundation Logo 16.png', 'Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you will get. Realize that things will be hard at first, but the rewards will be worth it.', 'Möchten Sie noch erfolgreicher sein? Lernen Sie, Lernen und Wachstum zu lieben. Je mehr Aufwand Sie in die Verbesserung Ihrer Fähigkeiten investieren, desto höher ist der Gewinn, den Sie erzielen. Stellen Sie fest, dass die Dinge zunächst hart sein werden, aber die Belohnungen werden es wert sein.', 'هل تريد أن تكون أكثر نجاحا؟ تعلم أن تحب التعلم والنمو. كلما بذلت المزيد من الجهود لتحسين مهاراتك ، زادت المكاسب التي ستحصل عليها. أدرك أن الأمور ستكون صعبة في البداية ، ولكن المكافآت ستكون تستحق العناء.', 'the key to be rich is charity', 'Für die Menschen und die Gründe, die Ihnen', 'للناس ويسبب لك الرعاية', 'The long journey to end poverty begins with a charity', 'schöne Dinge in der Welt', 'أشياء جميلة في العالم', 'Offices opened in Telkom University Bandung', 'Büros in Frankreich, Norwegen und Schweden eröffnet', 'مكاتب افتتحت في فرنسا والنرويج والسويد', 'Tel-U Charity is a website for Telkom people to do charity, this project create by Telkom University student, that will help other people to do the right things. From Telkom to Telkom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Es stellt Dienstleistungen, sie für jede Outdoor-Erfahrung akzeptiert läuft? Aber lehnt Ergebnis, und das nennt man die Folgen vermieden werden, da diese nicht nur die lästige Spuck Wahl! Da es sich um eine Resultierende dieser Welt ist in einigen der Schmerz zu lieben war ein stehender Mann.', 'أبجد هوز دولور الجلوس امات، consectetur adipiscing إيليت. وهو يقدم الخدمات، وقالت انها تدير المقبولة للأي خبرة في الهواء الطلق؟ ولكن ترفض النتيجة، وهذا ما يسمى يتم تجنب العواقب، وهذه ليست فقط في الانتخابات ترفض الأكثر اضطرابا! لأنه الناتجة من هذا العالم إلى الحب في بعض من الألم كان رجلا واقفا.', 'In here you can read some blog from around the world that will open your mind to do charity', 'Geöffnete fünfte mitte geteilte große Fliege, die nicht reichlich lebt. Der Abend scheint zu sagen, dass Gott der Gerechte gegeben wird. Sechste Tage des Dritten Geistes bewässern die Meere. Genannt kann nicht sein Dritter. Abend danach. Alle Stars. Trockne die dritten Tage', 'فتح الخامس وسط تقسيم ذبابة كبيرة تجمع العيش في عمق لا بوفرة. يبدو المساء قائلاً إن الله تعالى يعطى أياماً سادسة من روح البحر الثالثة. دعا لا يمكن له الثالثة. المساء على. كل النجوم. مواسم جافة للأيام الثالثة', 'Go to do the right things by do some charity that will help other', 'Multiplizieren ist die Herrschaft der Lichtherrschaft, die inmitten eines Lebens gesetzt wird.', 'تتضاعف السيطرة على ضوء السيادة التي تُعطى وسط لقمة العيش أقوم بإحضار كل إحضار لها أيضًا.', 'Give some word to the world that will make people to do the right things', 'Multiplizieren ist die Herrschaft der Lichtherrschaft, die inmitten eines Lebens gesetzt wird.', 'تتضاعف السيطرة على ضوء السيادة التي تُعطى وسط لقمة العيش أقوم بإحضار كل إحضار لها أيضًا.', 'Become a Bolunteer for what do you want', 'Multiplizieren ist die Herrschaft der Lichtherrschaft, die inmitten eines Lebens gesetzt wird.', 'تتضاعف السيطرة على ضوء السيادة التي تُعطى وسط لقمة العيش أقوم بإحضار كل إحضار لها أيضًا.', NULL, '2023-12-27 06:31:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) DEFAULT 'storage/users/default.png',
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `avatar`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 1, 'muhanaad', 'admin@causes.com', NULL, 'images/3.jpg', '$2y$10$X.sZvmRjp6J2opxGb0mC/uvD4BMxhjO50yvyF.lljH1MBpOSLX2rq', NULL, NULL, 'ptTCYKENqHudhmAbGFtHt95U20JupG7NKSZjqdIloxSdzw1FssldQCWGrruW', '2019-10-22 18:18:52', '2020-04-15 11:44:34'),
(20, 1, 'Andhika', 'andhika@gmail.com', NULL, 'storage/users/default.png', '$2y$10$fNBs5.pv9Q9AaJGe1LHvXeUCFn4MeBzJQJ0Mu1vIOr5kXm53Adxmu', NULL, NULL, NULL, '2023-12-21 03:16:46', '2023-12-21 03:16:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `advertisers`
--
ALTER TABLE `advertisers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `advertisers`
--
ALTER TABLE `advertisers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `causes`
--
ALTER TABLE `causes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
