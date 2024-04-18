-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2024 a las 18:24:04
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
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `rutai` varchar(255) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `sinop` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `nombre`, `archivo`, `ruta`, `imagen`, `rutai`, `tipo`, `sinop`, `usuario`, `materia`) VALUES
(4, 'Guia Ingenieria de sofware', '65e08fc17d87b_Ingenieria-de-Software.pdf', 'files/65e08fc17d87b_Ingenieria-de-Software.pdf', '65e08fc17d874_978968243930.jpg', 'image/65e08fc17d874_978968243930.jpg', '6', 'La física (del griego φύσις physis, que significa «naturaleza») es la ciencia que estudia las propiedades y el comportamiento de la materia y la energía, así como el tiempo y el espacio. En términos más generales, es el análisis general de la naturaleza, llevado a cabo con el fin de entender cómo el mundo y el universo se comportan. La física estudia, por lo tanto, un amplio rango de campos y fenómenos naturales, desde las partículas subatómicas y sus interacciones, hasta la formación, origen, futuro y evolución del Universo, pasando por una multitud de fenómenos naturales cotidianos.', 1, 10),
(5, 'Musica', '65e17374a6c9e_Mapa Mental Lluvia de Ideas Orgánico Colorido.pdf', 'files/65e17374a6c9e_Mapa Mental Lluvia de Ideas Orgánico Colorido.pdf', '65e17374a6c95_uni-removebg-preview (1).png', 'image/65e17374a6c95_uni-removebg-preview (1).png', '2', 'La música (del griego: μουσική [τέχνη] - mousikē [téchnē], «el arte de las musas») es, según la definición tradicional del término, el arte de crear y organizar sonidos y silencios respetando los principios fundamentales de la melodía, la armonía y el ritmo, mediante la intervención de complejos procesos psicoanímicos. El concepto de música ha ido evolucionando desde su origen en la Antigua Grecia, en que se reunía sin distinción a la poesía, la música y la danza como arte unitario. Desde hace varias décadas se ha vuelto más compleja la definición de qué es y qué no es la música, ya que destacados compositores en el marco de diversas experiencias artísticas fronterizas han realizado obras que, si bien podrían considerarse musicales, expanden los límites de la definición de este arte.', 2, 1),
(9, 'Radio Disney', '65ff27d3e40e8_descarga.png', 'files/65ff27d3e40e8_descarga.png', '65ff27d3e40e1_descarga.png', 'image/65ff27d3e40e1_descarga.png', '7', 'Radio Disney fue una estación radial estadounidense perteneciente a The Walt Disney Company y operado por Walt Disney Television a través de Disney Channel Worldwide, que reproducía música y otros', 3, 8),
(11, 'Juicios orales', '65ff29e3b14e6_jucioso.jpg', 'files/65ff29e3b14e6_jucioso.jpg', '65ff29e3b14dc_jucioso.jpg', 'image/65ff29e3b14dc_jucioso.jpg', '1', 'El Juicio Oral es como coloquialmente se conoce al nuevo sistema penal acusatorio vigente en México a partir del 19 de junio del 2008. Se ha llamado Juicio Oral porque el sistema se caracteriza por desahogar la etapa central del procedimiento de viva voz ante un juez o tribunal que entiende del litigio.', 4, 14),
(12, 'Luis Enrique', '661336f08c065_Producto final_Redacción_E1LISC801.docx', 'files/661336f08c065_Producto final_Redacción_E1LISC801.docx', '661336f08c062_b64c37e3-bdba-4c0e-a39d-6c328d810a16.jpg', 'image/661336f08c062_b64c37e3-bdba-4c0e-a39d-6c328d810a16.jpg', '2', 'es mi proyecto universitario', 2, 25);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `archivos_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `archivos_usuarios` (
`id` int(11)
,`username` varchar(50)
,`archivo` int(11)
,`nombre` varchar(255)
,`rutai` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `nombre`, `cantidad`, `usuario`) VALUES
(1, 'nombre', 0, 2),
(2, 'goma', 20, 3),
(3, 'zacapuntas', 30, 4),
(4, 'tijeras', 40, 4),
(5, 'desodorante', 50, 4),
(6, 'agua', 60, 2),
(7, 'tierra', 70, 2),
(8, 'fuego', 80, 3),
(9, 'aire', 90, 2),
(10, 'avatar', 100, 3),
(11, 'super', 110, 3),
(12, 'latino', 120, 2),
(13, 'bolsa', 130, 4),
(14, 'mochila', 140, 4),
(15, 'laptop', 150, 2),
(16, 'cobija', 160, 3),
(17, 'cobertor', 170, 3),
(18, 'cortina', 180, 4),
(19, 'ventana', 190, 3),
(20, 'tenis', 200, 4),
(21, 'zapatos', 210, 2),
(22, 'almahada', 220, 2),
(23, 'crema', 230, 2),
(24, 'queso', 240, 2),
(25, 'jamon', 250, 4),
(26, 'papel', 260, 0),
(27, 'caja', 270, 0),
(28, 'carro', 280, 0),
(29, 'muñeco', 290, 0),
(30, 'pie', 300, 0),
(31, 'pierna', 310, 0),
(32, 'mano', 320, 0),
(33, 'brazo', 330, 0),
(34, 'calcetin', 340, 0),
(35, 'playera', 350, 0),
(36, 'sueter', 360, 0),
(37, 'termo', 370, 0),
(38, 'flores', 380, 0),
(39, 'café', 390, 0),
(40, 'azul', 400, 0),
(41, 'rojo', 410, 0),
(42, 'verde', 420, 0),
(43, 'negro', 430, 0),
(44, 'vaso', 440, 0),
(45, 'betterware', 450, 0),
(46, 'cara', 460, 0),
(47, 'nave', 470, 0),
(48, 'navaja', 480, 0),
(49, 'psitola', 490, 0),
(50, 'cancion', 500, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licen`
--

CREATE TABLE `licen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `licen`
--

INSERT INTO `licen` (`id`, `nombre`) VALUES
(1, 'Ciencias Sociales y administrativas'),
(2, 'Ciencias de la salud'),
(3, 'Artes y Humanidades'),
(4, 'Ingenierias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sublicen`
--

CREATE TABLE `sublicen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `licen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sublicen`
--

INSERT INTO `sublicen` (`id`, `nombre`, `licen`) VALUES
(1, 'Administracion de Empresas', 1),
(2, 'Ciencias Politicas y Gestion Publica', 1),
(3, 'Comercio Internacional y Aduanas', 1),
(4, 'Comercio y logica Internacional', 1),
(5, 'Comercio y Negocios Internacionales', 1),
(6, 'Comunicacion', 1),
(7, 'Comunicacion y Decnologias Digitales', 1),
(8, 'Contaduria', 1),
(9, 'Contaduria y Finazas', 1),
(10, 'Criminologia', 1),
(11, 'Derecho', 1),
(12, 'Economia y Finanzas', 1),
(13, 'Gastronimia', 1),
(14, 'Mercadotecnia', 1),
(15, 'Seguridad Publica', 1),
(16, 'Enfermeria', 2),
(17, 'Nutricion', 2),
(18, 'Psicologia', 2),
(19, 'Quimico Farmaceutico Biologo', 2),
(20, 'Terapia Fisica', 2),
(21, 'Profesional Asociado en Radiologia e Imagen', 2),
(22, 'Diseño Grafico', 3),
(23, 'Pedagogia', 3),
(24, 'Ingenieria en Sistemas Computacionales', 4),
(25, 'Ingenieria Industrial', 4),
(26, 'Arquitectura', 4),
(27, 'Ingenieria Civil', 4),
(28, 'Ingenieria Ambiental', 4),
(29, 'Ingenieria Mecanica y Electrica', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'luis', 'luis123'),
(2, '1232100633', 'luis123univer*'),
(3, '1318283117', 'luis13upvt*'),
(4, '1232100643', 'aranza43univer*');

-- --------------------------------------------------------

--
-- Estructura para la vista `archivos_usuarios`
--
DROP TABLE IF EXISTS `archivos_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `archivos_usuarios`  AS SELECT `usuarios`.`id` AS `id`, `usuarios`.`username` AS `username`, `archivo`.`id` AS `archivo`, `archivo`.`nombre` AS `nombre`, `archivo`.`rutai` AS `rutai` FROM (`usuarios` join `archivo` on(`usuarios`.`id` = `archivo`.`usuario`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `materia` (`materia`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `licen`
--
ALTER TABLE `licen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sublicen`
--
ALTER TABLE `sublicen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `licen` (`licen`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `licen`
--
ALTER TABLE `licen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sublicen`
--
ALTER TABLE `sublicen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `archivo_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `archivo_ibfk_2` FOREIGN KEY (`materia`) REFERENCES `sublicen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
