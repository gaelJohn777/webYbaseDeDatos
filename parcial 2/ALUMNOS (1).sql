-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 02:51:50
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `CETIS`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ALUMNOS`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Edad` tinyint(50) NOT NULL,
  `Sexo` tinyint(2) NOT NULL,
  `Turno` varchar(100) NOT NULL,
  `NUM_control` varchar(200) NOT NULL,
  `Semestre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ALUMNOS`
--

INSERT INTO `ALUMNOS` (`id`, `Nombre`, `Edad`, `Sexo`, `Turno`, `NUM_control`, `Semestre`) VALUES
(1, 'Ectorin', 17, 1, 'Trasnoche', '987655423123', '5TO'),
(2, 'Gualapude', 20, 2, 'matutino', '5676787454', '3ER'),
(3, 'chui', 77, 2, 'Vespertino', '3746585785', '1ER');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ALUMNOS`
--
ALTER TABLE `ALUMNOS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ALUMNOS`
--
ALTER TABLE `ALUMNOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
