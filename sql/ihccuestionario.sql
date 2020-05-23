-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2020 a las 21:23:59
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ihccuestionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `nombre` varchar(50) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `estudios` varchar(30) NOT NULL,
  `aprendisaje` varchar(200) NOT NULL,
  `minimizar` int(11) NOT NULL,
  `maximisar` int(11) NOT NULL,
  `cerrar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`nombre`, `edad`, `sexo`, `estudios`, `aprendisaje`, `minimizar`, `maximisar`, `cerrar`) VALUES
('1', 1, '1', '1', '1', 0, 0, 0),
('1', 1, '1', '1', '1', 0, 0, 0),
('Anonimo', 1, '1', '1', '1', 0, 0, 0),
('Anonimo', 1, '1', '1', '1', 0, 0, 0),
('Fernando Piedra Mendez', 21, 'SI', 'Univercidad', 'no se', 3, 2, 1),
('123', 1, '1', '1', '2', 2, 2, 2),
('123', 1, '1', '1', '2', 2, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
