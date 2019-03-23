-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2019 a las 22:04:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_primer_sistemita_completo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comentario` text CHARACTER SET utf16 NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `apellido`, `email`, `comentario`, `fecha_creacion`) VALUES
(27, 'Toby', 'Bebe', 'caaar.m21@gmail.com', '   hola hola hola hola holaholaholaholaholaho', '2019-03-20 13:19:37'),
(36, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'mamamaammaa', '2019-03-20 13:19:37'),
(37, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'kfkldskfldsk', '2019-03-20 13:19:37'),
(38, 'Carla', 'Fuenzalidalaskflak', 'caaar.m21@gmail.com', 'ksjkasjk', '2019-03-20 13:19:37'),
(39, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'nbnbnb', '2019-03-20 13:19:37'),
(40, 'Carla', 'Gramichi', 'caaar.m21@gmail.comwejkwej', 'kekjwekfj', '2019-03-20 13:19:37'),
(41, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'eoiotioitoieofieoiroi', '2019-03-20 13:49:16'),
(42, 'Orne', 'Gramichi', 'caaar.m21@gmail.com', 'wekfoewfewofewo', '2019-03-20 13:54:22'),
(43, 'Toby', 'Bebe', 'caaar.m21@gmail.com', ' quiero comidita', '2019-03-20 13:57:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `contrasena` blob NOT NULL,
  `foto_perfil` varchar(255) NOT NULL,
  `biografia` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `fecha_nac`, `ocupacion`, `email`, `nombre_usuario`, `contrasena`, `foto_perfil`, `biografia`, `fecha_creacion`) VALUES
(1, 'Carla', 'gramihi', 36540057, '0000-00-00', 'estudiante', '', 'car', 0x3336353430303537, '1klsklkdslkk', '', '0000-00-00 00:00:00'),
(2, 'ornella', 'Gramichi', 0, '1994-01-03', 'estudiante', 'caaar.m21@gmail.com', 'Orne', 0x31323334, '', 'ekrjgejrgejrgjekgjrj', '2019-03-22 16:25:21'),
(3, 'Selva', 'Fuenzalida', 13379865, '1959-12-10', 'Enfermera', 'sel03@gmal.com', 'Sel', 0x31323334, '', 'jdfjhfjhjhf', '2019-03-22 16:27:58'),
(4, 'Selva', 'Fuenzalida', 13379865, '1959-12-10', 'Enfermera', 'sel03@gmal.com', 'Sel', 0x31323334, '', 'jdfjhfjhjhf', '2019-03-22 16:28:46'),
(5, 'Selva', 'Fuenzalida', 13379865, '1959-12-10', 'Enfermera', 'sel03@gmal.com', 'Sel', 0x31323334, '', 'jdfjhfjhjhf', '2019-03-23 01:03:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
