-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Gru 2022, 20:05
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_12_06_122045_create_categories_table', 1),
(16, '2022_12_06_122133_create_products_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Komin@wp.pl', '$2y$10$HXty9KebJC64fl75CYjvAuC7SRYWMFZzWFHc/LNAs860RZyb4mHgO', '2022-12-11 14:17:12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `stock_status` enum('Dostępny','Niedostępny') COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `regular_price`, `stock_status`, `quantity`, `image`, `images`, `created_at`, `updated_at`) VALUES
(3, 'Yerba', 'sdas', '33.00', 'Dostępny', 2, 'Yaguar3.png', NULL, '2022-12-08 14:12:39', '2022-12-11 18:03:21'),
(4, 'aut error sunt et voluptatibus veritatis', 'Dolorum ab sint optio eum odio qui. Aut consequatur voluptas ducimus officia est facere dolorem. Est autem eos qui nesciunt. Totam sed molestias error ut non. Sunt sint nostrum modi praesentium amet ab nemo beatae. Et qui ad beatae tenetur voluptas inventore id. Repellat aliquid a eligendi perferendis eos temporibus provident. Explicabo non saepe facilis. Amet sit rem non ea. Reiciendis quo quae quos beatae ut sapiente. Cumque incidunt nihil ut quibusdam voluptates voluptatum.', '23.00', 'Dostępny', 41, 'Yaguar4.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(5, 'dolorum aut cupiditate mollitia atque voluptatem', 'Est praesentium aspernatur facere exercitationem. Velit sint dolor provident. Sint autem reprehenderit quam ut voluptatibus magni autem. Porro eligendi magni earum inventore. Qui perspiciatis non sed ex sunt non rerum. Dicta aut aut necessitatibus laborum. Soluta incidunt laborum voluptas neque dolorem ut nisi. Culpa architecto veniam aut dolor delectus. In autem ad autem mollitia harum. Non qui nisi eaque ut quidem rerum. Nisi et omnis sit ut nulla ratione commodi.', '34.00', 'Dostępny', 24, 'Yaguar5.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(6, 'aut et doloremque dolor explicabo deleniti', 'Aspernatur beatae laborum omnis quibusdam magni fuga. Eligendi aut dignissimos debitis aut sunt et. Id alias similique aut aut. Et sed sed ducimus voluptas. Suscipit ex eligendi odio veniam rerum unde. Harum officia ipsa aliquid ipsam aut illum itaque quia. Et repudiandae perferendis delectus id omnis nulla perferendis.', '23.00', 'Dostępny', 11, 'Yaguar6.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(7, 'minus corrupti consequuntur quisquam laudantium et', 'Similique adipisci consequatur molestias corporis. Excepturi voluptates consectetur cum excepturi. Magnam distinctio facilis blanditiis ut occaecati hic saepe. Tempora omnis sunt veniam ea et non ad a. Sunt omnis ipsum odio voluptatem eum nam. Voluptatem ducimus pariatur quisquam et aliquid officia. Minima molestiae et illo reiciendis. Quo voluptatem inventore nemo quas et. Voluptas dolore eveniet excepturi similique. Commodi ut et molestiae. Exercitationem eveniet iste doloremque minima.', '32.00', 'Dostępny', 17, 'Yaguar7.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(8, 'dolorum repellendus ducimus dicta voluptatem dolore', 'Dolorem nihil dignissimos nobis. Nihil eligendi consequatur iste non id. Deserunt sed labore dolore perspiciatis quis amet repellendus. Quas eaque corrupti veritatis. Numquam sed ab expedita sint reiciendis. Rerum omnis minus eligendi ea ducimus sint. Quos atque earum et iste consequatur. Exercitationem odio tempora et. Officiis qui repellat laboriosam non vero dicta. Earum quis itaque et est. Atque cum non doloremque nam deserunt. Maiores modi officia labore optio dolorem.', '12.00', 'Dostępny', 47, 'Yaguar8.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(9, 'natus perspiciatis incidunt numquam ea qui', 'Architecto aut nihil magnam veniam voluptas aut. Repudiandae quisquam sint illo quia. Rem quis consequatur autem fuga ut molestiae molestias vitae. Repudiandae optio earum iusto. Sint aliquid optio sapiente. Excepturi aspernatur vitae ratione explicabo. Aut nesciunt blanditiis fuga vel. Perferendis fugiat laborum vitae dolorem dicta enim rem. Ut blanditiis animi quos. Excepturi tenetur dolores ut repudiandae qui. Vitae nemo quia aut.', '34.00', 'Dostępny', 47, 'Yaguar9.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(10, 'adipisci id totam eligendi iure sint', 'Dolores et alias consequatur illo officiis. Ullam veritatis iure nulla qui aliquid dignissimos cupiditate iusto. Aut ut est eum quod repudiandae tempora molestiae ut. Earum ut sed facilis nostrum placeat. Quaerat quo recusandae reiciendis quia. Est aliquid qui nesciunt sit officia. Id provident et commodi ut quia. Et ut est iste vel.', '52.00', 'Dostępny', 22, 'Yaguar10.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(11, 'labore in iusto aperiam dolor cupiditate', 'Recusandae libero et doloribus ut saepe. Excepturi est velit eos ex excepturi voluptas aspernatur. Eius sed neque nihil eveniet. Magnam dolor dolores est totam. Labore incidunt sit porro id modi mollitia illum. At beatae facilis dolores nam corrupti porro inventore. Quas nihil voluptatem error ducimus id ex. Reprehenderit soluta sequi at temporibus cupiditate voluptatem sint. Impedit voluptas adipisci beatae nobis iste.', '12.00', 'Dostępny', 22, 'Yaguar11.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(12, 'dolor dolor voluptas nisi non explicabo', 'Qui aut qui illum a incidunt laborum. Perferendis et autem vel. Ipsam nesciunt ipsum perferendis corrupti. Aut expedita voluptatem et tenetur. Cupiditate eius dolor qui repudiandae est exercitationem quisquam. Inventore eos in est. Maxime repellendus ducimus delectus veritatis porro autem accusamus et. Tenetur eum aut dolore quae quae. Debitis voluptatem quia error. Culpa dicta aut dolores voluptas quo dignissimos. Molestias blanditiis sit occaecati omnis. Dolores culpa occaecati fugiat aut.', '34.00', 'Dostępny', 31, 'Yaguar12.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(13, 'nam sunt dolor aut ipsa a', 'Amet nihil voluptas suscipit voluptatem quia. Tenetur dolorem et quaerat nam omnis deserunt numquam. Aut animi mollitia beatae dolores natus. Reiciendis minima dignissimos modi ipsam esse hic quasi. Dolores quae tenetur aliquid similique et. Necessitatibus expedita blanditiis error quibusdam non voluptate. Tenetur odit similique quia.', '40.00', 'Dostępny', 21, 'Yaguar13.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(14, 'facere et nobis assumenda sit voluptatem', 'Qui cumque quis porro minima sed. Et itaque omnis et. Optio optio est officia eos impedit. Excepturi nesciunt quo eius facilis molestiae consectetur. Unde excepturi aperiam quia ea aut quas et. Quisquam minus voluptas magnam non velit perspiciatis. Qui minus expedita officia voluptate est culpa vel ab. Eius repellat consequatur ducimus dolorum in et asperiores quisquam.', '21.00', 'Dostępny', 38, 'Yaguar14.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(15, 'vitae consequatur culpa dignissimos distinctio neque', 'Quasi quia reiciendis dolores non nesciunt. Unde id ex voluptatibus quasi eligendi perferendis maxime. Inventore quia ducimus exercitationem pariatur. Doloribus consequuntur mollitia quae aliquam voluptas qui deserunt nesciunt. Ea qui praesentium quia voluptatem. Enim maiores fugit iure laboriosam culpa quidem. Distinctio nam accusamus et. Optio in minima commodi exercitationem dolores odit. Mollitia quisquam id consequatur consequatur.', '28.00', 'Dostępny', 41, 'Yaguar15.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39'),
(16, 'natus sit neque nihil magni vel', 'Consequuntur corporis adipisci soluta. Pariatur harum quibusdam accusantium est voluptatem. Tempore dolore aliquam mollitia expedita voluptas ducimus. Et minima nihil enim vel sed consequuntur. Voluptas rerum beatae optio. Reiciendis veniam beatae consequatur. A voluptate sunt quisquam itaque ut veritatis. Veritatis deleniti et excepturi commodi. Minus laboriosam hic nesciunt fuga ea. Illo natus officia omnis quia veniam ex velit. Accusamus voluptas dolorem itaque autem.', '29.00', 'Dostępny', 26, 'Yaguar16.png', NULL, '2022-12-08 14:12:39', '2022-12-08 14:12:39');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` enum('USR','ADM','MDR') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'admin', 'admin@admin.com', NULL, '$2y$10$JcaVP2D1YOHhzgattcDyU.98xxZVcGm94J66rikrXdFlyMlpraUoO', 'ADM', NULL, '2022-12-09 22:52:41', '2022-12-09 22:52:41'),
(34, 'user', 'user@user.com', NULL, '$2y$10$lGJoDDX8j9/qht0U0VGG6OTc2F4gs5SqeRojnJkQqSswJjs/c6zqW', 'USR', NULL, '2022-12-11 17:38:15', '2022-12-11 17:38:15'),
(35, 'moderator', 'moderator@moderator.com', NULL, '$2y$10$LUL8IQGzfCs/8/Ny54noaO4W9bzI4WE.OIVsbjhXsFI4u.jQmO71.', 'MDR', NULL, '2022-12-11 17:38:35', '2022-12-11 17:38:35');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
