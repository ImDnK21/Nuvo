-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-11-2022 a las 05:42:54
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
(3, 'Papel'),
(5, 'Herramientas'),
(8, 'Liquido de freno'),
(13, 'Tornillos');

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
(657, 5, 'LLavev', 'gasgas', 21, '', '2022-11-14 05:26:36', '2022-11-14 05:26:36');

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
('client', '11240241-1', 'Bryan Edison', 'Caro Castro', '+56928134542', 'gasjdsa', 'La Florida', 'caro@gmail.com', '$2y$10$DBwcn9xRQXhBq5RyMnRJw.ymPFjqyk1Gq90QH3sPptJznHpM47p.2', '2022-11-11 02:34:00', '2022-11-11 02:34:00'),
('client', '13918256-1', 'Miguel Angel', 'Sanchez Arancibia', '+56982832421', 'Av Escuela Agricola #412', ' Macul', 'miguel@gmail.com', '$2y$10$HqBoOtoyXe0ZYatq3/sxU.lDkwtDIrWCCYqi0xGa5LUVYulHSAczC', '2022-11-11 03:26:42', '2022-11-11 03:26:42'),
('mechanic', '14767262-4', 'Karel Andrade', 'Poblete Diaz', '+56927231842', 'Rossini #215', 'Pudahuel', 'kpoblete@gmai.com', '$2y$10$7qXffKLMAblQlpWrtQsDcudYwkbpXkvljxovSmGs5I.LG.ujdG7dS', '2022-07-09 17:32:47', '2022-07-09 17:32:47'),
('client', '14774640-7', 'Karel Israel', 'Poblete Diaz', '+56989238128', 'Av los condores', 'La Florida', 'karel@gmail.com', '$2y$10$6LP70B5hncOERC94KK/P0e9BXMaw7hXA43h78/aWnygq6TRDMlgTS', '2022-11-11 02:40:55', '2022-11-11 02:40:55'),
('client', '16122091-4', 'Vannesa Francisca', 'Carrion Perez', '+56928138532', 'Las Perdices #674', ' Estación Central', 'vanessa@gmail.com', '$2y$10$MHqLNwguzgBYFpjXUsEO7O4L8YyVTSvIoAE2359wjLDVNfSEKfkMK', '2022-11-10 23:55:18', '2022-11-10 23:55:18'),
('client', '17664034-0', 'Angie Eleana', 'Riera Bolivar', '+56928132594', 'Av Escuela Agricola #445', ' Estación Central', 'angie@gmail.com', '$2y$10$U7EzCXyX1DQDecJZWIUk5OlkeTFuTO75dCevr2Fvfv11EomE60Hya', '2022-11-12 01:10:44', '2022-11-13 03:54:10'),
('admin', '20049429-6', 'Admin', 'Admin', '', '', '', 'admin@admin.cl', '$2y$10$yL6aeqScgE.CM6cmQ8Yu2.XynS0Gk0NkkbVNIiihJxeSfS5Ikw5LO', '2022-07-14 05:04:44', '2022-07-14 05:05:04');

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
('LKLS-24', '11240241-1', 'jdsajdjs', 'jdsajdasj', '2021', 'Diesel', 'Automatico', '#000000', '#A5321321', '2813812', 'HatchBack', '2022-11-14 04:35:54', '2022-11-14 04:35:54'),
('PLRS-96', '16122091-4', 'Honda', 'Civic', '2021', 'Electrico', 'Automatico', '#000000', '#A8521321', '9482', 'Deportivo', '2022-11-11 00:58:10', '2022-11-11 00:58:10'),
('PROL-87', '11240241-1', 'Lamborgini', 'Spider', '2021', 'Diesel', 'Automatico', '#d71d1d', '#A854218321', '2123', 'HatchBack', '2022-11-13 04:43:45', '2022-11-13 04:43:45'),
('RPDL-12', '13918256-1', 'Subaru', 'XV', '2021', 'Bencina', 'Automatico', '#cfcfcf', '#A98213124', '29132', 'SUV', '2022-11-12 00:55:57', '2022-11-12 00:55:57');

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
  `SERVICE` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `workorder`
--

INSERT INTO `workorder` (`ID`, `PATENT_VEHICLE`, `RUT_CLIENT`, `RUT_MECHANIC`, `OBSERVATIONS`, `SERVICE`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1000, 'RPDL-12', '13918256-1', '14767262-4', 'HOLA', 'Lavado', '2022-11-12 01:18:13', '2022-11-12 01:18:13'),
(1001, 'PLRS-96', '16122091-4', '14767262-4', 'Vehiculo en excelente estado', '- Lavado Entero\r\n- Limpieza Interior', '2022-11-13 04:30:14', '2022-11-13 04:30:14');

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
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`ID_SUPPLY`),
  ADD KEY `ID_CATEGORY` (`ID_CATEGORY`);

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
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_SUPPLY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=658;

--
-- AUTO_INCREMENT de la tabla `workorder`
--
ALTER TABLE `workorder`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

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
-- Filtros para la tabla `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `FK_VEHICLE_OWNER` FOREIGN KEY (`OWNER`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `workorder`
--
ALTER TABLE `workorder`
  ADD CONSTRAINT `CLIENT_VEHICLE` FOREIGN KEY (`RUT_CLIENT`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MECHANIC_VEHICLE` FOREIGN KEY (`RUT_MECHANIC`) REFERENCES `user` (`RUT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PATENT_VEHICLE` FOREIGN KEY (`PATENT_VEHICLE`) REFERENCES `vehicle` (`PATENT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
