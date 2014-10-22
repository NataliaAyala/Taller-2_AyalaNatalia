-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2014 a las 21:06:59
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `comprado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_carro`
--

CREATE TABLE IF NOT EXISTS `lista_carro` (
`id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `lista_carro`
--

INSERT INTO `lista_carro` (`id`, `producto`, `precio`, `url`) VALUES
(1, 'Watch Dogs', '125.90', 'images/Prev1.jpg'),
(2, 'Call of Duty', '125.90', 'images/Prev2.jpg'),
(3, 'Need for Speed', '125.90', 'images/Prev3.jpg'),
(5, 'Dragon Ball Z', '125.90', 'images/Prev5.jpg'),
(59, 'Call of Duty', '125.90', 'images/Prev4.jpg'),
(61, 'The last of us ', '125.90', 'images/Desc2.jpg'),
(62, 'Beyond:two Souls ', '125.90', 'images/Desc3.jpg'),
(63, 'Saint Row', '125.90', 'images/Desc4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `password`) VALUES
(2, 'dfgdfgfd', 'dfgdfg', 'fg'),
(3, 'efgtrhy', 'sfdgty', 'aa'),
(4, 'mario', 'natalia', 'alejandra'),
(5, 'esteban', 'correo', 'password'),
(6, 'natalia', 'correo', 'password');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_carro`
--
ALTER TABLE `lista_carro`
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
-- AUTO_INCREMENT de la tabla `lista_carro`
--
ALTER TABLE `lista_carro`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
