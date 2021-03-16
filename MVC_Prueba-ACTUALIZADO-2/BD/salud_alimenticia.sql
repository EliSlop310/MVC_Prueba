-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para salud_alimenticia
CREATE DATABASE IF NOT EXISTS `salud_alimenticia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `salud_alimenticia`;

-- Volcando estructura para tabla salud_alimenticia.datos
CREATE TABLE IF NOT EXISTS `datos` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Peso` float NOT NULL,
  `Masa` float NOT NULL,
  `Altura` float NOT NULL,
  `Especificación` varchar(255) NOT NULL,
  `Folio` int(255) DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  KEY `FK_datos_sesión` (`Folio`),
  CONSTRAINT `FK_datos_sesión` FOREIGN KEY (`Folio`) REFERENCES `sesión` (`Folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla salud_alimenticia.sesión
CREATE TABLE IF NOT EXISTS `sesión` (
  `Folio` int(255) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  PRIMARY KEY (`Folio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
