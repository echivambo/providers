-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jan-2018 às 19:18
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
-- Estrutura da tabela `districts_of_mozambique`
--

CREATE TABLE `districts_of_mozambique` (
  `id` int(11) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `provice_of_mozambique_id` int(11) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `districts_of_mozambique`
--

INSERT INTO `districts_of_mozambique` (`id`, `district`, `provice_of_mozambique_id`, `province`) VALUES
(101, 'Kalhamanculo ', 1, 'Maputo Cidade '),
(102, 'Kamavota ', 1, 'Maputo Cidade '),
(103, 'Kamaxakene ', 1, 'Maputo Cidade '),
(104, 'Kampfumo ', 1, 'Maputo Cidade '),
(105, 'Kamubukwana ', 1, 'Maputo Cidade '),
(106, 'Kanyaka ', 1, 'Maputo Cidade '),
(107, 'Katembe ', 1, 'Maputo Cidade '),
(108, 'Nlhamankulu ', 1, 'Maputo Cidade '),
(201, 'Boane ', 2, 'Maputo '),
(202, 'Cidade Matola ', 2, 'Maputo '),
(203, 'Magude ', 2, 'Maputo '),
(204, 'Manhica ', 2, 'Maputo '),
(205, 'Marracuene ', 2, 'Maputo '),
(206, 'Matola ', 2, 'Maputo '),
(207, 'Matutuine ', 2, 'Maputo '),
(208, 'Moamba ', 2, 'Maputo '),
(209, 'Namaacha ', 2, 'Maputo '),
(301, 'Bilene ', 3, 'Gaza '),
(302, 'Chibuto ', 3, 'Gaza '),
(303, 'Chicualacuala ', 3, 'Gaza '),
(304, 'Chigubo ', 3, 'Gaza '),
(305, 'Chokwe ', 3, 'Gaza '),
(306, 'Cidade de xai-xai ', 3, 'Gaza '),
(307, 'Distrito de xai-xai ', 3, 'Gaza '),
(308, 'Guija ', 3, 'Gaza '),
(309, 'Mabalane ', 3, 'Gaza '),
(310, 'Macia ', 3, 'Gaza '),
(311, 'Manjacaze ', 3, 'Gaza '),
(312, 'Massangena ', 3, 'Gaza '),
(313, 'Massingir ', 3, 'Gaza '),
(401, 'Cidade de inhambane ', 4, 'Inhambane '),
(402, 'Funhalouro ', 4, 'Inhambane '),
(403, 'Govuro ', 4, 'Inhambane '),
(404, 'Homoine ', 4, 'Inhambane '),
(405, 'Inharrime ', 4, 'Inhambane '),
(406, 'Inhassoro ', 4, 'Inhambane '),
(407, 'Jangamo ', 4, 'Inhambane '),
(408, 'Mabote ', 4, 'Inhambane '),
(409, 'Massinga ', 4, 'Inhambane '),
(410, 'Maxixe ', 4, 'Inhambane '),
(411, 'Morrumbene ', 4, 'Inhambane '),
(412, 'Panda ', 4, 'Inhambane '),
(413, 'Vilankulos ', 4, 'Inhambane '),
(414, 'Zavala ', 4, 'Inhambane '),
(501, 'Buzi ', 5, 'Sofala '),
(502, 'Caia ', 5, 'Sofala '),
(503, 'Chemba ', 5, 'Sofala '),
(504, 'Cheringoma ', 5, 'Sofala '),
(505, 'Chibabava ', 5, 'Sofala '),
(506, 'Cidade da beira ', 5, 'Sofala '),
(507, 'Dondo ', 5, 'Sofala '),
(508, 'Gorongosa ', 5, 'Sofala '),
(509, 'Machanga ', 5, 'Sofala '),
(510, 'Maringue ', 5, 'Sofala '),
(511, 'Marromeu ', 5, 'Sofala '),
(512, 'Muanza ', 5, 'Sofala '),
(513, 'Nhamatanda ', 5, 'Sofala '),
(601, 'Alto Molocue ', 6, 'Zambezia '),
(602, 'Chinde ', 6, 'Zambezia '),
(603, 'Cidade de quelimane ', 6, 'Zambezia '),
(604, 'Derre ', 6, 'Zambezia '),
(605, 'Gile ', 6, 'Zambezia '),
(606, 'Gurue ', 6, 'Zambezia '),
(607, 'Ile ', 6, 'Zambezia '),
(608, 'Inhassunge ', 6, 'Zambezia '),
(609, 'Luabo ', 6, 'Zambezia '),
(610, 'Lugela ', 6, 'Zambezia '),
(611, 'Maganja da costa ', 6, 'Zambezia '),
(612, 'Milange ', 6, 'Zambezia '),
(613, 'Mocuba ', 6, 'Zambezia '),
(614, 'Mocubela ', 6, 'Zambezia '),
(615, 'Mopeia ', 6, 'Zambezia '),
(616, 'Morrumbala ', 6, 'Zambezia '),
(617, 'Namacurra ', 6, 'Zambezia '),
(618, 'Namarroi ', 6, 'Zambezia '),
(619, 'Nicoadala ', 6, 'Zambezia '),
(620, 'Pebane ', 6, 'Zambezia '),
(621, 'Quelimane ', 6, 'Zambezia '),
(701, 'Angoche ', 7, 'Nampula '),
(702, 'Cidade de nampula ', 7, 'Nampula '),
(703, 'Distrito de nampula ', 7, 'Nampula '),
(704, 'Erati ', 7, 'Nampula '),
(705, 'Ilha de Mocambique ', 7, 'Nampula '),
(706, 'Lalaua ', 7, 'Nampula '),
(707, 'Larde ', 7, 'Nampula '),
(708, 'Liupo ', 7, 'Nampula '),
(709, 'Malema ', 7, 'Nampula '),
(710, 'Meconta ', 7, 'Nampula '),
(711, 'Mecuburi ', 7, 'Nampula '),
(712, 'Memba ', 7, 'Nampula '),
(713, 'Mogincual ', 7, 'Nampula '),
(714, 'Mogovolas ', 7, 'Nampula '),
(715, 'Moma ', 7, 'Nampula '),
(716, 'Monapo ', 7, 'Nampula '),
(717, 'Mossuril ', 7, 'Nampula '),
(718, 'Muecate ', 7, 'Nampula '),
(719, 'Murrupula ', 7, 'Nampula '),
(720, 'Nacala-a-velha ', 7, 'Nampula '),
(721, 'Nacala-porto ', 7, 'Nampula '),
(722, 'Nacaroa ', 7, 'Nampula '),
(723, 'Rapale ', 7, 'Nampula '),
(724, 'Ribaue ', 7, 'Nampula '),
(801, 'Cidade de lichinga ', 8, 'Niassa '),
(802, 'Cuamba ', 8, 'Niassa '),
(803, 'Distrito de lichinga ', 8, 'Niassa '),
(804, 'Lago ', 8, 'Niassa '),
(805, 'Majune ', 8, 'Niassa '),
(806, 'Mandimba ', 8, 'Niassa '),
(807, 'Marrupa ', 8, 'Niassa '),
(808, 'Maua ', 8, 'Niassa '),
(809, 'Mavago ', 8, 'Niassa '),
(810, 'Mecanhelas ', 8, 'Niassa '),
(811, 'Mecula ', 8, 'Niassa '),
(812, 'Metarica ', 8, 'Niassa '),
(813, 'Muembe ', 8, 'Niassa '),
(814, 'Ngauma ', 8, 'Niassa '),
(815, 'Nipepe ', 8, 'Niassa '),
(816, 'Sanga ', 8, 'Niassa '),
(901, 'Ancuabe ', 9, 'Cabo Delgado '),
(902, 'Balama ', 9, 'Cabo Delgado '),
(903, 'Chiure ', 9, 'Cabo Delgado '),
(904, 'Cidade de pemba ', 9, 'Cabo Delgado '),
(905, 'Ibo ', 9, 'Cabo Delgado '),
(906, 'Macomia ', 9, 'Cabo Delgado '),
(907, 'Mecufi ', 9, 'Cabo Delgado '),
(908, 'Meluco ', 9, 'Cabo Delgado '),
(909, 'Metuge ', 9, 'Cabo Delgado '),
(910, 'Mocimboa da praia ', 9, 'Cabo Delgado '),
(911, 'Montepuez ', 9, 'Cabo Delgado '),
(912, 'Mueda ', 9, 'Cabo Delgado '),
(913, 'Muidumbe ', 9, 'Cabo Delgado '),
(914, 'Namuno ', 9, 'Cabo Delgado '),
(915, 'Nangade ', 9, 'Cabo Delgado '),
(916, 'Palma ', 9, 'Cabo Delgado '),
(917, 'Quissanga ', 9, 'Cabo Delgado '),
(1001, 'Angonia ', 10, 'Tete '),
(1002, 'Cahora bassa ', 10, 'Tete '),
(1003, 'Changara ', 10, 'Tete '),
(1004, 'Chifunde ', 10, 'Tete '),
(1005, 'Chiuta ', 10, 'Tete '),
(1006, 'Cidade de tete ', 10, 'Tete '),
(1007, 'Doa ', 10, 'Tete '),
(1008, 'Dsc tete ', 10, 'Tete '),
(1009, 'Macanga ', 10, 'Tete '),
(1010, 'Magoe ', 10, 'Tete '),
(1011, 'Marara ', 10, 'Tete '),
(1012, 'Maravia ', 10, 'Tete '),
(1013, 'Moatize ', 10, 'Tete '),
(1014, 'Mutarara ', 10, 'Tete '),
(1015, 'Tsangano ', 10, 'Tete '),
(1016, 'Zumbo ', 10, 'Tete '),
(1101, 'Barue ', 11, 'Manica '),
(1102, 'Cidade de chimoio ', 11, 'Manica '),
(1103, 'Gondola ', 11, 'Manica '),
(1104, 'Guro ', 11, 'Manica '),
(1105, 'Machaze ', 11, 'Manica '),
(1106, 'Macossa ', 11, 'Manica '),
(1107, 'Manica ', 11, 'Manica '),
(1108, 'Mossurize ', 11, 'Manica '),
(1109, 'Sussundenga ', 11, 'Manica '),
(1110, 'Tambara ', 11, 'Manica ');

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
(26, '4471', '55555', 'uploads/29-10-2017.png', 15555, 'Moz', 'Maputo', '555555', '5555555', '55555', '5555', 'limpeza', '5555555', '555555', '555555', '456@sd444', '545', '545555', 555555, '55555', 'uploads/29-10-2017.png', 1, '2018-01-08 17:10:22', '2018-01-08 17:10:22'),
(27, '88888', '5555', 'uploads/Capture.PNG', 5555, 'Moz', 'Maputo', '8888', '8888', '888', '8888', 'limpeza', '888888', '88888', '88888', 'echivambo@psi.org.mz', '8888', '8888', 8888, '8888', 'uploads/Capture.PNG', 1, '2018-01-09 06:33:48', '2018-01-09 06:33:48');

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
(2, 'Iit2XkwDz2Fbijx', 'amjd.jjd@ndn.com', 0, 1, '2017-12-28 09:20:01', '2017-12-28 09:20:01'),
(3, 'IOhmvAfF2yy2E63', 'echivambo@psi.org.mz', 0, 1, '2018-01-05 10:22:12', '2018-01-05 10:22:12'),
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
(21, 'sihcq6Wi3SZiC2E', 'cccc@c', 1, 1, '2018-01-08 13:24:12', '2018-01-08 13:24:12'),
(22, 'KzVeY2kCGKdiURV', 'eds5ambo@outlook.com', 1, 1, '2018-01-09 08:03:52', '2018-01-09 08:03:52'),
(23, 'GGMhvEgsoLQBoXV', 'mmmm@ds', 1, 1, '2018-01-09 15:38:05', '2018-01-09 15:38:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ramos`
--

CREATE TABLE `ramos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ramo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ramos`
--

INSERT INTO `ramos` (`id`, `ramo`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Eletrecidade', 1, 2, '2017-12-27 16:20:40', '2017-12-27 16:20:40'),
(2, 'Ac', 1, 5, '2017-12-27 16:39:29', '2017-12-27 16:39:29'),
(3, 'uuu', 1, 1, '2018-01-09 15:46:50', '2018-01-09 15:46:50');

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
-- Indexes for table `districts_of_mozambique`
--
ALTER TABLE `districts_of_mozambique`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ramos`
--
ALTER TABLE `ramos`
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
-- AUTO_INCREMENT for table `districts_of_mozambique`
--
ALTER TABLE `districts_of_mozambique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `prov_cods`
--
ALTER TABLE `prov_cods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `ramos`
--
ALTER TABLE `ramos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
