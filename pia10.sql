-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 02:17:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_usuario` int(255) NOT NULL,
  `resultado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_usuario`, `resultado`) VALUES
(1, 0),
(2, 0),
(3, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes_psicologos`
--

CREATE TABLE `pacientes_psicologos` (
  `id` int(255) NOT NULL,
  `id_psicologo` int(255) NOT NULL,
  `id_paciente` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes_psicologos`
--

INSERT INTO `pacientes_psicologos` (`id`, `id_psicologo`, `id_paciente`) VALUES
(1, 1, 2),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(100) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipouser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nuevo` tinyint(1) NOT NULL DEFAULT 1,
  `confirmado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombres`, `apellidos`, `pass`, `tipouser`, `correo`, `nuevo`, `confirmado`) VALUES
(1, 'Das', 'das ras', '123', 'psicologo', 'Das', 1, 0),
(2, 'rasss', 'tasdas', '123', 'paciente', 'tar', 0, 1),
(3, 'ssssssssssss', 'dsadasdasasdasd', '123', 'paciente', 'tars', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(255) NOT NULL,
  `id_psicologo` int(255) NOT NULL,
  `tarea` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `id_psicologo`, `tarea`, `descripcion`, `fecha`) VALUES
(1, 1, 'rata', '123', '2021-11-15'),
(3, 1, 'sdadsada', 'asdadsad', '2021-11-08'),
(4, 1, 'dasda', 'dasdasd', '2021-11-24'),
(5, 1, 'dasdasd', 'dsadasdasd', '2021-11-22'),
(6, 1, 'dasdasd123123', 'dasdasd123123', '2021-11-07'),
(7, 1, 'tartara', '123sad', '2021-11-16'),
(8, 1, 'Tas', 'rasdas', '2021-11-24'),
(9, 1, '', '', '0000-00-00'),
(10, 1, '', '', '0000-00-00'),
(11, 1, 'dasdasd', 'sdadsadas', '2021-11-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_usuario`
--

CREATE TABLE `tareas_usuario` (
  `id_usuario` varchar(255) NOT NULL,
  `id_tarea` varchar(255) NOT NULL,
  `id_psicologo` varchar(255) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas_usuario`
--

INSERT INTO `tareas_usuario` (`id_usuario`, `id_tarea`, `id_psicologo`, `estado`) VALUES
('2', '6', '1', 1),
('2', '7', '1', 1),
('2', '1', '1', 1),
('2', '2', '1', 1),
('4', '2', '1', 1),
('4', '1', '1', 1),
('4', '3', '1', 1),
('4', '4', '1', 1),
('4', '6', '1', 1),
('4', '5', '1', 1),
('4', '8', '1', 1),
('4', '7', '1', 1),
('5', '8', '1', 1),
('5', '6', '1', 1),
('5', '7', '1', 1),
('5', '5', '1', 1),
('4', '5', '1', 1),
('3', '1', '1', 1),
('3', '9', '1', 1),
('3', '9', '1', 1),
('3', '9', '1', 1),
('3', '9', '1', 1),
('3', '9', '1', 1),
('3', '9', '1', 1),
('3', '5', '1', 1),
('3', '8', '1', 1),
('3', '9', '1', 1),
('3', '7', '1', 1),
('3', '9', '1', 1),
('3', '3', '1', 0),
('3', '6', '1', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes_psicologos`
--
ALTER TABLE `pacientes_psicologos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes_psicologos`
--
ALTER TABLE `pacientes_psicologos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
