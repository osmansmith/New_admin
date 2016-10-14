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
