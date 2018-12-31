-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2018 a las 22:04:19
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gsbtest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ac_no` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `celular` int(10) NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `distrito` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `medio_captacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `asesor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seal_e`
--

CREATE TABLE `seal_e` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido_p` varchar(40) DEFAULT NULL,
  `apellido_m` varchar(40) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `fecha_i` date DEFAULT NULL,
  `fecha_a` date DEFAULT NULL,
  `sueldo` int(6) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `celular` int(9) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `distrito` varchar(300) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `cuenta_s` varchar(40) DEFAULT NULL,
  `cuenta_c` varchar(40) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `carrera` varchar(100) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `terminos` tinyint(1) DEFAULT NULL,
  `observacion` text,
  `fecha_n` date DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `cussp` varchar(30) DEFAULT NULL,
  `snp` varchar(30) DEFAULT NULL,
  `flujo` varchar(30) DEFAULT NULL,
  `mixta` varchar(30) DEFAULT NULL,
  `conyugue` tinyint(1) DEFAULT NULL,
  `asignacion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seal_e`
--

INSERT INTO `seal_e` (`id`, `nombre`, `apellido_p`, `apellido_m`, `dni`, `cargo`, `fecha_i`, `fecha_a`, `sueldo`, `telefono`, `celular`, `direccion`, `distrito`, `mail`, `cuenta_s`, `cuenta_c`, `estado`, `carrera`, `institucion`, `terminos`, `observacion`, `fecha_n`, `edad`, `cussp`, `snp`, `flujo`, `mixta`, `conyugue`, `asignacion`) VALUES
(1, 'Angelo Ruben', 'Huancapaza', 'Ponce', 72654091, 'Supervisor', '2018-01-01', '2018-12-31', 2300, 982108377, 982108377, 'Cesar Vallejo, Manzana C Lote 8', 'Mollendo', 'angeloponce25@gmail.com', '0123456789', '0123456789', 1, 'Informatica', 'Unsa', 1, '0123456789', '1992-04-25', 26, 'SI', 'SI', 'SI', 'SI', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `apellido` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `direccion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `distrito` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `estado_civil` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grupo_sangre` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_personal` int(9) DEFAULT NULL,
  `operador_personal` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_emergencia` int(9) DEFAULT NULL,
  `operador_emergencia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_emergencia` int(9) DEFAULT NULL,
  `operador_telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_trabajo` int(9) DEFAULT NULL,
  `operador_trabajo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horario` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contacto_emergencia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dias_semana` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horas_dia` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parentesco` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `area` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aplicacion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `acceso` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `taxi_caller` int(10) DEFAULT NULL,
  `zoiper` int(10) DEFAULT NULL,
  `solicitante` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_termino` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `telefono`, `estado`, `ultimo_login`, `fecha`, `apellido`, `dni`, `direccion`, `distrito`, `fecha_nacimiento`, `estado_civil`, `grupo_sangre`, `correo`, `celular_personal`, `operador_personal`, `celular_emergencia`, `operador_emergencia`, `telefono_emergencia`, `operador_telefono`, `celular_trabajo`, `operador_trabajo`, `horario`, `contacto_emergencia`, `dias_semana`, `horas_dia`, `parentesco`, `area`, `cargo`, `aplicacion`, `acceso`, `taxi_caller`, `zoiper`, `solicitante`, `fecha_inicio`, `fecha_termino`) VALUES
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 982108377, 1, '2018-12-31 12:37:33', '2018-12-31 17:37:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `seal_e`
--
ALTER TABLE `seal_e`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seal_e`
--
ALTER TABLE `seal_e`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
