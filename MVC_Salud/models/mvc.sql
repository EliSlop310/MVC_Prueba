-- Si se crea la base de datos en SQL con el comando: 
CREATE DATABASE mvc;
-- Sino omitir el paso anterior y desde PhpMyAdmin crear la base de datos que se llame "mvc"



-- Creacion de tablas
CREATE TABLE `datos` (
  `Id` int(255) NOT NULL,
  `Peso` float NOT NULL,
  `Masa` float NOT NULL,
  `Altura` float NOT NULL,
  `Especificacion` varchar(255) NOT NULL,
  `Folio` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `sesion` (
  `Folio` int(255) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Modificacion de tablas
ALTER TABLE `datos`
  ADD PRIMARY KEY (`Id`) USING BTREE,
  ADD KEY `FK_datos_sesión` (`Folio`);

ALTER TABLE `sesion`
  ADD PRIMARY KEY (`Folio`);

ALTER TABLE `datos`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `sesion`
  MODIFY `Folio` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `datos`
  ADD CONSTRAINT `FK_datos_sesión` FOREIGN KEY (`Folio`) REFERENCES `sesion` (`Folio`);



-- Insercion de datos
INSERT INTO `sesion` (`Folio`, `Usuario`, `Correo`, `Pass`) VALUES
(6, 'Usuario1', 'U1@gmail.com', '12345');

INSERT INTO `datos` (`Id`, `Peso`, `Masa`, `Altura`, `Especificacion`, `Folio`) VALUES
(1, 90, 32.6608, 1.66, 'Obesidad', 6),
(2, 50, 18.1449, 1.66, 'bajo de peso', 6),
(3, 70, 25.4028, 1.66, 'Sobrepeso', 6),
(4, 66, 23.9512, 1.66, 'Peso correcto', 6);



