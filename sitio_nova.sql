-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2016 a las 11:14:11
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sitio_nova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad_ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad_ciudad` (
  `id_ciu` int(11) NOT NULL AUTO_INCREMENT,
  `id_region` int(11) NOT NULL,
  `nombre_ciu` text,
  PRIMARY KEY (`id_ciu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=352 ;

--
-- Volcado de datos para la tabla `ciudad_ciudad`
--

INSERT INTO `ciudad_ciudad` (`id_ciu`, `id_region`, `nombre_ciu`) VALUES
(1, 1, 'Arica'),
(2, 1, 'Camarones'),
(3, 1, 'Putre'),
(4, 1, 'General Lagos'),
(5, 1, 'Iquique'),
(6, 1, 'Alto Hospicio'),
(7, 1, 'Huara'),
(8, 1, 'Camiña'),
(9, 1, 'Colchane'),
(10, 1, 'Pica'),
(11, 1, 'Pozo Almonte'),
(12, 2, 'Tocopilla'),
(13, 2, 'María Elena'),
(14, 2, 'Calama'),
(15, 2, 'Ollague '),
(16, 2, 'San Pedro de Atacama'),
(17, 2, 'Antofagasta'),
(18, 2, 'Mejillones '),
(19, 2, 'Sierra Gorda'),
(20, 2, 'Taltal '),
(21, 3, 'Chañaral'),
(22, 3, 'Diego de Almagro'),
(23, 3, 'Copiapó'),
(24, 3, 'Caldera '),
(25, 3, 'Tierra Amarilla'),
(26, 3, 'Vallenar'),
(27, 3, 'Freirina '),
(28, 3, 'Huasco'),
(29, 3, 'Alto del Carmen'),
(30, 4, 'La Serena'),
(31, 4, 'La Higuera '),
(32, 4, 'Coquimbo'),
(33, 4, 'Andacollo '),
(34, 4, 'Vicuña'),
(35, 4, 'Paihuano'),
(36, 4, 'Ovalle'),
(37, 4, 'Río Hurtado'),
(38, 4, 'Monte Patria '),
(39, 4, 'Combarbalá '),
(40, 4, 'Punitaqui'),
(41, 4, 'Illapel '),
(42, 4, 'Salamanca '),
(43, 4, 'Los Vilos'),
(44, 4, 'Canela '),
(45, 5, 'Valparaíso'),
(46, 5, 'Casablanca '),
(47, 5, 'Concon'),
(48, 5, 'Juan Fernández '),
(49, 5, 'Puchuncaví '),
(50, 5, 'Quilpué'),
(51, 5, 'Quintero'),
(52, 5, 'Villa Alemana '),
(53, 5, 'Viña del Mar'),
(54, 5, 'Petorca'),
(55, 5, 'La Ligua '),
(56, 5, 'Cabildo'),
(57, 5, 'Papudo'),
(58, 5, 'Zapallar'),
(59, 5, 'Los Andes '),
(60, 5, 'San Esteban'),
(61, 5, 'Calle Larga '),
(62, 5, 'Rinconada'),
(63, 5, 'San Felipe '),
(64, 5, 'Catemu'),
(65, 5, 'Llay Llay '),
(66, 5, 'Panquehue'),
(67, 5, 'Putaendo '),
(68, 5, 'Santa María'),
(69, 5, 'Quillota '),
(70, 5, 'Calera'),
(71, 5, 'Hijuelas '),
(72, 5, 'Limache '),
(73, 5, 'La Cruz '),
(74, 5, 'Nogales '),
(75, 5, 'Olmué'),
(76, 5, 'San Antonio'),
(77, 5, 'Algarrobo'),
(78, 5, 'Cartagena'),
(79, 5, 'El Quisco'),
(80, 5, 'El Tabo'),
(81, 5, 'Santo Domingo'),
(82, 5, 'Isla de Pascua'),
(83, 6, 'Rancagua'),
(84, 6, 'Codegua'),
(85, 6, 'Coinco'),
(86, 6, 'Coltauco'),
(87, 6, 'Doñihue '),
(88, 6, 'Graneros '),
(89, 6, 'Las Cabras'),
(90, 6, 'Mostazal '),
(91, 6, 'Machalí'),
(92, 6, 'Malloa'),
(93, 6, 'Olivar '),
(94, 6, 'Peumo '),
(95, 6, 'Pichidegua'),
(96, 6, 'Quinta de Tilcoco'),
(97, 6, 'Rengo '),
(98, 6, 'Requinoa'),
(99, 6, 'San Vicente'),
(100, 6, 'San Fernando'),
(101, 6, 'Chépica'),
(102, 6, 'Chimbarongo '),
(103, 6, 'Lolol'),
(104, 6, 'Nancagua'),
(105, 6, 'Palmilla '),
(106, 6, 'Peralillo '),
(107, 6, 'Placilla '),
(108, 6, 'Pumanque '),
(109, 6, 'Santa Cruz'),
(110, 6, 'Pichilemu'),
(111, 6, 'La Estrella'),
(112, 6, 'Litueche'),
(113, 6, 'Marchigue'),
(114, 6, 'Navidad'),
(115, 6, 'Paredones'),
(116, 7, 'Curicó'),
(117, 7, 'Teno'),
(118, 7, 'Romeral'),
(119, 7, 'Molina'),
(120, 7, 'Sagrada Familia'),
(121, 7, 'Hualañé'),
(122, 7, 'Licantén'),
(123, 7, 'Vichuquén'),
(124, 7, 'Rauco'),
(125, 7, 'Talca'),
(126, 7, 'Pelarco'),
(127, 7, 'Río Claro '),
(128, 7, 'San Clemente'),
(129, 7, 'Maule'),
(130, 7, 'San Rafael'),
(131, 7, 'Empedrado '),
(132, 7, 'Pencahue'),
(133, 7, 'Constitución '),
(134, 7, 'Curepto '),
(135, 7, 'Linares'),
(136, 7, 'Yerbas Buenas '),
(137, 7, 'Colbún '),
(138, 7, 'Longaví'),
(139, 7, 'Parral '),
(140, 7, 'Retiro '),
(141, 7, 'Villa Alegre'),
(142, 7, 'San Javier'),
(143, 7, 'Cauquenes'),
(144, 7, 'Pelluhue'),
(145, 7, 'Chanco'),
(146, 8, 'Chillán '),
(147, 8, 'Bulnes '),
(148, 8, 'Chillan Viejo '),
(149, 8, 'Cobquecura '),
(150, 8, 'Coelemu'),
(151, 8, 'Coihueco'),
(152, 8, 'El Carmen'),
(153, 8, 'Ninhue'),
(154, 8, 'Ñiquén'),
(155, 8, 'Pemuco'),
(156, 8, 'Pinto'),
(157, 8, 'Portezuelo'),
(158, 8, 'Quillón'),
(159, 8, 'Quirihue'),
(160, 8, 'Ranquil'),
(161, 8, 'San Carlos '),
(162, 8, 'San Fabián'),
(163, 8, 'San Ignacio '),
(164, 8, 'San Nicolás'),
(165, 8, 'Trehuaco'),
(166, 8, 'Yungay '),
(167, 8, 'Los Angeles'),
(168, 8, 'Alto Bio Bio'),
(169, 8, 'Antuco'),
(170, 8, 'Cabrero '),
(171, 8, 'Laja '),
(172, 8, 'Mulchén '),
(173, 8, 'Nacimiento'),
(174, 8, 'Negrete'),
(175, 8, 'Quilaco'),
(176, 8, 'Quilleco'),
(177, 8, 'Santa Bárbara'),
(178, 8, 'San Rosendo'),
(179, 8, 'Tucapel'),
(180, 8, 'Yumbel '),
(181, 8, 'Concepción'),
(182, 8, 'Chiguayante'),
(183, 8, 'Coronel '),
(184, 8, 'Florida'),
(185, 8, 'Hualpén '),
(186, 8, 'Hualqui'),
(187, 8, 'Lota'),
(188, 8, 'Penco'),
(189, 8, 'San Pedro de la Paz '),
(190, 8, 'Santa Juana '),
(191, 8, 'Talcahuano '),
(192, 8, 'Tomé '),
(193, 8, 'Arauco '),
(194, 8, 'Cañete'),
(195, 8, 'Contulmo'),
(196, 8, 'Curanilahue'),
(197, 8, 'Lebu '),
(198, 8, 'Los Alamos'),
(199, 8, 'Tirua'),
(200, 9, 'Angol'),
(201, 9, 'Collipulli'),
(202, 9, 'Curacautín'),
(203, 9, 'Ercilla'),
(204, 9, 'Lonquimay'),
(205, 9, 'Los Sauces'),
(206, 9, 'Lumaco'),
(207, 9, 'Purén'),
(208, 9, 'Renaico'),
(209, 9, 'Traiguén'),
(210, 9, 'Victoria'),
(211, 9, 'Temuco'),
(212, 9, 'Carahue'),
(213, 9, 'Cholchol'),
(214, 9, 'Cunco'),
(215, 9, 'Curarrehue'),
(216, 9, 'Freire'),
(217, 9, 'Galvarino'),
(218, 9, 'Gorbea'),
(219, 9, 'Lautaro'),
(220, 9, 'Loncoche'),
(221, 9, 'Melipeuco'),
(222, 9, 'Nueva Imperial'),
(223, 9, 'Padre las Casas'),
(224, 9, 'Perquenco'),
(225, 9, 'Pitrufquén'),
(226, 9, 'Pucón'),
(227, 9, 'Saavedra'),
(228, 9, 'Teodoro Schmidt'),
(229, 9, 'Toltén'),
(230, 9, 'Vilcún'),
(231, 9, 'Villarrica'),
(232, 10, 'Osorno'),
(233, 10, 'Puerto Octay '),
(234, 10, 'Purranque'),
(235, 10, 'Puyehue '),
(236, 10, 'Río Negro'),
(237, 10, 'San Juan de la Costa'),
(238, 10, 'San Pablo'),
(239, 10, 'Calbuco'),
(240, 10, 'Cochamó'),
(241, 10, 'Fresia'),
(242, 10, 'Frutillar'),
(243, 10, 'Cofradía Náutica de Frutillar '),
(244, 10, 'Los Muermos'),
(245, 10, 'Llanquihue'),
(246, 10, 'Maullín'),
(247, 10, 'Puerto Montt'),
(248, 10, 'Puerto Varas'),
(249, 10, 'Ancud'),
(250, 10, 'Castro'),
(251, 10, 'Curaco de Vélez'),
(252, 10, 'Chonchi'),
(253, 10, 'Dalcahue'),
(254, 10, 'Puqueldón '),
(255, 10, 'Queilén'),
(256, 10, 'Quellón'),
(257, 10, 'Quemchi '),
(258, 10, 'Quinchao'),
(259, 10, 'Chaitén'),
(260, 10, 'Futaleufú'),
(261, 10, 'Hualaihué'),
(262, 10, 'Palena'),
(263, 11, 'Cochrane'),
(264, 11, 'OHiggins'),
(265, 11, 'Tortel '),
(266, 11, 'Aysén '),
(267, 11, 'Cisnes'),
(268, 11, 'Guaitecas'),
(269, 11, 'Coyhaique'),
(270, 11, 'Lago Verde'),
(271, 11, 'Chile Chico '),
(272, 11, 'Río Ibañez'),
(273, 12, 'Natales'),
(274, 12, 'Torres del Paine'),
(275, 12, 'Punta Arenas'),
(276, 12, 'Río Verde'),
(277, 12, 'Laguna Blanca'),
(278, 12, 'San Gregorio'),
(279, 12, 'Porvenir'),
(280, 12, 'Primavera'),
(281, 12, 'Timaukel'),
(282, 12, 'Navarino'),
(283, 12, 'Antártica'),
(284, 13, 'Puente Alto '),
(285, 13, 'Pirque '),
(286, 13, 'San José de Maipo'),
(287, 13, 'Melipilla '),
(288, 13, 'María Pinto'),
(289, 13, 'Curacaví '),
(290, 13, 'Alhué'),
(291, 13, 'San Pedro'),
(292, 13, 'Talagante '),
(293, 13, 'El Monte'),
(294, 13, 'Isla de Maipo '),
(295, 13, 'Padre Hurtado '),
(296, 13, 'Peñaflor '),
(297, 13, 'Buin '),
(298, 13, 'Calera de Tango '),
(299, 13, 'Paine '),
(300, 13, 'San Bernardo '),
(301, 13, 'Colina'),
(302, 13, 'Lampa'),
(303, 13, 'Til Til '),
(304, 13, 'Cerrillos'),
(305, 13, 'Cerro Navia'),
(306, 13, 'Conchalí'),
(307, 13, 'El Bosque '),
(308, 13, 'Estación Central '),
(309, 13, 'Huechuraba'),
(310, 13, 'Independencia '),
(311, 13, 'La Cisterna'),
(312, 13, 'La Florida'),
(313, 13, 'La Granja'),
(314, 13, 'La Pintana'),
(315, 13, 'La Reina'),
(316, 13, 'Las Condes'),
(317, 13, 'Lo Barnechea'),
(318, 13, 'Lo Espejo '),
(319, 13, 'Lo Prado'),
(320, 13, 'Macul'),
(321, 13, 'Maipú'),
(322, 13, 'Ñuñoa'),
(323, 13, 'Pedro Aguirre Cerda'),
(324, 13, 'Peñalolén'),
(325, 13, 'Providencia'),
(326, 13, 'Pudahuel'),
(327, 13, 'Quilicura'),
(328, 13, 'Quinta Normal'),
(329, 13, 'Recoleta'),
(330, 13, 'Renca'),
(331, 13, 'San Joaquín'),
(332, 13, 'San Miguel'),
(333, 13, 'San Ramón'),
(334, 13, 'Santiago'),
(335, 13, 'Vitacura'),
(336, 14, 'Valdivia'),
(337, 14, 'Corral'),
(338, 14, 'Lanco'),
(339, 14, 'Los Lagos'),
(340, 14, 'Mafil'),
(341, 14, 'Mariquina'),
(342, 14, 'Paillaco'),
(343, 14, 'Panguipulli'),
(344, 14, 'La Union'),
(345, 14, 'Futrono'),
(346, 14, 'Lago Ranco'),
(347, 14, 'Río Bueno'),
(348, 15, 'Arica'),
(349, 15, 'Camarones'),
(350, 15, 'Putre'),
(351, 15, 'General Lagos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_contacto_general`
--

CREATE TABLE IF NOT EXISTS `contacto_contacto_general` (
  `id_con_gen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_con_gen` text,
  `correo_con_gen` text,
  `fono_con_gen` varchar(12) DEFAULT NULL,
  `fecha_con_gen` datetime DEFAULT NULL,
  `asunto_con_gen` text,
  `direccion_con_gen` text,
  `descripcion_con_gen` text,
  PRIMARY KEY (`id_con_gen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `contacto_contacto_general`
--

INSERT INTO `contacto_contacto_general` (`id_con_gen`, `nombre_con_gen`, `correo_con_gen`, `fono_con_gen`, `fecha_con_gen`, `asunto_con_gen`, `direccion_con_gen`, `descripcion_con_gen`) VALUES
(1, 'bruno Ravizzini dfgfdg', 'bruno.proyectarse@gmail.com', '43334343443', '2013-08-07 00:00:00', 'Contactar al Vendedor: Claudia FarÃ­as', '', 'ggdfg dfgfd gfdgdf gf'),
(2, 'bruno Ravizzini ererter', 'bruno.proyectarse@gmail.com', '43534545', '2013-08-07 00:00:00', 'Contactar al Vendedor: Claudia FarÃ­as', '', 'dg dfgfdg dfgdf gdgf gdf'),
(3, 'bruno Ravizzini ', 'bruno.proyectarse@gmail.com', '433454353435', '2013-08-07 00:00:00', 'Post Venta', '', 'fg fdgfdgfdgdf gdfgd gdfg postventa'),
(4, 'bruno Ravizzini Ravizzini', 'bruno.proyectarse@gmail.com', '43435345', '2013-08-17 00:00:00', 'Contactar al Vendedor: Claudia FarÃ­as', '', 'fdgg dfgdfgdfg fdg dg df'),
(5, 'bruno Ravizzini Ravizzini', 'bruno.proyectarse@gmail.com', '324324324', '2013-08-17 00:00:00', 'Contactar al Vendedor: Ximena GÃ³mez', '', 'bfg gfhgf hgfhg fhghgf hgfhgf'),
(6, 'Bruno Ravizzini', 'bruno.proyectarse@gmail.com', '3435435', '2013-08-17 00:00:00', 'Contactar al Vendedor: Ricardo Oyarzo', '', 'fdg ddfgfd gdg d fdgdf dfgd'),
(7, 'Bruno Ravizzini', 'bruno@proyectarse.com', '43545345', '2013-08-17 00:00:00', 'Contactar al Vendedor: David Varas', '', 'rt gfdg dfgfdgdf df gfdgdg gd dfgdfg  fddfgdg fdg fdg fdgfd'),
(8, 'Bruno ', 'bruno.proyectarse@gmail.com', '4543543', '2013-08-17 00:00:00', 'Post Venta', '', 'fdg fdg fdgdf gfdg dgdfg fdgfd '),
(9, 'Bruno ', 'bruno.proyectarse@gmail.com', '4354353454', '2013-08-17 00:00:00', 'Post Venta', '', 'fdg fd gdfg fddg dfgdfg fddfgdfg'),
(10, 'bruno Ravizzini ', 'bruno@proyectarse.com', '4435445', '2013-08-17 00:00:00', 'Post Venta', '', 'fdg fdgdfdfg fdgfdgdfgd'),
(11, 'Bruno Ravizzini', 'bruno.proyectarse@gmail.com', '3453454', '2013-10-08 00:00:00', 'Contacto Proyecto Nova Hacienda', '', 'Ã±Ã¡ lÃ¡ Ã±ag dfgfd gfdgdf'),
(12, 'Bruno Ravizzini', 'bruno.proyectarse@gmail.com', '34534534', '2013-10-08 00:00:00', 'Contacto Proyecto Nova Hacienda', '', 'Ã±Ã¡ aÃ±Ã¡ AÃ¡ fg fgfd\r\nSolo pruebas'),
(13, 'Bruno Ravizzini Asurmendi', 'info@proyectarse.com', '4354354', '2015-07-02 21:49:04', '', '', 'dsdfdsf dsf dsfsdf sdfs'),
(14, 'Bruno Ravizzini Asurmendi', 'bruno@proyectarse.com', '546546', '2016-04-17 08:48:56', 'El Santuario', '', 'gf dgfdg fdg fdgd d fdgfdg fgdg d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `idcotizacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `fono` text,
  `mail` text,
  `ciudad` text,
  `fecha` date DEFAULT NULL,
  `asunto` text,
  PRIMARY KEY (`idcotizacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idcotizacion`, `nombre`, `fono`, `mail`, `ciudad`, `fecha`, `asunto`) VALUES
(1, 'bruno Ravizzini', '32323232', 'bruno@proyectarse.com', 'Serena', '2013-08-07', 'CotizaciÃƒÂ³n - Playa Blanca - Depto. b1'),
(2, 'bruno Ravizzini', '3434343434', 'bruno.proyectarse@gmail.com', 'Serena', '2013-08-07', 'CotizaciÃƒÂ³n - Playa Blanca - Depto. e'),
(3, 'bruno Ravizzini', '56456456', 'bruno.proyectarse@gmail.com', 'Serena', '2013-08-17', 'CotizaciÃƒÂ³n - Playa Blanca - Depto. d'),
(4, 'bruno Ravizzini', '444444', 'bruno.proyectarse@gmail.com', 'Serena', '2013-08-17', 'CotizaciÃƒÂ³n - El Santurio - Casa Chilena 143,47 Inmobiliaria Nova'),
(5, 'bruno Ravizzini', '4543534545', 'bruno.proyectarse@gmail.com', 'Serena', '2013-08-17', 'CotizaciÃƒÂ³n - Nova Balmaceda - Depto. a4 - Inmobiliaria Nova');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion_cotizacion` (
  `idcotizacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `fono` text,
  `mail` text,
  `fecha` date DEFAULT NULL,
  `asunto` text,
  `depto` varchar(30) DEFAULT NULL,
  `proyecto` varchar(50) DEFAULT NULL,
  `rut` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcotizacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `cotizacion_cotizacion`
--

INSERT INTO `cotizacion_cotizacion` (`idcotizacion`, `nombre`, `fono`, `mail`, `fecha`, `asunto`, `depto`, `proyecto`, `rut`) VALUES
(1, 'Bruno Ravizzini Asurmendi', '32234324', 'info@proyectarse.com', '2015-07-01', 'sdf sdfdsf sdfdfsdf dsfds f a1asdsad', 'A1', 'Nova Balmaceda', NULL),
(2, 'Bruno Ravizzini Asurmendi', '345345345', 'bruno@proyectarse.com', '2016-03-21', 'df gfdg dfgdfg dgdg dfg c-c-1', 'C-C1', 'Nova Balmaceda', NULL),
(3, 'Bruno Ravizzini Asurmendi', '345345345345', 'bruno@proyectarse.com', '2016-03-21', 'df gdfg fdgdf gdfgdg', 'B-B1', 'Alto Hacienda', NULL),
(4, 'ghgfhgfh', '345345345', 'info@proyectarse.com', '2016-04-11', 'dsf dsf fdsfds fds fdsfs f', 'Chilena', 'El Santuario', '13.224.035-3'),
(5, 'Bruno Ravizzini Asurmendi', '345435345', 'bruno@proyectarse.com', '2016-10-05', 'df gdfg dfg fdgdfg', '0', 'Nova Balmaceda', '21.958.024-k'),
(6, 'Bruno Ravizzini Asurmendi', '3454354345', 'bruno@proyectarse.com', '2016-10-05', 'fdg fgfg dfgd ', '0', 'Playa Blanca', '21.958.024-k'),
(7, 'Bruno Ravizzini Asurmendi', '3454353', 'bruno@proyectarse.com', '2016-10-05', 'df gfdg fdgdfg fgdfg', '0', 'Playa Blanca', '21.958.024-k'),
(8, 'Bruno Ravizzini Asurmendi', '435345', 'bruno@proyectarse.com', '2016-10-05', 'fdg dgfdgfd gfdgdfg', '0', 'Playa Blanca', '21.958.024-k'),
(9, 'Bruno Ravizzini Asurmendi', '3432423', 'bruno@proyectarse.com', '2016-10-05', 'df gdf gfdg gfdgdfgd', '0', 'Playa Blanca', '21.958.024-k'),
(10, 'Bruno Ravizzini Asurmendi', '3432423', 'bruno@proyectarse.com', '2016-10-05', 'df gdf gfdg gfdgdfgd', '0', 'Playa Blanca', '21.958.024-k'),
(11, 'Bruno Ravizzini Asurmendi', '34534534', 'bruno@proyectarse.com', '2016-10-05', 'fd gfdgfd gfdgdf', '0', 'Playa Blanca', ''),
(12, 'Bruno Ravizzini Asurmendi', '34534534', 'bruno@proyectarse.com', '2016-10-05', 'df gfdgfd gfdgf dgdf gf', '0', 'Playa Blanca', '21.958.024-k'),
(13, 'Bruno', '345345', 'bruno@proyectarse.com', '2016-10-05', 'dfg fdg fdgdfgdfg dfg', '0', 'Playa Blanca', '21.958.024-k'),
(14, 'bbr', '4543543', 'bruno@proyectarse.com', '2016-10-05', 'dfg fdg fdgffdg', '0', 'Playa Blanca', '21.958.024-k'),
(15, 'Bruno Ravizzini Asurmendi', '345345345', 'bruno@proyectarse.com', '2016-10-05', 'fdg dfgfd fgdfgfdg ', '0', 'Playa Blanca', '21.958.024-k'),
(16, 'Bruno Ravizzini Asurmendi', '3454353', 'bruno@proyectarse.com', '2016-10-05', 'dfg fdg dfg dfgdf gdfg', '0', 'Playa Blanca', '21.958.024-k'),
(17, 'Bruno Ravizzini Asurmendi', '35345345', 'bruno@proyectarse.com', '2016-10-05', 'fdg fdg dfgddgd', '0', 'Playa Blanca', '21.958.024-k'),
(18, 'Bruno Ravizzini Asurmendi', '3432432', 'bruno@proyectarse.com', '2016-10-05', 'fd gfdgfd gfdgdfgdf', '0', 'Playa Blanca', '21.958.024-k'),
(19, 'Bruno Ravizzini Asurmendi', '324324342', 'bruno@proyectarse.com', '2016-10-05', 'df gfdgfdg dfgdfgfgdgdg', '0', 'Playa Blanca', '21.958.024-k'),
(20, '', '', '', '2016-10-05', '', '0', 'Playa Blanca', ''),
(21, '', '', '', '2016-10-05', '', '0', 'Playa Blanca', ''),
(22, 'Bruno Ravizzini Asurmendi', '534435', 'bruno@proyectarse.com', '2016-10-05', 'tre tert ertert rte teñá', '0', 'Playa Blanca', '21.958.024-k'),
(23, 'Bruno Ravizzini Asurmendi', '43534543', 'bruno@proyectarse.com', '2016-10-05', 'reter tert ertret er t ñá 2dsf dsfdsf', '0', 'Playa Blanca', '21.958.024-k'),
(24, 'Bruno Ravizzini Asurmendi', '345345345', 'bruno@proyectarse.com', '2016-10-05', 're tret ret ertert r ñá dfs dsfds', '0', 'Playa Blanca', '21.958.024-k'),
(25, 'Bruno Ravizzini Asurmendi', '324532432', 'bruno@proyectarse.com', '2016-10-05', ' gfdg dgdfg dfgdfg', '0', 'Playa Blanca', '21.958.024-k'),
(26, 'Bruno Ravizzini Asurmendi', '45435', 'bruno@proyectarse.com', '2016-10-06', 'dsf dsfds fdsfsdf', '0', 'Nova Balmaceda', '21.958.024-k');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_cotizacion_modelo`
--

CREATE TABLE IF NOT EXISTS `cotizacion_cotizacion_modelo` (
  `id_cot_mod` int(11) NOT NULL AUTO_INCREMENT,
  `idcotizacion` int(11) NOT NULL,
  `idcotizador_proyecto_modelo` int(11) NOT NULL,
  PRIMARY KEY (`id_cot_mod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cotizacion_cotizacion_modelo`
--

INSERT INTO `cotizacion_cotizacion_modelo` (`id_cot_mod`, `idcotizacion`, `idcotizador_proyecto_modelo`) VALUES
(1, 5, 2),
(2, 6, 1),
(3, 6, 2),
(4, 7, 2),
(5, 10, 2),
(6, 19, 1),
(7, 19, 2),
(8, 22, 1),
(9, 23, 2),
(10, 24, 3),
(11, 24, 6),
(12, 25, 4),
(13, 26, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizador_cliente`
--

CREATE TABLE IF NOT EXISTS `cotizador_cliente` (
  `id_cot_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cot_cli` varchar(85) DEFAULT NULL,
  `apellidop_cot_cli` varchar(85) DEFAULT NULL,
  `apellidom_cot_cli` varchar(85) DEFAULT NULL,
  `rut_cot_cli` varchar(45) DEFAULT NULL,
  `fono_casa_cot_cli` varchar(45) DEFAULT NULL,
  `correo_cot_cli` text,
  `direccion_cot_cli` text,
  `celular_cot_cli` varchar(45) DEFAULT NULL,
  `fono_trabajo_cot_cli` varchar(45) DEFAULT NULL,
  `fono_contacto_cot_cli` varchar(45) DEFAULT NULL,
  `contacto_cot_cli` varchar(45) DEFAULT NULL,
  `comentario_cot_cli` text,
  `ciudad_cot_cli` varchar(45) DEFAULT NULL,
  `estado_cot_cli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cot_cli`),
  UNIQUE KEY `id_cot_cli_UNIQUE` (`id_cot_cli`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cotizador_cliente`
--

INSERT INTO `cotizador_cliente` (`id_cot_cli`, `nombre_cot_cli`, `apellidop_cot_cli`, `apellidom_cot_cli`, `rut_cot_cli`, `fono_casa_cot_cli`, `correo_cot_cli`, `direccion_cot_cli`, `celular_cot_cli`, `fono_trabajo_cot_cli`, `fono_contacto_cot_cli`, `contacto_cot_cli`, `comentario_cot_cli`, `ciudad_cot_cli`, `estado_cot_cli`) VALUES
(1, 'Osman Eduardo', 'Ahumada', 'VillafaÃ±a', '16092819', '090909', 'osman_ahumada@gmail.com', 'seminario#1223', '343434', '121211', '878787', '', 'esto es una prueba otra', 'La Serena', 0),
(2, 'jyuiuyuiy', 'uiyuiyuyiyiy', 'iyuiyiy', '978798', '654654', 'hsdg@ksdh.com', 'olijuoijuoij', '9809809', '098098908', '65464444', '', 'JSHDLASHDSASDHKASJD', 'Alto del Carmen', 0),
(3, 'jyuiuyuiy', 'uiyuiyuyiyiy', 'iyuiyiy', '978798', '654654', 'hsdg@ksdh.com', 'olijuoijuoij', '9809809', '098098908', '65464444', '', 'JSHDLASHDSASDHKASJD', 'Alto del Carmen', 0),
(4, 'Andres felipe', 'Aguirre ', 'Zepeda', '16054114-8', '123456', 'Agarra@Aguirre.com', 'los tulipanes#78', '87654321', '12345678', '654321', '', 'prueba de datos del cliente', 'Chanco', 0),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(8, 'BruÃ±o', 'Ravizzini', 'Asurmendia', '21958024-K', '687687', 'bruno@proyectarse.com', 'las acasias#4567', '909978', '1231313', '123454', '', 'esto es una prueba y los datos no tienen nada que ver con la realidad', 'Cerrillos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizador_cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizador_cotizacion` (
  `id_cot` int(11) NOT NULL AUTO_INCREMENT,
  `id_ven` int(11) DEFAULT NULL,
  `id_con` int(11) NOT NULL,
  `fecha_cot` datetime DEFAULT NULL,
  `uf_cot` float NOT NULL,
  `credito_cot` float DEFAULT NULL,
  `subsidio_cot` float DEFAULT NULL,
  `contado_cot` float DEFAULT NULL,
  `directo_cot` float DEFAULT NULL,
  `id_cliente_cot` int(11) NOT NULL,
  `id_mod` int(11) DEFAULT NULL,
  `valor_viv_cot` float NOT NULL,
  PRIMARY KEY (`id_cot`),
  UNIQUE KEY `id_cot_UNIQUE` (`id_cot`),
  KEY `id_ven_idx` (`id_ven`),
  KEY `id_cli_idx` (`id_cliente_cot`),
  KEY `id_mod_idx` (`id_mod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cotizador_cotizacion`
--

INSERT INTO `cotizador_cotizacion` (`id_cot`, `id_ven`, `id_con`, `fecha_cot`, `uf_cot`, `credito_cot`, `subsidio_cot`, `contado_cot`, `directo_cot`, `id_cliente_cot`, `id_mod`, `valor_viv_cot`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', 0, 3600, 300, 12000, 900, 1, 1, 4500),
(2, 1, 6, '0000-00-00 00:00:00', 0, 7200, 878, 777, 800, 2, 12, 8000),
(3, 1, 6, '0000-00-00 00:00:00', 0, 7200, 878, 777, 800, 3, 12, 8000),
(4, 1, 6, '0000-00-00 00:00:00', 0, 7200, 878, 777, 800, 4, 12, 8000),
(6, 1, 4, '2016-10-20 10:10:49', 26242.9, 704372, 98, 89, 78263.5, 4, 29, 782635),
(7, 1, 5, '2016-10-20 10:10:47', 26242.9, 20007.9, 88, 899, 2223.1, 1, 20, 22231),
(8, 1, 2, '2016-10-20 10:10:38', 26242.9, 8088.3, 756, 567, 898.7, 4, 28, 8987),
(9, 1, 3, '2016-10-20 10:10:07', 26242.9, 5400, 0, 0, 600, 1, 1, 6000),
(10, 1, 1, '2016-10-20 10:10:12', 26242.9, 70099.2, 0, 0, 7788.8, 1, 22, 77888),
(11, 1, 2, '2016-10-20 10:10:11', 26242.9, 7020, 0, 0, 780, 1, 14, 7800),
(12, 1, 1, '2016-10-20 10:10:47', 26242.9, 80100, 456456, 456546, 8900, 8, 31, 89000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizador_proyecto`
--

CREATE TABLE IF NOT EXISTS `cotizador_proyecto` (
  `idcotizador_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nom` varchar(150) DEFAULT NULL,
  `pro_cod` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idcotizador_proyecto`),
  UNIQUE KEY `idcotizador_proyecto_UNIQUE` (`idcotizador_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cotizador_proyecto`
--

INSERT INTO `cotizador_proyecto` (`idcotizador_proyecto`, `pro_nom`, `pro_cod`) VALUES
(1, 'Nova Balmaceda', '1'),
(2, 'Playa Blanca', '2'),
(3, 'Nova Hacienda', '3'),
(4, 'Alto Hacienda', '4'),
(5, 'El Santuario - Loteo', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizador_proyecto_modelo`
--

CREATE TABLE IF NOT EXISTS `cotizador_proyecto_modelo` (
  `idcotizador_proyecto_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `cotizador_pro_cod` int(11) DEFAULT NULL,
  `nombre_mod` varchar(45) DEFAULT NULL,
  `desde_mod` varchar(45) DEFAULT NULL,
  `estado_mod` int(11) NOT NULL COMMENT '0 disp 1 vendido',
  `tipo_mod` int(11) NOT NULL COMMENT '0 depto 1 casa',
  `planta_mod` varchar(150) DEFAULT NULL,
  `descripcion_mod` text,
  PRIMARY KEY (`idcotizador_proyecto_modelo`),
  UNIQUE KEY `idcotizador_proyecto_modelo_UNIQUE` (`idcotizador_proyecto_modelo`),
  KEY `cotizador_pro_cod_idx` (`cotizador_pro_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `cotizador_proyecto_modelo`
--

INSERT INTO `cotizador_proyecto_modelo` (`idcotizador_proyecto_modelo`, `cotizador_pro_cod`, `nombre_mod`, `desde_mod`, `estado_mod`, `tipo_mod`, `planta_mod`, `descripcion_mod`) VALUES
(1, 2, 'A', '3710', 0, 0, 'img/pblanca/plantas/a.jpg', '3 Dormitorios\r\n2 baños con vanitorios, ppal. en suite.\r\nCocina amoblada equipada independiente con encimera, horno, campana.\r\nPiso cerámico.\r\nLoggia.\r\nClosets.\r\nTerraza.'),
(2, 2, 'A1', '3710', 0, 0, 'img/pblanca/plantas/a1.jpg', '3 Dormitorios\r\n2 baños con vanitorios, ppal. en suite.\r\nCocina amoblada equipada independiente con encimera, horno, campana.\r\nPiso cerámico.\r\nLoggia.\r\nClosets.\r\nTerraza.'),
(3, 2, 'B', '3040', 0, 0, 'img/pblanca/plantas/b.jpg', '2 Dormitorios\r\n2 baños con vanitorios, ppal. en suite.\r\nCocina amoblada equipada americana con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nWalking closet en dorm. Ppal.\r\nTerraza.'),
(4, 2, 'B1', '3060', 0, 0, 'img/pblanca/plantas/b1.jpg', '2 Dormitorios\r\n2 baños con vanitorios, ppal. en suite.\r\nCocina amoblada equipada americana con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nWalking closet en dorm. Ppal.\r\nTerraza.'),
(5, 2, 'C', '--', 1, 0, 'img/pblanca/plantas/c.jpg', '2 Dormitorios\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nTerraza'),
(6, 2, 'C1', '2510', 0, 0, 'img/pblanca/plantas/c1.jpg', '2 Dormitorios\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nWalking closet en dorm. Ppal.\r\nTerraza.'),
(7, 2, 'C2', '2570', 0, 0, 'img/pblanca/plantas/c2.jpg', '2 Dormitorios\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nCloset.\r\nWalking closet en dorm. Ppal.\r\nTerraza.'),
(8, 2, 'C3', '2490', 0, 0, 'img/pblanca/plantas/c2.jpg', '2 Dormitorios\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nCloset.\r\nWalking closet en dorm. Ppal.\r\nTerraza.'),
(9, 2, 'D', '2460', 0, 0, 'img/pblanca/plantas/d.jpg', '2 Dormitorios\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nTerraza.'),
(10, 2, 'D1', '--', 1, 0, 'img/pblanca/plantas/d1.jpg', '1 Dormitorio.\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nTerraza.'),
(11, 2, 'E', '3050', 0, 0, 'img/pblanca/plantas/e.jpg', '1 Dormitorio.\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nTerraza.'),
(12, 2, 'E1', '3050', 0, 0, 'img/pblanca/plantas/e.jpg', '1 Dormitorio.\r\n1 baño con vanitorio.\r\nCocina americana amoblada equipada con encimera, horno, campana, lavadora.\r\nPiso cerámico.\r\nClosets.\r\nTerraza.'),
(13, 1, 'A1', '3200', 1, 0, 'img/nbalmaceda/plantas/a1_lg.jpg', '2 Dormitorios y sala de estar (posible 3er dormitorio)\r\n2 Baños'),
(14, 1, 'A2', '3500', 0, 0, 'img/nbalmaceda/plantas/a2_lg.jpg', '3 Dormitorios\r\n2 Baños'),
(15, 1, 'A3', '3200', 0, 0, 'img/nbalmaceda/plantas/a3_lg.jpg', '2 Dormitorios y sala de estar (posible 3er dormitorio)\r\n2 Baños'),
(16, 1, 'A4', '3300', 0, 0, 'img/nbalmaceda/plantas/a4_lg.jpg', '2 Dormitorios y sala de estar (posible 3er dormitorio)\r\n2 Baños'),
(17, 1, 'A5', '3400', 1, 0, 'img/nbalmaceda/plantas/a5_lg.jpg', '3 Dormitorios\r\n2 Baños'),
(18, 1, 'A6', '3760', 1, 0, 'img/nbalmaceda/plantas/a6_lg.jpg', '3 Dormitorios y sala de estar (posible 4to dormitorio)\r\n2 Baños'),
(19, 1, 'B1', '3000', 1, 0, 'img/nbalmaceda/plantas/b1_lg.jpg', '2 Dormitorios\r\n2 Baños'),
(20, 1, 'B2', '2900', 0, 0, 'img/nbalmaceda/plantas/b2_lg.jpg', '2 Dormitorios\r\n2 Baños'),
(21, 1, 'B3', '3000', 1, 0, 'img/nbalmaceda/plantas/b3_lg.jpg', '2 Dormitorios\r\n2 Baños'),
(22, 3, 'Santa Gracia', '2300', 0, 1, 'img/nhacienda/plantas/sgracia_lg.jpg', '2 Pisos\r\n3 Dormitorios y 2 Baños'),
(23, 3, 'Lambert', '2080', 0, 1, 'img/nhacienda/plantas/lambert_lg.jpg', '2 Pisos\r\n3 Dormitorios y 2 Baños'),
(24, 3, 'El Pangue', '2400', 0, 1, 'img/nhacienda/plantas/elpangue_lg.jpg', '1 Piso\r\n3 Dormitorios y 2 Baños'),
(25, 3, 'El Pangue-M', '2910', 0, 1, 'img/nhacienda/plantas/panguem_lg.jpg', '2 Pisos\r\n3 Dormitorios y 2 Baños'),
(26, 4, 'A-A1', '2350', 0, 0, 'img/ahacienda/plantas/a1_lg.jpg', '3 Dormitorios\r\n2 Baños\r\n\r\n- Cocina equipada\r\n- Dormitorios alfombrados\r\n- Pisos de cerámico en living, comedor, baños, cocina, terrazas y pasillo.\r\n- Loggia incorporada\r\n- Closet terminados.\r\n- Terrazas.\r\n- Ventanas de PVC.'),
(27, 4, 'B-B1', '1950', 0, 0, 'img/ahacienda/plantas/b1_lg.jpg', '3 Dormitorios\r\n1 Baño\r\n\r\n- Cocina equipada\r\n- Dormitorios alfombrados\r\n- Pisos de cerámico en living, comedor, baños, cocina, terrazas y pasillo.\r\n- Loggia incorporada\r\n- Closet terminados.\r\n- Terrazas.\r\n- Ventanas de PVC.'),
(28, 4, 'C-C1', '1740', 0, 0, 'img/ahacienda/plantas/c1_lg.jpg', '2 Dormitorios\r\n1 Baño\r\n\r\n- Cocina equipada\r\n- Dormitorios alfombrados\r\n- Pisos de cerámico en living, comedor, baños, cocina, terrazas y pasillo.\r\n- Loggia incorporada\r\n- Closet terminados.\r\n- Terrazas.\r\n- Ventanas de PVC.'),
(29, 5, 'Chilena', '5350', 0, 1, 'img/santuario/plantas/chilena_lg.jpg', '2 Pisos\r\n3 Dormitorios y 2 Baños'),
(30, 5, 'Mediterráneo', '5350', 0, 1, 'img/santuario/plantas/mediterranea_lg.jpg', '2 Pisos\r\n3 Dormitorios y 2 Baños'),
(31, 5, 'Provenzal', '5350', 0, 1, 'img/santuario/plantas/provenzal_lg.jpg', '2 Piso\r\n3 Dormitorios y 3 Baños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizador_tipo_contrato`
--

CREATE TABLE IF NOT EXISTS `cotizador_tipo_contrato` (
  `id_con` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_con` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_con`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cotizador_tipo_contrato`
--

INSERT INTO `cotizador_tipo_contrato` (`id_con`, `nombre_con`) VALUES
(1, 'CON SUBSIDIO'),
(2, 'POSTULANDO SUBSIDIO'),
(3, 'CREDITO HIPOTECARIO'),
(4, 'CONTADO EN U.F.'),
(5, 'CONTADO EN PESOS'),
(6, 'CON LEASING');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizador_vendedor`
--

CREATE TABLE IF NOT EXISTS `cotizador_vendedor` (
  `id_ven` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ven` varchar(145) DEFAULT NULL,
  `usuario_ven` varchar(10) DEFAULT NULL,
  `clave_ven` varchar(15) DEFAULT NULL,
  `correo_ven` varchar(100) DEFAULT NULL,
  `perfil_ven` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ven`),
  UNIQUE KEY `id_ven_UNIQUE` (`id_ven`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `cotizador_vendedor`
--

INSERT INTO `cotizador_vendedor` (`id_ven`, `nombre_ven`, `usuario_ven`, `clave_ven`, `correo_ven`, `perfil_ven`) VALUES
(1, 'osman ahumada', 'osman', 'vende', 'osman@nova.cl', 0),
(2, 'bruno ravizzini', 'bruno', 'admin', 'bruno@nova.cl', 1),
(28, 'bro', 'bro', 'bro', 'bro@proyectarse.com', 0),
(29, 'kudsgfÃ‘AI', 'HJSDGFJSDF', 'OIU', 'HNDSFV@KJASDG.COM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia_estado_noticia`
--

CREATE TABLE IF NOT EXISTS `noticia_estado_noticia` (
  `id_est_not` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_est_not` text,
  PRIMARY KEY (`id_est_not`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `noticia_estado_noticia`
--

INSERT INTO `noticia_estado_noticia` (`id_est_not`, `nombre_est_not`) VALUES
(1, 'Activa'),
(2, 'Inactiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia_galeria_noticia`
--

CREATE TABLE IF NOT EXISTS `noticia_galeria_noticia` (
  `id_gal_not` int(11) NOT NULL AUTO_INCREMENT,
  `id_not` int(11) NOT NULL,
  `nombre_gal_not` text,
  `orden_gal_not` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_gal_not`,`id_not`),
  KEY `fk_noticia_galeria_noticia_noticia_noticia1` (`id_not`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `noticia_galeria_noticia`
--

INSERT INTO `noticia_galeria_noticia` (`id_gal_not`, `id_not`, `nombre_gal_not`, `orden_gal_not`) VALUES
(1, 1, '02.jpg', 1),
(2, 1, '04.jpg', 2),
(3, 1, '03.jpg', 3),
(4, 2, 'zona1.jpg', 4),
(5, 2, 'zona2.jpg', 5),
(6, 2, 'zona3.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia_noticia`
--

CREATE TABLE IF NOT EXISTS `noticia_noticia` (
  `id_not` int(11) NOT NULL AUTO_INCREMENT,
  `id_tip_not` int(11) NOT NULL,
  `id_est_not` int(11) NOT NULL,
  `nombre_not` text,
  `fecha_not` date DEFAULT NULL,
  `portada_not` text,
  `resumen_not` text,
  `descripcion_not` text,
  PRIMARY KEY (`id_not`,`id_tip_not`,`id_est_not`),
  KEY `fk_noticia_noticia_noticia_tipo_noticia1` (`id_tip_not`),
  KEY `fk_noticia_noticia_noticia_estado_noticia1` (`id_est_not`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `noticia_noticia`
--

INSERT INTO `noticia_noticia` (`id_not`, `id_tip_not`, `id_est_not`, `nombre_not`, `fecha_not`, `portada_not`, `resumen_not`, `descripcion_not`) VALUES
(1, 1, 1, 'Inmobiliaria Nova en Exponorte', '2015-07-25', '01.jpg', 'Inmobiliaria Nova está  participando en la Exponorte organizada por la Cámara Chilena de la Construcción sede La Serena, que se realiza en la ciudad de Antofagasta entre el jueves 23 y el domingo 26 de Julio.', 'Dicha feria se realiza en el Mall de esta ciudad en horario continuado desde las 9:45 a las 22 hrs. y ha tenido una excelente convocatoria.'),
(2, 1, 1, '30 Expo Tour de Zona Inmobiliaria de Publimetro', '2015-07-25', 'zona.jpg', 'Aprovechando las vacaciones de invierno desde hoy 24 al 26 de julio se desarrolla en Mall Plaza La Serena la Expo Tour Inmobiliaria de Zona Inmobiliaria de Publimetro, en la que Inmobiliaria Nova está participando con atractivos descuentos.', 'Aprovechando las vacaciones de invierno desde hoy 24 al 26 de julio se desarrolla en Mall Plaza La Serena la Expo Tour Inmobiliaria de Zona Inmobiliaria de Publimetro, en la que Inmobiliaria Nova está participando con atractivos descuentos.'),
(3, 1, 1, 'Consulte por descuentos sólo por el mes de Agosto', '2015-07-25', 'adhesivo panel nova-01.jpeg', 'Para todos los clientes que firmen promesa de compraventa durante el mes de Agosto en cualquiera de nuestros proyectos, nuestra empresa les entregará atractivos descuentos. ', '<span style="font-size:14px"><strong>Venga a visitarnos y consulte por el suyo!!!!!</strong></span>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia_tipo_noticia`
--

CREATE TABLE IF NOT EXISTS `noticia_tipo_noticia` (
  `id_tip_not` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tip_not` text,
  PRIMARY KEY (`id_tip_not`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `noticia_tipo_noticia`
--

INSERT INTO `noticia_tipo_noticia` (`id_tip_not`, `nombre_tip_not`) VALUES
(1, 'General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_estado_usuario`
--

CREATE TABLE IF NOT EXISTS `usuario_estado_usuario` (
  `id_est_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_est_usu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_est_usu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario_estado_usuario`
--

INSERT INTO `usuario_estado_usuario` (`id_est_usu`, `nombre_est_usu`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_modulo`
--

CREATE TABLE IF NOT EXISTS `usuario_modulo` (
  `id_mod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_mod` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id_mod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuario_modulo`
--

INSERT INTO `usuario_modulo` (`id_mod`, `nombre_mod`) VALUES
(10, 'Noticias'),
(14, 'Contacto'),
(15, 'Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_usuario`
--

CREATE TABLE IF NOT EXISTS `usuario_usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `id_est_usu` int(11) NOT NULL,
  `nombre_usu` varchar(200) DEFAULT NULL,
  `usuario_usu` varchar(50) DEFAULT NULL,
  `contrasena_usu` varchar(50) DEFAULT NULL,
  `correo_usu` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_usu`,`id_est_usu`),
  KEY `fk_usuario_estado_usuario1` (`id_est_usu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario_usuario`
--

INSERT INTO `usuario_usuario` (`id_usu`, `id_est_usu`, `nombre_usu`, `usuario_usu`, `contrasena_usu`, `correo_usu`) VALUES
(2, 1, 'Usuario', 'admin', '12345', 'correo@gmail.com'),
(1, 1, 'Administracion', 'admin_nova', 'adm_nov', 'rodrigo.gomez.cerda@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_usuario_modulo`
--

CREATE TABLE IF NOT EXISTS `usuario_usuario_modulo` (
  `id_usu` int(11) NOT NULL,
  `id_mod` int(11) NOT NULL,
  PRIMARY KEY (`id_usu`,`id_mod`),
  KEY `fk_usuario_has_modulo_modulo1` (`id_mod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_usuario_modulo`
--

INSERT INTO `usuario_usuario_modulo` (`id_usu`, `id_mod`) VALUES
(1, 10),
(1, 14),
(1, 15),
(2, 10),
(2, 14),
(2, 15);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizador_cotizacion`
--
ALTER TABLE `cotizador_cotizacion`
  ADD CONSTRAINT `id_cli` FOREIGN KEY (`id_cliente_cot`) REFERENCES `cotizador_cliente` (`id_cot_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_mod` FOREIGN KEY (`id_mod`) REFERENCES `cotizador_proyecto_modelo` (`idcotizador_proyecto_modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_ven` FOREIGN KEY (`id_ven`) REFERENCES `cotizador_vendedor` (`id_ven`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cotizador_proyecto_modelo`
--
ALTER TABLE `cotizador_proyecto_modelo`
  ADD CONSTRAINT `cotizador_pro_cod` FOREIGN KEY (`cotizador_pro_cod`) REFERENCES `cotizador_proyecto` (`idcotizador_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
