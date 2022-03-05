-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2022 a las 18:46:19
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectosfinfp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asir`
--

CREATE TABLE `asir` (
  `idAlumno` int(255) NOT NULL,
  `NombreAlumno` varchar(255) NOT NULL,
  `ApellidosAlumno` varchar(255) NOT NULL,
  `TituloProyecto` varchar(255) NOT NULL,
  `ProfesorTitular` varchar(255) NOT NULL,
  `FechaComienza` date NOT NULL DEFAULT '2022-03-21',
  `FechaFin` date DEFAULT NULL,
  `Nota` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asir`
--

INSERT INTO `asir` (`idAlumno`, `NombreAlumno`, `ApellidosAlumno`, `TituloProyecto`, `ProfesorTitular`, `FechaComienza`, `FechaFin`, `Nota`) VALUES
(1, 'Belen', 'Rodriguez', 'proyecto', 'Angela', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Asunto` varchar(255) NOT NULL,
  `Mensaje` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daw`
--

CREATE TABLE `daw` (
  `idAlumno` int(255) NOT NULL,
  `NombreAlumno` varchar(255) NOT NULL,
  `ApellidosAlumno` varchar(255) NOT NULL,
  `TituloProyecto` varchar(255) NOT NULL,
  `ProfesorTitular` varchar(255) NOT NULL,
  `FechaComienza` date NOT NULL DEFAULT '2022-03-21',
  `FechaFin` date DEFAULT NULL,
  `Nota` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecna` date DEFAULT NULL,
  `tipo` varchar(255) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `email`, `password`, `fecna`, `tipo`) VALUES
('admin', 'admin', 'admin', '0000-00-00', 'administrador'),
('belen', 'belen@belen.com', 'admin', '0000-00-00', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asir`
--
ALTER TABLE `asir`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `daw`
--
ALTER TABLE `daw`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asir`
--
ALTER TABLE `asir`
  MODIFY `idAlumno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daw`
--
ALTER TABLE `daw`
  MODIFY `idAlumno` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
