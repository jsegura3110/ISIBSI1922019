-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2019 a las 10:35:16
-- Versión del servidor: 10.1.40-MariaDB
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
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ap1` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ap2` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `canton` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `distrito` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `ap1`, `ap2`, `cedula`, `correo`, `sexo`, `direccion`, `provincia`, `canton`, `distrito`, `tel`) VALUES
('Jonathan', 'Segura', 'Navarro', 207320015, 'jsegura3110@gmail.com', 1, 'Los Portones', 'Alajuela', 'Alajuela', 'San Rafael', 88525332),
('Lionel', 'Messi', 'Cuticcini', 810203040, 'messi10@gmail.com', 1, 'Camp Nou', 'Catalunya', 'Barcelona', 'Barcelona', 88888888);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
