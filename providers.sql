-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jan-2018 às 20:58
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `providers`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_28_170823_create_prov_cods_table', 1),
(4, '2017_11_28_172109_create_providers_table', 1),
(5, '2017_12_27_125550_create_ramo_actividades_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_empresa` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pessoa_contacto` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alvara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuit` int(11) NOT NULL,
  `pais` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco_fisico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_numero` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ramo_atividade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_fixo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_banco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_conta` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nib` int(11) NOT NULL,
  `nome_agencia` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bancaria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `providers`
--

INSERT INTO `providers` (`id`, `nome_empresa`, `pessoa_contacto`, `alvara`, `nuit`, `pais`, `provincia`, `cidade`, `bairro`, `endereco_fisico`, `end_numero`, `ramo_atividade`, `telefone_fixo`, `fax`, `celular`, `email`, `nome_banco`, `numero_conta`, `nib`, `nome_agencia`, `bancaria`, `status`, `created_at`, `updated_at`) VALUES
(1, '545', '5656', 'PSI Moz  Logistica.pdf', 65565, 'Moz', 'Maputo', 'Matola', '4545454', 'Ndlavela', '4545', 'limpeza', '845001085', '845001085', '845001085', 'edsonchivambo@gmail.com', 'Ndlavela, Q24', '4545', 545, '445', 'PSI Moz  Logistica.pdf', 1, '2017-12-27 18:46:30', '2017-12-27 18:46:30'),
(2, '56556', '5656', 'PSI Moz  Logistica.pdf', 555, 'Moz', 'Maputo', '5454', '5454', '5654', '55', 'limpeza', '655', '565', '6565', '6565@5554', '5545', '5545', 554, '54654', 'PSI Moz  Logistica.pdf', 1, '2017-12-27 18:54:10', '2017-12-27 18:54:10'),
(3, 'ssssssssssssss', '84554215', 'PSI Moz  Logistica.pdf', 322222224, 'Moz', 'Maputo', 'khjknascm,', 'asagsjk', 'ksadkjaskdjk', '5548', 'limpeza', '454844841', '845485864', '555151', 'exhhd@hd.vom', 'hsjkhsdkfg', '54545444', 5455445, '48454845', 'Jan-Nov complet sales export.xlsx', 1, NULL, NULL),
(4, '55456456', '5465465', 'E:\\xampp\\tmp\\phpFFF3.tmp', 45645, 'Moz', 'Maputo', '84848', '4445', '545', '45445', 'limpeza', '456565', '564', '56155', 'ssssss@df', '56454', '545456', 5456464, '54654564', 'E:\\xampp\\tmp\\php4.tmp', 1, NULL, NULL),
(5, 'kkkkkkkkkkkkk5', '545454', 'E:\\xampp\\tmp\\php6153.tmp', 654545, 'Moz', 'Maputo', '5456456', '545645', '554544', '545645', 'limpeza', '5645454', '54564654', '545645', 'kkkkkkkkkkk@kk.km', '545645', '54564', 54654, '54645', 'E:\\xampp\\tmp\\php6164.tmp', 1, NULL, NULL),
(6, 'kkkkkkkkkkkkk', '6454', 'E:\\xampp\\tmp\\phpBD2A.tmp', 555, 'Moz', 'Maputo', '6565', '656565', 'hhhjhjh', '65565', 'limpeza', '545345', '53453435', '545454', '54534@df', '5355656', '65656', 6565, '565', 'E:\\xampp\\tmp\\phpBD3B.tmp', 1, NULL, NULL),
(7, 'aaaaaaaaa', '11111111111111', 'uploads/Capture.PNG', 1111111111, 'Moz', 'Maputo', '111111111111', '1111111111', '1111111111', '111111111', 'limpeza', '1111111111', '111111111', '1111111111', 'edson.chivambo@outlook.com', '1111111111', '11111111111', 1111111, '11111111111', 'uploads/PSI Moz  Logistica.pdf', 1, '2018-01-06 13:50:40', '2018-01-06 13:50:40'),
(9, 'saaa', '545', 'uploads/Búsqueda WHOIS dominio.pdf', 515, 'Moz', 'Maputo', '51531', '5151', 'asa', '5531', 'limpeza', '51531', '51531', '513', 'ee@s.xc', '554545', '555', 5151, '515151', 'uploads/29-10-2017.png', 1, '2018-01-07 17:59:30', '2018-01-07 17:59:30'),
(12, 'saaa', '5455', 'uploads/Búsqueda WHOIS dominio.pdf', 5155, 'Moz', 'Maputo', '51531', '5151', 'asa', '565322', 'limpeza', '51531621', '2621', '51312', 'ee2@s.xc', '554545', '55551', 51515, '515151', 'uploads/29-10-2017.png', 1, '2018-01-07 18:13:47', '2018-01-07 18:13:47'),
(14, 'saaa', '54551', 'uploads/Búsqueda WHOIS dominio.pdf', 51551, 'Moz', 'Maputo', '51531', '5151', 'asa', '565322', 'limpeza', '515316', '26215', '5131248', 'ee2@s.xc1', '554545', '555515', 515151, '1515151', 'uploads/29-10-2017.png', 1, '2018-01-07 18:27:09', '2018-01-07 18:27:09'),
(15, 'sssssssss', '2323', 'uploads/29-10-2017.png', 11111, 'Moz', 'Maputo', '54545', '45454', 'lllklk', '5454', 'limpeza', '6565', '6565656', '65656565', '565656@ss', '554', '5454', 5454, '454', 'uploads/29-10-2017.png', 1, '2018-01-08 13:34:14', '2018-01-08 13:34:14'),
(17, 'llll', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'hh@fd.org.mz', '1', '1', 1, '1', '1', 1, '2018-01-07 23:00:00', '2018-01-07 23:00:00'),
(18, '2', '12', '12', 2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'amjd.jjd@ndn.com', '2', '2', 2, '2', '2', 1, '2018-01-18 02:00:00', '2018-01-08 03:00:00'),
(19, '545', '444', 'uploads/29-10-2017.png', 5454, 'Moz', 'Maputo', '444', '4444', '1444', '444', 'limpeza', '4444', '4444', '4444', '4444@s4', '44444', '4444', 444, '444', 'uploads/29-10-2017.png', 1, '2018-01-08 14:14:32', '2018-01-08 14:14:32'),
(21, '545', '4444', 'uploads/29-10-2017.png', 54544, 'Moz', 'Maputo', '444', '4444', '1444', '4444', 'limpeza', '44444', '44444', '44444', '4444@s44', '4444', '44444', 4444, '444', 'uploads/29-10-2017.png', 1, '2018-01-08 14:19:59', '2018-01-08 14:19:59'),
(23, '5451', '44441', 'uploads/29-10-2017.png', 545441, 'Moz', 'Maputo', '1', '44441', '14441', '44441', 'limpeza', '444441', '444441', '444441', '4444@s441', '4444', '444441', 44441, '444', 'uploads/29-10-2017.png', 1, '2018-01-08 14:22:25', '2018-01-08 14:22:25'),
(24, '447', '44', 'uploads/29-10-2017.png', 47, 'Moz', 'Maputo', '86486', '84864', '48', '8648', 'limpeza', '45', '454', '456', '456@sd', '545', '54', 45, '545', 'uploads/29-10-2017.png', 1, '2018-01-08 17:08:36', '2018-01-08 17:08:36'),
(26, '4471', '55555', 'uploads/29-10-2017.png', 15555, 'Moz', 'Maputo', '555555', '5555555', '55555', '5555', 'limpeza', '5555555', '555555', '555555', '456@sd444', '545', '545555', 555555, '55555', 'uploads/29-10-2017.png', 1, '2018-01-08 17:10:22', '2018-01-08 17:10:22');

--
-- Acionadores `providers`
--
DELIMITER $$
CREATE TRIGGER `desabilitar_condigo` AFTER INSERT ON `providers` FOR EACH ROW BEGIN

    UPDATE prov_cods SET status = '0' WHERE email=new.email;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prov_cods`
--

CREATE TABLE `prov_cods` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `prov_cods`
--

INSERT INTO `prov_cods` (`id`, `codigo`, `email`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'CVhT6y9RfJ0Pbib', 'hh@fd.org.mz', 1, 1, '2017-12-28 09:19:42', '2017-12-28 09:19:42'),
(2, 'Iit2XkwDz2Fbijx', 'amjd.jjd@ndn.com', 0, 1, '2017-12-28 09:20:01', '2017-12-28 09:20:01'),
(3, 'IOhmvAfF2yy2E63', 'echivambo@psi.org.mz', 1, 1, '2018-01-05 10:22:12', '2018-01-05 10:22:12'),
(4, 'opbGGWuCsg0eo21', 'echiambo@psi.org.mz', 1, 1, '2018-01-07 05:28:54', '2018-01-07 05:28:54'),
(5, 'ntFu8sGiRrQkUy1', 'edson.cbo@outlook.com', 1, 1, '2018-01-07 05:31:28', '2018-01-07 05:31:28'),
(6, 'eBSyasozCDnf3fq', 'ech@psi.org.mz', 1, 1, '2018-01-07 05:32:19', '2018-01-07 05:32:19'),
(7, 'ydtNr5tCd0Gc5sT', 'bo@psi.org.mz', 1, 1, '2018-01-07 05:42:00', '2018-01-07 05:42:00'),
(8, 'rKEdKir5hIR7iLP', 'ecbo@psi.org.mz', 1, 1, '2018-01-07 05:43:59', '2018-01-07 05:43:59'),
(9, '1a5ymO2PoeDZZWA', 'edson.chivam@outook.com', 1, 1, '2018-01-07 05:44:13', '2018-01-07 05:44:13'),
(10, 'AeLv2ABksXnt1uI', 'echivabo@psi.org.mz', 1, 1, '2018-01-07 05:45:16', '2018-01-07 05:45:16'),
(11, 'XWQaD6xM4gSPW30', '5vambo@outlook.com', 1, 1, '2018-01-07 05:45:53', '2018-01-07 05:45:53'),
(12, 'H91m8ZDxAMk4Znl', 'eds545o@outlook.com', 1, 1, '2018-01-07 05:46:45', '2018-01-07 05:46:45'),
(13, 'xryhshgK99B4hRo', 'jhgjgkj@psi.org.mz', 1, 1, '2018-01-07 05:47:29', '2018-01-07 05:47:29'),
(14, 'dwt0smmmUhfYZ9K', 'edson.kjh@outlook.com', 1, 1, '2018-01-07 05:47:48', '2018-01-07 05:47:48'),
(15, 'qoj1l9VtkrzfLhO', 'edson.1k@outlook.com', 1, 1, '2018-01-07 05:48:48', '2018-01-07 05:48:48'),
(16, 'iz8kbQLrVolW6oi', 'edson.5555@outlook.com', 1, 1, '2018-01-07 05:50:02', '2018-01-07 05:50:02'),
(17, 'z2fC69sVsmLmc6v', 'jhgjkh@psi.org.mz', 1, 1, '2018-01-07 05:50:53', '2018-01-07 05:50:53'),
(18, 'tDIdMuvDXD5bFSK', 'aaaaaaaaa@psi.org.mz', 1, 1, '2018-01-07 05:55:23', '2018-01-07 05:55:23'),
(19, '608vdTIGJnSEszY', 'edson@look.com', 1, 1, '2018-01-07 06:48:41', '2018-01-07 06:48:41'),
(20, 'OOkPain9Qe4p2B4', 'xxx@xc.co', 1, 1, '2018-01-08 13:23:28', '2018-01-08 13:23:28'),
(21, 'sihcq6Wi3SZiC2E', 'cccc@c', 1, 1, '2018-01-08 13:24:12', '2018-01-08 13:24:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ramo_actividades`
--

CREATE TABLE `ramo_actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `grupo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Edson Chivambo', 'echivambo@psi.org.mz', '$2y$10$C/QNn8SGQ/CCzu/xqnuAjeZq530G3XIt0SplXCKD7Or309IRl9I6K', 1, 1, 'ozPsurANI0ANu7hyPbRwbnc4fclzSH53qsf7QhZHpaS5TUs6UviR0xRyrc8o', NULL, NULL),
(2, 'Emidio Nhacudima', 'enhacudima@psi.org.mz', '$2y$10$vtiZOiLP.jJZ2QD9OtSuiOoP3k.c1nw87kIT4tc4TKkuUFHOuDVA2', 1, 1, NULL, NULL, NULL),
(3, 'Ndlavela, Q24', 'edsoambo@gmail.com', '$2y$10$own7dlm3xPJYhZ3NaXGlNe0bbU2Hyv7a2lDRzxmCWMTcYd5eOONHK', 1, 1, NULL, '2017-12-27 17:22:56', '2017-12-27 17:22:56'),
(4, 'Ndlavela, Q24', 'edsonchivao@gmail.com', '$2y$10$wunr5hqwUkSW4Eoq92leEebKYhvHn0AR8uSpxpoWUJ.OvtvwA6OsG', 1, 1, 'zv8RXxOUnWVLpGQw10ke8JBDHJUM6WtgrbNK2w2yaF1dStKAogQxWWw841T6', '2017-12-27 17:23:45', '2017-12-27 17:23:45'),
(5, 'Ndlavela, Q2', 'edson@gmail.com', '$2y$10$tyRNb94fpxF6RvzsGB.QyuVVCQ5zc9Rm9vMdfm.EcHs8W1EXHIabi', 1, 1, NULL, '2017-12-27 17:48:44', '2017-12-27 17:48:44'),
(6, 'Ndlav, Q24', 'edsonchbo@gmail.com', '$2y$10$toW1MXr83O708VYFR5ktdu6t8jXOJO77WjHn12.qzFgFmPHYtWh1e', 1, 1, NULL, '2017-12-27 18:36:18', '2017-12-27 18:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `providers_telefone_fixo_unique` (`telefone_fixo`),
  ADD UNIQUE KEY `providers_fax_unique` (`fax`),
  ADD UNIQUE KEY `providers_celular_unique` (`celular`),
  ADD UNIQUE KEY `providers_email_unique` (`email`),
  ADD UNIQUE KEY `providers_numero_conta_unique` (`numero_conta`),
  ADD UNIQUE KEY `providers_nib_unique` (`nib`);

--
-- Indexes for table `prov_cods`
--
ALTER TABLE `prov_cods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prov_cods_codigo_unique` (`codigo`),
  ADD UNIQUE KEY `prov_cods_email_unique` (`email`);

--
-- Indexes for table `ramo_actividades`
--
ALTER TABLE `ramo_actividades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ramo_actividades_nome_unique` (`nome`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `prov_cods`
--
ALTER TABLE `prov_cods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ramo_actividades`
--
ALTER TABLE `ramo_actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
