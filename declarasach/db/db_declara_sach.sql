CREATE DATABASE IF NOT EXISTS 'db_declara_sach';
use 'db_declara_sach';

CREATE TABLE usuarios(
   id_usuario INT(11) UNSIGNED NOT NULL,
   nombres VARCHAR(50) NOT NULL,
   p_apellido VARCHAR(35) NOT NULL,
   s_apellido VARCHAR(35) NOT NULL,
   curp CHAR(18) NOT NULL,
   rfc CHAR(10) NOT NULL,
   homoclave CHAR(3) NOT NULL,
   pass VARCHAR(200) NOT NULL,
   email_inst VARCHAR(50) NULL,
   email_pers VARCHAR(50) NOT NULL,
   estatus CHAR(1) NOT NULL DEFAULT 1,
   fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   fecha_ultimo_acceso DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   ip_ultimo_acceso BINARY(4) NOT NULL,
   admin tinyint(1) NOT NULL DEFAULT 0,
   usuario VARCHAR(40) NOT NULL,
   tipo_declaracion CHAR(1) NOT NULL,
   firma VARCHAR(200)NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE generales(
   id_general INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   estado_civil tinyint(1)NOT NULL,
   regimen_patrimonial tinyint(1)NOT NULL,
   pais_nacimiento VARCHAR(30) NOT NULL,
   nacionalidad VARCHAR(15) NOT NULL,
   entidad_nacimiento tinyint(1) NOT NULL,
   celular VARCHAR(10) NULL,
   residencia tinyint(1) NOT NULL,
   domicilio VARCHAR(50) NOT NULL,
   localidad_colonia VARCHAR(50) NOT NULL,
   entidad_federativa VARCHAR(50) NOT NULL,
   telefono_particular VARCHAR(10) NOT NULL,
   codigo_postal CHAR(5) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS pais;
CREATE TABLE `pais` (
  `id_pais` int(3) NOT NULL,
  `pais` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `nacionalidad`;
CREATE TABLE `nacionalidad` (
  `id_nacionalidad` int(4) NOT NULL,
  `nacionalidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`id_nacionalidad`),
  ADD KEY `id_pais1` (`id_pais1`);

ALTER TABLE `nacionalidad`
  ADD CONSTRAINT `nacionalidad_ibfk_1` FOREIGN KEY (`id_pais1`) REFERENCES `pais` (`id_pais`) ON UPDATE CASCADE;