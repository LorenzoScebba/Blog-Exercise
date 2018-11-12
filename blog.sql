-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 12, 2018 alle 17:07
-- Versione del server: 10.1.36-MariaDB
-- Versione PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_blog`
--
CREATE DATABASE IF NOT EXISTS `school_blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school_blog`;

-- --------------------------------------------------------

--
-- Struttura della tabella `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CPU', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(2, 'GPU', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(3, 'MOBO', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(4, 'RAM', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(5, 'POWER SUPPLY', '2018-11-12 15:03:30', '2018-11-12 15:03:30');

-- --------------------------------------------------------

--
-- Struttura della tabella `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_revisioned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `is_revisioned`, `created_at`, `updated_at`) VALUES
(1, 6, 4, 'In quis laborum facere non. Necessitatibus nemo est quia ut hic. Sed ut dolorem cupiditate ea.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(2, 5, 2, 'Porro aspernatur libero a nesciunt. Ea reiciendis corporis eius labore dolorem.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(3, 5, 4, 'Explicabo et doloremque soluta et. Animi itaque et et tenetur. Inventore sunt temporibus et autem.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(4, 1, 2, 'Itaque id at quaerat ratione maxime. Et ipsa a est voluptas magni velit dolore.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(5, 2, 3, 'Consequatur est quas quia. Rerum molestiae quaerat harum. Voluptates est quas omnis rerum et vel.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(6, 3, 4, 'Dolores omnis sed aut tempora. Unde sunt dolorem dicta omnis.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(7, 3, 3, 'Soluta sequi ea ut nihil aut dicta. Velit iste iure dolor nisi. Iure omnis ratione velit est.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(8, 5, 4, 'Expedita et quo rerum maxime in eligendi. Qui natus accusantium delectus excepturi quia velit.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(9, 2, 4, 'Et saepe dolorum et. Commodi minima nihil ab. Reprehenderit rerum quia occaecati corporis.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(10, 5, 2, 'Pariatur saepe rerum dolorum similique quo qui dolorum. Cum provident placeat blanditiis delectus.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(11, 10, 3, 'Ut delectus omnis omnis id. Soluta repellat doloribus tenetur quod maiores molestiae.', 0, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(12, 8, 4, 'Aut et est eum. Nulla expedita dignissimos officia nemo. Aliquid et nihil dolor autem possimus.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(13, 8, 3, 'Animi quis tenetur fugit quae. Voluptatibus officia porro facere et.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(14, 6, 4, 'Aut corrupti aut quis. Magnam tempora inventore cum modi sit. Quae quae non in.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(15, 1, 1, 'Rerum totam hic eveniet cumque. Voluptas veniam enim doloremque velit.', 1, '2018-11-12 15:03:30', '2018-11-12 15:03:30');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(62, '2013_11_09_210725_create_roles_table', 1),
(63, '2014_10_12_000000_create_users_table', 1),
(64, '2014_10_12_100000_create_password_resets_table', 1),
(65, '2018_10_31_143811_create_posts_table', 1),
(66, '2018_10_31_143824_create_categories_table', 1),
(67, '2018_11_02_092146_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'Porro aut vitae accusamus excepturi fuga nihil. Est eius consequatur culpa voluptate alias id qui. Eius accusamus veniam consequatur voluptatem et. Adipisci eaque praesentium velit facilis. Illo aut aspernatur sint excepturi saepe qui. Maiores reiciendis sed accusamus praesentium. Iste ad rem consequatur nulla. Qui aut rerum nihil velit iusto ipsa.', '2009-03-13 04:05:24', '2018-11-12 15:03:30'),
(2, 3, 2, 'Ipsum tempora dolorem officiis explicabo. Aut esse beatae excepturi odit odio quibusdam vel. Nesciunt delectus omnis similique sed animi maiores. Quas dolor molestiae reprehenderit similique velit. Enim adipisci eum sed quisquam architecto odio. Deserunt mollitia ex a sint mollitia velit. Blanditiis nam exercitationem officia est odit sed.', '1983-04-26 07:27:23', '2018-11-12 15:03:30'),
(3, 1, 2, 'Sint dolore nesciunt est laboriosam aut. Quasi at occaecati laudantium fuga sunt aliquam ea ipsum. Explicabo nemo ducimus fugit. Et molestiae aut et dolores. Nisi dolorem aut nihil aliquid molestias. Id dolorum voluptatem laboriosam voluptatem provident ut. Non est nam ipsum aut iste labore.', '1990-07-05 00:15:59', '2018-11-12 15:03:30'),
(4, 3, 4, 'Minus facere quidem maiores odit et qui. Doloremque illo officiis odit ut consequatur ad nam. Vero harum expedita in est enim necessitatibus ad. Ex suscipit aut consectetur placeat non enim. Sapiente nihil ut facilis sapiente distinctio cumque. Quasi qui labore et vitae fuga qui ducimus. Animi voluptas qui consectetur quod dicta velit. Commodi accusamus officiis mollitia nobis ea.', '1971-09-07 21:22:31', '2018-11-12 15:03:30'),
(5, 1, 4, 'Autem excepturi quam sed explicabo quam ullam dolorum. Quod eos dolores inventore assumenda quam omnis non consequatur. Quos ipsam neque et et quod perferendis ipsum autem. Iste sit ut rerum adipisci. Est praesentium vero consequatur modi aliquid. Qui laborum numquam dolore dolor.', '2009-09-23 07:48:09', '2018-11-12 15:03:30'),
(6, 3, 2, 'In ea sunt et. Ut voluptate dolore non sed. Qui repellendus placeat nesciunt et ratione eveniet. Cumque consequuntur perspiciatis quas sapiente cumque. Doloremque commodi voluptas libero eveniet. Fuga ducimus placeat necessitatibus est autem. Repudiandae a soluta pariatur optio quisquam voluptatibus rem. In quaerat expedita aliquid dolor voluptatem.', '2006-05-15 10:40:54', '2018-11-12 15:03:30'),
(7, 1, 2, 'Adipisci alias labore dolore deleniti. Fuga deserunt suscipit vitae doloribus enim vel. Expedita neque autem rem nisi recusandae facilis. Mollitia ipsa mollitia ut provident sint. Veniam provident incidunt nesciunt eius quibusdam amet quia. Sint veritatis aut sit et fugiat. Et aliquid est ipsam vel molestias. Qui ut aspernatur adipisci numquam quia est. Totam non vel error beatae ex.', '1996-09-26 12:32:28', '2018-11-12 15:03:30'),
(8, 2, 2, 'Sit est ipsam porro voluptatum omnis. Ullam cupiditate sed quos. Est dolores ea deserunt itaque vel consequatur fuga. Placeat omnis dignissimos vel dicta voluptatem vel. Ad quibusdam facilis nihil recusandae et. Expedita excepturi earum dolorem deserunt commodi. Et dolorem est dicta quos expedita ducimus. Quod aut dolore vitae accusantium quam voluptatum.', '1972-05-08 07:11:24', '2018-11-12 15:03:30'),
(9, 1, 3, 'Quia eum iure dolor enim velit nihil sint. Occaecati accusamus dicta architecto repudiandae exercitationem ipsa doloribus. Expedita velit eius necessitatibus. Voluptas autem eligendi et id voluptatem quos soluta asperiores. Iure distinctio laudantium et ullam consequatur odit ut. Quae optio ratione autem itaque velit eos.', '2003-03-25 16:32:03', '2018-11-12 15:03:30'),
(10, 4, 5, 'Qui nihil sint veritatis. Nihil sint ad minus impedit. Vel recusandae omnis non. Molestias eaque ea consectetur consequatur qui facere quidem non. Modi blanditiis velit cumque sed hic cumque consequatur. Adipisci eos quaerat autem provident animi eos. Neque molestiae quidem impedit modi. Velit sapiente ut odit harum.', '1985-10-01 08:06:01', '2018-11-12 15:03:30');

-- --------------------------------------------------------

--
-- Struttura della tabella `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(2, 'editor', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(3, 'reader', '2018-11-12 15:03:30', '2018-11-12 15:03:30');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '3',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorenzo', 'lorenzo@its.com', NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', NULL, '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(2, 3, 'Jabari Collier', 'queen.armstrong@example.net', '2018-11-12 15:03:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'itXDqImzFN', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(3, 2, 'Dr. Madalyn Crist II', 'vkovacek@example.com', '2018-11-12 15:03:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'uTPvfp3gq6', '2018-11-12 15:03:30', '2018-11-12 15:03:30'),
(4, 3, 'Douglas Towne', 'schuster.deangelo@example.org', '2018-11-12 15:03:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'COj4rvAbot', '2018-11-12 15:03:30', '2018-11-12 15:03:30');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_index` (`post_id`),
  ADD KEY `comments_user_id_index` (`user_id`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
