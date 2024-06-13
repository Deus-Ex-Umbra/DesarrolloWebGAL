-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3309
-- Tiempo de generación: 31-05-2024 a las 21:42:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`) VALUES
(1, 'Ingeniería Civil'),
(2, 'Ingeniería Mecánica'),
(3, 'Ingeniería Eléctrica'),
(4, 'Ingeniería Electrónica'),
(5, 'Ingeniería en Sistemas Computacionales'),
(6, 'Ingeniería Industrial'),
(7, 'Ingeniería Química'),
(8, 'Ingeniería Ambiental'),
(9, 'Ingeniería en Telecomunicaciones'),
(10, 'Ingeniería Biomédica'),
(11, 'Ingeniería Aeroespacial'),
(12, 'Ingeniería de Software'),
(13, 'Ingeniería en Energías Renovables'),
(14, 'Ingeniería Agronómica'),
(15, 'Ingeniería en Nanotecnología'),
(16, 'Ingeniería en Materiales'),
(17, 'Ingeniería en Transporte'),
(18, 'Ingeniería Naval'),
(19, 'Ingeniería en Petróleos'),
(20, 'Ingeniería en Automatización'),
(21, 'Ingeniería en Robótica'),
(22, 'Ingeniería en Inteligencia Artificial'),
(23, 'Ingeniería en Datos'),
(24, 'Ingeniería en Seguridad Informática'),
(25, 'Ingeniería en Gestión Empresarial');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
