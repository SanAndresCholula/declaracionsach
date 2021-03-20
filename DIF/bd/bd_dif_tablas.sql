-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 20:59:53
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_dif`
--
CREATE DATABASE IF NOT EXISTS `bd_dif` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `bd_dif`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `verApoyos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `verApoyos` ()  SELECT
b.a_paterno, b.a_materno, b.nombres,
e.id, e.title, e.horastart, e.horaend, e.start, e.end, e.entrega, e.date,
u.username,
p.enlace,
tp.nom_tp,
np.nom_p,
s.secretaria
from beneficiario b
INNER JOIN events e on b.id_benef = e.id_benef1
INNER JOIN users u on e.id_user1 = u.id_user
INNER JOIN programas p on e.id_prog1 = p.id_prog
INNER JOIN tipo_programa tp on p.id_tp1 = tp.id_tp
INNER JOIN nom_programa np on p.id_np1 = np.id_np
INNER JOIN secretaria s on p.id_secre1 = s.id_secre
ORDER BY id ASC$$

DROP PROCEDURE IF EXISTS `verBeneficiarios`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `verBeneficiarios` ()  SELECT
b.id_benef, b.a_paterno, b.a_materno, b.nombres,
g.telefono,g.ine,g.curp, g.nacimiento, g.edad, g.otrodoc,
s.genero,
u.username,
ns.seccion,
l.localidad,
CONCAT( ca.calle,' Ext ', ca.exte,' Int ',ca.inte) AS domicilio,
co.colonia,
com.observaciones,
f.f_alta,
cp.cp
from beneficiario b
INNER JOIN generales g on b.id_gene1 = g.id_gene
INNER JOIN sexo s on g.id_sex = s.id_sexo
INNER JOIN capt c on g.id_capt1 = c.id_capt
INNER JOIN users u on c.id_user1 = u.id_user
INNER JOIN secdom sd on b.id_secdom1 = sd.id_secdom
INNER JOIN n_seccion ns on sd.id_nsec1 = ns.id_nsec
INNER JOIN localidad l on sd.id_loc1 = l.id_loc
INNER JOIN direccion d on sd.id_direc1 = d.id_direc
INNER JOIN calle ca on d.id_calle1 = ca.id_calle
INNER JOIN colonia co on d.id_col1 = co.id_col
INNER JOIN cp_combo cp on d.id_cp1 = cp.id_cpcombo
INNER JOIN comentarios com on b.id_com1 = com.id_com
INNER JOIN fechas f on b.id_fechas1 = f.id_fechas$$

DROP PROCEDURE IF EXISTS `verSecciones`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `verSecciones` ()  BEGIN
SELECT * FROM n_seccion;
END$$

DROP PROCEDURE IF EXISTS `verUsuarios`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `verUsuarios` ()  SELECT  id_user, email, username, password, phone, date, admin, fecha_modificado, creadoX, modificadoX FROM users WHERE id_user <> 1 ORDER BY id_user desc$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barcode`
--

DROP TABLE IF EXISTS `barcode`;
CREATE TABLE `barcode` (
  `id_barcode` int(8) NOT NULL,
  `barcode` varchar(16) CHARACTER SET utf8 DEFAULT 'Sin Barcode',
  `f_generado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

DROP TABLE IF EXISTS `beneficiario`;
CREATE TABLE `beneficiario` (
  `id_benef` int(6) NOT NULL,
  `a_paterno` varchar(30) DEFAULT NULL,
  `a_materno` varchar(30) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `imgbenef` varchar(100) NOT NULL,
  `id_gene1` int(1) NOT NULL,
  `id_secdom1` int(8) NOT NULL,
  `id_com1` int(6) NOT NULL,
  `id_fechas1` int(6) NOT NULL,
  `barcode1` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calle`
--

DROP TABLE IF EXISTS `calle`;
CREATE TABLE `calle` (
  `id_calle` int(11) NOT NULL,
  `calle` varchar(50) NOT NULL COMMENT 'nombre calle',
  `inte` varchar(15) DEFAULT 'S/N' COMMENT 'Num. Interior',
  `exte` varchar(15) DEFAULT 'S/N' COMMENT 'Num. Exterior'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capt`
--

DROP TABLE IF EXISTS `capt`;
CREATE TABLE `capt` (
  `id_capt` int(3) NOT NULL,
  `id_user1` int(3) NOT NULL COMMENT 'Quien agrega'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonia`
--

DROP TABLE IF EXISTS `colonia`;
CREATE TABLE `colonia` (
  `id_col` int(4) NOT NULL,
  `colonia` varchar(70) NOT NULL,
  `id_nsec2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `id_colors` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `colors` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_com` int(6) NOT NULL,
  `observaciones` text DEFAULT NULL COMMENT 'observaciones',
  `img_ine` varchar(100) NOT NULL,
  `img_curp` varchar(100) NOT NULL,
  `img_otro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp_combo`
--

DROP TABLE IF EXISTS `cp_combo`;
CREATE TABLE `cp_combo` (
  `id_cpcombo` int(4) NOT NULL,
  `cp` char(5) NOT NULL,
  `id_col2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_postal`
--

DROP TABLE IF EXISTS `c_postal`;
CREATE TABLE `c_postal` (
  `id_cp` int(4) NOT NULL,
  `cp` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE `direccion` (
  `id_direc` int(11) NOT NULL,
  `id_calle1` int(11) NOT NULL COMMENT 'Numero de seccion',
  `id_col1` int(4) NOT NULL COMMENT 'Numero de colonia',
  `id_cp1` int(4) NOT NULL COMMENT 'Numero código postal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) NOT NULL,
  `horastart` varchar(5) NOT NULL,
  `horaend` varchar(5) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `id_benef1` int(6) NOT NULL,
  `id_user1` int(2) NOT NULL,
  `id_prog1` int(2) NOT NULL,
  `entrega` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

DROP TABLE IF EXISTS `fechas`;
CREATE TABLE `fechas` (
  `id_fechas` int(6) NOT NULL,
  `f_alta` datetime DEFAULT NULL,
  `f_modificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generales`
--

DROP TABLE IF EXISTS `generales`;
CREATE TABLE `generales` (
  `id_gene` int(11) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `ine` varchar(18) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `otrodoc` varchar(60) DEFAULT NULL,
  `nacimiento` varchar(10) DEFAULT NULL,
  `edad` int(2) NOT NULL,
  `id_sex` int(11) DEFAULT NULL COMMENT 'genero',
  `id_capt1` int(3) DEFAULT NULL COMMENT 'quien captura'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

DROP TABLE IF EXISTS `localidad`;
CREATE TABLE `localidad` (
  `id_loc` int(4) NOT NULL,
  `localidad` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos` (
  `id_modulo` int(2) NOT NULL,
  `crud_usuarios` tinyint(1) NOT NULL,
  `db_benef` tinyint(1) NOT NULL,
  `capt_benef` tinyint(1) NOT NULL,
  `db_apoyos` tinyint(1) NOT NULL,
  `programas` tinyint(1) NOT NULL,
  `catalogo_seccional` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nom_programa`
--

DROP TABLE IF EXISTS `nom_programa`;
CREATE TABLE `nom_programa` (
  `id_np` int(11) NOT NULL,
  `nom_p` varchar(50) NOT NULL COMMENT 'Nombre del programa',
  `date` datetime NOT NULL COMMENT 'Fecha alta',
  `date_mod` datetime DEFAULT NULL COMMENT 'Fecha modificacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `n_seccion`
--

DROP TABLE IF EXISTS `n_seccion`;
CREATE TABLE `n_seccion` (
  `id_nsec` int(3) NOT NULL,
  `seccion` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_acciones`
--

DROP TABLE IF EXISTS `permisos_acciones`;
CREATE TABLE `permisos_acciones` (
  `id_per_acc` int(6) NOT NULL,
  `p_usuarios_a` tinyint(1) NOT NULL,
  `p_usuarios_e` tinyint(1) NOT NULL,
  `p_usuarios_d` tinyint(1) NOT NULL,
  `p_bd_benef_a` tinyint(1) NOT NULL,
  `p_bd_benef_e` tinyint(1) NOT NULL,
  `p_bd_benef_d` tinyint(1) NOT NULL,
  `p_bd_apoyos_a` tinyint(1) NOT NULL,
  `p_bd_apoyos_e` tinyint(1) NOT NULL,
  `p_bd_apoyos_d` tinyint(1) NOT NULL,
  `p_programas_a` tinyint(1) NOT NULL,
  `p_programas_e` tinyint(1) NOT NULL,
  `p_programas_d` tinyint(1) NOT NULL,
  `p_cat_seccional_a` tinyint(1) NOT NULL,
  `p_cat_seccional_e` tinyint(1) NOT NULL,
  `p_cat_seccional_d` tinyint(1) NOT NULL,
  `p_des_db_users` tinyint(1) NOT NULL,
  `p_des_db_benef` tinyint(1) NOT NULL,
  `p_des_db_apoyos` tinyint(1) NOT NULL,
  `p_des_db_programas` int(11) NOT NULL,
  `p_des_db_cat_sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_user_modulo`
--

DROP TABLE IF EXISTS `permiso_user_modulo`;
CREATE TABLE `permiso_user_modulo` (
  `id_permiso_user_modulo` int(2) NOT NULL,
  `id_modulo1` int(2) NOT NULL,
  `id_per_acc1` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

DROP TABLE IF EXISTS `programas`;
CREATE TABLE `programas` (
  `id_prog` int(2) NOT NULL,
  `id_tp1` int(2) DEFAULT NULL COMMENT 'Tipo de programa',
  `id_np1` int(2) DEFAULT NULL COMMENT 'Nombre programa',
  `id_secre1` int(2) NOT NULL,
  `enlace` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secdom`
--

DROP TABLE IF EXISTS `secdom`;
CREATE TABLE `secdom` (
  `id_secdom` int(8) NOT NULL,
  `id_nsec1` int(3) NOT NULL COMMENT 'Num de sección',
  `id_direc1` int(11) DEFAULT NULL COMMENT 'id tabla dirección',
  `id_loc1` int(4) DEFAULT NULL COMMENT 'Localidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

DROP TABLE IF EXISTS `secretaria`;
CREATE TABLE `secretaria` (
  `id_secre` int(2) NOT NULL,
  `secretaria` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

DROP TABLE IF EXISTS `sexo`;
CREATE TABLE `sexo` (
  `id_sexo` int(1) NOT NULL,
  `genero` varchar(9) CHARACTER SET utf8 DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_programa`
--

DROP TABLE IF EXISTS `tipo_programa`;
CREATE TABLE `tipo_programa` (
  `id_tp` int(11) NOT NULL,
  `nom_tp` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `date_mod` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(6) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `date` datetime NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `fecha_modificado` datetime DEFAULT NULL,
  `creadoX` varchar(50) CHARACTER SET utf8 NOT NULL,
  `modificadoX` varchar(150) CHARACTER SET utf8 NOT NULL,
  `id_permiso_user_modulo1` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id_barcode`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`id_benef`),
  ADD UNIQUE KEY `barcode1` (`barcode1`),
  ADD UNIQUE KEY `barcode1_2` (`barcode1`),
  ADD KEY `id_gene1` (`id_gene1`),
  ADD KEY `id_secdom1` (`id_secdom1`),
  ADD KEY `id_com1` (`id_com1`),
  ADD KEY `id_fechas1` (`id_fechas1`);

--
-- Indices de la tabla `calle`
--
ALTER TABLE `calle`
  ADD PRIMARY KEY (`id_calle`);

--
-- Indices de la tabla `capt`
--
ALTER TABLE `capt`
  ADD PRIMARY KEY (`id_capt`),
  ADD KEY `id_user1` (`id_user1`);

--
-- Indices de la tabla `colonia`
--
ALTER TABLE `colonia`
  ADD PRIMARY KEY (`id_col`),
  ADD KEY `id_nsec2` (`id_nsec2`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_colors`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_com`);

--
-- Indices de la tabla `cp_combo`
--
ALTER TABLE `cp_combo`
  ADD KEY `id_col2` (`id_col2`);

--
-- Indices de la tabla `c_postal`
--
ALTER TABLE `c_postal`
  ADD PRIMARY KEY (`id_cp`),
  ADD KEY `cp` (`cp`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direc`),
  ADD KEY `id_nsec1` (`id_calle1`),
  ADD KEY `id_cp1` (`id_cp1`),
  ADD KEY `id_col1` (`id_col1`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user1` (`id_user1`),
  ADD KEY `id_prog1` (`id_prog1`),
  ADD KEY `id_user1_2` (`id_user1`),
  ADD KEY `id_benef1` (`id_benef1`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id_fechas`);

--
-- Indices de la tabla `generales`
--
ALTER TABLE `generales`
  ADD PRIMARY KEY (`id_gene`),
  ADD KEY `id_sex` (`id_sex`),
  ADD KEY `id_capt1` (`id_capt1`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_loc`),
  ADD KEY `localidad` (`localidad`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `nom_programa`
--
ALTER TABLE `nom_programa`
  ADD PRIMARY KEY (`id_np`);

--
-- Indices de la tabla `n_seccion`
--
ALTER TABLE `n_seccion`
  ADD PRIMARY KEY (`id_nsec`);

--
-- Indices de la tabla `permisos_acciones`
--
ALTER TABLE `permisos_acciones`
  ADD PRIMARY KEY (`id_per_acc`);

--
-- Indices de la tabla `permiso_user_modulo`
--
ALTER TABLE `permiso_user_modulo`
  ADD PRIMARY KEY (`id_permiso_user_modulo`),
  ADD KEY `id_modulo1` (`id_modulo1`),
  ADD KEY `id_per_acc1` (`id_per_acc1`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id_prog`),
  ADD KEY `id_tp1` (`id_tp1`),
  ADD KEY `id_np1` (`id_np1`),
  ADD KEY `id_secre1` (`id_secre1`);

--
-- Indices de la tabla `secdom`
--
ALTER TABLE `secdom`
  ADD PRIMARY KEY (`id_secdom`),
  ADD KEY `id_nsec1` (`id_nsec1`),
  ADD KEY `id_loc1` (`id_loc1`),
  ADD KEY `id_direc1` (`id_direc1`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secre`),
  ADD KEY `secretaria` (`secretaria`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tipo_programa`
--
ALTER TABLE `tipo_programa`
  ADD PRIMARY KEY (`id_tp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_permiso_user_modulo1` (`id_permiso_user_modulo1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  MODIFY `id_benef` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calle`
--
ALTER TABLE `calle`
  MODIFY `id_calle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capt`
--
ALTER TABLE `capt`
  MODIFY `id_capt` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colonia`
--
ALTER TABLE `colonia`
  MODIFY `id_col` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id_colors` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_com` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `c_postal`
--
ALTER TABLE `c_postal`
  MODIFY `id_cp` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id_fechas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generales`
--
ALTER TABLE `generales`
  MODIFY `id_gene` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_loc` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nom_programa`
--
ALTER TABLE `nom_programa`
  MODIFY `id_np` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `n_seccion`
--
ALTER TABLE `n_seccion`
  MODIFY `id_nsec` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos_acciones`
--
ALTER TABLE `permisos_acciones`
  MODIFY `id_per_acc` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso_user_modulo`
--
ALTER TABLE `permiso_user_modulo`
  MODIFY `id_permiso_user_modulo` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id_prog` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secdom`
--
ALTER TABLE `secdom`
  MODIFY `id_secdom` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secre` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_programa`
--
ALTER TABLE `tipo_programa`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD CONSTRAINT `beneficiario_ibfk_1` FOREIGN KEY (`id_fechas1`) REFERENCES `fechas` (`id_fechas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `beneficiario_ibfk_3` FOREIGN KEY (`id_gene1`) REFERENCES `generales` (`id_gene`) ON UPDATE CASCADE,
  ADD CONSTRAINT `beneficiario_ibfk_4` FOREIGN KEY (`id_com1`) REFERENCES `comentarios` (`id_com`) ON UPDATE CASCADE,
  ADD CONSTRAINT `beneficiario_ibfk_5` FOREIGN KEY (`id_secdom1`) REFERENCES `secdom` (`id_secdom`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `capt`
--
ALTER TABLE `capt`
  ADD CONSTRAINT `capt_ibfk_1` FOREIGN KEY (`id_user1`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `colonia`
--
ALTER TABLE `colonia`
  ADD CONSTRAINT `colonia_ibfk_1` FOREIGN KEY (`id_nsec2`) REFERENCES `n_seccion` (`id_nsec`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cp_combo`
--
ALTER TABLE `cp_combo`
  ADD CONSTRAINT `cp_combo_ibfk_1` FOREIGN KEY (`id_col2`) REFERENCES `colonia` (`id_col`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_3` FOREIGN KEY (`id_col1`) REFERENCES `colonia` (`id_col`) ON UPDATE CASCADE,
  ADD CONSTRAINT `direccion_ibfk_4` FOREIGN KEY (`id_calle1`) REFERENCES `calle` (`id_calle`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_user1`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`id_prog1`) REFERENCES `programas` (`id_prog`) ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`id_benef1`) REFERENCES `beneficiario` (`id_benef`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `generales`
--
ALTER TABLE `generales`
  ADD CONSTRAINT `generales_ibfk_1` FOREIGN KEY (`id_sex`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `generales_ibfk_2` FOREIGN KEY (`id_capt1`) REFERENCES `capt` (`id_capt`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `permiso_user_modulo`
--
ALTER TABLE `permiso_user_modulo`
  ADD CONSTRAINT `permiso_user_modulo_ibfk_1` FOREIGN KEY (`id_modulo1`) REFERENCES `modulos` (`id_modulo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `permiso_user_modulo_ibfk_2` FOREIGN KEY (`id_per_acc1`) REFERENCES `permisos_acciones` (`id_per_acc`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_ibfk_1` FOREIGN KEY (`id_np1`) REFERENCES `nom_programa` (`id_np`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_ibfk_2` FOREIGN KEY (`id_tp1`) REFERENCES `tipo_programa` (`id_tp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_ibfk_3` FOREIGN KEY (`id_secre1`) REFERENCES `secretaria` (`id_secre`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `secdom`
--
ALTER TABLE `secdom`
  ADD CONSTRAINT `secdom_ibfk_1` FOREIGN KEY (`id_nsec1`) REFERENCES `n_seccion` (`id_nsec`) ON UPDATE CASCADE,
  ADD CONSTRAINT `secdom_ibfk_2` FOREIGN KEY (`id_loc1`) REFERENCES `localidad` (`id_loc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `secdom_ibfk_3` FOREIGN KEY (`id_direc1`) REFERENCES `direccion` (`id_direc`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
