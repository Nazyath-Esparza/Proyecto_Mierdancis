-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2025 a las 22:01:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `triple_baka_corporation`
--
CREATE DATABASE IF NOT EXISTS `triple_baka_corporation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `triple_baka_corporation`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compositores`
--

CREATE TABLE `compositores` (
  `Id_compositores` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Fecha_debut` date DEFAULT NULL,
  `Nacionalidad` varchar(50) DEFAULT NULL,
  `Genero_musical` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `compositores`
--

INSERT INTO `compositores` (`Id_compositores`, `Nombre`, `Fecha_debut`, `Nacionalidad`, `Genero_musical`) VALUES
(1, 'Metalica', '1981-03-14', 'E.U', 'Heavy Metal'),
(2, 'Azumi Takahashi', '2013-08-05', 'Japonesa', 'R&B'),
(3, 'Toa', '2013-02-10', 'Japonesa', 'Baladas'),
(4, 'Rammstein ', '1994-03-24', 'Alemana ', 'Metal Industrial'),
(5, 'Scorpions', '1972-07-21', 'E.U', 'Rock'),
(6, 'Misfits', '1977-05-15', 'E.U', 'Alternativo'),
(7, 'RM', '2015-03-20', 'Coreano', 'Rap'),
(8, 'Tyler, The Creator', '2008-11-15', 'E.U', 'Rap'),
(9, 'Giga', '2010-02-07', 'Japonesa', 'Utaite'),
(10, 'Reol', '2012-05-03', 'Japonesa', 'J-Pop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `ID_Discos` int(11) NOT NULL,
  `Nombre_album` varchar(50) DEFAULT NULL,
  `Id_compositores` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `Id_Formato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`ID_Discos`, `Nombre_album`, `Id_compositores`, `precio`, `Id_Formato`) VALUES
(1, 'Persona 3 Reload OST', 2, 2933.73, 2),
(2, 'Herzeleid', 4, 2350.00, 1),
(3, 'IDSMILE', 3, 290.88, 1),
(4, 'Master of Puppets', 1, 3850.50, 3),
(5, 'Lonesome Crow', 5, 4585.40, 2),
(6, 'Walk Among Us', 6, 2750.75, 1),
(7, 'Right Place, Wrong Perong', 7, 300.64, 1),
(8, 'CHROMAKOPIA', 8, 313.48, 3),
(9, '+Boy', 9, 603.70, 1),
(10, 'Drop Pop Candy', 10, 801.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_discos`
--

CREATE TABLE `formato_discos` (
  `Id_Formato` int(11) NOT NULL,
  `Nombre_formato` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `formato_discos`
--

INSERT INTO `formato_discos` (`Id_Formato`, `Nombre_formato`) VALUES
(1, 'DVD'),
(2, 'Vinilo'),
(3, 'Cassette');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_Venta` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `ID_Discos` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_Venta`, `Fecha`, `ID_Discos`, `Cantidad`, `Total`) VALUES
(1, '2020-05-12', 3, 6, 1745.28),
(2, '2024-12-25', 1, 10, 29337.30),
(3, '2018-05-15', 4, 15, 57757.50),
(4, '2020-10-10', 2, 8, 18800.00),
(5, '2020-05-05', 6, 5, 13753.75),
(6, '2025-05-01', 5, 15, 68781.00),
(7, '2025-04-23', 7, 9, 2705.76),
(8, '2025-01-25', 8, 5, 1567.04),
(9, '2023-08-07', 9, 7, 4225.90),
(10, '2022-06-09', 10, 9, 7209.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compositores`
--
ALTER TABLE `compositores`
  ADD PRIMARY KEY (`Id_compositores`);

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`ID_Discos`),
  ADD KEY `Id_compositores` (`Id_compositores`),
  ADD KEY `Id_Formato` (`Id_Formato`);

--
-- Indices de la tabla `formato_discos`
--
ALTER TABLE `formato_discos`
  ADD PRIMARY KEY (`Id_Formato`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_Venta`),
  ADD KEY `ID_Discos` (`ID_Discos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compositores`
--
ALTER TABLE `compositores`
  MODIFY `Id_compositores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `ID_Discos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `formato_discos`
--
ALTER TABLE `formato_discos`
  MODIFY `Id_Formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `discos_ibfk_1` FOREIGN KEY (`Id_compositores`) REFERENCES `compositores` (`Id_compositores`) ON UPDATE CASCADE,
  ADD CONSTRAINT `discos_ibfk_2` FOREIGN KEY (`Id_Formato`) REFERENCES `formato_discos` (`Id_Formato`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_Discos`) REFERENCES `discos` (`ID_Discos`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
