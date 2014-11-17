-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `campoactivo`;
CREATE DATABASE `campoactivo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `campoactivo`;

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id` int(4) NOT NULL,
  `ciudad_nombre` varchar(60) NOT NULL,
  `cp` int(4) NOT NULL,
  `provincia_id` smallint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cp` (`cp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `Telefono` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `Correoelectronico` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `Cometario` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


DROP TABLE IF EXISTS `contenido`;
CREATE TABLE `contenido` (
  `id_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `texto` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
  `id_contenido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ubicacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `id_contenido` int(11) NOT NULL,
  `ruta` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`),
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


DROP TABLE IF EXISTS `maquinas`;
CREATE TABLE `maquinas` (
  `id_contenido` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'N',
  `modelo` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `maquinas_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id` smallint(2) NOT NULL,
  `provincia_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni_persona` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL,
  `telefono_fijo` int(11) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `esAdmin` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`id_persona`, `nombre`, `apellido`, `dni_persona`, `fecha_nacimiento`, `email`, `celular`, `telefono_fijo`, `direccion`, `password`, `fecha_registro`, `esAdmin`) VALUES
(1,	'Franco',	'Aller',	227417278,	'2001-07-22',	'franco.e.aller@gmail.com',	2147483647,	0,	'4 de Abril',	'fran',	'2020-07-22',	CONV('0', 2, 10) + 0),
(2,	'matias',	'apecena',	0,	'2014-11-12',	'matiasapecena@yahoo.com',	1,	1,	'Costa Rica 146 E 5',	'micaela79',	'2014-11-12',	CONV('1', 2, 10) + 0)
ON DUPLICATE KEY UPDATE `id_persona` = VALUES(`id_persona`), `nombre` = VALUES(`nombre`), `apellido` = VALUES(`apellido`), `dni_persona` = VALUES(`dni_persona`), `fecha_nacimiento` = VALUES(`fecha_nacimiento`), `email` = VALUES(`email`), `celular` = VALUES(`celular`), `telefono_fijo` = VALUES(`telefono_fijo`), `direccion` = VALUES(`direccion`), `password` = VALUES(`password`), `fecha_registro` = VALUES(`fecha_registro`), `esAdmin` = VALUES(`esAdmin`);

-- 2014-11-17 02:40:51
