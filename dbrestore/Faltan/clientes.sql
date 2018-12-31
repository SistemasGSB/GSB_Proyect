-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2018 a las 14:50:06
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

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `dni`, `celular`, `email`, `direccion`, `distrito`, `medio_captacion`, `asesor`) VALUES
(1, 'Angelo Ruben', 'Huancapaza Ponce', 72654091, 982108377, 'Angeloponce25@gmail.com', 'Belaunde 303', 'Miraflores', 'Facebook', 'admin'),
(2, 'SERGIO', 'MEDINA', 40641291, 987423426, 'SMEDINA@ALMAPOLIS.COM', 'AREQUIPA', 'AREQUIPA', 'Facebook', 'sjackson'),
(3, 'Juan Jose', 'Guzman Cardenas', 74859612, 982777345, 'jguzman@gsb.com.pe', 'San Martin', 'Ciudad Mi Trabajo', 'Facebook', 'sjackson'),
(4, 'Karla Alejandra', 'Gil Diaz', 66554477, 987654321, 'kgil@gsb.com.pe', 'Los Ruiseñores', 'Paucarpata', 'Facebook', 'admin'),
(5, 'Ruben', 'Huancapaza', 30829275, 959967731, 'rhuancapaza@gmail.com', 'Cesar Vallejo', 'Mollendo', 'Volante', 'demo'),
(6, 'Elena', 'Del Carpio', 90407510, 987456145, 'ecarpio@gsb.com', 'Puerto Blanco', 'Ilo', 'Feria', 'aponce'),
(7, 'Maria Gracia', 'Linares Borja', 90406080, 947321745, 'mgracia@gmail.com', 'Los Girasoles', 'Camana', 'Oficina atencion', 'aponce'),
(8, 'Luis Angelo', 'Reyes', 987625341, 982457665, 'lreyes@gmail.com', 'Paucarpata', 'Miraflores', 'Facebook', 'sjackson'),
(9, 'Angelo', 'Ponce', 656541, 951742365, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Oficina atencion', 'admin'),
(10, 'Angelo', 'Ponce', 123456789, 963852741, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'nose', 'Volante', 'admin'),
(11, 'Angelo', 'Ponce', 32165487, 963741852, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Pagina web', 'admin'),
(12, 'Angelo', 'Ponce', 336699777, 12345678, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Oficina atencion', 'admin'),
(13, 'Angelo', 'Ponce', 1112224, 12341356, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Oficina atencion', 'admin'),
(14, 'Angelo', 'Ponce', 123456773, 2147483647, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Hunter', 'Feria', 'admin'),
(15, 'Angelo', 'Ponce', 2147483647, 123456789, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Pagina web', 'admin'),
(16, 'Angelo', 'Ponce', 2147483647, 123456, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Oficina atencion', 'admin'),
(17, 'Angelo', 'Ponce', 2147483647, 124562, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Pagina web', 'admin'),
(18, 'Angelo', 'Ponce', 666999888, 2147483647, 'angeloponce25@gmail.com', 'Cesar Vallejo', 'Socabaya', 'Pagina web', 'admin'),
(22, 'Asdflkj', 'Adjshkf', 72654098, 127364736, 'asldj@asd', 'Adsdkj', 'Asdjfh', '', 'admin'),
(23, 'Adlkj', 'Adksja', 30824574, 987654321, 'asdlkj@sdf', 'Asdfjlk', 'Apol', 'Facebook', 'admin'),
(24, 'Asda', 'Adsf', 12345678, 123456789, 'asnd@sad', 'Adjkhks', 'Adsfds', 'Referido', 'admin'),
(25, 'Asa', 'Asa', 98765432, 123456789, 'asa@asa', 'Asa', 'Asa', 'Pagina web', 'admin'),
(26, 'Usuario', 'Usuarioa', 78945632, 789654321, 'ejemplo@gmail.com', 'DIreccion', 'Distrito', 'Radio', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
