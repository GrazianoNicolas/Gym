-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2022 a las 20:52:34
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fk_Usuario` int(11) NOT NULL,
  `fk_planes_deportivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_deportivo`
--

CREATE TABLE `planes_deportivo` (
  `id_planesDeportivo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planes_deportivo`
--

INSERT INTO `planes_deportivo` (`id_planesDeportivo`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(3, 'sfgsdgfsdg', '1000.00', 'sfgsdgfsdg', 'nico.jpeg'),
(5, 'sfgsdgfsdg', '99999999.99', 'sfgsdgfsdg', ''),
(6, 'sfgsdgfsdg', '99999999.99', 'sfgsdgfsdg', NULL),
(7, 'sfgsdgfsdg', '99999999.99', 'sfgsdgfsdg', NULL),
(8, 'sfgsdgfsdg', '99999999.99', 'sfgsdgfsdg', NULL),
(9, 'sfgsdgfsdg', '99999999.99', 'sfgsdgfsdg', NULL),
(10, 'sfgsdgfsdg', '99999999.99', 'sfgsdgfsdg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `contrasenia` varchar(45) NOT NULL,
  `adminis` bit(1) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Usuario`, `contrasenia`, `adminis`, `nombre`, `apellido`, `dni`, `correo`) VALUES
(2, 'EStamos          ', 'Nicolas          ', b'1', '    Nicolas', 'asssssss      ', '4555555555', 'dsafsadfa'),
(3, 'nicolas', 'nicolas', b'0', NULL, 'nicolas', '1234', NULL),
(4, 'gaspi', 'gaspi', b'0', 'gaspi', 'gaspi', '12334', 'gaspi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_Usuario1_idx` (`fk_Usuario`),
  ADD KEY `fk_planes_deportivo1_idx` (`fk_planes_deportivo`);

--
-- Indices de la tabla `planes_deportivo`
--
ALTER TABLE `planes_deportivo`
  ADD PRIMARY KEY (`id_planesDeportivo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planes_deportivo`
--
ALTER TABLE `planes_deportivo`
  MODIFY `id_planesDeportivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Usuario1` FOREIGN KEY (`fk_Usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_planes_deportivo1` FOREIGN KEY (`fk_planes_deportivo`) REFERENCES `planes_deportivo` (`id_planesDeportivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
