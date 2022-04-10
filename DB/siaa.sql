-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2022 a las 04:23:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siaa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `ID` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `abono_1` int(11) DEFAULT NULL,
  `abono_2` int(11) DEFAULT NULL,
  `abono_3` int(11) DEFAULT NULL,
  `abono_4` int(11) DEFAULT NULL,
  `abono_5` int(11) DEFAULT NULL,
  `abono_6` int(11) DEFAULT NULL,
  `abono_7` int(11) DEFAULT NULL,
  `abono_8` int(11) DEFAULT NULL,
  `abono_9` int(11) DEFAULT NULL,
  `abono_10` int(11) DEFAULT NULL,
  `abono_11` int(11) DEFAULT NULL,
  `abono_12` int(11) DEFAULT NULL,
  `abono_13` int(11) DEFAULT NULL,
  `abono_14` int(11) DEFAULT NULL,
  `abono_15` int(11) DEFAULT NULL,
  `abono_16` int(11) DEFAULT NULL,
  `abono_17` int(11) DEFAULT NULL,
  `abono_18` int(11) DEFAULT NULL,
  `abono_19` int(11) DEFAULT NULL,
  `abono_20` int(11) DEFAULT NULL,
  `abono_21` int(11) DEFAULT NULL,
  `abono_22` int(11) DEFAULT NULL,
  `abono_23` int(11) DEFAULT NULL,
  `abono_24` int(11) DEFAULT NULL,
  `abono_25` int(11) DEFAULT NULL,
  `abono_26` int(11) DEFAULT NULL,
  `abono_27` int(11) DEFAULT NULL,
  `abono_28` int(11) DEFAULT NULL,
  `abono_29` int(11) NOT NULL,
  `abono_30` int(11) NOT NULL,
  `abono_31` int(11) NOT NULL,
  `abono_32` int(11) NOT NULL,
  `nabonos` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `abonos`
--

INSERT INTO `abonos` (`ID`, `id_cliente`, `abono_1`, `abono_2`, `abono_3`, `abono_4`, `abono_5`, `abono_6`, `abono_7`, `abono_8`, `abono_9`, `abono_10`, `abono_11`, `abono_12`, `abono_13`, `abono_14`, `abono_15`, `abono_16`, `abono_17`, `abono_18`, `abono_19`, `abono_20`, `abono_21`, `abono_22`, `abono_23`, `abono_24`, `abono_25`, `abono_26`, `abono_27`, `abono_28`, `abono_29`, `abono_30`, `abono_31`, `abono_32`, `nabonos`) VALUES
(1, 1, 200, 350, 700, 750, 2500, 2490, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 6),
(2, 10, 440, 440, 440, 1320, 440, 440, 440, 1030, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 8),
(3, 10, 500, 200, 300, 500, 300, 200, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `codigo_articulo` int(8) NOT NULL,
  `nombre` text NOT NULL,
  `precio` int(6) NOT NULL,
  `descripcion` text NOT NULL,
  `stok` int(2) NOT NULL DEFAULT 0,
  `estatus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`codigo_articulo`, `nombre`, `precio`, `descripcion`, `stok`, `estatus`) VALUES
(10000001, 'Base para cama individual de color', 800, 'Base para cama individual fabricada en madera reciclada con recubrimiento de laca de color', 9, 1),
(10000002, 'Silla de Madera', 350, 'Silla de madera, estática sin chojín de apoyo ', 10, 1),
(10000003, 'Sala Arizona', 5730, 'Sala ocasional estilo Arizona color azul', 10, 1),
(10000004, 'Sala Grande Esquinera', 5790, 'Sala esquinera de dos piezas color marfil', 10, 1),
(10000005, 'Sala Grande 3 en 1', 7950, 'Sala de tres piezas color caoba set de 3 en 1', 10, 1),
(10000006, 'Sala marlen esquinera de cuero', 5550, 'Sala de cuero sintético color negro estilo marlen', 10, 1),
(10000007, 'Ropero Choco Hermosillo', 13500, 'Ropero a dos puertas color choco con cajonera y luna ', 2, 1),
(10000008, 'Lavadora Mirage 22 Kg', 7990, 'Lavadora Mirage se 22 Kg color blanco con tapa de cristal', 1, 1),
(10000009, 'Estufa Across 20´SILVER', 4990, 'Estufa de 4 parrillas color silver de la marca across', 3, 1),
(10000010, 'Refrigerador MABE 10´Grafito', 7290, 'Refrigerador de la marca mabe de 10\" color grafito', 1, 1),
(10000011, 'Refrigerador Daewoo Winie 9´', 6990, 'Refrigerador de la marca daewoo de 9\" que no genera escarcha', 1, 1),
(10000012, 'CAMPANA MABE 30 NEGRA', 2150, 'Campana para estufa color negro de la marca mabe', 2, 1),
(10000013, 'CAMPANA MABE 30 GRAFITO', 2150, 'Campana para estufa color grafito de la marca mabe', 1, 1),
(10000014, 'Cocina Coco 2.4 mts', 9830, 'ALACENA 2.40 CMS GABINETE DE PISO 80 CMS TARJA 80 CMS', 1, 1),
(10000015, 'Cocina Londres Esquinera', 3490, 'cocina por módulos, cubierta en granito procesado. NO INCLUYE ESTUFA NI CAMPANA', 1, 1),
(10000016, 'Cocina Armani Completa', 11290, 'MODULOS QUE INCLUYE: GABINETES: 30CMS- TARJA1 METRO- 60CMS- ESQUINERO 80 CMS- 40 CMS- 80 CMS ALACENAS: 30 CMS- 60 CMS-', 1, 1),
(10000017, 'Espejo Pandora Gris', 3690, 'El espejo es corredizo', 1, 1),
(10000018, 'Alacena Campanero España-Chocolate', 999, 'Estructura de madera de pino. Puertas de MDF acabadas con laca de poliuretano. Jaladeras y bisagras metálicas.', 2, 1),
(10000019, 'Antecomedor Bary - Bronce Tubular - 6sillas', 6499, 'Resistente material tubular. Cubierta de formica diseño mármol. Tela de chenille, suavidad y resistencia.', 1, 1),
(10000020, 'Antecomedor Vancuver-gris tubular 4 sillas', 4999, 'Resistente material tubular. Cubierta de formica diseño madera. Tela jaquard, suavidad y resistencia.', 1, 1),
(10000021, 'Antecomedor Vancouver - Chocolate Tubular - 6 sillas', 5050, 'Resistente material tubular. Cubierta de ocumé.. Tela de jaquard, suavidad y resistencia.', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(6) NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `direccion` text NOT NULL,
  `no` text NOT NULL,
  `colonia` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `nombre`, `apellidos`, `direccion`, `no`, `colonia`, `telefono`, `estatus`) VALUES
(1, 'Martin Alberto', 'Perez Hernandez', 'segunda de lomas ', '85', 'Zacatecas', 2147483647, 1),
(8, 'Jose Alejandro', 'trejo reyes', 'bugambilias', '99', 'lazaro cardenas', 2147483647, 1),
(9, 'Martin Alberto', 'Perez Hernandez', 'segunda de lomas ', '26', 'Zacatecas', 564789321, 1),
(10, 'Publico en general', 'NA', 'Conocido', '1', 'Conocida', 555123456, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_abonos` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `plazos` int(11) NOT NULL,
  `id_articulo_1` int(11) NOT NULL,
  `id_articulo_2` int(11) DEFAULT NULL,
  `id_articulo_3` int(11) DEFAULT NULL,
  `id_articulo_4` int(11) DEFAULT NULL,
  `id_articulo_5` int(11) DEFAULT NULL,
  `id_articulo_6` int(11) DEFAULT NULL,
  `id_articulo_7` int(11) DEFAULT NULL,
  `id_articulo_8` int(11) DEFAULT NULL,
  `id_articulo_9` int(11) DEFAULT NULL,
  `id_articulo_10` int(11) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `id_cliente`, `id_abonos`, `saldo`, `plazos`, `id_articulo_1`, `id_articulo_2`, `id_articulo_3`, `id_articulo_4`, `id_articulo_5`, `id_articulo_6`, `id_articulo_7`, `id_articulo_8`, `id_articulo_9`, `id_articulo_10`, `estatus`) VALUES
(1, 1, 1, 6990, 6, 10000011, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0),
(2, 10, 2, 4990, 12, 10000009, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 10, 3, 5730, 12, 10000003, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `ID` int(11) NOT NULL,
  `usuario` int(11) UNSIGNED NOT NULL,
  `descripcion` text NOT NULL,
  `descripcion_1` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`ID`, `usuario`, `descripcion`, `descripcion_1`, `fecha`) VALUES
(1, 0, 'Nuevo Producto', 10000018, '2022-03-29 16:49:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `USUARIO` text NOT NULL,
  `PASS` text NOT NULL,
  `NOMBRE` text NOT NULL,
  `ESTATUS` int(1) NOT NULL DEFAULT 1,
  `autorizacion` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `PASS`, `NOMBRE`, `ESTATUS`, `autorizacion`) VALUES
(1, 'Admin', 'e714f5e09b26f37bb36f63f24789a3b5', 'Administrador', 1, 1),
(2, 'Manuel', '987654', 'Juan Manuel', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `cuenta` int(11) NOT NULL,
  `id_articulo_1` int(11) NOT NULL,
  `id_articulo_2` int(11) DEFAULT NULL,
  `id_articulo_3` int(11) DEFAULT NULL,
  `id_articulo_4` int(11) DEFAULT NULL,
  `id_articulo_5` int(11) DEFAULT NULL,
  `id_articulo_6` int(11) DEFAULT NULL,
  `id_articulo_7` int(11) DEFAULT NULL,
  `id_articulo_8` int(11) DEFAULT NULL,
  `id_articulo_9` int(11) DEFAULT NULL,
  `id_articulo_10` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `id_cliente` (`id_cliente`) USING BTREE;

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`codigo_articulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_abonos` (`id_abonos`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `codigo_articulo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000003;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cuentas_ibfk_2` FOREIGN KEY (`id_abonos`) REFERENCES `abonos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
