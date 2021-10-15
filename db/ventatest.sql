-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 08:08:46
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventatest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id_auto` int(11) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `id_carroceria_fk` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `kilometros` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `image` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_auto`, `fabricante`, `modelo`, `id_carroceria_fk`, `anio`, `kilometros`, `precio`, `image`) VALUES
(1, 'Honda', 'Civic SI', 1, 1995, 198, 1980, NULL),
(4, 'Ford', 'Falcon', 8, 1976, 560, 175, NULL),
(5, 'Dodge', 'RAM', 7, 2010, 90, 2000000, NULL),
(8, 'Ford', 'A', 6, 2134, 23123, 412412, NULL),
(9, 'Citroen', 'C3', 2, 2013, 250000, 180500, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocarroceria`
--

CREATE TABLE `tipocarroceria` (
  `id_carroceria` int(11) NOT NULL,
  `Carroceria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipocarroceria`
--

INSERT INTO `tipocarroceria` (`id_carroceria`, `Carroceria`) VALUES
(1, 'Hatchback'),
(2, 'Coupe'),
(3, 'Descapotable'),
(4, 'Furgón'),
(5, 'Minivan'),
(6, 'Todo-Terreno'),
(7, 'Camioneta'),
(8, 'Rural'),
(9, 'Sedan'),
(10, 'SUV'),
(11, 'Utilitario'),
(12, 'Camion liviano'),
(13, 'Deportivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`) VALUES
(2, 'fede@gmail.com', '$2a$12$JiOexFyq0ymE0Xya2heA/.Koy8OpL.Tx6ZYs/exSalc0byLwjreKe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_carroceria_fk` (`id_carroceria_fk`);

--
-- Indices de la tabla `tipocarroceria`
--
ALTER TABLE `tipocarroceria`
  ADD PRIMARY KEY (`id_carroceria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipocarroceria`
--
ALTER TABLE `tipocarroceria`
  MODIFY `id_carroceria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`id_carroceria_fk`) REFERENCES `tipocarroceria` (`id_carroceria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
