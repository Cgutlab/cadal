-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-04-2019 a las 20:13:41
-- Versión del servidor: 10.2.23-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cadalcom_cadal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` enum('direccion','telefono','mail') COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `tipo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'direccion', 'Martiniano Leguizamón 3132, CABA', NULL, '2018-10-22 18:30:06'),
(2, 'telefono', '(011) 4601-8504', NULL, '2019-04-15 18:30:15'),
(3, 'mail', 'contacto@cadal.com.ar', NULL, '2019-04-16 16:34:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generales`
--

CREATE TABLE `generales` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_subfamilia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_destacada` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabla` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generales`
--

INSERT INTO `generales` (`id`, `id_subfamilia`, `titulo`, `imagen_destacada`, `contenido`, `tabla`, `orden`, `created_at`, `updated_at`) VALUES
(2, '2', '100 ml. Boca 20', 'img/productos/30_100ml B-20.jpeg', NULL, NULL, 'cc', '2018-04-23 16:55:03', '2018-10-24 21:56:05'),
(3, '2', '50 ml. Boca 20', 'img/productos/30_50ml B-20.jpeg', NULL, NULL, 'bb', '2018-04-25 20:46:21', '2018-10-24 21:56:17'),
(5, '5', '500 ml. Boca 28', 'img/productos/5_dest003.jpg', '<p>Botella cuadrada con capacidad para 500 ml. con tapa a rosca con guarnici&oacute;n de polietileno expandido que asegura su hermeticidad evitando perdidas.</p>\r\n\r\n<p><strong>Usos </strong></p>\r\n\r\n<p>- L&iacute;quidos varios</p>\r\n\r\n<p>- Medicamentos</p>\r\n\r\n<p>- L&iacute;quidos corrosivos</p>\r\n\r\n<p>- L&iacute;quidos carbonatados</p>', NULL, 'aa', '2018-05-03 22:11:29', '2018-05-04 14:23:44'),
(6, '2', '25 ml. Boca 20', 'img/productos/30_25ml.jpeg', NULL, NULL, 'aa', '2018-05-03 22:16:54', '2018-10-24 21:52:21'),
(7, '2', '125 ml. Boca 20', 'img/productos/30_125ml B-20.jpeg', NULL, NULL, 'dd', '2018-05-03 22:19:57', '2018-10-24 21:56:36'),
(8, '2', '250 ml. Boca 20', 'img/productos/30_250ml B-20.jpeg', NULL, NULL, 'ee', '2018-05-03 22:20:25', '2018-10-24 21:56:50'),
(9, '2', '1000 ml. Boca 28', 'img/productos/30_1000ml B-28.jpeg', NULL, NULL, 'ff', '2018-05-03 22:20:58', '2018-10-24 22:17:57'),
(11, '2', '500 ml. Boca 30 con colgante', 'img/productos/30_500ml B-30.jpeg', NULL, NULL, 'g', '2018-05-03 22:26:19', '2018-10-24 22:18:15'),
(13, '2', '500 ml. Boca 28 con colgante', 'img/productos/30_500ml B-28 CC.jpeg', NULL, NULL, 'fb', '2018-05-03 22:31:15', '2018-10-24 22:18:32'),
(15, '3', '50 ml.  BOCA 20', 'img/productos/30_50.jpeg', NULL, NULL, 'aa', '2018-05-03 22:48:08', '2018-10-24 23:35:17'),
(16, '3', '100 ml. BOCA 20', 'img/productos/30_100.jpeg', NULL, NULL, 'bb', '2018-05-03 22:50:35', '2018-10-24 23:35:26'),
(17, '3', '200 ml. Boca 20', 'img/productos/30_200.jpeg', NULL, NULL, 'cc', '2018-05-04 14:27:19', '2018-10-24 23:35:38'),
(18, '3', '250 ml. Boca 20', 'img/productos/30_250.jpeg', NULL, NULL, 'dd', '2018-05-04 14:28:40', '2018-10-24 23:35:51'),
(19, '4', '250 ml. RP-28', 'img/productos/31_250ml RP-28 Blanco.jpeg', NULL, NULL, 'aa', '2018-05-04 14:31:46', '2019-01-22 22:54:33'),
(21, '4', '500 ml. RP-28', 'img/productos/31_500ml RP28 Blanco.jpeg', NULL, NULL, 'bb', '2018-05-04 14:33:00', '2019-01-22 22:56:04'),
(22, '4', '1000 ml. RP-28', 'img/productos/31_1000ml RP-28 Blanco.jpeg', NULL, NULL, 'cc', '2018-05-04 14:36:25', '2019-01-22 22:48:37'),
(23, '2', '500 ml. Boca 20', 'img/productos/30_500ml B-20.jpeg', NULL, NULL, 'fa', '2018-05-08 20:06:24', '2018-10-24 21:55:11'),
(24, '3', '500 ml. Boca 20', 'img/productos/30_500.jpeg', NULL, NULL, 'ee', '2018-06-01 22:48:10', '2018-10-24 23:36:01'),
(25, '4', 'Tapa blanca RP-28 con precinto', 'img/productos/31_WhatsApp Image 2018-10-24 at 17.48.26 (5).jpeg', NULL, NULL, 'ee', '2018-06-01 22:49:57', '2018-10-24 23:52:22'),
(26, '2', '500 ml. Boca 28 sin colgante', 'img/productos/30_500ml B-28.jpeg', NULL, NULL, 'fd', '2018-10-01 23:35:52', '2018-10-24 22:18:49'),
(27, '2', '1000 ml. Boca 20', 'img/productos/30_1000ml B-20.jpeg', NULL, NULL, 'fab', '2018-10-11 18:44:52', '2018-10-24 22:03:25'),
(28, '4', 'Inserto RP-28', 'img/productos/31_WhatsApp Image 2018-10-24 at 17.48.26 (6).jpeg', NULL, NULL, 'gg', '2018-10-11 20:07:18', '2018-10-24 23:52:41'),
(30, '3', 'Tapa inviolable RP-28', 'img/productos/30_Tapas.jpeg', NULL, NULL, 'zz', '2018-10-24 23:40:03', '2018-10-24 23:40:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `homes`
--

INSERT INTO `homes` (`id`, `titulo`, `contenido`, `link`, `created_at`, `updated_at`) VALUES
(1, '<p>CADAL S.R.L</p>', '<p>INYECCI&Oacute;N Y SOPLADO PARA TERCEROS</p>', NULL, NULL, '2019-04-16 20:42:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ruta` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('header','footer','favicon') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `ruta`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'img/logos/1_loooo.fw.png', 'header', NULL, '2019-04-11 21:24:47'),
(2, 'img/logos/1_logofootercadal.png', 'footer', NULL, '2018-05-03 21:36:54'),
(3, 'img/logos/1_CADAL123.jpg', 'favicon', NULL, '2019-04-10 16:35:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seccion` enum('home','empresa','productos','inyeccion','contacto','buscador','impresion','matriceria') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `seccion`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'home', 'cadal srl, CADAL, SRL, Cadal Srl,', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:03'),
(2, 'empresa', 'cadal srl', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:25'),
(3, 'contacto', 'cadal srl', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:29'),
(4, 'inyeccion', 'cadal srl', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:34'),
(5, 'matriceria', 'cadal srl', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:39'),
(7, 'impresion', 'cadal srl', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:43'),
(8, 'productos', 'cadal srl', 'CADAL SRL - INDUSTRIA PLÁSTICA - INYECCIÓN Y SOPLADO', NULL, '2019-04-23 15:47:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_29_124730_create_red_social_table', 1),
(4, '2017_11_30_141737_create_logos_table', 1),
(5, '2017_11_30_141847_create_empresa_table', 1),
(6, '2017_11_30_141919_create_metadatos_table', 1),
(7, '2017_12_04_145518_create_slider_table', 1),
(8, '2017_12_05_120523_create_productos_table', 1),
(9, '2017_12_11_114415_create_nuestra_empresa_table', 1),
(10, '2017_12_21_123500_create_productos_imagenes_table', 1),
(11, '2018_01_17_114604_create_home_table', 1),
(12, '2018_02_23_142652_create_servicios_table', 1),
(13, '2018_02_23_152421_create_generales_table', 1),
(14, '2018_04_19_131335_subfamilias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuestra_empresa`
--

CREATE TABLE `nuestra_empresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nuestra_empresa`
--

INSERT INTO `nuestra_empresa` (`id`, `titulo`, `contenido`, `imagen`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align:center\"><strong>&iquest;QU&Eacute; HACEMOS?</strong></p>', '<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><strong>L&Iacute;NEA DE ENVASES PL&Aacute;STICOS</strong> PARA PRODUCTOS AGROVETERINARIOS Y OTROS, EN DISTINTOS COLORES Y MATERIALES.-</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><strong>L&Iacute;NEA DE GRIFER&Iacute;A</strong> INYECTADA EN ABS LISTA PARA CROMAR Y ACCESORIOS.-</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><strong>SOPLADO DE PL&Aacute;STICO</strong> PARA TERCEROS.-</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><strong>INYECCI&Oacute;N DE PL&Aacute;STICO</strong> PARA TERCEROS.-</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><strong>PROTOTIPOS</strong> EN IMPRESI&Oacute;N 3D.-</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><span style=\"font-size:16px\"><strong>MATRICER&Iacute;A</strong>.-</span></div>', 'img/nuestra/2_Línea de frascos ok.jpeg', NULL, '2019-04-15 16:45:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `link`, `nombre`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'img/productos/4_Principal.jpeg', 'familia/1/subproducto', '<p>Frascos L&iacute;nea Redonda</p>', 'aa', NULL, '2019-04-15 20:49:47'),
(2, 'img/productos/4_Principal 1.jpeg', 'familia/3/subproducto', '<p>Frascos L&iacute;nea Rectangular</p>', 'bb', NULL, '2019-04-15 20:49:57'),
(3, 'img/productos/4_WhatsApp Image 2019-04-15 at 15.35.47 (1).jpeg', 'inyeccion', '<p>Inyecci&oacute;n en Distintos Materiales</p>', 'cc', NULL, '2019-04-17 15:40:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_imagenes`
--

CREATE TABLE `productos_imagenes` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_generales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_imagenes`
--

INSERT INTO `productos_imagenes` (`id`, `imagen`, `id_generales`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'img/familia/1_s.png', '1', 'aa', '2018-04-20 22:45:17', '2018-04-20 22:45:17'),
(2, 'img/familia/1_b.png', '1', 'aa', '2018-04-23 15:48:05', '2018-04-23 15:48:05'),
(3, 'img/familia/1_b.png', '1', 'aa', '2018-04-23 15:53:54', '2018-04-23 15:53:54'),
(4, 'img/familia/1_b.png', '1', 'aa', '2018-04-23 16:16:16', '2018-04-23 16:16:16'),
(5, 'img/familia/1_b.png', '1', 'aa', '2018-04-23 16:16:17', '2018-04-23 16:16:17'),
(6, 'img/productos/1_b.png', '1', 'aa', '2018-04-23 16:53:53', '2018-04-23 16:53:53'),
(9, 'img/productos/4_001reparacion.png', '4', 'aa', '2018-04-23 17:06:22', '2018-04-23 17:06:22'),
(11, 'img/galeria_productos/48_50ml B-20.jpeg', '3', 'aa', '2018-04-25 20:46:21', '2019-01-23 17:11:37'),
(12, 'img/productos/4_empresa.png', '4', 'aa', '2018-04-25 21:52:52', '2018-04-25 21:52:52'),
(14, 'img/productos/5_dest003.jpg', '5', 'aa', '2018-05-03 22:11:29', '2018-05-03 22:11:29'),
(15, 'img/galeria_productos/48_25ml B-20.jpeg', '6', 'aa', '2018-05-03 22:16:54', '2019-01-23 17:12:04'),
(16, 'img/galeria_productos/48_125ml B-20.jpeg', '7', 'aa', '2018-05-03 22:19:57', '2019-01-23 17:13:24'),
(17, 'img/galeria_productos/48_250ml B-20.jpeg', '8', 'aa', '2018-05-03 22:20:25', '2019-01-23 17:20:20'),
(18, 'img/galeria_productos/48_1000ml B-28.jpeg', '9', 'aa', '2018-05-03 22:20:58', '2019-01-23 17:21:17'),
(20, 'img/productos/10_linea_redonda_rp-28-c.jpg', '10', 'aa', '2018-05-03 22:23:27', '2018-05-03 22:23:27'),
(21, 'img/galeria_productos/48_500ml B-30.jpeg', '11', 'aa', '2018-05-03 22:26:19', '2019-01-23 17:21:43'),
(22, 'img/galeria_productos/37_2-004.jpg', '12', 'aa', '2018-05-03 22:28:43', '2018-06-01 22:40:15'),
(23, 'img/galeria_productos/48_500ml B-28 CC.jpeg', '13', 'aa', '2018-05-03 22:31:15', '2019-01-23 17:30:16'),
(24, 'img/productos/14_linea-redonda-boca-20-500.jpg', '14', 'aa', '2018-05-03 22:33:02', '2018-05-03 22:33:02'),
(25, 'img/galeria_productos/37_2-021_.jpg', '15', 'aa', '2018-05-03 22:48:08', '2018-06-01 22:44:04'),
(26, 'img/galeria_productos/37_2-018_.jpg', '16', 'aa', '2018-05-03 22:50:35', '2018-06-01 22:44:21'),
(27, 'img/galeria_productos/37_2-019_.jpg', '17', 'aa', '2018-05-04 14:27:19', '2018-06-01 22:44:44'),
(28, 'img/galeria_productos/37_2-020_.jpg', '18', 'aa', '2018-05-04 14:28:40', '2018-06-01 22:45:46'),
(29, 'img/galeria_productos/48_250ml RP-28 con tapa.jpeg', '19', 'aa', '2018-05-04 14:31:46', '2019-01-23 18:23:50'),
(30, 'img/productos/20_linea_redonda_rp-28-d.jpg', '20', 'aa', '2018-05-04 14:33:00', '2018-05-04 14:33:00'),
(31, 'img/galeria_productos/48_500ml RP-28 con tapa.jpeg', '21', 'aa', '2018-05-04 14:33:00', '2019-01-23 18:28:39'),
(32, 'img/galeria_productos/48_1000ml RP-28 con tapa.jpeg', '22', 'aa', '2018-05-04 14:36:25', '2019-01-23 18:29:08'),
(33, 'img/galeria_productos/48_1000ml RP-28.jpeg', '22', 'bb', '2018-05-04 14:36:56', '2019-01-23 18:29:21'),
(34, 'img/galeria_productos/48_100ml B-20.jpeg', '2', 'bb', '2018-05-04 15:05:39', '2019-01-23 17:09:50'),
(35, 'img/galeria_productos/48_500ml B-20.jpeg', '23', 'aa', '2018-05-08 20:06:24', '2019-01-23 17:30:39'),
(37, 'img/galeria_productos/37_2-017_linea-rectangular-b-20-500.jpg', '18', 'bb', '2018-06-01 22:46:25', '2018-06-01 22:46:25'),
(38, 'img/galeria_productos/38_2-017_linea-rectangular-b-20-500_z.jpg', '18', 'cc', '2018-06-01 22:46:32', '2018-06-01 22:46:32'),
(39, 'img/productos/24_2-022_.jpg', '24', 'aa', '2018-06-01 22:48:10', '2018-06-01 22:48:10'),
(40, 'img/galeria_productos/40_2-023_.jpg', '24', 'bb', '2018-06-01 22:48:50', '2018-06-01 22:48:50'),
(42, 'img/productos/25_2-006.jpg', '25', 'aa', '2018-06-01 22:49:56', '2018-06-01 22:49:56'),
(43, 'img/galeria_productos/48_500ml B-28.jpeg', '26', 'aa', '2018-10-01 23:35:52', '2019-01-23 17:31:12'),
(44, 'img/galeria_productos/48_1000ml B-20.jpeg', '27', 'aa', '2018-10-11 18:44:52', '2019-01-23 17:38:55'),
(45, 'img/productos/28_Inserto RP-28.jpeg', '28', 'aa', '2018-10-11 20:07:18', '2018-10-11 20:07:18'),
(46, 'img/productos/29_Tapa Blanca RP-28 Sin precinto.jpeg', '29', 'aa', '2018-10-11 20:21:13', '2018-10-11 20:21:13'),
(47, 'img/productos/30_Tapas.jpeg', '30', 'aa', '2018-10-24 23:40:03', '2018-10-24 23:40:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` enum('header','footer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` enum('inyeccion','impresion','matricerio') COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `imagen`, `titulo`, `subtitulo`, `seccion`, `contenido`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'img/servicio/5_WhatsApp Image 2019-04-15 at 13.08.09.jpeg', '<p><span style=\"color:#000000\"><strong>INYECCI&Oacute;N PARA TERCEROS</strong></span></p>', '<div><em>Si ya tiene la matriz o quiere dise&ntilde;ar una pieza nueva no dude en consultar.</em></div>', 'inyeccion', '<p><span style=\"color:#000000\"><u><strong><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">L&Iacute;NEA DE&nbsp;<strong>GRIFER&Iacute;A EN ABS PARA CROMAR Y ACCESORIOS:</strong></span></strong></u></span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-CAMPANAS</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-VOLANTES</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-TERMINALES</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-CORTACHORROS</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-FILTROS DE LLUVIA</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-ARANDELAS</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-BOTONCITOS FR&Iacute;O/CALIENTE</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">-TAPONES</span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">Consultar por cantidades</span></p>', '', '', '', '', 'aa', '2018-04-23 22:32:35', '2019-04-16 20:40:20'),
(3, 'img/servicio/3_impresion.jpg', '<p><strong><span style=\"color:#000000\">Materializamos tus ideas</span></strong></p>', NULL, 'impresion', '<p>-Modelos</p>\r\n\r\n<p>-Prototipos</p>\r\n\r\n<p>-Producci&oacute;n a baja escala</p>\r\n\r\n<p>-Materiales:&nbsp;PLA, ABS, PC, NYLON, etc</p>', '', '', '', '', 'aa', '2018-05-03 21:46:53', '2019-04-15 23:36:41'),
(4, 'img/servicio/5_matriceria.jpg', '<p>Realizamos matrices y arreglos</p>', NULL, 'matricerio', '<p><u><strong>Consultar por:</strong></u></p>\r\n\r\n<p>-Matriz&nbsp;a partir de un plano.</p>\r\n\r\n<p>-Matriz a partir de una pieza.</p>\r\n\r\n<p>-Arreglo de una matriz.</p>', '', '', '', '', 'aa', '2018-05-03 21:54:05', '2019-04-15 23:51:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion` enum('home','empresa','soplado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `imagen`, `titulo`, `subtitulo`, `orden`, `seccion`, `created_at`, `updated_at`) VALUES
(3, 'img/slider/14_mas atras.jpeg', NULL, NULL, 'aa', 'soplado', '2018-04-26 20:53:58', '2019-01-22 23:37:46'),
(6, 'img/slider/14_Linea rosca.jpeg', NULL, NULL, 'bb', 'soplado', '2018-05-08 14:16:39', '2019-01-22 23:35:29'),
(11, 'img/slider/11_ccc.jpeg', NULL, NULL, 'cc', 'soplado', '2018-10-12 22:19:13', '2018-10-12 22:19:13'),
(12, 'img/slider/12_TAPAS.jpeg', NULL, NULL, 'AA', 'empresa', '2018-10-12 23:33:32', '2018-10-12 23:33:32'),
(13, 'img/slider/14_FLIA COMPLETA.jpeg', NULL, NULL, 'a', 'home', '2019-01-22 21:39:17', '2019-01-22 22:33:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subfamilias`
--

CREATE TABLE `subfamilias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_familia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subfamilias`
--

INSERT INTO `subfamilias` (`id`, `imagen`, `titulo`, `id_familia`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'img/familia/5_PrincipalRedonda.jpeg', 'Línea Redonda', NULL, 'aa', '2018-04-20 17:41:35', '2019-01-23 17:44:38'),
(2, 'img/familia/5_B-20.jpeg', 'Frascos Boca Vacuna', '1', 'bb', '2018-04-25 21:36:18', '2018-10-24 22:38:55'),
(3, 'img/familia/5_Principal 1.jpeg', 'Línea Rectangular', NULL, 'bb', '2018-04-25 21:49:47', '2018-10-24 23:16:01'),
(4, 'img/familia/5_B-rosca.jpeg', 'Frascos Boca Rosca', '1', 'bb', NULL, '2018-10-24 22:45:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` enum('administrador','usuario') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'usuario',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `username`, `password`, `nivel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pablo', 'pablo', '$2y$10$J9yWqK2V53YFaL8UfgoRmemMn14VAyFGxV9g33VzjeFGQUQCv86Wu', 'administrador', 'bVD8L9oV4zKFAtHbZRNOMSrT6kaTWzlldtNF2bdLYsekYxXC17KRBmkcc4kx', '2018-04-19 19:56:41', '2018-04-19 19:56:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generales`
--
ALTER TABLE `generales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nuestra_empresa`
--
ALTER TABLE `nuestra_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subfamilias`
--
ALTER TABLE `subfamilias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `generales`
--
ALTER TABLE `generales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `nuestra_empresa`
--
ALTER TABLE `nuestra_empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `subfamilias`
--
ALTER TABLE `subfamilias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
