-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-04-2019 a las 23:02:21
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
-- Base de datos: `carrara_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE `catalogos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` int(191) DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catalogos`
--

INSERT INTO `catalogos` (`id`, `title`, `image`, `cover`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Hidromasajes en Acrílico', 'catalogo__catalogo carrara.pdf', 1, 'aa', '2018-11-08 16:29:40', '2018-11-20 22:39:12'),
(2, 'Spa / Minipiscinas', 'catalogo__catalogo carrara.pdf', 2, 'bb', '2018-11-08 16:30:12', '2018-11-20 22:39:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `usuario`, `clave`, `telefono`, `correo`, `direccion`, `active`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'franco', 'franco', 'franco', 'franco', '4247753244', 'franco.gib11@gmail.com', 'urb santa rosa av armando reveron', 1, 'aa', '2018-09-13 18:02:16', '2018-11-21 18:13:50'),
(2, 'Pablo', 'Cabañuz', 'pablo', 'pablo', '56546565', 'pcabanuz@osole.es', 'AV JUAN B ALBERDI 1576 1C', 0, NULL, '2018-11-21 16:19:20', '2018-11-21 16:19:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `type`, `description`, `icon`, `order`, `created_at`, `updated_at`) VALUES
(1, 'ubicacion', 'Av. Nicolás Milazzo 3251 y 150 - B1885BSB Parque Industrial Plátanos - Predio 8B, Berazategui, Provincia de Buenos Aires ', 'fas fa-map-marker-alt', 'aa', NULL, NULL),
(2, 'telefono', '(54 11) 4215-0131', 'fas fa-phone', 'bb', NULL, NULL),
(3, 'correo', 'carrarahidromasajes@gmail.com', 'fas fa-paper-plane', 'cc', NULL, NULL),
(4, 'mapa', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.651491837858!2d-58.17600856988942!3d-34.78954785852442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3263147b1e649%3A0x558c1a34c3fe8037!2sParque+Industrial+Pl%C3%A1tanos!5e0!3m2!1ses!2sar!4v1541428242373', NULL, 'dd', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `name`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Descargar Catálogo', 'descarga__catalogo carrara.pdf', 'aa', '2018-11-21 14:35:45', '2018-11-21 14:35:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Centro de Relax en su propio hogar', '<p><span style=\"font-size:18px\"><span style=\"color:#055dac\"><strong>Nuestra filosof&iacute;a es ofrecerle el mejor producto, fabricado &iacute;ntegramente en Argentina, con la mejor tecnolog&iacute;a utilizada en el resto del mundo. </strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\">Nuestra planta de fabricaci&oacute;n est&aacute; ubicada en Berazategui, Provincia de Buenos Aires. Somos especialistas en ba&ntilde;eras fabricadas en acr&iacute;lico sanitario termoformado y reforzado con resina y fibra de vidrio. Para seguir satisfaciendo sus necesidades, ampliamos nuestra l&iacute;nea de productos.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Le sumamos al hidromasaje &nbsp;los nuevos Spa/Minipiscinas. La cualidad que los distingue del resto es, adem&aacute;s del material y tecnolog&iacute;a utilizados, el dise&ntilde;o y confort que usted encontrar&aacute; en ellos.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos, perfectos para disfrutar y relajarse.&nbsp;</span></p>', 'empresa__empresa.jpg', NULL, '2018-11-30 16:51:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id`, `title`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Hidromasajes', 'familias__familia1.jpg', 'aa', '2018-11-08 21:54:41', '2018-11-08 21:54:41'),
(2, 'Platos de Ducha', 'familias__familia2.jpg', 'bb', '2018-11-08 21:54:57', '2018-11-08 21:54:57'),
(3, 'MiniPiscinas', 'familias__familia3.jpg', 'cc', '2018-11-08 21:55:10', '2018-11-08 21:55:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `image`, `order`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'galeria__minipiscina-tango-2.jpg', 'bb', 10, '2018-11-21 14:32:49', '2018-11-21 14:32:49'),
(2, 'galeria__minipiscina-fiesta-2.jpg', 'bb', 11, '2018-11-21 14:33:04', '2018-11-21 14:33:04'),
(3, 'galeria__atenas-2-web.jpg', 'bb', 4, '2018-11-21 15:58:48', '2018-11-21 15:58:48'),
(4, 'galeria__atlantica-4-web.jpg', 'bb', 7, '2018-11-21 15:59:20', '2018-11-21 15:59:20'),
(5, 'galeria__atlantica-1-web.jpg', 'cc', 7, '2018-11-21 15:59:30', '2018-11-21 15:59:30'),
(6, 'galeria__esquinero-150-web.jpg', 'bb', 9, '2018-11-21 16:02:22', '2018-11-21 16:02:22'),
(7, 'galeria__esquinero-150-2-web.jpg', 'cc', 9, '2018-11-21 16:03:16', '2018-11-21 16:03:16'),
(8, 'galeria__Infinity-web.jpg', 'bb', 5, '2018-11-21 16:04:34', '2018-11-21 16:04:34'),
(10, 'galeria__Mini-75-web.jpg', 'bb', 31, '2018-11-21 16:19:45', '2018-11-21 16:19:45'),
(11, 'galeria__Super-Plus-2-web.jpg', 'ab', 6, '2018-11-21 17:03:33', '2018-11-21 17:03:33'),
(12, 'galeria__DSCN1209.JPG', 'aa', 12, '2018-11-30 16:06:20', '2018-11-30 16:06:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `name`, `image`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Header', 'logos__header.jpg', 'header', 'aa', NULL, '2018-11-05 17:01:19'),
(2, 'Footer', 'logos__footer.png', 'footer', 'bb', NULL, '2018-11-05 17:04:20'),
(3, 'Favicon', 'logos__favicon.png', 'favicon', 'cc', NULL, '2018-11-05 17:04:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `section`, `keyword`, `description`, `order`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, 'aa', NULL, NULL),
(2, 'empresa', NULL, NULL, 'bb', NULL, NULL),
(3, 'producto', NULL, NULL, 'cc', NULL, NULL),
(4, 'contacto', NULL, NULL, 'dd', NULL, NULL),
(5, 'catalogo', NULL, NULL, 'ee', NULL, NULL),
(6, 'buscador', NULL, NULL, 'ff', NULL, NULL),
(7, 'presupuesto', NULL, NULL, 'gg', NULL, NULL),
(8, 'descarga', NULL, NULL, 'hh', NULL, NULL),
(9, 'buscar', NULL, NULL, 'ii', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_05_131122_create_metadatos_table', 1),
(4, '2018_11_05_132455_create_logos_table', 1),
(5, '2018_11_05_132504_create_redes_table', 1),
(6, '2018_11_05_132516_create_textos_table', 1),
(7, '2018_11_05_132527_create_datos_table', 1),
(9, '2018_11_05_133923_create_empresas_table', 1),
(10, '2018_11_05_132537_create_sliders_table', 2),
(11, '2018_11_07_192536_create_catalogos_table', 3),
(12, '2018_11_08_183902_create_familias_table', 4),
(15, '2018_11_05_133946_create_productos_table', 5),
(16, '2018_11_08_123928_create_galerias_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `draw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bomb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regulator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soup` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `switch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `descripcion`, `draw`, `image`, `width`, `height`, `depth`, `capacity`, `bomb`, `jet`, `regulator`, `soup`, `switch`, `order`, `keyword`, `family_id`, `created_at`, `updated_at`) VALUES
(1, 'Caribe 135', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__producto5.png', '1.100', '1.350', '44 cm', '130 l', '3/4 hp', '6', '1', '22 cm', 'Si', 'gg', 'hidromasaje', 1, '2018-11-11 21:40:37', '2018-11-21 18:17:39'),
(2, 'Astra', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__producto1.png', '1.200', '1.800', '47 cm', '250 l', '1 1/2 hp', '8', '2', '34 cm', 'si', 'bb', NULL, 1, '2018-11-12 21:19:22', '2018-11-21 18:16:20'),
(3, 'Duo', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', NULL, 'productos__duo.jpg', '1.500', '1.800', '47.5 cm', '310 l', '1 1/2 hp', '8', '2', '23 cm', 'Si', 'jj', 'hidromasaje', 1, '2018-11-12 21:22:17', '2018-11-30 16:18:15'),
(4, 'Atenas', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__producto3.png', '1.500', '1.850', '45.5 cm', '280 l', '1 1/2 hp', '8', '2', '37 cm', 'Si', 'cc', 'hidromasajes', 1, '2018-11-12 21:26:26', '2018-11-21 18:16:37'),
(5, 'Infinity', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__producto4.png', '1.050', '1.800', '45 cm', '245 l', '1 1/2 hp', '8', '2', '26 cm', 'Si', 'll', 'hidromasajes', 1, '2018-11-12 21:27:14', '2018-11-21 18:20:27'),
(6, 'Super Plus', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__producto6.png', '1.820', '1.200', '43 cm', '250 l', '1 1/2 hp', '8', '2', '34 cm', 'Si', 'ssa', 'hidromasajes', 1, '2018-11-12 21:28:43', '2018-11-21 18:25:14'),
(7, 'Atlántica', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__producto7.png', '1.200', '1.980', '46.5 cm', '250 l', '1 1/2 hp', '8', '2', '84 cm', 'Si', 'dd', 'hidromasajes', 1, '2018-11-12 21:30:13', '2018-11-21 18:16:44'),
(8, 'Corner 150', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__03plano.jpg', 'productos__producto8.png', '1.480', '1.480', '45 cm', '270 l', '1 hp', '7', '2', '89 cm', 'Si', 'iic', 'hidromasajes', 1, '2018-11-12 21:31:16', '2018-11-21 18:18:46'),
(9, 'Corner 150 Mar del Plata', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__03plano.jpg', 'productos__producto9.png', '1.480', '1.480', '44.5 cm', '260 l', '1 hp', '7', '2', '86 cm', 'Si', 'iid', 'hidromasajes', 1, '2018-11-12 21:31:57', '2018-11-21 18:18:50'),
(10, 'Tango', '<p>Tango se define por sus contornos arm&oacute;nicos y por un dise&ntilde;o al servicio de la comodidad.&nbsp;<br />\r\nL&iacute;neas simples y funcionamiento f&aacute;cil, que invitan a disfrutar de los reconfortantes efectos de la hidroterapia.</p>', NULL, 'productos__minipiscina-tango-1.jpg', '2.25', '2.25', NULL, '1550', '1 hp', '51', NULL, NULL, NULL, 'aa', 'Tango minipiscina', 3, '2018-11-20 22:59:09', '2018-11-20 22:59:09'),
(11, 'Fiesta', '<p>Su singular dise&ntilde;o y gran amplitud convierten a Fiesta en un modelo muy vers&aacute;til.&nbsp;<br />\r\nLa ubicaci&oacute;n de todos sus componentes est&aacute;n pensados para que Ud. disfrute en familia o con amigos.</p>', NULL, 'productos__minipiscina-fiesta-1.jpg', '2.27', '2.27', NULL, '1350', NULL, '50', NULL, NULL, NULL, 'bb', 'Fiesta Minipiscinas', 3, '2018-11-20 23:01:43', '2018-11-21 14:02:20'),
(12, 'Receptáculo 100 x 75 x 30', '<p>Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos, perfectos para disfrutar y relajarse.&nbsp;</p>', NULL, 'productos__DSCN1209.JPG', '75', '100', '30', NULL, NULL, NULL, NULL, NULL, NULL, 'aa', 'Receptáculos', 2, '2018-11-21 14:19:58', '2018-11-30 16:09:39'),
(13, 'Receptáculo 90 x 70', '<p>Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos, perfectos para disfrutar y relajarse.&nbsp;</p>', NULL, 'productos__telefono quique 1494.JPG', '70', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bb', 'Receptáculo 90 x 70', 2, '2018-11-21 14:21:15', '2018-11-30 16:08:13'),
(14, 'Receptáculo 110 x 70', '<p>Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos, perfectos para disfrutar y relajarse.&nbsp;</p>', NULL, 'productos__no-disponible--carrara.jpg', '70', '1.100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cc', 'Receptáculo 110 x 70', 2, '2018-11-21 14:22:28', '2018-11-21 14:22:28'),
(15, 'Receptáculo 140 x 70', '<p>Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos, perfectos para disfrutar y relajarse.&nbsp;</p>', NULL, 'productos__no-disponible--carrara.jpg', '70', '1.400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dd', 'Receptáculo 140 x 70', 2, '2018-11-21 14:23:13', '2018-11-21 14:24:41'),
(16, 'Receptáculo 160 x 90', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', NULL, 'productos__no-disponible--carrara.jpg', '90', '1.600', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ee', 'ee', 2, '2018-11-21 14:30:12', '2018-11-21 14:30:12'),
(17, 'Receptáculo 78', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', NULL, 'productos__telefono quique 446.JPG', '78', '78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ff', 'Receptáculo 78', 2, '2018-11-21 14:30:52', '2018-11-30 16:13:35'),
(18, 'Receptáculo 90', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', NULL, 'productos__foto recep 90 1.JPG', '90', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gg', 'Receptáculo 90', 2, '2018-11-21 14:31:31', '2018-11-30 16:10:30'),
(19, 'Arosa 150', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Arosa-150-web.jpg', '0.70', '1.480', '40 cm', '120 l', '1/2 hp', '4', '1', '24.5 cm', 'Si', 'aaa', NULL, 1, '2018-11-21 14:56:40', '2018-11-21 18:15:49'),
(20, 'Arosa 160', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__arosa 160.jpg', '0.70', '1.600', '42 cm', '130 l', '3/4 hp', '6', '1', '26 cm', 'Si', 'aab', NULL, 1, '2018-11-21 15:00:03', '2018-11-30 16:22:06'),
(21, 'Arosa 170', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Arosa-170-3-web.jpg', '0.70', '1.700', '40.5 cm', '130 l', '3/4 hp', '6', '1', '24 cm', 'Si', 'aac', NULL, 1, '2018-11-21 15:03:36', '2018-11-21 18:15:56'),
(22, 'Bahia 150', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__02plano.jpg', 'productos__Bahia-150-1-web.jpg', '1.520', '-', '51 cm', '240 l', '1 hp', '7', '2', '76 cm', 'Si', 'ffa', NULL, 1, '2018-11-21 15:09:00', '2018-11-21 18:17:05'),
(23, 'Bahia 160', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__02plano.jpg', 'productos__Bahia 160.JPG', '1.600', '-', '48.5 cm', '240 l', '1 hp', '7', '2', '32 cm', 'Si', 'ffb', NULL, 1, '2018-11-21 15:11:15', '2018-11-30 16:16:26'),
(24, 'Carrara 170', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__carrara-170-web.jpg', '0.87', '1.700', '45.5 cm', '165 l', '1 hp', '6', '1', '25 cm', 'Si', 'hh', NULL, 1, '2018-11-21 15:20:49', '2018-11-21 18:18:03'),
(25, 'Corner 140', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__03plano.jpg', 'productos__esqui 140.jpg', '1.400', '1.400', '47 cm', '250 l', '1 hp', '7', '2', '96 cm', 'Si', 'iia', NULL, 1, '2018-11-21 15:22:54', '2018-11-30 16:18:49'),
(26, 'Corner 145', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__03plano.jpg', 'productos__no-disponible--carrara.jpg', '1.450', '1.450', '49.5 cm', '260 l', '1 hp', '7', '2', '90 cm', 'Si', 'iib', NULL, 1, '2018-11-21 15:25:13', '2018-11-21 18:18:37'),
(27, 'Galana 150', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__GALANA 150.jpg', '0.80', '1.500', '41 cm', '125 l', '3/4 hp', '5', '1', '26 cm', 'Si', 'kka', NULL, 1, '2018-11-21 15:30:38', '2018-11-30 16:19:47'),
(28, 'Galana 180', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__galana 180.jpg', '0.90', '1.800', '44 cm', '200 l', '1 hp', '7', '1', '29 cm', 'Si', 'kkb', NULL, 1, '2018-11-21 15:32:41', '2018-11-30 16:20:50'),
(29, 'Master Acuaria', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Master-Acuaria-2-web.jpg', '0.90', '1.890', '43.5 cm', '200 l', '1 hp', '6-8', '2', '34 cm', 'Si', 'mm', NULL, 1, '2018-11-21 15:35:07', '2018-11-21 18:20:32'),
(30, 'Minimalista 70', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Mini-70-1--web.jpg', '0.70', '1.700', '41.5 cm', NULL, NULL, '6', NULL, NULL, NULL, 'nna', NULL, 1, '2018-11-21 15:37:21', '2018-11-21 18:20:35'),
(31, 'Minimalista 75', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__minimalista-75-web.jpg', '0.75', '1.700', '40.5 cm', NULL, NULL, '6', NULL, NULL, NULL, 'nnb', NULL, 1, '2018-11-21 15:39:02', '2018-11-21 18:20:38'),
(32, 'Minimalista 80', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__mini-80-web.jpg', '0.80', '1.770', '41.5 cm', NULL, NULL, '6', NULL, NULL, NULL, 'nnc', NULL, 1, '2018-11-21 15:40:01', '2018-11-21 18:20:41'),
(33, 'Minimalista 90', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__mini-90-web.jpg', '90', '1.770', '41.5 cm', NULL, NULL, '8', NULL, NULL, NULL, 'nnd', NULL, 1, '2018-11-21 15:41:04', '2018-11-21 18:20:46'),
(34, 'Minimalista 170', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Mini-170-web.jpg', '0.80', '1.700', '41.5 cm', NULL, NULL, '6', NULL, NULL, NULL, 'nne', NULL, 1, '2018-11-21 15:42:05', '2018-11-21 18:20:49'),
(35, 'Minimalista 120', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Mini 120 1.JPG', '1.200', '1.800', '41.5 cm', NULL, NULL, '8', NULL, NULL, NULL, 'nnf', NULL, 1, '2018-11-21 15:43:44', '2018-11-30 16:39:59'),
(36, 'Mykonos 170', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__mykonos.jpg', '0.84', '1.720', '43 cm', '150 l', '1 hp', '7', '1', '31.5 cm', 'Si', 'ooa', NULL, 1, '2018-11-21 15:46:10', '2018-11-30 16:21:39'),
(37, 'Mykonos 180', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__MYK-180-web.jpg', '0.80', '1.800', '43 cm', '150 l', '1 hp', '7', '1', '31.5 cm', 'Si', 'oob', NULL, 1, '2018-11-21 15:47:49', '2018-11-21 18:22:39'),
(38, 'Palace 150', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__palace 150.jpg', '0.75', '1.500', '39.5 cm', '125 l', '3/4 hp', '5', '1', '25 cm', 'Si', 'ppa', NULL, 1, '2018-11-21 15:50:35', '2018-11-30 16:23:33'),
(39, 'Palace 160', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Palace 170 2.JPG', '0.75', '1.600', '40 cm', '135 l', '3/4 hp', '5', '1', '30.5 cm', 'Si', 'ppb', NULL, 1, '2018-11-21 15:52:17', '2018-11-30 16:24:40'),
(40, 'Palace 170', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Palace-170-web.jpg', '0.75', '1.700', '40 cm', '150 l', '1 hp', '5', '1', '21.5 cm', 'Si', 'ppc', NULL, 1, '2018-11-21 15:53:44', '2018-11-21 18:23:20'),
(41, 'Plus 120', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__plus 140 2.JPG', '0.70', '1.200', '38.5 cm', '105 l', '1/2 hp', '4', '1', '22 cm', 'Si', 'qqa', NULL, 1, '2018-11-21 15:57:11', '2018-11-30 16:25:57'),
(42, 'Plus 140', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__telefono quique 200.JPG', '0.70', '1.400', '39 cm', '115 l', '1/2 hp', '4', '1', '24 cm', 'Si', 'qqb', NULL, 1, '2018-11-21 15:59:36', '2018-11-30 16:26:49'),
(43, 'Plus 183', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__Plus 183.jpg', '0.90', '1.830', '45.5 cm', NULL, NULL, '7', NULL, NULL, NULL, 'qqc', NULL, 1, '2018-11-21 16:06:39', '2018-11-30 16:35:14'),
(44, 'Plus 140/62', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__no-disponible--carrara.jpg', '0.62', '1.400', '36 cm', NULL, NULL, '4', NULL, NULL, NULL, 'qqd', NULL, 1, '2018-11-21 16:08:02', '2018-11-21 18:24:11'),
(46, 'Super Acuaria', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__s acuaria.jpg', '0.90', '1.650', '43.5 cm', '155 l', '1 hp', '6', '1', '34.5 cm', 'Si', 'rr', NULL, 1, '2018-11-21 16:10:13', '2018-11-30 16:37:56'),
(47, 'Super Plus 165', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__s plus 165.JPG', '1.200', '1.650', '44 cm', '250 l', '1 1/2 hp', '8', '2', '34 cm', 'Si', 'ssb', NULL, 1, '2018-11-21 16:12:38', '2018-11-30 16:36:00'),
(48, 'Venus 165', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__venus .jpg', '0.80', '1.650', '39.5 cm', '145 l', '3/4 hp', '5', '1', '25 cm', 'Si', 'tt', NULL, 1, '2018-11-21 16:15:10', '2018-11-30 16:36:47'),
(50, 'Plus 170', '<p>Ba&ntilde;eras fabricadas en <span style=\"color:#009786\">acr&iacute;lico sanitario termoformado y reforzado</span> con resina y fibra de vidrio. Resiste los golpes y el desgaste, garantizando una mayor protecci&oacute;n del brillo y color.</p>\r\n\r\n<p>Otra cualidad del acr&iacute;lico es que no disipa el calor, <span style=\"color:#009786\">manteniendo la temperatura del agua por m&aacute;s tiempo. </span>Su superficie no retiene ni absorbe suciedad, por lo que es muy facil de limpiar. Las ba&ntilde;eras Carrara ofrecen, adem&aacute;s de las ventajas insuperables del acr&iacute;lico, diversos colores, f&aacute;ciles de combinar con los artefactos y decoraci&oacute;n de su ba&ntilde;o, logrando ambientes arm&oacute;nicos.</p>', 'productos__01plano.jpg', 'productos__PLUS 170.jpg', '0.78', '1.670', '38 cm', '135 l', '3/4 hp', '6', '1', '39 cm', 'Si', 'qqe', NULL, 1, '2018-11-21 17:08:46', '2018-11-30 16:38:36'),
(52, 'Tango 195', NULL, NULL, 'productos__Copia de tango 195 1.JPG', '195', '195', '75', '600', '1.5 hp', '12', '2', NULL, NULL, 'cc', NULL, 3, '2018-11-30 16:45:39', '2018-11-30 16:45:39'),
(53, 'Fiesta 195', NULL, NULL, 'productos__spa red 195.JPG', '195', NULL, '70', '600', '1.5', '10', '2', NULL, NULL, 'dd', NULL, 3, '2018-11-30 16:48:12', '2018-11-30 16:48:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_producto`
--

CREATE TABLE `producto_producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `producto2_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_producto`
--

INSERT INTO `producto_producto` (`id`, `producto_id`, `producto2_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 2, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 4, 3, NULL, NULL),
(7, 5, 4, NULL, NULL),
(8, 5, 1, NULL, NULL),
(9, 5, 3, NULL, NULL),
(10, 6, 2, NULL, NULL),
(11, 6, 4, NULL, NULL),
(12, 6, 3, NULL, NULL),
(13, 7, 1, NULL, NULL),
(14, 7, 3, NULL, NULL),
(15, 7, 5, NULL, NULL),
(16, 8, 4, NULL, NULL),
(17, 8, 7, NULL, NULL),
(18, 8, 1, NULL, NULL),
(19, 9, 4, NULL, NULL),
(20, 9, 1, NULL, NULL),
(21, 9, 3, NULL, NULL),
(22, 1, 7, NULL, NULL),
(23, 1, 1, NULL, NULL),
(24, 1, 8, NULL, NULL),
(25, 10, 9, NULL, NULL),
(26, 10, 3, NULL, NULL),
(27, 10, 5, NULL, NULL),
(28, 11, 5, NULL, NULL),
(29, 11, 6, NULL, NULL),
(30, 11, 10, NULL, NULL),
(31, 12, 2, NULL, NULL),
(32, 12, 4, NULL, NULL),
(33, 12, 7, NULL, NULL),
(34, 13, 11, NULL, NULL),
(35, 13, 5, NULL, NULL),
(36, 13, 12, NULL, NULL),
(37, 14, 5, NULL, NULL),
(38, 14, 12, NULL, NULL),
(39, 14, 13, NULL, NULL),
(40, 15, 12, NULL, NULL),
(41, 15, 14, NULL, NULL),
(42, 15, 13, NULL, NULL),
(43, 16, 14, NULL, NULL),
(44, 16, 15, NULL, NULL),
(45, 16, 13, NULL, NULL),
(46, 17, 12, NULL, NULL),
(47, 17, 14, NULL, NULL),
(48, 17, 15, NULL, NULL),
(49, 18, 12, NULL, NULL),
(50, 18, 17, NULL, NULL),
(51, 18, 13, NULL, NULL),
(52, 21, 19, NULL, NULL),
(53, 21, 20, NULL, NULL),
(54, 23, 22, NULL, NULL),
(55, 25, 8, NULL, NULL),
(56, 25, 9, NULL, NULL),
(57, 26, 25, NULL, NULL),
(58, 26, 8, NULL, NULL),
(59, 26, 9, NULL, NULL),
(60, 28, 27, NULL, NULL),
(61, 29, 20, NULL, NULL),
(62, 31, 30, NULL, NULL),
(63, 32, 30, NULL, NULL),
(64, 32, 31, NULL, NULL),
(65, 33, 30, NULL, NULL),
(66, 33, 31, NULL, NULL),
(67, 33, 32, NULL, NULL),
(68, 35, 34, NULL, NULL),
(69, 35, 31, NULL, NULL),
(70, 35, 33, NULL, NULL),
(71, 36, 24, NULL, NULL),
(72, 37, 36, NULL, NULL),
(73, 39, 38, NULL, NULL),
(74, 40, 38, NULL, NULL),
(75, 40, 39, NULL, NULL),
(76, 42, 39, NULL, NULL),
(77, 42, 41, NULL, NULL),
(78, 43, 41, NULL, NULL),
(79, 43, 42, NULL, NULL),
(80, 44, 41, NULL, NULL),
(81, 44, 42, NULL, NULL),
(82, 44, 43, NULL, NULL),
(83, 45, 19, NULL, NULL),
(84, 45, 20, NULL, NULL),
(85, 45, 21, NULL, NULL),
(86, 46, 42, NULL, NULL),
(87, 46, 6, NULL, NULL),
(88, 47, 43, NULL, NULL),
(89, 47, 46, NULL, NULL),
(90, 47, 6, NULL, NULL),
(91, 48, 41, NULL, NULL),
(92, 48, 43, NULL, NULL),
(93, 34, 30, NULL, NULL),
(94, 34, 31, NULL, NULL),
(95, 34, 33, NULL, NULL),
(96, 41, 42, NULL, NULL),
(97, 41, 44, NULL, NULL),
(98, 52, 10, NULL, NULL),
(99, 53, 52, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `image`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Diseño y  Tecnología', 'Disfrute de momentos únicos', 'sliders__slider.jpg', 'home', 'aa', '2018-11-05 22:06:04', '2018-11-21 16:00:34'),
(2, 'Hidromasajes en Acrílico', 'Industria Argentina', 'sliders__slider2.jpg', 'empresa', 'aa', '2018-11-05 22:07:13', '2018-11-05 22:07:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `title`, `image`, `text`, `section`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Ampliamos nuestra línea', 'texto__home.jpg', '<p>Ampliamos nuestro cat&aacute;logo y l&iacute;nea de productos. Le sumamos al hidromasaje y a los box de ducha MyT Box, los nuevos dise&ntilde;os de Spa/Minipiscinas.</p>\r\n\r\n<p>Los cualidad que los distingue del resto es, adem&aacute;s del material y tecnolog&iacute;a utilizados, el dise&ntilde;o y confort que encontrar&aacute; en ellos.</p>', 'home', NULL, NULL, '2018-11-21 16:02:52'),
(2, 'Solicitar  Presupuesto Gratuito', 'texto__home2.jpg', '<p>&iexcl;Disfrut&aacute; de todo el relax en tu propia casa! Ingres&aacute; para enviar una solicitud de presupuesto sin cargo. Nuestro equipo se comunicar&aacute; a la brevedad.</p>', 'home2', NULL, NULL, '2018-11-06 17:31:45'),
(3, 'Términos y condiciones', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore laudantium officia temporibus esse ducimus culpa et, aliquam recusandae, pariatur odio reprehenderit! Quia dignissimos veritatis id ducimus unde quidem aut sapiente. Quod beatae et ipsa omnis est quibusdam odit vel ipsam dolor veritatis repellendus ratione mollitia, blanditiis voluptatibus voluptatum. Vitae et consectetur fugiat culpa minima ducimus repellendus quisquam ea non quos.</p>\r\n\r\n<p>Corporis necessitatibus, voluptate laborum vitae unde maxime vel earum rem laudantium cum totam, veritatis odio quam eveniet quas voluptas, sed voluptatibus assumenda optio consequatur magnam sunt omnis! Quam, omnis! Fuga!</p>\r\n\r\n<p>Praesentium modi ab a cupiditate in tenetur corrupti, commodi eos quam recusandae iste dolorem molestiae eveniet earum tempore sed magni dolore aspernatur delectus cumque exercitationem, illo soluta. Veritatis, doloremque fuga. Autem ipsum quisquam officiis expedita, mollitia ducimus aliquid rerum dicta minima tempora aliquam, ex ullam qui officia quas veritatis assumenda architecto voluptatem consectetur, rem commodi delectus maxime. At atque, recusandae!</p>\r\n\r\n<p>&nbsp;</p>', 'contacto', NULL, NULL, '2018-11-05 22:53:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'franco', 'franco', '$2y$10$buAo8s/QrZBW5jPCjQmOC.Zvrdm70JueQo1NmnFNw.ssj030LeSP6', 'ZFCb7kEuTat1CxQyWVxgWPC13EqQAxzbXHOMIEhzjf8NQbsO7zyzsvtnsNjF', '2018-11-05 16:50:47', '2018-11-05 16:50:47'),
(2, 'pablo', 'pablo', '$2y$10$XZOjcXS4VougZMB9Oy1sruVfdcOjdDnSYZQHx0CrK6tc9FMwCrrZa', 'LjaW5o1PkGpdKkpCaktEuM5czRd3eqfKsDJ60exe1Qj2zCIIXClYxbJnS3fw', '2018-11-12 23:49:35', '2018-11-12 23:49:35'),
(3, 'Carlos', 'carlos', '$2y$10$zSYf/kbqYnFTarQHrBACnuMKwk0YeizjmfJvn7V5.uvnLOJI5GJb.', 't3nCkP7JwctvZy28r0vWwdj30xYXGOgoxnbQkHYa96Lx3QXJYhjO1A3vySP5', '2018-11-21 16:22:53', '2018-11-21 16:22:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galerias_product_id_foreign` (`product_id`);

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
-- Indices de la tabla `producto_producto`
--
ALTER TABLE `producto_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_producto_producto2_id_foreign` (`producto2_id`),
  ADD KEY `producto_producto_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `producto_producto`
--
ALTER TABLE `producto_producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `galerias_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
