-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2017 a las 21:01:44
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cascos`
--

CREATE TABLE `cascos` (
  `nombre` varchar(15) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imgen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futbol`
--

CREATE TABLE `futbol` (
  `nombre` varchar(15) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imgen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mma`
--

CREATE TABLE `mma` (
  `nombre` varchar(15) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imgen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mma`
--

INSERT INTO `mma` (`nombre`, `descripcion`, `precio`, `imgen`) VALUES
('Guantes Cleto', 'Guantes Cleto Reyes color negro lisos de 14 Oz', 500, '/mma/1.jpg'),
('Guantes Venum', 'Guantes Venum color rojo/negro de 14 Oz. ', 600, '/mma/2.jpg'),
('Espinilleras', 'Espinilleras Venum completas color negro ', 1000, '/mma/3.jpg'),
('Vendas', 'Vendas Venum de entrenamiento color negro de 50 cm', 150, '/mma/4.jpg'),
('Protector Gel', 'Vendas de Gel Venum para entrenamiento', 200, '/mma/5.jpg'),
('Protector bucal', 'Protector bucal venum moldeable color negro', 300, '/mma/6.jpg'),
('Short', 'Short de entrenamiento talla M color B/N', 400, '/mma/7.jpg'),
('Short militar', 'Short de Entranamiento Vanum tipo militar', 450, '/mma/8.jpg'),
('Careta', 'Careta Venum color negro lisa completa ', 700, '/mma/9.jpg'),
('Guantes', 'Guantes Profesionales Cleto Reyes de 12 Oz.', 1000, '/mma/0.jpg'),
('Vendas', 'Vendas Everlast color nego de 4 mts', 150, '/mma/10.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mochilas`
--

CREATE TABLE `mochilas` (
  `nombre` varchar(15) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imgen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreusr` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreusr`, `nombre`, `email`, `password`) VALUES
('root', 'eduardo fermin', 'kiqo95@hotmail.com', 'root'),
('lalo', 'rodrigo santiago', 'efermin57@gmail.com', '1234'),
('paquito', 'paco perez', 'paquito@gmail.com', '098');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
