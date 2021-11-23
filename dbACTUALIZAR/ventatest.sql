-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 14:06:03
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
(12, 'Ferrari', 'Testarossa', 13, 1998, 199882, 20000000, NULL),
(14, 'Ford', 'Sierra', 9, 1985, 298000, 198000, NULL);

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
(5, 'jajavier@gmail.com', '$2y$10$YD6Pb7ZXxxDUR8iCI469ye2RP5XDdzw0/eiIhG/dMYu9xK4LB.n.C', 'Javier', 0),
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
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
