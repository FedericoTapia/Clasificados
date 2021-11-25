-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 07:03:35
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
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_auto`, `fabricante`, `modelo`, `id_carroceria_fk`, `anio`, `kilometros`, `precio`, `image`) VALUES
(1, 'Honda', 'Civic SI', 1, 1995, 198000, 1250000, NULL),
(12, 'Ferrari', 'Testarossa', 13, 1998, 199882, 20000000, NULL),
(14, 'Ford', 'Sierra', 9, 1985, 298000, 198000, NULL),
(21, 'Volkswagen', 'Gol', 1, 2001, 357000, 450000, NULL),
(24, 'Ford', 'Falcon', 11, 1974, 649000, 180000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `puntaje`, `id_auto`, `id_usuario`) VALUES
(27, 'buenardo', 2, 14, 3),
(28, 'Muy buen vehiculo, buena respuesta de velocidad', 4, 1, 2),
(29, 'precio excesivo para el vehiculo que es', 3, 12, 2),
(30, 'Unico en su clase, confort y buen uso familiar', 3, 14, 2),
(31, 'Un clasico todo terreno, lastima el estado', 2, 24, 2),
(32, 'El auto de mis sueños con el motor de mis pesadillas', 3, 21, 2);

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
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `pass`, `userName`, `admin`) VALUES
(2, 'fede@gmail.com', '$2a$12$JiOexFyq0ymE0Xya2heA/.Koy8OpL.Tx6ZYs/exSalc0byLwjreKe', 'Federico Tapia', 1),
(3, 'cacho@gmail.com', '$2y$10$lPoZZB.bglEqV.2qKw3vrOPhXJQoZNho9JTS2tHemotcD02zbft5q', 'Cacho Garcia', 0),
(6, 'joa@mail.com', '$2y$10$VoAuCTd8zgKlH6rcPJaVdOmgOE05K2LqirgVxCINHYF28Kw7ruX6G', 'Joaquin', 0),
(7, 'mar@gmai.com', '$2y$10$piLeU4xnRIdBuEx47E4yzOFiLACT5.GGy5nIRJLhlL0DkaKECvpfC', 'Mariano', 0);

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
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipocarroceria`
--
ALTER TABLE `tipocarroceria`
  ADD PRIMARY KEY (`id_carroceria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tipocarroceria`
--
ALTER TABLE `tipocarroceria`
  MODIFY `id_carroceria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`id_carroceria_fk`) REFERENCES `tipocarroceria` (`id_carroceria`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `autos` (`id_auto`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
