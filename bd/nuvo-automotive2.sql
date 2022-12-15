-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-12-2022 a las 19:01:19
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuvo-automotive2`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllVehiclesYear2021` (IN `years` VARCHAR(4))   select * from vehicle where YEAR = years$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `ID` int(255) NOT NULL,
  `NAME_CATEGORY` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`ID`, `NAME_CATEGORY`) VALUES
(15, 'Aceite de motor'),
(16, 'Fusibles'),
(17, 'Contrapesos'),
(18, 'Aire Acondicionado'),
(19, 'Guantes'),
(20, 'Llaves de filtro'),
(21, 'Llaves de impacto'),
(22, 'Juego de alicates'),
(23, 'Engrasadoras'),
(24, 'Pulverizador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commune`
--

CREATE TABLE `commune` (
  `ID_COMMUNE` int(255) NOT NULL,
  `NOMBRE` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `commune`
--

INSERT INTO `commune` (`ID_COMMUNE`, `NOMBRE`) VALUES
(1, 'La Florida'),
(2, 'Cerrillos'),
(3, 'Cerro Navia	'),
(4, 'Conchali'),
(5, 'El Bosque'),
(6, 'Estacion Central'),
(7, 'Huechuraba'),
(8, 'Independecia'),
(9, 'La Cisterna'),
(10, 'La Granja'),
(11, 'La Pintana'),
(12, ' La Reina'),
(13, 'Las Condes'),
(14, 'Lo Barnechea'),
(15, 'Lo Espejo'),
(16, 'Lo Prado'),
(17, 'Macul'),
(18, 'Maipú'),
(20, 'Pedro Aguirre Cerda'),
(22, 'Providencia'),
(23, 'Pudahuel'),
(24, 'Quilicura'),
(25, 'Quinta Normal'),
(26, 'Recoleta'),
(27, 'Renca'),
(28, 'San Joaquín'),
(29, 'San Miguel'),
(30, 'San Ramón'),
(31, 'Vitacura'),
(32, 'Puente Alto'),
(33, 'Pirque'),
(34, 'San jose de maipo'),
(35, 'Colina'),
(36, 'Lampa'),
(37, 'San Bernardo\"'),
(38, 'Buin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuel_type`
--

CREATE TABLE `fuel_type` (
  `ID_FUEL` int(255) NOT NULL,
  `FUEL_NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `fuel_type`
--

INSERT INTO `fuel_type` (`ID_FUEL`, `FUEL_NAME`) VALUES
(1, 'Bencina'),
(2, 'Diesel'),
(3, 'Electrico'),
(4, 'Gas Natural'),
(5, 'Hibrido (Bencina - Gas)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `DESCRIPTION` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PRICE` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`ID`, `NAME`, `DESCRIPTION`, `PRICE`) VALUES
(2, 'Lavado Completo', 'Lavado completo del vehiculo con liquido especial', '10000'),
(6, 'cambio parabrisa', 'Cambio completo de parabrisa', '79890'),
(7, 'Arreglo de Parachoques', 'Cambio o arreglo de parachoques delantero o trasero', '129000'),
(8, 'Cambio de retrovisores Laterales', 'Cambio o arreglo de retrovisores latarales', '25000'),
(9, 'Cambio de caja de transmision', 'Cambio de caja de transmision (Manual - Automatica - CVT)', '450000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_wo`
--

CREATE TABLE `status_wo` (
  `ID_STATUS` int(255) NOT NULL,
  `NAME_STATUS` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `status_wo`
--

INSERT INTO `status_wo` (`ID_STATUS`, `NAME_STATUS`) VALUES
(1, 'En Preparacion'),
(2, 'En Reparacion'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supply`
--

CREATE TABLE `supply` (
  `ID_SUPPLY` int(255) NOT NULL,
  `ID_CATEGORY` int(255) NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `DESCRIPTION` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `STOCK` int(255) NOT NULL,
  `IMG` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `supply`
--

INSERT INTO `supply` (`ID_SUPPLY`, `ID_CATEGORY`, `NAME`, `DESCRIPTION`, `STOCK`, `IMG`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 19, 'Guantes Cabritilla', 'Guante de cuero elasticado', 4, 'guantes_guantes-cabritilla.png', '2022-12-14 02:50:59', '2022-12-14 02:50:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmission_type`
--

CREATE TABLE `transmission_type` (
  `ID_TRANSMISSION` int(255) NOT NULL,
  `NAME_TRANSMISSION` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `transmission_type`
--

INSERT INTO `transmission_type` (`ID_TRANSMISSION`, `NAME_TRANSMISSION`) VALUES
(1, 'Mecanico'),
(2, 'Automático'),
(3, 'CVT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ROLE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT 'client',
  `RUT` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FIRSTNAME` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `LASTNAME` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `PHONE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ADDRESS` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ID_COMMUNE` int(255) DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ROLE`, `RUT`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `ADDRESS`, `ID_COMMUNE`, `EMAIL`, `PASSWORD`, `CREATED_AT`, `UPDATED_AT`) VALUES
('client', '13918256-5', 'Angel Roberto', 'Miranda Casas', '+56928327292', 'Pedreros #9834', 31, 'angel@gmail.com', '$2y$10$m89se99iFn7/itc1VUFU8uMyPVufDzP6QftSfpv4xVzzOM3XYcNqC', '2022-12-14 22:37:18', '2022-12-15 02:07:11'),
('mechanic', '17672942-5', 'Rodolfo Martin', 'Molina Castro', '+56982374821', 'Av San jose de la estrella #982', 1, 'rodolfo@gmail.com', '$2y$10$CZkm5gdzJ.o96rNxOs6cauQFoScL25NzqE34Yf05V5h2UxvDbdke6', '2022-12-15 01:58:56', '2022-12-15 01:59:29'),
('mechanic', '18234023-4', 'Luis Antonio', 'Miranda Tunnineti', '+56982734123', 'Av Uno #5112', 9, 'luis@gmail.com', '$2y$10$UZqZRMmRcBY6NTbBTQdKDuoUPLTl7SBSj37imKhQ2pTR13gt/1EfS', '2022-12-08 04:54:34', '2022-12-08 04:54:34'),
('mechanic', '18239423-2', 'Joel Antonio', 'Sanhueza Diaz', '82183213', 'Santa isabel #5982', 27, 'joel@gmail.com', '$2y$10$LsHd.KCpiMhpoqIK0my2cOSmP/F4TIPiEbNZHcZVAqn7BgBtilSuu', '2022-12-09 05:47:39', '2022-12-15 01:57:26'),
('client', '19823923-2', 'Andre Antonia', 'Riquelme Soto', '+56928342723', 'San jose De La Estrella #123', 12, 'andrea@gmail.com', '$2y$10$RpuejO9fMhqFiv4BAde4.u7Kln/Oo8EhcpsydTAEMjF5djAnqi1WO', '2022-12-09 01:58:11', '2022-12-09 04:08:00'),
('admin', '20049429-6', 'Danko Sebastian', 'Sanchez Arancibia', '+56982731322', '', 1, 'admin@admin.cl', '$2y$10$whvSq7ZWEc2Q3Jajb38dHuBq5ZzudHvO8cLr269o0ZYszeS5KwOPm', '2022-12-07 00:37:02', '2022-12-09 04:06:56'),
('client', '20092842-4', 'Bastian Osvaldo', 'Perez Soto', '+56928138231', 'Av Palicano #512', 34, 'bastian@gmail.com', '$2y$10$7YaKid/3mlJ1roAmYXPw5ONc2MaMGqaIKET9FTRn13V4g7j197K82', '2022-12-15 01:55:26', '2022-12-15 01:55:26'),
('client', '28123923-2', 'Ernesto Osvaldo', 'Sandoval Diaz', '+56982384232', 'jadsj #1238', 5, 'ernesto@gmail.com', '$2y$10$we1x2G5Deg0ryOHRx7PhDejzcNkWF2BbZ6oxdEU5ntt6VhvuJcbou', '2022-12-09 03:09:38', '2022-12-09 03:09:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicle`
--

CREATE TABLE `vehicle` (
  `PATENT` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `OWNER` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `BRAND` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `MODEL` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `YEAR` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ID_FUEL_TYPE` int(255) DEFAULT NULL,
  `ID_TRANSMISSION` int(255) DEFAULT NULL,
  `COLOR` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `CHASSIS_NUMBER` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `MILEAGE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ID_TYPE_VEHICLE` int(255) DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `vehicle`
--

INSERT INTO `vehicle` (`PATENT`, `OWNER`, `BRAND`, `MODEL`, `YEAR`, `ID_FUEL_TYPE`, `ID_TRANSMISSION`, `COLOR`, `CHASSIS_NUMBER`, `MILEAGE`, `ID_TYPE_VEHICLE`, `CREATED_AT`, `UPDATED_AT`) VALUES
('JSPR-52', '19823923-2', 'Nissan', '350z', '2019', 2, 2, '#000000', '#A985823', '5232', 5, '2022-12-13 22:52:56', '2022-12-13 22:52:56'),
('KSPR-52', '13918256-5', 'Lamborgini', 'Spider', '2021', 1, 1, '#000000', '#232412231', '23132', 5, '2022-12-14 21:54:03', '2022-12-14 22:38:39'),
('LDPA-21', '28123923-2', 'Honda', 'CRV', '2022', 1, 1, '#000000', '#A512321312', '45213', 4, '2022-12-13 23:21:38', '2022-12-14 22:20:47'),
('MSUR-98', '20092842-4', 'Supra', 'Ibiza', '2022', 1, 2, '#000000', '#A82374232', '24232', 5, '2022-12-15 02:21:58', '2022-12-15 02:21:58'),
('PSRL-45', '13918256-5', 'Nissan', 'Skyline', '2021', 1, 1, '#000000', '#A52131232', '423213', 3, '2022-12-14 22:38:28', '2022-12-14 22:38:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `ID_TYPE` int(255) NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `vehicle_type`
--

INSERT INTO `vehicle_type` (`ID_TYPE`, `NAME`) VALUES
(1, 'Sedan'),
(2, 'Station Wagon'),
(3, 'HatchBack'),
(4, 'SUV'),
(5, 'Deportivo'),
(6, 'Vehiculo Comercial'),
(7, 'VAN'),
(8, 'PickUp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workorder`
--

CREATE TABLE `workorder` (
  `ID` int(255) NOT NULL,
  `PATENT_VEHICLE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `RUT_CLIENT` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `RUT_MECHANIC` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `OBSERVATIONS` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ID_STATUS` int(255) DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `workorder`
--

INSERT INTO `workorder` (`ID`, `PATENT_VEHICLE`, `RUT_CLIENT`, `RUT_MECHANIC`, `OBSERVATIONS`, `ID_STATUS`, `CREATED_AT`, `UPDATED_AT`) VALUES
(8, 'JSPR-52', '19823923-2', '18234023-4', '- Vehiculo cuenta con vidrio delantero izquierdo trizado\r\n\r\n- Cliente solicitado cambio de aceite de motor', 1, '2022-12-14 05:14:08', '2022-12-14 05:14:08'),
(9, 'LDPA-21', '28123923-2', '18239423-2', '- Cliente Solicita Cambio de aceite de motor\r\n- Vehiculo ingresado sin tapabarros', 1, '2022-12-14 22:44:24', '2022-12-14 22:44:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wo_service`
--

CREATE TABLE `wo_service` (
  `ID` int(255) NOT NULL,
  `ID_SERVICE` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ID_WO` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `wo_service`
--

INSERT INTO `wo_service` (`ID`, `ID_SERVICE`, `ID_WO`) VALUES
(1, '6', '1'),
(2, '7', '1'),
(3, '9', '1'),
(4, '2', '2'),
(5, '6', '2'),
(6, '7', '2'),
(7, '8', '2'),
(8, '9', '2'),
(9, '6', '3'),
(10, '7', '3'),
(11, '8', '3'),
(12, '6', '4'),
(13, '7', '4'),
(14, '8', '4'),
(15, '2', '5'),
(16, '6', '5'),
(17, '6', '6'),
(18, '7', '6'),
(19, '6', '7'),
(20, '7', '7'),
(21, '2', '8'),
(22, '6', '8'),
(23, '7', '9'),
(24, '8', '9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`ID_COMMUNE`);

--
-- Indices de la tabla `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`ID_FUEL`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `status_wo`
--
ALTER TABLE `status_wo`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Indices de la tabla `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`ID_SUPPLY`),
  ADD KEY `ID_CATEGORY` (`ID_CATEGORY`);

--
-- Indices de la tabla `transmission_type`
--
ALTER TABLE `transmission_type`
  ADD PRIMARY KEY (`ID_TRANSMISSION`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `FK_COMMUNE` (`ID_COMMUNE`);

--
-- Indices de la tabla `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`PATENT`),
  ADD KEY `FK_VEHICLE_OWNER` (`OWNER`),
  ADD KEY `FK_ID_TYPE_VEHICLE` (`ID_TYPE_VEHICLE`),
  ADD KEY `FK_ID_FUEL` (`ID_FUEL_TYPE`),
  ADD KEY `FK_ID_TRANSMISSION` (`ID_TRANSMISSION`);

--
-- Indices de la tabla `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`ID_TYPE`);

--
-- Indices de la tabla `workorder`
--
ALTER TABLE `workorder`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PATENT_VEHICLE` (`PATENT_VEHICLE`),
  ADD KEY `RUT_CLIENT` (`RUT_CLIENT`),
  ADD KEY `RUT_MECHANIC` (`RUT_MECHANIC`),
  ADD KEY `FK_ID_STATUS` (`ID_STATUS`);

--
-- Indices de la tabla `wo_service`
--
ALTER TABLE `wo_service`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_SERVICE` (`ID_SERVICE`),
  ADD KEY `ID_WO` (`ID_WO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_SUPPLY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `workorder`
--
ALTER TABLE `workorder`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `wo_service`
--
ALTER TABLE `wo_service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `ID_CATEGORY` FOREIGN KEY (`ID_CATEGORY`) REFERENCES `category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_COMMUNE` FOREIGN KEY (`ID_COMMUNE`) REFERENCES `commune` (`ID_COMMUNE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `FK_ID_FUEL` FOREIGN KEY (`ID_FUEL_TYPE`) REFERENCES `fuel_type` (`ID_FUEL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_TRANSMISSION` FOREIGN KEY (`ID_TRANSMISSION`) REFERENCES `transmission_type` (`ID_TRANSMISSION`),
  ADD CONSTRAINT `FK_ID_TYPE_VEHICLE` FOREIGN KEY (`ID_TYPE_VEHICLE`) REFERENCES `vehicle_type` (`ID_TYPE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VEHICLE_OWNER` FOREIGN KEY (`OWNER`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `workorder`
--
ALTER TABLE `workorder`
  ADD CONSTRAINT `CLIENT_VEHICLE` FOREIGN KEY (`RUT_CLIENT`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_STATUS` FOREIGN KEY (`ID_STATUS`) REFERENCES `status_wo` (`ID_STATUS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MECHANIC_VEHICLE` FOREIGN KEY (`RUT_MECHANIC`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PATENT_VEHICLE` FOREIGN KEY (`PATENT_VEHICLE`) REFERENCES `vehicle` (`PATENT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
