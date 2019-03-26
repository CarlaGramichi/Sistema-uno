-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2019 a las 11:39:31
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
(37, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', ' kfkldskfldsk', '2019-03-20 13:19:37'),
(38, 'Carla', 'Fuenzalidalaskflak', 'caaar.m21@gmail.com', 'ksjkasjk', '2019-03-20 13:19:37'),
(39, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'nbnbnb', '2019-03-20 13:19:37'),
(40, 'Carla', 'Gramichi', 'caaar.m21@gmail.comwejkwej', 'kekjwekfj', '2019-03-20 13:19:37'),
(41, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'eoiotioitoieofieoiroi', '2019-03-20 13:49:16'),
(42, 'Orne', 'Gramichi', 'caaar.m21@gmail.com', 'wekfoewfewofewo', '2019-03-20 13:54:22'),
(43, 'Toby', 'Bebe', 'caaar.m21@gmail.com', ' quiero comidita', '2019-03-20 23:57:03'),
(45, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'as das das d', '2019-03-24 14:26:03'),
(46, 'Carla', 'Gramichi', 'caaar.m21@gmail.com', 'asdasd', '2019-03-24 14:28:26'),
(47, 'Toby', 'Gramichi', 'toby.bb@kdkf', 'asd asd asd as d', '2019-03-25 00:42:08'),
(48, 'Tobyas', 'Gramichi', 'toby.bb@kdkf', 'jlkjl', '2019-03-25 00:42:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extracto` varchar(255) NOT NULL,
  `cuerpo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Carla', 'gramihi', 36540057, '0000-00-00', 'estudiante', 'javier.peralta@gmail.com', 'car', 0x3336353430303537, '1klsklkdslkk', '', '0000-00-00 00:00:00'),
(2, 'ornella', 'asasd', 0, '1994-01-03', 'estudiante', 'caaar.m21@gmail.com', 'Orne', 0x31323334, '', 'ekrjgejrgejrgjekgjrj', '2019-03-22 16:25:21'),
(7, 'Carla', 'Gramichi', 36540057, '1991-08-21', 'estudiante', 'car@gmail.com', 'Car', 0x31323334, '', 'wijfiwjfijwefjewifjiejfi', '2019-03-24 19:38:27'),
(8, 'Sela', 'Fuenzalida', 13379864, '1999-12-10', 'Enfermera', 'sel03@gmal.com', 'Sel', 0x31323334, '', 'dkfkdjfjdkjg', '2019-03-24 19:45:53'),
(12, 'Toby', 'Gramichi', 872871878, '2015-02-01', 'hijo', 'toby.bb@kdkf', 'toby', 0x31323334, '', 'jqwhdjhjhds', '2019-03-24 19:51:01'),
(13, 'Carla', 'Gramichi', 36540057, '0000-00-00', 'estudiante', 'caaar.m21@gmaisl.com', 'Carla Gramichi', 0x31323334, '', 'hjlkhjkl', '2019-03-25 00:47:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_uindex` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
