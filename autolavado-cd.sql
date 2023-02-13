-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2023 a las 22:42:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autolavado-cd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(7, '2023-02-02-002908', 'App\\Database\\Migrations\\Servicios', 'default', 'App', 1675477619, 1),
(8, '2023-02-02-032848', 'App\\Database\\Migrations\\Usuarios', 'default', 'App', 1675477619, 1),
(9, '2023-02-06-220221', 'App\\Database\\Migrations\\Ventas', 'default', 'App', 1675722102, 2),
(10, '2023-02-06-222209', 'App\\Database\\Migrations\\ServiciosVendidos', 'default', 'App', 1675722373, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `nombre`, `descripcion`, `precio`, `status`) VALUES
(1, 'Lavado básico Coche', 'Lavado a presión, espuma activa, aspirado, aroma y Armorall en llantas de cortesía', 60, 1),
(2, 'Lavado basico Camioneta M', 'Lavado a presión, espuma activa, aspirado, aroma y Armorall en llantas de cortesía', 80, 1),
(3, 'Lavado basico Camioneta G', 'Lavado a presión, espuma activa, aspirado, aroma y Armorall en llantas de cortesía', 90, 1),
(4, 'Lavado basico Camioneta XG', 'Lavado a presión, espuma activa, aspirado, aroma y Armorall en llantas de cortesía', 100, 1),
(5, 'Silicon en crema para plasticos y vinil', 'Interior (tablero, puertas, consola, etc.)', 80, 1),
(6, 'Acondicionador de asientos de piel (3M)', 'Interior', 80, 1),
(7, 'Lavado de vestiduras a profundidad', 'Interior', 1800, 1),
(8, 'Descontaminacion de carroceria', 'Exterior', 300, 1),
(9, 'Encerado', 'Exterior', 550, 1),
(10, 'Pulido y encerado', 'Exterior', 1700, 1),
(11, 'Polimero', 'Exterior (cera líquida)', 40, 1),
(12, 'Teflon', 'Exterior (cera líquida)', 20, 1),
(13, 'Armorall en plasticos exteriores', 'Exterior', 20, 1),
(14, 'Brillo para tolvas', 'Exterior', 10, 1),
(15, 'Cristales', 'Descontaminación de gotas de lluvia ácida, Repelente de agua, anti acompañante (würt)', 950, 1),
(16, 'Lavado de motor, cofre y marco', 'Motor', 80, 1),
(17, 'Brillo para motor', 'Motor ', 10, 1),
(18, 'Faros', 'Restauración y pulido de faros', 450, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosvendidos`
--

CREATE TABLE `serviciosvendidos` (
  `idServicio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `totalServicio` double NOT NULL,
  `idVenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsr` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsr`, `usuario`, `password`, `nombre`, `telefono`, `tipo`, `status`) VALUES
(1, 'pablovergara', '$2y$10$XsLBaxlSJrEPcTagpTxIfO.J/PEDIDYckHBtizFz8vJuULcxl.w2i', 'Pablo Vergara', '7351331097', 'administrador', 1),
(2, 'saulfuentes', '$2y$10$35xZ738Z2Gkbd6F4VFOUbeYaH5L1M00tXoMz8ob0gv.C7Dqrj/vTK', 'Saul Fuentes', '7351331097', 'empleado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `fechaVenta` datetime NOT NULL,
  `efectivo` double NOT NULL,
  `totalVenta` double NOT NULL,
  `atendio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `serviciosvendidos`
--
ALTER TABLE `serviciosvendidos`
  ADD KEY `fk_idServicio` (`idServicio`),
  ADD KEY `fk_idVenta` (`idVenta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsr`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `serviciosvendidos`
--
ALTER TABLE `serviciosvendidos`
  ADD CONSTRAINT `fk_idServicio` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idVenta` FOREIGN KEY (`idVenta`) REFERENCES `ventas` (`idVenta`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
