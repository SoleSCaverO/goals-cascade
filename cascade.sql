-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2016 a las 14:04:47
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cascade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Evaluar, Orientar y Supervisar', NULL, NULL),
(2, 'Alinear, Planificar y Organizar', NULL, NULL),
(3, 'Construccion, Adquisición e Implementación', NULL, NULL),
(4, 'Entregar, dar Servicio y Soporte', NULL, NULL),
(5, 'Supervisión, Evaluación y Verificación', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corporatives`
--

CREATE TABLE IF NOT EXISTS `corporatives` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perspective_id` int(10) unsigned NOT NULL,
  `benefit` int(11) NOT NULL DEFAULT '0',
  `risk` int(11) NOT NULL DEFAULT '0',
  `resource` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `corporatives_perspective_id_foreign` (`perspective_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `corporatives`
--

INSERT INTO `corporatives` (`id`, `name`, `perspective_id`, `benefit`, `risk`, `resource`, `created_at`, `updated_at`) VALUES
(1, 'Valor de las partes interesadas de las inversiones de negocio', 1, 1, 0, 0, NULL, NULL),
(2, 'Cartera de productos y servicios competitivos', 1, 1, 1, 0, NULL, NULL),
(3, 'Riesgos de negocio gestionados(salvaguarda de activos)', 1, 0, 1, 0, NULL, NULL),
(4, 'Cumplimiento de leyes y regulaciones externas', 1, 0, 1, 0, NULL, NULL),
(5, 'Transpariencia financiera', 1, 1, 0, 0, NULL, NULL),
(6, 'Cultura de servicio orientado al cliente', 2, 1, 0, 0, NULL, NULL),
(7, 'Continuidad y disponibilidad del servicio de negocio', 2, 0, 1, 0, NULL, NULL),
(8, 'Respuestas ágiles a un entorno de negocio cambiante', 2, 1, 0, 0, NULL, NULL),
(9, 'Toma estratégica de decisiones basada en información', 2, 1, 1, 1, NULL, NULL),
(10, 'Optimización de costes de entrega del servicio', 2, 1, 0, 1, NULL, NULL),
(11, 'Optimización de la funcionalidad de los procesos de negocio', 3, 1, 0, 1, NULL, NULL),
(12, 'Optimización de los costes de los procesos de negocio', 3, 1, 0, 1, NULL, NULL),
(13, 'Programas gestionados de cambio en el negocio', 3, 1, 1, 0, NULL, NULL),
(14, 'Productividad operacional y de los empleados', 3, 1, 0, 1, NULL, NULL),
(15, 'Cumplimiento con las políticas internas', 3, 0, 1, 0, NULL, NULL),
(16, 'Personas preparadas y motivadas', 4, 0, 1, 1, NULL, NULL),
(17, 'Cultura de innovación de producto y negocio', 4, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corporative_enterprise`
--

CREATE TABLE IF NOT EXISTS `corporative_enterprise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enterprise_id` int(10) unsigned NOT NULL,
  `corporative_id` int(10) unsigned NOT NULL,
  `aligned_goal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `corporative_enterprise_enterprise_id_foreign` (`enterprise_id`),
  KEY `corporative_enterprise_corporative_id_foreign` (`corporative_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `corporative_enterprise`
--

INSERT INTO `corporative_enterprise` (`id`, `enterprise_id`, `corporative_id`, `aligned_goal`, `created_at`, `updated_at`) VALUES
(17, 1, 2, 'Incrementar nivel de utilidades y cartera de productos y servicios', NULL, NULL),
(18, 2, 6, 'Alcanzar un alto nivel de satisfacción del usuario para generar una cultura de servicio orientado al cliente', NULL, NULL),
(19, 4, 11, 'Optimizar funcionalidad de los procesos de negocio para obtener la mayor efectividad del mercado de servicio de encomiendas', NULL, NULL),
(20, 6, 16, 'Definir un plan de capacitación del personal en todos los niveles para conseguir personal preparado y motivado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corporative_it`
--

CREATE TABLE IF NOT EXISTS `corporative_it` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `it_id` int(10) unsigned NOT NULL,
  `corporative_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `corporative_it_it_id_foreign` (`it_id`),
  KEY `corporative_it_corporative_id_foreign` (`corporative_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `corporative_it`
--

INSERT INTO `corporative_it` (`id`, `it_id`, `corporative_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 6, NULL, NULL),
(4, 1, 8, NULL, NULL),
(5, 1, 9, NULL, NULL),
(6, 1, 11, NULL, NULL),
(7, 1, 13, NULL, NULL),
(8, 2, 4, NULL, NULL),
(9, 2, 15, NULL, NULL),
(10, 3, 1, NULL, NULL),
(11, 3, 13, NULL, NULL),
(12, 4, 3, NULL, NULL),
(13, 4, 7, NULL, NULL),
(14, 4, 10, NULL, NULL),
(15, 5, 1, NULL, NULL),
(16, 5, 2, NULL, NULL),
(17, 5, 12, NULL, NULL),
(18, 6, 5, NULL, NULL),
(19, 6, 10, NULL, NULL),
(20, 6, 12, NULL, NULL),
(21, 7, 1, NULL, NULL),
(22, 7, 2, NULL, NULL),
(23, 7, 6, NULL, NULL),
(24, 7, 8, NULL, NULL),
(25, 7, 11, NULL, NULL),
(26, 8, 11, NULL, NULL),
(27, 8, 14, NULL, NULL),
(28, 9, 2, NULL, NULL),
(29, 9, 8, NULL, NULL),
(30, 9, 11, NULL, NULL),
(31, 9, 17, NULL, NULL),
(32, 10, 3, NULL, NULL),
(33, 10, 4, NULL, NULL),
(34, 10, 7, NULL, NULL),
(35, 10, 15, NULL, NULL),
(36, 11, 1, NULL, NULL),
(37, 11, 10, NULL, NULL),
(38, 11, 12, NULL, NULL),
(39, 12, 2, NULL, NULL),
(40, 12, 11, NULL, NULL),
(41, 13, 1, NULL, NULL),
(42, 13, 13, NULL, NULL),
(43, 14, 7, NULL, NULL),
(44, 14, 9, NULL, NULL),
(45, 15, 15, NULL, NULL),
(46, 16, 3, NULL, NULL),
(47, 16, 14, NULL, NULL),
(48, 16, 16, NULL, NULL),
(49, 17, 2, NULL, NULL),
(50, 17, 8, NULL, NULL),
(51, 17, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enterprises`
--

CREATE TABLE IF NOT EXISTS `enterprises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perspective_id` int(10) unsigned NOT NULL,
  `aligned` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enterprises_perspective_id_foreign` (`perspective_id`),
  KEY `enterprises_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `enterprises`
--

INSERT INTO `enterprises` (`id`, `name`, `perspective_id`, `aligned`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Incrementar nivel de utilidades', 1, 1, 1, NULL, NULL),
(2, 'Alcanzar un alto nivel de satisfacción del usuario', 2, 1, 1, NULL, NULL),
(3, 'Ser una empresa líder que se desenvuelva bajo los estándares internacionales de calidad', 3, 0, 1, NULL, NULL),
(4, 'Tener la mayor efectividad del mercado de servicio de encomiendas', 3, 1, 1, NULL, NULL),
(5, 'Tener tecnologías de información que impulsan el crecimiento de la organización', 3, 0, 1, NULL, NULL),
(6, 'Definir un plan de capacitación del personal en todos los niveles', 4, 1, 1, NULL, NULL),
(7, 'Contar con todas las áreas productivas trabajando de forma ordenada y eficiente', 4, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `its`
--

CREATE TABLE IF NOT EXISTS `its` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perspective_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `its_perspective_id_foreign` (`perspective_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `its`
--

INSERT INTO `its` (`id`, `name`, `perspective_id`, `created_at`, `updated_at`) VALUES
(1, 'Alineamiento de TI y estrategia de negocio', 1, NULL, NULL),
(2, 'Cumplimineto y soporte de la TI al cumplimiento del negocio de las leyes y regulaciones externas', 1, NULL, NULL),
(3, 'Compromiso de dirección ejecutiva para tomar decisiones relacionadas con TI', 1, NULL, NULL),
(4, 'Riesgos de negocio relacionados con las TI gestionadas', 1, NULL, NULL),
(5, 'Realización de beneficios de portafolio de inversiones y servicios relacionados con las TI', 1, NULL, NULL),
(6, 'Transpariencia de los costes, beneficios y riesgos de las TI', 1, NULL, NULL),
(7, 'Entrega de servicios de TI de acuerdo a los requisitos del negocio', 2, NULL, NULL),
(8, 'Uso adecuado de aplicaciones, información y soluciones tecnológicas', 2, NULL, NULL),
(9, 'Agilidad de las TI', 3, NULL, NULL),
(10, 'Seguridad de la información, infraestructura de procesamiento de aplicaciones', 3, NULL, NULL),
(11, 'Optimización de activos, recursos y capacidades de TI', 3, NULL, NULL),
(12, 'Capacitación y soporte de procesos de negocio integrado aplicaciones y tenoclogía de procesos de negocio', 3, NULL, NULL),
(13, 'Entrega de programas que proporcionen beneficios a tiempo, dentro del presupuesto y satisfaciendo los requisitos y normas de calidad', 3, NULL, NULL),
(14, 'Disponibilidad de información útil y fiable para la toma de decisiones', 3, NULL, NULL),
(15, 'Cumplimiento de las políticas internas por parte de las TI', 3, NULL, NULL),
(16, 'Personal del negocio y de las TI competente y motivado', 4, NULL, NULL),
(17, 'Conocimiento, experiencia e iniciativas para la innovación de negocio', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `it_process`
--

CREATE TABLE IF NOT EXISTS `it_process` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `process_id` int(10) unsigned NOT NULL,
  `it_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `it_process_process_id_foreign` (`process_id`),
  KEY `it_process_it_id_foreign` (`it_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=121 ;

--
-- Volcado de datos para la tabla `it_process`
--

INSERT INTO `it_process` (`id`, `process_id`, `it_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 6, 1, NULL, NULL),
(4, 7, 1, NULL, NULL),
(5, 8, 1, NULL, NULL),
(6, 10, 1, NULL, NULL),
(7, 12, 1, NULL, NULL),
(8, 13, 1, NULL, NULL),
(9, 19, 1, NULL, NULL),
(10, 20, 1, NULL, NULL),
(11, 6, 2, NULL, NULL),
(12, 17, 2, NULL, NULL),
(13, 18, 2, NULL, NULL),
(14, 28, 2, NULL, NULL),
(15, 33, 2, NULL, NULL),
(16, 36, 2, NULL, NULL),
(17, 37, 2, NULL, NULL),
(18, 1, 3, NULL, NULL),
(19, 5, 3, NULL, NULL),
(20, 3, 4, NULL, NULL),
(21, 15, 4, NULL, NULL),
(22, 17, 4, NULL, NULL),
(23, 18, 4, NULL, NULL),
(24, 19, 4, NULL, NULL),
(25, 24, 4, NULL, NULL),
(26, 29, 4, NULL, NULL),
(27, 30, 4, NULL, NULL),
(28, 31, 4, NULL, NULL),
(29, 32, 4, NULL, NULL),
(30, 33, 4, NULL, NULL),
(31, 34, 4, NULL, NULL),
(32, 35, 4, NULL, NULL),
(33, 36, 4, NULL, NULL),
(34, 37, 4, NULL, NULL),
(35, 2, 5, NULL, NULL),
(36, 9, 5, NULL, NULL),
(37, 10, 5, NULL, NULL),
(38, 11, 5, NULL, NULL),
(39, 16, 5, NULL, NULL),
(40, 19, 5, NULL, NULL),
(41, 2, 6, NULL, NULL),
(42, 3, 6, NULL, NULL),
(43, 5, 6, NULL, NULL),
(44, 11, 6, NULL, NULL),
(45, 17, 6, NULL, NULL),
(46, 18, 6, NULL, NULL),
(47, 27, 6, NULL, NULL),
(48, 1, 7, NULL, NULL),
(49, 2, 7, NULL, NULL),
(50, 5, 7, NULL, NULL),
(51, 7, 7, NULL, NULL),
(52, 13, 7, NULL, NULL),
(53, 14, 7, NULL, NULL),
(54, 15, 7, NULL, NULL),
(55, 16, 7, NULL, NULL),
(56, 20, 7, NULL, NULL),
(57, 21, 7, NULL, NULL),
(58, 22, 7, NULL, NULL),
(59, 24, 7, NULL, NULL),
(60, 29, 7, NULL, NULL),
(61, 30, 7, NULL, NULL),
(62, 31, 7, NULL, NULL),
(63, 32, 7, NULL, NULL),
(64, 34, 7, NULL, NULL),
(65, 35, 7, NULL, NULL),
(66, 9, 8, NULL, NULL),
(67, 23, 8, NULL, NULL),
(68, 25, 8, NULL, NULL),
(69, 4, 9, NULL, NULL),
(70, 6, 9, NULL, NULL),
(71, 8, 9, NULL, NULL),
(72, 9, 9, NULL, NULL),
(73, 15, 9, NULL, NULL),
(74, 26, 9, NULL, NULL),
(75, 3, 10, NULL, NULL),
(76, 17, 10, NULL, NULL),
(77, 18, 10, NULL, NULL),
(78, 24, 10, NULL, NULL),
(79, 33, 10, NULL, NULL),
(80, 4, 11, NULL, NULL),
(81, 6, 11, NULL, NULL),
(82, 8, 11, NULL, NULL),
(83, 9, 11, NULL, NULL),
(84, 12, 11, NULL, NULL),
(85, 22, 11, NULL, NULL),
(86, 27, 11, NULL, NULL),
(87, 28, 11, NULL, NULL),
(88, 29, 11, NULL, NULL),
(89, 31, 11, NULL, NULL),
(90, 35, 11, NULL, NULL),
(91, 13, 12, NULL, NULL),
(92, 20, 12, NULL, NULL),
(93, 25, 12, NULL, NULL),
(94, 10, 13, NULL, NULL),
(95, 12, 13, NULL, NULL),
(96, 16, 13, NULL, NULL),
(97, 17, 13, NULL, NULL),
(98, 19, 13, NULL, NULL),
(99, 23, 13, NULL, NULL),
(100, 14, 14, NULL, NULL),
(101, 18, 14, NULL, NULL),
(102, 22, 14, NULL, NULL),
(103, 28, 14, NULL, NULL),
(104, 31, 14, NULL, NULL),
(105, 32, 14, NULL, NULL),
(106, 3, 15, NULL, NULL),
(107, 6, 15, NULL, NULL),
(108, 35, 15, NULL, NULL),
(109, 36, 15, NULL, NULL),
(110, 4, 16, NULL, NULL),
(111, 6, 16, NULL, NULL),
(112, 12, 16, NULL, NULL),
(113, 2, 17, NULL, NULL),
(114, 6, 17, NULL, NULL),
(115, 7, 17, NULL, NULL),
(116, 9, 17, NULL, NULL),
(117, 12, 17, NULL, NULL),
(118, 13, 17, NULL, NULL),
(119, 23, 17, NULL, NULL),
(120, 26, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_11_011237_create_roles_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_16_000252_create_categories_table', 1),
('2016_09_16_010029_create_perspectives_table', 1),
('2016_09_16_010047_create_its_table', 1),
('2016_09_16_010053_create_corporatives_table', 1),
('2016_09_16_010054_create_enterprises_table', 1),
('2016_09_16_010106_create_processes_table', 1),
('2016_09_18_042604_create_it_process_table', 1),
('2016_09_18_043445_create_corporative_it_table', 1),
('2016_09_20_202554_create_corporative_enterprise_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perspectives`
--

CREATE TABLE IF NOT EXISTS `perspectives` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `perspectives`
--

INSERT INTO `perspectives` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Financiera', NULL, NULL),
(2, 'Cliente', NULL, NULL),
(3, 'Procesos Internos', NULL, NULL),
(4, 'Aprendizaje y desarrollo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `processes`
--

CREATE TABLE IF NOT EXISTS `processes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `processes_category_id_foreign` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `processes`
--

INSERT INTO `processes` (`id`, `code`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'EDM01', 'Asegurar el Establecimiento y Mantenimiento del Marco de Gobierno', 1, NULL, NULL),
(2, 'EDM02', 'Asegurar la Entrega de Beneficios', 1, NULL, NULL),
(3, 'EDM03', 'Asegurar la Optimización del Riesgo', 1, NULL, NULL),
(4, 'EDM04', 'Asegurar la Optimizacion de los Recursos', 1, NULL, NULL),
(5, 'EDM05', 'Asegurar la Transparencia hacia las partes interesadas', 1, NULL, NULL),
(6, 'APO01', 'Gestionar el Marco de Gestión de TI', 2, NULL, NULL),
(7, 'APO02', 'Gestionar la Estrategia', 2, NULL, NULL),
(8, 'APO03', 'Gestionar la Arquitectura Empresarial', 2, NULL, NULL),
(9, 'APO04', 'Gestionar la Innovación', 2, NULL, NULL),
(10, 'APO05', 'Gestionar el Portafolio', 2, NULL, NULL),
(11, 'APO06', 'Gestionar el Presupuesto y los Costes', 2, NULL, NULL),
(12, 'APO07', 'Gestionar los Recursos Humanos', 2, NULL, NULL),
(13, 'APO08', 'Gestionar las Relaciones', 2, NULL, NULL),
(14, 'APO09', 'Gestionar los acuerdos de Servicio', 2, NULL, NULL),
(15, 'APO10', 'Gestionar los Proveedores', 2, NULL, NULL),
(16, 'APO11', 'Gestionar la Calidad', 2, NULL, NULL),
(17, 'APO12', 'Gestionar el Riesgo', 2, NULL, NULL),
(18, 'APO13', 'Gestionar la Seguridad', 2, NULL, NULL),
(19, 'BAI01', 'Gestionar los Programas y Proyectos', 3, NULL, NULL),
(20, 'BAI02', 'Gestionar la Definición de Requisitos', 3, NULL, NULL),
(21, 'BAI03', 'Gestionar la Identificación y Construcción de Soluciones', 3, NULL, NULL),
(22, 'BAI04', 'Gestionar la Disponibilidad y la Capacidad', 3, NULL, NULL),
(23, 'BAI05', 'Gestionar la Introducción de Cambios Organizativos', 3, NULL, NULL),
(24, 'BAI06', 'Gestionar los Cambios', 3, NULL, NULL),
(25, 'BAI07', 'Gestionar la Aceptación del Cambio y de la Transición', 3, NULL, NULL),
(26, 'BAI08', 'Gestionar el Conocimiento', 3, NULL, NULL),
(27, 'BAI09', 'Gestionar los Activos', 3, NULL, NULL),
(28, 'BAI10', 'gestionar la Configuración', 3, NULL, NULL),
(29, 'DSS01', 'Gestionar las Operaciones', 4, NULL, NULL),
(30, 'DSS02', 'Gestionar las Peticiones y los Incidentes del Servicio', 4, NULL, NULL),
(31, 'DSS03', 'Gestionar los Problemas', 4, NULL, NULL),
(32, 'DSS04', 'Gestionar la Continuidad', 4, NULL, NULL),
(33, 'DSS05', 'Gestionar los Servicios de Seguridad', 4, NULL, NULL),
(34, 'DSS06', 'Gestionar los Controles de los Procesos del Negocio', 4, NULL, NULL),
(35, 'MEA01', 'Supervisar, Evaluar y Valorar Rendimiento y Conformidad', 5, NULL, NULL),
(36, 'MEA02', 'Supervisar, Evaluar y Valorar el Sistema de Control Interno', 5, NULL, NULL),
(37, 'MEA03', 'Supervisar, Evaluar y Valorar la Conformidad con los Requerimientos Externos', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Usuario', NULL, NULL),
(2, 'Administrador', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Usuario', 'usuario@gmail.com', '$2y$10$1MiFZ3iB8BpWsbhjDWPGVOZpGCxyxClQtuqPRu0GZPlJHF042nKam', NULL, '2016-09-27 03:52:53', '2016-09-27 03:52:53'),
(2, 2, 'Edilberto Soles', 'edilberto0905@gmail.com', '$2y$10$kSTFpcP0SIsmtZxaEXGUcepcdRkSe16QNyoj.iDOHVotwg.Pn7q5.', NULL, '2016-09-27 03:52:53', '2016-09-27 03:52:53');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corporatives`
--
ALTER TABLE `corporatives`
  ADD CONSTRAINT `corporatives_perspective_id_foreign` FOREIGN KEY (`perspective_id`) REFERENCES `perspectives` (`id`);

--
-- Filtros para la tabla `corporative_enterprise`
--
ALTER TABLE `corporative_enterprise`
  ADD CONSTRAINT `corporative_enterprise_corporative_id_foreign` FOREIGN KEY (`corporative_id`) REFERENCES `corporatives` (`id`),
  ADD CONSTRAINT `corporative_enterprise_enterprise_id_foreign` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`id`);

--
-- Filtros para la tabla `corporative_it`
--
ALTER TABLE `corporative_it`
  ADD CONSTRAINT `corporative_it_corporative_id_foreign` FOREIGN KEY (`corporative_id`) REFERENCES `corporatives` (`id`),
  ADD CONSTRAINT `corporative_it_it_id_foreign` FOREIGN KEY (`it_id`) REFERENCES `its` (`id`);

--
-- Filtros para la tabla `enterprises`
--
ALTER TABLE `enterprises`
  ADD CONSTRAINT `enterprises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `enterprises_perspective_id_foreign` FOREIGN KEY (`perspective_id`) REFERENCES `perspectives` (`id`);

--
-- Filtros para la tabla `its`
--
ALTER TABLE `its`
  ADD CONSTRAINT `its_perspective_id_foreign` FOREIGN KEY (`perspective_id`) REFERENCES `perspectives` (`id`);

--
-- Filtros para la tabla `it_process`
--
ALTER TABLE `it_process`
  ADD CONSTRAINT `it_process_it_id_foreign` FOREIGN KEY (`it_id`) REFERENCES `its` (`id`),
  ADD CONSTRAINT `it_process_process_id_foreign` FOREIGN KEY (`process_id`) REFERENCES `processes` (`id`);

--
-- Filtros para la tabla `processes`
--
ALTER TABLE `processes`
  ADD CONSTRAINT `processes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
