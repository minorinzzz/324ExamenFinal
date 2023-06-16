-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 18:47:09
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miworkflow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujo`
--

CREATE TABLE `flujo` (
  `flujo` varchar(4) DEFAULT NULL,
  `proceso` varchar(4) DEFAULT NULL,
  `proceso_siguiente` varchar(4) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `pantalla` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujo`
--

INSERT INTO `flujo` (`flujo`, `proceso`, `proceso_siguiente`, `tipo`, `rol`, `pantalla`) VALUES
('F1', 'P1', 'P2', 'I', 'Alumno', 'inicial'),
('F1', 'P2', 'P3', 'P', 'Alumno', 'datos'),
('F1', 'P3', 'P4', 'P', 'Alumno', 'envio'),
('F1', 'P4', NULL, 'C', 'Kardex', 'revision'),
('F1', 'P5', 'P2', 'P', 'Kardex', 'no'),
('F1', 'P6', NULL, 'C', 'Caja', 'si'),
('F1', 'P7', 'P2', 'P', 'Caja', 'fallocaja'),
('F1', 'P8', 'P9', 'P', 'Kardex', 'generacertificado'),
('F1', 'P9', NULL, 'F', 'Alumno', 'vercertificado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujocondicion`
--

CREATE TABLE `flujocondicion` (
  `flujo` varchar(3) DEFAULT NULL,
  `proceso` varchar(3) DEFAULT NULL,
  `procesoSI` varchar(3) DEFAULT NULL,
  `procesoNO` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujocondicion`
--

INSERT INTO `flujocondicion` (`flujo`, `proceso`, `procesoSI`, `procesoNO`) VALUES
('F1', 'P4', 'P6', 'P5'),
('F1', 'P6', 'P8', 'P7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujotramite`
--

CREATE TABLE `flujotramite` (
  `Flujo` varchar(5) DEFAULT NULL,
  `proceso` varchar(5) DEFAULT NULL,
  `nro_tramite` varchar(10) DEFAULT NULL,
  `fechaini` datetime DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `usuario_tarea` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujotramite`
--

INSERT INTO `flujotramite` (`Flujo`, `proceso`, `nro_tramite`, `fechaini`, `fechafin`, `usuario`, `usuario_tarea`) VALUES
('F1', 'P1', '2004', '2023-06-06 12:03:47', NULL, 'SaraiAlumno', 'SaraiAlumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) DEFAULT NULL,
  `descipcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descipcion`) VALUES
(1, 'Alumno'),
(2, 'Kardex'),
(3, 'Caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `IdRol` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`IdRol`, `IdUsuario`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `descripcion`, `pass`) VALUES
(1, 'SaraiAlumno', '123456'),
(2, 'FuryAlumno', '123456'),
(3, 'TouristAlumno', '123456'),
(4, 'JuanKardex', '1'),
(5, 'AlanCaja', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
