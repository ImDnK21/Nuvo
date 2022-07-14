-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-07-2022 a las 06:19:57
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `ID` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CATEGORY` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `DESCRIPTION` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PRICE` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supply`
--

CREATE TABLE `supply` (
  `ID` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CATEGORY` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `STOCK` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `supply`
--

INSERT INTO `supply` (`ID`, `NAME`, `CATEGORY`, `STOCK`, `CREATED_AT`, `UPDATED_AT`) VALUES
('1', 'Huaipe de seda', 'Paños', '51', '2022-06-19 04:19:48', '2022-06-19 04:19:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ROLE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT 'user',
  `RUT` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FIRSTNAME` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `LASTNAME` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `PHONE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ADDRESS` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `COMMUNE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ROLE`, `RUT`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `ADDRESS`, `COMMUNE`, `EMAIL`, `PASSWORD`, `CREATED_AT`, `UPDATED_AT`) VALUES
('client', '13918256-1', 'Andres Matias', 'Castro Soto', '+56927324712', 'Las Cazuelas #412', 'La Cisterna', 'acastro@gmail.cl', '$2y$10$GrUxxpCiwekgrg4JeBdxXuhVXqpXdyZHsM0GY0H1UCcKGcuL0XXqK', '2022-07-07 02:33:39', '2022-07-07 02:33:39'),
('mechanic', '16944090-5', 'Carlos Emanuel', 'Montt Sanhueza', '+56982371231', '', '', 'cmontt@gmail.com', '$2y$10$ASuPHDTbGVltcg/YjIWhgOoCa8TxnABc3vf0OXV0tBfzgFIKnt/b.', '2022-07-03 03:38:54', '2022-07-03 03:38:54'),
('admin', '20.049.429-6', 'Danko Sebastian', 'Sanchez Arancibia', '+56982034123', 'Rossini #1232', 'La Florida', 'admin@admin.cl', '$2y$10$mL/mFbAbLDkP9dhsdRhHxuT1f3tETrM9PzmF1kh7aPQL/pIxBvbWi', '2022-07-07 02:10:58', '2022-07-07 02:15:52'),
('client', '20049428-8', 'Gary Sebastian', 'Sanche Arancibia', '+5698731422', 'jgfajs', 'kgfaskd', 'gsanchez@gmail.cl', '$2y$10$Szkcib.x7XJdbnd0EfKjouTO4E0ujZ8gpmaza1oGaiYIpXhdaKx.q', '2022-07-09 06:06:11', '2022-07-09 06:06:11');

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
  `FUEL_TYPE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `TRANSMISSION` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `COLOR` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `CHASSIS_NUMBER` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `MILEAGE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `VEHICLE_TYPE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `vehicle`
--

INSERT INTO `vehicle` (`PATENT`, `OWNER`, `BRAND`, `MODEL`, `YEAR`, `FUEL_TYPE`, `TRANSMISSION`, `COLOR`, `CHASSIS_NUMBER`, `MILEAGE`, `VEHICLE_TYPE`, `CREATED_AT`, `UPDATED_AT`) VALUES
('BZKL-42', '20049428-8', 'Audi', 'R8', '2021', 'Bencina', 'Automatico', '#000000', '#A5212621', '20932', 'Deportivo', '2022-07-09 06:06:46', '2022-07-09 06:06:46'),
('YDRP-52', '13918256-1', 'Nissan', '350Z', '2022', 'Bencina', 'Mecanico', '#000000', '#A58213', '20.521', 'Sedan', '2022-07-07 02:34:12', '2022-07-07 02:34:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workorder`
--

CREATE TABLE `workorder` (
  `ID` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PATENT_VEHICLE` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `RUT_CLIENT` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `RUT_MECHANIC` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `OBSERVATIONS` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `workorder`
--

INSERT INTO `workorder` (`ID`, `PATENT_VEHICLE`, `RUT_CLIENT`, `RUT_MECHANIC`, `OBSERVATIONS`, `CREATED_AT`, `UPDATED_AT`) VALUES
('1', 'YDRP-52', '123', '', NULL, '2022-06-20 03:15:43', '2022-06-20 03:15:43'),
('3', NULL, '12345', NULL, NULL, '2022-07-02 01:27:18', '2022-07-02 01:27:18'),
('4', NULL, '16924772-2', NULL, NULL, '2022-07-07 02:18:13', '2022-07-07 02:18:13'),
('99', NULL, '123', NULL, NULL, '2022-07-07 02:10:46', '2022-07-07 02:10:46');

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
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`PATENT`),
  ADD KEY `FK_VEHICLE_OWNER` (`OWNER`);

--
-- Indices de la tabla `workorder`
--
ALTER TABLE `workorder`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PATENT_VEHICLE` (`PATENT_VEHICLE`),
  ADD KEY `RUT_CLIENT` (`RUT_CLIENT`),
  ADD KEY `RUT_MECHANIC` (`RUT_MECHANIC`);

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
-- AUTO_INCREMENT de la tabla `wo_service`
--
ALTER TABLE `wo_service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `FK_VEHICLE_OWNER` FOREIGN KEY (`OWNER`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `workorder`
--
ALTER TABLE `workorder`
  ADD CONSTRAINT `PATENT_VEHICLE` FOREIGN KEY (`PATENT_VEHICLE`) REFERENCES `vehicle` (`PATENT`);

--
-- Filtros para la tabla `wo_service`
--
ALTER TABLE `wo_service`
  ADD CONSTRAINT `ID_SERVICE` FOREIGN KEY (`ID_SERVICE`) REFERENCES `service` (`ID`),
  ADD CONSTRAINT `ID_WO` FOREIGN KEY (`ID_WO`) REFERENCES `workorder` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
