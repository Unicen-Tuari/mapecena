-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `mapusuyai` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `mapusuyai`;

DROP TABLE IF EXISTS `cabana`;
CREATE TABLE `cabana` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `CAPACIDAD` int(11) DEFAULT NULL,
  `ID_CATEGORIA` int(11) NOT NULL DEFAULT '0',
  `DETALLE` text,
  PRIMARY KEY (`ID`,`ID_CATEGORIA`),
  KEY `FK_CABANA` (`ID_CATEGORIA`),
  CONSTRAINT `FK_CABANA` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categoria` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `cabana` (`ID`, `NOMBRE`, `CAPACIDAD`, `ID_CATEGORIA`, `DETALLE`) VALUES
(1,	'Cabaña de Madera',	4,	1,	'Una típica cabaña construida en madera, con detalles de confort. En la planta baja un dormitorio con cama sommier, TV, aire acondicionado, baño y toilette. Living comedor, cómodos sillones, sofá cama para dos personas, aire acondicionado, TV y cocina completa. Entre piso, dormitorio para dos personas, camas ( 1.75 x 0.80 ). Parrillas y cochera individual.'),
(2,	'Cabaña para 5 personas.',	5,	3,	'Dos dormitorios (uno con sommier de dos plazas y TV) Living con TV, caja de seguridad, cocina con generoso equipamiento, microondas, heladera de 11 pies, ventiladores de techo, calefactores de tiro balanceado, parrilla y cochera individual.'),
(3,	'Cabaña para 2 - 3 personas',	3,	2,	'Tiene dos dormitorios (uno con sommier matrimonial y TV con cable, y otro dormitorio pequeño con 01 cama individual); baño con ducha; cocina-comedor totalmente equipada con microondas, heladera, cocina de 2 hornallas con horno, vajilla completa; TV con cable; aire acondicionado frío-calor, asador.')
ON DUPLICATE KEY UPDATE `ID` = VALUES(`ID`), `NOMBRE` = VALUES(`NOMBRE`), `CAPACIDAD` = VALUES(`CAPACIDAD`), `ID_CATEGORIA` = VALUES(`ID_CATEGORIA`), `DETALLE` = VALUES(`DETALLE`);

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `categoria` (`ID`, `NOMBRE`) VALUES
(1,	'1 estrella'),
(2,	'2 estrellas'),
(3,	'3 estrellas')
ON DUPLICATE KEY UPDATE `ID` = VALUES(`ID`), `NOMBRE` = VALUES(`NOMBRE`);

-- 2015-09-20 03:52:53
