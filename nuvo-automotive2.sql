-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-08-2022 a las 05:03:37
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
(653, 16, 'Huaipe', 'gasdas', 231, 'paños_huaipe.png', '2022-08-18 17:48:28', '2022-08-18 17:48:28'),
(656, 8, 'Anticongelante', 'gas', 21, 'liquido-de-freno_anticongelante.jpeg', '2022-08-18 18:01:42', '2022-08-18 18:01:42');

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
('mechanic', '14767262-4', 'Karel Andrade', 'Poblete Diaz', '+56927231842', 'Rossini #215', 'Pudahuel', 'kpoblete@gmai.com', '$2y$10$7qXffKLMAblQlpWrtQsDcudYwkbpXkvljxovSmGs5I.LG.ujdG7dS', '2022-07-09 17:32:47', '2022-07-09 17:32:47'),
('client', '16122091-4', 'Matias Fernando', 'Villaroel Castro', '89828238742', 'jnfgas #421', 'jdasd', 'fjwasj@gjasjdas.com', '$2y$10$a0hJ2SfjyavNR7blhO6oIeXFS69FSGcu0hLf5pMklfLF1jNFONmz.', '2022-08-16 22:47:41', '2022-08-16 22:47:41'),
('mechanic', '16944090-5', 'Carlos Emanuel', 'Montt Sanhueza', '+56982371231', 'Av Vitacura #521', 'Vitacura', 'cmontt@gmail.com', '$2y$10$ItlMxlAUiHTuih9Pc8X.XexHz7RRdDHv8HD4bp9ys87p4GQIamT5m', '2022-07-03 03:38:54', '2022-07-09 17:56:15'),
('client', '17701628-4', 'Miguel Angel', 'Sanchez Carrasco', '+56927348237', 'Gounod #1027', 'Las Condes', 'msanchez@gmail.com', '$2y$10$bjmaNPZHRNJfOQbMYS5e.O8Nj7XfyACCtsDdsfnuV4wRjUFEw.Zqu', '2022-07-09 17:31:10', '2022-07-09 17:31:10'),
('mechanic', '18259168-8', 'Victor Cristian', 'Perez Sandia', '847318457321', 'jgasdasj #421', 'kfasjasdm', 'jfasdks@gkasdka.com', '$2y$10$tLEiltit2jymc7jxs9c3zu23ieetKCI8g7DZ0VNRXQ3cWq44I7H6K', '2022-08-16 22:50:34', '2022-08-16 22:50:34'),
('admin', '20049429-6', 'Admin', 'Admin', '', '', '', 'admin@admin.cl', '$2y$10$yL6aeqScgE.CM6cmQ8Yu2.XynS0Gk0NkkbVNIiihJxeSfS5Ikw5LO', '2022-07-14 05:04:44', '2022-07-14 05:05:04'),
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
('PDRS-23', '16122091-4', 'Lamborigini', 'Urus', '2022', 'Bencina', 'Automatico', '#f50a2d', '#A2452132', '29.000', 'Deportivo', '2022-08-16 22:56:44', '2022-08-16 22:56:44');

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
('99', NULL, '123', NULL, NULL, '2022-07-07 02:10:46', '2022-07-07 02:10:46'),
('999', NULL, '20049429-6', NULL, NULL, '2022-07-14 05:04:28', '2022-07-14 05:04:28');

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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_SUPPLY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;

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
  ADD CONSTRAINT `PATENT_VEHICLE` FOREIGN KEY (`PATENT_VEHICLE`) REFERENCES `vehicle` (`PATENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `wo_service`
--
ALTER TABLE `wo_service`
  ADD CONSTRAINT `ID_WO` FOREIGN KEY (`ID_WO`) REFERENCES `workorder` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
