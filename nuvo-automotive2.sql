-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-12-2022 a las 04:42:15
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
  `ID` int(255) NOT NULL,
  `NOMBRE` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `commune`
--

INSERT INTO `commune` (`ID`, `NOMBRE`) VALUES
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
(8, 'Cambio de retrovisores Laterales', 'Cambio o arreglo de retrovisores latarales', '25000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_wo`
--

CREATE TABLE `status_wo` (
  `ID_STATUS` int(255) NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `status_wo`
--

INSERT INTO `status_wo` (`ID_STATUS`, `NAME`) VALUES
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
('client', '20049428-8', 'Gary Sebastian', 'Sandia Perez', '+56982371231', 'Gounod #10232', 31, 'gary@gmail.com', '$2y$10$Z5cJhIuVKvT76KOWdsfsGeu2fCdnDacBgNdUGJuH0UDt01Bh3tcm.', '2022-12-07 02:19:46', '2022-12-07 02:19:46'),
('admin', '20049429-6', 'Danko Sebastian', 'Sanchez Arancibia', '', '', NULL, 'admin@admin.cl', '$2y$10$whvSq7ZWEc2Q3Jajb38dHuBq5ZzudHvO8cLr269o0ZYszeS5KwOPm', '2022-12-07 00:37:02', '2022-12-07 04:37:34'),
('client', '20182324-2', 'jdasjd', 'jdasjdj', '92391239', 'dasjd', 1, 'kfsk@sdjasd', '$2y$10$//twc1IylDn06NerSy5RCe9JPFj3T.cA6VNo19fNzrK/my0jSHB3C', '2022-12-07 04:36:33', '2022-12-07 04:37:29'),
('mechanic', '20293132-2', 'Esteban Antonio', 'Sanetti Cobalto', '+5698273232', 'Av Ossa #412', 34, 'esteban@gmail.com', '$2y$10$Tru/8h0ULN5lgVQumX2nduKaI6YSN5D/.XKoXgDNrM8kUjVKvD2Ni', '2022-12-07 01:40:16', '2022-12-07 04:36:11'),
('client', '29928321-2', 'Diego Andres', 'Molina Castro', '+56928321422', 'ASDASD#321', 4, 'molina@gmail.com', '$2y$10$Um/AtNG8fHtXD/UBi8rvFefdM9DulnQ5NmyCnlQiZD7n/3T717Tru', '2022-12-07 01:28:13', '2022-12-07 02:20:38');

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
('PLSR-92', '29928321-2', 'Honda', 'CRV', '2021', 4, 1, '#f33a0c', '#A85213213213', '2132', 3, '2022-12-07 04:30:24', '2022-12-07 04:30:56');

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
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_SUPPLY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `workorder`
--
ALTER TABLE `workorder`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `wo_service`
--
ALTER TABLE `wo_service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FK_COMMUNE` FOREIGN KEY (`ID_COMMUNE`) REFERENCES `commune` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
