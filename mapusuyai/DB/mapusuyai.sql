-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `mapusuyai`;
CREATE DATABASE `mapusuyai` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `mapusuyai`;

DROP TABLE IF EXISTS `cabana`;
CREATE TABLE `cabana` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `CAPACIDAD` int(11) DEFAULT NULL,
  `ID_CATEGORIA` int(11) NOT NULL DEFAULT '0',
  `PRECIO` int(11) NOT NULL DEFAULT '0',
  `DETALLE` text,
  `URL_IMG` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`ID`,`ID_CATEGORIA`),
  KEY `FK_CABANA` (`ID_CATEGORIA`),
  CONSTRAINT `FK_CABANA` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categoria` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO `cabana` (`ID`, `NOMBRE`, `CAPACIDAD`, `ID_CATEGORIA`, `PRECIO`, `DETALLE`, `URL_IMG`) VALUES
(1,	'Para 4 personas',	4,	1,	4000,	'Una típica cabaña construida en madera, con detalles de confort. En la planta baja un dormitorio con cama sommier, TV, aire acondicionado, baño y toilette. Living comedor, cómodos sillones, sofá cama para dos personas, aire acondicionado, TV y cocina completa. Entre piso, dormitorio para dos personas, camas ( 1.75 x 0.80 ). Parrillas y cochera individual.',	'uploads/img7.jpg'),
(2,	'Para 5 personas.',	5,	3,	5000,	'Dos dormitorios (uno con sommier de dos plazas y TV) Living con TV, caja de seguridad, cocina con generoso equipamiento, microondas, heladera de 11 pies, ventiladores de techo, calefactores de tiro balanceado, parrilla y cochera individual.',	'uploads/img8.jpg'),
(3,	'Para 3 personas',	3,	2,	3000,	'Tiene dos dormitorios (uno con sommier matrimonial y TV con cable, y otro dormitorio pequeño con 01 cama individual); baño con ducha; cocina-comedor totalmente equipada con microondas, heladera, cocina de 2 hornallas con horno, vajilla completa; TV con cable; aire acondicionado frío-calor, asador.',	'uploads/img9.jpg')
ON DUPLICATE KEY UPDATE `ID` = VALUES(`ID`), `NOMBRE` = VALUES(`NOMBRE`), `CAPACIDAD` = VALUES(`CAPACIDAD`), `ID_CATEGORIA` = VALUES(`ID_CATEGORIA`), `PRECIO` = VALUES(`PRECIO`), `DETALLE` = VALUES(`DETALLE`), `URL_IMG` = VALUES(`URL_IMG`);

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `categoria` (`ID`, `NOMBRE`) VALUES
(1,	'1 estrella'),
(2,	'2 estrellas'),
(3,	'3 estrellas'),
(4,	'4 estrellas'),
(5,	'5 estrellas')
ON DUPLICATE KEY UPDATE `ID` = VALUES(`ID`), `NOMBRE` = VALUES(`NOMBRE`);

-- 2015-10-20 08:40:22
