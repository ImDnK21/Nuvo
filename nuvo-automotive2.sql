-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-07-2022 a las 04:54:07
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
(13, 'Tornillos'),
(16, 'Paños');

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
(1, 8, 'Aceite sad', 'gsadas', 421, 'liquido-de-frenos.png', '2022-07-10 03:41:39', '2022-07-10 03:46:46'),
(2, 8, 'Gasdas', 'gsadas', 21, 'liquido-de-freno_gasdas.jpeg', '2022-07-10 06:47:29', '2022-07-10 06:47:29'),
(3, 13, 'Tuerca 2cm', 'Tuerca para motor 2cm x10U', 4, 'tornillos_tuerca-2cm.jpeg', '2022-07-10 06:49:13', '2022-07-10 06:49:13'),
(6, 16, 'Huaipe De Seda', 'Huaipe de seda color blanco 50m', 32, 'paños_huaipe-de-seda.png', '2022-07-13 15:11:28', '2022-07-13 15:11:28');

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
('client', '13918256-1', 'Andres Matias', 'Castro Soto', '+56927324712', 'Las Cazuelas #412', 'La Cisterna', 'andresc@gmail.com', '$2y$10$Bp3R6mSoKZz0vayT.f8ps.Wl4M1ftt0b5L4ExLhHAyNJrvPJBKT5q', '2022-07-07 02:33:39', '2022-07-09 17:48:11'),
('mechanic', '14767262-4', 'Karel Andrade', 'Poblete Diaz', '+56927231842', 'Rossini #215', 'Pudahuel', 'kpoblete@gmai.com', '$2y$10$7qXffKLMAblQlpWrtQsDcudYwkbpXkvljxovSmGs5I.LG.ujdG7dS', '2022-07-09 17:32:47', '2022-07-09 17:32:47'),
('client', '15448522-8', 'Javier Matias', 'Briceno Araneda', '+56972375237', 'Pedro Lira #512', 'Macul', 'jbriceno@gmail.com', '$2y$10$ihMSAyN7q1YibKV.7R/0GOTXm7nAC2MUBpHmc/aS6jMHqHpBb.X1G', '2022-07-09 17:48:01', '2022-07-09 17:48:01'),
('mechanic', '16944090-5', 'Carlos Emanuel', 'Montt Sanhueza', '+56982371231', 'Av Vitacura #521', 'Vitacura', 'cmontt@gmail.com', '$2y$10$ItlMxlAUiHTuih9Pc8X.XexHz7RRdDHv8HD4bp9ys87p4GQIamT5m', '2022-07-03 03:38:54', '2022-07-09 17:56:15'),
('client', '17701628-4', 'Miguel Angel', 'Sanchez Carrasco', '+56927348237', 'Gounod #1027', 'Las Condes', 'msanchez@gmail.com', '$2y$10$bjmaNPZHRNJfOQbMYS5e.O8Nj7XfyACCtsDdsfnuV4wRjUFEw.Zqu', '2022-07-09 17:31:10', '2022-07-09 17:31:10'),
('client', '20049428-8', 'Gary Sebastian', 'Sanche Arancibia', '+5698731422', 'Las Nieves #123', 'La Cisterna', 'gsanchez@gmail.cl', '$2y$10$DTHjIKzuUPMM.zCWjDQCuehi9OYi1S0iTNqgDI02MEVAEnuv0/G4K', '2022-07-09 06:06:11', '2022-07-09 17:31:27'),
('admin', '20049429-6', 'Danko Sanchez', 'Sanchez Arancibia', '', '', '', 'admin@admin.cl', '$2y$10$9G6V5hNUqcMyw1UloN7YheqT6elFcEQYuxyJSXPhE9xDSwK3k6NIW', '2022-07-14 01:56:32', '2022-07-14 04:42:13'),
('mechanic', '4355107-8', 'Ricarrdo Hernan', 'Soto Hernandez', '+56928234823', 'Santa Raquel #734', 'La Florida', 'rsoto@gmail.com', '$2y$10$4RSAInbqwgGq9HDsJXeMV.cVHEUrPU0kbuEH0G/JLPw.PXi7UbLTG', '2022-07-09 17:51:25', '2022-07-13 15:10:09');

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
('JKKD-14', '17701628-4', 'Honda', 'HRV', '2021', 'Electrico', 'Automatico', '#000000', '#A823412', '19.029', 'SUV', '2022-07-09 17:37:34', '2022-07-09 17:37:34'),
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
('1', 'BZKL-42', '123', '19283423-5', 'Parabrisas Quebrado\r\nCambiar Llanta Delantera Izquiera', '2022-06-20 03:15:43', '2022-06-20 03:15:43'),
('123456', 'YDRP-52', '20042382-5', '43551072-8', 'Foco quemado\r\nTrapabarros Roto', '2022-07-13 14:37:30', '2022-07-13 14:37:30'),
('4', 'JKKD-14', '16924772-2', NULL, 'Cambiar Liquido de frenos\r\nRealizar alineamiento', '2022-07-07 02:18:13', '2022-07-07 02:18:13'),
('99', NULL, '123', NULL, NULL, '2022-07-07 02:10:46', '2022-07-07 02:10:46'),
('999', NULL, '20049429-6', NULL, NULL, '2022-07-14 01:56:08', '2022-07-14 01:56:08');

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
-- AUTO_INCREMENT de la tabla `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_SUPPLY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
