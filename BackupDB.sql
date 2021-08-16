-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2021 a las 09:05:39
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbmakeupc`
--
CREATE DATABASE IF NOT EXISTS `dbmakeupc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbmakeupc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contacto`
--

CREATE TABLE `datos_contacto` (
  `idcontacto` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `mensaje` varchar(400) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_contacto`
--

INSERT INTO `datos_contacto` (`idcontacto`, `nombre`, `apellido`, `correo`, `mensaje`, `fecha`) VALUES
(1, 'Carioli', 'Casado', 'cariokastudio@gmail.com', 'Hola probando este formulario', '2016-08-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_subscripciones`
--

CREATE TABLE `datos_subscripciones` (
  `idsubscripciones` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_subscripciones`
--

INSERT INTO `datos_subscripciones` (`idsubscripciones`, `nombre`, `correo`, `fecha`) VALUES
(1, 'Carioli Casado', 'cariokastudio@gmail.com', '2016-08-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  ADD PRIMARY KEY (`idcontacto`);

--
-- Indices de la tabla `datos_subscripciones`
--
ALTER TABLE `datos_subscripciones`
  ADD PRIMARY KEY (`idsubscripciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  MODIFY `idcontacto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_subscripciones`
--
ALTER TABLE `datos_subscripciones`
  MODIFY `idsubscripciones` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
