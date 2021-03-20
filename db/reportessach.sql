-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2020 a las 10:20:07
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_Categoria` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_Categoria`, `categoria`, `descripcion`, `ruta`, `admin`) VALUES
(1, 'Presidencia', 'PRESIDENCIA', '1.presidencia.php', 'Admin.php'),
(2, 'Coordinación de Asistencia Alimentaria', 'Coordinación de Asistencia Alimentaria', '8.1.4.Asistencia-Alimentaria.php', 'Normal.php'),
(3, 'Innovación Tecnológica', 'Innovación Tecnológica', 'it.php', 'Normal.php'),
(4, 'Transparencia', 'Transparencia', 'transparencia.php', 'Normal.php'),
(5, 'DIF', 'DIF', 'dif.php', 'Normal.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coin`
--

CREATE TABLE `coin` (
  `id_coin` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coin`
--

INSERT INTO `coin` (`id_coin`, `ruta`, `titulo`, `date`, `clave`) VALUES
(1, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EY4puH77YrxFukpIXgVsIuUB8bZbjNqYJTqfRapL9WBL9Q?e=egT0rC', 'COIN 1.6 Dirección de Innovación Tecnológica', '2020-03-06 22:41:57', ''),
(2, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESS30CDGP0BDickVxklaSuYBeTD68u9rNq_DEwALltE5Fw?e=0Q01Qk', 'COIN 4.9 Departamento de Bienes Patrimoniales', '2020-04-01 19:27:51', ''),
(3, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EftxLQN6tjRPk9sjtH_r2LUBBNcLog5nrWJD8jToW-obuA?e=l8QDVe', 'COIN 3.5 Coordinación de Archivo', '2020-04-01 19:53:51', ''),
(4, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EaLkzcMs7jJFkZNXAR746TgBUVgD2YqGtqlrFXLmQ8Kpmw?e=kaBbT6', 'COIN 2 SINDICATURA MUNICIPAL', '2020-04-01 20:00:31', ''),
(5, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EfKq5GmUNLJHoGxVoNEImlEBCEAOYTSMiUjsopA6jWlKsA?e=DRUwXM', 'COIN 10 SECRETARÍA DE FOMENTO AGROPECUARIO', '2020-04-01 20:07:29', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text,
  `usuario` varchar(100) NOT NULL,
  `file_id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE `destinatario` (
  `id_destinatario` int(10) NOT NULL,
  `destinatario` varchar(250) DEFAULT NULL,
  `comentario` text NOT NULL,
  `remitente` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `download` int(11) NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '0',
  `is_folder` tinyint(1) NOT NULL DEFAULT '0',
  `usuario` varchar(100) NOT NULL,
  `folder_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `file`
--

INSERT INTO `file` (`id`, `code`, `filename`, `description`, `download`, `is_public`, `is_folder`, `usuario`, `folder_id`, `created_at`) VALUES
(1, 'AsDa80KPfjco', 'carpeta de prueba', 'h', 0, 1, 1, 'PRESIDENCIA', NULL, '2020-06-15 02:22:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

CREATE TABLE `formatos` (
  `id_formato` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formatos`
--

INSERT INTO `formatos` (`id_formato`, `ruta`, `titulo`, `clave`, `date`) VALUES
(1, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EeiASPE-7WZHuK9TVP5ZR38BmoZSozRJ5FGlesmTrcMjLg?e=htez1j', '1.6 Dirección de Innovación Tecnológica', 'JAGTJx-R.xlsx', '2020-02-17 14:30:30'),
(2, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYfYEj3izO1OhlFcBc_kDKMBaC66dbAVhQhA9009Zi7PFw?e=XJhdwG', '2.1 Unidad de Gestoría Jurídica Popular', 'RTTI/2@7.xlsx ', '2020-02-17 14:34:19'),
(3, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EeBU3omvZlJBm0tIOPk16r0Ba2cwopWFJswTX-vgx23QAw?e=HLacaf', '2.2 Dirección de Mediación, Conciliación y Arbitraje', 'LBGO1234.xlsx', '2020-02-17 14:43:50'),
(4, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EfbY-OeEl9JEmFBnwPm3gJ0BHCSs1w3duePO5TlVuIHBmA?e=zVscXp', '2.3 Dirección de Consejería Jurídica', 'HMRU/x12.xlsx', '2020-02-17 14:45:49'),
(5, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EejJDOfkxapPlVbCgfAzQGwBv90d6jAKYfqMX59CXllOfw?e=OAv1hY', '3 SECRETARÍA DEL AYUNTAMIENTO', 'GLVYa/Nw.xlsx', '2020-02-17 14:46:44'),
(6, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVl5e0FN-ghEhpgrKB1NkWQBTnx4voVyH2qHUrgW66myTw?e=1CQrah', '3.1 Dirección Juridíca', 'JOAaQj$M.xlsx', '2020-02-17 14:47:54'),
(7, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYrOpaqBoHRAsc9thqibyfAB5v2saZsaSPCxXXgOV6g54g?e=XZ3SNE', '3.2 Dirección de Registro Civil', 'JMTMGr@.xlsx', '2020-02-17 14:48:46'),
(8, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EQpLhPNY1XpEgdxoDJon0zUBKYP8cZqdWGifuo_azEwwuQ?e=iwcIqd', '3.3 Dirección de Juzgado Calificador', 'KOBU-10z.xlsx', '2020-02-17 14:49:40'),
(9, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EXmpAU_m_IpPmLwgwf5MC_4B_iCbcg-wkYRgebo-uI5NsA?e=GWgcaN', '3.4 Dirección de Juzgado  Municipal', 'YTGA_10@.xlsx', '2020-02-17 14:50:32'),
(10, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESDv_q8QXudKpZAzsF-UvTcBnz88cM_5G2i0lAYqRLJtjA?e=kxkpbW', '3.5 Coordinación de Archivo', 'MTL1Pg@C.xlsx', '2020-02-17 14:51:20'),
(11, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYHxnYFgLaZPgTJBMApwMYYBaVnfU4MGE79KWHJmzWvUBA?e=rkftJM', '4.1 Dirección de Ingresos', 'MESJZw_i.xlsx', '2020-02-17 14:53:18'),
(12, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EbPCN9syJrtLkECCvE26ZJgB_k-yS9gSKUlzor1f0BP9rw?e=0ifQQo', '4.3 Dirección de Egresos', 'LTO1Ka-C.xlsx', '2020-02-17 14:54:20'),
(13, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EdkZQjUlwSpAlnA2tfiDImgBFcD9SBuRzBWsj_yqXpzZ9A?e=LU2VTY', '4.6 Dirección de Capital Humano', 'JMGBkc@w.xlsx', '2020-02-17 14:55:15'),
(14, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EU3sD60ckjpOhHxCYZdzc2MBAyxW7Iim7isEcKb6n4C_0Q?e=dhCRUc', '4.8 Dirección de Recursos Materiales', 'ETCqUm$2.xlsx', '2020-02-17 14:56:05'),
(15, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYF2E5_fz2RNoqKh_swJ6GcBvQPEbFWHfb7RYe1u0j-8Wg?e=DRGrUs', '4.9 Departamento de Bienes Patrimoniales', 'JLGRkg@p.xlsx', '2020-02-17 14:57:07'),
(16, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVbfJvCbcVpJrKApb4c4N18BJ0JsGDfAGTVfGcNqCgeB8g?e=1Sbrbo', '5 CONTRALORIA MUNICIPAL', 'DMDGT@_p.xlsx', '2020-02-17 14:58:00'),
(17, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESi2w3EnDytHn3GNTo5ifmwBkXqzQRgKys9Wo22iYH_djQ?e=JuXNye', '5.1 Dirección de Auditoria', 'JASFFi-q@.xlsx', '2020-02-17 14:58:51'),
(18, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ef6FqBWhiolLpyMiG18mzUABG0Y4rhqZXahlfrJq7r_xAg?e=U4Gawz', '5.2 Dirección Jurídica', 'RVDzTy$r.xlsx', '2020-02-17 14:59:41'),
(19, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ERZ6qimiAztHscphflgvJs4BIuBMfgE0CoAn1e9ufQFSYQ?e=8psQ3A', '5.3 Dirección de Investigación', 'BACMma$e.xlsx', '2020-02-17 15:00:33'),
(20, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVHb1_LT10NKlbThiHLmF7kB4zb6_gKvj_6yhkjAzFeotA?e=Fub2Zh', '5.4 Dirección de Sustanciación', 'LGP@mx&1.xlsx', '2020-02-17 15:01:18'),
(21, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EfV11YqD4RVNlxvs5tbX-p0BvVv1xjc_JTMwffF4fbd-0Q?e=jkAvxq', '5.5 Dirección de Planeación y Seguimiento', 'JEGDxy-d.xlsx', '2020-02-17 15:02:09'),
(22, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ERJgeby9QNpOqKU6VzQzgl0BeiKVNnfrUQMbdjrR5raNKA?e=bRcKm3', '5.6 Dirección de Control, Evaluación y Contraloría Social', 'VMC&Bp-z.xlsx', '2020-02-17 15:02:53'),
(23, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESB9mLRMvGNBg3HX_3s7nJ8BGEsTBJACket0Uzjz4OKQeg?e=GYAdJ4', '5.7 Dirección de Calidad de Gestión Administrativa', 'JMGBkc@w.xlsx', '2020-02-17 15:03:38'),
(24, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ed7G489P-bpKgcs3NhVa5uEBwBZxSRSJJFHni7TIUX98tQ?e=BlEkDg', '6.1 Dirección de Giros Comerciales', 'DMATT@2x.xlsx', '2020-02-17 15:04:41'),
(25, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EaIVX-JwmBRDsMfI3LdjwSgBRW1vdgl5juXp87OYEs5GNA?e=wsD31h', '6.3 Dirección de Participación Ciudadana', 'KMC&Vs@5.xlsx', '2020-02-17 15:05:28'),
(26, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EceUO4spyzNAkLNoszE3d0kBqw_uOjO8JKUXKPZyh3HDqA?e=leasEZ', '6.4 Dirección Jurídica', 'AMSV-Xp1.xlsx', '2020-02-17 15:09:38'),
(27, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZT6f4yvV8RKlwdUfeaID-sBmqxlC3jpWG3kHBvQoiLaOw?e=evrMli', '7 SECRETARÍA DE BIENESTAR SOCIAL', 'EDHH@100.xlsx', '2020-02-17 15:10:28'),
(28, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZG8dO4RDidInoI4rdnYpB8BmvITDatreX4e90fvMFodTA?e=uWVpcD', '7.0 Coordinación de Casa Jóvenes en Progreso', 'EAGR@123.xlsx', '2020-02-17 15:11:18'),
(29, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZldhkZL5NdIn2p3kMV5RXEBKT6f0yAMvdE_PUrhhq5Cwg?e=c4RmNe', '7.1 Dirección de Deporte y Juventud', 'LIO_Cc&Q.xlsx', '2020-02-17 15:12:18'),
(30, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EQV8UHzMuFtLpJUGI8tMV4QBb_SiWCy-ekvP6iebEO3uPQ?e=aS2Q4d', '7.2 Dirección de Educación', 'YEDC-/no.xlsx', '2020-02-17 15:13:04'),
(31, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYjXPNnfI4lArvjidX_kLBgBTUyoExDT3k8vWxGSG4GN5A?e=3tv8Ck', '7.3 Dirección de Programas Sociales', 'HXC/Zh-f.xlsx', '2020-02-17 15:13:46'),
(32, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EWxxQuwnh7NJhqkCdcZpbk4BWz2w2wbG1UTvheimBPZxbA?e=SdjXug', '7.4 Dirección de Mujeres', 'LAHJr-p1.xlsx', '2020-02-17 15:14:24'),
(33, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ES15UHUE4cFKm5Lvtmdx2WsBs4Fwsc4DwYxBUuaNPq-oiw?e=rInxqh', '7.5 Dirección de Migración', 'CAC/Sg-W.xlsx', '2020-02-17 15:15:10'),
(34, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EdERxPk8e3xEka6UHLp9ezcBlyWFfomY9wgZBmFV_jEp5g?e=Hvfoll', '8 SISTEMA PARA EL DESARROLLO INTEGRAL DE LA FAMILIA', 'GFEA-111.xlsx', '2020-02-17 15:15:57'),
(35, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EWGIqQcRbvBLsFRI1PJw7zoBGiFIVU2DP2iL-ilAyMlYzA?e=oJOVgD', '8.1 Coordinación General', 'EYMM7/sa.xlsx', '2020-02-17 15:16:47'),
(36, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EbTPvG7IdrpPtBMnUM27_PgBhTsE68gQsFJvvboIAFJNlA?e=4cdXZQ', '8.1.1 Coordinación de Salud', 'MLCV/123.xlsx', '2020-02-17 15:17:28'),
(37, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESnyQzenkxZHoZA_0LArcYYB-EPeG6X_ELwoVy9XRpau2w?e=Ddj1s2', '8.1.2 Coordinación de Rehabilitación', 'GIT/Cm10.xlsx', '2020-02-17 15:18:10'),
(38, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EV5QdyycwbhGuzgt-ssrAogBbhEGeVL58r9NSk-XN1YKpA?e=USbEuZ', '8.1.3 Coordinación de Psicología y CLIPAM', 'NATT-m&5.xlsx', '2020-02-17 15:18:57'),
(39, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZraC_P4PFdGjx0EXlaMVAoBeeiinmQteuLYLYOEsGarGg?e=LuaFna', '8.1.4 Coordinación de Asistencia Alimentaria', 'JCC-Rd/z.xlsx', '2020-02-17 15:19:44'),
(40, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EToshp642hJEioxrwaEFtJYBLMqarg40zuLlPyK-vxT-kA?e=kPZzJk', '8.1.5 Coordinación de Desarrollo Comunitario', 'AAOt-@12.xlsx', '2020-02-17 15:20:53'),
(41, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESJ4ggmp6EdDjXQuBZKRzNsB0Y8eb2HEV-u-iOdNK3ZR2A?e=oZMcn7', '8.1.6 Coordinación Jurídica', 'DMBRn-10.xlsx', '2020-02-17 15:22:18'),
(42, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYlvLo2-h0BFiPPt0h3dFWEBX_iiQZvAe7R5LuVRzRwQ5A?e=NdDJZw', '8.1.7 Coordinación de Adulto Mayor', 'FSTE-100.xlsx', '2020-02-17 15:23:06'),
(44, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EWCf866tMpdKjKULL12nQXIBEkkjo6CSEHvIRh0kEE386g?e=yS5mNP', '9 SECRETARÍA DE ARTE Y CULTURA', 'XFHE-@10.xlsx', '2020-02-17 15:24:46'),
(45, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EXZf1Gsg8e5AnIfJW72vi_4Bg1VeRHsZQnr9xSnH9Xd4fQ?e=RYLv5x', '9.1 Dirección de Arte, Espacios Culturales y Festivales', 'MPRUDt-8.xlsx', '2020-02-17 15:25:27'),
(46, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZupI3Czf1BFq1IdUZV1T84Bf1jgXgJD6DffQ-Sleo-9pA?e=uaX3iQ', '9.2 Dirección de Patrimonio Cultural', 'GTToEj-f.xlsx', '2020-02-17 15:26:09'),
(47, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ed2jyj4UKC1DjwaYwR1RhYkBSgzrU8aidTjPq9ahiHv1Bg?e=w6vedb', '9.3 Dirección de Gestión, Promoción y Fomento Cultural', 'YMMPnX-p.xlsx', '2020-02-17 15:26:56'),
(48, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ef91nHUaFNRLpt7vLy3-g44B6t_339DixJbblJ9c6Gzz6A?e=SKNZ5n', '10 SECRETARÍA DE FOMENTO AGROPECUARIO', 'ARVEkC-W.xlsx', '2020-02-17 15:28:52'),
(49, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESvFSkACBp9Akkbj_XrV-5QBTSk42FMJUeFe8xLcwvJAwg?e=DfsREE', '10.1 Dirección de Asistencia Técnica Agropecuario', 'OMPCRs/7.xlsx', '2020-02-17 15:29:31'),
(50, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EfDDEp7bwydGtbok9x1DqQQB2HwFS5DcrHIiKjnIB5RlVQ?e=LZBQmP', '10.2 Dirección de Desarrollo de Mercado y Economía Social Solidaria', 'RAGU/Sd2.xlsx', '2020-02-17 15:30:12'),
(51, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EcE3AiaXK3RIt7bQaLL7zdMB1v4bWkbv3a9c1XExyfYz6Q?e=PAV2Vo', '10.3 Dirección de Proyectos Agropecuarios', 'FGSA_4sY.xlsx', '2020-02-17 15:31:00'),
(52, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ebh5S0MN6-lKsu-aHI88FHsBb89aGOM5v4fQa5iPAkMJMQ?e=oaBbgR', '10.4 Dirección de Bienestar Animal', 'GLPE2Ks9.xlsx', '2020-02-17 15:31:40'),
(53, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVEJobJazr9OhcBnbOiAsjcBwX6fPHAbvM7skvM9ZFTtww?e=Fv9W7z', '11 SECRETARÍA DE FOMENTO ECONÓMICO', 'HFRH/5L&.xlsx', '2020-02-17 15:32:29'),
(54, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZOv1gj2h1JDuJDYa0WofaUBDMBAxYNH9zRncJVMHE1xYg?e=wX3lLq', '11.1 Dirección de Desarrollo y Proyectos Económicos', 'AMSGM/4a.xlsx', '2020-02-17 15:33:10'),
(55, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EUpdVhRvo4tCr6iNsuCrlqMB77ZDMBYeI02D-hKBuQmVzg?e=GjXlQM', '11.2 Dirección de Turismo', 'NMMA-5tS.xlsx', '2020-02-17 15:33:55'),
(56, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EZP-A9zIsGtMtbt0Tfy82G0B0kXokP9uP6U8PYuNzvh-bA?e=1xyzw5', '12 SECRETARÍA DE SERVICIOS PÚBLICOS', 'JAVI-5&7.xlsx', '2020-02-17 15:34:48'),
(57, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EfcRzcCCB4NAk87APaUjm1EB7vcNeDRdUOxA1Xzz745R-Q?e=3FG64r', '12.0 Coordinador Administrativo', 'VCPEsX&6.xlsx', '2020-02-17 15:35:27'),
(58, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ETT3wEFtwfpLqPPAOmZhSv4B2S9Ut-LPGHjoSQkAtqvrrw?e=vLAGLF', '12.1 Dirección de Servicios Públicos', 'JRAC@5Lx.xlsx', '2020-02-17 15:36:07'),
(59, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EYzkZEz-7Y5AqpuF5KTSbPUBncbeL-iSIUZ8tqCKXv8AmQ?e=87nr4d', '12.2 Dirección de Servicios Generales', 'EGX1_tZx.xlsx', '2020-02-17 15:36:55'),
(60, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EUX90_iM4GVDoi9XrsC6I5YBhTP4iTsP3S4Oufk-UBh9_g?e=V7fP4a', '13 SECRETARÍA  DE DESARROLLO URBANO SUSTENTABLE', 'MCCU65a/.xlsx', '2020-02-17 15:37:44'),
(61, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EQbyiOZwdgBHvab3JwBl5akBAbEcy2JjfX-_sf-N52D9SQ?e=DKRsIJ', '13.1 Dirección de Administración Urbana', 'MEG9.gO7.xlsx', '2020-02-17 15:38:31'),
(62, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESIUvOJa8c9CqIkJFEnWp3AB8aTJxCj6Fgnf-rln6viiUg?e=mNKu0q', '13.2 Dirección de Innovación y Proyectos', 'EMCA/Af6.xlsx', '2020-02-17 15:39:19'),
(63, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EdQAS80ZnK1NmKQSXpWWXZ4BGHzkYBnAmMSCE9Mou4ATOQ?e=QPfRTh', '13.3 Dirección de Sustentabilidad Urbana', 'AHHE_5Ji.xlsx', '2020-02-17 15:40:14'),
(64, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Eaj5Mj1xM05Ck22ttxP2Jq8Bu5sx6DIdo_KoViFSBshNtA?e=onqfAX', '13.4 Dirección Jurídica', 'AMFR/dPa.xlsx', '2020-02-17 15:40:53'),
(65, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EberVwtyuTdBnUKIZwL9Gf8BcLjY4J64jP9dsvL5X3r_PA?e=WN2Oqv', '14 SECRETARÍA DE OBRAS PÚBLICAS', 'AVMA_d5@.xlsx', '2020-02-17 15:41:38'),
(66, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVwu8yBNkFpDgj8TzPz43U8B6_i95cmjhlheoDu5MMzGfA?e=UaPoz9', '14.1 Dirección de Proyectos', 'AMMO18&H.xlsx', '2020-02-17 15:42:19'),
(67, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EaX3GFHgFytJnR6vYkXu-DgBYwJVPMpUFY8X3d_rCRipUg?e=NfV4hf', '14.2 Dirección de Obras', 'RTTO@Jv5.xlsx', '2020-02-17 15:42:57'),
(68, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ETHSP9hd7khGuwbOIvTCI5UB7fJGGkFgiRGV7o-zSxGgTg?e=THEUIv', '14.3 Dirección Júridica y Administrativa', 'JTPA3Wxy.xlsx', '2020-02-17 15:43:41'),
(69, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EWzzmgjYn4tDjYLz-yjbyYEB0079_AuhpvwbIkAdc8ySzA?e=HqdtJP', '15 SECRETARÍA DE AGUA POTABLE, DRENAJE Y SANEAMIENTO', 'JHRL-12@.xlsx', '2020-02-17 15:44:26'),
(70, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ef_qAc4djNFAo6GQeD8nuUMB23GQiJxSDNRrORatWvMx-Q?e=08YmZ3', '15.1 Dirección Comercial', 'JEFA.xT2.xlsx', '2020-02-17 15:46:04'),
(71, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Edv5lFTbMsNNsFDzIBhw548BdFGaNX_DxgpxL5zVOd5qgA?e=jgXAnl', '15.2 Dirección Operativa', 'RMMO/5x@', '2020-02-17 15:46:57'),
(72, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ETelsDIZwwRMuP5JNEgtFRcBUkMmQdIVLhD9vZbz4uSqwA?e=sEmWiS', '15.3 Dirección de Cultura y Cuidado del Agua', 'GGES@7.Q.xlsx', '2020-02-17 15:47:55'),
(73, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EQirvaielVRAoGos3qBN3JgBStYZw0RPs9J5qjZ43kZHrA?e=VIWGLZ', '15.4 Dirección de Programas y Proyectos', 'ALES.Pt2.xlsx', '2020-02-17 15:48:46'),
(74, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ES1S0flbFdZDhBZhSRVCCJ8BWClkqTCQ6NslXV8XG0HR-g?e=IMch2B', '16 SECRETARIA DE SEGURIDAD PÚBLICA Y TRÁNSITO', 'OHMG-5/x.xlsx', '2020-02-17 15:49:31'),
(75, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EQ5CvfFozXBMn3JMpP3bzeYBPMx22S-H9XNYKTbP_VLa6A?e=0eV1RG', '8.1.9 Trabajo Social', 'LSCO/x12.xlsx', '2020-02-18 14:32:22'),
(76, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EcOEzhsShgFLlGrRR2iy6zsBcDl-bOogaPbJWnCGgrbRnA?e=WaR5P0', '4.7 Dirección de Servicios Vehiculares', 'CAVI-1xV.xlsx', '2020-02-19 23:36:13'),
(77, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ESRvtQp3Rz9BrCB50J9fTDYBmzPVxei_MZty4qEkzhGb5Q?e=kMfeex', '4.5 Dirección de Adjudicaciones', 'MRAR@2x.xlsx', '2020-02-19 23:39:25'),
(78, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ebfwe9_7YTxOisolivRXNHABd4B8IfWFymQyOQsOuMxMhQ?e=ukiIhA', '4.4 Dirección de Ejecuciones', 'MMPS/1x3.xlsx', '2020-02-20 10:49:13'),
(79, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/ETXX9QuYD95Jlv3EBKZDbs8BUH94dcPXjdBlc17DqBykqA?e=m9d2ZS', '6 SECRETARIA DE GOBERNACIÓN Y ASUNTOS JURÍDICOS', 'SMTE_951.xlsx', '2020-02-21 14:51:56'),
(80, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EWu-Dh9D2FFIqAwIju5ABj4BfYlJrqaQaVlqrMFpajgPxg?e=Q17dEn', '1.5 Dirección de Comunicación Social', 'CBSA-2xT.xlsx', '2020-02-22 11:49:21'),
(81, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVWjvvJSkQdEsgrALjF9V9kBP8nRRrDnslZI8DdbiArCiw?e=jHAKaj', '4.2 Dirección de Contabilidad', 'BCLU/12a.xlsx', '2020-02-22 11:52:50'),
(82, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EVJK8YerCMpAkhI_IvAfEUcBSz8L5itZaLKGB4aNX-arYw?e=0E5Tb0', '6.2 Dirección de Protección Civil', 'OFPT@12a.xlsx', '2020-02-22 11:55:41'),
(83, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EUyAs1t1kq1CiiC6LR_TUaoBF0r6UV18UzYigM9gK8JrlA?e=rDXHNN', '2 SINDICATURA MUNICIPAL', 'JXCO@12x.xlsx', '2020-02-24 20:06:27'),
(84, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/Ec-nEkD-IU9DhAxBQNcGVsIBBeYlhguakGTg12DP_d6YNg?e=iFcwlJ', '4 TESORERÍA MUNICIPAL', 'PNCZ@5xx.xlsx', '2020-02-26 16:45:24'),
(85, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EUB-4Vnh2qhAgO_GehJHBwgBF4_GJyqM3xunpYKsT8iKMQ?e=r5fFMZ', '1.4 Coordinación de  Transparencia', 'MLFM@1xZ.xlsx', '2020-02-28 12:28:29'),
(86, 'https://sanandrescholula-my.sharepoint.com/:x:/g/personal/soporteit_sach_gob_mx/EUPN04TdU_RIgDE_KZmRtdABS9HSGb-yU42VXletXbx94A?e=HZ5lf0', '12.3 Dirección de Residuos Sólidos Urbanos', 'JPVR_100.xlsx', '2020-03-04 12:11:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(4) NOT NULL,
  `categorias` varchar(14) DEFAULT NULL,
  `formatos` varchar(14) DEFAULT NULL,
  `coin` varchar(14) DEFAULT NULL,
  `reportes` varchar(14) DEFAULT NULL,
  `enviar` varchar(14) DEFAULT NULL,
  `recibidos` varchar(14) DEFAULT NULL,
  `botones` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `categorias`, `formatos`, `coin`, `reportes`, `enviar`, `recibidos`, `botones`) VALUES
(1, 'Habilitado', 'Habilitado', 'Habilitado', 'Habilitado', 'Habilitado', 'Habilitado', 'enabled');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `contenido`, `fecha`) VALUES
(1, 'Bienvenidos   ( ͡°( ͡° ͜ʖ ͡°( ͡• ͜ʖ͡• ) ͡° ͜ʖ ͡°) ͡°)      |    plataforma deshabilitada   |  formato semana 20', '2020-05-20 00:06:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permision`
--

CREATE TABLE `permision` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `file_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `remitente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `usuario` varchar(100) NOT NULL,
  `ID_Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`usuario`, `ID_Categoria`) VALUES
('GELASIA FACUNDA ELIAS AMAXALT', 5),
('JORGE ALBERTO GARZA RODRIGUEZ', 3),
('JUANA COYOTL CHIQUITO', 2),
('MARIA LETICIA FLORES MERINO', 4),
('PRESIDENCIA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_coin`
--

CREATE TABLE `permisos_coin` (
  `usuario` varchar(100) NOT NULL,
  `id_coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos_coin`
--

INSERT INTO `permisos_coin` (`usuario`, `id_coin`) VALUES
('ARTURO RAMOS VELAZQUEZ', 5),
('JORGE ALBERTO GARZA RODRIGUEZ', 1),
('JOSÉ LUIS GREGORIO ROMERO', 2),
('JOSUE XICALE COYOPOL', 4),
('MARIELA TOLAMA LÓPEZ', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_formatos`
--

CREATE TABLE `permisos_formatos` (
  `usuario` varchar(100) NOT NULL,
  `id_formato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos_formatos`
--

INSERT INTO `permisos_formatos` (`usuario`, `id_formato`) VALUES
('ALEJANDRA ALVAREZ OLVERA', 40),
('ALEJANDRO LOPEZ ESPINOZA', 73),
('ANA MONSERRAT SANCHEZ VILLA', 26),
('ANDRÉS VICENS MÁRQUEZ', 65),
('ÁNGEL MARÍN MORO', 66),
('ARIADNA MARINA FLORES ROMERO', 64),
('ARTURO RAMOS VELAZQUEZ', 48),
('AUGUSTO HERNANDEZ HERNANDEZ', 63),
('BEATRIZ ALDONZA COCA MOZO', 19),
('BERNABE CUEVAS LUNA', 81),
('CARLOS BARROETA SANCHEZ', 80),
('CESAR ALONSO VICENS', 76),
('CHRISTIAN ACO CUATZO', 33),
('DULCE MARIA AMADA TECPANECATL TECUATL', 24),
('DULCE MARIA BARRALES RAMIREZ', 41),
('DULCE MARIA DEL CARMEN GREGORIO TECHACHAL', 16),
('EDGAR ALEJANDRO GOMEZ RIOS', 28),
('EDGAR HERNANDEZ HERNANDEZ', 27),
('EDGARD TECUANHUEY CARRANCO', 14),
('EDITH HERNANDEZ TIRADO', 36),
('ELODIA MÁRQUEZ CABRERA', 62),
('ENRIQUE GOMEZ XICALE', 59),
('ETHEL YADHIRA MORALES MORALES', 35),
('FATIMA SOTO TECUATL', 42),
('FERNANDO GREGORIO SANCHEZ', 51),
('GELASIA FACUNDA ELIAS AMAXALT', 34),
('GENARO GUERRERO ESPINOSA', 72),
('GEORGINA TOCHIMANI TOCHIMANI', 46),
('GUADALUPE LOZADA VIVALDO', 5),
('GUSTAVO ITZMOYOTL TECUATL', 37),
('GUSTAVO LUNA PERALTA', 52),
('HERMELINDA XINTO COYOTL', 31),
('HERNÁN FELIPE REYES HERNANDEZ', 53),
('HUGO MARIN RUIZ', 4),
('JAVIER ENRIQUE GARCÍA DIAZ', 21),
('JESUS TORIBIO PAJARO', 68),
('JOAQUIN ALONSO VICENS', 56),
('JORGE ALBERTO GARZA RODRIGUEZ', 1),
('JOSE ALVARO SALOMON FUENTES MORALES', 17),
('JOSE HUMBERTO RAMIREZ LEYVA', 69),
('JOSÉ LUIS GREGORIO ROMERO', 15),
('JOSÉ MANUEL GOTT BRAVO', 13),
('JOSE PABLO VICENS RAMIREz', 86),
('JOSE RUPERTO ALEJANDRO COYOPOL', 58),
('JOSUE XICALE COYOPOL', 83),
('JUAN MANUEL TOXCOYOA MIXCOATL', 7),
('JUAN PABLO CASTELAN SARMIENTO', 25),
('JUANA COYOTL CHIQUITO', 39),
('JUVENAL OSORIO ACA', 6),
('KARLA OLVERA BUENRROSTRO', 8),
('LAURA TLAXCALTECA ORTEGA', 12),
('LEONARDA SANCHEZ COAT', 75),
('LEONARDO IZCOATL OCELOTL', 29),
('LETICIA GUZMÁN PAREDES', 20),
('LUCIA AZUCENA HERNANDEZ JUAREZ', 32),
('LUCIA BELLO GOMEZ', 3),
('LUIS ERNESTO FLORES ANGULO', 70),
('MARIA DEL ROCIO ALATRISTE RUIZ', 77),
('MARÍA ELENA GARCÍA', 61),
('MARIA LETICIA FLORES MERINO', 85),
('MARIA MERCED PEREZ SANCHEZ', 78),
('MARIELA TOLAMA LÓPEZ', 10),
('MARTHA ELENA SOLIS JIMENEZ', 11),
('MAURICIO PARDO RUIZ', 45),
('MOISÉS COYOTL CUAYA', 60),
('NATANAEL MARTINEZ MARQUEZ', 55),
('NORMA ANGELICA TOLAMA TECPANECATL', 38),
('OMAR FELIX PEREZ TORRES', 82),
('OSCAR HUGO MORALES GONZÁLEZ', 74),
('OSCAR MANUEL PAJARO COYOTL', 49),
('PEDRO NEFTALI CUATETL ZAMORA', 84),
('PRESIDENCIA', 1),
('PRESIDENCIA', 2),
('PRESIDENCIA', 3),
('PRESIDENCIA', 4),
('PRESIDENCIA', 5),
('PRESIDENCIA', 6),
('PRESIDENCIA', 7),
('PRESIDENCIA', 8),
('PRESIDENCIA', 9),
('PRESIDENCIA', 10),
('PRESIDENCIA', 11),
('PRESIDENCIA', 12),
('PRESIDENCIA', 13),
('PRESIDENCIA', 14),
('PRESIDENCIA', 15),
('PRESIDENCIA', 16),
('PRESIDENCIA', 17),
('PRESIDENCIA', 18),
('PRESIDENCIA', 19),
('PRESIDENCIA', 20),
('PRESIDENCIA', 21),
('PRESIDENCIA', 22),
('PRESIDENCIA', 23),
('PRESIDENCIA', 24),
('PRESIDENCIA', 25),
('PRESIDENCIA', 26),
('PRESIDENCIA', 27),
('PRESIDENCIA', 28),
('PRESIDENCIA', 29),
('PRESIDENCIA', 30),
('PRESIDENCIA', 31),
('PRESIDENCIA', 32),
('PRESIDENCIA', 33),
('PRESIDENCIA', 34),
('PRESIDENCIA', 35),
('PRESIDENCIA', 36),
('PRESIDENCIA', 37),
('PRESIDENCIA', 38),
('PRESIDENCIA', 39),
('PRESIDENCIA', 40),
('PRESIDENCIA', 41),
('PRESIDENCIA', 42),
('PRESIDENCIA', 44),
('PRESIDENCIA', 45),
('PRESIDENCIA', 46),
('PRESIDENCIA', 47),
('PRESIDENCIA', 48),
('PRESIDENCIA', 49),
('PRESIDENCIA', 50),
('PRESIDENCIA', 51),
('PRESIDENCIA', 52),
('PRESIDENCIA', 53),
('PRESIDENCIA', 54),
('PRESIDENCIA', 55),
('PRESIDENCIA', 56),
('PRESIDENCIA', 57),
('PRESIDENCIA', 58),
('PRESIDENCIA', 59),
('PRESIDENCIA', 60),
('PRESIDENCIA', 61),
('PRESIDENCIA', 62),
('PRESIDENCIA', 63),
('PRESIDENCIA', 64),
('PRESIDENCIA', 65),
('PRESIDENCIA', 66),
('PRESIDENCIA', 67),
('PRESIDENCIA', 68),
('PRESIDENCIA', 69),
('PRESIDENCIA', 70),
('PRESIDENCIA', 71),
('PRESIDENCIA', 72),
('PRESIDENCIA', 73),
('PRESIDENCIA', 74),
('PRESIDENCIA', 75),
('PRESIDENCIA', 76),
('PRESIDENCIA', 77),
('PRESIDENCIA', 78),
('PRESIDENCIA', 79),
('PRESIDENCIA', 80),
('PRESIDENCIA', 81),
('PRESIDENCIA', 82),
('PRESIDENCIA', 83),
('PRESIDENCIA', 84),
('PRESIDENCIA', 85),
('PRESIDENCIA', 86),
('RAFAEL GONZALEZ SANTIAGO', 54),
('RAIMUNDA ARELLANO GUERRERO', 50),
('RAÚL TECUAL TOXQUI', 67),
('ROBERTO TOMAS VERAZA DIAZ', 18),
('ROCIO TECAXCO TIRZO', 2),
('RUTH MONDRAGON MONROY', 71),
('SERGIO MIRON TERRON', 79),
('VENUS MONTES CERVANTES', 22),
('VIRGINIA CUACUAS PÉREZ', 57),
('XOCHITL FLORES HERRERA', 44),
('YANELI MAURA MIXCOATL PABLO', 47),
('YAZMIN ELIA CORONA DOMINGUEZ', 30),
('YORCEL TELLEZ GARCIA', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(10) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `comentario` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `dependencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `dependencia` varchar(250) DEFAULT NULL,
  `date` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_secretaria` tinyint(1) NOT NULL DEFAULT '0',
  `modificado` datetime NOT NULL,
  `id_secretaria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `email`, `clave`, `admin`, `telefono`, `dependencia`, `date`, `image`, `is_active`, `is_secretaria`, `modificado`, `id_secretaria`) VALUES
('ALEJANDRA ALVAREZ OLVERA', 'alejandra.alvarez@sach.gob.mx', 'AAOt-@12', 0, '222 435 3250', '8.1.5 Coordinación de Desarrollo Comunitario', '2020-02-13 10:18:00', 'default.png', 1, 0, '2020-06-14 23:32:49', 8),
('ALEJANDRO LOPEZ ESPINOZA', 'alopezepue@gmail.com', 'ALES.Pt1', 0, '222 547 9061', '15.4 Dirección de Programas y Proyectos', '2020-02-14 12:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 15),
('ANA MONSERRAT SANCHEZ VILLA', 'segobsacho@gmail.com', 'AMSV-xP1', 0, '222 759 1330', '6.4 Dirección Jurídica', '2020-02-14 09:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 6),
('ANDRÉS VICENS MÁRQUEZ', 'pyct.1976@gmail.com', 'AVMA_d5@', 0, NULL, '14 SECRETARÍA DE OBRAS PÚBLICAS', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 14),
('ÁNGEL MARÍN MORO', 'marinmoroang@gmail.com', 'AMMO18&H', 0, NULL, '14.1 Dirección de Proyectos', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 14),
('ARIADNA MARINA FLORES ROMERO', 'am.floresromero@outlook.com', 'AMFR/dPa', 0, '22 23 59 60 09', '13.4 Dirección Jurídica', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 13),
('ARTURO RAMOS VELAZQUEZ', 'arturo.ramos@sach.gob.mx', 'ARVEkC-W', 0, '222 714 0617', '10 SECRETARÍA DE FOMENTO AGROPECUARIO', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 10),
('AUGUSTO HERNANDEZ HERNANDEZ', 'augustohh2@gmail.com', 'AHHE_5Ji', 0, '222 119 1913 Ext. 143', '13.3 Dirección de Sustentabilidad Urbana', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 13),
('BEATRIZ ALDONZA COCA MOZO', 'beatriz.coca@sach.gob.mx', 'BACMma$e', 0, '222 322 3453', '5.3 Dirección de Investigación', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('BERNABE CUEVAS LUNA', 'bernabe.cuevas@sach.gob.mx', 'BCLU/12a', 0, '222 133 2753', '4.2 Dirección de Contabilidad', '2020-02-22 11:22:11', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('CARLOS BARROETA SANCHEZ', 'barroetacarlos1@gmail.com', 'CBSA-2xT', 0, '222 212 2980', '1.5 Dirección de Comunicación Social', '2020-02-22 11:20:23', 'default.png', 1, 0, '0000-00-00 00:00:00', 1),
('CESAR ALONSO VICENS', 'cesarvicens007@hotmail.com', 'CAVI-1xV', 0, '222 895 7092', '4.7 Dirección de Servicios Vehiculares', '2020-02-19 23:40:33', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('CHRISTIAN ACO CUATZO', 'christian.aco@sach.gob.mx', 'CAC/Sg-W', 0, '551 951 6002', '7.5 Dirección de Migración', '2020-02-13 10:18:00', 'default.png', 1, 0, '2020-06-12 02:23:42', 7),
('DULCE MARIA AMADA TECPANECATL TECUATL', 'fernando.cuatetl@sach.gob.mx', 'DMATT@2x', 0, '222 322 7171', '6.1 Dirección de Giros Comerciales', '2020-02-14 10:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 6),
('DULCE MARIA BARRALES RAMIREZ', 'dulce.barrales@sach.gob.mx', 'DMBRn-10', 0, '222 541 8895', '8.1.6 Coordinación Jurídica', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('DULCE MARIA DEL CARMEN GREGORIO TECHACHAL', 'dulce.gregorio@sach.gob.mx', 'DMDGT@_p', 0, '222 194 3518', '5 CONTRALORIA MUNICIPAL', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 5),
('EDGAR ALEJANDRO GOMEZ RIOS', 'coordinacionbienestar1821@gmail.com', 'EAGR@123', 0, '222 351 3604', '7.0 Coordinación de Casa Jóvenes en Progreso', '2020-04-05 10:18:00', 'default.png', 1, 0, '2020-06-12 02:22:59', 7),
('EDGAR HERNANDEZ HERNANDEZ', 'sec.bienestar.sach@gmail.com', 'EDHH@100', 0, '222 184 7168', '7 SECRETARÍA DE BIENESTAR SOCIAL', '2020-04-13 10:18:00', 'default.png', 1, 1, '2020-06-12 02:23:23', 7),
('EDGARD TECUANHUEY CARRANCO', 'carrancoedgard@hotmail.com', 'ETCqUm$2', 0, '222 450 9983', '4.8 Dirección de Recursos Materiales', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('EDITH HERNANDEZ TIRADO', 'lourdes.vazquez@sach.gob.mx', 'MLCV/123', 0, '222 351 7460', '8.1.1 Coordinación de Salud', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('ELODIA MÁRQUEZ CABRERA', 'arqelomarquez@gmail.com', 'EMCA/Af6', 0, '222 217 4854', '13.2 Dirección de Innovación y Proyectos', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 13),
('ENRIQUE GOMEZ XICALE', 'enrique_gomezx@hotmail.com', 'EGX1_tZx', 0, '222 698 6725', '12.2 Dirección de Servicios Generales', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 12),
('ETHEL YADHIRA MORALES MORALES', 'ethel.morales@sach.gob.mx', 'EYMM7/sa', 0, '553 016 3622', '8.1 Coordinación General', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('FATIMA SOTO TECUATL', 'sindato@sach.gob.mx', 'FSTE-100', 0, '222 830 7357', '8.1.7 Coordinación de Adulto Mayor', '2020-02-18 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('FERNANDO GREGORIO SANCHEZ', 'arturo.ramos@sach.gob.mx', 'FGSA_4sY', 0, NULL, '10.3 Dirección de Proyectos Agropecuarios', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 10),
('GELASIA FACUNDA ELIAS AMAXALT', 'gelasia.elias@sach.gob.mx', 'GFEA-111', 0, '222 554 5473', '8 SISTEMA PARA EL DESARROLLO INTEGRAL DE LA FAMILIA', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 8),
('GENARO GUERRERO ESPINOSA', ' culturadelaguasach@gmail.com', 'GGES@7.Q', 0, '554 766 6542', '15.3 Dirección de Cultura y Cuidado del Agua', '2020-02-14 11:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 15),
('GEORGINA TOCHIMANI TOCHIMANI', 'georgina.tochimani@sach.gob.mx', 'GTToEj-f', 0, '222 175 5027', '9.2 Dirección de Patrimonio Cultural', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 9),
('GUADALUPE LOZADA VIVALDO', 'guadalupe.lozada@sach.gob.mx', 'GLVYa/Nw', 0, '222 336 4660 Ext. 110', '3 SECRETARÍA DEL AYUNTAMIENTO', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 3),
('GUSTAVO ITZMOYOTL TECUATL', 'gustavo.itzmoyotl@sach.gob.mx', 'GIT/Cm10', 0, '221 127 3543', '8.1.2 Coordinación de Rehabilitación', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('GUSTAVO LUNA PERALTA', 'arturo.ramos@sach.gob.mx', 'GLPE2Ks9', 0, NULL, '10.4 Dirección de Bienestar Animal', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 10),
('HERMELINDA XINTO COYOTL', 'programassociales18.21@gmail.com', 'HXC/Zh-f', 0, '222 457 1008', '7.3 Dirección de Programas Sociales', '2020-02-13 10:18:00', 'default.png', 1, 0, '2020-06-12 02:24:13', 7),
('HERNÁN FELIPE REYES HERNANDEZ', 'sefoe.sach@gmail.com', 'HFRH/5L&', 0, '222 402 2183', '11 SECRETARÍA DE FOMENTO ECONÓMICO', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 11),
('HUGO MARIN RUIZ', 'hugo.marin@sach.gob.mx', 'HMRU/x12', 0, '221 415 7848', '2.3 Dirección de Consejería Jurídica', '2020-02-17 11:00:00', 'default.png\r\n', 1, 0, '0000-00-00 00:00:00', 2),
('JAVIER ENRIQUE GARCÍA DIAZ', 'enrique.garcia@sach.gob.mx', 'JEGDxy-d', 0, '228 110 3445', '5.5 Dirección de Planeación y Seguimiento', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('JESUS TORIBIO PAJARO', 'pyct.1976@gmail.com', 'JTPA3Wxy', 0, NULL, '14.3 Dirección Júridica y Administrativa', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 14),
('JOAQUIN ALONSO VICENS', 'joaquin.alonso@sach.gob.mx', 'JAVI-5&7', 0, '222 661 1407', '12 SECRETARÍA DE SERVICIOS PÚBLICOS', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 12),
('JORGE ALBERTO GARZA RODRIGUEZ', 'jorge.garza@sach.gob.mx', 'JAGTJx-R', 0, '222 256 2296 Ext. 105', '1.6 Dirección de Innovación Tecnológica', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 1),
('JOSE ALVARO SALOMON FUENTES MORALES', 'alvaro.fuentes@sach.gob.mx', 'JASFFi-q@', 0, '222 510 7446', '5.1 Dirección de Auditoria', '2020-02-14 11:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('JOSE HUMBERTO RAMIREZ LEYVA', 'jose.ramirezla92@gmail.com', 'JHRL-12@', 0, '667 256 0392', '15 SECRETARÍA DE AGUA POTABLE, DRENAJE Y SANEAMIENTO', '2020-02-14 11:00:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 15),
('JOSÉ LUIS GREGORIO ROMERO', 'luis.gregorio@sach.gob.mx', 'JLGRkg@p', 0, '222 259 2412', '4.9 Departamento de Bienes Patrimoniales', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('JOSÉ MANUEL GOTT BRAVO ', 'manuel.gott@sach.gob.mx ', 'JMGBkc@w', 0, '221 524 1116', '4.6 Dirección de Capital Humano', '2020-04-24 17:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('JOSE PABLO VICENS RAMIREZ', 'vicensramirezpablo@gmail.com', 'JPVR_100', 0, '221 356 3893', '12.3 Dirección de Residuos Sólidos Urbanos', '2020-03-04 12:02:02', 'default.png', 1, 0, '0000-00-00 00:00:00', 12),
('JOSE RUPERTO ALEJANDRO COYOPOL', 's.serviciospublicos2018@gmail.com', 'JRAC@5Lx', 0, '222 490 9569', '12.1 Dirección de Servicios Públicos', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 12),
('JOSUE XICALE COYOPOL', 'sindicaturamunicipal18@hotmail.com', 'JXCO@12x', 0, '222 460 3110', '2 SINDICATURA MUNICIPAL', '2020-02-24 20:04:21', 'default.png', 1, 1, '0000-00-00 00:00:00', 2),
('JUAN MANUEL TOXCOYOA MIXCOATL ', 'jmtoxcoyoa@gmail.com', 'JMTMGr@', 0, '222 336 0703', '3.2 Dirección de Registro Civil', '2020-02-14 08:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 3),
('JUAN PABLO CASTELAN SARMIENTO', 'partciud.snandres@gmail.com', 'KMC&Vs@5', 0, '222 906 7977', '6.3 Dirección de Participación Ciudadana', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 6),
('JUANA COYOTL CHIQUITO', 'juana.coyotl@sach.gob.mx', 'JCC-Rd/z', 0, '221 110 7349', '8.1.4 Coordinación de Asistencia Alimentaria', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('JUVENAL OSORIO ACA', 'osoja@hotmail.com', 'JOAaQj$M', 0, '222 354 1284', '3.1 Dirección Juridíca', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 3),
('KARLA OLVERA BUENRROSTRO', 'kolverab@hotmail.com', 'KOBU-10z', 0, '811 553 1338', '3.3 Dirección de Juzgado Calificador', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 3),
('LAURA TLAXCALTECA ORTEGA', 'laura.tlaxcalteca@sach.gob.mx', 'LTOR1234', 0, '403 7000 ext. 130', '4.3 Dirección de Egresos', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('LEONARDA SANCHEZ COAT', 'leosan_66@hotmail.com', 'LSCO/x12', 0, '222 447 4583', '8.1.9 Trabajo Social', '2020-02-18 13:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('LEONARDO IZCOATL OCELOTL', 'leonardo.ocelotl@sach.gob.mx', 'LIO_Cc&Q', 0, '222 136 5926', '7.1 Dirección de Deporte y Juventud', '2020-02-13 10:18:00', 'default.png', 1, 0, '2020-06-12 02:25:32', 7),
('LETICIA GUZMÁN PAREDES', 'leticia.guzman@sach.gob.mx', 'LGP@mx&1', 0, '222 689 9911', '5.4 Dirección de Sustanciación', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('LUCIA AZUCENA HERNANDEZ JUAREZ', 'dirección.demujeres.sb@gmail.com', 'LAHJr-p1', 0, '221 119 7069', '7.4 Dirección de Mujeres', '2020-02-13 10:18:00', 'default.png', 1, 0, '2020-06-12 02:25:03', 7),
('LUCIA BELLO GOMEZ  ', 'sindicaturamunicipal18@hotmail.com ', 'LBGO1234', 0, '4037000 ext. 126', '2.2 Dirección de Mediación, Conciliación y Arbitraje', '2020-02-17 10:00:00', 'default.png\r\n', 1, 0, '0000-00-00 00:00:00', 2),
('LUIS ERNESTO FLORES ANGULO', 'luis.flores@sach.gob.mx', 'JEFA.xT2', 0, '667 129 4305', '15.1 Dirección Comercial', '2020-02-14 11:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 15),
('MARIA DEL ROCIO ALATRISTE RUIZ', 'adjudicaciones.coordinacion.sach@gmail.com', 'MRAR@2x', 0, '222 194 9730', '4.5 Dirección de Adjudicaciones', '2020-02-22 11:23:19', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('MARIA ELENA GARCIA', 'elena.garcia@sach.gob.mx', 'MEG9.gO7', 0, '222 215 9477', '13.1 Dirección de Adminstración Urbana', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 13),
('MARIA LETICIA FLORES MERINO', 'unidaddetransparencia@sach.gob.mx', 'MLFM@1xZ', 0, '403 7000 ext. 189', '1.4 Coordinación de  Transparencia', '2020-02-26 13:19:37', 'default.png', 1, 0, '0000-00-00 00:00:00', 1),
('MARIA MERCED PEREZ SANCHEZ', 'maria.perez@sach.gob.mx', 'MMPS/1x3', 0, '404 7000 ext. 194', '4.4 Dirección de Ejecuciones', '2020-02-19 23:27:25', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('MARIELA TOLAMA LÓPEZ', 'maryel_1990@hotmail.es', 'MTL1Pg@C', 0, '222 817 4082', '3.5 Coordinación de Archivo', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 3),
('MARTHA ELENA SOLIS JIMENEZ', 'marthae.solis@hotmail.com', 'MESJZw_i', 0, 'Ext. 305', '4.1 Dirección de Ingresos', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 4),
('MAURICIO PARDO RUIZ', 'mauricio.pardo@sach.gob.mx', 'MPRUDt-8', 0, '222 175 5027', '9.1 Dirección de Arte, Espacios Culturales y Festivales', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 9),
('MOISÉS COYOTL CUAYA', 'moy_holaarq@hotmail.com', 'MCCU65a/', 0, '222 324 5631', '13 SECRETARÍA DE DESARROLLO URBANO SUSTENTABLE', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 13),
('NATANAEL MARTINEZ MARQUEZ', 'sachturismo@gmail.com', 'NMMA-5tS', 0, '222 215 9386', '11.2 Dirección de Turismo', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 11),
('NORMA ANGELICA TOLAMA TECPANECATL', 'norma.tolama@sach.gob.mx', 'NATT-m&5', 0, '222 371 3277', '8.1.3 Coordinación de Psicología y CLIPAM', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 8),
('OMAR FELIX PEREZ TORRES', 'pcsanandrescholula@gmail.com', 'OFPT@12a', 0, '228 256 1504', '6.2 Dirección de Protección Civil', '2020-02-22 11:24:13', 'default.png', 1, 0, '0000-00-00 00:00:00', 6),
('OSCAR HUGO MORALES GONZÁLEZ', 'hugomorales.sacho@gmail.com', 'OHMG-5/x', 0, '467 4000 Ext. 1302', '16 SECRETARIA DE SEGURIDAD PÚBLICA Y TRÁNSITO', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 16),
('OSCAR MANUEL PAJARO COYOTL', 'arturo.ramos@sach.gob.mx', 'OMPCRs/7', 0, NULL, '10.1 Dirección de Asistencia Técnica Agropecuario', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 10),
('PEDRO NEFTALI CUATETL ZAMORA', 'pedro.cuatetl@sach.gob.mx', 'PNCZ@5xx', 0, '403 7000 EXT. 123', '4 TESORERÍA MUNICIPAL', '2020-02-26 15:12:33', 'default.png', 1, 1, '0000-00-00 00:00:00', 4),
('PRESIDENCIA', 'presidencia.sach@sach.gob.mx', 'presidenciaSc@E', 0, NULL, '1 PRESIDENCIA', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 1),
('RAFAEL GONZALEZ SANTIAGO', 'rafael.gonzalez@sach.gob.mx', 'AMSGM/4a', 0, '222 663 3782', '11.1 Dirección de Desarrollo y Proyectos Económicos', '2020-02-14 10:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 11),
('RAIMUNDA ARELLANO GUERRERO', 'arturo.ramos@sach.gob.mx', 'RAGU/Sd2', 0, NULL, '10.2 Dirección de Desarrollo de Mercado y Economía Social Solidaria', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 10),
('RAUL TECUAL TOXQUI', 'gaboramosxalte@outlook.com', 'RTTO@Jv5', 0, NULL, '14.2 Dirección de Obras', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 14),
('ROBERTO TOMAS VERAZA DIAZ', 'roberto.veraza@sach.gob.mx', 'RVDzTy$r', 0, '222 359 2099', '5.2 Dirección Jurídica', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('ROCIO TECAXCO TIRZO', 'gestoriajuridica2@gmail.com', 'RTTI/2@7', 0, '222 674 8882', '2.1 Unidad de Gestoría Jurídica Popular  ', '2020-02-17 18:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 2),
('RUTH MONDRAGON MONROY', 'doperativa.aguasanandres@outlook.com', 'RMMO/5x@', 0, '222 215 0678', '15.2 Dirección Operativa', '2020-02-14 11:00:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 15),
('SERGIO MIRON TERRON', 'sergio.miron@sach.gob.mx', 'SMTE_951', 0, 'sin datos', '6 SECRETARIA DE GOBERNACIÓN Y ASUNTOS JURÍDICOS', '2020-02-21 14:49:05', 'default.png', 1, 1, '0000-00-00 00:00:00', 6),
('superadministrador', '126w0334@itszongolica.edu.mx', '1t_4dm1n$', 1, '2211460750', 'todas', '2020-02-16 20:45:02', 'default.png', 1, 0, '0000-00-00 00:00:00', 0),
('vacante', 'vacante@sach.com.mx', 'vacacante', 0, '00', '5.7 Dirección de Calidad de Gestión Administrativa', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('VENUS MONTES CERVANTES', 'venus.montes@sach.gob.mx', 'VMC12345', 0, '222 617 1295', '5.6 Dirección de Control, Evaluación y Contraloría Social', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 5),
('VIRGINIA CUACUAS PÉREZ', 'cuacuas.v@gmail.com', 'VCPEsX&6', 0, '222 459 0906', '12.0 Coordinador Administrativo', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 12),
('XOCHITL FLORES HERRERA', 'xochitl.flores@sach.gob.mx', 'XFHE-@10', 0, '222 471 9783', '9 SECRETARÍA DE ARTE Y CULTURA', '2020-02-13 10:18:00', 'default.png', 1, 1, '0000-00-00 00:00:00', 9),
('YANELI MAURA MIXCOATL PABLO', 'yaneli.mixcoatl@sach.gob.mx', 'YMMPnX-p', 0, '222 585 7327', '9.3 Dirección de Gestión, Promoción y Fomento Cultural', '2020-02-13 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 9),
('YAZMIN ELIA CORONA DOMINGUEZ', 'educacion_sanandrescholula@hotmail.com', 'YEDC-/no', 0, '222 813 1199 Ext. 102', '7.2 Dirección de Educación', '2020-02-13 10:18:00', 'default.png', 1, 0, '2020-06-12 02:24:30', 7),
('YORCEL TELLEZ GARCIA', 'yotega_106@hotmail.com', 'YTGA_10@', 0, '221 158 1548', '3.4 Dirección de Juzgado Municipal', '2020-03-23 10:18:00', 'default.png', 1, 0, '0000-00-00 00:00:00', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`id_coin`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  ADD PRIMARY KEY (`id_destinatario`);

--
-- Indices de la tabla `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_id` (`folder_id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `formatos`
--
ALTER TABLE `formatos`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permision`
--
ALTER TABLE `permision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`usuario`,`ID_Categoria`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `permisos_coin`
--
ALTER TABLE `permisos_coin`
  ADD PRIMARY KEY (`usuario`,`id_coin`),
  ADD KEY `id_coin` (`id_coin`);

--
-- Indices de la tabla `permisos_formatos`
--
ALTER TABLE `permisos_formatos`
  ADD PRIMARY KEY (`usuario`,`id_formato`),
  ADD KEY `id_formato` (`id_formato`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `coin`
--
ALTER TABLE `coin`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `id_destinatario` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formatos`
--
ALTER TABLE `formatos`
  MODIFY `id_formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permision`
--
ALTER TABLE `permision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);

--
-- Filtros para la tabla `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `file_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);

--
-- Filtros para la tabla `permision`
--
ALTER TABLE `permision`
  ADD CONSTRAINT `permision_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `permision_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`ID_Categoria`) REFERENCES `categorias` (`ID_Categoria`);

--
-- Filtros para la tabla `permisos_coin`
--
ALTER TABLE `permisos_coin`
  ADD CONSTRAINT `permisos_coin_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`),
  ADD CONSTRAINT `permisos_coin_ibfk_2` FOREIGN KEY (`id_coin`) REFERENCES `coin` (`id_coin`);

--
-- Filtros para la tabla `permisos_formatos`
--
ALTER TABLE `permisos_formatos`
  ADD CONSTRAINT `permisos_formatos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`),
  ADD CONSTRAINT `permisos_formatos_ibfk_2` FOREIGN KEY (`id_formato`) REFERENCES `formatos` (`id_formato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
