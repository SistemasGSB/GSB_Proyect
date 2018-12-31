-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2018 a las 17:39:44
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

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `ac_no`, `nombre`, `fecha_hora`) VALUES
(1, 905529, 'danieldeprattiz', '2018-11-02 09:12:00'),
(2, 905529, 'danieldeprattiz', '2018-11-03 08:00:00'),
(3, 905529, 'danieldeprattiz', '2018-11-03 11:04:00'),
(4, 905529, 'danieldeprattiz', '2018-11-05 08:07:00'),
(5, 905529, 'danieldeprattiz', '2018-11-05 17:44:00'),
(6, 905529, 'danieldeprattiz', '2018-11-06 08:02:00'),
(7, 905529, 'danieldeprattiz', '2018-11-06 13:44:00'),
(8, 905529, 'danieldeprattiz', '2018-11-07 07:46:00'),
(9, 905529, 'danieldeprattiz', '2018-11-07 17:06:00'),
(10, 905529, 'danieldeprattiz', '2018-11-08 08:02:00'),
(11, 905529, 'danieldeprattiz', '2018-11-08 17:29:00'),
(12, 905529, 'danieldeprattiz', '2018-11-09 08:56:00'),
(13, 905529, 'danieldeprattiz', '2018-11-09 18:10:00'),
(14, 905529, 'danieldeprattiz', '2018-11-10 09:31:00'),
(15, 905529, 'danieldeprattiz', '2018-11-10 10:02:00'),
(16, 905529, 'danieldeprattiz', '2018-11-12 07:54:00'),
(17, 905529, 'danieldeprattiz', '2018-11-12 16:30:00'),
(18, 905529, 'danieldeprattiz', '2018-11-13 10:57:00'),
(19, 905529, 'danieldeprattiz', '2018-11-13 14:23:00'),
(20, 905529, 'danieldeprattiz', '2018-11-14 08:14:00'),
(21, 905529, 'danieldeprattiz', '2018-11-15 11:37:00'),
(22, 905529, 'danieldeprattiz', '2018-11-15 16:37:00'),
(23, 905529, 'danieldeprattiz', '2018-11-16 08:17:00'),
(24, 905529, 'danieldeprattiz', '2018-11-16 17:09:00'),
(25, 905529, 'danieldeprattiz', '2018-11-17 10:26:00'),
(26, 905529, 'danieldeprattiz', '2018-11-17 11:15:00'),
(27, 905529, 'danieldeprattiz', '2018-11-19 07:58:00'),
(28, 905529, 'danieldeprattiz', '2018-11-19 16:15:00'),
(29, 905529, 'danieldeprattiz', '2018-11-20 08:27:00'),
(30, 905529, 'danieldeprattiz', '2018-11-20 17:17:00'),
(31, 905529, 'danieldeprattiz', '2018-11-21 08:16:00'),
(32, 905529, 'danieldeprattiz', '2018-11-21 17:45:00'),
(33, 905529, 'danieldeprattiz', '2018-11-22 08:27:00'),
(34, 905529, 'danieldeprattiz', '2018-11-22 16:56:00'),
(35, 905529, 'danieldeprattiz', '2018-11-23 07:44:00'),
(36, 905529, 'danieldeprattiz', '2018-11-23 15:06:00'),
(37, 905529, 'danieldeprattiz', '2018-11-24 09:17:00'),
(38, 905529, 'danieldeprattiz', '2018-11-24 11:06:00'),
(39, 905529, 'danieldeprattiz', '2018-11-26 07:52:00'),
(40, 905529, 'danieldeprattiz', '2018-11-26 16:05:00'),
(41, 905529, 'danieldeprattiz', '2018-11-27 08:04:00'),
(42, 905529, 'danieldeprattiz', '2018-11-27 18:18:00'),
(43, 905529, 'danieldeprattiz', '2018-11-28 08:16:00'),
(44, 905529, 'danieldeprattiz', '2018-11-28 11:37:00'),
(45, 905529, 'danieldeprattiz', '2018-11-29 08:11:00'),
(46, 905529, 'danieldeprattiz', '2018-11-29 17:38:00'),
(47, 905529, 'danieldeprattiz', '2018-11-30 08:16:00'),
(48, 29609638, 'ruthless', '2018-11-02 09:14:00'),
(49, 29609638, 'ruthless', '2018-11-02 16:35:00'),
(50, 29609638, 'ruthless', '2018-11-03 08:03:00'),
(51, 29609638, 'ruthless', '2018-11-03 12:27:00'),
(52, 29609638, 'ruthless', '2018-11-05 09:05:00'),
(53, 29609638, 'ruthless', '2018-11-05 15:18:00'),
(54, 29609638, 'ruthless', '2018-11-06 09:07:00'),
(55, 29609638, 'ruthless', '2018-11-06 16:13:00'),
(56, 29609638, 'ruthless', '2018-11-07 09:46:00'),
(57, 29609638, 'ruthless', '2018-11-07 16:43:00'),
(58, 29609638, 'ruthless', '2018-11-08 09:13:00'),
(59, 29609638, 'ruthless', '2018-11-08 16:29:00'),
(60, 29609638, 'ruthless', '2018-11-09 16:34:00'),
(61, 29609638, 'ruthless', '2018-11-10 12:22:00'),
(62, 29609638, 'ruthless', '2018-11-12 16:43:00'),
(63, 29609638, 'ruthless', '2018-11-13 09:28:00'),
(64, 29609638, 'ruthless', '2018-11-13 15:50:00'),
(65, 29609638, 'ruthless', '2018-11-14 09:08:00'),
(66, 29609638, 'ruthless', '2018-11-14 16:24:00'),
(67, 29609638, 'ruthless', '2018-11-15 09:18:00'),
(68, 29609638, 'ruthless', '2018-11-15 16:18:00'),
(69, 29609638, 'ruthless', '2018-11-16 16:28:00'),
(70, 29609638, 'ruthless', '2018-11-19 09:59:00'),
(71, 29609638, 'ruthless', '2018-11-19 16:31:00'),
(72, 29609638, 'ruthless', '2018-11-20 09:12:00'),
(73, 29609638, 'ruthless', '2018-11-20 16:16:00'),
(74, 29609638, 'ruthless', '2018-11-21 09:06:00'),
(75, 29609638, 'ruthless', '2018-11-21 17:28:00'),
(76, 29609638, 'ruthless', '2018-11-22 09:05:00'),
(77, 29609638, 'ruthless', '2018-11-22 16:06:00'),
(78, 29609638, 'ruthless', '2018-11-23 09:16:00'),
(79, 29609638, 'ruthless', '2018-11-23 16:08:00'),
(80, 29609638, 'ruthless', '2018-11-24 08:25:00'),
(81, 29609638, 'ruthless', '2018-11-26 09:24:00'),
(82, 29609638, 'ruthless', '2018-11-26 16:40:00'),
(83, 29609638, 'ruthless', '2018-11-27 09:39:00'),
(84, 29609638, 'ruthless', '2018-11-27 17:07:00'),
(85, 29609638, 'ruthless', '2018-11-28 09:20:00'),
(86, 29609638, 'ruthless', '2018-11-28 16:41:00'),
(87, 29609638, 'ruthless', '2018-11-29 09:13:00'),
(88, 29609638, 'ruthless', '2018-11-30 09:10:00'),
(89, 29655000, 'martazevallos', '2018-11-02 08:57:00'),
(90, 29655000, 'martazevallos', '2018-11-02 11:47:00'),
(91, 29655000, 'martazevallos', '2018-11-02 16:09:00'),
(92, 29655000, 'martazevallos', '2018-11-02 17:18:00'),
(93, 29655000, 'martazevallos', '2018-11-03 08:17:00'),
(94, 29655000, 'martazevallos', '2018-11-03 11:03:00'),
(95, 29655000, 'martazevallos', '2018-11-05 08:22:00'),
(96, 29655000, 'martazevallos', '2018-11-05 17:44:00'),
(97, 29655000, 'martazevallos', '2018-11-06 08:51:00'),
(98, 29655000, 'martazevallos', '2018-11-06 10:43:00'),
(99, 29655000, 'martazevallos', '2018-11-07 08:15:00'),
(100, 29655000, 'martazevallos', '2018-11-07 12:19:00'),
(101, 29655000, 'martazevallos', '2018-11-07 16:01:00'),
(102, 29655000, 'martazevallos', '2018-11-07 17:42:00'),
(103, 29655000, 'martazevallos', '2018-11-08 08:43:00'),
(104, 29655000, 'martazevallos', '2018-11-08 12:11:00'),
(105, 29655000, 'martazevallos', '2018-11-08 16:23:00'),
(106, 29655000, 'martazevallos', '2018-11-08 17:36:00'),
(107, 29655000, 'martazevallos', '2018-11-09 08:14:00'),
(108, 29655000, 'martazevallos', '2018-11-09 10:52:00'),
(109, 29655000, 'martazevallos', '2018-11-09 16:32:00'),
(110, 29655000, 'martazevallos', '2018-11-09 18:00:00'),
(111, 29655000, 'martazevallos', '2018-11-10 09:01:00'),
(112, 29655000, 'martazevallos', '2018-11-10 10:03:00'),
(113, 29655000, 'martazevallos', '2018-11-12 08:30:00'),
(114, 29655000, 'martazevallos', '2018-11-12 11:20:00'),
(115, 29655000, 'martazevallos', '2018-11-13 16:46:00'),
(116, 29655000, 'martazevallos', '2018-11-13 17:27:00'),
(117, 29655000, 'martazevallos', '2018-11-14 08:33:00'),
(118, 29655000, 'martazevallos', '2018-11-15 11:36:00'),
(119, 29655000, 'martazevallos', '2018-11-15 16:56:00'),
(120, 29655000, 'martazevallos', '2018-11-15 17:05:00'),
(121, 29655000, 'martazevallos', '2018-11-16 08:34:00'),
(122, 29655000, 'martazevallos', '2018-11-17 09:09:00'),
(123, 29655000, 'martazevallos', '2018-11-19 08:19:00'),
(124, 41206272, 'Juan J.Guzm?n', '2018-11-05 08:03:00'),
(125, 41206272, 'Juan J.Guzm?n', '2018-11-05 18:39:00'),
(126, 41206272, 'Juan J.Guzm?n', '2018-11-06 12:41:00'),
(127, 41206272, 'Juan J.Guzm?n', '2018-11-06 18:42:00'),
(128, 41206272, 'Juan J.Guzm?n', '2018-11-07 19:23:00'),
(129, 41206272, 'Juan J.Guzm?n', '2018-11-10 08:29:00'),
(130, 41206272, 'Juan J.Guzm?n', '2018-11-10 15:54:00'),
(131, 41206272, 'Juan J.Guzm?n', '2018-11-10 15:54:00'),
(132, 41206272, 'Juan J.Guzm?n', '2018-11-14 11:49:00'),
(133, 41206272, 'Juan J.Guzm?n', '2018-11-15 08:19:00'),
(134, 41206272, 'Juan J.Guzm?n', '2018-11-16 08:06:00'),
(135, 41206272, 'Juan J.Guzm?n', '2018-11-17 09:23:00'),
(136, 41206272, 'Juan J.Guzm?n', '2018-11-17 12:32:00'),
(137, 41206272, 'Juan J.Guzm?n', '2018-11-19 07:56:00'),
(138, 41206272, 'Juan J.Guzm?n', '2018-11-19 18:43:00'),
(139, 41206272, 'Juan J.Guzm?n', '2018-11-20 10:59:00'),
(140, 41206272, 'Juan J.Guzm?n', '2018-11-21 08:30:00'),
(141, 41206272, 'Juan J.Guzm?n', '2018-11-21 18:11:00'),
(142, 41206272, 'Juan J.Guzm?n', '2018-11-22 08:11:00'),
(143, 41206272, 'Juan J.Guzm?n', '2018-11-22 17:56:00'),
(144, 41206272, 'Juan J.Guzm?n', '2018-11-23 08:22:00'),
(145, 41206272, 'Juan J.Guzm?n', '2018-11-23 19:36:00'),
(146, 41206272, 'Juan J.Guzm?n', '2018-11-26 09:27:00'),
(147, 41206272, 'Juan J.Guzm?n', '2018-11-26 18:39:00'),
(148, 41206272, 'Juan J.Guzm?n', '2018-11-27 08:41:00'),
(149, 41206272, 'Juan J.Guzm?n', '2018-11-27 18:43:00'),
(150, 41206272, 'Juan J.Guzm?n', '2018-11-28 07:55:00'),
(151, 41206272, 'Juan J.Guzm?n', '2018-11-28 18:43:00'),
(152, 41206272, 'Juan J.Guzm?n', '2018-11-29 08:10:00'),
(153, 41206272, 'Juan J.Guzm?n', '2018-11-29 18:52:00'),
(154, 41206272, 'Juan J.Guzm?n', '2018-11-30 08:06:00'),
(155, 41975568, 'Mercedes Ocampo', '2018-11-06 08:00:00'),
(156, 41975568, 'Mercedes Ocampo', '2018-11-06 18:00:00'),
(157, 41975568, 'Mercedes Ocampo', '2018-11-07 07:59:00'),
(158, 41975568, 'Mercedes Ocampo', '2018-11-07 17:55:00'),
(159, 41975568, 'Mercedes Ocampo', '2018-11-08 07:52:00'),
(160, 41975568, 'Mercedes Ocampo', '2018-11-09 07:53:00'),
(161, 41975568, 'Mercedes Ocampo', '2018-11-09 18:01:00'),
(162, 41975568, 'Mercedes Ocampo', '2018-11-12 07:51:00'),
(163, 41975568, 'Mercedes Ocampo', '2018-11-13 08:06:00'),
(164, 41975568, 'Mercedes Ocampo', '2018-11-13 17:48:00'),
(165, 41975568, 'Mercedes Ocampo', '2018-11-13 17:48:00'),
(166, 41975568, 'Mercedes Ocampo', '2018-11-13 17:56:00'),
(167, 41975568, 'Mercedes Ocampo', '2018-11-14 07:48:00'),
(168, 41975568, 'Mercedes Ocampo', '2018-11-14 17:54:00'),
(169, 41975568, 'Mercedes Ocampo', '2018-11-15 09:47:00'),
(170, 41975568, 'Mercedes Ocampo', '2018-11-16 08:02:00'),
(171, 41975568, 'Mercedes Ocampo', '2018-11-16 18:01:00'),
(172, 41975568, 'Mercedes Ocampo', '2018-11-17 09:17:00'),
(173, 41975568, 'Mercedes Ocampo', '2018-11-17 12:00:00'),
(174, 41975568, 'Mercedes Ocampo', '2018-11-17 12:00:00'),
(175, 41975568, 'Mercedes Ocampo', '2018-11-19 08:08:00'),
(176, 41975568, 'Mercedes Ocampo', '2018-11-19 17:53:00'),
(177, 41975568, 'Mercedes Ocampo', '2018-11-20 08:03:00'),
(178, 41975568, 'Mercedes Ocampo', '2018-11-20 17:59:00'),
(179, 41975568, 'Mercedes Ocampo', '2018-11-21 08:02:00'),
(180, 41975568, 'Mercedes Ocampo', '2018-11-21 17:50:00'),
(181, 41975568, 'Mercedes Ocampo', '2018-11-22 08:04:00'),
(182, 41975568, 'Mercedes Ocampo', '2018-11-22 17:56:00'),
(183, 41975568, 'Mercedes Ocampo', '2018-11-23 08:07:00'),
(184, 41975568, 'Mercedes Ocampo', '2018-11-23 17:54:00'),
(185, 41975568, 'Mercedes Ocampo', '2018-11-24 08:27:00'),
(186, 41975568, 'Mercedes Ocampo', '2018-11-24 11:24:00'),
(187, 41975568, 'Mercedes Ocampo', '2018-11-26 08:02:00'),
(188, 41975568, 'Mercedes Ocampo', '2018-11-26 17:55:00'),
(189, 41975568, 'Mercedes Ocampo', '2018-11-27 08:05:00'),
(190, 41975568, 'Mercedes Ocampo', '2018-11-27 18:02:00'),
(191, 41975568, 'Mercedes Ocampo', '2018-11-28 08:04:00'),
(192, 41975568, 'Mercedes Ocampo', '2018-11-28 17:52:00'),
(193, 41975568, 'Mercedes Ocampo', '2018-11-29 08:02:00'),
(194, 41975568, 'Mercedes Ocampo', '2018-11-29 18:06:00'),
(195, 41975568, 'Mercedes Ocampo', '2018-11-30 08:02:00'),
(196, 42064999, 'brunocano', '2018-11-02 09:11:00'),
(197, 42064999, 'brunocano', '2018-11-02 17:04:00'),
(198, 42064999, 'brunocano', '2018-11-03 08:06:00'),
(199, 42064999, 'brunocano', '2018-11-03 11:07:00'),
(200, 42064999, 'brunocano', '2018-11-05 08:12:00'),
(201, 42064999, 'brunocano', '2018-11-05 16:42:00'),
(202, 42064999, 'brunocano', '2018-11-06 08:40:00'),
(203, 42064999, 'brunocano', '2018-11-06 17:11:00'),
(204, 42064999, 'brunocano', '2018-11-07 08:38:00'),
(205, 42064999, 'brunocano', '2018-11-07 17:06:00'),
(206, 42064999, 'brunocano', '2018-11-08 08:44:00'),
(207, 42064999, 'brunocano', '2018-11-08 16:52:00'),
(208, 42064999, 'brunocano', '2018-11-09 08:08:00'),
(209, 42064999, 'brunocano', '2018-11-09 16:30:00'),
(210, 42064999, 'brunocano', '2018-11-10 09:26:00'),
(211, 42064999, 'brunocano', '2018-11-10 10:06:00'),
(212, 42064999, 'brunocano', '2018-11-12 08:32:00'),
(213, 42064999, 'brunocano', '2018-11-12 16:29:00'),
(214, 42064999, 'brunocano', '2018-11-13 10:57:00'),
(215, 42064999, 'brunocano', '2018-11-13 14:23:00'),
(216, 42064999, 'brunocano', '2018-11-14 08:26:00'),
(217, 42064999, 'brunocano', '2018-11-15 08:40:00'),
(218, 42064999, 'brunocano', '2018-11-15 17:15:00'),
(219, 42064999, 'brunocano', '2018-11-16 08:24:00'),
(220, 42064999, 'brunocano', '2018-11-17 10:27:00'),
(221, 42064999, 'brunocano', '2018-11-17 11:59:00'),
(222, 42064999, 'brunocano', '2018-11-19 08:16:00'),
(223, 42064999, 'brunocano', '2018-11-19 16:14:00'),
(224, 42064999, 'brunocano', '2018-11-20 08:36:00'),
(225, 42064999, 'brunocano', '2018-11-20 17:18:00'),
(226, 42064999, 'brunocano', '2018-11-21 08:40:00'),
(227, 42064999, 'brunocano', '2018-11-21 17:45:00'),
(228, 42064999, 'brunocano', '2018-11-22 08:40:00'),
(229, 42064999, 'brunocano', '2018-11-22 16:56:00'),
(230, 42064999, 'brunocano', '2018-11-23 08:38:00'),
(231, 42064999, 'brunocano', '2018-11-23 15:06:00'),
(232, 42064999, 'brunocano', '2018-11-24 09:14:00'),
(233, 42064999, 'brunocano', '2018-11-24 11:06:00'),
(234, 42064999, 'brunocano', '2018-11-26 08:25:00'),
(235, 42064999, 'brunocano', '2018-11-26 16:05:00'),
(236, 42064999, 'brunocano', '2018-11-27 08:28:00'),
(237, 42064999, 'brunocano', '2018-11-27 18:18:00'),
(238, 42064999, 'brunocano', '2018-11-28 08:30:00'),
(239, 42064999, 'brunocano', '2018-11-28 14:07:00'),
(240, 42064999, 'brunocano', '2018-11-29 08:36:00'),
(241, 42064999, 'brunocano', '2018-11-29 17:38:00'),
(242, 42407424, 'Yasmani Laime', '2018-11-22 18:30:00'),
(243, 42673960, 'hernanchalco', '2018-11-10 10:41:00'),
(244, 42673960, 'hernanchalco', '2018-11-10 10:41:00'),
(245, 42673960, 'hernanchalco', '2018-11-10 11:37:00'),
(246, 42673960, 'hernanchalco', '2018-11-12 08:05:00'),
(247, 42673960, 'hernanchalco', '2018-11-12 12:54:00'),
(248, 46507496, 'Nataly Sapacayo', '2018-11-02 08:11:00'),
(249, 46507496, 'Nataly Sapacayo', '2018-11-02 13:47:00'),
(250, 46507496, 'Nataly Sapacayo', '2018-11-02 14:57:00'),
(251, 46507496, 'Nataly Sapacayo', '2018-11-02 18:01:00'),
(252, 46507496, 'Nataly Sapacayo', '2018-11-03 08:08:00'),
(253, 46507496, 'Nataly Sapacayo', '2018-11-05 13:31:00'),
(254, 46507496, 'Nataly Sapacayo', '2018-11-06 08:31:00'),
(255, 46507496, 'Nataly Sapacayo', '2018-11-06 13:40:00'),
(256, 46507496, 'Nataly Sapacayo', '2018-11-06 14:34:00'),
(257, 46507496, 'Nataly Sapacayo', '2018-11-06 18:04:00'),
(258, 46507496, 'Nataly Sapacayo', '2018-11-06 18:07:00'),
(259, 46507496, 'Nataly Sapacayo', '2018-11-07 08:23:00'),
(260, 46507496, 'Nataly Sapacayo', '2018-11-07 13:54:00'),
(261, 46507496, 'Nataly Sapacayo', '2018-11-07 15:00:00'),
(262, 46507496, 'Nataly Sapacayo', '2018-11-07 17:58:00'),
(263, 46507496, 'Nataly Sapacayo', '2018-11-08 08:14:00'),
(264, 46507496, 'Nataly Sapacayo', '2018-11-08 13:53:00'),
(265, 46507496, 'Nataly Sapacayo', '2018-11-08 14:58:00'),
(266, 46507496, 'Nataly Sapacayo', '2018-11-08 18:02:00'),
(267, 46507496, 'Nataly Sapacayo', '2018-11-09 08:11:00'),
(268, 46507496, 'Nataly Sapacayo', '2018-11-09 14:01:00'),
(269, 46507496, 'Nataly Sapacayo', '2018-11-09 14:03:00'),
(270, 46507496, 'Nataly Sapacayo', '2018-11-09 14:58:00'),
(271, 46507496, 'Nataly Sapacayo', '2018-11-09 17:57:00'),
(272, 46507496, 'Nataly Sapacayo', '2018-11-10 08:15:00'),
(273, 46507496, 'Nataly Sapacayo', '2018-11-10 11:21:00'),
(274, 46507496, 'Nataly Sapacayo', '2018-11-12 08:09:00'),
(275, 46507496, 'Nataly Sapacayo', '2018-11-12 13:45:00'),
(276, 46507496, 'Nataly Sapacayo', '2018-11-12 14:51:00'),
(277, 46507496, 'Nataly Sapacayo', '2018-11-12 17:57:00'),
(278, 46507496, 'Nataly Sapacayo', '2018-11-13 07:59:00'),
(279, 46507496, 'Nataly Sapacayo', '2018-11-13 13:56:00'),
(280, 46507496, 'Nataly Sapacayo', '2018-11-13 15:00:00'),
(281, 46507496, 'Nataly Sapacayo', '2018-11-13 17:58:00'),
(282, 46507496, 'Nataly Sapacayo', '2018-11-13 18:00:00'),
(283, 46507496, 'Nataly Sapacayo', '2018-11-14 08:05:00'),
(284, 46507496, 'Nataly Sapacayo', '2018-11-14 14:05:00'),
(285, 46507496, 'Nataly Sapacayo', '2018-11-14 14:49:00'),
(286, 46507496, 'Nataly Sapacayo', '2018-11-14 18:01:00'),
(287, 46507496, 'Nataly Sapacayo', '2018-11-15 08:15:00'),
(288, 46507496, 'Nataly Sapacayo', '2018-11-15 15:04:00'),
(289, 46507496, 'Nataly Sapacayo', '2018-11-15 15:06:00'),
(290, 46507496, 'Nataly Sapacayo', '2018-11-16 08:06:00'),
(291, 46507496, 'Nataly Sapacayo', '2018-11-17 08:09:00'),
(292, 46507496, 'Nataly Sapacayo', '2018-11-19 08:23:00'),
(293, 46507496, 'Nataly Sapacayo', '2018-11-19 18:01:00'),
(294, 46507496, 'Nataly Sapacayo', '2018-11-20 08:13:00'),
(295, 46507496, 'Nataly Sapacayo', '2018-11-20 13:59:00'),
(296, 46507496, 'Nataly Sapacayo', '2018-11-20 14:58:00'),
(297, 46507496, 'Nataly Sapacayo', '2018-11-20 18:01:00'),
(298, 46507496, 'Nataly Sapacayo', '2018-11-21 08:06:00'),
(299, 46507496, 'Nataly Sapacayo', '2018-11-21 14:12:00'),
(300, 46507496, 'Nataly Sapacayo', '2018-11-21 14:53:00'),
(301, 46507496, 'Nataly Sapacayo', '2018-11-21 18:10:00'),
(302, 46507496, 'Nataly Sapacayo', '2018-11-22 08:15:00'),
(303, 46507496, 'Nataly Sapacayo', '2018-11-22 18:21:00'),
(304, 46507496, 'Nataly Sapacayo', '2018-11-23 08:10:00'),
(305, 46507496, 'Nataly Sapacayo', '2018-11-23 14:09:00'),
(306, 46507496, 'Nataly Sapacayo', '2018-11-23 14:58:00'),
(307, 46507496, 'Nataly Sapacayo', '2018-11-23 18:00:00'),
(308, 46507496, 'Nataly Sapacayo', '2018-11-24 08:14:00'),
(309, 46507496, 'Nataly Sapacayo', '2018-11-24 11:07:00'),
(310, 46507496, 'Nataly Sapacayo', '2018-11-24 11:10:00'),
(311, 46507496, 'Nataly Sapacayo', '2018-11-26 08:16:00'),
(312, 46507496, 'Nataly Sapacayo', '2018-11-26 13:49:00'),
(313, 46507496, 'Nataly Sapacayo', '2018-11-26 14:43:00'),
(314, 46507496, 'Nataly Sapacayo', '2018-11-26 18:05:00'),
(315, 46507496, 'Nataly Sapacayo', '2018-11-26 18:12:00'),
(316, 46507496, 'Nataly Sapacayo', '2018-11-27 08:14:00'),
(317, 46507496, 'Nataly Sapacayo', '2018-11-27 14:00:00'),
(318, 46507496, 'Nataly Sapacayo', '2018-11-27 14:48:00'),
(319, 46507496, 'Nataly Sapacayo', '2018-11-27 16:47:00'),
(320, 46507496, 'Nataly Sapacayo', '2018-11-28 08:09:00'),
(321, 46507496, 'Nataly Sapacayo', '2018-11-28 14:01:00'),
(322, 46507496, 'Nataly Sapacayo', '2018-11-28 15:00:00'),
(323, 46507496, 'Nataly Sapacayo', '2018-11-29 08:08:00'),
(324, 46507496, 'Nataly Sapacayo', '2018-11-29 14:04:00'),
(325, 46507496, 'Nataly Sapacayo', '2018-11-29 14:57:00'),
(326, 46507496, 'Nataly Sapacayo', '2018-11-29 18:12:00'),
(327, 46507496, 'Nataly Sapacayo', '2018-11-30 08:11:00'),
(328, 47195186, 'Karla Gil', '2018-11-02 10:01:00'),
(329, 47195186, 'Karla Gil', '2018-11-03 13:25:00'),
(330, 47195186, 'Karla Gil', '2018-11-05 13:09:00'),
(331, 47195186, 'Karla Gil', '2018-11-05 19:07:00'),
(332, 47195186, 'Karla Gil', '2018-11-06 08:13:00'),
(333, 47195186, 'Karla Gil', '2018-11-07 08:31:00'),
(334, 47195186, 'Karla Gil', '2018-11-07 18:15:00'),
(335, 47195186, 'Karla Gil', '2018-11-08 08:22:00'),
(336, 47195186, 'Karla Gil', '2018-11-08 18:49:00'),
(337, 47195186, 'Karla Gil', '2018-11-09 18:40:00'),
(338, 47195186, 'Karla Gil', '2018-11-10 09:48:00'),
(339, 47195186, 'Karla Gil', '2018-11-10 13:21:00'),
(340, 47195186, 'Karla Gil', '2018-11-12 08:17:00'),
(341, 47195186, 'Karla Gil', '2018-11-14 08:28:00'),
(342, 47195186, 'Karla Gil', '2018-11-15 08:37:00'),
(343, 47195186, 'Karla Gil', '2018-11-16 08:22:00'),
(344, 47195186, 'Karla Gil', '2018-11-16 17:50:00'),
(345, 47195186, 'Karla Gil', '2018-11-17 08:05:00'),
(346, 47195186, 'Karla Gil', '2018-11-17 12:11:00'),
(347, 47195186, 'Karla Gil', '2018-11-19 09:03:00'),
(348, 47195186, 'Karla Gil', '2018-11-20 09:18:00'),
(349, 47195186, 'Karla Gil', '2018-11-20 19:14:00'),
(350, 47195186, 'Karla Gil', '2018-11-21 09:03:00'),
(351, 47195186, 'Karla Gil', '2018-11-21 18:25:00'),
(352, 47195186, 'Karla Gil', '2018-11-22 10:44:00'),
(353, 47195186, 'Karla Gil', '2018-11-22 18:33:00'),
(354, 47195186, 'Karla Gil', '2018-11-23 08:38:00'),
(355, 47195186, 'Karla Gil', '2018-11-26 08:43:00'),
(356, 47195186, 'Karla Gil', '2018-11-27 08:45:00'),
(357, 47195186, 'Karla Gil', '2018-11-27 19:14:00'),
(358, 47195186, 'Karla Gil', '2018-11-28 08:35:00'),
(359, 47195186, 'Karla Gil', '2018-11-28 18:09:00'),
(360, 47195186, 'Karla Gil', '2018-11-29 08:58:00'),
(361, 47195186, 'Karla Gil', '2018-11-29 20:22:00'),
(362, 47195186, 'Karla Gil', '2018-11-30 08:19:00'),
(363, 47623525, 'Katerine Uturunko', '2018-11-03 07:51:00'),
(364, 47623525, 'Katerine Uturunko', '2018-11-03 12:38:00'),
(365, 47623525, 'Katerine Uturunko', '2018-11-05 08:25:00'),
(366, 47623525, 'Katerine Uturunko', '2018-11-05 14:02:00'),
(367, 47623525, 'Katerine Uturunko', '2018-11-05 19:06:00'),
(368, 47623525, 'Katerine Uturunko', '2018-11-06 08:10:00'),
(369, 47623525, 'Katerine Uturunko', '2018-11-06 14:31:00'),
(370, 47623525, 'Katerine Uturunko', '2018-11-06 18:59:00'),
(371, 47623525, 'Katerine Uturunko', '2018-11-07 08:04:00'),
(372, 47623525, 'Katerine Uturunko', '2018-11-07 13:54:00'),
(373, 47623525, 'Katerine Uturunko', '2018-11-07 18:26:00'),
(374, 47623525, 'Katerine Uturunko', '2018-11-08 08:36:00'),
(375, 47623525, 'Katerine Uturunko', '2018-11-08 13:43:00'),
(376, 47623525, 'Katerine Uturunko', '2018-11-08 18:45:00'),
(377, 47623525, 'Katerine Uturunko', '2018-11-09 08:24:00'),
(378, 47623525, 'Katerine Uturunko', '2018-11-09 13:58:00'),
(379, 47623525, 'Katerine Uturunko', '2018-11-09 14:55:00'),
(380, 47623525, 'Katerine Uturunko', '2018-11-09 18:17:00'),
(381, 47623525, 'Katerine Uturunko', '2018-11-10 09:01:00'),
(382, 47623525, 'Katerine Uturunko', '2018-11-12 08:17:00'),
(383, 47623525, 'Katerine Uturunko', '2018-11-12 13:45:00'),
(384, 47623525, 'Katerine Uturunko', '2018-11-12 17:57:00'),
(385, 47623525, 'Katerine Uturunko', '2018-11-13 07:48:00'),
(386, 47623525, 'Katerine Uturunko', '2018-11-13 18:15:00'),
(387, 47623525, 'Katerine Uturunko', '2018-11-14 08:10:00'),
(388, 47623525, 'Katerine Uturunko', '2018-11-14 15:08:00'),
(389, 47623525, 'Katerine Uturunko', '2018-11-15 08:21:00'),
(390, 47623525, 'Katerine Uturunko', '2018-11-16 18:27:00'),
(391, 47623525, 'Katerine Uturunko', '2018-11-17 13:57:00'),
(392, 47623525, 'Katerine Uturunko', '2018-11-19 08:30:00'),
(393, 47623525, 'Katerine Uturunko', '2018-11-19 19:15:00'),
(394, 47623525, 'Katerine Uturunko', '2018-11-20 08:45:00'),
(395, 47623525, 'Katerine Uturunko', '2018-11-20 19:00:00'),
(396, 47623525, 'Katerine Uturunko', '2018-11-21 07:40:00'),
(397, 47623525, 'Katerine Uturunko', '2018-11-21 17:50:00'),
(398, 47623525, 'Katerine Uturunko', '2018-11-22 08:21:00'),
(399, 47623525, 'Katerine Uturunko', '2018-11-22 19:08:00'),
(400, 47623525, 'Katerine Uturunko', '2018-11-23 08:22:00'),
(401, 47623525, 'Katerine Uturunko', '2018-11-23 18:21:00'),
(402, 47623525, 'Katerine Uturunko', '2018-11-24 11:25:00'),
(403, 47623525, 'Katerine Uturunko', '2018-11-26 08:36:00'),
(404, 47623525, 'Katerine Uturunko', '2018-11-26 14:44:00'),
(405, 47623525, 'Katerine Uturunko', '2018-11-26 18:20:00'),
(406, 47623525, 'Katerine Uturunko', '2018-11-27 08:19:00'),
(407, 47623525, 'Katerine Uturunko', '2018-11-27 18:39:00'),
(408, 47623525, 'Katerine Uturunko', '2018-11-28 07:54:00'),
(409, 47623525, 'Katerine Uturunko', '2018-11-28 14:01:00'),
(410, 47623525, 'Katerine Uturunko', '2018-11-28 18:31:00'),
(411, 47623525, 'Katerine Uturunko', '2018-11-29 13:56:00'),
(412, 47623525, 'Katerine Uturunko', '2018-11-29 19:20:00'),
(413, 47623525, 'Katerine Uturunko', '2018-11-30 08:37:00'),
(414, 72654091, 'angelohuancapaza', '2018-11-02 08:46:00'),
(415, 72654091, 'angelohuancapaza', '2018-11-02 18:34:00'),
(416, 72654091, 'angelohuancapaza', '2018-11-03 09:43:00'),
(417, 72654091, 'angelohuancapaza', '2018-11-03 13:27:00'),
(418, 72654091, 'angelohuancapaza', '2018-11-05 08:15:00'),
(419, 72654091, 'angelohuancapaza', '2018-11-05 16:08:00'),
(420, 72654091, 'angelohuancapaza', '2018-11-06 08:10:00'),
(421, 72654091, 'angelohuancapaza', '2018-11-06 18:12:00'),
(422, 72654091, 'angelohuancapaza', '2018-11-07 08:20:00'),
(423, 72654091, 'angelohuancapaza', '2018-11-07 17:30:00'),
(424, 72654091, 'angelohuancapaza', '2018-11-09 08:57:00'),
(425, 72654091, 'angelohuancapaza', '2018-11-09 17:45:00'),
(426, 72654091, 'angelohuancapaza', '2018-11-10 09:31:00'),
(427, 72654091, 'angelohuancapaza', '2018-11-10 13:13:00'),
(428, 72654091, 'angelohuancapaza', '2018-11-12 08:01:00'),
(429, 72654091, 'angelohuancapaza', '2018-11-12 16:43:00'),
(430, 72654091, 'angelohuancapaza', '2018-11-13 08:10:00'),
(431, 72654091, 'angelohuancapaza', '2018-11-13 18:03:00'),
(432, 72654091, 'angelohuancapaza', '2018-11-15 08:03:00'),
(433, 72654091, 'angelohuancapaza', '2018-11-16 08:10:00'),
(434, 72654091, 'angelohuancapaza', '2018-11-16 18:38:00'),
(435, 72654091, 'angelohuancapaza', '2018-11-17 09:37:00'),
(436, 72654091, 'angelohuancapaza', '2018-11-17 12:32:00'),
(437, 72654091, 'angelohuancapaza', '2018-11-19 08:31:00'),
(438, 72654091, 'angelohuancapaza', '2018-11-19 16:45:00'),
(439, 72654091, 'angelohuancapaza', '2018-11-20 08:04:00'),
(440, 72654091, 'angelohuancapaza', '2018-11-20 18:09:00'),
(441, 72654091, 'angelohuancapaza', '2018-11-21 08:12:00'),
(442, 72654091, 'angelohuancapaza', '2018-11-21 16:51:00'),
(443, 72654091, 'angelohuancapaza', '2018-11-22 08:21:00'),
(444, 72654091, 'angelohuancapaza', '2018-11-22 20:03:00'),
(445, 72654091, 'angelohuancapaza', '2018-11-23 08:13:00'),
(446, 72654091, 'angelohuancapaza', '2018-11-23 18:16:00'),
(447, 72654091, 'angelohuancapaza', '2018-11-24 09:24:00'),
(448, 72654091, 'angelohuancapaza', '2018-11-24 12:26:00'),
(449, 72654091, 'angelohuancapaza', '2018-11-26 08:51:00'),
(450, 72654091, 'angelohuancapaza', '2018-11-26 18:27:00'),
(451, 72654091, 'angelohuancapaza', '2018-11-27 08:21:00'),
(452, 72654091, 'angelohuancapaza', '2018-11-27 18:43:00'),
(453, 72654091, 'angelohuancapaza', '2018-11-28 08:18:00'),
(454, 72654091, 'angelohuancapaza', '2018-11-28 18:18:00'),
(455, 72654091, 'angelohuancapaza', '2018-11-28 18:18:00'),
(456, 72654091, 'angelohuancapaza', '2018-11-29 08:12:00'),
(457, 72654091, 'angelohuancapaza', '2018-11-29 18:52:00'),
(458, 72654091, 'angelohuancapaza', '2018-11-30 08:14:00'),
(459, 77503561, 'jordylopezternero', '2018-11-02 15:34:00');

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
(1, 'Nombre', 'Paterno', 'Materno', 98798798, 'Cargo', '2018-12-18', NULL, 897979, 987897979, 798798798, 'Direccion', 'Distrito', 'email@email', '987a97987', '9a8s7d987', 1, 'Carrera', 'Institucion', 1, 'Ob', NULL, 30, 'CUSSP', 'SNP', 'Flujo', 'Mixta', 1, 1),
(2, 'Nombre', 'Paterno', 'Materno', 12346678, 'Cargo', '2019-01-01', '2019-01-02', 979798, 654654654, 654654654, 'Direccion', 'Distrito', 'email@email', '987a97987', '9a8s7d987', 1, 'Carrera', 'Institucion', 1, 'Obs', '2018-12-04', 30, 'CUSSP', 'SNP', 'Flujo', 'Mixta', 1, 1),
(3, 'Nombre', 'Paterno', 'Materno', 98798789, 'Cargo', '2018-12-20', '2019-01-02', 987987, 987987987, 987987897, 'Direccion', 'Distrito', 'email@email', '987a97987', '9a8s7d987', 1, 'Carrera', 'Institucion', 1, 'OB', '2018-12-24', 30, 'CUSSP', 'SNP', 'Flujo', 'Mixta', 1, 0),
(4, 'Nombre', 'Paterno', 'Materno', 79878979, 'Cargo', '2019-01-05', '2019-01-01', 987987, 789798797, 987987897, 'Direccion', 'Distrito', 'email@email', '987a97987', '9a8s7d987', 1, 'Carrera', 'Institucion', 0, 'kmsaklmd', '2018-12-04', 30, 'CUSSP', 'SNP', 'Flujo', 'Mixta', 0, 0);

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
(57, 'Juan Fernando Urrego', 'juan', '$2a$07$asxx54ahjppf45sd87a5auwRi.z6UsW7kVIpm0CUEuCpmsvT2sG6O', 'Vendedor', 'vistas/img/usuarios/juan/461.jpg', 0, 1, '2017-12-21 12:07:24', '2018-12-01 16:02:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 982108377, 1, '2018-12-31 10:49:49', '2018-12-31 15:49:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Maritza Luna', 'mluna', '$2a$07$asxx54ahjppf45sd87a5aumawKBqkKu/t5yVn5oVpbu8.I0unXqba', 'Especial', 'vistas/img/usuarios/mluna/992.png', 0, 1, '2018-11-02 15:58:48', '2018-11-02 20:58:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Demo', 'demo', '$2a$07$asxx54ahjppf45sd87a5au6eB6pERIOFn89hUR262rtQP3G4atVku', 'Vendedor', '', 982108377, 1, '2018-12-09 23:55:23', '2018-12-10 04:55:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Samuel Jackson', 'sjackson', '$2a$07$asxx54ahjppf45sd87a5aumawKBqkKu/t5yVn5oVpbu8.I0unXqba', 'Vendedor', '', 987654321, 1, '2018-12-12 17:41:56', '2018-12-12 22:41:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Angelo Ruben Huancapaza Ponce', 'aponce', '$2a$07$asxx54ahjppf45sd87a5aumawKBqkKu/t5yVn5oVpbu8.I0unXqba', 'Vendedor', '', 532094, 1, '2018-12-10 00:01:46', '2018-12-10 05:01:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '0', 0, '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `seal_e`
--
ALTER TABLE `seal_e`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
