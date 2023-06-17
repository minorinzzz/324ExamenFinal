-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 06:16:11
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academico22p`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombrecompleto` varchar(70) DEFAULT NULL,
  `coddepto` varchar(5) DEFAULT NULL,
  `codBachiller` varchar(50) DEFAULT NULL,
  `cnacimiento` varchar(50) DEFAULT NULL,
  `cidentidad` varchar(50) DEFAULT NULL,
  `nacionalidad` varchar(10) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombrecompleto`, `coddepto`, `codBachiller`, `cnacimiento`, `cidentidad`, `nacionalidad`, `usuario`, `ci`, `fechanacimiento`) VALUES
(1, 'Sarai Blanco Salgado', '03', '1.JPG', '1.JPG', '1.JPG', 'Boliviana', 'SaraiAlumno', '13814701', '2002-01-25'),
(2, 'Sarai3', '04', '42343', 'si', '34123', 'Argentinia', 'FuryAlumno', NULL, '1988-11-11'),
(3, 'Gennady Korotevich', '03', '3.JPG', '3.JPG', '3.JPG', 'Polonia', 'TouristAlumno', '23434', '2022-12-08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
