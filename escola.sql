-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2021 às 22:22
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `curso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bolsa` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `idade`, `curso`, `bolsa`, `created_at`, `updated_at`) VALUES
(1, 'Ariovaldo', 34, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 21:23:04'),
(2, 'Sergio', 54, 'Salgadeiro', 450.00, '2021-06-10 03:00:00', '2021-06-10 21:23:04'),
(3, 'Creusa', 60, 'Manicure', 300.00, '2021-06-10 03:00:00', '2021-06-10 21:23:04'),
(4, 'Ariovaldo', 34, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:37:15'),
(5, 'Sergio', 54, 'Salgadeiro', 450.00, '2021-06-10 03:00:00', '2021-06-10 22:37:15'),
(6, 'Creusa', 60, 'Manicure', 300.00, '2021-06-10 03:00:00', '2021-06-10 22:37:15'),
(7, 'Ariovaldo', 34, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 22:37:21'),
(8, 'Sergio', 54, 'Salgadeiro', 450.00, '2021-06-10 03:00:00', '2021-06-10 22:37:22'),
(9, 'Creusa', 60, 'Manicure', 300.00, '2021-06-10 03:00:00', '2021-06-10 22:37:22'),
(10, 'Marcos', 26, 'direito', 800.00, '2021-06-10 03:00:00', '2021-06-10 22:46:22'),
(11, 'Ariovaldo', 34, 'Técnico em Informática', 500.00, '2021-06-10 03:00:00', '2021-06-10 23:37:26'),
(12, 'Sergio', 54, 'Salgadeiro', 450.00, '2021-06-10 03:00:00', '2021-06-10 23:37:26'),
(13, 'Creusa', 60, 'Manicure', 300.00, '2021-06-10 03:00:00', '2021-06-10 23:37:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_18_180748_create_aluno_models_table', 1),
(5, '2021_04_01_191700_create_prof_models_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vl_hora_aula` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `materia`, `vl_hora_aula`, `created_at`, `updated_at`) VALUES
(1, 'Charles', 'Técnico em Informática', 50, '2021-06-10 23:39:49', '2021-06-10 23:39:49'),
(2, 'Francis', 'Programadora', 45, '2021-06-10 23:39:49', '2021-06-10 23:39:49'),
(3, 'Roseli', 'DBA', 40, '2021-06-10 23:39:49', '2021-06-10 23:39:49'),
(4, 'Charles', 'Técnico em Informática', 50, '2021-06-10 23:39:56', '2021-06-10 23:39:56'),
(5, 'Francis', 'Programadora', 45, '2021-06-10 23:39:56', '2021-06-10 23:39:56'),
(6, 'Roseli', 'DBA', 40, '2021-06-10 23:39:56', '2021-06-10 23:39:56'),
(7, 'Charles', 'Técnico em Informática', 50, '2021-06-10 23:39:57', '2021-06-10 23:39:57'),
(8, 'Francis', 'Programadora', 45, '2021-06-10 23:39:57', '2021-06-10 23:39:57'),
(9, 'Roseli', 'DBA', 40, '2021-06-10 23:39:57', '2021-06-10 23:39:57'),
(10, 'Charles', 'Técnico em Informática', 50, '2021-06-10 23:39:58', '2021-06-10 23:39:58'),
(11, 'Francis', 'Programadora', 45, '2021-06-10 23:39:58', '2021-06-10 23:39:58'),
(12, 'Roseli', 'DBA', 40, '2021-06-10 23:39:58', '2021-06-10 23:39:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
