-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-12-2022 a las 21:44:53
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
(3, 'Hoja'),
(5, 'Herramientas'),
(8, 'Agua descontaminante'),
(14, 'Agua Desmineralizada');

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
(4, 'Conchalí'),
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
(19, 'Ñuñoa'),
(20, 'Pedro Aguirre Cerda'),
(21, 'Peñalolén'),
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
(34, 'San José de Maipo'),
(35, 'Colina'),
(36, 'Lampa'),
(37, 'San Bernardo\"'),
(38, 'Buin'),
(39, 'Peñaflor');

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
(1, 5, 'Juego De Llaves', 'Juego de llaves del N~ 1 al 12', 2, 'herramientas_juego-de-llaves.png', '2022-11-30 01:46:00', '2022-11-30 01:46:00'),
(2, 3, 'Lija', 'Lija para lijar', 12, '', '2022-12-02 05:41:30', '2022-12-02 05:41:30');

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
('client', '16122982-4', 'Andraderal Manuel', 'Andrade Castro', '+56928132932', 'Las Condes #521', 13, 'jorge@gmail.com', '$2y$10$SXNd8nFkjbV7S7/PBPWr1urYzlGLwJndTBMRIFnTRNego1Cjgeur2', '2022-12-08 23:46:11', '2022-12-09 05:30:10'),
('mechanic', '18234023-4', 'Luis Antonio', 'Miranda Tunnineti', '+56982734123', 'Av Uno #5112', 9, 'luis@gmail.com', '$2y$10$UZqZRMmRcBY6NTbBTQdKDuoUPLTl7SBSj37imKhQ2pTR13gt/1EfS', '2022-12-08 04:54:34', '2022-12-08 04:54:34'),
('client', '18234823-4', 'Danilo Antonio', 'Escamilla Villaroel', '+56928347132', 'Getafe #53', 12, 'danilo@gmail.com', '$2y$10$1RCfai.xUqR1.iaZGYLJNOhbHRbutOjOsx1fV.6WevRZFBMffg70q', '2022-12-08 20:23:12', '2022-12-08 20:23:12'),
('mechanic', '18239423-2', 'Joel Antonio', 'Sanhueza Diaz', '82183213', 'jdajsj', 1, 'asd@asd', '$2y$10$LsHd.KCpiMhpoqIK0my2cOSmP/F4TIPiEbNZHcZVAqn7BgBtilSuu', '2022-12-09 05:47:39', '2022-12-09 05:47:39'),
('client', '19283423-2', 'Angie ', 'Riera', '+56928132482', 'Av Las Mesas #512', 1, 'angie@gmail.com', '$2y$10$9mA7JS0Me7c.cuTKIDloe.7HO8e7BGBvj5EXbZb7SvYHRuuLAT6ua', '2022-12-10 04:40:26', '2022-12-10 04:40:26'),
('client', '19823923-2', 'Andre Antonia', 'Riquelme Soto', '+56928342723', 'San jose De La Estrella #123', 12, 'andrea@gmail.com', '$2y$10$RpuejO9fMhqFiv4BAde4.u7Kln/Oo8EhcpsydTAEMjF5djAnqi1WO', '2022-12-09 01:58:11', '2022-12-09 04:08:00'),
('client', '20049428-8', 'Gary Sebastian', 'Sandia Perez', '+56982371231', 'Gounod #10232', 31, 'gary@gmail.com', '$2y$10$Z5cJhIuVKvT76KOWdsfsGeu2fCdnDacBgNdUGJuH0UDt01Bh3tcm.', '2022-12-07 02:19:46', '2022-12-07 02:19:46'),
('admin', '20049429-6', 'Danko Sebastian', 'Sanchez Arancibia', '+56982731322', '', 1, 'admin@admin.cl', '$2y$10$whvSq7ZWEc2Q3Jajb38dHuBq5ZzudHvO8cLr269o0ZYszeS5KwOPm', '2022-12-07 00:37:02', '2022-12-09 04:06:56'),
('client', '20182324-2', 'Maria Ignacia', 'Sanhueza Monnt', '+56928173212', 'Av dos #25412', 4, 'maria@gmail.com', '$2y$10$ecvt6B4nxaWGEKpe1w26uOmgfsVY/odsypc/EfnNsUGAGdDt/.X8q', '2022-12-07 04:36:33', '2022-12-07 05:03:02'),
('mechanic', '20293132-2', 'Esteban Antonio', 'Sanetti Cobalto', '+5698273232', 'Av Ossa #412', 34, 'esteban@gmail.com', '$2y$10$Tru/8h0ULN5lgVQumX2nduKaI6YSN5D/.XKoXgDNrM8kUjVKvD2Ni', '2022-12-07 01:40:16', '2022-12-07 04:36:11'),
('client', '28123923-2', 'Ernesto Osvaldo', 'Sandoval Diaz', '+56982384232', 'jadsj #1238', 5, 'ernesto@gmail.com', '$2y$10$we1x2G5Deg0ryOHRx7PhDejzcNkWF2BbZ6oxdEU5ntt6VhvuJcbou', '2022-12-09 03:09:38', '2022-12-09 03:09:38'),
('client', '29928321-2', 'Diego Andres', 'Molina Castro', '+56928321422', 'Porto #5122', 5, 'molina@gmail.com', '$2y$10$6uirKdUlF42I3YRbpiqd1eKdxt2pEDk3hwJ4yoJnYF0bnmwnKQbai', '2022-12-07 01:28:13', '2022-12-07 05:03:19'),
('client', '521421321', 'Katherine Andrea', 'Salsedo Perez', '+5692831322', 'gasddas', 1, 'katherine@gmail.com', '$2y$10$e3u50MbMBiP5ILQL9d3.Ou1K18LcO.Ow2ORO7qHKRQMgij7IIscRe', '2022-12-09 04:30:27', '2022-12-09 05:08:23'),
('mechanic', '832183821', 'gasddas', 'gasddsa', '2312321', 'ajsgjasjdas', 1, 'jdasdj@jdasjdsa', '$2y$10$o0tPyZGnD4jbu7Xy2xAdQ.nB.kZUyBmWH2kJSDXnX77ycRKOzn6oe', '2022-12-09 06:02:01', '2022-12-09 06:02:01');

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
('KSPR-52', '19283423-2', 'Ferrari', 'M23', '2021', 2, 2, '#000000', '#A84818321', '3832', 3, '2022-12-10 05:31:03', '2022-12-10 23:08:47'),
('LPSR-23', '20182324-2', 'Mercedez Benz', 'AMG 63', '2023', 3, 2, '#000000', '#A85821321', '20323', 5, '2022-12-08 04:57:08', '2022-12-10 23:08:57'),
('MALS-23', '28123923-2', 'Nissan', 'V16', '2021', 3, 2, '#000000', '#A842132', '20942', 6, '2022-12-10 05:31:48', '2022-12-10 05:31:48');

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
(3, 'MALS-23', '28123923-2', '18234023-4', '- Vehiculo sin tapabarros delantero izquierdo\r\n- Radio en mal estado', 1, '2022-12-10 05:35:17', '2022-12-10 05:35:17'),
(4, 'LPSR-23', '20182324-2', '20293132-2', '- Cliente solicita revisar aceite de motor\r\n- Cliente solicita cambio de neumaticos\r\n- Cliente necesita arreglo de caja de cambios\r\n- Cliente solicita Arreglo de embreague', 1, '2022-12-10 23:00:28', '2022-12-10 23:00:28');

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
(14, '8', '4');

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_SUPPLY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `workorder`
--
ALTER TABLE `workorder`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `wo_service`
--
ALTER TABLE `wo_service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
